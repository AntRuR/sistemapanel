<?php //á
/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

$Block['header'] ="common/header.php";

$Block['nav']    ="common/menu.php";

$Block['footer'] ="common/footer.php";

$Block['bar_izquierda']=
	[
		"bloques/arbol_blog.php?".http_build_query(['classStyle'=>'menu_left']),
		"bloques/banner_enlaces.php",
		"bloques/form_recomendar.php?".http_build_query(['conector'=>'recomendar']),
	];


$Block['pre_footer']=
			[
				'col-xs-3 home_col1'=>[
					"bloques/banner_enlaces.php",
					"bloques/form_recomendar.php?".http_build_query(['conector'=>'recomendar']),
				],
				"bloques/blog.php?".http_build_query(['block'=>'col-xs-6 home_col2']),
				"bloques/banner_enlaces.php?".http_build_query([
														'block'		=>'col-xs-3 home_col3',
														'this'		=>'banner_enlaces2',
														'conector'	=>'banner_enlaces2',
														'classStyle'=>'banner_enlaces2'
														]),
			];			

/**********************************************/
//////////////////  CONTROLLERS  ///////////////////
/**********************************************/	



		



$Estructura['modulo=app&tab=home']=
[
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas'	=>
		[
		 	"bloques/banner_main.php",
			//"MAIN",
			"items/servicios_items_list.php",	//

			$Block['pre_footer'],

		],
	'footer'	=>$Block['footer'],			
];


$Estructura['modulo=app&tab=pages']=
[
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[	
			[
			'col-xs-2 page_col1'=>$Block['bar_izquierda'],
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'page',
									]),
			]
		],
	'footer'	=>$Block['footer'],			
];


$Estructura['modulo=items&tab={blog_noticias,blog_actividades,blog_fotos,blog_videos}']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[	
			[
			'col-xs-2 page_col1'=>"bloques/menu_blog.php?".http_build_query(['classStyle'=>'menu_left']),
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'page',
									]),
			]				
		],
	'footer'=>$Block['footer'],		
);
								


$Estructura['modulo=items&tab=servicios_items']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[	
			[		
			'col-xs-2 page_col1'=>'bloques/menu_servicios.php?'.http_build_query(['classStyle'=>'menu_left']),
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'page',
									]),									
			]
		],
	'footer'=>$Block['footer'],		
);

$Estructura['modulo=items&tab=empresa_items']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],
	'canvas' 	=>
		[	
			[		
			'col-xs-2 page_col1'=>'bloques/menu_empresa.php?'.http_build_query(['classStyle'=>'menu_left']),
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'page',
									]),

			]
		],
	'footer'=>$Block['footer'],		
);


$Estructura['modulo=formularios&tab={contacto}']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[	
			[		
			'col-xs-2 page_col1'=>$Block['bar_izquierda'],		//
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'page',
									]),									
			]
		],	
	'footer'=>$Block['footer'],
);


// $Block['blank']='bloques/blank.php';

// $Estructura['modulo=app&tab=blank']=
// array(
// 	'header'=>$Block['header'],	
// 	'nav'=>$Block['nav'],	
// 	'canvas'=>array(
// 		$Block['blank'],
// 		array(
// 		 	$Block['blank']."?block=col-xs-3 hola",
// 		 	$Block['blank']."?block=col-xs-9"
// 		),
// 		array(
// 			$Block['blank']."?block=col-xs-3",//
// 			$Block['blank']."?block=col-xs-3",//
// 			'col-xs-6'=>array(
// 				$Block['blank'],//
// 				$Block['blank']	//
// 			),
// 		),
// 		array(
// 		 	$Block['blank']."?block=col-xs-6",
// 		 	$Block['blank']."?block=col-xs-6"
// 		),	
// 		$Block['blank'],
// 		array(
// 		 	$Block['blank']."?block=col-xs-2",
// 		 	$Block['blank']."?block=col-xs-2",
// 		 	$Block['blank']."?block=col-xs-2",
// 		 	$Block['blank']."?block=col-xs-1",
// 		 	$Block['blank']."?block=col-xs-1",
// 		 	$Block['blank']."?block=col-xs-1",
// 		 	$Block['blank']."?block=col-xs-3"
// 		),		
// 		array(
// 		 	$Block['blank']."?block=col-xs-9",
// 		 	$Block['blank']."?block=col-xs-3"
// 		),		
// 	),		
// 	'footer'=>$Block['footer'],	
// 	$Block['blank'],			
// );





// include("particular.php");


