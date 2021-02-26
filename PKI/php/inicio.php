<?php 
  session_start(); 
  $_SESSION['page'] = 0;
  if(isset($_SESSION['iniciado'])){
    if($_SESSION['iniciado'] == 0){
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
        <h1>Proyecto PKI Grupo 3</h1>

        <div class="card mx-auto" style="width: 18rem;">
            <img src="../images/cert-icon.png" class="card-img-top" alt="cert-icon">
                <div class="card-body">
                    <h5 class="card-title">Certificado de la CA</h5>
                    <p class="card-text">Haz click aquí para descargar nuestro certificado</p>
                    <a href="../crt/grupo3-CA.crt" class="btn btn-primary" download>Descargar!</a>
                </div>
        </div>
        
      </div>

    </section>
  </body>

  
</html>
