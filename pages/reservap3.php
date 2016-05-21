<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM promociones");
?>
 <div class="well" id="cuerpo">
 <div class="container" style="width:100%">
          <h1 align="center" style="margin-left:-20%;margin-bottom:2%"> Reserva</h1>

          <div class="container" style="float:left;margin-top:-2%;width:80%;min-width:290px">
            <?php if(empty($_SESSION["usuario"])){ ?>
              <h3 align="center"><strong> Seleccione las promociones </strong>paso(3/5)</h3>
              <?php }
              else{?>
              <h3 align="center"><strong> Seleccione las promociones </strong>paso(3/4)</h3>
             <?php } ?>


            <div class="container" id="contprincipal" style="margin-bottom:2%;min-width:200px;width:100%">
             <div class="container" id="contfiltro">
                <h4 align="center">Filtros</h4>
                <form>
                  <input type="checkbox" name="filtro1" value="filtro1"> Habitaciones<br>
                  <input type="checkbox" name="filtro2" value="filtro2"> Servicios<br>
                  <input type="checkbox" name="filtro2" value="filtro2"> Desc. por edad (>65años)<br>
                  <input type="checkbox" name="filtro2" value="filtro2"> Desc.por grupo (>10 personas)<br>
                  <input type="checkbox" name="filtro2" value="filtro2"> Fidelidad (usuarios registados)<br>
                </form>
                <h4 align="center">Ordenar</h4>
                <form>
                  Nombre <input type="radio" name="filtro1" value="filtro1"><br>
                  Mas baratos <input type="radio" name="filtro1" value="filtro1"><br>
                  Mas caros <input type="radio" name="filtro1" value="filtro1"><br>
                </form>
            </div>          
            <div class="container" id="contelem">
                  <?php                
                    while($fila=mysql_fetch_array($result)){  ?>
                  
                  <div class="container" id="elemento" style="min-height:525px" >
                  <a href="index.php" ><img src="images/<?php echo $fila['imagen'] ?>" alt="DreamGarden"></a>
                  <hr>
                  <p><?php echo $fila['precio'] ?>€</p>
                  <hr>
                  <p style="width: 100%"><?php echo $fila['descripcion'] ?></p>
                  <hr>
                  <form>
                    <input type="submit" value="Añadir"  size="6" style="float:right;margin-bottom:2%">                
                  </form>
                </div>

                <?php } ?>
            </div>
 
            </div>
          <a href="index.php?contenido=resep2">
          <input type="submit" value="Atras" id="botonp2" style="float:left;"></a>
          <?php 
              if(empty($_SESSION["usuario"])){ ?>
          <a href="index.php?contenido=resep4">
          <input type="submit" value="Siguiente" id="botonp2" style="float:right;"></a>
          <?php }
          else{?>
          <a href="index.php?contenido=resep5">
          <input type="submit" value="Siguiente" id="botonp2" style="float:right;"></a>
          <?php } ?>
          </div>

          <div class="container" id="recordreserva" style="font-size:15px">
              <h4 align="center" ><strong>Contenido de la reserva</strong></h4>
              <p id="parrafo2"><Strong>Fecha:</Strong> 16/06/2016-19/06/2016</p>
              <p id="parrafo2"><Strong>Nº personas:</Strong></p>
              <p id="parrafo2">Adultos:2 Niños:0</p>
              <p id="parrafo2">3º Edad:2 Accesible:0</p>
              <hr style="border:1px solid black">
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Habitacion 1</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 234€</p>
              </div>
              <div class="container" id="recordelem">
                <p align="center" id="parrafo2"><strong> Habitacion 2</strong></p>
                <p align="center" id="parrafo2"><strong> Precio/noche:</strong> 192€</p>
              </div>              
              <hr style="border:1px solid black">
          </div>

</div>
</div>