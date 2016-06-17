<?php
require_once('db/database_credentials.php');
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

function delete( $RUT )
{
	global $mysqli;
	$sql = "DELETE FROM cliente WHERE RUT = {$RUT}";
	$mysqli->query($sql);
}