<?php
#script PDO que permite conectar a la base de datos...
//variables de conexion
$link = "mysql:host=127.0.0.1;dbname=crud_php";
$usuario = "root";
$password = "root";

try {

	$conexionPDO = new PDO($link, $usuario, $password);

} catch (PDOException $e) {

	print "¡Error!: " . $e->getMessage() . "<br/>";
	die();
}