<?php //á

//$filtro_where=($_GET['sec']=='cgtp')?" and page='4' ":$secc['where'];
$filtro_where=" and page='1' ";
$filtro_param=($_GET['sec']=='cgtp')?"sec=cgtp&":$secc['param'];
$filtro_nombre=$secc['nombre'];


$FILTRO	= " and 1 ";
$ORDEN	= " order by fecha desc";

$VACIO	= "No hay ninguna publicación en la página principal de ésta sección";
$TITULO = "Portada";



/**********    QUERY    ************/

$LISTA = paginacion(
        array(
			'separador'       =>"",
			'porpag'          =>12,
			'anterior'        =>$lang['anterior'],
			'siguiente'       =>$lang['siguiente'],
			'enlace'          =>"index.php?modulo=items&acc=list&tab=".$PARAMS['conector']."&gru=0&pag=",
			'procesar_url'    =>1,
			'pagina_disabled' =>1,
            //,'onclick'=>"?pag="
        ),
        "id,nombre,resumen as texto,fecha_creacion",
        'servicios_items',
        "where 1 and  visibilidad='1'",
        0,
 		array(
		    'url'=>array('url'=>array("index.php?".$filtro_param."modulo=items&tab=servicios_items&acc=file&id={id}&friendly={nombre}")),
			// ,'fecha'=>array('fecha'=>array('{fecha}','1'))		
			'vermas'=>'Ver mas',
			'esquema'=>'foto,nombre?limit=100,texto?limit=110,vermas?tag=a',
			// ,'foto:get_atributos'=>array('atributos'=>'newite_imas,{fecha_creacion},{file},2,172x101,1')

			'foto'=>array('foto'=>array(
										"id,file,fecha_creacion|news_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1",
										"newite_imas",
										array( 
											'get_atributos'=>'2,172x101,0'
											 )
								   	   )
						 ) 
							
			) 
        );
	
$LISTA['vacio']  = $VACIO;

$LISTA['titulo'] = $TITULO;

$OBJECT[$PARAMS['conector']]=$LISTA;

																	
//////////////////HEADER/////////////////////

$HEAD['titulo'] =  $LISTA['titulo']." | ".$COMMON['datos_root']['titulo_web'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

