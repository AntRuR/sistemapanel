<?php
// prin($_GET);
// prin($SERVER);
// prin($_SERVER);
// exit();

$nobadge=($_GET['format']=='excel');

function badge($txt)
{	
	
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

list($from,$to)=explode("|",$_GET['fecha_creacion']);



//parse_str($_GET['filtro'], $get);



//prin("$first - $last");

$from=($from)?$from:$first;
$to=($to)?$to:$last;

$from=fixyfecha($from);
$to=fixyfecha($to);


$date='fecha_creacion';


// prin("$first - $last");

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

			$context='';

			if($_GET['id_item']!=''){

				$context="and id_item='".$_GET['id_item']."'";
				
			}

			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);




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




		}	


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





$ordby='ventas_items.id_canal';




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

// echo "$rango<br>";


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


// prin($from);
// prin($to);






$intervalos=crear_intervalos_semanas($from,$to);

// prin($intervalos);

// exit();

$VV=array();
$data = array();

// $usuarios2=select("id,nombre,apellidos","usuarios2","where 1");
// foreach($usuarios2 as $usu){
// 	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
// }
// $USU['']='no asignado';

$ttpos=[
	''=>'',
	'1'=>'Publicidad',
	'2'=>'Promoción de ventas',
	'3'=>'Relaciones Públicas',
];

$idtipo=-1;
$currentipo='nothing';

$gruposS=select("id,nombre,grupo","contacto_grupos","where visibilidad=1  order by id asc");
foreach($gruposS as $gru){
	$longrup=contar('contacto_canales','where visibilidad=1 and id_grupo='.$gru['id']);

	if($currentipo!=$ttpos[$gru['grupo']]){
		$currentipo=$ttpos[$gru['grupo']];
		$idtipo++;
		$ttposs[$idtipo]=[
			'name'=>$ttpos[$gru['grupo']],
			'long'=>$longrup,
		];
	} else {
		$ttposs[$idtipo]['long']=$ttposs[$idtipo]['long']+$longrup;
	}

	$subgruposS=select("id,nombre,id_grupo","contacto_subgrupos","where id_grupo=".$gru['id']." order by id asc");
	// prin($subgrupos);
	foreach($subgruposS as $gru2){
		$subgrupos[]=[
			'name'=>$gru2['nombre'],
			'long'=>contar('contacto_canales','where visibilidad=1 and id_subgrupo='.$gru2['id']),
		];

		$usuarios=select(
			"fecha_creacion,id,nombre,id_grupo,id_subgrupo",
			"contacto_canales",
			"where visibilidad=1 and id_subgrupo=".$gru2['id']." order by id desc"
		);

		// prin($usuarios);

		foreach($usuarios as $usu){

			$USU[$usu['id']]=$usu['nombre'];
			$USU_FECHA[$usu['id']]=fecha_formato($usu['fecha_creacion'],'6');
			$posgru[]=$usu['id'];
			// $ID_USU2[$usu['id']]=$usu['id_jefe'];
		}

	}

	$grupos[]=[
		'name' =>$gru['nombre'],
		'tipo' =>$gru['grupo'],
		'id'   =>$gru['id'],
		'long' =>$longrup,
		'ids'  =>$posgru,
	];

	unset($posgru);

}

// prin($ttposs);

// prin($grupos);






// prin($grupos);

// prin($subgrupos);




// prin($USU);
// prin($tipo);
// prin($intervalos);

$line0total=$linevtotal=0;	

$ioio=0;

foreach($intervalos as $tyi=>$vv){

		$llll=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"ventas_items",
					"left join contacto_canales on ventas_items.id_canal=contacto_canales.id 
					where 
					ventas_items.visibilidad!=0 
					and date(ventas_items.$date) between '".str_replace("|","' and '",$vv)."'
					$context
					group by ".$ordby." 
					order by ".$ordby." desc
					",
					0);

		// prin($llll);
		foreach($llll as $lll)
		{
			$line0[$lll['nombre']][$vv]=$lll['total'];
			$line0total+=$lll['total'];
		}

		// prin($line0);

		$vvvv=select(
					[
					"$ordby as nombre",
					"count(*) as total",
					],
					"ventas_items",
					"left join contacto_canales on ventas_items.id_canal=contacto_canales.id "
					."where 1 "
					."and ventas_items.visibilidad!=0 "
					."and ventas_items.id_status in (6,7,8,9) "
					// "and ventas_items.id_status in (6) ".
					."and date(ventas_items.$date) between '".str_replace("|","' and '",$vv)."'
					$context
					group by ".$ordby." 
					order by ".$ordby." desc

					",
					1);

		foreach($vvvv as $vvv)
		{
			$linev[$vvv['nombre']][$vv]=$vvv['total'];
			$linevtotal+=$lll['total'];
		}

		// prin($linev);

		$toto=substr($vv,11,10);
		$toaa=strtotime($toto);
		$toaa=strtotime("-1 day",$toaa);
		$toaa=date('Y-m-d',$toaa);

		$LLLanio[$vv]=substr($vv,0,4);
		$LLLmes[$vv] =$Array_Meses[substr($vv,5,2)*1];


		// if(substr($vv,0,7)==substr($toaa,0,7)){
		if($ioio!=substr($vv,0,7)){

			$ioio=substr($toaa,0,7);

			$renis=0;

		}

		$LLLnum[$vv] =++$renis;

		if(substr($vv,5,2)==substr($toaa,5,2)){

			$LLL[$vv]='Del '.(substr($vv,8,2)*1).' al '.(substr($toaa,8,2)*1).' de '.ucfirst($Array_Meses[substr($vv,5,2)*1]);

		} else {

			$LLL[$vv]='Del '.(substr($vv,8,2)*1).' de '.ucfirst($Array_Meses[substr($vv,5,2)*1]).' al '.(substr($toaa,8,2)*1).' de '.ucfirst($Array_Meses[substr($toaa,5,2)*1]);

		}
		if(sizeof($intervalos)==$tyi+1){
			// prin(sizeof($intervalos)."==".$tyi." ".$vv);
			$LLLnum2[$vv]='last';
		}


}

// prin($LLLanio);

// exit();
// prin($LLL);

// prin($linev);

// exit();
// prin($line);

// prin(end($LLLnum));

$rtyu=0;
foreach($LLLnum as $nnon=>$rtuo){
	$rtyu++;
	if($rtuo==1){
		if($firsttt)
		$LLLnum3[$firsttt]=$rtyu;		
		$firsttt=$nnon;
		$rtyu=0;
	}
	if($rtuo==1 and $prevfec){
		$LLLnum2[$prevfec]='last';
	}
	$prevfec=$nnon;
}
$LLLnum3[$firsttt]=++$rtyu;		

// prin($LLLnum);
// prin($LLLnum3);
// prin($LLLnum2);






$firscolumnsize=5;

// exit();
if(sizeof($line0)>0){




	unset($row);
	$l=0;//title
	$row[$l][]=array('Reporte de Publicidad',
					 'class=nombre colspan='.(sizeof($USU)-10+$firscolumnsize),
					 'class=success');

	$row[$l][]=array(
		($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=primero&format=excel">Exportar Excel</a>',
		'colspan=10');




	// TIPOS
	$l++;//header
	$row[$l][]=array('REGISTRO DE VISITANTES A SALA DE VENTAS E INDICADORES DE CONVERSION','class="head muted main" colspan='.$firscolumnsize,'');
	foreach($ttposs as $lin)
	{
		$row[$l][]=array($lin['name'],'class="nombre tiposheader" colspan='.$lin['long']
			// .( ($lin['tipo']=='')?' rowspan="2"':'' )
			);
	}


	$doscell['head']['grupos']='Medio en el que se invirtio';
	$doscell['head']['visitantes']='Visitantes';

	// GRUPOS
	$l++;//header
	$row[$l][]=array('','class="head muted" colspan='.$firscolumnsize,'');
	foreach($grupos as $lin)
	{
		$row[$l][]=array($lin['name'],'class="nombre grupoheader" colspan='.$lin['long']);
		$doscell[$lin['id']]['grupos']=$lin['name'];
		$doscell[$lin['id']]['visitantes']='';
	}



	// SUBGRUPOS
	$l++;//header
	$row[$l][]=array('','class="head muted" colspan='.$firscolumnsize,'');
	foreach($subgrupos as $lin)
	{
		$row[$l][]=array($lin['name'],'class="nombre subgrupoheader" colspan='.$lin['long']);
	}
		


	// CANALES
	$l++;//header
	$row[$l][]=array('Año','class="anio"','class="head muted"');
	$row[$l][]=array('Mes','class="mes"','class="head muted"');
	$row[$l][]=array('N°','class="ene"','class="head muted"');
	$row[$l][]=array('Fecha','class="fecha"','class="head muted fecha"');
	$row[$l][]=array('TOTAL DE VISITANTES A SALA DE VENTAS  EN LA SEMANA','class="visitas"','class="head muted" total_visitantes');
	foreach($USU as $iusu2=>$lin)
	{
		if(trim($USU[$iusu2],'class=nombre')=='') continue;
		// if(trim($USU2[$iusu2])=='') continue;

		$ff=0;
		$ffv=0;
		$row[$l][]=array('<div>'.$USU[$iusu2].'</div>','class="nombre vertical"');

	}


	/*
	foreach($intervalos as $ii=>$la)
		$row[$l][]=$LLL[$ii];

	$row[$l][]='Total días';
	$row[$l][]=array('Total Atenciones','colspan=2');
	$row[$l][]=array('Total Ventas','colspan=2');
	$row[$l][]='Prom Atenciones/Día';
	$row[$l][]='Ventas / Atenciones';
	*/

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


	// prin($line0);

	$lineSSsuma=0;
	$lineSSvsuma=0;


	if(1)
	foreach($intervalos as $ii=>$la)
	// foreach($line0 as $iusu2=>$lin)
	{


		// if(trim($USU[$iusu2],'class=nombre')=='') continue;

		// $l++;
		// if(trim($USU2[$iusu2])=='') continue;


		$ff=0;
		$ffv=0;



		// if($LLLnum[$la]=='1'){


		// 	$l++;
		// 	$row[$l][]=array('','class="nombre" colspan='. (sizeof($USU) + $firscolumnsize) );

		// }



		$l++;//header

		foreach($USU as $iusu2=>$lin)
		// foreach($line0 as $iusu2=>$lin)
		{

			$ff              =$ff  + $line0[$iusu2][$la];
			$ffv             =$ffv + $linev[$iusu2][$la];
			$lineSS[$la]     = $lineSS[$la] + $line0[$iusu2][$la];
			$lineSSv[$la]    = $lineSSv[$la] + $linev[$iusu2][$la];
			
			$line00[$iusu2]  = $line00[$iusu2] + $line0[$iusu2][$la];
			$line002[$iusu2] = $line002[$iusu2] + $linev[$iusu2][$la];

		}

		if( ($LLLnum[$la]==1) or ($_GET['format']=='excel') )
		{
			$row[$l][]=array($LLLanio[$la],'class="head muted" rowspan='.$LLLnum3[$la]);
			$row[$l][]=array($LLLmes[$la],'class="head muted" rowspan='.$LLLnum3[$la]);
		}

		$idmes=$LLLanio[$la].'-'.$LLLmes[$la];

		$doscell['head'][$idmes]=$LLLmes[$la];


		$row[$l][]   =array($LLLnum[$la],'','class="head muted"');
		
		$row[$l][]   =array($LLL[$la],'','class="head muted"');
		$row[$l][]   =array($lineSS[$la],'','class="head muted"');
		
		$lineSSsuma  =$lineSSsuma+$lineSS[$la];
		$lineSSvsuma =$lineSSvsuma+$lineSSv[$la];
		// $row[$l][]=$lineSS[$la];

		// $row[$l][]=array($USU[$iusu2],'class=nombre');
		// $row[$l][]=array($USU_FECHA[$iusu2],'class=nombre');
		// foreach($intervalos as $ii=>$la)
		
		foreach($USU as $iusu2=>$lin)
		// foreach($line0 as $iusu2=>$lin)
		{

			$row[$l][]=
			// (($linev[$iusu2][$la])?'<b>('.$linev[$iusu2][$la].')</b> ':'').
			(($line0[$iusu2][$la])?$line0[$iusu2][$la]:'');

		}

		if(0)
		{

		$row[$l][]=$rango;

		$row[$l][]=$ff;
		$row[$l][]=format_excel(100*$ff/$line0total).'%';
		
		$row[$l][]=$ffv;
		$row[$l][]=format_excel(100*$ffv/$linevtotal).'%';
		
		$row[$l][]=round($ff/$rango,2);

		$row[$l][]=($ff)?format_excel($ffv/$ff):0;

		}



		if($LLLnum2[$la]=='last'){



			$l++;
			$row[$l][]=array('VISITANTES A LA SALA DE VENTAS EN EL MES, cantidad','class="nombre" colspan='. ($firscolumnsize-1),'class="warning"' );
			$row[$l][]=$lineSSsuma;

			// $doscell[$grulin['id']]['visitantes']=$lineSSsuma;

			foreach($USU as $iusu2=>$lin){ $row[$l][]=($line00[$iusu2])?$line00[$iusu2]:''; }

					
			// $l++;
			// $row[$l][]=array('','class="nombre" colspan='. ($firscolumnsize-1),'class="warning"' );
			// $row[$l][]=$lineSSsuma;
			// $doscell[$grulin['id']]['visitantes']=$lineSSsuma;
			foreach($grupos as $grulin)
			{

				$sugru=0;
				foreach($grulin['ids'] as $lin){	$sugru=$sugru+$line00[$lin]; }
				// $row[$l][]=array($sugru,'class="nombre grupoheader" colspan='.$grulin['long']);
				$doscell[$grulin['id']][$idmes]=$sugru;

			}



			$l++;
			$row[$l][]=array('VISITANTES A LA SALA DE VENTAS EN EL MES, %','class="nombre" colspan='. ($firscolumnsize-1),'class="warning"' );
			$row[$l][]='100%';
			foreach($USU as $iusu2=>$lin){ $row[$l][]=($line00[$iusu2])?format_excel(100*$line00[$iusu2]/$lineSSsuma).'%':''; $line00[$iusu2]=0; }



			$l++;
			$row[$l][]=array('SEPARACIONES EN EL MES POR TIPO DE MEDIO, cantidad','class="nombre" colspan='. ($firscolumnsize-1),'class="success"' );
			$row[$l][]=$lineSSvsuma;
			foreach($USU as $iusu2=>$lin){ $row[$l][]=($line002[$iusu2])?$line002[$iusu2]:''; }


			$l++;
			$row[$l][]=array('SEPARACIONES EN EL MES POR TIPO DE MEDIO, %','class="nombre" colspan='. ($firscolumnsize-1),'class="success"' );
			$row[$l][]='100%';
			foreach($USU as $iusu2=>$lin){ $row[$l][]=($line002[$iusu2])?format_excel(100*$line002[$iusu2]/$lineSSvsuma).'%':''; $line002[$iusu2]=0; }


			$l++;
			$row[$l][]=array('INDICE DE CONVERSION DE VISITANTES A CLIENTES EN EL MES','class="nombre" colspan='. ($firscolumnsize-1) );
			$row[$l][]=($lineSSsuma)?format_excel($lineSSsuma/$lineSSvsuma):'0';
			$row[$l][]=array('','class="nombre" colspan='. (sizeof($USU)));

			$l++;
			$row[$l][]=array('RELACION VISITANTE/SEPARACION, DEL MES','class="nombre" colspan='. ($firscolumnsize-1) );
			$row[$l][]=($lineSSvsuma)?format_excel(100*$lineSSvsuma/$lineSSsuma).'%':'';
			$row[$l][]=array('','class="nombre" colspan='. (sizeof($USU)));


			$lineSSsuma=0;

			$lineSSvsuma=0;

			$l++;
			$row[$l][]=array( ($_GET['format']=='excel')?'':'&nbsp;' ,'class="nombre" colspan='. (sizeof($USU) + $firscolumnsize)) ;

		}


	}

	$doscell['totales']['grupos']='Totales';

	foreach($doscell as $ccc=>$celll){
		if($ccc=='head' or $ccc=='totales' ) continue;
		foreach($celll as $cccc=>$cellll){
			if($cccc=='grupos' or $cccc=='visitantes') continue;
			$doscell[$ccc]['visitantes']+=$cellll;
			$doscell['totales']['visitantes']+=$cellll;
			$doscell['totales'][$cccc]+=$cellll;
		}
	}

	// prin($doscell);

	// if(0){

	// $l++;//footer

	// $ff=0;
	// $ffv=0;

	// $row[$l][]=array('Total Atenciones','class=nombre','class=info');
	// // $row[$l][]="";
	// foreach($intervalos as $ii=>$la)
	// {
	// 	$row[$l][]=$lineSS[$la];
	// 	$ff=$ff+$lineSS[$la];
	// 	// $ffv=$ffv+$lineSSv[$la];
	// }
	// $row[$l][]=$rango;
	// $row[$l][]=$total_atenciones=$ff;
	// $row[$l][]=($ff)?'100%':'';
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]=round($ff/$rango,2);
	// $row[$l][]='';

	// //end
	// $seccion['primera']=$row;


	// $l++;//footer
	// $row[$l][]=array('Total Ventas','class=nombre','class=info');
	// // $row[$l][]="";
	// foreach($intervalos as $ii=>$la)
	// {
	// 	$row[$l][]=$lineSSv[$la];
	// 	// $ff=$ff+$lineSS[$la];
	// 	$ffv=$ffv+$lineSSv[$la];
	// }
	// $row[$l][]=$rango;
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]=$total_ventas=$ffv;
	// $row[$l][]=($ffv)?'100%':'';
	// $row[$l][]=round($ffv/$rango,2);
	// $row[$l][]='';
	// //end

	// $l++;//footer
	// $row[$l][]=array('Total Ventas/Atenciones','class=nombre','class=info');
	// // $row[$l][]="";
	// foreach($intervalos as $ii=>$la)
	// {
	// 	$row[$l][]='';
	// }
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]='';
	// $row[$l][]=format_excel($total_ventas/$total_atenciones);
	// //end
	// //
	// $seccion['primero']=$row;


	// }

	// $seccion['primero']=array($row,'reporte_uno');

	$seccion['primero']=$row;


	unset($row);

	$l=0;//title
	$row[$l][]=array('EVOLUCION DEL NUMERO DE VISITANTES A SALA DE VENTAS',
					 'class=nombre colspan='.(sizeof($doscell['head'])+1),
					 'class=success');

	// $row[$l][]=array(
	// 	($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=segundo&format=excel">Exportar Excel</a>',
	// 	'colspan=5');


	foreach($doscell as $ccc=>$celll){
		$l++;
		foreach($celll as $cccc=>$cellll){
			
			if($cccc=='grupos')
				$colum='class=grupos';
			elseif($cccc=='visitantes')
				$colum='class=visitantes';
			else
				$colum='';				

			if($ccc=='head'){
				if($cccc!='grupos'){
					$Dmeses[$cccc]['head']=$cellll;
				}
				if($cccc=='visitantes'){
					$row[$l][]=array(strtoupper($cellll),$colum.' colspan=2','class=head');
					// $row[$l][]=array('%',$colum,'class=head');					
				} else {
					$row[$l][]=array(strtoupper($cellll),$colum,'class=head');
				}
			}
			elseif($ccc=='totales'){
				if($cccc!='grupos'){
					$Dmeses[$cccc]['totales']=$cellll;
				}
				if($cccc=='visitantes'){
					$row[$l][]=array($cellll,$colum,'class=head');
					$row[$l][]=array('100%',$colum,'class=head');
				} else {
					$row[$l][]=array($cellll,$colum,'class=head');
				}
			}
			else	{
				if($cccc!='grupos')
					$Dmeses[$cccc]['grupos'][$ccc]=$cellll;
				else
					$Dgrupos[$ccc]=$cellll;
				if($cccc=='visitantes'){
					$row[$l][]=array($cellll,$colum);
					$row[$l][]=array(format_excel(100*$cellll/$doscell['totales']['visitantes'])."%",$colum);
				} else {
					if($cccc=='grupos')
						$row[$l][]=array($cellll,'class="grupos line'.$ccc.'"');
					else
						$row[$l][]=array($cellll,$colum);
				}
				$todasrows[]=$cellll;
			}

		}
	}
	// prin($totalvisitas);
	// prin($Dgrupos);

	foreach($Dmeses as $ddff=>$Dmes){
		if($Dmes['totales']==0) unset($Dmeses[$ddff]);
	}

	$maxima=max($todasrows);
	// prin($maxima);

	// prin($doscell);

	// prin($Dmeses);


	// $seccion['segundo']=array($row,'reporte_dos');
	$seccion['segundo']=$row;

	if($_GET['format']=='excel'){

		// echo render_excel(array($row));
		// echo render_excel(array($row));
		echo render_excel($seccion);

	} else {

		echo '<style>
		.vendedores b { float:left; color:red; } 
		td.main { min-width: 480px; }
		td.anio { min-width: 60px; }
		td.mes { min-width: 100px; }
		td.ene { min-width: 40px; }
		td.fecha { min-width: 222px; }
		td.visitas { max-width: 50px; }
		tr.head td.grupos { min-width: 200px; }
		td.grupos,td.visitantes { font-weight: bold; text-transform:uppercase; }
		td.grupos { text-align:left !important; }
		#graph { height;auto;margin-top:50px; padding-left:70px; padding-right:70px; background-color:#faf9f9;
		padding-top:20px; padding-bottom:50px; margin-bottom:50px; 
}
		#graph .ejes { border-left:1px solid black; border-bottom:1px solid black;
		margin-right:0px;
		height:300px;}
		#graph .equis { width:100%; height:40px; }
		#graph .ejes .bloque, #graph .equis .bloque {
		width:140px;
		}
		#graph .ejes .bloque {  display:inline-block; height:100%; }
		#graph .ejes .bloque .linea { width:9%; display:inline-block; background:#ccc; vertical-align:bottom; margin-left:1px; }
		#graph .equis .bloque { display:inline-block; font-weight:bold; text-transform:uppercase; }
		.line1 { background-color:#2196f3 !important; }
		.line2 { background-color:#e91e63 !important; color:white; }
		.line3 { background-color:#9c27b0 !important; color:white; }
		.line4 { background-color:#607d8b !important; color:white; }
		.line5 { background-color:#ff9800 !important; }
		.line6 { background-color:#8bc34a !important; }
		.line7 { background-color:#009688 !important; color:white; }
		.line8 { background-color:#00bcd4 !important; }
		.line9 { background-color:#ccc !important; }
		.line10 { background-color:#cf6a27 !important; }
		#graph .leyenda .cuadradito { width: 10px; height:10px; display:inline-block; margin-right:10px; }
		</style>';

		echo '<a class="btn" href="custom/productos_ventas.php#grafico">Gráfico</a>';
		echo '<a class="btn" href="custom/productos_ventas.php#resumen">Resúmen</a>';
		echo '<a class="btn" href="custom/productos_ventas.php#detallado">Detallado</a>';

		echo '
		<div id="graph" style="width:'.(150*sizeof($Dmeses)).'px;">
			<div id="grafico"><h6>GRÁFICO DE EVOLUCION DEL NUMERO DE VISITANTES A SALA DE VENTAS</h6></div>';
			echo '<div class="ejes" >';
			foreach($Dmeses as $Dmes){
				echo '<div class="bloque">';
					foreach($Dmes['grupos'] as $rrr=>$Dgrupo){
					echo '<div class="linea line'.$rrr.'"
					title="'.$Dgrupos[$rrr].' : '.$Dgrupo.' visitas"
					style="height:'.(100*$Dgrupo/$maxima).'%;"
					>';
					echo '</div>';
					}
				echo '</div>';
			}
			echo '</div>';
			echo '<div class="equis">';
			foreach($Dmeses as $Dmes){
				echo '<div class="bloque">';
				echo $Dmes['head'];
				echo '</div>';
			}
			echo '</div>';

		echo '<div class="leyenda">';		
		foreach($Dgrupos as $rrr=>$Dgrupo){
		echo '<div>';
		echo '<div class="cuadradito line'.$rrr.'">';
		echo '</div>';
		echo $Dgrupo;
		echo '</div>';
		}
		echo '</div>';

		echo '</div>
		';

		echo '<div id="resumen"><h6>Resúmen</h6></div>';
		echo render_table($seccion['segundo']);

		echo '<div id="detallado"><h6>Detallado</h6></div>';
		echo render_table($seccion['primero']);

		// echo render_graph($doscell);

		// echo render_table($row,'primero');
		
	}


}
