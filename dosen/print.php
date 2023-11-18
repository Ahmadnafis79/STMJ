<?php
require('../fpdf184/fpdf.php');
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->SetLeftMargin(20);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'LAPORAN DATA DOSEN', 0, 10, 'C');
$pdf->Cell(10, 7, '', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(10, 8, 'No.', 1, 0, 'C');
$pdf->Cell(20, 8, 'NIDN', 1, 0, 'C');
$pdf->Cell(50, 8, 'Nama Lengkap', 1, 0, 'C');
$pdf->Cell(18, 8, 'Program Studi', 1, 0, 'C');
$pdf->Cell(50, 8, 'Email', 1, 1, 'C');
$pdf->Cell(25, 8, 'Telepon', 1, 0, 'C');

$pdf->SetFont('Arial', '', 10);
include '../connection.php';
$no = 1;
$result = mysqli_query($con, "SELECT * FROM dosen");
while ($data = mysqli_fetch_array($result)) {
    $pdf->Cell(10, 8, $no++, 1, 0, 'C');
    $pdf->Cell(20, 8, $data['nidn'], 1, 0, 'C');
    $pdf->Cell(50, 8, $data['nama'], 1, 0);
    $pdf->Cell(18, 8, $data['prodi'], 1, 0, 'C');
    $pdf->Cell(50, 8, $data['email'], 1, 1);
    $pdf->Cell(25, 8, $data['telepon'], 1, 0);
}
$pdf->Output();
