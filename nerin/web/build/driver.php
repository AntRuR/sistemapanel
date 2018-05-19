<?php //á
/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

$Block['header'] ="common/header.php";

$Block['nav']    ="common/menu.php";

$Block['footer'] ="common/footer.php";

$Block['bar_izquierda']=
	[
		// "bloques/arbol_blog.php?".http_build_query(['classStyle'=>'menu_left block block-blue']),
		"bloques/izquierda_facebook.php?".http_build_query(['classStyle'=>'banner_enlaces block block-blue slice']),		
		"bloques/form_recomendar.php?".http_build_query(['classStyle'=>'form_recomendar block']),
	];



					

/**********************************************/
//////////////////  CONTROLLERS  ///////////////////
/**********************************************/	



		



$Estructura['modulo=app&tab=home']=
[
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas'	=>
		[
		 	"bloques/banner_main.php",
			"MAIN",
			// "items/servicios_items_list.php",	//

			[	
				"bloques/proyectos_ejecucion.php?".http_build_query([
														'block'=>'col-xs-4 proyectos_col1',
														'classStyle'=>'proyectos_ejecucion block block-blue-nering slice',
														]),


				// "bloques/proyectos_realizados.php?".http_build_query([
				// 										'block'=>'col-xs-8 proyectos_col1',
				// 										'classStyle'=>'proyectos_realizados block block-blue-nering slice',
				// 										]),


				"bloques/proyectos_realizados.php?".http_build_query([
														'block'=>'col-xs-8 proyectos_col2',
														'classStyle'=>'proyectos_realizados block block-blue-nering slice',
														]),

			],	

			// [
			// 	'col-xs-3 home_col1'=>[
			// 		"bloques/izquierda_facebook.php?".http_build_query([
			// 											'classStyle'=>'banner_enlaces block block-blue slice'
			// 											]),
			// 		"bloques/form_recomendar.php?".http_build_query([
			// 											'conector'=>'recomendar',
			// 											'classStyle'=>'form_recomendar block',
			// 											]),
			// 	],
			// 	"bloques/blog.php?".http_build_query([
			// 											'block'=>'col-xs-6 home_col2 block block-blue slice'
			// 										]),
			// 	"bloques/banner_enlaces.php?".http_build_query([
			// 											'block'		=>'col-xs-3 home_col3',
			// 											'this'		=>'banner_enlaces2',
			// 											'conector'	=>'banner_enlaces2',
			// 											'classStyle'=>'banner_enlaces2 block block-blue slice'
			// 											]),
			// ],
			// [
			// 	"bloques/banner_enlaces.php?".http_build_query([
			// 											'block'		=>'col-xs-12',
			// 											'this'		=>'banner_enlaces3',
			// 											'conector'	=>'banner_enlaces3',
			// 											'classStyle'=>'banner_enlaces3 block block-blue slice'
			// 											]),
			// ],
		

		],
	'footer'	=>$Block['footer'],			
];


$Estructura['modulo=app&tab=pages']=
[
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			[
			'col-xs-2 page_col1'=>$Block['bar_izquierda'],
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'wide page block block-grey',
									]),
			]
		],
	'footer'	=>$Block['footer'],			
];


$Estructura['modulo=items&tab={blog_noticias,blog_actividades,blog_fotos,blog_videos}']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			[
			'col-xs-2 page_col1'=>"bloques/menu_blog.php?".http_build_query(['classStyle'=>'menu_left block block-blue']),
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'wide page block block-grey',
									]),
			]				
		],
	'footer'=>$Block['footer'],		
);


$Estructura['modulo=items&tab=proyectos']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			'row_skyblue'=>[	
				"bloques/proyectos_izquierda.php?".http_build_query([
												'block'=>'col-xs-4 proyectos_col1',
												'classStyle'=>'proyectos_ejecucion block-skyblue-nering slice'
												]),
				"MAIN?".http_build_query([
										'block'=>'col-xs-8 proyectos_col2',
										'classStyle'=>'proyectos_detalle block-skyblue-nering slice',
										]),
			]
		],
	'footer'=>$Block['footer'],		
);								


$Estructura['modulo=items&tab=clientes']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			'row_skyblue'=>[	
				// "bloques/proyectos_izquierda.php?".http_build_query([
				// 								'block'=>'col-xs-4 proyectos_col1',
				// 								'classStyle'=>'proyectos_ejecucion block-skyblue-nering slice'
				// 								]),
				"MAIN?".http_build_query([
										'block'=>'col-xs-12',
										'classStyle'=>'proyectos_detalle block-skyblue-nering slice',
										]),
			]
			
		],
	'footer'=>$Block['footer'],		
);		

$Estructura['modulo=items&tab=servicios_items']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",	

			[		
			// 'col-xs-2 page_col1'=>'bloques/menu_servicios.php?'.http_build_query(['classStyle'=>'menu_left block block-blue']),
			'col-xs-2 page_col1'=>[
				'bloques/menu_servicios.php?'.http_build_query(['classStyle'=>'menu_left block block-blue']),
				"bloques/izquierda_facebook.php?".http_build_query(['classStyle'=>'banner_enlaces block block-blue slice'])
				],				
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'wide page block block-grey',
									]),							
			]
		],
	'footer'=>$Block['footer'],		
);

$Estructura['modulo=items&tab=empresa_items']=
array(
//	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],
	'canvas' 	=>
		[
		 	"bloques/banner_main.php",			
			[		
			'col-xs-2 page_col1'=>[
				'bloques/menu_empresa.php?'.http_build_query(['classStyle'=>'menu_left block block-blue']),
				"bloques/izquierda_facebook.php?".http_build_query(['classStyle'=>'banner_enlaces block block-blue slice'])
				],		
			"MAIN?".http_build_query([
									'block'		=>'col-xs-10 page_col2',
									'classStyle'=>'wide page block block-grey',
									]),

			]
		],
	'footer'=>$Block['footer'],		
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


