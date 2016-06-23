<?php
require_once('database_credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM cliente';
	return $mysqli->query($sql);

}

function run_query_empleados()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM empleado';
	return $mysqli->query($sql);

}

function delete($RUT)
{
	global $mysqli;
	$sql = "DELETE FROM cliente WHERE RUT = '$RUT'";
	$mysqli->query($sql);
}

function delete_empleado($RUT_EMPLEADO)
{
	global $mysqli;
	$sql = "DELETE FROM empleado WHERE RUT_EMPLEADO = '$RUT_EMPLEADO'";
	$mysqli->query($sql);
}

function add($RUT,$NOMBRE,$MAIL,$TELEFONO,$FECHA_NACIMIENTO,$LUGAR_ORIGEN,$SEXO)
{
	global $mysqli;
	$sql = "INSERT INTO cliente(RUT,NOMBRE,MAIL,TELEFONO,FECHA_NACIMIENTO,LUGAR_ORIGEN,SEXO) values ('$RUT','$NOMBRE','$MAIL',$TELEFONO,'$FECHA_NACIMIENTO','$LUGAR_ORIGEN','$SEXO')";
	$mysqli->query($sql);
}

function add_empleado($RUT_EMPLEADO,$NUMERO_SECCION,$NOMBRE,$MAIL,$TELEFONO,$FECHA_NACIMIENTO,$LUGAR_ORIGEN,$SEXO,$TIPO,$usuario,$password)
{
	global $mysqli;
	$sql = "INSERT INTO empleado(RUT_EMPLEADO,NUMERO_SECCION,NOMBRE,MAIL,TELEFONO,FECHA_NACIMIENTO,LUGAR_ORIGEN,SEXO,TIPO,usuario,password) values ('$RUT_EMPLEADO',$NUMERO_SECCION,'$NOMBRE','$MAIL',$TELEFONO,'$FECHA_NACIMIENTO','$LUGAR_ORIGEN','$SEXO',$TIPO,'$usuario','$password')";
	$mysqli->query($sql);
}

function get_rut_empleado( $RUT_EMPLEADO )
{
	global $mysqli;
	$sql = "SELECT * FROM empleado WHERE RUT_EMPLEADO ='$RUT_EMPLEADO'";
	$result = $mysqli->query($sql);
	return $result->fetch_assoc();
}

