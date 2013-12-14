<?php //á
//prin($FORMULARIO['contactenos']);
?>
       
    	<div class="div_barra">INGRESAR</div>
		<div class="div_contenido">
        
            <!--FORM INICIO-->
            <?php $FORM=$FORMULARIO['login']; ?>
            <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios" action="<?php echo $FORM['action'];?>" >
            
            <?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
            
            <div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
            
            <?php
            unset($_SESSION[$FORM['nombre'].'_mensaje']); 
            unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
            
            } else {
            
            ?>                    
            <div id="<?php echo $FORM['nombre'];?>_form_body">
			<?php web_render_form($FORM); ?>        
                 
            </div>                   
			
			<?php web_render_form_javascript($FORM); ?>        
            
            <?php } ?>
            </form>
            <!--FORM FIN--> 
                            
        </div>
    