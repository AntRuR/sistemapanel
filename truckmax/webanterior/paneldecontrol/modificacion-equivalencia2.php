<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$equi = $_POST['id_subcat'];
for($j=0;$j<=$equi;$j++){
	if(isset($_POST["prod".$j])){
		$query0 = "update producto set id_subcat='".$_POST["com".$j]."' where id_marcador='".$_POST["prod".$j]."'";
		mysql_query($query0, $cn) or die(mysql_error());
		//echo $_POST["com".$j]." - ".$_POST["ven".$j]." - ".$_POST["ofer".$j]."<br>";
	}
}
header("Location:modificacion-equivalencia.php?ok=ok");
?>