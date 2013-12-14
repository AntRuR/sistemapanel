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
	echo "<table>
			<tr>
				<td colspan='2' aling='center'>Tallas Correspondientes</td>
			</tr>";
	do{
		echo 	"<tr>
					<td>".$row_rs_query1['des_destal']."</td>
					<td><a href='ingreso-talla4.php?talla=".$row_rs_query1['id_tal']."&talladescripcion=".$row_rs_query1['id_taldes']."'><img src='imagenes/eliminar.jpg' border='0' /></a></td>
				</tr>";			
	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	echo "</table>";
}
?>