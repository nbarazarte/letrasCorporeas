<!-- Bootstrap CSS -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/3be368b9d8.js" crossorigin="anonymous"></script>

<div class="col-12 text-center">

<br/>
<h5 class="card-title">Configuración de Letras Corporeas</h5>

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

            <h5 class="card-title">Tiempos de entrega</h5>

              <div class="mb-3">
                <label for="cn_precio_sietediaslaborales" class="form-label">10 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_sietediaslaboralesLetras" name="cn_precio_diezdiaslaboralesLetras" value="<?php echo esc_html($cn_precio_diezdiaslaboralesLetras);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_4872" class="form-label">15 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_quincediaslaboralesLetras" name="cn_precio_quincediaslaboralesLetras" value="<?php echo esc_html($cn_precio_quincediaslaboralesLetras);?>" required/>

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
            <h5 class="card-title" style="text-align: left;">Sin Iluminar</h5>
          </button>
        </h2>
        <div id="collapseA1" class="accordion-collapse collapse show" aria-labelledby="headingA1" data-bs-parent="#accordionExample1">
          <div class="accordion-body">
            
            <h6 class="card-title">Aluminio:</h6>

            <div class="row">

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Aluminio:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio" name="precio_aluminio" value="<?php echo esc_html($precio_aluminio);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_mano_de_obra" name="precio_aluminio_mano_de_obra" value="<?php echo esc_html($precio_aluminio_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio de la Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_pintura" name="precio_aluminio_pintura" value="<?php echo esc_html($precio_aluminio_pintura);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_corte_cnc" name="precio_aluminio_corte_cnc" value="<?php echo esc_html($precio_aluminio_corte_cnc);?>" required/>
              </div>                  

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA2" aria-expanded="false" aria-controls="collapseA2">
            <h5 class="card-title" style="text-align: left;">Retroiluminadas</h5>
          </button>
        </h2>
        <div id="collapseA2" class="accordion-collapse collapse" aria-labelledby="headingA2" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title">Aluminio:</h6>

            <div class="row">

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Aluminio:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado" name="precio_aluminio_retroiluminado" value="<?php echo esc_html($precio_aluminio_retroiluminado);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_mano_de_obra" name="precio_aluminio_retroiluminado_mano_de_obra" value="<?php echo esc_html($precio_aluminio_retroiluminado_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio de la Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_pintura" name="precio_aluminio_retroiluminado_pintura" value="<?php echo esc_html($precio_aluminio_retroiluminado_pintura);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Metacrilato 10mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_metacrilato10mm" name="precio_aluminio_retroiluminado_metacrilato10mm" value="<?php echo esc_html($precio_aluminio_retroiluminado_metacrilato10mm);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_led" name="precio_aluminio_retroiluminado_led" value="<?php echo esc_html($precio_aluminio_retroiluminado_led);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_transformador" name="precio_aluminio_retroiluminado_transformador" value="<?php echo esc_html($precio_aluminio_retroiluminado_transformador);?>" required/>
              </div>                                                     

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_retroiluminado_corte_cnc" name="precio_aluminio_retroiluminado_corte_cnc" value="<?php echo esc_html($precio_aluminio_retroiluminado_corte_cnc);?>" required/>
              </div>                  

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA3" aria-expanded="false" aria-controls="collapseA3">
            <h5 class="card-title" style="text-align: left;">Iluminadas Frontalmente</h5>
          </button>
        </h2>
        <div id="collapseA3" class="accordion-collapse collapse" aria-labelledby="headingA3" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title">Aluminio:</h6>

            <div class="row">

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Alumino:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal" name="precio_aluminio_iluminado_frontal" value="<?php echo esc_html($precio_aluminio_iluminado_frontal);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_mano_de_obra" name="precio_aluminio_iluminado_frontal_mano_de_obra" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio de la Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_pintura" name="precio_aluminio_iluminado_frontal_pintura" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_pintura);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Metacrilato 3mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_metacrilato3mm" name="precio_aluminio_iluminado_frontal_metacrilato3mm" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_metacrilato3mm);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Junquillo:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_junquillo" name="precio_aluminio_iluminado_frontal_junquillo" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_junquillo);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_led" name="precio_aluminio_iluminado_frontal_led" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_led);?>" required/>
              </div>               

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_transformador" name="precio_aluminio_iluminado_frontal_transformador" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_transformador);?>" required/>
              </div>                                                     

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_aluminio_iluminado_frontal_corte_cnc" name="precio_aluminio_iluminado_frontal_corte_cnc" value="<?php echo esc_html($precio_aluminio_iluminado_frontal_corte_cnc);?>" required/>
              </div>                  

            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA4">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA4" aria-expanded="false" aria-controls="collapseA4">
            <h5 class="card-title" style="text-align: left;">Letras Corporeas PVC</h5>
          </button>
        </h2>
        <div id="collapseA4" class="accordion-collapse collapse" aria-labelledby="headingA4" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title">PVC:</h6>

            <div class="row">

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio PVC 5mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_5mm" name="precio_pvc_5mm" value="<?php echo esc_html($precio_pvc_5mm);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio PVC 10mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_10mm" name="precio_pvc_10mm" value="<?php echo esc_html($precio_pvc_10mm);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio PVC 19mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_19mm" name="precio_pvc_19mm" value="<?php echo esc_html($precio_pvc_19mm);?>" required/>
              </div>                              

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_mano_de_obra" name="precio_pvc_mano_de_obra" value="<?php echo esc_html($precio_pvc_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio de la Pintura:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_pintura" name="precio_pvc_pintura" value="<?php echo esc_html($precio_pvc_pintura);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_led" name="precio_pvc_led" value="<?php echo esc_html($precio_pvc_led);?>" required/>
              </div>             

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_transformador" name="precio_pvc_transformador" value="<?php echo esc_html($precio_pvc_transformador);?>" required/>
              </div>                                                     

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_pvc_corte_cnc" name="precio_pvc_corte_cnc" value="<?php echo esc_html($precio_pvc_corte_cnc);?>" required/>
              </div>                  

            </div>

          </div>
        </div>
      </div>    

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingA5">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA5" aria-expanded="false" aria-controls="collapseA5">
            <h5 class="card-title" style="text-align: left;">Letras Corporeas de Metacrilato Huecas</h5>
          </button>
        </h2>
        <div id="collapseA5" class="accordion-collapse collapse" aria-labelledby="headingA5" data-bs-parent="#accordionExample1">
          <div class="accordion-body">

            <h6 class="card-title">Metacrilato Huecas:</h6>

            <div class="row">                             

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Mano de Obra:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_huecas_mano_de_obra" name="precio_metacrilato_huecas_mano_de_obra" value="<?php echo esc_html($precio_metacrilato_huecas_mano_de_obra);?>" required/>
              </div>

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Metacrilato 3mm:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_huecas_metacrilato3mm" name="precio_metacrilato_huecas_metacrilato3mm" value="<?php echo esc_html($precio_metacrilato_huecas_metacrilato3mm);?>" required/>
              </div>              

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Iluminación Led:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_huecas_led" name="precio_metacrilato_huecas_led" value="<?php echo esc_html($precio_metacrilato_huecas_led);?>" required/>
              </div>             

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio Transformador:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_huecas_transformador" name="precio_metacrilato_huecas_transformador" value="<?php echo esc_html($precio_metacrilato_huecas_transformador);?>" required/>
              </div>                                                     

              <div class="col">
                <label for="cn_pagina" class="form-label">Precio del Corte CNC:</label>
                <input type="number" step=".01" class="form-control" id="precio_metacrilato_huecas_corte_cnc" name="precio_metacrilato_huecas_corte_cnc" value="<?php echo esc_html($precio_metacrilato_huecas_corte_cnc);?>" required/>
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