<?php
  session_start();
  $idUsuario = $_SESSION['usuario']['id'];
  include('conexion.php');
  $db = new BD();
  $pdo = $db->connect();
  $porce = 0;
  // objeto de respuesta a clientel

        $user_table = 'crecimiento';
        $obj = $_POST['obj'];
        $fm = $_POST['fm'];
        $indi = $_POST['ind'];
        $met = $_POST['met'];
        $resa = $_POST['resu'];

        //Estas metricas se evaluan
        $sta = "Normal";
        $recom = "Sigue asi";
        $porce = ($resa * 100)/$met;
        //Crecimiento
        If ($indi == 19)
        {
          if($porce <= 60)
          {
            $sta = "Exitoso";
            $recom = "Sigue asi, tus estrategias fucionan adecuadamente";
          }

          elseif ($porce >60 and $porce<100)
          {
            $sta ="Precaución";
            $recom = "Impulsa el coaching, para certificar a tus empleados";
          }
          elseif ($porce >=100)
          {
            $sta = "Riesgo";
            $recom ="Define los perfiles de competencias de tus empleados, identifica fortalezas y debilidades";

          }
        }
        else
        {
          if($porce <= 60)
          {
            $sta = "Riesgo";
            $recom ="Define los perfiles de competencias de tus empleados, identifica fortalezas y debilidades";
          }

          elseif ($porce >60 and $porce<100)
          {
            $sta ="Precaución";
            $recom = "Impulsa el coaching, para certificar a tus empleados";
          }
          elseif ($porce >=100)
          {
            $sta = "Exitoso";
            $recom = "Sigue asi, tus estrategias fucionan adecuadamente";
          }
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
