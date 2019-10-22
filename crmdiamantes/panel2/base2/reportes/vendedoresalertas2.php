<?php
// prin($_GET);
// prin($SERVER);
// prin($_SERVER);
// exit();

$nobadge=($_GET['format']=='excel');


function badge($txt){
	global $_GET;
	global $nobadge;
	if($_GET['format']=='excel' or $nobadge) return '';
	return '<span class="badge badge-important">'.$txt.'</span>';
}


function format_excel($num)
{
	// $num= 100 * round( 1*$num / 100 ) ;
	$num=(is_null($num))?0:$num;
	$num=($num==0)?'0.00':number_format($num,2,'.',',');
	return $num;
}



//GENERAL
$seccion=array();




// prin($projects);

// parse_str($SERVER['PARAMS'], $output);
// unset($output['id_item']);

// prin($output);

//PRE TABLA


//prin($OBJ);
$first=dato('min(fecha_creacion)','ventas_items',"where fecha_creacion!=0",0);
$first=(!$first)?date("Y-m-d"):$first;
$first=substr($first,0,10);
//$last =dato($querie['campo'],$tbl,"where 1 order by ".$querie['campo']." desc limit 0,1");
$last=dato('max(fecha_creacion)','ventas_items',"where fecha_creacion!=0",0);
$last=(!$last)?date("Y-m-d"):$last;
$last=substr($last,0,10);	
//






	// if($_GET['format']!='excel'){


		// if($_GET['id_item']!=''){
		
			// $first='2013-07-08 14:00:00';
			// $last='2015-03-09 17:01:45';

			$FromYear=substr($first,0,4);
			$ToYear=substr($last,0,4);			
			// $FromYear='2013';
			// $ToYear='2015';

			$FromMonth=substr($first,5,2);			
			// $FromMonth='07';




			$_GET['ob']='VENTAS_ITEMS';

			$date='fecha_creacion';

			$context_ventas_items=$context='';

			if($_GET['id_item']!=''){

				$context="and id_item='".$_GET['id_item']."'";
				$context_ventas_items="and ventas_items.id_item='".$_GET['id_item']."'";
			
			}				

			list($from,$to)=explode("|",$_GET['fecha_creacion']);


			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

			//parse_str($_GET['filtro'], $get);



			//prin("$first - $last");

			$from=($from)?$from:$first;
			$to=($to)?$to:$last;

			$from=fixyfecha($from);
			$to=fixyfecha($to);





		// }	


	// }



// if(!$nobadge){
// }



// prin("$from - $to");






$ordby='ventas_items.id_usuario';




if($date!=''){
	$where="where ventas_items.visibilidad!=0 and date(ventas_items.$date) between '$from' and '$to'";
} else {
	$where="where ventas_items.visibilidad!=0 ";
}

$bisi = (substr($to,0,4)%4==0)?1:0;

// prin("from $from to $to");

$rango=Difer2($from,$to);

$division = intval($rango/7);

$resto = $rango%7;

if($resto>0){

	$firstday=date("w",mktime(0,0,0,substr($from,0,4),substr($from,5,2),substr($from,8,2)));
	$firstday=($firstday==0)?7:$firstday;
	if($firstday + $resto >= 8) $division=$division+1;

}
$rango = $rango - $division;

// echo "$rango<br>";


$fromY=substr($from,0,4);
$toY=substr($to,0,4);

$fromM=substr($from,5,2);
$toM=substr($to,5,2);



$VV=array();
$data = array();

/*
$usuarios2=select("id,nombre,apellidos","usuarios2","where 1");
foreach($usuarios2 as $usu){
	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
}
*/

$USU['']='no asignado';

$usuarios=select("fecha_creacion,id,nombre,apellidos,id_jefe","usuarios","where status=1 order by id_jefe asc");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	// $USU_FECHA[$usu['id']]=fecha_formato($usu['fecha_creacion'],'6');
	// $ID_USU2[$usu['id']]=$usu['id_jefe'];
}

// prin($tipo);
// prin($intervalos);

// $statusids="2,3,6,7,8,9,10";
$statusids="3,6,7,8,10";

$statuses=select("id,nombre","ventas_status","
	where id in (".$statusids.")
	order by calificacion asc",
	0);
// $STATU[0]='no asignado';
$statuQueries[0]="and id_status=0";


foreach($statuses as $usu){

	$STATU[$usu['id']]=$usu['nombre'];
	$statuQueries[$usu['id']]="and id_status=".$usu['id'];

}

$statuQueries['total']="and id_status in (".$statusids.")";


// ATENCIONES

foreach($statuQueries as $statu=>$query){

	$aaa=select(
				[
				"id_usuario",
				"count(*) as total",
				],
				"ventas_items",
				"where 
				visibilidad!=0 
				and date($date) between '".$from."' and '".$to."'
				".$query."
				$context
				group by id_usuario 
				order by id_usuario desc
				",
				0);

	foreach($aaa as $aaa2){

		$aaa3[$aaa2['id_usuario']]=$aaa2['total'];

	}

	$atenciones[$statu]=$aaa3;

	unset($aaa3);

}



	// prin($atenciones);


	// ALERTAS
	
	$ALERS0=[
		1=>'cumplidos',
		2=>'pendientes',
		3=>'atrazados'
	];

	$ALERS=[
		1=>'and ventas_mensajes.cumplido=1',
		2=>'and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
and ventas_mensajes.alerta_fecha > now()',
		3=>'and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
and ventas_mensajes.alerta_fecha <= now()',
		'total'=>'',
	];
	// prin($ALERS);

	foreach($ALERS as $name=>$query){

		$aaa=select(
					[
					"ventas_items.id_usuario as id_usuario",
					"count(*) as total",
					],
					"ventas_mensajes",
					"left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo
					where 
					 date(ventas_items.$date) between '".$from."' and '".$to."'
					$context_ventas_items
					and ventas_mensajes.alerta is not null
					and ventas_mensajes.alerta_fecha is not null
					".$query."
					
					group by ventas_mensajes.id_usuario 
					order by ventas_mensajes.id_usuario desc
					",
					0);


		foreach($aaa as $aaa2){

			$aaa3[$aaa2['id_usuario']]=$aaa2['total'];

		}

		$alertas[$name]=$aaa3;

		unset($aaa3);

	}


// prin($STATU);
// prin($USU);
// prin($atenciones);
// prin($atencionesTotal);
// prin($alertas);

foreach($USU as $usuId => $usuName){

	unset($block);

	$block['usuario']=$usuName;
	
	foreach($STATU as $staId=>$staName){

		// $block[$staName]=($atenciones[$staId][$usuId])?$atenciones[$staId][$usuId]:0;
		$block[$staName]=$atenciones[$staId][$usuId];

	}

	// $block['total atenciones']=($atenciones['total'][$usuId])?$atenciones['total'][$usuId]:0;
	$block['total atenciones']=$atenciones['total'][$usuId];

	foreach($ALERS0 as $staId=>$staName){

		// $block[$staName]=($alertas[$staId][$usuId])?$alertas[$staId][$usuId]:0;
		$block[$staName]=$alertas[$staId][$usuId];

	}

	// $block['total alertas']=($alertas['total'][$usuId])?$alertas['total'][$usuId]:0;
	$block['total alertas']=$alertas['total'][$usuId];


	$blocks[]=$block;

}

// prin($blocks);

// prin($lineaz);

// exit();

// prin($linev);

// exit();
// prin($line);




$contotal=1;


// prin($blocks);

// exit();
if(sizeof($blocks)>0){


	unset($row);
	$l=0;//title
	$row[$l][]=array('Atenciones y Alertas por vendedor',
					 'class=nombre colspan='.( sizeof($STATU)+sizeof($ALERS0) + ( ($contotal)?2:0) ),
					 'class=success');
	$row[$l][]=array(
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=vendedores&format=excel">Exportar Excel</a>',
		'colspan=2');






	$l++;//header
	$row[$l][]=array('','class=nombre','class=info');
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	$row[$l][]=['<b>ATENCIONES</b>','class=nombre colspan='. ( sizeof($STATU)+(($contotal)?2:0) ) ];

	$row[$l][]=['<b>ALERTAS</b>','class=nombre colspan='. ( sizeof($ALERS0)+(($contotal)?2:0) ) ];






	$l++;//header
	$row[$l][]=array('','class=nombre','class="info"');
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	foreach($STATU as $ii=>$la)
		$row[$l][]=[strtoupper($la)];

	if($contotal)
		$row[$l][]=array('<b>Total</b>');

	foreach($ALERS0 as $ii=>$la)
		$row[$l][]=[strtoupper($la)];

	if($contotal)
		$row[$l][]=array('<b>Total</b>');

	// prin($blocks);

	foreach($blocks as $block){

		$l++;
		$row[$l][]=array($block['usuario'],'class=nombre');

		foreach($STATU as $ii=>$la){
			$row[$l][]=$block[$la];
			$sumablock[$la]+=$block[$la];
		}

		if($contotal)
			$row[$l][]=$block['total atenciones'];
			$sumablock['total atenciones']+=$block['total atenciones'];

		foreach($ALERS0 as $ii=>$la){
			$row[$l][]=$block[$la];
			$sumablock[$la]+=$block[$la];
		}

		if($contotal)
			$row[$l][]=$block['total alertas'];
			$sumablock['total alertas']+=$block['total alertas'];

	}

	// prin($sumablock);

	$l++;//footer

	$row[$l][]=array('<b>TOTAL</b>','class=nombre','class=warning');

	foreach($STATU as $ii=>$la)
		$row[$l][]=$sumablock[$la];

	if($contotal)
		$row[$l][]=$sumablock['total atenciones'];

	foreach($ALERS0 as $ii=>$la)
		$row[$l][]=$sumablock[$la];

	if($contotal)
		$row[$l][]=$sumablock['total alertas'];







	//end
	$seccion['vendedores']=$row;





	//switch format
	if($_GET['format']=='excel'){

		// prin($row);
		echo render_excel(array($row));

	} else {
		// echo '<style>.vendedores b { float:left; color:red; }</style>';
		echo render_table($row,'vendedores');
		
	}



}
