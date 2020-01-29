<?php

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


$result=mysql_query("select now()",$link);
$row = mysql_fetch_row($result);
echo "

<br>son las ".$row[0]."

";
// robot cada 30
$envio_programado=select(
	array(
		"id",
		"id_speech",
		"id_grupos",
		"fecha_programada"
		),
	"grupos_envios_envios",
	"where fecha_programada <= NOW() + INTERVAL 15 MINUTE 
	and fecha_programada >= NOW() - INTERVAL 15 MINUTE 
	and date(fecha_programada) = date(NOW()) "
	// ."and estado!=2 "
	."",
	0
);


foreach($envio_programado as $envio){

	update(['estado'=>'2'],"grupos_envios_envios","where id=".$envio['id'],1);

	// $grupos_envios=select("id_grupos_envios_envios","grupos_envios_envios_grupos_envios","where id_grupos_envios=".$envio['id'],1);

	// prin($grupos_envios);

	$items=select(
		array(
			"id_ventas_items",
			),
		"grupos_envios_ventas_items",
		"where id_grupos_envios=".$envio['id_grupos']
		// ." and estado='1'"
		."",
		0
	);

	// prin($items);

	$items2[]=$items[0];	$items=$items2;


	foreach($items as $item){

		// $ID="273586";
		$ID=$item['id_ventas_items'];
		
		$linea=select_fila(

			array('fecha_creacion','id','id_cliente','id_grupo','id_item','id_usuario','id_status','id_cuenta_email',
				// 'copia'
				),

			'ventas_items',

			'where id='.$ID,

			0,

			array(

				'cliente'	=>array('fila'=>array('nombre,apellidos,genero,email,tipo_cliente','clientes','where id="{id_cliente}"')),

				'usuario'	=>array('fila'=>array('id_jefe,nombre,apellidos,genero,email,firma','usuarios','where id="{id_usuario}"')),

				'grupo'		=>array('fila'=>array('nombre','productos_grupos','where id="{id_grupo}"')),

				'item'		=>array('fila'=>array('nombre','productos_items','where id="{id_item}"')),

				'cuenta'	=>array('fila'=>array('nombre,logo,fecha_creacion,dominio','envios_cuentas','where id="{id_cuenta_email}"',0,

						array('logo'=>array('archivo'=>array('log_imas','{fecha_creacion}','{logo}')))

					)

				),

			)

		);






		$speech=dato("texto",'envios_speeches','where id='.$envio_programado[0]['id_speech']);
		$asunto=dato("nombre",'envios_speeches','where id='.$envio_programado[0]['id_speech']);


		// echo $speech;

		$replaces=array(
		
						
								'ESTIMADO'=>($linea['cliente']['tipo_cliente']=='2')?'Estimados':(($linea['cliente']['genero']=='2')?'Estimada':'Estimado'),

								'SR'=>($linea['cliente']['tipo_cliente']=='2')?'Sres.':(($linea['cliente']['genero']=='2')?'Sra.':'Sr.'),                     

								//'VENDEDOR_NOMBRE'=>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

								//'VENDEDOR'=>(($linea['usuario']['genero']=='2')?'la Srta.':'el Sr.')." ".$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

								'VENDEDOR'=>$linea['usuario']['nombre'].' '.$linea['usuario']['apellidos'],

								//'CLIENTE_NOMBRE'=>$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],

								//'CLIENTE'=>(($linea['cliente']['genero']=='2')?'Srta.':'Sr.')." ".$linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'],

								'CLIENTE'=>strtoupper($linea['cliente']['nombre'].' '.$linea['cliente']['apellidos']),

								'MODELO'=>$linea['grupo']['nombre'].' '.$linea['item']['nombre'],

								'FICHA'=>"<span class=\"id_speech\"></span>".str_replace("'","\"",$Productos[$linea['id_item']]),

								//'IMPRIMIR'=>str_replace("'","\"","<a href='http://".(($linea['cuenta']['dominio'])?$linea['cuenta']['dominio']:"www.vehiculos.com.pe")."/index.php?modulo=items&tab=productos_imprimir&acc=file&id=".$linea['id_item']."&id_cliente=".$linea['id_cliente']."'>IMPRIMIR</a>"),
								'FIRMA'=>$linea['usuario']['firma'],

								'COTIZACION'=>''
													.'COTIZACIÓN: <a href="http://incapower.pe/panel/custom/ventas_items.php?i='.$linea['id'].'">#'.$linea['id'].'</a><br>'
													.'FECHA '.fecha_formato($linea['fecha_creacion'],'8b').'<br>'
													.'MODELO: '.$linea['grupo']['nombre'].' '.$linea['item']['nombre'].'<br>'
													.'CLIENTE: '.strtoupper($linea['cliente']['nombre'].' '.$linea['cliente']['apellidos'])


								);


		foreach($replaces as $fromm => $tooo){
			$speech=str_replace('['.$fromm.']', $tooo, $speech);
			$asunto=str_replace('['.$fromm.']', $tooo, $asunto);
		}

		// echo $speech;

		$options=[
		'msg'     => $speech,
		'subject' => $asunto,
		'copy'    => '',
		];

		/*
		$url=$SERVER['BASE'].'base2/apps/enviar_cotizacion.php?id='.$ID.'&tab=&ajax=1&auto=1';

		// die($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $options);

		$contents = curl_exec($ch);

		$info = curl_getinfo($ch);

		// echo $contents;

		// prin($info);

		curl_close($ch);

		*/

		$unsubscriptlink="<div>si ya no desea recibir estos emails. Puede desuscribirse en el siguiente link: 
		<a href='".$SERVER['BASE'].'base2/apps/unsubscriptlink.php?email='.$linea['cliente']['email']."'>desuscribir</a>
		</div>";

		$varrs=array(
				'emails'=>[
					'guillekldc@gmail.com',
					// 'guillermolozan@gmail.com',
					// $linea['cliente']['email']
					// $linea['usuario']['email'],
					// 'wtavara@prodiserv.com',
					// $linea['copia'],
					// $_POST['copy'],
				]
				,'Subject'=>$asunto
				,'Subject'=>'prueba: '.$asunto
				,'body'=>$speech.$unsubscriptlink
				,'From'=>$linea['usuario']['email']
				,'FromName'=>$linea['usuario']['nombre']." ".$linea['usuario']['apellidos'] 
				,'Logo'=>$linea['cuenta']['logo']
			);

			// $varrs=array(
			// 				'emails'=>array(
			// 								'guillekldc@gmail.com',
			// 								)
			// 				,'Subject'=>$_POST['subject']
			// 				,'body'=>$_POST['msg'].$style
			// 				,'From'=>'guillermolozan@gmail.com'
			// 				,'FromName'=>'Guillermo'
			// 				,'Logo'=>$linea['cuenta']['logo']
			// 				);


			// prin($varrs);

			$email_cliente=enviar_email_mailgun(
					$varrs
					);			
			
			// prin($email_cliente);

			// prin($linea['cliente']['email']);
			// prin($email_cliente);
			// prin(($email_cliente)?'enviado':'no enviado');

	}

}

