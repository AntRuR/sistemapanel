<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_mar = $_POST['marca'];
$query1 = "delete from marca where id_mar='$id_mar'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:borrar-marca1.php?ok=ok");
?>