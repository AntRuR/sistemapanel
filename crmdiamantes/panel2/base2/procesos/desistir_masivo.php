<?php

chdir("../../");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util2.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

// require_once( "lib/ini_manager.php" );

// chdir("../");

// $_POST['emails']='fbobadilla21@gmail.com,
// ecerna@para-rayos.com,
// alujan@grupoamsa.com,
// jtorres@stasofia.com';

if($_SERVER['REQUEST_METHOD']=='POST'){

$emails=explode(",",$_POST['emails']);
foreach($emails as $email){
	
	$email=trim($email);
	
	$update=update(
		['id_status'=>'17'],
		'ventas_items',
		"where id_cliente = (select id from clientes where email='".$email."')",
		0
	);
	echo "<div style='background:white;'>";
	if($update['success']){
		echo "$email desistido con éxito<br>";
	}
	echo "</div>";


}

}
?>
<form method='post'>
<div style='background:white;'>ingrese emails separados por comas</div>
<textarea style='width:100%;height:300px;' name='emails'></textarea>
<input type='submit' value='desistir'>
</form>