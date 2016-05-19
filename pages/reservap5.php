<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM promociones");
?>
 <div class="well" id="cuerpo">
 <div class="container" style="width:100%">
          <h1 align="center" style="margin-left:-20%;margin-bottom:2%"> Reserva</h1>

          <div class="container" style="float:left;margin-top:-2%;width:80%;min-width:290px">
            <h3 align="center"><strong> Introduce los datos de pago</strong> paso(5/5)</h3>
            <div class="container" style="padding-right:0px;padding-left:0px;margin-bottom:2%;min-width:200px;width:100%">
                    <form align="center" style="margin-left:4%">
                    <br><br>
                    <strong style="font-size:19px">Método de pago:</strong>
                    <select style="margin-right: 4%">
                      <option value="1" selected>Tarjeta</option>
                      <option value="2">Efectivo</option>
                    </select><br><br>
                    <strong style="font-size:19px">Titular de la tarjeta:</strong> <input type="text" name="contrasena" style="margin-top:4%;margin-right:4%" >
                                        <strong style="font-size:19px">Tipo de tarjeta:</strong>
                    <select style="margin-right: 4%">
                      <option value="1" selected>MasterCard</option>
                      <option value="2">VISA</option>
                      <option value="3">Maestro</option>
                    </select>
                    <strong style="font-size:19px">Número de tarjeta:</strong> <input type="text" name="contrasena" style="margin-top:4%;margin-right:4%" ><br
                    ><br><br><br>
                    <strong style="margin-bottom:-60%;font-size:19px">Caducidad:</strong><br>
                      <select style="margin-right: 4%" value="mes">
                      <option value="1" >1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                      <select style="margin-right: 4%" value="año">
                      <option value="1" >2017</option>
                      <option value="2">2018</option>
                      <option value="3">2019</option>
                    </select>
                    <input type="text" name="contrasena" style="margin-top:4%;margin-right:4%" >C.V.C
                </form>
            </div>
          <a href="index.php?contenido=resep4">
          <input type="submit" value="Atras" id="botonp2" style="float:left;"></a>
          <a href="index.php?contenido=reserva">
          <input type="submit" value="Finalizar" id="botonp2" style="float:right;"></a>
          
          </div>

          <div class="container" id="recordreserva" style="font-size:15px">
              <h4 align="center" ><strong>Contenido de la reserva</strong></h4>
              <p id="parrafo2"><Strong>Fecha:</Strong> 16/06/2016-19/06/2016</p>
              <p id="parrafo2"><Strong>Nº personas:</Strong></p>
              <p id="parrafo2">Adultos:2 Niños:0</p>
              <p id="parrafo2">3º Edad:2 Accesible:0</p>
              <hr style="border:1px solid black">
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Habitación 1</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 234€</p>
              </div>
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Habitación 2</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 192€</p>
              </div>              
              <hr style="border:1px solid black">
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Promoción 1</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 234€</p>
              </div>
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Promoción 2</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 192€</p>
              </div> 
               <hr style="border:1px solid black"> 
          </div>

</div>
</div>