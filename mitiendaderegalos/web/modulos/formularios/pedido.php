<?php
//prin($_SESSION);
//VERIFICAR LOGIN //
//prin(dato("email","usuarios","where id='".$_SESSION['login']['id']."'"));
web_verificar_sesion(array(
							'on_true'	=> NULL,
							'on_false'	=> $_SERVER['REQUEST_URI']
							));
							
/////////////////////


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
		
$tiene_de_delivery=($num_delivery>0)?1:0;		

$tiene_de_nodelivery=($num_no_delivery>0)?1:0;	


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
	
//if($num_delivery>0){
	
	if($tiene_de_delivery and $tiene_de_nodelivery){
		$productos_delivery="<small id='antes_rd'>El carrito de compras contiene ".(($num_delivery>1)?'los siguientes productos :':'el producto :' ).implode(", ",$pd_array0)." de <strong>Regalos Delivery</strong>, para lo cual deberá ingresar los siguientes datos necesarios para el envío.<a id='regalos_delivery_link' href='#' onclick='$1(\"regalos_delivery\");$0(\"regalos_delivery_link\");return false;' rel='nofollow'>Ingresar datos</a></small>
		<small id='despues_rd' style='display:none;'>Datos del lugar de envío y persona que recibirá Regalo Delivery</small>";
	} elseif($tiene_de_delivery) {
		$productos_delivery="";
	} elseif($tiene_de_nodelivery){
		$productos_delivery="";
	}	

/*} else {
$productos_delivery=" de <strong>Regalos Delivery</strong>, para lo cual deberá ingresar los siguientes datos necesarios para el envío.<a>Ingresar datos</a></small>
<small id='despues_rd' style='display:none;'>Datos del lugar de envío y persona que recibirá Regalo Delivery</small>";	
}
*/

//prin($productos_delivery);			

//prin($num_delivery);
	

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
	
	
	
	
	$GEO['departamentos'] = select(
			"id,nombre"
			,"geo_departamentos"
			,"where 1 and  visibilidad='1' order by id asc limit 0,100"
			,0
			,array(
				'selected'=>array('match'=>array(
											'a'=>'{id}'
											,'b'=>'14'
											,'equal'=>'selected'
											,'else'=>''
											)
							   )				
				)
			);
			
	$GEO['provincias'] = select(
			"id,nombre"
			,"geo_provincias"
			,"where 1 and  visibilidad='1' and id_departamento='14' order by id asc limit 0,100"
			,0
			,array(
				'selected'=>array('match'=>array(
											'a'=>'{id}'
											,'b'=>'8'
											,'equal'=>'selected'
											,'else'=>''
											)
							   )				
				)
			);
			
	$GEO['distritos'] = select(
			"id,nombre"
			,"geo_distritos"
			,"where 1 and  visibilidad='1' and id_provincia='8' order by id asc limit 0,100"
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
	)
	,'envgen_apellido_paterno'=>array(
		'label'=>'Apellido Paterno'
		,'campo'=>array('envgen_apellido_paterno')
		,'tipo'=>'input_text'
	)
	,'envgen_apellido_materno'=>array(
		'label'=>'Apellido Materno'
		,'campo'=>array('envgen_apellido_materno')
		,'tipo'=>'input_text'
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
		,'validacion'=>"validate['required']"				
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
//		,'validacion'=>"validate['required']"
		,'rango_anio'=>(date('n')>10)?'now,+1 year':'now,now'
		//,'rango_mes'=>'now,+6 month'		
	)
	,'envgen_intervalo_entrega'=>array(
		'label'=>'Intervalo de entrega'
		,'campo'=>array('envgen_intervalo_entrega')
		,'tipo'=>'input_combo'
		,'opciones'=>array('1'=>'Entre 7am y 10:30am','2'=>'Entre 9am y 11:30am','3'=>'Entre 8am y 12:30am','4'=>'Entre 2pm y 5:30pm','5'=>'Entre 6:00pm y 8pm','6'=>'Entre 6:00am y 8am (Horario Especial)')
	)
	,'envgen_si_empresa'=>array(
		'label'=>'Si el lugar de entrega es una EMPRESA indicar el área y anexo de la persona que recibirá los productos.'
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
	
$CAMPOS2=array(	
	'env_nombre'=>array(
		'label'=>'Nombre del agasajado(a)'
		,'campo'=>array('env_nombre')
		,'tipo'=>'input_text'
		,'before'=>$productos_delivery
		//,'validacion'=>"validate['required']"
		,'iniciodiv'=>'regalos_delivery'
	)
	,'env_apellidos'=>array(
		'label'=>'Apellido del agasajado(a)'
		,'campo'=>array('env_apellidos')
		,'tipo'=>'input_text'
		//,'validacion'=>"validate['required']"
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
		,'validacion'=>"validate['required']"						
	)	
	,'env_telefono_fijo'=>array(
		'label'=>'Teléfono'
		,'campo'=>array('env_telefono_fijo')
		,'tipo'=>'input_text'
		//,'validacion'=>"validate['phone']"
	)
	,'env_telefono_celular'=>array(
		'label'=>'Celular'
		,'campo'=>array('env_telefono_celular')
		,'tipo'=>'input_text'
		//,'validacion'=>"validate['phone']"
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
		//,'validacion'=>"validate['required']"
		,'rango_anio'=>(date('n')>10)?'now,+1 year':'now,now'
		//,'rango_mes'=>'now,+6 month'
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
//		,'validacion'=>"validate['required']"
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



$CAMPOS3=array(	
	'pag_tipo_documento'=>array(
		'label'=>'¿Qué solicita?'
		,'campo'=>array('pag_tipo_documento')
		,'tipo'=>'input_radio'
		,'before'=>'Pago'
		,'opciones'=>array('1'=>'Boleta','2'=>'Factura')
	)
	,'pag_direccion'=>array(
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
	,'pag_factura_ruc'=>array(
		'label'=>'Factura RUC'
		,'campo'=>array('pag_factura_ruc')
		,'tipo'=>'input_text'
	)
	,'pag_factura_razonsocial'=>array(
		'label'=>'Factura Razón Social'
		,'campo'=>array('pag_factura_razonsocial')
		,'tipo'=>'input_text'
	)
	,'pag_factura_direccion'=>array(
		'label'=>'Factura Dirección'
		,'campo'=>array('pag_factura_direccion')
		,'tipo'=>'input_text'
	)
	,'pag_factura_localizacion'=>array(
		'label'=>'Localización'
		,'campo'=>array('pag_factura_departamento','pag_factura_provincia','pag_factura_distrito')
		,'value'=>array('','','')
		,'control'=>'pag_factura_localizacion'			
	)
	,'pag_factura_contacto'=>array(
		'label'=>'Contacto'
		,'campo'=>array('pag_factura_contacto')
		,'tipo'=>'input_text'
	)
	,'pag_factura_telefono'=>array(
		'label'=>'Teléfono'
		,'campo'=>array('pag_factura_telefono')
		,'tipo'=>'input_text'
	)
);		


$CAMPOS5=array(
	'gastos_envio'=>array(
		'label'=>'Pedido'
		,'campo'=>array('gastos_envio')
		,'tipo'=>'textarea_hidden'
		//,'tipo'=>'textarea'
		,'style'=>'height:200px;width:100%;'		
		//,'value'=>array(render_pedido($_SESSION['carrito']))
		,'value'=>''
	)
);


	if($tiene_de_delivery and $tiene_de_nodelivery){
		$CAMPOS=array_merge($CAMPOS2A,$CAMPOS2,$CAMPOS3,$CAMPOS5);		
	} elseif($tiene_de_delivery) {
		$CAMPOS=array_merge($CAMPOS2,$CAMPOS3,$CAMPOS5);		
	} elseif($tiene_de_nodelivery){
		$CAMPOS=array_merge($CAMPOS2A,$CAMPOS3,$CAMPOS5);		
	}

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
					,'pie'=>($tiene_de_nodelivery)?'los campos con * son obligatorios<br><b>IMPORTANTE:</b> El costo de envío para esta dirección de ubicación será coordinado con el ejecutivo de ventas':'los campos con * son obligatorios'

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
				
				if($tiene_de_delivery){ $arra['gastos']=array('i'=>'Gastos de Envio','m'=>$_POST['gastos_envio']); }
				$arra['columnas']=array(									array('label'=>'Código','variable'=>'cod')									);
	
				$_POST['pedido']=render_pedido($_SESSION['carrito']
												,true
												,$arra
												);
																
				unset($FORM['campos']['gastos_envio']);		
				$FORM['campos']=array_merge(
												$FORM['campos']
												,array(
														'pedido'=>array(
															'campo'=>array('pedido')
															,'tipo'=>'textarea'
															,'label'=>'Pedido'
														)
													)
											);	

				//data_insert																	
				foreach($FORM['campos'] as $CAMP){
					foreach($CAMP['campo'] as $CM){
						$data_insert[$CM]=$_POST[$CM];
					}
				}

				//agregar inserts adicionales			
				$data_insert=array_merge($data_insert,array(	
											'fecha_creacion'=>"now()"	
											,'fecha_edicion'=>"now()"	
											,'fecha'=>"now()"											
											,'id_usuario'=>$_SESSION['login']['id']
											,'visibilidad'=>'1'	
											));
				//insert
				$insertado=insert(
								$data_insert            
								,$FORM['tabla']
								,0
								);

								
				//body_mensaje				
				$body_mensaje=campos_email($FORM['campos'],$_POST,$insertado['id'],"Código del pedido");
							
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
								'emails'=>array(dato("email","usuarios","where id='".$_SESSION['login']['id']."'"))
								,'Subject'=>"Pedido de ".$PARAMETROS_EMAIL['nombre_web']
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


				$email_cliente['todos']=1;
				
				if( $email_cliente['todos'] and $email_administrador['todos'] ){
								
					unset($_SESSION['carrito']);
				
					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
								,'n'=>$FORM['nombre']									
								));	
								
				} else {
					/*	
					echo json_encode(array(
								't'=>'error'
								,'m'=>$FORM['error']
								,'n'=>$FORM['nombre']
								));	
					*/			

					echo json_encode(array(
								't'=>'exito'
								,'m'=>$FORM['exito']
								,'n'=>$FORM['nombre']									
								));									
								
				
				}
	
	
			} else {
			
			$HEAD['titulo'] = ucfirst($FORM['nombre'])." | ".$COMMON['datos_root']['titulo_web']; 			
			$HEAD['meta_keywords'] .= procesar_keywords($COMMON['datos_root']['titulo_web']);			 
			$HEAD['meta_descripcion'] = procesar_description($COMMON['datos_root']['titulo_web']);	
			
			}			



?>