<?php
    //Conexion con la BD
    include_once "conexion_bd.php";
    //Guarda el nombre del doctor
    $validacion = $_POST['id'];
    //Busca ese nombre en la tabla
    $sentencia = $BD->prepare("SELECT * FROM doctores WHERE nombre=?");
    $sentencia->execute([$validacion]);
    //Toma todos los objetos
    $doctores = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    //Si no encuentra nada, reenvia al CRUD de doctores
    if ($doctores == NULL){
        header('Location: paginaDoctores.php');
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

<!--Recorro todos los campos, de lo contrario no me deja usarlos como valor para el form-->
<?php foreach ($doctores as $doctores){ ?>
<?php } ?>

<form action="actualizarDoctor.php" method="post">
<center><div class="form-group">
<label for="nombre">Nombre</label>
<!--Al input le asigno el valor del nombre-->
<input type="text" readonly="readonly" class="form-control" name="nombre" id="nombre" value="<?php echo $doctores->nombre ?>" required>
</div></center>
<div class="col">
<center><div class="form-group">
<label for="rango">Rango</label>
<!--Al input le asigno el valor del rango-->
<input type="text" class="form-control" name="rango" id="rango" value="<?php echo $doctores->rango ?>" required>
</div></center>
<center><div class="form-group">
<label for="contra">Contraseña</label>
<!--Al input le asigno el valor de la contraseña-->
<input type="text" class="form-control" name="contra" id="contra" value="<?php echo $doctores->contra ?>" required>
</div></center>
<center>
<center> <button type="submit" class="btn btn-primary">Actualizar
</button> </center>
</center>
</form>
<br>
<center><a href="paginaDoctores.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Volver</a></center>

</div>
<div class="col">
</div></div></div>
</div>
</div>
</body>


</html>