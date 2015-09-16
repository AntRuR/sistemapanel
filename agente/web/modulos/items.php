<?php //á

/**********************************************/
///////////////home_bloque_buscador.php//////////
/**********************************************/

include("buscador.php");

/**********************************************/
/////////home_bloque_recomendar.php/////////////
/**********************************************/

include("formularios.php");
	
/**********************************************/
///////////////home_listado.php///////////
/**********************************************/

switch($_GET['tab']){
case "productos":	
include("listados_productos.php");
break;
case "usuarios":	
include("listados_usuarios.php");
break;
}

	
 
?>