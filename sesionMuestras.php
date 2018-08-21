<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    //Tomo los datos del usuario
    $nombre = $_POST['usuario'];
    $pass = $_POST['contra'];
    //Recorro la tabla doctores en busqueda de coincidencias
    $sql="SELECT * FROM doctores WHERE nombre= ? AND contra=?";
    $sentencia=$BD->prepare($sql);
    $sentencia->execute([$nombre,$pass]);
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    //Si no encuentra nada, reenvia a la pagina de inicio de sesion
    if($resultado==null || empty($resultado)){
        header('Location: inicioPacientes.php');
    } else {
        //Si encuentra algo, envia al CRUD de pacientes
        header('Location: paginaMuestras.php');
    }
?>