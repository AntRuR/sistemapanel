<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);
$product = $_POST['producto'];
for($j=0;$j<=$product;$j++){
	if(isset($_POST["prod".$j])){
		$query0 = "update producto set equivalencia='".$_POST["com".$j]."' where id_marcador='".$_POST["prod".$j]."'";
		mysql_query($query0, $cn) or die(mysql_error());
		//echo $_POST["com".$j]." - ".$_POST["ven".$j]." - ".$_POST["ofer".$j]."<br>";
	}
}
header("Location:modificacion-equivalencia.php?ok=ok");
?>