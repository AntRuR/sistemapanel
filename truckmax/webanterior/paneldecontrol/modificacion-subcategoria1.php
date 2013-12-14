<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query3 = "select * from marca";
$rs_query3 = mysql_query($query3, $cn) or die(mysql_error());
$row_rs_query3 = mysql_fetch_assoc($rs_query3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::MODIFICACION PRODUCTO::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarSubcate(valor){
	ObtenerDatos('modificacion-subcategoria1_1.php?categoria='+valor+'&fecha='+Date(),'subcate1');
}
function Validar(){
	if(document.frm1.cate.value==0){
		alert("Elija una Categoria");
		return false;
	}
	if(document.frm1.subcate.value==0){
		alert("Elija una Sub-Categoria");
		return false;
	}
	if(document.frm1.subcat_es.value==""){
		alert("Debe ingresar un nombre");
		return document.frm1.subcat_es.focus();
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
            <?php if(isset($_GET['ok'])){ echo "Ingreso Correcto (Limpie las cookies para que observe las modificaciones al instante)";}?>
<br/>
<form name="frm1" action="modificacion-subcategoria2.php" method="post" enctype="multipart/form-data">
<table>
  <tr>
    <td colspan="2" align="center"><strong class="BigTitles">MODIFICAR SUBCATEGORIA</strong></td>
  </tr>
  <tr>
    <td align="right" class="textos">Categoria: </td>
    <td class="textos"><?php
		echo "<select name='cate' onChange=mostrarSubcate(this.value)>";
		echo "<option value='0'>Elije una opcion</option>";
		do{
			echo "<option value='".$row_rs_query1['id_cat']."'>";
			echo $row_rs_query1['des_cat_es'];
			echo "</option>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
    	?></td>
  </tr>
  <tr>
    <td align="right" class="textos">Sub-Categoria: </td>
    <td><div id="subcate1">
        <select name="subcate" disabled="disabled" class="textos">
          <option>Elije una Categoria</option>
        </select>
      </div></td>
  </tr><td class="textos">Nombre de sub-categoria: </td>
      <td><input name="subcat_es" type="text" class="textos" /></td>
    </tr>
    
    <tr><td colspan="2" align="right"><input type="button" class="actualizar" onclick="Validar()" value="MODIFICAR" /></td></tr>
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
<?php
}else{
	header("Location:index.php?var=$var1");
	
}
?>