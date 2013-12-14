<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
//$query1 = "select * from categoria";
//$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
//$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from talla";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query3 = "select * from marca";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO PRODUCTO::.</title>
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
function Validar(){
	if(document.frm1.subcate.value==0){
		alert("Elija una Sub-Categoria");
		return false;
	}
	if(document.frm1.marca.value==0){
		alert("Elija una Marca");
		return false;
	}
	if(document.frm1.formato.value==""){
		alert("Introdusca un Precio de Venta");
		return document.frm1.formato.focus();
	}
	if(document.frm1.aplica.value==""){
		alert("Introdusca una aplicacion");
		return document.frm1.aplica.focus();
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
   }else{
   		alert("Debe Subir Una Imagen del Producto");
		return false;
   }
	document.frm1.submit();
}
</script>
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("menu.php");?>
<br/>
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
<br/>
<form name="frm1" action="ingreso-producto2.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td colspan="2" align="center"><strong>INGRESO DE PRODUCTO</strong></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">Categoria</td>
    <td><div id="subcate1">
        <!--inicio de combo categoria (sucbcategoria) -->
        <?
        $query1 = "select * from subcategoria where id_cat = '1'";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
	if($row_rs_query1['des_subcat_es']==""){
		echo "<select disabled='disabled' name='subcate'><option value='0'>No Tiene Sub-Categoria</option></select>";
	}else{
		echo "<select name='subcate'>";
		do{
			echo 	"<option value='".$row_rs_query1['id_subcat']."'>".$row_rs_query1['des_subcat_es']." // ".$row_rs_query1['des_subcat_en']."</option>";			
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
		};
        ?>
         <!--fin de combo categoria (sucbcategoria) -->
    </div></td>
  </tr>
  
  
  <tr>
    <td align="right">Marca</td>
    <td><?php
		echo "<select name='marca'>";
		echo  "<option value='0'>Elije una Marca</option>";
		do{
			echo "<option value='".$row_rs_query3['id_mar']."'>";
			echo $row_rs_query3['des_mar'];
			echo "</option>";
		}while($row_rs_query3 = mysql_fetch_array($rs_query3));
		echo "</select>";
    	?></td>
  </tr>
  <tr>
    <td align="right">Emision </td>
    <td><input name="emision" type="text" id="emision" size="80" /></td>
  </tr>
  <tr>
    <td align="right">Idioma </td>
    <td><label>
      <select name="idioma" id="idioma">
        <option value="0">Seleccionar</option>
        <option value="en">English</option>
        <option value="es">Español</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td align="right">Formato </td>
    <td><input name="formato" type="text" id="formato" size="80" /></td>
  </tr>
  <tr>
    <td align="right">Aplicación </td>
    <td><input name="aplica" type="text" id="aplica" size="80" /></td>
  </tr>
  <tr>
    <td align="right">C&oacute;digo </td>
    <td><input type="text" name="cod_comer" size="80" /></td>
  </tr>
  
  <tr>
    <td align="right">Precio </td>
    <td><input type="text" name="venta" size="80" /></td>
  </tr>
  
  
  <tr>
    <td align="right">Nombre del Producto </td>
    <td><input type="text" name="nom_es" size="80" /></td>
  </tr>
  
  <tr>
    <td align="right">Imagen del Producto </td>
    <td><input type="file" name="img_prod1" /></td>
  </tr>
  <tr>
    <td align="right">Documento de Descarga </td>
    <td><input type="file" name="img_prod2" /></td>
  </tr>
  <tr>
    <td align="right">Documento Más Detalle </td>
    <td><input type="file" name="img_prod3" /></td>
  </tr>
  <tr>
    <td align="right">Tabla de Contenidos </td>
    <td><input type="file" name="img_prod4" /></td>
  </tr>
  <tr>
    <td align="right" valign="top">Descripci&oacute;n Corta del Producto </td>
    <td><textarea name="descor_es" cols="80" rows=16></textarea></td>
  </tr>
  
  <tr>
    <td align="right" valign="top">Descripci&oacute;n Larga del Producto </td>
    <td><textarea name="deslar_es" cols="80" rows=16></textarea></td>
  </tr>
  
  <tr><td colspan="2" align="right"><input name="Botón" type="button" onclick="Validar()" value="Grabar" /></td></tr>
</table>
</form>
</body>
</html>
