<?php //á
$ITEMS=$LISTADO['actividades'];
//prin($ITEMS);
?>
<div id="listado_productos" class="div_fila cuadro <?php 
    /* Style del Cuadro */ echo "bloque_cuadro_6"; ?> <?php
    /* Style del Listado */ echo "grilla_2"; ?>" >
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
                <a class="foto" >
                    <img title="<?php echo $item['title'];?>" <?php echo $item['get_atributos']; ?> alt="<?php echo $item['alt'];?>" />
                </a>
                <!--fecha-->                
                <div class="fecha"><?php echo $item['fecha'];?></div>
                <!--titulo-->
                <h2 class="titulo"><?php echo $item['titular'];?></h2>
                <!--texto-->                
                <div class="texto"><?php echo $item['descripcion'];?></div>
                
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
