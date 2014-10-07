<?php //á

$object=[];


// $ID=($_GET['tab']=='textos_items')?$_GET['id']:'';
	

$gru=[];
	
	$gru['menu']=select(
			'id,nombre',
			'servicios_items',
			"where visibilidad='1' $filtro_where order by id asc, id asc ",
			0,
				[
				    'url'=>"index.php?".$filtro_param."modulo=items&tab=servicios_items&acc=file&id={id}&friendly={nombre}",							
				]
			);

	$gru['menu'] = web_procesar_menu($gru['menu']);

	$gru['header']['nombre']='Servicios';
	
	$object['items'][]=$gru; unset($gru);

$OBJECT[$PARAMS['this']]=$object; 
	
