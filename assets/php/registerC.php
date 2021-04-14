<?php
  session_start();
  $idUsuario = $_SESSION['usuario']['id'];
  include('conexion.php');
  $db = new BD();
  $pdo = $db->connect();
  $porce = 0;
  // objeto de respuesta a clientel

        $user_table = 'clientes';
        $obj = $_POST['obj'];
        $fm = $_POST['fm'];
        $indi = $_POST['ind'];
        $met = $_POST['met'];
        $resa = $_POST['resu'];

        //Estas metricas se evaluan
        $sta = "Normal";
        $recom = "Sigue asi";
        $porce = ($resa * 100)/$met;
        //Clientes
        if($porce <= 60)
        {
        	$sta = "Riesgo";
        	$recom ="Resuelve problemas con el cliente desde el primer momento y promocinate através de redes sociales";
        }

        elseif ($porce >60 and $porce<100)
        {
        	$sta ="Precaución";
        	$recom = "Crea interés con las características distintivas de tu producto y/o servicio";
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
          ':recom'=>$recom
        ];

        $query = "INSERT INTO $user_table
        (obj, meta, id_ind, frec_med, resu_act, sta, recom, cliid)
        VALUES(:obj, :met, :ind, :fm, :resa, :sta, :recom, :idus)";

        $stmt = $pdo->prepare($query);
        if($stmt->execute($binding)){
          echo true;
        }
        else{
          echo false;
        }

 ?>