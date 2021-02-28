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
                <input class="form-control" type="file" id="formFile" accept=".crt, .pem" name="form-file" required>
            </div>

            <select class="form-select" aria-label="revoke_reason" name="revoke_reason">
              <option selected>Selecciona una montivo de revocación del certificado</option>
              <option value="1">Compromiso de Clave</option>
              <option value="2">Compromiso de la CA</option>
              <option value="3">Reemplazamiento</option>
              <option value="4">Cambio de afiliación</option>
              <option value="5">Cese de operaciones</option>
              <option value="6">Retención de certificado</option>
              <option value="7">Eliminación de la CRL</option>
              <option value="8">Sin especificar</option>

            </select>
            <div class="row"><br></div>
            <button type="submit" class="btn btn-primary">Enviar Formulario</button>
        </form>
        
      </div>

    </section>
    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
