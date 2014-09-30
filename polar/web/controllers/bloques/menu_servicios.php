<?php //á

$object=array();


$ID=($_GET['tab']=='textos_items')?$_GET['id']:'';
	

$gru=array();
	
	$gru['menu']=select(
			'id,nombre',
			'servicios_items',
			"where visibilidad='1' $filtro_where order by id asc, id asc ",
			0,
				array(
				    'url'=>array('procesar_url'=>array('url'=>"index.php?".$filtro_param."modulo=items&tab=servicios_items&acc=file&id={id}&friendly={nombre}")),							
					'nivel'=>array('match'=>array('{id_subgrupo}','','menu_nivel_2','menu_nivel_2')),
					'class'=>array('match'=>array('{id}',$ID,'selected','')),
				)
			);

	$gru['header']['nombre']='Servicios';
	
	$object['items'][]=$gru; unset($gru);
	


$OBJECT[$PARAMS['this']]=$object; 
	
