<?php //á
include("common/head.php");
?>
<body>
<?php

echo $HTML_ALL_INICIO;
echo $HTML_MAIN_INICIO;

include("common/header.php");
include("common/menu.php"); 

	?>
    <div class="div_fila">
		<div id="div_home_main" class="div_columna">
		<?php
			include("common_listados_productos.php");
		?>
		</div>
		<div id="div_home_right" class="div_columna">
		<?php			
			include("common_carrito_productos.php");	
			include("home_bloque_publicidad.php");	
			include("home_bloque_ofertas.php");	
		?>    
		</div>
	</div>
	
    <div class="div_fila">
    <?php
		include("home_bloque_recomendar.php");	
		include("home_bloque_recomendados.php");	
		include("home_bloque_contacto.php");	
	?> 	
	</div>	
    
    <?php

include("common/footer.php"); 

echo $HTML_MAIN_FIN;	
echo $HTML_ALL_FIN;

?>
</body>
</html>