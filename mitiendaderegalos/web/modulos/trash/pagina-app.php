<?php //á

//COLUMNA 1

include("bloques/bars/bar_columna_1.php");
	
//FILA 2

include("bloques/bars/bar_fila_2.php");

switch($_GET['tab']){
case "home":	
	include("app/home.php");
break;
case "carrito":	
	include("app/carrito.php");
break;
case "faqs":	
	include("app/faqs.php");
break;
case "pages":	
	include("app/pages.php");
break;
}


?>