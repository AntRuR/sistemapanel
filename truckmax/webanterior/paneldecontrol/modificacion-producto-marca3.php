<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$cantidad = $_POST['cantidad'];
for($j=0;$j<=$cantidad;$j++){
	if(isset($_POST["prod".$j])){
		$query0 = "update producto set pre_ven='".$_POST["ven".$j]."',pre_ofer='".$_POST["ofer".$j]."',especial='".$_POST["esp".$j]."',novedad='".$_POST["nov".$j]."' where id_pro='".$_POST["prod".$j]."'";
		mysql_query($query0, $cn) or die(mysql_error());
		//echo $_POST["ven".$j]." - ".$_POST["ofer".$j]." - ".$_POST["esp".$j]." - ".$_POST["nov".$j]."<br>";
	}
}
header("Location:modificacion-producto-marca1.php?ok=ok");
?>