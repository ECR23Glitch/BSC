<!DOCTYPE html>
<html lang="en">
<!--Formulario de registro de usuario-->
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
    <section class="login-dark" style="background: url(&quot;assets/img/mountain_bg.jpg&quot;) center;">
        <!--Formulario de registro de usuario-->
        <form method="post" style="color: var(--light);background: var(--gray-dark);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-people" style="color: rgb(252,252,252);"></i></div>
            <!--Email-->
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Correo electronico"></div>
            <!--Nombre-->
            <div class="form-group"><input class="form-control" type="text" name="nombreus" placeholder="Nombre"></div>
            <!--Apellido paterno-->
            <div class="form-group"><input class="form-control" type="text" name="appus" placeholder="Apellido Paterno"></div>
            <!--Apellido materno-->
            <div class="form-group"><input class="form-control" type="text" name="apmus" placeholder="Apellido Materno"></div>
            <!--Nombre de la organización-->
            <div class="form-group"><input class="form-control" type="text" name="orgus" placeholder="Organización"></div>
            <!--Descripción de la persona-->
            <div class="form-group"><textarea class="form-control" name="desus" placeholder="Descripcion sobre ti"></textarea></div>
            <!--Contraseña-->
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
            <!--Botón de registrar-->
            <div class="form-group"><button class="btn btn-primary btn-block rubberBand animated" type="submit" style="background: rgb(255,255,255);color: rgb(0,0,0);">Registrate</button></div><a class="forgot" href="#">Ya tienes una cuenta, inicia sesión</a>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstreap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
