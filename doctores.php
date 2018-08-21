<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    //Obtiene el nombre y la contraseña
    $nombre = $_POST['usuario'];
    $pass = $_POST['contra'];
    //Busca en la tabla alguna coincidencia
    $sql="SELECT * FROM doctores WHERE nombre= ? AND contra=?";
    $sentencia=$BD->prepare($sql);
    $sentencia->execute([$nombre,$pass]);
	//Tomo todos los elementos que coincidan
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    //Si no encuentra nada, reenvia a la misma pagina
    if($resultado==null || empty($resultado)){
        header('Location: superuser.php');
    } else {
        //Si encuentra algo redirecciona al CRUD de doctores
        header('Location: paginaDoctores.php');
    }
?>