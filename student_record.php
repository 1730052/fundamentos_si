<?php
    $validacion = $_POST['matricula'];
    if($validacion=''){
        header('Location: inicioAlumnoHistorial.php');
    }else{
        
    }
    
    include_once "base_de_datos.php";
    $validacion = $_POST['matricula'];
    $sentencia=$BD->query("SELECT * FROM horasCAI WHERE Matricula=".$validacion."");
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    if($resultado==null || empty($resultado)){
        header('Location: inicioAlumnoHistorial.php');
    }
?>
<!DOCTYPE html>
<html>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

div.a {
    text-align: center;
}

.bg {

  /* The image used */
  background-image: url("Background/landmark1.jpeg");
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
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
</head>
<body>

<div class="bg">

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">UPV CAI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="nav-link" href="teacher_or_root.html">Teacher</a></li>
    </ul>
  </div>
</nav>

<br>
<br>
<br>
<br>

<div class="a">
<h2><font color="white" font size="15">Student tag</font></h2>
<p><font color="white" font size="15"><?php echo  $validacion ?></font></p>
</div>

<div class="container">           
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Date</th>
        <th>Activity</th>
        <th>Hours</th>
        <th>Hours</th>
      </tr>
    </thead>
    <tbody>
			<!-- Atención aquí, sólo esto cambiará
				 Pd: no ignores las llaves de inicio y cierre {}
			-->
			<?php foreach ($resultado as $resultado){ ?>
			<tr>
				<td><?php echo $resultado->Nombre ?></td>
				<td><?php echo $resultado->Apellido ?></td>
				<td><?php echo $resultado->Hora ?></td>
				<td><?php echo $resultado->Actividad ?></td>

			</tr>
			<?php } ?>
		</tbody>
  </table>
</div>



</div>
</body>
</html>