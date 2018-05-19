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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos` VALUES ("1", "2015-08-30 21:55:59", "0000-00-00 00:00:00", NULL, "1", "banner_main", NULL, "1");
#
#
INSERT INTO `banners_fotos` VALUES ("2", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "descargas", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("26", "2018-02-22 10:19:53", "0000-00-00 00:00:00", NULL, "0", "1", "banfot_1519312792_906x390.jpg", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("27", "2018-02-22 10:20:02", "0000-00-00 00:00:00", NULL, "0", "1", "banfot_1519312801_906x390.jpg", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("28", "2018-02-22 10:20:10", "0000-00-00 00:00:00", NULL, "0", "1", "banfot_1519312809_906x390.jpg", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("34", "2018-05-14 22:17:47", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1526354266_1431x448.jpg", NULL, "3", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("30", "2018-02-22 10:20:25", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1519312824_906x390.jpg", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("33", "2018-05-14 20:49:41", "2018-05-14 22:20:10", NULL, "1", "1", "banfot_1526348980_1440x448.jpg", NULL, "6", NULL, "1");
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
INSERT INTO `configuraciones` VALUES ("1", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "emails_publicos", "sgi@sginvestments.com");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "sgi@sginvestments.com");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
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
INSERT INTO `configuraciones_root` VALUES ("1", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "titulo_home", "sgi");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "email_fromname", "sgi");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "email_from", "sgi@sginvestments.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "nombre_empresa", "sgi");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "titulo_web", "sgi");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2015-08-30 19:28:03", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
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
  `dni` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos` VALUES ("2", "2016-02-11 17:11:53", "2017-10-18 14:19:57", NULL, "1", "clientes", NULL, "Marcas", "<p>Algunos de nuestros eventos</p>\n", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("95", "2017-10-03 18:04:06", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071846_148x90.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("96", "2017-10-03 18:04:12", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071852_139x99.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("97", "2017-10-03 18:04:19", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071858_227x81.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("98", "2017-10-03 18:04:26", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071866_172x80.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("99", "2017-10-03 18:04:34", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071874_206x66.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("100", "2017-10-03 18:04:42", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071882_183x73.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("101", "2017-10-03 18:04:51", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071891_182x72.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("102", "2017-10-03 18:05:04", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071904_189x93.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("103", "2017-10-03 18:05:10", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071910_170x117.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("104", "2017-10-03 18:05:17", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1507071917_200x92.jpg", NULL, NULL, "1");
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
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  `weight` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos` VALUES ("1", "2017-05-18 02:02:37", "2018-05-15 00:41:42", NULL, "1", NULL, "2017-05-18 02:02:29", "Musica", NULL, "1", NULL);
#
#
INSERT INTO `galleries_videos` VALUES ("2", "2018-05-15 00:42:02", "0000-00-00 00:00:00", NULL, "1", NULL, "2018-05-15 00:41:06", "Ardyss", NULL, "1", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos_videos` VALUES ("8", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "1", "Keane - Somewhere Only We Know", "Oextk-If8HQ", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("5", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "1", "Ian van Dahl - Secret Love", "cxien6Hnx1s", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("6", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "1", "Lasgo - Something", "QWbAaTDlBls", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("7", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "1", "Audien feat. Lady Antebellum - Something Better", "_sDbRhC7rm8", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("4", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "1", "Milky- Just The Way You Are", "Hx6WuGfOV0Q", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "1", "Garbage - Only Happy When It Rains", "GpBFOJ3R0M4", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("10", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "1", "Huey Lewis & The News - Heart & Soul", "8TdaXhpjHws", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("11", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "1", "Bryan Adams - Somebody", "VqhELBUdYqM", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("12", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "1", "The Cars - Drive", "xuZA6qiJVfU", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("13", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "1", "Cheap Trick - The Flame", "muhFxXce6nA", "1");
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
INSERT INTO `links` VALUES ("1", "2015-09-22 16:34:33", "2017-06-08 13:45:03", NULL, "1", "10", "MEF", "http://apps2.mef.gob.pe/consulta-vfp-webapp/consultaExpediente.jspx;jsessionid=0", "1", "links_1442957673_629x167.jpg");
#
#
INSERT INTO `links` VALUES ("2", "2015-09-22 16:34:12", "2017-06-08 13:44:39", NULL, "1", "9", "OSCE", "http://portal.osce.gob.pe/osce/", "1", "links_1442957652_404x171.png");
#
#
INSERT INTO `links` VALUES ("3", "2015-09-22 16:33:55", "2017-06-08 13:44:28", NULL, "1", "8", "SUNAT", "http://www.sunat.gob.pe", "1", "links_1442957635_312x76.gif");
#
#
INSERT INTO `links` VALUES ("4", "2015-09-22 18:32:36", "2017-06-08 13:44:13", NULL, "1", "7", "BCP", "https://www.viabcp.com", "1", "links_1442964755_282x116.png");
#
#
INSERT INTO `links` VALUES ("5", "2015-09-22 18:32:22", "2017-06-08 13:43:54", NULL, "1", "6", "EL COMERCIO", "http://elcomercio.pe", "1", "links_1442964742_580x126.png");
#
#
INSERT INTO `links` VALUES ("6", "2015-09-22 16:32:33", "2017-06-08 13:43:42", NULL, "1", "5", "GESTION", "http://gestion.pe", "1", "links_1442957553_300x100.jpg");
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `pages_photos` VALUES ("1", "2015-09-02 12:30:52", "0000-00-00 00:00:00", NULL, "1", NULL, "0000-00-00 00:00:00", "Productos", NULL, "1");
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
  `html` longtext,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
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
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `text` longtext,
  `html` longtext,
  `id_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "0000-00-00 00:00:00", "2017-06-08 20:15:51", NULL, "1", NULL, "BIENVENIDOS", NULL, NULL, "1", NULL, "<p>Somos Consorcio Esi &quot;Soluciones Generales&quot; con 10 a&ntilde;os al servicio, nos ha permitido lograr ser calificados y reconocidos como una gran empresa en consultor&iacute;a, construcci&oacute;n, comercializaci&oacute;n de productos y mantenimiento de estructuras para cada tipo de negocio de acorde a sus necesidades.</p>\n\n<p>Toda esta experiencia, nos da la solidez para trabajar con&nbsp;&nbsp; clientes como ustedes, porque sabemos de sus exigencias.</p>\n\n<p>Gracias por visitar nuestra web y esperamos que sea de su utilidad.</p>\n", NULL);
#
#
INSERT INTO `paginas` VALUES ("12", "2016-03-01 21:53:31", "2016-03-03 21:59:05", NULL, "1", "20", "Sunat regula emisión electrónica de comprobantes de retención y percepción", NULL, NULL, "1", "Mediante Resolución de Superintendencia 274-2015 publicada hoy en el diario El Peruano, la Sunat a dispuesto que los comprobantes de retención y percepción sean emitidos en forma electrónica, a partir del 1º de diciembre del 2015. Asimismo la norma señala que se encuentran obligados los que a la fecha de entrada en vigencia de la …", "<p>Mediante Resoluci&oacute;n de Superintendencia 274-2015 publicada hoy en el diario El Peruano, la Sunat a dispuesto que los comprobantes de retenci&oacute;n y percepci&oacute;n sean emitidos en forma electr&oacute;nica, a partir del 1&ordm; de diciembre del 2015.</p>\n\n<p>Asimismo la norma se&ntilde;ala que se encuentran obligados los que a la fecha de entrada en vigencia de la presente resoluci&oacute;n tengan la calidad de agentes de retenci&oacute;n y agentes de percepci&oacute;n, ademas de los que sean designados como tal en la indicada resoluci&oacute;n.</p>\n\n<p>Adjuntamos link para descargar la referida Resoluci&oacute;n 274-2015/SUNAT.</p>\n\n<p>http://www.sunat.gob.pe/legislacion/superin/2015/274-2015.pdf &nbsp;</p>\n", "3");
#
#
INSERT INTO `paginas` VALUES ("13", "2016-03-01 21:53:50", "0000-00-00 00:00:00", NULL, "1", NULL, "Los hemisferios cerebrales mitos y verdades", NULL, NULL, "1", NULL, NULL, "3");
#
#
INSERT INTO `paginas` VALUES ("14", "2016-03-01 21:54:05", "0000-00-00 00:00:00", NULL, "1", NULL, "El aprendizaje basado en proyectos", NULL, NULL, "1", NULL, NULL, "3");
#
#
INSERT INTO `paginas` VALUES ("20", "2015-08-26 17:22:04", "2018-05-15 00:34:24", NULL, "1", "2", "Preguntas Frecuentes", NULL, NULL, "1", NULL, "<p><strong>&iquest;C&oacute;mo hago mi compra en l&iacute;nea?</strong><br />\nPara compras en l&iacute;nea, puede hacerlo con dep&oacute;sito o transferencia bancaria a una de las cuentas que le haremos llegar a su correo.&nbsp;<br />\n<br />\n<strong>El costo de los productos est&aacute; expresado en soles o d&oacute;lares americanos?</strong><br />\nLos precios est&aacute;n consignados en Soles.<br />\n<br />\n<strong>&iquest;Hay un monto m&iacute;nimo de compra para que pueda ser enviado?</strong><br />\nEl monto m&iacute;nimo es de S/. 90.00, al cual deber&aacute; de a&ntilde;adirle los costos de env&iacute;o que ser&aacute;n asumidas por el comprador.<br />\n<br />\n<strong>&iquest;Cu&aacute;l es el costo de env&iacute;o?</strong><br />\nEl costo de env&iacute;o depender&aacute; del departamento en que se encuentre, S/. 15.00 a S/. 20.00<br />\n<br />\n<strong>&iquest;Si compro varios productos me cobran el delivery por cada uno de los productos?</strong><br />\nNo, el delivery se cobra una sola vez, siempre y cuando los productos sean entregados a una misma direcci&oacute;n en una sola vez.&nbsp;<br />\n<br />\n<strong>&iquest;El destinatario debe pagar algo extra al momento que le entrega el producto?</strong><br />\nNo, la persona que recibir&aacute; el producto no tiene que pagar ning&uacute;n monto extra.&nbsp;<br />\n<br />\n<strong>&iquest;C&oacute;mo se efect&uacute;a el env&iacute;o de los productos?</strong><br />\nSe realizan en un promedio de 3 a 4 horas luego de realizada la transacci&oacute;n, previa coordinaci&oacute;n con el comprador. A nivel Nacional en Per&uacute; las entregas se realizan en 3 d&iacute;as &uacute;tiles.<br />\n<br />\n<strong>Si yo quiero que un env&iacute;o llegue a una hora determinada, &iquest;se puede?</strong><br />\nSi, solo para los env&iacute;os dentro de Lima siempre y cuando lo realice con 3 horas&nbsp;anticipaci&oacute;n como m&iacute;nimo. En fechas especiales: D&iacute;a de San Valent&iacute;n, D&iacute;a de la Secretaria, D&iacute;a de la Madre, Navidad no es posible que los env&iacute;os lleguen a una hora determinada. Para otras ciudades no es posible que el env&iacute;o llegue a una hora determinada.<br />\n<br />\n<strong>&iquest;C&oacute;mo tengo la confirmaci&oacute;n de entrega de mi pedido?</strong><br />\nCuando se env&iacute;a por un operador log&iacute;stico, se le confirma el env&iacute;o brindandole el nombre del operador y la foto del comprobante de pago que emite el operador v&iacute;a whatsapp.<br />\n<br />\n<strong>Si quiero comprar algo que no est&aacute; en la tienda virtual, &iquest;me pueden ayudar?</strong><br />\nSi, lo atenderemos con mucho gusto, le recomendamos realizar las consultas respectivas con anticipaci&oacute;n para poder ayudarlo.<br />\n<br />\n<strong>&iquest;Qu&eacute; pasa si van a dejar el producto y no encuentran a alguien en la direcci&oacute;n o no lo pueden recibir?</strong><br />\nEn el caso que tengamos alg&uacute;n problema que no pueda ser solucionado por nosotros, procedemos a comunicarnos con el cliente.<br />\nLos pedidos no entregados regresan a nuestra tienda donde podr&aacute;n ser recogidos por el comprador o el destinatario.&nbsp;</p>\n", "9");
#
#
INSERT INTO `paginas` VALUES ("21", "2015-08-26 17:23:18", "2018-05-15 00:35:11", NULL, "1", "4", "Ardyss en Perú", NULL, NULL, "1", "Somos un grupo de consultoras que promovemos la venta de productos ardyss como distribuidoras independientes. \nDistribuimos a nivel nacional trabajando con los operadores logísticos como Olva Courier y medios de transportes. Asimismo, nos encontramos en los principales distritos de la gran Lima logrando atender de manera personalizada  y satisfactoria en la entrega de los productos.", "<p>Somos un grupo de consultoras que promovemos la venta de productos ardyss como distribuidoras independientes.&nbsp;<br />\nDistribuimos a nivel nacional trabajando con los operadores log&iacute;sticos como Olva Courier y medios de transportes. Asimismo, nos encontramos en los principales distritos de la gran Lima logrando atender de manera personalizada&nbsp; y satisfactoria en la entrega de los productos.</p>\n", "9");
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
  `url` varchar(80) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("9", "0000-00-00 00:00:00", "2018-05-12 21:32:44", NULL, "1", NULL, "quienes-somos", "QUIÉNES SOMOS", "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("3", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "notas-de-interes", "NOTAS DE INTERÉS", "1", NULL);
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
  `ver_home` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos` VALUES ("2", "2018-04-19 21:22:25", "0000-00-00 00:00:00", NULL, "1", "2", "profot_1524190945_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("74", "2018-05-14 18:15:49", "0000-00-00 00:00:00", NULL, "1", "3", "profot_1526339748_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("4", "2018-04-19 21:23:58", "0000-00-00 00:00:00", NULL, "1", "4", "profot_1524191037_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("5", "2018-04-19 21:24:17", "0000-00-00 00:00:00", NULL, "1", "5", "profot_1524191057_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("64", "2018-05-14 17:22:16", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1526336535_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("86", "2018-05-14 19:09:31", "0000-00-00 00:00:00", NULL, "1", "10", "profot_1526342971_370x370.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("9", "2018-04-19 21:27:12", "0000-00-00 00:00:00", NULL, "1", "9", "profot_1524191232_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("10", "2018-04-19 21:27:52", "0000-00-00 00:00:00", NULL, "1", "10", "profot_1524191272_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("11", "2018-04-19 21:28:26", "0000-00-00 00:00:00", NULL, "1", "11", "profot_1524191305_211x450.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("12", "2018-04-19 21:29:15", "0000-00-00 00:00:00", NULL, "1", "12", "profot_1524191355_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("13", "2018-04-19 21:30:22", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1524191422_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("14", "2018-04-19 21:30:54", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1524191454_320x425.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("97", "2018-05-14 19:31:17", "0000-00-00 00:00:00", NULL, "1", "18", "profot_1526344276_788x1024.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("16", "2018-04-19 21:33:11", "0000-00-00 00:00:00", NULL, "1", "16", "profot_1524191591_365x558.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("17", "2018-04-19 21:33:37", "0000-00-00 00:00:00", NULL, "1", "17", "profot_1524191616_345x584.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("18", "2018-04-19 21:34:03", "0000-00-00 00:00:00", NULL, "0", "18", "profot_1524191643_352x513.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("103", "2018-05-14 23:27:40", "0000-00-00 00:00:00", NULL, "1", "44", "profot_1526358459_210x310.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("21", "2018-04-19 21:35:42", "0000-00-00 00:00:00", NULL, "1", "21", "profot_1524191742_345x542.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("22", "2018-04-19 21:36:12", "0000-00-00 00:00:00", NULL, "1", "22", "profot_1524191772_352x574.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("23", "2018-04-19 21:20:17", "0000-00-00 00:00:00", NULL, "1", "24", "profot_1524190817_320x499.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("24", "2018-04-19 21:22:25", "0000-00-00 00:00:00", NULL, "1", "25", "profot_1524190945_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("25", "2018-04-19 21:23:25", "0000-00-00 00:00:00", NULL, "1", "26", "profot_1524191005_250x433.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("26", "2018-04-19 21:23:58", "0000-00-00 00:00:00", NULL, "1", "27", "profot_1524191037_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("27", "2018-04-19 21:24:17", "0000-00-00 00:00:00", NULL, "1", "28", "profot_1524191057_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("28", "2018-04-19 21:25:10", "0000-00-00 00:00:00", NULL, "1", "29", "profot_1524191110_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("29", "2018-04-19 21:25:39", "0000-00-00 00:00:00", NULL, "1", "30", "profot_1524191138_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("30", "2018-04-19 21:26:42", "0000-00-00 00:00:00", NULL, "1", "31", "profot_1524191201_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("31", "2018-04-19 21:27:12", "0000-00-00 00:00:00", NULL, "1", "32", "profot_1524191232_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("32", "2018-04-19 21:27:52", "0000-00-00 00:00:00", NULL, "1", "33", "profot_1524191272_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("33", "2018-04-19 21:28:26", "0000-00-00 00:00:00", NULL, "1", "34", "profot_1524191305_211x450.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("34", "2018-04-19 21:29:15", "0000-00-00 00:00:00", NULL, "1", "35", "profot_1524191355_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("35", "2018-04-19 21:30:22", "0000-00-00 00:00:00", NULL, "1", "36", "profot_1524191422_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("36", "2018-04-19 21:30:54", "0000-00-00 00:00:00", NULL, "1", "37", "profot_1524191454_320x425.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("37", "2018-04-19 21:31:14", "0000-00-00 00:00:00", NULL, "1", "38", "profot_1524191473_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("38", "2018-04-19 21:33:11", "0000-00-00 00:00:00", NULL, "1", "39", "profot_1524191591_365x558.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("39", "2018-04-19 21:33:37", "0000-00-00 00:00:00", NULL, "1", "40", "profot_1524191616_345x584.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("40", "2018-04-19 21:34:03", "0000-00-00 00:00:00", NULL, "1", "41", "profot_1524191643_352x513.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("41", "2018-04-19 21:34:37", "0000-00-00 00:00:00", NULL, "1", "42", "profot_1524191677_320x495.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("42", "2018-04-19 21:35:21", "0000-00-00 00:00:00", NULL, "1", "43", "profot_1524191720_303x490.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("105", "2018-05-14 23:30:19", "0000-00-00 00:00:00", NULL, "1", "47", "profot_1526358619_488x844.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("44", "2018-04-19 21:36:12", "0000-00-00 00:00:00", NULL, "1", "45", "profot_1524191772_352x574.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("53", "2018-05-10 20:58:11", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1526003890_509x900.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("48", "2018-05-10 20:53:39", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1526003618_379x598.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("50", "2018-05-10 20:54:22", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1526003661_620x977.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("55", "2018-05-14 16:49:43", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1526334582_632x999.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("56", "2018-05-14 16:50:51", "0000-00-00 00:00:00", NULL, "1", "2", "profot_1526334650_788x1024.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("57", "2018-05-14 16:51:10", "0000-00-00 00:00:00", NULL, "1", "2", "profot_1526334668_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("58", "2018-05-14 16:51:37", "0000-00-00 00:00:00", NULL, "1", "2", "profot_1526334695_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("59", "2018-05-14 17:16:21", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1526336180_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("60", "2018-05-14 17:16:54", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1526336212_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("63", "2018-05-14 17:21:46", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1526336506_250x516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("65", "2018-05-14 17:30:08", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1526337006_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("67", "2018-05-14 18:02:31", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1526338949_468x800.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("68", "2018-05-14 18:03:31", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1526339010_468x800.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("71", "2018-05-14 18:12:43", "0000-00-00 00:00:00", NULL, "1", "3", "profot_1526339563_336x437.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("72", "2018-05-14 18:13:21", "0000-00-00 00:00:00", NULL, "1", "3", "profot_1526339601_309x476.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("73", "2018-05-14 18:13:47", "0000-00-00 00:00:00", NULL, "1", "3", "profot_1526339626_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("75", "2018-05-14 18:51:21", "0000-00-00 00:00:00", NULL, "1", "4", "profot_1526341880_462x600.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("76", "2018-05-14 18:51:43", "0000-00-00 00:00:00", NULL, "1", "4", "profot_1526341902_462x600.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("77", "2018-05-14 18:51:58", "0000-00-00 00:00:00", NULL, "1", "4", "profot_1526341918_462x600.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("78", "2018-05-14 18:59:16", "0000-00-00 00:00:00", NULL, "1", "5", "profot_1526342356_293x502.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("79", "2018-05-14 19:00:25", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1526342424_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("82", "2018-05-14 19:02:56", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1526342574_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("81", "2018-05-14 19:01:53", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1526342512_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("83", "2018-05-14 19:03:35", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1526342613_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("87", "2018-05-14 19:10:36", "0000-00-00 00:00:00", NULL, "1", "11", "profot_1526343035_1000x1000.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("88", "2018-05-14 19:13:12", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1526343190_1000x1500.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("89", "2018-05-14 19:14:01", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1526343239_1001x1500.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("90", "2018-05-14 19:14:42", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1526343280_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("91", "2018-05-14 19:15:24", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1526343322_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("92", "2018-05-14 19:15:48", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1526343347_1000x1300.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("93", "2018-05-14 19:16:00", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1526343359_788x1024.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("94", "2018-05-14 19:25:27", "0000-00-00 00:00:00", NULL, "1", "15", "profot_1526343925_468x800.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("95", "2018-05-14 19:26:18", "0000-00-00 00:00:00", NULL, "1", "15", "profot_1526343976_468x800.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("96", "2018-05-14 19:27:22", "0000-00-00 00:00:00", NULL, "1", "15", "profot_1526344040_468x800.png", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("98", "2018-05-14 19:33:42", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1526344421_788x1024.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("99", "2018-05-14 19:34:40", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1526344479_788x1024.jpg", NULL);
#
#
DROP TABLE IF EXISTS `productos_fotos_descu`;
#
#
CREATE TABLE `productos_fotos_descu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2571 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 34090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("3", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 67995 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("4", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 16327 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("5", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41919 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("7", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 47090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("8", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 92552 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("9", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 80177 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("13", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 59486 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("14", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 90669 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("16", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 42621 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("21", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 89136 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("22", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "18", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 54806 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("24", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "16", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 10816 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("25", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 20008 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("26", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 38133 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("28", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 12312 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("29", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 75731 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("31", "2013-03-22 14:22:36", "2010-11-07 21:30:24", NULL, "1", "12", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85733 Lorem ipsum dolor sit amet, consectetur adipiscing");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("33", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "11", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 18426 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("35", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "9", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 27871 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("36", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 6464 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("37", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 48993 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("41", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85434 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("43", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 2520 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("44", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 4095 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("47", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41105 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("48", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 72699 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("50", "2013-03-22 14:22:36", "2010-12-24 14:10:08", NULL, "1", "24", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("52", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "26", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("53", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "27", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("54", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "28", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("55", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "29", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("56", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "30", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("57", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "31", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("58", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "32", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("59", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "33", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("60", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "34", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("61", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "35", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("62", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "36", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("63", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "37", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("64", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "38", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2233", "2017-02-15 10:44:06", "0000-00-00 00:00:00", NULL, "1", "39", "profot_1487173445_1000x1191.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2232", "2017-02-15 10:43:19", "0000-00-00 00:00:00", NULL, "1", "40", "profot_1487173398_1000x576.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2231", "2017-02-15 10:42:45", "0000-00-00 00:00:00", NULL, "1", "41", "profot_1487173365_1000x483.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2230", "2017-02-15 10:41:33", "0000-00-00 00:00:00", NULL, "1", "42", "profot_1487173290_1000x1802.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("69", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "43", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2229", "2017-02-15 10:40:35", "0000-00-00 00:00:00", NULL, "1", "44", "profot_1487173233_1000x1895.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2228", "2017-02-15 10:39:41", "0000-00-00 00:00:00", NULL, "1", "45", "profot_1487173179_1000x1747.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2227", "2017-02-15 10:38:58", "0000-00-00 00:00:00", NULL, "1", "46", "profot_1487173136_1000x1354.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2226", "2017-02-15 10:38:23", "0000-00-00 00:00:00", NULL, "1", "47", "profot_1487173102_1000x1229.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2225", "2017-02-15 10:37:49", "0000-00-00 00:00:00", NULL, "1", "48", "profot_1487173068_1000x440.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2224", "2017-02-15 10:37:11", "0000-00-00 00:00:00", NULL, "1", "49", "profot_1487173031_1000x510.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2223", "2017-02-15 10:33:38", "0000-00-00 00:00:00", NULL, "1", "50", "profot_1487172816_1000x1132.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2222", "2017-02-15 10:33:02", "0000-00-00 00:00:00", NULL, "1", "51", "profot_1487172781_1000x842.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("88", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "52", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("89", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "53", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("90", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "54", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("91", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "55", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("93", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "56", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("95", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "57", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("96", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "58", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("99", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("98", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("100", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "60", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("101", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "61", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("102", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("103", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("104", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("105", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("106", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "64", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("107", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "65", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("108", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("109", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("110", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("111", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("112", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("113", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("114", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("115", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "69", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("116", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "70", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("117", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("118", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("119", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "72", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("120", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("121", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("122", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "74", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("128", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "80", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("129", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "81", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("130", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "82", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("131", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "83", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("132", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "84", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("133", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "85", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("138", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "90", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("139", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "91", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("140", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "92", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("141", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "93", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("142", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "94", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("143", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "95", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("144", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "96", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("145", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "97", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("146", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "98", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "99", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "100", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "101", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "132", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("251", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "199", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("252", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "200", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("253", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "201", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "256", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "257", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "258", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "259", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "260", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "261", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "262", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "263", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "264", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "265", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "266", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "267", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "268", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "269", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "270", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "271", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "272", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "273", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1323", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1324", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1325", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1329", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1337", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1335", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1336", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1341", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1339", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1340", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("412", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("413", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1347", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("415", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1747", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1748", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("422", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("423", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("424", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("425", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("426", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("427", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("428", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("429", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("430", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("431", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("432", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("433", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("434", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("435", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("436", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("437", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("438", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("439", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("440", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("441", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("442", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("443", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1779", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1780", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1781", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1789", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1784", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1785", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("534", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "384", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("535", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "385", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("536", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "386", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("537", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "387", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("538", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "388", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("539", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "389", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("540", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "390", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("541", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "391", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("542", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "392", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("543", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "393", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("544", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "394", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("545", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "395", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("546", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "396", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("547", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "397", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("548", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "398", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("549", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "399", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("550", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "400", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("551", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "401", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("552", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "402", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("553", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "403", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("554", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "404", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("555", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "405", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "406", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("557", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "407", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("558", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "408", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("559", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "409", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("560", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "410", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("561", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "411", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("562", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "412", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("563", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "413", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("564", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "414", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("565", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "415", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("566", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "416", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("567", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "417", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("568", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "418", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("569", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "419", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("570", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "420", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("572", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "421", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("573", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "422", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("574", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "423", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("575", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "424", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("576", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "425", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("577", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "426", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("578", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("579", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("580", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("611", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "458", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("613", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "461", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("617", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "464", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("621", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "469", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("624", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "472", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("626", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "474", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("628", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "476", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("631", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "478", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("632", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "480", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "482", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("881", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("884", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("885", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("886", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("893", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("894", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("895", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("896", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("897", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("898", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1276", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1055", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1305", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1306", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1307", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1308", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1758", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1757", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1753", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1754", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1755", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1756", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1765", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1766", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1761", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1760", "2013-03-22 14:22:36", "2011-10-17 21:36:08", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1762", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1763", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1326", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1327", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1328", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1334", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1338", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1344", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1343", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1345", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1346", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1348", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1349", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1350", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1351", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1370", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1371", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1372", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1373", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1374", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1375", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1376", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1377", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1378", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1379", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1778", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1775", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1776", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1777", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1788", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1787", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1786", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1783", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1773", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1774", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1782", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2221", "2017-02-15 10:32:16", "0000-00-00 00:00:00", NULL, "1", "1197", "profot_1487172735_1000x672.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1247", "profot_1486740381_599x800.jpg", "jose");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1633", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1325", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1326", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1635", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1327", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1328", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1637", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1329", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1638", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1330", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1639", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1331", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1640", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1332", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1641", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1333", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1642", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1334", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1643", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1335", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1644", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1336", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1645", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1337", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1646", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1338", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1647", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1339", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1648", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1340", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1649", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1341", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1650", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1342", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1651", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1343", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1652", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1344", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1653", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1345", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1654", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1346", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1655", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1347", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1656", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1348", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1657", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1349", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1658", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1350", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1659", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1351", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1660", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1352", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1661", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1353", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1662", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1354", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1663", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1355", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1664", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1356", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1665", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1357", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1666", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1358", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1667", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1359", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2220", "2017-02-15 10:31:40", "0000-00-00 00:00:00", NULL, "1", "1373", "profot_1487172698_1000x1487.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1743", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1744", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1745", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1746", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1749", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1750", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1751", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1752", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1767", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1432", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1768", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1433", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1769", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1434", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1770", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1435", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1771", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1436", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1772", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1438", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1790", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1791", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1439", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1792", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1440", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1836", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2219", "2017-02-15 10:30:46", "0000-00-00 00:00:00", NULL, "1", "1519", "profot_1487172644_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2218", "2017-02-15 10:30:04", "0000-00-00 00:00:00", NULL, "1", "1525", "profot_1487172600_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("1883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2026", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1671", "profot_1486740381_599x800.jpg", "Prime U Loción Facial Refrescante (120 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2028", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1673", "profot_1486740381_599x800.jpg", "Prime U Crema Humectante de dia (50 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2030", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1675", "profot_1486740381_599x800.jpg", "Prime U Crema Facial de noche (50 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2031", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1676", "profot_1486740381_599x800.jpg", "Prime U Crema para el contorno de ojos (15 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2032", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1677", "profot_1486740381_599x800.jpg", "Jabón protector UV (108 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2033", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1678", "profot_1486740381_599x800.jpg", "Shampoo Anticaspa (300grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2035", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1680", "profot_1486740381_599x800.jpg", "Shampoo Suavizante (300grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2036", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1681", "profot_1486740381_599x800.jpg", "Moistenning Acondicionador Esencial (150 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2037", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1682", "profot_1486740381_599x800.jpg", "Shampoo Hidratante (300 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2038", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1683", "profot_1486740381_599x800.jpg", "Herbal China Pasta Dental (135 grs)");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2039", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1684", "profot_1486740381_599x800.jpg", "PURIFICADOR CON OZONO PARA FRUTAS, VERDURAS Y AMBIENTES");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2040", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1685", "profot_1486740381_599x800.jpg", "Masajeador Capilar");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2042", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1687", "profot_1486740381_599x800.jpg", "Masajeador Muscular ACUMAGIC");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2150", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2151", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2152", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2153", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2154", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2155", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2156", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2157", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2158", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2159", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1796", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2183", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1818", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2217", "2017-02-15 10:24:56", "0000-00-00 00:00:00", NULL, "1", "1821", "profot_1487172294_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2185", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1820", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1819", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2216", "2017-02-15 10:24:07", "0000-00-00 00:00:00", NULL, "1", "1822", "profot_1487172245_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2215", "2017-02-15 10:23:36", "0000-00-00 00:00:00", NULL, "1", "1823", "profot_1487172214_1000x884.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2214", "2017-02-15 10:23:06", "0000-00-00 00:00:00", NULL, "1", "1824", "profot_1487172185_1000x831.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2209", "2017-02-15 10:21:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172075_1000x1505.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2208", "2017-02-15 10:20:38", "0000-00-00 00:00:00", NULL, "1", "1826", "profot_1487172036_1000x879.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2210", "2017-02-15 10:21:36", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172093_1000x1551.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2211", "2017-02-15 10:21:50", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172108_1000x1446.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2212", "2017-02-15 10:22:04", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172121_1000x1735.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2213", "2017-02-15 10:22:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172135_1000x1594.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2234", "2017-09-11 11:43:16", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148195_800x1279.jpg", "Guante1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2235", "2017-09-11 11:47:54", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148473_800x1292.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2236", "2017-09-11 11:55:31", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148930_800x1450.jpg", "Guante 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2237", "2017-09-11 11:55:47", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148946_800x1405.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2240", "2017-09-11 12:29:22", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150961_800x1275.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2241", "2017-09-11 12:29:37", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150975_800x1281.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2242", "2017-09-11 12:42:00", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151719_800x513.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2243", "2017-09-11 12:42:23", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151741_800x1473.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2246", "2017-09-11 12:55:08", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152507_800x1240.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2247", "2017-09-11 12:55:23", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152521_800x1293.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2249", "2017-09-11 13:00:05", "2018-05-05 09:39:25", NULL, "1", "1837", "profot_1525531165_345x584.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2251", "2017-09-11 13:01:30", "2018-05-05 09:39:07", NULL, "1", "1838", "profot_1525531147_352x513.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2253", "2017-09-11 13:06:47", "2018-05-05 09:38:47", NULL, "1", "1839", "profot_1525531127_365x558.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2254", "2017-09-11 13:08:09", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153289_800x300.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2255", "2017-09-11 13:08:21", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153301_800x317.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2256", "2017-09-11 13:09:21", "0000-00-00 00:00:00", NULL, "1", "1841", "profot_1505153361_800x338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2261", "2017-09-11 13:12:01", "2018-05-05 09:37:54", NULL, "1", "1843", "profot_1525531074_303x490.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2262", "2017-09-11 13:41:06", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155265_800x681.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2263", "2017-09-11 13:41:21", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155281_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2266", "2017-09-11 13:42:59", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155378_800x618.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2267", "2017-09-11 13:43:11", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155390_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2268", "2017-09-11 13:46:23", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155583_800x675.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2269", "2017-09-11 13:46:39", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155598_800x1044.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2270", "2017-09-11 13:53:19", "2018-05-05 09:37:12", NULL, "1", "1848", "profot_1525531032_320x495.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2271", "2017-09-11 13:54:49", "2018-05-05 09:36:13", NULL, "1", "1849", "profot_1525530973_345x584.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2272", "2017-09-11 13:56:00", "0000-00-00 00:00:00", NULL, "1", "1850", "profot_1505156158_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2565", "2018-05-10 21:22:20", "0000-00-00 00:00:00", NULL, "1", "1851", "profot_1526005339_900x1170.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2274", "2017-09-11 14:00:11", "0000-00-00 00:00:00", NULL, "1", "1852", "profot_1505156408_800x999.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2276", "2017-09-11 14:03:12", "0000-00-00 00:00:00", NULL, "1", "1854", "profot_1505156591_800x929.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2277", "2017-09-11 14:04:05", "0000-00-00 00:00:00", NULL, "1", "1855", "profot_1505156643_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2278", "2017-09-11 14:04:47", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505156685_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2279", "2017-09-11 14:05:43", "0000-00-00 00:00:00", NULL, "1", "1857", "profot_1505156741_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2280", "2017-09-11 14:07:40", "0000-00-00 00:00:00", NULL, "1", "1859", "profot_1505156858_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2281", "2017-09-11 14:07:58", "0000-00-00 00:00:00", NULL, "1", "1858", "profot_1505156877_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2282", "2017-09-11 14:08:52", "0000-00-00 00:00:00", NULL, "1", "1860", "profot_1505156931_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2283", "2017-09-11 14:09:43", "0000-00-00 00:00:00", NULL, "1", "1861", "profot_1505156981_800x1004.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2284", "2017-09-11 14:12:47", "0000-00-00 00:00:00", NULL, "1", "1862", "profot_1505157167_800x606.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2285", "2017-09-11 14:13:38", "0000-00-00 00:00:00", NULL, "1", "1863", "profot_1505157217_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2286", "2017-09-11 14:14:33", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505157272_800x1003.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2287", "2017-09-11 14:15:27", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505157326_800x982.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2288", "2017-09-11 14:16:47", "0000-00-00 00:00:00", NULL, "1", "1866", "profot_1505157406_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2289", "2017-09-11 14:17:47", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505157466_800x950.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2290", "2017-09-11 14:18:39", "0000-00-00 00:00:00", NULL, "1", "1868", "profot_1505157518_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2291", "2017-09-11 14:22:11", "0000-00-00 00:00:00", NULL, "1", "1869", "profot_1505157730_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2292", "2017-09-11 14:23:03", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505157781_800x927.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2293", "2017-09-11 14:33:24", "0000-00-00 00:00:00", NULL, "1", "1871", "profot_1505158402_800x1319.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2294", "2017-09-11 14:34:37", "0000-00-00 00:00:00", NULL, "1", "1872", "profot_1505158475_800x1044.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2295", "2017-09-11 14:42:20", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505158939_800x954.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2298", "2017-09-11 19:11:54", "0000-00-00 00:00:00", NULL, "1", "1874", "profot_1505175113_800x1070.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2297", "2017-09-11 14:43:36", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505159015_800x995.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2299", "2017-09-11 19:21:07", "0000-00-00 00:00:00", NULL, "1", "1875", "profot_1505175666_800x1205.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2300", "2017-09-11 19:22:44", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175763_800x883.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2301", "2017-09-11 19:23:02", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175781_800x841.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2302", "2017-09-11 19:23:19", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175798_800x918.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2303", "2017-09-11 19:24:51", "0000-00-00 00:00:00", NULL, "1", "1877", "profot_1505175890_800x1713.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2304", "2017-09-11 19:39:25", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176764_800x1042.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2305", "2017-09-11 19:39:37", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176776_800x935.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2306", "2017-09-11 19:39:49", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176788_800x1330.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2307", "2017-09-11 19:41:19", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176877_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2308", "2017-09-11 19:41:33", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176892_800x1018.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2309", "2017-09-11 19:42:43", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176962_800x908.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2310", "2017-09-11 19:42:55", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176974_800x1032.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2311", "2017-09-11 19:43:31", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505177009_800x1423.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2312", "2017-09-11 19:44:53", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177092_800x1094.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2313", "2017-09-11 19:45:08", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177106_800x1087.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2314", "2017-09-11 19:46:08", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177167_800x1080.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2315", "2017-09-11 19:46:21", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177180_800x1146.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2316", "2017-09-11 19:47:01", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177220_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2317", "2017-09-11 19:47:14", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177233_800x1170.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2318", "2017-09-11 19:48:44", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177324_800x350.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2319", "2017-09-11 19:48:54", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177333_800x311.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2321", "2017-09-11 19:50:08", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177407_800x588.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2322", "2017-09-11 19:50:21", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177420_800x676.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2323", "2017-09-11 19:50:36", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177435_800x370.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2324", "2017-09-11 19:55:13", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177712_800x376.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2325", "2017-09-11 19:55:26", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177725_800x376.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2326", "2017-09-11 19:55:38", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177738_800x368.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2327", "2017-09-11 20:03:35", "0000-00-00 00:00:00", NULL, "1", "1887", "profot_1505178213_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2328", "2017-09-11 20:05:03", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178302_800x1397.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2329", "2017-09-11 20:05:18", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178317_800x1499.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2330", "2017-09-11 20:07:26", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178445_800x941.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2331", "2017-09-11 20:07:40", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178459_800x975.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2332", "2017-09-11 20:12:02", "0000-00-00 00:00:00", NULL, "1", "1890", "profot_1505178721_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2334", "2017-09-11 20:14:04", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505178843_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2335", "2017-09-11 20:27:40", "0000-00-00 00:00:00", NULL, "1", "1892", "profot_1505179660_800x393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2336", "2017-09-11 20:31:18", "0000-00-00 00:00:00", NULL, "1", "1893", "profot_1505179878_800x268.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2337", "2017-09-11 20:32:26", "0000-00-00 00:00:00", NULL, "1", "1894", "profot_1505179946_800x386.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2338", "2017-09-11 20:33:23", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505180003_800x332.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2339", "2017-09-11 20:34:15", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180054_800x286.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2340", "2017-09-11 20:34:32", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180072_800x297.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2540", "2017-09-15 11:34:59", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505493298_800x386.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2342", "2017-09-11 20:42:43", "0000-00-00 00:00:00", NULL, "1", "1897", "profot_1505180561_800x1516.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2343", "2017-09-11 20:45:29", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505180728_800x1533.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2344", "2017-09-11 20:46:14", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180774_800x422.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2345", "2017-09-11 20:46:24", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180784_800x414.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2346", "2017-09-11 20:48:47", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180926_800x746.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2347", "2017-09-11 20:49:00", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180939_800x455.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2348", "2017-09-11 20:52:17", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181137_800x487.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2349", "2017-09-11 20:52:32", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181152_800x688.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2350", "2017-09-11 20:52:46", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181165_800x469.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2351", "2017-09-11 20:53:31", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181210_800x522.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2352", "2017-09-11 20:53:43", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181223_800x545.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2353", "2017-09-11 20:54:30", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181269_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2354", "2017-09-11 20:55:09", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181308_800x550.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2355", "2017-09-11 20:55:27", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181326_800x504.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2356", "2017-09-11 20:57:05", "0000-00-00 00:00:00", NULL, "1", "1904", "profot_1505181423_726x3180.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2357", "2017-09-11 20:57:48", "0000-00-00 00:00:00", NULL, "1", "1905", "profot_1505181466_800x2251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2358", "2017-09-11 21:00:16", "0000-00-00 00:00:00", NULL, "1", "1906", "profot_1505181615_800x1382.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2359", "2017-09-11 21:03:03", "0000-00-00 00:00:00", NULL, "1", "1907", "profot_1505181781_800x1509.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2360", "2017-09-11 21:03:52", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181831_800x732.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2361", "2017-09-11 21:04:25", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181865_800x748.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2362", "2017-09-11 21:04:47", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181886_800x722.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2363", "2017-09-11 21:05:00", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181899_800x725.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2364", "2017-09-11 21:05:13", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181912_800x727.jpg", "Vista 5");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2365", "2017-09-11 21:12:29", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182349_800x479.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2366", "2017-09-11 21:12:48", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182368_800x194.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2367", "2017-09-11 21:13:30", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182409_800x800.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2368", "2017-09-11 21:13:42", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182422_800x652.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2369", "2017-09-11 21:15:29", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182528_800x739.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2370", "2017-09-11 21:15:44", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182543_800x1341.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2371", "2017-09-11 21:16:40", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182599_800x1053.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2372", "2017-09-11 21:16:57", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182616_800x1042.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2373", "2017-09-11 21:18:30", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182709_800x870.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2374", "2017-09-11 21:18:57", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182736_800x1173.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2539", "2017-09-13 14:00:31", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505329230_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2376", "2017-09-11 21:20:52", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182851_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2377", "2017-09-11 21:21:05", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182864_800x485.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2378", "2017-09-11 21:28:10", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183289_800x613.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2379", "2017-09-11 21:28:21", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183301_800x591.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2380", "2017-09-11 21:29:29", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183368_800x711.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2381", "2017-09-11 21:29:43", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183382_800x700.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2382", "2017-09-11 21:31:40", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183499_800x944.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2383", "2017-09-11 21:32:14", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183532_800x1358.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2384", "2017-09-11 21:33:58", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183637_800x780.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2385", "2017-09-11 21:34:15", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183653_800x807.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2386", "2017-09-11 21:37:51", "0000-00-00 00:00:00", NULL, "1", "1919", "profot_1505183870_800x865.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2387", "2017-09-11 21:39:05", "0000-00-00 00:00:00", NULL, "1", "1920", "profot_1505183943_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2388", "2017-09-11 21:39:54", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505183992_800x976.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2389", "2017-09-11 21:40:52", "0000-00-00 00:00:00", NULL, "1", "1922", "profot_1505184051_800x945.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2390", "2017-09-11 21:41:58", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184117_800x960.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2391", "2017-09-11 21:42:29", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184148_800x974.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2392", "2017-09-11 21:43:21", "0000-00-00 00:00:00", NULL, "1", "1924", "profot_1505184200_800x951.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2393", "2017-09-11 21:44:12", "0000-00-00 00:00:00", NULL, "1", "1925", "profot_1505184251_800x963.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2394", "2017-09-11 21:44:52", "0000-00-00 00:00:00", NULL, "1", "1926", "profot_1505184291_800x946.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2395", "2017-09-11 21:45:55", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184354_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2396", "2017-09-11 21:48:15", "0000-00-00 00:00:00", NULL, "1", "1928", "profot_1505184494_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2397", "2017-09-11 21:51:42", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184700_800x956.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2398", "2017-09-11 21:52:51", "0000-00-00 00:00:00", NULL, "1", "1930", "profot_1505184769_800x949.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2399", "2017-09-11 21:54:07", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184845_800x1390.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2400", "2017-09-11 21:54:29", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184868_800x1453.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2401", "2017-09-11 21:54:56", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184894_800x1406.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2402", "2017-09-11 21:56:01", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184959_800x1161.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2403", "2017-09-11 21:56:18", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184977_800x1172.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2404", "2017-09-11 21:56:36", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184994_800x1318.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2405", "2017-09-11 21:57:49", "0000-00-00 00:00:00", NULL, "1", "1933", "profot_1505185068_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2406", "2017-09-11 21:58:36", "0000-00-00 00:00:00", NULL, "1", "1934", "profot_1505185115_800x953.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2407", "2017-09-11 21:59:23", "0000-00-00 00:00:00", NULL, "1", "1935", "profot_1505185162_800x942.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2408", "2017-09-11 22:00:33", "0000-00-00 00:00:00", NULL, "1", "1936", "profot_1505185230_800x961.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2409", "2017-09-11 22:01:22", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505185281_800x935.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2410", "2017-09-11 22:02:20", "0000-00-00 00:00:00", NULL, "1", "1938", "profot_1505185339_800x1085.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2411", "2017-09-11 22:05:25", "0000-00-00 00:00:00", NULL, "1", "1939", "profot_1505185525_800x311.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2412", "2017-09-11 22:06:51", "0000-00-00 00:00:00", NULL, "1", "1940", "profot_1505185610_800x1415.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2413", "2017-09-11 22:07:57", "0000-00-00 00:00:00", NULL, "1", "1941", "profot_1505185674_800x1985.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2414", "2017-09-11 22:08:54", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185734_800x783.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2415", "2017-09-11 22:09:07", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185746_800x754.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2416", "2017-09-11 22:10:41", "0000-00-00 00:00:00", NULL, "1", "1943", "profot_1505185840_800x1150.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2417", "2017-09-11 22:49:04", "0000-00-00 00:00:00", NULL, "1", "1944", "profot_1505188142_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2418", "2017-09-11 22:49:58", "0000-00-00 00:00:00", NULL, "1", "1945", "profot_1505188197_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2419", "2017-09-11 22:51:24", "0000-00-00 00:00:00", NULL, "1", "1946", "profot_1505188282_800x1404.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2420", "2017-09-11 22:52:16", "0000-00-00 00:00:00", NULL, "1", "1947", "profot_1505188335_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2421", "2017-09-11 22:53:05", "0000-00-00 00:00:00", NULL, "1", "1948", "profot_1505188383_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2422", "2017-09-11 22:53:54", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505188433_800x1375.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2423", "2017-09-11 23:00:55", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188854_800x1571.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2424", "2017-09-11 23:01:08", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188867_800x1318.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2425", "2017-09-11 23:01:54", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188912_800x1140.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2426", "2017-09-11 23:02:04", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188923_800x1116.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2427", "2017-09-11 23:02:49", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188967_800x1058.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2428", "2017-09-11 23:03:02", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188981_800x1056.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2429", "2017-09-11 23:04:24", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189063_800x1101.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2430", "2017-09-11 23:04:36", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189075_800x1143.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2533", "2017-09-13 13:00:04", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325601_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2432", "2017-09-11 23:06:26", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189185_800x796.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2433", "2017-09-11 23:06:38", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189196_800x802.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2434", "2017-09-11 23:06:49", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189208_800x614.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2435", "2017-09-11 23:07:44", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189264_800x773.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2436", "2017-09-11 23:07:54", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189274_800x721.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2437", "2017-09-11 23:08:05", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189285_800x594.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2438", "2017-09-11 23:10:22", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189421_800x668.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2439", "2017-09-11 23:10:35", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189434_800x827.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2440", "2017-09-11 23:11:27", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189486_800x827.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2441", "2017-09-11 23:11:40", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189499_800x937.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2442", "2017-09-11 23:12:58", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189577_800x809.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2443", "2017-09-11 23:13:17", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189597_800x474.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2444", "2017-09-11 23:14:41", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189680_800x768.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2445", "2017-09-11 23:15:05", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189704_800x641.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2446", "2017-09-11 23:17:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189843_800x1262.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2447", "2017-09-11 23:17:41", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189860_800x1225.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2448", "2017-09-11 23:19:32", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189970_800x1201.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2449", "2017-09-11 23:19:46", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189985_800x1237.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2450", "2017-09-11 23:19:58", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189997_800x1124.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2451", "2017-09-11 23:20:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505190023_800x1463.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2452", "2017-09-11 23:22:00", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190119_800x1673.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2453", "2017-09-11 23:22:15", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190133_800x1511.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2454", "2017-09-11 23:22:27", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190145_800x1348.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2455", "2017-09-11 23:22:41", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190159_800x1256.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2456", "2017-09-11 23:41:12", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191271_800x693.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2457", "2017-09-11 23:41:23", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191282_800x636.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2458", "2017-09-11 23:48:32", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191711_800x977.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2459", "2017-09-11 23:48:49", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191728_800x1025.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2460", "2017-09-11 23:49:04", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191743_800x1378.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2461", "2017-09-11 23:50:35", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191833_800x1395.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2462", "2017-09-11 23:50:51", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191848_800x1380.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2463", "2017-09-11 23:53:47", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192025_800x1610.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2464", "2017-09-11 23:54:08", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192047_800x1410.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2465", "2017-09-11 23:55:36", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192134_800x1321.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2466", "2017-09-11 23:55:52", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192151_800x1487.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2467", "2017-09-11 23:57:01", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192220_800x1149.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2468", "2017-09-11 23:57:16", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192235_800x1469.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2469", "2017-09-11 23:58:25", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192304_800x854.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2470", "2017-09-11 23:58:36", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192315_800x1352.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2471", "2017-09-11 23:59:46", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192386_800x799.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2472", "2017-09-12 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192399_800x1353.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2473", "2017-09-12 00:01:40", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192499_800x654.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2474", "2017-09-12 00:01:53", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192511_800x1420.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2475", "2017-09-12 00:02:50", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192569_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2476", "2017-09-12 00:03:03", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192582_800x1426.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2477", "2017-09-12 00:04:04", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192643_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2478", "2017-09-12 00:04:15", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192655_800x701.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2479", "2017-09-12 00:04:40", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192679_800x1091.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2480", "2017-09-12 00:05:47", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192746_800x1342.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2481", "2017-09-12 00:06:01", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192760_800x1389.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2482", "2017-09-12 00:07:38", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192857_800x480.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2483", "2017-09-12 00:07:53", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192872_800x1501.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2484", "2017-09-12 00:08:50", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192929_800x1226.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2485", "2017-09-12 00:09:03", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192942_800x2071.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2486", "2017-09-12 00:09:58", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505192998_800x609.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2487", "2017-09-12 00:10:10", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193009_800x606.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2488", "2017-09-12 00:10:28", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193026_800x2118.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2489", "2017-09-12 00:13:48", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193226_800x1103.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2490", "2017-09-12 00:14:02", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193240_800x1980.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2491", "2017-09-12 00:15:01", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193300_800x1192.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2492", "2017-09-12 00:15:16", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193314_800x1855.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2493", "2017-09-12 00:16:32", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193389_800x1445.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2494", "2017-09-12 00:16:46", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193404_800x1785.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2495", "2017-09-12 00:17:35", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193454_800x1211.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2496", "2017-09-12 00:17:50", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193468_800x1388.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2497", "2017-09-12 00:19:31", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193570_800x1341.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2498", "2017-09-12 00:19:47", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193585_800x1447.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2499", "2017-09-12 00:20:42", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193642_800x553.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2500", "2017-09-12 00:20:58", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193657_800x1246.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2501", "2017-09-12 00:27:42", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194062_800x510.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2502", "2017-09-12 00:28:01", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194080_800x533.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2503", "2017-09-12 00:28:17", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194096_800x1363.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2504", "2017-09-12 00:29:25", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194164_800x1079.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2505", "2017-09-12 00:29:40", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194177_800x1038.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2506", "2017-09-12 00:30:41", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194239_800x1223.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2507", "2017-09-12 00:31:00", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194258_800x1272.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2508", "2017-09-12 00:31:30", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194289_800x1036.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2509", "2017-09-12 00:32:38", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194357_800x1138.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2510", "2017-09-12 00:32:50", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194369_800x1457.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2511", "2017-09-12 00:34:07", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194445_800x1011.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2512", "2017-09-12 00:34:19", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194458_800x1076.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2513", "2017-09-12 00:35:17", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194516_800x1291.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2514", "2017-09-12 00:35:33", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194532_800x1400.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2515", "2017-09-12 00:35:45", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194543_800x1445.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2516", "2017-09-12 00:36:58", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194617_800x950.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2517", "2017-09-12 00:37:09", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194628_800x645.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2518", "2017-09-12 00:37:27", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194646_800x1464.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2519", "2017-09-12 00:38:40", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194720_800x349.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2520", "2017-09-12 00:38:55", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194734_800x351.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2521", "2017-09-12 00:39:08", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194747_800x1473.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2522", "2017-09-12 00:39:57", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194796_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2523", "2017-09-12 00:40:10", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194809_800x1434.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2524", "2017-09-12 00:40:23", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194822_800x1069.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2525", "2017-09-12 00:41:22", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194881_800x1143.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2526", "2017-09-12 00:41:36", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194895_800x1166.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2527", "2017-09-12 00:41:48", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194906_800x1850.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2528", "2017-09-12 00:44:14", "0000-00-00 00:00:00", NULL, "1", "1994", "profot_1505195053_800x1119.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2529", "2017-09-12 00:46:53", "0000-00-00 00:00:00", NULL, "1", "1995", "profot_1505195212_800x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2530", "2017-09-12 00:48:17", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195297_800x703.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2531", "2017-09-12 00:48:28", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195307_800x1013.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2532", "2017-09-12 00:48:40", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195319_800x993.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2534", "2017-09-13 13:00:26", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325624_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2535", "2017-09-13 13:00:49", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325648_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2536", "2017-09-13 13:01:18", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325677_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2537", "2017-09-13 13:14:58", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505326496_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2538", "2017-09-13 13:32:29", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505327548_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2541", "2017-09-15 11:39:16", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505493554_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2542", "2017-09-15 11:51:58", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494316_800x1080.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2543", "2017-09-15 11:52:19", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494337_800x1146.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2544", "2017-09-15 11:56:32", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494591_800x1074.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2545", "2017-09-15 11:56:50", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494609_800x1042.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2546", "2017-09-15 12:08:50", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505495329_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2547", "2017-09-15 12:12:02", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505495520_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2548", "2017-09-15 12:15:38", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495737_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2549", "2017-09-15 12:18:39", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495918_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2550", "2017-09-15 12:21:20", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505496078_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2551", "2017-09-15 12:24:57", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505496296_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2556", "2017-09-15 12:37:27", "2018-05-05 09:37:34", NULL, "1", "1845", "profot_1525531054_345x542.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2558", "2017-09-15 12:51:37", "2018-05-05 09:38:16", NULL, "1", "1842", "profot_1525531096_352x574.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2560", "2017-09-15 13:16:48", "2018-05-05 09:39:52", NULL, "1", "1835", "profot_1525531192_345x542.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2568", "2018-05-10 22:44:25", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1526010265_500x500.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2563", "2017-09-15 13:21:45", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499704_800x1240.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2564", "2017-09-15 13:22:15", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499734_800x1275.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2566", "2018-05-10 22:35:33", "0000-00-00 00:00:00", NULL, "1", "1997", "profot_1526009733_462x600.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2570", "2018-05-10 22:46:34", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1526010394_237x500.jpg", NULL);
#
#
DROP TABLE IF EXISTS `productos_fotos_impor`;
#
#
CREATE TABLE `productos_fotos_impor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2565 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 34090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("3", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 67995 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("4", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 16327 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("5", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41919 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("7", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 47090 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("8", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 92552 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("9", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 80177 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("13", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 59486 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("14", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 90669 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("16", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "19", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 42621 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("21", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 89136 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("22", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "18", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 54806 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("24", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "16", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 10816 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("25", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "6", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 20008 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("26", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "7", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 38133 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("28", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "14", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 12312 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("29", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "13", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 75731 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("31", "2013-03-22 14:22:36", "2010-11-07 21:30:24", NULL, "1", "12", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85733 Lorem ipsum dolor sit amet, consectetur adipiscing");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("33", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "11", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 18426 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("35", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "9", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 27871 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("36", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "8", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 6464 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("37", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 48993 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("41", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 85434 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("43", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 2520 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("44", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 4095 Lorem ipsum dolor sit amet, consectetur adipiscing e");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("47", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 41105 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("48", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "20", "profot_1486740381_599x800.jpg", "Foto_descripcion Vista 72699 Lorem ipsum dolor sit amet, consectetur adipiscing ");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("50", "2013-03-22 14:22:36", "2010-12-24 14:10:08", NULL, "1", "24", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("52", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "26", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("53", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "27", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("54", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "28", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("55", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "29", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("56", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "30", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("57", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "31", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("58", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "32", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("59", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "33", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("60", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "34", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("61", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "35", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("62", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "36", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("63", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "37", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("64", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "38", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2233", "2017-02-15 10:44:06", "0000-00-00 00:00:00", NULL, "1", "39", "profot_1487173445_1000x1191.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2232", "2017-02-15 10:43:19", "0000-00-00 00:00:00", NULL, "1", "40", "profot_1487173398_1000x576.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2231", "2017-02-15 10:42:45", "0000-00-00 00:00:00", NULL, "1", "41", "profot_1487173365_1000x483.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2230", "2017-02-15 10:41:33", "0000-00-00 00:00:00", NULL, "1", "42", "profot_1487173290_1000x1802.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("69", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "43", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2229", "2017-02-15 10:40:35", "0000-00-00 00:00:00", NULL, "1", "44", "profot_1487173233_1000x1895.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2228", "2017-02-15 10:39:41", "0000-00-00 00:00:00", NULL, "1", "45", "profot_1487173179_1000x1747.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2227", "2017-02-15 10:38:58", "0000-00-00 00:00:00", NULL, "1", "46", "profot_1487173136_1000x1354.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2226", "2017-02-15 10:38:23", "0000-00-00 00:00:00", NULL, "1", "47", "profot_1487173102_1000x1229.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2225", "2017-02-15 10:37:49", "0000-00-00 00:00:00", NULL, "1", "48", "profot_1487173068_1000x440.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2224", "2017-02-15 10:37:11", "0000-00-00 00:00:00", NULL, "1", "49", "profot_1487173031_1000x510.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2223", "2017-02-15 10:33:38", "0000-00-00 00:00:00", NULL, "1", "50", "profot_1487172816_1000x1132.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2222", "2017-02-15 10:33:02", "0000-00-00 00:00:00", NULL, "1", "51", "profot_1487172781_1000x842.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("88", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "52", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("89", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "53", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("90", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "54", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("91", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "55", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("93", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "56", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("95", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "57", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("96", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "58", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("99", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("98", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "59", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("100", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "60", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("101", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "61", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("102", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("103", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "62", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("104", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("105", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "63", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("106", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "64", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("107", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "65", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("108", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("109", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "66", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("110", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("111", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("112", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "67", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("113", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("114", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "68", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("115", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "69", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("116", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "70", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("117", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("118", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "71", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("119", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "72", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("120", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("121", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "73", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("122", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "74", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("128", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "80", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("129", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "81", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("130", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "82", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("131", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "83", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("132", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "84", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("133", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "85", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("138", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "90", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("139", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "91", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("140", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "92", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("141", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "93", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("142", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "94", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("143", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "95", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("144", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "96", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("145", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "97", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("146", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "98", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "99", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "100", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "101", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "132", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("251", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "199", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("252", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "200", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("253", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "201", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "239", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "256", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "257", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "258", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "259", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "260", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "261", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "262", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "263", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "264", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "265", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "266", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "267", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "268", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "269", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "270", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "271", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "272", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "273", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1323", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1324", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1325", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1329", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1330", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1331", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1337", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1335", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1336", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1341", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1339", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1340", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("412", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("413", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1347", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("415", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1747", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1748", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "294", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1352", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1353", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1354", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("422", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("423", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("424", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("425", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("426", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("427", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("428", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("429", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "296", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("430", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("431", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("432", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("433", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "297", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("434", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("435", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "298", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("436", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("437", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("438", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("439", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "299", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("440", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("441", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("442", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("443", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "300", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1779", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1780", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1781", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1789", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1784", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1785", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("534", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "384", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("535", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "385", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("536", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "386", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("537", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "387", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("538", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "388", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("539", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "389", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("540", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "390", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("541", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "391", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("542", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "392", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("543", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "393", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("544", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "394", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("545", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "395", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("546", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "396", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("547", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "397", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("548", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "398", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("549", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "399", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("550", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "400", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("551", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "401", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("552", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "402", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("553", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "403", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("554", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "404", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("555", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "405", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "406", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("557", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "407", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("558", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "408", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("559", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "409", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("560", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "410", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("561", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "411", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("562", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "412", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("563", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "413", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("564", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "414", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("565", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "415", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("566", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "416", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("567", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "417", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("568", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "418", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("569", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "419", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("570", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "420", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("572", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "421", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("573", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "422", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("574", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "423", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("575", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "424", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("576", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "425", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("577", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "426", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("578", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("579", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("580", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("611", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "458", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("613", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "461", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("617", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "464", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("621", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "469", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("624", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "472", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("626", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "474", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("628", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "476", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("631", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "478", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("632", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "480", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "482", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("881", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("884", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("885", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("886", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "721", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("893", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("894", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "723", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("895", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("896", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("897", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("898", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "724", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1276", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1055", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1305", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1306", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1307", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1308", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1084", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1758", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1757", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1753", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1754", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1755", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1756", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1085", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1765", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1766", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1431", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1761", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1760", "2013-03-22 14:22:36", "2011-10-17 21:36:08", NULL, "1", "1086", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1762", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1763", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1430", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1326", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1327", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1328", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "283", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1332", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1333", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1334", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "288", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1338", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "291", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1344", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1343", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1345", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1346", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "292", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1348", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1349", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1350", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1351", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "293", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1355", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1356", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1357", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1358", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1359", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "295", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1360", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1361", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1362", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1363", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1364", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1365", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1366", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1367", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1087", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1368", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1369", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1370", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1371", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1372", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1373", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1374", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1375", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1088", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1376", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1377", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1378", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1379", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1089", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1778", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1775", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1776", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1777", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1788", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1787", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1786", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1783", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1773", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1774", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1090", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1782", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "301", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2221", "2017-02-15 10:32:16", "0000-00-00 00:00:00", NULL, "1", "1197", "profot_1487172735_1000x672.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1556", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1247", "profot_1486740381_599x800.jpg", "jose");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1633", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1325", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1634", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1326", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1635", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1327", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1636", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1328", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1637", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1329", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1638", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1330", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1639", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1331", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1640", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1332", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1641", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1333", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1642", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1334", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1643", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1335", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1644", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1336", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1645", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1337", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1646", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1338", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1647", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1339", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1648", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1340", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1649", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1341", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1650", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1342", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1651", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1343", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1652", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1344", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1653", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1345", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1654", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1346", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1655", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1347", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1656", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1348", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1657", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1349", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1658", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1350", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1659", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1351", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1660", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1352", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1661", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1353", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1662", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1354", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1663", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1355", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1664", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1356", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1665", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1357", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1666", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1358", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1667", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1359", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2220", "2017-02-15 10:31:40", "0000-00-00 00:00:00", NULL, "1", "1373", "profot_1487172698_1000x1487.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1743", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1744", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1745", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1746", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1427", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1749", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1750", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1751", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1752", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1429", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1767", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1432", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1768", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1433", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1769", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1434", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1770", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1435", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1771", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1436", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1772", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1438", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1790", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "302", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1791", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1439", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1792", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1440", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1836", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1484", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2219", "2017-02-15 10:30:46", "0000-00-00 00:00:00", NULL, "1", "1519", "profot_1487172644_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2218", "2017-02-15 10:30:04", "0000-00-00 00:00:00", NULL, "1", "1525", "profot_1487172600_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1882", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("1883", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1428", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2026", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1671", "profot_1486740381_599x800.jpg", "Prime U Loción Facial Refrescante (120 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2028", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1673", "profot_1486740381_599x800.jpg", "Prime U Crema Humectante de dia (50 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2030", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1675", "profot_1486740381_599x800.jpg", "Prime U Crema Facial de noche (50 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2031", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1676", "profot_1486740381_599x800.jpg", "Prime U Crema para el contorno de ojos (15 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2032", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1677", "profot_1486740381_599x800.jpg", "Jabón protector UV (108 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2033", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1678", "profot_1486740381_599x800.jpg", "Shampoo Anticaspa (300grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2035", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1680", "profot_1486740381_599x800.jpg", "Shampoo Suavizante (300grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2036", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1681", "profot_1486740381_599x800.jpg", "Moistenning Acondicionador Esencial (150 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2037", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1682", "profot_1486740381_599x800.jpg", "Shampoo Hidratante (300 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2038", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1683", "profot_1486740381_599x800.jpg", "Herbal China Pasta Dental (135 grs)");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2039", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1684", "profot_1486740381_599x800.jpg", "PURIFICADOR CON OZONO PARA FRUTAS, VERDURAS Y AMBIENTES");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2040", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1685", "profot_1486740381_599x800.jpg", "Masajeador Capilar");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2042", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1687", "profot_1486740381_599x800.jpg", "Masajeador Muscular ACUMAGIC");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2147", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2148", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2149", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2150", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1792", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2151", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2152", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2153", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2154", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1793", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2155", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2156", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1794", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2157", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2158", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1795", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2159", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1796", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2183", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1818", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2217", "2017-02-15 10:24:56", "0000-00-00 00:00:00", NULL, "1", "1821", "profot_1487172294_1000x1251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2185", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1820", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2186", "2013-03-22 14:22:36", "0000-00-00 00:00:00", NULL, "1", "1819", "profot_1486740381_599x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2216", "2017-02-15 10:24:07", "0000-00-00 00:00:00", NULL, "1", "1822", "profot_1487172245_1000x1393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2215", "2017-02-15 10:23:36", "0000-00-00 00:00:00", NULL, "1", "1823", "profot_1487172214_1000x884.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2214", "2017-02-15 10:23:06", "0000-00-00 00:00:00", NULL, "1", "1824", "profot_1487172185_1000x831.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2209", "2017-02-15 10:21:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172075_1000x1505.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2208", "2017-02-15 10:20:38", "0000-00-00 00:00:00", NULL, "1", "1826", "profot_1487172036_1000x879.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2210", "2017-02-15 10:21:36", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172093_1000x1551.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2211", "2017-02-15 10:21:50", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172108_1000x1446.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2212", "2017-02-15 10:22:04", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172121_1000x1735.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2213", "2017-02-15 10:22:17", "0000-00-00 00:00:00", NULL, "1", "1825", "profot_1487172135_1000x1594.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2234", "2017-09-11 11:43:16", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148195_800x1279.jpg", "Guante1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2235", "2017-09-11 11:47:54", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148473_800x1292.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2236", "2017-09-11 11:55:31", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148930_800x1450.jpg", "Guante 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2237", "2017-09-11 11:55:47", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148946_800x1405.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2238", "2017-09-11 11:58:18", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149096_800x1384.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2239", "2017-09-11 11:58:34", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149112_800x1541.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2240", "2017-09-11 12:29:22", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150961_800x1275.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2241", "2017-09-11 12:29:37", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150975_800x1281.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2242", "2017-09-11 12:42:00", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151719_800x513.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2243", "2017-09-11 12:42:23", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151741_800x1473.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2244", "2017-09-11 12:44:03", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151842_800x632.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2245", "2017-09-11 12:44:20", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151859_800x1363.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2246", "2017-09-11 12:55:08", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152507_800x1240.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2247", "2017-09-11 12:55:23", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152521_800x1293.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2248", "2017-09-11 12:59:44", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152782_800x1272.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2249", "2017-09-11 13:00:05", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152801_800x1233.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2250", "2017-09-11 13:01:13", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152871_800x1177.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2251", "2017-09-11 13:01:30", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152888_800x1144.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2252", "2017-09-11 13:06:35", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153194_800x314.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2253", "2017-09-11 13:06:47", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153206_800x189.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2254", "2017-09-11 13:08:09", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153289_800x300.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2255", "2017-09-11 13:08:21", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153301_800x317.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2256", "2017-09-11 13:09:21", "0000-00-00 00:00:00", NULL, "1", "1841", "profot_1505153361_800x338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2557", "2017-09-15 12:51:26", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497886_800x338.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2258", "2017-09-11 13:10:47", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153447_800x296.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2259", "2017-09-11 13:11:00", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153460_800x257.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2260", "2017-09-11 13:11:46", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153506_800x444.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2261", "2017-09-11 13:12:01", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153521_800x312.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2262", "2017-09-11 13:41:06", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155265_800x681.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2263", "2017-09-11 13:41:21", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155281_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2264", "2017-09-11 13:42:06", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155325_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2265", "2017-09-11 13:42:20", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155339_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2266", "2017-09-11 13:42:59", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155378_800x618.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2267", "2017-09-11 13:43:11", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155390_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2268", "2017-09-11 13:46:23", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155583_800x675.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2269", "2017-09-11 13:46:39", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155598_800x1044.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2270", "2017-09-11 13:53:19", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505155998_800x973.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2271", "2017-09-11 13:54:49", "0000-00-00 00:00:00", NULL, "1", "1849", "profot_1505156087_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2272", "2017-09-11 13:56:00", "0000-00-00 00:00:00", NULL, "1", "1850", "profot_1505156158_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2273", "2017-09-11 13:57:07", "0000-00-00 00:00:00", NULL, "1", "1851", "profot_1505156226_800x958.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2274", "2017-09-11 14:00:11", "0000-00-00 00:00:00", NULL, "1", "1852", "profot_1505156408_800x999.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2552", "2017-09-15 12:33:09", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505496787_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2276", "2017-09-11 14:03:12", "0000-00-00 00:00:00", NULL, "1", "1854", "profot_1505156591_800x929.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2277", "2017-09-11 14:04:05", "0000-00-00 00:00:00", NULL, "1", "1855", "profot_1505156643_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2278", "2017-09-11 14:04:47", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505156685_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2279", "2017-09-11 14:05:43", "0000-00-00 00:00:00", NULL, "1", "1857", "profot_1505156741_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2280", "2017-09-11 14:07:40", "0000-00-00 00:00:00", NULL, "1", "1859", "profot_1505156858_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2281", "2017-09-11 14:07:58", "0000-00-00 00:00:00", NULL, "1", "1858", "profot_1505156877_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2282", "2017-09-11 14:08:52", "0000-00-00 00:00:00", NULL, "1", "1860", "profot_1505156931_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2283", "2017-09-11 14:09:43", "0000-00-00 00:00:00", NULL, "1", "1861", "profot_1505156981_800x1004.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2284", "2017-09-11 14:12:47", "0000-00-00 00:00:00", NULL, "1", "1862", "profot_1505157167_800x606.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2285", "2017-09-11 14:13:38", "0000-00-00 00:00:00", NULL, "1", "1863", "profot_1505157217_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2286", "2017-09-11 14:14:33", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505157272_800x1003.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2287", "2017-09-11 14:15:27", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505157326_800x982.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2288", "2017-09-11 14:16:47", "0000-00-00 00:00:00", NULL, "1", "1866", "profot_1505157406_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2289", "2017-09-11 14:17:47", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505157466_800x950.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2290", "2017-09-11 14:18:39", "0000-00-00 00:00:00", NULL, "1", "1868", "profot_1505157518_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2291", "2017-09-11 14:22:11", "0000-00-00 00:00:00", NULL, "1", "1869", "profot_1505157730_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2292", "2017-09-11 14:23:03", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505157781_800x927.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2293", "2017-09-11 14:33:24", "0000-00-00 00:00:00", NULL, "1", "1871", "profot_1505158402_800x1319.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2294", "2017-09-11 14:34:37", "0000-00-00 00:00:00", NULL, "1", "1872", "profot_1505158475_800x1044.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2295", "2017-09-11 14:42:20", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505158939_800x954.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2298", "2017-09-11 19:11:54", "0000-00-00 00:00:00", NULL, "1", "1874", "profot_1505175113_800x1070.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2297", "2017-09-11 14:43:36", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505159015_800x995.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2299", "2017-09-11 19:21:07", "0000-00-00 00:00:00", NULL, "1", "1875", "profot_1505175666_800x1205.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2300", "2017-09-11 19:22:44", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175763_800x883.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2301", "2017-09-11 19:23:02", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175781_800x841.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2302", "2017-09-11 19:23:19", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175798_800x918.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2303", "2017-09-11 19:24:51", "0000-00-00 00:00:00", NULL, "1", "1877", "profot_1505175890_800x1713.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2304", "2017-09-11 19:39:25", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176764_800x1042.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2305", "2017-09-11 19:39:37", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176776_800x935.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2306", "2017-09-11 19:39:49", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176788_800x1330.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2307", "2017-09-11 19:41:19", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176877_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2308", "2017-09-11 19:41:33", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176892_800x1018.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2309", "2017-09-11 19:42:43", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176962_800x908.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2310", "2017-09-11 19:42:55", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176974_800x1032.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2311", "2017-09-11 19:43:31", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505177009_800x1423.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2312", "2017-09-11 19:44:53", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177092_800x1094.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2313", "2017-09-11 19:45:08", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177106_800x1087.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2314", "2017-09-11 19:46:08", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177167_800x1080.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2315", "2017-09-11 19:46:21", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177180_800x1146.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2316", "2017-09-11 19:47:01", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177220_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2317", "2017-09-11 19:47:14", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177233_800x1170.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2318", "2017-09-11 19:48:44", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177324_800x350.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2319", "2017-09-11 19:48:54", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177333_800x311.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2321", "2017-09-11 19:50:08", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177407_800x588.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2322", "2017-09-11 19:50:21", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177420_800x676.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2323", "2017-09-11 19:50:36", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177435_800x370.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2324", "2017-09-11 19:55:13", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177712_800x376.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2325", "2017-09-11 19:55:26", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177725_800x376.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2326", "2017-09-11 19:55:38", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177738_800x368.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2327", "2017-09-11 20:03:35", "0000-00-00 00:00:00", NULL, "1", "1887", "profot_1505178213_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2328", "2017-09-11 20:05:03", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178302_800x1397.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2329", "2017-09-11 20:05:18", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178317_800x1499.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2330", "2017-09-11 20:07:26", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178445_800x941.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2331", "2017-09-11 20:07:40", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178459_800x975.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2332", "2017-09-11 20:12:02", "0000-00-00 00:00:00", NULL, "1", "1890", "profot_1505178721_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2334", "2017-09-11 20:14:04", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505178843_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2335", "2017-09-11 20:27:40", "0000-00-00 00:00:00", NULL, "1", "1892", "profot_1505179660_800x393.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2336", "2017-09-11 20:31:18", "0000-00-00 00:00:00", NULL, "1", "1893", "profot_1505179878_800x268.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2337", "2017-09-11 20:32:26", "0000-00-00 00:00:00", NULL, "1", "1894", "profot_1505179946_800x386.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2338", "2017-09-11 20:33:23", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505180003_800x332.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2339", "2017-09-11 20:34:15", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180054_800x286.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2340", "2017-09-11 20:34:32", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180072_800x297.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2540", "2017-09-15 11:34:59", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505493298_800x386.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2342", "2017-09-11 20:42:43", "0000-00-00 00:00:00", NULL, "1", "1897", "profot_1505180561_800x1516.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2343", "2017-09-11 20:45:29", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505180728_800x1533.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2344", "2017-09-11 20:46:14", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180774_800x422.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2345", "2017-09-11 20:46:24", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180784_800x414.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2346", "2017-09-11 20:48:47", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180926_800x746.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2347", "2017-09-11 20:49:00", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180939_800x455.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2348", "2017-09-11 20:52:17", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181137_800x487.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2349", "2017-09-11 20:52:32", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181152_800x688.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2350", "2017-09-11 20:52:46", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181165_800x469.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2351", "2017-09-11 20:53:31", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181210_800x522.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2352", "2017-09-11 20:53:43", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181223_800x545.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2353", "2017-09-11 20:54:30", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181269_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2354", "2017-09-11 20:55:09", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181308_800x550.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2355", "2017-09-11 20:55:27", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181326_800x504.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2356", "2017-09-11 20:57:05", "0000-00-00 00:00:00", NULL, "1", "1904", "profot_1505181423_726x3180.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2357", "2017-09-11 20:57:48", "0000-00-00 00:00:00", NULL, "1", "1905", "profot_1505181466_800x2251.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2358", "2017-09-11 21:00:16", "0000-00-00 00:00:00", NULL, "1", "1906", "profot_1505181615_800x1382.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2359", "2017-09-11 21:03:03", "0000-00-00 00:00:00", NULL, "1", "1907", "profot_1505181781_800x1509.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2360", "2017-09-11 21:03:52", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181831_800x732.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2361", "2017-09-11 21:04:25", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181865_800x748.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2362", "2017-09-11 21:04:47", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181886_800x722.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2363", "2017-09-11 21:05:00", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181899_800x725.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2364", "2017-09-11 21:05:13", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181912_800x727.jpg", "Vista 5");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2365", "2017-09-11 21:12:29", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182349_800x479.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2366", "2017-09-11 21:12:48", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182368_800x194.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2367", "2017-09-11 21:13:30", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182409_800x800.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2368", "2017-09-11 21:13:42", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182422_800x652.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2369", "2017-09-11 21:15:29", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182528_800x739.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2370", "2017-09-11 21:15:44", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182543_800x1341.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2371", "2017-09-11 21:16:40", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182599_800x1053.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2372", "2017-09-11 21:16:57", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182616_800x1042.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2373", "2017-09-11 21:18:30", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182709_800x870.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2374", "2017-09-11 21:18:57", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182736_800x1173.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2539", "2017-09-13 14:00:31", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505329230_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2376", "2017-09-11 21:20:52", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182851_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2377", "2017-09-11 21:21:05", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182864_800x485.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2378", "2017-09-11 21:28:10", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183289_800x613.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2379", "2017-09-11 21:28:21", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183301_800x591.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2380", "2017-09-11 21:29:29", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183368_800x711.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2381", "2017-09-11 21:29:43", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183382_800x700.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2382", "2017-09-11 21:31:40", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183499_800x944.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2383", "2017-09-11 21:32:14", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183532_800x1358.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2384", "2017-09-11 21:33:58", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183637_800x780.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2385", "2017-09-11 21:34:15", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183653_800x807.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2386", "2017-09-11 21:37:51", "0000-00-00 00:00:00", NULL, "1", "1919", "profot_1505183870_800x865.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2387", "2017-09-11 21:39:05", "0000-00-00 00:00:00", NULL, "1", "1920", "profot_1505183943_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2388", "2017-09-11 21:39:54", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505183992_800x976.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2389", "2017-09-11 21:40:52", "0000-00-00 00:00:00", NULL, "1", "1922", "profot_1505184051_800x945.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2390", "2017-09-11 21:41:58", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184117_800x960.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2391", "2017-09-11 21:42:29", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184148_800x974.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2392", "2017-09-11 21:43:21", "0000-00-00 00:00:00", NULL, "1", "1924", "profot_1505184200_800x951.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2393", "2017-09-11 21:44:12", "0000-00-00 00:00:00", NULL, "1", "1925", "profot_1505184251_800x963.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2394", "2017-09-11 21:44:52", "0000-00-00 00:00:00", NULL, "1", "1926", "profot_1505184291_800x946.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2395", "2017-09-11 21:45:55", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184354_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2396", "2017-09-11 21:48:15", "0000-00-00 00:00:00", NULL, "1", "1928", "profot_1505184494_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2397", "2017-09-11 21:51:42", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184700_800x956.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2398", "2017-09-11 21:52:51", "0000-00-00 00:00:00", NULL, "1", "1930", "profot_1505184769_800x949.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2399", "2017-09-11 21:54:07", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184845_800x1390.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2400", "2017-09-11 21:54:29", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184868_800x1453.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2401", "2017-09-11 21:54:56", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184894_800x1406.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2402", "2017-09-11 21:56:01", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184959_800x1161.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2403", "2017-09-11 21:56:18", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184977_800x1172.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2404", "2017-09-11 21:56:36", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184994_800x1318.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2405", "2017-09-11 21:57:49", "0000-00-00 00:00:00", NULL, "1", "1933", "profot_1505185068_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2406", "2017-09-11 21:58:36", "0000-00-00 00:00:00", NULL, "1", "1934", "profot_1505185115_800x953.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2407", "2017-09-11 21:59:23", "0000-00-00 00:00:00", NULL, "1", "1935", "profot_1505185162_800x942.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2408", "2017-09-11 22:00:33", "0000-00-00 00:00:00", NULL, "1", "1936", "profot_1505185230_800x961.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2409", "2017-09-11 22:01:22", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505185281_800x935.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2410", "2017-09-11 22:02:20", "0000-00-00 00:00:00", NULL, "1", "1938", "profot_1505185339_800x1085.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2411", "2017-09-11 22:05:25", "0000-00-00 00:00:00", NULL, "1", "1939", "profot_1505185525_800x311.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2412", "2017-09-11 22:06:51", "0000-00-00 00:00:00", NULL, "1", "1940", "profot_1505185610_800x1415.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2413", "2017-09-11 22:07:57", "0000-00-00 00:00:00", NULL, "1", "1941", "profot_1505185674_800x1985.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2414", "2017-09-11 22:08:54", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185734_800x783.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2415", "2017-09-11 22:09:07", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185746_800x754.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2416", "2017-09-11 22:10:41", "0000-00-00 00:00:00", NULL, "1", "1943", "profot_1505185840_800x1150.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2417", "2017-09-11 22:49:04", "0000-00-00 00:00:00", NULL, "1", "1944", "profot_1505188142_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2418", "2017-09-11 22:49:58", "0000-00-00 00:00:00", NULL, "1", "1945", "profot_1505188197_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2419", "2017-09-11 22:51:24", "0000-00-00 00:00:00", NULL, "1", "1946", "profot_1505188282_800x1404.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2420", "2017-09-11 22:52:16", "0000-00-00 00:00:00", NULL, "1", "1947", "profot_1505188335_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2421", "2017-09-11 22:53:05", "0000-00-00 00:00:00", NULL, "1", "1948", "profot_1505188383_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2422", "2017-09-11 22:53:54", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505188433_800x1375.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2423", "2017-09-11 23:00:55", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188854_800x1571.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2424", "2017-09-11 23:01:08", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188867_800x1318.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2425", "2017-09-11 23:01:54", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188912_800x1140.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2426", "2017-09-11 23:02:04", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188923_800x1116.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2427", "2017-09-11 23:02:49", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188967_800x1058.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2428", "2017-09-11 23:03:02", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188981_800x1056.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2429", "2017-09-11 23:04:24", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189063_800x1101.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2430", "2017-09-11 23:04:36", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189075_800x1143.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2533", "2017-09-13 13:00:04", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325601_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2432", "2017-09-11 23:06:26", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189185_800x796.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2433", "2017-09-11 23:06:38", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189196_800x802.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2434", "2017-09-11 23:06:49", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189208_800x614.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2435", "2017-09-11 23:07:44", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189264_800x773.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2436", "2017-09-11 23:07:54", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189274_800x721.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2437", "2017-09-11 23:08:05", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189285_800x594.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2438", "2017-09-11 23:10:22", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189421_800x668.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2439", "2017-09-11 23:10:35", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189434_800x827.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2440", "2017-09-11 23:11:27", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189486_800x827.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2441", "2017-09-11 23:11:40", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189499_800x937.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2442", "2017-09-11 23:12:58", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189577_800x809.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2443", "2017-09-11 23:13:17", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189597_800x474.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2444", "2017-09-11 23:14:41", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189680_800x768.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2445", "2017-09-11 23:15:05", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189704_800x641.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2446", "2017-09-11 23:17:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189843_800x1262.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2447", "2017-09-11 23:17:41", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189860_800x1225.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2448", "2017-09-11 23:19:32", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189970_800x1201.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2449", "2017-09-11 23:19:46", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189985_800x1237.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2450", "2017-09-11 23:19:58", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189997_800x1124.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2451", "2017-09-11 23:20:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505190023_800x1463.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2452", "2017-09-11 23:22:00", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190119_800x1673.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2453", "2017-09-11 23:22:15", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190133_800x1511.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2454", "2017-09-11 23:22:27", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190145_800x1348.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2455", "2017-09-11 23:22:41", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190159_800x1256.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2456", "2017-09-11 23:41:12", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191271_800x693.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2457", "2017-09-11 23:41:23", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191282_800x636.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2458", "2017-09-11 23:48:32", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191711_800x977.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2459", "2017-09-11 23:48:49", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191728_800x1025.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2460", "2017-09-11 23:49:04", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191743_800x1378.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2461", "2017-09-11 23:50:35", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191833_800x1395.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2462", "2017-09-11 23:50:51", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191848_800x1380.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2463", "2017-09-11 23:53:47", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192025_800x1610.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2464", "2017-09-11 23:54:08", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192047_800x1410.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2465", "2017-09-11 23:55:36", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192134_800x1321.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2466", "2017-09-11 23:55:52", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192151_800x1487.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2467", "2017-09-11 23:57:01", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192220_800x1149.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2468", "2017-09-11 23:57:16", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192235_800x1469.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2469", "2017-09-11 23:58:25", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192304_800x854.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2470", "2017-09-11 23:58:36", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192315_800x1352.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2471", "2017-09-11 23:59:46", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192386_800x799.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2472", "2017-09-12 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192399_800x1353.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2473", "2017-09-12 00:01:40", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192499_800x654.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2474", "2017-09-12 00:01:53", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192511_800x1420.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2475", "2017-09-12 00:02:50", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192569_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2476", "2017-09-12 00:03:03", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192582_800x1426.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2477", "2017-09-12 00:04:04", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192643_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2478", "2017-09-12 00:04:15", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192655_800x701.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2479", "2017-09-12 00:04:40", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192679_800x1091.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2480", "2017-09-12 00:05:47", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192746_800x1342.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2481", "2017-09-12 00:06:01", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192760_800x1389.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2482", "2017-09-12 00:07:38", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192857_800x480.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2483", "2017-09-12 00:07:53", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192872_800x1501.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2484", "2017-09-12 00:08:50", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192929_800x1226.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2485", "2017-09-12 00:09:03", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192942_800x2071.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2486", "2017-09-12 00:09:58", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505192998_800x609.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2487", "2017-09-12 00:10:10", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193009_800x606.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2488", "2017-09-12 00:10:28", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193026_800x2118.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2489", "2017-09-12 00:13:48", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193226_800x1103.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2490", "2017-09-12 00:14:02", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193240_800x1980.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2491", "2017-09-12 00:15:01", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193300_800x1192.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2492", "2017-09-12 00:15:16", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193314_800x1855.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2493", "2017-09-12 00:16:32", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193389_800x1445.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2494", "2017-09-12 00:16:46", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193404_800x1785.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2495", "2017-09-12 00:17:35", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193454_800x1211.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2496", "2017-09-12 00:17:50", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193468_800x1388.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2497", "2017-09-12 00:19:31", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193570_800x1341.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2498", "2017-09-12 00:19:47", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193585_800x1447.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2499", "2017-09-12 00:20:42", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193642_800x553.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2500", "2017-09-12 00:20:58", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193657_800x1246.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2501", "2017-09-12 00:27:42", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194062_800x510.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2502", "2017-09-12 00:28:01", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194080_800x533.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2503", "2017-09-12 00:28:17", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194096_800x1363.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2504", "2017-09-12 00:29:25", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194164_800x1079.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2505", "2017-09-12 00:29:40", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194177_800x1038.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2506", "2017-09-12 00:30:41", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194239_800x1223.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2507", "2017-09-12 00:31:00", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194258_800x1272.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2508", "2017-09-12 00:31:30", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194289_800x1036.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2509", "2017-09-12 00:32:38", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194357_800x1138.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2510", "2017-09-12 00:32:50", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194369_800x1457.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2511", "2017-09-12 00:34:07", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194445_800x1011.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2512", "2017-09-12 00:34:19", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194458_800x1076.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2513", "2017-09-12 00:35:17", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194516_800x1291.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2514", "2017-09-12 00:35:33", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194532_800x1400.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2515", "2017-09-12 00:35:45", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194543_800x1445.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2516", "2017-09-12 00:36:58", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194617_800x950.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2517", "2017-09-12 00:37:09", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194628_800x645.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2518", "2017-09-12 00:37:27", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194646_800x1464.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2519", "2017-09-12 00:38:40", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194720_800x349.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2520", "2017-09-12 00:38:55", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194734_800x351.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2521", "2017-09-12 00:39:08", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194747_800x1473.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2522", "2017-09-12 00:39:57", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194796_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2523", "2017-09-12 00:40:10", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194809_800x1434.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2524", "2017-09-12 00:40:23", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194822_800x1069.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2525", "2017-09-12 00:41:22", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194881_800x1143.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2526", "2017-09-12 00:41:36", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194895_800x1166.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2527", "2017-09-12 00:41:48", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194906_800x1850.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2528", "2017-09-12 00:44:14", "0000-00-00 00:00:00", NULL, "1", "1994", "profot_1505195053_800x1119.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2529", "2017-09-12 00:46:53", "0000-00-00 00:00:00", NULL, "1", "1995", "profot_1505195212_800x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2530", "2017-09-12 00:48:17", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195297_800x703.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2531", "2017-09-12 00:48:28", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195307_800x1013.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2532", "2017-09-12 00:48:40", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195319_800x993.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2534", "2017-09-13 13:00:26", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325624_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2535", "2017-09-13 13:00:49", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325648_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2536", "2017-09-13 13:01:18", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325677_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2537", "2017-09-13 13:14:58", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505326496_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2538", "2017-09-13 13:32:29", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505327548_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2541", "2017-09-15 11:39:16", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505493554_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2542", "2017-09-15 11:51:58", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494316_800x1080.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2543", "2017-09-15 11:52:19", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494337_800x1146.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2544", "2017-09-15 11:56:32", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494591_800x1074.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2545", "2017-09-15 11:56:50", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494609_800x1042.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2546", "2017-09-15 12:08:50", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505495329_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2547", "2017-09-15 12:12:02", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505495520_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2548", "2017-09-15 12:15:38", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495737_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2549", "2017-09-15 12:18:39", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495918_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2550", "2017-09-15 12:21:20", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505496078_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2551", "2017-09-15 12:24:57", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505496296_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2553", "2017-09-15 12:33:41", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505496820_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2554", "2017-09-15 12:36:43", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497003_800x681.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2556", "2017-09-15 12:37:27", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497046_800x618.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2558", "2017-09-15 12:51:37", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497897_800x273.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2559", "2017-09-15 13:16:27", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499385_800x1473.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2560", "2017-09-15 13:16:48", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499407_800x513.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2561", "2017-09-15 13:18:13", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499491_800x1450.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2562", "2017-09-15 13:21:05", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499664_800x1405.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2563", "2017-09-15 13:21:45", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499704_800x1240.jpg", NULL);
#
#
INSERT INTO `productos_fotos_impor` VALUES ("2564", "2017-09-15 13:22:15", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499734_800x1275.jpg", NULL);
#
#
DROP TABLE IF EXISTS `productos_groups`;
#
#
CREATE TABLE `productos_groups` (
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_groups` VALUES ("1", "2018-03-08 11:15:12", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "linea-para-mujeres", "Línea para mujeres", "1");
#
#
INSERT INTO `productos_groups` VALUES ("2", "2018-03-08 11:15:33", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "linea-de-hombres", "Línea de hombres", "1");
#
#
INSERT INTO `productos_groups` VALUES ("3", "2018-03-08 11:15:53", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "linea-nutricional", "Línea Nutricional", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_grupos` VALUES ("2", "2018-04-19 07:52:09", "2018-05-08 18:45:00", NULL, "1", "Recomendados", NULL, NULL, NULL, "recomendados");
#
#
INSERT INTO `productos_grupos` VALUES ("3", "2018-04-19 07:52:33", "2018-04-30 21:42:17", NULL, "1", "Productos Ardyss", NULL, NULL, NULL, "productos-ardyss");
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
  `codigo` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `tags` varchar(80) DEFAULT NULL,
  `moneda` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `viewed` varchar(80) DEFAULT NULL,
  `adjunto` varchar(80) DEFAULT NULL,
  `url` varchar(160) DEFAULT NULL,
  `ficha` longtext,
  `ver_home` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items` VALUES ("1", "2018-04-19 08:00:59", "2018-05-09 19:55:23", NULL, "1", "3", "1", "Abdo Women", NULL, NULL, "<p><strong><em>&iexcl;Soporte Perfecto para la Espalda!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Es una excelente prenda para la mujer que quiere estar saludable y disfrutar de una buena figura. Dise&ntilde;ada para brindar soporte abdominal y reforzar la espalda baja.</span><br />\n<br />\n<strong><em>Ayuda a proteger la columna vertebral de dolores de espalda y fatiga muscular. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reduce la cintura hasta 2 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reafirma el abdomen suavizando su apariencia</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brinda soporte a la espalda</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a proteger la columna vertebral de dolores de espalda</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a aliviar la fatiga muscular</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "177", NULL, "2", NULL, NULL, NULL, "abdo-women", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("2", "2018-04-19 08:04:29", "2018-05-09 19:55:16", NULL, "1", "3", "1", "ANGEL BRA", NULL, NULL, "<p><strong><em>&iexcl;Forma y belleza que conquista!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">El uso de un Brasier inadecuado o en tallas incorrectas puede derivar en la deformidad de tus senos e incluso posturas inadecuadas que afectan tu est&eacute;tica y tu salud. Angel Bra es la mejor opci&oacute;n para ti.</span><br />\n<br />\n<strong><em>Elaborado con encaje duradero y material PowerNet que provee excelentes beneficios como:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brindar un soporte adecuado</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Mejorar tu postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayudar a eliminar la apariencia de fragmentaci&oacute;n en el busto</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reafirmar y remodelar la ubicaci&oacute;n del busto</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayudar a que la sangre, el ox&iacute;geno y los nutrientes circulen adecuadamente</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Relajar los m&uacute;sculos de los hombros y espalda</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;La banda de suspenci&oacute;n ayuda a minimizar o agregar volumen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;(puede usarse como un push-up bra)</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente</span><br />\n<br />\n<strong>COPAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">D-K</span><br />\n<br />\n<strong>TALLAS</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">28 - 42</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "150", NULL, "2", NULL, NULL, NULL, "angel-bra", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("3", "2018-04-19 08:05:08", "2018-05-14 19:37:31", NULL, "1", "3", "1", "BODY FASHION", NULL, NULL, "<p><strong><em>&iexcl;Estiliza tu cintura!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">A trav&eacute;s de la lipotransportaci&oacute;n, el tejido adiposo se distribuye a las &aacute;reas correctas removiendo el tejido adiposo de donde no se necesita.</span><br />\n<br />\n<strong><em>Con un innovador dise&ntilde;o, el Body Fashion ayuda a disimular el est&oacute;mago, al contraer los m&uacute;sculos del abdomen, adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a reducir la cintura de 2 a 3 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Realza los gl&uacute;teos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a eliminar la grasa de la entrepierna</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Corrige la postura y afina el talle</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Suaviza las irregularidades y ayuda a prevenir los dep&oacute;sitos adicionales</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Sin tirantes para una apariencia m&aacute;s sexy</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente&nbsp;</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">24 - 42</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", "BOF", "350", NULL, "2", NULL, NULL, NULL, "body-fashion", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("4", "2018-04-19 09:29:33", "2018-05-14 19:37:53", NULL, "1", "3", "1", "BODY MAGIC", NULL, NULL, "<p><strong><em>&iexcl;Tan real que parece m&aacute;gico!&nbsp;</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Si tu cuerpo esta perdiendo belleza y forma se debe a una mala postura acompa&ntilde;ada de un mal h&aacute;bito alimenticio que pueden da&ntilde;ar severamente desde tu columna hasta tu apariencia f&iacute;sica.</span><br />\n<br />\n<strong><em>Esta prenda promueve la compresi&oacute;n sobre puntos claves de tu cuerpo. Esta propiedad te ayuda a:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reacomodar los tejidos fl&aacute;cidos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levantar y mantener el vientre en posici&oacute;n</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Retraer los hombros y corregir la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Enderezar la espalda</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Adelgazar las caderas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levantar y sostener los gl&uacute;teos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reducir la cintura de 2 a 3 tallas</span><br />\n<br />\n<strong><em>Dise&ntilde;ado en materiales de alta resistencia y calidad<br />\n<br />\nUso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente o para ocasiones especiales</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">24 - 42</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", "BOMA", "360", NULL, "2", "2", NULL, NULL, "body-magic", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("5", "2018-04-19 09:30:17", "2018-05-09 19:54:53", NULL, "1", "3", "1", "Body Magic Largo", NULL, NULL, "<p><strong><em>&iexcl;Delinea tu cuerpo!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Disfruta de todo el comfort del Body Magic con el beneficio de una prenda m&aacute;s larga que remodela tus muslos. Con el objetivo de pasar desapercibido bajo la ropa.</span><br />\n<br />\n<strong><em>El Body Magic Largo no tiene costuras, adem&aacute;s cuenta con un innovador dise&ntilde;o sin ganchos, para brindarte mayor comodidad y los siguientes benefecios:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a reducir la cintura de 2 a 3 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Realza los gl&uacute;teos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a eliminar la grasa de la entrepierna</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Corrige la postura y afina el talle</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Suaviza las irregularidades y ayuda a prevenir los dep&oacute;sitos adicionales</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;El cierre en la pantorrilla se ajusta a tu comodidad</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">24 - 42</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "380", NULL, "2", NULL, NULL, NULL, "body-magic-largo", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("6", "2018-04-19 09:31:02", "2018-05-14 19:38:15", NULL, "1", "3", "1", "Body Remodelador Corto", NULL, NULL, "<p><strong><em>&iexcl;Excelente soporte ligero!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda ligera est&aacute; dise&ntilde;ada especialmente para la mujer de piernas delgadas y caderas que no necesitan ser remodeladas.</span><br />\n<br />\n<strong><em>Su dise&ntilde;o brinda soporte inferior y superior al mismo tiempo que corrige la postura adem&aacute;s de:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Controla el abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a eliminar esos cent&iacute;metros adicionales que pueden aparecer en el &aacute;rea de cintura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Corrige la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brinda un soporte ligero de la parte superior del cuerpo</span><br />\n<br />\n<strong><em>Elaborado con un material delgado. Sus cierres de gancho y cremallera dan soporte en la zona abdominal.<br />\n<br />\nUso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente o para ocasiones especiales</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span><br />\n&nbsp;</p>\n", NULL, "279", NULL, "2", NULL, NULL, NULL, "body-remodelador-corto", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("7", "2018-04-19 09:35:28", "2018-05-09 19:54:35", NULL, "1", "3", "1", "Corselette DeLuxe", NULL, NULL, "<p><strong><em>&iexcl;C&oacute;modo soporte!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Este remodelador est&aacute; maravillosamente dise&ntilde;ado para ayudar a la mujer a aliviar los dolores de espalda causados por la mala postura y el peso del busto.</span><br />\n<br />\n<strong><em>Su dise&ntilde;o de corte transversal en la parte posterior de la prenda coloca los hombros hacia atr&aacute;s y corrige la postura. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Tirantes ajustables que ayudan a corregir la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brinda soporte, brindando una apariencia m&aacute;s plana en el abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Puede reducir hasta 2 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Endereza tu torso</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">26 - 44</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "267", NULL, "2", NULL, NULL, NULL, "corselette-deluxe", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("8", "2018-04-19 09:36:19", "2018-05-09 19:54:28", NULL, "1", "3", "1", "Cinturilla Golden", NULL, NULL, "<p><strong><em>&iexcl;Afina tu cintura!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda te ayuda a perder esos pocos cent&iacute;metros en la cintura que simplemente no desaparecen con ejercicio o dietas.</span><br />\n<br />\n<strong><em>Este remodelador reducir&aacute; tu cintura hasta 2 tallas y enderezar&aacute; tu torso para lograr una mejor postura al instante. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reduce el talle hasta 2 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Cubre el &aacute;rea de la espalda, torso,cintura y abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Te ayuda a perder pulgadas adicionales</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Sin tirantes para una apariencia m&aacute;s sexy</span><br />\n<br />\n<strong><em>Tiene ganchos que permiten ajustar el cors&eacute;t a su nivel de comodidad para habilitar un continuo perfeccionamiento de tu figura.<br />\n<br />\nUso Ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">26 - 44</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "241", NULL, "2", NULL, NULL, NULL, "cinturilla-golden", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("9", "2018-04-19 09:37:00", "0000-00-00 00:00:00", NULL, "1", "3", "1", "Panty Embarazo Reforzado", NULL, NULL, "<p><strong><em>&iexcl;Comodidad y soporte para las mam&aacute;s y sus beb&eacute;s!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta c&oacute;moda prenda est&aacute; dise&ntilde;ada para las futuras mam&aacute;s con materiales transpirables de la m&aacute;s alta calidad. Se ajusta como una segunda piel a la figura, al mismo tiempo que brinda soporte y previene la aparici&oacute;n de estr&iacute;as.</span><br />\n<br />\n<strong><em>Esta prenda se puede utilizar desde el primer trimestre del embarazo. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a proteger la espina dorsal y espalda baja</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Proporciona una presi&oacute;n controlada de la cavidad abdominal</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Proporciona comodidad a la pelvis</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Evita el abdomen pendular</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Evita las venas varicosas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Previene el estre&ntilde;imiento</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Sus materiales protegen y cubren la piel, ayudando a prevenir las estr&iacute;as</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Evita la ca&iacute;da de los gl&uacute;teos</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Esta prenda se puede utilizar desde el primer trimestre del embarazo</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "290", NULL, "2", NULL, NULL, NULL, "panty-embarazo-reforzado", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("10", "2018-04-19 09:37:38", "0000-00-00 00:00:00", NULL, "1", "3", "1", "Panty Faja", NULL, NULL, "<p><strong><em>&iexcl;Control Diario!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Faja para controlar el Abdomen, afinar la cadera y estilizar la figura femenina. Ayuda en los d&iacute;as m&aacute;s dif&iacute;ciles con su puente impermeable.</span><br />\n<br />\n<strong><em>Esta faja est&aacute; elaborada con una pesada lycra y reforzada doblemente en el &aacute;rea del est&oacute;mago logrando un excelente control. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Realza los gl&uacute;teos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a reducir el abdomen y la cintura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Doblemente reforzada en el &aacute;rea del est&oacute;mago logrando un excelente control</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "230", NULL, "2", NULL, NULL, NULL, "panty-faja", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("11", "2018-04-19 09:38:22", "2018-05-14 19:39:09", NULL, "1", "3", "1", "Panty Remodeladora", NULL, "Ardyss", "<p><strong><em>&iexcl;Remodela y tonifica tus gl&uacute;teos y caderas!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda ayuda a remodelar los gl&uacute;teos para darles una apariencia joven y firme. Tambi&eacute;n reduce el tejido graso en la zona de la cadera.</span><br />\n<br />\n<strong><em>Esta faja fue dise&ntilde;ada para ayudar a aumentar, disminuir e igualar tus gl&uacute;teos, ayudando a eliminar cualquier irregularidad en tus piernas y caderas. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Bloquea el m&uacute;sculo gl&uacute;teo mayor en la posici&oacute;n adecuada, por lo que lleva a cabo los beneficios mencionados anteriormente</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Puede ayudar a corregir la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a prevenir la fatiga causada por caminar o ponerse de pie durante largos per&iacute;odos de tiempo</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Remodela los ligamentos que mantienen los m&uacute;sculos de los gl&uacute;teos.</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", "PRRB", "190", NULL, "2", NULL, NULL, NULL, "panty-remodeladora", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("12", "2018-04-19 09:39:05", "2018-05-09 19:54:15", NULL, "1", "3", "1", "Faja Postparto", NULL, NULL, "<p><strong><em>&iexcl;Recupera tu Figura!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda est&aacute; dise&ntilde;ada para suavizar la apariencia del vientre bajo despu&eacute;s de dar a luz. Tambi&eacute;n recomendada para reducir la flacidez del vientre, ayuda en la recuperaci&oacute;n despu&eacute;s del parto.</span><br />\n<br />\n<strong><em>Reacomoda los &oacute;rganos en su posici&oacute;n correcta y ayudando a los m&uacute;sculos del abdomen y la espalda mediante la redistribuci&oacute;n de peso. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a enderezar la columna vertebral</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Proporciona comodidad a las pelvis al final del embarazo</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Puede ayudar a prevenir infecciones urinarias</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levanta el abdomen bajo</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Protege los m&uacute;sculos abdominales</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse despu&eacute;s de dar a luz.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "305", NULL, "2", NULL, NULL, NULL, "faja-postparto", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("13", "2018-04-19 09:39:49", "2018-05-14 19:39:58", NULL, "1", "3", "1", "Chaleco Vedette", NULL, "Ardyss", "<p><strong><em>&iexcl;Delinea tu cuerpo!</em></strong><br />\n<br />\nIdeal para mujeres con exceso de tejido graso en abdomen y espalda. Excelente para mujeres que tienen actividades en el hogar.<br />\n<br />\n<strong><em>Esta prenda nos puede ayudar a:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Quema el tejido graso por medio de la transpiraci&oacute;n</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reduce el &aacute;rea de espalda, torso, cintura y abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a perder esas pulgadas adicionales</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brinda soporte a la espalda</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n proporcionando libertad de movimiento.</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Se recomienda utilizarlo por un m&aacute;ximo de 4 horas al d&iacute;a.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">30 - 44</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", "CAVI", "280", NULL, "2", "288", NULL, NULL, "chaleco-vedette", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("14", "2018-04-19 09:40:32", "2018-05-09 19:54:04", NULL, "1", "3", "2", "Abdo Men", NULL, NULL, "<p><strong><em>&iexcl;Estimula la tonificaci&oacute;n muscular!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda remodeladora de hombre est&aacute; dise&ntilde;ada para brindar soporte abdominal y reforzar la espalda baja.</span><br />\n<br />\n<strong><em>Esta camiseta puede reducir tu figura hasta dos tallas. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a tonificar el abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Su banda reforzada comprime, brindando una apariencia m&aacute;s delgada</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Los resultados est&eacute;ticos son inmediatos reduce tu cintura hasta 2 tallas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Brinda soporte a la espalda y ayuda a aliviar la fatiga muscular</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", NULL, "177", NULL, "2", NULL, NULL, NULL, "abdo-men", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("15", "2018-04-19 09:41:08", "2018-05-14 19:40:34", NULL, "1", "3", "2", "Corsy Men", NULL, "Ardyss", "<p><strong><em>&iexcl;Corrige tu postura!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta prenda es especial para hombres, dise&ntilde;ada para brindar soporte lumbar y abdominal. La cremallera frontal es facil de usar, mientras que la cintura el&aacute;stica le da soporte a la espalda.</span><br />\n<br />\n<strong><em>Una prenda que act&uacute;a corrigiendo la postura de la espalda. Adem&aacute;s...</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a corregir la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a relajar, cuello, espalda y caderas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Asiste en la prevenci&oacute;n del dolor de espalda y alivia la tensi&oacute;n muscular</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a tonificar los m&uacute;sculos abdominales</span><br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">XXS . XS . S . M . L . XL . XXL</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span></p>\n", "CHEMEN", "281", NULL, "2", NULL, NULL, NULL, "corsy-men", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("16", "2018-04-19 09:42:52", "2018-05-09 19:53:51", NULL, "0", "3", "3", "Power Boost", NULL, NULL, "<p>POWER<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;</span><strong>BOOST</strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Si al hacer tus actividades diarias tu rendimiento se ve limitado y el cansancio llega muy pronto. Power Boost es el impulso que te brinda mayor resistencia y soporte muscular.</span><br />\n<br />\n<strong><em>&iexcl;Maximiza tu&nbsp;rendimientomientras fortaleces tu figura!</em></strong><br />\n<br />\n<strong><em>Esta deliciosa bebida c&iacute;trica energ&eacute;tica de gran sabor que contiene L- Arginina suficiente que ayuda a:*&nbsp;</em></strong><br />\n<br />\n<strong>Promover</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;la vitalidad, musculatura y energ&iacute;a sexual</span><br />\n<strong>Retardar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">el envejecimiento al reducir el da&ntilde;o oxidativo.&nbsp;</span><br />\n<strong>Tonificar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;y reafirmar los m&uacute;sculos, tendones y ligamentos</span><br />\n<strong>Apoya</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;tu energ&iacute;a y vitalidad</span><br />\n<br />\n<strong>Soluci&oacute;n en Polvo 312 g.</strong></p>\n", NULL, "154.51", NULL, "2", NULL, NULL, NULL, "power-boost", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("17", "2018-04-19 09:43:59", "0000-00-00 00:00:00", NULL, "0", "3", "3", "Ener Life", NULL, NULL, "<p><strong><em>&iexcl;Un toque de&nbsp;energ&iacute;a&nbsp;extra para activar tu d&iacute;a!</em></strong><br />\n<br />\n<strong><em>Las vitaminas y minerales que contiene ayudan a:*&nbsp;</em></strong><br />\n<br />\n<strong>Mejorar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;el rendimiento f&iacute;sico</span><br />\n<strong>Ayudar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">a mejorar tus reflejos nerviosos</span><br />\n<strong>Combatir</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;el abatimiento y fatiga cr&oacute;nica</span><br />\n<strong>Ayudar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">al rendimiento de atletas</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Dale impulso a tu d&iacute;a con esta deliciosa bebida de fruta c&iacute;trica que proporciona energ&iacute;a fresca durante todo el d&iacute;a. Enerlife contiene los amino&aacute;cidos esenciales para mejorar tu resistencia f&iacute;sica y claridad mental. Es un complemento perfecto para una dieta saludable y un programa de ejercicio. Si te sientes continuamente agotado y sin pila esta bebida puede ser de gran ayuda</span><br />\n<br />\n<strong>Soluci&oacute;n en Polvo 390 g.</strong><br />\n&nbsp;</p>\n", NULL, "128", NULL, "2", NULL, NULL, NULL, "ener-life", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("18", "2018-04-19 09:44:39", "2018-05-14 19:32:11", NULL, "1", "3", "3", "Cran Aloe", NULL, "Ardyss", "<p><strong><em>&iexcl;Rejuvenezca su cuerpo!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Cran Aloe es un concentrado de jugo que rejuvenece tu cuerpo con su fusi&oacute;n din&aacute;mica de ar&aacute;ndano, jugo de Aloe Vera y antioxidantes naturales. Cran Aloe fue dise&ntilde;ado para ser un tracto urinario excelente como soporte del sistema.</span><br />\n<br />\n<strong><em>Los beneficios para la salud todos los d&iacute;as:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Antioxidante enriquecido.</span><br />\n*<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Promueve la salud digestiva y el revestimiento g&aacute;strico</span><br />\n*<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Apoya la salud del tracto urinario y renal.</span><br />\n*<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a Mantener estable el nivel de colesterol</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">La mayor parte de las infecciones urinarias e inflamaciones estomacales son causadas por bacterias que atacan nuestras c&eacute;lulas, las mujeres y las personas de mayor edad son a&uacute;n m&aacute;s propensas a estos padecimientos. Los ingredientes de esta refrescante bebida act&uacute;an reforzando tu organismo</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Encuentra todos los beneficios diur&eacute;ticos, anti-inflamatorios y de regeneraci&oacute;n celular de la S&aacute;bila en una bebida suave y refrescante con sabor a ar&aacute;ndano.</span><br />\n<br />\n<strong>Soluci&oacute;n liquida: 750 ml.</strong></p>\n", NULL, "185", NULL, "2", NULL, NULL, NULL, "cran-aloe", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("19", "2018-04-19 09:45:49", "2018-05-14 19:34:09", NULL, "1", "3", "3", "LE´VIVE GREEN", NULL, "Ardyss", "<p><strong><em>&iexcl;La deliciosa bebida que purifica tu organismo diariamente!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Esta f&oacute;rmula ha sido desarrollada no s&oacute;lo con un delicioso sabor sino tambi&eacute;n posee 9 nutrientes esenciales con incre&iacute;bles resultados</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Jugo LE ́VIVE GREEN asiste al cuerpo con nutrientes que ayudan a re-energizar, desintoxicar, y revitalizar. Esta mezcla patentada proporciona concentraciones altas de antioxidantes extra&iacute;dos de las hierbas m&aacute;s importantes del mundo y verduras como Aloe Vera, Alfalfa, Alcachofa y Kion.</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Los extractos bot&aacute;nicos que contiene Le ́Vive Green ayudan a: Mantener sanas las c&eacute;lulas mediante los procesos enriquecidos con antioxidantes. Protege el cuerpo debido al alto contenido de antioxidantes herbales. Promueve la limpieza del tracto digestivo, del h&iacute;gado y el ri&ntilde;&oacute;n. Tiene propiedades Cardio protectoras. Reduce el colesterol, provee de vitamina E&nbsp;</span><br />\n<br />\n<strong>Soluci&oacute;n liquida: 750 ml.</strong></p>\n", NULL, "185", NULL, "2", NULL, NULL, NULL, "levive-green", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("20", "2018-04-19 09:46:56", "2018-05-14 19:33:03", NULL, "1", "3", "3", "LE´VIVE RED", NULL, "Ardyss", "<p><strong><em>&iexcl;Revive tu salud con + Le&#39;vive a&uacute;n m&aacute;s potente!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Comience el d&iacute;a con una dieta saludable, un jugo delicioso con los 6 Compuesto de frutas antioxidantes m&aacute;s poderosos del mundo: Mangost&aacute;n, Gogi, Noni, Acai Berry, granada y ar&aacute;ndano se juntan para darle una combinaci&oacute;n imbatible de antioxidantes que neutralizan los radicales libres.&nbsp;</span><br />\n<br />\n<br />\n*<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Elimina las toxinas acumuladas</span><br />\n*<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Ayuda a mantener y mejorar la salud del coraz&oacute;n.</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Protege el sistema nervioso.</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Promueve la salud digestiva, aporta fibra natural, vitaminas y biomol&eacute;culas necesarias para la regeneraci&oacute;n celular</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Reducci&oacute;n de signos de envejecimiento</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Incrementa la fuerza y energ&iacute;a</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Elimina las toxinas acumuladas</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Fortalece el sistema inmunol&oacute;gico&nbsp;</span><br />\n<br />\n<strong>Soluci&oacute;n liquida: 750 ml.</strong></p>\n", NULL, "185", NULL, "2", NULL, NULL, NULL, "levive-plus", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("21", "2018-04-19 09:49:20", "2018-05-09 19:53:24", NULL, "0", "3", "3", "Top Fiber", NULL, NULL, "<p><strong><em>&iexcl;Sientete&nbsp;ligero&nbsp;durante todo el d&iacute;a!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Es muy probable que usted solo consuma el 50% de la cantidad diaria recomendada de fibras naturales lo que puede provocarle sentirse pesado y con mala digesti&oacute;n. Top Fiber Es un rica bebida que combina diferentes fibras naturales y le ayude a sentirse mucho mejor.</span><br />\n<br />\n<strong><em>T&oacute;malo una vez al d&iacute;a, las fibras que contiene te pueden ayudar a:</em></strong><br />\n<br />\n<strong>Mejorar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">el funcionamiento del tracto digestivo</span><br />\n<strong>Mejorar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;los niveles de colesterol</span><br />\n<strong>Limpiar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">la mucosa intestinal</span><br />\n<strong>Reducir</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;padecimientos de colon y recto</span><br />\n<strong>Evitar&nbsp;</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Problemas de estre&ntilde;imiento</span><br />\n<strong>Prevenir</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;algunos casos de hemorroides</span><br />\n<br />\n<br />\n<strong>Soluci&oacute;n en Polvo 450 g.</strong><br />\n&nbsp;</p>\n", NULL, "135", NULL, "2", NULL, NULL, NULL, "top-fiber", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("22", "2018-04-19 10:04:22", "2018-05-09 19:53:17", NULL, "0", "3", "3", "Memory Charge", NULL, NULL, "<p><strong><em>&iexcl;Reactiva tu&nbsp;atenci&oacute;n&nbsp;y activa tu mente!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Si frecuentemente olvidas tus tareas y te resulta muy dif&iacute;cil concentrarte. Memory charge es una rica bebida con vitaminas y nutrientes esenciales que te ayudar&aacute;n a mantenerte activo.</span><br />\n<br />\n<strong><em>Los amino&aacute;cidos esenciales que posee pueden ayudarte a:*</em></strong><br />\n<br />\n<strong>Optimizar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;funciones cerebrales</span><br />\n<strong>Mejorar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;la memoria y el sistema nervioso</span><br />\n<strong>Regular</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;la circulaci&oacute;n cardiovascular</span><br />\n<strong>Mejorar</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;el estado del sue&ntilde;o</span><br />\n<strong>Prevenir</strong><span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;dolores de cabeza y migra&ntilde;as</span><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Soluci&oacute;n en Polvo:&nbsp;</span><strong>300 g.</strong></p>\n", NULL, "117.41", NULL, "2", NULL, NULL, NULL, "memory-charge", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("44", "2018-04-19 09:49:20", "2018-05-14 22:59:51", NULL, "1", "2", "6", "Yor digest ultra", NULL, "YOR HEALTH", "<p><strong><em>Mejora la digesti&oacute;n y la absorci&oacute;n de nutrientes con esta altamente potente pero gentil f&oacute;rmula. Tambi&eacute;n incluye probi&oacute;ticos, prebi&oacute;ticos, y nutrientes para apoyar niveles saludables de az&uacute;car en la sangre y un metabolismo saludable de las grasas. </em></strong><br />\n&nbsp;</p>\n\n<ul>\n	<li>Apoya una digesti&oacute;n saludable y la regularidad</li>\n	<li>Mejora la absorci&oacute;n de nutrientes</li>\n	<li>Apoya niveles saludables de az&uacute;car en la sangre y un metabolismo saludable de las grasas</li>\n	<li>Reduce las molestias al calmar las alteraciones</li>\n	<li>Apoya la producci&oacute;n de energ&iacute;a e impulsa la funci&oacute;n cerebral</li>\n	<li>100% de origen vegetal</li>\n</ul>\n\n<p>C&aacute;psula Vegetariana (HPMC, agua), celulosa micro cristalina, estearato de magnesio.</p>\n\n<p><strong>C&Oacute;MO USAR</strong><br />\nToma una (1) c&aacute;psula con 8oz. de agua al inicio de la comida. Ya que &eacute;sta es una f&oacute;rmula de alta potencia, se recomienda una (1) c&aacute;psula, pero pueden tomarse dos (2) c&aacute;psulas dependiendo de las necesidades digestivas.</p>\n\n<p><strong>ALMACENAMIENTO</strong><br />\nMant&eacute;ngase cerrado firmemente en un lugar fresco y seco lejos de la humedad, de la luz solar, y del calor excesivo.</p>\n\n<p><strong>ATENCI&Oacute;N</strong><br />\nNo se use si el sello de seguridad est&aacute; roto, da&ntilde;ado, o parece haber sido violado. Siempre mant&eacute;n el bote firmemente cerrado. Personas menores de 18 a&ntilde;os no lo deben usar sin la autorizaci&oacute;n de un m&eacute;dico. Consulta a tu m&eacute;dico si est&aacute;s embarazada, amamantando, tomando medicamento recetado, o si tienes alguna condici&oacute;n m&eacute;dica.<br />\n<br />\nManufacturado en una instalaci&oacute;n que procesa huevos, leche, pescado, mariscos, frutos secos, trigo, y soya.<br />\n<br />\nMANT&Eacute;NGASE LEJOS DEL ALCANCE DE LOS NI&Ntilde;OS.</p>\n\n<p><strong>*Estas declaraciones no han sido evaluadas por la Administraci&oacute;n de Alimentos y F&aacute;rmacos. Este producto no pretende diagnosticar, tratar, curar, o prevenir enfermedades.</strong></p>\n", NULL, "195", NULL, "2", "4", NULL, NULL, "recomendacion-yor-digest-ultra", NULL, "1");
#
#
INSERT INTO `productos_items` VALUES ("47", "2018-05-14 23:09:53", "2018-05-14 23:32:06", NULL, "1", "2", NULL, "YOR Super Slim", NULL, "YOR Health", "<p><em><strong>Controla tu apetito de manera segura y efectiva con la ayuda de este suplemento formulado con &aacute;cido hidroxic&iacute;trico (HCA), t&eacute; verde, y granos de caf&eacute; verde. Combinado con una dieta saludable y un r&eacute;gimen de ejercicio, este suplemento para el control de peso puede impulsar tu metabolismo y ayudarte a eliminar el peso no deseado. </strong></em></p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Formulado con un 60% de HCA, realzado con t&eacute; verde, granos de caf&eacute; verde, y guaran&aacute;</li>\n	<li>Contiene Vitamina B12 para ayudar a apoyar el metabolismo</li>\n	<li>Puede ayudar a quemar la grasa y a suprimir el apetito</li>\n</ul>\n\n<p>&aacute;psula vegetariana (celulosa vegetal, agua), celulosa micro-cristalina</p>\n\n<p><strong>C&Oacute;MO USAR</strong><br />\nEval&uacute;a la tolerancia individual por los primeros tres d&iacute;as. Toma una (1) c&aacute;psula con un vaso de agua tres veces al d&iacute;a, aproximadamente de 30 a 60 minutos antes de las comidas principales. Empezando en el cuarto d&iacute;a, toma dos (2) c&aacute;psulas con agua tres veces al d&iacute;a. No excederse de dos (2) c&aacute;psulas en un per&iacute;odo de 4 horas o de seis (6) c&aacute;psulas en un per&iacute;odo de 24 horas.</p>\n\n<p><strong>ALMACENAMIENTO</strong><br />\nGu&aacute;rdese en un lugar fresco y seco lejos de la humedad, de la luz solar, y del calor excesivo.</p>\n\n<p><strong>ATENCI&Oacute;N</strong><br />\nNo se use si el sello de seguridad est&aacute; roto, da&ntilde;ado, o parece haber sido violado. Personas menores de 18 a&ntilde;os no lo deben usar sin la autorizaci&oacute;n de un m&eacute;dico. Consulta a tu m&eacute;dico si est&aacute;s embarazada, amamantando, tomando medicamento recetado, o si tienes alguna condici&oacute;n m&eacute;dica.<br />\n<br />\nManufacturado en una instalaci&oacute;n que procesa huevos, leche, pescado, mariscos, frutos secos, trigo, y soya.<br />\n<br />\nMANT&Eacute;NGASE LEJOS DEL ALCANCE DE LOS NI&Ntilde;OS.</p>\n\n<p>&nbsp;</p>\n\n<p><em><strong>*Estas declaraciones no han sido evaluadas por la Administraci&oacute;n de Alimentos y F&aacute;rmacos. Este producto no pretende diagnosticar, tratar, curar, o prevenir enfermedades.&nbsp;</strong></em></p>\n", NULL, "232", NULL, "2", NULL, NULL, NULL, "recomendacion-yor-super-slim", NULL, "1");
#
#
DROP TABLE IF EXISTS `productos_items_descu`;
#
#
CREATE TABLE `productos_items_descu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `descripcion` longtext,
  `codigo` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `tags` varchar(80) DEFAULT NULL,
  `moneda` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `viewed` varchar(80) DEFAULT NULL,
  `adjunto` varchar(80) DEFAULT NULL,
  `oferta` float DEFAULT NULL,
  `precio_oferta` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=1998 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items_descu` VALUES ("1832", "2017-09-11 11:57:48", "2018-05-10 22:48:22", NULL, "1", "LEGGINGS  S Y M NEGRO", "ARDYSS", "<p>LEGGINGS<br />\n<strong><em>&iexcl;Luce Sensacional en cualquier Momento!</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Prenda c&oacute;moda que combina con todo, podr&aacute;s pon&eacute;rtela en cualquier momento y siempre lucir&aacute;s diferente. espalda y fatiga muscular. Adem&aacute;s...</span><br />\n<br />\n<strong><em>&iexcl;Con efecto Push Up!</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Aplana el abdomen</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levanta los gluteos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Tornea las piernas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reduce las caderas</span><br />\n<br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n.</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">S . M . L . XL&nbsp;</span><br />\n<br />\n<strong>PRECIO: S/. 160.00</strong></p>\n", "Leggings", "164", NULL, "2", "3", NULL, NULL, "39.6341", "99");
#
#
INSERT INTO `productos_items_descu` VALUES ("1997", "2018-05-10 22:35:08", "2018-05-10 22:36:10", NULL, "1", "Body Magic talla 46", "Ardyss", "<p>BODY<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;</span><strong>MAGIC</strong><br />\n<strong><em>&iexcl;Tan real que parece m&aacute;gico!&nbsp;</em></strong><br />\n<br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Si tu cuerpo esta perdiendo belleza y forma se debe a una mala postura acompa&ntilde;ada de un mal h&aacute;bito alimenticio que pueden da&ntilde;ar severamente desde tu columna hasta tu apariencia f&iacute;sica.</span><br />\n<br />\n<strong><em>Esta prenda promueve la compresi&oacute;n sobre puntos claves de tu cuerpo. Esta propiedad te ayuda a:</em></strong><br />\n<br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reacomodar los tejidos fl&aacute;cidos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levantar y mantener el vientre en posici&oacute;n</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Retraer los hombros y corregir la postura</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Enderezar la espalda</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Adelgazar las caderas</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Levantar y sostener los gl&uacute;teos</span><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Reducir la cintura de 2 a 3 tallas</span><br />\n<br />\n<strong><em>Dise&ntilde;ado en materiales de alta resistencia y calidad<br />\n<br />\nUso ideal:</em></strong><br />\n&bull;<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">&nbsp;Utilizalo diariamente o para ocasiones especiales</span><br />\n<br />\n<strong>TALLAS:</strong><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">24 - 42</span><br />\n<span style=\"color:rgb(0, 0, 0); font-family:arial,helvetica,sans-serif\">Tallas especiales solicitarlas a pedido</span><br />\n<br />\n<strong>PRECIO: S/. 350.00</strong></p>\n", "BOMA", "369", NULL, "2", "2", NULL, NULL, "24.1192", "280");
#
#
INSERT INTO `productos_items_descu` VALUES ("1851", "2018-05-05 09:35:41", "2018-05-10 21:33:52", NULL, "1", "CHALECO VEDETTE", "Ardyss", "<p>CHALECO<br />\n<strong>VEDETTE</strong><br />\n<strong><em>&iexcl;Delinea tu cuerpo!</em></strong><br />\n<br />\nIdeal para mujeres con exceso de tejido graso en abdomen y espalda. Excelente para mujeres que tienen actividades en el hogar.<br />\n<br />\n<strong><em>Esta prenda nos puede ayudar a:</em></strong><br />\n<br />\n&bull;&nbsp;Quema el tejido graso por medio de la transpiraci&oacute;n<br />\n&bull;&nbsp;Reduce el &aacute;rea de espalda, torso, cintura y abdomen<br />\n&bull;&nbsp;Ayuda a perder esas pulgadas adicionales<br />\n&bull;&nbsp;Brinda soporte a la espalda<br />\n<br />\n<strong><em>Uso ideal:</em></strong><br />\n&bull;&nbsp;Dise&ntilde;ado para utlizarse en cualquier ocasi&oacute;n proporcionando libertad de movimiento.<br />\n&bull;&nbsp;Se recomienda utilizarlo por un m&aacute;ximo de 4 horas al d&iacute;a.<br />\n<br />\n<strong>TALLAS:</strong><br />\n30 - 44<br />\nTallas especiales solicitarlas a pedido</p>\n\n<p>Solo talla 42 en color beige</p>\n\n<p><strong>PRECIO: S/. 288.00</strong></p>\n", "CAV1", "290", NULL, "2", "1", NULL, "atc_1525530933.jpg", "30.5556", "200");
#
#
DROP TABLE IF EXISTS `productos_items_impor`;
#
#
CREATE TABLE `productos_items_impor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` char(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `descripcion` longtext,
  `codigo` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `tags` varchar(80) DEFAULT NULL,
  `moneda` varchar(80) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `viewed` varchar(80) DEFAULT NULL,
  `adjunto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=1997 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items_impor` VALUES ("1832", "2017-09-11 11:57:48", "2017-09-15 13:14:52", NULL, "1", "GUANTES DE ARQUERO ADULTO", "Walon", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1835", "2017-09-11 12:43:43", "2017-09-15 13:00:03", NULL, "1", "Cuerda de saltar 2", "Jiampeile", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1837", "2017-09-11 12:59:20", "2017-09-15 12:57:38", NULL, "1", "GUANTES PARA BOX", "Bum", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1838", "2017-09-11 13:00:50", "2017-09-15 12:56:58", NULL, "1", "GUANTE DE KARATE", "Bum", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1839", "2017-09-11 13:06:00", "2017-09-15 12:54:57", NULL, "1", "LENTES DE NATACIÓN DE NIÑO", "Speedo", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1842", "2017-09-11 13:10:25", "2017-09-15 12:43:15", NULL, "1", "LENTES NATACIÓN ADULTO", "Grilong", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1830", "2017-09-11 10:26:19", "2017-09-15 13:15:36", NULL, "1", "GUANTE DE ARQUERO NIÑO", "Walon", "<p>&nbsp;</p>\n\n<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
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
  `url` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_subgrupos` VALUES ("1", "2018-04-30 21:43:02", "2018-05-01 09:33:35", NULL, "1", "Línea para mujeres", "3", NULL, NULL, NULL, "linea-para-mujeres");
#
#
INSERT INTO `productos_subgrupos` VALUES ("2", "2018-04-30 21:43:11", "2018-05-01 09:33:45", NULL, "1", "Línea de Hombres", "3", NULL, NULL, NULL, "linea-de-hombres");
#
#
INSERT INTO `productos_subgrupos` VALUES ("3", "2018-04-30 21:46:06", "2018-05-01 09:33:53", NULL, "1", "Línea Nutricional", "3", NULL, NULL, NULL, "linea-nutricional");
#
#
INSERT INTO `productos_subgrupos` VALUES ("4", "2018-05-02 08:15:32", "0000-00-00 00:00:00", NULL, "1", "recomendacion 1", "2", NULL, NULL, NULL, "recomendacion-1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("5", "2018-05-02 08:15:43", "0000-00-00 00:00:00", NULL, "1", "recomendacion 2", "2", NULL, NULL, NULL, "recomendacion-2");
#
#
INSERT INTO `productos_subgrupos` VALUES ("6", "2018-05-02 08:15:57", "2018-05-14 23:06:05", NULL, "1", "recomendacion 3", "2", "1", NULL, NULL, "recomendacion-3");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
INSERT INTO `projects_groups` VALUES ("1", "2015-09-02 12:30:06", "0000-00-00 00:00:00", NULL, "1", NULL, "Productos", "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2015-08-30 19:28:03", "2018-02-12 11:24:19", NULL, "1", "administrador", "ardyss2018", NULL);
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
