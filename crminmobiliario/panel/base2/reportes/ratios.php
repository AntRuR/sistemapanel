<?php

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





	}








// TABLA

if(
	$_GET['id_item']!=''
	){

$PagosA=[
	'1'	=> 'Contado',
	'2'	=> 'Crédito Directo',
	'3'	=> 'Crédito Hipotecario Tradicional',
	'4'	=> 'Plan Ahorro',
	];

$ventas=select(
	[
	'productos_ventas.id as id',
	'productos_ventas.id_item_item as id_item_item',
	'productos_ventas.id_ventas_item as id_ventas_item',
	// 'ventas_items.pedido as pedido',
	'ventas_items.pvpromocion as pvpromocion',
	'productos_ventas.cuota_inicial as cuota_inicial',
	'productos_ventas.forma_pago as forma_pago',
	],
	"productos_ventas",
	"
	left join productos_items_items on productos_items_items.id=productos_ventas.id_item_item
	left join ventas_items on ventas_items.id=productos_ventas.id_ventas_item
	where ventas_items.id_item='".$_GET['id_item']."'
	",
	0,
	[
		'pagos'=>['filas'=>[['id','operacion','importe','monto','saldo','estado','cumplido'],'productos_ventas_documentos','where id_grupo={id}']]
	]
	);

// prin($ventas);

foreach($ventas as $ii=>$venta){

	$inicial_num_total=0;
	$inicial_num_cump=0;
	$inicial_total=0;
	$inicial_recibido=0;
	$inicial_porrecibir=0;

	$saldo_num_total=0;
	$saldo_num_cump=0;
	$saldo_total=0;
	$saldo_recibido=0;
	$saldo_porrecibir=0;

	foreach($venta['pagos'] as $pago){

		if($pago['operacion']=='1' or $pago['operacion']=='2'){

			$inicial_total+=$pago['monto'];
			$inicial_num_total++;
			if($pago['cumplido']=='1'){
				
				$inicial_recibido+=$pago['monto'];
				$inicial_num_cump++;

			} else {

				$inicial_porrecibir+=$pago['monto'];				

			}

		} else {

			$saldo_total+=$pago['monto'];
			$saldo_num_total++;
			if($pago['cumplido']=='1'){
				
				$saldo_recibido+=$pago['monto'];
				$saldo_num_cump++;

			} else {

				$saldo_porrecibir+=$pago['monto'];				

			}

		}	

	}

	$ventas[$ii]['tipo_pago']=$PagosA[$ventas[$ii]['forma_pago']];

	$ventas[$ii]['inicial']['total']=$inicial_total;
	$ventas[$ii]['inicial']['recibido']=$inicial_recibido;
	$ventas[$ii]['inicial']['porrecibir']=$inicial_porrecibir;
	$ventas[$ii]['inicial']['cumplido']=($inicial_num_total==$inicial_num_cump)?'1':'0';

	$ventas[$ii]['saldo']['total']=$saldo_total;
	$ventas[$ii]['saldo']['recibido']=$saldo_recibido;
	$ventas[$ii]['saldo']['porrecibir']=$saldo_porrecibir;
	$ventas[$ii]['saldo']['cumplido']=($saldo_num_total==$saldo_num_cump)?'1':'0';

	$ventas[$ii]['total']['total']=$inicial_total+$saldo_total;
	$ventas[$ii]['total']['recibido']=$inicial_recibido+$saldo_recibido;
	$ventas[$ii]['total']['porrecibir']=$inicial_porrecibir+$saldo_porrecibir;
	$ventas[$ii]['total']['cumplido']=(($inicial_num_total==$inicial_num_cump) and ($saldo_num_total==$saldo_num_cump))?'1':'0';	



	$tipopago[$ventas[$ii]['forma_pago']]['inicial']['total']+=$inicial_total;
	$tipopago[$ventas[$ii]['forma_pago']]['inicial']['recibido']+=$inicial_recibido;
	$tipopago[$ventas[$ii]['forma_pago']]['inicial']['porrecibir']+=$inicial_porrecibir;

	$tipopago[$ventas[$ii]['forma_pago']]['saldo']['total']+=$saldo_total;
	$tipopago[$ventas[$ii]['forma_pago']]['saldo']['recibido']+=$saldo_recibido;
	$tipopago[$ventas[$ii]['forma_pago']]['saldo']['porrecibir']+=$saldo_porrecibir;


	unset($ventas[$ii]['pagos']);

}

// $nobadge=0;

if(!$nobadge and ($_GET['format']!='excel' )){
?>
<div class="well well-small">
<?=badge(1);?> Cuanto se ha recibido por cuotas iniciales<br>	
<?=badge(2);?> Cuanto nos deben por cuotas iniciales<br>
<?=badge(3);?> Cuanto deben por saldo del proyecto (crédito hipotecario / contado)<br>
<?=badge(4);?> Cuanto deben por crédito hipotecario<br>
<?=badge(5);?> Cuanto se ha recibido por crédito hipotecario<br>
<?=badge(6);?> Cuanta plata se ha recibido del proyecto<br>
</div>
<?php }

	// prin($tipopago);
	
	$tipos_pago['total']['nombre']='Total';

	foreach($PagosA as $ii=>$Pago){
		
		$tipos_pago[$Pago]['nombre']=$Pago;

		$tipos_pago[$Pago]['co']	= [
					'cum'=>$tipopago[$ii]['inicial']['recibido'],
					'pen'=>$tipopago[$ii]['inicial']['porrecibir'],
					'tot'=>$tipopago[$ii]['inicial']['recibido'] + $tipopago[$ii]['inicial']['porrecibir'],
					];

		$tipos_pago[$Pago]['sa']	= [
					'cum'=>$tipopago[$ii]['saldo']['recibido'],
					'pen'=>$tipopago[$ii]['saldo']['porrecibir'],
					'tot'=>$tipopago[$ii]['saldo']['recibido'] + $tipopago[$ii]['saldo']['porrecibir'],
					];

		$tipos_pago[$Pago]['to']	= [
					'cum'=>$tipopago[$ii]['inicial']['recibido'] + $tipopago[$ii]['saldo']['recibido'],
					'pen'=>$tipopago[$ii]['inicial']['porrecibir'] + $tipopago[$ii]['saldo']['porrecibir'],
					'tot'=>$tipopago[$ii]['inicial']['recibido'] + $tipopago[$ii]['inicial']['porrecibir'] + $tipopago[$ii]['saldo']['recibido'] + $tipopago[$ii]['saldo']['porrecibir'],
					];					

		$tipos_pago['total']['co']['cum']+=$tipopago[$ii]['inicial']['recibido'];
		$tipos_pago['total']['co']['pen']+=$tipopago[$ii]['inicial']['porrecibir'];
		$tipos_pago['total']['co']['tot'] =$tipos_pago['total']['co']['cum'] + $tipos_pago['total']['co']['pen'];

		$tipos_pago['total']['sa']['cum']+=$tipopago[$ii]['saldo']['recibido'];
		$tipos_pago['total']['sa']['pen']+=$tipopago[$ii]['saldo']['porrecibir'];
		$tipos_pago['total']['sa']['tot'] =$tipos_pago['total']['sa']['cum'] + $tipos_pago['total']['sa']['pen'];

		$tipos_pago['total']['to']['cum']+=$tipopago[$ii]['inicial']['recibido'] + $tipopago[$ii]['saldo']['recibido'];
		$tipos_pago['total']['to']['pen']+=$tipopago[$ii]['inicial']['porrecibir'] + $tipopago[$ii]['saldo']['porrecibir'];
		$tipos_pago['total']['to']['tot'] =$tipos_pago['total']['to']['cum'] + $tipos_pago['total']['to']['pen'];

	}

	$total=$tipos_pago['total'];
	unset($tipos_pago['total']);
	$tipos_pago['total']=$total;

	// prin($tipos_pago);

	foreach($tipos_pago as $tt=>$tipo){

		//TABLA 1
		unset($row);

		//HEADER
		$l=0;

		$row[$l][]=array($tipo['nombre'],'class=nombre colspan=3','class=success');
		$row[$l][]=array(($_GET['format']=='excel' or $tt!='Contado')?'':'<a class="linkstitu itr ico_Excel" title="Descargar Excel" href="'.$SERVER['URL'].'&format=excel">Exportar Excel</a>','class=nombre');


		$l++;

		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('Cuota Inicial','class=nombre');
		$row[$l][]=array('Saldo','class=nombre');
		$row[$l][]=array('Total','class=nombre');


		$l++;

		$row[$l][]=array('recibido','class=nombre');
		$row[$l][]=array(format_excel($tipo['co']['cum'])
			.  (($tt=='total')?badge(1):'')  
			);
		$row[$l][]=array(format_excel($tipo['sa']['cum']
			)
			);
		$row[$l][]=array(format_excel($tipo['to']['cum'])
			.  (($tt=='Crédito Hipotecario Tradicional')?badge(5):'')  
			.  (($tt=='total')?badge(6):'')  
			);


		$l++;

		$row[$l][]=array('por recibir','class=nombre');
		$row[$l][]=array(format_excel($tipo['co']['pen'])
			.  (($tt=='total')?badge(2):'')  
			);
		$row[$l][]=array(format_excel($tipo['sa']['pen'])
			.  (($tt=='Contado' or $tt=='Crédito Hipotecario Tradicional')?badge(3):'')  
			);
		$row[$l][]=array(format_excel($tipo['to']['pen'])
			.  (($tt=='Crédito Hipotecario Tradicional')?badge(4):'')  
			);


		$l++;

		$row[$l][]=array('total','class=nombre');
		$row[$l][]=array(format_excel($tipo['co']['tot']));
		$row[$l][]=array(format_excel($tipo['sa']['tot']));
		$row[$l][]=array(format_excel($tipo['to']['tot']));



		if($_GET['format']=='excel'){

			$render_excel[]=$row;

		} else {

			echo render_table($row,'reporte_ratios');
			
		}


	}


// $nobadge=0;	

if(!$nobadge and ($_GET['format']!='excel') ){

?>

<div class="well well-small">
<?=badge(7);?> Cuanto falta por vender del proyecto en plata y en numero de dptos. Y estacionamientos depositos<br>
CUAL ES LA DIFERENCIA DEL 8 y el 9? <br>
<?=badge(8);?> Qué porcentaje de plata recibida tenemos contra el total por recibir/vender<br>
<?=badge(9);?> Qué porcentaje de lo vendido/separado nos falta recibir sobre lo vendido/separado <br>
<?=badge(10);?> Diseño de falta por vender, dinero por ingresar, tipo de modelos<br>
<?=badge(11);?> Cuantos departamentos interiores / exteriores quedan por vender<br>
<?=badge(12);?> Cuantos depósitos / estacionamientos vendidos<br>
</div>
<?php

}



$depas=select(
	[
		'id',
		// 'numero',
		'pvpromocion',
		'id_items_tipo',
		// 'id_subgrupo',
		"if(vista='1','int','ext') as vista",
		// "if(venta_fecha!='0000-00-00 00:00:00' or venta_fecha is not NULL,'1','0') as vendido"
		"if(`id_status`in('3','4'),'1','0') as vendido"

	],
	"productos_items_items",
	"where id_item=".$_GET['id_item'],
	0
	);
// prin($depas);

$estas=select(
	[
		'id',
		'precio',
		// "if(venta_fecha!='0000-00-00 00:00:00' or venta_fecha is not NULL,'1','0') as vendido"
		"if(`id_status`in('3','4'),'1','0') as vendido"

	],
	"productos_estacionamientos_items_items",
	"where id_item=".$_GET['id_item'],
	0
	);
// prin($estas);

$depos=select(
	[
		'id',
		'precio',
		// "if(venta_fecha!='0000-00-00 00:00:00' or venta_fecha is not NULL,'1','0') as vendido"
		"if(`id_status`in('3','4'),'1','0') as vendido"

	],
	"productos_depositos_items_items",
	"where id_item=".$_GET['id_item'],
	0
	);
// prin($estas);

$modelos=select(
	['id','nombre'],
	'productos_tipos',
	'where id_item='.$_GET['id_item'],
	0);


$items['int']['num_total']=$items['int']['num_vendido']=$items['int']['num_porvender']=
$items['ext']['num_total']=$items['ext']['num_vendido']=$items['ext']['num_porvender']=

$items['depa']['num_total']=$items['depa']['num_vendido']=$items['depa']['num_porvender']=
$items['esta']['num_total']=$items['esta']['num_vendido']=$items['esta']['num_porvender']=
$items['depo']['num_total']=$items['depo']['num_vendido']=$items['depo']['num_porvender']=

$items['depa']['mon_total']=$items['depa']['mon_vendido']=$items['depa']['mon_porvender']=

$items['esta']['mon_total']=$items['esta']['mon_vendido']=$items['esta']['mon_porvender']=
$items['depo']['mon_total']=$items['depo']['mon_vendido']=$items['depo']['mon_porvender']=
0;

foreach($modelos as $modelo){
	$items[$modelo['id']]['num_total']=$items[$modelo['id']]['num_vendido']=$items[$modelo['id']]['num_porvender']=0;
}

foreach($depas as $depa){

	$items['depa']['num_total']++;
	$items['depa']['mon_total']+=$depa['pvpromocion'];

	if($depa['vendido']){
		
		$items['depa']['num_vendido']++;
		$items['depa']['mon_vendido']+=$depa['pvpromocion'];
		$items[$depa['id_items_tipo']]['num_vendido']++;
		$items[$depa['vista']]['num_vendido']++;

	} else {
		
		$items['depa']['num_porvender']++;
		$items['depa']['mon_porvender']+=$depa['pvpromocion'];
		$items[$depa['id_items_tipo']]['num_porvender']++;
		$items[$depa['vista']]['num_porvender']++;

	}

}

foreach($estas as $esta){

	$items['esta']['num_total']++;
	$items['esta']['mon_total']+=$esta['precio'];

	if($esta['vendido']){
		
		$items['esta']['num_vendido']++;
		$items['esta']['mon_vendido']+=$esta['precio'];

	} else {
		
		$items['esta']['num_porvender']++;
		$items['esta']['mon_porvender']+=$esta['precio'];

	}

}


foreach($depos as $depo){

	$items['depo']['num_total']++;
	$items['depo']['mon_total']+=$depo['precio'];

	if($depo['vendido']){
		
		$items['depo']['num_vendido']++;
		$items['depo']['mon_vendido']+=$depo['precio'];

	} else {
		
		$items['depo']['num_porvender']++;
		$items['depo']['mon_porvender']+=$depo['precio'];

	}

}

// foreach($modelos as $modelo){

// }



// prin($modelos);

// exit();

		//TABLA 2
		unset($row);

		//HEADER
		$l=0;

		$row[$l][]=array('Ventas del Proyecto','class=nombre','class=success');
		$row[$l][]=array('vendido','class=nombre colspan=2');
		$row[$l][]=array('por vender','class=nombre colspan=2');
		$row[$l][]=array('total','class=nombre colspan=2');
		$row[$l][]=array('ratio','class=nombre');


		$l++;

		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('num','class=nombre');
		$row[$l][]=array('monto','class=nombre');
		$row[$l][]=array('num','class=nombre');
		$row[$l][]=array('monto','class=nombre');
		$row[$l][]=array('num','class=nombre');
		$row[$l][]=array('monto','class=nombre');				
		$row[$l][]=array('','class=nombre');				


		$total_mon_vendido=$total_mon_porvender=$total_mon_total=0;


		foreach([
			'depa'=>'Departamentos',
			'esta'=>'Estacionamientos',
			'depo'=>'Depositos',
			] as $iii=>$nomb){

			$l++;

			$row[$l][]=array($nomb,'class=nombre');
			$row[$l][]=array($items[$iii]['num_vendido']
				.  (($iii=='esta')?badge(12):'')  
				.  (($iii=='depo')?badge(12):'')  
			);
			$row[$l][]=array(format_excel($items[$iii]['mon_vendido']));
			$row[$l][]=array($items[$iii]['num_porvender']
				.  badge(7)  
			);
			$row[$l][]=array(format_excel($items[$iii]['mon_porvender'])
				.  badge(7)  
			);
			$row[$l][]=array($items[$iii]['num_total']);
			$row[$l][]=array(format_excel($items[$iii]['mon_total']));				
			
			$row[$l][]=array(format_excel(100*($items[$iii]['mon_vendido']/$items[$iii]['mon_total'])).'%');

			$total_mon_vendido+=$items[$iii]['mon_vendido'];
			$total_mon_porvender+=$items[$iii]['mon_porvender'];
			$total_mon_total+=$items[$iii]['mon_total'];

		}


		$l++;

		$row[$l][]=array('Totales','class=nombre');
		$row[$l][]=array('');
		$row[$l][]=array(format_excel($total_mon_vendido));
		$row[$l][]=array('');
		$row[$l][]=array(format_excel($total_mon_porvender));
		$row[$l][]=array('');
		$row[$l][]=array(format_excel($total_mon_total));				
		$row[$l][]=array(format_excel(100*($total_mon_vendido/$total_mon_total)).'%'
			.  (badge(8))  
			);


		if($_GET['format']=='excel'){

			$render_excel[]=$row;

		} else {

			echo render_table($row,'reporte_ratios');
			
		}
							





		//TABLA 3
			
		unset($tipos_depa);
		foreach($modelos as $modelo){
			$tipos_depa[]=[
				'nombre'=>$modelo['nombre'],
				'ven'=>$items[$modelo['id']]['num_vendido'],
				'por'=>$items[$modelo['id']]['num_porvender'],
			];	
		}	


		unset($row);

		//HEADER
		$l=0;

		$row[$l][]=array('Ventas de Departamentos por modelo'.badge(10),'class=nombre colspan=4','class=success');


		$l++;

		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('vendido','class=nombre');
		$row[$l][]=array('por vender','class=nombre');
		$row[$l][]=array('total','class=nombre');

		foreach($tipos_depa as $tt=> $tipo){

			$l++;

			$row[$l][]=array($tipo['nombre']
				,'class=nombre');
			$row[$l][]=array($tipo['ven']);
			$row[$l][]=array($tipo['por']);
			$row[$l][]=array($tipo['ven']+$tipo['por']);

		}


		if($_GET['format']=='excel'){

			$render_excel[]=$row;

		} else {

			echo render_table($row,'reporte_ratios');
			
		}




		//TABLA 4
		
		unset($tipos_depa);
		foreach(['int'=>'Interiores','ext'=>'Exteriores'] as $iii=>$vista){
			$tipos_depa[]=[
				'nombre'=>$vista,
				'ven'=>$items[$iii]['num_vendido'],
				'por'=>$items[$iii]['num_porvender'],
			];	
		}		
	
		unset($row);

		//HEADER
		$l=0;

		$row[$l][]=array('Ventas de Departamentos por tipo vista'. badge(11)  ,'class=nombre colspan=4','class=success');


		$l++;

		$row[$l][]=array('','class=nombre','class=info');
		$row[$l][]=array('vendido','class=nombre');
		$row[$l][]=array('por vender','class=nombre');
		$row[$l][]=array('total','class=nombre');

		foreach($tipos_depa as $tt=>$tipo){

			$l++;

			$row[$l][]=array($tipo['nombre']
				,'class=nombre');
			$row[$l][]=array($tipo['ven']);
			$row[$l][]=array($tipo['por']);
			$row[$l][]=array($tipo['ven']+$tipo['por']);

		}


		if($_GET['format']=='excel'){

			$render_excel[]=$row;

		} else {

			echo render_table($row,'reporte_ratios');
			
		}


		//RENDER EXCEL
		if($_GET['format']=='excel'){

			echo render_excel($render_excel);

		} 		



}



