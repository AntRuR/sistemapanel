<?php



if($_COOKIE["admin"]=="1"){

    $menus_d["salir_admin"] =  "<a href='maquina.php?accion=borrarcookie'>SALIR DE MASTER</a>";
    //$menus_d[] =  "<a onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','".( ($Open)?'0':'1' )."');return false;\">toolbar</a>";
}	

// TOOLBAR y SALIR MASTER
if($_COOKIE["admin"]=="1")
    include('header_toolbar.php');


// IR A WEB
// prin($vars['INTERNO']['CARPETA_PROYECTO']);
$url_publica0=explode("panel",str_replace('sistemapanel','frame',getcwd()));
if(file_exists($url_publica0[0])) {

    $url_publica=str_replace('sistemapanel','frame',$url_publica);
    $menus_d['goweb'] = "<a href='".str_replace("127.0.0.1","localhost",$url_publica)."' target='_top' ></span>WEB</a>";

}
/*
 foreach($objeto_tabla as $oott){
if($oott['disabled']!=1){
prin($oott['me']."xx");
}
}
*/

if($Open or $Local==1){

    if( $VALIDAR_SESION!='' /*or $_SESSION['usuario_id']!=''*/ ){
        
        $menus_d["entrar"] = "<a style='text-transform:uppercase;' ". (($script_name=="maquina.php")?"class='selected'":"") ." href='maquina.php?redirhome=1' ></span>MASTER</a>";

    } else {


        $mmmM = "<li class='menudown'>";
        $mmmM.= "<a href='maquina.php'>MASTER</a>";
    
        // CUANDO ERES MASTER
        if( ( $Open or $Local==1 ) )
            if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){
                if( ( $Open or $Local==1 ) ){
                    $file_include='header_switch_user';
                    include('include_cache.php');
                }
            }

        $mmmM.= "</li>";
        $menus_d['master'] = $mmmM;


        // TABLAS DEVEL
        if(1){
            $file_include='header_devel_modules';
            include('include_cache.php');
        }

    }

    if(1){
        $file_include='header_switch_project';
        include('include_cache.php');
    }

} 




if( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ){


    $menus_d['salir'] = "<a href='salir.php'></span>salir</a>";
    //	$tabla_usuarios
    //	$tabla_usuarios_id_sub
    if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){


        $mmmM = "<li class='menudown m_user' >";
        //$mmmM .= "<a href='custom/usuarios_acceso.php'>";
        if($_SESSION['usuario_datos_id']){
            $mmmM.=  ($_SESSION['usuario_datos_nombre'])?"<strong class='z'>". $_SESSION['usuario_datos_nombre'] ."</strong>":'';
        }else{
            //$mmmM.=  "<strong>". dato($sesion_login,$tabla_sesion,"where $sesion_id='".$_SESSION['usuario_id']."'") ."</strong>";
            $mmmM.=  "<strong class='z'>". $_SESSION['usuario_datos_nombre'] ."</strong>";
        }
        //$mmmM.= "</a>";

        // CUANDO NO ERES MASTER
        if( ( $Open or $Local==1 ) ){
            $file_include='header_switch_user';
            include('include_cache.php');
        }

        $mmmM.= "</li>";
        $menus_d['usuario']=$mmmM;
        
    }


    // JEFE
    $menus_d['grupo']=  ($_SESSION['usuario_datos_nombre_grupo'])?"<li class='m_grupo'><strong class='z'>". $_SESSION['usuario_datos_nombre_grupo'] ."</strong></li>":'';


}	

/*
if( ( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ) or $Open ){
$menus_d[] = "<a ". (($_GET['tab']=="estadisticas")?"class='selected'":"") ."  href='tools.php?tab=estadisticas'></span>estadísticas</a>";
$menus_d[] = "<a ". (($_GET['tab']=="feedback")?"class='selected'":"") ."  title='Reporte de errores, Ayúdenos a mejorar' href='tools.php?tab=feedback'></span>feedback</a>";
}
*/
if($vars['GENERAL']['DESARROLLO']=='1' and $vars['INTERNO']['ID_PROYECTO']!="0" and !$LOGIN){

$menus_d['verdesarrollo_on'] ="<a href='".$SERVER['BASE'].$SERVER['ARCHIVO']."?verdesarrollo=". ( ($_SESSION['verdesarrollo']=='1')?'0':'1' )."'  style='";
if($Open){
$menus_d[].=  ( ($_SESSION['verdesarrollo']=='1')?'background-color:#09A707;color:#FFF;':'background-color:#DE1010;color:#FFF;');
}
$menus_d['verdesarrollo_off'].="' title='".( ($_SESSION['verdesarrollo']=='1')?'apagar':'encender' )."'></span>". ( ($_SESSION['verdesarrollo']=='1')?'desactivar':'activar' )." ver desarollo</a>";
}

if($Local==1){

if($LOGIN){

    // $bgsel="<select style='left:0px;top:0px;width:60px;height:auto;position:position:absolute;' onchange='setbgq(this.value);' onkeyup='setbgq(this.value);' >";
    // $CLI=($vars['INTERNO']['ID_PROYECTO']=="0")?'':'../../panel/';
    // $directorio_s = dir($CLI."img/bgs/");

    // while($fichero=$directorio_s->read()) {
    // 	if($fichero!='.' and $fichero!='..'  and !is_dir($CLI."img/bgs/".$fichero) ){
    // 		$ooppp[$fichero]= "<option ".( ("http://crazyosito.com/bgs/".$fichero==$BG_IMAGE)?"selected":"")." value='"."img/bgs/".$fichero."'>".$fichero."</option>";
    // 	}
    // }

    // $directorio_s->close();

    // ksort($ooppp);
    // $bgsel.= implode("",$ooppp);
    // $bgsel.= "</select>";
    // $bgsel.= "<script>";
    // $bgsel.= "function setbgq(bg){ \$(document.body).setStyles({'background-image':'url(";
    // $bgsel.= ($vars['INTERNO']['ID_PROYECTO']=="0")?"'+bg+'":"../../panel/'+bg+'";
    // $bgsel.= ")'});}";
    // $bgsel.= "</script>";

    // $menus_d[] = $bgsel;

}

}

if($Local==1){



/*
 $mmmM = "<li class='menudown'><a onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','".( ($Open)?'0':'1' )."');return false;\" style='cursor:pointer;'>Config</a>";
if( ( $Open or $Local==1 )){
if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){
include("maquina_opciones.php");
$mmmM.= $mmenuu;
}
}
$mmmM.= "</li>";
$menus_d['config']=$mmmM;
*/

}

list($titulo_strong,$dos)=explode("::",$vars['GENERAL']['html_title']);


//echo implode("<span class='pale' style='float:right;margin-bottom:-15px;'>|</span>",$menus_d);
if($vars['GENERAL']['BACKUPADMIN']=='1'){
$menus_d[]= "<a href='backup.php'>backup</a>";
}

if($Local==1){
    if($_COOKIE['admin']=='1'){
        if($vars['INTERNO']['ID_PROYECTO']!="0"){
            $menus_d['actualizar'] = "<a".
                    " style='". ( ($Open)?'color:#8F9A20;':''). "'".
                    " href='maquina.php?accion=updatecode'></span>ACTUALIZAR</a>";
        }
        $menus_d['archivos'] = "<a".
                " style='". ( ($Open)?'color:#BB0606;':''). "'".
                " href='maquina.php?accion=alllistado'></span>ARCHIVOS</a>";
    }
}


$hhtml ='';
$hhtml.="<div class='menus' style='margin:0;border:1px solid #000;' >";
$hhtml.=implode("",$menus_d);
$hhtml.="</div>";

echo $hhtml;

unset($menus_d);
unset($hhtml);
