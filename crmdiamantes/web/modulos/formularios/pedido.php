<?php

// VERIFICAR LOGIN //
web_verificar_sesion(array(
							'on_true'	=> NULL,
							'on_false'	=> $_SERVER['REQUEST_URI']
							));
							
/////////////////////

/*
$ids=array();	
foreach($_SESSION['carrito'] as $car){ $ids[]="'".$car['i']."'";	}
//prin($ids);
$num_delivery= contar(
        "productos_items"
        ,"where id in (". ( implode(",",$ids)) .") and  id_grupo='1' and visibilidad='1'"
        ,0);
		
$num_no_delivery= contar(
        "productos_items"
        ,"where id in (". ( implode(",",$ids)) .") and  id_grupo!='1' and visibilidad='1'"
        ,0);		


$pd_array0=array();		
$pd_array=array();		
$pd_array=select(
		"nombre"
        ,"productos_items"
        ,"where id in (". ( implode(",",$ids)) .") and  id_grupo='1' and visibilidad='1'"
        ,0);	
foreach($pd_array as $pda){
	$pd_array0[]="<b>".$pda['nombre']."</b>";
	}		
	

$productos_delivery="<small id='antes_rd'>El carrito de compras contiene ".(($num_delivery>1)?'los siguientes productos :':'el producto :' ).implode(", ",$pd_array0)." de <strong>Regalos Delivery</strong>, para lo cual deberá ingresar los siguientes datos necesarios para el envío.<a>Ingresar datos</a></small>
<small id='despues_rd' style='display:none;'>Datos del lugar de envío y persona que recibirá Regalo Delivery</small>";
		
$tiene_de_delivery=($num_delivery>0)?1:0;		

$tiene_de_nodelivery=($num_no_delivery>0)?1:0;



$TARJETAS= select(
        "id,file,nombre,fecha_creacion"
        ,"tarjetas_fotos"
        ,"where 1 and  visibilidad='1' order by id asc limit 0,100"
        ,0
        ,array(
        	               
                'carpeta'=>'tarfot_imas'
                ,'tamano'=>'2'
                ,'dimensionado'=>'240x150'
                ,'centrado'=>'1'
                ,'get_atributos'=>array('get_atributos'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            ,'dimensionado'=>'{dimensionado}'
                                            ,'centrado'=>'{centrado}'
                                            )
                                        )
                ,'get_archivo'=>array('get_archivo'=>array(
                                            'carpeta'=>'{carpeta}'
                                            ,'fecha'=>'{fecha_creacion}'
                                            ,'file'=>'{file}'
                                            ,'tamano'=>'{tamano}'
                                            )
                                        )
              	    
    
              )
        );


	$NOOB=array(
			'label'=>'tarjetas',	
			'width'=>"420",
			'height'=>"150",
			'inter_col'=>"7",
			'itemsporpagina'=>"1x1",
			'vacio'=>"aún no hay tarjetas",
			'titulo'=>"",	
//			'interval'=>"7000",	
			'autoplay'=>"false",//[true,false]
			'mode'=>"horizontal", //[horizontal,vertical]	
			'buttons'=>"1"
			);	

	$REMOOZZ=1;	

	$noobst=$NOOB;
	$noobst['label']=$NOOB['label'];
	$noobst['interval']=$ii*1000+7000;
	$noobst['items']=$TARJETAS;
		
	$TARS=web_render_slider_preproceso($noobst);	
	
*/	
	
	
	$GEO['departamentos'] = select(
			"id,nombre"
			,"geo_departamentos"
			,"where 1 and  visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
				'selected'=>''					   
				)
			);

		
$CAMPOS2A=array(	
	'envgen_nombre'=>array(
		'label'=>'Nombre'
		,'campo'=>array('envgen_nombre')
		,'tipo'=>'input_text'
		,'before'=>'Datos del lugar de envío y persona que recibirá los productos'
		,'validacion'=>"validate['required']"
	)
	,'envgen_apellido_paterno'=>array(
		'label'=>'Apellido Paterno'
		,'campo'=>array('envgen_apellido_paterno')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['required']"
	)
	,'envgen_apellido_materno'=>array(
		'label'=>'Apellido Materno'
		,'campo'=>array('envgen_apellido_materno')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['required']"
	)	
	,'envgen_direccion'=>array(
		'label'=>'Dirección Exacta'
		,'campo'=>array('envgen_direccion')
		,'tipo'=>'input_text'
	)
	,'envgen_localizacion'=>array(
		'label'=>'Localización'
		,'campo'=>array('envgen_departamento','envgen_provincia','envgen_distrito')
		,'value'=>array('','','')
		,'control'=>'envgen_localizacion'
	)	
	,'envgen_telefono_fijo'=>array(
		'label'=>'Teléfono'
		,'campo'=>array('envgen_telefono_fijo')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['phone']"
	)
	,'envgen_telefono_celular'=>array(
		'label'=>'Celular'
		,'campo'=>array('envgen_telefono_celular')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['phone']"
	)
	,'envgen_ref_lugar'=>array(
		'label'=>'Referente al Lugar'
		,'campo'=>array('envgen_ref_lugar')
		,'tipo'=>'textarea'
		,'after'=>"favor sea especifico con las indicaciones, avenidas, centros comerciales, entre otros."
	)
	,'envgen_fecha_entrega'=>array(
		'label'=>'Fecha de entrega'
		,'campo'=>array('envgen_fecha_entrega')
		,'tipo'=>'input_fecha'
		,'before'=>'Otras consideraciones para el envio'
		,'validacion'=>"validate['required']"
		,'rango'=>'now,+1 year'
	)
	,'envgen_intervalo_entrega'=>array(
		'label'=>'Intervalo de entrega'
		,'campo'=>array('envgen_intervalo_entrega')
		,'tipo'=>'input_combo'
		,'opciones'=>array('1'=>'Entre 7am y 10:30am','2'=>'Entre 9am y 11:30am','3'=>'Entre 8am y 12:30am','4'=>'Entre 2pm y 5:30pm','5'=>'Entre 6:00pm y 8pm','6'=>'Entre 6:00am y 8am (Horario Especial)')
	)
	,'envgen_si_empresa'=>array(
		'label'=>'Si el lugar de entrega es una EMPRESA indicar el área y anexo de la persona agasajada.'
		,'campo'=>array('envgen_si_empresa')
		,'tipo'=>'textarea'
	)
	,'envgen_comentario'=>array(
		'label'=>'Comentario'
		,'campo'=>array('envgen_comentario')
		,'tipo'=>'textarea'
		,'after'=>"Ingrese un comentario acerca de la orden (sugerencia, anotacion, observacion, etc)"
	)

);
	
/*	
$CAMPOS2=array(	
	'env_nombre'=>array(
		'label'=>'Nombre del agasajado(a)'
		,'campo'=>array('env_nombre')
		,'tipo'=>'input_text'
		,'before'=>$productos_delivery
		,'validacion'=>"validate['required']"
		,'iniciodiv'=>'regalos_delivery'
	)
	,'env_apellidos'=>array(
		'label'=>'Apellido del agasajado(a)'
		,'campo'=>array('env_apellidos')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['required']"
	)
	,'env_direccion'=>array(
		'label'=>'Dirección Exacta'
		,'campo'=>array('env_direccion')
		,'tipo'=>'input_text'
	)
	,'env_localizacion'=>array(
		'label'=>'Localización'
		,'campo'=>array('env_departamento','env_provincia','env_distrito')
		,'value'=>array('','','')
		,'control'=>'env_localizacion'
	)	
	,'env_telefono_fijo'=>array(
		'label'=>'Teléfono'
		,'campo'=>array('env_telefono_fijo')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['phone']"
	)
	,'env_telefono_celular'=>array(
		'label'=>'Celular'
		,'campo'=>array('env_telefono_celular')
		,'tipo'=>'input_text'
		,'validacion'=>"validate['phone']"
	)
	,'env_ref_lugar'=>array(
		'label'=>'Referente al Lugar'
		,'campo'=>array('env_ref_lugar')
		,'tipo'=>'textarea'
		,'after'=>"favor sea especifico con las indicaciones, avenidas, centros comerciales, entre otros."
	)
	,'env_fecha_entrega'=>array(
		'label'=>'Fecha de entrega'
		,'campo'=>array('env_fecha_entrega')
		,'tipo'=>'input_fecha'
		,'before'=>'Otras consideraciones para el envio'
		,'validacion'=>"validate['required']"
		,'rango'=>'now,+1 year'
	)
	,'env_intervalo_entrega'=>array(
		'label'=>'Intervalo de entrega'
		,'campo'=>array('env_intervalo_entrega')
		,'tipo'=>'input_combo'
		,'opciones'=>array('1'=>'Entre 7am y 10:30am','2'=>'Entre 9am y 11:30am','3'=>'Entre 8am y 12:30am','4'=>'Entre 2pm y 5:30pm','5'=>'Entre 6:00pm y 8pm','6'=>'Entre 6:00am y 8am (Horario Especial)')
	)
	,'env_si_empresa'=>array(
		'label'=>'Si el lugar de entrega es una EMPRESA indicar el área y anexo de la persona agasajada.'
		,'campo'=>array('env_si_empresa')
		,'tipo'=>'textarea'
	)
	,'env_tarjeta_regalo'=>array(
		'label'=>'Tarjeta de Regalo'
		,'campo'=>array('env_tarjeta_regalo')
		,'value'=>array('')
		,'control'=>'env_tarjeta_regalo'
		,'after'=>"Seleccione una tarjeta<br>Nota: se entregará una tarjeta por toda la orden"
	)
	,'env_dedicatoria'=>array(
		'label'=>'Dedicatoria'
		,'campo'=>array('env_dedicatoria')
		,'tipo'=>'textarea'
		,'validacion'=>"validate['required']"
		,'after'=>"Ingrese un mensaje de saludo maximo 5 líneas"
	)
	,'env_comentario'=>array(
		'label'=>'Comentario'
		,'campo'=>array('env_comentario')
		,'tipo'=>'textarea'
		,'after'=>"Ingrese un comentario acerca de la orden (sugerencia, anotacion, observacion, etc)"
	)
	,'env_regalo_sorpresa'=>array(
		'label'=>'Enviar Regalo Sopresa'
		,'campo'=>array('env_regalo_sorpresa')
		,'tipo'=>'input_radio'
		,'after'=>'Regalo Delivery, <a>globalvsc.com</a> garantiza un despacho eficiente de sus regalos razón por la cual contactará al receptor de mismo para confirmar sus datos .En caso usted NO DESEA que contactemos al receptor para que su compra se una SORPRESA marque esta <b>opción</b> (revise nuestras <a>políticas</a> de reparto cuando escoja esta <b>opción</b>).'
		,'opciones'=>array('1'=>'Si','0'=>'No')
		,'findiv'=>'1'
	)	
);
*/


$CAMPOS3=array(	
	'pag_direccion'=>array(
		'label'=>'Dirección de la facturación'
		,'campo'=>array('pag_direccion')
		,'tipo'=>'input_text'
	)
	,'pag_direccion_ref'=>array(
		'label'=>'Referente al Lugar'
		,'campo'=>array('pag_direccion_ref')
		,'tipo'=>'textarea'
		,'after'=>'Favor ser específico con las indicaciones, avenidas, centros'
	)	

);		

$CAMPOS5=array(	
	'id_usuario'=>array(
		'label'=>'Usuario'
		,'campo'=>array('id_usuario')
		,'tipo'=>'input_hidden'
		,'value'=>array($_SESSION['login']['id'])
	),
	'pedido'=>array(
		'label'=>'Pedido'
		,'campo'=>array('pedido')
		,'tipo'=>'textarea_hidden'
		,'value'=>array(render_pedido($_SESSION['carrito']))
	)
);

$CAMPOS=array_merge($CAMPOS2A,$CAMPOS3,$CAMPOS5);

//prin($CAMPOS);
					
			$FORM=$FORMULARIO[$PARAMS['conector']]=array(
					'nombre'=>$PARAMS['conector']
					,'titulo'=>"Pedido"
					//,'legend'=>"Datos de Envio de Pedido"					
					,'legend'=>"Información necesaria para el envio"
					,'ajax'=>'1'
					,'action'=>'ajax.php?mode=form&tab='.$PARAMS['this'].'&name='.$PARAMS['conector']					
					//,'action'=>'index.php?modulo=pagina-formulario&tab=contacto'
					,'exito'=>'Su pedido nos ha sido enviado.'
					,'error'=>'Ocurrió un error en al enviar su pedido'		
					,'submit'=>' type="submit" value="Enviar Pedido" '	
					,'pie'=>'los campos con * son obligatorios'

/*CAMPOS-BEGIN*/
,'tabla'=>'pedidos'
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
							setTimeout(\"\$('mensaje_\"+json.n+\"').destroy(); window.location.reload(true); \",7000);							
							
					"			
	
			);
			
			
		
			
			if($_SERVER['REQUEST_METHOD']=='POST'){
						
				//body_mensaje
				$body_mensaje="";
				foreach($FORM['campos'] as $CAMP){
					foreach($CAMP['campo'] as $CM){
						$data_insert[$CM]=$_POST[$CM];
					}
					switch($CAMP['tipo']){
						case "input_text":	$body_mensaje.="<tr><td nowrap><b>".$CAMP['label'].":</b></td><td style='padding-left:10px;'>".$_POST[$CAMP['campo']['0']]."</td></tr>"; break;
						case "textarea": case "textarea_hidden": $body_mensaje.="<tr><td colspan=2><b>".$CAMP['label'].":</b></td></tr><tr><td colspan=2>".$_POST[$CAMP['campo']['0']]."</td></tr>"; break;
					}
				}
	////////////body_administrador			
				$body_administrador ="";
				$body_administrador.="Desde la web, han enviado un pedido con los siguientes datos:<br><br>";
				$body_administrador.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_administrador.=$body_mensaje;		
				$body_administrador.="</table><br><br><br>";			
				//email_administrador
				$email_administrador=enviar_email(
								array(
								'emails'=>$PARAMETROS_EMAIL['emailsAdmin']
								,'Subject'=>'Pedido desde '.$PARAMETROS_EMAIL['url_web']
								,'body'=>$body_administrador
								//,'From'=>'info@afarmach.com'
								//,'FromName'=>'Afarmach'							
								//,'Logo'=>''
								)
							);
	////////////body_cliente
				$body_cliente ="";		
				$body_cliente.="<br>Hola ".$_POST['nombre']."<br><br>";
				$body_cliente.="Has enviado un pedido a ".$PARAMETROS_EMAIL['nombre_web']." con los siguienes datos:<br><br><br>";
				$body_cliente.="<table style='font:inherit;' cellspacing=0 cellpadding=0 border=0><tr><td style='width:120px;'></td><td></td></tr>";
				$body_cliente.=$body_mensaje;		
				$body_cliente.="</table><br><br>";					
				$body_cliente.="Gracias por enviar su pedido<br><br><br>";
				$body_cliente.=$body_firma;
				//email_cliente
				$email_cliente=enviar_email(
								array(
								'emails'=>array($_POST['reg_email'])
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
				
				if( $email_cliente['todos'] and $email_administrador['todos'] and $insertado['success'] ){
								
					unset($_SESSION['carrito']);
				
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
	
	
			} else {
			
			$HEAD['titulo'] = ucfirst($FORM['nombre'])." | ".$COMMON['datos_root']['titulo_web']; 			
			$HEAD['meta_keywords'] .= procesar_keywords($COMMON['datos_root']['titulo_web']);			 
			$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);	
			
			}			


?>