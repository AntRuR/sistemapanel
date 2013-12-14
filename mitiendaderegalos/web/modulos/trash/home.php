<?php //á

/**********************************************/
//////////////////INCLUDES//////////////////////
/**********************************************/

//

/**********************************************/
/////////home_bloque_recomendar.php/////////////
/**********************************************/

include("formularios/formularios.php");
	
/**********************************************/
///////////////home_boque_listado.php///////////
/**********************************************/
	
include("listados_productos.php");

/**********************************************/
///////////////home_boque_listado.php///////////
/**********************************************/
	
include("listados_categorias.php");

/**********************************************/
////////////home_bloque_publicidad.php//////////
/**********************************************/

//include("slideshows.php");

if($HEAD['INCLUDES']['script']['open_intro']==''){

	$HEAD['INCLUDES']['script_defer'][]='
	
	window.addEvent(\'domready\',function(){
	
	$("div_home_publicidad_content").innerHTML="<div id=\'swf_div_home_publicidad_content\'></div>";
	
	swfobject.embedSWF("swf/banner.swf", "swf_div_home_publicidad_content", "285", "310", "9.0.0", "expressInstall.swf",
	{},
	{
	allowscriptaccess:"always",
	allowfullscreen:"true",
	wmode:"transparent"
	},
	{
	wmode:"transparent"
	}
	);
		
	});
	';

}

/**********************************************/
////////////home_bloque_ofertas.php/////////////
/**********************************************/

include("slides.php");
	
/**********************************************/
////////////////// HEAD ////////////////////////
/**********************************************/

/*
$HEAD['titulo'] = " | ".$COMMON['datos_root']['titulo_web']; 

$HEAD['meta_keywords'] .= procesar_keywords($COMMON['datos_root']['titulo_web']);
 
$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);
*/
?>