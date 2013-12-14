<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_POST['producto'];
$query0 = "select * from producto where id_pro='$id_pro'";
$rs_query0 = mysql_query($query0, $cn) or die(mysql_error());
$row_rs_query0 = mysql_fetch_assoc($rs_query0);

$query01 = "select * from des_lar_det where id_pro='$id_pro'";
$rs_query01 = mysql_query($query01, $cn) or die(mysql_error());
$row_rs_query01 = mysql_fetch_assoc($rs_query01);

$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from talla";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query3 = "select * from marca";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
$query4 = "select * from subcategoria where id_cat='".$row_rs_query0['id_cat']."'";
$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
$row_rs_query4 = mysql_fetch_assoc($rs_query4);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::MODIFICACION PRODUCTO::.</title>
<!-- TinyMCE -->
<script language="javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
        // Sera usado para displayar las imagenes en el proceso de edicion:
		relative_urls : false,
	    //los plugins te permiten cargar las propiedades predefinidas
		plugins : "table,advhr,advlink,iespell,preview,zoom,flash,paste,directionality,fullscreen,noneditable,contextmenu",
		theme_advanced_buttons1_add : "fontselect,fontsizeselect",
		theme_advanced_buttons2_add : "separator,preview,zoom,separator,forecolor,backcolor,liststyle",
 		theme_advanced_buttons2_add_before: "cut,copy,paste,pastetext,pasteword,separator",
		theme_advanced_buttons3_add_before : "tablecontrols,separator",
		theme_advanced_buttons3_add : "iespell,flash,advhr,separator,separator,ltr,rtl,separator,fullscreen",
    	theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		content_css : "example_full.css",
	    plugin_insertdate_dateFormat : "%Y-%m-%d",
	    plugin_insertdate_timeFormat : "%H:%M:%S",
		extended_valid_elements : "hr[class|width|size|noshade]",
		paste_use_dialog : false,
		theme_advanced_resizing : true,
		theme_advanced_resize_horizontal : false,
		theme_advanced_link_targets : "_something=My somthing;_something2=My somthing2;_something3=My somthing3;"
	});
</script>
<!-- /TinyMCE -->
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function EsImagen(valor){
 var valorUpper;
 valorUpper= new String(valor.toUpperCase());
 return(valorUpper.lastIndexOf(".JPG")>=0);
}
function mostrarSubcate(valor){
	ObtenerDatos('ingreso-productodescripcion1.php?categoria='+valor+'&fecha='+Date(),'subcate1');
}
function mostrarTalla(valor){
	ObtenerDatos('ingreso-productodescripcion2.php?talla='+valor+'&fecha='+Date(),'valores')
}
function Validar(){
	if(document.frm1.subcate.value==0){
		alert("Elija una Sub-Categoria");
		return false;
	}
	if(document.frm1.marca.value==0){
		alert("Elija una Marca");
		return false;
	}
	if(document.frm1.venta.value==""){
		alert("Introdusca un Precio de Venta");
		return document.frm1.venta.focus();
	}
	if(document.frm1.cod_comer.value==""){
		alert("Introdusca un Nombre del Producto");
		return document.frm1.cod_comer.focus();
	}
	if(document.frm1.nom_es.value==""){
		alert("Introdusca un Nombre del Producto");
		return document.frm1.nom_es.focus();
	}
	if (document.frm1.img_prod1.value!=""){
      if(!EsImagen(document.frm1.img_prod1.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 1)");   
		return;
	  }

   }
	if (document.frm1.img_prod2.value!=""){
      if(!EsImagen(document.frm1.img_prod2.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 2)");   
		return;
	  }
   }
	if (document.frm1.img_prod3.value!=""){
      if(!EsImagen(document.frm1.img_prod3.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 3)");   
		return;
	  }
   }
   if (document.frm1.img_prod4.value!=""){
      if(!EsImagen(document.frm1.img_prod4.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 4)");   
		return;
	  }
   }
   if (document.frm1.img_prod5.value!=""){
      if(!EsImagen(document.frm1.img_prod5.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 5)");   
		return;
	  }
   }
   if (document.frm1.img_prod6.value!=""){
      if(!EsImagen(document.frm1.img_prod6.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG (imagen 6)");   
		return;
	  }
   }
	document.frm1.submit();
}
</script>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	background-color: #b7bfc0;
	margin-bottom: 0px;
	margin-left: 0px;
	margin-right: 0px;
}
-->
</style>
<link href="panel.css" rel="stylesheet" type="text/css" />
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">
    <table width="1290" height="1000" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1290" height="75" align="center" valign="top" background="imagenes/bg_top1.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200">
            <table width="200" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" class="pixel">Desarrolado por: <a href="http://www.pixelgraphicperu.com/" target="_blank" class="pixel">PixeGraphic</a></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td  class="panel">Panel de Control &nbsp; &nbsp;</td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td height="34" align="center" valign="top" background="imagenes/bg_btn.jpg">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="34"><?php include("menu2.php");?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="1000" align="center" valign="top" background="imagenes/bg-midle.jpg"><table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top" class="correcto">
           <?php if(isset($_GET['ok'])){ echo "Modificacion Correcto";}?>
<br/>
<form name="frm1" action="ingreso-producto3.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $row_rs_query0['id_pro']?>" name="id_pro" />
<table>
  <tr>
    <td colspan="2" align="center"><strong>INGRESO DE PRODUCTO</strong></td>
  </tr>
  
  <tr>
    <td align="right">Sub-Categoria</td>
    <td><div id="subcate1">
        <?php
		echo "<select name='subcate'>";
		do{
			$selected = "";
			if($row_rs_query0['id_subcat']==$row_rs_query4['id_subcat']){
				$selected = "selected='selected'";
			}
			echo "<option $selected value='".$row_rs_query4['id_subcat']."'>";
			echo $row_rs_query4['des_subcat_es'];
			echo "</option>";
		}while($row_rs_query4 = mysql_fetch_array($rs_query4));
		echo "</select>";
    	?>
      </div></td>
  </tr>
  
  <tr>
    <td align="right">Marca</td>
    <td><?php
		echo "<select name='marca'>";
		echo  "<option value='0'>Elije una Marca</option>";
		do{
			$selected = "";
			if($row_rs_query0['id_mar']==$row_rs_query3['id_mar']){
				$selected = "selected='selected'";
			}
			echo "<option $selected value='".$row_rs_query3['id_mar']."'>";
			echo $row_rs_query3['des_mar'];
			echo "</option>";
		}while($row_rs_query3 = mysql_fetch_array($rs_query3));
		echo "</select>";
    	?></td>
  </tr>
  <tr>
    <td align="right">C&oacute;digo Comercial</td>
    <td><input type="text" value="<?php echo $row_rs_query0['cod_comer']?>" name="cod_comer" size="80" /></td>
  </tr>
  
  <tr>
    <td align="right">Precio de Venta</td>
    <td><input type="text" value="<?php echo $row_rs_query0['pre_ven']?>" name="venta" size="80" /></td>
  </tr>
  <tr>
    <td align="right">Nombre del Producto</td>
    <td><input type="text" value="<?php echo $row_rs_query0['nom_pro_es']?>" name="nom_es" size="80" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Cotización por</td>
    <td class="textos"><input name="coti" type="file" id="coti"  /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 1</td>
    <td><img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro1']?>" width="100"/></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 1 por</td>
    <td><input type="file" name="img_prod1" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 2</td>
    <td>
	<?php if($row_rs_query0['img_pro2']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro2']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 2";
	}?></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 2 por</td>
    <td><input type="file" name="img_prod2" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 3</td>
    <td>
	<?php if($row_rs_query0['img_pro3']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro3']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 3";
	}?>        </td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 3 por</td>
    <td><input type="file" name="img_prod3" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 4</td>
    <td><?php if($row_rs_query0['img_pro4']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro4']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 4";
	}?></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 4 por</td>
    <td><input type="file" name="img_prod4" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 5</td>
    <td>
	<?php if($row_rs_query0['img_pro5']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro5']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 5";
	}?></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 5 por</td>
    <td><input type="file" name="img_prod5" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 6</td>
    <td>
	<?php if($row_rs_query0['img_pro6']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro6']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 6";
	}?>        </td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 6 por</td>
    <td><input type="file" name="img_prod6" /></td>
  </tr>
 <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 7</td>
    <td>
	<?php if($row_rs_query0['img_pro7']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro7']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 7";
	}?>        </td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 7 por</td>
    <td><input type="file" name="img_prod7" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 8</td>
    <td><?php if($row_rs_query0['img_pro8']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro8']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 8";
	}?></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 8 por</td>
    <td><input type="file" name="img_prod8" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 9</td>
    <td>
	<?php if($row_rs_query0['img_pro9']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro9']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 9";
	}?></td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 9 por</td>
    <td><input type="file" name="img_prod9" /></td>
  </tr>
  <tr>
    <td align="right" class="texts">Vista peque&ntilde;a de la Imagen 10</td>
    <td>
	<?php if($row_rs_query0['img_pro10']<>""){?>
    	<img src="../imagenes_producto_chica_thumbnails/<?php echo $row_rs_query0['img_pro10']?>" width="100"/>
    <?php }else{
		echo "No Tiene Imagen 10";
	}?>        </td>
  </tr>
  <tr>
    <td align="right" class="texts">Cambiar Imagen 10 por</td>
    <td><input type="file" name="img_prod10" /></td>
  </tr>
  
  <tr>
    <td align="right" valign="top">Descripci&oacute;n Corta del Producto</td>
    <td><textarea name="descor_es" cols="80" rows=16><?php echo $row_rs_query0['des_cor_es']?></textarea></td>
  </tr>
  
  <tr>
    <td align="right">Descripci&oacute;n Larga del Producto (Castellano)</td>
    <td><textarea name="deslar_es" cols="80" rows=16><?php echo $row_rs_query0['des_lar_es']?></textarea></td>
  </tr>
<tr>
    <td colspan="3" align="right">
    <table width="690" border="0" cellspacing="0" cellpadding="0">
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Categoría del Vehículo</td>
                                             <td class="textos"><label>
                                               <input type="text" value="<?php echo $row_rs_query01['cat_veh']?>" name="cat_veh"/>
                                             </label></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Modelo</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['model']?>" name="model" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">País de Fabricación</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['pais_fab']?>" name="pais_fab"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Modelo de Motor</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['model_mot']?>" name="model_mot"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Pasajeros</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['num_pas']?>" name="num_pas"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Puertas</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['num_pue']?>" name="num_pue"/></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Marca</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['mar']?>" name="mar"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Fabricación del Vahículo</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['fab_veh']?>" name="fab_veh"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Marca del Motor</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['mar_mot']?>" name="mar_mot"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Combustible</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['combustible']?>" name="combustible"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Asientos</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['num_asi']?>" name="num_asi"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Colores</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['color']?>" name="color"/></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Direccion</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['direc']?>" name="direc"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos de servcico</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['fre_ser']?>" name="fre_ser"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ubicacion de Motor</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['ubi_mot']?>" name="ubi_mot"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Cilindros</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['num_cil']?>" name="num_cil"/></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos delanteros</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['fre_del']?>" name="fre_del"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos Posteriores</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['fre_post']?>" name="fre_post"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Posición de Motor</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['pos_mot']?>" name="pos_mot"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Configuración de Motor</td>
                                             <td class="texto"><input type="text" value="<?php echo $row_rs_query01['conf_mot']?>" name="conf_mot"/></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Largo Total (Mm.)</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['lar_tot']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Alto Total (Mm.)</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['alt_tot']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ancho Total (Mm.)</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['anc_tot']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Largo Carrozable</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['lar_car']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Alto Carrozable</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query0['alt_car']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ancho Carrozable</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['anc_car']?>" name="cod_comer"/></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Ejes</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['num_eje']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Distancia entre Ejes (m)</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['dist_eje']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Peso Bruto</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['pes_bru']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Capacidad de Carga</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['cap_car']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Peso Neto</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['pes_net']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Formula Rodante</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['for_rod']?>" name="cod_comer"/></td>
                                           </tr>
                                         </table>                                         </td>
                                       </tr>
                                       <tr>
                                         <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                       </tr>
                                       <tr>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Cilindrada</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['cilindrada']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Neumáticos</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['neumaticos']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Tracción</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['traccion']?>" name="cod_comer"/></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Potencia máxima</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['pot_max']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Número de Ruedas</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['num_rue']?>" name="cod_comer"/></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Tipo de Caja</td>
                                             <td class="textos"><input type="text" value="<?php echo $row_rs_query01['tip_caj']?>" name="cod_comer"/></td>
                                           </tr>
                                         </table></td>
                                       </tr>
                                     </table>    </td>
  </tr>
  <tr><td colspan="2" align="right"><input type="button" onclick="Validar()" value="MODIFICAR" /></td></tr>
</table>
</form>
</td>
            </tr>
              <tr>
            <td height="28" align="left" valign="middle" class="idioma">&nbsp;</td>
</tr>
            </table>
            </td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td align="center" valign="top"><img src="imagenes/bg_foot.jpg" width="1290" height="121" /></td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>
