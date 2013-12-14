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
	if(!confirm("Seguro que desea eliminar la Categoria\nSe borrarán todas las sub-categorias y los productos de la Categoria")) {
    }else{
		document.frm1.submit();
	}
}
</script>
</head>
<body>
<?php include("menu.php");?><br/><br />
<strong>BORRAR CATEGORIA</strong><br />
<?php if(isset($_GET['ok'])){ echo "Borrado Correcto";}?><br/>
<form name="frm1" method="post" action="borrar-categoria2.php" enctype="multipart/form-data">
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
      <td colspan="2" align="right"><input type="button" onclick="validar()" value="BORRAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>