<?php //á
include("head.php");
?>
<body>
<?php

echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;

include("header.php");
include("menu.php"); 

	?>
    <div id="div_home_main" class="div_columna">
	<?php
	
		include("common_bloque_buscador.php");
		include("common_listados_productos.php");
	
	?></div>
	<div id="div_home_right" class="div_columna">
    <?php
	
		include("home_bloque_banner.php");	?>
        
        <div id="div_home_right_bloques">
        <?php 
		include("home_bloque_boletin.php");
		include("home_bloque_recomendar.php");
		?>
        </div>
        
    </div>
    <?php

include("footer.php"); 

echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;

?>
</body>
</html>