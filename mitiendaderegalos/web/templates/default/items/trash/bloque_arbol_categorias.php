<?php //á
?>	

<div id="bloque_nuestras_marcas_elemento_0">

		<?php
		echo "<ul class='arbol_items'>";
		foreach($ITEMS['menu'] as $MENU_ITEM){
			echo '<li class="'.$MENU_ITEM['nivel'].' '.$MENU_ITEM['selected'].'">';
			echo '<a href="'.$MENU_ITEM['url'].'">'.$MENU_ITEM['label'].'</a>';
			echo '</li>';
		} 
		echo "</ul>";
		?>

</div>

