<?php
require('fpdf/fpdf.php');
//date_default_timezone_set('UTC-3');
date_default_timezone_set('America/Buenos_Aires');

$var_nom = $_GET['nombre']." ".$_GET['apellido'];
$var_dni= $_GET['dni'];
$var_yearMesa = $_GET['anio'];
$var_tipo = $_GET['tipo'];


$var_day=date("d");
$var_month=date("m");
$var_year=date("Y");



$pdf = new FPDF();
$pdf->AddPage('P', 'A4');
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTopMargin(10);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);


/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 30);
$pdf->SetFont('', 'B', 10);
$pdf->Cell(75, 50, 'Numero de pago:', 1, 1, 'C', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(84, 30);
$pdf->Cell(116, 50, 'Total a pagar: $', 1, 1, 'C', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 80);
$pdf->Cell(0, 20, 'Haz tu pago en cualquier punto COBRO EXPRESS del pais', 1, 1, 'C', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetFillColor(198,245,255);
$pdf->SetXY(10, 100);
$pdf->Cell(0, 15, 'Datos de la compra', 0, 1, 'L', true);
$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 115);
$pdf->Cell(91, 33, 'Cell', 1, 1, 'L', false);
$pdf->SetDrawColor(0);
/* --- Cell 6--- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(101, 114);
$pdf->SetFont('', 'B', 10);
$pdf->Cell(99, 34, 'CELL6', 1, 1, 'C', false);
$pdf->SetDrawColor(0);



/* --- Text --- */
$pdf->SetFont('', 'I', 10);
$pdf->Text(35, 260, 'Toda la información se encuentra encriptada para tu privacidad y seguridad © PayU')

$pdf->Output();
?>