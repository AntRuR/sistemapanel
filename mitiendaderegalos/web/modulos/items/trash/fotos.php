<?php //á
//STYLE
$HEAD['INCLUDES']['css'][]='css/listados/grilla_1/css.css';
$HEAD['INCLUDES']['css'][]='css/bloques/bloque_cuadro_6/css.css';
//$HEAD['INCLUDES']['css'][]='css/menus/menu_filtros/css.css';
//INCLUDES
$HEAD['INCLUDES']['js'][]='js/ReMooz.js';
$HEAD['INCLUDES']['css'][]='css/ReMooz.css';
$HEAD['INCLUDES']['css_ie6'][]='css/ReMoozIE6.css';
$by_grupo		=	($_GET['id']=='')?'':"id_grupo='".$_GET['id']."'";
$by_grupo_pag		=	($_GET['id']=='')?'':"&id=".$_GET['id'];
	
$LISTA = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"6"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=pagina-items&tab=fotos".$by_grupo_pag."&pag="
            ,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,id_grupo,nombre,file,foto_descripcion,fecha_creacion"
        ,"fotos_items"
        ,"where 1 and $by_grupo and  visibilidad='1' order by id asc"
        ,0
        ,array(
        	               
                'carpeta'=>'prodite_imas'
                ,'tamano_thumb'=>'2'
                ,'tamano_zoom'=>'3'
                ,'dimensionado'=>'164x103'
                ,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano_thumb}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            ,'centrado'=>'{centrado}'
                                            )
                                        )
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano_zoom}'
                                            )
                                        )
              	    
    
              )
        );		
//prin($LISTA);
$LISTA['vacio']  = $VACIO;
$LISTA['titulo'] =  select_dato(
        "nombre"
        ,"fotos_grupos"
        ,"where id='".$_GET['id']."'"
        ,0
        );
//$LISTA['menu'] = $MENU_FILTROS;
$LISTADO['fotos']=$LISTA;
																	
//////////////////HEADER/////////////////////
$HEAD['titulo'] = ($LISTADO['productos']['titulo']=='Destacados')?$COMMON['datos_root']['titulo_home']." | ".$COMMON['datos_root']['titulo_web']:ucwords($LISTADO['productos']['titulo'])." | ".$COMMON['datos_root']['titulo_web'];
//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);


?>