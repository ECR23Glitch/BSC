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
    if(isset($_POST['email'])){
      $user_table = 'cliente';

      $nom = $_POST['nombreus'];
      $app = $_POST['appus'];
      $apm = $_POST['apmus'];
      $email = $_POST['email'];
      $orus = $_POST['orgus'];
      $dess = $_POST['desus'];
      $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

      $query = "INSERT INTO $user_table
      (nomcli, appaterno,apmaterno,org,email,descripcion,contr)
      VALUES(:nomcli, :app, :apm, :org, :email, :descripcion, :contr)";

      $binding=[
        ':nomcli'=>$nom,
        ':app'=>$app,
        ':apm'=>$apm,
        ':org'=>$orus,
        ':email'=>$email,
        ':descripcion'=>$dess,
        ':contr'=>$pass
      ];

      $stmt = $pdo->prepare($query);
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
