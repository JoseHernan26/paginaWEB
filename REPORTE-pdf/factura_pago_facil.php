<?php
require('fpdf/fpdf.php');
//date_default_timezone_set('UTC-3');
date_default_timezone_set('America/Buenos_Aires');
/*
$var_nom = $_GET['nombre']." ".$_GET['apellido'];
$var_dni= $_GET['dni'];
$var_yearMesa = $_GET['anio'];
$var_tipo = $_GET['tipo'];



*/
// SI O SI VARIABLES QUE DEBEN SER CARGADAS POR GET:
//fecha del vencimiento de la boleta
$fecha_vencimiento = explode(".",date('Y.m.d', strtotime('+1 week')));
$var_monto=$_GET['monto'];
$var_day=$fecha_vencimiento[2];
$var_month=$fecha_vencimiento[1];
$var_year=$fecha_vencimiento[0];
//--------------------------
$var_nombre_mesa= $_GET['tipo'];
$var_fecha_mesa= $_GET['fecha'];
$var_nom = $_GET['nombre'];
$var_ape = $_GET['apellido'];
$var_dni = $_GET['dni'];

//opcional:
$var_numero_pago=1180961061;
$var_numero_referencia=5996475607;


//NO TOCAR

$var_dayNow=date("d");
$var_monthNow=date("m");
$var_yearNow=date("Y");
$pdf = new FPDF();
$pdf->AddPage('P', 'A4');
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTopMargin(10);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

// x ,y, proporcion 
$pdf->Image('virtuales_img/logo_payu.jpg',12,12,40);
// x ,y, proporcion 
$pdf->Image('virtuales_img/bar_2.jpg',100,35,87);

// x ,y, proporcion 
$pdf->Image('virtuales_img/logo_pago_facil.jpg',35,35,24);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 30);
$pdf->SetFont('', 'B', 10);
$pdf->Cell(75, 60, 'Numero de pago:', 1, 1, 'C', false);

$pdf->SetFont('Arial', '', 10);
$pdf->text(37, 65, $var_numero_pago, 1, 1, 'C', false);
$pdf->SetFont('Arial', '', 10);
$pdf->text(32, 75, 'A nombre de : Payu', 1, 1, 'C', false);

$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(84, 30);
$pdf->SetFont('', 'B', 14);
$pdf->Cell(116, 60, 'Total a pagar: $'.$var_monto, 1, 1, 'C', false);
$pdf->SetFont('Arial', 'B', 10);
//
$pdf->text(132, 70, 'Paga antes de: ', 1, 1, 'C', false);
//18 de Julio de 2021
$pdf->text(130, 75, $var_day.' de '.$var_month.' de '.$var_year, 1, 1, 'C', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetFont('', 'B', 10);
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 90);
$pdf->Cell(0, 20, 'Haz tu pago en cualquier punto PAGO FACIL del pais', 1, 1, 'C', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetFillColor(198,245,255);
$pdf->SetXY(10, 110);
$pdf->Cell(0, 15, '', 0, 1, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->text(32, 119, 'Datos de la compra', 1, 1, 'C', false);
$pdf->text(132, 119, 'Datos del comprador', 1, 1, 'C', false);

$pdf->SetFillColor(255);
/* --- Cell --- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(10, 115);
$pdf->Cell(91, 33, '', 1, 1, 'L', false);
$pdf->SetDrawColor(0);
/* --- Cell 6--- */
$pdf->SetDrawColor(198,245,255);
$pdf->SetXY(101, 114);
$pdf->SetFont('', 'B', 10);
$pdf->Cell(99, 34, '', 1, 1, 'C', false);
$pdf->SetDrawColor(0);

$pdf->SetFont('Arial', 'B', 8);
$pdf->text(15, 130, 'Tienda : Poder Judicial', 1, 1, 'C', false);
$pdf->text(15, 135, 'Fecha de tu compra: '.$var_dayNow.'-'.$var_monthNow.'-'.$var_yearNow, 1, 1, 'C', false);
$pdf->text(15, 140, 'Descripcion: Pago Multa Ley 26.744 por Aplica multa', 1, 1, 'C', false);
$pdf->text(15, 145, $var_nombre_mesa.' ('.$var_fecha_mesa.') ('.$var_dni.')', 1, 1, 'C', false);

$pdf->text(110, 130, 'Nombre: '.$var_nom.' '.$var_ape, 1, 1, 'C', false);
$pdf->text(110, 135, 'Referencia: '.$var_numero_referencia, 1, 1, 'C', false);


// x ,y, proporcion 
$pdf->Image('virtuales_img/banner_reclamos_virtual.jpg',10,160,191);
/* --- Text --- */
$pdf->SetFont('', 'I', 10);
$pdf->Text(35, 260, utf8_decode('Toda la información se encuentra encriptada para tu privacidad y seguridad © PayU'));

$pdf->Output();
?>