    <div class="row">

      <div class="col-sm-4">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Acabado</label>
            
            <div class="cc-selector">
              
              <!-- Laton -->
              <figure class="figure">

                <input onclick="" type="radio" name="acabadoLaton" id="satinado3" value="Satinado" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc satinado" for="satinado3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SATINADO</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="" type="radio" name="acabadoLaton" id="pulido3" value="Pulido" onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc pulido" for="pulido3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PULIDO</figcaption>

              </figure>              

            </div>
            
          </div>
        </div>          

      </div> 

      <div class="col-sm-8">
        
        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
           <label>Opciones</label>
            <div class="cc-selector">
              <!-- el campo oculto esta en formaContorno-->


              <figure class="figure">

                <input onclick="separacionForm('separacionFormLaton','false')" type="radio" name="opcionesLaton" id="sinLuz3" value="Sin Luz" checked onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc sinIluminar" for="sinLuz3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN ILUMINAR</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="separacionForm('separacionFormLaton','true')" type="radio" name="opcionesLaton" id="retroiluminado3" value="Retroiluminado" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc retroiluminadas" for="retroiluminado3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">RETROILUMINADO</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="separacionForm('separacionFormLaton','false')" type="radio" name="opcionesLaton" id="iluminacionFrontal3" value="Iluminación Frontal" onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc iluminacionFrontal" for="iluminacionFrontal3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">ILUMINACIÓN FRONTAL</figcaption>

              </figure>

            </div>

          </div>
        </div>                      

      </div>  

      <div id="separacionFormLaton" class="col-sm-12">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Separación de la Pared (Sin Pintar<i class="fas fa-paint-roller"></i>)</label>             
            <div class="cc-selector">


              <figure class="figure">

                <input onclick="" type="radio" name="separacionLaton" id="sinSeparacion3" value="Sin Separacion" checked onchange="deshabiltarBotonCart()" > 
                <label class="drinkcard-cc sinSeparacion" for="sinSeparacion3"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN SEPARACIÓN</figcaption>

              </figure>

              <figure class="figure">

                <input  onclick="" type="radio" name="separacionLaton" id="a1cm3" value="A 1 cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc a1cm" for="a1cm3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">A 1 cm</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="" type="radio" name="separacionLaton" id="a3cm3" value="A 3 cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc a3cm" for="a3cm3"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">A 3 cm</figcaption>

              </figure>

            </div>

          </div>
        </div>

      </div>
    </div>