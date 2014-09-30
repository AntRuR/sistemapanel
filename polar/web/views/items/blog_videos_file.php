<?php //á


$THIS=$PARAMS['this'];
//$SLIDE=$SLIDESHOW[$PARAMS['conector']];
//$ITEMS=array($LISTADO[$PARAMS['conector']][sizeof($LISTADO[$PARAMS['conector']])-1]);
$ITEMS=$OBJECT[$PARAMS['this']];
?>

<section class="<?php echo $PARAMS['classStyle']; ?>" >


    <div class="header">
        <h1><?php echo $ITEMS['nombre']; ?></h1>
    </div>

         

    <article class="inner">
                                
                        <?php  
						//prin($ITEMS['filas']);
                        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
                            ?>
                                <ul  class="listado_items">   
                                <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                                    <li class="listado_item">
                                       <div class="capa" >
                                         <div class="inner" >
                                         	<?php echo web_render_item($item,$item['esquema']); ?>
                                         </div>                                     
                                       </div>                    
                                    </li>							   

                                <?php } ?>
                                </ul> 
                            <?php 
                        }
                        ?>
                          
    
	</article>
    
    <div class="barra_abajo">
    	<div class="listado_paginacion">
    	<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        <!--<a class="ver_todos">Ver todos los productos de esta categoría</a>-->
        </div>
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