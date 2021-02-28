<?php 
  session_start(); 
  $_SESSION['page'] = 3;
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
        <h3>Apartado de Verificación de Certificados</h3>

        <form method="POST" enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="formFile" class="form-label">Intruduce tu certificado.</label>
                <input class="form-control" type="file" id="formFile" name="formFile" accept=".crt" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit" id="submit">Enviar Formulario</button>

            <div class="row"><br></div>
            <div class="alert alert-success" role="alert" style="display: none" id="form-success">
              Tu certificado es válido.
            </div>
            <div class="row"><br></div>
            <div class="alert alert-danger" role="alert" style="display: none" id="form-error">
                Parece que algo ha fallado al verificar tu certificado, si crees que hay algún error ponte en contacto con el administrador.
            </div>
        </form>
        
      </div>

      <?php
        if(isset($_REQUEST['submit'])){
            $num = rand(0,1);
            switch ($num) {
                case 0:
                    echo '<script>document.getElementById("form-error").style.display = "none";</script>';
                    echo '<script>document.getElementById("form-success").style.display = "block";</script>';
                    break;
                case 1:
                    echo '<script>document.getElementById("form-success").style.display = "none";</script>';
                    echo '<script>document.getElementById("form-error").style.display = "block";</script>';     
                    break;
                default:
                    # code...
                    break;
            }
            
        }
      ?>
    </section>
    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
