<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['this']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >


    <div class="header">
        <h1><?php echo $ITEM['titulo']; ?></h1>
    </div>

         

    <article class="inner">
		
			<?php if($ITEM['foto']!=''){ ?>
            <div style="margin-bottom:10px;float:left;"><img  <?php echo $ITEM['get_atributos']; ?> class="margen_der" /></div>
            <?php } ?>
            
            <?php echo $ITEM['texto']; ?>   
        
        </div>
        
    </article>
 
</section> 