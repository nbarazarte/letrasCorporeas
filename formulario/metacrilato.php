    <div class="row">

      <div class="col-sm-2">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Acabado</label>
            
            <div class="cc-selector">
              
              <!-- METACRILATO -->
              
              <figure class="figure">

                <input onclick="" type="radio" name="acabadoMetacrilato" id="sinPintar" value="Sin Pintar" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc pintado" for="sinPintar"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN PINTAR</figcaption>

              </figure>                                                                           

            </div>
            
          </div>
        </div>          

      </div>


      <div class="col-sm-6">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
          
          <label>Colores</label>
            
            <div class="cc-selector">
              
              <!-- METACRILATO -->            

              <figure class="figure">

                <input onclick="coloresForm2('coloresFormMetacrilato','true')" type="radio" name="colorMetacrilato" id="color360" value="Color 360" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc pintado" for="color360"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">COLOR 360</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="coloresForm2('coloresFormMetacrilato','false')" type="radio" name="colorMetacrilato" id="blancoOpal" value="Blanco Opal" onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc pintado" for="blancoOpal"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO OPAL</figcaption>

              </figure>

                                                                               
            </div>
            
          </div>
        </div>          

      </div>



      <div id="coloresFormMetacrilato">
        <div class="col-sm-12">

          <div class="card" style="border: 0;">
            <div class="card-body" style="background-color: #D3D3D3">
              
              <label>Elige el Color</label>

              <div class="cc-selector">
                <center>

                <figure class="figure">

                  <input type="radio" name="colores" value="amarillo" id="amarilloColor" checked onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores amarilloColorMetacrilato" for="amarilloColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO</figcaption>

                </figure>                

                <figure class="figure">

                  <input type="radio" name="colores" value="amarillo mostaza" id="amarilloMostazaColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores amarilloMostazaColorMetacrilato" for="amarilloMostazaColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO MOSTAZA</figcaption>

                </figure> 

                <figure class="figure">

                  <input  type="radio" name="colores" value="rojo" id="rojoColor"  onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores rojoColorMetacrilato" for="rojoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROJO</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="verde manzana" id="verdeManzanaColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores verdeManzanaColorMetacrilato" for="verdeManzanaColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE MANZANA</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="verde navidad" id="verdeNavidadColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores verdeNavidadColorMetacrilato" for="verdeNavidadColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE NAVIDAD</figcaption>

                </figure>              
              
                <figure class="figure">

                  <input type="radio" name="colores" value="azul celeste" id="azulCelesteColor" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores azulCelesteColorMetacrilato" for="azulCelesteColor"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL CELESTE</figcaption>

                </figure>
            
               <figure class="figure">

                  <input  type="radio" name="colores" value="azul electrico" id="azulElectricoColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores azulElectricoColorMetacrilato" for="azulElectricoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL ELECTRICO</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="azul marino" id="azulMarinoColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores azulMarinoColorMetacrilato" for="azulMarinoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL MARINO</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="vinotinto" id="vinotintoColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores vinotintoColorMetacrilato" for="vinotintoColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VINOTINTO</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="naranja" id="naranjaColor" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores naranjaColorMetacrilato" for="naranjaColor"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">NARANJA</figcaption>

                </figure>

                </center>

              </div>
            </div>
          </div>            

        </div>         
      </div>
    </div>