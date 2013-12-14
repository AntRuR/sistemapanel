<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['producto'];
$query0 = "delete from producto where id_pro='$id_pro'";
mysql_query($query0, $cn) or die(mysql_error());
header("Location:borrar-producto1.php?ok=ok");
?>