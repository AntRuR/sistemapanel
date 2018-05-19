<?php //á

$THIS=$PARAMS['this'];
$FORM=$OBJECT[$PARAMS['conector']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >

    <div class="header">
        <h1><?php echo $FORM['titulo']; ?></h1>
    </div>

    <article class="inner">
    
        <form method="post" name="<?php echo $FORM['nombre'];?>" class="ajax <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >                          
        <?php web_render_form($FORM); ?>                         
        </form>
            
    </article>

</section>    