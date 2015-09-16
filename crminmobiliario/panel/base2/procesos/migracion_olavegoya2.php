<?php
/**
 * 
 descripción de migración olavegoya2
 * 
 */



function getIdOrCreate($tabla,$where,$more_inserts=[]){

	$where_strings=[];
	$val2='';
	foreach($where as $var=>$val){
		$where_strings[]="$var='$val'";
		$val2.=$val;
	}
	if(trim($val2)=='') return ''; 

	$fila=select_fila("id",$tabla,"where ".implode(" and ",$where_strings));

	if($fila==false){

		$insert=insert(array_merge($where,$more_inserts),$tabla,0);

		return $insert['id'];

	} else {

		return $fila['id'];

	}

}

// [nombre]          => MARIANELLA
// [fecha]           => 2014-04-03
// [telefono]        => 980298943
// [fijo]            => 
// [email]           => mcarrasco_asc@hotmail.com
// [visita]          => PASABA POR ZONA
// [seguimiento]     => se le llama, indica visitara piloto
// [departamento]    => 201
// [nombre_completo] => MARIANELLA CARRASCO ZARAUZ
// [apellidos]       => CARRASCO ZARAUZ

function insertAtenciones(){

	$id_item=1; // proyecto : Olavegoya 1
	$id_status=3;
	$id_nivel=1;
	$id_usuario=146; //larry portanova
	$id_user=203; //larry portanova


	//leer archivo
	$buffer=implode('',file('atenciones2/olavegoya2.csv'));

	//parsear csv
	$atenciones=[];

	$lineas=explode("\n",$buffer);

	$campos=explode(",",$lineas[0]);

	foreach($lineas as $i => $linea){

		if($i==0) continue;

		$columnas=str_getcsv($linea);

		foreach($columnas as $j => $columna){

			$atenciones[$i][strtolower(trim($campos[$j]))]=$columna;
		}

	}

	// prin($atenciones);

	//inserts

	$fechaMonth=[
	'Ene'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Set'=>'09','Oct'=>'10','Nov'=>'11','Dic'=>'12',
	'01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12',
	];



	foreach($atenciones as $i => &$atencion){

		if(trim($atencion['nombre'])=='') continue;

		//eliminamos vacio
		unset($atencion['']);

		//nombre completo
		$atencion['nombre_completo']=$atencion['nombre'];

		//nombre y apellidos
		$nom_partes=explode(" ",$atencion['nombre']);
		$atencion['nombre']=$nom_partes[0];
		unset($nom_partes[0]);
		$atencion['apellidos']=trim(implode(" ",$nom_partes));

		//fecha
		$atencion['fecha_original']=$atencion['fecha'];
		$fecha_partes=explode("-",$atencion['fecha']);
		$atencion['fecha']="2015-".$fechaMonth[$fecha_partes[1]]."-".str_pad($fecha_partes[0], 2, "0", STR_PAD_LEFT)." 14:00:00";

		$atencion['seguimiento']='Primer contacto';
		// prin($atencion['fecha']);

		// prin($atencion);

		// continue;

		//
		//cliente
		$clienteId=getIdOrCreate(
			"clientes",
			[
				"nombre"    =>$atencion['nombre'],
				"apellidos" =>$atencion['apellidos'],
			],
			[
				"celular_claro" =>$atencion['tel. cel.'],
				"email"         =>$atencion['email'],
				"telefono"      =>$atencion['fijo'],

				"id_usuario"     =>$id_usuario,//
				"user"     		  =>$id_user,//

				// "tipo_cliente"  =>rand(1, 2),
				// "genero"  		=>rand(1, 2),
				// "genero"  		=>rand(1, 2),
				// "email"  		=>"guillermolozan@icloud.com",
			]
			);


		//	$pedido='[{"type":"departamento","price":"621000","id":"12"}]';
		//departamento
		$item_item=select_fila("id,pvlista","productos_items_items","where numero=".$atencion['departamento']." and id_item=".$id_item);

		// $pedido='[{"type":"departamento","price":"'.$item_item['pvlista'].'","id":"'.$item_item['id'].'"}]';

		// $pedido='[{"type":"departamento","price":"'.$item_item['pvlista'].'","id":"'.$item_item['id'].'","name":"1 departamento'.$atencion['departamento'].'","num":"'.$atencion['departamento'].'","torre":"1"}]';

		$canalId=getIdOrCreate(
			"contacto_canales",
			[
			"nombre"    =>$atencion['medio'],
			]
			);


		// prin($atencion);
		//atencion
		$venta=insert(
			[
			"fecha_creacion" =>$atencion['fecha'],//
			"fecha_creacion2"=>$atencion['fecha'],//
			"visibilidad"    =>'1',
			"id_cliente"     =>$clienteId,
			"id_status"      =>$id_status,//
			"id_nivel"       =>$id_nivel,//
			"id_canal"       =>$canalId,
			"id_item"        =>$id_item,//
			"id_usuario"     =>$id_usuario,//
			"user"     		  =>$id_user,//
			
			// "pedido"         =>$pedido,//
			// "pvlista"         =>$item_item['pvlista'],//
			// "pvpromocion"         =>$item_item['pvlista'],//

			// "id_item_item"   =>$item_item['id'],//

			]
			,"ventas_items"
			);

		if(trim($atencion['seguimiento'])!='')
		insert(
			[
			'fecha_creacion' =>$atencion['fecha'],
			// "id_item"        =>$id_item,//
			'id_grupo'       =>$venta['id'],
			// "id_cliente"     =>$clienteId,
			'texto'          =>$atencion['seguimiento'],
			]
			,'ventas_mensajes'
			,1
			);

	}

	// exit();

	prin("Inserciones DONE");

	// prin($atenciones);

	// prin($celdas);


	// $matriz = str_getcsv($buffer,',','"','\\',"\n");

	// $matriz = str_getcsv($buffer); 

	// prin($matriz);

}


insertAtenciones();


