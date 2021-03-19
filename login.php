<?php
  session_start();
  if(isset($_SESSION['usuario']))
    Header("Location: profilelogged.php");
?>

<html lang="en">

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
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
    <section class="login-dark" style="background: url(&quot;assets/img/mountain_bg.jpg&quot;) center / auto;">
        <form id="logform" method="post" style="background: var(--gray-dark);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color: var(--light);"></i></div>
            <!--Email-->
            <div class="form-group"><input maxlength="30" class="form-control" type="email" name="email" id="email" placeholder="Correo electrónico" style="color: rgb(255,255,255);"></div>
            <!--Contraseña-->
            <div class="form-group"><input maxlength="10" class="form-control" type="password" name="password" id="password" placeholder="Contraseña" style="color: rgb(255,255,255);"></div>
            <div class="form-group">
              <button id="blog" class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="background: rgb(255,255,255);color: rgb(14,14,14);">Ingresar</button>
              <br>
              <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="index.html">Cancelar</a>
            </div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#blog').prop("disabled",true);
        $('#logform').validate({
          rules:{
            email:{
              required:true,
              email:true
            },
            password:{
              required:true,
              minlength:8
            }
          },
          messages:{
            email:{
              required:"Ingresa tu correo electronico con el que te registraste",
              email: "Formato debe de ser abc@dominio.ext"
            },
            password:{
              required:"Ingresa tu contraseña",
              minlength:"Contraseña minimo de 10 caracteres"
            }
          }
        });

        $("#logform").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#blog').prop("disabled",false);
          else
            $('#blog').prop("disabled",true);
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
      var toastOptions = {
        closeButton: false,
        debug: false,
        newestOnTop: false,
        progressBar: false,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "1000",
        timeOut: "5000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut"
      };

      $('#logform').submit(function(event) {
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "assets/php/login.php",
          data: $(this).serialize(),
          dataType: "JSON",
          success: function(respuesta) {
            if (respuesta['datos_correctos'] == false) {
              toastr["warning"]("Usuario o contraseña incorrectos", "No se pudo iniciar sesión");
            } else {
              window.location.href = 'profilelogged.php';
            }
          },
          error: function(jqXHR, exception, errorThrown) {
            var msg = '';
            if (jqXHR.status === 0) {
              msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
              msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
              msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
              msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
              msg = 'Time out error.';
            } else if (exception === 'abort') {
              msg = 'Ajax request aborted.';
            } else {
              msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            toastr["error"]('Ha ocurrido un error');
          }
        });
        toastr.options = toastOptions;
      });
    });
    </script>
</body>

</html>
