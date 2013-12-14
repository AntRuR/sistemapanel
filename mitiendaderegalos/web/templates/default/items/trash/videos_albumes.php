<?php //á
$ITEMS=$LISTADO['videos_albumes'];
//prin($ITEMS);
?>
<div id="listado_productos" class="div_fila cuadro <?php 
    /* Style del Cuadro */ echo "bloque_cuadro_6"; ?> <?php
    /* Style del Listado */ echo "grilla_3"; ?>" >
    <?php web_render_esquinas(0,0);?>        
    <div class="div_borde">
              
    
        <!--PAGINACION DEL LISTADO-->
        <div class="listado_paginacion div_barra"  >     	
            <!--<span class="total"><?php echo $ITEMS['total']." ".$lang['productos'];?></span>-->
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </div>
    
        <!--GRILLA-->
        <ul class="listado_items">
        <?php  
    
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
    
            foreach($ITEMS['filas'] as $i=>$item){ 
        
            ?>
        
            <li class="listado_item listado_item_con_foto" >
        
                <!--foto-->
                <a class="foto" href="<?php echo $item['link'];?>" >
                    <img width="80" src="http://i4.ytimg.com/vi/<?php echo $item['foto']['codigo'];?>/default.jpg" alt="<?php echo $item['alt'];?>" />
                </a>
                <!--titulo-->
                <a class="titulo" href="<?php echo $item['link'];?>" ><?php echo $item['nombre'];?></a>
                
            </li>
        
            <?php 
        
            }
    
        }
        ?>
        </ul>
        
        <!--PAGINACION DEL LISTADO-->
        <!--
        <?php if($ITEMS['total']>0){ ?>
        
            <div class="listado_paginacion div_barra">
            &nbsp;<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
            </div>
            
        <?php } ?>
        -->
        
	</div>        
</div>
