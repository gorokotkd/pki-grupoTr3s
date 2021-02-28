<?php 
  session_start(); 
  $_SESSION['page'] = 6;
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
    <h1>Formulario de registro en el sistema</h1>
      <form method="POST" onsubmit="confirmar()">
          <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" placeholder="Introduce tu nombre" id="nombre" name="nombre"required>
            </div>
            <div class="row">
            <div class="col">
              <label for="pass">Contraseña</label>
              <input type="password" class="form-control" placeholder="Introduce aquí tu contraseña" id="pass" name ="pass" required>
            </div>
            <div class="col">
              <label for="pass_conf">Repetir Contraseña</label>
              <input type="password" class="form-control" placeholder="Introduce aquí tu contraseña" id="pass_conf" name="pass_conf" required>
            </div>
            </div>
            </br>
                <button type="submit" class="btn btn-primary">Enviar Formulario</button>
                <div class="row"><br></div>
            <div class="alert alert-danger" role="alert" style="display: none" id="register-error">
                  Las contraseñas no coinciden
            </div>
            <div class="row"><br></div>
            <div class="alert alert-success" role="alert" style="display: none" id="register-success">
                    Registro realizado correctamente haz click <a href="index.php" class="alert-link">aquí</a> para iniciar sesión.
            </div>
      </form>

    </div>

    <?php
        if(isset($_REQUEST['nombre'])){
            if($_REQUEST['pass'] == $_REQUEST['pass_conf']){
                $repetido = false;
                $xml = simplexml_load_file('../xml/users.xml');
                $user = $xml->addChild('user');

                $user->addChild('name', $_REQUEST['nombre']);
                $user->addChild('pass',$_REQUEST['pass']);
                echo '<script>document.getElementById("register-error").style.display = "none";</script>';
                $xml->asXML('../xml/users.xml');
                echo '<script>document.getElementById("register-success").style.display = "block";</script>';
            }else{
                echo '<script>document.getElementById("register-error").style.display = "block";</script>';
                echo '<script>document.getElementById("register-success").style.display = "none";</script>';
            }
        } 
    ?>

    </section><!-- /.container -->
    <?php include '../html/footer.html'; ?>
  </body>

  
</html>
