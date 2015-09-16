<?php //á

/**********************************************/
//////////////////INCLUDES//////////////////////
/**********************************************/

//$INCLUDES['js'][]='js/_class.noobSlide.packed.js';
//

$INCLUDES['js'][]='js/mootools-1.2.3.1-more.js';

$INCLUDES['js'][]='js/slideshow.js';
$INCLUDES['css'][]='css/slideshow/slideshow.css';

$INCLUDES['style'][]="
.slideshow-images-visible { margin-left: 0; }
.slideshow-images-prev { 	margin-left: 400px; }
.slideshow-images-next { 	margin-left: -400px; }
";

/**********************************************/
///////////////home_boque_buscador.php//////////
/**********************************************/

include("buscador.php");

/**********************************************/
///////////////home_boque_listado.php///////////
/**********************************************/
	
include("listados_productos.php");

/**********************************************/
/////////home_bloque_recomendar.php/////////////
/**********************************************/

include("formularios.php");
	
/**********************************************/
///////////////home_boque_banner.php///////////
/**********************************************/


$HOME['banner']= select(
        "id,file,foto_descripcion,fecha_creacion"
        ,"banner"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'log_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'311x368'						
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
              	    
    
              )
        );

 
	
/**********************************************/
////////////////// HEAD //////////////////////
/**********************************************/

$HEAD['titulo'] = "Agencia Inmobiliaria Perú | Venta y Alquiler de Casas, Departamentos, Oficinas, Terrenos, Proyectos Inmobiliarios, Asesoría integral inmobiliaria, Tasación gratuita"; 

$HEAD['meta_keywords'] = procesar_keywords("Agencia Inmobiliaria Perú");
 
$HEAD['meta_descripcion'] = procesar_description("Agencia Inmobiliaria Perú");
 
?>