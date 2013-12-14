<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_top = $_POST['id'];
$query1 = "delete from top30 where id_top='$id_top'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:borrar-top30a.php?ok1=ok");
?>