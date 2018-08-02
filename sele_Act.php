<?php
    $validacion = $_POST['matricula'];
    if($validacion=''){
        header('Location: inicioAlumno.php');
    }else{
        
    }
    
    include_once "base_de_datos.php";
    $validacion = $_POST['matricula'];
    $sentencia=$BD->query("SELECT * FROM Alumnos WHERE Matricula=".$validacion."");
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    if($resultado==null || empty($resultado)){
        $mensaje = "No se encontro usuario";
        $_POST['mensaje'];
        header('Location: inicioAlumno.php');
    }
?>
<!doctype html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <head>
    <style type="text/css">
    
    div.a {
    text-align: center;
}
      body {
        background:url(Background/landmark3.jpeg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      .EstiloTexto{ 
    color:#3366ff; 
    font-weight: bold; 
    text-align: center; 
    font-family:Verdana, Arial, Helvetica, sans-serif; 
    font-size: 80px; 
} 

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Actividad</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">UPV CAI</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a class="nav-link" href="#">Teacher</a></li>
        </ul>
      </div>
    </nav>
    
    
<div class="a">
    <h2><?php 
    foreach($resultado as $resultado){ ?>
        <tr><td class=EstiloTexto><?php echo $resultado->Nombres?></td></tr>
        <tr><td class=EstiloTexto><?php echo $resultado->Matricula?></td></tr>
    <?php } ?>
    </h2>


    <div class="container">
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <center>
        <button type="button" class="btn btn-dark">Book</button>
        <button type="button" class="btn btn-dark">Homework</button>
        <button type="button" class="btn btn-dark">Game</button>  
      </center>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>