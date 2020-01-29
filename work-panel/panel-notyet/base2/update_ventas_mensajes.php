</div><div><?php //á


if(0){



		update(
			'set ventas_mensajes.user=usuarios.id_sesion',
			"ventas_mensajes left join usuarios on usuarios.id=ventas_mensajes.id_usuario",
			"where user!=usuarios.id_sesion",
			0
		);
		//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");
		//prin($alertas);
		//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0
		//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0
		//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0


		update(array('estado'=>'1'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha is not null and alerta_fecha > NOW() AND (cumplido=0 or cumplido is null) and ((estado!=1 and estado is not null) or estado is null)",0);
		update(array('estado'=>'2'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha is not null and NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null) and ((estado!=2 and estado is not null) or estado is null)",0);
		update(array('estado'=>'3'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha is not null and alerta_fecha < NOW() AND (cumplido=0 or cumplido is null) and  ((estado!=3 and estado is not null) or estado is null)",0);
		update(array('estado'=>'4'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha is not null and cumplido=1 and ((estado!=4 and estado is not null) or estado is null)",0);
		// update(array('estado'=>'','cumplido'=>'null'),"ventas_mensajes","where (alerta_fecha='0000-00-00 00:00:00' or alerta_fecha is null) and estado!='' and estado is not null",0);

			
		update(array(
		'ventas_mensajes.estado'=>'5'),
		"ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
		"where 
		ventas_items.id_status_pedido!=''
		and ventas_items.id_status!=17
		and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' and ventas_mensajes.alerta_fecha < NOW() AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
		and ((ventas_mensajes.estado!=5 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null)
		",0);


		update(array(
		'ventas_mensajes.estado'=>'6'),
		"ventas_mensajes left join ventas_items on ventas_items.id=ventas_mensajes.id_grupo",
		"where 
		ventas_items.id_status='17'
		and ventas_mensajes.alerta_fecha!='0000-00-00 00:00:00' AND (ventas_mensajes.cumplido=0 or ventas_mensajes.cumplido is null) 
		and ((ventas_mensajes.estado!=6 and ventas_mensajes.estado is not null) or ventas_mensajes.estado is null) 
		",0);

// $id_cliente=data("id_cliente","ventas_items","where id_grupo");
// update(array('id_cliente'=>''),"ventas_mensajes","where id='0000-00-00 00:00:00'",0);

//update(array('estado'=>'2'),"ventas_mensajes","where alerta_fecha = NULL",1); 


		$res = mysql_query("select now()");
		echo "<div style='color:#fff;'>".mysql_result($res,0,0)."</div>";

		$ventas=select("id,user","ventas_items","where order by id desc limit 0,200");

		foreach($ventas as $venta){

		update(array('user'=>$venta['user']),"ventas_mensajes","where id_grupo = ".$venta['id'],0);

		}

}


/*

prin($_SESSION);



update(array('user'=>$_SESSION['usuario_id']),"ventas_alertas","where cumplido=1",0);





select id,posicion,visibilidad,calificacion,fecha_creacion,tipo,texto,alerta,alerta_fecha,id_status,id_grupo from ventas_mensajes where 1  and user='117'   and (  alerta in ('1','2')  AND  date(alerta_fecha) between '2012-11-21' and '2012-11-21'  )  

								order by id desc

	

*/	

