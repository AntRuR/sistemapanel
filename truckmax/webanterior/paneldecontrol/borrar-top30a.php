<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$query1 = "select * from categoria";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$i=0;
do{
	$codigocategoria[$i]=$row_rs_query1['id_cat'];
	$categoria[$i]=$row_rs_query1['des_cat_es']." // ".$row_rs_query1['des_cat_en'];
	$i=$i+1;
}while($row_rs_query1 = mysql_fetch_array($rs_query1));

$query2 = "select a.*,b.nom_pro_es as nombrecastellano ,b.nom_pro_en as nombreingles from top30 a, producto b where a.id_pro=b.id_pro";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
$j=0;
do{
	$productostop30[$j]=$row_rs_query2['nombrecastellano']." // ".$row_rs_query2['nombreingles'];
	$productosid[$j] = $row_rs_query2['id_top'];
	$j=$j+1;
}while($row_rs_query2 = mysql_fetch_array($rs_query2));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO TOP 30::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function borrar(valor){
	if(!confirm("Seguro que desea eliminar el Producto")) {
    }else{
	document.frm1.id.value=valor;
	document.frm1.submit();
	}
}
</script>
</head>
<body>
<?php include("menu.php");?>
<br/>
<br />
SUS TOP 30
<table>
  <tr>
    <td></td>
    <td>Nombre Producto</td>
    <td></td>
  </tr>
  <?php
	for($i=0;$i<sizeof($productostop30);$i++){
	?>
  <tr>
    <td><?php echo ($i+1)?></td><td><?php echo $productostop30[$i]?></td><td><input type="button" onclick="borrar(<?php echo $productosid[$i]?>)" value="BORRAR" /></td>
  </tr>
  <?php
	}
    ?>
</table>
<form name="frm1" action="borrar-top30b.php" method="post">
<input type="hidden" name="id" />
</form>
</body>
</html>
