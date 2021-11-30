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

    /*
        var x = document.getElementById("tiempos").selectedIndex;
        var y = document.getElementById("tiempos").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var tiemposEntregaText = y[x].text;
        var tiemposEntrega = y[x].value;
    */

   var opcionesTiempos = document.getElementsByName("opcionesTiempos");
    var txt = "";
    var i;
    for (i = 0; i < opcionesTiempos.length; i++) {
        if (opcionesTiempos[i].checked) {
          txt = opcionesTiempos[i].value;
        }
    }

    var tiemposEntregaText = txt;

    if(tiemposEntregaText == "7 días laborables"){
        var tiemposEntrega = document.getElementById('cn_precio_sietediaslaboralesLetras').value;
    }else{
        var tiemposEntrega = document.getElementById('cn_precio_4872Letras').value;
    }    

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

    //alert(letraCorporea);
    //alert(opciones);
    //Para calcular el precio segun la letra corporea:

    if(letraCorporea == "aluminioForm"){

        var x = document.getElementById("grosorAluminio").selectedIndex;
        var y = document.getElementById("grosorAluminio").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var grosorText = y[x].text;
        var grosor = y[x].value;

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
        var sujecion = 'No Aplica';

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

            document.getElementById('colorPaletaSeleccionada').style.display = "inline";
            /*var colores = document.getElementsByName("colores");
            var txt = "";
            var i;
            for (i = 0; i < colores.length; i++) {
                if (colores[i].checked) {
                  txt = colores[i].value;
                }
            }

            var color = txt;*/

            if(document.getElementById('colorSumario').value == ""){
                var color = "RAL: RAL 1000";
            }else{                
                var color = document.getElementById('colorPaleta').value
            }
            
        }

        if(opciones == "Retroiluminado" ){
             document.getElementById('colorPaletaSeleccionada').style.display = "none";
            var subTotalprecio  = ($d + $e + $f + $g + $h + $i + $j) * 4;
            var color = 'No Aplica';  
        }

        if(opciones == "Iluminación Frontal" ){
            document.getElementById('colorPaletaSeleccionada').style.display = "none";
            var subTotalprecio  = ($k + $l + $m + $n + $o + $p + $q + $r) * 4;
            var color = 'No Aplica';  
        }

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

        letraCorporea = "Aluminio Hueca";

    }

    if(letraCorporea == "aceroForm"){

        var x = document.getElementById("grosorAcero").selectedIndex;
        var y = document.getElementById("grosorAcero").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var grosorText = y[x].text;
        var grosor = y[x].value;

        //Valores que selecciona el usuario:
        var acabadoAcero = document.getElementsByName("acabadoAcero");
        var txt = "";
        var i;
        for (i = 0; i < acabadoAcero.length; i++) {
            if (acabadoAcero[i].checked) {
              txt = acabadoAcero[i].value;
            }
        }

        var acabado = txt;

       var separacionAcero = document.getElementsByName("separacionAcero");
        var txt = "";
        var i;
        for (i = 0; i < separacionAcero.length; i++) {
            if (separacionAcero[i].checked) {
              txt = separacionAcero[i].value;
            }
        }

        var separacion = txt;

       var opcionesAcero = document.getElementsByName("opcionesAcero");
        var txt = "";
        var i;
        for (i = 0; i < opcionesAcero.length; i++) {
            if (opcionesAcero[i].checked) {
              txt = opcionesAcero[i].value;
            }
        }

        var opciones = txt;
        var sujecion = 'No Aplica';
        var color = 'No Aplica';
        var subTotalprecio = 10;     
        precioFinal = 100;

        letraCorporea = "Acero Inoxidable Hueca";
    }

    if(letraCorporea == "latonForm"){

        var x = document.getElementById("grosorLaton").selectedIndex;
        var y = document.getElementById("grosorLaton").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var grosorText = y[x].text;
        var grosor = y[x].value;

        //Valores que selecciona el usuario:
        var acabadoLaton = document.getElementsByName("acabadoLaton");
        var txt = "";
        var i;
        for (i = 0; i < acabadoLaton.length; i++) {
            if (acabadoLaton[i].checked) {
              txt = acabadoLaton[i].value;
            }
        }

        var acabado = txt;

       var separacionLaton = document.getElementsByName("separacionLaton");
        var txt = "";
        var i;
        for (i = 0; i < separacionLaton.length; i++) {
            if (separacionLaton[i].checked) {
              txt = separacionLaton[i].value;
            }
        }

        var separacion = txt;

       var opcionesLaton = document.getElementsByName("opcionesLaton");
        var txt = "";
        var i;
        for (i = 0; i < opcionesLaton.length; i++) {
            if (opcionesLaton[i].checked) {
              txt = opcionesLaton[i].value;
            }
        }

        var opciones = txt;
        var sujecion = 'No Aplica';
        var color = 'No Aplica';  
        var subTotalprecio = 20;            
        precioFinal = 200;

        letraCorporea = "Latón Hueca";
    }

    if(letraCorporea == "metacrilatoForm"){

        var x = document.getElementById("grosorMetacrilato").selectedIndex;
        var y = document.getElementById("grosorMetacrilato").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var grosorText = y[x].text;
        var grosor = y[x].value;

        //Valores que selecciona el usuario:
        /*var sujecionMetacrilato = document.getElementsByName("sujecionMetacrilato");
        var txt = "";
        var i;
        for (i = 0; i < sujecionMetacrilato.length; i++) {
            if (sujecionMetacrilato[i].checked) {
              txt = sujecionMetacrilato[i].value;
            }
        }

        var sujecion = txt;*/
        var sujecion = "No Aplica";

        var acabadoMetacrilato = document.getElementsByName("acabadoMetacrilato");
        var txt = "";
        var i;
        for (i = 0; i < acabadoMetacrilato.length; i++) {
            if (acabadoMetacrilato[i].checked) {
              txt = acabadoMetacrilato[i].value;
            }
        }

        var acabado = txt;
        var opciones = 'No Aplica';
        var separacion = 'No Aplica';
        var color = 'No Aplica';

        var subTotalprecio = 30;   
        precioFinal = 300;

        letraCorporea = "Metacrilato Hueca";
    }

    if(letraCorporea == "pvcForm"){

        var x = document.getElementById("grosorPVC").selectedIndex;
        var y = document.getElementById("grosorPVC").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);
        var grosorText = y[x].text;
        var grosor = y[x].value;

        //Valores que selecciona el usuario:
        var sujecionPvc = document.getElementsByName("sujecionPvc");
        var txt = "";
        var i;
        for (i = 0; i < sujecionPvc.length; i++) {
            if (sujecionPvc[i].checked) {
              txt = sujecionPvc[i].value;
            }
        }

        var sujecion = txt;

        var acabadoPvc = document.getElementsByName("acabadoPvc");
        var txt = "";
        var i;
        for (i = 0; i < acabadoPvc.length; i++) {
            if (acabadoPvc[i].checked) {
              txt = acabadoPvc[i].value;
            }
        }

        var acabado = txt;

        var separacionPvc = document.getElementsByName("separacionPvc");
        var txt = "";
        var i;
        for (i = 0; i < separacionPvc.length; i++) {
            if (separacionPvc[i].checked) {
              txt = separacionPvc[i].value;
            }
        }

        var separacion = txt;
        var opciones = 'No Aplica';
        
        if( (acabado == "Pintado Mate") || (acabado == 'Pintado Brillo') ){

            document.getElementById('colorPaletaSeleccionada').style.display = "inline";
            /*
            var colores = document.getElementsByName("coloresPvc");
            var txt = "";
            var i;
            for (i = 0; i < colores.length; i++) {
                if (colores[i].checked) {
                  txt = colores[i].value;
                }
            }

            var color = txt;  */

            if(document.getElementById('colorSumario').value == ""){
                var color = "Pantone: Yellow C";
            }else{                
                var color = document.getElementById('colorPaleta').value
            }

        }else{
            document.getElementById('colorPaletaSeleccionada').style.display = "none";
            var color = 'No Aplica';  
        }

        var subTotalprecio = 40;   
        precioFinal = 400;

        letraCorporea = "PVC";
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

        document.getElementById('tipoletraCorporea').value      = letraCorporea;
        document.getElementById('tipoGrosor').value             = grosor;

        //Aluminio, Acero y Laton:
        document.getElementById('acabado').value                = acabado;
        document.getElementById('separacion').value             = separacion;
        document.getElementById('opciones').value               = opciones;

        //Metacrilato Huecas y PVC:
        document.getElementById('sujecion').value               = sujecion;

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
        
        document.getElementById('colorSeleccionado').innerHTML = 'Pantone: Yellow C';
        document.getElementById('colorPaleta').value = 'Pantone: Yellow C';
        document.getElementById('colorSumario').value = '';

        document.getElementById('selectGrosorAluminio').style.display = "inline";
        //document.getElementById("grosorAluminio").disabled = true;
        document.getElementById("grosorAluminio").disabled = false;

        var x = document.getElementById("grosorAluminio").selectedIndex;
        var y = document.getElementById("grosorAluminio").options;
        //alert("Index: " + y[x].index + " is " + y[x].text);

        var opcionesAluminio = document.getElementsByName("opcionesAluminio");
        var txt = "";
        var i;
        for (i = 0; i < opcionesAluminio.length; i++) {
            if (opcionesAluminio[i].checked) {

              if(opcionesAluminio[i].value == 'Sin Luz'){

                document.getElementById('coloresFormAluminio').style.display = "inline";
                document.getElementById('colorPaletaSeleccionada').style.display = "inline";

              }else{
                document.getElementById('coloresFormAluminio').style.display = "none";
                document.getElementById('colorPaletaSeleccionada').style.display = "none";
              }

            }
        }

    }

    if( divForm == "aceroForm") {

        document.getElementById('colorPaletaSeleccionada').style.display = "none";
        document.getElementById('selectGrosorAcero').style.display = "inline";
    }

    if( divForm == "latonForm") {

        document.getElementById('colorPaletaSeleccionada').style.display = "none";
        document.getElementById('selectGrosorLaton').style.display = "inline";
    }

    if( divForm == "metacrilatoForm") {

        document.getElementById('colorPaletaSeleccionada').style.display = "none";
        document.getElementById('selectGrosorMetacrilato').style.display = "inline";
    }

    if( divForm == "pvcForm") {

        document.getElementById('colorSeleccionado').innerHTML = 'Pantone: Yellow C';
        document.getElementById('colorPaleta').value = 'Pantone: Yellow C';
        document.getElementById('colorSumario').value = '';
                
        document.getElementById('selectGrosorPVC').style.display = "inline";

        var acabadoPvc = document.getElementsByName("acabadoPvc");
        var txt = "";
        var i;
        for (i = 0; i < acabadoPvc.length; i++) {

            //alert(acabadoPvc[i].value)
            if (acabadoPvc[i].checked) {
                
              if( (acabadoPvc[i].value == 'Pintado Mate') || (acabadoPvc[i].value == 'Pintado Brillo') ){

                document.getElementById('coloresFormPvc').style.display = "inline";
                document.getElementById('colorPaletaSeleccionada').style.display = "inline";
              }else{
                
                document.getElementById('coloresFormPvc').style.display = "none";
                document.getElementById('colorPaletaSeleccionada').style.display = "none";
              }
            }
        }

    }    

}

function coloresForm(divForm, flag){

    //alert(divForm+'--'+ flag);
    if(flag == 'true'){
        document.getElementById(divForm).style.display = "inline";
        document.getElementById('colorPaletaSeleccionada').style.display = "inline";
    }else{
        document.getElementById(divForm).style.display = "none";
        document.getElementById('colorPaletaSeleccionada').style.display = "none";
    }
}

function separacionForm(divForm, flag){

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
   //document.getElementById("grosorAluminio").disabled = true;
   document.getElementById("grosorAluminio").disabled = false;

});

function ajustarTamano(valor){

    document.getElementById('muestra').style.fontSize = valor+"em";
}

function paleta(tipo, color){

    //alert(tipo+'--'+color);
    document.getElementById('colorSeleccionado').innerHTML = tipo +': '+ color;

    document.getElementById('colorPaleta').value = tipo +': '+ color;
    document.getElementById('colorSumario').value = tipo +': '+ color;
}

window.addEventListener('load', function () {

    //En el formulario PVC:
    var grosorPVC           = document.querySelector('#grosorPVC');
    var sinSujecion2        = document.querySelector('#sinSujecion2');
    var letraAdhesiva2      = document.querySelector('#letraAdhesiva2');
    var sinLuz4             = document.querySelector('#sinLuz4');
    var retroiluminado4     = document.querySelector('#retroiluminado4');
    var iluminacionFrontal4 = document.querySelector('#iluminacionFrontal4');

    //Muestra las opciones de separación:
    grosorPVC.onchange = function () {

        if(this.value == "19 mm"){
            separacionForm('opcionesFormPVC','true');
        }else{
            separacionForm('opcionesFormPVC','false');
        }



        if((this.value == "19 mm") && (retroiluminado4.checked == true)){
            separacionForm('separacionFormPVC','true');
            document.getElementById('tornilleriaPVC').style.visibility = "visible";


        }else{
            separacionForm('separacionFormPVC','false');
            document.getElementById('tornilleriaPVC').style.visibility = "hidden";
        }
    };

    retroiluminado4.onclick = function () {

        if((grosorPVC.value == "19 mm") && (retroiluminado4.checked == true)){
            separacionForm('separacionFormPVC','true');
            document.getElementById('tornilleriaPVC').style.visibility = "visible";
        }
    };

    //No muestra las opciones de separación:
    sinSujecion2.onclick = function () {
        separacionForm('separacionFormPVC','false');
        document.getElementById('tornilleriaPVC').style.visibility = "hidden";
    }

    letraAdhesiva2.onclick = function () {
        separacionForm('separacionFormPVC','false');
        document.getElementById('tornilleriaPVC').style.visibility = "hidden";
    } 

    sinLuz4.onclick = function () {
        separacionForm('separacionFormPVC','false');
        document.getElementById('tornilleriaPVC').style.visibility = "hidden";
    }

    iluminacionFrontal4.onclick = function () {
        separacionForm('separacionFormPVC','false');
        document.getElementById('tornilleriaPVC').style.visibility = "hidden";
    }  

});