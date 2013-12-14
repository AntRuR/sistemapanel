<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$nombre = $_GET['prod'];
$query1 = "select * from producto where nom_pro_es like '%".$nombre."%' or nom_pro_en like '%".$nombre."%'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
if($row_rs_query1['nom_pro_es']==""){
	echo "No hay Productos con ese nombre";
}else{
	echo "<table>";
	do{
		echo "<tr>";
		echo "<td>".$row_rs_query1['nom_pro_es']." // ".$row_rs_query1['nom_pro_en']."</td>";
		echo "<td><a href='modificacion-color2.php?cod_prod=".$row_rs_query1['id_pro']."'>Modificar colores</a></td>";
		echo "</tr>";	
	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	echo "</table>";
}
?>