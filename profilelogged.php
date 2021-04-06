<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");


  require('assets/php/consultas.php');

  $consultas = new consultas();
  $idUsuario = $_SESSION['usuario']['id'];
  //Datos usuario vistas
  $userVista = $consultas->datosUsuario($idUsuario);
  $repC = $consultas->cuantosReportesC($idUsuario);
  $repCr = $consultas->cuantosReportesCr($idUsuario);
  $repF = $consultas->cuantosReportesF($idUsuario);
  $repP = $consultas->cuantosReportesP($idUsuario);
 
 ?>

<html lang="en">
<!--Perfil-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>bsc</title>
    <!--Librerias-->
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
            <div class="container"><a class="navbar-brand" href="#">BSC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="registerBSC.php">Crea tu reporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="reports.php">Mis reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mi perfil</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a id="cerrarSesion" class="btn btn-light action-button" role="button" href="#">Cerrar sesión</a>
                </div>
            </div>
        </nav>
        <!--Título-->
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center">Acá esta tu perfil</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <section class="team-boxed">
                            <div class="container">
                                <div class="row people" style="background: var(--gray-dark);">
                                  <!--Datos personales del usuario-->
                                    <div class="col-md-6 col-lg-6 item">
                                        <div data-bss-hover-animate="wobble" class="box" style="background: var(--gray);">
                                            <h3 class="name" style="color: var(--white);"><?php echo $userVista['nomcli'];?> <?php echo $userVista['appaterno']; ?> <?php echo $userVista['apmaterno']; ?></h3>
                                            <p class="title" style="color: rgb(0,0,0);"><?php echo $userVista['org']; ?></p>
                                            <p class="description" style="color: var(--white);"><?php echo $userVista['descripcion']; ?></p>
                                            <p class="description" style="color: var(--white);">Te uniste: <br><?php echo $userVista['created_at']; ?></p>
                                        </div>
                                    </div>
                                    <!--Datos de reportes-->
                                    <div class="col-md-6 col-lg-6 item">
                                        <div data-bss-hover-animate="wobble" class="box" style="text-align: center;background: var(--gray);">
                                            <h3 class="name" style="color: var(--white);">Tus reportes</h3>
                                            <p class="title" style="color: rgb(0,0,0);">Muestra tus reportes mas recientes</p>
                                            <p class="description" style="color: rgb(255,255,255);">Reportes hechos</p>
                                            <?php
                                                foreach ($repC as $rc) {
                                            ?>
                                            <p class="description" style="color: rgb(255,255,255);"> Clientes: <?php echo $rc['RepC'] ?></p>
                                            <?php  } ?>
                                            <?php
                                                foreach ($repCr as $rcr) {
                                            ?>
                                            <p class="description" style="color: rgb(255,255,255);"> Crecimiento: <?php echo $rcr['RepCr'] ?></p>
                                            <?php  } ?>
                                            <?php
                                                foreach ($repF as $rf) {
                                            ?>
                                            <p class="description" style="color: rgb(255,255,255);"> Finanzas: <?php echo $rf['RepF'] ?></p>
                                            <?php  } ?>
                                            <?php
                                                foreach ($repP as $rp) {
                                            ?>
                                            <p class="description" style="color: rgb(255,255,255);"> Procesos: <?php echo $rp['RepP'] ?></p>
                                            <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer class="footer-dark">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-sm-12 col-md-6 col-lg-6 item" style="text-align: center;">
                    <h3>Servicios</h3>
                    <ul>
                        <li>Reporte BSC</li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Nuestra identidad</h3>
                    <p>The pastry chefs tatata</p>
                </div>
            </div>
            <p class="copyright" style="font-size: 18px;color: rgb(255,255,255);">The pastry Chefs © 2021</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#cerrarSesion").click(function() {
        event.preventDefault();
        $(location).attr('href', 'assets/php/logout.php');
      });
    });
    </script>
</body>

</html>
