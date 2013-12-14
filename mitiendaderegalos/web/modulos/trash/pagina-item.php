<?php //á

switch($_GET['tab']){
case "productos":	
include("item/productos.php");
break;
case "categorias":	
include("item/categorias.php");
break;
case "usuarios":	
include("item/usuarios.php");
break;
}


//COLUMNA 2

include("bloques/bars/bar_columna_2.php");
	
//FILA 2

include("bloques/bars/bar_fila_2.php");	


?>	