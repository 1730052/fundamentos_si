<?php
    $validacion = $_POST['idMaestro'];
        if($validacion==''){
            header('Location: inicioTeacher.php');
        }else{
            
        }
    include "base_de_datos.php";
    $validacion = $_POST['idMaestro'];
    $sentencia = $BD->query("SELECT idGrupo FROM Maestros WHERE idCAI=".$validacion.";");
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    foreach ($resultado as $resultado){
        $variable = $resultado->idGrupo;
    }
    $_POST['variable'];
    if($resultado==null || empty($resultado)){
        header('Location: inicioTeacher.php');
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

.bg {

  /* The image used */
  background-image: url("Background/landmark2.jpeg");
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
      <li class="active"><a href="inicioAlumno.php">Student</a></li>
    </ul>
  </div>
</nav>

<center><input type="image" style="margin:10px;" href="loginAlumno.php" src="Background/teachers.png" height="175" width="175"></center>

<center>

<br>
<br>
<br>

<div class="row">
  <div class="container">
    <button class="button" type="button" style="width: 50%; border:none; display:inline-block; color:black;"><a href="VistaMaestro.php">
    See group
    </button>
  </div>
</div>

<br>
<br>

<div class="row">
  <div class="container">
    <button class="button" type="button" style="width: 50%; border:none; display:inline-block; color:black;"><a href="add_student.php">
    Add student to group
    </button>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="container">
    <button class="button" type="button" style="width: 50%; border:none; display:inline-block; color:black;"><a href="pantallaDel.php">
    Delete Student
    </button>
  </div>
</div>

</div>
</body>
</html>