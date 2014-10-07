<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$THIS];

?>

<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEM['titulo']; ?></h1>
    </div>
    <article class="inner">

		<div class="content">

        <?php if($ITEM['foto']!='') echo '<img '.$ITEM['get_atributos'].' />'; ?>
        
        <?php echo $ITEM['texto']; ?>        
    
    	</div>

    </article>

</section>