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
<title>.::MODIFICACION SUB-CATEGORIA::.</title>
<script language="javascript">
function validar(){
	 if(document.frm1.cat_es.value==""){
		alert("Debe introducir un nombre de la categoria");
		return document.frm1.cat_es.focus();
	}
	 if(document.frm1.cat_en.value==""){
		alert("Debe introducir un nombre de la categoria");
		return document.frm1.cat_en.focus();
	}
	document.frm1.submit();
}
</script>
</head>
<body>
<?php include("menu.php");?><br/><br />
<strong>MODIFICAR CATEGORIA</strong><br />
<?php if(isset($_GET['ok'])){ echo "Modificacion Correcto";}?><br/>
<form name="frm1" method="post" action="modificacion-categoria2.php" enctype="multipart/form-data">
  <table border="1">
    <tr>
      <td>CATEGORIA </td>
      <td><?php
		echo "<select name='categoria'>";
		do{
			echo "<option value='".$row_rs_query1['id_cat']."'>";
			echo $row_rs_query1['des_cat_es']." // ".$row_rs_query1['des_cat_en'];
			echo "</option>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
    	?></td>
    </tr>
    <tr>
      <td>Nombre de categoria (Castellano)</td>
      <td><input name="cat_es" type="text" id="cat_es" /></td>
    </tr>
    <tr>
      <td>Nombre de categoria (Ingles)</td>
      <td><input name="cat_en" type="text" id="cat_en" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="button" onclick="validar()" value="MODIFICAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>
