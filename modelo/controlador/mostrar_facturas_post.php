<?php

// Incluir el archivo de conexión a la base de datos
include('conectar_bd.php');
conectar_bd();

// Verifica si la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtén el contenido del cuerpo de la solicitud
    $input = file_get_contents("php://input");

    // Intenta decodificar el contenido como JSON
    $data = json_decode($input, true);

    // Verifica si la decodificación fue exitosa
    if ($data !== null) {
        // Accede a los valores del objeto JSON
        $status = isset($data['status']) ? $data['status'] : null;
        $mensaje = isset($data['mensaje']) ? $data['mensaje'] : null;
        $newValue = isset($data['newValue']) ? $data['newValue'] : null;
        $ID_FACTURA_cambiada = isset($data['ID_FACTURA_cambiada']) ? $data['ID_FACTURA_cambiada'] : null;

        // Verifica la presencia de datos obligatorios
        if ($status !== null && $mensaje !== null && $newValue !== null && $ID_FACTURA_cambiada !== null) {
            // Hacer algo con los valores (por ejemplo, imprimirlos)
            echo "status: $status\n";
            echo "mensaje: $mensaje\n";
            echo "newValue: $newValue\n";
            echo "ID_FACTURA_cambiada: $ID_FACTURA_cambiada\n";

            $sql = "UPDATE factura
            SET
                SUBTOTAL_FACTURA = ?
            WHERE
                ID_FACTURA = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $newValue, $ID_FACTURA_cambiada); // s: string, i: integer

            // Ejecuta la consulta
            if ($stmt->execute()) {
                echo "Registro actualizado exitosamente";
            } else {
                echo "Error al actualizar el registro: " . $stmt->error;
            }

            // Cierra la conexión a la base de datos
            $stmt->close();
            $conn->close();
        } else {
            // Datos incompletos en la solicitud JSON
            http_response_code(400); // Código de respuesta: Bad Request
            echo "Error: Datos incompletos en la solicitud JSON.";
        }
    } else {
        // Error en la decodificación JSON
        http_response_code(400); // Código de respuesta: Bad Request
        echo "Error al decodificar el JSON.";
    }
} else {
    // La solicitud no es de tipo POST
    http_response_code(405); // Código de respuesta: Method Not Allowed
    echo "La solicitud no es de tipo POST.";
}
