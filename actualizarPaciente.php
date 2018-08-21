<?php
//including the database connection file
include_once("conexion_bd.php");

	//Variables que toma del formulario
    $newNombre = $_POST['nombre'];
    $newEdad =  $_POST['edad'];
    $newCumple = $_POST['nac'];
    $newSexo = $_POST['sexo'];
    $newSangre = $_POST['sangre'];
	
	//Sentencia para actualizar los datos de la tabla donde el campo nombre coincida con la variable newNombre
	$sentencia=$BD->prepare("UPDATE pacientes SET nombre=?,edad=?, fecha_nac=?, sexo=?, sangre=? WHERE nombre=?;");
    $resultado = $sentencia->execute([$newNombre, $newEdad, $newCumple, $newSexo, $newSangre, $newNombre]);
	
	//Si se actualiza correctamente nos envia a la pagina de pacientes
	if ($resultado) {
        header('Location: paginaPacientes.php');
    } else {
		//Si no, se queda en el formulario de editar pacientes
        header('Location: editPacientes.php');
    }
?>