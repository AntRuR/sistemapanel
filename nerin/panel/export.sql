DROP TABLE IF EXISTS `banners`;
#
#
CREATE TABLE `banners` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `fichero` varchar(150) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `dimensiones` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `banners_fotos`;
#
#
CREATE TABLE `banners_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos` VALUES ("1", "2013-03-24 13:07:07", "0000-00-00 00:00:00", NULL, "1", "home", "home", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("2", "2013-03-24 13:30:28", "2015-10-14 23:24:52", NULL, "1", "empresa", "empresa", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("3", "2013-03-24 13:31:02", "0000-00-00 00:00:00", NULL, "1", "servicios", "servicios", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("4", "2013-03-24 13:31:39", "0000-00-00 00:00:00", NULL, "1", "servicio-post-venta", "postventa", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("5", "2013-03-24 13:32:32", "0000-00-00 00:00:00", NULL, "1", "responsabilidad-social", "responsabilidad", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Clientes", "banner_enlaces", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("10", "0000-00-00 00:00:00", "2015-06-25 16:25:42", NULL, "1", "Contacto", "banner_enlaces2", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("11", "2015-07-01 20:57:55", "2015-07-03 20:46:58", NULL, "1", "Enlaces", "pie", "1");
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
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `url` varchar(160) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("111", "2015-10-14 23:10:44", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444882240_1137x426.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("113", "2015-10-14 23:25:33", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444883129_1137x426.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("137", "2015-10-15 17:32:47", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444948362_1371x515.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("139", "2015-10-15 17:34:12", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444948448_1371x515.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("140", "2015-10-15 17:34:38", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444948476_1051x380.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("136", "2015-10-15 17:32:10", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444948326_1164x454.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("119", "2015-10-14 23:30:41", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444883437_1137x426.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("143", "2015-10-15 17:38:35", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444948711_1164x454.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("144", "2015-10-15 17:39:04", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444948741_926x347.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("148", "2015-10-15 17:49:54", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444949389_1244x485.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("149", "2015-10-15 17:51:34", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444949491_1244x485.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("146", "2015-10-15 17:41:18", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444948875_922x347.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("147", "2015-10-15 17:41:57", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444948913_1051x380.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("128", "2015-10-14 23:53:21", "0000-00-00 00:00:00", NULL, "1", "5", "banfot_1444884798_1137x426.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("145", "2015-10-15 17:40:49", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444948845_1371x515.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("59", "2015-07-01 21:02:33", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802551_1280x720.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("23", "2014-11-05 10:53:30", "2014-11-05 10:57:16", NULL, "1", "9", "banfot_1415202810_100x91.png", "Programa Techo Propio del Fondo Mi Vivienda", "http://www.mivivienda.com.pe/PortalWEB/usuario-busca-viviendas/pagina.aspx?idpage=30", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("26", "2014-11-05 10:54:43", "0000-00-00 00:00:00", NULL, "1", "9", "banfot_1415202883_590x248.jpg", "Mexichem Perú SA", "http://www.mexichem.com/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("58", "2015-06-25 15:44:12", "0000-00-00 00:00:00", NULL, "1", "10", "banfot_1435265052_113x125.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("31", "2014-11-05 11:46:09", "2014-11-05 11:46:05", NULL, "1", "9", "banfot_1415205965_1617x1193.jpg", "Marina de Guerra del Perú", " https://www.marina.mil.pe/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("34", "2014-11-05 11:24:39", "2014-11-05 11:25:07", NULL, "1", "9", "banfot_1415204679_200x200.gif", "Municipalidad Distrital de San Martin de Porres", "http://www.mdsmp.gob.pe/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("36", "2014-11-05 11:43:49", "2014-11-05 11:44:40", NULL, "1", "9", "banfot_1415205829_180x100.jpg", "UNOPS", "https://www.unops.org/espanol/where-we-work/latin-america/Paginas/Peru.aspx", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("37", "2014-11-05 11:32:08", "2014-11-05 11:33:21", NULL, "1", "9", "banfot_1415205124_1167x1200.jpg", "Antamina", "http://www.antamina.com/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("40", "2014-11-05 11:36:12", "2014-11-05 11:36:29", NULL, "1", "9", "banfot_1415205372_150x80.jpg", "Fondo Mi Vivienda", "http://www.mivivienda.com.pe/PortalWEB/index.aspx", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("41", "2014-11-05 11:36:44", "2014-11-05 11:36:58", NULL, "1", "9", "banfot_1415205404_200x200.gif", "Procter & Gamble", "http://pg.com/es_LATAM/PE/index.shtml", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("60", "2015-07-01 21:02:43", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802561_1500x856.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("61", "2015-07-01 21:02:53", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802572_1024x768.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("62", "2015-07-01 21:03:04", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802582_1024x819.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("63", "2015-07-01 21:03:14", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802592_1280x1024.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("64", "2015-07-01 21:03:26", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802606_690x430.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("65", "2015-07-01 21:03:36", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802615_750x510.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("66", "2015-07-01 21:03:49", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802626_1554x1050.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("67", "2015-07-01 21:04:04", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802642_1554x1050.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("68", "2015-07-01 21:04:30", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802666_1920x1200.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("69", "2015-07-01 21:04:47", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802685_1200x798.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("70", "2015-07-01 21:05:00", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802699_640x480.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("71", "2015-07-01 21:05:17", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802715_1440x900.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("72", "2015-07-01 21:05:41", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802735_2560x1600.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("73", "2015-07-01 21:05:58", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802754_1920x1200.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("74", "2015-07-01 21:06:08", "0000-00-00 00:00:00", NULL, "1", "11", "banfot_1435802766_728x850.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("133", "2015-10-15 17:23:38", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444947814_1051x380.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("134", "2015-10-15 17:26:22", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444947978_1371x515.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("109", "2015-10-14 22:47:56", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444880872_1175x442.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("135", "2015-10-15 17:29:17", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1444948154_1164x454.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("138", "2015-10-15 17:33:15", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444948391_1051x380.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("117", "2015-10-14 23:28:48", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1444883325_1175x442.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("141", "2015-10-15 17:35:34", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444948530_1164x454.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("142", "2015-10-15 17:36:19", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444948576_926x347.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("150", "2015-10-15 17:53:13", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1444949590_1244x485.png", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("151", "2015-10-15 17:54:55", "0000-00-00 00:00:00", NULL, "1", "4", "banfot_1444949691_1244x485.png", NULL, NULL, "1");
#
#
DROP TABLE IF EXISTS `blog_actividades`;
#
#
CREATE TABLE `blog_actividades` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `blog_actividades_fotos`;
#
#
CREATE TABLE `blog_actividades_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `blog_fotos`;
#
#
CREATE TABLE `blog_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `blog_fotos_fotos`;
#
#
CREATE TABLE `blog_fotos_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("1", "2014-10-23 16:54:10", "0000-00-00 00:00:00", NULL, "1", "1", "blofot_1414101250_335x490.jpg", NULL, NULL, "1");
#
#
DROP TABLE IF EXISTS `blog_noticias`;
#
#
CREATE TABLE `blog_noticias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_noticias` VALUES ("1", "2015-06-25 10:47:26", "2015-06-25 10:47:26", NULL, "1", "2014-10-23 16:21:14", "Financiamiento", "<p>Todas las opciones en un s&oacute;lo lugar&nbsp;para obtener el mejor cr&eacute;dito hipotecario de acuerdo a sus necesidades y en el menor tiempo posible. Te brindamos una asesor&iacute;a gratuita y personalizada.&nbsp;</p>\n", "blonot_1435247246_960x651.jpg", NULL, "1");
#
#
DROP TABLE IF EXISTS `blog_videos`;
#
#
CREATE TABLE `blog_videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `blog_videos_videos`;
#
#
CREATE TABLE `blog_videos_videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `codigo` varchar(150) DEFAULT NULL,
  `texto` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `boletines`;
#
#
CREATE TABLE `boletines` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `campains`;
#
#
CREATE TABLE `campains` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `asunto` varchar(250) DEFAULT NULL,
  `fronname` varchar(80) DEFAULT NULL,
  `replayto` varchar(80) DEFAULT NULL,
  `enviar_texto` varchar(80) DEFAULT NULL,
  `enviar_firma` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `file` varchar(150) DEFAULT NULL,
  `publicado` varchar(80) DEFAULT NULL,
  `n_solicitados` float DEFAULT NULL,
  `n_enviados` float DEFAULT NULL,
  `n_leidos` float DEFAULT NULL,
  `n_linkeados` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `campains_fotos`;
#
#
CREATE TABLE `campains_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_grupo` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `bloque` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `clientes`;
#
#
CREATE TABLE `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `apellidos` varchar(80) DEFAULT NULL,
  `genero` varchar(80) DEFAULT NULL,
  `id_status` int(10) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `telefono_oficina` varchar(80) DEFAULT NULL,
  `celular_claro` varchar(80) DEFAULT NULL,
  `celular_movistar` varchar(80) DEFAULT NULL,
  `nextel` varchar(80) DEFAULT NULL,
  `rpm` varchar(80) DEFAULT NULL,
  `rpc` varchar(80) DEFAULT NULL,
  `empresa` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `clientes_status`;
#
#
CREATE TABLE `clientes_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
INSERT INTO `configuraciones` VALUES ("1", "2013-01-17 20:27:52", "2013-01-17 20:40:31", NULL, "1", "direccion_email", "Jr. Ica 158-35 Lima 1, Perú");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2013-01-17 20:27:52", "2013-01-17 20:40:59", NULL, "1", "emails_admin", "info@nering.net");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2013-01-17 20:27:52", "2013-01-17 20:41:19", NULL, "1", "telefonos_email", "Central: (+511) 000-0000 | Celular: 000000000 / RPM: # 00000000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2013-01-17 20:27:52", "2013-01-17 20:37:36", NULL, "1", "direccion_publica", "<strong>Oficina Principal</strong><br>Jr. Ica 158-35 Lima 1, Perú");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2013-01-17 20:27:52", "2013-01-17 20:39:26", NULL, "1", "emails_publicos", "Email: info@nering.net");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2013-01-17 20:27:52", "2013-01-17 20:39:03", NULL, "1", "telefonos_publicos", "Central: (+511) 000-0000 | Celular: 000000000 / RPM: # 00000000");
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
  `valor` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `configuraciones_root` VALUES ("1", "2013-01-17 20:27:49", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", NULL);
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2013-01-17 20:27:49", "2013-01-17 20:35:13", NULL, "1", "titulo_web", "Nering");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2013-01-17 20:27:49", "2013-01-17 20:35:25", NULL, "1", "nombre_empresa", "Nering");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2013-01-17 20:27:49", "2013-01-17 20:35:29", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2013-01-17 20:27:49", "2013-01-17 20:35:43", NULL, "1", "email_from", "info@nering.net");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2013-01-17 20:27:49", "2013-01-17 20:35:50", NULL, "1", "email_fromname", "Nering");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2013-01-17 20:27:49", "2013-01-17 20:36:06", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2013-01-17 20:27:49", "2015-07-01 19:57:56", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com,nering@nering.net,marketing@nering.net");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2013-01-17 20:27:49", "2013-01-17 20:41:52", NULL, "1", "titulo_home", "Nering");
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
  `nombre` varchar(80) DEFAULT NULL,
  `empresa` varchar(80) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `pais` varchar(80) DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `comentario` longtext,
  `apellidos` varchar(80) DEFAULT NULL,
  `celular` varchar(80) DEFAULT NULL,
  `distrito` varchar(80) DEFAULT NULL,
  `provincia` varchar(80) DEFAULT NULL,
  `como_se_entero` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `contacto` VALUES ("1", "2015-07-01 18:27:31", "2015-07-01 18:27:31", NULL, "1", "2015-07-01 18:27:31", "guillermo", NULL, NULL, NULL, "", "guillermolozan@gmail.com", "prueba de contacto", "lozan", "", "", "", "1");
#
#
INSERT INTO `contacto` VALUES ("2", "2015-07-15 16:04:05", "2015-07-15 16:04:05", NULL, "1", "2015-07-15 16:04:05", "Carlos", NULL, NULL, NULL, "+51996495191", "nering@nering.net", "PROBANDO nueva WEB", "N", "999", "", "Lima", "3");
#
#
DROP TABLE IF EXISTS `contacto_canales`;
#
#
CREATE TABLE `contacto_canales` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `cuentas`;
#
#
CREATE TABLE `cuentas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `usuario` varchar(80) DEFAULT NULL,
  `ordenprove` float DEFAULT NULL,
  `proveedor` varchar(80) DEFAULT NULL,
  `clave` varchar(80) DEFAULT NULL,
  `relays` float DEFAULT NULL,
  `enabled` varchar(80) DEFAULT NULL,
  `time_0` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `emails_grupos`;
#
#
CREATE TABLE `emails_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `emails_items`;
#
#
CREATE TABLE `emails_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_grupo` int(10) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `enabled` varchar(80) DEFAULT NULL,
  `tipo_disabled` varchar(80) DEFAULT NULL,
  `comprobado` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `empresa_items`;
#
#
CREATE TABLE `empresa_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(250) DEFAULT NULL,
  `texto` longtext,
  `pdf` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `empresa_items` VALUES ("1", "2014-10-18 18:49:03", "2015-10-14 15:35:38", NULL, "1", "Misión y Visión", "<p><strong><em>Misi&oacute;n</em></strong><em>.- &ldquo;Crear infraestructuras con &oacute;ptimos est&aacute;ndares de calidad, que mejore la vida del hombre y del planeta sin da&ntilde;arlo, generando valor a nuestros clientes y a nuestros accionistas con el desarrollo de proyectos inmobiliarios de primera &iacute;ndole, basados en principios &eacute;ticos e innovadores, contribuyendo con ello al desarrollo de la sociedad y el pa&iacute;s&quot;.</em></p>\n\n<p>&nbsp;</p>\n\n<hr />\n<p>&nbsp;</p>\n\n<p><em><strong>Visi&oacute;n</strong>.- &ldquo;Consolidarnos como una constructora l&iacute;der con m&aacute;s productividad a nivel nacional, que construya soluciones &oacute;ptimas que generen valor a nuestros clientes, accionistas y a la sociedad en su conjunto, mejorando constantemente nuestros servicios para ofrecer la mejor calidad y costos en construcci&oacute;n y manteniendo el porcentaje m&aacute;s alto en participaci&oacute;n del mercado&quot;.</em></p>\n", NULL, "1");
#
#
INSERT INTO `empresa_items` VALUES ("3", "2014-10-18 18:49:57", "2015-10-14 21:57:46", NULL, "1", "Política de Calidad", "<p><em>&ldquo;Entendemos basados en nuestra experiencia la gran importancia del control de calidad y el servicio efectivo, cumpliendo con los compromisos de obra y construcci&oacute;n, dentro de las m&aacute;s estrictas normas t&eacute;cnicas, con el fin de garantizar el compromiso pactados con nuestros clientes y proveedores en el tiempo de entrega, del cual nos sentimos orgullosos por el logro exitoso, otorgando eficiencia y responsabilidad que aseguran la calidad y precisi&oacute;n de nuestras obras.</em></p>\n\n<p><em>Para garantizar el crecimiento, contamos con procesos de mejoramiento continuo en el Sistema de Gesti&oacute;n de Calidad, con un grupo id&oacute;neo de profesionales altamente capacitados&rdquo;.</em></p>\n", NULL, "1");
#
#
INSERT INTO `empresa_items` VALUES ("4", "2014-10-18 18:50:21", "2015-10-14 22:15:18", NULL, "1", "Política Corporativa", "<p><em><strong>&quot;NERING</strong> fundamenta sus principios y los expresa con una estructura&nbsp;socialmente responsable y en consecuencia&nbsp;prioriza su atenci&oacute;n a la prevenci&oacute;n y control&nbsp;de riesgos laborales&nbsp;de tal forma se contribuye&nbsp;al cumplimiento de nuestro compromiso con el cuidado de la vida, la salud y la integridad de las personas&quot;.</em></p>\n\n<p><em>&quot;Mejoramos continuamente nuestros procesos buscando una relacion costo-beneficio para garantizar la satisfaccion del cliente, generando proyectos sostenibles que incrementan la utilidad y permanencia en el mercado&quot;.</em></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n", NULL, "1");
#
#
INSERT INTO `empresa_items` VALUES ("5", "2014-10-18 18:50:46", "2015-10-14 22:18:50", NULL, "1", "Política Laboral", "<p><em>Evaluamos permanentemente el desempe&ntilde;o de todo el personal, tanto en su <strong>COMPROMISO</strong> como en su <strong>CONOCIMIENTO</strong>:</em></p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li><em>&quot;Al personal con potencial, comprometido o no, se le priorizar&aacute; en su motivaci&oacute;n sin descuidar su capacitaci&oacute;n&quot;</em></li>\n</ul>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li><em>&quot;Al personal sin tanto potencial, pero comprometido, se le priorizar&aacute; en su capacitaci&oacute;n sin descuidar su motivaci&oacute;n&quot;</em></li>\n</ul>\n", NULL, "1");
#
#
INSERT INTO `empresa_items` VALUES ("6", "2014-10-18 18:51:14", "2015-10-14 17:23:27", NULL, "1", "Política de Responsabilidad Social", "<p><em>&ldquo;Nuestra gente es nuestro principal valor, por esto destacamos y fomentamos valores como&nbsp;el esp&iacute;ritu de superaci&oacute;n, generosidad, solidaridad y trabajo en equipo. Asimismo como parte de nuestra responsabilidad social, contribuimos a los esfuerzos de organizaciones legalmente constituidas, colaborando en programas o proyectos sociales y ambientales, para el desarrollo comunitario que fomenten la cultura, la educaci&oacute;n, el deporte y el respeto del medio ambiente entre otros&rdquo;.</em></p>\n\n<p>&nbsp;</p>\n", NULL, "1");
#
#
DROP TABLE IF EXISTS `envios_cuentas`;
#
#
CREATE TABLE `envios_cuentas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `server` varchar(80) DEFAULT NULL,
  `port` varchar(80) DEFAULT NULL,
  `logo` varchar(150) DEFAULT NULL,
  `dominio` varchar(80) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos` VALUES ("1", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "clientes", "0000-00-00 00:00:00", "clientes", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("22", "2015-10-15 17:13:50", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444947230_300x221.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("6", "2015-10-15 17:05:46", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946746_400x264.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("8", "2015-10-15 17:06:25", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946784_375x113.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("9", "2015-10-15 17:06:37", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946797_178x160.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("11", "2015-10-15 17:06:55", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946815_362x386.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("12", "2015-10-15 17:07:03", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946823_358x140.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("13", "2015-10-15 17:07:11", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946831_450x255.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("21", "2015-10-15 17:12:02", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444947121_605x373.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("19", "2015-10-15 17:10:26", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444947020_2167x1741.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("16", "2015-10-15 17:07:45", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946865_150x80.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("20", "2015-10-15 17:11:18", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444947077_300x268.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("18", "2015-10-15 17:09:10", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1444946949_150x160.png", NULL, NULL, "1");
#
#
DROP TABLE IF EXISTS `geo_departamentos`;
#
#
CREATE TABLE `geo_departamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `geo_distritos`;
#
#
CREATE TABLE `geo_distritos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_provincia` int(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `geo_provincias`;
#
#
CREATE TABLE `geo_provincias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `id_departamento` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `lista_envio`;
#
#
CREATE TABLE `lista_envio` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_grupo` int(10) DEFAULT NULL,
  `id_email` int(10) DEFAULT NULL,
  `enviado` varchar(80) DEFAULT NULL,
  `leido` float DEFAULT NULL,
  `fallido` float DEFAULT NULL,
  `linkeado` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `menus`;
#
#
CREATE TABLE `menus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `menus_items`;
#
#
CREATE TABLE `menus_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `news_fotos`;
#
#
CREATE TABLE `news_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_item` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `news_fotos` VALUES ("1", "2015-10-14 15:34:19", "2015-10-14 15:34:17", NULL, "1", "1", "newite_1444854857_512x452.png", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("2", "2014-10-30 15:37:45", "0000-00-00 00:00:00", NULL, "1", "2", "newite_1414701465_300x236.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("3", "2015-10-14 21:55:36", "2015-10-14 21:55:36", NULL, "1", "3", "newite_1444877736_279x272.png", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("7", "2015-10-14 22:17:58", "2015-10-14 22:17:56", NULL, "1", "4", "newite_1444879076_600x465.png", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("5", "2015-10-14 16:24:26", "2015-10-14 16:24:25", NULL, "1", "5", "newite_1444857865_450x449.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("6", "2015-10-14 17:21:50", "2015-10-14 17:21:50", NULL, "1", "6", "newite_1444861310_500x265.jpg", NULL, "1");
#
#
DROP TABLE IF EXISTS `page_config`;
#
#
CREATE TABLE `page_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `seccion` varchar(80) DEFAULT NULL,
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
  `pagina` varchar(80) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pagina` (`pagina`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("4", "2015-06-03 16:49:30", "2015-07-03 20:48:19", NULL, "1", "servicio-post-venta", "Servicio de Post Venta", "<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>Estimado cliente, como parte de nuestra&nbsp;pol&iacute;tica de calidad, deseamos conocer sus opiniones respecto a la atenci&oacute;n recibida y&nbsp;su grado de satisfacci&oacute;n con&nbsp;nuestra organizaci&oacute;n. Agradecemos sus comentarios.<em>&nbsp;</em></p>\n", "pag_1433368170_516x234.jpg", "Post Venta", "1");
#
#
DROP TABLE IF EXISTS `pedidos`;
#
#
CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `id_usuario` int(10) DEFAULT NULL,
  `envgen_nombre` varchar(80) DEFAULT NULL,
  `envgen_apellido_paterno` varchar(80) DEFAULT NULL,
  `envgen_apellido_materno` varchar(80) DEFAULT NULL,
  `envgen_direccion` varchar(80) DEFAULT NULL,
  `envgen_departamento` int(10) DEFAULT NULL,
  `envgen_provincia` int(10) DEFAULT NULL,
  `envgen_distrito` int(10) DEFAULT NULL,
  `envgen_telefono_fijo` varchar(80) DEFAULT NULL,
  `envgen_telefono_celular` varchar(80) DEFAULT NULL,
  `envgen_ref_lugar` longtext,
  `envgen_fecha_entrega` datetime DEFAULT '0000-00-00 00:00:00',
  `envgen_intervalo_entrega` varchar(80) DEFAULT NULL,
  `envgen_si_empresa` longtext,
  `envgen_comentario` longtext,
  `pedido` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_bloques`;
#
#
CREATE TABLE `productos_bloques` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_carrocerias`;
#
#
CREATE TABLE `productos_carrocerias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_colores`;
#
#
CREATE TABLE `productos_colores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_comentarios`;
#
#
CREATE TABLE `productos_comentarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `empresa` varchar(80) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `pais` varchar(80) DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `comentario` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
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
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_item` int(10) DEFAULT NULL,
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `id_tipo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos` VALUES ("1", "2013-03-24 17:41:30", "2013-03-24 20:33:01", NULL, "1", "0", "20", "profot_1364164890_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("2", "2013-03-24 17:41:42", "2013-03-24 20:32:50", NULL, "1", "0", "20", "profot_1364164901_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("3", "2013-03-24 17:41:54", "2013-03-24 20:32:44", NULL, "1", "0", "20", "profot_1364164914_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("4", "2013-03-24 17:42:02", "2013-03-24 20:32:35", NULL, "1", "0", "20", "profot_1364164922_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("5", "2013-03-24 17:42:09", "2013-03-24 20:40:02", NULL, "1", "0", "20", "profot_1364164929_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("6", "2013-03-24 17:42:25", "2013-03-24 20:39:58", NULL, "1", "0", "10", "profot_1364164945_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("7", "2013-03-24 17:42:32", "2013-03-24 20:39:53", NULL, "1", "0", "10", "profot_1364164952_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("8", "2013-03-24 17:42:41", "2013-03-24 20:39:49", NULL, "1", "0", "10", "profot_1364164961_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("9", "2013-03-24 17:42:50", "2013-03-24 20:39:44", NULL, "1", "0", "10", "profot_1364164970_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("10", "2013-03-24 17:42:57", "2013-03-24 20:39:39", NULL, "1", "0", "10", "profot_1364164977_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("11", "2013-03-24 17:43:14", "2013-03-24 20:39:34", NULL, "1", "0", "4", "profot_1364164993_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("12", "2013-03-24 17:43:22", "2013-03-24 20:39:29", NULL, "1", "0", "4", "profot_1364165001_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("13", "2013-03-24 17:43:29", "2013-03-24 20:39:23", NULL, "1", "0", "4", "profot_1364165008_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("14", "2013-03-24 17:43:35", "2013-03-24 20:39:18", NULL, "1", "0", "4", "profot_1364165015_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("15", "2013-03-24 17:43:42", "2013-03-24 20:39:12", NULL, "1", "0", "4", "profot_1364165022_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("16", "2013-03-24 17:43:55", "2013-03-24 20:39:07", NULL, "1", "0", "3", "profot_1364165035_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("17", "2013-03-24 17:44:21", "2013-03-24 20:38:58", NULL, "1", "0", "3", "profot_1364165061_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("18", "2013-03-24 17:44:28", "2013-03-24 20:38:51", NULL, "1", "0", "3", "profot_1364165067_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("19", "2013-03-24 17:44:35", "2013-03-24 20:38:45", NULL, "1", "0", "3", "profot_1364165075_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("20", "2013-03-24 17:44:44", "2013-03-24 20:38:40", NULL, "1", "0", "3", "profot_1364165084_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("114", "2015-06-25 12:45:38", "0000-00-00 00:00:00", NULL, "1", "0", "31", "profot_1435254338_720x540.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("119", "2015-10-15 18:03:49", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950228_1024x768.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("23", "2013-03-24 17:45:25", "2013-03-24 20:38:21", NULL, "1", "0", "22", "profot_1364165125_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("24", "2013-03-24 17:45:40", "2013-03-24 20:38:15", NULL, "1", "0", "21", "profot_1364165139_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("25", "2013-03-24 17:45:48", "2013-03-24 20:38:10", NULL, "1", "0", "21", "profot_1364165148_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("26", "2013-03-24 17:45:55", "2013-03-24 20:38:05", NULL, "1", "0", "21", "profot_1364165155_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("27", "2013-03-24 17:46:01", "2013-03-24 20:37:59", NULL, "1", "0", "21", "profot_1364165160_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("28", "2013-03-24 17:46:06", "2013-03-24 20:37:54", NULL, "1", "0", "21", "profot_1364165166_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("29", "2013-03-24 17:46:11", "2013-03-24 20:37:47", NULL, "1", "0", "21", "profot_1364165171_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("30", "2013-03-24 17:47:40", "2013-03-24 20:37:42", NULL, "1", "0", "12", "profot_1364165260_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("31", "2013-03-24 17:47:46", "2013-03-24 20:37:36", NULL, "1", "0", "12", "profot_1364165266_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("32", "2013-03-24 17:47:53", "2013-03-24 20:37:31", NULL, "1", "0", "12", "profot_1364165273_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("33", "2013-03-24 17:48:00", "2013-03-24 20:37:26", NULL, "1", "0", "12", "profot_1364165280_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("34", "2013-03-24 17:48:07", "2013-03-24 20:37:21", NULL, "1", "0", "12", "profot_1364165287_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("35", "2013-03-24 17:48:18", "2013-03-24 20:37:15", NULL, "1", "0", "15", "profot_1364165298_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("36", "2013-03-24 17:48:24", "2013-03-24 20:37:10", NULL, "1", "0", "15", "profot_1364165304_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("37", "2013-03-24 17:48:30", "2013-03-24 20:37:06", NULL, "1", "0", "15", "profot_1364165310_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("38", "2013-03-24 17:48:36", "2013-03-24 20:37:01", NULL, "1", "0", "15", "profot_1364165315_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("39", "2013-03-24 17:48:42", "2013-03-24 20:36:56", NULL, "1", "0", "15", "profot_1364165322_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("40", "2013-03-24 17:48:53", "2013-03-24 20:36:51", NULL, "1", "0", "7", "profot_1364165333_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("41", "2013-03-24 17:48:59", "2013-03-24 20:36:45", NULL, "1", "0", "7", "profot_1364165338_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("42", "2013-03-24 17:49:06", "2013-03-24 20:36:41", NULL, "1", "0", "7", "profot_1364165346_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("43", "2013-03-24 17:49:13", "2013-03-24 20:36:34", NULL, "1", "0", "7", "profot_1364165353_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("44", "2013-03-24 17:49:21", "2013-03-24 20:36:29", NULL, "1", "0", "7", "profot_1364165361_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("45", "2013-03-24 17:49:38", "2013-03-24 20:36:24", NULL, "1", "0", "11", "profot_1364165378_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("46", "2013-03-24 17:49:45", "2013-03-24 20:36:18", NULL, "1", "0", "11", "profot_1364165385_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("47", "2013-03-24 17:49:52", "2013-03-24 20:36:08", NULL, "1", "0", "11", "profot_1364165392_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("48", "2013-03-24 17:49:57", "2013-03-24 20:36:02", NULL, "1", "0", "11", "profot_1364165397_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("49", "2013-03-24 17:50:05", "2013-03-24 20:35:56", NULL, "1", "0", "11", "profot_1364165405_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("124", "2015-10-15 18:05:27", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950326_894x683.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("120", "2015-10-15 18:04:11", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950250_952x755.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("121", "2015-10-15 18:04:36", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950275_1024x693.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("53", "2013-03-24 17:50:50", "2013-03-24 20:35:35", NULL, "1", "0", "1", "profot_1364165450_311x194.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("54", "2013-03-24 17:50:59", "2013-03-24 20:35:30", NULL, "1", "0", "1", "profot_1364165458_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("55", "2013-03-24 17:51:21", "2013-03-24 20:35:25", NULL, "1", "0", "5", "profot_1364165481_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("56", "2013-03-24 17:51:27", "2013-03-24 20:35:20", NULL, "1", "0", "5", "profot_1364165487_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("57", "2013-03-24 17:51:33", "2013-03-24 20:35:15", NULL, "1", "0", "5", "profot_1364165493_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("58", "2013-03-24 17:51:38", "2013-03-24 20:35:10", NULL, "1", "0", "5", "profot_1364165498_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("59", "2013-03-24 17:51:43", "2013-03-24 20:35:05", NULL, "1", "0", "5", "profot_1364165503_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("60", "2013-03-24 17:51:58", "2013-03-24 20:35:00", NULL, "1", "0", "18", "profot_1364165518_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("61", "2013-03-24 17:52:04", "2013-03-24 20:34:54", NULL, "1", "0", "18", "profot_1364165524_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("62", "2013-03-24 17:52:10", "2013-03-24 20:34:47", NULL, "1", "0", "18", "profot_1364165530_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("63", "2013-03-24 17:52:16", "2013-03-24 20:34:42", NULL, "1", "0", "18", "profot_1364165536_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("64", "2013-03-24 17:52:21", "2013-03-24 20:34:37", NULL, "1", "0", "18", "profot_1364165541_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("65", "2013-03-24 17:52:26", "2013-03-24 20:34:29", NULL, "1", "0", "18", "profot_1364165546_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("66", "2013-03-24 17:52:39", "2013-03-24 20:34:23", NULL, "1", "0", "14", "profot_1364165559_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("67", "2013-03-24 17:52:53", "2013-03-24 20:34:17", NULL, "1", "0", "23", "profot_1364165573_311x194.jpg", NULL, "1", "2");
#
#
INSERT INTO `productos_fotos` VALUES ("68", "2013-03-24 17:53:08", "2013-03-24 20:34:11", NULL, "1", "0", "19", "profot_1364165588_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("69", "2013-03-24 17:53:27", "2013-03-24 20:34:06", NULL, "1", "0", "17", "profot_1364165607_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("70", "2013-03-24 17:53:38", "2013-03-24 20:34:01", NULL, "1", "0", "16", "profot_1364165618_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("71", "2013-03-24 17:53:49", "2013-03-24 20:33:55", NULL, "1", "0", "13", "profot_1364165629_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("72", "2013-03-24 17:54:02", "2013-03-24 20:33:48", NULL, "1", "0", "9", "profot_1364165642_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("73", "2013-03-24 17:54:11", "2013-03-24 20:33:43", NULL, "1", "0", "9", "profot_1364165651_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("74", "2013-03-24 17:54:22", "2013-03-24 20:33:38", NULL, "1", "0", "8", "profot_1364165662_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("75", "2013-03-24 17:54:33", "2013-03-24 20:33:32", NULL, "1", "0", "6", "profot_1364165673_311x194.jpg", NULL, "1", "1");
#
#
INSERT INTO `productos_fotos` VALUES ("105", "2014-11-27 18:50:03", "0000-00-00 00:00:00", NULL, "1", "0", "2", "profot_1417132201_714x390.png", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("77", "2014-10-28 10:44:51", "0000-00-00 00:00:00", NULL, "1", "0", "27", "profot_1414511087_1231x1670.jpg", NULL, "1", "4");
#
#
INSERT INTO `productos_fotos` VALUES ("78", "2014-10-28 10:49:07", "2015-06-25 11:53:43", NULL, "1", "0", "26", "profot_1414511345_956x592.png", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("79", "2014-10-28 10:49:34", "0000-00-00 00:00:00", NULL, "1", "0", "26", "profot_1414511373_444x549.png", NULL, "1", "4");
#
#
INSERT INTO `productos_fotos` VALUES ("80", "2014-11-06 19:59:24", "2014-11-06 19:59:36", NULL, "1", "0", "26", "profot_1415321963_714x390.png", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("123", "2015-10-15 18:05:05", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950304_1024x711.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("125", "2015-10-15 18:05:41", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950340_991x744.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("126", "2015-10-15 18:05:55", "0000-00-00 00:00:00", NULL, "1", "0", "24", "profot_1444950354_1024x768.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("127", "2015-10-16 09:44:58", "0000-00-00 00:00:00", NULL, "1", "0", "34", "profot_1445006694_2048x1536.jpg", NULL, "1", "5");
#
#
INSERT INTO `productos_fotos` VALUES ("130", "2015-10-22 10:49:20", "0000-00-00 00:00:00", NULL, "1", "0", "35", "profot_1445528957_1600x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("106", "2014-11-27 18:50:23", "2014-11-27 18:55:23", NULL, "1", "0", "2", "profot_1417132221_713x441.png", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("112", "2015-06-25 12:23:05", "0000-00-00 00:00:00", NULL, "1", "0", "30", "profot_1435252984_540x720.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("111", "2015-06-25 11:46:21", "2015-06-25 11:53:56", NULL, "1", "0", "26", "profot_1435250781_822x367.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("110", "2015-06-25 11:45:48", "2015-06-25 11:54:34", NULL, "1", "0", "26", "profot_1435250747_979x589.jpg", NULL, "1", "3");
#
#
INSERT INTO `productos_fotos` VALUES ("113", "2015-06-25 12:23:18", "0000-00-00 00:00:00", NULL, "1", "0", "30", "profot_1435252998_405x720.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("115", "2015-06-25 12:45:54", "0000-00-00 00:00:00", NULL, "1", "0", "31", "profot_1435254353_720x540.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("116", "2015-06-25 12:46:15", "0000-00-00 00:00:00", NULL, "1", "0", "31", "profot_1435254375_720x540.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("117", "2015-06-25 12:46:32", "0000-00-00 00:00:00", NULL, "1", "0", "31", "profot_1435254391_720x540.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("118", "2015-06-25 12:46:51", "0000-00-00 00:00:00", NULL, "1", "0", "31", "profot_1435254411_540x720.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("132", "2015-10-22 10:57:21", "0000-00-00 00:00:00", NULL, "1", "0", "36", "profot_1445529440_1024x768.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("133", "2015-10-22 10:58:53", "0000-00-00 00:00:00", NULL, "1", "0", "37", "profot_1445529529_2048x1536.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("134", "2015-10-22 11:00:32", "0000-00-00 00:00:00", NULL, "1", "0", "38", "profot_1445529630_1600x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("135", "2015-10-22 11:01:15", "0000-00-00 00:00:00", NULL, "1", "0", "39", "profot_1445529673_1600x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("136", "2015-10-22 11:02:36", "0000-00-00 00:00:00", NULL, "1", "0", "40", "profot_1445529754_1428x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("137", "2015-10-22 11:12:38", "0000-00-00 00:00:00", NULL, "1", "0", "41", "profot_1445530357_1024x768.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("138", "2015-10-22 11:13:52", "0000-00-00 00:00:00", NULL, "1", "0", "42", "profot_1445530430_1600x1019.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("139", "2015-10-22 11:15:33", "0000-00-00 00:00:00", NULL, "1", "0", "43", "profot_1445530530_1428x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("140", "2015-10-22 11:16:07", "0000-00-00 00:00:00", NULL, "1", "0", "44", "profot_1445530564_1717x1462.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("141", "2015-10-22 11:17:19", "0000-00-00 00:00:00", NULL, "1", "0", "45", "profot_1445530637_1600x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("142", "2015-10-22 11:19:54", "0000-00-00 00:00:00", NULL, "1", "0", "47", "profot_1445530792_1600x1200.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("143", "2015-10-22 14:25:52", "0000-00-00 00:00:00", NULL, "1", "0", "50", "profot_1445541951_921x589.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("144", "2015-10-22 14:28:12", "0000-00-00 00:00:00", NULL, "1", "0", "51", "profot_1445542092_921x589.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("148", "2015-10-22 14:36:35", "0000-00-00 00:00:00", NULL, "1", "0", "52", "profot_1445542595_521x261.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("149", "2015-10-22 14:37:14", "0000-00-00 00:00:00", NULL, "1", "0", "53", "profot_1445542634_400x257.jpg", NULL, "1", NULL);
#
#
INSERT INTO `productos_fotos` VALUES ("150", "2015-10-22 14:39:08", "0000-00-00 00:00:00", NULL, "1", "0", "54", "profot_1445542748_1024x615.jpg", NULL, "1", NULL);
#
#
DROP TABLE IF EXISTS `productos_fotos_grupos`;
#
#
CREATE TABLE `productos_fotos_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `id_item` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_fotos_tipos`;
#
#
CREATE TABLE `productos_fotos_tipos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_fotos_tipos` VALUES ("6", "2015-10-16 10:09:51", "0000-00-00 00:00:00", NULL, "1", "3D", "0");
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
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_grupos` VALUES ("1", "2015-10-16 14:53:36", "2015-10-16 16:16:22", NULL, "1", "Proyectos Generales", "<p>fsdf</p>\n", NULL, "0", "1");
#
#
INSERT INTO `productos_grupos` VALUES ("2", "2015-10-16 10:08:18", "2015-10-16 16:16:14", NULL, "1", "Proyectos Corporativos", "<p>DFDGHD KGKGJKGjgkfkf k gkgkg</p>\n", NULL, "0", "1");
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
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `codigo` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  `descripcion` longtext,
  `moneda` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `oferta` varchar(80) DEFAULT NULL,
  `precio_oferta` float DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `fecha` varchar(80) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_items` VALUES ("39", "2015-10-22 11:00:47", "2015-10-22 18:22:27", NULL, "1", "Veredas ", NULL, "1", "9", "<p>&nbsp;</p>\n\n<p>Ejecutamos :</p>\n\n<p>Veredas</p>\n\n<p>Vernas centrales</p>\n\n<p>Pasacalles</p>\n\n<p>Rampa Peatonales</p>\n\n<p>Vias que sirven para el transito peatonal en zonas urbanas y rurales</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("36", "2015-10-22 10:56:58", "2015-10-22 18:13:56", NULL, "1", "Edificaciones", NULL, "1", "9", "<p>​</p>\n\n<p>Una nuestras caracter&iacute;sticas b&aacute;sicas de las&nbsp;<strong>edificaci&oacute;nes</strong>&nbsp; que ejecutamos&nbsp;es que es nuestras obras&nbsp;se construyen de modo con calidad en el&nbsp;tiempo establecido,&nbsp;siendo estas siempre producto de la inventiva y de la ejecuci&oacute;n humana. Nuestras&nbsp;edificaciones tienen un&nbsp;sistema de planificaci&oacute;n y ejecuci&oacute;n.</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("37", "2015-10-22 10:58:25", "2015-10-22 18:18:31", NULL, "1", "Saneamiento", NULL, "1", "9", "<p>&nbsp;</p>\n\n<p>Ejecutamos infraestructuras para el&nbsp;transporte del agua&nbsp;potable y agua residual, de forma que su evacuaci&oacute;n produzca el m&iacute;nimo impacto en el medio ambiente.</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("43", "2015-10-22 11:14:48", "0000-00-00 00:00:00", NULL, "1", "Demoliciones", NULL, "1", "9", NULL, NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("41", "2015-10-22 11:12:13", "2015-10-22 18:27:37", NULL, "1", "Almacenes", NULL, "1", "9", "<p>&nbsp;</p>\n\n<p>Nuestra&nbsp;edificacion de&nbsp;<strong>almacenes</strong>&nbsp;es una tarea compleja debido a la multiplicidad de factores que inciden en la ejecucion.</p>\n\n<p>Siendo&nbsp;sumamente importante el an&aacute;lisis de nuestros valores de la actividad media, m&iacute;nima y m&aacute;xima.</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("42", "2015-10-22 11:13:18", "2015-10-22 18:31:14", NULL, "1", "Cimentaciones", NULL, "1", "9", "<p>&nbsp;</p>\n\n<p>Nuestras <strong>cimentaciones</strong>&nbsp;sirven de sustentaci&oacute;n al edificio; se ejecutan proyectos&nbsp;teniendo en consideraci&oacute;n varios factores tales como la composici&oacute;n,&nbsp;resistencia del terreno&nbsp;y especificaciones del cliente</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("44", "2015-10-22 11:15:43", "2015-10-22 18:08:36", NULL, "1", "Viales y Astafaltado", NULL, "1", "9", "<p>Cumplimos&nbsp;con todas las especificaciones,&nbsp;que se utilizan para la construccion&nbsp;de superficies&nbsp;de rodamiento y bases que se realiza para la contruccion de pavimentos.</p>\n\n<p>Desarrollamos y ejecutamos el&nbsp;<strong>Asfaltado&nbsp;</strong>en el plazo convenido y establecido, como en los proyectos que se ejecutaron&nbsp;en Lima en la&nbsp;Avenida Materiales , realizado para nuestro cliente Proter &amp; Gamblle&nbsp;entre otros.</p>\n\n<p>&nbsp;</p>\n\n<p>Reparamiento</p>\n\n<p>Ejecucion</p>\n\n<p>Ampliacion</p>\n\n<p>Mejoramiento</p>\n\n<p>Obras viales entre zonas rurales y urbanas</p>\n\n<p>&nbsp;</p>\n", NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("51", "2015-10-22 14:27:53", "0000-00-00 00:00:00", NULL, "1", "Techo Propio", NULL, "2", "10", NULL, NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("53", "2015-10-22 14:37:01", "0000-00-00 00:00:00", NULL, "1", "Puentes", NULL, "2", "10", NULL, NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("52", "2015-10-22 14:33:02", "0000-00-00 00:00:00", NULL, "1", "Mercados", NULL, "2", "10", NULL, NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
INSERT INTO `productos_items` VALUES ("54", "2015-10-22 14:38:49", "0000-00-00 00:00:00", NULL, "1", "Colegios", NULL, "2", "10", NULL, NULL, NULL, NULL, NULL, "1", "0", NULL, NULL);
#
#
DROP TABLE IF EXISTS `productos_items_tipos`;
#
#
CREATE TABLE `productos_items_tipos` (
  `id_productos_tipos` int(10) NOT NULL DEFAULT '0',
  `id_productos_items` int(10) NOT NULL DEFAULT '0',
  `orden` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_productos_tipos`,`id_productos_items`),
  KEY `id_productos_tipos` (`id_productos_tipos`),
  KEY `id_productos_items` (`id_productos_items`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_marcas`;
#
#
CREATE TABLE `productos_marcas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_ptoventa`;
#
#
CREATE TABLE `productos_ptoventa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_status`;
#
#
CREATE TABLE `productos_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_stock`;
#
#
CREATE TABLE `productos_stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `codigo` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `chasis` varchar(80) DEFAULT NULL,
  `motor` varchar(80) DEFAULT NULL,
  `id_color` int(10) DEFAULT NULL,
  `transmision` varchar(80) DEFAULT NULL,
  `id_carroceria` int(10) DEFAULT NULL,
  `ubicacion` varchar(80) DEFAULT NULL,
  `id_ptoventa` int(10) DEFAULT NULL,
  `id_status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `productos_subfiltros`;
#
#
CREATE TABLE `productos_subfiltros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `id_filtro` int(10) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `ver_home` varchar(80) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `web` int(10) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `productos_subgrupos` VALUES ("9", "2015-10-16 09:42:40", "2015-10-22 10:44:45", NULL, "1", "Obras", NULL, "0", "1", "1");
#
#
INSERT INTO `productos_subgrupos` VALUES ("10", "2015-10-22 14:23:15", "0000-00-00 00:00:00", NULL, "1", "Obras", NULL, "0", "1", "2");
#
#
DROP TABLE IF EXISTS `productos_tipos`;
#
#
CREATE TABLE `productos_tipos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `recomendar`;
#
#
CREATE TABLE `recomendar` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre_amigo` varchar(80) DEFAULT NULL,
  `email_amigo` varchar(80) DEFAULT NULL,
  `nombre_usuario` varchar(80) DEFAULT NULL,
  `email_usuario` varchar(80) DEFAULT NULL,
  `nombre_pagina` varchar(80) DEFAULT NULL,
  `url_pagina` varchar(80) DEFAULT NULL,
  `foto_pagina` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `recomendar` VALUES ("7", "2015-07-01 19:35:51", "2015-07-01 19:35:51", NULL, "1", "2015-07-01 19:35:51", "guille", "guillermolozan@gmail.com", NULL, NULL, "Nering", "http://nering.net/desarrollo/", NULL);
#
#
DROP TABLE IF EXISTS `servicios_items`;
#
#
CREATE TABLE `servicios_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(250) DEFAULT NULL,
  `resumen` longtext,
  `texto` longtext,
  `pdf` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  FULLTEXT KEY `resumen` (`resumen`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `servicios_items` VALUES ("5", "2015-10-14 22:29:38", "0000-00-00 00:00:00", NULL, "1", "OBRAS", NULL, "<p><em>Contamos con la experiencia en&nbsp;construcci&oacute;n de:</em></p>\n\n<p><em><strong><img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Puentes&nbsp;<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Coliseos<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Obras Viales (Autopistas, autov&iacute;as, rutas, carreteras, etc.)<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Plantas Procesadoras<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Obras hidr&aacute;ulicas.<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Edificios - Oficinas<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Modulos de&nbsp;Viviendas<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Infraestructura Arquitectonica<br />\n<img src=\"http://www.ecassa.com.ar/img/bullets/check.png\" style=\"float:left; height:10px; margin:0px; width:10px\" />&nbsp;Obras civiles en general</strong></em></p>\n\n<p>&nbsp;</p>\n", NULL, "1");
#
#
INSERT INTO `servicios_items` VALUES ("4", "2015-10-23 10:09:27", "2015-10-23 10:09:27", NULL, "1", "INMOBILIARIA", NULL, "<p><em>Gerenciamos proyectos inmobiliarios aportando nuestros valores de Cumplimiento, Calidad, Seriedad y Eficiencia en todos los segmentos del mercado, cuidando satisfacer las necesidades de los diferentes mercados que atendemos, desarrollando siempre una arquitectura de primer nivel.</em></p>\n\n<p>&nbsp;</p>\n", "", "1");
#
#
DROP TABLE IF EXISTS `solicitudes`;
#
#
CREATE TABLE `solicitudes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_grupo` int(10) DEFAULT NULL,
  `id_emails_grupos` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `speeches`;
#
#
CREATE TABLE `speeches` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `textos_grupos`;
#
#
CREATE TABLE `textos_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `textos_grupos` VALUES ("1", "2013-05-05 23:39:00", "2013-05-05 23:40:33", NULL, "1", "Empresa", "<p> </p>", NULL, NULL, "0");
#
#
INSERT INTO `textos_grupos` VALUES ("2", "2013-05-05 23:39:24", "0000-00-00 00:00:00", NULL, "1", "Servicios", "<p> </p>", NULL, NULL, "0");
#
#
DROP TABLE IF EXISTS `textos_items`;
#
#
CREATE TABLE `textos_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `textos_items` VALUES ("1", "2013-05-05 22:30:03", "0000-00-00 00:00:00", NULL, "1", "Prueba", "<p>prueba prueba</p>\n<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `textos_items` VALUES ("2", "2013-05-05 22:30:38", "0000-00-00 00:00:00", NULL, "1", "prueba 2", "<div align=\"left\">prueba prueba prueba&nbsp; prueba prueba prueb2 </div><p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `textos_items` VALUES ("3", "2013-05-05 23:46:58", "2013-05-08 16:49:17", NULL, "1", "Ingeniería y Edificaciones", "<p>Amplia experiencia en la construcción de oficinas, colegios, coliseos, edificios, módulos de vivienda, infraestructura arquitectónica, Planta procesadora y&nbsp;&nbsp; cercos perimétricos.</p>\n<p> </p>", NULL, NULL, "1", "2");
#
#
INSERT INTO `textos_items` VALUES ("12", "2013-05-08 16:50:55", "0000-00-00 00:00:00", NULL, "1", "Inmobiliaria", "<p>Gerenciamiento de proyectos inmobiliarios. Imponiendo valores de Cumplimiento, Calidad, Seriedad y Eficiencia Desarrollando los mejores productos inmobiliarios en todos los segmentos del mercado, cuidando siempre que nuestros productos satisfagan todas las necesidades de los diferentes mercados que atenderemos. Siempre desarrollando una arquitectura de primer nivel.</p>\n<p> </p>", NULL, NULL, "1", "2");
#
#
INSERT INTO `textos_items` VALUES ("4", "2013-05-05 23:47:11", "2013-05-08 16:49:57", NULL, "1", "Infraestructura  Viales", "<p>Experiencia en la construcción de pistas, veredas, puentes, trochas, caminos.</p>\n<p> </p>", NULL, NULL, "1", "2");
#
#
INSERT INTO `textos_items` VALUES ("11", "2013-05-08 16:50:29", "0000-00-00 00:00:00", NULL, "1", "Obras de Saneamiento", "<p>Hemos realizado satisfactoriamente instalaciones domiciliarias de agua y desagüe, redes principales, redes domiciliares de agua y desagüe, construcción de tanques elevados y pozos de agua.</p>\n<p> </p>", NULL, NULL, "1", "2");
#
#
INSERT INTO `textos_items` VALUES ("5", "2013-05-05 23:47:39", "2013-05-08 16:11:04", NULL, "1", "Misión", "<p>&nbsp;“Crear infraestructura de calidad que mejore\nla calidad de vida del hombre y del planeta sin dañarlo, generando valor a\nnuestros clientes y a nuestros accionistas”</p>", NULL, NULL, "1", "1");
#
#
INSERT INTO `textos_items` VALUES ("6", "2013-05-05 23:48:05", "2013-05-08 16:11:11", NULL, "1", "Visión", "<p>&nbsp;<strong>“</strong>Ser la empresa\nconstructora más productiva del mundo&nbsp;en\nsu especialidad que construya soluciones óptimas que generen valor a nuestros\nclientes, a nuestros accionistas y a la sociedad en su conjunto, para lograr\nque en todo el planeta, directa o indirectamente, donde haya una FAMILIA, un\nHOGAR… haya una vivienda”</p>", NULL, NULL, "1", "1");
#
#
INSERT INTO `textos_items` VALUES ("7", "2013-05-05 23:48:18", "2013-05-08 16:10:33", NULL, "1", "Política de Calidad", "<p>En NERING nuestro compromiso con la Calidad Total es:</p>\n<ul>\n	<li>Deleitar a nuestros clientes</li>\n	<li>Capacitación e Innovación permanente</li>\n	<li>Trabajo en equipo</li>\n	<li>Preservación de nuestro medio ambiente</li>\n	<li>Mantenimiento constante de nuestros activos</li>\n	<li>Transparencia</li>\n</ul>", NULL, NULL, "1", "1");
#
#
INSERT INTO `textos_items` VALUES ("8", "2013-05-08 16:25:17", "0000-00-00 00:00:00", NULL, "1", "Política Corporativa", "<ul>\n	<li>Meritocracia</li>\n	<li>Integración Humana</li>\n	<li>Compromiso Social</li>\n	<li>Eficacia</li>\n	<li>Equidad</li>\n	<li>Eficiencia</li>\n	<li>Entregar un poquito más que lo demás</li>\n	<li>Entendimiento exhaustivo de los detalles</li>\n	<li>Cumplimiento responsable</li>\n	<li>Ante nuestros colaboradores: beneficio de la duda</li>\n	<li>Ante nuestros clientes: prometer poco y entregar mas de lo que esperan</li>\n	<li>Ante el inversionista: ante la duda informar</li>\n</ul>\n<p> </p>", NULL, NULL, "1", "1");
#
#
INSERT INTO `textos_items` VALUES ("9", "2013-05-08 16:35:57", "0000-00-00 00:00:00", NULL, "1", "Política Laboral", "<p>falta texto...</p>\n<p> </p>", NULL, NULL, "1", "1");
#
#
INSERT INTO `textos_items` VALUES ("10", "2013-05-08 16:36:51", "0000-00-00 00:00:00", NULL, "1", "Política de Responsabilidad Social ", "<p>falta texto...</p>\n<p> </p>", NULL, NULL, "1", "1");
#
#
DROP TABLE IF EXISTS `textos_subgrupos`;
#
#
CREATE TABLE `textos_subgrupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `usuarios`;
#
#
CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `apellidos_paterno` varchar(80) DEFAULT NULL,
  `apellidos_materno` varchar(80) DEFAULT NULL,
  `genero` varchar(80) DEFAULT NULL,
  `dni` varchar(80) DEFAULT NULL,
  `fecha_nacimiento` datetime DEFAULT '0000-00-00 00:00:00',
  `direccion` varchar(80) DEFAULT NULL,
  `departamento` int(10) DEFAULT NULL,
  `provincia` int(10) DEFAULT NULL,
  `distrito` int(10) DEFAULT NULL,
  `forma_contacto` varchar(80) DEFAULT NULL,
  `telefono_casa` varchar(80) DEFAULT NULL,
  `telefono_oficina` varchar(80) DEFAULT NULL,
  `telefono_celular` varchar(80) DEFAULT NULL,
  `promociones` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2012-12-03 08:54:52", "0000-00-00 00:00:00", NULL, "1", "administrador", "nering", NULL);
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
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `ventas_cuentas`;
#
#
CREATE TABLE `ventas_cuentas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `relays` float DEFAULT NULL,
  `enabled` varchar(80) DEFAULT NULL,
  `time_0` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `ventas_items`;
#
#
CREATE TABLE `ventas_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_cliente` int(10) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `id_item` int(10) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `id_status` int(10) DEFAULT NULL,
  `id_canal` int(10) DEFAULT NULL,
  `id_cuenta_email` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `ventas_mensajes`;
#
#
CREATE TABLE `ventas_mensajes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `id_grupo` int(10) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `ventas_status`;
#
#
CREATE TABLE `ventas_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `web_config`;
#
#
CREATE TABLE `web_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `proyecto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
