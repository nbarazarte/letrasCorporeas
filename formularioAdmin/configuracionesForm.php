<!-- Bootstrap CSS -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/3be368b9d8.js" crossorigin="anonymous"></script>

<div class="col-12 text-center">

<br/>
<h5 class="card-title">Configuración de Letras Corpóreas</h5>

<form method="post" action="admin-post.php">

  <input type="hidden" name="action"  value="guardar_ga_LetrasCorporeas" />

  <!-- mejorar la seguridad -->
  <?php wp_nonce_field('token_ga'); ?>

    <div class="row">

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">ID del Producto Personalizado</h5>

              <div class="mb-3">
                <label for="cn_pagina" class="form-label">Valor:</label>
                <!--
                  <input type="text" class="form-control" id="cn_pagina" name="cn_pagina" value="<?php echo esc_html($cn_pagina);?>" required/>
                -->
                <input type="number" class="form-control" id="cn_id_producto_personalizado_letras" name="cn_id_producto_personalizado_letras" value="<?php echo esc_html($cn_id_producto_personalizado_letras);?>" required/>

              </div>

          </div>
        </div>
      </div>

      <!--<div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Precio base del Neon</h5>

              <div class="mb-3">
                <label for="cn_precio_base" class="form-label">Valor:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_base" name="cn_precio_base" value="<?php echo esc_html($cn_precio_base);?>" required/>
                
              </div>

          </div>
        </div>
      </div>-->

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Impuesto</h5>

              <div class="mb-3">
                <label for="iva_letras" class="form-label">% Valor:</label>
                <input type="number" class="form-control" id="iva_letras" name="iva_letras" value="<?php echo esc_html($iva_letras);?>" required/>
                
              </div>

          </div>
        </div>
      </div>  

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Previsualización</h5>

              <div class="mb-3">
                <label for="cn_precio_base" class="form-label">Valor:</label>
                <input type="number" step=".01" class="form-control" id="previsualizacion" name="previsualizacion" value="<?php echo esc_html($previsualizacion);?>" required/>
                
              </div>

          </div>
        </div>
      </div>      

    </div>  

    <p>&nbsp;</p>

    <div class="accordion" id="accordionExample1">

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA1">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA1" aria-expanded="true" aria-controls="collapseA1">
            <h5 class="card-title" style="text-align: left;">Aluminio Sin Iluminar</h5>
          </button>
        </h2>
        <div id="collapseA1" class="accordion-collapse collapse show" aria-labelledby="headingA1" data-bs-parent="#accordionExample1">
          <div class="accordion-body">
            
            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col">
                <label for="precio_aluminio" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio" name="precio_aluminio" value="<?php echo esc_html($precio_aluminio);?>" required/>
              </div>

              <div class="col">
                <label for="precio_aluminio_mano_de_obra" class="form-label">Soldadura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_mano_de_obra" name="precio_aluminio_mano_de_obra" value="<?php echo esc_html($precio_aluminio_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="precio_aluminio_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_pintura" name="precio_aluminio_pintura" value="<?php echo esc_html($precio_aluminio_pintura);?>" required/>
              </div>

              <div class="col">
                <label for="precio_aluminio_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_corte_cnc" name="precio_aluminio_corte_cnc" value="<?php echo esc_html($precio_aluminio_corte_cnc);?>" required/>
              </div>    


              <div class="col">
                <label for="cn_precio_doblado_aluminio_sin_iluminar" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_doblado_aluminio_sin_iluminar" name="cn_precio_doblado_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_aluminio_sin_iluminar);?>" required/>                
              </div>

              <div class="col">
                <label for="cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar" class="form-label">10 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar" name="cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_sin_iluminar);?>" required/>               
              </div>  

              <div class="col">
                <label for="cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar" class="form-label">15 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar" name="cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_sin_iluminar);?>" required/>               
              </div>  

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA2" aria-expanded="false" aria-controls="collapseA2">
            <h5 class="card-title" style="text-align: left;">Aluminio Retroiluminadas</h5>
          </button>
        </h2>
        <div id="collapseA2" class="accordion-collapse collapse" aria-labelledby="headingA2" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado" name="precio_aluminio_retroiluminado" value="<?php echo esc_html($precio_aluminio_retroiluminado);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado_mano_de_obra" class="form-label">Soldadura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_mano_de_obra" name="precio_aluminio_retroiluminado_mano_de_obra" value="<?php echo esc_html($precio_aluminio_retroiluminado_mano_de_obra);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_pintura" name="precio_aluminio_retroiluminado_pintura" value="<?php echo esc_html($precio_aluminio_retroiluminado_pintura);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado_metacrilato10mm" class="form-label">Metacrilato 10mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_metacrilato10mm" name="precio_aluminio_retroiluminado_metacrilato10mm" value="<?php echo esc_html($precio_aluminio_retroiluminado_metacrilato10mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado_led" class="form-label">Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_led" name="precio_aluminio_retroiluminado_led" value="<?php echo esc_html($precio_aluminio_retroiluminado_led);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_retroiluminado_transformador" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_transformador" name="precio_aluminio_retroiluminado_transformador" value="<?php echo esc_html($precio_aluminio_retroiluminado_transformador);?>" required/>
              </div>                                                     

              <div class="col">
                <label for="precio_aluminio_retroiluminado_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_corte_cnc" name="precio_aluminio_retroiluminado_corte_cnc" value="<?php echo esc_html($precio_aluminio_retroiluminado_corte_cnc);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado" class="form-label">10 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado" name="cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_retroiluminado);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado" class="form-label">15 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado" name="cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_retroiluminado);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_doblado_aluminio_retroiluminado" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_doblado_aluminio_retroiluminado" name="cn_precio_doblado_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_doblado_aluminio_retroiluminado);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_separadores_aluminio_retroiluminado" class="form-label">Separadores:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_separadores_aluminio_retroiluminado" name="cn_precio_separadores_aluminio_retroiluminado" value="<?php echo esc_html($cn_precio_separadores_aluminio_retroiluminado);?>" required/>
              </div> 

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA3" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Aluminio Iluminadas Frontalmente</h5>
          </button>
        </h2>
        <div id="collapseA3" class="accordion-collapse collapse" aria-labelledby="headingA3" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col">
                <label for="precio_aluminio_iluminado_frontal" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal" name="precio_aluminio_iluminado_frontal" value="<?php echo esc_html($precio_aluminio_iluminado_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_mano_de_obra" class="form-label">Soldadura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_mano_de_obra" name="precio_aluminio_iluminado_frontal_mano_de_obra" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_mano_de_obra);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_pintura" name="precio_aluminio_iluminado_frontal_pintura" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_pintura);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_metacrilato3mm" class="form-label">Metacrilato 3mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_metacrilato3mm" name="precio_aluminio_iluminado_frontal_metacrilato3mm" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_metacrilato3mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_junquillo" class="form-label">Junquillo:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_junquillo" name="precio_aluminio_iluminado_frontal_junquillo" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_junquillo);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_led" class="form-label">Precio Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_led" name="precio_aluminio_iluminado_frontal_led" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_led);?>" required/>
              </div>               

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_transformador" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_transformador" name="precio_aluminio_iluminado_frontal_transformador" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_transformador);?>" required/>
              </div>                                                     

              <div class="col-sm-2">
                <label for="precio_aluminio_iluminado_frontal_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_corte_cnc" name="precio_aluminio_iluminado_frontal_corte_cnc" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_corte_cnc);?>" required/>
              </div>                  

              <div class="col-sm-2">
                <label for="cn_precio_doblado_aluminio_iluminado_frontal" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_doblado_aluminio_iluminado_frontal" name="cn_precio_doblado_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_doblado_aluminio_iluminado_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal" class="form-label">10 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal" name="cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_aluminio_iluminado_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal" class="form-label">15 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal" name="cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_aluminio_iluminado_frontal);?>" required/>
              </div> 

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA6">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA6" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Acero Sin Iluminar</h5>
          </button>
        </h2>
        <div id="collapseA6" class="accordion-collapse collapse" aria-labelledby="headingA6" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col">
                <label for="precio_acero" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero" name="precio_acero" value="<?php echo esc_html($precio_acero);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_acero_mano_de_obra" class="form-label">Soldadura:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_mano_de_obra" name="precio_acero_mano_de_obra" value="<?php echo esc_html($precio_acero_mano_de_obra);?>" required/>
              </div>                                                 

              <div class="col-sm-2">
                <label for="precio_acero_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_corte_cnc" name="precio_acero_corte_cnc" value="<?php echo esc_html($precio_acero_corte_cnc);?>" required/>
              </div>                  

              <div class="col-sm-2">
                <label for="cn_precio_doblado_acero_sin_iluminar" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_doblado_acero_sin_iluminar" name="cn_precio_doblado_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_acero_sin_iluminar);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar" class="form-label">10 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar" name="cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_sin_iluminar);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_quincediaslaboralesLetras_acero_sin_iluminar" class="form-label">15 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_sin_iluminar" name="cn_precio_quincediaslaboralesLetras_acero_sin_iluminar" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_sin_iluminar);?>" required/>
              </div> 

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA7">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA7" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Acero Retroiluminadas</h5>
          </button>
        </h2>
        <div id="collapseA7" class="accordion-collapse collapse" aria-labelledby="headingA7" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="cn_precio_acero_retroiluminado" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_retroiluminado" name="cn_precio_acero_retroiluminado" value="<?php echo esc_html($cn_precio_acero_retroiluminado);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_acero_mano_de_obra_retroiluminado" class="form-label">Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_mano_de_obra_retroiluminado" name="cn_precio_acero_mano_de_obra_retroiluminado" value="<?php echo esc_html($cn_precio_acero_mano_de_obra_retroiluminado);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_metacrilato10mm" class="form-label">Metacrilato 10mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_metacrilato10mm" name="precio_acero_retroiluminado_metacrilato10mm" value="<?php echo esc_html($precio_acero_retroiluminado_metacrilato10mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_led" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_led" name="precio_acero_retroiluminado_led" value="<?php echo esc_html($precio_acero_retroiluminado_led);?>" required/>
              </div>              

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_transformador" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_transformador" name="precio_acero_retroiluminado_transformador" value="<?php echo esc_html($precio_acero_retroiluminado_transformador);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_corte_cnc" name="precio_acero_retroiluminado_corte_cnc" value="<?php echo esc_html($precio_acero_retroiluminado_corte_cnc);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_separadores" class="form-label">Separadores:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_separadores" name="precio_acero_retroiluminado_separadores" value="<?php echo esc_html($precio_acero_retroiluminado_separadores);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_acero_retroiluminado_doblado" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="precio_acero_retroiluminado_doblado" name="precio_acero_retroiluminado_doblado" value="<?php echo esc_html($precio_acero_retroiluminado_doblado);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="cn_precio_diezdiaslaboralesLetras_acero_retroiluminado" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_retroiluminado" name="cn_precio_diezdiaslaboralesLetras_acero_retroiluminado" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_retroiluminado);?>" required/>
              </div>                

              <div class="col-sm-2">
                <label for="cn_precio_quincediaslaboralesLetras_acero_retroiluminado" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_retroiluminado" name="cn_precio_quincediaslaboralesLetras_acero_retroiluminado" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_retroiluminado);?>" required/>
              </div>  

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA8">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA8" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Acero Iluminadas Frontalmente</h5>
          </button>
        </h2>
        <div id="collapseA8" class="accordion-collapse collapse" aria-labelledby="headingA8" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="cn_precio_acero_iluminacion_frontal" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_iluminacion_frontal" name="cn_precio_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_acero_soldadura_iluminacion_frontal" class="form-label">Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_soldadura_iluminacion_frontal" name="cn_precio_acero_soldadura_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_soldadura_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_metacrilato3mm_iluminacion_frontal" class="form-label">Metacrilato 3mm:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_metacrilato3mm_iluminacion_frontal" name="cn_precio_acero_metacrilato3mm_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_metacrilato3mm_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_led_iluminacion_frontal" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_led_iluminacion_frontal" name="cn_precio_acero_led_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_led_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_transformador_iluminacion_frontal" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_transformador_iluminacion_frontal" name="cn_precio_acero_transformador_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_transformador_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_corte_cnc_iluminacion_frontal" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_corte_cnc_iluminacion_frontal" name="cn_precio_acero_corte_cnc_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_corte_cnc_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_doblado_iluminacion_frontal" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_doblado_iluminacion_frontal" name="cn_precio_acero_doblado_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_doblado_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_acero_junquillo_iluminacion_frontal" class="form-label">Junquillo:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_acero_junquillo_iluminacion_frontal" name="cn_precio_acero_junquillo_iluminacion_frontal" value="<?php echo esc_html($cn_precio_acero_junquillo_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal" name="cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras_acero_iluminacion_frontal);?>" required/>
              </div> 

              <div class="col-sm-2">
                <label for="cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal" name="cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras_acero_iluminacion_frontal);?>" required/>
              </div> 

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA9">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA9" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Latón Sin Iluminar</h5>
          </button>
        </h2>
        <div id="collapseA9" class="accordion-collapse collapse" aria-labelledby="headingA9" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="cn_precio_laton_sin_iluminar" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_sin_iluminar" name="cn_precio_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_laton_sin_iluminar);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_soldadura_laton_sin_iluminar" class="form-label">Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_soldadura_laton_sin_iluminar" name="cn_precio_soldadura_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_soldadura_laton_sin_iluminar);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_corte_cnc_laton_sin_iluminar" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_corte_cnc_laton_sin_iluminar" name="cn_precio_corte_cnc_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_corte_cnc_laton_sin_iluminar);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_doblado_laton_sin_iluminar" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_doblado_laton_sin_iluminar" name="cn_precio_doblado_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_doblado_laton_sin_iluminar);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_diez_dias_laton_sin_iluminar" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diez_dias_laton_sin_iluminar" name="cn_precio_diez_dias_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_diez_dias_laton_sin_iluminar);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_quince_dias_laton_sin_iluminar" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quince_dias_laton_sin_iluminar" name="cn_precio_quince_dias_laton_sin_iluminar" value="<?php echo esc_html($cn_precio_quince_dias_laton_sin_iluminar);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA10">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA10" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Latón Retroiluminadas</h5>
          </button>
        </h2>
        <div id="collapseA10" class="accordion-collapse collapse" aria-labelledby="headingA10" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="cn_precio_laton_retroiluminadas" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_retroiluminadas" name="cn_precio_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_soldadura_retroiluminadas" class="form-label">Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_soldadura_retroiluminadas" name="cn_precio_laton_soldadura_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_soldadura_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_metacrilato10mm_retroiluminadas" class="form-label">Metacrilato 10mm:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_metacrilato10mm_retroiluminadas" name="cn_precio_laton_metacrilato10mm_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_metacrilato10mm_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_led_retroiluminadas" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_led_retroiluminadas" name="cn_precio_laton_led_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_led_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_transformador_retroiluminadas" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_transformador_retroiluminadas" name="cn_precio_laton_transformador_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_transformador_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_corte_cnc_retroiluminadas" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_corte_cnc_retroiluminadas" name="cn_precio_laton_corte_cnc_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_corte_cnc_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_separadores_retroiluminadas" class="form-label">Separadores:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_separadores_retroiluminadas" name="cn_precio_laton_separadores_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_separadores_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_doblado_retroiluminadas" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_doblado_retroiluminadas" name="cn_precio_laton_doblado_retroiluminadas" value="<?php echo esc_html($cn_precio_laton_doblado_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_diez_dias_laton_retroiluminadas" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diez_dias_laton_retroiluminadas" name="cn_precio_diez_dias_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_diez_dias_laton_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_quince_dias_laton_retroiluminadas" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quince_dias_laton_retroiluminadas" name="cn_precio_quince_dias_laton_retroiluminadas" value="<?php echo esc_html($cn_precio_quince_dias_laton_retroiluminadas);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA11">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA11" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Latón Iluminadas Frontalmente</h5>
          </button>
        </h2>
        <div id="collapseA11" class="accordion-collapse collapse" aria-labelledby="headingA11" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="cn_precio_laton_iluminacion_frontal" class="form-label">Precio:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_iluminacion_frontal" name="cn_precio_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_soldadura_iluminacion_frontal" class="form-label">Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_soldadura_iluminacion_frontal" name="cn_precio_laton_soldadura_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_soldadura_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_metacrilato3mm_iluminacion_frontal" class="form-label">Metacrilato 3mm:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_metacrilato3mm_iluminacion_frontal" name="cn_precio_laton_metacrilato3mm_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_metacrilato3mm_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_led_iluminacion_frontal" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_led_iluminacion_frontal" name="cn_precio_laton_led_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_led_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_transformador_iluminacion_frontal" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_transformador_iluminacion_frontal" name="cn_precio_laton_transformador_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_transformador_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_corte_cnc_iluminacion_frontal" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_corte_cnc_iluminacion_frontal" name="cn_precio_laton_corte_cnc_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_corte_cnc_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_junquillo_iluminacion_frontal" class="form-label">Junquillo:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_junquillo_iluminacion_frontal" name="cn_precio_laton_junquillo_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_junquillo_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_laton_doblado_iluminacion_frontal" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_laton_doblado_iluminacion_frontal" name="cn_precio_laton_doblado_iluminacion_frontal" value="<?php echo esc_html($cn_precio_laton_doblado_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_diez_dias_laton_iluminacion_frontal" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diez_dias_laton_iluminacion_frontal" name="cn_precio_diez_dias_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_diez_dias_laton_iluminacion_frontal);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_quince_dias_laton_iluminacion_frontal" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quince_dias_laton_iluminacion_frontal" name="cn_precio_quince_dias_laton_iluminacion_frontal" value="<?php echo esc_html($cn_precio_quince_dias_laton_iluminacion_frontal);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA5" aria-expanded="false" aria-controls="collapseA5">
            <h5 class="card-title" style="text-align: left;">Metacrilato Sin Luz</h5>
          </button>
        </h2>
        <div id="collapseA5" class="accordion-collapse collapse" aria-labelledby="headingA5" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">                             

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato3mm_blancoOpal_sin_luz" class="form-label">Blanco Opal:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato3mm_blancoOpal_sin_luz" name="cn_precio_metacrilato3mm_blancoOpal_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato3mm_blancoOpal_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato3mm_color360_sin_luz" class="form-label">Color 360:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato3mm_color360_sin_luz" name="cn_precio_metacrilato3mm_color360_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato3mm_color360_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_led_sin_luz" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_led_sin_luz" name="cn_precio_metacrilato_led_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_led_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_transformador_sin_luz" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_transformador_sin_luz" name="cn_precio_metacrilato_transformador_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_transformador_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_cloroformo_sin_luz" class="form-label">Cloroformo:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_cloroformo_sin_luz" name="cn_precio_metacrilato_cloroformo_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_cloroformo_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_corte_cnc_sin_luz" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_corte_cnc_sin_luz" name="cn_precio_metacrilato_corte_cnc_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_corte_cnc_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_doblado_sin_luz" class="form-label">Doblado:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_doblado_sin_luz" name="cn_precio_metacrilato_doblado_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_doblado_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_metacrilato_traseraPVC10mm_sin_luz" class="form-label">Trasera PVC 10mm:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metacrilato_traseraPVC10mm_sin_luz" name="cn_precio_metacrilato_traseraPVC10mm_sin_luz" value="<?php echo esc_html($cn_precio_metacrilato_traseraPVC10mm_sin_luz);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="cn_precio_diez_dias_metacrilato_sin_luz" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_diez_dias_metacrilato_sin_luz" name="cn_precio_diez_dias_metacrilato_sin_luz" value="<?php echo esc_html($cn_precio_diez_dias_metacrilato_sin_luz);?>" required/>
              </div>              

              <div class="col-sm-2">
                <label for="cn_precio_quince_dias_metacrilato_sin_luz" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quince_dias_metacrilato_sin_luz" name="cn_precio_quince_dias_metacrilato_sin_luz" value="<?php echo esc_html($cn_precio_quince_dias_metacrilato_sin_luz);?>" required/>
              </div> 

            </div>

          </div>
        </div>
      </div>   

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA4" aria-expanded="false" aria-controls="collapseA4">
            <h5 class="card-title" style="text-align: left;">PVC 5mm</h5>
          </button>
        </h2>
        <div id="collapseA4" class="accordion-collapse collapse" aria-labelledby="headingA4" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="precio_pvc_5mm" class="form-label">Precio PVC 5mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm" name="precio_pvc_5mm" value="<?php echo esc_html($precio_pvc_5mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_5mm_fondo" class="form-label">Fondo:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_fondo" name="precio_pvc_5mm_fondo" value="<?php echo esc_html($precio_pvc_5mm_fondo);?>" required/>
              </div>
                             
              <div class="col-sm-2">
                <label for="precio_pvc_5mm_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_pintura" name="precio_pvc_5mm_pintura" value="<?php echo esc_html($precio_pvc_5mm_pintura);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_5mm_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_corte_cnc" name="precio_pvc_5mm_corte_cnc" value="<?php echo esc_html($precio_pvc_5mm_corte_cnc);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_5mm_cinta" class="form-label">Cinta doble cara:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_cinta" name="precio_pvc_5mm_cinta" value="<?php echo esc_html($precio_pvc_5mm_cinta);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_5mm_diez_dias" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_diez_dias" name="precio_pvc_5mm_diez_dias" value="<?php echo esc_html($precio_pvc_5mm_diez_dias);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_5mm_quince_dias" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm_quince_dias" name="precio_pvc_5mm_quince_dias" value="<?php echo esc_html($precio_pvc_5mm_quince_dias);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>    


      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA12">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA12" aria-expanded="false" aria-controls="collapseA12">
            <h5 class="card-title" style="text-align: left;">PVC 10mm</h5>
          </button>
        </h2>
        <div id="collapseA12" class="accordion-collapse collapse" aria-labelledby="headingA12" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="precio_pvc_10mm" class="form-label">Precio PVC 10mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm" name="precio_pvc_10mm" value="<?php echo esc_html($precio_pvc_10mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_10mm_fondo" class="form-label">Fondo:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_fondo" name="precio_pvc_10mm_fondo" value="<?php echo esc_html($precio_pvc_10mm_fondo);?>" required/>
              </div>
                             
              <div class="col-sm-2">
                <label for="precio_pvc_10mm_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_pintura" name="precio_pvc_10mm_pintura" value="<?php echo esc_html($precio_pvc_10mm_pintura);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_10mm_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_corte_cnc" name="precio_pvc_10mm_corte_cnc" value="<?php echo esc_html($precio_pvc_10mm_corte_cnc);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_10mm_cinta" class="form-label">Cinta doble cara:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_cinta" name="precio_pvc_10mm_cinta" value="<?php echo esc_html($precio_pvc_10mm_cinta);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_10mm_diez_dias" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_diez_dias" name="precio_pvc_10mm_diez_dias" value="<?php echo esc_html($precio_pvc_10mm_diez_dias);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_10mm_quince_dias" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm_quince_dias" name="precio_pvc_10mm_quince_dias" value="<?php echo esc_html($precio_pvc_10mm_quince_dias);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>  

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA13">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA13" aria-expanded="false" aria-controls="collapseA13">
            <h5 class="card-title" style="text-align: left;">PVC 19mm Sin Iluminar</h5>
          </button>
        </h2>
        <div id="collapseA13" class="accordion-collapse collapse" aria-labelledby="headingA13" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="precio_pvc_19mm" class="form-label">Precio PVC 19mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm" name="precio_pvc_19mm" value="<?php echo esc_html($precio_pvc_19mm);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_fondo" class="form-label">Fondo:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_fondo" name="precio_pvc_19mm_fondo" value="<?php echo esc_html($precio_pvc_19mm_fondo);?>" required/>
              </div>
                             
              <div class="col-sm-2">
                <label for="precio_pvc_19mm_pintura" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_pintura" name="precio_pvc_19mm_pintura" value="<?php echo esc_html($precio_pvc_19mm_pintura);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_corte_cnc" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_corte_cnc" name="precio_pvc_19mm_corte_cnc" value="<?php echo esc_html($precio_pvc_19mm_corte_cnc);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_cinta" class="form-label">Cinta doble cara:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_cinta" name="precio_pvc_19mm_cinta" value="<?php echo esc_html($precio_pvc_19mm_cinta);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_diez_dias" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_diez_dias" name="precio_pvc_19mm_diez_dias" value="<?php echo esc_html($precio_pvc_19mm_diez_dias);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_quince_dias" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_quince_dias" name="precio_pvc_19mm_quince_dias" value="<?php echo esc_html($precio_pvc_19mm_quince_dias);?>" required/>
              </div>

            </div>

          </div>
        </div>
      </div>  

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA14">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA14" aria-expanded="false" aria-controls="collapseA14">
            <h5 class="card-title" style="text-align: left;">PVC 19mm Retroiluminadas</h5>
          </button>
        </h2>
        <div id="collapseA14" class="accordion-collapse collapse" aria-labelledby="headingA14" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title"></h6>

            <div class="row">

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_retroiluminadas" class="form-label">Precio PVC 19mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_retroiluminadas" name="precio_pvc_19mm_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_fondo_retroiluminadas" class="form-label">Fondo:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_fondo_retroiluminadas" name="precio_pvc_19mm_fondo_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_fondo_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_pintura_retroiluminadas" class="form-label">Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_pintura_retroiluminadas" name="precio_pvc_19mm_pintura_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_pintura_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_corte_cnc_retroiluminadas" class="form-label">Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_corte_cnc_retroiluminadas" name="precio_pvc_19mm_corte_cnc_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_corte_cnc_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_cinta_retroiluminadas" class="form-label">Cinta:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_cinta_retroiluminadas" name="precio_pvc_19mm_cinta_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_cinta_retroiluminadas);?>" required/>
              </div>

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_tornilleria_retroiluminadas" class="form-label">Tornillería:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_tornilleria_retroiluminadas" name="precio_pvc_19mm_tornilleria_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_tornilleria_retroiluminadas);?>" required/>
              </div>              

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_separadores_retroiluminadas" class="form-label">Separadores:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_separadores_retroiluminadas" name="precio_pvc_19mm_separadores_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_separadores_retroiluminadas);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_transformador_retroiluminadas" class="form-label">Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_transformador_retroiluminadas" name="precio_pvc_19mm_transformador_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_transformador_retroiluminadas);?>" required/>
              </div>  


              <div class="col-sm-2">
                <label for="precio_pvc_19mm_led_retroiluminadas" class="form-label">Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_led_retroiluminadas" name="precio_pvc_19mm_led_retroiluminadas" value="<?php echo esc_html($precio_pvc_19mm_led_retroiluminadas);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_diez_dias_retroalimentadas" class="form-label">10 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_diez_dias_retroalimentadas" name="precio_pvc_19mm_diez_dias_retroalimentadas" value="<?php echo esc_html($precio_pvc_19mm_diez_dias_retroalimentadas);?>" required/>
              </div>  

              <div class="col-sm-2">
                <label for="precio_pvc_19mm_quince_dias_retroalimentadas" class="form-label">15 días Laborales:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm_quince_dias_retroalimentadas" name="precio_pvc_19mm_quince_dias_retroalimentadas" value="<?php echo esc_html($precio_pvc_19mm_quince_dias_retroalimentadas);?>" required/>
              </div>  

            </div>

          </div>
        </div>
      </div>  

    </div>

    <p>&nbsp;</p>

    <center>
      <div class="col-sm-4 text-center">
        
        <div class="row">

          <button type="submit" class="btn btn-primary"> <i class="fas fa-magic"></i> Guardar todo</button>

         </div>

      </div>    
    </center>

</form>

</div>



