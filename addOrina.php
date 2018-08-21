<?php
//Mando a llamar el archivo con la conexion a la BD
include_once("conexion_bd.php");
    //Inicializo las variables con los valores de los campos de texto
    
	//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
    if (isset($_POST['nombre'])) {
        $var = $_POST['nombre'];
        $var2 = $_POST['aldo'];
        $var3 = $_POST['amino'];
        $var4 = $_POST['amilasa'];
        $var5 = $_POST['calcio'];
        $var6 = $_POST['cloro'];
        $var7 = $_POST['cobre'];
        $var8 = $_POST['fecha'];
    }
    
	//Sentencia donde indico cual tabla va a tener los nuevos valores
	$sentencia=$BD->prepare("INSERT INTO orina (nombre, fecha, aldo, amino, amilasa, calcio, cloro, cobre) VALUES (?,?,?,?,?,?,?,?)");
	$resultado = $sentencia->execute([$var,$var8,$var2,$var3,$var4,$var5,$var6,$var7]);
	if ($resultado) {
	    //Redirecciona en caso de que se añada correctamente
         header('Location: index.html');
    }else{
        //Mensaje en el caso contrario
        echo "Error";
    }
?>