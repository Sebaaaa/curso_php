<?php
function debug($value)
{

  echo '<pre>';
  var_dump($value);
  echo '</pre>';

}

//debug($_POST);

$language = isset($_GET['language']) ? $_GET['language'] : 0;

switch ($language) {
	case '0':
		# code...
		echo 'Buen día';
		break;
	case '1':
		# code...
		echo 'Good day';
		break;
	case '2':
		# code...
		echo 'Bon jour';
		break;

}
