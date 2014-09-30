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

        
        <!--GRILLA-->

        <div class="listado_items">

        

            <div class="listado_item" >         

            

                <?php web_render_item($ITEM,$ITEM['item']); ?>


               
                <div class="div_fila"><?php web_render_facebook_like($FB); ?></div>                



                <?php if(($ITEM['enlace1']!='' and $ITEM['enlace1']!='null')or($ITEM['enlace1']!='' and $ITEM['enlace1']!='null')){ ?>

                <div><strong>Noticias Relacionadas</strong></div><?php } ?> 

                <?php if($ITEM['enlace1']!='' and $ITEM['enlace1']!='null'){ ?><a class="enlace" href="<?php echo $ITEM['enlace1'];?>"><?php 

                echo $ITEM['tituloenlace1'];?></a><?php } ?>

                <?php if($ITEM['enlace2']!='' and $ITEM['enlace2']!='null'){ ?><a class="enlace" href="<?php echo $ITEM['enlace2'];?>"><?php 

                echo $ITEM['tituloenlace2'];?></a><?php } ?>   

                



                <!--clear-->

                <div class="clean"></div>                       

                

            </div>

        

        </div>

        

        

    </article>        



</section>

<?php /*

<script>

    window.addEvent('domready', function() {

     

        ReMooz.assign('#listado_<?php echo $THIS;?> .listado_items .listado_item a.foto', {

            'origin': 'img',

            'shadow': 'onOpenEnd', // fx is faster because shadow appears after resize animation ( alue can be true, onOpenEnd )

            'resizeFactor': 1, // resize to maximum 80% of screen size

            'cutOut': false, // don't hide the original

            'opacityResize': 0.4, // opaque resize

//          'dragging': true, // disable dragging

            'centered': true // resize to center of the screen, not relative to the source element

        });

     

    });

</script>

*/