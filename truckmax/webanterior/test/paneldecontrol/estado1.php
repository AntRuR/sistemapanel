<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select a.*,b.nom_cli as nombre, b.ape_cli as apellido from compra a, cliente b where a.estado='PENDIENTE' and a.id_cli=b.id_cli order by a.fecha desc";
if(isset($_POST['code'])){
	$query1="select a.*,b.nom_cli as nombre, b.ape_cli as apellido from compra a, cliente b where a.estado='".$_POST['code']."' and a.id_cli=b.id_cli order by a.fecha desc";	
}
if(isset($_POST['nombre'])){
	$id_compra = substr($_POST['nombre'],5,strlen($_POST['nombre']));
	$query1="select a.*,b.nom_cli as nombre, b.ape_cli as apellido from compra a, cliente b where a.id_compra='".$id_compra."' and a.id_cli=b.id_cli order by a.fecha desc";	
}
//echo $query1;
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
function cambiaf_a_normal($fecha){ 
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
    return $lafecha; 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::ESTADOS DE PEDIDO::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function buscar(valor){
	document.frm1.code.value=valor
	document.frm1.submit();
}
function validar(){
	if(document.frm2.nombre.value==""){
		alert("Debe ingresar un Nombre para la busquedad");
		return document.frm2.nombre.focus();
	}
	document.frm2.submit();
}
function detalle(valor){
	document.frm3.id.value=valor;
	document.frm3.submit();
}
function cambiarEstado(valor){
	document.frm3.action = "estado2.php";
	document.frm3.id.value=valor;
	document.frm3.submit();
}
function eliminar(valor){
	if (confirm("Seguro que desea eliminar el carro")) {
		document.frm3.action = "estado4.php";
		document.frm3.id.value=valor;
		document.frm3.submit();
	}
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
            <table width="970" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" class="textos">
                <form name="frm1" method="post" action="estado1.php">
  <input type="hidden" name="code" />
</form>
<form name="frm3" method="post" action="reporte-busquedad2.php">
  <input type="hidden" name="id" />
</form>
<form name="frm2" action="estado1.php" method="post">
<table width="300" border="0" align="left" cellpadding="4" bordercolor="#000000">
    <tr>
      <td colspan="3" align="center" class="BigTitles">ESTADOS</td>
    </tr>
    <tr>
      <td width="228" align="center"><input type="button" class="actualizar" onclick="buscar('PENDIENTE')" value="PENDIENTE" /></td>
      <td width="228" align="center"><input type="button" class="actualizar" onclick="buscar('PAGADO')" value="PAGADO" /></td>
      <td width="229" align="center"><input type="button" class="actualizar" onclick="buscar('ENVIADO')" value="ENVIADO" /></td>
    </tr>
    <tr>
      <td height="12" align="left" colspan="3"></td>
    </tr>
    <tr>
      <td align="left" colspan="3"><strong>Buscar por nombre de Carro:</strong>&nbsp;&nbsp;
        <input type="text" name="nombre" />
        &nbsp;&nbsp;
      <input type="button" class="actualizar" onclick="validar()" value="BUSCAR" /></td>
    </tr>
  </table>
 
</form>
                </td>
              </tr>
              
              <tr>
            <td height="28" align="left" valign="middle" class="textos">
            <?php if($row_rs_query1['nombre']<>""){?>
             <br/>
<table border="0" align="left" cellpadding="2" bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">

  
  <tr>
    <td width="90" align="left" bgcolor="#777777" class="textos"><strong>NOMBRE CARRO:</strong></td>
    <td width="200" align="left" bgcolor="#777777" class="textos">&nbsp; <strong>CLIENTE:</strong></td>
    <td width="80" align="center" bgcolor="#777777" class="textos">&nbsp; <strong>COSTO DEL SHIPPING:</strong></td>
    <td width="80" align="center" bgcolor="#777777" class="textos"><strong>COSTO DE COMPRA:</strong></td>
    <td width="80" align="left" bgcolor="#777777" class="textos">&nbsp; <strong>FECHA:</strong></td>
    <td width="90 align="left" bgcolor="#777777" class="textos">&nbsp; <strong>ESTADO:</strong></td>
    </tr>
    <?php
  	do{
  ?>
  <tr>
  <td align="left" class="textos">Cart-<?php echo $row_rs_query1['id_compra']?></td>
    <td align="left" class="textos"><?php echo $row_rs_query1['nombre'].", ".$row_rs_query1['apellido']?></td>
    <td align="left" class="textos">$<?php echo $row_rs_query1['costo_ship']?></td>
    <td align="left" class="textos">$<?php echo $row_rs_query1['costo_prod']?></td>
   <td align="left" class="textos"><?php echo cambiaf_a_normal($row_rs_query1['fecha'])?></td>
    <td align="left" class="pendiente"><span><?php echo $row_rs_query1['estado']?></span></td>
    <td align="center" class="texto-black"><input type="button" class="estado" onclick="cambiarEstado(<?php echo $row_rs_query1['id_compra']?>)" value="CAMBIAR ESTADO" />
    &nbsp; 
      <input type="button" class="actualizar" onclick="detalle(<?php echo $row_rs_query1['id_compra']?>)" value="DETALLE" />&nbsp; 
      <input type="button" class="actualizar"  onclick="eliminar(<?php echo $row_rs_query1['id_compra']?>)" value="ELIMINAR" /></td>
  </tr>
   <?php
  	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
  ?>
</table>
<?php }else{
	echo "<center>No hay Compras en este Estado</center>";
}?>
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