<?php //á
//prin($FORMULARIO['recomendar']);
?>
<div id="div_bloque_recomendar" >
                
    <h3 class="titulo">RECOMENDAR A UN AMIGO</h3>    
    
    <div class="contenido">
    
                    <!--FORM INICIO-->
                    <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >
                    
                    <?php $FORM=$FORMULARIO['recomendar']; ?>

					<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                    
					<div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                    
                    <?php
                 	unset($_SESSION[$FORM['nombre'].'_mensaje']); 
					unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
					
					} else {
					
					?>                    
                    <fieldset id="<?php echo $FORM['nombre'];?>_form_body">

                    <?php 
                    foreach($FORM['campos'] as $field){ 
                    ?>
                    <p class="camps">
                    <!--
                    <?php if($field['label']!=''){ ?>
                    <label for="<?php echo $FORM['nombre']."_".$field['campo'];?>"><?php echo $field['label'];?>
                    <?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?>
                    :</label>
                    <?php } ?>
                    -->
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
                    <!--<label>&nbsp;</label>-->
                    <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                    <!--<input type="reset" value="Cancelar"  />-->
                    </p>                    
                    </fieldset>                   
					<script type="text/javascript">
                        window.addEvent('domready', function(){
							$$('.autoinput').each(function(ee) { 
								ee.title=ee.value;
								ee.addEvent('blur',function(event){ if(ee.value=='') ee.value=ee.title; });
								ee.addEvent('focus',function(event){ if(ee.value==ee.title) ee.value=''; });	
							});						
							$('formulario_<?php echo $FORM['nombre'];?>').addEvent('submit', function(event){
								$$('.autoinput').each(function(ee) { 
									if(ee.title==ee.value){ ee.value=''; }
								});
							});
							new FormCheck('formulario_<?php echo $FORM['nombre'];?>',{
								onSubmit:function() { }       
								<?php if($FORM['ajax']==1){ ?>
								,submitByAjax:true
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
        
</div>