<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_tal = $_GET['talla'];
//$id_tal = 1;
$query1 = "select * from talladescripcion where id_tal = '".$id_tal."' order by id_taldes";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
if($row_rs_query1['des_destal']==""){
	echo "No Tiene Tallas";
}else{
	echo "<table aling='center'>
			<tr>
				<td aling='center'>Tallas Correspondientes</td>
			</tr>";
	do{
	$des_destal = $row_rs_query1['des_destal'];
	$id_tal = $row_rs_query1['id_tal'];
	$id_taldes = $row_rs_query1['id_taldes'];
		echo 	"<tr>
					<td aling='center'><input size='10' type='text' value='".$des_destal."' name='des".$id_taldes."'></td>
				</tr>";			
	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	echo "</table>";
}
?>