<?php

	$seccion=array();

	//FIRST SELECT THE PROJECT
	//
	$WHERE="1";
	// $WHERE="id in(2,4,6)";
	$projects=select("id,nombre","productos_items","where $WHERE");

	foreach($projects as $lin2){

		$num_depas=contar("productos_items_items","where id_item=".$lin2['id']);
		
		$num_estac=contar("productos_estacionamientos_items_items","where id_item=".$lin2['id']);
		
		$num_depos=contar("productos_depositos_items_items","where id_item=".$lin2['id']);

		if($num_depas*1+$num_estac*1+$num_depos*1==0) continue;

		$projects2[]=$lin2;

	}	

	$projects=$projects2;

	parse_str($SERVER['PARAMS'], $output);

	unset($output['id_item']);

	if($_GET['format']!='excel'){

		echo '<select onchange="load_ajax_in(\'html_reporte\',this.value);">';
			echo '<option>Seleccione un proyecto</option>';
		foreach($projects as $lin2){
			echo '<option '. ( ($_GET['id_item']==$lin2['id'])?'selected':'' ) .' value="'.$SERVER['ARCHIVO'].'?'.http_build_query($output).'&id_item='.$lin2['id'].'">'.strtoupper($lin2['nombre']).'</option>';
		}
		echo '</select>';

	}	

function format_excel($num)
{
	// $num= 100 * round( 1*$num / 100 ) ;
	$num=number_format($num,2,'.',',');
	return $num;
}



if($_GET['id_item']!=''){

	$total=contar("productos_items_items","where id_item=".$_GET['id_item'],0);

	// prin($total);
	$items_items0=select("id,id_status,venta_precio,venta_fecha","productos_items_items","where id_status in (3,2) and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);
	$estacionamientos_items0=select("id,id_status,venta_precio,venta_fecha","productos_estacionamientos_items_items","where id_status in (3,2) and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);
	$depositos_items0=select("id,id_status,venta_precio,venta_fecha","productos_depositos_items_items","where id_status in (3,2) and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);

	// prin($estacionamientos_items0);

	$items_items0_total=0;
	foreach($items_items0 as $iiittt){
		$items_items0_total=$items_items0_total + 1*$iiittt['venta_precio'];
	}

	$estacionamiento_item0_total=0;
	foreach($estacionamiento_item0 as $iiittt){
		$estacionamiento_item0_total=$estacionamiento_item0_total + 1*$iiittt['venta_precio'];
	}

	$depositos_items0_total=0;
	foreach($depositos_items0 as $iiittt){
		$depositos_items0_total=$depositos_items0_total + 1*$iiittt['venta_precio'];
	}	

	// prin($items_items0);
	$items_items            =select("area_construida,id,id_status,venta_precio,area_construida","productos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
	$estacionamientos_items =select("id,id_status,venta_precio,area_construida","productos_estacionamientos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
	$depositos_items        =select("id,id_status,venta_precio,area_construida","productos_depositos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
	
	// prin($items_items);
	// prin($estacionamientos_items);
	// prin($depositos_items);

	$from=$items_items0[0]['venta_fecha']; $items_items0final=end($items_items0);
	$to=$items_items0final['venta_fecha'];

	// prin(array($from,$to));
	$intervalos=crear_intervalos_con_labels('M',$from,$to);
	
	// prin($intervalos);

	$year='';
	$acumulado=1;
	$datos=array();
	// $acumulado['2']=$acumulado['3']=$acumulado['4']=0;
	$num_acumulado=$area_acumulada=$precio_acumulado=0;
	foreach($intervalos as $yy=>$interva)
	{

		$items_items_bloque=select("area_construida,id,id_status,venta_precio,area_construida","productos_items_items","where id_status in (3,2) and id_item=".$_GET['id_item']." and date(venta_fecha) between '".$interva['from']."' and '".$interva['to']."' order by venta_fecha asc",0);
		// prin($items_items_bloque);
		$area=$precio=0;
		foreach($items_items_bloque as $iib){
			$area=$area+1*trim($iib['area_construida']);
			$precio=$precio+1*trim($iib['venta_precio']);
		}	
		$num_acumulado+=sizeof($items_items_bloque);
		$precio_acumulado+=$precio;
		$area_acumulada+=$area;

		// echo "$area<br>$precio<hr>";

		// prin($acumulado);

		$TC=2.81;
		$PPP=900;

		$datos[$yy]=array(
						
						'1'=>sizeof($items_items_bloque),

						'2'=>$num_acumulado,
						'3'=>$area_acumulada,
						'4'=>format_excel($precio_acumulado),
						'5'=>$TC,
						'6'=>format_excel($precio_acumulado/$area_acumulada),
						'7'=>format_excel(($precio_acumulado/$area_acumulada)/$TC),

						'8'=>format_excel( 100*(sizeof($items_items_bloque) / $total) ),
						'9'=>format_excel( 100*( $num_acumulado / $total ) ) ,
						'10'=>format_excel( 100*( ( $num_acumulado / $total ) / ($yy+1)) ),
						//extra
						'11'=>format_excel(($precio/$area)/$TC),	
						);

		if($interva['year']!=$year ){
			$year=$interva['year'];
			$yyy[]=$interva['year'];
			if($acumulado!=1)$nnn[]=$acumulado;
			$acumulado=1;
		} else {
			$acumulado++;
		}

	}
	// prin($datos);

	$nnn[]=$acumulado;


	// prin($yyy);
	// prin($nnn);


	$total=sizeof($intervalos);

	// prin($datos);

	// exit();

	




	//TABLA 1
	unset($row);

	//HEADER
	$l=0;
	$row[$l][]=array('EVOLUCION DEL PRECIO PROMEDIO' .( ( $_GET['format']=='excel' )?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=TABLA1&format=excel">Exportar Excel</a>'),'class=nombre colspan='.($total+2) ,'class=success');

	$l++;
	$row[$l][]=array('ITEM','class=nombre','class=info');
	$row[$l][]=array('DESCRIPCION','class="nombre" style="width:200px;"');
	foreach($yyy as $iii=>$yy){
		$row[$l][]=array($yy,'class=nombre colspan='.$nnn[$iii]);
	}

	$l++;
	$row[$l][]=array('','class=nombre','class=info');
	$row[$l][]=array('');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=array($iii+1,'class=nombre');
	}

	$l++;
	$row[$l][]=array('','class=nombre','class=info');
	$row[$l][]=array('');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=array(strtoupper($yy['month']),'class=nombre');
	}

	/// BODY
	$l++;
	$row[$l][]=array('1','','class=muted head"');
	$row[$l][]=array('N° DPTOS VENDIDOS EN EL MES');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['1'];
	}

	$l++;
	$row[$l][]=array('2','','class=muted head"');
	$row[$l][]=array('N° DPTOS VENDIDOS ACUMULADOS');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['2'];
	}

	$l++;
	$row[$l][]=array('3','','class=muted head"');
	$row[$l][]=array('AREA DPTOS VENDIDA');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['3'];
	}

	$l++;
	$row[$l][]=array('4','','class=muted head"');
	$row[$l][]=array('VALOR DE VENTA DPTOS ACUMULADO');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['4'];
	}

	$l++;
	$row[$l][]=array('5','','class=muted head"');
	$row[$l][]=array('T.CAMBIO');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['5'];
	}	

	$l++;
	$row[$l][]=array('6','','class=muted head"');
	$row[$l][]=array('PREC. PROM S/.');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['6'];
	}	

	$l++;
	$row[$l][]=array('7','','class=muted head"');
	$row[$l][]=array('PREC. PROM $');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['7'];
	}

	$l++;
	$row[$l][]=array('8','','class=muted head"');
	$row[$l][]=array('VENTAS DEL MES %');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['8'];
	}		
			
	$l++;
	$row[$l][]=array('9','','class=muted head"');
	$row[$l][]=array('ALCANCE DE VENTAS ACUMULADO');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['9'];
	}	

	$l++;
	$row[$l][]=array('10','','class=muted head"');
	$row[$l][]=array('VELOCIDAD DE VENTA MENSUAL');
	foreach($intervalos as $iii=>$yy){
		$row[$l][]=$datos[$iii]['10'];
	}	

	// $seccion['TABLA1'] =$row;


	$seccion['TABLA1']=array($row,'reporte_ventas');







	//TABLA 2
	$datos2=array(
		'1'=>array(
			'1'=>$datos['0']['11'],
			'2'=>$datos['0']['11']-$PPP,
			'3'=>100*format_excel( ($datos['0']['11']-$PPP)/$PPP ).'%',
			),
		'2'=>array(
			'1'=>$datos[$total-1]['11'],
			'2'=>$datos[$total-1]['11']-$PPP,
			'3'=>100*format_excel( ($datos[$total-1]['11']-$PPP)/$PPP ).'%',
			),
		'3'=>array(
			'1'=>$PPP,
			'2'=>$datos[$total-1]['7']-$PPP,
			'3'=>100*format_excel( ($datos[$total-1]['7']-$PPP)/$PPP ).'%',
			),
		'4'=>array(
			'1'=>$datos[$total-1]['7'],
			'2'=>'0',
			'3'=>'0.00%',
			)					
		);

	unset($row);
	//HEADER
	$l=0;
	$row[$l][]=array('ANALISIS DE LA VARIACION DE PRECIOS HISTORICOS' .( ( $_GET['format']=='excel' )?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=TABLA2&format=excel">Exportar Excel</a>'),'class=nombre colspan=4','class=success');

	$l++;
	$row[$l][]=array('DESCRIPCION','class=nombre','class="info"');
		$row[$l][]=array('USA $','class=nombre');
		$row[$l][]=array('DESVIACIONES DEL PLAN','class=nombre colspan=2');

	//BODY
	$l++;
	$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('','class=nombre');
		$row[$l][]=array('ABSOLUTAS','class=nombre');
		$row[$l][]=array('PORCENTUALES','class=nombre');

	$l++;
	$row[$l][]=array('PRECIO PROMEDIO MES DE LANZAMIENTO','class=nombre','class="muted head"');
		$row[$l][]=array($datos2['1']['1'],'class=nombre');
		$row[$l][]=array($datos2['1']['2'],'class=nombre');
		$row[$l][]=array($datos2['1']['3'],'class=nombre');

	$l++;
	$row[$l][]=array('PRECIO PROMEDIO MES DE CIERRE','class=nombre','class="muted head"');
		$row[$l][]=array($datos2['2']['1'],'class=nombre');
		$row[$l][]=array($datos2['2']['2'],'class=nombre');
		$row[$l][]=array($datos2['2']['3'],'class=nombre');

	$l++;
	$row[$l][]=array('PRECIO PROMEDIO PLANIFICADO','class=nombre','class="muted head"');
		$row[$l][]=array($datos2['3']['1'],'class=nombre');
		$row[$l][]=array($datos2['3']['2'],'class=nombre');
		$row[$l][]=array($datos2['3']['3'],'class=nombre');	


	$l++;
	$row[$l][]=array('PRECIO PROMEDIO PONDERADO DE CIERRRE','class=nombre','class="muted head"');
		$row[$l][]=array($datos2['4']['1'],'class=nombre');
		$row[$l][]=array($datos2['4']['2'],'class=nombre');
		$row[$l][]=array($datos2['4']['3'],'class=nombre');


	
	$seccion['TABLA2']=array($row,'reporte_ventas reporte_corto');



	//TABLA 3
	$datos3=array(
		'1'=>array(
			'1'=>format_excel($items_items0_total),
			),
		'2'=>array(
			'1'=>format_excel($estacionamientos_items0_total),
			),
		'3'=>array(
			'1'=>format_excel($depositos_items0_total),
			),
		'4'=>array(
			'1'=>format_excel($items_items0_total + $estacionamientos_items0_total + $depositos_items0_total),
			),
		'5'=>array(
			'1'=>format_excel( ( $items_items0_total + $estacionamientos_items0_total + $depositos_items0_total) / $TC),
			)								
		);

	unset($row);
	//HEADER
	$l=0;
	$row[$l][]=array('VALOR DE VENTA TOTAL S/.' .( ( $_GET['format']=='excel' )?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=TABLA3&format=excel">Exportar Excel</a>'),'class=nombre colspan=2','class=success');

	$l++;
	$row[$l][]=array('DESCRIPCION','class=nombre','class="info"');
		$row[$l][]=array('USA $','class=nombre');

	//BODY
	$l++;
	$row[$l][]=array('DEPARTAMENTOS','class=nombre','class="muted head"');
		$row[$l][]=array($datos3['1']['1'],'class=nombre');

	$l++;
	$row[$l][]=array('ESTACIONAMIENTOS','class=nombre','class="muted head"');
		$row[$l][]=array($datos3['2']['1'],'class=nombre');

	$l++;
	$row[$l][]=array('DEPOSITOS','class=nombre','class="muted head"');
		$row[$l][]=array($datos3['3']['1'],'class=nombre');


	$l++;
	$row[$l][]=array('TOTAL S/.','class=nombre','class="muted head"');
		$row[$l][]=array($datos3['4']['1'],'class=nombre');

	$l++;
	$row[$l][]=array('TOTAL USA $','class=nombre','class="muted head"');
		$row[$l][]=array($datos3['5']['1'],'class=nombre');






	$seccion['TABLA3']=array($row,'reporte_ventas reporte_corto');




	if($_GET['format']=='excel'){
		// prin($seccion);
		// exit();
		echo render_excel($seccion);

	} else {

		foreach($seccion as $vende){
			echo render_table($vende[0],$vende[1]);
		}
		
	}




}




