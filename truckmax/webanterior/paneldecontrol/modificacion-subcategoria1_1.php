<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$categoria = $_GET['categoria'];
if($categoria==0){
	echo "<select disabled='disabled' name='subcate'><option value='0'>Elije una Categoria</option></select>";
}else{	
	$query1 = "select * from subcategoria where id_cat = '".$categoria."'";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
	if($row_rs_query1['des_subcat_es']==""){
		echo "<select disabled='disabled' name='subcate'><option value='0'>No Tiene Sub-Categoria</option></select>";
	}else{
		$img_sub = $row_rs_query1['img_sub'];
		echo "<select name='subcate' onChange='cambiarImagen(this.value)'>";
		do{
			echo 	"<option value='".$row_rs_query1['id_subcat']."'>".$row_rs_query1['des_subcat_es']."</option>";			
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "</select>";
		echo "<br/><div id='img_sub'><img src='../imagenes_subcategoria/".$img_sub."'></div>";
	}
}
?>