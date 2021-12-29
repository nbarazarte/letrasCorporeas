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

    <input id="font-url-input" type="hidden" readonly="yes" value="<?php echo plugin_dir_url( __FILE__ ). '../css/Fonts/bookman-old-style/BKMNOS.woff'; ?>" style="width: 900px;" readonly/>

    <div id="result"> </div>
    <div id="medida"> </div>

      
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
      <input type="hidden" class="form-control" id="profundidad_30mm_aluminio_sin_iluminar" value="<?php echo esc_html($profundidad_30mm_aluminio_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_aluminio_sin_iluminar" value="<?php echo esc_html($profundidad_50mm_aluminio_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_aluminio_sin_iluminar" value="<?php echo esc_html($profundidad_80mm_aluminio_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_aluminio_sin_iluminar" value="<?php echo esc_html($profundidad_100mm_aluminio_sin_iluminar);?>" readonly="yes">

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
      <input type="hidden" class="form-control" id="profundidad_30mm_aluminio_retroiluminado" value="<?php echo esc_html($profundidad_30mm_aluminio_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_aluminio_retroiluminado" value="<?php echo esc_html($profundidad_50mm_aluminio_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_aluminio_retroiluminado" value="<?php echo esc_html($profundidad_80mm_aluminio_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_aluminio_retroiluminado" value="<?php echo esc_html($profundidad_100mm_aluminio_retroiluminado);?>" readonly="yes">

      <!-- Aluminio iluminadas frontalmente -->
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
      <input type="hidden" class="form-control" id="profundidad_30mm_aluminio_iluminado_frontal" value="<?php echo esc_html($profundidad_30mm_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_aluminio_iluminado_frontal" value="<?php echo esc_html($profundidad_50mm_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_aluminio_iluminado_frontal" value="<?php echo esc_html($profundidad_80mm_aluminio_iluminado_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_aluminio_iluminado_frontal" value="<?php echo esc_html($profundidad_100mm_aluminio_iluminado_frontal);?>" readonly="yes">

      <!-- Acero sin iluminar -->
      <input type="hidden" class="form-control" id="precio_acero" value="<?php echo esc_html($precio_acero);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_mano_de_obra" value="<?php echo esc_html($precio_acero_mano_de_obra);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_doblado_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="precio_acero_corte_cnc" value="<?php echo esc_html($precio_acero_corte_cnc);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_30mm_acero_sin_iluminar" value="<?php echo esc_html($profundidad_30mm_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_acero_sin_iluminar" value="<?php echo esc_html($profundidad_50mm_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_acero_sin_iluminar" value="<?php echo esc_html($profundidad_80mm_acero_sin_iluminar);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_acero_sin_iluminar" value="<?php echo esc_html($profundidad_100mm_acero_sin_iluminar);?>" readonly="yes">

      <!-- Acero retroiluminadas -->
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
      <input type="hidden" class="form-control" id="profundidad_30mm_acero_retroiluminado" value="<?php echo esc_html($profundidad_30mm_acero_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_acero_retroiluminado" value="<?php echo esc_html($profundidad_50mm_acero_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_acero_retroiluminado" value="<?php echo esc_html($profundidad_80mm_acero_retroiluminado);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_acero_retroiluminado" value="<?php echo esc_html($profundidad_100mm_acero_retroiluminado);?>" readonly="yes">

      <!-- Acero iluminadas frontalmente -->
      <input type="hidden" class="form-control" id="cn_precio_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_soldadura_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_soldadura_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_metacrilato3mm_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_metacrilato3mm_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_led_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_led_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_transformador_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_transformador_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_corte_cnc_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_corte_cnc_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_doblado_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_doblado_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_acero_junquillo_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_junquillo_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_30mm_acero_iluminacion_frontal" value="<?php echo esc_html($profundidad_30mm_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_50mm_acero_iluminacion_frontal" value="<?php echo esc_html($profundidad_50mm_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_80mm_acero_iluminacion_frontal" value="<?php echo esc_html($profundidad_80mm_acero_iluminacion_frontal);?>" readonly="yes">
      <input type="hidden" class="form-control" id="profundidad_100mm_acero_iluminacion_frontal" value="<?php echo esc_html($profundidad_100mm_acero_iluminacion_frontal);?>" readonly="yes">

      <!-- Latón Sin Iluminar -->
     <input type="hidden" class="form-control" id="cn_precio_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="cn_precio_soldadura_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_soldadura_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="cn_precio_corte_cnc_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_corte_cnc_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="cn_precio_doblado_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="cn_precio_diez_dias_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_diez_dias_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="cn_precio_quince_dias_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_quince_dias_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="profundidad_30mm_laton_sin_iluminar" value="<?php echo esc_html($profundidad_30mm_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="profundidad_50mm_laton_sin_iluminar" value="<?php echo esc_html($profundidad_50mm_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="profundidad_80mm_laton_sin_iluminar" value="<?php echo esc_html($profundidad_80mm_laton_sin_iluminar);?>" readonly="yes">
     <input type="hidden" class="form-control" id="profundidad_100mm_laton_sin_iluminar" value="<?php echo esc_html($profundidad_100mm_laton_sin_iluminar);?>" readonly="yes">

     <!-- Latón retroiluminadas -->
    <input type="hidden" class="form-control" id="cn_precio_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_soldadura_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_soldadura_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_metacrilato10mm_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_metacrilato10mm_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_led_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_led_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_transformador_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_transformador_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_corte_cnc_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_corte_cnc_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_separadores_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_separadores_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_doblado_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_doblado_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_diez_dias_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_diez_dias_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_quince_dias_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_quince_dias_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="profundidad_30mm_laton_retroiluminadas" value="<?php echo esc_html($profundidad_30mm_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="profundidad_50mm_laton_retroiluminadas" value="<?php echo esc_html($profundidad_50mm_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="profundidad_80mm_laton_retroiluminadas" value="<?php echo esc_html($profundidad_80mm_laton_retroiluminadas);?>" readonly="yes">
    <input type="hidden" class="form-control" id="profundidad_100mm_laton_retroiluminadas" value="<?php echo esc_html($profundidad_100mm_laton_retroiluminadas);?>" readonly="yes">

    <!-- Latón iluminadas frontalmente -->
    <input type="hidden" class="form-control" id="cn_precio_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_soldadura_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_soldadura_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_metacrilato3mm_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_metacrilato3mm_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_led_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_led_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_transformador_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_transformador_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_corte_cnc_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_corte_cnc_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_junquillo_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_junquillo_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_laton_doblado_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_doblado_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_diez_dias_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_diez_dias_laton_iluminacion_frontal);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_quince_dias_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_quince_dias_laton_iluminacion_frontal);?>" readonly="yes">
   <input type="hidden" class="form-control" id="profundidad_30mm_laton_iluminacion_frontal" value="<?php echo esc_html($profundidad_30mm_laton_iluminacion_frontal);?>" readonly="yes">
   <input type="hidden" class="form-control" id="profundidad_50mm_laton_iluminacion_frontal" value="<?php echo esc_html($profundidad_50mm_laton_iluminacion_frontal);?>" readonly="yes">
   <input type="hidden" class="form-control" id="profundidad_80mm_laton_iluminacion_frontal" value="<?php echo esc_html($profundidad_80mm_laton_iluminacion_frontal);?>" readonly="yes">
   <input type="hidden" class="form-control" id="profundidad_100mm_laton_iluminacion_frontal" value="<?php echo esc_html($profundidad_100mm_laton_iluminacion_frontal);?>" readonly="yes">

    <!-- Letras corpóreas PVC -->
    <input type="hidden" class="form-control" id="precio_pvc_5mm" value="<?php echo esc_html($precio_pvc_5mm);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_10mm" value="<?php echo esc_html($precio_pvc_10mm);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_19mm" value="<?php echo esc_html($precio_pvc_19mm);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_mano_de_obra" value="<?php echo esc_html($precio_pvc_mano_de_obra);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_pintura" value="<?php echo esc_html($precio_pvc_pintura);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_led" value="<?php echo esc_html($precio_pvc_led);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_transformador" value="<?php echo esc_html($precio_pvc_transformador);?>" readonly="yes">
    <input type="hidden" class="form-control" id="precio_pvc_corte_cnc" value="<?php echo esc_html($precio_pvc_corte_cnc);?>" readonly="yes">

    <!-- Metacrilato con luz -->
    <input type="hidden" class="form-control" id="cn_precio_metacrilato3mm_blancoOpal_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato3mm_blancoOpal_sin_luz);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_metacrilato3mm_color360_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato3mm_color360_sin_luz);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_metacrilato_led_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_led_sin_luz);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_metacrilato_transformador_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_transformador_sin_luz);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_metacrilato_cloroformo_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_cloroformo_sin_luz);?>" readonly="yes">
    <input type="hidden" class="form-control" id="cn_precio_metacrilato_corte_cnc_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_corte_cnc_sin_luz);?>" readonly="yes">   
    <input type="hidden" class="form-control" id="cn_precio_metacrilato_doblado_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_doblado_sin_luz);?>" readonly="yes">  
   <input type="hidden" class="form-control" id="cn_precio_metacrilato_traseraPVC10mm_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_traseraPVC10mm_sin_luz);?>" readonly="yes">  
   <input type="hidden" class="form-control" id="cn_precio_diez_dias_metacrilato_sin_luz" value="<?php echo esc_html($cn_precio_diez_dias_metacrilato_sin_luz);?>" readonly="yes">  
   <input type="hidden" class="form-control" id="cn_precio_quince_dias_metacrilato_sin_luz" value="<?php echo esc_html($cn_precio_quince_dias_metacrilato_sin_luz);?>" readonly="yes">  

  <!-- PVC 5mm -->
  <input type="hidden" class="form-control" id="precio_pvc_5mm" value="<?php echo esc_html($precio_pvc_5mm);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_fondo" value="<?php echo esc_html($precio_pvc_5mm_fondo);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_pintura" value="<?php echo esc_html($precio_pvc_5mm_pintura);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_corte_cnc" value="<?php echo esc_html($precio_pvc_5mm_corte_cnc);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_cinta" value="<?php echo esc_html($precio_pvc_5mm_cinta);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_diez_dias" value="<?php echo esc_html($precio_pvc_5mm_diez_dias);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_5mm_quince_dias" value="<?php echo esc_html($precio_pvc_5mm_quince_dias);?>" readonly="yes">

  <!-- PVC 10mm -->
  <input type="hidden" class="form-control" id="precio_pvc_10mm" value="<?php echo esc_html($precio_pvc_10mm);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_fondo" value="<?php echo esc_html($precio_pvc_10mm_fondo);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_pintura" value="<?php echo esc_html($precio_pvc_10mm_pintura);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_corte_cnc" value="<?php echo esc_html($precio_pvc_10mm_corte_cnc);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_cinta" value="<?php echo esc_html($precio_pvc_10mm_cinta);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_diez_dias" value="<?php echo esc_html($precio_pvc_10mm_diez_dias);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_10mm_quince_dias" value="<?php echo esc_html($precio_pvc_10mm_quince_dias);?>" readonly="yes">

  <!-- PVC 19mm sin iluminar -->
  <input type="hidden" class="form-control" id="precio_pvc_19mm" value="<?php echo esc_html($precio_pvc_19mm);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_fondo" value="<?php echo esc_html($precio_pvc_19mm_fondo);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_pintura" value="<?php echo esc_html($precio_pvc_19mm_pintura);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_corte_cnc" value="<?php echo esc_html($precio_pvc_19mm_corte_cnc);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_cinta" value="<?php echo esc_html($precio_pvc_19mm_cinta);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_diez_dias" value="<?php echo esc_html($precio_pvc_19mm_diez_dias);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_quince_dias" value="<?php echo esc_html($precio_pvc_19mm_quince_dias);?>" readonly="yes">

  <!-- PVC 19mm retroiluminadas -->
  <input type="hidden" class="form-control" id="precio_pvc_19mm_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_fondo_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_fondo_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_pintura_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_pintura_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_corte_cnc_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_corte_cnc_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_cinta_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_cinta_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_tornilleria_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_tornilleria_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_separadores_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_separadores_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_transformador_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_transformador_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_led_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_led_retroiluminadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_diez_dias_retroalimentadas" value="<?php echo esc_html($precio_pvc_19mm_diez_dias_retroalimentadas);?>" readonly="yes">
  <input type="hidden" class="form-control" id="precio_pvc_19mm_quince_dias_retroalimentadas" value="<?php echo esc_html($precio_pvc_19mm_quince_dias_retroalimentadas);?>" readonly="yes">

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
                    
                <div id="colorPaletaSeleccionada">
                  <input type="hidden" id="colorPaleta" name="colorPaleta" value="RAL: RAL 1000" readonly="yes">
                  <div id="colorSeleccionado" style="">RAL: RAL 1000</div>
                </div>

              </div>
            </div>

          </div>

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