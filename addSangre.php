<?php
//Mando a llamar el archivo con la conexion a la BD
include_once("conexion_bd.php");
    //Inicializo las variables con los valores de los campos de texto
    
	//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
    if (isset($_POST['nombre'])) {
        $var = $_POST['nombre'];
        $var2 = $_POST['hematies'];
        $var3 = $_POST['hemoglobina'];
        $var4 = $_POST['hematocrito'];
        $var5 = $_POST['vcm'];
        $var6 = $_POST['plaquetas'];
        $var7 = $_POST['vsg'];
        $var8 = $_POST['fecha'];
    }
    
	//Sentencia donde indico cual tabla va a tener los nuevos valores
	$sentencia=$BD->prepare("INSERT INTO sangre (nombre, fecha, hematies, hemoglobina, hematocrito, vcm, plaquetas, vsg) VALUES (?,?,?,?,?,?,?,?)");
	$resultado = $sentencia->execute([$var,$var8,$var2,$var3,$var4,$var5,$var6,$var7]);
	if ($resultado) {
	    //Redirecciona en caso de que se añada correctamente
         header('Location: index.html');
    }else{
        //Mensaje en el caso contrario
        echo "Error";
    }
?>