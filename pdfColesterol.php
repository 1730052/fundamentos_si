<?php
require "conexion_bd.php";
//Variable que tiene la accion a realizar con la tabla
$count="select * from colesterol"; 
require('fpdf.php');
class PDF extends FPDF
{
	//Doy los valores para el encabezado de la pagina
	function Header()
	{
		$this->SetFont('Arial','B',15);
		$this->Cell(30);
		$this->Cell(120,10, 'Reporte',0,0,'C');
		$this->Ln(20);
	}

	//Doy los valores para el pie de pagiina
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I', 8);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
	}		
}


//Creo un PDF
$pdf = new PDF();
//Asigno los atributos que va a tener
$pdf->AliasNbPages();
$pdf->AddPage('O');

//Imprimo los campos que se van a mostrar
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(30,6,'NOMBRE',1,0,'C',1);
$pdf->Cell(30,6,'FECHA',1,0,'C',1);
$pdf->Cell(30,6,'COLESTEROL TOTAL',1,0,'C',1);
$pdf->Cell(30,6,'COLESTEROL HDL',1,0,'C',1);
$pdf->Cell(30,6,'COLESTEROL LDL',1,0,'C',1);
$pdf->Cell(30,6,'COLESTEROL NO HDL',1,0,'C',1);
$pdf->Cell(25,6,'TRIGLICERIDOS',1,1,'C',1);
$pdf->SetFont('Arial','',8);

//Hago la sentencia con la variable count
$sentencia = $BD->prepare($count);
$sentencia->execute();
//Tomo todos los elementos que coincidan
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//Imprimo cada valor de la tabla
foreach ($resultado as $row) {
	$pdf->Cell(30,6,$row['nombre'],1,0,'C');
	$pdf->Cell(30,6,$row['fecha'],1,0,'C');
	$pdf->Cell(30,6,$row['col_total'],1,0,'C');
	$pdf->Cell(30,6,$row['col_hdl'],1,0,'C');
	$pdf->Cell(30,6,$row['col_ldl'],1,0,'C');
	$pdf->Cell(30,6,$row['col_no_hdl'],1,0,'C');
	$pdf->Cell(25,6,$row['trigli'],1,1,'C');
}

$pdf->Output();


?>