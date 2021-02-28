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
    <form method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="formFile" class="form-label">Intruduce la solicitud de firma de certificado.</label>
                <input class="form-control" type="file" id="formFile" name="formFile" accept=".csr" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" id="submit">Enviar Formulario</button>

            <div class="row"><br></div>
            <div class="alert alert-success" role="alert" style="display: none" id="form-success">
              Solicitud realizada correctamente, en breve se descargara el certificado firmado.
            </div>
        </form>

    </div>
      <?php

        if(isset($_REQUEST['submit'])){
          echo '<script>document.getElementById("form-success").style.display = "block";</script>';
        }
      ?>

    </section><!-- /.container -->
    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
