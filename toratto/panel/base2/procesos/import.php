<?php 
// $projs=select("nombre_categoria","categorias","where id in (35,100,116)");
$parents=[
	35  =>1,
	100 =>2,
	116 =>3,
];

if(1){
	truncate('productos_tipos');
	foreach($parents as $parent=>$par){
		$lineas=select("id_categoria,imagen_categoria,orden_categoria,nombre_categoria","categorias","where id_parent=".$parent);
		foreach($lineas as $linea){
			insert(
			[
				'idtemp'  =>$linea['id_categoria'],
				'imatemp' =>$linea['imagen_categoria'],
				'weight'  =>$linea['orden_categoria'],
				'nombre'  =>$linea['nombre_categoria'],
				'id_item' =>$par,
			],
			"productos_tipos"
			);
		}
	}
}

if(1){
	truncate('productos_items_items');
	foreach($parents as $parent=>$par){
		$lineas=select(
			"id_producto,orden_producto,nombre_producto,id_categoria,numero_producto,area_producto,estado_producto,novedad_producto",
			"productos",
			"where id_categoria in (select id_categoria from categorias where id_parent=".$parent.")",0);
		// prin($lineas);
		foreach($lineas as $linea){
			insert(
			[
				'idtemp'  =>$linea['id_producto'],
				'weight'  =>$linea['orden_producto'],
				'nombre'  =>$linea['nombre_producto'],


				'numero'  =>$linea['numero_producto'],
				'area_total'  =>$linea['area_producto'],
				'status'  =>$linea['estado_producto'],
				'novedad'  =>$linea['novedad_producto'],

				'id_item' =>$par,
				'id_items_tipo' =>dato("id","productos_tipos","where idtemp=".$linea['id_categoria']),
			],
			"productos_items_items",
			0
			);
		}
	}
}

	truncate('productos_fotos_fotos');
	$lineas=select("id_producto_imagen,middle_producto_imagen,orden_producto_imagen,id_producto","productos_imagenes","where 1",0);
	foreach($lineas as $linea){
		insert(
		[
			'idtemp'  =>$linea['id_producto_imagen'],
			'imatemp' =>$linea['middle_producto_imagen'],
			'weight'  =>$linea['orden_producto_imagen'],
			'id_item' =>dato("id","productos_items_items","where idtemp=".$linea['id_producto']),
		],
		"productos_fotos_fotos",
		0
		);		
	}
	// prin($lineas);


exit();
update(
['cumplido'=>'','estado'=>''],'ventas_mensajes',"where alerta_fecha > '2016-01-19 15:00:00'",0
);


if(0){
$atenciones=select("id","ventas_items","where ventas_items.fecha_creacion > '2015-08-01 00:00:00' 
	");
foreach($atenciones as $aten){

	$alertas=select("cumplido,estado,id","ventas_mensajes","where id_grupo=".$aten['id']." and alerta=1 order by fecha_creacion desc");
	
	if(sizeof($alertas)>1){
		// $mensajes=select("cumplido,estado,id","ventas_mensajes","where id_grupo=".$aten['id']." and alerta=1");
		// prin(sizeof($mensajes));
		
		if(
			$alertas[0]['estado']=='1'
			or $alertas[0]['estado']=='2'
			or $alertas[0]['estado']=='3'
			){
		
			// prin($alertas);
			update(
				['cumplido'=>'1','estado'=>'4'],
				'ventas_mensajes',
				"where id!='".$alertas[0]['id']."' and id_grupo=".$aten['id']." and alerta=1 ");
		
			/*
			update(
				['cumplido'=>'0'],
				'ventas_mensajes',
				"where id!='".$alertas[0]['id']."'");
			*/

		}

	} 
	
	/*
	if(sizeof($alertas)==1){
			update(
				['cumplido'=>'0'],
				'ventas_mensajes',
				"where id='".$alertas[0]['id']."'");
	}
	*/
	

}

}