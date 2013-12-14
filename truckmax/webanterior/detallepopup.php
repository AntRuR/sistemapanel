<?php
require_once('Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_GET['producto'];
$query1 = "select a.*,b.des_cat_es as nombre_categoria,c.des_subcat_es as nombre_subcategoria from producto a,categoria b,subcategoria c where a.id_pro='".$id_pro."' and a.id_cat=b.id_cat and a.id_subcat=c.id_subcat";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::Ballymor - DETALLE PRODUCTO::.</title>
<script language="javascript">
function cambiarfoto(valor){
	//alert(valor);
		document.foto1.src=valor;
	}
</script>
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-repeat: repeat-x;
	background-color: #FFFFFF;
	background-image: url(images/green_backTotal.jpg);
}
-->
</style></head>
<body>
<table width="550" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="240"><img src="images/logo.png" width="227" height="53" /></td>
    <td width="310"><div align="right" class="product"><strong><?php echo $row_rs_query1['nombre_categoria']." >> ".$row_rs_query1['nombre_subcategoria']." >> ".$row_rs_query1['nom_pro_es']?></strong></div></td>
  </tr>
</table>
<table border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="145" valign="top">
	<?php
		$imagen1 = $row_rs_query1['img_pro1'];
		$imagen2 = $row_rs_query1['img_pro2'];
		$imagen3 = $row_rs_query1['img_pro3'];
		$imagen4 = $row_rs_query1['img_pro4'];
		$imagen5 = $row_rs_query1['img_pro5'];
		$imagen6 = $row_rs_query1['img_pro6'];
		$imagen7 = $row_rs_query1['img_pro7'];
		$imagen8 = $row_rs_query1['img_pro8'];
		$imagen9 = $row_rs_query1['img_pro9'];
		$imagen10 = $row_rs_query1['img_pro10'];
	
			if($imagen1<>""){
	?>
<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen1 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen1 ?>"
    <?
	$imagen="imagenes_producto_chica/".$imagen1;
	$size = GetImageSize("$imagen");
	$anchura=$size[0];
	$altura=$size[1];
	
	if ($altura > 100){ ?>
	 height="100" 
     <? }else { ?>
	 width="100"
	  <? } ?>
	 
     border="0" /></a><br/>
    	<br/>
     <?php
	 		}
			if($imagen2<>""){
	?>
    	<a href="javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen2 ?>')"><img src="imagenes_producto_mediana/<?php echo $imagen2 ?>" width="100" border="0" /></a><br/>
   	<br/>
     <?php
     }
	if($imagen3<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen3 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen3 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen4<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen4 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen4 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen5<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen5 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen5 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen6<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen6 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen6 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen7<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen7 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen7 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen8<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen8 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen8 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen9<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen9 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen9 ?>" width="100" border="0" /></a>
     <?php
	 	}
		if($imagen10<>""){
	?>
   	<a href=javascript:cambiarfoto('imagenes_producto_grande/<?php echo $imagen10 ?>')><img src="imagenes_producto_mediana/<?php echo $imagen10 ?>" width="100" border="0" /></a>
     <?php
	 	}
    ?>
   
    
       
    </td>
    <td width="490" valign="top"><p align="center" style="margin-left:5px; margin-right:5px; margin-top:5px "><img src="imagenes_producto_grande/<?php echo $imagen1 ?>" name="foto1"  <? 
	$imagen="imagenes_producto_grande/".$imagen1;
	$size = GetImageSize("$imagen");
	$anchura=$size[0];
	$altura=$size[1];
	
	if ($altura > 500){ ?>
	 height="590" 
     <? }else { ?>
	 width="600"
	  <? } ?>
	border="0" id="foto1" /></p></td>
  </tr>
</table>
</body>
</html>