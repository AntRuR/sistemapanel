<?php //á

$THIS=$PARAMS['conector'];
//$SLIDE=$SLIDESHOW[$PARAMS['conector']];
//$ITEMS=array($LISTADO[$PARAMS['conector']][sizeof($LISTADO[$PARAMS['conector']])-1]);
$FORM=$FORMULARIO[$THIS];

?>
<div class="div_fila" style="clear:left;">
    <div class="cuadro <?php
        web_selector_control($SELECTED,$THIS,"bloques,formularios");
        ?>" >
        <?php //web_render_esquinas(1,4);?>		
    
            <div class="barra_arriba">
           <?php //web_render_item_borde('bors-b',1,2);?>                
            <h1><?php echo $FORM['titulo']; ?></h1>
            </div>
    
            <div class="div_borde div_inner" >
            
                <!--FORM INICIO-->
                <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios" action="<?php echo $FORM['action'];?>" >
                                
                <div id="<?php echo $FORM['nombre'];?>_form_body">
            
                <?php web_render_form($FORM); ?>        
                     
                </div>                   
                
                <?php web_render_form_javascript($FORM); ?>        
                
                </form>
                <!--FORM FIN--> 
                                                
                <div class="clean"></div>    
        
         </div>
    </div>       
</div>
<style>
    #recomendar_captcha {margin-left: 0 !important;}
</style>