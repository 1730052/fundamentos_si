<!DOCTYPE html>
<html lang="en">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <head>
    <style type="text/css">
      body {
        background:url(Background/landmark3.jpeg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Inicio de sesión del Alumno</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">UPV CAI</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a class="nav-link" href="inicioTeacher.php">Teacher</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <br><br><br>
      <center><h1><strong>Inicio de Sesión</strong></h1></center>
      <br><br><br>
      <div class="row">
        <div class="col">
          
        </div>
        <div class="col">
          <form action="student_record.php" method="post">
            <div class="form-group">
              <label for="matricula">Matricula</label>
              <input type="number" class="form-control" name="matricula">
            </div>
            <center>
                <button type="submit" class="btn btn-primary">Iniciar
                </button>
            </center>
          </form>
        </div>
        <div class="col">
          
        </div>
      </div>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>