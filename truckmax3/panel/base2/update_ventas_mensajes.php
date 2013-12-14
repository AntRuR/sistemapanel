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
if($_GET['v_o']=="CONVENIOS_SUBITEMS"){

$id_item=dato("id_item","convenios_subitems","where id='".$_GET['id']."'");
$grupo=fila("fecha_presentacion,id_sector,id_sector_prod","convenios_items","where id='".dato("id_item","convenios_subitems","where id='".$id_item."'")."'");
update(array('fecha_presentacion'=>$grupo['fecha_presentacion'],'id_sector'=>$grupo['id_sector'],'id_sector_prod'=>$grupo['id_sector_prod']),'convenios_subitems',"where id_item='".$_GET['id']."'");

}elseif($_GET['v_o']=="CONVENIOS_ITEMS"){

$grupo=fila("fecha_presentacion,id_sector,id_sector_prod","convenios_items","where id='".dato("id_item","convenios_subitems","where id='".$_GET['id']."'")."'");
update(array('fecha_presentacion'=>$grupo['fecha_presentacion'],'id_sector'=>$grupo['id_sector'],'id_sector_prod'=>$grupo['id_sector_prod']),'convenios_subitems',"where id_item='".$_GET['id']."'");
}





?>