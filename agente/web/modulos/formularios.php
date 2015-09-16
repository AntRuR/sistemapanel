<?php //á
/**********************************************/
////////////////////////INCLUDES////////////////
/**********************************************/

$INCLUDES['js'][]='js/mootools-1.2.3.1-more.js';
$INCLUDES['js'][]='js/lang/es.js';
$INCLUDES['js'][]='js/formcheck.js';
$INCLUDES['css'][]='css/theme/blue/formcheck.css';


/**********************************************/
/**********************************************/
/**********************************************/

$PARAMETROS_EMAIL['From']='informes@agenciainmobiliariaperu.com';
$PARAMETROS_EMAIL['FromName']='Agencia Inmobiliaria Perú';
$PARAMETROS_EMAIL['Logo']=$vars['REMOTE']['httpfiles']."/".THEME_PATH.'img/logo.jpg';
$PARAMETROS_EMAIL['disabled']=0;
$PARAMETROS_EMAIL['debug']=0;
$PARAMETROS_EMAIL['emailsAdmin']=array(
										"guillermolozan@gmail.com"
										,"wtavara@prodiserv.com"
										,"informes@agenciainmobiliariaperu.com"
									  );
									  
$PARAMETROS_EMAIL['nombre_web']="Agencia Inmobiliaria Perú";
$PARAMETROS_EMAIL['url_web']=$vars['REMOTE']['httpfiles'];

$COMMON['direccion']=select_dato(
        "valor",
        "configuraciones",
        "where variable='direccion'"
        ,0
        );		
$COMMON['telefonos']=select_dato(
        "valor",
        "configuraciones",
        "where variable='telefonos'"
        ,0
        );
$COMMON['email']=select_dato(
        "valor",
        "configuraciones",
        "where variable='email'"
        ,0
        );		
		
$body_firma=$COMMON['direccion']."<br>".$COMMON['telefonos']."<br>".$COMMON['email']."<br><a href='".$vars['REMOTE']['httpfiles']."'>".$vars['REMOTE']['httpfiles']."</a>";
	
	if($_GET['modulo']=='pagina-formulario'){
	
	switch($_GET['tab']){	

	
	/**********************************************/
	/**************    BOLETIN    *****************/
	/**********************************************/

		
	case "boletin": 
	
		$FORM=$FORMULARIO['boletin']=array(
				'nombre'=>'boletin'
				//,'action'=>'ajax.php?mode=form&tab=recomendar'
				,'action'=>'index.php?modulo=pagina-formulario&tab=boletin'
				//,'ajax'=>'1'
				,'exito'=>'Gracias por inscribirte al boletín de '.$PARAMETROS_EMAIL['nombre_web']
				,'error'=>'Ocurrió un error en el proceso de envio'				
				,'campos'=>array(
					array(
						'label'=>'Nombre'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required']"					
					)						
					,array(
						'label'=>'Email'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"					
					)

				)			
		);
		
       	if($_SERVER['REQUEST_METHOD']=='POST'){
					
			//body_mensaje
			$body_mensaje="";
			foreach($FORM['campos'] as $CAMP){
				$data_insert[$CAMP['campo']]=$_POST[$CAMP['campo']];
				switch($CAMP['tipo']){
					case "input_text": $body_mensaje.="<tr><td><b>".$CAMP['label']."</b> :</td><td>".$_POST[$CAMP['campo']]."</td></tr>"; break;
					case "textarea": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label']."</b> :</td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']]."</td></tr>"; break;
				}
			}
////////////body_administrador			
			$body_administrador ="";
			$body_administrador.="<br>Desde la web, se han inscrito al boletín electrónico con los siguientes datos:<br><br>";
			$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
			$body_administrador.=$body_mensaje;		
			$body_administrador.="</table><br><br><br>";			
			//email_administrador
			$email_administrador=enviar_email(
							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Se han suscrito al boletín desde '.$PARAMETROS_EMAIL['url_web']
							,'body'=>$body_administrador
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
////////////body_cliente
			$body_cliente ="";		
			$body_cliente.="<br>Hola ".$_POST['nombre']."<br><br>";
			$body_cliente.="Te has inscrito al boletín electrónico de ".$PARAMETROS_EMAIL['nombre_web']." con los siguienes datos:<br><br><br>";
			$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
			$body_cliente.=$body_mensaje;					
			$body_cliente.="</table><br><br><br>";			
			$body_cliente.=$body_firma;
			//email_cliente
			$email_cliente=enviar_email(
							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>"Boletín electrónico de ".$PARAMETROS_EMAIL['nombre_web']
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
							,"boletines"
							,0
							);
			
			crear_email_debug(array(
								"EMAIL PARA USUARIO"=>$email_cliente['debug'],
								"EMAIL PARA ADMINISTRADOR"=>$email_administrador['debug']
								),"../../debug/emails_boletines.html");
							
			if( $email_cliente['todos'] and $email_administrador['todos'] ){
		
				if($FORM['ajax']){
				
					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
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
								));	
								
				} else {			
				
					$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['error'];
					$_SESSION[$FORM['nombre'].'_tipo_mensaje']='error';				
					redir($SERVER['BASE'].procesar_url($FORM['action']));								
					
				}						
			
			}
			

			
		}
		
	break;	


	
	/**********************************************/
	/***************   CONTACTO   *****************/
	/**********************************************/
		
	case "contacto": 
	
		$FORM=$FORMULARIO['contacto']=array(
				'nombre'=>'contacto'
				//,'action'=>'ajax.php?mode=form&tab=recomendar'
				,'action'=>'index.php?modulo=pagina-formulario&tab=contacto'
				//,'ajax'=>'1'
				,'exito'=>'Gracias su comentario en breve nos estaremos comunicando con usted.'
				,'error'=>'Ocurrió un error en el proceso de envio'				
				,'campos'=>array(
					array(
						'label'=>'Nombre'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required']"
						)						
					,array(
						'label'=>'Empresa'
						,'campo'=>'empresa'
						,'tipo'=>'input_text'
					)
					,array(
						'label'=>'Teléfono'
						,'campo'=>'telefono'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['phone']"
					)
					,array(
						'label'=>'E-mail'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"
					)
					,array(
						'label'=>'Consulta'
						,'campo'=>'consulta'
						,'tipo'=>'textarea'
						,'validacion'=>"validate['required']"
					)

				)			
		);
		
       	if($_SERVER['REQUEST_METHOD']=='POST'){
					
			//body_mensaje
			$body_mensaje="";
			foreach($FORM['campos'] as $CAMP){
				$data_insert[$CAMP['campo']]=$_POST[$CAMP['campo']];
				switch($CAMP['tipo']){
					case "input_text": $body_mensaje.="<tr><td><b>".$CAMP['label']."</b> :</td><td>".$_POST[$CAMP['campo']]."</td></tr>"; break;
					case "textarea": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label']."</b> :</td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']]."</td></tr>"; break;
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
			$body_administrador.=$body_mensaje;					
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
							,"contacto"
							,0
							);
			
			crear_email_debug(array(
								"EMAIL PARA USUARIO"=>$email_cliente['debug'],
								"EMAIL PARA ADMINISTRADOR"=>$email_administrador['debug']
								),"../../debug/emails_contactenos.html");
							
			if( $email_cliente['todos'] and $email_administrador['todos'] ){
		
				if($FORM['ajax']){
				
					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
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
								));	
								
				} else {			
				
					$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['error'];
					$_SESSION[$FORM['nombre'].'_tipo_mensaje']='error';				
					redir($SERVER['BASE'].procesar_url($FORM['action']));								
					
				}						
			
			}


		}

		
	$HEAD['titulo'] = procesar_titulo("Contacto");
		
	$HEAD['meta_keywords'] = procesar_keywords("Contacto");
		
	break;	
		
	}		
	
	}
	
	
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/

	
		/**********************************************/
		/***************   CONSULTA   *****************/
		/**********************************************/	
		if(
		($_GET['modulo']=='item' and $_GET['tab']=='productos') or
		($_GET['mode']=='form' and $_GET['tab']=='consulta')
		){
		
		$FORM=$FORMULARIO['consulta']=array(
				'nombre'=>'consulta'
				,'action'=>'ajax.php?mode=form&tab=consulta&id='.$ITEM_ID
				//,'action'=>'index.php?modulo=item&tab=productos&id='.$_GET['id']
				,'ajax'=>'1'
				,'exito'=>'Gracias por dejar su consulta en breve nos estaremos comunicando con usted'
				,'error'=>'Ocurrió un error en el proceso de envio'				
				,'campos'=>array(
					array(
						'label'=>'Nombre'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required']"					
					)						
					,array(
						'label'=>'Email'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"					
					)
					,array(
						'label'=>'Teléfono'
						,'campo'=>'telefono'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','phone']"					
					)										
					,array(
						'label'=>'Consulta'
						,'campo'=>'consulta'
						,'tipo'=>'textarea'
						,'validacion'=>"validate['required']"
						,'value'=>"Estoy interesado en el inmueble ".$ITEM['datos']['nombre']." con código: Venta (".$ITEM['datos']['codigo'].").\nPor favor contacten conmigo.\nGracias"
					)
				)			
		);
		
       	if($_SERVER['REQUEST_METHOD']=='POST'){
			
			$inmueble = select_fila(
					"id,nombre,codigo,contacto"
					,"productos_items"
					,"where id='".$_GET['id']."' and  visibilidad='1' order by id asc limit 0,100"
					,0
					,array(
						'contacto'=>array('sub_select_fila'=>array(
													'campos'=>"id,nombre,email"
													,'tabla' =>"clientes"
													,'donde' =>"where id='{contacto}' "
													,'debug' =>0
													)
							)  				
					) 		
			);			
			//body_mensaje
			$body_mensaje="";
			foreach($FORM['campos'] as $CAMP){
				$data_insert[$CAMP['campo']]=$_POST[$CAMP['campo']];
				switch($CAMP['tipo']){
					case "input_text": $body_mensaje.="<tr><td><b>".$CAMP['label']."</b> :</td><td>".$_POST[$CAMP['campo']]."</td></tr>"; break;
					case "textarea": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label']."</b> :</td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']]."</td></tr>"; break;
				}
			}
			//body_administrador			
			$body_administrador ="";
			$body_administrador.="<br>Hola ".$inmueble['contacto']['nombre']."<br><br>";
			$body_administrador.="Desde la página del inmueble \"".$inmueble['nombre']."\", han enviado la siguiente consulta<br><br>";
			$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0>";
			$body_administrador.="<tr><td style='width:120px;'></td><td></td></tr>";								
			$body_administrador.="<tr><td><b>Inmueble</b> :</td><td>".$inmueble['nombre']."</td></tr>";
			$body_administrador.="<tr><td><b>Código</b> :</td><td>".$inmueble['codigo']."</td></tr>";				
			$body_administrador.=$body_mensaje;		
			$body_administrador.="</table><br><br><br>";			
			$body_administrador.=$body_firma;
			//email_administrador
			$email_administrador=enviar_email(
							array(
							'emails'=>array_merge($PARAMETROS_EMAIL['emailsAdmin'],array($inmueble['contacto']['email']))
							,'Subject'=>'Han enviado una consulta sobre "'.$inmueble['nombre'].'"'
							,'body'=>$body_administrador
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
			//body_cliente			
			$body_cliente="<br>Hola ".$_POST['nombre']."<br><br>";
			$body_cliente.="Desde la página del inmueble \"".$inmueble['nombre']."\", has enviado la siguiente consulta<br><br>";
			$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0 style=font-size:11px;font-family:Arial;'>";	
			$body_cliente.="<tr><td style='width:120px;'></td><td></td></tr>";					
			$body_cliente.="<tr><td><b>Inmueble</b> :</td><td>".$inmueble['nombre']."</td></tr>";
			$body_cliente.=$body_mensaje;
			$body_cliente.="</table><br><br><br>";						
			$body_cliente.="Gracias por su consulta en breve nos estaremos comunicando con usted.<br><br><br>";
			$body_cliente.=$body_firma;
			//email_cliente
			$email_cliente=enviar_email(
							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>$inmueble['nombre']
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
										,'id_contacto'=>$inmueble['contacto']['id']
										,'id_item'=>$_GET['id']
										,'visibilidad'=>'1'	
										));
			//insert							
			$insertado=insert(
							$data_insert            
							,"consultas"
							,0
							);
			
			crear_email_debug(array(
								"EMAIL PARA USUARIO"=>$email_cliente['debug'],
								"EMAIL PARA SOCIO Y ADMINISTRADOR"=>$email_administrador['debug']
								),"../../debug/emails_consultas.html");
							
			if( $email_cliente['todos'] and $email_administrador['todos'] ){
		
				if($FORM['ajax']){
				
					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
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
								));	
								
				} else {			
				
					$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['error'];
					$_SESSION[$FORM['nombre'].'_tipo_mensaje']='error';				
					redir($SERVER['BASE'].procesar_url($FORM['action']));								
					
				}						
			
			}

			
		}

	
	
	}


/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/


		/**********************************************/
		/***************   RECOMENDAR   ***************/
		/**********************************************/
		if(
			(in_array($_GET['modulo'],array("home","pagina","items","item","pagina-formulario"))) or 
			($_GET['mode']=='form' and $_GET['tab']=='recomendar' ) 
		){
	
		
		$FORM=$FORMULARIO['recomendar']=array(
				'nombre'=>'recomendar'
				,'action'=>'ajax.php?mode=form&tab=recomendar'
				//,'action'=>'index.php?modulo=item&tab=productos&id='.$_GET['id']
				,'ajax'=>'1'
				,'exito'=>'Gracias por recomendar '.$PARAMETROS_EMAIL['nombre_web']
				,'error'=>'Ocurrió un error en el proceso de envio'				
				,'campos'=>array(
					array(
						'label'=>'Nombre'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required'] autoinput"					
						,'value'=>'nombre'
					)						
					,array(
						'label'=>'Email'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email'] autoinput"					
						,'value'=>'email'
					)

				)			
		);
		
       	if($_SERVER['REQUEST_METHOD']=='POST'){
					
			//body_mensaje
			$body_mensaje="";
			foreach($FORM['campos'] as $CAMP){
				$data_insert[$CAMP['campo']]=$_POST[$CAMP['campo']];
				switch($CAMP['tipo']){
					case "input_text": $body_mensaje.="<tr><td><b>".$CAMP['label']."</b> :</td><td>".$_POST[$CAMP['campo']]."</td></tr>"; break;
					case "textarea": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label']."</b> :</td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']]."</td></tr>"; break;
				}
			}
////////////body_administrador			
			$body_administrador ="";
			$body_administrador.="<br>Desde la web, han enviado una recomendación a:<br><br>";
			$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
			$body_administrador.=$body_mensaje;		
			$body_administrador.="</table><br><br>";			
			//email_administrador
			$email_administrador=enviar_email(
							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Han enviado una Recomendación desde '.$PARAMETROS_EMAIL['url_web']
							,'body'=>$body_administrador
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
////////////body_cliente
			$body_cliente ="";		
			$body_cliente.="<br>Hola ".$_POST['nombre']."<br><br>";
			$body_cliente.="Un amigo te recomienda que conozcas la web de ".$PARAMETROS_EMAIL['nombre_web']." <a href='".$PARAMETROS_EMAIL['url_web']."'>".$PARAMETROS_EMAIL['url_web']."</a><br><br><br>";
			$body_cliente.="Gracias.<br><br><br>";
			$body_cliente.=$body_firma;
			//email_cliente
			$email_cliente=enviar_email(
							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>"Te recomiendan entrar a ".$PARAMETROS_EMAIL['url_web']
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
							,"recomendar"
							,0
							);
			
			crear_email_debug(array(
									"PARA A QUIEN LE RECOMENDAMOS"=>$email_cliente['debug'],
									"PARA ADMINISTRADOR"=>$email_administrador['debug']
								),"../../debug/emails_recomendar.html");
							
			if( $email_cliente['todos'] and $email_administrador['todos'] ){
		
				if($FORM['ajax']){
				
					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
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
								));	
								
				} else {			
				
					$_SESSION[$FORM['nombre'].'_mensaje']=$FORM['error'];
					$_SESSION[$FORM['nombre'].'_tipo_mensaje']='error';				
					redir($SERVER['BASE'].procesar_url($FORM['action']));								
					
				}						
			
			}

			
		}

	
	
	}
	
	
?>