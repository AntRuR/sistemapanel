<?php //á
//prin ($PARAMS);

$object=array();

$secc=$SECCIONES[$_GET['sec']];
$filtro_where=$secc['where'];
$filtro_param=$secc['param'];
$filtro_nombre=$secc['nombre'];

$ID=($_GET['tab']=='textos_items')?$_GET['id']:'';
	
$grupos=select(array(
					"id",
					"nombre",
					),
				"textos_grupos",
				"where 1 and visibilidad='1' $filtro_where order by id asc limit 0,100",
				0
				);

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
/*
if($_GET['sec']!='cgtp'){
	$object['items']['0']['menu'][]=array(
										'nombre'=> '<b>Informes Legales</b>',
										'id_subgrupo'=>'',
										'url' => 'index.php?modulo=items&tab=publicaciones2_items&acc=list',
										'nivel' => 'menu_nivel_2',
										//'class' => ($_GET['modulo']=='app' and $_GET['tab']=='stats_consultas')?'selected':'',
										);	
}									
*/
if($_GET['sec']=='defensa_laboral'){
/*
$object['items']['0']['menu'][]=array(
									'nombre'=> '<b>Normas Legales</b>',
                                    'id_subgrupo'=>'',
                                    'url' => 'index.php?modulo=items&tab=publicaciones3_items&acc=list',
                                    'nivel' => 'menu_nivel_2',
                                    //'class' => ($_GET['modulo']=='app' and $_GET['tab']=='stats_consultas')?'selected':'',
									);	
*/									
$object['items']['0']['menu'][]=array(
									'nombre'=> '<b>Estadísticas de Convenios</b>',
                                    'id_subgrupo'=>'',
                                    'url' => 'index.php?sec=defensa_laboral&modulo=app&tab=stats_convenios',
                                    'nivel' => 'menu_nivel_2',
                                    'class' => ($_GET['modulo']=='app' and $_GET['tab']=='stats_convenios')?'selected':'',
									);
$object['items']['0']['menu'][]=array(
									'nombre'=> '<b>Estadísticas de Consultas</b>',
                                    'id_subgrupo'=>'',
                                    'url' => 'index.php?sec=defensa_laboral&modulo=app&tab=stats_consultas',
                                    'nivel' => 'menu_nivel_2',
                                    'class' => ($_GET['modulo']=='app' and $_GET['tab']=='stats_consultas')?'selected':'',
									);	
$object['items']['0']['menu'][]=array(
									'nombre'=> '<b>Normas Laborales</b>',
                                    'id_subgrupo'=>'',
                                    'url' => 'index.php?modulo=items&tab=publicaciones3_items&acc=list',
                                    'nivel' => 'menu_nivel_2',
                                    'class' => ($_GET['modulo']=='items' and $_GET['tab']=='publicaciones3_items')?'selected':'',
									);							
}
//prin($object);

$object['panel']='textos_grupos,textos_subgrupos,textos_items';

$object['styles']='arbol_1';

$object['classStyle']='arbol_1';

//$ITEMS['items']=array($ITEMS['items'][1]);
//prin($ITEMS);

$OBJECT[$PARAMS['this']]=$object; 
	
?>