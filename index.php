
<?php include 'pages/header.php'; ?>

<!--main-->
<?php
  if(isset($_GET["contenido"])){
    $contenido= $_GET["contenido"];
  }
  if(empty($contenido)){
    include 'pages/principal.php';
  }
  else{
    switch($contenido){
      case 'ayuda':
        include 'pages/perfil.php';
        break;
      case 'reserva':
        include 'pages/reservap1.php';
        break;
      case 'habi':
        include 'pages/habitaciones.php';
        break;
      case 'promo':
        include 'pages/promociones.php';
        break;
      case 'servi':
        include 'pages/servicios.php';
        break;
      case 'opini':
        include 'pages/opiniones.php';
        break;
      case 'infonos':
        include 'pages/infonosotros.php';
        break;
      case 'inicio':
        include 'pages/principal.php';
        break;
      case 'regis':
        include 'pages/registro.php';
        break;
      case 'datosper':
        include 'pages/datosperso.php';
        break;
      case 'resacti':
        include 'pages/reseracti.php';
        break;
      case 'histo':
        include 'pages/historial.php';
        break;
      case 'bajausu':
        include 'pages/darbaja.php';
        break;
    }
  }
?>

<?php include 'pages/footer.php'; ?>