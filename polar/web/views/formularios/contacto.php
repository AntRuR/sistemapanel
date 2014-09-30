<?php //á

$THIS=$PARAMS['this'];
$FORM=$FORMULARIO[$PARAMS['conector']];

?>
<section class="<?php echo $PARAMS['classStyle']; ?>" >


    <div class="header">
        <h1><?php echo $FORM['titulo']; ?></h1>
    </div>

         

    <article class="inner">
        
            <!--FORM INICIO-->
            <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios" action="<?php echo $FORM['action'];?>" >                          
            <div id="<?php echo $FORM['nombre'];?>_form_body" class="form_body">        
            <?php web_render_form($FORM); ?>                         
            </div>                               
            <?php web_render_form_javascript($FORM); ?>                    
            </form>
            <!--FORM FIN--> 
        
            
    </article>

</section>    