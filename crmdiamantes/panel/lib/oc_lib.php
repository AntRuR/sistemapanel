<?php

function getOrdenes($id,$pvd=null)
{

	$labels=[
		// vendedor
		'asesor_nombre'              => 'EJECUTIVO DE VENTA',
		// clientes
		'cliente_nombre'             => 'SR(A)',
		'cliente_dni'                => 'DNI/RUC',
		'cliente_empresa'            => 'EMPRESA',
		'cliente_ruc'                => 'RUC',
		'cliente_direccion'          => 'DIRECCIÓN',
		'cliente_telefono'           => 'TELEF',
		'cliente_celular'            => 'CELULAR',
		'cliente_pc'                 => 'P/C',
		'cliente_email'              => 'EMAIL',
		'cliente_negocio'            => 'GIRO DEL NEGOCIO',
		'cliente_fecha_cliente'      => 'F.NAC/ANIV',
		'cliente_profesion'          => 'PROFESION',
		'cliente_estado_civil'       => 'ESTADO CIVIL',
		'cliente_conyuge'            => 'CONYUGE',
		'cliente_facturara'          => 'FACTURAR A',
		// vehiculo
		'producto_marca'             => 'MARCA',
		'producto_modelo'            => 'MODELO',
		'producto_color'             => 'COLOR',
		'producto_anio'              => 'AÑO',
		'producto_vin'               => 'CHASIS/VIN',
		'monto'                      => 'MONTO',
		'producto_precio'            => 'PRECIO DEL VEHICULO',
		'producto_descuento'         => 'DSCTO %',
		'producto_tc'                => 'T/C (del día)',
		'producto_precio_facturar'   => 'PRECIO A FACTURAR',
		'producto_conversion'        => 'CONVERSION GLP/GNV',
		'producto_credito_vehicular' => 'CREDITO VEHICULAR',
		'producto_credito_leasing'   => 'CREDITO LEASING',
		'producto_contado'           => 'CONTADO',
		'producto_otros'             => 'OTROS',
		// adicional
		'adicional_marketing'        => 'CODIGO DE MARKETING',
		'adicional_origen_fondos'    => 'ORIGEN DE FONDOS',
		'adicional_observaciones'    => 'OBSERVACIONES',
	];


	$campos =  [  
        'id',
		// 'orden_tipo',
		'orde_numero',
		'banco_operacion',
		'moneda',
		'banco_monto',
		'banco_explicacion_duplicidad',
		'orden_fecha',
		'asesor_nombre',
		'tipo_cliente',
		'nombre',
		'apellidos',
		'dni',
		'genero',
		'email',
		'departamento',
		'provincia',
		'distrito',
		'direccion',
		'telefono',
		'telefono_oficina',
		'cliente_celular',
		'celular_claro',
		'nextel',
		'rpm',
		'rpc',
		'fecha_cliente',
		'profesion',
		'estado_civil',
		'conyuge',
		'pag_tipo_documento',
		'empresa',
		'pag_factura_razonsocial',
		'pag_factura_ruc',
		'contacto_nombre',
		'contacto_apellidos',
		'contacto_dni',
		'producto_marca',
		'producto_modelo',
		'producto_color',
		'producto_anio',
		'producto_vin',
		// 'monto',
		'producto_precio',
		'producto_descuento',
		'producto_tc',
		'producto_precio_facturar',
		'producto_conversion',
		'producto_credito_vehicular',
		'producto_credito_leasing',
		'producto_contado',
		'producto_otros',
		'adicional_marketing',
		'adicional_origen_fondos',
		'adicional_observaciones',
	];


	$estados_civiles=[
		'1'			=> 'Soltero',
		'2'			=> 'Casado'
	];
	
	$monedas=[
		'soles'			=> 'S/.',
		'dolares'		=> 'US$'
	];	

	// prin($monedas);

	$dataRows=filas(
		$campos
		,"ventas_items_ordenes"
		,"where id=".$id
		,0
    );

    // prin($dataRows); exit();

	foreach($dataRows as $key=>$dataRow){
	

        
        if(!$pvd)
            $pvd=dato("id","productos_ventas_documentos","where id_grupo=".$dataRows[$key]['id']." and orden_status=4 order by id asc",0);
    
            
    		$documento=fila(
				"id,
				id_grupo,
				orden_status,
				orde_numero,
				importe as monto,
				moneda,
				opeban as banco_operacion,
				fecha_creacion as orden_fecha,
				tc as producto_tc,
				observaciones as adicional_observaciones
				"
				,"productos_ventas_documentos"
				,"where id=".$pvd
				,0
            );

            foreach($documento as $campo=>$value){
				$dataRows[$key][$campo]=$value;
			}

			$dataRows[$key]['monto']   = $monedas[$dataRows[$key]['moneda']].number_format($dataRows[$key]['monto'], 2, ' ', '.');
			$dataRows[$key]['tc']   = number_format($dataRows[$key]['tc'], 2, ' ', '.');
			$dataRows[$key]['producto_precio']   = number_format($dataRows[$key]['producto_precio'], 2, ' ', '.');
			$dataRows[$key]['producto_precio_facturar']   = number_format($dataRows[$key]['producto_precio_facturar'], 2, ' ', '.');

		// natural boleta
		// && $dataRows[$key]['pag_tipo_documento']!='2' 
		if( $dataRows[$key]['tipo_cliente']=='1' ){

			$dataRows[$key]['cliente_nombre']    = $dataRows[$key]['nombre'].' '.$dataRows[$key]['apellidos'];
			$dataRows[$key]['cliente_dni']       = $dataRows[$key]['dni'];

			$dataRows[$key]['cliente_empresa']   = $dataRows[$key]['empresa'];
			$dataRows[$key]['cliente_ruc'] = $dataRows[$key]['pag_factura_ruc'];

			if( $dataRows[$key]['pag_tipo_documento']=='2' ){

				$dataRows[$key]['cliente_facturara']       = $dataRows[$key]['pag_factura_razonsocial'];
	
			}

		}
		if( $dataRows[$key]['tipo_cliente']=='2' ){

			$dataRows[$key]['cliente_nombre']    = $dataRows[$key]['contacto_nombre'].' '.$dataRows[$key]['contacto_apellidos'];
			$dataRows[$key]['cliente_dni']       = $dataRows[$key]['contacto_dni'];
			$dataRows[$key]['cliente_empresa']   = $dataRows[$key]['nombre'];
			$dataRows[$key]['cliente_ruc'] = $dataRows[$key]['dni'];
			$dataRows[$key]['cliente_facturara']       = $dataRows[$key]['pag_factura_razonsocial'];

		}

		if( $dataRows[$key]['pag_tipo_documento']=='2' ){

			$dataRows[$key]['cliente_facturara'] = $dataRows[$key]['cliente_empresa'];

		}


		$dataRows[$key]['cliente_direccion']     = $dataRows[$key]['direccion'];
		$dataRows[$key]['cliente_telefono']      = $dataRows[$key]['telefono'];

		$dataRows[$key]['cliente_email']         = $dataRows[$key]['email'];
		$dataRows[$key]['cliente_profesion']     = $dataRows[$key]['profesion'];
		$dataRows[$key]['cliente_fecha_cliente'] = fecha_formato($dataRows[$key]['fecha_cliente'],6);

		$dataRows[$key]['cliente_estado_civil']  = $estados_civiles[$dataRows[$key]['estado_civil']];
		$dataRows[$key]['cliente_conyuge']       = ($dataRows[$key]['estado_civil']=='1')?' ':$dataRows[$key]['conyuge'];




    }
    
    // prin($dataRows); exit();
    
    return [
		'labels' => $labels,
		'rows'   => $dataRows
	];

}


function update_cliente($id_orden_lista,$id_item){

	$ordd=fila([
		"tipo_cliente",
		"nombre",
		"apellidos",
		"dni",
		"genero",
		"email",
		"departamento",
		"provincia",
		"distrito",
		"direccion",
		"telefono",
		"telefono_oficina",
		"cliente_celular",
		"celular_claro",
		"nextel",
		"rpm",
		"rpc",
		"fecha_cliente",
		"profesion",
		"estado_civil",
		"conyuge",
		"pag_tipo_documento",
		"empresa",
		"pag_factura_razonsocial",
		"pag_factura_ruc",
		"contacto_nombre",
		"contacto_apellidos",
		"contacto_dni",
		],
		'ventas_items_ordenes',
		"where id=".$id_orden_lista,
		0
	);
	
	$id_cliente=dato('id_cliente','ventas_items','where id='.$id_item);

	update(
		[
			"tipo_cliente"			  =>$ordd["tipo_cliente"],
			"nombre"				  =>$ordd["nombre"],
			"apellidos"				  =>$ordd["apellidos"],
			"dni"                     =>$ordd["dni"],
			"genero"                  =>$ordd["genero"],
			"email"                   =>$ordd["email"],
			"departamento"            =>$ordd["departamento"],
			"provincia"               =>$ordd["provincia"],
			"distrito"                =>$ordd["distrito"],
			"direccion"               =>$ordd["direccion"],
			"telefono"                =>$ordd["telefono"],
			"telefono_oficina"        =>$ordd["telefono_oficina"],
			"cliente_celular"         =>$ordd["cliente_celular"],
			"celular_claro"           =>$ordd["celular_claro"],
			"nextel"                  =>$ordd["nextel"],
			"rpm"                     =>$ordd["rpm"],
			"rpc"                     =>$ordd["rpc"],
			"fecha_cliente"           =>$ordd["fecha_cliente"],
			"profesion"               =>$ordd["profesion"],
			"estado_civil"            =>$ordd["estado_civil"],
			"conyuge"                 =>$ordd["conyuge"],
			"pag_tipo_documento"      =>$ordd["pag_tipo_documento"],
			"empresa"                 =>$ordd["empresa"],
			"pag_factura_razonsocial" =>$ordd["pag_factura_razonsocial"],
			"pag_factura_ruc"         =>$ordd["pag_factura_ruc"],
			"contacto_nombre"         =>$ordd["contacto_nombre"],
			"contacto_apellidos"      =>$ordd["contacto_apellidos"],
			"contacto_dni"            =>$ordd["contacto_dni"]
		],
		"clientes",
		"where id=".$id_cliente,
		0
	);

}

function fix_url($url){

list($one,$two)=explode('?',$url);
parse_str($two,$output);
return $one."?".http_build_query($output);

}

function update_saldos($id_vio){

$total=dato("producto_precio_facturar","ventas_items_ordenes","where id=".$id_vio);
// prin($total); exit();
$documentos=select("importe,id,orden_status","productos_ventas_documentos","where id_grupo=".$id_vio." order by id asc",0);
$saldo=$total;
foreach($documentos as $documento){
    if($documento['orden_status']=='7'){
        update(['monto'=>"","saldo"=>""],"productos_ventas_documentos","where id=".$documento['id'],0);
    } else {
        $saldo=$saldo - $documento['importe'];
        update(['saldo'=>$saldo],"productos_ventas_documentos","where id=".$documento['id'],0);
    }
}
// exit();

}
