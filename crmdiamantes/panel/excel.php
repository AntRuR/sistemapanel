<?php

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

// prin($objeto_tabla[$_GET['OB']]);
$items=select(
		$tbquery,
		$tbl,
		$join_query.
		"\n where 1 $EXTRA_FILTRO $busqueda_query ".$datos_tabla['where_id'].
		"\n order by "
		. ( ($FilTro_o=='')?'':$FilTro_o."," )
		. ( ($datos_tabla['group'])?' '.$datos_tabla['group'].' desc, ':'' )
		. ( ($datos_tabla['order_by']=='')? (  $tbl.".".$datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )
		. " limit 0,1000"
		,
		( 0 or ($_GET['debug']=='1') )
	);	

// prin($items);


$OBJ=$objeto_tabla[$_GET['OB']];

$j0=0;
$i0=1;


$labels=[];
$tblistadoA=[];
foreach($tblistado as $campo){
	if($campo['listable']=='1' and $campo['tipo']!='html' ){
		$labels[]=$campo['label'];
		$tblistadoA[$campo['campo']]=$campo;
		$capos[]=$campo['campo'];
	}	
}


// prin($labels);

// prin($tblistadoA);

// prin($items);

// exit();

// if(0){

$items2=[];

foreach($items as $lll=>$linea){

	foreach($tblistadoA as $camP=>$campoo){

		if(in_array($camP,$capos)){

			switch($campoo['tipo']){
				case "com":
					$valoor=$campoo['opciones'][$linea[$camP]];
					//$valoor=($valoor!='')?$valoor:"&nbsp;";
					list($valoor,$nada)=explode("|",$valoor);	
					$items2[$lll][$camP]=$valoor;
				break;
				case "hid":
					list($primO,$tablaO)=explode("|",$campoo['opciones']);
					list($idO,$camposO)=explode(",",$primO);
					$camposOA=array();
					$camposOA=explode(";",$camposO);
					$bufy='';
					foreach($camposOA as $COA){
						$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$linea[$camP]."'")." ";
					}
					$items2[$lll][$camP]=$bufy;
				break;
				case "fcr":	case "fch":
					$fech=str_replace('-','/',fecha_formato($linea[$camP],'11'));
					$items2[$lll][$camP]=$fech;
				break;
				default:
					$items2[$lll][$camP]=$linea[$camP];
				break;
			}

		}
	}
}

$items=$items2;

// prin($items);

// exit();

// }


	// prin($labels);
	// // var_dump($_GET['conf']);
	// prin($items);
	// exit();
	$titles[]="Reporte de ".$OBJ['titulo'];
	$titles[]="Fecha : ".date("d-m-Y");

	foreach($titles as $i=>$tit){
		$i2=$i0+$i;
		$title['items']['A'.$i2]=$tit;
	}
	$title['rango']=getrango($title['items']);

	$i0 = $i0 + sizeof($title);

	foreach($labels as $j=>$label){
		$j2=$j0+$j;
		$heads['items'][num2alpha($j2).$i0]=$label;
		$columnas[]=num2alpha($j2);
	}
	$heads['rango']=getrango($heads['items']);

	$i0=$i0+1;
	foreach($items as $i=>$filas){
		$j=0;
		foreach($filas as $cell){
			$i2=$i0+$i;
			$j2=$j0+$j;
			$cells['items'][num2alpha($j2).$i2]=$cell;
			$cells['filas'][$i2][]=num2alpha($j2).$i2;
			$j++;
		}
	}

	$m=0;
	foreach($cells['filas'] as $fila){
		$m++;
		if($m%2==0){
			$Filas[]=$fila[0].":".end($fila);
		}
	}


	$cells['rango']=getrango($cells['items']);



//prin($cells);

// exit();

require_once 'lib/PHPExcel.php';


/** PHPExcel */

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$Autor="Guillermo Lozán";

// Set properties
$objPHPExcel->getProperties()->setCreator($Autor)
->setLastModifiedBy($Autor)
->setTitle("Reporte de ".$OBJ['titulo']. " Fecha : ".date("d-m-Y"))
->setSubject("Reporte de ".$OBJ['titulo']. " Fecha : ".date("d-m-Y"))
->setDescription("Reporte generado por el Panel de administracion Reporte de ".$OBJ['titulo']. " Fecha : ".date("d-m-Y"))
->setKeywords("Reporte de ".$OBJ['titulo']. " Fecha : ".date("d-m-Y"))
->setCategory("Reporte de ".$OBJ['titulo']);

$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
$objPHPExcel->getDefaultStyle()->getFont()->setSize(11);
$objPHPExcel->getDefaultStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
// $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
// $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(1);


foreach($columnas as $letra){
	$objPHPExcel->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
}

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

foreach($heads['items'] as $key=>$item){
	$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
}


$objPHPExcel->getActiveSheet()->getStyle($heads['rango'])->applyFromArray(
		array(
				'font' => array(
						'bold' => true,
						'color' => array('argb' => 'FFFFFFFF')
				),
				'fill' 	=> array(
						'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
						'color'		=> array('argb' => '33333333')
				)
				
				//'borders' => array(
				// 		'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 		'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 		'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 		'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 		'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
				//)
		)
);

foreach($cells['items'] as $key=>$item){
	$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
}

$objPHPExcel->getActiveSheet()->getStyle($cells['rango'])->applyFromArray(
		array('borders' => array(
				// 'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				// 'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
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

$objPHPExcel->getActiveSheet()->setTitle('Reporte');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Reporte '.$OBJ['titulo'].' '.date("d-m-Y").'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

exit();



