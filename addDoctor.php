<?php
//Mando a llamar el archivo con la conexion a la BD
include_once("conexion_bd.php");
    //Inicializo las variables con los valores de los campos de texto
    $nombre = $_POST['nombre'];
    $rango =  $_POST['rango'];
    $contra = $_POST['contra'];
	
	//Sentencia donde indico cual tabla va a tener los nuevos valores
	$sentencia=$BD->prepare("INSERT INTO doctores(nombre,rango, contra) VALUES (?,?,?)");
	$resultado = $sentencia->execute([$nombre,$rango,$contra]);
	if ($resultado == TRUE) {
	    //Redirecciona en caso de que se añada correctamente
         header('Location: paginaDoctores.php');
    }else{
        //Mensaje en el caso contrario
        echo "Error";
    }
?>