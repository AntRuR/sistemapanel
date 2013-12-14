<?php //á
//prin($FORMULARIO['recomendar']);
?>
<div id="div_bloque_recomendar" class="div_bloque">
                
    <div class="titulo">
    	<!--lados-->
		<span class='titulo_izq'></span>
		<span class='titulo_der'></span>    
    	<h3>Recomendar a un amigo</h3>    
	</div>    
    <div class="contenido">
    
                    <!--FORM INICIO-->
                    <?php $FORM=$FORMULARIO['recomendar']; ?>
                    <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios" action="<?php echo $FORM['action'];?>" >
                    
					<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                    
					<div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                    
                    <?php
                 	unset($_SESSION[$FORM['nombre'].'_mensaje']); 
					unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
					
					} else {
					
					?>                    
                    <div id="<?php echo $FORM['nombre'];?>_form_body">

                    <?php 
                    foreach($FORM['campos'] as $field){ 
                    if($field['tipo']!='input_hidden'){ 
						echo '<p class="camps '.$FORM['nombre'].'_'.$field['campo'].'">'; ?>
						<?php if($field['label']!=''){ ?>
						<label for="<?php echo $FORM['nombre']."_".$field['campo'];?>"><?php echo $field['label'];?>
						<?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?>
						:</label>
						<?php } ?>
                    <?php } ?>
                    <?php switch($field['tipo']){ 
                    case "input_hidden": ?>
                    <input type="hidden" name="<?php echo $field['campo'];?>" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" value="<?php echo $field['value'];?>" />
                    <?php break; 					
                    case "input_text": ?>
                    <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" value="<?php echo $field['value'];?>" />
                    <?php break; 
                    case "textarea": ?>
                    <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" ><?php echo $field['value'];?></textarea>
                    <?php break;
                    } 
					if($field['tipo']!='input_hidden'){ echo "</p>"; }
                    ?>
                    
                    <?php 
                    } 
                    ?>
                    <p class="submit">
                    <!--<label class='name'>&nbsp;</label>-->
                    <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                    <!--<input type="reset" value="Cancelar"  />-->
                    </p>                    
                    </div>                   
					<script type="text/javascript">
                        window.addEvent('domready', function(){
							$$('.autoinput').each(function(ee) { 
								ee.title=ee.value;
								ee.addEvent('blur',function(event){ if(ee.value=='') ee.value=ee.title; });
								ee.addEvent('focus',function(event){ if(ee.value==ee.title) ee.value=''; });	
							});						
							$('formulario_<?php echo $FORM['nombre'];?>').addEvent('submit', function(event){
								$$('#formulario_<?php echo $FORM['nombre'];?> .autoinput').each(function(ee) { 
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
								,onAjaxSuccess:function(ee){

									$('formulario_<?php echo $FORM['nombre'];?>').reset();
									$('<?php echo $FORM['nombre'];?>_submit').value="enviar";
									$('<?php echo $FORM['nombre'];?>_submit').disabled=false; 
									var json=JSON.decode(ee,true);
									new Element('div', {
										'class': 'mensaje mensaje_'+json.t,
										'html': json.m,
										'id': 'mensaje_'+json.n
									}).inject($('<?php echo $FORM['nombre'];?>_form_body'), 'before');
									$0('<?php echo $FORM['nombre'];?>_form_body');
									
									setTimeout("$0('mensaje_<?php echo $FORM['nombre'];?>');$1('<?php echo $FORM['nombre'];?>_form_body');",5000);
									
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