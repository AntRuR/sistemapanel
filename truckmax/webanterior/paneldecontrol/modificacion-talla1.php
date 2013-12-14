<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from talla";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE TALLA::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarTalla(valor){
	ObtenerDatos('modificacion-talladescripcion.php?talla='+valor+'&fecha='+Date(),'valores')
}
function validar(){
	if(document.frm1.talla.value==0){
		alert("Debe Elegir una Talla");
		return false;
	}
	if(document.frm1.des_tal.value==""){
		alert("Debe Escribir un nombre de reemplazo");
		return false;
	}
	document.frm1.submit();
}
</script>
</head>
<body>
<?php include("menu.php");?><br/>
<?php if(isset($_GET['ok'])){ echo "Modificacion Correcta";}?>
<br/>
<br/>
<strong>MODIFICACI&Oacute;N DE DESCRIPCION TALLA</strong>
<form name="frm1" action="modificacion-talla2.php" method="post">
  <table border="1">
    <tr>
      <td>TALLA </td>
      <td><?php
		echo "<select name='talla' onChange=mostrarTalla(this.value)>";
		echo  "<option value='0'>Elije una Talla</option>";
		do{
			echo "<option value='".$row_rs_query1['id_tal']."'>";
			echo $row_rs_query1['des_tal'];
			echo "</option>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
    	?></td>
    </tr>
    <tr>
      <td>Nuevo Nombre</td>
      <td><input name="des_tal" type="text" id="des_tal" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><div id="valores">Valores de la descripcion</div></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input onclick="validar()" type="button" value="MODIFICAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>
