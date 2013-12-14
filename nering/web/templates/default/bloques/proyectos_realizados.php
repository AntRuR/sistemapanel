<?php //á

$THIS=$PARAMS['this'];

//$ITEMS=$LISTADO[$PARAMS['conector']];

$ITEMS=$OBJECT[$PARAMS['this']];


?>
<div class="cuadro <?php 
       web_selector_control($SELECTED,$THIS,"bloques,listados,menus");
       ?>" >
       <?php web_render_esquinas(1,4);?>



	   <?php if($ITEMS['header']){ 
       echo '<div class="barra_arriba">';
       web_render_item($ITEMS['header']);
       echo '</div>';
	   } 
     ?>

      <div class="div_barra"  >

              <span class="div_menu <?php

              echo "menu_filtros"; ?>" id="pestanias">

              <?php 
              web_render_menu($ITEMS['menu'],array(
                                                          'lados_externos'=>0
                                                          ,'lados_internos'=>0
                                                          ,'id'=>'menu_'.$PARAMS['this']
                                                          )); 
              ?>
              </span>

      </div>

      <div class="area_tabs">

     <?php
     $ee=0;
     foreach($ITEMS['tabs'] as $iii=>$ITE){ 
     $ee++; 
     $ITEM=$ITE[0];

     ?>     
      <div class="area_tab <?php echo 'menu_'.$PARAMS['this'];?>_area_tab" <?php echo ($ee==1)?'style="display:block;"':''; ?> id="<?php echo 'menu_'.$PARAMS['this'];?>_area_tab_<?php echo $iii;?>">

        <div class="div_borde div_inner">
          <div  id="contenedor_slider_<?php echo $ITEM['settings']['label'];?>_fijo" class="contenedor_slider_fijo">
            <div  id="contenedor_slider_<?php echo $ITEM['settings']['label'];?>_movil" class="contenedor_slider_movil">
                <?php
                if(sizeof($ITEM['settings']['num_items'])==0){ ?><p class="vacio"><?php echo $ITEM['settings']['vacio']; ?></p><?php } else {
                    foreach($ITEM['items_bloques'] as $i=>$item){
                    ?>
                    <div class="slid">                              
                    <?php //SLIDE FRAME INICIO ?>    
                        <div class="div_borde">
                        <?php web_render_tree($item); ?>
                        </div>
                    <?php //SLIDE FRAME FIN ?>
                    </div>   
                    <?php 
                    }
                }
                ?>
              </div>
            </div>
          </div> 

         <div class="barra_abajo">
            <?php //web_render_item($ITEM['footer']); ?>       
            <div class="listado_paginacion">
               <?php web_render_slider_pie($ITEM['settings']); ?>       
            </div>
         </div>

       </div>

       <?php } ?> 

     </div>
</div>




