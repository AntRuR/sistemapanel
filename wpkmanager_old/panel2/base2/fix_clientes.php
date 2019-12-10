</div><div><?php //á

if($_SESSION['usuario_id']!=''){
update(
	array('user'=>$_SESSION['usuario_id']),
	"clientes",
	"where id_usuario=".$_SESSION['usuario_datos_id'],
	0);
}
