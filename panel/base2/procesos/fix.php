<?php

// $ids=select(
// 	'ventas_mensajes.id as id'
// 	,'ventas_mensajes'
// 	,"left join ventas_items on ventas_mensajes.id_grupo=ventas_items.id 
//  left join usuarios on ventas_items.id_usuario=usuarios.id 
//  where 1   
//  and ( ventas_mensajes.estado in ('3')  
//  AND  usuarios.id_jefe in ('19')  )  
//  and ventas_mensajes.id!=360998",0);

// foreach ($ids as $id){
// 	update(['estado'=>'4'],"ventas_mensajes",'where id='.$id['id'],2);
// }

$itemsss=select(
	'user,
	id_usuario,
	id_jefe,
	id',
	'ventas_items',
	"
	where 1
	 AND  id_usuario in (select id from usuarios where id_jefe=19) 
	order by fecha_creacion desc
	limit 0,1000
	",0
	);
prin(sizeof($itemsss));
// prin($itemsss);
// exit();

foreach ($itemsss as $id_item){
	update([
		'user'=>$id_item['user'],
		'id_usuario'=>$id_item['id_usuario'],
		],
		"ventas_mensajes",
		'where id_grupo='.$id_item['id'],2);
}