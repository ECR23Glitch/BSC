<?php
session_start();
if(!isset($_SESSION['usuario']))
  Header("Location: login.php");


  require('assets/php/consultas.php');

  $consultas = new consultas();
  $idUsuario = $_SESSION['usuario']['id'];
  //Datos usuario vistas
  $datas = $consultas->damelosreportes($idUsuario);
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
            <div class="container"><a class="navbar-brand" href="index.html">BSC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
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
                </div>
            </div>
        </div>
        <div class="container hero">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="text-center">
                      <!--Tabla que muestra los reportes-->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-light bg-dark">Objetivo</th>
                                        <th class="text-light bg-dark">Frecuencia Medida</th>
                                        <th class="text-light bg-dark">Meta</th>
                                        <th class="text-light bg-dark">Resultado actual</th>
                                        <th class="text-light bg-dark">Resultado</th>
                                        <th class="text-light bg-dark">Nombre area</th>
                                        <th class="text-light bg-dark">Nombre indicador</th>
                                        <th class="text-light bg-dark">Fecha de elaboracion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <div class="" style="width:500px; height:100px; overflow:auto;">
                                    <?php foreach ($datas as $data) {?>
                                    <tr class="text-center" style="background: var(--white);">
                                        <td><?php echo $data['obj'];?></td>
                                        <td><?php echo $data['frec_med'];?></td>
                                        <td><?php echo $data['meta'];?></td>
                                        <td><?php echo $data['resu_actu'];?></td>
                                        <td><?php echo $data['resultado'];?></td>
                                        <td><?php echo $data['Nomare'];?></td>
                                        <td><?php echo $data['Nomind'];?></td>
                                        <td><?php echo $data['created_at'];?></td>
                                    </tr>
                                    <?php } ?>
                                  </div>
                                </tbody>
                            </table>
                        </div>
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
                        <li>Reporte BSC</li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Nuestra identidad</h3>
                    <p>The pastry chefs tatata</p>
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
