<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_tal = $_GET['talla'];
$id_taldes = $_GET['talladescripcion'];
$query1 = "delete from talladescripcion where id_tal='".$id_tal."' and id_taldes='".$id_taldes."'";
mysql_query($query1, $cn) or die(mysql_error());
if(isset($_GET['url'])){	
	header("Location:".$_GET['url'].".php?ok3=ok");
}else{
	header("Location:ingreso-talla1.php?ok3=ok");
}
?>