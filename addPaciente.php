<?php
//Mando a llamar el archivo con la conexion a la BD
include_once("conexion_bd.php");
    //Inicializo las variables con los valores de los campos de texto
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $nac =  $_POST['nac'];
    $sexo = $_POST['sexo'];
    $sangre = $_POST['sangre'];
	
	//Sentencia donde indico cual tabla va a tener los nuevos valores
	$sentencia=$BD->prepare("INSERT INTO pacientes(nombre, edad, fecha_nac, sexo, sangre) VALUES (?,?,?,?,?)");
	$resultado = $sentencia->execute([$nombre,$edad,$nac,$sexo,$sangre]);
	if ($resultado == TRUE) {
	    //Redirecciona en caso de que se añada correctamente
         header('Location: paginaPacientes.php');
    }else{
        //Mensaje en el caso contrario
        echo "Error";
    }
?>