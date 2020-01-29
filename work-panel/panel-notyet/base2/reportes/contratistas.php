<?php

// prin($_GET);
// exit();
/*
var_dump($SERVER);
var_dump($_SERVER);
exit();
*/




$_GET['ob']='PRODUCTOS_PROGRAMACION_SUBITEMS';

list($date,$from,$to)=explode("|",$_GET['f']);





$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['ob']]);

// //parse_str($_GET['filtro'], $get);

// //prin($OBJ);
// $first=dato('min('.$date.')',$OBJ['tabla'],"where ".$date."!=0",0);
// $first=(!$first)?date("Y-m-d"):$first;
// $first=substr($first,0,10);
// //$last =dato($querie['campo'],$tbl,"where 1 order by ".$querie['campo']." desc limit 0,1");
// $last=dato('max('.$date.')',$OBJ['tabla'],"where ".$date."!=0",0);
// $last=(!$last)?date("Y-m-d"):$last;
// $last=substr($last,0,10);

// //prin("$first - $last");

// $from=($from)?$from:$first;
// $to=($to)?$to:$last;

// $from=fixyfecha($from);
// $to=fixyfecha($to);


// function render_table_old($row){
// 	$ht='';
// 	$ht.='<table class="reporte table table-striped table-condensed table-bordered table-hover">';
// 	foreach($row as $rl=>$rline)
// 	{
// 		$fil=''; $trAtrr='';
// 		foreach($rline as $rc=>$cell)
// 		{
// 			if(!is_array($cell))
// 				$fil.="<td>$cell</td>";
// 			else
// 			{
// 				$fil.='<td '.$cell[1].'>'.$cell[0].'</td>';
// 				if(isset($cell[2])) $trAtrr=$cell[2];
// 			}
// 		}
// 		$ht.="<tr ".$trAtrr.">$fil</tr>";
// 	}
// 	$ht.='</table>';
// 	return $ht;
// }

function render_excel_old($row){


	global $from;
	global $to;

	$titulo='programación';

	$title["c2"]="Reporte de Programación de tareas";

	foreach($row as $rl=>$rline)
	{
		$fil=''; $trAtrr='';
		foreach($rline as $rc=>$cell)
		{
			$col=$rc+2;
			$fil=$rl+4;

			if($rc==0) $columnas[]=num2alpha($col);

			$celll=(!is_array($cell))?$cell:$cell[0];

			if($rl==1)
				$firstline[num2alpha($col). ( $fil - 1 )]=strip_tags($celll);

			if($rl==1)
				$header[num2alpha($col).$fil]=strip_tags($celll);

			if($rl==sizeof($row)-1)
				$footer[num2alpha($col).$fil]=strip_tags($celll);

			$cells['items'][num2alpha($col).$fil]=strip_tags($celll);
			$cells['filas'][$fil][]=num2alpha($col).$fil;
		}

		//$ht.="<tr ".$trAtrr.">$fil</tr>";
	}

	$m=0;
	foreach($cells['filas'] as $fila){
		$m++;
		if($m%2==0){
			$Filas[]=$fila[0].":".end($fila);
		}
	}


	/*
	foreach($titles as $i=>$tit){
		$i2=$i0+$i;
		$title['items']['B'.$i2]=$tit;
	}
	$t`itle['rango']=getrango($title['items']);
	*/




	require_once 'lib/PHPExcel.php';

	// Create new PHPExcel object
	$objPHPExcel = new PHPExcel();

	$Autor="Guillermo Lozán";

	// Set properties
	$objPHPExcel->getProperties()->setCreator($Autor)
	->setLastModifiedBy($Autor)
	->setTitle("Reporte de ".$titulo. " Fecha : ".date("d-m-Y"))
	->setSubject("Reporte de ".$titulo. " Fecha : ".date("d-m-Y"))
	->setDescription("Reporte generado por el Panel de administracion Reporte de ".$titulo. " Fecha : ".date("d-m-Y"))
	->setKeywords("Reporte de ".$titulo. " Fecha : ".date("d-m-Y"))
	->setCategory("Reporte de ".$titulo);

	$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
	$objPHPExcel->getDefaultStyle()->getFont()->setSize(8);
	$objPHPExcel->getDefaultStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(1);


	foreach($columnas as $letra){
		$objPHPExcel->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
	}

	/*
	foreach($title['items'] as $key=>$item){
		$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
	}

	$objPHPExcel->getActiveSheet()->getStyle($title['rango'])->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'size' => 11
					)
			)
	);
	*/




	foreach($cells['items'] as $key=>$item){
		$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
	}

	$objPHPExcel->getActiveSheet()->getStyle(getrango($cells['items']))->applyFromArray(
			array('borders' => array(
					'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
					'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
			),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID
					),
			)
	);


	foreach($Filas as $Fila){
		$objPHPExcel->getActiveSheet()->getStyle($Fila)->applyFromArray(
				array('fill' 	=> array(
						'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
						'color'		=> array('rgb' => 'E9F4F8')
				)
				)
		);
	}

	$objPHPExcel->getActiveSheet()->getStyle(getrango($header))->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'color' => array('argb' => 'FFFFFFFFF')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '444444444')
					)
			)
	);
	$objPHPExcel->getActiveSheet()->getStyle(getrango($footer))->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'color' => array('argb' => 'FFFFFFFFF')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => '666666666')
					)
			)
	);

	$objPHPExcel->getActiveSheet()->getStyle(getrango($firstline))->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'color' => array('argb' => '000000000')
					),
					'fill' 	=> array(
							'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
							'color'		=> array('argb' => 'EEEEEEEEE')
					)
			)
	);

	$objPHPExcel->getActiveSheet()->setCellValue("c2","Reporte de Tareas : desde $from hasta $to");
	$objPHPExcel->getActiveSheet()->getStyle(getrango($title))->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'size' => 11
					)
			)
	);

	$objPHPExcel->getActiveSheet()->setTitle('Reporte de programaciones');


	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Reporte de atenciones '.date("d-m-Y").'.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit();
}






$usuarios2=select("id,nombre","proveedores","where 1");
// prin($usuarios2);
foreach($usuarios2 as $usu){

	$line0=select(
		"id_item_item,id_operacion,horas,costo,fecha_inicio,fecha_fin,fecha_cierre,id_receptor,id_grupo",
		"productos_programacion_subitems",
		"where 1 
		and id_grupo is not null 
		and id_operacion is not null 
		and id_item_item is not null 
		and visibilidad=1 
		and fecha_creacion between '$from' and '$to'
		and id_receptor=".$usu['id']."
		order by fecha_creacion asc ",0,array(
			'vin'          =>array('dato'=>array('vin','productos_items_items','where id={id_item_item}')),
			'operacion'    =>array('dato'=>array('nombre','programaciones_operaciones','where id={id_operacion}')),
			'inicio'       =>array('fecha'=>array('fecha'=>'{fecha_inicio}','formato'=>'0b')),
			'termino'      =>array('fecha'=>array('fecha'=>'{fecha_fin}','formato'=>'0b')),
			'cierre'       =>array('fecha'=>array('fecha'=>'{fecha_cierre}','formato'=>'0b')),
			'contratista'  =>array('dato'=>array('nombre','proveedores','where id={id_receptor}')),
			'grupo'  	   =>array('dato'=>array('id','productos_programacion','where id={id_grupo} and visibilidad=1')),
			
			'id_item_item' =>'null',
			'id_operacion' =>'null',
			'fecha_inicio' =>'null',
			'fecha_fin'    =>'null',
			'fecha_cierre' =>'null',

		));

	// prin($line0);
	if(sizeof($line0)>0)
	{
		$line[$usu['id']]=$line0;
		$USU2[$usu['id']]=$usu['nombre'];
	}

}






foreach($line as $iusu2=>$lin2){
	
	// prin($lin2);

	unset($row);
	$l=0;//title
	if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>CONTRATISTA : </b> '.$USU2[$iusu2],'class=nombre colspan='.(7),'class=success');
	$row[$l][]=($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion='.$iusu2.'&format=excel">Exportar Excel</a>';
	$l++;//header
	// $row[$l][]=array('Vendedor','class=nombre','class="head muted"');
	$row[$l][]=array('VIN','class=nombre','class=info');
	$row[$l][]='OPERACIÓN';
	$row[$l][]='TIEMPO HORAS';
	$row[$l][]='COSTO';
	$row[$l][]='INICIO';
	$row[$l][]='TERMINO';
	$row[$l][]='CIERRE';
	$row[$l][]='CONTRATISTA';

	$suma=0;
	//body
	foreach($lin2 as $iusu=>$lin)
	{
		$l++;
		$row[$l][]=array($lin['vin'],'class=nombre');
		$row[$l][]=$lin['operacion'];
		$row[$l][]=$lin['horas'];
		$row[$l][]=$lin['costo']; $suma+=$lin['costo'];
		$row[$l][]=$lin['inicio'];
		$row[$l][]=$lin['termino'];
		$row[$l][]=$lin['cierre'];
		$row[$l][]=$lin['contratista'];
	}

	$l++;//footer
	$row[$l][]=array('','class=nombre','class=info');
	$row[$l][]='';
	$row[$l][]='TOTAL';
	$row[$l][]=$suma; unset($suma);
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	$row[$l][]='';
	
	//end

	$seccion[$iusu2]=$vendes[]=$row;

}

// prin($seccion[$_GET['seccion']]);




if($_GET['seccion']!=''){
	echo render_excel_old($seccion[$_GET['seccion']]);
} else {
	foreach($vendes as $vende){
		echo render_table($vende);
	}
}



