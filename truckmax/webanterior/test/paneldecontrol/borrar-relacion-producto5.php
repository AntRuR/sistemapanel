<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_GET['id'];
$query1 = "delete from relacionproducto where id_pro_rel='$id_pro'";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:borrar-relacion-producto1.php?ok2=ok");
?>