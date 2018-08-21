<?php
//including the database connection file
include_once("conexion_bd.php");

	//Variables que toma del crud para actualizar los datos
    $newNombre = $_POST['nombre'];
    $newRango =  $_POST['rango'];
    $newContra = $_POST['contra'];
	
	//Hace la sentencia update, busca coincidir con alguna fila que tenga como nombre la variable newNombre
	$sentencia=$BD->prepare("UPDATE doctores SET nombre=?,rango=?, contra=? WHERE nombre=?;");
    $resultado = $sentencia->execute([$newNombre, $newRango, $newContra, $newNombre]);
	if ($resultado == TRUE) {
		//Si se modifica correctamente, reenvia a la pagina de doctores
        header('Location: paginaDoctores.php');
    } else {
		//Si no, se queda en el formulario de edicion
        header('Location: editDoctor.php');
    }
?>