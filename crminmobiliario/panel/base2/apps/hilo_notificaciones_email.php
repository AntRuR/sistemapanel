<?php //á

error_reporting(ALL);

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

$enviar_bit=true;

// echo $II;

$notificaciones_array=select(
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
	"where fecha_programada <= NOW() + INTERVAL 10 MINUTE 
	and fecha_programada >= NOW() - INTERVAL 20 MINUTE 
	and date(fecha_programada) = date(NOW())
	and estado='1'",
	1,
	array(
			// 'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
			'usuario'	=>array('fila'=>array('id_jefe','usuarios','where id="{id_usuario}"')),		
			// 'jefe'		=>array('fila'=>array('nombre,apellidos,genero,email','usuarios2','where id="{id_jefe}"')),		
		)
	);


	$result=mysql_query("select now()",$link);
	$row = mysql_fetch_row($result);
	echo "

	It's: ".$row[0]."

	";


foreach($notificaciones_array as $notificaciones){

	echo "notificación ".$notificaciones['id']. "=". $notificaciones['fecha_programada']."
	";


	if($notificaciones['tipo']=='email')
	if($notificaciones['modulo']=='abonos'){


		$cliente=fila('nombre,apellidos,genero,email,dni','clientes','where id="'.$notificaciones['id_cliente'].'"');
		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');



		//$jefe=fila(array('nombre,apellidos,genero,email'),'usuarios2','where id="'.$notificaciones['id_jefe'].'"');

		//email_cliente
		if($enviar_bit)		
		$email_cliente=enviar_email(
						array(
						'emails'=>array($cliente['email'],$usuario['email'],'guillermolozan@gmail.com','wtavara@prodiserv.com')
						,'Subject'=>"Recodatorio de Abono"
						,'body'=>$notificaciones['asunto']
						,'From'=>'no-reply@crmsche.info'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");
		}

		
	} elseif($notificaciones['modulo']=='seguimiento'){

		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');
		$jefe=fila('nombre,apellidos,genero,email','usuarios2','where id="'.$notificaciones['usuario']['id_jefe'].'"');


		//email_cliente
		if($enviar_bit)		
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'],$jefe['email'],'guillermolozan@gmail.com','wtavara@prodiserv.com')
						,'Subject'=>strtoupper($notificaciones['asunto'])
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@crmsche.info'
						,'FromName'=>'San Charbel - CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){
			echo "enviado\n";
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");
		}		

	} elseif($notificaciones['modulo']=='agenda'){

		$cliente=fila('nombre,apellidos,email,dni','todos_contactos','where id="'.$notificaciones['id_cliente'].'"');
		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');

		// prin($notificaciones);
		// prin($cliente);
		// exit();

		//email_cliente
		if($enviar_bit)
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'],'guillermolozan@gmail.com','wtavara@prodiserv.com')
						,'Subject'=>$notificaciones['asunto']
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@crmsche.info'
						,'FromName'=>'CRM Inmobiliario'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'",1);
		}		

	}

}		
