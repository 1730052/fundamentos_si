<?php 

//Variables que tienen los datos de la BD
$contraseña = "broyi";
$usuario = "id6225398_broyic";
$nombre_base_de_datos = "id6225398_clinica";
try{
    //Metodo PDO con el que se hace la conexion a la BD
	$BD = new PDO('mysql:host=localhost;dbname='. $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){ 
    //Mensaje de error
    echo "Ocurrio un error";
    }
?>
