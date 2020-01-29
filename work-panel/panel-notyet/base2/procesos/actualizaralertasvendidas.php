<?php

update(
['cumplido'=>'1','estado'=>'4'],
'ventas_mensajes left join  ventas_items on ventas_items.id=ventas_mensajes.id_grupo',
"where ventas_items.id_status=10 and ventas_mensajes.estado!=4 and ventas_mensajes.alerta is not null",
1
);