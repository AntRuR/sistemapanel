<?php
		
			$FORM=$FORMULARIO['carrito']=array(
					'nombre'=>'carrito'
					,'tabla'=>'pedidos'					
					,'ajax'=>'1'
					,'action'=>'ajax.php?mode=form&tab=carrito'
					//,'action'=>'index.php?modulo=formulario&tab=contacto'
					,'exito'=>'Su orden de cotización se ha enviado exitosamente.'
					,'error'=>'Ocurrió un error en al enviar su orden de cotización'				
					,'campos'=>array(				
						array(
							'label'=>'Nombre'
							,'campo'=>'nombre'
							,'tipo'=>'input_text'
							,'validacion'=>"validate['required']"
							)						
						,array(
							'label'=>'Apellidos'
							,'campo'=>'apellidos'
							,'tipo'=>'input_text'
							,'validacion'=>"validate['required']"
						)
						,array(
							'label'=>'E-mail'
							,'campo'=>'email'
							,'tipo'=>'input_text'
							,'validacion'=>"validate['required','email']"
						)						
						,array(
							'label'=>'Teléfono'
							,'campo'=>'telefono'
							,'tipo'=>'input_text'
							,'validacion'=>"validate['phone']"
						)
						,array(
							'label'=>'Celular'
							,'campo'=>'celular'
							,'tipo'=>'input_text'
							,'validacion'=>"validate['phone']"
						)						
						,array(
							'label'=>'Razón Social'
							,'campo'=>'razon_social'
							,'tipo'=>'input_text'
						)
						,array(
							'label'=>'RUC'
							,'campo'=>'ruc'
							,'tipo'=>'input_text'
						)						
						,array(
							'label'=>'Orden de Cotización'
							,'campo'=>'pedido'
							,'tipo'=>'textarea_hidden'
							,'validacion'=>"validate['required'] autoinput"
							,'value'=>render_pedido($_SESSION['carrito'])
						)
	
					)			
			);
			
			if($_SERVER['REQUEST_METHOD']=='POST'){
						
				//body_mensaje
				$body_mensaje="";
				foreach($FORM['campos'] as $CAMP){
					$data_insert[$CAMP['campo']]=$_POST[$CAMP['campo']];
					switch($CAMP['tipo']){
						case "input_text":case "input_hidden": $body_mensaje.="<tr><td><b>".$CAMP['label']."</b> :</td><td>".$_POST[$CAMP['campo']]."</td></tr>"; break;
						case "textarea":case"textarea_hidden": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label']."</b> :</td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']]."</td></tr>"; break;
					}
				}
	////////////body_administrador			
				$body_administrador ="";
				$body_administrador.="Desde la web, han enviado una orden de cotización con los siguientes datos:<br><br>";
				$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_administrador.=$body_mensaje;		
				$body_administrador.="</table><br><br><br>";			
				//email_administrador
				$email_administrador=enviar_email(
								array(
								'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
								,'Subject'=>'Orden de Cotización desde '.$PARAMETROS_EMAIL['url_web']
								,'body'=>$body_administrador
								//,'From'=>'info@afarmach.com'
								//,'FromName'=>'Afarmach'							
								//,'Logo'=>''
								)
							);
	////////////body_cliente
				$body_cliente ="";		
				$body_cliente.="<br>Hola ".$_POST['nombre']."<br><br>";
				$body_cliente.="Has enviado una orden de cotización a ".$PARAMETROS_EMAIL['nombre_web']." con los siguienes datos:<br><br><br>";
				$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_cliente.=$body_mensaje;		
				$body_cliente.="</table><br><br><br>";									
				$body_cliente.="Gracias por tu preferencia<br><br><br>";
				$body_cliente.=$body_firma;
				//email_cliente
				$email_cliente=enviar_email(
								array(
								'emails'=>array($_POST['email'])
								,'Subject'=>"Orden de Pedido ".$PARAMETROS_EMAIL['nombre_web']
								,'body'=>$body_cliente
								//,'From'=>'info@afarmach.com'
								//,'FromName'=>'Afarmach'							
								//,'Logo'=>''
								)
							);	
				//agregar inserts adicionales			
				$data_insert=array_merge($data_insert,array(	
											'fecha_creacion'=>"now()"	
											,'fecha_edicion'=>"now()"	
											,'fecha'=>"now()"											
											,'visibilidad'=>'1'	
											));
				//insert							
				$insertado=insert(
								$data_insert            
								,$FORM['tabla']
								,0
								);
				
				crear_email_debug(array(
									"EMAIL PARA USUARIO"=>$email_cliente['debug'],
									"EMAIL PARA ADMINISTRADOR"=>$email_administrador['debug']
									),"../../debug/emails_".$FORM['nombre'].".html");
								
				if( $email_cliente['todos'] and $email_administrador['todos'] ){
				
					unset($_SESSION['carrito']);
					
					if($FORM['ajax']){
					
						echo json_encode(array(
									't'=>'exito'
									,'m'=>$FORM['exito']
									,'n'=>$FORM['nombre']									
									));	
									
					} else {			
					
						$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['exito'];
						$_SESSION[$FORM['nombre'].'_tipo_mensaje']='exito';				
						redir($SERVER['BASE'].procesar_url($FORM['action']));								
						
					}
										
					
				} else {
	
					if($FORM['ajax']){
					
						echo json_encode(array(
									't'=>'error'
									,'m'=>$FORM['error']
									,'n'=>$FORM['nombre']									
									));	
									
					} else {			
					
						$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['error'];
						$_SESSION[$FORM['nombre'].'_tipo_mensaje']='error';				
						redir($SERVER['BASE'].procesar_url($FORM['action']));								
						
					}						
				
				}
	
	
			}

?>