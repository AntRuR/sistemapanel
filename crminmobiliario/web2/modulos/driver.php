<?php //á

/**********************************************/
//////////////////  BLOQUES  ///////////////////
/**********************************************/	

$Block['header']=array(array(
						"common/header.php",
					  ));
					  
$Block['footer']=array(array(
						"common/footer.php",
					  ));					  
/*
$Block['bar_derecha']=array(
						"bloques/menu_contenidos.php",
						"bloques/publicidad_fotos.php",
						"bloques/banner_columna.php",
					  );
*/					  
	
/**********************************************/
//////////////////  MODULOS  ///////////////////
/**********************************************/	

$Estructura['modulo=app&tab=home']=
array(
			'header'=>$Block['header'],
			"MAIN",
			array(
				'547'=>"bloques/banner_main.php",
				'188'=>"bloques/banner_columna.php",
			),
			array(
				'547'=>"bloques/blog.php",
				'188'=>array(
						"bloques/banners_columna_3.php",
						"bloques/banners_columna_4.php",
						),
			),
			"bloques/texto_1.php",
			array(
				'338'=>"bloques/texto_2.php",
				'397'=>"bloques/formulario_contacto.php?conector=contacto",
			),
			'footer'=>$Block['footer'],		
 );


$Estructura['modulo=app&tab=pages']=
array(
	'header'=>$Block['header'],
			array(
				"bloques/arbol_categorias.php?conector=productos",
				"MAIN",
				//$Block['bar_derecha'],
				),
	'footer'=>$Block['footer'],		
);


$Estructura['modulo=items&tab=productos&acc=file']=
array(
			array(
				"MAIN"
				),
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
			'common/header_productos_menu.php',	
			array(
				"bloques/arbol_categorias.php?conector=productos",
				"MAIN",
				//$Block['bar_derecha'],
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
				//$Block['bar_derecha'],
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