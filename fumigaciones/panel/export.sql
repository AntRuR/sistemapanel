DROP TABLE IF EXISTS `banners_fotos`;
#
#
CREATE TABLE `banners_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(20) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos` VALUES ("1", "2015-08-20 11:26:55", "2018-02-27 11:20:01", NULL, "1", "banner_main", NULL, "1");
#
#
DROP TABLE IF EXISTS `banners_fotos_fotos`;
#
#
CREATE TABLE `banners_fotos_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `url` varchar(160) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("16", "2015-09-23 13:10:17", "2016-03-08 11:03:56", NULL, "1", "1", "banfot_1443031816_1000x400.jpg", "EMPRESA DE FUMIGACION EN LIMA", "39", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("17", "2016-03-08 10:56:44", "2016-03-08 11:04:04", NULL, "1", "1", "banfot_1457452603_625x391.jpg", "FUMIGACION DE CASAS", "38", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("19", "2016-03-08 10:59:07", "2016-03-08 11:04:11", NULL, "1", "1", "banfot_1457452747_360x360.jpg", "FUMIGACIÓN DE CUCARACHAS", "37", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("20", "2016-03-08 10:59:29", "2016-03-08 11:03:39", NULL, "1", "1", "banfot_1457452768_650x494.jpg", "FUMIGACION DE POLILLAS", "40", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("21", "2016-03-08 10:59:58", "2016-03-08 11:04:21", NULL, "1", "1", "banfot_1457452798_526x395.jpg", "FUMIGACION DE HORMIGAS", "36", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("22", "2016-03-08 11:00:24", "2016-03-08 11:04:29", NULL, "1", "1", "banfot_1457452823_500x376.jpg", "FUMIGACION DE GARRAPATAS", "35", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("23", "2016-03-08 11:01:30", "2016-03-08 11:04:37", NULL, "1", "1", "banfot_1457452889_960x720.jpg", "RETARDANTE DE FUEGO", "34", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("24", "2016-03-08 11:02:35", "2016-03-08 11:04:42", NULL, "1", "1", "banfot_1457452955_440x282.jpg", "LIMPIEZA DE TANQUES Y CISTERNAS", "33", NULL, "1");
#
#
DROP TABLE IF EXISTS `configuraciones`;
#
#
CREATE TABLE `configuraciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `variable` varchar(80) DEFAULT NULL,
  `valor` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `configuraciones` VALUES ("1", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "emails_publicos", "fumigaciones@fumigacionesensanborja.com");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "fumigaciones@fumigacionesensanborja.com");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
#
#
DROP TABLE IF EXISTS `configuraciones_root`;
#
#
CREATE TABLE `configuraciones_root` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `variable` varchar(80) DEFAULT NULL,
  `valor` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `configuraciones_root` VALUES ("1", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "titulo_home", "fumigaciones");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "email_fromname", "fumigaciones");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "email_from", "fumigaciones@fumigacionesensanborja.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "nombre_empresa", "fumigaciones");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "titulo_web", "fumigaciones");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2015-08-19 09:57:10", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
#
#
DROP TABLE IF EXISTS `contacto`;
#
#
CREATE TABLE `contacto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `apellidos` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `celular` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `distrito` varchar(80) DEFAULT NULL,
  `provincia` varchar(80) DEFAULT NULL,
  `como_se_entero` varchar(80) DEFAULT NULL,
  `comentario` longtext,
  `empresa` varchar(80) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `pais` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `contacto` VALUES ("1", "2015-09-22 10:15:43", "0000-00-00 00:00:00", NULL, "1", "2015-09-22 10:15:43", NULL, "mariella marigorda", "998247708", NULL, "exitmaxsac@hotmail.com", NULL, NULL, NULL, "hola!!!", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("2", "2015-10-27 15:18:41", "0000-00-00 00:00:00", NULL, "1", "2015-10-27 15:18:41", NULL, "industrias daza eirl", "2873217", NULL, "comprasdaza@gmail.com", NULL, NULL, NULL, "servicio de desratizacion para 1000 mt 2 \r\nenviar numero de cta cte en bbva \r\n\r\nIndustrias daza eirl\r\nruc 20548921440 ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("3", "2015-10-28 14:32:34", "0000-00-00 00:00:00", NULL, "1", "2015-10-28 14:32:34", NULL, "ISABEL HIDALGO MORALES", "947250894", NULL, "calidad@bozeltseeds.com", NULL, NULL, NULL, "cotizacion de una mochila de fumigacion en drench", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("4", "2015-11-04 16:42:22", "0000-00-00 00:00:00", NULL, "1", "2015-11-04 16:42:22", NULL, "Hilda torres", "4361476", NULL, "mtb1020@hotmail.com", NULL, NULL, NULL, "presupuesto de lavado de 2 alfombras\r\n1) 2.90x2.00\r\n2) 1.90x1.40", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("5", "2015-11-17 12:56:04", "0000-00-00 00:00:00", NULL, "1", "2015-11-17 12:56:04", NULL, "cindy diaz palma", "962381845", NULL, "cdiaz@alisur.net", NULL, NULL, NULL, "Estimados Sres. de ADURMA\r\n\r\nLa empresa ALISUR SAC ubicada en el distrito de Catacaos en la ciudad de Piura\r\n\r\ncon RUC: 20465976561. solicita una cotización para que se realice en sus instalaciones un programa de desratizacion. \r\n\r\nse adjunta un croquis de las áreas de la planta con sede en Piura\r\n\r\nespero su pronta respuesta\r\n\r\ngracias!!!\r\n\r\nsaludos cordiales\r\n\r\nCindy Diaz Palma\r\nALISUR SAC\r\nRPC: 962381845", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("6", "2015-11-17 12:57:50", "0000-00-00 00:00:00", NULL, "1", "2015-11-17 12:57:50", NULL, "cindy diaz palma", "962381845", NULL, "cdiaz@alisur.net", NULL, NULL, NULL, "Estimados Sres. de fumi extin express\r\n\r\nLa empresa ALISUR SAC ubicada en el distrito de Catacaos en la ciudad de Piura\r\n\r\ncon RUC: 20465976561. solicita una cotización para que se realice en sus instalaciones un programa de desratizacion. \r\n\r\nse adjunta un croquis de las áreas de la planta con sede en Piura\r\n\r\nespero su pronta respuesta\r\n\r\ngracias!!!\r\n\r\nsaludos cordiales\r\n\r\nCindy Diaz Palma\r\nALISUR SAC\r\nRPC: 962381845", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("7", "2015-11-18 13:48:36", "0000-00-00 00:00:00", NULL, "1", "2015-11-18 13:48:36", NULL, "Karen Gongora", "991156483", NULL, "juntadirectivatrento2015@gmail.com", NULL, NULL, NULL, "Solicitamos un presupuesto para la limpieza de una cisterna. Ademas quisiera saber si también hacen la limpieza del pozo séptico y fumigación de áreas comunes. Gracias karen ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("8", "2015-11-24 14:43:00", "0000-00-00 00:00:00", NULL, "1", "2015-11-24 14:43:00", NULL, "Fernando Sanchez Vidal", "981499892", NULL, "", NULL, NULL, NULL, "", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("9", "2015-11-24 14:49:58", "0000-00-00 00:00:00", NULL, "1", "2015-11-24 14:49:58", NULL, "Fernando Sanchez Vidal", "981499892", NULL, "flsanchez_sv@refricorp.com", NULL, NULL, NULL, "Necesito fumigación  contra todo tipo de insectos en la empresa donde trabajo quisiera saber cuanto costaría y demoraría todo el servicio(cuenta con un área de 350 m2  y tiene dos pisos)", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("10", "2015-11-24 16:09:50", "0000-00-00 00:00:00", NULL, "1", "2015-11-24 16:09:50", NULL, "Javier Florez", "963900510", NULL, "jflorez68@yahoo.es", NULL, NULL, NULL, "Solicito cotizacion para limpieza de cisterna de 10m3 y  pozo septico de 1m3 en San Borja", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("11", "2015-12-04 13:54:09", "0000-00-00 00:00:00", NULL, "1", "2015-12-04 13:54:09", NULL, "Solanch Aguirre", "952858780", NULL, "saguirre@grupovega.com", NULL, NULL, NULL, "Requiero una limpeza de tanque elevado y cisterna, además de una fumigación de departamento de 55 mt2.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("12", "2016-01-05 16:13:13", "0000-00-00 00:00:00", NULL, "1", "2016-01-05 16:13:13", NULL, "LUZ REBAZA", "987525439", NULL, "lrebaza2@gmail.com", NULL, NULL, NULL, "Buenas tardes   por la limpieza  y desinfección de un tanque \r\n\r\ncuanto aproximadamente me  costaría ,  es de 4 metros de altura   6 largo   4 ancho  , gracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("13", "2016-01-13 12:27:59", "0000-00-00 00:00:00", NULL, "1", "2016-01-13 12:27:59", NULL, "Maria Quiroz", "990549715", NULL, "maritayuri@yahoo.es", NULL, NULL, NULL, "Buen día, quisiera que me envíen un presupuesto de fumigación contra cucarachas para un departamento de 90 m2.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("14", "2016-02-17 16:30:44", "0000-00-00 00:00:00", NULL, "1", "2016-02-17 16:30:44", NULL, "Miguel Egusquiza", "954636651", NULL, "miguelegusquizac@gmail.com", NULL, NULL, NULL, "Buena tardes, quisiera saber cuales el precio de la fumigación de una vivienda, principalmente para eliminar garrapatas. La casa está totalmente vacía por motivos de que se ha techado recientemente. Es en el AAHH Sarita Colonia, Callao, agradecería su pronta respuesta. saludos cordiales.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("15", "2016-02-18 11:40:13", "0000-00-00 00:00:00", NULL, "1", "2016-02-18 11:40:13", NULL, "DANNY RODRIGUEZ", "4702000 - 802", NULL, "danny_rodriguez@ipsperu.com", NULL, NULL, NULL, "Buenos días, requiero una cotizacion de fumigación contra zancudos para evitar la epidemia del zika es un almacén de area 4000 m2 . Gracias", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("16", "2016-03-21 17:02:25", "0000-00-00 00:00:00", NULL, "1", "2016-03-21 17:02:25", NULL, "jhon salas", "", NULL, "jhonsalasjcsf@hotmail.com", NULL, NULL, NULL, "Cuanto me cuesta limpiar mi tanque elevado de 1100 lts??", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("17", "2016-03-24 07:47:42", "0000-00-00 00:00:00", NULL, "1", "2016-03-24 07:47:42", NULL, "wenceslao", "931258740", NULL, "wrivera@alpes.com", NULL, NULL, NULL, "presupuesto ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("18", "2016-03-28 13:50:15", "0000-00-00 00:00:00", NULL, "1", "2016-03-28 13:50:15", NULL, "Virginia Chirinos", "4755420", NULL, "scht@scht.com.pe", NULL, NULL, NULL, "Agradeceremos a ustedes se sirvan efectuarnos una Cotización para el Servicio de Fumigación de nuestras oficinas sitas en la Calle Manuel de Falla N° 296 San Borja", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("19", "2016-04-01 10:29:27", "0000-00-00 00:00:00", NULL, "1", "2016-04-01 10:29:27", NULL, "juan carlos lopez", "994064332", NULL, "jcpiscines@hotmail.com", NULL, NULL, NULL, "buenos dias señores:necesito una cotizacion para eliminar una plaga de cucarachas y polillas que se han alojado en el jardin-estacionamiento de mi edificio, necesito saber el costo para su respectiva eliminacion y que datos necesitan. agradeciendo de antemano mi solicitud\r\njuan c. lopez d.\r\nla molina-lima", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("20", "2016-04-04 16:09:39", "0000-00-00 00:00:00", NULL, "1", "2016-04-04 16:09:39", NULL, "Pamela Yarleque", "966890581", NULL, "pyarlequealama@gmail.com", NULL, NULL, NULL, "Buenas tardes :\r\nQuisiera saber si están buscando supervisora en fumigación a cargo de operarios,tengo experiencia de un año.\r\nEstaré atenta a su respuesta.\r\nGracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("21", "2016-04-12 18:44:06", "0000-00-00 00:00:00", NULL, "1", "2016-04-12 18:44:06", NULL, "Pilar", "3251232", NULL, "pilar@ablimatex.com", NULL, NULL, NULL, "Buenas noches:\r\nPor favor solicito cotización de fumigación para taller de confección y almacén de 300 mts2.\r\n\r\nQuedo atenta a su respuesta\r\nGracias\r\nPilar", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("22", "2016-04-15 09:14:58", "0000-00-00 00:00:00", NULL, "1", "2016-04-15 09:14:58", NULL, "Jose Martin León", "966028726", NULL, "gmo.martin.leon@hotmail.com", NULL, NULL, NULL, "Cotización de fumingacion para un centro comercial Open plaza , Real plaza (pucallpa)", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("23", "2016-04-15 16:17:58", "0000-00-00 00:00:00", NULL, "1", "2016-04-15 16:17:58", NULL, "Daniela", "073-603475 anexo 8203", NULL, "dcastaneda@divemotor.com.pe", NULL, NULL, NULL, "Cotización de fumigación para la empresa divemotor en Piura.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("24", "2016-05-03 21:38:11", "0000-00-00 00:00:00", NULL, "1", "2016-05-03 21:38:11", NULL, "Nataly Ruth Vergara Adrianzén", "997581071", NULL, "nvergaraadrianzen@gmail.com", NULL, NULL, NULL, "Quisiera saber su costo para fumigar mi casa de cucarachas y tambien de pulgas\r\n\r\n", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("25", "2016-05-04 09:34:13", "0000-00-00 00:00:00", NULL, "1", "2016-05-04 09:34:13", NULL, "Silvia Huaytalla Cordova", "962880430", NULL, "silviachc9ing@hotmail.com", NULL, NULL, NULL, "Buenos dias, agradeceré cotizarme los siguientes servicios:\r\n1. Fumigación de casa, contra cucarachitas.\r\n2. Desinfección de cisterna de 50 m3, para un edificio de 7 pisos\r\ngracias", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("26", "2016-05-12 21:56:49", "0000-00-00 00:00:00", NULL, "1", "2016-05-12 21:56:49", NULL, "Richard Obando López", "955694980", NULL, "richard.obando.lopez@gmail.com", NULL, NULL, NULL, "Estimados\r\n\r\nFavor indicar cual es el costo por el servicio de eliminación de.\r\nRatas\r\nCucarachas\r\nPolias\r\nArañas, etc\r\nQuedo atento a su pronta respuesta, gracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("27", "2016-05-13 18:55:43", "0000-00-00 00:00:00", NULL, "1", "2016-05-13 18:55:43", NULL, "Mauricio Gonzalo Quispe", "999668338", NULL, "chemo_1996@hotmail.com", NULL, NULL, NULL, "En mi hogar empezaron a aparecer demasiadas garrapatas pequeñas.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("28", "2016-05-16 21:01:04", "0000-00-00 00:00:00", NULL, "1", "2016-05-16 21:01:04", NULL, "jasmin valdivia zuasnabar", "934411578", NULL, "jasgisse_12_96@hotmail.com", NULL, NULL, NULL, "quisiera saber cuanto es el costo de fumigacion.. la ubicacion queda en el callao masomenos por minka\r\ngracas.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("29", "2016-05-20 11:05:28", "0000-00-00 00:00:00", NULL, "1", "2016-05-20 11:05:28", NULL, "Elsa Villani Rojaas", "365-8075 , 997956370", NULL, "evillani@lamolina.edu.pe", NULL, NULL, NULL, "DESEO UNA PROFORMA PARA FUMIGAR MOSQUITOS EN RESTAURANTE", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("30", "2016-05-20 11:05:32", "0000-00-00 00:00:00", NULL, "1", "2016-05-20 11:05:32", NULL, "", "", NULL, "", NULL, NULL, NULL, "", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("31", "2016-05-20 11:07:42", "0000-00-00 00:00:00", NULL, "1", "2016-05-20 11:07:42", NULL, "ELSA VILLANI ROJAS", "3658075 -997956370", NULL, "evillani@lamolina.edu.pe", NULL, NULL, NULL, "PROFORMA PARA FUMIGAR MOSQUITOS EN UN RESTAURANT\r\n", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("32", "2016-05-25 19:13:25", "0000-00-00 00:00:00", NULL, "1", "2016-05-25 19:13:25", NULL, "Griselle Vega", "994623682", NULL, "vegagriselle@hotmail.com", NULL, NULL, NULL, "quisiera consultar el costo de limpieza de cisterna en edificio. Gracias", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("33", "2016-06-13 14:32:19", "0000-00-00 00:00:00", NULL, "1", "2016-06-13 14:32:19", NULL, "DISTRIBUIDORA LA OFERTA EIRL", "944607616", NULL, "jawi1607@hotmail.com", NULL, NULL, NULL, "Estimados Señores:\r\nEstamos requiriendo el servicio de  fumigación, para unas 1500 parihuelas de madera mensuales.  El producto a usarse es de PHOSTOXIN  y PHOSFIN.\r\nLo otro si ustedes tienen un ambiente  donde ustedes lo fumigarian.\r\nEsperando su respuesta\r\nJavier W. Castro Pérez\r\nAdministrador - DLO\r\n\r\n", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("34", "2016-06-14 19:37:14", "0000-00-00 00:00:00", NULL, "1", "2016-06-14 19:37:14", NULL, "Lucy Matencio", "999974509", NULL, "lucymatencio2011@hotmail.com", NULL, NULL, NULL, "Deseo saber el costo del servicio de fumigacion para un taller de Mecánica de 300 m2 mas o menos.\r\n\r\nGracias", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("35", "2016-06-21 14:09:50", "0000-00-00 00:00:00", NULL, "1", "2016-06-21 14:09:50", NULL, "Martin Kouri", "981046104", NULL, "mkouri@gpsolutions.pe", NULL, NULL, NULL, "Buenas tardes,\r\n\r\nQuisiera un presupuesto para fumigar y limpieza de un area aproximada de 500 m2.\r\n\r\nSaludos,", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("36", "2016-07-14 15:56:36", "0000-00-00 00:00:00", NULL, "1", "2016-07-14 15:56:36", NULL, "LUIS ABT", "999869056 - 4478208", NULL, "luisabt@hotmail.com", NULL, NULL, NULL, "Deseamos cotizacion para mantenimiento de pozo y cisterna de un edificio de 4 pisos en Ca. Cahuide No. 126. Surco.\r\nEsperamos su visita para cotizacion.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("37", "2016-07-14 16:17:35", "0000-00-00 00:00:00", NULL, "1", "2016-07-14 16:17:35", NULL, "Jean Pierre Ramos", "", NULL, "k_pierre34@hotmail.com", NULL, NULL, NULL, "Me gustaría saber si están recibiendo personal de fumigación, tengo experiencia en el campo de control de plagas. Favor si pudieran responderme al correo gracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("38", "2016-07-15 18:34:20", "0000-00-00 00:00:00", NULL, "1", "2016-07-15 18:34:20", NULL, "rodolfo vargas calixto", "983628616", NULL, "stillcalixto@hotmail.com", NULL, NULL, NULL, "quiero una fumigacion toda una primera planta de una casa; todo un primer piso el problemas q tenemos son los acaros y de cucaracha", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("39", "2016-07-28 18:16:44", "0000-00-00 00:00:00", NULL, "1", "2016-07-28 18:16:44", NULL, "Julieta La Torre Arteta", "964964757", NULL, "julietalatorre@terra.com.pe", NULL, NULL, NULL, "Tenemos cisterna que se rajó y hace años no usamos En verano hay muchas cucarachas Este verano la abrimos y estaba ABSOLUTAMENTE LLENA DE CUCARACHAS solo atinamos a cerrarla. Recién reaccionamos. SOLICITO PROFORMA DE FUMIGACIÓN Y LIMPIEZA. Aprox 20 m3. ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("40", "2016-08-01 16:31:47", "0000-00-00 00:00:00", NULL, "1", "2016-08-01 16:31:47", NULL, "CARLOS FALCON", "969000029", NULL, "jcarlosfalcon@hotmail.com", NULL, NULL, NULL, "SOLICITO UNA COTIZACION PARA FUMIGAR UN LOCAL DE 450 M2 CON INDICIOS DE TBC. GRACIAS", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("41", "2016-10-06 12:22:08", "0000-00-00 00:00:00", NULL, "1", "2016-10-06 12:22:08", NULL, "FITJUS ", "940496250", NULL, "rbenites@personaltraining.com.pe", NULL, NULL, NULL, "Queremos fumigar 76.14 m2 \r\nArea de comensales 40.\r\nArea de cocina          22.7\r\nArea de almacen       13.44", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("42", "2017-02-11 06:56:48", "0000-00-00 00:00:00", NULL, "1", "2017-02-11 06:56:48", NULL, "SmartFinancialFunding", "885-435-1846", NULL, "", NULL, NULL, NULL, "Hi, letting you know that http://SmartFinancialFunding.com can find your business a loan for $2,000 - $350K Without personal credit-checks, traditional personal guarantees, or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://SmartFinancialFunding.com/i.php?id=e60 \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrs with No Credit Checks placed. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis free service from a qualified lender does not require any personal information since the loan is based on annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast, credit-free funding take a look at these programs now. \r\n \r\nClick Here: http://SmartFinancialFunding.com/i.php?id=e60 \r\n \r\nHave a great day, \r\nThe Smart Financial Funding Team \r\n \r\nunsubscribe/remove - http://smartfinancialfunding.com/r.php?url=fumigacionesensanborja.com&id=e60", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("43", "2017-02-16 02:08:19", "0000-00-00 00:00:00", NULL, "1", "2017-02-16 02:08:19", NULL, "BusinessCapitalAdvisor", "996-875-1351", NULL, "", NULL, NULL, NULL, "Quicker and Simpler than the SBA, http://BusinessCapitalAdvisor.com can get your business a loan for $2K-350,000 With low-credit and without collateral. \r\n \r\nUse our quick form to See exactly how much you can get, No-Cost: \r\n \r\nhttp://BusinessCapitalAdvisor.com/i.php?url=fumigacionesensanborja.com&id=e61 \r\n \r\nIf you\'ve been established for at least 12 months you are already pre-qualified. Our Fast service means funding can be finished within 48hrs. Terms are specific for each business so I suggest applying to find out exactly how much you can get. \r\n \r\nThis no-cost service does not require any personal information since the amount is based on annual revenue of your business. Funds are also Non-Restrictive, allowing you to use the whole amount in any way including bills, taxes, hiring, marketing, expansion, or Absolutely Any Other expense. \r\n \r\nThere are limited SBA and private funds available so please apply now if interested, \r\n \r\nClick Here: http://BusinessCapitalAdvisor.com/i.php?id=e61 \r\n \r\nHave a great day, \r\nThe Business Capital Advisor Team \r\n \r\nremove here - http://businesscapitaladvisor.com/r.php?url=fumigacionesensanborja.com&id=e61", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("44", "2017-03-02 21:57:31", "0000-00-00 00:00:00", NULL, "1", "2017-03-02 21:57:31", NULL, "GetBusinessFunded", "705-176-2259", NULL, "", NULL, NULL, NULL, "Quicker and Simpler than the SBA, http://GetBusinessFunded.com can get your business a loan for $2K-350,000 With low-credit and no collateral. \r\n \r\nUse our short form to Find Out exactly how much you can get, No-Cost: \r\n \r\nhttp://GetBusinessFunded.com/i.php?url=fumigacionesensanborja.com&id=e63p \r\n \r\nIf you\'ve been established for at least one year you are already pre-qualified. Our Fast service means funding can be completed within 48hrs. Terms are personalized for each business so I suggest applying to find out exactly how much you can get. \r\n \r\nThis no-cost service does not require any personal information since the amount is based on annual revenue of your business. Funds have no Restrictions, allowing you to use the full amount in any way including bills, taxes, hiring, marketing, expansion, or Absolutely Any Other expense. \r\n \r\nThere are limited SBA and private funds available so please apply now if interested, \r\n \r\nClick Here: http://GetBusinessFunded.com/i.php?id=e63p \r\n \r\nHave a great day, \r\nThe Get Business Funded Team \r\n \r\nremove here - http://getbusinessfunded.com/r.php?url=fumigacionesensanborja.com&id=e63p", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("45", "2017-03-22 11:00:10", "0000-00-00 00:00:00", NULL, "1", "2017-03-22 11:00:10", NULL, "SmartFinancialFundingTeam", "809-217-2799", NULL, "", NULL, NULL, NULL, "Hi, letting you know that http://SmartFinancialFunding.com can find your business a SBA or private loan for $2,000 - $350K Without high credit or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://SmartFinancialFunding.com/i.php?url=fumigacionesensanborja.com&id=e65 \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrsd. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis free service from a qualified lender does not require any personal information since the loan is based on annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast and easy business funding take a look at these programs now as there is limited availability. \r\n \r\nClick Here: http://SmartFinancialFunding.com/i.php?url=fumigacionesensanborja.com&id=e65 \r\n \r\nHave a great day, \r\nThe Smart Financial Funding Team \r\n \r\nunsubscribe/remove - http://smartfinancialfunding.com/r.php?url=fumigacionesensanborja.com&id=e65", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("46", "2017-04-04 06:13:51", "0000-00-00 00:00:00", NULL, "1", "2017-04-04 06:13:51", NULL, "BusinessCapitalNow", "440-140-4197", NULL, "", NULL, NULL, NULL, "Hi, letting you know that http://BusinessCapitalAdvisor.com can find your business a SBA or alternative funding program for $2,000 - $350K Without high credit or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://BusinessCapitalAdvisor.com/i.php?url=fumigacionesensanborja.com&id=e66p \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrs. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast and easy business funding take a look at these programs now as there is limited availability. \r\n \r\nClick Here: http://BusinessCapitalAdvisor.com/i.php?url=fumigacionesensanborja.com&id=e66p \r\n \r\nHave a great day, \r\nThe Business Capital Advisor Team \r\n \r\nunsubscribe/remove - http://businesscapitaladvisor.com/r.php?url=fumigacionesensanborja.com&id=e66p", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("47", "2017-06-23 13:30:07", "0000-00-00 00:00:00", NULL, "1", "2017-06-23 13:30:07", NULL, "ProFunding247", "760-222-3099", NULL, "", NULL, NULL, NULL, "Hi, letting you know that http://ProFunding247.com can find your business a SBA or private loan for $2,000 - $350K Without high credit or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://ProFunding247.com/i.php?url=fumigacionesensanborja.com&id=e74 \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrs. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast and easy business funding take a look at these programs now as there is limited availability. \r\n \r\nClick Here: http://ProFunding247.com/i.php?id=e74 \r\n \r\nHave a great day, \r\nThe Pro Funding 247 Team \r\n \r\nunsubscribe/remove - http://profunding247.com/r.php?url=fumigacionesensanborja.com&id=e74", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("48", "2017-10-14 21:35:22", "0000-00-00 00:00:00", NULL, "1", "2017-10-14 21:35:22", NULL, "FastFundingAdvisors", "881-391-5630", NULL, "", NULL, NULL, NULL, "Faster and Simpler than the SBA, http://FastFundingAdvisors.com can get your business a loan for $2K-350,000 With low-credit and without collateral. \r\n \r\nUse our 1 minute form to Find Out exactly how much you can get, No-Cost: \r\n \r\nhttp://FastFundingAdvisors.com/i.php?url=fumigacionesensanborja.com&id=e8464 \r\n \r\nIf you\'ve been established for at least 1 year you are already pre-qualified. Our Fast service means funding can be finished within 48hrs. Terms are specific for each business so I suggest applying to find out exactly how much you can get. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. Funds have no Restrictions, allowing you to use the full amount in any way including bills, taxes, hiring, marketing, expansion, or Absolutely Any Other expense. \r\n \r\nThere are limited SBA and private funds available so please apply now if interested, \r\n \r\nClick Here: http://FastFundingAdvisors.com/i.php?id=e8464 \r\n \r\nHave a great day, \r\nThe Fast Funding Advisors Team \r\n \r\nunsubscribe here - http://fastfundingadvisors.com/r.php?url=fumigacionesensanborja.com&id=e8464", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("49", "2017-10-30 14:59:07", "0000-00-00 00:00:00", NULL, "1", "2017-10-30 14:59:07", NULL, "BusinessFunds365", "876-626-5087", NULL, "487916", NULL, NULL, NULL, "Faster and Simpler than the SBA, http://BusinessFunds365.com can get your business a loan for $2K-350,000 With low-credit and without collateral. \r\n \r\nUse our quick form to Find Out exactly how much you can get, No-Cost: \r\n \r\nhttp://BusinessFunds365.com/i.php?url=fumigacionesensanborja.com&id=e86 \r\n \r\nIf you\'ve been in business for at least one year you are already pre-qualified. Our Quick service means funding can be completed within 48 hours. Terms are personalized for each business so I suggest applying to find out exactly how much you can get. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. Funds have no Restrictions, allowing you to use the full amount in any way including bills, taxes, hiring, marketing, expansion, or Absolutely Any Other expense. \r\n \r\nThere are limited SBA and private funds available so please apply now if interested, \r\n \r\nClick Here: http://BusinessFunds365.com/i.php?id=e86 \r\n \r\nHave a great day, \r\n The Business Funds 365 Team \r\n \r\nremove here - http://businessfunds365.com/r.php?url=fumigacionesensanborja.com&id=e86", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("50", "2017-11-08 11:35:35", "0000-00-00 00:00:00", NULL, "1", "2017-11-08 11:35:35", NULL, "FindBusinessFunding247", "581-573-1259", NULL, "293791", NULL, NULL, NULL, "Hi, letting you know that http://FindBusinessFunding24-7.com can find your business a SBA or private loan for $2,000 - $350K Without high credit or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://FindBusinessFunding24-7.com/i.php?url=fumigacionesensanborja.com&id=e86 \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrs. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast and easy business funding take a look at these programs now as there is limited availability. \r\n \r\nClick Here:  http://FindBusinessFunding24-7.com/i.php?id=e86 \r\n \r\nHave a great day, \r\nThe Find Business Funding 24-7 Team \r\n \r\nunsubscribe/remove - http://findbusinessfunding24-7.com/r.php?url=fumigacionesensanborja.com&id=e86", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("51", "2017-12-11 12:18:22", "0000-00-00 00:00:00", NULL, "1", "2017-12-11 12:18:22", NULL, "Luis Montenegro", "", NULL, "lmontenegro@recsaperu.com.pe", NULL, NULL, NULL, "Buenas tardes, le escribo de la empresa RECSA, el problema que tenemos es que las personas del call se están enfermando, al parecer es un tema viral, por lo que deseamos un servicio de desinfección, el área del call es de 274.42 m2 de igual forma hay otra área de 113 m2, agradecería que me envíen la cotización por separado, quedo a la espera de su respuesta, gracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("52", "2017-12-22 09:44:57", "0000-00-00 00:00:00", NULL, "1", "2017-12-22 09:44:57", NULL, "Sofia Montero", "", NULL, "sofia.montero2@yahoo.com", NULL, NULL, NULL, "Buenos días, quiero saber la cotización para mi empresa  ubicado en gamarra. Es de 100m², espero su pronta respuesta.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("53", "2018-01-03 16:39:59", "0000-00-00 00:00:00", NULL, "1", "2018-01-03 16:39:59", NULL, "Percy", "972889182", NULL, "pquevedo@munlima.gob.pe", NULL, NULL, NULL, "Deseo cotización para fumigación en local del Serenazgo de Lima (oficinas): Via de Evitamiento Km 6.5 Piedra Liza, Rímac. Frente al Mercado de Flores. Paradero SETAME.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("54", "2018-01-04 14:16:50", "0000-00-00 00:00:00", NULL, "1", "2018-01-04 14:16:50", NULL, "ProFunder247", "928-475-9618", NULL, "964836", NULL, NULL, NULL, "Hi, letting you know that http://ProFunder-247.com can find your business a SBA or private loan for $2,000 - $350K Without high credit or collateral. \r\n \r\nFind Out how much you qualify for here: \r\n \r\nhttp://ProFunder-247.com/i.php?url=fumigacionesensanborja.com&id=e90 \r\n \r\nMinimum requirements include your company being established for at least a year and with current gross revenue of at least 120K. Eligibility and funding can be completed in as fast as 48hrs. Terms are personalized for each business so I suggest applying to find out exactly how much you can get on various terms. \r\n \r\nThis is a free service from a qualified lender and the approval will be based on the annual revenue of your business. These funds are Non-Restrictive, allowing you to spend the full amount in any way you require including business debt consolidation, hiring, marketing, or Absolutely Any Other expense. \r\n \r\nIf you need fast and easy business funding take a look at these programs now as there is limited availability. \r\n \r\nClick Here:  http://ProFunder-247.com/i.php?id=e90 \r\n \r\nHave a great day, \r\nThe Pro Funder 24-7 Team \r\n \r\nunsubscribe/remove - http://profunder-247.com/i.php?url=fumigacionesensanborja.com&id=e90", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("55", "2018-01-11 11:05:14", "0000-00-00 00:00:00", NULL, "1", "2018-01-11 11:05:14", NULL, "lizbeth ledesma", "940332890", NULL, "LLEDESMA@PRODELSUR.COM", NULL, NULL, NULL, "Buenas dias, reciban mi cordial saludo.\r\n \r\nLa empresa Procesadora del Sur S.A. requiere para sus operaciones, la fumigacion de sus oficinas ubicado Av.PEDRO RUIZ GALLO 124C/125A- ATE.\r\n\r\nMotivo por el cual me dirijo a Ud. con el fin de obtener información y una cotización por dicho servicio.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("56", "2018-01-30 07:07:23", "0000-00-00 00:00:00", NULL, "1", "2018-01-30 07:07:23", NULL, "Marie Rose", "", NULL, "pressreleasetraffic@gmail.com", NULL, NULL, NULL, "", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("57", "2018-02-09 18:07:43", "0000-00-00 00:00:00", NULL, "1", "2018-02-09 18:07:43", NULL, "Martha", "957-301-752", NULL, "mipc3@yahoo.com", NULL, NULL, NULL, "Tengo problema de termitas aladas y blancas y hormigas muy pequeñitas en mi departamento. Tengo dos closets con muchos huequitos y bolitas que no se si se pueden rescatar. Los techos tienen vigas de madera y tengo un cuarto y un baño hechos completamente de madera. Mi departamento esta en Barranco. Me gustaria que vengan y me hagan una proforma del servicio. Gracias.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("58", "2018-02-09 18:08:04", "0000-00-00 00:00:00", NULL, "1", "2018-02-09 18:08:04", NULL, "Martha", "957-301-752", NULL, "mipc3@yahoo.com", NULL, NULL, NULL, "Tengo problema de termitas aladas y blancas y hormigas muy pequeñitas en mi departamento. Tengo dos closets con muchos huequitos y bolitas que no se si se pueden rescatar. Los techos tienen vigas de madera y tengo un cuarto y un baño hechos completamente de madera. Mi departamento esta en Barranco. Me gustaria que vengan y me hagan una proforma del servicio. Gracias.", NULL, NULL, NULL);
#
#
DROP TABLE IF EXISTS `galleries_photos`;
#
#
CREATE TABLE `galleries_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(80) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `html` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos` VALUES ("1", "2015-08-19 23:26:47", "2015-08-19 23:27:02", NULL, "1", "galeria-1", NULL, "Galería 1", "1", NULL);
#
#
INSERT INTO `galleries_photos` VALUES ("2", "2015-08-19 23:26:47", "2015-08-19 23:27:07", NULL, "1", "galeria-2", NULL, "Galería 2", "1", NULL);
#
#
INSERT INTO `galleries_photos` VALUES ("4", "2016-03-08 10:45:45", "0000-00-00 00:00:00", NULL, "1", NULL, "2016-03-08 10:45:00", "FUMIGACION DE CUCARACHAS", "1", NULL);
#
#
INSERT INTO `galleries_photos` VALUES ("5", "2016-03-08 10:49:47", "0000-00-00 00:00:00", NULL, "1", NULL, "2016-03-08 10:48:06", "FUMIGACION DE CASAS", "1", "<p>FUMIGACION DE CASAS, EMPRESAS DE FUMIGACION</p>\n");
#
#
INSERT INTO `galleries_photos` VALUES ("6", "2018-02-27 11:40:28", "0000-00-00 00:00:00", NULL, "1", NULL, "2018-02-27 11:39:51", "RNP", "1", NULL);
#
#
INSERT INTO `galleries_photos` VALUES ("7", "2018-02-28 06:39:13", "0000-00-00 00:00:00", NULL, "1", NULL, "2018-02-28 06:37:36", "Certificados", "1", NULL);
#
#
DROP TABLE IF EXISTS `galleries_photos_photos`;
#
#
CREATE TABLE `galleries_photos_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("3", "2015-09-21 12:11:11", "2015-09-21 12:19:46", NULL, "1", "50", "1", "galfot_1442855471_650x494.jpg", "Fumigacion de Zancudos", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("4", "2015-09-21 12:11:35", "2015-09-21 12:19:57", NULL, "1", "48", "1", "galfot_1442855495_800x600.jpg", "Fumigación de garrapatas", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("5", "2015-09-21 12:12:26", "2015-09-21 12:20:06", NULL, "1", "46", "1", "galfot_1442855545_771x450.jpg", "Fumigacion de Pulgas", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("6", "2015-09-21 12:12:43", "2015-09-21 12:20:17", NULL, "1", "30", "1", "galfot_1442855562_860x560.jpg", "Fumigación de casas", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("7", "2015-09-21 12:12:52", "2015-09-21 12:20:25", NULL, "1", "44", "1", "galfot_1442855572_360x360.jpg", "Combat Gel Americano", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("8", "2015-09-21 12:13:02", "2015-09-21 12:20:35", NULL, "1", "32", "1", "galfot_1442855582_640x350.jpg", "Fumigación Ecologica", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("9", "2015-09-21 12:13:21", "2015-09-21 12:20:42", NULL, "1", "42", "1", "galfot_1442855600_625x456.jpg", "Fumigación de Jardines", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("10", "2015-09-21 12:13:32", "2015-09-21 12:20:53", NULL, "1", "40", "1", "galfot_1442855612_646x354.jpg", "aplicacion de Retardante de fuego", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("11", "2015-09-21 12:13:44", "2015-09-21 12:20:59", NULL, "1", "38", "1", "galfot_1442855623_440x282.jpg", "Limpieza de Tanques", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("12", "2015-09-21 12:13:55", "2015-09-21 12:21:06", NULL, "1", "37", "1", "galfot_1442855635_625x391.jpg", "fumigación de mosquitos", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("13", "2015-09-21 12:14:41", "2015-09-21 12:21:15", NULL, "1", "34", "1", "galfot_1442855681_399x336.jpg", "lavado de muebles", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("14", "2015-09-21 12:27:14", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1442856433_1155x866.jpg", "LAVADO DE ALFOMBRAS ", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("15", "2016-03-08 10:47:40", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1457452060_860x560.jpg", "FUMIGACION DE CUCRACHAS", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("16", "2016-03-08 10:50:28", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1457452228_333x249.jpg", "FUMIGCION DE CASAS", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("17", "2016-03-08 10:51:21", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1457452281_500x376.jpg", "FUMIGACION DE GARRAPATAS", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("18", "2016-03-08 10:52:11", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1457452330_625x456.jpg", "FUMIGACION DE HORMIGAS", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("19", "2016-03-08 10:52:53", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1457452373_650x494.jpg", "FUMIGACION DE ZANCUDOS", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("21", "2018-02-27 11:46:48", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1519750008_270x114.jpg", "RNP", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("24", "2018-03-01 14:41:43", "0000-00-00 00:00:00", NULL, "1", "1", "7", "galfot_1519933301_1275x1750.jpg", "REGISTRO NACIONAL DE PROVEEDORES", NULL, "1");
#
#
DROP TABLE IF EXISTS `galleries_videos`;
#
#
CREATE TABLE `galleries_videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(80) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `html` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `galleries_videos_videos`;
#
#
CREATE TABLE `galleries_videos_videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos_videos` VALUES ("1", "0000-00-00 00:00:00", "2015-09-19 11:52:36", NULL, "1", NULL, "0", "Video Corporativo", NULL, "1");
#
#
DROP TABLE IF EXISTS `links`;
#
#
CREATE TABLE `links` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `file` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `links` VALUES ("7", "2015-09-23 11:31:01", "2015-09-23 11:31:01", NULL, "1", "9", "RECARGA DE EXTINTORES", "http://www.ventasdeextintores.com", "1", "links_1443025861_504x283.jpg");
#
#
INSERT INTO `links` VALUES ("8", "2015-09-23 11:30:14", "2015-09-23 11:30:14", NULL, "1", "10", "VENTA DE EXTINTORES", "http://www.puntorojo.pe", "1", "links_1443025814_526x192.jpg");
#
#
INSERT INTO `links` VALUES ("3", "2015-09-22 20:56:04", "2015-09-24 12:13:51", NULL, "1", "8", "SUNAT", "http://www.sunat.gob.pe", "1", "links_1442973364_312x76.gif");
#
#
INSERT INTO `links` VALUES ("4", "2015-09-22 20:55:42", "2015-09-22 20:55:41", NULL, "1", "7", "BCP", "https://www.viabcp.com", "1", "links_1442973342_282x116.png");
#
#
DROP TABLE IF EXISTS `news`;
#
#
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `pages_photos`;
#
#
CREATE TABLE `pages_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(80) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `pages_photos` VALUES ("3", "2015-08-28 12:39:31", "0000-00-00 00:00:00", NULL, "1", NULL, "0000-00-00 00:00:00", "RETARDANTE DE FUEGO", "<p>Es un producto elaborado a partir de sales y resinas dando como resultado un l&iacute;quido, incoloro, inodoro, no t&oacute;xico, posee agentes tesno activos, dispersantes y penetrantes completamente absorventes dejando una pel&iacute;cula protectora de alta eficiencia de propiedades inhibidoreas de fuego. Evita la propagaci&oacute;n del fuiego, contribuytendo al mismo tiempo a ratardar la generaci&oacute;n de humo y gases hasta un 70 por ciento. Elimina la reacci&oacute;n en cadena en casos de incendio.<br />\nLos componentes de este rpoducto hacen un recubriemiento ign&iacute;fugo eficaz contra la propagaci&oacute;n del fuego en todo tipo de materiales inflamables.</p>\n\n<p><strong>APLICACI&Oacute;N</strong><br />\n<br />\nEs aplicable con brocha, pulverizador, rodillo o inmersi&oacute;n sobre cualquier superficie con o sin recubrimiento de pinturas o barnices. La superficie debe estar completamente libre de grasas.</p>\n\n<p><strong>SOPORTE DE TEMPERATURAS</strong></p>\n\n<p>Telas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 600&deg;C&nbsp;<br />\nMaderas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 900&deg;C</p>\n\n<p>Luego de apr&oacute;ximadamente minuto y medio de fuego constante sobre la superficie se iniciar&aacute; la calcinaci&oacute;n, sin formar llama o flama.</p>\n\n<p><strong>USOS</strong></p>\n\n<p>Se utiliza en todo tipo de material inflamable (madera, cart&oacute;n, tela, tejidos, esponja, fibras naturales y sint&eacute;ticas, recubrimientos para alba&ntilde;iler&iacute;a, instalciones el&eacute;ctricas para protecci&oacute;n de conductores, estructuras, met&aacute;licas, tuber&iacute;as, calderos, chimeneas, etc.).</p>\n\n<p>En el caso de la madera la previene contra el ataque de hongos, bacterias, polillas, termitas y roedores. Adem&aacute;s de preservar la madera, evita el envejecimiento prematuraro de este.<br />\nEL RETARDANTE DE FUEGO PF, fue analizado en los laboratorios de la Facultad de Ingener&iacute;a Qu&iacute;mica de la Universidad Mayor de San Marcos, bajo las normas NFPA N&deg; 255 y ASTM E-84, obteniendose resultados favorables en cada uno de ellos.</p>\n\n<p><strong>TOXICIDAD</strong><br />\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\nProducto ecol&oacute;gico, no contaminante.</p>\n", "1");
#
#
DROP TABLE IF EXISTS `pages_photos_photos`;
#
#
CREATE TABLE `pages_photos_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `html` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `pages_photos_photos` VALUES ("3", "2015-08-28 07:42:37", "0000-00-00 00:00:00", NULL, "1", "50", "1", "profot_1440765757_199x250.jpg", "EXTINTORES DE POLVO QUIMICO SECO TIPO ABC DE O1 KG", NULL, "1", "<p>Estos equipos son dise&ntilde;ados para protecciones peque&ntilde;as y ocupan poco espacio como: veh&iacute;culos, motores peque&ntilde;os, botes, veh&iacute;culos de recreo y en producci&oacute;n industrial peque&ntilde;a.</p>\n");
#
#
INSERT INTO `pages_photos_photos` VALUES ("2", "2015-08-27 20:26:44", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1440725204_130x250.jpg", "EXTINTORES DE POLVO QUIMICO SECO TIPO ABC DE O2 KG", NULL, "1", NULL);
#
#
INSERT INTO `pages_photos_photos` VALUES ("4", "2015-08-28 07:43:09", "0000-00-00 00:00:00", NULL, "1", "49", "1", "profot_1440765789_130x250.jpg", "EXTINTORES DE POLVO QUIMICO SECO TIPO ABC DE O2 KG", NULL, "1", "<p>Estos equipos son dise&ntilde;ados para protecciones peque&ntilde;as y ocupan poco espacio como: veh&iacute;culos, motores peque&ntilde;os, botes, veh&iacute;culos de recreo y en producci&oacute;n industrial peque&ntilde;a.</p>\n");
#
#
DROP TABLE IF EXISTS `paginas`;
#
#
CREATE TABLE `paginas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `html` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `text` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("13", "2018-02-12 11:54:52", "2018-02-23 11:06:57", NULL, "1", "40", "MISIÓN Y VISIÓN", "<p><big><strong>NUESTRA&nbsp;MISI&Oacute;N</strong></big></p>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Nuestra mision es brindar un servicios de Saneamiento Ambiental cuidando al medio Ambiente, la salud de las personas y&nbsp;satisfacer las necesidades de todos nuestros clientes de manera eficaz y eficiente.&nbsp;</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Nuestro servicio est&aacute; dirigido hacia el sector P&uacute;blico, Industrial y Comercial, cumpliendo estrictamente Normas y Reglamentos establecidos, que garantizan la efectividad en el desarrollo de nuestras operaciones.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Usamos productos Ecol&oacute;gicos y Biol&oacute;gicos&nbsp;hecho con&nbsp;cepas bacterianas&nbsp;para el m&aacute;s exigente de los clientes, Contamos con productos de alta calidad y un equipo humano altamente calificado en las diferentes &aacute;reas de soporte y servicio al cliente.</big></div>\n\n<p>&nbsp;</p>\n\n<p><big><strong>NUESTRA VISI&Oacute;N</strong></big></p>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Ser reconocidos como una Empresa L&iacute;der a nivel Nacional, en el sector de&nbsp;<strong>SANEAMIENTO AMBIENTAL,&nbsp;</strong>utilizando productos Ecol&oacute;gicos y Biologicos&nbsp;aplicando como principios fundamentales&nbsp;la puntualidad, calidad, eficiencia, honestidad, responsabilidad y&nbsp;profesionalismo en la realizaci&oacute;n de sus labores, para lograr convertirnos como &nbsp;el socio estrat&eacute;gico de todos nuestros clientes actuales y potenciales.</big></div>\n\n<p>&nbsp;</p>\n", "pag_1518454492_299x276.jpg", "NUESTRA MISION Y VISION", "1", "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("2", "2015-08-27 22:25:44", "2018-02-23 11:04:17", NULL, "1", "50", "QUIENES SOMOS", "<div style=\"background-color:#5CB900; color:#000000\"><big>Somos una exitosa empresa peruana que tiene como finalidad brindar soluciones&nbsp;de calidad y eficiencia en<strong>&nbsp;</strong>el&nbsp; mercado&nbsp;de<strong>&nbsp;</strong>servicios&nbsp;de<strong> SANEAMIENTO AMBIENTAL</strong>; ( Fumigacion Integral, Desinfecci&oacute;n, Desinsectaci&oacute;n, Desratizaci&oacute;n, Limpieza de Reservorios de Agua, Limpieza de pozos s&eacute;pticos, y servicios complementarios.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Nuestra empresa tiene como lema fundamental: &quot; Cuidar su Salud y el Medio Ambiente, por lo tanto los&nbsp;trabajos&nbsp; que realizamos lo hacemos con productos elaborados por la biotecnologia compuesto por cepas bacterianas que cuidan de&nbsp; la ecolog&iacute;a y contaminaci&oacute;n, quiere decir que los productos estan libres de metales pesados asi como son biodegradables, en caso de entoxicaci&oacute;n accidental son eliminados por heces y orina.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Contamos con profesionales de alta trayectoria y t&eacute;cnicos preparados&nbsp;para cada tipo de trabajo;&nbsp;usamos insecticidas Biol&oacute;gicos, Ecologicos, Domesticos&nbsp;para uso en Salud P&uacute;blica e Industrial;&nbsp;Registrados, Autorizados y Regulados por disposiciones Ambientales y&nbsp;Sanitarias. Contribuyendo de esta manera a proteger la salud humana y la Salud Ambiental. </big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>FUMI EXTIN EXPRESS. </strong>Certifica la calidad de nuestro servicio.&nbsp;</big></div>\n\n<p>&nbsp;</p>\n", "pag_1440732344_477x320.jpg", "QUIENES SOMOS", "1", "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("30", "2016-03-01 13:01:42", "0000-00-00 00:00:00", NULL, "1", NULL, "FUMIGACIÓN DE PULGAS Y ACAROS", "<p><strong>FUMIGACIONES DE </strong><strong>PULGAS</strong></p>\n\n<p>Las pulgas, causan incomodidad para los animales dom&eacute;sticos y porqu&eacute; no para las personas que conviven con esos animales. El servicio ser&aacute; una fumigaci&oacute;n pesada, llamamos pesada cuando se tiene que mojar bastante la tierra para que las larvas y huevos que viven aliment&aacute;ndose de los microorganismos del polvo, absorban los insecticidas de acci&oacute;n residual y los larvicidas para el control total de adultos, huevos, larvas y ninfas. El servicio de fumigaci&oacute;n comprende aplicaci&oacute;n de insecticidas para controlar &nbsp;no solamente pulgas sino tambi&eacute;n todo tipo de insectos, como, cucarachas, moscas, mosquitos, zancudos, hormigas, polillas, termitas, as&iacute; como aplicaci&oacute;n de acaricidas para controlar &aacute;caros, garrapatas y ara&ntilde;as. En el caso especifico de ara&ntilde;as usaremos un poderoso acaricida a base de una abamectina.</p>\n\n<p>El servicio de fumigaci&oacute;n de pulgas<strong> mediante fumigaciones o control de plagas es una tarea de profesionales</strong></p>\n\n<p>El tratamiento se realizar&aacute; con poderosos insecticidas piretroides y &oacute;rgano fosforados, autorizados por el Ministerio de Salud, completamente at&oacute;xicos y de gran poder residual y acci&oacute;n fumigante.&nbsp;</p>\n", NULL, "FUMIGACION DE PULGAS", "1", NULL, NULL);
#
#
INSERT INTO `paginas` VALUES ("8", "2018-02-16 11:10:30", "2018-02-27 11:19:43", NULL, "1", NULL, "Telefonos y Anexos", "<p><span class=\"marker\"><strong>Direcci&oacute;n:</strong></span><br />\nCalle: 24 de Febrero 256&nbsp;</p>\n\n<p>Urb. Limatambo Norte - San Luis</p>\n\n<p>Lima - Per&uacute;</p>\n\n<hr />\n<p><span class=\"marker\"><strong>Central Telef&oacute;nica:</strong></span><br />\n(01) 225-5554 / 224-4058</p>\n\n<p><strong><span class=\"marker\">ENTEL:</span>&nbsp; </strong>947269780 <span class=\"marker\"><strong>RPC:</strong></span> 962869186</p>\n\n<p><strong><span class=\"marker\">ENTEL:</span> </strong>981029186</p>\n\n<hr />\n<p><span class=\"marker\"><strong>Correo:</strong></span><br />\nventas@fumigacionesyextintores.com</p>\n\n<p>ventas@fumigacionesenlima.com</p>\n", "pag_1518797430_299x276.jpg", "FUMIGACIONES EN LIMA", "1", "7", NULL);
#
#
INSERT INTO `paginas` VALUES ("12", "2015-08-28 12:51:15", "2015-09-01 17:03:13", NULL, "1", "40", "VISION Y MISION", "<p><strong>Nuestra Misi&oacute;n</strong></p>\n\n<p>Satisfacer las necesidades de nuestros clientes de manera eficaz en los servicios <strong>SANEAMIENTO AMBIENTAL</strong> dirigido hacia el sector Industrial y Comercial, cumpliendo estrictamente las Normas y Reglamentos establecidos, que garantizan la efectividad en el desarrollo de nuestras operaciones.</p>\n\n<p>Nuestro servicio est&aacute; hecho para el m&aacute;s exigente de los clientes, contamos productos de alta calidad y un equipo humano altamente calificado en las diferentes &aacute;reas de soporte y servicio al cliente.</p>\n\n<p><strong>Nuestra Visi&oacute;n</strong></p>\n\n<p>Ser reconocidos como una Empresa L&iacute;der a nivel Nacional, en el sector <strong>SANEAMIENTO AMBIENTAL</strong> que aplica como principio la calidad, eficiencia, honestidad, responsabilidad y&nbsp; profesionalismo en la realizaci&oacute;n de sus labores&nbsp; y convertirnos como &nbsp;el socio estrat&eacute;gico de nuestros clientes actuales y potenciales.</p>\n\n<p>&nbsp;</p>\n", NULL, NULL, "1", NULL, NULL);
#
#
INSERT INTO `paginas` VALUES ("18", "2016-01-14 16:00:24", "2018-02-23 14:06:00", NULL, "1", NULL, "LIMPIEZA DE TANQUES Y CISTERNAS", "<div style=\"background-color:#5CB900; color:#000000\"><big>La limpieza y desinfecci&oacute;n de tanques y cisterna, por ser&nbsp;sistemas de almacenamiento de agua se debe realizarse cuando menos dos veces al a&ntilde;o, manteni&eacute;ndose&nbsp; en buen estado de conservaci&oacute;n (siempre colocada la tapa o cierre herm&eacute;tico del tanque o cisterna) para evitarse la fotos&iacute;ntesis y por consiguiente formaci&oacute;n&nbsp; de alguicidas&nbsp; y microorganismos del agua y tambi&eacute;n el ingreso de insectos y roedores.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><small><big><a href=\"RECOMENDACIONES\">RECOMENDACIONES</a></big></small></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>El proceso de limpieza consiste en lo Siguiente.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>1.-&nbsp;Cerrar la llave de ingreso de agua uno o dos d&iacute;as antes ,que permite el ingreso de&nbsp; esta a la cisterna, con la finalidad de evitar el desperdicio de agua y no perjudicar su econom&iacute;a.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>2.-El d&iacute;a de la limpieza de la cisterna se empieza evacuando el agua que queda mediante una electro bomba de succi&oacute;n sumergible tratando de dejar un m&iacute;nimo de agua de 15 cent&iacute;metros.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>3.-Luego se proceder&aacute; a la limpieza de la cisterna empezando a cepillar interiores de pisos, paredes y techos con escobillas de cerdas pl&aacute;sticas duras para evitar rayar las capas de impermeabilizaci&oacute;n de las estructuras luego se elimina toda suciedad o materia extra&ntilde;a.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>4.-Luego se proceder&aacute; a evacuar todo el fango, cieno y barro encontrados con nuestros equipos de bombeo.&nbsp;&nbsp;</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>5.-Finalmente se proseder&aacute; con el enjuague y desinfecci&oacute;n mediante el m&eacute;todo de Clorinaci&oacute;n, con Hipoclorito de Sodio o Dimanin. Asegur&aacute;ndonos que todas las superficies de&nbsp; las estructuras de almacenamiento entren en contacto con el Desinfectante, luego se abrir&aacute; la llave de ingreso de agua&nbsp; a la cisterna, para el llenado respectivo.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Es aconsejable realizar el operativo limpieza y desinfecci&oacute;n cada 6 mese, preferentemente antes de la llegada del verano</big></div>\n\n<p>&nbsp;</p>\n", "pag_1452805223_350x224.jpg", "LIMPIEZA DE TANQUES Y CISTERNAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("15", "2015-09-10 13:21:06", "2018-02-23 17:31:24", NULL, "1", "43", "FUMIGACION ECOLOGICA EN LIMA", "<div style=\"background-color:#5CB900; color:#000000\"><big><span style=\"color:rgb(0, 0, 0)\">Nuestra empresa tiene como lema fundamental: &quot; Cuidar su Salud y el Medio Ambiente, por lo tanto los&nbsp;trabajos&nbsp; que realizamos lo hacemos con productos elaborados por la biotecnologia compuesto por cepas bacterianas que cuidan de&nbsp; la ecolog&iacute;a y contaminaci&oacute;n, quiere decir que los productos estan libres de metales pesados asi como son biodegradables, en caso de Intoxicaci&oacute;n accidental son eliminados por heces y orina.</span></big></div>\n\n<p>&nbsp;</p>\n", "pag_1441909266_640x350.jpg", "FUMIGACION CON GEL ", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("16", "2015-09-10 12:08:14", "2018-02-23 11:37:42", NULL, "1", "46", "SERVICIO DE FUMIGACION DE JARDINES  ", "<div style=\"background-color:#5CB900; color:#000000\"><big>No solamente se fumiga la parte interna de las casas sino tambien los jardines es realizarle una fumigacion general periodicamente cuando menos dos veces al a&ntilde;o.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Las plagas se alimentan de las plantas caus&aacute;ndoles da&ntilde;o irreparable, para eso trabajamos con productos biologicos y ecologicos, para la exterminacion de todo tipo de insectos rastreros y voladores.</big></div>\n", "pag_1441904893_800x600.jpg", "SERVICIOS DE FUMIGACIONES DE JARDINES", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("17", "2015-09-10 11:44:46", "2018-02-23 11:35:41", NULL, "1", "38", "EMPRESAS DE FUMIGACIONES EN LIMA", "<p><strong><big>FUMIGACION DE COLEGIOS</big></strong></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><span style=\"color:rgb(43, 44, 49)\">No solamente brindamos servicios a industrias, instituciones y viviendas en general, nuestra especialidad son los Colegios y universidades, con atenci&oacute;n en todo Lima Metropolitana y Provincias. Tenemos experiencia realizando un trabajo r&aacute;pido y muy eficiente, &iexcl;Cont&aacute;ctenos!&nbsp;</span></big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Debe tener en cuenta que la fumigaci&oacute;n es un procedimiento muy complejo que s&oacute;lo puede ser realizado por profesionales capacitados y con experiencia.&nbsp;</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Hoy en d&iacute;a vivimos con diferentes tipos de plagas que podr&iacute;an generar considerables malestares en nuestra salud,&nbsp;Es por eso que al momento de realizarse el servicio de fumigacion debe ser realizado en manos de profesionales de la fumigaci&oacute;n, que&nbsp;brinden garant&iacute;a a la&nbsp;soluci&oacute;n de su problema.&nbsp;</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Contamos con la mejor y m&aacute;s moderna maquinaria del mercado para la fumigaci&oacute;n Integral&nbsp;orientada a incrementar la efectividad, eficacia y la seguridad de todos nuestros servicios.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</big><br />\n<br />\n&nbsp;</div>\n", "pag_1441903486_650x494.jpg", "EMPRESAS DE FUMIGACIÓN EN LIMA", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("19", "2015-09-17 12:09:47", "2018-02-12 15:06:41", NULL, "1", "50", "FUMIGACION DE CUCARACHAS y CUCARACHITAS", "<div style=\"background-color:#5CB900;color:#000000;\"><big><span style=\"color:#0065C8\">COMBAT GEL</span>.- Las cucarachas&nbsp;de cocina o cucaracha&nbsp;alemana es una de las plagas dom&eacute;sticas m&aacute;s comunes a nivel mundial, tiene una gran capacidad para producir cr&iacute;as. Una cucaracha hembra produce una c&aacute;psula &nbsp;(ootheca) &ldquo;que contiene de 30-40 huevos&rdquo;.Crecen&nbsp;r&aacute;pidamente, puede producir hasta ocho c&aacute;psulas con m&aacute;s de 300 cr&iacute;as y m&aacute;s de 100,000 cucarachas en un a&ntilde;o.&nbsp;Estas cucarachitas son nocturnas y pasan los d&iacute;as durmiendo en lugares c&aacute;lidos, h&uacute;medos y oscuros.</big></div>\n\n<p><big><a href=\"#\"><strong>CONTROL DE CUCARACHAS&nbsp;DE COCINA</strong></a></big></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>El control al problema de cucarachitas , que presentan las casas, los Dptos., Restaurantes, Fuente de Soda, Bodegas, Oficinas, Consultorios, Cl&iacute;nicas, Hostales, Hospitales, Etc, Etc. Por ser insectos ov&iacute;paros y can&iacute;bales que se reproducen sexualmente. Lo realizamos a trav&eacute;s de la colocaci&oacute;n de cebo alimenticio y espec&iacute;fico (Combat gel) No toxico, que al ser ingerido por la cucaracha, interfiere con la producci&oacute;n de energ&iacute;a a trav&eacute;s del bloqueo de la respiraci&oacute;n celular a nivel de las mitocondrias, originando la muerte de todas las cucarachitas.</big></div>\n\n<p><span style=\"color:red\"><big><a href=\"#\"><strong>EL </strong></a></big></span><big><a href=\"#\"><strong>COMBAT GEL</strong>&nbsp;</a></big></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>&nbsp;Es un concepto innovador que permite remplazar a los insecticidas&nbsp; spray en control r&aacute;pido de cucarachitas a largo plazo.</big></div>\n\n<p><span style=\"color:red\"><big><strong>MODO DE ACCION</strong></big></span></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><a href=\"#\">El control al problema de cucarachitas</a> lo solucionamos con <span style=\"color:red\">(<a href=\"#\">COMBAT GEL</a>) </span>alimento muy atrayente, contiene fipronil. <span style=\"color:red\">NO TOXICO</span>. Lo importamos de Estados Unidos, <a href=\"#FUMIGACION DE CUCARACHAS\">Este gel contiene feromonas</a> que atraen a las cucarachitas (No hay necesidad de poner el gel en el mismo sitio que est&aacute;n ellas, ya que las feromonas la van atraer),&nbsp; <a href=\"#FUMIGACION DE CUCARACHAS\">l</a><a href=\"#\">as cucarachitas</a> a pesar que son nocturnas incluso en el d&iacute;a salen a consumir el gel, lo comen inmediatamente, luego que lo comen la mayor&iacute;a de las cucarachitas mueren en sus madrigueras, llamamos madrigueras (marco de puerta, marco de ventanas, motores de refrigeraci&oacute;n, interruptor de corrientes, motores de licuadoras, microondas, etc.), como ellas son can&iacute;bales practican la coprofagia y el canibalismo se transmiten este producto. Significa que se alimentan de las cucarachitas muertas y las heces de estas cucarachitas.</big></div>\n\n<p><big><strong>&nbsp;<span style=\"color:red\">ESTABILIDAD</span></strong></big></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><a href=\"#FUMIGACION DE CUCARACHAS\">EL Combat gel </a>tiene una permeabilidad y estabilidad que no se endurece incluso estando en el cuerpo del insecto hasta 6 meses.&nbsp; Originando que las cucarachitas muertas en la madriguera son devoradas por las que nacen, &nbsp;logrando que las chiquitas no crezcan no se desarrollen por consiguiente se rompe el ciclo reproductor y se acaba el problema de cucarachitas.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Cuando usted fumiga con sus insecticidas tradicionales en spray, mueren las adultas, pero no muere el huevo, ellas tienen de una hasta cuatro ootas (huevo), generalmente portan una y las otras las dejan en las madrigueras, dentro de esa oota, hay de 40 a 50 cucarachitas aliment&aacute;ndose de unas c&eacute;lulas fibrosas, como este huevo lo dejan en lugares inaccesibles, cuando fumiga con el spray mueren las adultos pero los huevos no.</big></div>\n\n<p><span style=\"color:red\"><big><strong><a href=\"#\">GEL NO TOXICO</a>&nbsp;</strong></big></span></p>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><a href=\"#FUMIGACION DE CUCARACHAS\">Para fumigar</a> con este gel no es necesario salir de la casa, no tiene nada que limpiar, tapar, sellar. Ni guardar nada,&nbsp; en plena aplicaci&oacute;n puede incluso usted estar cocinando, no va sentir ning&uacute;n tipo de olor, es un producto ecol&oacute;gico 100%, efectivo es de color marr&oacute;n claro, como su nombre lo dice es un gel, que se deja en los lugares estrat&eacute;gicos por donde caminan las cucarachitas (madrigueras).</big></div>\n", "pag_1442509787_360x360.jpg", "FUMIGACION DE CUCARACHAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("20", "2015-09-19 13:24:05", "2018-02-16 12:13:28", NULL, "1", "40", "FUMIGACIONES DE GARRAPATAS", "<div style=\"background-color:#5CB900;color:#000000;\"><big>La fumigcion de garrapatas se basa exclusivamente en la aplicaci&oacute;n de acaricidas insecticidas de contacto, acci&oacute;n fumigante y acci&oacute;n residual, La aplicaci&oacute;n se realiza en zonas donde duermen y caminan las mascotas.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Existen aproximadamente 850 especies distintas de garrapatas en el mundo. Alrededor de 100 especies son capaces de propagar enfermedades o de causar p&eacute;rdidas econ&oacute;micas debido a menores aumentos de peso o a infecciones secundarias.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Para controlarlas y prevenir la propagaci&oacute;n de enfermedades es importante conocer su ciclo vital</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><strong>CICLO DE VIDA</strong></big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Las garrapatas pasan por 4 estad&iacute;os de vida: huevecillo, larva (6 patas), ninfa (8 patas) y adulto; en ocasiones cada estad&iacute;o tarda un a&ntilde;o y se coloca en distinto animal hospedero.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Las garrapata en los estad&iacute;os de huevecillo, larva y ninfa, a menudo es muy peque&ntilde;a y dif&iacute;cil de detectar a simple vista; en la cabeza de un alfiler pueden entrar varias garrapatas. </big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Con frecuencia, las garrapatas adultas son m&aacute;s grandes, pero su tama&ntilde;o puede ir desde el equivalente a la cabeza de un alfiler hasta el de una moneda de cinco centavos, dependiendo si acaban de adherirse al animal &nbsp;o si ya se encuentran atiborradas de sangre. Cada estad&iacute;o de vida, excepto el del huevecillo, se adhiere a un animal o a un ser humano, se alimenta de sangre y luego se suelta para cambiar o mudarse (garrapatas de 3 hospederos) o permanece adherido (garrapatas de 1 hospedero). Lo que causa la propagaci&oacute;n de la enfermedad es la alimentaci&oacute;n de sangre en diferentes animales. Las garrapatas de tres hospederos se mudan desde el suelo a trav&eacute;s del pasto o en &aacute;reas con vegetaci&oacute;n abundante. Las garrapatas ninfas, larvas y adultas &ldquo;rastrean&rdquo; o seleccionan animales subi&eacute;ndose a una hoja de pasto y adhiri&eacute;ndose a las patas de los animales que van pasando.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\">&nbsp;</div>\n", "pag_1442687045_380x285.jpg", "FUMIGACION DE GARRAPATAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("21", "2016-01-11 13:18:20", "2018-02-16 12:20:05", NULL, "1", NULL, "FUMIGACIÓN DE HORMIGAS", "<div style=\"background-color:#5CB900;color:#000000;\"><big>Las hormigas tambi&eacute;n son omn&iacute;voras, son hormigas mel&iacute;feras, es decir que se alimentan de azucares y glucosa, La reina produce de 5 a 20 huevos por d&iacute;a; sus cr&iacute;as se desarrollan en 40 d&iacute;as; las j&oacute;venes atraviesan tres fases de estado larvario. Por ello el trabajo de control de hormigas debe ser realizado, siempre, por t&eacute;cnicos especializados.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><span style=\"color:#0065C8\"><big>METODOS DE ELIMINACION:</big></span></div>\n\n<ol>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big>Gel para hormigas</big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big>Polvo Ecologico</big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big>Insecticida liquida</big></div>\n	</li>\n</ol>\n\n<ul>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big><big><strong><a href=\"#CLASES DE FUMIGACION\"><span style=\"color:#0065C8\">FUMIGACIONES&nbsp;CON GEL </span></a>.-</strong> Es muy f&aacute;cil el control de este tipo de hormigas, trabajamos con varios productos para el tratamiento de hormigas entre ellos, un gel producido con azucares y sacarosa, orientado a la aniquilaci&oacute;n total de la reina lo cual lo hace un producto mucho m&aacute;s efectivo.</big></big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big><strong><span style=\"color:#0065C8\"><a href=\"#FUMIGACION DE HORMIGAS\">FUMIGACIONES CON POLVO ECOLOGICO</a>.</span>- </strong>Tambi&eacute;n podemos recurrir al insuflado de polvos con alta presi&oacute;n. Esto es muy efectivo, de este modo o con el cebado, nos aseguramos eliminar la hormiga reina. al<big>l eliminar la reina, la colonia queda finalmente sin posibilidades de reproducci&oacute;n.</big></big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900;color:#000000;\"><big><strong><span style=\"color:#0065C8\"><a href=\"#FUMIGACION DE HORMIGAS\">FUMIGACIONES CON L&Iacute;QUIDO</a>.</span>- </strong>Es indispensable, el control de hormigas, se basa exclusivamente en la aplicaci&oacute;n de insecticidas de contacto, acci&oacute;n fumigante y acci&oacute;n residual, La aplicaci&oacute;n se realiza en zonas donde caminan las hormigas, y el resultado es al instante. Los insecticidas a aplicar son para uso Industrial y salud p&uacute;blica, (autorizados por el Ministerio de Salud), de baja toxicidad y alto poder residual. La fumigaci&oacute;n se realiza mediante aspersi&oacute;n, Manual, Moto pulverizadora.</big></div>\n	</li>\n</ul>\n", "pag_1452536300_300x225.jpg", "FUMIGACIONES DE HORMIGAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("22", "2015-09-19 13:28:38", "2018-02-22 19:51:52", NULL, "1", NULL, "FUMIGACION DE ZANCUDOS,MOSCAS Y MOSQUITOS.", "<p><span style=\"color:red\"><strong>FUMIGACION DE ZANCUDOS</strong></span></p>\n\n<h3 style=\"color: rgb(0, 0, 0); background-color: rgb(92, 185, 0);\">Utilizamos Insecticidas Ecologicos&nbsp;L&iacute;quidas y&nbsp;Nebulizaciones para la eliminacion total de estos insectos&nbsp;es ya que es una plaga muy peligrosa para la salud de las personas, ya que estos son transmisores de muchas enfermedades, como es el caso del dengue hemorr&aacute;gico. Estas plagas requieren de condiciones especiales para su desarrollo, requiriendo aguas estancadas para el crecimiento de sus larvas.</h3>\n\n<h3>&nbsp;</h3>\n\n<p><span style=\"color:red\"><strong>FUMIGACION DE MOSCAS</strong></span></p>\n\n<h3 style=\"color: rgb(0, 0, 0); background-color: rgb(92, 185, 0);\">Usamos Insecticidas Ecologicos para la eliminacion total,&nbsp;primero hay que controlar fumigando la fuente de reproducci&oacute;n, ya que por m&aacute;s que se fumigue van a persistir en el ambiente sino eliminamos la fuente de reproducci&oacute;n. Los mosquitos requieren de aguas estancadas para el crecimiento de sus larvas donde existan descomposici&oacute;n ya que sus huevos los depositan en estas fuentes a las pocas horas sus huevos se vuelven larvas las larvas se alimentan de los microorganismos que existen en las charcos de agua, luego pasa a pupa y sale adulto.</h3>\n\n<p>&nbsp;</p>\n\n<p><strong><span style=\"color:red\">FUMIGACIONES DE&nbsp;MOSQUITOS&nbsp;</span></strong></p>\n\n<h3 style=\"color: rgb(0, 0, 0); background-color: rgb(92, 185, 0);\">Usamos Insecticidas Ecol&oacute;gicos y&nbsp;la aplicaci&oacute;n de insecticidas de contacto, acci&oacute;n fumigante y acci&oacute;n residual, con aplicaci&oacute;n de productos qu&iacute;micos como la&nbsp;nebulizaci&oacute;n con m&aacute;quinas de &nbsp;gran poder de abastecimiento, para reducir de manera significativa la presencia de la plaga dentro y fuera de las instalaciones y/o residencias.Los insecticidas a aplicar son para uso Industrial y salud p&uacute;blica, (autorizados por el Ministerio de Salud), de baja toxicidad y alto poder residual. La fumigaci&oacute;n se realiza mediante aspersi&oacute;n, Manual, Moto pulverizadora, Noto Nebulizadora o ULV.</h3>\n\n<p>&nbsp;</p>\n", "pag_1442687318_800x255.jpg", "FUMIGACION DE ZANCUDOS Y MOSCAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("23", "2015-09-17 14:15:48", "2018-02-16 12:00:39", NULL, "1", NULL, "FUMIGACIONES DE POLILLAS Y TERMITAS", "<div style=\"background-color:#5CB900;color:#000000;\"><big>Las polillas y las termitas&nbsp;son insectos voladores peque&ntilde;os y nocturnos cuyas larvas devoran alimentos almacenados, capaces de digerir queratina (lana o seda). Son de metamorfosis completa. La hembra coloca desde 40 hasta 500 huevos seg&uacute;n la especie y su ciclo de desarrollo var&iacute;a de 5 a 8 semanas seg&uacute;n la especie y condiciones ambientales.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Son las peores enemigas de los closets&nbsp; y de cualquier mueble de madera&nbsp; y&nbsp;peor a&uacute;n cuando pican y hacen agujeros en la ropa. &iexcl;Son una pesadilla!</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>FUMI EXTIN, garantiza y Certifica&nbsp;la aplicacion mediante el empleo de maquinas aspersoras (motofumigadoras y /o mochilas manuales) atomizadoras el&eacute;ctricas, emple&aacute;ndose tambi&eacute;n el m&eacute;todo de termo nebulizadora.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\">&nbsp;</div>\n\n<p>&nbsp;</p>\n", "pag_1442517348_333x249.jpg", "FUMIGACION POLILLAS", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("24", "2015-09-21 11:39:34", "2018-02-16 11:44:07", NULL, "1", NULL, "Retardante de Fuego ", "<div style=\"background-color:#5CB900;color:#000000;\"><big>El Retardante de fuego <strong>&nbsp;(Ignifugo - Anti inflamable)</strong>&nbsp;Es un producto elaborado a partir de sales y resinas cuyo&nbsp;resultado un l&iacute;quido, incoloro, inodoro, NO TOXICO, que posee agentes tenso activos, dispersantes y penetrantes muy&nbsp;absorventes que brinda una pel&iacute;cula protectora de alta eficiencia de propiedades inhibidoreas de fuego.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Evita la propagaci&oacute;n del fuego, contribuyendo al mismo tiempo a retardar la generaci&oacute;n de humo y gases hasta un 70 por ciento. Eliminando la reacci&oacute;n en cadena en casos de incendio.&nbsp;Los componentes de este producto hacen un recubriemiento ign&iacute;fugo eficaz contra la propagaci&oacute;n del fuego en todo tipo de materiales inflamables.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><strong><big>APLICACION</big></strong></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Se aplica con brocha, pulverizador, rodillo o inmersi&oacute;n, sobre cualquier superficie con o sin recubrimiento de pinturas o barnices. La superficie debe estar completamente libre de grasas , suciedad acumulada, etc.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><strong><big>SOPORTE DE TEMPERATURAS</big></strong></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Telas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 600&deg;C&nbsp;<br />\nMaderas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 900&deg;C</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Luego de apr&oacute;ximadamente minuto y medio de fuego constante sobre la superficie se iniciar&aacute; la calcinaci&oacute;n, sin formar llama o flama.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><strong>USOS</strong></big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Se utiliza en todo tipo de material inflamable (madera, cart&oacute;n, tela, tejidos, esponja, fibras naturales y sint&eacute;ticas, recubrimientos para alba&ntilde;iler&iacute;a, instalciones el&eacute;ctricas para protecci&oacute;n de conductores, estructuras, met&aacute;licas, tuber&iacute;as, calderos, chimeneas, etc.).</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>En el caso de la madera la previene contra el ataque de hongos, bacterias, polillas, termitas y roedores. Adem&aacute;s de preservar la madera, evita el envejecimiento prematuraro de este.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><strong style=\"font-size:13px\">TOXICIDAD</strong></big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Producto ecol&oacute;gico, no contaminante.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big><strong>FUMI EXTIN</strong> : Certifica la calidad y aplicacion del producto Retardante de Fuego, firmado por un ingeniero Qu&Iacute;mico Colegiado con habilidad vigente segun requerimiento de INDECI Y DEFENSA CIVIL.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\">&nbsp;</div>\n", "pag_1442853574_646x354.jpg", "RETARDANTE DE FUEGO", "1", "11", NULL);
#
#
INSERT INTO `paginas` VALUES ("25", "2015-09-21 14:54:22", "2015-09-22 15:04:39", NULL, "1", "42", "Lavado de Alfombras", "<p>FUMI EXTIN EXPRESS.- 0frece un eficiente servicio de&nbsp;LAVADO DE ALFOMBRAS,&nbsp;contamos con modernas m&aacute;quinas industriales que dejan sus muebles,&nbsp;alfombras limpias y Desinfectas, los lavados de alfombras lo hacemos&nbsp; utilizando el sistema rotativo de aspirado y aplicaci&oacute;n de shampoo al seco. Esto nos permite un aspirado total de la alfombra de tal manera que&nbsp; no queden part&iacute;culas de polvo&nbsp; para&nbsp; cuando&nbsp; se aplique la espuma sobre el tejido y&nbsp; removerse con las escobillas rotativas haga que la suciedad impregnada en los tejidos de la alfombra se remuevan y se adhieran al shampoo de tal manera que cuando aspiremos finalmente la suciedad pegada al shampoo se retira por completo, quedando la alfombra&nbsp; completamente limpia. Cada lavado incluye un tratamiento anti-hongos y anti-&aacute;caros.</p>\n\n<h2>BENEFICIOS</h2>\n\n<ul style=\"list-style-type:none\">\n	<li>Extracci&oacute;n total de la suciedad sin dejar residuos ni shampoo.</li>\n	<li>Desmanchado con productos espec&iacute;ficos para cada tipo de mancha.</li>\n</ul>\n\n<p>Secado de la alfombra aproximadamente 4 horas.<br />\n&nbsp;</p>\n\n<p>Nota: Realizamos aplicaci&oacute;n de Retardante de fuego, especial para alfombras y maderas.</p>\n\n<div style=\"color:#0065C8; font-family:arial; font-size:30px\">LAVADO DE MUEBLES</div>\n\n<p>Nuestra empresa ofrece un eficiente servicio de lavados de Muebles, Sillas. &nbsp;Lo realizamos&nbsp; atreves de la aplicaci&oacute;n de t&eacute;cnicas objetivas utilizando modernas maquinas industriales y productos de marcas reconocidas, para evitar la p&eacute;rdida original de tejido, textura y color de los muebles.</p>\n\n<p>El sistema de aplicaci&oacute;n de shampoo al seco, esto nos permite un aspirado total del mueble de tal manera que&nbsp; no queden part&iacute;culas de polvo,&nbsp; para&nbsp; cuando&nbsp; se aplique la espuma sobre el tejido y&nbsp; removerse con las escobillas (escobilla especial) haga que la suciedad impregnada en los tejidos se remuevan y se adhieran al shampoo de tal forma que cuando aspiremos finalmente la suciedad pegada al shampoo se retire por completo, quedando los muebles completamente limpio.</p>\n\n<p>Cada lavado incluye un tratamiento anti-hongos y anti-&aacute;caros.</p>\n\n<h2>BENEFICIOS</h2>\n\n<p>Extracci&oacute;n total de la suciedad sin dejar residuos ni shampoo.<br />\nDesmanchado con productos espec&iacute;ficos para cada tipo de mancha.</p>\n\n<p>Secado de los muebles en aproximadamente 4 horas.<br />\nEl lavado lo realizamos en su domicilio&nbsp;</p>\n", "pag_1442865261_1155x866.jpg", "LAVADO DE ALFOMBRAS", "1", "10", NULL);
#
#
INSERT INTO `paginas` VALUES ("26", "2015-09-21 15:06:11", "2015-09-22 15:04:28", NULL, "1", NULL, "Limpieza de Cisternas", "<div style=\"color:#0065C8; font-family:arial; font-size:30px\">LIMPIEZA Y&nbsp;DESINFECCION DE TANQUES&nbsp;CISTERNAS</div>\n\n<p>De acuerdo D.S. N&ordm; 022-2001-SA, La Ley Org&aacute;nica de Municipalidades, La limpieza y desinfecci&oacute;n de los sistemas de almacenamiento de agua se debe realizarse cuando menos dos veces al a&ntilde;o, manteni&eacute;ndose&nbsp; en buen estado de conservaci&oacute;n (siempre colocada la tapa o cierre herm&eacute;tico del tanque o cisterna) para evitarse la fotos&iacute;ntesis y por consiguiente formaci&oacute;n&nbsp; de alguicidas&nbsp; y microorganismos del agua y tambi&eacute;n el ingreso de insectos y roedores</p>\n\n<p><span style=\"color:#0065C8\"><strong>PROTOCOLO DE LIMPIEZA DE CISTERNA</strong></span></p>\n\n<p>El proceso de limpieza consiste en lo Siguiente.</p>\n\n<p><strong>1.- </strong>Cerrar la llave de ingreso de agua uno o dos d&iacute;as antes ,que permite el ingreso de&nbsp; esta a la cisterna, con la finalidad de evitar el desperdicio de agua y no perjudicar su econom&iacute;a.</p>\n\n<p><strong>2.</strong>-El d&iacute;a de la limpieza de la cisterna se empieza evacuando el agua que queda mediante una electro bomba de succi&oacute;n sumergible tratando de dejar un m&iacute;nimo de agua de 15 cent&iacute;metros.</p>\n\n<p><strong>3.</strong>-Luego se proceder&aacute; a la limpieza de la cisterna empezando a cepillar interiores de pisos, paredes y techos con escobillas de cerdas pl&aacute;sticas duras para evitar rayar las capas de impermeabilizaci&oacute;n de las estructuras luego se elimina toda suciedad o materia extra&ntilde;a.</p>\n\n<p><strong>4.-</strong>Luego se proceder&aacute; a evacuar todo el fango, cieno y barro encontrados con nuestros equipos de bombeo.&nbsp;&nbsp;</p>\n\n<p><strong>5.-</strong>Finalmente se proseder&aacute; con el enjuague y desinfecci&oacute;n mediante el m&eacute;todo de Clorinaci&oacute;n, con Hipoclorito de Sodio o Dimanin. Asegur&aacute;ndonos que todas las superficies de&nbsp; las estructuras de almacenamiento entren en contacto con el Desinfectante, luego se abrir&aacute; la llave de ingreso de agua&nbsp; a la cisterna, para el llenado respectivo.</p>\n\n<p><br />\n&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n", "pag_1442865971_440x282.jpg", "LIMPIEZA DE TANQUES Y CISTERNAS ", "1", "10", NULL);
#
#
INSERT INTO `paginas` VALUES ("27", "2015-09-22 14:56:42", "2018-02-23 14:06:53", NULL, "1", "40", "LAVADO DE MUEBLES", "<div style=\"background-color:#5CB900;color:#000000;\"><big><span style=\"color:#0065C8\"><strong>LAVADO DE MUEBLES</strong></span></big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>El lavado de muebles <strong>FUMI EXTIN</strong>&nbsp;Nuestra empresa&nbsp;ofrece un eficiente servicio de lavados de Muebles, Sillas. &nbsp;Lo realizamos&nbsp; atreves de la aplicaci&oacute;n de t&eacute;cnicas objetivas utilizando modernas maquinas industriales y productos de marcas reconocidas, para evitar la p&eacute;rdida original de tejido, textura y color de los muebles.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>El sistema de aplicaci&oacute;n de shampoo al seco, esto nos permite un aspirado total del mueble de tal manera que&nbsp; no queden part&iacute;culas de polvo,&nbsp; para&nbsp; cuando&nbsp; se aplique la espuma sobre el tejido y&nbsp; removerse con las escobillas (escobilla especial) haga que la suciedad impregnada en los tejidos se remuevan y se adhieran al shampoo de tal forma que cuando aspiremos finalmente la suciedad pegada al shampoo se retire por completo, quedando los muebles completamente limpio.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Cada lavado incluye un tratamiento anti-hongos y anti-&aacute;caros.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>BENEFICIOS</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Extracci&oacute;n total de la suciedad sin dejar residuos ni shampoo.<br />\nDesmanchado con productos espec&iacute;ficos para cada tipo de mancha.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Secado de los muebles en aproximadamente 4 horas.<br />\nEl lavado lo realizamos en su domicilio&nbsp;</big></div>\n\n<p>&nbsp;</p>\n", "pag_1442951802_500x375.jpg", "LAVADO DE MUEBLES", "1", "10", NULL);
#
#
INSERT INTO `paginas` VALUES ("28", "2016-01-11 13:48:47", "2018-02-16 12:07:27", NULL, "1", "45", "DESRATIZACION O FUMIGACIÓN DE  DE RATAS", "<div style=\"background-color:#5CB900; color:#000000\"><big>Es una t&eacute;cnica de Saneamiento Ambiental que se emplea para el control y exterminio de roedores, una atenci&oacute;n en su devido momento y</big> <big>una</big>&nbsp;<big>aplicaci&oacute;n adecuada&nbsp;del producto qu&iacute;mico o biol&oacute;gico se realizara en el grado de&nbsp;Concentraci&oacute;n recomendado por el fabricante del producto&nbsp; o a criterio de las&nbsp;Indicaciones del Director T&eacute;cnico responsable del trabajo.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Los roedores son fuente directa de contaminaci&oacute;n, de transmisi&oacute;n de enfermedades a humanos, mascotas, aves y otros animales en general por ser portadores de gran cantidad de par&aacute;sitos (&aacute;caros, pulgas, piojos, garrapatas entre otros). Sus pelos, heces y orina contaminan todo cuanto tocan, (productos almacenados), transmite enfermedades al ser humano como la salmonella y la enfermedad de weil (leptospirosis), etc,.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Esta acci&oacute;n se debe de realizar sin esperar que exista una fiscalizaci&oacute;n municipal o del Ministerio de Salud, se debe realizar en forma preventiva para evitar la nidificaci&oacute;n y por consiguiente&nbsp;reinfestcion&nbsp;en vuestras instalaciones.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Para el control de roedores tenemos 3 tipos de tratamientos.</big></div>\n\n<ol>\n	<li>\n	<div style=\"background-color:#5CB900; color:#000000\"><big>Captura directa</big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900; color:#000000\"><big>Eliminaci&oacute;n con cebo</big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900; color:#000000\"><big>Producto Biol&oacute;gico</big></div>\n	</li>\n	<li>\n	<div style=\"background-color:#5CB900; color:#000000\"><big>Pastillas fumigantes</big></div>\n	</li>\n</ol>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>1.- <span style=\"color:#0065C8\"><a href=\"#\">CAPTURA DIRECTA</a></span></strong><span style=\"color:red\">:</span></big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Puede utilizarse sistemas de captura directa como trampas sensibles, trampas engomadas, trampas especiales.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>2.-<a href=\"#\">ELIMINACION CON CEBO</a></strong>.- </big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Para su eliminaci&oacute;n trabajamos con Rodenticida anticoagulante de dosis m&uacute;ltiple, con la finalidad de evitar la resistencia al consumo, utilizamos cebos especiales a base de cumarina y bromadiolonapara lo cual es importante establecer las rutas empleadas por los roedores. Hay que analizar la resistencia a determinadas sustancias venenosas que podr&iacute;an ser trasmitidas a posteriores generaciones al crear inmunidad y que generan dificultades para su eliminaci&oacute;n.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>3.- <a href=\"#\">PRODUCTO BIOLOGICO</a>&nbsp;(biorat)</strong></big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Son cebos de dosis &uacute;nica, <a href=\"#\">rodenticida natural, productos biol&oacute;gicos</a> de alto grado de efectividad contra plagas de ratas y ratones, al cual se le ha cultivado una salmonella, que basta que consuma un solo roedor el cebo para que todos los roedores se contaminen y mueran. </big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><span style=\"color:red\">BIOLOGIA DEL ROEDOR</span></big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Los roedores tienen la habilidad de adaptarse a las condiciones de existencia m&aacute;s dis&iacute;miles y se ha extendido indiscriminadamente en todas partes del mundo, por lo mismo se ha desarrollado un rodenticidas biol&oacute;gico a partir de un microorganismo pat&oacute;geno especifico de ratas y ratones, utiliz&aacute;ndose en forma exitosa combatiendo estas plagas, tanto en planes de salud preventivo como situaciones concretas de epidemias.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>RECOMENDACIOONES</strong></big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big>Hay que tener presente que adicionalmente a la eliminaci&oacute;n de los roedores se requiere la posterior<a href=\"#\"> fumigaci&oacute;n</a> para la eliminaci&oacute;n de los par&aacute;sitos e insectos que suelen acompa&ntilde;arlos.</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900; color:#000000\"><big><strong>FUMI EXTIN</strong>&nbsp; como empresa especializada con muchos a&ntilde;os de experiencia y capacidad para realizar estos tratamientos en forma eficaz y adecuada minimizando los riesgos de contaminaci&oacute;n y salud ambiental, Certifica los trabajos realizados.&nbsp;</big></div>\n\n<div style=\"background-color:#5CB900; color:#000000\">&nbsp;</div>\n", "pag_1452538127_205x199.jpg", "CONTROL DE ROEDORES", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("29", "2016-01-14 14:35:34", "2018-02-23 14:07:19", NULL, "1", "49", "FUMIGACIÓNES DE CASAS EN LIMA", "<div style=\"background-color:#5CB900;color:#000000;\"><big>Control y&nbsp;eliminacion de todo tipo de insectos rastreros y voladores, utilizando productos ecol&oacute;gicos y biol&oacute;gicos minimizando los riesgos de contaminacion y salud ambiental, se realiza mediante la determinacion, identificacion y diagn&oacute;stico del problema, determinando el nivel y/o grado de infestacion, se realizar&aacute; los&nbsp;servicios de fumigacion de control&nbsp;qu&iacute;mico usando insecticidas que vienen ser aplicados por m&eacute;todos de aspersion y pulverizacion, aplicacion de Combat Gel y otros metodos de control f&iacute;sicos.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\">&nbsp;</div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>Los insecticidas a aplicar son completamente at&oacute;xicos autorizados por el Ministerio de Salud para ser usados en salud p&uacute;blica e industrial&nbsp;de baja toxicidad. Controlando todo tipo de insectos como: Polillas de madera, polillas de planta, ara&ntilde;a, moscas, mosquitos, zancudos, cucarachas, pulgas, piojillo de paloma, garrapatas hormigas, y otros insectos rastreros y voladores.</big></div>\n\n<div style=\"background-color:#5CB900;color:#000000;\"><big>.</big></div>\n\n<p>&nbsp;</p>\n\n<h2>&nbsp;</h2>\n", "pag_1452800133_1156x600.jpg", "FUMIGACION DE CASAS EN LIMA", "1", "2", NULL);
#
#
INSERT INTO `paginas` VALUES ("31", "2018-03-05 14:43:44", "0000-00-00 00:00:00", NULL, "1", NULL, "producto 1", "<p>uno</p>\n", NULL, NULL, "1", "12", NULL);
#
#
DROP TABLE IF EXISTS `paginas_groups`;
#
#
CREATE TABLE `paginas_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `url` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("1", "2015-08-19 16:49:42", "2015-08-19 17:14:34", NULL, "1", NULL, "Empresa", "1", "empresa");
#
#
INSERT INTO `paginas_groups` VALUES ("2", "2015-08-19 16:49:46", "2018-02-28 07:09:29", NULL, "1", NULL, "Servicios", "1", "servicio-fumigaciones");
#
#
INSERT INTO `paginas_groups` VALUES ("7", "2015-08-20 17:29:31", "2015-08-20 17:30:03", NULL, "1", NULL, "Bloques de Home", "1", "home");
#
#
INSERT INTO `paginas_groups` VALUES ("8", "2015-08-20 17:29:31", "2015-08-20 17:29:55", NULL, "1", NULL, "Capacitaciones", "1", "capacitaciones");
#
#
INSERT INTO `paginas_groups` VALUES ("12", "2015-09-17 11:11:19", "2018-03-05 14:48:10", NULL, "1", NULL, "Productos", "1", "products-fumigaciones");
#
#
INSERT INTO `paginas_groups` VALUES ("10", "2015-09-17 11:05:38", "2015-09-17 12:09:08", NULL, "1", NULL, "Limpieza", "1", "servicio-limpieza");
#
#
DROP TABLE IF EXISTS `projects`;
#
#
CREATE TABLE `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects` VALUES ("1", "2015-08-27 20:19:18", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "2015-08-27 20:18:08", "EXTINTORES DE POLVO QUIMICO SECO TIPO ABC DE O1 KG", NULL, "<p>&bull; Estos extintores tiene una botella externa impulsora de gas carb&oacute;nico, Sus llantas semineum&aacute;ticas permiten a una persona transportarlos por pasillos angostos, puertas y &aacute;reas confinadas.<br />\n<br />\n&bull; Los qu&iacute;micos y la presi&oacute;n est&aacute;n selladas en el agente cil&iacute;ndrico, listos para su r&aacute;pida descarga.</p>\n", "1");
#
#
DROP TABLE IF EXISTS `projects_groups`;
#
#
CREATE TABLE `projects_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects_groups` VALUES ("3", "2015-08-28 12:34:09", "0000-00-00 00:00:00", NULL, "1", NULL, "RETARDANTE DE FUEGO", "1");
#
#
DROP TABLE IF EXISTS `projects_photos`;
#
#
CREATE TABLE `projects_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects_photos` VALUES ("1", "2015-08-27 20:21:47", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "profot_1440724907_199x250.jpg", " 		  EXTINTORES DE POLVO QUIMICO SECO TIPO ABC DE O1 KG ", "1");
#
#
DROP TABLE IF EXISTS `usuarios_acceso`;
#
#
CREATE TABLE `usuarios_acceso` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `id_permisos` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `usuarios_acceso` VALUES ("1", "2015-08-19 09:56:41", "0000-00-00 00:00:00", NULL, "1", "administrador", "fumigaciones", NULL);
#
#
DROP TABLE IF EXISTS `usuarios_permisos`;
#
#
CREATE TABLE `usuarios_permisos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `multiusuario` varchar(80) DEFAULT NULL,
  `per_pages` longtext,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `variables`;
#
#
CREATE TABLE `variables` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `variable` varchar(80) DEFAULT NULL,
  `valor` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
