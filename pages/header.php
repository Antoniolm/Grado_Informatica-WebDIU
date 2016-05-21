<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>DreamGarden</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-top header" id="header-footer" style="margin-top:-1%">
  <div class="col-md-12">
        <div class="navbar-header">
            <a href="index.php?contenido=perfil" ><img src="images/logo.png" width="270" height="90" alt="DreamGarden" style="margin-top:5%"></a>
            
        </div>
        <p style="margin-left:80%;margin-top:0.5%">Elegir idioma    <select style="margin-right: 4%">
                  <option value="1" selected>España</option>
                  <option value="2">Francia</option>
                  <option value="3">Inglaterra</option>
                  <option value="4">Japon</option>
                  <option value="5">China</option>
                  <option value="6">EEUU</option>
                </select></p>
        <!-- Logeo -->
        <div class="container" id="login">

        <?php  session_start();
              if(empty($_SESSION["usuario"])){ ?>
            <p style="margin-top:0.5%;font-size:13px">
              <!-- <form style="margin-top:0.5%;font-size:13px"> -->
                Usuario:
                <input type="text" name="usuario" size="6">
                Contraseña:
                <input type="text" name="contrasena"  size="6">
                <a href="pages/iniciosesion.php"><input type="submit" value="Acceder"  size="6"></a>
              <!-- </form> -->
              </p>
              <p style="margin-top:-2%;font-size:13px">¿Eres nuevo en nuestra web? <a href="index.php?contenido=regis">Registrate</a></p>
          <?php }
          else {?> 
             <p style="margin-top:5%;font-size:13px">
              <!-- <form style="margin-top:0.5%;font-size:13px"> -->
                Bienvenido , <?php echo $_SESSION["usuario"]; ?>
                <a href="index.php?contenido=perfil" style="margin-left:2%"><input type="submit" value="perfil"  size="6"></a>
                <a href="pages/cerrarsesion.php" style="margin-left:2%"><input type="submit" value="Salir"  size="6"></a>
              <!-- </form> -->
              </p>
              <p></p>
          <?php }?>
     </div> 
</nav>


      <div class="navbar navbar-default" id="menu"> 
        <div class="container" >
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" style="width:100%">
            <ul class="nav navbar-nav " id="lista">
             <li><a href="index.php?contenido=inicio" >Inicio</a></li>
             <li><a href="index.php?contenido=ayuda"  role="button">¿Necesitas Ayuda?</a></li>
             <li><a href="index.php?contenido=reserva"  role="button">Reservar</a></li>
             <li><a href="index.php?contenido=habi"  role="button">Habitaciones</a></li>
             <li><a href="index.php?contenido=promo"  role="button">Promociones</a></li>
             <li><a href="index.php?contenido=servi"  role="button">Servicios</a></li>
             <li><a href="index.php?contenido=opini"  role="button">Opiniones</a></li>
             <li><a href="index.php?contenido=infonos"  role="button">Información de nosotros</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
