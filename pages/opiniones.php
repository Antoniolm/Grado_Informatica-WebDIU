<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM comentario");
?>
 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:4%"> Opiniones</h1>
          <div class="container" id="contprincipal">
            <div class="contenedor-scroll" style="padding-bottom:3%">
                <?php while($fila=mysql_fetch_array($result)){  ?>
                <div class="comentario">
                  <p style="margin-top:3%"><strong> Autor:</strong> <?php echo $fila['nombre'] ?><strong style="margin-left:2%">Fecha:</strong> <?php echo $fila['fecha'] ?> <strong style="margin-left:2%"> Valoración:</strong> <?php echo $fila['valoracion'] ?>/5</p>
                  <hr>
                  <p style="width: 100%"><?php echo $fila['comentario'] ?> </p>
                </div>
                <?php  } ?>
            </div>
          </div>
            <?php if(!empty($_SESSION["usuario"])){ ?>
            <div class="container">
              <br><h4><strong>Añadir opinión</strong></h4>
              <form>
                Valoración: <select>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="4">5</option>
                  </select><br><br>
                  Comentario:<br>
                  <textarea rows="4" style="width: 60%"></textarea><br>
                  <input type="submit" value="Enviar comentario" style="margin-top:2%;height: 40px;font-size: 17px">
              </form>
            </div>
            <?php } ?>
</div>
</div>