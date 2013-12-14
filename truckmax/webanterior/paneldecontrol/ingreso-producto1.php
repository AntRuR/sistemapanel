<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from talla";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$query3 = "select * from marca";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
$query5 = "select * from formato";
$rs_query5 = mysql_query($query5, $cn) or die(mysql_error());
$row_rs_query5 = mysql_fetch_assoc($rs_query5);
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
            <td valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top" class="correcto">&nbsp; &nbsp; &nbsp; &nbsp;<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
                  <br/>
<form name="frm1" action="ingreso-producto2.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td colspan="3" align="center"><strong class="BigTitles">INGRESO DE PRODUCTO</strong></td>
  </tr>
  
  <tr>
    <td width="20" align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Sub-Categoria</td>
    <td><div id="subcate1">
        <!--inicio de combo categoria (sucbcategoria) -->
        <?
        $query1 = "select * from subcategoria  where id_cat = '1' order by  `subcategoria`.`ordenmenu` ASC";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
	if($row_rs_query1['des_subcat_es']==""){
		echo "<select disabled='disabled' name='subcate'><option value='0'>No Tiene Sub-Categoria</option></select>";
	}else{
		echo "<select name='subcate'>";
		do{
			echo 	"<option value='".$row_rs_query1['id_subcat']."'>".$row_rs_query1['des_subcat_es']."</option>";			
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
		};
        ?>
         <!--fin de combo categoria (sucbcategoria) -->
    </div></td>
  </tr>
  
  
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Marca</td>
    <td class="textos"><?php
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
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">C&oacute;digo </td>
    <td><input name="cod_comer" type="text" class="textos" size="80" /></td>
  </tr>
   <tr>
   <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Precio de Oferta</td>
    <td><input name="oferta" type="text" class="textos" size="80" /></td>
  </tr> 
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Precio </td>
    <td><input name="venta" type="text" class="textos" size="80" /></td>
  </tr>
  
  
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Nombre del Producto </td>
    <td><input name="nom_es" type="text" class="textos" size="80" /></td>
  </tr>
  
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Cotización </td>
    <td><input name="coti" type="file" id="coti" /></td>
  </tr>
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Imagen del Producto </td>
    <td><input type="file" name="img_prod1" /></td>
  </tr>
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Imagen 2 del Producto</td>
    <td><input type="file" name="img_prod2" /></td>
  </tr>
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Imagen 3 del Producto</td>
    <td><input type="file" name="img_prod3" /></td>
  </tr>
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Imagen 4del Producto</td>
    <td><input type="file" name="img_prod4" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Imagen 5 del Producto</td>
    <td class="textos"><input type="file" name="img_prod5" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Imagen 6 del Producto</td>
    <td class="textos"><input type="file" name="img_prod6" /></td>
  </tr>
  
  <tr>
    <td align="right" class="textos">&nbsp;</td>
    <td align="right" class="textos">Imagen 7 del Producto</td>
    <td><input type="file" name="img_prod7" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Imagen 8 del Producto</td>
    <td class="textos"><input type="file" name="img_prod8" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Imagen 9 del Producto</td>
    <td class="textos"><input type="file" name="img_prod9" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Imagen 10 del Producto</td>
    <td class="textos"><input type="file" name="img_prod10" /></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Descripci&oacute;n Corta del Producto </td>
    <td class="textos"><textarea name="descor_es" cols="80" rows=10></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="textos">&nbsp;</td>
    <td align="right" valign="top" class="textos">Descripci&oacute;n Larga del Producto </td>
    <td class="textos"><textarea name="deslar_es" cols="80" rows=16></textarea></td>
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
                                               <input name="cat_veh" type="text" class="textos" id="cat_veh" />
                                             </label></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Modelo</td>
                                             <td class="textos"><input name="model" type="text" class="textos" id="model" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">País de Fabricación</td>
                                             <td class="textos"><input name="pais_fab" type="text" class="textos" id="pais_fab" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Modelo de Motor</td>
                                             <td class="textos"><input type="text" name="model_mot" class="textos" id="model_mot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Pasajeros</td>
                                             <td class="textos"><input type="text" name="num_pas" class="textos" id="num_pas" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Puertas</td>
                                             <td class="textos"><input type="text" name="num_pue" class="textos" id="num_pue" /></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Marca</td>
                                             <td class="texto"><input type="text" name="mar" class="textos" id="mar" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Fabricación del Vehículo</td>
                                             <td class="texto"><input type="text" name="fab_veh" class="textos" id="fab_veh" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Marca del Motor</td>
                                             <td class="texto"><input type="text" name="mar_mot" class="textos" id="mar_mot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Combustible</td>
                                             <td class="texto"><input type="text" name="comb" class="textos" id="comb" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Asientos</td>
                                             <td class="texto"><input type="text" name="num_asi" class="textos" id="num_asi" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Colores</td>
                                             <td class="texto"><input type="text" name="colors" class="textos" id="colors" /></td>
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
                                             <td class="textos"><input type="text" name="direc" class="textos" id="direc" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos de servicio</td>
                                             <td class="textos"><input type="text" name="fre_ser" class="textos" id="fre_ser" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ubicacion de Motor</td>
                                             <td class="textos"><input type="text" name="ubi_mot" class="textos" id="ubi_mot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Cilindros</td>
                                             <td class="textos"><input type="text" name="num_cil" class="textos" id="num_cil" /></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos delanteros</td>
                                             <td class="texto"><input type="text" name="fre_del" class="textos" id="fre_del" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Frenos Posteriores</td>
                                             <td class="texto"><input type="text" name="fre_post" class="textos" id="fre_post" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Posición de Motor</td>
                                             <td class="texto"><input type="text" name="pos_mot" class="textos" id="pos_mot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Configuración de Motor</td>
                                             <td class="texto"><input type="text" name="conf_mot" class="textos" id="conf_mot" /></td>
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
                                             <td class="textos"><input type="text" name="lar_tot" class="textos" id="lar_tot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Alto Total (Mm.)</td>
                                             <td class="textos"><input type="text" name="alt_tot" class="textos" id="alt_tot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ancho Total (Mm.)</td>
                                             <td class="textos"><input type="text" name="anc_tot" class="textos" id="anc_tot" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Largo Carrozable</td>
                                             <td class="textos"><input type="text" name="lar_car" class="textos" id="lar_car" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Alto Carrozable</td>
                                             <td class="textos"><input type="text" name="alt_car" class="textos" id="alt_car" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Ancho Carrozable</td>
                                             <td class="textos"><input type="text" name="anc_car" class="textos" id="anc_car" /></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Numero de Ejes</td>
                                             <td class="textos"><input type="text" name="num_eje" class="textos" id="num_eje" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Distancia entre Ejes (m)</td>
                                             <td class="textos"><input type="text" name="dist_eje" class="textos" id="dist_eje" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Peso Bruto</td>
                                             <td class="textos"><input type="text" name="pes_bru" class="textos" id="pes_bru" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Capacidad de Carga</td>
                                             <td class="textos"><input type="text" name="cap_car" class="textos" id="cap_car" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Peso Neto</td>
                                             <td class="textos"><input type="text" name="pes_net" class="textos" id="pes_net" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Formula Rodante</td>
                                             <td class="textos"><input type="text" name="for_rod" class="textos" id="for_rod" /></td>
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
                                             <td class="textos"><input type="text" name="cilindrada" class="textos" id="cilindrada" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Neumáticos</td>
                                             <td class="textos"><input type="text" name="neumaticos" class="textos" id="neumaticos" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Tracción</td>
                                             <td class="textos"><input type="text" name="traccion" class="textos" id="traccion" /></td>
                                           </tr>
                                         </table>                                         </td>
                                         <td>
                                         <table width="300" border="0" cellspacing="0" cellpadding="0">
                                           <tr>
                                             <td width="140" height="26" class="textos">Potencia máxima</td>
                                             <td class="textos"><input type="text" name="pot_max" class="textos" id="pot_max" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Número de Ruedas</td>
                                             <td class="textos"><input type="text" name="num_rue" class="textos" id="num_rue" /></td>
                                           </tr>
                                           <tr>
                                             <td width="140" height="26" class="textos">Tipo de Caja</td>
                                             <td class="textos"><input type="text" name="tip_caj" class="textos" id="tip_caj" /></td>
                                           </tr>
                                         </table></td>
                                       </tr>
                                     </table>    </td>
  </tr>
  <tr><td colspan="3" align="right"><input name="Botón" type="button" class="actualizar" onclick="Validar()" value="Grabar" /></td></tr>
</table>
</form></td>
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
<?php
}else{
	header("Location:index.php?var=$var1");
	
}
?>