<?php
  class BD{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host     = '162.241.60.205;port=3306'; // se asigna el valor al atributo host
        $this->db       = 'samurai1_bsc'; // se asigna el valor al atributo db
        $this->user     = "samurai1_admin"; // se asigna el valor al atributo user
        $this->password = "admineljale"; // se asigna el valor al atributo password
    }

    function connect(){
      try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db; // se conecta a la bd
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            // Se crea la conexion
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            // set the character set properly.
            $pdo->query('SET NAMES gbk');
            // retorna el resultado del objeto
            return $pdo;
        } catch (PDOException $e) { // se atrapa el error
            print_r('Error connection: ' . $e->getMessage()); // se imprime el error
        }
    }
  }

 ?>
