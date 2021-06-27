<?php
require('fpdf/fpdf.php');


$var_nom = 'Francisco Rosas Amaya';
$var_dni= 213123123;

$var_day=date("d");
$var_month=date("m");
$var_year=date("Y");
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
    $this->Image('logo_cne.jpg',170,18,30);
    $this->Image('justicia_nacional.jpg',10,18,65);
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
$pdf->Cell(0,100,utf8_decode('al deber de votar en las elecciones GENERALES 2019'));
$pdf->Cell(-180);
$pdf->Cell(0,130,utf8_decode('La presente constancia no acredita causa justificada respecto de la no concurrencia ó '));
//abandono de funciones electorales (cf. art. 132 CEN).
$pdf->Cell(-190);
$pdf->Cell(0,140,utf8_decode('abandono de funciones electorales (cf. art. 132 CEN).'));
$pdf->Cell(-180);
$pdf->Cell(0,150,utf8_decode('Se emite el presente certificado por disposición de la Justicia Nacional Electoral a los'));

$pdf->Cell(-190);
$pdf->Cell(0,160,utf8_decode($var_day.' dias del mes de '.$var_month.' de '.$var_year));
$pdf->Image('bar-code.jpg',20,150,70);
/*
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
    */
$pdf->Output();
?>