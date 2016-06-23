<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  header('Location: tablaEmpleados.php');
  //die();
  $RUT_EMPLEADO = isset( $_POST['RUT_EMPLEADO'] ) ? $_POST['RUT_EMPLEADO'] : '';
  $NUMERO_SECCION = isset( $_POST['NUMERO_SECCION'] ) ? $_POST['NUMERO_SECCION'] : '';
  $NOMBRE = isset( $_POST['NOMBRE'] ) ? $_POST['NOMBRE'] : '';
  $MAIL = isset( $_POST['MAIL'] ) ? $_POST['MAIL'] : '';
  $TELEFONO = isset( $_POST['TELEFONO'] ) ? $_POST['TELEFONO'] : '';
  $FECHA_NACIMIENTO = isset( $_POST['FECHA_NACIMIENTO'] ) ? $_POST['FECHA_NACIMIENTO'] : '';
  $LUGAR_ORIGEN = isset( $_POST['LUGAR_ORIGEN'] ) ? $_POST['LUGAR_ORIGEN'] : '';
  $SEXO = isset( $_POST['SEXO'] ) ? $_POST['SEXO'] : '';
  $TIPO = isset( $_POST['TIPO'] ) ? $_POST['TIPO'] : '';
  $usuario = isset( $_POST['usuario'] ) ? $_POST['usuario'] : '';
  $password = isset( $_POST['password'] ) ? $_POST['password'] : '';

  add_empleado( $RUT_EMPLEADO,$NUMERO_SECCION,$NOMBRE,$MAIL,$TELEFONO,$FECHA_NACIMIENTO,$LUGAR_ORIGEN,$SEXO,$TIPO,$usuario,$password);
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe "El campus" |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar nuevo empleado</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-12 columns">
                    <label>Rut Empleado
                      <input type="text" name="RUT_EMPLEADO" placeholder="" />
                    </label>
                  </div>
                </div> 
                <div class="row">
                  <div class="large-12 columns">
                    <label>Numero de Seccion
                      <input type="number" name="NUMERO_SECCION" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Nombre
                      <input type="text" name="NOMBRE" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Mail
                      <input type="text" name="MAIL" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Telefono Contacto
                      <input type="number" name="TELEFONO" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Fecha de Nacimiento
                      <input type="text" name="FECHA_NACIMIENTO" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Lugar de origen
                      <input type="text" name="LUGAR_ORIGEN" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Sexo
                      <input type="text" name="SEXO" placeholder="" />
                    </label>
                  </div>
                </div> 
                <div class="row">
                  <div class="large-12 columns">
                    <label>Tipo de Empleado
                      <input type="number" name="TIPO" placeholder="" />
                    </label>
                  </div>
                </div> 
                <div class="row">
                  <div class="large-12 columns">
                    <label>Usuario
                      <input type="text" name="usuario" placeholder="Cree un usuario de acceso a la pagina" />
                    </label>
                  </div>
                </div> 
                <div class="row">
                  <div class="large-12 columns">
                    <label>Clave
                      <input type="text" name="password" placeholder="Cree una contraseña para acceder al sitio" />
                    </label>
                  </div>
                </div> 
                <div class="row">
                  <div class="large-4 columns">
                    <label>
                      <input type="submit" class="button success" value="AGREGAR" />
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    

    <?php require_once('footer.php'); ?>