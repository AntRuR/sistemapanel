<?php //á
//prin($PARAMS);
include_once("formularios/formularios.php");


	$FORM=array(
			'nombre'=>$PARAMS['conector']
			,'titulo'=>"Contacto"
			,'legend'=>"Déjanos tu Mensaje"
			,'ajax'=>'1'
			,'action'=>'ajax.php?mode=form&tab='.$PARAMS['conector'].'&name='.$PARAMS['conector']
			//,'url'=>'index.php?modulo=app&tab=home'					
			//,'action'=>'index.php?modulo=formulario&tab=contacto'
			,'exito'=>'Gracias por su mensaje en breve nos estaremos comunicando con usted.'
			,'error'=>'Ocurrió un error en el proceso de envio'				
			,'submit'=>' type="submit" value="Enviar Mensaje" class="btn btn-primary btn-sm" '	
			,'pie'=>'los campos con * son obligatorios'
										
	,'tabla'=>'contacto'
	,'campos'=>[
		'apellidos'=>[
			'label'      =>'Apellidos',
			'validacion' =>"required"
		],	
		'nombre'=>[
			'label'      =>'Nombre',
			'validacion' =>"required"
		],	
		'telefono'=>[
			'label'      =>'Teléfono Fijo',
			'validacion' =>"Tel"
		],
		'celular'=>[
			'label'      =>'Celular',
			'validacion' =>"Tel"
		],	
		'email'=>[
			'label'      =>'E-mail',
			'validacion' =>"Tel required"
		],
		'distrito'=>[
			'label'=>'Distrito'
		],		
		'provincia'=>[
			'label'=>'Provincia'
		],						
				
		'como_se_entero'=>[
			'label'    =>'Cómo se enteró de nosotros',
			'tipo'     =>'input_combo',
			'opciones' =>['1'=>'Web','2'=>'Páginas Amarillas','3'=>'Mailing','4'=>'Publicidad de vehículos','5'=>'Recomendación de clientes','6'=>'Redes Sociales (Facebook, Twitter)']
		],

		'comentario'=>[
			'label'       =>'Déjenos su consulta'
			,'tipo'       =>'textarea'
			,'validacion' =>"required"
			//,'value'=>['')
		],		
		// 'captcha'=>[
		// 	'tipo'=>'captcha'
		// ]							
	],	
					
					
);
			
						
			$FORM=pre_proceso_form($FORM);
			
			
			if($_SERVER['REQUEST_METHOD']=='POST'){
						
				// if($_SESSION['captchaword']!=$_POST['captcha']){
				
				// 	echo json_encode(array(
				// 				't'=>'error'
				// 				,'m'=>'Error de verificación'
				// 				,'n'=>$FORM['nombre']
				// 				));					
				// 	exit();

				// }	
				// prin($_POST);
				//body_mensaje
				$body_mensaje="";
				foreach($FORM['campos'] as $CAMP){
					if($CAMP['tipo']=='captcha') continue;
					$data_insert[$CAMP['campo']['0']]=$_POST[$CAMP['campo']['0']];
					switch($CAMP['tipo']){
						case "input_text": $body_mensaje.="<tr><td nowrap><b>".$CAMP['label'].":</b></td><td style='padding-left:10px;'>".$_POST[$CAMP['campo']['0']]."</td></tr>"; break;
						case "textarea": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label'].":</b></td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']['0']]."</td></tr>"; break;
					}
				}
	////////////body_administrador			
				$body_administrador ="";
				$body_administrador.="Desde la web, han enviado un mensaje de contacto con los siguientes datos:<br><br>";
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
				$body_cliente.="Gracias por contactarte con nosotros<br><br><br>";
				$body_cliente.=$body_firma;
				//email_cliente
				$email_cliente=enviar_email(
								array(
								'emails'=>array($_POST['email'])
								,'Subject'=>"Contacto de ".$PARAMETROS_EMAIL['nombre_web']
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
									"EMAIL QUE SE LE ENVIA AL USUARIO"=>$email_cliente['debug'],
									"EMAIL QUE SE LE ENVIA AL ADMINISTRADOR"=>$email_administrador['debug']
									),"../../debug/emails_".$FORM['nombre'].".html");
				

				if( $email_cliente['todos'] and $email_administrador['todos'] ){
								
						echo json_encode(array(
									't'=>'success'
									,'m'=>$FORM['exito']
									,'n'=>$FORM['nombre']									
									));	
								
				} else {
					
						echo json_encode(array(
									't'=>'danger'
									,'m'=>$FORM['error']
									,'n'=>$FORM['nombre']
									));	
				
				}
	
	
			} else {
			
			$HEAD['titulo'] = ucfirst($FORM['nombre'])." | ".$COMMON['datos_root']['titulo_web']; 			
			// $HEAD['meta_keywords'] .= procesar_keywords($COMMON['datos_root']['titulo_web']);			 
			// $HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);	
			
			}			

// prin($FORM);

$OBJECT[$PARAMS['conector']]=$FORM;

