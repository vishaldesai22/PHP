<?php
require('fpdf.php');

/*$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',20);
$pdf->Cell(40,50,'Hello World!');
$pdf->Output();*/


//line management and paramenters of FPDF functions
$pdf = new FPDF('P', 'in', 'Letter');
$pdf->addPage();
$pdf->setFont('Arial', 'B', 24);
$pdf->cell(0, 0, "Top Left!", 0, 1, 'L');
$pdf->cell(6, 0.5, "Top Right!", 1, 0, 'R');
$pdf->ln(2.5);
$pdf->cell(0, 0, "This is the middle!", 0, 0, 'C');
$pdf->ln(5.3);
$pdf->cell(0, 0, "Bottom Left!", 0, 0, 'L');
$pdf->cell(0, 0, "Bottom Right!", 0, 0, 'R');
$pdf->output();
?>
