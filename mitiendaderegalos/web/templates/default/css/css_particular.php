<?php 
header("Content-type: text/css");
error_reporting(0);
include("../../../../panel/lib/util.php"); 
include("../../../../panel/lib/mysql3.php"); 
include("../../../../panel/lib/webutil.php"); 

$PARTICULAR='../img/particular';


?>

.id_izquierda_arbol_categorias .barra_arriba, 
.id_izquierda_videos .barra_arriba, 
.id_izquierda_publicidad_fotos .barra_arriba,
.id_recomendar .barra_arriba
{ background:url(../img/particular/bloques/arriba_bg.jpg); }

#div_submenu .ul { display:block; text-align:center; float:none; }
#div_submenu .ul .li { display:inline; float:none; }
#div_submenu .ul .li a { display:inline; float:none; padding-left:0 !important; padding-right:0 !important; margin-right:12px; white-space:nowrap; }


#div_footer { }
#div_footer a { text-decoration:none; }
#div_footer a:hover { text-decoration:underline; }


#div_footer div { margin-bottom:3px; }
#div_footer .titulo { color:#FFFF00; font-family:Arial; font-weight:bold; }
#div_footer .texto { text-align:justify; }
#div_footer .copy { }
#div_footer .info { }



.listado_productos .carrito { background:url(../img/particular/items/carrito.jpg) no-repeat; width:25px; height:25px; position:absolute; top:0px; left:4px; }
.listado_productos .lupa { background:url(../img/particular/items/lupa.jpg) no-repeat; width:25px; height:25px; position:absolute; top:0px; right:4px; }
.listado_productos .barra_abajo .but_prev { position:relative; float:right; margin-right:75px; margin-top:1px; }
.listado_productos .barra_abajo .ver_todos { color:#FC6605; font-weight:bold; float:left; font-size:14px; margin:4px 0 0 9px; } 
.listado_productos .listado_item .inner .div_fila {margin:2px 0 0 0; background-color:#8BB42A; padding:4px 0; height:17px; text-align:center;}
.listado_productos .verdescripcion { display:block; height:20px; color:#000; background-color:#E4E4E4; text-align:center; }



.ficha_producto .carrito { background:url(../img/particular/items/ico_carrito.png) 0px 7px no-repeat;
 width:auto; height:auto; float:left; padding-left:23px; padding-bottom:2px; padding-top:1px; color:#B42C6C; font-size:20px; }

.ficha_producto .pdf { background:url(../img/particular/items/ico_pdf.png) no-repeat;
 width:auto; height:auto; float:left; padding-left:23px; padding-bottom:2px; padding-top:1px; color:#333; }
 
.ficha_producto .file_derecha .div_fila { margin-bottom:20px; }


object { display:block; }

.alfabeto { background-color:#FFF; text-align:center; padding:4px 0px; }

.alfabeto .letter { padding:0 5px; font-weight:bold; }
.alfabeto a.letter { color:#FF6600; text-decoration:underline; }


.div-buscador { z-index:1; }
.div-buscador form .box { width:276px; height:22px; border:1px solid #000; font-size:12px; padding:0px 3px; float:left;  }
.div-buscador form .button { text-transform:uppercase; background-color:#000; color:#FFF; padding:2px 3px; border:0; height:24px; float:left; font-weight:bold; }



.data { padding:0 25px 60px; }
.data .line { color:#333; width:100%; height:auto;  }
.data .line .var   { text-transform:uppercase; font-size:14px; width:15%;  padding:0; }
.data .line .valor { color:#587416; font-size:14px; width:100%;  }

.area_tabs { padding:15px 0 0 0; float:left; width:545px; }


/**/

.slideshow-images { margin:10px 0px 10px 30px; border:1px solid #ccc; }
.slideshow-thumbnails { margin:10px 10px 10px 20px; border-left:1px dotted #CCCCCC; }
.slideshow-thumbnails ul { padding-left:10px;  }

.facebook_like { float:left; height:auto; width:auto; clear:left; margin-left:0px; }


.slideshow-thumbnails a:hover { background-color: #FFF !important; }
.slideshow-thumbnails-active { background-color: #8BB42A !important; }

.file_derecha { float:left; height:300px; width:215px; padding-left:10px; border-left:1px dotted #CCC; padding-top:5px; margin-top:30px; }



.foto_texto { float:right; margin:10px; margin-top:0px; }


.id_derecha_boletin .link1 { display:block; background:url('../img/particular/iconos/boletin.jpg') no-repeat 0px 0px; padding-left:43px; width:59px; height:auto; font-size:12px; color:#FFF; }
.id_derecha_boletin .link2 { display:block; text-align:center; font-size:14px; font-weight:bold; color:#FFF; }
.id_derecha_boletin .link3 { display:block; text-align:center; font-size:14px; font-weight:bold; background-color:#8DB32A; color:#FFF; padding:2px; margin-top:6px; }

.id_derecha_inscripciones .link1 { display:block; height:auto; font-size:12px; color:yellow; }
.id_derecha_inscripciones .link2 { display:block; text-align:center; font-size:14px; font-weight:bold; color:#FFF; }
.id_derecha_inscripciones .link3 { display:block; text-align:center; font-size:14px; font-weight:bold; background-color:#8DB32A; color:#FFF; padding:2px; margin-top:6px; }



#contenedor_slider_tarjetas_movil div.slid li.selected { background-color:#FF9; }

.pedido-formularios .camps small { font-size:11px; }
.pedido-formularios .before small { font-weight:normal; display:block; margin-top:10px; }
.pedido-formularios .camps small b { color:#666; }
.pedido-formularios .camps small a { color:blue; text-decoration:underline; }
.pedido-formularios .before { text-transform:uppercase; }
.pedido-formularios .before small { text-transform:none !important; }


.data .line .valor h2 { color:#7F7F7F; font-size:18px; font-weight:bold; }
.data .line .valor ul { margin-left:10px; }
.data .line .valor li { list-style: inside ; }


#pedido_form_body .legend small { font-size:12px; margin-top:0px; padding-top:0px; clear:none; padding-left:0px; font-weight:normal; }


.condiciones { float:left;height:70px;overflow:auto;border:1px solid #000; padding:4px; }
.condiciones h2 { font-size:12px; font-weight:bold; }
#div_submenu ul li { margin-right:3px; }


/*HOME*/

#contenedor_slider_banner_home_handles { bottom:0px; right:0px; }

#listado_banner_home .but_handle:hover,
#listado_banner_home .selected { background-color:#FE9900 !important; color:#000 !important; }





/*PLAZA INMUEBLES*/

/**/

#listado_plaza_inmuebles_publicidad_home_fotos .banner { background:url(../img/particular/bloques/plazainmuebles_buscador_home.jpg) no-repeat 0px 0px; height:87px; width:165px; margin-bottom:10px; margin:6px 0 0 5px; float:left;   }


/**/

#formulario_plaza_inmuebles_buscador .banner { background:url(../img/particular/forms/plazainmuebles_buscador_banner.jpg) no-repeat 0px 0px; height:38px; margin-bottom:10px;  }
#formulario_plaza_inmuebles_buscador label { padding:8px 0px; display:block; color:#373737; font-weight:bold; font-size:13px;  }

#formulario_plaza_inmuebles_buscador select { width:100%; margin-bottom:8px; display:block; }

#formulario_plaza_inmuebles_buscador .linea { margin-bottom:4px; padding-left:2px; margin-top:3px; }
#formulario_plaza_inmuebles_buscador .linea input { margin-right:8px; }
#formulario_plaza_inmuebles_buscador .linea label { width:auto; display:inline; color:#3C2F8B; text-decoration:underline; font-weight:normal; }
#formulario_plaza_inmuebles_buscador input.boton_buscar { background:url(../img/particular/forms/boton_buscar.jpg) no-repeat 0px 0px; width:120px; height:32px; border:0; margin:10px 0 10px 19px;  }

/**/
#listado_plaza_inmuebles_categorias .listado_item { background:url(../img/particular/items/categorias_bg.jpg) no-repeat 18px 0px;  height: 45px; margin: 5px 0; padding: 5px 0 0 54px;
    width: 256px; }
#listado_plaza_inmuebles_categorias .listado_item .titulo { color:#6A9529; font-weight:bold; font-size:13px; } 
#listado_plaza_inmuebles_categorias .listado_item .subtitulo { color:#060606; font-weight:normal; font-size:12px; } 

/**/
#listado_plaza_inmuebles_proyectos_destacados .but_prev,
#listado_plaza_inmuebles_proyectos_destacados .but_next { top:8px; position:absolute; width:70px; height:22px; border:1px solid #000; background-color:#99CB34; color:#FFF; padding:2px 0 0; text-transform:capitalize; font-weight:bold; font-size:13px; background-repeat:no-repeat; }
#listado_plaza_inmuebles_proyectos_destacados .but_prev { left:20px; text-align:left; padding-left:30px; 
background-image:url(../img/particular/items/flecha_izquierda.jpg); background-position:17px 5px;  }
#listado_plaza_inmuebles_proyectos_destacados .but_next { right:20px; text-align:right; padding-right:30px; background-image:url(../img/particular/items/flecha_derecha.jpg); background-position: 77px 5px;  }

#listado_plaza_inmuebles_proyectos_destacados .inner_abajo { position:relative; margin:0 10px; background-color:#999999; height:44px; margin-bottom:7px; }

/**/

#listado_plaza_inmuebles_avisos_destacados .sub_inner { border: 1px solid #D1CFA6; height: 174px; margin: 12px 0 12px 39px; padding: 14px 0 0 44px; width: 524px;  }


#listado_plaza_inmuebles_avisos_destacados .but_prev,
#listado_plaza_inmuebles_avisos_destacados .but_next { top:123px; position:absolute; width:36px; height:26px; background-repeat:no-repeat; padding:0; }
#listado_plaza_inmuebles_avisos_destacados .but_prev { left:26px; background-image:url(../img/particular/items/flecha_izquierda2.jpg); }
#listado_plaza_inmuebles_avisos_destacados .but_next { right:21px; background-image:url(../img/particular/items/flecha_derecha2.jpg); }



.inmuebles_list-listados .listado_item .consultar { color:#F00; text-decoration:underline; display:block; }

.click { clear:left; color:#F30; font-size:16px; padding-left:80px;   }