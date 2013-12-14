<?php //á
//prin($PAGINA);

$THIS=$PARAMS['this'];

$PAGINA=$PAGES[$THIS];

?>

    <div class="cuadro <?php 
        web_selector_control($SELECTED,$THIS,"bloques");
        ?>" >
    
       <div class="barra_arriba">
       <?php web_render_item_borde('bors-b',1,2);?>        
       <?php echo $PAGINA['titulo']; ?>
       </div>
             
        <div class="div_borde div_inner" id="div_carrito">
		
			<?php if($PAGINA['foto']!=''){ ?>
            <img  <?php echo $PAGINA['get_atributos']; ?> style="float:right;" class="margen_izq" />
            <?php } ?>
            <?php echo $PAGINA['texto']; ?>        
        
        </div>
        
    </div>

