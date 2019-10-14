<?php


    echo "<li class='menudown'><a onclick=\"javascript:edit_init('GENERAL','mostrar_toolbars','".( ($Open)?'0':'1' )."');return false;\" style='cursor:pointer;'>TOOLBAR</a>";
    if( ( $Open or $Local==1 )){
        if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){
            include("maquina_opciones.php");
            // echo $mmenuu;
        }
    }
    echo "</li>";

    