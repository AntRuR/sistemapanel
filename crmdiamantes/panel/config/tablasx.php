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
				'orden'			=>array(
						'label'			=> 'orden',
						'width'			=> '70px',
						'campo'			=> 'orden',
						'variable'		=> 'float',
						'tipo'			=> 'inp',
						'style'			=> 'width:70px;',
						'listable'		=> '1'
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
						'label'			=> 'Marca',
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
						'botones'		=> 'nombre,texto|productos_bloques|where visibilidad=1',
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
				'articulo'		=>array(
						'campo'			=> 'articulo',
						'label'			=> 'Artículo',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '1'
				),	
				'nombre2'		=>array(
						'campo'			=> 'nombre2',
						'label'			=> 'Modelo 2',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '1'
				),					
				'link'		=>array(
						'campo'			=> 'link',
						'label'			=> 'Link 1',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '1'
				),	

				'link2'		=>array(
						'campo'			=> 'link2',
						'label'			=> 'Link 2',
						'width'			=> '130px',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'style'			=> 'width:450px;',
						'tags'			=> '1',
						'derecha'		=> '1'
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
				)
		),
		'edicion_completa'=> '1',
		'creacion_hijo'	=> 'productos_fotos',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'order_by'		=> 'orden desc, id_grupo desc',
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
		'menu_label'	=> 'Importaciones',
		'por_pagina'	=> '10',
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
						'listclass'		=> 'nogrilla'
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
						'rango'			=> '-6 years,+2 years',
						'default'		=> 'now()',
						'listclass'		=> 'nogrilla'
				),
				'nave'			=>array(
						'campo'			=> 'nave',
						'label'			=> 'Nave',
						'width'			=> '100px',
						'tipo'			=> 'inp',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'listclass'		=> 'nogrilla'
				),
				'id_ubicacion'	=>array(
						'campo'			=> 'id_ubicacion',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '3',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'listable'		=> '1',
						'frozen'		=> '1',
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
						'listable'		=> '1'
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '60px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_stock_status',
						'derecha'		=> '1',
						'default'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1'
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
						'frozen'		=> '1'
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
						'resaltar'		=> '1'
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
						'resaltar'		=> '1'
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
						'queries'		=> '1'
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
						'queries'		=> '1'
				),
				'placa'			=>array(
						'campo'			=> 'placa',
						'label'			=> 'Placa',
						'width'			=> '30px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:100px;',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'venta_factura'	=>array(
						'campo'			=> 'venta_factura',
						'label'			=> '# Factura',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'frozen'		=> '1',
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
						'frozen'		=> '1'
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
				'venta_abono'	=>array(
						'campo'			=> 'venta_abono',
						'label'			=> 'Abonos',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:50px;',
						'derecha'		=> '1',
						'frozen'		=> '1',
						'listable'		=> '1'
				),
				'venta_total_facturas'=>array(
						'campo'			=> 'venta_total_facturas',
						'label'			=> 'Facturación',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:100px;',
						'derecha'		=> '2',
						'frozen'		=> '1',
						'listable'		=> '1'
				),
				'venta_id_cliente'=>array(
						'campo'			=> 'venta_id_cliente',
						'label'			=> 'Cliente',
						'tipo'			=> 'hid',
						'style'			=> 'width:150px;',
						'derecha'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|clientes|where 0op',
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
						'frozen'		=> '1',
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
				),
				'import'		=>array(
						'campo'			=> 'import',
						'label'			=> 'import',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
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
		'por_pagina'	=> '5',
		'me'			=> 'PRODUCTOS_STOCK',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'postscript'	=> '
				LL=fila("fecha_creacion,fecha_edicion,id_ubicacion_salida,id_item,id_color,id_item_item,id_ubicacion_llegada,tipo",TT,"where id=II",0);
				if(SS=="update" or SS=="insert"){
					/*
					if(hay("productos_traslados","where id_asignacion=II")){
						update(LL,"productos_traslados","where id_asignacion=II");
					}else{
					*/						
						LL["id_asignacion"]		=II;
						LL["id_traslado_status"]="1";
						insert(LL,"productos_traslados",0);
						update(array("asignado"=>"1","id_status"=>(LL["tipo"]==1)?7:1),"productos_items_items","where id=".LL["id_item_item"],0);
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
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
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
				'id_color'		=>array(
						'campo'			=> 'id_color',
						'label'			=> 'Color',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_color]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_colores|where 0',
						'load'			=> 'id_item_item||id,vin|productos_items_items|where id_ubicacion=[id_ubicacion_salida] and id_item=[id_item] and id_color=[id_color] and productos_items_items.asignado=0 AND productos_items_items.id_status!=5',
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
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '60px',
						'listable'		=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|productos_stock_status',
						'derecha'		=> '2',
						'queries'		=> '0',
						'frozen'		=> '1'
				),
				'id_ubicacion_llegada'=>array(
						'campo'			=> 'id_ubicacion_llegada',
						'label'			=> 'Nueva Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '1',
						'default'		=> '[id_ubicacion_llegada]',
						'foreig'		=> '1',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '0',
						'listable'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'0'			=> 'VENTAS',
								'1'			=> 'EXHIBICION'
						),
						'default'		=> '0'
				),
				'observaciones'	=>array(
						'campo'			=> 'observaciones',
						'label'			=> 'Observaciones',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px'
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
		'edicion_completa'=> '0',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0'
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
		'por_pagina'	=> '5',
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
						'params'		=> 'fecha_recepcion|disabled=1&id_asignacion|disabled=1&fecha_recepcion|disabled=1&observaciones|disabled=1&id_item_item|disabled=1',
						'buttom'		=> 'Registrar Traslado',
						'cargar'		=>array(
								'fecha_salida'	=> 'now()',
								'fecha_llegada'	=> 'now()'
						),
						'accion'		=> 'update'
				),
				array(
						'label'			=> 'Recepción de Unidades',
						'params'		=> 'fecha_salida|frozen=1&fecha_llegada|frozen=1&id_chofer|frozen=1&id_placa|frozen=1&id_item_item|disabled=1',
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
					&id|listable=0&motivo_traslado|disabled=0&motivo_traslado|validacion=0&tipo_combustible|disabled=0&tipo_combustible|validacion=0&cant_combustible|disabled=0&cant_combustible|validacion=0&numero_guia|frozen=0&numero_guia|disabled=0&numero_guia|validacion=1&fecha_pdi|disabled=1&fecha_recepcion|disabled=1&observaciones|disabled=1&id_ubicacion_llegada|disabled=1&id_traslado_status|disabled=1&id_asignacion|disabled=1&id_ubicacion_salida|disabled=1&id_color|disabled=1&fecha_salida|disabled=1&fecha_llegada|disabled=1&id_chofer|disabled=1&id_placa|disabled=1&id_item|disabled=1&id_item_item|disabled=1&onload_include=base2/on_impresiones.php',
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
				'numero_guia'	=>array(
						'campo'			=> 'numero_guia',
						'label'			=> 'Número de Guía',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '80px',
						'disabled'		=> '0',
						'no_save'		=> '0'
				),
				'id_ubicacion_salida'=>array(
						'campo'			=> 'id_ubicacion_salida',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:150px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
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
						'opciones'		=> 'id,nombre|productos_items|order by nombre asc',
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
						'width'			=> '60px',
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
						'opciones'		=> 'id,vin|productos_items_items|where 0',
						'width'			=> '120px',
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
						'rango'			=> '-1 years,+2 years',
						'queries'		=> '1'
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
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
						'width'			=> '95px',
						'derecha'		=> '1',
						'queries'		=> '1',
						'frozen'		=> '1',
						'listable'		=> '1',
						'tip_foreig'	=> '0'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'radio'			=> '1',
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=>array(
								'0'			=> 'VENTAS',
								'1'			=> 'EXHIBICION'
						),
						'default'		=> '0',
						'frozen'		=> '1'
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
						'validacion'	=> '0',
						'default'		=> '[id_placa]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre|placas_temporales|where visibilidad=1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'crearforeig'	=> '0',
						'frozen'		=> '0',
						'listable'		=> '0'
				),
				'id_chofer'		=>array(
						'campo'			=> 'id_chofer',
						'label'			=> 'Transportista',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_chofer]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'ondlselect'	=> '0',
						'opciones'		=> 'id,nombre;dni;direccion|choferes|where 1',
						'width'			=> '95px',
						'derecha'		=> '1',
						'crearforeig'	=> '0',
						'frozen'		=> '0',
						'listable'		=> '0'
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
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '50px',
						'disabled'		=> '0'
				),
				'imp_placa'		=>array(
						'campo'			=> 'imp_placa',
						'label'			=> 'Marca y Número de Placa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '50px',
						'disabled'		=> '0'
				),
				'imp_chofer_licencia'=>array(
						'campo'			=> 'imp_chofer_licencia',
						'label'			=> 'N(s) de Licencia(s) de conducir',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '50px',
						'disabled'		=> '0'
				),
				'tipo_combustible'=>array(
						'campo'			=> 'tipo_combustible',
						'label'			=> 'Tipo de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
				),
				'cant_combustible'=>array(
						'campo'			=> 'cant_combustible',
						'label'			=> 'Cantidad de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
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
		'exportar_excel'	=> '1'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PRODUCTOS_VENTAS']=array(
		'grupo'			=> 'productos',
		'titulo'		=> 'Ventas',
		'nombre_singular'=> 'venta',
		'nombre_plural'	=> '',
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
		'por_pagina'	=> '5',
		'me'			=> 'PRODUCTOS_VENTAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'onload_include'	=> 'base2/fix_estados.php',
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
						'queries'		=> '1',
						'validacion'	=> '0'
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
						'listable'		=> '0',
						'unique'		=> '0',
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
						'opciones'		=> 'id,nombre|productos_ubicaciones|where id!=4 order by nombre asc',
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
						'queries'		=> '1',
						'controles'		=> '<a href="custom/productos_ventas_documentos.php?id=[id]" rel="subs">{select count(*) from ventas_mensajes where id_grupo=[id]} mensajes</a>
							'
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
						'opciones'		=> 'id,nombre;apellidos;dni|clientes|where 0 and visibilidad=1',
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
				),
				'import'		=>array(
						'campo'			=> 'import',
						'label'			=> 'import',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
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
		'por_pagina'	=> '10',
		'me'			=> 'PRODUCTOS_VENTAS_DOCUMENTOS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'subbottom'		=> 'factnum=TOTAL&monto=SUM&recibido=SUM',
		'postscript'	=> '
				if(LL["moneda"]=="soles")
				{
					$ttcc=LL["tc"];
					$solr=LL["recibido"]/$ttcc;
					$solm=LL["monto"]/$ttcc;
					LL["recibido"]=$solr;
					LL["monto"]=$solm;
					$solr=D3($solr);
					$solm=D3($solm);
					update(array("recibido"=>$solr),TT,"where id=II",0);
					update(array("monto"=>$solm),TT,"where id=II",0);
				}
				if(SS=="insert" or SS=="update")
				{
					$pvfinal=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					$id_item_item=dato("id_item_item","productos_ventas","where id=".LL["id_grupo"],0);
					$item_item=fila("id_cliente,id_vendedor","productos_ventas","where id=".LL["id_grupo"],0);
					$saldo=$pvfinal;
					$montoT=0;
					$recibidoT=0;
					$docs=select("recibido,id,operacion,monto,factnum,fecha_creacion",TT,"where id_grupo=".LL["id_grupo"],0);
					foreach($docs as $doc)
					{
						$saldo=$saldo-$doc["recibido"];
						$recibidoT	=$recibidoT+$doc["recibido"];
						$montoT		=$montoT+$doc["monto"];
						if($doc["operacion"]=="2")
						{
							$factura=$doc["factnum"];
							$mon_factura=$doc["monto"];
							$fecha	=$doc["fecha_creacion"];
						}
						$saldo=D3($saldo);
						update(array("saldo"=>$saldo),TT,"where id=".$doc["id"],0);
					}
					update(array("saldo"=>$saldo),"productos_ventas","where id=".LL["id_grupo"],0);

					//echo "( $recibidoT==$pvfinal or $montoT==$pvfinal )";
					if($recibidoT==$pvfinal or $montoT==$pvfinal)
					{
						update(array("venta_fecha"=>$fecha,"venta_precio"=>$pvfinal,"venta_factura"=>$factura),"productos_items_items","where id=".$id_item_item,0);

						update(array("mon_factura"=>$mon_factura,"num_factura"=>$factura),TT,"where id=II",0);//TEMPORAL

						if($recibidoT==$pvfinal) //cancelado
						{
							update(array("id_status"=>"4"),"productos_items_items","where id=".$id_item_item,0);
						}
						elseif($montoT==$pvfinal)//facturado
						{
							update(array("id_status"=>"3"),"productos_items_items","where id=".$id_item_item,0);
						}
					}
					$recibidoT=D3($recibidoT);
					$montoT=D3($montoT);
					update(array("venta_abono"=>$recibidoT,"venta_total_facturas"=>$montoT,"venta_id_cliente"=>$item_item["id_cliente"],"venta_id_vendedor"=>$item_item["id_vendedor"]),"productos_items_items","where id=".$id_item_item,0);

				}
				if(SS=="delete")
				{
					$pvfinal=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					$saldo=dato("pvfinal","productos_ventas","where id=".LL["id_grupo"],0);
					//$saldo=$saldo*1;
					$docs=select("recibido,id",TT,"where id_grupo=".LL["id_grupo"],0);
					foreach($docs as $doc)
					{
						$saldo=$saldo-$doc["recibido"];
						$saldo=D3($saldo);
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
						'opciones'		=> 'id,nombre|productos_ubicaciones|where id!=4 order by nombre asc',
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
		'user'			=> '1'
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
		'por_pagina'	=> '10',
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
						'rel'			=> 'width:1250,height:600',
						'cargar'		=>array(
								'fecha_cierre'	=> 'now()'
						)
				),
				array(
						'label'		=> 'Imprimir',
						'accion'		=> 'custom',
						'ot'			=> 'imprimir_programacion.php',
						'rel'			=> 'width:1250,height:1000'
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
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where 1 or productos_items_items.status_pdi=1',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where 1 or productos_items_items.status_pdi=1',
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
						'frozen'		=> '0',
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
						'queries'		=> '1'
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
				'receptor'		=>array(
						'campo'			=> 'receptor',
						'label'			=> 'Receptor',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'style'			=> 'width:200px;',
						'derecha'		=> '1',
						'listable'		=> '1'
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
		'repos'			=> 'contratistas=Reporte por Contratista'
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
		'por_pagina'	=> '10',
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
				if(SS=="insert" or SS=="update"){
					if(LL["id_operacion"]==""){
						$iiii=insert(array("horas"=>LL["horas"],"costo"=>LL["costo"],"nombre"=>LL["nombre"]),"programaciones_operaciones",0);									
						update(array("id_operacion"=>$iiii["id"]),TT,"where id=II",0);
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
				'id_operacion'	=>array(
						'campo'			=> 'id_operacion',
						'label'			=> 'Operación',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '[id_operacion]',
						'style'			=> 'width:300px;',
						'opciones'		=> 'id,nombre|programaciones_operaciones|where 1',
						'directlink'	=> 'id,nombre|programaciones_operaciones|where 1',
						'width'			=> '100px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1',
						'onchange'		=> 'if($v("in_id_operacion")==""){$("in_nombre").value=this.value;$("in_horas").value="";$(in_costo").value=""}',
						'load'			=> '|||nombre,costo,horas|programaciones_operaciones|where id=[id_operacion];'
				),
				'nombre'		=>array(
						'campo'			=> 'nombre',
						'label'			=> 'Operación',
						'width'			=> '200px',
						'tipo'			=> 'inp',
						'style'			=> 'width:300px;',
						'derecha'		=> '2',
						'listable'		=> '1',
						'listyle'		=> 'display:none;'
				),
				'horas'			=>array(
						'campo'			=> 'horas',
						'label'			=> 'Tiempo (horas)',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '50px',
						'validacion'	=> '1',
						'derecha'		=> '2',
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
				'productos'		=>array(
						'campo'			=> 'productos',
						'label'			=> 'Productos',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px',
						'style'			=> 'height:80px;width:450px;'
				),
				'observaciones'	=>array(
						'campo'			=> 'observaciones',
						'label'			=> 'Observaciones',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '1',
						'width'			=> '350px',
						'style'			=> 'height:80px;width:450px;'
				),
				'qc'			=>array(
						'campo'			=> 'qc',
						'label'			=> 'QC',
						'width'			=> '30px',
						'tipo'			=> 'txt',
						'style'			=> 'height:80px;width:450px;',
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
		'crear_pruebas'	=> '0'
);
/******************************************************************************************************************************************************/

$objeto_tabla['PROGRAMACIONES_OPERACIONES']=array(
		'titulo'		=> 'Configuración : Operaciones',
		'nombre_singular'=> 'operación',
		'nombre_plural'	=> 'operesaciones',
		'tabla'			=> 'programaciones_operaciones',
		'archivo'		=> 'programaciones_operaciones',
		'prefijo'		=> 'banc',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Operaciones',
		'me'			=> 'PROGRAMACIONES_OPERACIONES',
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
						'width'			=> '300px',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '1',
						'style'			=> 'width:300px;'
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
		'por_pagina'	=> '10',
		'me'			=> 'PRODUCTOS_ENTREGAS',
		'orden'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'javascript'	=> 'function updatecliente(eee){ 
			if(eee)	load_combo("id_cliente","id,nombre|clientes|where id="+eee,"","$(\"in_id_cliente\").value="+eee);
		 }',
		'postscript'	=> '
				if(SS=="insert"){
					update(array("id_status"=>"5"),"productos_items_items","where id=".LL["id_item_item"],0);
					update(array("id_ubicacion"=>"85"),"productos_items_items","where id=".LL["id_item_item"],0);
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
						'params'		=> 'motivo_traslado_otros|disabled=0&motivo_traslado_otros|validacion=0&direccion|disabled=0&direccion|validacion=0&id_ubicacion_llegada|disabled=0&id_ubicacion_llegada|validacion=0&imp_chofer_nombre|disabled=0&imp_chofer_nombre|validacion=0&imp_placa|disabled=0&imp_placa|validacion=0&imp_chofer_licencia|disabled=0&imp_chofer_licencia|validacion=0&motivo_traslado|disabled=0&motivo_traslado|validacion=0&tipo_combustible|disabled=0&tipo_combustible|validacion=0&cant_combustible|disabled=0&cant_combustible|validacion=0&numero_guia|frozen=0&numero_guia|disabled=0&numero_guia|validacion=1&id_ubicacion|disabled=1&id_item_item|disabled=1&fecha_entrega|disabled=1&fecha_venta|disabled=1&venta_factura|disabled=1&id_vendedor|disabled=1&
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
				'numero_guia'	=>array(
						'campo'			=> 'numero_guia',
						'label'			=> 'Número de Guía',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '90px',
						'disabled'		=> '0',
						'no_save'		=> '1'
				),
				'id_ubicacion'	=>array(
						'campo'			=> 'id_ubicacion',
						'label'			=> 'Ubicación',
						'tipo'			=> 'hid',
						'validacion'	=> '0',
						'default'		=> '[id_ubicacion_salida]',
						'foreig'		=> '1',
						'style'			=> 'width:200px,',
						'opciones'		=> 'id,nombre|productos_ubicaciones|order by nombre asc',
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
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.status_pdi in (1,3) and productos_items_items.id=productos_ventas.id_item_item',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status=4 and (productos_items_items.status_pdi=3 or 1 ) and (productos_items_items.status_warrant!=1 or 1 ) and productos_items_items.id=productos_ventas.id_item_item',
						'load'			=> '|||venta_factura as venta_factura|productos_items_items|where id=[id_item_item];||||progsug as fecha_entrega|productos_ventas|where id_item_item=[id_item_item];||||venta_fecha as fecha_venta|productos_items_items|where id=[id_item_item];|||yearfab as yearfab,id_color as id_color,id_item as id_item,nummotor as nummotor,venta_id_cliente as id_cliente,venta_id_vendedor as id_vendedor|productos_items_items|where id=[id_item_item]',
						'afterload'		=> 'updatecliente(json.id_cliente);',
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
						'opciones'		=> 'id,nombre;apellidos|clientes|where 0',
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
						'subvalidacion'		=> 'dni',
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
						'subvalidacion'		=> 'dni',
						'width'			=> '60px',
						'tipo'			=> 'inp',
						'style'			=> 'width:60px;',
						'derecha'		=> '2',
						'listable'		=> '1'
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
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
				),
				'imp_placa'		=>array(
						'campo'			=> 'imp_placa',
						'label'			=> 'Marca y Número de Placa',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
				),
				'imp_chofer_licencia'=>array(
						'campo'			=> 'imp_chofer_licencia',
						'label'			=> 'N(s) de Licencia(s) de conducir',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
				),
				'tipo_combustible'=>array(
						'campo'			=> 'tipo_combustible',
						'label'			=> 'Tipo de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
				),
				'cant_combustible'=>array(
						'campo'			=> 'cant_combustible',
						'label'			=> 'Cantidad de combustible',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '350px',
						'disabled'		=> '0'
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
				'tags'			=>array(
						'campo'			=> 'tags',
						'label'			=> 'tags',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'fulltext'		=> '1',
						'autotags'		=> '1'
				),				
				'user'			=>array(
						'label'			=> 'user',
						'campo'			=> 'user',
						'tipo'			=> 'user',
						'listable'		=> '1',
						'queries'		=> '1',
						'opciones'		=> 'id,nombre|usuarios_acceso|order by nombre asc',
				)				
		),
		'user'			=> '1',
		'edicion_completa'=> '1',
		'calificacion'	=> '0',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '0',
		'crear_pruebas'	=> '0',
		'seccion'		=> '',
		'exportar_excel'	=> '1'
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
		'por_pagina'	=> '10',
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
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items,productos_ventas|where productos_items_items.id_status in (4,5) and productos_items_items.id=productos_ventas.id_item_item',
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
						'label'			=> 'fecha SUNARP',
						'tipo'			=> 'fch',
						'width'			=> '80px',
						'listable'		=> '0',
						'formato'		=> '7',
						'derecha'		=> '1',
						'frozen'		=> '1'
				),
				'ficha_sunarp'	=>array(
						'campo'			=> 'ficha_sunarp',
						'label'			=> 'Ficha Sunarp',
						'width'			=> '80px',
						'tipo'			=> 'inp',
						'like'			=> '1',
						'listable'		=> '1',
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
						'width'			=> '60px',
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
						'subvalidacion'		=> 'dni',
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
				),
				'import'		=>array(
						'campo'			=> 'import',
						'label'			=> 'import',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
						'listable'		=> '0'
				)
		),
		'edicion_completa'=> '1',
		'calificacion'	=> '1',
		'importar_csv'	=> '0',
		'width_listado'	=> '',
		'edicion_rapida'	=> '1',
		'crear_pruebas'	=> '0',
		'exportar_excel'	=> '1'
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
		'por_pagina'	=> '10',
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
		'crear_pruebas'	=> '0'
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
		'por_pagina'	=> '10',
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
		'crear_pruebas'	=> '0'
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
		'crear'			=> '0',
		'duplicar'		=> '0',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Garantías',
		'por_pagina'	=> '10',
		'me'			=> 'PRODUCTOS_GARANTIAS',
		'orden'			=> '1',
		'crear_label'	=> '80px',
		'crear_txt'		=> '660px',
		'filtros_extra'	=> '',
		'exportar_excel'	=> '1',
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
						'params'		=> 'id_item_item|frozen=1&descripcion|frozen=1&kilometraje|frozen=1&user1|frozen=1&mdo|frozen=0&maes|frozen=0&rpto|frozen=0&user2|frozen=0&maes|validacion=1&rpto|validacion=1&mdo|validacion=1&onload_include=base2/on_garantias.php',
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
						'opciones'		=> 'id,nombre|servicio_tecnico|order by nombre asc',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '0'
				),
				'id_jefe'	=>array(
						'campo'			=> 'id_jefe',
						'label'			=> 'Jefe de Venta',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios2|order by nombre asc',
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
						'opciones'		=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where (productos_items_items.id_status=5 or productos_items_items.id_status=7) ',
						'directlink'	=> 'productos_items_items.id,productos_items_items.vin|productos_items_items|where (productos_items_items.id_status=5 or productos_items_items.id_status=7) ',
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
						'validacion'	=> '1',
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
		'user'			=> '1'
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
						'tamanos'		=> '100x100,200x200,350x220,850x450',
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

$objeto_tabla['PRODUCTOS_TIPOS']=array(
		'titulo'		=> 'Líneas',
		'nombre_singular'=> 'línea',
		'nombre_plural'	=> 'líneas',
		'tabla'			=> 'productos_tipos',
		'archivo'		=> 'productos_tipos',
		'prefijo'		=> 'protip',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '0',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Líneas',
		'me'			=> 'PRODUCTOS_TIPOS',
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
						'controles'		=> '<a rel="subs" href="custom/productos_items.php?id_tipo=[id]" >{select count(*) from productos_items where id_tipo=[id]} modelos</a>',
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
		'titulo'		=> 'Marcas',
		'nombre_singular'=> 'marca',
		'nombre_plural'	=> 'marcas',
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
		'menu_label'	=> 'Marcas',
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
		// 'set_fila_fijo'	=> '1',
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
		'visibilidad'	=> '1',
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
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '4',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
		'set_fila_fijo'	=> '4',
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
				),
				'direccion'		=>array(
						'campo'			=> 'direccion',
						'label'			=> 'Dirección',
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '400px',
						'style'			=> 'width:400px;',
						'derecha'		=> '1'
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
		'set_fila_fijo'	=> '4',
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
		'order_by'		=> 'nombre asc',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'dni',
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
						'subvalidacion'		=> 'email',
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
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'edicion_rapida'	=> '1',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
		'set_fila_fijo'	=> '4',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '0',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0',
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1',
		'disabled'		=> '0'
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
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
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '1',
		'altura_listado'	=> 'auto',
		'visibilidad'	=> '1',
		'buscar'		=> '1',
		'busqueda_estricta'=> '1',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'menu_label'	=> 'Atenciones',
		'me'			=> 'VENTAS_ITEMS',
		'orden'			=> '0',
		'por_pagina'	=> '20',
		'nocharge'		=> '0',
		'onload_include'	=> 'base2/update_alertas.php',
		'onload_script'	=> '<style>#id_in_id_jefe{display:none;}</style>',
		'events'		=>array(
				'on_session'	=> ''
		),

		'procesos'		=>array(
				array(
					'label'		=> 'Orden de Compra',
					'accion'	=> 'custom&OT=ventas_items_ordenes',
					'file'		=> 'base2/apps/oc/oc_status.php',
					// 'rel'		=> 'width:1400,height:980',
					'ran'		=> 'null',
					'rel'		=> 'width:1000,height:550',
					// 'disabled'		=> '1'
				),	
				array(
					'label'		=> 'Desistimiento',
					'accion'	=> 'custom',
					'file'		=> 'base2/apps/desistimiento.php',
					'rel'		=> 'width:650,height:380',
				),
				array(
					'label'		=> 'Cambio de Estado',
					'accion'	=> 'custom',
					'file'		=> 'base2/apps/change_status.php',
					'rel'		=> 'width:650,height:380',
				),
		
		),		
		'postscript'	=> '

				if(SS=="insert"){

					$uu		= fila("id_jefe,id,status,id_sesion as user","usuarios","where id_sesion=\"".LL["user"]."\" or id=\"".LL["id_usuario"]."\"",0);

					update(array("user"=>$uu["user"], "id_usuario"=>$uu["id"], "id_jefe"=>$uu["id_jefe"] ,"vendedor_status"=>$uu["status"]),TT,"where id=II",0);

					update(array("user"=>$uu["user"], "id_usuario"=>$uu["id"], "id_jefe"=>$uu["id_jefe"] ),"clientes","where id=".LL["id_cliente"],0);
					
					insert([
							"fecha_creacion"=>"now()",
							"id_grupo"	=>	II,
							"texto"		=>	"Primer contacto",
							"tipo"		=>	"3",
							"id_usuario"=>	LL["id_usuario"],
							"alerta"		=>	LL["alerta"],
							"alerta_fecha"=>LL["alerta_fecha"],
							]
							,"ventas_mensajes"
							,0
							);

					update(
						[
						"alerta"				=>"",						
						"alerta_fecha"				=>"",
						],
						TT,
						"where id=".II,0);	

						include("base2/apps/envio_automatico.php");

						include("base2/apps/alerta_nacin.php");

				}


				if(SS=="update"){

					$uu		= fila("id_jefe,id,status,id_sesion as user","usuarios","where id=\"".LL["id_usuario"]."\"",0);					

					update(array("user"=>$uu["user"], "id_usuario"=>$uu["id"], "id_jefe"=>$uu["id_jefe"] ,"vendedor_status"=>$uu["status"]),TT,"where id=II",0);

					update(array("user"=>$uu["user"], "id_usuario"=>$uu["id"], "id_jefe"=>$uu["id_jefe"]),"clientes","where id=".LL["id_cliente"],0);

				}
				if(SS=="updatemass"){

					foreach(AA as $i){

						$ll=fila(CC,TT,"where id=".$i,0);

						$id_sesion=dato("id_sesion","usuarios","where id=".$ll["id_usuario"],0);

						$jefe=dato("id_jefe","usuarios","where id=".$ll["id_usuario"],0);

						$usu_status	= dato("status","usuarios","where id=".LL["id_usuario"],0);

						update(array("id_jefe"=>$jefe, "vendedor_status"=>$usu_status),TT,"where id=$i",0);

						update(array("id_jefe"=>$jefe, "id_usuario"=>$ll["id_usuario"],"user"=>$id_sesion),"clientes","where id=".$ll["id_cliente"],0);

						update(array("user"=>$id_sesion),"ventas_items","where id=".$i,0);

						update(array("id_usuario"=>$ll["id_usuario"],"user"=>$id_sesion),"ventas_mensajes","where id_grupo=".$i,0);


					}

				}
				
		',
		'mass_actions'	=> 'id_usuario',

		'exportar_gm'	=> '0',

		'exportar_go'	=> '0',

		'joins'			=>array(

					'clientes'		=> 'ventas_items.id_cliente=clientes.id',
				// 'usuarios'		=> 'ventas_items.id_usuario=usuarios.id',
		),
		'more'			=>array(
				'clientes'		=> '
			dni?listable=1&queries=0&label=DNI&after=id_cliente,
			telefono?listable=1&queries=0&after=id_cliente,
			cliente_celular?listable=1&queries=0&after=id_cliente,
			celular_claro?listable=1&queries=0&after=id_cliente,
			celular_movistar?listable=1&queries=0&after=id_cliente,
			nextel?listable=1&queries=0&after=id_cliente,
			rpm?listable=1&queries=0&after=id_cliente,
			rpc?listable=1&queries=0&after=id_cliente,
			email?listable=1&queries=0&after=id_cliente,			
			',
				// 'usuarios'		=> 'id_jefe?listable=1&queries=1&after=id_usuario',
		),
		'controles'		=> '
		<a href="base2/procesos/desistir_masivo.php">Desistir masivo</a>		
		<a href="pop.php?app=importar_gmail" class="btn btn-small exportar_go" target="_blank">Importar Gmail</a>		
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
						'queries'		=> '1',
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
						'directlink'	=> 'id,nombre;apellidos;dni;info2|clientes|where visibilidad=1|6',
						'ondlselect'	=> '1',
						// 'opciones'		=> 'clientes.id,nombre;apellidos;dni;info2;email;telefono;telefono_oficina;cliente_celular;celular_claro;celular_movistar;nextel;rpm;rpc|ventas_items right join clientes on ventas_items.id_cliente=clientes.id|where 0|dni+DNI;telefono+telefono;celular_claro+claro;celular_movistar+movistar;nextel+nextel;rpm+rpm;rpc+rpc;email+email;empresa+empresa;direccion+direccion',
						'opciones'		=> 'clientes.id,nombre;apellidos;dni;info2;email|clientes right join ventas_items on ventas_items.id_cliente=clientes.id|where 0|dni+DNI;telefono+telefono;celular_claro+claro;celular_movistar+movistar;nextel+nextel;rpm+rpm;rpc+rpc;email+email;empresa+empresa;direccion+direccion',
						
						'directlink_include'=>'base2/apps/directlink_cliente_hack.php',
						
						'style'			=> 'width:320px;',
						'controles'		=> '
							<a href="pop.php?app=enviar_cotizacion&id=[id]&tab=deljefe" class="mb mensaje_dejefe">comentario del jefe</a>
							<a href="pop.php?app=enviar_cotizacion&id=[id]&tab=deladmin" class="mb mensaje_deadministrador">comentario del administrador</a>
							<a href="pop.php?app=enviar_cotizacion&id=[id]" class="mb mensaje_cliente" >mensaje al cliente</a>
							<a class="mb" target="_black" href="../index.php?modulo=items&tab=productos_imprimir&acc=file&id_venta=[id]">imprimir</a>'

							.'<a href="custom/ventas_mensajes.php?id=[id]" rel="crear subs popup">{select count(*) from ventas_mensajes where id_grupo=[id]} actividades</a>'

							// .'<a href="custom/productos_ventas_docs.php?id=[id]" rel="subs popup">{select count(*) from productos_ventas_docs where id_grupo=[id]} documentos</a>'

							// .'<a href="custom/ventas_items_ordenes.php?id=[id]" rel="subs popup">{select count(*) from ventas_items_ordenes where id_grupo=[id]} ordenes</a>'
							.'',

						'tip_foreig'	=> '1',
						'like'			=> '0',
						'tags'			=> '1',
						'validacion'	=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '1',
						'queries'		=> '1',
						'dlquery'		=> '1'
				),

				'id_grupo'		=>array(
						'campo'			=> 'id_grupo',
						'label'			=> 'Marca',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'validacion'	=> '1',
						'default'		=> '[id_grupo]',
						'foreig'		=> '1',
						'style'			=> 'width:100px,',
						'opciones'		=> 'id,nombre|productos_grupos|where visibilidad=1 order by nombre asc',
						'load'			=> 'id_item||id,nombre|productos_items|where visibilidad=1 and id_grupo=[id_grupo] order by orden desc',
						'width'			=> '80px',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1'
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
						'opciones'		=> 'id,nombre|productos_items|where visibilidad=1 order by nombre asc',
						'width'			=> '250px',
						'derecha'		=> '2',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1'
				),
				
				'vendedor_status'=>array(
						'campo'			=> 'vendedor_status',
						'label'			=> 'Status de vendedor',
						'tipo'			=> 'com',
						'constante'		=> '0',
						'listable'		=> '1',
						'default'		=> '1',
						'opciones'		=>array(
								'1'			=> 'Activo',
								'2'			=> 'Cesado'
						),
						'foreig'		=> '1',
						'listyle'		=> 'width:160px;display:none;',
						'width'			=> '120px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'queries'		=> '1'
				),
				'id_jefe'		=>array(
						'campo'			=> 'id_jefe',
						'label'			=> 'Jefe',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						// 'default'		=> '[id_jefe]',
						'foreig'		=> '1',
						'style'			=> 'width:160px,',
						'opciones'		=> 'id,nombre;apellidos|usuarios2|order by nombre asc',
						'width'			=> '120px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'queries'		=> '1',
						'queries_load'	=> 'id_usuario||id,nombre;apellidos|usuarios|where id_jefe=',
						'load'			=> 'id_usuario||id,nombre;apellidos|usuarios|where and status=1 and id_jefe=[id_jefe] order by nombre asc,apellidos asc',
				),
				'id_status'		=>array(
						'campo'			=> 'id_status',
						'label'			=> 'Status',
						'width'			=> '100px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre|ventas_status|order by nombre asc',
						'derecha'		=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'validacion'	=> '1'
				),
				'id_status_pedido'		=>array(
						'campo'			=> 'id_status_pedido',
						// 'label'			=> 'Status',
						// 'width'			=> '100px',
						'tipo'			=> 'hid',
						// 'opciones'		=> 'id,nombre|ventas_status|order by calificacion asc',
						// 'noedit'			=> '1',
						// 'indicador'		=> '1',
				),				
				'id_canal'		=>array(
						'campo'			=> 'id_canal',
						'label'			=> 'Código de Marketing (selección obligatoria)',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre|contacto_canales|where visibilidad=1 order by nombre asc',
						'tags'			=> '1',
						'queries'		=> '1',
						// 'noedit'		=> '1',
						'validacion'	=> '1'
				),
				'id_cuenta_email'=>array(
						'campo'			=> 'id_cuenta_email',
						'label'			=> 'enviar desde',
						'width'			=> '75px',
						'tipo'			=> 'hid',
						'listable'		=> '0',
						'opciones'		=> 'id,nombre;email|envios_cuentas',
						'disabled'		=> '1'
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
								'3'			=> 'Leasing',
								'4'			=> 'Pandero'
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
						'subvalidacion'		=> 'email',
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
				'motivo'			=>array(
						'campo'			=> 'motivo',
						'tipo'			=> 'hid',
				),	
				'otro_motivo'			=>array(
						'campo'			=> 'otro_motivo',
						'tipo'			=> 'txt',
						'indicador'		=> '1',
				),						
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Vendedor',
						'width'			=> '120px',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|usuarios|where visibilidad=1 and status=1 order by nombre asc,apellidos asc',
						// 'opciones'		=> 'id,nombre;apellidos|usuarios|where visibilidad=1',
						'derecha'		=> '1',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'crearforeig'	=> '0',
						'validacion'	=> '0',
						'indicador'		=> '0'
				),
				/*
				'copia'=>array(
						'campo'			=> 'copia',
						'label'			=> 'copia para envio',
						'tipo'			=> 'inp',
						'listable'		=> '0',
						'validacion'	=> '0',
						'derecha'		=> '2',
						'style'			=> 'width:170px;',
						'constante'		=> '1',
				),
				*/							
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
				),
				'alerta'		=>array(
						'legend'		=> 'Alerta',
						'campo'			=> 'alerta',
						'label'			=> 'Alerta',
						'width'			=> '80px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'validacion_crear'=> '1',
						'opciones'		=> 'id,nombre|mensajes_alertas',
						'derecha'		=> '1',
						// 'default'		=> '3',
						'queries'		=> '0',
						'noedit'			=> '1'
				),
				'alerta_fecha'	=>array(
						'campo'			=> 'alerta_fecha',
						'label'			=> '',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '1',
						'width'			=> '136px',
						'derecha'		=> '2',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0',
						'noedit'			=> '1',
						'validacion'	=> '1',
				),		
				'invernado'		=>array(
						'campo'			=> 'invernado',
						'label'			=> 'Invernado',
						'tipo'			=> 'com',
						'listable'		=> '0',
						'validacion'	=> '0',
						'default'		=> '0',
						'opciones'		=>array(
								'1'			=> 'Si',
								'0'			=> 'No'
						),
						'derecha'		=> '1',
						'style'			=> 'width:100px;',
						'width'			=> '50px',
						// 'frozen'		=> '1'
				),
						
				'orden_status'	=>array(
					'campo'			=> 'orden_status',
					'label'			=> 'Estado de Orden de Compra',
					'tipo'			=> 'com',
					'listable'		=> '0',
					'validacion'	=> '0',
					'opciones'		=>array(
							'1'			=> 'Activado',
							'2'			=> 'Modificado',
							'3'			=> 'Aprobado',
							'4'			=> 'Generado',
							'5'			=> 'Con Vin',
							'6'			=> 'Anulación Solicitada',
							'7'			=> 'Anulado',
					),
					'derecha'		=> '1',
					'indicador'		=> '1'
				),				
		),
		'grupo'			=> 'ventas',
		'edicion_completa'=> '1',
		'expandir_vertical'=> '0',
		'control'		=> '1',
		'edicion_rapida'	=> '1',
		'set_fila_fijo'	=> '',
		'alias_grupo'	=> '',
		'seccion'		=> '',
		'order_by'		=> 'id desc',
		'exportar_excel'	=> '1',
		'user'			=> '1',
		'stat'			=> '0',
		// 'repos'			=> 'vendedores=Reporte de Vendedores&stock=Stock de Consesionario'
		'repos'			=> 'vendedores_old=Reporte de Vendedores|fecha_creacion&vendedoresalertas=Reporte de Atenciones y Alertas|fecha_creacion,id_usuario&vendedoresseguimientos=Ponderados de Seguimientos por Ventas|fecha_creacion,id_usuario',
		// 'repos'			=> 'vendedores_old=Reporte de Vendedores|fecha_creacion&vendedoresalertas=Reporte de Atenciones y Alertas|fecha_creacion,id_item',		
);


$objeto_tabla['PRODUCTOS_VENTAS_DOCS']=array(
	'grupo'			=> 'ventas',
	'titulo'		=> 'Documentos',
	'nombre_singular'=> 'documento',
	'nombre_plural'	=> 'documentos',
	'tabla'			=> 'productos_ventas_docs',
	'archivo'		=> 'productos_ventas_docs',
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
	'me'			=> 'PRODUCTOS_VENTAS_DOCS',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
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
					'listable'		=> '0',
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
			'nombre'		=>array(
					'campo'			=> 'nombre',
					'label'			=> 'Nombre',
					'width'			=> '130px',
					'tipo'			=> 'inp',
					'style'			=> 'width:240px;',
					'derecha'		=> '1',
					'listable'		=> '1'
			),
			'fichero'		=>array(
					'campo'			=> 'fichero',
					'label'			=> 'Archivo',
					'tipo'			=> 'sto',
					'width'			=> '300px',
					'style'			=> 'width:200px;',
					'listable'		=> '1',
					'validacion'	=> '0',
					'prefijo'		=> 'doc',
					'carpeta'		=> 'doc_fil',
					'name'			=> 'nombre',
					'enlace'		=> 'down'
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
	'edicion_completa'=> '0',
	'calificacion'	=> '0',
	'importar_csv'	=> '0',
	'width_listado'	=> '',
	'edicion_rapida'	=> '1',
	'crear_pruebas'	=> '0',
	'order_by'		=> 'id asc',
	'user'			=> '1',
	'disabled'		=> '0',
	'seccion'		=> ''
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
	'eliminar'		=> '0',
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
	'nocharge'		=> '0',
	'onload_script'	=> '
	<style>
	#group_persona_jurídica { display:none; }
	#group_persona_contacto { display:display; }
	</style>
	<script>
	window.addEvent("domready",function(){
	//alert($("in_tipo_cliente").value);
	});
	</script>
	',
	'postscript'	=> '
		/*
		$linea=fila("id_jefe,id","usuarios","where id_sesion=".LL["user"],1);

		update(array("id_jefe"=>$linea["id_jefe"],"id_usuario"=>$linea["id"]),TT,"where id=II",1);
		*/
	',
	'campos'		=>array(
			'id'			=>array(
					'campo'			=> 'id',
					'tipo'			=> 'id'
			),
			'fecha_creacion'	=>array(
					'campo'			=> 'fecha_creacion',
					'tipo'			=> 'fcr',
					'queries'		=> '1',
					'listable'		=> '1',		
					'label'			=> 'Creación',										
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
					'validacion'	=> '1',
					'opciones'		=>array(
							'1'			=> 'Natural',
							'2'			=> 'Jurídico',
					),
					'eventos'		=>array(
							'1'			=> '
											$1("id_in_genero");
											$1("id_in_apellidos");
											$0("group_persona_contacto");
											$H("la_nombre","Nombre *");
											$H("la_apellidos","Apellidos *");
											$H("la_dni","DNI *");
											$H("la_direccion","Dirección *");
											$H("la_genero","Género *");
											$H("la_fecha_cliente","Cumpleaños");
											$1("id_in_profesion");
											$1("id_in_estado_civil");
											$1("id_in_conyuge");
											',
							'2'			=> '
											$0("id_in_genero");
											$0("id_in_apellidos");
											$1("group_persona_contacto");
											$H("la_nombre","Razón Social *");
											$H("la_dni","RUC *");
											$H("la_direccion","Dirección *");
											$H("la_fecha_cliente","Aniversario");
											$0("id_in_profesion");
											$0("id_in_estado_civil");
											$0("id_in_conyuge");												
											',
					),
					'derecha'		=> '1',
					'width'			=> '70px',
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
					'tags'			=> '1',
					'queries'		=> '0',
					'dlquery'		=> '0',
					'noedit'			=> '1'
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
					'tags'			=> '1',
					'noedit'			=> '1'						
			),
			'dni'			=>array(
					'campo'			=> 'dni',
					'label'			=> 'DNI/RUC',
					'subvalidacion'		=> 'dni',
					'tipo'			=> 'inp',
					'listable'		=> '0',
					'validacion'	=> '1',
					'width'			=> '150px',
					'derecha'		=> '1',
					'default'		=> '',
					'like'			=> '1',
					'unique'		=> '0',
					'size'			=> '11',
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
					'width'			=> '70px'
			),
			'email'			=>array(
					'campo'			=> 'email',
					'label'			=> 'Email',
					'subvalidacion'		=> 'email',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'width'			=> '150px',
					'style'			=> 'width:150px;',
					'derecha'		=> '2',
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
					'style'			=> 'width:130px;',
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
					'style'			=> 'width:130px;',
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
					'style'			=> 'width:130px;',
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
			'cliente_celular'	=>array(
					'campo'			=> 'cliente_celular',
					'label'			=> 'cliente celular',
					'tipo'			=> 'inp',
					'listable'		=> '1',
					'validacion'	=> '1',
					'width'			=> '80px',
					'style'			=> 'width:100px;',
					'derecha'		=> '2'

			),					
			'celular_claro'	=>array(
					'campo'			=> 'celular_claro',
					'label'			=> 'Claro',
					'tipo'			=> 'inp',
					'listable'		=> '1',
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
					'listable'		=> '1',
					'validacion'	=> '0',
					'width'			=> '70px',
					'style'			=> 'width:70px;',
					'derecha'		=> '2'
			),
			'fecha_cliente'			=>array(
				'campo'			=> 'fecha_cliente',
				'label'			=> 'Cumpleaños',
				'tipo'			=> 'fch',
				'width'			=> '110px',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1',
				'rango'			=> '-90 years,-18 years',
			),	
			'profesion'			=>array(
				'campo'			=> 'profesion',
				'label'			=> 'PROFESION',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),	
			'estado_civil'=>array(
				'campo'			=> 'estado_civil',
				'label'			=> 'ESTADO CIVIL',
				'tipo'			=> 'com',
				'listable'		=> '0',
				'validacion'	=> '0',
				'opciones'		=>array(
						'1'			=> 'soltero',
						'2'			=> 'casado'
				),
				'eventos'		=>array(
					'1'			=> '
									$0("id_in_conyuge");
									',
					'2'			=> '
									$1("id_in_conyuge");
									',
				),
				'default'		=> '0',
				'derecha'		=> '2',
			),				
			'conyuge'			=>array(
				'campo'			=> 'conyuge',
				'label'			=> 'CONYUGE',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
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
					'disabled'		=> '0'
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
					'style'			=> 'width:130px;',
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
					'style'			=> 'width:130px;',
					'derecha'		=> '2',
					'like'			=> '1'
			),
			'contacto_dni'			=>array(
				'campo'			=> 'contacto_dni',
				'label'			=> 'DNI',
				'subvalidacion'		=> 'dni',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'width'			=> '150px',
				'derecha'		=> '2',
				'default'		=> '',
				'like'			=> '1',
				'unique'		=> '0',
				'size'			=> '11',
			),				
			'contacto_email'	=>array(
					'campo'			=> 'contacto_email',
					'label'			=> 'Email',
					'subvalidacion'		=> 'email',
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
					'style'			=> 'width:130px;',
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
					'style'			=> 'width:130px;',
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
					'style'			=> 'width:130px;',
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
			'id_jefe'		=>array(
					'campo'			=> 'id_jefe',
					'label'			=> 'Jefe',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'default'		=> '[id_jefe]',
					'foreig'		=> '1',
					'style'			=> 'width:160px,',
					'opciones'		=> 'id,nombre;apellidos|usuarios2|order by nombre asc',
					'width'			=> '120px',
					'derecha'		=> '2',
					'tip_foreig'	=> '1',
					'queries'		=> '1'
			),
				
			'tags'			=>array(
					'campo'			=> 'tags',
					'label'			=> 'tags',
					'tipo'			=> 'txt',
					'indicador'		=> '1',
					'fulltext'		=> '1',
					'autotags'		=> '1'
			),
			'id_usuario'	=>array(
					'campo'			=> 'id_usuario',
					'label'			=> 'Vendedor',
					'width'			=> '120px',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'opciones'		=> 'id,nombre;apellidos|usuarios|order by nombre asc',
					'derecha'		=> '1',
					'tip_foreig'	=> '1',
					'tags'			=> '1',
					'queries'		=> '1',
					'noedit'		=> '1',
					'crearforeig'	=> '0',
					'validacion'	=> '0',
					'indicador'		=> '0'
			),				
			'user'			=>array(
					'campo'			=> 'user',
					'tipo'			=> 'user'
			)		,
			'info2'			=>array(
					'campo'			=> 'info2',
					'tipo'			=> 'inp',
					'indicador'		=> '0'
			)						
	),
	'edicion_rapida'	=> '1',
	'edicion_completa'=> '1',
	'exportar_excel'	=> '0',
	'importar_csv'	=> '0',
	'user'			=> '1',
	'por_pagina'	=> '10',
);

/******************************************************************************************************************************************************/

$objeto_tabla['VENTAS_ITEMS_ORDENES']=array(
	'grupo'			=> 'ventas',
	'titulo'		=> 'Ordenes de Compra',
	'nombre_singular'=> 'orden de compra',
	'nombre_plural'	=> 'ordenes de compra',
	'tabla'			=> 'ventas_items_ordenes',
	'archivo'		=> 'ventas_items_ordenes',
	'prefijo'		=> 'provendoc',
	'eliminar'		=> '0',
	'editar'		=> '1',
	'edicion_completa'=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '0',
	'menu_label'	=> 'Ordenes',
	'por_pagina'	=> '20',
	'me'			=> 'VENTAS_ITEMS_ORDENES',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	'postscript'	=> '

			if(SS=="insert")
			{
				update(["orden_status"=>"1"],"ventas_items","where id=".LL["id_grupo"],0);

				if(LL["moneda"]=="soles"){
					$separacion=LL["banco_monto"]/LL["producto_tc"];
				} else {
					$separacion=LL["banco_monto"];
				}				
				update([	
					"orden_status"=>"1",
					"orde_numero"=>II,
					"producto_separado"=>$separacion,
				],TT,"where id=II",0);

				insert(LL,"ventas_items_ordenes_copia",0);

			}

			if(SS=="update")
			{

				if(LL["orden_status"]=="1"){

					update(
					[
						"orden_status"=>"2",
					],
					"ventas_items",
					"where id=".LL["id_grupo"],0);

					update(["orden_status"=>"2","orde_numero"=>II],TT,"where id=II",0);	
					
				}			
				
				$id_orden_lista=II;
				$_GET["req"]="modificacion";
				$_GET["ajax"]="1";
				$_GET["L"]=LL["id_grupo"];
				include("base2/apps/oc/oc_procesos.php");

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
					'listable'		=> '0',
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
			'orden_tipo'		=>array(
				'campo'			=> 'orden_tipo',
				'tipo'			=> 'inp',
				'indicador'		=> '1'
			),
			'orde_numero'	=>array(
				'campo'			=> 'orde_numero',
				'label'			=> 'Número',
				'tipo'			=> 'inp',
				'listable'		=> '1',
				'validacion'	=> '0',
				'width'			=> '80px',
				'disabled'		=> '0',
				'no_save'		=> '0',
				'frozen'		=> '1',
			),			
			'banco_operacion'		=>array(
				'campo'			=> 'banco_operacion',
				'label'			=> 'Código de Operación',
				'width'			=> '70px',
				'tipo'			=> 'inp',
				'style'			=> 'width:100px;',
				'derecha'		=> '1',
				'listable'		=> '1',
				'validacion'	=> '1',

			),
			'moneda'		=>array(
				'campo'			=> 'moneda',
				'label'			=> 'Moneda',
				'tipo'			=> 'com',
				'listable'		=> '1',
				'validacion'	=> '1',
				'opciones'		=>array(
						'soles'			=> 'soles',
						'dolares'		=> 'dólares'
				),
				'default'		=> '1',
				'style'			=> 'width:45px;',
				'derecha'		=> '1',
				'width'			=> '30px'
			),				
			'banco_monto'			=>array(
				'campo'			=> 'banco_monto',
				'label'			=> 'Monto',
				'width'			=> '100px',
				'tipo'			=> 'inp',
				'style'			=> 'width:60px;',
				'derecha'		=> '2',
				'validacion'		=> '1',
				'listable'		=> '0',
				'format'		=> 'currency'
			),
			
			'banco_explicacion_duplicidad'			=>array(
				'campo'			=> 'banco_explicacion_duplicidad',
				'label'			=> 'Explicación por duplicidad',
				'tipo'			=> 'txt',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1'
			),

			'orden_fecha'	=>array(
				'campo'			=> 'orden_fecha',
				'label'			=> 'Fecha',
				'tipo'			=> 'fch',
				'width'			=> '110px',
				'listable'		=> '1',
				'validacion'	=> '0',
				'formato'		=> '5b',
				'derecha'		=> '1',
				'rango'			=> '-9 years,+1 years',
				'default'		=> 'now()',

			),
			'asesor_nombre'			=>array(
				'campo'			=> 'asesor_nombre',
				'label'			=> 'EJECUTIVO DE VENTA',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:350px;',
				'derecha'		=> '1'
			),

			'tipo_cliente'            => array_merge($objeto_tabla['CLIENTES']['campos']['tipo_cliente'],[
											'legend'		=> 'CLIENTE',
										]),
			'nombre'            	  => array_merge($objeto_tabla['CLIENTES']['campos']['nombre'],[
											'noedit'		=> '0',
										]),
			'apellidos'            	  => array_merge($objeto_tabla['CLIENTES']['campos']['apellidos'],[
											'noedit'		=> '0',
										]),
			'dni'                     => $objeto_tabla['CLIENTES']['campos']['dni'],
			'genero'                  => $objeto_tabla['CLIENTES']['campos']['genero'],
			'email'                   => $objeto_tabla['CLIENTES']['campos']['email'],
			'departamento'            => $objeto_tabla['CLIENTES']['campos']['departamento'],
			'provincia'               => $objeto_tabla['CLIENTES']['campos']['provincia'],
			'distrito'                => $objeto_tabla['CLIENTES']['campos']['distrito'],
			'direccion'               => $objeto_tabla['CLIENTES']['campos']['direccion'],
			'telefono'                => $objeto_tabla['CLIENTES']['campos']['telefono'],
			'telefono_oficina'        => $objeto_tabla['CLIENTES']['campos']['telefono_oficina'],
			'cliente_celular'         => $objeto_tabla['CLIENTES']['campos']['cliente_celular'],
			'celular_claro'           => $objeto_tabla['CLIENTES']['campos']['celular_claro'],
			'nextel'                  => $objeto_tabla['CLIENTES']['campos']['nextel'],
			'rpm'                     => $objeto_tabla['CLIENTES']['campos']['rpm'],
			'rpc'                     => $objeto_tabla['CLIENTES']['campos']['rpc'],
			'fecha_cliente'           => $objeto_tabla['CLIENTES']['campos']['fecha_cliente'],
			'profesion'               => $objeto_tabla['CLIENTES']['campos']['profesion'],
			'estado_civil'            => $objeto_tabla['CLIENTES']['campos']['estado_civil'],
			'conyuge'                 => $objeto_tabla['CLIENTES']['campos']['conyuge'],
			'pag_tipo_documento'      => $objeto_tabla['CLIENTES']['campos']['pag_tipo_documento'],
			'empresa'                 => $objeto_tabla['CLIENTES']['campos']['empresa'],
			'pag_factura_razonsocial' => $objeto_tabla['CLIENTES']['campos']['pag_factura_razonsocial'],
			'pag_factura_ruc'         => $objeto_tabla['CLIENTES']['campos']['pag_factura_ruc'],
			'contacto_nombre'         => $objeto_tabla['CLIENTES']['campos']['contacto_nombre'],
			'contacto_apellidos'      => $objeto_tabla['CLIENTES']['campos']['contacto_apellidos'],
			'contacto_dni'            => $objeto_tabla['CLIENTES']['campos']['contacto_dni'],
			

			'producto_marca'			=>array(
				'legend'			=> 'DATOS DEL VEHICULO',
				'campo'			=> 'producto_marca',
				'label'			=> 'MARCA',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1'
			),
			'producto_modelo'			=>array(
				'campo'			=> 'producto_modelo',
				'label'			=> 'MODELO',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),
			'producto_color'			=>array(
				'campo'			=> 'producto_color',
				'label'			=> 'COLOR',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),	
			'producto_anio'			=>array(
				'campo'			=> 'producto_anio',
				'label'			=> 'AÑO',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),
			'producto_vin'			=>array(
				'campo'			=> 'producto_vin',
				'label'			=> 'CHASIS/VIN',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1'
			),
			'producto_separado'			=>array(
				'campo'			=> 'producto_separado',
				'label'			=> 'SEPARACION',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),		
			'producto_precio'			=>array(
				'campo'			=> 'producto_precio',
				'label'			=> 'PRECIO DEL VEHICULO',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1',
				'onchange'		=> 'if($v("in_producto_precio")!="" && $v("in_producto_descuento")!=""){ $("in_producto_precio_facturar").value=$v("in_producto_precio")*(1-0.01*$v("in_producto_descuento")); }',

			),
			'producto_descuento'			=>array(
				'campo'			=> 'producto_descuento',
				'label'			=> 'DSCTO %',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:50px;',
				'derecha'		=> '2',
				'onchange'		=> 'if($v("in_producto_precio")!="" && $v("in_producto_descuento")!=""){ $("in_producto_precio_facturar").value=$v("in_producto_precio")*(1-0.01*$v("in_producto_descuento")); }',
			),		
			'producto_tc'			=>array(
				'campo'			=> 'producto_tc',
				'label'			=> 'T/C (del día)',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '1',
				'style'			=> 'width:50px;',
				'derecha'		=> '2',
				'format'		=> 'currency'
			),
			'producto_precio_facturar'		=>array(
				'campo'			=> 'producto_precio_facturar',
				'label'			=> 'PRECIO A FACTURAR',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'width'			=> '100px',
				'validacion'	=> '0',
				'variable'		=> 'float',
				'derecha'		=> '1',
				'size'			=> '8',
				'style'			=> 'width:100px;',
				'format'			=> 'currency'
		),			
			'producto_conversion'			=>array(
				'campo'			=> 'producto_conversion',
				'label'			=> 'CONVERSION GLP/GNV',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),		
			'producto_credito_vehicular'			=>array(
				'campo'			=> 'producto_credito_vehicular',
				'label'			=> 'CREDITO VEHICULAR',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1'
			),
			'producto_credito_leasing'			=>array(
				'campo'			=> 'producto_credito_leasing',
				'label'			=> 'CREDITO LEASING',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),		
			'producto_contado'			=>array(
				'campo'			=> 'producto_contado',
				'label'			=> 'CONTADO',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),
			'producto_otros'			=>array(
				'campo'			=> 'producto_otros',
				'label'			=> 'OTROS',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '2'
			),	
			
			'adicional_marketing'			=>array(
				'legend'		=> 'DATOS ADICIONALES',
				'campo'			=> 'adicional_marketing',
				'label'			=> 'CODIGO DE MARKETING',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:250px;',
				'derecha'		=> '1'
			),	
			'adicional_origen_fondos'			=>array(
				'campo'			=> 'adicional_origen_fondos',
				'label'			=> 'ORIGEN DE FONDOS',
				'tipo'			=> 'inp',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:250px;',
				'derecha'		=> '2'
			),	
			'adicional_observaciones'			=>array(
				'campo'			=> 'adicional_observaciones',
				'label'			=> 'OBSERVACIONES',
				'tipo'			=> 'txt',
				'listable'		=> '0',
				'validacion'	=> '0',
				'style'			=> 'width:150px;',
				'derecha'		=> '1'
			),	

			'orden_status'	=>array(
				'campo'			=> 'orden_status',
				'label'			=> 'Estado',
				'tipo'			=> 'com',
				'listable'		=> '1',
				'validacion'	=> '0',
				'opciones'		=>array(
						'1'			=> 'Activado',
						'2'			=> 'Modificado',
						'3'			=> 'Aprobado',
						'4'			=> 'Generado',
						'5'			=> 'Con Vin',
						'6'			=> 'Anulación Solicitada',
						'7'			=> 'Anulado',
				),
				'derecha'		=> '1',
				'indicador'		=> '1'

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
	'calificacion'	=> '0',
	'importar_csv'	=> '0',
	'width_listado'	=> '',
	'edicion_rapida'	=> '0',
	'crear_pruebas'	=> '0',
	// 'order_by'		=> 'operacion asc',
	// 'user'			=> '1',
	'disabled'		=> '0',
	'seccion'		=> ''
);


$objeto_tabla['VENTAS_ITEMS_ORDENES_COPIA']=array(
	'grupo'			=> 'ventas',
	'titulo'		=> 'Copias de Ordenes de Compra',
	'nombre_singular'=> 'copia de orden de compra',
	'nombre_plural'	=> 'copias de ordenes de compra',
	'tabla'			=> 'ventas_items_ordenes_copia',
	'archivo'		=> 'ventas_items_ordenes_copia',
	'prefijo'		=> 'provendoc',
	'eliminar'		=> '0',
	'editar'		=> '1',
	'edicion_completa'=> '1',
	'crear'			=> '1',
	'duplicar'		=> '0',
	'altura_listado'	=> 'auto',
	'visibilidad'	=> '0',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'menu'			=> '0',
	'menu_label'	=> 'Ordenes',
	'por_pagina'	=> '20',
	'me'			=> 'VENTAS_ITEMS_ORDENES_COPIA',
	'orden'			=> '1',
	'crear_label'	=> '80px',
	'crear_txt'		=> '660px',
	'filtros_extra'	=> '',
	// 'subbottom'		=> 'factnum=TOTAL&monto=SUM&recibido=SUM',
	// 'script'		=> '
	// ',
	'campos'		=>$objeto_tabla['VENTAS_ITEMS_ORDENES']['campos'],
	
	'calificacion'	=> '0',
	'importar_csv'	=> '0',
	'width_listado'	=> '',
	'edicion_rapida'	=> '0',
	'crear_pruebas'	=> '0',
	// 'order_by'		=> 'operacion asc',
	// 'user'			=> '1',
	'disabled'		=> '0',
	'seccion'		=> ''
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
	'editar'		=> '0',
	'buscar'		=> '1',
	'bloqueado'		=> '0',
	'crear'			=> '1',
	'crear_label'	=> '60px',
	'crear_txt'		=> '550px',
	'menu'			=> '0',
	'menu_label'	=> 'Actividades',
	'por_pagina'	=> '1',
	'nocharge'		=> '0',
	'me'			=> 'VENTAS_MENSAJES',
	'onload_include'	=> 'base2/update_ventas_mensajes.php',
	'orden'			=> '0',

	'exportar_go'	=> '0',

	'postscript'	=> '


		if(SS=="insert" and LL["cumplir_alertas"]=="1")
		{

			// $pendientes=contar("ventas_mensajes","where id!=".LL["id"]." and estado in (1,2) and alerta=1 and id_grupo=".LL["id_grupo"]." ");
			$pendientes=contar("ventas_mensajes","where id!=".LL["id"]." and estado in (1,2,3,5) and id_grupo=".LL["id_grupo"]." ",0);
			
			// exit();

			if($pendientes>0){

				update(
					["cumplido"=>"1","estado"=>"4","cumplir_alertas"=>"0"],
					"ventas_mensajes",
					"where id!=".LL["id"]." and id_grupo=".LL["id_grupo"]." and estado in (3,5) ",
					0);
				
			}	

		}


		if(SS=="insert" and LL["cumplir"]!="")
		{
			update(["cumplido"=>"1","estado"=>"4","cumplir"=>""],"ventas_mensajes","where id=".LL["cumplir"],0);
		}

		$linea=fila("id_item,id_cliente,id_usuario,user","ventas_items","where id=".LL["id_grupo"],0);
		if(SS=="update" or SS=="insert")
		{
			/*update(array("id_status"=>LL["id_status"]),"ventas_items","where id=".LL["id_grupo"],0);*/
			update(array("id_usuario"=>$linea["id_usuario"],"user"=>$linea["user"]),TT,"where id=".II,0);
		}

		if(SS=="insert" or SS=="update"){

			$linea=fila("id_cliente,id_usuario","ventas_items","where id=".LL["id_grupo"],0);

			$info2=" (".dato("nombre","usuarios","where id=".$linea["id_usuario"],0)
				 ." ".dato("apellidos","usuarios","where id=".$linea["id_usuario"],0)
				 ." ".fecha_formato("now()",0)
				 .")";

			update(
					[
					"info2"		=>$info2
					],
					"clientes",
					"where id=".$linea["id_cliente"],
					0
					);

		}

		include("base2/apps/crear_notificaciones.php");


	',
	'app'			=> '
	<a href="custom/ventas_mensajes.php?conf=exportar_go%3D1%26editar%3D0%26estado%7Clistable%3D0%26alerta_fecha%7Cqueries%3D0%26fecha_creacion%7Cqueries%3D1%26crear%3D0%26order_by%3Did+desc">Actividades</a>
	<a href="custom/ventas_mensajes.php?conf=exportar_go%3D1%26editar%3D0%26alerta_fecha%7Cqueries%3D1%26fecha_creacion%7Cqueries%3D0%26fecha_creacion%7Clistable%3D0%26nombre_plural%3DAlertas%26titulo%3DAlertas%26crear%3D0%26edit%3D0%26order_by%3Dalerta_fecha+desc'.
	// '&filter=alerta%3Dalerta%253D1%252C2%26alerta_fecha%3Dalerta_fecha%7C[today]%7C[today]">Alertas</a>'.
	'&filter=ventas_mensajes%5B0%5D=ventas_mensajes.alerta%3D1%2C2%26ventas_mensajes%5B1%5D=alerta_fecha%7C%5Btoday%5D%7C%5Btoday%5D
">Alertas</a>'.
	'',

	'joins'			=>array(
		'ventas_items'	=> 'ventas_mensajes.id_grupo=ventas_items.id',
		'usuarios'		=> 'ventas_items.id_usuario=usuarios.id',
	),
	'more'			=>array(
			'ventas_items'	=> '
			id_cliente?listable=1&queries=1&after=fecha_creacion&controles=,
			id_grupo?listable=0&queries=1&after=fecha_creacion,
			id_item?listable=0&queries=1&after=fecha_creacion,
			id_status?listable=1&queries=0&after=cumplido,
			id_usuario?listable=1&queries=1&after=cumplido,
			',
			'usuarios'		=> '
			id_jefe?listable=1&queries=1&after=cumplido
			'
	),
	'procesos'=>array(

			array(
					'label'		=> 'Comentar actividad realizada y programar proxima alerta',
					'ot'			=> 'ventas_mensajes',
					'accion'		=> 'insert',
					'extra'		=> 'id=[id_grupo]',
					'buttom'		=> 'Crear alerta y grabar cumplido',
					'rel'    	=> 'width:900,height:380',
					// 'params'		=> 'crear=1&id_canal%7Cindicador=1&id_item%7Cindicador=1&pedido%7Cindicador=1&id_usuario%7Cindicador=1&id_sectorista%7Cindicador=1&id_cliente%7Cindicador=1&id_banco%7Cindicador=1&onload_include=base2%2Fon_atencion_venta.php'
					'params'		=> '&alerta%7Clabel=Próx Alerta&alerta%7Cvalidacion=1&alerta_fecha%7Cvalidacion=1&texto%7Ctipo=txt&onload_include=base2%2Fbefore_cumplido.php',
					// 'params'		=> 'crear=1&id_canal%7Cindicador=1&id_item%7Cindicador=1&pedido%7Cindicador=1&id_usuario%7Cindicador=1&id_sectorista%7Cindicador=1&id_cliente%7Cindicador=1&id_banco%7Cindicador=1&onload_include=base2%2Fon_atencion_venta.php'

			),

			array(
					'label'		=> 'Desistimiento',
					'accion'		=> 'custom',
					'file'		=> 'base2/apps/desistimiento.php',
					'rel'			=> 'width:650,height:380',
			)					

	),

	'exports'		=> [
								'exportar alertas'=>'base2/apps/alertas_nacin',
							],
							

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
					'queries'		=> '0',
			),
			'id_grupo'		=>array(
					'campo'			=> 'id_grupo',
					'tipo'			=> 'hid',
					'listable'		=> '1',
					'validacion'	=> '0',
					'default'		=> '[id]',
					'foreig'		=> '1',
					'controles'		=> '<a style="font-weight:bold;margin-left:5px !important;" target="_blank" href="custom/ventas_items.php?i=[id_grupo]">IR A ATENCIÓN</a>',
			),
			'tipo'			=>array(
					'campo'			=> 'tipo',
					'label'			=> 'Tipo',
					'width'			=> '80px',
					'listable'		=> '1',
					'tipo'			=> 'hid',
					'validacion'	=> '1',
					'opciones'		=> 'id,nombre|mensajes_status|order by nombre asc',
					// 'default'		=> '3',
					'queries'		=> '1',
					// 'controles'		=> '<a href="custom/ventas_items.php?i=[id_grupo]" rel="file">atención</a>'


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
					'style'			=> 'height:120px;width:550px;',
					'listhtml'		=> '1',
			),
			'alerta'		=>array(
					'campo'			=> 'alerta',
					'label'			=> 'Alerta',
					'width'			=> '80px',
					'listable'		=> '1',
					'tipo'			=> 'hid',
					'derecha'		=> '1',
					'opciones'		=> 'id,nombre|mensajes_alertas',
					// 'default'		=> '3',
					'queries'		=> '1',
					'validacion'	=> '1',
			),
			'alerta_fecha'	=>array(
					'campo'			=> 'alerta_fecha',
					'label'			=> '',
					'tipo'			=> 'fch',
					'listable'		=> '1',
					'formato'		=> '7b',
					'time'			=> '1',
					'width'			=> '136px',
					'derecha'		=> '2',
					'default'		=> '',
					'rango'			=> 'now,+1 years',
					'queries'		=> '0',
					'validacion'	=> '1',
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
					'label'			=> 'Asesor',
					'width'			=> '120px',
					'listable'		=> '0',
					'tipo'			=> 'hid',
					// 'opciones'		=> 'id,nombre;apellidos|usuarios',
					'opciones'		=> 'id,nombre;apellidos|usuarios|where visibilidad=1 and status=1 order by nombre asc,apellidos asc',
					
					'derecha'		=> '1',
					'tip_foreig'	=> '0',
					'tags'			=> '1',
					'queries'		=> '1',
					'noedit'			=> '1',
					'inherited'		=> '1',
					'disabled'		=> '0',
					'dlquery'		=> '0',
					'indicador'		=> '1'
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
					'queries'		=> '1',						
					'opciones'		=>array(
							'1'			=> 'pendiente|#136CB2',
							'2'			=> 'para hoy|green',
							'3'			=> 'atrasado|red',
							'4'			=> 'cumplido|black',
							'5'			=> 'atrasado espera de desistimiento|black',
							'6'			=> 'desistido|purple',					
							'7'			=> 'vendido|yellow'								
					),
					'default'		=> '1',
					'style'			=> 'width:150px;',
					'width'			=> '100px',

			),
			'cumplido'		=>array(
					'campo'			=> 'cumplido',
					'label'			=> 'Cumplido',
					'radio'			=> '1',
					'tipo'			=> 'com',
					'listable'		=> '1',						
					'opciones'		=>array(
							'1'			=> 'si',
							'0'			=> 'no'
					),
					'default'		=> '0',
					'style'			=> 'width:150px;',
					'width'			=> '70px',
					'indicador'		=> '1',
					// 'noedit'		=> '1',
					'queries'		=> '0'

			),

			'cumplir_alertas'	=>array(
					'campo'			=> 'cumplir_alertas',
					'label'			=> 'Cumplir alertas Atrasadas',
					'noedit'			=> '1',						
					'tipo'			=> 'com',
					'listable'		=> '0',
					'validacion'	=> '0',
					'default'		=> '0',
					'opciones'		=>array(
							'1'			=> 'Si',
							'0'			=> 'No'
					),
					'derecha'		=> '1',
					'style'			=> 'width:100px;',
					'width'			=> '50px',
					'showoncrearsubs'=>'1',
			),

			'cumplir'		=>array(
					'campo'			=> 'cumplir',
					'tipo'			=> 'hid',
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
			),
			/*
			'id_cliente'	=>array(
					'campo'			=> 'id_cliente',
					'label'			=> 'Cliente',
					'width'			=> '100px',
					'listable'		=> '1',
					'foreig'		=> '1',
					'default'		=> '[id_cliente]',
					'tipo'			=> 'hid',
					'derecha'		=> '1',
					'directlink'	=> 'id,nombre;apellidos;telefono|clientes|where visibilidad=1|6',
					'ondlselect'	=> '1',
					'opciones'		=> 'id,nombre;apellidos|clientes',
					'style'			=> 'width:320px;',
					'tip_foreig'	=> '1',
					'like'			=> '0',
					'tags'			=> '1',
					'validacion'	=> '1',
					'noedit'		=> '1',
					'queries'		=> '1',
					'dlquery'		=> '1',
					'inherited'		=> '1'
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
					'inherited'		=> '1'
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
					'disabled'		=> '0',
					'inherited'		=> '1'
			),*/
					
	),
	'edicion_rapida'	=> '0',
	'calificacion'	=> '0',
	'edicion_completa'=> '1',
	'disabled'		=> '0',
	'user'			=> '1',
	// 'order_by'		=> 'alerta_fecha desc',
	'stat'			=> '0',
	'exportar_excel'	=> '0'
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
						'subvalidacion'		=> 'email',
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
		'disabled'		=> '1'
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
		'postscript'=>'

				if(SS=="insert"){

						// include("base2/apps/envio_automatico.php");

				}

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
		'set_fila_fijo'	=> '4',
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
		'menu'			=> '0',
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
						'subvalidacion'		=> 'email',
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
		'set_fila_fijo'	=> '4',
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
		'set_fila_fijo'	=> '4',
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
		'eliminar'		=> '0',
		'editar'		=> '1',
		'crear'			=> '0',
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
		'edicion_rapida'	=> '0',
		'calificacion'	=> '0',
		'set_fila_fijo'	=> '4',
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
		'por_pagina'	=> '10',
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
								'3'			=> 'atrasado|red',
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
						'subvalidacion'		=> 'email',
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

$objeto_tabla['USUARIOS3']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Supervisor',
		'nombre_singular'=> 'supervisor',
		'nombre_plural'	=> 'supervisores',
		'tabla'			=> 'usuarios3',
		'archivo'		=> 'usuarios3',
		'prefijo'		=> 'usuope3',
		'eliminar'		=> '1',
		'archivo_sub'	=> 'usuarios_acceso',
		'editar'		=> '1',
		'buscar'		=> '1',
		'menu'			=> '1',
		'menu_label'	=> 'Supervisores',
		'me'			=> 'USUARIOS3',
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
						'like'			=> '1',
						'validacion'	=> '1',
						'controles'		=> '<a rel="subs" href="custom/usuarios.php?id=[id]">{select count(*) from usuarios where id_jefe=[id]} vendedores</a>'						
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '80px',
						'derecha'		=> '2',
						'like'			=> '1',
						'validacion'	=> '1',
				),
				'query'	=>array(
						'campo'			=> 'query',
						'label'			=> 'Jefes de Ventas',
						'tipo'			=> 'hid',
						'combo'			=> '1',
						'multi'			=> '1',
						'variable'		=> 'longtext',						
						'listable'		=> '0',
						'validacion'	=> '0',
						'opciones'		=> 'id,nombre;apellidos|usuarios2',
						'style'			=> 'width:150px;',
						'derecha'		=> '1'
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
						'derecha'		=> '1',
						'width'			=> '30px'
				),
				'email'			=>array(
						'campo'			=> 'email',
						'label'			=> 'Email',
						'subvalidacion'		=> 'email',
						'tipo'			=> 'inp',
						'listable'		=> '2',
						'width'			=> '150px',
						'derecha'		=> '2',
						'validacion'	=> '1'
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
						'style'			=> 'height:200px;width:550px;',
						'disabled'		=> '1'
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
						'default'		=> '20',
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
						'controles'		=> '<a rel="subs" href="custom/usuarios.php?id=[id]">{select count(*) from usuarios where id_jefe=[id]} vendedores</a>
',
						'like'			=> '1',
						'validacion'	=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '80px',
						'derecha'		=> '2',
						'like'			=> '1',
						'validacion'	=> '1'
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
						'subvalidacion'		=> 'email',
						'tipo'			=> 'inp',
						'listable'		=> '2',
						'width'			=> '150px',
						'derecha'		=> '2',
						'validacion'	=> '1'
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
		'onload_include'	=> 'base2/fix_accesos.php',		
		'por_pagina'	=> '500',
		'postscript'	=> '
			if(SS=="update")
			{
				update(["id_jefe"=>LL["id_jefe"]],"ventas_items","where id_usuario=".II);
			}
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
						'like'			=> '1',
						'validacion'	=> '1'
				),
				'apellidos'		=>array(
						'campo'			=> 'apellidos',
						'label'			=> 'Apellidos',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'like'			=> '1',
						'validacion'	=> '1'
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
						'subvalidacion'		=> 'email',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '2',
						'validacion'	=> '1'
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

				'status'		=>array(
						'campo'			=> 'status',
						'label'			=> 'Status',
						'tipo'			=> 'com',
						'listable'		=> '1',
						'validacion'	=> '0',
						'opciones'		=>array(
								'1'			=> 'Activo',
								'2'			=> 'Cesado'
						),
						'default'		=> '1',
						'style'			=> 'width:60px;',
						'derecha'		=> '1',
						'width'			=> '30px',
						'queries'		=> '1'
				),

				'cargo'		=>array(
						'campo'			=> 'cargo',
						'label'			=> 'Cargo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'derecha'		=> '1',
						'width'			=> '150px',
						'derecha'		=> '1',
						'like'			=> '1',
						// 'validacion'	=> '1'
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

$objeto_tabla['SPEECHES_IMPORT']=array(
		'grupo'			=> 'import',
		'alias_grupo'	=> '',
		'titulo'		=> 'Speaches Import',
		'nombre_singular'=> 'speech',
		'nombre_plural'	=> 'speeches',
		'tabla'			=> 'speeches_import',
		'archivo'		=> 'speeches_import',
		'prefijo'		=> 'speimp',
		'eliminar'		=> '1',
		'crear'			=> '1',
		'editar'		=> '1',
		'edicion_completa'=> '1',		
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'menu_label'	=> 'Speeches importar excel',
		'me'			=> 'SPEECHES_IMPORT',
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
						'tipo'			=> 'txt',
						'listable'		=> '1',
						'validacion'	=> '0',
						'width'			=> '500px',
						'style'			=> 'height:270px;'
				)
		)
);


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
		'menu_label'	=> 'Speeches para enviar al cliente',
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

$objeto_tabla['SPEECHES_ASESOR']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Speaches',
		'nombre_singular'=> 'speech',
		'nombre_plural'	=> 'speeches_asesor',
		'tabla'			=> 'speeches_asesor',
		'archivo'		=> 'speeches_asesor',
		'prefijo'		=> 'spe',
		'eliminar'		=> '1',
		'crear'			=> '1',
		'editar'		=> '1',
		'buscar'		=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'menu_label'	=> 'Speeches para enviar al asesor',
		'me'			=> 'SPEECHES_ASESOR',
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
				// 'id_item'		=>array(
				// 		'campo'			=> 'id_item',
				// 		'label'			=> 'Proyecto',
				// 		'tipo'			=> 'hid',
				// 		'listable'		=> '1',
				// 		'validacion'	=> '1',
				// 		'default'		=> '[id_item]',
				// 		'style'			=> 'width:200px,',
				// 		'opciones'		=> 'id,codigo;nombre|productos_items',
				// 		'width'			=> '140px',
				// 		'derecha'		=> '1',
				// 		'tags'			=> '1',
				// 		'queries'		=> '1',
				// 		'tip_foreig'	=> '1'
				// ),
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
		'visibilidad'	=> '1',
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
		'set_fila_fijo'	=> '4',
		'crear_quick'	=> '1'
);


$objeto_tabla['NOTIFICACIONES']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'		=> 'Notificaciones',
		'nombre_singular'=> 'notificación',
		'nombre_plural'	=> 'notificaciones',
		'tabla'			=> 'notificaciones',
		'archivo'		=> 'notificaciones',
		'prefijo'		=> 'notfic',
		'eliminar'		=> '1',
		'editar'		=> '1',
		'buscar'		=> '1',
		'bloqueado'		=> '0',
		'crear'			=> '1',
		'crear_label'	=> '60px',
		'crear_txt'		=> '550px',
		'menu'			=> '1',
		'menu_label'	=> 'Notificaciones',
		'por_pagina'	=> '10',
		'me'			=> 'NOTIFICACIONES',
		'orden'			=> '0',
		'postscript'	=> '
			$linea=fila("id_item,id_cliente,id_jefe,id_usuario,user","ventas_items","where id=".LL["id_grupo"],0);
			if(SS=="update" or SS=="insert")
			{
				update(array("id_status"=>LL["id_status"]),"ventas_items","where id=".LL["id_grupo"],0);
				update(array("id_cliente"=>$linea["id_cliente"],"id_item"=>$linea["id_item"],"id_jefe"=>$linea["id_jefe"],"id_usuario"=>$linea["id_usuario"],"user"=>$linea["user"]),TT,"where id=".II,0);
			}
		',
		'joins'			=>array(
				'usuarios'		=> 'notificaciones.id_usuario=usuarios.id'
		),
		'more'			=>array(
				'usuarios'		=> 'id_jefe?listable=1&queries=1&after=id_usuario'
		),
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
						'formato'		=> '7b',
						'width'			=> '100px',
						'queries'		=> '1'
				),
				'modulo'		=>array(
						'campo'			=> 'modulo',
						'label'			=> 'Módulo',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'abonos'		=> 'abonos',
								'seguimiento'	=> 'seguimiento',
								'agenda'	=> 'agenda',
								'tramite'	=> 'tramite',
								'prestamo'	=> 'prestamo',
								'resumen'	=> 'resumen',
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px'
				),
				'id_item'		=>array(
						'campo'			=> 'id_item',
						'label'			=> 'Proyecto',
						'tipo'			=> 'hid',
						'listable'		=> '1',
						'default'		=> '[id_item]',
						'foreig'		=> '1',
						'style'			=> 'width:150px;',
						'opciones'		=> 'id,nombre|productos_items|0',
						'width'			=> '200px',
						'derecha'		=> '2',
						'tip_foreig'	=> '1',
						'tags'			=> '1',
						'noedit'		=> '1',
						'inherited'		=> '1',
						'derecha'		=> '1',
						'queries'		=> '1'
				),
				'item'			=>array(
						'campo'			=> 'item',
						'tipo'			=> 'hid'
				),
				'sub_item'		=>array(
						'campo'			=> 'sub_item',
						'tipo'			=> 'hid'
				),
				'id_cliente'	=>array(
						'campo'			=> 'id_cliente',
						'label'			=> 'Cliente',
						'width'			=> '140px',
						'listable'		=> '1',
						'tipo'			=> 'hid',
						'derecha'		=> '1',
						'opciones'		=> 'id,nombre;apellidos|clientes|where 0',
						'tip_foreig'	=> '1',						
						'derecha'		=> '1',
						'style'			=> 'width:auto;',
						'noedit'		=> '1',
				),
				'id_usuario'	=>array(
						'campo'			=> 'id_usuario',
						'label'			=> 'Asesor',
						'width'			=> '120px',
						'listable'		=> '0',
						'tipo'			=> 'hid',
						'opciones'		=> 'id,nombre;apellidos|usuarios',
						'derecha'		=> '1',
						'tip_foreig'	=> '0',
						'tags'			=> '1',
						'queries'		=> '1',
						'noedit'		=> '1',
						'inherited'		=> '1',
						'disabled'		=> '0',
						'dlquery'		=> '0'
				),
				'fecha_programada'=>array(
						'campo'			=> 'fecha_programada',
						'label'			=> 'Fecha',
						'tipo'			=> 'fch',
						'listable'		=> '1',
						'formato'		=> '7b',
						'time'			=> '2',
						'width'			=> '136px',
						'derecha'		=> '1',
						'default'		=> '',
						'rango'			=> 'now,+1 years',
						'queries'		=> '0',
						'main'			=> '1'
				),
				'asunto'			=>array(
						'campo'			=> 'asunto',
						'label'			=> 'Asunto',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'width'			=> '200px',
						'style'			=> 'width:550px;',
				),
				'texto'			=>array(
						'campo'			=> 'texto',
						'label'			=> 'Mensaje',
						'tipo'			=> 'html',
						'listable'		=> '1',
						'width'			=> '270px',
						'style'			=> 'height:200px;width:550px;',
						'listhtml'		=> '1'
				),
				'estado'		=>array(
						'campo'			=> 'estado',
						'label'			=> 'Estado',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'1'			=> 'pendiente|#136CB2',
								'2'			=> 'enviado|#00FF00'
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px',
						'listable'		=> '1'
				),
				'tipo'			=>array(
						'campo'			=> 'tipo',
						'label'			=> 'Tipo',
						'tipo'			=> 'com',
						'opciones'		=>array(
								'email'			=> 'email',
								'push'			=> 'push'
						),
						'default'		=> '0',
						'style'			=> 'width:150px;',
						'width'			=> '100px',
						'listable'		=> '1'
				),
				'user'			=>array(
						'campo'			=> 'user',
						'tipo'			=> 'user'
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
		'exportar_excel'	=> '1',
		'seccion'		=> 'notificaciones'
);



$objeto_tabla['DESISTIMIENTOS']=array(
		'grupo'			=> 'ventas',
		'alias_grupo'	=> '',
		'titulo'			=> 'Desistimientos',
		'nombre_singular'=> 'desistimiento',
		'nombre_plural'=> 'desistimientos',
		'tabla'			=> 'desistimientos',
		'archivo'		=> 'desistimientos',
		'prefijo'		=> 'des',
		'eliminar'		=> '1',
		'crear'			=> '1',
		'editar'			=> '1',
		'buscar'			=> '0',
		'bloqueado'		=> '0',
		'menu'			=> '1',
		'crear_label'	=> '100px',
		'crear_txt'		=> '600px',
		'menu_label'	=> 'Desistimientos',
		'me'				=> 'DESISTIMIENTOS',
		'orden'			=> '1',
		'seccion'		=> 'Desistimientos',		
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
						'style'			=> 'width:500px',
						'width'			=> '500px',
						'validacion'	=> '1'
				),
		)
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
		'web'			=> '1',
		'disabled'		=> '1'
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
				'nombre_completo'=>array(
						'campo'			=> 'nombre_completo',
						'label'			=> 'Nombre Completo',
						'tipo'			=> 'inp',
						'listable'		=> '1',
						'validacion'	=> '0',
						'sesion_complete'=> '1',
						'width'			=> '200px',
						'like'			=> '1'
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
				),

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
								'0'			=> 'Individual',
								'3'			=> 'Registro'
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






?>