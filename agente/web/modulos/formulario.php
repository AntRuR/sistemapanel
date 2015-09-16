<?php //á

/**********************************************/
////////////////////////INCLUDES////////////////
/**********************************************/

$INCLUDES['js'][]='js/mootools-1.2.3.1-more.js';
$INCLUDES['js'][]='js/lang/es.js';
$INCLUDES['js'][]='js/formcheck.js';
$INCLUDES['css'][]='css/theme/blue/formcheck.css';

/**********************************************/
///////////////home_bloque_buscador.php//////////
/**********************************************/

include("buscador.php");

/**********************************************/
///////////////formulario_main.php//////////////
/**********************************************/

$PARAMETROS_EMAIL['From']='informes@agenciainmobiliariaperu.com';
$PARAMETROS_EMAIL['FromName']='Agencia Inmobiliaria Perú';
$PARAMETROS_EMAIL['Logo']=$vars['REMOTE']['httpfiles']."/".THEME_PATH.'img/logo.jpg';
$PARAMETROS_EMAIL['emailsAdmin']=array(
										"guillermolozan@gmail.com"
										,"guillermo_lozan@hotmail.com"
										,"wtavara@yahoo.es"
									  );

	

	switch($_GET['tab']){	

	/**********************************************/
	/**************   RECOMENDAR   ****************/
	/**********************************************/
		
	case "recomendar": 
	
		
			$FORMULARIO['contacto']['campos']=array(
			
					array(
						'label'=>'Nombre*'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required']"
						)
					,array(
						'label'=>'E-mail*'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"
					)

				);
		

       	if($_SERVER['REQUEST_METHOD']=='POST'){

			$body_administrador="
			Desde la página web, se ha enviado un e-mail con los siguientes datos

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>E-mail</b>    : ".$_POST['email']."		

			";

			$email_administrador_confirmacion=enviar_email(

							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Han enviado una inscripción a boletin en la página web'
							,'body'=>nl2br($body_administrador)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
						

			$body_cliente="
			Te has inscrito al boletín electrónico de Agencia Inmobiliaria

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>E-mail</b>    : ".$_POST['email']."		

			Gracias por inscribirte en breve nos estaremos comunicando contigo.
			";



			$email_cliente_confirmacion=enviar_email(

							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>'Gracias por inscribirte'
							,'body'=>nl2br($body_cliente)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)

						);						

			
			$insertado=insert(array(	
								'fecha_creacion'=>"now()"	
								,'fecha_edicion'=>"now()"
								,'fecha'=>"now()"	
								,'nombre'=>$_POST['nombre']	
								,'email'=>$_POST['email']	
								)            
							,"contacto"
							,0);

										
			if( $SERVER['LOCAL'] or ( $email_cliente_confirmacion['todos'] and $email_administrador_confirmacion['todos'] ) ){
			
				redir($SERVER['BASE'].procesar_url('index.php?modulo=formulario&tab=contacto&mensaje=enviado'));
			
			}		

		}
		
		if($_GET['mensaje']=='enviado'){
		
			$FORMULARIO['contacto']['gracias']="Gracias por inscribirte en breve nos estaremos comunicando contigo
												<a href='".procesar_url('index.php?modulo=home')."'>volver a Inicio</a>";			
		
		}
		
	$HEAD['titulo'] = procesar_titulo("Incripción a Boletín");
		
	$HEAD['meta_keywords'] = procesar_keywords("Incripción a Boletín");
		
	break;	
	
	/**********************************************/
	/**************    BOLETIN    *****************/
	/**********************************************/
		
	case "boletin": 
	
		
			$FORMULARIO['boletin']['campos']=array(
			
					array(
						'label'=>'Nombre*'
						,'campo'=>'nombre'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required']"
						)
					,array(
						'label'=>'E-mail*'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"
					)

				);
		

       	if($_SERVER['REQUEST_METHOD']=='POST'){

			$body_administrador="
			Desde la página web, se ha enviado un e-mail con los siguientes datos

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>E-mail</b>    : ".$_POST['email']."		

			";

			$email_administrador_confirmacion=enviar_email(

							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Han enviado una inscripción a boletin en la página web'
							,'body'=>nl2br($body_administrador)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
						

			$body_cliente="
			Te has inscrito al boletín electrónico de Agencia Inmobiliaria

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>E-mail</b>    : ".$_POST['email']."		

			Gracias por inscribirte en breve nos estaremos comunicando contigo.
			";



			$email_cliente_confirmacion=enviar_email(

							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>'Gracias por inscribirte'
							,'body'=>nl2br($body_cliente)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)

						);						

			
			$insertado=insert(array(	
								'fecha_creacion'=>"now()"	
								,'fecha_edicion'=>"now()"
								,'fecha'=>"now()"	
								,'nombre'=>$_POST['nombre']	
								,'email'=>$_POST['email']	
								)            
							,"contacto"
							,0);

										
			if( $SERVER['LOCAL'] or ( $email_cliente_confirmacion['todos'] and $email_administrador_confirmacion['todos'] ) ){
			
				redir($SERVER['BASE'].procesar_url('index.php?modulo=formulario&tab=contacto&mensaje=enviado'));
			
			}		

		}
		
		if($_GET['mensaje']=='enviado'){
		
			$FORMULARIO['contacto']['gracias']="Gracias por inscribirte en breve nos estaremos comunicando contigo
												<a href='".procesar_url('index.php?modulo=home')."'>volver a Inicio</a>";			
		
		}
		
	$HEAD['titulo'] = procesar_titulo("Incripción a Boletín");
		
	$HEAD['meta_keywords'] = procesar_keywords("Incripción a Boletín");
		
	break;	


	
	/**********************************************/
	/***************   CONTACTO   *****************/
	/**********************************************/
		
	case "contacto": 
	
		
			$FORMULARIO['contacto']['campos']=array(
			
					array(
						'label'=>'Nombre*'
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
						'label'=>'E-mail*'
						,'campo'=>'email'
						,'tipo'=>'input_text'
						,'validacion'=>"validate['required','email']"
					)

					,array(
						'label'=>'Dirección'
						,'campo'=>'direccion'
						,'tipo'=>'input_text'
					)

					,array(
						'label'=>'Consulta*'
						,'campo'=>'consulta'
						,'tipo'=>'textarea'
						,'validacion'=>"validate['required']"
					)

				

				);
		

       	if($_SERVER['REQUEST_METHOD']=='POST'){

			$body_administrador="
			Desde la página web, se ha enviado un e-mail con los siguientes datos

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>Empresa</b>    : ".$_POST['empresa']."
			<b>Teléfono</b>    : ".$_POST['telefono']."
			<b>E-mail</b>    : ".$_POST['email']."		
			<b>Dirección</b>    : ".$_POST['direccion']."
			<b>Consulta</b>
			".$_POST['consulta']."

			";

			$email_administrador_confirmacion=enviar_email(

							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Han enviado una consulta en la página web'
							,'body'=>nl2br($body_administrador)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);
						

			$body_cliente="
			Has enviado la siguiente consulta a Afarmach

			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>Empresa</b>    : ".$_POST['empresa']."
			<b>Teléfono</b>    : ".$_POST['telefono']."
			<b>E-mail</b>    : ".$_POST['email']."		
			<b>Dirección</b>    : ".$_POST['direccion']."
			<b>Consulta</b>
			".$_POST['consulta']."

			Gracias por su consulta en breve nos estaremos comunicando con usted.
			";



			$email_cliente_confirmacion=enviar_email(

							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>'Gracias por su consulta'
							,'body'=>nl2br($body_cliente)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)

						);						

			
			$insertado=insert(array(	
								'fecha_creacion'=>"now()"	
								,'fecha_edicion'=>"now()"
								,'fecha'=>"now()"	
								,'nombre'=>$_POST['nombre']	
								,'empresa'=>$_POST['empresa']	
								,'telefono'=>$_POST['telefono']	
								,'email'=>$_POST['email']	
								,'direccion'=>$_POST['direccion']	
								,'comentario'=>$_POST['consulta']	
								)            
							,"contacto"
							,0);

										
			if( $SERVER['LOCAL'] or ( $email_cliente_confirmacion['todos'] and $email_administrador_confirmacion['todos'] ) ){
			
				redir($SERVER['BASE'].procesar_url('index.php?modulo=formulario&tab=contacto&mensaje=enviado'));
			
			}		

		}
		
		if($_GET['mensaje']=='enviado'){
		
			$FORMULARIO['contacto']['gracias']="Gracias por su consulta en breve nos estaremos comunicando con usted
												<a href='".procesar_url('index.php?modulo=home')."'>volver a Inicio</a>";			
		
		}
		
	$HEAD['titulo'] = procesar_titulo("Contacto");
		
	$HEAD['meta_keywords'] = procesar_keywords("Contacto");
		
	break;	
	
	/**********************************************/
	/***************   CONSULTA   *****************/
	/**********************************************/
		
	case "consulta": 

		$FORMULARIO['dejar-consulta']['emails']=array("guillermo_lozan@hotmail.com,wtavara@yahoo.es");
		$FORMULARIO['dejar-consulta']['campos']=array(
		
				array(
					'label'=>'Nombre*'
					,'campo'=>'nombre'
					,'tipo'=>'input_text'
					,'validacion'=>"validate['required']"					
				)						
				,array(
					'label'=>'Email*'
					,'campo'=>'email'
					,'tipo'=>'input_text'
					,'validacion'=>"validate['required','email']"					
				)						
				,array(
					'label'=>'Testimonio*'
					,'campo'=>'consulta'
					,'tipo'=>'textarea'
					,'validacion'=>"validate['required']"					
				)
			
		);
		
		
       	if($_SERVER['REQUEST_METHOD']=='POST'){
			
			$body_administrador="
			Desde la página web, se ha enviado un e-mail con los siguientes datos
			
			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>Email</b>    : ".$_POST['email']."
			<b>Testimonio</b>
			".$_POST['consulta']."
			
			Gracias por su testimonio en breve nos estaremos comunicando con usted.
			";

			$email_administrador_confirmacion=enviar_email(
							array(
							'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
							,'Subject'=>'Han enviado un testimonio en la página web'
							,'body'=>nl2br($body_administrador)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)

						);
						
						
			$body_cliente="
			Has enviado la siguiente consulta a Afarmach
			
			<b>Nombre</b>    : ".$_POST['nombre']."
			<b>Email</b>    : ".$_POST['email']."
			<b>Consulta</b>
			".$_POST['consulta']."
			
			Gracias por su testimonio en breve nos estaremos comunicando con usted.
			";

			$email_cliente_confirmacion=enviar_email(
							array(
							'emails'=>array($_POST['email'])
							,'Subject'=>'Gracias por su testimonio'
							,'body'=>nl2br($body_cliente)
							//,'From'=>'info@afarmach.com'
							//,'FromName'=>'Afarmach'							
							//,'Logo'=>''
							)
						);						
						
			$insertado=insert(
							array(	
								'fecha_creacion'=>"now()"	
								,'fecha_edicion'=>"now()"	
								,'fecha'=>"now()"	
								,'nombre'=>$_POST['nombre']	
								,'email'=>$_POST['email']	
								,'comentario'=>$_POST['consulta']	
								,'visibilidad'=>'0'	
								)            
							,"testimonios"
							,0
							);
							
			if( $SERVER['LOCAL'] or ( $email_cliente_confirmacion['todos'] and $email_administrador_confirmacion['todos'] ) ){
		
				redir($SERVER['BASE'].procesar_url('index.php?modulo=formulario&tab=consulta&mensaje=enviado'));			

			}

		}		
		
		
		if($_GET['mensaje']=='enviado'){
		
			$FORMULARIO['consulta']['gracias']="Gracias dejar su testimonio en breve nos estaremos comunicando con usted
			<a href='".procesar_url('index.php?modulo=publicacion&tab=testimonios')."'>volver a Testimonios</a>";			

		}
		

	$HEAD['titulo'] = procesar_titulo("Deja tu Testimonio");

	$HEAD['meta_keywords'] = procesar_keywords("Testimonio");
			
	break;		
	}
		
?> 