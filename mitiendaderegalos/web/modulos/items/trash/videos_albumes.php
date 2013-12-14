<?php //á
//STYLE
$HEAD['INCLUDES']['css'][]='css/listados/grilla_3/css.css';
$HEAD['INCLUDES']['css'][]='css/bloques/bloque_cuadro_6/css.css';
//$HEAD['INCLUDES']['css'][]='css/menus/menu_filtros/css.css';
//INCLUDES
$HEAD['INCLUDES']['js'][]='js/ReMooz.js';
$HEAD['INCLUDES']['css'][]='css/ReMooz.css';
$HEAD['INCLUDES']['css_ie6'][]='css/ReMoozIE6.css';
	
$LISTA = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"9"
            ,'anterior'=>"«".$lang['anterior']
            ,'siguiente'=>$lang['siguiente']."»"
            ,'enlace'=>"index.php?modulo=pagina-items&tab=videos_albumes&pag="
			,'procesar_url'=>"1"
            //,'onclick'=>"?pag="
        )
		,"id,nombre"
        ,"videos_grupos"
        ,"where 1  and  visibilidad='1' $order_by "
        ,0
        ,array(
        	'foto'=>array('sub_select_fila'=>array(
													'campos'=>"id,codigo,titulo,fecha,fecha_creacion"
													,'tabla' =>"videos_items"
													,'donde' =>"where id_grupo='{id}' and  visibilidad='1' order by id asc limit 0,1"
													,'debug' =>0										
													)
											)      	    
			  ,'link'=>'index.php?modulo=pagina-items&tab=videos&id={id}'
			  							
              )
			  
        );
		
//prin($LISTA);
$LISTA['vacio']  = $VACIO;
$LISTA['titulo'] = "Albumes de videos";
//$LISTA['menu'] = $MENU_FILTROS;
$LISTADO['videos_albumes']=$LISTA;
																	
//////////////////HEADER/////////////////////
$HEAD['titulo'] = ($LISTADO['productos']['titulo']=='Destacados')?$COMMON['datos_root']['titulo_home']." | ".$COMMON['datos_root']['titulo_web']:ucwords($LISTADO['productos']['titulo'])." | ".$COMMON['datos_root']['titulo_web'];
//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);


?>