<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$des_mar = $_POST['marcades'];
$id_mar = $_POST['marca'];
$query1 = "update marca set des_mar='$des_mar' where id_mar='$id_mar'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificacion-marca1.php?ok=ok");
?>