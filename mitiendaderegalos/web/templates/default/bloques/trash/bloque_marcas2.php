<?php //á
?>    
<?php    	
$NOOB=$NOODSLICE['marcas2'];
?>
<div id="bloque_nuestras_marcas2_elemento_0">
    
    <div id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">    
        <div id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
                
            <?php if($NOOB['num_items']==0){ echo $NOOB['vacio']; } else { ?>   
            <?php foreach($NOOB['items_bloques'] as $itembloque){ ?>            
            <div class="slid">      
                <ul>    
                    <?php foreach($itembloque as $item){ ?>
                    <!-- inicio frame -->
                    <li>
                    	<!--foto-->
                        <span class="foto">
                            <img alt="<?php echo $item['alt'];?>" title="<?php echo $item['title'];?>" <?php echo $item['get_atributos'];?> />
                        </span>
                                               
                    </li>
                    <!-- fin frame -->
                    <?php } ?>
                </ul>
            </div>                
            <?php } ?>                
            <?php } ?>
            
        </div>
    </div>
    
	<?php web_render_slider_pie($NOOB); ?>
    
</div>        
<?php 
web_render_slider_javascript($NOOB); unset($NOOB);
?>