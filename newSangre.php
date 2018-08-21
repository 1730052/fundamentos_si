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
<form action="addSangre.php" method="post">
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
<label for="matricula">Hematies</label>
<input type="text" class="form-control" name="hematies" id="hematies" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Hemoglobina</label>
<input type="text" class="form-control" name="hemoglobina" id="hemoglobina" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Hematocrito</label>
<input type="text" class="form-control" name="hematocrito" id="hematocrito" required>
</div></center>

<center><div class="form-group">
<label for="matricula">VCM</label>
<input type="text" class="form-control" name="vcm" id="vcm" required>
</div></center>

<center><div class="form-group">
<label for="matricula">Plaquetas</label>
<input type="text" class="form-control" name="plaquetas" id="plaquetas" required>
</div></center>
<center><div class="form-group">
<label for="matricula">VSG</label>
<input type="text" class="form-control" name="vsg" id="vsg" required>
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