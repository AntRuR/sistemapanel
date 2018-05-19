<?php 










$pases=[

// from Larry Portanova (146)
// to Roy Oterola (172)
	['from'=>146,'to'=>172],
// from Fatima (168), Sharon (166) y Gladis (169)
// to José Palominno (170)	
	['from'=>168,'to'=>170],
	['from'=>166,'to'=>170],
	['from'=>169,'to'=>170],

// from Erika (152)
// to Harold (171)	
	['from'=>152,'to'=>171],
	];

foreach($pases as $fromto){

	$fromUser=$fromto['from'];
	// $fromUser='146';
	$from_user=fila("id,id_sesion,id_jefe,nombre,apellidos","usuarios","where id=".$fromUser);
	// prin($from_user);tus


	$toUser=$fromto['to'];
	// $toUser='172';
	$to_user=fila("id,id_sesion,id_jefe,nombre,apellidos","usuarios","where id=".$toUser);
	// prin($to_user);

	$items=select("id","ventas_items","where user=".$from_user['id_sesion'],1);

	foreach($items as $item){

	insert(array(
					'id_grupo'       =>$item['id'],
					// 'nombre'         =>'cambio de asesor',
					'fecha_creacion' =>"now()",
					'fecha_edicion'  =>"now()",	
					'visibilidad'    =>'1',
					'id_usuario'     =>$to_user['id'],
					'user'           =>$to_user['id_sesion'],					
					'texto'			  =>'Cambio de atención<br> desde '.
					$from_user['nombre'].' '.$from_user['apellidos'].
					"<br> a ".
					$to_user['nombre'].' '.$to_user['apellidos']
					 ),
					 "ventas_mensajes",
					 0
					 );


	}

	// exit();

	update([
		
			'id_usuario' =>$to_user['id'],
			'user'       =>$to_user['id_sesion'],
			// 'id_jefe'    =>$to_user['id_jefe'],

		],"ventas_items","where user=".$from_user['id_sesion'],1);

	update([
		
			'id_usuario' =>$to_user['id'],
			'user'       =>$to_user['id_sesion'],
			// 'id_jefe'    =>$to_user['id_jefe'],

		],"ventas_mensajes","where user=".$from_user['id_sesion'],1);




	update([
		
			'id_usuario' =>$to_user['id'],
			'user'       =>$to_user['id_sesion'],
			// 'id_jefe'    =>$to_user['id_jefe'],

		],"clientes","where user=".$from_user['id_sesion'],1);
}

exit();

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