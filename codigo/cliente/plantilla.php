<?php
require_once('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',11);
    // Movernos a la derecha
    $this->Cell(100);
    // Título
    $this->Cell(70,10,'Reporte de Ingresos',1,0,'C');
    // Salto de línea
    $this->Ln(20);

$this->Cell(35,5, 'FECHA', 1, 0, 'C', 0);
$this->Cell(30,5, 'ID', 1, 0, 'C', 0);
$this->Cell(35,5, 'PAQUETE', 1, 0, 'C', 0);
$this->Cell(35,5, 'CLIENTE', 1, 0, 'C', 0);
$this->Cell(35,5, 'PRECIO', 1, 0, 'C', 0);
$this->Cell(35,5, 'CANTIDAD', 1, 0, 'C', 0);
$this->Cell(35,5, 'TOTAL', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

?>