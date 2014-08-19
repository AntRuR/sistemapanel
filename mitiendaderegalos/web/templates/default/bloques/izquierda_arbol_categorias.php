<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$LISTADO[$PARAMS['conector']];

//prin($ITEMS['menu']);
?>
<div id="bloque_<?php echo $THIS;?>">

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques,arboles");
        ?>" >
        <?php //web_render_esquinas(1,4);?>        
    
       <div class="barra_arriba">
       <?php //web_render_item_borde('bors-b',1,2);?>        
       <h2><a href="<?php echo $ITEMS['rubro']['link'];?>" title="<?php echo $ITEMS['rubro']['label'];?>"><?php echo $ITEMS['rubro']['label'];?></a></h2>
       </div>
             
        <div class="div_borde div_inner">
        
		<?php web_render_tree($ITEMS['menu'],'h3'); ?>

        </div>
        
	</div>
    
</div>    	     
