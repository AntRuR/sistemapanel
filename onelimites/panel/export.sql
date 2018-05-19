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
INSERT INTO `banners_fotos` VALUES ("1", "2016-02-11 20:34:48", "0000-00-00 00:00:00", NULL, "1", "banner_main", "Banners", "1", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("82", "2017-02-07 18:28:43", "2017-02-15 11:23:20", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1487175800_1920x800.jpg", NULL, NULL, NULL, NULL, NULL);
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
DROP TABLE IF EXISTS `feedback`;
#
#
CREATE TABLE `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `proyecto` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `motivo` varchar(80) DEFAULT NULL,
  `comentario` varchar(800) DEFAULT NULL,
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
INSERT INTO `galleries_photos` VALUES ("2", "2016-02-11 17:11:53", "2016-12-05 00:56:58", NULL, "1", "clientes", "0000-00-00 00:00:00", "Clientes", "<p>Algunos de nuestros eventos</p>\n", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("66", "2017-02-06 19:26:48", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427207_500x329.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("67", "2017-02-06 19:26:55", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427215_500x104.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("68", "2017-02-06 19:27:04", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427224_300x91.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("69", "2017-02-06 19:27:12", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427232_500x157.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("70", "2017-02-06 19:27:21", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427240_400x185.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("71", "2017-02-06 19:27:30", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427250_496x442.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("72", "2017-02-06 19:27:39", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427259_500x154.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("73", "2017-02-06 19:27:58", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1486427278_500x218.jpg", NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-02-26 12:34:03", "2017-02-15 10:51:25", NULL, "1", NULL, NULL, "Bienvenidos", "Somos One Sin Límites10 años al servicio, nos ha permitido lograr ser calificados y reconocidos como una gran empresa en la comercialización de productos deportivos.\n\nToda esta experiencia, nos da la solidez para trabajar con clientes como ustedes, porque sabemos de sus exigencias.\n\nGracias por visitar nuestra web y esperamos que sea de su utilidad.", "<p>Somos One Sin L&iacute;mites10 a&ntilde;os al servicio, nos ha permitido lograr ser calificados y reconocidos como una gran empresa en la comercializaci&oacute;n de productos deportivos.</p>\n\n<p>Toda esta experiencia, nos da la solidez para trabajar con clientes como ustedes, porque sabemos de sus exigencias.</p>\n\n<p>Gracias por visitar nuestra web y esperamos que sea de su utilidad.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2016-05-27 15:09:40", "2016-12-30 08:32:36", NULL, "1", NULL, NULL, "Servicios", NULL, "<h2><strong>Visi&oacute;n</strong></h2>\n\n<p>Procuramos ser una empresa l&iacute;der en el sector inform&aacute;tico que trabaja con Honestidad y Diligencia, brindando un servicio diferenciado en cada una de nuestras unidades de negocio.</p>\n\n<h2><strong>Misi&oacute;n</strong></h2>\n\n<p>Proporcionamos soluciones oportunas e integrales ofreciendo productos y servicios de Tecnolog&iacute;a Inform&aacute;tica, que genere &oacute;ptimos resultados y relaciones de largo plazo con nuestros clientes y a trav&eacute;s de un staff de especialistas, comprometidos con los valores de la empresa.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2016-11-27 13:07:01", "2017-02-15 10:49:24", NULL, "1", "1", NULL, "Empresa", NULL, "<p><strong>MISION</strong></p>\n\n<p>Somos una empresa comercial de art&iacute;culos deportivos que busca satisfacer y exceder las necesidades y expectativas del cliente minorista y mayorista, ofreci&eacute;ndole productos de calidad y un precio justo.</p>\n\n<p><strong>VISION</strong></p>\n\n<p>Ser la empresa comercial l&iacute;der en el mercado de art&iacute;culos deportivos a nivel nacional, destacando por la calidad y variedad de nuestros productos y el buen servicio al cliente de nuestros colaboradores.</p>\n\n<p><strong>VALORES</strong></p>\n\n<p>- DISCIPLINA<br />\n- TRABAJO EN EQUIPO<br />\n- PROACTIVIDAD<br />\n- TRANSPARENCIA</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("54", "2017-02-17 16:48:43", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "Empresa 2", NULL, NULL, NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("1", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "empresa", "Empresa", "1");
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
DROP TABLE IF EXISTS `productos_filtros`;
#
#
CREATE TABLE `productos_filtros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=302 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_filtros` VALUES ("19", "2010-11-08 21:49:23", "0000-00-00 00:00:00", NULL, "1", "Chocolates", "5");
#
#
INSERT INTO `productos_filtros` VALUES ("20", "2010-11-08 21:49:30", "0000-00-00 00:00:00", NULL, "1", "Bombones", "5");
#
#
INSERT INTO `productos_filtros` VALUES ("21", "2010-11-08 21:49:39", "0000-00-00 00:00:00", NULL, "1", "Caramelos Publicitarios", "5");
#
#
INSERT INTO `productos_filtros` VALUES ("22", "2010-11-08 21:49:51", "0000-00-00 00:00:00", NULL, "1", "Regalos con Golosinas", "5");
#
#
INSERT INTO `productos_filtros` VALUES ("23", "2010-11-08 21:51:47", "0000-00-00 00:00:00", NULL, "1", "Bolsos", "3");
#
#
INSERT INTO `productos_filtros` VALUES ("24", "2010-11-08 21:51:52", "0000-00-00 00:00:00", NULL, "1", "Carteras", "3");
#
#
INSERT INTO `productos_filtros` VALUES ("25", "2010-11-08 21:52:01", "2010-11-08 21:52:16", NULL, "1", "Billeteras para damas", "3");
#
#
INSERT INTO `productos_filtros` VALUES ("30", "2010-11-09 00:33:17", "0000-00-00 00:00:00", NULL, "1", "Sublime", "1");
#
#
INSERT INTO `productos_filtros` VALUES ("31", "2010-11-09 00:33:22", "0000-00-00 00:00:00", NULL, "1", "Sorrento", "1");
#
#
INSERT INTO `productos_filtros` VALUES ("32", "2010-11-09 00:33:34", "0000-00-00 00:00:00", NULL, "1", "Princesa", "1");
#
#
INSERT INTO `productos_filtros` VALUES ("33", "2010-11-09 00:33:55", "0000-00-00 00:00:00", NULL, "1", "Triángulo", "1");
#
#
INSERT INTO `productos_filtros` VALUES ("68", "2011-01-12 16:48:43", "0000-00-00 00:00:00", NULL, "1", "conjuntos", "41");
#
#
INSERT INTO `productos_filtros` VALUES ("69", "2011-01-12 16:48:57", "0000-00-00 00:00:00", NULL, "1", "Vestidos", "41");
#
#
INSERT INTO `productos_filtros` VALUES ("75", "2011-01-12 16:52:34", "0000-00-00 00:00:00", NULL, "1", "vestidos", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("76", "2011-01-12 16:52:40", "0000-00-00 00:00:00", NULL, "1", "Conjuntos", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("77", "2011-01-12 16:52:52", "0000-00-00 00:00:00", NULL, "1", "Faldas", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("78", "2011-01-12 16:52:58", "0000-00-00 00:00:00", NULL, "1", "shorts", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("79", "2011-01-12 16:53:04", "0000-00-00 00:00:00", NULL, "1", "Polos", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("80", "2011-01-12 16:53:13", "0000-00-00 00:00:00", NULL, "1", "Pijamas", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("83", "2011-01-12 16:54:46", "0000-00-00 00:00:00", NULL, "1", "Pantalones", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("84", "2011-01-12 16:54:53", "0000-00-00 00:00:00", NULL, "1", "Buzos", "44");
#
#
INSERT INTO `productos_filtros` VALUES ("173", "2011-01-12 23:42:28", "0000-00-00 00:00:00", NULL, "1", "4 en 1", "58");
#
#
INSERT INTO `productos_filtros` VALUES ("174", "2011-01-12 23:42:38", "0000-00-00 00:00:00", NULL, "1", "De Paseo", "58");
#
#
INSERT INTO `productos_filtros` VALUES ("175", "2011-01-12 23:42:56", "0000-00-00 00:00:00", NULL, "1", "Deportivos", "58");
#
#
INSERT INTO `productos_filtros` VALUES ("176", "2011-01-12 23:43:02", "0000-00-00 00:00:00", NULL, "1", "Melliceros", "58");
#
#
INSERT INTO `productos_filtros` VALUES ("177", "2011-01-12 23:43:47", "0000-00-00 00:00:00", NULL, "1", "Portatiles", "59");
#
#
INSERT INTO `productos_filtros` VALUES ("178", "2011-01-12 23:43:55", "0000-00-00 00:00:00", NULL, "1", "2 En 1", "59");
#
#
INSERT INTO `productos_filtros` VALUES ("179", "2011-01-12 23:44:32", "0000-00-00 00:00:00", NULL, "1", "Melliceros", "60");
#
#
INSERT INTO `productos_filtros` VALUES ("180", "2011-01-12 23:44:51", "0000-00-00 00:00:00", NULL, "1", "Corral / Cuna", "60");
#
#
INSERT INTO `productos_filtros` VALUES ("181", "2011-01-12 23:45:38", "2011-01-12 23:46:45", NULL, "1", "De 0 a 7 meses", "61");
#
#
INSERT INTO `productos_filtros` VALUES ("182", "2011-01-12 23:46:32", "0000-00-00 00:00:00", NULL, "1", "De 7 Meses a 3 Años", "61");
#
#
INSERT INTO `productos_filtros` VALUES ("183", "2011-01-12 23:46:56", "0000-00-00 00:00:00", NULL, "1", "De 3 Años a mas", "61");
#
#
INSERT INTO `productos_filtros` VALUES ("184", "2011-01-16 09:00:12", "2011-01-16 09:00:20", NULL, "1", "Accesorios para camiones IncaPower", "62");
#
#
INSERT INTO `productos_filtros` VALUES ("185", "2011-01-16 09:00:37", "0000-00-00 00:00:00", NULL, "1", "Acesorios para camiones Delta", "62");
#
#
INSERT INTO `productos_filtros` VALUES ("186", "2011-01-16 09:02:20", "0000-00-00 00:00:00", NULL, "1", "Accesorios para camionetas Terios", "63");
#
#
INSERT INTO `productos_filtros` VALUES ("187", "2011-01-16 09:02:53", "0000-00-00 00:00:00", NULL, "1", "Accesorios para camionetas Toyota", "63");
#
#
INSERT INTO `productos_filtros` VALUES ("188", "2011-01-16 09:04:20", "0000-00-00 00:00:00", NULL, "1", "Accesorios para camionetas Pick Up Baw", "63");
#
#
INSERT INTO `productos_filtros` VALUES ("296", "2013-03-22 13:36:53", "0000-00-00 00:00:00", NULL, "1", "Antioxidantes", "170");
#
#
INSERT INTO `productos_filtros` VALUES ("297", "2013-03-22 13:37:13", "0000-00-00 00:00:00", NULL, "1", "Energizantes", "170");
#
#
INSERT INTO `productos_filtros` VALUES ("298", "2013-03-22 13:37:41", "0000-00-00 00:00:00", NULL, "1", "Nutrición General", "170");
#
#
INSERT INTO `productos_filtros` VALUES ("299", "2013-03-22 13:37:52", "0000-00-00 00:00:00", NULL, "1", "Café", "170");
#
#
INSERT INTO `productos_filtros` VALUES ("300", "2013-03-22 13:38:11", "0000-00-00 00:00:00", NULL, "1", "Piel", "170");
#
#
INSERT INTO `productos_filtros` VALUES ("301", "2013-03-22 13:38:16", "0000-00-00 00:00:00", NULL, "0", "Cabello", "170");
#
#
DROP TABLE IF EXISTS `productos_fotos`;
#
#
CREATE TABLE `productos_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2234 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos` VALUES ("1", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 34090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("3", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 67995 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("4", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 16327 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("5", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41919 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("7", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 47090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("8", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 92552 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("9", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 80177 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("13", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 59486 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("14", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 90669 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("16", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 42621 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("21", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 89136 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("22", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "18", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 54806 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("24", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "16", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 10816 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("25", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 20008 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("26", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 38133 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("28", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 12312 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("29", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 75731 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("31", "2013-03-22 14:22:36", "2010-11-07 21:30:24", NULL, "1", "12", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85733 Lorem ipsum dolor sit amet, consectetur adipiscing");
#
#
INSERT INTO `productos_fotos` VALUES ("33", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "11", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 18426 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("35", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "9", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 27871 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("36", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 6464 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos` VALUES ("37", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 48993 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("41", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85434 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("43", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 2520 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos` VALUES ("44", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 4095 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos` VALUES ("47", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41105 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("48", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 72699 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos` VALUES ("50", "2013-03-22 14:22:36", "2010-12-24 14:10:08", NULL, "1", "24", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("52", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "26", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("53", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "27", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("54", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "28", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("55", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "29", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("56", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "30", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("57", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "31", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("58", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "32", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("59", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "33", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("60", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "34", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("61", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "35", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("62", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "36", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("63", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "37", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("64", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "38", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2233", "2017-02-15 10:44:06", "0000-00-00 00:00:00", NULL, "1", "39", "profot_1487173445_1000x1191.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2232", "2017-02-15 10:43:19", "0000-00-00 00:00:00", NULL, "1", "40", "profot_1487173398_1000x576.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2231", "2017-02-15 10:42:45", "0000-00-00 00:00:00", NULL, "1", "41", "profot_1487173365_1000x483.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2230", "2017-02-15 10:41:33", "0000-00-00 00:00:00", NULL, "1", "42", "profot_1487173290_1000x1802.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("69", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "43", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2229", "2017-02-15 10:40:35", "0000-00-00 00:00:00", NULL, "1", "44", "profot_1487173233_1000x1895.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2228", "2017-02-15 10:39:41", "0000-00-00 00:00:00", NULL, "1", "45", "profot_1487173179_1000x1747.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2227", "2017-02-15 10:38:58", "0000-00-00 00:00:00", NULL, "1", "46", "profot_1487173136_1000x1354.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2226", "2017-02-15 10:38:23", "0000-00-00 00:00:00", NULL, "1", "47", "profot_1487173102_1000x1229.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2225", "2017-02-15 10:37:49", "0000-00-00 00:00:00", NULL, "1", "48", "profot_1487173068_1000x440.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2224", "2017-02-15 10:37:11", "0000-00-00 00:00:00", NULL, "1", "49", "profot_1487173031_1000x510.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2223", "2017-02-15 10:33:38", "0000-00-00 00:00:00", NULL, "1", "50", "profot_1487172816_1000x1132.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2222", "2017-02-15 10:33:02", "0000-00-00 00:00:00", NULL, "1", "51", "profot_1487172781_1000x842.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("88", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "52", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("89", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "53", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("90", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "54", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("91", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "55", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("93", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "56", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("95", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "57", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("96", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "58", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("99", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("98", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("100", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "60", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("101", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "61", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("102", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("103", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("104", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("105", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("106", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "64", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("107", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "65", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("108", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("109", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("110", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("111", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("112", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("113", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("114", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("115", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "69", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("116", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "70", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("117", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("118", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("119", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "72", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("120", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("121", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("122", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "74", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("128", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "80", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("129", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "81", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("130", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "82", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("131", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "83", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("132", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "84", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("133", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "85", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("138", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "90", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("139", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "91", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("140", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "92", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("141", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "93", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("142", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "94", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("143", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "95", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("144", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "96", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("145", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "97", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("146", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "98", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "99", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "100", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "101", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "132", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("251", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "199", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("252", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "200", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("253", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "201", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "256", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "257", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "258", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "259", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "260", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "261", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "262", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "263", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "264", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "265", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "266", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "267", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "268", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "269", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "270", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "271", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "272", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "273", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1323", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1324", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1325", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1329", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1337", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1335", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1336", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1341", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1339", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1340", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("412", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("413", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1347", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("415", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1747", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1748", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("422", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("423", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("424", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("425", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("426", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("427", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("428", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("429", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("430", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("431", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("432", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("433", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("434", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("435", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("436", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("437", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("438", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("439", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("440", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("441", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("442", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("443", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1779", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1780", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1781", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1789", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1784", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1785", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("534", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "384", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("535", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "385", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("536", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "386", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("537", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "387", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("538", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "388", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("539", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "389", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("540", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "390", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("541", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "391", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("542", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "392", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("543", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "393", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("544", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "394", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("545", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "395", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("546", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "396", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("547", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "397", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("548", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "398", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("549", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "399", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("550", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "400", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("551", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "401", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("552", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "402", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("553", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "403", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("554", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "404", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("555", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "405", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "406", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("557", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "407", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("558", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "408", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("559", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "409", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("560", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "410", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("561", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "411", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("562", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "412", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("563", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "413", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("564", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "414", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("565", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "415", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("566", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "416", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("567", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "417", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("568", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "418", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("569", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "419", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("570", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "420", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("572", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "421", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("573", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "422", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("574", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "423", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("575", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "424", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("576", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "425", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("577", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "426", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("578", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("579", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("580", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("611", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "458", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("613", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "461", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("617", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "464", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("621", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "469", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("624", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "472", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("626", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "474", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("628", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "476", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("631", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "478", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("632", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "480", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "482", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("881", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("884", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("885", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("886", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("893", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("894", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("895", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("896", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("897", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("898", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1276", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1055", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1305", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1306", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1307", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1308", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1758", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1757", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1753", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1754", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1755", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1756", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1765", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1766", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1761", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1760", "2013-03-22 14:22:36", "2011-10-17 21:36:08", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1762", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1763", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1326", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1327", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1328", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1334", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1338", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1344", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1343", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1345", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1346", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1348", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1349", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1350", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1351", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1370", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1371", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1372", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1373", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1374", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1375", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1376", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1377", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1378", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1379", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1778", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1775", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1776", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1777", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1788", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1787", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1786", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1783", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1773", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1774", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1782", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2221", "2017-02-15 10:32:16", "0000-00-00 00:00:00", NULL, "1", "1197", "profot_1487172735_1000x672.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1247", "profot_1486740381_599x800.jpg", "jose");
#
#
INSERT INTO `productos_fotos` VALUES ("1633", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1325", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1326", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1635", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1327", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1328", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1637", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1329", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1638", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1330", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1639", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1331", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1640", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1332", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1641", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1333", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1642", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1334", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1643", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1335", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1644", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1336", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1645", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1337", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1646", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1338", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1647", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1339", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1648", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1340", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1649", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1341", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1650", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1342", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1651", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1343", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1652", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1344", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1653", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1345", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1654", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1346", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1655", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1347", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1656", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1348", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1657", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1349", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1658", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1350", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1659", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1351", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1660", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1352", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1661", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1353", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1662", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1354", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1663", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1355", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1664", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1356", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1665", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1357", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1666", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1358", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1667", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1359", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2220", "2017-02-15 10:31:40", "0000-00-00 00:00:00", NULL, "1", "1373", "profot_1487172698_1000x1487.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1743", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1744", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1745", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1746", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1749", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1750", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1751", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1752", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1767", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1432", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1768", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1433", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1769", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1434", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1770", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1435", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1771", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1436", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1772", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1438", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1790", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1791", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1439", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1792", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1440", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1836", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2219", "2017-02-15 10:30:46", "0000-00-00 00:00:00", NULL, "1", "1519", "profot_1487172644_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2218", "2017-02-15 10:30:04", "0000-00-00 00:00:00", NULL, "1", "1525", "profot_1487172600_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("1883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2026", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1671", "profot_1486740381_599x800.jpg", "Prime U Loción Facial Refrescante (120 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2028", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1673", "profot_1486740381_599x800.jpg", "Prime U Crema Humectante de dia (50 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2030", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1675", "profot_1486740381_599x800.jpg", "Prime U Crema Facial de noche (50 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2031", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1676", "profot_1486740381_599x800.jpg", "Prime U Crema para el contorno de ojos (15 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2032", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1677", "profot_1486740381_599x800.jpg", "Jabón protector UV (108 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2033", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1678", "profot_1486740381_599x800.jpg", "Shampoo Anticaspa (300grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2035", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1680", "profot_1486740381_599x800.jpg", "Shampoo Suavizante (300grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2036", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1681", "profot_1486740381_599x800.jpg", "Moistenning Acondicionador Esencial (150 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2037", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1682", "profot_1486740381_599x800.jpg", "Shampoo Hidratante (300 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2038", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1683", "profot_1486740381_599x800.jpg", "Herbal China Pasta Dental (135 grs)");
#
#
INSERT INTO `productos_fotos` VALUES ("2039", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1684", "profot_1486740381_599x800.jpg", "PURIFICADOR CON OZONO PARA FRUTAS, VERDURAS Y AMBIENTES");
#
#
INSERT INTO `productos_fotos` VALUES ("2040", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1685", "profot_1486740381_599x800.jpg", "Masajeador Capilar");
#
#
INSERT INTO `productos_fotos` VALUES ("2042", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1687", "profot_1486740381_599x800.jpg", "Masajeador Muscular ACUMAGIC");
#
#
INSERT INTO `productos_fotos` VALUES ("2147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2150", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2151", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2152", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2153", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2154", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2155", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2156", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2157", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2158", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2159", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1796", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2183", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1818", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2217", "2017-02-15 10:24:56", "0000-00-00 00:00:00", NULL, "1", "1821", "profot_1487172294_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2185", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1820", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1819", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2216", "2017-02-15 10:24:07", "0000-00-00 00:00:00", NULL, "1", "1822", "profot_1487172245_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2215", "2017-02-15 10:23:36", "0000-00-00 00:00:00", NULL, "1", "1823", "profot_1487172214_1000x884.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2214", "2017-02-15 10:23:06", "0000-00-00 00:00:00", NULL, "1", "1824", "profot_1487172185_1000x831.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2209", "2017-02-15 10:21:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172075_1000x1505.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2208", "2017-02-15 10:20:38", "0000-00-00 00:00:00", NULL, "1", "1826", "profot_1487172036_1000x879.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2210", "2017-02-15 10:21:36", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172093_1000x1551.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2211", "2017-02-15 10:21:50", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172108_1000x1446.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2212", "2017-02-15 10:22:04", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172121_1000x1735.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2213", "2017-02-15 10:22:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172135_1000x1594.jpg", NULL);
#
#
DROP TABLE IF EXISTS `productos_grupos`;
#
#
CREATE TABLE `productos_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_grupos` VALUES ("16", "2010-11-11 23:33:28", "2017-02-11 18:42:00", NULL, "1", "Proteger", NULL, NULL, NULL, "proteger");
#
#
INSERT INTO `productos_grupos` VALUES ("26", "2011-01-04 15:06:39", "2017-02-11 18:41:54", NULL, "1", "Entrenar", NULL, NULL, NULL, "entrenar");
#
#
INSERT INTO `productos_grupos` VALUES ("56", "2017-02-09 09:23:26", "2017-02-11 18:41:49", NULL, "1", "Rehabilitar", NULL, NULL, NULL, "rehabilitar");
#
#
INSERT INTO `productos_grupos` VALUES ("57", "2017-02-09 09:23:30", "2017-02-11 18:41:44", NULL, "1", "Reducir", NULL, NULL, NULL, "reducir");
#
#
INSERT INTO `productos_grupos` VALUES ("58", "2017-02-09 09:23:35", "2017-02-11 18:41:37", NULL, "1", "Divertir", NULL, NULL, NULL, "divertir");
#
#
DROP TABLE IF EXISTS `productos_items`;
#
#
CREATE TABLE `productos_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `id_filtro` int(10) DEFAULT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `descripcion` longtext,
  `extra_texto` varchar(800) DEFAULT NULL,
  `codigo` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `politica_legal` longtext,
  `tags` varchar(80) DEFAULT NULL,
  `moneda` varchar(80) DEFAULT NULL,
  `oferta` varchar(80) DEFAULT NULL,
  `precio_oferta` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `adjunto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=1830 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items` VALUES ("51", "2010-12-31 10:34:29", "2017-02-10 07:13:01", NULL, "1", "56", NULL, "Corselette D\'Luxe", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Corselette D&acute;Luxe</span></strong></p>\n\n<p>Es una prenda es dise&ntilde;ada especialmente para apoyar a la columna vertebral. Remodela la parte superior del cuerpo de los hombros hasta la parte inferior de su cintura. Al abrazar la secci&oacute;n del t&oacute;rax proporciona una disminuci&oacute;n de cintura y talla.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a corregir los discos bajos y dorsales evitando que se curven.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a lograr una perfecta posici&oacute;n de la columna vertebral.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El ajuste de sus tirantes colocan los hombros en su lugar, evitando la joroba.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Disminuye y afina la cintura gracias a sus varillas flexibles.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el abdomen y disminuye la cintura hasta 2 tallas.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas </strong>26 al 44</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">&nbsp;</span>Blanco, Negro y Beige</p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "234.3", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("39", "2010-12-27 20:34:17", "2017-02-10 10:12:10", NULL, "1", "57", NULL, "Faja Plus", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Faja Plus</span></strong></p>\n\n<p>Su principal funci&oacute;n se encuentra en el bajo vientre que cuenta con un refuerzo especial para evitar la acumulaci&oacute;n de grasa y proteger los &oacute;rganos internos, ideal para tu figura al combinarlo con el corselette deluxe.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ejerce una suave pero firme presi&oacute;n en el abdomen.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a desaparecer la grasa acumulada en el bajo vientre.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evita la acumulaci&oacute;n de grasa en la entrepierna y la cadera.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Excelente para afinar talle y cadera.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eleva los gl&uacute;teos.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Blancoy Negro</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "184", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("40", "2010-12-27 20:42:56", "2017-02-10 10:12:02", NULL, "1", "57", NULL, "Faja Lumbar", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Faja Lumbar</span></strong></p>\n\n<p>Ardyss dise&ntilde;o una faja a la que se le han colocado dos bandas especiales para controlar el tejido graso de la cadera y ejercer presi&oacute;n abdominal. De esta manera, brinda beneficios y descanso a la regi&oacute;n lumbar.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reafirma los tejidos de los gl&uacute;teos y los proyecta hacia arriba.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Proporciona el soporte necesario para evitar la flacidez de los m&uacute;sculos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Remodela las caderas gracias al refuerzo doble que tiene en la parte lateral.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a compactar tejidos grasos en el vientre.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Blanco </span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "190", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("41", "2010-12-27 20:54:45", "2017-02-10 10:11:52", NULL, "1", "57", NULL, "Panty Faja", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Panty Faja</span></strong></p>\n\n<p>Faja para controlar el abdomen, afinar la cadera y estilizar la figura femenina, ayuda en los d&iacute;as m&aacute;s dif&iacute;ciles con su puente impermeable. Proyecta y sostiene los gl&uacute;teos.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a realzar y sostener los gl&uacute;teos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el tejido acumulado en el vientre.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estiliza la cintura.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Afina la cadera con presi&oacute;n suave.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Blanco y Negro</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "194.6", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("42", "2010-12-27 21:08:28", "2017-02-10 10:11:46", NULL, "1", "57", NULL, "Body Remodelador Largo", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Body Remodelador Largo</span></strong></p>\n\n<p>Dise&ntilde;ado especialmente para proporcionar un ajuste suave y agradable al cuerpo. Mantiene la remodelaci&oacute;n que ha sido previamente adquirida con los tratamientos Ardyss para lograr una figura esbelta.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Compacta el tejido abdominal.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a eliminar esas pocas pulgadas que se tienen de mas en el &aacute;rea de la cintura.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Excelente para mantener una buena postura.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a resaltar los gl&uacute;teos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; F&aacute;cil de poner y sumamente c&oacute;moda, es como una segunda piel.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Blanco Negro y Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "248", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("44", "2010-12-27 21:59:59", "2017-02-10 10:11:27", NULL, "1", "58", NULL, "Cinturilla Vedette", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Cinturilla Vedette</span></strong></p>\n\n<p>El l&aacute;tex es un producto natural extra&iacute;do de un &aacute;rbol de Brasil que se llama serenguera, este se combina con algod&oacute;n, una fibra natural, y juntos forman una prenda antial&eacute;rgica y confortable. Se recomienda usar como m&aacute;ximo de tres a cuatro horas al dia.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a reducir cintura y abdomen.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a quemar grasa, gracias a que sus materiales son t&eacute;rmicos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reduce t&oacute;rax.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Excelente complemento en tu programa de p&eacute;rdida de peso.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas &nbsp;</strong>30 al 44</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "173", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("45", "2010-12-27 22:14:54", "2017-02-10 10:10:55", NULL, "1", "58", NULL, "Chaleco Vedette", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Chaleco Vedette</span></strong></p>\n\n<p>Prenda que puede ser utilizada en cualquier ocasi&oacute;n con libertad de movimiento. Su uso constante hace que los cambios en tu silueta sean permanentes. Ideal para mujeres con exceso de tejido graso en abdomen y espalda. Excelente para mujeres que tienen actividades en el hogar.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a quemar el tejido graso en el &aacute;rea de la cintura y espalda.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el abdomen.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Quema el tejido graso por medio de la activaci&oacute;n de las gl&aacute;ndulas sudor&iacute;paras.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Excelente complemento en tu programa de p&eacute;rdida de peso.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong>30 al 44</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "238", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("46", "2010-12-27 23:05:25", "2017-02-10 10:11:18", NULL, "1", "58", NULL, "Faja Alta", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Faja Alta</span></strong></p>\n\n<p>Exquisita prenda elaborada en power net. Controla desde el bajo busto hasta los muslos, cuenta con el&aacute;stico en las piernas para una buena circulaci&oacute;n y un soporte en el abdomen para el control del mismo. Dise&ntilde;ada con dos bandas en los gl&uacute;teos para realzarlos.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a controlar el abdomen.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el exceso de grasa alrededor de la cintura.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a compactar el tejido abdominal.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Afina la cadera.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda con su banda en &ldquo;V&rdquo; a la correcta posici&oacute;n de la matriz y vejiga.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el tejido adiposo acumulado en la espalda baja.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "158", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("47", "2010-12-27 23:14:27", "2017-02-10 07:16:39", NULL, "1", "58", NULL, "Body Fashión", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Body Fashion</span></strong></p>\n\n<p>Excelente prenda con los mismos beneficios del Body Magic &iexcl;Sin tirantes!.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reacomoda tejidos fl&aacute;cidos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Corrige postura y afina el talle.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Realza los gl&uacute;teos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a eliminar la grasa de entrepierna.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Afina la cadera.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a la circulaci&oacute;n.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Compacta el tejido graso.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Controla el abdomen.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eleva el busto.</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong>28 al 44</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "321.2", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("48", "2010-12-27 23:23:43", "2017-02-10 07:16:17", NULL, "1", "56", NULL, "Panty embarazo", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Panty Embarazo</span></strong></p>\n\n<p>Una prenda indispensable para la mujer embarazada, le ayuda a evitar complicaciones haciendo este periodo m&aacute;s agradable y descansado, le proporciona soporte y confort.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Da confort al cuerpo de la madre desde el tercer mes hasta el t&eacute;rmino de la gestaci&oacute;n.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Protege la columna vertebral y le quita carga, normalizando el centro de gravedad.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Soporta la pelvis en el periodo de reblandecimiento.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evita la ca&iacute;da del vientre con su banda soporte. (evitando as&iacute; el vientre p&eacute;ndulo.)</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Blanco</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "250", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("49", "2010-12-27 23:38:32", "2017-02-10 07:16:06", NULL, "1", "56", NULL, "Faja Postparto", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Faja Postparto</span></strong></p>\n\n<p>Esta prenda est&aacute; especialmente dise&ntilde;ada para favorecer instant&aacute;neamente la desaparici&oacute;n del tejido graso del bajo vientre despu&eacute;s del parto. Tambi&eacute;n recomendada para personas con hernias, postoperaciones y mujeres con vientre muy grande.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda a una r&aacute;pida recuperaci&oacute;n reacomodando los &oacute;rganos internos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fija el &uacute;tero y lo comprime propiciando la f&aacute;cil expulsi&oacute;n&nbsp; de los co&aacute;gulos.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evita hemorragias&nbsp; y proporciona seguridad para movilizarse libremente en el cuidado del beb&eacute;.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Favorece los m&uacute;sculos del abdomen y de la espalda al quitarles carga</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "277", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("50", "2010-12-27 23:46:21", "2017-02-10 07:13:11", NULL, "1", "56", NULL, "Abdo Woman", NULL, "Ardyss", "<p><strong><span style=\"color:rgb(127, 127, 127); font-family:arial,sans-serif\">Abdo Woman</span></strong></p>\n\n<p>Una prenda para la mujer que busca una silueta est&eacute;tica brindando soporte y confort al abdomen y espalda baja.</p>\n\n<p>&nbsp;</p>\n\n<p>Funciones</p>\n\n<p>&nbsp;</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Da un firme soporte abdominal con refuerzo en la parte baja de la espalda.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Protege la columna lumbar.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Evita dolores de espalda y fatiga muscular.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Afina la cadera.</p>\n\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ayuda al correcto funcionamiento de los &oacute;rganos internos.</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Medidas&nbsp; </strong></p>\n\n<p>XXS, XS, S, M, L, XL, XXL</p>\n\n<p>&nbsp;</p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Disponible en los siguientes colores:</span></p>\n\n<p><span style=\"color:rgb(51, 51, 51); font-family:arial,sans-serif\">Beige, Blanco y Negro</span></p>\n\n<p>&nbsp;</p>\n", "<p> </p>", NULL, "149.6", "<h2>POLITICA LEGAL</h2>\n\n<p>Los T&eacute;rminos y Condiciones se aplican a los pedidos de venta de art&iacute;culos/productos, atendidos por NIVUELTAQUEDARLE.COM a trav&eacute;s de su tienda virtual, a todo usuario dentro del territorio peruano</p>\n\n<p><strong>I. Precio </strong></p>\n\n<p>Los precios corresponden a los art&iacute;culos/productos descritos, en la fecha que se realiza el pedido.&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM se reserva el derecho de efectuar, en cualquier momento y sin previo aviso, las modificaciones que considere oportunas, pudiendo actualizar, incluso diariamente, productos y precios en funci&oacute;n de las novedades del sector al que pertenecen.</p>\n\n<p><strong>II. Forma de Pago</strong></p>\n\n<p>Las ventas est&aacute;n dirigidas a clientes de NIVUELTAQUEDARLE.COM.&nbsp; Se aceptar&aacute;n como forma de pago Tarjetas de Cr&eacute;dito emitidas en el pa&iacute;s e internacionales: Visa, Master Card, American Express o Efectivo.&nbsp; No se aceptan cheques.</p>\n\n<p>Las entregas de productos se har&aacute;n a los clientes siempre con su boleta de venta y/o factura, emitida por la empresa PRODISERV S.A.C. que respalda y provee a esta tienda virtual NIVUELTAQUEDARLE.COM, este documento ser&aacute; indispensable para hacer efectiva la garant&iacute;a del producto.</p>\n\n<p>En todos los casos, el cliente al momento de la entrega, deber&aacute; mostrar su documento de identidad&nbsp; (DNI o pasaporte) y de ser necesario entregar al Courier una copia del documento de identidad (DNI o pasaporte).</p>\n\n<p>Por el servicio de entrega el cliente no tendr&aacute; que cancelar ning&uacute;n valor adicional al de su factura, salvo que por motivos ajenos a NIVUELTAQUEDARLE.COM&nbsp; se tenga que realizar nuevas visitas a efectos de la entrega del producto, o si el cliente requiere el servicio de entrega inmediata o dependiendo del lugar de ubicaci&oacute;n del cliente. El costo de env&iacute;o para los productos de la secci&oacute;n REGALOS DELIVERY se visualiza en el mismo formulario de ORDEN DE PEDIDO. En otros casos el costo de env&iacute;o se calcular&aacute; y se informar&aacute; al CLIENTE en la comunicaci&oacute;n de acuerdos con el Agente Vendedor de NIVUELTAQUEDARLE.COM y EL CLIENTE.</p>\n\n<p><strong>III. Entrega:</strong></p>\n\n<p>La entrega se realizar&aacute; en la direcci&oacute;n indicada por el cliente al momento de realizar la orden de pedido en el sitio web NIVUELTAQUEDARLE.COM.&nbsp; El cliente recibir&aacute; por parte de NIVUELTAQUEDARLE.COM un mail de recepci&oacute;n de pedido.&nbsp;</p>\n\n<p>1.&nbsp;&nbsp;&nbsp; Los plazos m&aacute;ximos para la entrega del producto, una vez confirmado el pedido con el cliente son:</p>\n\n<p>&bull; Lima Metropolitana.................................&nbsp; 4 d&iacute;as h&aacute;biles</p>\n\n<p>&bull; Otros destinos&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;....&hellip;.&hellip;&hellip;&hellip;&hellip;..&hellip;&nbsp;&nbsp; 8 d&iacute;as h&aacute;biles&nbsp;</p>\n\n<p>Nota: No son d&iacute;as h&aacute;biles, los s&aacute;bados, domingos ni feriados (o no laborables) de cualquier tipo.</p>\n\n<p>NIVUELTAQUEDARLE.COM no se responsabilizar&aacute; por la demora o atrasos de las entregas que se deban a causas no imputables (incluye caso fortuito o fuerza mayor), que a manera ejemplificativa y no limitativa se&ntilde;alamos entro otros: actos b&eacute;licos motines, insurrecci&oacute;n armada, huelgas, paros, conflictos laborales.</p>\n\n<p><strong>IV. Cancelaciones o Devoluciones:</strong></p>\n\n<p>Una vez confirmada la compra en efectivo, con tarjeta de cr&eacute;dito &oacute; debito, el cliente podr&aacute; dejar sin efecto su pedido &uacute;nicamente bajo los t&eacute;rminos que dispone la ley de Defensa del Consumidor o en los siguientes casos:</p>\n\n<p>a) Alteraci&oacute;n&nbsp; comprobada del sello de seguridad.&nbsp; Para definir el par&aacute;metro de comprobada el cliente deber&aacute;, en el registro de entrega por parte del Courier, anotar a la recepci&oacute;n del pedido con la observaci&oacute;n de que sello se ENCONTRABA ALTERADO y definir el tipo de alteraci&oacute;n: inexistencia, rotura, etc.</p>\n\n<p>b) Si al recibir el equipo/producto el cliente comprueba alg&uacute;n defecto del producto, enti&eacute;ndase por defecto, desperfecto o da&ntilde;o cosm&eacute;tico externo o la falta de funcionamiento y operaci&oacute;n del pedido una vez que se opera en los t&eacute;rminos que determina el manual del producto.&nbsp;</p>\n\n<p>c) Toda devoluci&oacute;n de equipos/productos, cualquiera que sea su causa, deber&aacute; remitirse en su embalaje original y con todos los accesorios y manuales incluidos.</p>\n\n<p>d) Se admitir&aacute;n devoluciones posteriores seg&uacute;n lo descrito en el numeral V del presente documento.</p>\n\n<p><strong>V. Garant&iacute;a </strong></p>\n\n<p>Todos los productos entregados por los Courier de los proveedores de NIVUELTAQUEDARLE.COM, se encuentran amparados bajo las pol&iacute;ticas de garant&iacute;a que se detallan a continuaci&oacute;n:</p>\n\n<p>1. Garant&iacute;a de tiempo especificado por tipo de producto en el detalle del producto en la secci&oacute;n Descripci&oacute;n, contado a partir de la fecha que consta en la factura.</p>\n\n<p>2. Garant&iacute;a limitada solo para el comprador original y en condiciones normales de uso.&nbsp; La garant&iacute;a no es susceptible de transferencia a ning&uacute;n otro comprador o usuario.</p>\n\n<p>3. La garant&iacute;a cubre lo especificado en el documento de garant&iacute;a entregada por tipo de producto.</p>\n\n<p>4. La garant&iacute;a no cubre fallas o mal funcionamiento por: golpes, humedad, maltrato, mal uso, rotura o adulteraci&oacute;n de sellos de garant&iacute;a, alteraci&oacute;n o imposibilidad de lectura de n&uacute;meros de serie, en caso de que aplique.</p>\n\n<p>5. La garant&iacute;a se har&aacute; efectiva en cualquier Servicio T&eacute;cnico Autorizado del proveedor respectivo por tipo de producto, ubicados &uacute;nicamente en Centros de Atenci&oacute;n, Ventas y Servicios del Per&uacute;.</p>\n\n<p>6. La evaluaci&oacute;n de mal funcionamiento o defectos del tipo de producto dar&aacute; lugar a la garant&iacute;a &uacute;nicamente si es determinada por el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;.</p>\n\n<p>7. Durante el per&iacute;odo de garant&iacute;a limitada, el personal de cualquier Servicio T&eacute;cnico Autorizado del proveedor del tipo de producto en todo el Per&uacute;, puede a su criterio reparar el producto, o reemplazarlo por un producto equivalente, sin costo para el comprador original.</p>\n\n<p>8. Para ser sujeto de la garant&iacute;a es necesaria la presentaci&oacute;n de la boleta y/o factura original de compra que incluya el n&uacute;mero de serie del producto, en caso de que aplique.</p>\n\n<p><strong>VI. Privacidad:&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\n\n<p>NIVUELTAQUEDARLE.COM almacenar&aacute; informaci&oacute;n personal de los visitantes, como son: nombre, DNI, tel&eacute;fonos, direcci&oacute;n domiciliaria, incluyendo ciudad, provincia y pa&iacute;s, y direcci&oacute;n electr&oacute;nica. Estos datos proporcionados por el cliente se mantendr&aacute;n bajo absoluta reserva. En caso de querer eliminar sus datos de nuestra base, lo podr&aacute; hacer a trav&eacute;s de este mail: atencionalcliente@nivueltaquedarle.com</p>\n\n<p><strong>VII. Propiedad Industrial e Intelectual</strong></p>\n\n<p>Queda estrictamente prohibido modificar, transmitir, distribuir, reutilizar, reenviar, o usar la totalidad o parte del contenido de la p&aacute;gina para prop&oacute;sitos p&uacute;blicos o comerciales sin la autorizaci&oacute;n escrita de NIVUELTAQUEDARLE.COM</p>\n\n<p>La infracci&oacute;n de cualquiera de los citados derechos puede constituir una vulneraci&oacute;n de las presentes disposiciones, as&iacute; como un delito castigado.</p>\n\n<p><strong>VIII. Ley Aplicable y Jurisdicci&oacute;n </strong></p>\n\n<p>El contrato y las Condiciones de Contrataci&oacute;n se rigen por las leyes Peruanas.</p>\n\n<p>Si tiene m&aacute;s dudas, por favor enviar un mail a: atencionalcliente@nivueltaquedarle.com</p>\n", "Productos Ardyss,Remodelacion Mujeres,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1373", "2017-02-15 08:50:27", "2017-02-15 08:50:26", NULL, "1", "16", "60", "Sandalia GRENDHA", "179", "GRENDHA", "<p><strong>Colores:</strong> Negro, Cereza, Dorado<br />\n<strong>Capellada:</strong> PU<br />\n<strong>Planta:</strong> Sint&eacute;tico<br />\n<strong>Tallas:</strong> 35-39</p>\n\n<p>&nbsp;</p>\n", "<p> </p>", "2GD-1390004", "70", NULL, ",,", "2", NULL, NULL, NULL, "atc_1487166622.pdf");
#
#
INSERT INTO `productos_items` VALUES ("1519", "2011-11-02 22:26:32", "2017-02-10 07:11:44", NULL, "1", "16", "59", "Sandalias", "178", "MODOS", "<p><strong>Colores:</strong> Negro, Blanco, Morado<br />\n<strong>Capellada:</strong> PU<br />\n<strong>Forro:</strong> PU<br />\n<strong>Planta: </strong>Sint&eacute;tico<br />\n<strong>Tallas:</strong> 35/39</p>\n\n<p>&nbsp;</p>\n", "<p> </p>", "YACHI", "80", NULL, ",,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1525", "2011-11-02 22:36:24", "2017-02-10 07:10:48", NULL, "1", "16", "59", "Sandalias", "177", "MODOS", "<p><strong>Colores:</strong> Negro<br />\n<strong>Capellada:</strong> Textil<br />\n<strong>Forro:</strong> PU<br />\n<strong>Planta: </strong>Sint&eacute;tico<br />\n<strong>Tallas:</strong> 35/39</p>\n\n<p>&nbsp;</p>\n", "<p> </p>", "BE3399-01", "95", NULL, ",,", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1197", "2011-08-18 23:20:51", "2017-02-10 07:12:45", NULL, "1", "16", "60", "Aretes Su Majestad", "179", "UNIQUE", "<p>Ba&ntilde;o de plata brillante con cuentas color &#39;Morado&#39; y &#39;Rojo&#39;.<br />\nAretes Su Majestad (Con poste)</p>\n", "<p> </p>", "6096", "69", NULL, ",,", "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1823", "2013-03-22 14:06:25", "2015-04-21 22:42:21", NULL, "1", "26", "170", "Enerlife", "297", "ARDYSS", "<p><font color=\"#777777\"><strong><font>Enerlife</font></strong></font></p>\n<p><font>Mejorar su resistencia.<br /></font></p>\n<p><font>Aumente su día con esta deliciosa fruta cítrica / gran bebida que proporciona energía fresca.&nbsp;Enerlife contiene los aminoácidos esenciales que pueden ayudar a mejorar su resistencia física y claridad mental.&nbsp;Es un complemento ideal para una dieta saludable y un programa de ejercicios.</font></p>\n<p><font color=\"#777777\"><strong><font>Beneficios:</font></strong></font></p>\n<ul><li tint3\"=\"\"><font>&nbsp;Promueve la energía de larga duración.</font></li><li tint3\"=\"\"><font>&nbsp;Mejora la claridad mental.</font></li><li tint3\"=\"\"><font>&nbsp;Rendimiento potenciador.</font></li><li tint3\"=\"\"><font>&nbsp;Mejora la resistencia física.</font></li><li tint3\"=\"\"><font>&nbsp;Mejora la claridad mental.</font></li>\n</ul>\n<p><font><strong>PRECAUCIONES</strong>: No utilizar en caso de embarazo o lactancia.&nbsp;Los niños menores de 18 individuos o hiperactivos no deben tomar Enerlife.Las personas con enfermedad cardiovascular, enfermedad de tiroides, presión arterial alta, la diabetes o la sensibilidad a la cafeína no se debe usar Enerlife.&nbsp;Enerlife no debe utilizarse con AM Slim Tea, PM Trim, o ThermoGen.</font></p>\n<p> </p>", "<p> </p>", "ENER", "117.41", "<p> </p>", "Productos Ardyss,Línea Nutricional,Energizantes", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1824", "2013-03-22 14:10:15", "2015-04-21 22:41:57", NULL, "1", "26", "170", "Memory Charge", "298", "ARDYSS", "<p><font color=\"#777777\"><strong>Memory Charge</strong></font></p>\n<p><font>Agudiza tu memoria</font></p>\n<p><font>Carga La memoria es una mezcla de fruta deliciosa, que puede ayudar a afinar las funciones de memoria actualmente normales para una mejor concentración y enfoque.&nbsp;Este producto de calidad es una fusión de colina y vitamina B-5, que son importantes para la función de la memoria ya normal.</font></p>\n<p> </p>", "<p> </p>", "MEMO", "117.41", "<p> </p>", "Productos Ardyss,Línea Nutricional,Nutrición General", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1825", "2013-03-22 14:15:48", "2015-04-21 22:45:20", NULL, "1", "26", "170", "Café con Colagéno x 15", "299", "ARDYSS", "<p><font color=\"#777777\"><strong>Café con Colagéno x 15</strong></font></p>\n<p><font>Sabores: Cappuccino</font></p>\n<p><font>La mezcla única de sabor a capuchino colágeno, con ingredientes que pueden revitalizar y suavizar la piel, condimentado en cappuccino.We añadió la proteína más abundante en la tierra; Colágeno.&nbsp;El colágeno es una de las proteínas largos, fibrosos estructurales cuyas funciones son muy diferentes de las de las proteínas globulares tales como enzimas.&nbsp;Es el componente principal de la fascia, cartílago, ligamentos, tendones, huesos y piel.&nbsp;Junto con la queratina blando, que es responsable de la resistencia y la elasticidad de la piel, y su degradación conduce a las arrugas que acompañan al envejecimiento.&nbsp;Se fortalece los vasos sanguíneos y juega un papel en el desarrollo del tejido.&nbsp;Está presente en la córnea y el cristalino del ojo en forma cristalina</font></p>\n<p><font>Beneficios:</font></p>\n<ul><li tint3\"=\"\"><font>&nbsp;Puede ayudar a mantener los tejidos óseos masivos que están dentro de los niveles normales.</font></li><li tint3\"=\"\"><font>&nbsp;Promueve la salud de la piel.</font></li><li tint3\"=\"\"><font>&nbsp;Apoya la salud de las articulaciones y los huesos.</font></li>\n</ul>\n<p><font>El colágeno hidrolizado se produce mediante la adopción de colágeno a partir de fuentes naturales por extracción, este colágeno se concentra, desecada y pulverizada en un polvo soluble. <br /></font></p>\n<p> </p>", "<p> </p>", "CAPP-5", "92.5", "<p> </p>", "Productos Ardyss,Línea Nutricional,Café", "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1826", "2013-03-22 14:22:04", "0000-00-00 00:00:00", NULL, "1", "26", "170", "Crema Reafirmante", "300", "ARDYSS", "<p><font color=\"#777777\"><strong>Crema Reafirmante</strong></font></p>\n<p><font>Belleza Natural y&nbsp; Juventud!</font></p>\n<p><font>Crème Ardyss Bust contiene vitaminas esenciales y hierbas que ayudan a rejuvenecer y promover hermosos pechos.</font></p>\n<p><font>Crema Busto Ardyss tiene una fórmula única adaptada para su uso en esta área tan sensible de su cuerpo.</font></p>\n<p> </p>", "<p> </p>", "GRA1", "35.08", "<p> </p>", "Productos Ardyss,Línea Nutricional,Piel", "2", NULL, NULL, NULL, NULL);
#
#
DROP TABLE IF EXISTS `productos_subgrupos`;
#
#
CREATE TABLE `productos_subgrupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `ver_home` varchar(80) DEFAULT NULL,
  `relevancia` float DEFAULT NULL,
  `ver_rubro` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_subgrupos` VALUES ("170", "2013-03-22 13:30:10", "2013-12-01 14:10:16", NULL, "1", "Línea Nutricional", "26", "0", "0", "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("15", "2010-12-24 12:47:11", "2013-03-22 13:18:55", NULL, "1", "Remodelacion hombres", "26", "1", "7", "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("16", "2010-12-24 13:06:54", "2011-05-05 20:25:48", NULL, "1", "Remodelacion Mujeres", "26", "1", "7", "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("59", "2011-01-12 23:43:25", "0000-00-00 00:00:00", NULL, "1", "Sillas de Comer", "16", NULL, "0", NULL);
#
#
INSERT INTO `productos_subgrupos` VALUES ("58", "2011-01-12 23:41:56", "0000-00-00 00:00:00", NULL, "1", "Coches", "16", NULL, "0", NULL);
#
#
INSERT INTO `productos_subgrupos` VALUES ("60", "2011-01-12 23:44:21", "0000-00-00 00:00:00", NULL, "1", "Corrales", "16", "0", "0", NULL);
#
#
INSERT INTO `productos_subgrupos` VALUES ("61", "2011-01-12 23:45:17", "0000-00-00 00:00:00", NULL, "1", "Sillas de Auto", "16", "0", "0", NULL);
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
  `adjunto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `project_galleries_photos` VALUES ("1", "2016-12-30 15:09:56", "2016-12-30 15:11:14", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "ESTABILIZADOR MONOFASICO", "<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones.</p>\n", "1", NULL, "ser_imas_1483128674_800x517.jpg", NULL, "atc_1483128396.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("13", "2016-12-30 15:17:31", "0000-00-00 00:00:00", NULL, "1", "9", NULL, "0000-00-00 00:00:00", "estabilizador 1", NULL, "1", NULL, "ser_imas_1483129050_542x303.jpg", NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("14", "2016-12-30 15:39:40", "0000-00-00 00:00:00", NULL, "1", "10", NULL, "0000-00-00 00:00:00", "SOLIDO MONOFÁSICO ", "<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones.</p>\n", "1", NULL, "ser_imas_1483130380_800x517.jpg", NULL, "atc_1483130355.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("15", "2016-12-30 15:45:33", "0000-00-00 00:00:00", NULL, "1", "10", NULL, "0000-00-00 00:00:00", "SOLIDO TRIFASICO", "<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones.</p>\n", "1", NULL, "ser_imas_1483130733_800x982.jpg", NULL, "atc_1483130646.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("2", "2016-12-29 13:30:26", "2016-12-30 09:22:05", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Est. solido Trifásico", NULL, "1", NULL, "ser_imas_1483107726_2105x1286.jpg", NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("3", "2016-12-29 13:30:41", "2016-12-30 09:22:18", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "Est. Ferroresonante", NULL, "1", NULL, "ser_imas_1483107738_370x373.png", NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("4", "2016-12-29 13:31:21", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Luces 2 x 20W", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("5", "2016-12-29 13:31:28", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Luces 2 x 35W", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("6", "2016-12-29 13:31:48", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Luces 2 x 55W", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("7", "2016-12-29 13:31:58", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Luces 2 x 20W PVC", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("8", "2016-12-29 13:32:11", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "0000-00-00 00:00:00", "Luces 2 x 55W PVC", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("9", "2016-12-29 13:34:24", "0000-00-00 00:00:00", NULL, "1", "8", NULL, "0000-00-00 00:00:00", "UPS GALLEON", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("10", "2016-12-29 13:34:29", "0000-00-00 00:00:00", NULL, "1", "8", NULL, "0000-00-00 00:00:00", "UPS GALLEON RACK", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("11", "2016-12-29 13:34:35", "0000-00-00 00:00:00", NULL, "1", "8", NULL, "0000-00-00 00:00:00", "UPS TAURUS", NULL, "1", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("12", "2016-12-30 15:13:59", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "0000-00-00 00:00:00", "ESTABILIZADOR MONOFASICO", "<p><strong>ESTABILIZADOR MONOFASICO</strong></p>\n\n<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones.</p>\n", "1", NULL, "ser_imas_1483128839_800x517.jpg", NULL, "atc_1483128810.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("16", "2016-12-30 15:50:00", "0000-00-00 00:00:00", NULL, "1", "11", NULL, "0000-00-00 00:00:00", " ON-LINE 6KVA-10KVA ", "<p><em>Serie HT11 es UPS de doble conversi&oacute;n en l&iacute;nea con la tecnolog&iacute;a completa de control de DSP. Con entrada alta y el factor de potencia de salida, frecuencia de salida de ajuste autom&aacute;tico, sistema inteligente de gesti&oacute;n de la bater&iacute;a y la gesti&oacute;n de la red, HT11 es una opci&oacute;n perfecta para las computadoras, equipos de telecomunicaciones y otros dispositivos sensibles.</em></p>\n", "1", NULL, "ser_imas_1483131000_305x224.jpg", NULL, "atc_1483130892.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("17", "2016-12-30 15:52:23", "0000-00-00 00:00:00", NULL, "1", "12", NULL, "0000-00-00 00:00:00", "MONOFÁSICO", "<p><strong>El transformador de aislamiento brinda &nbsp;mayor atenuaci&oacute;n de ruidos a trav&eacute;s de una pantalla electrost&aacute;tica. Ideal para centros de c&oacute;mputo e instalaciones industriales. Presentaciones en Monof&aacute;sico&nbsp; &nbsp;</strong></p>\n", "1", NULL, "ser_imas_1483131143_800x688.jpg", NULL, NULL);
#
#
INSERT INTO `project_galleries_photos` VALUES ("18", "2017-01-06 10:10:48", "2017-01-06 10:18:37", NULL, "1", "13", NULL, "0000-00-00 00:00:00", "HALOGENAS 2X20W", "<p>2X20 WATTS HALOGENOS</p>\n\n<p>MOELO SLH-II</p>\n\n<p>GRADO DE PROTECCION IP- 45</p>\n\n<p>AUTONIMIA 90 MINUTOS CON 2 FAROS</p>\n\n<p>LOS VERDADEROS CON PROTECCION CARGA Y DESCARGA PROFUNDA DE LAS BATERIAS</p>\n\n<p>SISTEMA (UL) LISTADO</p>\n", "1", NULL, "ser_imas_1483715917_487x505.jpg", NULL, "atc_1483715444.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("19", "2016-12-30 16:13:42", "0000-00-00 00:00:00", NULL, "1", "10", NULL, "0000-00-00 00:00:00", "FERRO RESONANTE", "<p><strong>Un circuito Ferro resonante, otro magn&eacute;tico de alta reactancia y una red de filtraci&oacute;n de arm&oacute;nicos, son los componentes que conjugan el funcionamiento de los estabilizadores.&nbsp;</strong></p>\n", "1", NULL, "ser_imas_1483132422_800x911.jpg", NULL, "atc_1483132331.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("20", "2017-01-06 10:11:51", "2017-01-06 10:12:46", NULL, "1", "13", NULL, "0000-00-00 00:00:00", "HALOGENAS 2X55W", "<p>EQUIPO DE LUZ DE EMERGENCIA AUTONOMO NO PERMANENTE</p>\n\n<p>2X55 WATTS HALOGENOS</p>\n\n<p>MOELO SLH-V</p>\n\n<p>GRADO DE PROTECCION IP- 45</p>\n\n<p>AUTONIMIA 120 MINUTOS CON 2 FAROS A MAS (OPCIONAL)</p>\n\n<p>LOS VERDADEROS CON PROTECCION CARGA Y DESCARGA PROFUNDA DE LAS BATERIAS</p>\n\n<p>SISTEMA (UL) LISTADO</p>\n\n<p>NORMA DE FABRICACION (NTP IEC 60598 &ndash; 2 -22 &ndash; NFPA &ndash; 101)&nbsp;</p>\n", "1", NULL, "ser_imas_1483715566_487x505.jpg", NULL, "atc_1483715507.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("21", "2017-01-02 11:52:29", "0000-00-00 00:00:00", NULL, "1", "11", NULL, "0000-00-00 00:00:00", "ON-LINE 1KVA-3KVA", "<p><em>Serie HT11 es UPS de doble conversi&oacute;n en l&iacute;nea con la tecnolog&iacute;a completa de control de DSP. Con entrada alta y el factor de potencia de salida, frecuencia de salida de ajuste autom&aacute;tico, sistema inteligente de gesti&oacute;n de la bater&iacute;a y la gesti&oacute;n de la red, HT11 es una opci&oacute;n perfecta para las computadoras, equipos de telecomunicaciones y otros dispositivos sensibles</em></p>\n", "1", NULL, "ser_imas_1483375949_960x720.jpg", NULL, "atc_1483375916.pdf");
#
#
INSERT INTO `project_galleries_photos` VALUES ("22", "2017-01-02 12:01:56", "2017-01-06 10:08:57", NULL, "1", "12", NULL, "0000-00-00 00:00:00", "TRIFÁSICO", "<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones</p>\n", "1", NULL, "ser_imas_1483715337_277x212.jpg", NULL, "atc_1483376465.pdf");
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
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("12", "2016-12-30 15:21:04", "0000-00-00 00:00:00", NULL, "1", NULL, "13", "galfot_1483129264_1000x1000.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("13", "2016-12-30 15:42:06", "0000-00-00 00:00:00", NULL, "1", NULL, "14", "galfot_1483130525_800x517.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("14", "2016-12-30 15:46:12", "0000-00-00 00:00:00", NULL, "1", NULL, "15", "galfot_1483130771_800x982.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("15", "2016-12-30 15:50:30", "0000-00-00 00:00:00", NULL, "1", NULL, "16", "galfot_1483131030_305x224.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("16", "2016-12-30 15:53:00", "0000-00-00 00:00:00", NULL, "1", NULL, "17", "galfot_1483131180_800x688.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("17", "2016-12-30 15:56:43", "0000-00-00 00:00:00", NULL, "1", NULL, "18", "galfot_1483131403_487x505.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("18", "2016-12-30 16:14:46", "0000-00-00 00:00:00", NULL, "1", NULL, "19", "galfot_1483132486_700x784.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("19", "2016-12-30 16:15:33", "0000-00-00 00:00:00", NULL, "1", NULL, "19", "galfot_1483132533_800x911.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("10", "2016-12-29 15:59:37", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1483045177_206x268.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("11", "2016-12-29 15:59:43", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1483045183_250x250.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("20", "2017-01-02 11:52:57", "0000-00-00 00:00:00", NULL, "1", NULL, "21", "galfot_1483375976_960x720.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("21", "2017-01-02 11:53:20", "0000-00-00 00:00:00", NULL, "1", NULL, "16", "galfot_1483376000_960x720.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("22", "2017-01-02 11:54:01", "0000-00-00 00:00:00", NULL, "1", NULL, "16", "galfot_1483376039_2219x2274.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("23", "2017-01-02 11:55:43", "0000-00-00 00:00:00", NULL, "1", NULL, "17", "galfot_1483376143_800x792.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("24", "2017-01-02 11:55:51", "0000-00-00 00:00:00", NULL, "1", NULL, "17", "galfot_1483376151_800x766.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("25", "2017-01-06 10:09:10", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1483715350_358x341.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("26", "2017-01-06 10:09:15", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1483715355_378x246.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("27", "2017-01-06 10:12:57", "0000-00-00 00:00:00", NULL, "1", NULL, "20", "galfot_1483715577_487x505.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("28", "2017-01-06 10:15:27", "0000-00-00 00:00:00", NULL, "1", NULL, "22", "galfot_1483715727_277x212.jpg", NULL, "1");
#
#
INSERT INTO `project_galleries_photos_photos` VALUES ("29", "2017-01-11 11:26:24", "0000-00-00 00:00:00", NULL, "1", NULL, "19", "galfot_1484151984_500x458.jpg", NULL, "1");
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
  `url` varchar(80) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  `file` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects` VALUES ("10", "2016-12-30 15:29:08", "2016-12-30 15:34:02", NULL, "1", "100", NULL, "0000-00-00 00:00:00", "estabilizadores", "ESTABILIZADORES", "Tecnología 100% estado sólido robusto, rápido en respuesta ideal para zonas industriales", "<p>Tecnolog&iacute;a 100% estado s&oacute;lido robusto, r&aacute;pido en respuesta ideal para zonas industriales.</p>\n\n<p>USOS: equipos de c&oacute;mputo; electr&oacute;nicos y&nbsp; equipos m&eacute;dicos. Alimentados desde una l&iacute;nea con fluctuaciones con baja o alta tensi&oacute;n, transitorias o permanentes; provee una salida estabilizada por pasos sin interrupciones.</p>\n", "1", "pro_1483129747_800x517.jpg");
#
#
INSERT INTO `projects` VALUES ("11", "2016-12-30 15:31:20", "2016-12-30 15:33:47", NULL, "1", "90", NULL, "0000-00-00 00:00:00", "ups", "UPS", "Serie HT11 es UPS de doble conversión en línea con la tecnología completa de control de DSP. Con entrada alta y el factor de potencia de salida, frecuencia de salida de ajuste automático, sistema inteligente de gestión de la batería y la gestión de la red, HT11 es una opción perfecta para las computadoras, equipos de telecomunicaciones y otros dispositivos sensibles.", "<p><em>Serie HT11 es UPS de doble conversi&oacute;n en l&iacute;nea con la tecnolog&iacute;a completa de control de DSP. Con entrada alta y el factor de potencia de salida, frecuencia de salida de ajuste autom&aacute;tico, sistema inteligente de gesti&oacute;n de la bater&iacute;a y la gesti&oacute;n de la red, HT11 es una opci&oacute;n perfecta para las computadoras, equipos de telecomunicaciones y otros dispositivos sensibles.</em></p>\n", "1", "pro_1483129880_305x224.jpg");
#
#
INSERT INTO `projects` VALUES ("12", "2016-12-30 15:34:01", "2016-12-30 15:36:09", NULL, "1", "80", NULL, "0000-00-00 00:00:00", "transformadores", "TRANSFORMADORES", "El transformador de aislamiento brinda  mayor atenuación de ruidos a través de una pantalla electrostática. Ideal para centros de cómputo e instalaciones industriales. Presentaciones en Monofasico ", "<p><strong>El transformador de aislamiento brinda &nbsp;mayor atenuaci&oacute;n de ruidos a trav&eacute;s de una pantalla electrost&aacute;tica. Ideal para centros de c&oacute;mputo e instalaciones industriales. Presentaciones en Monof&aacute;sico&nbsp; &nbsp;</strong></p>\n", "1", "pro_1483130041_800x688.jpg");
#
#
INSERT INTO `projects` VALUES ("13", "2016-12-30 15:37:37", "2016-12-30 15:38:09", NULL, "1", "70", NULL, "0000-00-00 00:00:00", "luces-de-emergencia", "LUCES DE EMERGENCIA", NULL, NULL, "1", "pro_1483130257_800x912.jpg");
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
  `url` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects_groups` VALUES ("1", "0000-00-00 00:00:00", "2016-12-29 13:05:32", NULL, "1", NULL, "ESTABILIZADORES", "1", "estabilizadores");
#
#
INSERT INTO `projects_groups` VALUES ("2", "0000-00-00 00:00:00", "2016-12-29 13:05:39", NULL, "1", NULL, "LUCES DE EMERGENCIA", "1", "luces-de-emergencia");
#
#
INSERT INTO `projects_groups` VALUES ("3", "0000-00-00 00:00:00", "2016-12-29 13:05:46", NULL, "1", NULL, "FUENTES DE PODER", "1", "fuentes-de-poder");
#
#
INSERT INTO `projects_groups` VALUES ("4", "0000-00-00 00:00:00", "2016-12-29 13:05:51", NULL, "1", NULL, "TRANSFORMADORES", "1", "transformadores");
#
#
INSERT INTO `projects_groups` VALUES ("5", "0000-00-00 00:00:00", "2016-12-29 13:05:54", NULL, "1", NULL, "INVERSORES", "1", "inversores");
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
DROP TABLE IF EXISTS `proyectos`;
#
#
CREATE TABLE `proyectos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `carpeta` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `dominio` varchar(80) DEFAULT NULL,
  `ftp_user` varchar(80) DEFAULT NULL,
  `ftp_pass` varchar(80) DEFAULT NULL,
  `ftp_root` varchar(80) DEFAULT NULL,
  `seguro` varchar(80) DEFAULT NULL,
  `para_subir` varchar(80) DEFAULT NULL,
  `fecha_acceso` datetime DEFAULT '0000-00-00 00:00:00',
  `calificacion` char(1) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `semilla` int(10) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `archivo` varchar(80) DEFAULT NULL,
  `firma` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `proyectos` VALUES ("1", "2010-06-30 11:50:37", "2011-06-17 15:59:02", NULL, "1", "proy_1277913027_225x105.jpg", "cajamarcainfo", "cajamarcatravel.info", "Cajamarca Travel Marketing", "", "cajamarcatravel.info", "cjmarca", "travelinfo", "/www/", "0", "0", "2011-07-04 00:50:07", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("2", "2010-06-30 12:22:47", "2011-05-30 11:31:56", NULL, "1", NULL, "afarmach", NULL, "afarmach.com", NULL, "afarmach.com", "afarmach", "dr34chip", "/www/", NULL, NULL, "2011-05-30 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("3", "2010-06-30 12:22:47", "2010-06-30 12:22:47", NULL, "1", NULL, "agente", NULL, "www.agenteinmobiliarioperu.com", NULL, "www.agenteinmobiliarioperu.com", "agente", "prodiserv", "/www/", NULL, NULL, "2013-01-23 03:23:23", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("4", "2010-06-30 12:22:47", "2010-06-30 12:22:47", NULL, "1", NULL, "agentes", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:47", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("5", "2010-06-30 12:22:47", "2010-09-15 02:34:43", NULL, "1", NULL, "agentestop", NULL, "crazyosito", NULL, "crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-12-06 11:21:57", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("6", "2010-06-30 12:22:48", "2011-05-30 11:38:16", NULL, "1", NULL, "alopollo", NULL, "alopollo.com", NULL, "alopollo.com", "pollit", "Alo-pol1", "/", NULL, NULL, "2011-05-30 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("7", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "artemilenario", NULL, "artemilenario.com", NULL, "artemilenario.com", "artemili", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("8", "2010-06-30 12:22:48", "2010-07-27 17:35:07", NULL, "1", NULL, "boraedifica", NULL, "boraedifica", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("9", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "cafeexpress", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("10", "2010-07-03 12:26:33", "2011-05-30 11:37:00", NULL, "1", "proy_1278174385_135x120.jpg", "calandria", "calandriatravel.com", "Calandria Travel", "", "calandriatravel.com", "calan", "travel159357", "/www/", "0", "1", "2013-01-14 09:56:36", "0", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("11", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "canon", NULL, "canondelapurimac.com", NULL, "canondelapurimac.com", "canondel", "salas", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("12", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "casalinda", NULL, "casalindaperu.com", NULL, "casalindaperu.com", "casalind", "fG6e1R89", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("13", "2010-06-30 12:22:48", "2010-07-27 17:34:57", NULL, "1", NULL, "ceperson", NULL, "ceperson", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("14", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "clubinvierta", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("15", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "coldserviceperu", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("16", "2010-06-30 12:22:48", "2010-07-27 17:34:49", NULL, "1", NULL, "colesiinmobiliaria", NULL, "colesiinmobiliaria", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("17", "2010-06-30 12:22:48", "2010-07-27 17:34:33", NULL, "1", NULL, "crazy", NULL, "crazy", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("18", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "dcmindustrias", NULL, "dcmindustrias.com", NULL, "dcmindustrias.com", "dcm", "industrias159357", "/www/", NULL, NULL, "2011-06-09 11:02:04", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("19", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "digitalico", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("20", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "dtask", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("21", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "edificiovancouver", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("22", "2010-06-30 13:54:22", "2011-06-17 16:01:24", NULL, "1", "proy_1277920453_75x75.jpg", "emailmarketing", "webtiendas.net", "email marketing", NULL, "webtiendas.net", "tiendas", "sentidos159357", "/www/emailmarketing/", "0", "0", "2010-07-01 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("23", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "enlaca2010", NULL, "lacasadelenvase.com", NULL, "lacasadelenvase.com", "casenv", "enlaca2010", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("24", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "entermedia", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("25", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "equiamerica", NULL, "equiamerica.com", NULL, "equiamerica.com", "equi", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("26", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "ethlodamusic", NULL, "ethlodamusic.com", NULL, "ethlodamusic.com", "ethloda", "music159357", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("27", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "eventostiens", NULL, "eventostiens.com", NULL, "eventostiens.com", "event", "tienspe2010", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("28", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "expoamericano", NULL, "www.expoamericano.com", NULL, "www.expoamericano.com", "expoamer", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("29", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "forteplast", NULL, "forteplast.com", NULL, "forteplast.com", "fortwa", "plastef2010", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("30", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "heteria", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("31", "2010-07-08 07:13:07", "2010-07-12 12:58:03", NULL, "1", "proy_1278587578_114x75.jpg", "iaac", "iaacuscolima.com", "iaacuscolima.com", "null", "iaacuscolima.com", "iaacusco", "iaa159357", "/www/", "null", "null", "2011-09-14 22:27:35", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("32", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "iaacusco", NULL, "webtiendas.net", NULL, "webtiendas.net", "tiendas", "tupac", "/www/iaacusco", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("34", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "istpoo", NULL, "istpoo.edu.pe", NULL, "istpoo.edu.pe", "apoo123", "106902", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("35", "2010-06-30 12:22:48", "2010-06-30 12:22:48", NULL, "1", NULL, "kankio", NULL, "kankio.com", NULL, "kankio.com", "kankio", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("36", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "kkiery", NULL, "www.kkieri.com", NULL, "www.kkieri.com", "kkieri", "159357", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("37", "2010-07-27 14:16:27", "2011-06-17 16:00:35", NULL, "1", "proy_1280254574_232x73.jpg", "kkiery2", NULL, "superplazavirtual.com", NULL, "superplazavirtual.com", "plaza", "virtual", "/www/", NULL, "0", "2010-11-22 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("38", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "kusina", NULL, "kusinapachacamac.com.pe", NULL, "kusinapachacamac.com.pe", "kusina", "abut761", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("39", "2010-07-27 14:09:39", "2010-07-27 14:09:29", NULL, "1", "proy_1280254171_210x104.jpg", "kusinapachacamac", NULL, "kusinapachacamac.com.pe", "null", "kusinapachacamac.com.pe", "kusina", "abut761", "/www/", "null", "null", "2011-05-24 14:06:07", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("40", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "limamarinaclub", NULL, "limamarinaclub.com", NULL, "limamarinaclub.com", "marina3d", "lmc159357", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("41", "2010-06-30 12:22:49", "2010-07-27 17:34:12", NULL, "1", NULL, "lupe", NULL, "lupe", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("42", "2010-06-30 12:22:49", "2010-07-27 17:34:04", NULL, "1", NULL, "luqma", NULL, "luqma", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("43", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "mainua", NULL, "mainuatours.com", NULL, "mainuatours.com", "mainua", "alpha", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("44", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "majocil", NULL, "majocil.com", NULL, "majocil.com", "majocil", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("45", "2010-08-03 11:09:42", "2011-05-30 11:32:37", NULL, "1", "proy_1280848171_294x69.jpg", "meijer", "meijereventos.com", "Meijer Eventos", NULL, "meijereventos.com", "meijer", "prodiserv", "/www/", "0", "1", "2011-07-04 03:25:44", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("46", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "mildelicias", NULL, "mildelicias.com", NULL, "mildelicias.com", "delicias", "md159357", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("47", "2011-04-28 14:47:10", "2011-04-28 14:46:41", NULL, "1", "proy_1304020007_298x100.jpg", "myhouse", "www.montes.pe", "MONTES.PE", "null", "www.montes.pe", "montespe", "napoleon", "/www/", "0", "0", "2011-11-16 14:23:26", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("48", "2010-06-30 12:22:49", "2011-04-06 20:55:11", NULL, "1", NULL, "myhousecompe", NULL, "montes.pe", "null", "montes.pe", "montespe", "napoleon", "/www/", "0", "0", "2011-04-06 20:52:55", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("49", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "nivueltaquedarle", NULL, "nivueltaquedarle.com", NULL, "nivueltaquedarle.com", "vuelta09", "quedarle", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("50", "2010-06-30 13:36:30", "2011-06-17 16:03:24", NULL, "1", "proy_1277919380_105x112.jpg", "nivueltaquedarlepe", "nivueltaquedarle.com.pe", "nivueltaquedarle.com.pe", NULL, "nivueltaquedarle.com.pe", "quedarle", "prodiserv", "/www/", "0", "0", "2010-08-09 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("53", "2011-06-07 15:14:27", "2011-06-16 23:35:14", NULL, "1", "proy_1307477657_54x64.jpg", "portafolioeconomico", "portafolioeconomico.com", "Perú Democrata", "", "perudemocrata.com", "ppkdemoc", "democracia2011", "/www/", "0", "1", "2013-08-07 07:50:44", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("54", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "preinca", NULL, "preinca.com", NULL, "preinca.com", "preinca", "losincas", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("55", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "socioesi", NULL, "consorcioesi.com", NULL, "consorcioesi.com", "consor", "socioesi", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("56", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "soedsac", NULL, "webtiendas.net", NULL, "webtiendas.net", "tiendas", "wt159357", "/www/soed/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("57", "2010-06-30 13:37:35", "2010-07-13 12:16:39", NULL, "1", "proy_1277919443_275x300.jpg", "starpartner", "", "starpartner.com.pe", "", "starpartner.com.pe", "star", "javana2010", "/www/", "null", "null", "2010-11-04 13:01:24", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("58", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "tavara", NULL, "waltertavara.com", NULL, "waltertavara.com", "walter", "tavara", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("59", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "unicornioazul", NULL, "unicornioazul.com.pe", NULL, "unicornioazul.com.pe", "unicor7", "unico2010", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("60", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "universmusic", NULL, "www.crazyosito.com", NULL, "www.crazyosito.com", "crazy", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("61", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "urbaniza", NULL, "urbaniza.com", NULL, "urbaniza.com", "urbaniza", "urbaniza", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("62", "2010-06-30 12:22:49", "2010-06-30 12:22:49", NULL, "1", NULL, "vipunder", NULL, "vip-underwear.net", NULL, "vip-underwear.net", "vipunder", "prodiserv", "/www/", NULL, NULL, "2010-06-30 12:22:49", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("63", "2010-06-30 12:22:50", "2010-07-27 17:33:32", NULL, "1", NULL, "zazzle", NULL, "zazzle", NULL, NULL, NULL, NULL, NULL, NULL, NULL, "2010-06-30 12:22:50", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("68", "2010-07-13 13:35:13", "0000-00-00 00:00:00", NULL, "1", NULL, "mecatronicsystems", "mecatronicsystems.com", "mecatronicsystems.com", "", "mecatronicsystems.com", "mecatron", "prodiserv", "/www/", "", "", "2010-07-13 14:02:08", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("69", "2010-07-21 12:18:21", "2010-07-21 12:45:51", NULL, "1", NULL, "kankio2", "kankio.com", "kankio 2", "null", "kankio.com", "kankio", "kanarq2010", "/www/", "0", "0", "2010-07-21 12:17:01", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("70", "2011-05-27 09:09:05", "2011-06-16 23:33:41", NULL, "1", "proy_1306505335_305x100.jpg", "mitiendaderegalos", "globalvsc.com", "Ni Vuelta Que Darle", NULL, "nivueltaquedarle.com", "nicom1", "globalvscnvqd", "/www/", "0", "1", "2013-05-19 19:44:51", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("71", "2010-08-03 11:00:35", "2011-06-17 15:59:55", NULL, "1", "proy_1280847626_152x183.jpg", "conejitasperu", "conejitas-peru.com", "Conejitas Perú", "null", "conejitas-peru.com", "conejita", "aldomiraval2011", "/www/", "0", "0", "2011-05-30 00:00:00", "0", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("72", "2010-08-06 22:50:30", "0000-00-00 00:00:00", NULL, "1", NULL, "bestpowerperu", "bestpowerperu.com", "bestpowerperu.com", NULL, "bestpowerperu.com", "bepoer", "perupower2010", "/www/", NULL, NULL, "2010-08-07 12:09:36", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("74", "2010-08-16 13:42:15", "0000-00-00 00:00:00", NULL, "1", NULL, "josecatano", "josecatano.com", "josecatano.com", NULL, "josecatano.com", "setano", "catano2010", "/www/", "0", "0", "2010-08-16 19:00:16", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("76", "2010-08-25 14:13:51", "0000-00-00 00:00:00", NULL, "1", NULL, "disegnaarq", "disegna-arq.com", "disegna-arq.com", NULL, "disegna-arq.com", "arquit", "disegna2010", "/www/", NULL, NULL, "2010-08-26 10:56:22", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("77", "2010-09-01 10:26:50", "0000-00-00 00:00:00", NULL, "1", NULL, "comercialelsiglo", "comercialelsiglo.pe", "comercialelsiglo", NULL, "comercialelsiglo.pe", "sigloc", "comercial2010", "/www/", NULL, NULL, "2010-09-01 19:06:01", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("78", "2010-09-01 10:49:06", "0000-00-00 00:00:00", NULL, "1", NULL, "albergueinkasisa", "albergueinkasisa.com", "albergueinkasisa", NULL, "albergueinkasisa.com", "kasisa", "albergue2010", "/www/", NULL, NULL, "2010-09-01 10:48:37", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("79", "2010-09-01 10:56:45", "0000-00-00 00:00:00", NULL, "1", NULL, "codisaelectronic", "codisaelectronic.pe", "codisaelectronic", NULL, "codisaelectronic.pe", "lectro", "codisa2010", "/www/", NULL, NULL, "2010-09-01 19:04:42", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("80", "2010-09-01 11:27:59", "0000-00-00 00:00:00", NULL, "1", NULL, "puericultoriojavadeayacucho", "puericultoriojavadeayacucho.com", "puericultoriojavadeayacucho", NULL, "puericultoriojavadeayacucho.com", "ayacho", "puericultorio2010", "/www/", NULL, NULL, "2010-09-01 12:31:25", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("81", "2010-09-09 15:39:44", "2011-04-28 09:18:24", NULL, "1", NULL, "perutradex", NULL, "perutradex", NULL, "perutradex.com", "tradex", "ingventas2010", "/www/", NULL, NULL, "2010-09-09 00:00:00", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("82", "2010-09-09 16:28:03", "2010-09-09 16:35:23", NULL, "1", NULL, "cienciaceleste", "cienciaceleste.org.pe/", "cienciaceleste", NULL, "cienciaceleste.org.pe", "cceleste", "c1enc1a", "/www/", NULL, NULL, "2010-10-04 18:07:10", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("83", "2010-09-16 14:01:24", "2010-09-16 14:02:43", NULL, "1", NULL, "kralovati", "kralovati.com", "kralovati.com", NULL, "kralovati.com", "kravot", "kralova2010", "/www/", NULL, NULL, "2010-09-16 14:11:06", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("94", "2010-10-05 21:44:03", "0000-00-00 00:00:00", NULL, "1", NULL, "todohoteles", "todohotelesperu.com", "todohotelesperu", NULL, "todohotelesperu.com", "hotelspe", "calandria", "/www/", NULL, NULL, "2010-10-05 21:43:07", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("95", "2010-10-11 09:02:15", "0000-00-00 00:00:00", NULL, "1", NULL, "inkasisahostel", "inkasisahostel.com", "inkasisahostel.com", NULL, "inkasisahostel.com", "hostka", "hotesisa2010", "/www/", NULL, NULL, "2010-10-11 09:04:03", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("96", "2010-10-12 20:18:08", "0000-00-00 00:00:00", NULL, "1", NULL, "postespasa", "postespasa.com", "postespasa.com", NULL, "postespasa.com", "postespa", "patespo2010", "/www/", NULL, NULL, "2010-10-12 22:32:48", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("97", "2010-10-26 17:04:53", "0000-00-00 00:00:00", NULL, "1", NULL, "omeghaconstructor", "omeghaconstructor.com", "omeghaconstructor", NULL, "omeghaconstructor.com", "omegha", "oc159357", "/www/", NULL, NULL, "2010-10-27 20:31:27", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("98", "2011-01-16 09:12:19", "2011-06-19 16:03:55", NULL, "1", "proy_1295187130_166x104.jpg", "mismotivos", "mismotivos.com", "Mis Motivos", NULL, "mismotivos.com", "homeromo", "romerotivos2010", "/www/", "0", "1", "2013-05-22 18:57:45", "2", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("100", "2011-01-27 11:51:44", "2011-05-30 11:53:43", NULL, "0", "proy_1296147093_223x443.jpg", "kinetube", "kinetube.com", "Kinetube", "null", "kinetube.com", "kinejuan", "jkkine2010", "/www/", "0", "1", "2011-06-16 08:54:56", "0", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("101", "2011-02-28 00:02:02", "2011-06-26 10:17:15", NULL, "1", "proy_1298869312_267x44.jpg", "olvacompras", "olvacompras.com", "Olva Compras", NULL, "olvacompras.com", "olvacomp", "compraonlineolva1202", "/www/", "0", "1", "2013-02-25 09:31:01", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("102", "2011-03-09 17:33:23", "0000-00-00 00:00:00", NULL, "1", NULL, "introducingperu", "introducingperu.com", "Introducing Peru", NULL, "introducingperu.com", "introdu", "cinperu", "/www/", NULL, NULL, "2011-03-09 17:32:30", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("103", "2011-11-10 20:35:40", "2011-11-10 20:36:36", NULL, "1", "proy_1320975331_293x76.jpg", "aquarelah", "dondeencontrar.com", "Aquarelah", NULL, "dondeencontrar.com", "dondeen", "platano", "/www/", "0", "1", "2011-12-09 16:04:19", NULL, "1", "145", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("104", "2011-05-18 17:47:46", "2011-05-19 20:04:12", NULL, "1", "proy_1305758856_297x67.jpg", "qosmica", "dondeencontrar.com", "qosmica", NULL, "dondeencontrar.com", "dondeen", "platano", "/www/", NULL, NULL, "2011-05-24 13:44:18", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("110", "2011-06-15 16:08:56", "0000-00-00 00:00:00", NULL, "1", NULL, "MUNIPOMA", "MUNIPOMA.GOB.PE", "MUNIPOMA.GOB.PE", NULL, "MUNIPOMA.GOB.PE", "lospomabambinos", "loscedros150", "/www/", NULL, NULL, "2011-07-06 14:50:53", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("111", "2011-06-21 17:36:55", "0000-00-00 00:00:00", NULL, "1", NULL, "travelofertas", "travelofertas.info", "travelofertas", NULL, "travelofertas.info", "traofer", "ofertra", "/www/", NULL, NULL, "2011-06-21 17:57:01", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("112", "2011-06-21 17:57:46", "2011-06-21 17:58:52", NULL, "1", NULL, "ofertastravel", "ofertastravel.info", "ofertastravel", NULL, "ofertastravel.info", "ofertra", "traofer", "/www/", NULL, NULL, "2011-06-21 17:57:06", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("165", "2011-06-22 01:14:37", "2011-11-08 21:03:12", NULL, "1", NULL, "eshoradeviajar", "eshoradeviajar.com", "eshoradeviajar", NULL, "eshoradeviajar.com", "eshora", "deviajar", "/www/", NULL, NULL, "2011-07-04 00:49:57", NULL, NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("134", "2011-07-06 16:17:48", "2011-07-06 16:18:35", NULL, "1", NULL, "hitogroup", "hitogroup.com", "Hito Group", NULL, "hitogroup.com", "hitogr", "proyectohg", "/www/", "0", "0", "2011-07-08 09:42:54", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("135", "2011-11-06 20:03:55", "2011-11-07 20:25:29", NULL, "1", "proy_1320627827_377x91.jpg", "crmcallcenter", "vehiculos.com.pe", "CRM INCAPOWER", NULL, "vehiculos.com.pe", "circulan", "toyohatsutruck2011", "/www/", "0", "1", "2013-06-27 20:08:07", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("136", "2011-07-18 03:35:05", "2011-11-03 12:06:58", NULL, "1", "proy_1310978096_277x127.jpg", "olvacourier", "prodiserv.com/olvacourier", "Olvacourier", NULL, "prodiserv.com", "prodiser", "tavarasac", "/www/olvacourier/", "0", "1", "2014-08-04 13:56:32", "0", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("137", "2011-08-02 13:36:11", "2011-08-02 13:36:01", NULL, "0", "proy_1312310163_172x39.jpg", "truckmax", "truckmax.com.pe", "Truck Max", NULL, "truckmax.com.pe", "truck", "r0manr0man", "/www/", "0", "1", "2011-10-25 15:09:24", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("138", "2011-08-29 11:23:03", "2011-08-31 05:44:04", NULL, "0", "proy_1314634974_244x109.jpg", "majocil", "majocil.com.pe", "Majocil", NULL, "majocil.com.pe", "majocil", "prodiserv", "/www/", "0", "1", "2011-09-02 14:28:52", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("139", "2011-09-27 20:55:05", "2011-11-23 15:31:49", NULL, "1", "proy_1317174893_243x104.jpg", "bukyncom", "bukyn.com", "BUKYN", NULL, "bukyn.com", "bukyn", "platano", "/www/", "0", "0", "2011-09-28 10:33:26", NULL, "1", "145", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("140", "2011-10-19 18:37:40", "0000-00-00 00:00:00", NULL, "0", NULL, "majocilcasas", "casasmaderaprefabricadas.com", "majocil casas", NULL, "casasmaderaprefabricadas.com", "neocasas", "majocasas2011", "/www/", "0", "1", "2011-10-19 20:33:09", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("141", "2011-11-02 12:43:41", "2011-11-03 12:08:46", NULL, "1", NULL, "incapower", "incapower.vehiculos.com.pe", "incapower", NULL, "vehiculos.com.pe", "circulan", "toyohatsutruck2011", "/incapower/", "0", "1", "2011-11-12 10:14:32", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("142", "2011-11-03 12:10:26", "0000-00-00 00:00:00", NULL, "1", NULL, "daihatsu", "daihatsu.vehiculos.com.pe", "daihatsu", NULL, "vehiculos.com.pe", "circulan", "toyohatsutruck2011", "/www/daihatsu/", "0", "1", "2011-11-04 09:35:36", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("143", "2011-11-11 14:33:54", "2011-11-11 14:33:43", NULL, "1", "proy_1321040025_172x39.jpg", "crm", "crmcallcenter.info", "CRM TRUCKMAX", NULL, "crmcallcenter.info", "crmcallc", "chalujabuna2011", "/www/", "0", "1", "2012-11-08 21:54:02", NULL, "1", "137", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("144", "2011-11-09 12:53:25", "2011-11-09 12:53:13", NULL, "1", "proy_1320861195_192x70.jpg", "ceavirtual", "cea-virtual.com", "CEA-VIRTUAL", NULL, "cea-virtual.com", "ceavirtu", "ruceturvi2011", "/www/", "0", "1", "2011-11-23 02:32:54", NULL, "1", "136", "informes@cea-virtual.com", "http://cea-virtual.com/propuesta1.html", "1");
#
#
INSERT INTO `proyectos` VALUES ("145", "2011-11-09 12:51:06", "2011-11-09 12:50:55", NULL, "1", "proy_1320861057_267x49.jpg", "saludholisticaperu", "saludholisticaperu.com", "Salud Holística Perú", NULL, "saludholisticaperu.com", "saludhol", "pilar2011salud", "/www/", NULL, "1", "2012-12-03 08:26:02", NULL, "1", "143", "servicios@saludholisticaperu.com", "http://www.saludholisticaperu.com/propuesta1.html", "1");
#
#
INSERT INTO `proyectos` VALUES ("146", "2011-11-18 16:52:08", "2011-11-23 15:32:24", NULL, "1", NULL, "bursa", "bukyn.com", "Bursa", NULL, "bukyn.com", "bukyn", "platano", "/www/", "0", "0", "2011-11-23 15:33:04", NULL, "1", "145", "ventas@bursa.com", NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("147", "2011-12-04 21:21:57", "2011-12-04 21:21:48", NULL, "1", "proy_1323051710_91x93.jpg", "cgtp", "prodiserv.com/cgtp", "PROYECTO CGTP", NULL, "prodiserv.com", "prodiser", "tavarasac", "/www/cgtp", "0", "1", "2013-07-10 19:39:21", NULL, "1", "136", NULL, "http://prodiserv.com/cgtp/propuesta_home_2012.png", "1");
#
#
INSERT INTO `proyectos` VALUES ("148", "2012-09-02 17:02:30", "2013-03-24 08:55:12", NULL, "1", NULL, "crmdiamantes", "incapower.pe", "DIAMANTE DEL PACIFICO", NULL, "incapower.pe", "userinca", "inca2012", "/www/", "0", "1", "2014-10-28 17:08:35", "2", "1", "135", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("149", "2012-09-03 11:30:14", "0000-00-00 00:00:00", NULL, "1", NULL, "p1", NULL, "p1", NULL, NULL, NULL, NULL, "/www/", "0", "0", "2012-09-03 11:29:40", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("150", "2012-09-03 11:30:24", "0000-00-00 00:00:00", NULL, "1", NULL, "p2", NULL, "p2", NULL, NULL, NULL, NULL, "/www/", "0", "0", "2012-09-03 11:29:40", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("151", "2012-09-03 11:30:37", "2012-11-28 02:28:30", NULL, "1", NULL, "ejm", "ejm.com.pe", "ejm", NULL, "ejm.com.pe", "ejmcom", "exercises2012", "/www/", "0", "1", "2013-03-24 10:12:15", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("152", "2012-09-03 11:30:49", "2012-11-28 02:14:33", NULL, "1", NULL, "mecatronic", "mecatronicsystems.com", "mecatronic", NULL, "mecatronicsystems.com", "mecatron", "prodiserv", "/www/", "0", "1", "2013-03-24 10:56:07", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("153", "2012-09-05 10:48:44", "0000-00-00 00:00:00", NULL, "1", NULL, "portalcursos", "rincondemalena.com", "portalcursos", NULL, "rincondemalena.com", "rinconm", "rincon159357", "/www/", "0", "0", "2012-09-05 09:22:57", NULL, "1", "101", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("154", "2012-10-11 09:35:44", "2012-10-24 10:47:00", NULL, "1", NULL, "truckmax3", "truckmax.com.pe", "CRM TRUCKMAX 3", NULL, "174.120.118.226", "truckmax", "i2%Jkhab7Jir", "/www/", "0", "1", "2013-06-20 19:50:55", NULL, "1", "135", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("155", "2012-11-28 02:09:20", "2012-11-28 02:10:14", NULL, "1", NULL, "ichibans", "ichibansystems.com", "Ichibans", NULL, "ichibansystems.com", "ichibans", "walichitems2011", "/www/", "0", "1", "2013-01-15 20:56:05", NULL, "1", "145", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("156", "2013-01-11 03:23:09", "2014-10-23 09:25:26", NULL, "1", "proy_1357892574_x.", "nerin", "nering.net", "nering", NULL, "nering.net", "nering", "puhna+lq", "/www/", "0", "1", "2014-10-29 11:29:23", "1", "1", "151", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("157", "2012-11-28 02:35:25", "0000-00-00 00:00:00", NULL, "1", NULL, "timbrame", "timbra.me", "timbrame", NULL, "timbra.me", "timbra", "mememe", "/www/", "0", "1", "2012-11-28 02:31:30", NULL, "1", "151", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("158", "2013-01-15 19:31:09", "0000-00-00 00:00:00", NULL, "1", NULL, "inmoobi", "inmoobi.com", "Inmoobi", NULL, "inmoobi.com", "inmoobi", "reneguillecaro", "/www/", "0", "0", "2013-01-19 17:47:18", NULL, "1", "101", "guillermolozan@gmail.com", NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("159", "2013-01-23 07:50:30", "2013-01-30 07:43:54", NULL, "1", NULL, "montescompe", "montes.com.pe", "Montes", NULL, "montes.com.pe", "montesco", "napoleon", "/www/", "0", "1", "2013-03-30 21:18:21", NULL, "1", "156", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("160", "2013-01-30 07:44:49", "0000-00-00 00:00:00", NULL, "1", NULL, "covilla", "condominiocovilla.com", "Condominio Covilla", NULL, "condominiocovilla.com", "covilla", "napoleon", "/www/", "0", "1", "2013-01-30 07:45:48", NULL, "1", "159", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("161", "2013-03-30 17:52:49", "0000-00-00 00:00:00", NULL, "1", NULL, "nvqdi", "nivueltaquedarle.info", "nvqdi", NULL, "nivueltaquedarle.info", "nivuelta", "abut761", "/www/", "0", "1", "2013-06-24 21:18:37", NULL, "1", "151", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("162", "2013-04-07 11:32:27", "2013-06-04 18:48:16", NULL, "1", NULL, "crminmobiliario", "crminmobiliario.info", "CRM INMOBILIARIO", NULL, "crminmobiliario.info", "crminmob", "inmue2013", "/www/", "0", "1", "2014-10-28 18:16:26", "2", "1", "148", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("163", "2013-06-24 21:23:28", "2013-07-01 01:08:54", NULL, "1", NULL, "munipomabamba", "munipomabamba.gob.pe", "munipomabamba", NULL, "munipomabamba.gob.pe", "pomabamb", "munipomuBA12", "/www/", "0", "1", "2013-07-30 18:22:38", NULL, "1", "147", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("164", "2014-10-30 07:19:01", "0000-00-00 00:00:00", NULL, "1", NULL, "polar", "polarbear.com.pe", "polar", NULL, "polarbear.com.pe", "polarbea", "beapola200814", "/www/", "0", "1", "2014-10-30 07:27:37", NULL, "1", "156", "guillermolozan@gmail.com", NULL, "1");
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
INSERT INTO `testimonios` VALUES ("1", "2016-11-28 09:13:27", "0000-00-00 00:00:00", NULL, "1", NULL, "0000-00-00 00:00:00", "Testimonio 1", "tesfot_1480342407_960x709.jpg", "tesban_1480342407_1812x426.jpg", "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2016-02-02 09:43:40", "2017-02-14 12:20:19", NULL, "1", "administrador", "onesinlimites", NULL);
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
