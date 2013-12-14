<?php //á

/**********************************************/
//////////////////  BLOQUES  ///////////////////
/**********************************************/	

$Block['header']=array(array(
						"common/header_pre.php",
						"common/header.php",
						"common/header_menus.php",
					  ));
					  
$Block['footer']=array(array(
						"common/footer.php",
					  ));					  

$Block['bar_derecha']=array(
						"bloques/menu_contenidos.php",
						"bloques/publicidad_fotos.php",
						"bloques/banner_columna.php",
					  );
					  
$Block['bar_home']=array(
					 "bloques/blog.php",
					 array(
					 	"bloques/link_boletin.php",
						"bloques/recomendar.php",
						"bloques/link_facebook.php",
					 ),
					 "bloques/menu_contenidos.php",
					 array(
						 "bloques/publicidad_fotos.php",
						 "bloques/banner_columna.php",
					 ),
					);
	
/**********************************************/
//////////////////  MODULOS  ///////////////////
/**********************************************/	

$Estructura['modulo=app&tab=home']=
array(
		'header'=>$Block['header'],
		"MAIN",
		"bloques/banner_main.php",
		$Block['bar_home'],
		'footer'=>$Block['footer'],			
 );
$Estructura['modulo=app&tab=pages']=
array(
	'header'=>$Block['header'],
	array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		),
	'footer'=>$Block['footer'],			
);
$Estructura['modulo=items&tab=productos&acc=file']=
array(
	'header'=>$Block['header'],
	array(
		"bloques/arbol_categorias.php?conector=productos",
		'700'=>array(
			array(
				"MAIN",
				"bloques/formulario_consultas.php?conector=consultas",		
				),
			),
		),
	'footer'=>$Block['footer'],			
);
$Estructura['modulo=items&tab=productos_imprimir&acc=file']=
array(
		//"common/header_imprimir.php",
		"MAIN",
		//"common/footer_imprimir.php",
);
$Estructura['modulo=items&tab=productos&acc=list']=
array(
	'header'=>$Block['header'],
	array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		),
	'footer'=>$Block['footer'],			
);
$Estructura['modulo=items&tab=textos_items']=
array(
	'header'=>$Block['header'],
	 array(
		"bloques/menu_textos.php",
		"MAIN",
		),
	'footer'=>$Block['footer'],			
);
$Estructura['modulo=items&tab={blog_noticias,blog_actividades,blog_fotos,blog_videos}']=
array(
	'header'=>$Block['header'],
	 array(
		"bloques/menu_blog.php",
		"MAIN",
		),
	'footer'=>$Block['footer'],			
);
$Estructura['modulo=formularios&tab={contacto,boletin}']=
array(
	'header'=>$Block['header'],
	 array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		),
	'footer'=>$Block['footer'],			
);

$Estructura['modulo=error&tab=404']
=array(
	'header'=>$Block['header'],
	"MAIN",
	'footer'=>$Block['footer'],	
);				


?>