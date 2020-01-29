<?php //á

$csvv=file("importaciones2014.csv");

$csv=implode("",$csvv);


$lineas=explode("\n",$csv);

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
	if($key>=1 and  $key<=259)
	// if($key>=1 and  $key<=1)
	{

		$ddd=explode(",",$linea);

		foreach($header as $dk=>$dd){
			if(trim($dd)!='')
			$buf[$key][$header[$dk]]=trim($ddd[$dk]);
		}

		$buf[$key]['IMPORT']=$linea;

	}


}


// prin($buf); exit();


foreach($buf as $linea)
{

	if($linea['CHASIS']=='') continue;

	if(hay("productos_items_items","where vin ='".$linea['CHASIS']."'")) 
	{ 
		echo '<br>ya existe vin '.$linea['CHASIS']; 
		// update(array('ficha_sunarp'=>$linea['IMPORT']),"productos_items_items","where vin='".$linea['CHASIS']."'");
		// $actualizados++;
		continue; 
	}


}



exit();

