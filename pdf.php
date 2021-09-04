<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
	echo "Could not connect to mysql server";

if(!mysqli_select_db($con,"db_practice"))
{

	echo "Database not connected";
}

$sql = "SELECT tb_st.sname,tb_practice.id,tb_practice.name,tb_practice.email FROM tb_st INNER JOIN  tb_practice ON tb_st.sid=tb_practice.id";

$records = mysqli_query($con,$sql);

require("library/fpdf.php");

$pdf = new FPDf('p','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',10);
$pdf->cell(30,10,"SNAME",1,0,'C');
$pdf->cell(30,10,"ID",1,0,'C');
$pdf->cell(40,10,"Name",1,0,'C');
$pdf->cell(40,10,"Email",1,1,'C');

$pdf->SetFont('Arial','',10);



while ($row = mysqli_fetch_array($records)) {
$pdf->cell(30,10,$row['sname'],1,0,'C');
	$pdf->cell(30,10,$row['id'],1,0,'C');
$pdf->cell(40,10,$row['name'],1,0,'C');
$pdf->cell(40,10,$row['email'],1,1,'C');
}


$pdf->OutPut();



?>
