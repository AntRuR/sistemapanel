<?php

// if($_GET['id']!='')
$debug=($_GET['id']!='');

if($debug){

    chdir("../../");

    include("lib/global.php");

    include("lib/conexion.php");

    include("lib/mysql3.php");

    include("lib/util2.php");

    include("lib/webutil.php");

    include("config/tablas.php");



    include("lib/sesion.php");

    // include("lib/playmemory.php");

    include("lib/class.phpmailer.php");

    $II=$_GET['id'];
    // $II=165270;

}



$new_venta=fila(
[
'ventas_items.id as id',
'ventas_items.fecha_creacion as fecha_creacion',
'ventas_items.id_cliente as id_cliente',


'clientes.nombre as c_nombre',
'clientes.apellidos as c_apellidos',

'clientes.dni as dni',
'clientes.email as email' ,

'clientes.telefono as telefono',
'clientes.cliente_celular as cliente_celular',
'clientes.celular_claro as celular_claro',
'clientes.celular_movistar as celular_movistar',
'clientes.nextel as nextel',
'clientes.rpm as rpm',
'clientes.rpc as rpc',

'usuarios.nombre as a_nombre',
'usuarios.apellidos as a_apellidos',
'usuarios.id_jefe as id_jefe',
'usuarios.id_ptoventa as id_ptoventa',

'productos_items.nombre as p_nombre',
'productos_grupos.nombre as g_nombre',


],
"ventas_items",
"
left join clientes on ventas_items.id_cliente=clientes.id 
left join usuarios on ventas_items.id_usuario=usuarios.id 
left join productos_items on ventas_items.id_item=productos_items.id 
left join productos_grupos on ventas_items.id_grupo=productos_grupos.id 
where ventas_items.id=".$II
." and ventas_items.user in (select id_sesion from usuarios where id_jefe not in (7)) "
,
$debug);


    if(trim($new_venta['telefono'])         !='') $cliente_telefonos[]=$new_venta['telefono'];
    if(trim($new_venta['cliente_celular'])  !='') $cliente_telefonos[]=$new_venta['cliente_celular'];
    if(trim($new_venta['celular_claro'])    !='') $cliente_telefonos[]=$new_venta['celular_claro'];
    if(trim($new_venta['celular_movistar']) !='') $cliente_telefonos[]=$new_venta['celular_movistar'];
    if(trim($new_venta['rpm'])              !='') $cliente_telefonos[]=$new_venta['rpm'];
    if(trim($new_venta['rpc'])              !='') $cliente_telefonos[]=$new_venta['rpc'];
    if(trim($new_venta['nextel'])           !='') $cliente_telefonos[]=$new_venta['nextel'];


$telefonos=implode(" ",$cliente_telefonos);
$telefonos=str_replace(['999999999','000000000'],'',$telefonos);
$telefonos=trim($telefonos);


$new_venta['dni']=str_replace([
    '99999999',
    '00000000',
    '12345678',
    ],'',trim($new_venta['dni']));


$new_venta['email']=str_replace(
    [
        'notiene@notiene.com',
        'notiene@hotmail.com',
        'NOTIENE@HOTMAIL.COM',
        'notiene@gmail.com',
        'NOTIENE@GMAIL.COM',
    ],
    '',
    trim($new_venta['email'])
);


if($new_venta){

    if($debug)
    prin($new_venta);

    $dni_query='';
    if($new_venta['dni']!='')
        $dni_query="or clientes.dni in ('".$new_venta['dni']."')";


    $email_query='';
    if($new_venta['email']!='')
        $email_query="or clientes.email in ('".$new_venta['email']."')";


    // prin($cliente_telefonos);
    $telefonos_query='';
    if($telefonos!='')
    $telefonos_query="or clientes.telefono in ('".$telefonos."')
    or clientes.cliente_celular in ('".$telefonos."')
    or clientes.celular_claro in ('".$telefonos."')
    or clientes.nextel in ('".$telefonos."')
    or clientes.rpm in ('".$telefonos."')
    or clientes.rpc in ('".$telefonos."')
    ";

    $jefes=select("nombre,apellidos,id","usuarios2","where 1",0);
    foreach($jefes as $jef){
        $jefes2[$jef['id']]=$jef['nombre'].' '.$jef['apellidos'];
    }
    // prin($jefes2);


    $search_venta=select(
    [
    'ventas_items.id as id',
    'ventas_items.fecha_creacion as fecha_creacion',
    'ventas_items.id_cliente as id_cliente',
    // 'ventas_items.user as user',

    'usuarios.id_jefe as id_jefe',
    // 'usuarios.id_ptoventa as id_ptoventa',

    'clientes.dni as dni',
    'clientes.email as email',

    'clientes.telefono as telefono',
    'clientes.cliente_celular as cliente_celular',
    'clientes.celular_claro as celular_claro',
    'clientes.celular_movistar as celular_movistar',
    'clientes.nextel as nextel',
    'clientes.rpm as rpm',
    'clientes.rpc as rpc',


    ],
    "ventas_items",
    "
    left join clientes on ventas_items.id_cliente=clientes.id 
    left join usuarios on ventas_items.id_usuario=usuarios.id 

    where  1 \n"
    ." and ventas_items.user in (select id_sesion  from usuarios where id_jefe in (7)) \n"
    ." and ( 0 \n"
    ."$dni_query \n"
    ."$email_query \n"
    ."$telefonos_query \n"
    ." ) ",
    $debug);

    $search_venta2=[];
    foreach($search_venta as $sv){
        $ssvv=$sv;
        $ssvv['jefe']=$jefes2[$sv['id_jefe']];
        $search_venta2[]=$ssvv;
        unset($ssvv);
    }

    if($debug)
    prin($search_venta2);

    if(sizeof($search_venta2)>0){

        $jefe=fila('nombre,apellidos','usuarios2','where id='.$new_venta['id_jefe']);

        $sucursal=fila('nombre','productos_ptoventa','where id='.$new_venta['id_ptoventa']);

        $html='Alerta: el vendedor '.strtoupper($new_venta['a_nombre'].' '.$new_venta['a_apellidos']).', ha creado una atención del cliente '.strtoupper($new_venta['c_nombre'].' '.$new_venta['c_apellidos']).', con los datos:
Modelo: '.$new_venta['g_nombre'].' '.$new_venta['p_nombre'].' 
Fecha de creación de la atención '.fecha_formato($new_venta['fecha_creacion'],'8b').'

DNI/RUC: '.$new_venta['dni'].' 
email: '.$new_venta['email'].' 

Jefatura: '.$jefe['nombre'].' '.$jefe['apellidos'].'
Sucursal: '.$sucursal['nombre'].'

Teléfono del cliente: '.$new_venta['telefono'].' 
Celular del cliente: '.$new_venta['cliente_celular'].' 
Claro del cliente: '.$new_venta['celular_claro'].' 
Movistar del cliente: '.$new_venta['celular_movistar'].' 
Entel del cliente: '.$new_venta['nextel'].' 

RPM del cliente: '.$new_venta['rpm'].' 
RPC del cliente: '.$new_venta['rpc'].'

http://incapower.pe/panel/custom/ventas_items.php?i='.$new_venta['id'].'


Existen '.sizeof($search_venta2).' atenciones con las que hay coincidencias:

';

foreach($search_venta2 as $sv){

    $fonos=[];

    if(trim($sv['telefono'])         !='') $fonos[]=$sv['telefono'];
    if(trim($sv['cliente_celular'])  !='') $fonos[]=$sv['cliente_celular'];
    if(trim($sv['celular_claro'])    !='') $fonos[]=$sv['celular_claro'];
    if(trim($sv['celular_movistar']) !='') $fonos[]=$sv['celular_movistar'];
    if(trim($sv['rpm'])              !='') $fonos[]=$sv['rpm'];
    if(trim($sv['rpc'])              !='') $fonos[]=$sv['rpc'];
    if(trim($sv['nextel'])           !='') $fonos[]=$sv['nextel'];


$fonos=implode(" ",$fonos);

    // $html.="<a href='http://incapower.pe/panel/custom/ventas_items.php?i=".$sv['id']."'>Atención #".$sv['id']." ".fecha_formato($sv['fecha_creacion'],'8b')."</a>";
    $html.="Atención #".$sv['id']." ".fecha_formato($sv['fecha_creacion'],'8b')." 
DNI/RUC: ".$sv['dni']."
Email: ".$sv['email']."
Telefonos: ".$fonos."
http://incapower.pe/panel/custom/ventas_items.php?i=".$sv['id']."
--------------------------------------------

";


}

if(1){

    // if(1)
    // enviar_email(
    //     array(
    //     // 'emails'=>array('nacinchaluja@yahoo.com')
    //     'emails'=>array('guillekldc@gmail.com','nacinchaluja@yahoo.com','wtavara@gmail.com')
    //     ,'Subject'=>'Alerta: Posibles datos repetidos #'.$new_venta['id']
    //     ,'body'=>nl2br($html)
    //     ,'From'=>'alertas@incapower.pe'
    //     ,'FromName'=>'Íncapower'
    //     // ,'Logo'=>$linea['cuenta']['logo']
    //     )
    // );

    if(!$debug)
    mail(
        // 'guillekldc@gmail.com,nacinchaluja@yahoo.com,croman@prodiserv.com,dcencrm@gmail.com',
        'guillekldc@gmail.com,dcencrm@gmail.com',
        'Alerta: Posibles Datos Repetidos #'.$new_venta['id'],
        $html
        );

    // echo $html;
    // echo getcwd();
    
    if($debug){

        $f1 = fopen("posibleemail.txt", "w+");
        fwrite($f1, $html);
        fclose($f1);

    }

    if($debug)
        echo nl2br($html);

}

// echo nl2br($html);

//         mail();

    }

}