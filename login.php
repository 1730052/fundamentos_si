<?php include 'partials/head.php'; ?>
<?php include 'partials/menu.php'; ?>
    <!-- Page Content -->
    <div class="container">
   
   <div class="starter-template">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">

                <form action="validarCode.php" method="POST" role="form">
                  <legend>Iniciar Sesion</legend>

                  <div class="form-group">
                      <label for="usuario">Usuario</label>
                      <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="txtPassword" class="form-control" id="usuario" autofocus required placeholder="****">
                    </div>

                    <button type="submit" class="btn btn-succes">
                    Ingresar</button>
                  </form>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'partials/footer.php'; ?>