<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Incluir el archivo de conexión a la base de datos
    include('conectar_bd.php');

    $app->get('/facturas_json', function () use ($app) {
        // Conectar a la base de datos y ejecutar la consulta para obtener facturas
        $conexion = conectar_bd();

        $sql = (
            "SELECT 
            f.ID_FACTURA, 
            f.FECHA_FACTURA, 
            CONCAT(c.NOMBRE_CLIENTE, ' ', c.APELLIDO_CLIENTE) AS NOMBRE_CLIENTE, 
            f.SUBTOTAL_FACTURA, 
            f.IVA_FACTURA, 
            f.TOTAL_FACTURA 
        FROM 
            factura f 
        JOIN 
            cliente c ON f.CLIENTE_FACTURA = c.ID_CLIENTE");
        $result = $conexion->query($sql);

        // Obtener resultados de la consulta
        $facturas = $result->fetch_all(PDO::FETCH_ASSOC);

        // Cerrar cursor y conexión a la base de datos
        $result = null;
        $conexion = null;

        // Verificar si hay resultados
        if (count($facturas) > 0) {
            // Convertir resultados a formato JSON y enviar la respuesta
            echo json_encode($facturas, JSON_PRETTY_PRINT);
        } else {
            echo json_encode(array("message" => "No se encontraron resultados"));
        }
    });
    ?>

</body>

</html>