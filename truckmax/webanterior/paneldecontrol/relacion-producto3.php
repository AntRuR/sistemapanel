<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$subcategoria = $_GET['subcate'];
$id = $_GET['id'];
if($id==1){
	if($subcategoria==0){
		echo "<select disabled='disabled' name='prod1'><option value='0'>Elije una Categoria</option></select>";
	}else{	
		$query1 = "select * from producto where id_subcat = '".$subcategoria."' order by nom_pro_es";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		if($row_rs_query1['nom_pro_es']==""){
			echo "<select disabled='disabled' name='prod1'><option value='0'>No Tiene Producto</option></select>";
		}else{
			echo "<select name='prod1' onChange='mostrarProductoRela(this.value)'><option value='0'>Elije un Producto</option>";
			do{
				echo 	"<option value='".$row_rs_query1['id_pro']."'>".$row_rs_query1['nom_pro_es']." // ".$row_rs_query1['nom_pro_en']."</option>";			
			}while($row_rs_query1 = mysql_fetch_array($rs_query1));
			echo "</select>";
		}
	}
}
if($id==2){
	if($subcategoria==0){
		echo "<select disabled='disabled' name='prod2'><option value='0'>Elije una Categoria</option></select>";
	}else{	
		$query1 = "select * from producto where id_subcat = '".$subcategoria."' order by nom_pro_es";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		if($row_rs_query1['nom_pro_es']==""){
			echo "<select disabled='disabled' name='prod2'><option value='0'>No Tiene Producto</option></select>";
		}else{
			echo "<select name='prod2'>";
			do{
				echo 	"<option value='".$row_rs_query1['id_pro']."'>".$row_rs_query1['nom_pro_es']." // ".$row_rs_query1['nom_pro_en']."</option>";			
			}while($row_rs_query1 = mysql_fetch_array($rs_query1));
			echo "</select>";
		}
	}
}
?>