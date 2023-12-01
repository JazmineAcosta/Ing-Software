<?php
// Incluir el archivo de conexión a la base de datos
include('../Ing-Software/controlador/conectar_bd.php');

// Verificar si se han enviado datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta SQL para obtener la contraseña almacenada en formato MD5
    $sql = "SELECT * FROM usuario WHERE usuario = '$username'";
    $result = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password_usuario'];

        // Verificar si la contraseña ingresada coincide con la almacenada (en formato MD5)
        if (md5($password) === $storedPassword) {
            // Usuario autenticado
            session_start();
            $_SESSION['username'] = $username;
            // Comprobar si es la primera vez
            echo json_encode(['success' => true]);

            exit();
        } else {
            // Credenciales inválidas
            echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos. Por favor, intenta de nuevo.']);
        }
    } else {
        // Credenciales inválidas
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos. Por favor, intenta de nuevo.']);
    }
}
