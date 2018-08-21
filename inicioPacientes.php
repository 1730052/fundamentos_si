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
</ul>
</div>
</nav>

<div class="container"><br><br>
<center><h1><strong>Inicio de Sesión</strong></h1></center><br>
<div class="row">
<div class="col">
          
</div>
<center> <div class="col">
<!--Inicio de sesion para los pacientes, solo el doctor tiene acceso, es el CRUD para administrar los pacientes-->
<form action="sesionPacientes.php" method="post">
<div class="form-group">
<label for="matricula">Administrador</label>
<input type="text" class="form-control" name="usuario" id="usuario" required>
</div></center>
            
<div class="col">
<center><div class="form-group">
<label for="matricula">Contraseña</label>
<input type="password" class="form-control" name="contra" id="contra" required></div></center>
<center> <button type="submit" class="btn btn-primary">Iniciar Sesión
</button> </center></form></div>
<div class="col"></div></div></div></div></div>
</body>

</html>