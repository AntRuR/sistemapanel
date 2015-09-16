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



if($TT=='productos_ventas_documentos'){

	// echo $II;

	$paranotificar=fila(
		array(
			"v.id_item as id_item",
			"v.id_cliente as id_cliente",
			"v.id_usuario as id_usuario",
			"v.user as user",
			"d.id as id",
			"d.monto as monto",
			"d.fecha_vencimiento as fecha_vencimiento"
			),
		"productos_ventas as v,productos_ventas_documentos as d ",
		"where v.id=d.id_grupo and d.fecha_vencimiento!='0000-00-00 00:00:00' and DATE(d.fecha_vencimiento) >= DATE(NOW()) and d.id=".$II,
		0);
	
	$paranotificar['tipo']  ='email';
	$paranotificar['texto'] ='texto abonos';
	$paranotificar['asunto'] ='Recodatorio de Abono';
	$paranotificar['modulo']='abonos';

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
elseif($TT=='ventas_mensajes'){

// print_r(array($SS,$II,$TT,$LL,$CC,$III));

	$paranotificar=fila(
		array(
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
	$paranotificar['texto']='texto mensajes';
	$paranotificar['asunto']='Recodatorio de seguimiento';
	$paranotificar['modulo']='seguimiento';

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














