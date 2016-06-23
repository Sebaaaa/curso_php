<?php
$today = date('d/m/Y');
$name = "Sebastian";
$last_name = "Gaete";
$name2 = "Jorge";
$last_name2 = "Aliste";
$url = "http://www.martiBD.com/";
$url2 = "http://localhost/curso_php/tareaBD/tablaClientes.php";
$url3 = "http://localhost/curso_php/tareaBD/tablaEmpleados.php";
$url4 = "http://localhost/curso_php/tareaBD/iniciarSesion.php";


function anio_actual(){
  return date("Y");
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
    <div class="row">
      <div class="large-3 columns">
        <h1><img src="./img/batman.jpg"/></h1>
      </div>
      <div class="large-9 columns">
        <ul class="right button-group">
          <li><a href="#" class="button">Inicio</a></li>
          <li><a href="<?php echo $url4; ?>" class="button">Iniciar Sesion</a></li>
          <li><a href="#" class="button">Productos</a></li>
          <li><a href="<?php echo $url2; ?>" class="button">Clientes</a></li>
          <li><a href="<?php echo $url3; ?>" class="button">Empleados</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <img src="./img/cafe.jpg"/>
        <h4>Cafetería "El Campus"</h4>
        <p>La mejor pagina web con la mejor gestion de BD que puedas encontrar en un solo lugar!</p>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel">
          <h4><?php echo $today; ?></h4>
          <div class="row">
            <div class="large-9 columns">
              <p>Al momento de registrar empleados deberá crear su usuario y contraseña de acceso</p>
            </div>
            <div class="large-3 columns">
              <a href="<?php echo $url; ?>" class="radius button right">Alguna Acción</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="row">
      <div class="large-12 columns">
        <hr/>
        <div class="row">
          <div class="large-6 columns">
            <p>&copy; Copyright <?php echo $name; ?> <?php echo $last_name; ?>  <?php echo $name2; ?> <?php echo $last_name2; ?> <?php echo anio_actual(); ?> .</p>
          </div>
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Artículos</a></li>
              <li><a href="#">Contacto</a></li>
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
