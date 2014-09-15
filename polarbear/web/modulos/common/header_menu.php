<?php //á 

$THIS=$PARAMS['this'];

$object=array();

/*
$object['menu']=select("nombre,url",'menus_items','where id_grupo='.dato('id','menus',"where nombre='main'").' and visibilidad=1 limit 0,100',0,
array(
    'url'=>"index.php?{url}",
)
);
*/

$object['menu']=array(
					array(
						'label'=>'Inicio',
						'url'=>'index.php?modulo=app&tab=home',
					),
					array(
						'url'=>'index.php?modulo=app&tab=pages&page=quienes_somos',
						'label'=>'Quienes Somos',
					),
					array(
						'url'=>'index.php?modulo=app&tab=pages&page=servicios',
						'label'=>'Servicios',
						'id'=>'3'
					),
					array(
						'url'=>'index.php?modulo=app&tab=pages&page=nuestra_flota',
						'label'=>'Nuestra Flota',
					),
					array(
						'url'=>'index.php?modulo=app&tab=pages&page=cobertura',
						'label'=>'Cobertura',
					),
					array(
						'url'=>'index.php?modulo=app&tab=pages&page=nuestros_clientes',
						'label'=>'Nuestros Clientes',
					),
					array(
					 	'url'=>'index.php?modulo=formularios&tab=contactenos',
						'label'=>'Contáctenos',
					),					
																								
				);							

	
	$object['menu']['2']['menu']=select(
	array(
		"id",
		"nombre as label"
	),
	'servicios_items',
	'where 1 and visibilidad=1 
	order by id asc 	
	limit 0,18',
	0,
	array(
		'url'=>'index.php?modulo=items&tab=servicios_items&acc=file&id={id}'
		)
	);		
			
// prin($object);				

$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

$object['menu'] = web_re_procesar_menu($object['menu'],$SERVER['URL']);

$OBJECT[$THIS]=$object;

