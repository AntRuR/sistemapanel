<?php //á

/**********************************************/
//////////////////////INCLUDES//////////////////
/**********************************************/

if($_GET['tab']=='videos_1' or $_GET['tab']=='videos_2'){

$HEAD['INCLUDES']['css'][]='css/multiBox.css';
$HEAD['INCLUDES']['css_ie6'][]='css/multiBoxIE6.css';
$HEAD['INCLUDES']['js'][]='js/mootools-1.2.3.1-more.js';
$HEAD['INCLUDES']['js'][]='js/overlay.js';
$HEAD['INCLUDES']['js'][]='js/multiBox.js';

}

/**********************************************/
//////////////publicacion_left.php///////////
/**********************************************/

include('publicacion_left.php');

/**********************************************/
//////////////publicacion_main.php//////////////
/**********************************************/

	
$dimensionado_imagenes_texto="250x1000";

switch($_GET['tab']){
case "noticias":

	$ID=($_GET['id']!='')?select_dato(
		"id",
		"noticias",
		"where titular='".url_decode_seo($_GET['id'])."'"):select_dato(
		"id",
		"noticias",
		"where 1 order by id desc limit 0,1");
	
	//$ID=$_GET['id'];
	
		
	$PUBLICACION['item'] = select_fila(
		array("id","fecha","titular","descripcion","file","foto_descripcion","fecha_creacion"),
		"noticias",
		"where id='$ID' and  visibilidad='1'"
		,0
		,array(
				 'carpeta'=>'not_imas'
				,'tamano_thumb'=>'2'
				,'dimensionado'=>$dimensionado_imagenes_texto
				,'get_atributos'=>array('get_atributos'=>array(
											'carpeta'=>'{carpeta}',
											'fecha'=>'{fecha_creacion}',
											'file'=>'{file}',
											'tamano'=>'{tamano_thumb}',
											'dimensionado'=>'{dimensionado}'
											)
										)	
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'
	
			  )		
		); 

	$HEAD['titulo'] = procesar_titulo($PUBLICACION['item']['titular']);
	
	$HEAD['meta_keywords'] = procesar_keywords($PUBLICACION['item']['titular']);
	
	$HEAD['meta_descripcion'] = procesar_description($PUBLICACION['item']['descripcion']);
	
		
break;
case "consejos":

	$ID=($_GET['id']!='')?select_dato(
				"id",
				"consejos",
				"where titulo='".url_decode_seo($_GET['id'])."'"):select_dato(
				"id",
				"consejos",
				"where 1 order by id desc limit 0,1",
				0);
	//$ID=$_GET['id'];												
												
	$PUBLICACION['item']= select_fila(
		"id,titulo,titular,texto,file,fecha_creacion,foto_descripcion",
		"consejos",
		"where id='$ID' and  visibilidad='1'"
		,0
		,array(
				 'carpeta'=>'con_imas'
				,'tamano_thumb'=>'2'
				,'dimensionado'=>$dimensionado_imagenes_texto
				,'get_atributos'=>array('get_atributos'=>array(
											'carpeta'=>'{carpeta}',
											'fecha'=>'{fecha_creacion}',
											'file'=>'{file}',
											'tamano'=>'{tamano_thumb}',
											'dimensionado'=>'{dimensionado}'
											)
										)	
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'										
	
			  )			  	
		);

	$HEAD['titulo'] = procesar_titulo($PUBLICACION['item']['titulo']);
	
	$HEAD['meta_keywords'] = procesar_keywords($PUBLICACION['item']['titulo']);	

	$HEAD['meta_descripcion'] = procesar_description($PUBLICACION['item']['texto']);
	
break;
case "eventos":

	$ID=($_GET['id']!='')?select_dato(
		"id",
		"eventos",
		"where titular='".url_decode_seo($_GET['id'])."'"):select_dato(
		"id",
		"eventos",
		"where 1 order by id desc limit 0,1"
		,0);
	
	//$ID=$_GET['id'];
		
	$PUBLICACION['item'] = select_fila(
		"id,fecha,titular,descripcion,file,fecha_creacion,foto_descripcion",
		"eventos",
		"where id='$ID' and  visibilidad='1'"
		,0	
		,array(
				 'carpeta'=>'eve_imas'
				,'tamano_thumb'=>'2'
				,'dimensionado'=>$dimensionado_imagenes_texto
				,'get_atributos'=>array('get_atributos'=>array(
											'carpeta'=>'{carpeta}',
											'fecha'=>'{fecha_creacion}',
											'file'=>'{file}',
											'tamano'=>'{tamano_thumb}',
											'dimensionado'=>'{dimensionado}'
											)
										)	
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'										
	
			  )			  
		); 
		
	$HEAD['titulo'] = procesar_titulo($PUBLICACION['item']['titular']);
	
	$HEAD['meta_keywords'] = procesar_keywords($PUBLICACION['item']['titular']);	

	$HEAD['meta_descripcion'] = procesar_description($PUBLICACION['item']['descripcion']);
		
break;
case "boletines":

	$ID=($_GET['id']!='')?select_dato(
		"id",
		"boletines_grupos",
		"where nombre='".url_decode_seo($_GET['id'])."'"):select_dato(
		"id",
		"boletines_grupos",
		"where 1 order by id desc limit 0,1",
		0);
	
	//$ID=$_GET['id'];
		
	$items_vista_principal= select_fila(
		 "id,fecha,nombre,file,fecha_creacion,foto_descripcion"
		,"boletines_grupos"
		,"where id='".$ID."'"
		,0
		,array(
				 'carpeta'=>'bolgru_imas'
				,'tamano_grande'=>'3'			
				,'dimensionado'=>'500x2000'
				,'get_atributos'=>array('get_atributos'=>array(
											 'carpeta'=>'{carpeta}'
											,'fecha'=>'{fecha_creacion}'
											,'file'=>'{file}'
											,'tamano'=>'{tamano_grande}'
											,'dimensionado'=>'{dimensionado}'
											)
										)	
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'											
	
			  )	
		);	
	
	$items_vistas_adicionales= select(
		"id,file,fecha_creacion,foto_descripcion"
		,"boletines_items"
		,"where id_grupo='".$ID."' and  visibilidad='1' order by id asc limit 0,100"
		,0
		,array(
				 'carpeta'=>'bolite_imas'
				,'tamano_grande'=>'2'
				,'dimensionado'=>'500x2000'
				,'get_atributos'=>array('get_atributos'=>array(
											'carpeta'=>'{carpeta}',
											'fecha'=>'{fecha_creacion}',
											'file'=>'{file}',
											'tamano'=>'{tamano_grande}',
											'dimensionado'=>'{dimensionado}'
											)
										)
				,'alt'=>'{foto_descripcion}'
				,'title'=>'{foto_descripcion}'															
	
			  )
		);
		
	$items=array_merge(
						array($items_vista_principal)
						,$items_vistas_adicionales
					  );
	
	//prin($items);

	$PUBLICACION['listado'] = paginacion_items(
			array(
				'separador'=>""
				,'porpag'=>"1"
				,'anterior'=>"«anterior"
				,'siguiente'=>"siguiente»"
				,'enlace'=>"index.php?modulo=publicacion&tab=boletines&id=".$items_vista_principal['nombre']."&pag="
				,"procesar_url"=>1
				//,'onclick'=>"?pag="
			),$items);
			
	$PUBLICACION['listado']['nombre_boletin']=$items_vista_principal['nombre'];

	$PUBLICACION['listado']['fecha_boletin']=$items_vista_principal['fecha'];
			
	//$items = $matriz['filas'];
	//$total = $matriz['total'];
	//$anterior = $matriz['anterior'];
	//$siguiente = $matriz['siguiente'];
	//$desde = $matriz['desde'];
	//$hasta = $matriz['hasta'];       
	//$tren = $matriz['tren'];
		
	$HEAD['titulo'] = procesar_titulo($items_vista_principal['nombre']." Foto-". (($_GET['pag'])?$_GET['pag']:'1') );

	$HEAD['meta_keywords'] = procesar_keywords($items_vista_principal['nombre']." Foto: ".$PUBLICACION['listado']['filas'][0]['foto_descripcion']);

	$HEAD['meta_descripcion'] = procesar_description($items_vista_principal['nombre']." Foto: ".$PUBLICACION['listado']['filas'][0]['foto_descripcion']);
	
break;
case "testimonios":	

$PUBLICACION['add_url']=procesar_url("index.php?modulo=formulario&tab=dejar-testimonio"); 

$PUBLICACION['listado'] = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"10"
            ,'anterior'=>"« anterior"
            ,'siguiente'=>"siguiente »"
            ,'enlace'=>"index.php?modulo=publicacion&tab=testimonios&pag="
			,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,fecha,nombre,comentario,fecha_creacion"
        ,"testimonios"
        ,"where 1 and  visibilidad='1' order by id asc"
        ,0
		,array(
			'fecha'=>array('fecha_formato'=>array(
										'fecha'=>'{fecha}'
										,'formato'=>'1'
										)
									)
			 )		
        );

if($PUBLICACION['listado']['total']==0){

	redir($SERVER['BASE'].$PUBLICACION['add_url']);
	
}		

//$items = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];

$HEAD['titulo'] = procesar_titulo("Testimonios - ".$_GET['pag']);

$HEAD['meta_keywords'] = procesar_keywords("Testimonios");

$HEAD['meta_descripcion'] = procesar_description("Testimonios dejados por los clientes");

break;
case "videos_1": case "videos_2": 

$PUBLICACION['listado'] = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"4"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=publicacion&tab=".$_GET['tab']."&pag="
			,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,url,titulo,tipo,descripcion,foto,fecha_creacion,foto_descripcion"
        ,"videos"
        ,"where tipo='". (($_GET['tab']=='videos_2')?'Videos Corp':'Raúl Chipana') ."' and  visibilidad='1' order by id asc"
        ,0
        ,array(
        	               
                'carpeta'=>'vid_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'120x90'
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

$PUBLICACION['listado']['titulos']=($_GET['tab']=='videos_2')?'Videos Corp':'Dr. Raúl Chipana - Videos';

        
//$items = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];


$HEAD['titulo'] = procesar_titulo($PUBLICACION['listado']['titulos']);

$HEAD['meta_keywords'] = procesar_keywords($PUBLICACION['listado']['titulos']);

$HEAD['meta_descripcion'] = procesar_description($PUBLICACION['listado']['filas'][0]['descripcion']);
		
break;
case "locales":	
		
$_GET['id']=($_GET['id']!='')?select_dato(
		"id",
		"locales_grupos",
		"where nombre='".url_decode_seo($_GET['id'])."'"):select_dato(
		"id",
		"locales_grupos",
		"where 1 order by id desc limit 0,1");	

$id_grupo=$_GET['id'];

$PUBLICACION['listado'] = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"30"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"?pag="
			,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,id_grupo,nombre,descripcion,direccion,telefono,email,fecha_creacion"
        ,"locales_items"
        ,"where id_grupo='".$id_grupo."' and  visibilidad='1' order by id asc"
        ,0
        );
        
//$items = $matriz['filas'];
//$total = $matriz['total'];
//$anterior = $matriz['anterior'];
//$siguiente = $matriz['siguiente'];
//$desde = $matriz['desde'];
//$hasta = $matriz['hasta'];       
//$tren = $matriz['tren'];

$PUBLICACION['listado']['nombre_local']= $dato = select_dato(
        "nombre"
        ,"locales_grupos"
        ,"where id='".$id_grupo."'"
        ,0
        );	


$HEAD['titulo'] = procesar_titulo("Centros de distribución en ".$PUBLICACION['listado']['nombre_local']);

$HEAD['meta_keywords'] = procesar_keywords("Centros de distribución en ".$PUBLICACION['listado']['nombre_local']);

$HEAD['meta_descripcion'] = procesar_description("Centros de distribución en ".$PUBLICACION['listado']['nombre_local']);

break;
}

		

?>