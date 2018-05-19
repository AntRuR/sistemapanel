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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("8", "2016-02-27 23:21:29", "2016-02-27 23:21:29", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1456633289_1340x450.jpg", NULL, "SOFTWARE", NULL, "!NUEVO! OFFICE 365 ENTERPRISE E5", "Con nuevas capacidades");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("7", "2016-02-27 17:37:38", "2016-02-27 17:37:38", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1456612658_1340x450.jpg", NULL, "INFRAESTRUCTURA TI", NULL, "LIDER EN VENTA EN", "Equipamiento a todo nivel");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("9", "2016-02-27 23:03:54", "0000-00-00 00:00:00", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1456632234_1340x450.jpg", NULL, "SOLUCIONES", NULL, "ESPECIALIZADAS EN TECNOLOGÍA", "Para satisfacer los más altos estándares");
#
#
INSERT INTO `banners_fotos_fotos` VALUES ("10", "2016-02-28 00:14:21", "2016-02-28 00:14:21", NULL, "1", "1", NULL, NULL, NULL, "1", "banbg_1456636461_1340x450.jpg", NULL, "COMUNICACIONES", NULL, "ADMINISTRACIÓN Y AUTOMATIZACIÓN DE REDES", "Aumenta la productividad");
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `paginas` VALUES ("1", "2016-02-26 12:34:03", "2016-02-26 12:34:03", NULL, "1", NULL, NULL, "Bienvenido", NULL, "<p>Somos una empresa especializada en brindar asesor&iacute;a y consultor&iacute;a empresarial de negocios, integrada por un equipo de profesionales que garantizan un servicio eficiente y a la medida de las necesidades de nuestros clientes.</p>\n\n<p><strong>MISION</strong><br />\nObtener la confianza de nuestros clientes, brindando una asesor&iacute;a integral de calidad, en el &aacute;mbito empresarial, seg&uacute;n las necesidades de nuestros clientes.</p>\n\n<p><strong>VISION</strong><br />\nConsolidarnos con una firma l&iacute;der de asesoramiento a entidades y ejecutivos seg&uacute;n las necesidades del mercado.</p>\n", "pag_1456508043_216x150.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("2", "2016-03-03 10:11:43", "2016-03-03 10:11:43", NULL, "1", NULL, NULL, "Capacitación", "Contamos con un robusto portafolio de productos de capacitación y perfeccionamiento comercial orientados al desarrollo y la optimización de fuerzas de ventas, equipos de atención al cliente y la plana ejecutiva del área comercial de su empresa. ", "<p>Contamos con un robusto portafolio de productos de capacitaci&oacute;n y perfeccionamiento comercial orientados al desarrollo y la optimizaci&oacute;n de fuerzas de ventas, equipos de atenci&oacute;n al cliente y la plana ejecutiva del &aacute;rea comercial de su empresa.&nbsp;</p>\n\n<p>Contamos con 10 a&ntilde;os de experiencia en perfeccionamiento de fuerzas de ventas y nuestro staff de capacitadores profesionales nos permiten ofrecer productos acad&eacute;micos con resultados comprobados en diferentes formatos como talleres, cursos, programas de capacitaci&oacute;n y escuelas de ventas In House. As&iacute; como programas de coaching y mentoring para los mandos medios y los gerentes de su &aacute;rea comercial.</p>\n", "pag_1457017903_326x216.png", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("3", "2016-03-03 10:12:38", "2016-03-03 10:12:38", NULL, "1", NULL, NULL, "Consultoría", "Nuestro trabajo de asesoría se basa en un conjunto de modelos y principios que rigen como columna vertebral de nuestro servicio, adecuándose a las condiciones y realidad de su negocio y sector.\n\nContamos con varios esquemas de Consultoría según su necesidad.", "<p>Nuestro trabajo de asesor&iacute;a se basa en un conjunto de modelos y principios que rigen como columna vertebral de nuestro servicio, adecu&aacute;ndose a las condiciones y realidad de su negocio y sector.</p>\n\n<p>Contamos con varios esquemas de Consultor&iacute;a seg&uacute;n su necesidad.</p>\n\n<p>Cont&aacute;ctese ahora y obtenga una consulta gratuita.</p>\n", "pag_1457017958_216x150.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("4", "2016-02-26 11:40:21", "2016-02-26 11:40:21", NULL, "1", NULL, NULL, "Quienes Somos", NULL, "<p>Somos una empresa especializada en brindar asesor&iacute;a y consultor&iacute;a empresarial de negocios, integrada por un equipo de profesionales que garantizan un servicio eficiente y a la medida de las necesidades de nuestros clientes.</p>\n\n<p><strong>MISION</strong><br />\nObtener la confianza de nuestros clientes, brindando una asesor&iacute;a integral de calidad, en el &aacute;mbito empresarial, seg&uacute;n las necesidades de nuestros clientes.</p>\n\n<p><strong>VISION</strong><br />\nConsolidarnos con una firma l&iacute;der de asesoramiento a entidades y ejecutivos seg&uacute;n las necesidades del mercado.</p>\n", "pag_1456504821_450x141.jpg", NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("5", "2016-02-25 11:59:45", "2016-03-01 22:21:30", NULL, "1", "1", NULL, "Asesoría Tributaria", "Liquidación de Impuestos.\nRevisión de Declaraciones Juradas.\nRevisión del Cumplimiento de Obligaciones Tributarias.\nAsistencia en procedimientos de devolución y/o recuperación de tributos.\nAsesoría y Patrocinio en Procesos Contenciosos de Índole Tributaria (etapas administrativa y judicial).\nPlaneamiento tributario para optimizar los recursos Financieros de la empresa.", "<ul>\n	<li>Liquidaci&oacute;n de Impuestos.</li>\n	<li>Revisi&oacute;n de Declaraciones Juradas.</li>\n	<li>Revisi&oacute;n del Cumplimiento de Obligaciones Tributarias.</li>\n	<li>Asistencia en procedimientos de devoluci&oacute;n y/o recuperaci&oacute;n de tributos.</li>\n	<li>Asesor&iacute;a y Patrocinio en Procesos Contenciosos de &Iacute;ndole Tributaria (etapas administrativa y judicial).</li>\n	<li>Planeamiento tributario para optimizar los recursos Financieros de la empresa.</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("6", "2016-02-25 11:59:57", "2016-03-01 22:21:21", NULL, "1", "1", NULL, "Asesoría Laboral", "Planificación e implementación de la estructura laboral.\nContratación Laboral \nEvaluación y elaboración de planillas de haberes en distintos regímenes laborales.\nCálculos de liquidaciones y beneficios sociales.\nEvaluación y elaboración de aportaciones y retenciones mensuales.", "<ul>\n	<li>Planificaci&oacute;n e implementaci&oacute;n de la estructura laboral.</li>\n	<li>Contrataci&oacute;n Laboral&nbsp;</li>\n	<li>Evaluaci&oacute;n y elaboraci&oacute;n de planillas de haberes en distintos reg&iacute;menes laborales.</li>\n	<li>C&aacute;lculos de liquidaciones y beneficios sociales.</li>\n	<li>Evaluaci&oacute;n y elaboraci&oacute;n de aportaciones y retenciones mensuales.</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("7", "2016-02-25 12:00:07", "2016-03-01 22:21:12", NULL, "1", "1", NULL, "Asesoría Contable", "Preparación de registros contables y especiales para la información de la empresa.\nPreparación de Estados Financieros y sus respectivas notas.\nElaboración de los balances anuales.\nElaboración de balances de comprobación.\nAnálisis financieros que ayuden a la administración en su toma de decisiones.\nAsesoría en operaciones financieras.", "<ul>\n	<li>Preparaci&oacute;n de registros contables y especiales para la informaci&oacute;n de la empresa.</li>\n	<li>Preparaci&oacute;n de Estados Financieros y sus respectivas notas.</li>\n	<li>Elaboraci&oacute;n de los balances anuales.</li>\n	<li>Elaboraci&oacute;n de balances de comprobaci&oacute;n.</li>\n	<li>An&aacute;lisis financieros que ayuden a la administraci&oacute;n en su toma de decisiones.</li>\n	<li>Asesor&iacute;a en operaciones financieras.</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("8", "2016-02-25 12:00:14", "2016-03-01 22:20:59", NULL, "1", "1", NULL, "Asesoría Financiera", "Formulación y evaluación de proyectos de inversión.\nDiseño de presupuestos económicos y financieros.\nEstudios de factibilidad financiera.\nAnálisis de estructura financieros.", "<ul>\n	<li>Formulaci&oacute;n y evaluaci&oacute;n de proyectos de inversi&oacute;n.</li>\n	<li>Dise&ntilde;o de presupuestos econ&oacute;micos y financieros.</li>\n	<li>Estudios de factibilidad financiera.</li>\n	<li>An&aacute;lisis de estructura financieros.</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("9", "2016-02-25 12:00:29", "2016-03-01 22:20:49", NULL, "1", "1", NULL, "Asesoría empresarial", "Formulación y evaluación de proyectos de inversión.\nDiseño de presupuestos económicos y financieros.", "<ul>\n	<li>Formulaci&oacute;n y evaluaci&oacute;n de proyectos de inversi&oacute;n.</li>\n	<li>Dise&ntilde;o de presupuestos econ&oacute;micos y financieros.</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("10", "2016-02-25 12:00:49", "2016-03-01 22:20:39", NULL, "1", "1", NULL, "Procesamiento de Planillas (nómina)", "Determinación de pagos mensuales a los empleados\nCumplimiento de obligaciones tributarias y laborales relacionadas con la planilla\nCumplimiento administrativo con autoridades laborales", "<ul>\n	<li>Determinaci&oacute;n de pagos mensuales a los empleados</li>\n	<li>Cumplimiento de obligaciones tributarias y laborales relacionadas con la planilla</li>\n	<li>Cumplimiento administrativo con autoridades laborales</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("11", "2016-02-25 12:01:03", "2016-03-01 22:20:25", NULL, "1", "1", NULL, "Inventarios Físicos y Conciliación con Registros Contables", "Planeamiento, organización y ejecución de inventarios físicos de existencias y activos fijos y conciliación con los registros contables\nSupervisión de inventarios físicos (inventario ejecutado en conjunto con personal del cliente)\nReconstrucción de libros oficiales (registro de inventario permanente y registro de activos fijos) ", "<ul>\n	<li>Planeamiento, organizaci&oacute;n y ejecuci&oacute;n de inventarios f&iacute;sicos de existencias y activos fijos y conciliaci&oacute;n con los registros contables</li>\n	<li>Supervisi&oacute;n de inventarios f&iacute;sicos (inventario ejecutado en conjunto con personal del cliente)</li>\n	<li>Reconstrucci&oacute;n de libros oficiales (registro de inventario permanente y registro de activos fijos)&nbsp;</li>\n</ul>\n", NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("12", "2016-03-01 21:53:31", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "Que plan de hosting me conviene?", NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("13", "2016-03-01 21:53:50", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "Los hemisferios cerebrales mitos y verdades", NULL, NULL, NULL, NULL, "1");
#
#
INSERT INTO `paginas` VALUES ("14", "2016-03-01 21:54:05", "0000-00-00 00:00:00", NULL, "1", "3", NULL, "El aprendizaje basado en proyectos", NULL, NULL, NULL, NULL, "1");
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
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
INSERT INTO `usuarios_acceso` VALUES ("1", "2016-02-02 09:43:40", "0000-00-00 00:00:00", NULL, "1", "administrador", "asiste", NULL);
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
