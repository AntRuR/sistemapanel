<?php

truncate('clientes');
truncate('ventas_items');
truncate('ventas_mensajes');

update(['newid'=>''],'vehiculos_clientes','where 1');
update(['newid'=>''],'vehiculos_ventas_items','where 1');
update(['newid'=>''],'vehiculos_ventas_mensajes','where 1');


$id_usuario=240;
$user=268;
$id_jefe=7;

// delete('vehiculos_ventas_items','where id_status in (9,10,13,14)');

function getcampos($objecto){
	$camp=[];
	foreach($objecto as $campo){
		if(!in_array($campo['campo'],['id']))
			$camp[]=$campo['campo'];
	}
	return $camp;
}

$campos_ventas_items=getcampos($objeto_tabla['VENTAS_ITEMS']['campos']);

$campos_clientes=getcampos($objeto_tabla['CLIENTES']['campos']);

$campos_ventas_mensajes=getcampos($objeto_tabla['VENTAS_MENSAJES']['campos']);


// prin($campos_clientes);

$equivalencia_canales = require 'equivalencia_canales.php';
$equivalencia_estados = require 'equivalencia_estados.php';
$equivalencia_modelos = require 'equivalencia_modelos.php';

// prin($ventas_items_campos);

$vehiculos_ventas_items=select(array_merge(['id'],$campos_ventas_items),'vehiculos_ventas_items','where 1 order by id asc limit 0,10000',0);


foreach($vehiculos_ventas_items as $item){

	// prin($item);
	
	$fila_cliente=fila($campos_clientes,"vehiculos_clientes","where id=".$item['id_cliente'],0);
	if(trim($fila_cliente['newid'])=='')
	{

		$fila_cliente['id_usuario']=$id_usuario;
		$fila_cliente['user']=$user;
		$fila_cliente['id_jefe']=$id_jefe;

		unset($fila_cliente['newid']);
		$insert_clientes=insert($fila_cliente,'clientes');
		update(['newid'=>$insert_clientes['id']],"vehiculos_clientes","where id=".$item['id_cliente'],0);
		$fila_cliente['newid']=$insert_clientes['id'];
	}
	
	// prin($fila_cliente['newid']);

	// prin($item);

	$id_item=$item['id'];
	unset($item['id']);

	$item['id_cliente']=$fila_cliente['newid'];


	$item['id_usuario']=$id_usuario;
	$item['user']=$user;
	$item['id_jefe']=$id_jefe;

	$item['id_status']=$equivalencia_estados[$item['id_status']];
	$item['id_canal']=$equivalencia_canales[$item['id_canal']];
	$item['id_item']=$equivalencia_modelos[$item['id_item']];
	$item['id_grupo']=dato('id_grupo','productos_items','where id='.$item['id_item']);

	$insert_ventas_items=insert($item,'ventas_items',0);
	update(['newid'=>$insert_ventas_items['id']],"vehiculos_ventas_items","where id=".$id_item,0);

	$vehiculos_ventas_mensajes=select(array_merge(['id'],$campos_ventas_mensajes),"vehiculos_ventas_mensajes",'where id_grupo='.$id_item,0);
	// prin($vehiculos_ventas_mensajes);
	foreach($vehiculos_ventas_mensajes as $mensaje){

		$id_mensaje=$mensaje['id'];
		unset($mensaje['id']);

		// unset($mensaje['texto']);
		$mensaje['id_grupo']=$insert_ventas_items['id'];

		$mensaje['id_usuario']=$id_usuario;
		$mensaje['user']=$user;

		$insert_venta_mensajes=insert($mensaje,'ventas_mensajes',0);
		update(['newid'=>$insert_venta_mensajes['id']],"vehiculos_ventas_mensajes","where id=".$id_mensaje,0);

	}

	// is cliente creado 
	// 	get id
	// not 
	// 	create put id

}
// update ventas_items set user=235,id_usuario=175 where id in
// (11170,11169,11168,11167,11165,11155,11154,11152,11151,11150,11149,11111,11126,11131,11118,11133,11132,11130)

// update ventas_items set user=236,id_usuario=176 where id in
// (11174,11173,11172,11171,11164,11163,11162,11161,11136,11159,11156,11153,11148,11147,11146,11144,11128,11136,11127,11137,11134,11129,11127,11125)

// prin($ventas_items);