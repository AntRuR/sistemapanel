<?php

// prin($_GET);

// prin($SERVER);

// exit();


$main_table='ventas_mensajes';

$busqueda_query='';
if($_GET['filter']!=''){

				//$busqueda_query = " ".$_GET['filter']." ";			


			parse_str($_GET['filter'],$FiL0);

			foreach($FiL0 as $tre=>$FiL0tbl){
				foreach($FiL0tbl as $Fili){

					list($un,$do)=explode(".",$Fili);
					list($un,$do)=explode("=",$do);
					if(substr_count($Fili, '|')==2){

						$pa_rts=explode("|",$Fili);

						$FiL[$tre][$pa_rts[0]]=$tre.".".$Fili;

					} else {

						$FiL[$tre][$un]=$Fili;

					}
				}
			}

		$query_filter_parts=query_filter($FiL);

		$busqueda_query = " and ( ".$query_filter_parts['filter']." ) ";

		// prin($busqueda_query);

}


$campos=" "
."ventas_mensajes.id as id_mensaje," //fecha 
."ventas_mensajes.alerta_fecha as m_fecha," //fecha 
// ."ventas_mensajes.estado as m_estado,"
."ventas_mensajes.alerta as m_alerta,"			  //tipo

."ventas_items.id as id_venta,"
."ventas_items.id_item as id_item,"
."ventas_items.id_usuario as id_usuario,"
."ventas_items.id_cliente as id_cliente,"
."ventas_items.id_status as id_status,"
."ventas_items.pedido as pedido,"		

// ."ventas_items.fecha_creacion as fecha_creacion,"


// ."clientes.genero as c_genero,"
// ."clientes.tipo_cliente as c_tipo,"
."clientes.nombre as c_nombre,"						//nombre
."clientes.apellidos as c_apellido,"				//apellidos
."clientes.email as c_correo,"						//email
."clientes.telefono as c_telefono,"							//telefonos
."clientes.telefono_oficina as c_telefono_oficina,"	//
."clientes.celular_claro as c_celular_claro,"			//
."clientes.celular_movistar as c_celular_movistar,"	//
."clientes.rpm as c_rpm,"										//
."clientes.rpc as c_rpc,"										//
// ."clientes.cliente_celular as c_celular,"					//

."clientes.departamento as c_departamento,"		//ciudad
."clientes.provincia as c_provincia,"				//
."clientes.distrito as c_distrito,"					//


."productos_items.nombre as p_nombre,"		
// ."productos_items.nombre2 as p_modelo,"			//modelo
// ."productos_items.link as p_link,"
// ."productos_items.link2 as p_link2,"

."usuarios.nombre as a_nombre,"						//nombre
."usuarios.apellidos as a_apellidos"				//apellidos
/*
."usuarios.telefono as a_telefono,"
."usuarios.telefono_oficina as a_telefono_oficina,"
."usuarios.celular_claro as a_celular_claro,"
."usuarios.celular_movistar as a_celular_movistar,"
."usuarios.rpm as a_rpm,"
."usuarios.rpc as a_rpc,"
*/

//."ventas_status.nombre as s_nombre"

."";

// prin($_GET['filter']);

// $qqff=query_filter_old($_GET['filter']);

// prin($qqff);

// if($_GET['filter']!=''){
	$where="where 1 ".$busqueda_query;
// } else {
	// $where="where 1 ";
// }
	
// $restriction =""
// ." and ventas_items.user in (select id_sesion from usuarios where id_jefe in (7))   "
// // ."	and ventas_items.id_status not in (1,17,10,7,6,3,20) "
// // ."	and clientes.email <>'' "
// ."";
	
$query_where=$where
// .$restriction
."order by ventas_mensajes.id desc "
."limit 0,1000";

$items=select($campos,
"ventas_mensajes",
"
 left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo
 left join clientes on ventas_items.id_cliente=clientes.id 
 left join usuarios on ventas_items.id_usuario=usuarios.id 
 left join productos_items on ventas_items.id_item=productos_items.id 
".
$query_where,
0);


// exit();

$local_server='http://localhost/sistemapanel/crminmobiliario/';
$web_server='http://crmsche.info/';

// exit();


$tipos_array =get_valores('id','nombre','mensajes_status');

$alertas_array =get_valores('id','nombre','mensajes_alertas');


$estados_array=array(
					'1'			=> 'pendiente',
					'2'			=> 'para hoy',
					'3'			=> 'atrasado',
					'4'			=> 'cumplido',
					'5'			=> 'atrasado espera de desistimiento',
					'6'			=> 'desistido',					
					'7'			=> 'vendido'								
			);

$srsra_array=[
	'o'  =>'Sr.',
	'a'  =>'Sra.',
	'os' =>'Sres.',
];

$departamento_array =get_valores('id','nombre','geo_departamentos');
$provincia_array    =get_valores('id','nombre','geo_provincias');
$distrito_array     =get_valores('id','nombre','geo_distritos');

$httpp=($SERVER['LOCAL'])?$local_server:$web_server;

foreach($items as $ii=>$item){

	$filas[$ii]['ALERTA']          =$alertas_array[$item['m_alerta']];

	$filas[$ii]['FECHA HORA']        =fecha_formato($item['m_fecha'],'8');

	// $filas[$ii]['SEXO']            =($item['c_tipo']=='2')?'os':( ($item['c_genero']=='1')?'o':'a' );
	// $filas[$ii]['SRSRA']           =$srsra_array[$filas[$ii]['SEXO']];
	$filas[$ii]['CLIENTE']          =( ($item['c_apellido'])?firstLetter($item['c_apellido']).', ':'' ).firstLetter($item['c_nombre']);
	// $filas[$ii]['APELLIDO']        =firstLetter($item['c_apellido']);
	$filas[$ii]['EMAIL']          =$item['c_correo'];
	// $filas[$ii]['FECHA INGRESO']   =fecha_formato($item['fecha_creacion'],'0a');

	// $filas[$ii]['ARTÍCULO']        =$item['p_articulo'];
	// $filas[$ii]['MODELO']          =$item['p_modelo'];
	$filas[$ii]['PROYECTO']          =$item['p_nombre'];


		$pedido=json_decode($item['pedido']);
		// prin($linea['pedido']);
		// exit();
		// $pdepartamentos=array();
		// $pdepositos=array();
		// $pestacionamientos=array();

		$pedido_html='';
		foreach($pedido as $pedi){
			switch($pedi->type){
				case "departamento":
					// $pdepartamentos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
					$pedido_html.="depa ".$pedi->num." ";
				break;
				case "estacionamiento":
					// $pestacionamientos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
					$pedido_html.="esta ".$pedi->num." ";
				break;
				case "deposito":
					// $pdepositos[]=array('id'=>$pedi->id,'price'=>$pedi->price); $suma=$suma+$pedi->price;
					$pedido_html.="depo ".$pedi->num." ";
				break;						
			}

		}


	// $filas[$ii]['PEDIDA']          =$item['pedido'];
	$filas[$ii]['PEDIDO']          =$pedido_html;


		if($provincia_array[$item['c_provincia']]!='') $ciudad=$provincia_array[$item['c_provincia']];
		// elseif($distrito_array[$item['c_distrito']]!='') $ciudad=$distrito_array[$item['c_distrito']];
		elseif($departamento_array[$item['c_departamento']]!='') $ciudad=$departamento_array[$item['c_departamento']];
		else $ciudad='donde usted indique';

	$filas[$ii]['CIUDAD']          =$ciudad;

	if(trim($filas[$ii]['CIUDAD'])=='') $filas[$ii]['CIUDAD']='donde usted indique';

	// $filas[$ii]['LINK']            =$item['p_link'];
	// $filas[$ii]['LINK2']           =$item['p_link2'];
	// $filas[$ii]['']           		 ='';
	$filas[$ii]['ASESOR']          =firstLetter($item['a_nombre']." ".$item['a_apellidos']);

		// if(trim($item['a_telefono'])         !='') $asesor_telefonos[]=$item['a_telefono'];
		// if(trim($item['a_telefono_oficina']) !='') $asesor_telefonos[]=$item['a_telefono_oficina'];
		// if(trim($item['a_celular_claro'])    !='') $asesor_telefonos[]=$item['a_celular_claro'];
		// if(trim($item['a_celular_movistar']) !='') $asesor_telefonos[]=$item['a_celular_movistar'];
		// if(trim($item['a_rpm'])              !='') $asesor_telefonos[]=$item['a_rpm'];
		// if(trim($item['a_rpc'])              !='') $asesor_telefonos[]=$item['a_rpc'];

	// $filas[$ii]['ASESOR TELEFONOS'] = implode(" / ",$asesor_telefonos);

	unset($asesor_telefonos);

		if(trim($item['c_telefono'])         !='') $cliente_telefonos[]=$item['c_telefono'];
		if(trim($item['c_telefono_oficina']) !='') $cliente_telefonos[]=$item['c_telefono_oficina'];
		if(trim($item['c_celular_claro'])    !='') $cliente_telefonos[]=$item['c_celular_claro'];
		if(trim($item['c_celular_movistar']) !='') $cliente_telefonos[]=$item['c_celular_movistar'];
		if(trim($item['c_rpm'])              !='') $cliente_telefonos[]=$item['c_rpm'];
		if(trim($item['c_rpc'])              !='') $cliente_telefonos[]=$item['c_rpc'];
		// if(trim($item['c_celular'])          !='') $cliente_telefonos[]=$item['c_celular'];

	$filas[$ii]['TELEFONOS'] = implode(" / ",$cliente_telefonos);

	unset($cliente_telefonos);	

	// $filas[$ii]['STATUS']           =$item['s_nombre'];

	$filas[$ii]['CLIENTE LINK']    	=['text'=>'ir a cliente','url'=>$httpp.'panel/custom/clientes.php?i='.$item['id_cliente']];

	$filas[$ii]['ATENCION LINK']     =['text'=>'ir a atención','url'=>$httpp.'panel/custom/ventas_items.php?i='.$item['id_venta']];

	$filas[$ii]['ALERTA LINK']       =['text'=>'ir a alerta','url'=>$httpp.'panel/custom/ventas_mensajes.php?i='.$item['id_mensaje']];

}

// prin($filas);


/** PHPExcel */

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

$Autor="Guillermo Lozán";

// Set properties
$objPHPExcel->getProperties()->setCreator($Autor)
->setLastModifiedBy($Autor)
->setTitle("Reporte Fecha : ".date("d-m-Y"))
->setSubject("Reporte Fecha : ".date("d-m-Y"))
->setDescription("Reporte generado por el Panel de administracion Formato : ".date("d-m-Y"))
->setKeywords("Reporte Fecha : ".date("d-m-Y"))
->setCategory("Reporte");

// $objPHPExcel->getDefaultStyle()->getFont()->setName('Arial');
// $objPHPExcel->getDefaultStyle()->getFont()->setSize(8);
// $objPHPExcel->getDefaultStyle()->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
/*
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(2);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(1);
*/
/*
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
*/

$l=1;

$col=0;
foreach($filas[0] as $var=>$value){
	$yourcell=num2alpha($col).$l;
	$objPHPExcel->getActiveSheet()->setCellValue($yourcell,$var);
	$objPHPExcel->getActiveSheet()->getColumnDimension(num2alpha($col))->setAutoSize(true);
	$col++;
}
$l++;

foreach($filas as $row=>$fila){
	$col=0;
	foreach($fila as $var=>$item){

	   $yourcell=num2alpha($col).$l;

		if(isset($item['url'])){

			$objPHPExcel->getActiveSheet()->setCellValue($yourcell,$item['text']);
			$objPHPExcel->getActiveSheet()->getCell($yourcell)->getHyperlink()->setUrl($item['url']);

		} else {

			$objPHPExcel->getActiveSheet()->setCellValue($yourcell,$item);
			$objPHPExcel->getActiveSheet()->getStyle($yourcell)->getAlignment()->setHorizontal('left');

		}

		$col++;

		// prin([$col++,$row+1,$item]);
	}
	$l++;
}

// exit();
/*
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
				,
				 'borders' => array(
				 		'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				 		'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				 		'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				 		'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
				 		'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
				 )
		)
);

*/

// foreach($cells['items'] as $key=>$item){
// 	$objPHPExcel->getActiveSheet()->setCellValue($key,$item);
// }

// $objPHPExcel->getActiveSheet()->getStyle($cells['rango'])->applyFromArray(
// 		array('borders' => array(
// 				'top'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
// 				'left'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
// 				'right'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
// 				'bottom'	=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
// 				//'horizontal'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
// 				'vertical'		=> array('style' => PHPExcel_Style_Border::BORDER_THIN)
// 		),
// 				'fill' 	=> array(
// 						'type'		=> PHPExcel_Style_Fill::FILL_SOLID
// 				),
// 		)
// );

// foreach($Filas as $Fila){
// 	$objPHPExcel->getActiveSheet()->getStyle($Fila)->applyFromArray(
// 			array('fill' 	=> array(
// 					'type'		=> PHPExcel_Style_Fill::FILL_SOLID,
// 					'color'		=> array('rgb' => 'E9F4F8')
// 			)
// 			)
// 	);
// }

$objPHPExcel->getActiveSheet()->setTitle('formato');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// exit();

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$_GET['name'].'-'.date("d-m-Y-H:i:s").'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');

exit();




/*

header("Content-type: plain/text");
header('Content-Disposition: attachment;filename="exportar_gmail.csv"');
header('Cache-Control: max-age=0');
header ("Pragma: no-cache");
echo implode("
",$items3);

*/
exit();

function firstLetter($string){

	$string=str_replace(
		['Á','É','Í','Ó','Ú'], 
		['á','é','í','ó','ú'], 
		$string);

	return ucwords(strtolower($string));

}

function query_filter_old($filter){

	parse_str($filter, $filterA);
	$AAFF=array();

	foreach($filterA as $key=>$value){

		foreach($value as $FA=>$AF){

			if($AF!='' and trim($FA)!='orderby'){
				$aa=explode("|",$AF);
				if(sizeof($aa)==3){ $AAFF[]= " date(".$key.".".$aa['0'].") between '".$aa['1']."' and '".$aa['2']."' "; }
				else {
				if(enhay($AF,"=")){
				list($aaa,$bbb)=explode("=",$AF);
				$bbbb=explode(",",$bbb);
				$bbbbb=array();
				foreach($bbbb as $b4){ $bbbbb[]="'$b4'"; }
				$AAFF[]=" $aaa in (". implode(",",$bbbbb) .") ";
				} else{
				$AAFF[]=" $AF ";
				}
				}
			}

		}

	}

	//prin($AAFF);
	if(sizeof($AAFF)==0){
	$filter="1";
	}else{
	$filter=implode(" AND ",$AAFF);
	}
	return $filter;

}
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

