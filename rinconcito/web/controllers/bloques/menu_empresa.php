<?php //á
//prin ($PARAMS);

$object=array();


// $ID=($_GET['tab']=='textos_items')?$_GET['id']:'';
	

$gru=array();
	
	$gru['menu']=select(
			'id,nombre as label',
			'empresa_items',
			"where visibilidad='1' $filtro_where order by id asc, id asc ",
			0,
				[
				    'url'=>"index.php?".$filtro_param."modulo=items&tab=empresa_items&acc=file&id={id}&friendly={label}",							
				]
			);

	$gru['menu'] = web_procesar_menu($gru['menu']);

	$gru['header']['nombre']='Empresa';
	
	$object['items'][]=$gru; unset($gru);
	
$OBJECT[$PARAMS['this']]=$object; 
	
