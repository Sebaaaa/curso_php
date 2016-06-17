<?php
function debug($value)
{

  echo '<pre>';
  var_dump($value);
  echo '</pre>';

}

$user_data = [];
$user_data['rut'] = '18243577-5';
$user_data['name'] = 'Sebastian';
$user_data['age'] = 65;
$user_data['compnay'] = 'Apple';
$user_data['availability'] = true;

$usuarios[] = [
    'rut' => '18243577-5',
    'nombre' => 'Sebastian Gaete',
    'mail' => 'seba.gaete@bd.cl',
    'telefono' => 28549419,
    'fecha_nacimiento' => '13/06/1992',
    'Lugar_origen' => 'Chile',
    'Sexo' => 'M'
 ];

 $usuarios[] = [
     'rut' => '6546545-8',
     'nombre' => 'Jorge Aliste',
     'mail' => 'jorge.aliste@bd.cl',
     'telefono' => 28984135,
     'fecha_nacimiento' => '13/10/1995',
     'Lugar_origen' => 'Chile',
     'Sexo' => 'M'
  ];


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
    <div class="row">
      <div class="large-3 columns">
        <h1><img src="./img/logo.png"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="#" class="button">Inicio</a></li>
          <li><a href="./formulario_contacto.php" class="button">Contacto</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <h4>Hola</h4>
        <p>Cafe "El campus".</p>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4>Contenido del arreglo</h4>
          <div class="row">
            <div class="large-12 columns">
              <?php debug($user_data);  ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <table width="100%">
          <thead>
            <tr>
              <th>Rut</th>
              <th>Nombre</th>
              <th>Mail</th>
              <th>Telefono</th>
              <th>Fecha Nacimiento</th>
              <th>Lugar Origen</th>
              <th>Sexo</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($usuarios as $person){ ?>
            <tr>
              <td> <?php echo $person['rut'] ?> </td>
              <td> <?php echo $person['nombre'] ?> </td>
              <td> <?php echo $person['mail'] ?> </td>
              <td> <?php echo $person['telefono']?> </td>
              <td> <?php echo $person['fecha_nacimiento']?> </td>
              <td> <?php echo $person['Lugar_origen']?> </td>
              <td> <?php echo $person['Sexo']?> </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright 2016.</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">Inicio</a></li>
              <li><a href="./formulario_contacto.php">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script>
      document.write('<script src=./js/vendor/' +
      ('__proto__' in {} ? 'zepto' : 'jquery') +
      '.js><\/script>')
    </script>
    <script src="./js/zepto.js"></script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    <script src="./js/vendor/jquery.js"></script>
    <script src="./js/foundation/foundation.js"></script>
    <script>
          $(document).foundation();

          var doc = document.documentElement;
          doc.setAttribute('data-useragent', navigator.userAgent);
        </script>
  </body>
</html>
