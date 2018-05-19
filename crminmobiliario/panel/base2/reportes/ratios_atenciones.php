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

parse_str($SERVER['PARAMS'], $output);


// unset($output['id_item']);


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

list($from,$to)=explode("|",$_GET['fecha_creacion']);


//parse_str($_GET['filtro'], $get);




//prin("$first - $last");

$from=($from)?$from:$first;
$to=($to)?$to:$last;

$from=fixyfecha($from);
$to=fixyfecha($to);


$date='fecha_creacion';


	if($_GET['format']!='excel'){


		// $projects=select(
		// 	"
		// 	productos_items.id as id,
		// 	productos_items.nombre as nombre",
		// 	"productos_items",
		// 	"
		// 	join  productos_items_items on productos_items_items.id_item=productos_items.id
		// 	join  productos_ventas on productos_ventas.id_item_item=productos_items_items.id
		// 	",
		// 	0);


			//FECHAS
			// $first='2013-07-08 14:00:00';
			// $last='2015-03-09 17:01:45';

			$FromYear=substr($first,0,4);
			$ToYear=substr($last,0,4);			
			// $FromYear='2013';
			// $ToYear='2015';

			$FromMonth=substr($first,5,2);			
			// $FromMonth='07';

			$fechas[]=array(
							'label'=>'Fecha',
							'value'=>$first."|".$last
							);

			$fechas[]=array(
							'label'=>'Hoy',
							'value'=>date("Y-m-d")."|".date("Y-m-d")
							);

			$fechas[]=array(
							'label'=>'Ayer',
							'value'=>date("Y-m-d",strtotime("-1 days"))."|".date("Y-m-d",strtotime("-1 days"))
							);

			$fechas[]=array(
							'label'=>'Este domingo',
							'value'=>date("Y-m-d",strtotime("-".(date("N")-1)." days"))."|".date("Y-m-d",strtotime("+".( 7 - date("N"))." days"))
							);

			$fechas[]=array(
							'label'=>'Esta semana',
							'value'=>date("Y-m-d",strtotime("-".(date("N")-1)." days"))."|".date("Y-m-d",strtotime("+".( 7 - date("N"))." days"))
							);

		//	prin($FromYear.$FromMonth);
			$yy=date("Y");$mm=date("m");
			for($i=0;$i<12+date("m");$i++){
			if($mm==0){ $yy=$yy-1; $mm=12; }
			if(1*($yy.sprintf("%02d",$mm))>=1*($FromYear.$FromMonth)){
			$ym[]="$yy-".sprintf("%02d",$mm);
			}
			$mm=$mm-1;
			}

			foreach($ym as $my=>$mmy){
			list($mmy1,$mmy2)=explode("-",$mmy);
			//$tt=date("t",date($mmy."-01"));

			$lm=array('1'=>'31','28','31','30','31','30','31','31','30','31','30','31');
			if($mmy1%4==0){ $lm['2']=29; }

			$quer2=date($mmy."-01")."|".date($mmy."-".$lm[$mmy2*1]);

			list($yeamy,$monmy)=explode("-",$mmy);
			$mos=$Array_Meses[$monmy*1]; $nmons=strlen($mos);
			$mmyy=ucfirst($mos).str_repeat("&nbsp;",9-$nmons);
			$mmyy.=" ".$yeamy;

			if($yeamy!=$lastyeamy){
				$LY[]=$yeamy;
				$lastyeamy=$yeamy;
				$fechas[]=array(
								'label'=>$yeamy.(($yeamy==date("Y"))?" Este Año":""),
								'value'=>date($yeamy."-01-01")."|".date($yeamy."-12-31"),
								'class'=>'navy bold'
								);

			}

			$fechas[]=array(
							'label'=>$mmyy.(($mmy==date("Y-m"))?" Este Mes":""),
							'value'=>$quer2,
							'class'=>'navy'
							);

			}

			for($ii=$ToYear;$ii>=$FromYear;$ii--){

				if(!in_array($ii,$LY)){

					$fechas[]=array(
									'label'=>$ii.(($ii==date("Y"))?" Este Año":""),
									'value'=>date($ii."-01-01")."|".date($ii."-12-31"),
									'class'=>'red'
									);

				}

			}

			$outputUrl=exclude_from_array($output,['fecha_creacion']);
			echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
				foreach($fechas as $lin2id=>$fecha){

					echo '<option '. ( ($_GET['fecha_creacion']==$fecha['value'])?'selected':'' ) .' 
					value="'.$SERVER['ARCHIVO_REAL'].'?'.$outputUrl.'&id_item='.$lin2['id'].'&fecha_creacion='.$fecha['value'].
					'"
					>'.
					$fecha['label'].
					'</option>';
				}
			echo '</select>';
			
			// prin($output);
			echo '<span style="font-weight:bold;display:inline-block;margin:0 6px;">Desde</span>'
					.render_input_fecha(
					'fecha_creacion_from',array(
						'rango'=>'',
						'callback'=>'var fecha=$v("fecha_creacion_from_a")+"-"+$v("fecha_creacion_from_m")+"-"+$v("fecha_creacion_from_d")+"|"+$v("fecha_creacion_to_a")+"-"+$v("fecha_creacion_to_m")+"-"+$v("fecha_creacion_to_d");load_ajax_in("html_reporte","'.$SERVER['ARCHIVO_REAL'].'?'.$outputUrl.'&fecha_creacion="+fecha);',
						'default'=>$from
					)
				);

			echo '<span style="font-weight:bold;display:inline-block;margin:0 6px;">Hasta</span>'
					.render_input_fecha(
					'fecha_creacion_to',array(
						'rango'=>'',
						'callback'=>'var fecha=$v("fecha_creacion_from_a")+"-"+$v("fecha_creacion_from_m")+"-"+$v("fecha_creacion_from_d")+"|"+$v("fecha_creacion_to_a")+"-"+$v("fecha_creacion_to_m")+"-"+$v("fecha_creacion_to_d");load_ajax_in("html_reporte","'.$SERVER['ARCHIVO_REAL'].'?'.$outputUrl.'&fecha_creacion="+fecha);',
						'default'=>$to
					)
				);

		$projects=select(
			"
			productos_items.id as id,
			productos_items.nombre as nombre",
			"productos_items",
			"
			where 1
			",
			0);

		$projects0=[];

		foreach($projects as $p)
			$projects0[$p['id']]=$p;


		$projects=$projects0;	
		unset($projects0);

		//PROYECTOS
		echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
			echo '<option '. ( ($_GET['id_item']=='')?'selected':'' ) .' value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['id_item']).'">Seleccione un proyecto</option>';
			foreach($projects as $lin2){
				echo '<option '. ( ($_GET['id_item']==$lin2['id'])?'selected':'' ) .' 
				value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['id_item']).'&id_item='.$lin2['id'].'"
				>'.
				strtoupper($lin2['nombre']).
				'</option>';
			}
		echo '</select>';




			//CONTACTO
			$contactos=array(
					'1'			=> 'presencial',
					'2'			=> 'telefónico',
					'3'			=> 'virtual',
					'4'			=> 'feria'
			);

			echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
				echo '<option '. ( ($_GET['modo_contacto']=='')?'selected':'' ) .' 
					value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['modo_contacto']).'"
					>Seleccione un tipo de contacto</option>';
				foreach($contactos as $id2=>$name2){
					echo '<option '. ( ($_GET['modo_contacto']==$id2)?'selected':'' ) .' 
					value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['modo_contacto']).'&modo_contacto='.$id2.'"
					>'.$name2.'</option>';
				}
			echo '</select>';



			$interests=select(
				"
				ventas_niveles.id as id,
				ventas_niveles.nombre as nombre",
				"ventas_niveles",
				"
				where 1
				",
				0);

			$interests0=[];

			foreach($interests as $p)
				$interests0[$p['id']]=$p;


			$interests=$interests0;	
			unset($interests0);

			//INTERES
			echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
				echo '<option '. ( ($_GET['id_nivel']=='')?'selected':'' ) .' value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['id_nivel']).'">Seleccione un NI</option>';
				foreach($interests as $lin2){
					echo '<option '. ( ($_GET['id_nivel']==$lin2['id'])?'selected':'' ) .' 
					value="'.$SERVER['ARCHIVO_REAL'].'?'.exclude_from_array($output,['id_nivel']).'&id_nivel='.$lin2['id'].'"
					>'.
					strtoupper($lin2['nombre']).
					'</option>';
				}
			echo '</select>';




			$_GET['ob']='VENTAS_ITEMS';

			$context='';

			if($_GET['id_item']!=''){

				$context.="and ventas_items.id_item='".$_GET['id_item']."' ";
				
			}

			if($_GET['modo_contacto']!=''){

				$context.="and clientes.modo_contacto='".$_GET['modo_contacto']."' ";
				
			}

			if($_GET['id_nivel']!=''){

				$context.="and ventas_items.id_nivel='".$_GET['id_nivel']."' ";
				
			}


			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

	}



if(!$nobadge){
?>
<!-- <div class="well well-small">
Atenciones / Vendedor<br>
<?=badge(13);?> Número de proforma de ventas / dptos. Vendidos por vendedor en porcentaje y numero mes a mes , año por año, proyecto por proyecto<br>
<?=badge(14);?> Número de proformas diaria / proformas semanal / mensual por proyecto<br>
<?=badge(15);?> Reporte especifico del dia domingo
</div> -->
<?php
}







$ordby='ventas_items.id_usuario';




if($date!=''){
	$where="where ventas_items.visibilidad!=0 and date(ventas_items.$date) between '$from' and '$to'";
} else {
	$where="where ventas_items.visibilidad!=0 ";
}

$bisi = (substr($to,0,4)%4==0)?1:0;
$rango=Difer2($from,$to);

$division = intval($rango/7);

$resto = $rango%7;

if($resto>0){

	$firstday=date("w",mktime(0,0,0,substr($from,0,4),substr($from,5,2),substr($from,8,2)));
	$firstday=($firstday==0)?7:$firstday;
	if($firstday + $resto >= 8) $division=$division+1;

}
$rango = $rango - $division;

//echo "$rango<br>";


$fromY=substr($from,0,4);
$toY=substr($to,0,4);

$fromM=substr($from,5,2);
$toM=substr($to,5,2);

if($rango<=30){
	$op=array('D'); //1o2
} elseif($rango>30 and $rango<=90){
	$op=array('D','M'); //2,3,4
} elseif($rango>90 and ( ($rango<=366 and $bisi=1) or ($rango<=365 and $bisi=0) ) ){
	$op=array('M','D'); //2,3,4
} elseif($rango>365){
	$op=array('M','D'); //2,3,4
	// $op=array('A','M'); //2,3,4
}

// prin([$tipo,$from,$to]);

$tipo=$op['0'];
$intervalos=crear_intervalos($tipo,$from,$to);

// prin($intervalos);

// exit();

$VV=array();
$data = array();

$usuarios2=select("id,nombre,apellidos","usuarios2","where 1");
foreach($usuarios2 as $usu){
	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
}


$USU['']='no asignado';

$usuarios=select("fecha_creacion,id,nombre,apellidos,id_jefe","usuarios","where 1 order by id_jefe asc");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	$USU_FECHA[$usu['id']]=fecha_formato($usu['fecha_creacion'],'6');
	$ID_USU2[$usu['id']]=$usu['id_jefe'];
}

// prin($USU);
// prin($tipo);
// prin($intervalos);

$line0total=$linevtotal=$linevtotalR=$linevtotal44=$linevtotal44R=$linevtotal55=0;

foreach($intervalos as $vv){

	if($tipo=='D') // MENOS DE UN AÑO
	{
		//atenciones
		$llll=select(
					[
					"$ordby as nombre", 
					"count(*) as total",
					],
					'ventas_items',
					"left join usuarios on ventas_items.id_usuario=usuarios.id ".
					"left join clientes on ventas_items.id_cliente=clientes.id ".
					"where 1 ".
					// ."and ventas_items.visibilidad!=0 "
					"and date(ventas_items.$date)='$vv' ".
					$context.
					" group by ".$ordby." order by ".$ordby." desc
					",
					0);

		foreach($llll as $lll)
		{
			$line0[$lll['nombre']][$vv]=$lll['total'];
			$line0total+=$lll['total'];			
		}


		//separaciones
		$vvvv44=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1
					and ventas_items.id_status in (6) 
					and date(ventas_items.$date)='$vv'
					and date(ventas_items.fecha_separacion)='$vv'
					$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv44 as $vvv)
		{
			$linev44[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal44+=$vvv['total'];
		}	

		//separaciones rezagadas
		$vvvv44R=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1
					and ventas_items.id_status in (6) 
					and date(ventas_items.$date)!='$vv'					
					and date(ventas_items.fecha_separacion)='$vv'
					$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv44R as $vvv)
		{
			$linev44R[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal44R+=$vvv['total'];
		}

		//ventas
		$vvvv=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1 ".
					"and ventas_items.id_status in (7) ".
					"and date(ventas_items.$date)='$vv'
					and date(ventas_items.fecha_vendido)='$vv'
					$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv as $vvv)
		{
			$linev[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal+=$vvv['total'];
		}	

		//ventas rezagadas
		$vvvvR=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1
					and ventas_items.id_status in (7) 		
					and date(ventas_items.$date)!='$vv'								
					and date(ventas_items.fecha_vendido)='$vv'
					$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvvR as $vvv)
		{
			$linevR[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotalR+=$vvv['total'];
		}	



		//cancelados
		$vvvv55=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1
					and ventas_items.id_status in (8,9) 
					and date(ventas_items.$date)='$vv'
					$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv55 as $vvv)
		{
			$linev55[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal55+=$vvv['total'];
		}

	} else { // AÑO


		//atenciones
		$llll=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"ventas_items",
					"left join usuarios on ventas_items.id_usuario=usuarios.id ".
					"left join clientes on ventas_items.id_cliente=clientes.id ".
					"where 1 ".
					// "ventas_items.visibilidad!=0 ".
					"and date(ventas_items.$date) between '".str_replace("|","' and '",$vv)."' ".
					$context.
					"group by ".$ordby." ".
					"order by ".$ordby." desc "
					,0);

		foreach($llll as $lll)
		{
			$line0[$lll['nombre']][$vv]=$lll['total'];
			$line0total+=$lll['total'];
		}



		//separaciones fit
		$vvvv44=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1 ".
					"and date(productos_ventas.fecha_creacion) between '".str_replace("|","' and '",$vv)."' ".
					"and date(ventas_items.fecha_separacion) between '".str_replace("|","' and '",$vv)."' ".
					"and ventas_items.id_status in (6) ".
					"$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv44 as $vvv)
		{
			$linev44[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal44+=$vvv['total'];
		}

		//separaciones rezagados
		$vvvv44R=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1 ".
					"and date(productos_ventas.fecha_creacion) not between '".str_replace("|","' and '",$vv)."' ".					
					"and date(ventas_items.fecha_separacion) between '".str_replace("|","' and '",$vv)."' ".
					"and ventas_items.id_status in (6) ".
					"$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv44R as $vvv)
		{
			$linev44R[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal44R+=$vvv['total'];
		}

		//ventas
		$vvvv=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1 ".
					"and date(productos_ventas.fecha_creacion) between '".str_replace("|","' and '",$vv)."' ".
					"and date(ventas_items.fecha_vendido) between '".str_replace("|","' and '",$vv)."' ".					
					"and ventas_items.id_status in (7) ".
					"$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv as $vvv)
		{
			$linev[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal+=$vvv['total'];
		}

		//ventas rezagados
		$vvvvR=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1 ".
					"and date(productos_ventas.fecha_creacion) not between '".str_replace("|","' and '",$vv)."' ".					
					"and date(ventas_items.fecha_vendido) between '".str_replace("|","' and '",$vv)."' ".
					"and ventas_items.id_status in (7) ".
					"$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvvR as $vvv)
		{
			$linevR[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotalR+=$vvv['total'];
		}



		//cancelaciones
		$vvvv55=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
					left join clientes on ventas_items.id_cliente=clientes.id
					where 1
					and date(productos_ventas.fecha_creacion) between '".str_replace("|","' and '",$vv)."' ".
					"and ventas_items.id_status in (8,9) ".
					"$context
					group by $ordby 
					order by $ordby desc
					",
					0);

		foreach($vvvv55 as $vvv)
		{
			$linev55[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal55+=$vvv['total'];
		}		

	}


	if($tipo=='D'){
		if($fromM==$toM){
			$LLL[]=substr($vv,8,2);
		} else {
			$LLL[]=substr($vv,8,2)." ".substr($Array_Meses[substr($vv,5,2)*1],0,3);
		}
	}elseif($tipo=='M'){
		if($fromY==$toY){
			$LLL[]=substr($Array_Meses[substr($vv,5,2)*1],0,3);
		} else {
			$LLL[]=substr($Array_Meses[substr($vv,5,2)*1],0,3)." ".substr($vv,0,4);
		}
	}elseif($tipo=='A'){
		$LLL[]=substr($vv,0,4);
	}


}

// prin($LLL);

// prin($linev);

// exit();
// prin($line);






if($_GET['format']!='excel'){

echo '<div>
Leyenda:
<b style="color:orange;">separados</b>
<b style="color:green;">vendido</b>
<b style="color:red;">rezagados</b>
<b style="color:black;">atenciones</b>
</div>';


}

// exit();
if(sizeof($line0)>0){


	unset($row);
	$l=0;//title
	$row[$l][]=array('Atenciones y Ventas por Vendedor',
					 'class=nombre colspan='.(sizeof($intervalos)*3 +17),
					 'class=success');

	$row[$l][]=array(
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=jefes&format=excel">Exportar Excel</a>',
		'colspan=4');

	$l++;//header
	$row[$l][]=array('','class="anchofijo"','class="head muted success"');
	$row[$l][]=array('Activado desde','','class="head muted success"');
	foreach($intervalos as $ii=>$la)
		$row[$l][]=[$LLL[$ii],'colspan=3'];

	$row[$l][]='N';
	$row[$l][]=array('Total Atenciones','colspan=2');
	$row[$l][]=array('Total Separados','colspan=2');
	$row[$l][]=array('Total Vendidos','colspan=2');
	$row[$l][]=array('Total Separados + Vendidos','colspan=2');
	$row[$l][]=array('Total Cancelados','colspan=2');
	$row[$l][]=array('Total Separados + Vendidos + Cancelados','colspan=2');
	$row[$l][]='Prom Atenciones/Día';
	$row[$l][]='Separados / Atenciones';
	$row[$l][]='Vendidos / Atenciones';
	$row[$l][]='Separados + Vendidos / Atenciones';
	$row[$l][]='Cancelados / Atenciones';
	$row[$l][]='Separados + Vendidos + Cancelados / Atenciones';

	foreach($line0 as $iusu2=>$lin)
	{
		$lineoT[$iusu2]=array_sum($lin);
	}	
	arsort($lineoT);
	// prin($lineoT);
	foreach($lineoT as $iusu2=>$lin)
	{
		$lineoT2[$iusu2]=$line0[$iusu2];	
	}
	$line0=$lineoT2;
	// prin($lineoT);
	// prin($line0);
	// $line0T=$line0;

	//body
	$contextArray=[];

	if($_GET['id_nivel']!='') 
		$contextArray['ventas_items'][]='ventas_items.id_nivel='.$_GET['id_nivel'];

	if($_GET['id_item']!='') 
		$contextArray['ventas_items'][]='ventas_items.id_item='.$_GET['id_item'];
	
	if($_GET['modo_contacto']!='') 
		$contextArray['clientes'][]='clientes.modo_contacto='.$_GET['modo_contacto'];

	// prin($contextArray);

	foreach($line0 as $iusu2=>$lin)
	{
		if(trim($USU[$iusu2],'class=nombre')=='') continue;
		
		$l++;
		// if(trim($USU2[$iusu2])=='') continue;

		$ff=0;
		$ffv=0;
		$ffv44=0;
		$ffv55=0;
		$ffv66=0;
		$ffv77=0;

		$row[$l][]=array($USU[$iusu2],'class="nombre fijo"');
		$row[$l][]=array($USU_FECHA[$iusu2],'class=nombre');

		$sep7=$ven7='';
		foreach($intervalos as $ii=>$la)
		{

			// prin($la);
			list($la_1,$la_2)=explode("|",$la);
			$laa=$first.'|'.date("Y-m-d",strtotime($la_1." -1 day"));
			// prin($laa);

			if($_GET['format']=='excel'){


				$sep7=( ($linev44[$iusu2][$la]+$linev44R[$iusu2][$la]>0) ? (
				(($linev44[$iusu2][$la])?'<b style="color:orange;">'.$linev44[$iusu2][$la].'</b>':'<b style="color:orange;">0</b>').
				(($linev44R[$iusu2][$la])?'<b style="color:red;">('.$linev44R[$iusu2][$la].')</b>':'<b style="color:red;">(0)</b>').
				'') : '');


				$ven7=( ($linev[$iusu2][$la]+$linevR[$iusu2][$la]>0) ? (
				(($linev[$iusu2][$la])?'<b style="color:green;">'.$linev[$iusu2][$la].'</b>':'<b style="color:green;">0</b>').
				(($linevR[$iusu2][$la])?'<b style="color:red;">('.$linevR[$iusu2][$la].')</b>':'<b style="color:red;">(0)</b>').
				'') : '');


				$ruw7=($line0[$iusu2][$la])?$line0[$iusu2][$la]:'';


				if($sep7!='' or $ven7!=''){

					$row[$l][]=$sep7;
					$row[$l][]=$ven7;
					$row[$l][]=$ruw7;

				} else {

					$row[$l][]=[$ruw7,'colspan=3'];

				}


			} else {


				//naranja
				$href_separaciones_fit='custom/ventas_items.php?filter='.
							setFilter(['ventas_items'=>[
								'ventas_items.id_status=6',
								$ordby.'='.$iusu2,
								'fecha_creacion|'.$la,
								'fecha_separacion|'.$la,
							]],$contextArray);


				//rojo 1
				$href_separaciones_rez='custom/ventas_items.php?filter='.
							setFilter(['ventas_items'=>[
								'ventas_items.id_status=6',
								$ordby.'='.$iusu2,
								'fecha_creacion|'.$laa,
								'fecha_separacion|'.$la,
							]],$contextArray);

				
				//verde
				$href_vendidos_fit='custom/ventas_items.php?filter='.
							setFilter(['ventas_items'=>[
								'ventas_items.id_status=7',
								$ordby.'='.$iusu2,
								'fecha_creacion|'.$la,
								'fecha_vendido|'.$la,
							]],$contextArray);


				//rojo 2
				$href_vendidos_rez='custom/ventas_items.php?filter='.
							setFilter(['ventas_items'=>[
								'ventas_items.id_status=7',
								$ordby.'='.$iusu2,
								'fecha_creacion|'.$laa,
								'fecha_vendido|'.$la,
							]],$contextArray);


				//azul
				$href_atenciones='custom/ventas_items.php?filter='.
							setFilter(['ventas_items'=>[
								$ordby.'='.$iusu2,
								'fecha_creacion|'.$la,
							]],$contextArray);


				$sep7=( ($linev44[$iusu2][$la]+$linev44R[$iusu2][$la]>0) ? (
				(($linev44[$iusu2][$la])?'<a target="_blank" href="'.$href_separaciones_fit.'" style="color:orange;">'.$linev44[$iusu2][$la].'</a>':'<a target="_blank" href="'.$href_separaciones_fit.'" style="color:orange;">0</a>').

				(($linev44R[$iusu2][$la])?'<a target="_blank" href="'.$href_separaciones_rez.'" style="color:red;">('.$linev44R[$iusu2][$la].')</a>':'<a target="_blank" href="'.$href_separaciones_rez.'" style="color:red;">(0)</a>').
				'') : '');


				$ven7=( ($linev[$iusu2][$la]+$linevR[$iusu2][$la]>0) ? (
				(($linev[$iusu2][$la])?'<a target="_blank" href="'.$href_vendidos_fit.'" style="color:green;">'.$linev[$iusu2][$la].'</a>':'<a target="_blank" href="'.$href_vendidos_fit.'" style="color:green;">0</a>').

				(($linevR[$iusu2][$la])?'<a target="_blank" href="'.$href_vendidos_rez.'" style="color:red;">('.$linevR[$iusu2][$la].')</a>':'<a style="color:red;" href="'.$href_vendidos_rez.'">(0)</a>').
				'') : '');


				$ruw7=($line0[$iusu2][$la])?'<a target="_blank" href="'.$href_atenciones.'" >'.$line0[$iusu2][$la].'</a>':'';


				if($sep7!='' or $ven7!=''){

					$row[$l][]=$sep7;
					$row[$l][]=$ven7;
					$row[$l][]=$ruw7;

				} else {

					$row[$l][]=[$ruw7,'colspan=3'];

				}


			}

			// // (($linev44[$iusu2][$la])?'<b style="color:blue;">('.$linev44[$iusu2][$la].')</b> ':''). //separaciones
			// (($linev[$iusu2][$la])?'<b style="color:red;">('.$linev[$iusu2][$la].')</b> ':''). //ventas
			// // (($linev55[$iusu2][$la])?'<b style="color:green;">('.$linev55[$iusu2][$la].')</b> ':''). //cancelcaciones
			// (($line0[$iusu2][$la])?$line0[$iusu2][$la]:'');

			$ff=$ff+$line0[$iusu2][$la];

			$ffv=$ffv+$linev[$iusu2][$la]+$linevR[$iusu2][$la];

			$ffv44=$ffv44+$linev44[$iusu2][$la] + $linev44R[$iusu2][$la];
			// prin($la."=".$ffv44);
			$ffv55=$ffv55+$linev55[$iusu2][$la];


			$ffv66=$ffv66+$linev[$iusu2][$la]+$linevR[$iusu2][$la]+$linev44[$iusu2][$la]+$linev44R[$iusu2][$la];

			$ffv77=$ffv77+$linev[$iusu2][$la]+$linevR[$iusu2][$la]+$linev44[$iusu2][$la]+$linev44R[$iusu2][$la]+$linev55[$iusu2][$la];

			$lineSS[$la] = $lineSS[$la] + $line0[$iusu2][$la];
			$lineSSv[$la] = $lineSSv[$la] + $linev[$iusu2][$la];
			$lineSSvR[$la] = $lineSSvR[$la] + $linevR[$iusu2][$la];

			$lineSSv44[$la] = $lineSSv44[$la]+$linev44[$iusu2][$la]+$linev44R[$iusu2][$la];
			$lineSSv55[$la] = $lineSSv55[$la]+$linev55[$iusu2][$la];
			$lineSSv66[$la] = $lineSSv66[$la]+$linev[$iusu2][$la]+$linev44[$iusu2][$la]+$linev44R[$iusu2][$la];
			$lineSSv77[$la] = $lineSSv77[$la]+$linev[$iusu2][$la]+$linev44[$iusu2][$la]+$linev44R[$iusu2][$la]+$linev55[$iusu2][$la];

		}

		$row[$l][]=$rango;

		$row[$l][]=$ff;
		$row[$l][]=format_excel(100*$ff/$line0total).'%';
		
		$row[$l][]=$ffv44;	//separados
		$row[$l][]=format_excel(100*$ffv44/$linevtotal44).'%';

		$row[$l][]=$ffv;		//vendidos
		$row[$l][]=format_excel(100*$ffv/$linevtotal).'%';

		$row[$l][]=$ffv44 + $ffv; // separados + vendidos
		$row[$l][]=format_excel(100*($ffv+$ffv44)/($linevtotal+$linevtotal44)).'%';

		$row[$l][]=$ffv55; // cancelados
		$row[$l][]=format_excel(100*$ffv55/$linevtotal55).'%';

		$row[$l][]=$ffv44 + $ffv + $ffv55; // separados + vendidos + cancelados
		$row[$l][]=format_excel(100*($ffv+$ffv44+$ffv55)/($linevtotal+$linevtotal44+$linevtotal55)).'%';

		$row[$l][]=round($ff/$rango,2);

		$row[$l][]=($ffv44)?format_excel($ffv44/$ff):0;
		$row[$l][]=($ffv)?format_excel($ffv/$ff):0;
		$row[$l][]=($ffv66)?format_excel($ffv66/$ff):0;
		$row[$l][]=($ffv55)?format_excel($ffv55/$ff):0;
		$row[$l][]=($ffv77)?format_excel($ffv77/$ff):0;

	}

	$l++;//header
	$row[$l]=$row[1];


	$l++;//footer

	$ff=0;
	$ffv=0;
	$ffv44=0;
	$ffv55=0;
	$ffv66=0;
	$ffv77=0;

	$row[$l][]=array('Total Atenciones','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[$lineSS[$la],'colspan=3'];
		$ff=$ff+$lineSS[$la];
		// $ffv=$ffv+$lineSSv[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$total_atenciones=$ff;
	$row[$l][]=($ff)?'100%':'';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]='';
	$row[$l][]='';		
	$row[$l][]='';		
	// $row[$l][]=round($ff/$rango,2);
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	//end
	$l++;//footer
	$row[$l][]=array('Total Separados','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[$lineSSv44[$la],'colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv44=$ffv44+$lineSSv44[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$total_separaciones=$ffv44;
	$row[$l][]=($ffv44)?'100%':'';	
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	// $row[$l][]=format_excel($total_separaciones/$total_atenciones);
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	//end

	$l++;//footer
	$row[$l][]=array('Total Ventas','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[$lineSSv[$la]+$lineSSvR[$la],'colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv=$ffv+$lineSSv[$la] + $lineSSvR[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$total_ventas=$ffv;
	$row[$l][]=($ffv)?'100%':'';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]='';	
	// $row[$l][]=format_excel($total_ventas/$total_atenciones);
	$row[$l][]='';		
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	//end



	$l++;//footer
	$row[$l][]=array('Total Separados + Vendidos','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[ $lineSSv44[$la] + $lineSSv[$la]+$lineSSvR[$la],'colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv66=$ffv66+ $lineSSv44[$la] + $lineSSv[$la]+$lineSSvR[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$total_ventas_separaciones=$ffv66;
	$row[$l][]=($ffv66)?'100%':'';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';


	$l++;//footer
	$row[$l][]=array('Total Cancelaciones','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[$lineSSv55[$la],'colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv55=$ffv55+$lineSSv55[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$total_cancelaciones=$ffv55;
	$row[$l][]=($ffv55)?'100%':'';	
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	// $row[$l][]=format_excel($total_cancelaciones/$total_atenciones);
	//end
	

	$l++;//footer
	$row[$l][]=array('Total Separados + Vendidos + Cancelados','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[ $lineSSv55[$la] + $lineSSv44[$la] + $lineSSv[$la]+$lineSSvR[$la],'colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv77=$ffv77+ $lineSSv55[$la] + $lineSSv44[$la] + $lineSSv[$la]+$lineSSvR[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]=$total_ventas_separaciones_cancelados=$ffv77;
	$row[$l][]=($ffv77)?'100%':'';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';


	$l++;//footer
	$row[$l][]=array('Total Vendidos/Atenciones','class="nombre fijo"','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=[($lineSSv[$la])?round($lineSSv[$la]/$lineSS[$la],2):'','colspan=3'];
		// $ff=$ff+$lineSS[$la];
		$ffv=$ffv+$lineSSv[$la];
	}
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	$row[$l][]='';	
	$row[$l][]='';	
	$row[$l][]='';	
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';	
	//end
	//
	$seccion['vendedores']=$row;

	// prin($row); exit(0);
	
	if($_GET['format']=='excel'){

		echo render_excel(array($row));

	} else {
		?>
		<style>
		#div_allcontent { max-width:100%; }
		.vendedores b { float:left; color:red; }
		.reporte td { min-width:30px; height:19px; }
		
		.reporte_content { width:100%; overflow-x:scroll; overflow-y:visible; }
		
		.reporte_content table.reporte td.fijo { position:absolute; top:auto; left:21px; width:200px; border-right:1px solid #ddd; overflow:hidden; height:19px; }
		.reporte_content table.reporte td.fijo:before { content: " "; }
		.reporte_content table.reporte td.anchofijo:before { content: " "; width:200px !important; display:block; }
		
		</style>
		<?php
		echo '<div class="reporte_content">';
		echo render_table($row,'vendedores');
		echo '</div>';
		
	}


}



function setFilter($array=[],$context=[])
{

	foreach($context as $var=>$value)
	{
		if(!isset($array[$var])) 
			$array[$var]=[];
		$array[$var]=array_merge($array[$var],$context[$var]);
	}
	
	return str_replace("&","%26",http_build_query($array));

}
