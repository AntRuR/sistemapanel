<?php //á

$THIS=$PARAMS['this'];

$ITEM=$OBJECT[$PARAMS['conector']];

$FB=$ITEM['FACEBOOK_LIKE'];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $ITEM['titulo']; ?></h1>
    </div>

    <article class="inner">
        
        <div class="content" >         

            <?php web_render_item($ITEM,$ITEM['item']); ?>
           
            <div class="div_fila"><?php web_render_facebook_like($FB); ?></div>                

            <?php if(($ITEM['enlace1']!='' and $ITEM['enlace1']!='null')or($ITEM['enlace1']!='' and $ITEM['enlace1']!='null')){ ?>

            <div><strong>Noticias Relacionadas</strong></div><?php } ?> 

            <?php if($ITEM['enlace1']!='' and $ITEM['enlace1']!='null'){ ?><a class="enlace" href="<?php echo $ITEM['enlace1'];?>"><?php 

            echo $ITEM['tituloenlace1'];?></a><?php } ?>

            <?php if($ITEM['enlace2']!='' and $ITEM['enlace2']!='null'){ ?><a class="enlace" href="<?php echo $ITEM['enlace2'];?>"><?php 

            echo $ITEM['tituloenlace2'];?></a><?php } ?>   

        </div>

    </article>        

</section>