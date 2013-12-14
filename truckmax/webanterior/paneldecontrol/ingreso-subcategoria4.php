<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$subcate = $_POST['subcate'];
$query1 = "update subcategoria set iniciar='N'";
mysql_query($query1, $cn) or die(mysql_error());
$query2 = "update subcategoria set iniciar='S' where id_subcat='".$subcate."'";
mysql_query($query2, $cn) or die(mysql_error());
header("Location:ingreso-subcategoria3.php?ok=ok");
?>