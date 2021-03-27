<?php
  include('conexion.php');
  $db = new BD();
  $pdo = $db->connect();
  // objeto de respuesta a cliente
  $jsonRes = [
    'status' => false,
    'msg' => null
  ];

    try{
      if(isset($_POST['obj'])){
        $user_table = 'crecimiento';
        $obj = $_POST['obj'];
        $fm = $_POST['fm'];
        $indi = $_POST['ind'];
        $met = $_POST['met'];
        $resa = $_POST['resu'];
        $ar = $_POST['arid'];
        $iduser = $_POST['user'];
        $sta = "Nada";
        $recom = "Nada";

        if( (($resa*100)/$met) < 65){
          $resul = "RIESGO";
        }elseif ((($resa*100)/$met) < 100) {
          $resul = "PRECAUCION";
        }else {
          $resul = "META CUMPLIDA";
        }
        $query = "INSERT INTO $user_table
        (obj, meta, id_ind, frec_med, resu_actu, sta, recom, cliid)
        VALUES(:obj, :met, :ind, :fm, :resa, :sta, :recom, :idus)";

        $binding=[
          ':obj'=>$obj,
          ':fm'=>$fm,
          ':ind'=>$indi,
          ':arid'=>$ar,
          ':met'=>$met,
          ':resa'=>$resa,
          ':idus'=>$iduser,
          ':sta'=>$sta,
          ':recom'=>$recom
        ];

        $stmt = $this->$pdo->prepare($query);
        if($stmt->execute($binding))
          $jsonRes['status'] = true;
        else
          $jsonRes['msg'] = $stmt->errorInfo();
      }
    }catch(PDOException $e){
      $jsonRes['msg'] = $e -> getMessage();
    }

    echo json_encode($jsonRes);

 ?>
