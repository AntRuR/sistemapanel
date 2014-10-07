<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['this']];

?>

<section class="<?php echo $PARAMS['classStyle']; ?>" >


    <div class="header">
        <h1><?php echo $ITEMS['titulo']; ?></h1>
    </div>


    <article class="inner">
        
        <div class="row">
        <?php web_render_combo($ITEMS['combo']); ?>
        </div>
                
		<?php  
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
            ?>
            <ul class="listado_items grid">   
            <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                <li class="listado_item">
                     <?php web_render_item($item,$item['esquema']); ?>								                
                </li>							   
            <?php } ?>
            </ul> 
            <?php 
        }
        ?>
    </article> 


    <div class="footer">
        <ul class="pagination">
        <?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </ul>
    </div>  

</section> 
       

	<?php /*
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
    */ ?>
    