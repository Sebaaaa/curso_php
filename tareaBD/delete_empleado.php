<?php
include_once('utilities.php');
include_once('db/database_utilities.php');

header('Location: tablaEmpleados.php');
$RUT_EMPLEADO = isset( $_GET['RUT_EMPLEADO'] ) ? $_GET['RUT_EMPLEADO'] : 0;
delete_empleado($RUT_EMPLEADO);