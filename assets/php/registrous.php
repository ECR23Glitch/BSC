<?php
  include('conexion.php');

  $db = new DB();
  $pdo = $db->connect();
  // objeto de respuesta a cliente
  $jsonRes = [
    'status' => false,
    'msg' => null
  ];
  try{
    if(isset($_POST['email'])){
      
    }
  }
 ?>
