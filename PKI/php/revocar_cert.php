<?php 
  session_start(); 
  $_SESSION['page'] = 2;
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
        <h1>Proyecto PKI Grupo 3</h1>
        <h3>Apartado de revocación de certificados</h3>

        <form method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="formFile" class="form-label">Selecciona aquí el certificado a revocar</label>
                <input class="form-control" type="file" id="formFile" accept=".crt, .pem">
            </div>

            <button type="submit" class="btn btn-primary">Enviar Formulario</button>
        </form>
        
      </div>

    </section>
  </body>

  
</html>
