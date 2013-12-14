<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$tipo_nom = $_POST['marcador'];
$query1 = "insert into categoria(tipo_nom) values ('".$tipo_nom."')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-marcador.php?ok=ok");
?>