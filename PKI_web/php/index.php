<?php 
  session_start(); 
  $_SESSION['page'] = 0;
  if(isset($_SESSION['iniciado'])){
    if($_SESSION['iniciado'] == 1){
      echo '<script>window.location.href = "inicio.php"</script>';
    }
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

        <?php
          if(isset($_SESSION['iniciado'])){
            if($_SESSION['iniciado'] == 1){

            }else{
              echo '<h3>Formulario de Inicio de Sesión</h3>
              <form method= "POST">
                  <div class="mb-3">
                    <label for="user_name">Nombre de Usuario</label>
                    <input type="text" class="form-control" placeholder="Introduce tu nombre" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="pass">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Introduce tu contraseña" id="pass" name="pass" required>
                </div>
      
                <button type="submit" class="btn btn-primary">Enviar</button>
                <div class="row"><br></div>

                  <div class="alert alert-info" role="alert">
                    Si no estás registrado haz click <a href="registro.php" class="alert-link">aquí</a>.
   
                </div>
                <div class="row"><br></div>
                  <div class="alert alert-danger" role="alert" style="display: none" id="login-error">
                    Usuario o contraseña incorrectas
                  </div>

              </form>';
            }
          }else{
            echo '<h3>Formulario de Inicio de Sesión</h3>
            <form method="POST">
                <div class="mb-3">
                  <label for="user_name">Nombre de Usuario</label>
                  <input type="text" class="form-control" placeholder="Introduce tu nombre" id="nombre" name="nombre" required>
              </div>
              <div class="mb-3">
                  <label for="pass">Contraseña</label>
                  <input type="password" class="form-control" placeholder="Introduce tu contraseña" id="pass" name="pass" required>
              </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                  <div class="row"><br></div>
                <div class="alert alert-info" role="alert">
                  Si no estás registrado haz click <a href="registro.php" class="alert-link">aquí</a>.
                </div>
                <div class="row"><br></div>
                <div class="alert alert-danger" role="alert" style="display: none" id="login-error">
                  Usuario o contraseña incorrectas
                </div>

            </form>';
          }

        ?>
      </div>

      <?php
        if(isset($_REQUEST['nombre'])){
          if($_REQUEST['nombre'] == "admin" && $_REQUEST['pass'] == "admin"){
            echo '<script>document.getElementById("login-error").style.display = "none";</script>';
            $_SESSION['iniciado'] = 1;
            $_SESSION['admin'] = 1;
            //unset($_REQUEST['nombre']);
            echo '<script>window.location.href = "./inicio.php"</script>';
          }else{
            $xml = simplexml_load_file('../xml/users.xml');
            $existe = false;
            foreach ($xml->xpath('user') as $user){
              if($user->name == $_REQUEST['nombre'] && $user->pass == $_REQUEST['pass']){
                  $existe = true;
                  break;
              }
            }
            $xml->asXML('../xml/users.xml');

            if($existe){
              echo '<script>document.getElementById("login-error").style.display = "none";</script>';
              $_SESSION['iniciado'] = 1;
              $_SESSION['admin'] = 0;
              echo '<script>window.location.href = "./inicio.php"</script>';
            }else{
              echo '<script>document.getElementById("login-error").style.display = "block";</script>';
              $_SESSION['iniciado'] = 0;
            }
          }
        }
      ?>
    </section>
    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
