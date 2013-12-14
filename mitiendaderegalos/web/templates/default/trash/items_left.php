<?php //á
?>	
<div id="div_bloque_sidebar" >

	<div class="cuadro bloque_cuadro_4">
    
        <div class="barra_arriba"></div>
        <div class="barra_abajo"></div>
        
        <div class="arriba_izquierda"></div>
        <div class="arriba_derecha"></div>
        <div class="abajo_izquierda"></div>
        <div class="abajo_derecha"></div>
                
        <h3 class="bloque_cabeza">PRODUCTOS</h3>    
        <div class="bloque_contenido">  
        
		<?php
		echo "<ul class='menu_items'>";
		foreach($ITEMS['menu'] as $MENU_ITEM){
			echo '<li class="'.$MENU_ITEM['nivel'].' '.$MENU_ITEM['selected'].'">';
			echo '<a href="'.$MENU_ITEM['url'].'">'.$MENU_ITEM['label'].'</a>';
			echo '</li>';
		} 
		echo "</ul>";
		?>

        </div>
        
        <div class="bloque_pie"></div>
        
    </div>
</div>