<?php //á

if(!isset($II)){

	chdir("../../");

	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util2.php");
	include("lib/webutil.php");
	include("config/tablas.php");

	include("lib/sesion.php");
	include("lib/playmemory.php");
	include("lib/class.phpmailer.php");

	include("config/library.php");

	// $II=14;
	// $TT='todos_mensajes';
}


/*************************
*
*         ABONOS
* 
*************************/
if($TT=='productos_ventas_documentos'){

	// echo $II;


$operaciones=[								
				'1'			=> 'Separación',
				'2'			=> 'Inicial',
				'3'			=> 'Abono',
				'4'			=> 'Desembolso Bancario',
				'5'			=> 'Plan Ahorro'
				];


	$paranotificar=fila(
		[
'productos_ventas_documentos.operacion as operacion',
'ventas_items.id_item as id_item',
'ventas_items.id_cliente as id_cliente',
'ventas_items.id_usuario as id_usuario',
'ventas_items.user as user',
'productos_ventas_documentos.monto as monto',
'productos_ventas_documentos.fecha_vencimiento as fecha_vencimiento',
'productos_ventas.id as id_venta'
		],
		"productos_ventas_documentos",
		"
left join productos_ventas on productos_ventas_documentos.id_grupo=productos_ventas.id
left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item		
where productos_ventas_documentos.fecha_vencimiento!='0000-00-00 00:00:00' 
and DATE(productos_ventas_documentos.fecha_vencimiento) >= DATE(NOW()) 
and productos_ventas_documentos.id=".$II,
		0);



	
	$paranotificar['tipo']   ='email';
	$paranotificar['texto']  = ''
										."Venta: #".$paranotificar['id_venta'].'<br>'
										."Proyecto: ".dato("nombre","productos_items","where id=".$paranotificar['id_item']).'<br>'
										.'Cliente : '.dato("nombre","clientes","where id=".$paranotificar['id_cliente']).' '.dato("apellidos","clientes","where id=".$paranotificar['id_cliente']).'<br>'
										.'Operación : '.$operaciones[$paranotificar['operacion']].'<br>'
									   .'Monto: S/.'.$paranotificar['monto'].'<br>'
									   .'Fecha de vencimiento: '.fecha_formato($paranotificar['fecha_vencimiento'],'7c').'<br>'
										;
	$paranotificar['asunto'] ='Recordatorio de Abono';
	$paranotificar['modulo'] ='abonos';

	// prin($paranotificar);exit();

	$dias=array(
			'1'	=>date("Y-m-d H:i:s",strtotime($paranotificar['fecha_vencimiento'].' + 8 hours')),
			'2'	=>date("Y-m-d H:i:s",strtotime($paranotificar['fecha_vencimiento'].' - 1 day + 8 hours'))
			);



	if(
		hay("notificaciones","where modulo='".$paranotificar['modulo']."' and item='".$paranotificar['id']."'",0)
	){

		foreach( $dias as $sub => $dia )
		{

			update(
				array(
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],

				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				"where modulo='abonos' and item='".$paranotificar['id']."' and sub_item='".$sub."' ",
				0
			);

		}	

	} else {

		foreach( $dias as $sub => $dia )
		{

			insert(
				array(
				'modulo'           =>$paranotificar['modulo'],
				
				'item'             =>$paranotificar['id'],
				'sub_item'         =>$sub,
				
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],				

				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				0
			);

		}


	}




} 
/*************************
*
*         ALERTAS
* 
*************************/
elseif($TT=='ventas_mensajes'){

// print_r(array($SS,$II,$TT,$LL,$CC,$III));

	$paranotificar=fila(
		array(
			"v.id as id_item_venta",
			"v.id_item as id_item",
			"v.id_cliente as id_cliente",
			"v.id_usuario as id_usuario",
			"v.user as user",
			"d.id as id",
			"d.alerta_fecha as fecha_vencimiento"
			),
		"ventas_items as v, ventas_mensajes as d",
		"where v.id=d.id_grupo and d.alerta_fecha!='0000-00-00 00:00:00' and DATE(d.alerta_fecha) >= DATE(NOW()) and d.id=".$II,
		0);

	$paranotificar['monto']='';
	
	$paranotificar['tipo']='email';
	$paranotificar['texto']='Recordatorio:<br>'.$LL['texto']."<br><br>
	Proyecto: ".dato('nombre','productos_items','where id='.$paranotificar['id_item'])."<br><br>
	Alerta: ".dato('nombre','mensajes_alertas','where id='.$LL['alerta'])."<br>
	Hora: ".fecha_formato($LL['alerta_fecha'],'8b')."<br>
	Status: ".dato('nombre','ventas_status','where id='.$LL['id_status'])."<br>
	Cliente: <a href='http://crmsche.info/panel/custom/clientes.php?i=".$paranotificar['id_cliente']."'>".dato('nombre','clientes','where id='.$paranotificar['id_cliente'])." ".dato('apellidos','clientes','where id='.$paranotificar['id_cliente'])."</a><br><br>
	Teléfono: ".dato('telefono','clientes','where id='.$paranotificar['id_cliente'])."<br>
	Oficina: ".dato('telefono_oficina','clientes','where id='.$paranotificar['id_cliente'])."<br>
	Claro: ".dato('celular_claro','clientes','where id='.$paranotificar['id_cliente'])."<br>
	Movistar: ".dato('celular_movistar','clientes','where id='.$paranotificar['id_cliente'])."<br>
	Entel: ".dato('nextel','clientes','where id='.$paranotificar['id_cliente'])."<br>
	RPM: ".dato('rpm','clientes','where id='.$paranotificar['id_cliente'])."<br>
	RPC: ".dato('rpc','clientes','where id='.$paranotificar['id_cliente'])."<br><br>
	Atención: <a href='http://crmsche.info/panel/custom/ventas_items.php?i=".$paranotificar['id_item_venta']."'>#".$paranotificar['id_item_venta']."</a><br>
	";
	
	$paranotificar['asunto']='Recordatorio de seguimiento de '.dato('nombre','usuarios','where id='.$paranotificar['id_usuario']).' '.dato('apellidos','usuarios','where id='.$paranotificar['id_usuario']);

	$paranotificar['modulo']='seguimiento';

	// prin($paranotificar);
	// exit();

	$dias=array(
			'1'	=>date("Y-m-d H:i:s",strtotime($paranotificar['fecha_vencimiento'].' - 15 minute')),
			'2'	=>date("Y-m-d H:i:s",strtotime($paranotificar['fecha_vencimiento'].' - 1 day '))
			);


	if(
		hay("notificaciones","where modulo='".$paranotificar['modulo']."' and item='".$paranotificar['id']."'",0)
	){

		foreach( $dias as $sub => $dia )
		{

			update(
				array(
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],
				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				"where modulo='abonos' and item='".$paranotificar['id']."' and sub_item='".$sub."' ",
				0
			);

		}	

	} else {

		foreach( $dias as $sub => $dia )
		{

			insert(
				array(
				'modulo'           =>$paranotificar['modulo'],
				'item'             =>$paranotificar['id'],
				'sub_item'         =>$sub,
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],				
				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				0
			);

		}


	}

/*************************
*
*         AGENDA
* 
*************************/

} elseif($TT=='todos_mensajes'){

// print_r(array($SS,$II,$TT,$LL,$CC,$III));

	$paranotificar=fila(
		array(
			"v.id_cliente as id_cliente",
			"v.id_usuario as id_usuario",
			"v.user as user",
			"d.id as id",
			"d.alerta_fecha as fecha_vencimiento",
			"d.alerta as asunto",
			"d.texto2 as texto"
			),
		"todos as v, todos_mensajes as d",
		"where v.id=d.id_grupo and d.alerta_fecha!='0000-00-00 00:00:00' and DATE(d.alerta_fecha) >= DATE(NOW()) and d.id=".$II,
		0);

	$programada=$paranotificar['fecha_vencimiento'];

	$source_timestamp=strtotime($paranotificar['fecha_vencimiento']);
	$new_timestamp=strtotime("-2 hour", $source_timestamp);
	$paranotificar['fecha_vencimiento'] = date('Y-m-d H:i:s',$new_timestamp);


	$paranotificar['asunto'] = $paranotificar['asunto']." - ".fecha_formato($programada,'8b');
	$paranotificar['texto'] = "Programado para: ".fecha_formato($programada,'8b')." <br><br>Detalle:<br>".$paranotificar['texto'];


	$paranotificar['id_item']='';
	$paranotificar['monto']='';

	$paranotificar['tipo']='email';
	$paranotificar['modulo']='agenda';

	// prin($paranotificar);
	// exit();

	$dias=array(
			'1'	=>date("Y-m-d H:i:s",strtotime($paranotificar['fecha_vencimiento']))
			);




	if(
		hay("notificaciones","where modulo='".$paranotificar['modulo']."' and item='".$paranotificar['id']."'",0)
	){

		foreach( $dias as $sub => $dia )
		{

			update(
				array(
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],
				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				"where modulo='abonos' and item='".$paranotificar['id']."' and sub_item='".$sub."' ",
				0
			);

		}	

	} else {

		foreach( $dias as $sub => $dia )
		{

			insert(
				array(
				'modulo'           =>$paranotificar['modulo'],
				'item'             =>$paranotificar['id'],
				'sub_item'         =>$sub,
				'fecha_programada' =>$dia,
				'id_cliente'       =>$paranotificar['id_cliente'],
				'id_usuario'       =>$paranotificar['id_usuario'],
				'user'       	   =>$paranotificar['user'],
				'id_item'          =>$paranotificar['id_item'],				
				'texto'            =>$paranotificar['texto'],
				'asunto'            =>$paranotificar['asunto'],
				'estado'           =>'1',
				'tipo'             =>$paranotificar['tipo'],
				),
				"notificaciones",
				0
			);

		}


	}


}



// prin($paranotificar);
// exit();














