<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$equi_mar = $_POST['equivalC'];
$id_marl = $_POST['Id_mar'];
$query1 = "update producto set id_subcat='$equi_mar' where id_pro=$id_marl";
//echo $query1;
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificacion-producto1.php?ok=ok");
?>