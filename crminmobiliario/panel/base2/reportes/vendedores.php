<?php
// prin($_GET);
// prin($SERVER);
// prin($_SERVER);
// exit();


$_GET['ob']='VENTAS_ITEMS';

$date='fecha_creacion';

$context='';

if($_GET['id_item']!=''){

	$context="and id_item='".$_GET['id_item']."'";
	
}

list($from,$to)=explode("|",$_GET['fecha_creacion']);


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

function render_excel_old($row){

	global $from;
	global $to;

	$titulo='vendedores';

	$title["c2"]="Reporte de atenciones";

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

	$objPHPExcel->getActiveSheet()->setCellValue("c2","Reporte de Atenciones : desde $from hasta $to");
	$objPHPExcel->getActiveSheet()->getStyle(getrango($title))->applyFromArray(
			array(
					'font' => array(
							'bold' => true,
							'size' => 11
					)
			)
	);

	$objPHPExcel->getActiveSheet()->setTitle('Reporte de atenciones');


	// Set active sheet index to the first sheet, so Excel opens this as the first sheet
	$objPHPExcel->setActiveSheetIndex(0);

	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment;filename="Reporte de atenciones '.date("d-m-Y").'.xls"');
	header('Cache-Control: max-age=0');
	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
	exit();
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

// prin($tipo);
// prin($intervalos);

foreach($intervalos as $vv){

	if($tipo=='D')
	{

		$llll=select(
					"$ordby as nombre, count(*) as total,usuarios.id_jefe as id_jefe",
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
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

	} else {

		$llll=select(
					"$ordby as nombre, count(*) as total,usuarios.id_jefe as id_jefe",
					"ventas_items",
					"left join usuarios on ventas_items.id_usuario=usuarios.id 
					where 
					ventas_items.visibilidad!=0 
					and date(ventas_items.$date) between '".str_replace("|","' and '",$vv)."'
					$context
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		foreach($llll as $lll)
		{
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
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

// prin($line);

foreach($line as $iusu2=>$lin2){

	unset($row);
	$l=0;//title
	if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>Jefe : </b> '.$USU2[$iusu2],'class=nombre colspan='.(sizeof($intervalos)+3),'class=success');

	$row[$l][]=($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion='.$iusu2.'&format=excel">Exportar Excel</a>';
	$l++;//header
	$row[$l][]=array('Vendedor','class=nombre','class="head muted"');
	foreach($intervalos as $ii=>$la)
		$row[$l][]=$LLL[$ii];
	$row[$l][]='<span title="días de trabajo">N</span>';
	$row[$l][]='Total';
	$row[$l][]='Prom Vend/Día';

	//body
	foreach($lin2 as $iusu=>$lin)
	{
		$l++;
		if(trim($USU[$iusu])=='') continue;
		$ff=0;
		$row[$l][]=array($USU[$iusu],'class=nombre');
		foreach($intervalos as $ii=>$la)
		{
			$row[$l][]=$line[$iusu2][$iusu][$la];
			$ff=$ff+$line[$iusu2][$iusu][$la];
			$lineS[$iusu2][$la] = $lineS[$iusu2][$la] + $line[$iusu2][$iusu][$la];
		}
		$row[$l][]=$rango;
		$row[$l][]=$ff;
		$row[$l][]=round($ff/$rango,2);
	}

	$l++;//footer
	$row[$l][]=array('Total','class=nombre','class=info');
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineS[$iusu2][$la];
		$ff=$ff+$lineS[$iusu2][$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$ff;
	$row[$l][]=round($ff/$rango,2);
	//end

	$seccion[$iusu2]=$vendes[]=$row;

}







unset($row);
$l=0;//title
$row[$l][]=array('Jefe de vendedores',
				 'class=nombre colspan='.(sizeof($intervalos)+3),
				 'class=success');
$row[$l][]=($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=jefes&format=excel">Exportar Excel</a>';
$l++;//header
$row[$l][]=array('','','class="head muted"');
foreach($intervalos as $ii=>$la)
	$row[$l][]=$LLL[$ii];
$row[$l][]='N';
$row[$l][]='Total';
$row[$l][]='Prom Vend/Día';

//body
foreach($lineS as $iusu2=>$lin)
{
	$l++;
	if(trim($USU2[$iusu2])=='') continue;
	$ff=0;
	$row[$l][]=array($USU2[$iusu2],'class=nombre');
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineS[$iusu2][$la];
		$ff=$ff+$lineS[$iusu2][$la];
		$lineSS[$la] = $lineSS[$la] + $lineS[$iusu2][$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$ff;
	$row[$l][]=round($ff/$rango,2);
}

$l++;//footer
$row[$l][]=array('Total','class=nombre','class=info');
foreach($intervalos as $ii=>$la)
{
	$row[$l][]=$lineSS[$la];
	$ff=$ff+$lineSS[$la];
}
$row[$l][]=$rango;
$row[$l][]=$ff;
$row[$l][]=round($ff/$rango,2);
//end
$seccion['jefes']=$row;

if($_GET['seccion']!=''){
	echo render_excel_old($seccion[$_GET['seccion']]);
} else {
	echo render_table_old($seccion['jefes']);
	foreach($vendes as $vende){
		echo render_table_old($vende);
	}
}
