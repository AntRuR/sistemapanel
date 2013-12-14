<?php
session_start();
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$login = $_POST['login'];
$clave = $_POST['clave'];
$query2 = "select * from usuario where login='$login' and clave='$clave'";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
//echo $query2;
if($row_rs_query2['nombre']<>""){
	$_SESSION["nombre"] = $row_rs_query2['nombre'];
	$var1=$_SESSION["nombre"];
	header("Location:menu.php?var=$var1");
}else{
	header("Location:index.php");
}
?>