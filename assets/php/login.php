<?php
if (isset($_POST['email'])) {
    include('conexion.php');
    // Conecta a la bd
    $db = new BD();
    $pdo = $db->connect();

    // datos entrantes
    $correing = $_POST['email'];
    $password = $_POST['password'];

    /* Ejecuta una sentencia preparada pasando un array de valores */
    $query = "SELECT id,email,contr, org, descripcion FROM cliente WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$correing]);

    // objecto de respuesta (JSON)
    $respuesta = ['datos_correctos' => false] ;
    // usuario encontrado
    if ($stmt->rowCount() > 0) {
        // Datos del usuario en arreglo asociativo
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // verifica contraseña
        if (password_verify($password, $user['contr'])) {
            // inicia sesión
            session_start();
            // propiedades de la sesión del usuario
            $_SESSION['usuario']['id'] = $user['id'];
            $_SESSION['usuario']['correo'] = $user['email'];
            $_SESSION['usuario']['desc'] = $user['descripcion'];
            $_SESSION['usuario']['orga'] = $user['org'];
            // respuesta al cliente
            $respuesta['datos_correctos'] = true;
        }
    }
    // cierra la conexión
    $pdo = null;
    // imprime respuesta en formato JSON
    echo json_encode($respuesta);
} else {
    echo "<h1>ño</h1>";
}
