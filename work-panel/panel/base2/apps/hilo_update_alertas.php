<?php //á

error_reporting(ALL);


	chdir("../../");

	include("lib/global.php");
	include("lib/conexion.php");
	include("lib/mysql3.php");
	include("lib/util.php");
	include("lib/webutil.php");
	include("config/tablas.php");

	include("lib/sesion.php");
	include("lib/playmemory.php");
	include("lib/class.phpmailer.php");

	include("config/library.php");




    

    update(array('estado'=>'1'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) and ((estado!=1 and estado is not null) or estado is null) ",0);
    update(array('estado'=>'2'),"ventas_alertas","where NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null) and ((estado!=2 and estado is not null) or estado is null) ",0);
    update(array('estado'=>'3'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) and ((estado!=3 and estado is not null) or estado is null) ",0);
    update(array('estado'=>'4'),"ventas_alertas","where cumplido=1 and ((estado!=4 and estado is not null) or estado is null)",0);
    // update(array('estado'=>'','cumplido'=>'null'),"ventas_mensajes","where (alerta_fecha='0000-00-00 00:00:00' or alerta_fecha is null) and estado!='' and estado is not null",0);


    update(
    ['ventas_mensajes.estado'=>'5'],
    "ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
    "where 
    ventas_items.id_status_pedido!=''
    and ventas_items.id_status!=17
    and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' and ventas_mensajes.alerta_fecha < NOW() AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
    and ((ventas_mensajes.estado!=5 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null) ",
    0);

    update(
    ['ventas_mensajes.estado'=>'6'],
    "ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
    "where 
    ventas_items.id_status='17'
    and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
    and ((ventas_mensajes.estado!=6 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null) 
    ",
    0);
    

