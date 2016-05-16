<!--main-->

 <div class="well" id="cuerpo">
 <div class="container">
          <h1 align="center" style="margin-bottom:4%"> Perfil</h1>
          <div class="container" style="padding-right:0px;padding-left:0px">
            <div class="container" id="contfiltro" style="min-width:200px;border-right:1px solid black">
                <a href="index.php?contenido=datosper">
                  <input type="submit" value="Datos personales "  id="botones"></a>
                <a href="index.php?contenido=resacti">
                  <input type="submit" value="Reservar activas"  id="botones"></a>
                <a href="index.php?contenido=histo">
                  <input type="submit" value="Historial de reservas" id="botones"></a>
                <a href="index.php?contenido=bajausu">
                  <input type="submit" value="Baja de usuario" id="botones" ></a>
            </div>          
            <div class="container" id="contperfil">
                    <h3 align="center">Datos Personales</h3>
                    <form>
                    <p align="center" id="parrafo"><Strong>Usuario:</Strong> usuario2 <Strong style="margin-left:3%"> Apellidos:</Strong>Ruan Ruiz </p>
                    <p align="center" id="parrafo"><Strong>Teléfono:</Strong><input type="text" style="width:15%"placeholder="985878458"> <strong>Email:</strong><input type="text" style="width:20%"placeholder="prueba@gmail.com"> </p>
                    <p align="center" id="parrafo" style="margin-left:6%"><Strong>Pais:</Strong> <select style="margin-right: 4%">
                                                                                                        <option value="1" selected>España</option>
                                                                                                        <option value="2">Francia</option>
                                                                                                        <option value="3">Inglaterra</option>
                                                                                                        <option value="4">Japon</option>
                                                                                                        <option value="5">China</option>
                                                                                                        <option value="6">EEUU</option>
                                                                                                      </select></p>
                    <input type="submit" value="Actualizar datos" id="botonperso">
                    </form>
            </div>
          </div>
</div>
</div>