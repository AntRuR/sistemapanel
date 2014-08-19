<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$LISTADO[$PARAMS['conector']];

?>
<div id="listado_<?php echo $THIS;?>">
<?php foreach($ITEMS as $ITEM){ ?>
    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques");
        ?>" >
        <?php //web_render_esquinas(1,4);?>        
    
       <div class="barra_arriba">
       <?php //web_render_item_borde('bors-b',1,2);?>        
       <?php echo $ITEM['titulo'];?>
       </div>
             
        <div class="div_borde div_inner">
        <?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>        

			<?php web_render_fichero($ITEM); ?>
    
        <?php /////////////////////////////////////////////////////////////////////////////////////////////////////?>        
        </div>        
    
       <div class="barra_abajo"></div>
    
    </div>
<?php } ?>
</div>