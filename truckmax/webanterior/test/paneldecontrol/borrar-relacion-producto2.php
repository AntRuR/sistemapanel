<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$categoria = $_GET['categoria'];
$id = $_GET['id'];
if($id==1){
	if($categoria==0){
		echo "<select disabled='disabled' name='subcate1'><option value='0'>Elije una Categoria</option></select>";
	}else{	
		$query1 = "select * from subcategoria where id_cat = '".$categoria."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		if($row_rs_query1['des_subcat_es']==""){
			echo "<select disabled='disabled' name='subcate1'><option value='0'>No Tiene Sub-Categoria</option></select>";
		}else{
			echo "<select name='subcate1' onChange='mostrarProducto(this.value,1)'><option value='0'>Elije una opcion</option>";
			do{
				echo 	"<option value='".$row_rs_query1['id_subcat']."'>".$row_rs_query1['des_subcat_es']." // ".$row_rs_query1['des_subcat_en']."</option>";			
			}while($row_rs_query1 = mysql_fetch_array($rs_query1));
			echo "</select>";
		}
	}
}
if($id==2){
	if($categoria==0){
		echo "<select disabled='disabled' name='subcate2'><option value='0'>Elije una Categoria</option></select>";
	}else{	
		$query1 = "select * from subcategoria where id_cat = '".$categoria."'";
		$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
		$row_rs_query1 = mysql_fetch_assoc($rs_query1);
		if($row_rs_query1['des_subcat_es']==""){
			echo "<select disabled='disabled' name='subcate2'><option value='0'>No Tiene Sub-Categoria</option></select>";
		}else{
			echo "<select name='subcate2' onChange='mostrarProducto(this.value,2)'><option value='0'>Elije una opcion</option>";
			do{
				echo 	"<option value='".$row_rs_query1['id_subcat']."'>".$row_rs_query1['des_subcat_es']." // ".$row_rs_query1['des_subcat_en']."</option>";			
			}while($row_rs_query1 = mysql_fetch_array($rs_query1));
			echo "</select>";
		}
	}
}
?>