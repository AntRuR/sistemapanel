<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$des_tal = $_POST['des_tal'];
$query1 = "insert into talla(des_tal) values ('".$des_tal."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-talla1.php?ok=ok");
?>