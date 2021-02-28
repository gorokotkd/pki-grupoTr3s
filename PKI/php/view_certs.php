<?php 
  session_start(); 
  $_SESSION['page'] = 7;
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
    <h1>Vista de Certificados</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Estado</th>
                <th scope="col">Fecha de Expiración</th>
                <th scope="col">Fecha de Revocación</th>
                <th scope="col">Número de Serie</th>
                <th scope="col">Nombre del archivo</th>
                <th scope="col">Nombre del certificado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Valid</td>
                <td>28/02/2022</td>
                <td>Empty</td>
                <td>0D5AAAE7C68A00ED891269D922098D6D</td>
                <td>unknown</td>
                <td>/C=ES/ST=Gipuzkoa/O=Orlando/OU=IOT/CN=Gorka Alvarez/emailAdress=gorka@iot.es</td>
            </tr>
            <tr>
                <td>Revoked</td>
                <td>28/02/2022</td>
                <td>28/02/2022 // Superseded</td>
                <td>0D5AAAE7C68A00ED891269D922098D6E</td>
                <td>unknown</td>
                <td>/C=ES/ST=Gipuzkoa/O=Orlando/OU=IOT/CN=www.user2-server.com/emailAdress=user2-server@iot.com</td>
            </tr>
        </tbody>
</table>
    </div>
    </section><!-- /.container -->

    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
