<?php //á

$THIS=$PARAMS['this'];

$object=array();

$object['menu']=array(

					array(
						'nombre'=>'Home',
						'url'=>url('index.php?modulo=app&tab=home'),
						'id'=>'1',
					),
					array(
						'nombre'=>'Empresa',
						'url'=>url('index.php?modulo=app&tab=pages&page=empresa'),
						'id'=>'2',
					),
					array(
						'nombre'=>'Servicios',
						'url'=>url('index.php?modulo=app&tab=pages&page=servicios'),
						'id'=>'3',
					),
					array(
						'nombre'=>'Responsabilidad Social',
						'url'=>url('index.php?modulo=app&tab=pages&page=responsabilidad-social'),
						'id'=>'4',
					),
					array(
						'nombre'=>'Servicio Post-Venta',
						'url'=>url('index.php?modulo=app&tab=pages&page=servicio-post-venta'),
						'id'=>'5',
					),
					array(
						'nombre'=>'Compra de Terrenos',
						'url'=>url('index.php?modulo=formularios&tab=compra-de-terrenos'),
						'id'=>'6',
					),
					array(
						'nombre'=>'Contáctenos',
						'url'=>url('index.php?modulo=formularios&tab=contacto'),
						'id'=>'7',
					),

				);


$object['menu'] = web_procesar_menu($object['menu'],"izquierda");

$object['menu']['1']['menu']=select(
	array(
		"id",
		"nombre"
	),
	'textos_items',
	'where 1 and visibilidad=1 and id_grupo=1
	order by id asc
	limit 0,100',
	0,
	array(
	    'url'=>array('url'=>array('url'=>"index.php?modulo=items&tab=textos_items&acc=file&id={id}&friendly={nombre}")),											
	)
	);

$object['menu']['2']['menu']=select(
	array(
		"id",
		"nombre"
	),
	'textos_items',
	'where 1 and visibilidad=1 and id_grupo=2
	order by id asc
	limit 0,100',
	0,
	array(
	    'url'=>array('url'=>array('url'=>"index.php?modulo=items&tab=textos_items&acc=file&id={id}&friendly={nombre}")),											
	)
	);






//$object['menu'] = web_re_procesar_menu($object['menu'],$SERVER['URL']);

//prin($object);


$OBJECT[$THIS]=$object;

