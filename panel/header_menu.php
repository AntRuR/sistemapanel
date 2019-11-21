<div class='menus'>
<?php

if($_COOKIE["admin"]=="1"){

    echo  "<a href='maquina.php?accion=borrarcookie'>SALIR DE MASTER</a>";
    //$menus_d[] =  "<a onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','".( ($Open)?'0':'1' )."');return false;\">toolbar</a>";
}	

// TOOLBAR y SALIR DE MASTER
if($_COOKIE["admin"]=="1"){

    echo "<li class='menudown'>";
    
        echo "<a onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','".( ($Open)?'0':'1' )."');return false;\" >TOOLBAR</a>";

        $file_include='header_toolbar';

        $menuItems=require('include_cache.php');
        
        render_view($menuItems,'menu_float.php');

    echo "</li>";

}


// IR A WEB
// prin($vars['INTERNO']['CARPETA_PROYECTO']);
$url_publica0=explode("panel",str_replace('sistemapanel','frame',getcwd()));
if(file_exists($url_publica0[0])) {

    $url_publica=str_replace('sistemapanel','frame',$url_publica);
    echo "<a href='".str_replace("127.0.0.1","localhost",$url_publica)."' target='_top' >WEB</a>";

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
        
        echo "<a href='maquina.php?redirhome=1'
            class=' master ". (($script_name=="maquina.php")?"selected":"") ." '
            >MASTER</a>";

    } else {


        echo "<li class='menudown'>";

            echo "<a href='maquina.php' class='master'>master</a>";
        
            $file_include='header_switch_user';

            $menuItems=require('include_cache.php');
            
            render_view($menuItems,'menu_float.php');

        echo  "</li>";


        // TABLAS DEVEL
        echo "<li class='menudown'>";

            echo "<a href='usuarios_acceso.php'>CORE</a>";

            $file_include='header_devel_modules';

            $menuItems=require('include_cache.php');
 
            render_view($menuItems,'menu_float.php');
               
        echo  "</li>";

    }

    echo "<li class='menudown'>";

        echo "<a ". (($script_name=="maquina.php")?"class='selected'":"") .
            " href='http://{$_SERVER['SERVER_NAME']}/sistemapanel/panel' 
            >{$vars['GENERAL']['factory']}</a>";

        $file_include='header_switch_project';
        
        $menuItems=require('include_cache.php');

        render_view($menuItems,'menu_float.php');

    echo  "</li>";

} 



if( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ){


    echo "<a id='salir' href='salir.php'>SALIR</a>";
    //	$tabla_usuarios
    //	$tabla_usuarios_id_sub
    if($SERVER['ARCHIVO_REAL']!="login.php"){


        echo "<li class='menudown m_user' >";
        //$mmmM .= "<a href='custom/usuarios_acceso.php'>";
        if($_SESSION['usuario_datos_id']){
            echo ($_SESSION['usuario_datos_nombre'])?"<span>". $_SESSION['usuario_datos_nombre'] ."</span>":'';
        }else{
            //$mmmM.=  "<span>". dato($sesion_login,$tabla_sesion,"where $sesion_id='".$_SESSION['usuario_id']."'") ."</span>";
            echo  "<span>". $_SESSION['usuario_datos_nombre'] ."</span>";
        }
        //$mmmM.= "</a>";

        // CUANDO NO ERES MASTER
        if( ( $Open or $Local==1 ) ){
            
            $file_include='header_switch_user';

            $menuItems=require('include_cache.php');

            render_view($menuItems,'menu_float.php');

        }

        echo "</li>";
        
    }


    // JEFE
    echo  ($_SESSION['usuario_datos_nombre_grupo'])?"<li class='m_grupo'><span>". $_SESSION['usuario_datos_nombre_grupo'] ."</span></li>":'';


}	

/*
if( ( $VALIDAR_SESION!='' and $_SESSION['usuario_id']!='' ) or $Open ){
$menus_d[] = "<a ". (($_GET['tab']=="estadisticas")?"class='selected'":"") ."  href='tools.php?tab=estadisticas'></span>estadísticas</a>";
$menus_d[] = "<a ". (($_GET['tab']=="feedback")?"class='selected'":"") ."  title='Reporte de errores, Ayúdenos a mejorar' href='tools.php?tab=feedback'></span>feedback</a>";
}
*/

/*
    if($vars['GENERAL']['DESARROLLO']=='1' and $vars['INTERNO']['ID_PROYECTO']!="0" and !$LOGIN)
    {

        echo "<a href='".$SERVER['BASE'].$SERVER['ARCHIVO']."?verdesarrollo=". ( ($_SESSION['verdesarrollo']=='1')?'0':'1' )."'  style='";

        if($Open)
            echo ( ($_SESSION['verdesarrollo']=='1')?'background-color:#09A707;color:#FFF;':'background-color:#DE1010;color:#FFF;' );

        echo "' title='".( ($_SESSION['verdesarrollo']=='1')?'apagar':'encender' )."'></span>". ( ($_SESSION['verdesarrollo']=='1')?'desactivar':'activar' )." ver desarollo</a>";

    }
*/

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
echo "<a href='backup.php'>backup</a>";
}



unset($menus_d);

if($Local==1){

    if($_COOKIE['admin']=='1'){
        if($vars['INTERNO']['ID_PROYECTO']!="0"){
            echo "<a".
                    " style='". ( ($Open)?'color:#8F9A20;':''). "'".
                    " href='maquina.php?accion=updatecode'>ACTUALIZAR</a>";
        }
        echo "<a".
                " style='". ( ($Open)?'color:#BB0606;':''). "'".
                " href='maquina.php?accion=alllistado'>ARCHIVOS</a>";
    }
}    

?>
</div>