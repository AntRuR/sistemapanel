<!--<?php //á

//$alertas=select("alerta_fecha,estado","ventas_alertas","where 1");
//prin($alertas);

//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  DATE(alerta_fecha) < DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha>NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0
//SELECT alerta_fecha,DATE(alerta_fecha) FROM ventas_alertas WHERE  alerta_fecha<NOW() AND DATE(alerta_fecha) = DATE(NOW()) AND cumplido=0

update(array('estado'=>'1'),"ventas_alertas","where DATE(alerta_fecha) < DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'2'),"ventas_alertas","where NOW() < alerta_fecha AND DATE(alerta_fecha) = DATE(NOW()) AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'3'),"ventas_alertas","where alerta_fecha < NOW() AND (cumplido=0 or cumplido is null)",0);

update(array('estado'=>'4'),"ventas_alertas","where cumplido=1",0);

//update(array('estado'=>'2'),"ventas_alertas","where alerta_fecha = NULL",1);
 
?>-->