<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_subcat = $_POST['subcate'];
$des_subcat_es = $_POST['subcat_es'];

$query1 = "update subcategoria set des_subcat_es='$des_subcat_es' where id_subcat='$id_subcat'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificacion-subcategoria1.php?ok=ok");
?>