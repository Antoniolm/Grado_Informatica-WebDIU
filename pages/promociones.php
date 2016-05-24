<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM promociones");
?>
 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:4%"> Promociones</h1>
          <div class="container" id="contprincipal">
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
                  Precio mas barato <input type="radio" name="filtro1" value="filtro1"><br>
                  Precio mas caro <input type="radio" name="filtro1" value="filtro1"><br>
                </form>
            </div>          
            <div class="container" id="contelem">
                  <?php                
                    while($fila=mysql_fetch_array($result)){  ?>
                  
                  <div class="container" id="elemento" >
                  <a href="index.php" ><img src="images/<?php echo $fila['imagen'] ?>" alt="DreamGarden"></a>
                  <hr>
                  <p><?php echo $fila['precio'] ?>€</p>
                  <hr>
                  <p style="width: 100%"><?php echo $fila['descripcion'] ?></p>
                  <hr>
                  <form>
                    <input type="submit" value="Reservar"  size="6" style="float:right;margin-bottom:2%">                
                  </form>
                </div>

                <?php } ?>
            </div>
          </div>
</div>
</div>