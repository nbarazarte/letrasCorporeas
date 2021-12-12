<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/Envios-con-texto-1600x600px.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/Web-slider-corporeas-1600x600px.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/Web-slider-personaliza-corporeas.jpg'; ?>" class="d-block w-100" alt="...">
    </div>
<!--
    <div class="carousel-item">
      <img src="<?php echo plugin_dir_url( __FILE__ ). '../imagenes/galeria/slide2.jpg'; ?>" class="d-block w-100" alt="...">
    </div>    
  -->
  </div>
</div>

    <input id="font-url-input" type="hidden" readonly="yes" value="<?php echo plugin_dir_url( __FILE__ ). '../css/Fonts/bookman-old-style/BKMNOS.woff'; ?>" style="width: 900px;" />
  
    <div id="medida"> </div>
    <div id="result"> </div>
    
      <div id="response">
        
        <h1>
          <small class="text-muted"> <strong> 0<?php echo esc_html($cn_precio_base);?>&euro;<strong></small>
            <!--<input type="text" class="form-control" id="precio_final_rotulo" name="precio_final_rotulo" value="0.00" readonly="yes">-->
        </h1>
        
          <div style="font-size: 10px; color: #870D00"> IVA incluido</div>
        
        <div style="font-size: 10px;"> ENVÍO GRATUITO</div>

        <h3 style="font-size: 24px;font-family: 'Open Sans', sans-serif;">Letras Corpóreas Personalizadas</h3>
        <p style="text-align: justify;">
          Te ofrecemos la posibilidad de personalizar tus letras corpóreas para exterior o interior. Puedes escoger el tipo de material entre Aluminio, PVC, Metacrilato, Latón o Acero Inoxidable, seleccionar el grosor del material, el alto y ancho de la letra, la tipografía de letra que más os guste, seleccionar si las quieres iluminar, retroiluminar, pintadas o sin pintar, acabado mate o brillo.
        </p>

        <p style="text-align: justify;">
          Nuestro servicio incluye:
          <ol>
            <li>Corte profesional mediante fresado CNC</li>
            <li>Distintos tamaños de letra, tanto en grosor como en altura</li>
            <li>Fuente de letra o tipografía a elegir con posibilidad de hacerlo en tu propia fuente</li>
            <li>Material acto para ser instalado en interiores y exteriores</li>
            <li>Letras lacado al horno</li>
          </ol>
        </p>

        <p style="text-align: justify;">
          También podemos fabricar en base a tu logo o tu marca, puedes enviarnos un correo a <a href="mailto:consultas@rotulosmetalarte.es">consultas@rotulosmetalarte.es</a> o escribirnos al WhatsApp <a href="https://wa.link/vvyfn2" target="_blank">647002464</a>, con gusto te atenderemos, Si deseas ver nuestros trabajos realizados visita nuestro Instagram  <a href="https://www.instagram.com/rotulosmetalarte/" target="_blank">@rotulosmetalarte</a>          
        </p>

        <div class="container">
          <div id="caja" class="row justify-content-md-center">

            <div id="muestra" class="col-md-auto neon_effect Bookman amarillo">
              Rótulos Metalarte
            </div>

          </div>

          <div class="row">
            <div class="col-md-12">
              
              <label for="customRange1" class="form-label">Acercar/alejar texto (Este control no altera las medidas) Es una referencia del orden de las palabras por línea.</label>
              <input type="range" class="form-range" id="customRange1" min="0" max="15" step="0.1" value="3" onchange="ajustarTamano(this.value)">
            </div>
          </div>
        </div>

      </div>
      
      <div class="col-12 text-center">

        <div class="gem-button-container gem-button-position-center thegem-button-61835271a9da17668 lazy-loading  lazy-loading-end-animation">
          <a id="myButton" title="" class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal lazy-loading-item lazy-loading-item-drop-right" data-ll-effect="drop-right-without-wrap" style="text-decoration:none;border-radius: 0px; background-color: rgb(153, 34, 51); color: rgb(255, 255, 255);cursor: pointer;" onmouseleave="this.style.backgroundColor='#992233';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#172b3c';this.style.color='#ffffff';"  >
          <i class="fas fa-magic"></i> APLICAR CAMBIOS
          </a>
        </div>

        <div id="myDIV">
          <i class="fas fa-hourglass-start"></i> Creando el nuevo diseño...
        </div>        

      </div>
      
      <input type="hidden" class="form-control" id="iva_letras" value="<?php echo esc_html($iva_letras);?>" readonly="yes">
      <input type="hidden" class="form-control" id="previsualizacion" value="<?php echo esc_html($previsualizacion);?>" readonly="yes">

      <!-- Aluminio Sin Iluminar -->
      <input type="hidden" class="form-control" id="precio_aluminio" value="<?php echo esc_html($precio_aluminio);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_mano_de_obra" value="<?php echo esc_html($precio_aluminio_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_pintura" value="<?php echo esc_html($precio_aluminio_pintura);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_corte_cnc" value="<?php echo esc_html($precio_aluminio_corte_cnc);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_doblado_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_aluminio_sin_iluminar);?>" readonly="yes">

      <!-- Aluminio Retroiluminadas -->
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado" value="<?php echo esc_html($precio_aluminio_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_mano_de_obra" value="<?php echo esc_html($precio_aluminio_retroiluminado_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_pintura" value="<?php echo esc_html($precio_aluminio_retroiluminado_pintura);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_metacrilato10mm" value="<?php echo esc_html($precio_aluminio_retroiluminado_metacrilato10mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_led" value="<?php echo esc_html($precio_aluminio_retroiluminado_led);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_transformador" value="<?php echo esc_html($precio_aluminio_retroiluminado_transformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_retroiluminado_corte_cnc" value="<?php echo esc_html($precio_aluminio_retroiluminado_corte_cnc);?>" readonly="yes">

      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado);?>" readonly="yes">

      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado);?>" readonly="yes">

      <input type="hidden" class="form-control" id="cn_precio_doblado_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_doblado_aluminio_retroiluminado);?>" readonly="yes">

      <input type="hidden" class="form-control" id="cn_precio_separadores_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_separadores_aluminio_retroiluminado);?>" readonly="yes">

      <!-- Aluminio Iluminadas frontalmente -->
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal" value="<?php echo esc_html($precio_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_mano_de_obra" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_pintura" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_pintura);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_metacrilato3mm" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_metacrilato3mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_junquillo" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_junquillo);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_led" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_led);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_transformador" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_transformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_aluminio_iluminado_frontal_corte_cnc" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_corte_cnc);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_doblado_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_doblado_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal);?>" readonly="yes">

      <!-- Letras corpóreas de Acero sin iluminar -->
      <input type="hidden" class="form-control" id="precio_acero" value="<?php echo esc_html($precio_acero);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_mano_de_obra" value="<?php echo esc_html($precio_acero_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_doblado_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_corte_cnc" value="<?php echo esc_html($precio_acero_corte_cnc);?>" readonly="yes">

      <!-- Letras corpóreas de Acero retroiluminadas -->
      <input type="hidden" class="form-control" id="cn_precio_acero_retroiluminado" value="<?php echo esc_html($cn_precio_acero_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_mano_de_obra_retroiluminado" value="<?php echo esc_html($cn_precio_acero_mano_de_obra_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_metacrilato10mm" value="<?php echo esc_html($precio_acero_retroiluminado_metacrilato10mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_led" value="<?php echo esc_html($precio_acero_retroiluminado_led);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_transformador" value="<?php echo esc_html($precio_acero_retroiluminado_transformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_corte_cnc" value="<?php echo esc_html($precio_acero_retroiluminado_corte_cnc);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_separadores" value="<?php echo esc_html($precio_acero_retroiluminado_separadores);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_retroiluminado_doblado" value="<?php echo esc_html($precio_acero_retroiluminado_doblado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_retroiluminado" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_retroiluminado" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_retroiluminado);?>" readonly="yes">

      <!-- Letras corpóreas PVC -->
      <input type="hidden" class="form-control" id="precio_pvc_5mm" value="<?php echo esc_html($precio_pvc_5mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_10mm" value="<?php echo esc_html($precio_pvc_10mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_19mm" value="<?php echo esc_html($precio_pvc_19mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_mano_de_obra" value="<?php echo esc_html($precio_pvc_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_pintura" value="<?php echo esc_html($precio_pvc_pintura);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_led" value="<?php echo esc_html($precio_pvc_led);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_transformador" value="<?php echo esc_html($precio_pvc_transformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_pvc_corte_cnc" value="<?php echo esc_html($precio_pvc_corte_cnc);?>" readonly="yes">

      <!-- Letras corpóreas de metacrilatos huecas -->
      <input type="hidden" class="form-control" id="precio_metacrilato_huecas_mano_de_obra" value="<?php echo esc_html($precio_metacrilato_huecas_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_metacrilato_huecas_metacrilato3mm" value="<?php echo esc_html($precio_metacrilato_huecas_metacrilato3mm);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_metacrilato_huecas_led" value="<?php echo esc_html($precio_metacrilato_huecas_led);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_metacrilato_huecas_transformador" value="<?php echo esc_html($precio_metacrilato_huecas_transformador);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_metacrilato_huecas_corte_cnc" value="<?php echo esc_html($precio_metacrilato_huecas_corte_cnc);?>" readonly="yes">


      <div class="card" style="">

        <div class="card-header">
          <center> <i class="fas fa-cogs"></i> Personaliza tu rótulo</center>
        </div>

        <div class="card-body" style="background-color: #D3D3D3">

          <?php

            require 'opciones.php';
		      ?>
		
		      <p style="font-size:12px;"><i>Medida de referencia, esta medida puede sufrir algún cambio a la hora de diseñar el neón flexible final. Sin embargo, esto será consultado antes de fabricar y se enviará un previsualización final del neón y no se fabricara hasta recibir aprobación de vuestra parte</i></p>
 
          <?php

            require 'paletasModales.php';
            require 'formaContorno.php';
          
          ?>

          <div class="col-sm-10">
            
            <div class="card" style="border: 0;">
              <div class="card-body" style="background-color: #D3D3D3">
                
               <label>Tiempos de entrega</label>
                <div class="cc-selector">
                  <!-- el campo oculto esta en formaContorno-->

                  <figure class="figure">

                    <input onclick="" type="radio" name="opcionesTiempos" id="dias" value="10 días laborables" checked onchange="deshabiltarBotonCart()">
                    <label class="drinkcard-cc diezDias" for="dias"></label>

                    <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">10 días laborables</figcaption>

                  </figure>

                  <figure class="figure">

                    <input onclick="" type="radio" name="opcionesTiempos" id="horas" value="15 días laborables" onchange="deshabiltarBotonCart()">  
                    <label class="drinkcard-cc quinceDias" for="horas"></label>

                    <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">15 días laborales</figcaption>

                  </figure>


                </div>

              </div>
            </div>              

          </div>  

        </div>
      
      </div>
    
    <br/>