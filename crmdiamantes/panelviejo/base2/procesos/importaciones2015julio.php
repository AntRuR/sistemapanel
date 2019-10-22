<?php //á

/**
 * 
 descripción de migración 2015 Julio
 * 
 */


function getIdOrCreate($tabla,$where,$more_inserts=array()){

	$where_strings=array();
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

function extractcsv($file){

	//leer archivo
	$buffer=implode('',file($file));

	//parsear csv
	$array=array();

	$lineas=explode("\n",$buffer);

	$campos=explode(",",$lineas[0]);


	foreach($lineas as $i => $linea){

		if($i==0) continue;

		$columnas=str_getcsv($linea);

		foreach($columnas[0] as $j => $columna){

			$array[$i][trim($campos[$j])]=trim($columna);

		}

	}

	// prin($array);

	return $array;

}

$files=array(
'Citizen',
'CommuterIS',
'CommuterYC',
'Terios',
'Exhibicion',
// 'Separaciones',
'TD1Disponibles',
);

foreach($files as $file){
$buf[$file] = extractcsv('importacionesjulio/'.$file.'.csv');
}

// prin($buf);

$respo=array();

foreach($buf as $file => $buff){

	foreach($buff as $bu){

		// prin($bu); continue;

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

