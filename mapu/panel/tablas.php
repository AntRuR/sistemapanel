<?php //á

$objeto_tabla['PRODUCTOS_ITEMS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Modelos',
		'nombre_singular'=> 'modelo',
		'nombre_plural'	=> 'modelos',
		'tabla'			=> 'productos_items',
		'archivo'		=> 'productos_items',
		'archivo_hijo'	=> 'productos_fotos',
		'prefijo'		=> 'proite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Modelos',
		'por_pagina'	=> '100',
		'me'			=> 'PRODUCTOS_ITEMS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_tipo'		=>array(
						'campo'			=> 'id_tipo',
						'label'			=> 'Líneas',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_tipo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_tipos',
						'width'			=> '95px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Código',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Modelo',
						'unique'		=> '0',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '0',
						'controles'		=> '
						<a rel="subs" href="custom/productos_fotos.php?id=[id]">{select count(*) from productos_fotos where id_item=[id]} fotos</a>
						<a  href="../index.php?modulo=items&tab=productos&acc=file&id=[id]">ficha</a>
						',
						'size'			=> '140',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '2'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Linea',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'width'			=> '70px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'pvlista'		=>array(
						'campo'			=> 'pvlista',
						'label'			=> 'Precio Lista',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8'
				),
				'pvpromocion'	=>array(
						'campo'			=> 'pvpromocion',
						'label'			=> 'Precio Promoción',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),
				'pvliberado'	=>array(
						'campo'			=> 'pvliberado',
						'label'			=> 'Precio Liberado',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),
				'pvconcesionario'=>array(
						'campo'			=> 'pvconcesionario',
						'label'			=> 'Precio Concesionario',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción breve',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'height:70px;width:600px;'
				),
				'ficha'			=>array(
						'campo'			=> 'ficha',
						'label'			=> 'Ficha',
						'tipo'			=> 'html',
						'validacion'	=> '1',
						'style'			=> 'width:600px;height:400px;',
						'width'			=> '360px',
						'derecha'		=> '1',
						'css'			=> 'table { width:100%; margin-bottom:10px; background:#F3F3F3; }',
						'botones'		=> 'nombre,texto|productos_bloques',
						'default'		=> '',
						'listable'		=> '0',
						'listhtml'		=> '1',
						'tags'			=> '1'
				),
				'stock'			=>array(
						'campo'			=> 'stock',
						'label'			=> 'Stock',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'style'			=> 'width:30px;',
						'disabled'		=> '1'
				),
				'source'		=>array(
						'campo'			=> 'source',
						'label'			=> 'Source',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'style'			=> 'width:550px;',
						'disabled'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),
				'descripcion_banner'=>array(
						'campo'			=> 'descripcion_banner',
						'label'			=> 'Descripción Falla',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '1',
						'style'			=> 'height:40px;width:600px;',
						'width'			=> '300px'
				)
		),
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'group'			=> 'id_grupo',
		'order_by'		=> 'id_grupo desc, id desc',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_ITEMS_ITEMS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Importaciones',
		'nombre_singular'=> 'vehículo',
		'nombre_plural'	=> 'vehículos',
		'tabla'			=> 'productos_items_items',
		'archivo'		=> 'productos_items_items',
		'prefijo'		=> 'proiteite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Stock',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_ITEMS_ITEMS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '1',
						'width'			=> '50px',
						'label'			=> 'Código'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'pedido'		=>array(
						'campo'			=> 'pedido',
						'label'			=> 'Pedido',
						'width'			=> '70px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:70px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'queries'		=> '0',
						'listclass'		=> 'nogrilla',
						'disabled'		=> '1'
				),
				'fecha_arribo'	=>array(
						'campo'			=> 'fecha_arribo',
						'label'			=> 'Arribo',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7',
						'derecha'		=> '2',
						'rango'			=> '-2 years,+2 years',
						'default'		=> 'now()',
						'listclass'		=> 'nogrilla',
						'disabled'		=> '1'
				),
				'nave'			=>array(
						'campo'			=> 'nave',
						'label'			=> 'Nave',
						'width'			=> '100px',
						'tipo'			=> 'inp',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'listclass'		=> 'nogrilla',
						'disabled'		=> '1'
				),
				'id_ubicacion'	=>array(
						'campo'			=> 'id_ubicacion',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '3',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'listable'		=> '1',
						'frozen'		=> '0',
						'tip_foreig'	=> '0'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1'
				),
				'vin'			=>array(
						'campo'			=> 'vin',
						'label'			=> 'VIN',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'tip_foreig'	=> '0',
						'unique'		=> '1',
						'size'			=> '17'
				),
				'nummotor'		=>array(
						'campo'			=> 'nummotor',
						'label'			=> '# Motor',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'noedit'		=> '1'
				),
				'yearmod'		=>array(
						'campo'			=> 'yearmod',
						'label'			=> 'Año Modelo',
						'tipo'			=> 'com',
						'rango'			=> '-8 years,+2 years',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '4',
						'default'		=> 'now()',
						'like'			=> '1',
						'queries'		=> '1'
				),
				'yearfab'		=>array(
						'campo'			=> 'yearfab',
						'label'			=> 'Año Fabricación',
						'tipo'			=> 'com',
						'rango'			=> '-8 years,+2 years',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '4',
						'default'		=> 'now()',
						'like'			=> '1',
						'queries'		=> '1'
				),
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_color]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_colores',
						'width'			=> '50px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'listable'		=> '1'
				),
				'numpoliza'		=>array(
						'campo'			=> 'numpoliza',
						'label'			=> '# Poliza',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_status',
						'derecha'		=> '1',
						'default'		=> '1',
						'queries'		=> '1'
				),
				'asignado'		=>array(
						'campo'			=> 'asignado',
						'label'			=> 'Asignado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '2',
						'style'			=> 'width:100px;',
						'width'			=> '50px',
						'frozen'		=> '1',
						'disabled'		=> '1'
				),
				'status_warrant'	=>array(
						'campo'			=> 'status_warrant',
						'label'			=> 'Status Warrant',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'activado',
								'2'			=> 'levantado'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '30px',
						'frozen'		=> '1',
						'queries'		=> '0',
						'resaltar'		=> '1',
						'disabled'		=> '1'
				),
				'warrant'		=>array(
						'campo'			=> 'warrant',
						'label'			=> 'Warrants',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'inp',
						'opciones'		=> '',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'like'			=> '1',
						'resaltar'		=> '1',
						'disabled'		=> '1'
				),
				'status_pdi'	=>array(
						'campo'			=> 'status_pdi',
						'label'			=> 'Status PDI',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'No Programado',
								'2'			=> 'Programado',
								'3'			=> 'Terminado'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '30px',
						'frozen'		=> '1',
						'queries'		=> '1',
						'disabled'		=> '1'
				),
				'fecha_pdi'		=>array(
						'campo'			=> 'fecha_pdi',
						'label'			=> 'Fecha PDI',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '7',
						'style'			=> '',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'queries'		=> '1',
						'disabled'		=> '1'
				),
				'placa'			=>array(
						'campo'			=> 'placa',
						'label'			=> 'Placa',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'disabled'		=> '1'
				),
				'venta_factura'	=>array(
						'campo'			=> 'venta_factura',
						'label'			=> '# Factura',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'frozen'		=> '0',
						'listable'		=> '1'
				),
				'venta_precio'	=>array(
						'campo'			=> 'venta_precio',
						'label'			=> 'Precio Venta',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'size'			=> '8',
						'frozen'		=> '0'
				),
				'venta_fecha'	=>array(
						'campo'			=> 'venta_fecha',
						'label'			=> 'Fecha Venta',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '7',
						'style'			=> '',
						'derecha'		=> '2',
						'frozen'		=> '0',
						'queries'		=> '1'
				),
				'venta_abono'	=>array(
						'campo'			=> 'venta_abono',
						'label'			=> 'Abonos',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'venta_total_facturas'=>array(
						'campo'			=> 'venta_total_facturas',
						'label'			=> 'Facturación',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'venta_id_cliente'=>array(
						'campo'			=> 'venta_id_cliente',
						'label'			=> 'Cliente',
						'tipo'			=> 'hid',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|clientes',
						'frozen'		=> '1',
						'listable'		=> '0',
						'width'			=> '150px',
						'tip_foreig'	=> '1'
				),
				'venta_id_vendedor'=>array(
						'campo'			=> 'venta_id_vendedor',
						'label'			=> 'Vendedor',
						'tipo'			=> 'hid',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'frozen'		=> '0',
						'queries'		=> '1',
						'listable'		=> '1',
						'width'			=> '150px',
						'tip_foreig'	=> '1'
				),
				'id_comision'	=>array(
						'campo'			=> 'id_comision',
						'label'			=> 'Status de Comision',
						'tipo'			=> 'hid',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|status_comision',
						'derecha'		=> '1',
						'frozen'		=> '0',
						'queries'		=> '1',
						'listable'		=> '1',
						'width'			=> '150px',
						'tip_foreig'	=> '1'
				),
				'method'		=>array(
						'campo'			=> 'method',
						'tipo'			=> 'inp',
						'indicador'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1',
						'listable'		=> '0'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'exportar_excel'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_STOCK']=array(
		'seccion'		=> '',
		'grupo'			=> 'productos',
		'titulo'		=> 'Asignaciones',
		'nombre_singular'=> 'asignación',
		'nombre_plural'	=> 'asignaciones',
		'tabla'			=> 'productos_stock',
		'archivo'		=> 'productos_stock',
		'prefijo'		=> 'prostock',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Asignaciones',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_STOCK',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				LL=fila("fecha_creacion,fecha_edicion,id_ubicacion_salida,id_item,id_color,id_item_item,id_ubicacion_llegada",TT,"where id=II",0);
				if(SS=="update" or SS=="insert"){
					/*
					if(hay("productos_traslados","where id_asignacion=II")){
						update(LL,"productos_traslados","where id_asignacion=II");
					}else{
					*/
						LL["id_asignacion"]		=II;
						LL["id_traslado_status"]="1";
						insert(LL,"productos_traslados",0);
						update(array("asignado"=>"1"),"productos_items_items","where id=".LL["id_item_item"],0);
					/*}*/
				}
				if(SS=="delete"){
					delete("productos_traslados","where id_asignacion=II");
					update(array("asignado"=>"0"),"productos_items_items","where id=".LL["id_item_item"],0);
				}

		',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '1',
						'width'			=> '50px',
						'label'			=> 'Código'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_ubicacion_salida'=>array(
						'campo'			=> 'id_ubicacion_salida',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.asignado=0 AND productos_items_items.id_status!=5;id_item||productos_items.id as id,productos_items.nombre as nombre|productos_items,productos_items_items|where productos_items_items.id_item=productos_items.id and productos_items_items.id_ubicacion=[id_ubicacion_salida] and  productos_items_items.id_color=[id_color] and productos_items_items.asignado=0  AND productos_items_items.id_status!=5;id_color||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida]  AND  productos_items_items.asignado=0 AND productos_items_items.id_status!=5',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'listable'		=> '1',
						'tip_foreig'	=> '0'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|where 0',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.asignado=0 AND productos_items_items.id_status!=5;id_color||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida]  AND  productos_items_items.asignado=0 AND productos_items_items.id_status!=5',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,vin|productos_items_items|where 0',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1',
						'load'			=> '|||id_status as id_status|productos_items_items|where id=[id_item_item]'
				),
				'id_ubicacion_llegada'=>array(
						'campo'			=> 'id_ubicacion_llegada',
						'label'			=> 'Nueva Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '1',
						'default'		=> '[id_ubicacion_llegada]',
						'foreig'		=> '1',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'listable'		=> '1'
				),
				'observaciones'	=>array(
						'campo'			=> 'observaciones',
						'label'			=> 'Observaciones',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '0',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_TRASLADOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Traslados',
		'nombre_singular'=> 'traslado',
		'nombre_plural'	=> 'traslados',
		'tabla'			=> 'productos_traslados',
		'archivo'		=> 'productos_traslados',
		'prefijo'		=> 'protras',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Traslados',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_TRASLADOS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'postscript'	=> '
				if(SS=="update"){
					//recepcionado
					if(LL["fecha_recepcion"]!="0000-00-00 00:00:00" and LL["fecha_recepcion"]!=""){
						update(array("id_traslado_status"=>"3"),TT,"where id=II",0);
						update(array("id_ubicacion"=>LL["id_ubicacion_llegada"],"asignado"=>"0"),"productos_items_items","where id=".LL["id_item_item"],0);
						update(array("conf"=>"procesos=0"),"productos_traslados","where id=II",0);

						if(dato("id_traslado","choferes","where id=".LL["id_chofer"])==II){
							update(array("id_traslado"=>"0"),"choferes","where id=".LL["id_chofer"],0);
						}

					//trasladado
					} elseif(LL["fecha_salida"]!="0000-00-00 00:00:00" and LL["fecha_llegada"]!="000-00-00 00:00:00" and LL["fecha_salida"]!="" and LL["fecha_llegada"]!=""){
						update(array("conf"=>"eliminar=0"),"productos_stock","where id=".LL["id_asignacion"],0);
						update(array("id_traslado_status"=>"2"),"productos_traslados","where id=II",0);

						if(dato("id_traslado","choferes","where id=".LL["id_chofer"])=="0"){
							update(array("id_traslado"=>II),"choferes","where id=".LL["id_chofer"],0);
						}

					//asignado
					} else {
						update(array("conf"=>"eliminar=0"),"productos_stock","where id=".LL["id_asignacion"],0);
						update(array("id_traslado_status"=>"1"),"productos_traslados","where id=II",0);
					}
				}
		',
		'filtros_extra'	=> '',
		'procesos'		=>array(
				array(
						'label'			=> 'Traslado de Unidades',
						'params'		=> 'fecha_recepcion|disabled=1&id_asignacion|disabled=1&fecha_recepcion|disabled=1&observaciones|disabled=1',
						'buttom'		=> 'Registrar Traslado',
						'cargar'		=>array(
								'fecha_salida'	=> 'now()',
								'fecha_llegada'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Recepción de Unidades',
						'params'		=> 'fecha_salida|frozen=1&fecha_llegada|frozen=1&id_chofer|frozen=1&id_placa|frozen=1',
						'buttom'		=> 'Recepcionado',
						'cargar'		=>array(
								'fecha_recepcion'=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Impresión de Guía de Remisión',
						'rel'			=> 'width:500,height:300',
						'params'		=> 'destinatario|disabled=0&destinatario|validacion=0&ruc|disabled=0&ruc|validacion=0&direccion|disabled=0&direccion|validacion=0&motivo_traslado_otros|disabled=0&motivo_traslado_otros|validacion=0&imp_chofer_nombre|disabled=0&imp_chofer_nombre|validacion=0&imp_placa|disabled=0&imp_placa|validacion=0&imp_chofer_licencia|disabled=0&imp_chofer_licencia|validacion=0
					&id|listable=0&motivo_traslado|disabled=0&motivo_traslado|validacion=0&tipo_combustible|disabled=0&tipo_combustible|validacion=0&numero_guia|frozen=1&numero_guia|disabled=0&numero_guia|validacion=1&fecha_pdi|disabled=1&fecha_recepcion|disabled=1&observaciones|disabled=1&id_ubicacion_llegada|disabled=1&id_traslado_status|disabled=1&id_asignacion|disabled=1&id_ubicacion_salida|disabled=1&id_color|disabled=1&fecha_salida|disabled=1&fecha_llegada|disabled=1&id_chofer|disabled=1&id_placa|disabled=1&id_item|disabled=1&id_item_item|disabled=1&onload_include=base2/on_impresiones.php',
						'buttom'		=> 'Imprimir',
						'accion'		=> 'update,load=imprimir_traslados.php',
						'disabled'		=> '1'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '1',
						'width'			=> '50px',
						'label'			=> 'Código'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_ubicacion_salida'=>array(
						'campo'			=> 'id_ubicacion_salida',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'listable'		=> '1',
						'tip_foreig'	=> '0'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1'
				),
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_color]',
						'foreig'		=> '1',
						'style'			=> 'width:100px;',
						'opciones'		=> 'id,nombre|productos_colores',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,vin|productos_items_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'dlquery'		=> '1',
						'tip_foreig'	=> '1',
						'load'			=> '||||fecha_pdi as fecha_pdi|productos_items_items|where id=[id_item_item]'
				),
				'fecha_pdi'		=>array(
						'campo'			=> 'fecha_pdi',
						'label'			=> 'Fecha PDI',
						'width'			=> '60px',
						'listable'		=> '0',
						'formato'		=> '7b',
						'tipo'			=> 'fch',
						'derecha'		=> '1',
						'queries'		=> '0',
						'frozen'		=> '1'
				),
				'fecha_salida'	=>array(
						'campo'			=> 'fecha_salida',
						'label'			=> 'Salida',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'rango'			=> '-1 years,+2 years'
				),
				'fecha_llegada'	=>array(
						'campo'			=> 'fecha_llegada',
						'label'			=> 'Llegada',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '2',
						'rango'			=> '-1 years,+2 years'
				),
				'id_ubicacion_llegada'=>array(
						'campo'			=> 'id_ubicacion_llegada',
						'label'			=> 'Nueva Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_llegada]',
						'foreig'		=> '1',
						'style'			=> 'width:140px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'listable'		=> '1',
						'tip_foreig'	=> '0'
				),
				'id_asignacion'	=>array(
						'campo'			=> 'id_asignacion',
						'label'			=> '# Asignacion',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_asignacion]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,id|productos_stock',
						'width'			=> '95px',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'fecha_recepcion'=>array(
						'campo'			=> 'fecha_recepcion',
						'label'			=> 'Recepción',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '2'
				),
				'id_placa'		=>array(
						'campo'			=> 'id_placa',
						'label'			=> 'Placa de exibición',
						'tipo'			=> 'hid',
						'validacion'	=> '1',
						'default'		=> '[id_placa]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre|placas_temporales|where visibilidad=1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'crearforeig'	=> '0',
						'frozen'		=> '0'
				),
				'id_chofer'		=>array(
						'campo'			=> 'id_chofer',
						'label'			=> 'Chofer',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_chofer]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre;dni;direccion|choferes|where id_traslado=0',
						'width'			=> '95px',
						'derecha'		=> '1',
						'crearforeig'	=> '0',
						'frozen'		=> '0'
				),
				'id_traslado_status'=>array(
						'campo'			=> 'id_traslado_status',
						'label'			=> 'Status',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_traslado_status]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|traslados_status',
						'width'			=> '95px',
						'derecha'		=> '1',
						'listable'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1'
				),
				'observaciones'	=>array(
						'campo'			=> 'observaciones',
						'label'			=> 'Observaciones',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'style'			=> 'width:500px;hright:150px;',
						'derecha'		=> '1'
				),
				'numero_guia'	=>array(
						'campo'			=> 'numero_guia',
						'label'			=> 'Número de Guía',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'no_save'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_chofer_nombre'=>array(
						'campo'			=> 'imp_chofer_nombre',
						'label'			=> 'Transportista',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_placa'		=>array(
						'campo'			=> 'imp_placa',
						'label'			=> 'Marca y Número de Placa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_chofer_licencia'=>array(
						'campo'			=> 'imp_chofer_licencia',
						'label'			=> 'N(s) de Licencia(s) de conducir',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'tipo_combustible'=>array(
						'campo'			=> 'tipo_combustible',
						'label'			=> 'Tipo de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'motivo_traslado'=>array(
						'campo'			=> 'motivo_traslado',
						'label'			=> 'Motivo de Traslado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Venta',
								'2'			=> 'Entre Establecimiento de la misma empresa',
								'3'			=> 'Venta sujeta a confirmar',
								'4'			=> 'Importación',
								'5'			=> 'Exportación',
								'6'			=> 'Compra',
								'7'			=> 'Devolución',
								'8'			=> 'Consignación',
								'9'			=> 'Emisor Itinerante'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '120px',
						'disabled'		=> '1'
				),
				'motivo_traslado_otros'=>array(
						'campo'			=> 'motivo_traslado_otros',
						'label'			=> 'Otros',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'derecha'		=> '2'
				),
				'destinatario'	=>array(
						'campo'			=> 'destinatario',
						'label'			=> 'Destinatario',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'derecha'		=> '1'
				),
				'ruc'			=>array(
						'campo'			=> 'ruc',
						'label'			=> 'DNI/RUC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'derecha'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),
				'conf'			=>array(
						'campo'			=> 'conf',
						'label'			=> 'conf',
						'tipo'			=> 'txt',
						'indicador'		=> '1'
				)
		),
		'edicion_completa'=> '0',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'exportar_excel'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_VENTAS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Ventas',
		'nombre_singular'=> 'venta',
		'nombre_plural'	=> 'ventas',
		'tabla'			=> 'productos_ventas',
		'archivo'		=> 'productos_ventas',
		'prefijo'		=> 'proven',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Ventas',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_VENTAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(LL["fecha_creacion2"]!="0000-00-00 00:00:00"){
					update(array("fecha_creacion"=>LL["fecha_creacion2"]),TT,"where id=II",0);
				}
				if(SS=="insert"){
					update(array("id_status"=>"2"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
				if(SS=="update"){
				}
				if(SS=="delete"){
					update(array("id_status"=>"1"),"productos_items_items","where id=".LL["id_item_item"],0);
				}

		',
		'procesos'		=>array(
				array(
						'label'			=> 'Registro Anticipos',
						'ot'			=> 'productos_ventas_documentos',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Registrar',
						'params'		=> 'operacion|default=1&operacion|frozen=1&saldo|disabled=1&onload_include=base2/on_ventas_documentos.php'
				),
				array(
						'label'			=> 'Registro Facturación Final',
						'ot'			=> 'productos_ventas_documentos',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Registrar',
						'params'		=> 'monto|frozen=1&operacion|default=2&operacion|frozen=1&recibido|frozen=0&saldo|disabled=1&onload_include=base2/on_ventas_documentos.php&monto|live=&recibido|live=%5Bimporte%5D%3D%5Brecibido%5D%3B'
				),
				array(
						'label'			=> 'Nota de crédito',
						'ot'			=> 'productos_ventas_documentos',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Registrar',
						'params'		=> 'operacion|default=3&operacion|frozen=1&onload_include=base2/on_ventas_documentos.php'
				),
				array(
						'label'			=> 'Pagos Extemporáneos',
						'ot'			=> 'productos_ventas_documentos',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Registrar',
						'params'		=> 'monto|frozen=1&operacion|default=4&montdoc|default=0&operacion|frozen=1&recibido|frozen=0&onload_include=base2/on_ventas_documentos.php'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '0',
						'width'			=> '50px',
						'label'			=> 'Correl'
				),
				'fecha_creacion'	=>array(
						'listable'		=> '1',
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'formato'		=> '7b',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'fecha_creacion2'=>array(
						'campo'			=> 'fecha_creacion2',
						'label'			=> 'Fecha Creacion',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '0',
						'validacion'	=> '0',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'disabled'		=> '1',
						'rango'			=> '-1 years,now',
						'default'		=> 'now()'
				),
				'numov'			=>array(
						'campo'			=> 'numov',
						'label'			=> '#Venta',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:80px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'unique'		=> '0',
						'controles'		=> '<a href="custom/productos_ventas_documentos.php?id=[id]" rel="subs">{select count(*) from ventas_mensajes where id_grupo=[id]} mensajes</a>
							',
						'queries'		=> '1',
						'validacion'	=> '0'
				),
				'id_ubicacion_salida'=>array(
						'campo'			=> 'id_ubicacion_salida',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|where id!=4',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.id_status=1;id_item||productos_items.id as id,productos_items.nombre as nombre|productos_items,productos_items_items|where productos_items_items.id_item=productos_items.id and productos_items_items.id_ubicacion=[id_ubicacion_salida] and  productos_items_items.id_color=[id_color] and productos_items_items.id_status=1;id_color||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida]  AND  productos_items_items.id_status=1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'listable'		=> '1',
						'tip_foreig'	=> '0'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|where 0',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.id_status=1;id_color||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida]  AND  productos_items_items.id_status=1;|||pvpromocion as pvpromocional,0 as descuento,pvpromocion as pvfinal,pvpromocion as saldo|productos_items|where id=[id_item]',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_color]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_colores|where 0',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.id_status=1;',
						'width'			=> '50px',
						'derecha'		=> '2',
						'queries'		=> '1',
						'listable'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,vin|productos_items_items|where 0',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1',
						'unique'		=> '1'
				),
				'pvpromocional'	=>array(
						'campo'			=> 'pvpromocional',
						'label'			=> 'PV Promocional',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'frozen'		=> '1',
						'nogrilla'		=> '0',
						'listclass'		=> 'nogrilla'
				),
				'descuento'		=>array(
						'campo'			=> 'descuento',
						'label'			=> 'Descuento',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'live'			=> '[pvfinal]=[pvpromocional] - [descuento];[saldo]=[pvfinal]',
						'listable'		=> '1',
						'nogrilla'		=> '0',
						'listclass'		=> 'nogrilla'
				),
				'pvfinal'		=>array(
						'campo'			=> 'pvfinal',
						'label'			=> 'Precio Venta Final',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'live'			=> '[saldo]=[pvfinal]',
						'nogrilla'		=> '0'
				),
				'saldo'			=>array(
						'campo'			=> 'saldo',
						'tipo'			=> 'hid'
				),
				'venta_id_cliente'=>array(
						'campo'			=> 'venta_id_cliente',
						'label'			=> 'Cliente',
						'tipo'			=> 'inp',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'frozen'		=> '0',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '100px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'default'		=> '[id_cliente]',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'directlink'	=> 'id,nombre;apellidos;dni|clientes|where visibilidad=1|1',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre;apellidos;dni|clientes|where visibilidad=1',
						'style'			=> 'width:320px;',
						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1',
						'validacion'	=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '1'
				),
				'id_vendedor'	=>array(
						'campo'			=> 'id_vendedor',
						'label'			=> 'Vendedor',
						'width'			=> '100px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'default'		=> '[id_vendedor]',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'directlink'	=> 'id,nombre;apellidos|usuarios|where visibilidad=1|1',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre;apellidos|usuarios|where visibilidad=1',
						'style'			=> 'width:320px;',
						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1',
						'validacion'	=> '1',
						'noedit'		=> '1',
						'queries'		=> '1'
				),
				'progsug'		=>array(
						'campo'			=> 'progsug',
						'label'			=> 'Fecha Sugerida Entrega',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '7',
						'derecha'		=> '1',
						'rango'			=> 'now,+2 years',
						'default'		=> 'now()',
						'listhtml'		=> 'nogrilla'
				),
				'num_factura'	=>array(
						'campo'			=> 'num_factura',
						'label'			=> 'Factura',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'nogrilla'		=> '0',
						'frozen'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'mon_factura'	=>array(
						'campo'			=> 'mon_factura',
						'label'			=> 'Monto Factura',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'nogrilla'		=> '0',
						'frozen'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'method'		=>array(
						'campo'			=> 'method',
						'tipo'			=> 'inp',
						'indicador'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1',
						'listable'		=> '0'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'exportar_excel'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_VENTAS_DOCUMENTOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Documentos',
		'nombre_singular'=> 'documento',
		'nombre_plural'	=> 'documentos',
		'tabla'			=> 'productos_ventas_documentos',
		'archivo'		=> 'productos_ventas_documentos',
		'prefijo'		=> 'provendoc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Documentos',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_VENTAS_DOCUMENTOS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'subbottom'		=> 'factnum=TOTAL&monto=SUM&recibido=SUM',
		'postscript'	=> '
				if(LL["moneda"]=="soles"){
					$ttcc=LL["tc"];
					$solr=LL["recibido"]/$ttcc;
					$solm=LL["monto"]/$ttcc;
					LL["recibido"]=$solr;
					LL["monto"]=$solm;
					update(array("recibido"=>$solr),TT,"where id=II",0);
					update(array("monto"=>$solm),TT,"where id=II",0);
				}
				if(SS=="insert" or SS=="update"){
					$pvfinal=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					$id_item_item=dato("id_item_item","productos_ventas","where id=".LL["id_grupo"],0);
					$item_item=fila("id_cliente,id_vendedor","productos_ventas","where id=".LL["id_grupo"],0);
					$saldo=$pvfinal;
					$montoT=0;
					$recibidoT=0;
					$docs=select("recibido,id,operacion,monto,factnum,fecha_creacion",TT,"where id_grupo=".LL["id_grupo"],0);
					foreach($docs as $doc){
						$saldo=$saldo-$doc["recibido"];
						$recibidoT	=$recibidoT+$doc["recibido"];
						$montoT		=$montoT+$doc["monto"];
						if($doc["operacion"]=="2"){
							$factura=$doc["factnum"];
							$mon_factura=$doc["monto"];
							$fecha	=$doc["fecha_creacion"];
						}
						update(array("saldo"=>$saldo),TT,"where id=".$doc["id"],0);
					}
					update(array("saldo"=>$saldo),"productos_ventas","where id=".LL["id_grupo"],0);


					if($recibidoT==$pvfinal or $montoT==$pvfinal){
						update(array("venta_fecha"=>$fecha,"venta_precio"=>$pvfinal,"venta_factura"=>$factura),"productos_items_items","where id=".$id_item_item,0);

						update(array("mon_factura"=>$mon_factura,"num_factura"=>$factura),TT,"where id=II",0);//TEMPORAL

						if($recibidoT==$pvfinal){//cancelado
							update(array("id_status"=>"4"),"productos_items_items","where id=".$id_item_item,0);
						}elseif($montoT==$pvfinal){//facturado
							update(array("id_status"=>"3"),"productos_items_items","where id=".$id_item_item,0);
						}
					}

					update(array("venta_abono"=>$recibidoT,"venta_total_facturas"=>$montoT,"venta_id_cliente"=>$item_item["id_cliente"],"venta_id_vendedor"=>$item_item["id_vendedor"]),"productos_items_items","where id=".$id_item_item,0);

				}
				if(SS=="delete"){
					$pvfinal=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					$saldo=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					//$saldo=$saldo*1;
					$docs=select("recibido,id",TT,"where id_grupo=".LL["id_grupo"],0);
					foreach($docs as $doc){
						$saldo=$saldo-$doc["recibido"];
						update(array("saldo"=>$saldo),TT,"where id=".$doc["id"],0);
					}
					update(array("saldo"=>$saldo),"productos_ventas","where id=".LL["id_grupo"],0);
					$item_item1=fila("id_item_item","productos_ventas","where id=".LL["id_grupo"],0);
					update(array("id_item_item"=>$item_item1["id_item_item"]),TT,"where id=".II);
				}
		',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '0',
						'width'			=> '50px',
						'label'			=> 'Correl'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'width'			=> '85px'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'id_ubicacion_salida_new'=>array(
						'campo'			=> 'id_ubicacion_salida_new',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida_new]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|where id!=4',
						'load'			=> 'id_item_item_new||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida_new] and id_item=[id_item_new] and id_color=[id_color_new] and productos_items_items.id_status=1;id_item_new||productos_items.id as id,productos_items.nombre as nombre|productos_items,productos_items_items|where productos_items_items.id_item=productos_items.id and productos_items_items.id_ubicacion=[id_ubicacion_salida_new] and  productos_items_items.id_color=[id_color_new] and productos_items_items.id_status=1;id_color_new||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida_new]  AND  productos_items_items.id_status=1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'listable'		=> '1',
						'tip_foreig'	=> '0',
						'disabled'		=> '1'
				),
				'id_item_new'	=>array(
						'campo'			=> 'id_item_new',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_new]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|where 0',
						'load'			=> 'id_item_item_new||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida_new] and id_item=[id_item_new] and id_color=[id_color_new] and productos_items_items.id_status=1;id_color_new||productos_colores.id as id ,productos_colores.nombre as nombre|productos_colores,productos_items_items|productos_items_items.id_color=productos_colores.id  AND productos_items_items.id_ubicacion=[id_ubicacion_salida_new]  AND  productos_items_items.id_status=1;|||pvpromocion as pvpromocional_new,0 as descuento_new,pvpromocion as pvfinal_new|productos_items|where id=[id_item_new]',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'disabled'		=> '1'
				),
				'id_color_new'	=>array(
						'campo'			=> 'id_color_new',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_color_new]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_colores|where 0',
						'load'			=> 'id_item_item_new||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida_new] and id_item=[id_item_new] and id_color=[id_color_new] and productos_items_items.id_status=1;',
						'width'			=> '50px',
						'derecha'		=> '2',
						'queries'		=> '1',
						'listable'		=> '1',
						'disabled'		=> '1'
				),
				'id_item_item_new'=>array(
						'campo'			=> 'id_item_item_new',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item_new]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,vin|productos_items_items|where 0',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '0',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1',
						'unique'		=> '1',
						'disabled'		=> '1'
				),
				'pvpromocional_new'=>array(
						'campo'			=> 'pvpromocional_new',
						'label'			=> 'PV Promocional',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'frozen'		=> '1',
						'nogrilla'		=> '0',
						'listclass'		=> 'nogrilla',
						'disabled'		=> '1'
				),
				'descuento_new'	=>array(
						'campo'			=> 'descuento_new',
						'label'			=> 'Descuento',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'live'			=> '[pvfinal_new]=[pvpromocional_new] - [descuento_new];[saldo_new]=[pvfinal_new]',
						'listable'		=> '1',
						'nogrilla'		=> '0',
						'listclass'		=> 'nogrilla',
						'disabled'		=> '1'
				),
				'pvfinal_new'	=>array(
						'campo'			=> 'pvfinal_new',
						'label'			=> 'Precio Venta Final',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'live'			=> '[descuento_new]=[pvpromocional_new] - [pvfinal_new];[saldo_new]=[pvfinal_new]',
						'nogrilla'		=> '0',
						'disabled'		=> '1'
				),
				'operacion'		=>array(
						'campo'			=> 'operacion',
						'label'			=> 'Operación',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Separación',
								'2'			=> 'Cancelatorio',
								'3'			=> 'Nota de crédito',
								'4'			=> 'Pagos Extemporáneos'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '120px'
				),
				'factnum'		=>array(
						'campo'			=> 'factnum',
						'label'			=> '# Doc',
						'width'			=> '70px',
						'tipo'			=> 'inp',
						'style'			=> 'width:110px;',
						'derecha'		=> '2',
						'listable'		=> '1'
				),
				'ctabanco'		=>array(
						'campo'			=> 'ctabanco',
						'label'			=> 'Cuenta de Banco',
						'width'			=> '130px',
						'tipo'			=> 'hid',
						'style'			=> 'width:170px;',
						'opciones'		=> 'id,nombre|bancos_cuentas',
						'load'			=> '|||moneda as moneda|bancos_cuentas|where id=[ctabanco]',
						'afterload'		=> 'update_ini_moneda',
						'derecha'		=> '1',
						'listable'		=> '0'
				),
				'moneda'		=>array(
						'campo'			=> 'moneda',
						'label'			=> 'Moneda del Abono',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:50px;',
						'derecha'		=> '2',
						'listable'		=> '0',
						'frozen'		=> '1'
				),
				'importe'		=>array(
						'campo'			=> 'importe',
						'label'			=> 'Importe en Moneda del Abono',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '0'
				),
				'opeban'		=>array(
						'campo'			=> 'opeban',
						'label'			=> 'Operacion Bancaria',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '0',
						'unique'		=> '1',
						'validacion'	=> '1'
				),
				'dolares'		=>array(
						'campo'			=> 'dolares',
						'label'			=> 'Equivalente Dolares',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'disabled'		=> '1',
						'listable'		=> '0'
				),
				'tc'			=>array(
						'campo'			=> 'tc',
						'label'			=> 'Tipo de Cambio',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'style'			=> 'width:40px;',
						'derecha'		=> '1',
						'listable'		=> '0',
						'default'		=> '2.64'
				),
				'monto'			=>array(
						'campo'			=> 'monto',
						'label'			=> 'Mont Doc',
						'width'			=> '52px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'live'			=> '[importe]=[monto];[recibido]=[monto];'
				),
				'recibido'		=>array(
						'campo'			=> 'recibido',
						'label'			=> 'Recibido',
						'width'			=> '52px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'frozen'		=> '1'
				),
				'saldo'			=>array(
						'campo'			=> 'saldo',
						'label'			=> 'Saldo',
						'width'			=> '52px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'frozen'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,vin|productos_items_items|where 0',
						'width'			=> '100px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1',
						'unique'		=> '1',
						'disabled'		=> '1'
				),
				'method'		=>array(
						'campo'			=> 'method',
						'tipo'			=> 'inp',
						'indicador'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1',
						'listable'		=> '0'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'order_by'		=> 'id asc',
		'user'			=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_PROGRAMACION']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Programación',
		'nombre_singular'=> 'programación',
		'nombre_plural'	=> 'programaciones',
		'tabla'			=> 'productos_programacion',
		'archivo'		=> 'productos_programacion',
		'prefijo'		=> 'proprog',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Programación',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_PROGRAMACION',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="insert"){
					update(array("status_pdi"=>"2"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
				if(SS=="update"){

				}
				if(SS=="delete"){
					update(array("status_pdi"=>"1"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
		',
		'procesos'		=>array(
				array(
						'label'			=> 'Programacion de Tarea',
						'ot'			=> 'productos_programacion_subitems',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Crear',
						'params'		=> 'id_item_item|disabled=1',
						'cargar'		=>array(
								'fecha_cierre'	=> 'now()'
						)
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'queries'		=> '1',
						'label'			=> 'creación'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'Vin',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:200px',
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where productos_items_items.status_pdi=1',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where productos_items_items.status_pdi=1',
						'load'			=> '||||progsug as fecha_prog|productos_ventas|where id_item_item=[id_item_item]',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'controles'		=> '<a href="custom/productos_programacion_subitems.php?id=[id]" rel="subs">{select count(*) from productos_programacion_subitems  where id_grupo=[id]} mensajes</a>
							',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1'
				),
				'costo_total'	=>array(
						'campo'			=> 'costo_total',
						'label'			=> 'Costo Total',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'listhtml'		=> '',
						'style'			=> 'width:50px;',
						'frozen'		=> '1'
				),
				'fecha_termino'	=>array(
						'campo'			=> 'fecha_termino',
						'label'			=> 'Termino',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'default'		=> '',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'fecha_prog'	=>array(
						'campo'			=> 'fecha_prog',
						'label'			=> 'Ofrecido',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'default'		=> '',
						'frozen'		=> '0',
						'queries'		=> '0'
				),
				'fecha_lista'	=>array(
						'campo'			=> 'fecha_lista',
						'label'			=> 'Cierre',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '2',
						'default'		=> 'now()',
						'disabled'		=> '1',
						'queries'		=> '0'
				),
				'cerrado'		=>array(
						'campo'			=> 'cerrado',
						'label'			=> 'Cerrado',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'default'		=> '0',
						'style'			=> 'width:45px;',
						'derecha'		=> '1',
						'width'			=> '30px',
						'disabled'		=> '1'
				),
				'observaciones'	=>array(
						'campo'			=> 'observaciones',
						'label'			=> 'Observaciones',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_PROGRAMACION_SUBITEMS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Operaciones',
		'nombre_singular'=> 'operación',
		'nombre_plural'	=> 'operaciones',
		'tabla'			=> 'productos_programacion_subitems',
		'archivo'		=> 'productos_programacion_subitems',
		'prefijo'		=> 'proprogsub',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> '   Operaciones',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_PROGRAMACION_SUBITEMS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'subbottom'		=> 'nombre=TOTAL&horas=SUM&costo=SUM',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="insert"){
					$dato=dato("id_item_item","productos_programacion","where id=".LL["id_grupo"]);
					update(array("id_item_item"=>$dato),"productos_programacion_subitems","where id=II",0);
					//
				}
				if(SS=="update"){
					$num_procesos_abiertos=contar(productos_programacion_subitems,"where id_grupo=".LL["id_grupo"]." and fecha_cierre is NULL");
					if($num_procesos_abiertos==0){
					$dato=dato("id_item_item","productos_programacion","where id=".LL["id_grupo"]);
					update(array("status_pdi"=>"3","fecha_pdi"=>"now()"),"productos_items_items","where id=".$dato,0);
					}
					//echo PP;
					if(PP=="0"){
						update(array("conf"=>"0|disabled=1"),TT,"where id=II",0);
					}
				}
				if(SS=="delete"){
					//
				}
		',
		'procesos'		=>array(
				array(
						'label'			=> 'Cierre de Tareas',
						'accion'		=> 'update',
						'extra'			=> 'id=[id]',
						'buttom'		=> 'Cerrar',
						'params'		=> 'nombre|frozen=1&costo|frozen=1&horas|frozen=1&fecha_inicio|frozen=1&fecha_fin|frozen=1&id_receptor|frozen=1',
						'cargar'		=>array(
								'fecha_cierre'	=> 'now()'
						)
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Operación',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'Vin',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:200px',
						'opciones'		=> 'id,vin|productos_items_items|where 1',
						'directlink'	=> 'id,vin|productos_items_items|where 1',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1'
				),
				'horas'			=>array(
						'campo'			=> 'horas',
						'label'			=> 'Tiempo (horas)',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '1',
						'derecha'		=> '1',
						'size'			=> '4'
				),
				'costo'			=>array(
						'campo'			=> 'costo',
						'label'			=> 'Costo x Operación',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '1',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'listhtml'		=> '',
						'style'			=> 'width:50px;'
				),
				'fecha_inicio'	=>array(
						'campo'			=> 'fecha_inicio',
						'label'			=> 'Inicio',
						'tipo'			=> 'fch',
						'width'			=> '90px',
						'time'			=> '1',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'default'		=> 'now()',
						'queries'		=> '1'
				),
				'fecha_fin'		=>array(
						'campo'			=> 'fecha_fin',
						'label'			=> 'Termino',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'time'			=> '1',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '2',
						'default'		=> 'now()',
						'queries'		=> '1'
				),
				'fecha_cierre'	=>array(
						'campo'			=> 'fecha_cierre',
						'label'			=> 'Cierre',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'id_receptor'	=>array(
						'campo'			=> 'id_receptor',
						'label'			=> 'Contratista',
						'tipo'			=> 'hid',
						'validacion'	=> '1',
						'default'		=> '[id_receptor]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|proveedores',
						'width'			=> '200px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'listable'		=> '1',
						'tip_foreig'	=> '1'
				),
				'qc'			=>array(
						'campo'			=> 'qc',
						'label'			=> 'QC',
						'width'			=> '30px',
						'tipo'			=> 'txt',
						'style'			=> 'width:300px;',
						'derecha'		=> '1'
				),
				'conf'			=>array(
						'campo'			=> 'conf',
						'label'			=> 'conf',
						'tipo'			=> 'txt',
						'indicador'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_ENTREGAS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Entregas',
		'nombre_singular'=> 'entrega',
		'nombre_plural'	=> 'entregas',
		'tabla'			=> 'productos_entregas',
		'archivo'		=> 'productos_entregas',
		'prefijo'		=> 'proent',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Entregas',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_ENTREGAS',
		'orden'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="insert"){
					update(array("id_status"=>"5"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
				if(SS=="update"){

				}
				if(SS=="delete"){
					update(array("id_status"=>"4"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
		',
		'procesos'		=>array(
				array(
						'label'			=> 'Impresión de Guía de Remisión',
						'rel'			=> 'width:500,height:300',
						'params'		=> 'motivo_traslado_otros|disabled=0&motivo_traslado_otros|validacion=0&direccion|disabled=0&direccion|validacion=0&id_ubicacion_llegada|disabled=0&id_ubicacion_llegada|validacion=0&imp_chofer_nombre|disabled=0&imp_chofer_nombre|validacion=0&imp_placa|disabled=0&imp_placa|validacion=0&imp_chofer_licencia|disabled=0&imp_chofer_licencia|validacion=0&motivo_traslado|disabled=0&motivo_traslado|validacion=0&tipo_combustible|disabled=0&tipo_combustible|validacion=0&numero_guia|frozen=1&numero_guia|disabled=0&numero_guia|validacion=1&id_ubicacion|disabled=1&id_item_item|disabled=1&fecha_entrega|disabled=1&fecha_venta|disabled=1&venta_factura|disabled=1&id_vendedor|disabled=1&
id_cliente|disabled=1&id_item|disabled=1&nummotor|disabled=1&yearfab|disabled=1&id_color|disabled=1&id_placa|disabled=1&receptor_nombre|disabled=1&
receptor_dni|disabled=1&chofer_nombre|disabled=1&chofer_dni|disabled=1&tags|disabled=1&onload_include=base2/on_impresiones.php',
						'buttom'		=> 'Imprimir',
						'accion'		=> 'update,load=imprimir_entregas.php',
						'disabled'		=> '1'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_ubicacion'	=>array(
						'campo'			=> 'id_ubicacion',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones',
						'width'			=> '95px',
						'derecha'		=> '1',
						'listable'		=> '1',
						'queries'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'Vin',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:200px',
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.status_pdi=3 and productos_items_items.id=productos_ventas.id_item_item',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=4 and (productos_items_items.status_pdi=3 or 1 ) and (productos_items_items.status_warrant!=1 or 1 ) and productos_items_items.id=productos_ventas.id_item_item',
						'load'			=> '|||venta_factura as venta_factura|productos_items_items|where id=[id_item_item];||||progsug as fecha_entrega|productos_ventas|where id_item_item=[id_item_item];||||venta_fecha as fecha_venta|productos_items_items|where id=[id_item_item];|||yearfab as yearfab,id_color as id_color,id_item as id_item,nummotor as nummotor,venta_id_cliente as id_cliente,venta_id_vendedor as id_vendedor|productos_items_items|where id=[id_item_item]',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'dlquery'		=> '1'
				),
				'fecha_entrega'	=>array(
						'campo'			=> 'fecha_entrega',
						'label'			=> 'Entrega',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'default'		=> '',
						'tip_foreig'	=> '1',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'fecha_venta'	=>array(
						'campo'			=> 'fecha_venta',
						'label'			=> 'Venta',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '2',
						'default'		=> '',
						'frozen'		=> '1'
				),
				'venta_factura'	=>array(
						'campo'			=> 'venta_factura',
						'label'			=> '# Factura',
						'width'			=> '100px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '1'
				),
				'id_vendedor'	=>array(
						'campo'			=> 'id_vendedor',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'style'			=> 'width:200px;',
						'dlquery'		=> '1'
				),
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|clientes',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'style'			=> 'width:200px;',
						'dlquery'		=> '1',
						'nogrilla'		=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'frozen'		=> '1',
						'dlquery'		=> '0',
						'nogrilla'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'nummotor'		=>array(
						'campo'			=> 'nummotor',
						'label'			=> '# Motor',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:200px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'noedit'		=> '1',
						'frozen'		=> '1',
						'dlquery'		=> '0',
						'nogrilla'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'yearfab'		=>array(
						'campo'			=> 'yearfab',
						'label'			=> 'Año Fabricación',
						'tipo'			=> 'com',
						'rango'			=> '-8 years,+2 years',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '4',
						'default'		=> 'now()',
						'like'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'dlquery'		=> '0',
						'nogrilla'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_color]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_colores',
						'width'			=> '50px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'listable'		=> '1',
						'dlquery'		=> '0',
						'nogrilla'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'id_placa'		=>array(
						'campo'			=> 'id_placa',
						'label'			=> 'Placa de exibición',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_placa]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre|placas_temporales|where visibilidad=1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'crearforeig'	=> '0',
						'frozen'		=> '0'
				),
				'receptor_nombre'=>array(
						'campo'			=> 'receptor_nombre',
						'label'			=> 'Receptor Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'style'			=> 'width:300px;',
						'derecha'		=> '1',
						'listable'		=> '1'
				),
				'receptor_dni'	=>array(
						'campo'			=> 'receptor_dni',
						'label'			=> 'DNI',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1'
				),
				'chofer_nombre'	=>array(
						'campo'			=> 'chofer_nombre',
						'label'			=> 'Chofer nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'style'			=> 'width:300px;',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'listable'		=> '1'
				),
				'chofer_dni'	=>array(
						'campo'			=> 'chofer_dni',
						'label'			=> 'DNI',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),
				'numero_guia'	=>array(
						'campo'			=> 'numero_guia',
						'label'			=> 'Número de Guía',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'no_save'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'id_ubicacion_llegada'=>array(
						'campo'			=> 'id_ubicacion_llegada',
						'label'			=> 'Ubicacion Llegada',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_chofer_nombre'=>array(
						'campo'			=> 'imp_chofer_nombre',
						'label'			=> 'Transportista',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_placa'		=>array(
						'campo'			=> 'imp_placa',
						'label'			=> 'Marca y Número de Placa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'imp_chofer_licencia'=>array(
						'campo'			=> 'imp_chofer_licencia',
						'label'			=> 'N(s) de Licencia(s) de conducir',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'tipo_combustible'=>array(
						'campo'			=> 'tipo_combustible',
						'label'			=> 'Tipo de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1'
				),
				'motivo_traslado'=>array(
						'campo'			=> 'motivo_traslado',
						'label'			=> 'Motivo de Traslado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Venta',
								'2'			=> 'Entre Establecimiento de la misma empresa',
								'3'			=> 'Venta sujeta a confirmar',
								'4'			=> 'Importación',
								'5'			=> 'Exportación',
								'6'			=> 'Compra',
								'7'			=> 'Devolución',
								'8'			=> 'Consignación',
								'9'			=> 'Emisor Itinerante'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '120px',
						'disabled'		=> '1'
				),
				'motivo_traslado_otros'=>array(
						'campo'			=> 'motivo_traslado_otros',
						'label'			=> 'Otros',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '1',
						'derecha'		=> '2'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'seccion'		=> '',
		'exportar_excel'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_DOCUMENTOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Trámites Documentarios',
		'nombre_singular'=> 'documento',
		'nombre_plural'	=> 'documentos',
		'tabla'			=> 'productos_documentos',
		'archivo'		=> 'productos_documentos',
		'prefijo'		=> 'prodoc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Trámites Documentarios',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_DOCUMENTOS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="update"){
					if(LL["fecha_entrega"]!="" and LL["fecha_entrega"]!="0000-00-00 00:00:00"){
						update(array("status"=>"7"),TT,"where id=II",0);
					} elseif(LL["fecha_listo"]!="" and LL["fecha_listo"]!="0000-00-00 00:00:00"){
						update(array("status"=>"6"),TT,"where id=II",0);
					} elseif(LL["fecha_sunarp"]!="" and LL["fecha_sunarp"]!="0000-00-00 00:00:00"){
						update(array("status"=>"5"),TT,"where id=II",0);
					} elseif(LL["fecha_tramite"]!="" and LL["fecha_tramite"]!="0000-00-00 00:00:00"){
						update(array("status"=>"4"),TT,"where id=II",0);
					} elseif(LL["fecha_firma"]!="" and LL["fecha_firma"]!="0000-00-00 00:00:00"){
						update(array("status"=>"3"),TT,"where id=II",0);
					} elseif(LL["fecha_para_revision"]!="" and LL["fecha_para_revision"]!="0000-00-00 00:00:00"){
						update(array("status"=>"2"),TT,"where id=II",0);
					}
				}

		',
		'procesos'		=>array(
				array(
						'label'			=> 'Revisión',
						'params'		=> 'id_item_item|frozen=1',
						'buttom'		=> 'Revisado',
						'cargar'		=>array(
								'fecha_para_revision'=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Firma',
						'params'		=> 'id_item_item|frozen=1&ficha_firma|frozen=0',
						'buttom'		=> 'Firmado',
						'cargar'		=>array(
								'fecha_firma'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Tramitación',
						'params'		=> 'id_item_item|frozen=1&tramitador|frozen=0',
						'buttom'		=> 'Revisado',
						'cargar'		=>array(
								'fecha_tramite'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Actualización Ficha',
						'params'		=> 'id_item_item|frozen=1&ficha_sunarp|frozen=0',
						'buttom'		=> 'Actualizar',
						'cargar'		=>array(
								'fecha_sunarp'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Recepcionado',
						'params'		=> 'id_item_item|frozen=1&placa|frozen=0',
						'buttom'		=> 'Recibido',
						'cargar'		=>array(
								'fecha_listo'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Cliente',
						'params'		=> 'id_item_item|frozen=1&receptor_nombre|frozen=0&receptor_dni|frozen=0',
						'buttom'		=> 'Cerrar',
						'cargar'		=>array(
								'fecha_entrega'	=> 'now()'
						),
						'accion'		=> 'update'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'label'			=> 'Recepción',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'opciones'		=>array(
								'1'			=> 'ingresado',
								'2'			=> 'revisado',
								'3'			=> 'firmado',
								'4'			=> 'tramitación',
								'5'			=> 'con ficha',
								'6'			=> 'listo',
								'7'			=> 'entregado'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '150px',
						'frozen'		=> '1',
						'queries'		=> '1',
						'validacion'	=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:140px;',
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=4 and  and productos_items_items.id=productos_ventas.id_item_item',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=4 and productos_items_items.id=productos_ventas.id_item_item',
						'load'			=> '|||venta_id_vendedor as id_usuario|productos_items_items|where id=[id_item_item];||||venta_fecha as venta_fecha|productos_items_items|where id=[id_item_item]',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1',
						'tip_foreig'	=> '1',
						'unique'		=> '1'
				),
				'venta_fecha'	=>array(
						'campo'			=> 'venta_fecha',
						'label'			=> 'Fecha Venta',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '0',
						'formato'		=> '7',
						'style'			=> '',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'disabled'		=> '1'
				),
				'fecha_para_revision'=>array(
						'campo'			=> 'fecha_para_revision',
						'label'			=> 'Para Revisión',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'fecha_firma'	=>array(
						'label'			=> 'fecha Firma',
						'campo'			=> 'fecha_firma',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'ficha_firma'	=>array(
						'campo'			=> 'ficha_firma',
						'label'			=> 'Ficha Firma',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'disabled'		=> '1'
				),
				'fecha_tramite'	=>array(
						'campo'			=> 'fecha_tramite',
						'label'			=> 'Trámite',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'tramitador'	=>array(
						'campo'			=> 'tramitador',
						'label'			=> 'Tramitador',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[tramitador]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|tramitadores',
						'width'			=> '200px',
						'derecha'		=> '2',
						'queries'		=> '1',
						'frozen'		=> '1'
				),
				'fecha_sunarp'	=>array(
						'campo'			=> 'fecha_sunarp',
						'label'			=> 'Ficha SUNARP',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'ficha_sunarp'	=>array(
						'campo'			=> 'ficha_sunarp',
						'label'			=> 'Ficha Sunarp',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1'
				),
				'fecha_listo'	=>array(
						'campo'			=> 'fecha_listo',
						'label'			=> 'Trámite Listo',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'placa'			=>array(
						'campo'			=> 'placa',
						'label'			=> 'Placa',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'size'			=> '6',
						'listable'		=> '1'
				),
				'fecha_entrega'	=>array(
						'campo'			=> 'fecha_entrega',
						'label'			=> 'Entrega',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'receptor_nombre'=>array(
						'campo'			=> 'receptor_nombre',
						'label'			=> 'Receptor',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'style'			=> 'width:150px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '1'
				),
				'receptor_dni'	=>array(
						'campo'			=> 'receptor_dni',
						'label'			=> 'DNI',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_WARRANTS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Warrants',
		'nombre_singular'=> 'warrant',
		'nombre_plural'	=> 'warrants',
		'tabla'			=> 'productos_warrants',
		'archivo'		=> 'productos_warrants',
		'prefijo'		=> 'proswar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Warrants',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_WARRANTS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="update" or SS=="insert"){
					//update(array("warrant"=>LL["monto"],"status_warrant"=>LL["status_warrant"]),"productos_items_items","where id=".LL["id_item_item"],0);
				}
				if(SS=="delete"){
					update(array("warrant"=>"NULL","status_warrant"=>"NULL"),"productos_items_items","where id_grupo=".LL["id"],0);
					delete("productos_warrants_subitems","where id_grupo=".LL["id"],0);
				}
		',
		'procesos'		=>array(
				array(
						'label'			=> 'Constitución',
						'params'		=> 'id_item_item|frozen=0&monto|frozen=0&fecha_activacion|frozen=0',
						'buttom'		=> 'Crear',
						'ot'			=> 'productos_warrants_subitems',
						'accion'		=> 'insert',
						'extra'			=> 'id=[id]',
						'cargar'		=>array(
								'tipo'			=> '1',
								'status_warrant'	=> '1'
						)
				),
				array(
						'label'			=> 'Prórroga',
						'params'		=> 'item|frozen=1&documento|frozen=1&id_banco|frozen=1&fecha_vencimiento|frozen=0',
						'buttom'		=> 'Prorrogar',
						'accion'		=> 'update'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'documento'		=>array(
						'campo'			=> 'documento',
						'label'			=> '# Documento',
						'width'			=> '100px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'controles'		=> '<a href="custom/productos_warrants_subitems.php?id=[id]" rel="subs">{select count(*) from productos_warrants_subitems  where id_grupo=[id]} warranteos</a>',
						'queries'		=> '1'
				),
				'id_banco'		=>array(
						'campo'			=> 'id_banco',
						'label'			=> 'Banco Beneficiario',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_banco]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|bancos',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'fecha_vencimiento'=>array(
						'campo'			=> 'fecha_vencimiento',
						'label'			=> 'Vencimiento',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'default'		=> 'now()',
						'queries'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '0',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_WARRANTS_SUBITEMS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Warranteos',
		'nombre_singular'=> 'warranteo',
		'nombre_plural'	=> 'warranteos',
		'tabla'			=> 'productos_warrants_subitems',
		'archivo'		=> 'productos_warrants_subitems',
		'prefijo'		=> 'prowarsub',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '0',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> '&nbsp;&nbsp;&nbsp;Warranteos',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_WARRANTS_SUBITEMS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="update" or SS=="insert"){
					update(array("warrant"=>LL["monto"],"status_warrant"=>LL["status_warrant"]),"productos_items_items","where id=".LL["id_item_item"],0);
					update(array("vin_status"=>dato("id_status","productos_items_items","where id=".$LL["id_item_item"])),TT,"where id=II",0);//TEMPORAL
				}
				if(SS=="delete"){
					update(array("warrant"=>"NULL","status_warrant"=>"NULL"),"productos_items_items","where id=".LL["id_item_item"],0);
				}
		',
		'procesos'		=>array(
				array(
						'label'			=> 'Levantamiento',
						'params'		=> 'item|frozen=0&fecha_levantamiento|frozen=0&fecha_activacion|frozen=1&monto|frozen=1',
						'buttom'		=> 'Levantamiento',
						'cargar'		=>array(
								'fecha_levantamiento'=> 'now()',
								'tipo'			=> '2',
								'status_warrant'	=> '2'
						),
						'accion'		=> 'update'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'item'			=>array(
						'campo'			=> 'item',
						'label'			=> 'ITEM',
						'width'			=> '100px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'listable'		=> '1',
						'queries'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'C',
								'2'			=> 'L',
								'3'			=> 'P'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '1',
						'width'			=> '30px',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:140px;',
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where 1',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where productos_items_items.warrant is NULL and 1',
						'load'			=> '|||id_status as vin_status|productos_items_items|where id=[id_item_item]',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1',
						'tip_foreig'	=> '1',
						'unique'		=> '1',
						'frozen'		=> '1'
				),
				'vin_status'	=>array(
						'campo'			=> 'vin_status',
						'label'			=> 'Vin Status',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_stock_status',
						'derecha'		=> '2',
						'default'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1'
				),
				'monto'			=>array(
						'campo'			=> 'monto',
						'label'			=> 'Monto Warranteado',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '1',
						'size'			=> '8'
				),
				'status_warrant'	=>array(
						'campo'			=> 'status_warrant',
						'label'			=> 'Status',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'activado',
								'2'			=> 'levantado'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '55px',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'fecha_activacion'=>array(
						'campo'			=> 'fecha_activacion',
						'label'			=> 'Activación',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'default'		=> 'now()',
						'queries'		=> '1'
				),
				'fecha_levantamiento'=>array(
						'campo'			=> 'fecha_levantamiento',
						'label'			=> 'Levantamiento',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'conf'			=>array(
						'campo'			=> 'conf',
						'label'			=> 'conf',
						'tipo'			=> 'txt',
						'indicador'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_GARANTIAS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Garantías',
		'nombre_singular'=> 'garantía',
		'nombre_plural'	=> 'garantías',
		'tabla'			=> 'productos_garantias',
		'archivo'		=> 'productos_garantias',
		'prefijo'		=> 'progar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Garantías',
		'por_pagina'	=> '20',
		'me'			=> 'PRODUCTOS_GARANTIAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				if(SS=="update"){
					if(PP=="0"){
						update(array("status"=>"2","conf"=>"0|disabled=1&1|disabled=0"),TT,"where id=II",0);
					}
					if(PP=="1"){
						update(array("status"=>"3","conf"=>"0|disabled=1&1|disabled=1"),TT,"where id=II",0);
					}
				}

		',
		'procesos'		=>array(
				array(
						'label'			=> 'Aprobación de Garantías',
						'params'		=> 'id_item_item|frozen=1&descripcion|frozen=1&kilometraje|frozen=1&user1|frozen=1&mdo|frozen=0&maes|frozen=0&rpto|frozen=0&user2|frozen=0&observacion|frozen=1&maes|validacion=1&rpto|validacion=1&mdo|validacion=1',
						'buttom'		=> 'Aprobar Garantía',
						'cargar'		=>array(
								'fecha_aprobado'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Atención de Garantías',
						'params'		=> 'id_item_item|frozen=1&descripcion|frozen=1&kilometraje|frozen=1&user1|frozen=1&factura|frozen=0&total_factura|frozen=0&factura|validacion=1&total_factura|validacion=1',
						'buttom'		=> 'Cerrar',
						'cargar'		=>array(
								'fecha_atendido'	=> 'now()'
						),
						'accion'		=> 'update'
				)
		),
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id',
						'listable'		=> '1',
						'width'			=> '50px',
						'label'			=> 'Código'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'queries'		=> '1',
						'label'			=> 'Fecha solicitud'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Usuario',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|servicio_tecnico',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '0'
				),
				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'opciones'		=>array(
								'1'			=> 'Solicitado',
								'2'			=> 'Autorizado',
								'3'			=> 'Cerrado'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'width'			=> '150px',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'id_item_item'	=>array(
						'campo'			=> 'id_item_item',
						'label'			=> 'VIN',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item_item]',
						'style'			=> 'width:140px;',
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=5 and productos_items_items.id=productos_ventas.id_item_item',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=5 and productos_items_items.id=productos_ventas.id_item_item',
						'load'			=> '||||progsug as fecha_entrega|productos_ventas|where id_item_item=[id_item_item];|||id_item as id_item|productos_items_items|where id=[id_item_item];|||placa as placa|productos_items_items|where id_item_item=[id_item_item]',
						'width'			=> '140px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1',
						'tip_foreig'	=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'style'			=> 'width:140px,',
						'opciones'		=> 'id,codigo;nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'tip_foreig'	=> '1',
						'frozen'		=> '1'
				),
				'placa'			=>array(
						'campo'			=> 'placa',
						'label'			=> 'Placa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'size'			=> '10',
						'style'			=> 'width:60px;',
						'frozen'		=> '1'
				),
				'fecha_entrega'	=>array(
						'campo'			=> 'fecha_entrega',
						'label'			=> 'Entrega',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '2',
						'default'		=> '',
						'tip_foreig'	=> '1',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'kilometraje'	=>array(
						'campo'			=> 'kilometraje',
						'label'			=> 'Kilometraje',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'size'			=> '10',
						'style'			=> 'width:60px;'
				),
				'descripcion'	=>array(
						'campo'			=> 'descripcion',
						'label'			=> 'Descripción Falla',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '1',
						'style'			=> 'height:40px;width:600px;',
						'width'			=> '300px'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto Falla',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'fotfal',
						'carpeta'		=> 'fotfal',
						'tamanos'		=> '100x100,850x450',
						'tamano_listado'	=> '1',
						'disabled'		=> '0'
				),
				'fecha_aprobado'	=>array(
						'campo'			=> 'fecha_aprobado',
						'label'			=> 'Fecha Aprobado',
						'tipo'			=> 'fch',
						'width'			=> '90px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'mdo'			=>array(
						'campo'			=> 'mdo',
						'label'			=> 'Total Mano de Obra',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'style'			=> 'width:50px;',
						'disabled'		=> '0',
						'frozen'		=> '1'
				),
				'maes'			=>array(
						'campo'			=> 'maes',
						'label'			=> 'Total Maestranza',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'style'			=> 'width:50px;',
						'disabled'		=> '0',
						'frozen'		=> '1'
				),
				'rpto'			=>array(
						'campo'			=> 'rpto',
						'label'			=> 'Total Repuesto',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'style'			=> 'width:50px;',
						'disabled'		=> '0',
						'frozen'		=> '1'
				),
				'observacion'	=>array(
						'campo'			=> 'observacion',
						'label'			=> 'Observación',
						'tipo'			=> 'txt',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'height:40px;width:600px;',
						'frozen'		=> '1',
						'width'			=> '300px'
				),
				'user2'			=>array(
						'campo'			=> 'user2',
						'label'			=> 'Autorizado por',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[user2]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|jefes_garantias',
						'width'			=> '200px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'frozen'		=> '1'
				),
				'fecha_atendido'	=>array(
						'campo'			=> 'fecha_atendido',
						'label'			=> 'Fecha Atendido',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'formato'		=> '7b',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'queries'		=> '1'
				),
				'factura'		=>array(
						'campo'			=> 'factura',
						'label'			=> '# Factura',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'listhtml'		=> '',
						'style'			=> 'width:50px;',
						'disabled'		=> '0',
						'frozen'		=> '1'
				),
				'total_factura'	=>array(
						'campo'			=> 'total_factura',
						'label'			=> 'Total Factura',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'width'			=> '50px',
						'validacion'	=> '0',
						'variable'		=> 'float',
						'derecha'		=> '2',
						'style'			=> 'width:50px;',
						'disabled'		=> '0',
						'frozen'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1',
						'disabled'		=> '0'
				),
				'conf'			=>array(
						'campo'			=> 'conf',
						'label'			=> 'conf',
						'tipo'			=> 'txt',
						'indicador'		=> '1'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'user'			=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_FOTOS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> '<a href="custom/productos_items.php">Vehículos</a>  -

                      Fotos de {select nombre from productos_items where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'productos_fotos',
		'archivo'		=> 'productos_fotos',
		'prefijo'		=> 'profot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'PRODUCTOS_FOTOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'profot',
						'carpeta'		=> 'profot_fot',
						'tamanos'		=> '100x100,200x200,350x220,850x450,300x200',
						'tamano_listado'	=> '1',
						'disabled'		=> '0'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> 'Descripción',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px',
						'disabled'		=> '1'
				)
		),
		'por_linea'		=> '6',
		'crear_quick'	=> '1',
		'edicion_completa'=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_MARCAS']=array(
		'titulo'		=> 'Marcas',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
		'tabla'			=> 'productos_marcas',
		'archivo'		=> 'productos_marcas',
		'prefijo'		=> 'protip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Marcas',
		'me'			=> 'PRODUCTOS_MARCAS',
		'orden'			=> '1',
		'width_listado'	=> '',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_tipo=[id]" >{select count(*) from productos_items where id_marca=[id]} modelos</a>',
						'multiopciones'	=> 'Productos|productos_items_tipos|id,nombre|productos_items|where visibilidad=1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '',
		'crear_quick'	=> '0',
		'order_by'		=> '',
		'seccion'		=> 'configuraciones'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_GRUPOS']=array(
		'titulo'		=> 'Lineas',
		'nombre_singular'=> 'lineas',
		'nombre_plural'	=> 'lineas',
		'tabla'			=> 'productos_grupos',
		'archivo'		=> 'productos_grupos',
		'prefijo'		=> 'progru',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Lineas',
		'me'			=> 'PRODUCTOS_GRUPOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '140px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:300px;',
						'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_grupo=[id]" >{select count(*) from productos_items where id_grupo=[id]} modelos</a>

<a  href="custom/productos_stock.php?id_grupo=[id]">{select count(*) from productos_stock where id_grupo=[id]} items</a>'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'set_fila_fijo'	=> '1',
		'seccion'		=> ''
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_BLOQUES']=array(
		'titulo'		=> 'Bloques',
		'nombre_singular'=> 'bloque',
		'nombre_plural'	=> 'bloques',
		'tabla'			=> 'productos_bloques',
		'archivo'		=> 'productos_bloques',
		'prefijo'		=> 'problo',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bloques',
		'me'			=> 'PRODUCTOS_BLOQUES',
		'orden'			=> '1',
		'width_listado'	=> '900px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Bloque',
						'width'			=> '550px',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:650px;height:150px;',
						'botones'		=> 'nombre,texto|productos_bloques|where id=25'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PLACAS_TEMPORALES']=array(
		'titulo'		=> 'Placas de Exhibición',
		'nombre_singular'=> 'placa',
		'nombre_plural'	=> 'placas',
		'tabla'			=> 'placas_temporales',
		'archivo'		=> 'placas_temporales',
		'prefijo'		=> 'platem',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Placas de Exhibición',
		'me'			=> 'PLACAS_TEMPORALES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Placa',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_COLORES']=array(
		'titulo'		=> 'Colores',
		'nombre_singular'=> 'color',
		'nombre_plural'	=> 'colores',
		'tabla'			=> 'productos_colores',
		'archivo'		=> 'productos_colores',
		'prefijo'		=> 'procol',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Colores',
		'me'			=> 'PRODUCTOS_COLORES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['STATUS_COMISION']=array(
		'titulo'		=> 'Status de Comisión',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'status_comision',
		'archivo'		=> 'status_comision',
		'prefijo'		=> 'stacom',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status de Comisión',
		'me'			=> 'STATUS_COMISION',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_PTOVENTA']=array(
		'titulo'		=> 'Puntos de Venta',
		'nombre_singular'=> 'punto de venta',
		'nombre_plural'	=> 'puntos de venta',
		'tabla'			=> 'productos_ptoventa',
		'archivo'		=> 'productos_ptoventa',
		'prefijo'		=> 'propto',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Puntos de Venta',
		'me'			=> 'PRODUCTOS_PTOVENTA',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '0',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANCOS_CUENTAS']=array(
		'titulo'		=> 'Cuentas',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'bancos_cuentas',
		'archivo'		=> 'bancos_cuentas',
		'prefijo'		=> 'bancue',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas',
		'me'			=> 'BANCOS_CUENTAS',
		'orden'			=> '1',
		'width_listado'	=> '600px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'id_banco'		=>array(
						'campo'			=> 'id_banco',
						'label'			=> 'Banco',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_banco]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|bancos',
						'width'			=> '95px',
						'derecha'		=> '1',
						'listable'		=> '1'
				),
				'moneda'		=>array(
						'campo'			=> 'moneda',
						'label'			=> 'Moneda',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '1',
						'opciones'		=>array(
								'soles'			=> 'soles',
								'dólares'		=> 'dólares'
						),
						'default'		=> '2',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'cuenta'		=>array(
						'campo'			=> 'cuenta',
						'label'			=> 'Cta',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANCOS']=array(
		'titulo'		=> 'Bancos',
		'nombre_singular'=> 'banco',
		'nombre_plural'	=> 'bancos',
		'tabla'			=> 'bancos',
		'archivo'		=> 'bancos',
		'prefijo'		=> 'banc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bancos',
		'me'			=> 'BANCOS',
		'orden'			=> '1',
		'width_listado'	=> '600px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:400px;height:80px;'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_UBICACIONES']=array(
		'titulo'		=> 'Ubicaciones',
		'nombre_singular'=> 'ubicación',
		'nombre_plural'	=> 'ubicaciones',
		'tabla'			=> 'productos_ubicaciones',
		'archivo'		=> 'productos_ubicaciones',
		'prefijo'		=> 'proubi',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Ubicaciones',
		'me'			=> 'PRODUCTOS_UBICACIONES',
		'orden'			=> '1',
		'width_listado'	=> '600px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'style'			=> 'width:400px;height:80px;'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_STATUS']=array(
		'titulo'		=> 'Status',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'productos_status',
		'archivo'		=> 'productos_status',
		'prefijo'		=> 'prosta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status',
		'me'			=> 'PRODUCTOS_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_CARROCERIAS']=array(
		'titulo'		=> 'Carrocerias',
		'nombre_singular'=> 'carroceria',
		'nombre_plural'	=> 'carrocerias',
		'tabla'			=> 'productos_carrocerias',
		'archivo'		=> 'productos_carrocerias',
		'prefijo'		=> 'procar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Carrocerias',
		'me'			=> 'PRODUCTOS_CARROCERIAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CHOFERES']=array(
		'titulo'		=> 'Choferes',
		'nombre_singular'=> 'chofer',
		'nombre_plural'	=> 'choferes',
		'tabla'			=> 'choferes',
		'archivo'		=> 'choferes',
		'prefijo'		=> 'chof',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Choferes',
		'me'			=> 'CHOFERES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1',
						'size'			=> '8'
				),
				'licencia'		=>array(
						'campo'			=> 'licencia',
						'label'			=> 'Licencia',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1',
						'size'			=> '8'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '1',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				),
				'id_traslado'	=>array(
						'campo'			=> 'id_traslado',
						'label'			=> 'traslado',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '0',
						'frozen'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PROVEEDORES']=array(
		'titulo'		=> 'Proveedores',
		'nombre_singular'=> 'proveedores',
		'nombre_plural'	=> 'proveedores',
		'tabla'			=> 'proveedores',
		'archivo'		=> 'proveedores',
		'prefijo'		=> 'prov',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Proveedores',
		'me'			=> 'PROVEEDORES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_STOCK_STATUS']=array(
		'titulo'		=> 'Vehículos Status',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'productos_stock_status',
		'archivo'		=> 'productos_stock_status',
		'prefijo'		=> 'prostosta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Vehículos Status',
		'me'			=> 'PRODUCTOS_STOCK_STATUS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0',
		'seccion'		=> 'status'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TRASLADOS_STATUS']=array(
		'titulo'		=> 'Status Traslados',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'traslados_status',
		'archivo'		=> 'traslados_status',
		'prefijo'		=> 'trasta',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Traslados',
		'me'			=> 'TRASLADOS_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '0',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['JEFES_GARANTIAS']=array(
		'titulo'		=> 'Jefes de garantías',
		'nombre_singular'=> 'jefe de garantías',
		'nombre_plural'	=> 'jeges de garantías',
		'tabla'			=> 'jefes_garantias',
		'archivo'		=> 'jefes_garantias',
		'prefijo'		=> 'jefgar',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Jefes de garantías',
		'me'			=> 'JEFES_GARANTIAS',
		'orden'			=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'width_listado'	=> '800px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '6',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1',
		'seccion'		=> 'usuarios'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SERVICIO_TECNIVO']=array(
		'titulo'		=> 'Servicio Técnico Garantías',
		'nombre_singular'=> 'técnico',
		'nombre_plural'	=> 'tecnicos',
		'tabla'			=> 'servicio_tecnico',
		'archivo'		=> 'servicio_tecnico',
		'prefijo'		=> 'sertec',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Servicio Técnico Garantías',
		'me'			=> 'SERVICIO_TECNIVO',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'concesionario'	=>array(
						'campo'			=> 'concesionario',
						'label'			=> 'Concesionario',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '7',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SERVICIO_TECNICO2']=array(
		'titulo'		=> 'Servicio Técnico',
		'nombre_singular'=> 'técnico',
		'nombre_plural'	=> 'tecnicos',
		'tabla'			=> 'servicio_tecnico2',
		'archivo'		=> 'servicio_tecnico2',
		'prefijo'		=> 'sertec',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Servicio Técnico',
		'me'			=> 'SERVICIO_TECNICO2',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '15',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIO_IMPORTACIONES']=array(
		'titulo'		=> 'Usuario Importaciones',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuario_importaciones',
		'archivo'		=> 'usuario_importaciones',
		'prefijo'		=> 'usuimp',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Usuario Importaciones',
		'me'			=> 'USUARIO_IMPORTACIONES',
		'orden'			=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'width_listado'	=> '800px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'width'			=> '150px',
						'style'			=> 'width:450px;height:80px;',
						'tipo'			=> 'txt',
						'validacion'	=> '0'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '8',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TRAMITADORES']=array(
		'titulo'		=> 'Tramitadores',
		'nombre_singular'=> 'tramitador',
		'nombre_plural'	=> 'tramitadores',
		'tabla'			=> 'tramitadores',
		'archivo'		=> 'tramitadores',
		'prefijo'		=> 'tram',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Tramitadores',
		'me'			=> 'TRAMITADORES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '9',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_PROGRAMACIONES']=array(
		'titulo'		=> 'Usuarios Programaciones',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios_programaciones',
		'archivo'		=> 'usuarios_programaciones',
		'prefijo'		=> 'usuprog',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Usuarios Programaciones',
		'me'			=> 'USUARIOS_PROGRAMACIONES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '13',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_ENTREGAS']=array(
		'titulo'		=> 'Usuarios Entregas',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios_entregas',
		'archivo'		=> 'usuarios_entregas',
		'prefijo'		=> 'usuen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Usuarios Entregas',
		'me'			=> 'USUARIOS_ENTREGAS',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '14',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ADMINISTRADORES_VENTAS']=array(
		'titulo'		=> 'Administradores Ventas',
		'nombre_singular'=> 'administrador venta',
		'nombre_plural'	=> 'administradores ventas',
		'tabla'			=> 'administradores_ventas',
		'archivo'		=> 'administradores_ventas',
		'prefijo'		=> 'admven',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Administradores Ventas',
		'me'			=> 'ADMINISTRADORES_VENTAS',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '11',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ADMINISTRADORES_GENERALES']=array(
		'titulo'		=> 'Administradores Generales',
		'nombre_singular'=> 'administrador general',
		'nombre_plural'	=> 'administradores generales',
		'tabla'			=> 'administradores_generales',
		'archivo'		=> 'administradores_generales',
		'prefijo'		=> 'admgen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Administradores Generales',
		'me'			=> 'ADMINISTRADORES_GENERALES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '10',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SUPER_ADMINISTRADORES']=array(
		'titulo'		=> 'Super Administradores',
		'nombre_singular'=> 'administrador',
		'nombre_plural'	=> 'administrafores',
		'tabla'			=> 'super_administradores',
		'archivo'		=> 'super_administradores',
		'prefijo'		=> 'supadm',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Super Administradores',
		'me'			=> 'SUPER_ADMINISTRADORES',
		'orden'			=> '1',
		'width_listado'	=> '800px',
		'archivo_sub'	=> 'usuarios_acceso',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '1'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Usuario',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '150px'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '12',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'grupo'			=> 'productos',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_ITEMS']=array(
		'titulo'		=> 'Atenciones',
		'nombre_singular'=> 'atención',
		'nombre_plural'	=> 'atenciones',
		'tabla'			=> 'ventas_items',
		'archivo'		=> 'ventas_items',
		'prefijo'		=> 'venite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Atenciones',
		'me'			=> 'VENTAS_ITEMS',
		'orden'			=> '0',
		'onedit'		=> 'base2/update_ventas_items.php',
		'oncreate'		=> 'base2/update_ventas_items.php',
		'onload_include'	=> 'base2/update_alertas.php',
		'postscript'	=> '

			if(SS=="insert"){

				update(array("nombre"=>mb_convert_case(LL["nombre"],MB_CASE_TITLE,"UTF-8"),"apellidos"=>mb_convert_case(LL["apellidos"],MB_CASE_TITLE,"UTF-8")),"clientes","where id=".II,0);

			}
			// if(SS=="update"){


			// 	update(array("nombre"=>mb_convert_case(LL["nombre"],MB_CASE_TITLE,"UTF-8"),"apellidos"=>mb_convert_case(LL["apellidos"],MB_CASE_TITLE,"UTF-8")),"clientes","where id=".II,0);

			// }

		',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'queries'		=> '1'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '100px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'default'		=> '[id_cliente]',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'directlink'	=> 'id,nombre;apellidos;dni|clientes|where visibilidad=1|6',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre;apellidos|clientes||telefono;celular_claro;celular_movistar;nextel;rpm;rpc;email;empresa',
						'style'			=> 'width:620px;',
						'controles'		=> '<a href="pop.php?app=enviar_cotizacion&id=[id]" style="color:red;" >Nuevo Mensaje</a>
							<a target="_black" href="../index.php?modulo=items&tab=productos_imprimir&acc=file&id_venta=[id]">imprimir</a>
							<a href="custom/ventas_mensajes.php?id=[id]" rel="subs crear">{select count(*) from ventas_mensajes where id_grupo=[id]} mensajes</a>
							',
						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1',
						'validacion'	=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '1',
						'select_multiple'=> '0',
						'dlquery'		=> '1',
						'queries'		=> '1'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Linea',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_grupos',
						'load'			=> 'id_item||id,nombre|productos_items|where visibilidad=1 and id<555 and id_grupo=',
						'width'			=> '80px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'select_multiple'=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'load'			=> '|||precio|productos_items|where id=[id_item]',
						'select_multiple'=> '1'
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '0',
						'crearforeig'	=> '0',
						'select_multiple'=> '1'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|ventas_status|order by calificacion asc',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'select_multiple'=> '1'
				),
				'id_canal'		=>array(
						'campo'			=> 'id_canal',
						'label'			=> 'Código de Marketing',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|contacto_canales',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'select_multiple'=> '1'
				),
				'id_cuenta_email'=>array(
						'campo'			=> 'id_cuenta_email',
						'label'			=> 'enviar desde',
						'width'			=> '75px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre;email|envios_cuentas',
						'disabled'		=> '0'
				),
				'forma_pago'	=>array(
						'campo'			=> 'forma_pago',
						'label'			=> 'Forma de Pago',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Efectivo',
								'2'			=> 'Crédito',
								'3'			=> 'Leasing'
						),
						'derecha'		=> '1'
				),
				'banco'			=>array(
						'campo'			=> 'banco',
						'label'			=> 'Banco',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'sectorista'	=>array(
						'campo'			=> 'sectorista',
						'label'			=> 'Sectorista',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> 'width:150px;',
						'derecha'		=> '1',
						'style'			=> 'width:150px;'
				),
				'sectorista_fijo'=>array(
						'campo'			=> 'sectorista_fijo',
						'label'			=> 'Fijo',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_movistar'=>array(
						'campo'			=> 'sectorista_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_claro'=>array(
						'campo'			=> 'sectorista_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_rpc'	=>array(
						'campo'			=> 'sectorista_rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '1'
				),
				'sectorista_rpm'	=>array(
						'campo'			=> 'sectorista_rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:100px;'
				),
				'sectorista_nextel'=>array(
						'campo'			=> 'sectorista_nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'derecha'		=> '2'
				),
				'sectorista_email'=>array(
						'campo'			=> 'sectorista_email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:170px;'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'edicion_rapida'	=> '1',
		'alias_grupo'	=> '',
		'seccion'		=> '',
		'order_by'		=> 'id desc',
		'por_pagina'	=> '20',
		'exportar_excel'	=> '1',
		'user'			=> '1',
		'stat'			=> '0',
		'exportar_gm'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CLIENTES']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Clientes',
		'nombre_singular'=> 'cliente',
		'nombre_plural'	=> 'cliente',
		'tabla'			=> 'clientes',
		'archivo'		=> 'clientes',
		'prefijo'		=> 'clie',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Clientes',
		'me'			=> 'CLIENTES',
		'orden'			=> '1',
		'onload_script'	=> '
		<style>
		#group_persona_jurídica { display:none; }
		#group_persona_contacto { display:none; }
		</style>
		<script>
		window.addEvent("domready",function(){
		//alert($("in_tipo_cliente").value);
		});
		</script>
		',
		'postscript'	=> '
			
			update(
				array(
					"nombre"	=> mb_convert_case(LL["nombre"],MB_CASE_TITLE,"UTF-8"),
					"apellidos"	=> mb_convert_case(LL["apellidos"],MB_CASE_TITLE,"UTF-8")
				),TT,"where id=II",0);
			
		',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'tipo_cliente'	=>array(
						'campo'			=> 'tipo_cliente',
						'label'			=> 'Tipo de Cliente',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Natural',
								'2'			=> 'Jurídico'
						),
						'eventos'		=>array(
								'1'			=> '$1("id_in_genero");$1("id_in_apellidos");$0("group_persona_contacto");$1("group_pago");$H("la_nombre","Nombre");$H("la_dni","DNI");',
								'2'			=> '$0("id_in_genero");$0("id_in_apellidos");$1("group_persona_contacto");$0("group_pago");$H("la_nombre","Razón Social");$H("la_dni","RUC");'
						),
						'derecha'		=> '1',
						'width'			=> '50px',
						'queries'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre/ Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'like'			=> '0',
						'controles'		=> '
							<a href="custom/ventas_items.php?id_cliente=[id]" rel="mensajes">{select count(*) from ventas_items where id_cliente=[id]} atenciones</a>',
						'tags'			=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '130px',
						'style'			=> 'width:150px;',
						'derecha'		=> '2',
						'like'			=> '0',
						'tags'			=> '1'
				),
				'dni'			=>array(
						'campo'			=> 'dni',
						'label'			=> 'DNI/RUC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '0',
						'size'			=> '11'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> '',
						'like'			=> '1',
						'unique'		=> '0'
				),
				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'provincia'		=>array(
						'campo'			=> 'provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:300px;',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'celular_claro'	=>array(
						'campo'			=> 'celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'celular_movistar'=>array(
						'campo'			=> 'celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'nextel'		=>array(
						'campo'			=> 'nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpm'			=>array(
						'campo'			=> 'rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpc'			=>array(
						'campo'			=> 'rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'pag_tipo_documento'=>array(
						'legend'		=> 'Pago',
						'campo'			=> 'pag_tipo_documento',
						'label'			=> 'Tipo de Recibo',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Boleta',
								'2'			=> 'Factura'
						),
						'default'		=> '0'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'constante'		=> '0',
						'like'			=> '1',
						'disabled'		=> '1'
				),
				'pag_factura_razonsocial'=>array(
						'campo'			=> 'pag_factura_razonsocial',
						'label'			=> 'Razón Social',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:200px;',
						'width'			=> '200px',
						'derecha'		=> '1'
				),
				'pag_factura_ruc'=>array(
						'campo'			=> 'pag_factura_ruc',
						'label'			=> 'RUC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:100px;',
						'width'			=> '100px',
						'derecha'		=> '2'
				),
				'contacto_nombre'=>array(
						'campo'			=> 'contacto_nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'legend'		=> 'Persona Contacto',
						'like'			=> '1'
				),
				'contacto_apellidos'=>array(
						'campo'			=> 'contacto_apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '130px',
						'style'			=> 'width:150px;',
						'derecha'		=> '2',
						'like'			=> '1'
				),
				'contacto_email'	=>array(
						'campo'			=> 'contacto_email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'default'		=> ''
				),
				'contacto_departamento'=>array(
						'campo'			=> 'contacto_departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'contacto_provincia||id,nombre|geo_provincias|where id_departamento=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'contacto_provincia'=>array(
						'campo'			=> 'contacto_provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'contacto_distrito||id,nombre|geo_distritos|where id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'contacto_distrito'=>array(
						'campo'			=> 'contacto_distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'contacto_direccion'=>array(
						'campo'			=> 'contacto_direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '150px',
						'style'			=> 'width:300px;',
						'derecha'		=> '1'
				),
				'contacto_telefono'=>array(
						'campo'			=> 'contacto_telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'contacto_telefono_oficina'=>array(
						'campo'			=> 'contacto_telefono_oficina',
						'label'			=> 'Teléfono Oficina',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'contacto_celular_claro'=>array(
						'campo'			=> 'contacto_celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'contacto_celular_movistar'=>array(
						'campo'			=> 'contacto_celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'contacto_nextel'=>array(
						'campo'			=> 'contacto_nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'contacto_rpm'	=>array(
						'campo'			=> 'contacto_rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'contacto_rpc'	=>array(
						'campo'			=> 'contacto_rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user',
						'width'			=> ''
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1',
		'exportar_excel'	=> '0',
		'importar_csv'	=> '0',
		'user'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_MENSAJES']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Actividades',
		'nombre_singular'=> 'actividad',
		'nombre_plural'	=> 'actividades',
		'tabla'			=> 'ventas_mensajes',
		'archivo'		=> 'ventas_mensajes',
		'prefijo'		=> 'venmen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '550px',
		'menu'			=> '0',
		'menu_label'	=> 'Actividades',
		'por_pagina'	=> '10',
		'me'			=> 'VENTAS_MENSAJES',
		'onload_include'	=> 'base2/update_ventas_mensajes.php',
		'orden'			=> '0',
		'postscript'	=> '
			$linea=fila("id_item,id_cliente,id_jefe,id_usuario,user","ventas_items","where id=".LL["id_grupo"],0);
			if(SS=="update" or SS=="insert")
			{
				update(array("id_status"=>LL["id_status"]),"ventas_items","where id=".LL["id_grupo"],0);
				update(array("id_cliente"=>$linea["id_cliente"],"id_item"=>$linea["id_item"],"id_jefe"=>$linea["id_jefe"],"id_usuario"=>$linea["id_usuario"],"user"=>$linea["user"]),TT,"where id=".II,0);
			}
		',
		'app'			=> '
		<a href="custom/ventas_mensajes.php?conf=estado%7Clistable%3D0%26alerta_fecha%7Cqueries%3D0%26fecha_creacion%7Cqueries%3D1%26crear%3D0%26order_by%3Did+desc">Actividades</a>
		<a href="custom/ventas_mensajes.php?conf=alerta_fecha%7Cqueries%3D1%26fecha_creacion%7Cqueries%3D0%26fecha_creacion%7Clistable%3D0%26titulo%3DAlertas%26crear%3D0%26edit%3D0%26order_by%3Did+desc&filter=alerta%3Dalerta%253D1%252C2%26alerta_fecha%3Dalerta_fecha%7C[today]%7C[today]">Alertas</a>
		',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'listable'		=> '1',
						'formato'		=> '7b',
						'width'			=> '100px',
						'queries'		=> '1'
				),
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '100px',
						'listable'		=> '1',
						'foreig'		=> '1',
						'default'		=> '[id_cliente]',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'directlink'	=> 'id,nombre;apellidos|clientes|where visibilidad=1|6',
						'ondlselect'	=> '1',
						'opciones'		=> 'id,nombre;apellidos;telefono|clientes|0',
						'style'			=> 'width:320px;',
						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1',
						'validacion'	=> '0',
						'noedit'		=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Modelo',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|0',
						'width'			=> '140px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'noedit'		=> '1',
						'queries'		=> '1'
				),				
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'width'			=> '80px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'validacion'	=> '1',
						'opciones'		=> 'id,nombre|mensajes_status',
						'default'		=> '3',
						'queries'		=> '1',
						'controles'		=> '<a href="custom/ventas_items.php?i=[id_grupo]" rel="file">atención</a>'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> '',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '1',
						'disabled'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Mensaje',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '270px',
						'style'			=> 'height:200px;width:550px;',
						'listhtml'		=> '1'
				),
				'alerta'		=>array(
						'campo'			=> 'alerta',
						'label'			=> 'Alerta',
						'width'			=> '80px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|mensajes_alertas',
						'default'		=> '3',
						'queries'		=> '1'
				),
				'alerta_fecha'	=>array(
						'campo'			=> 'alerta_fecha',
						'label'			=> '',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '1',
						'width'			=> '136px',
						'derecha'		=> '1',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '80px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|ventas_status|order by calificacion asc',
						'derecha'		=> '2',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				'adjunto'		=>array(
						'campo'			=> 'adjunto',
						'label'			=> 'Adjunto',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'atc',
						'carpeta'		=> 'atc_imas',
						'disabled'		=> '1'
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'disabled'		=> '0',
						'dlquery'		=> '0'
				),
				'id_jefe'		=>array(
						'campo'			=> 'id_jefe',
						'label'			=> 'Jefe',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'default'		=> '[id_jefe]',
						'foreig'		=> '1',
						'style'			=> 'width:160px,',
						'opciones'		=> 'id,nombre;apellidos|usuarios2',
						'width'			=> '120px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'queries'		=> '1',
						'disabled'		=> '0'
				),
				'id_speech'		=>array(
						'campo'			=> 'id_speech',
						'label'			=> '',
						'tipo'			=> 'inp',
						'derecha'		=> '1',
						'indicador'		=> '1',
						'listable'		=> '0',
						'width'			=> '20px'
				),
				'estado'		=>array(
						'campo'			=> 'estado',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'indicador'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'pendiente|#136CB2',
								'2'			=> 'para hoy|green',
								'3'			=> 'atrazado|red',
								'4'			=> 'cumplido|black'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				),
				'cumplido'		=>array(
						'campo'			=> 'cumplido',
						'label'			=> 'Cumplido',
						'radio'			=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user',
						'queries'		=> '1'
				),
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				)
		),
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'disabled'		=> '0',
		'user'			=> '1',
		'order_by'		=> 'id asc',
		'stat'			=> '0',
		'exportar_excel'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_STATUS']=array(
		'titulo'		=> 'Status Atenciones',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'ventas_status',
		'archivo'		=> 'ventas_status',
		'prefijo'		=> 'vensta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Atenciones',
		'me'			=> 'VENTAS_STATUS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'order_by'		=> 'calificacion asc',
		'seccion'		=> 'configuraciones'
);
/******************************************************************************************************************************************************/

$objeto_tabla['ENVIOS_CUENTAS']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Cuentas para envios',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'envios_cuentas',
		'archivo'		=> 'envios_cuentas',
		'prefijo'		=> 'envcue',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas para envios',
		'me'			=> 'ENVIOS_CUENTAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '200px'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'server'		=>array(
						'campo'			=> 'server',
						'label'			=> 'Server',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'port'			=>array(
						'campo'			=> 'port',
						'label'			=> 'PORT',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'logo'			=>array(
						'campo'			=> 'logo',
						'label'			=> 'Logo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'log',
						'carpeta'		=> 'log_imas'
				),
				'dominio'		=>array(
						'campo'			=> 'dominio',
						'label'			=> 'Dominio',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px'
				)
		),
		'seccion'		=> '',
		'edicion_rapida'	=> '1',
		'edicion_completa'=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CLIENTES_STATUS']=array(
		'titulo'		=> 'Status Clientes',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'clientes_status',
		'archivo'		=> 'clientes_status',
		'prefijo'		=> 'clista',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Clientes',
		'me'			=> 'CLIENTES_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '1',
		'set_fila_fijo'	=> '0',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['MENSAJES_ALERTAS']=array(
		'titulo'		=> 'Alertas Actividades',
		'nombre_singular'=> 'alerta',
		'nombre_plural'	=> 'alertas',
		'tabla'			=> 'mensajes_alertas',
		'archivo'		=> 'mensajes_alertas',
		'prefijo'		=> 'menale',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Alertas Actividades',
		'me'			=> 'MENSAJES_ALERTAS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['MENSAJES_STATUS']=array(
		'titulo'		=> 'Status Actividades',
		'nombre_singular'=> 'status',
		'nombre_plural'	=> 'status',
		'tabla'			=> 'mensajes_status',
		'archivo'		=> 'mensajes_status',
		'prefijo'		=> 'mensta',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Status Actividades',
		'me'			=> 'MENSAJES_STATUS',
		'orden'			=> '1',
		'width_listado'	=> '300px',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '0',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_ALERTAS']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Alertas',
		'nombre_singular'=> 'alerta',
		'nombre_plural'	=> 'alertas',
		'tabla'			=> 'ventas_alertas',
		'archivo'		=> 'ventas_alertas',
		'prefijo'		=> 'venale',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '50px',
		'crear_txt'		=> '550px',
		'menu'			=> '0',
		'menu_label'	=> 'Alertas',
		'por_pagina'	=> '20',
		'me'			=> 'VENTAS_ALERTAS',
		'orden'			=> '1',
		'onedit'		=> 'base2/update_alertas.php',
		'oncreate'		=> 'base2/update_alertas.php',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr',
						'formato'		=> '7',
						'width'			=> '120px'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreig_parent'	=> 'ventas_items|where id=[id]'
				),
				'alerta_fecha'	=>array(
						'campo'			=> 'alerta_fecha',
						'label'			=> '',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7',
						'time'			=> '1',
						'width'			=> '140px',
						'derecha'		=> '1',
						'default'		=> 'tomorrow()',
						'rango'			=> 'now,+2 years'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Mensaje',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'width:350px;height:70px;',
						'listhtml'		=> '1'
				),
				'estado'		=>array(
						'campo'			=> 'estado',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'indicador'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'pendiente|#136CB2',
								'2'			=> 'para hoy|green',
								'3'			=> 'atrazado|red',
								'4'			=> 'cumplido|black'
						),
						'default'		=> '1',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				),
				'cumplido'		=>array(
						'campo'			=> 'cumplido',
						'label'			=> 'Cumplido',
						'radio'			=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				)
		),
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'edicion_completa'=> '1',
		'disabled'		=> '0',
		'crear_quick'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_CUENTAS']=array(
		'grupo'			=> 'ventas',
		'titulo'		=> 'Cuentas para envio de pedidos',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'ventas_cuentas',
		'archivo'		=> 'ventas_cuentas',
		'prefijo'		=> 'vencue',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas',
		'me'			=> 'VENTAS_CUENTAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'relays'		=>array(
						'campo'			=> 'relays',
						'label'			=> 'Relays',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'width'			=> '30px'
				),
				'time_0'		=>array(
						'campo'			=> 'time_0',
						'label'			=> 'Tiempo Cero',
						'tipo'			=> 'fch',
						'width'			=> '50px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS2']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Jefe de Vendedores',
		'nombre_singular'=> 'jefe de vendedor',
		'nombre_plural'	=> 'jefe de vendedores',
		'tabla'			=> 'usuarios2',
		'archivo'		=> 'usuarios2',
		'prefijo'		=> 'usuope2',
		'eliminar'		=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Jefe de Vendedores',
		'me'			=> 'USUARIOS2',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '100px',
						'derecha'		=> '1',
						'controles'		=> '<a rel="subs" href="custom/usuarios.php?id=[id]">{select count(*) from usuarios where id_jefe=[id]} fotos</a>
',
						'like'			=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '80px',
						'derecha'		=> '2',
						'like'			=> '1'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '2',
						'width'			=> '150px',
						'derecha'		=> '2'
				),
				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'provincia||id,nombre|geo_provincias|where id_departamento=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'provincia'		=>array(
						'campo'			=> 'provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px',
						'style'			=> 'width:300px;',
						'derecha'		=> '1'
				),
				'id_ptoventa'	=>array(
						'campo'			=> 'id_ptoventa',
						'label'			=> 'Pto de venta',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|productos_ptoventa',
						'derecha'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina / Sucursal',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'celular_claro'	=>array(
						'campo'			=> 'celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'celular_movistar'=>array(
						'campo'			=> 'celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'nextel'		=>array(
						'campo'			=> 'nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpm'			=>array(
						'campo'			=> 'rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpc'			=>array(
						'campo'			=> 'rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'firma'			=>array(
						'campo'			=> 'firma',
						'label'			=> 'Firma',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '500px',
						'style'			=> 'height:200px;width:550px;'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '2',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1',
		'crear_label'	=> ''
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Vendedores',
		'nombre_singular'=> 'vendedor',
		'nombre_plural'	=> 'vendedores',
		'tabla'			=> 'usuarios',
		'archivo'		=> 'usuarios',
		'prefijo'		=> 'usuope',
		'eliminar'		=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Vendedores',
		'me'			=> 'USUARIOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_jefe'		=>array(
						'campo'			=> 'id_jefe',
						'label'			=> 'Jefe',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_jefe]',
						'foreig'		=> '1',
						'style'			=> 'width:160px,',
						'opciones'		=> 'id,nombre;apellidos|usuarios2',
						'width'			=> '120px',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'queries'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'like'			=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'like'			=> '1'
				),
				'genero'		=>array(
						'campo'			=> 'genero',
						'label'			=> 'Género',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Masculino',
								'2'			=> 'Femenino'
						),
						'default'		=> '1',
						'style'			=> 'width:45px;',
						'derecha'		=> '2',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2'
				),
				'departamento'	=>array(
						'campo'			=> 'departamento',
						'label'			=> 'Departamento',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_departamentos',
						'load'			=> 'provincia||id,nombre|geo_provincias|where  	=',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
				),
				'provincia'		=>array(
						'campo'			=> 'provincia',
						'label'			=> 'Provincia',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_provincias',
						'load'			=> 'distrito||id,nombre|geo_distritos|where id_provincia=',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'distrito'		=>array(
						'campo'			=> 'distrito',
						'label'			=> 'Distrito',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre|geo_distritos',
						'style'			=> 'width:150px;',
						'derecha'		=> '2'
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección casa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '120px',
						'style'			=> 'width:250px;',
						'derecha'		=> '1'
				),
				'id_ptoventa'	=>array(
						'campo'			=> 'id_ptoventa',
						'label'			=> 'Pto de venta',
						'width'			=> '90px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|productos_ptoventa'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléfono Casa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'telefono_oficina'=>array(
						'campo'			=> 'telefono_oficina',
						'label'			=> 'Teléfono Oficina / Sucursal',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'celular_claro'	=>array(
						'campo'			=> 'celular_claro',
						'label'			=> 'Claro',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '1'
				),
				'celular_movistar'=>array(
						'campo'			=> 'celular_movistar',
						'label'			=> 'Movistar',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'nextel'		=>array(
						'campo'			=> 'nextel',
						'label'			=> 'Nextel',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '60px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpm'			=>array(
						'campo'			=> 'rpm',
						'label'			=> 'RPM',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'rpc'			=>array(
						'campo'			=> 'rpc',
						'label'			=> 'RPC',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '70px',
						'style'			=> 'width:70px;',
						'derecha'		=> '2'
				),
				'firma'			=>array(
						'campo'			=> 'firma',
						'label'			=> 'Firma',
						'tipo'			=> 'html',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '500px',
						'style'			=> 'height:200px;width:450px;'
				),
				'usuarios_acceso_nombre'=>array(
						'legend'		=> 'Datos de Acceso',
						'campo'			=> 'usuarios_acceso_nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,nombre,[usuarios_acceso_nombre],id,[id_sesion]',
						'listable'		=> '1'
				),
				'usuarios_acceso_password'=>array(
						'campo'			=> 'usuarios_acceso_password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'validacion'	=> '1',
						'sync'			=> 'usuarios_acceso,password,[usuarios_acceso_password],id,[id_sesion]',
						'listable'		=> '1'
				),
				'usuarios_acceso_id_permisos'=>array(
						'campo'			=> 'usuarios_acceso_id_permisos',
						'tipo'			=> 'inp',
						'sync'			=> 'usuarios_acceso,id_permisos,[usuarios_acceso_id_permisos],id,[id_sesion]',
						'default'		=> '3',
						'indicador'		=> '1'
				),
				'id_sesion'		=>array(
						'campo'			=> 'id_sesion',
						'label'			=> 'usuario sessión',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre|usuarios_acceso',
						'biunivoca'		=> '1',
						'subform'		=> '1',
						'unique'		=> '1',
						'indicador'		=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_rapida'	=> '1',
		'crear_label'	=> '',
		'group'			=> 'id_jefe'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SPEECHES']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Speaches',
		'nombre_singular'=> 'speech',
		'nombre_plural'	=> 'speeches',
		'tabla'			=> 'speeches',
		'archivo'		=> 'speeches',
		'prefijo'		=> 'spe',
		'eliminar'		=> '1',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'menu_label'	=> 'Speeches',
		'me'			=> 'SPEECHES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '300px',
						'validacion'	=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '500px',
						'style'			=> 'height:270px;'
				)
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONTACTO_CANALES']=array(
		'titulo'		=> 'Código de Marketing',
		'nombre_singular'=> 'código',
		'nombre_plural'	=> 'códigos',
		'tabla'			=> 'contacto_canales',
		'archivo'		=> 'contacto_canales',
		'prefijo'		=> 'cancon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Código de Marketing',
		'me'			=> 'CONTACTO_CANALES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '150px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '0',
		'expandir_vertical'=> '0',
		'calificacion'	=> '0',
		'edicion_rapida'	=> '1',
		'width_listado'	=> '300px',
		'set_fila_fijo'	=> '3',
		'crear_quick'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONTACTO']=array(
		'titulo'		=> 'Mensajes de Contacto',
		'nombre_singular'=> 'mensaje',
		'nombre_plural'	=> 'mensajes',
		'tabla'			=> 'contacto',
		'archivo'		=> 'contacto',
		'prefijo'		=> 'con',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Mensajes de Contacto',
		'me'			=> 'CONTACTO',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'disabled'		=> '1'
				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px',
						'disabled'		=> '1'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px'
				)
		),
		'grupo'			=> 'ventas',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CAMPAINS']=array(
		'grupo'			=> 'marketing',
		'alias_grupo'	=> 'MKT',
		'titulo'		=> 'Campañas',
		'nombre_singular'=> 'campaña',
		'nombre_plural'	=> 'campañas',
		'tabla'			=> 'campains',
		'archivo'		=> 'campains',
		'archivo_hijo'	=> 'solicitudes',
		'prefijo'		=> 'camps',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Campañas',
		'por_pagina'	=> '20',
		'me'			=> 'CAMPAINS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '319px',
						'controles'		=> '
							<a href="custom/solicitudes.php?id=[id]">{select count(*) from solicitudes where id_grupo=[id]} Solicitudes</a>
							<a href="custom/campains_fotos.php?id=[id]">{select count(*) from campains_fotos where id_grupo=[id]} Bloques</a>
							<a href="base2/show.php?id=[id]" target="_blank" style="color:green;" >vista previa</a>
							'
				),
				'asunto'		=>array(
						'campo'			=> 'asunto',
						'label'			=> 'Asunto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'size'			=> '250'
				),
				'fronname'		=>array(
						'campo'			=> 'fronname',
						'label'			=> 'From Name',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'default'		=> 'Calandria Travel',
						'derecha'		=> '1',
						'style'			=> 'width:200px;'
				),
				'replayto'		=>array(
						'campo'			=> 'replayto',
						'label'			=> 'Replay To',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'derecha'		=> '1',
						'default'		=> 'ventas@calandriatravel.com',
						'style'			=> 'width:200px;'
				),
				'enviar_texto'	=>array(
						'campo'			=> 'enviar_texto',
						'label'			=> 'Enviar Texto',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				),
				'enviar_firma'	=>array(
						'campo'			=> 'enviar_firma',
						'label'			=> 'Enviar Firma',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '220px',
						'style'			=> 'height:250px;'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Flyer',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'camp',
						'carpeta'		=> 'camp_imas',
						'tamanos'		=> '150x120,800x10000',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'publicado'		=>array(
						'campo'			=> 'publicado',
						'label'			=> 'Publicado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'0'			=> 'no',
								'1'			=> 'si'
						),
						'default'		=> '1'
				),
				'n_solicitados'	=>array(
						'campo'			=> 'n_solicitados',
						'label'			=> 'Nro solicitados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				),
				'n_enviados'	=>array(
						'campo'			=> 'n_enviados',
						'label'			=> 'Nro Enviados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'default'		=> '0',
						'derecha'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'n_leidos'		=>array(
						'campo'			=> 'n_leidos',
						'label'			=> 'Nro Leidos',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				),
				'n_linkeados'	=>array(
						'campo'			=> 'n_linkeados',
						'label'			=> 'Nro Linkeados',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'derecha'		=> '1',
						'default'		=> '0',
						'width'			=> '150px'
				)
		),
		'creacion_hijo'	=> '',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CAMPAINS_FOTOS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> '<a href="custom/campains.php">Campañas</a>  -
                      Fotos de {select nombre from campains where id=[id]}',
		'nombre_singular'=> 'bloque',
		'nombre_plural'	=> 'bloques',
		'tabla'			=> 'campains_fotos',
		'archivo'		=> 'campains_fotos',
		'prefijo'		=> 'camfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> '',
		'me'			=> 'CAMPAINS_FOTOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'camfot',
						'carpeta'		=> 'camfot_imas',
						'tamanos'		=> '70x70,400x3000,800x6000',
						'tamano_listado'	=> '1'
				),
				'link'			=>array(
						'campo'			=> 'link',
						'label'			=> 'Enlace web',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px',
						'size'			=> '200'
				),
				'bloque'		=>array(
						'campo'			=> 'bloque',
						'label'			=> 'Bloque',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'una columna',
								'2'			=> 'doble columna'
						),
						'default'		=> '2'
				)
		),
		'por_linea'		=> '4',
		'edicion_completa'=> '1',
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['SOLICITUDES']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Solicitudes',
		'nombre_singular'=> 'solicitud',
		'nombre_plural'	=> 'solicitudes',
		'tabla'			=> 'solicitudes',
		'archivo'		=> 'solicitudes',
		'archivo_hijo'	=> 'lista_envio',
		'prefijo'		=> 'soli',
		'eliminar'		=> '1',
		'editar'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '200px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Solicitudes',
		'por_pagina'	=> '100',
		'me'			=> 'SOLICITUDES',
		'controles'		=> '
							<a href="base2/hilo_de_envio.php">ENVIAR UN BLOQUE DE SOLICITUDES</a>
						',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Campaña',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'opciones'		=> 'nombre,id|campains',
						'foreig'		=> '1'
				),
				'id_emails_grupos'=>array(
						'campo'			=> 'id_emails_grupos',
						'label'			=> 'Base',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '200px',
						'opciones'		=> 'id,nombre|emails_grupos',
						'controles'		=> '<a style="color:green;font-weight:bold;" href="base2/crear_lista_envio.php?id=[id]">ENVIAR</a>
							<a style="color:blue;font-weight:bold;" href="base2/cancelar_lista.php?id=[id]">CANCELAR</a>
							<span style="color:#000;">{select count(*) from lista_envio where id_grupo=[id]} solicitados</span>
							<span style="color:green;">{select count(*) from lista_envio where id_grupo=[id] and enviado=1} enviádos</span>
							<span style="color:blue;">{select count(*) from lista_envio where id_grupo=[id] and leido=1} leídos	</span>
							'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['LISTA_ENVIO']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Lista de envio',
		'nombre_singular'=> 'lista_envio',
		'nombre_plural'	=> 'lista_envio',
		'tabla'			=> 'lista_envio',
		'archivo'		=> 'lista_envio',
		'prefijo'		=> 'list',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Lista de envio',
		'por_pagina'	=> '100',
		'me'			=> 'LISTA_ENVIO',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'id_email'		=>array(
						'campo'			=> 'id_email',
						'label'			=> 'email',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=> 'id,email|emails_items'
				),
				'enviado'		=>array(
						'campo'			=> 'enviado',
						'label'			=> 'enviado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						)
				),
				'leido'			=>array(
						'campo'			=> 'leido',
						'label'			=> 'leido',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'fallido'		=>array(
						'campo'			=> 'fallido',
						'label'			=> 'fallido',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '150px'
				),
				'linkeado'		=>array(
						'campo'			=> 'linkeado',
						'label'			=> 'linkeado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						)
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EMAILS_GRUPOS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Bases',
		'nombre_singular'=> 'Base',
		'nombre_plural'	=> 'Bases',
		'tabla'			=> 'emails_grupos',
		'archivo'		=> 'emails_grupos',
		'archivo_hijo'	=> 'emails_items',
		'prefijo'		=> 'emagru',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Bases',
		'por_pagina'	=> '20',
		'me'			=> 'EMAILS_GRUPOS',
		'controles'		=> '<a href="base2/exclusiones.php">Exclusiones</a>',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'unique'		=> '1',
						'width'			=> '350px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'like'			=> '1',
						'validacion'	=> '1',
						'controles'		=> '
							<a href="custom/emails_items.php?id=[id]">{select count(*) from emails_items where id_grupo=[id]} emails</a>
							<a href="base2/importar_emails.php?id=[id]">IMPORTAR</a>
							'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['EMAILS_ITEMS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> '<a href="custom/emails_grupos.php">Grupos de Emails</a>  -
                      {select nombre from emails_grupos where id=[id]}',
		'nombre_singular'=> 'email',
		'nombre_plural'	=> 'emails',
		'tabla'			=> 'emails_items',
		'archivo'		=> 'emails_items',
		'prefijo'		=> 'emaite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Emails',
		'por_pagina'	=> '100',
		'me'			=> 'EMAILS_ITEMS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '1',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'opciones'		=> 'id,nombre|emails_grupos'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '219px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '1'
				),
				'tipo_disabled'	=>array(
						'campo'			=> 'tipo_disabled',
						'label'			=> 'Tipo de Eliminacion',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'por el sistema',
								'2'			=> 'por el administrador',
								'3'			=> 'por el usuario'
						)
				),
				'comprobado'	=>array(
						'campo'			=> 'comprobado',
						'label'			=> 'Comprobado',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'default'		=> '0'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CUENTAS']=array(
		'grupo'			=> 'marketing',
		'titulo'		=> 'Cuentas',
		'nombre_singular'=> 'cuenta',
		'nombre_plural'	=> 'cuentas',
		'tabla'			=> 'cuentas',
		'archivo'		=> 'cuentas',
		'prefijo'		=> 'cuen',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Cuentas',
		'por_pagina'	=> '100',
		'me'			=> 'CUENTAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'usuario'		=>array(
						'campo'			=> 'usuario',
						'label'			=> 'Usuario',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1'
				),
				'ordenprove'	=>array(
						'campo'			=> 'ordenprove',
						'label'			=> 'Orden',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'proveedor'		=>array(
						'campo'			=> 'proveedor',
						'label'			=> 'proveedor',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'godaddy - calandriapromociones.info',
								'2'			=> 'aplus',
								'3'			=> 'godaddy - ofertastravel.info',
								'5'			=> 'hostgator - calandriatravel.net',
								'6'			=> 'godaddy - travelofertas.info',
								'10'			=> 'travelofertas.info HG',
								'11'			=> 'ofertastravel.info HG',
								'12'			=> 'cajamarcatravel.info HG',
								'13'			=> 'eshoradeviajar.com HG',
								'14'			=> 'calandriatravel.net HG',
								'15'			=> 'introducingperu.com HG'
						)
				),
				'clave'			=>array(
						'campo'			=> 'clave',
						'label'			=> 'Clave',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '219px'
				),
				'relays'		=>array(
						'campo'			=> 'relays',
						'label'			=> 'Relays',
						'tipo'			=> 'inp',
						'variable'		=> 'float',
						'size'			=> '10',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '30px'
				),
				'enabled'		=>array(
						'campo'			=> 'enabled',
						'label'			=> 'Enabled',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'si',
								'0'			=> 'no'
						),
						'width'			=> '30px'
				),
				'time_0'		=>array(
						'campo'			=> 'time_0',
						'label'			=> 'Tiempo Cero',
						'tipo'			=> 'fch',
						'width'			=> '50px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				)
		),
		'disabled'		=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PAGINAS']=array(
		'titulo'		=> 'Páginas',
		'nombre_singular'=> 'página',
		'nombre_plural'	=> 'páginas',
		'tabla'			=> 'paginas',
		'archivo'		=> 'paginas',
		'prefijo'		=> 'pag',
		'eliminar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '550px',
		'menu_label'	=> 'Páginas',
		'me'			=> 'PAGINAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'pagina'		=>array(
						'campo'			=> 'pagina',
						'label'			=> 'Página',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1'
				),
				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:300px;'
				),
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'pag',
						'carpeta'		=> 'pag_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '1',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS']=array(
		'me'			=> 'BANNERS',
		'titulo'		=> 'Archivos',
		'nombre_singular'=> 'archivo',
		'nombre_plural'	=> 'archivos',
		'tabla'			=> 'banners',
		'archivo'		=> 'banners',
		'prefijo'		=> 'ban',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'crear_label'	=> '110px',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Archivos',
		'por_pagina'	=> '40',
		'orden'			=> '0',
		'crear_txt'		=> '640px',
		'altura_listado'	=> 'auto',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '100px',
						'style'			=> 'width:100px;'
				),
				'titulo'		=>array(
						'campo'			=> 'titulo',
						'label'			=> 'Titulo',
						'tipo'			=> 'inp',
						'width'			=> '100px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'fichero'		=>array(
						'campo'			=> 'fichero',
						'label'			=> 'Archivo',
						'tipo'			=> 'sto',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'ban',
						'carpeta'		=> 'ban_imas'
				),
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '150px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'dimensiones'	=>array(
						'campo'			=> 'dimensiones',
						'label'			=> 'Dimensiones',
						'tipo'			=> 'inp',
						'width'			=> '50px',
						'style'			=> 'width:50px;',
						'listable'		=> '1'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_completa'=> '0',
		'seccion'		=> 'Archivos y Variables',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['VARIABLES']=array(
		'titulo'		=> 'Variables',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'variables',
		'archivo'		=> 'variables',
		'prefijo'		=> 'var',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Variables',
		'me'			=> 'VARIABLES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['TEXTOS_ITEMS']=array(
		'titulo'		=> 'Textos',
		'nombre_singular'=> 'texto',
		'nombre_plural'	=> 'textos',
		'tabla'			=> 'textos_items',
		'archivo'		=> 'textos_items',
		'prefijo'		=> 'texite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '580px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Textos',
		'por_pagina'	=> '50',
		'me'			=> 'TEXTOS_ITEMS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '219px',
						'like'			=> '1',
						'style'			=> 'width:408px;',
						'derecha'		=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px',
						'style'			=> 'height:350px,'
				),
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'tex',
						'carpeta'		=> 'tex_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'contenidos',
		'edicion_rapida'	=> '1',
		'seccion'		=> 'centro informativo',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS_FOTOS']=array(
		'titulo'		=> 'Banners',
		'nombre_singular'=> 'bloques de fotos',
		'nombre_plural'	=> 'bloque de fotos',
		'tabla'			=> 'banners_fotos',
		'archivo'		=> 'banners_fotos',
		'archivo_hijo'	=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Banners',
		'me'			=> 'BANNERS_FOTOS',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '300px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  href="custom/banners_fotos_fotos.php?id=[id]">{select count(*) from banners_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '1',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BANNERS_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/banners_fotos.php">Bloques de fotos</a>
                          - Fotos del Bloque {select nombre from banners_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'banners_fotos_fotos',
		'archivo'		=> 'banners_fotos_fotos',
		'prefijo'		=> 'banfot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '56',
		'me'			=> 'BANNERS_FOTOS_FOTOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'BANNERS_FOTOS',
						'opciones'		=> 'id,nombre|banners_fotos'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'banfot',
						'carpeta'		=> 'banfot_imas',
						'tamanos'		=> '150x120,218x123,961x302,65x47,206x122',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'publicidad',
		'por_linea'		=> '4',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BOLETINES']=array(
		'titulo'		=> 'Suscritos a Boletín',
		'nombre_singular'=> 'suscrito',
		'nombre_plural'	=> 'suscritos',
		'tabla'			=> 'boletines',
		'archivo'		=> 'boletines',
		'prefijo'		=> 'bol',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Suscritos a Boletín',
		'me'			=> 'BOLETINES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				)
		),
		'grupo'			=> 'formularios'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_COMENTARIOS']=array(
		'titulo'		=> 'Consultas del producto "
		{select nombre from productos_items where id=[id]}"',
		'nombre_singular'=> 'comentario',
		'nombre_plural'	=> 'comentarios',
		'tabla'			=> 'productos_comentarios',
		'archivo'		=> 'productos_comentarios',
		'prefijo'		=> 'com',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Consultas del producto',
		'me'			=> 'PRODUCTOS_COMENTARIOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'empresa'		=>array(
						'campo'			=> 'empresa',
						'label'			=> 'Empresa',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'ciudad'		=>array(
						'campo'			=> 'ciudad',
						'label'			=> 'Ciudad',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'pais'			=>array(
						'campo'			=> 'pais',
						'label'			=> 'País',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'telefono'		=>array(
						'campo'			=> 'telefono',
						'label'			=> 'Teléf/Celular',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '100px'
				),
				'id_item'		=>array(
						'label'			=> 'producto',
						'campo'			=> 'id_item',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]',
						'width'			=> '150px',
						'opciones'		=> 'id,nombre|productos_items',
						'controles'		=> '',
						'constante'		=> '1'
				),
				'comentario'	=>array(
						'campo'			=> 'comentario',
						'label'			=> 'Comentario',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '260px'
				)
		),
		'grupo'			=> 'formularios',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['RECOMENDAR']=array(
		'titulo'		=> 'Recomendaciones',
		'nombre_singular'=> 'recomendación',
		'nombre_plural'	=> 'recomendaciones',
		'tabla'			=> 'recomendar',
		'archivo'		=> 'recomendar',
		'prefijo'		=> 'rec',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '1',
		'menu_label'	=> 'Recomendaciones',
		'me'			=> 'RECOMENDAR',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '300px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'formato'		=> '7'
				),
				'nombre_amigo'	=>array(
						'campo'			=> 'nombre_amigo',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'email_amigo'	=>array(
						'campo'			=> 'email_amigo',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'nombre_usuario'	=>array(
						'campo'			=> 'nombre_usuario',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'email_usuario'	=>array(
						'campo'			=> 'email_usuario',
						'label'			=> 'Email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'nombre_pagina'	=>array(
						'campo'			=> 'nombre_pagina',
						'label'			=> 'Página',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'url_pagina'	=>array(
						'campo'			=> 'url_pagina',
						'label'			=> 'URL',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				),
				'foto_pagina'	=>array(
						'campo'			=> 'foto_pagina',
						'label'			=> 'archivo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		),
		'grupo'			=> 'formularios'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_ACCESO']=array(
		'grupo'			=> 'sistema',
		'alias_grupo'	=> 'core',
		'titulo'		=> 'Administración de Acceso de Usuarios',
		'nombre_singular'=> 'usuario',
		'nombre_plural'	=> 'usuarios',
		'tabla'			=> 'usuarios_acceso',
		'archivo'		=> 'usuarios_acceso',
		'prefijo'		=> 'usu',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '0',
		'menu_label'	=> 'usuarios',
		'me'			=> 'USUARIOS_ACCESO',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_login'	=> '1',
						'like'			=> '1'
				),
				'password'		=>array(
						'campo'			=> 'password',
						'label'			=> 'Password',
						'tipo'			=> 'pas',
						'listable'		=> '1',
						'validacion'	=> '1',
						'sesion_password'=> '1',
						'width'			=> '200px'
				),
				'id_permisos'	=>array(
						'campo'			=> 'id_permisos',
						'label'			=> 'Permisos',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|usuarios_permisos',
						'sesion_permisos'=> '1',
						'tip_foreig'	=> '1',
						'queries'		=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['USUARIOS_PERMISOS']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Permisos de Usuarios',
		'nombre_singular'=> 'permiso',
		'nombre_plural'	=> 'permisos',
		'tabla'			=> 'usuarios_permisos',
		'archivo'		=> 'usuarios_permisos',
		'prefijo'		=> 'usuper',
		'eliminar'		=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Permisos',
		'me'			=> 'USUARIOS_PERMISOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'unique'		=> '1',
						'width'			=> '200PX'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Propiedades',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '700px',
						'style'			=> 'width:500px;height:300px;'
				),
				'multiusuario'	=>array(
						'campo'			=> 'multiusuario',
						'label'			=> 'Multiusuario',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'2'			=> 'Multi Grupo',
								'1'			=> 'Multi Total',
								'0'			=> 'Individual'
						),
						'default'		=> '0',
						'derecha'		=> '2'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0',
		'edicion_completa'=> '1',
		'visibilidad'	=> '0',
		'calificacion'	=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONFIGURACIONES_ROOT']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Configuración root',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'configuraciones_root',
		'archivo'		=> 'configuraciones_root',
		'prefijo'		=> 'conr',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Configuración root',
		'me'			=> 'CONFIGURACIONES_ROOT',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['CONFIGURACIONES']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Configuración',
		'nombre_singular'=> 'variable',
		'nombre_plural'	=> 'variables',
		'tabla'			=> 'configuraciones',
		'archivo'		=> 'configuraciones',
		'prefijo'		=> 'con',
		'eliminar'		=> '0',
		'ocultar'		=> '0',
		'crear'			=> '0',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'crear_label'	=> '100px',
		'crear_txt'		=> '400px',
		'menu'			=> '0',
		'menu_label'	=> 'Configuración',
		'me'			=> 'CONFIGURACIONES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'variable'		=>array(
						'campo'			=> 'variable',
						'label'			=> 'Variable',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'constante'		=> '1',
						'width'			=> '300px'
				),
				'valor'			=>array(
						'campo'			=> 'valor',
						'label'			=> 'Valor',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '300px'
				)
		)
);
/******************************************************************************************************************************************************/

$objeto_tabla['WEB_CONFIG']=array(
		'grupo'			=> 'sistema',
		'titulo'		=> 'Webs',
		'nombre_singular'=> 'web',
		'nombre_plural'	=> 'webs',
		'tabla'			=> 'web_config',
		'archivo'		=> 'web_config',
		'prefijo'		=> 'webcon',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> 'Webs',
		'me'			=> 'WEB_CONFIG',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'calificacion'	=>array(
						'campo'			=> 'calificacion',
						'tipo'			=> 'cal'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'proyecto'		=>array(
						'campo'			=> 'proyecto',
						'label'			=> 'ID Proyecto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				)
		),
		'importar_csv'	=> '0',
		'disabled'		=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['GEO_DEPARTAMENTOS']=array(
		'titulo'		=> 'Departamentos',
		'nombre_singular'=> 'departamento',
		'nombre_plural'	=> 'departamentos',
		'tabla'			=> 'geo_departamentos',
		'archivo'		=> 'geo_departamentos',
		'archivo_hijo'	=> 'geo_provincias',
		'prefijo'		=> 'geodep',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'visibilidad'	=> '1',
		'altura_listado'	=> 'auto',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Departamentos',
		'por_pagina'	=> '100',
		'me'			=> 'GEO_DEPARTAMENTOS',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Departamento',
						'width'			=> '150px',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a href="custom/geo_provincias.php?id=[id]">{select count(*) from geo_provincias where id_departamento=[id]} provincias</a>'
				),
				'geo'			=>array(
						'campo'			=> 'geo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'geoposicion',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['GEO_PROVINCIA']=array(
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>  -
                      Provincias de {select nombre from geo_departamentos where id=[id]}',
		'nombre_singular'=> 'provincia',
		'nombre_plural'	=> 'provincias',
		'tabla'			=> 'geo_provincias',
		'archivo'		=> 'geo_provincias',
		'archivo_hijo'	=> 'geo_distritos',
		'prefijo'		=> 'geodis',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '100',
		'me'			=> 'GEO_PROVINCIA',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'tipo'			=> 'inp',
						'unique'		=> '1',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px',
						'controles'		=> '<a href="custom/geo_distritos.php?id=[id]">{select count(*) from geo_distritos where id_provincia=[id]} distritos</a>'
				),
				'id_departamento'=>array(
						'campo'			=> 'id_departamento',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'foreig'		=> '1',
						'default'		=> '[id]'
				),
				'geo'			=>array(
						'campo'			=> 'geo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'geoposicion',
		'edicion_rapida'	=> '0',
		'set_fila_fijo'	=> '1',
		'width_listado'	=> '400px'
);
/******************************************************************************************************************************************************/

$objeto_tabla['GEO_DISTRITOS']=array(
		'titulo'		=> '<a href="custom/geo_departamentos.php">Departamentos del Perú</a>
                          - <a href="custom/geo_provincias.php?id={select id_departamento from geo_provincias where id=[id]}">Provincias de {select geo_departamentos.nombre from geo_departamentos,geo_provincias where geo_departamentos.id=geo_provincias.id_departamento and geo_provincias.id=[id]}</a>
                          - Distritos de {select nombre from geo_provincias where id=[id]}',
		'nombre_singular'=> 'distrito',
		'nombre_plural'	=> 'distritos',
		'tabla'			=> 'geo_distritos',
		'archivo'		=> 'geo_distritos',
		'prefijo'		=> 'geodis',
		'eliminar'		=> '0',
		'editar'		=> '0',
		'crear'			=> '0',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '100',
		'me'			=> 'GEO_DISTRITOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'id_provincia'	=>array(
						'campo'			=> 'id_provincia',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'unique'		=> '1',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '150px'
				),
				'geo'			=>array(
						'campo'			=> 'geo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'disabled'		=> '1'
				)
		),
		'grupo'			=> 'geoposicion',
		'width_listado'	=> '400px',
		'set_fila_fijo'	=> '1',
		'edicion_rapida'	=> '0',
		'edicion_completa'=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_NOTICIAS']=array(
		'titulo'		=> 'Noticias',
		'nombre_singular'=> 'noticia',
		'nombre_plural'	=> 'noticias',
		'tabla'			=> 'blog_noticias',
		'archivo'		=> 'blog_noticias',
		'prefijo'		=> 'notite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Noticias',
		'por_pagina'	=> '20',
		'me'			=> 'BLOG_NOTICIAS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'style'			=> 'width:300px;',
						'formato'		=> '0',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1',
						'listable'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Texto',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'height:350px,'
				),
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'blonot',
						'carpeta'		=> 'blonot_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1',
		'alias_grupo'	=> 'blog',
		'edicion_rapida'	=> '1',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_ACTIVIDADES']=array(
		'titulo'		=> 'Actividades',
		'nombre_singular'=> 'actividad',
		'nombre_plural'	=> 'actividades',
		'tabla'			=> 'blog_actividades',
		'archivo'		=> 'blog_actividades',
		'prefijo'		=> 'bloite',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '670px',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Actividades',
		'por_pagina'	=> '20',
		'me'			=> 'BLOG_ACTIVIDADES',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'style'			=> 'width:300px;',
						'formato'		=> '0',
						'default'		=> 'now()',
						'rango'			=> '-1 years,now',
						'validacion'	=> '1',
						'listable'		=> '1'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'like'			=> '1',
						'width'			=> '230px'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Publicación',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'style'			=> 'height:350px,'
				),
				'foto'			=>array(
						'campo'			=> 'foto',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '0',
						'prefijo'		=> 'blo',
						'carpeta'		=> 'bloact_imas',
						'tamanos'		=> '70x70,400x300',
						'tamano_listado'	=> '1'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'edicion_completa'=> '1',
		'edicion_rapida'	=> '1',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_VIDEOS']=array(
		'titulo'		=> 'Albumes de videos',
		'nombre_singular'=> 'album de videos',
		'nombre_plural'	=> 'albumes de videos',
		'tabla'			=> 'blog_videos',
		'archivo'		=> 'blog_videos',
		'archivo_hijo'	=> 'blog_videos_videos',
		'prefijo'		=> 'blovid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de videos',
		'me'			=> 'BLOG_VIDEOS',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a class="linkstitu" href="custom/blog_videos_videos.php?id=[id]">
{select count(*) from blog_videos_videos where id_grupo=[id]}
videos
</a>'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_VIDEOS_VIDEOS']=array(
		'titulo'		=> '<a href="custom/blog_videos.php">Albumes de videos</a>
                          - Videos de {select nombre from blog_videos where id=[id]}',
		'nombre_singular'=> 'video',
		'nombre_plural'	=> 'videos',
		'tabla'			=> 'blog_videos_videos',
		'archivo'		=> 'blog_videos_videos',
		'prefijo'		=> 'blovid',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'me'			=> 'BLOG_VIDEOS_VIDEOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'PUBLICIDAD_VIDEOS'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Título',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'codigo'		=>array(
						'campo'			=> 'codigo',
						'label'			=> 'Código Youtube',
						'tipo'			=> 'yot',
						'listable'		=> '1',
						'validacion'	=> '1'
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Descripción',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '300px'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'crear_label'	=> '110px',
		'crear_txt'		=> '600px',
		'por_linea'		=> '5',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_FOTOS']=array(
		'titulo'		=> 'Albumes de Fotos',
		'nombre_singular'=> 'albumes de fotos',
		'nombre_plural'	=> 'album de fotos',
		'tabla'			=> 'blog_fotos',
		'archivo'		=> 'blog_fotos',
		'archivo_hijo'	=> 'blog_fotos_fotos',
		'prefijo'		=> 'blofot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Albumes de Fotos',
		'me'			=> 'BLOG_FOTOS',
		'orden'			=> '0',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'fecha'			=>array(
						'campo'			=> 'fecha',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'width'			=> '100px',
						'listable'		=> '1',
						'validacion'	=> '1',
						'formato'		=> '7'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Nombre',
						'width'			=> '200px',
						'unique'		=> '0',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a  rel="subs" href="custom/blog_fotos_fotos.php?id=[id]">{select count(*) from blog_fotos_fotos where id_grupo=[id]}  fotos</a>
							'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '1',
		'seccion'		=> '',
		'disabled'		=> '0',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['BLOG_FOTOS_FOTOS']=array(
		'titulo'		=> '<a href="custom/blog_fotos.php">Bloques de fotos</a>
                          - Fotos del Bloque {select nombre from blog_fotos where id=[id]}',
		'nombre_singular'=> 'foto',
		'nombre_plural'	=> 'fotos',
		'tabla'			=> 'blog_fotos_fotos',
		'archivo'		=> 'blog_fotos_fotos',
		'prefijo'		=> 'blofot',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'crear_label'	=> '200px',
		'crear_txt'		=> '400px',
		'altura_listado'	=> '60px',
		'visibilidad'	=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '0',
		'menu_label'	=> '',
		'por_pagina'	=> '56',
		'me'			=> 'BLOG_FOTOS_FOTOS',
		'orden'			=> '1',
		'campos'		=>array(
				'id'			=>array(
						'campo'			=> 'id',
						'tipo'			=> 'id'
				),
				'fecha_creacion'	=>array(
						'campo'			=> 'fecha_creacion',
						'tipo'			=> 'fcr'
				),
				'fecha_edicion'	=>array(
						'campo'			=> 'fecha_edicion',
						'tipo'			=> 'fed'
				),
				'posicion'		=>array(
						'campo'			=> 'posicion',
						'tipo'			=> 'pos'
				),
				'visibilidad'	=>array(
						'campo'			=> 'visibilidad',
						'tipo'			=> 'vis'
				),
				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id]',
						'foreig'		=> '1',
						'foreigkey'		=> 'BLOG_FOTOS'
				),
				'file'			=>array(
						'campo'			=> 'file',
						'label'			=> 'Foto',
						'tipo'			=> 'img',
						'listable'		=> '1',
						'validacion'	=> '1',
						'prefijo'		=> 'blofot',
						'carpeta'		=> 'blofot_imas',
						'tamanos'		=> '150x120,219x102,219x110,961x302',
						'tamano_listado'	=> '1',
						'width'			=> '150px',
						'style'			=> 'width:150px,height:auto,'
				),
				'foto_descripcion'=>array(
						'campo'			=> 'foto_descripcion',
						'label'			=> '',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '207px'
				),
				'url'			=>array(
						'campo'			=> 'url',
						'label'			=> 'Url',
						'tipo'			=> 'inp',
						'width'			=> '200px',
						'style'			=> 'width:200px;',
						'listable'		=> '1'
				),
				'web'			=>array(
						'campo'			=> 'web',
						'tipo'			=> 'web'
				)
		),
		'grupo'			=> 'miniblog',
		'por_linea'		=> '5',
		'disabled'		=> '0',
		'web'			=> '1'
);
/******************************************************************************************************************************************************/



?>