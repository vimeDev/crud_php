<?php
#manera sencilla de enviar datos por método get
// echo "editar.php?id=1&nombre-color=info&descripcion=este es un color azul-alfredo" . "<br>";
#se almacenan en variables los campos de la base de datos
$id = $_GET['id_colores'];
$color = $_GET['color_name'];
$descript = $_GET['description'];

//  echo $id . "<br>";
//  echo $color . "<br>";
//  echo $descript;

//ACTUALIZAR LA BASE DE DATOS
include "conexion.php";

$sql_update = 'UPDATE `t_colores` SET `color_name`=?, `description`=? WHERE `t_colores`.`id_colores` =?';
$procesarUpdate = $conexionPDO->prepare($sql_update);
$procesarUpdate->execute(array($color, $descript, $id));

header('location:index.php');
