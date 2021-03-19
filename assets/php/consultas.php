<?php
  require_once('conexion.php');
  class consultas
  {
    private $pdo;

    public function __construct()
    {
        $db = new BD();
        $this->pdo = $db->connect();
    }

    public function __destruct()
    {
        // close the database connection
        $this->pdo = null;
    }

    public function datosUsuario($iduser)
    {
      $tabla = 'cliente';
      $query = "SELECT * FROM $tabla WHERE id = ?";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute([$iduser]);

      return $stmt->fetch();
    }

    public function damelasareas(){
      $tabla = 'area';
      $query = "SELECT * FROM $tabla";
      $stmt = $this->pdo->prepare($query);
      $stmt->execute();

      return $stmt->fetchAll();
    }

    public function damelosindicadoresconareas($ideare){
      $tabla = 'indicador';
      $tablaunion = 'area';
      $query = "SELECT * FROM $tabla INNER JOIN $tablaunion where $tabla.id=?";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute([$ideare]);

      return $stmt->fetchAll();
    }
  }
 ?>
