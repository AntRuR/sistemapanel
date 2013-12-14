<?php //á
//STYLE
$HEAD['INCLUDES']['css'][]='css/listados/grilla_1/css.css';
$HEAD['INCLUDES']['css'][]='css/bloques/bloque_cuadro_6/css.css';
//$HEAD['INCLUDES']['css'][]='css/menus/menu_filtros/css.css';
//INCLUDES
$HEAD['INCLUDES']['js'][]='js/ReMooz.js';
$HEAD['INCLUDES']['css'][]='css/ReMooz.css';
$HEAD['INCLUDES']['css_ie6'][]='css/ReMoozIE6.css';

$HEAD['INCLUDES']['style'][]='#bloque_videos_elemento_0 { float:left;margin:0px 0px 0px 0px;  }';
/*especial*/
$HEAD['INCLUDES']['style'][]='	
#ver_video_eventos_embed { background-color:#000000;	}
#ver_video_titulo {	text-align:center; font-weight:bold; font-size:14px; color:#fff; text-transform:uppercase; padding:10px 0px ; display:none;  }
a#ver_video_cerrar{ position:absolute; right:0px; display:none; color:#ccc; font-size:13px; top:10px;	}
a#ver_video_cerrar:hover { color:#fff;	}
';	
	
$by_grupo		=	($_GET['id']=='')?'':"id_grupo='".$_GET['id']."'";
$by_grupo_pag		=	($_GET['id']=='')?'':"&id=".$_GET['id'];
	
$LISTA = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"6"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=pagina-items&tab=videos".$by_grupo_pag."&pag="
            ,'procesar_url'=>1
            //,'onclick'=>"?pag="
        )
        ,"id,id_grupo,codigo,titulo,descripcion,fecha,fecha_creacion"
        ,"videos_items"
        ,"where 1 and $by_grupo and  visibilidad='1' order by id asc"
        ,0
        );		

$LISTA['vacio']  = $VACIO;
$LISTA['titulo'] =  select_dato(
        "nombre"
        ,"videos_grupos"
        ,"where id='".$_GET['id']."'"
        ,0
        );
//$LISTA['menu'] = $MENU_FILTROS;
//prin($LISTA);
$LISTADO['videos']=$LISTA;

																	
//////////////////HEADER/////////////////////
$HEAD['titulo'] = ($LISTADO['productos']['titulo']=='Destacados')?$COMMON['datos_root']['titulo_home']." | ".$COMMON['datos_root']['titulo_web']:ucwords($LISTADO['productos']['titulo'])." | ".$COMMON['datos_root']['titulo_web'];
//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);


?>