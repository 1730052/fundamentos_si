<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    $validacion = $_POST['id'];
    
    //Sentencia que borra lo que coincida con el valor de validacion
    $sentencia=$BD->query("DELETE FROM `doctores` WHERE `nombre`='$validacion'");
    //Redirecciona a la vista de la tabla para ver los cambios
    header('Location: paginaDoctores.php');
?>