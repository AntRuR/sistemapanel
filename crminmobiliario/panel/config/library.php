<?php


function extract_departamentos($id){

	$product=fila(
	        "id,id_item,id_items_tipo,id_subgrupo,numero,nombre,pvlista,pvpromocion,area_total,area_construida,descripcion,descripcion2,descripcion3,descripcion4,has_balcon,num_rooms,num_bathrooms,id_status,venta_factura,venta_precio,venta_fecha,venta_abono,venta_total_facturas,venta_id_cliente,venta_id_vendedor,codigo,method,tags,fecha_creacion",
	        "productos_items_items",
	        "where id='$id' and visibilidad='1'",
	        0,
	        array(    	
	        	'galerias'=>array('fila'=>array(
	        									'nombre,id',
	        									'productos_fotos',
	        									'where id_tipo="{id_items_tipo}" and visibilidad="1"',
	        									0,
	        									array(
	        										'fotos'=>array('fotos'=>array(
																					"id,file,fecha_creacion|productos_fotos_fotos|where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100",
																					"profot_imas",
																					array(												 
																					 	   'archivo'=>'1',
																					 	   'thumb'=>'3,260x200,0',
																					 	   'box'=>'4',
																					)        																	
	        																)
	        												)
	        									)
	        								)
	        					  )
	        	)
	        );

	// prin($product);

	return $product;

}

function render_departamentos($array){

	return "depa";
}

function extract_depositos($id){

	return;

}

function render_depositos($array){

	return "depo";
}

function extract_estacionamiento($id){

	return;

}

function render_estacionamiento($array){

	return "estacionamiento";
}


