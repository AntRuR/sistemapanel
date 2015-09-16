<?php //á

$THIS=$PARAMS['this'];
$FORM=$OBJECT[$PARAMS['conector']];
// prin($FORM);

?>
<div class="<?php echo $PARAMS['classStyle'] ?>" > 

    <div class="inner" >
    
        <form method="post" name="<?php echo $FORM['nombre'];?>" class="<?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >                          
        <?php web_render_form($FORM); ?>                         
        </form>
    
    </div>
            
</div>    