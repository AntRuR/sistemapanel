<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['cod_pro'];
$query1 = "select * from color where id_pro='$id_pro'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
do{
	$destino1 = "../imagenes_colores/".$row_rs_query1['img_col'];
	$destino2 = "../imagenes_colores_thumbnails/".$row_rs_query1['img_col'];
	unlink($destino1);
	unlink($destino2);
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
$query2="delete from color where id_pro='$id_pro'";
mysql_query($query2, $cn) or die(mysql_error());
header("Location:borrar-color1.php?ok=ok");
?>