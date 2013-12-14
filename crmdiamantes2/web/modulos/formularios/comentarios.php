<?php //á

include_once("formularios/formularios.php");

	$CAMPOS=array(
	
		'id_item'=>array(
			'label'=>'Producto'			
			,'tipo'=>'input_hidden'
	//		,'tipo'=>'textarea'
			,'value'=>array($ITEM['id'])
			,'value_email'=>array(select_dato('nombre','productos_items','where id="'.$_POST['id_item'].'" order by calificacion desc limit 0,100'))
		),				
		'nombre'=>array(
			'label'=>'Nombre'
			,'validacion'=>"validate['required']"
			)	
		,'telefono'=>array(
			'label'=>'Teléfono'
			,'validacion'=>"validate['phone']"
		)
		,'email'=>array(
			'label'=>'E-mail'
			,'validacion'=>"validate['required','email']"
		)
		,'ciudad'=>array(
			'label'=>'Ciudad'
		)		
		
		,'consulta'=>array(
			'label'=>'Consulta'
			,'tipo'=>'textarea'
			,'validacion'=>"validate['required']"
			//,'value'=>array('')
		)
	);							
	
			$FORM=array(
					'nombre'=>$PARAMS['conector']
					,'titulo'=>"Comentario"
					,'legend'=>$ITEM['consulta']
					,'ajax'=>'1'
					,'action'=>'ajax.php?mode=form&tab='.$PARAMS['this'].'&name='.$PARAMS['conector']
					//,'url'=>'index.php?modulo=app&tab=home'					
					,'exito'=>'Gracias por su mensaje en breve nos estaremos comunicando con usted.'
					,'error'=>'Ocurrió un error en el proceso de envio'				
					,'submit'=>' type="submit" value="Enviar Consulta" '	
					,'pie'=>'los campos con * son obligatorios'
					/*CAMPOS-BEGIN*/										
,'tabla'=>'productos_comentarios'
,'campos'=>$CAMPOS
					/*CAMPOS-END*/
					
					,'complete'=>"							

							var json=JSON.decode(ee,true);
							new Element('div', {
								'class': 'mensaje mensaje_'+json.t,
								'html': json.m,
								'id': 'mensaje_'+json.n										
							}).inject(\$(json.n+'_form_body'), 'before');
							\$0(json.n+'_form_body');
		
							setTimeout(\"\$('mensaje_\"+json.n+\"').destroy(); \$1('\"+json.n+\"_form_body'); \",7000);							
							
					"							
			);

			$FORM=pre_proceso_form($FORM);
			
						
			if($_SERVER['REQUEST_METHOD']=='POST'){
						
				//data_insert								
				$insertado=campos_insert($FORM,$_POST,array(	
											'fecha_creacion'=>"now()"	
											,'fecha_edicion'=>"now()"	
											,'fecha'=>"now()"											
											,'visibilidad'=>'1'	
											),0);
								
				//body_mensaje				
				$body_mensaje=campos_email($FORM['campos'],$_POST,$insertado['id'],"Código de Consulta");								

	////////////body_administrador			
				$body_administrador ="";
				$body_administrador.="Desde la web, han enviado un mensaje con los siguientes datos:<br><br>";
				$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_administrador.=$body_mensaje;		
				$body_administrador.="</table><br><br><br>";			
				//email_administrador
				$email_administrador=enviar_email(
								array(
								'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
								,'Subject'=>'Contacto desde '.$PARAMETROS_EMAIL['url_web']
								,'body'=>$body_administrador
								//,'From'=>'info@afarmach.com'
								//,'FromName'=>'Afarmach'							
								//,'Logo'=>''
								)
							);
	////////////body_cliente
				$body_cliente ="";		
				$body_cliente.="<br>Hola ".$_POST['nombre']."<br><br>";
				$body_cliente.="Has enviado un mensaje a ".$PARAMETROS_EMAIL['nombre_web']." con los siguienes datos:<br><br><br>";
				$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_cliente.=$body_mensaje;		
				$body_cliente.="</table><br><br>";					
				$body_cliente.="Gracias por enviarnos tu mensaje<br><br><br>";
				$body_cliente.=$body_firma;
				//email_cliente
				
				$Email=$_POST['email'];
				
				$email_cliente=enviar_email(

								array(
								'emails'=>array($Email)
								,'Subject'=>"Mensaje de ".$PARAMETROS_EMAIL['nombre_web']
								,'body'=>$body_cliente
								//,'From'=>'info@afarmach.com'
								//,'FromName'=>'Afarmach'							
								//,'Logo'=>''
								)
							);	

								

				
				crear_email_debug(array(
									"EMAIL QUE SE LE ENVIA AL USUARIO"=>$email_cliente['debug'],
									"EMAIL QUE SE LE ENVIA AL ADMINISTRADOR"=>$email_administrador['debug']
									),"../../debug/emails_".$FORM['nombre'].".html");
								
				if( $email_cliente['todos'] and $email_administrador['todos'] ){
								
						echo json_encode(array(
									't'=>'exito'
									,'m'=>$FORM['exito']
									,'n'=>$FORM['nombre']									
									));	
								
				} else {
					
						echo json_encode(array(
									't'=>'error'
									,'m'=>$FORM['error']
									,'n'=>$FORM['nombre']
									));	
				
				}
	
	
			}	


$FORMULARIO[$PARAMS['conector']]=$FORM;

?>