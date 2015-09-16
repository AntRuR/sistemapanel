<?php
/**
 * 
 Reset del atenciones
 Reset de productos
 * 
 */

function ReiniciarAtenciones(){

	/* Atenciones */
	truncate("ventas_items");
	truncate("ventas_mensajes");
	truncate("clientes");

	/* Ventas */
	truncate("productos_ventas");
	truncate("productos_ventas_documentos");
	truncate("productos_ventas_docs");

	/*notificaciones*/
	truncate("notificaciones");

	/**/
	prin('ReiniciarAtenciones DONE');


}


function ReiniciarProductos(){

	/* Productos */
	truncate("productos_items");
	truncate("productos_subgrupos");
	truncate("productos_items_files");
	truncate("productos_tipos");
	truncate("productos_estacionamientos_tipos");
	truncate("productos_depositos_tipos");
	
	truncate("productos_items_items");
	truncate("productos_estacionamientos_items_items");
	truncate("productos_depositos_items_items");

	truncate("productos_fotos");
	truncate("productos_fotos_fotos");

	truncate("promociones");

	truncate("speeches");

	/*agenda*/
	truncate("todos");
	truncate("todos_mensajes");
	truncate("todos_contactos");

	/*otros*/
	truncate("bancos_sectoristas");
	truncate("bancos_cuentas");
	truncate("bancos_cuentas");

	truncate("contacto_canales");
	truncate("productos_ptoventa");
	truncate("mensajes_alertas");
	truncate("ventas_niveles");
	truncate("cliente_edades");
	truncate("publicidades");



	/**/
	prin('ReiniciarProductos DONE');


}



// ReiniciarAtenciones();

ReiniciarProductos();


