<?php

include("oc_lib.php");

chdir("../../../");

include("lib/includes.php");

// prin($_GET);exit();
if($_GET['dad']=='productos_ventas_documentos'){

	$_GET['pvd']=$_GET['L'];
	$vio=dato("id_grupo","productos_ventas_documentos","where id=".$_GET['L']);
	$_GET['L']=dato("id_grupo","ventas_items_ordenes","where id=".$vio);
	$_GET['dad']='ventas_items';

}
if($_GET['dad']=='ventas_items_ordenes'){

	$_GET['L']=dato("id_grupo","ventas_items_ordenes","where id=".$_GET['L']);
	$_GET['dad']='ventas_items';
}

$MEEE=$objeto_tabla[strtoupper($_GET['OT'])];

if(isset($MEEE)){

	$this_me=$MEEE['me'];
	
	$objeto_tabla = pre_procesar_tabla($objeto_tabla,$vars);

	$MEEE = $objeto_tabla[$this_me];

}



$orden_status=$objeto_tabla['VENTAS_ITEMS_ORDENES']['campos']['orden_status']['opciones'];
foreach($orden_status as $iii=>$ooss){
	list($valor,$color)=explode("|",$ooss);
	$orden_status_valores[$iii]=$valor;
	$orden_status_colores[$iii]=$color;
}
$orden_status=$orden_status_valores;


// permisos
$id_permisos=dato("id_permisos","usuarios_acceso","where id=".$_SESSION['usuario_id'],0);


if($_GET['vio']!='' && $_GET['vio']!='new'){

	$id_vio=$_GET['vio'];
	$id_item=$_GET['L']=dato('id_grupo','ventas_items_ordenes','where id='.$_GET['vio'],0);
	$old_status=dato("id_status","ventas_items","where id=".$id_item);

	update_saldos($id_vio);

} elseif($_GET['pvd']!='' && $_GET['pvd']!='new'){

	$id_vio=dato('id_grupo','productos_ventas_documentos','where id='.$_GET['pvd'],0);

	update_saldos($id_vio);

	if(!$id_vio){

		prin(fix_url($SERVER['RUTA'].'&pvd=new'));
		header('Location: ' . fix_url($SERVER['RUTA'].'&pvd=new'), true, 302);
		die();

	}

	$id_documento=$_GET['pvd'];
	$motivo_anulacion=dato("motivo_anulacion","productos_ventas_documentos","where id=".$id_documento,0);

	$ordenes_de_compra=select('id_grupo,id,orden_status','ventas_items_ordenes','where id='.$id_vio,0);
	$id_item=$_GET['L']=$ordenes_de_compra[0]['id_grupo'];

	$old_status=dato("id_status","ventas_items","where id=".$id_item);


	$last_orden_de_compra=$ordenes_de_compra[0];

	$num_listas=contar("productos_ventas_documentos","where id_grupo=".$id_vio." and orden_status in (4)",0);

	// echo '<pre>';print_r($_GET); echo '</pre>'; // exit();

} else {

	$id_item=$_GET['L'];
	$old_status=dato("id_status","ventas_items","where id=".$id_item);

	$ordenes_de_compra=fila(
		[
			'id','orden_status','current_doc'
		]
		,"ventas_items_ordenes"
		,"where id_grupo=".$_GET['L']
		// ,"where id_grupo=".$_GET['L']." and orden_status!=7 order by id desc"
		,0
	);

	update_saldos($ordenes_de_compra['id']);


	$current_doc = dato("id","productos_ventas_documentos","where id_grupo=".$ordenes_de_compra['id']." and orden_status not in (4,7)",0);
	if($ordenes_de_compra['current_doc'])
		$current_doc = $ordenes_de_compra['current_doc'];


		$num_enproceso=contar("productos_ventas_documentos","where id_grupo=".$ordenes_de_compra['id']." and orden_status not in (4,7)",0);
		$num_listas=contar("productos_ventas_documentos","where id_grupo=".$ordenes_de_compra['id']." and orden_status in (4)",0);

	// prin($num_enproceso); exit();

	$could_new=( ($num_enproceso==0) or (in_array(dato("orden_status","productos_ventas_documentos","where id=".$current_doc,0),['4'])));

	if($could_new){
		update(['orden_status'=>'0','current_doc'=>''],"ventas_items_ordenes","where id=".$ordenes_de_compra['id'],0);
	}
	/*
	$producto_ventas_documento_id=dato(
		"id"
		,"productos_ventas_documentos"
		,"where id_grupo=".$ordenes_de_compra['id']." and  orden_status!=7"
		,0
	);
	*/

	$producto_ventas_documento_id=$current_doc;

	// prin($producto_ventas_documento_id);
	// prin($could_new);
	// exit();

	if(
		$_GET['pvd']=='new' 
		&& $producto_ventas_documento_id 
		&& !$could_new
		// && false
	)
	{
		parse_str($SERVER['PARAMS'], $output);

		unset($output['vio']);
		$output['pvd']=$producto_ventas_documento_id;
				
		header('Location: ' . $SERVER['BASE'].$SERVER['ARCHIVO_REAL'].'?'.http_build_query($output), true, 302);
		die();

	}

	$last_orden_de_compra=$ordenes_de_compra;

}



$modoFormulario='activacion';

// prin($ordenes_de_compra); exit();

if($ordenes_de_compra){
	
	
	$id_orden_lista=$last_orden_de_compra['id'];

	if($_GET['pvd']=='new'){



	} else {

		$producto_ventas_documentos=fila(
				"id,
				id_grupo,
				orden_status,
				orde_numero,
				importe as banco_monto,
				moneda,
				opeban as banco_operacion,
				fecha_creacion as orden_fecha,
				tc as producto_tc,
				observaciones as adicional_observaciones
				"
				,"productos_ventas_documentos"
				,"where id=".$id_documento
				,0
			);
		// prin($producto_ventas_documentos); exit();

	}		
	
	// if(!$producto_ventas_documentos and $_GET['pvd']!='new'){

	// 	parse_str($SERVER['PARAMS'], $output);

	// 	unset($output['vio']);
	// 	$output['pvd']='new';
				
	// 	header('Location: ' . $SERVER['BASE'].$SERVER['ARCHIVO_REAL'].'?'.http_build_query($output), true, 302);
	// 	die();		

	// }

	$id_documento=$producto_ventas_documentos['id'];

	$id_vio=$producto_ventas_documentos['id_grupo'];

	$last_orden_de_compra=$producto_ventas_documentos;
	
	unset($last_orden_de_compra['id_grupo']);


	if( in_array($last_orden_de_compra['orden_status'],['1','2']) and $id_permisos==3)
		$modoFormulario='modificacion';
	elseif( in_array($last_orden_de_compra['orden_status'],['2']) and $id_permisos==2)
		$modoFormulario='aprobacion';
	elseif( in_array($last_orden_de_compra['orden_status'],['8']) )
		$modoFormulario='aceptaraprobacion';	
	elseif( in_array($last_orden_de_compra['orden_status'],['3','4']) )
		$modoFormulario='aprobado';	
	elseif( in_array($last_orden_de_compra['orden_status'],['6']) )
		$modoFormulario='aceptaranulacion';	
	elseif( in_array($last_orden_de_compra['orden_status'],['7']) )
		$modoFormulario='anulado';			
	else
		$modoFormulario='activacion_editar';	

}


// prin($last_orden_de_compra); exit;


include "base2/apps/oc/oc_procesos.php";



if($modoFormulario=='activacion'){

	
	// optimizar campos
	$fieldsModel=[];
	foreach($objeto_tabla['VENTAS_ITEMS_ORDENES']['campos'] as $key=>$campo){

		$ele['tipo']=$campo['tipo'];
		if(isset($campo['load'])) $ele['load']=$campo['load'];
		if(isset($campo['eventos'])) $ele['eventos']=$campo['eventos'];

		$fieldsModel[$key]=$ele;
		
		unset($ele);

	}	
	

	// Datos de Venta para la Orden de compra	
	$orden=fila(
		[
			'orden_status',
			// asesor
			'concat_ws(" ",usuarios.nombre,usuarios.apellidos) as asesor_nombre',

			// cliente
			'clientes.tipo_cliente as tipo_cliente',
			'clientes.nombre as nombre',
			'clientes.apellidos as apellidos',
			'clientes.dni as dni',
			'clientes.genero as genero',
			'clientes.email as email',
			'clientes.departamento as departamento',
			'clientes.provincia as provincia',
			'clientes.distrito as distrito',
			'clientes.direccion as direccion',
			'clientes.telefono as telefono',
			'clientes.telefono_oficina as telefono_oficina',
			'clientes.cliente_celular as cliente_celular',
			'clientes.celular_claro as celular_claro',
			'clientes.nextel as nextel',
			'clientes.rpm as rpm',
			'clientes.rpc as rpc',
			'clientes.fecha_cliente as fecha_cliente',
			'clientes.profesion as profesion',
			'clientes.estado_civil as estado_civil',
			'clientes.conyuge as conyuge',
			'clientes.pag_tipo_documento as pag_tipo_documento',
			'clientes.empresa as empresa',
			'clientes.pag_factura_razonsocial as pag_factura_razonsocial',
			'clientes.pag_factura_ruc as pag_factura_ruc',
			'clientes.contacto_nombre as contacto_nombre',
			'clientes.contacto_apellidos as contacto_apellidos',
			'clientes.contacto_dni as contacto_dni',

			// producto
			'productos_grupos.nombre as producto_marca',
			'productos_items.nombre as producto_modelo',
			'productos_items.pvlista as producto_precio',

			// adicional
			'contacto_canales.nombre as adicional_marketing',

		],
		"ventas_items",
		"
		left join usuarios on ventas_items.id_usuario=usuarios.id
		left join clientes on ventas_items.id_cliente=clientes.id

		left join productos_grupos on id_grupo=productos_grupos.id
		left join productos_items on id_item=productos_items.id

		left join contacto_canales on id_canal=contacto_canales.id

		where ventas_items.id=".$_GET['L'],
		0
	);



} else {

	// $orden=fila(
	// 	[
	// 		'orden_status',
	// 	],
	// 	"ventas_items",
	// 	"
	// 	where ventas_items.id=".$_GET['L'],
	// 	0
	// );

	$fieldsModel=[
		'orden_status'=>['tipo'=>'com'],
		'orden_fecha'=>['tipo'=>'fch'],
		'orde_numero'=>['tipo'=>'inp'],
		'banco_monto'=>['tipo'=>'inp'],
		'moneda'=>['tipo'=>'com'],
		'banco_operacion'=>['tipo'=>'inp'],
		'producto_tc'=>['tipo'=>'inp'],
		'adicional_observaciones'=>['tipo'=>'txt']
	];


	$orden=($last_orden_de_compra)?$last_orden_de_compra:[
		'orden_fecha'=>'',
		'orde_numero'=>'',
		'banco_monto'=>'',
		'moneda'=>'',
		'banco_operacion'=>'',
		'producto_tc'=>'',
		'adicional_observaciones'=>''
	];
	
	if(0)
	$orden=($last_orden_de_compra)?$last_orden_de_compra:[
		'orden_fecha'=>'',
		'orde_numero'=>'',
		'banco_monto'=>rand(10,20)*1000,
		'moneda'=>'dolares',
		'banco_operacion'=>rand(100000,9000000),
		'producto_tc'=>'3.2'
	];
	

}






include("lib/compresionInicio.php");


$documentos=[
		// 'all'		=>select("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." ",0),
		'anulados'	=>select("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status=7",0),
		'listos'	=>select("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status=4",0),
		'enproceso'	=>select("id","productos_ventas_documentos","where id_grupo=".$id_orden_lista." and orden_status not in (4,7)",0),
];


$current_doc=dato("current_doc","ventas_items_ordenes","where id=".$id_vio,0);

$could_new=((sizeof($documentos['enproceso'])==0) or in_array(dato("orden_status","productos_ventas_documentos","where id=".$current_doc,0),['4']));

// prin($documentos_actives);

include("head.php"); 

// prin($_GET);
$geto=$_GET;
unset($_GET['L']);

// prin($orden);

// prin($id_permisos);
// prin($_SESSION['usuario_id']);



$touchjson = file('base2/apps/oc/touch.json');
$touch = json_decode($touchjson[0],true)['v'];

$ventas_items_status_all=opciones("id,nombre","ventas_status","where visibilidad=1",0);
$ventas_items_status=opciones("id,nombre","ventas_status","where nombre in ('separado','vendido') and visibilidad=1 order by calificacion asc",0);

$venta_item=fila([
	"ventas_status.nombre as status",
	"productos_grupos.nombre as marca",
	"productos_items.nombre as modelo",
	"productos_items.pvlista as precio",
	'concat_ws(" ",clientes.nombre,clientes.apellidos) as cliente'
]
,"ventas_items
left join ventas_status on ventas_items.id_status=ventas_status.id 
left join clientes on ventas_items.id_cliente=clientes.id 
left join productos_items on ventas_items.id_item=productos_items.id
left join productos_grupos on ventas_items.id_grupo=productos_grupos.id
",
"where ventas_items.id=".$id_item
,0
);

$Saldo=get_saldo($id_orden_lista);

?>
<link href="base2/apps/oc/dist/app.css?<?=$touch?>" rel="stylesheet" type="text/css">
<body class=" <?=($Saldo<0)?'cerrado':'';?> <?=$modoFormulario?> monitor acceso_<?=$_SESSION['usuario_id']?> <?=$MEEE['titulo']?> <?=($_COOKIE['admin'])?'permiso_master':'';?> permiso_<?=$id_permisos;?> modulo_<?=$FILE;?> <? echo ($_GET['justlist']==1)?'justlist':'';?> <?php

if($_SESSION['sesionhid3']=='unlocked'){ echo "acceso_".$_SESSION['usuario_id']."_unlocked"; }

?>">
<script>
const id_orden_lista = '<?php echo $id_orden_lista; ?>';
const not_first = <?=($num_listas>0)?1:0;?>;
const motivo_anulacion=`<?=$motivo_anulacion?>`;
const ventas_items_status=<?php echo json_encode($ventas_items_status); ?>;
const old_ventas_items_status="<?php echo $old_status;?>";
const RUTA = "<?php echo $SERVER['RUTA'];?>";
const ModoFormulario = "<?php echo $modoFormulario;?>";
const id_permisos = '<?php echo $id_permisos; ?>';
const current_status = '<?php echo $last_orden_de_compra['orden_status']; ?>';
const id_documento = '<?php echo $id_documento; ?>';
const closed = <?=($Saldo<0)?1:0;?>;

let model = <?php echo json_encode($fieldsModel); ?>;	
let dataRow = <?php echo json_encode($orden); ?>;

</script>

<?php 
	// prin($id_item);
	// prin($geto);

	if(!in_array($_SESSION['usuario_id'],[479,480,481]))
		die('<h1>EN DESARROLLO....</h1>');	
?>


	<div id="div_allcontent" class="div_allcontent menu_colapsed">
		<?="atención #{$id_item} 
		/ {$venta_item['cliente']} <strong>{$venta_item['status']}</strong> 
		/ {$venta_item['marca']} {$venta_item['modelo']} <strong>US\$".number_format($venta_item['precio'], 2, '.', ',')."</strong> 
		saldo: <span style='color:red;'>US\$".number_format($Saldo, 2, '.', ',')."</span>
		/ ".( ($num_listas>0)?"no es primera OC":"primera OC")
		?>
		<br>
		<?php 
		/*
		foreach($documentos as $grup=>$docs){ 
			if(sizeof($docs)>0) echo "$grup : "; 
			foreach($docs as $doc){ ?>
		<a style='color:red;<?php if($doc['id']==$_GET['pvd']) echo "color:green;";?>' 
		href="<?=fix_url($SERVER['RUTA'].'&pvd='.$doc['id']);?>">orden #<?=$doc['id']?></a> 
		<?php } } ?>
		<?php 
		if($id_permisos==3 and ($could_new) and $_GET['pvd']!='new'){	
		?>		
		| <a href="<?=fix_url($SERVER['RUTA'].'&pvd=new');?>">nueva</a> 
		<?php
		}  
		*/
		?>		

		<ul class="nav">
		<!--<a style='float:right;margin-right:60px;' href='#' onclick="click_reset();return false;">reset</a>-->
		<a style='float:right;margin-right:60px;' target='_blank' href='<?=$SERVER['RUTA']?>' >=</a>
			<li class="nav-item">
				<h2 class="status <?=$orden_status[$orden['orden_status']];?>">
					<? if($_GET['pvd'] and $_GET['pvd']!='new') 
						printf("Orden de Compra %08s",$_GET['pvd']); 
					else
						echo "Orden de Compra";
					?>: 
					<span id='status_label' class="label" style="color:white;background-color:<?php echo $orden_status_colores[$orden['orden_status']];?>" ><?php 
						echo ($orden_status[$orden['orden_status']]) ? $orden_status[$orden['orden_status']] : 'aún no activado';
					?>
					</span>
				</h2>
			</li>
		</ul>

		<div class="line_content">
			<?php 
			if(0){
			include("vista.php");
			} else {

			if($_GET['ran']==0){ unset($_GET['ran']); }
			
			include("objeto.php");
			
			include("vista_ax.php");

			?>
			
			<div id="bloque_content_crear" class="bloque_content_crear"></div>

			<div class="inner_listado" id="inner" ></div>
			<div class="segunda_barra" id="segunda_barra_2"><b id="inner_span_num" ></b></div>
			<div class="cover" id="refresh-cover" style="display:none;"></div>
			<div class="refreshing" id="refresh" style="display:none;">cargando......</div>
			<div class="refreshing2" id="cargando_form" style="display:none;">cargando</div>

			<input type="hidden" id="resaltar" />
			<?php } ?>
		</div>

		<?php include("foot.php"); ?>
		
	</div>

	<div class="bottom_buttons">

		<div id="message"></div>

		<ul class="btn-group">
			<li id="btn-validar">
				<a class="btn btn-success" onclick="click_check_code();">validar</a>
			</li>
			<li id="btn-activar">
				<a class="btn btn-success" onclick="ax('insertar','');cuando_termine_de_grabar_activar();">activar</a>
			</li>
			<li id="btn-activar-editar">
				<a class="btn btn-primary" onclick="ax('guardar_completo',$v('id_guardar'));cuando_termine_de_grabar_activar();">activar</a>
			</li>			

			<li id="btn-editar">
				<a class="btn btn-primary" onclick="editar();">editar</a>
			</li>
			<li id="btn-editar-vin">
				<a class="btn btn-info" onclick="editar('vin');">editar vin</a>
			</li>

			<li id="btn-guardar">
				<a class="btn btn-primary" onclick="ax('guardar_completo',$v('id_guardar'));cuando_termine_de_grabar_modificar();">guardar</a>
			</li>
			<li id="btn-guardar-cancelar">
				<a class="btn btn-dark" onclick="noedit();">cancelar</a>
			</li>			


			<li id="btn-solicitar-aprobacion">
				<a class="btn btn-warning" onclick="click_solicitar_aprobar();">solicitar aprobación</a>
			</li>			
			<li id="btn-aceptar-aprobacion">
				<a class="btn btn-warning" onclick="click_aceptar_aprobar();">aceptar aprobación</a>
			</li>	
			<li id="btn-aceptar-aprobacion-enviar">
				<a class="btn btn-warning" onclick="click_aceptar_aprobar_enviar();">Enviar</a>
			</li>
        	<li id="btn-aceptar-aprobacion-cancelar">
				<a class="btn btn-dark" onclick="click_aceptar_aprobar_cancelar();">Cancelar</a>
			</li>					
			<li id="btn-denegar-aprobacion">
				<a class="btn btn-danger" onclick="click_denegar_aprobar();">denegar aprobación</a>
			</li>


			<li id="btn-pdf">
				<a class="btn btn-danger" onclick="generar_pdf();">generar pdf</a>
			</li>
			<li id="btn-enviar">
				<a class="btn btn-danger" onclick="email();">enviar email</a>
			</li>


			<li id="btn-solicitar-anular">
				<a class="btn btn-warning" onclick="click_solicitar_anulacion();">solicitar anular</a>
			</li>
			<li id="btn-solicitar-anular-enviar">
				<a class="btn btn-warning" onclick="click_solicitar_anulacion_enviar();">Enviar</a>
			</li>
        	<li id="btn-solicitar-anular-cancelar">
				<a class="btn btn-dark" onclick="click_solicitar_anulacion_cancelar();">Cancelar</a>
			</li>
			<li id="btn-aceptar-anular">
				<a class="btn btn-warning" onclick="click_aceptar_anulacion();">aceptar anulación</a>
			</li>
			<li id="btn-denegar-anular">
				<a class="btn btn-danger" onclick="click_denegar_anulacion();">denegar anulaciòn</a>
			</li>			


			<li id="btn-excel">
				<a class="btn btn-info" onclick="click_excel();">excel</a>
			</li>			
			<li id="btn-cerrar">
				<a class="btn btn-dark" onclick="click_close_window();">cerrar</a>
			</li>

		</ul>
	</div>
	<script src="base2/apps/oc/dist/app.js?<?=$touch?>"></script>
</body>
</html>
<?php include("lib/compresionFinal.php");