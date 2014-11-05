<?php //á

/**********************************************/
///////////////   LOADERS   ////////////////////
/**********************************************/


/*
VIEWPORT
 */
//responsive
// $HEAD['INCLUDE']['viewport']='width=device-width, initial-scale=1, user-scalable=no';
//non responsive
$HEAD['INCLUDE']['viewport']='width=device-width, initial-scale=1';


/*
VERSION
 */
// $HEAD['INCLUDE']['version']=$INCLUDE['version'];

/*
CODE ANALITYCS
 */
$HEAD['INCLUDE']['analytics_code']=$COMMON['datos_root']['analytics_code'];

/**
 * FAVICON */
$HEAD['INCLUDES']['ico'][]='img/favicon.ico';

/**
 * CSS
 */
//NORMALIZE
//BOOTSTRAP
//BOOTSTRAPTHEME
$HEAD['INCLUDES']['css'][]='../../css/bootstrap-3.2.0-dist/css/bootstrap.css';
// $HEAD['INCLUDES']['css'][]='../../bootstrap-3.2.0-dist/css/bootstrap-theme.css';

$HEAD['INCLUDES']['css'][]='css/css.css';


/**
 * WEB FONTS
 */
// $HEAD['INCLUDES']['external_css'][]="http://fonts.googleapis.com/css?family=Cantarell";
// $HEAD['INCLUDES']['external_css'][]="http://fonts.googleapis.com/css?family=Titillium+Web";

/**
 * MODERNIZER
 */
$HEAD['INCLUDES']['js_head'][]='../../js/vendor/modernizr-2.6.2.min.js';


	/**
	 * VENDOR JQUERY
	 */
	// $HEAD['INCLUDES']['js_head'][]='../../js/vendor/jquery-1.10.2.min.js';
	
	/**
	 * REQUIRE JS
	 */
	$HEAD['INCLUDES']['js'][]=['../../js/require.js','data-main="js/main.js"'];


