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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::RELACION DE PRODUCTOS::.</title>
<script type="text/javascript" src="js/funcionestabs.js"></script>
<script language="javascript">
function mostrarSubcate(valor,id){
	if(id=="1"){
		ObtenerDatos('relacion-producto2.php?categoria='+valor+'&id='+id+'&fecha='+Date(),'subcate1');
	}
	if(id=="2"){
		ObtenerDatos('relacion-producto2.php?categoria='+valor+'&id='+id+'&fecha='+Date(),'subcate2');
	}
}
function mostrarProducto(valor,id){
	if(id=="1"){
		ObtenerDatos('relacion-producto3.php?subcate='+valor+'&id='+id+'&fecha='+Date(),'prod1');
	}
	if(id=="2"){
		ObtenerDatos('relacion-producto3.php?subcate='+valor+'&id='+id+'&fecha='+Date(),'prod2');
	}
}
function Validar(){
	if(document.frm1.prod1.value==0){
		alert("Debe seleccinoar un Producto Principal");
		return false;
	}
	if(document.frm1.prod2.value==0){
		alert("Debe seleccinoar un Producto secundario");
		return false;
	}
	if(document.frm1.rela.value==3){
		alert("Ya tiene tres productos relacionados, Debe Eliminar uno si desea relacionarlo con otro");
		return false;
	}
	document.frm1.submit();
}
function mostrarProductoRela(valor){
	ObtenerDatos('relacion-producto5.php?id_pro='+valor+'&fecha='+Date(),'prod1_1');
}
</script>
</head>
<body>
<?php include("menu.php");?><br/><br />
<form name="frm1" action="relacion-producto4.php" method="post">
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto <br/>";}?>
<?php if(isset($_GET['ok2'])){ echo "Eliminacion Correcta <br/>";}?>
  RELACION DE PRODUCTOS
  <table>
    <tr>
      <td colspan="2" align="center">PRODUCTO PRINCIPAL</td>
    </tr>
    <tr>
      <td>CATEGORIA</td>
      <td><select name='cate1' onChange='mostrarSubcate(this.value,1)'>
          <option value='0'>Elije una opcion</option>
          <?php for($j=0;$j<sizeof($codigocategoria);$j++){ ?>
          <option value='<?php echo $codigocategoria[$j]?>'> <?php echo $categoria[$j];?> </option>
          <?php }?>
        </select></td>
    </tr>
    <tr>
      <td>SUB-CATEGORIA</td>
      <td><div id="subcate1">
          <select disabled="disabled" name="subcate1">
            <option>Elije una Categoria</option>
          </select>
        </div></td>
    </tr>
    <tr>
      <td>PRODUCTO</td>
      <td><div id="prod1">
          <select disabled="disabled" name="prod1" id="prod1">
            <option>Elije una Sub-Categoria</option>
          </select>
        </div></td>
    </tr>
    <tr>
      <td>PRODUCTO RELACIONADOS</td>
      <td><div id="prod1_1">
      <input type="hidden" name="rela" value="0" />
        </div></td>
    </tr>
  </table>
  <hr/>
  <table>
    <tr>
      <td colspan="2" align="center">PRODUCTO SECUNDARIO A RELACION</td>
    </tr>
    <tr>
      <td>CATEGORIA</td>
      <td><select name='cate2' onChange='mostrarSubcate(this.value,2)'>
          <option value='0'>Elije una opcion</option>
          <?php for($j=0;$j<sizeof($codigocategoria);$j++){ ?>
          <option value='<?php echo $codigocategoria[$j]?>'> <?php echo $categoria[$j];?> </option>
          <?php }?>
        </select></td>
    </tr>
    <tr>
      <td>SUB-CATEGORIA</td>
      <td><div id="subcate2">
          <select disabled="disabled" name="subcate2">
            <option>Elije una Categoria</option>
          </select>
        </div></td>
    </tr>
    <tr>
      <td>PRODUCTO</td>
      <td><div id="prod2">
          <select disabled="disabled" name="prod2" id="prod2">
            <option>Elije una Sub-Categoria</option>
          </select>
        </div></td>
    </tr>
    <tr><td colspan="2" align="right"><input type="button" onclick="Validar()" value="RELACIONAR" /></td></tr>
  </table>
</form>
</body>
</html>
