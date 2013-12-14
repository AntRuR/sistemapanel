<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_cat = 1;
$id_subcat = $_POST['subcate'];
$cod_comer = $_POST['cod_comer'];
$id_mar = $_POST['marca'];
$pre_ofe = $_POST['oferta'];
$pre_ven = $_POST['venta'];
$nom_pro_es = $_POST['nom_es'];
$des_cor_es = $_POST['descor_es'];
$des_lar_es = $_POST['deslar_es'];

//recogiendo los valores de la descripcion larga
$cat = $_POST['cat_veh'];
$modelo = $_POST['model'];
$pais_fab = $_POST['pais_fab'];
$model_mot = $_POST['model_mot'];
$num_pas = $_POST['num_pas'];
$num_pue = $_POST['num_pue'];

$marca = $_POST['mar'];
$fab_veh = $_POST['fab_veh'];
$mar_mot = $_POST['mar_mot'];
$combustible = $_POST['comb'];
$asientos = $_POST['num_asi'];
$color = $_POST['colors'];

$direc = $_POST['direc'];
$frenos = $_POST['fre_ser'];
$ubi_mot = $_POST['ubi_mot'];
$num_cli = $_POST['num_cil'];

$fre_del = $_POST['fre_del'];
$fre_post = $_POST['fre_post'];
$pos_mot = $_POST['pos_mot'];
$conf_mot = $_POST['conf_mot'];

$lar_tot = $_POST['lar_tot'];
$alt_tot = $_POST['alt_tot'];
$anc_tot = $_POST['anc_tot'];
$lar_car = $_POST['lar_car'];
$alt_car = $_POST['alt_car'];
$anc_car = $_POST['anc_car'];

$num_eje = $_POST['num_eje'];
$dist_eje = $_POST['dist_eje'];
$pes_bru = $_POST['pes_bru'];
$cap_car = $_POST['cap_car'];
$pes_net = $_POST['pes_net'];
$for_rod = $_POST['for_rod'];

$cilindrada = $_POST['cilindrada'];
$neumaticos = $_POST['neumaticos'];
$traccion = $_POST['traccion'];

$pot_max = $_POST['pot_max'];
$num_rue = $_POST['num_rue'];
$tip_caj = $_POST['tip_caj'];

/*
-------------------------------------------------
		SI SUBIERON COTIZACION
-------------------------------------------------
*/
if($_FILES [ 'coti' ][ 'tmp_name' ]<>""){
	$coti = $_FILES [ 'coti' ][ 'name' ];
	//$img_pro3 = $nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino11 = "../cotizacion/".$coti;
	move_uploaded_file ( $_FILES [ 'coti' ][ 'tmp_name' ], $destino11);
	//Haciendo el insert
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$cod_comer."')";
}
if($_FILES [ 'img_prod1' ][ 'tmp_name' ]<>""){
//Renombrando el nombre de la imagen con un codigo
$query0="select max(id_pro) as img_nombre from producto";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);
$nombre_img1 = $row_rs_query0['img_nombre']+1;
$img_pro1 = $nombre_img1.".jpg";
//moviendo la imagen a la carpeta
$destino1 = "../imagenes_producto_grande/".$img_pro1;
$destino2 = "../imagenes_producto_mediana/".$img_pro1;
$destino3 = "../imagenes_producto_chica/".$img_pro1;
$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro1;
move_uploaded_file ( $_FILES [ 'img_prod1' ][ 'tmp_name' ], $destino1);
$original = imagecreatefromjpeg($destino1);
$ancho = imagesx($original);
$alto = imagesy($original);
//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
$new_ancho1 = 100;
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

//Haciendo el insert
if(isset($coti)){
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$cod_comer."')";

}
}
/*
}
-------------------------------------------------
		SI SUBIERON UNA SEGUNDA IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod2' ][ 'tmp_name' ]<>""){
	$img_pro2 = $nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro2;
	$destino2 = "../imagenes_producto_mediana/".$img_pro2;
	$destino3 = "../imagenes_producto_chica/".$img_pro2;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro2;
	move_uploaded_file ( $_FILES [ 'img_prod2' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$cod_comer."')";

}
}
/*
-------------------------------------------------
		SI SUBIERON UNA TERCERA IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod3' ][ 'tmp_name' ]<>""){
	$img_pro3 = $nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro3;
	$destino2 = "../imagenes_producto_mediana/".$img_pro3;
	$destino3 = "../imagenes_producto_chica/".$img_pro3;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro3;
	move_uploaded_file ( $_FILES [ 'img_prod3' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$cod_comer."')";
	}else{
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$cod_comer."')";
	
	}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 4 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod4' ][ 'tmp_name' ]<>""){
	$img_pro4 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro4;
	$destino2 = "../imagenes_producto_mediana/".$img_pro4;
	$destino3 = "../imagenes_producto_chica/".$img_pro4;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro4;
	move_uploaded_file ( $_FILES [ 'img_prod4' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
		if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$cod_comer."')";
	}else{
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$cod_comer."')";
	
	
	}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 5 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod5' ][ 'tmp_name' ]<>""){
	$img_pro5 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro5;
	$destino2 = "../imagenes_producto_mediana/".$img_pro5;
	$destino3 = "../imagenes_producto_chica/".$img_pro5;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro5;
	move_uploaded_file ( $_FILES [ 'img_prod5' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
		if(isset($coti)){
	
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$cod_comer."')";
}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 6 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod6' ][ 'tmp_name' ]<>""){
	$img_pro6 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro6;
	$destino2 = "../imagenes_producto_mediana/".$img_pro6;
	$destino3 = "../imagenes_producto_chica/".$img_pro6;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro6;
	move_uploaded_file ( $_FILES [ 'img_prod6' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$cod_comer."')";
}
}

/*
-------------------------------------------------
		SI SUBIERON UNA 7 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod7' ][ 'tmp_name' ]<>""){
	$img_pro7 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro7;
	$destino2 = "../imagenes_producto_mediana/".$img_pro7;
	$destino3 = "../imagenes_producto_chica/".$img_pro7;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro7;
	move_uploaded_file ( $_FILES [ 'img_prod7' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$cod_comer."')";
	}else{
		$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$cod_comer."')";
	
	}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 8 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod8' ][ 'tmp_name' ]<>""){
	$img_pro8 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro8;
	$destino2 = "../imagenes_producto_mediana/".$img_pro8;
	$destino3 = "../imagenes_producto_chica/".$img_pro8;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro8;
	move_uploaded_file ( $_FILES [ 'img_prod8' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
		if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$cod_comer."')";
}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 9 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod9' ][ 'tmp_name' ]<>""){
	$img_pro9 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro9;
	$destino2 = "../imagenes_producto_mediana/".$img_pro9;
	$destino3 = "../imagenes_producto_chica/".$img_pro9;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro9;
	move_uploaded_file ( $_FILES [ 'img_prod9' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,img_pro9,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$img_pro9."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,img_pro9,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$img_pro9."','".$cod_comer."')";
}
}
/*
-------------------------------------------------
		SI SUBIERON UNA 10 IMAGEN
-------------------------------------------------
*/
if($_FILES [ 'img_prod10' ][ 'tmp_name' ]<>""){
	$img_pro10 = $nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1."-".$nombre_img1.".jpg";
	$destino1 = "../imagenes_producto_grande/".$img_pro10;
	$destino2 = "../imagenes_producto_mediana/".$img_pro10;
	$destino3 = "../imagenes_producto_chica/".$img_pro10;
	$destino4 = "../imagenes_producto_chica_thumbnails/".$img_pro10;
	move_uploaded_file ( $_FILES [ 'img_prod10' ][ 'tmp_name' ], $destino1);
	$original = imagecreatefromjpeg($destino1);
	$ancho = imagesx($original);
	$alto = imagesy($original);
	//ES PARA LA CREACION DE LA IMAGEN PEQUEÑA
	$new_ancho1 = 100;
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
	//Haciendo el insert
	if(isset($coti)){
	$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,descarga,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,img_pro9,img_pro10,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$coti."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$img_pro9."','".$img_pro10."','".$cod_comer."')";
}else{
$query1 = "insert into producto(id_cat,id_subcat,id_mar,nom_pro_es,des_cor_es,des_lar_es,pre_ofer,pre_ven,img_pro1,img_pro2,img_pro3,img_pro4,img_pro5,img_pro6,img_pro7,img_pro8,img_pro9,img_pro10,cod_comer) values ('".$id_cat."','".$id_subcat."','".$id_mar."','".$nom_pro_es."','".$des_cor_es."','".$des_lar_es."','".$pre_ofe."','".$pre_ven."','".$img_pro1."','".$img_pro2."','".$img_pro3."','".$img_pro4."','".$img_pro5."','".$img_pro6."','".$img_pro7."','".$img_pro8."','".$img_pro9."','".$img_pro10."','".$cod_comer."')";
}
}
//echo"query1:". $query1."<br>";
mysql_query($query1, $cn) or die(mysql_error());



//------------

	$query6 = "select id_pro from producto order by id_pro desc limit 1";
	$rs_query6 = mysql_query($query6, $cn) or die(mysql_error());
	$row_rs_query6 = mysql_fetch_assoc($rs_query6);
	$id_prodf =  $row_rs_query6["id_pro"];
	 //echo "ultimo id:".$id_prodf."<br>" ;
//Haciendo el insert a la tabla descripcion larga (des_lar_det) caracteristica tecnica

$query5 = "insert into des_lar_det(id_dld,id_pro,cat_veh ,model,pais_fab,model_mot,num_pas,num_pue,mar,fab_veh ,mar_mot,combustible,num_asi,color,direc,fre_ser,ubi_mot,num_cil,fre_del,fre_post,pos_mot,conf_mot,lar_tot,alt_tot,anc_tot,lar_car,alt_car,anc_car,num_eje,dist_eje,pes_bru,cap_car,pes_net,for_rod,cilindrada,neumaticos,traccion,pot_max,num_rue,tip_caj) 
values (NULL,'".$id_prodf."','".$cat."','".$modelo."','".$pais_fab."','".$model_mot."','".$num_pas."','".$num_pue."','".$marca."','".$fab_veh."','".$mar_mot."','".$combustible."','".$asientos."','".$color."','".$direc."','".$frenos."','".$ubi_mot."','".$num_cli."','".$fre_del."','".$fre_post."','".$pos_mot."','".$conf_mot."','".$lar_tot."','".$alt_tot."','".$anc_tot."','".$lar_car."','".$alt_car."','".$anc_car."','".$num_eje."','".$dist_eje."','".$pes_bru."','".$cap_car."','".$pes_net."','".$for_rod."','".$cilindrada."','".$neumaticos."','".$traccion."','".$pot_max."','".$num_rue."','".$tip_caj."')";  

//echo"query5:". $query5."<br>";

//echo "query5: ".$query5;

mysql_query($query5, $cn) or die(mysql_error());

header("Location:ingreso-producto1.php?ok=ok");
?>