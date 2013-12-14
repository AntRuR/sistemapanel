<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query4 = "select * from cliente";
$rs_query4 = mysql_query($query4, $cn) or die(mysql_error());
$row_rs_query4 = mysql_fetch_assoc($rs_query4);
$i = 0;
do{
	$idcli[$i]=$row_rs_query4["id_cli"];
	$nom[$i]=$row_rs_query4["nom_cli"];
	$ape[$i]=$row_rs_query4["ape_cli"];
	$dire[$i]=$row_rs_query4["direccion"];
	$email[$i]=$row_rs_query4["correo"];
	$pais[$i]=$row_rs_query4["pais"];
	$ciudad[$i]=$row_rs_query4["ciudad"];
	$telf[$i]=$row_rs_query4["telefono1"];
	
	$i=$i+1;
	}while($row_rs_query4 = mysql_fetch_array($rs_query4));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::ACTIVAR DESCARGAS::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function detalle(valor){
	document.frm3.id.value=valor;
	document.frm3.submit();
}
function eliminar(valor){
	if (confirm("Seguro que desea eliminar el carro")) {
		document.frm3.action = "list-clientes2.php";
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
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td align="left" valign="top" class="textos">
<form name="frm3" method="post" action="list-clientes-detalle.php">
  <input type="hidden" name="id" />
</form>
</td>
  </tr>
  <tr>
    <td valign="top">
<table valign="top" align="left" bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
  <tr>
  <td width="20" height="22" align="center" bgcolor="#777777" class="textos"><strong>ID</strong></td>
    <td width="120" height="22" align="center" bgcolor="#777777" class="textos"><strong>CLIENTE</strong></td>
    <td width="180" align="center" bgcolor="#777777" class="textos"><strong>DIRECCION</strong></td>
    <td width="134" align="center" bgcolor="#777777" class="textos"><strong>PAIS</strong></td>
    <td width="130" align="center" bgcolor="#777777" class="textos"><strong>CIUDAD</strong></td>
    <td width="100" align="center" bgcolor="#777777" class="textos"><strong>TELEFONO</strong></td>
    <td width="120" align="center" bgcolor="#777777" class="textos"><strong>CORREO</strong></td>
  </tr>
        <? 
  $k = 0;
  for($k=0;$k<sizeof($idcli);$k++){ ?>
  <tr>
  <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp;<? echo $idcli[$k] ?></td>
    <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; <? echo $nom[$k] ?>,<? echo $ape[$k] ?></td>
    <td align="left" bgcolor="#DDDDDD" class="textos">&nbsp; &nbsp;<? echo $dire[$k] ?></td>
    <td align="center" bgcolor="#DDDDDD" class="textos"><? echo $pais[$k] ?></td>
    <td align="right" bgcolor="#DDDDDD" class="textos"><? echo $ciudad[$k] ?>&nbsp; &nbsp;</td>
    <td align="right" bgcolor="#DDDDDD" class="textos"><? echo $telf[$k] ?>&nbsp; &nbsp;</td>
    <td align="center" bgcolor="#DDDDDD" class="textos"><span class="textos"><? echo $email[$k] ?></span></td>
    <td align="center"><input type="button" class="actualizar" onclick="detalle(<? echo $idcli[$k] ?>)" value="Detalle" /></td>
    </tr>
  <? }?>
</table>

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