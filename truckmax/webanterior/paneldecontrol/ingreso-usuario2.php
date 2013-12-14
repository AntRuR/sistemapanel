<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$login = $_POST['nombre'];
$nombre = $_POST['nombre'];
$clave = $_POST['clave'];
$correo = $_POST['correo'];
$query1 = "insert into usuario(login,nombre,clave,correo) values ('".$login."','".$nombre."','".$clave."','".$correo."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-usuario.php?ok=ok");
?>