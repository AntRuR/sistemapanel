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

	$II=1;
	$TT='bonos_intervalos_subitems';

}

// prin([$II,$TT]);
// exit();

function getComisionDepa($id_item,$fecha,$id_usuario,$precio){

	$ventas_por_mes=contar(
		"productos_items_items",
		"where 
		id_item=".$id_item." and 
		venta_id_vendedor=".$id_usuario." and 
		EXTRACT(YEAR_MONTH FROM venta_fecha)=EXTRACT(YEAR_MONTH FROM '".$fecha."')
		",
		0
		);

	$bono = fila(
		[
		'bono',
		'bono_porcentaje'
		],
		"bonos_intervalos_subitems",
		"where 1
		and id_item=".$id_item."
		and desde<=".$ventas_por_mes." 
		and hasta>=".$ventas_por_mes."
		",
		0
		);


	if(trim($bono['bono'])!='')
		$valor = $bono['bono_porcentaje']*$precio;
	else
		$valor = $bono['bono'];


	return $valor;

	// return (1)?$bono['bono_porcentaje']*$precio/100:$bono['bono'];

}

function getComisionEsta($id_item){
	$bono = fila(
		[
		'comision_esta',
		],
		"bonos_intervalos",
		"where 1
		and id_item=".$id_item."
		",
		0
		);
	return $bono['comision_esta'];
}

function getComisionDepo($id_item){
	$bono = fila(
		[
		'comision_depo',
		],
		"bonos_intervalos",
		"where 1
		and id_item=".$id_item."
		",
		0
		);
	return $bono['comision_depo'];
}
// getComisionDepa(7,"2013-07-12 13:00:00",143,1000000);

// exit();


if(1)
if($TT=='bonos_intervalos_subitems'){

	$ID_ITEM=dato('id_item','bonos_intervalos_subitems','where id='.$II);

	$ventas=select(
		"
		productos_ventas.id as id,
		productos_ventas.id_item_item as id_item_item,
		productos_ventas.id_item_estacionamiento as id_item_estacionamiento,
		productos_ventas.id_item_deposito as id_item_deposito,
		productos_ventas.id_usuario as id_usuario,
		ventas_items.pedido as pedido,

		productos_items_items.id_item as id_item,

		productos_items_items.venta_precio as item_venta_precio,
		productos_items_items.venta_fecha as venta_fecha,
		productos_estacionamientos_items_items.venta_precio as estacionamiento_venta_precio,
		productos_depositos_items_items.venta_precio as deposito_venta_precio

		",
		"productos_ventas",
		"
		left join ventas_items on productos_ventas.id_ventas_item=ventas_items.id 
		left join productos_items_items on productos_ventas.id_item_item=productos_items_items.id 
		left join productos_estacionamientos_items_items on productos_ventas.id_item_estacionamiento=productos_estacionamientos_items_items.id 
		left join productos_depositos_items_items on productos_ventas.id_item_deposito=productos_depositos_items_items.id 
		where 1
		and ventas_items.id_item=".$ID_ITEM."
		and productos_items_items.venta_fecha is not NULL and productos_items_items.venta_fecha != '0000-00-00 00:00:00'
		order by productos_items_items.venta_fecha asc",
		0
		);


	// prin($ventas);	exit();
	
	truncate("bonos_abonos");

	foreach($ventas as $venta){

		$comision_depa=getComisionDepa(
					$ID_ITEM,
					$venta["venta_fecha"],
					$venta["id_usuario"], 
					$venta["item_venta_precio"]
			);

		$comision_esta=($venta['id_item_estacionamiento']=='')?'':getComisionEsta($ID_ITEM);

		$comision_depo=($venta['id_item_deposito']=='')?'':getComisionDepo($ID_ITEM);

		$total = $comision_depa + $comision_esta + $comision_depo;

		if(!hay("bonos_abonos","where id_item_item=".$venta["id_item_item"]))

			insert([
				"fecha_creacion"			=>  "now",

				"venta_fecha"				=>	$venta["venta_fecha"],

				"id_item"					=>	$venta["id_item"],
				
				"id_item_item"				=>	$venta["id_item_item"],
				"id_item_estacionamiento"	=>	$venta["id_item_estacionamiento"],
				"id_item_deposito"			=>	$venta["id_item_deposito"],

				"item_venta_comision"		=>	$comision_depa,
				"estacionamiento_venta_comision"=>	$comision_esta,//$venta["estacionamiento_venta_precio"],
				"deposito_venta_comision"	=>	$comision_depo,//$venta["deposito_venta_precio"],

				"total"						=> $total,

				"adelanto_monto"			=> $total*0.8,

				"saldo_monto"				=> $total*0.2,

				"estado"					=>	"1",
				],
				"bonos_abonos"
				);

		else

			update([

				"item_venta_comision"		=>	$comision_depa,
				"estacionamiento_venta_comision"=>	$comision_esta,//$venta["estacionamiento_venta_precio"],
				"deposito_venta_comision"	=>	$comision_depo,//$venta["deposito_venta_precio"],

				"total"						=> $total,
				"adelanto_monto"			=> $total*0.8,
				"saldo_monto"				=> $total*0.2,

				],
				"bonos_abonos",
				"where id_item_item=".$venta["id_item_item"]
				);


	}

	if(0){

		$intervalos=[];
		
		foreach($ventas as $venta){

			if(!isset($intervalos[substr($venta['venta_fecha'],0,7)])) $intervalos[substr($venta['venta_fecha'],0,7)]=0;

			$intervalos[substr($venta['venta_fecha'],0,7)]++;

		}

		prin($intervalos);

	}


	if(0){

		$VENTAS_DEPAS=select('id,venta_id_vendedor,date(venta_fecha) as venta_fecha','productos_items_items','where id_status=4 and id_item='.$ID_ITEM);

		foreach($VENTAS_DEPAS as &$venta){
			
			$producto_venta=fila('id_usuario,id_ventas_item','productos_ventas','where id_item_item='.$venta['id']);

			$venta['id_ventas_item']=$producto_venta['id_ventas_item'];

			$venta['id_usuario']=$producto_venta['id_usuario'];

			$producto_atencion=fila('id_usuario','ventas_items','where id='.$venta['id_ventas_item']);
			
			$venta['id_usuario2']=$producto_atencion['id_usuario'];

			// update(["id_usuario"=>$venta['id_usuario2']],"productos_ventas","where id_item_item=".$venta['id']);

			// update(["venta_id_vendedor"=>$venta['id_usuario2']],"productos_items_items","where id=".$venta['id']);

		}	
		prin($VENTAS_DEPAS);

	}

	if(0){

		$ventas=select(
			"
			ventas_items.id_usuario as id_usuario,
			productos_ventas.id as id,
			ventas_items.pedido as pedido
			",
			"productos_ventas",
			"
			left join ventas_items on productos_ventas.id_ventas_item=ventas_items.id 
			");

		foreach($ventas as $venta){

			foreach(json_decode($venta['pedido']) as $pedido){
				if($pedido->type=="departamento"){

					update(["id_item_item"=>$pedido->id],"productos_ventas","where id=".$venta['id'],1);

					update(["id_usuario"=>$venta['id_usuario']],"productos_ventas","where id=".$venta['id']);

					update(["venta_id_vendedor"=>$venta['id_usuario']],"productos_items_items","where id=".$pedido->id);				

				}
				elseif($pedido->type=="estacionamiento")
					update(["id_item_estacionamiento"=>$pedido->id],"productos_ventas","where id=".$venta['id']);
				elseif($pedido->type=="deposito")
					update(["id_item_deposito"=>$pedido->id],"productos_ventas","where id=".$venta['id']);
			}
		}

		//prin($ventas);

	}


	// $VENTAS_ESTAS=select('id,venta_id_vendedor','productos_estacionamientos_items_items','where id_item='.$ID_ITEM);
	// prin($VENTAS_ESTAS);

	// $VENTAS_DEPOS=select('id,venta_id_vendedor','productos_depositos_items_items','where id_item='.$ID_ITEM);
	// prin($VENTAS_DEPOS);

	// $VENTAS=select("venta_id_vendedor,venta_fecha","productos_items_items","");
	// echo $II;

	/*
	
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

	*/


} /*
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


*/











