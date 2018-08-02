<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("base_de_datos.php");

    $nombre = $_POST['Nombres'];
    $apellido =  $_POST['Apellidos'];
    $grupo = $_POST['idGrupo'];
	$matricula =$_POST['Matricula'];
	$level = $_POST['nivel'];
	$carr = $_POST['carrera'];
	
    	$sentencia=$BD->prepare("INSERT INTO Alumnos(Matricula,Nombres, Apellidos, Nivel, idGrupo, Horas, Carrera) VALUES (?,?,?,?,?,'0',?)");
    	$resultado = $sentencia->execute([$matricula,$nombre,$apellido,$level,$grupo,$carr]);
		if ($resultado == TRUE) {
             echo "New record created successfully";
        }else{
            echo "Error";
        }
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='VistaMaestro.php'>View Result</a>";
	

?>
</body>
</html>