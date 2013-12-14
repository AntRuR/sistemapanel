<?php
require_once('../Connections/cn.php');
mysql_select_db($database_cn, $cn);

$id_cat = 1;
$id_pro = $_POST['id_pro'];
$id_subcat = $_POST['subcate'];
$cod_comer = $_POST['cod_comer'];
$id_mar = $_POST['marca'];
$pre_ofe = $_POST['oferta'];
//echo $pre_ofe;
$pre_ven = $_POST['venta'];
$nom_pro_es = $_POST['nom_es'];
$des_cor_es = $_POST['descor_es'];
$des_lar_es = $_POST['deslar_es'];

//recogiendo los valores de la descripcion tecnica
$cat = $_POST['cat_veh'];
$modelo = $_POST['model'];
$pais_fab = $_POST['pais_fab'];
$model_mot = $_POST['model_mot'];
$num_pas = $_POST['num_pas'];
$num_pue = $_POST['num_pue'];

$marca = $_POST['mar'];
$fab_veh = $_POST['fab_veh'];
$mar_mot = $_POST['mar_mot'];
$combustible = $_POST['comb'];
$asientos = $_POST['num_asi'];
$color = $_POST['colors'];

$direc = $_POST['direc'];
$frenos = $_POST['fre_ser'];
$ubi_mot = $_POST['ubi_mot'];
$num_cli = $_POST['num_cil'];

$fre_del = $_POST['fre_del'];
$fre_post = $_POST['fre_post'];
$pos_mot = $_POST['pos_mot'];
$conf_mot = $_POST['conf_mot'];

$lar_tot = $_POST['lar_tot'];
$alt_tot = $_POST['alt_tot'];
$anc_tot = $_POST['anc_tot'];
$lar_car = $_POST['lar_car'];
$alt_car = $_POST['alt_car'];
$anc_car = $_POST['anc_car'];

$num_eje = $_POST['num_eje'];
$dist_eje = $_POST['dist_eje'];
$pes_bru = $_POST['pes_bru'];
$cap_car = $_POST['cap_car'];
$pes_net = $_POST['pes_net'];
$for_rod = $_POST['for_rod'];

$cilindrada = $_POST['cilindrada'];
$neumaticos = $_POST['neumaticos'];
$traccion = $_POST['traccion'];

$pot_max = $_POST['pot_max'];
$num_rue = $_POST['num_rue'];
$tip_caj = $_POST['tip_caj'];

//------------------
//-------------------------------------------------
		//SI SUBIERON UNA COTIZACION
//-------------------------------------------------


if($_FILES [ 'coti' ][ 'tmp_name' ]<>""){
	$coti = $_FILES [ 'coti' ][ 'name' ];
	$destino11 = "../cotizacion/".$coti;
	move_uploaded_file ( $_FILES [ 'coti' ][ 'tmp_name' ], $destino11);
	//GENERANDO EL QUERY

	$query1="update producto set id_cat='$id_cat', id_subcat='$id_subcat', id_mar='$id_mar', nom_pro_es='$nom_pro_es', des_cor_es='$des_cor_es',  des_lar_es='$des_lar_es', pre_ofer='$pre_ofe', pre_ven='$pre_ven', descarga='$coti', cod_comer='$cod_comer' where id_pro='$id_pro'";

}else{
$query1="update producto set id_cat='$id_cat', id_subcat='$id_subcat', id_mar='$id_mar', nom_pro_es='$nom_pro_es', des_cor_es='$des_cor_es',  des_lar_es='$des_lar_es', pre_ofer='$pre_ofe', pre_ven='$pre_ven', cod_comer='$cod_comer' where id_pro='$id_pro'";

}
mysql_query($query1, $cn) or die(mysql_error());
//echo "query1: ".$query1;


//Haciendo el insert a la tabla descripcion larga (des_lar_det)

$query5 = "update des_lar_det set id_pro='$id_pro',cat_veh='$cat',model='$modelo',pais_fab='$pais_fab',model_mot='$model_mot',num_pas='$num_pas',num_pue='$num_pue',mar='$marca',fab_veh='$fab_veh',mar_mot='$mar_mot',combustible='$combustible',num_asi='$asientos',color='$color',direc='$direc',fre_ser='$frenos',ubi_mot='$ubi_mot',num_cil='$num_cli',fre_del='$fre_del',fre_post='$fre_post',pos_mot='$pos_mot',conf_mot='$conf_mot',lar_tot='$lar_tot'";

$query5 .=", alt_tot='$alt_tot',anc_tot='$anc_tot',lar_car='$lar_car',alt_car='$alt_car',anc_car='$anc_car',num_eje='$num_eje'";



$query5 .=", dist_eje='$dist_eje',pes_bru='$pes_bru',cap_car='$cap_car',pes_net='$pes_net',for_rod='$for_rod',cilindrada='$cilindrada',neumaticos='$neumaticos',traccion='$traccion',pot_max='$pot_max',num_rue='$num_rue',tip_caj='$tip_caj' WHERE `des_lar_det`.`id_dld` ='$id_pro'"; 

//echo "query5: ".$query5;
mysql_query($query5, $cn) or die(mysql_error());

header("Location:modificacion-producto1.php?ok=ok");
?>