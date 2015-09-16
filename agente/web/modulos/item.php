<?php //á

/**********************************************/
//////////////////INCLUDES//////////////////////
/**********************************************/

/*multibox*/
$INCLUDES['css'][]='css/multiBox.css';
$INCLUDES['css_ie6'][]='css/multiBoxIE6.css';
$INCLUDES['js'][]='js/mootools-1.2.3.1-more.js';
$INCLUDES['js'][]='js/overlay.js';
$INCLUDES['js'][]='js/multiBox.js';
/*Slide*/
$INCLUDES['js'][]='js/_class.noobSlide.packed.js';
/*formulario*/
$INCLUDES['js'][]='js/lang/es.js';
$INCLUDES['js'][]='js/formcheck.js';
$INCLUDES['css'][]='css/theme/blue/formcheck.css';


/**********************************************/
///////////////home_bloque_buscador.php//////////
/**********************************************/

include("buscador.php");


/**********************************************/
//////////////items_main.php////////////////////
/**********************************************/



	$ITEM_ID = select_dato(
        "id"
        ,"productos_items"
        ,"where nombre='".url_decode_seo($_GET['id'])."'"
        ,0
        );
	

		
$ITEM['datos']= select_fila(
        "id,estado,nombre,codigo,tipo,direccion,descripcion,area,precio,contacto as id_contacto,id_grupo,departamento as id_departamento,provincia as id_provincia,distrito as id_distrito"
        ,"productos_items"
        ,"where id='".$ITEM_ID."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
		,array(
		
			'departamento'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"geo_departamentos"
											,'donde'=>"where id='{id_departamento}'"
											,'debug'=>0
										)
									),
									
			'provincia'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"geo_provincias"
											,'donde'=>"where id='{id_provincia}'"
											,'debug'=>0
										)
									),
									
			'distrito'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"geo_distritos"
											,'donde'=>"where id='{id_distrito}'"
											,'debug'=>0
										)
									),
									
			'grupo'=>array('sub_select_dato'=>array(
											'campo'=>"nombre"
											,'tabla'=>"productos_grupos"
											,'donde'=>"where id='{id_grupo}'"
											,'debug'=>0
										)
									),
									
			'contacto'=>array('sub_select_fila'=>array(
											'campos'=>"nombre,empresa,telefono,email"
											,'tabla'=>"clientes"
											,'donde'=>"where id='{id_contacto}'"
											,'debug'=>0
										)
									)									

			)
        );

//prin($ITEM['datos']);	

$SUBGRU_ID=$ITEM['datos']['id_grupo'];


$HEAD['titulo'] = procesar_titulo($ITEM['datos']['nombre']);

$HEAD['meta_keywords'] = procesar_keywords($ITEM['datos']['nombre']." ".$ITEM['datos']['descripcion_general']);

$HEAD['meta_descripcion'] = procesar_description($ITEM['datos']['descripcion_general']);



include("formularios.php");



/**********************************************/
//////////////item_bloque_fotos.php/////////////
/**********************************************/

$items_vista_principal= select_fila(
	 "id,file,fecha_creacion,foto_descripcion"
	,"productos_items"
	,"where id='".$ITEM_ID."'"
	,0
	,array(
	
			'carpeta'=>'prodite_imas'
			,'tamano_thumb'=>'3'
			,'dimensionado_thumb'=>'137x137'
			,'tamano_zoom'=>'4'
			,'centrado'=>'1'
			,'atributos_foto_thumb'=>array('get_atributos'=>array(
										'carpeta'=>'{carpeta}'
										,'fecha'=>'{fecha_creacion}'
										,'file'=>'{file}'
										,'tamano'=>'{tamano_thumb}'
										,'dimensionado'=>'{dimensionado_thumb}'
										,'centrado'=>'{centrado}'
										)
									)
			,'foto_zoom'=>array('get_archivo'=>array(
										'carpeta'=>'{carpeta}'
										,'fecha'=>'{fecha_creacion}'
										,'file'=>'{file}'
										,'tamano'=>'{tamano_zoom}'
										)
									)
			
			,'alt'=>'{foto_descripcion}'
			,'title'=>'{foto_descripcion}'
			
		  )	
	);	
	
	
$items_vistas_adicionales= select(
	"id,file,fecha_creacion,foto_descripcion"
	,"subproductos_items"
	,"where id_item='".$ITEM_ID."' and  visibilidad='1' order by id asc limit 0,100"
	,0
	,array(
			'carpeta'=>'prodsubite_imas'
			,'tamano_thumb'=>'2'
			,'dimensionado_thumb'=>'137x137'
			,'tamano_zoom'=>'3'
			,'centrado'=>'1'
			,'atributos_foto_thumb'=>array('get_atributos'=>array(
										'carpeta'=>'{carpeta}'
										,'fecha'=>'{fecha_creacion}'
										,'file'=>'{file}'
										,'tamano'=>'{tamano_thumb}'
										,'dimensionado'=>'{dimensionado_thumb}'
										,'centrado'=>'{centrado}'
										)
									)
			,'foto_zoom'=>array('get_archivo'=>array(
										'carpeta'=>'{carpeta}'
										,'fecha'=>'{fecha_creacion}'
										,'file'=>'{file}'
										,'tamano'=>'{tamano_zoom}'
										)
									)
											
										
			,'alt'=>'{foto_descripcion}'
			,'title'=>'{foto_descripcion}'
			
		  )
    );
	
$ITEM['fotos']['items']=array_merge(array($items_vista_principal),$items_vistas_adicionales);

//prin($items_vistas_adicionales);
	
$ITEM['fotos']['label']="vistas";	
$ITEM['fotos']['width']="140";
$ITEM['fotos']['height']="450";
$ITEM['fotos']['autoplay']="false";
$ITEM['fotos']['itemsporpagina']="3";
$ITEM['fotos']['mode']="vertical";


	

?>	