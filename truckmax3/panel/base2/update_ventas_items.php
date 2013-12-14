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

update(array('user'=>$linea['user']),'clientes',"where id='".$linea['id_cliente']."'");$clientes=select("id","clientes","where 1 order by id desc");foreach($clientes as $i=>$cliente){	$a0=select("id_item,id_usuario,precio","ventas_items","where id_cliente=".$cliente['id']." order by id desc",0,array(				'item'		=>array('fila'=>array('campos'=>'codigo',			'tabla'=>'productos_items',	'donde'=>"where id='{id_item}'",'debug'=>'0'))				,'usuario'	=>array('fila'=>array('campos'=>'nombre,apellidos',	'tabla'=>'usuarios',		'donde'=>"where id='{id_usuario}'",'debug'=>'0'))				));	$a=$a0['0'];	$aa =$a['item']['codigo']." ";	$aa.=($a['precio'])?("\$".$a['precio']." "):"";	$aa.=$a['usuario']['nombre']." ".$a['usuario']['apellidos'];	//$aaa[]=$aa;	update(array('info'=>trim($aa)),"clientes","where id=".$cliente['id'],0);}

?>