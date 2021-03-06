<div class="row">

  <div class="col-sm-2">

    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
      
      <label>Acabado</label>
        
        <div class="cc-selector">
          
          <!-- Aluminio -->
          <figure class="figure">

            <input onclick="" type="radio" name="acabadoAluminio" id="pintado" value="Pintado" checked onchange="deshabiltarBotonCart()">   
            <label class="drinkcard-cc pintado" for="pintado"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PINTADO</figcaption>

          </figure>

        </div>
        
      </div>
    </div>          

  </div> 
  
  <div class="col-sm-10">
    
    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
       <label>Opciones</label>
        <div class="cc-selector">
          <!-- el campo oculto esta en formaContorno-->

          <figure class="figure">

            <input onclick="coloresForm('coloresFormAluminio','true');separacionForm('separacionFormAluminio','false');colorLedForm('colorLedFormAluminio','false');//grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="sinLuz1" value="Sin Luz" checked onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc sinIluminar" for="sinLuz1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN ILUMINAR</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="coloresForm('coloresFormAluminio','true');separacionForm('separacionFormAluminio','true');colorLedForm('colorLedFormAluminio','true');//grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="retroiluminado1" value="Retroiluminado" onchange="deshabiltarBotonCart()">  
            <label class="drinkcard-cc retroiluminadas" for="retroiluminado1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">RETROILUMINADAS</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="coloresForm('coloresFormAluminio','true');separacionForm('separacionFormAluminio','false');colorLedForm('colorLedFormAluminio','flase');//grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="iluminacionFrontal1" value="Iluminaci??n Frontal" onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc iluminacionFrontal" for="iluminacionFrontal1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">ILUMINADAS FRONTALMENTE</figcaption>

          </figure>

        </div>

      </div>
    </div>              

  </div>  

  <div id="colorLedFormAluminio" class="col-sm-4">
    
    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
       <label>Color de Led</label>
        <div class="cc-selector">
          
          <figure class="figure">

            <input onclick="" type="radio" name="colorLedAluminio" id="blancoFrioAluminio" value="Blanco Fr??o" checked onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc retroiluminadas" for="blancoFrioAluminio"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO FR??O</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="" type="radio" name="colorLedAluminio" id="blancoCalidoAluminio" value="Blanco C??lido" onchange="deshabiltarBotonCart()">  
            <label class="drinkcard-cc retroiluminadas" for="blancoCalidoAluminio"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">BLANCO C??LIDO</figcaption>

          </figure>

        </div>

      </div>
    </div>              

  </div>  

  <div id="separacionFormAluminio" class="col-sm-8">

    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
        <label>Separaci??n de la Pared</label>             
        <div class="cc-selector">


          <figure class="figure">

            <input onclick="" type="radio" name="separacionAluminio" id="sinSeparacion1" value="Sin Separacion" checked onchange="deshabiltarBotonCart()" > 
            <label class="drinkcard-cc sinSeparacion" for="sinSeparacion1"></label> 

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN SEPARACI??N</figcaption>

          </figure>

          <figure class="figure">

            <input  onclick="" type="radio" name="separacionAluminio" id="a1cm1" value="A 1 cm" onchange="deshabiltarBotonCart()"> 
            <label class="drinkcard-cc a1cm" for="a1cm1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">A 1 cm</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="" type="radio" name="separacionAluminio" id="a3cm1" value="A 3 cm" onchange="deshabiltarBotonCart()"> 
            <label class="drinkcard-cc a3cm" for="a3cm1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">A 3 cm</figcaption>

          </figure>

        </div>

      </div>
    </div>

  </div>

  <div id="coloresFormAluminio">

    <div class="col-sm-12">

      <div class="card" style="border: 0;">

        <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Elige una paleta de colores</label>

            <div class="cc-selector">
              
              <!--
              <figure class="figure">
                
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#pantone" onclick="deshabiltarBotonCart()">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/pantone.png'?>" width="75" title="Pantone"/>
                </button>

              </figure>
              
              <figure class="figure">
                
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#ncs">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/ncs.png'?>" width="75" title="NCS"/>
                </button>

              </figure>
              -->

              <!-- RAL -->
              <figure class="figure">
                
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#ral">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/ral.png'?>" width="75" title="RAL"/>
                </button>

              </figure>                         

            </div>

        </div>

      </div>            

    </div>

  </div>

</div>