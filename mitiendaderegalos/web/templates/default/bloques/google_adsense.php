<?php //á

$THIS=$PARAMS['this'];
//$ITEMS=$LISTADO[$PARAMS['conector']];
//$ITEMS=$NOODSLICE[$PARAMS['conector']];

?>
<div id="listado_<?php echo $THIS;?>">

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques");
        ?>"  >
        <?php web_render_esquinas(1,2);?>        
    
       <div class="barra_arriba">
       <?php  //web_render_item_borde('bors-b',1,2);?>        
       Google Adsense
       </div>
        <div class="div_borde div_inner" >
 	  	</div>
   </div>
   
</div>   