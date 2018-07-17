<?php
include 'conexion.php';
include '../entidades/usuario.php';

class UsuarioDao extends conexion{

	protected static $cnx;

	private static function getconexion(){
		self::$cnx = conexion::conectar();
	}

	private static function desconectar(){
		self::$cnx = null;
	}

	//Metodo que sirve para validar el login
	public static function login($usuario){
		$query = "SELECT * 
		FROM registro
		WHERE usuario = :usuario AND password = :password";

		self::getconexion();

		$resultado = self::$cnx->prepare($query);

		$resultado->bindParam(":usuario", $usuario->getUsuario());
		$resultado->bindParam(":password", $usuario->getPassword());

		$resultado->execute();

		if($resultado->rowCount() > 0){
			$filas = $resultado->fetch();
			
			if ($filas["usuario"] == $usuario->getUsuario()
			&& $filas["password"] == $usuario->getPassword()){

				return true;
			}
		}

		return false;

	}

}