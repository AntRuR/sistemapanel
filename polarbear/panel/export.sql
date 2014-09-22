DROP TABLE IF EXISTS `banner_departamentos_fotos`;
#
#
CREATE TABLE `banner_departamentos_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `file` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `banner_servicios_fotos`;
#
#
CREATE TABLE `banner_servicios_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `file` varchar(150) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
#
#
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
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners` VALUES ("1", "2011-12-06 01:32:24", "2013-07-10 18:47:49", NULL, "1", "header_logo", NULL, "ban_1323153142.jpg", "/", NULL, "1");
#
#
INSERT INTO `banners` VALUES ("2", "2011-12-06 02:57:27", "2011-12-06 02:57:27", NULL, "1", "header_telefono", NULL, "ban_1323158244.jpg", NULL, NULL, "1");
#
#
DROP TABLE IF EXISTS `banners2_fotos`;
#
#
CREATE TABLE `banners2_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `name` varchar(20) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners2_fotos` VALUES ("1", "2011-12-18 10:38:31", "0000-00-00 00:00:00", NULL, "1", NULL, "Organizaciones Sindicales Nacionales", "1");
#
#
INSERT INTO `banners2_fotos` VALUES ("2", "2011-12-18 10:39:30", "0000-00-00 00:00:00", NULL, "1", NULL, "Organizaciones Sindicales Internacionales", "1");
#
#
INSERT INTO `banners2_fotos` VALUES ("3", "2011-12-18 10:40:40", "0000-00-00 00:00:00", NULL, "1", NULL, "Colaboradores", "1");
#
#
INSERT INTO `banners2_fotos` VALUES ("4", "2011-12-18 10:40:55", "0000-00-00 00:00:00", NULL, "1", NULL, "Federación Sindical Mundial", "1");
#
#
DROP TABLE IF EXISTS `banners2_fotos_fotos`;
#
#
CREATE TABLE `banners2_fotos_fotos` (
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
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("2", "2011-12-18 10:50:31", "2011-12-18 10:56:16", NULL, "1", "1", "banfot2_1324223430_83x100.jpg", "http://www.fentap.org.pe", NULL, "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("3", "2011-12-18 10:50:38", "2011-12-18 10:56:08", NULL, "1", "1", "banfot2_1324223437_140x51.jpg", "http://www.suttp.org.pe", NULL, "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("4", "2011-12-18 10:50:46", "2011-12-18 10:55:53", NULL, "1", "1", "banfot2_1324223445_179x154.jpg", NULL, "http://luzyfuerza.pe", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("5", "2011-12-18 10:50:57", "2011-12-18 10:55:37", NULL, "1", "1", "banfot2_1324223457_276x282.jpg", NULL, "http://www.ftccperu.com/ftccp", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("6", "2011-12-18 10:54:54", "2011-12-18 10:55:28", NULL, "1", "1", "banfot2_1324223694_266x324.jpg", NULL, "http://www.sutep.org.pe", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("7", "2011-12-18 10:55:02", "2011-12-18 10:55:18", NULL, "1", "1", "banfot2_1324223702_412x191.jpg", NULL, "http://www.fenupetrol.org.pe", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("8", "2011-12-18 11:03:49", "2011-12-18 11:07:06", NULL, "1", "2", "banfot2_1324224229_720x720.jpg", NULL, "http://www.aflcio.org", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("9", "2011-12-18 11:03:56", "2011-12-18 11:06:50", NULL, "1", "2", "banfot2_1324224236_165x50.jpg", NULL, "http://www.cta.org.ar", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("10", "2011-12-18 11:04:03", "2011-12-18 11:06:41", NULL, "1", "2", "banfot2_1324224243_86x70.jpg", NULL, "http://www.cut.org.co", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("11", "2011-12-18 11:04:10", "2011-12-18 11:06:33", NULL, "1", "2", "banfot2_1324224250_117x105.jpg", NULL, "http://www.cutchile.cl", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("12", "2011-12-18 11:05:36", "2011-12-18 11:06:24", NULL, "1", "2", "banfot2_1324224336_200x200.gif", NULL, "http://www.cut.org.br", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("13", "2011-12-18 11:05:48", "2011-12-18 11:06:09", NULL, "1", "2", "banfot2_1324224348_301x56.jpg", NULL, "http://www.ccoo.es/csccoo", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("18", "2011-12-18 11:20:29", "2012-05-14 07:54:53", NULL, "1", "3", "banfot2_1324225229_94x50.jpg", NULL, "http://www.iesiperu.org.pe/", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("31", "2012-05-14 08:12:48", "2012-05-14 10:43:12", NULL, "1", "3", "banfot2_1337001167_240x218.jpg", " Confederación de Nacional Sindicatos de Noruega", "http://www.lo.no", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("33", "2012-05-14 10:48:12", "2012-05-14 10:48:18", NULL, "1", "3", "banfot2_1337010492_203x91.jpg", NULL, "www.andalucia.ccoo.es", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("34", "2012-05-14 10:50:13", "2012-05-14 10:50:26", NULL, "1", "3", "banfot2_1337010613_158x83.jpg", NULL, "www.ccoo.es", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("35", "2012-05-14 10:52:10", "2012-05-14 10:53:46", NULL, "1", "3", "banfot2_1337010729_223x71.jpg", NULL, "http://www.sttk.fi/fi-FI/", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("36", "2012-05-14 10:54:36", "2012-05-14 10:54:44", NULL, "1", "3", "banfot2_1337010876_117x60.jpg", NULL, "www.fnv.nl", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("37", "2012-05-14 10:55:59", "2012-05-14 10:57:05", NULL, "1", "3", "banfot2_1337010959_304x78.jpg", NULL, "http://www.fgtb.be/web/guest/home-fr", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("29", "2011-12-18 11:22:44", "2011-12-18 11:23:13", NULL, "1", "4", "banfot2_1324225364_173x150.jpg", NULL, "http://www.fsm-america.org", "1");
#
#
INSERT INTO `banners2_fotos_fotos` VALUES ("30", "2011-12-18 11:22:55", "2011-12-18 11:23:05", NULL, "1", "4", "banfot2_1324225375_138x108.jpg", NULL, "http://www.wftucentral.org/?language=es", "1");
#
#
DROP TABLE IF EXISTS `banners_boletin`;
#
#
CREATE TABLE `banners_boletin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `fichero` varchar(150) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `url` varchar(80) DEFAULT NULL,
  `dimensiones` varchar(80) DEFAULT NULL,
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
  `name` varchar(20) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos` VALUES ("1", "2011-12-06 01:12:51", "2012-05-14 07:40:18", NULL, "1", "banner_main", "Banner Principal", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("122", "2013-08-03 17:03:51", "2014-09-09 20:16:03", NULL, "1", "banner_enlaces", "clientes", "1");
#
#
INSERT INTO `banners_fotos` VALUES ("123", "2014-09-09 20:17:03", "2014-09-09 20:17:45", NULL, "1", "banner_enlaces2", "Teléfonos", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=225 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("152", "2013-08-03 16:54:34", "0000-00-00 00:00:00", NULL, "1", "6", "banfot_1375566873_223x118.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("56", "2011-12-06 09:22:21", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1323181341_202x93.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("51", "2011-12-06 09:21:31", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1323181290_202x237.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("52", "2011-12-06 09:21:40", "0000-00-00 00:00:00", NULL, "1", "2", "banfot_1323181299_202x237.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("53", "2011-12-06 09:22:04", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1323181324_202x93.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("130", "2012-06-06 12:50:08", "0000-00-00 00:00:00", NULL, "1", "27", "banfot_1339005001_199x449.jpg", NULL, NULL, "4");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("43", "2011-12-06 06:03:05", "0000-00-00 00:00:00", NULL, "1", "8", "banfot_1323169384_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("44", "2011-12-06 06:03:10", "0000-00-00 00:00:00", NULL, "1", "8", "banfot_1323169390_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("45", "2011-12-06 06:03:17", "0000-00-00 00:00:00", NULL, "1", "8", "banfot_1323169396_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("24", "2011-12-06 02:52:37", "0000-00-00 00:00:00", NULL, "1", "9", "banfot_1323157957_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("25", "2011-12-06 02:52:42", "0000-00-00 00:00:00", NULL, "1", "9", "banfot_1323157962_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("26", "2011-12-06 02:52:49", "0000-00-00 00:00:00", NULL, "1", "9", "banfot_1323157967_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("54", "2011-12-06 09:22:10", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1323181330_202x93.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("55", "2011-12-06 09:22:15", "0000-00-00 00:00:00", NULL, "1", "3", "banfot_1323181334_202x93.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("46", "2011-12-06 06:03:21", "0000-00-00 00:00:00", NULL, "1", "8", "banfot_1323169401_245x110.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("129", "2012-05-17 04:55:21", "2012-05-17 04:55:35", NULL, "1", "7", "banfot_1337248519_598x630.jpg", NULL, "http://dnec-cgtp.blogspot.com/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("81", "2012-01-26 08:23:23", "0000-00-00 00:00:00", NULL, "1", "73", "banfot_1327584202_750x243.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("64", "2011-12-16 07:50:18", "0000-00-00 00:00:00", NULL, "1", "74", "banfot_1324039813_275x183.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("65", "2011-12-16 07:50:37", "0000-00-00 00:00:00", NULL, "1", "75", "banfot_1324039836_204x127.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("66", "2011-12-16 07:50:50", "0000-00-00 00:00:00", NULL, "1", "76", "banfot_1324039850_195x259.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("67", "2011-12-16 07:51:06", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1324039865_269x187.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("93", "2012-01-30 10:54:41", "2012-03-01 17:12:35", NULL, "1", "79", "banfot_1327938880_492x210.jpg", NULL, "http://www.ccoo.es", "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("74", "2011-12-26 05:51:58", "0000-00-00 00:00:00", NULL, "1", "17", "banfot_1324896711_800x558.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("75", "2011-12-26 05:55:40", "0000-00-00 00:00:00", NULL, "1", "19", "banfot_1324896933_800x568.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("76", "2011-12-26 05:56:46", "0000-00-00 00:00:00", NULL, "1", "18", "banfot_1324896999_640x480.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("77", "2012-01-12 05:27:09", "0000-00-00 00:00:00", NULL, "1", "20", "banfot_1326363848_640x480.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("78", "2012-01-12 05:43:37", "0000-00-00 00:00:00", NULL, "1", "22", "banfot_1326364836_480x640.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("79", "2012-01-12 05:47:20", "0000-00-00 00:00:00", NULL, "1", "23", "banfot_1326365059_640x480.jpg", NULL, NULL, "3");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("115", "2012-02-22 10:13:57", "0000-00-00 00:00:00", NULL, "1", "74", "banfot_1329923636_439x613.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("111", "2012-02-22 10:12:38", "0000-00-00 00:00:00", NULL, "1", "75", "banfot_1329923557_419x314.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("85", "2012-01-26 08:41:02", "0000-00-00 00:00:00", NULL, "1", "73", "banfot_1327585262_750x243.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("107", "2012-02-22 09:51:32", "0000-00-00 00:00:00", NULL, "1", "76", "banfot_1329922292_113x159.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("103", "2012-02-22 08:16:13", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1329916572_245x110.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("94", "2012-01-30 10:54:49", "2012-03-01 17:21:01", NULL, "1", "79", "banfot_1327938888_237x120.jpg", NULL, "http://www2.ccoo.es/pazysolidaridadandalucia/", "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("89", "2012-01-26 08:47:16", "0000-00-00 00:00:00", NULL, "1", "73", "banfot_1327585635_750x243.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("95", "2012-01-30 10:54:54", "0000-00-00 00:00:00", NULL, "1", "79", "banfot_1327938894_523x299.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("104", "2012-02-22 08:16:26", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1329916586_245x110.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("106", "2012-02-22 08:21:10", "0000-00-00 00:00:00", NULL, "1", "76", "banfot_1329916869_245x221.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("109", "2012-02-22 10:11:49", "0000-00-00 00:00:00", NULL, "1", "76", "banfot_1329923508_584x603.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("110", "2012-02-22 10:12:05", "0000-00-00 00:00:00", NULL, "1", "76", "banfot_1329923524_424x583.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("112", "2012-02-22 10:12:45", "0000-00-00 00:00:00", NULL, "1", "75", "banfot_1329923565_417x286.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("113", "2012-02-22 10:12:56", "0000-00-00 00:00:00", NULL, "1", "75", "banfot_1329923575_390x208.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("114", "2012-02-22 10:13:14", "0000-00-00 00:00:00", NULL, "1", "75", "banfot_1329923594_245x110.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("116", "2012-02-22 10:14:06", "0000-00-00 00:00:00", NULL, "1", "74", "banfot_1329923646_407x596.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("117", "2012-02-22 10:14:20", "0000-00-00 00:00:00", NULL, "1", "74", "banfot_1329923659_426x586.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("118", "2012-02-22 10:14:39", "0000-00-00 00:00:00", NULL, "1", "74", "banfot_1329923678_390x561.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("119", "2012-02-22 10:15:34", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1329923734_180x276.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("120", "2012-02-22 10:15:51", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1329923750_419x560.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("121", "2012-02-22 10:16:27", "0000-00-00 00:00:00", NULL, "1", "78", "banfot_1329923786_424x585.jpg", NULL, NULL, "11");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("122", "2012-05-14 07:30:40", "2012-05-14 07:33:09", NULL, "1", "24", "banfot_1336998639_879x365.jpg", NULL, NULL, "4");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("123", "2012-05-14 07:32:33", "2012-05-14 07:33:12", NULL, "1", "24", "banfot_1336998751_641x243.jpg", NULL, NULL, "4");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("137", "2013-06-27 11:04:43", "2013-07-11 18:55:56", NULL, "0", "1", "banfot_1372349081_983x347.jpg", "DECLAMACION CON ARTE Y POESIA A LA CIUDAD DE POMABAMBA EN SUS 152 ANIVERSARIO", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("142", "2013-06-27 11:09:50", "2013-07-11 18:54:18", NULL, "1", "1", "banfot_1372349389_983x347.jpg", "EXPRESION DE DANZAS EN POMABAMBA POR SUS 152 ANIVERSARIO", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("144", "2013-06-27 11:10:50", "2013-07-11 18:53:53", NULL, "1", "1", "banfot_1372349449_983x347.jpg", "PASEO DEL PABELLON NACIONAL DEL PERU", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("147", "2013-06-27 11:12:30", "2013-07-11 18:53:11", NULL, "1", "1", "banfot_1372349549_983x347.jpg", "POMABAMBA Y SUS ATRACTIVOS LUGARES TURISTICOS", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("151", "2013-08-03 16:53:49", "0000-00-00 00:00:00", NULL, "1", "6", "banfot_1375566829_223x118.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("153", "2013-08-03 16:54:41", "0000-00-00 00:00:00", NULL, "1", "6", "banfot_1375566881_223x118.jpg", NULL, NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("161", "2013-08-06 22:08:01", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375844881_225x91.jpg", NULL, "http://www.essalud.gob.pe/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("160", "2013-08-06 22:05:59", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375844758_225x91.jpg", NULL, "http://www.sunat.gob.pe/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("163", "2013-08-06 22:12:40", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375845160_225x91.jpg", NULL, "http://www.reniec.gob.pe", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("164", "2013-08-06 22:22:17", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375845737_225x91.jpg", NULL, "http://www.sunarp.gob.pe/", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("165", "2013-08-06 22:27:48", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375846068_225x91.jpg", NULL, "http://www.peru.gob.pe/ ", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("175", "2013-08-29 15:29:59", "2013-08-29 15:31:06", NULL, "1", "122", "banfot_1377808198_270x270.jpg", NULL, "http://www.mincetur.gob.pe", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("168", "2013-08-06 22:36:04", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375846564_225x91.jpg", NULL, "http://www.indeci.gob.pe/ ", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("169", "2013-08-06 22:40:27", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375846827_225x90.jpg", NULL, "http://www.mintra.gob.pe/ ", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("170", "2013-08-06 22:42:32", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375846952_225x91.jpg", NULL, "http://www.promperu.gob.pe", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("171", "2013-08-06 22:46:32", "0000-00-00 00:00:00", NULL, "1", "122", "banfot_1375847191_225x91.jpg", NULL, "http://www.camaralima.org.pe", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("185", "2013-09-27 17:34:47", "2013-09-27 17:37:18", NULL, "1", "122", "banfot_1380321287_463x109.jpg", "Ministerio de Educacion", "http://www.minedu.gob.pe/inicio.php", "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("193", "2013-10-16 11:26:47", "2013-10-16 11:34:54", NULL, "1", "1", "banfot_1381940806_983x347.jpg", "CONTRIBUYENTE PUNTUAL GANA MOTO LINEAL EN SORTEO DE OCTUBRE - !!FELICIDADES¡¡", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("194", "2013-10-18 08:41:24", "2013-10-18 08:44:21", NULL, "1", "1", "banfot_1382103683_983x347.jpg", "SE INICIO EL GRAN CAMPEONATO DE FUTBOL INTERCOMUNIDADES 2013", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("195", "2013-10-18 12:53:55", "2013-10-18 12:57:57", NULL, "1", "1", "banfot_1382118834_983x347.jpg", "ENTREGA DE COCINAS Y BALON DE GAS POR GESTION AL MEM Y EL PROGRAMA \"COCINA PERU\"", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("196", "2013-10-22 16:56:48", "2013-10-22 17:00:43", NULL, "1", "1", "banfot_1382479008_983x347.jpg", "Municipalidad de Pomabamba Celebró el Dia de la Persona con Discapacidad.", "http://www.minsa.gob.pe/portalminsa/efemerides/discapacitado/discapacitado.htm", "1");
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
  `page` int(10) NOT NULL DEFAULT '1',
  `foto` varchar(80) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_actividades` VALUES ("41", "2013-07-10 19:11:20", "0000-00-00 00:00:00", NULL, "1", "2013-07-10 19:10:11", "Sin burbuja inmobiliaria", "<p><strong>Hoy la demanda de viviendas asciende a 1,9 millones mientras se construyen 50.000 al año</strong></p>\n<p>Considerado Perú como uno de los países en Latinoamérica con mayor crecimiento, esto se explica también en el mayor dinamismo de su sector inmobiliario durante los últimos años. El titular delMinisterio de Vivienda, René Cornejo, estima que el sector de la construcción crecerá más del 15% en 2013. Hoy la demanda asciende a 1,9 millones de viviendas y solo se construyen 50.000 viviendas por año, de la cuales lamitad se concentran en Lima, y el resto, en las 35 ciudades del interior del país, por lo que la posibilidad de una burbuja inmobiliaria queda descartada.<br /><br />Sin embargo, a pesar de su buen crecimiento, Guido Valdivia, director ejecutivo del Instituto Invertir, señala que aún existen muchas trabas que ralentizan el ritmo de construcción. Entre ellas, la restricción de servicios o la falta de planeamientos de suelo y urbanismo por parte de las municipalidades. Un informe reciente de la consultora inmobiliaria Plusvalía señala que el promedio de la velocidad de venta de las viviendas es del 75%, mientras el ritmo de construcción es solo del 50%.</p>\n<p> </p>", "1", NULL, NULL);
#
#
INSERT INTO `blog_actividades` VALUES ("42", "2013-07-10 19:14:41", "0000-00-00 00:00:00", NULL, "1", "2013-07-10 19:13:42", "Sector inmobiliario crecerá 20% este año y mantendrá estables las tasas de inter", "<p>Recientemente el BCP lanzó su crédito hipotecario Planilla para trabajadores dependientes que perciban ingresos de S/. 4.500 mensuales.<br />Cada vez son más los edificios y complejos habitacionales que se construyen en el Perú y principalmente en Lima. Gianfranco Ferrari, gerente central de Banca Minorista y Gestión de Patrimonio del Banco de Crédito de Perú (BCP), estimó que el sector inmobiliario crecerá 20% este año, y pese a ese crecimiento se estará por debajo de la demanda de vivienda.<br />\"En el Perú cada año se conforman más de 100 mil hogares y solo se construyen unas 50 mil viviendas\", refirió.<br /><br />Según el BCP la venta de&nbsp; viviendas creció 21% durante el año pasado, impulsada por el mayor poder adquisitivo de los clientes, el incremento de la demanda de viviendas y las facilidades para acceder al crédito hipotecario.<br /><br />Precisó que el crédito promedio para comprar un departamento es de US$ 70 mil.</p>\n<p> </p>", "1", NULL, NULL);
#
#
INSERT INTO `blog_actividades` VALUES ("43", "2013-07-10 19:17:33", "0000-00-00 00:00:00", NULL, "1", "2013-07-10 19:16:36", "El sector construcción crecería 15% anual hasta el 2016", "<p>Así lo indicó el presidente del Fondo Mivivienda,&nbsp;Luis Angel Piazón, tras la inauguración de la sexta edición de Casa Show del&nbsp;BCP.</p>\n<p><span>El sector Construcción crecerá 15% anual hasta el 2016, gracias a la demanda habitacional insatisfecha, señaló el presidente del Fondo Mivivienda (FMV), Luis Angel Piazón.</span></p>\n<p>Indicó que de esta manera alcanzarán la meta total de&nbsp;viviendas colocadas&nbsp;en el actual periodo gubernamental, entre el sector público y privado, de 500 mil unidades habitacionales, lo que incluso podría superarse.</p>\n<p>Mencionó que se trabaja en la subasta de nuevos terrenos. Los procesos ya convocados son los correspondientes a la Alameda de Ancón (Lima), con un proyecto de 11,000 viviendas, así como la urbanización La Planicie en La Libertad, donde se construirán mil viviendas.</p>\n<p>Próximamente se tendrán los proyectos Jesús Oropeza en San Juan de Lurigancho (Lima), La Esperanza (La Libertad), Castrovirreyna (Huancavelica), Pacocha en Ilo (Moquegua), Lomas de Carabayllo (Lima), Cristo Rey (Tacna), Oasis de Villa en Villa El Salvador (Lima), y Angamos en Ventanilla (Callao), refirió.</p>\n<p>Señaló que en los próximos 12 meses se subastarán por lo menos 20 terrenos del Estado y que el objetivo este año es la formalización de viviendas con los programas Mi Construcción y Mis Materiales.</p>\n<p>Estas declaraciones las brindó luego de la inauguración de la sexta edición </p>\n<p> </p>", "1", NULL, NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_actividades_fotos` VALUES ("1", "2012-01-12 06:39:44", "0000-00-00 00:00:00", NULL, "1", "38", "bloact_1326368203_800x600.jpg", NULL, "3");
#
#
INSERT INTO `blog_actividades_fotos` VALUES ("2", "2013-07-10 19:12:54", "0000-00-00 00:00:00", NULL, "1", "41", "bloact_1373501574_300x220.jpg", NULL, "1");
#
#
INSERT INTO `blog_actividades_fotos` VALUES ("3", "2013-07-10 19:16:24", "0000-00-00 00:00:00", NULL, "1", "42", "bloact_1373501784_259x194.jpg", NULL, "1");
#
#
INSERT INTO `blog_actividades_fotos` VALUES ("4", "2013-07-10 19:18:06", "0000-00-00 00:00:00", NULL, "1", "43", "bloact_1373501886_299x168.jpg", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_fotos` VALUES ("13", "2013-07-10 10:45:32", "0000-00-00 00:00:00", NULL, "1", "2013-06-19 00:00:00", "Obras Culminadas", "1");
#
#
INSERT INTO `blog_fotos` VALUES ("14", "2013-07-10 10:46:17", "2013-09-18 20:24:51", NULL, "1", "2013-06-20 00:00:00", "Obras en Ejecución", "1");
#
#
INSERT INTO `blog_fotos` VALUES ("15", "2013-09-18 20:19:34", "2013-09-18 20:27:48", NULL, "1", "2013-09-19 00:00:00", "Obras 2011 - 2012", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("1", "2011-09-30 03:59:45", "0000-00-00 00:00:00", NULL, "1", "1", "blofot_1317373184_300x400.jpg", "Foto_descripcion Foto 17222 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 17222 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("2", "2011-09-30 03:59:51", "0000-00-00 00:00:00", NULL, "1", "1", "blofot_1317373191_640x456.jpg", "Foto_descripcion Foto 77519 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 77519 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("3", "2011-09-30 04:00:06", "0000-00-00 00:00:00", NULL, "1", "1", "blofot_1317373206_450x320.jpg", "Foto_descripcion Foto 16837 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 16837 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("4", "2011-09-30 04:00:29", "0000-00-00 00:00:00", NULL, "1", "1", "blofot_1317373228_487x390.jpg", "Foto_descripcion Foto 92426 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 92426 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("5", "2011-09-30 04:00:46", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373245_512x384.jpg", "Foto_descripcion Foto 66686 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 66686 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("6", "2011-09-30 04:00:52", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373251_512x410.jpg", "Foto_descripcion Foto 23239 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 23239 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("7", "2011-09-30 04:00:58", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373257_512x410.jpg", "Foto_descripcion Foto 93113 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 93113 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("8", "2011-09-30 04:01:05", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373264_640x456.jpg", "Foto_descripcion Foto 52901 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 52901 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("12", "2011-09-30 04:01:36", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373295_487x390.jpg", "Foto_descripcion Foto 81630 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 81630 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("10", "2011-09-30 04:01:17", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373277_319x198.jpg", "Foto_descripcion Foto 84639 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 84639 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("11", "2011-09-30 04:01:22", "0000-00-00 00:00:00", NULL, "1", "2", "blofot_1317373282_640x480.jpg", "Foto_descripcion Foto 15465 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 15465 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("13", "2011-09-30 04:02:03", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373322_490x355.jpg", "Foto_descripcion Foto 15336 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 15336 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("14", "2011-09-30 04:02:09", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373328_120x120.gif", "Foto_descripcion Foto 86545 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 86545 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("15", "2011-09-30 04:02:17", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373336_250x318.jpg", "Foto_descripcion Foto 21912 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 21912 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("16", "2011-09-30 04:02:24", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373343_120x120.gif", "Foto_descripcion Foto 95503 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 95503 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("17", "2011-09-30 04:02:28", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373348_360x450.jpg", "Foto_descripcion Foto 67348 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 67348 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("18", "2011-09-30 04:02:41", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373360_512x410.jpg", "Foto_descripcion Foto 20299 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 20299 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("19", "2011-09-30 04:02:53", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373372_512x410.jpg", "Foto_descripcion Foto 427 Lorem ipsum dolor sit amet, consectetur adipiscing eli", "Url Foto 427 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmo", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("20", "2011-09-30 04:03:00", "0000-00-00 00:00:00", NULL, "1", "3", "blofot_1317373379_490x392.jpg", "Foto_descripcion Foto 29389 Lorem ipsum dolor sit amet, consectetur adipiscing e", "Url Foto 29389 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eius", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("43", "2013-07-10 11:30:51", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473850_800x600.jpg", "AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("25", "2011-10-25 16:42:02", "2011-10-25 16:41:52", NULL, "1", "5", "blofot_1319578912_616x367.jpg", "F1 D / 4 TN", "http://www.truckmax.com.pe/productos/6/f1-d-4-tn", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("26", "2011-10-25 16:43:03", "2011-10-25 16:42:45", NULL, "1", "5", "blofot_1319578965_477x355.jpg", "F2 D / 4.5 TN", "http://truckmax.com.pe/productos/7/f2-d-45-tn", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("27", "2011-10-25 16:44:30", "2011-10-25 16:44:12", NULL, "1", "5", "blofot_1319579052_616x367.jpg", "F3 3800 D / 8 TN", "http://truckmax.com.pe/productos/8/f3-3800-d-8-tn", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("28", "2011-10-25 16:45:56", "2011-10-25 16:45:37", NULL, "1", "5", "blofot_1319579137_616x367.jpg", "SF2810D / 3.5 TN", "http://truckmax.com.pe/productos/5/sf2810d-35-tn", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("29", "2011-10-25 16:48:17", "2011-10-25 16:48:06", NULL, "1", "6", "blofot_1319579288_616x367.jpg", "Minibus JNQ6701 DE 28 PASAJEROS", "http://truckmax.com.pe/productos/9/minibus-jnq6701-de-28-pasajeros", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("30", "2011-10-25 16:49:07", "2011-10-25 16:48:48", NULL, "1", "6", "blofot_1319579328_600x451.jpg", "Minibus 26 pasajeros", "http://truckmax.com.pe/productos/17/minibus-26-pasajeros", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("31", "2011-10-25 16:51:12", "2011-10-25 16:50:54", NULL, "1", "7", "blofot_1319579454_616x367.jpg", "Cargador Frontal TRUCK MAX CG-28", "http://truckmax.com.pe/productos/21/cargador-frontal-truck-max-cg-28", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("33", "2011-10-25 16:52:49", "2011-10-25 16:52:39", NULL, "1", "7", "blofot_1319579559_539x586.jpg", "Tractor Agricola 300 50HP", "http://truckmax.com.pe/productos/16/tractor-agricola-300-50hp", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("34", "2011-10-25 16:53:30", "2011-10-25 16:53:11", NULL, "1", "7", "blofot_1319579591_624x467.jpg", "Tractor Agricola JINMA 904 90HP", "http://truckmax.com.pe/productos/11/tractor-agricola-jinma-904-90hp", "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("36", "2012-01-12 04:41:40", "0000-00-00 00:00:00", NULL, "1", "38", "blofot_1326361119_800x600.jpg", NULL, NULL, "3");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("44", "2013-07-10 11:31:16", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473875_800x600.jpg", "ATENCIONDE EMERGENCIAS EN TEMPORADA DE LLUVIAS", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("38", "2012-01-12 05:57:08", "0000-00-00 00:00:00", NULL, "1", "37", "blofot_1326365647_640x480.jpg", NULL, NULL, "3");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("39", "2012-01-26 09:12:14", "0000-00-00 00:00:00", NULL, "1", NULL, "blofot_1327587130_2048x1536.jpg", NULL, NULL, "11");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("40", "2012-01-26 09:13:01", "0000-00-00 00:00:00", NULL, "1", NULL, "blofot_1327587175_2480x1772.jpg", "TALLER NACIONAL", NULL, "11");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("45", "2013-07-10 11:31:35", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473895_800x600.jpg", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SAN JUAN", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("46", "2013-07-10 11:31:51", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473910_800x600.jpg", "CONSTRUCCION DE 4 AULAS PARA I.E. NIVEL SECUND. DE CONOPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("47", "2013-07-10 11:32:11", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473930_800x600.jpg", "CONSTRUCCION DE AULAS PARA CEI. 232 ALPAMAYO", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("48", "2013-07-10 11:32:29", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473949_800x600.jpg", "CONSTRUCCION DE AULAS PARA EL JARDIN DE NIÑOS N° 196 DE PUTACA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("49", "2013-07-10 11:32:50", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473969_800x600.jpg", "CONSTRUCCION DE LA CARRERETA ANGASCANCHA   RAJRAJPAMPA II ETAPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("50", "2013-07-10 11:33:09", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373473989_800x600.jpg", "CONSTRUCCION DEL SISTEMA DE AGUA POTABLE EN COTOCANCHA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("51", "2013-07-10 11:33:28", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474008_800x600.jpg", "CONSTRUCCION DEL SISTEMA DE RIEGO POR ASPERSION GARHUATINYA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("52", "2013-07-10 11:33:54", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474034_800x600.jpg", "CONSTRUCCION DEL SISTEMA DE RIEGO PRESURIZADO EN CHOGO", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("53", "2013-07-10 11:34:13", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474053_800x600.jpg", "CONSTUCCION DE RIEGO TECNIFICADO YANACOLPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("54", "2013-07-10 11:34:29", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474068_800x600.jpg", "CONTRUCCION  DE AULAS CEI. PUTACA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("55", "2013-07-10 11:34:48", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474087_800x600.jpg", "CONTRUCCION DE PUENTE CARROSABLE EN MAYURURI CHUYAS", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("56", "2013-07-10 11:35:09", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474109_800x600.jpg", "CREACION DE PISTAS Y VEREDAS DEL Km 0+00 al km. 1+252  CARRETERA A LOS BAÑOS", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("57", "2013-07-10 11:35:26", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474125_800x600.jpg", "CREACION DEL LOCAL DE USO MULTIPLE EN EL CASERIO DE VENTANA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("58", "2013-07-10 11:35:44", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474143_800x600.jpg", "CREACION DEL PUENTE CARROSABLE EN JANCAPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("59", "2013-07-10 11:36:01", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474161_800x600.jpg", "MANTENIMIENTO DEL CANAL CHUYAS  HUAYCHO", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("60", "2013-07-10 11:36:26", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474185_800x600.jpg", "MANTENIMIENTO Y REHABILITACION DEL CANAL ALPAMAYO", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("61", "2013-07-10 11:36:45", "0000-00-00 00:00:00", NULL, "1", "13", "blofot_1373474204_800x600.jpg", "MEJORAMIENTO DEL SISTEMA DE AGUA POTABLE EN SOCOSBAMBA PAROBAMBA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("62", "2013-07-10 11:38:08", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474287_800x600.jpg", "COLOCACION DE LA 1era PIEDRA PARA LA CONSTRUCCION DEL JARDIN DE NIÑOS EN CONOPAM", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("63", "2013-07-10 11:38:26", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474306_800x600.jpg", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL SISTEMA DE AGUA POTABLE", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("64", "2013-07-10 11:38:46", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474326_800x600.jpg", "CONSTRUCCION DE 4 AULAS PARA EL NIVEL SECUNDARIO DE COTOCANCHA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("65", "2013-07-10 11:39:03", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474342_800x600.jpg", "CONSTRUCCION DE TAMBOS EN CHACUAPAMPA OBRA POR GESTION", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("66", "2013-07-10 11:39:29", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474368_800x600.jpg", "CONSTRUCCION DE TROCHA CARROSABLE COCHAPAMPA CONOPAPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("67", "2013-07-10 11:39:45", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474385_800x600.jpg", "CONSTRUCCIONDE TROCHA CARROSABLE ALPAMAYO PISCOS QUINUABAMBA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("68", "2013-07-10 11:40:00", "0000-00-00 00:00:00", NULL, "1", "14", "blofot_1373474399_800x600.jpg", "NIVELACION DE TERRENO PARA LA CONSTRUCCION DEL J.N CONOPAPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("69", "2013-09-18 20:22:12", "2013-09-18 20:22:34", NULL, "1", "15", "blofot_1379553727_3056x2292.jpg", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SAN JUAN", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("70", "2013-09-18 20:23:04", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379553781_1920x1440.jpg", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SAN JUAN", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("71", "2013-09-18 20:23:28", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379553801_3056x2292.jpg", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SAN JUAN", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("72", "2013-09-18 20:30:25", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554221_2112x1584.jpg", "CASA COMUNAL CASERIO DE VENTANA-OBRA CULMINADA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("73", "2013-09-18 20:30:47", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554244_2112x1584.jpg", "CASA COMUNAL CASERIO DE VENTANA-OBRA CULMINADA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("74", "2013-09-18 20:31:04", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554261_2112x1584.jpg", "CASA COMUNAL CASERIO DE VENTANA-OBRA CULMINADA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("75", "2013-09-18 20:32:02", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554316_3056x2292.jpg", "construccion de aulas del jardin de niños 196 de putaca", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("76", "2013-09-18 20:32:17", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554335_1920x1440.jpg", "construccion de aulas del jardin de niños 196 de putaca", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("77", "2013-09-18 20:33:06", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554383_2112x1584.jpg", "construccion de carretera  angascancha-rajrajpampa II etapa", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("78", "2013-09-18 20:33:18", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554396_2112x1584.jpg", "construccion de carretera  angascancha-rajrajpampa II etapa", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("79", "2013-09-18 20:34:03", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554437_3056x2292.jpg", "construccion de cocinas mejoradas jancacucho y yeguacorral", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("80", "2013-09-18 20:34:23", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554458_3056x2292.jpg", "construccion de cocinas mejoradas jancacucho y yeguacorral", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("81", "2013-09-18 20:35:26", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554520_3056x2292.jpg", "construccion de muro de contencion camino a chacuabamba convenio con trabaja per", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("82", "2013-09-18 20:35:42", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554540_1920x1440.jpg", "construccion de muro de contencion camino a chacuabamba convenio con trabaja per", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("83", "2013-09-18 20:36:03", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554556_3056x2292.jpg", "construccion de muro de contencion camino a chacuabamba convenio con trabaja per", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("84", "2013-09-18 20:36:33", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554589_2112x1584.jpg", "construccion de pistas y veredas en la ciudad de pomabamba Jr. luis negreiros", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("85", "2013-09-18 20:36:46", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554603_2112x1584.jpg", "construccion de pistas y veredas en la ciudad de pomabamba Jr. luis negreiros", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("86", "2013-09-18 20:37:17", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554635_2112x1584.jpg", "construccion de riego por aspersion garuatinya", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("87", "2013-09-18 20:37:45", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554661_2112x1584.jpg", "construccion de riego por aspersion garuatinya", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("88", "2013-09-18 20:38:51", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554726_3056x2292.jpg", "construccion de riego tecnificado cuchichaca-potrero", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("89", "2013-09-18 20:39:10", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554745_3056x2292.jpg", "construccion de riego tecnificado cuchichaca-potrero", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("90", "2013-09-18 20:40:01", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554796_3056x2292.jpg", "construccion de sistema de riego por aspersion en garhuaj", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("91", "2013-09-18 20:40:18", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554814_2112x1584.jpg", "construccion de sistema de riego por aspersion en garhuaj", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("92", "2013-09-18 20:40:33", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554830_2112x1584.jpg", "construccion de sistema de riego por aspersion en garhuaj", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("93", "2013-09-18 20:41:46", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554903_2168x1440.jpg", "creacion de pistas y veredas del km.0+00 al km. 1+252-carretera a los baños", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("94", "2013-09-18 20:42:03", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379554919_2168x1440.jpg", "creacion de pistas y veredas del km.0+00 al km. 1+252-carretera a los baños", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("95", "2013-09-18 20:43:27", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555005_1919x1440.jpg", "creacion de puente carrosable en jancapampa", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("96", "2013-09-18 20:44:12", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555046_3056x2292.jpg", "mantenimiento de agua potable en cotocancha alto", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("97", "2013-09-18 20:44:30", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555064_3056x2292.jpg", "mantenimiento de agua potable en cotocancha alto", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("98", "2013-09-18 20:45:06", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555103_2112x1584.jpg", "mantenimiento de la infraestrucctura del puesto de salud de soccsi", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("99", "2013-09-18 20:45:17", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555114_2112x1584.jpg", "mantenimiento de la infraestrucctura del puesto de salud de soccsi", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("100", "2013-09-18 20:45:55", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555147_3056x2292.jpg", "MANTENIMIENTO DE SISTEMA DE AGUA POTABLE -PARIAGAGA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("101", "2013-09-18 20:46:13", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555167_3056x2292.jpg", "MANTENIMIENTO DE SISTEMA DE AGUA POTABLE -PARIAGAGA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("102", "2013-09-18 20:47:15", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555230_3056x2292.jpg", "mantenimiento del puesto de salud en el caserio de rajrajpampa", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("103", "2013-09-18 20:47:32", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555247_3056x2292.jpg", "mantenimiento del puesto de salud en el caserio de rajrajpampa", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("104", "2013-09-18 20:48:23", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555296_3056x2292.jpg", "mantenimiento del sistema de agua potable de la comunidad virgen inmaculada de s", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("105", "2013-09-18 20:48:41", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555315_3056x2292.jpg", "mantenimiento del sistema de agua potable de la comunidad virgen inmaculada de s", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("110", "2013-09-18 20:51:26", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555480_3056x2292.jpg", "Mantenimiento y operacion del canal chuyas-huaycho km", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("111", "2013-09-18 20:51:41", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555499_1920x1440.jpg", "Mantenimiento y operacion del canal chuyas-huaycho km", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("108", "2013-09-18 20:50:20", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555415_3056x2292.jpg", "MANTENIMIENTO DEL SISTEMA DE AGUA POTABLE EN Caserio de cushuru", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("109", "2013-09-18 20:50:40", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555435_3056x2292.jpg", "MANTENIMIENTO DEL SISTEMA DE AGUA POTABLE EN Caserio de cushuru", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("112", "2013-09-18 20:51:58", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555515_1920x1440.jpg", "Mantenimiento y operacion del canal chuyas-huaycho km", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("113", "2013-09-18 20:52:28", "2013-09-18 20:52:54", NULL, "1", "15", "blofot_1379555543_3056x2292.jpg", "mantenimiento y rehabilitacion del canal de alpamayo", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("114", "2013-09-18 20:53:03", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555578_3056x2292.jpg", "mantenimiento y rehabilitacion del canal de alpamayo", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("115", "2013-09-18 20:53:40", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555617_2112x1584.jpg", "mejoramiento del sistema de agua potable en socosbamba dist. de parobamba", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("116", "2013-09-18 20:53:52", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555630_1920x1440.jpg", "mejoramiento del sistema de agua potable en socosbamba dist. de parobamba", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("117", "2013-09-18 20:54:28", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555666_2168x1440.jpg", "PAVIMENTACIÓN-AV. RAMON CASTILLA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("118", "2013-09-18 20:54:46", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555684_2168x1440.jpg", "PAVIMENTACIÓN-AV. RAMON CASTILLA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("119", "2013-09-18 20:55:08", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555705_2168x1440.jpg", "PAVIMENTACIÓ-AV. RAMON CASTILLA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("120", "2013-09-18 20:55:38", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555735_2160x1440.jpg", "PUENTE PEATONAL AÑASPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("121", "2013-09-18 20:57:11", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555829_1210x1815.jpg", "PUENTE PEATONAL AÑASPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("122", "2013-09-18 20:57:49", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555863_1920x2880.jpg", "PUENTE PEATONAL AÑASPAMPA", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("123", "2013-09-18 20:58:35", "0000-00-00 00:00:00", NULL, "1", "15", "blofot_1379555908_2516x1440.jpg", "reabilitacion del puente carrosable tarapampa y mantenimiento carrtera -shiulla", NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("130", "2014-07-23 12:50:10", "0000-00-00 00:00:00", NULL, "1", "17", "blofot_1406137809_300x250.jpg", NULL, NULL, "1");
#
#
INSERT INTO `blog_fotos_fotos` VALUES ("131", "2014-07-23 12:53:03", "2014-07-23 12:54:22", NULL, "1", "13", "blofot_1406137982_300x250.jpg", "CONSTRUCCIÓN DE 4 AULAS E IMPLEMENTACIÓN DE UNA SALA DE COMPUTO", NULL, "1");
#
#
DROP TABLE IF EXISTS `blog_links_adicionales`;
#
#
CREATE TABLE `blog_links_adicionales` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_links_adicionales` VALUES ("1", "2012-01-19 10:55:08", "2013-06-30 22:27:04", NULL, "1", "Facebook", "https://www.facebook.com/municipalidad.pomabambaancash", "1");
#
#
INSERT INTO `blog_links_adicionales` VALUES ("2", "2012-01-26 09:17:51", "2013-06-30 22:26:56", NULL, "1", "Youtube", NULL, "11");
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
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_noticias` VALUES ("42", "2013-07-31 11:14:49", "0000-00-00 00:00:00", NULL, "1", "2013-07-31 11:13:35", "Cumpleaños de nuestro Gerente General Municipal", "<p>Hoy es este día tan especial, el pueblo de Pomabamba saluda...</p>\n<p> </p>", NULL, NULL, "1");
#
#
INSERT INTO `blog_noticias` VALUES ("43", "2014-06-26 15:09:32", "0000-00-00 00:00:00", NULL, "1", "2014-06-26 15:08:23", "Capacitación en Ofimática", "<p>este lunes 30 de junio se brindara la&nbsp; Capacitación en Ofimática</p>\n<p> </p>", NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_videos` VALUES ("5", "2013-07-31 11:19:18", "2013-09-27 17:11:50", NULL, "1", "2013-09-27 00:00:00", "Videos de Obras", "1");
#
#
INSERT INTO `blog_videos` VALUES ("6", "2013-08-21 19:43:44", "0000-00-00 00:00:00", NULL, "1", "2013-08-16 00:00:00", "Vídeo Clip Pomabamba", "1");
#
#
INSERT INTO `blog_videos` VALUES ("7", "2013-09-27 16:44:27", "2013-09-27 16:58:56", NULL, "1", "2013-09-27 00:00:00", "IVP POMABAMBA", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `blog_videos_videos` VALUES ("1", "2011-10-03 11:00:06", "0000-00-00 00:00:00", NULL, "1", "1", "video 1-1", "HqSDhoz7PEM", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("2", "2011-10-03 11:00:22", "0000-00-00 00:00:00", NULL, "1", "1", "video 1-2", "WexIPWV8Yao", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("3", "2011-10-03 11:00:47", "0000-00-00 00:00:00", NULL, "1", "1", "video 1-3", "7p6IS4Xz5Xo", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("4", "2011-10-03 11:01:04", "0000-00-00 00:00:00", NULL, "1", "1", "video 1-4", "hGmiACMvPSs", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("5", "2011-10-03 11:01:28", "0000-00-00 00:00:00", NULL, "1", "2", "video 2-1", "QPYTF3MjyQ4", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("6", "2011-10-03 11:01:51", "0000-00-00 00:00:00", NULL, "1", "2", "video 2-2", "Jk92RJsCajI", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("7", "2011-10-03 11:02:14", "0000-00-00 00:00:00", NULL, "1", "2", "video 2-3", "pI0YO7u7W54", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("8", "2011-10-03 11:02:33", "0000-00-00 00:00:00", NULL, "1", "2", "video 2-4", "NvvvmhZeD9U", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("9", "2011-10-03 11:02:54", "0000-00-00 00:00:00", NULL, "1", "2", "video 2-5", "mp77Nzgdt0M", NULL, "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("18", "2013-07-31 11:21:15", "2013-09-27 17:15:30", NULL, "1", "5", "ALCALDE JUAN VICTOR PONTE CARRANZA", "RXZ4747Xr38", "RESUMEN DE OBRAS DE LA GESTION DEL ALCALDE JUAN VICTOR PONTE CARRANZA", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("19", "2013-08-21 19:47:52", "2013-08-29 17:00:02", NULL, "1", "6", "Faena Comunal en Yayno. Provincia Pomabamba Ancash", "QztKcBFOqcE", "Faena Comunal en las ruinas turisticas de Yayno. Provincia Pomabamba Ancash.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("14", "2011-10-07 13:39:25", "2013-09-27 16:48:41", NULL, "1", "7", "DONGFENG Corporate Video", "LtLt8cm0xro", "El Instituto Vial Provincial de Pomabamba fue acreedor del primer puesto en el concurso por la mejor Gestión Vial organizado por el Ministerio de Transportes y Comunicaciones con los 188 IVP-S. A nivel Nacional.\n\n ", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("15", "2011-10-07 13:40:44", "0000-00-00 00:00:00", NULL, "1", "8", "Cummins QSL9 coolant system", "7BC8ojJPswY", "Cummins QSL9 coolant system", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("17", "2012-01-26 09:07:58", "0000-00-00 00:00:00", NULL, "1", NULL, "VIDEO DE PRUEBA", "", "SECCION EN CONSTRUCCION", "11");
#
#
INSERT INTO `blog_videos_videos` VALUES ("40", "2013-09-28 07:51:39", "2013-09-28 07:51:56", NULL, "1", "6", "DOCUMENTAL MUNICIPALIDAD PROVINCIAL DE POMABAMBA - ARTESANIA", "bzrsMse9zOY", "ASOCIACION DE ARTESANOS DE POMABAMBA", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("22", "2013-08-21 20:40:19", "0000-00-00 00:00:00", NULL, "1", "5", "CENTRO DE SERVICIOS DE APOYO AL HÁBITAT RURAL", "v1wCdZIRPvU", "Centro de Servicios de Apoyo al Habitad Rural, en el Centro Poblado de Pauchos Distrito de Pomabamba, Provincia de Pomabamba, Departamento de Ancash. SNIP: 213331. \nMonto: S /. 311,135.98 \nEjecuta: Consorcio Carazdulzura. \nPlazo de ejecución: 30 dias Calendarios. \nSupervisor: ing. Domingo F. Ganvine Vega.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("23", "2013-09-13 09:27:15", "2013-09-13 09:27:44", NULL, "1", "5", "POMABAMBA-EN AGRICULTURA SIEMPRE ADELANTE..........", "Dmp5Pa6KNSM", "LA GESTION DEL ALCALDE JUAN VICTOR PONTE CARRANZA, VIENE IMPULSANDO EN VARIOS FRENTES DE POMABAMBA LA MEJORA DE LA AGRONOMIA CON TECNOLOGIA VANGUARDISTA, AQUI UNA DE LAS MUCHAS OBRAS EJECUTADAS ---CONSTRUCCION DEL SISTEMA DE RIEGO TECNIFICADO EN LA COMUNIDAD DE JATUN TORRE - PAUCHOS..................PAPACHI LO HACE.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("24", "2013-09-13 09:36:51", "2013-09-13 09:37:08", NULL, "1", "5", "POMABAMBA - AVANZA ¡¡ RIEGO TECNIFICADO SECTOR YANACOLPA", "uY2RLWwdkiE", "PAPACHI IMPULSANDO LA AGRICULTURA........CONSTRUCCION DE CALIDAD PARA EL PROYECTO DE  RIEGO TECNIFICADO EN YANACOLPA-CONOPA, GRACIAS POR ACORDARTE DE LOS MAS OLVIDADOS SEÑOR ALCALDE JUAN VICTOR PONTE CARRANZA - AHORA PRODUCIREMOS NUESTROS PROPIOS PRODUCTOS.  GRACIAS...... ¡VIVA POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("25", "2013-09-13 09:38:43", "2013-09-13 09:39:05", NULL, "1", "5", "POMABAMBA SIEMPRE ADELANTE - INSTALACIÓN DE COMEDOR POPULAR EN QUINUABAMBA.", "SHV_IJdN8mI", "EL ALCALDE DEL PUEBLO -PAPACHI- TRABAJANDO POR LOS POBLADORES DE PISCOS-QUINUABAMBA.... LOS MAS OLVIDADOS HOY TIENEN SU OPORTUNIDAD..... ¡VIVA NUESTRO PUEBLO DE POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("26", "2013-09-13 09:40:13", "2013-09-13 09:40:34", NULL, "1", "5", "POMABAMBA CRECE - GARHUATINYA", "YYZkfFr-1p0", "EL ALCALDE JUAN VICTOR PONTE CARRANZA IMPULSANDO EL AGRO..... OBRA CULMINADA EN GARHUANTIYA, SISTEMA DE RIEGO TECNIFICADO ......POMABAMBA AVANZA.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("27", "2013-09-13 09:43:50", "2013-09-13 09:43:58", NULL, "1", "5", "POMABAMBA CRECE - SISTEMA DE RIEGO TECNIFICADO EN GARHUAJ", "SzD0aKpIYXU", "EL ALCALDE PROVINCIAL JUAN VICTOR PONTE CARRANZA RECORRIENDO LAS ZONAS MAS OLVIDADAS DE POMABAMBA, HOY AQUI EN GARHUAJ INAUGURANDO EL SISTEMA DE RIEGO TECNIFICADO........... PAPACHI SIEMPRE ADELANTE CON LOS MAS OLVIDADOS ......IMPULSANDO EL AGRO........¡VIVA POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("28", "2013-09-13 09:45:13", "2013-09-13 09:45:22", NULL, "1", "5", "POMABAMBA - CRECE = CONSTRUCCION PUENTE CARROSABLE MAYURURY-CP CHUYAS", "DjBk-fdSSKY", "AUTORIDADES DEL CENTRO POBLADO DE CHUYAS AGRADECEN A LA  GESTION DEL ALCALDE PROVINCIAL DE POMABAMBA JUAN VICTOR PONTE CARRANZA POR LA CONSTRUCCION DEL PUENTE CARROSABLE EN EL RIO MAYURURI, DE ESA MANERA SE UNIRAN MUCHOS CENTROS POBLADOS, ESTUDIANTES, NIÑOS, ANCIANOS NUNCA MAS ARRIESGARAN SUS VIDAS CRUZANDO UN RIO CAUDALOSO, GRACIAS SEÑOR ALCALDE ¡VIVA POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("29", "2013-09-13 09:55:12", "2013-09-13 09:55:30", NULL, "1", "5", "POMABAMBA - CRECE = ¡EN EDUCACIÓN! PAPACHI ADELANTE...............¡", "2IbM5X_RTSA", "NUESTRO ALCALDE PROVINCIAL DE POMABAMBA JUAN VÍCTOR PONTE CARRANZA, CONCIENTE DE QUE SIN INFRAESTRUCTURA, NO HABRÁ EDUCACIÓN DE CALIDAD , APUESTA POR TRABAJAR EN ESTE SECTOR PARA QUE LOS HIJOS DE POMABAMBA NO PIERDAN LA FE Y ESTUDIEN CON OPTIMISMO PARA HACER GRANDE A NUESTRO PUEBLO POMABAMBINO, AQUI EN LA CONSTRUCCION DE 04 AULAS EN COTOCANCHA BAJO (NIVEL SECUNDARIO) NUESTRO ALCALDE ESTA DEMOSTRANDO QUE NO IMPORTA LO AGRESTE DE LA ZONA NI LA INCLEMENCIA DEL TIEMPO, LA EDUCACION ES PRIMERO, ¡VIVA POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("30", "2013-09-13 09:57:53", "2013-09-13 09:58:00", NULL, "1", "5", "POMABAMBA - CRECE = APERTURA DE CALLES DE HUANCHACBAMBA", "q22el08DbcQ", "EMOTIVAS PALABRAS DEL SR. ALCALDE DEL CENTRO POBLADO DE HUANCHACBAMBA QUIEN AL VER QUE POR FIN UNA GESTIÓN MUNICIPAL PROVINCIAL ATIENDE SUS PEDIDOS llora de emocion, PUEBLO POMABAMBINO SIENTANSE ORGULLOSOS DE SU ALCALDE JUAN VICTOR PONTE CARRANZA... PAPACHI NO DESCANSARA HASTA QUE TODOS LOS CASERÍOS, CENTROS POBLADOS, LOS LUGARES MAS OLVIDADOS DE POMABAMBA RECIBAN LO QUE MERECEN, Y ESO ES UNA MEJOR CALIDAD DE VIDA, YA BASTA DE EXCLUSIÓN SOCIAL, !VIVA POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("32", "2013-09-13 10:09:55", "2013-09-13 10:10:08", NULL, "1", "5", "POMABAMBA - CRECE = AMPLIACIÓN DE AGUA POTABLE CASERIO JARAURÁN", "iHwKl307nHM", "EL CASERIO DE JARAURAN EN EL DISTRITO DE QUINUABAMBA   AGRADECE AL SEÑOR ALCALDE JUAN VICTOR PONTE CARRANZA POR LAS OBRAS DE AMPLIACIÓN Y MANTENIMIENTO DEL AGUA POTABLE  EN FAVOR DE LA POBLACIÓN....... GRACIAS PAPACHI .... SIGUE APOYANDO A LAS ZONAS MAS OLVIDADAS. !VIVA POMABAMBA!.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("33", "2013-09-13 10:11:44", "2014-06-23 08:46:29", NULL, "1", "5", "POMABAMBA - CRECE =AGUA POTABLE Y LAVADEROS PARA COTOCANCHA ALTO", "G27yWAEHiww", "EL PUEBLO DE COTOCANCHA ALTO AGRADECIDO CON LA GESTIÓN MUNICIPAL  --PAPACHI-- EL PRIMER ALCALDE DESCENTRALIZADOR DE POMABAMBA NO DESCANSARA HASTA QUE LAS COMUNIDADES MAS OLVIDADAS GOCEN ,Y TENGAN UNA MEJOR CONDICIÓN DE VIDA. !VIVA EL PUEBLO DE POMABAMBA!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("34", "2013-09-13 10:17:10", "2013-09-13 10:17:25", NULL, "1", "5", "POMABAMBA AVANZA EN TECNOLOGIA AGRICOLA - AHORA EN POMABAMBA CULTIVOS MEJORADOS", "dnLCXPIu3hQ", "EL CENTRO PILOTO DE PRODUCCIÓN DE PAPA ES UNA INICIATIVA MAS DE ESTA GESTION MUNICIPAL, POR EL DESARROLLO DE POMABAMBA .......... PAPACHI ADELANTE.....¡VIVA POMABAMBA CALLEJON DE LOS CONCHUCOS! CAPITAL FOCKLORICA DE ANCASH, ORGULLO DEL PERU.", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("35", "2013-09-13 10:19:32", "2013-09-13 10:19:50", NULL, "1", "5", "POMABAMBA AVANZA......TU ALCALDE PAPACHI LO HACE.", "4tdUxOQC3so", "ENTREGA DE INSTRUMENTOS MUSICALES PARA EL COLEGIO NACIONAL MONSEÑOR FIDEL OLIVAS ESCUDERO, ASI PUES,EL ALCALDE DE LA PROVINCIA DE POMABAMBA SR JUAN VICTOR PONTE CARRANZA CUMPLE CON EL ALMA MATER DE LA PROVINCIA... ¡QUE VIVA POR SIEMPRE¡ EL COLEGIO FIDEL OLIVAS ESCUDERO....", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("36", "2013-09-13 10:23:39", "2013-09-13 10:23:50", NULL, "1", "5", "POMABAMBA : APERTURA DE VACACIONES UTILES 2013", "plxD8qbtDLc", "LA GESTION MUNCIPAL DEL ALCALDE JUAN VICTOR PONTE CARRANZA, APERTURA LAS VACACIONES UTILES EN POMABAMBA, CURSOS ACADEMICOS, CLASES CULTURALES Y DISCIPLINAS DEPORTIVAS, ADEMAS LA ENTREGA DE TEXTOS ESCOLARES, SON PUES, EL REFLEJO DEL PENSAMIENTO PAPACHI, \"EDUQUEMONOS LO MAS QUE PODAMOS Y RESPETEMOS A LOS DEMAS\" !VIVA LA  NIÑEZ DE POMABAMBA¡", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("37", "2013-09-13 10:25:02", "2013-09-13 10:25:16", NULL, "1", "5", "POMABAMBA - EN EL AGRO AVANZA Y CRECE.....", "3g9Tpk-KgtY", "CONSTRUCCION DE SISTEMA DE RIEGO PRESURIZADO EN EL CP-CHOGO, ALCALDE JUAN VICTOR PONTE CARRANZA IMPULSANDO EL AGRO......... ADELANTE POMABAMBA¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("38", "2013-09-13 10:26:40", "2013-09-13 10:27:00", NULL, "1", "5", "POMABAMBA - PROCLAMACION A LA MADRE POMABAMBINA 2013", "kf5CBaxKvtg", "MERECIDO HOMENAJE A LA MADRE POMABAMBINA EN SU  DIA, EJEMPLO DE PUNDONOR Y LUCHA NUNCA SE  RINDE ANTE LA ADVERSIDAD . ¡VIVA LA MUJER KONCHUCANA! ¡VIVA LAS MADRES POMABAMBINAS!", "1");
#
#
INSERT INTO `blog_videos_videos` VALUES ("42", "2014-06-23 17:35:30", "0000-00-00 00:00:00", NULL, "1", "5", "chimaychi", "Ic92NcP86yg", "hermoso chimaychi", "1");
#
#
DROP TABLE IF EXISTS `bloque_agenda`;
#
#
CREATE TABLE `bloque_agenda` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `bloque_agenda_fotos`;
#
#
CREATE TABLE `bloque_agenda_fotos` (
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
DROP TABLE IF EXISTS `bloque_centro`;
#
#
CREATE TABLE `bloque_centro` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `titulo` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `bloque_centro` VALUES ("1", "2013-07-11 06:35:08", "0000-00-00 00:00:00", NULL, "1", "Licencia de Funcionamiento", "<p>texto de licencia de funcionamiento</p>\n<p> </p>", "ceninf_1373542508_39x34.jpg", NULL, "1");
#
#
INSERT INTO `bloque_centro` VALUES ("2", "2013-07-11 06:35:41", "0000-00-00 00:00:00", NULL, "1", "Licencia de Edificación", "<p>texto de licencia de edificación</p>\n<p> </p>", "ceninf_1373542541_39x34.jpg", NULL, "1");
#
#
INSERT INTO `bloque_centro` VALUES ("3", "2013-07-11 06:36:10", "0000-00-00 00:00:00", NULL, "1", "Seguridad", "<p>texto de seguridad</p>\n<p> </p>", "ceninf_1373542570_39x34.jpg", NULL, "1");
#
#
INSERT INTO `bloque_centro` VALUES ("4", "2013-07-11 06:36:33", "0000-00-00 00:00:00", NULL, "1", "Impuestos", "<p>texto de impuestos</p>\n<p> </p>", "ceninf_1373542593_39x34.jpg", NULL, "1");
#
#
INSERT INTO `bloque_centro` VALUES ("5", "2013-07-11 06:37:20", "0000-00-00 00:00:00", NULL, "1", "Formularios y Formatos", "<p>texto formularios y formatos</p>\n<p> </p>", "ceninf_1373542640_39x34.jpg", NULL, "1");
#
#
DROP TABLE IF EXISTS `bloque_enlaces`;
#
#
CREATE TABLE `bloque_enlaces` (
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `bloque_enlaces` VALUES ("11", "2014-06-26 14:54:55", "0000-00-00 00:00:00", NULL, "1", "http://www.scotiabank.com.pe/Scotiabank", "Scotiabank", NULL, "enl_1403812495_50x52.jpg", NULL, "1");
#
#
INSERT INTO `bloque_enlaces` VALUES ("10", "2014-06-26 14:54:13", "0000-00-00 00:00:00", NULL, "1", "https://www.viabcp.com/wps/portal/viabcpp/personas", "Banco BCP", NULL, "enl_1403812453_50x52.jpg", NULL, "1");
#
#
INSERT INTO `bloque_enlaces` VALUES ("9", "2014-06-26 14:53:32", "0000-00-00 00:00:00", NULL, "1", "http://www.bbvacontinental.pe/personas/", "BBVA Continental", NULL, "enl_1403812412_50x52.jpg", NULL, "1");
#
#
INSERT INTO `bloque_enlaces` VALUES ("8", "2013-09-19 15:05:31", "0000-00-00 00:00:00", NULL, "1", "http://www.minedu.gob.pe/inicio.php", "Ministerio de Educacion", NULL, "enl_1379621130_442x114.jpg", NULL, "1");
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
DROP TABLE IF EXISTS `boletines_filtros`;
#
#
CREATE TABLE `boletines_filtros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
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
  `file` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `centro_grupos`;
#
#
CREATE TABLE `centro_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `centro_grupos` VALUES ("1", "2013-08-03 16:21:27", "0000-00-00 00:00:00", NULL, "1", "Licencia de Funcionamiento", "ceninf_1375564887_39x34.jpg", NULL, "1");
#
#
INSERT INTO `centro_grupos` VALUES ("2", "2013-08-03 16:21:50", "0000-00-00 00:00:00", NULL, "1", "Licencia de Edificación", "ceninf_1375564910_39x34.jpg", NULL, "1");
#
#
INSERT INTO `centro_grupos` VALUES ("3", "2013-08-03 16:22:05", "0000-00-00 00:00:00", NULL, "1", "Seguridad", "ceninf_1375564925_39x34.jpg", NULL, "1");
#
#
INSERT INTO `centro_grupos` VALUES ("4", "2013-08-03 16:22:18", "0000-00-00 00:00:00", NULL, "1", "Impuesto", "ceninf_1375564938_39x34.jpg", NULL, "1");
#
#
INSERT INTO `centro_grupos` VALUES ("5", "2013-08-03 16:23:09", "0000-00-00 00:00:00", NULL, "1", "Formularios y Formatos", "ceninf_1375564989_39x34.jpg", NULL, "1");
#
#
INSERT INTO `centro_grupos` VALUES ("8", "2014-06-26 15:33:10", "0000-00-00 00:00:00", NULL, "1", "Prediales", NULL, NULL, "1");
#
#
DROP TABLE IF EXISTS `centro_items`;
#
#
CREATE TABLE `centro_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `pdf` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `centro_items` VALUES ("1", "2013-08-03 16:24:36", "0000-00-00 00:00:00", NULL, "1", "5", "1", NULL, "sub prueba 1 - 1", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `centro_items` VALUES ("2", "2013-08-03 16:24:55", "0000-00-00 00:00:00", NULL, "1", "5", "1", NULL, "subprueba 1 - 2", "<p> </p>", NULL, NULL, "1", NULL);
#
#
DROP TABLE IF EXISTS `centro_subgrupos`;
#
#
CREATE TABLE `centro_subgrupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `centro_subgrupos` VALUES ("1", "2013-08-03 16:23:43", "0000-00-00 00:00:00", NULL, "1", "prueba", "5", "1");
#
#
INSERT INTO `centro_subgrupos` VALUES ("2", "2013-08-03 16:23:49", "0000-00-00 00:00:00", NULL, "1", "prueba2", "5", "1");
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
INSERT INTO `configuraciones` VALUES ("1", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2011-12-04 21:15:43", "2013-09-05 00:29:14", NULL, "1", "emails_publicos", "informes@munipomabamba.gob.pe");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2011-12-04 21:15:43", "2013-09-05 00:29:09", NULL, "1", "emails_admin", "informes@munipomabamba.gob.pe");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
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
INSERT INTO `configuraciones_root` VALUES ("1", "2011-12-04 21:15:43", "2013-06-25 19:31:09", NULL, "1", "titulo_home", "POMABAMBA");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2011-12-04 21:15:43", "2013-06-25 19:31:01", NULL, "1", "email_fromname", "POMABAMBA");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2011-12-04 21:15:43", "2013-09-05 00:28:52", NULL, "1", "email_from", "informes@munipomabamba.gob.pe");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2011-12-04 21:15:43", "2013-06-25 19:30:35", NULL, "1", "nombre_empresa", "POMABAMBA");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2011-12-04 21:15:43", "2013-06-25 19:30:31", NULL, "1", "titulo_web", "POMABAMBA");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2011-12-04 21:15:43", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `contacto` VALUES ("1", "2013-09-05 15:41:55", "2013-09-05 15:41:55", NULL, "1", "2013-09-05 15:41:55", "Urrutia", "Elder", "01-2222173", "951-945-017", "2010429@ldschurch.org", "San Isidro", "Lima", "1", "necesito saber el nuemero de telefono de registro civil", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("2", "2013-09-18 18:11:16", "2013-09-18 18:11:16", NULL, "1", "2013-09-18 18:11:16", "Sam Cristoper ", "Pari Alvarez", "", "", "samcristoper@hotmail.com", "", "", "1", "Hola  no puedo ubicar las  convocatorias CAS vigentes me podrían dar el link ? \npuesto que al ser un entidad publica esto debería ser publico en pro de la transparencia \nmuchísimas gracias \n\nAtentamente\n\nLic Sam Cristoper Pari Alvarez ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("3", "2013-09-25 18:51:51", "2013-09-25 18:51:51", NULL, "1", "2013-09-25 18:51:51", "Rios Capristan", "Huver Martin", "(01)435-2351", "949938311", "ventas2@disa.com.pe", "Trujillo", "Trujillo", "6", "Srs. Municipalidad Provincial de Pomabamba.\nEl saludo de la empresa DISA,agradeceríamos contactarnos con el área de Desarrollo económico y/o Limpieza pública.\nDisa, se encarga de ver temas de segregación y reciclaje en contenedores de polietileno en alta densidad.\nFvr. Devolver los datos requeridos: e-mail y/o Telfns.\nMuy atentamente,\n\nDisa-Soluciones Ecoeficientes.\nRpm. #949938311\nTrujillo.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("4", "2013-10-17 21:18:52", "2013-10-17 21:18:52", NULL, "1", "2013-10-17 21:18:52", "pachas carrasco", "lady katherine", "017955360", "948853990", "lady_katherine21@hotmail.com", "smp", "lima", "1", "quiero saber como pedir constancia de registro de nacimiento", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("5", "2013-11-03 14:39:06", "2013-11-03 14:39:06", NULL, "1", "2013-11-03 14:39:06", "RIOS", "HUVER", "014352351", "949938311", "ventas2@disa.com.pe", "Trujillo", "Trujillo", "6", "Contacto con la Gerencia de desarrollo económico(of.serv.pùblicos.Atte Distribución servicios y asesoría SA. DISA-Soluiones ecoeficientes.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("6", "2013-11-17 22:18:41", "2013-11-17 22:18:41", NULL, "1", "2013-11-17 22:18:41", "PRINCIPE JARA", "GUILLERMO", "6876889", "996449557", "guillepj1@hotmail.com", "HUAYLLAN", "POMABAMBA", "1", "AMIGO, PAPACHI, ES MUY GRATO DIRIGIRME A UD. PARA SALUDARLE Y FELICITARLE POR SU DESEMPEÑO COMO FUNCIONARIO MNICIPAL. SOY DE LA LOCALIDAD DE INGENIO, DONDE HAY MUCHO QUE HACER... SOY ECONOMISTA DE LA VILLARREAL, MICROEMPRESARIO, ME GUSTARIA MUCHISIMO TRABAJAR POR NUESTRA PROVINCIA, ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("7", "2013-11-29 15:01:12", "2013-11-29 15:01:12", NULL, "1", "2013-11-29 15:01:12", "Navarro Montellanos", "Rosario", "", "", "rosarioinavarro@yahoo.com", "", "", "1", "Buenas tardes, quisiera saber como obtener una copia de partida de nacimiento de mi abuelo. Su nombre fue Francisco Ulises Navarro, nacido el 4 de octubre de 1877. Podria obtener una copia por la internet? Cual seria el costo?\r\n\r\nMuchas gracias.\r\n\r\nRosario Navarro.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("8", "2013-11-29 16:02:11", "2013-11-29 16:02:11", NULL, "1", "2013-11-29 16:02:11", "lozano  vilela", "lizet katherine ", "", "948621433", "katylize_20@hotmail.com", "callao", "callao", "1", "Tengo un familiar que nació en Pomabamba en el año de 1918, quisiera tener una partida de nacimiento de dicha persona, quisiera sabe si tendrán en su archivo el registro de nacimiento de la Señora NARCISA LIÑAN ROLDAN", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("9", "2014-01-11 21:18:58", "2014-01-11 21:18:58", NULL, "1", "2014-01-11 21:18:58", "palomino", "felix", "", "", "manoloperu2003@hotmail.com", "", "", "", "Hola Amigos de la municipalidad de Pomabamba,mi nombre felix palomino, vivo fuera del paismi edad es 42 anos,busco informacion de mi mama de crianza , que nacio en pomabamba,en Noviembre del 1908 ,vivio en lima muchos anos, trabajo en el correo postal de lima por 33 anos aprox, vivio en la unidad vicinal # 3 cercado de lima,donde naci yo, me gustaria saber mas de ella si tiene familiares en pomabamba aun,gracias por su tiempo.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("10", "2014-01-30 18:48:25", "2014-01-30 18:48:25", NULL, "1", "2014-01-30 18:48:25", "ARAMBULO MORENO", "JOSE RAUL", "", "", "jrambesha@hotmail.com", "", "", "1", "BUENOS DIAS\nQUISIERA POR FAVOR SOLICITAR UNA PARTIDA DE NACIMIENTO DE LA SIGUIENTE PERSONA ( FRANCISCO AVELINO MORENO TARAZONA QUIEN NACIO EL 18 DE OCTUBRE DE 1918 SUS PADRES FUERON DON ANDRES CORSINO MORENO RAMIREZ Y DOÑA MARTINA TARAZONA CHAUCA.)\n", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("11", "2014-02-11 13:53:26", "2014-02-11 13:53:26", NULL, "1", "2014-02-11 13:53:26", "ROCA PAGOLA", "ANA MARIA ROCA PAGOLA", "3361111", "989884638", "aroca@inen.sld.pe", "surquillo", "lima", "1", "Señores. necesito saber si mis padres: Ezequiel Roca Vidal y Celestina Pagola Blas si existe partida de  matrimonio civil en Pomabamba", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("12", "2014-02-18 10:07:20", "2014-02-18 10:07:20", NULL, "1", "2014-02-18 10:07:20", "Vidal Alvarez", "Hilda", "", "", "hildavidal@hotmail.com", "", "", "1", "Estimados Sres.de la Municipalidad de Pomabamba:\nLes agradecere me indiquen la relacion y telefonos de tasadores oficiales pues tengo un terreno en Pomabamba que deseo vender y no estoy entereda de los precios oficiales.\nA la espera de su respuesta, me despido cordialmente,\n\nHilda Vidal", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("13", "2014-02-21 11:33:31", "2014-02-21 11:33:31", NULL, "1", "2014-02-21 11:33:31", "Espinoza Vidal", "Juan Santiago", "4215389", "999133911", "kahunasperu@hotmail.com", "Miraflores", "Lima", "1", "NECESITO SACAR LA PARTIDA DE NACIMIENTO DE MI SEÑORA MADRE : DORIS LEONILDA VIDAL MERCADO, VIVIMOS EN LIMA COMO PODEMOS HACER PARA OBTENERLO, GRACIAS", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("14", "2014-02-21 12:08:57", "2014-02-21 12:08:57", NULL, "1", "2014-02-21 12:08:57", "vidal mercado", "doris leonilda ", "044582774", "", "vidal_do06@yahoo.es", "trujillo", "trujillo", "1", "deseo obtener mi partida de nacimiento por favor que tramites debo de seguir puesto que vivo en trujillo y no puedo viajar personalmente ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("15", "2014-02-24 16:39:05", "2014-02-24 16:39:05", NULL, "1", "2014-02-24 16:39:05", "VIDAL MERCADO", "DORIS LEONILDA", "044582774  -01 4400237", "999638872", "vidal_do06@yahoo.es", "TRUJILLO", "TRUJILLO", "1", "DESEO OBTENER COPIA DE MI PARTIDA DE NACIMIENTO Y LAMENTABLEMENTE NO HE TENIDO LA SUERTE DE COMUNICARME CON ALGUIEN QUE ME AYUDE POR ESTE MOTIVO RECURRO A ESTE MEDIO PARA QUE ME ORIENTE Y ME DIGAN COMO Y A QUE TELEF PUEDO LLAMAR PORQUE LOS QUE TENGO NINGUN ANEXO CONTESTA MUCHAS GRACIAS          MIS DATOS SON LOS SIGUIENTES FECHA DE NACIMIENTO 05 DE JULIO DE 1951  ESPERO SUS NOTICIAS ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("16", "2014-02-24 22:19:42", "2014-02-24 22:19:42", NULL, "1", "2014-02-24 22:19:42", "ROCA PAGOLA", "MARIA ELENA", "7785855 - 4226090", "996781449", "malhenna17@hotmail.com", "LINCE", "", "1", "Un saludo cordial, solicito tenga a bien informarme si dentro de sus Archivos tiene registrado la Partida de Matrimonio de mi mamá la señora Celestina Pagola Blas, su esposo el Sr. Ezequiel Roca Vidal. Agradecere su atención en este sentido y si lo encontrara como seria el pago asi como el envio del mismo. Atentamente, Maria Elena Roca Pagola viuda de Guzman", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("17", "2014-02-25 12:56:27", "2014-02-25 12:56:27", NULL, "1", "2014-02-25 12:56:27", "Espinoza Vidal", "JUAN SANTIAGO", "014215389", "999133911-995065867", "kahunasperu@hotmail.com", "Lince", "Lima", "", "MUY BUENAS TARDES , ESTIMADOS SRES. DE POMABAMBA.- POR MEDIO DE LA PRESENTE , SOLICITO INFORMACION PARA OBTENER UNA COPIA DE PARTIDA DE NACIMIENTO DE MI SRA MADRE , DORIS LEONILDA VIDAL MERCADO, AGRADECEREMOS MUCHO SU PRONTA AYUDA PARA REALIZAR EL TRAMITE PARA LA OBTENCION DE DICHA COPIA DE PARTIDA DE NACIMIENTO. A LA ESPERA DE UNA PRONTA RESPUESTA QUEDAMOS DE USTEDES. ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("18", "2014-02-26 09:25:00", "2014-02-26 09:25:00", NULL, "1", "2014-02-26 09:25:00", "ROCA PAGOLA VIUDA DE GUZMAN", "MARIA ELENA ", "778.5855 - 4226090", "996781449", "malhhenna17@hotmail.com", "LINCE", "", "", "CON UN SALUDO CORDIAL ME DIRIJO A USTED PARA SOLICITARLE TENGA A BIEN INFORMARME SI LE FUERA POSIBLE, REQUIERO SABER EN MI CONDICION DE HIJA SOBRE LA PARTIDA DE MATRIMONIO DE LA SRA. CELESTINA PAGOLA BLAS CON EL SR. EZEQUIEL ROCA VIDAL. aGRADECERE POR SU INTERMEDIO LA RESPUESTA A TRAVES DE MI CORREO ELECTRONICO, ASI COMO LAS CONDICIONES DE PAGO POR SU SERVICIO. ATTE., MARIA ELENA ROCA PAGOLA.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("19", "2014-03-05 19:48:23", "2014-03-05 19:48:23", NULL, "1", "2014-03-05 19:48:23", "gonzalez izquierdo", "elizabeth", "3441278", "", "lissygi@hotmail.com", "", "", "", "por favor necesito saber como puedo hacer para sacar una partida de nacimiento me es imposible viajar para pomabamba esperando su pronta respuesta gracias", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("20", "2014-03-13 14:08:50", "2014-03-13 14:08:50", NULL, "1", "2014-03-13 14:08:50", "chau chang", "jorge", "4517374", "966336825", "jorgechauchang@hotmail.com", "lima", "lima", "1", "necesito la partida de nacimiento de PETRONILA CASTILLO RAMIREZ podria depositarles en alguna cuenta los derechos mas el envio,no tenemos quien lo solicite alla y no podemos viajar por el momento,agradecere responderme o darme alguna alternativa", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("21", "2014-03-17 13:40:54", "2014-03-17 13:40:54", NULL, "1", "2014-03-17 13:40:54", "Rodriguez Wilson", "Hugo Franco", "(01) 4172370", "985421687", "h.rodriguezw@gmail.com", "San Isidro", "Lima", "2", "Buenas Tardes,\n\nHe tratado de comunicarme a la central (043) 451417 pero no entra la llamada a ningún anexo. Agradeceré su apoyo al área que corresponda para conseguir la partida de nacimiento de un familiar por motivo de matrimonio, ella actualmente se encuentra acá en Lima.\n\nSus datos son:\nRAMIREZ ROMERO NICASIA TEODORA\nFecha nac.: 07-Dic-1970\nLugar nac.: Provincia Pomabamba, Distrito Huayllán, Caserío Tinyash\n\nPadres: Julian Ramirez Velverde / Luciana Romero Carranza.\n\nAgredeceré brindarme mayor información para conseguir este documento. \n\nMil gracias!!", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("22", "2014-03-18 10:31:36", "2014-03-18 10:31:36", NULL, "1", "2014-03-18 10:31:36", "DE LA CRUZ", "ESTELA", "", "994473795", "ESTELA28C@YAHOO.ES", "VILLA EL SALVADOR", "LIMA", "1", "MI PAPA NO TIENE PARTIDA DE NACIMIENTO POR ELLO ETOY GESTIONANDO CON LA RENIET LA CUAL HA HECHO UN PEDIDO A LA MUNICIPALIDAD DE POMABANBA LUGAR QUE INDICA MI PAPA DE SU NACIMIENTO UNA CONSTANCIA DE NO INSCRIPCION EN DICHA MUNIOCIPALIDAD ESTO FUE PEDIDO EL 2013 PERO HASTA AHORA NO RECIBEN RESPUESTA ME HAN DICHO QUE TENGO QUE COMUNICARME  CON USTEDES POR FAVOR RUEGO TENER RESPUESTA YA QUE NOSOTROS NO PODEMOS VIAJAR NI HAY FAMILIA POR ALLA LOS DATOS SON \nVENTURO DE LA CRUZ ALEJOS SUS PADRES FUERON ALBERTO DE LA CRUZ Y ANTONIA BARROS FECHA DE NACIMIENTO QUE INDICA MI PADRE ES 28 DE JULIO DE 1937 0 1938 NO SABE EXACTAMENTE QUISIERA UNA RESPUESTA", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("23", "2014-03-20 18:27:42", "2014-03-20 18:27:42", NULL, "1", "2014-03-20 18:27:42", "cabrera   jara", "heraclito", "", "", "batrines@hotmail.com", "lima", "lima", "1", "quisiera  solicitar mi partida  de matrimonio, si uds. tuvieran servicio  de  correo, por  favor  indicarme  como podría  realizar el tramite.\nHe  tratado de comunicarme via telef. pero ningún anexo contesto.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("24", "2014-04-09 20:35:27", "2014-04-09 20:35:27", NULL, "1", "2014-04-09 20:35:27", "mile", "more", "", "999424303", "mona_myr@hotmail.com", "", "Lima", "1", "como puedo sacar partida de nacimiento con fecha 26 de Diciembre año 1919  cuanto hay que pagar y en que banco o cuenta para el tramite y correspondencia de envío espero respuesta", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("25", "2014-04-15 15:29:23", "2014-04-15 15:29:23", NULL, "1", "2014-04-15 15:29:23", "DIONISIO SUREZ", "BESTSY", "043451417", "941500741", "alianzalima2-0@hotmail.com", "POMABAMBA", "ANCASH", "2", "KISIERA SABER CMO PODRIA HACER PARA SER PROVEEDOR DE LA MUNICIPALIDAD VENDO HERRAMIENTAS - FERRETERIA DIFERENTES PRODUCTOS .......YA QUE NOS ESTAN HACIENDO LLEGAR DESDE LIMA LOS DIFERENTES PRODUCTOS ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("26", "2014-05-16 16:34:36", "2014-05-16 16:34:36", NULL, "1", "2014-05-16 16:34:36", "chavez jamanca", "aynor eduardo ", "", "990179449", "chavinenze@gmail.com", "chavin de huantar", "huari", "6", "\nhola buenas tardes , un gusto saludarlo soy estudiante de la carrera ciencia la politica  , me gustaria  , conocer pomabamba , reunirme  con los comuneros  de san luis , para brindar  una charla  , ya si poder trabajar junto , soy autoridad de un caserio en chavin de huantar , me guastaria formar una juventud  socialista , una juventud participativo , para asi mantener la comunicacion y envitar las charlas de nuestro sierra de callejon de conchucos , participara en bailes tradicionales , envitarlos  en la municipalidad , envitar  a las autoridades de la comunidad , a participar ya que en nuestro peru existe la democracia , esperando su respuesta  \natte: aynor chavez jamanca", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("27", "2014-05-21 20:06:43", "2014-05-21 20:06:43", NULL, "1", "2014-05-21 20:06:43", "SIMON GONZALES", "JEANETTE VIOLETA", "", "992141177", "jea_violet@hotmail.com", "INDEPENDENCIA", "LIMA", "1", "QUISIERA SOLICITAR UNA PARTIDA DE NACIMIENTO DE MI ABUELITA ALEJANDRINA SANCHEZ CORZO YA FALLECIDA HACE APROXIMADAMENTE EN EL AÑO 1931 POR FAVOR QUISIERA SABER SI ES POSIBLE QUE ME PUEDAN MANDAR ESE DOCUMENTO VIA FAX YA QUE YO ME ENCUENTRO EN LIMA O SI SE TIENE QUE IR A RECOGERLO. GRACIAS POR SU ATENCION BRINDADA ESPERO PRONTA SU RESPUESTA.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("28", "2014-06-01 14:10:24", "2014-06-01 14:10:24", NULL, "1", "2014-06-01 14:10:24", "ROCA SOTELO", "DIANA EVELIN", "", "975710305", "guisela0494@outlook.com", "independencia", "huaraz", "1", "sr. alcalde de la provincia de pomabanmaba, nos dirigimos ante usted alumnos de la escuela profesional de enfermeria de la universidad san pedro - sede huaraz;para ver si usted y su comitiba podrian ayudarnos y/o colaborarnos para poder participar en el huaraz danza a realizarse el 19 de julio del año en curso; ya que a nuestra prestigiosa escuela nos toco respresentarlos en su danza chimaiche que tiene costumbre su localidad. \npara lo cual queremos entrevistarnos con usted y hacer las coordinaciones pertinentes.\nesperamos su pronta respuesta.\natte: delegada de la escuela profesional de enfermeria.", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("29", "2014-06-27 14:04:38", "2014-06-27 14:04:38", NULL, "1", "2014-06-27 14:04:38", "isia* ochoa", "giovanna", "2763984", "", "gio_love1@hotmail.com", "lima", "lima ", "1", "kisiera saber si esta tienen en su registro publico  una solicitud de matrimonio civil del señor orlando vidal jaramillo y la señora jessica pinedo rosales  urge saber eso pork kieren estafar a mi madrte aca en lima ya k ella es pareja del señor orlando vidal jaramillo  se les agradeceria su informacion  gracias ", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("30", "2014-07-21 19:06:02", "2014-07-21 19:06:02", NULL, "1", "2014-07-21 19:06:02", "ramirez borja", "manuel jesus", "4812288", "951750583", "jesusjovi@hotmail.com", "rimac", "lima", "1", ".mi abuelo fallecio y necesito su partida de nacimiento como puedo hacerlo???? Su  nombre es edmundo borja Cueva......el nacio en pomabamba", NULL, NULL, NULL);
#
#
INSERT INTO `contacto` VALUES ("31", "2014-09-04 14:30:10", "2014-09-04 14:30:10", NULL, "1", "2014-09-04 14:30:10", "Sanchez Fuentes", "July", "7191731", "993322262", "julysanchezf@gmail.com", "Lima", "LIma", "", "Somos de la Escuela nacional Superior de Folklore Jose´Maria Arguedas,queremos viajar en octubre para hacer registro de cultores del chimaychi. Deseamos contactar para coordinaciones.\nAtte.\nJSF", NULL, NULL, NULL);
#
#
DROP TABLE IF EXISTS `convocatoria_items`;
#
#
CREATE TABLE `convocatoria_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_subgrupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  `pdf` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `convocatoria_items` VALUES ("1", "2013-08-04 10:52:39", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "c1 a", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("2", "2013-08-04 10:52:55", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "c1 b", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("3", "2013-08-04 10:54:02", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "c1 c", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("4", "2013-08-04 10:54:29", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "c2 a", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("5", "2013-08-04 10:54:36", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "c2 b", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("6", "2013-08-04 10:54:44", "0000-00-00 00:00:00", NULL, "1", "2", NULL, "c2 c", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("7", "2013-08-04 10:55:02", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "c3 a", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("8", "2013-08-04 10:55:10", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "c3 b", "<p> </p>", NULL, NULL, "1", NULL);
#
#
INSERT INTO `convocatoria_items` VALUES ("9", "2013-08-04 10:55:18", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "c3 c", "<p> </p>", NULL, NULL, "1", NULL);
#
#
DROP TABLE IF EXISTS `convocatoria_subgrupos`;
#
#
CREATE TABLE `convocatoria_subgrupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `convocatoria_subgrupos` VALUES ("1", "2013-08-04 10:49:47", "2013-08-06 19:09:05", NULL, "1", "Primera Convocatoria", "1");
#
#
INSERT INTO `convocatoria_subgrupos` VALUES ("2", "2013-08-04 10:49:52", "2013-08-06 19:09:25", NULL, "1", "Segunda Convocatoria", "1");
#
#
INSERT INTO `convocatoria_subgrupos` VALUES ("3", "2013-08-04 10:49:58", "0000-00-00 00:00:00", NULL, "0", "convocatoria 3", "1");
#
#
DROP TABLE IF EXISTS `cotizaciones`;
#
#
CREATE TABLE `cotizaciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `nombre` varchar(80) DEFAULT NULL,
  `ruc` varchar(80) DEFAULT NULL,
  `contacto_nombre` varchar(80) DEFAULT NULL,
  `contacto_cargo` varchar(80) DEFAULT NULL,
  `telefono` varchar(80) DEFAULT NULL,
  `celular` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `tipo_servicio` varchar(80) DEFAULT NULL,
  `envio_servicio` varchar(80) DEFAULT NULL,
  `que_enviar` varchar(80) DEFAULT NULL,
  `envio_valor` varchar(80) DEFAULT NULL,
  `envio_frecuencia` varchar(80) DEFAULT NULL,
  `envio_catidad` varchar(80) DEFAULT NULL,
  `tiempo_entrega` varchar(80) DEFAULT NULL,
  `servicios_complementarios` longtext,
  `servicio_requerido` varchar(80) DEFAULT NULL,
  `tramites_frecuencia` varchar(80) DEFAULT NULL,
  `tramite_direccion` varchar(80) DEFAULT NULL,
  `tramite_provincia` varchar(80) DEFAULT NULL,
  `tramite_fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `tramite_observaciones` longtext,
  `outsourcing_mortizados` varchar(80) DEFAULT NULL,
  `outsourcing_mensajero_interno` varchar(80) DEFAULT NULL,
  `outsourcing_mensajero_externo` varchar(80) DEFAULT NULL,
  `outsourcing_coordinador` varchar(80) DEFAULT NULL,
  `oursourcing_tiempo` varchar(80) DEFAULT NULL,
  `outsourcing_observaciones` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `documentos_grupos`;
#
#
CREATE TABLE `documentos_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `documentos_items`;
#
#
CREATE TABLE `documentos_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `fichero` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=502 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `news_fotos` VALUES ("1", "2011-12-14 04:50:50", "0000-00-00 00:00:00", NULL, "1", "312", "newite_1323856250_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("2", "2011-12-14 04:51:33", "0000-00-00 00:00:00", NULL, "1", "197", "newite_1323856287_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("3", "2011-12-14 04:51:59", "0000-00-00 00:00:00", NULL, "1", "196", "newite_1323856319_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("4", "2011-12-14 04:52:44", "0000-00-00 00:00:00", NULL, "1", "147", "newite_1323856363_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("5", "2011-12-14 04:54:08", "0000-00-00 00:00:00", NULL, "1", "145", "newite_1323856447_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("6", "2011-12-14 04:54:36", "0000-00-00 00:00:00", NULL, "1", "144", "newite_1323856475_480x360.jpg", NULL, "2");
#
#
INSERT INTO `news_fotos` VALUES ("7", "2011-12-15 09:54:32", "0000-00-00 00:00:00", NULL, "1", "437", "newite_1323960871_510x285.jpg", "Ingreso promedio mensual de trabajadores limeños subió en 13,7%", "4");
#
#
INSERT INTO `news_fotos` VALUES ("8", "2011-12-15 18:34:07", "0000-00-00 00:00:00", NULL, "1", "438", "newite_1323992047_640x384.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("9", "2011-12-15 18:37:12", "0000-00-00 00:00:00", NULL, "1", "439", "newite_1323992232_640x384.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("10", "2011-12-15 18:42:07", "0000-00-00 00:00:00", NULL, "1", "440", "newite_1323992527_420x279.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("11", "2011-12-15 18:44:13", "0000-00-00 00:00:00", NULL, "1", "441", "newite_1323992652_420x280.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("12", "2011-12-15 18:49:42", "0000-00-00 00:00:00", NULL, "1", "442", "newite_1323992982_450x357.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("13", "2011-12-15 18:52:58", "0000-00-00 00:00:00", NULL, "1", "443", "newite_1323993178_450x300.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("14", "2011-12-15 19:01:28", "0000-00-00 00:00:00", NULL, "1", "445", "newite_1323993687_640x480.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("15", "2011-12-15 19:06:35", "0000-00-00 00:00:00", NULL, "1", "446", "newite_1323993994_630x355.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("16", "2011-12-15 19:11:47", "0000-00-00 00:00:00", NULL, "1", "447", "newite_1323994306_640x480.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("17", "2011-12-15 19:17:55", "0000-00-00 00:00:00", NULL, "1", "448", "newite_1323994674_630x355.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("18", "2011-12-15 19:23:38", "0000-00-00 00:00:00", NULL, "1", "449", "newite_1323995017_420x280.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("19", "2011-12-15 19:25:42", "0000-00-00 00:00:00", NULL, "1", "450", "newite_1323995142_420x403.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("20", "2011-12-15 19:27:24", "0000-00-00 00:00:00", NULL, "1", "451", "newite_1323995244_420x280.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("21", "2011-12-15 19:29:10", "0000-00-00 00:00:00", NULL, "1", "452", "newite_1323995349_420x395.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("22", "2011-12-15 19:31:24", "0000-00-00 00:00:00", NULL, "1", "453", "newite_1323995484_640x384.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("23", "2011-12-15 19:36:29", "0000-00-00 00:00:00", NULL, "1", "454", "newite_1323995789_420x330.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("24", "2011-12-15 19:38:52", "0000-00-00 00:00:00", NULL, "1", "455", "newite_1323995932_420x319.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("25", "2011-12-15 19:42:48", "0000-00-00 00:00:00", NULL, "1", "456", "newite_1323996167_640x442.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("26", "2011-12-15 19:44:44", "0000-00-00 00:00:00", NULL, "1", "457", "newite_1323996284_640x384.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("27", "2011-12-15 19:46:31", "0000-00-00 00:00:00", NULL, "1", "458", "newite_1323996390_640x384.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("28", "2012-01-12 07:21:59", "0000-00-00 00:00:00", NULL, "1", "461", "newite_1326370738_800x600.jpg", NULL, "3");
#
#
INSERT INTO `news_fotos` VALUES ("29", "2012-01-26 06:30:42", "2012-01-26 06:34:40", NULL, "1", NULL, "newite_1327577442_183x121.jpg", "MINISTRA DEL MINDES", "11");
#
#
INSERT INTO `news_fotos` VALUES ("30", "2012-03-01 17:05:08", "0000-00-00 00:00:00", NULL, "1", "472", "newite_1330639501_514x289.jpg", NULL, "11");
#
#
INSERT INTO `news_fotos` VALUES ("31", "2012-05-14 05:54:39", "0000-00-00 00:00:00", NULL, "1", "473", "newite_1336992878_392x223.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("35", "2012-05-14 06:26:06", "0000-00-00 00:00:00", NULL, "1", "474", "newite_1336994765_711x474.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("33", "2012-05-14 06:14:42", "0000-00-00 00:00:00", NULL, "1", "475", "newite_1336994081_148x138.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("34", "2012-05-14 06:20:49", "0000-00-00 00:00:00", NULL, "1", "476", "newite_1336994449_123x100.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("36", "2012-05-14 11:16:28", "0000-00-00 00:00:00", NULL, "1", "477", "newite_1337012188_148x138.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("37", "2012-05-14 11:31:06", "0000-00-00 00:00:00", NULL, "1", "478", "newite_1337013065_843x499.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("38", "2012-05-14 12:22:39", "0000-00-00 00:00:00", NULL, "1", "479", "newite_1337016158_640x426.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("39", "2012-05-14 12:31:41", "0000-00-00 00:00:00", NULL, "1", "480", "newite_1337016701_148x138.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("40", "2012-05-17 04:48:15", "0000-00-00 00:00:00", NULL, "1", "481", "newite_1337248095_480x270.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("41", "2012-06-06 12:43:15", "0000-00-00 00:00:00", NULL, "1", "482", "newite_1339004589_336x598.gif", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("42", "2012-06-06 12:46:58", "0000-00-00 00:00:00", NULL, "1", "483", "newite_1339004812_350x262.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("43", "2012-06-06 13:09:08", "0000-00-00 00:00:00", NULL, "1", "484", "newite_1339006142_148x138.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("44", "2012-06-06 13:16:56", "0000-00-00 00:00:00", NULL, "1", "486", "newite_1339006605_1600x961.jpg", NULL, "4");
#
#
INSERT INTO `news_fotos` VALUES ("45", "2012-06-22 04:05:09", "0000-00-00 00:00:00", NULL, "1", "489", "newite_1340355728_500x353.jpg", "sadasd", "1");
#
#
INSERT INTO `news_fotos` VALUES ("46", "2012-06-22 04:26:57", "0000-00-00 00:00:00", NULL, "1", "490", "newite_1340357036_480x270.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("47", "2012-06-22 04:36:18", "0000-00-00 00:00:00", NULL, "1", "999999927", "newite_1340357598_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("48", "2012-06-22 04:39:39", "0000-00-00 00:00:00", NULL, "1", "491", "newite_1340357799_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("49", "2012-06-22 04:53:00", "0000-00-00 00:00:00", NULL, "1", "493", "newite_1340358600_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("50", "2012-06-26 13:30:15", "0000-00-00 00:00:00", NULL, "1", "999999119", "newite_1340735235_800x600.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("51", "2012-06-27 05:07:34", "0000-00-00 00:00:00", NULL, "1", "498", "newite_1340791474_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("52", "2012-06-27 11:39:04", "0000-00-00 00:00:00", NULL, "1", "999999243", "newite_1340814963_472x394.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("53", "2012-06-27 11:44:01", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340815261_250x200.jpg", "prueba", "1");
#
#
INSERT INTO `news_fotos` VALUES ("54", "2012-06-27 11:51:47", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340815727_250x200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("55", "2012-06-27 11:55:12", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340815931_250x200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("56", "2012-06-27 12:21:31", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340817511_250x200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("57", "2012-06-27 12:24:48", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340817708_250x200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("58", "2012-06-27 12:28:31", "0000-00-00 00:00:00", NULL, "1", "999999358", "newite_1340817930_250x200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("59", "2012-06-27 13:12:15", "0000-00-00 00:00:00", NULL, "1", "999999446", "newite_1340820555_472x394.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("73", "2012-06-28 05:48:09", "0000-00-00 00:00:00", NULL, "1", "502", "newite_1340880308_792x587.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("74", "2012-06-28 06:18:24", "0000-00-00 00:00:00", NULL, "1", "503", "newite_1340882124_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("75", "2012-06-28 07:10:47", "0000-00-00 00:00:00", NULL, "1", "513", "newite_1340885259_3456x2304.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("76", "2012-06-28 11:28:04", "0000-00-00 00:00:00", NULL, "1", "514", "newite_1340900703_897x562.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("77", "2012-06-28 11:35:18", "0000-00-00 00:00:00", NULL, "1", "515", "newite_1340901138_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("78", "2012-06-28 11:41:52", "0000-00-00 00:00:00", NULL, "1", "516", "newite_1340901532_290x193.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("79", "2012-06-28 11:51:33", "0000-00-00 00:00:00", NULL, "1", "517", "newite_1340902113_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("80", "2012-06-28 13:32:38", "0000-00-00 00:00:00", NULL, "1", "518", "newite_1340908177_640x426.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("81", "2012-06-28 13:41:09", "0000-00-00 00:00:00", NULL, "1", "999999313", "newite_1340908688_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("82", "2012-06-28 13:51:48", "0000-00-00 00:00:00", NULL, "1", "519", "newite_1340909328_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("83", "2012-07-02 04:01:46", "0000-00-00 00:00:00", NULL, "1", "520", "newite_1341219526_243x67.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("84", "2012-07-02 04:07:15", "0000-00-00 00:00:00", NULL, "1", "521", "newite_1341219855_100x75.gif", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("85", "2012-07-02 04:14:36", "0000-00-00 00:00:00", NULL, "1", "999999194", "newite_1341220295_396x293.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("86", "2012-07-02 04:34:15", "0000-00-00 00:00:00", NULL, "1", "522", "newite_1341221475_396x293.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("87", "2012-07-02 04:49:51", "0000-00-00 00:00:00", NULL, "1", "523", "newite_1341222410_310x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("88", "2012-07-02 04:57:00", "0000-00-00 00:00:00", NULL, "1", "524", "newite_1341222839_550x412.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("89", "2012-07-02 05:56:35", "0000-00-00 00:00:00", NULL, "1", "525", "newite_1341226413_1600x1200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("90", "2012-07-02 06:09:07", "0000-00-00 00:00:00", NULL, "1", "526", "newite_1341227167_600x371.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("91", "2012-07-02 06:30:16", "0000-00-00 00:00:00", NULL, "1", "527", "newite_1341228436_195x195.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("92", "2012-07-02 06:35:00", "0000-00-00 00:00:00", NULL, "1", "528", "newite_1341228720_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("93", "2012-07-02 06:50:38", "0000-00-00 00:00:00", NULL, "1", "529", "newite_1341229657_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("94", "2012-07-02 07:44:20", "0000-00-00 00:00:00", NULL, "1", "530", "newite_1341232880_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("96", "2012-07-02 11:01:00", "0000-00-00 00:00:00", NULL, "1", "532", "newite_1341244679_450x308.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("97", "2012-07-02 11:40:59", "0000-00-00 00:00:00", NULL, "1", "485", "newite_1341247079_480x270.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("98", "2012-07-02 11:45:23", "0000-00-00 00:00:00", NULL, "1", "504", "newite_1341247343_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("99", "2012-07-02 11:51:44", "0000-00-00 00:00:00", NULL, "1", "505", "newite_1341247724_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("100", "2012-07-02 11:59:48", "0000-00-00 00:00:00", NULL, "1", "507", "newite_1341248207_837x509.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("101", "2012-07-02 12:03:28", "0000-00-00 00:00:00", NULL, "1", "508", "newite_1341248428_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("102", "2012-07-02 12:07:38", "0000-00-00 00:00:00", NULL, "1", "509", "newite_1341248678_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("103", "2012-07-03 05:00:26", "0000-00-00 00:00:00", NULL, "1", "533", "newite_1341309445_792x587.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("117", "2012-07-04 11:52:58", "0000-00-00 00:00:00", NULL, "1", "999999311", "newite_1341420778_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("118", "2012-07-04 12:06:14", "0000-00-00 00:00:00", NULL, "1", "492", "newite_1341421574_148x138.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("120", "2012-07-09 04:19:18", "0000-00-00 00:00:00", NULL, "1", "999999513", "newite_1341825557_640x426.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("158", "2012-08-10 11:41:25", "0000-00-00 00:00:00", NULL, "1", "999999514", "newite_1344616884_800x600.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("159", "2012-08-10 12:05:11", "0000-00-00 00:00:00", NULL, "1", "536", "newite_1344618310_800x600.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("224", "2013-08-07 09:29:54", "0000-00-00 00:00:00", NULL, "1", "539", "newite_1375885793_590x384.jpg", "Túnel Punta Olímpica", "1");
#
#
INSERT INTO `news_fotos` VALUES ("161", "2013-06-27 11:34:18", "0000-00-00 00:00:00", NULL, "1", "540", "newite_1372350857_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("221", "2013-08-01 11:29:34", "0000-00-00 00:00:00", NULL, "1", "541", "newite_1375374574_398x223.jpg", "!EL HIELO SE VA!", "1");
#
#
INSERT INTO `news_fotos` VALUES ("163", "2013-06-27 11:43:37", "0000-00-00 00:00:00", NULL, "1", "542", "newite_1372351417_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("220", "2013-08-01 11:19:45", "0000-00-00 00:00:00", NULL, "1", "543", "newite_1375373985_397x296.jpg", "Princesita de Yungay", "1");
#
#
INSERT INTO `news_fotos` VALUES ("165", "2013-06-27 11:49:12", "0000-00-00 00:00:00", NULL, "1", "544", "newite_1372351752_310x174.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("166", "2013-06-27 11:56:05", "0000-00-00 00:00:00", NULL, "1", "545", "newite_1372352164_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("167", "2013-06-27 12:00:53", "0000-00-00 00:00:00", NULL, "1", "546", "newite_1372352453_320x240.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("168", "2013-06-27 12:07:26", "0000-00-00 00:00:00", NULL, "1", "547", "newite_1372352845_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("169", "2013-06-27 12:09:45", "0000-00-00 00:00:00", NULL, "1", "548", "newite_1372352985_599x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("170", "2013-06-27 12:19:07", "0000-00-00 00:00:00", NULL, "1", "549", "newite_1372353546_310x174.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("171", "2013-06-27 12:24:03", "0000-00-00 00:00:00", NULL, "1", "550", "newite_1372353843_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("172", "2013-06-27 12:28:27", "0000-00-00 00:00:00", NULL, "1", "551", "newite_1372354106_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("173", "2013-06-27 12:29:42", "0000-00-00 00:00:00", NULL, "1", "552", "newite_1372354181_512x288.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("174", "2013-06-27 12:32:13", "0000-00-00 00:00:00", NULL, "1", "553", "newite_1372354333_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("175", "2013-06-27 12:33:53", "0000-00-00 00:00:00", NULL, "1", "554", "newite_1372354433_600x374.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("217", "2013-08-01 10:58:53", "0000-00-00 00:00:00", NULL, "1", "591", "newite_1375372732_510x284.jpg", "ÁNCASH SUBIÓ A 15 EL NÚMERO DE MUERTOS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("177", "2013-07-01 11:56:07", "0000-00-00 00:00:00", NULL, "1", "556", "newite_1372697766_800x581.jpg", "Juramentación de Alcaldes Pedáneos 2013", "1");
#
#
INSERT INTO `news_fotos` VALUES ("178", "2013-07-01 12:10:31", "0000-00-00 00:00:00", NULL, "1", "557", "newite_1372698631_602x326.jpg", "NUESTRO MAS SENTIDO PESAME", "1");
#
#
INSERT INTO `news_fotos` VALUES ("179", "2013-07-01 14:44:46", "0000-00-00 00:00:00", NULL, "1", "558", "newite_1372707886_500x296.jpg", "VACACIONES ÚTILES 2013", "1");
#
#
INSERT INTO `news_fotos` VALUES ("180", "2013-07-02 11:14:12", "0000-00-00 00:00:00", NULL, "1", "999999800", "newite_1372781652_500x375.jpg", "AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("181", "2013-07-02 11:14:53", "0000-00-00 00:00:00", NULL, "1", "559", "newite_1372781693_500x375.jpg", "AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("182", "2013-07-02 11:17:05", "0000-00-00 00:00:00", NULL, "1", "560", "newite_1372781825_500x375.jpg", "ATENCIONDE EMERGENCIAS EN TEMPORADA DE LLUVIAS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("183", "2013-07-02 11:18:50", "0000-00-00 00:00:00", NULL, "1", "561", "newite_1372781930_500x375.jpg", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SANJUAN", "1");
#
#
INSERT INTO `news_fotos` VALUES ("184", "2013-07-02 11:20:24", "0000-00-00 00:00:00", NULL, "1", "562", "newite_1372782023_500x375.jpg", "CONSTRUCCION DE 4 AULAS PARA I.E. NIVEL SECUND. DECONOPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("185", "2013-07-02 11:22:28", "0000-00-00 00:00:00", NULL, "1", "563", "newite_1372782148_500x375.jpg", "CONSTRUCCION DE AULAS PARA CEI. 232 ALPAMAYO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("186", "2013-07-02 11:23:42", "0000-00-00 00:00:00", NULL, "1", "564", "newite_1372782221_500x375.jpg", "CONSTRUCCION DE AULAS PARA EL JARDIN DE NIÑOS N° 196 DE PUTACA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("187", "2013-07-02 11:24:56", "0000-00-00 00:00:00", NULL, "1", "565", "newite_1372782295_500x375.jpg", "CONSTRUCCION DE LA CARRERETA ANGASCANCHA - RAJRAJPAMPA II ETAPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("188", "2013-07-02 11:26:30", "0000-00-00 00:00:00", NULL, "1", "566", "newite_1372782389_500x375.jpg", "CONSTRUCCION DEL SISTEMA DE AGUA POTABLE EN COTOCANCHA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("189", "2013-07-02 11:28:39", "0000-00-00 00:00:00", NULL, "1", "567", "newite_1372782519_500x375.jpg", "CONSTRUCCION DEL SISTEMA DE RIEGO POR ASPERSION GARHUATINYA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("190", "2013-07-02 11:30:07", "0000-00-00 00:00:00", NULL, "1", "568", "newite_1372782605_500x375.jpg", "CONSTRUCCION DEL SISTEMA DE RIEGO PRESURIZADO EN CHOGO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("191", "2013-07-02 11:31:46", "0000-00-00 00:00:00", NULL, "1", "569", "newite_1372782705_500x375.jpg", "CONSTUCCION DE RIEGO TECNIFICADO YANACOLPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("192", "2013-07-02 11:33:14", "0000-00-00 00:00:00", NULL, "1", "570", "newite_1372782794_500x375.jpg", "CONTRUCCION DE AULAS CEI. PUTACA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("193", "2013-07-02 11:34:36", "0000-00-00 00:00:00", NULL, "1", "571", "newite_1372782875_500x375.jpg", "CONTRUCCION DE PUENTE CARROSABLE EN MAYURURI CHUYAS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("194", "2013-07-02 11:36:06", "0000-00-00 00:00:00", NULL, "1", "572", "newite_1372782966_500x375.jpg", "CREACION DEL LOCAL DE USO MULTIPLE EN EL CASERIO DE VENTANA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("195", "2013-07-02 11:37:37", "0000-00-00 00:00:00", NULL, "1", "573", "newite_1372783057_500x375.jpg", "CREACION DEL PUENTE CARROSABLE EN JANCAPAMPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("196", "2013-07-02 11:40:04", "0000-00-00 00:00:00", NULL, "1", "574", "newite_1372783204_500x375.jpg", "CREACION DE PISTAS Y VEREDAS DEL Km. 0+00 al km. 1+252 CARRETERA A LOS BAÑOS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("197", "2013-07-02 11:41:21", "0000-00-00 00:00:00", NULL, "1", "575", "newite_1372783280_500x375.jpg", "MANTENIMIENTO DEL CANAL CHUYAS HUAYCHO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("198", "2013-07-02 11:42:25", "0000-00-00 00:00:00", NULL, "1", "576", "newite_1372783345_500x375.jpg", "MANTENIMIENTO Y REHABILITACION DEL CANAL ALPAMAYO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("199", "2013-07-02 11:43:37", "0000-00-00 00:00:00", NULL, "1", "577", "newite_1372783417_500x375.jpg", "MEJORAMIENTO DEL SISTEMA DE AGUA POTABLE EN SOCOSBAMBA PAROBAMBA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("200", "2013-07-02 11:49:19", "0000-00-00 00:00:00", NULL, "1", "578", "newite_1372783759_500x375.jpg", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL JARDIN DE NIÑOS EN CONO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("201", "2013-07-02 11:51:00", "0000-00-00 00:00:00", NULL, "1", "579", "newite_1372783859_500x375.jpg", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL SISTEMA DE AGUA POTABLE", "1");
#
#
INSERT INTO `news_fotos` VALUES ("202", "2013-07-02 11:52:07", "0000-00-00 00:00:00", NULL, "1", "580", "newite_1372783926_500x375.jpg", "CONSTRUCCION DE 4 AULAS PARA EL NIVEL SECUNDARIO DE COTOCANCHA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("203", "2013-07-02 11:53:14", "0000-00-00 00:00:00", NULL, "1", "581", "newite_1372783994_500x375.jpg", "CONSTRUCCION DE TAMBOS EN CHACUAPAMPA OBRA POR GESTION", "1");
#
#
INSERT INTO `news_fotos` VALUES ("204", "2013-07-02 11:54:15", "0000-00-00 00:00:00", NULL, "1", "582", "newite_1372784055_500x375.jpg", "CONSTRUCCIONDE TROCHA CARROSABLE ALPAMAYO PISCOS QUINUABAMBA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("205", "2013-07-02 11:55:33", "0000-00-00 00:00:00", NULL, "1", "583", "newite_1372784132_500x375.jpg", "CONSTRUCCION DE TROCHA CARROSABLE COCHAPAMPA CONOPAPAMPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("206", "2013-07-02 11:58:16", "0000-00-00 00:00:00", NULL, "1", "584", "newite_1372784296_500x375.jpg", "NIVELACION DE TERRENO PARA LA CONSTRUCCION DEL J.N CONOPAPAMPA", "1");
#
#
INSERT INTO `news_fotos` VALUES ("207", "2013-07-31 12:34:13", "0000-00-00 00:00:00", NULL, "1", "585", "newite_1375292053_586x367.jpg", "FLASH ELECTORAL EN ANCASH", "1");
#
#
INSERT INTO `news_fotos` VALUES ("208", "2013-07-31 12:51:42", "0000-00-00 00:00:00", NULL, "1", "586", "newite_1375293101_700x414.jpg", "PRESIDENTE DE LA CORTE SUPERIOR DE ANCASH", "1");
#
#
INSERT INTO `news_fotos` VALUES ("209", "2013-07-31 13:04:26", "0000-00-00 00:00:00", NULL, "1", "587", "newite_1375293863_800x522.jpg", "IVP POMABAMBA 1er Puesto Gestión Vial", "1");
#
#
INSERT INTO `news_fotos` VALUES ("210", "2013-07-31 13:38:57", "0000-00-00 00:00:00", NULL, "1", "588", "newite_1375295936_700x464.jpg", "JUSTO HOMENAJE AL ARTISTA PLASTICO", "1");
#
#
INSERT INTO `news_fotos` VALUES ("211", "2013-07-31 13:57:33", "0000-00-00 00:00:00", NULL, "1", "589", "newite_1375297052_497x311.jpg", "CENTRO DE COMPUTO DEL ISPP-P", "1");
#
#
INSERT INTO `news_fotos` VALUES ("214", "2013-07-31 14:20:48", "0000-00-00 00:00:00", NULL, "1", "590", "newite_1375298447_700x414.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("216", "2013-08-01 10:52:53", "0000-00-00 00:00:00", NULL, "1", "555", "newite_1375372373_398x297.jpg", "CLUB ALFONSO UGARTE DE AURA CAMPEÓN", "1");
#
#
INSERT INTO `news_fotos` VALUES ("218", "2013-08-01 11:06:58", "0000-00-00 00:00:00", NULL, "1", "592", "newite_1375373218_413x274.jpg", "Hallago Arqueológico", "1");
#
#
INSERT INTO `news_fotos` VALUES ("219", "2013-08-01 11:13:19", "0000-00-00 00:00:00", NULL, "1", "593", "newite_1375373598_388x270.jpg", "JÓVENES ANCASHINOS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("222", "2013-08-06 08:52:04", "0000-00-00 00:00:00", NULL, "1", "594", "newite_1375797123_694x568.jpg", "Mujer Policía Pomabambina", "1");
#
#
INSERT INTO `news_fotos` VALUES ("223", "2013-08-06 16:14:22", "0000-00-00 00:00:00", NULL, "1", "595", "newite_1375823662_500x375.jpg", "Ex Alcalde de Pomabamba", "1");
#
#
INSERT INTO `news_fotos` VALUES ("226", "2013-08-07 15:45:10", "0000-00-00 00:00:00", NULL, "1", "596", "newite_1375908309_500x279.jpg", "Gobernador de Piscobamba", "1");
#
#
INSERT INTO `news_fotos` VALUES ("227", "2013-08-12 18:11:34", "0000-00-00 00:00:00", NULL, "1", "597", "newite_1376349094_590x348.jpg", "Vacaciones escolares se amplían", "1");
#
#
INSERT INTO `news_fotos` VALUES ("228", "2013-08-14 18:22:31", "0000-00-00 00:00:00", NULL, "1", "598", "newite_1376522551_590x442.jpg", "Dr. Adolfo López Escudero", "1");
#
#
INSERT INTO `news_fotos` VALUES ("229", "2013-08-14 18:43:26", "0000-00-00 00:00:00", NULL, "1", "599", "newite_1376523806_590x442.jpg", "Primer caso AH2N3 en Áncash", "1");
#
#
INSERT INTO `news_fotos` VALUES ("230", "2013-08-14 18:53:08", "0000-00-00 00:00:00", NULL, "1", "600", "newite_1376524388_590x442.jpg", "canon minero se redujo en 40%", "1");
#
#
INSERT INTO `news_fotos` VALUES ("231", "2013-08-14 19:03:01", "0000-00-00 00:00:00", NULL, "1", "601", "newite_1376524980_590x442.jpg", "Modesto Julca “Ancash declarada en emergencia”", "1");
#
#
INSERT INTO `news_fotos` VALUES ("232", "2013-08-15 18:22:31", "0000-00-00 00:00:00", NULL, "1", "602", "newite_1376608951_590x348.jpg", "Serenazgos de la Municipalidad", "1");
#
#
INSERT INTO `news_fotos` VALUES ("234", "2013-08-15 18:37:41", "0000-00-00 00:00:00", NULL, "1", "603", "newite_1376609860_590x348.jpg", "CHALECOS A MOTOTAXISTAS", "1");
#
#
INSERT INTO `news_fotos` VALUES ("235", "2013-08-18 16:01:22", "0000-00-00 00:00:00", NULL, "1", "604", "newite_1376859682_590x348.jpg", "Colegio Fidel Olivas campeón ", "1");
#
#
INSERT INTO `news_fotos` VALUES ("236", "2013-08-20 13:14:40", "0000-00-00 00:00:00", NULL, "1", "605", "newite_1377022480_590x348.jpg", "Firma Convenio con la UNI", "1");
#
#
INSERT INTO `news_fotos` VALUES ("237", "2013-08-21 08:58:21", "0000-00-00 00:00:00", NULL, "1", "606", "newite_1377093500_558x348.jpg", "Feriados largos en el Perú", "1");
#
#
INSERT INTO `news_fotos` VALUES ("238", "2013-08-23 09:33:35", "0000-00-00 00:00:00", NULL, "1", "607", "newite_1377268414_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("239", "2013-08-24 20:13:58", "2013-08-24 20:15:09", NULL, "1", "608", "newite_1377393238_300x248.jpg", "Al parecer esta descripción no se ve en la página web", "1");
#
#
INSERT INTO `news_fotos` VALUES ("240", "2013-08-29 15:39:01", "0000-00-00 00:00:00", NULL, "1", "999999283", "newite_1377808741_280x180.jpg", "Primera Dama participo en el aniversario de Yanama.", "1");
#
#
INSERT INTO `news_fotos` VALUES ("241", "2013-08-29 15:45:17", "2013-08-29 15:46:25", NULL, "1", "609", "newite_1377809116_280x180.jpg", "Primera Dama participa en aniversario de Yanama.", "1");
#
#
INSERT INTO `news_fotos` VALUES ("242", "2013-08-29 15:51:08", "0000-00-00 00:00:00", NULL, "1", "610", "newite_1377809468_280x180.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("243", "2013-09-03 11:34:58", "0000-00-00 00:00:00", NULL, "1", "999999601", "newite_1378226097_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("244", "2013-09-03 11:38:47", "0000-00-00 00:00:00", NULL, "1", "611", "newite_1378226326_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("246", "2013-09-03 11:51:23", "0000-00-00 00:00:00", NULL, "1", "999999774", "newite_1378227082_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("247", "2013-09-03 11:51:51", "0000-00-00 00:00:00", NULL, "1", "999999774", "newite_1378227110_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("248", "2013-09-03 11:59:23", "0000-00-00 00:00:00", NULL, "1", "612", "newite_1378227562_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("250", "2013-09-03 12:34:01", "0000-00-00 00:00:00", NULL, "1", "999999325", "newite_1378229640_720x405.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("251", "2013-09-03 12:36:08", "0000-00-00 00:00:00", NULL, "1", "613", "newite_1378229767_720x405.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("252", "2013-09-03 12:36:21", "0000-00-00 00:00:00", NULL, "1", "613", "newite_1378229781_464x308.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("377", "2013-10-29 10:55:03", "0000-00-00 00:00:00", NULL, "1", "635", "newite_1383062102_400x400.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("378", "2013-11-08 10:46:01", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925558_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("255", "2013-09-03 15:13:53", "2013-09-03 15:15:16", NULL, "1", "614", "newite_1378239233_290x174.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("256", "2013-09-09 20:42:51", "0000-00-00 00:00:00", NULL, "1", "615", "newite_1378777371_196x256.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("257", "2013-09-16 12:09:31", "0000-00-00 00:00:00", NULL, "1", "999999916", "newite_1379351365_2173x3451.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("258", "2013-09-16 17:08:42", "0000-00-00 00:00:00", NULL, "1", "616", "newite_1379369321_1556x1037.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("259", "2013-09-16 17:10:41", "0000-00-00 00:00:00", NULL, "1", "616", "newite_1379369439_1556x1037.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("260", "2013-09-18 09:29:16", "0000-00-00 00:00:00", NULL, "1", "999999697", "newite_1379514556_291x173.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("262", "2013-09-18 09:36:40", "0000-00-00 00:00:00", NULL, "1", "999999295", "newite_1379514999_291x173.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("263", "2013-09-18 09:37:49", "0000-00-00 00:00:00", NULL, "1", "618", "newite_1379515069_291x173.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("264", "2013-09-18 09:55:10", "0000-00-00 00:00:00", NULL, "1", "619", "newite_1379516110_450x299.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("265", "2013-09-18 10:21:38", "0000-00-00 00:00:00", NULL, "1", "620", "newite_1379517697_600x355.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("268", "2013-09-18 11:11:43", "0000-00-00 00:00:00", NULL, "1", "621", "newite_1379520703_300x168.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("269", "2013-09-30 19:23:30", "0000-00-00 00:00:00", NULL, "1", "999999510", "newite_1380587008_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("270", "2013-09-30 19:37:10", "0000-00-00 00:00:00", NULL, "1", "999999345", "newite_1380587827_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("271", "2013-09-30 19:38:32", "0000-00-00 00:00:00", NULL, "1", "622", "newite_1380587909_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("272", "2013-10-01 16:20:48", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380662445_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("277", "2013-10-01 17:28:30", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380666508_2168x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("274", "2013-10-01 16:22:54", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380662571_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("275", "2013-10-01 16:24:38", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380662676_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("276", "2013-10-01 17:25:15", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380666313_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("278", "2013-10-01 17:30:04", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380666598_2168x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("279", "2013-10-01 17:31:12", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380666670_1472x978.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("280", "2013-10-01 17:37:19", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667037_1600x1200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("281", "2013-10-01 17:37:54", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667072_1600x1200.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("282", "2013-10-01 17:39:25", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667161_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("283", "2013-10-01 17:40:14", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667211_2040x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("284", "2013-10-01 17:43:23", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667401_2029x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("285", "2013-10-01 17:44:07", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667445_2061x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("286", "2013-10-01 17:45:16", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667513_2042x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("287", "2013-10-01 17:51:06", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380667864_2043x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("288", "2013-10-01 19:29:22", "0000-00-00 00:00:00", NULL, "1", "623", "newite_1380673760_2029x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("289", "2013-10-02 16:03:50", "0000-00-00 00:00:00", NULL, "1", "999999137", "newite_1380747826_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("290", "2013-10-02 17:20:03", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380752400_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("291", "2013-10-02 17:29:20", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380752958_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("292", "2013-10-02 17:30:22", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753020_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("293", "2013-10-02 17:31:37", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753095_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("294", "2013-10-02 17:33:41", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753219_2034x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("295", "2013-10-02 17:34:16", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753254_2037x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("296", "2013-10-02 17:35:14", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753312_2029x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("297", "2013-10-02 17:37:23", "0000-00-00 00:00:00", NULL, "1", "624", "newite_1380753441_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("298", "2013-10-02 18:25:27", "0000-00-00 00:00:00", NULL, "1", "622", "newite_1380756324_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("299", "2013-10-16 12:42:31", "0000-00-00 00:00:00", NULL, "1", "625", "newite_1381945348_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("300", "2013-10-16 12:44:41", "0000-00-00 00:00:00", NULL, "1", "625", "newite_1381945479_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("301", "2013-10-16 12:48:35", "0000-00-00 00:00:00", NULL, "1", "625", "newite_1381945712_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("302", "2013-10-18 09:43:49", "0000-00-00 00:00:00", NULL, "1", "626", "newite_1382107427_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("303", "2013-10-18 09:46:10", "0000-00-00 00:00:00", NULL, "1", "626", "newite_1382107568_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("304", "2013-10-18 10:09:58", "0000-00-00 00:00:00", NULL, "1", "626", "newite_1382108994_2040x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("305", "2013-10-18 10:11:20", "0000-00-00 00:00:00", NULL, "1", "626", "newite_1382109078_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("306", "2013-10-18 10:37:11", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382110627_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("307", "2013-10-18 10:37:33", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382110651_2040x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("325", "2013-10-18 16:01:30", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382130088_2039x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("309", "2013-10-18 15:53:29", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129606_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("310", "2013-10-18 15:53:51", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129628_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("311", "2013-10-18 15:54:29", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129666_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("312", "2013-10-18 15:54:53", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129691_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("313", "2013-10-18 15:55:22", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129719_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("314", "2013-10-18 15:55:51", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129749_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("315", "2013-10-18 15:56:20", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129777_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("316", "2013-10-18 15:57:00", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129817_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("317", "2013-10-18 15:57:26", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129843_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("318", "2013-10-18 15:57:48", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129865_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("319", "2013-10-18 15:58:13", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129891_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("320", "2013-10-18 15:58:59", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129936_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("321", "2013-10-18 15:59:20", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129958_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("322", "2013-10-18 15:59:53", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382129991_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("323", "2013-10-18 16:00:26", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382130023_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("324", "2013-10-18 16:00:46", "0000-00-00 00:00:00", NULL, "1", "627", "newite_1382130043_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("326", "2013-10-21 16:42:47", "0000-00-00 00:00:00", NULL, "1", "628", "newite_1382391764_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("327", "2013-10-21 16:47:34", "0000-00-00 00:00:00", NULL, "1", "999999700", "newite_1382392051_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("328", "2013-10-21 16:49:40", "0000-00-00 00:00:00", NULL, "1", "629", "newite_1382392177_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("329", "2013-10-21 16:50:05", "0000-00-00 00:00:00", NULL, "1", "629", "newite_1382392201_2037x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("330", "2013-10-22 12:38:40", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382463517_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("331", "2013-10-22 12:41:02", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382463660_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("332", "2013-10-22 12:43:46", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382463823_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("333", "2013-10-22 12:45:44", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382463942_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("334", "2013-10-22 12:47:11", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464026_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("335", "2013-10-22 12:47:52", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464069_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("336", "2013-10-22 12:48:51", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464128_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("337", "2013-10-22 12:50:29", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464227_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("338", "2013-10-22 12:52:24", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464342_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("339", "2013-10-22 12:53:00", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464378_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("340", "2013-10-22 12:53:58", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464436_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("341", "2013-10-22 12:55:18", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464516_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("342", "2013-10-22 12:56:32", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464589_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("343", "2013-10-22 12:58:10", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464687_2037x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("344", "2013-10-22 12:58:44", "0000-00-00 00:00:00", NULL, "1", "630", "newite_1382464722_2038x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("345", "2013-10-28 17:42:17", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000136_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("346", "2013-10-28 17:43:16", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000195_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("347", "2013-10-28 17:43:41", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000219_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("348", "2013-10-28 17:43:59", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000237_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("349", "2013-10-28 17:44:33", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000272_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("350", "2013-10-28 17:45:06", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000305_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("352", "2013-10-28 17:46:08", "0000-00-00 00:00:00", NULL, "1", "631", "newite_1383000367_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("353", "2013-10-28 17:58:06", "0000-00-00 00:00:00", NULL, "1", "632", "newite_1383001082_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("354", "2013-10-28 18:46:49", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004008_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("355", "2013-10-28 18:47:41", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004060_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("356", "2013-10-28 18:48:21", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004100_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("357", "2013-10-28 18:48:57", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004135_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("358", "2013-10-28 18:49:40", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004179_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("359", "2013-10-28 18:50:44", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004242_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("360", "2013-10-28 18:51:47", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004306_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("361", "2013-10-28 18:52:37", "0000-00-00 00:00:00", NULL, "1", "633", "newite_1383004351_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("362", "2013-10-28 19:23:25", "0000-00-00 00:00:00", NULL, "1", "999999824", "newite_1383006202_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("376", "2013-10-28 19:33:49", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006828_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("364", "2013-10-28 19:25:40", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006339_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("365", "2013-10-28 19:25:53", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006352_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("366", "2013-10-28 19:26:07", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006366_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("367", "2013-10-28 19:26:40", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006398_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("368", "2013-10-28 19:26:58", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006416_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("369", "2013-10-28 19:27:19", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006437_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("370", "2013-10-28 19:27:38", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006456_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("371", "2013-10-28 19:27:57", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006474_2304x1728.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("372", "2013-10-28 19:28:35", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006513_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("373", "2013-10-28 19:29:00", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006539_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("374", "2013-10-28 19:29:28", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006566_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("375", "2013-10-28 19:31:20", "0000-00-00 00:00:00", NULL, "1", "634", "newite_1383006678_1920x1080.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("379", "2013-11-08 10:46:34", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925591_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("380", "2013-11-08 10:47:19", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925636_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("381", "2013-11-08 10:50:09", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925804_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("382", "2013-11-08 10:52:01", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925917_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("383", "2013-11-08 10:53:13", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383925991_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("384", "2013-11-08 10:56:32", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383926189_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("385", "2013-11-08 10:57:25", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383926240_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("386", "2013-11-08 11:00:26", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383926424_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("387", "2013-11-08 11:04:34", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383926672_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("388", "2013-11-08 11:04:54", "0000-00-00 00:00:00", NULL, "1", "636", "newite_1383926692_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("389", "2013-11-08 17:19:19", "0000-00-00 00:00:00", NULL, "1", "637", "newite_1383949157_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("390", "2013-11-08 17:22:35", "0000-00-00 00:00:00", NULL, "1", "637", "newite_1383949352_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("391", "2013-11-08 17:24:35", "0000-00-00 00:00:00", NULL, "1", "637", "newite_1383949472_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("392", "2013-11-08 17:27:01", "0000-00-00 00:00:00", NULL, "1", "637", "newite_1383949618_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("393", "2013-11-12 12:13:01", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276379_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("394", "2013-11-12 12:14:14", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276451_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("395", "2013-11-12 12:14:26", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276463_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("396", "2013-11-12 12:14:47", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276485_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("397", "2013-11-12 12:15:24", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276522_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("398", "2013-11-12 12:15:38", "0000-00-00 00:00:00", NULL, "1", "638", "newite_1384276536_2159x1440.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("399", "2014-06-19 17:00:39", "0000-00-00 00:00:00", NULL, "1", "999999770", "newite_1403215238_500x375.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("400", "2014-06-19 17:04:49", "0000-00-00 00:00:00", NULL, "1", "640", "newite_1403215489_500x375.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("401", "2014-06-26 13:03:05", "0000-00-00 00:00:00", NULL, "1", "641", "newite_1403805784_300x225.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("403", "2014-07-02 09:39:15", "0000-00-00 00:00:00", NULL, "1", "642", "newite_1404311955_400x340.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("404", "2014-07-02 10:16:05", "0000-00-00 00:00:00", NULL, "1", "642", "newite_1404314164_400x340.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("405", "2014-07-02 10:46:41", "0000-00-00 00:00:00", NULL, "1", "642", "newite_1404316001_400x340.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("497", "2014-09-04 16:40:54", "0000-00-00 00:00:00", NULL, "1", "643", "newite_1409866853_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("498", "2014-09-04 16:42:42", "0000-00-00 00:00:00", NULL, "1", "643", "newite_1409866961_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("499", "2014-09-04 16:42:52", "0000-00-00 00:00:00", NULL, "1", "643", "newite_1409866971_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("409", "2014-07-02 14:57:27", "0000-00-00 00:00:00", NULL, "1", "999999558", "newite_1404331046_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("410", "2014-07-02 14:59:26", "0000-00-00 00:00:00", NULL, "1", "644", "newite_1404331165_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("412", "2014-07-02 15:00:37", "0000-00-00 00:00:00", NULL, "1", "644", "newite_1404331236_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("413", "2014-07-02 15:01:06", "0000-00-00 00:00:00", NULL, "1", "644", "newite_1404331265_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("414", "2014-07-02 15:01:22", "0000-00-00 00:00:00", NULL, "1", "644", "newite_1404331281_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("415", "2014-07-02 15:19:14", "0000-00-00 00:00:00", NULL, "1", "999999685", "newite_1404332354_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("416", "2014-07-02 15:28:12", "0000-00-00 00:00:00", NULL, "1", "645", "newite_1404332892_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("417", "2014-07-02 15:28:50", "0000-00-00 00:00:00", NULL, "1", "645", "newite_1404332930_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("418", "2014-07-02 15:29:09", "0000-00-00 00:00:00", NULL, "1", "645", "newite_1404332948_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("419", "2014-07-02 15:29:36", "0000-00-00 00:00:00", NULL, "1", "645", "newite_1404332975_540x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("420", "2014-07-04 10:39:30", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488369_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("421", "2014-07-04 10:39:51", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488389_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("422", "2014-07-04 10:40:18", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488417_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("423", "2014-07-04 10:40:35", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488435_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("424", "2014-07-04 10:41:09", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488469_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("425", "2014-07-04 10:41:24", "0000-00-00 00:00:00", NULL, "1", "646", "newite_1404488484_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("426", "2014-07-04 11:00:05", "0000-00-00 00:00:00", NULL, "1", "647", "newite_1404489604_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("427", "2014-07-04 11:00:16", "0000-00-00 00:00:00", NULL, "1", "647", "newite_1404489615_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("428", "2014-07-04 11:00:29", "0000-00-00 00:00:00", NULL, "1", "647", "newite_1404489628_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("429", "2014-07-04 11:00:38", "0000-00-00 00:00:00", NULL, "1", "647", "newite_1404489637_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("430", "2014-07-04 11:25:39", "0000-00-00 00:00:00", NULL, "1", "648", "newite_1404491138_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("431", "2014-07-04 11:25:58", "0000-00-00 00:00:00", NULL, "1", "648", "newite_1404491157_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("432", "2014-07-04 11:26:14", "0000-00-00 00:00:00", NULL, "1", "648", "newite_1404491172_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("433", "2014-07-04 11:26:27", "0000-00-00 00:00:00", NULL, "1", "648", "newite_1404491185_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("434", "2014-07-04 11:26:40", "0000-00-00 00:00:00", NULL, "1", "648", "newite_1404491198_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("435", "2014-07-04 12:24:31", "0000-00-00 00:00:00", NULL, "1", "649", "newite_1404494670_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("436", "2014-07-04 12:25:37", "0000-00-00 00:00:00", NULL, "1", "649", "newite_1404494736_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("437", "2014-07-04 12:42:46", "0000-00-00 00:00:00", NULL, "1", "650", "newite_1404495766_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("438", "2014-07-04 12:43:07", "0000-00-00 00:00:00", NULL, "1", "650", "newite_1404495786_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("439", "2014-07-04 12:43:22", "0000-00-00 00:00:00", NULL, "1", "650", "newite_1404495802_536x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("440", "2014-07-04 12:43:50", "0000-00-00 00:00:00", NULL, "1", "650", "newite_1404495829_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("441", "2014-07-04 12:50:53", "0000-00-00 00:00:00", NULL, "1", "651", "newite_1404496252_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("442", "2014-07-04 15:11:25", "0000-00-00 00:00:00", NULL, "1", "652", "newite_1404504684_612x408.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("443", "2014-07-04 15:29:20", "0000-00-00 00:00:00", NULL, "1", "653", "newite_1404505759_612x408.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("444", "2014-07-04 15:41:53", "0000-00-00 00:00:00", NULL, "1", "654", "newite_1404506512_640x427.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("445", "2014-07-05 09:14:20", "0000-00-00 00:00:00", NULL, "1", "655", "newite_1404569660_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("446", "2014-07-05 09:33:23", "0000-00-00 00:00:00", NULL, "1", "656", "newite_1404570803_543x458.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("447", "2014-07-05 09:40:00", "0000-00-00 00:00:00", NULL, "1", "657", "newite_1404571199_543x458.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("448", "2014-07-05 09:47:42", "0000-00-00 00:00:00", NULL, "1", "658", "newite_1404571659_543x458.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("449", "2014-07-05 09:53:22", "0000-00-00 00:00:00", NULL, "1", "659", "newite_1404572002_543x458.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("450", "2014-07-05 10:04:27", "0000-00-00 00:00:00", NULL, "1", "660", "newite_1404572665_543x458.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("451", "2014-07-07 11:42:52", "0000-00-00 00:00:00", NULL, "1", "661", "newite_1404751371_530x400.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("452", "2014-07-07 11:55:14", "0000-00-00 00:00:00", NULL, "1", "662", "newite_1404752114_530x400.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("453", "2014-07-08 08:35:16", "0000-00-00 00:00:00", NULL, "1", "663", "newite_1404826515_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("454", "2014-07-08 08:46:22", "0000-00-00 00:00:00", NULL, "1", "664", "newite_1404827181_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("455", "2014-07-08 09:37:35", "0000-00-00 00:00:00", NULL, "1", "665", "newite_1404830253_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("459", "2014-07-10 08:39:06", "0000-00-00 00:00:00", NULL, "1", "667", "newite_1404999536_976x732.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("458", "2014-07-08 18:08:07", "0000-00-00 00:00:00", NULL, "1", "666", "newite_1404860886_620x282.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("460", "2014-07-10 08:49:34", "0000-00-00 00:00:00", NULL, "1", "668", "newite_1405000170_986x740.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("461", "2014-07-10 08:57:00", "0000-00-00 00:00:00", NULL, "1", "669", "newite_1405000619_986x740.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("462", "2014-07-10 09:00:22", "0000-00-00 00:00:00", NULL, "1", "670", "newite_1405000821_986x740.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("463", "2014-07-10 11:12:44", "0000-00-00 00:00:00", NULL, "1", "671", "newite_1405008757_720x540.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("464", "2014-07-10 11:13:11", "0000-00-00 00:00:00", NULL, "1", "671", "newite_1405008790_666x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("465", "2014-07-10 11:13:40", "0000-00-00 00:00:00", NULL, "1", "671", "newite_1405008818_720x510.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("466", "2014-07-17 10:02:21", "0000-00-00 00:00:00", NULL, "1", "672", "newite_1405609336_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("467", "2014-07-17 10:04:57", "0000-00-00 00:00:00", NULL, "1", "673", "newite_1405609496_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("468", "2014-07-17 10:07:36", "0000-00-00 00:00:00", NULL, "1", "674", "newite_1405609656_580x377.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("469", "2014-07-17 10:16:13", "0000-00-00 00:00:00", NULL, "1", "675", "newite_1405610172_652x366.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("470", "2014-07-17 10:24:09", "0000-00-00 00:00:00", NULL, "1", "675", "newite_1405610648_580x367.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("471", "2014-07-17 10:27:45", "0000-00-00 00:00:00", NULL, "1", "676", "newite_1405610864_619x347.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("472", "2014-07-17 10:43:46", "0000-00-00 00:00:00", NULL, "1", "677", "newite_1405611826_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("473", "2014-07-17 10:49:32", "0000-00-00 00:00:00", NULL, "1", "678", "newite_1405612170_640x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("474", "2014-07-21 15:42:02", "0000-00-00 00:00:00", NULL, "1", "999999472", "newite_1405975320_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("475", "2014-07-21 15:42:51", "0000-00-00 00:00:00", NULL, "1", "679", "newite_1405975370_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("476", "2014-07-21 16:37:44", "0000-00-00 00:00:00", NULL, "1", "680", "newite_1405978663_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("477", "2014-07-22 17:38:22", "0000-00-00 00:00:00", NULL, "1", "681", "newite_1406068701_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("478", "2014-07-22 17:54:20", "0000-00-00 00:00:00", NULL, "1", "682", "newite_1406069659_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("479", "2014-07-23 12:30:32", "0000-00-00 00:00:00", NULL, "1", "683", "newite_1406136632_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("481", "2014-08-05 09:32:50", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249169_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("482", "2014-08-05 09:33:19", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249198_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("483", "2014-08-05 09:33:38", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249217_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("484", "2014-08-05 09:33:56", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249235_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("485", "2014-08-05 09:34:20", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249260_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("486", "2014-08-05 09:34:34", "0000-00-00 00:00:00", NULL, "1", "684", "newite_1407249273_504x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("487", "2014-08-05 09:51:12", "0000-00-00 00:00:00", NULL, "1", "685", "newite_1407250271_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("488", "2014-08-05 09:51:29", "0000-00-00 00:00:00", NULL, "1", "685", "newite_1407250288_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("489", "2014-08-05 09:51:49", "0000-00-00 00:00:00", NULL, "1", "685", "newite_1407250308_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("490", "2014-08-05 09:52:08", "0000-00-00 00:00:00", NULL, "1", "685", "newite_1407250327_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("491", "2014-08-05 09:52:23", "0000-00-00 00:00:00", NULL, "1", "685", "newite_1407250343_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("492", "2014-08-05 11:06:46", "0000-00-00 00:00:00", NULL, "1", "686", "newite_1407254805_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("493", "2014-08-05 11:07:05", "0000-00-00 00:00:00", NULL, "1", "686", "newite_1407254824_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("494", "2014-08-05 11:07:16", "0000-00-00 00:00:00", NULL, "1", "686", "newite_1407254836_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("495", "2014-08-05 11:07:29", "0000-00-00 00:00:00", NULL, "1", "686", "newite_1407254849_543x575.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("496", "2014-08-05 11:07:38", "0000-00-00 00:00:00", NULL, "1", "686", "newite_1407254857_720x480.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("500", "2014-09-09 10:02:13", "0000-00-00 00:00:00", NULL, "1", "687", "newite_1410274933_550x450.jpg", NULL, "1");
#
#
INSERT INTO `news_fotos` VALUES ("501", "2014-09-09 10:02:43", "0000-00-00 00:00:00", NULL, "1", "687", "newite_1410274963_550x450.jpg", NULL, "1");
#
#
DROP TABLE IF EXISTS `news_grupos`;
#
#
CREATE TABLE `news_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `obras_fotos`;
#
#
CREATE TABLE `obras_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `obras_fotos2`;
#
#
CREATE TABLE `obras_fotos2` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `obras_fotos2_fotos`;
#
#
CREATE TABLE `obras_fotos2_fotos` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `obras_fotos_fotos`;
#
#
CREATE TABLE `obras_fotos_fotos` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2014-09-09 13:22:59", "2014-09-09 15:06:55", NULL, "1", "quienes_somos", "Quienes Somos", NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2014-09-09 13:22:59", "2014-09-09 15:06:44", NULL, "1", "nuestra_flota", "Nuestra Flota", "<p> </p>", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2014-09-09 13:22:59", "2014-09-09 15:06:31", NULL, "1", "cobertura", "Cobertura", "<p> </p>", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("4", "2014-09-09 13:22:59", "2014-09-09 15:06:19", NULL, "1", "nuestros_clientes", " Nuestros Clientes", "<p> </p>", NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=162 DEFAULT CHARSET=utf8;
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
INSERT INTO `proyectos` VALUES ("53", "2011-06-07 15:14:27", "2011-06-16 23:35:14", NULL, "1", "proy_1307477657_54x64.jpg", "portafolioeconomico", "portafolioeconomico.com", "Perú Democrata", "", "perudemocrata.com", "ppkdemoc", "democracia2011", "/www/", "0", "1", "2011-11-16 14:22:16", NULL, NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `proyectos` VALUES ("70", "2011-05-27 09:09:05", "2011-06-16 23:33:41", NULL, "1", "proy_1306505335_305x100.jpg", "mitiendaderegalos", "globalvsc.com", "Ni Vuelta Que Darle", NULL, "nivueltaquedarle.com", "nicom1", "globalvscnvqd", "/www/", "0", "1", "2013-02-26 22:04:13", NULL, NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `proyectos` VALUES ("98", "2011-01-16 09:12:19", "2011-06-19 16:03:55", NULL, "1", "proy_1295187130_166x104.jpg", "mismotivos", "mismotivos.com", "Mis Motivos", NULL, "mismotivos.com", "homeromo", "romerotivos2010", "/www/", "0", "1", "2011-09-27 09:04:21", "2", NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `proyectos` VALUES ("161", "2011-06-22 01:14:37", "2011-11-08 21:03:12", NULL, "1", NULL, "eshoradeviajar", "eshoradeviajar.com", "eshoradeviajar", NULL, "eshoradeviajar.com", "eshora", "deviajar", "/www/", NULL, NULL, "2011-07-04 00:49:57", NULL, NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("134", "2011-07-06 16:17:48", "2011-07-06 16:18:35", NULL, "1", NULL, "hitogroup", "hitogroup.com", "Hito Group", NULL, "hitogroup.com", "hitogr", "proyectohg", "/www/", "0", "0", "2011-07-08 09:42:54", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("135", "2011-11-06 20:03:55", "2011-11-07 20:25:29", NULL, "1", "proy_1320627827_377x91.jpg", "crmcallcenter", "vehiculos.com.pe", "CRM INCAPOWER", NULL, "vehiculos.com.pe", "circulan", "toyohatsutruck2011", "/www/", "0", "1", "2013-02-20 17:41:14", NULL, NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `proyectos` VALUES ("136", "2011-07-18 03:35:05", "2011-11-03 12:06:58", NULL, "1", "proy_1310978096_277x127.jpg", "olvacourier", "prodiserv.com/olvacourier", "Olvacourier", NULL, "prodiserv.com", "prodiser", "tavarasac", "/www/olvacourier/", "0", "1", "2013-01-17 00:34:56", "0", NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `proyectos` VALUES ("147", "2011-12-04 21:21:57", "2011-12-04 21:21:48", NULL, "1", "proy_1323051710_91x93.jpg", "cgtp", "prodiserv.com/cgtp", "PROYECTO CGTP", NULL, "prodiserv.com", "prodiser", "tavarasac", "/www/cgtp", "0", "1", "2013-01-17 20:13:23", NULL, "1", "136", NULL, "http://prodiserv.com/cgtp/propuesta_home_2012.png", "1");
#
#
INSERT INTO `proyectos` VALUES ("148", "2012-09-02 17:02:30", "2012-09-03 11:27:20", NULL, "1", NULL, "crmdiamantes", "incapower.pe", "DIAMANTE DEL PACIFICO", NULL, "incapower.pe", "userinca", "inca2012", "/www/", "0", "0", "2013-03-09 07:08:33", NULL, "1", "135", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("149", "2012-09-03 11:30:14", "0000-00-00 00:00:00", NULL, "1", NULL, "p1", NULL, "p1", NULL, NULL, NULL, NULL, "/www/", "0", "0", "2012-09-03 11:29:40", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("150", "2012-09-03 11:30:24", "0000-00-00 00:00:00", NULL, "1", NULL, "p2", NULL, "p2", NULL, NULL, NULL, NULL, "/www/", "0", "0", "2012-09-03 11:29:40", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("151", "2012-09-03 11:30:37", "2012-11-28 02:28:30", NULL, "1", NULL, "ejm", "ejm.com.pe", "ejm", NULL, "ejm.com.pe", "ejmcom", "exercises2012", "/www/", "0", "1", "2013-01-21 08:10:34", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("152", "2012-09-03 11:30:49", "2012-11-28 02:14:33", NULL, "1", NULL, "mecatronic", "mecatronicsystems.com", "mecatronic", NULL, "mecatronicsystems.com", "mecatron", "prodiserv", "/www/", "0", "1", "2013-01-15 21:49:22", NULL, "1", "136", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("153", "2012-09-05 10:48:44", "0000-00-00 00:00:00", NULL, "1", NULL, "portalcursos", "rincondemalena.com", "portalcursos", NULL, "rincondemalena.com", "rinconm", "rincon159357", "/www/", "0", "0", "2012-09-05 09:22:57", NULL, "1", "101", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("154", "2012-10-11 09:35:44", "2012-10-24 10:47:00", NULL, "1", NULL, "truckmax3", "truckmax.com.pe", "CRM TRUCKMAX 3", NULL, "174.120.118.226", "truckmax", "i2%Jkhab7Jir", "/www/", "0", "1", "2013-01-28 05:06:30", NULL, "1", "135", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("155", "2012-11-28 02:09:20", "2012-11-28 02:10:14", NULL, "1", NULL, "ichibans", "ichibansystems.com", "Ichibans", NULL, "ichibansystems.com", "ichibans", "walichitems2011", "/www/", "0", "1", "2013-01-15 20:56:05", NULL, "1", "145", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("156", "2013-01-11 03:23:09", "2013-01-11 03:22:54", NULL, "1", "proy_1357892574_x.", "nering", "nering.net", "nering", NULL, "nering.net", "nering", "puhna+lq", "/www/", "0", "1", "2013-01-23 02:08:08", NULL, "1", "151", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("157", "2012-11-28 02:35:25", "0000-00-00 00:00:00", NULL, "1", NULL, "timbrame", "timbra.me", "timbrame", NULL, "timbra.me", "timbra", "mememe", "/www/", "0", "1", "2012-11-28 02:31:30", NULL, "1", "151", NULL, NULL, "1");
#
#
INSERT INTO `proyectos` VALUES ("158", "2013-01-15 19:31:09", "0000-00-00 00:00:00", NULL, "1", NULL, "inmoobi", "inmoobi.com", "Inmoobi", NULL, "inmoobi.com", "inmoobi", "reneguillecaro", "/www/", "0", "0", "2013-01-19 17:47:18", NULL, "1", "101", "guillermolozan@gmail.com", NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("159", "2013-01-23 07:50:30", "2013-01-30 07:43:54", NULL, "1", NULL, "montescompe", "montes.com.pe", "Montes", NULL, "montes.com.pe", "montesco", "napoleon", "/www/", "0", "1", "2013-01-30 07:43:28", NULL, "1", "156", NULL, NULL, "2");
#
#
INSERT INTO `proyectos` VALUES ("160", "2013-01-30 07:44:49", "0000-00-00 00:00:00", NULL, "1", NULL, "covilla", "condominiocovilla.com", "Condominio Covilla", NULL, "condominiocovilla.com", "covilla", "napoleon", "/www/", "0", "1", "2013-01-30 07:45:48", NULL, "1", "159", NULL, NULL, "2");
#
#
DROP TABLE IF EXISTS `publicaciones_grupos`;
#
#
CREATE TABLE `publicaciones_grupos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `nombre` varchar(80) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `publicaciones_items`;
#
#
CREATE TABLE `publicaciones_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `id_grupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `fichero` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `secciones`;
#
#
CREATE TABLE `secciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `calificacion` tinyint(2) NOT NULL DEFAULT '0',
  `file` varchar(150) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `texto` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `secciones` VALUES ("1", "2014-09-09 13:23:10", "0000-00-00 00:00:00", NULL, "1", "0", NULL, "servicio uno", "<p> </p>");
#
#
INSERT INTO `secciones` VALUES ("2", "2014-09-09 13:23:17", "0000-00-00 00:00:00", NULL, "1", "0", NULL, "servicio dos", "<p> </p>");
#
#
INSERT INTO `secciones` VALUES ("3", "2014-09-09 13:23:23", "0000-00-00 00:00:00", NULL, "1", "0", NULL, "servicio tres", "<p> </p>");
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
  `page` int(10) NOT NULL DEFAULT '1',
  `pdf` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`),
  FULLTEXT KEY `resumen` (`resumen`)
) ENGINE=MyISAM AUTO_INCREMENT=688 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `servicios_items` VALUES ("539", "2013-06-27 11:28:28", "2013-08-07 09:32:46", NULL, "1", "Abren el tránsito por el túnel Punta Olímpica", "El túnel de Punta Olímpica de la vía Carhuaz-Chacas-San Luis ya está operativo parcialmente, por espacio de doce horas diarias desde el viernes 26 de los corrientes, en el horario de 6 a.m. a 6 p.m. y a partir del 13 de agosto será durante todo el día.", "<p style=\"text-align: justify;\">El túnel de Punta Olímpica de la vía Carhuaz-Chacas-San Luis ya está operativo parcialmente, por espacio de doce horas diarias desde el viernes 26 de los corrientes, en el horario de 6 a.m. a 6 p.m. y a partir del 13 de agosto será durante todo el día.</p>\n<p style=\"text-align: justify;\">Así lo precisa un comunicado oficial de la Municipalidad Provincial de Asunción luego de haber coordinado con la firma contratista y el gobierno regional debido al alto tránsito que ahora experimenta la zona de los Conchucos.</p>\n<p style=\"text-align: justify;\">El paso del túnel permite abreviar unos 40 a 45 minutos de recorrido por trocha y apenas se realiza entre 5 a 8 minutos&nbsp; el kilómetro doscientos metros que tiene de extensión y se ha convertido ahora un gran atractivo para propios y visitantes.</p>\n<p style=\"text-align: justify;\">Para las fiestas de Mama Ashu se espera que gran parte de la pista también ya esté operativa.&nbsp; Actualmente un tramo por el sector de Shilla (Carhuaz) se encuentra todavía sin asfalto debido a los problemas que se han presentado con propietarios de predios por donde pasa la carretera.</p>\n<p style=\"text-align: justify;\"><strong><font color=\"#770000\"><em>&nbsp;Fuente:</em> </font></strong><font color=\"#333399\"><strong><a href=\"http://www.ancashnoticias.com/detalle-noticia.php?id=ancash.1023\">ancashnoticias.com</a></strong></font></p>\n<p style=\"text-align: justify;\">&nbsp;</p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("559", "2013-07-02 11:14:36", "0000-00-00 00:00:00", NULL, "1", "AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA", "AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA", "<p>AGUA POTABLE EN EL CASERIO DE JARAHUARAN QUINUABAMBA</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("560", "2013-07-02 11:16:48", "0000-00-00 00:00:00", NULL, "1", "ATENCIONDE EMERGENCIAS EN TEMPORADA DE LLUVIAS", "ATENCIONDE EMERGENCIAS EN TEMPORADA DE LLUVIAS", "<p>ATENCIONDE EMERGENCIAS EN TEMPORADA DE LLUVIAS</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("561", "2013-07-02 11:18:04", "0000-00-00 00:00:00", NULL, "1", "CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SANJUAN", NULL, "<p>CADENA PRODUCTIVA DE MOLINO DE PIEDRA SECTOR SANJUAN</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("578", "2013-07-02 11:48:28", "0000-00-00 00:00:00", NULL, "1", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL JARDIN DE NIÑOS EN CONOPAPAMPA", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL JARDIN DE NIÑOS EN CONOPAPAMPA", "<p>COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL JARDIN DE NIÑOS EN CONOPAPAMPA</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("579", "2013-07-02 11:50:32", "0000-00-00 00:00:00", NULL, "1", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL SISTEMA DE AGUA POTABLE Y LETRINAS EN HUAYCHO HUAYLLAN", "COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL SISTEMA DE AGUA POTABLE Y LETRINAS EN HUAYCHO HUAYLLAN", "<p>COLOCACION DE LA PRIMERA PIEDRA PARA LA CONSTRUCCION DEL SISTEMA DE AGUA POTABLE Y LETRINAS EN HUAYCHO HUAYLLAN</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("580", "2013-07-02 11:51:44", "0000-00-00 00:00:00", NULL, "1", "CONSTRUCCION DE 4 AULAS PARA EL NIVEL SECUNDARIO DE COTOCANCHA", "CONSTRUCCION DE 4 AULAS PARA EL NIVEL SECUNDARIO DE COTOCANCHA", "<p>CONSTRUCCION DE 4 AULAS PARA EL NIVEL SECUNDARIO DE COTOCANCHA</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("678", "2014-07-17 10:49:06", "0000-00-00 00:00:00", NULL, "1", "Caraz: deportista de aventura muere tras avalancha de nieve en nevado", "Un deportista de aventura de nacionalidad americana identificado como Kile Colleman Kennedy (23) murió esta madrugada en el nevado Pirámide, en el distrito de Caraz, provincia de Huaylas (región Áncash).\n\nEl hecho ocurrió cuando Colleman y su compañero Jhon Collins (22) ascendían al nevado Pirámide, a unos 5 800 metros de altitud, en ese momento se registró una avalancha de nieve que los arrostró 300 metros.", "<p>Un deportista de aventura de nacionalidad americana identificado como&nbsp;<strong>Kile Colleman Kennedy (23) murió esta madrugada en el nevado Pirámide, en el distrito de Caraz</strong>, provincia de Huaylas (región Áncash).</p>\n<p>El hecho ocurrió cuando Colleman y su compañero Jhon Collins (22)&nbsp;<strong>ascendían al nevado Pirámide</strong>, a unos<strong>&nbsp;5 800 metros de altitud, en ese momento se registró una avalancha de nieve que los arrostró 300 metros</strong>.</p>\n<p>Jhon Collins pudo dar aviso a la Unidad de Rescate de la Montaña de la Policía Nacional de Caraz, quien montó el operativo de emergencia para rescatar el cadáver sepultado de Colleman.</p>\n<p>Ambos deportistas de aventura fueron trasladados al Hospital San Juan de Caraz, Colleman para la necropsia de Ley y Jhon Collins -quien se encuentra grave herido y con los brazos fracturados- para ser atendido.</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("659", "2014-07-05 09:52:35", "0000-00-00 00:00:00", NULL, "1", "Brasil 2014: “Argentina no está para campeón”, según Diego Maradona", "volvió a opinar sobre el Mundial Brasil 2014. Esta vez sus críticas no fueron hacía la FIFA, el polémico ex jugador apuntó ahora a su propia selección, la Argentina.", "<p><strong><span style=\"text-decoration: underline;\">17 DE JUNIO 2014..</span></strong></p>\n<p style=\"text-align: justify; \">MARADONA...volvió a opinar sobre el&nbsp;<a href=\"http://www.libero.pe/brasil-2014\">Mundial Brasil 2014</a>. Esta vez sus críticas no fueron hacía la&nbsp;<strong>FIFA</strong>, el polémico ex jugador apuntó ahora a su propia selección, la Argentina.</p>\n<p style=\"text-align: justify;\">Tajante y directo como siempre, para Maradona,&nbsp;<a href=\"http://www.libero.pe:8080/seleccion-argentina\">la selección de Argentina</a>&nbsp;“no está para campeón del mundo\". El ídolo del Boca Juniors argentino, se refirió además sobre Leonel Messi, jugador líder del equipo de Sabella y que para muchos será su sucesor: “Ojalá que Lio frote la lámpara. Ojo que tampoco le podemos pedir que haga todo, tiros libres, penales, córner, saco de arco y que encima lo gane solo. Si no tiene gente que se le mueva arriba, resulta muy fácil esperarlo de frente”.</p>\n<p style=\"text-align: justify;\">Maradona también habló de sus candidatos para él podrían ganar el Mundial. “Me gustaba decir que Argentina va a ganar el título. Tiene potencial, cuenta. Pero también tiene el potencial de&nbsp;<a href=\"http://www.libero.pe/futbol-internacional/seleccion-de-brasil\">Brasil</a>,&nbsp;<a href=\"http://www.libero.pe:8080/seleccion-holandesa\">Holanda</a>&nbsp;o&nbsp;<a href=\"http://www.libero.pe/seleccion-de-alemania\">Alemania</a>”, afirmó.</p>\n<p style=\"text-align: justify;\">Sobre los alemanes no tuvo reparos en afirmar que “da miedo el poderío que tiene. Lo que hicieron ante&nbsp;<strong>Portugal</strong>&nbsp;rozó lo perfecto. Están con buen pie, son muy inteligentes a la hora de correr. Si mantienen este ritmo están para cosa seria”.</p>\n<p style=\"text-align: justify;\">Finalmente destacó también a los holandeses de quienes dijo que “Con&nbsp;<strong>Van Persie</strong>y&nbsp;<strong>Robben</strong>&nbsp;en ese nivel, lo suyo es serio”, concluyó el campeón del mundo en&nbsp;<strong>Mexico 1986</strong>&nbsp;con Argentina.</p>\n<p> </p>\n<div style=\"text-align: justify;\"><strong>EL DATO</strong></div><div style=\"text-align: justify;\">Argentina comparte el grupo F con&nbsp;<strong>Bosnia</strong>,&nbsp;<strong>Irán</strong>&nbsp;y&nbsp;<strong>Nigeria</strong>. Tras derrotar con angustia a los bosnios, los argentinos enfrentarán a los iraníes y nigerianos este 21 y 25 de junio respectivamente.</div><p> </p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("663", "2014-07-08 08:34:36", "0000-00-00 00:00:00", NULL, "1", "ANCASH \"19 CANDIDATOS A LA PRESIDENCIA REGIONAL\"", "Se tienen candidatos para todos los gustos.\nEn medio de toda una fiesta electoral entre los partidos como movimientos políticos, pasado las cero horas con varios segundos el máximo ente electoral de Huaraz, informaron la inscripción de los 19 agrupaciones políticas que lograron su inscripción ante la presidencia del gobierno regional de Ancash, ahora tendrán que esperar a partir de la fecha los 5 días de plazo las tachas que se puedan presentar o no en cada una de ellas\nEstos fueron los partidos como movimientos políticos que lograron su inscripción fintal y serán protagonistas de las elecciones:", "<p>Se tienen candidatos para todos los gustos.</p>\n<p>En medio de toda una fiesta electoral entre los partidos como movimientos políticos, pasado las cero horas con varios segundos el máximo ente electoral de Huaraz, informaron la inscripción de los 19 agrupaciones políticas que lograron su inscripción ante la presidencia del gobierno regional de Ancash, ahora tendrán que esperar a partir de la fecha los 5 días de plazo las tachas que se puedan presentar o no en cada una de ellas</p>\n<p>Estos fueron los partidos como movimientos políticos que lograron su inscripción fintal y serán protagonistas de las elecciones:</p>\n<p>Tania Ruiz Gómez por Alianza para el Progreso</p>\n<p>Rosa María Bartra Barriga por Río Santa Caudaloso</p>\n<p>Arturo Torres Calderón por el Movimiento Regional Maicito</p>\n<p>Wilder Calderón Castro por el APRA</p>\n<p>Luis Costas Moya por el Movimiento Unión Nacionalista Ancashina &nbsp;</p>\n<p>Ricardo Narváez Soto por ANDEMAR</p>\n<p>Luis Saavedra Contreras por Siempre Unidos</p>\n<p>Lombardo MautinoAngeles por el MANPE</p>\n<p>Luis Luna Villarreal por el Partido Humanista del Perú</p>\n<p>Linda del Valle Espejo por Unión por el Perú</p>\n<p>Ramón Pinedo Castromonte por Restauración Nacional</p>\n<p>Víctor Jaimes Alvarado por el Partido Perú Patria Segura</p>\n<p>Luis Haro Egúzquiza por Fuerza Popular</p>\n<p>Waldo Ríos Salcedo por Puro Ancash</p>\n<p>Jesús Alvarado Hidaldo por Perú Posible</p>\n<p>Juan Carlos Murillo por Somos Perú</p>\n<p>Juan Calderón Altamirano por Juntos por el Cambio</p>\n<p>Jaime Edmundo Montalvo por Renovación Ancashina</p>\n<p>&nbsp;La gran sorpresa fue verificar la candidatura de Fiorella Nolasco como candidata a la consejería por la provincia del Santa por el partido político Unión por el Perú.</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("664", "2014-07-08 08:45:41", "0000-00-00 00:00:00", NULL, "1", "CARLOS TARAZONA \"ADIÓS A LA GERENCIA MUNICIPAL\"", "Luego de haber oficializado la inscripción del partido regional Maicito.\nLuego de hacer la oficialización de la inscripción del movimiento regional Maicito ante el jurado especial de elecciones Huaraz, con miras a las elecciones regionales y municipales, el abogado Carlo Tarazona, anunció su renuncia al cargo de la gerencia municipal de Huaraz y poner en marcha lo que será su campaña electoral con miras a las elecciones del 5 de octubre, aseguró como una manera de buscar el desprendimiento que se quiere hacer de un ente del estado como es el municipio y su movimiento maicito, y evitar con ello especulaciones de hacer el uso de los bienes municipales en la campaña electoral.", "<p>Luego de haber oficializado la inscripción del partido regional Maicito.</p>\n<p>Luego de hacer la oficialización de la inscripción del movimiento regional Maicito ante el jurado especial de elecciones Huaraz, con miras a las elecciones regionales y municipales, el abogado Carlo Tarazona, anunció su renuncia al cargo de la gerencia municipal de Huaraz y poner en marcha lo que será su campaña electoral con miras a las elecciones del 5 de octubre, aseguró como una manera de buscar el desprendimiento que se quiere hacer de un ente del estado como es el municipio y su movimiento maicito, y evitar con ello especulaciones de hacer el uso de los bienes municipales en la campaña electoral.</p>\n<p>Sin embargo, cuando se le preguntó cuáles eran los argumentos que tenia sobre la designación como su primera regidora a la señora María Tinoco, actual regidora cuestionada por sus propios colegas y ex funcionarios de la comuna edil por haber solicitado dinero a los trabajadores para hacer la recolección de firmas del maicito, y recientemente se denunció el haber supuestamente solicitado 40 nuevos soles para la pachamanca a favor del alcalde por ser su cumpleaños el 28 de junio pasado, Tarazona dijo desconocer dichas denuncia y que ellas deberá de responderlos si se lo preguntan. La señora Tinoco está en esa ubicación porque fue una elección de sus bases y porque es fundadora del movimiento, por lo tanto era el derecho que tenía de ser su primera regidora, así como sucedió con la elección de los otros candidatos a las regidurías.</p>\n<p>De igual forma al momento de la inscripción del Maicito se apreció a mucha gente del ex movimiento nueva era, como a uno de los dueños del maicito acompañando a sus representante en la inscripción de la lista, lo que demuestra que este movimiento será el continuismo de nueva era en la municipalidad.</p>\n<p> </p>", "1", NULL);
#
#
INSERT INTO `servicios_items` VALUES ("673", "2014-07-17 10:04:23", "0000-00-00 00:00:00", NULL, "1", "BILLETES FALSOS EN CAJERO AUTOMÁTICO", "Nadie quiere asumir responsabilidad con las víctimas.\nLos cajeros automáticos del banco de la Nación, volvió hacer denunciado por comenzar a emitir billetes falsos de 100 nuevos soles a los clientes en general, esta vez, la víctima fue Isabel Rivera Romero en días pasados, ", "<p>Nadie quiere asumir responsabilidad con las víctimas.</p>\n<p>Los cajeros automáticos del banco de la Nación, volvió hacer denunciado por comenzar a emitir billetes falsos de 100 nuevos soles a los clientes en general, esta vez, la víctima fue Isabel Rivera Romero en días pasados, cuando se constituyó a realizar una transacción bancaria dándose con la sorpresa que entre los billetes que retiró del cajero automático uno de ellos era falso, al presentar su reclamo a las oficinas del banco de la Nación para presentar su reclamo, pusieron en duda su denuncia negándose a reembolsarle los 100 nuevos soles.</p>\n<p>Esta no sería la primera vez, ya que en oportunidad anterior a su esposo le sucedió o propio pero por la baja denominación del billete falso no hizo la denuncia ya que los trámites</p>\n<p> </p>", "1", NULL);
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
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `id_grupo` int(10) DEFAULT NULL,
  `id_subgrupo` int(10) DEFAULT NULL,
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_descripcion` varchar(80) DEFAULT NULL,
  `pdf` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `tramites_items`;
#
#
CREATE TABLE `tramites_items` (
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
  `pdf` varchar(150) DEFAULT NULL,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `turismo_fotos`;
#
#
CREATE TABLE `turismo_fotos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(80) DEFAULT NULL,
  `texto` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
#
#
DROP TABLE IF EXISTS `turismo_fotos_fotos`;
#
#
CREATE TABLE `turismo_fotos_fotos` (
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2014-09-05 18:14:14", "0000-00-00 00:00:00", NULL, "1", "administrador", "polarbear", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `variables` VALUES ("1", "2014-09-09 17:52:54", "0000-00-00 00:00:00", NULL, "1", "url_facebook", NULL, "1");
#
#
INSERT INTO `variables` VALUES ("2", "2014-09-09 17:52:54", "0000-00-00 00:00:00", NULL, "1", "url_youtube", NULL, "1");
#
#
INSERT INTO `variables` VALUES ("3", "2014-09-09 17:52:54", "0000-00-00 00:00:00", NULL, "1", "url_twitter", NULL, "1");
#
#
INSERT INTO `variables` VALUES ("4", "2014-09-09 17:52:54", "0000-00-00 00:00:00", NULL, "1", "url_radio", NULL, "1");
#
#
