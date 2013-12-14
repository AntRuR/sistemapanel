<?php

//include("lib/includes.php");
	include("lib/global.php");	
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");	
	include("config/tablas.php");
	include("lib/sesion.php");	
	include("lib/playmemory.php");

	require_once( "lib/ini_manager.php" );

	require_once 'lib/PHPExcel.php';
	
//echo realpath("./");



			$obj['obj']=$_GET['me'];
			$OBJ=$datos_tabla=procesar_objeto_tabla($objeto_tabla[$_GET['me']]);

			foreach($datos_tabla['list'] as $lis){ 
				if(
					(in_array($lis['tipo'],array('inp','hid','fch','fcr','com')) and 
					//(in_array($lis['tipo'],array('inp','hid','fch','fcr')) and 					
					($lis['campo']!=$datos_tabla['foreig']) and 
					//($lis['listable']=='1') and 
					(!enhay($lis['label'],'descripci',1)) and
					(!enhay($lis['label'],'source',1)) and
					(!enhay($lis['label'],'url',1)) and
					//($lis['campo']!='id_grupo') and 
					//($lis['campo']!='id_subgrupo') and
					1
					)
				)
				{ 
						$campS[]=$lis['campo']; 				
							
				} 
			}
			
			
			$campS2=$campS;			
			//$campS2=array_merge(array($datos_tabla['id']),$campS2,array($campTitu));
			if(!in_array($datos_tabla['fcr'],$campS2)){ $campS2=array_merge(array($datos_tabla['fcr']),$campS2); }

			

			foreach($campS2 as $ccc=>$cccc){
				
				//$campos[]=$lis['campo'];
				$labels[]=strtoupper($objeto_tabla[$_GET['me']]['campos'][$cccc]['label']);				
				
			}
			
			//prin($labels);
			
			//$where="where ".$datos_tabla['foreig']."='".$id."' ";//anterior where
			//$parte=between($obj['ltext'],"where","}");
			$where="where 1 ";
			
			$query_where=$where
						 ."order by ". ( ($datos_tabla['order_by']=='')? (  $datos_tabla['id']." ". (($datos_tabla['orden']=='1')?"desc":"asc") ):$datos_tabla['order_by'] )." "
						 ."limit 0,1000";
			$items=select($campS2,
							$datos_tabla['tabla'],
							$query_where,0);
							
			//prin($items);				
			//prin($campS);
			
			$items2=$items;				

			foreach($items as $lll=>$linea){ 

				foreach($campS as $camP){

					switch($objeto_tabla[$obj['obj']]['campos'][$camP]['tipo']){
					case "com":
						$valoor=$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones'][$linea[$camP]];
						//$valoor=($valoor!='')?$valoor:"&nbsp;";

						$items2[$lll][$camP]=$valorr;						
					break;
					case "hid":
						list($primO,$tablaO)=explode("|",$objeto_tabla[$obj['obj']]['campos'][$camP]['opciones']);
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
					}
				}
			}	
			$items=$items2;						
			//prin($items);				
							
							
/*							
$OBJ=$objeto_tabla[$_GET['me']];


foreach($OBJ['campos'] as $camp){
	if(in_array($camp['tipo'],array('inp','txt','fch'))){
		$campos[]=$camp['campo'];
		$labels[]=strtoupper($camp['label']);
		if($camp['tipo']=='fch'){
			$fechas[$camp['campo']]=array('fecha_formato'=>array('fecha'=>'{'.$camp['campo'].'}','formato'=>'11'));
		}
	}
}

if(sizeof($campos)>0){

	$campos_query=implode(",",$campos);
	
	$items = select(
		$campos_query,
		$OBJ['tabla'],
		"where 1 order by id asc limit 0,10000"
		,0
		,$fechas				
		);

}
*/
//prin($items);
//exit();

$j0=2;
$i0=2;

$titles[]='Reporte : '.$OBJ['titulo'];
$titles[]="Fecha : ".date("d-m-Y");

foreach($titles as $i=>$tit){
$i2=$i0+$i;
$title['items']['B'.$i2]=$tit;
}
$title['rango']=getrango($title['items']);

$i0=$i0+1+sizeof($title);

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
$objPHPExcel->getDefaultStyle()->getFont()->setSize(8);
$objPHPExcel->getDefaultStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(1);


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
							/*,
		  'borders' => array(
								'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
							)*/							
		 )
	);

foreach($cells['items'] as $key=>$item){
	$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
}

$objPHPExcel->getActiveSheet()->getStyle($cells['rango'])->applyFromArray(
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
	
$objPHPExcel->getActiveSheet()->setTitle('Reporte');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
							 

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Reporte '.$OBJ['titulo'].' '.date("d-m-Y").'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

exit();

function num2alpha($n)
{
    for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
        $r = chr($n%26 + 0x41) . $r;
    return $r;
}
function getrango($n){
	$i=0;
	foreach($n as $b=>$c){
		if($i==0){ $uno=$b; }
		if($i==sizeof($n)-1){ $dos=$b; }
		$i++;
	}
	return $uno.":".$dos;
}

?>