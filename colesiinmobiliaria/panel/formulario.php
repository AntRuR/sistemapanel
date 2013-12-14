<script>
function render_son(hijo,idparent,relo,TipoHijo){
var reloa='';
<?php if($SERVER['browser']=='IE7' or $SERVER['browser']=='IE8' or $SERVER['browser']=='IE9'){ ?>
reloa = (relo)?"&rt="+$random(1,999):"";
<?php } ?>
$('tempar_'+hijo).value=$('tempar_'+hijo+'_pre').value+"|"+idparent;
$('tempar_'+hijo+'_iframe').innerHTML="<iframe frameborder='0' src='custom/"+hijo+".php?block=form"+reloa+"&tipo="+TipoHijo+"&id="+idparent+"' ></iframe>";
}
</script>
        <ul class="formulario" style="position:relative;">

          	<div class="saving"  id="<?php echo $tbf?>_load" style="display:none;top:-30px;left:0px;" >cargando...</div>
        
        	<?php if(strpos($_SERVER['SCRIPT_NAME'], "login.php")===false){ ?>
        	<h1 style=" display:none;" class="titulo_formulario" 
            id="titulo_editar_<?php echo $datos_tabla['me']?>" >
            
			<a style=" float:right; margin-right:18px; font-size:12px; " href="#" rel="nofollow" onclick="javascript:<?php echo $tbf?>_ajax('editar_completo_cancelar','');return false;" >Cancelar Editar</a>
            
			<a style=" float:right; margin-right:18px; font-size:12px; " href="#" rel="nofollow" 
onclick="javascript:<?php echo $tbf?>_ajax('guardar_completo',$v('<?php echo $tb?>_id_guardar'));return false;" >Guardar <?php echo ucfirst($datos_tabla['nombre_singular']);?></a>            
            
            Editar <?php echo ucfirst($datos_tabla['nombre_singular']);?>
            
            </h1>
            
            <h1 class="titulo_formulario" 
            id="titulo_crear_<?php echo $datos_tabla['me']?>">
            Crear <?php echo ucfirst($datos_tabla['nombre_singular']);?>         
            </h1>
            <?php } ?>
            
            <?php 
			$DIVISON[2]='width:45%;margin-right:1%;';
			$DIVISON[3]='width:30%;margin-right:1%;';
			$DIVISON[4]='width:18%;margin-right:1%;';
			foreach($tbcampos as $tbcampA){
			
				switch($tbcampA['derecha']){
				case "1":$Derecha="linea_derecha_inicio";break;
				case "2":$Derecha="linea_derecha";break;
				case "3":$Derecha="linea_derecha_espacio";break;
				default :$Derecha=""; break;
				}
				
				if($_GET['block']=='form' and $_GET['tipo']!='listado'){ $Derecha="linea_derecha_50"; }
				
				echo ($Derecha=='linea_derecha_inicio')?"<div class='linea_form' style='clear:left;float:left;width:100%;height:1px;font-size:1px;'>su derecho</div>":"";
				
                switch($tbcampA['tipo']){ 
                    case "inp": 
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>" >
                            
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>" title="Editar Campo">C</a><?php }?>   
                            
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>
                            <?php
							$maxlength=($tbcampA['size']!='')?$tbcampA['size']:'80';
							$stylewidth=($tbcampA['size']!='')?'width:'. ( ( ($tbcampA['size']>100)?100*7:$tbcampA['size']*7 ) ).'px; ':'';
							?>
                            <input type="text" id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" autocomplete="off" 
                            maxlength="<?php echo $maxlength;?>" 
                            style=" <?php 
							echo ($tbcampA['style'])?$tbcampA['style']:'';							
							echo ($tbcampA['unique'])?'border:1px solid #666666;':'';
							echo $stylewidth;
							?> "
                            value="<?php echo $tbcampA['default']?>"
                            />
                        </li>
                        <?php 
                    break; 
                    case "pas": 
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" style="height:40px;" >
							<?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>                            
							<?php echo $tbcampA['label']?>
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>
                            <?php
							$maxlength=($tbcampA['size']!='')?$tbcampA['size']:'80';
							$stylewidth=($tbcampA['size']!='')?' style=" width:'. ( $tbcampA['size']*7).'px" ':'';
							?>                  
                            <div><input type="password" id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" autocomplete="off"  
                            maxlength="<?php echo $maxlength;?>" <?php echo $stylewidth;?>                             
                            /></div>
                            <div><input type="password" id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_2" class="form_input" autocomplete="off"  
                            maxlength="<?php echo $maxlength;?>" <?php echo $stylewidth;?>                                                         
                            /></div>
                            
                        </li>
                        <?php 
                    break;
                    case "paslogin": 
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" style="height:40px;" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>
                  
                            <div><input type="password" id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" autocomplete="off" 
                            onkeyup=" if(event.keyCode=='13'){ <?php echo $tbf?>_ajax('login',''); } " /></div>
                            
                        </li>
                        <?php 
                    break;					 
                    case "fch":
                        ?>
                        
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>">
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>
                            
                  			<span id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_span"></span>
                            <script>
							
								function input_date_<?php echo $tbcampA['campo']?>(id_input,id_span){
									var meses = new Array();
										meses[1]="Enero";
										meses[2]="Febrero";
										meses[3]="Marzo";
										meses[4]="Abril";
										meses[5]="Mayo";
										meses[6]="Junio";
										meses[7]="Julio";
										meses[8]="Agosto";
										meses[9]="Setiembre";
										meses[10]="Octubre";
										meses[11]="Noviembre";
										meses[12]="Diciembre";
										
var html = "<select id='"+id_input+"_d' class='form_input_fecha' onchange='<?php echo $tb?>_<?php echo $tbcampA['campo']?>_change(\""+id_input+"\")' style='width:50px; margin-right:1px;'>";
										html+= "<option></option>";
										for(var i=1; i<=31;i++){
										html+="<option value='"+ ( (i<10)?"0"+i:i) +"'>"+i+"</option>";
										}
										html+= "</select>";
										html+= "<select id='"+id_input+"_m' class='form_input_fecha' onchange='<?php echo $tb?>_<?php echo $tbcampA['campo']?>_change(\""+id_input+"\")' style='width:67px; margin-right:1px;'>";
										html+= "<option></option>";
										for(var i=1; i<=12;i++){
										html+="<option value='"+ ( (i<10)?"0"+i:i) +"'>"+meses[i]+"</option>";
										}										
										html+= "</select>";
										html+= "<select id='"+id_input+"_a' class='form_input_fecha' onchange='<?php echo $tb?>_<?php echo $tbcampA['campo']?>_change(\""+id_input+"\")' style='width:64px; margin-right:1px;'>";
										html+= "<option></option>";
										<?php
										if($tbcampA['rango']){
										list($uuno,$ddos)=explode(",",$tbcampA['rango']);
										$FromYear = date("Y",strtotime($uuno));
										$ToYear = date("Y",strtotime($ddos));										
										} else {
										$FromYear = date("Y")-99;
										$ToYear = date("Y")+1;
										}
										?>
										for(var i=<?php echo $FromYear;?>; i<=<?php echo $ToYear;?>;i++){
										html+="<option value='"+i+"'>"+i+"</option>";
										}										
										html+= "</select>";
										html+= "<input id='"+id_input+"' type='hidden' />";
													
										$(id_span).innerHTML=html;

										
								}
								
								window.addEvent('domready',function(){
                            	input_date_<?php echo $tbcampA['campo']?>('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>','<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_span','');								
								<?php if(trim($tbcampA['default'])!=''){ 
								if(trim($tbcampA['default'])=="now()"){ $tbcampA['default']=date("Y-m-d H:i:s"); }
								if(trim($tbcampA['default'])=="tomorrow()"){ $tbcampA['default']=date("Y-m-d H:i:s",strtotime("+1 day")); }
								?>
								$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_d').value='<?php echo substr($tbcampA['default'],8,2);?>';
								$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_m').value='<?php echo substr($tbcampA['default'],5,2);?>';
								$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_a').value='<?php echo substr($tbcampA['default'],0,4);?>';								
								$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value='<?php echo $tbcampA['default']?>';
								<?php } ?>
								});
								
								function <?php echo $tb?>_<?php echo $tbcampA['campo']?>_change(input){
									var aa=$(input+'_a').value;
									var mm=$(input+'_m').value;
									var dd=$(input+'_d').value;
									$(input).value= (aa==''||mm==''||dd=='')?'':aa+'-'+mm+'-'+dd+' 00:00:00';
								}
								
                            </script>
                            
                        </li>
                        <?php 
                    break; 										
                    case "html": case "txt": case "yot":
						if($tbcampA['tipo']=='html'){
                        ?>
						<script>
                        var mooeditable_<?php echo $tbcampA['campo']?>;
                        </script>                        
                        <?php } ?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>                                                       
                            <textarea  id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" 
                            style=" <?php if($tbcampA['tipo']=='yot'){ echo 'width:300px;height:100px;'; } echo ($tbcampA['style']!='')?'  '. str_replace(",",";",$tbcampA['style']) .' ':'';?>" 
                            autocomplete="off" rows="6" 
                            ><?php echo ($tbcampA['tipo']=='html')?(($tbcampA['default']=='')?'<p></p>':$tbcampA['default']):$tbcampA['default'];?></textarea>
                        </li>
                        <?php 
						if($tbcampA['tipo']=='html'){
						?>
						<style type="text/css"> 
						#<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>-mooeditable-container{ float:left; }
                        </style>                        
                        <script>
						window.addEvent('domready', function(){
							//$('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').setStyles({'float':'left'});
/*							mooeditable_<?php echo $tbcampA['campo']?> = $('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').mooEditable({
								actions: 'bold italic underline | formatBlock justifyleft justifyright justifycenter justifyfull | insertunorderedlist insertorderedlist indent outdent | undo redo removeformat | createlink unlink | toggleview',
								externalCSS: 'css/Editable.css',
								baseCSS: 'html{ height: 100%; cursor: text; } body{ font-family: arial; font-size:12px; }'								
							});
*/
							mooeditable_<?php echo $tbcampA['campo']?> = $('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').mooEditable({
								actions: 'bold italic underline | formatBlock | insertunorderedlist insertorderedlist | undo redo removeformat | createlink unlink | indent outdent | toggleview',
								externalCSS: 'css/Editable.css',
								baseCSS: 'html{ height: 100%; cursor: text; } body{ font-family: calibri; font-size:12px; }'								
							});							

						});
						</script>
                        <?php
						}
                    break;
                    case "multicom":
						?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>                          
                            <div class="form_input" style="float:left; border:0; background:none;">
                            <?php foreach($opciones_select as $opcccion=>$opcion_select){ ?>
                            <div>
                            <strong><?php echo $opcion_select;?></strong>
                            <input type="checkbox"
                            id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_<?php echo $opcccion;?>"
                            name="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>"
                            value="<?php echo $opcccion;?>"
                            title="<?php echo $opcccion; ?>"
                            <?php echo ($tbcampA['default']=="$opcccion")?"checked":"";?>
                            onchange="if(this.checked){ $('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=this.value; } "  />
                            </div>
                            <?php } ?>
                            </div>                            
                        </li>                        
                        <?php
                    break;
                    case "com":
						
						if($tbcampA['radio']=='1' and is_array($tbcampA['opciones'])){							

                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>  
                            <?php
                                $opciones_select=array();
								$iti=(is_array($tbcampA['opciones']))?1:0;
                                $opciones_select=(is_array($tbcampA['opciones']))?$tbcampA['opciones']:explode(",",$tbcampA['opciones']);
                                ?>
                            <div class="form_input" style="float:left; border:0; background:none;">
                            <input  id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" type="hidden" />
                            <?php foreach($opciones_select as $opcccion=>$opcion_select){ ?>
                            <strong><?php echo $opcion_select;?></strong>
                            <input type="radio"
                            id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>_<?php echo $opcccion;?>"
                            name="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>"
                            value="<?php echo $opcccion;?>"
                            title="<?php echo $opcccion; ?>"
                            <?php echo ($tbcampA['default']=="$opcccion")?"checked":"";?>
                            onchange="if(this.checked){ $('<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>').value=this.value; } "  />
                            <?php } ?>
                            </div>                                                      
                        </li>
                        <?php 
						} else {
						?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php } ?></label>                            
                            <select <?php echo ($tbcampA['style']!='')?' style=" '. $tbcampA['style'].' " ':'';?> id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" >
                                <option selected="selected"></option>
                                <?php
                                $opciones_select=array();
								$iti=(is_array($tbcampA['opciones']))?1:0;
                                $opciones_select=(is_array($tbcampA['opciones']))?$tbcampA['opciones']:explode(",",$tbcampA['opciones']);
                                foreach($opciones_select as $opcccion=>$opcion_select){
								$vvvval=($iti)?fixEncoding($opcccion):fixEncoding($opcion_select);
                                ?>
                                <option value="<?php echo $vvvval;?>" 
								<?php echo ($vvvval==$tbcampA['default'])?"selected":"" ?> 
                                ><?php echo fixEncoding($opcion_select)?></option>
                                <?php
                                }
								?>
                            </select>
                        </li>                        
                        <?php
						}
                    break;												
                    case "hid":
						$GGET1=$_GET[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
						$GGET2=$_SESSION[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
						$GGET=($GGET1!='')?$GGET1:$GGET2;
						$ooop=explode("|",$tbcampA['opciones']);
						$oopciones=select($ooop['0'],$ooop['1'],procesar_dato($ooop['2']));
						if(	$tbcampA['combo']=='1' or $GGET=='' ){
						?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php if($tbcampA['validacion']=='1'){ ?>*<?php }?>
                            </label>
                            <span id="<?php echo $tbcampA['campo']?>_load_combo">
                            <select  id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" class="form_input" 
                            <?php echo ($tbcampA['style']=='')?'':" style='".str_replace(",",";",$tbcampA['style'])."' "?>
                            <?php if($tbcampA['load']!=''){ 
							$looop=explode("||",$tbcampA['load']); ?>
							onchange="cargar_combo('<?php echo $looop[0]?>','<?php echo $looop[1]?>',this.value);"
							<?php }?> >
                            <option selected="selected"></option>
	                            <?php 
								foreach($oopciones as $oooo2){ 
								?>
                                <option <?php echo ($GGET==$oooo2['id'])?"selected":"";?> value="<?php echo $oooo2['id']?>" ><?php echo fixEncoding($oooo2['nombre'])?></option>
                                <?php
                                }
								?>
                            </select>
                            </span>
                        </li>                        
						<?php 
						
						} else {
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">
                            <label for="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" >
							<?php echo $tbcampA['label']?>
                            <?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>   
                            <?php if($tbcampA['validacion']=='1'){ ?>*<?php }?>
                            </label>
                            <span 
                            style='float:left;<?php echo ($tbcampA['style']=='')?'':" ".str_replace(",",";",$tbcampA['style'])?>'>
	                            <?php foreach($oopciones as $oooo2){ if($GGET==$oooo2['id']){ echo $oooo2['nombre']; } } ?>                            
                            </span>
                       </li>                             
                        <input type="hidden" id="<?php echo $tb?>_in_<?php echo $tbcampA['campo']?>" autocomplete="off" 
                        value="<?php echo $GGET;?>" />
                        <?php if($tbcampA['load']!=''){ 
						$looop=explode("||",$tbcampA['load']); ?>
                        <script>
						window.addEvent('domready',function(){ 
							cargar_combo('<?php echo $looop[0]?>','<?php echo $looop[1]?>','<?php echo $GGET;?>');
						});
						</script>	
                        <?php } ?>
                        <?php }
                    break;                    
					case "img":
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">                                                    
                            <label>
							<?php echo $tbcampA['label']?>
							<?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>                               
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>                            
							<div style="float:left;height:auto;" id="upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0">
                            </div>
                            
                            <script>
							window.addEvent('load',function(){ 
							$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>'); 
							} );
							</script>
                            
                        </li>
                       					
                        <?php 
                    break;
					case "sto":
                        ?>
                        <li class="linea_form <?php echo $Derecha; ?>">                                                    
                            <label>
							<?php echo $tbcampA['label']?>
							<?php if($Open==1){?><a class='edot' href="maquina.php?me=<?php echo $datos_tabla['me']?>&open=<?php echo $tbcampA['campo']?>#ablo_campo_<?php echo $tbcampA['campo']?>">C</a><?php }?>                               
                            <?php	if($tbcampA['validacion']=='1'){ ?>*<?php }?></label>                            
							<div style="float:left;height:auto;" id="upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0">
                            </div>
                            
                            <script>
							window.addEvent('load',function(){ 
							$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>'); 
							} );
							</script>
                            
                        </li>
                       					
                        <?php 
                    break;					
                ?>                
                
				<?php } ?>
            <?php } ?>

            <?php 
			if($datos_tabla['creacion_hijo']){ 
			$Hijos=explode(",",$datos_tabla['creacion_hijo']);
            foreach($Hijos as $HijoD){ 

			list($Hijo,$TipoHijo)=explode("|",$HijoD);
			
			foreach($objeto_tabla as $obbb){
				if($obbb['archivo']==$Hijo){
					$Pplural=$obbb['nombre_plural'];
					foreach($obbb['campos'] as $canp){
						if($canp['foreig']=='1'){
							$HijoCampo=$canp['campo'];
						}
					}
				}
			}
			
			$HijoValor=999999000 + rand(1,999);
			$HHijos[]=$HijoD;

			?>
            <input type="hidden" id="tempar_<?php echo $Hijo;?>_pre" value="<?php echo $Hijo;?>|<?php echo $HijoCampo;?>" />
            <input type="hidden" id="tempar_<?php echo $Hijo;?>" />
            <li class="linea_form linea_hijo <?php echo $TipoHijo;?>">
            	<label><?php echo $Pplural;?>&nbsp;</label>
				<div id="tempar_<?php echo $Hijo;?>_iframe" ></div>
            </li>
            <script>
            render_son('<?php echo $Hijo;?>',999999000+$random(1,999),false,'<?php echo $TipoHijo;?>');//alert('load');
            </script>
            <?php 
			} } 
			?>
            
            <li class="linea_form" style="color:#FF0000; <?php if($_GET['block']=='form'){ echo "display:none;"; } ?>" >
            	<label>&nbsp;</label>
                <span id="error_creacion" style=" visibility:; float:left; padding:5px 0; font-size:10px;">
                <span style="color:#222222;">los campos con * son obligatorios</span>
                </span>
            </li>
            
			<li class="linea_form" id="linea_crear">
	            	<?php if($_GET['block']!='form'){ ?>
                    <label>&nbsp;</label>
                    <?php } ?>
                	<input type="hidden" id="<?php echo $tb?>_mode" value="insert" />
                	<?php if($login_proceso=='1'){ ?> 
					<input type="button" id="<?php echo $tb?>_in_submit" class="form_boton_1" value="Entrar" style="float:left;" onclick="<?php echo $tbf?>_ajax('login','');"  />                    
                    <?php } else { ?>
					<input type="button" id="<?php echo $tb?>_in_submit" class="form_boton_1" value="Crear <?php echo $datos_tabla['nombre_singular']?>" style="float:left;" onclick="<?php echo $tbf?>_ajax('insertar','');"  />
                    <?php } ?>
                    
                    <?php 
					if($Open and ($datos_tabla['crear_pruebas']!='0') ){					
					?>
                    
                    <input type="button" id="<?php echo $tb?>_in_submit_prueba" class="form_boton_1" value="Crear <?php echo $datos_tabla['nombre_singular']?> de prueba" style="float:left; padding:0; margin-left:20px; background-color:<?php echo $BGCOLOR_DESARROLLO;?>;color:#000000;" onclick="<?php echo $tbf?>_ajax('insertar_prueba','');"   />
                    
                    <?php 
					} 
					?>
            </li>
                    
			<li class="linea_form" id="linea_grabar" style="display:none;">
					<label>&nbsp;</label>                                        
                	<input type="hidden" id="<?php echo $tb?>_id_guardar" />
					<input type="button" id="<?php echo $tb?>_ed_save" class="form_boton_1" value="Guardar <?php echo $datos_tabla['nombre_singular']?>" style="float:left;" 
                    onclick="<?php echo $tbf?>_ajax('guardar_completo',$v('<?php echo $tb?>_id_guardar'))"
                    />
					
                    <input type="button" id="<?php echo $tb?>_ed_cancelar" class="form_boton_1" value="Cancelar" style="float:left; margin-left:20px;" 
                    onclick="<?php echo $tbf?>_ajax('editar_completo_cancelar','')"
                    />       
                    
            </li>
            &nbsp;
          
            
       </ul>
