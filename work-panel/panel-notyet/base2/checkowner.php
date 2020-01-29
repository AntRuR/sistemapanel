<?php //á

set_time_limit(0);

chdir("../");

//	include("lib/includes.php");
	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");	
	include("config/tablas.php");
//	include("lib/sesion.php");	
	include("lib/playmemory.php");	
	require_once( "lib/ini_manager.php" );
	
chdir("../");

$linea=fila("nombre,apellidos,dni,user,tipo_cliente","clientes","where id='".$_GET['cl']."'");

$json=json_encode($linea);

echo $json;

?>