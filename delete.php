<?php
    $validacion = $_POST['matricula'];
    if($validacion=''){
        header('Location: decMaestro.php');
    }else{
        include_once "base_de_datos.php";
        $validacion = $_POST['matricula'];
        $sentencia=$BD->query("DELETE FROM Alumnos WHERE Matricula=".$validacion."");
        header('Location: VistaMaestro.php');
    }
    
?>