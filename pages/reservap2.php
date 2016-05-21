<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM habitacion");
?>
 <div class="well" id="cuerpo">
 <div class="container" style="width:100%">
          <h1 align="center" style="margin-left:-20%;margin-bottom:2%"> Reserva</h1>

          <div class="container" style="float:left;margin-top:-2%;width:80%;min-width:290px">
            <?php if(empty($_SESSION["usuario"])){ ?>
              <h3 align="center"><strong> Seleccione las habitaciones </strong>paso(2/5)</h3>
            <?php }
            else{?>
              <h3 align="center"><strong> Seleccione las habitaciones </strong>paso(2/4)</h3>
             <?php } ?>


            <div class="container" id="contprincipal" style="margin-bottom:2%;min-width:200px;width:100%">
            <div class="container" id="contfiltro">
                <h4 align="center">Filtros</h4>
                <form>
                Nº de camas:<select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4" selected>4</option>
                  </select><br>
                  Baño:<input type="checkbox" name="filtro1" value="filtro1"><br>
                  Aire Acond.:<input type="checkbox" name="filtro2" value="filtro2"><br><br>
                  <p><strong>Tipo de habitación:</strong></p>
                  Individual:<input type="checkbox" name="filtro2" value="filtro2"><br>
                  Doble:<input type="checkbox" name="filtro2" value="filtro2"><br>
                  Suit:<input type="checkbox" name="filtro2" value="filtro2"><br>
                </form>
                <h4 align="center">Ordenar</h4>
                <form>
                  Nombre <input type="radio" name="filtro1" value="filtro1"><br>
                  Mas baratos <input type="radio" name="filtro1" value="filtro1"><br>
                  Mas caros<input type="radio" name="filtro1" value="filtro1"><br>
                </form>
            </div>          
            <div class="container" id="contelem">
              <?php                
                    while($fila=mysql_fetch_array($result)){  ?>
                <div class="container" id="elemento" >
                  <a href="index.php" ><img src="images/<?php echo $fila['imagen'] ?>" alt="DreamGarden"></a>
                  <hr>
                  <p align="center"><strong><?php echo $fila['nombre'] ?></strong> </p>
                  <hr>
                  <p align="center" ><?php echo $fila['precio'] ?>€</p>
                  <hr>
                  <p align="center"><Strong>Descripción</Strong></p>
                  <p style="width: 100%"><?php echo $fila['descripcion'] ?></p>
                  <hr>
                  <p align="center"><Strong>Servicios</Strong></p>
                  <p><?php echo $fila['servicios'] ?></p>
                  <form>
                    <input type="submit" value="Añadir"  size="6" style="float:right;margin-bottom:2%">                
                  </form>
                </div>
                <?php }?>
            </div>
          </div>
          <a href="index.php?contenido=reserva">
          <input type="submit" value="Atras" id="botonp2" style="float:left;"></a>
          <a href="index.php?contenido=resep3">
          <input type="submit" value="Siguiente" id="botonp2" style="float:right;"></a>
          </div>

          <div class="container" id="recordreserva">
              <h4 align="center"><strong>Contenido de la reserva</strong></h4>
              <p aligh="center" id="parrafo"><Strong>Fecha:</Strong> 16/06/2016-19/06/2016</p>
              <p aligh="center" id="parrafo"><Strong>Nº personas:</Strong></p>
              <p aligh="center" id="parrafo">Adultos:2 Niños:0</p>
              <p aligh="center" id="parrafo">3º Edad:2 Accesible:0</p>
              <hr style="border:1px solid black">
          </div>

</div>
</div>