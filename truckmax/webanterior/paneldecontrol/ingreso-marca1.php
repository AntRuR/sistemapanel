<?php
session_start(); 
//$var1=$_SESSION['nombre'];
if($_SESSION['nombre']<>""){
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from marca";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE MARCA::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarTalla(valor){
	ObtenerDatos('ingreso-talladescripcion.php?talla='+valor+'&fecha='+Date(),'valores')
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
        <td height="1000" align="center" valign="top" background="imagenes/bg-midle.jpg">
        <table width="1018" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top">
            <table width="950" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top">&nbsp;</td>
              </tr>
              <tr>
                <td height="1000" align="left" valign="top" class="correcto">
         &nbsp; &nbsp; &nbsp; &nbsp;<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
<br/>
<br/>
<strong class="BigTitles">INGRESO DE MARCA</strong>
<form name="frm1" action="ingreso-marca2.php" method="post">
  <table border="0">
    <tr>
      <td class="texts">Descripcion de la Marca : </td>
      <td><input name="marca" type="text" class="textos" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" class="actualizar" value="GRABAR" /></td>
    </tr>
  </table>
</form>
<hr />
<table bordercolor="#BBBBBB" style="border:1px solid #BBBBBB;">
  <tr>
    <td width="220" colspan="2" align="center" class="BigTitles" bgcolor="#777777"> &nbsp; Marcas Registradas</td>
  </tr>
	<?php
	if($row_rs_query1['des_mar']==""){
			echo "<tr>";
			echo "<td bgcolor='#DDDDDD' class='textos'>No Tiene Marcas Registradas</td>";
			echo "</tr>";
	}else{
		do{
			echo "<tr>";
			echo "<td height='24' bgcolor='#DDDDDD' class='textos'>&nbsp; ".$row_rs_query1['des_mar']."</td>";
			echo "</tr>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	}
    ?>
</table></td>
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