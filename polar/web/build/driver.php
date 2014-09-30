<?php //á

// $DEVEL=1;


/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

$Block['header']="common/header.php";

$Block['nav']="common/menu.php";
	  
$Block['footer']="common/footer.php";

$Block['bar_izquierda']=
	[
		"bloques/arbol_blog.php?classStyle=menu_left",//
		"bloques/banner_enlaces.php",//V[x]	
		"bloques/form_recomendar.php?conector=recomendar",//V[x]			
	];




// $Block['bar_home']="items/news_items_list.php";


$Block['pre_footer']=
			[
				'col-lg-3 home_col1'=>[
					"bloques/banner_enlaces.php",//V[x]	
					"bloques/form_recomendar.php?conector=recomendar",//V[x]		
				],
				"bloques/blog.php?block=col-lg-6 home_col2",
				"bloques/banner_enlaces.php?block=col-lg-3 home_col3&this=banner_enlaces2&conector=banner_enlaces2&classStyle=banner_enlaces2",//V[x]	
			];			

/**********************************************/
//////////////////  MODULOS  ///////////////////
/**********************************************/	

// $Block['blank']='bloques/blank.php';

// $Estructura['modulo=app&tab=blank']=
// array(
// 	'header'=>$Block['header'],	
// 	'nav'=>$Block['nav'],	
// 	'canvas'=>array(
// 		$Block['blank'],
// 		array(
// 		 	$Block['blank']."?block=col-lg-3 hola",
// 		 	$Block['blank']."?block=col-lg-9"
// 		),
// 		array(
// 			$Block['blank']."?block=col-lg-3",//
// 			$Block['blank']."?block=col-lg-3",//
// 			'col-lg-6'=>array(
// 				$Block['blank'],//
// 				$Block['blank']	//
// 			),
// 		),
// 		array(
// 		 	$Block['blank']."?block=col-lg-6",
// 		 	$Block['blank']."?block=col-lg-6"
// 		),	
// 		$Block['blank'],
// 		array(
// 		 	$Block['blank']."?block=col-lg-2",
// 		 	$Block['blank']."?block=col-lg-2",
// 		 	$Block['blank']."?block=col-lg-2",
// 		 	$Block['blank']."?block=col-lg-1",
// 		 	$Block['blank']."?block=col-lg-1",
// 		 	$Block['blank']."?block=col-lg-1",
// 		 	$Block['blank']."?block=col-lg-3"
// 		),		
// 		array(
// 		 	$Block['blank']."?block=col-lg-9",
// 		 	$Block['blank']."?block=col-lg-3"
// 		),		
// 	),		
// 	'footer'=>$Block['footer'],	
// 	$Block['blank'],			
// );



$Estructura['modulo=app&tab=home']=
[
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas'	=>
		[
		 	"bloques/banner_main.php",//L[x]V[x]	//panel:banners_fotos,banners_fotos_fotos; medidas:(3:484x174)
			//"MAIN",//L[x]V[x]			//panel:paginas(id=bienvenido)
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
			'col-lg-2 page_col1'=>$Block['bar_izquierda'],	//
			"MAIN?block=col-lg-10 page_col2&classStyle=page",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
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
			'col-lg-2 page_col1'=>"bloques/menu_blog.php?classStyle=menu_left",	//
			"MAIN?block=col-lg-10 page_col2&classStyle=page",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
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
			'col-lg-2 page_col1'=>'bloques/menu_servicios.php?classStyle=menu_left',		//
			"MAIN?block=col-lg-10 page_col2&classStyle=page",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
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
			'col-lg-2 page_col1'=>'bloques/menu_empresa.php?classStyle=menu_left',		//
			"MAIN?block=col-lg-10 page_col2&classStyle=page",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
			]
		],
	'footer'=>$Block['footer'],		
);

$Estructura['modulo=formularios&tab={contacto,boletin,consultas}']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas' 	=>
		[	
			[		
			'col-lg-2 page_col1'=>$Block['bar_izquierda'],		//
			"MAIN?block=col-lg-10 page_col2&classStyle=page",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
			]
		],	
	'footer'=>$Block['footer'],
);



if(!$_GET){ $_GET=array('modulo'=>'app','tab'=>'home'); }
if(!$_GET['sec']){ $_GET=array_merge(array('sec'=>'cgtp'),$_GET); }
if($_GET['tab']=='contactenos'){ $_GET['tab']='contacto'; }


include("particular.php");


