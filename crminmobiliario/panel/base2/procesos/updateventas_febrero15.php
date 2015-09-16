<?php
/**
 * 
 descripcion de updateventas febrero
 * 
 */

$ventas=select("id_ventas_item,id_item_item,id","productos_ventas","",0,[
	'pedido'=>['dato'=>['pedido','ventas_items','where id={id_ventas_item}']]
	]);

if(0)
foreach($ventas as $venta){

	foreach(json_decode($venta['pedido']) as $pedido){

		if($pedido->type=='departamento'){
			// $venta['id_item_item']=$pedido->id;
			update(['id_item_item'=>$pedido->id],"productos_ventas","where id=".$venta['id']);
		}

	}

}
			
prin($ventas);


