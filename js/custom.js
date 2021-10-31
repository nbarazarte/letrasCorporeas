//IMPORTANTE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!Para deshabiltar por defecto el boton de añadir al carrito
//en la linea 249 de jQueryDoSomethingAJAX() se habilita nuevamente!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(document.getElementById('rotulo') !== null){
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
}

function deshabiltarBotonCart(){
    //console.log('deshabilita el boton');
    document.getElementsByName("add-to-cart")[0].style.visibility = 'hidden';    
    document.getElementById('precioOtraVez').innerHTML = "";   
}

function jQueryDoSomethingAJAX() {
    // Preparamos los parámetros para la petición..
    //var formulario = document.forms.namedItem("customizerNeon");

    var rotulo = document.getElementById('rotulo').value
    var alto = document.getElementById('alto').value;
    var ancho = document.getElementById('ancho').value;

    var x = document.getElementById("letra").selectedIndex;
    var y = document.getElementById("letra").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var fuenteLetrasText = y[x].text;
    var fuenteLetras = y[x].value;

    var x = document.getElementById("tiempos").selectedIndex;
    var y = document.getElementById("tiempos").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var tiemposEntregaText = y[x].text;
    var tiemposEntrega = y[x].value;

    var x = document.getElementById("letraCorporea").selectedIndex;
    var y = document.getElementById("letraCorporea").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var letraCorporeaText = y[x].text;
    var letraCorporea = y[x].value;

    var anchocm = document.getElementById("ancho").value;//ancho;///72/0.393701;
    var alturacm = document.getElementById("altura").value;

    //ancho del SVG:
    var anchoSVG = document.getElementById('anchoSVG').value;
    var anchoSVGCorreccion = anchoSVG * 0.76;
   
    document.getElementById('impuesto').value = document.getElementById('iva_letras').value;

    

    //Valores que selecciona el usuario:
    var acabadoAluminio = document.getElementsByName("acabadoAluminio");
    var txt = "";
    var i;
    for (i = 0; i < acabadoAluminio.length; i++) {
        if (acabadoAluminio[i].checked) {
          txt = acabadoAluminio[i].value;
        }
    }

    var acabado = txt;

   var separacionAluminio = document.getElementsByName("separacionAluminio");
    var txt = "";
    var i;
    for (i = 0; i < separacionAluminio.length; i++) {
        if (separacionAluminio[i].checked) {
          txt = separacionAluminio[i].value;
        }
    }

    var separacion = txt;

   var opcionesAluminio = document.getElementsByName("opcionesAluminio");
    var txt = "";
    var i;
    for (i = 0; i < opcionesAluminio.length; i++) {
        if (opcionesAluminio[i].checked) {
          txt = opcionesAluminio[i].value;
        }
    }

    var opciones = txt;

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;

    //alert(letraCorporea);
    //alert(opciones);
    //Para calcular el precio segun la letra corporea:

    if(letraCorporea == "aluminioForm"){

        //Aluminio Sin Iluminar:
        var $a = Number(document.getElementById("precio_aluminio").value);
        var $b = Number(document.getElementById("precio_aluminio_mano_de_obra").value);
        var $c = Number(document.getElementById("precio_aluminio_pintura").value);
        //Aluminio retroiluminadas:
        var $d = Number(document.getElementById('precio_aluminio_retroiluminado').value);
        var $e = Number(document.getElementById('precio_aluminio_retroiluminado_mano_de_obra').value);
        var $f = Number(document.getElementById('precio_aluminio_retroiluminado_pintura').value);
        var $g = Number(document.getElementById('precio_aluminio_retroiluminado_metacrilato10mm').value);
        var $h = Number(document.getElementById('precio_aluminio_retroiluminado_led').value);
        var $i = Number(document.getElementById('precio_aluminio_retroiluminado_transformador').value);
        var $j = Number(document.getElementById('precio_aluminio_retroiluminado_corte_cnc').value);
        //Aluminio Iluminadas frontalmente:
        var $k = Number(document.getElementById('precio_aluminio_iluminado_frontal').value);
        var $l = Number(document.getElementById('precio_aluminio_iluminado_frontal_mano_de_obra').value);
        var $m = Number(document.getElementById('precio_aluminio_iluminado_frontal_pintura').value);
        var $n = Number(document.getElementById('precio_aluminio_iluminado_frontal_metacrilato3mm').value);
        var $o = Number(document.getElementById('precio_aluminio_iluminado_frontal_junquillo').value);
        var $p = Number(document.getElementById('precio_aluminio_iluminado_frontal_led').value);
        var $q = Number(document.getElementById('precio_aluminio_iluminado_frontal_transformador').value);
        var $r = Number(document.getElementById('precio_aluminio_iluminado_frontal_corte_cnc').value);

        if(opciones == "Sin Luz" ){

            var subTotalprecio  = Number(($a + $b + $c ) * 4);
        }

        if(opciones == "Retroiluminado" ){
            
            var subTotalprecio  = ($d + $e + $f + $g + $h + $i + $j) * 4;
        }

        if(opciones == "Iluminación Frontal" ){

            var subTotalprecio  = ($k + $l + $m + $n + $o + $p + $q + $r) * 4;
        }

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

    }

    if(letraCorporea == "aceroForm"){
        precioFinal = 100;
    }

    if(letraCorporea == "latonForm"){
        precioFinal = 200;
    }

    if(letraCorporea == "metacrilatoForm"){
        precioFinal = 300;
    }

    if(letraCorporea == "pvcForm"){
        precioFinal = 400;
    }    

    if(document.getElementById("altura").value == 0){
        precioFinal = 0;
    }

    var data = {
        'action': 'jnjtest_LetrasCorporeas',
        'fuenteLetras': fuenteLetras,
        'color': color,
        'precioFinal': precioFinal.toFixed(2),
        'rotulo': rotulo,
    };

    var protocolo = window.location.protocol;
    var hostname = window.location.hostname;
    var carpeta = window.location.pathname;
    //console.log(carpeta);
    var str = carpeta;
    var res = str.split("/");
    //console.log(res[1]);

    var url = protocolo +'//'+ hostname;

    if(hostname == 'localhost'){

        var ruta = url + "/"+res[1]+"/wp-admin/admin-ajax.php";

    }else{

        var ruta = url + "/wp-admin/admin-ajax.php";
    }

     //document.getElementById("myDIV").style.display = 'inline';
     document.getElementById("myDIV").style.visibility = 'visible';

     document.getElementById("myButton").style.visibility = 'hidden';

    // Hacemos la petición al endpoint de WordPress..
    jQuery.post(ruta, data, function (response) {

        // Contenido de la función de callback, que se lanza cuando tenemos la respuesta..
        //console.log(response);

        if(response != null){
            //document.getElementById("myDIV").style.display = "none";
            document.getElementById("myDIV").style.visibility = "hidden";
            
            document.getElementById("myButton").style.visibility = "visible";
        }
       
        document.getElementById('response').innerHTML = response;

        document.getElementById('precioOtraVez').innerHTML = precioFinal.toFixed(2) + "&euro; <div style='font-size: 10px; color: #870D00'> IVA incluido</div><span>Envío Gratuito</span>";

        document.getElementById('precio_final_rotulo').value    = precioFinal.toFixed(2);
        document.getElementById('subTotalPrecio').value         = subTotalprecio.toFixed(2);
        document.getElementById('texto_rotulo').value           = rotulo;
        document.getElementById('fuenteLetrasText').value       = fuenteLetrasText;
        document.getElementById('anchocm').value                = anchocm;
        document.getElementById('alturacm').value               = alturacm;
        document.getElementById('altocm').value                 = alto;

        //Aluminio:
        document.getElementById('acabado').value                = acabado;
        document.getElementById('separacion').value             = separacion;
        document.getElementById('opciones').value               = opciones;


        document.getElementById('tiempoEntregaSumario').value   = tiemposEntregaText;
        document.getElementById('colorSumario').value           = color;
        document.getElementById('pathA').value                  = anchoSVG;
        document.getElementById('pathB').value                  = anchoSVGCorreccion.toFixed(3);

        document.getElementsByName("add-to-cart")[0].style.visibility = 'visible';
    });

}

function textoRadio(input,name){

    document.getElementById(input).value = name;
}

function miToolTip(div,valor){

    document.getElementById('toolTip_'+div).style.visibility = "visible";
    document.getElementById('toolTip_'+div).innerHTML = valor;
}

function miToolTipOut(div){

    //document.getElementById('toolTip_'+div).innerHTML = "";
    document.getElementById('toolTip_'+div).style.visibility = "hidden";

}

function letraCorporeaForm(divForm){

    //alert(divForm);
    /*Para desplegar la seccion del formulario de la letra corporea seleccionada*/
    document.getElementById('aluminioForm').style.display = "none";
    document.getElementById('aceroForm').style.display = "none";
    document.getElementById('metacrilatoForm').style.display = "none";
    document.getElementById('latonForm').style.display = "none";
    document.getElementById('pvcForm').style.display = "none";
    document.getElementById('coloresFormAluminio').style.display = "none";

    document.getElementById(divForm).style.display = "inline";

    /*Para los select de los grosores*/
    document.getElementById('selectGrosorAluminio').style.display = "none";
    document.getElementById('selectGrosorAcero').style.display = "none";
    document.getElementById('selectGrosorLaton').style.display = "none";
    document.getElementById('selectGrosorMetacrilato').style.display = "none";
    document.getElementById('selectGrosorPVC').style.display = "none";

    if( divForm == "aluminioForm") {
        
        document.getElementById('selectGrosorAluminio').style.display = "inline";
        document.getElementById("grosorAluminio").disabled = true;

        var x = document.getElementById("grosorAluminio").selectedIndex;
        var y = document.getElementById("grosorAluminio").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);

        var opcionesAluminio = document.getElementsByName("opcionesAluminio");
        var txt = "";
        var i;
        for (i = 0; i < opcionesAluminio.length; i++) {
            if (opcionesAluminio[i].checked) {

              if(opcionesAluminio[i].value == 'sinLuz'){

                document.getElementById('coloresFormAluminio').style.display = "inline";

              }else{
                document.getElementById('coloresFormAluminio').style.display = "none";
              }

            }
        }

    }

    if( divForm == "aceroForm") {

        document.getElementById('selectGrosorAcero').style.display = "inline";
    }

    if( divForm == "latonForm") {

        document.getElementById('selectGrosorLaton').style.display = "inline";
    }

    if( divForm == "metacrilatoForm") {

        document.getElementById('selectGrosorMetacrilato').style.display = "inline";
    }

    if( divForm == "pvcForm") {

        document.getElementById('selectGrosorPVC').style.display = "inline";

        var acabadoPvc = document.getElementsByName("acabadoPvc");
        var txt = "";
        var i;
        for (i = 0; i < acabadoPvc.length; i++) {
            if (acabadoPvc[i].checked) {
              if( (acabadoPvc[i].value == 'pintadoMate') || (acabadoPvc[i].value == 'pintadoBrillo') ){
                document.getElementById('coloresFormPvc').style.display = "inline";
              }else{
                document.getElementById('coloresFormPvc').style.display = "none";
              }
            }
        }

    }    

}

function coloresForm(divForm, flag){

    //alert(divForm+'--'+ flag);
    if(flag == 'true'){
        document.getElementById(divForm).style.display = "inline";
    }else{
        document.getElementById(divForm).style.display = "none";
    }
}

function grosorForm(tipo,select){

    //opcionesAluminio
    //alert(tipo)
    var opciones = document.getElementsByName(tipo);
    var txt = "";
    var i;

    for (i = 0; i < opciones.length; i++) {
        if (opciones[i].checked) {

          if(opciones[i].value == 'Retroiluminado'){

            document.getElementById(select).getElementsByTagName('option')[1].selected = 'selected'
 
          }else if(opciones[i].value == 'Iluminación Frontal'){
            
            document.getElementById(select).getElementsByTagName('option')[2].selected = 'selected'
              
          }else if(opciones[i].value == 'Sin Luz'){

            document.getElementById(select).getElementsByTagName('option')[0].selected = 'selected'

          }

        }
    }

}

window.addEventListener('load', function () {
   document.getElementById("grosorAluminio").disabled = true;

});