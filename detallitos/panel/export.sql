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
  `file` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos` VALUES ("1", "2016-02-11 20:34:48", "0000-00-00 00:00:00", NULL, "1", "banner_main", NULL, "1", NULL);
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
  `weight` float DEFAULT NULL,
  `url` varchar(160) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `bg` varchar(80) DEFAULT NULL,
  `bgmovil` varchar(80) DEFAULT NULL,
  `foto_descripcion` varchar(160) DEFAULT NULL,
  `filecentro` varchar(80) DEFAULT NULL,
  `texto2` varchar(160) DEFAULT NULL,
  `texto3` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("54", "2016-09-19 11:17:05", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1474301825_1088x458.png", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("55", "2016-09-19 11:17:18", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1474301838_1088x458.png", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("56", "2016-09-19 11:17:29", "2016-09-19 11:18:31", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1474301911_1088x458.png", NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `configuraciones` VALUES ("1", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "emails_publicos", "asiste@asiste.pe");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "asiste@asiste.pe");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
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
INSERT INTO `configuraciones_root` VALUES ("1", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "titulo_home", "asiste");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "email_fromname", "asiste");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "email_from", "asiste@asiste.pe");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "nombre_empresa", "asiste");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "titulo_web", "asiste");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `galleries_clientes`;
#
#
CREATE TABLE `galleries_clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_clientes` VALUES ("22", "2016-06-27 15:28:34", "0000-00-00 00:00:00", NULL, "1", "2", "galfot_1467059314_866x650.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("33", "2016-06-27 15:30:19", "2016-06-27 15:42:38", NULL, "1", "4", "galfot_1467059419_500x165.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("41", "2016-06-27 15:41:10", "2016-06-27 15:42:09", NULL, "1", "13", "galfot_1467060070_359x166.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("24", "2016-06-27 15:28:58", "2016-06-27 15:42:46", NULL, "1", "3", "galfot_1467059338_350x350.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("39", "2016-06-27 15:37:24", "0000-00-00 00:00:00", NULL, "1", "5", "galfot_1467059844_262x115.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("26", "2016-06-27 15:29:14", "0000-00-00 00:00:00", NULL, "1", "6", "galfot_1467059353_1280x616.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("27", "2016-06-27 15:29:20", "0000-00-00 00:00:00", NULL, "1", "7", "galfot_1467059360_320x182.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("28", "2016-06-27 15:29:27", "0000-00-00 00:00:00", NULL, "1", "8", "galfot_1467059367_280x168.gif", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("38", "2016-06-27 15:36:32", "0000-00-00 00:00:00", NULL, "1", "9", "galfot_1467059792_314x138.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("30", "2016-06-27 15:29:55", "0000-00-00 00:00:00", NULL, "1", "10", "galfot_1467059395_1749x622.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("31", "2016-06-27 15:30:07", "0000-00-00 00:00:00", NULL, "1", "11", "galfot_1467059407_1308x520.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("32", "2016-06-27 15:30:14", "0000-00-00 00:00:00", NULL, "1", "12", "galfot_1467059414_500x145.png", NULL, NULL, "1");
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
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos` VALUES ("1", "2016-02-11 17:11:53", "2016-11-28 08:59:18", NULL, "1", "clientes", "0000-00-00 00:00:00", "Promociones", "<p>Algunos de nuestros eventos</p>\n", "1");
#
#
INSERT INTO `galleries_photos` VALUES ("2", "2016-02-11 17:11:53", "2016-07-20 09:28:44", NULL, "0", "promociones", "0000-00-00 00:00:00", NULL, "<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\n\n<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\n", "1");
#
#
INSERT INTO `galleries_photos` VALUES ("3", "2016-07-20 09:24:30", "2016-07-20 09:31:31", NULL, "0", NULL, "0000-00-00 00:00:00", "Pagina en Mantenimiento", "<p>Lo Sentimos la Pagina se encuentra en mantenimiento.</p>\n", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("30", "2016-11-28 09:02:47", "2016-11-28 11:05:57", NULL, "1", NULL, "1", "galfot_1480341766_347x347.jpg", "Promocion 1", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("31", "2016-11-28 09:02:56", "2016-11-28 11:05:50", NULL, "1", NULL, "1", "galfot_1480341776_347x347.jpg", "Promocion 2", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("32", "2016-11-28 09:03:08", "2016-11-28 11:05:44", NULL, "1", NULL, "1", "galfot_1480341787_347x347.jpg", "Promocion 3", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos` VALUES ("1", "2015-08-14 08:34:05", "2015-08-17 09:50:46", NULL, "1", "galeria-videos", NULL, "Videos", "1", NULL);
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
  `id_grupo` int(10) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos_videos` VALUES ("16", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "1", "PROMO", "AhM8QWRgma0", "1", "90");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("18", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "1", "TEVA", "aOEXdPE38FY", "1", "80");
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `links` VALUES ("1", "2015-09-22 16:34:33", "2016-06-04 12:49:01", NULL, "1", "10", "MEF", "http://apps2.mef.gob.pe/consulta-vfp-webapp/consultaExpediente.jspx;jsessionid=0", "1", "links_1465062541_629x167.jpg");
#
#
INSERT INTO `links` VALUES ("2", "2015-09-22 16:34:12", "2016-06-04 12:48:40", NULL, "1", "9", "OSCE", "http://portal.osce.gob.pe/osce/", "1", "links_1465062520_404x171.jpg");
#
#
INSERT INTO `links` VALUES ("3", "2015-09-22 16:33:55", "2016-06-04 12:48:30", NULL, "1", "8", "SUNAT", "http://www.sunat.gob.pe", "1", "links_1465062510_312x76.jpg");
#
#
INSERT INTO `links` VALUES ("4", "2015-09-22 18:32:36", "2016-06-04 12:48:21", NULL, "1", "7", "BCP", "https://www.viabcp.com", "1", "links_1465062501_282x116.jpg");
#
#
INSERT INTO `links` VALUES ("5", "2015-09-22 18:32:22", "2016-06-04 12:48:12", NULL, "1", "6", "EL COMERCIO", "http://elcomercio.pe", "1", "links_1465062492_580x126.jpg");
#
#
INSERT INTO `links` VALUES ("6", "2015-09-22 16:32:33", "2016-06-04 12:48:02", NULL, "1", "5", "GESTION", "http://gestion.pe", "1", "links_1465062482_300x100.jpg");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `id_grupo` int(10) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-02-26 12:34:03", "2016-12-06 13:16:41", NULL, "1", NULL, NULL, "Bienvenido a Detallitos Mathias", "Somos una empresa especializada en brindar asesoría con siete años de experiencia en elaboración de invitaciones y recuerdos para todo tipo de eventos, integrada por un equipo de profesionales que garantizan un servicio eficiente y a la medida de las necesidades de nuestros clientes.\nLa compañía trabaja con pequeños detalles que se convierten en grandes regalos a los invitados para el matrimonio. La empresa cuenta con un amplio catálogo de productos para que su fiesta sea tal y como siempre quisieron, dejando un bonito recuerdo en la memoria de los invitados.\n", NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("20", "2016-05-27 15:09:40", "2016-11-27 13:07:13", NULL, "1", "1", "100", "Empresa 1", NULL, "<h2>Nosotros</h2>\n\n<p>Somos una empresa peruana con amplia trayectoria que se dedica a la elaboraci&oacute;n de todo tipo de&nbsp;<strong>manualidades</strong>. En&nbsp;<strong>Detallitos Mathias.</strong>Ofrecemos modelos personalizados.</p>\n\n<h2>Lo que brindamos</h2>\n\n<p>Todos los productos que comercializamos son hechos a mano. En nuestra empresa encontrar&aacute; una gran variedad de&nbsp;<strong>recuerdos</strong>,<strong>cuadros</strong>, etc. Atendemos al p&uacute;blico en general.</p>\n\n<p>Atenci&oacute;n personalizada en cada trabajo que realizamos</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("43", "2016-11-27 13:07:01", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "Empresa 2", NULL, "<h2>What is Lorem Ipsum?</h2>\n\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n", NULL, NULL, "1");
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
  `id_grupo` int(10) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("1", "2016-02-24 16:13:46", "2016-06-13 21:56:18", NULL, "1", NULL, NULL, "empresa", "Empresa", "1");
#
#
DROP TABLE IF EXISTS `paginas_photos`;
#
#
CREATE TABLE `paginas_photos` (
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `project_galleries_photos`;
#
#
CREATE TABLE `project_galleries_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  `text` longtext,
  `foto` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `project_galleries_photos` VALUES ("1", "2016-11-07 03:56:38", "2016-12-02 10:12:11", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Partes Matrimoniales", "<h2>What is Lorem Ipsum?</h2>\n\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n\n<p>&nbsp;</p>\n", "1", NULL, "ser_imas_1480365716_1088x458.png", NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("2", "2016-11-07 03:56:56", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Quince Años", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("3", "2016-11-07 03:57:01", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Baby Shower", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("4", "2016-11-07 03:57:11", "2016-11-07 03:57:19", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Bautizos", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("5", "2016-11-07 03:57:30", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Primera Comunión", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("6", "2016-11-07 03:57:39", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Capillos", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("7", "2016-11-07 03:57:50", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Cumpleaños en General", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("8", "2016-11-07 03:58:05", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Cumpleaños de Niños", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("9", "2016-11-07 03:58:55", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Rcdo. Partes Matr.", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("10", "2016-11-07 03:59:02", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Rcdo. Quince Años", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("11", "2016-11-07 03:59:10", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Rcdo. Baby Shower", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("12", "2016-11-07 03:59:16", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Rcdo. Bautizos", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("13", "2016-11-07 03:59:27", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Rcdo. Niños", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("14", "2016-11-07 04:00:06", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Facturas", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("15", "2016-11-07 04:00:15", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Boletas", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("16", "2016-11-07 04:00:25", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Guia Remision", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("17", "2016-11-07 04:00:33", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Notas Cred / Deb", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("18", "2016-11-07 04:00:43", "2016-11-07 04:00:51", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Recibo Honorarios", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("19", "2016-11-07 04:00:59", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "0000-00-00 00:00:00", "Otros", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("20", "2016-12-01 11:18:15", "0000-00-00 00:00:00", NULL, "1", "5", NULL, "0000-00-00 00:00:00", "Decoraciones", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("21", "2016-12-01 11:39:44", "0000-00-00 00:00:00", NULL, "1", "5", NULL, "0000-00-00 00:00:00", "Tarjetas Personalizadas", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("22", "2016-12-01 11:40:18", "0000-00-00 00:00:00", NULL, "1", "5", NULL, "0000-00-00 00:00:00", "Bolsas y Envases", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("23", "2016-12-12 16:08:58", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "0000-00-00 00:00:00", "uno", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("24", "2016-12-12 16:09:05", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "0000-00-00 00:00:00", "dos", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("25", "2016-12-12 16:09:28", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "0000-00-00 00:00:00", "tres", NULL, "1", NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("26", "2016-12-12 16:09:33", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "0000-00-00 00:00:00", "cuatro", NULL, "1", NULL, NULL, NULL);
#
#
DROP TABLE IF EXISTS `project_galleries_photos_photos`;
#
#
CREATE TABLE `project_galleries_photos_photos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("1", "2016-11-07 04:08:53", "2016-11-07 04:11:19", NULL, "1", NULL, "1", "galfot_1478509732_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("2", "2016-11-07 04:08:57", "2016-11-07 04:11:16", NULL, "1", NULL, "1", "galfot_1478509737_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("3", "2016-11-07 04:09:09", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509749_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("4", "2016-11-07 04:09:17", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509757_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("5", "2016-11-07 04:09:26", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509766_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("6", "2016-11-07 04:09:34", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509774_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("7", "2016-11-07 04:09:43", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509783_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("8", "2016-11-07 04:09:52", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509792_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("9", "2016-11-07 04:10:00", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509800_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("10", "2016-11-07 04:10:07", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509806_270x160.jpg", "modelo 10", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("11", "2016-11-07 04:10:15", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509815_270x160.jpg", "modelo 11", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("12", "2016-11-07 04:10:26", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509825_270x160.jpg", "modelo 12", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("13", "2016-11-07 04:10:34", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509834_270x160.jpg", "modelo 13", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("14", "2016-11-07 04:10:50", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509850_270x160.jpg", "modelo 14", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("15", "2016-11-07 04:11:00", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509860_270x160.jpg", "modelo 15", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("16", "2016-11-07 04:11:09", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478509869_270x160.jpg", "modelo 16", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("17", "2016-11-07 04:16:37", "2016-11-07 04:17:22", NULL, "1", NULL, "1", "galfot_1478510197_270x160.jpg", "modelo 17", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("18", "2016-11-07 04:17:33", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510253_270x160.jpg", "modelo 18", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("19", "2016-11-07 04:17:42", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510262_270x160.jpg", "modelo 19", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("20", "2016-11-07 04:17:49", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510269_270x160.jpg", "modelo 20", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("21", "2016-11-07 04:17:58", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510278_270x160.jpg", "modelo 21", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("22", "2016-11-07 04:18:08", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510288_270x160.jpg", "modelo 22", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("23", "2016-11-07 04:18:15", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510295_270x160.jpg", "modelo 23", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("24", "2016-11-07 04:18:22", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510302_270x160.jpg", "modelo 24", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("25", "2016-11-07 04:18:30", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510310_270x160.jpg", "modelo 25", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("26", "2016-11-07 04:18:37", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510317_270x160.jpg", "modelo 26", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("27", "2016-11-07 04:18:47", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510327_270x160.jpg", "modelo 27", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("28", "2016-11-07 04:18:55", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510335_270x160.jpg", "modelo 28", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("29", "2016-11-07 04:19:08", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510348_270x160.jpg", "modelo 29", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("30", "2016-11-07 04:19:16", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510356_270x160.jpg", "modelo 30", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("31", "2016-11-07 04:19:23", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510363_270x160.jpg", "modelo 31", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("32", "2016-11-07 04:19:31", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510371_270x160.jpg", "modelo 32", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("33", "2016-11-07 04:19:38", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510378_270x160.jpg", "modelo 33", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("34", "2016-11-07 04:19:46", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510386_270x160.jpg", "modelo 34", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("35", "2016-11-07 04:19:53", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510393_270x160.jpg", "modelo 35", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("36", "2016-11-07 04:20:02", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510402_270x160.jpg", "modelo 36", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("37", "2016-11-07 04:20:11", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510411_270x160.jpg", "modelo 37", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("38", "2016-11-07 04:20:20", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510420_270x160.jpg", "modelo 38", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("39", "2016-11-07 04:20:29", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510429_270x160.jpg", "modelo 39", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("40", "2016-11-07 04:20:38", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510438_270x160.jpg", "modelo 40", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("41", "2016-11-07 04:20:49", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510449_270x160.jpg", "modelo 41", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("42", "2016-11-07 04:20:58", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510458_270x160.jpg", "modelo 42", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("43", "2016-11-07 04:21:07", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510467_270x160.jpg", "modelo 43", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("44", "2016-11-07 04:21:17", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1478510477_270x160.jpg", "modelo 44", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("45", "2016-11-07 04:23:45", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510625_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("46", "2016-11-07 04:23:52", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510632_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("47", "2016-11-07 04:23:59", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510639_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("48", "2016-11-07 04:24:07", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510647_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("49", "2016-11-07 04:24:13", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510653_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("50", "2016-11-07 04:24:20", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510660_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("51", "2016-11-07 04:24:28", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510668_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("52", "2016-11-07 04:24:38", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1478510678_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("53", "2016-11-07 04:31:04", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511064_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("54", "2016-11-07 04:31:10", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511070_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("55", "2016-11-07 04:31:17", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511077_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("56", "2016-11-07 04:31:24", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511084_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("57", "2016-11-07 04:31:30", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511090_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("58", "2016-11-07 04:31:38", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511098_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("59", "2016-11-07 04:31:44", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1478511104_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("60", "2016-11-07 04:32:12", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511132_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("61", "2016-11-07 04:32:20", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511140_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("62", "2016-11-07 04:32:28", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511148_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("63", "2016-11-07 04:32:34", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511154_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("64", "2016-11-07 04:32:42", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511162_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("65", "2016-11-07 04:32:49", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511169_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("67", "2016-11-07 04:33:09", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511189_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("68", "2016-11-07 04:33:17", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511197_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("69", "2016-11-07 04:33:26", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511206_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("70", "2016-11-07 04:33:33", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511213_270x160.jpg", "modelo 10", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("71", "2016-11-07 04:33:39", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511219_270x160.jpg", "modelo 11", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("72", "2016-11-07 04:33:48", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "galfot_1478511228_270x160.jpg", "modelo 12", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("73", "2016-11-07 04:34:13", "2016-11-07 04:34:32", NULL, "1", NULL, "5", "galfot_1478511252_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("74", "2016-11-07 04:34:21", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1478511261_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("75", "2016-11-07 04:34:27", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "galfot_1478511267_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("76", "2016-11-07 04:34:55", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511295_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("77", "2016-11-07 04:35:02", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511302_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("78", "2016-11-07 04:35:09", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511309_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("79", "2016-11-07 04:35:16", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511316_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("80", "2016-11-07 04:35:22", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511322_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("81", "2016-11-07 04:35:30", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511330_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("82", "2016-11-07 04:35:37", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511337_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("83", "2016-11-07 04:35:44", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511344_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("84", "2016-11-07 04:35:50", "0000-00-00 00:00:00", NULL, "1", NULL, "6", "galfot_1478511350_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("85", "2016-11-07 04:36:14", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511374_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("86", "2016-11-07 04:36:20", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511380_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("87", "2016-11-07 04:36:26", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511386_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("88", "2016-11-07 04:36:33", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511393_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("89", "2016-11-07 04:36:40", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511400_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("90", "2016-11-07 04:36:47", "0000-00-00 00:00:00", NULL, "1", NULL, "7", "galfot_1478511407_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("91", "2016-11-07 04:37:06", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511426_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("92", "2016-11-07 04:37:13", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511433_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("93", "2016-11-07 04:37:22", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511442_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("94", "2016-11-07 04:37:29", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511449_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("95", "2016-11-07 04:37:35", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511454_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("96", "2016-11-07 04:37:41", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511461_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("97", "2016-11-07 04:37:48", "0000-00-00 00:00:00", NULL, "1", NULL, "8", "galfot_1478511468_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("98", "2016-11-07 04:44:05", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511845_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("99", "2016-11-07 04:44:13", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511853_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("100", "2016-11-07 04:44:19", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511859_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("101", "2016-11-07 04:44:25", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511865_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("102", "2016-11-07 04:44:32", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511871_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("103", "2016-11-07 04:44:38", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511878_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("104", "2016-11-07 04:44:44", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511884_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("105", "2016-11-07 04:44:51", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511891_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("106", "2016-11-07 04:44:57", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511897_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("107", "2016-11-07 04:45:05", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511905_270x160.jpg", "modelo 10", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("108", "2016-11-07 04:45:11", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511911_270x160.jpg", "modelo 11", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("109", "2016-11-07 04:45:18", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511917_270x160.jpg", "modelo 12", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("110", "2016-11-07 04:45:25", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511925_270x160.jpg", "modelo 13", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("111", "2016-11-07 04:45:32", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511931_270x160.jpg", "modelo 14", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("112", "2016-11-07 04:45:39", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511939_270x160.jpg", "modelo 15", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("113", "2016-11-07 04:45:47", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511947_270x160.jpg", "modelo 16", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("114", "2016-11-07 04:45:55", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511955_270x160.jpg", "modelo 17", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("115", "2016-11-07 04:46:04", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511964_270x160.jpg", "modelo 18", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("116", "2016-11-07 04:46:13", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511973_270x160.jpg", "modelo 19", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("117", "2016-11-07 04:46:24", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511984_270x160.jpg", "modelo 20", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("118", "2016-11-07 04:46:32", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511992_270x160.jpg", "modelo 21", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("119", "2016-11-07 04:46:38", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478511998_270x160.jpg", "modelo 22", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("120", "2016-11-07 04:46:45", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512005_270x160.jpg", "modelo 23", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("121", "2016-11-07 04:46:54", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512014_270x160.jpg", "modelo 24", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("122", "2016-11-07 04:47:03", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512023_270x160.jpg", "modelo 25", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("123", "2016-11-07 04:47:11", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512031_270x160.jpg", "modelo 26", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("124", "2016-11-07 04:47:19", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512039_270x160.jpg", "modelo 27", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("125", "2016-11-07 04:47:44", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512063_270x160.jpg", "modelo 28", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("126", "2016-11-07 04:47:54", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512074_270x160.jpg", "modelo 29", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("127", "2016-11-07 04:48:03", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512083_270x160.jpg", "modelo 30", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("128", "2016-11-07 04:48:12", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512092_270x160.jpg", "modelo 31", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("129", "2016-11-07 04:48:19", "0000-00-00 00:00:00", NULL, "1", NULL, "9", "galfot_1478512099_270x160.jpg", "modelo 32", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("130", "2016-11-07 04:48:39", "2016-11-07 04:49:22", NULL, "1", NULL, "10", "galfot_1478512119_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("131", "2016-11-07 04:48:47", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512127_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("132", "2016-11-07 04:48:53", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512133_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("133", "2016-11-07 04:48:59", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512139_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("134", "2016-11-07 04:49:06", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512146_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("135", "2016-11-07 04:49:12", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512152_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("136", "2016-11-07 04:49:18", "0000-00-00 00:00:00", NULL, "1", NULL, "10", "galfot_1478512158_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("137", "2016-11-07 04:49:45", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512184_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("138", "2016-11-07 04:49:50", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512190_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("139", "2016-11-07 04:49:57", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512197_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("140", "2016-11-07 04:50:04", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512203_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("142", "2016-11-07 04:50:23", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512223_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("143", "2016-11-07 04:50:29", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512229_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("144", "2016-11-07 04:50:36", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512236_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("145", "2016-11-07 04:50:42", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512242_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("146", "2016-11-07 04:50:49", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512249_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("147", "2016-11-07 04:50:57", "0000-00-00 00:00:00", NULL, "1", NULL, "11", "galfot_1478512256_270x160.jpg", "modelo 10", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("148", "2016-11-07 04:54:49", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512489_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("149", "2016-11-07 04:54:56", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512495_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("150", "2016-11-07 04:55:02", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512502_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("151", "2016-11-07 04:55:10", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512510_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("152", "2016-11-07 04:55:16", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512516_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("153", "2016-11-07 04:55:22", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512522_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("154", "2016-11-07 04:55:28", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512528_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("155", "2016-11-07 04:55:42", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512542_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("156", "2016-11-07 04:55:49", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512549_270x160.jpg", "modelo 9", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("157", "2016-11-07 04:55:55", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512555_270x160.jpg", "modelo 10", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("158", "2016-11-07 04:56:05", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512565_270x160.jpg", "modelo 11", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("159", "2016-11-07 04:56:14", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512574_270x160.jpg", "modelo 12", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("160", "2016-11-07 04:56:24", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512584_270x160.jpg", "modelo 13", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("161", "2016-11-07 04:56:31", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512591_270x160.jpg", "modelo 14", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("162", "2016-11-07 04:56:39", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512599_270x160.jpg", "modelo 15", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("163", "2016-11-07 04:56:50", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512610_270x160.jpg", "modelo 16", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("164", "2016-11-07 04:56:58", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512618_270x160.jpg", "modelo 17", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("165", "2016-11-07 04:57:08", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512628_270x160.jpg", "modelo 18", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("166", "2016-11-07 04:57:15", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512635_270x160.jpg", "modelo 19", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("168", "2016-11-07 04:57:46", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512666_270x160.jpg", "modelo 20", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("169", "2016-11-07 04:57:57", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512676_270x160.jpg", "modelo 21", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("171", "2016-11-07 04:58:21", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512701_270x160.jpg", "modelo 22", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("172", "2016-11-07 04:58:30", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512710_270x160.jpg", "modelo 23", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("173", "2016-11-07 04:58:38", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512718_270x160.jpg", "modelo 24", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("174", "2016-11-07 04:58:46", "0000-00-00 00:00:00", NULL, "1", NULL, "12", "galfot_1478512726_270x160.jpg", "modelo 25", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("175", "2016-11-07 04:59:18", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512758_270x160.jpg", "modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("176", "2016-11-07 04:59:24", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512764_270x160.jpg", "modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("177", "2016-11-07 04:59:31", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512771_270x160.jpg", "modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("178", "2016-11-07 04:59:38", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512778_270x160.jpg", "modelo 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("179", "2016-11-07 04:59:56", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512796_270x160.jpg", "modelo 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("180", "2016-11-07 05:00:04", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512803_270x160.jpg", "modelo 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("181", "2016-11-07 05:00:11", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512811_270x160.jpg", "modelo 7", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("182", "2016-11-07 05:00:17", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1478512817_270x160.jpg", "modelo 8", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("183", "2016-11-07 05:07:09", "2016-11-07 05:07:17", NULL, "1", NULL, "14", "galfot_1478513229_694x425.jpg", "Factura", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("184", "2016-11-07 05:07:43", "2016-11-07 05:07:47", NULL, "1", NULL, "14", "galfot_1478513263_700x425.jpg", "Boleta", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("185", "2016-11-07 05:08:16", "0000-00-00 00:00:00", NULL, "1", NULL, "15", "galfot_1478513296_700x425.jpg", "Boleta", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("186", "2016-11-07 05:08:34", "2016-11-07 05:08:58", NULL, "1", NULL, "16", "galfot_1478513314_700x425.jpg", "Guía de Remisión 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("187", "2016-11-07 05:08:51", "0000-00-00 00:00:00", NULL, "1", NULL, "16", "galfot_1478513331_700x425.jpg", "Guía de Remisión 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("188", "2016-11-07 05:09:30", "2016-11-07 05:10:00", NULL, "1", NULL, "17", "galfot_1478513370_700x425.jpg", "Notras de Crédito 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("189", "2016-11-07 05:09:55", "2016-11-07 05:10:04", NULL, "1", NULL, "17", "galfot_1478513395_700x425.jpg", "Notras de Crédito 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("190", "2016-11-07 05:10:37", "0000-00-00 00:00:00", NULL, "1", NULL, "18", "galfot_1478513437_700x425.jpg", "Recibos por Honorarios", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("200", "2016-12-01 12:12:02", "2016-12-01 12:12:11", NULL, "1", NULL, "21", "galfot_1480612321_720x960.jpg", "Invitación 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("201", "2016-12-01 12:12:31", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1480612350_960x540.jpg", "Invitación 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("202", "2016-12-01 12:12:44", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1480612364_960x540.jpg", "Invitación 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("195", "2016-12-01 11:58:02", "2016-12-01 11:58:50", NULL, "1", NULL, "20", "galfot_1480611481_960x720.jpg", "Decoración Minios", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("199", "2016-12-01 12:04:54", "0000-00-00 00:00:00", NULL, "1", NULL, "20", "galfot_1480611893_960x720.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("197", "2016-12-01 12:00:53", "0000-00-00 00:00:00", NULL, "1", NULL, "20", "galfot_1480611653_960x720.jpg", "Decoración Gallinita Pintada", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("198", "2016-12-01 12:03:43", "0000-00-00 00:00:00", NULL, "1", NULL, "20", "galfot_1480611823_960x720.jpg", "Decoración Minnie", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("203", "2016-12-01 12:12:58", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1480612378_528x960.jpg", "Invitación 4", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("204", "2016-12-01 12:13:12", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1480612392_960x540.jpg", "Invitación 5", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("205", "2016-12-01 12:13:24", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1480612404_960x540.jpg", "Invitación 6", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("206", "2016-12-01 12:14:34", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1480612474_952x960.jpg", "Modelo 1", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("207", "2016-12-01 12:14:46", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1480612486_960x720.jpg", "Modelo 2", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("208", "2016-12-01 12:14:57", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1480612497_528x960.jpg", "Modelo 3", "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("209", "2016-12-01 12:16:00", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1480612560_960x720.jpg", "Modelo 4", "1");
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
  `file` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects` VALUES ("1", "2016-11-06 10:57:11", "2016-12-11 19:54:29", NULL, "1", "150", NULL, "0000-00-00 00:00:00", "Partes de Matrimonio", "Te presentamos nuestro producto con variedad de propuesta de Materiales finos para la  elaboración ya que nuestro equipo Detallitos Mathias donde te mostramos una alternativa de agregar a tus invitaciones tu color favorito.", NULL, "1", "pro_1480028294_270x160.jpg", "Invitaciones");
#
#
INSERT INTO `projects` VALUES ("2", "2016-11-06 10:57:17", "2016-11-24 22:54:02", NULL, "1", NULL, "0", "0000-00-00 00:00:00", "Recuerdos", "Toda la variedad de Recuerdos para diferentes ocaciones en diferentes tipos de material finos, con los mejores acabados hechos a manos", NULL, "1", "pro_1480028462_270x160.jpg", "recuerdos");
#
#
INSERT INTO `projects` VALUES ("3", "2016-11-06 10:57:24", "2016-11-24 22:54:11", NULL, "1", NULL, "0", "0000-00-00 00:00:00", "Comprobantes", "Elaboración de Formatos Membretes, sobres y comprobantes de pagos autorizados por la Sunat como Facturas, Boletas, Guias", NULL, "1", "pro_1480028579_694x425.jpg", "comprobantes");
#
#
INSERT INTO `projects` VALUES ("4", "2016-11-06 10:57:44", "2016-11-24 22:54:22", NULL, "1", NULL, "0", "0000-00-00 00:00:00", "Otros", "Elaboración de Libros, Revistas, Volantes, Gigantograafías, Agendas, Almanaques, Cuadernos de Control, Lapiceros, Fotochecks", NULL, "1", "pro_1480028663_270x160.jpg", "otros");
#
#
INSERT INTO `projects` VALUES ("5", "2016-12-01 11:09:11", "2016-12-02 10:08:39", NULL, "1", "100", NULL, "0000-00-00 00:00:00", "Deco Mathias", NULL, NULL, "1", NULL, "deco-mathias");
#
#
INSERT INTO `projects` VALUES ("6", "2016-12-11 10:29:34", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "0000-00-00 00:00:00", "sub partes 1", NULL, NULL, "1", NULL, "sub_partes_1");
#
#
INSERT INTO `projects` VALUES ("7", "2016-12-11 10:30:13", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "0000-00-00 00:00:00", "sub partes 2", NULL, NULL, "1", NULL, "sub_partes_2");
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects_groups` VALUES ("1", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "servicios", "1");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `testimonios`;
#
#
CREATE TABLE `testimonios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `file_banner` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `testimonios` VALUES ("1", "2016-11-28 09:13:27", "2016-12-02 10:16:10", NULL, "1", NULL, "0000-00-00 00:00:00", "Testimonio 1", "tesfot_1480342407_960x709.jpg", "tesban_1480342407_1812x426.jpg", "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2016-02-02 09:43:40", "2016-11-23 17:43:22", NULL, "1", "administrador", "detallitos", NULL);
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
