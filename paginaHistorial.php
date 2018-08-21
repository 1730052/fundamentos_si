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

<!--Barra de navegacion, envia a index y a la vista de doctores-->
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

<br><br><br><br>
<!--Botones que tienen las actividades que se pueden realizar en la pagina-->
<center><a href="histColesterol.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Colesterol</a> </center><br>
<center><a href="histOrina.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Examen de orina</a> </center><br>
<center><a href="histSangre.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Analisis de sangre</a> </center><br>
</div>
</div>
</body>
</html>