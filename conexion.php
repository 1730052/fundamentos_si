<?php

class conexion{

	public static function conectar(){
		try{

			$CN = new PDO("mysql:host=localhost;dbname=id6225398_mario", "id6463768_pachisak","broyi");

			echo "Conexión exitosa";

		} catch (PDOException $e){
			die($ex->getMessage());
		}
	}


}

conexion::conectar();