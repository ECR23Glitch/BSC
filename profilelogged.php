<!DOCTYPE html>
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
                        <li class="nav-item"><a class="nav-link" href="registerBSC.html">Crea tu reporte</a></li>
                        <li class="nav-item"><a class="nav-link" href="reports.php">Mis reportes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mi perfil</a></li>
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group"><label for="search-field"></label></div>
                    </form><a class="btn btn-light action-button" role="button" href="#">Cerrar sesión</a>
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
                                            <h3 class="name" style="color: var(--white);">Tu nombre</h3>
                                            <p class="title" style="color: rgb(0,0,0);">TU ORGANIZACIÓN</p>
                                            <p class="description" style="color: var(--white);">Tu descripcion</p>
                                        </div>
                                    </div>
                                    <!--Datos de reportes-->
                                    <div class="col-md-6 col-lg-6 item">
                                        <div data-bss-hover-animate="wobble" class="box" style="text-align: center;background: var(--gray);">
                                            <h3 class="name" style="color: var(--white);">Tus reportes</h3>
                                            <p class="title" style="color: rgb(0,0,0);">Muestra tus reportes mas recientes</p>
                                            <p class="description" style="color: rgb(255,255,255);">Reportes a fecha:</p>
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
</body>

</html>
