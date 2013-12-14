<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$des_cat_es = $_POST['nom_es'];
$des_cat_en = $_POST['nom_en'];
$query1 = "insert into categoria(des_cat_es,des_cat_en) values ('".$des_cat_es."','".$des_cat_en."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-categoria1.php?ok=ok");
?>