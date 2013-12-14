<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$des_mar = $_POST['marca'];
$query1 = "insert into marca(des_mar) values ('".$des_mar."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-marca1.php?ok=ok");
?>