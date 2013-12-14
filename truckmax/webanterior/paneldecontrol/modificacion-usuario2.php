<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_usu = $_POST['usuario'];
$clave = $_POST['clave'];
$query1 = "update usuario set clave='$clave' where id_usu='$id_usu'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificacion-usuario.php?ok=ok");
?>