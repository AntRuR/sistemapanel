<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['this']];
?>        
<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEMS['nombre']; ?></h1>
    </div>

    <article class="inner">
                                
        <?php  
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
            ?>
            <ul class="listado_items grid image-gallery">   
            <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                <li class="listado_item">
                     <?php echo web_render_item($item,$item['esquema']); ?>
                </li>							   

            <?php } ?>
            </ul> 
            <?php 
            }
        ?>    
	</article>
    
    <div class="footer">
        <ul class="pagination">
        <?php echo $ITEMS['anterior']." ".$ITEMS['tren']." ".$ITEMS['siguiente']; ?>
        </ul>
    </div>

</section> 