<?php //á


$fotos_home = select(
        array(
		"id"
		,"file"
		,"foto_descripcion"
		,"fecha_creacion"
		,"url"
		)
        ,"banners_fotos_fotos"
        ,"where 1 and id_grupo='1' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
                'carpeta'=>'banfot_imas'
                ,'foto_zoom'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'3'
                                            )
                                        )										
              	 ,'caption'=>'{foto_descripcion}'
              	 ,'href'=>'{url}'
    
              )
        );
		

//////////////////SLIDESHOW//////////////////


	$SLISHOW=array(
				'label'=>$PARAMS['this'],
				'zoom'=>"968x313",
				'height'=>313,
				'resize'=>"true",
				'overlap'=>"true",
				'thumbnails'=>"false",
					'thumb'=>"120x140",
					'thumb_filas'=>"1",
					'thumb_direccion'=>"horizontal",
				'paused'=>"false",
				'delay'=>"2000",
				'duration'=>"2000",
				'controller'=>"false",
				'efecto'=>"1",			
				'captions'=>"false",			
				'hrefs'=>"false",			
//				'listado'=>array_merge($fotos_paquetes,$fotos_destinos)
				'listado'=>array_merge($fotos_home)
				);
	
	
	$SLIDESHOW[$PARAMS['this']]=web_render_slideshow_preproceso($SLISHOW);
	
	
?>