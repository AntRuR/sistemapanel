<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_tal = $_POST['talla'];
//borrando todos los registros pretenecientes a esta categoria
$query1 = "delete from talla where id_tal='$id_tal'";
mysql_query($query1, $cn) or die(mysql_error());
$query2 = "delete from talladescripcion where id_tal='$id_tal'";
mysql_query($query2, $cn) or die(mysql_error());
header("Location:borrar-talla1.php?cod_prod=".$id_pro."&ok=ok");
?>