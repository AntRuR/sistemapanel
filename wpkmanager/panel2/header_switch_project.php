<?php

if(	$Local==1
        //or $vars['INTERNO']['ID_PROYECTO']!="0"
){

    echo "<li class='menudown'><a ". (($script_name=="maquina.php")?"class='selected'":"") .
    //" style='". ( ($Open)?'background-color:black;font-weight:bold;color:white;':'') ."'"
    " href='http://".$_SERVER['SERVER_NAME']."/sistemapanel/panel' ></span>".strtoupper($vars['GENERAL']['factory'])."</a>";

    if($vars['INTERNO']['ID_PROYECTO']!="0"){
        
        mysqli_select_db ("panel",$link);
        mysqli_query("SET NAMES 'utf8'",$link);

        echo "<ul class='li_cabecera'>";
        $item2 = select(
                "carpeta,logo,fecha_creacion,dominio,nombre,calificacion",
                "proyectos",
                "where para_subir='1' and visibilidad='1' order by id asc limit 0,100"
                ,0
        );
        foreach($item2 as $ite2){
            if($ite2['calificacion']==0) continue;
            echo "<li style='background-color:";
            switch($ite2['calificacion']){
                case "1": echo "#FAFA9D"; break;
                case "2": echo "#E8C3C3"; break;
                case "3": echo "#B3EFB3"; break;
            }
            echo ";'>";
            echo "<a href='".str_replace($vars['INTERNO']['CARPETA_PROYECTO'],
                        $ite2["carpeta"],
                        $vars["LOCAL"]["url_publica"])."/panel'>"
                                            // .$vars["LOCAL"]["url_publica"]
                                            .strtoupper($ite2['nombre'])
                                            ."</a>";
            echo "<li>";
        }
        echo "</ul>";

        mysqli_select_db ($vars['LOCAL_MYSQL']['mysqli_DB'],$link);
        mysqli_query("SET NAMES 'utf8'",$link);
    }

    echo "</li>";

}

