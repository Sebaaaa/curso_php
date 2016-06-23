<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  $RUT_EMPLEADO = isset( $_POST['RUT_EMPLEADO'] ) ? $_POST['RUT_EMPLEADO'] : '';
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';


  $datos_empleado = get_rut_empleado( $RUT_EMPLEADO ); //VER ESTO PARA LA TABLA DE EMPLEADOS SOLAMENTE.......CON ATRIBUTOS DE USUARUI Y CONTRASEÑA

  if( $password == $datos_empleado['password']  )
  {

    $_SESSION['uRUT_EMPLEADO'] = $datos_empleado['RUT_EMPLEADO'];
    header('Location: restricted.php');
    die();

  }
  else
  {
    die('Datos incorrectos');
  }
}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Inicie Sesión</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
                <form method="post">
                  <div class="row">
                    <div class="large-6 columns">
                      <label>Rut Empleado
                        <input type="text" name="RUT_EMPLEADO"  />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-6 columns">
                      <label>Contraseña
                        <input type="password" name="password"  />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-6 columns">
                      <input type="submit" class="button success tiny" value="ENTRAR" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>