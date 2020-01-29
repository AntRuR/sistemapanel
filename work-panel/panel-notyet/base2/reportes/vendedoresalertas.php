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




			// $_GET['ob']='VENTAS_ITEMS';


			$context=$contextUsuario='';

			if($_GET['id_item']!=''){

				$context.=" and ventas_items.id_item='".$_GET['id_item']."'";
			
			}

			if($_GET['id_usuario']!=''){

				$context.=" and ventas_items.id_usuario='".$_GET['id_usuario']."'";
				$contextUsuario.=" and id='".$_GET['id_usuario']."'";
			
			}


			list($from,$to)=explode("|",$_GET['fecha_creacion']);


			// $OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

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









if($date!=''){

	$where="where ventas_items.visibilidad!=0 and date(ventas_items.fecha_creacion) between '$from' and '$to'";

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

$aaa=select(
	"id,nombre,apellidos",
	"usuarios2",
	"where 1 ",
	0);

foreach($aaa as $aaa2){

	$JEFES[$aaa2['id']]=$aaa2['nombre']." ".$aaa2['apellidos'];

}

// prin($JEFES);


$USU['']='no asignado';

$usuarios=select(
	"fecha_creacion,id,nombre,apellidos,id_jefe",
	"usuarios",
	"where id_jefe is not null $contextUsuario",
	0);

foreach($usuarios as $usu){
	$USU[$usu['id_jefe']][$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	// $USU_FECHA[$usu['id']]=fecha_formato($usu['fecha_creacion'],'6');
	// $ID_USU2[$usu['id']]=$usu['id_jefe'];
}

// prin($tipo);
// prin($intervalos);

// $statusids="2,3,6,7,8,9,10";
$statusids="3,4,5,8,9,13,17";

// $statusids="3,6,7,8,10";

$statuses=select("id,nombre","ventas_status","
	where id in (".$statusids.")
	order by calificacion asc",
	0);
// $STATU[0]='no asignado';
$statuQueries[0]="and ventas_items.id_status=0";


foreach($statuses as $usu){

	$STATU[$usu['id']]=$usu['nombre'];
	$statuQueries[$usu['id']]="and ventas_items.id_status=".$usu['id'];

}

// prin($STATU);

$statuQueries['total']="and ventas_items.id_status in (".$statusids.")";


// ATENCIONES

foreach($statuQueries as $statu=>$query){

	$aaa=select(
				[
				"ventas_items.id_usuario as id_usuario",
				"count(*) as total",
				],
				"ventas_items",
				"where 
				visibilidad!=0 
				and date(ventas_items.fecha_creacion) between '".$from."' and '".$to."'
				".$query."
				$context
				group by ventas_items.id_usuario 
				order by ventas_items.id_usuario desc
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
		3=>'atrasados'
	];
/*
	$ALERS=[
		1=>'and ventas_mensajes.cumplido=1',
		2=>'and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
and ventas_mensajes.alerta_fecha > now()',
		3=>'and (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null)
and ventas_mensajes.alerta_fecha <= now()',
		'total'=>'',

	];
*/
	$ALERS=[
		1=>'and (ventas_mensajes.estado=4 ) ',
		2=>'and (ventas_mensajes.estado=1 ) ',
		3=>'and (ventas_mensajes.estado=3 ) ',
		'total'=>'',

	];

	// prin($ALERS);


	//ACTIVIDADES
	$aaab=select(
				[
				"ventas_items.id_usuario as id_usuario",
				"count(*) as total",
				],
				"ventas_mensajes",
				"left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo
				 where 
				 date(ventas_items.fecha_creacion) between '".$from."' and '".$to."'
				 $context
				 and ventas_mensajes.alerta is null
				
				 group by ventas_mensajes.id_usuario 
				 order by ventas_mensajes.id_usuario desc
				"
				,0);

		foreach($aaab as $aaa2){

			$aaa3[$aaa2['id_usuario']]=$aaa2['total'];

		}

		$actividades['total']=$aaa3;

		unset($aaa3);


	// prin($actividades);

	// prin($aaa2);



	foreach($ALERS as $name=>$query){

		$aaa=select(
					[
					"ventas_items.id_usuario as id_usuario",
					"count(*) as total",
					],
					"ventas_mensajes",
					"left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo
					where 
					 date(ventas_items.fecha_creacion) between '".$from."' and '".$to."'
					$context
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

foreach($USU as $jefeId => $USU2){

	if(in_array($jefeId,[9])) continue;

	foreach($USU2 as $usuId => $usuName){

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


		$block['total actividades']=$actividades['total'][$usuId];


		$blocks[]=$block;

	}

	//ORDENAR

	foreach($blocks as $ii=>$blo){
		$ordenblocks[$ii]=$blo['total atenciones'];
	}

	arsort($ordenblocks);
	foreach($ordenblocks as $id=>$num){
		$blocks9[]=$blocks[$id];
	}
	$blocks=$blocks9;

	$blocks2[$jefeId]=$blocks;

	unset($blocks9);

	unset($blocks);

}
// prin($blocks);
// prin($lineaz);
// prin($linev);
// prin($line);



$contotal=1;



// prin($blocks);
// exit();


foreach($blocks2 as $id_jefe=>$blocks){

unset($sumablock);
//TOTALES
foreach($blocks as $block){

	foreach($STATU as $ii=>$la){
		$sumablock[$la]+=$block[$la];
	}

	if($contotal){
		$sumablock['total atenciones']+=$block['total atenciones'];
	}

	foreach($ALERS0 as $ii=>$la){
		$sumablock[$la]+=$block[$la];
	}

	if($contotal){
		$sumablock['total alertas']+=$block['total alertas'];
	}

	$sumablock['total actividades']+=$block['total actividades'];

}


// prin($blocks);

// exit();



//RENDER
if(sizeof($blocks)>0){


	unset($row);
	$l=0;//title
	$row[$l][]=array('<b>jefe</b> '.$JEFES[$id_jefe],
					 'class=nombre colspan='.( sizeof($STATU)+sizeof($ALERS0) + ( ($contotal)?4:0) ),
					 'class=success');
	$row[$l][]=array(
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion='.$id_jefe.'&format=excel">Exportar Excel</a>',
		'colspan=3');






	$l++;//header
	$row[$l][]=array('','class=nombre','class=info');
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	$row[$l][]=['<b>ATENCIONES</b>','class=nombre colspan='. ( sizeof($STATU)+(($contotal)?2:0) ) ];

	$row[$l][]=['<b>ALERTAS</b>','class=nombre colspan='. ( sizeof($ALERS0)+(($contotal)?2:0) ) ];

	$row[$l][]=['<b>ACTIVIDADES</b>','class=nombre colspan=2'];





	$l++;//header
	$row[$l][]=array('Vendedores','class=nombre','class="info"');
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	foreach($STATU as $ii=>$la){

		$row[$l][]=[strtoupper($la)];

	}

	if($contotal){

		$row[$l][]=array('<b>Total</b>');
		$row[$l][]=array('<b>%</b>');

	}

	foreach($ALERS0 as $ii=>$la){

		$row[$l][]=[strtoupper($la)];
	
	}

	if($contotal){

		$row[$l][]=array('<b>Total</b>');
		$row[$l][]=array('<b>%</b>');
	
	}

	$row[$l][]=array('<b>total</b>');
	$row[$l][]=array('%');





	// blocks
	foreach($blocks as $block){

		if(trim($block['usuario'])=='') continue;

		$l++;
		$row[$l][]=array($block['usuario'],'class=nombre');

		foreach($STATU as $ii=>$la){

			$row[$l][]=$block[$la];
		}

		if($contotal){

			$row[$l][]=$block['total atenciones'];
			$row[$l][]=format_excel(100*$block['total atenciones']/$sumablock['total atenciones']).'%';

		}

		foreach($ALERS0 as $ii=>$la){

			$row[$l][]=$block[$la];
		
		}

		if($contotal){
			$row[$l][]=$block['total alertas'];
			$row[$l][]=format_excel(100*$block['total alertas']/$sumablock['total alertas']).'%';
		}

		$row[$l][]=$block['total actividades'];
		$row[$l][]=format_excel(100*$block['total actividades']/$sumablock['total actividades']).'%';


	}



	//footer
	$l++;

	$row[$l][]=array('<b>TOTAL</b>','class=nombre','class=warning');

	foreach($STATU as $ii=>$la){
		$row[$l][]=$sumablock[$la];
	}

	if($contotal){
		$row[$l][]=$sumablock['total atenciones'];
		$row[$l][]='100%';
	}

	foreach($ALERS0 as $ii=>$la){
		$row[$l][]=$sumablock[$la];
	}

	if($contotal){
		$row[$l][]=$sumablock['total alertas'];
		$row[$l][]='100%';
	
		$row[$l][]=$sumablock['total actividades'];
		$row[$l][]='100%';

	}

	// prin($row);
	$seccion[$id_jefe]=$row;


}





}

	// prin($_GET);

	// prin($seccion[$_GET['seccion']]);
	// prin($seccion);

	//end
	// $seccion['vendedores']=$row;





	//switch format
	if($_GET['format']=='excel'){

		// prin($row);
		echo render_excel(array($seccion[$_GET['seccion']]));

	} else {
		// echo '<style>.vendedores b { float:left; color:red; }</style>';
		foreach($seccion as $roww){
			echo render_table($roww);
		}
		
	}
