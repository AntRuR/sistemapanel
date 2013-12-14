<?php //á
//prin($ITEMS['categorias']);
?>
<div class="div_fila div_fila_margen" >
	
    <?php if($_SESSION['login']['status']==0){ ?>
    <div class="div_bloque gris bloque_ingresar" > 
	<?php include("formularios/login.php");?>
    </div>
    <?php } ?>
    
	<div class="div_bloque gris bloque_ubigeo" >    

       	<div class="div_barra"><?php echo $ITEMS['geos']['titulo'];?></div>
		<div class="div_contenido">
        	<div class="ruta"><?php echo $ITEMS['geos']['path'];?></div>
            <ul>
            <?php foreach($ITEMS['geos']['items'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>    
            </ul>        
		</div>		    
    </div>
    
	<div class="div_bloque bloque_publicidad" >    
    <a href="<?php echo $COMMON['url_publicar'];?>"><img src="<?php echo $SERVER['BASE'].THEME_PATH;?>img/imagen_publicidad.gif" /></a>
    </div>        
</div>

<div class="div_fila div_fila_margen" >
	<div class="div_columna columna_categorias">
    	<div class="div_bloque categorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
        	<div class="div_barra">CATEGORIAS</div>
            <ul>
            <?php foreach($ITEMS['categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>    
            </ul>
        </div>
    	<div class="div_bloque filtros cuadro">
        	<div class="div_barra">Filtros de búsqueda 1</div>
            <ul>
            	<li></li>
            </ul>
        </div>
    	<div class="div_bloque filtros cuadro">
        	<div class="div_barra">Filtros de búsqueda 2</div>
            <ul>
            	<li></li>
            </ul>
        </div>                
    </div>
	<div class="div_columna columna_subcategorias_1">
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][4]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>         
        </div>
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][6]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>           
        </div>
                   
    </div>
	<div class="div_columna columna_subcategorias_2">
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][7]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>         
        </div>
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][0]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>          
        </div>         
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][3]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>           
        </div>
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][2]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>         
        </div>                           
    </div>
	<div class="div_columna columna_subcategorias_3 bloque_cuadro_2">
    	<div class="div_bloque subcategorias cuadro">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][1]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>           
        </div>
    	<div class="div_bloque subcategorias cuadro bloque_cuadro_2">
        	<span class="arriba_izquierda"></span>
        	<span class="arriba_derecha"></span>
            <?php $ITEM=$ITEMS['categorias'][5]; ?>
        	<div class="div_barra"><a href="<?php echo $ITEM['link'];?>"><?php echo $ITEM['nombre'];?></a></div>
            <ul>
            <?php foreach($ITEM['sub_categorias'] as $item){ ?>
            	<li><a href="<?php echo $item['link'];?>"><?php echo $item['nombre'];?></a></li>
            <?php } ?>             
            </ul>         
        </div>            
    </div>            
</div>
<?php
	/*
	if(isset($_SESSION['publicar']['usuario_temp'])){
	
		delete("productos_items","where anunciante='".$_SESSION['publicar']['usuario_temp']."'",0);
		unset($_SESSION['publicar']);
	
	}
	*/
?>	