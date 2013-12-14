<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$nom_estado = $_POST['nom_estado'];
$query1 = "insert into estado(nom_estado) values ('$nom_estado')";
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-estado1.php?ok=ok");
?>