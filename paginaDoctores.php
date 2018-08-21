<?php
    //Mando a llamar el archivo que contiene la conexion con la BD
    include_once "conexion_bd.php";
    //Si el resultado es verdadero, selecciono todos los campos de la tabla doctores
    $sentencia = $BD->query("SELECT * FROM doctores");
    $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //"if" en caso de que retorne NULL
    if($resultado == null || empty($resultado)){
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

<!--Comentario-->
<div class="container">           
<table class="table table-dark">
<thead>
<tr>
<!--Imprimo en la pagina el nombre de los campos que se van a mostrar-->
<th>Nombre</th>
<th>Rango</th>
</tr>
</thead>
<tbody>
<!--Recorro la tabla buscando una coincidencia-->    
<?php foreach ($resultado as $resultado){ ?>
<tr>
<!--Imprimo el contenido de la tabla, solo los campos especificados en el echo-->    
<?php $var=$resultado->nombre ?>
<td><?php echo "$var";?></td>
<td><?php echo $resultado->rango ?></td>

<!--Botones para el CRUD, editar y borrar-->
<td><form method="post" action="editDoctor.php">
<button class="right waves-effect waves-light-green btn green" type="submit" name="id" value="<?php echo htmlspecialchars($var); ?>">Editar</button>   
</form></td>

<td><form method="post" action="deleteDoctor.php">
<button type="submit" class="btn btn-danger" name="id" value="<?php echo htmlspecialchars($var); ?>">Borrar</button>
</form></td>

<td>
<?php } ?>
</tbody>
</table>
</div>
<!--Boton que manda a llamar el metodo newDoctor.php-->
 <center><a href="newDoctor.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Agregar Doctor</a></center>


</html>