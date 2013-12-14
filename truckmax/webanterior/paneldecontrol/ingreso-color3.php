<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['cod_pro'];
$des_col_es = $_POST['des_es'];
$des_col_en = $_POST['des_en'];
//Renombrando el nombre de la imagen con un codigo
$query0="select max(id_col) as img_color from color";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);
$img_col = ($row_rs_query0['img_color']+1).".jpg";
//moviendo la imagen a la carpeta
$destino1 = "../imagenes_colores/".$img_col;
$destino2 = "../imagenes_colores_thumbnails/".$img_col;
move_uploaded_file ( $_FILES [ 'img_col' ][ 'tmp_name' ], $destino1);
$original = imagecreatefromjpeg($destino1);
$ancho = imagesx($original);
$alto = imagesy($original);
$new_ancho = 30;
$new_alto = floor( $alto * ( $new_ancho / $ancho ) );
$thumb = imagecreatetruecolor($new_ancho,$new_alto);
imagecopyresampled($thumb,$original,0,0,0,0,$new_ancho,$new_alto,$ancho,$alto);
imagejpeg($thumb,$destino2,90); // 90 es la calidad de compresión
$query1 = "insert into color(id_pro,des_col_es,des_col_en,img_col) values ('$id_pro','$des_col_es','$des_col_en','$img_col')";
//SI MANDA UNA IMAGEN DE LA PRENDA DEL COLOR
if($_FILES [ 'img_col2' ][ 'tmp_name' ]){
	$img_col2 = $img_col;
	$destino3 = "../imagenes_colores_prenda/".$img_col2;
	move_uploaded_file ( $_FILES [ 'img_col2' ][ 'tmp_name' ], $destino3);
	$original2 = imagecreatefromjpeg($destino3);
	$ancho2 = imagesx($original2);
	$alto2 = imagesy($original2);
	$new_ancho2 = 218;
	$new_alto2 = floor( $alto2 * ( $new_ancho2 / $ancho2 ) );
	$thumb2 = imagecreatetruecolor($new_ancho2,$new_alto2);
	imagecopyresampled($thumb2,$original2,0,0,0,0,$new_ancho2,$new_alto2,$ancho2,$alto2);
	imagejpeg($thumb2,$destino3,90); // 90 es la calidad de compresión
$query1 = "insert into color(id_pro,des_col_es,des_col_en,img_col,img_col2) values ('$id_pro','$des_col_es','$des_col_en','$img_col','$img_col2')";
}
//Haciendo el insert
//echo $query1."<br/>";
//echo $destino1."<br/>";
//echo $destino2;
mysql_query($query1, $cn) or die(mysql_error());
header("Location:ingreso-color2.php?cod_prod=".$id_pro."&ok=ok");
?>