<?php
require "conexion_bd.php";
//Variable que tiene la accion a realizar con la tabla
$count="select * from sangre"; 
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
$pdf->Cell(30,6,'HEMATIES',1,0,'C',1);
$pdf->Cell(30,6,'HEMOGLOBINA',1,0,'C',1);
$pdf->Cell(30,6,'HEMATOCRITO',1,0,'C',1);
$pdf->Cell(30,6,'VCM',1,0,'C',1);
$pdf->Cell(30,6,'PLAQUETAS',1,0,'C',1);
$pdf->Cell(25,6,'VSG',1,1,'C',1);
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
	$pdf->Cell(30,6,$row['hematies'],1,0,'C');
	$pdf->Cell(30,6,$row['hemoglobina'],1,0,'C');
	$pdf->Cell(30,6,$row['hematocrito'],1,0,'C');
	$pdf->Cell(30,6,$row['vcm'],1,0,'C');
	$pdf->Cell(30,6,$row['plaquetas'],1,0,'C');
	$pdf->Cell(25,6,$row['vsg'],1,1,'C');
}

$pdf->Output();


?>