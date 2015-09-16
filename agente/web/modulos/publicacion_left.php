<?php //á

/**********************************************/
//////////////publicacion_left.php///////////
/**********************************************/

switch($_GET['tab']){
default:

$PUBLICACION['menu']['items']= select(
	"id,fecha,titular,descripcion,file,fecha_creacion",
	"noticias",
	"where 1 and  visibilidad='1' order by id desc limit 0,100"
	,0
	,array(
		'url'=>array('procesar_url'=>array(
						'url'=>'index.php?modulo=publicacion&tab=noticias&id={titular}'
						)
					)		
		)
    );
$PUBLICACION['menu']['sin_items']="aún no hay noticias";	
$PUBLICACION['menu']['titulo_menu']="NOTIAFARMACH";

break;
case "locales":

$PUBLICACION['menu']['items']= select(
        "id,nombre,fecha_creacion"
        ,"locales_grupos"
        ,"where 1 and  visibilidad='1' order by id desc limit 0,100"
        ,0
		,array(
			'url'=>array('procesar_url'=>array(
							'url'=>'index.php?modulo=publicacion&tab=locales&id={nombre}'
							)
						)				
			)
        );
		
break;
case "consejos":
$PUBLICACION['menu']['items']= select(
	"id,titulo,titular,texto,file,fecha_creacion",
	"consejos",
	"where 1 and  visibilidad='1' order by id desc limit 0,100"
	,0
	,array(
		'url'=>array('procesar_url'=>array(
						'url'=>'index.php?modulo=publicacion&tab=consejos&id={titulo}'
						)
					)			
		)
    );
$PUBLICACION['menu']['sin_items']="aún no hay consejos";	
$PUBLICACION['menu']['titulo_menu']="CONSEJOS";
break;
case "eventos":
$PUBLICACION['menu']['items']= select(
        "id,fecha,titular,descripcion,file,fecha_creacion"
        ,"eventos"
        ,"where 1 and  visibilidad='1' order by id desc limit 0,100"
        ,0
		,array(
			'url'=>array('procesar_url'=>array(
							'url'=>'index.php?modulo=publicacion&tab=eventos&id={titular}'
							)
						)				
			)
        );
$PUBLICACION['menu']['sin_items']="aún no hay eventos";	
$PUBLICACION['menu']['titulo_menu']="EVENTOS";
break;
case "boletines":
$PUBLICACION['menu']['items']= select(
        "id,fecha,nombre,file,fecha_creacion"
        ,"boletines_grupos"
        ,"where 1 and  visibilidad='1' order by id desc limit 0,100"
        ,0
        ,array(
				'url'=>array('procesar_url'=>array(
								'url'=>'index.php?modulo=publicacion&tab=boletines&id={nombre}'
								)
							)
				,'carpeta'=>'bolgru_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'50x500'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            )
                                        )
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
              	    
    
              )
        );
		
$PUBLICACION['menu']['sin_items']="aún no hay boletines";	
$PUBLICACION['menu']['titulo_menu']="BOLETINES";
break;
}

//prin($PUBLICACION['menu']);
	
?>