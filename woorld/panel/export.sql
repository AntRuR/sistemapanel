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
INSERT INTO `banners_fotos` VALUES ("1", "2015-08-30 21:55:59", "0000-00-00 00:00:00", NULL, "1", "banner_main", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("22", "2017-09-26 19:04:26", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1506470663_1440x450.png", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("23", "2017-09-26 19:04:38", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1506470676_1440x450.png", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("24", "2017-09-26 19:04:49", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1506470687_1440x450.png", NULL, NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("25", "2017-09-26 19:05:01", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1506470698_1440x450.png", NULL, NULL, NULL, "1");
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
INSERT INTO `contacto` VALUES ("1", "2015-09-11 12:46:35", "0000-00-00 00:00:00", NULL, "1", "2015-09-11 12:46:35", NULL, "WALTER TAVARA", "998920047", NULL, "wtavara@prodiserv.com", NULL, NULL, NULL, "probando formulario", NULL, NULL, NULL, "16020295");
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
INSERT INTO `galleries_photos` VALUES ("2", "2016-02-11 17:11:53", "2017-05-30 09:43:21", NULL, "1", "clientes", NULL, "Clientes", "<p>Algunos de nuestros eventos</p>\n", "1");
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_videos` VALUES ("1", "2017-05-18 02:02:37", "0000-00-00 00:00:00", NULL, "1", NULL, "2017-05-18 02:02:29", "Videos", NULL, "1");
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
INSERT INTO `galleries_videos_videos` VALUES ("8", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "80", "1", "Keane - Somewhere Only We Know", "Oextk-If8HQ", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("5", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "99", "1", "Ian van Dahl - Secret Love", "cxien6Hnx1s", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("6", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "95", "1", "Lasgo - Something", "QWbAaTDlBls", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("7", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "86", "1", "Audien feat. Lady Antebellum - Something Better", "_sDbRhC7rm8", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("4", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "70", "1", "Milky- Just The Way You Are", "Hx6WuGfOV0Q", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "75", "1", "Garbage - Only Happy When It Rains", "GpBFOJ3R0M4", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("10", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "65", "1", "Huey Lewis & The News - Heart & Soul", "8TdaXhpjHws", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("11", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "61", "1", "Bryan Adams - Somebody", "VqhELBUdYqM", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("12", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "55", "1", "The Cars - Drive", "xuZA6qiJVfU", "1");
#
#
INSERT INTO `galleries_videos_videos` VALUES ("13", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "50", "1", "Cheap Trick - The Flame", "muhFxXce6nA", "1");
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
INSERT INTO `links` VALUES ("1", "2015-09-22 16:34:33", "2017-06-08 13:45:03", NULL, "1", "10", "MEF", "http://apps2.mef.gob.pe/consulta-vfp-webapp/consultaExpediente.jspx;jsessionid=0", "1", "links_1496947503_629x167.jpg");
#
#
INSERT INTO `links` VALUES ("2", "2015-09-22 16:34:12", "2017-06-08 13:44:39", NULL, "1", "9", "OSCE", "http://portal.osce.gob.pe/osce/", "1", "links_1496947479_404x171.png");
#
#
INSERT INTO `links` VALUES ("3", "2015-09-22 16:33:55", "2017-06-08 13:44:28", NULL, "1", "8", "SUNAT", "http://www.sunat.gob.pe", "1", "links_1496947468_312x76.gif");
#
#
INSERT INTO `links` VALUES ("4", "2015-09-22 18:32:36", "2017-06-08 13:44:13", NULL, "1", "7", "BCP", "https://www.viabcp.com", "1", "links_1496947453_282x116.png");
#
#
INSERT INTO `links` VALUES ("5", "2015-09-22 18:32:22", "2017-06-08 13:43:54", NULL, "1", "6", "EL COMERCIO", "http://elcomercio.pe", "1", "links_1496947435_580x126.png");
#
#
INSERT INTO `links` VALUES ("6", "2015-09-22 16:32:33", "2017-06-08 13:43:42", NULL, "1", "5", "GESTION", "http://gestion.pe", "1", "links_1496947422_300x100.jpg");
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
INSERT INTO `paginas` VALUES ("15", "2015-08-26 17:21:01", "2017-06-08 20:35:20", NULL, "1", "10", "Construcción", NULL, NULL, "1", "Instalación y mantenimiento de tuberías.\nMantenimiento de extractores y ductos de ventilación.\nAlbañilería (muros y techos).\nColocación de terrazos, mayólicas, y similares.\nPavimentación y similares.", "<p>Instalaci&oacute;n y mantenimiento de tuber&iacute;as.<br />\nMantenimiento de extractores y ductos de ventilaci&oacute;n.<br />\nAlba&ntilde;iler&iacute;a (muros y techos).<br />\nColocaci&oacute;n de terrazos, may&oacute;licas, y similares.<br />\nPavimentaci&oacute;n y similares.<br />\nMantenimiento y construcci&oacute;n y edificaciones.<br />\nMuros de contenci&oacute;n y/o similares.<br />\nLimpieza y pintado de edificaciones.</p>\n", "8");
#
#
INSERT INTO `paginas` VALUES ("16", "2015-08-26 17:22:04", "2017-06-08 20:31:24", NULL, "1", "9", "Consultoría", NULL, NULL, "1", "Diseño de estructuras.\nMetrados y presupuestos.\nElaboración de expedientes técnicos.\nServicio de trámites municipales.", "<p>Dise&ntilde;o de estructuras.<br />\nMetrados y presupuestos.<br />\nElaboraci&oacute;n de expedientes t&eacute;cnicos.<br />\nServicio de tr&aacute;mites municipales.</p>\n", "8");
#
#
INSERT INTO `paginas` VALUES ("17", "2015-08-26 17:23:18", "2017-06-08 20:32:48", NULL, "1", "8", "Venta de Materiales", NULL, NULL, "1", "Cemento tipo i y v.\nAcero corrugado.\nLadrillo.\nAgregados.\nPublicidad metálica y elementos de señalización vial.", "<p>Cemento tipo i y v.<br />\nAcero corrugado.<br />\nLadrillo.<br />\nAgregados.<br />\nPublicidad met&aacute;lica y elementos de se&ntilde;alizaci&oacute;n vial.</p>\n", "8");
#
#
INSERT INTO `paginas` VALUES ("18", "2015-08-26 17:24:05", "2017-06-08 22:58:22", NULL, "1", "7", "Inmuebles", NULL, NULL, "1", "Alquiler de Inmuebles\nVenta de Inmuebles\nValorización de Inmuebles", "<p><strong>Alquiler y Venta de Inmuebles</strong></p>\n\n<p>Para nosotros una casa, o un departamento, no son solamente un lugar para residir; sino tambi&eacute;n una expresi&oacute;n de la visi&oacute;n y el estilo de vida de quien la habita. Consorcio Esi entiende esto. Nosotros utilizamos nuestra experiencia para que cada propiedad coincida con el comprador adecuado.</p>\n\n<p>Consorcio Esi, tambi&eacute;n se enorgullece de ofrecerle una atenci&oacute;n personal, junto con un nivel de servicio el cual es necesario para tomar la decisi&oacute;n importante como la compra o la venta de una propiedad. Usted puede contar con un profesional a su lado que escuche sus consultas, que le haga las preguntas correctas, que le ofrezca respuestas honestas y que busque los mejores intereses para usted.</p>\n\n<p>En Consorcio Esi creemos firmemente en construir relaciones exitosas; con nosotros la discreci&oacute;n y el profesionalismo est&aacute;n asegurados.</p>\n\n<p><strong>&iquest;Cu&aacute;l es el valor de mi propiedad?</strong></p>\n\n<p>La venta de su propiedad es una decisi&oacute;n de mucha importancia. El valor que usted asigne a su inmueble a la hora de vender es importante. Si el valor publicado es mayor, esto ahuyentar&aacute; a los potenciales compradores que buscan inmuebles por la zona, perdiendo usted posibilidades de hacer negocios. De la misma forma, si el valor asignado a su inmueble es menor, es posible que usted lo venda en un plazo menor, pero tambi&eacute;n asumir&aacute; una p&eacute;rdida econ&oacute;mica que puede afectar a toda su familia.</p>\n\n<p>Nosotros podemos ayudarle por medio de una asesor&iacute;a comercial gratuita, la misma que incluye una VALORACION GRATUITA de su propiedad.</p>\n\n<p>&nbsp;</p>\n\n<p>Ll&aacute;menos ahora al&nbsp;797-1100 o escribanos a informes@consorcioesi.com y haremos una cita con usted.</p>\n", "8");
#
#
INSERT INTO `paginas` VALUES ("19", "2015-08-26 17:21:01", "2017-06-08 20:48:22", NULL, "1", "10", "Quienes Somos", NULL, NULL, "1", "Consorcio ESI es una empresa que brinda servicios de consultoría, construcción y mantenimiento de estructuras para cada tipo de negocio de acorde a sus necesidades.\nLa confianza de nuestros clientes es nuestro propósito a seguir mejorando nuestros servicios en el día a día.\n\nGarantizamos el cumplimiento de cada uno de nuestros objetivos y trabajos, comprometidos con ofrecer servicios de calidad.", "<p>Consorcio ESI es una empresa que brinda servicios de consultor&iacute;a, construcci&oacute;n y mantenimiento de estructuras para cada tipo de negocio de acorde a sus necesidades.<br />\nLa confianza de nuestros clientes es nuestro prop&oacute;sito a seguir mejorando nuestros servicios en el d&iacute;a a d&iacute;a.</p>\n\n<p>Garantizamos el cumplimiento de cada uno de nuestros objetivos y trabajos, comprometidos con ofrecer servicios de calidad.</p>\n", "9");
#
#
INSERT INTO `paginas` VALUES ("20", "2015-08-26 17:22:04", "2017-06-08 20:51:22", NULL, "1", "9", "Misión y Visión", NULL, NULL, "1", "MISION\n\nBrindar a nuestros clientes soluciones integrales de ingeniería tomando como premisa la innovación y creatividad, buscando la eficiencia a través de la optimización de los recursos, siguiendo los parámetros de calidad para el control de los diversos procesos que busquen la confianza y satisfacción de los clientes.\n\nConsecuentemente convertirse en una compañía moderna y de vanguardia en los servicios de consultoría, diseños, construcción, manteniendo de innovación en el campo de la ingeniería.\n\nVISION\n\nUbicarse como una compañía de vanguardia en el sector público y privado logrando soluciones para los proyectos, en base a una eficiente distribución de los recursos y estándares de calidad.\n", "<p>MISION</p>\n\n<p>Brindar a nuestros clientes soluciones integrales de ingenier&iacute;a tomando como premisa la innovaci&oacute;n y creatividad, buscando la eficiencia a trav&eacute;s de la optimizaci&oacute;n de los recursos, siguiendo los par&aacute;metros de calidad para el control de los diversos procesos que busquen la confianza y satisfacci&oacute;n de los clientes.</p>\n\n<p>Consecuentemente convertirse en una compa&ntilde;&iacute;a moderna y de vanguardia en los servicios de consultor&iacute;a, dise&ntilde;os, construcci&oacute;n, manteniendo de innovaci&oacute;n en el campo de la ingenier&iacute;a.</p>\n\n<p>VISION</p>\n\n<p>Ubicarse como una compa&ntilde;&iacute;a de vanguardia en el sector p&uacute;blico y privado logrando soluciones para los proyectos, en base a una eficiente distribuci&oacute;n de los recursos y est&aacute;ndares de calidad.</p>\n", "9");
#
#
INSERT INTO `paginas` VALUES ("21", "2015-08-26 17:23:18", "2017-06-08 22:49:51", NULL, "1", "6", "Nuestro Equipo", NULL, NULL, "1", "Somos un equipo de profesionales con amplia experiencia que comparte una misma filosofía, orientada a la creación del valor agregado en cada proceso.", "<p>Somos un equipo de profesionales con amplia experiencia que comparte una misma filosof&iacute;a, orientada a la creaci&oacute;n del valor agregado en cada proceso.</p>\n", "9");
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("8", "2015-08-26 10:34:37", "2016-03-05 13:02:26", NULL, "1", NULL, "servicios", "SERVICIOS", "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "empresa", "EMPRESA", "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("3", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "notas", "NOTAS DE INTERÉS", "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("10", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "nosotros", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("11", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "paginas-web", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("12", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "sistemas-web", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("13", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "servicio-tecnico", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("14", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "marketing-y-publicidad", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("15", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "consultoria-empresarial", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("16", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "planes-hosting", NULL, "1", NULL);
#
#
INSERT INTO `paginas_groups` VALUES ("17", "2017-06-11 21:51:25", "0000-00-00 00:00:00", NULL, "1", NULL, "dominio-y-hosting", NULL, "1", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=317 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_filtros` VALUES ("310", "2017-09-11 21:36:44", "2017-10-12 14:33:56", NULL, "1", "Autoclave", "202");
#
#
INSERT INTO `productos_filtros` VALUES ("309", "2017-09-11 21:36:36", "2017-10-12 14:34:06", NULL, "1", "Recta", "202");
#
#
INSERT INTO `productos_filtros` VALUES ("308", "2017-09-11 21:36:29", "2017-10-12 14:34:12", NULL, "1", "Coronita", "202");
#
#
INSERT INTO `productos_filtros` VALUES ("307", "2017-09-11 19:23:42", "2017-10-12 14:34:20", NULL, "1", "Ollas", "182");
#
#
INSERT INTO `productos_filtros` VALUES ("306", "2017-09-11 14:11:48", "2017-10-12 14:34:34", NULL, "1", "Autoclave", "182");
#
#
INSERT INTO `productos_filtros` VALUES ("305", "2017-09-11 13:51:50", "2017-10-12 14:34:40", NULL, "1", "Recta", "182");
#
#
INSERT INTO `productos_filtros` VALUES ("304", "2017-09-11 13:49:20", "2017-10-12 14:34:46", NULL, "1", "Coronita", "182");
#
#
INSERT INTO `productos_filtros` VALUES ("303", "2017-09-11 13:48:56", "2017-10-12 14:34:54", NULL, "1", "Ollas", "182");
#
#
INSERT INTO `productos_filtros` VALUES ("311", "2017-10-13 09:34:26", "0000-00-00 00:00:00", NULL, "1", "Línea 100", "186");
#
#
INSERT INTO `productos_filtros` VALUES ("312", "2017-10-13 09:34:33", "0000-00-00 00:00:00", NULL, "1", "Línea 200", "186");
#
#
INSERT INTO `productos_filtros` VALUES ("313", "2017-10-13 09:35:17", "0000-00-00 00:00:00", NULL, "1", "Línea AA", "176");
#
#
INSERT INTO `productos_filtros` VALUES ("314", "2017-10-13 09:35:21", "0000-00-00 00:00:00", NULL, "1", "Línea BB", "176");
#
#
INSERT INTO `productos_filtros` VALUES ("315", "2017-10-13 09:36:08", "0000-00-00 00:00:00", NULL, "1", "Línea ABC", "190");
#
#
INSERT INTO `productos_filtros` VALUES ("316", "2017-10-13 09:36:12", "0000-00-00 00:00:00", NULL, "1", "Línea 123", "190");
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
) ENGINE=MyISAM AUTO_INCREMENT=2565 DEFAULT CHARSET=utf8;
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
INSERT INTO `productos_fotos` VALUES ("2234", "2017-09-11 11:43:16", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148195_800x1279.jpg", "Guante1");
#
#
INSERT INTO `productos_fotos` VALUES ("2235", "2017-09-11 11:47:54", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505148473_800x1292.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2236", "2017-09-11 11:55:31", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148930_800x1450.jpg", "Guante 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2237", "2017-09-11 11:55:47", "0000-00-00 00:00:00", NULL, "1", "1831", "profot_1505148946_800x1405.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2238", "2017-09-11 11:58:18", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149096_800x1384.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2239", "2017-09-11 11:58:34", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149112_800x1541.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2240", "2017-09-11 12:29:22", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150961_800x1275.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2241", "2017-09-11 12:29:37", "0000-00-00 00:00:00", NULL, "1", "1833", "profot_1505150975_800x1281.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2242", "2017-09-11 12:42:00", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151719_800x513.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2243", "2017-09-11 12:42:23", "0000-00-00 00:00:00", NULL, "1", "1834", "profot_1505151741_800x1473.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2244", "2017-09-11 12:44:03", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151842_800x632.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2245", "2017-09-11 12:44:20", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151859_800x1363.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2246", "2017-09-11 12:55:08", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152507_800x1240.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2247", "2017-09-11 12:55:23", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152521_800x1293.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2248", "2017-09-11 12:59:44", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152782_800x1272.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2249", "2017-09-11 13:00:05", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152801_800x1233.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2250", "2017-09-11 13:01:13", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152871_800x1177.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2251", "2017-09-11 13:01:30", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152888_800x1144.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2252", "2017-09-11 13:06:35", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153194_800x314.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2253", "2017-09-11 13:06:47", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153206_800x189.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2254", "2017-09-11 13:08:09", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153289_800x300.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2255", "2017-09-11 13:08:21", "0000-00-00 00:00:00", NULL, "1", "1840", "profot_1505153301_800x317.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2256", "2017-09-11 13:09:21", "0000-00-00 00:00:00", NULL, "1", "1841", "profot_1505153361_800x338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2557", "2017-09-15 12:51:26", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497886_800x338.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2258", "2017-09-11 13:10:47", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153447_800x296.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2259", "2017-09-11 13:11:00", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153460_800x257.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2260", "2017-09-11 13:11:46", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153506_800x444.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2261", "2017-09-11 13:12:01", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153521_800x312.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2262", "2017-09-11 13:41:06", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155265_800x681.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2263", "2017-09-11 13:41:21", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155281_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2264", "2017-09-11 13:42:06", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155325_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2265", "2017-09-11 13:42:20", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155339_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2266", "2017-09-11 13:42:59", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155378_800x618.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2267", "2017-09-11 13:43:11", "0000-00-00 00:00:00", NULL, "1", "1846", "profot_1505155390_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2268", "2017-09-11 13:46:23", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155583_800x675.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2269", "2017-09-11 13:46:39", "0000-00-00 00:00:00", NULL, "1", "1847", "profot_1505155598_800x1044.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2271", "2017-09-11 13:54:49", "0000-00-00 00:00:00", NULL, "1", "1849", "profot_1505156087_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2272", "2017-09-11 13:56:00", "0000-00-00 00:00:00", NULL, "1", "1850", "profot_1505156158_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2273", "2017-09-11 13:57:07", "0000-00-00 00:00:00", NULL, "1", "1851", "profot_1505156226_800x958.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2274", "2017-09-11 14:00:11", "0000-00-00 00:00:00", NULL, "1", "1852", "profot_1505156408_800x999.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2276", "2017-09-11 14:03:12", "0000-00-00 00:00:00", NULL, "1", "1854", "profot_1505156591_800x929.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2277", "2017-09-11 14:04:05", "0000-00-00 00:00:00", NULL, "1", "1855", "profot_1505156643_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2278", "2017-09-11 14:04:47", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505156685_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2279", "2017-09-11 14:05:43", "0000-00-00 00:00:00", NULL, "1", "1857", "profot_1505156741_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2280", "2017-09-11 14:07:40", "0000-00-00 00:00:00", NULL, "1", "1859", "profot_1505156858_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2281", "2017-09-11 14:07:58", "0000-00-00 00:00:00", NULL, "1", "1858", "profot_1505156877_800x966.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2282", "2017-09-11 14:08:52", "0000-00-00 00:00:00", NULL, "1", "1860", "profot_1505156931_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2283", "2017-09-11 14:09:43", "0000-00-00 00:00:00", NULL, "1", "1861", "profot_1505156981_800x1004.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2284", "2017-09-11 14:12:47", "0000-00-00 00:00:00", NULL, "1", "1862", "profot_1505157167_800x606.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2285", "2017-09-11 14:13:38", "0000-00-00 00:00:00", NULL, "1", "1863", "profot_1505157217_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2286", "2017-09-11 14:14:33", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505157272_800x1003.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2287", "2017-09-11 14:15:27", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505157326_800x982.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2288", "2017-09-11 14:16:47", "0000-00-00 00:00:00", NULL, "1", "1866", "profot_1505157406_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2289", "2017-09-11 14:17:47", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505157466_800x950.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2290", "2017-09-11 14:18:39", "0000-00-00 00:00:00", NULL, "1", "1868", "profot_1505157518_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2291", "2017-09-11 14:22:11", "0000-00-00 00:00:00", NULL, "1", "1869", "profot_1505157730_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2292", "2017-09-11 14:23:03", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505157781_800x927.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2293", "2017-09-11 14:33:24", "0000-00-00 00:00:00", NULL, "1", "1871", "profot_1505158402_800x1319.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2294", "2017-09-11 14:34:37", "0000-00-00 00:00:00", NULL, "1", "1872", "profot_1505158475_800x1044.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2295", "2017-09-11 14:42:20", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505158939_800x954.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2298", "2017-09-11 19:11:54", "0000-00-00 00:00:00", NULL, "1", "1874", "profot_1505175113_800x1070.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2297", "2017-09-11 14:43:36", "0000-00-00 00:00:00", NULL, "1", "1873", "profot_1505159015_800x995.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2299", "2017-09-11 19:21:07", "0000-00-00 00:00:00", NULL, "1", "1875", "profot_1505175666_800x1205.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2300", "2017-09-11 19:22:44", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175763_800x883.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2301", "2017-09-11 19:23:02", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175781_800x841.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2302", "2017-09-11 19:23:19", "0000-00-00 00:00:00", NULL, "1", "1876", "profot_1505175798_800x918.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2303", "2017-09-11 19:24:51", "0000-00-00 00:00:00", NULL, "1", "1877", "profot_1505175890_800x1713.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2304", "2017-09-11 19:39:25", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176764_800x1042.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2305", "2017-09-11 19:39:37", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176776_800x935.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2306", "2017-09-11 19:39:49", "0000-00-00 00:00:00", NULL, "1", "1878", "profot_1505176788_800x1330.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2307", "2017-09-11 19:41:19", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176877_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2308", "2017-09-11 19:41:33", "0000-00-00 00:00:00", NULL, "1", "1879", "profot_1505176892_800x1018.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2309", "2017-09-11 19:42:43", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176962_800x908.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2310", "2017-09-11 19:42:55", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505176974_800x1032.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2311", "2017-09-11 19:43:31", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505177009_800x1423.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2312", "2017-09-11 19:44:53", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177092_800x1094.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2313", "2017-09-11 19:45:08", "0000-00-00 00:00:00", NULL, "1", "1881", "profot_1505177106_800x1087.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2314", "2017-09-11 19:46:08", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177167_800x1080.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2315", "2017-09-11 19:46:21", "0000-00-00 00:00:00", NULL, "1", "1882", "profot_1505177180_800x1146.jpg", "vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2316", "2017-09-11 19:47:01", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177220_800x1074.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2317", "2017-09-11 19:47:14", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505177233_800x1170.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2318", "2017-09-11 19:48:44", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177324_800x350.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2319", "2017-09-11 19:48:54", "0000-00-00 00:00:00", NULL, "1", "1884", "profot_1505177333_800x311.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2321", "2017-09-11 19:50:08", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177407_800x588.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2322", "2017-09-11 19:50:21", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177420_800x676.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2323", "2017-09-11 19:50:36", "0000-00-00 00:00:00", NULL, "1", "1885", "profot_1505177435_800x370.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2324", "2017-09-11 19:55:13", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177712_800x376.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2325", "2017-09-11 19:55:26", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177725_800x376.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2326", "2017-09-11 19:55:38", "0000-00-00 00:00:00", NULL, "1", "1886", "profot_1505177738_800x368.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2327", "2017-09-11 20:03:35", "0000-00-00 00:00:00", NULL, "1", "1887", "profot_1505178213_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2328", "2017-09-11 20:05:03", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178302_800x1397.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2329", "2017-09-11 20:05:18", "0000-00-00 00:00:00", NULL, "1", "1888", "profot_1505178317_800x1499.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2330", "2017-09-11 20:07:26", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178445_800x941.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2331", "2017-09-11 20:07:40", "0000-00-00 00:00:00", NULL, "1", "1889", "profot_1505178459_800x975.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2332", "2017-09-11 20:12:02", "0000-00-00 00:00:00", NULL, "1", "1890", "profot_1505178721_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2334", "2017-09-11 20:14:04", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505178843_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2335", "2017-09-11 20:27:40", "0000-00-00 00:00:00", NULL, "1", "1892", "profot_1505179660_800x393.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2336", "2017-09-11 20:31:18", "0000-00-00 00:00:00", NULL, "1", "1893", "profot_1505179878_800x268.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2337", "2017-09-11 20:32:26", "0000-00-00 00:00:00", NULL, "1", "1894", "profot_1505179946_800x386.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2338", "2017-09-11 20:33:23", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505180003_800x332.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2339", "2017-09-11 20:34:15", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180054_800x286.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2340", "2017-09-11 20:34:32", "0000-00-00 00:00:00", NULL, "1", "1896", "profot_1505180072_800x297.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2540", "2017-09-15 11:34:59", "0000-00-00 00:00:00", NULL, "1", "1895", "profot_1505493298_800x386.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2342", "2017-09-11 20:42:43", "0000-00-00 00:00:00", NULL, "1", "1897", "profot_1505180561_800x1516.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2343", "2017-09-11 20:45:29", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505180728_800x1533.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2344", "2017-09-11 20:46:14", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180774_800x422.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2345", "2017-09-11 20:46:24", "0000-00-00 00:00:00", NULL, "1", "1899", "profot_1505180784_800x414.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2346", "2017-09-11 20:48:47", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180926_800x746.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2347", "2017-09-11 20:49:00", "0000-00-00 00:00:00", NULL, "1", "1900", "profot_1505180939_800x455.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2348", "2017-09-11 20:52:17", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181137_800x487.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2349", "2017-09-11 20:52:32", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181152_800x688.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2350", "2017-09-11 20:52:46", "0000-00-00 00:00:00", NULL, "1", "1901", "profot_1505181165_800x469.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2351", "2017-09-11 20:53:31", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181210_800x522.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2352", "2017-09-11 20:53:43", "0000-00-00 00:00:00", NULL, "1", "1902", "profot_1505181223_800x545.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2353", "2017-09-11 20:54:30", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181269_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2354", "2017-09-11 20:55:09", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181308_800x550.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2355", "2017-09-11 20:55:27", "0000-00-00 00:00:00", NULL, "1", "1903", "profot_1505181326_800x504.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2356", "2017-09-11 20:57:05", "0000-00-00 00:00:00", NULL, "1", "1904", "profot_1505181423_726x3180.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2357", "2017-09-11 20:57:48", "0000-00-00 00:00:00", NULL, "1", "1905", "profot_1505181466_800x2251.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2358", "2017-09-11 21:00:16", "0000-00-00 00:00:00", NULL, "1", "1906", "profot_1505181615_800x1382.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2359", "2017-09-11 21:03:03", "0000-00-00 00:00:00", NULL, "1", "1907", "profot_1505181781_800x1509.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2360", "2017-09-11 21:03:52", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181831_800x732.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2361", "2017-09-11 21:04:25", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181865_800x748.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2362", "2017-09-11 21:04:47", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181886_800x722.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2363", "2017-09-11 21:05:00", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181899_800x725.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos` VALUES ("2364", "2017-09-11 21:05:13", "0000-00-00 00:00:00", NULL, "1", "1908", "profot_1505181912_800x727.jpg", "Vista 5");
#
#
INSERT INTO `productos_fotos` VALUES ("2365", "2017-09-11 21:12:29", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182349_800x479.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2366", "2017-09-11 21:12:48", "0000-00-00 00:00:00", NULL, "1", "1909", "profot_1505182368_800x194.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2367", "2017-09-11 21:13:30", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182409_800x800.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2368", "2017-09-11 21:13:42", "0000-00-00 00:00:00", NULL, "1", "1910", "profot_1505182422_800x652.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2369", "2017-09-11 21:15:29", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182528_800x739.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2370", "2017-09-11 21:15:44", "0000-00-00 00:00:00", NULL, "1", "1911", "profot_1505182543_800x1341.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2371", "2017-09-11 21:16:40", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182599_800x1053.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2372", "2017-09-11 21:16:57", "0000-00-00 00:00:00", NULL, "1", "1912", "profot_1505182616_800x1042.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2373", "2017-09-11 21:18:30", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182709_800x870.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2374", "2017-09-11 21:18:57", "0000-00-00 00:00:00", NULL, "1", "1913", "profot_1505182736_800x1173.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2539", "2017-09-13 14:00:31", "0000-00-00 00:00:00", NULL, "1", "1898", "profot_1505329230_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2376", "2017-09-11 21:20:52", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182851_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2377", "2017-09-11 21:21:05", "0000-00-00 00:00:00", NULL, "1", "1914", "profot_1505182864_800x485.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2378", "2017-09-11 21:28:10", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183289_800x613.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2379", "2017-09-11 21:28:21", "0000-00-00 00:00:00", NULL, "1", "1915", "profot_1505183301_800x591.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2380", "2017-09-11 21:29:29", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183368_800x711.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2381", "2017-09-11 21:29:43", "0000-00-00 00:00:00", NULL, "1", "1916", "profot_1505183382_800x700.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2382", "2017-09-11 21:31:40", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183499_800x944.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2383", "2017-09-11 21:32:14", "0000-00-00 00:00:00", NULL, "1", "1917", "profot_1505183532_800x1358.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2384", "2017-09-11 21:33:58", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183637_800x780.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2385", "2017-09-11 21:34:15", "0000-00-00 00:00:00", NULL, "1", "1918", "profot_1505183653_800x807.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2386", "2017-09-11 21:37:51", "0000-00-00 00:00:00", NULL, "1", "1919", "profot_1505183870_800x865.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2387", "2017-09-11 21:39:05", "0000-00-00 00:00:00", NULL, "1", "1920", "profot_1505183943_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2388", "2017-09-11 21:39:54", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505183992_800x976.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2389", "2017-09-11 21:40:52", "0000-00-00 00:00:00", NULL, "1", "1922", "profot_1505184051_800x945.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2390", "2017-09-11 21:41:58", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184117_800x960.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2391", "2017-09-11 21:42:29", "0000-00-00 00:00:00", NULL, "1", "1923", "profot_1505184148_800x974.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2392", "2017-09-11 21:43:21", "0000-00-00 00:00:00", NULL, "1", "1924", "profot_1505184200_800x951.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2393", "2017-09-11 21:44:12", "0000-00-00 00:00:00", NULL, "1", "1925", "profot_1505184251_800x963.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2394", "2017-09-11 21:44:52", "0000-00-00 00:00:00", NULL, "1", "1926", "profot_1505184291_800x946.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2395", "2017-09-11 21:45:55", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184354_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2396", "2017-09-11 21:48:15", "0000-00-00 00:00:00", NULL, "1", "1928", "profot_1505184494_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2397", "2017-09-11 21:51:42", "0000-00-00 00:00:00", NULL, "1", "1927", "profot_1505184700_800x956.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2398", "2017-09-11 21:52:51", "0000-00-00 00:00:00", NULL, "1", "1930", "profot_1505184769_800x949.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2399", "2017-09-11 21:54:07", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184845_800x1390.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2400", "2017-09-11 21:54:29", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184868_800x1453.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2401", "2017-09-11 21:54:56", "0000-00-00 00:00:00", NULL, "1", "1931", "profot_1505184894_800x1406.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2402", "2017-09-11 21:56:01", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184959_800x1161.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2403", "2017-09-11 21:56:18", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184977_800x1172.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2404", "2017-09-11 21:56:36", "0000-00-00 00:00:00", NULL, "1", "1932", "profot_1505184994_800x1318.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2405", "2017-09-11 21:57:49", "0000-00-00 00:00:00", NULL, "1", "1933", "profot_1505185068_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2406", "2017-09-11 21:58:36", "0000-00-00 00:00:00", NULL, "1", "1934", "profot_1505185115_800x953.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2407", "2017-09-11 21:59:23", "0000-00-00 00:00:00", NULL, "1", "1935", "profot_1505185162_800x942.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2408", "2017-09-11 22:00:33", "0000-00-00 00:00:00", NULL, "1", "1936", "profot_1505185230_800x961.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2409", "2017-09-11 22:01:22", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505185281_800x935.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2410", "2017-09-11 22:02:20", "0000-00-00 00:00:00", NULL, "1", "1938", "profot_1505185339_800x1085.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2411", "2017-09-11 22:05:25", "0000-00-00 00:00:00", NULL, "1", "1939", "profot_1505185525_800x311.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2412", "2017-09-11 22:06:51", "0000-00-00 00:00:00", NULL, "1", "1940", "profot_1505185610_800x1415.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2413", "2017-09-11 22:07:57", "0000-00-00 00:00:00", NULL, "1", "1941", "profot_1505185674_800x1985.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2414", "2017-09-11 22:08:54", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185734_800x783.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2415", "2017-09-11 22:09:07", "0000-00-00 00:00:00", NULL, "1", "1942", "profot_1505185746_800x754.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2416", "2017-09-11 22:10:41", "0000-00-00 00:00:00", NULL, "1", "1943", "profot_1505185840_800x1150.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2417", "2017-09-11 22:49:04", "0000-00-00 00:00:00", NULL, "1", "1944", "profot_1505188142_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2418", "2017-09-11 22:49:58", "0000-00-00 00:00:00", NULL, "1", "1945", "profot_1505188197_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2419", "2017-09-11 22:51:24", "0000-00-00 00:00:00", NULL, "1", "1946", "profot_1505188282_800x1404.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2420", "2017-09-11 22:52:16", "0000-00-00 00:00:00", NULL, "1", "1947", "profot_1505188335_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2421", "2017-09-11 22:53:05", "0000-00-00 00:00:00", NULL, "1", "1948", "profot_1505188383_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2422", "2017-09-11 22:53:54", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505188433_800x1375.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2423", "2017-09-11 23:00:55", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188854_800x1571.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2424", "2017-09-11 23:01:08", "0000-00-00 00:00:00", NULL, "1", "1950", "profot_1505188867_800x1318.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2425", "2017-09-11 23:01:54", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188912_800x1140.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2426", "2017-09-11 23:02:04", "0000-00-00 00:00:00", NULL, "1", "1951", "profot_1505188923_800x1116.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2427", "2017-09-11 23:02:49", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188967_800x1058.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2428", "2017-09-11 23:03:02", "0000-00-00 00:00:00", NULL, "1", "1952", "profot_1505188981_800x1056.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2429", "2017-09-11 23:04:24", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189063_800x1101.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2430", "2017-09-11 23:04:36", "0000-00-00 00:00:00", NULL, "1", "1953", "profot_1505189075_800x1143.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2533", "2017-09-13 13:00:04", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325601_800x1445.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2432", "2017-09-11 23:06:26", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189185_800x796.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2433", "2017-09-11 23:06:38", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189196_800x802.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2434", "2017-09-11 23:06:49", "0000-00-00 00:00:00", NULL, "1", "1954", "profot_1505189208_800x614.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2435", "2017-09-11 23:07:44", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189264_800x773.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2436", "2017-09-11 23:07:54", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189274_800x721.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2437", "2017-09-11 23:08:05", "0000-00-00 00:00:00", NULL, "1", "1955", "profot_1505189285_800x594.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2438", "2017-09-11 23:10:22", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189421_800x668.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2439", "2017-09-11 23:10:35", "0000-00-00 00:00:00", NULL, "1", "1956", "profot_1505189434_800x827.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2440", "2017-09-11 23:11:27", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189486_800x827.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2441", "2017-09-11 23:11:40", "0000-00-00 00:00:00", NULL, "1", "1957", "profot_1505189499_800x937.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2442", "2017-09-11 23:12:58", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189577_800x809.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2443", "2017-09-11 23:13:17", "0000-00-00 00:00:00", NULL, "1", "1958", "profot_1505189597_800x474.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2444", "2017-09-11 23:14:41", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189680_800x768.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2445", "2017-09-11 23:15:05", "0000-00-00 00:00:00", NULL, "1", "1959", "profot_1505189704_800x641.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2446", "2017-09-11 23:17:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189843_800x1262.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2447", "2017-09-11 23:17:41", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505189860_800x1225.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2448", "2017-09-11 23:19:32", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189970_800x1201.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2449", "2017-09-11 23:19:46", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189985_800x1237.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2450", "2017-09-11 23:19:58", "0000-00-00 00:00:00", NULL, "1", "1961", "profot_1505189997_800x1124.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2451", "2017-09-11 23:20:25", "0000-00-00 00:00:00", NULL, "1", "1960", "profot_1505190023_800x1463.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2452", "2017-09-11 23:22:00", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190119_800x1673.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2453", "2017-09-11 23:22:15", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190133_800x1511.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2454", "2017-09-11 23:22:27", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190145_800x1348.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2455", "2017-09-11 23:22:41", "0000-00-00 00:00:00", NULL, "1", "1962", "profot_1505190159_800x1256.jpg", "Vista 4");
#
#
INSERT INTO `productos_fotos` VALUES ("2456", "2017-09-11 23:41:12", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191271_800x693.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2457", "2017-09-11 23:41:23", "0000-00-00 00:00:00", NULL, "1", "1963", "profot_1505191282_800x636.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2458", "2017-09-11 23:48:32", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191711_800x977.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2459", "2017-09-11 23:48:49", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191728_800x1025.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2460", "2017-09-11 23:49:04", "0000-00-00 00:00:00", NULL, "1", "1964", "profot_1505191743_800x1378.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2461", "2017-09-11 23:50:35", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191833_800x1395.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2462", "2017-09-11 23:50:51", "0000-00-00 00:00:00", NULL, "1", "1965", "profot_1505191848_800x1380.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2463", "2017-09-11 23:53:47", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192025_800x1610.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2464", "2017-09-11 23:54:08", "0000-00-00 00:00:00", NULL, "1", "1966", "profot_1505192047_800x1410.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2465", "2017-09-11 23:55:36", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192134_800x1321.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2466", "2017-09-11 23:55:52", "0000-00-00 00:00:00", NULL, "1", "1967", "profot_1505192151_800x1487.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2467", "2017-09-11 23:57:01", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192220_800x1149.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2468", "2017-09-11 23:57:16", "0000-00-00 00:00:00", NULL, "1", "1968", "profot_1505192235_800x1469.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2469", "2017-09-11 23:58:25", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192304_800x854.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2470", "2017-09-11 23:58:36", "0000-00-00 00:00:00", NULL, "1", "1969", "profot_1505192315_800x1352.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2471", "2017-09-11 23:59:46", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192386_800x799.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2472", "2017-09-12 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1970", "profot_1505192399_800x1353.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2473", "2017-09-12 00:01:40", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192499_800x654.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2474", "2017-09-12 00:01:53", "0000-00-00 00:00:00", NULL, "1", "1971", "profot_1505192511_800x1420.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2475", "2017-09-12 00:02:50", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192569_800x835.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2476", "2017-09-12 00:03:03", "0000-00-00 00:00:00", NULL, "1", "1972", "profot_1505192582_800x1426.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2477", "2017-09-12 00:04:04", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192643_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2478", "2017-09-12 00:04:15", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192655_800x701.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2479", "2017-09-12 00:04:40", "0000-00-00 00:00:00", NULL, "1", "1973", "profot_1505192679_800x1091.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2480", "2017-09-12 00:05:47", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192746_800x1342.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2481", "2017-09-12 00:06:01", "0000-00-00 00:00:00", NULL, "1", "1974", "profot_1505192760_800x1389.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2482", "2017-09-12 00:07:38", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192857_800x480.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2483", "2017-09-12 00:07:53", "0000-00-00 00:00:00", NULL, "1", "1975", "profot_1505192872_800x1501.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2484", "2017-09-12 00:08:50", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192929_800x1226.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2485", "2017-09-12 00:09:03", "0000-00-00 00:00:00", NULL, "1", "1976", "profot_1505192942_800x2071.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2486", "2017-09-12 00:09:58", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505192998_800x609.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2487", "2017-09-12 00:10:10", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193009_800x606.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2488", "2017-09-12 00:10:28", "0000-00-00 00:00:00", NULL, "1", "1977", "profot_1505193026_800x2118.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2489", "2017-09-12 00:13:48", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193226_800x1103.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2490", "2017-09-12 00:14:02", "0000-00-00 00:00:00", NULL, "1", "1978", "profot_1505193240_800x1980.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2491", "2017-09-12 00:15:01", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193300_800x1192.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2492", "2017-09-12 00:15:16", "0000-00-00 00:00:00", NULL, "1", "1979", "profot_1505193314_800x1855.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2493", "2017-09-12 00:16:32", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193389_800x1445.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2494", "2017-09-12 00:16:46", "0000-00-00 00:00:00", NULL, "1", "1980", "profot_1505193404_800x1785.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2495", "2017-09-12 00:17:35", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193454_800x1211.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2496", "2017-09-12 00:17:50", "0000-00-00 00:00:00", NULL, "1", "1981", "profot_1505193468_800x1388.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2497", "2017-09-12 00:19:31", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193570_800x1341.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2498", "2017-09-12 00:19:47", "0000-00-00 00:00:00", NULL, "1", "1982", "profot_1505193585_800x1447.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2499", "2017-09-12 00:20:42", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193642_800x553.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2500", "2017-09-12 00:20:58", "0000-00-00 00:00:00", NULL, "1", "1983", "profot_1505193657_800x1246.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2501", "2017-09-12 00:27:42", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194062_800x510.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2502", "2017-09-12 00:28:01", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194080_800x533.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2503", "2017-09-12 00:28:17", "0000-00-00 00:00:00", NULL, "1", "1984", "profot_1505194096_800x1363.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2504", "2017-09-12 00:29:25", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194164_800x1079.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2505", "2017-09-12 00:29:40", "0000-00-00 00:00:00", NULL, "1", "1985", "profot_1505194177_800x1038.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2506", "2017-09-12 00:30:41", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194239_800x1223.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2507", "2017-09-12 00:31:00", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194258_800x1272.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2508", "2017-09-12 00:31:30", "0000-00-00 00:00:00", NULL, "1", "1986", "profot_1505194289_800x1036.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2509", "2017-09-12 00:32:38", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194357_800x1138.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2510", "2017-09-12 00:32:50", "0000-00-00 00:00:00", NULL, "1", "1987", "profot_1505194369_800x1457.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2511", "2017-09-12 00:34:07", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194445_800x1011.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2512", "2017-09-12 00:34:19", "0000-00-00 00:00:00", NULL, "1", "1988", "profot_1505194458_800x1076.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2513", "2017-09-12 00:35:17", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194516_800x1291.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2514", "2017-09-12 00:35:33", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194532_800x1400.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2515", "2017-09-12 00:35:45", "0000-00-00 00:00:00", NULL, "1", "1989", "profot_1505194543_800x1445.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2516", "2017-09-12 00:36:58", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194617_800x950.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2517", "2017-09-12 00:37:09", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194628_800x645.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2518", "2017-09-12 00:37:27", "0000-00-00 00:00:00", NULL, "1", "1990", "profot_1505194646_800x1464.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2519", "2017-09-12 00:38:40", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194720_800x349.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2520", "2017-09-12 00:38:55", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194734_800x351.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2521", "2017-09-12 00:39:08", "0000-00-00 00:00:00", NULL, "1", "1991", "profot_1505194747_800x1473.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2522", "2017-09-12 00:39:57", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194796_800x1338.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2523", "2017-09-12 00:40:10", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194809_800x1434.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2524", "2017-09-12 00:40:23", "0000-00-00 00:00:00", NULL, "1", "1992", "profot_1505194822_800x1069.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2525", "2017-09-12 00:41:22", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194881_800x1143.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2526", "2017-09-12 00:41:36", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194895_800x1166.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2527", "2017-09-12 00:41:48", "0000-00-00 00:00:00", NULL, "1", "1993", "profot_1505194906_800x1850.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2528", "2017-09-12 00:44:14", "0000-00-00 00:00:00", NULL, "1", "1994", "profot_1505195053_800x1119.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2529", "2017-09-12 00:46:53", "0000-00-00 00:00:00", NULL, "1", "1995", "profot_1505195212_800x800.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2530", "2017-09-12 00:48:17", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195297_800x703.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos` VALUES ("2531", "2017-09-12 00:48:28", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195307_800x1013.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos` VALUES ("2532", "2017-09-12 00:48:40", "0000-00-00 00:00:00", NULL, "1", "1996", "profot_1505195319_800x993.jpg", "Vista 3");
#
#
INSERT INTO `productos_fotos` VALUES ("2534", "2017-09-13 13:00:26", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325624_800x1516.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2535", "2017-09-13 13:00:49", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325648_800x1356.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2536", "2017-09-13 13:01:18", "0000-00-00 00:00:00", NULL, "1", "1949", "profot_1505325677_800x1381.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2537", "2017-09-13 13:14:58", "0000-00-00 00:00:00", NULL, "1", "1937", "profot_1505326496_800x928.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2538", "2017-09-13 13:32:29", "0000-00-00 00:00:00", NULL, "1", "1921", "profot_1505327548_800x965.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2541", "2017-09-15 11:39:16", "0000-00-00 00:00:00", NULL, "1", "1891", "profot_1505493554_800x960.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2542", "2017-09-15 11:51:58", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494316_800x1080.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2543", "2017-09-15 11:52:19", "0000-00-00 00:00:00", NULL, "1", "1883", "profot_1505494337_800x1146.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2544", "2017-09-15 11:56:32", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494591_800x1074.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2545", "2017-09-15 11:56:50", "0000-00-00 00:00:00", NULL, "1", "1880", "profot_1505494609_800x1042.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2546", "2017-09-15 12:08:50", "0000-00-00 00:00:00", NULL, "1", "1870", "profot_1505495329_800x925.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2547", "2017-09-15 12:12:02", "0000-00-00 00:00:00", NULL, "1", "1867", "profot_1505495520_800x920.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2548", "2017-09-15 12:15:38", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495737_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2549", "2017-09-15 12:18:39", "0000-00-00 00:00:00", NULL, "1", "1865", "profot_1505495918_800x959.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2550", "2017-09-15 12:21:20", "0000-00-00 00:00:00", NULL, "1", "1864", "profot_1505496078_800x1010.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2551", "2017-09-15 12:24:57", "0000-00-00 00:00:00", NULL, "1", "1856", "profot_1505496296_800x947.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2554", "2017-09-15 12:36:43", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497003_800x681.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2556", "2017-09-15 12:37:27", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497046_800x618.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2558", "2017-09-15 12:51:37", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497897_800x273.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2559", "2017-09-15 13:16:27", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499385_800x1473.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2560", "2017-09-15 13:16:48", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499407_800x513.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2561", "2017-09-15 13:18:13", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499491_800x1450.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2562", "2017-09-15 13:21:05", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499664_800x1405.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2563", "2017-09-15 13:21:45", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499704_800x1240.jpg", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("2564", "2017-09-15 13:22:15", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499734_800x1275.jpg", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=2565 DEFAULT CHARSET=utf8;
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
INSERT INTO `productos_fotos_descu` VALUES ("2238", "2017-09-11 11:58:18", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149096_800x1384.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2239", "2017-09-11 11:58:34", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505149112_800x1541.jpg", "Vista 2");
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
INSERT INTO `productos_fotos_descu` VALUES ("2244", "2017-09-11 12:44:03", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151842_800x632.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2245", "2017-09-11 12:44:20", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505151859_800x1363.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2246", "2017-09-11 12:55:08", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152507_800x1240.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2247", "2017-09-11 12:55:23", "0000-00-00 00:00:00", NULL, "1", "1836", "profot_1505152521_800x1293.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2248", "2017-09-11 12:59:44", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152782_800x1272.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2249", "2017-09-11 13:00:05", "0000-00-00 00:00:00", NULL, "1", "1837", "profot_1505152801_800x1233.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2250", "2017-09-11 13:01:13", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152871_800x1177.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2251", "2017-09-11 13:01:30", "0000-00-00 00:00:00", NULL, "1", "1838", "profot_1505152888_800x1144.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2252", "2017-09-11 13:06:35", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153194_800x314.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2253", "2017-09-11 13:06:47", "0000-00-00 00:00:00", NULL, "1", "1839", "profot_1505153206_800x189.jpg", "Vista 2");
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
INSERT INTO `productos_fotos_descu` VALUES ("2557", "2017-09-15 12:51:26", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497886_800x338.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2258", "2017-09-11 13:10:47", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153447_800x296.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2259", "2017-09-11 13:11:00", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505153460_800x257.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2260", "2017-09-11 13:11:46", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153506_800x444.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2261", "2017-09-11 13:12:01", "0000-00-00 00:00:00", NULL, "1", "1843", "profot_1505153521_800x312.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2262", "2017-09-11 13:41:06", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155265_800x681.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2263", "2017-09-11 13:41:21", "0000-00-00 00:00:00", NULL, "1", "1844", "profot_1505155281_800x601.jpg", "Vista 2");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2264", "2017-09-11 13:42:06", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155325_800x601.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2265", "2017-09-11 13:42:20", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505155339_800x601.jpg", "Vista 2");
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
INSERT INTO `productos_fotos_descu` VALUES ("2270", "2017-09-11 13:53:19", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505155998_800x973.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2271", "2017-09-11 13:54:49", "0000-00-00 00:00:00", NULL, "1", "1849", "profot_1505156087_800x846.jpg", "Vista 1");
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2272", "2017-09-11 13:56:00", "0000-00-00 00:00:00", NULL, "1", "1850", "profot_1505156158_800x948.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2273", "2017-09-11 13:57:07", "0000-00-00 00:00:00", NULL, "1", "1851", "profot_1505156226_800x958.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2274", "2017-09-11 14:00:11", "0000-00-00 00:00:00", NULL, "1", "1852", "profot_1505156408_800x999.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2552", "2017-09-15 12:33:09", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505496787_800x948.jpg", NULL);
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
INSERT INTO `productos_fotos_descu` VALUES ("2553", "2017-09-15 12:33:41", "0000-00-00 00:00:00", NULL, "1", "1848", "profot_1505496820_800x952.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2554", "2017-09-15 12:36:43", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497003_800x681.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2556", "2017-09-15 12:37:27", "0000-00-00 00:00:00", NULL, "1", "1845", "profot_1505497046_800x618.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2558", "2017-09-15 12:51:37", "0000-00-00 00:00:00", NULL, "1", "1842", "profot_1505497897_800x273.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2559", "2017-09-15 13:16:27", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499385_800x1473.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2560", "2017-09-15 13:16:48", "0000-00-00 00:00:00", NULL, "1", "1835", "profot_1505499407_800x513.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2561", "2017-09-15 13:18:13", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499491_800x1450.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2562", "2017-09-15 13:21:05", "0000-00-00 00:00:00", NULL, "1", "1832", "profot_1505499664_800x1405.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2563", "2017-09-15 13:21:45", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499704_800x1240.jpg", NULL);
#
#
INSERT INTO `productos_fotos_descu` VALUES ("2564", "2017-09-15 13:22:15", "0000-00-00 00:00:00", NULL, "1", "1830", "profot_1505499734_800x1275.jpg", NULL);
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
INSERT INTO `productos_grupos` VALUES ("26", "2011-01-04 15:06:39", "2017-10-12 15:10:32", NULL, "1", "Categoría 4", NULL, "progru_1492877150_666x450.png", NULL, "categoria4");
#
#
INSERT INTO `productos_grupos` VALUES ("58", "2017-02-09 09:23:35", "2017-10-12 15:09:41", NULL, "1", "Categoría 1", NULL, "progru_1492877091_666x450.png", NULL, "categorial1");
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
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=1997 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items` VALUES ("1832", "2017-09-11 11:57:48", "2017-10-13 09:45:36", NULL, "1", "58", "176", "GUANTES DE ARQUERO ADULTO", "313", "Walon", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1845", "2017-09-11 13:41:48", "2017-10-13 09:43:59", NULL, "1", "58", "182", "PORTA CELULAR", "304", "Importado", "<p>Diversos tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1849", "2017-09-11 13:54:23", "2017-09-15 12:32:03", NULL, "1", "58", "182", "PELOTA DE FÚTBOL # 5", "303", "Adidas", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1851", "2017-09-11 13:56:45", "2017-09-15 12:29:05", NULL, "1", "58", "182", "PELOTA DE FÚTBOL # 2", "303", "Winner", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1854", "2017-09-11 14:02:54", "2017-09-15 12:27:09", NULL, "1", "58", "182", "PELOTA DE FÚTBOL # 5", "303", "Brazuca", "<p>De cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1856", "2017-09-11 14:04:27", "2017-09-15 12:22:25", NULL, "1", "58", "182", "PELOTA DE FÚTBOL # 5", "303", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1858", "2017-09-11 14:06:21", "2017-09-15 12:20:22", NULL, "1", "58", "182", "PELOTA DE FÚTBOL  #3", "303", "Winner", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1861", "2017-09-11 14:09:24", "2017-09-15 12:17:36", NULL, "1", "58", "182", "PELOTA DE FÚTBOL #1", "303", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1862", "2017-09-11 14:12:33", "2017-09-15 12:16:32", NULL, "1", "58", "182", "PELOTA DE FÚTBOL AMERICANO", "306", "Vigor", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1864", "2017-09-11 14:14:11", "2017-09-15 12:14:40", NULL, "1", "58", "182", "Pelota de Fútbol # 2", "303", "Nike", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1865", "2017-09-11 14:15:06", "2017-09-15 12:13:32", NULL, "1", "58", "182", "PELOTA DE FÚTBOL # 5", "303", "Importada", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1867", "2017-09-11 14:17:27", "2017-09-15 12:11:29", NULL, "1", "58", "182", "PELOTA DE FÚTBOL ", "303", "Nacional", "<p>Pelota de cuero PVC&nbsp;</p>\n\n<p>Alianza Lima y Universitario de Deportes.</p>\n\n<p>Diversas tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1870", "2017-09-11 14:22:44", "2017-09-15 12:07:49", NULL, "1", "58", "182", "PELOTA DE BASKET", "304", "Viniball", "<p>Diversos tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1873", "2017-09-11 14:41:47", "2017-09-15 12:04:06", NULL, "1", "58", "182", "PELOTA SALTARINA CON ASA", "305", "Importada", "<p>Diversos modelos.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1874", "2017-09-11 19:11:36", "2017-09-15 12:03:15", NULL, "1", "58", "182", "PELOTA SALTARINA CON CACHITOS", "305", "Importado", "<p>Para ni&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1877", "2017-09-11 19:24:30", "2017-09-15 11:57:47", NULL, "1", "58", "182", "PELOTA DE TENIS", "307", "Importado", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1916", "2017-09-11 21:29:11", "2017-10-13 09:48:12", NULL, "1", "26", "190", "MANOPLAS X 2", "316", "Bum", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1917", "2017-09-11 21:31:09", "2017-10-13 09:47:59", NULL, "1", "26", "190", "SILVATO OFICIAL DE ARBITRO", "315", "Silvato", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1918", "2017-09-11 21:33:37", "2017-10-13 09:47:35", NULL, "1", "26", "186", "GORRO DE NATACIÓN DE LICRA", "311", "Nacional", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1919", "2017-09-11 21:37:35", "2017-09-13 13:34:28", NULL, "1", "26", "202", "PELOTA DE FÚTBOL", "308", "Torneo", "<p>Cuero PU.</p>\n\n<p>Disponible en #4 y #5.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1921", "2017-09-11 21:39:31", "2017-09-13 13:31:57", NULL, "1", "26", "202", "PELOTA DE FÚTBOL", "308", "MiBalon", "<p>Cuero PVC</p>\n\n<p>Disponible en #4 y #5.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1922", "2017-09-11 21:40:35", "2017-09-13 13:29:56", NULL, "1", "26", "202", "PELOTA DE BASKET", "310", "Spalding", "<p>Goma procesada.</p>\n\n<p>Disponible en #5 y #7.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1923", "2017-09-11 21:41:31", "2017-09-13 13:27:46", NULL, "1", "26", "202", "PELOTA DE FÚTBOL BARCELONA", "308", "Viniball", "<p>Cuero PVC en #4 y #5.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1924", "2017-09-11 21:43:01", "2017-09-13 13:26:15", NULL, "1", "26", "202", "PELOTA DE FUTBOL", "308", "Walon", "<p>Cuero PVC #4 y #5.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1925", "2017-09-11 21:43:50", "2017-09-13 13:25:17", NULL, "1", "26", "202", "PELOTA DE VOLEY MOD 210", "309", "Mikasa", "<p>Pelota Oficial. &nbsp;</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1926", "2017-09-11 21:44:34", "2017-09-13 13:24:28", NULL, "1", "26", "202", "PELOTA DE VOLEY", "309", "Mikasa", "<p>Pelota Oficial&nbsp;</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1927", "2017-09-11 21:45:39", "2017-09-13 13:23:39", NULL, "1", "26", "202", "PELOTA DE FUTBOL REAL MADRID", "308", "Viniball", "<p>Cuero PVC #4 y #5</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1928", "2017-09-11 21:46:25", "2017-09-13 13:21:38", NULL, "1", "26", "202", "PELOTA DE VOLEY OFICIAL", "308", "Molten", "<p>Pelota Oficial&nbsp;</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1930", "2017-09-11 21:52:33", "2017-09-13 13:18:58", NULL, "1", "26", "202", "PELOTA DE VOLEY", "308", "MiBalon", "<p>Goma celular.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1931", "2017-09-11 21:53:46", "2017-10-13 09:47:46", NULL, "1", "26", "190", "GUANTES DE FÚTBOL ", "315", "Adidas", "<p>Con varillas.</p>\n\n<p>Semi profesionales.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1934", "2017-09-11 21:58:15", "2017-09-13 13:12:54", NULL, "1", "26", "202", "Pelota de Voley", "309", "MiBalon", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1935", "2017-09-11 21:59:07", "2017-09-13 13:12:05", NULL, "1", "26", "202", "PELOTA DE FÚTBOL PU", "308", "Walon", "<p>Medidas #4&nbsp;y #5</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1936", "2017-09-11 22:00:16", "2017-09-13 13:09:52", NULL, "1", "26", "202", "PELOTA DE BASKET  # 7", "310", "Walon", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1937", "2017-09-13 13:14:34", "2017-09-13 13:14:34", NULL, "1", "26", "202", "PELOTA DE FÚTBOL", "308", "Mikasa", "<p>Pelotas Oficiales&nbsp;</p>\n\n<p>Tama&ntilde;os: # 4 &nbsp;y # 5</p>\n\n<p>&nbsp;</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1938", "2017-09-11 22:02:06", "2017-10-13 09:47:25", NULL, "1", "26", "190", "PESA RUSA DE 8 KG.", "316", "Importada", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1939", "2017-09-11 22:05:10", "2017-10-13 09:43:33", NULL, "1", "26", "186", "IRON GYM", "311", "One", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1940", "2017-09-11 22:06:36", "2017-10-13 09:42:51", NULL, "1", "26", "190", "PERA PARA BOX", "315", "Bum", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1941", "2017-09-11 22:07:39", "2017-10-13 09:40:00", NULL, "1", "26", "190", "SACO PARA BOX", "315", "Bum", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1942", "2017-09-11 22:08:36", "2017-10-13 09:46:46", NULL, "1", "26", "190", "MANOPLA X 2", "315", "Bum", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1943", "2017-09-11 22:10:26", "2017-10-13 09:46:38", NULL, "1", "26", "190", "CRONOMETRO", "315", "Ewtto", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1977", "2017-09-12 00:09:39", "2017-10-13 09:43:44", NULL, "1", "26", "186", "RODILLERA CON PEGA", "311", "Adites", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1978", "2017-09-12 00:13:27", "2017-10-13 09:40:34", NULL, "1", "26", "186", "MUSLERA", "312", "Bramch", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1979", "2017-09-12 00:14:35", "2017-10-13 09:40:11", NULL, "1", "26", "186", "RODILLERA TUBULAR", "312", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1980", "2017-09-12 00:16:09", "2017-10-13 09:42:26", NULL, "1", "58", "176", "PANTORRILLERA", "313", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1981", "2017-09-12 00:17:17", "2017-10-13 09:41:39", NULL, "1", "26", "186", "MUÑEQUERA BILATERAL", "312", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1982", "2017-09-12 00:19:10", "2017-10-13 09:42:37", NULL, "1", "26", "190", "MUSLERA", "315", "Adites", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1983", "2017-09-12 00:20:26", "2017-10-13 09:41:01", NULL, "1", "58", "176", "HOMBRERA X 1", "313", "Adites", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1984", "2017-09-12 00:27:18", "2017-10-13 09:41:15", NULL, "1", "58", "176", "RODILLERA CORTA ", "313", "Sibote", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1985", "2017-09-12 00:29:02", "2017-10-13 09:40:47", NULL, "1", "26", "202", "TOBILLERA", "309", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1986", "2017-09-12 00:30:06", "2017-10-13 09:39:47", NULL, "1", "26", "190", "MUÑEQUERA CON PALMA", "315", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1987", "2017-09-12 00:32:20", "2017-10-13 09:39:21", NULL, "1", "58", "182", "MUSLERA", "304", "WBS", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1988", "2017-09-12 00:33:42", "2017-10-13 09:39:07", NULL, "1", "58", "182", "CODERA CORTA", "305", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1989", "2017-09-12 00:34:56", "2017-10-13 09:38:53", NULL, "1", "58", "182", "MEÑISQUERA", "306", "WBS", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1990", "2017-09-12 00:36:38", "2017-10-13 09:38:41", NULL, "1", "58", "182", "TOBILLERA C/ PEGA", "307", "Adites", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1991", "2017-09-12 00:38:23", "2017-10-13 09:38:26", NULL, "1", "26", "190", "MUNEQUERA X 1", "316", "Adites", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1992", "2017-09-12 00:39:42", "2017-10-13 09:38:13", NULL, "1", "58", "176", "CODERA LARGA", "314", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1993", "2017-09-12 00:41:03", "2017-10-13 09:38:01", NULL, "1", "26", "202", "RODILLERA CON VARILLAS", "310", "Branson", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1994", "2017-09-12 00:43:58", "2017-10-13 09:37:50", NULL, "1", "58", "176", "CABESTRILLO", "313", "Nacional", "<p>Para lesi&oacute;n,&nbsp;diveras tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1995", "2017-09-12 00:46:41", "2017-10-13 09:37:39", NULL, "1", "26", "202", "PELOTA DE PILATES", "309", "Pelota", "<p>Medidas # 55 ,# 65, # 75 y # 85.&nbsp;</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1996", "2017-09-12 00:47:57", "2017-10-13 09:37:28", NULL, "1", "58", "176", "CORRECTOR DE POSTURA", "314", "Sibote", "<p>Producto talla standar regulable</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("1830", "2017-09-11 10:26:19", "2017-10-13 09:45:47", NULL, "1", "58", "176", "GUANTE DE ARQUERO NIÑO", "313", "Walon", "<p>&nbsp;</p>\n\n<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
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
  `oferta` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `nombre` (`nombre`,`marca`)
) ENGINE=MyISAM AUTO_INCREMENT=1997 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items_descu` VALUES ("1832", "2017-09-11 11:57:48", "2017-10-02 18:49:04", NULL, "1", "GUANTES DE ARQUERO ADULTO", "Walon", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, "25");
#
#
INSERT INTO `productos_items_descu` VALUES ("1835", "2017-09-11 12:43:43", "2017-10-02 18:44:05", NULL, "1", "Cuerda de saltar 2", "Jiampeile", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, "20");
#
#
INSERT INTO `productos_items_descu` VALUES ("1837", "2017-09-11 12:59:20", "2017-10-02 18:44:25", NULL, "1", "GUANTES PARA BOX", "Bum", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, "30");
#
#
INSERT INTO `productos_items_descu` VALUES ("1838", "2017-09-11 13:00:50", "2017-10-02 18:44:49", NULL, "1", "GUANTE DE KARATE", "Bum", "<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, "25");
#
#
INSERT INTO `productos_items_descu` VALUES ("1839", "2017-09-11 13:06:00", "2017-10-02 18:47:28", NULL, "1", "LENTES DE NATACIÓN DE NIÑO", "Speedo", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, "35");
#
#
INSERT INTO `productos_items_descu` VALUES ("1842", "2017-09-11 13:10:25", "2017-10-02 18:47:54", NULL, "1", "LENTES NATACIÓN ADULTO", "Grilong", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, "20");
#
#
INSERT INTO `productos_items_descu` VALUES ("1843", "2017-09-11 13:11:24", "2017-10-02 18:48:16", NULL, "1", "LENTES NATACIÓN NIÑOS", "Importado", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, "30");
#
#
INSERT INTO `productos_items_descu` VALUES ("1845", "2017-09-11 13:41:48", "2017-10-02 18:48:48", NULL, "1", "PORTA CELULAR", "Importado", "<p>Diversos tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, "40");
#
#
INSERT INTO `productos_items_descu` VALUES ("1848", "2017-09-11 13:52:47", "2017-09-15 12:34:49", NULL, "1", "PELOTA DE VOLEY", " Comet", "<p>Pelota de cuero cosido.</p>\n\n<p>Diversos modelos.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1849", "2017-09-11 13:54:23", "2017-09-15 12:32:03", NULL, "1", "PELOTA DE FÚTBOL # 5", "Adidas", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1851", "2017-09-11 13:56:45", "2017-09-15 12:29:05", NULL, "1", "PELOTA DE FÚTBOL # 2", "Winner", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1854", "2017-09-11 14:02:54", "2017-09-15 12:27:09", NULL, "1", "PELOTA DE FÚTBOL # 5", "Brazuca", "<p>De cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1856", "2017-09-11 14:04:27", "2017-09-15 12:22:25", NULL, "1", "PELOTA DE FÚTBOL # 5", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1858", "2017-09-11 14:06:21", "2017-09-15 12:20:22", NULL, "1", "PELOTA DE FÚTBOL  #3", "Winner", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1861", "2017-09-11 14:09:24", "2017-09-15 12:17:36", NULL, "1", "PELOTA DE FÚTBOL #1", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1862", "2017-09-11 14:12:33", "2017-09-15 12:16:32", NULL, "1", "PELOTA DE FÚTBOL AMERICANO", "Vigor", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1864", "2017-09-11 14:14:11", "2017-09-15 12:14:40", NULL, "1", "Pelota de Fútbol # 2", "Nike", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1865", "2017-09-11 14:15:06", "2017-09-15 12:13:32", NULL, "1", "PELOTA DE FÚTBOL # 5", "Importada", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1867", "2017-09-11 14:17:27", "2017-09-15 12:11:29", NULL, "1", "PELOTA DE FÚTBOL ", "Nacional", "<p>Pelota de cuero PVC&nbsp;</p>\n\n<p>Alianza Lima y Universitario de Deportes.</p>\n\n<p>Diversas tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1874", "2017-09-11 19:11:36", "2017-09-15 12:03:15", NULL, "1", "PELOTA SALTARINA CON CACHITOS", "Importado", "<p>Para ni&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1996", "2017-09-12 00:47:57", "2017-09-15 11:30:27", NULL, "1", "CORRECTOR DE POSTURA", "Sibote", "<p>Producto talla standar regulable</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_descu` VALUES ("1830", "2017-09-11 10:26:19", "2017-09-15 13:15:36", NULL, "1", "GUANTE DE ARQUERO NIÑO", "Walon", "<p>&nbsp;</p>\n\n<p>Diversas tallas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL, NULL);
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
INSERT INTO `productos_items_impor` VALUES ("1843", "2017-09-11 13:11:24", "2017-09-15 12:41:55", NULL, "1", "LENTES NATACIÓN NIÑOS", "Importado", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1845", "2017-09-11 13:41:48", "2017-09-15 12:39:01", NULL, "1", "PORTA CELULAR", "Importado", "<p>Diversos tama&ntilde;os.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1848", "2017-09-11 13:52:47", "2017-09-15 12:34:49", NULL, "1", "PELOTA DE VOLEY", " Comet", "<p>Pelota de cuero cosido.</p>\n\n<p>Diversos modelos.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1849", "2017-09-11 13:54:23", "2017-09-15 12:32:03", NULL, "1", "PELOTA DE FÚTBOL # 5", "Adidas", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1851", "2017-09-11 13:56:45", "2017-09-15 12:29:05", NULL, "1", "PELOTA DE FÚTBOL # 2", "Winner", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1854", "2017-09-11 14:02:54", "2017-09-15 12:27:09", NULL, "1", "PELOTA DE FÚTBOL # 5", "Brazuca", "<p>De cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1856", "2017-09-11 14:04:27", "2017-09-15 12:22:25", NULL, "1", "PELOTA DE FÚTBOL # 5", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1858", "2017-09-11 14:06:21", "2017-09-15 12:20:22", NULL, "1", "PELOTA DE FÚTBOL  #3", "Winner", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1861", "2017-09-11 14:09:24", "2017-09-15 12:17:36", NULL, "1", "PELOTA DE FÚTBOL #1", "Umbro", "<p>Pelota de cuero cosido.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1862", "2017-09-11 14:12:33", "2017-09-15 12:16:32", NULL, "1", "PELOTA DE FÚTBOL AMERICANO", "Vigor", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1875", "2017-09-11 19:20:51", "2017-09-15 12:00:44", NULL, "1", "FLOTADOR DE PIERNA", "Conquest", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1877", "2017-09-11 19:24:30", "2017-09-15 11:57:47", NULL, "1", "PELOTA DE TENIS", "Importado", NULL, NULL, NULL, NULL, "2", NULL, NULL, NULL);
#
#
INSERT INTO `productos_items_impor` VALUES ("1903", "2017-09-11 20:54:08", "2017-09-13 13:53:47", NULL, "1", "PUSH PLÁSTICO", "Importado", "<p>Para planchas.</p>\n", NULL, NULL, NULL, "2", NULL, NULL, NULL);
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=227 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_subgrupos` VALUES ("176", "2017-09-11 10:22:39", "2017-10-12 20:24:12", NULL, "1", "Pesados", "58", "1", NULL, "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("182", "2017-09-11 13:47:58", "2017-10-12 20:04:55", NULL, "1", "Livianos", "58", "1", NULL, "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("186", "2017-09-11 19:37:23", "2017-10-12 14:25:23", NULL, "1", "n4 Guantes Fitness", "26", "1", NULL, "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("190", "2017-09-11 20:06:37", "2017-10-12 14:25:49", NULL, "1", "n4 Manoplas", "26", "1", NULL, "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("202", "2017-09-11 21:36:13", "0000-00-00 00:00:00", NULL, "1", "Pelotas Oficiales", "26", "1", NULL, "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2015-08-30 19:28:03", "2017-09-26 18:42:56", NULL, "1", "administrador", "adminwoorld", NULL);
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
