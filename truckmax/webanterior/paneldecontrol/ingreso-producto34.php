<?php
require_once('../Connections/cn.php');
require_once("comp_nomimg.php");
mysql_select_db($database_cn, $cn);
$urlback="";
$id_cat = 1;
$id_pro = $_POST['id_pro'];
//echo "idpro:".$id_pro."<br>"."aca termina";
$num_foto = $_POST["num_foto"];
$urlretorno = $_POST["urlOrigen"];
//$urlback =$urlretorno."producto=".$id_pro;
$urlback ="modificacion-producto2.php?producto=".$id_pro;

//Cogiendo el nombre de la imagen
$query0="select img_pro4 from producto where id_pro='$id_pro'";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);
$nombre_img = substr($row_rs_query0['img_pro4'], 0, strlen($row_rs_query0['img_pro4'])-4);
$img_pro = $nombre_img.".jpg";

	if ($nombre_img==""){
	$obj = new comp_nomimg;
	$nombre_i = $obj->creaNombre($id_pro,$num_foto);
	$img_pro = $nombre_i.".jpg";
	$query1="update producto set  img_pro4='$img_pro' where id_pro='$id_pro'";
	mysql_query($query1, $cn) or die(mysql_error());
	}

if($_FILES [ 'img_prod4' ][ 'tmp_name' ]<>""){
	//moviendo la imagen a la carpeta
	$destino1 = "../imagenes_producto_grande/".$img_pro;
	$destino2 = "../imagenes_producto_mediana/".$img_pro;
	$destino3 = "../imagenes_producto_chica/".$img_pro;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro;
	
	move_uploaded_file ( $_FILES [ 'img_prod4' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 145;
	$new_alto1 = floor( $alto * ( $new_ancho1 / $ancho ) );
	$thumb1 = imagecreatetruecolor($new_ancho1,$new_alto1);
	imagecopyresampled($thumb1,$original,0,0,0,0,$new_ancho1,$new_alto1,$ancho,$alto);
	imagejpeg($thumb1,$destino3,90); // 90 es la calidad de compresión
	//ES PARA LA CREACION DE LA IMAGEN MEDIANA
	$new_ancho2 = 400;
	$new_alto2 = floor( $alto * ( $new_ancho2 / $ancho ) );
	$thumb2 = imagecreatetruecolor($new_ancho2,$new_alto2);
	imagecopyresampled($thumb2,$original,0,0,0,0,$new_ancho2,$new_alto2,$ancho,$alto);
	imagejpeg($thumb2,$destino2,90); // 90 es la calidad de compresión
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA THUMBNAILS
	$new_ancho4 = 100;
	$new_alto4 = floor( $alto * ( $new_ancho4 / $ancho ) );
	$thumb4 = imagecreatetruecolor($new_ancho4,$new_alto4);
	imagecopyresampled($thumb4,$original,0,0,0,0,$new_ancho4,$new_alto4,$ancho,$alto);
	imagejpeg($thumb4,$destino4,90); // 90 es la calidad de compresión
}
header("Location:$urlback");
?>