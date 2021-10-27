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
                <label for="iva" class="form-label">% Valor:</label>
                <input type="number" class="form-control" id="iva" name="iva" value="<?php echo esc_html($iva);?>" required/>
                
              </div>

          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Costo Transformador</h5>

              <div class="mb-3">
                <label for="costoTransformador" class="form-label">Valor:</label>
                <input type="number" class="form-control" id="costoTransformador" name="costoTransformador" value="<?php echo esc_html($costoTransformador);?>" required/>
                
              </div>

          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Controlador de luz</h5>

              <div class="mb-3">
                <label for="cn_precio_dimmer" class="form-label">Dimmer:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_dimmer" name="cn_precio_dimmer" value="<?php echo esc_html($cn_precio_dimmer);?>" required/>
                
              </div>

          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Precio metro de Neón</h5>

              <div class="mb-3">
                <label for="cn_precio_metro_neon" class="form-label">Valor:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_metro_neon" name="cn_precio_metro_neon" value="<?php echo esc_html($cn_precio_metro_neon);?>" required/>
                
              </div>

          </div>
        </div>
      </div>      

    </div>  

    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Trasera del Neón</h5>

              <div class="mb-3">
                <label for="cn_precio_metacrilato" class="form-label">Metacrilato:</label>
                <input type="number" step=".0001" class="form-control" id="cn_precio_metacrilato" name="cn_precio_metacrilato" value="<?php echo esc_html($cn_precio_metacrilato);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_dm" class="form-label">DM:</label>
                <input type="number" step=".0001" class="form-control" id="cn_precio_dm" name="cn_precio_dm" value="<?php echo esc_html($cn_precio_dm);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_pvc" class="form-label">PVC:</label>
                <input type="number" step=".0001" class="form-control" id="cn_precio_pvc" name="cn_precio_pvc" value="<?php echo esc_html($cn_precio_pvc);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_contraenchapado" class="form-label">Contrachapado:</label>
                <input type="number" step=".0001" class="form-control" id="cn_precio_contraenchapado" name="cn_precio_contraenchapado" value="<?php echo esc_html($cn_precio_contraenchapado);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_maderadepino" class="form-label">Madera de pino:</label>
                <input type="number" step=".0001" class="form-control" id="cn_precio_maderadepino" name="cn_precio_maderadepino" value="<?php echo esc_html($cn_precio_maderadepino);?>" required/>
                
              </div>                                 

          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Sujeción del Neón</h5>

              <div class="mb-3">
                <label for="cn_precio_ancladoalapared" class="form-label">Anclado a la pared:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_ancladoalapared" name="cn_precio_ancladoalapared" value="<?php echo esc_html($cn_precio_ancladoalapared);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_colgadoaltecho" class="form-label">Colgado al techo:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_colgadoaltecho" name="cn_precio_colgadoaltecho" value="<?php echo esc_html($cn_precio_colgadoaltecho);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_colgadocomouncuadro" class="form-label">Colgado como un cuadro:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_colgadocomouncuadro" name="cn_precio_colgadocomouncuadro" value="<?php echo esc_html($cn_precio_colgadocomouncuadro);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_sinsujecion" class="form-label">Sin sujeción:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_sinsujecion" name="cn_precio_sinsujecion" value="<?php echo esc_html($cn_precio_sinsujecion);?>" required/>
                
              </div>                                 

          </div>
        </div>
      </div>  

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

            <h5 class="card-title">Tiempos de entrega</h5>

              <div class="mb-3">
                <label for="cn_precio_sietediaslaborales" class="form-label">7 días laborales:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_sietediaslaborales" name="cn_precio_sietediaslaborales" value="<?php echo esc_html($cn_precio_sietediaslaborales);?>" required/>
                
              </div>

              <div class="mb-3">
                <label for="cn_precio_4872" class="form-label">48 a 72 horas:</label>
                <input type="number" step=".01" class="form-control" id="cn_precio_4872" name="cn_precio_4872" value="<?php echo esc_html($cn_precio_4872);?>" required/>

              </div>

          </div>
        </div>
      </div>  

    </div>

  <button type="submit" class="btn btn-primary"> <i class="fas fa-magic"></i> Guardar todo</button>

</form>

</div>