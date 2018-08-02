<?php
    $validacion = $_POST['usuario'];
    $validacion2 = $_POST['contra'];
    if($validacion=='' || $validacion2==''){
        header('Location: inicioRoot.php');
    }else{
        
    }
    include "base_de_datos.php";
    $validacion = $_POST['usuario'];
    $validacion2 = $_POST['contra'];
    $sentencia=$BD->prepare("SELECT * FROM users WHERE username=?;");
    $sentencia=execute([$validacion]);
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    if($resultado==null || empty($resultado)){
        $mensaje = "No se encontro usuario";
        $_POST['mensaje'];
        header('Location: inicioRoot.php');
    }
?>
<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}

div.a {
    text-align: center;
}

.center_div{
    margin: 10 auto;
    width:50% /* value of your choice which suits your alignment */
}

.bg {

  /* The image used */
  background-image: url("landmark3.jpeg");
  background-attachment: fixed;
  font-style:italic;
  font-weight:bold;
  font-size:1.5em;
  font-color:#ffffff;
  font-family:'Helvetica','Verdana','Monaco',sans-serif;

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
</head>
<body>

<div class="bg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">UPV CAI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="teacher_or_root.html">Teacher</a></li>
    </ul>
  </div>
</nav>

<br>
<br>
<br>
<br>

<div class="wrapper">
<button class="btn btn-primary" type="submit">Add teacher</button> 
</div>

</div>
</body>
</html>