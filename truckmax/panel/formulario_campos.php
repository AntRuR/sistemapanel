<?php 

			foreach($tbcampos as $uu=>$tbcampA){
				if($tbcampA['load']!=''){ $uno=explode("|",$tbcampA['load']); $Loads[]=$uno[0]; }
				if($EdicionPanel){ $tbcampos[$uu]['constante']=0; }
			}
			
			
			$INPS=array();
			foreach($tbcampos as $tbcampA){
				
				if($tbcampA['tipo']=='inp'){ $INPS[]=$tbcampA['campo']; }
				
				$Derecha=($FORMSCLASS[$tbcampA['derecha']])?$FORMSCLASS[$tbcampA['derecha']]:'';

				if($tbcampA['indicador']=='1'){ $Derecha="oculto"; }
								
				if($_GET['block']=='form' and $_GET['tipo']!='listado'){ $Derecha="linea_derecha_50"; }
				
				if($Derecha=='linea_derecha_inicio'){ ?><li class='linea_form break' >&nbsp;</li><?php } 
				
				if($tbcampA['legend']!=''){ ?><li class="linea_form legend" ><?php echo $tbcampA['legend'];?></li><?php }
				
				$mostrarli=1;
				if($tbcampA['tipo']=='hid'){ 
				
					$GGET1=$_GET[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
					$GGET2=$_SESSION[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
					$GGET=($GGET1!='')?$GGET1:$GGET2;
						list($primO,$tablaO,$whereO)=explode("|",$tbcampA['opciones']);
						if(in_array($tbcampA['campo'],$Loads)){ $whereO='where 0'; }
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();
						$camposOA=explode(";",$camposO);						
					$oopciones=select(array_merge(array($idO),$camposOA),$tablaO,procesar_dato($whereO));

					/*
					if(!($tbcampA['combo']=='1' or $GGET!='')){										
						$mostrarli=0; 
					}
					*/
				
				}

				if($tbcampA['tipo']=='com'){ 
					if(sizeof($tbcampA['opciones'])=='2' and 
					   strtolower($tbcampA['opciones']['0'])=='no' and 
					   str_replace("í","i",strtolower($tbcampA['opciones']['1']))=='si'){
							$tbcampA['tipo']='bit';
					}
				}
				
				if($mostrarli){
					?><li class="linea_form <?php echo $Derecha; ?>" ><?php
					
					?><label for="in_<?php echo $tbcampA['campo']?>" ><?php
					echo $tbcampA['label'];
					if($EdicionPanel){ ?><a class='edot' onclick='tog("<?php echo $tbcampA['campo']?>");return false;'>&diams;</a><?php }
					if($tbcampA['validacion']=='1'){ ?>*<?php }?></label><?php				
				}				
				
				if($datos_tabla['crear_quick']=='1'){
					if(sizeof($INPS)>0){ 
						$LASTINP=$INPS[sizeof($INPS)-1];  
						$FIRSTINP=$INPS[0];
					}
				}
				
				if($tbcampA['constante']){
					
					$value=$tbcampA['default'];
					echo "<div class='in_span'>";
					switch($tbcampA['tipo']){
					/* case "img":
						$tbli=$objeto_tabla[$obj['obj']]['campos'][$camP];
						if($linea[$tbli['campo']]!=''){						
						?><a href="<?php echo get_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']]);?>" rel="[images],noDesc" class="mb"><img <?php echo dimensionar_imagen($datos_tabla[$tbli['campo']]['carpeta'], $linea[$datos_tabla['fcr']],$linea[$tbli['campo']],$tbli['tamano_listado']);?> /></a><?php 	
						}
					break; */
					case "hid":
						list($primO,$tablaO)=explode("|",$tbcampA['opciones']);
						list($idO,$camposO)=explode(",",$primO);
						$camposOA=array();
						$camposOA=explode(";",$camposO);
						$bufy='';
						foreach($camposOA as $COA){
						$bufy.= select_dato($COA,$tablaO,"where ".$idO."='".$value."'")." ";
						}
						echo '<span id="in_'.$tbcampA['campo'].'_span">';
						echo (trim($bufy)!='')?$bufy:'&nbsp;';
						echo '</span>';					
					break;
					case "fcr":	case "fch":
					$fech=fecha_formato($value,($tbcampA['formato'])?$tbcampA['formato']:'0b');					
					echo '<span id="in_'.$tbcampA['campo'].'_span" class="in_span">';
					echo ($fech!='')?$fech:"&nbsp;";
					echo '</span>';					
					break;
					case "txt":					
					echo ($value!='')?nl2br($value):"&nbsp;";
					break;
					default:					
					echo '<span id="in_'.$tbcampA['campo'].'_span" >';
					echo ($value!='')?$value:"&nbsp;";
					echo '</span>';
					break;
					}				
					echo "</div>";
				
				
					
				} else {
					
					
					
                switch($tbcampA['tipo']){
				
					case "img":	case "sto":
					
						?><div style="float:left;height:auto;" id="upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0"><?php
						?></div><?php 
							
                    break;	
                    case "inp": 

							$maxlength=($tbcampA['size']!='')?$tbcampA['size']:'80';
							$stylewidth=($tbcampA['size']!='')?'width:'. ( ( ($tbcampA['size']>100)?100*7:$tbcampA['size']*7 ) ).'px; ':'';
							
                            ?><input type="text" id="in_<?php echo $tbcampA['campo']?>" name="<?php echo $tbcampA['campo']?>" class="form_input" <?php
                            ?>maxlength="<?php echo $maxlength;?>" <?php
                            ?>style=" <?php 
							echo $stylewidth;
							echo ($tbcampA['style'])?$tbcampA['style']:'';							
							echo ($tbcampA['unique'])?'border:1px solid #666666;':'';
							?>" <?php
                            ?>value="<?php echo $tbcampA['default']?>" <?php
							if($LASTINP==$tbcampA['campo']){ ?>onkeypress="if(event.keyCode==13){ ax('insertar',''); }" <?php }
                            ?>/><?php
							if($FIRSTINP==$tbcampA['campo']){ ?><script>$('in_<?php echo $tbcampA['campo']?>').focus();</script><?php }  
							/*
							if($tbcampA['multiopciones']!=''){
								list($name,$tablerel,$primO,$tablaO,$whereO)=explode("|",$tbcampA['multiopciones']);
								list($idO,$camposO)=explode(",",$primO);
								$multi=select(array($idO,$camposO),$tablaO,$whereO,0);
								echo "<label>$name</label><div class='multicombo'>";
								foreach($multi as $mul){
								echo "<div class='fil'>"; 
								echo "<input type='checkbox' id='$tablaO_".$mul[$idO]."' />"; 
								echo "<label for='$tablaO_".$mul[$idO]."'>".$mul[$camposO]."</label>"; 
								echo "</div>";
								} 
								echo "</div>";
							}
							*/
                    break; 
                    case "pas": 
                                                
							$maxlength=($tbcampA['size']!='')?$tbcampA['size']:'80';
							$stylewidth=($tbcampA['size']!='')?'width:'. ( ( ($tbcampA['size']>100)?100*7:$tbcampA['size']*7 ) ).'px; ':'';
							                  
                            ?><div class="floatinput"><input type="password" id="in_<?php echo $tbcampA['campo']?>" name="<?php echo $tbcampA['campo']?>" class="form_input" autocomplete="off"  <?php
                            ?> maxlength="<?php echo $maxlength;?>" style=" <?php 
							echo $stylewidth;
							echo ($tbcampA['style'])?$tbcampA['style']:'';							
							?> "/><br /><input type="password" id="in_<?php echo $tbcampA['campo']?>_2" class="form_input" autocomplete="off" <?php 
                            ?>maxlength="<?php echo $maxlength;?>" style=" <?php 
							echo $stylewidth;
							echo ($tbcampA['style'])?$tbcampA['style']:'';							
							?> " /></div><?php
                            
                    break;
                    case "paslogin": 
					                        
                            ?><div><input type="password" id="in_<?php echo $tbcampA['campo']?>" class="form_input" autocomplete="off" <?php
                            ?>onkeyup=" if(event.keyCode=='13'){ ax('login',''); } " /></div><?php
                            
                    break;					 
                    case "fch":                                                
                            
                  			?><span id="in_<?php echo $tbcampA['campo']?>_span"></span><?php
							
                    break; 										
                    case "html": case "txt": case "yot":
					
                            ?><div class='floatinput <?php 
							echo ($tbcampA['tipo']=='html')?" mooedit":""; 
							?>'><textarea  id="in_<?php echo $tbcampA['campo']?>" class="form_input" name="<?php echo $tbcampA['campo']?>" <?php
                            ?>style=" <?php 
							echo ($tbcampA['tipo']=='html')?'background-color:#FFF; ':""; 
							echo ($tbcampA['tipo']=='yot')?'width:300px;height:100px; ':"";
							echo ($tbcampA['style']!='')?str_replace(",","; ",$tbcampA['style']).' ':'';
							?>" autocomplete="off" rows="6"><?php 
                            echo ($tbcampA['tipo']=='html')?(($tbcampA['default']=='')?'<p></p>':$tbcampA['default']):$tbcampA['default'];?></textarea><?php
                            ?></div><?php
						
                    break;
                    case "multicom": 
						
                            ?><div class="form_input" style="float:left; border:0; background:none;"><?php
                            foreach($opciones_select as $opcccion=>$opcion_select_a){ list($opcion_select,$color)=explode("|",$opcion_select_a);
                            ?><div><?php
                            ?><strong><?php echo $opcion_select;?></strong><?php
                            ?><input type="checkbox" <?php
                            ?>id="in_<?php echo $tbcampA['campo']?>_<?php echo $opcccion;?>" <?php
                            ?>name="<?php echo $tbcampA['campo']?>" <?php
                            ?>value="<?php echo $opcccion;?>" <?php
                            ?>title="<?php echo $opcccion; ?>" <?php
                            echo ($tbcampA['default']=="$opcccion")?"checked ":" ";
                            ?>onchange="if(this.checked){ $('in_<?php echo $tbcampA['campo']?>').value=this.value; } "  /><?php
                            ?></div><?php
                            }
                            ?></div><?php                            

                    break;
					case "bit":
					
						?><div class="form_input" style="float:left; border:0; background:none;"><?php
						?><input  id="in_<?php echo $tbcampA['campo']?>" type="hidden" name="<?php echo $tbcampA['campo']?>" <?php 
						?>value="<?php echo ($tbcampA['default']=="1")?'1':(($tbcampA['default']=="0")?'0':'');?>" /><?php
						?><input type="checkbox" <?php
						?>id="in_<?php echo $tbcampA['campo']?>_check" <?php
						echo ($tbcampA['default']=="1")?"checked ":"";
						?>onchange="$('in_<?php echo $tbcampA['campo']?>').value=(this.checked)?1:0;"  /><?php
						?></div><?php  					
						
					break;
                    case "com":
					
						if($tbcampA['radio']=='1' and is_array($tbcampA['opciones'])){							                       
                            
							$opciones_select=array();
							$iti=(is_array($tbcampA['opciones']))?1:0;
							$opciones_select=(is_array($tbcampA['opciones']))?$tbcampA['opciones']:explode(",",$tbcampA['opciones']);
							
                            ?><div class="form_input" style="float:left; border:0; background:none;"><?php
                            ?><input  id="in_<?php echo $tbcampA['campo']?>" type="hidden" name="<?php echo $tbcampA['campo']?>"  /><?php
                            foreach($opciones_select as $opcccion=>$opcion_select){ 
                            ?><strong><?php echo $opcion_select;?></strong><?php
                            ?><input type="radio" <?php
                            ?>id="in_<?php echo $tbcampA['campo']?>_<?php echo $opcccion;?>" <?php
                            ?>name="in_<?php echo $tbcampA['campo']?>" <?php
                            ?>value="<?php echo $opcccion;?>" <?php
                            ?>title="<?php echo $opcccion; ?>" <?php
                            echo ($tbcampA['default']=="$opcccion")?"checked ":" ";
                            ?>onchange="if(this.checked){ $('in_<?php echo $tbcampA['campo']?>').value=this.value; } "  /><?php
                            } 
                            ?></div><?php  
                        
						} else {

                            ?><select <?php echo ($tbcampA['style']!='')?' style=" '. $tbcampA['style'].' " ':'';?> id="in_<?php echo $tbcampA['campo']?>" class="form_input" name="<?php echo $tbcampA['campo']?>" ><?php
                                ?><option selected="selected"></option><?php
                                $opciones_select=array();
								$iti=(is_array($tbcampA['opciones']))?1:0;
                                $opciones_select=(is_array($tbcampA['opciones']))?$tbcampA['opciones']:explode(",",$tbcampA['opciones']);
                                foreach($opciones_select as $opcccion=>$opcion_select_a){ list($opcion_select,$color)=explode("|",$opcion_select_a);
								$vvvval=($iti)?fixEncoding($opcccion):fixEncoding($opcion_select);
                                ?><option <?php echo ($color)?"style='color:".$color.";'":""; ?> value="<?php echo $vvvval;?>" <?php 
								echo ($vvvval==$tbcampA['default'])?"selected":"" ?> ><?php 
								echo fixEncoding($opcion_select)?></option><?php
                                }								
                            ?></select><?php
							
						}
						
                    break;												
                    case "hid":

						if(	$tbcampA['combo']=='1' or $GGET=='' ){
						list($ee,$bb,$cc)=explode("|",$tbcampA['opciones']);
						$tbcampA['opciones']=($cc)?$tbcampA['opciones']:$ee."|".$bb."|where 1 or id";
							//prin($oopciones);
                            ?><select id="in_<?php echo $tbcampA['campo']?>" class="form_input" name="<?php echo $tbcampA['campo']?>" <?php
                            ?><?php echo ($tbcampA['style']=='')?'':" style='".str_replace(",",";",$tbcampA['style'])."' ";
                            if($tbcampA['load']!=''){ 
							$looop=explode("||",$tbcampA['load']);
							?> onchange="load_combo('<?php echo $looop[0]?>','<?php echo $looop[1]?>',this.value);" <?php 
							}
                            if($tbcampA['onchange']!=''){ echo "onchange=\"".$tbcampA['onchange']."(this.value);\""; }
                            ?> ><option selected="selected"></option><?php
								foreach($oopciones as $oooo2){ 
                                ?><option <?php echo ($GGET==$oooo2[$idO])?"selected":"";?> value="<?php echo $oooo2[$idO]?>" ><?php 
								foreach($camposOA as $COA){	echo fixEncoding($oooo2[$COA])." ";	}
								?></option><?php
                                }
                            ?></select><?php
													
						} else {

                            ?><span style='float:left;<?php echo ($tbcampA['style']=='')?'':" ".str_replace(",",";",$tbcampA['style'])?>'><?php
	                            foreach($oopciones as $oooo2){ if($GGET==$oooo2['id']){ 
								foreach($camposOA as $COA){	echo fixEncoding($oooo2[$COA])." ";	}								
								//echo $oooo2['nombre']; 
								} }         
                            ?></span><?php
							?><input type="hidden" id="in_<?php echo $tbcampA['campo']?>" class="form_input" name="<?php echo $tbcampA['campo']?>" <?php
							?>value="<?php echo $GGET;?>" /><?php
							if($tbcampA['load']!=''){ 
							$looop=explode("||",$tbcampA['load']);						
							}
						
                        }
						
                    break;                    
				
                }
				 
				 
				 
				}
				if($mostrarli){
				?></li><?php
				}
            } 
?>