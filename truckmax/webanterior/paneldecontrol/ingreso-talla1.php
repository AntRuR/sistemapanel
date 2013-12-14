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
	ObtenerDatos('ingreso-talladescripcion.php?talla='+valor+'&fecha='+Date(),'valores')
}
</script>
</head>
<body>
<?php include("menu.php");?><br/>
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
<br/>
<strong>INGRESO DE TALLA</strong>
<form name="frm1" action="ingreso-talla2.php" method="post">
  <table border="1">
    <tr>
      <td>Descripcion de la talla </td>
      <td><input type="text" name="des_tal" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" value="GRABAR" /></td>
    </tr>
  </table>
</form>
<hr/>
<?php if(isset($_GET['ok2'])){ echo "Ingreso Correcto";}?>
<?php if(isset($_GET['ok3'])){ echo "Eliminacion Correcta";}?>
<br/>
<strong>INGRESO DE DESCRIPCION TALLA</strong>
<form name="frm1" action="ingreso-talla3.php" method="post">
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
      <td colspan="2"><div id="valores">Valores de la descripcion</div></td>
    </tr>
    <tr>
      <td>Ingrese Medici&oacute;n</td>
      <td><input type="text" name="des_destal" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" value="GRABAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>
