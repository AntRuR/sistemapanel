<?php

if((strpos($_SERVER['SCRIPT_NAME'], "login.php")===false)){

    echo "<li class='menudown'>";
    echo "<a href='usuarios_acceso.php'>CORE</a>";

    if( ( $Open or $Local==1 )){
        echo'<ul class="li_cabecera">';
        foreach($objeto_tabla as $ooott){
            if($ooott['grupo']=='sistema'){
                echo '<li><a href="custom/'.$ooott['archivo'].'.php" class="links_menu" >'.$ooott['menu_label'].'</a></li>';
            }
        }
        echo '</ul>';
    }

   echo "</li>";

}
