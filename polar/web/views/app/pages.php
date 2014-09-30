<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$THIS];

?>

<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEM['titulo']; ?></h1>
    </div>
    <article class="inner">

        <?php if($ITEM['foto']!=''){ ?>
        <img  <?php echo $ITEM['get_atributos']; ?> />
        <?php } ?>
        <?php echo $ITEM['texto']; ?>        
    
    </article>

</section>