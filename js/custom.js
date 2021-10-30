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



    var traseraneon = document.getElementsByName("traseraneon");
    var txt = "";
    var i;
    for (i = 0; i < traseraneon.length; i++) {
        if (traseraneon[i].checked) {
          txt = traseraneon[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoTrasera").value) {
      case 'maderadepino':
        textoCorrecto = "madera de pino";
        break;

        default:
            textoCorrecto = document.getElementById("tipoTrasera").value;
        break;
    }

    var tipoTrasera = textoCorrecto;
    var trasera = txt;

    var sujecion = document.getElementsByName("sujecion");
    var txt = "";
    var i;
    for (i = 0; i < sujecion.length; i++) {
        if (sujecion[i].checked) {
          txt = sujecion[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoSujecion").value) {
      case 'ancladoalapared':
        textoCorrecto = "anclado a la pared";
        break;

      case 'colgadoaltecho':
        textoCorrecto = "colgado al techo";
        break;

      case 'colgadocomouncuadro':
        textoCorrecto = "colgado como un cuadro";
        break;

      case 'sinsujecion':
        textoCorrecto = "sin sujeción";
        break;                          

        default:
            textoCorrecto = document.getElementById("tipoSujecion").value;
        break;
    }

    var tipoSujecion = textoCorrecto;
    var sujecionNeon = txt;

    var dimmer = document.getElementsByName("dimmer");
    var txt = "";
    var i;
    for (i = 0; i < dimmer.length; i++) {
        if (dimmer[i].checked) {
          txt = dimmer[i].value;
        }
    }

    var textoCorrecto;
    switch (document.getElementById("tipoDimmer").value) {
      case 'condimmer':
        textoCorrecto = "con dimmer";
        break;

      case 'sindimmer':
        textoCorrecto = "sin dimmer";
        break;

        default:
            textoCorrecto = document.getElementById("tipoDimmer").value;
        break;
    }

    var tipoDimmer = textoCorrecto;
    var dimmerNeon = txt;       

    var colores = document.getElementsByName("colores");
    var txt = "";
    var i;
    for (i = 0; i < colores.length; i++) {
        if (colores[i].checked) {
          txt = colores[i].value;
        }
    }

    var color = txt;


    var anchocm = document.getElementById("ancho").value;//ancho;///72/0.393701;

    var alturacm = document.getElementById("altura").value;


    //ancho del SVG:
    var anchoSVG = document.getElementById('anchoSVG').value;
    var anchoSVGCorreccion = anchoSVG * 0.76;
    var costoTransformador = Number(document.getElementById('costoTransformador').value);

    document.getElementById('impuesto').value = document.getElementById('iva').value;
    //Calculo el precio del rótulo y lo envío al campo oculto en el formulario del carrito:

    /*console.log("Ancho SVG Path A en cm: " + anchoSVG);
    console.log("Ancho SVG Path B en cm: " + anchoSVGCorreccion.toFixed(3));
    console.log("Ancho en cm: " + anchocm);
    console.log("Altura en cm: " + alturacm);
    console.log("Tamaño de letra: " + alto);
    //console.log("Alto en px: " + altopx);
    console.log("Trasera Neon: " +trasera);
    console.log("Sujecion Neon: " + sujecionNeon);
    console.log("dimmerNeon: "+ dimmerNeon);
    console.log("Tiempo entrega: "+ tiemposEntrega);
    console.log("Costo Transformador: "+ costoTransformador);*/



    //console.log("-----------------------------------------------");

    var cn_precio_metro_neon    = document.getElementById("cn_precio_metro_neon").value;

    traseraNeon     = Number(anchocm) * Number(alto) * Number(trasera);
    sujecionNeon    = Number(sujecionNeon);
    dimmerNeon      = Number(dimmerNeon);
    tiemposEntrega  = Number(tiemposEntrega);
    tipoLetra       = (Number(anchoSVGCorreccion) / 100) * Number(cn_precio_metro_neon);
    
    /*console.log("Total Trasera: " +anchocm +" x "+alto +" x "+ trasera +" = "+ traseraNeon.toFixed(3));
    console.log("Total sujecion Neon: " + sujecionNeon);
    console.log("Total dimmer Neon: " + dimmerNeon);
    console.log("Total tiempos de entrega: " + tiemposEntrega);
    console.log("Tipo de letra: ("+anchoSVGCorreccion +"/100) x 7 = "+ tipoLetra.toFixed(3));*/

    //((Tipo de letra + trasera de neón + sujeción del neón + dimmer ) * 3) + tiempo de entrega

    subTotalprecio     = ((tipoLetra + traseraNeon + sujecionNeon + dimmerNeon + costoTransformador) * 3) + tiemposEntrega ;

    //console.log("Sub total precio: "+ subTotalprecio);
    var iva = Number(document.getElementById('iva').value / 100);

    //precioFinal     = subTotalprecio;//(subTotalprecio * iva) + subTotalprecio;

    precioFinal     = (subTotalprecio * iva) + subTotalprecio;

    //console.log("Precio: (("+tipoLetra.toFixed(3)+" + "+traseraNeon.toFixed(3)+" + "+sujecionNeon+" + "+dimmerNeon+" + "+costoTransformador+") x 3 ) + "+tiemposEntrega+" = "+precioFinal.toFixed(3));


    if(document.getElementById("altura").value == 0){
        precioFinal = 0;
    }

    var data = {
        'action': 'jnjtest',
        'rotulo': rotulo,
        'alto': alto,
        'ancho': ancho,    
        'fuenteLetras': fuenteLetras,
        'tiemposEntrega': tiemposEntrega,
        'contorno': contorno,
        'trasera': trasera,
        'tipoTrasera': tipoTrasera,
        'sujecionNeon': sujecionNeon,
        'tipoSujecion': tipoSujecion,
        'dimmerNeon': dimmerNeon,
        'color': color,
        'anchocm': anchocm,
        'fuenteLetrasText': fuenteLetrasText,
        'tiemposEntregaText': tiemposEntregaText,
        'subTotalprecio': subTotalprecio.toFixed(2),
        'precioFinal': precioFinal.toFixed(2),

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


        document.getElementById('precio_final_rotulo').value     = precioFinal.toFixed(2);
        document.getElementById('subTotalPrecio').value          = subTotalprecio.toFixed(2);
        document.getElementById('texto_rotulo').value            = rotulo;
        document.getElementById('fuenteLetrasText').value        = fuenteLetrasText;
        document.getElementById('anchocm').value                 = anchocm;
        
        document.getElementById('alturacm').value                 = alturacm;

        document.getElementById('altocm').value                  = alto;
        document.getElementById('tipoTraseraSumario').value      = tipoTrasera;
        document.getElementById('tipoSujecionSumario').value     = tipoSujecion;
        document.getElementById('tipoDimmerSumario').value       = tipoDimmer;
        document.getElementById('tiempoEntregaSumario').value    = tiemposEntregaText;
        document.getElementById('tipoContornoSumario').value     = contorno;
        document.getElementById('colorSumario').value            = color;
        document.getElementById('pathA').value                   = anchoSVG;
        document.getElementById('pathB').value                   = anchoSVGCorreccion.toFixed(3);

        document.getElementsByName("add-to-cart")[0].style.visibility = 'visible';
    });

}

/*
window.addEventListener("load", function() {
  //Texto
  var cadena = prompt('Dibuja aquí lo que desees', '');
  var canvas = document.getElementById("myCanvas");
  var ctx = canvas.getContext("2d");
  var posInicial = { x: 10, y: 50 };

  ctx.font = "30px Arial";
  ctx.fillText(cadena, posInicial.x, posInicial.y);

  //Obtenemos el acho:
  var ancho = ctx.measureText(cadena).width;
  console.log('Ancho:', ancho, 'píxeles.');

});
*/

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

          if(opciones[i].value == 'retroiluminado'){

            document.getElementById(select).getElementsByTagName('option')[1].selected = 'selected'
 
          }else if(opciones[i].value == 'iluminacionFrontal'){
            
            document.getElementById(select).getElementsByTagName('option')[2].selected = 'selected'
              
          }else if(opciones[i].value == 'sinLuz'){

            document.getElementById(select).getElementsByTagName('option')[0].selected = 'selected'

          }

        }
    }

}

window.addEventListener('load', function () {
   document.getElementById("grosorAluminio").disabled = true;

});