<div class="row">

  <div class="col-sm-4">

    <label for="letraCorporea">Letra Corpórea de:</label>
    <select form="letrasCorporeas" class="form-select" id="letraCorporea" onchange="" style="height: 50px;padding: 3% 0;  border-radius: 14px;  border: 3px #ffffff solid;width: 200px;">  <!-- browser.js ln 274-->  
      <option style="font-size: 20px"value="aluminioForm">Aluminio Hueca</option>
      <option style="font-size: 20px"value="aceroForm">Acero Inoxidable Hueca</option>
      <option style="font-size: 20px"value="latonForm">Latón Hueca</option>
      <option style="font-size: 20px"value="metacrilatoForm">Metacrilato con Luz</option>
      <option style="font-size: 20px"value="pvcForm">PVC</option>

    </select>

  </div>

  <div class="col-sm-4">

    <label for="alto">Tipo de letra:</label>
    <select form="letras" class="form-select" id="letra" onchange="" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;width: 200px;">  <!-- browser.js ln 274-->  

      <option style="font-family:'Action Man'; font-size: 25px"value="Action_Man">Action Man</option>
      <option style="font-family:'Asset-Regular'; font-size: 20px"value="Asset-Regular">Asset</option>
      <option style="font-family:'BebasNeue'; font-size: 25px"value="BebasNeue">Bebas Neue</option>
      <option style="font-family:'BerlinSans'; font-size: 25px"value="BerlinSans">Berlin Sans</option>
      <option style="font-family:'Bookman old Style'; font-size: 25px"value="Bookman" selected>Bookman old Style</option>
      <option style="font-family:'Brussels'; font-size: 25px"value="Brussels">Brussels</option>
      <option style="font-family:'Candara-Font'; font-size: 25px"value="Candara-Font">Candara</option>
      <option style="font-family:'comic-sans-ms'; font-size: 25px"value="comic-sans-ms">Comic Sans</option>
      <option style="font-family:'Cubano'; font-size: 25px"value="Cubano">Cubano</option>
      <option style="font-family:'Fredoka'; font-size: 25px"value="Fredoka">Fredoka</option>
      <option style="font-family:'Gabriela'; font-size: 25px"value="Gabriela">Gabriela</option>
      <option style="font-family:'Krona_One'; font-size: 25px"value="Krona_One">Krona</option>
      <option style="font-family:'Moderna'; font-size: 25px"value="Moderna">Moderna</option>
      <option style="font-family:'Neon'; font-size: 35px"value="Neon">Neon</option>
      <option style="font-family:'Squada_One'; font-size: 25px"value="Squada_One">Squada One</option>
      <option style="font-family:'Times-New-Roman'; font-size: 25px"value="Times-New-Roman">Times New Roman</option>
      <option style="font-family:'Verdana'; font-size: 25px"value="Verdana">Verdana</option>

<!--
      <option style="font-family:'Barcelony'; font-size: 25px"value="Barcelony">Barcelony</option>
      <option style="font-family:'BeonMedium'; font-size: 25px"value="BeonMedium">Beon</option>
      <option style="font-family:'Heartbeat in Christmas'; font-size: 40px"value="HeartbeatinChristmas">Heartbeat in Christmas</option>
      <option style="font-family:'Intro Script';font-size: 25px"value="IntroScript">Intro Script</option>
      <option style="font-family:'lie to me';font-size: 25px"value="lietome">Lie to me</option>
      <option style="font-family:'milasian circa';font-size: 30px"value="milasiancirca" >Milasian Circa</option>
      <option style="font-family:'Neoneon';font-size: 20px"value="Neoneon">Neoneon</option>
      <option style="font-family:'neoncity_scriptregular';font-size: 35px"value="neoncity_scriptregular">Neoncity</option>
      <option style="font-family:'Nickainley';font-size: 25px"value="Nickainley">Nickainley</option>
      <option style="font-family:'optisantitaregular';font-size: 25px"value="optisantitaregular">Opti Santita</option>
      <option style="font-family:'Raleway';font-size: 25px"value="Raleway">Raleway</option>
      <option style="font-family:'Roboto';font-size: 25px"value="Roboto" >Roboto</option>
      <option style="font-family:'saitama';font-size: 40px"value="saitama">Saitama</option>
      <option style="font-family:'signatura_monoline_scriptRg';font-size: 40px"value="signatura_monoline_scriptRg" selected>Signatura Monoline</option>
      <option style="font-family:'Slim Joe';font-size: 25px"value="SlimJoe">Slim Joe</option>
      <option style="font-family:'that i love you';font-size: 25px"value="thatiloveyou">That i love you</option>
    -->
    </select>

  </div>

  <div class="col-sm-4">

    <label for="altoAncho">Tamaño de la letra: <i class="fas fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Valor de referencia para calcular el alto y el ancho"></i></label>
    <input type="number" step=".001" class="" id="altoAncho"  value="8.519" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid; width: 200px;">  
    <input type="hidden" class="form-range" id="alto" value="8.519" readonly="yes"> 

  <input type="hidden" class="" id="minimaAltura" value="15" readonly="yes">

  </div>   

<!--
  <div class="col-sm-4">

    <label for="alto">Tiempos de Entrega:</label>
    <select for="tiempos" class="form-select" id="tiempos" onchange="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;">  
      <option value="<?php echo esc_html($cn_precio_sietediaslaborales);?>">7 días (laborales)</option>
      <option value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras);?>">48 a 72 horas</option>
    </select>

  </div>
-->

  <div class="col-sm-4">
      <label for="rotulo">Escríbe tu texto aquí:</label>
      <input type="text" class="" id="rotulo" placeholder="Tu texto" value="Rótulos Metalarte" onkeyup="deshabiltarBotonCart()" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;">  
  </div>

  <div class="col-sm-4">
    
    <label for="altura">Alto: </label> <span style="font-size: 10px; color: red;">(mín. 10 cm máx. 130 cm)</span>
    <input type="text" class="" id="altura" placeholder="Alto total texto cm" value="10.000" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;width: 200px;">    
    
  </div>

  <div class="col-sm-4">

    <div id="selectGrosorAluminio">

      <label for="grosor">Profundidad:</label>
      <select form="" class="form-select" id="grosorAluminio" style="height: 50px;padding: 3% 0;border-radius: 14px;border: 3px #ffffff solid;width: 200px;">

        <option style="font-size: 20px"value="30 mm">30 mm</option>
        <option style="font-size: 20px"value="50 mm">50 mm</option>

      </select>

    </div>

    <div id="selectGrosorAcero">

      <label for="grosor">Profundidad:</label>
      <select form="" class="form-select" id="grosorAcero" style="height: 50px;padding: 3% 0;border-radius: 14px;border: 3px #ffffff solid;width: 200px;">
        
        <option style="font-size: 20px"value="30 mm">30 mm</option>
        <option style="font-size: 20px"value="50 mm">50 mm</option>


      </select>

    </div>

    <div id="selectGrosorLaton">

      <label for="grosor">Profundidad:</label>
      <select form="" class="form-select" id="grosorLaton" style="height: 50px;padding: 3% 0;border-radius: 14px;border: 3px #ffffff solid;width: 200px;">
        
        <option style="font-size: 20px"value="30 mm">30 mm</option>
        <option style="font-size: 20px"value="50 mm">50 mm</option>


      </select>

    </div>

    <div id="selectGrosorMetacrilato">

      <label for="grosor">Profundidad:</label>
      <select form="" class="form-select" id="grosorMetacrilato" style="height: 50px;padding: 3% 0;border-radius: 14px;border: 3px #ffffff solid;width: 200px;">

        <option style="font-size: 20px"value="Metacrilato 3 mm">3 mm</option>

      </select>

    </div>

    <div id="selectGrosorPVC">

      <label for="grosor">Grosor:</label>
      <select form="" class="form-select" id="grosorPVC" style="height: 50px;padding: 3% 0;border-radius: 14px;border: 3px #ffffff solid;width: 200px;">

        <option style="font-size: 20px"value="5 mm">5 mm</option>
        <option style="font-size: 20px"value="10 mm">10 mm</option>
        <option style="font-size: 20px"value="19 mm">19 mm</option>

      </select>

    </div>


  </div>

  <div class="col-sm-4">
   
    <label for="ancho">Ancho: </label> <span style="font-size: 10px; color: red;">(máx. 130 cm)</span>
    <input type="text" class="" id="ancho" placeholder="Ancho total texto cm" value="73.772" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;width: 200px;">
  
  </div>

<!--
  <div class="col-sm-4">
  
    <label for="ancho">Longitud: </label>

    
  </div>  
-->
    <input type="hidden" class="" id="anchoSVG" placeholder="Longitud total texto cm" value="408.822" readonly="yes" style="height: 50px;padding: 3% 0;
  border-radius: 14px;
  border: 3px #ffffff solid;width: 200px;">  

</div>

<br/>
<div id="errorAltoAncho" style="color: red; text-align: center;"></div>