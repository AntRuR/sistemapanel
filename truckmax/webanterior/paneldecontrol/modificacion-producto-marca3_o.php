<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$cantidad = $_POST['cantidad'];
for($j=0;$j<=$cantidad;$j++){
	if(isset($_POST["prod".$j])){
		$query0 = "update producto set pre_com='".$_POST["com".$j]."',pre_ven='".$_POST["ven".$j]."',p_retail='".$_POST["ret".$j]."',pre_ofer='".$_POST["ofer".$j]."' where id_pro='".$_POST["prod".$j]."'";
		mysql_query($query0, $cn) or die(mysql_error());
		//echo $_POST["com".$j]." - ".$_POST["ven".$j]." - ".$_POST["ofer".$j]."<br>";
	}
}
header("Location:modificacion-producto-marca1.php?ok=ok");

?>