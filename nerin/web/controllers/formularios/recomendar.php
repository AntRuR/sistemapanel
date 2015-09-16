<?php //á

include_once("formularios/formularios.php");

$FORM=$OBJECT[$PARAMS['conector']]=array(

	'nombre'         =>$PARAMS['conector']
	//,'titulo'      =>'Recomienda a un amigo'
	,'legend'        =>'Recomienda'
	,'ajax'          =>'1'
	,'action'        =>'ajax.php?mode=form&tab='.$PARAMS['conector'].'&name='.$PARAMS['conector']	
	//	,'url'       =>'index.php?modulo=app&tab=home'
	,'exito'         =>'Su recomendación ha sido enviada con éxito'
	,'error'         =>'Ocurrió un error en al enviar su recomendación'				
	//	,'submit'    =>' type="image" src="'.$SERVER['BASE'].THEME_PATH.'img/ico_login.jpg" '
	,'submit'        =>' type="submit" value="Recomendar" class="btn btn-primary btn-sm" '
	//	,'submiting' =>' src="'.$SERVER['BASE'].THEME_PATH.'img/ico_enviando.jpg" '					
	//,'pie'         =>'los campos con * son obligatorios'
	,'tabla'         =>'recomendar'
	,'campos'=>[							
		'nombre_amigo'=>[
			'label'      =>'',
			'validacion' =>"required",
			'placeholder'=>'Nombre de tu Amigo',
		],						
		'email_amigo'=>[
			'label'      =>'',
			'validacion' =>"required email",
			'placeholder'=>'Email de tu Amigo',							
		],
		'nombre_pagina'=>[
			'label'      =>'Título de la página',
			'tipo'       =>'hidden',
			'value'      =>'Nering',
		],	
		'url_pagina'=>[
			'label'      =>'Dirección de la página',
			'tipo'       =>'hidden',
			'value'      =>$SERVER['BASE'].$SERVER['url'],
		]
	],		
				
);
					
	
$FORM=pre_proceso_form($FORM);

// prin($FORM);
	
if($_SERVER['REQUEST_METHOD']=='POST'){

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
	$body_administrador.="<br>Desde la página <b>".$_POST['url_pagina']."</b>, han enviado una recomendación con los siguientes datos:<br><br>";
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
	//print_r($email_administrador);			
////////////body_cliente
	/*
	$body_cliente ="";		
	$body_cliente.="<br>Hola <b>".$_POST['nombre_usuario']."</b><br>";
	$body_cliente.="<br>Desde la página <b>".$_POST['url_pagina']."</b>, has enviado una recomendación para <b>".$_POST['nombre_amigo']."</b> con los siguientes datos:<br><br>";
	$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
	$body_cliente.=$body_mensaje;		
	$body_cliente.="</table><br><br>";
	$body_cliente.="Gracias por recomendar ".$PARAMETROS_EMAIL['nombre_web'].".<br><br><br>";
	$body_cliente.=$body_firma;
	//email_cliente
	$email_cliente=enviar_email(
					array(
					'emails'=>array($_POST['email_usuario'])
					,'Subject'=>'Has enviado una Recomendación desde '.$PARAMETROS_EMAIL['url_web']
					,'body'=>$body_cliente
					//,'From'=>'info@afarmach.com'
					//,'FromName'=>'Afarmach'							
					//,'Logo'=>''
					)
				);							
	*/			
////////////body_amigo
	$body_amigo ="";		
	$body_amigo.="<br>Hola ".$_POST['nombre_amigo']."<br><br>";
	$body_amigo.="<b>".(($_POST['nombre_usuario'])?$_POST['nombre_usuario']:"Un Amigo")."</b> te recomienda visitar esta página <a href='".$_POST['url_pagina']."'>".$_POST['nombre_pagina']."</a><br><br><br>";
	$body_amigo.="Gracias.<br><br><br>";
	$body_amigo.=$body_firma;
	//email_cliente
	$email_amigo=enviar_email(
					array(
					'emails'=>array($_POST['email_amigo'])
					,'Subject'=>($_POST['nombre_usuario'])?$_POST['nombre_usuario']." te recomienda":"Un Amigo te recomienda visitar : ".$_POST['titulo']
					,'body'=>$body_amigo
					//,'From'=>'info@afarmach.com'
					//,'FromName'=>'Afarmach'							
					//,'Logo'=>''
					)
				);	
	//print_r($email_amigo);			
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
							//"EMAIL QUE SE LE ENVIA AL USUARIO"=>$email_cliente['debug'],
							"EMAIL QUE SE LE ENVIA AL AMIGO"=>$email_amigo['debug'],
							"EMAIL QUE SE LE ENVIA AL ADMINISTRADOR"=>$email_administrador['debug']
						),"../../debug/emails_".$FORM['nombre'].".html");
					
	if( $email_amigo['todos'] and $email_administrador['todos'] ){
				
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

	
}				

$OBJECT[$PARAMS['conector']]=$FORM;

// prin($FORM);




