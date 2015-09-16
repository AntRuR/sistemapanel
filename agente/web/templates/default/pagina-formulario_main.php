<?php //á
?>
<div id="div_formulario_main">

         <?php
		switch($_GET['tab']){	
		
		
		case "boletin":
		?>

        	<h1 class="titulo">Boletín Electrónico</h1>   
            <div class="valor">            
            
                <!--FORM INICIO-->
                <?php $FORM=$FORMULARIO['boletin']; ?>                
                <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >
                    
				<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                
                <div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                
                <?php
                unset($_SESSION[$FORM['nombre'].'_mensaje']); 
                unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
                
                } else {
                
                ?>                    
                <fieldset id="<?php echo $FORM['nombre'];?>_form_body">
                <legend>Incribase en nuestro boletín electrónico</legend>
    
                <?php 
                foreach($FORM['campos'] as $field){ 
                ?>
                <p class="camps">
                
                <label for="<?php echo $FORM['nombre']."_".$field['campo'];?>"><?php echo $field['label'];?>
                <?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?>
                :</label>
                <?php switch($field['tipo']){ 
                case "input_text": ?>
                <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" value="<?php echo $field['value'];?>" />
                <?php break; 
                case "textarea": ?>
                <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" ><?php echo $field['value'];?></textarea>
                <?php break;
                } ?>
                </p>
                
                <?php 
                } 
                ?>
                <p class="submit">
                <label>&nbsp;</label>
                <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                <input id="<?php echo $FORM['nombre'];?>_reset" type="reset" value="Cancelar"  />
                </p>
                </fieldset>                   
                <script type="text/javascript">
                    window.addEvent('domready', function(){
                        new FormCheck('formulario_<?php echo $FORM['nombre'];?>',{
                            <?php if($FORM['ajax']==1){ ?>
                            submitByAjax:true
                            ,onAjaxRequest:function() { 
                                $('<?php echo $FORM['nombre'];?>_submit').value="Enviando...";
                                $('<?php echo $FORM['nombre'];?>_submit').disabled=true; 
                            }
                            ,onAjaxSuccess:function(ee) { 

                                $('<?php echo $FORM['nombre'];?>_submit').value="Enviar";
                                $('<?php echo $FORM['nombre'];?>_submit').disabled=false; 
                                alert('Enviado');
    
                                var json=JSON.decode(ee,true);
                                new Element('div', {
                                    'class': 'mensaje mensaje_'+json.t,
                                    'html': json.m
                                }).inject($('<?php echo $FORM['nombre'];?>_form_body'), 'before');
                                $0('<?php echo $FORM['nombre'];?>_form_body');
                                
                            }
                            <?php } ?>
                        });
                    });
                </script>  
                <?php } ?>
                </form>
                <!--FORM FIN--> 
            
            </div> 
        <?php
		break;
		
				
		case "contacto": 
		?>
        	<h1 class="titulo">Contacto</h1>   
            <div class="texto">
                <!--FORM INICIO-->
                <?php $FORM=$FORMULARIO['contacto']; ?>
                <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >                
    
				<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                
                <div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                
                <?php
                unset($_SESSION[$FORM['nombre'].'_mensaje']); 
                unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
                
                } else {
                
                ?>                    
                <fieldset id="<?php echo $FORM['nombre'];?>_form_body">
                <legend>Incribase en nuestro boletín electrónico</legend>
    
                <?php 
                foreach($FORM['campos'] as $field){ 
                ?>
                <p class="camps">
                
                <label for="<?php echo $FORM['nombre']."_".$field['campo'];?>"><?php echo $field['label'];?>
                <?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?>
                :</label>
                <?php switch($field['tipo']){ 
                case "input_text": ?>
                <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" value="<?php echo $field['value'];?>" />
                <?php break; 
                case "textarea": ?>
                <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" ><?php echo $field['value'];?></textarea>
                <?php break;
                } ?>
                </p>
                
                <?php 
                } 
                ?>
                <p class="submit">
                <label>&nbsp;</label>
                <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                <input id="<?php echo $FORM['nombre'];?>_reset" type="reset" value="Cancelar"  />
                </p>
                </fieldset>                   
                <script type="text/javascript">
                    window.addEvent('domready', function(){
                        new FormCheck('formulario_<?php echo $FORM['nombre'];?>',{
                            <?php if($FORM['ajax']==1){ ?>
                            submitByAjax:true
                            ,onAjaxRequest:function() { 
                                $('<?php echo $FORM['nombre'];?>_submit').value="Enviando...";
                                $('<?php echo $FORM['nombre'];?>_submit').disabled=true; 
                            }
                            ,onAjaxSuccess:function(ee) { 
    
                                var json=JSON.decode(ee,true);
                                new Element('div', {
                                    'class': 'mensaje mensaje_'+json.t,
                                    'html': json.m
                                }).inject($('<?php echo $FORM['nombre'];?>_form_body'), 'before');
                                $0('<?php echo $FORM['nombre'];?>_form_body');
                                
                            }
                            <?php } ?>
                        });
                    });
                </script>  
                <?php } ?>
                </form>
                <!--FORM FIN-->             
            </div> 
        <?php
		break;		
		}
		?>

</div>