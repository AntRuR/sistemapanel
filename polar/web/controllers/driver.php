<?php //á

/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

$Block['header']="common/header.php";

$Block['nav']="common/header_menu.php";
	  
$Block['footer']="common/footer.php";

$Block['bar_izquierda']=array(
		// "bloques/print_titulo.php",//
		
		// "bloques/arbol_0.php",//		

		// "bloques/print_documentos.php",//		

		//"bloques/documentos.php?page=1",//		
		// "bloques/arbol_1.php?page=1",//		

		//"bloques/arbol_documentos.php?page=1",//
		// "bloques/arbol_departamentos.php",//
		"bloques/arbol_blog.php?page=1",//

		// "bloques/menu_obras.php",

		// "bloques/menu_obras2.php",

		// "bloques/banner_departamentos.php",//
		// "bloques/banner_publicidad_1.php?page=1",//
		// "bloques/banner_publicidad_2.php?page=1",//
		// "bloques/print_novedades.php",//		
		"bloques/form_recomendar.php?conector=recomendar",//V[x]		
		// "bloques/print_redes_sociales.php",//V[x]		
		// "bloques/izquierda_facebook.php",//		
		"bloques/banner_enlaces.php?this=banner_enlaces2&conector=banner_enlaces2&classStyle=banner_enlaces",//V[x]	
	  );

$Block['bar_derecha']=array(
		//"bloques/banner_publicaciones.php?page=1",//L[]V[]				//panel:textos_grupos,textos_subgrupos,textos_items; ( id=centro_informativo)
		// "bloques/alcalde.php",//V[x]			
		// "bloques/agenda.php",//V[x]			
		// "bloques/menu_convocatoria2.php",//V[x]			

		// "bloques/arbol_y.php",//		
		// "bloques/banner_escudos.php",//V[x]			
		// "bloques/banner_publicidad_3.php?page=1",//L[]V[x]	//panel:banners_fotos,banners_fotos_fotos; medidas:(4:67x57);
		// "bloques/banner_publicidad_4.php?page=1",//L[]V[x]	//panel:banners_fotos,banners_fotos_fotos; medidas:(5:202x91);

		// "bloques/bloq_centro.php",//V[x]			
		// "bloques/bloq_enlaces.php",//V[x]			
		// "bloques/banner_enlaces.php?page=1",//V[x]	

		// "bloques/indicadores_economicos.php",//V[x]			
				

	  );

$Block['bar_home']="items/news_items_list.php";
		// "bloques/news_menu.php?page=1",//L[]V[]				//panel:textos_grupos,textos_subgrupos,textos_items; ( id=centro_informativo)
		// "items/news0_items_list.php",//L[]V[]				//panel:textos_grupos,textos_subgrupos,textos_items; ( id=centro_informativo)		
		// "items/news_items_list.php"//L[]V[]				//panel:textos_grupos,textos_subgrupos,textos_items; ( id=centro_informativo)			
	  // ;

$Block['pre_footer']=
			array(
				
				array(
					"bloques/banner_enlaces.php?this=banner_enlaces2&conector=banner_enlaces2&classStyle=banner_enlaces",//V[x]	
					"bloques/form_recomendar.php?conector=recomendar",//V[x]		
				),

				"bloques/blog.php",
				// "bloques/form_recomendar.php?this=recomendar",//V[x]		
				"bloques/banner_enlaces.php?this=banner_enlaces&conector=banner_enlaces&classStyle=banner_enlaces",//V[x]	
			);			

/**********************************************/
//////////////////  MODULOS  ///////////////////
/**********************************************/	

$Block['blank']='bloques/blank.php';

$Estructura['modulo=app&tab=blank']=
array(
	'header'=>$Block['header'],	
	'nav'=>$Block['nav'],	
	'canvas'=>array(
		$Block['blank'],
		array(
		 	'col-md-3 id_b2'=>$Block['blank'],
		 	'col-md-9 id_b3'=>$Block['blank']
		),
		array(
			'col-md-3 id_b4'=>$Block['blank'],//
			'col-md-3 id_b5'=>$Block['blank'],	//
			'col-md-6'=>array(
				$Block['blank'],//
				$Block['blank']	//
			),
		),
		array(
		 	'col-md-6 id_b6'=>$Block['blank'],
		 	'col-md-6 id_b7'=>$Block['blank']
		),	
	),
	'footer'=>$Block['footer'],	
	// $Block['blank'],			
);


$Estructura['modulo=app&tab=home']=
array(
	'header'	=>$Block['header'],	
	'nav'		=>$Block['nav'],	
	'canvas'	=>array(
	 	"bloques/banner_main.php",//L[x]V[x]	//panel:banners_fotos,banners_fotos_fotos; medidas:(3:484x174)
		"MAIN",//L[x]V[x]			//panel:paginas(id=bienvenido)
		$Block['bar_home']	//
	),
	'footer'=>$Block['footer'],			
);



$Estructura['modulo=app&tab=pages']=
array(
	'header'=>$Block['header'],	
//	"bloques/print_marquesina.php",
	array(
		$Block['bar_izquierda'],	//
		"MAIN",//L[x]V[x]						//panel:paginas(id=$_GET[PAGE])
		// $Block['bar_derecha'],		//
		),
	'footer'=>$Block['footer'],			
);

$Estructura['modulo=items&tab={blog_noticias,blog_actividades,blog_fotos,blog_videos}']=
array(
	'header'=>$Block['header'],	
//	"bloques/print_marquesina.php",
	 array(
		array(		
			// "bloques/print_titulo.php",
			"bloques/menu_blog.php",
		),	
		"MAIN",						//panel:blog_noticias,blog_actividades,blog_fotos,blog_fotos_fotos,blog_videos,blog,videos_videos
		$Block['bar_derecha'],		//
		),
	'footer'=>$Block['footer'],		
);
								


$Estructura['modulo=items&tab=servicios_items']=
array(
	'header'=>$Block['header'],
//	"bloques/print_marquesina.php",
	 array(
		'bloques/menu_servicios.php',		//
		"MAIN?classStyle=pages",						//panel:textos_items
		$Block['bar_derecha'],		//
		),
	'footer'=>$Block['footer'],		
);

$Estructura['modulo=items&tab=empresa_items']=
array(
	'header'=>$Block['header'],
//	"bloques/print_marquesina.php",
	 array(
		'bloques/menu_empresa.php',		//
		"MAIN?classStyle=pages",						//panel:textos_items
		$Block['bar_derecha'],		//
		),
	'footer'=>$Block['footer'],		
);

$Estructura['modulo=formularios&tab={contacto,boletin,consultas}']=
array(
	'header'=>$Block['header'],
	 array(
		$Block['bar_izquierda'],	//
		"MAIN",						//panel:contacto,boletin,reclutamiento,proveedores
		// $Block['bar_derecha'],		//
		),
	'footer'=>$Block['footer'],
);

$Estructura['modulo=error&tab=404']=
array(
	'header'=>$Block['header'],
	"MAIN",							//
	'footer'=>$Block['footer'],
);

if(!$_GET){ $_GET=array('modulo'=>'app','tab'=>'home'); }
if(!$_GET['sec']){ $_GET=array_merge(array('sec'=>'cgtp'),$_GET); }
if($_GET['tab']=='contactenos'){ $_GET['tab']='contacto'; }


include("particular.php");


