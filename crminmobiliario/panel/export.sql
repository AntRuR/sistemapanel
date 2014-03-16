DROP TABLE IF EXISTS `usuarios_acceso`;
#
#
CREATE TABLE `usuarios_acceso` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT '0000-00-00 00:00:00',
  `fecha_edicion` datetime DEFAULT '0000-00-00 00:00:00',
  `posicion` int(10) DEFAULT NULL,
  `visibilidad` tinyint(1) DEFAULT NULL,
  `calificacion` tinyint(1) DEFAULT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `id_permisos` int(10) DEFAULT NULL,
  `nombre_completo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;
#
#
INSERT INTO `usuarios_acceso` VALUES ("1", "2011-07-12 13:08:57", "2011-12-03 10:37:10", NULL, "0", NULL, "administrador", "nassimyfarid", "4", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("2", "2011-11-01 21:39:45", "2012-03-21 10:48:47", NULL, "1", NULL, "ljeri", "64831", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("3", "2011-11-01 21:40:02", "2011-11-27 18:57:23", NULL, "1", NULL, "eramos", "12345", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("4", "2011-11-01 21:40:16", "2011-11-27 18:57:16", NULL, "1", NULL, "nacinchaluja", "crmcallcenter2011", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("5", "2011-11-14 06:08:58", "2013-07-16 22:50:49", NULL, "1", NULL, "administrador", "crminmobiliario", "1", "Administrador");
#
#
INSERT INTO `usuarios_acceso` VALUES ("7", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "Carla", "fademira", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("8", "2012-01-09 10:43:54", "2013-03-24 22:06:52", NULL, "1", NULL, "productmanager", "marketingddp2102", "5", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("13", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("14", "0000-00-00 00:00:00", "2012-02-17 18:47:54", NULL, "0", NULL, "gespinoza", "45596", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("15", "0000-00-00 00:00:00", "2012-02-17 18:53:11", NULL, "1", NULL, "jvaldivia", "55004", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("16", "0000-00-00 00:00:00", "2012-02-17 18:48:20", NULL, "1", NULL, "rcarrasco", "151515", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("17", "0000-00-00 00:00:00", "2012-02-17 18:48:36", NULL, "1", NULL, "rcardenas", "257941", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("18", "0000-00-00 00:00:00", "2012-02-17 18:48:51", NULL, "1", NULL, "jperez", "19654", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("19", "0000-00-00 00:00:00", "2012-02-17 18:51:05", NULL, "1", NULL, "jzavala", "35992", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("20", "0000-00-00 00:00:00", "2012-02-17 18:52:10", NULL, "1", NULL, "ncalero", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("21", "0000-00-00 00:00:00", "2012-02-17 18:52:35", NULL, "1", NULL, "fflores", "428980", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("22", "0000-00-00 00:00:00", "2012-02-17 18:52:51", NULL, "1", NULL, "smurillo", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("23", "0000-00-00 00:00:00", "2012-02-17 18:28:23", NULL, "1", NULL, "enovoa", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("24", "0000-00-00 00:00:00", "2012-02-17 18:28:56", NULL, "1", NULL, "gnegron", "85083", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("25", "0000-00-00 00:00:00", "2012-02-17 18:29:12", NULL, "1", NULL, "bwatanave", "232529", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("26", "0000-00-00 00:00:00", "2012-02-17 18:29:28", NULL, "1", NULL, "echuquin", "00179", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("27", "0000-00-00 00:00:00", "2012-02-17 18:30:09", NULL, "1", NULL, "lperez", "080510", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("28", "0000-00-00 00:00:00", "2012-02-17 18:30:29", NULL, "1", NULL, "cvicente", "yarife", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("29", "0000-00-00 00:00:00", "2012-03-07 11:15:24", NULL, "1", NULL, "emoran", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("31", "0000-00-00 00:00:00", "2012-02-17 18:31:33", NULL, "1", NULL, "dmendoza", "neverland", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("32", "0000-00-00 00:00:00", "2012-02-17 18:31:57", NULL, "1", NULL, "gbacca", "28494", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("33", "0000-00-00 00:00:00", "2012-02-17 18:32:14", NULL, "1", NULL, "srios", "42628", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("34", "0000-00-00 00:00:00", "2012-02-17 18:32:32", NULL, "1", NULL, "jflores", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("35", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", NULL, "dborja", "1234", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("36", "0000-00-00 00:00:00", "2012-02-17 18:32:58", NULL, "1", NULL, "sgallardo", "151284s", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("37", "0000-00-00 00:00:00", "2012-02-17 18:35:33", NULL, "1", NULL, "csipion", "0507", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("38", "0000-00-00 00:00:00", "2012-02-17 18:35:46", NULL, "1", NULL, "jmendez", "24958", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("39", "0000-00-00 00:00:00", "2012-02-17 18:36:38", NULL, "1", NULL, "rsoto", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("40", "0000-00-00 00:00:00", "2012-02-17 18:37:04", NULL, "1", NULL, "vdeorellana", "14350", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("41", "0000-00-00 00:00:00", "2012-02-17 18:37:14", NULL, "1", NULL, "emarin", "54950", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("42", "0000-00-00 00:00:00", "2012-02-17 18:37:26", NULL, "1", NULL, "nescudero", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("43", "0000-00-00 00:00:00", "2012-02-17 18:37:42", NULL, "1", NULL, "jpadilla", "93244", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("44", "0000-00-00 00:00:00", "2012-02-17 18:37:59", NULL, "1", NULL, "dtorres", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("45", "0000-00-00 00:00:00", "2012-02-17 18:38:10", NULL, "1", NULL, "jramirez", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("46", "0000-00-00 00:00:00", "2012-02-17 18:38:28", NULL, "1", NULL, "nvega", "099587", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("47", "0000-00-00 00:00:00", "2012-02-17 18:38:41", NULL, "1", NULL, "mnieto", "55937", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("48", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", NULL, "acordova", "1234", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("49", "0000-00-00 00:00:00", "2012-02-17 18:54:05", NULL, "1", NULL, "etorres", "04818", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("152", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "tdiaz", "123456", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("51", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "lzuniga", "051987", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("52", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "fmerino", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("53", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rechevarria", "07815", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("54", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "cpadilla", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("55", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "msaens", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("56", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rlujan", "40115", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("57", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "pvalverde", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("58", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "izapata", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("60", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jtoledo", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("61", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jperez", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("62", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "gwiesse", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("63", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rinfante", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("64", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "hlagos", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("65", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "irosas", "10527", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("66", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rsarmiento", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("67", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "psoto", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("68", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jg1", "jg1", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("69", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "st1", "st1", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("70", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "t1", "t1", "9", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("71", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "av1", "av1", "11", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("72", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ag1", "ag1", "10", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("73", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "sa1", "jrb", "12", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("74", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ui1", "ui1", "8", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("75", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "fgarcia", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("76", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "wcordero", "326121", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("77", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jbugosen", "bugosen6737", "12", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("78", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "gguevara", "4011VALGUE", "10", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("79", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "0", NULL, "mnieto", "mannie2012", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("80", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "gespinoza", "2154GUESPI", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("81", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "oponce", "0781PONSU", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("82", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jaltamirano", "4072JOALTA", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("83", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "lflores", "41239870", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("84", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "cmeza", "0739MEZAC", "8", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("85", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "omoquillaza", "7364osmo", "9", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("86", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "tcalle", "4096CALLTA", "11", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("87", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "vzapata", "0867VEROZA", "10", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("88", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jvalencia", "2930VALEJA", "10", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("89", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "up", "up", "13", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("90", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ue", "ue", "14", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("91", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "csolis", "importados", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("92", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "grios", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("93", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jgonzales", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("94", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "apolani", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("95", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rroman", "210505", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("96", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "cramos", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("97", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "vrabines", "8795", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("98", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rvilchez", "33590", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("99", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "fpalomino", "10282", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("100", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "nperez", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("101", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rsavaleta", "25779", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("102", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "mconcha", "09429", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("103", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "cconcha", "09429", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("104", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jarroyo", "06773", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("105", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jmalpartida", "06773", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("106", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jdavila", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("107", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jarcaya", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("108", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ggomez", "41594159", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("109", "0000-00-00 00:00:00", "2012-08-14 15:54:42", NULL, "1", NULL, "dhuaman", "4259huadar", "15", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("110", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ctay", "4438taycris2", "15", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("111", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "wsotomayor", "gusta", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("112", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "dtoledo", "210821", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("113", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "smanrrique", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("114", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "merazo", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("115", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jsanchez", "430173", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("116", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "wyataco", "151515", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("128", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "eramon", "021273", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("117", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "aolivera", "452670", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("131", "2012-09-03 15:46:15", "0000-00-00 00:00:00", NULL, "1", NULL, "mnieto", "mannie2012", "6", "MANUEL NIETO");
#
#
INSERT INTO `usuarios_acceso` VALUES ("118", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "JVTAMEGAPLAZA", "43151", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("119", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "dgarcia", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("120", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jsalazar", "07703584", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("121", "2012-07-04 12:00:44", "2012-07-04 15:27:12", NULL, "1", NULL, "stockddp", "incadaihat2012", "16", "Stock DDP");
#
#
INSERT INTO `usuarios_acceso` VALUES ("122", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "rcastillo", "179117", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("123", "2012-07-04 18:12:42", "0000-00-00 00:00:00", NULL, "1", NULL, "adminddp", "generalddp2012", "12", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("124", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "erabanal", "infidente", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("125", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "chavez", "020202", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("126", "2012-07-20 12:35:58", "0000-00-00 00:00:00", NULL, "1", NULL, "villa", "ddpvilla", "17", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("127", "2012-07-20 12:36:22", "0000-00-00 00:00:00", NULL, "1", NULL, "surquillo", "ddpsurquillo12", "17", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("129", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "slaranaga", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("130", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "equinones", "qcortez1408", "15", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("132", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "msuarez", "099064", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("133", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "ADMINDDP", "GENERAL DDP2012", "9", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("151", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "pparedes", "20030691", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("134", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "cyntia", "ardiles0811", "8", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("140", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "stecnico", "123456ddp", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("137", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "scardenas", "107193", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("139", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "lamaya", "10081723", "7", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("141", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "pruebajg", "prueba", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("142", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "wtavarita", "123456", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("143", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "lflores2", "41239870", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("144", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jcerron", "xxx", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("145", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "pepe ", "s", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("146", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "nn", "ss", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("147", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jsldfjsfdalj", "aaa", "2", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("148", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "tpena", "GENERALDDP2012", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("149", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jdpierola", "$aqp$", "3", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("150", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "carmas", "armas2703", "6", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("153", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "jvasquez", "123456", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("154", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "mflores", "123456", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("155", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("156", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("157", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("158", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("159", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("160", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("161", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("162", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("163", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("164", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("165", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("166", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("167", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("168", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("169", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("170", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("171", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("172", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("173", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("174", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("175", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("176", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("177", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("178", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("179", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("180", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("181", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("182", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("183", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("184", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("185", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("186", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("187", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("188", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("189", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("190", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
INSERT INTO `usuarios_acceso` VALUES ("191", "0000-00-00 00:00:00", "0000-00-00 00:00:00", NULL, "1", NULL, "", "", "0", NULL);
#
#
