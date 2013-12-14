<?php //á

$THIS=$PARAMS['this'];

//$ITEMS=$LISTADO[$PARAMS['conector']];

$ITEMS=$OBJECT[$PARAMS['this']]['items'];

?>
<?php foreach($ITEMS as $ITEM){ ?>
<div class="cuadro <?php 
       web_selector_control($SELECTED,$THIS,"bloques,listados");
       ?>" >
       <?php web_render_esquinas(1,4);?>
            
       <?php
	   /*
       echo '<div class="barra_arriba">';
	   if($ITEM['header']){ 
	    web_render_item($ITEM['header']);
	   } 
	   echo '</div>';
	   */
	   ?>
       
       <div class="div_borde div_inner">

			<div class="div_fila" style="margin-bottom:10px;">
				<?php //web_render_fichero($COMMON['archivos']['banner_02']); ?>
				<?php web_render_slideshow_proceso($ITEM); ?>                             
			</div>

            
        </div>        
    
    
    </div>

<?php } ?>
<script>
window.addEvent('domready', function() {
 
	ReMooz.assign('.listado_items .listado_item a.foto', {
		'origin': 'img',
		'shadow': 'onOpenEnd', // fx is faster because shadow appears after resize animation ( alue can be true, onOpenEnd )
		'resizeFactor': 0.8, // resize to maximum 80% of screen size
		'cutOut': false, // don't hide the original
		'opacityResize': 0.4, // opaque resize
		'dragging': true, // disable dragging
		'centered': true // resize to center of the screen, not relative to the source element
	});
 
});
</script>