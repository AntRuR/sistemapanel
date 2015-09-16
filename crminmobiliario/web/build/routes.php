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
	'/$' => 'modulo=app&tab=redir&url=panel',
	// '/$' => 'modulo=app&tab=home',
	// 'index.php' => 'modulo=app&tab=home',

	/* formularios */
	'/(contactenos)$' => 'modulo=formularios&tab=$1',

	/*servicios, empresa*/

		/* detail */
		'/(cotizacion)/(:any)/imprimir$' => 'modulo=items&tab=$1&acc=file&id_venta=$2&imprimir=1',
		'/(cotizacion)/(:any)$' => 'modulo=items&tab=$1&acc=file&id_venta=$2',	
];


/**********************************************/
/************  RENAME CONTROLLER  *************/
/**********************************************/


$rename_controller=[
	''				=>'home',
	'cotizacion'	=>'productos_imprimir',
];


$rename_controller_flip = array_flip($rename_controller);



/**********************************************/
/***************  COMMON LINK  ****************/
/**********************************************/

// $COMMON['url_home']           =procesar_url('index.php?modulo=app&tab=home');
// $COMMON['url_contactenos']    =procesar_url('index.php?modulo=formularios&tab=contacto');
// $COMMON['url_boletin']        =procesar_url('index.php?modulo=formularios&tab=boletin');


// $COMMON['url_login']          =procesar_url('index.php?modulo=formularios&tab=login');
// $COMMON['url_cerrar_sesion']  =procesar_url('index.php?modulo=formularios&tab=cerrar_sesion');
// $COMMON['url_registro']       =procesar_url('index.php?modulo=formularios&tab=registro');
// $COMMON['url_olvido_clave']   =procesar_url('index.php?modulo=formularios&tab=recordar_clave');
// $COMMON['url_editar_usuario'] =procesar_url('index.php?modulo=formularios&tab=editar_usuario');
// $COMMON['url_cambiar_clave']  =procesar_url('index.php?modulo=formularios&tab=editar_clave');
// $COMMON['url_inscripciones']  =procesar_url('index.php?modulo=formularios&tab=inscripciones');

// $COMMON['url_cotizacion']     =procesar_url('index.php?modulo=formularios&tab=cotizacion');
// $COMMON['url_pedido']         =procesar_url('index.php?modulo=formularios&tab=pedido');
