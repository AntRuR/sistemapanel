<!--<?php //á

//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");
//prin($alertas);
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0


update(array('estado'=>'1'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and DATE(alerta_fecha) > DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'2'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'3'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and alerta_fecha < NOW() AND (cumplido=0 or cumplido is null)",0);
update(array('estado'=>'4'),"ventas_mensajes","where alerta_fecha!='0000-00-00 00:00:00' and cumplido=1",0);
update(array('estado'=>''),"ventas_mensajes","where alerta_fecha='0000-00-00 00:00:00'",0);


// $id_cliente=data("id_cliente","ventas_items","where id_grupo");
// update(array('id_cliente'=>''),"ventas_mensajes","where id='0000-00-00 00:00:00'",0);

//update(array('estado'=>'2'),"ventas_mensajes","where alerta_fecha = NULL",1); 

?>-->

<?php

$res = mysql_query("select now()");
echo "<div style='color:#fff;'>".mysql_result($res,0,0)."</div>";

$ventas=select("id,user","ventas_items","where order by id desc limit 0,200");

foreach($ventas as $venta){

update(array('user'=>$venta['user']),"ventas_mensajes","where id_grupo = ".$venta['id'],0);

}



/*

prin($_SESSION);



update(array('user'=>$_SESSION['usuario_id']),"ventas_alertas","where cumplido=1",0);





select id,posicion,visibilidad,calificacion,fecha_creacion,tipo,texto,alerta,alerta_fecha,id_status,id_grupo from ventas_mensajes where 1  and user='117'   and (  alerta in ('1','2')  AND  date(alerta_fecha) between '2012-11-21' and '2012-11-21'  )  

								order by id desc

	

*/	

