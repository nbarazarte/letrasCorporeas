<div class="row">

  <div class="col-sm-5">
    
    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
       <label>Sujeción</label>
        <div class="cc-selector">
          <!-- el campo oculto esta en formaContorno-->


          <figure class="figure">

            <input onclick="" type="radio" name="sujecionPvc" id="sinSujecion2" value="Sin Sujeción" checked onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc sinSujecion" for="sinSujecion2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN SUJECIÓN</figcaption>

          </figure>


          <figure class="figure">

            <input onclick="" type="radio" name="sujecionPvc" id="letraAdhesiva2" value="Letra Adhesiva" onchange="deshabiltarBotonCart()">  
            <label class="drinkcard-cc cinta" for="letraAdhesiva2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">CINTA DOBLE CARA</figcaption>

          </figure>

          <figure id="tornilleriaPVC" class="figure">

            <input onclick="" type="radio" name="sujecionPvc" id="tornilleria1" value="Tornillería" onchange="deshabiltarBotonCart()">  
            <label class="drinkcard-cc tornilleria" for="tornilleria1"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">TORNILLERÍA</figcaption>

          </figure>              

        </div>

      </div>
    </div>                      

  </div>

  <div id="opcionesFormPVC" class="col-sm-5">
    
    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
       <label>Opciones</label>
        <div class="cc-selector">
          <!-- el campo oculto esta en formaContorno-->

          <figure class="figure">

            <input onclick="" type="radio" name="opcionesPVC" id="sinLuz4" value="Sin Luz" checked onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc sinIluminar" for="sinLuz4"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN ILUMINAR</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="" type="radio" name="opcionesPVC" id="retroiluminado4" value="Retroiluminado" onchange="deshabiltarBotonCart()">  
            <label class="drinkcard-cc retroiluminadas" for="retroiluminado4"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">RETROILUMINADO</figcaption>

          </figure>

        <!--
          <figure class="figure">

            <input onclick="" type="radio" name="opcionesPVC" id="iluminacionFrontal4" value="Iluminación Frontal" onchange="deshabiltarBotonCart()">
            <label class="drinkcard-cc iluminacionFrontal" for="iluminacionFrontal4"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">ILUMINACIÓN FRONTAL</figcaption>

          </figure>
        -->

        </div>

      </div>
    </div>                      

  </div>  

  <div id="separacionFormPVC" class="col-sm-5">

    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
        
        <label>Separación de la Pared</label>             
        <div class="cc-selector">


          <figure class="figure">

            <input onclick="" type="radio" name="separacionPvc" id="sinSeparacion4" value="Sin Separación" checked onchange="deshabiltarBotonCart()" > 
            <label class="drinkcard-cc sinSeparacion" for="sinSeparacion4"></label> 

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN SEPARACIÓN</figcaption>

          </figure>

          <figure class="figure">

            <input  onclick="" type="radio" name="separacionPvc" id="a1cm4" value="A 1 cm" onchange="deshabiltarBotonCart()"> 
            <label class="drinkcard-cc a1cm" for="a1cm4"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">A 1 cm</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="" type="radio" name="separacionPvc" id="a3cm4" value="A 3 cm" onchange="deshabiltarBotonCart()"> 
            <label class="drinkcard-cc a3cm" for="a3cm4"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">A 3 cm</figcaption>

          </figure>

        </div>

      </div>
    </div>

  </div>

  <div class="col-sm-12">

    <div class="card" style="border: 0;">
      <div class="card-body" style="background-color: #D3D3D3">
      
      <label>Acabado</label>
        
        <div class="cc-selector">
          
          <!-- PVC -->
          <figure class="figure">

            <input onclick="coloresForm('coloresFormPvc','false')" type="radio" name="acabadoPvc" id="naturalBlanco2" value="Natural Blanco" checked onchange="deshabiltarBotonCart()">   
            <label class="drinkcard-cc naturalBlanca" for="naturalBlanco2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">NATURAL BLANCO</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="coloresForm('coloresFormPvc','false')" type="radio" name="acabadoPvc" id="negroMate2" value="Negro Mate" onchange="deshabiltarBotonCart()">   
            <label class="drinkcard-cc negroMate" for="negroMate2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">NEGRO MATE</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="coloresForm('coloresFormPvc','true')" type="radio" name="acabadoPvc" id="pintadoMate2" value="Pintado Mate"  onchange="deshabiltarBotonCart()">   
            <label class="drinkcard-cc pintadoMate" for="pintadoMate2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PINTADO MATE</figcaption>

          </figure>

          <figure class="figure">

            <input onclick="coloresForm('coloresFormPvc','true')" type="radio" name="acabadoPvc" id="pintadoBrillo2" value="Pintado Brillo" onchange="deshabiltarBotonCart()">   
            <label class="drinkcard-cc pintadBrillo" for="pintadoBrillo2"></label>

            <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PINTADO BRILLO</figcaption>

          </figure>                                                                                   

        </div>
        
      </div>
    </div>          

  </div>

  <div id="coloresFormPvc">
    <div class="col-sm-12">

      <div class="card" style="border: 0;">
        <div class="card-body" style="background-color: #D3D3D3">
          

          <label>Elige una paleta de colores</label>

            <div class="cc-selector">
              
              <!-- Pantone -->
              <!--
              <figure class="figure">

                
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#pantone" onclick="deshabiltarBotonCart()">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/pantone.png'?>" width="75" title="Pantone"/>
                </button>

              </figure>
            -->

              <!-- NCS -->

             <!-- 
              <figure class="figure">

                
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#ncs">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/ncs.png'?>" width="75" title="NCS"/>
                </button>

              </figure>
            -->

              <!-- RAL -->
              <figure class="figure">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#ral">
                  <img src="<?php echo plugin_dir_url(__FILE__).'../imagenes/nuevosColores/ral.png'?>" width="75" title="RAL"/>
                </button>

              </figure>                            

            </div>

      
          <!--
          <label>Colores</label>

          <div class="cc-selector">
            <center>

            <figure class="figure">

              <input type="radio" name="coloresPvc" value="amarillo" id="amarilloColor2" checked onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores amarilloColor" for="amarilloColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO</figcaption>

            </figure>                

            <figure class="figure">

              <input  type="radio" name="coloresPvc" value="rojo" id="rojoColor2"  onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc-colores rojoColor" for="rojoColor2"></label>

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROJO</figcaption>

            </figure>

            <figure class="figure">

              <input type="radio" name="coloresPvc" value="durazno" id="duraznoColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores duraznoColor" for="duraznoColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">DURAZNO</figcaption>

            </figure>

            <figure class="figure">

              <input type="radio" name="coloresPvc" value="ambar" id="ambarColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores ambarColor" for="ambarColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMBAR</figcaption>

            </figure>              

            <figure class="figure">

              <input type="radio" name="coloresPvc" value="limon" id="limonColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores limonColor" for="limonColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">LIMÓN</figcaption>

            </figure>
        
           <figure class="figure">

              <input  type="radio" name="coloresPvc" value="verde" id="verdeColor2" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc-colores verdeColor" for="verdeColor2"></label>

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE</figcaption>

            </figure>

            <figure class="figure">

              <input  type="radio" name="coloresPvc" value="azul" id="azulColor2" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc-colores azulColor" for="azulColor2"></label>

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL</figcaption>

            </figure>


            <figure class="figure">

              <input  type="radio" name="coloresPvc" value="morado" id="moradoColor2" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc-colores moradoColor" for="moradoColor2"></label>

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">MORADO</figcaption>

            </figure>


            <figure class="figure">

              <input  type="radio" name="coloresPvc" value="turquesa" id="turquesaColor2" onchange="deshabiltarBotonCart()">
              <label class="drinkcard-cc-colores turquesaColor" for="turquesaColor2"></label>

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">TURQUESA</figcaption>

            </figure>

            <figure class="figure">

              <input  type="radio" name="coloresPvc" value="rosa" id="rosaColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores rosaColor" for="rosaColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROSA</figcaption>

            </figure>

            <figure class="figure">

              <input type="radio" name="coloresPvc" value="blanco" id="blancoColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores blancoColor" for="blancoColor2"></label> 

              <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO</figcaption>

            </figure>      
      
            <figure class="figure">

              <input type="radio" name="coloresPvc" value="calido" id="calidoColor2" onchange="deshabiltarBotonCart()"> 
              <label class="drinkcard-cc-colores calidoColor" for="calidoColor2"></label> 

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