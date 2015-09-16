<?php //á

//prin($_GET);

/**********************************************/
//////////////////GLOBALS//////////////////////
/**********************************************/

include("lib/class.autokeyword.php");
include("lib/include.php");

/**********************************************/
///////////////HEAD INCLUDES////////////////////
/**********************************************/

$INCLUDES['ico'][]='img/favicon.ico?v=0.1';
$INCLUDES['css'][]='css/css.css?v=0.15';
$INCLUDES['js'][]='js/mootools-1.2.3-core-yc.js';
$INCLUDES['js'][]='js/js.js?v=0.15';

//javascript
$INCLUDES['script'][]="var BASE='".$SERVER['BASE']."'";
//$INCLUDES['js'][]='js/flashobject.js';

/**********************************************/
//////////////////header.php////////////////////
/**********************************************/

$COMMON['url_home']=procesar_url('index.php?modulo=home');

/**********************************************/
///////////////////menu.php/////////////////////
/**********************************************/


$COMMON['menu']=array(
			'izquierda'=>array(
							array(
								'url'=>procesar_url('index.php?modulo=home')
								,'label'=>"Home"
								,'classSelected'=>($_GET['modulo']=='home')?'selected':''
							)
							,array(
								'url'=>procesar_url('index.php?modulo=pagina&tab=empresa')
								,'label'=>"Empresa"
								,'classSelected'=>($_GET['modulo']=='pagina' and $_GET['tab']=='empresa')?'selected':''
							) //estatica
							,array(
								'url'=>procesar_url('index.php?modulo=pagina&tab=servicios')
								,'label'=>"Servicios"
								,'classSelected'=>($_GET['modulo']=='pagina' and $_GET['tab']=='servicios')?'selected':''								
							) //estatica
							,array(
								'url'=>procesar_url('index.php?modulo=items&tab=productos&en_cartera=si')
								,'label'=>"Inmuebles en cartera"
								,'classSelected'=>($_GET['modulo']=='items' and $_GET['en_cartera']=='si')?'selected':''																
							)
							,array(
								'url'=>procesar_url('index.php?modulo=items&tab=usuarios')
								,'label'=>"Asociados"
								,'classSelected'=>($_GET['modulo']=='items' and $_GET['tab']=='usuarios')?'selected':''																								
							)
						)
			//,'derecha'=>array()
				);
				
	
/**********************************************/
//////////////////footer.php////////////////////
/**********************************************/

$COMMON['direccion']=select_dato(
        "valor",
        "configuraciones",
        "where variable='direccion'"
        ,0
        );		
$COMMON['telefonos']=select_dato(
        "valor",
        "configuraciones",
        "where variable='telefonos'"
        ,0
        );
$COMMON['email']=select_dato(
        "valor",
        "configuraciones",
        "where variable='email'"
        ,0
        );		
		
			


/**********************************************/
////////////////// HEAD //////////////////////
/**********************************************/

$HEAD['titulo'] = "Agencia Inmobiliaria Perú :: Venta y Alquiler de Casas, Departamentos, Oficinas, Terrenos, Proyectos Inmobiliarios, Asesoría integral inmobiliaria, Tasación gratuita";

			
?>