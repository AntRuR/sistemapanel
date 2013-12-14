<?php //á

$rubros=select(
        "nombre as label, id as url"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
			'url'=>'index.php?modulo=items&tab=rubros&acc=list&gru={url}&friendly={label}'
		)
		);
		
$COMMON['sub_menu'] = web_procesar_menu($rubros,"izquierda");
		
//prin($rubros);
		
//$COMMON['sub_menu']

$grupos = select(
        "id,nombre"
        ,"productos_subgrupos"
        ,"where 1 and  visibilidad='1' and ver_home='1' and id_grupo='1' order by relevancia desc, id asc limit 0,100"
        ,0
        ,array(
		
        	'sub_grupos'=>array('sub_select'=>array(
                			    'campos'=>"id,nombre"
                                	    ,'tabla' =>"productos_filtros"
                                	    ,'donde' =>"where id_subgrupo='{id}' and visibilidad='1' order by id asc limit 0,100"
                                       	    ,'debug' =>0
                                            )
                                        ),      	    
             
        	'productos'=>array('sub_select'=>array(
                			    		'campos'=>"id,id_grupo,id_subgrupo,tipo,nombre,marca,descripcion"
                                	    ,'tabla' =>"productos_items"
                                	    ,'donde' =>"where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100"
                                       	,'debug' =>0
										,'opciones'=>array(
											'foto'=>array('sub_foto'=>array(
												"id,file,foto_descripcion,fecha_creacion|productos_fotos|where id_item='{id}' and visibilidad='1' order by id desc limit 0,1"
												,"profot_imas"
												,array( 
														 'get_atributos'=>'2,150x150,5'
														//,'get_archivo'=>'2'
														)
													)
												),
												
											'precios'=>array('sub_select'=>array(
												'campos'=>"id,cantidad,precio"
                                	    		,'tabla' =>"productos_precios"
                                	    		,'donde' =>"where id_item='{id}' and visibilidad='1' and cantidad='1' order by id asc limit 0,1"
													)
												)											
												 
											)
                                        )
                                    )      	    
    
             )			 
	  
        );


		
	$NOOB=array(
			'label'=>$PARAMS['conector'],	
			'width'=>"662",
			'height'=>"213",
			'inter_col'=>"7",
			'itemsporpagina'=>"4x1",
			'vacio'=>"aún no hay productos",
			'titulo'=>"",	
//			'interval'=>"7000",	
			'autoplay'=>"false",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			'buttons'=>"1"
			);	

	$REMOOZZ=1;	
	
	$grupos2 = array();
	
foreach($grupos as $ii=>$grupo){
	
	$grupo['menu']=web_procesar_menu(array(
						array(
							'url'=>'index.php?modulo=items&tab=productos&acc=list&gru='.$grupo['id'].'&friendly='.$grupo['nombre']
							,'label'=>$grupo['nombre']	
							,'selected'=>1
						)													
					));

	$noobst=$NOOB;
	$noobst['label']=$NOOB['label'].'_'.$ii;
	$noobst['titulo']=$filas['nombre'];
	$noobst['interval']=$ii*1000+7000;
	$noobst['items']=$grupo['productos'];
		
	$grupo['NOOB']=web_render_slider_preproceso($noobst);	

	$grupos2[]=$grupo;
	
	unset($noobst);												
	
}
		

	
//prin($grupos2);		

//$LISTA['titulo'] = "Mi Tienda de Regalos";

//$LISTA['menu'] = $MENU_FILTROS;

$LISTADO[$PARAMS['conector']]=$grupos2;
		
//////////////////HEADER/////////////////////

$HEAD['titulo_H1'] = "Mi Tienda de Regalos";

$HEAD['titulo'] = $HEAD['titulo_H1'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);

																						
?>