<?php

	$seccion=array();
	//FIRST SELECT THE PROJECT
	//
	$WHERE="1";
	// $WHERE="id in(2,4,6)";
	$projects=select("id,nombre","productos_items","where $WHERE");

	// prin($projects);

	foreach($projects as $lin2){

		$num_depas=contar("productos_items_items","where id_item=".$lin2['id'],0);
		
		$num_estac=contar("productos_estacionamientos_items_items","where id_item=".$lin2['id'],0);
		
		$num_depos=contar("productos_depositos_items_items","where id_item=".$lin2['id'],0);

		$num_publicidades=contar("publicidades","where id_item=".$lin2['id'],0);

		// prin($lin2['id'].", $num_depas, $num_estac, $num_depos, $num_publicidades");

		if( 
			($num_depas*1+$num_estac*1+$num_depos*1==0) 
			or ($num_publicidades*1==0) 
		  ) continue;

		$projects2[]=$lin2;

	}	

	$projects=$projects2;

	// prin($SERVER['PARAMS']);

	parse_str($SERVER['PARAMS'], $output);
	
	// prin(urldecode(http_build_query($output)));


	unset($output['id_item']);

	if($_GET['format']!='excel'){

		echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
			echo '<option>Seleccione un proyecto</option>';
			foreach($projects as $lin2){
				echo '<option '. ( ($_GET['id_item']==$lin2['id'])?'selected':'' ) .' value="'.$SERVER['ARCHIVO_REAL'].'?'.urldecode(http_build_query($output)).'&id_item='.$lin2['id'].'">'.
					 strtoupper($lin2['nombre']).
					 '</option>';
			}
		echo '</select>';

	}



	function format_excel($num)
	{
		// $num= 100 * round( 1*$num / 100 ) ;
		$num=number_format($num,2,'.',',');
		return $num;
	}

// prin($_GET);


if($_GET['id_item']!=''){

	$total=contar("productos_items_items","where id_item=".$_GET['id_item'],0);

	$items_items0=select("id,id_status,venta_precio,venta_fecha","productos_items_items","where id_status in (3,4) and venta_fecha!='0000-00-00 00:00' and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);

	if(sizeof($items_items0)==0){
		
		echo "<div class='alert alert-error'>Aún no hay inmuebles en SEPARACIÓN o VENTA</div>";
		// exit();

	} else {

		// $estacionamientos_items0=select("id,id_status,venta_precio,venta_fecha","productos_estacionamientos_items_items","where id_status in (3,4) and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);
		// $depositos_items0=select("id,id_status,venta_precio,venta_fecha","productos_depositos_items_items","where id_status in (3,4) and venta_fecha is not null and id_item=".$_GET['id_item']." order by venta_fecha asc",0);

		// prin($estacionamientos_items0);
		$publicidades=select("fecha_creacion2","publicidades","where id_item=".$_GET['id_item']." order by fecha_creacion2 asc");

		$items_items0_total=0;
		foreach($items_items0 as $iiittt){
			$items_items0_total=$items_items0_total + 1*$iiittt['venta_precio'];
		}

		// $estacionamiento_item0_total=0;
		// foreach($estacionamiento_item0 as $iiittt){
		// 	$estacionamiento_item0_total=$estacionamiento_item0_total + 1*$iiittt['venta_precio'];
		// }

		// $depositos_items0_total=0;
		// foreach($depositos_items0 as $iiittt){
		// 	$depositos_items0_total=$depositos_items0_total + 1*$iiittt['venta_precio'];
		// }	

		// prin($items_items0);
		// $items_items            =select("area_construida,id,id_status,venta_precio,area_construida","productos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
		// $estacionamientos_items =select("id,id_status,venta_precio,area_construida","productos_estacionamientos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
		// $depositos_items        =select("id,id_status,venta_precio,area_construida","productos_depositos_items_items","where id_item=".$_GET['id_item']." order by venta_fecha asc",0);
		
		// prin($items_items);
		// prin($estacionamientos_items);
		// prin($depositos_items);

		$from=$items_items0[0]['venta_fecha']; $items_items0final=end($items_items0);
		$to=$items_items0final['venta_fecha'];

		$from2=$publicidades[0]['fecha_creacion2']; $publicidades_final=end($publicidades);
		$to2=$publicidades_final['fecha_creacion2'];	

		$to= ( substr($to,0,4).substr($to,5,2) > substr($to2,0,4).substr($to2,5,2) )?$to:$to2;
		$from= ( substr($from,0,4).substr($from,5,2) < substr($from2,0,4).substr($from2,5,2) )?$from:$from2;


		// prin(array($from,$to));
		$intervalos=crear_intervalos_con_labels('M',$from,$to);
		
		// prin(sizeof($intervalos));

		$tamanos=array(
					'2 X 2',
					'3 X 2',
					'3 X 3',
					'3 X 5',
					'3 X 6',
					'4 X 3',
					'6 X 3',
					'6 X 6'
				);

		$year='';
		$acumulado=1;
		$datos=array();
		// $acumulado['2']=$acumulado['3']=$acumulado['4']=0;
		$num_acumulado=$area_acumulada=$precio_acumulado=0;
		foreach($intervalos as $yy=>$interva)
		{

			$items_items_bloque=select("area_construida,id,id_status,venta_precio,area_construida","productos_items_items","where id_status in (3,4) and id_item=".$_GET['id_item']." and date(venta_fecha) between '".$interva['from']."' and '".$interva['to']."' order by venta_fecha asc",0);

			$num_atenciones=contar("ventas_items","where id_canal in (2) and id_item=".$_GET['id_item']." and date(fecha_creacion) between '".$interva['from']."' and '".$interva['to']."' ",0);

			$num_separaciones=contar("productos_items_items","where id_item=".$_GET['id_item']." and  id_status in (3,4)  and date(venta_fecha) between '".$interva['from']."' and '".$interva['to']."' ",0);


			$inversion_mes=0;
			foreach($tamanos as $ttt=>$tamano){

				$publicidades_bloque=select("tamano,cantidad,precio","publicidades","where tamano='".$tamano."' and id_item=".$_GET['id_item']." and date(fecha_creacion2) between '".$interva['from']."' and '".$interva['to']."' order by fecha_creacion2 asc",0);

				$p_acumulado=$c_acumulado=0;
				foreach($publicidades_bloque as $ppbb){
					$p_acumulado+=$ppbb['precio'];
					$c_acumulado+=$ppbb['cantidad'];
				}
				$datos[$yy][$ttt]=array($p_acumulado,$c_acumulado);
				$inversion_mes+=$p_acumulado*$c_acumulado;
				$datos[$ttt]['suma']+=$p_acumulado*$c_acumulado;

			}


			$datos[$yy]['inversion']=$inversion_mes;
			$datos[$yy]['num_atenciones']=$num_atenciones;
			$datos[$yy]['num_separaciones']=$num_separaciones;
			$datos[$yy]['relacion']=$num_atenciones/$num_separaciones;

			$datos[$yy]['costo_visita']=$inversion_mes/$num_atenciones;
			$datos[$yy]['costo_separacion']=$inversion_mes/$num_separaciones;


			// prin($items_items_bloque);
			// $area=$precio=0;
			// foreach($items_items_bloque as $iib){
			// 	$area=$area+1*trim($iib['area_construida']);
			// 	$precio=$precio+1*trim($iib['venta_precio']);
			// }	
			// $num_acumulado+=sizeof($items_items_bloque);
			// $precio_acumulado+=$precio;
			// $area_acumulada+=$area;

			// echo "$area<br>$precio<hr>";

			// prin($acumulado);

			$TC=2.81;

			// $datos[$yy]			=array(
							
			// 				'1'=>sizeof($items_items_bloque),

			// 				'2'=>$num_acumulado,
			// 				'3'=>$area_acumulada,
			// 				'4'=>format_excel($precio_acumulado),
			// 				'5'=>$TC,
			// 				'6'=>format_excel($precio_acumulado/$area_acumulada),
			// 				'7'=>format_excel(($precio_acumulado/$area_acumulada)/$TC),

			// 				'8'=>format_excel( 100*(sizeof($items_items_bloque) / $total) ),
			// 				'9'=>format_excel( 100*( $num_acumulado / $total ) ) ,
			// 				'10'=>format_excel( 100*( ( $num_acumulado / $total ) / ($yy+1)) ),
			// 				//extra
			// 				'11'=>format_excel(($precio/$area)/$TC),	
			// 				);

			if($interva['year']!=$year ){
				$year=$interva['year'];
				$yyy[]=$interva['year'];
				if($acumulado!=1)$nnn[]=$acumulado;
				$acumulado=1;
			} else {
				$acumulado++;
			}

		}

		foreach($intervalos as $yy=>$interva)
		{
		
			$datos['suma']['inversion']+=$datos[$yy]['inversion'];
			$datos['suma']['num_atenciones']+=$datos[$yy]['num_atenciones'];
			$datos['suma']['num_separaciones']+=$datos[$yy]['num_separaciones'];
			$datos['suma']['relacion']=$datos['suma']['num_atenciones']/$datos['suma']['num_separaciones'];

			$datos['suma']['costo_visita']=$datos['suma']['inversion']/$datos['suma']['num_atenciones'];
			$datos['suma']['costo_separacion']=$datos['suma']['inversion']/$datos['suma']['num_separaciones'];

		}
			
		// $datos['inversion']['suma']=$suma_inversion;
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
		$row[$l][]=array('INFORME DE CIERRE DE PUBLICIDAD' .( ( $_GET['format']=='excel' )?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=TABLA1&format=excel">Exportar Excel</a>'),'class=nombre colspan='.($total*2+3) ,'class=success');

		$l++;
		$row[$l][]=array('DESCRIPCION','class=nombre','class=info');
		$row[$l][]=array('TAMAÑO','class="nombre" style="width:200px;"');
		foreach($yyy as $iii=>$yy){
			$row[$l][]=array($yy,'class=nombre colspan='.$nnn[$iii]*2);
		}
		$row[$l][]=array('TOTAL','class="nombre" style="width:200px;"');

		$l++;
		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array(strtoupper($yy['month']),'class=nombre colspan=2');
		}
		$row[$l][]=array('');

		$l++;
		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('precio','class=nombre');
			$row[$l][]=array('veces','class=nombre');
		}
		$row[$l][]=array('');


		/// BODY
		foreach($tamanos as $ttt=>$tamano){
			$l++;
			$row[$l][]=array(($ttt==0)?'AVISOS EL COMERCIO':'','','');
			$row[$l][]=array($tamano);
			foreach($intervalos as $iii=>$yy){
				$row[$l][]=array(number_format($datos[$iii][$ttt]['0'], 2, '.', ','));
				$row[$l][]=array($datos[$iii][$ttt]['1']);
			}
			$row[$l][]=array(number_format($datos[$ttt]['suma'], 2, '.', ','));
		}


		$l++;
		$row[$l][]=array('TOTAL INVERSION EN DIARIO EL COMERCIO','class=nombre colspan=2','class=warning');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array(number_format($datos[$iii]['inversion'], 2, '.', ','));
		}
		$row[$l][]=array(number_format($datos['suma']['inversion'], 2, '.', ','));


		$l++;
		$row[$l][]=array('N° DE VISITAS','class=nombre colspan=2','');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array($datos[$iii]['num_atenciones']);
		}
		$row[$l][]=array($datos['suma']['num_atenciones']);

		$l++;
		$row[$l][]=array('N° DE SEPARACIONES','class=nombre colspan=2','');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array($datos[$iii]['num_separaciones']);
		}
		$row[$l][]=array($datos['suma']['num_separaciones']);


		$l++;
		$row[$l][]=array('RELACION VISITAS/SEPARACIONES','class=nombre colspan=2','');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array($datos[$iii]['relacion']);
		}
		$row[$l][]=array($datos['suma']['relacion']);


		$l++;
		$row[$l][]=array('COSTO VISITA','class=nombre colspan=2','class=warning');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array(number_format($datos[$iii]['costo_visita'], 2, '.', ','));
		}
		$row[$l][]=array(number_format($datos['suma']['costo_visita'], 2, '.', ','));


		$l++;
		$row[$l][]=array('COSTO SEPARACIONES','class=nombre colspan=2','class=warning');
		foreach($intervalos as $iii=>$yy){
			$row[$l][]=array('');
			$row[$l][]=array(number_format($datos[$iii]['costo_separacion'], 2, '.', ','));
		}
		$row[$l][]=array(number_format($datos['suma']['costo_separacion'], 2, '.', ','));


		// $seccion['TABLA1'] =$row;

		if($_GET['format']=='excel'){

			echo render_excel(array($row));

		} else {

			echo render_table($row,'reporte_ventas');

		}

	}

}

if(0){


		// $l++;

	//end
	$seccion['resumen']=$row;

	// prin($seccion['resumen']);

	// prin($seccion[$_GET['seccion']]);

	if($_GET['seccion']!=''){
		echo render_excel($seccion[$_GET['seccion']]);
	} else {
		foreach($vendes as $vende){
			echo render_table($vende,'reporte_ventas');
		}
		echo render_table($seccion['resumen'],'reporte_ventas');
		echo '<script> $$(".filters").setStyle("display","none"); </script>';
	}


}


