<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['this']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEMS['titulo']; ?></h1>
    </div>

    <article class="inner">
        
        <div class="div_fila">
        <?php web_render_combo($ITEMS['combo']); ?>
        </div>

	    <?php  
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
            ?>
            <ul  class="listado_items list">   
            <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                <li class="listado_item">
                     <?php web_render_item($item,$item['esquema']); ?>								                  
                </li>							   
            <?php } ?>
            </ul> 
            <?php 
            }
        ?>
        <div class="barra_abajo">
        	<div class="listado_paginacion">
        	<?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
            <!--<a class="ver_todos">Ver todos los productos de esta categoría</a>-->
            </div>
       </div>  

    </article>

</section>