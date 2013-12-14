<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$prod = $_GET['prod'];
$id_col = $_GET['color'];
$query1 = "delete from color where id_col='".$id_col."'";
mysql_query($query1, $cn) or die(mysql_error());
//eliminando la imagen
$destino1 = "../imagenes_colores/".$id_col.".jpg";
$destino2 = "../imagenes_colores_prenda/".$id_col.".jpg";
$destino3 = "../imagenes_colores_thumbnails/".$id_col.".jpg";
unlink($destino1);
unlink($destino3);
$url = "Location:ingreso-color2.php?cod_prod=".$prod."&ok2=ok";
if(isset($_GET['modi'])){
	$url = "Location:modificacion-color2.php?cod_prod=".$prod."&ok2=ok";	
}
if(isset($_GET['borrar'])){
	$url = "Location:borrar-color2.php?cod_prod=".$prod."&ok2=ok";	
}
header("Location:".$url);
?>