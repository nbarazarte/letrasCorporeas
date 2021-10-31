    <div class="row">

      <div class="col-sm-5">
        
        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
           <label>Sujeción</label>
            <div class="cc-selector">
              <!-- el campo oculto esta en formaContorno-->


              <figure class="figure">

                <input onclick="" type="radio" name="sujecionPvc" id="sinSujecion2" value="sinSujecion" checked onchange="deshabiltarBotonCart()">
                <label class="drinkcard-cc metacrilato" for="sinSujecion2"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">SIN SUJECIÓN</figcaption>

              </figure>


              <figure class="figure">

                <input onclick="" type="radio" name="sujecionPvc" id="letraAdhesiva2" value="letraAdhesiva" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc metacrilato" for="letraAdhesiva2"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">LETRA ADHESIVA</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="" type="radio" name="sujecionPvc" id="tornilleria1" value="tornilleria" onchange="deshabiltarBotonCart()">  
                <label class="drinkcard-cc metacrilato" for="tornilleria1"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 3px;">TORNILLERÍA</figcaption>

              </figure>              

            </div>

          </div>
        </div>                      

      </div>


      <div class="col-sm-5">

        <div class="card" style="border: 0;">
          <div class="card-body" style="background-color: #D3D3D3">
            
            <label>Separación de la Pared</label>             
            <div class="cc-selector">


              <figure class="figure">

                <input onclick="" type="radio" name="separacionPvc" id="sinSeparacion4" value="sinSeparacion" checked onchange="deshabiltarBotonCart()" > 
                <label class="drinkcard-cc rectangular" for="sinSeparacion4"></label> 

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 2px;">SIN SEPARACIÓN</figcaption>

              </figure>

              <figure class="figure">

                <input  onclick="" type="radio" name="separacionPvc" id="a1cm4" value="a1cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc redondo" for="a1cm4"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">A 1 cm</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="" type="radio" name="separacionPvc" id="a3cm4" value="a3cm" onchange="deshabiltarBotonCart()"> 
                <label class="drinkcard-cc personalizado" for="a3cm4"></label>

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

                <input onclick="coloresForm('coloresFormPvc','false')" type="radio" name="acabadoPvc" id="naturalBlanco2" value="naturalBlanco" checked onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="naturalBlanco2"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">NATURAL BLANCO</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="coloresForm('coloresFormPvc','false')" type="radio" name="acabadoPvc" id="negroMate2" value="negroMate" onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="negroMate2"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">NEGRO MATE</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="coloresForm('coloresFormPvc','true')" type="radio" name="acabadoPvc" id="pintadoMate2" value="pintadoMate"  onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="pintadoMate2"></label>

                <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">PINTADO MATE</figcaption>

              </figure>

              <figure class="figure">

                <input onclick="coloresForm('coloresFormPvc','true')" type="radio" name="acabadoPvc" id="pintadoBrillo2" value="pintadoBrillo" onchange="deshabiltarBotonCart()">   
                <label class="drinkcard-cc metacrilato" for="pintadoBrillo2"></label>

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
              
              <label>Colores</label>

              <div class="cc-selector">
                <center>

                <figure class="figure">

                  <input type="radio" name="colores" value="amarillo" id="amarilloColor2" checked onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores amarilloColor" for="amarilloColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMARILLO</figcaption>

                </figure>                

                <figure class="figure">

                  <input  type="radio" name="colores" value="rojo" id="rojoColor2"  onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores rojoColor" for="rojoColor2"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROJO</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="durazno" id="duraznoColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores duraznoColor" for="duraznoColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">DURAZNO</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="ambar" id="ambarColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores ambarColor" for="ambarColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AMBAR</figcaption>

                </figure>              

                <figure class="figure">

                  <input type="radio" name="colores" value="limon" id="limonColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores limonColor" for="limonColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">LIMÓN</figcaption>

                </figure>
            
               <figure class="figure">

                  <input  type="radio" name="colores" value="verde" id="verdeColor2" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores verdeColor" for="verdeColor2"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">VERDE</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="azul" id="azulColor2" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores azulColor" for="azulColor2"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">AZUL</figcaption>

                </figure>


                <figure class="figure">

                  <input  type="radio" name="colores" value="morado" id="moradoColor2" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores moradoColor" for="moradoColor2"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">MORADO</figcaption>

                </figure>


                <figure class="figure">

                  <input  type="radio" name="colores" value="turquesa" id="turquesaColor2" onchange="deshabiltarBotonCart()">
                  <label class="drinkcard-cc-colores turquesaColor" for="turquesaColor2"></label>

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">TURQUESA</figcaption>

                </figure>

                <figure class="figure">

                  <input  type="radio" name="colores" value="rosa" id="rosaColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores rosaColor" for="rosaColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">ROSA</figcaption>

                </figure>

                <figure class="figure">

                  <input type="radio" name="colores" value="blanco" id="blancoColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores blancoColor" for="blancoColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">BLANCO</figcaption>

                </figure>      
          
                <figure class="figure">

                  <input type="radio" name="colores" value="calido" id="calidoColor2" onchange="deshabiltarBotonCart()"> 
                  <label class="drinkcard-cc-colores calidoColor" for="calidoColor2"></label> 

                  <figcaption class="figure-caption text-center" style="font-size: 8px; color: #000000; position: relative; top: -21px; left: 5px;">CÁLIDO</figcaption>

                </figure>

                </center>

              </div>
            </div>
          </div>            

        </div>            
      </div>      

    </div>