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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("13", "2016-05-27 01:02:25", "2016-05-27 19:34:16", NULL, "1", "1", NULL, "100", NULL, "1", "banbg_1464395656_1340x450.jpg", NULL, NULL, NULL, NULL, NULL);
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("14", "2016-05-27 01:02:42", "0000-00-00 00:00:00", NULL, "1", "1", NULL, "90", NULL, "1", "banbg_1464328962_1340x450.jpg", NULL, NULL, NULL, NULL, NULL);
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
INSERT INTO `links` VALUES ("1", "2015-09-22 16:34:33", "2015-09-22 16:34:33", NULL, "1", "10", "MEF", "http://apps2.mef.gob.pe/consulta-vfp-webapp/consultaExpediente.jspx;jsessionid=0", "1", "links_1442957673_629x167.jpg");
#
#
INSERT INTO `links` VALUES ("2", "2015-09-22 16:34:12", "2015-09-22 16:34:12", NULL, "1", "9", "OSCE", "http://portal.osce.gob.pe/osce/", "1", "links_1442957652_404x171.png");
#
#
INSERT INTO `links` VALUES ("3", "2015-09-22 16:33:55", "2015-09-22 16:33:55", NULL, "1", "8", "SUNAT", "http://www.sunat.gob.pe", "1", "links_1442957635_312x76.gif");
#
#
INSERT INTO `links` VALUES ("4", "2015-09-22 18:32:36", "2015-09-22 18:32:35", NULL, "1", "7", "BCP", "https://www.viabcp.com", "1", "links_1442964755_282x116.png");
#
#
INSERT INTO `links` VALUES ("5", "2015-09-22 18:32:22", "2015-09-22 18:32:22", NULL, "1", "6", "EL COMERCIO", "http://elcomercio.pe", "1", "links_1442964742_580x126.png");
#
#
INSERT INTO `links` VALUES ("6", "2015-09-22 16:32:33", "2015-09-22 16:32:33", NULL, "1", "5", "GESTION", "http://gestion.pe", "1", "links_1442957553_300x100.jpg");
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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-02-26 12:34:03", "2016-02-26 12:34:03", NULL, "1", NULL, NULL, "Bienvenido", NULL, "<p>Somos una empresa especializada en brindar asesor&iacute;a y consultor&iacute;a empresarial de negocios, integrada por un equipo de profesionales que garantizan un servicio eficiente y a la medida de las necesidades de nuestros clientes.</p>\n\n<p><strong>MISION</strong><br />\nObtener la confianza de nuestros clientes, brindando una asesor&iacute;a integral de calidad, en el &aacute;mbito empresarial, seg&uacute;n las necesidades de nuestros clientes.</p>\n\n<p><strong>VISION</strong><br />\nConsolidarnos con una firma l&iacute;der de asesoramiento a entidades y ejecutivos seg&uacute;n las necesidades del mercado.</p>\n", "pag_1456508043_216x150.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2016-03-03 22:00:32", "2016-05-27 14:51:09", NULL, "1", NULL, NULL, "Taxi Programado", "Es Puntual, Seguro y Confiable. Viaje libre de preocupaciones en la Ciudad de Lima. ¡ATENDEMOS LAS 24 HORAS! ", "<p>Taxi Programado, es Puntual, Seguro y Confiable. Viaje libre de preocupaciones en la Ciudad de Lima. &iexcl;ATENDEMOS LAS 24 HORAS!</p>\n\n<p>Usted viaja con m&aacute;xima seguridad ya que nuestro sistema de identificaci&oacute;n digital, nos permite monitorear el veh&iacute;culo durante todo el trayecto, desde nuestra base operativa.</p>\n", "pag_1464378645_190x126.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("23", "2016-05-27 15:17:02", "2016-05-27 15:27:41", NULL, "1", "1", "97", "Servicio ejecutivo y diplomático", "Nuestro servicio de Taxi Remisse para ejecutivos, pone énfasis en la atención personalizada del cliente Corporativo. En nuestra empresa tenemos muy presente que la puntualidad y el servicio exigente es imprescindible para ejecutivos y personas de negocios, es por eso que en TAXI PROGRAMADO tratamos de brindarle el más alto de servicio de calidad, brindándole a nuestros clientes la información necesaria que requieran, para que su viaje en nuestras unidades sea siempre de manera cómoda y muy segura.", "<p>Nuestro servicio de Taxi Remisse para ejecutivos, pone &eacute;nfasis en la atenci&oacute;n personalizada del cliente Corporativo. En nuestra empresa tenemos muy presente que la puntualidad y el servicio exigente es imprescindible para ejecutivos y personas de negocios, es por eso que en TAXI PROGRAMADO tratamos de brindarle el m&aacute;s alto de servicio de calidad, brind&aacute;ndole a nuestros clientes la informaci&oacute;n necesaria que requieran, para que su viaje en nuestras unidades sea siempre de manera c&oacute;moda y muy segura.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2016-03-03 10:12:38", "2016-05-27 14:57:58", NULL, "1", NULL, NULL, "Cobertura", "Tenemos cobertura en distintas partes de nuestro Lima - Perú, ponemos a su disposición nuestros servicios de Taxi Programado.", "<p>Tenemos cobertura en distintas partes de nuestro Lima - Per&uacute;, ponemos a su disposici&oacute;n nuestros servicios de Taxi Programado.</p>\n\n<p>Taxi en Lima Central - Taxi en San Isidro Lima - Taxi en Miraflores Lima - Taxi en Jes&uacute;s Mar&iacute;a Lima - Taxi en San Borja Lima - Taxi en La Molina Lima - Taxi en Surco Lima - Taxi en Chorrillos Lima - Taxi en La Victoria Lima - Taxi en Lince Lima - Taxi en Los Olivos Lima - Taxi en Magdalena Lima - Taxi en San Miguel Lima - Taxi en Chacarilla Lima.</p>\n", "pag_1464378876_190x126.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("4", "2016-02-26 11:40:21", "2016-05-27 20:51:30", NULL, "1", NULL, NULL, "Quienes Somos", NULL, "<p><strong>Taxi en Lima</strong><span style=\"color:rgb(0, 0, 0); font-family:tahoma,helvetica,sans-serif\">, es Taxi Programado y est&aacute; orientado a ser un transporte al servicio de las personas; donde se pretende que el viaje sea un break en que se tenga la tranquilidad de llegar al destino con la confianza de un servicio grato, seguro, eficiente y en pro del medio ambiente.&nbsp;</span><br />\n<br />\n<strong>Nuestra misi&oacute;n</strong><span style=\"color:rgb(0, 0, 0); font-family:tahoma,helvetica,sans-serif\">, con un alcance a corto plazo el de generar un cambio al modelo de transporte existente en la ciudad, preocup&aacute;ndose de cada uno de los actores del servicio, procurando mejorar siempre, los beneficios, la calidad y estabilidad laboral de cada uno de los miembros del equipo de Taxi en Lima, tu &quot;TAXI PROGRAMADO&quot;, donde todos se sientan parte de la empresa.&nbsp;</span></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("20", "2016-05-27 15:09:40", "2016-05-27 15:26:24", NULL, "1", "1", "100", "Servicio por días, por horas", "Usted podrá solicitar un vehículo por el tiempo que lo necesite, el cual estará a su entera disposición. Ideal para hacer trámites y otras actividades en que se necesite hacer varias paradas con espera.", "<p>Usted podr&aacute; solicitar un veh&iacute;culo por el tiempo que lo necesite, el cual estar&aacute; a su entera disposici&oacute;n. Ideal para hacer tr&aacute;mites y otras actividades en que se necesite hacer varias paradas con espera.</p>\n\n<p><strong><span style=\"color:#0065C8\">TARIFAS DE TAXI EN LIMA:</span></strong><br />\n<br />\n<span style=\"color:red\"><strong>TIPO DE MOVILIDAD: </strong></span></p>\n\n<p>- Camioneta DAIHATSU TERIOS</p>\n\n<p>- Auto TOYOYA YARIS / COROLA o NISAN TIIDA</p>\n\n<p>- Van Hyundai H1<br />\n<br />\n<span style=\"color:red\"><strong>SERVICIO POR HORA:</strong></span><br />\n<br />\nServicio Remisse <strong>dentro de la ciudad de Lima por hora</strong>, demanda un costo de:<br />\n<strong>S/. 45.00</strong> por hora y a partir de la cuarta hora es de S/. 35.00 por hora.<br />\nY para traslados <strong>fuera de la ciudad de Lima</strong>, demanda un costo de:<br />\n<strong>S/. 1.50</strong> por kil&oacute;metro.<br />\n<strong>+</strong> El costo de estacionamiento y peajes ser&aacute; pagada por el cliente.<br />\n<br />\n<span style=\"color:red\"><strong>SERVICIO POR DIA:</strong></span><br />\n<br />\nServicio Remisse <strong>dentro de la ciudad de Lima por d&iacute;a</strong>, demanda un costo de:<br />\n<strong>S/. 450.00</strong> por d&iacute;a, INCLUYE 12 HORAS DE SERVICIO.<br />\nY para traslados <strong>fuera de la ciudad de Lima</strong>, demanda un costo de:<br />\n<strong>S/. 1.00</strong> por kil&oacute;metro.<br />\n<strong>+</strong> El costo de estacionamiento y peajes ser&aacute; pagada por el cliente.<br />\n<br />\n*Si usted gusta, puede solicitar un presupuesto a modo espec&iacute;fico y realizaremos un descuento considerable.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("21", "2016-05-27 15:13:58", "0000-00-00 00:00:00", NULL, "1", "1", "99", "Taxi Remisse Aeropuerto Lima", "Realizamos traslados y recojo del Aeropuerto de Lima Perú las 24 horas del día.\nServicio en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.", "<p><strong>Realizamos traslados y recojo del Aeropuerto de Lima Per&uacute; las 24 horas del d&iacute;a.</strong><br />\nServicio en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.<br />\n<br />\nViaje libre de preocupaciones a trav&eacute;s de nuestro transporte privado.<br />\n<br />\nTodos nuestros veh&iacute;culos cumplen con el est&aacute;ndar de servicio que brindamos, autos / vans nuevos, sin logotipos ni medios publicitarios, con aire acondicionado y con amplia maletera.<br />\n<br />\n<small>Taxi Aeropuerto Lima - Taxi de San Isidro al aeropuerto Lima - Taxi de Miraflores al aeropuerto Lima - Taxi de Jes&uacute;s Mar&iacute;a al aeropuerto Lima - Taxi de San Borja al aeropuerto Lima - Taxi de La Molina al aeropuerto Lima - Taxi de Surco al aeropuerto Lima - Taxi de Chorrillos al aeropuerto Lima - Taxi de La Victoria al aeropuerto Lima - Taxi de Lince al aeropuerto Lima - Taxi de Los Olivos al aeropuerto Lima - Taxi de Magdalena al aeropuerto Lima - Taxi de San Miguel al aeropuerto Lima - Taxi de Chacarilla al aeropuerto Lima<br />\n<br />\nTaxi al aeropuerto de Lima - Taxi del aeropuerto de Lima a San Isidro - Taxi del aeropuerto de Lima a Miraflores - Taxi del aeropuerto de Lima a Jes&uacute;s Mar&iacute;a - Taxi del aeropuerto de Lima a San Borja - Taxi del aeropuerto de Lima a La Molina - Taxi del aeropuerto de Lima a Surco - Taxi del aeropuerto de Lima a Chorrillos - Taxi del aeropuerto de Lima a La Victoria - Taxi del aeropuerto de Lima a Lince - Taxi del aeropuerto de Lima a Los Olivos - Taxi del aeropuerto de Lima a Magdalena - Taxi del aeropuerto de Lima a San Miguel - Taxi del aeropuerto de Lima a Chacarilla</small></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("22", "2016-05-27 15:15:33", "2016-05-27 15:17:44", NULL, "1", "1", "98", "Traslados y recojos a la playa", "Durante todo el año contamos con los servicios regulares hacia el sur, también podrá tomar los servicios interplayas a la hora que prefiera durante el fin de semana.", "<p>Durante todo el a&ntilde;o contamos con los servicios regulares hacia el sur, tambi&eacute;n podr&aacute; tomar los servicios interplayas a la hora que prefiera durante el fin de semana.<br />\n<br />\nViaje libre de preocupaciones a trav&eacute;s de nuestro transporte privado.<br />\n<br />\nTodos nuestros veh&iacute;culos cumplen con el est&aacute;ndar de servicio que brindamos, autos / vans nuevos, sin logotipos ni medios publicitarios, con aire acondicionado y con amplia maletera.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("26", "2016-05-27 15:46:28", "0000-00-00 00:00:00", NULL, "1", "3", "100", "CONSEJOS CONTRA LA DELINCUENCIA", "Consejos contra la delincuencia", "<p><span style=\"color:red\"><strong>1- </strong></span>En la medida de lo posible evite la rutina: salir a la misma hora, pasar por los mismos lugares, siempre evite la rutina.<br />\n<br />\n<span style=\"color:red\"><strong>2-</strong></span> Mant&eacute;ngase atento y vigilante de todo lo que sucede a su alrededor; as&iacute; podr&aacute; captar las se&ntilde;ales de peligro y tener la oportunidad de huir del sitio y asi eveitarse problemas. Recuerde que la mejor manera de ganar una pelea es no tenerla, lleve un perfil bajo.<br />\n<br />\n<span style=\"color:red\"><strong>3-</strong></span> Cuando camine sobre las aceras, h&aacute;galo alejado del borde que da hacia la calle, as&iacute; evitar&aacute; los posibles arrebatos. Lleve bolsos u otras pertenencias de valor al frente contra su pecho y cubiertas por el antebrazo.<br />\n<br />\n<span style=\"color:red\"><strong>4-</strong></span> De noche, evite caminar sobre aceras poco iluminadas y con posibles sitios que puedan servir de escondites para delincuentes (&aacute;rboles grandes, arbustos de follaje tupido, muros bajos, etc.) Es preferible caminar esos trechos por el medio de la calle.<br />\n<br />\n<span style=\"color:red\"><strong>5-</strong></span> Cuando espere para abordar un transporte p&uacute;blico, siempre este pendiente de su entorno, muy atento a sus pertenencias, lo mejor es tener taxistas de confianza de esos que los llamamos por tel&eacute;fonos.<br />\n<br />\n<span style=\"color:red\"><strong>6-</strong></span> Cuando observe las vidrietas trate de utilizarlas como espejos y vea lo que sucede a sus espaldas. No permanezca absorto frente a uan exhibici&oacute;n, es preferible entrar al negocio y pedir que nos muestren lo que nos llam&oacute; la antenci&oacute;n.<br />\n<br />\n<span style=\"color:red\"><strong>7-</strong></span> Evite en lo posible las aglomeraciones, si observa algo anormal cruce la calle y al&eacute;jese del lugar.<br />\n<br />\n<span style=\"color:red\"><strong>8-</strong></span> Sea discreto en el uso de jollas y prendas de vestir que realcen su imagen de persona adinerada ya que esta es de gr&aacute;n atractivo para delicuentes en busca de objetos de valor. En lo posible, trate de pasar inadvertido, siempre un perfil bajo.<br />\n<br />\n<span style=\"color:red\"><strong>9-</strong></span> Desconf&iacute;e de los motociclistas, es especial de aquellos que conducen en direcci&oacute;n contraria a la permitida o que se vuelvan bruscamente hacia usted. Preste especial atenci&oacute;n a motos tripuladas por 2 personas (no importa el sexo). Recuerde que un gr&aacute;n n&uacute;mero de arrebatos y de atracos en la v&iacute;a p&uacute;blica son cometidos por tripulantes de motocicletas, sobre todo en cajeros y saliendo del banco.<br />\n<br />\n<span style=\"color:red\"><strong>10-</strong></span> De preferencia tome taxis formales. Antes de subir un taxi verifique que las manijas interiores y seguros se encuentren en buen estado.<br />\n<br />\n<span style=\"color:red\"><strong>11-</strong></span> Inmediatamente despu&eacute;s de subir a un taxi trabe todas las puertas, y verifique que la puerta delantera derecha (del acompa&ntilde;ante del conductor) tambi&eacute;n este con seguro.<br />\n<br />\n<span style=\"color:red\"><strong>12-</strong></span> No tome taxis con los vidrios polarizados, placas borrozas o sin placas.<br />\n<br />\n<span style=\"color:red\"><strong>13-</strong></span> Al salir de un banco o cajero autom&aacute;tico nunca suba al primer taxi que vea, los marcas est&aacute;n al acecho.<br />\n<br />\n<span style=\"color:red\"><strong>14-</strong></span> Siempre que utilice los servicios de un cajero autom&aacute;tico bancario, h&aacute;galo de prisa, memorice su clave secreta, evite consultar su saldo para luego hacer un retiro, tome su dinero, su tarjeta y el comprobante de la transacci&oacute;n y gu&aacute;rdelos en su cartera. No tiene ning&uacute;n sentido el contar su dinero a la vista de las dem&aacute;s personas. Evite hacer estas operaciones de noche o en sitios aislados sino esta acompa&ntilde;ado.<br />\n<br />\n<span style=\"color:red\"><strong>15-</strong></span> No preste atenci&oacute;n a desconocidos que le ofrezcan gangas, relojes, cadenas, billetes de loter&iacute;a o cualquier otra cosa que parezca de valor, muy frecuentemente hay una doble intenci&oacute;n del oferente, no sea usted la v&iacute;ctima.<br />\n<br />\n<span style=\"color:red\"><strong>16-</strong></span> Si va a cambiar moneda extranjera, h&aacute;galo solo en establecimientos formales, con garant&iacute;a.<br />\n<br />\n<span style=\"color:red\"><strong>17-</strong></span> Cuando ocurran determinadas circunstancias favorables a la autodefensa esta puede y debe ejercerse. Tenga en cuenta que el asaltante esta nervioso y es tambi&eacute;n vulnerable a una actitud resuelta y valerosa por parte de la persona que esta siendo atacada, en una respuesta violenta la v&iacute;ctima tiene todas las de perder.<br />\n<br />\n<span style=\"color:red\"><strong>18-</strong></span> Si por el contrario, usted es sorprendido y sometido, mantenga la calma y no ponga resistencia, no haga movimientos bruscos u otros que puedan hacer suponer al delincuente que usted empu&ntilde;ar&aacute; un arma o har&aacute; resistencia, los delincuentes van dispuestos a todo incluso a matar.<br />\n<br />\n<span style=\"color:red\"><strong>19-</strong></span> Jam&aacute;s act&uacute;e con el factor sorpresa en su contra. Manifieste su deseo de cooperar; ninguna posesi&oacute;n material a&uacute;n teniendo un alto valor sentimental, tiene el valor de su vida o la de los suyos; no discuta y entr&eacute;guelas. No mienta si le preguntan algo que posteriormente puedan verificar. Tenga en mente algo muy importante, el criminal est&aacute; acostumbrado a la violencia, usted no.<br />\n<br />\n<span style=\"color:red\"><strong>20-</strong></span> Si de todos modos es v&iacute;ctima de un delito, jam&aacute;s act&uacute;e con violencia, siempre realice la denuncia respectiva, y colabore en todo momento con las auotridades de seguridad p&uacute;blica.<br />\n<br />\n<span style=\"color:red\"><strong>21-</strong></span> Jam&aacute;s converce asuntos sensibles en lugares p&uacute;blicos, hable con sus vecinos la seguridad grupal es efectiva.<br />\n<br />\n<span style=\"color:red\"><strong>22-</strong></span> Es importante actualizar los datos de sus empleados de servicio y empadronar a los vigilantes informales.<br />\n<br />\n<span style=\"color:red\"><strong>23-</strong></span> Converse en familia temas de seguridad preventiva.<br />\n<br />\n<strong><span style=\"color:red\">24-</span></strong> Es importante tener una clave que solo la conozcan padres e hijos.<br />\n<br />\n<span style=\"color:red\"><strong>25-</strong></span> En una ciudad medianamente insegura no sea tan confiado.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("15", "2016-05-27 14:01:55", "2016-05-27 19:37:55", NULL, "1", "4", "100", "TAXI DE SAN ISIDRO AL AEROPUERTO", "Taxi de San Isidro al aeropuerto o Taxi del aeropuerto a San Isidro. Precio S/. 50.00", "<p><strong><span style=\"color:#0065C8\">Precio:</span></strong> <strong><span style=\"color:red\">S/. 50.00</span></strong><br />\nServicio de traslados y recojo del Aeropuerto de Lima Per&uacute;, en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.</p>\n\n<p>Haga su reserva escribi&eacute;ndonos al correo: reservas@taxienlima.com o ingrese al siguiente formulario de <a href=\"http://taxienlima.com/haga-su-reserva\"><span style=\"color:red\"><strong>reservas</strong></span></a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("16", "2016-05-27 14:11:05", "2016-05-27 19:37:39", NULL, "1", "4", "99", "TAXI DE MIRAFLORES AL AEROPUERTO", "Taxi de Miraflores al aeropuerto o Taxi del aeropuerto a Miraflores. Precio: S/. 55.00", "<p><strong><span style=\"color:#0065C8\">Precio:</span></strong> <strong><span style=\"color:red\">S/. 55.00</span></strong><br />\nServicio de traslados y recojo del Aeropuerto de Lima Per&uacute;, en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.</p>\n\n<p>Haga su reserva escribi&eacute;ndonos al correo: reservas@taxienlima.com o ingrese al siguiente formulario de <a href=\"http://taxienlima.com/haga-su-reserva\"><span style=\"color:red\"><strong>reservas</strong></span></a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("17", "2016-05-27 14:28:06", "2016-05-27 19:37:22", NULL, "1", "4", "98", "TAXI DE BARRANCO AL AEROPUERTO", "Taxi de Barranco al aeropuerto o Taxi del aeropuerto a Barranco. Precio: S/. 60.00", "<p><strong><span style=\"color:#0065C8\">Precio:</span></strong> <strong><span style=\"color:red\">S/. 60.00</span></strong><br />\nServicio de traslados y recojo del Aeropuerto de Lima Per&uacute;, en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.</p>\n\n<p>Haga su reserva escribi&eacute;ndonos al correo: reservas@taxienlima.com o ingrese al siguiente formulario de <a href=\"http://taxienlima.com/haga-su-reserva\"><span style=\"color:red\"><strong>reservas</strong></span></a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("18", "2016-05-27 14:34:15", "2016-05-27 19:37:05", NULL, "1", "4", "97", "TAXI DE LA MOLINA AL AEROPUERTO", "Taxi de La Molina al aeropuerto o Taxi del aeropuerto a La Molina. Precio: S/. 75.00", "<p><strong><span style=\"color:#0065C8\">Precio:</span></strong> <strong><span style=\"color:red\">S/. 75.00</span></strong><br />\nServicio de traslados y recojo del Aeropuerto de Lima Per&uacute;, en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.</p>\n\n<p>Haga su reserva escribi&eacute;ndonos al correo: reservas@taxienlima.com o ingrese al siguiente formulario de <a href=\"http://taxienlima.com/haga-su-reserva\"><span style=\"color:red\"><strong>reservas</strong></span></a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("19", "2016-05-27 14:40:52", "2016-05-27 19:36:43", NULL, "1", "4", "96", "TAXI DE CHORRILLOS AL  AEROPUERTO", "Taxi de Chorrillos al aeropuerto o Taxi del aeropuerto a Chorrillos. Precio: S/. 65.00", "<p><strong><span style=\"color:#0065C8\">Precio:</span></strong> <strong><span style=\"color:red\">S/. 65.00</span></strong><br />\nServicio de traslados y recojo del Aeropuerto de Lima Per&uacute;, en la cual nuestra empresa previa coordinacion del cliente contratador, recoje y lleva del aeropuerto y viceversa al pasajero a un hotel o domicilio solicitado en el servicio.</p>\n\n<p>Haga su reserva escribi&eacute;ndonos al correo: reservas@taxienlima.com o ingrese al siguiente formulario de <a href=\"http://taxienlima.com/haga-su-reserva\"><span style=\"color:red\"><strong>reservas</strong></span></a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("24", "2016-05-27 15:19:13", "0000-00-00 00:00:00", NULL, "1", "1", "96", "Servicio para eventos", "Siéntase seguro en reuniones, cenas de negocios, convenciones, desde hoteles hasta locales públicos.", "<p><strong>Eventos Corporativos</strong><br />\nSi&eacute;ntase seguro en reuniones, cenas de negocios, convenciones, desde hoteles hasta locales p&uacute;blicos.<br />\n<br />\n<strong>Compromisos personales</strong><br />\nBrindamos servicio en eventos privados, shows, conciertos, salidas con amigos. Divi&eacute;rtase sin preocupaciones.<br />\n<br />\n<strong>Eventos sociales juveniles</strong><br />\nQue mejor que quedarnos en casa con la tranquilidad de que nuestros hijos adolescentes regresaran seguros a casa, sin manejar y a la hora pactada. (firma de autorizaci&oacute;n necesaria)<br />\n<br />\n<strong>Evento Matrimonio</strong><br />\n<br />\nPaquete de Auto Novia<br />\n- Servicio por 06 horas a disposici&oacute;n<br />\n- Decoraci&oacute;n del auto con flores (puertas)<br />\n- Recojo desde la casa de la novia<br />\n- Locaci&oacute;n de fotos novia<br />\n- Traslado Iglesia<br />\n- Paseo de los novios<br />\n- Locaci&oacute;n para sesi&oacute;n fotos esposos<br />\n- Traslado a la casa / local de la fiesta<br />\n- Adicional * retorno de los esposos<br />\n<br />\nTraslado del Novio<br />\nTraslado desde la casa al novio a la iglesia<br />\n<br />\nTraslados de los familiares en van<br />\n- Van Hyundai H1<br />\n- Traslado desde la casa de los familiares a la iglesia<br />\n- Traslado de la iglesia a la casa &ndash; local<br />\n- Recojo desde el local a su domicilio</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("25", "2016-05-27 15:24:29", "0000-00-00 00:00:00", NULL, "1", "1", "95", "Servicio de courier documentario", "Si necesitas entregar un paquete, factura o algún otro encargo, puedes contar con TAXI REMISSE LIMA para realizar la tarea a tiempo y de manera eficiente.", "<p>Si necesitas entregar un paquete, factura o alg&uacute;n otro encargo, puedes contar con TAXI EN LIMA, su TAXI PROGRAMADO para realizar la tarea a tiempo y de manera eficiente.<br />\n<br />\nSomos una empresa que brinda el servicio de transporte de carga y distribuci&oacute;n de env&iacute;os urgentes a empresas operadores log&iacute;sticos y Courier que buscan soluciones integrales para el traslado de sus bienes.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("27", "2016-05-27 19:49:15", "2016-05-27 19:54:19", NULL, "1", "3", "99", "SI TOMAS NO MANEJES", "Si tomas, no manejes llama a TAXI PROGRAMADO, llega seguro a tu destino.", "<p>Si tomas, no manejes llama a TAXI PROGRAMADO, llega seguro a tu destino.</p>\n\n<p>TAXI PROGRAMADO es una empresa creada para asistirlo oportunamente en la conducci&oacute;n segura y confiale de su veh&iacute;culo, con choferes altamente calificados para evitar asi caer en falta con el nuevo Reglamento de Tr&aacute;nsito, estando a su disposici&oacute;n las 24 horas, los 365 d&iacute;as del a&ntilde;o.</p>\n\n<p>Asimismo, brindamos servicio de alquiler de vans con chofer y traslados al aeropuerto.</p>\n\n<p><strong><span style=\"color:red\">LLAMENOS LAS 24 HORAS</span> AL <span style=\"color:#0065C8\">959841675</span></strong></p>\n\n<p><strong>TENGA PRESENTE:</strong></p>\n\n<p>- POR MANEJAR EN ESTADO DE EBRIEDAD, LE COSTARA UNA MULTA DE S/. 1,775.00 con la retenci&oacute;n del veh&iacute;culo y de la licencia de conducir.</p>\n\n<p>- POR MANEJAR EN ESTADO DE EBRIEDAD Y CAUSAR ACCIDENTE, LE COSTARA S/. 3,550.00 + p&eacute;rdida del brevete y la inhabilitaci&oacute;n definitiva para obtener una nueva licencia adem&aacute;s de la retenci&oacute;n del veh&iacute;culo.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("28", "2016-05-27 20:02:18", "2016-05-27 20:03:18", NULL, "1", "3", "98", "REGLAMENTO DE TRANSITO", "Reglamento de tránsito", "<p><a href=\"http://taxienlima.com/reglamento_de_transito.pdf\" target=\"_blank\">Ver reglamento de tr&aacute;nsito</a></p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("29", "2016-05-27 20:20:18", "0000-00-00 00:00:00", NULL, "1", "3", "97", "CONSEJOS PARA TAXISTAS", "Consejos para taxistas", "<p><strong><span style=\"color:red\">1.</span></strong> No llevar &quot;pasajeros&quot; a zonas consideradas de alto riesgo o peligrosas, asimismo evite acudir a sitios muy alejados de los conos de la ciudad.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>2.</strong></span> Jam&aacute;s lleve &quot;pasajeros&quot; con evidentes s&iacute;ntomas de drogadicci&oacute;n o en estado et&iacute;lico.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>3.</strong></span> Este atento cuando los &quot;pasajeros&quot; le indiquen una direcci&oacute;n falsa o inexistente de alg&uacute;n punto de la ciudad. Es importante portar una gu&iacute;a de calles o un GPS.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>4.</strong></span> No aborde pasajeros a su veh&iacute;culo cuando estos discuten sobre el lugar de destino o entren en contradicciones, es mejor retirarse.<br />\n&nbsp;<br />\n<strong><span style=\"color:red\">5.</span></strong> Si en pleno recorrido sus &quot;pasajeros&quot; est&aacute;n realizando se&ntilde;as o nota cualquier actitud sospechosa entre ellos, trate de dirigirse de forma inmediata a una dependencia o unidad policial.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>6.</strong></span> Cuando suban dos &quot;pasajeros&quot; no permita que el va atr&aacute;s lo haga de su lado, indic&aacute;ndole que son por medidas de seguridad.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>7.</strong></span> Sospeche cuando el &quot;pasajero&quot; en forma intempestiva le indique cambiar la ruta del lugar antes pactado.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>8.</strong></span> Si el &quot;pasajero&quot; en pleno recorrido le indica subir a otra persona no lo haga, se&ntilde;al&aacute;ndole que es por motivo de seguridad.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>9.</strong></span> No acepte de ning&uacute;n &quot;pasajero&quot; golosinas, comidas o bebidas podr&iacute;an estar con drogas o somn&iacute;feros.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>10.</strong></span> Despu&eacute;s de las 7:00 pm redoblar sus precauciones de prevenci&oacute;n.<br />\n&nbsp;<br />\n<strong><span style=\"color:red\">11.</span></strong> Si ya se encuentra en un proceso de robo o asalto jam&aacute;s opte por una respuesta violenta, su vida est&aacute; primero.<br />\n&nbsp;<br />\n<span style=\"color:red\"><strong>12.</strong></span> Este atento a bultos o paquetes sospechosos de los &quot;pasajeros&quot;.</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("30", "2016-05-27 20:25:39", "0000-00-00 00:00:00", NULL, "1", "3", "96", "TIPS PARA SER UN TAXISTA EXITOSO", "Tips para ser un taxista exitoso.", "<p><span style=\"color:red\"><strong>1- </strong></span>Siempre traiga consigo dinero suficiente en monedas y billetes de diferentes denominaciones para que pueda dar cambio a los clientes.</p>\n\n<p><span style=\"color:red\"><strong>2-</strong></span> Aunque usted es due&ntilde;o de su tiempo al trabajar con un taxi, eso no significa que tiene todo el tiempo que desee libre. Tiene que ser consciente y aprovechar al m&aacute;ximo sus horas de trabajo , especialmente si el taxi es rentado, ya que podr&iacute;a atrasarse con el pago de la renta. Si la deuda se hace muy grande, el due&ntilde;o del taxi podr&iacute;a pedirle que se lo regrese y ser&iacute;a el fin de su negocio.</p>\n\n<p><span style=\"color:red\"><strong>3- </strong></span>Cuando sea un taxista exitoso, ahorre para comprar otro taxi y podr&iacute;a ir formando su propia flota de taxis. Podr&iacute;a convertirse en un empresario del transporte.</p>\n\n<p>Suerte!</p>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("31", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "TERMINOS Y CONDICIONES", NULL, NULL, NULL, NULL, "1");
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
INSERT INTO `paginas_groups` VALUES ("1", "2016-02-24 16:13:46", "2016-02-24 16:14:05", NULL, "1", NULL, NULL, "servicios", "Servicios", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("2", "2016-03-01 21:52:36", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "notas", NULL, "1");
#
#
INSERT INTO `paginas_groups` VALUES ("3", "2016-03-01 21:52:52", "0000-00-00 00:00:00", NULL, "1", NULL, NULL, "notas-interes", "Notas de interés", "1");
#
#
INSERT INTO `paginas_groups` VALUES ("4", "2016-05-26 22:24:19", "0000-00-00 00:00:00", NULL, "1", NULL, "0", "tarifas", "Tarifas", "1");
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2016-02-02 09:43:40", "2016-05-26 23:04:31", NULL, "1", "administrador", "taxienlima", NULL);
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
