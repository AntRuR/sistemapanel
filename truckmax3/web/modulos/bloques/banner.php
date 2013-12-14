<?php //á


$item['nombre']='';

$item['sub_select']= select(
        "id,file,foto_descripcion,fecha_creacion,url"
        ,"banners_fotos_fotos"
        ,"where 1 and id_grupo='1' and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
												
                'carpeta'=>'banfot_imas'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'3'
                                            ,'dimensionado'=>'961x302'
                                            ,'centrado'=>'1'											
                                            )
                                        )										
              	 ,'caption'=>'{foto_descripcion}'
              	 ,'href'=>'{url}'
    
              )			  
        );
		
//prin($item['sub_select']);	

$items[0]=$item;
			
						
	$NOOB=array(
			'label'=>$PARAMS['conector'],	
			'width'=>"961",
			'height'=>"302",
			'itemsporpagina'=>"1x1",
			'vacio'=>"aún no hay fotos",
			'titulo'=>"",	
//			'interval'=>"7000",	
			'autoplay'=>"true",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			//'handles'=>"0",
			'buttons'=>"1",
				'prev'=>"",
				'next'=>"",
				'title_prev'=>"anterior",
				'title_next'=>"siguiente",				
			);
	
	$NOOB_S=array();
	foreach($items as $ii=>$filas){
	
		$noobst=$NOOB;
		$noobst['label']=$NOOB['label'];
		$noobst['titulo']=$filas['nombre'];
		$noobst['interval']=7000;
		$noobst['items']=$filas['sub_select'];
		$NOOB_S[]=web_render_slider_preproceso($noobst);		
		
	}

	$NOODSLICE[$PARAMS['conector']]=$NOOB_S;

	$REMOOZZ=1;	
	//$SEXYLIGHTBOX=1;
		
?>