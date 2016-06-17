<?php
session_start();

function debug( $value )
{
	echo '<pre>';
	var_dump($value);
	echo '</pre>';
}

function say_year()
{
  return date('Y');
}