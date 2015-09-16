<?php //á


//maquina.php?tab=procesos&proceso=ventas3.php


$vins=select("id,vin,venta_fecha","productos_items_items",
	"where id_status=7 and venta_fecha!='0000-00-00 00:00:00' and venta_fecha is not null ",
	0
	);
prin($vins);


//5=entregado
//4=cancelado

// foreach($vins as $vin){

// 	update(
// 		array(
// 			'id_status'=>'4'
// 		),
// 		"productos_items_items",
// 		"where id='".$vin['id']."'"
// 		);

// }



