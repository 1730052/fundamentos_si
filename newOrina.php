<?php
    $nombre=$_GET['nombre'];
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
  background-image: url("Imagenes/limpio.jpg");
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

{
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>
</head>
<body>

<div class="bg">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.html">Inicio</a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="superuser.php">Doctores</a></li>
</ul></div></nav>


<!--Formulario con los campos de la tabla de pacientes-->
<!--Aqui podemos añadir nuevos pacientes-->
<form action="addOrina.php" method="post">
<center><div class="form-group">
<label for="matricula">Nombre</label>
<input type="text" readonly="readonly" class="form-control" name="nombre" id="nombre" value="<?php echo htmlspecialchars($nombre);?>"  required>
</div></center>

<div class="col">
<center><div class="form-group">
<label for="matricula">Fecha</label>
<input type="date" class="form-control" name="fecha" id="fecha" required>
</div></center>

<div class="col">
<center><div class="form-group">
<label for="matricula">Aldosterona</label>
<input type="text" class="form-control" name="aldo" id="aldo" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Aminoacido</label>
<input type="text" class="form-control" name="amino" id="amino" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Amilasa</label>
<input type="text" class="form-control" name="amilasa" id="amilasa" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Calcio</label>
<input type="text" class="form-control" name="calcio" id="calcio" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Cloro</label>
<input type="text" class="form-control" name="cloro" id="cloro" required>
</div></center>
<center><div class="form-group">
<label for="matricula">Cobre</label>
<input type="text" class="form-control" name="cobre" id="cobre" required>
</div></center>
<center>
<center> <button type="submit" class="btn btn-primary">Agregar
</button> </center>
</center>
</form>
</div>
<div class="col">
</div></div></div>
</div>
</div>
</body>


</html>