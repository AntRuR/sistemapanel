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
<title>.::MODIFICACION DE COLORES::.</title>
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
<?php include("menu.php");?><br/><br />
<strong>BORRAR DE COLORES X PRODUCTO</strong><br/>
<form name="frm1" action="borrar-color3.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="cod_pro" value="<?php echo $id_pro?>" />
<?php if(isset($_GET['ok2'])){ echo "Eliminacion Correcta";}?>
<?php if(isset($_GET['ok'])){ echo "Modificacion Correcto";}?>
<br/>
  <table border="1">
    <tr>
      <td colspan="4" align="center">Colores Actuales del Producto (<?php echo $row_rs_query2['nom_pro_es']." // ".$row_rs_query2['nom_pro_en']?>)</td>
    </tr>
    <?php
	if($row_rs_query1['des_col_es']==""){
		echo "<tr>";
		echo "<td colspan='2' aling='center'>No Tiene Colores</td>";
		echo "</tr>";
	}else{?>
    	<tr>
			<td>NOMBRE CASTELLANO</td><td>NOMBRE INGLES</td><td>IMAGEN</td><td>&nbsp;</td>
		</tr>
		<?php
        do{
		?>
			<tr>
			<td><?php echo $row_rs_query1['des_col_es'] ?></td><td><?php echo $row_rs_query1['des_col_en'] ?></td><td><img src='../imagenes_colores_thumbnails/<?php echo $row_rs_query1['img_col'] ?>'></td>
			<td><a href='ingreso-color4.php?prod=<?php echo $row_rs_query1['id_pro'] ?>&color=<?php echo $row_rs_query1['id_col'] ?>&borrar=ok'><img src='imagenes/eliminar.jpg' border='0' /></a></td>
			</tr>
        <?php
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		?>        
    <tr>
      <td colspan="4" align="right"><input type="submit" value="BORRAR TODO" /></td>
    </tr>
	<?php
    }
    ?>
  </table>
</form>
</body>
</html>
