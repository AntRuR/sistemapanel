<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from producto order by id_pro desc limit 0,10";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE COLORES::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function Validar(){
	if(document.frm1.prod.value==""){
		alert("Debe Introducir un nombre para filtrar la búsquedad");
		return false;
	}
	ObtenerDatos('ingreso-colorbusquedad1.php?prod='+document.frm1.prod.value+'&fecha='+Date(),'busquedad');
}
</script>
</head>
<body>
<?php include("menu.php");?><br/><br />
<strong>INGRESO DE COLORES X PRODUCTO</strong><br/>
<form name="frm1" method="post">
  <table>
    <tr>
      <td colspan="2" align="center"><strong>Busque el Producto</strong></td>
    </tr>
    <tr>
      <td>Nombre del Producto</td>
      <td><input type="text" name="prod" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="button" onclick="Validar()" value="Buscar" /></td>
    </tr>
  </table>
</form>
<div id="busquedad">
  <table border="1">
    <tr>
      <td colspan="2" align="center"><strong>10 &uacute;ltimos productos ingresados</strong></td>
    </tr>
    <?php
do{
	echo "<tr>";
	echo "<td>".$row_rs_query1['nom_pro_es']." // ".$row_rs_query1['nom_pro_en']."</td>";
	echo "<td><a href='ingreso-color2.php?cod_prod=".$row_rs_query1['id_pro']."'>A&ntilde;adir colores</a></td>";
	echo "</tr>";
}while($row_rs_query1 = mysql_fetch_array($rs_query1));
?>
  </table>
</div>
</body>
</html>
