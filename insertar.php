<?php
// CONSULTAR(leer) A LA BASE DE DATOS
$consulta = 'SELECT * FROM `t_colores`';
$getQuery = $conexionPDO->prepare($consulta);
$getQuery->execute();
//resultado almacena un arreglo
$resultado = $getQuery->fetchAll();

#var_dump($resultado);
//AGREGAR A LA BASE DE DATOS
if ($_POST) {
	#almacenar las variables que se obtienen por el método post
	$color = $_POST['color_name'];
	$descripcion = $_POST['description'];

	$sql_insert = 'INSERT INTO `t_colores` (`color_name`, `description`) VALUES(?,?)';
	$getInsert = $conexionPDO->prepare($sql_insert);
	$getInsert->execute(array($color, $descripcion));
	header('location:index.php');
}
if ($_GET) {
	# code...
	$saveId = $_GET['id_colores'];
	$sql_id = 'SELECT * FROM `t_colores` WHERE `t_colores`.`id_colores`=?';
	$procesarId = $conexionPDO->prepare($sql_id);
	$procesarId->execute(array($saveId));
	$resultadoId = $procesarId->fetch();
	//var_dump sirve para mostrar la informacion de una variable
	#var_dump($resultadoId);
}