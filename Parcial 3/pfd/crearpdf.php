<?php
$Nombre =$_POST['Nombre'];
require('./FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hola, Bienvenido '.$Nombre);
$pdf->Output();
?>