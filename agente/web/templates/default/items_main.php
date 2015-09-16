<?php //á		
?><div id="div_bloque_desarrollo">
	<div class="cuadro bloque_cuadro_5" >
        <div class="barra_arriba"></div>
        
        <div class="arriba_izquierda"></div>
        <div class="arriba_derecha"></div>
        
        <div class="min_height"></div>        
        
        <div class="bloque_contenido items" >  
		
        	<h1 class="titulo" ><?php echo $ITEMS['titulos_seccion'];?></h1>
        
            <div class="linea_paginacion">
            <div class="total"><?php echo ($ITEMS['listado']['total']==0)?"":$ITEMS['listado']['total']." productos"; ?></div>
            <?php echo $ITEMS['listado']['anterior'].$ITEMS['listado']['tren'].$ITEMS['listado']['siguiente']; ?>
            </div>
            <div class="catalogo">
            <?php 
			if($ITEMS['listado']['total']>0){ ?>
            <ul>
			<?php            
			foreach($ITEMS['listado']['filas'] as $item){ ?>
			<li>
			<table><tr><td align="center">
			<a href="<?php echo $item['url'];?>"  title="<?php echo $item['title'];?>" >
			<img  alt="<?php echo $item['alt'];?>" <?php echo dimensionar_imagen('prodite_imas',$item['fecha_creacion'],$item['file'],"2","100x100");?> />
			</a>
			</td></tr></table>
			
			<a class="nombre" title="<?php echo $item['title'];?>" href="<?php echo $item['url'];?>" ><?php echo $item['nombre'];?></a>
			
			</li>
			<?php 
			} 
			?>
            </ul>
            <?php	
			} else {
			?>
            <div id="no_hay_items">no hay productos en esta categoría</div>
            <?php
			}
			?>
            </div>

        
		</div>
	</div>
</div>
