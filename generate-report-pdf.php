<?php

require_once('conn.php');


include_once('purity-report/pdf/fpdf.php');
$search = $_GET['search'];
$re1 = '';
$re2 = '';
$re3 = '';
$re4 = '';
$re5 = '';

$sql = "SELECT * FROM `betch_no` WHERE `batch_no` = '".$search."'"; 
$resultsList = $conn->query($sql);
if ($resultsList->num_rows > 0 ) { 
    while($row = $resultsList->fetch_assoc()) { 
        $re1   = $row["id"];
        $re2   = $row["batch_no"];
        $re3   = $row["packing_date"];
        $re4   = $row["report_no1"];
        $re5   = $row["report_no2"];
    } 
}
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
     
    $this->SetFont('Arial','B',9);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Report List',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$display_heading = array('id'=>'ID', 'batch_no'=> 'Batch Number', 'packing_date'=> 'Packed On','report_no'=> 'Report Number');

$result = mysqli_query($conn, "SELECT id, batch_no, packing_date, report_no1 FROM betch_no WHERE `batch_no` = '".$search."'") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM betch_no");

$image1 = "images/certifecateimg/00-1.jpg";
$image2 = "images/certifecateimg/00-2.jpg";
$image3 = "images/certifecateimg/00-3.jpg";

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);

$pdf->Image($image1, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

$pdf->SetY(211);
$pdf->SetX(100);
$pdf->Cell(0,3,$re4);
$pdf->SetY(216);
$pdf->SetX(75);
$pdf->Cell(0,3,$re5);
$pdf->SetY(217);
$pdf->SetX(85);
$pdf->Cell(0,11,$re2);
// $pdf->SetY(234);
// $pdf->SetX(102);
// $pdf->Cell(0,4,$re3);

$pdf->SetY(120);
$pdf->SetX(70);
$pdf->Cell(0,11,$re2);
// $pdf->SetY(134);
// $pdf->SetX(80);
// $pdf->Cell(0,4,$re3);

$pdf->AddPage();
$pdf->Image($image2, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
$pdf->SetY(38);
$pdf->SetX(74);
$pdf->Cell(0,3,$re2);
// $pdf->Ln();
$pdf->SetY(41);
$pdf->SetX(74);
$pdf->Cell(0,7,$re3);

$pdf->AddPage();
$pdf->Image($image3, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);

$pdf->Output();
?>