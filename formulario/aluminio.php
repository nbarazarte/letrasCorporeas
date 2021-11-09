    <div class="row">

      <div class="col-sm-2">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Acabado</label>
            
            <div class="cc-selector">
              
              <!-- Aluminio -->
              <figure class="figure">

                <input onclick="" type="radio" name="acabadoAluminio" id="pintado" value="Pintado" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="pintado"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PINTADO</figcaption>

              </figure>

            </div>
            
          </div>
        </div>          

      </div> 

      <div class="col-sm-10">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Separación de la Pared</label>             
            <div class="cc-selector">


              <figure class="figure">

                <input onclick="" type="radio" name="separacionAluminio" id="sinSeparacion1" value="Sin Separacion" checked onchange="deshabiltarBotonCart()" > 
                <label class="drinkcard-cc rectangular" for="sinSeparacion1"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN SEPARACIÓN</figcaption>

              </figure>

              <figure class="figure">

                <input  onclick="" type="radio" name="separacionAluminio" id="a1cm1" value="A 1 cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc redondo" for="a1cm1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">A 1 cm</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="" type="radio" name="separacionAluminio" id="a3cm1" value="A 3 cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc personalizado" for="a3cm1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">A 3 cm</figcaption>

              </figure>

            </div>

          </div>
        </div>

      </div>

      <div class="col-sm-12">
        
        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
           <label>Opciones</label>
            <div class="cc-selector">
              <!-- el campo oculto esta en formaContorno-->


              <figure class="figure">

                <input onclick="coloresForm('coloresFormAluminio','true');grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="sinLuz1" value="Sin Luz" checked onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc metacrilato" for="sinLuz1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN ILUMINAR</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="coloresForm('coloresFormAluminio','false');grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="retroiluminado1" value="Retroiluminado" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc metacrilato" for="retroiluminado1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">RETROILUMINADO</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="coloresForm('coloresFormAluminio','false');grosorForm('opcionesAluminio','grosorAluminio')" type="radio" name="opcionesAluminio" id="iluminacionFrontal1" value="Iluminación Frontal" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc metacrilato" for="iluminacionFrontal1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">ILUMINACIÓN FRONTAL</figcaption>

              </figure>




            </div>

          </div>
        </div>              

      </div>  


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Pantone</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background-color: #D3D3D3">
                <?php include('pantone.php')?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>        
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
                  
                  <!-- Pantone -->
                  <figure class="figure">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="deshabiltarBotonCart()">
                      PANTONE
                    </button>

                  </figure>

                  <!-- NCS -->
                  <figure class="figure">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      NCS
                    </button>

                  </figure>

                  <!-- RAL -->
                  <figure class="figure">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      RAL
                    </button>

                  </figure>                            

                </div>

                <input type="hidden" id="colorPaleta" name="colorPaleta" value="Pantone Yellow C" readonly="yes">
                <div id="colorSeleccionado"></div>

            <!--
              <div class="cc-selector">
                <center>

                <figure class="figure">

                  <input type="radio" name="colores" value="amarillo" id="amarilloColor" checked onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores amarilloColor" for="amarilloColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO</figcaption>

                </figure>                

                <figure class="figure">

                  <input  type="radio" name="colores" value="rojo" id="rojoColor"  onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores rojoColor" for="rojoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROJO</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="durazno" id="duraznoColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores duraznoColor" for="duraznoColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">DURAZNO</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="ambar" id="ambarColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores ambarColor" for="ambarColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMBAR</figcaption>

                </figure>              

  				      <figure class="figure">

                  <input type="radio" name="colores" value="limon" id="limonColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores limonColor" for="limonColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">LIMÓN</figcaption>

                </figure>
       		  
               <figure class="figure">

                  <input  type="radio" name="colores" value="verde" id="verdeColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores verdeColor" for="verdeColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="azul" id="azulColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores azulColor" for="azulColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL</figcaption>

                </figure>


                <figure class="figure">

                  <input  type="radio" name="colores" value="morado" id="moradoColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores moradoColor" for="moradoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">MORADO</figcaption>

                </figure>


                <figure class="figure">

                  <input  type="radio" name="colores" value="turquesa" id="turquesaColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores turquesaColor" for="turquesaColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">TURQUESA</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="rosa" id="rosaColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores rosaColor" for="rosaColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROSA</figcaption>

                </figure>

  			        <figure class="figure">

                  <input type="radio" name="colores" value="blanco" id="blancoColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores blancoColor" for="blancoColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO</figcaption>

                </figure>			 
  			  
                <figure class="figure">

                  <input type="radio" name="colores" value="calido" id="calidoColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores calidoColor" for="calidoColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">CÁLIDO</figcaption>

                </figure>

                </center>

              </div>

            -->
            </div>
          </div>            

        </div>            
      </div>

    </div>