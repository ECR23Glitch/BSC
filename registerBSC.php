<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");
  $idUsuario = $_SESSION['usuario']['id'];
  include('assets/php/consultas.php');

  $consultas = new consultas();
 ?>
<html lang="en">
<!--Resgitro de los datos del reporte-->
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

<body style="background: url(&quot;assets/img/mountain_bg.jpg&quot;);">

  <header class="header-dark">
    <!--Menú-->
      <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
          <div class="container"><a class="navbar-brand" href="profilelogged.php">Balance ScoreCard</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navcol-1">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="#">Crea tu reporte</a></li>
                      <li class="nav-item"><a class="nav-link" href="reports.php">Mis reportes</a></li>
                      <li class="nav-item"><a class="nav-link" href="profilelogged.php">Mi perfil</a></li>
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
                  <h1 class="text-center">¿A que area quieres aplicar el SCB?</h1>
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
                                  <div class="col-md-12 col-lg-12 item">
                                          <h3 class="name" style="color: var(--white);"> Escoge el area</h3>
                                          <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="registerClientes.php">Clientes</a>
                                          <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="registerCrecimiento.php">Crecimiento</a>
                                          <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="registerFinanzas.php">Finanzas</a>
                                          <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="registerProcesos.php">Procesos</a>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
          </div>
      </div>
  </header>

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

</html>
