<?php //á


/**********************************************/
//////////////////  MASTER  ////////////////////
/**********************************************/


/*MASTERBLOCK-START*/
$MASTERBLOCK['header_pre']='0';
$MASTERBLOCK['header']='1';
$MASTERBLOCK['header_after']='0';
$MASTERBLOCK['status']='0';
$MASTERBLOCK['bar']='1';
$MASTERBLOCK['menu']='1';
$MASTERBLOCK['footer_pre']='0';
$MASTERBLOCK['footer']='1';
$MASTERBLOCK['footer_after']='0';
/*MASTERBLOCK-END*/

$MASTERBLOCK2=$MASTERBLOCK;


if($_GET['modulo']=='items' and $_GET['tab']=='rubros' and $_GET['acc']=='list'){
	$MASTERBLOCK['header_after']='1';
}

/**********************************************/
//////////////////  MODULOS  ////////////////////
/**********************************************/

	include(incluget("bloques/izquierda_videos.php"));
	include(incluget("bloques/izquierda_publicidad_fotos.php"));
	include(incluget("bloques/derecha_publicidad_fotos.php"));
	include(incluget("bloques/derecha_publicidad.php"));
	include(incluget("bloques/bloque_banner_3.php"));
	include(incluget("bloques/mi_cuenta.php"));
	include(incluget("formularios/recomendar.php"));
	include(incluget("bloques/plaza_inmuebles_publicidad_home_fotos.php"));
		
	switch($_GET['tab']){
	case "productos":
		if($_GET['gru']=='90'){
			include(incluget("bloques/plaza_inmuebles_buscador.php"));	
		}
	case "rubros":
		if($_GET['gru']!='0'){
			include(incluget("bloques/izquierda_arbol_categorias.php"));
		} else {
			include(incluget("bloques/banner_home.php"));			
		}
		if($_GET['gru']=='34'){			
			//include(incluget("bloques/google_adsense.php"));					
            include(incluget("items/productos_list.php",array('conector'=>'inmuebles_list'))); 			
			include(incluget("bloques/plaza_inmuebles_buscador.php"));	
			include(incluget("bloques/plaza_inmuebles_publicidad_fotos.php"));
			include(incluget("bloques/plaza_inmuebles_categorias.php"));
			include(incluget("bloques/plaza_inmuebles_proyectos_destacados.php"));
			include(incluget("bloques/plaza_inmuebles_avisos_destacados.php"));			
		}
	break;
	default:
		//FILA 0 //COLMUNA 1
		//include("bars/bar_0-1.php");
		//FILA 1 //COLMUNA 1
		//include("bars/bar_1-1.php"); 
		//FILA 2	//COLMUNA 1
		//include("bars/bar_2-1.php");
		//FILA 3	//COLMUNA 1
		//include("bars/bar_3-1.php");
	break;	
	}
	switch($_GET['modulo']){
	case "items":
		include(incluget($_GET['modulo']."/".$_GET['tab']."_".$_GET['acc'].".php"));
	break;			
	case "error":		
		switch($_GET['tab']){
			default:	
				$item['texto']="Lo sentimos, pero la página que intenta ver no existe o no se pudo encontrar";
				$HEAD['titulo']="Página No Encontrada";
			break;
		}
	break;
	default:
		include(incluget($_GET['modulo']."/".$_GET['tab'].".php"));
	break;	
	}


?>