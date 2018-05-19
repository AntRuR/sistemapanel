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

$linea=fila("id_cliente,user","ventas_items","where id='".$_GET['id']."'");

update(array('user'=>$linea['user']),'clientes',"where id='".$linea['id_cliente']."'");

?>