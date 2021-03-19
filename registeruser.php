<!DOCTYPE html>
<html lang="en">
<!--Formulario de registro de usuario-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<<<<<<< HEAD
    <title>BSC</title>
=======
    <title>bsc</title>
    <!--Librerias-->
>>>>>>> 97fd3e93ed2923944c6627e41872ef9b59b3f6e8
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/toastr.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="login-dark" style="background: url(&quot;assets/img/mountain_bg.jpg&quot;) center;">
<<<<<<< HEAD
        <form id="registro" method="post" style="color: var(--light);background: var(--gray-dark);">
=======
        <!--Formulario de registro de usuario-->
        <form method="post" style="color: var(--light);background: var(--gray-dark);">
>>>>>>> 97fd3e93ed2923944c6627e41872ef9b59b3f6e8
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
<<<<<<< HEAD
            <div class="form-group">
              <button id="registrous" class="btn btn-primary btn-block rubberBand animated" type="submit" style="background: rgb(255,255,255);color: rgb(0,0,0);">Registrate</button>
              <br>
              <button id="salir" class="btn btn-primary btn-block rubberBand animated" type="submit" style="background: rgb(255,255,255);color: rgb(0,0,0);">Cancelar</button>
            </div>
            <a class="forgot" href="login.html">Ya tienes una cuenta, inicia sesión</a>
=======
            <!--Botón de registrar-->
            <div class="form-group"><button class="btn btn-primary btn-block rubberBand animated" type="submit" style="background: rgb(255,255,255);color: rgb(0,0,0);">Registrate</button></div><a class="forgot" href="#">Ya tienes una cuenta, inicia sesión</a>
>>>>>>> 97fd3e93ed2923944c6627e41872ef9b59b3f6e8
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#registrous").prop("disabled",true);
        $("salir").click(function(){

        });
        $("#registro").validate({
          rules:{
            email:{
              required:true,
              email:true
            },
            nombreus:{
              required: true,
              minlength:3
            },
            appus:{
              required: true,
              minlength:3
            },
            apmus:{
              required: true,
              minlength: 3
            },
            orgus:{
              required: true,
              minlength: 3
            },
            desus:{
              required:true,
              minlength:20
            },
            password:{
              required:true,
              minlength:8
            }
          },
          messages:{
            email:{
              required:"Ingresa un correo electronico",
              email:"Formato debe de ser abc@dominio.ext"
            },
            nombreus:{
              required: "Ingresa tu nombre",
              minlength:"Al menos debe de contener 3 letras"
            },
            appus:{
              required: "Ingresa tu apellido paterno",
              minlength:"Al menos debe de contener 3 letras"
            },
            apmus:{
              required: "Ingresa tu apellido materno",
              minlength: "Al menos debe de contener 3 letras"
            },
            orgus:{
              required: "Ingresa tu Organización",
              minlength: "Al menos debe de tener 3 letras"
            },
            desus:{
              required:"Ingresa una descripcion de ti",
              minlength:"Al menos debe de contener 20 letras"
            },
            password:{
              required:"Ingresa tu contraseña",
              minlength:"Al menos 8 caracteres debe de contener"
            }
          }
        });

        $("#registro").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#registrous').prop('disabled',false);
          else
            $('#registrous').prop('disabled',true);
        });

      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('registro').submit(function(event){
          event.preventDefault();
          let inputs = new FormData(this);
          $.ajax({
            type: "POST",
            url: "assets/php/registro-user.php",
            data: inputs,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function(data) {
              if (data['status'] == true) {
              // registro exitoso, redirecciona
              window.location.href = 'login.html';
              } else {
                  toastr["warning"]("No se ha podido registrar el usuario");
                  console.debug(data['msg']);
              }
            },
              error: function(jqXHR, exception, errorThrown) {
                toastr["error"]("Hubo un error al registrar");
                console.debug("Error: " + errorThrown);
            }
          });
          toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "2000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        });
      });
    </script>
</body>

</html>
