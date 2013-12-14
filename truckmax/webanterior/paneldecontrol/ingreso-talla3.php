<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_tal = $_POST['talla'];
$des_destal = $_POST['des_destal'];
$query1 = "insert into talladescripcion(id_tal,des_destal) values (".$id_tal.",'".$des_destal."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-talla1.php?ok2=ok");
?>