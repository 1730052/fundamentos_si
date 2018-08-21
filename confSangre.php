<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    //Tomo los datos del usuario
    $nombre = $_POST['nombre'];
    //Recorro la tabla doctores en busqueda de coincidencias
    $sql="SELECT * FROM pacientes WHERE nombre= ?";
    $sentencia=$BD->prepare($sql);
    $sentencia->execute([$nombre]);
	//Tomo todos los elementos que coincidan
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
    //Si no encuentra nada, reenvia a la pagina de inicio de sesion
    if($resultado==null || empty($resultado)){
        header('Location: histSangre.php');
    } else {
        //Si encuentra algo, envia al CRUD de pacientes
        header('Location: vistaSangre.php?nombre='.$nombre);
    }
?>