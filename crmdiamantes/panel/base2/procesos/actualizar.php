<?php 

$anio='2012';

prin(contar(
"ventas_items","
left join clientes on ventas_items.id_cliente=clientes.id 
where ventas_items.fecha_creacion > '$anio-01-01 00:00:00' "
// ." and ventas_items.id=208759 "
." and clientes.info2 is null
"));

// exit();

$atenciones=select(
"ventas_items.id,ventas_items.id_cliente,clientes.info2,ventas_items.id_usuario",
"ventas_items","
left join clientes on ventas_items.id_cliente=clientes.id 
where ventas_items.fecha_creacion > '$anio-01-01 00:00:00' "
// ." and ventas_items.id=208759 "
." and clientes.info2 is null "
." order by id desc limit 0,100000
",0);

foreach($atenciones as $linea){

   $mensaje=fila(
      'fecha_creacion',
      'ventas_mensajes',
      'where id_grupo='.$linea['ventas_items.id'].' order by id asc limit 0,1',
      0);

   $info2=" (".dato("nombre","usuarios","where id=".$linea["ventas_items.id_usuario"],0)
         ." ".dato("apellidos","usuarios","where id=".$linea["ventas_items.id_usuario"],0)
         ." ".fecha_formato($mensaje['fecha_creacion'],0)
         .")";

   // prin($info2);


   update(
         [
            "info2"		=>$info2
         ],
         "clientes",
         "where id=".$linea["ventas_items.id_cliente"],
         0
         );

}

// prin($atenciones);


// /*
// update(
// ['cumplido'=>'','estado'=>''],'ventas_mensajes','where alerta!=1 or alerta is null',1
// );
// */
// /*
// update(
// ['cumplido'=>'1','estado'=>'4'],
// 'ventas_mensajes left join  ventas_items on ventas_items.id=ventas_mensajes.id_grupo',
// "where ventas_items.fecha_creacion < '2015-08-01 00:00:00'",
// 0
// );
// */


// update(
// ['cumplido'=>'','estado'=>''],'ventas_mensajes',"where alerta_fecha > '2016-01-19 15:00:00'",0
// );


// if(0){
// $atenciones=select("id","ventas_items","where ventas_items.fecha_creacion > '2015-08-01 00:00:00' 
// 	");
// foreach($atenciones as $aten){

// 	$alertas=select("cumplido,estado,id","ventas_mensajes","where id_grupo=".$aten['id']." and alerta=1 order by fecha_creacion desc");
	
// 	if(sizeof($alertas)>1){
// 		// $mensajes=select("cumplido,estado,id","ventas_mensajes","where id_grupo=".$aten['id']." and alerta=1");
// 		// prin(sizeof($mensajes));
		
// 		if(
// 			$alertas[0]['estado']=='1'
// 			or $alertas[0]['estado']=='2'
// 			or $alertas[0]['estado']=='3'
// 			){
		
// 			// prin($alertas);
// 			update(
// 				['cumplido'=>'1','estado'=>'4'],
// 				'ventas_mensajes',
// 				"where id!='".$alertas[0]['id']."' and id_grupo=".$aten['id']." and alerta=1 ");
		
// 			/*
// 			update(
// 				['cumplido'=>'0'],
// 				'ventas_mensajes',
// 				"where id!='".$alertas[0]['id']."'");
// 			*/

// 		}

// 	} 
	
// 	/*
// 	if(sizeof($alertas)==1){
// 			update(
// 				['cumplido'=>'0'],
// 				'ventas_mensajes',
// 				"where id='".$alertas[0]['id']."'");
// 	}
// 	*/
	

// }

// }