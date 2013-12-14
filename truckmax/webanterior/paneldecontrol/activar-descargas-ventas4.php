<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_compra = $_POST['id'];
$query1 = "delete from compra where id_compra='$id_compra'";
mysql_query($query1, $cn) or die(mysql_error());
$query2 = "delete from carro_compra where id_compra='$id_compra'";
mysql_query($query2, $cn) or die(mysql_error());
header("Location:activar-descargas-ventas.php");
?>