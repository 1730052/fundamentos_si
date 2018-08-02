<?php

	$contraseña = "broyi";
	$usuario = "id6463768_broyi";
	$BDName = "id6463768_proyectocai";
	try{
		$BD = new PDO('mysql:host=localhost;dbname=' . $BDName, $usuario, $contraseña);
		// "Conexion exitosa";
	}catch (Exception $e){
		//echo "Ocurrio algo con la base de datos: " . $e->getMessage();
	}
	?>
