<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM habitacion");
?>
 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:4%"> Habitaciones</h1>
          <div class="container" id="contprincipal">
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
                  Precio mas barato <input type="radio" name="filtro1" value="filtro1"><br>
                  Precio mas caro<input type="radio" name="filtro1" value="filtro1"><br>
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
                    <input type="submit" value="Reservar"  size="6" style="float:right;margin-bottom:2%">                
                  </form>
                </div>
                <?php }?>
            </div>
          </div>
</div>
</div>
