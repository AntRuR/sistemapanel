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

$linea=fila("fecha_creacion,fecha_edicion,id_ubicacion_salida,id_item,id_item_item,id_ubicacion_llegada","productos_stock","where id='".$_GET['id']."'");

$con=contar("productos_traslados","where id_asignacion='".$_GET['id']."'");
if($con==1){
update($linea,'productos_traslados',"where id_asignacion='".$_GET['id']."'");
}else{
$linea['id_asignacion']=$_GET['id'];
$linea['id_traslado_status']='1';
insert($linea,'productos_traslados');
}

?>