<?php
// issues
$linea['nombre_empresa']      = dato("nombre","empresas","where id              = ".$linea['id_empresa']);
$linea['nombre_planta']       = dato("nombre","plantas","where id               = ".$linea['id_planta']);
$linea['nombre_area']         = dato("nombre","areas","where id                 = ".$linea['id_area']);
$linea['nombre_subarea']      = dato("nombre","subareas","where id              = ".$linea['id_subarea']);
$linea['nombre_categoria']    = dato("nombre","equipos_categorias","where id    = ".$linea['id_categoria']);
$linea['nombre_subcategoria'] = dato("nombre","equipos_subcategorias","where id = ".$linea['id_subcategoria']);
$linea['nombre_equipo']       = dato("nombre","equipos","where id               = ".$linea['id_equipo']);


// fechas
$linea['creacion']=fecha_formato($linea['fecha_creacion'],'8b');


$linea['inicio']=fecha_formato($linea['fecha_inicio'],'8b');
$linea['fin']=fecha_formato($linea['fecha_fin'],'8b');


$linea['cuando_creo']=diferencia_fechas(null,$linea['fecha_creacion']);

$linea['cuando_inicia']=diferencia_fechas(null,$linea['fecha_inicio']);
$linea['cuando_termina']=diferencia_fechas(null,$linea['fecha_fin']);
$linea['duracion']=diferencia_fechas($linea['fecha_inicio'],$linea['fecha_fin'],true);

$linea['estados_opciones']=$objeto_tabla['MANTENIMIENTO_ITEMS']['campos']['status']['opciones'];

$linea['estado']=($linea['estado'])?$linea['estado']:'1';

$actividades=select(
    "id,fecha_creacion,fecha_inicio,fecha_fin,man_actividades_tipos",
    "man_actividades",
    "where id_mantenimiento=".$linea['id'],
    0
);



foreach($actividades as $ii=>$actividad){

    $actividades[$ii]['inicio']=fecha_formato($actividades[$ii]['fecha_inicio'],'8b');
    $actividades[$ii]['fin']=fecha_formato($actividades[$ii]['fecha_fin'],'8b');

    $actividades[$ii]['cuando_inicia']=diferencia_fechas(null,$actividades[$ii]['fecha_inicio']);
    $actividades[$ii]['cuando_termina']=diferencia_fechas(null,$actividades[$ii]['fecha_fin']);
    $actividades[$ii]['duracion']=diferencia_fechas($actividades[$ii]['fecha_inicio'],$actividades[$ii]['fecha_fin'],true);
        
    $actividades[$ii]['actividades_tipos']=fila("id,nombre","actividades","where id=".$actividad['man_actividades_tipos']);

    $herramientas_ids=select("id_herramientas","man_actividades_herramientas","where id_man_actividades=".$actividad['id'],0);
    foreach($herramientas_ids as $herramienta){
        $actividades[$ii]['herramientas'][]=fila("id,nombre","herramientas","where id=".$herramienta['id_herramientas']);
    }
    $tecnicos_ids=select("id_tecnicos","man_actividades_tecnicos","where id_man_actividades=".$actividad['id'],0);
    foreach($tecnicos_ids as $tecnico){
        $actividades[$ii]['tecnicos'][]=fila("id,nombre,apellidos","tecnicos","where id=".$tecnico['id_tecnicos']);
    }  
    
    $materiales_ids=select("id_materiales","man_actividades_materiales","where id_man_actividades=".$actividad['id'],0);
    foreach($materiales_ids as $material){
        $actividades[$ii]['materiales'][]=fila("id,nombre","materiales","where id=".$material['id_materiales'],0);
    }  
        
}

// prin($actividades);

$linea['actividades_num']=sizeof($actividades);


// view
include ('views/dist/app_mantenimiento_detalle.php');

// prin($linea['estados_opciones']);

// function update_status($inicio,$fin){

//     $fecha_hoy = new DateTime();
//     $fecha_inicio = new DateTime($inicio);
//     $fecha_fin = new DateTime($fin);
//     $resultado = $fecha_inicio->diff($fecha_fin);

// }

function diferencia_fechas($inicio,$fin,$diff=false){

    $fecha_inicio = new DateTime($inicio);
    $fecha_fin = new DateTime($fin);

    $fecha_inicio_str=substr($inicio,0,10);
    $fecha_fin_str=substr($fin,0,10);

    $resultado = $fecha_inicio->diff($fecha_fin);

    $fecha_inicio_manana=date("Y-m-d",strtotime('+1 day', strtotime($fecha_inicio_str)));
    $fecha_fin_manana=date("Y-m-d",strtotime('+1 day', strtotime($fecha_fin_str)));
    
    if($diff){
        return $resultado->format('%a días');
    }

    if($fecha_inicio_str==$fecha_fin_str){
        if($resultado->invert)
            return $resultado->format('hoy, hace %h horas');
        else
            return $resultado->format('hoy, en %h horas');
    }
    elseif($fecha_inicio_manana==$fecha_fin_str){
        return 'mañana';
    }  
    elseif($fecha_fin_manana==$fecha_inicio_str){
        return 'ayer';
    } else {
        if($resultado->invert)
            return $resultado->format('hace %a días');
        else
            return $resultado->format('en %a días');
    }

}

// prin($linea);
