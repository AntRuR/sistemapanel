<?php //á

$object=[];


$ID=($_GET['tab']=='textos_items')?$_GET['id']:'';

// $extra=select("nombre as label,url","blog_links_adicionales","where 1 $filtro_where and visibilidad='1'",0,array('nivel'=>'menu_nivel_2'));

$object['items'][]=array(
						'header'=>array(
								'nombre'=>'Blog',
								),
						'menu'=>array(
									array(
											'label' =>"Noticias",
											'url'   =>procesar_url('index.php?modulo=items&tab=blog_noticias'),
											'nivel' =>'menu_nivel_2',												
									),
									array(
											'label' =>"Comunicados",
											'nivel' =>'menu_nivel_2',												
											'url'   =>procesar_url('index.php?modulo=items&tab=blog_actividades'),
									),
									array(
											'label' =>"Fotos",
											'url'   =>procesar_url('index.php?modulo=items&tab=blog_fotos'),
											'nivel' =>'menu_nivel_2',												
									),
									array(
											'label' =>"Videos",
											'url'   =>procesar_url('index.php?modulo=items&tab=blog_videos'),
											'nivel' =>'menu_nivel_2',												
									),																													
								)
						);
						
					

$OBJECT[$PARAMS['this']]=$object; 
	
