<?php //á

if(!isset($II)){

	chdir("../../");

	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");
	include("lib/webutil.php");
	include("config/tablas.php");

	include("lib/sesion.php");
	include("lib/playmemory.php");
	include("lib/class.phpmailer.php");

	include("config/library.php");

	// $II=2;

}

// echo $II;

$notificaciones=fila(
	array(
		"item",
		"modulo",
		"id_item",
		"id_cliente",
		"id_usuario",
		"id_jefe",
		"texto",
		"tipo",
		"estado",
		"fecha_programada"
		),
	"notificaciones",
	"where fecha_programada >= (NOW() - INTERVAL 30 MINUTE) and estado='1'",
	0,
	array(
			'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
			'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email','usuarios','where id="{id_usuario}"')),		
			'jefe'		=>array('fila'=>array('nombre,apellidos,genero,email','usuarios','where id="{id_jefe}"')),		
		)
	);
	
	if($notificaciones['tipo']=='email')
	if($notificaciones['modulo']=='abonos'){

		//email_cliente
		$email_cliente=enviar_email(
						array(
						'emails'=>array($cliente['email'],$usuario['email'],$jefe['email'])
						,'Subject'=>"Recodatorio de Abono"
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@no-reply.com'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		
	} elseif($notificaciones['modulo']=='seguimiento'){

		//email_cliente
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'],$jefe['email'])
						,'Subject'=>"Recordatorio de seguimiento"
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@no-reply.com'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

	}

	// prin($notificaciones);


	// $dias=array(
	// 		'1'	=>date("Y-m-d H:i:s",strtotime($abono['fecha_vencimiento'].' + 8 hours')).'<br>',
	// 		'2'	=>date("Y-m-d H:i:s",strtotime($abono['fecha_vencimiento'].' - 1 day + 8 hours'))
	// 		);

	// if(
	// 	hay("notificaciones","where modulo='abonos' and item='".$abono['id']."'",0)
	// ){

	// 	foreach( $dias as $sub => $dia )
	// 	{

	// 		update(
	// 			array(
	// 			'fecha_programada' =>$dia,
	// 			'id_cliente'       =>$abono['id_cliente'],
	// 			'id_usuario'       =>$abono['id_usuario'],
	// 			'user'       	   =>$abono['user'],
	// 			'id_item'          =>$abono['id_item'],
	// 			'id_jefe'          =>$abono['id_jefe'],
	// 			'texto'            =>'falta',
	// 			'estado'           =>'1',
	// 			'tipo'             =>'1',
	// 			),
	// 			"notificaciones",
	// 			"where modulo='abonos' and item='".$abono['id']."' and sub_item='".$sub."' ",
	// 			0
	// 		);

	// 	}	

	// } else {

	// 	foreach( $dias as $sub => $dia )
	// 	{

	// 		insert(
	// 			array(
	// 			'modulo'           =>'abonos',
	// 			'item'          =>$abono['id'],
	// 			'sub_item'              =>$sub,
	// 			'fecha_programada' =>$dia,
	// 			'id_cliente'       =>$abono['id_cliente'],
	// 			'id_usuario'       =>$abono['id_usuario'],
	// 			'user'       	   =>$abono['user'],
	// 			'id_item'          =>$abono['id_item'],				
	// 			'id_jefe'          =>$abono['id_jefe'],
	// 			'texto'            =>'falta',
	// 			'estado'           =>'1',
	// 			'tipo'             =>'1',
	// 			),
	// 			"notificaciones",
	// 			0
	// 		);

	// 	}


	// }











