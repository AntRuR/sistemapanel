<?php

$dircwd=getcwd();
chdir("../");
//include("lib/includes.php");
include("lib/global.php");
include("lib/conexion.php");
include("lib/mysql3.php");
include("lib/util.php");
include("config/tablas.php");
include("lib/sesion.php");
include("lib/playmemory.php");

require_once( "lib/ini_manager.php" );

chdir($dircwd);

$item = select_fila(
		"dominio,ftp_user,ftp_pass",
		"proyectos",
		"where id='".$_GET['id']."' order by id asc limit 0,100"
		,0
);

$whmusername = "guixxe";
$whmhash = "52ddebe0adc04660174e1bc6cfd85bdc
		b84f32ed49c468fdf4250b4a60705031
		99fd81463416bcacfc2c923a73e73a36
		363044e9a3141e885f27aa106f794f6a
		8bc3389dcaa77e6d5f4bb890a00f1e18
		b6f0501468c97eeed23c591cb5e496dd
		cc9c2ea62b892bb0b02016c5ef635e88
		8608b2de004699a873bef6d18ef28afe
		35ec8e22b5179e60829dd2b45079a82e
		ba60091f7d208da9cec6596e38c9e08c
		b46f3fed17efcb338316bfb8d72213e9
		eabda5af48e0e9acb89e5ba523e7e7e0
		964fe5c67a00a97495b251b8c88ea0ee
		bbdceea457a5eda57fe7de755e4d9517
		7d5dde2c03a1dc44c2fb12068ced3dc0
		ce36ac2a9c9ef439a2c8e30aad525cc5
		39514e08995524799bc16de806e75374
		c56e23236c5457ee36d4b1d773b94584
		e9bd1af6d6ab8c654ef932be8b2f10d8
		510f6a10f2dc7a169169582585271dd7
		f8408f0d82054154f8bb077c26e49d2d
		131d571b914ae13aba7d03b91a1d102c
		1b6d5c9ff663745886216f684c090b59
		3eccc7caa19017d64ff4404e18d1c3d4
		1e2060b847835a6ca6fbf3d10c8b8f3f
		d6b8668b734b08d323312328bc1e3546
		7c83aa3551de8216037a79a7d0b583f9
		071897993fe96be42f99318280b0643d
		750d824911627483e69a34895d55a813";     # some hash value

//prin($item);
$iii="";
$item['dominio']=$iii.$item['dominio'];
$item['ftp_user']=$item['ftp_user'].$iii;
$item['ftp_pass']=$item['ftp_pass'].$iii;

$query = "https://crazyosito.com:2087/json-api/createacct?username=".$item['ftp_user']."&password=".$item['ftp_pass']."&plan=guixxe_de+300&domain=".$item['dominio']."&cgi=1&frontpage=1&cpmod=rvblue&useregns=0&reseller=0&contactemail=guillermolozan@gmail.com";

$curl = curl_init();																						# Create Curl Object
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);																# Allow certs that do not match the domain
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);																# Allow self-signed certs
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);																# Return contents of transfer on curl_exec
$header[0] = "Authorization: WHM $whmusername:" . preg_replace("'(\r|\n)'","",$whmhash);					# Remove newlines from the hash
curl_setopt($curl,CURLOPT_HTTPHEADER,$header);																# Set curl header
curl_setopt($curl, CURLOPT_URL, $query);																	# Set your URL
$result = curl_exec($curl);																					# Execute Query, assign to $result
if ($result == false) {
	error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
}
curl_close($curl);

$arr=json_decode($result,true);

if($arr['result']['0']['status']=='0'){
	echo $arr['result']['0']['statusmsg'];
}

if($arr['result']['0']['status']=='1'){
	echo str_replace("/cPanel_magic_revision_1266571681/cjt/images/icons/success.png","../img/exito.png",$arr['result']['0']['rawout']);
}

?>