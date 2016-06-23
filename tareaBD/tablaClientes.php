<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query();
$cliente = $result -> fetch_assoc();

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

      <div class="large-10 columns">
        <h3>Clientes</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="150">Rut</th>
                    <th width="170">Nombre</th>
                    <th width="150">Mail</th>
                    <th>Telefono</th>
                    <th>Fecha Nacimiento</th>
                    <th>Lugar Origen</th>
                    <th>Sexo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($cliente = $result->fetch_assoc())
                  {
                  ?>
                  <tr>
                    <td><?php echo $cliente['RUT']; ?></td>
                    <td><?php echo $cliente['NOMBRE']; ?></td>
                    <td><?php echo $cliente['MAIL']; ?></td>
                    <td><?php echo $cliente['TELEFONO']; ?></td>
                    <td><?php echo $cliente['FECHA_NACIMIENTO']; ?></td>
                    <td><?php echo $cliente['LUGAR_ORIGEN']; ?></td>
                    <td><?php echo $cliente['SEXO']; ?></td>
                    <td>
                      <a href="./delete.php?RUT=<?php echo $cliente['RUT']; ?>" class="button tiny alert">Eliminar</a>
                    </td>
                  </tr>
                  <?php
                }
                  ?>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>


    <?php require_once('footer.php'); ?>
