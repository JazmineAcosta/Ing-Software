<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include('controlador/conectar_bd.php');
conectar_bd();
require('../librerias/fpdf186/fpdf.php');
?>

<?php
class PDF extends FPDF
{
    function Header()
    {
        // Encabezado
        $this->SetFont('Times', 'B', 20);
        $this->Image('../librerias/assets/img/triangulosrecortados.png', -4, -6, 70); //imagen(archivo, png/jpg || x,y,tamaño)
        $this->setXY(60, 20);
        $this->Cell(175, 10, 'Reporte de Empleados', 0, 1, 'C', 0);
        $this->Image('../librerias/assets/img/E-Billing.png', 250, 10, 35); //imagen(archivo, png/jpg || x,y,tamaño)
        $this->Ln(40);
    }


    function Footer()
    {
        // Pie de página
        $this->SetY(-15);
        $this->SetFont('Times', 'I', 8);

        // Número de página
        //$this->Cell(0, 10, 'E-Billing - Empleados', 'C');
        $this->Cell(225, 10, mb_convert_encoding('Página ', 'ISO-8859-1', 'UTF-8') . $this->PageNo() . '/{nb}', 'C');
    }
}

$conn = conectar_bd();
$stmt = $conn->prepare("SELECT * FROM empleado");
$stmt->execute();
$empleados = $stmt->get_result();

// Crear una instancia de FPDF con orientación horizontal y formato UTF-8
$pdf = new PDF('L', 'mm', array(210, 297)); // 'L' indica orientación horizontal, 'mm' unidad de medida, 'A4' tamaño del papel
$pdf->AliasNbPages();
$pdf->AddPage();

// Cabecera de la tabla
$pdf->SetFont('Times', 'B', 12);
$pdf->SetAutoPageBreak(true, 20); //salto de pagina automatico
$pdf->Cell(10, 10, mb_convert_encoding('ID', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(26, 10, mb_convert_encoding('Cédula', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(57, 10, mb_convert_encoding('Nombres y apellidos', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(45, 10, mb_convert_encoding('Dirección', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(53, 10, mb_convert_encoding('E-mail', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(26, 10, mb_convert_encoding('Teléfono', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(40, 10, mb_convert_encoding('Fecha de nacimiento', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);
$pdf->Cell(20, 10, mb_convert_encoding('Estado', 'ISO-8859-1', 'UTF-8'), 1, 0, 'C', 0);

// Contenido de la tabla
while ($empleado = $empleados->fetch_assoc()) {
    $pdf->Ln(); // Nueva línea para cada fila, 'ISO-8859-1', 'UTF-8'
    $pdf->Cell(10, 10, mb_convert_encoding($empleado["id_usuario"], 'ISO-8859-1'), 1, 0, 'C', 0);
    $pdf->Cell(26, 10, mb_convert_encoding($empleado["id_empleado"], 'ISO-8859-1'), 1, 0, 'C', 0);
    $pdf->Cell(57, 10, mb_convert_encoding($empleado["nom_ape_empleado"], 'ISO-8859-1'), 1);
    $pdf->Cell(45, 10, mb_convert_encoding($empleado["direc_empleado"], 'ISO-8859-1'), 1);
    $pdf->Cell(53, 10, mb_convert_encoding($empleado["email_empleado"], 'ISO-8859-1'), 1);
    $pdf->Cell(26, 10, mb_convert_encoding($empleado["tel_empleado"], 'ISO-8859-1'), 1, 0, 'C', 0);
    $pdf->Cell(40, 10, mb_convert_encoding($empleado["fecha_naci_empleado"], 'ISO-8859-1'), 1, 0, 'C', 0);

    if ($empleado["estado_empleado"] === 'A') :
        $estadoTexto = 'Activo';
    else :
        $estadoTexto = 'Inactivo';
    endif;

    $pdf->Cell(20, 10, mb_convert_encoding($estadoTexto, 'ISO-8859-1'), 1, 0, 'C', 0);
}

// Guardar el PDF en un archivo
$nombre_archivo = "reporte_empleados_" . date("Ymd") . ".pdf";
$pdf->Output($nombre_archivo, 'F');

echo "PDF generado correctamente. Puedes descargarlo <a href='$nombre_archivo'>aquí</a>.";
?>