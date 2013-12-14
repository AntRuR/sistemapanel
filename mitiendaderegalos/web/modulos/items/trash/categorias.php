<?php //á

$HEAD['INCLUDES']['script'][]='cerrar_sesion(\'publicar\');';

/**********************************************/
/////////////////////GEO////////////////////////
/**********************************************/

include("bloques/geo.php");

/**********************************************/
//////////////items/categorias.php//////////////
/**********************************************/

$BASE_PRODUCTOS="index.php?modulo=pagina-items&tab=productos";

$ITEMS['categorias'] = select(
        "id,nombre"
        ,"productos_grupos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
			'link'=>array('procesar_url'=>array(
											'url'=>$BASE_PRODUCTOS.$PARAM_GEO.'&id_grupo={id}'
										)
									)		
        	,'sub_categorias'=>array('sub_select'=>array(
                			    		'campos'=>"id,id_grupo,nombre"
                                	    ,'tabla' =>"productos_subgrupos"
                                	    ,'donde' =>"where id_grupo='{id}' and visibilidad='1' order by id asc limit 0,100"
                                       	,'debug' =>0
										,'opciones' =>array(
											'link'=>array('procesar_url'=>array(
																		'url'=>$BASE_PRODUCTOS.$PARAM_GEO.'&id_subgrupo={id}'
																		)
																	)										
											)
                                        )
                                    )      	    
    				  
              )
        );
		
		
/**********************************************/
//////////////formularios/////////////
/**********************************************/

include("formularios/formularios.php");


/*********************************************/

/*
	if(isset($_SESSION['publicar']['usuario_temp'])){
	
		delete("productos_items","where anunciante='".$_SESSION['publicar']['usuario_temp']."'",0);
		unset($_SESSION['publicar']);
	
	}
*/
	
/**********************************************/	
?>