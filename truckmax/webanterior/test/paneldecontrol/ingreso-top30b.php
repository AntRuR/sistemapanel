<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['prod1'];
$id_pro_rel = $_POST['prod2'];
$query1 = "insert into top30(id_pro) values ('$id_pro')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-top30a.php?ok1=ok");
?>