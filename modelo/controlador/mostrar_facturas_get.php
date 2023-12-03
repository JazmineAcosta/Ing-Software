<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Include the Composer autoloader
    require 'vendor/autoload.php';

    // Include the file for database connection
    include('conectar_bd.php');

    // Create a Slim instance
    $app = new \Slim\App();

    // Define the route
    $app->get('/facturas_json', function ($request, $response) {
        // Your existing code for handling the route
        // Connect to the database
        $conexion = conectar_bd();

        // Query to fetch invoices
        $sql = "SELECT 
                f.ID_FACTURA, 
                f.FECHA_FACTURA, 
                CONCAT(c.NOMBRE_CLIENTE, ' ', c.APELLIDO_CLIENTE) AS NOMBRE_CLIENTE, 
                f.SUBTOTAL_FACTURA, 
                f.IVA_FACTURA, 
                f.TOTAL_FACTURA 
            FROM 
                factura f 
            JOIN 
                cliente c ON f.CLIENTE_FACTURA = c.ID_CLIENTE";

        // Execute the query
        $result = $conexion->query($sql);

        // Fetch the results
        $facturas = $result->fetch_all(PDO::FETCH_ASSOC);

        // Close the database connection
        $conexion = null;

        // Verificar si hay resultados
        if (!empty($facturas)) {
            // Convertir resultados a formato JSON y enviar la respuesta
            return $response->withJson($facturas, 200, JSON_PRETTY_PRINT);
        } else {
            return $response->withJson(array("message" => "No se encontraron resultados"), 404);
        }
    });

    // Run the Slim application
    $app->run();

    ?>

</body>

</html>