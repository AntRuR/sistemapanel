<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id = $_POST['id_cli'];
$query1 = "delete from cliente where id_cli='$id'";
mysql_query($query1, $cn) or die(mysql_error());
$query2 = "delete from cliente_shipping where id_cli='$id'";
mysql_query($query2, $cn) or die(mysql_error());
$query3 = "delete from compra where id_id_cli='$id'";
mysql_query($query3, $cn) or die(mysql_error());
header("Location:list-clientes1.php");
?>