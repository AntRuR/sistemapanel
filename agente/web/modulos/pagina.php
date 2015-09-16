<?php //á

/**********************************************/
//////////////////INCLUDES//////////////////////
/**********************************************/

if($_GET['tab']=='empresa'){

/*multibox*/
$INCLUDES['css'][]='css/multiBox.css';
$INCLUDES['css_ie6'][]='css/multiBoxIE6.css';
$INCLUDES['js'][]='js/mootools-1.2.3.1-more.js';
$INCLUDES['js'][]='js/overlay.js';
$INCLUDES['js'][]='js/multiBox.js';

}

/**********************************************/
///////////////home_bloque_buscador.php//////////
/**********************************************/

include("buscador.php");

/**********************************************/
/////////home_bloque_recomendar.php/////////////
/**********************************************/

include("formularios.php");

/**********************************************/
//////////////publicacion_main.php//////////////
/**********************************************/

	
$dimensionado_imagenes_texto="250x1000";
 
$item= select_fila(
        "id,pagina,titulo,texto,foto,fecha_creacion,foto_descripcion"
        ,"paginas"
        ,"where pagina='".$_GET['tab']."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'pag_imas'
                ,'tamano'=>'2'
                //,'dimensionado'=>'120x90'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{foto}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            )
                                        )
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{foto}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
										
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'              	    
    
              )
        );
		
if($_GET['tab']=='empresa'){


	$LISTADO = paginacionnumerada(
			array(
				'separador'=>""
				,'porpag'=>"50"
				,'anterior'=>"«anterior"
				,'siguiente'=>"siguiente»"
				,'enlace'=>"index.php?modulo=pagina&tab=empresa".$variables."&pag="
				,'procesar_url'=>"1"
				//,'onclick'=>"?pag="
			)
			,"id,nombre,empresa,telefono,email,direccion,descripcion,foto,fecha_creacion"
			,"socios"
			,"where 1 and  visibilidad='1' order by id desc"
			,0
			,array(
					'carpeta'=>'soc_imas'
					,'tamano'=>'2'
					,'tamano_zoom'=>'3'
					,'dimensionado'=>'100x100'
					,'centrado'=>'1'
					,'get_atributos'=>array('get_atributos'=>array(
												'carpeta'=>'{carpeta}'
												,'fecha'=>'{fecha_creacion}'
												,'file'=>'{foto}'
												,'tamano'=>'{tamano}'
												,'dimensionado'=>'{dimensionado}'
												,'centrado'=>'{centrado}'
												)
											)									
											
					,'get_archivo'=>array('get_archivo'=>array(
												'carpeta'=>'{carpeta}'
												,'fecha'=>'{fecha_creacion}'
												,'file'=>'{foto}'
												,'tamano'=>'{tamano_zoom}'
												)
											)										
							
					,'nombre'=>array('limit_string'=>array(
												'string'=>'{nombre}'
												,'limit'=>'90'
												)
											)
											
					,'direccion'=>array('limit_string'=>array(
												'string'=>'{direccion}'
												,'limit'=>'100'
												)
											)
	
					,'descripcion'=>array('limit_string'=>array(
												'string'=>'{descripcion}'
												,'limit'=>'100'
												)
											)																													
		
				  )
			);
	
	//prin($LISTADO);
	
	$LISTADO['vacio'] = 'Aún no hay socios registrados';
	
	$LISTADO['titulo'] = 'Socios';
	
	//$filas = $matriz['filas'];
	//$total = $matriz['total'];
	//$anterior = $matriz['anterior'];
	//$siguiente = $matriz['siguiente'];
	//$desde = $matriz['desde'];
	//$hasta = $matriz['hasta'];       
	//$tren = $matriz['tren'];
	//prin($LISTADO);



}

/**********************************************/
////////////////// HEAD //////////////////////
/**********************************************/

$HEAD['titulo'] = procesar_titulo($item['titulo']);

$HEAD['meta_keywords'] = procesar_keywords($item['titulo']." ".$item['texto']);

$HEAD['meta_descripcion'] = procesar_description($item['texto']); 

?>