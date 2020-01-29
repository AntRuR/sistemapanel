<?php


$ENVIAR_EMAIL=(!($LOCAL) and true);

// $EMAIL_TEST='guillermolozan@gmail.com';

$BLIND_EMAILS=[
	'guillermolozan@gmail.com',
];

$ID_ADMIN="6";
$administrador_email=dato("email","administradores_generales","where id=$ID_ADMIN");
// $administrador_email='guillermolozan@gmail.com';

if($_GET['ajax']=='1'){

	/*
	##    ## ######## ##      ##     #######  ########  ########  ######## ########
	###   ## ##       ##  ##  ##    ##     ## ##     ## ##     ## ##       ##     ##
	####  ## ##       ##  ##  ##    ##     ## ##     ## ##     ## ##       ##     ##
	## ## ## ######   ##  ##  ##    ##     ## ########  ##     ## ######   ########
	##  #### ##       ##  ##  ##    ##     ## ##   ##   ##     ## ##       ##   ##
	##   ### ##       ##  ##  ##    ##     ## ##    ##  ##     ## ##       ##    ##
	##    ## ########  ###  ###      #######  ##     ## ########  ######## ##     ##
	*/
	if($_GET['req']=='new_orden'){

		if($LL["moneda"]=="soles"){

			$monto=$LL["banco_monto"]/$LL["producto_tc"];

		} else {

			$monto=$LL["banco_monto"];

		}

		$iiii=insert([
			'fecha_creacion' => 'now()',
			'moneda'         => $LL['moneda'],
			'importe'        => $LL['banco_monto'],
			'opeban'         => $LL['banco_operacion'],
			'tc'             => $LL['producto_tc'],
			// 'monto'          => $LL['banco_operacion'],
			'id_grupo'       => $II,
			'user'			 => $LL['user'],
		],
		'productos_ventas_documentos'
		);
		update(
			[
				"orden_status" => "1",
				"orde_numero"  => $iiii['id'],
				"monto"        => $monto,
			],'productos_ventas_documentos'
			,"where id=".$iiii['id']
			,0
		);
		update(
			[
				"current_doc"		=> $iiii['id'],
				"orden_status"      => "1",
				"orde_numero"       => $iiii['id'],
				"producto_separado" => $monto,
			]
			,$TT
			,"where id=$II"
			,0
		);

	}

	/*
	 ######  ##     ## ########  ######  ##    ##     ######   #######  ########  ########
	##    ## ##     ## ##       ##    ## ##   ##     ##    ## ##     ## ##     ## ##
	##       ##     ## ##       ##       ##  ##      ##       ##     ## ##     ## ##
	##       ######### ######   ##       #####       ##       ##     ## ##     ## ######
	##       ##     ## ##       ##       ##  ##      ##       ##     ## ##     ## ##
	##    ## ##     ## ##       ##    ## ##   ##     ##    ## ##     ## ##     ## ##
	 ######  ##     ## ########  ######  ##    ##     ######   #######  ########  ########
	*/
	if($_GET['req']=='check_code'){

		$oc_check=filas([
			'id',
		],
		"productos_ventas_documentos",
		"where orden_status!=7 and opeban='".$_POST['codigo']."'",
		0
		);

		echo json_encode(['check'=>(count($oc_check)==0)]);

		exit();

	} // FIN DE CHECK CODE

	/*
	   ###     ######  ######## #### ##     ##    ###    ########   #######
	  ## ##   ##    ##    ##     ##  ##     ##   ## ##   ##     ## ##     ##
	 ##   ##  ##          ##     ##  ##     ##  ##   ##  ##     ## ##     ##
	##     ## ##          ##     ##  ##     ## ##     ## ##     ## ##     ##
	######### ##          ##     ##   ##   ##  ######### ##     ## ##     ##
	##     ## ##    ##    ##     ##    ## ##   ##     ## ##     ## ##     ##
	##     ##  ######     ##    ####    ###    ##     ## ########   #######
	*/

	if($_GET['req']=='activar'){



	}
	/*
	##     ##  #######  ########  #### ######## ####  ######     ###     ######  ####  #######  ##    ##
	###   ### ##     ## ##     ##  ##  ##        ##  ##    ##   ## ##   ##    ##  ##  ##     ## ###   ##
	#### #### ##     ## ##     ##  ##  ##        ##  ##        ##   ##  ##        ##  ##     ## ####  ##
	## ### ## ##     ## ##     ##  ##  ######    ##  ##       ##     ## ##        ##  ##     ## ## ## ##
	##     ## ##     ## ##     ##  ##  ##        ##  ##       ######### ##        ##  ##     ## ##  ####
	##     ## ##     ## ##     ##  ##  ##        ##  ##    ## ##     ## ##    ##  ##  ##     ## ##   ###
	##     ##  #######  ########  #### ##       ####  ######  ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='modificacion'){

		// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
		// $id_vio=dato("current_doc","ventas_items_ordenes","where id=".$id_orden_lista." and orden_status!=7",0);
		update(['orden_status'=>'2'],"productos_ventas_documentos","where id=".$LL['current_doc'],0);

	}
	/*
	 ######   #######  ##       ####  ######  #### ######## ##     ## ########        ###    ########  ########   #######  ########     ###     ######  ####  #######  ##    ##
	##    ## ##     ## ##        ##  ##    ##  ##     ##    ##     ## ##     ##      ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##    ##  ##  ##     ## ###   ##
	##       ##     ## ##        ##  ##        ##     ##    ##     ## ##     ##     ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##        ##  ##     ## ####  ##
	 ######  ##     ## ##        ##  ##        ##     ##    ##     ## ##     ##    ##     ## ########  ########  ##     ## ########  ##     ## ##        ##  ##     ## ## ## ##
	      ## ##     ## ##        ##  ##        ##     ##    ##     ## ##     ##    ######### ##        ##   ##   ##     ## ##     ## ######### ##        ##  ##     ## ##  ####
	##    ## ##     ## ##        ##  ##    ##  ##     ##    ##     ## ##     ##    ##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##    ##  ##  ##     ## ##   ###
	 ######   #######  ######## ####  ######  ####    ##     #######  ########     ##     ## ##        ##     ##  #######  ########  ##     ##  ######  ####  #######  ##    ##
	*/

	if($_GET['req']=='solicitaraprobar'){

		
		$estado_actual=dato("orden_status","productos_ventas_documentos","where id=".$_GET['pvd']);
		/*
		if(in_array($estado_actual,[3,4,6])){

			update_cliente($id_orden_lista,$_GET['L']);

		}
		*/

		if($estado_actual==2){

			// GET COTIZACION
			$venta=fila(
				[
				'ventas_items.id as id',
				'ventas_items.id_status as id_status',
				'ventas_items.id_status_pedido as id_status_pedido',
				'ventas_items.id_usuario as id_usuario',
				'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',
				'usuarios.email as asesor_email',
				'concat_ws(" ",usuarios2.nombre,usuarios2.apellidos) as jefe_nombre',
				'usuarios2.email as jefe_email',
				'productos_items.nombre as proyecto',
				'concat_ws(" ",clientes.nombre,clientes.apellidos) as cliente_nombre',
				],
				"ventas_items",
				"
				left join usuarios on ventas_items.id_usuario=usuarios.id
				left join usuarios2 on usuarios.id_jefe=usuarios2.id
				left join productos_items on id_item=productos_items.id
				left join clientes on ventas_items.id_cliente=clientes.id
				where ventas_items.id=".$_GET['L'],
				0);

			// EMAIL
			$html="Solicitud de Aprobación de Orden de Compra #".$_GET['pvd']."<br><br>"
				."<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>"
				."ORDEN DE COMPRA: #".$_GET['pvd'].'<br>'
				."CLIENTE: ".$venta['cliente_nombre'].'<br>'
				."ASESOR: ".$venta['asesor_nombre'].'<br>'
				."JEFE: ".$venta['jefe_nombre'].'<br>'
				."<br>"
				.'<br>'
				// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ORDEN DE COMPRA #$id_orden_lista</a>"
				// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
				.'<br>';
		

			include_once("lib/class.phpmailer.php");
			$mail= new PHPMailer();
			$mail->From       = $venta['asesor_email'];
			$mail->FromName   = $venta['asesor_nombre'];
			$mail->Subject    = "Solicitud de Aprobación de Orden de Compra ".$_GET['pvd']." - Cotización #".$venta['id'];
			$mail->MsgHTML($html);
			$mail->CharSet	  = "utf-8";

			if($EMAIL_TEST){
				$mail->AddAddress($EMAIL_TEST);
			} else {
				$mail->AddAddress($venta['jefe_email']);
				foreach($BLIND_EMAILS as $email){
					$mail->AddBCC($email);
				}
			}

			if($ENVIAR_EMAIL) $mail->Send();

		}

		// UPDATE ESTADOS
		update(array("orden_status"=>"8"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
		update(array("orden_status"=>"8"),"ventas_items","where id=".$_GET['L'],0);
		// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
		$id_vio=$_GET['pvd'];
		update(['orden_status'=>'8'],"productos_ventas_documentos","where id=".$id_vio,0);
		// // RETURN
		// if($mail->Send()){

		// 	echo json_encode([
		// 		'emailed'=>true,
		// 		'to'=>$venta['jefe_email']
		// 	]);

		// } else {

		// 	echo json_encode([
		// 		'emailed'=>false,
		// 		'error'=>$mail->ErrorInfo
		// 	]);

		// }

		exit();

	}




	/*
	   ###     ######  ######## ########  ########    ###    ########        ###    ########  ########   #######  ########     ###     ######  ####  #######  ##    ##
	  ## ##   ##    ## ##       ##     ##    ##      ## ##   ##     ##      ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##    ##  ##  ##     ## ###   ##
	 ##   ##  ##       ##       ##     ##    ##     ##   ##  ##     ##     ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##        ##  ##     ## ####  ##
	##     ## ##       ######   ########     ##    ##     ## ########     ##     ## ########  ########  ##     ## ########  ##     ## ##        ##  ##     ## ## ## ##
	######### ##       ##       ##           ##    ######### ##   ##      ######### ##        ##   ##   ##     ## ##     ## ######### ##        ##  ##     ## ##  ####
	##     ## ##    ## ##       ##           ##    ##     ## ##    ##     ##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##    ##  ##  ##     ## ##   ###
	##     ##  ######  ######## ##           ##    ##     ## ##     ##    ##     ## ##        ##     ##  #######  ########  ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='aceptaraprobar'){


		update_cliente($id_orden_lista,$_GET['L']);
		// prin($ordd);
	

		if($_GET['notfirst']!='1'){
			
			$old_status=dato("orden_status","ventas_items","where id=".$_GET['L'],0);

			update(array("orden_status"=>"3","old_venta_status"=>$old_status),"ventas_items_ordenes","where id=".$id_orden_lista,0);

			update(array("orden_status"=>"3","id_status"=>'18'),"ventas_items","where id=".$_GET['L'],0);

		}
		update(['orden_status'=>'3'],"productos_ventas_documentos","where id=".$_GET['pvd'],0);		



		// GET COTIZACION
		$venta=fila(
			[
			'ventas_items.id as id',
			'ventas_items.id_status as id_status',
			'ventas_items.id_status_pedido as id_status_pedido',
			'ventas_items.id_usuario as id_usuario',
			'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',
			'usuarios.email as asesor_email',
			'concat_ws(" ",usuarios2.nombre,usuarios2.apellidos) as jefe_nombre',
			'usuarios2.email as jefe_email',
			'productos_items.nombre as proyecto',
			'concat_ws(" ",clientes.nombre,clientes.apellidos) as cliente_nombre',
			],
			"ventas_items",
			"
			left join usuarios on ventas_items.id_usuario=usuarios.id
			left join usuarios2 on usuarios.id_jefe=usuarios2.id
			left join productos_items on id_item=productos_items.id
			left join clientes on ventas_items.id_cliente=clientes.id
			where ventas_items.id=".$_GET['L'],
			0);

		// EMAIL
		$html="Solicitud de Aprobación de Orden de Compra #".$_GET['pvd']."<br><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items_ordenes.php?i=".$id_orden_lista."'>Orden de compra: #".$_GET['pvd']."</a><br>"
			."CLIENTE: ".$venta['cliente_nombre'].'<br>'
			."ASESOR: ".$venta['asesor_nombre'].'<br>'
			."JEFE: ".$venta['jefe_nombre'].'<br>'
			."<br>"
			.'<br>'
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ORDEN DE COMPRA #$id_orden_lista</a>"
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
			.'<br>';
	

		include_once("lib/class.phpmailer.php");
		$mail= new PHPMailer();
		$mail->From       = $venta['asesor_email'];
		$mail->FromName   = $venta['asesor_nombre'];
		$mail->Subject    = "Orden de Compra Activada ".$_GET['pvd']." - Cotización #".$venta['id'];
		$mail->MsgHTML($html);
		$mail->CharSet	  = "utf-8";

		if($EMAIL_TEST){
			$mail->AddAddress($EMAIL_TEST);
		} else {
			$mail->AddAddress($administrador_email);
			foreach($BLIND_EMAILS as $email){
				$mail->AddBCC($email);
			}
		}

		if($ENVIAR_EMAIL) $mail->Send();		


		exit();

	} // FIN DE APROBAR

	/*
	########  ######## ##    ## ########  ######      ###    ########        ###    ########  ########   #######  ########     ###     ######  ####  #######  ##    ##
	##     ## ##       ###   ## ##       ##    ##    ## ##   ##     ##      ## ##   ##     ## ##     ## ##     ## ##     ##   ## ##   ##    ##  ##  ##     ## ###   ##
	##     ## ##       ####  ## ##       ##         ##   ##  ##     ##     ##   ##  ##     ## ##     ## ##     ## ##     ##  ##   ##  ##        ##  ##     ## ####  ##
	##     ## ######   ## ## ## ######   ##   #### ##     ## ########     ##     ## ########  ########  ##     ## ########  ##     ## ##        ##  ##     ## ## ## ##
	##     ## ##       ##  #### ##       ##    ##  ######### ##   ##      ######### ##        ##   ##   ##     ## ##     ## ######### ##        ##  ##     ## ##  ####
	##     ## ##       ##   ### ##       ##    ##  ##     ## ##    ##     ##     ## ##        ##    ##  ##     ## ##     ## ##     ## ##    ##  ##  ##     ## ##   ###
	########  ######## ##    ## ########  ######   ##     ## ##     ##    ##     ## ##        ##     ##  #######  ########  ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='denegaraprobar'){

		update(array("orden_status"=>"2"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
		update(array("orden_status"=>"2"),"ventas_items","where id=".$_GET['L'],0);
		update(['orden_status'=>'2'],"productos_ventas_documentos","where id=".$_GET['pvd'],0);

		exit();

	} // FIN DE APROBAR	


	/*
	   ###    ##    ## ##     ## ##          ###     ######  ####  #######  ##    ##
	  ## ##   ###   ## ##     ## ##         ## ##   ##    ##  ##  ##     ## ###   ##
	 ##   ##  ####  ## ##     ## ##        ##   ##  ##        ##  ##     ## ####  ##
	##     ## ## ## ## ##     ## ##       ##     ## ##        ##  ##     ## ## ## ##
	######### ##  #### ##     ## ##       ######### ##        ##  ##     ## ##  ####
	##     ## ##   ### ##     ## ##       ##     ## ##    ##  ##  ##     ## ##   ###
	##     ## ##    ##  #######  ######## ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='anulacion'){

		
		// GET COTIZACION
		$venta=fila(
			[
			'ventas_items.id as id',
			'ventas_items.id_status as id_status',
			'ventas_items.id_status_pedido as id_status_pedido',
			'ventas_items.id_usuario as id_usuario',
			'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',
			'usuarios.email as asesor_email',
			'concat_ws(" ",usuarios2.nombre,usuarios2.apellidos) as jefe_nombre',
			'usuarios2.email as jefe_email',
			'productos_items.nombre as proyecto',
			'concat_ws(" ",clientes.nombre,clientes.apellidos) as cliente_nombre',
			],
			"ventas_items",
			"
			left join usuarios on ventas_items.id_usuario=usuarios.id
			left join usuarios2 on usuarios.id_jefe=usuarios2.id
			left join productos_items on id_item=productos_items.id
			left join clientes on ventas_items.id_cliente=clientes.id
			where ventas_items.id=".$_GET['L'],
			0);

			$id_orden_lista=dato("id_grupo","productos_ventas_documentos","where id=".$_GET['pvd']);
		// EMAIL
		$html="Solicitud de Anulación de Orden de Compra #".$_GET['pvd']."<br><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items_ordenes.php?i=".$id_orden_lista."'>Orden de compra: #".$_GET['pvd']."</a><br>"
			."CLIENTE: ".$venta['cliente_nombre'].'<br>'
			."ASESOR: ".$venta['asesor_nombre'].'<br>'
			."JEFE: ".$venta['jefe_nombre'].'<br>'
			."MOTIVO DE LA ANULACION: ".$_POST['motivo'].'<br>'
			."<br>"
			.'<br>'
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ORDEN DE COMPRA #$id_orden_lista</a>"
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
			.'<br>';
	


		include_once("lib/class.phpmailer.php");
		$mail= new PHPMailer();
		$mail->From       = $venta['jefe_email'];
		$mail->FromName   = $venta['jefe_nombre'];
		$mail->Subject    = "Solicitud de Anulación de Orden de Compra ".$_GET['pvd']." - Cotización #".$venta['id'];
		$mail->MsgHTML($html);
		$mail->CharSet	  = "utf-8";
		if($EMAIL_TEST){
			$mail->AddAddress($EMAIL_TEST);
		} else {
			$mail->AddAddress($administrador_email);
			foreach($BLIND_EMAILS as $email){
				$mail->AddBCC($email);
			}
		}

		// RETURN
		if($ENVIAR_EMAIL)
		if($mail->Send()){

			echo json_encode([
				'emailed'=>true,
				'to'=>$administrador_email
			]);

		} else {

			echo json_encode([
				'emailed'=>false,
				'error'=>$mail->ErrorInfo
			]);

		}

		// UPDATE ESTADOS
		update(array("orden_status"=>"6"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
		update(array("orden_status"=>"6"),"ventas_items","where id=".$_GET['L'],0);
		// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
		$id_vio=$_GET['pvd'];
		update(['orden_status'=>'6','motivo_anulacion'=>$_POST['motivo']],"productos_ventas_documentos","where id=".$id_vio,0);

		exit();

	}	

	/*
	   ###     ######  ######## ########  ########    ###    ########        ###    ##    ## ##     ## ##          ###     ######  ####  #######  ##    ##
	  ## ##   ##    ## ##       ##     ##    ##      ## ##   ##     ##      ## ##   ###   ## ##     ## ##         ## ##   ##    ##  ##  ##     ## ###   ##
	 ##   ##  ##       ##       ##     ##    ##     ##   ##  ##     ##     ##   ##  ####  ## ##     ## ##        ##   ##  ##        ##  ##     ## ####  ##
	##     ## ##       ######   ########     ##    ##     ## ########     ##     ## ## ## ## ##     ## ##       ##     ## ##        ##  ##     ## ## ## ##
	######### ##       ##       ##           ##    ######### ##   ##      ######### ##  #### ##     ## ##       ######### ##        ##  ##     ## ##  ####
	##     ## ##    ## ##       ##           ##    ##     ## ##    ##     ##     ## ##   ### ##     ## ##       ##     ## ##    ##  ##  ##     ## ##   ###
	##     ##  ######  ######## ##           ##    ##     ## ##     ##    ##     ## ##    ##  #######  ######## ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='aceptaranulacion'){

		update(array("orden_status"=>"0"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
		update(array("orden_status"=>"0"),"ventas_items","where id=".$_GET['L'],0);
		// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
		$id_vio=$_GET['pvd'];
		update(['orden_status'=>'7'],"productos_ventas_documentos","where id=".$id_vio,0);


		$contar_listos=contar("productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status=4",0);
		if($contar_listos==0){
			$id_status=dato("old_venta_status","ventas_items_ordenes","where id=".$id_orden_lista,0);
			update(array("old_venta_status"=>""),"ventas_items_ordenes","where id=".$id_orden_lista,0);
			update(array("id_status"=>$id_status),"ventas_items","where id=".$_GET['L'],0);
		}
		

		exit();

	} // fin de aceptar anulacion


	/*
	########  ######## ##    ## ########  ######      ###    ########        ###    ##    ## ##     ## ##          ###     ######  ####  #######  ##    ##
	##     ## ##       ###   ## ##       ##    ##    ## ##   ##     ##      ## ##   ###   ## ##     ## ##         ## ##   ##    ##  ##  ##     ## ###   ##
	##     ## ##       ####  ## ##       ##         ##   ##  ##     ##     ##   ##  ####  ## ##     ## ##        ##   ##  ##        ##  ##     ## ####  ##
	##     ## ######   ## ## ## ######   ##   #### ##     ## ########     ##     ## ## ## ## ##     ## ##       ##     ## ##        ##  ##     ## ## ## ##
	##     ## ##       ##  #### ##       ##    ##  ######### ##   ##      ######### ##  #### ##     ## ##       ######### ##        ##  ##     ## ##  ####
	##     ## ##       ##   ### ##       ##    ##  ##     ## ##    ##     ##     ## ##   ### ##     ## ##       ##     ## ##    ##  ##  ##     ## ##   ###
	########  ######## ##    ## ########  ######   ##     ## ##     ##    ##     ## ##    ##  #######  ######## ##     ##  ######  ####  #######  ##    ##
	*/
	if($_GET['req']=='denegaranulacion'){

		update(array("orden_status"=>"4"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
		update(array("orden_status"=>"4"),"ventas_items","where id=".$_GET['L'],0);
		// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
		$id_vio=$_GET['pvd'];
		update(['orden_status'=>'4'],"productos_ventas_documentos","where id=".$id_vio,0);

		exit();

	}

	/*
	########  ########  ########
	##     ## ##     ## ##
	##     ## ##     ## ##
	########  ##     ## ######
	##        ##     ## ##
	##        ##     ## ##
	##        ########  ##
	*/
	if($_GET['req']=='pdf'){

		// GET DATA
		$result=getOrdenes($id_orden_lista,$_GET['pvd']);
		// prin($result);exit();

		// GET HTML
		ob_start();
		include "base2/apps/oc/pdf_template.php";
		$html = ob_get_contents();
		ob_end_clean();	

		if($_GET['html']=='1'){

			echo $html;
			exit();

		}
		
		// CREATE PDF
		require_once('lib/pdf/html2pdf.class.php');
		$html2pdf = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($html);
		$html2pdf->Output('ordenDeCompra_'.$_GET['id'].'.pdf');

		$estado_actual=dato("orden_status","productos_ventas_documentos","where id=".$_GET['pvd']);
		
		if($estado_actual==3){

			update(array("orden_status"=>"4"),"ventas_items_ordenes","where id=".$id_orden_lista,0);
			update(array("orden_status"=>"4"),"ventas_items","where id=".$_GET['L'],0);
			// $id_vio=dato("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status!=7",0);
			$id_vio=$_GET['pvd'];
			update(['orden_status'=>'4'],"productos_ventas_documentos","where id=".$id_vio,0);

		}

		exit();

		// });
		// process_pdf($id_orden_lista);

	} // fin pdf

	/*
	######## ##     ##    ###    #### ##
	##       ###   ###   ## ##    ##  ##
	##       #### ####  ##   ##   ##  ##
	######   ## ### ## ##     ##  ##  ##
	##       ##     ## #########  ##  ##
	##       ##     ## ##     ##  ##  ##
	######## ##     ## ##     ## #### ########
	*/
	if($_GET['req']=='email'){

		$pdf_file='temppdfs/ordenDeCompra_'.$_GET['pvd'].'.pdf';

		// GET DATA
		$result=getOrdenes($id_orden_lista,$_GET['pvd']);

		// GET HTML
		ob_start();
		include "base2/apps/oc/pdf_template.php";
		$html = ob_get_contents();
		ob_end_clean();	
		
		// CREATE PDF
		require_once('lib/pdf/html2pdf.class.php');
		$html2pdf = new HTML2PDF('P', 'A4', 'fr');
		$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($html);
		$html2pdf->Output($pdf_file,'F');


		// GET COTIZACION
		$venta=fila(
			[
			'ventas_items.id as id',
			'ventas_items.id_status as id_status',
			'ventas_items.id_status_pedido as id_status_pedido',
			'ventas_items.id_usuario as id_usuario',
			'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',
			'usuarios.email as asesor_email',
			'concat_ws(" ",usuarios2.nombre,usuarios2.apellidos) as jefe_nombre',
			'usuarios2.email as jefe_email',
			'productos_items.nombre as proyecto',
			'concat_ws(" ",clientes.nombre,clientes.apellidos) as cliente_nombre',
			'clientes.email as cliente_email',
			],
			"ventas_items",
			"
			left join usuarios on ventas_items.id_usuario=usuarios.id
			left join usuarios2 on usuarios.id_jefe=usuarios2.id
			left join productos_items on id_item=productos_items.id
			left join clientes on ventas_items.id_cliente=clientes.id
			where ventas_items.id=".$_GET['L'],
			0);

	
		// $venta['cliente_email']='guillermolozan@gmail.com';

		// EMAIL
		$html="Orden de Compra #".$_GET['pvd']."<br><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$venta['id']."'>Cotización #".$venta['id']."</a><br><br>"
			."<a href='http://incapower.pe/panel/custom/ventas_items_ordenes.php?i=".$id_orden_lista."'>Orden de compra: #".$_GET['pvd']."</a><br>"
			."CLIENTE: ".$venta['cliente_nombre'].'<br>'
			."ASESOR: ".$venta['asesor_nombre'].'<br>'
			// ."JEFE: ".$venta['jefe_nombre'].'<br>'
			."<br>"
			.'<br>'
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?aceptar=1&i=".$venta['id']."'>ORDEN DE COMPRA #$id_orden_lista</a>"
			// ."<a href='http://incapower.pe/panel/custom/ventas_items.php?cancelar=1&i=".$venta['id']."'>CANCELAR</a> ";
			.'<br>';


	
		// include_once("lib/class.phpmailer.php");
		require 'lib/mailer/PHPMailer.php';
		require 'lib/mailer/SMTP.php';
		/*
		$mail= new PHPMailer();
		$mail->From       = $venta['asesor_email'];
		$mail->FromName   = $venta['asesor_nombre'];
		$mail->Subject    = "Orden de Compra #".$_GET['pvd'];
		$mail->MsgHTML($html);
		$mail->CharSet	  = "utf-8";
		$mail->addAttachment($pdf_file);

		
		// $mail->PluginDir = "lib/";
		$mail->isSMTP();
		$mail->SMTPDebug = 2;
		$mail->Mailer = "smtp";
		$mail->Host = "mail.incapower.pe"; # Editar el Host smtp
		$mail->SMTPAuth = true;
		$mail->Username = "oc@incapower.pe"; # editar el usuario
		$mail->Password = "ordenes"; # Editar el password
		$mail->Port = 26;
		*/

		$mail = new PHPMailer;
		if(0)
		{
			$mail->isSMTP();
			$mail->SMTPDebug = 0;
			$mail->Host = 'mail.incapower.pe';
			$mail->Port = 26;
			$mail->SMTPAuth = true;
			$mail->Username = 'oc@incapower.pe';
			$mail->Password = 'ordenes';
		}
		$mail->setFrom($venta['asesor_email'],$venta['asesor_nombre']);
		// $mail->setFrom('oc@incapower.pe',$venta['asesor_nombre']);
		$mail->Subject    = "Incapower - Orden de Compra #".$_GET['pvd'];
		$mail->msgHTML($html);
		$mail->addAttachment($pdf_file);

		if($EMAIL_TEST){
			$mail->addAddress($EMAIL_TEST);
		} else {
			$mail->addAddress($venta['cliente_email']);
			$mail->AddCC($venta['jefe_email']);
			$mail->AddCC($venta['asesor_email']);
			foreach($BLIND_EMAILS as $emailbcc){
				$mail->AddBCC($emailbcc);
			}
		}
		// RETURN
		if($ENVIAR_EMAIL)
		if($mail->Send()){

			echo json_encode([
				'emailed'=>true,
				'to'=>$venta['cliente_email'],
				'from'=>$venta['asesor_email'],
			]);

		} else {

			echo json_encode([
				'emailed'=>false,
				'error'=>$mail->ErrorInfo,
				'to'=>$venta['cliente_email'],
				'from'=>$venta['asesor_email'],				
			]);

		}

		unlink($pdf_file);

		exit();

	}	

	/*
	######## ##     ##  ######  ######## ##
	##        ##   ##  ##    ## ##       ##
	##         ## ##   ##       ##       ##
	######      ###    ##       ######   ##
	##         ## ##   ##       ##       ##
	##        ##   ##  ##    ## ##       ##
	######## ##     ##  ######  ######## ########
	*/
	if($_GET['req']=='excel'){

		function num2alpha($n)
		{
			for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
				$r = chr($n%26 + 0x41) . $r;
			return $r;
		}
		function getrango($n){
			$i=0;
			foreach($n as $b=>$c){
				if($i==0){
					$uno=$b;
				}
				if($i==sizeof($n)-1){
					$dos=$b;
				}
				$i++;
			}
			return $uno.":".$dos;
		}



		$result=getOrdenes($id_orden_lista,$_GET['pvd']);

		

		require_once 'lib/PHPExcel.php';

		$objPHPExcel = new PHPExcel();

		$Autor="Incapower";
		
		// Set properties
		$objPHPExcel->getProperties()->setCreator($Autor)
		->setLastModifiedBy($Autor)
		->setTitle("Reporte Fecha : ".date("d-m-Y"))
		->setSubject("Reporte Fecha : ".date("d-m-Y"))
		->setDescription("Reporte generado por el Panel de administracion : ".date("d-m-Y"))
		->setKeywords("Reporte Fecha : ".date("d-m-Y"))
		->setCategory("Reporte");

		$l=1;
		
		$col=0;
		foreach($result['labels'] as $key=>$value){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col++,$l,$value);
			$objPHPExcel->getActiveSheet()->getColumnDimension(num2alpha($col))->setAutoSize(true);
		}
		$l++;
		
		foreach($result['rows'] as $ii=>$row){
			$col=0;
			foreach($result['labels'] as $key=>$ro){
				$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col++,$l,$result['rows'][$ii][$key]);
				// prin([$col++,$row+1,$item]);
			}
			$l++;
		}

		
		$objPHPExcel->getActiveSheet()->setTitle('formato');
		
		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);
		
		// exit();
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="oc-'.date("d-m-Y-H:i:s").'.xls"');
		header('Cache-Control: max-age=0');
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		
		exit();
		
	} // fin del excel



	/*
	########  ########  ######  ######## ########
	##     ## ##       ##    ## ##          ##
	##     ## ##       ##       ##          ##
	########  ######    ######  ######      ##
	##   ##   ##             ## ##          ##
	##    ##  ##       ##    ## ##          ##
	##     ## ########  ######  ########    ##
	*/
	if($_GET['req']=='reset'){

		$ids_ordenes=select("id","ventas_items_ordenes","where id_grupo=".$_GET['L']);
		foreach($ids_ordenes as $id_orden){
			delete("productos_ventas_documentos","where id_grupo=".$id_orden['id']);
		}
		delete("ventas_items_ordenes","where id_grupo=".$_GET['L']);
		delete("ventas_items_ordenes_copia","where id_grupo=".$_GET['L']);
		update(array("orden_status"=>""),"ventas_items","where id=".$_GET['L'],0);

		// echo json_encode($_GET);

		exit();

	}


} // FIN DE PROCESOS AJAX




