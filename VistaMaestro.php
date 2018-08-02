<?php
    include "base_de_datos.php";
    $_GET['variable'];
    $validacion = $_SESSION['variable'];
    $validacion = 1;
    $sentencia = $BD->query("SELECT Matricula, Nombres, Apellidos, Nivel, idGrupo, Horas, Carrera FROM Alumnos WHERE idGrupo=".$validacion."");
    $alumnos = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>
<!doctype html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Maestro</title>
  </head>


  <body>
    <!--Barra de navegacion del maestro-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand">Maestro</a>
      

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
      </div>
    </nav>

   <!Zona donde aparecen las tablas con informacion general>
    <div class="container">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nombre(s)</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Nivel</th>
            <th scope="col">id Grupo</th>
            <th scope="col">Horas</th>
            <th scope="col">Carrera</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($alumnos as $alumnos){ ?>
      <tr>
        <td><?php echo $alumnos->Matricula ?></td>
        <td><?php echo $alumnos->Nombres ?></td>
        <td><?php echo $alumnos->Apellidos ?></td>
        <td><?php echo $alumnos->Nivel ?></td>
        <td><?php echo $alumnos->idGrupo ?></td>
        <td><?php echo $alumnos->Horas ?></td>
        <td><?php echo $alumnos->Carrera ?></td>
      </tr>
      <?php } ?>
        </tbody>
      </table>
    </div>
    <script src="js/jsbootstrap.min.js"></script>
  </body>
</html>