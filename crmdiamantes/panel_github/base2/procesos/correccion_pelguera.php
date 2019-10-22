<?php 

/*
update(
['cumplido'=>'','estado'=>''],'ventas_mensajes','where alerta!=1 or alerta is null',1
);
*/
/*
update(
['cumplido'=>'1','estado'=>'4'],
'ventas_mensajes left join  ventas_items on ventas_items.id=ventas_mensajes.id_grupo',
"where ventas_items.fecha_creacion < '2015-08-01 00:00:00'",
0
);
*/

// $num_items=contar('ventas_mensajes',"where user=1 and tipo=3 and fecha_creacion >= '2017-01-01 00:00:00' ",0);

// prin($num_items);
// exit();
// 
$items=select(
	'user,id_usuario,id_grupo',
	'ventas_mensajes',
	"where user=1 and tipo=3 and fecha_creacion >= '2017-01-01 00:00:00' ",
	0);

foreach($items as $item)
{
	$fila=fila('user,id_usuario','ventas_items','where id='.$item['id_grupo']);

	update([
		'user'       =>$fila['user'],
		'id_usuario' =>$fila['id_usuario'],
		],'ventas_mensajes','where id_grupo='.$item['id_grupo'],
		1);
}
// prin($items);

// exit();
