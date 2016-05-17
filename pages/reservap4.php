<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM promociones");
?>
 <div class="well" id="cuerpo">
 <div class="container" style="width:100%">
          <h1 align="center" style="margin-bottom:2%"> Reserva</h1>

          <div class="container" style="float:left;margin-top:-2%;width:80%;min-width:290px">
            <h3 align="center"><strong> Introduce tus datos personales </strong>paso(4/4)</h3>
            <div class="container" style="padding-right:0px;padding-left:0px;margin-bottom:2%;min-width:200px;width:100%">
                    <form style="margin-left:4%">
                    <br><br>Nombre:<input type="text" name="usuario" style="margin-right:4%" > 
                    Apellidos:<input type="text" name="contrasena" style="margin-right:4%" >
                    Nacionalidad:
                    <select style="margin-right: 4%">
                      <option value="1" selected>España</option>
                      <option value="2">Francia</option>
                      <option value="3">Inglaterra</option>
                      <option value="4">Japon</option>
                      <option value="5">China</option>
                      <option value="6">EEUU</option>
                    </select>
                    Teléfono:<input type="text" name="contrasena" style="margin-right:4%" ><br>
                    Email:<input type="text" name="contrasena" style="margin-top:4%;margin-right:4%" >
                    Verif. email:<input type="text" name="contrasena" style="margin-top:4%;margin-right:4%" >
                </form>
                    <h3 align="center" style="margin-top:4%"> O si lo prefiere</h3>
                    <p align="center" style="font-size:17px">Si ya tiene cuenta en nuestro sitio web puede acceder a su cuenta desde la zona de logeo.</p>  
                    <p align="center" style="font-size:17px">Puede usted registrarse en nuestro sitio web desde <a>aqui</a></p>
            </div>
          <form>
          <input type="submit" value="Atras" id="botonp2" style="float:left;"> 
          <input type="submit" value="Siguiente" id="botonp2" style="float:right;"> 
          </form>
          </div>

          <div class="container" style="float:left;border-left:1px solid blue;width:20%;min-width:200px;margin-top:-2%;font-size:15px">
              <h4 align="center" ><strong>Contenido de la reserva</strong></h4>
              <p id="parrafo2"><Strong>Fecha:</Strong> 16/06/2016-19/06/2016</p>
              <p id="parrafo2"><Strong>Nº personas:</Strong></p>
              <p id="parrafo2">Adultos:2 Niños:0</p>
              <p id="parrafo2">3º Edad:2 Accesible:0</p>
              <hr style="border:1px solid black">
              <div class="container" style="border:1px solid black;margin-bottom:2%;width:100%">
                <p align="center" id="parrafo2"><strong> Habitación 1</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 234€</p>
              </div>
              <div class="container" style="border:1px solid black;margin-bottom:2%;width:100%">
                <p align="center" id="parrafo2"><strong> Habitación 2</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 192€</p>
              </div>              
              <hr style="border:1px solid black">
              <div class="container" style="border:1px solid black;margin-bottom:2%;width:100%">
                <p align="center" id="parrafo2"><strong> Promoción 1</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 234€</p>
              </div>
              <div class="container" style="border:1px solid black;margin-bottom:2%;width:100%">
                <p align="center" id="parrafo2"><strong> Promoción 2</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 192€</p>
              </div>  
          </div>

</div>
</div>