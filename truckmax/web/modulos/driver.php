<?php //á

/**********************************************/
//////////////////  MASTER  ////////////////////
/**********************************************/

/*MASTERBLOCK-START*/
$MASTERBLOCK['header_out']='0';
$MASTERBLOCK['header_pre']='1';
$MASTERBLOCK['header']='1';
$MASTERBLOCK['header_after']='1';
$MASTERBLOCK['status']='0';
$MASTERBLOCK['bar']='0';
$MASTERBLOCK['menu']='0';
$MASTERBLOCK['footer_pre']='0';
$MASTERBLOCK['footer']='0';
$MASTERBLOCK['footer_after']='1';
$MASTERBLOCK['footer_out']='0';
/*MASTERBLOCK-END*/

/**********************************************/
////////////////////  BARS  ////////////////////
/**********************************************/	

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
		"MAIN",
		"bloques/banner_main.php",
		"bloques/banners_productos.php",
		$Block['bar_home']
 );
$Estructura['modulo=app&tab=pages']=
array(
	array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		)
);
$Estructura['modulo=items&tab=productos&acc=file']=
array(
	array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN"
		)
);
$Estructura['modulo=items&tab=productos&acc=list']=
array(
	array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		)
);
$Estructura['modulo=items&tab=textos_items']=
array(
	 array(
		"bloques/menu_textos.php",
		"MAIN",
		)
);
$Estructura['modulo=items&tab={blog_noticias,blog_actividades,blog_fotos,blog_videos}']=
array(
	 array(
		"bloques/menu_blog.php",
		"MAIN",
		)
);
$Estructura['modulo=formularios&tab={contacto,boletin}']=
array(
	 array(
		"bloques/arbol_categorias.php?conector=productos",
		"MAIN",
		$Block['bar_derecha'],
		)
);

$Estructura['modulo=error&tab=404']
=array(
	"MAIN"
);				

$EstructuraCero=$Estructura;
$Estructura=PreProcessEstructura($Estructura);

//GetArchivosEsctructura($Estructura,$EstructuraCero);


$get1=$get3=$_GET;
foreach($get1 as $kk=>$gg){
	 if(!in_array($kk,array('modulo','tab','acc'))){ unset($get1[$kk]); } 
	 if(!in_array($kk,array('modulo'))){ unset($get3[$kk]); } 
}
$get1=http_build_query($get1);
$get3=http_build_query($get3);

$Esquema=($Estructura[$get3])?$Estructura[$get3]:$Estructura[$get1];

//RENDER Esquema
$ListEsquema=ArrayToList($Esquema);

foreach($ListEsquema as $File){
	include(incluget($File));
}

?>
