<?php 
  session_start(); 
  $_SESSION['page'] = 1;
  if(isset($_SESSION['iniciado'])){
    if($_SESSION['iniciado'] == 0 || $_SESSION['admin'] != 1){
      echo '<script>window.location.href = "index.php"</script>';
    }
  }else{
    echo '<script>window.location.href = "index.php"</script>';
  }
?>
<!doctype html>
<html lang="es">
  <head>
    <?php include '../html/head.html'; ?>
  </head>
  <body>
    <?php include './menus.php'; ?>

    <section class="container" role="main">
  <div class="starter-template">
    <h1>Formulario de emisión de certificado</h1>
      

    </div>
      

    </section><!-- /.container -->
  </body>

  
</html>
