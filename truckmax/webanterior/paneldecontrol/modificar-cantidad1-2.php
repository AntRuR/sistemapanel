<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$cant_mar = $_POST['cant'];
$id_marl = $_POST['Id_mar'];
$query1 = "update existencia set cantidad='$cant_mar' where id_marcador=$id_marl";
//echo $query1;
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificar-cantidad.php?ok=ok");
?>