<?php
  include('assets/php/consultas.php');

  $consultas = new consultas();
  //Datos usuario vistas
  $areas = $consultas->damelasareas();

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
  <?php foreach ($areas as $area): ?>
    <section id="finanzas" class="login-dark" style="background: url(&quot;assets/img/mountain_bg.jpg&quot;) center;">
            <form id="registroperspectiva" method="post" style="background: var(--gray-dark);">
            <h2 class="text-center"><?php echo $area['nombre']; ?></h2>
            <div class="illustration"><i class="icon ion-ios-paper-outline" style="border-color: rgb(255,255,255);color: rgb(255,255,255);"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="obj" placeholder="Objetivo"></div>
            <div class="form-group"><input class="form-control" type="text" name="ind" placeholder="Inductor"></div>
            <div class="form-group">
              <select class="form-control">
                <optgroup class="form-control" label="Selecciona tu indicador">
                  <option class="text-dark">Venta total diaria en pesos</option>
                  <option>Unidades diarias vendidas</option>
                  <option>Venta promedio por cliente</option>
                  <option>Venta acumulada del mes</option>
                </optgroup>
              </select>
            </div>
            <div class="form-group"><input class="form-control" type="text" name="accpri" placeholder="Accion primaria"></div>
            <div class="form-group"><input class="form-control" type="text" name="meta" placeholder="Meta"></div>
            <div class="form-group"><input class="form-control" type="text" name="resu" placeholder="Resultado"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 250;">Siguiente</button></div>
            </form>
    </section>
  <?php endforeach; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>
