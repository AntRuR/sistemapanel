<?php //á

	$PAGINA = select_fila(
        "id,pagina,titulo,texto,foto,foto_descripcion,fecha_creacion"
        ,"paginas"
        ,"where pagina='".$_GET['page']."' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'pag_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'250x250'
                //,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{foto}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            //,'centrado'=>'{centrado}'
                                            )
                                        )

    
              )
        );

	$PAGES[$PARAMS['this']]=$PAGINA;

//////////////////HEADER/////////////////////

$HEAD['titulo'] = ucwords(strtolower($PAGINA['titulo']))." | ".$COMMON['datos_root']['titulo_web'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
//$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

?>