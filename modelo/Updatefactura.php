<?php

// Incluir el archivo de conexión a la base de datos
include('controlador/conectar_bd.php');
conectar_bd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtener datos del POST    
    $idFactura = $_POST['idFacturaAct'];    
    $nuevoTotalFactura = $_POST['TotalFacturaAct'];
    $nuevoDescuentoFactura = $_POST['DescuentoFacturaAct'];
    $nuevoIvaFactura = $_POST['IvaFacturaAct'];
    $nuevoSubtotalFactura = $_POST['SubtotalFacturaAct'];
    $nuevoSaldoFactura = $_POST['SaldoFacturaAct'];
    $nuevoEstadoFactura = $_POST['EstadoFacturaAct'];

    //Realizar Consulta
     // Realizar la consulta de actualización
     try {
        // Realizar la consulta de actualización
        $sql = "UPDATE factura
        SET       
          total_factura = $nuevoTotalFactura,
          descuento_factura = $nuevoDescuentoFactura,
          iva_factura = $nuevoIvaFactura,
          subtotal_factura = $nuevoSubtotalFactura,
          saldo_factura = $nuevoSaldoFactura,
          estado_factura = '$nuevoEstadoFactura'
        WHERE
          id_factura = $idFactura";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo json_encode(array('success' => 'La factura se actualizó correctamente'));
        } else {
            echo json_encode(array('error' => 'La factura no se actualizó correctamente'));
        }
    } catch (Exception $e) {
        echo json_encode(array('error' => 'La factura no se actualizó correctamente'));
    }
}