<?php //á

/**
 * 
 descripción de VENTAS 2015 Julio
 * 
 */


function getIdOrCreate($tabla,$where,$more_inserts=array()){

	if(is_array($where)){

		$where_strings=array();
		// $val2='';
		foreach($where as $var=>$val){
			$where_strings[]="$var='$val'";
			// $val2.=$val;
		}
		$where="where ".implode(" and ",$where_strings);

		$more_inserts=array_merge($where,$more_inserts);

	} 

	// if(trim($val2)=='') return ''; 

	$fila=select_fila("id",$tabla,$where);

	if($fila==false){

		$insert=insert($more_inserts,$tabla,0);

		return $insert['id'];

	} else {

		return $fila['id'];

	}

}

function extractcsv($file,$x=1,$y=1,$x2=NULL,$y2=NULL,$blacklist=array()){

	if(!file_exists($file)){ echo "no existe $file <br>"; return; }

	$sbl = (sizeof($blacklist) > 0 );

	//leer archivo
	$buffer=implode('',file($file));
	// prin($buffer);

	//parsear csv
	$array=array();

	$lineas=explode("\n",$buffer);

	$campos=explode(",",$lineas[$y-1]);

	for($iii=0;$iii<$x-1;$iii++) unset($campos[$iii]);


	foreach($lineas as $i => $linea){

		if($i<$y) continue;

		if($y2!=NULL and $i>=$y2) continue;

		if(trim(str_replace(",","",$linea))=='') continue;

		$columnas=str_getcsv($linea);

		$array[$i]['IMPORT']=$linea;

		foreach($columnas[0] as $j => $columna){
			
			if(
				($j+1>=$x)
				and
				!( $sbl and in_array(trim($campos[$j]),$blacklist) )
				){

				$array[$i][trim($campos[$j])]=trim($columna);

			}

		}

	}

	// prin($array);

	return $array;

}

$blacklist=array(
'',
'EXPDIENTES TARJETA Y PLACAS',
'TIPO DE LAMINAS Y/O ACCESORIOS',
'EXP',
'ACTAS ENTREGA',
'CENTRO DE COSTO',
// 'MODELO',
'ENVIO DE DOC AH GR',
);


$files=array(
	array('enero'				,2,7,NULL,127,$blacklist),
	array('febrero'			,2,7,NULL,122,$blacklist),
	array('marzo'				,2,7,NULL,140,$blacklist),
	array('abril'				,2,7,NULL,128,$blacklist),
	array('mayo'				,2,8,NULL,110,$blacklist),
	array('junio'				,2,7,NULL,112,$blacklist),
	array('julio'				,2,7,NULL,34,$blacklist),
	// array('separaciones'		,1,1,NULL,54),
);

foreach($files as $file)
{
	$buf[$file[0]] = extractcsv('ventasjulio/'.$file[0].'.csv',$file[1],$file[2],$file[3],$file[4],$file[5]);
}

// prin($buf);

// exit();

foreach($buf as $buf1){

	foreach($buf1 as $buf2){

		$buf3[]=$buf2;

	}

}

$estados=array(
	'1'=>'disponible',
	'2'=>'separado',
	'3'=>'facturado',
	'4'=>'cancelado',
	'5'=>'entregado',
	'7'=>'exhibicion',
);

foreach($buf3 as $buf4){

	//campos
	foreach($buf4 as $bufi=>$bufi4){
		$bufi2[$bufi]=$bufi;
	}

	if(!hay("productos_items_items","where vin='".$buf4['SERIE']."'")){

		// $bug['nuevo'][]=$buf4;

	} else {

		$id_vim=fila("id_status,id,id_item,id_color","productos_items_items","where vin='".$buf4['SERIE']."'");
		
		$buf4['id_item_item'] =$id_vim['id'];
		$buf4['id_item']      =$id_vim['id_item'];
		$buf4['id_color']     =$id_vim['id_color'];

		if(!hay('productos_ventas','where id_item_item='.$buf4['id_item_item'])){

			$bug[$estados[$id_vim['id_status']]][]=$buf4;

		} else {

			// $bug['yavendido'][]=$buf4;

		}

	}  


}

// prin($bug['nuevo']);

// prin($bufi2);

foreach($bug as $bug2=>$bug3){
	echo $bug2.":".sizeof($bug3).'<br>';
}
// exit();
// prin($bug['entregado']);

foreach($bug as $bug2=>$bug3){

	foreach($bug3 as $devin){


    // [FECHA] => 4/30/15
    // [DOCUMENTO] => B/V 003-5817
    // [CLIENTE] => FRANCISCA POLO VILLANUEVA
    // [TELEFONO FIJO] => 990249589
    // [MODELO] => TERIOS LONG M/T
    // [SERIE] => MHKG2CN20FK001481
    // [IMPORTE] => 21,490.00
    // [TIENDA] => MARINA
    // [VENDEDOR] => W.ISMINIO
    // [ESTADO FINANC] => CONTADO
    // [DESCT] => 		

    	list($uno,$dos)=explode(",",$devin['CLIENTE']);

		$devin['IMPORTE']=trim(str_replace(array('$',','),'',$devin['IMPORTE']));

		$devin['TELEFONO FIJO']=trim(str_replace(array('$'),'',$devin['TELEFONO FIJO']));

		$devin['DESCT']=trim(str_replace(array('$',','),'',$devin['DESCT']));

		list($inicial,$apellido)=explode(".",trim($devin['VENDEDOR']));
		$inicial=strtolower($inicial);
		$apellido1=strtolower($apellido);
		$apellido2=ucfirst($apellido);

		$id_vendedor=getIdOrCreate(
			"usuarios",
			"where ( apellidos like '%".$apellido1."%' or apellidos like '%".$apellido2."%')",
			array('apellidos'=>$apellido2,'nombre'=>$inicia)
			);


		list($mes,$dia,$ano)=explode("/",$devin['FECHA']);
		$mes=str_pad((int) $mes,2,"0",STR_PAD_LEFT);
		$dia=str_pad((int) $dia,2,"0",STR_PAD_LEFT);
		$fechi="20".$ano."-".$mes."-".$dia." 00:00:00";



	   list($uno,$dos)=explode(",",$devin['CLIENTE']);

	   if(trim($dos)==''){ $nombre=$uno; $tipo="2"; $apellidos=""; }else{  $nombre=$dos;   $apellidos=$uno; $tipo="1"; }

		$id_cliente=getIdOrCreate(
			"clientes",
			"where nombre like '%".trim($nombre)."%' and apellidos like '%".trim($apellidos)."%'",
			array('nombre'=>trim($nombre),'apellidos'=>trim($apellidos))
			);

		$id_ubicacion=85;
		$id_status=5;

		// prin($devin);

		

    	$venta_array=array(

        'fecha_creacion'      =>$fechi,
        'numov'               =>'',
        
        'id_ubicacion_salida' =>$id_ubicacion,
        
        'id_item'             =>$devin['id_item'],
        'id_color'            =>$devin['id_color'],
        'id_item_item'        =>$devin['id_item_item'],

        'pvpromocional'       =>$devin['IMPORTE']*1,
        'descuento'           =>($devin['DESCT'])?$devin['DESCT']:0,
        'pvfinal'             =>$devin['IMPORTE']*1,
        'id_cliente'          =>$id_cliente,
        'id_vendedor'         =>$id_vendedor,
        'import'              =>$devin['IMPORT'],

      );

    	// prin($venta_array);
    	
    	if(1){

		   $inventa=insert($venta_array,"productos_ventas",0);

		   insert(array(
					'fecha_creacion' =>$fechi,
					'id_grupo'       =>$inventa['id'],
					'operacion'      =>'2',
					'factnum'        =>$devin['DOCUMENTO'],
					'monto'          =>$devin['IMPORTE']*1,
					'recibido'       =>$devin['IMPORTE']*1,
					'saldo'          =>0,
		   	),
		   	"productos_ventas_documentos",0);


		   update(
		   	array(
					'id_status'         =>$id_status,
					'id_ubicacion'      =>$id_ubicacion,
					'asignado'          =>0,
					'venta_precio'      =>$devin['IMPORTE']*1,
					'venta_fecha'       =>$fechi,
					'venta_id_vendedor' =>$id_vendedor,
					'venta_id_cliente'  =>$id_cliente,
		   	),
		   	'productos_items_items',
		   	"where id=".$devin['id_item_item'],1);

		}	   

	}

}


exit();

$respo=array();

foreach($buf as $file => $buff){

	foreach($buff as $bu){

		prin($bu); continue;

		if($bu['Chasis']=='') continue;

		if(!hay("productos_items_items","where vin='".$bu['Chasis']."'")){

			// $bu['file']=$file;
			$respo[$file][]=$bu;
			

			// prin($bu);

			if(hay("productos_items","where nombre like '%".$bu['Modelo']."%'")){

				$id_item=dato("id","productos_items","where nombre like '%".$bu['Modelo']."%'");

			} else {

				$ii=insert(array("nombre"=>$bu['Modelo']),"productos_items",1);

				$id_item=$ii['id'];

			}


			if(hay("productos_colores","where nombre like '%".$bu['Color']."%'")){

				$id_color=dato("id","productos_colores","where nombre like '%".$bu['Color']."%'",0);

			} else {

				$ii=insert(array("nombre"=>$bu['Color']),"productos_colores",1);

				$id_color=$ii['id'];

			}


			insert(array(

				// 'pedido'       =>$bu['pedido'],
				
				// 'nave'         =>$bu['LUGAR'],
				
				// 'fecha_arribo' =>$arribo,
				
				'numpoliza'    =>$bu['Modelo'],
				
				// 'nummotor'     =>$bu['MOTOR'],
				
				'id_ubicacion' =>'3',
				
				'asignado'     =>'0',
				
				'id_status'    =>'1',

				'id_item'      =>$id_item,
				
				'id_color'     =>$id_color,

				'yearmod'      =>$bu['Fab'],
				
				'yearfab'      =>$bu['Fab'],
				
				'vin'          =>$bu['Chasis'],
				
				// 'import'       =>$bu['IMPORT'],

			),"productos_items_items",0);

			$insertados++;

		}

	}

}


// prin($respo);


// exit();

foreach($respo as $file => $rrr){

	echo "<br>".$file.":<br>";
	foreach($rrr as $rr){
		echo $rr['Chasis']."<br>";
	}

}

echo "<br>
INSERTADOS : $insertados";

exit();

