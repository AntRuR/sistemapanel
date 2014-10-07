<?php //á 

$THIS=$PARAMS['this'];

$object=[];

/*
$object['menu']=select("nombre,url",'menus_items','where id_grupo='.dato('id','menus',"where nombre='main'").' and visibilidad=1 limit 0,100',0,
array(
    'url'=>"index.php?{url}",
)
);
*/

$object['menu']=[
					[
						'label'=>'Inicio',
						'url'=>'index.php?modulo=app&tab=home',
					],
					[
						'label'=>'Empresa',
						'url'=>'index.php?modulo=items&tab=empresa_items',
						'disabled'=>1,
					],
					[
						'label'=>'Servicios',
						'url'=>'index.php?modulo=items&tab=servicios_items',
						'disabled'=>1,
					],
					[
						'url'=>'index.php?modulo=app&tab=pages&page=nuestra_flota',
						'label'=>'Nuestra Flota',
					],
					[
						'url'=>'index.php?modulo=app&tab=pages&page=cobertura',
						'label'=>'Cobertura',
					],
					[
					 	'url'=>'index.php?modulo=formularios&tab=contacto',
						'label'=>'Contáctenos',
					],					
																								
				];						


	$object['menu']['1']['menu']=select(
	[
		"id",
		"nombre as label"
	],
	'empresa_items',
	'where 1 and visibilidad=1 
	order by id asc 	
	limit 0,18',
	0,
	[
		'url'=>'index.php?modulo=items&tab=empresa_items&acc=file&id={id}&friendly={label}'
	]
	);	

	
	$object['menu']['2']['menu']=select(
	[
		"id",
		"nombre as label"
	],
	'servicios_items',
	'where 1 and visibilidad=1 
	order by id asc 	
	limit 0,18',
	0,
	[
		'url'=>'index.php?modulo=items&tab=servicios_items&acc=file&id={id}&friendly={label}'
	]
	);		
			
// prin($object);				

$object['menu'] = web_procesar_menu($object['menu']);

// $object['menu'] = web_re_procesar_menu($object['menu'],$SERVER['URL']);

$OBJECT[$THIS]=$object;

