<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_cat = $_POST['categoria'];
$des_cat_es = $_POST['cat_es'];
$des_cat_en = $_POST['cat_en'];
$query1 = "update categoria set des_cat_es='$des_cat_es', des_cat_en='$des_cat_en' where id_cat='$id_cat'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:modificacion-categoria1.php?ok=ok");
?>