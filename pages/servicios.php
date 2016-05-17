<!--main-->
<?php 
  include 'conexionBD.php';
  $result=$datos->Query("SELECT * FROM servicios");
?>
 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:4%"> Servicios del hotel</h1>
          <?php                
              while($fila=mysql_fetch_array($result)){  ?>
              <div class="container" id="servicio">
              <a href="index.php"><img src="images/<?php echo $fila['imagen'] ?>" width="80" height="80" alt="DreamGarden"></a>
              <p><?php echo $fila['nombre'] ?></p>
          </div>
          <?php } ?>
</div>
</div>
