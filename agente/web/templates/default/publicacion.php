<?php //á
include("head.php");
?>
<body>
<?php

echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;

include("menu.php"); 		
include("header.php");

echo '<div id="div_home_fila" class="cuadro fila_desarrollo" >';

include("publicacion_main.php");
include("publicacion_left.php");
    
echo '<div class="fila_barra_abajo"></div>
<div class="fila_abajo_izquierda"></div>
<div class="fila_abajo_derecha"></div>';

echo '</div>';

include("footer.php"); 

echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;

?>
</body>
</html>