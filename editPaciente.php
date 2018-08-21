<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    //Guarda el nombre del doctor
    $validacion = $_POST['id'];
    //Busca ese nombre en la tabla
    $sentencia = $BD->prepare("SELECT * FROM pacientes WHERE nombre=?");
    $sentencia->execute([$validacion]);
    //Toma todos los objetos
    $pacientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    //Si no encuentra nada, reenvia al CRUD de pacientes
    if ($pacientes == NULL){
        header('Location: paginaPacientes.php');
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

<?php foreach ($pacientes as $pacientes){ ?>
<?php } ?>


<!--Formulario con los campos de la tabla de pacientes-->
<!--Aqui podemos añadir nuevos pacientes-->
<form action="actualizarPaciente.php" method="post">
<center><div class="form-group">
<label for="matricula">Nombre</label>
<input type="text" class="form-control" readonly="readonly" name="nombre" id="nombre" value="<?php echo $pacientes->nombre ?>" required>
</div></center>
<div class="col">
<center><div class="form-group">
<label for="matricula">Edad</label>
<input type="text" class="form-control" name="edad" id="edad" value="<?php echo $pacientes->edad ?>" required>
</div></center>
<center><div class="form-group">
<label for="matricula">Fecha de nacimiento</label>
<input type="date" class="form-control" name="nac" id="nac" value="<?php echo $pacientes->fecha_nac ?>" required>
</div></center>
<center><div class="form-group">
<label for="matricula">Sexo</label>
<input type="text" class="form-control" name="sexo" id="sexo" value="<?php echo $pacientes->sexo ?>" required>
</div></center>
<center><div class="form-group">
<label for="matricula">Tipo de sangre</label>
<input type="text" class="form-control" name="sangre" id="sangre" value="<?php echo $pacientes->sangre ?>" required>
</div></center>
<center>
<center> <button type="submit" class="btn btn-primary">Actualizar
</button> </center>
<br>
<center><a href="paginaPacientes.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Volver</a></center>

</center>
</form>
</div>
<div class="col">
</div></div></div>
</div>
</div>


</body>


</html>