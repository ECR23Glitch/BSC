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
            <div class="container"><a class="navbar-brand" href="#">BSC</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="registerBSC.html">Crea tu reporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mis reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="profilelogged.php">Mi perfil</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a class="btn btn-light action-button" role="button" href="#">Cerrar sesión</a>
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
                                        <th class="text-light bg-dark">Column 1</th>
                                        <th class="text-light bg-dark">Column 2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-white">Cell 1</td>
                                        <td class="bg-white">Cell 2</td>
                                    </tr>
                                    <tr></tr>
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
</body>

</html>
