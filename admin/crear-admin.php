<?php
      include_once 'funciones/sesiones.php';
        include_once 'templates/header.php';
        include_once 'funciones/funciones.php';
        
        include_once 'templates/barra.php';
        
        include_once 'templates/navegacion.php';
?>



<?php if($_SESSION['nivel'] == 1) { ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Usuario
        <small>Llena el formulario para crear un usuario</small>
      </h1>
    </section>

        <div class="row">
                <div class="col-md-8">
                <!-- Main content -->
                <section class="content">

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Crear Usuario</h3>
                    </div>
                    <div class="box-body">
                        <!-- form start -->
                        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
                              <div class="box-body">
                                    <div class="form-group">
                                          <label for="usuario">Usuario:</label>
                                          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                          <label for="nombre">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu Nombre Completo">
                                    </div>
                                    <div class="form-group">
                                          <label for="password">Password: </label>
                                          <input type="password" class="form-control" id="password" name="password" placeholder="Password para Iniciar Sesi??n">
                                    </div>
                                    <div class="form-group">
                                          <label for="password">Repetir Password: </label>
                                          <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Password para Iniciar Sesi??n">
                                          <span id="resultado_password" class="help-block"></span>
                                    </div>
                                    <div class="form-group">
                                          <label for="password">Nivel de Perfil:</label>
                                          <select name="nivel" class="form-control" id="nivel">
                                            <option value="0">Usuario</option>
                                            <option value="1">Administrador</option>
                                          </select>
                                    </div>
                              </div>
                              <!-- /.box-body -->

                              <div class="box-footer">
                                  <input type="hidden" name="registro" value="nuevo">
                                  <button type="submit" class="btn btn-primary" id="crear_registro_admin">A??adir</button>
                              </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->

                </section>
                <!-- /.content -->
                
                </div>
        </div>
  </div>
  <!-- /.content-wrapper -->

<?php } else { ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usted no tiene acceso a esta opci??n
        <small>Si desea hacer alg??n ajuste en este apartado consulte a su administrador del sistema</small>
      </h1>
    </section>
  </div>

<?php } ?>

  <?php
          include_once 'templates/footer.php';
  ?>

