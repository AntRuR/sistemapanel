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


unset($output['id_item']);


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


	if($_GET['format']!='excel'){

		$projects=select(
			"
			productos_items.id as id,
			productos_items.nombre as nombre",
			"productos_items",
			"
			join  productos_items_items on productos_items_items.id_item=productos_items.id
			join  productos_ventas on productos_ventas.id_item_item=productos_items_items.id
			",
			0);

		$projects0=[];

		foreach($projects as $p)
			$projects0[$p['id']]=$p;


		$projects=$projects0;	
		unset($projects0);

		echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
			echo '<option>Seleccione un proyecto</option>';
			foreach($projects as $lin2){
				echo '<option '. ( ($_GET['id_item']==$lin2['id'])?'selected':'' ) .' 
				value="'.$SERVER['ARCHIVO_REAL'].'?'.urldecode(http_build_query($output)).'&id_item='.$lin2['id'].'"
				>'.
				strtoupper($lin2['nombre']).
				'</option>';
			}
		echo '</select>';


		if($_GET['id_item']!=''){
		
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



			$_GET['ob']='VENTAS_ITEMS';

			$date='fecha_creacion';

			$context='';

			if($_GET['id_item']!=''){

				$context="and id_item='".$_GET['id_item']."'";
				
			}

			list($from,$to)=explode("|",$_GET['fecha_creacion']);


			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

			//parse_str($_GET['filtro'], $get);



			//prin("$first - $last");

			$from=($from)?$from:$first;
			$to=($to)?$to:$last;

			$from=fixyfecha($from);
			$to=fixyfecha($to);


			// prin($fechas);
			// return $fechas;

			echo '<select onchange="if(this.value!=\'\'){load_ajax_in(\'html_reporte\',this.value);}">';
				foreach($fechas as $lin2id=>$fecha){

					echo '<option '. ( ($_GET['fecha_creacion']==$fecha['value'])?'selected':'' ) .' 
					value="'.$SERVER['ARCHIVO_REAL'].'?'.urldecode(http_build_query($output)).'&id_item='.$lin2['id'].'&fecha_creacion='.$fecha['value'].
					'"
					>'.
					$fecha['label'].
					'</option>';
				}
			echo '</select>';


			if(!function_exists("render_input_fecha"))
			{
				
				function render_input_fecha( $campo, $opciones=array() )
				{

					global $Array_Meses;

					if($opciones['rango']){
						list($uuno,$ddos)=explode(",",$opciones['rango']);
						$fromYear = date("Y",strtotime($uuno));
						$toYear = date("Y",strtotime($ddos));
					} else {
						$fromYear = date("Y")-99;
						$toYear = date("Y")+1;
					}

					$default=explode("-",$opciones['default']);
					// prin($default);
					// prin($opciones);

					$opciones['callback']=($opciones['callback'])?$opciones['callback']:'render_input_fecha';

					$html='';
					$html.= "<select id='".$campo."_d' class='form_input form_input_fecha' onchange='".$opciones['callback']."'>";
					$html.= "<option></option>";
					for($i=1; $i<=31;$i++){
					$selected=(sprintf("%02d",$i)==$default['2'])?"selected":"";
					$html.="<option value='". sprintf("%02d",$i) ."' $selected >".$i."</option>";
					}
					$html.= "</select>";


					$html.= "<select id='".$campo."_m' class='form_input form_input_fecha' onchange='".$opciones['callback']."'>";

					$html.= "<option></option>";
					for($i=1; $i<=12;$i++){
					$selected=(sprintf("%02d",$i)==$default['1'])?"selected":"";		
					// if($default=='now()'){ $selected=(sprintf("%02d",$i)==date("m"))?"selected":""; }
					$html.="<option value='". sprintf("%02d",$i) ."' $selected >".substr($Array_Meses[$i],0,3)."</option>";
					}
					$html.= "</select>";


					$html.= "<select  id='".$campo."_a' class='form_input form_input_fecha' onchange='".$opciones['callback']."'>";
					$html.= "<option></option>";
					for($i=$toYear; $i>=$fromYear;$i--){
					$selected=(sprintf("%02d",$i)==$default['0'])?"selected":"";				
					// if($default=='now()'){ $selected=($i==date("Y"))?"selected":""; }
					$html.="<option value='".$i."' $selected >".$i."</option>";
					}
					$html.= "</select>";
					return $html;


				}
			}
			

			echo '<span style="font-weight:bold;display:inline-block;margin:0 6px;">Desde</span>'.render_input_fecha(
					'fecha_creacion_from',array(
						'rango'=>'',
						'callback'=>'var fecha=$v("fecha_creacion_from_a")+"-"+$v("fecha_creacion_from_m")+"-"+$v("fecha_creacion_from_d")+"|"+$v("fecha_creacion_to_a")+"-"+$v("fecha_creacion_to_m")+"-"+$v("fecha_creacion_to_d");load_ajax_in("html_reporte","'.$SERVER['ARCHIVO_REAL'].'?'.urldecode(http_build_query($output)).'&id_item='.$lin2['id'].'&fecha_creacion="+fecha);',
						'default'=>$from
					)
				);

			echo '<span style="font-weight:bold;display:inline-block;margin:0 6px;">Hasta</span>'.render_input_fecha(
					'fecha_creacion_to',array(
						'rango'=>'',
						'callback'=>'var fecha=$v("fecha_creacion_from_a")+"-"+$v("fecha_creacion_from_m")+"-"+$v("fecha_creacion_from_d")+"|"+$v("fecha_creacion_to_a")+"-"+$v("fecha_creacion_to_m")+"-"+$v("fecha_creacion_to_d");load_ajax_in("html_reporte","'.$SERVER['ARCHIVO_REAL'].'?'.urldecode(http_build_query($output)).'&id_item='.$lin2['id'].'&fecha_creacion="+fecha);',
						'default'=>$to
					)
				);

			// echo render_input_fecha('fecha_creacion_to');

			// $ventas=select(
			// 	"
			// 	venta_fecha
			// 	",
			// 	"bonos_abonos",
			// 	"
			// 	where 1
			// 	and id_item=".$_GET['id_item']."
			// 	order by venta_fecha asc",
			// 	0
			// 	);


			// $meses=[];

			// $meses['']='Seleccione un mes';
			
			// foreach($ventas as $venta){

			// 	if(!isset($meses[str_replace("-","",substr($venta['venta_fecha'],0,7))])) 
			// 		$meses[str_replace("-","",substr($venta['venta_fecha'],0,7))]=substr($venta['venta_fecha'],0,4)." ".ucfirst($Array_Meses[1*substr($venta['venta_fecha'],5,2)]);

			// }



		}	


	}



if(!$nobadge){
?>
<div class="well well-small">
Atenciones / Vendedor<br>
<?=badge(13);?> Número de proforma de ventas / dptos. Vendidos por vendedor en porcentaje y numero mes a mes , año por año, proyecto por proyecto<br>
<?=badge(14);?> Número de proformas diaria / proformas semanal / mensual por proyecto<br>
<?=badge(15);?> Reporte especifico del dia domingo
</div>
<?php
}



// prin("$from - $to");

function render_table_old($row){
	$ht='';
	$ht.='<table class="reporte table table-striped table-condensed table-bordered table-hover">';
	foreach($row as $rl=>$rline)
	{
		$fil=''; $trAtrr='';
		foreach($rline as $rc=>$cell)
		{
			if(!is_array($cell))
				$fil.="<td>$cell</td>";
			else
			{
				$fil.='<td '.$cell[1].'>'.$cell[0].'</td>';
				if(isset($cell[2])) $trAtrr=$cell[2];
			}
		}
		$ht.="<tr ".$trAtrr.">$fil</tr>";
	}
	$ht.='</table>';
	return $ht;
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

$usuarios=select("fecha_creacion,id,nombre,apellidos,id_jefe","usuarios","where 1 order by id_jefe");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	$USU_FECHA[$usu['id']]=fecha_formato($usu['fecha_creacion'],'6');
	$ID_USU2[$usu['id']]=$usu['id_jefe'];
}

// prin($USU);
// prin($tipo);
// prin($intervalos);

$line0total=$linevtotal=0;

foreach($intervalos as $vv){

	if($tipo=='D')
	{

		$llll=select(
					[
					"$ordby as nombre", 
					"count(*) as total",
					"usuarios.id_jefe as id_jefe"
					],
					$datos_tabla['tabla'],
					"left join usuarios on ventas_items.id_usuario=usuarios.id
					where 
					ventas_items.visibilidad!=0 
					and date(ventas_items.$date)='$vv'
					$context
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		foreach($llll as $lll)
		{
			$line0[$lll['nombre']][$vv]=$lll['total'];
			$line0total+=$lll['total'];			
		}

		$vvvv=select(
					[
					"productos_items_items.venta_id_vendedor as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					where 1
					and date(ventas_items.$date)='$vv'
					$context
					group by productos_items_items.venta_id_vendedor 
					order by productos_items_items.venta_id_vendedor desc
					",
					0);

		foreach($vvvv as $vvv)
		{
			$linev[$lll['nombre']][$vv]=$vvv['total'];
			$linevtotal+=$lll['total'];
		}		

	} else {

		$llll=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					"usuarios.id_jefe as id_jefe",
					],
					"ventas_items",
					"left join usuarios on ventas_items.id_usuario=usuarios.id 
					where 
					ventas_items.visibilidad!=0 
					and date(ventas_items.$date) between '".str_replace("|","' and '",$vv)."'
					$context
					group by ".$ordby." 
					order by ".$ordby." desc
					",
					0);

		foreach($llll as $lll)
		{
			$line0[$lll['nombre']][$vv]=$lll['total'];
			$line0total+=$lll['total'];
		}



		$vvvv=select(
					[
					"productos_items_items.venta_id_vendedor as nombre",
					"count(*) as total",
					],
					"productos_ventas",
					"
					left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
					where 1
					and date(productos_ventas.fecha_creacion) between '".str_replace("|","' and '",$vv)."'
					$context
					group by productos_items_items.venta_id_vendedor 
					order by productos_items_items.venta_id_vendedor desc
					",
					0);

		foreach($vvvv as $vvv)
		{
			$linev[$lll['nombre']][$vv]=$vvv['total'];
			$linevtotal+=$lll['total'];
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

// prin($linev);

// exit();
// prin($line);









// exit();
if(sizeof($line0)>0){


	unset($row);
	$l=0;//title
	$row[$l][]=array('Atenciones y Ventas por vendedor',
					 'class=nombre colspan='.(sizeof($intervalos)+5),
					 'class=success');
	$row[$l][]=array(
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=jefes&format=excel">Exportar Excel</a>',
		'colspan=4');

	$l++;//header
	$row[$l][]=array('','','class="head muted success"');
	$row[$l][]=array('Activado desde','','class="head muted success"');
	foreach($intervalos as $ii=>$la)
		$row[$l][]=$LLL[$ii];

	$row[$l][]='N';
	$row[$l][]=array('Total Atenciones','colspan=2');
	$row[$l][]=array('Total Ventas','colspan=2');
	$row[$l][]='Prom Atenciones/Día';
	$row[$l][]='Ventas / Atenciones';

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

	foreach($line0 as $iusu2=>$lin)
	{
		$l++;
		// if(trim($USU2[$iusu2])=='') continue;

		$ff=0;
		$ffv=0;
		$row[$l][]=array($USU[$iusu2],'class=nombre');
		$row[$l][]=array($USU_FECHA[$iusu2],'class=nombre');
		foreach($intervalos as $ii=>$la)
		{
			$row[$l][]=
			(($linev[$iusu2][$la])?'<b>('.$linev[$iusu2][$la].')</b> ':'')
			.(($line0[$iusu2][$la])?$line0[$iusu2][$la]:'');

			$ff=$ff+$line0[$iusu2][$la];
			$ffv=$ffv+$linev[$iusu2][$la];
			$lineSS[$la] = $lineSS[$la] + $line0[$iusu2][$la];
			$lineSSv[$la] = $lineSSv[$la] + $linev[$iusu2][$la];
		}
		$row[$l][]=$rango;

		$row[$l][]=$ff;
		$row[$l][]=format_excel(100*$ff/$line0total).'%';
		
		$row[$l][]=$ffv;
		$row[$l][]=format_excel(100*$ffv/$linevtotal).'%';
		
		$row[$l][]=round($ff/$rango,2);

		$row[$l][]=($ff)?format_excel($ffv/$ff):0;

	}

	$l++;//footer

	$ff=0;
	$ffv=0;

	$row[$l][]=array('Total Atenciones','class=nombre','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineSS[$la];
		$ff=$ff+$lineSS[$la];
		// $ffv=$ffv+$lineSSv[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$total_atenciones=$ff;
	$row[$l][]=($ff)?'100%':'';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=round($ff/$rango,2);
	$row[$l][]='';

	//end
	$seccion['vendedores']=$row;


	$l++;//footer
	$row[$l][]=array('Total Ventas','class=nombre','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineSSv[$la];
		// $ff=$ff+$lineSS[$la];
		$ffv=$ffv+$lineSSv[$la];
	}
	$row[$l][]=$rango;
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=$total_ventas=$ffv;
	$row[$l][]=($ffv)?'100%':'';
	$row[$l][]=round($ffv/$rango,2);
	$row[$l][]='';
	//end

	$l++;//footer
	$row[$l][]=array('Total Ventas/Atenciones','class=nombre','class=info');
	$row[$l][]="";
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]='';
	}
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]=format_excel($total_ventas/$total_atenciones);
	//end
	//
	$seccion['vendedores']=$row;




	if($_GET['format']=='excel'){

		echo render_excel(array($row));

	} else {
		echo '<style>.vendedores b { float:left; color:red; }</style>';
		echo render_table($row,'vendedores');
		
	}


}
