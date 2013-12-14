<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$categoria = $_GET['categoria'];
if($categoria==0){
	echo "<tr><td>Elija una Categoria</td></tr>";
}else{	
	$query1 = "select * from subcategoria where id_cat = '".$categoria."'";
	$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
	$row_rs_query1 = mysql_fetch_assoc($rs_query1);
	if($row_rs_query1['des_subcat_es']==""){
		echo "No hay Sub-Categorias";
	}else{
		echo "<table>";
		do{
			echo "<tr>";
			if($row_rs_query1['iniciar']=="S"){
				$activo = "checked='checked'";
			}else{
				$activo = " ";
			}
			echo "<td><input ".$activo." type='radio' name='subcate' value='".$row_rs_query1['id_subcat']."' onclick='MostrarGrabar()'></td>";
			echo "<td>".$row_rs_query1['des_subcat_es']." // ".$row_rs_query1['des_subcat_en']."</td>";
			echo "</tr>";			
		}while($row_rs_query1 = mysql_fetch_array($rs_query1));
		echo "<tr><td colspan='2' alingh='center'><input type='submit' name='grabar' disabled='disabled' value='GRABAR'>";
		echo "</table>";
	}
}
?>