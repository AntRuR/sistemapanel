<?php //á
?>
<div id="div_menu">
    <ul>
		<?php
        foreach(array("derecha","izquierda") as $lado){
            foreach($COMMON['menu'][$lado] as $i=>$men){ 
                echo "<li ".( ($lado=="derecha")?"style='float:right'":'')." class='".(($i<sizeof($COMMON['menu'][$lado])-1)?"":"ultimo") ." ".$men['classSelected']."' >";
                echo "<a href='".$men['url']."'>".$men['label']."</a>";
                echo "</li>";
            } 
        }
        ?>
    </ul>
</div>