<?php //á

$csvv=file("importaciones2015.csv");

$csv=implode("",$csvv);


$lineas=explode("\n",$csv);

// prin($lineas);

// exit();

$total=$insertados=$actualizados=0;


$alias=array(
	'# ORD.'      =>'ORDEN',
	'CDO. MODELO' =>'CODMODELO',
	'Lugar'       =>'LUGAR'
	);


foreach($lineas as $key=>$linea)
{

	if($key===0){ 
		$header=explode(",",$linea); 
		foreach($header as $kh=>$hea){
			// $header[$kh]=$alia;
			foreach($alias as $ak=>$alia){
				if($hea==$ak) $header[$kh]=$alia;
			}
		}
	}
	if($key>=259 and  $key<=500)
	// if($key>=1 and  $key<=1)
	{

		$ddd=explode(",",$linea);

		foreach($header as $dk=>$dd){
			if(trim($dd)!='')
			$buf[$key][trim($header[$dk])]=trim($ddd[$dk]);
		}

		$buf[$key]['IMPORT']=$linea;

	}


}


// prin($buf); exit();


foreach($buf as $linea)
{

	if(hay("productos_items","where nombre like '%".$linea['MODELO']."%'")){

		$id_item=dato("id","productos_items","where nombre like '%".$linea['MODELO']."%'");

	} else {

		$ii=insert(array("nombre"=>$linea['MODELO']),"productos_items",1);

		$id_item=$ii['id'];

	}


	if(hay("productos_colores","where nombre like '%".$linea['COLOR']."%'")){

		$id_color=dato("id","productos_colores","where nombre like '%".$linea['COLOR']."%'",0);

	} else {

		$ii=insert(array("nombre"=>$linea['COLOR']),"productos_colores",1);

		$id_color=$ii['id'];

	}



	$arribo=str_replace(".","-",$linea['FC']);

	$arribo=trim(str_replace(":","",$arribo));

	$arribo="20".substr($arribo,6,2)."-".substr($arribo,3,2)."-".substr($arribo,0,2)." 00:00:00";

	if($linea['CHASIS']=='') continue;

	$total++;
	
	if(hay("productos_items_items","where vin ='".$linea['CHASIS']."'")) 
	{ 
		echo '<br>ya existe vin '.$linea['CHASIS']; 
		update(array('import'=>$linea['IMPORT']),"where vin='".$linea['CHASIS']."'");
		$actualizados++;
		continue; 
	}


	insert(array(

		// 'pedido'       =>$lineas['pedido'],
		
		'nave'         =>$lineas['LUGAR'],
		
		'fecha_arribo' =>$arribo,
		
		
		
		'numpoliza'    =>$linea['MODELO'], //
		
		'nummotor'     =>$linea['MOTOR'],
		
		'id_ubicacion' =>'3',
		
		'asignado'     =>'0',
		
		'id_status'    =>'1',
		
		'yearmod'      =>$linea['MOD'],
		
		'yearfab'      =>$linea['FAB'],
		
		'vin'          =>$linea['CHASIS'],
		
		'id_item'      =>$id_item,
		
		'id_color'     =>$id_color,
		'import'       =>$linea['IMPORT'],

	),"productos_items_items",1);

	$insertados++;

}

echo "<br>
TOTAL: $total<br>
ACTUALIZADOS : $actualizados<br>
INSERTADOS : $insertados";

exit();

