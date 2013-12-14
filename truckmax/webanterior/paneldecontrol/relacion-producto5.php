<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$id_pro = $_GET['id_pro'];
$query1 = "select * from relacionproducto where id_pro = '".$id_pro."'";
$rs_query1 = mysql_query($query1, $cn) or die(mysql_error());
$row_rs_query1 = mysql_fetch_assoc($rs_query1);
if($row_rs_query1['id_pro_rel']==""){
	echo 'No tiene productos Relacionados<input type="hidden" name="rela" value="0" />';
}else{
	$i = 0;
	do{
		$query2 = "select * from producto producto where id_pro = '".$row_rs_query1['id_pro_rel']."'";
		$rs_query2 = mysql_query($query2, $cn) or die(mysql_error());
		$row_rs_query2 = mysql_fetch_assoc($rs_query2);
		echo $row_rs_query2['nom_pro_es']." // ".$row_rs_query2['nom_pro_en']."&nbsp;&nbsp;&nbsp;<a href='relacion-producto6.php?id=".$row_rs_query2['id_pro']."'>Eliminar</a><br/>";
		$i=$i+1;
	}while($row_rs_query1 = mysql_fetch_array($rs_query1));
	if($i==3){
		echo '<input type="hidden" name="rela" value="3" />';
	}else{
		echo '<input type="hidden" name="rela" value="0" />';
	}
}
?>