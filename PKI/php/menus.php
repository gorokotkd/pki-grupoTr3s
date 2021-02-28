<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ProyectoPKI-Grupo3</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php
        if(isset($_SESSION['iniciado'])){
            if($_SESSION['iniciado'] == 1){
                //Sesión iniciada correctamente. Puedo mostrar el menu completo
                echo '
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">';
                      if ($_SESSION['page'] == 0){
                          echo '<a class="nav-link active" aria-current="page" href="#">Home</a>';
                      }
                      else {
                          echo '<a class="nav-link " href="inicio.php">Home</a>';
                      }
                echo ' 
                  </li>';

                  
                    if($_SESSION['admin'] == 1){
                        if ($_SESSION['page'] == 1){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Emitir Cert</a></li>';
                        }
                        else {
                            echo '<li class="nav-item"><a class="nav-link " href="emitir_cert.php">Emitir Cert</a></li>';
                        }
                      }

                    if($_SESSION['admin'] == 1){
                        if ($_SESSION['page'] == 2){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Revocar Cert</a></li>';
                        }
                        else {
                            echo '<li class="nav-item"><a class="nav-link " href="revocar_cert.php">Revocar Cert</a></li>';
                        } 
                    }

                    if($_SESSION['admin'] == 1){
                        if ($_SESSION['page'] == 7){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Ver Certs</a></li>';
                        }
                        else {
                            echo '<li class="nav-item"><a class="nav-link " href="view_certs.php">Ver Certs</a></li>';
                        } 
                    }

                    if($_SESSION['iniciado'] == 1 && $_SESSION['admin'] == 0){
                        if ($_SESSION['page'] == 3){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Validar Cert</a></li>';
                        }
                        else {
                            echo '<li class="nav-item"><a class="nav-link " href="validar_cert.php">Validar Cert</a></li>';
                        }
                    }

                    if($_SESSION['admin'] == 0 && $_SESSION['iniciado'] == 1){
                        if($_SESSION['page'] == 4){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Solicitar Cert Personal</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link " href="solicitar_cert_pers.php">Solicitar Cert Personal</a></li>';
                        }
                    }
                    
                    if($_SESSION['admin'] == 0 && $_SESSION['iniciado'] == 1){
                        if($_SESSION['page'] == 5){
                            echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Solicitar Cert Servidor</a></li>';
                        }else{
                            echo '<li class="nav-item"><a class="nav-link " href="solicitar_cert_serv.php">Solicitar Cert Servidor</a></li>';
                        }
                    }
/*
                  echo '<li class="nav-item">';
                  if ($_SESSION['page'] == 5){
                    echo '<a class="nav-link active" aria-current="page" href="#">Exportar Cert</a>';
                }
                else {
                    echo '<a class="nav-link " href="exportar_cert.php">Exportar Cert</a>';
                } 
                echo '
                  </li>
                </ul>
              </div>';*/
              echo '</div>';
              if(isset($_SESSION['iniciado'])){
                  if($_SESSION['iniciado'] == 1){
                      echo '<form class="d-flex" action="logout.php" method="POST">
                                <button class="btn btn-primary" type="submit">Log Out</button>
                            </form>';
                  }
              }
              
            
            }else{//Sesion no iniciada
                echo '<div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">';
                      if ($_SESSION['page'] == 0){
                          echo '<a class="nav-link active" aria-current="page" href="#">Home</a>';
                      }
                      else {
                          echo '<a class="nav-link " href="index.php">Home</a>';
                      }
                echo ' 
                  </li>';
                if($_SESSION['page'] == 6){
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Registro</a></li>';
                }else{
                    echo '<li class="nav-item"><a class="nav-link " href="registro.php">Registro</a></li>';
                }
            }

            echo '</div>';
        }else{//Sesion no iniciada
            echo '<div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">';
                      if ($_SESSION['page'] == 0){
                          echo '<a class="nav-link active" aria-current="page" href="#">Home</a>';
                      }
                      else {
                          echo '<a class="nav-link " href="index.php">Home</a>';
                      }
                echo ' 
                  </li>';
                if($_SESSION['page'] == 6){
                    echo '<li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Registro</a></li>';
                }else{
                    echo '<li class="nav-item"><a class="nav-link " href="registro.php">Registro</a></li>';
                }
            

            echo '</div>';
        }




    ?>




 
</nav>