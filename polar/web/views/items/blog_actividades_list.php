<?php //á

$THIS=$PARAMS['this'];

$ITEMS=$OBJECT[$PARAMS['this']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEMS['titulo']; ?></h1>
    </div>

    <article class="inner">
        
        <div class="row">
        <?php web_render_combo($ITEMS['combo']); ?>
        </div>
                
		<?php  
        if(sizeof($ITEMS['filas'])==0){ ?><p class="vacio"><?php echo $ITEMS['vacio']; ?></p><?php } else {
            ?>
            <ul class="listado_items list">   
            <?php foreach($ITEMS['filas'] as $item){  ?>                                             
                <li class="listado_item">
                    <?php web_render_item($item,$item['esquema']); ?>								                 
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