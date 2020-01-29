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

				$context="and ventas_items.id_item='".$_GET['id_item']."'";
			
			}				

			if($_GET['id_usuario']!=''){

				$context.=" and ventas_items.id_usuario='".$_GET['id_usuario']."'";
			
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





$ventas=select(
	[
	'ventas_items.id as id',
	'ventas_items.id_usuario as id_usuario',
	'ventas_items.id_cliente as id_cliente',
	'concat(" ",clientes.nombre,clientes.apellidos) as cliente'
	],
	'ventas_items',
	"
	left join clientes on ventas_items.id_cliente=clientes.id
	where ventas_items.visibilidad!=0 
	$context
	and date(ventas_items.fecha_creacion) between '".$from."' and '".$to."'
	and ventas_items.id_status=10
	order by ventas_items.id_usuario desc
	limit 0,200",
	0
	);


$ventas_total['seguimientos']=0;

foreach($ventas as $ii=>$venta){

	$ventas[$ii]['usuario']=($USU[$venta['id_usuario']])?$USU[$venta['id_usuario']]:$venta['id_usuario'];
 	$ventas[$ii]['seguimientos']=contar("ventas_mensajes","where alerta is null and id_grupo=".$venta['id']);
	$ventas_total['seguimientos']+=$ventas[$ii]['seguimientos'];

	$ventas_usuario[$venta['id_usuario']]['ventas']++;
	$ventas_usuario[$venta['id_usuario']]['seguimientos']+=$ventas[$ii]['seguimientos'];

}

$ventas_total['atenciones']=0;
foreach($ventas_usuario as $ii=>$vu){

	$ventas_usuario[$ii]['usuario']=($USU[$ii])?$USU[$ii]:$ii;
	$ventas_usuario[$ii]['seguimientos-ventas']=$vu['seguimientos']/$vu['ventas'];
	$ventas_usuario[$ii]['atenciones']=contar("ventas_items","
				where ventas_items.visibilidad!=0 
				and ventas_items.id_usuario=".$ii." 
	$context
	and date(ventas_items.fecha_creacion) between '".$from."' and '".$to."'");

	$ventas_total['atenciones']+=$ventas_usuario[$ii]['atenciones'];
}

$ventas_total['ventas']=sizeof($ventas);


// prin($ventas_usuario);

// prin($ventas);

	$l=-1;
	unset($row);

	// primera tabla
	$l++;//title
	$row[$l][]=['Ventas',
					 'class=nombre colspan=2',
					 'class=success'];
	$row[$l][]=[
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=vendedores&format=excel">Exportar Excel</a>',
		'colspan=2'];





	$l++;//header
	$row[$l][]=['#Atención','class=nombre','class=info'];
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	$row[$l][]=['Vendedores','class=nombre' ];
	$row[$l][]=['Clientes','class=nombre' ];
	$row[$l][]=['Seguimientos'];



	//body
	foreach($ventas as $ii=>$venta){

		$l++;
		$row[$l][]=[$venta['id'],'class=nombre'];
		$row[$l][]=[$venta['usuario'],'class=nombre'];
		$row[$l][]=[$venta['cliente'],'class=nombre'];
		$row[$l][]=[$venta['seguimientos']];

	}

	$l++;//footer
	$row[$l][]=['','class=nombre','class=warning'];
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$ventas_total['seguimientos'];


	$seccion['uno']=$row;


	// if($_GET['format']!='excel'){
		$l=-1;
		unset($row);
	// }


	//segunda tabla
	$l++;//title
	$row[$l][]=['Seguimientos en Ventas',
					 'class=nombre colspan=2',
					 'class=success'];
	$row[$l][]=['',
		'colspan=3'];



	$l++;//header
	$row[$l][]=['Vendedores','class=nombre','class=info'];
	// $row[$l][]=array('Activado desde','','class="head muted success"');
	$row[$l][]=['Atenciones'];
	$row[$l][]=['Ventas'];
	$row[$l][]=['Seguimientos'];
	$row[$l][]=['Seguimiento/Ventas'];



	//body
	foreach($ventas_usuario as $ii=>$venta){

		$l++;
		$row[$l][]=[$venta['usuario'],'class=nombre'];

		$row[$l][]=[$venta['atenciones']];
		$row[$l][]=[$venta['ventas']];
		$row[$l][]=[$venta['seguimientos']];
		$row[$l][]=[$venta['seguimientos-ventas']];


	}

	$l++;//footer
	$row[$l][]=['','class=nombre','class=warning'];
	$row[$l][]=$ventas_total['atenciones'];
	$row[$l][]=$ventas_total['ventas'];
	$row[$l][]=$ventas_total['seguimientos'];
	$row[$l][]=format_excel($ventas_total['seguimientos']/$ventas_total['ventas']);

// prin($row);


	$seccion['dos']=$row;
























	//end





	//switch format
	if($_GET['format']=='excel'){

		// prin($row);
		echo render_excel($seccion);

	} else {
		echo '<style>
		.nav li label { width 200px; }
		</style>';
		foreach($seccion as $sec){
			echo render_table($sec);
		}
		
	}




