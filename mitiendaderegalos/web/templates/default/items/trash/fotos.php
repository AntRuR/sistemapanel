<?php //á
$ITEMS=$LISTADO['fotos'];
//prin($ITEMS);
?>
<div id="listado_productos" class="div_fila cuadro <?php 
    /* Style del Cuadro */ echo "bloque_cuadro_6"; ?> <?php
    /* Style del Listado */ echo "grilla_1"; ?>" >
    <?php web_render_esquinas(0,0);?>        
    <div class="div_borde">        
    
        <!--PAGINACION-->
        <div class="listado_paginacion div_barra barra_listado margen_arr"  >     	
        	<h1 class='titulo'><?php echo  $ITEMS['titulo'];?></h1>           	
            <!--<span class="total"><?php echo $ITEMS['total']." ".$lang['productos'];?></span>-->
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </div>
    
        <!--GRILLA-->
        <ul class="listado_items">
        <?php  
    
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
    
            foreach($ITEMS['filas'] as $i=>$item){ 
        
            ?>
        
            <li class="listado_item" <?php echo ($i%3==2)?' style="border-right:none;" ':''; ?> >
        
                <!--foto-->
                <a href="<?php echo $item['get_archivo'];?>" class="foto" title="<?php echo $item['nombre'];?>">
                    <img title="<?php echo $item['title'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['alt'];?>" />
                </a>
                <!--nombre-->
                <h2 class="nombre"><?php echo $item['nombre'];?></h2>
                
            </li>
        
            <?php 
        
            }
    
        }
        ?>
        </ul>
        
        <!--PAGINACION DEL LISTADO-->
        <!--
        <?php if($ITEMS['total']>0){ ?>
        
            <div class="listado_paginacion div_barra">
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
            </div>
            
        <?php } ?>
        -->
        
	</div>        
</div>
<script>
	window.addEvent('domready', function() {
	 
		ReMooz.assign('#listado_productos .listado_items .listado_item a.foto', {
			'origin': 'img',
			'shadow': 'onOpenEnd', // fx is faster because shadow appears after resize animation ( alue can be true, onOpenEnd )
			'resizeFactor': 1, // resize to maximum 80% of screen size
			'cutOut': false, // don't hide the original
			'opacityResize': 0.4, // opaque resize
//			'dragging': true, // disable dragging
			'centered': true // resize to center of the screen, not relative to the source element
		});
	 
	});
</script>
