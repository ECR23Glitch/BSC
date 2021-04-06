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


    public function damelosindicadoresconareas($ideare){
      $tabla = 'indicador';
      $tablaunion = 'area';
      $query = "SELECT * FROM $tabla where arid=?";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute([$ideare]);

      return $stmt->fetchAll();
    }

    public function damelosreportes($are, $usuario){
      $query = "SELECT * FROM $are INNER JOIN indicador where cliid=$usuario AND id_ind=indicador.id";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute();

      return $stmt->fetchAll();
    }

    public function cuantosReportesC($usuario){
      $query = "SELECT count(*) RepC FROM clientes where cliid=$usuario";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute();

      return $stmt->fetchAll();
    }

    public function cuantosReportesCr($usuario){
      $query = "SELECT count(*) RepCr FROM crecimiento where cliid=$usuario";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute();

      return $stmt->fetchAll();
    }

    public function cuantosReportesF($usuario){
      $query = "SELECT count(*) RepF FROM finanzas where cliid=$usuario";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute();

      return $stmt->fetchAll();
    }

    public function cuantosReportesP($usuario){
      $query = "SELECT count(*) RepP FROM procesos where cliid=$usuario";
      $stmt = $this->pdo->prepare($query);
      $stmt -> execute();

      return $stmt->fetchAll();
    }
  }
 ?>
