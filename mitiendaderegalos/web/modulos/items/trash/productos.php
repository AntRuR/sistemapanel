<?php //á


/**********************************************/
/////////////////////GEO////////////////////////
/**********************************************/

include("bloques/geo.php");


/**********************************************/
//////////////listado_productos.php/////////////
/**********************************************/


///////////////////////////////////

//prin($_GET);

$sql_busqueda = "";
$variables = "";
$titulo = "";
	
	
	if($_GET['id_grupo']!=''){ 

		//$GET_ID_GRUPO=($_GET['id_grupo']=='')?"":select_dato("id","productos_grupos","where nombre='".url_decode_seo($_GET['id_grupo'])."'",0);
		$GET_ID_GRUPO=$_GET['id_grupo'];
		$sql_busqueda.=" and id_grupo=\"".$GET_ID_GRUPO."\" "; 
		//$titulo = ucfirst(url_decode_seo($_GET['id_grupo'])); 
		$variables.= "&id_grupo=".url_decode_seo($_GET['id_grupo']);
		$order_by="order by fecha_creacion desc, id desc";
	
	////BUSCAR
	} elseif($_GET['id_subgrupo']!=''){ 
	
		//$GET_ID_SUBGRUPO=($_GET['id_subgrupo']=='')?"":select_dato("id","productos_subgrupos","where nombre='".url_decode_seo($_GET['id_subgrupo'])."'",0);
		$GET_ID_SUBGRUPO=$_GET['id_subgrupo'];
		$sql_busqueda.=" and id_subgrupo=\"".$GET_ID_SUBGRUPO."\" "; 
		//$titulo = ucfirst(url_decode_seo($_GET['id_grupo'])); 
		$variables.= "&id_subgrupo=".url_decode_seo($_GET['id_subgrupo']);
		$order_by="order by fecha_creacion desc, id desc";
	
	////BUSCAR
	} elseif($_GET['buscar']!='') { 
	
		$sql_busqueda.=" and ( nombre like \"%".$_GET['buscar']."%\" )"; 
		$titulo = "Buscar ".$_GET['buscar']; 
		$variables.= "&buscar=".$_GET['buscar'];
		$order_by="order by fecha_creacion desc, id desc";
	
	////DEFAULT	
	} else {
	
		/*
		$sql_busqueda.=" and home='1' "; 
		$order_by="order by precio desc";
		$titulo = "Destacados"; 
		$variables.= "";
		*/
		//if($_COOKIE['intro']!=true){		
		//setcookie("intro", true, time()+3600*24); }
	
	}

	
$ITEMS['productos'] = paginacionnumerada(
        array(
            'separador'=>""
            ,'porpag'=>"6"
            ,'anterior'=>"«anterior"
            ,'siguiente'=>"siguiente»"
            ,'enlace'=>"index.php?modulo=pagina-items&tab=productos".$variables."&pag="
			,'procesar_url'=>"1"
            //,'onclick'=>"?pag="
        )
		,"id,nombre,descripcion,precio,moneda,tipo,id_grupo,id_subgrupo,file,foto_descripcion,departamento,provincia,distrito,fecha_creacion"
        ,"productos_items"
        ,"where 1 $sql_busqueda and  visibilidad='1' $order_by "
        ,0
        ,array(
				//FOTOS
        		'carpeta'=>'prodite_imas'
                ,'tamano'=>'3'
                ,'dimensionado'=>'90x70'
				,'centrado'=>'1'
				,'descripcion'=>array('strip_tags'=>array(
										'string'=>'{descripcion}'			
									)
								)
				,'descripcion'=>array('limit_string'=>array(
										'limit'=>'310'				
										,'string'=>'{descripcion}'			
									)
								)
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
											,'centrado'=>'{centrado}'
                                            )
                                        )
				/*						
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano_grande}'
                                            )
                                        )
				*/						
				//LINK SEO																
				,'nom'=>array('url_encode_seo'=>array(
											'string'=>'{nombre}'
											)
										)
				,'nombre'=>array('ucwords'=>array(
											'string'=>'{nombre}'
											)
										)										
				,'link'=>array('procesar_url'=>array(
											'url'=>'index.php?modulo=item&tab=productos&id={nom}'
											)
										)		
				//PRECIO																		
				,'precio_num'=>'{precio}'
				//ALT Y TITLE						
				,'alt'=>'{nombre}'
				,'title'=>'{nombre}'								
				//CONCAT PARA KEWORDS
				,'concat_nombre'=>array('concat'=>array(
										'values'=>'{nombre}'
										)
									)							
    
              )
			  ,$concat
        );
		
//prin($ITEMS['productos']);

/*

$LISTADO['productos']['vacio'] = 'No se encontraron productos en esta búsqueda';

$LISTADO['productos']['titulo'] = ($sql_busqueda=='')?"productos":$titulo;


																	
//////////////////HEADER/////////////////////

$HEAD['titulo'] = ($LISTADO['productos']['titulo']=='Destacados')?$COMMON['datos_root']['titulo_home']." | ".$COMMON['datos_root']['titulo_web']:ucwords($LISTADO['productos']['titulo'])." | ".$COMMON['datos_root']['titulo_web'];

//$HEAD['meta_keywords'] = procesar_keywords(implode(" ",$concat['concat_nombre']));
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
 
//$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);		
$HEAD['meta_keywords'] = implode(",",$concat['concat_nombre']);
*/
?>