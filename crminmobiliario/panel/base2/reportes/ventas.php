<?php
/*
var_dump($SERVER);
var_dump($_SERVER);
exit();
*/

$_GET['ob']='VENTAS_ITEMS';

list($date,$from,$to)=explode("|",$_GET['f']);


$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

//parse_str($_GET['filtro'], $get);

//prin($OBJ);
$first=dato('min('.$date.')',$OBJ['tabla'],"where ".$date."!=0",0);
$first=(!$first)?date("Y-m-d"):$first;
$first=substr($first,0,10);
//$last =dato($querie['campo'],$tbl,"where 1 order by ".$querie['campo']." desc limit 0,1");
$last=dato('max('.$date.')',$OBJ['tabla'],"where ".$date."!=0",0);
$last=(!$last)?date("Y-m-d"):$last;
$last=substr($last,0,10);

//prin("$first - $last");

$from=($from)?$from:$first;
$to=($to)?$to:$last;

$from=fixyfecha($from);
$to=fixyfecha($to);



function num2alpha($n)
{
	for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
		$r = chr($n%26 + 0x41) . $r;
	return $r;
}

function getrango($n){
	$i=0;
	foreach($n as $b=>$c){
		if($i==0){
			$uno=$b;
		}
		if($i==sizeof($n)-1){
			$dos=$b;
		} 
		$i++;
	}
	return $uno.":".$dos;
}

function render_table($row,$class=''){
	$ht='';
	$ht.='<table class="reporte table table-striped table-condensed table-bordered table-hover '.$class.'">';
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

function render_excel($row,$titulo='Reporte'){

	global $from;
	global $to;

	//DETERMINAR COLUMNA MAXIMA
	foreach($row as $rl=>$rline)
		foreach($rline as $rc=>$cell)
			$cols[]=$rc;

	$maxcol=max($cols);
	// echo $maxfil;exit();

	$col_inicial=1;
	$row_inicial=1;

	foreach($row as $rl=>$rline)
	{
		$fil=''; $trAtrr=''; $extra=0;
		for($i=0;$i+$extra<=$maxcol;$i++)
		{

			$cell=$rline[$i];

			$col= $col_inicial + $i + $extra;
			$fil= $row_inicial + $rl + 1 ;

			if(!is_array($cell))
			{
				
				$celll=$cell;

			} else {
				
				$celll=$cell[0];

				if(enhay($cell[1],'colspan')){  
					$parts=explode("colspan=",$cell[1]." "); $parts=explode(" ",$parts[1]); $colspan=$parts[0]; $extra=$extra+$colspan -1; 
					$cells['merges'][]=num2alpha($col).$fil.":".num2alpha( $col_inicial + $i + $extra ).$fil; 
				}
				if(enhay($cell[2],'success')){  $success[]=num2alpha($col).$fil.":".num2alpha($maxcol+$col_inicial).$fil; }
				if(enhay($cell[2],'info')){ 	$info[]=num2alpha($col).$fil.":".num2alpha($maxcol+$col_inicial).$fil; }
				if(enhay($cell[2],'warning')){  $warning[]=num2alpha($col).$fil.":".num2alpha($maxcol+$col_inicial).$fil; }
			}

			$cells['items'][num2alpha($col).$fil]=strip_tags(str_replace("<br>","\\n",$celll));
			$cells['filas'][$fil][]=num2alpha($col).$fil;
		}

		//$ht.="<tr ".$trAtrr.">$fil</tr>";
	}

	// prin($cells);exit();




	require_once 'lib/PHPExcel.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$Autor="CRM INMOBILIARIO";

	// Set properties
	$objPHPExcel->getProperties()->setCreator($Autor)
	->setLastModifiedBy($Autor)
	->setTitle($titulo. " Fecha : ".date("d-m-Y"))
	->setSubject($titulo. " Fecha : ".date("d-m-Y"))
	->setDescription("Archivo generado por el Panel de administracion ".$titulo. " Fecha : ".date("d-m-Y"))
	->setKeywords($titulo. " Fecha : ".date("d-m-Y"))
	->setCategory($titulo);

	$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
	$objPHPExcel->getDefaultStyle()->getFont()->setSize(9);
	// $objPHPExcel->getDefaultStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);


	//INSERT VALUES IN CELLS

	foreach($cells['items'] as $key=>$item){
		$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
	}


	//PRIMERA COLUMNA MAS ANCHA
	for($i=0;$i<=$maxcol;$i++)
	{
		$letra=num2alpha($i+$col_inicial);
		if($i==0)
			$objPHPExcel->getActiveSheet()->getColumnDimension($letra)->setWidth(20);
		else	
			$objPHPExcel->getActiveSheet()->getColumnDimension($letra)->setWidth(15);

	}	 


	// prin($cells['merges']); exit();
	
	//MERGES CENTRADOS
	foreach($cells['merges'] as $merge){
		$objPHPExcel->getActiveSheet()->mergeCells($merge);
		$objPHPExcel->getActiveSheet()->getStyle($merge)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	}

	// // prin($cells['items']); exit();
	
	//MARCO
	$objPHPExcel->getActiveSheet()->getStyle(getrango($cells['items']))->applyFromArray(
			array('borders' => array(
					'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
			),
					// 'fill' 	=> array(
					// 		'type'		=> PHPExcel_Style_Fill::FILL_SOLID
					// ),
			)
	);


	//CEBRA
	$m=0;
	foreach($cells['filas'] as $fila){
		$m++;
		if($m%2==0){
			$Filas[]=$fila[0].":".end($fila);
		}
	}
	foreach($Filas as $Fila){

		$objPHPExcel->getActiveSheet()->getStyle($Fila)->applyFromArray(
				array(
						'fill' 	=> array(
							// 'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '00F9F9F9')
						)
				)
		);
	}

	//FORMATEANDO FILAS
	foreach($warning as $Line)
	$objPHPExcel->getActiveSheet()->getStyle($Line)->applyFromArray(
			array(
					'borders' => array(
							'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
					),					
					'font' => array(
							'bold' => true,
							'color' => array('argb' => '000000000')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '00FCF8E3')
					)
			)
	);
	foreach($info as $Line)
	$objPHPExcel->getActiveSheet()->getStyle($Line)->applyFromArray(
			array(
					'borders' => array(
							'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
					),					
					'font' => array(
							'bold' => true,
							'color' => array('argb' => '000000000')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '00D9EDF7')
					)
			)
	);

	foreach($success as $Line)
	$objPHPExcel->getActiveSheet()->getStyle($Line)->applyFromArray(
			array(
					'borders' => array(
							'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
							'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
					),				
					'font' => array(
							'bold' => true,
							'color' => array('argb' => '000000000')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '00D0E9C6')
					)
			)
	);


		
	//GENERAR HOJA
	$objPHPExcel->getActiveSheet()->setTitle('Reporte');

	//GENERAR ARCHIVO

	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Reporte '.date("d-m-Y").'.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit();

}


$WHERE="1";
// $WHERE="id in(2,4,6)";
$projects=select("id,nombre","productos_items","where $WHERE");
// prin($projects);



$ordby='id_usuario';

if($date!=''){
	$where="where visibilidad!=0 and date($date) between '$from' and '$to'";
} else {
	$where="where visibilidad!=0 ";
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

$fromD=substr($from,8,2);
$toD=substr($to,8,2);

if($rango<=30){
	$op=array('D'); //1o2
} elseif($rango>30 and $rango<=90){
	$op=array('D','M'); //2,3,4
} elseif($rango>90 and ( ($rango<=366 and $bisi=1) or ($rango<=365 and $bisi=0) ) ){
	$op=array('M','D'); //2,3,4
} elseif($rango>365){
	$op=array('A','M'); //2,3,4
}


$tipo=$op['0'];
$intervalos=crear_intervalos($tipo,$from,$to);

$VV=array();
$data = array();

$usuarios2=select("id,nombre,apellidos","usuarios2","where 1");
foreach($usuarios2 as $usu){
	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
}

$usuarios=select("id,nombre,apellidos,id_jefe","usuarios","where 1 order by id_jefe");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	$ID_USU2[$usu['id']]=$usu['id_jefe'];
}



$seccion=array();
// prin($projects);
foreach($projects as $iusu2=>$lin2)
{

	$suma=$unidades=array();

	$_items=array(1,2,3,4);
	$_tipos=array('departamentos','estacionamientos','depositos');

	foreach($_tipos as $_tipo){
		foreach($_items as $_item){
			$suma[$_tipo][$_item]=$unidades[$_tipo][$_item]=0;
		}	
	}

	$num_depas=contar("productos_items_items","where id_item=".$lin2['id']);
	
	$num_estac=contar("productos_estacionamientos_items_items","where id_item=".$lin2['id']);
	
	$num_depos=contar("productos_depositos_items_items","where id_item=".$lin2['id']);

	if($num_depas*1+$num_estac*1+$num_depos*1==0) continue;

	$depas=select("pvpromocion,id_status","productos_items_items","where id_item=".$lin2['id'],0);
	foreach($depas as $item){
		$suma['departamentos'][$item['id_status']]+=$item['pvpromocion'];
		$unidades['departamentos'][$item['id_status']]++;

	}
	
	$estacionamientos=select("precio,id_status","productos_estacionamientos_items_items","where id_item=".$lin2['id']);
	foreach($estacionamientos as $item){
		$suma['estacionamientos'][$item['id_status']]+=$item['precio'];
		$unidades['estacionamientos'][$item['id_status']]++;		
	}

	$depositos=select("precio,id_status","productos_depositos_items_items","where id_item=".$lin2['id']);
	foreach($depositos as $item){ 
		$suma['depositos'][$item['id_status']]+=$item['precio'];
		$unidades['depositos'][$item['id_status']]++;		
	}

	unset($row);
	$l=0;//title
	// if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>VENTAS EN PROYECTO '.strtoupper(dato('nombre','productos_items','where id='.$lin2['id'])).' DESDE EL '.$fromD.'-'.$fromM.'-'.$fromY.' AL '.$toD.'-'.$toM.'-'.$toY.'</b>','class=nombre colspan='. (($_GET['format']=='excel')?'10':'8') ,'class=success');

	$row[$l][]=($_GET['format']=='excel')?'':array('<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion='.$iusu2.'&format=excel">Exportar Excel</a>','colspan="2" style="text-align:center;"');

	$l++;//title
	// if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>PRODUCTO</b>','class=nombre','class=info');
	$row[$l][]=array('<b>TOTALES</b>','class=nombre');
	
	$row[$l][]=array('<b>DESEMBOLSADO Y FACTURADO</b>','class=nombre colspan=2');
	
	$row[$l][]=array('<b>POR DESEMBOLSAR</b>','class=nombre colspan=2');

	$row[$l][]=array('<b>EN PROCESO DE VENTA</b>','class=nombre colspan=2');

	$row[$l][]=array('<b>POR VENDER</b>','class=nombre colspan=2');

	$l++;

	$row[$l][]=array('-','class=nombre','class=info');
	$row[$l][]=array('-','class=nombre');

	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');
	
	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');

	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');

	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');		



	$sunm['totales']=0;

	$l++;//first line
	$row[$l][]=array('Departamento','class=nombre','class="head muted"');

	$sunm['totales']+=$row[$l][]=$num_depas;
	
	$tipo='departamentos';
	$row[$l][]=$unidades[$tipo]['4'];
	$row[$l][]=$suma[$tipo]['4'];
	$row[$l][]=$unidades[$tipo]['3'];
	$row[$l][]=$suma[$tipo]['3'];
	$row[$l][]=$unidades[$tipo]['2'];
	$row[$l][]=$suma[$tipo]['2'];
	$row[$l][]=$unidades[$tipo]['1'];
	$row[$l][]=$suma[$tipo]['1'];


	$l++;//second line
	$row[$l][]=array('Estacionamiento','class=nombre','class="head muted"');

	$sunm['totales']+=$row[$l][]=$num_estac;

	$tipo='estacionamientos';
	$row[$l][]=$unidades[$tipo]['4'];
	$row[$l][]=$suma[$tipo]['4'];
	$row[$l][]=$unidades[$tipo]['3'];
	$row[$l][]=$suma[$tipo]['3'];
	$row[$l][]=$unidades[$tipo]['2'];
	$row[$l][]=$suma[$tipo]['2'];
	$row[$l][]=$unidades[$tipo]['1'];
	$row[$l][]=$suma[$tipo]['1'];


	$l++;//third line
	$row[$l][]=array('Depósito','class=nombre','class="head muted"');

	$sunm['totales']+=$row[$l][]=$num_depos;

	$tipo='depositos';
	$row[$l][]=$unidades[$tipo]['4'];
	$row[$l][]=$suma[$tipo]['4'];
	$row[$l][]=$unidades[$tipo]['3'];
	$row[$l][]=$suma[$tipo]['3'];
	$row[$l][]=$unidades[$tipo]['2'];
	$row[$l][]=$suma[$tipo]['2'];
	$row[$l][]=$unidades[$tipo]['1'];
	$row[$l][]=$suma[$tipo]['1'];



	$l++;//third line
	$row[$l][]=array('<b>TOTAL EN SOLES</b>','class=nombre','class=warning');	

	$tipo_cambio='2.85';


	$suma_soles['4']=$suma['departamentos']['4']+$suma['estacionamientos']['4']+$suma['depositos']['4'];
	$suma_soles['3']=$suma['departamentos']['3']+$suma['estacionamientos']['3']+$suma['depositos']['3'];
	$suma_soles['2']=$suma['departamentos']['2']+$suma['estacionamientos']['2']+$suma['depositos']['2'];
	$suma_soles['1']=$suma['departamentos']['1']+$suma['estacionamientos']['1']+$suma['depositos']['1'];

	$suma_soles['total']=$suma_soles['1']+$suma_soles['2']+$suma_soles['3']+$suma_soles['4'];

	$suma_proyectos['total']+=$row[$l][]=$suma_soles['total'];
	$row[$l][]='';
	$suma_proyectos['4']+=$row[$l][]=$suma_soles['4'];
	$row[$l][]='';
	$suma_proyectos['3']+=$row[$l][]=$suma_soles['3'];
	$row[$l][]='';
	$suma_proyectos['2']+=$row[$l][]=$suma_soles['2'];
	$row[$l][]='';
	$suma_proyectos['1']+=$row[$l][]=$suma_soles['1'];


	$l++;//third line
	$row[$l][]=array('<b>TOTAL EN DÓLARES</b>','class=nombre');	

	$row[$l][]=$tipo_cambio*$suma_soles['total'];
	$row[$l][]='-00';
	$row[$l][]=$tipo_cambio*$suma_soles['4'];
	$row[$l][]='-00';
	$row[$l][]=$tipo_cambio*$suma_soles['3'];
	$row[$l][]='-00';
	$row[$l][]=$tipo_cambio*$suma_soles['2'];
	$row[$l][]='-00';
	$row[$l][]=$tipo_cambio*$suma_soles['1'];

	$l++;//third line
	$row[$l][]=array('<b>Estado de Alcance</b>','class=nombre');	

	$row[$l][]='100%';
	$row[$l][]='';
	$row[$l][]=round(100*($suma_soles['4']/$suma_soles['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_soles['3']/$suma_soles['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_soles['2']/$suma_soles['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_soles['1']/$suma_soles['total']))."%";



	$seccion[$iusu2]=$vendes[]=$row;

}


//RESUMEN

	unset($row);
	$l=0;//title
	// if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>RESÚMEN DE VENTAS DEL PORTAFOLIO DE PROYECTOS DESDE EL '.$fromD.'-'.$fromM.'-'.$fromY.' AL '.$toD.'-'.$toM.'-'.$toY.'</b>','class=nombre colspan=8','class=success');

	$row[$l][]=($_GET['seccion']!='')?'':array('<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=resumen&format=excel">Exportar Excel</a>','colspan="2" style="text-align:center;"');



	$l++;

	$row[$l][]=array('<b></b>','class=nombre ','class=info');
	$row[$l][]=array('<b>TOTALES</b>','class=nombre');

	$row[$l][]=array('UND','class=nombre','class=info');
	$row[$l][]=array('PRECIO','class=nombre');
	
	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');

	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');

	$row[$l][]=array('UND','class=nombre');
	$row[$l][]=array('PRECIO','class=nombre');	


	$l++;//third line
	$row[$l][]=array('<b>TOTAL EN SOLES</b>','class=nombre','class=warning');	


	$row[$l][]=$suma_proyectos['total'];
	$row[$l][]='';
	$row[$l][]=$suma_proyectos['4'];
	$row[$l][]='';
	$row[$l][]=$suma_proyectos['3'];
	$row[$l][]='';
	$row[$l][]=$suma_proyectos['2'];
	$row[$l][]='';
	$row[$l][]=$suma_proyectos['1'];


	$l++;//third line
	$row[$l][]=array('<b>TOTAL EN DÓLARES</b>','class=nombre');	

	$row[$l][]=$tipo_cambio*$suma_proyectos['total'];
	$row[$l][]='';
	$row[$l][]=$tipo_cambio*$suma_proyectos['4'];
	$row[$l][]='';
	$row[$l][]=$tipo_cambio*$suma_proyectos['3'];
	$row[$l][]='';
	$row[$l][]=$tipo_cambio*$suma_proyectos['2'];
	$row[$l][]='';
	$row[$l][]=$tipo_cambio*$suma_proyectos['1'];

	$l++;//third line
	$row[$l][]=array('<b>Estado de Alcance</b>','class=nombre');	

	$row[$l][]='100%';
	$row[$l][]='';
	$row[$l][]=round(100*($suma_proyectos['4']/$suma_proyectos['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_proyectos['3']/$suma_proyectos['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_proyectos['2']/$suma_proyectos['total']))."%";
	$row[$l][]='';
	$row[$l][]=round(100*($suma_proyectos['1']/$suma_proyectos['total']))."%";



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
}
