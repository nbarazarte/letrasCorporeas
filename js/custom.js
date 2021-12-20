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

    var x = document.getElementById("letraCorporea").selectedIndex;
    var y = document.getElementById("letraCorporea").options;
    //alert("Index: " + y[x].index + " is " + y[x].text);
    var letraCorporeaText = y[x].text;
    var letraCorporea = y[x].value;

    //Ancho y Alto en centímetros:
    var anchocm = document.getElementById("ancho").value;
    var alturacm = document.getElementById("altura").value;

    var areaCm = Number(anchocm) * Number(alturacm);
    var areaM2 = Number(areaCm) / 10000;

    //ancho del SVG:
    var anchoSVG = document.getElementById('anchoSVG').value;
    var anchoSVGCorreccion = anchoSVG * 0.76;
    var anchoSVGM = anchoSVGCorreccion/100;

    document.getElementById('impuesto').value = document.getElementById('iva_letras').value;
    
    var previsualizacion = Number(document.getElementById("previsualizacion").value);

    var opcionesTiempos = document.getElementsByName("opcionesTiempos");
    var txt = "";
    var i;
    for (i = 0; i < opcionesTiempos.length; i++) {
        if (opcionesTiempos[i].checked) {
          txt = opcionesTiempos[i].value;
        }
    }

    var tiemposEntregaText = txt;

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

        if(opciones == "Sin Luz" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar').value;
            }    
            //console.log(tiemposEntrega);    

            //Aluminio Sin Iluminar:
            var a = Number(document.getElementById("precio_aluminio").value);
            var b = Number(document.getElementById("precio_aluminio_mano_de_obra").value);//Soldadura
            var c = Number(document.getElementById("precio_aluminio_pintura").value);
            var d = Number(document.getElementById("precio_aluminio_corte_cnc").value);
            var e = Number(document.getElementById("cn_precio_doblado_aluminio_sin_iluminar").value);

            var totalAluminio   = Number(a * areaM2.toFixed(2));
            var totalPintura    = Number(c * areaM2.toFixed(2));
            var totalCorte      = Number(d * anchoSVGM.toFixed(2));
            var soldadura       = Number(b);
            var doblado         = Number(e);
            
            //console.log("Area metros: "+ areaM.toFixed(2));
            console.log("Area metros2: "+ areaM2.toFixed(2));
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Aluminio: "+ totalAluminio + " = " + a +" x "+ areaM2.toFixed(2));
            console.log("Total Pintura: " + totalPintura + " = " + c +" x "+ areaM2.toFixed(2));
            console.log("Total Soldadura: " + soldadura);
            console.log("Total Doblado: " + doblado);
            console.log("Total Corte: " + totalCorte + " = " + d +" x "+ anchoSVGM.toFixed(2));
            console.log("Tiempos de entrega: " + tiemposEntrega);
            console.log("Previsualización: " + previsualizacion);

            //var subTotalprecio  =  Number(Number(Number(totalAluminio) + Number(soldadura) + Number(totalPintura) + Number(totalCorte) + Number(doblado) * 4) + Number(tiemposEntrega) + Number(previsualizacion));            
            
            var parte1 = Number(totalAluminio) + Number(soldadura) + Number(totalPintura) + Number(totalCorte) + Number(doblado);

            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

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

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado').value;
            }    
            //console.log(tiemposEntrega);                
            
            //Aluminio retroiluminadas:
            var a = Number(document.getElementById('precio_aluminio_retroiluminado').value);
            var b = Number(document.getElementById('precio_aluminio_retroiluminado_mano_de_obra').value);
            var c = Number(document.getElementById('precio_aluminio_retroiluminado_pintura').value);
            var d = Number(document.getElementById('precio_aluminio_retroiluminado_metacrilato10mm').value);
            var e = Number(document.getElementById('precio_aluminio_retroiluminado_led').value);
            var f = Number(document.getElementById('precio_aluminio_retroiluminado_transformador').value);
            var g = Number(document.getElementById('precio_aluminio_retroiluminado_corte_cnc').value);
            var h = Number(document.getElementById('cn_precio_doblado_aluminio_retroiluminado').value);
            var i = Number(document.getElementById('cn_precio_separadores_aluminio_retroiluminado').value);

            var totalAluminio   = Number(a * areaM2);
            var totalPintura    = Number(c * areaM2);
            var totalCorte      = Number(g * anchoSVGM);
            var soldadura       = Number(b);
            var doblado         = Number(h);
            var metacrilato     = Number(d * areaM2);
            var transformador   = Number(f); 
            var separadores     = Number(i);
            var led             = Number(e * anchoSVGM);
            
            console.log("Total Aluminio "+ totalAluminio);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Pintura " + totalPintura);
            console.log("Total Corte " + totalCorte);
            console.log("Tiempos de entrega " + tiemposEntrega);

            var parte1 = Number(totalAluminio) + Number(soldadura) + Number(totalPintura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(separadores) + Number(doblado);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);
            
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

        if(opciones == "Iluminación Frontal" ){

            document.getElementById('colorPaletaSeleccionada').style.display = "none";

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal').value;
            }    
            //console.log(tiemposEntrega);     

            //Aluminio Iluminadas frontalmente:
            var a = Number(document.getElementById('precio_aluminio_iluminado_frontal').value);
            var b = Number(document.getElementById('precio_aluminio_iluminado_frontal_mano_de_obra').value);
            var c = Number(document.getElementById('precio_aluminio_iluminado_frontal_pintura').value);
            var d = Number(document.getElementById('precio_aluminio_iluminado_frontal_metacrilato3mm').value);
            var e = Number(document.getElementById('precio_aluminio_iluminado_frontal_junquillo').value);
            var f = Number(document.getElementById('precio_aluminio_iluminado_frontal_led').value);
            var g = Number(document.getElementById('precio_aluminio_iluminado_frontal_transformador').value);
            var h = Number(document.getElementById('precio_aluminio_iluminado_frontal_corte_cnc').value);
            var i = Number(document.getElementById('cn_precio_doblado_aluminio_iluminado_frontal').value);

            var totalAluminio   = Number(a * areaM2);
            var totalPintura    = Number(c * areaM2);
            var totalCorte      = Number(h * anchoSVGM);
            var soldadura       = Number(b);
            var doblado         = Number(i);
            var metacrilato     = Number(d * areaM2);
            var transformador   = Number(g); 
            var junquillo       = Number(e * anchoSVGM);
            var led             = Number(f * anchoSVGM);
            
            console.log("Total Aluminio "+ totalAluminio);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Pintura " + totalPintura);
            console.log("Total Corte " + totalCorte);
            console.log("Tiempos de entrega " + tiemposEntrega);

            var parte1 = Number(totalAluminio) + Number(soldadura) + Number(totalPintura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(doblado) + Number(junquillo);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

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

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

        letraCorporea = "Aluminio Hueca";

    }

    if(letraCorporea == "aceroForm"){

        document.getElementById('colorPaletaSeleccionada').style.display = "none";
        
        //var previsualizacion = Number(document.getElementById("previsualizacion").value);

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
        
        if(opciones == "Sin Luz" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_acero_sin_iluminar').value;
            }    
            //console.log(tiemposEntrega);   

            //Acero sin Iluminar:
            var a = Number(document.getElementById('precio_acero').value);
            var b = Number(document.getElementById('precio_acero_mano_de_obra').value);
            var c = Number(document.getElementById('precio_acero_corte_cnc').value);
            var d = Number(document.getElementById('cn_precio_doblado_acero_sin_iluminar').value);

            var totalAcero   = Number(a * areaM2);
            var totalCorte   = Number(c * anchoSVGM);
            var soldadura    = Number(b);
            var doblado      = Number(d);
            
            console.log("Total Acero "+ totalAcero);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);                  
            
            var parte1 = Number(totalAcero) + Number(soldadura) + Number(totalCorte) + Number(doblado);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';  
        }
        
        if(opciones == "Retroiluminado" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_acero_sin_iluminar').value;
            }    
            //console.log(tiemposEntrega);   

            //Acero Retroiluminado:
            var a = Number(document.getElementById('cn_precio_acero_retroiluminado').value);
            var b = Number(document.getElementById('cn_precio_acero_mano_de_obra_retroiluminado').value);
            var c = Number(document.getElementById('precio_acero_retroiluminado_corte_cnc').value);
            var d = Number(document.getElementById('precio_acero_retroiluminado_doblado').value);
            var e = Number(document.getElementById('precio_acero_retroiluminado_metacrilato10mm').value);
            var f = Number(document.getElementById('precio_acero_retroiluminado_led').value);
            var g = Number(document.getElementById('precio_acero_retroiluminado_transformador').value);
            var h = Number(document.getElementById('precio_acero_retroiluminado_separadores').value);

            var totalAcero    = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var soldadura     = Number(b);
            var doblado       = Number(d);
            var metacrilato   = Number(e * areaM2);
            var led           = Number(f * anchoSVGM);
            var transformador = Number(g);
            var separadores   = Number(h);
            
            console.log("Total Acero "+ totalAcero);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);          

            var parte1 = Number(totalAcero) + Number(soldadura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(separadores) + Number(doblado);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';
        }

        if(opciones == "Iluminación Frontal" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal').value;
            }    
            //console.log(tiemposEntrega);   

            //Acero Iluminación frontal:
            var a = Number(document.getElementById('cn_precio_acero_iluminacion_frontal').value);
            var b = Number(document.getElementById('cn_precio_acero_soldadura_iluminacion_frontal').value);
            var c = Number(document.getElementById('cn_precio_acero_corte_cnc_iluminacion_frontal').value);
            var d = Number(document.getElementById('cn_precio_acero_doblado_iluminacion_frontal').value);
            var e = Number(document.getElementById('cn_precio_acero_metacrilato3mm_iluminacion_frontal').value);
            var f = Number(document.getElementById('cn_precio_acero_led_iluminacion_frontal').value);
            var g = Number(document.getElementById('cn_precio_acero_transformador_iluminacion_frontal').value);
            var h = Number(document.getElementById('cn_precio_acero_junquillo_iluminacion_frontal').value);

            var totalAcero    = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var soldadura     = Number(b);
            var doblado       = Number(d);
            var metacrilato   = Number(e * areaM2);
            var led           = Number(f * anchoSVGM);
            var transformador = Number(g);
            var junquillo     = Number(h * anchoSVGM);
            
            console.log("Total Acero "+ totalAcero);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);

            var parte1 = Number(totalAcero) + Number(soldadura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(doblado) + Number(junquillo);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);
          
            var color = 'No Aplica';

        }

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

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

        if(opciones == "Sin Luz" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diez_dias_laton_sin_iluminar').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quince_dias_laton_sin_iluminar').value;
            }    
            //console.log(tiemposEntrega);   

            //Latón Sin Iluminar:
            var a = Number(document.getElementById('cn_precio_laton_sin_iluminar').value);
            var b = Number(document.getElementById('cn_precio_soldadura_laton_sin_iluminar').value);
            var c = Number(document.getElementById('cn_precio_corte_cnc_laton_sin_iluminar').value);
            var d = Number(document.getElementById('cn_precio_doblado_laton_sin_iluminar').value);
            
            var totalLaton    = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var soldadura     = Number(b);
            var doblado       = Number(d);

            console.log("Total Latón "+ totalLaton);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);

            var parte1 = Number(totalLaton) + Number(soldadura) + Number(totalCorte) + Number(doblado);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';    
        }

        if(opciones == "Retroiluminado" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diez_dias_laton_retroiluminadas').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quince_dias_laton_retroiluminadas').value;
            }    
            //console.log(tiemposEntrega);   

            //Latón retroiluminado:
            var a = Number(document.getElementById('cn_precio_laton_retroiluminadas').value);
            var b = Number(document.getElementById('cn_precio_laton_soldadura_retroiluminadas').value);
            var c = Number(document.getElementById('cn_precio_laton_corte_cnc_retroiluminadas').value);
            var d = Number(document.getElementById('cn_precio_laton_doblado_retroiluminadas').value);
            var e = Number(document.getElementById('cn_precio_laton_metacrilato10mm_retroiluminadas').value);
            var f = Number(document.getElementById('cn_precio_laton_led_retroiluminadas').value);
            var g = Number(document.getElementById('cn_precio_laton_transformador_retroiluminadas').value);
            var h = Number(document.getElementById('cn_precio_laton_separadores_retroiluminadas').value);
            
            var totalLaton    = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var soldadura     = Number(b);
            var doblado       = Number(d);
            var metacrilato   = Number(e * areaM2);
            var led           = Number(f * anchoSVGM);
            var transformador = Number(g);
            var separadores   = Number(h);

            console.log("Total Latón "+ totalLaton);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);

            var parte1 = Number(totalLaton) + Number(soldadura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(separadores) + Number(doblado);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';
        }

        if(opciones == "Iluminación Frontal" ){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('cn_precio_diez_dias_laton_iluminacion_frontal').value;
            }else{
                var tiemposEntrega = document.getElementById('cn_precio_quince_dias_laton_iluminacion_frontal').value;
            }    
            //console.log(tiemposEntrega);   

            //Latón iluminación frontal:
            var a = Number(document.getElementById('cn_precio_laton_iluminacion_frontal').value);
            var b = Number(document.getElementById('cn_precio_laton_soldadura_iluminacion_frontal').value);
            var c = Number(document.getElementById('cn_precio_laton_corte_cnc_iluminacion_frontal').value);
            var d = Number(document.getElementById('cn_precio_laton_doblado_iluminacion_frontal').value);
            var e = Number(document.getElementById('cn_precio_laton_metacrilato3mm_iluminacion_frontal').value);
            var f = Number(document.getElementById('cn_precio_laton_led_iluminacion_frontal').value);
            var g = Number(document.getElementById('cn_precio_laton_transformador_iluminacion_frontal').value);
            var h = Number(document.getElementById('cn_precio_laton_junquillo_iluminacion_frontal').value);
            
            var totalLaton    = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var soldadura     = Number(b);
            var doblado       = Number(d);
            var metacrilato   = Number(e * areaM2);
            var led           = Number(f * anchoSVGM);
            var transformador = Number(g);
            var junquillo     = Number(h * anchoSVGM);

            console.log("Total Latón "+ totalLaton);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Soldadura " + soldadura);
            console.log("Total Doblado " + doblado);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);

            var parte1 = Number(totalLaton) + Number(soldadura) + Number(metacrilato) + Number(led) + Number(transformador) + Number(totalCorte) + Number(doblado) + Number(junquillo);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';       
        }

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

        letraCorporea = "Latón Hueca";
    }

    if(letraCorporea == "metacrilatoForm"){

        if(tiemposEntregaText == "10 días laborables"){
            var tiemposEntrega = document.getElementById('cn_precio_diez_dias_metacrilato_sin_luz').value;
        }else{
            var tiemposEntrega = document.getElementById('cn_precio_quince_dias_metacrilato_sin_luz').value;
        }    
        //console.log(tiemposEntrega);  

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
     
        //Metacrilato con luz:
        if(acabado == "Color 360"){
            var a = Number(document.getElementById('cn_precio_metacrilato3mm_color360_sin_luz').value);
        }else if(acabado == "Blanco Opal"){
            var a = Number(document.getElementById('cn_precio_metacrilato3mm_blancoOpal_sin_luz').value);
        }
        var b = Number(document.getElementById('cn_precio_metacrilato_traseraPVC10mm_sin_luz').value);
        var c = Number(document.getElementById('cn_precio_metacrilato_corte_cnc_sin_luz').value);
        var d = Number(document.getElementById('cn_precio_metacrilato_doblado_sin_luz').value);
        var e = Number(document.getElementById('cn_precio_metacrilato_led_sin_luz').value);
        var f = Number(document.getElementById('cn_precio_metacrilato_transformador_sin_luz').value);
        var g = Number(document.getElementById('cn_precio_metacrilato_cloroformo_sin_luz').value);
        
        var totalMetacrilato    = Number(a * areaM2);
        var totalCorte          = Number(c * anchoSVGM);
        var traseraPVC10mm      = Number(b * anchoSVGM);
        var doblado             = Number(d);
        var led                 = Number(e * anchoSVGM);
        var transformador       = Number(f);
        var cloroformo          = Number(g);

        console.log("Total Metacrilato "+ totalMetacrilato);
        console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
        console.log("Total Corte " + totalCorte);  
        console.log("Total Trasera PVC " + traseraPVC10mm);    
        console.log("Total Doblado " + doblado);
        console.log("Total Led " + led);
        console.log("Total Transformador " + transformador);
        console.log("Total Cloroformo " + cloroformo);
        console.log("Tiempos de entrega " + tiemposEntrega);
        console.log("Previsualizacion " + previsualizacion);

        var parte1 = Number(totalMetacrilato) + Number(led) + Number(transformador) + Number(cloroformo) + Number(totalCorte) + Number(doblado) + Number(traseraPVC10mm);
        
        var parte2 = Number(parte1) * 4;

        var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

        var subTotalprecio = Number(parte3);

        console.log("Subtotal: "+ subTotalprecio);

        var colores = document.getElementsByName("colores");
        var txt = "";
        var i;
        for (i = 0; i < colores.length; i++) {
            if (colores[i].checked) {
              txt = colores[i].value;
            }
        }

        var color = txt;

        console.log(color);

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

        letraCorporea = "Metacrilato con Luz";
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
 
        var opcionesPVC = document.getElementsByName("opcionesPVC");
        var txt = "";
        var i;
        for (i = 0; i < opcionesPVC.length; i++) {
            if (opcionesPVC[i].checked) {
              txt = opcionesPVC[i].value;
            }
        }

        var opciones = txt;
       
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
                var color = "Ral: Ral 1000";
            }else{                
                var color = document.getElementById('colorPaleta').value
            }

        }else{
            document.getElementById('colorPaletaSeleccionada').style.display = "none";
            var color = 'No Aplica';  
        }

        if( grosor == "5 mm"){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('precio_pvc_5mm_diez_dias').value;
            }else{
                var tiemposEntrega = document.getElementById('precio_pvc_5mm_quince_dias').value;
            }    
            //console.log(tiemposEntrega);   

            //PVC 5mm:
            var a = Number(document.getElementById('precio_pvc_5mm').value);
            var b = Number(document.getElementById('precio_pvc_5mm_fondo').value);
            var c = Number(document.getElementById('precio_pvc_5mm_corte_cnc').value);
            var d = Number(document.getElementById('precio_pvc_5mm_pintura').value);
            var e = Number(document.getElementById('precio_pvc_5mm_cinta').value);
  
            var totalPVC5mm   = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var fondo         = Number(b);
            var pintura       = Number(d);
            var cinta         = Number(e);

            console.log("Total PVC 5mm "+ totalPVC5mm);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Fondo " + fondo);
            console.log("Total Pintura " + pintura);
            console.log("Total Cinta " + cinta);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);
            
            var parte1 = Number(totalPVC5mm) + Number(fondo) + Number(pintura) + Number(totalCorte) + Number(cinta);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';  
        }

        if( grosor == "10 mm"){

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('precio_pvc_10mm_diez_dias').value;
            }else{
                var tiemposEntrega = document.getElementById('precio_pvc_10mm_quince_dias').value;
            }    
            //console.log(tiemposEntrega);   

            //PVC 10mm:
            var a = Number(document.getElementById('precio_pvc_10mm').value);
            var b = Number(document.getElementById('precio_pvc_10mm_fondo').value);
            var c = Number(document.getElementById('precio_pvc_10mm_corte_cnc').value);
            var d = Number(document.getElementById('precio_pvc_10mm_pintura').value);
            var e = Number(document.getElementById('precio_pvc_10mm_cinta').value);
  
            var totalPVC10mm  = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var fondo         = Number(b);
            var pintura       = Number(d);
            var cinta         = Number(e);

            console.log("Total PVC 10mm "+ totalPVC10mm);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Fondo " + fondo);
            console.log("Total Pintura " + pintura);
            console.log("Total Cinta " + cinta);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);      
            
            var parte1 = Number(totalPVC10mm) + Number(fondo) + Number(pintura) + Number(totalCorte) + Number(cinta);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';  
        }

        if( (grosor == "19 mm") && (opciones == "Sin Luz")) {

            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('precio_pvc_19mm_diez_dias').value;
            }else{
                var tiemposEntrega = document.getElementById('precio_pvc_19mm_quince_dias').value;
            }    
            //console.log(tiemposEntrega);   

            //PVC 19mm sin iluminar:
            var a = Number(document.getElementById('precio_pvc_19mm').value);
            var b = Number(document.getElementById('precio_pvc_19mm_fondo').value);
            var c = Number(document.getElementById('precio_pvc_19mm_corte_cnc').value);
            var d = Number(document.getElementById('precio_pvc_19mm_pintura').value);
            var e = Number(document.getElementById('precio_pvc_19mm_cinta').value);
  
            var totalPVC19mm  = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var fondo         = Number(b);
            var pintura       = Number(d);
            var cinta         = Number(e);

            console.log("Total PVC 19mm "+ totalPVC19mm);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Fondo " + fondo);
            console.log("Total Pintura " + pintura);
            console.log("Total Cinta " + cinta);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);
          
            var parte1 = Number(totalPVC19mm) + Number(fondo) + Number(pintura) + Number(totalCorte) + Number(cinta);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';  
        }              


        if( ( grosor == "19 mm") && (opciones == "Retroiluminado") ){
            
            if(tiemposEntregaText == "10 días laborables"){
                var tiemposEntrega = document.getElementById('precio_pvc_19mm_diez_dias_retroalimentadas').value;
            }else{
                var tiemposEntrega = document.getElementById('precio_pvc_19mm_quince_dias_retroalimentadas').value;
            }    
            //console.log(tiemposEntrega);   

            //PVC 19mm sin iluminar:
            var a = Number(document.getElementById('precio_pvc_19mm_retroiluminadas').value);
            var b = Number(document.getElementById('precio_pvc_19mm_fondo_retroiluminadas').value);
            var c = Number(document.getElementById('precio_pvc_19mm_corte_cnc_retroiluminadas').value);
            var d = Number(document.getElementById('precio_pvc_19mm_pintura_retroiluminadas').value);
            var e = Number(document.getElementById('precio_pvc_19mm_cinta_retroiluminadas').value);
            var f = Number(document.getElementById('precio_pvc_19mm_tornilleria_retroiluminadas').value);
            var g = Number(document.getElementById('precio_pvc_19mm_separadores_retroiluminadas').value);
            var h = Number(document.getElementById('precio_pvc_19mm_transformador_retroiluminadas').value);
            var i = Number(document.getElementById('precio_pvc_19mm_led_retroiluminadas').value);
         
            var totalPVC19mm  = Number(a * areaM2);
            var totalCorte    = Number(c * anchoSVGM);
            var fondo         = Number(b);
            var pintura       = Number(d);
            var cinta         = Number(e);
            var tornilleria   = Number(f);
            var separadores   = Number(g);
            var transformador = Number(h);
            var led           = Number(i * anchoSVGM);

            console.log("Total PVC 19mm retroiluminada "+ totalPVC19mm);
            console.log("Metros lineales (longitud): "+ anchoSVGM.toFixed(2));
            console.log("Total Corte " + totalCorte);
            console.log("Total Fondo " + fondo);
            console.log("Total Pintura " + pintura);
            console.log("Total Cinta " + cinta);
            console.log("Tiempos de entrega " + tiemposEntrega);
            console.log("Previsualizacion " + previsualizacion);

            var parte1 = Number(totalPVC19mm) + Number(fondo) + Number(pintura) + Number(totalCorte) + Number(cinta) + Number(tornilleria) + Number(transformador) + Number(separadores) + Number(led);
            
            var parte2 = Number(parte1) * 4;

            var parte3 = Number(parte2) + Number(tiemposEntrega) + Number(previsualizacion)

            var subTotalprecio = Number(parte3);

            console.log("Subtotal: "+ subTotalprecio);

            var color = 'No Aplica';  

        }

        var iva     = Number(document.getElementById('iva_letras').value / 100);
        precioFinal = (subTotalprecio * iva) + subTotalprecio;

        letraCorporea = "PVC";
    }    

    if(document.getElementById("altura").value == 0){
        precioFinal = 0;
    }

    var data = {
        'action': 'jnjtest_LetrasCorporeas',
        'fuenteLetras': fuenteLetras,
        'color': 'amarillo',
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
        
        document.getElementById('colorSeleccionado').innerHTML = 'Ral: Ral 1000';
        document.getElementById('colorPaleta').value = 'Ral: Ral 1000';
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

        document.getElementById('colorSeleccionado').innerHTML = 'Ral: Ral 1000';
        document.getElementById('colorPaleta').value = 'Ral: Ral 1000';
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
    //console.log(tipo +'-----'+ color)
    document.getElementById('colorSeleccionado').innerHTML = tipo +': '+ color;

    document.getElementById('colorPaleta').value = tipo +': '+ color.substr(-8, 400);
    document.getElementById('colorSumario').value = tipo +': '+ color.substr(-8, 400);
    
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

        deshabiltarBotonCart();

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

    /*
    iluminacionFrontal4.onclick = function () {
        separacionForm('separacionFormPVC','false');
        document.getElementById('tornilleriaPVC').style.visibility = "hidden";
    } 
    */

});