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

$linea=fila("id_traslado_status,id_item_item,id_ubicacion_llegada,fecha_salida,fecha_llegada,fecha_recepcion","productos_traslados","where id='".$_GET['id']."'",0);


if($linea['fecha_recepcion']!='0000-00-00 00:00:00' and $linea['fecha_recepcion']!=''){
update(array('id_traslado_status'=>'3'),"productos_traslados","where id='".$_GET['id']."'",0);
update(array('id_ubicacion'=>$linea['id_ubicacion_llegada'],'asignado'=>'0'),"productos_items_items","where id='".$linea['id_item_item']."'",0);
} elseif($linea['fecha_salida']!='0000-00-00 00:00:00' and $linea['fecha_llegada']!='000-00-00 00:00:00' and $linea['fecha_salida']!='' and $linea['fecha_llegada']!=''){
//echo 2;
update(array('id_traslado_status'=>'2'),"productos_traslados","where id='".$_GET['id']."'",0);
} else {
update(array('id_traslado_status'=>'1'),"productos_traslados","where id='".$_GET['id']."'",0);
}

exit();
/*
if($linea['id_traslado_status']=='3'){
update(array('id_ubicacion'=>$linea['id_ubicacion_llegada']),"productos_items_items","where id='".$linea['id_item_item']."'",0);
}
*/
/*}else{
$linea['id_asignacion']=$_GET['id'];
$linea['id_traslado_status']='1';
insert($linea,'productos_traslados');
}*/

?>