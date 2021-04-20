<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");


  require('assets/php/consultas.php');

  $consultas = new consultas();
  $idUsuario = $_SESSION['usuario']['id'];
  //Datos usuario
 ?>
<!DOCTYPE html>
<html lang="en">
<!--Página que muestra los reportes-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bsc</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>
    <header class="header-dark">
      <!--Menú-->
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="index.html">Balance ScoreCard</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="registerBSC.php">Crea tu reporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mis reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="profilelogged.php">Mi perfil</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a id="logout" class="btn btn-light action-button" role="button" href="#">Cerrar sesión</a>
                </div>
            </div>
        </nav> <!--Fin del menú-->
        <div class="container hero">
            <div class="row">
              <!--Título-->
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">Acá están tus reportes hechos</h1>
                    <h1 class="text-center">Escoge una area para poder ver tus resultados</h1>
                    <div class="row people" style="background: var(--gray-dark);">
                      <!--Datos personales del usuario-->
                        <div class="col-md-3">
                            <a class="btn btn-light action-button" role="button" href="vistarep.php?are=clientes" style="width: :250px">CLIENTES</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-light action-button" role="button" href="vistarep.php?are=finanzas" style="width: :250px">FINANZAS</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-light action-button" role="button" href="vistarep.php?are=crecimiento" style="width: :250px">CRECIMIENTO</a>
                        </div>
                        <div class="col-md-3">
                            <a class="btn btn-light action-button" role="button" href="vistarep.php?are=procesos" style="width: :250px">PROCESOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Footer-->
    <footer class="footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 item">
                    <h3>Servicios</h3>
                    <ul>
                        <li>Reporte Balance ScoreCard</li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Nosotros somos</h3>
                    <p>Elias Camacho Ramírez</p>
                    <p>Erendira Romano Fernández</p>
                    <p>Maday Santiago García</p>
                    <br>
                    <p>Asesor</p>
                    <p>Profe. Bernardo Parra Victorino</p>
                </div>
            </div>
            <p class="copyright" style="font-size: 18px;color: rgb(254,255,255);">The pastry Chefs © 2021</p>
        </div>
    </footer><!--Fin del footer-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#logout").click(function() {
        event.preventDefault();
        $(location).attr('href', 'assets/php/logout.php');
      });
    });
    </script>
</body>

</html>
