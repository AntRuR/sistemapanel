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
// $enviar_bit=false;


function resumen($mensajes){

	$html='';
	$html.=sizeof($mensajes).' alertas<br><br><br>';
	foreach($mensajes as $mensaje){

	$html.="Modelo: ".dato('nombre','productos_items','where id='.$mensaje['id_proyecto'])."<br>";
	$html.='Alerta:'.dato('nombre','mensajes_alertas','where id='.$mensaje['alerta_mensaje']).'<br>';
	$html.="Fecha: ".fecha_formato($mensaje['alerta_fecha'],'8b')."<br>";
	$html.="Status: ".dato('nombre','ventas_status','where id='.$mensaje['id_status'])."<br>";

	$html.="Cliente: <a href='http://incapower.pe/panel/custom/clientes.php?i=".$mensaje['id_cliente']."'>".dato('nombre','clientes','where id='.$mensaje['id_cliente'])." ".dato('apellidos','clientes','where id='.$mensaje['id_cliente'])."</a><br>";
	$html.="Teléfono: ".dato('telefono','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="Oficina: ".dato('telefono_oficina','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="Claro: ".dato('celular_claro','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="Movistar: ".dato('celular_movistar','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="Entel: ".dato('nextel','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="RPM: ".dato('rpm','clientes','where id='.$mensaje['id_cliente'])."<br>";
	$html.="RPC: ".dato('rpc','clientes','where id='.$mensaje['id_cliente'])."<br><br>";
	
	$html.="Atención: <a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$mensaje['id_item']."'>#".$mensaje['id_item']."</a><br>";
	$html.='<br><br><br>';

		// $html.='#Alerta:'.$mensaje['id_mensaje'].'<br>';
		// $html.='<a href="http://incapower.pe/panel/custom/ventas_items.php?i='.$mensaje['id_item'].'">#Atención:'.$mensaje['id_item'].'</a><br>';
		// $html.='Cliente:'.dato('nombre','clientes','where id='.$mensaje['id_cliente']).' '.dato('apellidos','clientes','where id='.$mensaje['id_cliente']).'<br>';
		// $html.='Alerta:'.dato('nombre','mensajes_alertas','where id='.$mensaje['alerta_mensaje']).'<br>';
		// $html.='Mensaje:'.dato('texto','ventas_mensajes','where id='.$mensaje['id_mensaje']).'<br>';
		// $html.='<br><br><br>';

	}
	return $html;

}

$now=date('G')*100 + 10*date('i')/6;
// prin($now);

$hora=7;
if( $now>=100*$hora-50 and $now<100*$hora-25 ){
	
	echo 'in 7am<br>';
//La lista de acumulados de alertas atrasadas
//deberá llegar al correo del Asesor comercial, Jefe de ventas y Supervisor
//todos los días a las 7:00am

	$usuarios=select("nombre,apellidos,id,id_sesion as user","usuarios","where status=1",0);

	foreach($usuarios as $usuario){

		$mensajes_array=select(
			array(
				'ventas_mensajes.id as id_mensaje',
				'ventas_mensajes.alerta_fecha as alerta_fecha',
				'ventas_mensajes.alerta as alerta_mensaje',
				'ventas_mensajes.cumplido as cumplido',
				'ventas_mensajes.id_grupo as id_grupo',
				'ventas_items.id_item as id_proyecto',
				'ventas_items.id_status as id_status',
				'ventas_items.id_cliente as id_cliente',
				'ventas_items.id_usuario as id_usuario',
				'ventas_items.user as user',
				'ventas_items.id as id_item'
				),
			"ventas_mensajes",
			"
			left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo
			where ventas_mensajes.alerta is not null
			and ventas_items.id_usuario=".$usuario['id']."
			and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
			and ventas_mensajes.estado!=6
			and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00'
			and ventas_mensajes.alerta_fecha is not null
			and ventas_mensajes.alerta_fecha < NOW()
			order by ventas_mensajes.alerta_fecha asc
			",
			0);

		// echo resumen($mensajes_array);
		// exit();
		// if(0)
		insert(
			array(
			'modulo'           =>'resumen',
			
			'item'             =>'0',
			'sub_item'         =>'1',
			
			'fecha_programada' =>date('Y-m-d').' 07:00:00',
			'id_cliente'       =>'',
			'id_usuario'       =>$usuario['id'],
			'user'       	    =>$usuario['user'],
			'id_item'          =>'',			

			'texto'            =>resumen($mensajes_array),
			'asunto'           =>'Alertas atrasadas de '.$usuario['nombre'].' '.$usuario['apellidos'].' | 7am',
			'estado'           =>'1',
			'tipo'             =>'email',
			),
			"notificaciones",
			0
		);

	}	


}

$hora=20;
if( $now>=100*$hora-50 and $now<100*$hora-25 ){
	echo 'in 8pm<br>';
//La lista de alertas del día 
//llegaran al correo del Asesor comercial, Jefe de ventas y Supervisor 
//un día antes a las 8:00pm 
//y un cuarto de hora antes del evento de cada alerta.	

	$usuarios=select("nombre,apellidos,id,id_sesion as user","usuarios","where status=1");

	foreach($usuarios as $usuario){

		$mensajes_array=select(
			array(
				'ventas_mensajes.id as id_mensaje',				
				'ventas_mensajes.alerta_fecha as alerta_fecha',
				'ventas_mensajes.alerta as alerta_mensaje',				
				'ventas_mensajes.cumplido as cumplido',
				'ventas_mensajes.id_grupo as id_grupo',
				'ventas_items.id_item as id_proyecto',
				'ventas_items.id_status as id_status',
				'ventas_items.id_cliente as id_cliente',
				'ventas_items.id_usuario as id_usuario',
				'ventas_items.user as user',
				'ventas_items.id as id_item'			
				),
			"ventas_mensajes",
			"
			left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo	
			where ventas_mensajes.alerta is not null
			and ventas_items.id_usuario=".$usuario['id']."
			and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
			and ventas_mensajes.estado!=6
			and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00'
			and ventas_mensajes.alerta_fecha is not null
			and ventas_mensajes.alerta_fecha <= NOW() + INTERVAL 36 HOUR 
			and ventas_mensajes.alerta_fecha >= NOW() + INTERVAL 12 HOUR 
			order by ventas_mensajes.alerta_fecha asc
			",
			0);
				
		// echo resumen($mensajes_array);
		// exit();
		// if(0)
		insert(
			array(
			'modulo'           =>'resumen',
			
			'item'             =>'0',
			'sub_item'         =>'1',
			
			'fecha_programada' =>date('Y-m-d').' 22:00:00',
			'id_cliente'       =>'',
			'id_usuario'       =>$usuario['id'],
			'user'       	    =>$usuario['user'],
			'id_item'          =>'',				

			'texto'            =>resumen($mensajes_array),
			'asunto'           =>'Alertas para mañana de '.$usuario['nombre'].' '.$usuario['apellidos'].'| 8pm',
			'estado'           =>'1',
			'tipo'             =>'email',
			),
			"notificaciones",
			0
		);

	}		

}




// echo $II;

$result=mysqli_query("select now()",$link);
$row = mysqli_fetch_row($result);
echo "

<br>It's: ".$row[0]."

";

// exit();


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
	0,
	array(
			// 'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,dni','clientes','where id="{id_cliente}"')),
			'usuario'	=>array('fila'=>array('id_jefe','usuarios','where id="{id_usuario}"')),		
			// 'jefe'		=>array('fila'=>array('nombre,apellidos,genero,email','usuarios2','where id="{id_jefe}"')),		
		)
	);





foreach($notificaciones_array as $notificaciones){

	echo "notificación ".$notificaciones['id']. "=". $notificaciones['fecha_programada']."
	";


	if($notificaciones['tipo']=='email')
	if($notificaciones['modulo']=='resumen'){

		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');
		$jefe=fila('nombre,apellidos,genero,email','usuarios2','where id="'.$notificaciones['usuario']['id_jefe'].'"');


		//email_cliente
		if($enviar_bit)		
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'],$jefe['email'],'guillekldc@gmail.com','wtavara@prodiserv.com')
						,'Subject'=>strtoupper($notificaciones['asunto'])
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@incapower.pe'
						,'FromName'=>'Incapower Resúmen - CRM'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){

			echo "enviado\n";
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");

		}		

			
	} elseif($notificaciones['modulo']=='seguimiento'){

		$usuario=fila('nombre,apellidos,genero,email','usuarios','where id="'.$notificaciones['id_usuario'].'"');
		$jefe=fila('nombre,apellidos,genero,email','usuarios2','where id="'.$notificaciones['usuario']['id_jefe'].'"');


		//email_cliente
		if($enviar_bit)		
		$email_cliente=enviar_email(
						array(
						'emails'=>array($usuario['email'],$jefe['email'],'guillekldc@gmail.com','wtavara@prodiserv.com')
						,'Subject'=>strtoupper($notificaciones['asunto'])
						,'body'=>$notificaciones['texto']
						,'From'=>'no-reply@incapower.pe'
						,'FromName'=>'Incapower Seguimiento - CRM'							
						//,'Logo'=>''
						)
					);

		if($email_cliente){

			echo "enviado\n";
			update(array('estado'=>'2'),"notificaciones","where id='".$notificaciones['id']."'");

		}

	}

}		
