<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_tal = $_POST['talla'];
$query0 = "update talla set des_tal='".$_POST['des_tal']."' where id_tal = '".$id_tal."'";
mysql_query($query0, $cn) or die(mysql_error());
$query1 = "select * from talladescripcion where id_tal = '".$id_tal."' order by id_taldes";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
do{
$id_taldes = $row_rs_query1['id_taldes'];
	if(isset($_POST['des'.$id_taldes])){
		$query2 = "update talladescripcion set des_destal='".$_POST['des'.$id_taldes]."' where id_taldes='".$id_taldes."' and id_tal='".$id_tal."'";
		mysql_query($query2, $cn) or die(mysql_error());
	}	
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
header("Location:modificacion-talla1.php?ok=ok");
?>