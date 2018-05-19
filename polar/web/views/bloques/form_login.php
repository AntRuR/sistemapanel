<?php //á

$THIS=$PARAMS['this'];
$FORM=$OBJECT[$PARAMS['conector']];

?>
<div class="<?php echo $PARAMS['classStyle'] ?> form_recomendar" > 

    <div class="inner" >
    
        <form method="post" name="<?php echo $FORM['nombre'];?>" class="noajax recomendar <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >                          
        <?php web_render_form($FORM); ?>                         
        </form>
    
    </div>
            
</div>    