<?php //á

/***********************************/
/*************  URLS  **************/
/***********************************/

$URLS=[];

// $URLS['index.php?modulo=formularios&tab=contacto']='contactenos';

// $URLS['index.php?modulo=app&tab=home']=""; 


/***********************************/
/************  ROUTES  *************/
/***********************************/


$routes=[

	/* home */
	'/$' => 'modulo=app&tab=home',
	// 'index.php' => 'modulo=app&tab=home',

	/* formularios */
	'/(contactenos|compra-de-terrenos)$' => 'modulo=formularios&tab=$1',

	/* paginas */
		'/(servicio-post-venta|responsabilidad-social|servicio-post-venta)$' => 'modulo=app&tab=pages&page=$1',

	/*servicios, empresa*/

		/* detail */
		'/(servicios|empresa)/(:any)/(:num)$' => 'modulo=items&tab=$1&acc=file&id=$3&friendly=$2',

	/*proyectos*/

		/* detail */
		'/(proyectos)/(:any)/(:num)$' => 'modulo=items&tab=$1&acc=file&id=$3&friendly=$2',

	/*blog*/	

		/* detail */
		'/(noticias|comunicados|fotos|videos)/(:any)/(:num)$' => 'modulo=items&tab=$1&acc=file&id=$3&friendly=$2',

		/* detail pag */
		'/(noticias|comunicados|fotos|videos)/(:any)/(:num)/pag-(:num)$' => 'modulo=items&tab=$1&acc=file&id=$3&friendly=$2&pag=$4',

		/* list */
		'/(noticias|comunicados|fotos|videos)$' => 'modulo=items&tab=$1',

		/* list pag */
		'/(noticias|comunicados|fotos|videos)/pag-(:num)$' => 'modulo=items&tab=$1&pag=$2',

		/* list filter / val */
		'/(noticias|comunicados|fotos|videos)/(fecha)/(:any)/(:any)' => 'modulo=items&tab=$1&fil=$2&val=$3&friendly=$4',
		
];


/**********************************************/
/************  RENAME CONTROLLER  *************/
/**********************************************/


$rename_controller=[
	''		   =>'home',
	'contactenos'      =>'contacto',
	'servicios'        =>'servicios_items',
	'empresa'          =>'empresa_items',

	'noticias'    	   =>'blog_noticias',
	'comunicados' 	   =>'blog_actividades',
	'videos'      	   =>'blog_videos',
	'fotos'       	   =>'blog_fotos',
];


$rename_controller_flip = array_flip($rename_controller);



/**********************************************/
/***************  COMMON LINK  ****************/
/**********************************************/

$COMMON['url_home']           =procesar_url('index.php?modulo=app&tab=home');
$COMMON['url_contactenos']    =procesar_url('index.php?modulo=formularios&tab=contacto');
$COMMON['url_boletin']        =procesar_url('index.php?modulo=formularios&tab=boletin');


// $COMMON['url_login']          =procesar_url('index.php?modulo=formularios&tab=login');
// $COMMON['url_cerrar_sesion']  =procesar_url('index.php?modulo=formularios&tab=cerrar_sesion');
// $COMMON['url_registro']       =procesar_url('index.php?modulo=formularios&tab=registro');
// $COMMON['url_olvido_clave']   =procesar_url('index.php?modulo=formularios&tab=recordar_clave');
// $COMMON['url_editar_usuario'] =procesar_url('index.php?modulo=formularios&tab=editar_usuario');
// $COMMON['url_cambiar_clave']  =procesar_url('index.php?modulo=formularios&tab=editar_clave');
// $COMMON['url_inscripciones']  =procesar_url('index.php?modulo=formularios&tab=inscripciones');

// $COMMON['url_cotizacion']     =procesar_url('index.php?modulo=formularios&tab=cotizacion');
// $COMMON['url_pedido']         =procesar_url('index.php?modulo=formularios&tab=pedido');
