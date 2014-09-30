<?php //á
//prin ($PARAMS);

$object=array();


$ID=($_GET['tab']=='textos_items')?$_GET['id']:'';
	
$grupos=select(array(
					"id",
					"nombre",
					),
				"textos_grupos",
				"where 1 and visibilidad='1' $filtro_where  and id not in ('4','3') order by id asc limit 0,100",
				0
				);
$gru=array();
foreach($grupos as $grupo){
	
	$gru['menu']=select(
			'id,nombre,id_subgrupo',
			'textos_items',
			"where visibilidad='1' and id_grupo='".$grupo['id']."' $filtro_where order by id_subgrupo asc, id asc ",
			0,
				array(
				    'url'=>array('procesar_url'=>array('url'=>"index.php?".$filtro_param."modulo=items&tab=textos_items&acc=file&id={id}&friendly={nombre}")),							
					'nivel'=>array('match'=>array('{id_subgrupo}','','menu_nivel_2','menu_nivel_2')),
					'class'=>array('match'=>array('{id}',$ID,'selected','')),
				)
			);
	$id_subgrupo=0;		
	$Grus=array();
	foreach($gru['menu'] as $grus){
		if($grus['id_subgrupo']!='' and $id_subgrupo!=$grus['id_subgrupo']){
			
			$id_subgrupo=$grus['id_subgrupo'];
			$Grus[]=fila(
			'id,nombre',
			'textos_subgrupos',
			"where visibilidad='1' and id='".$grus['id_subgrupo']."' $filtro_where order by id desc ",
			0,
				array(
					'nivel'=>'menu_nivel_1',
				)
			);

		}
		$Grus[]=$grus;		
	}
	$gru['menu']=$Grus; unset($Grus);
	$gru['header']['nombre']=$grupo['nombre'];
	
	$object['items'][]=$gru; unset($gru);
	
}


$OBJECT[$PARAMS['this']]=$object; 
	
