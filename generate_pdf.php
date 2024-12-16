
<?php
require('fpdf.php');

// Capture form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a PDF instance
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Add content to the PDF
$pdf->Cell(0, 10, 'Generated PDF', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Name:', 0, 0);
$pdf->Cell(0, 10, $name, 0, 1);

$pdf->Cell(40, 10, 'Email:', 0, 0);
$pdf->Cell(0, 10, $email, 0, 1);

$pdf->Ln(10);
$pdf->MultiCell(0, 10, "Message:\n$message", 0, 'L');

// Save and output the PDF
$pdf->Output('I', 'GeneratedDocument.pdf');
?>
