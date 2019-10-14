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



if(1){
$atenciones=select("id","ventas_items","where ventas_items.fecha_creacion > '2015-08-01 00:00:00' ");
// $atenciones=select("id","ventas_items","where id= '131835' ");
foreach($atenciones as $aten){

	// $mensajes=select('id',"ventas_mensajes","where id_grupo=".$aten['id']);
	// $pendientes=contar("ventas_mensajes","where id!=".LL["id"]." and estado in (1,2) and alerta=1 and id_grupo=".$aten['id']." ");
	$atrazados=contar("ventas_mensajes","where estado in (3) and id_grupo=".$aten['id']." ",0);

	$ultimo=fila("estado,id","ventas_mensajes","where id_grupo=".$aten['id']." order by id desc limit 0,1  ",0);

	// prin($atrazados);

	// prin($ultimo);

	// if(0)
	if($atrazados>0  and $ultimo['estado']=='1' ){

		update(
			["cumplido"=>"1","estado"=>"4","cumplir_alertas"=>"0"],
			"ventas_mensajes",
			"where id!=".$ultimo['id']." and id_grupo=".$aten['id']." and estado=3 ");
		
	}	





	}

}