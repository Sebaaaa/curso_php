<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

if( $_POST )
{

  header('Location: tablaClientes.php');
  //die();
  $RUT = isset( $_POST['RUT'] ) ? $_POST['RUT'] : '';
  $NOMBRE = isset( $_POST['NOMBRE'] ) ? $_POST['NOMBRE'] : '';
  $MAIL = isset( $_POST['MAIL'] ) ? $_POST['MAIL'] : '';
  $TELEFONO = isset( $_POST['TELEFONO'] ) ? $_POST['TELEFONO'] : '';
  $FECHA_NACIMIENTO = isset( $_POST['FECHA_NACIMIENTO'] ) ? $_POST['FECHA_NACIMIENTO'] : '';
  $LUGAR_ORIGEN = isset( $_POST['LUGAR_ORIGEN'] ) ? $_POST['LUGAR_ORIGEN'] : '';
  $SEXO = isset( $_POST['SEXO'] ) ? $_POST['SEXO'] : '';

  add( $RUT,$NOMBRE,$MAIL,$TELEFONO,$FECHA_NACIMIENTO,$LUGAR_ORIGEN,$SEXO);
  die();

}

?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php require_once('header.php'); ?>

     
    <div class="row">
 
      <div class="large-9 columns">
        <h3>Agregar nuevo Cliente</h3>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <form method="post">
                <div class="row">
                  <div class="large-12 columns">
                    <label>Rut
                      <input type="text" name="RUT" placeholder="" />
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
                    <label>Telefono
                      <input type="number" name="TELEFONO" placeholder="" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Fecha de Nacimiento
                      <input type="text" name="FECHA_NACIMIENTO" placeholder="aaaa-mm-dd" />
                    </label>
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <label>Lugar de Origen
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