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
        
        <?php echo $ITEM['texto'];?>        
    
			<?php if($_GET['page']=='servicio-post-venta'){ ?>
			<a class="btn btn-primary btn-sm pull-right" href="<?php echo $COMMON['url_contactenos'];?>">CONTACTO</a>
			<?php } ?>
    	</div>

    </article>

</section>