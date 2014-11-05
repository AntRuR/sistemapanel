<?php //á
/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

$Block['header'] ="common/header.php";

$Block['nav']    ="common/menu.php";

$Block['footer'] ="common/footer.php";

$Block['bar_izquierda']=
	[
		"bloques/arbol_blog.php?".http_build_query(['classStyle'=>'menu_left block block-blue']),
		"bloques/banner_enlaces.php?".http_build_query(['classStyle'=>'banner_enlaces block block-blue slice']),
		"bloques/form_recomendar.php?".http_build_query(['classStyle'=>'form_recomendar block']),
	];



					

/**********************************************/
//////////////////  CONTROLLERS  ///////////////////
/**********************************************/	


$Estructura['modulo=items&tab=productos_imprimir&acc=file']=
array(
		//"common/header_imprimir.php",
		"MAIN",
		//"common/footer_imprimir.php",
);



$Estructura['modulo=formularios&tab={contacto}']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			[		
			'col-xs-2 page_col1'=>$Block['bar_izquierda'],		//
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'wide page block block-grey',
									]),									
			]
		],	
	'footer'=>$Block['footer'],
);








// include("particular.php");


