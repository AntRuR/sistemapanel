<?php 

echo 'alert(8);';
foreach($tbcampos as $tbcampA){
	switch($tbcampA['tipo']){ 									 
		case "fch":
		
			if($tbcampA['rango']){
			list($uuno,$ddos)=explode(",",$tbcampA['rango']);
			$FromYear = date("Y",strtotime($uuno));
			$ToYear = date("Y",strtotime($ddos));										
			} else {
			$FromYear = date("Y")-99;
			$ToYear = date("Y")+1;
			}
			?>								
			input_date('in_<?php echo $tbcampA['campo']?>','in_<?php echo $tbcampA['campo']?>_span',<?php echo $FromYear;?>,<?php echo $ToYear;?>);								
			<?php if(trim($tbcampA['default'])!=''){ 
			if(trim($tbcampA['default'])=="now()"){ $tbcampA['default']=date("Y-m-d H:i:s"); }
			if(trim($tbcampA['default'])=="tomorrow()"){ $tbcampA['default']=date("Y-m-d H:i:s",strtotime("+1 day")); }
			?>
			$('in_<?php echo $tbcampA['campo']?>_d').value='<?php echo substr($tbcampA['default'],8,2);?>';
			$('in_<?php echo $tbcampA['campo']?>_m').value='<?php echo substr($tbcampA['default'],5,2);?>';
			$('in_<?php echo $tbcampA['campo']?>_a').value='<?php echo substr($tbcampA['default'],0,4);?>';								
			$('in_<?php echo $tbcampA['campo']?>').value='<?php echo $tbcampA['default']?>';
			<?php } 
		break; 										
		case "html":                        
			?>mooeditable_<?php echo $tbcampA['campo']?> = $('in_<?php echo $tbcampA['campo']?>').mooEditable({
					actions: 'bold italic underline | justifyleft justifyright justifycenter justifyfull | insertunorderedlist insertorderedlist | undo redo removeformat | createlink unlink | indent outdent | tableadd tableedit tablerowadd tablerowedit tablerowdelete tablecoladd tablecoledit tablecoldelete | toggleview',
					externalCSS: 'css/Editable.css',
					baseCSS: 'html{ height: 100%; cursor: text; } body{ font-family: calibri; font-size:12px; } h2{font-size:20px;font-weight:bold; color:#222;} h3{font-size:18px;font-weight:bold;color:#111;} h4{font-size:16px;font-weight:bold;color:#000;} h5{font-size:14px;font-weight:bold;color:#000;} h6{font-size:14px;font-weight:bold;color:#222; } table { border-collapse: collapse !important; border:0 !important; padding:0 !important; margin:0 !important; } table td,table th { border:1px solid #DDD !important; padding:4px !important; margin:0 !important; } <?php echo $tbcampA['css']?>' 
				});							
			<?php 	if(sizeof($tbcampA['botones'])>0){ ?>
			MooEditable.Actions.Mas_<?php echo $tbcampA['campo']?> = {
					title: 'INSERTAR',
					type: 'button-overlay',
					options: {
						mode: 'text',
						overlayHTML: (function(){
								var html = '';
								<?php foreach($tbcampA['botones'] as $name=>$html){	echo "html += '<a href=\"#\" rel=\'".addslashes(str_replace(array("\n","\r","\s","\t"),"",$html))."\'>".$name."</a>';\n";
								}
								?>
								return html;
							})()
					},
					command: function(buttonOverlay, e){
						this.selection.insertContent($(e.target).get('rel'));
					}
				};
			mooeditable_<?php echo $tbcampA['campo']?>.toolbar.addItem('Mas_<?php echo $tbcampA['campo']?>');				
			<?php }
		break;
		case "hid":
			$GGET1=$_GET[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
			$GGET2=$_SESSION[str_replace(array("[","]"),array("",""),$tbcampA['default'])];
			$GGET=($GGET1!='')?$GGET1:$GGET2;
				list($primO,$tablaO,$whereO)=explode("|",$tbcampA['opciones']);
				list($idO,$camposO)=explode(",",$primO);
				$camposOA=array();
				$camposOA=explode(";",$camposO);						
			$oopciones=select(array_merge(array($idO),$camposOA),$tablaO,procesar_dato($whereO));
			if(!($tbcampA['combo']=='1' or $GGET=='' )){						                     
			if($tbcampA['load']!=''){ 
			$looop=explode("||",$tbcampA['load']);
			?>load_combo('<?php echo $looop[0]?>','<?php echo $looop[1]?>','<?php echo $GGET;?>');<?php	
			}
			}
		break;                    
		case "img":?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>');<?php
		break;
		case "sto":?>$("upl_<?php echo $tb?>_<?php echo $tbcampA['campo']?>_0").innerHTML=render_upload_sto('<?php echo $tb?>','<?php echo $tbcampA['campo']?>','','<?php echo $USU_IMG_DEFAULT;?>');<?php
		break;					
	} 
} 

?>