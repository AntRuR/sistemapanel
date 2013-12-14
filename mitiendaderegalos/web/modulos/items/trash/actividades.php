<?php //á
//STYLE
$HEAD['INCLUDES']['css'][]='css/listados/grilla_2/css.css';

$HEAD['INCLUDES']['css'][]='css/bloques/bloque_cuadro_6/css.css';
//$HEAD['INCLUDES']['css'][]='css/menus/menu_filtros/css.css';
//INCLUDES
$HEAD['INCLUDES']['js'][]='js/ReMooz.js';
$HEAD['INCLUDES']['css'][]='css/ReMooz.css';
$HEAD['INCLUDES']['css_ie6'][]='css/ReMoozIE6.css';
	
$LISTA = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"6"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=pagina-items&tab=actividades&pag="
            ,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,fecha,titular,descripcion,file,foto_descripcion,fecha_creacion"
        ,"eventos"
        ,"where 1 and  visibilidad='1' order by id asc"
        ,0
        ,array(
        	               
                'carpeta'=>'eve_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'164x103'
                ,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            ,'centrado'=>'{centrado}'
                                            )
                                        )
                ,'fecha'=>array('fecha_formato'=>array(
                                            'fecha'=>'{fecha}'
                                            ,'formato'=>'2'
                                            )
                                        )										
			)							
        );		
//prin($LISTA);
$LISTA['vacio']  = $VACIO;
$LISTA['titulo'] = "Actividades";
//$LISTA['menu'] = $MENU_FILTROS;
$LISTADO['actividades']=$LISTA;
																	
//////////////////HEADER/////////////////////
$HEAD['titulo'] = ($LISTADO['productos']['titulo']=='Destacados')?$COMMON['datos_root']['titulo_home']." | ".$COMMON['datos_root']['titulo_web']:ucwords($LISTADO['productos']['titulo'])." | ".$COMMON['datos_root']['titulo_web'];
//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);


?>