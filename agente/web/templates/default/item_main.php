<?php //á
?>
<div id="div_item_main"> 
                    
             <?php /* ?>       
            <ul class="tabs">
            
            	<li class="tab selected" id="tab_1"><h3><a href="#" rel="nofollow" onclick="javascript:show_tab(1); return false;">Descripción del producto</a></h3></li>
                <li class="tab" id="tab_2"><h3><a href="#" rel="nofollow" onclick="javascript:show_tab(2);return false;">Detalles del producto</a></h3></li>
                
            </ul>
            <?php */ ?> 
                        
            <ul class="area_tabs"> 
            
                <li id="area_tab_1" class="area_tab">
                
                    <!--estado-->
                    <?php /* if($ITEM['datos']['estado']){ ?><span class="estado">Vendido</span><?php } */ ?>                
                	<!--grupo-->
                	<p><strong><?php echo $ITEM['datos']['grupo'];?> en <?php echo $ITEM['datos']['tipo'];?></strong></p>
                    <!--titulo-->
					<h1 class="titulo"><?php echo $ITEM['datos']['nombre'];?></h1>
                    <!--codigo-->
					<span class="codigo"><!-- Venta --> (<?php echo $ITEM['datos']['codigo'];?>)</span>                    
                    <!--geo-localizacion-->
                    <p>
                    Departamento: <strong><a href="<?php echo procesar_url("index.php?modulo=items&tab=productos&departamento=".$ITEM['datos']['departamento']);?>"><?php echo ucfirst($ITEM['datos']['departamento']);?></a></strong>,
                    Provincia: <strong><a href="<?php echo procesar_url("index.php?modulo=items&tab=productos&departamento=".$ITEM['datos']['departamento']."&provincia=".$ITEM['datos']['provincia']);?>"><?php echo ucfirst($ITEM['datos']['provincia']);?></a></strong>,
                    Distrito: <strong><a href="<?php echo procesar_url("index.php?modulo=items&tab=productos&departamento=".$ITEM['datos']['departamento']."&provincia=".$ITEM['datos']['provincia']."&distrito=".$ITEM['datos']['distrito']);?>"><?php echo ucfirst($ITEM['datos']['distrito']);?></a></strong>
                    </p>
                    <!--direccion-->
                    <h3>
					Dirección: <span class="direccion"><?php echo $ITEM['datos']['direccion'];?></span>
                    </h3>
                    <!--descripcion-->
                    <p class="descripcion"><?php echo $ITEM['datos']['descripcion'];?></p> 
                    <!--area-->
					<p class="area"><?php echo $ITEM['datos']['area'];?></p>                                        
					<p class="precio"><?php echo $ITEM['datos']['precio'];?></p>                                        

					<?php 
					//prin($ITEM['datos']['contacto']);
					if(is_array($ITEM['datos']['contacto'])){ ?>
                    
                    <div class="linea"></div>
                    
                    <a name="contactenos" class="consultanos">CONSULTANOS.</a>
                    
                    <!--FORM INICIO-->
                    <?php $FORM=$FORMULARIO['consulta']; ?>                    
                    <form id="formulario_<?php echo $FORM['nombre'];?>" method="post" name="<?php echo $FORM['nombre'];?>" class="formularios <?php echo $FORM['nombre'];?>" action="<?php echo $FORM['action'];?>" >
                    
					<?php if($_SESSION[$FORM['nombre'].'_mensaje']!=''){ ?>
                    
					<div class="mensaje mensaje_<?php echo $_SESSION[$FORM['nombre'].'_tipo_mensaje'];?>"><?php echo $_SESSION[$FORM['nombre'].'_mensaje']; ?></div>
                    
                    <?php
                 	unset($_SESSION[$FORM['nombre'].'_mensaje']); 
					unset($_SESSION[$FORM['nombre'].'_tipo_mensaje']);
					
					} else {
					
					?>                    
                    <fieldset id="<?php echo $FORM['nombre'];?>_form_body">
                    <legend>Déjenos su consulta en breve nos estaremos comunicando con usted.</legend>

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
                    
                    <?php } ?> 
                                                                                	
                </li>
                
                <li id="area_tab_2" class="area_tab" style="display:none;">
                                        
                </li>            
                
            </ul>
            
            <?php /**/ ?>
            
            <div id="area_foto">
            
            <?php include("item_bloque_fotos.php"); ?>            
            
            </div>

        
</div>

<script>

function show_tab(tab){

	$$(".tabs li").removeClass('selected');
	$("tab_"+tab).addClass('selected');
	$$(".area_tab").setStyles({'display':'none'});
	$("area_tab_"+tab).setStyles({'display':''});
	
}

</script>