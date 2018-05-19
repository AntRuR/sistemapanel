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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("15", "2016-05-06 17:02:40", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1462572159_1340x450.png", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("18", "2016-05-06 18:01:07", "2016-05-06 19:07:32", NULL, "1", "1", NULL, "20", NULL, "1", "banbg_1462575667_1340x450.jpg", NULL, "SOFTWARE", NULL, "NUEVO OFFICE 365 E5", "Con nuevas capacidades");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("19", "2016-05-06 19:10:18", "2016-05-06 19:10:18", NULL, "1", "1", NULL, "19", NULL, "1", "banbg_1462579818_1340x450.jpg", NULL, "SOLUCIONES", NULL, "ESPECIALIZADAS EN TECNOLOGÍA", "Para satisfacer los más altos estándares");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("10", "2016-02-28 00:14:21", "2016-02-28 00:14:21", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1456636461_1340x450.jpg", NULL, "COMUNICACIONES", NULL, "ADMINISTRACIÓN Y AUTOMATIZACIÓN DE REDES", "Aumenta la productividad");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("12", "2016-04-19 23:08:11", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1461125291_1340x450.jpg", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("13", "2016-04-19 23:32:47", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1461126767_1340x450.jpg", NULL, NULL, NULL, NULL, NULL);
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_clientes` VALUES ("7", "2016-05-25 20:23:47", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225827_165x62.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("8", "2016-05-25 20:23:56", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225836_145x62.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("9", "2016-05-25 20:24:02", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225841_145x62.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("10", "2016-05-25 20:24:08", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225848_213x72.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("11", "2016-05-25 20:24:14", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225854_185x51.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("12", "2016-05-25 20:24:19", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225859_177x51.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("13", "2016-05-25 20:24:25", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225865_143x87.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("14", "2016-05-25 20:24:30", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225870_143x87.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("15", "2016-05-25 20:24:36", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225876_143x54.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("16", "2016-05-25 20:24:42", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225882_143x54.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("17", "2016-05-25 20:24:48", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225888_162x64.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("18", "2016-05-25 20:24:53", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225893_183x64.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("19", "2016-05-25 20:24:59", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225899_135x64.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("20", "2016-05-25 20:25:16", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225916_162x64.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_clientes` VALUES ("21", "2016-05-25 20:25:23", "0000-00-00 00:00:00", NULL, "1", NULL, "galfot_1464225923_179x49.png", NULL, NULL, "1");
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
INSERT INTO `galleries_photos` VALUES ("1", "2016-02-11 17:11:53", "2016-05-28 19:06:15", NULL, "1", "clientes", "0000-00-00 00:00:00", "Junio", NULL, "1");
#
#
INSERT INTO `galleries_photos` VALUES ("2", "2016-02-11 17:11:53", "2016-05-28 19:06:23", NULL, "1", "promociones", "0000-00-00 00:00:00", "Julio", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("7", "2016-05-06 13:45:35", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560334_1100x715.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("8", "2016-05-06 13:45:59", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560357_1732x1155.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("9", "2016-05-06 13:46:12", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560370_1600x1019.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("10", "2016-05-06 13:46:20", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560380_600x320.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("11", "2016-05-06 13:46:30", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560389_1199x755.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("12", "2016-05-06 13:46:43", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560401_1500x575.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("13", "2016-05-06 13:50:29", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1462560628_619x464.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("14", "2016-05-06 13:51:36", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560679_4954x3174.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("15", "2016-05-06 13:51:49", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560708_600x398.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("16", "2016-05-06 13:52:00", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560719_585x330.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("17", "2016-05-06 13:52:10", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560728_1430x861.png", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("18", "2016-05-06 13:52:34", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560753_626x469.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("19", "2016-05-06 13:52:45", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560763_1728x800.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("20", "2016-05-06 13:52:56", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560775_550x224.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("21", "2016-05-06 13:53:22", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1462560800_1316x817.jpg", NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `pages_photos` VALUES ("1", "2016-02-16 19:26:14", "2016-05-28 19:37:29", NULL, "1", "infraestructura-ti", "0000-00-00 00:00:00", "Infraestructura TI", "<p>PAGINA ESTATICA NO EDITABLE</p>\n", "1");
#
#
INSERT INTO `pages_photos` VALUES ("2", "2016-02-16 19:26:14", "2016-05-28 19:17:28", NULL, "1", "servidores", "0000-00-00 00:00:00", "Servidores", "<p>NO EDITABLE</p>\n", "1");
#
#
INSERT INTO `pages_photos` VALUES ("3", "2016-02-16 19:26:14", "2016-02-16 19:38:55", NULL, "1", "soluciones-en-software", "0000-00-00 00:00:00", "Soluciones en Software", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n\n<p>Fusce tempus orci sit amet metus faucibus malesuada. Donec feugiat vel magna et commodo. Vestibulum ante elit, feugiat in erat at, dignissim maximus enim. Sed malesuada urna libero, eget euismod nisi porta vel. Aenean venenatis finibus felis, et semper dui egestas hendrerit. Donec ut sollicitudin lectus, elementum rutrum risus. Vivamus vitae vehicula nulla. Integer eu dolor vitae dui facilisis porttitor eu ut arcu. In hac habitasse platea dictumst. In pulvinar purus a nulla mollis elementum. Suspendisse odio erat, suscipit at ligula non, varius condimentum turpis. Ut erat lorem, vulputate eu dictum at, efficitur vel mi.</p>\n\n<p>Phasellus ultrices ligula non odio venenatis feugiat. Donec cursus a quam eu fermentum. Nulla scelerisque accumsan magna, et interdum turpis malesuada non. Proin efficitur placerat maximus. Nulla venenatis sapien quis erat porta, sed rutrum ex fermentum. Mauris urna tortor, vulputate sed venenatis sit amet, ultricies a lacus. Donec lorem ante, pretium tempus fringilla et, scelerisque finibus libero. Donec sit amet venenatis magna.</p>\n", "1");
#
#
INSERT INTO `pages_photos` VALUES ("4", "2016-02-16 19:26:14", "2016-02-16 19:39:10", NULL, "1", "soluciones-en-comunicaciones", "0000-00-00 00:00:00", "Soluciones en Comunicaciones", "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n\n<p>Fusce tempus orci sit amet metus faucibus malesuada. Donec feugiat vel magna et commodo. Vestibulum ante elit, feugiat in erat at, dignissim maximus enim. Sed malesuada urna libero, eget euismod nisi porta vel. Aenean venenatis finibus felis, et semper dui egestas hendrerit. Donec ut sollicitudin lectus, elementum rutrum risus. Vivamus vitae vehicula nulla. Integer eu dolor vitae dui facilisis porttitor eu ut arcu. In hac habitasse platea dictumst. In pulvinar purus a nulla mollis elementum. Suspendisse odio erat, suscipit at ligula non, varius condimentum turpis. Ut erat lorem, vulputate eu dictum at, efficitur vel mi.</p>\n\n<p>Phasellus ultrices ligula non odio venenatis feugiat. Donec cursus a quam eu fermentum. Nulla scelerisque accumsan magna, et interdum turpis malesuada non. Proin efficitur placerat maximus. Nulla venenatis sapien quis erat porta, sed rutrum ex fermentum. Mauris urna tortor, vulputate sed venenatis sit amet, ultricies a lacus. Donec lorem ante, pretium tempus fringilla et, scelerisque finibus libero. Donec sit amet venenatis magna.</p>\n", "1");
#
#
INSERT INTO `pages_photos` VALUES ("5", "2016-02-16 19:26:14", "2016-05-28 19:18:00", NULL, "1", "redes", "0000-00-00 00:00:00", "Redes", "<p>NO EDITABLE</p>\n", "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `pages_photos_photos` VALUES ("1", "2016-02-17 11:59:17", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "profot_1455728357_341x292.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("2", "2016-02-17 11:59:24", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "profot_1455728363_341x292.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("3", "2016-02-17 11:59:30", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "profot_1455728370_341x292.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("4", "2016-02-17 11:59:36", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "profot_1455728376_341x292.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("5", "2016-02-17 11:59:42", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "profot_1455728382_341x292.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("6", "2016-02-17 12:00:07", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728407_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("7", "2016-02-17 12:00:17", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728417_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("8", "2016-02-17 12:00:23", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728423_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("9", "2016-02-17 12:00:29", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728428_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("10", "2016-02-17 12:00:35", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728435_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("11", "2016-02-17 12:00:42", "0000-00-00 00:00:00", NULL, "1", NULL, "5", "profot_1455728441_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("12", "2016-02-17 12:01:08", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728468_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("13", "2016-02-17 12:01:15", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728475_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("14", "2016-02-17 12:01:21", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728481_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("15", "2016-02-17 12:01:28", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728487_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("16", "2016-02-17 12:01:34", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728494_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("17", "2016-02-17 12:01:42", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "profot_1455728502_341x248.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("18", "2016-02-17 12:03:10", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "profot_1455728590_341x293.jpg", NULL, NULL, "1");
#
#
INSERT INTO `pages_photos_photos` VALUES ("19", "2016-02-17 12:03:18", "0000-00-00 00:00:00", NULL, "1", NULL, "4", "profot_1455728598_341x293.jpg", NULL, NULL, "1");
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
  `name` varchar(80) DEFAULT '',
  `text` longtext,
  `html` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  `banner` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-05-24 03:05:04", "2016-05-24 03:05:04", NULL, "1", NULL, NULL, "Nosotros", NULL, "<p><strong>Tu socio estrat&eacute;gico en tecnolog&iacute;a inform&aacute;tica</strong></p>\n\n<p>Somos Multimport 20 a&ntilde;os construyendo empresa, nos ha permitido lograr ser calificados y reconocidos como Partner Autorizados de las principales marcas del sector Inform&aacute;tico.</p>\n\n<p>Toda esta experiencia, nos da la solidez para trabajar con &nbsp; clientes como ustedes, porque sabemos de sus exigencias, tengan la plena seguridad y confianza&nbsp; que sus operaciones con nosotros est&aacute;n respaldadas. &nbsp;</p>\n\n<p>Procuramos servirlo mejor y procurar no es una palabra que demuestre debilidad o incumplimiento, todo lo contrario Procurar es <strong>hacer las cosas diligentemente, es hacer que suceda lo que queremos, </strong>es&nbsp; hacer todos nuestros esfuerzos, es&nbsp; convertir <strong>ese hacer</strong> <strong>, esa acci&oacute;n</strong> en una cuesti&oacute;n de honor en busca de servirlos mejor.&nbsp;</p>\n\n<p>Gracias por visitar nuestra web y esperamos que sea de su utilidad.</p>\n", "pag_1464077104_603x396.jpg", NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("2", "2016-05-09 10:00:44", "2016-05-09 10:00:44", NULL, "1", "1", NULL, "Visión", NULL, "<p>Procuramos ser&nbsp; una organizaci&oacute;n l&iacute;der en el sector inform&aacute;tico que trabaja con Honestidad y Diligencia,&nbsp; brindando&nbsp; un servicio diferenciado en&nbsp; cada una de nuestras unidades&nbsp; de negocio.</p>\n", NULL, NULL, "1", "ban_1462806044_1110x199.jpg");
#
#
INSERT INTO `paginas` VALUES ("3", "2016-05-09 10:00:18", "2016-05-09 10:00:18", NULL, "1", "1", NULL, "Misión", NULL, "<p>Proporcionamos soluciones oportunas e integrales ofreciendo productos y servicios de Tecnolog&iacute;a Inform&aacute;tica, que genere &oacute;ptimos resultados y relaciones de largo plazo con nuestros clientes y socios comerciales&nbsp; a trav&eacute;s de un equipo de consultores,&nbsp; comprometidos con los valores de la empresa. &nbsp;</p>\n", NULL, NULL, "1", "ban_1462806018_1110x199.jpg");
#
#
INSERT INTO `paginas` VALUES ("4", "2016-01-12 14:18:01", "0000-00-00 00:00:00", NULL, "0", "2", NULL, "Infraestructura TI", NULL, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n\n<p>Fusce tempus orci sit amet metus faucibus malesuada. Donec feugiat vel magna et commodo. Vestibulum ante elit, feugiat in erat at, dignissim maximus enim. Sed malesuada urna libero, eget euismod nisi porta vel. Aenean venenatis finibus felis, et semper dui egestas hendrerit. Donec ut sollicitudin lectus, elementum rutrum risus. Vivamus vitae vehicula nulla. Integer eu dolor vitae dui facilisis porttitor eu ut arcu. In hac habitasse platea dictumst. In pulvinar purus a nulla mollis elementum. Suspendisse odio erat, suscipit at ligula non, varius condimentum turpis. Ut erat lorem, vulputate eu dictum at, efficitur vel mi.</p>\n\n<p>Phasellus ultrices ligula non odio venenatis feugiat. Donec cursus a quam eu fermentum. Nulla scelerisque accumsan magna, et interdum turpis malesuada non. Proin efficitur placerat maximus. Nulla venenatis sapien quis erat porta, sed rutrum ex fermentum. Mauris urna tortor, vulputate sed venenatis sit amet, ultricies a lacus. Donec lorem ante, pretium tempus fringilla et, scelerisque finibus libero. Donec sit amet venenatis magna.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("5", "2016-01-12 14:18:15", "0000-00-00 00:00:00", NULL, "0", "2", NULL, "Soluciones en Software", NULL, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n\n<p>Fusce tempus orci sit amet metus faucibus malesuada. Donec feugiat vel magna et commodo. Vestibulum ante elit, feugiat in erat at, dignissim maximus enim. Sed malesuada urna libero, eget euismod nisi porta vel. Aenean venenatis finibus felis, et semper dui egestas hendrerit. Donec ut sollicitudin lectus, elementum rutrum risus. Vivamus vitae vehicula nulla. Integer eu dolor vitae dui facilisis porttitor eu ut arcu. In hac habitasse platea dictumst. In pulvinar purus a nulla mollis elementum. Suspendisse odio erat, suscipit at ligula non, varius condimentum turpis. Ut erat lorem, vulputate eu dictum at, efficitur vel mi.</p>\n\n<p>Phasellus ultrices ligula non odio venenatis feugiat. Donec cursus a quam eu fermentum. Nulla scelerisque accumsan magna, et interdum turpis malesuada non. Proin efficitur placerat maximus. Nulla venenatis sapien quis erat porta, sed rutrum ex fermentum. Mauris urna tortor, vulputate sed venenatis sit amet, ultricies a lacus. Donec lorem ante, pretium tempus fringilla et, scelerisque finibus libero. Donec sit amet venenatis magna.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("6", "2016-01-12 14:18:31", "0000-00-00 00:00:00", NULL, "0", "2", NULL, "Soluciones en Comunicaciones", NULL, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n\n<p>Fusce tempus orci sit amet metus faucibus malesuada. Donec feugiat vel magna et commodo. Vestibulum ante elit, feugiat in erat at, dignissim maximus enim. Sed malesuada urna libero, eget euismod nisi porta vel. Aenean venenatis finibus felis, et semper dui egestas hendrerit. Donec ut sollicitudin lectus, elementum rutrum risus. Vivamus vitae vehicula nulla. Integer eu dolor vitae dui facilisis porttitor eu ut arcu. In hac habitasse platea dictumst. In pulvinar purus a nulla mollis elementum. Suspendisse odio erat, suscipit at ligula non, varius condimentum turpis. Ut erat lorem, vulputate eu dictum at, efficitur vel mi.</p>\n\n<p>Phasellus ultrices ligula non odio venenatis feugiat. Donec cursus a quam eu fermentum. Nulla scelerisque accumsan magna, et interdum turpis malesuada non. Proin efficitur placerat maximus. Nulla venenatis sapien quis erat porta, sed rutrum ex fermentum. Mauris urna tortor, vulputate sed venenatis sit amet, ultricies a lacus. Donec lorem ante, pretium tempus fringilla et, scelerisque finibus libero. Donec sit amet venenatis magna.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("7", "2016-02-17 11:03:56", "2016-05-24 02:05:07", NULL, "1", "2", NULL, "Financiamiento y Arrendamiento", NULL, "<p><strong>&iquest;Qu&eacute; es el Financiamiento de TI?</strong></p>\n\n<p>Es un esquema en donde se ofrecen servicios financieros para el desarrollo de proyectos de tecnolog&iacute;a inform&aacute;tica que incluyen hardware, software y servicios de distintos fabricantes y todo se puede ofrecer bajo un mismo contrato para el cliente.</p>\n\n<p>Es una de las mejores maneras para que su empresa pueda permanecer en la cima de la curva de desarrollo y m&aacute;s a&uacute;n con tantos cambios que se producen en el sector TI el financiamiento TI es menos costoso econ&oacute;micamente.</p>\n\n<p><strong>Ventajas</strong>:</p>\n\n<ul>\n	<li>Simplifica la adquisici&oacute;n de bienes de capital a largo plazo, financiando hasta el 100% de su proyecto TI.</li>\n	<li>Menor impacto en su flujo de caja y otras l&iacute;neas de cr&eacute;dito bancario.</li>\n	<li>Transforma grandes pagos de inicio de proyecto en pagos peri&oacute;dicos previsibles.</li>\n	<li>Es una operaci&oacute;n FUERA DE BALANCE (No se activan los equipos), por lo tanto mejora los indicadores de ROA, ROE.</li>\n	<li>Permite beneficios tributarios a cargar la renta a gastos, reduciendo la base tributaria del cliente.</li>\n	<li>No afecta el Capital de Trabajo.</li>\n	<li>No tiene impacto sobre el endeudamiento bancario</li>\n	<li>Disminuye o elimina el riesgo de obsolescencia tecnol&oacute;gica</li>\n</ul>\n\n<p><img alt=\"\" src=\"http://multimport.com.pe/multiimport/public/img/financiamiento1.png\" /></p>\n\n<p><strong>HP Financial Services</strong></p>\n\n<p>Es un programa de HP donde ofrece financiamiento y arrendamiento de soluciones TI para nuestros clientes. Mediante este programa ser&aacute; mucho m&aacute;s sencillo adquirir soluciones tecnol&oacute;gicas.&nbsp; Dentro del HP Financial services, tenemos 2 modalidades</p>\n\n<ul>\n	<li>Financiamiento: los bienes son de propiedad del cliente desde la entrega.</li>\n	<li>Arrendamiento: es un contrato de alquiler por el que HP Financial Services (arrendador) adquiere la propiedad del bien, y se lo cedemos a usted (arrendatario) para su uso temporal, durante un plazo prefijado y a cambio de una renta peri&oacute;dica determinada.</li>\n</ul>\n\n<p>Una de las ventajas fundamentales del contrato de arrendamiento operativo (adem&aacute;s de las fiscales que suelen derivarse de este contrato) radica en que usted como usuario recurre a bienes de capital pudiendo deshacerse de ellos con facilidad cuando han sido amortizados, y se beneficia por el &quot;off-balance sheet&quot; (no-deuda, no activo)</p>\n\n<p>Cuando se llega al t&eacute;rmino de este contrato, el arrendatario tiene las siguientes opciones:<br />\n&bull; Adquirir la propiedad del bien, en cuyo caso, el precio de venta ser&aacute; determinado por el valor de mercado.<br />\n&bull; Renovar el contrato de arrendamiento, actualizando sus productos tecnol&oacute;gicos.<br />\n&bull; Ampliar el contrato de arrendamiento por un per&iacute;odo adicional.<br />\n&bull; Devolver los equipos a la arrendadora para su venta en el mercado secundario</p>\n\n<p><img alt=\"\" src=\"http://multimport.com.pe/multiimport/public/img/financiamiento2.png\" /></p>\n\n<p><strong>Requisitos:</strong></p>\n\n<ul>\n	<li>Composici&oacute;n: 70% Hardware &ndash; 30% Software y Servicios</li>\n	<li>El monto m&iacute;nimo a Financiar es de US$15,000 para plazos de 18, 24, 30 y 36 meses.</li>\n	<li>El monto m&iacute;nimo por Adenda es de US$5,000.</li>\n	<li>La cobertura de la garant&iacute;a incluye las garant&iacute;as est&aacute;ndares de los productos HP. Las garant&iacute;as para productos no-HP (HW y SW) no son aplicables.</li>\n	<li>Productos elegibles: toda la gama de productos HP, excepto consumibles.</li>\n</ul>\n\n<p><strong>Requerimientos</strong></p>\n\n<ul>\n	<li>EEFF de los &uacute;ltimos tres a&ntilde;os.(Incluir notas)</li>\n	<li>Solicitud de cr&eacute;ditos y datos del cliente</li>\n	<li>Poderes y DNI del Representante Legal</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><strong>IBM Global Financing</strong></p>\n\n<p>El programa IBM Global Financing ayuda a nuestros clientes a adquirir las soluciones tecnol&oacute;gicas y los servicios m&aacute;s recientes para que puedan innovar. Proporcionando financiamiento s&oacute;lido convirtiendo su necesidad en una realidad.</p>\n\n<p>La divisi&oacute;n financiera de IBM ofrece una variedad de opciones de financiaci&oacute;n de TI y Arrendamientos, para hacer frente a sus necesidades espec&iacute;ficas, al tiempo que ayuda a manejar mejor su flujo de caja y activos.</p>\n\n<p><img alt=\"\" src=\"http://multimport.com.pe/multiimport/public/img/financiamiento3.png\" /></p>\n\n<p><strong>Ventajas:</strong></p>\n\n<p>Una ventaja inmediata de la financiaci&oacute;n de IBM es que convertir&aacute; los grandes costos iniciales en cuotas mensuales o trimestrales asequibles. Financiamos la soluci&oacute;n completa de TI, hardware, software, servicios de IBM y tecnolog&iacute;a de terceros. Otras ventajas de IBM Global Financing le permiten:</p>\n\n<ul>\n	<li>Minimizar desembolsos iniciales y el impacto del presupuesto al adquirir tecnolog&iacute;a.</li>\n	<li>Conservar efectivo para utilizarlo en otras necesidades e inversiones.</li>\n	<li>Maximizar el flujo de caja y acelerar el punto de equilibrio de un proyecto con condiciones de pago que alinean los costos iniciales con los beneficios esperados.</li>\n	<li>Acelerar la adquisici&oacute;n de tecnolog&iacute;a.</li>\n	<li>Reducir el riesgo de obsolescencia tecnol&oacute;gica</li>\n	<li>Deshacerse de tecnolog&iacute;a obsoleta de acuerdo con las leyes y normativas medioambientales.</li>\n	<li>Mayor flexibilidad financiera.</li>\n</ul>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("8", "2016-01-12 14:19:05", "2016-04-15 10:56:53", NULL, "1", "2", NULL, "Servicios", NULL, "<p><strong>Servicios e Implementaci&oacute;n Microsoft</strong></p>\n\n<p>Multimport es un Partner Silver con la experiencia de m&aacute;s de 20 a&ntilde;os lo que nos permite brindar un amplio portafolio de servicios y soluciones basados en los requerimientos de nuestros clientes y asociados de negocios.<br />\nNuestros servicios est&aacute;n respaldados por nuestro staff certificado y amplio conocimiento de las herramientas y servicios de nuestros socios comerciales.</p>\n\n<p>El cumplimiento de nuestras metas y compromiso con cada uno de nuestros clientes y asociados comerciales nos permiten crecer en relaciones permanentes y duraderas que brindan valor agregado.<br />\n&nbsp;</p>\n\n<p><strong>Servicios Cloud.</strong></p>\n\n<p>Multimport ofrece servicios y soluciones de infraestructura cloud abierta para las operaciones de TI con la flexibilidad de disponer de cloud p&uacute;blica, privada o h&iacute;brida en funci&oacute;n de sus necesidades de negocio.<br />\n&nbsp;</p>\n\n<p>Nuestros staff certificado brindan toda la experiencia a diferentes clientes no importando el tama&ntilde;o de su empresa usted cuenta con m&aacute;s de 200 productos, servicios y soluciones que incluyen aplicaciones de pago por uso y de servicio on-demand&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("18", "2016-04-15 12:03:06", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "Azure", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("19", "2016-04-15 12:03:11", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "Licenciamiento", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("20", "2016-04-15 12:03:24", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "Office 365", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("21", "2016-04-15 12:03:32", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "SQL Server", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("22", "2016-04-15 12:03:44", "0000-00-00 00:00:00", NULL, "1", "6", NULL, "Windows Server", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("9", "2016-01-21 12:22:55", "2016-01-21 12:22:55", NULL, "1", "3", NULL, "Presentación", NULL, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n", "pag_1453396975_393x215.jpg", NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("10", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "2", NULL, "Consultoría", NULL, "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus fermentum, enim at semper iaculis, felis elit tempor ligula, sed commodo nisi est in ante. Nam tincidunt nibh at dolor cursus vulputate. Quisque in dui vitae sapien ultrices sollicitudin sit amet eget nisl. Suspendisse sed arcu velit. Vivamus eu convallis nulla, eget viverra ex. Aliquam vestibulum urna ullamcorper interdum maximus. Duis nec nunc bibendum ex imperdiet scelerisque.</p>\n\n<p>Sed fermentum tempor imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam elementum, odio ac sodales faucibus, orci ligula condimentum lacus, nec vestibulum justo felis eu felis. Etiam sit amet cursus sem. Suspendisse sapien ligula, sagittis eget facilisis at, tincidunt vel nibh. Duis accumsan interdum augue id sagittis. Pellentesque pretium posuere tempor. Praesent non placerat turpis. Integer elit risus, hendrerit sed urna vel, euismod efficitur nisl. Sed pretium ornare lectus sit amet iaculis. Nulla dignissim erat nec lectus bibendum, vitae hendrerit leo placerat.</p>\n\n<p>Nunc ultrices sagittis mattis. Aenean at rutrum sem. Aliquam ullamcorper lectus ac eleifend tincidunt. Aenean tincidunt elit ipsum, nec mollis enim posuere a. Sed sagittis turpis at elit iaculis, at commodo mauris facilisis. Vestibulum nec porttitor quam. Morbi ac odio venenatis elit placerat tincidunt sed non lorem. Ut eu ultrices sem, a rhoncus tellus. Quisque dapibus ipsum id orci vestibulum, at consectetur metus ultrices. Sed venenatis odio non lacinia rutrum. Sed porta nunc imperdiet, auctor ante suscipit, finibus risus. Nullam euismod velit lorem, in fringilla justo hendrerit consectetur. Donec ut pretium nunc, a finibus nulla. In quis ipsum orci. Cras ornare dolor tellus, eget tincidunt leo imperdiet id.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("11", "2016-04-15 03:53:15", "2016-04-15 04:02:18", NULL, "1", "5", NULL, "Introducción", NULL, "<p><strong>Licenciamiento y Servicios Microsoft.</strong></p>\n\n<p>Multimport le brinda asesor&iacute;a integral para definir una estrategia de acuerdo a sus&nbsp;requerimientos y necesidades &nbsp;de infraestructura y productividad; le brindamos&nbsp;soluciones de software e implementaci&oacute;n de productos Microsoft, Office 365,&nbsp;SharePoint, Azure, Windows Server, SQL Server entre otros.</p>\n\n<p>Nuestros consultores y expertos ingenieros brindan un alto conocimiento y experiencia&nbsp;para desarrollar una estrategia tecnol&oacute;gica que le permita dise&ntilde;ar, implementar y&nbsp;gestionar una evoluci&oacute;n productiva en su empresa que le ahorrar&aacute; tiempo y dinero.</p>\n\n<p>Nuestras soluciones &nbsp;nos permite ofrecer un portafolio de servicios de consultor&iacute;a a&nbsp;trav&eacute;s del abanico de soluciones que Microsoft tiene para la peque&ntilde;a y mediana&nbsp;empresa, brindando soluciones m&aacute;s competitivas y eficientes para nuestros clientes.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("12", "2016-04-15 03:53:33", "2016-05-28 19:41:41", NULL, "1", "5", NULL, "Microsoft", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("13", "2016-04-15 03:53:38", "2016-04-15 04:09:47", NULL, "1", "5", NULL, "Adobe", NULL, "<p>Son programas inform&aacute;ticos para la edici&oacute;n de fotograf&iacute;as, videos y sitios web son muy&nbsp;populares en todo el mundo. Adobe tambi&eacute;n cre&oacute; formatos muy usados en el &aacute;mbito de&nbsp;la inform&aacute;tica, como el Portable Document Format (PDF).</p>\n\n<p>Uno de los programas m&aacute;s conocidos de Adobe es Adobe Photoshop. Este editor de&nbsp;im&aacute;genes es utilizado por una gran cantidad de diarios y de revistas para retocar las&nbsp;fotos que publican, eliminando imperfecciones y optimizando la calidad.</p>\n\n<p>Hay otros programas tambien como: Adobe Acrobat, Adobe Dreamweaver, Adobe&nbsp;Flash, Adobe PageMaker y Adobe Reader</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("14", "2016-04-15 03:56:24", "2016-04-15 04:05:11", NULL, "1", "4", NULL, "Introducción", NULL, "<p><strong>Soluciones en Comunicaci&oacute;n</strong></p>\n\n<p>Ya sea que est&eacute; busacando un remplazo del sistema completo o solo las actualizaciones&nbsp;de un determinado hardware de comunicaciones, no busque m&aacute;s y elija a Multimport</p>\n\n<p>Nuestro portafolio:</p>\n\n<ul>\n	<li>Centrales IP</li>\n	<li>Cableado estructurado</li>\n	<li>Router &amp; switches</li>\n	<li>Firewalls, Puntos de acceso wi-fi</li>\n	<li>Unidades de videoconferencia</li>\n	<li>Soluciones de seguridad y Vigilancia, c&aacute;maras IP</li>\n</ul>\n\n<p>Asesor&iacute;a integral para definir una estrategia de acuerdo a sus requerimientos y&nbsp;necesidades &nbsp;de infraestructura y productividad; le brindamos soluciones de software e&nbsp;implementaci&oacute;n de productos Microsoft, Office 365, SharePoint, Azure, Windows&nbsp;Server, SQL Server entre otros.</p>\n\n<p>Nuestros consultores y expertos ingenieros brindan un alto conocimiento y experiencia&nbsp;para desarrollar una estrategia tecnol&oacute;gica que le permita dise&ntilde;ar, implementar y&nbsp;gestionar una evoluci&oacute;n productiva en su empresa que le ahorrar&aacute; tiempo y dinero.</p>\n\n<p>Nuestras soluciones &nbsp;nos permite ofrecer un portafolio de servicios de consultor&iacute;a a&nbsp;trav&eacute;s del abanico de soluciones que Microsoft tiene para la peque&ntilde;a y mediana&nbsp;empresa, brindando soluciones m&aacute;s competitivas y eficientes para nuestros clientes.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("15", "2016-04-15 03:56:41", "2016-04-15 04:06:21", NULL, "1", "4", NULL, "Networking", NULL, "<p>Multimport cuenta con la experiencia y respaldo en la comercializaci&oacute;n de Una gama completade productos que ofrecen una seguridad excelente, un rendimiento demostrado y extensas&nbsp;funciones que disminuyen la complejidad y maximizan la rentabilidad en la implementaci&oacute;n de&nbsp;redes LAN y WAN integrando soluciones inteligentes que ofrecen acceso, administraci&oacute;n y&nbsp;seguridad para empresas de todos los tama&ntilde;os con la flexibilidad para dise&ntilde;ar a medida la red&nbsp;en funci&oacute;n de los cambios en las necesidades empresariales.</p>\n\n<p>El desarrollo e implementaci&oacute;n de nuestras soluciones de Networking permiten la&nbsp;administraci&oacute;n de redes en funciones b&aacute;sicas y avanzadas de gesti&oacute;n.</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("16", "2016-04-15 03:57:01", "2016-04-15 04:07:11", NULL, "1", "4", NULL, "Comunicaciones Unificadas", NULL, "<p>Nuestra experiencia permiten logran la integraci&oacute;n de las comunicaciones en una misma&nbsp;soluci&oacute;n que ayude a sus empleados, clientes, proveedores y socios a comunicarse con&nbsp;mayor rapidez y facilidad.</p>\n\n<p>Cree, innove y responda con mayor rapidez &nbsp;beneficiando a las personas dado que&nbsp;conectan a los equipos con la informaci&oacute;n y hacen posible experiencias de colaboraci&oacute;n&nbsp;plenas y eficientes. Esto ayuda a su empresa</p>\n\n<p>&ldquo; No pierda ninguna oportunidad; permanezca siempre conectado a su oficina en todo&nbsp;momento y desde cualquier lugar con Comunicaciones Unificadas&rdquo;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("17", "2016-04-15 03:57:23", "2016-04-15 04:08:46", NULL, "1", "4", NULL, "Video Conferencia y Vigilancia", NULL, "<p>La colaboraci&oacute;n por medio de la videoconferencia &nbsp;proveen una infra-estructura para v&iacute;deo&nbsp;vers&aacute;til, segura y f&aacute;cil de utilizar. Estas soluciones dotan a su organizaci&oacute;n de las herramientas&nbsp;que necesita para:</p>\n\n<ul>\n	<li>Mejorar la productividad entre el personal distribuido</li>\n	<li>La preparaci&oacute;n y formaci&oacute;n de sus empleados de manera remota</li>\n	<li>Reducir los gastos de viaje</li>\n	<li>Construir fuertes relaciones entre los clientes y su plantilla</li>\n	<li>Sacar el m&aacute;ximo partido de las inversiones en comunicaciones y redes</li>\n</ul>\n\n<p>En Multimport encontrar&aacute; las soluciones de los principales fabricantes como:</p>\n\n<ul>\n	<li>Cisco</li>\n	<li>HP</li>\n	<li>Microsoft</li>\n	<li>Audio Codes</li>\n	<li>D-Link</li>\n	<li>Huawei</li>\n	<li>Denwa</li>\n	<li>Polycom</li>\n	<li>Sangoma</li>\n</ul>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("25", "2016-05-09 09:59:38", "2016-05-09 09:59:37", NULL, "1", "1", NULL, "Valores", NULL, "<p><strong>Honestidad e Integridad </strong>base fundamental que crea una s&oacute;lida cultura organizacional . &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\n\n<p><strong>Comunicaci&oacute;n Efectiva&nbsp; </strong>que&nbsp; genere confianza, efectividad&nbsp; y bienestar en nuestras actividades.</p>\n\n<p><strong>Profesionalismo </strong>contamos con personas proactivas que ayuden a corregir fallos y a buscar soluciones integrales con disciplina, esfuerzo y humildad. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\n\n<p><strong>Trabajo en Equipo </strong>que logra&nbsp; &oacute;ptimos resultados. &nbsp; &nbsp;</p>\n", NULL, NULL, "1", "ban_1462805977_1110x199.jpg");
#
#
INSERT INTO `paginas` VALUES ("27", "2016-05-25 18:18:38", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Servidores", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("28", "2016-05-25 18:18:44", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Storage", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("29", "2016-05-25 18:18:52", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Virtualización", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("30", "2016-05-25 18:19:08", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Protección Eléctrica", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("31", "2016-05-25 18:19:20", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Equipos de Computo", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("32", "2016-05-25 18:20:23", "0000-00-00 00:00:00", NULL, "1", "7", NULL, "Impresión e Imágen", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
#
#
INSERT INTO `paginas` VALUES ("33", "2016-01-12 14:19:05", "2016-04-15 10:56:53", NULL, "1", "2", NULL, "Infraestructura TI", NULL, "<p>PAGINA ESTATICA NO EDITABLE&nbsp;</p>\n", NULL, NULL, "1", NULL);
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("1", "2016-01-12 14:05:41", "2016-05-06 18:31:33", NULL, "1", NULL, NULL, "la-empresa", "Nosotros", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("2", "2016-01-12 14:05:41", "2016-01-12 14:06:42", NULL, "1", NULL, NULL, "unidades-de-negocio", "Unidades de Negocio", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("3", "2016-01-12 14:49:57", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "generales", "Páginas Generales", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("4", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "soluciones-en-comunicaciones", "Soluciones en Comunicaciones", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("5", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "soluciones-en-software", "Soluciones en Software", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("6", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "windows", "Windows", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("7", "2016-05-25 18:17:17", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "infraestructura", "Infraestructura", "1");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
DROP TABLE IF EXISTS `trabajo`;
#
#
CREATE TABLE `trabajo` (
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2012-05-02 12:46:20", "2016-01-12 15:39:00", NULL, "1", "administrador", "multiimport", NULL);
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
