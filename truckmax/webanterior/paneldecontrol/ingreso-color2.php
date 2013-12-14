<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_GET['cod_prod'];
$query1 = "select * from color where id_pro = '".$id_pro."'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
$query2 = "select * from producto where id_pro = '".$id_pro."'";
$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
$row_rs_query2 = mysql_fetch_assoc($rs_query2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::INGRESO DE COLORES::.</title>
<script language="javascript">
function EsImagen(valor){
 var valorUpper;
 valorUpper= new String(valor.toUpperCase());
 return(valorUpper.lastIndexOf(".JPG")>=0);
}
function Validar(){
	if(document.frm1.des_es.value==""){
		alert("Ingrese descripcion en castellano");
		return document.frm1.des_es.focus();
	}
	if(document.frm1.des_en.value==""){
		alert("Ingrese descripcion en ingles");
		return document.frm1.des_en.focus();
	}
	if (document.frm1.img_col.value!=""){
      if(!EsImagen(document.frm1.img_col.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG");   
		return;
	  	}
	  }else{
	  	alert("Seleccione una Imagen de muestra de color");
		return false;
	  }
	if (document.frm1.img_col2.value!=""){
      if(!EsImagen(document.frm1.img_col2.value)){
	    alert("Por favor ingresar sólo imagenes con extensión JPG");   
		return;
	  	}
	  }
	document.frm1.submit();
}
</script>
</head>
<body>
<?php include("menu.php");?><br/>
<strong>INGRESO DE COLORES X PRODUCTO</strong><br/>
<form name="frm1" action="ingreso-color3.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cod_pro" value="<?php echo $id_pro?>" />
<?php if(isset($_GET['ok2'])){ echo "Eliminacion Correcta";}?>
<?php if(isset($_GET['ok'])){ echo "Ingreso Correcto";}?>
<br/>
  <table>
    <tr>
      <td colspan="2" align="center">Colores Actuales del Producto (<?php echo $row_rs_query2['nom_pro_es']." // ".$row_rs_query2['nom_pro_en']?>)</td>
    </tr>
    <?php
	if($row_rs_query1['des_col_es']==""){
		echo "<tr>";
		echo "<td>No Tiene Colores</td>";
		echo "</tr>";
	}else{
		do{
			echo "<tr>";
			echo "<td>".$row_rs_query1['des_col_es']." // ".$row_rs_query1['des_col_en']." <img src='../imagenes_colores_thumbnails/".$row_rs_query1['img_col']."'></td>";
			echo "<td><a href='ingreso-color4.php?prod=".$row_rs_query1['id_pro']."&color=".$row_rs_query1['id_col']."'><img src='imagenes/eliminar.jpg' border='0' /></a></td>";
			echo "</tr>";
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	}
    ?>
    <tr>
      <td>Descripcion del Color (Castellano)</td>
      <td><input type="text" name="des_es" /></td>
    </tr>
    <tr>
      <td>Descripcion del Color (Ingles)</td>
      <td><input type="text" name="des_en" /></td>
    </tr>
    <tr>
      <td>Imagen de la Muestra del Color</td>
      <td><input name="img_col" type="file"/></td>
    </tr>
    <tr>
      <td>Imagen de la prenda del color</td>
      <td><input name="img_col2" type="file"/></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="button" onclick="Validar()" value="GRABAR" /></td>
    </tr>
  </table>
</form>
</body>
</html>
