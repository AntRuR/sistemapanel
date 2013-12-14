<?php //á
?>
<?php

//COLUMNA 1

include("bloques/bars/bar_columna_1.php");
	
//FILA 2

include("bloques/bars/bar_fila_2.php");

switch($_GET['tab']){
case "servicios":	
	include("static/servicios.php");
break;
}
?>