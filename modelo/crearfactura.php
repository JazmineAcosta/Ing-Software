<?php

// Incluir el archivo de conexión a la base de datos
include('controlador/conectar_bd.php');
conectar_bd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $fechaFactura = $_POST['fechaFactura'];
    $idTipoFac = $_POST['idTipoFac'];
    $clienteFactura = $_POST['clienteFactura'];
    $totalFactura = $_POST['totalFactura'];
    $descuentoFactura = $_POST['descuentoFactura'];
    $ivaFactura = $_POST['ivaFactura'];
    $subtotalFactura = $_POST['subtotalFactura'];
    $saldoFactura = $_POST['saldoFactura'];
    $estadoFactura = $_POST['estadoFactura'];    

    // Realizar la consulta de inserción
    try{
        $sql = "INSERT INTO factura (fecha_factura, id_tipofac, cliente_factura, total_factura, descuento_factura, iva_factura, subtotal_factura, saldo_factura, estado_factura)
        VALUES ('$fechaFactura', $idTipoFac, $clienteFactura, $totalFactura, $descuentoFactura, $ivaFactura, $subtotalFactura, $saldoFactura, '$estadoFactura')";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo json_encode(array('success' => 'La factura se creó correctamente'));
        } else {
            echo json_encode(array('error' => 'Error al crear la factura '));
        }
    }catch(Exception $e) {
        echo json_encode(array('error' => 'La factura no se creó correctamente'));
    }

}

?>
