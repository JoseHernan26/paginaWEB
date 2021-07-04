<?PHP

require('fpdf/fpdf.php');
// los nombres deben ir en mayuscula
$var_nom = $_GET['nombre'];
$var_ape = $_GET['apellido'];
$var_dni = $_GET['dni'];
$var_fecha_vencimiento= date('Y.m.d', strtotime('+1 week'));
$var_monto=$_GET['monto'];
$var_nombre_mesa= $_GET['tipo'];
$var_fecha_mesa= $_GET['fecha'];
$pdf = new FPDF();
$pdf->AddPage('P', 'A4');
$pdf->SetAutoPageBreak(true, 10);
$pdf->SetFont('Arial', '', 12);
$pdf->SetTopMargin(5);
$pdf->SetLeftMargin(5);
$pdf->SetRightMargin(5);


/* --- Cell  grande--- */
$pdf->SetDrawColor(66,44,225);
$pdf->SetXY(8, 8);
$pdf->Cell(194, 108, '', 1, 1, 'L', false);
//$pdf->SetDrawColor(0);
// imagen sup izq
// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/justicia_logo.jpg',12,12,78);
$pdf->Image('logo_cne.jpg',160,14,35);
/* --- Cell --- */
$pdf->SetXY(68, 37);
$pdf->Cell(0, 4, 'Boleta de pago multa Ley 26744. Art 6', 0, 1, 'L', false);
/* --- Cell chico --- */
$pdf->SetDrawColor(66,44,255);
$pdf->SetXY(16, 42);
$pdf->Cell(176, 47, '', 1, 1, 'L', false);

/* --- Text --- */
$pdf->SetFontSize(14);
$pdf->Text(20, 50, utf8_decode($var_ape.', '.$var_nom));
$pdf->Text(20,55, 'DOC.:'.$var_dni);
//No cumplimiento de obligacion electoral - .-
$pdf->SetFontSize(12);
$pdf->Text(20, 60, utf8_decode('No cumplimiento de obligacion electoral -'.$var_nombre_mesa.' ('.$var_fecha_mesa.').-'));
//
//$pdf->SetFont('', 'B', 12);
//$pdf->Cell(0, 4, 'Soy bold', 0, 1, 'L', false);
//$pdf->Cell(0, 4, 'Soy bold', 0, 1, 'L', false);
$pdf->SetFont('', 'B', 12);
$pdf->Text(20, 65, utf8_decode('Ley 26.744, Ac. CNE 37/2013 Art. 8'), 0, 1, 'L', false);
$pdf->SetFont('Courier', 'I', 8);
$pdf->Text(20, 73, utf8_decode('Señor elector: el cambio de su situacion ante la ley 26.744 se vera reflejada luego de las 48 horas '), 0, 1, 'L', false);
//de abonada esta multa. En caso contrario concurra a la oficina electoral mas proxima con este comprobante y el recibo bancario correspondiente para realizar el reclamo
$pdf->Text(20, 76, utf8_decode('de abonada esta multa. En caso contrario concurra a la oficina electoral mas proxima con comprobante'), 0, 1, 'L', false);

$pdf->Text(20, 79, utf8_decode('y el recibo bancario correspondiente para realizar el reclamo.'), 0, 1, 'L', false);

// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/bar_bn.jpg',17,91,78);

/* --- Cell vencimiento grande --- */
$pdf->SetFont('Arial', '', 12);
$pdf->SetDrawColor(66,45,255);
$pdf->SetXY(125, 93);
//$pdf->SetFontSize(10);
$pdf->Cell(68, 10, 'Vencimiento: '.$var_fecha_vencimiento, 1, 1, 'L', false);
$pdf->SetDrawColor(66,45,255);
/* --- Cell monto grande--- */
$pdf->SetXY(125, 103);
$pdf->Cell(68, 10, 'Monto: $'.$var_monto, 1, 1, 'L', false);
// nota: El monto de la multa a pagar surge de considerar su situacion de infractor en elecciones anteriores
//(Acord.37/13  y 45/15 de la CNE).  fuente 8
$pdf->SetFont('Arial', '', 8);
$pdf->Text(90, 114, utf8_decode('Talon para el elector'), 0, 1, 'L', false);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Text(20, 120, utf8_decode('El monto de la multa a pagar surge de considerar su situacion de infractor en elecciones anteriores'), 0, 1, 'L', false);
$pdf->Text(20, 123, utf8_decode('(Acord.37/13  y 45/15 de la CNE).'), 0, 1, 'L', false);
// Se indica en rojo la situacion evaluada
$pdf->Text(80, 126, utf8_decode('Se indica en rojo la situacion evaluada'), 0, 1, 'L', false);
//imag
// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/tabla_precios.jpg',15,135,180);
// separador
// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/tijereta.jpg',8,180,190);
// imagen justi
// imagen sup izq
// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/justicia_logo.jpg',12,203,58);
//imagen cne
$pdf->Image('logo_cne.jpg',160,203,25);

$pdf->SetFont('Arial', '', 8);
$pdf->Text(90, 211, utf8_decode('Talon para la entidad recaudadora'), 0, 1, 'L', false);
/* --- Cell  grande 2--- */
$pdf->SetDrawColor(66,44,225);
$pdf->SetXY(8,200);
//ancho, alto
$pdf->Cell(194, 85, '', 1, 1, 'L', false);


/* --- Cell chico2  --- */
$pdf->SetDrawColor(66,44,255);
$pdf->SetXY(13, 220);
//ancho, alto
$pdf->Cell(184, 20, '', 1, 1, 'L', false);

/////Nom
/* --- Text --- */
$pdf->SetFontSize(9);
$pdf->Text(20, 225, utf8_decode($var_ape.', '.$var_nom));
$pdf->Text(20,229, 'DOC.:'.$var_dni);
//No cumplimiento de obligacion electoral - .-
$pdf->SetFont('Arial', '', 9);
$pdf->Text(20, 233, utf8_decode('No cumplimiento de obligacion electoral -'.$var_nombre_mesa.' ('.$var_fecha_mesa.').-'));
//DOC.:  es 9
//$pdf->Text(20, 60, utf8_decode('No cumplimiento de obligacion electoral -'.$var_nombre_mesa.' ('.$var_fecha_mesa.').-')); 
$pdf->SetFont('Arial', 'B', 8);
$pdf->Text(20, 237, utf8_decode('Ley 26.744, Ac. CNE 37/2013 Art. 8'), 0, 1, 'L', false);

// x ,y, proporcion 
$pdf->Image('factura_banco_nacion/bar_bn.jpg',17,243,68);
$pdf->Image('factura_banco_nacion/Logo_banco_nacion.jpg',100,250,40);
/* --- Cell vencimiento chico --- */
$pdf->SetFont('Arial', '', 9);
$pdf->SetDrawColor(66,45,255);
$pdf->SetXY(145, 243);
//$pdf->SetFontSize(10);
$pdf->Cell(52, 8, 'Vencimiento: '.$var_fecha_vencimiento, 1, 1, 'L', false);
$pdf->SetDrawColor(66,45,255);
/* --- Cell monto chico--- */
$pdf->SetXY(145, 251);
$pdf->Cell(52, 8, 'Monto: $'.$var_monto, 1, 1, 'L', false);


//Importante: Solo para pagar en sucursales del Banco de la Nacion Argentina es 8
$pdf->SetFont('Arial', 'B', 9);
$pdf->Text(20, 267, utf8_decode('IMPORTANTE: Solo para pagar en sucursales del Banco de la Nacion Argentina'), 0, 1, 'L', false);
$pdf->Image('factura_banco_nacion/adorno_final.jpg',25,272,160);
//$pdf->Output('created_pdf.pdf','I');
$pdf->Output();
?>