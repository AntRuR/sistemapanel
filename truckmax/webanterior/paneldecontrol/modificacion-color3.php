<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['cod_pro'];
$query1 = "select * from color where id_pro='$id_pro'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
do{
	$nombrees = $row_rs_query1['id_col']."es";
	$nombreen = $row_rs_query1['id_col']."en";
	if(isset($_POST[$nombrees])){
		$query2="update color set des_col_es='".$_POST[$nombrees]."', des_col_en='".$_POST[$nombreen]."' where id_col='".$row_rs_query1['id_col']."'";
		mysql_query($query2, $cn) or die(mysql_error());
	}
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
header("Location:modificacion-color2.php?cod_prod=".$id_pro."&ok=ok");
?>