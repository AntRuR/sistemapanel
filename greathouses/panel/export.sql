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
INSERT INTO `banners_fotos` VALUES ("1", "2016-11-08 10:39:39", "0000-00-00 00:00:00", NULL, "1", "banner_main", NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("4", "2016-11-13 23:00:14", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1479096012_1500x550.jpg", NULL, "99", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("3", "2016-11-13 22:59:43", "2016-11-13 22:59:55", NULL, "1", "1", "banfot_1479095982_1500x550.jpg", NULL, "100", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("5", "2016-11-13 23:00:31", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1479096030_1500x550.jpg", NULL, "98", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("7", "2016-11-13 23:01:27", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1479096085_1500x550.jpg", NULL, "97", NULL, "1");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("8", "2016-11-13 23:01:44", "0000-00-00 00:00:00", NULL, "1", "1", "banfot_1479096102_1500x550.jpg", NULL, "96", NULL, "1");
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
INSERT INTO `configuraciones` VALUES ("1", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "telefonos_publicos", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("2", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "emails_publicos", "greathouses@great-houses.com");
#
#
INSERT INTO `configuraciones` VALUES ("3", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "direccion_publica", "av direccion 000");
#
#
INSERT INTO `configuraciones` VALUES ("4", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "telefonos_email", "0000000");
#
#
INSERT INTO `configuraciones` VALUES ("5", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "greathouses@great-houses.com");
#
#
INSERT INTO `configuraciones` VALUES ("6", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "direccion_email", "av direccion 000");
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
INSERT INTO `configuraciones_root` VALUES ("1", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "titulo_home", "Great Houses");
#
#
INSERT INTO `configuraciones_root` VALUES ("2", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "emails_admin", "guillermolozan@gmail.com,wtavara@prodiserv.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("3", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "email_logo", "particular/header/logo.jpg");
#
#
INSERT INTO `configuraciones_root` VALUES ("4", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "email_fromname", "Great Houses");
#
#
INSERT INTO `configuraciones_root` VALUES ("5", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "email_from", "greathouses@great-houses.com");
#
#
INSERT INTO `configuraciones_root` VALUES ("6", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "simbolo_moneda", "S/.");
#
#
INSERT INTO `configuraciones_root` VALUES ("7", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "nombre_empresa", "Great Houses");
#
#
INSERT INTO `configuraciones_root` VALUES ("8", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "titulo_web", "Great Houses");
#
#
INSERT INTO `configuraciones_root` VALUES ("9", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "anaytics_code", "");
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
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
  `geo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `geo_departamentos` VALUES ("1", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Amazonas", "01");
#
#
INSERT INTO `geo_departamentos` VALUES ("2", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ancash", "02");
#
#
INSERT INTO `geo_departamentos` VALUES ("3", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Apurimac", "03");
#
#
INSERT INTO `geo_departamentos` VALUES ("4", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Arequipa", "04");
#
#
INSERT INTO `geo_departamentos` VALUES ("5", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ayacucho", "05");
#
#
INSERT INTO `geo_departamentos` VALUES ("6", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cajamarca", "06");
#
#
INSERT INTO `geo_departamentos` VALUES ("7", "0000-00-00 00:00:00", "2012-01-13 10:07:46", NULL, "1", "Cusco", "08");
#
#
INSERT INTO `geo_departamentos` VALUES ("8", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huancavelica", "09");
#
#
INSERT INTO `geo_departamentos` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huánuco", "10");
#
#
INSERT INTO `geo_departamentos` VALUES ("10", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ica", "11");
#
#
INSERT INTO `geo_departamentos` VALUES ("11", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Junín", "12");
#
#
INSERT INTO `geo_departamentos` VALUES ("12", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "La Libertad", "13");
#
#
INSERT INTO `geo_departamentos` VALUES ("13", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lambayeque", "14");
#
#
INSERT INTO `geo_departamentos` VALUES ("14", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lima", "15");
#
#
INSERT INTO `geo_departamentos` VALUES ("15", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Loreto", "16");
#
#
INSERT INTO `geo_departamentos` VALUES ("16", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Madre de Dios", "17");
#
#
INSERT INTO `geo_departamentos` VALUES ("17", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Moquegua", "18");
#
#
INSERT INTO `geo_departamentos` VALUES ("18", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pasco", "19");
#
#
INSERT INTO `geo_departamentos` VALUES ("19", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Piura", "20");
#
#
INSERT INTO `geo_departamentos` VALUES ("20", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Puno", "21");
#
#
INSERT INTO `geo_departamentos` VALUES ("21", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Martín", "22");
#
#
INSERT INTO `geo_departamentos` VALUES ("22", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tacna", "23");
#
#
INSERT INTO `geo_departamentos` VALUES ("23", "0000-00-00 00:00:00", "2009-12-02 11:07:55", NULL, "1", "Tumbes", "24");
#
#
INSERT INTO `geo_departamentos` VALUES ("24", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ucayali", "25");
#
#
INSERT INTO `geo_departamentos` VALUES ("26", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "Callao", "07");
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
  `geo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=1689 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `geo_distritos` VALUES ("2", "0000-00-00 00:00:00", "2011-10-15 01:25:29", NULL, "1", "8", "Ancón", "150102");
#
#
INSERT INTO `geo_distritos` VALUES ("3", "0000-00-00 00:00:00", "2011-10-15 01:25:22", NULL, "0", "8", "Ate", "150103");
#
#
INSERT INTO `geo_distritos` VALUES ("4", "0000-00-00 00:00:00", "2011-10-15 01:25:15", NULL, "1", "8", "Barranco", "150104");
#
#
INSERT INTO `geo_distritos` VALUES ("5", "0000-00-00 00:00:00", "2011-10-15 01:25:09", NULL, "1", "8", "Breña", "150105");
#
#
INSERT INTO `geo_distritos` VALUES ("6", "0000-00-00 00:00:00", "2011-10-15 01:25:01", NULL, "1", "8", "Carabayllo", "150106");
#
#
INSERT INTO `geo_distritos` VALUES ("7", "0000-00-00 00:00:00", "2011-10-15 01:24:51", NULL, "1", "8", "Chaclacayo", "150107");
#
#
INSERT INTO `geo_distritos` VALUES ("8", "0000-00-00 00:00:00", "2011-10-15 01:24:26", NULL, "1", "8", "Chorrillos", "150108");
#
#
INSERT INTO `geo_distritos` VALUES ("9", "0000-00-00 00:00:00", "2011-10-15 01:24:40", NULL, "1", "8", "Cieneguilla", "150109");
#
#
INSERT INTO `geo_distritos` VALUES ("10", "0000-00-00 00:00:00", "2011-10-14 20:30:28", NULL, "1", "8", "Comas", "150110");
#
#
INSERT INTO `geo_distritos` VALUES ("11", "0000-00-00 00:00:00", "2011-10-15 01:24:13", NULL, "1", "8", "El Agustino", "150111");
#
#
INSERT INTO `geo_distritos` VALUES ("12", "0000-00-00 00:00:00", "2011-10-15 01:24:05", NULL, "1", "8", "Independencia", "150112");
#
#
INSERT INTO `geo_distritos` VALUES ("13", "0000-00-00 00:00:00", "2011-10-15 01:23:33", NULL, "1", "8", "Jesús María", "150113");
#
#
INSERT INTO `geo_distritos` VALUES ("14", "0000-00-00 00:00:00", "2011-10-15 01:23:54", NULL, "1", "8", "La Molina", "150114");
#
#
INSERT INTO `geo_distritos` VALUES ("15", "0000-00-00 00:00:00", "2011-10-15 01:23:22", NULL, "1", "8", "La Victoria", "150115");
#
#
INSERT INTO `geo_distritos` VALUES ("16", "0000-00-00 00:00:00", "2011-10-15 01:23:13", NULL, "1", "8", "Lince", "150116");
#
#
INSERT INTO `geo_distritos` VALUES ("17", "0000-00-00 00:00:00", "2011-10-15 01:23:04", NULL, "1", "8", "Los Olivos", "150117");
#
#
INSERT INTO `geo_distritos` VALUES ("18", "0000-00-00 00:00:00", "2011-10-15 01:22:39", NULL, "1", "8", "Chosica", NULL);
#
#
INSERT INTO `geo_distritos` VALUES ("19", "0000-00-00 00:00:00", "2011-10-15 01:22:31", NULL, "1", "8", "Lurin", "150119");
#
#
INSERT INTO `geo_distritos` VALUES ("20", "0000-00-00 00:00:00", "2011-10-15 01:22:12", NULL, "1", "8", "Magdalena del Mar", "150120");
#
#
INSERT INTO `geo_distritos` VALUES ("21", "0000-00-00 00:00:00", "2011-10-15 01:22:18", NULL, "1", "8", "Pueblo Libre", NULL);
#
#
INSERT INTO `geo_distritos` VALUES ("22", "0000-00-00 00:00:00", "2011-10-15 01:22:00", NULL, "1", "8", "Miraflores", "150122");
#
#
INSERT INTO `geo_distritos` VALUES ("23", "0000-00-00 00:00:00", "2011-10-15 01:21:52", NULL, "1", "8", "Pachacámac", "150123");
#
#
INSERT INTO `geo_distritos` VALUES ("24", "0000-00-00 00:00:00", "2011-10-15 01:21:45", NULL, "1", "8", "Pucusana", "150124");
#
#
INSERT INTO `geo_distritos` VALUES ("25", "0000-00-00 00:00:00", "2011-10-15 01:21:36", NULL, "1", "8", "Puente Piedra", "150125");
#
#
INSERT INTO `geo_distritos` VALUES ("26", "0000-00-00 00:00:00", "2011-10-15 01:20:11", NULL, "1", "8", "Punta Hermosa", "150126");
#
#
INSERT INTO `geo_distritos` VALUES ("27", "0000-00-00 00:00:00", "2011-10-15 01:20:02", NULL, "1", "8", "Punta Negra", "150127");
#
#
INSERT INTO `geo_distritos` VALUES ("28", "0000-00-00 00:00:00", "2011-10-15 01:19:55", NULL, "1", "8", "Rímac", "150128");
#
#
INSERT INTO `geo_distritos` VALUES ("29", "0000-00-00 00:00:00", "2011-10-15 01:19:48", NULL, "1", "8", "San Bartolo", "150129");
#
#
INSERT INTO `geo_distritos` VALUES ("30", "0000-00-00 00:00:00", "2011-10-15 01:19:42", NULL, "1", "8", "San Borja", "150130");
#
#
INSERT INTO `geo_distritos` VALUES ("31", "0000-00-00 00:00:00", "2011-10-15 01:19:35", NULL, "1", "8", "San Isidro", "150131");
#
#
INSERT INTO `geo_distritos` VALUES ("32", "0000-00-00 00:00:00", "2011-10-15 01:19:29", NULL, "1", "8", "San Juan de Lurigancho", "150132");
#
#
INSERT INTO `geo_distritos` VALUES ("33", "0000-00-00 00:00:00", "2011-10-15 01:19:23", NULL, "1", "8", "San Juan de Miraflores", "150133");
#
#
INSERT INTO `geo_distritos` VALUES ("34", "0000-00-00 00:00:00", "2011-10-15 01:19:14", NULL, "1", "8", "San Luis", "150134");
#
#
INSERT INTO `geo_distritos` VALUES ("35", "0000-00-00 00:00:00", "2011-10-15 01:19:08", NULL, "1", "8", "San Martín de Porres", "150135");
#
#
INSERT INTO `geo_distritos` VALUES ("36", "0000-00-00 00:00:00", "2011-10-15 01:18:57", NULL, "1", "8", "San Miguel", "150136");
#
#
INSERT INTO `geo_distritos` VALUES ("37", "0000-00-00 00:00:00", "2011-10-15 01:18:41", NULL, "1", "8", "Santa Anita", "150137");
#
#
INSERT INTO `geo_distritos` VALUES ("38", "0000-00-00 00:00:00", "2011-10-15 01:18:29", NULL, "1", "8", "Santa María del Mar", "150138");
#
#
INSERT INTO `geo_distritos` VALUES ("39", "0000-00-00 00:00:00", "2011-10-15 01:18:04", NULL, "1", "8", "Santa Rosa", "150139");
#
#
INSERT INTO `geo_distritos` VALUES ("40", "0000-00-00 00:00:00", "2011-10-15 01:17:19", NULL, "1", "8", "Santiago de Surco", "150140");
#
#
INSERT INTO `geo_distritos` VALUES ("41", "0000-00-00 00:00:00", "2011-10-14 20:24:16", NULL, "1", "8", "Surquillo", "150141");
#
#
INSERT INTO `geo_distritos` VALUES ("42", "0000-00-00 00:00:00", "2011-10-15 01:17:08", NULL, "1", "8", "Villa El Salvador", "150142");
#
#
INSERT INTO `geo_distritos` VALUES ("43", "0000-00-00 00:00:00", "2011-10-15 01:17:01", NULL, "1", "8", "Villa María del Triunfo", "150143");
#
#
INSERT INTO `geo_distritos` VALUES ("46", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Chachapoyas", "010101");
#
#
INSERT INTO `geo_distritos` VALUES ("47", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Asuncion", "010102");
#
#
INSERT INTO `geo_distritos` VALUES ("48", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Balsas", "010103");
#
#
INSERT INTO `geo_distritos` VALUES ("49", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Cheto", "010104");
#
#
INSERT INTO `geo_distritos` VALUES ("50", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Chiliquin", "010105");
#
#
INSERT INTO `geo_distritos` VALUES ("51", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Chuquibamba", "010106");
#
#
INSERT INTO `geo_distritos` VALUES ("52", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Granada", "010107");
#
#
INSERT INTO `geo_distritos` VALUES ("53", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Huancas", "010108");
#
#
INSERT INTO `geo_distritos` VALUES ("54", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "La Jalca", "010109");
#
#
INSERT INTO `geo_distritos` VALUES ("55", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Leimebamba", "010110");
#
#
INSERT INTO `geo_distritos` VALUES ("56", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Levanto", "010111");
#
#
INSERT INTO `geo_distritos` VALUES ("57", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Magdalena", "010112");
#
#
INSERT INTO `geo_distritos` VALUES ("58", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Mariscal Castilla", "010113");
#
#
INSERT INTO `geo_distritos` VALUES ("59", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Molinopampa", "010114");
#
#
INSERT INTO `geo_distritos` VALUES ("60", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Montevideo", "010115");
#
#
INSERT INTO `geo_distritos` VALUES ("61", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Olleros", "010116");
#
#
INSERT INTO `geo_distritos` VALUES ("62", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Quinjalca", "010117");
#
#
INSERT INTO `geo_distritos` VALUES ("63", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "San Francisco De Daguas", "010118");
#
#
INSERT INTO `geo_distritos` VALUES ("64", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "San Isidro De Maino", "010119");
#
#
INSERT INTO `geo_distritos` VALUES ("65", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Soloco", "010120");
#
#
INSERT INTO `geo_distritos` VALUES ("66", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "14", "Sonche", "010121");
#
#
INSERT INTO `geo_distritos` VALUES ("67", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "Bagua", "010201");
#
#
INSERT INTO `geo_distritos` VALUES ("68", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "Aramango", "010202");
#
#
INSERT INTO `geo_distritos` VALUES ("69", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "Copallin", "010203");
#
#
INSERT INTO `geo_distritos` VALUES ("70", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "El Parco", "010204");
#
#
INSERT INTO `geo_distritos` VALUES ("71", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "Imaza", "010205");
#
#
INSERT INTO `geo_distritos` VALUES ("72", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "15", "La Peca", "010206");
#
#
INSERT INTO `geo_distritos` VALUES ("73", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Jumbilla", "010301");
#
#
INSERT INTO `geo_distritos` VALUES ("74", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Chisquilla", "010302");
#
#
INSERT INTO `geo_distritos` VALUES ("75", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Churuja", "010303");
#
#
INSERT INTO `geo_distritos` VALUES ("76", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Corosha", "010304");
#
#
INSERT INTO `geo_distritos` VALUES ("77", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Cuispes", "010305");
#
#
INSERT INTO `geo_distritos` VALUES ("78", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Florida", "010306");
#
#
INSERT INTO `geo_distritos` VALUES ("79", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Jazan", "010307");
#
#
INSERT INTO `geo_distritos` VALUES ("80", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Recta", "010308");
#
#
INSERT INTO `geo_distritos` VALUES ("81", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "San Carlos", "010309");
#
#
INSERT INTO `geo_distritos` VALUES ("82", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Shipasbamba", "010310");
#
#
INSERT INTO `geo_distritos` VALUES ("83", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Valera", "010311");
#
#
INSERT INTO `geo_distritos` VALUES ("84", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "16", "Yambrasbamba", "010312");
#
#
INSERT INTO `geo_distritos` VALUES ("85", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "17", "Nieva", "010401");
#
#
INSERT INTO `geo_distritos` VALUES ("86", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "17", "El Cenepa", "010402");
#
#
INSERT INTO `geo_distritos` VALUES ("87", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "17", "Rio Santiago", "010403");
#
#
INSERT INTO `geo_distritos` VALUES ("88", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Lamud", "010501");
#
#
INSERT INTO `geo_distritos` VALUES ("89", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Camporredondo", "010502");
#
#
INSERT INTO `geo_distritos` VALUES ("90", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Cocabamba", "010503");
#
#
INSERT INTO `geo_distritos` VALUES ("91", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Colcamar", "010504");
#
#
INSERT INTO `geo_distritos` VALUES ("92", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Conila", "010505");
#
#
INSERT INTO `geo_distritos` VALUES ("93", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Inguilpata", "010506");
#
#
INSERT INTO `geo_distritos` VALUES ("94", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Longuita", "010507");
#
#
INSERT INTO `geo_distritos` VALUES ("95", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Lonya Chico", "010508");
#
#
INSERT INTO `geo_distritos` VALUES ("96", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Luya", "010509");
#
#
INSERT INTO `geo_distritos` VALUES ("97", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Luya Viejo", "010510");
#
#
INSERT INTO `geo_distritos` VALUES ("98", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Maria", "010511");
#
#
INSERT INTO `geo_distritos` VALUES ("99", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Ocalli", "010512");
#
#
INSERT INTO `geo_distritos` VALUES ("100", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Ocumal", "010513");
#
#
INSERT INTO `geo_distritos` VALUES ("101", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Pisuquia", "010514");
#
#
INSERT INTO `geo_distritos` VALUES ("102", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Providencia", "010515");
#
#
INSERT INTO `geo_distritos` VALUES ("103", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "San Cristobal", "010516");
#
#
INSERT INTO `geo_distritos` VALUES ("104", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "San Francisco Del Yeso", "010517");
#
#
INSERT INTO `geo_distritos` VALUES ("105", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "San Jeronimo", "010518");
#
#
INSERT INTO `geo_distritos` VALUES ("106", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "San Juan De Lopecancha", "010519");
#
#
INSERT INTO `geo_distritos` VALUES ("107", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Santa Catalina", "010520");
#
#
INSERT INTO `geo_distritos` VALUES ("108", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Santo Tomas", "010521");
#
#
INSERT INTO `geo_distritos` VALUES ("109", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Tingo", "010522");
#
#
INSERT INTO `geo_distritos` VALUES ("110", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "18", "Trita", "010523");
#
#
INSERT INTO `geo_distritos` VALUES ("111", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "San Nicolas", "010601");
#
#
INSERT INTO `geo_distritos` VALUES ("112", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Chirimoto", "010602");
#
#
INSERT INTO `geo_distritos` VALUES ("113", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Cochamal", "010603");
#
#
INSERT INTO `geo_distritos` VALUES ("114", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Huambo", "010604");
#
#
INSERT INTO `geo_distritos` VALUES ("115", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Limabamba", "010605");
#
#
INSERT INTO `geo_distritos` VALUES ("116", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Longar", "010606");
#
#
INSERT INTO `geo_distritos` VALUES ("117", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Mariscal Benavides", "010607");
#
#
INSERT INTO `geo_distritos` VALUES ("118", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Milpuc", "010608");
#
#
INSERT INTO `geo_distritos` VALUES ("119", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Omia", "010609");
#
#
INSERT INTO `geo_distritos` VALUES ("120", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Totora", "010611");
#
#
INSERT INTO `geo_distritos` VALUES ("121", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "19", "Vista Alegre", "010612");
#
#
INSERT INTO `geo_distritos` VALUES ("122", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Bagua Grande", "010701");
#
#
INSERT INTO `geo_distritos` VALUES ("123", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Cajaruro", "010702");
#
#
INSERT INTO `geo_distritos` VALUES ("124", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Cumba", "010703");
#
#
INSERT INTO `geo_distritos` VALUES ("125", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "El Milagro", "010704");
#
#
INSERT INTO `geo_distritos` VALUES ("126", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Jamalca", "010705");
#
#
INSERT INTO `geo_distritos` VALUES ("127", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Lonya Grande", "010706");
#
#
INSERT INTO `geo_distritos` VALUES ("128", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "20", "Yamon", "010707");
#
#
INSERT INTO `geo_distritos` VALUES ("129", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Huaraz", "020101");
#
#
INSERT INTO `geo_distritos` VALUES ("130", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Cochabamba", "020102");
#
#
INSERT INTO `geo_distritos` VALUES ("131", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Colcabamba", "020103");
#
#
INSERT INTO `geo_distritos` VALUES ("132", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Huanchay", "020104");
#
#
INSERT INTO `geo_distritos` VALUES ("133", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Jangas", "020106");
#
#
INSERT INTO `geo_distritos` VALUES ("134", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "La Libertad", "020107");
#
#
INSERT INTO `geo_distritos` VALUES ("135", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Pampas", "020109");
#
#
INSERT INTO `geo_distritos` VALUES ("136", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Pariacoto", "020110");
#
#
INSERT INTO `geo_distritos` VALUES ("137", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Pira", "020111");
#
#
INSERT INTO `geo_distritos` VALUES ("138", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "21", "Tarica", "020112");
#
#
INSERT INTO `geo_distritos` VALUES ("139", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "22", "Aija", "020201");
#
#
INSERT INTO `geo_distritos` VALUES ("140", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "22", "Coris", "020202");
#
#
INSERT INTO `geo_distritos` VALUES ("141", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "22", "Huacllan", "020203");
#
#
INSERT INTO `geo_distritos` VALUES ("142", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "22", "La Merced", "020204");
#
#
INSERT INTO `geo_distritos` VALUES ("143", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "22", "Succha", "020205");
#
#
INSERT INTO `geo_distritos` VALUES ("144", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "Llamellin", "020301");
#
#
INSERT INTO `geo_distritos` VALUES ("145", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "Aczo", "020302");
#
#
INSERT INTO `geo_distritos` VALUES ("146", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "Chaccho", "020303");
#
#
INSERT INTO `geo_distritos` VALUES ("147", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "Chingas", "020304");
#
#
INSERT INTO `geo_distritos` VALUES ("148", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "Mirgas", "020305");
#
#
INSERT INTO `geo_distritos` VALUES ("149", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "23", "San Juan De Rontoy", "020306");
#
#
INSERT INTO `geo_distritos` VALUES ("150", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "24", "Chacas", "020401");
#
#
INSERT INTO `geo_distritos` VALUES ("151", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "24", "Acochaca", "020402");
#
#
INSERT INTO `geo_distritos` VALUES ("152", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Chiquian", "020501");
#
#
INSERT INTO `geo_distritos` VALUES ("153", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Abelardo Pardo Lezameta", "020502");
#
#
INSERT INTO `geo_distritos` VALUES ("154", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Antonio Raymondi", "020503");
#
#
INSERT INTO `geo_distritos` VALUES ("155", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Aquia", "020504");
#
#
INSERT INTO `geo_distritos` VALUES ("156", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Cajacay", "020505");
#
#
INSERT INTO `geo_distritos` VALUES ("157", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Canis", "020506");
#
#
INSERT INTO `geo_distritos` VALUES ("158", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Colquioc", "020507");
#
#
INSERT INTO `geo_distritos` VALUES ("159", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Huallanca", "020508");
#
#
INSERT INTO `geo_distritos` VALUES ("160", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Huasta", "020509");
#
#
INSERT INTO `geo_distritos` VALUES ("161", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Huayllacayan", "020510");
#
#
INSERT INTO `geo_distritos` VALUES ("162", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "La Primavera", "020511");
#
#
INSERT INTO `geo_distritos` VALUES ("163", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Mangas", "020512");
#
#
INSERT INTO `geo_distritos` VALUES ("164", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Pacllon", "020513");
#
#
INSERT INTO `geo_distritos` VALUES ("165", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "San Miguel De Corpanqui", "020514");
#
#
INSERT INTO `geo_distritos` VALUES ("166", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "25", "Ticllos", "020515");
#
#
INSERT INTO `geo_distritos` VALUES ("167", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Carhuaz", "020601");
#
#
INSERT INTO `geo_distritos` VALUES ("168", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Acopampa", "020602");
#
#
INSERT INTO `geo_distritos` VALUES ("169", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Amashca", "020603");
#
#
INSERT INTO `geo_distritos` VALUES ("170", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Anta", "020604");
#
#
INSERT INTO `geo_distritos` VALUES ("171", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Ataquero", "020605");
#
#
INSERT INTO `geo_distritos` VALUES ("172", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Marcara", "020606");
#
#
INSERT INTO `geo_distritos` VALUES ("173", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Pariahuanca", "020607");
#
#
INSERT INTO `geo_distritos` VALUES ("174", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "San Miguel De Aco", "020608");
#
#
INSERT INTO `geo_distritos` VALUES ("175", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Shilla", "020609");
#
#
INSERT INTO `geo_distritos` VALUES ("176", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Tinco", "020610");
#
#
INSERT INTO `geo_distritos` VALUES ("177", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "26", "Yungar", "020611");
#
#
INSERT INTO `geo_distritos` VALUES ("178", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "27", "Yauya", "020703");
#
#
INSERT INTO `geo_distritos` VALUES ("179", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "28", "Casma", "020801");
#
#
INSERT INTO `geo_distritos` VALUES ("180", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "28", "Buena Vista Alta", "020802");
#
#
INSERT INTO `geo_distritos` VALUES ("181", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "28", "Comandante Noel", "020803");
#
#
INSERT INTO `geo_distritos` VALUES ("182", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "28", "Yautan", "020804");
#
#
INSERT INTO `geo_distritos` VALUES ("183", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Corongo", "020901");
#
#
INSERT INTO `geo_distritos` VALUES ("184", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Aco", "020902");
#
#
INSERT INTO `geo_distritos` VALUES ("185", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Bambas", "020903");
#
#
INSERT INTO `geo_distritos` VALUES ("186", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Cusca", "020904");
#
#
INSERT INTO `geo_distritos` VALUES ("187", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "La Pampa", "020905");
#
#
INSERT INTO `geo_distritos` VALUES ("188", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Yanac", "020906");
#
#
INSERT INTO `geo_distritos` VALUES ("189", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "29", "Yupan", "020907");
#
#
INSERT INTO `geo_distritos` VALUES ("190", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Huari", "021001");
#
#
INSERT INTO `geo_distritos` VALUES ("191", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Anra", "021002");
#
#
INSERT INTO `geo_distritos` VALUES ("192", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Cajay", "021003");
#
#
INSERT INTO `geo_distritos` VALUES ("193", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Chavin De Huantar", "021004");
#
#
INSERT INTO `geo_distritos` VALUES ("194", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Huacachi", "021005");
#
#
INSERT INTO `geo_distritos` VALUES ("195", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Huacchis", "021006");
#
#
INSERT INTO `geo_distritos` VALUES ("196", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Huachis", "021007");
#
#
INSERT INTO `geo_distritos` VALUES ("197", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Huantar", "021008");
#
#
INSERT INTO `geo_distritos` VALUES ("198", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Masin", "021009");
#
#
INSERT INTO `geo_distritos` VALUES ("199", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Paucas", "021010");
#
#
INSERT INTO `geo_distritos` VALUES ("200", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Ponto", "021011");
#
#
INSERT INTO `geo_distritos` VALUES ("201", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Rahuapampa", "021012");
#
#
INSERT INTO `geo_distritos` VALUES ("202", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Rapayan", "021013");
#
#
INSERT INTO `geo_distritos` VALUES ("203", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "San Marcos", "021014");
#
#
INSERT INTO `geo_distritos` VALUES ("204", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "San Pedro De Chana", "021015");
#
#
INSERT INTO `geo_distritos` VALUES ("205", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "30", "Uco", "021016");
#
#
INSERT INTO `geo_distritos` VALUES ("206", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "31", "Huarmey", "021101");
#
#
INSERT INTO `geo_distritos` VALUES ("207", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "31", "Cochapeti", "021102");
#
#
INSERT INTO `geo_distritos` VALUES ("208", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "31", "Culebras", "021103");
#
#
INSERT INTO `geo_distritos` VALUES ("209", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "31", "Huayan", "021104");
#
#
INSERT INTO `geo_distritos` VALUES ("210", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "31", "Malvas", "021105");
#
#
INSERT INTO `geo_distritos` VALUES ("211", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Caraz", "021201");
#
#
INSERT INTO `geo_distritos` VALUES ("212", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Huata", "021203");
#
#
INSERT INTO `geo_distritos` VALUES ("213", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Huaylas", "021204");
#
#
INSERT INTO `geo_distritos` VALUES ("214", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Mato", "021205");
#
#
INSERT INTO `geo_distritos` VALUES ("215", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Pamparomas", "021206");
#
#
INSERT INTO `geo_distritos` VALUES ("216", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Santa Cruz", "021208");
#
#
INSERT INTO `geo_distritos` VALUES ("217", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Santo Toribio", "021209");
#
#
INSERT INTO `geo_distritos` VALUES ("218", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "32", "Yuracmarca", "021210");
#
#
INSERT INTO `geo_distritos` VALUES ("219", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Piscobamba", "021301");
#
#
INSERT INTO `geo_distritos` VALUES ("220", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Casca", "021302");
#
#
INSERT INTO `geo_distritos` VALUES ("221", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Eleazar Guzman Barron", "021303");
#
#
INSERT INTO `geo_distritos` VALUES ("222", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Fidel Olivas Escudero", "021304");
#
#
INSERT INTO `geo_distritos` VALUES ("223", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Llama", "021305");
#
#
INSERT INTO `geo_distritos` VALUES ("224", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Llumpa", "021306");
#
#
INSERT INTO `geo_distritos` VALUES ("225", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Lucma", "021307");
#
#
INSERT INTO `geo_distritos` VALUES ("226", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "33", "Musga", "021308");
#
#
INSERT INTO `geo_distritos` VALUES ("227", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Ocros", "021401");
#
#
INSERT INTO `geo_distritos` VALUES ("228", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Acas", "021402");
#
#
INSERT INTO `geo_distritos` VALUES ("229", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Cajamarquilla", "021403");
#
#
INSERT INTO `geo_distritos` VALUES ("230", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Carhuapampa", "021404");
#
#
INSERT INTO `geo_distritos` VALUES ("231", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Cochas", "021405");
#
#
INSERT INTO `geo_distritos` VALUES ("232", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Congas", "021406");
#
#
INSERT INTO `geo_distritos` VALUES ("233", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Llipa", "021407");
#
#
INSERT INTO `geo_distritos` VALUES ("234", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "San Cristobal De Rajan", "021408");
#
#
INSERT INTO `geo_distritos` VALUES ("235", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "San Pedro", "021409");
#
#
INSERT INTO `geo_distritos` VALUES ("236", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "34", "Santiago De Chilcas", "021410");
#
#
INSERT INTO `geo_distritos` VALUES ("237", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Cabana", "021501");
#
#
INSERT INTO `geo_distritos` VALUES ("238", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Bolognesi", "021502");
#
#
INSERT INTO `geo_distritos` VALUES ("239", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Conchucos", "021503");
#
#
INSERT INTO `geo_distritos` VALUES ("240", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Huacaschuque", "021504");
#
#
INSERT INTO `geo_distritos` VALUES ("241", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Huandoval", "021505");
#
#
INSERT INTO `geo_distritos` VALUES ("242", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Lacabamba", "021506");
#
#
INSERT INTO `geo_distritos` VALUES ("243", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Llapo", "021507");
#
#
INSERT INTO `geo_distritos` VALUES ("244", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Pallasca", "021508");
#
#
INSERT INTO `geo_distritos` VALUES ("245", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "35", "Tauca", "021511");
#
#
INSERT INTO `geo_distritos` VALUES ("246", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "36", "Pomabamba", "021601");
#
#
INSERT INTO `geo_distritos` VALUES ("247", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "36", "Huayllan", "021602");
#
#
INSERT INTO `geo_distritos` VALUES ("248", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "36", "Parobamba", "021603");
#
#
INSERT INTO `geo_distritos` VALUES ("249", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "36", "Quinuabamba", "021604");
#
#
INSERT INTO `geo_distritos` VALUES ("250", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Recuay", "021701");
#
#
INSERT INTO `geo_distritos` VALUES ("251", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Catac", "021702");
#
#
INSERT INTO `geo_distritos` VALUES ("252", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Cotaparaco", "021703");
#
#
INSERT INTO `geo_distritos` VALUES ("253", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Huayllapampa", "021704");
#
#
INSERT INTO `geo_distritos` VALUES ("254", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Llacllin", "021705");
#
#
INSERT INTO `geo_distritos` VALUES ("255", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Marca", "021706");
#
#
INSERT INTO `geo_distritos` VALUES ("256", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Pampas Chico", "021707");
#
#
INSERT INTO `geo_distritos` VALUES ("257", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Pararin", "021708");
#
#
INSERT INTO `geo_distritos` VALUES ("258", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Tapacocha", "021709");
#
#
INSERT INTO `geo_distritos` VALUES ("259", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "37", "Ticapampa", "021710");
#
#
INSERT INTO `geo_distritos` VALUES ("260", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Chimbote", "021801");
#
#
INSERT INTO `geo_distritos` VALUES ("261", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Caceres Del Peru", "021802");
#
#
INSERT INTO `geo_distritos` VALUES ("262", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Coishco", "021803");
#
#
INSERT INTO `geo_distritos` VALUES ("263", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Macate", "021804");
#
#
INSERT INTO `geo_distritos` VALUES ("264", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Moro", "021805");
#
#
INSERT INTO `geo_distritos` VALUES ("265", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Nepeña", "021806");
#
#
INSERT INTO `geo_distritos` VALUES ("266", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Samanco", "021807");
#
#
INSERT INTO `geo_distritos` VALUES ("267", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Santa", "021808");
#
#
INSERT INTO `geo_distritos` VALUES ("268", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "38", "Nuevo Chimbote", "021809");
#
#
INSERT INTO `geo_distritos` VALUES ("269", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Sihuas", "021901");
#
#
INSERT INTO `geo_distritos` VALUES ("270", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Acobamba", "021902");
#
#
INSERT INTO `geo_distritos` VALUES ("271", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Alfonso Ugarte", "021903");
#
#
INSERT INTO `geo_distritos` VALUES ("272", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Cashapampa", "021904");
#
#
INSERT INTO `geo_distritos` VALUES ("273", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Chingalpo", "021905");
#
#
INSERT INTO `geo_distritos` VALUES ("274", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Huayllabamba", "021906");
#
#
INSERT INTO `geo_distritos` VALUES ("275", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Quiches", "021907");
#
#
INSERT INTO `geo_distritos` VALUES ("276", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Ragash", "021908");
#
#
INSERT INTO `geo_distritos` VALUES ("277", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "San Juan", "021909");
#
#
INSERT INTO `geo_distritos` VALUES ("278", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "39", "Sicsibamba", "021910");
#
#
INSERT INTO `geo_distritos` VALUES ("279", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Yungay", "022001");
#
#
INSERT INTO `geo_distritos` VALUES ("280", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Cascapara", "022002");
#
#
INSERT INTO `geo_distritos` VALUES ("281", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Mancos", "022003");
#
#
INSERT INTO `geo_distritos` VALUES ("282", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Matacoto", "022004");
#
#
INSERT INTO `geo_distritos` VALUES ("283", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Quillo", "022005");
#
#
INSERT INTO `geo_distritos` VALUES ("284", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Ranrahirca", "022006");
#
#
INSERT INTO `geo_distritos` VALUES ("285", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Shupluy", "022007");
#
#
INSERT INTO `geo_distritos` VALUES ("286", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "40", "Yanama", "022008");
#
#
INSERT INTO `geo_distritos` VALUES ("287", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Abancay", "030101");
#
#
INSERT INTO `geo_distritos` VALUES ("288", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Chacoche", "030102");
#
#
INSERT INTO `geo_distritos` VALUES ("289", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Circa", "030103");
#
#
INSERT INTO `geo_distritos` VALUES ("290", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Curahuasi", "030104");
#
#
INSERT INTO `geo_distritos` VALUES ("291", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Huanipaca", "030105");
#
#
INSERT INTO `geo_distritos` VALUES ("292", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Lambrama", "030106");
#
#
INSERT INTO `geo_distritos` VALUES ("293", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Pichirhua", "030107");
#
#
INSERT INTO `geo_distritos` VALUES ("294", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "San Pedro De Cachora", "030108");
#
#
INSERT INTO `geo_distritos` VALUES ("295", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "41", "Tamburco", "030109");
#
#
INSERT INTO `geo_distritos` VALUES ("296", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Andahuaylas", "030201");
#
#
INSERT INTO `geo_distritos` VALUES ("297", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Andarapa", "030202");
#
#
INSERT INTO `geo_distritos` VALUES ("298", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Chiara", "030203");
#
#
INSERT INTO `geo_distritos` VALUES ("299", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Huancarama", "030204");
#
#
INSERT INTO `geo_distritos` VALUES ("300", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Huancaray", "030205");
#
#
INSERT INTO `geo_distritos` VALUES ("301", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Huayana", "030206");
#
#
INSERT INTO `geo_distritos` VALUES ("302", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Kishuara", "030207");
#
#
INSERT INTO `geo_distritos` VALUES ("303", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Pacobamba", "030208");
#
#
INSERT INTO `geo_distritos` VALUES ("304", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Pacucha", "030209");
#
#
INSERT INTO `geo_distritos` VALUES ("305", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Pampachiri", "030210");
#
#
INSERT INTO `geo_distritos` VALUES ("306", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Pomacocha", "030211");
#
#
INSERT INTO `geo_distritos` VALUES ("307", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "San Antonio De Cachi", "030212");
#
#
INSERT INTO `geo_distritos` VALUES ("308", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "San Miguel De Chaccrampa", "030214");
#
#
INSERT INTO `geo_distritos` VALUES ("309", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Santa Maria De Chicmo", "030215");
#
#
INSERT INTO `geo_distritos` VALUES ("310", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Talavera", "030216");
#
#
INSERT INTO `geo_distritos` VALUES ("311", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Tumay Huaraca", "030217");
#
#
INSERT INTO `geo_distritos` VALUES ("312", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Turpo", "030218");
#
#
INSERT INTO `geo_distritos` VALUES ("313", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "42", "Kaquiabamba", "030219");
#
#
INSERT INTO `geo_distritos` VALUES ("314", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Antabamba", "030301");
#
#
INSERT INTO `geo_distritos` VALUES ("315", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "El Oro", "030302");
#
#
INSERT INTO `geo_distritos` VALUES ("316", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Huaquirca", "030303");
#
#
INSERT INTO `geo_distritos` VALUES ("317", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Juan Espinoza Medrano", "030304");
#
#
INSERT INTO `geo_distritos` VALUES ("318", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Oropesa", "030305");
#
#
INSERT INTO `geo_distritos` VALUES ("319", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Pachaconas", "030306");
#
#
INSERT INTO `geo_distritos` VALUES ("320", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "43", "Sabaino", "030307");
#
#
INSERT INTO `geo_distritos` VALUES ("321", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Chalhuanca", "030401");
#
#
INSERT INTO `geo_distritos` VALUES ("322", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Capaya", "030402");
#
#
INSERT INTO `geo_distritos` VALUES ("323", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Caraybamba", "030403");
#
#
INSERT INTO `geo_distritos` VALUES ("324", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Chapimarca", "030404");
#
#
INSERT INTO `geo_distritos` VALUES ("325", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Cotaruse", "030406");
#
#
INSERT INTO `geo_distritos` VALUES ("326", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Huayllo", "030407");
#
#
INSERT INTO `geo_distritos` VALUES ("327", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Justo Apu Sahuaraura", "030408");
#
#
INSERT INTO `geo_distritos` VALUES ("328", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Lucre", "030409");
#
#
INSERT INTO `geo_distritos` VALUES ("329", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Pocohuanca", "030410");
#
#
INSERT INTO `geo_distritos` VALUES ("330", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "San Juan De Chacña", "030411");
#
#
INSERT INTO `geo_distritos` VALUES ("331", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Sañayca", "030412");
#
#
INSERT INTO `geo_distritos` VALUES ("332", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Soraya", "030413");
#
#
INSERT INTO `geo_distritos` VALUES ("333", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Tapairihua", "030414");
#
#
INSERT INTO `geo_distritos` VALUES ("334", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Tintay", "030415");
#
#
INSERT INTO `geo_distritos` VALUES ("335", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Toraya", "030416");
#
#
INSERT INTO `geo_distritos` VALUES ("336", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "44", "Yanaca", "030417");
#
#
INSERT INTO `geo_distritos` VALUES ("337", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Tambobamba", "030501");
#
#
INSERT INTO `geo_distritos` VALUES ("338", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Cotabambas", "030502");
#
#
INSERT INTO `geo_distritos` VALUES ("339", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Coyllurqui", "030503");
#
#
INSERT INTO `geo_distritos` VALUES ("340", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Haquira", "030504");
#
#
INSERT INTO `geo_distritos` VALUES ("341", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Mara", "030505");
#
#
INSERT INTO `geo_distritos` VALUES ("342", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "45", "Challhuahuacho", "030506");
#
#
INSERT INTO `geo_distritos` VALUES ("343", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Chincheros", "030601");
#
#
INSERT INTO `geo_distritos` VALUES ("344", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Anco_Huallo", "030602");
#
#
INSERT INTO `geo_distritos` VALUES ("345", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Cocharcas", "030603");
#
#
INSERT INTO `geo_distritos` VALUES ("346", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Huaccana", "030604");
#
#
INSERT INTO `geo_distritos` VALUES ("347", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Ocobamba", "030605");
#
#
INSERT INTO `geo_distritos` VALUES ("348", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Ongoy", "030606");
#
#
INSERT INTO `geo_distritos` VALUES ("349", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Uranmarca", "030607");
#
#
INSERT INTO `geo_distritos` VALUES ("350", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "46", "Ranracancha", "030608");
#
#
INSERT INTO `geo_distritos` VALUES ("351", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Chuquibambilla", "030701");
#
#
INSERT INTO `geo_distritos` VALUES ("352", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Curpahuasi", "030702");
#
#
INSERT INTO `geo_distritos` VALUES ("353", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Gamarra", "030703");
#
#
INSERT INTO `geo_distritos` VALUES ("354", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Huayllati", "030704");
#
#
INSERT INTO `geo_distritos` VALUES ("355", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Mamara", "030705");
#
#
INSERT INTO `geo_distritos` VALUES ("356", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Micaela Bastidas", "030706");
#
#
INSERT INTO `geo_distritos` VALUES ("357", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Pataypampa", "030707");
#
#
INSERT INTO `geo_distritos` VALUES ("358", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Progreso", "030708");
#
#
INSERT INTO `geo_distritos` VALUES ("359", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "San Antonio", "030709");
#
#
INSERT INTO `geo_distritos` VALUES ("360", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Turpay", "030711");
#
#
INSERT INTO `geo_distritos` VALUES ("361", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Vilcabamba", "030712");
#
#
INSERT INTO `geo_distritos` VALUES ("362", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Virundo", "030713");
#
#
INSERT INTO `geo_distritos` VALUES ("363", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "47", "Curasco", "030714");
#
#
INSERT INTO `geo_distritos` VALUES ("364", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Arequipa", "040101");
#
#
INSERT INTO `geo_distritos` VALUES ("365", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Alto Selva Alegre", "040102");
#
#
INSERT INTO `geo_distritos` VALUES ("366", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Cayma", "040103");
#
#
INSERT INTO `geo_distritos` VALUES ("367", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Cerro Colorado", "040104");
#
#
INSERT INTO `geo_distritos` VALUES ("368", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Characato", "040105");
#
#
INSERT INTO `geo_distritos` VALUES ("369", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Chiguata", "040106");
#
#
INSERT INTO `geo_distritos` VALUES ("370", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Jacobo Hunter", "040107");
#
#
INSERT INTO `geo_distritos` VALUES ("371", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "La Joya", "040108");
#
#
INSERT INTO `geo_distritos` VALUES ("372", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Mariano Melgar", "040109");
#
#
INSERT INTO `geo_distritos` VALUES ("373", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Mollebaya", "040111");
#
#
INSERT INTO `geo_distritos` VALUES ("374", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Paucarpata", "040112");
#
#
INSERT INTO `geo_distritos` VALUES ("375", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Pocsi", "040113");
#
#
INSERT INTO `geo_distritos` VALUES ("376", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Polobaya", "040114");
#
#
INSERT INTO `geo_distritos` VALUES ("377", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Quequeña", "040115");
#
#
INSERT INTO `geo_distritos` VALUES ("378", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Sabandia", "040116");
#
#
INSERT INTO `geo_distritos` VALUES ("379", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Sachaca", "040117");
#
#
INSERT INTO `geo_distritos` VALUES ("380", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "San Juan De Siguas", "040118");
#
#
INSERT INTO `geo_distritos` VALUES ("381", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "San Juan De Tarucani", "040119");
#
#
INSERT INTO `geo_distritos` VALUES ("382", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Santa Isabel De Siguas", "040120");
#
#
INSERT INTO `geo_distritos` VALUES ("383", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Santa Rita De Siguas", "040121");
#
#
INSERT INTO `geo_distritos` VALUES ("384", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Socabaya", "040122");
#
#
INSERT INTO `geo_distritos` VALUES ("385", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Tiabaya", "040123");
#
#
INSERT INTO `geo_distritos` VALUES ("386", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Uchumayo", "040124");
#
#
INSERT INTO `geo_distritos` VALUES ("387", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Vitor", "040125");
#
#
INSERT INTO `geo_distritos` VALUES ("388", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Yanahuara", "040126");
#
#
INSERT INTO `geo_distritos` VALUES ("389", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Yarabamba", "040127");
#
#
INSERT INTO `geo_distritos` VALUES ("390", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Yura", "040128");
#
#
INSERT INTO `geo_distritos` VALUES ("391", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "48", "Jose Luis Bustamante Y Rivero", "040129");
#
#
INSERT INTO `geo_distritos` VALUES ("392", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Camana", "040201");
#
#
INSERT INTO `geo_distritos` VALUES ("393", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Jose Maria Quimper", "040202");
#
#
INSERT INTO `geo_distritos` VALUES ("394", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Mariano Nicolas Valcarcel", "040203");
#
#
INSERT INTO `geo_distritos` VALUES ("395", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Mariscal Caceres", "040204");
#
#
INSERT INTO `geo_distritos` VALUES ("396", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Nicolas De Pierola", "040205");
#
#
INSERT INTO `geo_distritos` VALUES ("397", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Ocoña", "040206");
#
#
INSERT INTO `geo_distritos` VALUES ("398", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Quilca", "040207");
#
#
INSERT INTO `geo_distritos` VALUES ("399", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "49", "Samuel Pastor", "040208");
#
#
INSERT INTO `geo_distritos` VALUES ("400", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Caraveli", "040301");
#
#
INSERT INTO `geo_distritos` VALUES ("401", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Acari", "040302");
#
#
INSERT INTO `geo_distritos` VALUES ("402", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Atico", "040303");
#
#
INSERT INTO `geo_distritos` VALUES ("403", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Atiquipa", "040304");
#
#
INSERT INTO `geo_distritos` VALUES ("404", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Bella Union", "040305");
#
#
INSERT INTO `geo_distritos` VALUES ("405", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Cahuacho", "040306");
#
#
INSERT INTO `geo_distritos` VALUES ("406", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Chala", "040307");
#
#
INSERT INTO `geo_distritos` VALUES ("407", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Chaparra", "040308");
#
#
INSERT INTO `geo_distritos` VALUES ("408", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Huanuhuanu", "040309");
#
#
INSERT INTO `geo_distritos` VALUES ("409", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Jaqui", "040310");
#
#
INSERT INTO `geo_distritos` VALUES ("410", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Lomas", "040311");
#
#
INSERT INTO `geo_distritos` VALUES ("411", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Quicacha", "040312");
#
#
INSERT INTO `geo_distritos` VALUES ("412", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "50", "Yauca", "040313");
#
#
INSERT INTO `geo_distritos` VALUES ("413", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Aplao", "040401");
#
#
INSERT INTO `geo_distritos` VALUES ("414", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Andagua", "040402");
#
#
INSERT INTO `geo_distritos` VALUES ("415", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Ayo", "040403");
#
#
INSERT INTO `geo_distritos` VALUES ("416", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Chachas", "040404");
#
#
INSERT INTO `geo_distritos` VALUES ("417", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Chilcaymarca", "040405");
#
#
INSERT INTO `geo_distritos` VALUES ("418", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Choco", "040406");
#
#
INSERT INTO `geo_distritos` VALUES ("419", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Huancarqui", "040407");
#
#
INSERT INTO `geo_distritos` VALUES ("420", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Machaguay", "040408");
#
#
INSERT INTO `geo_distritos` VALUES ("421", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Orcopampa", "040409");
#
#
INSERT INTO `geo_distritos` VALUES ("422", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Pampacolca", "040410");
#
#
INSERT INTO `geo_distritos` VALUES ("423", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Tipan", "040411");
#
#
INSERT INTO `geo_distritos` VALUES ("424", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Uñon", "040412");
#
#
INSERT INTO `geo_distritos` VALUES ("425", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Uraca", "040413");
#
#
INSERT INTO `geo_distritos` VALUES ("426", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "51", "Viraco", "040414");
#
#
INSERT INTO `geo_distritos` VALUES ("427", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Chivay", "040501");
#
#
INSERT INTO `geo_distritos` VALUES ("428", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Achoma", "040502");
#
#
INSERT INTO `geo_distritos` VALUES ("429", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Cabanaconde", "040503");
#
#
INSERT INTO `geo_distritos` VALUES ("430", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Callalli", "040504");
#
#
INSERT INTO `geo_distritos` VALUES ("431", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Caylloma", "040505");
#
#
INSERT INTO `geo_distritos` VALUES ("432", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Coporaque", "040506");
#
#
INSERT INTO `geo_distritos` VALUES ("433", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Huanca", "040508");
#
#
INSERT INTO `geo_distritos` VALUES ("434", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Ichupampa", "040509");
#
#
INSERT INTO `geo_distritos` VALUES ("435", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Lari", "040510");
#
#
INSERT INTO `geo_distritos` VALUES ("436", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Lluta", "040511");
#
#
INSERT INTO `geo_distritos` VALUES ("437", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Maca", "040512");
#
#
INSERT INTO `geo_distritos` VALUES ("438", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Madrigal", "040513");
#
#
INSERT INTO `geo_distritos` VALUES ("439", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "San Antonio De Chuca", "040514");
#
#
INSERT INTO `geo_distritos` VALUES ("440", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Sibayo", "040515");
#
#
INSERT INTO `geo_distritos` VALUES ("441", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Tapay", "040516");
#
#
INSERT INTO `geo_distritos` VALUES ("442", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Tisco", "040517");
#
#
INSERT INTO `geo_distritos` VALUES ("443", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Tuti", "040518");
#
#
INSERT INTO `geo_distritos` VALUES ("444", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Yanque", "040519");
#
#
INSERT INTO `geo_distritos` VALUES ("445", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "52", "Majes", "040520");
#
#
INSERT INTO `geo_distritos` VALUES ("446", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Andaray", "040602");
#
#
INSERT INTO `geo_distritos` VALUES ("447", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Cayarani", "040603");
#
#
INSERT INTO `geo_distritos` VALUES ("448", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Chichas", "040604");
#
#
INSERT INTO `geo_distritos` VALUES ("449", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Iray", "040605");
#
#
INSERT INTO `geo_distritos` VALUES ("450", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Rio Grande", "040606");
#
#
INSERT INTO `geo_distritos` VALUES ("451", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Salamanca", "040607");
#
#
INSERT INTO `geo_distritos` VALUES ("452", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "53", "Yanaquihua", "040608");
#
#
INSERT INTO `geo_distritos` VALUES ("453", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Mollendo", "040701");
#
#
INSERT INTO `geo_distritos` VALUES ("454", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Cocachacra", "040702");
#
#
INSERT INTO `geo_distritos` VALUES ("455", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Dean Valdivia", "040703");
#
#
INSERT INTO `geo_distritos` VALUES ("456", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Islay", "040704");
#
#
INSERT INTO `geo_distritos` VALUES ("457", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Mejia", "040705");
#
#
INSERT INTO `geo_distritos` VALUES ("458", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "54", "Punta De Bombon", "040706");
#
#
INSERT INTO `geo_distritos` VALUES ("459", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Cotahuasi", "040801");
#
#
INSERT INTO `geo_distritos` VALUES ("460", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Alca", "040802");
#
#
INSERT INTO `geo_distritos` VALUES ("461", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Charcana", "040803");
#
#
INSERT INTO `geo_distritos` VALUES ("462", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Huaynacotas", "040804");
#
#
INSERT INTO `geo_distritos` VALUES ("463", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Pampamarca", "040805");
#
#
INSERT INTO `geo_distritos` VALUES ("464", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Puyca", "040806");
#
#
INSERT INTO `geo_distritos` VALUES ("465", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Quechualla", "040807");
#
#
INSERT INTO `geo_distritos` VALUES ("466", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Sayla", "040808");
#
#
INSERT INTO `geo_distritos` VALUES ("467", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Tauria", "040809");
#
#
INSERT INTO `geo_distritos` VALUES ("468", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Tomepampa", "040810");
#
#
INSERT INTO `geo_distritos` VALUES ("469", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "55", "Toro", "040811");
#
#
INSERT INTO `geo_distritos` VALUES ("470", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Ayacucho", "050101");
#
#
INSERT INTO `geo_distritos` VALUES ("471", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Acocro", "050102");
#
#
INSERT INTO `geo_distritos` VALUES ("472", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Acos Vinchos", "050103");
#
#
INSERT INTO `geo_distritos` VALUES ("473", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Carmen Alto", "050104");
#
#
INSERT INTO `geo_distritos` VALUES ("474", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Pacaycasa", "050107");
#
#
INSERT INTO `geo_distritos` VALUES ("475", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Quinua", "050108");
#
#
INSERT INTO `geo_distritos` VALUES ("476", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "San Jose De Ticllas", "050109");
#
#
INSERT INTO `geo_distritos` VALUES ("477", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "San Juan Bautista", "050110");
#
#
INSERT INTO `geo_distritos` VALUES ("478", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Santiago De Pischa", "050111");
#
#
INSERT INTO `geo_distritos` VALUES ("479", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Socos", "050112");
#
#
INSERT INTO `geo_distritos` VALUES ("480", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Tambillo", "050113");
#
#
INSERT INTO `geo_distritos` VALUES ("481", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Vinchos", "050114");
#
#
INSERT INTO `geo_distritos` VALUES ("482", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "56", "Jesus Nazareno", "050115");
#
#
INSERT INTO `geo_distritos` VALUES ("483", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Cangallo", "050201");
#
#
INSERT INTO `geo_distritos` VALUES ("484", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Chuschi", "050202");
#
#
INSERT INTO `geo_distritos` VALUES ("485", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Los Morochucos", "050203");
#
#
INSERT INTO `geo_distritos` VALUES ("486", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Maria Parado De Bellido", "050204");
#
#
INSERT INTO `geo_distritos` VALUES ("487", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Paras", "050205");
#
#
INSERT INTO `geo_distritos` VALUES ("488", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "57", "Totos", "050206");
#
#
INSERT INTO `geo_distritos` VALUES ("489", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "58", "Sancos", "050301");
#
#
INSERT INTO `geo_distritos` VALUES ("490", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "58", "Carapo", "050302");
#
#
INSERT INTO `geo_distritos` VALUES ("491", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "58", "Sacsamarca", "050303");
#
#
INSERT INTO `geo_distritos` VALUES ("492", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "58", "Santiago De Lucanamarca", "050304");
#
#
INSERT INTO `geo_distritos` VALUES ("493", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Huanta", "050401");
#
#
INSERT INTO `geo_distritos` VALUES ("494", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Ayahuanco", "050402");
#
#
INSERT INTO `geo_distritos` VALUES ("495", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Huamanguilla", "050403");
#
#
INSERT INTO `geo_distritos` VALUES ("496", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Iguain", "050404");
#
#
INSERT INTO `geo_distritos` VALUES ("497", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Luricocha", "050405");
#
#
INSERT INTO `geo_distritos` VALUES ("498", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Santillana", "050406");
#
#
INSERT INTO `geo_distritos` VALUES ("499", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Sivia", "050407");
#
#
INSERT INTO `geo_distritos` VALUES ("500", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "59", "Llochegua", "050408");
#
#
INSERT INTO `geo_distritos` VALUES ("501", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Anco", "050502");
#
#
INSERT INTO `geo_distritos` VALUES ("502", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Ayna", "050503");
#
#
INSERT INTO `geo_distritos` VALUES ("503", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Chilcas", "050504");
#
#
INSERT INTO `geo_distritos` VALUES ("504", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Chungui", "050505");
#
#
INSERT INTO `geo_distritos` VALUES ("505", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Luis Carranza", "050506");
#
#
INSERT INTO `geo_distritos` VALUES ("506", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "60", "Tambo", "050508");
#
#
INSERT INTO `geo_distritos` VALUES ("507", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Puquio", "050601");
#
#
INSERT INTO `geo_distritos` VALUES ("508", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Aucara", "050602");
#
#
INSERT INTO `geo_distritos` VALUES ("509", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Carmen Salcedo", "050604");
#
#
INSERT INTO `geo_distritos` VALUES ("510", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Chaviña", "050605");
#
#
INSERT INTO `geo_distritos` VALUES ("511", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Chipao", "050606");
#
#
INSERT INTO `geo_distritos` VALUES ("512", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Huac-Huas", "050607");
#
#
INSERT INTO `geo_distritos` VALUES ("513", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Laramate", "050608");
#
#
INSERT INTO `geo_distritos` VALUES ("514", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Leoncio Prado", "050609");
#
#
INSERT INTO `geo_distritos` VALUES ("515", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Llauta", "050610");
#
#
INSERT INTO `geo_distritos` VALUES ("516", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Lucanas", "050611");
#
#
INSERT INTO `geo_distritos` VALUES ("517", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Ocaña", "050612");
#
#
INSERT INTO `geo_distritos` VALUES ("518", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Otoca", "050613");
#
#
INSERT INTO `geo_distritos` VALUES ("519", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Saisa", "050614");
#
#
INSERT INTO `geo_distritos` VALUES ("520", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "San Pedro De Palco", "050618");
#
#
INSERT INTO `geo_distritos` VALUES ("521", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Santa Ana De Huaycahuacho", "050620");
#
#
INSERT INTO `geo_distritos` VALUES ("522", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "61", "Santa Lucia", "050621");
#
#
INSERT INTO `geo_distritos` VALUES ("523", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Coracora", "050701");
#
#
INSERT INTO `geo_distritos` VALUES ("524", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Chumpi", "050702");
#
#
INSERT INTO `geo_distritos` VALUES ("525", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Coronel Castañeda", "050703");
#
#
INSERT INTO `geo_distritos` VALUES ("526", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Pacapausa", "050704");
#
#
INSERT INTO `geo_distritos` VALUES ("527", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Pullo", "050705");
#
#
INSERT INTO `geo_distritos` VALUES ("528", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Puyusca", "050706");
#
#
INSERT INTO `geo_distritos` VALUES ("529", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "San Francisco De Ravacayco", "050707");
#
#
INSERT INTO `geo_distritos` VALUES ("530", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "62", "Upahuacho", "050708");
#
#
INSERT INTO `geo_distritos` VALUES ("531", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Pausa", "050801");
#
#
INSERT INTO `geo_distritos` VALUES ("532", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Colta", "050802");
#
#
INSERT INTO `geo_distritos` VALUES ("533", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Corculla", "050803");
#
#
INSERT INTO `geo_distritos` VALUES ("534", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Lampa", "050804");
#
#
INSERT INTO `geo_distritos` VALUES ("535", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Marcabamba", "050805");
#
#
INSERT INTO `geo_distritos` VALUES ("536", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Oyolo", "050806");
#
#
INSERT INTO `geo_distritos` VALUES ("537", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Pararca", "050807");
#
#
INSERT INTO `geo_distritos` VALUES ("538", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "San Javier De Alpabamba", "050808");
#
#
INSERT INTO `geo_distritos` VALUES ("539", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "San Jose De Ushua", "050809");
#
#
INSERT INTO `geo_distritos` VALUES ("540", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "63", "Sara Sara", "050810");
#
#
INSERT INTO `geo_distritos` VALUES ("541", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Querobamba", "050901");
#
#
INSERT INTO `geo_distritos` VALUES ("542", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Belen", "050902");
#
#
INSERT INTO `geo_distritos` VALUES ("543", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Chalcos", "050903");
#
#
INSERT INTO `geo_distritos` VALUES ("544", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Chilcayoc", "050904");
#
#
INSERT INTO `geo_distritos` VALUES ("545", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Huacaña", "050905");
#
#
INSERT INTO `geo_distritos` VALUES ("546", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Morcolla", "050906");
#
#
INSERT INTO `geo_distritos` VALUES ("547", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Paico", "050907");
#
#
INSERT INTO `geo_distritos` VALUES ("548", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "San Pedro De Larcay", "050908");
#
#
INSERT INTO `geo_distritos` VALUES ("549", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "San Salvador De Quije", "050909");
#
#
INSERT INTO `geo_distritos` VALUES ("550", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Santiago De Paucaray", "050910");
#
#
INSERT INTO `geo_distritos` VALUES ("551", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "64", "Soras", "050911");
#
#
INSERT INTO `geo_distritos` VALUES ("552", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Huancapi", "051001");
#
#
INSERT INTO `geo_distritos` VALUES ("553", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Alcamenca", "051002");
#
#
INSERT INTO `geo_distritos` VALUES ("554", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Apongo", "051003");
#
#
INSERT INTO `geo_distritos` VALUES ("555", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Asquipata", "051004");
#
#
INSERT INTO `geo_distritos` VALUES ("556", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Canaria", "051005");
#
#
INSERT INTO `geo_distritos` VALUES ("557", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Cayara", "051006");
#
#
INSERT INTO `geo_distritos` VALUES ("558", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Colca", "051007");
#
#
INSERT INTO `geo_distritos` VALUES ("559", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Huamanquiquia", "051008");
#
#
INSERT INTO `geo_distritos` VALUES ("560", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Huancaraylla", "051009");
#
#
INSERT INTO `geo_distritos` VALUES ("561", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Huaya", "051010");
#
#
INSERT INTO `geo_distritos` VALUES ("562", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Sarhua", "051011");
#
#
INSERT INTO `geo_distritos` VALUES ("563", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "65", "Vilcanchos", "051012");
#
#
INSERT INTO `geo_distritos` VALUES ("564", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Vilcas Huaman", "051101");
#
#
INSERT INTO `geo_distritos` VALUES ("565", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Accomarca", "051102");
#
#
INSERT INTO `geo_distritos` VALUES ("566", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Carhuanca", "051103");
#
#
INSERT INTO `geo_distritos` VALUES ("567", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Concepcion", "051104");
#
#
INSERT INTO `geo_distritos` VALUES ("568", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Huambalpa", "051105");
#
#
INSERT INTO `geo_distritos` VALUES ("569", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Saurama", "051107");
#
#
INSERT INTO `geo_distritos` VALUES ("570", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "66", "Vischongo", "051108");
#
#
INSERT INTO `geo_distritos` VALUES ("571", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Cajamarca", "060101");
#
#
INSERT INTO `geo_distritos` VALUES ("572", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Chetilla", "060103");
#
#
INSERT INTO `geo_distritos` VALUES ("573", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Cospan", "060104");
#
#
INSERT INTO `geo_distritos` VALUES ("574", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Encañada", "060105");
#
#
INSERT INTO `geo_distritos` VALUES ("575", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Jesus", "060106");
#
#
INSERT INTO `geo_distritos` VALUES ("576", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Llacanora", "060107");
#
#
INSERT INTO `geo_distritos` VALUES ("577", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Los Baños Del Inca", "060108");
#
#
INSERT INTO `geo_distritos` VALUES ("578", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Matara", "060110");
#
#
INSERT INTO `geo_distritos` VALUES ("579", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "67", "Namora", "060111");
#
#
INSERT INTO `geo_distritos` VALUES ("580", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "68", "Cajabamba", "060201");
#
#
INSERT INTO `geo_distritos` VALUES ("581", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "68", "Cachachi", "060202");
#
#
INSERT INTO `geo_distritos` VALUES ("582", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "68", "Condebamba", "060203");
#
#
INSERT INTO `geo_distritos` VALUES ("583", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "68", "Sitacocha", "060204");
#
#
INSERT INTO `geo_distritos` VALUES ("584", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Celendin", "060301");
#
#
INSERT INTO `geo_distritos` VALUES ("585", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Chumuch", "060302");
#
#
INSERT INTO `geo_distritos` VALUES ("586", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Cortegana", "060303");
#
#
INSERT INTO `geo_distritos` VALUES ("587", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Huasmin", "060304");
#
#
INSERT INTO `geo_distritos` VALUES ("588", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Jorge Chavez", "060305");
#
#
INSERT INTO `geo_distritos` VALUES ("589", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Jose Galvez", "060306");
#
#
INSERT INTO `geo_distritos` VALUES ("590", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Miguel Iglesias", "060307");
#
#
INSERT INTO `geo_distritos` VALUES ("591", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Oxamarca", "060308");
#
#
INSERT INTO `geo_distritos` VALUES ("592", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Sorochuco", "060309");
#
#
INSERT INTO `geo_distritos` VALUES ("593", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Sucre", "060310");
#
#
INSERT INTO `geo_distritos` VALUES ("594", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "Utco", "060311");
#
#
INSERT INTO `geo_distritos` VALUES ("595", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "69", "La Libertad De Pallan", "060312");
#
#
INSERT INTO `geo_distritos` VALUES ("596", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Chota", "060401");
#
#
INSERT INTO `geo_distritos` VALUES ("597", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Anguia", "060402");
#
#
INSERT INTO `geo_distritos` VALUES ("598", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Chadin", "060403");
#
#
INSERT INTO `geo_distritos` VALUES ("599", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Chiguirip", "060404");
#
#
INSERT INTO `geo_distritos` VALUES ("600", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Chimban", "060405");
#
#
INSERT INTO `geo_distritos` VALUES ("601", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Choropampa", "060406");
#
#
INSERT INTO `geo_distritos` VALUES ("602", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Conchan", "060408");
#
#
INSERT INTO `geo_distritos` VALUES ("603", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Huambos", "060409");
#
#
INSERT INTO `geo_distritos` VALUES ("604", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Lajas", "060410");
#
#
INSERT INTO `geo_distritos` VALUES ("605", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Miracosta", "060412");
#
#
INSERT INTO `geo_distritos` VALUES ("606", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Paccha", "060413");
#
#
INSERT INTO `geo_distritos` VALUES ("607", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Pion", "060414");
#
#
INSERT INTO `geo_distritos` VALUES ("608", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Querocoto", "060415");
#
#
INSERT INTO `geo_distritos` VALUES ("609", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "San Juan De Licupis", "060416");
#
#
INSERT INTO `geo_distritos` VALUES ("610", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Tacabamba", "060417");
#
#
INSERT INTO `geo_distritos` VALUES ("611", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Tocmoche", "060418");
#
#
INSERT INTO `geo_distritos` VALUES ("612", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "70", "Chalamarca", "060419");
#
#
INSERT INTO `geo_distritos` VALUES ("613", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Contumaza", "060501");
#
#
INSERT INTO `geo_distritos` VALUES ("614", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Chilete", "060502");
#
#
INSERT INTO `geo_distritos` VALUES ("615", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Cupisnique", "060503");
#
#
INSERT INTO `geo_distritos` VALUES ("616", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Guzmango", "060504");
#
#
INSERT INTO `geo_distritos` VALUES ("617", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "San Benito", "060505");
#
#
INSERT INTO `geo_distritos` VALUES ("618", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Santa Cruz De Toled", "060506");
#
#
INSERT INTO `geo_distritos` VALUES ("619", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Tantarica", "060507");
#
#
INSERT INTO `geo_distritos` VALUES ("620", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "71", "Yonan", "060508");
#
#
INSERT INTO `geo_distritos` VALUES ("621", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Cutervo", "060601");
#
#
INSERT INTO `geo_distritos` VALUES ("622", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Callayuc", "060602");
#
#
INSERT INTO `geo_distritos` VALUES ("623", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Choros", "060603");
#
#
INSERT INTO `geo_distritos` VALUES ("624", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Cujillo", "060604");
#
#
INSERT INTO `geo_distritos` VALUES ("625", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "La Ramada", "060605");
#
#
INSERT INTO `geo_distritos` VALUES ("626", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Pimpingos", "060606");
#
#
INSERT INTO `geo_distritos` VALUES ("627", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Querocotillo", "060607");
#
#
INSERT INTO `geo_distritos` VALUES ("628", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "San Andres De Cutervo", "060608");
#
#
INSERT INTO `geo_distritos` VALUES ("629", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "San Juan De Cutervo", "060609");
#
#
INSERT INTO `geo_distritos` VALUES ("630", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "San Luis De Lucma", "060610");
#
#
INSERT INTO `geo_distritos` VALUES ("631", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Santo Domingo De La Capilla", "060612");
#
#
INSERT INTO `geo_distritos` VALUES ("632", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Socota", "060614");
#
#
INSERT INTO `geo_distritos` VALUES ("633", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "72", "Toribio Casanova", "060615");
#
#
INSERT INTO `geo_distritos` VALUES ("634", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "73", "Bambamarca", "060701");
#
#
INSERT INTO `geo_distritos` VALUES ("635", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "73", "Chugur", "060702");
#
#
INSERT INTO `geo_distritos` VALUES ("636", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "73", "Hualgayoc", "060703");
#
#
INSERT INTO `geo_distritos` VALUES ("637", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Jaen", "060801");
#
#
INSERT INTO `geo_distritos` VALUES ("638", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "Bellavista", "060802");
#
#
INSERT INTO `geo_distritos` VALUES ("639", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Chontali", "060803");
#
#
INSERT INTO `geo_distritos` VALUES ("640", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Colasay", "060804");
#
#
INSERT INTO `geo_distritos` VALUES ("641", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Huabal", "060805");
#
#
INSERT INTO `geo_distritos` VALUES ("642", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Las Pirias", "060806");
#
#
INSERT INTO `geo_distritos` VALUES ("643", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Pomahuaca", "060807");
#
#
INSERT INTO `geo_distritos` VALUES ("644", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Pucara", "060808");
#
#
INSERT INTO `geo_distritos` VALUES ("645", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "Sallique", "060809");
#
#
INSERT INTO `geo_distritos` VALUES ("646", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "San Felipe", "060810");
#
#
INSERT INTO `geo_distritos` VALUES ("647", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "74", "San Jose Del Alto", "060811");
#
#
INSERT INTO `geo_distritos` VALUES ("648", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "San Ignacio", "060901");
#
#
INSERT INTO `geo_distritos` VALUES ("649", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "Chirinos", "060902");
#
#
INSERT INTO `geo_distritos` VALUES ("650", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "Huarango", "060903");
#
#
INSERT INTO `geo_distritos` VALUES ("651", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "La Coipa", "060904");
#
#
INSERT INTO `geo_distritos` VALUES ("652", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "Namballe", "060905");
#
#
INSERT INTO `geo_distritos` VALUES ("653", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "San Jose De Lourdes", "060906");
#
#
INSERT INTO `geo_distritos` VALUES ("654", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "75", "Tabaconas", "060907");
#
#
INSERT INTO `geo_distritos` VALUES ("655", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Pedro Galvez", "061001");
#
#
INSERT INTO `geo_distritos` VALUES ("656", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Chancay", "061002");
#
#
INSERT INTO `geo_distritos` VALUES ("657", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Eduardo Villanueva", "061003");
#
#
INSERT INTO `geo_distritos` VALUES ("658", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Gregorio Pita", "061004");
#
#
INSERT INTO `geo_distritos` VALUES ("659", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Ichocan", "061005");
#
#
INSERT INTO `geo_distritos` VALUES ("660", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Jose Manuel Quiroz", "061006");
#
#
INSERT INTO `geo_distritos` VALUES ("661", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "76", "Jose Sabogal", "061007");
#
#
INSERT INTO `geo_distritos` VALUES ("662", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Bolivar", "061102");
#
#
INSERT INTO `geo_distritos` VALUES ("663", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Calquis", "061103");
#
#
INSERT INTO `geo_distritos` VALUES ("664", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Catilluc", "061104");
#
#
INSERT INTO `geo_distritos` VALUES ("665", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "El Prado", "061105");
#
#
INSERT INTO `geo_distritos` VALUES ("666", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "La Florida", "061106");
#
#
INSERT INTO `geo_distritos` VALUES ("667", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Llapa", "061107");
#
#
INSERT INTO `geo_distritos` VALUES ("668", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Nanchoc", "061108");
#
#
INSERT INTO `geo_distritos` VALUES ("669", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Niepos", "061109");
#
#
INSERT INTO `geo_distritos` VALUES ("670", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "San Gregorio", "061110");
#
#
INSERT INTO `geo_distritos` VALUES ("671", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "San Silvestre De Cochan", "061111");
#
#
INSERT INTO `geo_distritos` VALUES ("672", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Tongod", "061112");
#
#
INSERT INTO `geo_distritos` VALUES ("673", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "77", "Union Agua Blanca", "061113");
#
#
INSERT INTO `geo_distritos` VALUES ("674", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "78", "San Pablo", "061201");
#
#
INSERT INTO `geo_distritos` VALUES ("675", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "78", "San Bernardino", "061202");
#
#
INSERT INTO `geo_distritos` VALUES ("676", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "78", "Tumbaden", "061204");
#
#
INSERT INTO `geo_distritos` VALUES ("677", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Andabamba", "061302");
#
#
INSERT INTO `geo_distritos` VALUES ("678", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Catache", "061303");
#
#
INSERT INTO `geo_distritos` VALUES ("679", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Chancaybaños", "061304");
#
#
INSERT INTO `geo_distritos` VALUES ("680", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "La Esperanza", "061305");
#
#
INSERT INTO `geo_distritos` VALUES ("681", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Ninabamba", "061306");
#
#
INSERT INTO `geo_distritos` VALUES ("682", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Pulan", "061307");
#
#
INSERT INTO `geo_distritos` VALUES ("683", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Saucepampa", "061308");
#
#
INSERT INTO `geo_distritos` VALUES ("684", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Sexi", "061309");
#
#
INSERT INTO `geo_distritos` VALUES ("685", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Uticyacu", "061310");
#
#
INSERT INTO `geo_distritos` VALUES ("686", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "79", "Yauyucan", "061311");
#
#
INSERT INTO `geo_distritos` VALUES ("687", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "Callao", "070101");
#
#
INSERT INTO `geo_distritos` VALUES ("688", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "Carmen De La Legua Reynoso", "070103");
#
#
INSERT INTO `geo_distritos` VALUES ("689", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "La Perla", "070104");
#
#
INSERT INTO `geo_distritos` VALUES ("690", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "La Punta", "070105");
#
#
INSERT INTO `geo_distritos` VALUES ("691", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "198", "Ventanilla", "070106");
#
#
INSERT INTO `geo_distritos` VALUES ("692", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Cusco", "080101");
#
#
INSERT INTO `geo_distritos` VALUES ("693", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Ccorca", "080102");
#
#
INSERT INTO `geo_distritos` VALUES ("694", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Poroy", "080103");
#
#
INSERT INTO `geo_distritos` VALUES ("695", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "San Sebastian", "080105");
#
#
INSERT INTO `geo_distritos` VALUES ("696", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Santiago", "080106");
#
#
INSERT INTO `geo_distritos` VALUES ("697", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Saylla", "080107");
#
#
INSERT INTO `geo_distritos` VALUES ("698", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "80", "Wanchaq", "080108");
#
#
INSERT INTO `geo_distritos` VALUES ("699", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Acomayo", "080201");
#
#
INSERT INTO `geo_distritos` VALUES ("700", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Acopia", "080202");
#
#
INSERT INTO `geo_distritos` VALUES ("701", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Acos", "080203");
#
#
INSERT INTO `geo_distritos` VALUES ("702", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Mosoc Llacta", "080204");
#
#
INSERT INTO `geo_distritos` VALUES ("703", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Pomacanchi", "080205");
#
#
INSERT INTO `geo_distritos` VALUES ("704", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Rondocan", "080206");
#
#
INSERT INTO `geo_distritos` VALUES ("705", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "81", "Sangarara", "080207");
#
#
INSERT INTO `geo_distritos` VALUES ("706", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Ancahuasi", "080302");
#
#
INSERT INTO `geo_distritos` VALUES ("707", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Cachimayo", "080303");
#
#
INSERT INTO `geo_distritos` VALUES ("708", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Chinchaypujio", "080304");
#
#
INSERT INTO `geo_distritos` VALUES ("709", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Huarocondo", "080305");
#
#
INSERT INTO `geo_distritos` VALUES ("710", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Limatambo", "080306");
#
#
INSERT INTO `geo_distritos` VALUES ("711", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Mollepata", "080307");
#
#
INSERT INTO `geo_distritos` VALUES ("712", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Pucyura", "080308");
#
#
INSERT INTO `geo_distritos` VALUES ("713", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "82", "Zurite", "080309");
#
#
INSERT INTO `geo_distritos` VALUES ("714", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Calca", "080401");
#
#
INSERT INTO `geo_distritos` VALUES ("715", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Coya", "080402");
#
#
INSERT INTO `geo_distritos` VALUES ("716", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Lamay", "080403");
#
#
INSERT INTO `geo_distritos` VALUES ("717", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Lares", "080404");
#
#
INSERT INTO `geo_distritos` VALUES ("718", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Pisac", "080405");
#
#
INSERT INTO `geo_distritos` VALUES ("719", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "San Salvador", "080406");
#
#
INSERT INTO `geo_distritos` VALUES ("720", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Taray", "080407");
#
#
INSERT INTO `geo_distritos` VALUES ("721", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "83", "Yanatile", "080408");
#
#
INSERT INTO `geo_distritos` VALUES ("722", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Yanaoca", "080501");
#
#
INSERT INTO `geo_distritos` VALUES ("723", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Checca", "080502");
#
#
INSERT INTO `geo_distritos` VALUES ("724", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Kunturkanki", "080503");
#
#
INSERT INTO `geo_distritos` VALUES ("725", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Langui", "080504");
#
#
INSERT INTO `geo_distritos` VALUES ("726", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Layo", "080505");
#
#
INSERT INTO `geo_distritos` VALUES ("727", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Quehue", "080507");
#
#
INSERT INTO `geo_distritos` VALUES ("728", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "84", "Tupac Amaru", "080508");
#
#
INSERT INTO `geo_distritos` VALUES ("729", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Sicuani", "080601");
#
#
INSERT INTO `geo_distritos` VALUES ("730", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Checacupe", "080602");
#
#
INSERT INTO `geo_distritos` VALUES ("731", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Combapata", "080603");
#
#
INSERT INTO `geo_distritos` VALUES ("732", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Marangani", "080604");
#
#
INSERT INTO `geo_distritos` VALUES ("733", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Pitumarca", "080605");
#
#
INSERT INTO `geo_distritos` VALUES ("734", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "85", "Tinta", "080608");
#
#
INSERT INTO `geo_distritos` VALUES ("735", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Capacmarca", "080702");
#
#
INSERT INTO `geo_distritos` VALUES ("736", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Chamaca", "080703");
#
#
INSERT INTO `geo_distritos` VALUES ("737", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Colquemarca", "080704");
#
#
INSERT INTO `geo_distritos` VALUES ("738", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Livitaca", "080705");
#
#
INSERT INTO `geo_distritos` VALUES ("739", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Llusco", "080706");
#
#
INSERT INTO `geo_distritos` VALUES ("740", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Quiñota", "080707");
#
#
INSERT INTO `geo_distritos` VALUES ("741", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "86", "Velille", "080708");
#
#
INSERT INTO `geo_distritos` VALUES ("742", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Espinar", "080801");
#
#
INSERT INTO `geo_distritos` VALUES ("743", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Condoroma", "080802");
#
#
INSERT INTO `geo_distritos` VALUES ("744", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Ocoruro", "080804");
#
#
INSERT INTO `geo_distritos` VALUES ("745", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Pallpata", "080805");
#
#
INSERT INTO `geo_distritos` VALUES ("746", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Pichigua", "080806");
#
#
INSERT INTO `geo_distritos` VALUES ("747", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Suyckutambo", "080807");
#
#
INSERT INTO `geo_distritos` VALUES ("748", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "87", "Alto Pichigua", "080808");
#
#
INSERT INTO `geo_distritos` VALUES ("749", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Santa Ana", "080901");
#
#
INSERT INTO `geo_distritos` VALUES ("750", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Echarate", "080902");
#
#
INSERT INTO `geo_distritos` VALUES ("751", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Huayopata", "080903");
#
#
INSERT INTO `geo_distritos` VALUES ("752", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Maranura", "080904");
#
#
INSERT INTO `geo_distritos` VALUES ("753", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Quellouno", "080906");
#
#
INSERT INTO `geo_distritos` VALUES ("754", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Kimbiri", "080907");
#
#
INSERT INTO `geo_distritos` VALUES ("755", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Santa Teresa", "080908");
#
#
INSERT INTO `geo_distritos` VALUES ("756", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "88", "Pichari", "080910");
#
#
INSERT INTO `geo_distritos` VALUES ("757", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Paruro", "081001");
#
#
INSERT INTO `geo_distritos` VALUES ("758", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Accha", "081002");
#
#
INSERT INTO `geo_distritos` VALUES ("759", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Ccapi", "081003");
#
#
INSERT INTO `geo_distritos` VALUES ("760", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Colcha", "081004");
#
#
INSERT INTO `geo_distritos` VALUES ("761", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Huanoquite", "081005");
#
#
INSERT INTO `geo_distritos` VALUES ("762", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Omacha", "081006");
#
#
INSERT INTO `geo_distritos` VALUES ("763", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Paccaritambo", "081007");
#
#
INSERT INTO `geo_distritos` VALUES ("764", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Pillpinto", "081008");
#
#
INSERT INTO `geo_distritos` VALUES ("765", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "89", "Yaurisque", "081009");
#
#
INSERT INTO `geo_distritos` VALUES ("766", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Paucartambo", "081101");
#
#
INSERT INTO `geo_distritos` VALUES ("767", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Caicay", "081102");
#
#
INSERT INTO `geo_distritos` VALUES ("768", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Challabamba", "081103");
#
#
INSERT INTO `geo_distritos` VALUES ("769", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Colquepata", "081104");
#
#
INSERT INTO `geo_distritos` VALUES ("770", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Huancarani", "081105");
#
#
INSERT INTO `geo_distritos` VALUES ("771", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "90", "Kosñipata", "081106");
#
#
INSERT INTO `geo_distritos` VALUES ("772", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Urcos", "081201");
#
#
INSERT INTO `geo_distritos` VALUES ("773", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Andahuaylillas", "081202");
#
#
INSERT INTO `geo_distritos` VALUES ("774", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Camanti", "081203");
#
#
INSERT INTO `geo_distritos` VALUES ("775", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Ccarhuayo", "081204");
#
#
INSERT INTO `geo_distritos` VALUES ("776", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Ccatca", "081205");
#
#
INSERT INTO `geo_distritos` VALUES ("777", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Cusipata", "081206");
#
#
INSERT INTO `geo_distritos` VALUES ("778", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Huaro", "081207");
#
#
INSERT INTO `geo_distritos` VALUES ("779", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Marcapata", "081209");
#
#
INSERT INTO `geo_distritos` VALUES ("780", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Ocongate", "081210");
#
#
INSERT INTO `geo_distritos` VALUES ("781", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "91", "Quiquijana", "081212");
#
#
INSERT INTO `geo_distritos` VALUES ("782", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Urubamba", "081301");
#
#
INSERT INTO `geo_distritos` VALUES ("783", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Chinchero", "081302");
#
#
INSERT INTO `geo_distritos` VALUES ("784", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Machupicchu", "081304");
#
#
INSERT INTO `geo_distritos` VALUES ("785", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Maras", "081305");
#
#
INSERT INTO `geo_distritos` VALUES ("786", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Ollantaytambo", "081306");
#
#
INSERT INTO `geo_distritos` VALUES ("787", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "92", "Yucay", "081307");
#
#
INSERT INTO `geo_distritos` VALUES ("788", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Huancavelica", "090101");
#
#
INSERT INTO `geo_distritos` VALUES ("789", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Acobambilla", "090102");
#
#
INSERT INTO `geo_distritos` VALUES ("790", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Acoria", "090103");
#
#
INSERT INTO `geo_distritos` VALUES ("791", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Conayca", "090104");
#
#
INSERT INTO `geo_distritos` VALUES ("792", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Cuenca", "090105");
#
#
INSERT INTO `geo_distritos` VALUES ("793", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Huachocolpa", "090106");
#
#
INSERT INTO `geo_distritos` VALUES ("794", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Huayllahuara", "090107");
#
#
INSERT INTO `geo_distritos` VALUES ("795", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Izcuchaca", "090108");
#
#
INSERT INTO `geo_distritos` VALUES ("796", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Laria", "090109");
#
#
INSERT INTO `geo_distritos` VALUES ("797", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Manta", "090110");
#
#
INSERT INTO `geo_distritos` VALUES ("798", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Moya", "090112");
#
#
INSERT INTO `geo_distritos` VALUES ("799", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Nuevo Occoro", "090113");
#
#
INSERT INTO `geo_distritos` VALUES ("800", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Palca", "090114");
#
#
INSERT INTO `geo_distritos` VALUES ("801", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Pilchaca", "090115");
#
#
INSERT INTO `geo_distritos` VALUES ("802", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Vilca", "090116");
#
#
INSERT INTO `geo_distritos` VALUES ("803", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Yauli", "090117");
#
#
INSERT INTO `geo_distritos` VALUES ("804", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Ascension", "090118");
#
#
INSERT INTO `geo_distritos` VALUES ("805", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "93", "Huando", "090119");
#
#
INSERT INTO `geo_distritos` VALUES ("806", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "94", "Caja", "090204");
#
#
INSERT INTO `geo_distritos` VALUES ("807", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "94", "Marcas", "090205");
#
#
INSERT INTO `geo_distritos` VALUES ("808", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "94", "Paucara", "090206");
#
#
INSERT INTO `geo_distritos` VALUES ("809", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "94", "Rosario", "090208");
#
#
INSERT INTO `geo_distritos` VALUES ("810", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Lircay", "090301");
#
#
INSERT INTO `geo_distritos` VALUES ("811", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Anchonga", "090302");
#
#
INSERT INTO `geo_distritos` VALUES ("812", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Callanmarca", "090303");
#
#
INSERT INTO `geo_distritos` VALUES ("813", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Ccochaccasa", "090304");
#
#
INSERT INTO `geo_distritos` VALUES ("814", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Chincho", "090305");
#
#
INSERT INTO `geo_distritos` VALUES ("815", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Congalla", "090306");
#
#
INSERT INTO `geo_distritos` VALUES ("816", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Huanca-Huanca", "090307");
#
#
INSERT INTO `geo_distritos` VALUES ("817", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Huayllay Grande", "090308");
#
#
INSERT INTO `geo_distritos` VALUES ("818", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Julcamarca", "090309");
#
#
INSERT INTO `geo_distritos` VALUES ("819", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "San Antonio De Antaparco", "090310");
#
#
INSERT INTO `geo_distritos` VALUES ("820", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Santo Tomas De Pata", "090311");
#
#
INSERT INTO `geo_distritos` VALUES ("821", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "95", "Secclla", "090312");
#
#
INSERT INTO `geo_distritos` VALUES ("822", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Castrovirreyna", "090401");
#
#
INSERT INTO `geo_distritos` VALUES ("823", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Arma", "090402");
#
#
INSERT INTO `geo_distritos` VALUES ("824", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Aurahua", "090403");
#
#
INSERT INTO `geo_distritos` VALUES ("825", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Capillas", "090404");
#
#
INSERT INTO `geo_distritos` VALUES ("826", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Chupamarca", "090405");
#
#
INSERT INTO `geo_distritos` VALUES ("827", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Cocas", "090406");
#
#
INSERT INTO `geo_distritos` VALUES ("828", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Huachos", "090407");
#
#
INSERT INTO `geo_distritos` VALUES ("829", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Huamatambo", "090408");
#
#
INSERT INTO `geo_distritos` VALUES ("830", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Mollepampa", "090409");
#
#
INSERT INTO `geo_distritos` VALUES ("831", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Tantara", "090412");
#
#
INSERT INTO `geo_distritos` VALUES ("832", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "96", "Ticrapo", "090413");
#
#
INSERT INTO `geo_distritos` VALUES ("833", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "Churcampa", "090501");
#
#
INSERT INTO `geo_distritos` VALUES ("834", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "Chinchihuasi", "090503");
#
#
INSERT INTO `geo_distritos` VALUES ("835", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "El Carmen", "090504");
#
#
INSERT INTO `geo_distritos` VALUES ("836", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "Locroja", "090506");
#
#
INSERT INTO `geo_distritos` VALUES ("837", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "Paucarbamba", "090507");
#
#
INSERT INTO `geo_distritos` VALUES ("838", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "San Miguel De Mayocc", "090508");
#
#
INSERT INTO `geo_distritos` VALUES ("839", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "San Pedro De Coris", "090509");
#
#
INSERT INTO `geo_distritos` VALUES ("840", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "97", "Pachamarca", "090510");
#
#
INSERT INTO `geo_distritos` VALUES ("841", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Huaytara", "090601");
#
#
INSERT INTO `geo_distritos` VALUES ("842", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Ayavi", "090602");
#
#
INSERT INTO `geo_distritos` VALUES ("843", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Cordova", "090603");
#
#
INSERT INTO `geo_distritos` VALUES ("844", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Huayacundo Arma", "090604");
#
#
INSERT INTO `geo_distritos` VALUES ("845", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Laramarca", "090605");
#
#
INSERT INTO `geo_distritos` VALUES ("846", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Ocoyo", "090606");
#
#
INSERT INTO `geo_distritos` VALUES ("847", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Pilpichaca", "090607");
#
#
INSERT INTO `geo_distritos` VALUES ("848", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Querco", "090608");
#
#
INSERT INTO `geo_distritos` VALUES ("849", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Quito-Arma", "090609");
#
#
INSERT INTO `geo_distritos` VALUES ("850", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "San Antonio De Cusicancha", "090610");
#
#
INSERT INTO `geo_distritos` VALUES ("851", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "San Francisco De Sangayaico", "090611");
#
#
INSERT INTO `geo_distritos` VALUES ("852", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Santiago De Chocorvos", "090613");
#
#
INSERT INTO `geo_distritos` VALUES ("853", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Santiago De Quirahuara", "090614");
#
#
INSERT INTO `geo_distritos` VALUES ("854", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "98", "Santo Domingo De Capillas", "090615");
#
#
INSERT INTO `geo_distritos` VALUES ("855", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Acostambo", "090702");
#
#
INSERT INTO `geo_distritos` VALUES ("856", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Acraquia", "090703");
#
#
INSERT INTO `geo_distritos` VALUES ("857", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Ahuaycha", "090704");
#
#
INSERT INTO `geo_distritos` VALUES ("858", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Daniel Hernandez", "090706");
#
#
INSERT INTO `geo_distritos` VALUES ("859", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Huaribamba", "090709");
#
#
INSERT INTO `geo_distritos` VALUES ("860", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Ñahuimpuquio", "090710");
#
#
INSERT INTO `geo_distritos` VALUES ("861", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Pazos", "090711");
#
#
INSERT INTO `geo_distritos` VALUES ("862", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Quishuar", "090713");
#
#
INSERT INTO `geo_distritos` VALUES ("863", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Salcabamba", "090714");
#
#
INSERT INTO `geo_distritos` VALUES ("864", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Salcahuasi", "090715");
#
#
INSERT INTO `geo_distritos` VALUES ("865", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "San Marcos De Rocchac", "090716");
#
#
INSERT INTO `geo_distritos` VALUES ("866", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Surcubamba", "090717");
#
#
INSERT INTO `geo_distritos` VALUES ("867", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "99", "Tintay Puncu", "090718");
#
#
INSERT INTO `geo_distritos` VALUES ("868", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Huanuco", "100101");
#
#
INSERT INTO `geo_distritos` VALUES ("869", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Amarilis", "100102");
#
#
INSERT INTO `geo_distritos` VALUES ("870", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Chinchao", "100103");
#
#
INSERT INTO `geo_distritos` VALUES ("871", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Churubamba", "100104");
#
#
INSERT INTO `geo_distritos` VALUES ("872", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Margos", "100105");
#
#
INSERT INTO `geo_distritos` VALUES ("873", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Quisqui", "100106");
#
#
INSERT INTO `geo_distritos` VALUES ("874", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "San Francisco De Cayran", "100107");
#
#
INSERT INTO `geo_distritos` VALUES ("875", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "San Pedro De Chaulan", "100108");
#
#
INSERT INTO `geo_distritos` VALUES ("876", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Santa Maria Del Valle", "100109");
#
#
INSERT INTO `geo_distritos` VALUES ("877", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Yarumayo", "100110");
#
#
INSERT INTO `geo_distritos` VALUES ("878", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "100", "Pillco Marca", "100111");
#
#
INSERT INTO `geo_distritos` VALUES ("879", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Ambo", "100201");
#
#
INSERT INTO `geo_distritos` VALUES ("880", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Cayna", "100202");
#
#
INSERT INTO `geo_distritos` VALUES ("881", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Colpas", "100203");
#
#
INSERT INTO `geo_distritos` VALUES ("882", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Conchamarca", "100204");
#
#
INSERT INTO `geo_distritos` VALUES ("883", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Huacar", "100205");
#
#
INSERT INTO `geo_distritos` VALUES ("884", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "San Francisco", "100206");
#
#
INSERT INTO `geo_distritos` VALUES ("885", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "San Rafael", "100207");
#
#
INSERT INTO `geo_distritos` VALUES ("886", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "101", "Tomay Kichwa", "100208");
#
#
INSERT INTO `geo_distritos` VALUES ("887", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "La Union", "100301");
#
#
INSERT INTO `geo_distritos` VALUES ("888", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Chuquis", "100307");
#
#
INSERT INTO `geo_distritos` VALUES ("889", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Marias", "100311");
#
#
INSERT INTO `geo_distritos` VALUES ("890", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Pachas", "100313");
#
#
INSERT INTO `geo_distritos` VALUES ("891", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Quivilla", "100316");
#
#
INSERT INTO `geo_distritos` VALUES ("892", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Ripan", "100317");
#
#
INSERT INTO `geo_distritos` VALUES ("893", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Shunqui", "100321");
#
#
INSERT INTO `geo_distritos` VALUES ("894", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Sillapata", "100322");
#
#
INSERT INTO `geo_distritos` VALUES ("895", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "102", "Yanas", "100323");
#
#
INSERT INTO `geo_distritos` VALUES ("896", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "103", "Huacaybamba", "100401");
#
#
INSERT INTO `geo_distritos` VALUES ("897", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "103", "Canchabamba", "100402");
#
#
INSERT INTO `geo_distritos` VALUES ("898", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "103", "Pinra", "100404");
#
#
INSERT INTO `geo_distritos` VALUES ("899", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Llata", "100501");
#
#
INSERT INTO `geo_distritos` VALUES ("900", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Arancay", "100502");
#
#
INSERT INTO `geo_distritos` VALUES ("901", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Chavin De Pariarca", "100503");
#
#
INSERT INTO `geo_distritos` VALUES ("902", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Jacas Grande", "100504");
#
#
INSERT INTO `geo_distritos` VALUES ("903", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Jircan", "100505");
#
#
INSERT INTO `geo_distritos` VALUES ("904", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Monzon", "100507");
#
#
INSERT INTO `geo_distritos` VALUES ("905", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Punchao", "100508");
#
#
INSERT INTO `geo_distritos` VALUES ("906", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Puños", "100509");
#
#
INSERT INTO `geo_distritos` VALUES ("907", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Singa", "100510");
#
#
INSERT INTO `geo_distritos` VALUES ("908", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "104", "Tantamayo", "100511");
#
#
INSERT INTO `geo_distritos` VALUES ("909", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Rupa-Rupa", "100601");
#
#
INSERT INTO `geo_distritos` VALUES ("910", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Daniel Alomias Robles", "100602");
#
#
INSERT INTO `geo_distritos` VALUES ("911", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Hermilio Valdizan", "100603");
#
#
INSERT INTO `geo_distritos` VALUES ("912", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Jose Crespo Y Castillo", "100604");
#
#
INSERT INTO `geo_distritos` VALUES ("913", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Luyando", "100605");
#
#
INSERT INTO `geo_distritos` VALUES ("914", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "105", "Mariano Damaso Beraun", "100606");
#
#
INSERT INTO `geo_distritos` VALUES ("915", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "106", "Huacrachuco", "100701");
#
#
INSERT INTO `geo_distritos` VALUES ("916", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "106", "Cholon", "100702");
#
#
INSERT INTO `geo_distritos` VALUES ("917", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "106", "San Buenaventura", "100703");
#
#
INSERT INTO `geo_distritos` VALUES ("918", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "107", "Panao", "100801");
#
#
INSERT INTO `geo_distritos` VALUES ("919", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "107", "Chaglla", "100802");
#
#
INSERT INTO `geo_distritos` VALUES ("920", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "107", "Molino", "100803");
#
#
INSERT INTO `geo_distritos` VALUES ("921", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "107", "Umari", "100804");
#
#
INSERT INTO `geo_distritos` VALUES ("922", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "108", "Puerto Inca", "100901");
#
#
INSERT INTO `geo_distritos` VALUES ("923", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "108", "Codo Del Pozuzo", "100902");
#
#
INSERT INTO `geo_distritos` VALUES ("924", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "108", "Honoria", "100903");
#
#
INSERT INTO `geo_distritos` VALUES ("925", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "108", "Tournavista", "100904");
#
#
INSERT INTO `geo_distritos` VALUES ("926", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "108", "Yuyapichis", "100905");
#
#
INSERT INTO `geo_distritos` VALUES ("927", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "Baños", "101002");
#
#
INSERT INTO `geo_distritos` VALUES ("928", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "Jivia", "101003");
#
#
INSERT INTO `geo_distritos` VALUES ("929", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "Queropalca", "101004");
#
#
INSERT INTO `geo_distritos` VALUES ("930", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "Rondos", "101005");
#
#
INSERT INTO `geo_distritos` VALUES ("931", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "San Francisco De Asis", "101006");
#
#
INSERT INTO `geo_distritos` VALUES ("932", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "109", "San Miguel De Cauri", "101007");
#
#
INSERT INTO `geo_distritos` VALUES ("933", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Chavinillo", "101101");
#
#
INSERT INTO `geo_distritos` VALUES ("934", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Cahuac", "101102");
#
#
INSERT INTO `geo_distritos` VALUES ("935", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Chacabamba", "101103");
#
#
INSERT INTO `geo_distritos` VALUES ("936", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Aparicio Pomares", "101104");
#
#
INSERT INTO `geo_distritos` VALUES ("937", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Jacas Chico", "101105");
#
#
INSERT INTO `geo_distritos` VALUES ("938", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Obas", "101106");
#
#
INSERT INTO `geo_distritos` VALUES ("939", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "110", "Choras", "101108");
#
#
INSERT INTO `geo_distritos` VALUES ("940", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Ica", "110101");
#
#
INSERT INTO `geo_distritos` VALUES ("941", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "La Tinguiña", "110102");
#
#
INSERT INTO `geo_distritos` VALUES ("942", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Los Aquijes", "110103");
#
#
INSERT INTO `geo_distritos` VALUES ("943", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Ocucaje", "110104");
#
#
INSERT INTO `geo_distritos` VALUES ("944", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Pachacutec", "110105");
#
#
INSERT INTO `geo_distritos` VALUES ("945", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Parcona", "110106");
#
#
INSERT INTO `geo_distritos` VALUES ("946", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Pueblo Nuevo", "110107");
#
#
INSERT INTO `geo_distritos` VALUES ("947", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Salas", "110108");
#
#
INSERT INTO `geo_distritos` VALUES ("948", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "San Jose De Los Molinos", "110109");
#
#
INSERT INTO `geo_distritos` VALUES ("949", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Subtanjalla", "110112");
#
#
INSERT INTO `geo_distritos` VALUES ("950", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Tate", "110113");
#
#
INSERT INTO `geo_distritos` VALUES ("951", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "111", "Yauca Del Rosario", "110114");
#
#
INSERT INTO `geo_distritos` VALUES ("952", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Chincha Alta", "110201");
#
#
INSERT INTO `geo_distritos` VALUES ("953", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Alto Laran", "110202");
#
#
INSERT INTO `geo_distritos` VALUES ("954", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Chavin", "110203");
#
#
INSERT INTO `geo_distritos` VALUES ("955", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Chincha Baja", "110204");
#
#
INSERT INTO `geo_distritos` VALUES ("956", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Grocio Prado", "110206");
#
#
INSERT INTO `geo_distritos` VALUES ("957", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "San Juan De Yanac", "110208");
#
#
INSERT INTO `geo_distritos` VALUES ("958", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "San Pedro De Huacarpana", "110209");
#
#
INSERT INTO `geo_distritos` VALUES ("959", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Sunampe", "110210");
#
#
INSERT INTO `geo_distritos` VALUES ("960", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "112", "Tambo De Mora", "110211");
#
#
INSERT INTO `geo_distritos` VALUES ("961", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "113", "Nazca", "110301");
#
#
INSERT INTO `geo_distritos` VALUES ("962", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "113", "Changuillo", "110302");
#
#
INSERT INTO `geo_distritos` VALUES ("963", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "113", "El Ingenio", "110303");
#
#
INSERT INTO `geo_distritos` VALUES ("964", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "113", "Marcona", "110304");
#
#
INSERT INTO `geo_distritos` VALUES ("965", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "114", "Palpa", "110401");
#
#
INSERT INTO `geo_distritos` VALUES ("966", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "114", "Llipata", "110402");
#
#
INSERT INTO `geo_distritos` VALUES ("967", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "114", "Tibillo", "110405");
#
#
INSERT INTO `geo_distritos` VALUES ("968", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "Pisco", "110501");
#
#
INSERT INTO `geo_distritos` VALUES ("969", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "Huancano", "110502");
#
#
INSERT INTO `geo_distritos` VALUES ("970", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "Humay", "110503");
#
#
INSERT INTO `geo_distritos` VALUES ("971", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "Paracas", "110505");
#
#
INSERT INTO `geo_distritos` VALUES ("972", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "San Andres", "110506");
#
#
INSERT INTO `geo_distritos` VALUES ("973", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "San Clemente", "110507");
#
#
INSERT INTO `geo_distritos` VALUES ("974", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "115", "Tupac Amaru Inca", "110508");
#
#
INSERT INTO `geo_distritos` VALUES ("975", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Huancayo", "120101");
#
#
INSERT INTO `geo_distritos` VALUES ("976", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Carhuacallanga", "120104");
#
#
INSERT INTO `geo_distritos` VALUES ("977", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Chacapampa", "120105");
#
#
INSERT INTO `geo_distritos` VALUES ("978", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Chicche", "120106");
#
#
INSERT INTO `geo_distritos` VALUES ("979", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Chilca", "120107");
#
#
INSERT INTO `geo_distritos` VALUES ("980", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Chongos Alto", "120108");
#
#
INSERT INTO `geo_distritos` VALUES ("981", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Chupuro", "120111");
#
#
INSERT INTO `geo_distritos` VALUES ("982", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Cullhuas", "120113");
#
#
INSERT INTO `geo_distritos` VALUES ("983", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "El Tambo", "120114");
#
#
INSERT INTO `geo_distritos` VALUES ("984", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Huacrapuquio", "120116");
#
#
INSERT INTO `geo_distritos` VALUES ("985", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Hualhuas", "120117");
#
#
INSERT INTO `geo_distritos` VALUES ("986", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Huancan", "120119");
#
#
INSERT INTO `geo_distritos` VALUES ("987", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Huasicancha", "120120");
#
#
INSERT INTO `geo_distritos` VALUES ("988", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Huayucachi", "120121");
#
#
INSERT INTO `geo_distritos` VALUES ("989", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Ingenio", "120122");
#
#
INSERT INTO `geo_distritos` VALUES ("990", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Pilcomayo", "120125");
#
#
INSERT INTO `geo_distritos` VALUES ("991", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Quichuay", "120127");
#
#
INSERT INTO `geo_distritos` VALUES ("992", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Quilcas", "120128");
#
#
INSERT INTO `geo_distritos` VALUES ("993", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "San Agustin", "120129");
#
#
INSERT INTO `geo_distritos` VALUES ("994", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "San Jeronimo De Tunan", "120130");
#
#
INSERT INTO `geo_distritos` VALUES ("995", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Saño", "120132");
#
#
INSERT INTO `geo_distritos` VALUES ("996", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Sapallanga", "120133");
#
#
INSERT INTO `geo_distritos` VALUES ("997", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Sicaya", "120134");
#
#
INSERT INTO `geo_distritos` VALUES ("998", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Santo Domingo De Acobamba", "120135");
#
#
INSERT INTO `geo_distritos` VALUES ("999", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "116", "Viques", "120136");
#
#
INSERT INTO `geo_distritos` VALUES ("1000", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Andamarca", "120203");
#
#
INSERT INTO `geo_distritos` VALUES ("1001", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Chambara", "120204");
#
#
INSERT INTO `geo_distritos` VALUES ("1002", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Heroinas Toledo", "120207");
#
#
INSERT INTO `geo_distritos` VALUES ("1003", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Manzanares", "120208");
#
#
INSERT INTO `geo_distritos` VALUES ("1004", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Matahuasi", "120210");
#
#
INSERT INTO `geo_distritos` VALUES ("1005", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Mito", "120211");
#
#
INSERT INTO `geo_distritos` VALUES ("1006", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Nueve De Julio", "120212");
#
#
INSERT INTO `geo_distritos` VALUES ("1007", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Orcotuna", "120213");
#
#
INSERT INTO `geo_distritos` VALUES ("1008", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "San Jose De Quero", "120214");
#
#
INSERT INTO `geo_distritos` VALUES ("1009", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "117", "Santa Rosa De Ocopa", "120215");
#
#
INSERT INTO `geo_distritos` VALUES ("1010", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "Chanchamayo", "120301");
#
#
INSERT INTO `geo_distritos` VALUES ("1011", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "Perene", "120302");
#
#
INSERT INTO `geo_distritos` VALUES ("1012", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "Pichanaqui", "120303");
#
#
INSERT INTO `geo_distritos` VALUES ("1013", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "San Luis De Shuaro", "120304");
#
#
INSERT INTO `geo_distritos` VALUES ("1014", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "San Ramon", "120305");
#
#
INSERT INTO `geo_distritos` VALUES ("1015", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "118", "Vitoc", "120306");
#
#
INSERT INTO `geo_distritos` VALUES ("1016", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Jauja", "120401");
#
#
INSERT INTO `geo_distritos` VALUES ("1017", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Acolla", "120402");
#
#
INSERT INTO `geo_distritos` VALUES ("1018", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Apata", "120403");
#
#
INSERT INTO `geo_distritos` VALUES ("1019", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Ataura", "120404");
#
#
INSERT INTO `geo_distritos` VALUES ("1020", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Canchayllo", "120405");
#
#
INSERT INTO `geo_distritos` VALUES ("1021", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Curicaca", "120406");
#
#
INSERT INTO `geo_distritos` VALUES ("1022", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "El Mantaro", "120407");
#
#
INSERT INTO `geo_distritos` VALUES ("1023", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Huamali", "120408");
#
#
INSERT INTO `geo_distritos` VALUES ("1024", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Huaripampa", "120409");
#
#
INSERT INTO `geo_distritos` VALUES ("1025", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Huertas", "120410");
#
#
INSERT INTO `geo_distritos` VALUES ("1026", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Janjaillo", "120411");
#
#
INSERT INTO `geo_distritos` VALUES ("1027", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Julcan", "120412");
#
#
INSERT INTO `geo_distritos` VALUES ("1028", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Leonor Ordoñez", "120413");
#
#
INSERT INTO `geo_distritos` VALUES ("1029", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Llocllapampa", "120414");
#
#
INSERT INTO `geo_distritos` VALUES ("1030", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Marco", "120415");
#
#
INSERT INTO `geo_distritos` VALUES ("1031", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Masma", "120416");
#
#
INSERT INTO `geo_distritos` VALUES ("1032", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Masma Chicche", "120417");
#
#
INSERT INTO `geo_distritos` VALUES ("1033", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Molinos", "120418");
#
#
INSERT INTO `geo_distritos` VALUES ("1034", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Monobamba", "120419");
#
#
INSERT INTO `geo_distritos` VALUES ("1035", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Muqui", "120420");
#
#
INSERT INTO `geo_distritos` VALUES ("1036", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Muquiyauyo", "120421");
#
#
INSERT INTO `geo_distritos` VALUES ("1037", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Paca", "120422");
#
#
INSERT INTO `geo_distritos` VALUES ("1038", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Pancan", "120424");
#
#
INSERT INTO `geo_distritos` VALUES ("1039", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Parco", "120425");
#
#
INSERT INTO `geo_distritos` VALUES ("1040", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Pomacancha", "120426");
#
#
INSERT INTO `geo_distritos` VALUES ("1041", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Ricran", "120427");
#
#
INSERT INTO `geo_distritos` VALUES ("1042", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "San Lorenzo", "120428");
#
#
INSERT INTO `geo_distritos` VALUES ("1043", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "San Pedro De Chunan", "120429");
#
#
INSERT INTO `geo_distritos` VALUES ("1044", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Sausa", "120430");
#
#
INSERT INTO `geo_distritos` VALUES ("1045", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Sincos", "120431");
#
#
INSERT INTO `geo_distritos` VALUES ("1046", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Tunan Marca", "120432");
#
#
INSERT INTO `geo_distritos` VALUES ("1047", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "119", "Yauyos", "120434");
#
#
INSERT INTO `geo_distritos` VALUES ("1048", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "120", "Junin", "120501");
#
#
INSERT INTO `geo_distritos` VALUES ("1049", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "120", "Carhuamayo", "120502");
#
#
INSERT INTO `geo_distritos` VALUES ("1050", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "120", "Ondores", "120503");
#
#
INSERT INTO `geo_distritos` VALUES ("1051", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "120", "Ulcumayo", "120504");
#
#
INSERT INTO `geo_distritos` VALUES ("1052", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Satipo", "120601");
#
#
INSERT INTO `geo_distritos` VALUES ("1053", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Coviriali", "120602");
#
#
INSERT INTO `geo_distritos` VALUES ("1054", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Llaylla", "120603");
#
#
INSERT INTO `geo_distritos` VALUES ("1055", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Mazamari", "120604");
#
#
INSERT INTO `geo_distritos` VALUES ("1056", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Pampa Hermosa", "120605");
#
#
INSERT INTO `geo_distritos` VALUES ("1057", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Pangoa", "120606");
#
#
INSERT INTO `geo_distritos` VALUES ("1058", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Rio Negro", "120607");
#
#
INSERT INTO `geo_distritos` VALUES ("1059", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "121", "Rio Tambo", "120608");
#
#
INSERT INTO `geo_distritos` VALUES ("1060", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "Tarma", "120701");
#
#
INSERT INTO `geo_distritos` VALUES ("1061", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "Huaricolca", "120703");
#
#
INSERT INTO `geo_distritos` VALUES ("1062", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "Huasahuasi", "120704");
#
#
INSERT INTO `geo_distritos` VALUES ("1063", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "Palcamayo", "120707");
#
#
INSERT INTO `geo_distritos` VALUES ("1064", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "San Pedro De Cajas", "120708");
#
#
INSERT INTO `geo_distritos` VALUES ("1065", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "122", "Tapo", "120709");
#
#
INSERT INTO `geo_distritos` VALUES ("1066", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "La Oroya", "120801");
#
#
INSERT INTO `geo_distritos` VALUES ("1067", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Chacapalpa", "120802");
#
#
INSERT INTO `geo_distritos` VALUES ("1068", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Huay-Huay", "120803");
#
#
INSERT INTO `geo_distritos` VALUES ("1069", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Marcapomacocha", "120804");
#
#
INSERT INTO `geo_distritos` VALUES ("1070", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Morococha", "120805");
#
#
INSERT INTO `geo_distritos` VALUES ("1071", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Santa Barbara De Carhuacayan", "120807");
#
#
INSERT INTO `geo_distritos` VALUES ("1072", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Santa Rosa De Sacco", "120808");
#
#
INSERT INTO `geo_distritos` VALUES ("1073", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "123", "Suitucancha", "120809");
#
#
INSERT INTO `geo_distritos` VALUES ("1074", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Chupaca", "120901");
#
#
INSERT INTO `geo_distritos` VALUES ("1075", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Ahuac", "120902");
#
#
INSERT INTO `geo_distritos` VALUES ("1076", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Chongos Bajo", "120903");
#
#
INSERT INTO `geo_distritos` VALUES ("1077", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Huachac", "120904");
#
#
INSERT INTO `geo_distritos` VALUES ("1078", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Huamancaca Chico", "120905");
#
#
INSERT INTO `geo_distritos` VALUES ("1079", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "San Juan De Yscos", "120906");
#
#
INSERT INTO `geo_distritos` VALUES ("1080", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "San Juan De Jarpa", "120907");
#
#
INSERT INTO `geo_distritos` VALUES ("1081", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Tres De Diciembre", "120908");
#
#
INSERT INTO `geo_distritos` VALUES ("1082", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "124", "Yanacancha", "120909");
#
#
INSERT INTO `geo_distritos` VALUES ("1083", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Trujillo", "130101");
#
#
INSERT INTO `geo_distritos` VALUES ("1084", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "El Porvenir", "130102");
#
#
INSERT INTO `geo_distritos` VALUES ("1085", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Florencia De Mora", "130103");
#
#
INSERT INTO `geo_distritos` VALUES ("1086", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Huanchaco", "130104");
#
#
INSERT INTO `geo_distritos` VALUES ("1087", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Laredo", "130106");
#
#
INSERT INTO `geo_distritos` VALUES ("1088", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Moche", "130107");
#
#
INSERT INTO `geo_distritos` VALUES ("1089", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Poroto", "130108");
#
#
INSERT INTO `geo_distritos` VALUES ("1090", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Salaverry", "130109");
#
#
INSERT INTO `geo_distritos` VALUES ("1091", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Simbal", "130110");
#
#
INSERT INTO `geo_distritos` VALUES ("1092", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "125", "Victor Larco Herrera", "130111");
#
#
INSERT INTO `geo_distritos` VALUES ("1093", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Ascope", "130201");
#
#
INSERT INTO `geo_distritos` VALUES ("1094", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Chicama", "130202");
#
#
INSERT INTO `geo_distritos` VALUES ("1095", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Chocope", "130203");
#
#
INSERT INTO `geo_distritos` VALUES ("1096", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Magdalena De Cao", "130204");
#
#
INSERT INTO `geo_distritos` VALUES ("1097", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Paijan", "130205");
#
#
INSERT INTO `geo_distritos` VALUES ("1098", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Razuri", "130206");
#
#
INSERT INTO `geo_distritos` VALUES ("1099", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Santiago De Cao", "130207");
#
#
INSERT INTO `geo_distritos` VALUES ("1100", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "126", "Casa Grande", "130208");
#
#
INSERT INTO `geo_distritos` VALUES ("1101", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "127", "Condormarca", "130303");
#
#
INSERT INTO `geo_distritos` VALUES ("1102", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "127", "Longotea", "130304");
#
#
INSERT INTO `geo_distritos` VALUES ("1103", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "127", "Uchumarca", "130305");
#
#
INSERT INTO `geo_distritos` VALUES ("1104", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "127", "Ucuncha", "130306");
#
#
INSERT INTO `geo_distritos` VALUES ("1105", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "128", "Chepen", "130401");
#
#
INSERT INTO `geo_distritos` VALUES ("1106", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "128", "Pacanga", "130402");
#
#
INSERT INTO `geo_distritos` VALUES ("1107", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "129", "Calamarca", "130502");
#
#
INSERT INTO `geo_distritos` VALUES ("1108", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "129", "Carabamba", "130503");
#
#
INSERT INTO `geo_distritos` VALUES ("1109", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "129", "Huaso", "130504");
#
#
INSERT INTO `geo_distritos` VALUES ("1110", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Otuzco", "130601");
#
#
INSERT INTO `geo_distritos` VALUES ("1111", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Agallpampa", "130602");
#
#
INSERT INTO `geo_distritos` VALUES ("1112", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Charat", "130604");
#
#
INSERT INTO `geo_distritos` VALUES ("1113", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Huaranchal", "130605");
#
#
INSERT INTO `geo_distritos` VALUES ("1114", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "La Cuesta", "130606");
#
#
INSERT INTO `geo_distritos` VALUES ("1115", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Mache", "130608");
#
#
INSERT INTO `geo_distritos` VALUES ("1116", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Paranday", "130610");
#
#
INSERT INTO `geo_distritos` VALUES ("1117", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Salpo", "130611");
#
#
INSERT INTO `geo_distritos` VALUES ("1118", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Sinsicap", "130613");
#
#
INSERT INTO `geo_distritos` VALUES ("1119", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "130", "Usquil", "130614");
#
#
INSERT INTO `geo_distritos` VALUES ("1120", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "131", "San Pedro De Lloc", "130701");
#
#
INSERT INTO `geo_distritos` VALUES ("1121", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "131", "Guadalupe", "130702");
#
#
INSERT INTO `geo_distritos` VALUES ("1122", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "131", "Jequetepeque", "130703");
#
#
INSERT INTO `geo_distritos` VALUES ("1123", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "131", "Pacasmayo", "130704");
#
#
INSERT INTO `geo_distritos` VALUES ("1124", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "131", "San Jose", "130705");
#
#
INSERT INTO `geo_distritos` VALUES ("1125", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Tayabamba", "130801");
#
#
INSERT INTO `geo_distritos` VALUES ("1126", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Buldibuyo", "130802");
#
#
INSERT INTO `geo_distritos` VALUES ("1127", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Chillia", "130803");
#
#
INSERT INTO `geo_distritos` VALUES ("1128", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Huancaspata", "130804");
#
#
INSERT INTO `geo_distritos` VALUES ("1129", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Huaylillas", "130805");
#
#
INSERT INTO `geo_distritos` VALUES ("1130", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Huayo", "130806");
#
#
INSERT INTO `geo_distritos` VALUES ("1131", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Ongon", "130807");
#
#
INSERT INTO `geo_distritos` VALUES ("1132", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Parcoy", "130808");
#
#
INSERT INTO `geo_distritos` VALUES ("1133", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Pataz", "130809");
#
#
INSERT INTO `geo_distritos` VALUES ("1134", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Pias", "130810");
#
#
INSERT INTO `geo_distritos` VALUES ("1135", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Santiago De Challas", "130811");
#
#
INSERT INTO `geo_distritos` VALUES ("1136", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Taurija", "130812");
#
#
INSERT INTO `geo_distritos` VALUES ("1137", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "132", "Urpay", "130813");
#
#
INSERT INTO `geo_distritos` VALUES ("1138", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Huamachuco", "130901");
#
#
INSERT INTO `geo_distritos` VALUES ("1139", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Chugay", "130902");
#
#
INSERT INTO `geo_distritos` VALUES ("1140", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Cochorco", "130903");
#
#
INSERT INTO `geo_distritos` VALUES ("1141", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Curgos", "130904");
#
#
INSERT INTO `geo_distritos` VALUES ("1142", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Marcabal", "130905");
#
#
INSERT INTO `geo_distritos` VALUES ("1143", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Sanagoran", "130906");
#
#
INSERT INTO `geo_distritos` VALUES ("1144", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Sarin", "130907");
#
#
INSERT INTO `geo_distritos` VALUES ("1145", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "133", "Sartimbamba", "130908");
#
#
INSERT INTO `geo_distritos` VALUES ("1146", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Santiago De Chuco", "131001");
#
#
INSERT INTO `geo_distritos` VALUES ("1147", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Angasmarca", "131002");
#
#
INSERT INTO `geo_distritos` VALUES ("1148", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Cachicadan", "131003");
#
#
INSERT INTO `geo_distritos` VALUES ("1149", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Mollebamba", "131004");
#
#
INSERT INTO `geo_distritos` VALUES ("1150", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Quiruvilca", "131006");
#
#
INSERT INTO `geo_distritos` VALUES ("1151", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Santa Cruz De Chuca", "131007");
#
#
INSERT INTO `geo_distritos` VALUES ("1152", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "134", "Sitabamba", "131008");
#
#
INSERT INTO `geo_distritos` VALUES ("1153", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "135", "Cascas", "131101");
#
#
INSERT INTO `geo_distritos` VALUES ("1154", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "135", "Compin", "131103");
#
#
INSERT INTO `geo_distritos` VALUES ("1155", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "135", "Sayapullo", "131104");
#
#
INSERT INTO `geo_distritos` VALUES ("1156", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "136", "Viru", "131201");
#
#
INSERT INTO `geo_distritos` VALUES ("1157", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "136", "Chao", "131202");
#
#
INSERT INTO `geo_distritos` VALUES ("1158", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "136", "Guadalupito", "131203");
#
#
INSERT INTO `geo_distritos` VALUES ("1159", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Chiclayo", "140101");
#
#
INSERT INTO `geo_distritos` VALUES ("1160", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Chongoyape", "140102");
#
#
INSERT INTO `geo_distritos` VALUES ("1161", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Eten", "140103");
#
#
INSERT INTO `geo_distritos` VALUES ("1162", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Eten Puerto", "140104");
#
#
INSERT INTO `geo_distritos` VALUES ("1163", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Jose Leonardo Ortiz", "140105");
#
#
INSERT INTO `geo_distritos` VALUES ("1164", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Lagunas", "140107");
#
#
INSERT INTO `geo_distritos` VALUES ("1165", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Monsefu", "140108");
#
#
INSERT INTO `geo_distritos` VALUES ("1166", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Nueva Arica", "140109");
#
#
INSERT INTO `geo_distritos` VALUES ("1167", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Oyotun", "140110");
#
#
INSERT INTO `geo_distritos` VALUES ("1168", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Picsi", "140111");
#
#
INSERT INTO `geo_distritos` VALUES ("1169", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Pimentel", "140112");
#
#
INSERT INTO `geo_distritos` VALUES ("1170", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Reque", "140113");
#
#
INSERT INTO `geo_distritos` VALUES ("1171", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Saña", "140115");
#
#
INSERT INTO `geo_distritos` VALUES ("1172", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Cayalti", "140116");
#
#
INSERT INTO `geo_distritos` VALUES ("1173", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Patapo", "140117");
#
#
INSERT INTO `geo_distritos` VALUES ("1174", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Pomalca", "140118");
#
#
INSERT INTO `geo_distritos` VALUES ("1175", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Pucala", "140119");
#
#
INSERT INTO `geo_distritos` VALUES ("1176", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "137", "Tuman", "140120");
#
#
INSERT INTO `geo_distritos` VALUES ("1177", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "138", "Ferreñafe", "140201");
#
#
INSERT INTO `geo_distritos` VALUES ("1178", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "138", "Cañaris", "140202");
#
#
INSERT INTO `geo_distritos` VALUES ("1179", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "138", "Incahuasi", "140203");
#
#
INSERT INTO `geo_distritos` VALUES ("1180", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "138", "Manuel Antonio Mesones Muro", "140204");
#
#
INSERT INTO `geo_distritos` VALUES ("1181", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "138", "Pitipo", "140205");
#
#
INSERT INTO `geo_distritos` VALUES ("1182", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Lambayeque", "140301");
#
#
INSERT INTO `geo_distritos` VALUES ("1183", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Chochope", "140302");
#
#
INSERT INTO `geo_distritos` VALUES ("1184", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Illimo", "140303");
#
#
INSERT INTO `geo_distritos` VALUES ("1185", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Jayanca", "140304");
#
#
INSERT INTO `geo_distritos` VALUES ("1186", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Mochumi", "140305");
#
#
INSERT INTO `geo_distritos` VALUES ("1187", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Morrope", "140306");
#
#
INSERT INTO `geo_distritos` VALUES ("1188", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Motupe", "140307");
#
#
INSERT INTO `geo_distritos` VALUES ("1189", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Olmos", "140308");
#
#
INSERT INTO `geo_distritos` VALUES ("1190", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Pacora", "140309");
#
#
INSERT INTO `geo_distritos` VALUES ("1191", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "139", "Tucume", "140312");
#
#
INSERT INTO `geo_distritos` VALUES ("1192", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "8", "Cercado de Lima", "150101");
#
#
INSERT INTO `geo_distritos` VALUES ("1193", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "8", "Lurigancho", "150118");
#
#
INSERT INTO `geo_distritos` VALUES ("1194", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", "8", "Magdalena Vieja", "150121");
#
#
INSERT INTO `geo_distritos` VALUES ("1195", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1", "Barranca", "150201");
#
#
INSERT INTO `geo_distritos` VALUES ("1196", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1", "Paramonga", "150202");
#
#
INSERT INTO `geo_distritos` VALUES ("1197", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1", "Pativilca", "150203");
#
#
INSERT INTO `geo_distritos` VALUES ("1198", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1", "Supe", "150204");
#
#
INSERT INTO `geo_distritos` VALUES ("1199", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "1", "Supe Puerto", "150205");
#
#
INSERT INTO `geo_distritos` VALUES ("1200", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "2", "Cajatambo", "150301");
#
#
INSERT INTO `geo_distritos` VALUES ("1201", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "2", "Copa", "150302");
#
#
INSERT INTO `geo_distritos` VALUES ("1202", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "2", "Gorgor", "150303");
#
#
INSERT INTO `geo_distritos` VALUES ("1203", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "2", "Huancapon", "150304");
#
#
INSERT INTO `geo_distritos` VALUES ("1204", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "2", "Manas", "150305");
#
#
INSERT INTO `geo_distritos` VALUES ("1205", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Canta", "150401");
#
#
INSERT INTO `geo_distritos` VALUES ("1206", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Arahuay", "150402");
#
#
INSERT INTO `geo_distritos` VALUES ("1207", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Huamantanga", "150403");
#
#
INSERT INTO `geo_distritos` VALUES ("1208", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Huaros", "150404");
#
#
INSERT INTO `geo_distritos` VALUES ("1209", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Lachaqui", "150405");
#
#
INSERT INTO `geo_distritos` VALUES ("1210", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "3", "Santa Rosa De Quives", "150407");
#
#
INSERT INTO `geo_distritos` VALUES ("1211", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "San Vicente De Cañete", "150501");
#
#
INSERT INTO `geo_distritos` VALUES ("1212", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Asia", "150502");
#
#
INSERT INTO `geo_distritos` VALUES ("1213", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Calango", "150503");
#
#
INSERT INTO `geo_distritos` VALUES ("1214", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Cerro Azul", "150504");
#
#
INSERT INTO `geo_distritos` VALUES ("1215", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Coayllo", "150506");
#
#
INSERT INTO `geo_distritos` VALUES ("1216", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Imperial", "150507");
#
#
INSERT INTO `geo_distritos` VALUES ("1217", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Lunahuana", "150508");
#
#
INSERT INTO `geo_distritos` VALUES ("1218", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Mala", "150509");
#
#
INSERT INTO `geo_distritos` VALUES ("1219", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Nuevo Imperial", "150510");
#
#
INSERT INTO `geo_distritos` VALUES ("1220", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Pacaran", "150511");
#
#
INSERT INTO `geo_distritos` VALUES ("1221", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Quilmana", "150512");
#
#
INSERT INTO `geo_distritos` VALUES ("1222", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Santa Cruz De Flores", "150515");
#
#
INSERT INTO `geo_distritos` VALUES ("1223", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "4", "Zuñiga", "150516");
#
#
INSERT INTO `geo_distritos` VALUES ("1224", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Huaral", "150601");
#
#
INSERT INTO `geo_distritos` VALUES ("1225", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Atavillos Alto", "150602");
#
#
INSERT INTO `geo_distritos` VALUES ("1226", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Atavillos Bajo", "150603");
#
#
INSERT INTO `geo_distritos` VALUES ("1227", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Aucallama", "150604");
#
#
INSERT INTO `geo_distritos` VALUES ("1228", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Ihuari", "150606");
#
#
INSERT INTO `geo_distritos` VALUES ("1229", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Lampian", "150607");
#
#
INSERT INTO `geo_distritos` VALUES ("1230", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Pacaraos", "150608");
#
#
INSERT INTO `geo_distritos` VALUES ("1231", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "San Miguel De Acos", "150609");
#
#
INSERT INTO `geo_distritos` VALUES ("1232", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Santa Cruz De Andamarca", "150610");
#
#
INSERT INTO `geo_distritos` VALUES ("1233", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Sumbilca", "150611");
#
#
INSERT INTO `geo_distritos` VALUES ("1234", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "5", "Veintisiete De Noviembre", "150612");
#
#
INSERT INTO `geo_distritos` VALUES ("1235", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Matucana", "150701");
#
#
INSERT INTO `geo_distritos` VALUES ("1236", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Antioquia", "150702");
#
#
INSERT INTO `geo_distritos` VALUES ("1237", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Callahuanca", "150703");
#
#
INSERT INTO `geo_distritos` VALUES ("1238", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Carampoma", "150704");
#
#
INSERT INTO `geo_distritos` VALUES ("1239", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Chicla", "150705");
#
#
INSERT INTO `geo_distritos` VALUES ("1240", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Huachupampa", "150707");
#
#
INSERT INTO `geo_distritos` VALUES ("1241", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Huanza", "150708");
#
#
INSERT INTO `geo_distritos` VALUES ("1242", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Huarochiri", "150709");
#
#
INSERT INTO `geo_distritos` VALUES ("1243", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Lahuaytambo", "150710");
#
#
INSERT INTO `geo_distritos` VALUES ("1244", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Langa", "150711");
#
#
INSERT INTO `geo_distritos` VALUES ("1245", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Laraos", "150712");
#
#
INSERT INTO `geo_distritos` VALUES ("1246", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Mariatana", "150713");
#
#
INSERT INTO `geo_distritos` VALUES ("1247", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Ricardo Palma", "150714");
#
#
INSERT INTO `geo_distritos` VALUES ("1248", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Andres De Tupicocha", "150715");
#
#
INSERT INTO `geo_distritos` VALUES ("1249", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Bartolome", "150717");
#
#
INSERT INTO `geo_distritos` VALUES ("1250", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Damian", "150718");
#
#
INSERT INTO `geo_distritos` VALUES ("1251", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Juan De Iris", "150719");
#
#
INSERT INTO `geo_distritos` VALUES ("1252", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Juan De Tantaranche", "150720");
#
#
INSERT INTO `geo_distritos` VALUES ("1253", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Lorenzo De Quinti", "150721");
#
#
INSERT INTO `geo_distritos` VALUES ("1254", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Mateo", "150722");
#
#
INSERT INTO `geo_distritos` VALUES ("1255", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Mateo De Otao", "150723");
#
#
INSERT INTO `geo_distritos` VALUES ("1256", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Pedro De Casta", "150724");
#
#
INSERT INTO `geo_distritos` VALUES ("1257", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "San Pedro De Huancayre", "150725");
#
#
INSERT INTO `geo_distritos` VALUES ("1258", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Sangallaya", "150726");
#
#
INSERT INTO `geo_distritos` VALUES ("1259", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Santa Cruz De Cocachacra", "150727");
#
#
INSERT INTO `geo_distritos` VALUES ("1260", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Santa Eulalia", "150728");
#
#
INSERT INTO `geo_distritos` VALUES ("1261", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Santiago De Anchucaya", "150729");
#
#
INSERT INTO `geo_distritos` VALUES ("1262", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Santiago De Tuna", "150730");
#
#
INSERT INTO `geo_distritos` VALUES ("1263", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Santo Domingo De Los Olleros", "150731");
#
#
INSERT INTO `geo_distritos` VALUES ("1264", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "6", "Surco", "150732");
#
#
INSERT INTO `geo_distritos` VALUES ("1265", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Huacho", "150801");
#
#
INSERT INTO `geo_distritos` VALUES ("1266", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Ambar", "150802");
#
#
INSERT INTO `geo_distritos` VALUES ("1267", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Caleta De Carquin", "150803");
#
#
INSERT INTO `geo_distritos` VALUES ("1268", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Checras", "150804");
#
#
INSERT INTO `geo_distritos` VALUES ("1269", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Hualmay", "150805");
#
#
INSERT INTO `geo_distritos` VALUES ("1270", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Huaura", "150806");
#
#
INSERT INTO `geo_distritos` VALUES ("1271", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Paccho", "150808");
#
#
INSERT INTO `geo_distritos` VALUES ("1272", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Santa Leonor", "150809");
#
#
INSERT INTO `geo_distritos` VALUES ("1273", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Santa Maria", "150810");
#
#
INSERT INTO `geo_distritos` VALUES ("1274", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Sayan", "150811");
#
#
INSERT INTO `geo_distritos` VALUES ("1275", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "7", "Vegueta", "150812");
#
#
INSERT INTO `geo_distritos` VALUES ("1276", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Oyon", "150901");
#
#
INSERT INTO `geo_distritos` VALUES ("1277", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Andajes", "150902");
#
#
INSERT INTO `geo_distritos` VALUES ("1278", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Caujul", "150903");
#
#
INSERT INTO `geo_distritos` VALUES ("1279", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Cochamarca", "150904");
#
#
INSERT INTO `geo_distritos` VALUES ("1280", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Navan", "150905");
#
#
INSERT INTO `geo_distritos` VALUES ("1281", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "9", "Pachangara", "150906");
#
#
INSERT INTO `geo_distritos` VALUES ("1282", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Alis", "151002");
#
#
INSERT INTO `geo_distritos` VALUES ("1283", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Ayauca", "151003");
#
#
INSERT INTO `geo_distritos` VALUES ("1284", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Ayaviri", "151004");
#
#
INSERT INTO `geo_distritos` VALUES ("1285", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Azangaro", "151005");
#
#
INSERT INTO `geo_distritos` VALUES ("1286", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Cacra", "151006");
#
#
INSERT INTO `geo_distritos` VALUES ("1287", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Carania", "151007");
#
#
INSERT INTO `geo_distritos` VALUES ("1288", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Catahuasi", "151008");
#
#
INSERT INTO `geo_distritos` VALUES ("1289", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Chocos", "151009");
#
#
INSERT INTO `geo_distritos` VALUES ("1290", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Colonia", "151011");
#
#
INSERT INTO `geo_distritos` VALUES ("1291", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Hongos", "151012");
#
#
INSERT INTO `geo_distritos` VALUES ("1292", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Huampara", "151013");
#
#
INSERT INTO `geo_distritos` VALUES ("1293", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Huancaya", "151014");
#
#
INSERT INTO `geo_distritos` VALUES ("1294", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Huangascar", "151015");
#
#
INSERT INTO `geo_distritos` VALUES ("1295", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Huantan", "151016");
#
#
INSERT INTO `geo_distritos` VALUES ("1296", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Huañec", "151017");
#
#
INSERT INTO `geo_distritos` VALUES ("1297", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Lincha", "151019");
#
#
INSERT INTO `geo_distritos` VALUES ("1298", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Madean", "151020");
#
#
INSERT INTO `geo_distritos` VALUES ("1299", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Omas", "151022");
#
#
INSERT INTO `geo_distritos` VALUES ("1300", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Putinza", "151023");
#
#
INSERT INTO `geo_distritos` VALUES ("1301", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Quinches", "151024");
#
#
INSERT INTO `geo_distritos` VALUES ("1302", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Quinocay", "151025");
#
#
INSERT INTO `geo_distritos` VALUES ("1303", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "San Joaquin", "151026");
#
#
INSERT INTO `geo_distritos` VALUES ("1304", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "San Pedro De Pilas", "151027");
#
#
INSERT INTO `geo_distritos` VALUES ("1305", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Tanta", "151028");
#
#
INSERT INTO `geo_distritos` VALUES ("1306", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Tauripampa", "151029");
#
#
INSERT INTO `geo_distritos` VALUES ("1307", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Tomas", "151030");
#
#
INSERT INTO `geo_distritos` VALUES ("1308", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Tupe", "151031");
#
#
INSERT INTO `geo_distritos` VALUES ("1309", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Viñac", "151032");
#
#
INSERT INTO `geo_distritos` VALUES ("1310", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "10", "Vitis", "151033");
#
#
INSERT INTO `geo_distritos` VALUES ("1311", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Iquitos", "160101");
#
#
INSERT INTO `geo_distritos` VALUES ("1312", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Alto Nanay", "160102");
#
#
INSERT INTO `geo_distritos` VALUES ("1313", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Fernando Lores", "160103");
#
#
INSERT INTO `geo_distritos` VALUES ("1314", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Indiana", "160104");
#
#
INSERT INTO `geo_distritos` VALUES ("1315", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Las Amazonas", "160105");
#
#
INSERT INTO `geo_distritos` VALUES ("1316", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Mazan", "160106");
#
#
INSERT INTO `geo_distritos` VALUES ("1317", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Napo", "160107");
#
#
INSERT INTO `geo_distritos` VALUES ("1318", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Punchana", "160108");
#
#
INSERT INTO `geo_distritos` VALUES ("1319", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Putumayo", "160109");
#
#
INSERT INTO `geo_distritos` VALUES ("1320", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Torres Causana", "160110");
#
#
INSERT INTO `geo_distritos` VALUES ("1321", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "140", "Teniente Manuel Clavero", "160114");
#
#
INSERT INTO `geo_distritos` VALUES ("1322", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "141", "Yurimaguas", "160201");
#
#
INSERT INTO `geo_distritos` VALUES ("1323", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "141", "Balsapuerto", "160202");
#
#
INSERT INTO `geo_distritos` VALUES ("1324", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "141", "Jeberos", "160205");
#
#
INSERT INTO `geo_distritos` VALUES ("1325", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "141", "Teniente Cesar Lopez Rojas", "160211");
#
#
INSERT INTO `geo_distritos` VALUES ("1326", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "142", "Nauta", "160301");
#
#
INSERT INTO `geo_distritos` VALUES ("1327", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "142", "Parinari", "160302");
#
#
INSERT INTO `geo_distritos` VALUES ("1328", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "142", "Tigre", "160303");
#
#
INSERT INTO `geo_distritos` VALUES ("1329", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "142", "Trompeteros", "160304");
#
#
INSERT INTO `geo_distritos` VALUES ("1330", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "142", "Urarinas", "160305");
#
#
INSERT INTO `geo_distritos` VALUES ("1331", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "143", "Ramon Castilla", "160401");
#
#
INSERT INTO `geo_distritos` VALUES ("1332", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "143", "Pebas", "160402");
#
#
INSERT INTO `geo_distritos` VALUES ("1333", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "143", "Yavari", "160403");
#
#
INSERT INTO `geo_distritos` VALUES ("1334", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Requena", "160501");
#
#
INSERT INTO `geo_distritos` VALUES ("1335", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Alto Tapiche", "160502");
#
#
INSERT INTO `geo_distritos` VALUES ("1336", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Capelo", "160503");
#
#
INSERT INTO `geo_distritos` VALUES ("1337", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Emilio San Martin", "160504");
#
#
INSERT INTO `geo_distritos` VALUES ("1338", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Maquia", "160505");
#
#
INSERT INTO `geo_distritos` VALUES ("1339", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Puinahua", "160506");
#
#
INSERT INTO `geo_distritos` VALUES ("1340", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Saquena", "160507");
#
#
INSERT INTO `geo_distritos` VALUES ("1341", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Soplin", "160508");
#
#
INSERT INTO `geo_distritos` VALUES ("1342", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Tapiche", "160509");
#
#
INSERT INTO `geo_distritos` VALUES ("1343", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Jenaro Herrera", "160510");
#
#
INSERT INTO `geo_distritos` VALUES ("1344", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "144", "Yaquerana", "160511");
#
#
INSERT INTO `geo_distritos` VALUES ("1345", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "145", "Contamana", "160601");
#
#
INSERT INTO `geo_distritos` VALUES ("1346", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "145", "Inahuaya", "160602");
#
#
INSERT INTO `geo_distritos` VALUES ("1347", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "145", "Padre Marquez", "160603");
#
#
INSERT INTO `geo_distritos` VALUES ("1348", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "145", "Sarayacu", "160605");
#
#
INSERT INTO `geo_distritos` VALUES ("1349", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "145", "Vargas Guerra", "160606");
#
#
INSERT INTO `geo_distritos` VALUES ("1350", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "146", "Cahuapanas", "160702");
#
#
INSERT INTO `geo_distritos` VALUES ("1351", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "146", "Manseriche", "160703");
#
#
INSERT INTO `geo_distritos` VALUES ("1352", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "146", "Morona", "160704");
#
#
INSERT INTO `geo_distritos` VALUES ("1353", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "146", "Pastaza", "160705");
#
#
INSERT INTO `geo_distritos` VALUES ("1354", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "146", "Andoas", "160706");
#
#
INSERT INTO `geo_distritos` VALUES ("1355", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "147", "Tambopata", "170101");
#
#
INSERT INTO `geo_distritos` VALUES ("1356", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "147", "Inambari", "170102");
#
#
INSERT INTO `geo_distritos` VALUES ("1357", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "147", "Las Piedras", "170103");
#
#
INSERT INTO `geo_distritos` VALUES ("1358", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "147", "Laberinto", "170104");
#
#
INSERT INTO `geo_distritos` VALUES ("1359", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "148", "Manu", "170201");
#
#
INSERT INTO `geo_distritos` VALUES ("1360", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "148", "Fitzcarrald", "170202");
#
#
INSERT INTO `geo_distritos` VALUES ("1361", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "148", "Madre De Dios", "170203");
#
#
INSERT INTO `geo_distritos` VALUES ("1362", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "148", "Huepetuhe", "170204");
#
#
INSERT INTO `geo_distritos` VALUES ("1363", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "149", "Iñapari", "170301");
#
#
INSERT INTO `geo_distritos` VALUES ("1364", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "149", "Iberia", "170302");
#
#
INSERT INTO `geo_distritos` VALUES ("1365", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "149", "Tahuamanu", "170303");
#
#
INSERT INTO `geo_distritos` VALUES ("1366", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "150", "Moquegua", "180101");
#
#
INSERT INTO `geo_distritos` VALUES ("1367", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "150", "Carumas", "180102");
#
#
INSERT INTO `geo_distritos` VALUES ("1368", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "150", "Cuchumbaya", "180103");
#
#
INSERT INTO `geo_distritos` VALUES ("1369", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "150", "Samegua", "180104");
#
#
INSERT INTO `geo_distritos` VALUES ("1370", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "150", "Torata", "180106");
#
#
INSERT INTO `geo_distritos` VALUES ("1371", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Omate", "180201");
#
#
INSERT INTO `geo_distritos` VALUES ("1372", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Chojata", "180202");
#
#
INSERT INTO `geo_distritos` VALUES ("1373", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Coalaque", "180203");
#
#
INSERT INTO `geo_distritos` VALUES ("1374", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Ichuña", "180204");
#
#
INSERT INTO `geo_distritos` VALUES ("1375", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "La Capilla", "180205");
#
#
INSERT INTO `geo_distritos` VALUES ("1376", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Lloque", "180206");
#
#
INSERT INTO `geo_distritos` VALUES ("1377", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Matalaque", "180207");
#
#
INSERT INTO `geo_distritos` VALUES ("1378", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Puquina", "180208");
#
#
INSERT INTO `geo_distritos` VALUES ("1379", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Quinistaquillas", "180209");
#
#
INSERT INTO `geo_distritos` VALUES ("1380", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Ubinas", "180210");
#
#
INSERT INTO `geo_distritos` VALUES ("1381", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "151", "Yunga", "180211");
#
#
INSERT INTO `geo_distritos` VALUES ("1382", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "152", "Ilo", "180301");
#
#
INSERT INTO `geo_distritos` VALUES ("1383", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "152", "El Algarrobal", "180302");
#
#
INSERT INTO `geo_distritos` VALUES ("1384", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "152", "Pacocha", "180303");
#
#
INSERT INTO `geo_distritos` VALUES ("1385", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Chaupimarca", "190101");
#
#
INSERT INTO `geo_distritos` VALUES ("1386", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Huachon", "190102");
#
#
INSERT INTO `geo_distritos` VALUES ("1387", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Huariaca", "190103");
#
#
INSERT INTO `geo_distritos` VALUES ("1388", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Huayllay", "190104");
#
#
INSERT INTO `geo_distritos` VALUES ("1389", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Ninacaca", "190105");
#
#
INSERT INTO `geo_distritos` VALUES ("1390", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Pallanchacra", "190106");
#
#
INSERT INTO `geo_distritos` VALUES ("1391", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "San Francisco De Asis De Yarusyacan", "190108");
#
#
INSERT INTO `geo_distritos` VALUES ("1392", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Simon Bolivar", "190109");
#
#
INSERT INTO `geo_distritos` VALUES ("1393", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Ticlacayan", "190110");
#
#
INSERT INTO `geo_distritos` VALUES ("1394", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Tinyahuarco", "190111");
#
#
INSERT INTO `geo_distritos` VALUES ("1395", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "153", "Vicco", "190112");
#
#
INSERT INTO `geo_distritos` VALUES ("1396", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Yanahuanca", "190201");
#
#
INSERT INTO `geo_distritos` VALUES ("1397", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Chacayan", "190202");
#
#
INSERT INTO `geo_distritos` VALUES ("1398", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Goyllarisquizga", "190203");
#
#
INSERT INTO `geo_distritos` VALUES ("1399", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Paucar", "190204");
#
#
INSERT INTO `geo_distritos` VALUES ("1400", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "San Pedro De Pillao", "190205");
#
#
INSERT INTO `geo_distritos` VALUES ("1401", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Santa Ana De Tusi", "190206");
#
#
INSERT INTO `geo_distritos` VALUES ("1402", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "154", "Tapuc", "190207");
#
#
INSERT INTO `geo_distritos` VALUES ("1403", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Oxapampa", "190301");
#
#
INSERT INTO `geo_distritos` VALUES ("1404", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Chontabamba", "190302");
#
#
INSERT INTO `geo_distritos` VALUES ("1405", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Huancabamba", "190303");
#
#
INSERT INTO `geo_distritos` VALUES ("1406", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Palcazu", "190304");
#
#
INSERT INTO `geo_distritos` VALUES ("1407", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Pozuzo", "190305");
#
#
INSERT INTO `geo_distritos` VALUES ("1408", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Puerto Bermudez", "190306");
#
#
INSERT INTO `geo_distritos` VALUES ("1409", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "155", "Villa Rica", "190307");
#
#
INSERT INTO `geo_distritos` VALUES ("1410", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Piura", "200101");
#
#
INSERT INTO `geo_distritos` VALUES ("1411", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Castilla", "200104");
#
#
INSERT INTO `geo_distritos` VALUES ("1412", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Catacaos", "200105");
#
#
INSERT INTO `geo_distritos` VALUES ("1413", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Cura Mori", "200107");
#
#
INSERT INTO `geo_distritos` VALUES ("1414", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "El Tallan", "200108");
#
#
INSERT INTO `geo_distritos` VALUES ("1415", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "La Arena", "200109");
#
#
INSERT INTO `geo_distritos` VALUES ("1416", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Las Lomas", "200111");
#
#
INSERT INTO `geo_distritos` VALUES ("1417", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "156", "Tambo Grande", "200114");
#
#
INSERT INTO `geo_distritos` VALUES ("1418", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Ayabaca", "200201");
#
#
INSERT INTO `geo_distritos` VALUES ("1419", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Frias", "200202");
#
#
INSERT INTO `geo_distritos` VALUES ("1420", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Jilili", "200203");
#
#
INSERT INTO `geo_distritos` VALUES ("1421", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Montero", "200205");
#
#
INSERT INTO `geo_distritos` VALUES ("1422", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Pacaipampa", "200206");
#
#
INSERT INTO `geo_distritos` VALUES ("1423", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Paimas", "200207");
#
#
INSERT INTO `geo_distritos` VALUES ("1424", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Sapillica", "200208");
#
#
INSERT INTO `geo_distritos` VALUES ("1425", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Sicchez", "200209");
#
#
INSERT INTO `geo_distritos` VALUES ("1426", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "157", "Suyo", "200210");
#
#
INSERT INTO `geo_distritos` VALUES ("1427", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "Canchaque", "200302");
#
#
INSERT INTO `geo_distritos` VALUES ("1428", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "El Carmen De La Frontera", "200303");
#
#
INSERT INTO `geo_distritos` VALUES ("1429", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "Huarmaca", "200304");
#
#
INSERT INTO `geo_distritos` VALUES ("1430", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "Lalaquiz", "200305");
#
#
INSERT INTO `geo_distritos` VALUES ("1431", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "San Miguel De El Faique", "200306");
#
#
INSERT INTO `geo_distritos` VALUES ("1432", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "Sondor", "200307");
#
#
INSERT INTO `geo_distritos` VALUES ("1433", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "158", "Sondorillo", "200308");
#
#
INSERT INTO `geo_distritos` VALUES ("1434", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Chulucanas", "200401");
#
#
INSERT INTO `geo_distritos` VALUES ("1435", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Buenos Aires", "200402");
#
#
INSERT INTO `geo_distritos` VALUES ("1436", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Chalaco", "200403");
#
#
INSERT INTO `geo_distritos` VALUES ("1437", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "La Matanza", "200404");
#
#
INSERT INTO `geo_distritos` VALUES ("1438", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Morropon", "200405");
#
#
INSERT INTO `geo_distritos` VALUES ("1439", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Salitral", "200406");
#
#
INSERT INTO `geo_distritos` VALUES ("1440", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "San Juan De Bigote", "200407");
#
#
INSERT INTO `geo_distritos` VALUES ("1441", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Santa Catalina De Mossa", "200408");
#
#
INSERT INTO `geo_distritos` VALUES ("1442", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Santo Domingo", "200409");
#
#
INSERT INTO `geo_distritos` VALUES ("1443", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "159", "Yamango", "200410");
#
#
INSERT INTO `geo_distritos` VALUES ("1444", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Paita", "200501");
#
#
INSERT INTO `geo_distritos` VALUES ("1445", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Amotape", "200502");
#
#
INSERT INTO `geo_distritos` VALUES ("1446", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Arenal", "200503");
#
#
INSERT INTO `geo_distritos` VALUES ("1447", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Colan", "200504");
#
#
INSERT INTO `geo_distritos` VALUES ("1448", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "La Huaca", "200505");
#
#
INSERT INTO `geo_distritos` VALUES ("1449", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Tamarindo", "200506");
#
#
INSERT INTO `geo_distritos` VALUES ("1450", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "160", "Vichayal", "200507");
#
#
INSERT INTO `geo_distritos` VALUES ("1451", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Sullana", "200601");
#
#
INSERT INTO `geo_distritos` VALUES ("1452", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Ignacio Escudero", "200603");
#
#
INSERT INTO `geo_distritos` VALUES ("1453", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Lancones", "200604");
#
#
INSERT INTO `geo_distritos` VALUES ("1454", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Marcavelica", "200605");
#
#
INSERT INTO `geo_distritos` VALUES ("1455", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Miguel Checa", "200606");
#
#
INSERT INTO `geo_distritos` VALUES ("1456", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "161", "Querecotillo", "200607");
#
#
INSERT INTO `geo_distritos` VALUES ("1457", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "Pariñas", "200701");
#
#
INSERT INTO `geo_distritos` VALUES ("1458", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "El Alto", "200702");
#
#
INSERT INTO `geo_distritos` VALUES ("1459", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "La Brea", "200703");
#
#
INSERT INTO `geo_distritos` VALUES ("1460", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "Lobitos", "200704");
#
#
INSERT INTO `geo_distritos` VALUES ("1461", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "Los Organos", "200705");
#
#
INSERT INTO `geo_distritos` VALUES ("1462", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "162", "Mancora", "200706");
#
#
INSERT INTO `geo_distritos` VALUES ("1463", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Sechura", "200801");
#
#
INSERT INTO `geo_distritos` VALUES ("1464", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Bellavista De La Union", "200802");
#
#
INSERT INTO `geo_distritos` VALUES ("1465", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Bernal", "200803");
#
#
INSERT INTO `geo_distritos` VALUES ("1466", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Cristo Nos Valga", "200804");
#
#
INSERT INTO `geo_distritos` VALUES ("1467", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Vice", "200805");
#
#
INSERT INTO `geo_distritos` VALUES ("1468", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "163", "Rinconada Llicuar", "200806");
#
#
INSERT INTO `geo_distritos` VALUES ("1469", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Puno", "210101");
#
#
INSERT INTO `geo_distritos` VALUES ("1470", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Acora", "210102");
#
#
INSERT INTO `geo_distritos` VALUES ("1471", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Amantani", "210103");
#
#
INSERT INTO `geo_distritos` VALUES ("1472", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Atuncolla", "210104");
#
#
INSERT INTO `geo_distritos` VALUES ("1473", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Capachica", "210105");
#
#
INSERT INTO `geo_distritos` VALUES ("1474", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Chucuito", "210106");
#
#
INSERT INTO `geo_distritos` VALUES ("1475", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Coata", "210107");
#
#
INSERT INTO `geo_distritos` VALUES ("1476", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Mañazo", "210109");
#
#
INSERT INTO `geo_distritos` VALUES ("1477", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Paucarcolla", "210110");
#
#
INSERT INTO `geo_distritos` VALUES ("1478", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Pichacani", "210111");
#
#
INSERT INTO `geo_distritos` VALUES ("1479", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Plateria", "210112");
#
#
INSERT INTO `geo_distritos` VALUES ("1480", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Tiquillaca", "210114");
#
#
INSERT INTO `geo_distritos` VALUES ("1481", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "164", "Vilque", "210115");
#
#
INSERT INTO `geo_distritos` VALUES ("1482", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Achaya", "210202");
#
#
INSERT INTO `geo_distritos` VALUES ("1483", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Arapa", "210203");
#
#
INSERT INTO `geo_distritos` VALUES ("1484", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Asillo", "210204");
#
#
INSERT INTO `geo_distritos` VALUES ("1485", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Caminaca", "210205");
#
#
INSERT INTO `geo_distritos` VALUES ("1486", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Chupa", "210206");
#
#
INSERT INTO `geo_distritos` VALUES ("1487", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Jose Domingo Choquehuanca", "210207");
#
#
INSERT INTO `geo_distritos` VALUES ("1488", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Muñani", "210208");
#
#
INSERT INTO `geo_distritos` VALUES ("1489", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Potoni", "210209");
#
#
INSERT INTO `geo_distritos` VALUES ("1490", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Saman", "210210");
#
#
INSERT INTO `geo_distritos` VALUES ("1491", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "San Anton", "210211");
#
#
INSERT INTO `geo_distritos` VALUES ("1492", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "San Juan De Salinas", "210213");
#
#
INSERT INTO `geo_distritos` VALUES ("1493", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Santiago De Pupuja", "210214");
#
#
INSERT INTO `geo_distritos` VALUES ("1494", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "165", "Tirapata", "210215");
#
#
INSERT INTO `geo_distritos` VALUES ("1495", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Macusani", "210301");
#
#
INSERT INTO `geo_distritos` VALUES ("1496", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Ajoyani", "210302");
#
#
INSERT INTO `geo_distritos` VALUES ("1497", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Ayapata", "210303");
#
#
INSERT INTO `geo_distritos` VALUES ("1498", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Coasa", "210304");
#
#
INSERT INTO `geo_distritos` VALUES ("1499", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Corani", "210305");
#
#
INSERT INTO `geo_distritos` VALUES ("1500", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Crucero", "210306");
#
#
INSERT INTO `geo_distritos` VALUES ("1501", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Ituata", "210307");
#
#
INSERT INTO `geo_distritos` VALUES ("1502", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Ollachea", "210308");
#
#
INSERT INTO `geo_distritos` VALUES ("1503", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "San Gaban", "210309");
#
#
INSERT INTO `geo_distritos` VALUES ("1504", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "166", "Usicayos", "210310");
#
#
INSERT INTO `geo_distritos` VALUES ("1505", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Juli", "210401");
#
#
INSERT INTO `geo_distritos` VALUES ("1506", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Desaguadero", "210402");
#
#
INSERT INTO `geo_distritos` VALUES ("1507", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Huacullani", "210403");
#
#
INSERT INTO `geo_distritos` VALUES ("1508", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Kelluyo", "210404");
#
#
INSERT INTO `geo_distritos` VALUES ("1509", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Pisacoma", "210405");
#
#
INSERT INTO `geo_distritos` VALUES ("1510", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Pomata", "210406");
#
#
INSERT INTO `geo_distritos` VALUES ("1511", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "167", "Zepita", "210407");
#
#
INSERT INTO `geo_distritos` VALUES ("1512", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "168", "Ilave", "210501");
#
#
INSERT INTO `geo_distritos` VALUES ("1513", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "168", "Capazo", "210502");
#
#
INSERT INTO `geo_distritos` VALUES ("1514", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "168", "Pilcuyo", "210503");
#
#
INSERT INTO `geo_distritos` VALUES ("1515", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "168", "Conduriri", "210505");
#
#
INSERT INTO `geo_distritos` VALUES ("1516", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Huancane", "210601");
#
#
INSERT INTO `geo_distritos` VALUES ("1517", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Cojata", "210602");
#
#
INSERT INTO `geo_distritos` VALUES ("1518", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Huatasani", "210603");
#
#
INSERT INTO `geo_distritos` VALUES ("1519", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Inchupalla", "210604");
#
#
INSERT INTO `geo_distritos` VALUES ("1520", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Pusi", "210605");
#
#
INSERT INTO `geo_distritos` VALUES ("1521", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Rosaspata", "210606");
#
#
INSERT INTO `geo_distritos` VALUES ("1522", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Taraco", "210607");
#
#
INSERT INTO `geo_distritos` VALUES ("1523", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "169", "Vilque Chico", "210608");
#
#
INSERT INTO `geo_distritos` VALUES ("1524", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Cabanilla", "210702");
#
#
INSERT INTO `geo_distritos` VALUES ("1525", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Calapuja", "210703");
#
#
INSERT INTO `geo_distritos` VALUES ("1526", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Nicasio", "210704");
#
#
INSERT INTO `geo_distritos` VALUES ("1527", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Ocuviri", "210705");
#
#
INSERT INTO `geo_distritos` VALUES ("1528", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Paratia", "210707");
#
#
INSERT INTO `geo_distritos` VALUES ("1529", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "170", "Vilavila", "210710");
#
#
INSERT INTO `geo_distritos` VALUES ("1530", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Antauta", "210802");
#
#
INSERT INTO `geo_distritos` VALUES ("1531", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Cupi", "210803");
#
#
INSERT INTO `geo_distritos` VALUES ("1532", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Llalli", "210804");
#
#
INSERT INTO `geo_distritos` VALUES ("1533", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Macari", "210805");
#
#
INSERT INTO `geo_distritos` VALUES ("1534", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Nuñoa", "210806");
#
#
INSERT INTO `geo_distritos` VALUES ("1535", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Orurillo", "210807");
#
#
INSERT INTO `geo_distritos` VALUES ("1536", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "171", "Umachiri", "210809");
#
#
INSERT INTO `geo_distritos` VALUES ("1537", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "172", "Moho", "210901");
#
#
INSERT INTO `geo_distritos` VALUES ("1538", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "172", "Conima", "210902");
#
#
INSERT INTO `geo_distritos` VALUES ("1539", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "172", "Huayrapata", "210903");
#
#
INSERT INTO `geo_distritos` VALUES ("1540", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "172", "Tilali", "210904");
#
#
INSERT INTO `geo_distritos` VALUES ("1541", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "173", "Putina", "211001");
#
#
INSERT INTO `geo_distritos` VALUES ("1542", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "173", "Ananea", "211002");
#
#
INSERT INTO `geo_distritos` VALUES ("1543", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "173", "Pedro Vilca Apaza", "211003");
#
#
INSERT INTO `geo_distritos` VALUES ("1544", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "173", "Quilcapuncu", "211004");
#
#
INSERT INTO `geo_distritos` VALUES ("1545", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "173", "Sina", "211005");
#
#
INSERT INTO `geo_distritos` VALUES ("1546", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "174", "Juliaca", "211101");
#
#
INSERT INTO `geo_distritos` VALUES ("1547", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "174", "Cabanillas", "211103");
#
#
INSERT INTO `geo_distritos` VALUES ("1548", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "174", "Caracoto", "211104");
#
#
INSERT INTO `geo_distritos` VALUES ("1549", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Sandia", "211201");
#
#
INSERT INTO `geo_distritos` VALUES ("1550", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Cuyocuyo", "211202");
#
#
INSERT INTO `geo_distritos` VALUES ("1551", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Limbani", "211203");
#
#
INSERT INTO `geo_distritos` VALUES ("1552", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Patambuco", "211204");
#
#
INSERT INTO `geo_distritos` VALUES ("1553", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Phara", "211205");
#
#
INSERT INTO `geo_distritos` VALUES ("1554", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Quiaca", "211206");
#
#
INSERT INTO `geo_distritos` VALUES ("1555", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "San Juan Del Oro", "211207");
#
#
INSERT INTO `geo_distritos` VALUES ("1556", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Yanahuaya", "211208");
#
#
INSERT INTO `geo_distritos` VALUES ("1557", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "Alto Inambari", "211209");
#
#
INSERT INTO `geo_distritos` VALUES ("1558", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "175", "San Pedro De Putina Punco", "211210");
#
#
INSERT INTO `geo_distritos` VALUES ("1559", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Yunguyo", "211301");
#
#
INSERT INTO `geo_distritos` VALUES ("1560", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Anapia", "211302");
#
#
INSERT INTO `geo_distritos` VALUES ("1561", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Copani", "211303");
#
#
INSERT INTO `geo_distritos` VALUES ("1562", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Cuturapi", "211304");
#
#
INSERT INTO `geo_distritos` VALUES ("1563", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Ollaraya", "211305");
#
#
INSERT INTO `geo_distritos` VALUES ("1564", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Tinicachi", "211306");
#
#
INSERT INTO `geo_distritos` VALUES ("1565", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "176", "Unicachi", "211307");
#
#
INSERT INTO `geo_distritos` VALUES ("1566", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Moyobamba", "220101");
#
#
INSERT INTO `geo_distritos` VALUES ("1567", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Calzada", "220102");
#
#
INSERT INTO `geo_distritos` VALUES ("1568", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Habana", "220103");
#
#
INSERT INTO `geo_distritos` VALUES ("1569", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Jepelacio", "220104");
#
#
INSERT INTO `geo_distritos` VALUES ("1570", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Soritor", "220105");
#
#
INSERT INTO `geo_distritos` VALUES ("1571", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "177", "Yantalo", "220106");
#
#
INSERT INTO `geo_distritos` VALUES ("1572", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "178", "Alto Biavo", "220202");
#
#
INSERT INTO `geo_distritos` VALUES ("1573", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "178", "Bajo Biavo", "220203");
#
#
INSERT INTO `geo_distritos` VALUES ("1574", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "178", "Huallaga", "220204");
#
#
INSERT INTO `geo_distritos` VALUES ("1575", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "179", "San Jose De Sisa", "220301");
#
#
INSERT INTO `geo_distritos` VALUES ("1576", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "179", "Agua Blanca", "220302");
#
#
INSERT INTO `geo_distritos` VALUES ("1577", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "179", "San Martin", "220303");
#
#
INSERT INTO `geo_distritos` VALUES ("1578", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "179", "Shatoja", "220305");
#
#
INSERT INTO `geo_distritos` VALUES ("1579", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "Saposoa", "220401");
#
#
INSERT INTO `geo_distritos` VALUES ("1580", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "Alto Saposoa", "220402");
#
#
INSERT INTO `geo_distritos` VALUES ("1581", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "El Eslabon", "220403");
#
#
INSERT INTO `geo_distritos` VALUES ("1582", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "Piscoyacu", "220404");
#
#
INSERT INTO `geo_distritos` VALUES ("1583", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "Sacanche", "220405");
#
#
INSERT INTO `geo_distritos` VALUES ("1584", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "180", "Tingo De Saposoa", "220406");
#
#
INSERT INTO `geo_distritos` VALUES ("1585", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Lamas", "220501");
#
#
INSERT INTO `geo_distritos` VALUES ("1586", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Alonso De Alvarado", "220502");
#
#
INSERT INTO `geo_distritos` VALUES ("1587", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Barranquita", "220503");
#
#
INSERT INTO `geo_distritos` VALUES ("1588", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Caynarachi", "220504");
#
#
INSERT INTO `geo_distritos` VALUES ("1589", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Cuñumbuqui", "220505");
#
#
INSERT INTO `geo_distritos` VALUES ("1590", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Pinto Recodo", "220506");
#
#
INSERT INTO `geo_distritos` VALUES ("1591", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Rumisapa", "220507");
#
#
INSERT INTO `geo_distritos` VALUES ("1592", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "San Roque De Cumbaza", "220508");
#
#
INSERT INTO `geo_distritos` VALUES ("1593", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Shanao", "220509");
#
#
INSERT INTO `geo_distritos` VALUES ("1594", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Tabalosos", "220510");
#
#
INSERT INTO `geo_distritos` VALUES ("1595", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "181", "Zapatero", "220511");
#
#
INSERT INTO `geo_distritos` VALUES ("1596", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "182", "Juanjui", "220601");
#
#
INSERT INTO `geo_distritos` VALUES ("1597", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "182", "Campanilla", "220602");
#
#
INSERT INTO `geo_distritos` VALUES ("1598", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "182", "Huicungo", "220603");
#
#
INSERT INTO `geo_distritos` VALUES ("1599", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "182", "Pachiza", "220604");
#
#
INSERT INTO `geo_distritos` VALUES ("1600", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "182", "Pajarillo", "220605");
#
#
INSERT INTO `geo_distritos` VALUES ("1601", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Picota", "220701");
#
#
INSERT INTO `geo_distritos` VALUES ("1602", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Caspisapa", "220703");
#
#
INSERT INTO `geo_distritos` VALUES ("1603", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Pilluana", "220704");
#
#
INSERT INTO `geo_distritos` VALUES ("1604", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Pucacaca", "220705");
#
#
INSERT INTO `geo_distritos` VALUES ("1605", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "San Hilarion", "220707");
#
#
INSERT INTO `geo_distritos` VALUES ("1606", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Shamboyacu", "220708");
#
#
INSERT INTO `geo_distritos` VALUES ("1607", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Tingo De Ponasa", "220709");
#
#
INSERT INTO `geo_distritos` VALUES ("1608", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "183", "Tres Unidos", "220710");
#
#
INSERT INTO `geo_distritos` VALUES ("1609", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Rioja", "220801");
#
#
INSERT INTO `geo_distritos` VALUES ("1610", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Awajun", "220802");
#
#
INSERT INTO `geo_distritos` VALUES ("1611", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Elias Soplin Vargas", "220803");
#
#
INSERT INTO `geo_distritos` VALUES ("1612", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Nueva Cajamarca", "220804");
#
#
INSERT INTO `geo_distritos` VALUES ("1613", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Pardo Miguel", "220805");
#
#
INSERT INTO `geo_distritos` VALUES ("1614", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Posic", "220806");
#
#
INSERT INTO `geo_distritos` VALUES ("1615", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "San Fernando", "220807");
#
#
INSERT INTO `geo_distritos` VALUES ("1616", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Yorongos", "220808");
#
#
INSERT INTO `geo_distritos` VALUES ("1617", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "184", "Yuracyacu", "220809");
#
#
INSERT INTO `geo_distritos` VALUES ("1618", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Tarapoto", "220901");
#
#
INSERT INTO `geo_distritos` VALUES ("1619", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Alberto Leveau", "220902");
#
#
INSERT INTO `geo_distritos` VALUES ("1620", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Cacatachi", "220903");
#
#
INSERT INTO `geo_distritos` VALUES ("1621", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Chazuta", "220904");
#
#
INSERT INTO `geo_distritos` VALUES ("1622", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Chipurana", "220905");
#
#
INSERT INTO `geo_distritos` VALUES ("1623", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Huimbayoc", "220907");
#
#
INSERT INTO `geo_distritos` VALUES ("1624", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Juan Guerra", "220908");
#
#
INSERT INTO `geo_distritos` VALUES ("1625", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "La Banda De Shilcayo", "220909");
#
#
INSERT INTO `geo_distritos` VALUES ("1626", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Morales", "220910");
#
#
INSERT INTO `geo_distritos` VALUES ("1627", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Papaplaya", "220911");
#
#
INSERT INTO `geo_distritos` VALUES ("1628", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Sauce", "220913");
#
#
INSERT INTO `geo_distritos` VALUES ("1629", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "185", "Shapaja", "220914");
#
#
INSERT INTO `geo_distritos` VALUES ("1630", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "186", "Tocache", "221001");
#
#
INSERT INTO `geo_distritos` VALUES ("1631", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "186", "Nuevo Progreso", "221002");
#
#
INSERT INTO `geo_distritos` VALUES ("1632", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "186", "Polvora", "221003");
#
#
INSERT INTO `geo_distritos` VALUES ("1633", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "186", "Shunte", "221004");
#
#
INSERT INTO `geo_distritos` VALUES ("1634", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "186", "Uchiza", "221005");
#
#
INSERT INTO `geo_distritos` VALUES ("1635", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Tacna", "230101");
#
#
INSERT INTO `geo_distritos` VALUES ("1636", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Alto De La Alianza", "230102");
#
#
INSERT INTO `geo_distritos` VALUES ("1637", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Calana", "230103");
#
#
INSERT INTO `geo_distritos` VALUES ("1638", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Ciudad Nueva", "230104");
#
#
INSERT INTO `geo_distritos` VALUES ("1639", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Inclan", "230105");
#
#
INSERT INTO `geo_distritos` VALUES ("1640", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Pachia", "230106");
#
#
INSERT INTO `geo_distritos` VALUES ("1641", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Pocollay", "230108");
#
#
INSERT INTO `geo_distritos` VALUES ("1642", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Sama", "230109");
#
#
INSERT INTO `geo_distritos` VALUES ("1643", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "187", "Coronel Gregorio Albarracin Lanchipa", "230110");
#
#
INSERT INTO `geo_distritos` VALUES ("1644", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Candarave", "230201");
#
#
INSERT INTO `geo_distritos` VALUES ("1645", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Cairani", "230202");
#
#
INSERT INTO `geo_distritos` VALUES ("1646", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Camilaca", "230203");
#
#
INSERT INTO `geo_distritos` VALUES ("1647", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Curibaya", "230204");
#
#
INSERT INTO `geo_distritos` VALUES ("1648", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Huanuara", "230205");
#
#
INSERT INTO `geo_distritos` VALUES ("1649", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "188", "Quilahuani", "230206");
#
#
INSERT INTO `geo_distritos` VALUES ("1650", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "189", "Locumba", "230301");
#
#
INSERT INTO `geo_distritos` VALUES ("1651", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "189", "Ilabaya", "230302");
#
#
INSERT INTO `geo_distritos` VALUES ("1652", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "189", "Ite", "230303");
#
#
INSERT INTO `geo_distritos` VALUES ("1653", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Tarata", "230401");
#
#
INSERT INTO `geo_distritos` VALUES ("1654", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Heroes Albarracin", "230402");
#
#
INSERT INTO `geo_distritos` VALUES ("1655", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Estique", "230403");
#
#
INSERT INTO `geo_distritos` VALUES ("1656", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Estique-Pampa", "230404");
#
#
INSERT INTO `geo_distritos` VALUES ("1657", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Sitajara", "230405");
#
#
INSERT INTO `geo_distritos` VALUES ("1658", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Susapaya", "230406");
#
#
INSERT INTO `geo_distritos` VALUES ("1659", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Tarucachi", "230407");
#
#
INSERT INTO `geo_distritos` VALUES ("1660", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "190", "Ticaco", "230408");
#
#
INSERT INTO `geo_distritos` VALUES ("1661", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "Tumbes", "240101");
#
#
INSERT INTO `geo_distritos` VALUES ("1662", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "Corrales", "240102");
#
#
INSERT INTO `geo_distritos` VALUES ("1663", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "La Cruz", "240103");
#
#
INSERT INTO `geo_distritos` VALUES ("1664", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "Pampas De Hospital", "240104");
#
#
INSERT INTO `geo_distritos` VALUES ("1665", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "San Jacinto", "240105");
#
#
INSERT INTO `geo_distritos` VALUES ("1666", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "191", "San Juan De La Virgen", "240106");
#
#
INSERT INTO `geo_distritos` VALUES ("1667", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "192", "Zorritos", "240201");
#
#
INSERT INTO `geo_distritos` VALUES ("1668", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "192", "Casitas", "240202");
#
#
INSERT INTO `geo_distritos` VALUES ("1669", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "192", "Canoas De Punta Sal", "240203");
#
#
INSERT INTO `geo_distritos` VALUES ("1670", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "193", "Zarumilla", "240301");
#
#
INSERT INTO `geo_distritos` VALUES ("1671", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "193", "Aguas Verdes", "240302");
#
#
INSERT INTO `geo_distritos` VALUES ("1672", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "193", "Matapalo", "240303");
#
#
INSERT INTO `geo_distritos` VALUES ("1673", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "193", "Papayal", "240304");
#
#
INSERT INTO `geo_distritos` VALUES ("1674", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Calleria", "250101");
#
#
INSERT INTO `geo_distritos` VALUES ("1675", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Campoverde", "250102");
#
#
INSERT INTO `geo_distritos` VALUES ("1676", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Iparia", "250103");
#
#
INSERT INTO `geo_distritos` VALUES ("1677", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Masisea", "250104");
#
#
INSERT INTO `geo_distritos` VALUES ("1678", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Yarinacocha", "250105");
#
#
INSERT INTO `geo_distritos` VALUES ("1679", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Nueva Requena", "250106");
#
#
INSERT INTO `geo_distritos` VALUES ("1680", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "194", "Manantay", "250107");
#
#
INSERT INTO `geo_distritos` VALUES ("1681", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "195", "Raymondi", "250201");
#
#
INSERT INTO `geo_distritos` VALUES ("1682", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "195", "Sepahua", "250202");
#
#
INSERT INTO `geo_distritos` VALUES ("1683", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "195", "Tahuania", "250203");
#
#
INSERT INTO `geo_distritos` VALUES ("1684", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "195", "Yurua", "250204");
#
#
INSERT INTO `geo_distritos` VALUES ("1685", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "196", "Padre Abad", "250301");
#
#
INSERT INTO `geo_distritos` VALUES ("1686", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "196", "Irazola", "250302");
#
#
INSERT INTO `geo_distritos` VALUES ("1687", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "196", "Curimana", "250303");
#
#
INSERT INTO `geo_distritos` VALUES ("1688", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "197", "Purus", "250401");
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
  `geo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `geo_provincias` VALUES ("1", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Barranca", "14", "1502");
#
#
INSERT INTO `geo_provincias` VALUES ("2", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cajatambo", "14", "1503");
#
#
INSERT INTO `geo_provincias` VALUES ("3", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Canta", "14", "1504");
#
#
INSERT INTO `geo_provincias` VALUES ("4", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cañete", "14", "1505");
#
#
INSERT INTO `geo_provincias` VALUES ("5", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huaral", "14", "1506");
#
#
INSERT INTO `geo_provincias` VALUES ("6", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huarochirí", "14", "1507");
#
#
INSERT INTO `geo_provincias` VALUES ("7", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huaura", "14", "1508");
#
#
INSERT INTO `geo_provincias` VALUES ("8", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lima", "14", "1501");
#
#
INSERT INTO `geo_provincias` VALUES ("9", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Oyón", "14", "1509");
#
#
INSERT INTO `geo_provincias` VALUES ("10", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Yauyos", "14", "1510");
#
#
INSERT INTO `geo_provincias` VALUES ("198", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Callao", "14", "0701");
#
#
INSERT INTO `geo_provincias` VALUES ("14", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chachapoyas", "1", "0101");
#
#
INSERT INTO `geo_provincias` VALUES ("15", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Bagua", "1", "0102");
#
#
INSERT INTO `geo_provincias` VALUES ("16", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Bongara", "1", "0103");
#
#
INSERT INTO `geo_provincias` VALUES ("17", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Condorcanqui", "1", "0104");
#
#
INSERT INTO `geo_provincias` VALUES ("18", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Luya", "1", "0105");
#
#
INSERT INTO `geo_provincias` VALUES ("19", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Rodriguez De Mendoza", "1", "0106");
#
#
INSERT INTO `geo_provincias` VALUES ("20", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Utcubamba", "1", "0107");
#
#
INSERT INTO `geo_provincias` VALUES ("21", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huaraz", "2", "0201");
#
#
INSERT INTO `geo_provincias` VALUES ("22", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Aija", "2", "0202");
#
#
INSERT INTO `geo_provincias` VALUES ("23", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Antonio Raymondi", "2", "0203");
#
#
INSERT INTO `geo_provincias` VALUES ("24", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Asuncion", "2", "0204");
#
#
INSERT INTO `geo_provincias` VALUES ("25", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Bolognesi", "2", "0205");
#
#
INSERT INTO `geo_provincias` VALUES ("26", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Carhuaz", "2", "0206");
#
#
INSERT INTO `geo_provincias` VALUES ("27", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Carlos Fermin Fitzcarrald", "2", "0207");
#
#
INSERT INTO `geo_provincias` VALUES ("28", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Casma", "2", "0208");
#
#
INSERT INTO `geo_provincias` VALUES ("29", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Corongo", "2", "0209");
#
#
INSERT INTO `geo_provincias` VALUES ("30", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huari", "2", "0210");
#
#
INSERT INTO `geo_provincias` VALUES ("31", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huarmey", "2", "0211");
#
#
INSERT INTO `geo_provincias` VALUES ("32", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huaylas", "2", "0212");
#
#
INSERT INTO `geo_provincias` VALUES ("33", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Mariscal Luzuriaga", "2", "0213");
#
#
INSERT INTO `geo_provincias` VALUES ("34", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ocros", "2", "0214");
#
#
INSERT INTO `geo_provincias` VALUES ("35", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pallasca", "2", "0215");
#
#
INSERT INTO `geo_provincias` VALUES ("36", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pomabamba", "2", "0216");
#
#
INSERT INTO `geo_provincias` VALUES ("37", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Recuay", "2", "0217");
#
#
INSERT INTO `geo_provincias` VALUES ("38", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Santa", "2", "0218");
#
#
INSERT INTO `geo_provincias` VALUES ("39", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sihuas", "2", "0219");
#
#
INSERT INTO `geo_provincias` VALUES ("40", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Yungay", "2", "0220");
#
#
INSERT INTO `geo_provincias` VALUES ("41", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Abancay", "3", "0301");
#
#
INSERT INTO `geo_provincias` VALUES ("42", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Andahuaylas", "3", "0302");
#
#
INSERT INTO `geo_provincias` VALUES ("43", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Antabamba", "3", "0303");
#
#
INSERT INTO `geo_provincias` VALUES ("44", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Aymaraes", "3", "0304");
#
#
INSERT INTO `geo_provincias` VALUES ("45", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cotabambas", "3", "0305");
#
#
INSERT INTO `geo_provincias` VALUES ("46", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chincheros", "3", "0306");
#
#
INSERT INTO `geo_provincias` VALUES ("47", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Grau", "3", "0307");
#
#
INSERT INTO `geo_provincias` VALUES ("48", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Arequipa", "4", "0401");
#
#
INSERT INTO `geo_provincias` VALUES ("49", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Camana", "4", "0402");
#
#
INSERT INTO `geo_provincias` VALUES ("50", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Caraveli", "4", "0403");
#
#
INSERT INTO `geo_provincias` VALUES ("51", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Castilla", "4", "0404");
#
#
INSERT INTO `geo_provincias` VALUES ("52", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Caylloma", "4", "0405");
#
#
INSERT INTO `geo_provincias` VALUES ("53", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Condesuyos", "4", "0406");
#
#
INSERT INTO `geo_provincias` VALUES ("54", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Islay", "4", "0407");
#
#
INSERT INTO `geo_provincias` VALUES ("55", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "La Union", "4", "0408");
#
#
INSERT INTO `geo_provincias` VALUES ("56", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huamanga", "5", "0501");
#
#
INSERT INTO `geo_provincias` VALUES ("57", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cangallo", "5", "0502");
#
#
INSERT INTO `geo_provincias` VALUES ("58", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huanca Sancos", "5", "0503");
#
#
INSERT INTO `geo_provincias` VALUES ("59", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huanta", "5", "0504");
#
#
INSERT INTO `geo_provincias` VALUES ("60", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "La Mar", "5", "0505");
#
#
INSERT INTO `geo_provincias` VALUES ("61", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lucanas", "5", "0506");
#
#
INSERT INTO `geo_provincias` VALUES ("62", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Parinacochas", "5", "0507");
#
#
INSERT INTO `geo_provincias` VALUES ("63", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Paucar Del Sara Sara", "5", "0508");
#
#
INSERT INTO `geo_provincias` VALUES ("64", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sucre", "5", "0509");
#
#
INSERT INTO `geo_provincias` VALUES ("65", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Victor Fajardo", "5", "0510");
#
#
INSERT INTO `geo_provincias` VALUES ("66", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Vilcas Huaman", "5", "0511");
#
#
INSERT INTO `geo_provincias` VALUES ("67", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cajamarca", "6", "0601");
#
#
INSERT INTO `geo_provincias` VALUES ("68", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cajabamba", "6", "0602");
#
#
INSERT INTO `geo_provincias` VALUES ("69", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Celendin", "6", "0603");
#
#
INSERT INTO `geo_provincias` VALUES ("70", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chota", "6", "0604");
#
#
INSERT INTO `geo_provincias` VALUES ("71", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Contumaza", "6", "0605");
#
#
INSERT INTO `geo_provincias` VALUES ("72", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cutervo", "6", "0606");
#
#
INSERT INTO `geo_provincias` VALUES ("73", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Hualgayoc", "6", "0607");
#
#
INSERT INTO `geo_provincias` VALUES ("74", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Jaen", "6", "0608");
#
#
INSERT INTO `geo_provincias` VALUES ("75", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Ignacio", "6", "0609");
#
#
INSERT INTO `geo_provincias` VALUES ("76", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Marcos", "6", "0610");
#
#
INSERT INTO `geo_provincias` VALUES ("77", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Miguel", "6", "0611");
#
#
INSERT INTO `geo_provincias` VALUES ("78", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Pablo", "6", "0612");
#
#
INSERT INTO `geo_provincias` VALUES ("79", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Santa Cruz", "6", "0613");
#
#
INSERT INTO `geo_provincias` VALUES ("80", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Cusco", "7", "0801");
#
#
INSERT INTO `geo_provincias` VALUES ("81", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Acomayo", "7", "0802");
#
#
INSERT INTO `geo_provincias` VALUES ("82", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Anta", "7", "0803");
#
#
INSERT INTO `geo_provincias` VALUES ("83", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Calca", "7", "0804");
#
#
INSERT INTO `geo_provincias` VALUES ("84", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Canas", "7", "0805");
#
#
INSERT INTO `geo_provincias` VALUES ("85", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Canchis", "7", "0806");
#
#
INSERT INTO `geo_provincias` VALUES ("86", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chumbivilcas", "7", "0807");
#
#
INSERT INTO `geo_provincias` VALUES ("87", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Espinar", "7", "0808");
#
#
INSERT INTO `geo_provincias` VALUES ("88", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "La Convencion", "7", "0809");
#
#
INSERT INTO `geo_provincias` VALUES ("89", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Paruro", "7", "0810");
#
#
INSERT INTO `geo_provincias` VALUES ("90", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Paucartambo", "7", "0811");
#
#
INSERT INTO `geo_provincias` VALUES ("91", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Quispicanchi", "7", "0812");
#
#
INSERT INTO `geo_provincias` VALUES ("92", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Urubamba", "7", "0813");
#
#
INSERT INTO `geo_provincias` VALUES ("93", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huancavelica", "8", "0901");
#
#
INSERT INTO `geo_provincias` VALUES ("94", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Acobamba", "8", "0902");
#
#
INSERT INTO `geo_provincias` VALUES ("95", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Angaraes", "8", "0903");
#
#
INSERT INTO `geo_provincias` VALUES ("96", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Castrovirreyna", "8", "0904");
#
#
INSERT INTO `geo_provincias` VALUES ("97", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Churcampa", "8", "0905");
#
#
INSERT INTO `geo_provincias` VALUES ("98", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huaytara", "8", "0906");
#
#
INSERT INTO `geo_provincias` VALUES ("99", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tayacaja", "8", "0907");
#
#
INSERT INTO `geo_provincias` VALUES ("100", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huanuco", "9", "1001");
#
#
INSERT INTO `geo_provincias` VALUES ("101", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ambo", "9", "1002");
#
#
INSERT INTO `geo_provincias` VALUES ("102", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Dos De Mayo", "9", "1003");
#
#
INSERT INTO `geo_provincias` VALUES ("103", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huacaybamba", "9", "1004");
#
#
INSERT INTO `geo_provincias` VALUES ("104", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huamalies", "9", "1005");
#
#
INSERT INTO `geo_provincias` VALUES ("105", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Leoncio Prado", "9", "1006");
#
#
INSERT INTO `geo_provincias` VALUES ("106", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Marañon", "9", "1007");
#
#
INSERT INTO `geo_provincias` VALUES ("107", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pachitea", "9", "1008");
#
#
INSERT INTO `geo_provincias` VALUES ("108", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Puerto Inca", "9", "1009");
#
#
INSERT INTO `geo_provincias` VALUES ("109", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lauricocha", "9", "1010");
#
#
INSERT INTO `geo_provincias` VALUES ("110", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Yarowilca", "9", "1011");
#
#
INSERT INTO `geo_provincias` VALUES ("111", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ica", "10", "1101");
#
#
INSERT INTO `geo_provincias` VALUES ("112", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chincha", "10", "1102");
#
#
INSERT INTO `geo_provincias` VALUES ("113", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Nazca", "10", "1103");
#
#
INSERT INTO `geo_provincias` VALUES ("114", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Palpa", "10", "1104");
#
#
INSERT INTO `geo_provincias` VALUES ("115", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pisco", "10", "1105");
#
#
INSERT INTO `geo_provincias` VALUES ("116", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huancayo", "11", "1201");
#
#
INSERT INTO `geo_provincias` VALUES ("117", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Concepcion", "11", "1202");
#
#
INSERT INTO `geo_provincias` VALUES ("118", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chanchamayo", "11", "1203");
#
#
INSERT INTO `geo_provincias` VALUES ("119", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Jauja", "11", "1204");
#
#
INSERT INTO `geo_provincias` VALUES ("120", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Junin", "11", "1205");
#
#
INSERT INTO `geo_provincias` VALUES ("121", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Satipo", "11", "1206");
#
#
INSERT INTO `geo_provincias` VALUES ("122", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tarma", "11", "1207");
#
#
INSERT INTO `geo_provincias` VALUES ("123", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Yauli", "11", "1208");
#
#
INSERT INTO `geo_provincias` VALUES ("124", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chupaca", "11", "1209");
#
#
INSERT INTO `geo_provincias` VALUES ("125", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Trujillo", "12", "1301");
#
#
INSERT INTO `geo_provincias` VALUES ("126", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ascope", "12", "1302");
#
#
INSERT INTO `geo_provincias` VALUES ("127", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Bolivar", "12", "1303");
#
#
INSERT INTO `geo_provincias` VALUES ("128", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chepen", "12", "1304");
#
#
INSERT INTO `geo_provincias` VALUES ("129", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Julcan", "12", "1305");
#
#
INSERT INTO `geo_provincias` VALUES ("130", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Otuzco", "12", "1306");
#
#
INSERT INTO `geo_provincias` VALUES ("131", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pacasmayo", "12", "1307");
#
#
INSERT INTO `geo_provincias` VALUES ("132", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pataz", "12", "1308");
#
#
INSERT INTO `geo_provincias` VALUES ("133", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sanchez Carrion", "12", "1309");
#
#
INSERT INTO `geo_provincias` VALUES ("134", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Santiago De Chuco", "12", "1310");
#
#
INSERT INTO `geo_provincias` VALUES ("135", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Gran Chimu", "12", "1311");
#
#
INSERT INTO `geo_provincias` VALUES ("136", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Viru", "12", "1312");
#
#
INSERT INTO `geo_provincias` VALUES ("137", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chiclayo", "13", "1401");
#
#
INSERT INTO `geo_provincias` VALUES ("138", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ferreñafe", "13", "1402");
#
#
INSERT INTO `geo_provincias` VALUES ("139", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lambayeque", "13", "1403");
#
#
INSERT INTO `geo_provincias` VALUES ("140", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Maynas", "15", "1601");
#
#
INSERT INTO `geo_provincias` VALUES ("141", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Alto Amazonas", "15", "1602");
#
#
INSERT INTO `geo_provincias` VALUES ("142", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Loreto", "15", "1603");
#
#
INSERT INTO `geo_provincias` VALUES ("143", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Mariscal Ramon Castilla", "15", "1604");
#
#
INSERT INTO `geo_provincias` VALUES ("144", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Requena", "15", "1605");
#
#
INSERT INTO `geo_provincias` VALUES ("145", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ucayali", "15", "1606");
#
#
INSERT INTO `geo_provincias` VALUES ("146", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Datem Del Marañon", "15", "1607");
#
#
INSERT INTO `geo_provincias` VALUES ("147", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tambopata", "16", "1701");
#
#
INSERT INTO `geo_provincias` VALUES ("148", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Manu", "16", "1702");
#
#
INSERT INTO `geo_provincias` VALUES ("149", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tahuamanu", "16", "1703");
#
#
INSERT INTO `geo_provincias` VALUES ("150", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Mariscal Nieto", "17", "1801");
#
#
INSERT INTO `geo_provincias` VALUES ("151", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "General Sanchez Cerro", "17", "1802");
#
#
INSERT INTO `geo_provincias` VALUES ("152", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ilo", "17", "1803");
#
#
INSERT INTO `geo_provincias` VALUES ("153", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Pasco", "18", "1901");
#
#
INSERT INTO `geo_provincias` VALUES ("154", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Daniel Alcides Carrion", "18", "1902");
#
#
INSERT INTO `geo_provincias` VALUES ("155", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Oxapampa", "18", "1903");
#
#
INSERT INTO `geo_provincias` VALUES ("156", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Piura", "19", "2001");
#
#
INSERT INTO `geo_provincias` VALUES ("157", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Ayabaca", "19", "2002");
#
#
INSERT INTO `geo_provincias` VALUES ("158", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huancabamba", "19", "2003");
#
#
INSERT INTO `geo_provincias` VALUES ("159", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Morropon", "19", "2004");
#
#
INSERT INTO `geo_provincias` VALUES ("160", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Paita", "19", "2005");
#
#
INSERT INTO `geo_provincias` VALUES ("161", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sullana", "19", "2006");
#
#
INSERT INTO `geo_provincias` VALUES ("162", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Talara", "19", "2007");
#
#
INSERT INTO `geo_provincias` VALUES ("163", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sechura", "19", "2008");
#
#
INSERT INTO `geo_provincias` VALUES ("164", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Puno", "20", "2101");
#
#
INSERT INTO `geo_provincias` VALUES ("165", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Azangaro", "20", "2102");
#
#
INSERT INTO `geo_provincias` VALUES ("166", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Carabaya", "20", "2103");
#
#
INSERT INTO `geo_provincias` VALUES ("167", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Chucuito", "20", "2104");
#
#
INSERT INTO `geo_provincias` VALUES ("168", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "El Collao", "20", "2105");
#
#
INSERT INTO `geo_provincias` VALUES ("169", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huancane", "20", "2106");
#
#
INSERT INTO `geo_provincias` VALUES ("170", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lampa", "20", "2107");
#
#
INSERT INTO `geo_provincias` VALUES ("171", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Melgar", "20", "2108");
#
#
INSERT INTO `geo_provincias` VALUES ("172", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Moho", "20", "2109");
#
#
INSERT INTO `geo_provincias` VALUES ("173", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Antonio De Putina", "20", "2110");
#
#
INSERT INTO `geo_provincias` VALUES ("174", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Roman", "20", "2111");
#
#
INSERT INTO `geo_provincias` VALUES ("175", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Sandia", "20", "2112");
#
#
INSERT INTO `geo_provincias` VALUES ("176", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Yunguyo", "20", "2113");
#
#
INSERT INTO `geo_provincias` VALUES ("177", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Moyobamba", "21", "2201");
#
#
INSERT INTO `geo_provincias` VALUES ("178", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Bellavista", "21", "2202");
#
#
INSERT INTO `geo_provincias` VALUES ("179", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "El Dorado", "21", "2203");
#
#
INSERT INTO `geo_provincias` VALUES ("180", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Huallaga", "21", "2204");
#
#
INSERT INTO `geo_provincias` VALUES ("181", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Lamas", "21", "2205");
#
#
INSERT INTO `geo_provincias` VALUES ("182", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Mariscal Caceres", "21", "2206");
#
#
INSERT INTO `geo_provincias` VALUES ("183", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Picota", "21", "2207");
#
#
INSERT INTO `geo_provincias` VALUES ("184", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Rioja", "21", "2208");
#
#
INSERT INTO `geo_provincias` VALUES ("185", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "San Martin", "21", "2209");
#
#
INSERT INTO `geo_provincias` VALUES ("186", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tocache", "21", "2210");
#
#
INSERT INTO `geo_provincias` VALUES ("187", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tacna", "22", "2301");
#
#
INSERT INTO `geo_provincias` VALUES ("188", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Candarave", "22", "2302");
#
#
INSERT INTO `geo_provincias` VALUES ("189", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Jorge Basadre", "22", "2303");
#
#
INSERT INTO `geo_provincias` VALUES ("190", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tarata", "22", "2304");
#
#
INSERT INTO `geo_provincias` VALUES ("191", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Tumbes", "23", "2401");
#
#
INSERT INTO `geo_provincias` VALUES ("192", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Contralmirante Villar", "23", "2402");
#
#
INSERT INTO `geo_provincias` VALUES ("193", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Zarumilla", "23", "2403");
#
#
INSERT INTO `geo_provincias` VALUES ("194", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Coronel Portillo", "24", "2501");
#
#
INSERT INTO `geo_provincias` VALUES ("195", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Atalaya", "24", "2502");
#
#
INSERT INTO `geo_provincias` VALUES ("196", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Padre Abad", "24", "2503");
#
#
INSERT INTO `geo_provincias` VALUES ("197", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", "Purus", "24", "2504");
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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-11-12 18:36:19", "2016-11-13 12:19:49", NULL, "1", "1", NULL, "Página 1 de empresa", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2016-11-12 18:36:26", "2016-11-13 12:19:45", NULL, "1", "1", NULL, "Página 2 de empresa", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2016-11-12 18:36:31", "2016-11-13 12:19:32", NULL, "1", "1", NULL, "Página 3 de empresa", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("4", "2016-11-12 18:36:41", "2016-11-13 12:20:40", NULL, "1", "2", NULL, "Página 1 de servicios", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("5", "2016-11-12 18:36:47", "2016-11-13 12:20:33", NULL, "1", "2", NULL, "Página 2 de servicios", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("6", "2016-11-12 18:36:52", "2016-11-13 12:20:28", NULL, "1", "2", NULL, "Página 3 de servicios", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("7", "2016-11-12 18:36:58", "2016-11-13 12:20:13", NULL, "1", "2", NULL, "Página 4 de servicios", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("8", "2016-11-12 18:37:06", "2016-11-13 12:21:19", NULL, "1", "3", NULL, "Página 1 de asociados", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("9", "2016-11-12 18:37:12", "2016-11-13 12:21:04", NULL, "1", "3", NULL, "Página 2 de asociados", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("10", "2016-11-12 18:37:20", "2016-11-13 12:20:59", NULL, "1", "3", NULL, "Página 3 de asociados", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("11", "2016-11-12 18:38:04", "2016-11-13 11:32:41", NULL, "1", "4", NULL, "Servicios Inmobiliarios Internacionales", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("12", "2016-11-12 18:38:58", "2016-11-13 11:32:36", NULL, "1", "4", NULL, "Cuál es el Valor", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("13", "2016-11-12 18:39:44", "2016-11-13 11:45:51", NULL, "1", "4", NULL, "Nuestro Equipo", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("14", "2016-11-13 11:07:40", "2016-11-13 11:45:44", NULL, "1", "4", NULL, "Franquicias", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("15", "2016-11-13 11:07:49", "2016-11-13 11:45:37", NULL, "1", "4", NULL, "Políticas de Privacidad", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("16", "2016-11-13 11:08:07", "2016-11-13 11:45:32", NULL, "1", "4", NULL, "Terminos y Condiciones", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", "<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("17", "2016-11-13 16:07:09", "2016-11-13 16:28:55", NULL, "1", "4", NULL, "Bienvenidos a Great Houses", "Somos una emprea especializada en negocios inmobiliarios cuya oficina centrar se encuentra ubicada en el distrito de San Isidro, Lima - Perú\n\nPara nosotros una casa o un departamento, no son solamente un lugar para residir, sino también una expresión de la visión y estilo de vida de quien la habita, Great Houses entiendo esto. Nosotros utilizamos nuestra experiencia para que cada propiedad coincida con el comprador adecuado.", "<p>Somos una emprea especializada en negocios inmobiliarios cuya oficina centrar se encuentra ubicada en el distrito de San Isidro, Lima - Per&uacute;</p>\n\n<p>Para nosotros una casa o un departamento, no son solamente un lugar para residir, sino tambi&eacute;n una expresi&oacute;n de la visi&oacute;n y estilo de vida de quien la habita, Great Houses entiendo esto. Nosotros utilizamos nuestra experiencia para que cada propiedad coincida con el comprador adecuado.</p>\n\n<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\n", NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas_groups` VALUES ("1", "2016-11-12 18:34:48", "2016-11-12 18:35:11", NULL, "1", NULL, NULL, "emprea", "Empresa", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("2", "2016-11-12 18:34:48", "2016-11-12 18:35:18", NULL, "1", NULL, NULL, "servicios", "Servicios", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("3", "2016-11-12 18:34:48", "2016-11-12 18:35:26", NULL, "1", NULL, NULL, "asociados", "Asociados", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("4", "2016-11-12 18:35:42", "2016-11-14 07:58:05", NULL, "1", NULL, NULL, "otras", "Páginas Informativas", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("5", "2016-11-14 07:57:54", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "empresa", NULL, "1");
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
  `fecha` datetime DEFAULT '0000-00-00 00:00:00',
  `name` varchar(80) DEFAULT NULL,
  `text` longtext,
  `html` longtext,
  `page` int(10) NOT NULL DEFAULT '1',
  `operacion` varchar(80) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `area` float DEFAULT NULL,
  `num_rooms` varchar(8) DEFAULT NULL,
  `num_bathrooms` varchar(8) DEFAULT NULL,
  `html_acabados` longtext,
  `departamento` int(10) DEFAULT NULL,
  `provincia` int(10) DEFAULT NULL,
  `distrito` int(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `lat` varchar(80) DEFAULT NULL,
  `lon` varchar(80) DEFAULT NULL,
  `phone` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects` VALUES ("1", "2016-11-14 05:35:55", "2016-11-14 06:27:25", NULL, "1", NULL, "0000-00-00 00:00:00", "Departamento en Ate Salamanca De Monterrico", "URB SALAMANCA Departamento de Estreno en un edificio de 03 pisos. Consta de sala-comedor, baño de visita, cocina con area de lavanderia, cuarto principal con baño y closet, 02 dormitorios secundarios que comparten 01 baño. 03 dormitorios 01 departamento por piso Edificio sin ascensor Edificio en esquina, se encuentra en proceso de independización. Cerca a vía evitamiento y Jockey Plaza Excelente oportunidad! Zona tranquila cerca a parque.  ", "<p>URB SALAMANCA Departamento de Estreno en un edificio de 03 pisos. Consta de sala-comedor, ba&ntilde;o de visita, cocina con area de lavanderia, cuarto principal con ba&ntilde;o y closet, 02 dormitorios secundarios que comparten 01 ba&ntilde;o. 03 dormitorios 01 departamento por piso Edificio sin ascensor Edificio en esquina, se encuentra en proceso de independizaci&oacute;n. Cerca a v&iacute;a evitamiento y Jockey Plaza Excelente oportunidad! Zona tranquila cerca a parque.</p>\n\n<p><span style=\"color:rgb(71, 71, 71); font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;</span></p>\n", "1", "1", "1", "108000", "107", "3", "1", NULL, "14", "8", "3", "Av. La Encalada 969, Santiago de Surco, Lima", "-12.0727513", "-76.9856138", "992824408", "informes@great-houses.com");
#
#
INSERT INTO `projects` VALUES ("2", "2016-11-14 05:41:09", "2016-11-14 06:27:41", NULL, "1", NULL, "0000-00-00 00:00:00", "Local comercial en Surquillo Calera de la Merced", "Casa ideal para local comercial u oficina con excelente ubicación en zona céntrica entre Surco, Miraflores, Barranco, San Borja y San Luis, a solo 1 cuadra de la Av. Angamos. Cerca de centros comerciales Open y Real Plaza. Se vende el segundo y tercer piso más los aires. A. Terreno 126.00 m2, A. Construida. 192.00 m2 (sumados 2do y 3er piso) más azotea (4to piso). Zonificación C-Z. Parámetros para construir hasta 5 pisos. Distribución. 4 Dormitorios, 2.5 Baños, 1 baño incorporado, cocina con comedor de diario, Hall recibidor, sala comedor, sala de estar. Cuarto de servicio, baño de servicio y lavandería en azotea. Vista a la Calle, en buen estado. Rejas de seguridad. Cisterna de agua y tanque alto.", "<p><span style=\"color:rgb(71, 71, 71); font-family:helvetica neue,helvetica,arial,sans-serif\">Casa ideal para local comercial u oficina con excelente ubicaci&oacute;n en zona c&eacute;ntrica entre Surco, Miraflores, Barranco, San Borja y San Luis, a solo 1 cuadra de la Av. Angamos. Cerca de centros comerciales Open y Real Plaza. Se vende el segundo y tercer piso m&aacute;s los aires. A. Terreno 126.00 m2, A. Construida. 192.00 m2 (sumados 2do y 3er piso) m&aacute;s azotea (4to piso). Zonificaci&oacute;n C-Z. Par&aacute;metros para construir hasta 5 pisos. Distribuci&oacute;n. 4 Dormitorios, 2.5 Ba&ntilde;os, 1 ba&ntilde;o incorporado, cocina con comedor de diario, Hall recibidor, sala comedor, sala de estar. Cuarto de servicio, ba&ntilde;o de servicio y lavander&iacute;a en azotea. Vista a la Calle, en buen estado. Rejas de seguridad. Cisterna de agua y tanque alto.</span></p>\n", "1", "1", "2", "329000", "192", "0", "2", NULL, "14", "8", "41", "Av. La Encalada 969, Santiago de Surco, Lima", "-12.1162088", "-77.0067216", "992824408", "informes@great-houses.com");
#
#
INSERT INTO `projects` VALUES ("3", "2016-11-14 05:43:45", "2016-11-14 06:27:57", NULL, "1", NULL, "0000-00-00 00:00:00", "Departamento en San Isidro (Lima) Golf", "Elegante departamento de 220m2, 03 dormitorios, 2.5 baños, baño incorporado en dormitorio principal, cuarto de servicio, baño de servicio, lavandería, closet amplio en dormitorio principal, cocina con mesa de comedor de diario, sala comedor con vista al Golf y 02 estacionamientos lineales. Pisos de mármol en sala comedor y baños de mármol. Son 2 cuartos de servicio, pero uno es usado como deposito. Incluye lamparas chandelier, cocina, therma, campana y lavadora Vigilancia las 24 horas. Edificio con 02 ascensores directos. Ubicado en un 4to piso de un edificio de 20 pisos. Jardín dentro del edificio y sala de reuniones 01 departamento por piso. Mantenimiento: S/780.00 Soles Se acepta mascota pequeña.", "<p><span style=\"color:rgb(71, 71, 71); font-family:helvetica neue,helvetica,arial,sans-serif\">Elegante departamento de 220m2, 03 dormitorios, 2.5 ba&ntilde;os, ba&ntilde;o incorporado en dormitorio principal, cuarto de servicio, ba&ntilde;o de servicio, lavander&iacute;a, closet amplio en dormitorio principal, cocina con mesa de comedor de diario, sala comedor con vista al Golf y 02 estacionamientos lineales. Pisos de m&aacute;rmol en sala comedor y ba&ntilde;os de m&aacute;rmol. Son 2 cuartos de servicio, pero uno es usado como deposito. Incluye lamparas chandelier, cocina, therma, campana y lavadora Vigilancia las 24 horas. Edificio con 02 ascensores directos. Ubicado en un 4to piso de un edificio de 20 pisos. Jard&iacute;n dentro del edificio y sala de reuniones 01 departamento por piso. Mantenimiento: S/780.00 Soles Se acepta mascota peque&ntilde;a.</span></p>\n", "1", "2", "1", "1600", "220", "3", "2", NULL, "14", "8", "31", "Av. La Encalada 969, Santiago de Surco, Lima", "-12.098383", "-77.0506203", "992824408", "informes@great-houses.com");
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `projects_photos` VALUES ("1", "2016-11-14 05:47:19", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "profot_1479120439_400x300.jpg", NULL, "1");
#
#
INSERT INTO `projects_photos` VALUES ("2", "2016-11-14 05:47:25", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "profot_1479120445_400x300.jpg", NULL, "1");
#
#
INSERT INTO `projects_photos` VALUES ("3", "2016-11-14 05:47:32", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "profot_1479120452_300x400.jpg", NULL, "1");
#
#
INSERT INTO `projects_photos` VALUES ("4", "2016-11-14 05:47:40", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "profot_1479120460_300x400.jpg", NULL, "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2016-08-31 08:37:39", "0000-00-00 00:00:00", NULL, "1", "administrador", "greathouses", NULL);
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
