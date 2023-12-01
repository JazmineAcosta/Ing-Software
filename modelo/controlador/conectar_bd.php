<?php
// Verifica si la función conectar_bd() ya está declarada
if (!function_exists('conectar_bd')) {
  function conectar_bd()
  {
    // Resto del código de la función conectar_bd()
    global $conexion;
    $elServer = 'localhost:3307';
    $elUsr = 'root';
    $elPw = '';
    $laBd = 'sistema_facturacion';

    //Conectar
    $conexion = mysqli_connect(
      $elServer,
      $elUsr,
      $elPw,
      $laBd
    );
    $conexion->set_charset('utf8');

    //Seleccionar la BD a utilizar
    mysqli_select_db($conexion, $laBd);

    if (mysqli_connect_errno()) {
      echo 'No se pudo conectar a la base de datos : ' .
        mysqli_connect_error();
    }
    return $conexion;
  }
}
