<?php
// echo 'hola';
// prin($_GET);
/*
var_dump($SERVER);
var_dump($_SERVER);
exit();
*/

// prin($_SESSION);

$extra_query='';



if(0){

	delete("ventas_items","where id_usuario=0");

	$usuarios=select("id,id_jefe","usuarios","where 1 order by id_jefe");
	foreach($usuarios as $usu){
		$ID_USU2[$usu['id']]=$usu['id_jefe'];
	}
	// prin($ID_USU2);


	$AATT=select(
		"id,id_usuario,id_jefe",
		"ventas_items",
		"where 1 "
		// ."and (  date(fecha_creacion) between '2016-01-01' and '2016-12-31' )"
		,0);

	foreach($AATT as $aten){
		update(
			["id_jefe"=>$ID_USU2[$aten['id_usuario']]],
			"ventas_items",
			"where id=".$aten['id'],
			0
			);
	}

	exit();

}


$id_permiso=dato('id_permisos','usuarios_acceso','where id='.$_SESSION['usuario_id'],0);
if($id_permiso==20){
$query=dato('query','usuarios3','where id_sesion='.$_SESSION['usuario_id'],0);
$extra_query=' and id in ('.$query.')';
}



$_GET['ob']='VENTAS_ITEMS';

// prin($_GET);
list($from,$to)=explode("|",$_GET['fecha_creacion']);
$date='fecha_creacion';
// $date
// prin($gett);
// prin([$date,$from,$to]);
// prin($_GET);


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

// prin("$first - $last");

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
// prin([$tipo,$from,$to]);exit();
$intervalos=crear_intervalos($tipo,$from,$to);

$VV=array();
$data = array();

$usuarios2=select("id,nombre,apellidos,id_ptoventa","usuarios2","where 1 ".$extra_query,0,array(
	'pto'=>array('fila'=>array('nombre','productos_ptoventa','where id={id_ptoventa}'))
	));
foreach($usuarios2 as $usu){
	$USU2[$usu['id']]=$usu['nombre']." ".$usu['apellidos']." - ".$usu['pto']['nombre'];
}

$usuarios=select("id,nombre,apellidos,id_jefe","usuarios","where 1 order by id_jefe");
foreach($usuarios as $usu){
	$USU[$usu['id']]=$usu['nombre']." ".$usu['apellidos'];
	$ID_USU2[$usu['id']]=$usu['id_jefe'];
}

// prin($USU2);
// prin($USU);

// $idestados="13,10,20";
// $idestados="10";
$idestados="10,20"; //vendidos entregados

foreach($intervalos as $vv){

	if($tipo=='D')
	{

		$llll=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where 1 "
					// ."and visibilidad!=0 "
					."and date($date)='$vv '
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		$llllventas=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where 1 "
					// ."and visibilidad!=0 "
					."and date($date)='$vv '
					and id_status in ($idestados)
					group by ".$ordby." order by ".$ordby." desc
					",
					0);

		foreach($llll as $lll)
		{
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

		foreach($llllventas as $lll)
		{
			$lineventas[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

	} else {

		// prin($filtro_marcas);
		$llll=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where 1 "
					// ."and visibilidad!=0 "
					."and date($date) between '".str_replace("|","' and '",$vv)."' "
					.$filtro_marcas
					." group by ".$ordby." order by ".$ordby." desc
					",
					0);

		$llllventas=select(
					"$ordby as nombre, count(*) as total,id_jefe",
					$datos_tabla['tabla'],
					"where 1 "
					// ."and visibilidad!=0 "
					."and date($date) between '".str_replace("|","' and '",$vv)."' "
					.$filtro_marcas
					." and id_status in ($idestados)					
					group by ".$ordby." order by ".$ordby." desc
					",
					0);		

		foreach($llll as $lll)
		{
			$line[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
		}

		foreach($llllventas as $lll)
		{
			$lineventas[$lll['id_jefe']][$lll['nombre']][$vv]=$lll['total'];
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

/*

Surquillo – Jonny Castillo

Surquillo Livianos – Nestor Voto

La Marina – Juan Seminario

Ayllón – Rocío Ríos

San Luis – Miguel Romero

Plaza Lima Norte – Pedro Elguera

Los Olivos – Edgar Ramón

Total Lima

DDP – AQP – Raquel Perez

DDP - AQP 2 – Renzo Lopez

DDP – Huancayo – Rolando Galarza

DDP – Chincha – Franklin Neumman

Total Centro Sur

DDP – Trujillo – Renzo Tagle

Total Nor Oriente

 */

// prin($USU2);

// prin($line);

$line22=array();

$line22[8]=$line[8]; unset($line[8]);
$line22[16]=$line[16]; unset($line[16]);
$line22[4]=$line[4]; unset($line[4]);
$line22[5]=$line[5]; unset($line[5]);
$line22[21]=$line[21]; unset($line[21]);
$line22[6]=$line[6]; unset($line[6]);
$line22[19]=$line[19]; unset($line[19]);


$line22[15]=$line[15]; unset($line[15]);
$line22[12]=$line[12]; unset($line[12]);
$line22[18]=$line[18]; unset($line[18]);
$line22[17]=$line[17]; unset($line[17]);


$line22[20]=$line[20]; unset($line[20]);

$line22[10]=$line[10]; unset($line[10]);
$line22[11]=$line[11]; unset($line[11]);
$line22[22]=$line[22]; unset($line[22]);

// prin($line);

foreach($line as $indixxe => $linee){

	$line22[$indixxe]=$line[$indixxe];

}


$line=$line22;

foreach($line as $iusu2=>$lin2){

	unset($row);
	$l=0;//title
	if(trim($USU2[$iusu2])=='') continue;
	$row[$l][]=array('<b>Jefe : </b> '.$USU2[$iusu2],'class=nombre colspan='.(sizeof($intervalos)+5),'class=success');

	$row[$l][]=($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion='.$iusu2.'&format=excel">Excel</a>';
	$l++;//header
	$row[$l][]=array('Vendedor','class=nombre','class="head muted"');
	foreach($intervalos as $ii=>$la)
		$row[$l][]=$LLL[$ii];
	$row[$l][]='N';
	$row[$l][]='Total Atenciones';
	$row[$l][]='Total Ventas';
	$row[$l][]='Prom Atenciones/Día';
	$row[$l][]='Prom Ventas/Día';

	//body
	foreach($lin2 as $iusu=>$lin)
	{
		$l++;
		if(trim($USU[$iusu])=='') continue;
		$ff=0;
		$ffventas=0;
		$row[$l][]=array($USU[$iusu],'class=nombre');
		foreach($intervalos as $ii=>$la)
		{
			$row[$l][]=$line[$iusu2][$iusu][$la]
			.( ($lineventas[$iusu2][$iusu][$la])?" <b style='color:red;'>(".$lineventas[$iusu2][$iusu][$la].")</b>":"" );
			$ff=$ff+$line[$iusu2][$iusu][$la];
			$ffventas=$ffventas+$lineventas[$iusu2][$iusu][$la];
			$lineS[$iusu2][$la] = $lineS[$iusu2][$la] + $line[$iusu2][$iusu][$la];
			$lineSventas[$iusu2][$la] = $lineSventas[$iusu2][$la] + $lineventas[$iusu2][$iusu][$la];
		}
		$row[$l][]=$rango;
		$row[$l][]=$ff; $ffacum+=$ff;
		$row[$l][]=$ffventas; $ffacumven+=$ffventas;
		$row[$l][]=round($ff/$rango,2);
		$row[$l][]=round($ffventas/$rango,2);
	}

	$l++;//footer
	$row[$l][]=array('Total','class=nombre','class=info');
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineS[$iusu2][$la];
		$ff=$ff+$lineS[$iusu2][$la];
		$ffventas=$ffventas+$lineSventas[$iusu2][$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$ffacum; 
	$row[$l][]=$ffventas;
	$row[$l][]=round($ffacum/$rango,2);
	$row[$l][]=round($ffacumven/$rango,2);
	$ffacum=0;
	$ffacumven=0;
	//end

	$seccion[$iusu2]=$vendes[]=$row;

}







unset($row);
$l=0;//title
$row[$l][]=array('Jefe de vendedores',
				 'class=nombre colspan='.(sizeof($intervalos)+5),
				 'class=success');
$row[$l][]=($_GET['seccion']!='')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&seccion=jefes&format=excel">Exportar Excel</a>';
$l++;//header
$row[$l][]=array('','','class="head muted"');
foreach($intervalos as $ii=>$la)
	$row[$l][]=$LLL[$ii];
$row[$l][]='N';
$row[$l][]='Total Atenciones';
$row[$l][]='Total Ventas';
$row[$l][]='Prom Atenciones/Día';
$row[$l][]='Prom Ventas/Día';

//body
foreach($lineS as $iusu2=>$lin)
{
	$l++;
	if(trim($USU2[$iusu2])=='') continue;
	$ff=0;
	$ffventas=0;
	$row[$l][]=array($USU2[$iusu2],'class=nombre');
	foreach($intervalos as $ii=>$la)
	{
		$row[$l][]=$lineS[$iusu2][$la]
		.( ($lineSventas[$iusu2][$la])?" <b style='color:red;'>(".$lineSventas[$iusu2][$la].')</b>':'' );
		$ff=$ff+$lineS[$iusu2][$la];
		$ffventas=$ffventas+$lineSventas[$iusu2][$la];
		$lineSS[$la] = $lineSS[$la] + $lineS[$iusu2][$la];
		$lineSSventas[$la] = $lineSSventas[$la] + $lineSventas[$iusu2][$la];
	}
	$row[$l][]=$rango;
	$row[$l][]=$ff;  $ffacum+=$ff;
	$row[$l][]=$ffventas; $ffacumven+=$ffventas;
	$row[$l][]=round($ff/$rango,2);
	$row[$l][]=round($ffventas/$rango,2);
}

$l++;//footer
$row[$l][]=array('Total','class=nombre','class=info');
foreach($intervalos as $ii=>$la)
{
	$row[$l][]=$lineSS[$la];
	$ff=$ff+$lineSS[$la];
	$ffventas=$ffventas+$lineSSventas[$la];
}
$row[$l][]=$rango;
$row[$l][]=$ffacum; 
$row[$l][]=$ffacumven; 
$row[$l][]=round($ffacum/$rango,2);
$row[$l][]=round($ffacumven/$rango,2);
$ffacum=0;
$ffacumven=0;
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
