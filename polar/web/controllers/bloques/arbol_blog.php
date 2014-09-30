<?php //á

$object=array();


$ID=($_GET['tab']=='textos_items')?$_GET['id']:'';

// $extra=select("nombre as label,url","blog_links_adicionales","where 1 $filtro_where and visibilidad='1'",0,array('nivel'=>'menu_nivel_2'));

$object['items'][]=array(
						'header'=>array(
								'nombre'=>'Blog',
								),
						'menu'=>array_merge(array(
										array(
												'label'=>"Noticias",
												'url'=>'index.php?'.$filtro_param.'modulo=items&tab=blog_noticias&acc=list',
												'nivel'=>'menu_nivel_2',												
										),
										array(
												'label'=>"Comunicados",
												'nivel'=>'menu_nivel_2',												
												'url'=>'index.php?'.$filtro_param.'modulo=items&tab=blog_actividades&acc=list',
										),
										array(
												'label'=>"Fotos",
												'url'=>'index.php?'.$filtro_param.'modulo=items&tab=blog_fotos&acc=list',
												'nivel'=>'menu_nivel_2',												
										),
										array(
												'label'=>"Videos",
												'url'=>'index.php?'.$filtro_param.'modulo=items&tab=blog_videos&acc=list',
												'nivel'=>'menu_nivel_2',												
										),																													
									),(($extra)?$extra:array()))
						);
						
					

$OBJECT[$PARAMS['this']]=$object; 
	
