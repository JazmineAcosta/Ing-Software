<?php

// Incluir el archivo de conexión a la base de datos
include('controlador/conectar_bd.php');
conectar_bd();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtener datos del POST    
    $idFactura = $_POST['idFacturaCons'];

    //Realizar Consulta
    $sql = "SELECT * FROM factura WHERE id_factura = '$idFactura'";
    $result = $conexion->query($sql);

    //Verificar resultado
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        // Guardar los campos en un array asociativo
        $facturaData = array(
            'idFactura' => $row['id_factura'],
            'fechaFactura' => $row['fecha_factura'],
            'idTipoFac' => $row['id_tipofac'],
            'clienteFactura' => $row['cliente_factura'],
            'totalFactura' => $row['total_factura'],
            'descuentoFactura' => $row['descuento_factura'],
            'ivaFactura' => $row['iva_factura'],
            'subtotalFactura' => $row['subtotal_factura'],
            'saldoFactura' => $row['saldo_factura'],
            'estadoFactura' => $row['estado_factura']
        );

        // Convertir el array en una cadena JSON
        $jsonFactura = json_encode($facturaData);

        // Mostrar o enviar la cadena JSON según tus necesidades
        echo $jsonFactura;
    } else {
        echo json_encode(array('error' => 'No se encontraron resultados'));
    }   
}