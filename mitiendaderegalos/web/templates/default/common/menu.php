<?php //á

$THIS="menu";

 if($MASTERBLOCK['menu']){ ?>
    <div id="div_menu" class="div_fila div_menu <?php 
	web_selector_control($SELECTED,$THIS,"menus",1);	
    ?>">
    <?php web_render_menu($COMMON['menu'],array(
                                                'lados_externos'=>1
                                                ,'lados_internos'=>1
                                                ,'lados_flotantes'=>1
                                                //,'id'=>'menu_main'
                                                ),'h2'); ?>    
    </div>
    
    <?php 
	$COMMON['sub_menu_show']=1;
	if(isset($COMMON['sub_menu'])){ ?>
    
    <div id="bloque_submenu" style="display:<?php echo ($COMMON['sub_menu_show']=='1')?'block':'none'?>" >
    
    <div id="div_submenu" class="div_fila div_menu <?php 
	web_selector_control($SELECTED,"sub_".$THIS,"menus",1);	
    ?>" >
    <?php web_render_menu($COMMON['sub_menu'],array(
                                                'lados_externos'=>0
                                                ,'lados_internos'=>0
                                                ,'lados_flotantes'=>0
												,'ul'=>'div'
                                                //,'id'=>'menu_main'
                                                ),'span'); ?>    
    </div>
        
    <div class="alfabeto div_fila">
    <?php
	foreach($COMMON['letras'] as $letra){
		echo ($letra['enabled'])?"<a class='letter' href='#' rel=\"nofollow\" 
		onclick=\"show_submenu('".$letra['set']."');return false;\" 
		onmouseover=\"show_submenu_over('".$letra['set']."');\" 
		onmouseout=\"show_submenu_out();\" 
		title=\"Mostras los rubros que empiecen con  ".$letra['label']."\" 
		>":'<span class="letter">';
		echo $letra['label'];
		echo ($letra['enabled'])?'</a>':'</span>';
	}
	?>
    <a class='letter' rel="nofollow" href="#" onclick="show_submenu('todos');return false;">ver todos</a>
    </div>
    
    </div>
    <div id="bloque_submenu_2" style=" text-align:center; background-color:#FFF; padding-top:5px; width:100%; float:left; display:<?php echo ($COMMON['sub_menu_show']=='1')?'none':'block'?>" >
    
    <a href="#" onclick="$1('bloque_submenu'); $0('bloque_submenu_2'); return false;" rel="nofolow" style="color:#FF6600;">Ver Todos los Rubros de Productos</a>
    
	</div>    
    <?php } ?>
        
<?php } ?>