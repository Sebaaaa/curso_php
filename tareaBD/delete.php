<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

header('Location: tablaClientes.php');
$RUT = isset( $_GET['RUT'] ) ? $_GET['RUT'] : 0;
delete($RUT);