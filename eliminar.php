<?php

include "conexion.php";
$id = $_GET['id_colores'];

$sql_eliminar = 'DELETE FROM `t_colores` WHERE `t_colores`.`id_colores` = ?';
$procesarEliminar = $conexionPDO->prepare($sql_eliminar);
$procesarEliminar->execute(array($id));

header('location:index.php');