<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$cate1 = $_POST['cate1'];
$subcate1 = $_POST['subcate1'];
$subcate1 = $_POST['subcate1'];
$cate2 = $_POST['cate2'];
$id_pro = $_POST['prod1'];
$id_pro_rel = $_POST['prod2'];
$query1 = "insert into relacionproducto(id_pro,id_pro_rel) values ('$id_pro','$id_pro_rel')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:relacion-producto1.php?ok1=ok");
?>