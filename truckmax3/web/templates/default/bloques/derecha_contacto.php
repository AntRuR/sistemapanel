<?php //á

$THIS=$PARAMS['this'];
//$ITEMS=$LISTADO[$PARAMS['conector']];
?>
<div id="bloque_<?php echo $THIS;?>">

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques");
        ?>"  >
        <?php //web_render_esquinas(1,4);?>        
        <a href="<?php echo $COMMON['url_contacto'];?>" class="barra_arriba">
        <?php web_render_item_borde('bors-b',1,2);?>        
        <?php echo $NOOB['titulo'];?>
        </a>
        <div class="div_borde div_inner" >               
            <a href="<?php echo $COMMON['url_contacto'];?>"><img  /></a>
		</div>
        
    </div>

</div>    