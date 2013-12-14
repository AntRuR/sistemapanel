<?php //á
?>
<?php 
//prin($_SESSION['carrito']);
$SLIDE=$SLIDESHOW['publicidad']; 
if(sizeof($_SESSION['carrito'])==0){ 
?>
<div id="div_home_publicidad" class="div_bloque" >
	<div class='titulo'>
    	<!--lados-->
		<span class='titulo_izq'></span>
		<span class='titulo_der'></span>
		<h3>Publicidad</h3>
	</div>
	<div id="div_home_publicidad_content" class="slideshow">
	</div>
</div>
<?php } ?>