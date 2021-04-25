<?php
  session_start();
  $idUsuario = $_SESSION['usuario']['id'];
  include('conexion.php');
  $db = new BD();
  $pdo = $db->connect();
  $porce = 0;
  // objeto de respuesta a clientel

        $user_table = 'finanzas';
        $obj = $_POST['obj'];
        $fm = $_POST['fm'];
        $indi = $_POST['ind'];
        $met = $_POST['met'];
        $resa = $_POST['resu'];
        $tes = $_POST['te'];
        //Estas metricas se evaluan
        $sta = "Normal";
        $recom = "Sigue asi";
        $det = $_POST['dt'];
        $porce = ($resa * 100)/$met;
        //finanzas
        if($porce <= 60)
        {
        	$sta = "Riesgo";
        	$recom ="Fideliza clientes (tarjetas de lealtad, beneficios, descuentos)";
        }

        elseif ($porce >60 and $porce<100)
        {
        	$sta ="Precaución";
        	$recom = "Ofrece diferentes formas y facilidades de pago";
        }
        elseif ($porce >=100)
        {
        	$sta = "Exitoso";
        	$recom = "Sigue asi, tus estrategias fucionan adecuadamente";
        }

        $binding=[
          ':obj'=>$obj,
          ':fm'=>$fm,
          ':ind'=>$indi,
          ':met'=>$met,
          ':resa'=>$resa,
          ':idus'=>$idUsuario,
          ':sta'=>$sta,
          ':recom'=>$recom,
          ':te' => $tes,
          ':det' => $det
        ];

        $query = "INSERT INTO $user_table
        (TipEstrategia, DescEstrategia,obj, meta, id_ind, frec_med, resu_act, sta, recom, cliid)
        VALUES(:te,:det,:obj, :met, :ind, :fm, :resa, :sta, :recom, :idus)";

        $stmt = $pdo->prepare($query);
        if($stmt->execute($binding)){
          echo true;
        }
        else{
          echo false;
        }

 ?>
