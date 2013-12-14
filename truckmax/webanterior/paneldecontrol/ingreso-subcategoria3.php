<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO SUB-CATEGORIA::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarSubcate(valor){
	ObtenerDatos('ingreso-subcategoriadescripcion.php?categoria='+valor+'&fecha='+Date(),'subcate')
}
function MostrarGrabar(){
	document.frm1.grabar.disabled="";
}
</script>
</head>
<body>
<?php include("menu.php");?><br/>
<?php if(isset($_GET['ok'])){ echo "Modificaci&oacute;n Correcta";}?><br/>
<strong>ELEJIR SUB-CATEGORIA PRINCIPAL</strong>
<form name="frm1" method="post" action="ingreso-subcategoria4.php">
  <table border="1">
    <tr>
      <td>CATEGORIA </td>
      <td><?php
		echo "<select name='categoria' onChange=mostrarSubcate(this.value)>";
		echo "<option value='0'>Elija una Categoria</option>";
		do{
			echo "<option value='".$row_rs_query1['id_cat']."'>";
			echo $row_rs_query1['des_cat_es']." // ".$row_rs_query1['des_cat_en'];
			echo "</option>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
    	?></td>
    </tr>
  </table>
  <div id="subcate">elija una Categoria</div>
</form>
</body>
</html>
