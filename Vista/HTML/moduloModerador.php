<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/dashboard.css">

</head>

<body>
    <div method="POST" class="container-fluid" action="Modelo\loguear.php">
        <div class="row justify-content-center align-content-center">
            <div class="col-8 barra">
                <h4 class="text-light">Bienvenido a Facturaciones DAIA ©</h4>
                <?php
        session_start();
        
        $usuario = $_SESSION['username'];
               
        if(!isset($usuario)){
            header("location: ../../index.php");
        }else{
        
        echo " <h5> Bienvenido al modulo Moderador $usuario </h5> "; 
        }       
        ?>
            </div>
            <div class="col-4 text-right barra">
                <ul class="navbar-nav mr-auto">
                    <li>
                        <a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle user"></i></a>

                        <div class="dropdown-menu" aria-labelledby="navbar-dropdown">
                            <a class="dropdown-item menuperfil cerrar" href="#"><i class="fas fa-sign-out-alt m-1"></i>Mi perfil
                            <a class="dropdown-item menuperfil cerrar" href= "../../Modelo/salir.php"><i class="fas fa-sign-out-alt m-1"></i>Salir
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                    <a href="../../Vista/HTML/moduloModerador.php"><i class="fas fa-home"></i><span>Inicio</span></a>
                    <a href="indexI.php"><i class="fas fa-home"></i><span>Inventario</span></a>
                    <a href="indexF.php"><i class="fas fa-home"></i><span>Facturación usuarios</span></a>

            </div>
            <main class="main col">
                <div class="row justify-content-center align-content-center text-center">
                </div>
            </main>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/646c794df3.js"></script>
<?php
?>
</body>
</html>
