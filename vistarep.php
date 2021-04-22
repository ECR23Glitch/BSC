<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");


  require('assets/php/consultas.php');

  $consultas = new consultas();
  $idUsuario = $_SESSION['usuario']['id'];
  $area = $_GET['are'];
  $reportes = $consultas->damelosreportes($area, $idUsuario);
  //Datos usuario
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Balance ScoreCard</title>
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
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
            <div class="container"><a class="navbar-brand" href="profilelogged.php"><i>Balance ScoreCard</i></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="registerBSC.php">Crea tu reporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="reports.php">Mis reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="profilelogged.php">Mi perfil</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a class="btn btn-light action-button" role="button" href="#" id="cerrarSesion">Cerrar sesión</a>
                </div>
            </div>
        </nav>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                  <h1 class="text-center">Reportes <i>Balance ScoreCard</i></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <section class="team-boxed">
                            <div class="container">
                              <?php foreach ($reportes as $rh): ?>
                                <div class="row people" style="background: var(--gray-dark);">
                                    <div class="col-md-6 col-lg-6 item">
                                        <div data-bss-hover-animate="wobble" class="box" style="background: var(--gray);">
                                            <h3 class="name" style="color: var(--white);">Fecha de creación:&nbsp;<?php echo $rh['created_at']; ?></h3>
                                            <h3 class="name" style="color: var(--white);">Objetivo:&nbsp;<?php echo $rh['obj']; ?></h3>
                                            <p class="title" style="color: rgb(0,0,0);">Indicador medido:&nbsp;<?php echo $rh['nombre']; ?></p>
                                            <p class="description" style="color: var(--white);">Frecuencia medida:&nbsp;<?php echo $rh['frec_med']; ?></p>
                                            <p class="description" style="color: var(--white);">Meta propuesta:&nbsp;<?php echo $rh['meta']; ?></p>
                                            <p class="description" style="color: var(--white);">Resultados actuales:&nbsp;<?php echo $rh['resu_act']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 item">
                                        <div data-bss-hover-animate="wobble" class="box" style="text-align: center;background: var(--gray);">
                                            <h3 class="name" style="color: var(--white);">Resultados medición</h3>
                                            <p class="title" style="color: rgb(0,0,0);">ESTATUS ACTUAL:&nbsp;<?php echo $rh['sta']; ?></p>
                                            <p class="description" style="color: rgb(255,255,255);"><strong>RECOMENDACIÓN:</strong></p>
                                            <p class="description" style="color: rgb(255,255,255);background: var(--red);font-size: 28px;"><strong><?php echo $rh['recom']; ?></strong></p>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <footer class="footer-dark">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-12 col-md-6 col-lg-6 item">
                    <h3>Servicios</h3>
                    <ul>
                      <li>Reporte <i>Balance ScoreCard</i></li>
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
            <p class="copyright" style="color: rgb(251,251,251);text-align: center;font-size: 18px;">The pastry Chefs © 2021</p>
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
