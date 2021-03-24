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

    <section class="login-dark" style="background: url(&quot;assets/img/mountain_bg.jpg&quot;) center;">

            <form id="finanzas" method="post" style="background: var(--gray-dark);">
              <h2 class="text-center">Finanzas</h2>
              <div class="illustration"><i class="icon ion-ios-paper-outline" style="border-color: rgb(255,255,255);color: rgb(255,255,255);"></i></div>
              <div class="form-group">
                <input class="form-control" type="text" name="obj" placeholder="Objetivo" maxlength="45">
              </div>
              <div class="form-group">
                <select class="form-control" name="fm">
                  <optgroup class="form-group" style="color:black;" label="Frecuencia de medida">
                    <option value="Anual" style="color:black;">Anual</option>
                    <option value="Mensual" style="color:black;">Mensual</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" name="ind">
                  <optgroup class="form-group" style="color:black;" label="Selecciona tu indicador">
                    <?php $pfin = $consultas->damelosindicadoresconareas(1);
                        $area = $consultas->dameelarea(1);
                        foreach ($area as $a) {
                          $ar = $a['arid'];
                        }
                        foreach ($pfin as $f) {
                     ?>
                    <option value="<?php echo $f['id']; ?>" style="color:black;"><?php echo $f['nombre']; ?></option>
                  <?php } ?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group"><input class="form-control" type="number" name="meta" placeholder="Meta" maxlength="6"></div>
              <div class="form-group"><input class="form-control" type="number" name="resu" placeholder="Resultado actual" maxlength="6"></div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 250;" id="bnext1">Siguiente</button>
                <a class="btn btn-primary text-dark bg-white border rounded" role="button" data-bss-hover-animate="rubberBand" style="width: 250px;" href="index.html">Cancelar</a>
              </div>
            </form>

            <form id="cliente" method="post" style="background: var(--gray-dark);">
              <h2 class="text-center">Clientes</h2>
              <div class="illustration"><i class="icon ion-ios-paper-outline" style="border-color: rgb(255,255,255);color: rgb(255,255,255);"></i></div>
              <div class="form-group">
                <input class="form-control" type="text" name="obj" placeholder="Objetivo" maxlength="45">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Frecuencia de medida">
                    <option value="Anual" style="color:black;">Anual</option>
                    <option value="Mensual" style="color:black;">Mensual</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Selecciona tu indicador">
                    <?php $pfin = $consultas->damelosindicadoresconareas(2);
                        $area = $consultas->dameelarea(2);
                        foreach ($area as $a) {
                          $ar = $a['arid'];
                        }
                        foreach ($pfin as $f) {
                     ?>
                    <option value="<?php echo $f['id']; ?>" style="color:black;"><?php echo $f['nombre']; ?></option>
                  <?php } ?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group"><input class="form-control" type="number" name="meta" placeholder="Meta" maxlength="6"></div>
              <div class="form-group"><input class="form-control" type="number" name="resu" placeholder="Resultado actual" maxlength="6"></div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 250;" id="bnext2">Siguiente</button>
              </div>
            </form>

            <form id="procesos" method="post" style="background: var(--gray-dark);">
              <h2 class="text-center">Procesos</h2>
              <div class="illustration"><i class="icon ion-ios-paper-outline" style="border-color: rgb(255,255,255);color: rgb(255,255,255);"></i></div>
              <div class="form-group">
                <input class="form-control" type="text" name="obj" placeholder="Objetivo" maxlength="45">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Frecuencia de medida">
                    <option value="Anual" style="color:black;">Anual</option>
                    <option value="Mensual" style="color:black;">Mensual</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Selecciona tu indicador">
                    <?php $pfin = $consultas->damelosindicadoresconareas(3);
                        foreach ($pfin as $f) {
                     ?>
                    <option value="<?php echo $f['id']; ?>" style="color:black;"><?php echo $f['nombre']; ?></option>
                  <?php } ?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group"><input class="form-control" type="text" name="number" placeholder="Meta" maxlength="6"></div>
              <div class="form-group"><input class="form-control" type="text" name="number" placeholder="Resultado actual" maxlength="6"></div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 250;" id="bnext3">Siguiente</button>
              </div>
            </form>

            <form id="crecimiento" method="post" style="background: var(--gray-dark);">
              <h2 class="text-center">Crecimiento</h2>
              <div class="illustration"><i class="icon ion-ios-paper-outline" style="border-color: rgb(255,255,255);color: rgb(255,255,255);"></i></div>
              <div class="form-group">
                <input class="form-control" type="text" name="obj" placeholder="Objetivo" maxlength="45">
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Frecuencia de medida">
                    <option value="Anual" style="color:black;">Anual</option>
                    <option value="Mensual" style="color:black;">Mensual</option>
                  </optgroup>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control">
                  <optgroup class="form-group" style="color:black;" label="Selecciona tu indicador">
                    <?php $pfin = $consultas->damelosindicadoresconareas(4);
                        foreach ($pfin as $f) {
                     ?>
                    <option value="<?php echo $f['id']; ?>" style="color:black;"><?php echo $f['nombre']; ?></option>
                  <?php } ?>
                  </optgroup>
                </select>
              </div>
              <div class="form-group"><input class="form-control" type="number" name="meta" placeholder="Meta" maxlength="6"></div>
              <div class="form-group"><input class="form-control" type="number" name="resu" placeholder="Resultado actual" maxlength="6"></div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" data-bss-hover-animate="rubberBand" type="submit" style="color: rgb(0,0,0);background: rgb(255,255,255);width: 250;" id="bnext4">Finalizar</button>
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
        $('#cliente').hide();
        $("#procesos").hide();
        $("#crecimiento").hide();
        $("#bnext4").prop('disabled',true);
        $("#bnext2").prop('disabled',true);
        $("#bnext1").prop('disabled',true);
        $("#bnext3").prop('disabled',true);
      });
    </script>
    <script type="text/javascript">
    $("form").validate({
      rules:{
        obj:{
          required:true,
          minlength:5
        },
        meta:{
          required:true,
          number:true
        },
        resu:{
          required:true,
          number:true
        }
      },
      messages:{
        obj:{
          required:"Ingresa tu objetivo porfavor",
          minlength:"Minimo 5 letras para ello"
        },
        meta:{
          required:"Ingresa tu meta porfavor",
          number:"No olvides ingresar solo numeros"
        },
        resu:{
          required:"Ingresa tu resultado actual",
          number:"No olvides ingresar solo numeros"
        }
      }
    });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#finanzas").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#bnext1').prop('disabled',false);
          else
            $('#bnext1').prop('disabled',true);
        });

        $("#bnext1").click(function(e){
          e.preventDefault();
          $("#finanzas").hide();
          $("#cliente").show(1000);
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#cliente").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#bnext2').prop('disabled',false);
          else
            $('#bnext2').prop('disabled',true);
        });

        $("#bnext2").click(function(e){
          e.preventDefault();
          $("#cliente").hide();
          $("#procesos").show(1000);
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#procesos").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#bnext3').prop('disabled',false);
          else
            $('#bnext3').prop('disabled',true);
        });

        $("#bnext3").click(function(e){
          e.preventDefault();
          $("#procesos").hide();
          $("#crecimiento").show(1000);
        });
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

        $("#procesos").bind('change keyup',function(){
          if($(this).validate().checkForm())
            $('#bnext4').prop('disabled',false);
          else
            $('#bnext4').prop('disabled',true);
        });

        $("#bnext4").click(function(e){
          e.preventDefault();
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        var areaid = 1;
        var user = <?php echo $idUsuario; ?>;
        $("#bnext1").click(function(e){
          e.preventDefault();
          $("#finanzas").submit(function(){
            let inputs = new FormData(this);
            $.ajax({
              type: "POST",
              url: "assets/php/registrop.php",
              data:{
                inputs, 'arid':areaid,'user':user
              },
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'JSON',
              success: function(data) {
                if (data['status'] == true) {
                  toastr["success"]("Se ha creado tu reporte en finanzas");
                  console.debug(data['msg']);
                } else {
                    toastr["warning"]("No se ha podido registrar");
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
      });
    </script>
</body>

</html>
