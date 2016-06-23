<?php
include_once('utilities.php');
include_once('db/database_utilities.php');
$result = run_query_empleados();
$empleado = $result -> fetch_assoc();



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
        <h3>Empleados</h3>
          <p>Listado</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <table>
                <thead>
                  <tr>
                    <th width="150">Rut Empleado</th>
                    <th width="170">Numero Seccion</th>
                    <th width="150">Nombre</th>
                    <th>Mail</th>
                    <th>Telefono</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Lugar de Origen</th>
                    <th width="150">Sexo</th>
                    <th width="150">Tipo</th>
                    <th width="150">Usuario</th>
                    <th width="150">Contraseña</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while($empleado = $result->fetch_assoc())
                  {
                  ?>
                  <tr>
                    <td><?php echo $empleado['RUT_EMPLEADO']; ?></td>
                    <td><?php echo $empleado['NUMERO_SECCION']; ?></td>
                    <td><?php echo $empleado['NOMBRE']; ?></td>
                    <td><?php echo $empleado['MAIL']; ?></td>
                    <td><?php echo $empleado['TELEFONO']; ?></td>
                    <td><?php echo $empleado['FECHA_NACIMIENTO']; ?></td>
                    <td><?php echo $empleado['LUGAR_ORIGEN']; ?></td>
                    <td><?php echo $empleado['SEXO']; ?></td>
                    <td><?php echo $empleado['TIPO']; ?></td>
                    <td><?php echo $empleado['usuario']; ?></td>
                    <td><?php echo $empleado['password']; ?></td>
                    <td>
                      <a href="./delete_empleado.php?RUT_EMPLEADO=<?php echo $empleado['RUT_EMPLEADO']; ?>" class="button tiny alert">Eliminar</a>
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
