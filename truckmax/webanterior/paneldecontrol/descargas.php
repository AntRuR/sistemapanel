<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);


$valor_order=$_POST['code'];
//echo "valosrecibido: ".$valor_order."---";

if($valor_order==""){
$valor_order="id_desc";
$query01="select * from descargas_dw order by id_desc desc ";
//echo "ordenar1 x: "."no llego nada"."|-----dos---|";
}else{

//query para levantar la tabla de descargas
//echo "ordenar2 x: ".$valor_order."|-----dos---|" ;
$query01="select * from descargas_dw order by $valor_order desc ";

}
$rs_query01=mysql_query($query01,$cn) or die(mysql_error);
$row_rs_query01= mysql_fetch_assoc($rs_query01);

$i = 0;
do{
	$idDesca[$i]=$row_rs_query01["id_desc"];
	$idProduc[$i]=$row_rs_query01["id_pro"];
	$nomVisit[$i]=$row_rs_query01["nombredw"];
	$emailVisit[$i]=$row_rs_query01["emaildw"];
	$fechaDesc[$i]=$row_rs_query01["fechadw"];
	$productoDesc[$i]=$row_rs_query01["productodw"];
	$numDesc[$i]=$row_rs_query01["desc_num"];
	
	$i=$i+1;
	
}while($row_rs_query01 = mysql_fetch_array($rs_query01));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Descarga por visitante</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
<script language="javascript">
//function buscar(valor){
//	document.frm1.code.value=valor
//	document.frm1.submit();
//}
function open1(valor){
	document.frm11.code.value=valor;
	document.frm11.submit();
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
<link href="estilos/style.css" rel="stylesheet" type="text/css" />
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
                <td height="1000" align="left" valign="top" class="textos">
                <table width="950" border="0" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC"  bgcolor="#FFFFFF">
  <tr>
    <td width="621" colspan="5"><div align="center"><span class="BigTitles">Reporte de descargas 
      </span>
      <div>ordenar por:
        <form name="frm11" method="post" action="descargas.php">
        <input type="hidden" name="code" />
        
          

          <table width="282" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="48"><label></label></td>
              <td width="80"><input type="button" class="actualizar" onClick="open1('productodw')" value="producto" /></td>
              <td width="42"><label></label></td>
              <td width="80"><input type="button" class="actualizar" onClick="open1('nombredw')" value="visitante" /></td>
              <td width="27"><label></label></td>
              <td width="80"><input type="button" class="actualizar" onClick="open1('fechadw')" value="fecha" /></td>
            </tr>
          </table>
          </form>
        </div>
    </div></td>
  </tr>
  
  <? 
  $k = 0;
  for($k=0;$k<sizeof($idDesca);$k++){ ?>
  
  <? }?>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" align="left">
    <table width="950" border="0" cellpadding="0" cellspacing="3" bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
      <tr>
        <td width="80"  height="40"align="center" bgcolor="#777777"><strong>Fecha descarga</strong></td>
        <td width="200" bgcolor="#777777"><div align="center"><strong>Nombre visitante</strong></div></td>
        <td width="220" bgcolor="#777777"><div align="center"><strong>Email visiante</strong></div></td>
        <td width="352" bgcolor="#777777"><div align="center"><strong>Producto</strong></div></td>
        <td width="80" align="center" bgcolor="#777777"><strong>Número descarga</strong></td>
      </tr>
      <? 
  $k = 0;
  for($k=0;$k<sizeof($idDesca);$k++){ ?>
      <tr>
        <td height="24" align="left" bgcolor="#DDDDDD">&nbsp; <? echo $fechaDesc[$k] ?></td>
        <td align="left" bgcolor="#DDDDDD" class="Estilo7">&nbsp; <? echo $nomVisit[$k] ?></td>
        <td align="left" bgcolor="#DDDDDD">&nbsp; <? echo $emailVisit[$k] ?></td>
        <td align="left" bgcolor="#DDDDDD">&nbsp; <? echo $productoDesc[$k] ?></td>
        <td align="left" bgcolor="#DDDDDD">&nbsp; <? echo $numDesc[$k] ?></td>
      </tr>
      <? }?>
    </table></td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
  </tr>
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
