<!--main-->

 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:2%"> Reserva</h1>
          <div class="container" style="margin-top:-2%">
          <?php if(empty($_SESSION["usuario"])){ ?>
          <h3 align="center"><strong> Datos de la reserva </strong>paso(1/5)</h3>
          <?php }
          else{?>
          <h3 align="center"><strong> Datos de la reserva </strong>paso(1/4)</h3>
          <?php } ?>
            
            <form align="center" action="index.php?contenido=resep2" method="POST" style="margin-left:4%">
                <br><br><strong>Fecha:</strong> <input type="date" name="usuario" style="margin-right:4%;margin-left:2%;height:20px" >
                <input type="date" name="usuario" style="margin-right:4%;margin-left:2%;height:20px" ><br>
                <p style="margin-top:4%;font-size:19px"> <strong>Nº personas </strong></p>
                <p align="center">Adultos:
                <select style="margin-right: 10%">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
                Niños:
                <select style="margin-right: 4%">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select></p><br>
                <p align="center" style="margin-left:5%">3º Edad:
                <select style="margin-right: 10%">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
                Accesible:
                <select style="margin-right: 4%">
                  <option value="1" selected>1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select></p>
                <input type="submit" value="Reserva" style="margin-top:2.5%;height:50px; font-size:18px;width:100px">
            </form>
            <form align="center">
                <p style="margin-top:4%">¿Tienes ya una reserva?</p>
                <p>Introduce el id de tu reserva para ver o cancelar su reserva<input type="text" name="usuario" style="margin-right:1%;margin-left:2%" >
                <input  type="submit" value="Visualizar" style="width:100px"></p>
            </form>
          </div>
</div>
</div>