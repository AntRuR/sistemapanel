<?php //á

$THIS=$PARAMS['this'];
//prin($THIS);
$ITEMS=$LISTADO[$PARAMS['this']];

?>
<div id="listado_<?php echo $THIS;?>" class="cuadro <?php 
	web_selector_control($SELECTED,$THIS,"bloques,listados");
	?>" >

    <div class="barra_arriba">
    <?php web_render_item_borde('bors-b',1,2);?>        
    <?php echo $ITEMS['titulo'];?>
    </div>         
    
     <div class="div_borde div_inner">        
            		
        <!--GRILLA-->
        <?php
        if($ITEMS['total']==0){ ?>
        <ul class="listado_items">
        	<p class="vacio"><?php echo $ITEMS['vacio']; ?></p>
		</ul>
		<?php } else { ?>
			<!--GRILLA-->
                <ul class="listado_items listado_columna">
                <?php foreach($ITEMS['filas'] as $item){
                ?>
                    <li class="listado_item" >
                        <div class="capa"  >                                                                                  
                            <div class="inner <?php if($item['foto']){ ?>listado_item_con_foto<?php } ?>"  >                                 
                                <?php //web_render_item_borde('bors-l'); ?>
								<a class="titulo" href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?> (<?php echo $item['total'];?>)</a>                                
								<div class="subtitulo">Alquiler(0) Venta(0)</div>                                
                                <div class="clean"></div>
                            </div>	
                        </div>	
                    </li>
                
                <?php 
                } 
                ?>
                </ul>
		<?php }
        ?>                   

		<div class="clean"></div>        
	</div>        

</div>
