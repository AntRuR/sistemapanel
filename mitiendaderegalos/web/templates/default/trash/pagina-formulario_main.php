<?php //á
?>
<div id="div_formulario_main"  class="div_main" >

         <?php
		switch($_GET['tab']){	
		
		
		case "boletin":
		?>

            <!--BARRA DEL LISTADO-->
                
            <div class="titulo">
                <!--lados-->
                <span class='titulo_izq'></span>
                <span class='titulo_der'></span>
                <h1>Contáctenos</h1>
            </div>
            &nbsp;            
   			<div class="div_barra">&nbsp;</div>
                
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
                <div id="<?php echo $FORM['nombre'];?>_form_body">
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
                <label class='name'>&nbsp;</label>
                <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                <input id="<?php echo $FORM['nombre'];?>_reset" type="reset" value="Cancelar"  />
                </p>
                </div>                   
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

								$('formulario_<?php echo $FORM['nombre'];?>').reset();
								$('<?php echo $FORM['nombre'];?>_submit').value="Enviar";
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
        <?php
		break;
		
		case "carrito":
		?>

            <!--BARRA DEL LISTADO-->
                
            <div class="titulo">
                <!--lados-->
                <span class='titulo_izq'></span>
                <span class='titulo_der'></span>
                <h1>Datos de pedidos</h1>
            </div>
            &nbsp;            
   			<div class="div_barra">&nbsp;</div>
                
            <div class="valor">            
            
                <!--FORM INICIO-->
                <?php $FORM=$FORMULARIO['carrito']; ?>                
                <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >
                    
				<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                
                <div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                
                <?php
                unset($_SESSION[$FORM['nombre'].'_mensaje']); 
                unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
                
                } else {
                
                ?>                    
                <div id="<?php echo $FORM['nombre'];?>_form_body">
                <legend>Información para Orden de Pedido</legend>
    
                <?php 
                foreach($FORM['campos'] as $field){ 
                ?>
                <p class="camps">
                
                <label <?php 
				echo (in_array($field['tipo'],array("textarea_hidden","input_hidden")))?'style="display:none;"':''
				?> for="<?php echo $FORM['nombre']."_".$field['campo'];?>"><?php echo $field['label'];?>
                <?php echo (!(strpos($field['validacion'],"required")===false))?"*":""; ?>
                :</label>
                <?php switch($field['tipo']){ 
                case "input_text": ?>
                <input type="text" name="<?php echo $field['campo'];?>" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" value="<?php echo $field['value'];?>" />
                <?php break; 
                case "textarea": ?>
                <textarea name="<?php echo $field['campo'];?>" cols="30" rows="7" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" ><?php echo $field['value'];?></textarea>
                <?php break;
                case "textarea_hidden": ?>
                <textarea name="<?php echo $field['campo'];?>" style="display:none;" id="<?php echo $FORM['nombre']."_".$field['campo'];?>" class="<?php echo $field['validacion'];?>" ><?php echo $field['value'];?></textarea>
                <?php break;				
                } ?>
                </p>
                
                <?php 
                } 
                ?>
                <p class="submit">
                <label class='name'>&nbsp;</label>
                <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                <input id="<?php echo $FORM['nombre'];?>_button_1" type="button" onclick="javascript:location.href='<?php echo procesar_url('index.php?modulo=pagina-app&tab=carrito'); ?>';" value="Modificar Carrito"  />
                </p>
                
                </div>                   

                
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

								$('formulario_<?php echo $FORM['nombre'];?>').reset();
								$('<?php echo $FORM['nombre'];?>_submit').value="Enviar";
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
                
                <div id="div_carrito"></div>    
                <script type="text/javascript">
                //window.addEvent('domready', function() {
                render_carrito(<?php echo json_encode($_SESSION['carrito']);?>,{main:'1',controles:'0'});
                //});
                </script>   
                <?php /* */ ?>
                                
                </form>
                <!--FORM FIN--> 

            
            </div> 
        <?php
		break;
				
		case "contacto": 
		?>
            
			<?php $FORM=$FORMULARIO['contacto']; ?>
			<?php $ITEMS=$LISTADO['productos']; ?>
            <div class="titulo">
                <!--lados-->
                <span class='titulo_izq'></span>
                <span class='titulo_der'></span>
                <h1><?php echo $FORM['nombre'];?></h1>
                
            </div>
                <!--select-->
                <span id="listado_seleccionador" style="float:right;" >
                    <label>Nuestros Productos</label>
                    <select onchange="if(this.value!=''){location.href=this.value;}">
                        <option></option>
                        <?php foreach($ITEMS['categorias'] as $item){ ?>
                        <option <?php echo $item['selected']; ?> value='<?php echo $item['link']; ?>'><?php echo $item['nombre']; ?></option>
                        <?php } ?>
                    </select>
                    <script>
                    var OBJ_CATEGORIAS=<?php echo json_encode($ITEMS['categorias']); ?>;
                    </script>
                </span>                
            
            &nbsp;
            <div class="div_barra" >&nbsp;</div>
	            
            <div class="texto">
                <!--FORM INICIO-->
                <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >                

            	<?php echo $FORM['texto'];?>
    
				<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                
                <div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                
                <?php
                unset($_SESSION[$FORM['nombre'].'_mensaje']); 
                unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
                
                } else {
                
                ?>                    
                <div id="<?php echo $FORM['nombre'];?>_form_body">
                <legend><?php echo $FORM['legend'];?></legend>
    
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
                <label class='name'>&nbsp;</label>
                <input id="<?php echo $FORM['nombre'];?>_submit" type="submit" value="Enviar"  />
                <input id="<?php echo $FORM['nombre'];?>_reset" type="reset" value="Cancelar"  />
                </p>
                </div>                   
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
							
								$('formulario_<?php echo $FORM['nombre'];?>').reset();							
								$('<?php echo $FORM['nombre'];?>_submit').value="Enviar";
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
        <?php
		break;		
		}
		?>

</div>