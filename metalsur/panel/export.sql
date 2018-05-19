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
INSERT INTO `banners_fotos` VALUES ("1", "2015-11-02 15:11:19", "0000-00-00 00:00:00", NULL, "1", "banner_main", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("6", "2015-11-07 11:24:14", "2015-11-07 11:25:12", NULL, "1", "1", "banfot_1446913453_980x400.jpg", NULL, "20", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("12", "2015-11-07 11:37:53", "2015-11-07 11:37:58", NULL, "1", "1", "banfot_1446914272_980x400.jpg", NULL, "19", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("13", "2015-11-07 11:38:24", "2015-11-07 11:38:30", NULL, "1", "1", "banfot_1446914303_980x400.jpg", NULL, "18", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("14", "2015-11-07 11:39:40", "2015-11-07 11:39:47", NULL, "1", "1", "banfot_1446914379_980x400.jpg", NULL, "17", NULL, "1");
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
INSERT INTO `configuraciones` VALUES ("1", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "emails_publicos", "metalsur@metalsur.com.pe");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "metalsur@metalsur.com.pe");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
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
INSERT INTO `configuraciones_root` VALUES ("1", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "titulo_home", "metalsur");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "email_fromname", "metalsur");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "email_from", "metalsur@metalsur.com.pe");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "nombre_empresa", "metalsur");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "titulo_web", "metalsur");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
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
INSERT INTO `galleries_photos` VALUES ("1", "2015-11-05 09:27:02", "0000-00-00 00:00:00", NULL, "1", NULL, "2015-11-05 09:26:48", "Clientes", NULL, "1");
#
#
INSERT INTO `galleries_photos` VALUES ("2", "2015-11-07 09:26:51", "0000-00-00 00:00:00", NULL, "1", NULL, "2015-11-07 09:25:02", "DCM TALLER CHILLON", NULL, "1");
#
#
INSERT INTO `galleries_photos` VALUES ("3", "2015-11-07 09:27:11", "0000-00-00 00:00:00", NULL, "1", NULL, "2015-11-07 09:25:02", "INAUGURACION NUEVO LOCAL 2012", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `galleries_photos_photos` VALUES ("1", "2015-11-06 12:22:00", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446830520_256x258.jpg", "AJE", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("6", "2015-11-06 12:36:08", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831368_258x258.jpg", "BRANDE", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("7", "2015-11-06 12:36:18", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831377_258x258.jpg", "CELSA", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("8", "2015-11-06 12:36:28", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831388_258x258.jpg", "CENTELSA", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("9", "2015-11-06 12:37:02", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831422_258x258.jpg", "CEPER CABLES", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("10", "2015-11-06 12:37:21", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831441_258x258.jpg", "INDECO", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("11", "2015-11-06 12:37:37", "0000-00-00 00:00:00", NULL, "1", NULL, "1", "galfot_1446831456_258x258.jpg", "JARDIN Y PAISAJE", NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("12", "2015-11-07 09:28:06", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906485_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("13", "2015-11-07 09:28:18", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906497_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("14", "2015-11-07 09:28:29", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906508_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("15", "2015-11-07 09:28:40", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906519_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("16", "2015-11-07 09:28:52", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906531_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("17", "2015-11-07 09:29:05", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906544_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("18", "2015-11-07 09:29:17", "0000-00-00 00:00:00", NULL, "1", NULL, "2", "galfot_1446906556_1000x563.jpg", NULL, NULL, "1");
#
#
INSERT INTO `galleries_photos_photos` VALUES ("19", "2015-11-07 09:29:48", "0000-00-00 00:00:00", NULL, "1", NULL, "3", "galfot_1446906587_1000x750.jpg", NULL, NULL, "1");
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
  `file` varchar(150) DEFAULT NULL,
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
DROP TABLE IF EXISTS `paginas`;
#
#
CREATE TABLE `paginas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(80) DEFAULT NULL,
  `id_grupo` int(10) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `foto_name` varchar(80) DEFAULT NULL,
  `web` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2015-11-06 12:03:27", "2015-11-06 13:01:29", NULL, "1", "3", "3", NULL, "bienvenido", "Empresa", NULL, "<p>Contamos con personal altamente capacitado y especializado para realizar trabajos en altura y maniobras complicadas; supervisores de soldadura, ingenieros mec&aacute;nicos y electricistas con amplio conocimiento, experiencia y compromiso logrando la satisfacci&oacute;n de nuestros clientes. Nuestro local est&aacute; debidamente equipado para poder realizar diversos proyectos, entre nuestros equipos tenemos:</p>\n\n<ul>\n	<li>Equipo CNC para corte de planchas. Equipos de soldadura SMAW, MIG/MAG, soldadura por puntos.</li>\n</ul>\n\n<ul>\n	<li>Tornos paralelos universales de 0.8m, 1.5m, 2m y 3m entre puntas.</li>\n</ul>\n\n<ul>\n	<li>Mandrinadora FIAT, taladros fresadores de columna, cepillos de codo.</li>\n</ul>\n\n<ul>\n	<li>Dobladora de planchas (de dados) de 3mm x 2m, fresadora universal.</li>\n</ul>\n\n<ul>\n	<li>Prensa hidr&aacute;ulica de 30 Ton, prensa exc&eacute;ntrica de 30 Ton. Rompe pavimentos manuales.</li>\n</ul>\n\n<p>Para recibir una atenci&oacute;n personalizada no dude en contactar con nosotros.</p>\n\n<p>En nuestra web pueden encontrar la descripci&oacute;n de nuestros servicios y de algunos de nuestros proyectos destacados.</p>\n", "pag_1446829406_1000x750.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2015-11-02 14:25:24", "2015-11-07 12:18:42", NULL, "1", "3", "3", NULL, "phones", "Teléfonos", NULL, "<p><span class=\"marker\"><strong>Direcci&oacute;n:</strong></span><br />\nCalle Cerro Colorido Mz. &ldquo;F&rdquo; Lote 15 Urb. San Juan Mas&iacute;as - San Borja, Lima - Per&uacute;</p>\n\n<hr />\n<p><span class=\"marker\"><strong>Central Telef&oacute;nica:</strong></span><br />\n(01) 225-5554 / 224-4058</p>\n\n<p><strong><span class=\"marker\">RPC:</span>&nbsp; </strong>947269780 <span class=\"marker\"><strong>RPM:</strong></span> #998920047</p>\n\n<hr />\n<p><span class=\"marker\"><strong>Correo:</strong></span><br />\ninformes@metalsur.com.pe</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2015-11-02 14:25:24", "0000-00-00 00:00:00", NULL, "1", "1", "1", NULL, "servicios", NULL, NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("5", "2015-11-02 14:25:24", "0000-00-00 00:00:00", NULL, "1", "", NULL, NULL, "responsabilidad-social", NULL, NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("6", "2015-11-06 11:46:23", "2015-11-06 11:46:23", NULL, "1", "4", "4", NULL, "izquierda", "DCM INDUSTRIAS SAC", NULL, "<p>El Grupo DCM es un conjunto de empresas dedicadas al rubro de fabricaci&oacute;n y montajes electromec&aacute;nicos, as&iacute; como a la fabricaci&oacute;n de cables y conductores el&eacute;ctricos de cobre. Este grupo empez&oacute; en 1986 con el nombre inicial de DCM Ingenieros SR Ltda y desde sus inicios se orient&oacute; al desarrollo integral de proyectos de ingenier&iacute;a, construcciones en acero, obras civiles y ejecuci&oacute;n de proyectos &ldquo;Llave en mano&rdquo;.</p>\n", "pag_1446828383_470x261.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("7", "2015-11-06 11:46:10", "2015-11-06 11:46:10", NULL, "1", "4", "4", NULL, "derecha", "METALSUR INGENIEROS SAC", NULL, "<p>Realiza proyectos electromec&aacute;nicos como tendido de tuber&iacute;as, instalaci&oacute;n de maquinaria y equipos industriales con sus perif&eacute;ricos; tales como obras civiles de cimentaci&oacute;n, alineamiento y nivelaci&oacute;n, l&iacute;neas de agua, aire comprimido (compresor, secadores, pulm&oacute;n acumulador, filtros y red completa), l&iacute;neas de vapor e instalaciones el&eacute;ctricas. Adicionalmente, esta empresa produce cables y conductores el&eacute;ctricos con la marca DCM Cables Per&uacute;.</p>\n", "pag_1446828370_470x263.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("8", "2015-11-05 10:23:51", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, NULL, "home", NULL, NULL, NULL, NULL, NULL, "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2015-10-23 13:15:50", "0000-00-00 00:00:00", NULL, "1", "administrador", "metalsur", NULL);
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
