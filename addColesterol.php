<?php
//Mando a llamar el archivo con la conexion a la BD
include_once("conexion_bd.php");
    
	//Verifica que si tenga un valor el campo con id nombre y asigna el resto de las variables
    if (isset($_POST['nombre'])) {
        $var = $_POST['nombre'];
        $var2 = $_POST['colt'];
        $var3 = $_POST['colhdl'];
        $var4 = $_POST['colldl'];
        $var5 = $_POST['colnohdl'];
        $var6 = $_POST['trigli'];
        $var8 = $_POST['fecha'];
    }
    
	//Sentencia donde indico cual tabla va a tener los nuevos valores
	$sentencia=$BD->prepare("INSERT INTO colesterol (nombre, fecha, col_total, col_hdl, col_ldl, col_no_hdl, trigli) VALUES (?,?,?,?,?,?,?)");
	$resultado = $sentencia->execute([$var,$var8,$var2,$var3,$var4,$var5,$var6]);
	if ($resultado) {
	    //Redirecciona en caso de que se añada correctamente
         header('Location: index.html');
    }else{
        //Mensaje en el caso contrario
        echo "Error";
    }
?>