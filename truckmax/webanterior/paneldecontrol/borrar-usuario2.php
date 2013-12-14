<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_usu = $_POST['usuario'];
$query1 = "select * from usuario where id_usu='$id_usu'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "delete from usuario where id_usu='$id_usu'";
mysql_query($query2, $cn) or die(mysql_error());
header("Location:borrar-usuario.php?ok=ok");
?>