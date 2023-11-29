<?php
include("../Ing-Software/controlador/conectar_bd.php");
global $conexion;

function validarUsuario($usuario, $password)
{
    global $conexion;

    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE username = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            return $user['id_tipo_usuario'];
        } else {
            return 'password_no_coincide';
        }
    } else {
        return 'usuario_no_encontrado';
    }
}
