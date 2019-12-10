<?php

// '1' => 'Separación',
// '2' => 'Inicial',
// '3' => 'Abono',
// '4' => 'Desembolso Bancario',
// '5' => 'Plan Ahorro'


// prin($objeto_tabla['objeto_tabla']);

if(1){

	$us_ventas=select(
	[
	"productos_ventas.id as id",
	"productos_ventas.user as user", // correcto
	"productos_ventas.id_ventas_item as id_ventas_item",
	"ventas_items.id_status as id_status",
	"ventas_items.id_usuario as id_usuario",
	"ventas_items.user as venta_user",
	"ventas_items.id as ventas_id",
	"ventas_items.pedido as pedido",
	"ventas_items.motivo as motivo",
	"ventas_items.otro_motivo as otro_motivo",
	// "ventas_items.id_status as id_status",
	"ventas_items.fecha_separacion as fecha_separacion",
	"ventas_items.fecha_vendido as fecha_vendido",

	"ventas_items.id_item as id_item",


	],
	"productos_ventas",
	"left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
	where 1 "

	// ."and (ventas_items.motivo is null or (ventas_items.motivo = 0 and ventas_items.otro_motivo!='') ) "
	
	// ."and (ventas_items.motivo is null or (ventas_items.motivo = 0 and ventas_items.otro_motivo!='' ) "
	
	// ." and ventas_items.id_status not in (10)"
	// ." and ventas_items.id_status in (10)"
	// ."and (ventas_items.motivo is not null or ventas_items.motivo = 0) "
	// ." and ventas_items.id_status in (2,3,6,7)"
	.( (isset($_GET['i']))?" and productos_ventas.id=".$_GET['i']:"" )
	// ." and productos_ventas.id in (65,88)"
	// ." and ventas_items.id_item=1"
	,
	0);



	// prin($us_ventas);
	foreach($us_ventas as $us_venta){

		// if($us_venta['id']=='203'){
		// prin($us_venta);
		// }

		if($us_venta['user']!=$us_venta['venta_user']){
			
			// prin($us_venta);
			$ret1=fila('nombre,apellidos,id,id_sesion','usuarios','where id_sesion='.$us_venta['user']);
			$ret2=fila('nombre,apellidos','usuarios','where id='.$us_venta['id_usuario']);
			$ret3=fila('nombre,apellidos','usuarios','where id_sesion='.$us_venta['venta_user']);

			if(1)
			update(
				[
					'user'       =>$ret1['id_sesion'],
					'id_usuario' =>$ret1['id'],
				],
				'ventas_items',
				'where id='.$us_venta['ventas_id'],
				0
				);

			$ret=[
				'productos_ventas.user'   =>[
					'id'   =>$us_venta['user'],
					'name' =>$ret1['nombre']." ".$ret1['apellidos']
				],
				'ventas_items.id_usuario' =>[
					'id'   =>$us_venta['id_usuario'],
					'name' =>$ret2['nombre']." ".$ret2['apellidos']
				],
				'ventas_items.user'       =>[
					'id'   =>$us_venta['venta_user'],
					'name' =>$ret3['nombre']." ".$ret3['apellidos']
				],
			];
			
			// prin($ret);

			$new_us_ventas[]=$ret;
		}
	}
	

	if(0){

		// prin(sizeof($new_us_ventas));
		// prin($new_us_ventas);
		// prin(sizeof($us_ventas));
	
	}

	/*
	update(array("id_status"=>"1"),"productos_items_items","where 1",0);
	update(array("id_status"=>"1"),"productos_estacionamientos_items_items","where 1",0);
	update(array("id_status"=>"1"),"productos_depositos_items_items","where 1",0);
	*/

	// prin($us_ventas);

	$id_ventas_items=[];

	if(1)
	foreach($us_ventas as $us_venta){

		$id_ventas_items[]=$us_venta['id_ventas_item'];

		// update(['id_status'=>'3'],"ventas_items","where id=".$us_venta['ventas_id'],1);

		$us_abonos=select(
			"id,operacion,opeban,monto,cumplido,fecha_abono,saldo",
			"productos_ventas_documentos",
			"where id_grupo=".$us_venta['id']." order by operacion asc",
			0);
		// prin($us_abonos);

		unset($us_num);
		foreach($us_abonos as $abono){

			++$us_num['todos']['todo'];
			if($abono['operacion']=='1') ++$us_num['separacion']['todo'];
			if($abono['operacion']=='2') ++$us_num['inicial']['todo'];

			if($abono['cumplido']=='1' 
				and $abono['fecha_abono']!=''
				and $abono['opeban']!=''
				){

				++$us_num['todos']['done'];
				if($abono['operacion']=='1') ++$us_num['separacion']['done'];
				if($abono['operacion']=='2') ++$us_num['inicial']['done'];

			}

			$saldo_final=$abono['saldo'];

		}

		// prin($saldo_final);

		if(sizeof($us_abonos)>0){

			$us_num['separacion']['complete']= ($us_num['separacion']['todo']==$us_num['separacion']['done']) ? 1: 0;
			// $us_num['inicial']['complete']= ($us_num['inicial']['todo']==$us_num['inicial']['done']) ? 1: 0;
			// $us_num['inicial']['complete']= ($us_num['inicial']['done']>0) ? 1: 0;

			$us_num['inicial']['complete']= ( $us_num['todos']['done']> $us_num['separacion']['done']) ? 1: 0;

			$us_num['todos']['complete']= ($us_num['todos']['todo']==$us_num['todos']['done']) ? 1: 0;

		}
		// prin($us_num);

		$ubonos=[];
		$ufecha_separado=$ufecha_vendido='';
		// $useparaciones=$uiniciales=[];
		foreach($us_abonos as $buno){
			if(
				(
					$buno['fecha_abono']!='0000-00-00 00:00:00' and 
					$buno['fecha_abono']!=''
				)
				and $buno['cumplido']=='1'){
				$ubonos[]=$buno;
				if($buno['operacion']==1){
					$ufecha_separado=$buno['fecha_abono'];
				} elseif($buno['operacion']==2 or $buno['operacion']==3){
					$ufecha_vendido=$buno['fecha_abono'];
				}
			}
		}


		
		// prin($us_num);
		// prin($ubonos);
		// prin([
		// 	'ufecha_separado'=>$ufecha_separado,
		// 	'ufecha_vendido'=>$ufecha_vendido,
		// 	]);
		
		if($us_venta['motivo']=='' or ($us_venta['motivo']=='0' and $us_venta['otro_motivo']=='') ){


			if($us_num['todos']['complete']){
				
				if($ufecha_vendido=='' and $ufecha_separado!='')
					$ufecha_vendido=$ufecha_separado;

				if($ufecha_vendido!='' and $ufecha_separado=='')
					$ufecha_separado=$ufecha_vendido;

				if($saldo_final==0){
			
					$us_id_status   ='8';	// cancelado
					$item_id_status ='4';

					$fecha_separado =$ufecha_separado;
					$fecha_vendido  =$ufecha_vendido;


				} else {

					$us_id_status   ='7'; // vendido
					$item_id_status ='3';
					
					$fecha_separado =$ufecha_separado;
					$fecha_vendido  =$ufecha_vendido;

				}
				
			} elseif($us_num['inicial']['complete']) {
				
				if($ufecha_vendido=='' and $ufecha_separado!='')
					$ufecha_vendido=$ufecha_separado;

				if($ufecha_vendido!='' and $ufecha_separado=='')
					$ufecha_separado=$ufecha_vendido;
				


				$us_id_status   ='7';	// vendido
				$item_id_status ='3';
				
				// prin1($ubonos,"#225");
				
				$fecha_separado =$ufecha_separado;
				$fecha_vendido  =$ufecha_vendido;

			} elseif($us_num['separacion']['complete']) {
				
				$us_id_status   ='6';	// separado
				$item_id_status ='2';
				
				$fecha_separado =$ufecha_separado;
				$fecha_vendido  ='';

			} else {
				
				$us_id_status   ='3';	// seguimiento
				$item_id_status ='1';
				
				$fecha_separado ='';
				$fecha_vendido  ='';

				// echo 'aqui estamos';

			}

		} else {

			$us_id_status   ='10';	// seguimiento
			$item_id_status ='1';
			
			$fecha_separado ='';
			$fecha_vendido  ='';

		}

		// prin($us_id_status);
		// echo $us_venta['id']."<br>";
		update([
			'id_status'        =>$us_id_status,
			'fecha_separacion' =>$fecha_separado,
			'fecha_vendido'    =>$fecha_vendido,
			],"ventas_items","where id=".$us_venta['ventas_id']
			,0);

		// exit();
		// prin($us_venta);
		// prin(json_decode($us_venta['pedido']));



		foreach(json_decode($us_venta['pedido']) as $pedido){
			if($pedido->type=="departamento"){
				// if(in_array($pedido->id,[70,114])){
				// 	prin($us_venta);
				// }
				// if($pedido->id==144){
				// 	// prin($us_venta);
				// }

				update(array("id_item_item"=>$pedido->id),"productos_ventas","where id=".$us_venta['id'],0);

				update(array("id_status"=>$item_id_status),"productos_items_items","where id=".$pedido->id,0);
			}
			elseif($pedido->type=="estacionamiento"){

				update(array("id_item_estacionamiento"=>$pedido->id),"productos_ventas","where id=".$us_venta['id'],0);

				update(array("id_status"=>$item_id_status),"productos_estacionamientos_items_items","where id=".$pedido->id,0);
			}
			elseif($pedido->type=="deposito"){

				update(array("id_item_deposito"=>$pedido->id),"productos_ventas","where id=".$us_venta['id'],0);

				update(array("id_status"=>$item_id_status),"productos_depositos_items_items","where id=".$pedido->id,0);
			}
		}

		// prin($us_venta['id']);
		
		update_tags($objeto_tabla['PRODUCTOS_VENTAS'],$us_venta['id']);

	}

}

// prin1(implode(',',$id_ventas_items));

// prin($_GET);