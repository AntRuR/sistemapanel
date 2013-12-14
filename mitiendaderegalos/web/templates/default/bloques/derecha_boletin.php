<?php //á

$THIS=$PARAMS['this'];
//$ITEMS=$LISTADO[$PARAMS['conector']];
?>
<div id="bloque_<?php echo $THIS;?>">

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques");
        ?>"  >
        <?php //web_render_esquinas(1,4);?>        
        <!--
        <div class="barra_arriba">
        <?php web_render_item_borde('bors-b',1,2);?>        
        <?php echo $NOOB['titulo'];?>
        </div>
        -->      
        <div class="div_borde div_inner" >
               
            <a class="link1" href="<?php echo $COMMON['url_boletin'];?>">Inscríbete a nuestro boletín para acceder a nuestas</a>
            <a class="link2" href="<?php echo $COMMON['url_boletin'];?>">PROMOCIONES</a>
            <a class="link3" href="<?php echo $COMMON['url_boletin'];?>">Inscríbete</a>

		</div>
        
    </div>

</div>    