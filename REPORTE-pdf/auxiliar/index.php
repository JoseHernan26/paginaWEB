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
$var_hour = date("H:i");
//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,300,'holaaaaaaa!  '.$var_nom);
//$pdf->Output();
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo_cne.jpg',170,15,30);
    $this->Image('justicia_nacional.jpg',10,15,65);
    $this->Image('subtitulo.jpg',10,40,190);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    //$this->Cell(30,10,'eae',1,0,'C');

    // Line break
    $this->Ln(20);
}

// Page footer
/*
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
*/
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,80,utf8_decode('SE CERTIFICA QUE el/la elector/a '.$var_nom));
$pdf->Cell(-40);
$pdf->Cell(0,90,utf8_decode('Doc. de Identidad N° '.$var_dni.' no se encuentra incluído en el Registro de Infractores'));
$pdf->Cell(-190);
$pdf->Cell(0,100,utf8_decode('al deber de votar en las elecciones '.$var_tipo.' '.$var_yearMesa));
$pdf->Cell(-180);
$pdf->Cell(0,130,utf8_decode('La presente constancia no acredita causa justificada respecto de la no concurrencia ó '));
//abandono de funciones electorales (cf. art. 132 CEN).
$pdf->Cell(-190);
$pdf->Cell(0,140,utf8_decode('abandono de funciones electorales (cf. art. 132 CEN).'));
$pdf->Cell(-180);
$pdf->Cell(0,150,utf8_decode('Se emite el presente certificado por disposición de la Justicia Nacional Electoral a los'));

$pdf->Cell(-190);
$pdf->Cell(0,160,utf8_decode($var_day.' dias del mes de '.$var_month.' de '.$var_year));
$pdf->Image('bar-code.jpg',20,135,70);

//(c) 2007-2018 - Poder Judicial de la Nación - Cámara Nacional Electoral

//$pdf->SetFont('Arial','B',22);
//quizas asi hace salto de linea
//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
//
//$pdf->Cell(-15,150,'Page ',1,0,'R');
/* --- Cell --- */
$pdf->SetDrawColor(67,134,255);
$pdf->SetXY(10, 10);
$pdf->Cell(190, 182, '', 1, 1, 'L', false);
$pdf->SetDrawColor(0);
/* --- Cell --- */
$pdf->SetXY(10, 170);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 5, utf8_decode('(c) 2007-2018 - Poder Judicial de la Nación - Cámara Nacional Electoral'), 1, 1, 'C', false);

$pdf->SetXY(10, 175);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(190, 5, utf8_decode('Constancia generada el: '.$var_day.'/'.$var_month.'/'.$var_year.' - '.$var_hour), 0, 1, 'L', false);

/*
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
    */
$pdf->Output();
?>
