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

div.a {
    text-align: center;
}

.center_div{
    margin: 10 auto;
    width:50% /* value of your choice which suits your alignment */
}

.bg {

  /* The image used */
  background-image: url("Background/landmark3.jpeg");
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
</head>
<body>

<div class="bg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UPV CAI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Teacher</a></li>
    </ul>
  </div>
</nav>

<br>
<br>
<br>
<br>


<form action="instert_student.php" method="post"> 
<div class="container center_div">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="Nombres" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="Apellidos" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Group</label>
      <input type="number" class="form-control" id="validationDefault03" placeholder="Group" name="idGrupo" required>
      <br>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Career</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Career" name="carrera" required>
      <br>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Level</label>
      <input type="number" class="form-control" id="validationDefault03" placeholder="Level" name="nivel" required>
      <br>
    </div>
    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Registration tag</label>
      <input type="number" class="form-control" id="validationDefault03" placeholder="Student's tag" name="Matricula"required>
    </div>
    <br>
    <br>
  </div></div>
  <br>
<div class="container center_div">
  <br><br><br>
  <button class="btn btn-primary" type="submit">Register</button> 
</div>

</form>

</div>
</body>
</html>