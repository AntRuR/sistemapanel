<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_cat = $_POST['categoria'];
$query1 = "select * from producto where id_cat='$id_cat'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
//borrando las imagenes de los productos a borrar
do{
	if($row_rs_query1['img_pro1']<>""){
		$destino1 = "../imagenes_producto_chica/".$row_rs_query1['img_pro1'];
		$destino2 = "../imagenes_producto_chica_thumbnails/".$row_rs_query1['img_pro1'];
		$destino3 = "../imagenes_producto_grande/".$row_rs_query1['img_pro1'];
		$destino4 = "../imagenes_producto_mediana/".$row_rs_query1['img_pro1'];
		unlink($destino1);
		unlink($destino2);
		unlink($destino3);
		unlink($destino4);
	}
	if($row_rs_query1['img_pro2']<>""){
		$destino1 = "../imagenes_producto_chica/".$row_rs_query1['img_pro2'];
		$destino2 = "../imagenes_producto_chica_thumbnails/".$row_rs_query1['img_pro2'];
		$destino3 = "../imagenes_producto_grande/".$row_rs_query1['img_pro2'];
		$destino4 = "../imagenes_producto_mediana/".$row_rs_query1['img_pro2'];
		unlink($destino1);
		unlink($destino2);
		unlink($destino3);
		unlink($destino4);
	}
	if($row_rs_query1['img_pro3']<>""){
		$destino1 = "../imagenes_producto_chica/".$row_rs_query1['img_pro3'];
		$destino2 = "../imagenes_producto_chica_thumbnails/".$row_rs_query1['img_pro3'];
		$destino3 = "../imagenes_producto_grande/".$row_rs_query1['img_pro3'];
		$destino4 = "../imagenes_producto_mediana/".$row_rs_query1['img_pro3'];
		unlink($destino1);
		unlink($destino2);
		unlink($destino3);
		unlink($destino4);
	}
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
//borrando todos los registros pretenecientes a esta categoria
$query2 = "delete from producto where id_cat='$id_cat'";
mysql_query($query2, $cn) or die(mysql_error());
$query3 = "delete from subcategoria where id_cat='$id_cat'";
mysql_query($query3, $cn) or die(mysql_error());
$query4 = "delete from categoria where id_cat='$id_cat'";
mysql_query($query4, $cn) or die(mysql_error());
header("Location:borrar-categoria1.php?cod_prod=".$id_pro."&ok=ok");
?>