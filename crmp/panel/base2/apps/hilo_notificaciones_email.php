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
		"id",
		"item",
		"modulo",
		"id_item",
		"id_cliente",
		"id_usuario",
		"texto",
		"asunto",
		"tipo",
		"estado",
		"fecha_programada"
		),
	"notificaciones",
	"where fecha_programada >= (NOW() - INTERVAL 30 MINUTE) and estado='1'",
	0,
	array(
			// 'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
			// 'usuario'	=>array('fila'=>array('nombre,apellidos,genero,email','usuarios','where id="{id_usuario}"')),		
			// 'jefe'		=>array('fila'=>array('nombre,apellidos,genero,email','usuarios2','where id="{id_jefe}"')),		
		)
	);


	if($notificaciones['tipo']=='email')
	if($notificaciones['modulo']=='abonos'){


		$cliente=fila('nombre,apellidos,genero,email,dni','clientes','where id="'.$notificaciones['id_cliente'].'"');
		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');



		//$jefe=fila(array('nombre,apellidos,genero,email'),'usuarios2','where id="'.$notificaciones['id_jefe'].'"');

		//email_cliente
		$email_cliente=enviar_email(
						array(
						'emails'=>array($cliente['email'],$usuario['email'])
						,'Subject'=>"Recodatorio de Abono"
						,'body'=>$notificaciones['asunto']
						,'From'=>'no-reply@crminmobiliario.info'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");
		}

		
	} elseif($notificaciones['modulo']=='seguimiento'){

		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');
		//$jefe=fila(array('nombre,apellidos,genero,email'),'usuarios2','where id="'.$notificaciones['id_jefe'].'"');

		//email_cliente
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'])
						,'Subject'=>$notificaciones['asunto']
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@crminmobiliario.info'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);
		if($email_cliente){
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");
		}		

	} elseif($notificaciones['modulo']=='agenda'){

		$cliente=fila('nombre,apellidos,email,dni','todos_contactos','where id="'.$notificaciones['id_cliente'].'"');
		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');

		// prin($notificaciones);
		// prin($cliente);
		// exit();

		//email_cliente
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'])
						,'Subject'=>$notificaciones['asunto']
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@crminmobiliario.info'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'",1);
		}		

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











