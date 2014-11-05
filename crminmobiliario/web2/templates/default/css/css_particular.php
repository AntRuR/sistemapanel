<?php 
header("Content-type: text/css");
error_reporting(0);
include("../../../../panel/lib/util.php"); 
include("../../../../panel/lib/mysql3.php"); 
include("../../../../panel/lib/webutil.php"); 

$PARTICULAR='../img/particular';


?>

<?php
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
/********************************************                     COMMON                       ******************************************************/
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
?>
/**/

/*body*/
.div_body { }

/*header*/
<?php css_render_esquinas('id_header','common/header'); ?>
<?php css_render_menu('id_header','common/header'); ?>

/*footer*/
.id_footer { color:#FFF; }
.id_footer a { text-decoration:none; }
.id_footer a:hover { text-decoration:underline; }
.id_footer .footer_by { position:absolute; bottom:3px; left:0px; width:100%; }

.id_footer div { margin-bottom:3px; }
.id_footer .titulo { color:#FFFF00; font-family:Arial; font-weight:bold; }
.id_footer .texto { text-align:justify; }
.id_footer .copy { }
.id_footer .info { }

/*.id_footer { background:#666666 url("../img/particular/footer/bg.jpg") repeat-x; }*/


/*header_menus*/
<?php css_render_menu('id_header_menus','common/header_menus'); ?>


/*header_menus2fotos*/
.id_header_menus2fotos .nombre {color:#FE9901; display:block; text-align:center;}
.id_header_menus2fotos .codigo {color:#FFFFFF; display:block; text-align:center;}
.id_header_menus2fotos .precio {color:#ECECEC; display:block; text-align:center;}


/*contacto*/
<?php css_render_esquinas('id_boletin','bloques/common'); ?>


/*boletin*/
<?php css_render_esquinas('id_contacto','bloques/common'); ?>

/*pages*/
<?php css_render_esquinas('id_pages','bloques/common'); ?>


<?php
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
/********************************************                     ITEMS                       *******************************************************/
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
?>

/*productos_file*/
<?php css_render_esquinas('id_productos_file','bloques/common'); ?>

.album { 
padding:0 0px 0 27px;
}
.album .thumb {  
overflow: hidden;
position:relative;
margin:5px 16px 5px 0px;
padding:4px; border:1px solid #999;
float:left;
}
.album .thumb:hover {
border-color:#333;
}
.album .thumb a {    
background-color: #EEE;
background-position: center 25%;
background-repeat: no-repeat;
display: block;
width:140px;
height:80px;
overflow:hidden;
outline:1px solid #EEE;
}
.album .thumb img { visibility:visible; }

.ficha { padding:10px 10px 0 0px;  } 
.ficha p { }
.ficha table { margin-bottom:10px; } 
.ficha table td { padding:0 4px; vertical-align:top; width:50%; color:#4F5767;  }
.ficha table td table td { border:1px solid #ddd; }

/*productos_file*/
<?php css_render_esquinas('id_productos_file','bloques/common'); ?>

/*textos_items_file*/
<?php css_render_esquinas('id_textos_items_file','bloques/common'); ?>

/*blog_noticias_file*/
<?php css_render_esquinas('id_blog_noticias_file','bloques/common'); ?>

/*blog_actividades_file*/
<?php css_render_esquinas('id_blog_actividades_file','bloques/common'); ?>

/*blog_fotos_file*/
<?php css_render_esquinas('id_blog_fotos_file','bloques/common'); ?>

/*blog_videos_file*/
<?php css_render_esquinas('id_blog_videos_file','bloques/common'); ?>

/*menu_textos*/
<?php css_render_esquinas('id_menu_textos','bloques/common'); ?>
.id_menu_textos .vermas .nombre a { font-size:14px; text-align:center; padding:10px 0; text-decoration:underline; color:#010066; }

/*menu_blog*/
<?php css_render_esquinas('id_menu_blog','bloques/common'); ?>
.id_menu_blog .vermas .nombre a { font-size:14px; text-align:center; padding:10px 0; text-decoration:underline; color:#010066; }

<?php
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
/********************************************                     BLOQUES                       *****************************************************/
/****************************************************************************************************************************************************/
/****************************************************************************************************************************************************/
?>

/*link_boletin*/
.id_link_boletin .link {  background: url("../img/particular/bloques/boletin.jpg") no-repeat; float:left; width:204px; height:95px; }
/*link_facebook*/
.id_link_facebook .link_facebook_big {  background: url("../img/particular/iconos/facebook_big.jpg") no-repeat; float:left; width:98px; height:27px; margin-right:3px; }
.id_link_facebook .link_twitter_big {  background: url("../img/particular/iconos/twitter_big.jpg") no-repeat; float:left; width:96px; height:27px; }

/*banner_main*/
<?php css_render_esquinas('id_banner_main','bloques/banner_main',array('handle'=>array(-397,10))); ?>
.id_banner_main .sub_grupo_1 { position:absolute;width:200px;padding:15px 10px;bottom:0px;left:0px;height:auto;opacity:0.6;background:#FFF; }

/*banners_productos*/
<?php css_render_esquinas('id_banners_productos','bloques/banners_productos',array('buts'=>array(-20,0))); ?>

.id_banners_productos .inner .nombre { background-image:url("../img/particular/items/productos_abajo_bg.jpg")}

/*publicidad_fotos*/
<?php css_render_esquinas('id_publicidad_fotos','bloques/publicidad_fotos'); ?>

/*arbol_categorias*/
<?php css_render_esquinas('id_arbol_categorias','bloques/common'); ?>

/*menu_contenidos*/
<?php css_render_esquinas('id_menu_contenidos','bloques/menu_contenidos',array('buts'=>array(0,20))); ?>

/*blog*/
<?php css_render_esquinas('id_blog','bloques/blog',array('buts'=>array(3,10))); ?>
<?php css_render_menu('id_blog','bloques/blog'); ?>

/*.id_blog #menu_blog_area_tab_1 .titulo { background:url("../img/particular/iconos/notas.jpg") no-repeat; padding-left:40px; }
.id_blog #menu_blog_area_tab_2 .titulo { background:url("../img/particular/iconos/notas.jpg") no-repeat; padding-left:40px; }*/




/*formulario_contacto*/
.id_formulario_contacto #p_contacto_comentario { position:absolute; right:0; top:0; }
.id_formulario_contacto #p_contacto_comentario textarea.caja { height:125px; }
.id_formulario_contacto #p_contacto_submit { float:right; padding-top:10px; }
.id_formulario_contacto #p_contacto_submit input { margin-top:10px; }
.id_formulario_contacto #p_contacto_pie { float:right;  }


/*formulario_comentarios*/
.id_formulario_consultas #p_consultas_consulta { position:absolute; right:0; top:0; }
.id_formulario_consultas #p_consultas_consulta textarea.caja { height:125px; }
.id_formulario_consultas #p_consultas_submit { float:right; }
.id_formulario_consultas #p_consultas_submit input { margin-top:10px; }
.id_formulario_consultas #p_consultas_pie { float:right;  }