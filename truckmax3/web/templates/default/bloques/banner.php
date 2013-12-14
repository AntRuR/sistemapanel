<?php //á

$THIS=$PARAMS['this'];

//$ITEMS=$LISTADO[$PARAMS['conector']];

$ITEMS=$NOODSLICE[$PARAMS['conector']];

?>
<div id="listado_<?php echo $THIS;?>">
<?php foreach($ITEMS as $NOOB){ ?>

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques,listados");
        ?>" >             
        <div class="div_borde div_inner">

            <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_fijo" class="contenedor_slider_fijo">                
                <div  id="contenedor_slider_<?php echo $NOOB['label'];?>_movil" class="contenedor_slider_movil">
                                    
                    <?php  
                    if(sizeof($NOOB['num_items'])==0){ ?><p class="vacio"><?php echo $NOOB['vacio']; ?></p><?php } else {
                        foreach($NOOB['items_bloques'] as $i=>$itembloque){ 
                        ?>
		                <div class="slid">                              
                            <ul  class="listado_items">   
                            <?php foreach($itembloque as $item){ ?>                                             
                            <!--FRAME BEGIN-->    
                                <li class="listado_item">
                                	
									<?php if($item['link']!=''){ ?><a href="<?php echo $item['link'];?>" title="<?php echo $item['foto_descripcion'];?>"><?php } ?>
                                    	<img border="0" <?php echo $item['get_atributos'];?> alt="<?php echo $item['foto_descripcion'];?>" /></a>
                                	<?php if($item['link']!=''){ ?></a><?php } ?>  
                                    
                                </li>
                            <!--FRAME END-->    
                            <?php } ?>
                            </ul> 
                        </div>   
                        <?php 
                        }
                    }
                    ?>
                                 
                </div>
            </div>
            
            
        </div>        
    
        <div class="barra_abajo listado_paginacion">
            <?php web_render_slider_pie($NOOB); ?>       
        </div>  
    
    </div>
	<?php web_render_slider_javascript($NOOB); ?>    
<?php } ?>
</div>

