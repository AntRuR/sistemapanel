<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
if(isset($_POST['producto'])){
	$producto = $_POST['producto'];
	$id_compra = substr($_POST['producto'],5,strlen($_POST['producto']));
	require_once('../Connections/cn.php');
	mysql_select_db($database_cn, $cn);
	$query1 = "select a.*,b.nom_cli as nombre, b.ape_cli as apellido from compra a, cliente b where a.id_compra='$id_compra' and a.id_cli=b.id_cli";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::MODIFICACION DE PRODUCTO::.</title>
<script language="javascript">
function validar(valor){
	if(document.frm1.producto.value==""){
		alert("Debe Escribir un Producto para la busquedad");
		return false;
	}
	document.frm1.submit();
}
function detalle(valor){
	document.frm2.id.value=valor;
	document.frm2.submit();
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
<link href="estilos/estilos.css" rel="stylesheet" type="text/css" /></head>
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
                <td height="1000" align="left" valign="top">
                <span class="correcto"><?php if(isset($_GET['ok'])){ echo "Borrado Correcto";}?></span>
<br/>
<br/>
<strong class="BigTitles">BUSQUEDAD DE CARRITO DE COMPRA</strong>
<form name="frm1" action="reporte-busquedad1.php" method="post">
  <table>
    <tr>
      <td class="textos"><strong>Nombre del Carro: </strong></td>
      <td><input name="producto" type="text" class="textos" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="button" class="actualizar" onclick="validar()" value="BUSCAR" /></td>
    </tr>
  </table>
</form>
<br/>
<br/>
<form name="frm2" action="reporte-busquedad2.php" method="post">
<input type="hidden" name="id" />
</form>
  <?php
if(isset($_POST['producto'])){
?>
  <table border="0" cellpadding="2" bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
    <tr>
      <td width="220" align="center" bgcolor="#777777" class="textos"><strong>CLIENTE</strong></td>
      <td width="80" align="center" bgcolor="#777777" class="textos"><strong>SHIPPING</strong></td>
      <td width="80" align="center" bgcolor="#777777" class="textos"><strong>PRECIO</strong></td>
      <td width="80" align="center" bgcolor="#777777" class="textos"><strong>FECHA</strong></td>
      <td align="center">&nbsp;</td>
    </tr>
    <?php
  if($row_rs_query1['id_cli']==""){
  	echo "<tr><td colspan='5' aling='center'>No se Encontr&oacute; Ning&uacute;na Compra con ese ID</td></tr>";
  }else{
  	do{
  ?>
    <tr>
      <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; <?php echo $row_rs_query1['nombre'].", ".$row_rs_query1['apellido']?></td>
      <td align="right" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query1['costo_ship']?> &nbsp;</td>
      <td align="right" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query1['costo_prod']?> &nbsp;</td>
      <td align="right" bgcolor="#DDDDDD" class="textos"><?php echo $row_rs_query1['fecha']?> &nbsp;</td>
      <td align="center"><input type="button" class="actualizar" onclick="detalle(<?php echo $row_rs_query1['id_compra']?>)" value="DETALLE" /></td>
    </tr>
    <?php
  	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
  }
  ?>
  </table>
  <?php
}
?>
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
<?php
}else{
	header("Location:index.php?var=$var1");
	
}
?>
</body>
</html>
