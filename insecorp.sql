-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para insecorp
CREATE DATABASE IF NOT EXISTS `insecorp` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `insecorp`;

-- Volcando estructura para tabla insecorp.anexo
CREATE TABLE IF NOT EXISTS `anexo` (
  `id_anexo` int(10) NOT NULL AUTO_INCREMENT,
  `nom_anexo` varchar(100) NOT NULL,
  `act_anexo` int(2) NOT NULL,
  PRIMARY KEY (`id_anexo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.anexo: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `anexo` DISABLE KEYS */;
INSERT INTO `anexo` (`id_anexo`, `nom_anexo`, `act_anexo`) VALUES
	(1, 'Gerente', 1),
	(2, 'Jefe', 1),
	(3, 'Supervisor', 1),
	(4, 'Coordinador', 1),
	(5, 'Analista', 1),
	(6, 'Asistente', 1),
	(7, 'Auxiliar', 1),
	(8, 'Operario', 1),
	(9, 'Vendedor', 1),
	(10, 'Practicante', 1);
/*!40000 ALTER TABLE `anexo` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.area
CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(10) NOT NULL AUTO_INCREMENT,
  `nom_area` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `act_area` int(2) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla insecorp.area: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` (`id_area`, `nom_area`, `act_area`) VALUES
	(1, 'Producción', 1),
	(2, 'Ventas', 1),
	(3, 'Distribución', 1),
	(4, 'Creditos y Cobranzas', 1),
	(5, 'Marketing', 1),
	(6, 'RRHH', 1),
	(7, 'Asesoría legal', 1),
	(8, 'Almacen', 1),
	(9, 'Compras', 1),
	(10, 'Laboratorio', 1),
	(11, 'Contabilidad', 1),
	(12, 'Servicios corporativos', 1),
	(13, 'Gerencia General', 0);
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(10) NOT NULL AUTO_INCREMENT,
  `nom_categoria` varchar(100) NOT NULL,
  `time_categoria` int(5) NOT NULL,
  `act_categoria` int(2) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.categoria: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`id_categoria`, `nom_categoria`, `time_categoria`, `act_categoria`) VALUES
	(1, 'INFRAESTRUCTURA Y SERVICIOS DE TI', 30, 1),
	(2, 'SOLUCIONES DE NEGOCIO', 30, 1);
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.categoria_detalle
CREATE TABLE IF NOT EXISTS `categoria_detalle` (
  `id_categoria_detalle` int(10) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(10) NOT NULL,
  `nom_categoria_detalle` varchar(100) NOT NULL,
  `act_categoria_detalle` int(2) NOT NULL,
  PRIMARY KEY (`id_categoria_detalle`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.categoria_detalle: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_detalle` DISABLE KEYS */;
INSERT INTO `categoria_detalle` (`id_categoria_detalle`, `id_categoria`, `nom_categoria_detalle`, `act_categoria_detalle`) VALUES
	(27, 1, 'DATA CENTER', 1),
	(28, 1, 'HARDWARE', 1),
	(29, 1, 'NETWORKING', 1),
	(30, 1, 'SERVICIOS DE TI', 1),
	(31, 1, 'SOFTWARE', 1),
	(32, 1, 'SUMINISTROS', 1),
	(33, 2, 'GESTION', 1),
	(34, 2, 'MICROSOFT DYNAMICS AX', 1),
	(35, 2, 'SIGEM', 1);
/*!40000 ALTER TABLE `categoria_detalle` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(10) NOT NULL AUTO_INCREMENT,
  `id_tipo_documento` int(10) NOT NULL,
  `id_area` int(10) NOT NULL,
  `id_anexo` int(10) NOT NULL,
  `nom_cliente` varchar(50) NOT NULL,
  `ape_pat_cliente` varchar(50) NOT NULL,
  `ape_mat_cliente` varchar(50) NOT NULL,
  `num_doc_cliente` varchar(11) NOT NULL,
  `dir_cliente` longtext NOT NULL,
  `tel_cliente` varchar(7) NOT NULL,
  `cel_cliente` varchar(9) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `usu_cliente` varchar(50) NOT NULL,
  `pass_cliente` varchar(50) NOT NULL,
  `act_cliente` int(2) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.cliente: ~189 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id_cliente`, `id_tipo_documento`, `id_area`, `id_anexo`, `nom_cliente`, `ape_pat_cliente`, `ape_mat_cliente`, `num_doc_cliente`, `dir_cliente`, `tel_cliente`, `cel_cliente`, `email_cliente`, `usu_cliente`, `pass_cliente`, `act_cliente`) VALUES
	(1, 1, 1, 1, 'RENZO', 'SOTO', 'BULOS', '20756921', 'Av. Carlos Izaguirre 501 - Restaurant Pescados de Nort Fish, Los Olivos', '5320383', '968558408', 'RENZO@GMAIL.COM', 'RSOTO', 'SOTO', 1),
	(2, 1, 1, 1, 'SEBASTIaN', 'VIDAL', 'ARBULU', '96910595', 'Av. Tomas Valle 917 - Dpto. AF 303 - Resid. Las Palmeras - (Costado de Trilce - Por Serpost), SMP', '5784112', '952692262', 'SEBASTIaN@GMAIL.COM', 'SVIDAL', 'VIDAL', 1),
	(3, 1, 1, 1, 'RENATO', 'SIERRALTA', 'BUSTAMANTE', '77618743', 'Jr. Cueva 678 - 2? Piso - (Cdra. 7 Av. La Mar), Publo Libre', '5423880', '961122430', 'RENATO@GMAIL.COM', 'RSIERRALTA', 'SIERRALTA', 1),
	(4, 1, 1, 1, 'BRUNO PAOLO', 'BRAMBILLA', 'TABOADA', '64305096', 'Rep. De Chile 549 - Of. 604 - (Cdra. 5 Av. Arenales), Jesus Maria', '5310804', '986085094', 'BRUNO PAOLO@GMAIL.COM', 'BBRAMBILLA', 'BRAMBILLA', 1),
	(5, 1, 1, 1, 'GUSTAVO ANTONIO', 'HAAKER', 'MARTINEZ', '63376580', 'Emilio Fernandez 741 - Torre 1 - Dpto. 1003 - (Cdra. 9 de AV. Arequipa o Cdra. 9 Av. Petit Thours), ', '5572041', '996902546', 'GUSTAVO ANTONIO@GMAIL.COM', 'GHAAKER', 'HAAKER', 1),
	(6, 1, 1, 1, 'JORGE ANDReS', 'LESCANO', 'JEANNEAU', '82802151', 'Horacio Urteaga 2047 - (Cdra. 3 Av. San Felipe), Jesus Maria', '5952507', '945159466', 'JORGE ANDReS@GMAIL.COM', 'JLESCANO', 'LESCANO', 1),
	(7, 1, 1, 1, 'JUAN JOSe', 'MONTERO', 'FUENTES', '43276141', 'Cl. Centauro 100 - (Esq. Con Manuel Olguin - Frente a la Pta. N? 5 del Jockey Club), Surco', '5513505', '923040191', 'JUAN JOSe@GMAIL.COM', 'JMONTERO', 'MONTERO', 1),
	(8, 1, 1, 1, 'SEBASTIaN', 'VIAL', 'ARIAS', '55128246', 'Tomas Marsano 1497 - 29 A , Surquillo', '5989866', '933075508', 'SEBASTIaN@GMAIL.COM', 'SVIAL', 'VIAL', 1),
	(9, 1, 1, 1, 'RODRIGO', 'VALDIVIESO', 'BARYCKI', '41664014', 'Cl. Las Casuarinas - Mz. U - Lt. 31 - 3? Etapa - Urb. Los Sauces - (Cdra. 7 Av. Villaran - Frente al', '5846430', '991439427', 'RODRIGO@GMAIL.COM', 'RVALDIVIESO', 'VALDIVIESO', 1),
	(10, 1, 1, 1, 'ALONSO', 'ARAUJO', 'VERGANI', '31724884', 'Cl 39 - 385- 201- (10 Galvez Barrenechea), San Borja', '5600231', '956025254', 'ALONSO@GMAIL.COM', 'AARAUJO', 'ARAUJO', 1),
	(11, 1, 1, 1, 'CeSAR ALONSO', 'CARRANZA', 'SCAMARONE', '22506830', 'Poeta de la Rivera 779 - La Encantada de Villa - (Entrando por Luchetti la Primera paralela al amr),', '5904047', '961256077', 'CeSAR ALONSO@GMAIL.COM', 'CCARRANZA', 'CARRANZA', 1),
	(12, 1, 1, 1, 'DIEGO MARTiN', 'DE BUSTAMANTE', 'QUESADA', '14856010', 'Cl. Spencer 241 - Dpto. 202 - (Cdra. 39 Avicion), Surquillo', '5175113', '983362395', 'DIEGO MARTiN@GMAIL.COM', 'DDE BUSTAMANTE', 'DE BUSTAMANTE', 1),
	(13, 1, 1, 1, 'EDUARDO JOSe', 'DEACON', 'PIERANTONI', '21266375', 'Los Negocios 260 - 280 - Edif. 9 - 403 - Condominio Los Jardines 01, Surquillo', '5994858', '974082349', 'EDUARDO JOSe@GMAIL.COM', 'EDEACON', 'DEACON', 1),
	(14, 1, 1, 1, 'JORGE ALFREDO', 'LEON', 'JIMENEZ', '22927835', 'Los Olivos 257 - Dpto. 304 - (Cdra. 3 Av. 2 de Mayo - Espalda de Arenales), S/Isidro', '5955866', '964855825', 'JORGE ALFREDO@GMAIL.COM', 'JLEON', 'LEON', 1),
	(15, 1, 1, 1, 'GONZALO RAFAEL', 'GUILLEN', 'MEJIA', '47337607', 'Jr. Miroquezada 1388 - Int. 2, Lima', '5355121', '986463132', 'GONZALO RAFAEL@GMAIL.COM', 'GGUILLEN', 'GUILLEN', 1),
	(16, 1, 1, 1, 'JOSe GALO', 'MARTINOT', 'GONZALEZ DE MENDOZA', '50872873', 'Santa Elena Norte 155 - Edif. Alamo - Dpto. 703 - (Alt. Cdra. 18 Av. Primavera - Al costado del Muse', '5967250', '996362915', 'JOSe GALO@GMAIL.COM', 'JMARTINOT', 'MARTINOT', 1),
	(17, 1, 1, 1, 'DIEGO ALONSO', 'CHAMOCHUMBI', 'REVILLA', '41786526', 'Patricio Iriarte 211 - Sta. Catalina - (Alt. Canada con Nicolas Arriola - Alt. De Metro - Espalda de', '5799848', '949623332', 'DIEGO ALONSO@GMAIL.COM', 'DCHAMOCHUMBI', 'CHAMOCHUMBI', 1),
	(18, 1, 1, 1, 'DIEGO ALONSO', 'CHAVEZ', 'RAMIREZ', '22661226', 'Los Nogales 237 - Urb. El Aguila - Bellavista - (Cdra. 22 Av. Faucett - Frente del Rockys), Callao', '5553570', '969104997', 'DIEGO ALONSO@GMAIL.COM', 'DCHAVEZ', 'CHAVEZ', 1),
	(19, 1, 1, 1, 'NICOLaS', 'ROMERO', 'CORDOVA', '90467039', 'Jr. Tacna 355 - La Perla - Por el Colegio Concordia - Espalda de la Casa Club Enapu, Callao', '5295294', '944232191', 'NICOLaS@GMAIL.COM', 'NROMERO', 'ROMERO', 1),
	(20, 1, 1, 1, 'GIANMARCO', 'GEU', 'MONTOYA', '79322557', 'Cl. Leonardo Arrieta 1334 - Urb. Helio - (Espalda de Donofrio - Cdra. 28 Av. Venezuela), Lima', '5868424', '946091969', 'GIANMARCO@GMAIL.COM', 'GGEU', 'GEU', 1),
	(21, 1, 1, 1, 'GONZALO ELEHIN', 'GRISOLLE', 'MENDOZA', '89370754', 'Psje. Luya 1974 - Urb. San German - (Cdra. 19 Av. Mexico), La Victoria', '5948924', '980692960', 'GONZALO ELEHIN@GMAIL.COM', 'GGRISOLLE', 'GRISOLLE', 1),
	(22, 1, 1, 1, 'GIANFRANCO', 'GEREDA', 'MORA', '41583672', 'Jr. Ignacio Cossio 1697 - (Cdra. 15 Av. Mexico), La Victoria', '5943403', '958020588', 'GIANFRANCO@GMAIL.COM', 'GGEREDA', 'GEREDA', 1),
	(23, 1, 1, 1, 'CARLOS GUILLERMO', 'CAMPBELL', 'SERVAN', '59839485', 'Av. Las Palmeras 4923 , Los Olivos', '5426910', '985710565', 'CARLOS GUILLERMO@GMAIL.COM', 'CCAMPBELL', 'CAMPBELL', 1),
	(24, 1, 1, 1, 'MARTiN ALONSO', 'REATEGUI', 'DE CARDENAS', '44412296', 'ENTREGA DE HIRAOKA DE LIMA, Lima', '5468854', '942569939', 'MARTiN ALONSO@GMAIL.COM', 'MREATEGUI', 'REATEGUI', 1),
	(25, 1, 1, 1, 'SEBASTIaN', 'VILELA', 'ANCIETA', '39223482', 'Av. Venezuela 704 - Of. 101 , BreNa', '5253396', '927128481', 'SEBASTIaN@GMAIL.COM', 'SVILELA', 'VILELA', 1),
	(26, 1, 1, 1, 'JAN MARCO', 'JIMENO', 'VELARDE', '92283858', 'ENTREGA DE HIRAOKA DE LIMA, Lima', '5336392', '951420017', 'JAN MARCO@GMAIL.COM', 'JJIMENO', 'JIMENO', 1),
	(27, 1, 1, 1, 'RODRIGO', 'UGAS', 'BERETTA', '33258808', 'Guardia Civil 959-Dpt 601, San Isidro', '5193418', '985953582', 'RODRIGO@GMAIL.COM', 'RUGAS', 'UGAS', 1),
	(28, 1, 1, 1, 'MARCO ANTONIO', 'PONCE', 'DE LOS RIOS', '56412393', 'Alameda del Arco Iris 475 - Dpto. 201 - Urb. La Alborada - (Cdra. 11 Caminos del Inca), Surco', '5890335', '948082980', 'MARCO ANTONIO@GMAIL.COM', 'MPONCE', 'PONCE', 1),
	(29, 1, 1, 1, 'JUAN CARLOS', 'MIRANDA', 'GANDOLFO', '45861585', 'Cnel. Inclan 550, Miraflores', '5976917', '981191663', 'JUAN CARLOS@GMAIL.COM', 'JMIRANDA', 'MIRANDA', 1),
	(30, 1, 1, 1, 'JOSe RICARDO', 'MENENDEZ', 'GARCIA', '59036189', 'Cl. 2 N? 166 - El Rosal - (Cdra. 20 Benavides), Miraflores', '5871481', '931898302', 'JOSe RICARDO@GMAIL.COM', 'JMENENDEZ', 'MENENDEZ', 1),
	(31, 1, 1, 1, 'DIEGO ALFREDO', 'CUEVA', 'REYES', '13774564', 'Arenales 790 , Jesus Maria', '5149253', '943938423', 'DIEGO ALFREDO@GMAIL.COM', 'DCUEVA', 'CUEVA', 1),
	(32, 1, 1, 1, 'JOSe RAFAEL', 'MENDOZA', 'GARCIA', '93000516', 'Cl. Monte Real 376 - Dpto. 3 - Chacarilla - (Cdra. 10 Av. Velasco Astete), Surco', '5494094', '917669201', 'JOSe RAFAEL@GMAIL.COM', 'JMENDOZA', 'MENDOZA', 1),
	(33, 1, 1, 1, 'ALVARO ALONSO', 'ASCENZO', 'VELASCO', '53602077', 'Monte Carmelo 140 - Dpto. 203 - Chacarilla - (Espalda del Colegio Sta. Maria), Surco', '5129707', '940890883', 'ALVARO ALONSO@GMAIL.COM', 'AASCENZO', 'ASCENZO', 1),
	(34, 1, 1, 1, 'ESSIO', 'DIEZ', 'PAZ SOLDAN', '36031690', 'Tomas Marsano 1497 - 29 A , Surquillo', '5792880', '980458607', 'ESSIO@GMAIL.COM', 'EDIEZ', 'DIEZ', 1),
	(35, 1, 1, 1, 'CARLOS GUILLERMO', 'CAMINO', 'SERVAT', '70313157', 'Navarra 471 - (Cdra. 42 Benavides - Espalda del Grifo Primax), Surco', '5639283', '949761820', 'CARLOS GUILLERMO@GMAIL.COM', 'CCAMINO', 'CAMINO', 1),
	(36, 1, 1, 1, 'CeSAR FRANCISCO', 'CARRILLO', 'SARIC', '52553359', 'Loma Blanca 140 - Dpto. 101 - (Cdra. 23 Av. Velasco Astete), Surco', '5438984', '926778428', 'CeSAR FRANCISCO@GMAIL.COM', 'CCARRILLO', 'CARRILLO', 1),
	(37, 1, 1, 1, 'RODRIGO', 'VALDIVIA', 'BELAUNDE', '77260532', 'AV Elena Fray De Pastor 87 - Urb. Villa Militar Oeste - (Entrando por Pedro de Osma), Chorrillos', '5348323', '921483293', 'RODRIGO@GMAIL.COM', 'RVALDIVIA', 'VALDIVIA', 1),
	(38, 1, 1, 1, 'GIAN CARLO', 'GARCIA', 'MORE', '32652351', 'Combate de Angamos 581 - Dpto. 303 - (Por el Cementerio de Surco), Surco', '5322528', '954937020', 'GIAN CARLO@GMAIL.COM', 'GGARCIA', 'GARCIA', 1),
	(39, 1, 1, 1, 'PAUL ENRIQUE', 'SALAZAR', 'CASAL', '55285526', 'Psje. Ing. Enrique Martinelli 152 - Int. 404 (Int.16) Urb. Las Torres De Limatambo, S/Borja', '5506672', '922716301', 'PAUL ENRIQUE@GMAIL.COM', 'PSALAZAR', 'SALAZAR', 1),
	(40, 1, 1, 1, 'LUIS JOSe', 'PELLEGRIN', 'DIAZ', '28294940', 'Cl. Jorge Valdevillano 104 - Sta. Catalina , La Victoria', '5310412', '962588987', 'LUIS JOSe@GMAIL.COM', 'LPELLEGRIN', 'PELLEGRIN', 1),
	(41, 1, 1, 1, 'JAVIER EDUARDO', 'LA ROSA', 'LAZO', '72974438', 'Jr. Chancay 329 - Dpto. 204 - (Alt. Cdra. 2 Av. Tacna), Lima', '5652565', '984217041', 'JAVIER EDUARDO@GMAIL.COM', 'JLA ROSA', 'LA ROSA', 1),
	(42, 1, 1, 1, 'JUAN JOSe', 'MONZON', 'FREYRE', '63700139', 'Jr. Rio Ucayali - Mz. 1 - Lt. 23 A - (Por el Hospital de la Solidadridad - 1 Cdra. Antes del Mercado', '5110471', '921517937', 'JUAN JOSe@GMAIL.COM', 'JMONZON', 'MONZON', 1),
	(43, 1, 1, 1, 'PIERO', 'SANTA MARIA', 'CANE', '89510854', 'Mercado Ceres - C.C. Las Brisas - 2? Piso - Clinica Dental Hidalgo - (Pasando la Volvo - Por Plaza V', '5691612', '949569151', 'PIERO@GMAIL.COM', 'PSANTA MARIA', 'SANTA MARIA', 1),
	(44, 1, 1, 1, 'JAVIER', 'KISS', 'LEON', '68395639', 'Cl. Linares 159 - Dpto. 201 - Urb. Mayorazgo - 4? Etapa - (Cdra. 8 Av. Huarochiri), Ate', '5934777', '960269606', 'JAVIER@GMAIL.COM', 'JKISS', 'KISS', 1),
	(45, 1, 1, 1, 'JERZY LUIS', 'LEGUIA', 'KOECHLIN', '67422939', 'CL Ricardo (Ex Calle 18) Palma 210 Int. 101 Urb. Covima - Cdra. 11 Constructores, La Molina', '5193101', '989130588', 'JERZY LUIS@GMAIL.COM', 'JLEGUIA', 'LEGUIA', 1),
	(46, 1, 1, 1, 'ALFONSO', 'ALZAMORA', 'VILLARAN', '65772888', 'Jr. Jose Antonio 134 - Dpto. 201 - (Entre Av. Palmeras y Jose Antonio por el Colegio Lincon), La Mol', '5185739', '970283499', 'ALFONSO@GMAIL.COM', 'AALZAMORA', 'ALZAMORA', 1),
	(47, 1, 1, 1, 'ALEX FERNANDO', 'ALVAREZ', 'VIVANCO', '98115989', 'Av. Precursores 435 - (A 4 Cdras. Del Pte. Primavera), Surco', '5986519', '936363423', 'ALEX FERNANDO@GMAIL.COM', 'AALVAREZ', 'ALVAREZ', 1),
	(48, 1, 1, 1, 'FRANCO ANDReS', 'FU', 'NUNEZ', '79616520', 'Av. Sucre 1189 - SIN INSTALACION, Pueblo Libre', '5437288', '977988444', 'FRANCO ANDReS@GMAIL.COM', 'FFU', 'FU', 1),
	(49, 1, 1, 1, 'SAMUEL', 'VELEZMORO', 'ASTENGO', '24719840', 'T08 Jr. Ucayali 704 - Cercado de Lima, Lima', '5983915', '938647050', 'SAMUEL@GMAIL.COM', 'SVELEZMORO', 'VELEZMORO', 1),
	(50, 1, 1, 1, 'GONZALO', 'GRADOS', 'MESARINA', '79151051', 'T04 Jr. Paruro 900 - Cercado de Lima, Lima', '5277125', '946672250', 'GONZALO@GMAIL.COM', 'GGRADOS', 'GRADOS', 1),
	(51, 1, 1, 1, 'RENATO', 'SESSAREGO', 'BUSTAMANTE', '54035553', 'T09 Jr. Andahuaylas 749 -  Cercado de Lima, Lima', '5981956', '989421372', 'RENATO@GMAIL.COM', 'RSESSAREGO', 'SESSAREGO', 1),
	(52, 1, 1, 1, 'JUAN DIEGO', 'MONARD', 'GALARZA', '46285656', 'T10 Calle Los Andes 456 ? Independencia, Independencia', '5184852', '952499412', 'JUAN DIEGO@GMAIL.COM', 'JMONARD', 'MONARD', 1),
	(53, 1, 1, 1, 'JORGE MAURICIO', 'LORET', 'HOUSMAN', '16382313', 'Mcal. Miller 933 - Dpto. 303 - (Cdra. 9 Av. Arenales con Cdra. 1 Av. Cuba), Jesus Maria', '5721345', '965349123', 'JORGE MAURICIO@GMAIL.COM', 'JLORET', 'LORET', 1),
	(54, 1, 1, 1, 'CARLOS EMILIO', 'CALMELL', 'SILVA SANTISTEBAN', '34033549', 'Leon Velarde 190 - Dpto. 303 - (Cdra. 18 Av. Arenales, Lince', '5979534', '976891692', 'CARLOS EMILIO@GMAIL.COM', 'CCALMELL', 'CALMELL', 1),
	(55, 1, 1, 1, 'FRANCO', 'FORTI', 'OLANO', '68800801', 'Av. Sucre 748 - Int. K - , Magdalena ', '5670468', '996584941', 'FRANCO@GMAIL.COM', 'FFORTI', 'FORTI', 1),
	(56, 1, 1, 1, 'JULIO', 'NICOLINI', 'FERRAND', '56499947', 'Cl. Roma 545 - Dpto. 4 , Miraflores', '5358720', '997945359', 'JULIO@GMAIL.COM', 'JNICOLINI', 'NICOLINI', 1),
	(57, 1, 1, 1, 'JORGE PATRICIO', 'LOZANO', 'HOLGUIN', '92606332', 'Monterrico Chico 624 , Surco', '5567140', '977260910', 'JORGE PATRICIO@GMAIL.COM', 'JLOZANO', 'LOZANO', 1),
	(58, 1, 1, 1, 'DIEGO ALONSO', 'CHAVEZ', 'RAMOS', '82399298', 'Cl. Sta. Elena Norte 118 - Dpto. 401 , Surco', '5769477', '997359680', 'DIEGO ALONSO@GMAIL.COM', 'DCHAVEZ', 'CHAVEZ', 1),
	(59, 1, 1, 1, 'GONZALO RAFAEL', 'GUILLEN', 'MELENDEZ', '12546473', 'Cl. Albecete (Ex. Cl. 15) N? 102 - Dpto. 201 - Las Magnolias - Frente a plaza Vea del Cortijo, Surco', '5786488', '960547331', 'GONZALO RAFAEL@GMAIL.COM', 'GGUILLEN', 'GUILLEN', 1),
	(60, 1, 1, 1, 'FELIPE SANTIAGO', 'ECHEVARRIA', 'PASSANO', '97967469', 'Jr. Gomez del Carpio 170 - Dpto. 302 - Urb. Barri Medico - (Cdra. 54 y 55 Rep. De Panama), Surquillo', '5783046', '989305531', 'FELIPE SANTIAGO@GMAIL.COM', 'FECHEVARRIA', 'ECHEVARRIA', 1),
	(61, 1, 1, 1, 'ALEJANDRO', 'ALARCO', 'YUNIS', '18126550', 'Las Palomas 260- Sisworld - (Via Expresa con Aramburu), Surquillo', '5803762', '955741634', 'ALEJANDRO@GMAIL.COM', 'AALARCO', 'ALARCO', 1),
	(62, 1, 1, 1, 'JUAN PABLO', 'NATERS', 'FERRECCIO', '61799628', 'Jose del Llano Zapata 229 - (Esq. Con Cavenecia), Miraflores', '5397351', '942695194', 'JUAN PABLO@GMAIL.COM', 'JNATERS', 'NATERS', 1),
	(63, 1, 1, 1, 'PEDRO ANTONIO', 'SALKELD', 'CARHUANCHO', '98683339', 'Rep. De Panama 6037 - Dpto. 202 - , Miraflores', '5610324', '990716161', 'PEDRO ANTONIO@GMAIL.COM', 'PSALKELD', 'SALKELD', 1),
	(64, 1, 1, 1, 'FERNANDO', 'ESCULIES', 'PALACIOS', '75718617', 'CL Francisco De Paula Ugarriza 697, Miraflores', '5901876', '988712063', 'FERNANDO@GMAIL.COM', 'FESCULIES', 'ESCULIES', 1),
	(65, 1, 1, 1, 'DIEGO ALBERTO', 'CRUZ', 'RIOS', '33251846', 'Manuel Segura 810 - Lince Hotel Dallas , Lince', '5410279', '962064299', 'DIEGO ALBERTO@GMAIL.COM', 'DCRUZ', 'CRUZ', 1),
	(66, 1, 1, 1, 'CHRISTOPHER', 'CASTANEDA', 'SALCEDO', '48044375', 'Paseo de la Republica 640 - Agencia Gimsa, Lima', '5354684', '976661333', 'CHRISTOPHER@GMAIL.COM', 'CCASTANEDA', 'CASTANEDA', 1),
	(67, 1, 1, 1, 'JOSe ANTONIO', 'MACEDO', 'GUILLEN', '41918603', 'Los Robles 559 - (Cdra. 11 J. Prado), S/Isidro', '5175035', '949141428', 'JOSe ANTONIO@GMAIL.COM', 'JMACEDO', 'MACEDO', 1),
	(68, 1, 1, 1, 'RAFAEL ANDReS', 'SAVAGE', 'CAMERE', '55897973', 'Petit Thours 3206 - Municipalidad de San Isidro - Gerencia Adm. Tributaria, S/Isidro', '5442224', '993430807', 'RAFAEL ANDReS@GMAIL.COM', 'RSAVAGE', 'SAVAGE', 1),
	(69, 1, 1, 1, 'DIEGO', 'COLMENARES', 'RODRIGUEZ-LARRAIN', '95257525', 'Jr. Cayalti 335 - Monterrico - (Cdra. 11 y 12 Av. Encalada), Surco', '5112375', '942258810', 'DIEGO@GMAIL.COM', 'DCOLMENARES', 'COLMENARES', 1),
	(70, 1, 1, 1, 'RAUL IGNACIO', 'SERQUEN', 'BUSTIOS', '72799827', 'Cl. Nicolas de Pierola 326 - Urb. Liguria - (Espalda Cdra. 14 Av. Ayacucho), Surco', '5607244', '915797022', 'RAUL IGNACIO@GMAIL.COM', 'RSERQUEN', 'SERQUEN', 1),
	(71, 1, 1, 1, 'ALVARO ALONSO', 'ARTETA', 'VELASCO', '29515166', 'Prolong. Arenales 687 - Dpto. 202 - (Cdra. 40 Av. Arequipa), Miraflores', '5701711', '976036763', 'ALVARO ALONSO@GMAIL.COM', 'AARTETA', 'ARTETA', 1),
	(72, 1, 3, 7, 'ALDO', 'AGUINAGA', 'ZECEVIC', '39342178', '', '130', '', 'ALDO@GMAIL.COM', 'AAGUINAGA', 'AGUINAGA', 0),
	(73, 1, 1, 1, 'JORGE ENRIQUE', 'LISTER', 'IZQUIERDO', '33200072', 'Jr. Callao 642 - Parroquia, Lima', '5634885', '949724553', 'JORGE ENRIQUE@GMAIL.COM', 'JLISTER', 'LISTER', 1),
	(74, 1, 1, 1, 'FRANCO', 'FREUNDT', 'OLAECHA', '95883794', 'Burgos 120 - Dpto. 301 - 1? Etapa - (Por el Estadio de la U), Ate', '5537940', '918851431', 'FRANCO@GMAIL.COM', 'FFREUNDT', 'FREUNDT', 1),
	(75, 1, 1, 1, 'FAUSTO IVaN', 'DUCASSI', 'PAZ', '61595832', 'Av. Republica 271 - Edif. 3 - Dpto. 401 - Monterrico - (Cdra. 3 y 4 Av. El Derby), Surco', '5205426', '943297979', 'FAUSTO IVaN@GMAIL.COM', 'FDUCASSI', 'DUCASSI', 1),
	(76, 1, 1, 1, 'FRANCISCO', 'FERRARO', 'ORMAECHE', '17129561', 'Av. Domingo Orue 165 - MIBANCO - (Esq. Cdra. 42 Paseo de la Republica), Surquillo', '5544962', '994443343', 'FRANCISCO@GMAIL.COM', 'FFERRARO', 'FERRARO', 1),
	(77, 1, 1, 1, 'ARTURO JORGE', 'BELLO', 'TORRES', '21412197', 'Av. Universitaria 5634 - Colegio Monserrat, Los Olivos', '5223049', '981579654', 'ARTURO JORGE@GMAIL.COM', 'ABELLO', 'BELLO', 1),
	(78, 1, 1, 1, 'ERNESTO', 'DIANDERAS', 'PEREZ', '70030581', 'Cl. Aranguren 862 - Sta. Luzmila - Por el Mercado de Sta. Luzmila, Comas', '5165252', '956851134', 'ERNESTO@GMAIL.COM', 'EDIANDERAS', 'DIANDERAS', 1),
	(79, 1, 1, 1, 'PATRICIO ENRIQUE', 'SALAZAR', 'CASTAGNINO', '89007145', 'Av. 3 de Octubre 1185 - Km. 13 Av. Tupac - (Paralela Cdra. 11 Av. Belaunde Este), Comas', '5103915', '985393778', 'PATRICIO ENRIQUE@GMAIL.COM', 'PSALAZAR', 'SALAZAR', 1),
	(80, 1, 1, 1, 'RAFAEL', 'SAONA', 'CAMPOS', '98424151', 'Pucala 206 - Dpto. 101 - Esq Rosa Merino, San Miguel', '5962713', '914573620', 'RAFAEL@GMAIL.COM', 'RSAONA', 'SAONA', 1),
	(81, 1, 1, 1, 'PEDRO PABLO', 'SANCHEZ', 'CANTUARIAS', '49244622', 'Jr. Miroquezada 1388 - Int. 2, Lima', '5254974', '988101953', 'PEDRO PABLO@GMAIL.COM', 'PSANCHEZ', 'SANCHEZ', 1),
	(82, 1, 1, 1, 'ALEJANDRO HERNaN', 'ALONSO', 'WOLL', '24532951', 'Pta. De la Discoteca Karamba, Los Olivos', '5545293', '920097922', 'ALEJANDRO HERNaN@GMAIL.COM', 'AALONSO', 'ALONSO', 1),
	(83, 1, 1, 1, 'JOSe MIGUEL', 'MAZZOTTI', 'GLATHAR', '66878821', 'C. Comercial Plaza Lima Norte - En el Patio 2? Piso - Chicharroneria Palermo, Los Olivos', '5248920', '965033953', 'JOSe MIGUEL@GMAIL.COM', 'JMAZZOTTI', 'MAZZOTTI', 1),
	(84, 1, 1, 1, 'JORGE EDUARDO', 'LISTER', 'JACOBS', '59710248', 'Av. Sta. Cruz 884 , Miraflores', '5400329', '911191216', 'JORGE EDUARDO@GMAIL.COM', 'JLISTER', 'LISTER', 1),
	(85, 1, 1, 1, 'CHRISTIAN', 'CASTANEDA', 'SANCHEZ', '23346299', 'Cl. Rosario del Solar 478 - 480 - Zona C - (Frente al Parque Rompecabezas - Cdra. 4 Canevaro), S/J M', '5187825', '961579377', 'CHRISTIAN@GMAIL.COM', 'CCASTANEDA', 'CASTANEDA', 1),
	(86, 1, 1, 1, 'DIEGO ARMANDO', 'CHEHAB', 'RAMIREZ', '71623012', 'Velasco Astete 150 - Dpto. 401, Surco', '5301342', '939027540', 'DIEGO ARMANDO@GMAIL.COM', 'DCHEHAB', 'CHEHAB', 1),
	(87, 1, 1, 1, 'MICHAEL JOHN', 'RIZO', 'CHANG', '52638606', 'Av. La Conquista 150 - Empresa Securita, Surco', '5727971', '945816695', 'MICHAEL JOHN@GMAIL.COM', 'MRIZO', 'RIZO', 1),
	(88, 1, 1, 1, 'HILDEBRANDO', 'HEUDEBERT', 'MADUENO', '59841264', 'Paseo de la Republica 5767 - Dpto. 501 A, Miraflores', '5762636', '974491454', 'HILDEBRANDO@GMAIL.COM', 'HHEUDEBERT', 'HEUDEBERT', 1),
	(89, 1, 1, 1, 'GONZALO', 'GRANDEZ', 'MERINO', '49891520', 'Cl. Mosart 271, S/Borja', '5853458', '976965183', 'GONZALO@GMAIL.COM', 'GGRANDEZ', 'GRANDEZ', 1),
	(90, 1, 1, 1, 'DANIEL FEDERICO', 'CESPEDES', 'RUIZ', '73999390', 'Mcal . Castilla 641 - Dpto. 201 - La Aurora , Miraflores', '5756764', '933120076', 'DANIEL FEDERICO@GMAIL.COM', 'DCESPEDES', 'CESPEDES', 1),
	(91, 1, 1, 1, 'LUIS', 'OLCESE', 'ESTRADA', '16073710', 'Mz. I - Lt. 84 - La Capullana - (Alt. Cdra. 4 Av. Vicus), Surco', '5665537', '915043236', 'LUIS@GMAIL.COM', 'LOLCESE', 'OLCESE', 1),
	(92, 1, 1, 1, 'CARLOS', 'BURGA', 'SUCCAR', '30753266', 'Cl. Meliton Porras 372 - (Paralela Entre Av. La Paz y Av. Reducto), Miraflores', '5686124', '947193913', 'CARLOS@GMAIL.COM', 'CBURGA', 'BURGA', 1),
	(93, 1, 1, 1, 'PATRICIO IAN', 'SALAZAR', 'CIPRIANI', '86895852', 'Paseo de la Republica 5767 - Dpto. 501 A, Miraflores', '5855819', '937664269', 'PATRICIO IAN@GMAIL.COM', 'PSALAZAR', 'SALAZAR', 1),
	(94, 1, 1, 1, 'CHRISTIAN ALEXANDER', 'CASTANEDA', 'SALOM', '71876927', 'Parque Union Panamericana 419 - Balconcillo - (Cdra. 3 Av. Canada), La Victoria', '5794505', '940319670', 'CHRISTIAN ALEXANDER@GMAIL.COM', 'CCASTANEDA', 'CASTANEDA', 1),
	(95, 1, 1, 1, 'FELIPE', 'DYER', 'PASTOR', '77144297', 'Cl. Lord Nelson 215 - (1 Cdra. Antes de la espalda del Cine Alcazar - Por el Ovalo Guitierrez), Mira', '5919781', '922248101', 'FELIPE@GMAIL.COM', 'FDYER', 'DYER', 1),
	(96, 1, 1, 1, 'RICARDO JAVIER', 'TORRES', 'BONDY', '34666989', 'Cl. 5 N? 251 - Monterrico Norte - (Pasando Ultima Cdra. De Artes Norte), S/Borja', '5181963', '964337860', 'RICARDO JAVIER@GMAIL.COM', 'RTORRES', 'TORRES', 1),
	(97, 1, 1, 1, 'FELIPE IGNACIO', 'ECHEVARRIA', 'PASTOR', '73630330', 'Joaquin Torrico 410 (Esq. Con German Amenzaga) , S/J Miraflores', '5215623', '977697903', 'FELIPE IGNACIO@GMAIL.COM', 'FECHEVARRIA', 'ECHEVARRIA', 1),
	(98, 1, 1, 1, 'PERCY KENNETH', 'SANCHEZ', 'CANTUARIAS', '12248985', 'Sector 6 - Grupo 5 - Mz J Lote 7 (Ruta C - Policlinico) - 1 Cdra. Antes de la Posta Juan Pablo II, V', '5312229', '954868415', 'PERCY KENNETH@GMAIL.COM', 'PSANCHEZ', 'SANCHEZ', 1),
	(99, 1, 1, 1, 'RODRIGO ENRIQUE', 'VASQUEZ', 'BALLON SALAZAR', '46429876', 'Pedro Ruiz Gallo 275 - Villa Militar Oeste - (Por Pedro de Osma - Por Clinica Maison Sante), Chorril', '5966763', '975846053', 'RODRIGO ENRIQUE@GMAIL.COM', 'RVASQUEZ', 'VASQUEZ', 1),
	(100, 1, 1, 1, 'MARTiN', 'RAZETTO', 'DE LA PIEDRA', '24259015', 'Jose Sabogal 345 - La Aurora - (Frente al Wong de la Aurora), Miraflores', '5397418', '944982300', 'MARTiN@GMAIL.COM', 'MRAZETTO', 'RAZETTO', 1),
	(101, 1, 1, 1, 'MIGUEL', 'ROBLES', 'CUBAS', '39830239', 'Pta. De la Discoteca Karamba, Los Olivos', '5643370', '942361065', 'MIGUEL@GMAIL.COM', 'MROBLES', 'ROBLES', 1),
	(102, 1, 1, 1, 'RODRIGO MANUEL', 'VEGA', 'BAERTL', '46037660', 'C. Comercial Plaza Lima Norte - En el Patio 2? Piso - Chicharroneria Palermo, Los Olivos', '5573589', '959470682', 'RODRIGO MANUEL@GMAIL.COM', 'RVEGA', 'VEGA', 1),
	(103, 1, 1, 1, 'EDUARDO', 'HEROS', 'POPPE', '64813475', 'Pucala 206 - Dpto. 101 - Esq Rosa Merino, San Miguel', '5779221', '932584266', 'EDUARDO@GMAIL.COM', 'EHEROS', 'HEROS', 1),
	(104, 1, 1, 1, 'RAFAEL ALFONSO', 'SARRIA', 'CAMINO', '48671538', 'Cl. Incaln 105 - Edif. C 2 - Dpto. 407 - (Cdra. 4 Av. La Paz), San Miguel', '5929443', '955171597', 'RAFAEL ALFONSO@GMAIL.COM', 'RSARRIA', 'SARRIA', 1),
	(105, 1, 1, 1, 'CARLOS AGUSTiN', 'BURGA', 'STUVA', '92189642', 'Jr. Felipe Sasone 3885 - Urb. Condevilla - Piso 2 - (Antes del Ovalo de Previ - Cdra. 38 Av. Jose Gr', '5880345', '951569133', 'CARLOS AGUSTiN@GMAIL.COM', 'CBURGA', 'BURGA', 1),
	(106, 1, 1, 1, 'ORLANDO EMILIO', 'RUBINI', 'CIPRIANI', '44689442', 'Cl. La Pila - Mz. B - Lt. 10 - 2 - Urb. Canto Grande - (Alt. Vice con Sta. Rosa), S/J Lurigancho', '5728718', '955427891', 'ORLANDO EMILIO@GMAIL.COM', 'ORUBINI', 'RUBINI', 1),
	(107, 1, 1, 1, 'ROBERTO JOSe', 'TROLL', 'BLAIR UBILLUS', '92785399', 'Justo Vigil 136 - (Alt. Cdra. 8 Av. El Ejercito - Al costado de Larco Herrera), Magdalena del Mar', '5262750', '918547874', 'ROBERTO JOSe@GMAIL.COM', 'RTROLL', 'TROLL', 1),
	(108, 1, 1, 1, 'LUIS AUGUSTO', 'PACHECO', 'ELEJALDE', '54565311', 'Cl. Los Cipreces 138 - Valle Hermoso - (A 3 1/2 Cdras. De IPAE de Valle Hermoso), Surco', '5499812', '998796714', 'LUIS AUGUSTO@GMAIL.COM', 'LPACHECO', 'PACHECO', 1),
	(109, 1, 1, 1, 'ANDReS HERNaN', 'BARDELLI', 'VALDEZ', '31319698', 'Av. Benavides - Cl. Punta Sal - Higuereta, Miraflores', '5774688', '918169107', 'ANDReS HERNaN@GMAIL.COM', 'ABARDELLI', 'BARDELLI', 1),
	(110, 1, 1, 1, 'FARID', 'DUBREUIL', 'PAZ', '17696125', 'Velasco Astete 3443 - 3? Piso , Surco', '5198993', '935967646', 'FARID@GMAIL.COM', 'FDUBREUIL', 'DUBREUIL', 1),
	(111, 1, 1, 1, 'RICARDO ANTONIO', 'TOLEDO', 'BORASINO', '34787133', 'Tomas Marsano 1497 - 29 A , Surquillo', '5798434', '949545748', 'RICARDO ANTONIO@GMAIL.COM', 'RTOLEDO', 'TOLEDO', 1),
	(112, 1, 1, 1, 'ALVARO', 'ARIAS', 'VENEGAS', '10805662', 'Cl. San Juan 303 - Las Gardenias - (Cdra. 15 Caminos del Inca), Surco', '5378318', '946175081', 'ALVARO@GMAIL.COM', 'AARIAS', 'ARIAS', 1),
	(113, 1, 1, 1, 'GASToN IGNACIO', 'GARBIN', 'NARVAEZ', '82293236', 'Av. Mcal. Castilla 635 - Dpto. 301 , Surco', '5337159', '949328767', 'GASToN IGNACIO@GMAIL.COM', 'GGARBIN', 'GARBIN', 1),
	(114, 1, 1, 1, 'LUIS', 'UGAS', 'BERETTA', '27812670', 'Urb. Sta. Rosa - Res. Los Inkas - Edif. Illari - Dpto. 304 B - (Cdra. 10 Guardia Civil), Surco', '5202711', '994326982', 'LUIS@GMAIL.COM', 'LUGAS', 'UGAS', 1),
	(115, 1, 5, 6, 'ALBERTO REYNALDO', 'ADRIANZEN', 'ZERENE', '54689322', '', '127', '', 'ALBERTOREYNALDO@GMAIL.COM', 'AADRIANZEN', 'ADRIANZEN', 1),
	(116, 1, 3, 3, 'ALBERTO BERNARDO', 'ACOSTA', 'ZEVALLOS', '53355118', '', '126', '', 'ALBERTOBERNARDO@GMAIL.COM', 'AACOSTA', 'ACOSTA', 1),
	(117, 1, 1, 1, 'JAVIER GONZALO', 'LANDAURO', 'LAPOINT', '24756175', 'Javier Prado Este 463 - Block C - Dpto. 403 - Inka Golf - rente a Camacho - Junto a Cenespar, Surco', '5438252', '970940437', 'JAVIER GONZALO@GMAIL.COM', 'JLANDAURO', 'LANDAURO', 1),
	(118, 1, 1, 1, 'JORGE OMAR', 'LORET', 'HONORIO', '87150632', 'Emilio Fernandez 641 - Santa Beatriz - (Alt. Cdra. 9 Av Arequipa) - Trilce, Lince', '5653703', '938738095', 'JORGE OMAR@GMAIL.COM', 'JLORET', 'LORET', 1),
	(119, 1, 1, 1, 'BRUNO', 'BIANCATO', 'TAMI', '56026921', 'Ubicado en el Centro Comercial Real Plaza Centro Civico pertenece a Continental Travel Tda. 156, Lim', '5268958', '958074437', 'BRUNO@GMAIL.COM', 'BBIANCATO', 'BIANCATO', 1),
	(120, 1, 1, 1, 'JAVIER', 'JIMENO', 'LEON', '80836541', 'Gutierrez Noriega 199 - (A 2 Cdras. De Mexico con Parinacocha - Frente a un Parque Grande), La Victo', '5529800', '970184735', 'JAVIER@GMAIL.COM', 'JJIMENO', 'JIMENO', 1),
	(121, 1, 1, 1, 'MIGUEL GERARD', 'ROJAS', 'CORONADO', '95095599', 'Ministerio de Economia- Jr Juniin 319 , Lima', '5159750', '954056475', 'MIGUEL GERARD@GMAIL.COM', 'MROJAS', 'ROJAS', 1),
	(122, 1, 1, 1, 'CeSAR AUGUSTO', 'CARRILLO', 'SARMIENTO', '29804611', 'Av. Gran Chimu 985 , S/J Lurigancho', '5217739', '926599265', 'CeSAR AUGUSTO@GMAIL.COM', 'CCARRILLO', 'CARRILLO', 1),
	(123, 1, 1, 1, 'GABRIEL', 'GALLASTEGUI', 'NEYRA', '12212779', 'Leon Velarde 190 - Dpto. 303 - (Cdra. 18 Av. Arenales, Lince', '5112008', '994848662', 'GABRIEL@GMAIL.COM', 'GGALLASTEGUI', 'GALLASTEGUI', 1),
	(124, 1, 1, 1, 'RICARDO', 'TEPLY', 'BOURONCLE', '53964310', 'Cl. Puerto Eten 156 - Dpto. 502 - Urb. Los Reyes - (Cdra. 18 Av. Nicolas Arriola), San Luis', '5205246', '987786066', 'RICARDO@GMAIL.COM', 'RTEPLY', 'TEPLY', 1),
	(125, 1, 1, 1, 'DANIEL ALONSO', 'CAYO', 'SABOGAL', '96234653', 'Los Faisanes 149- A 401 - (Por Plaza Lima Sur- 2? Entrada de Matelini), Chorrillos', '5235497', '937371515', 'DANIEL ALONSO@GMAIL.COM', 'DCAYO', 'CAYO', 1),
	(126, 1, 1, 1, 'JAVIER ANTONIO', 'LA ROSA', 'LEDGARD', '99920386', 'Leon Velarde 190 - Dpto. 303 - (Cdra. 18 Av. Arenales, Lince', '5992838', '954020749', 'JAVIER ANTONIO@GMAIL.COM', 'JLA ROSA', 'LA ROSA', 1),
	(127, 1, 1, 1, 'DIEGO AGUSTiN', 'CROVETTI', 'RIVERA', '99365355', 'Jr. Salino 6211 - Urb. Sta. Luisa - (Por el Mercado de Villasol - Por Sta. Elvira), Los Olivos', '5300698', '944876908', 'DIEGO AGUSTiN@GMAIL.COM', 'DCROVETTI', 'CROVETTI', 1),
	(128, 1, 1, 1, 'AUGUSTO JAVIER', 'BENAVIDES', 'TIZON', '64419807', 'Av. 3 de Octubre 1185 - Km. 13 Av. Tupac - (Paralela Cdra. 11 Av. Belaunde Este), Comas', '5681794', '912711199', 'AUGUSTO JAVIER@GMAIL.COM', 'ABENAVIDES', 'BENAVIDES', 1),
	(129, 1, 1, 1, 'GIAN CARLOS', 'GARCIA', 'MORANTE', '47914362', 'Obsidianas 1345 - Of. 202, La Victoria', '5384826', '957676592', 'GIAN CARLOS@GMAIL.COM', 'GGARCIA', 'GARCIA', 1),
	(130, 1, 1, 1, 'ViCTOR RAFAEL', 'ZAGAZETA', 'AGENA', '21680142', 'Los Abanicos 163 - La Encantada de Villa - (2 Paralelas de la Playa - Entrar por Los Cedros o pantan', '5832252', '964557013', 'ViCTOR RAFAEL@GMAIL.COM', 'VZAGAZETA', 'ZAGAZETA', 1),
	(131, 1, 1, 1, 'RODRIGO', 'VALDEZ', 'BELLIDO', '73129984', 'Cl. Las Cantutas 245 - Dpto. 301 - Casuarinas Sur, Surco', '5454255', '962355702', 'RODRIGO@GMAIL.COM', 'RVALDEZ', 'VALDEZ', 1),
	(132, 1, 1, 1, 'LUIS ANTONIO', 'OTOYA', 'ELEJALDE', '69540060', 'Cl. Grau 490 - Dpto. 102 - (Alt. Cdra. 5 Av. Pardo), Miraflores', '5510093', '976937340', 'LUIS ANTONIO@GMAIL.COM', 'LOTOYA', 'OTOYA', 1),
	(133, 1, 1, 1, 'CHRISTIAN', 'CASANOVA', 'SANDOVAL', '93440210', 'Octavio 154 - Dpto. 3 - Urb. Reducto - (Alt. Cdra. 23 Av. Primavera - Frente a Plaza Vea), Surquillo', '5709595', '943163921', 'CHRISTIAN@GMAIL.COM', 'CCASANOVA', 'CASANOVA', 1),
	(134, 1, 1, 1, 'MARTiN GUSTAVO', 'REMOLINA', 'DAMIANI', '41955115', 'Ubicado en el Centro Comercial Real Plaza Centro Civico pertenece a Continental Travel Tda. 156, Lim', '5919361', '940834075', 'MARTiN GUSTAVO@GMAIL.COM', 'MREMOLINA', 'REMOLINA', 1),
	(135, 1, 1, 1, 'JUAN MANUEL', 'MOSCOL', 'FIGUEROLA', '62320169', 'Av. El Polo 434 - Suiza Lab, Surco', '5656959', '967100562', 'JUAN MANUEL@GMAIL.COM', 'JMOSCOL', 'MOSCOL', 1),
	(136, 1, 1, 1, 'ZERGIO', 'ZUZUNAGA', 'ABAD', '46701289', 'Emleor Leyer 118 - Dpto. 201 - (Cdra. 47 y 48 Av. Aviacion) , Surco', '5501955', '983025523', 'ZERGIO@GMAIL.COM', 'ZZUZUNAGA', 'ZUZUNAGA', 1),
	(137, 1, 1, 1, 'JOSe LUIS', 'MATELLINI', 'GOMEZ', '91875451', 'Cdra. 7 Av. Jorge Chavez - Mercado Anexo - Pto. 364 - Por el Ovalo Balta, Surco', '5162276', '917972862', 'JOSe LUIS@GMAIL.COM', 'JMATELLINI', 'MATELLINI', 1),
	(138, 1, 1, 1, 'JAVIER ALONSO', 'HOZ', 'LEGUIA', '42876881', 'Horacio Urteaga 674 - Dpto. 102 - (Frente al Campo de Marte), Jesus Maria', '5483044', '994179474', 'JAVIER ALONSO@GMAIL.COM', 'JHOZ', 'HOZ', 1),
	(139, 1, 1, 1, 'MAURICIO', 'RIGACCI', 'CHIRINOS', '20485910', 'Jr. Continsuyo 231 - Zarate - (Cdra. 8 Av. Gran Chimu), S/J Lurigancho', '5544872', '946763110', 'MAURICIO@GMAIL.COM', 'MRIGACCI', 'RIGACCI', 1),
	(140, 1, 1, 1, 'ERICK PABLO', 'DEVERCELLI', 'PEREZ', '80676238', 'Jr. Ayacucho 218 - Dpto. 502 - (Cdra. 3 Av. Abancay - Costado del Congreso), Lima', '5775625', '975037729', 'ERICK PABLO@GMAIL.COM', 'EDEVERCELLI', 'DEVERCELLI', 1),
	(141, 1, 1, 1, 'MARCO ANTONIO', 'POMAREDA', 'DE LOS RIOS', '32198533', 'Psje. Fabri 1161 - Dpto. 408 - (Alt. Cdra. 2 de Lucano - Alt. De la Maternidada de Lima), Lima', '5505378', '956138494', 'MARCO ANTONIO@GMAIL.COM', 'MPOMAREDA', 'POMAREDA', 1),
	(142, 1, 1, 1, 'JOSe LUIS', 'MAS', 'GONZALEZ', '81017344', 'Jr. Callao 642 - Parroquia, Lima', '5499485', '982415964', 'JOSe LUIS@GMAIL.COM', 'JMAS', 'MAS', 1),
	(143, 1, 1, 1, 'JAIME', 'IRIARTE', 'LOOMER', '59636688', 'Las Bellotitas 1201 - La Violetas - (Entre Colegio Bren y Metro), S/Lurigancho', '5452300', '949912929', 'JAIME@GMAIL.COM', 'JIRIARTE', 'IRIARTE', 1),
	(144, 1, 1, 1, 'ERNESTO MANUEL', 'DIBOS', 'PENDAVIS', '54099845', 'Av. Costanera N? 2098 , San Miguel', '5478970', '987365785', 'ERNESTO MANUEL@GMAIL.COM', 'EDIBOS', 'DIBOS', 1),
	(145, 1, 1, 1, 'RODRIGO', 'VALDIVIA', 'BASURCO', '99512495', 'Av. Faucett 132 Cruce con Av. La Marina - Clinica Visual Center , San Miguel', '5616799', '999294615', 'RODRIGO@GMAIL.COM', 'RVALDIVIA', 'VALDIVIA', 1),
	(146, 1, 1, 1, 'CARLOS ALBERTO', 'BUSTAMANTE', 'SOUSA', '87420275', 'Av. Industrial 3124 - Espalda de Senati, Independencia', '5387342', '984812869', 'CARLOS ALBERTO@GMAIL.COM', 'CBUSTAMANTE', 'BUSTAMANTE', 1),
	(147, 1, 1, 1, 'AUGUSTO', 'BENAVENTE', 'TORI', '21174217', 'Jr. Salino 6211 - Urb. Sta. Luisa - (Por el Mercado de Villasol - Por Sta. Elvira), Los Olivos', '5627735', '969797324', 'AUGUSTO@GMAIL.COM', 'ABENAVENTE', 'BENAVENTE', 1),
	(148, 1, 1, 1, 'DIEGO REYNALDO', 'FUENTE', 'PROTZEL', '11328400', 'Jr. Cahuide 121 - Tahuantinsuyo - (Alt. Del Colegio Rep. De Colombia- Entre Av. Indoamerica con Huan', '5730548', '946016124', 'DIEGO REYNALDO@GMAIL.COM', 'DFUENTE', 'FUENTE', 1),
	(149, 1, 1, 1, 'LUIS ALBERTO', 'OLIART', 'ESPINOSA', '90685630', 'Los Abanicos 163 - La Encantada de Villa - (2 Paralelas de la Playa - Entrar por Los Cedros o pantan', '5893643', '945748448', 'LUIS ALBERTO@GMAIL.COM', 'LOLIART', 'OLIART', 1),
	(150, 1, 1, 1, 'AUGUSTO FELIPE', 'BENAVIDES', 'TOLA', '41622414', 'Jose de la Torre Ugarte 395 - Polleria El SeNorial - (Frente al Boulevard), Comas', '5945830', '917556357', 'AUGUSTO FELIPE@GMAIL.COM', 'ABENAVIDES', 'BENAVIDES', 1),
	(151, 1, 1, 1, 'DIEGO GONZALO', 'CHUECA', 'QUINONES', '90796750', 'Manuel Taffur 145 - Sta. Luzmila - (Por el Parque de los Bomberos), Comas', '5888888', '969353166', 'DIEGO GONZALO@GMAIL.COM', 'DCHUECA', 'CHUECA', 1),
	(152, 1, 1, 1, 'IGNACIO ROBERTO', 'IBANEZ', 'LUNA', '48699408', 'Av. Industrial 3124 - Espalda de Senati, Independencia', '5253649', '919645890', 'IGNACIO ROBERTO@GMAIL.COM', 'IIBANEZ', 'IBANEZ', 1),
	(153, 1, 1, 1, 'EDUARDO JESuS', 'TRAMONTANA', 'PINILLOS', '55373856', 'Jose de la Torre Ugarte 395 - Polleria El SeNorial - (Frente al Boulevard), Comas', '5931932', '984598232', 'EDUARDO JESuS@GMAIL.COM', 'ETRAMONTANA', 'TRAMONTANA', 1),
	(154, 1, 1, 1, 'FERNANDO', 'ECHEVARRIA', 'PASSANO', '25214110', 'Av. El Naranjal 777 - Urb. Parque -(Cdra. 7 Palmeras), Los Olivos', '5489744', '956633418', 'FERNANDO@GMAIL.COM', 'FECHEVARRIA', 'ECHEVARRIA', 1),
	(155, 1, 1, 1, 'MIGUEL JESuS', 'ROJAS', 'CORREA', '48512078', 'Unidad Vecinal Mirones Chalet 59 LL - Urb. Elio - ((Alt. Cdra. 28 Av. Venezuela - Alt. De Donofrio),', '5442333', '941120080', 'MIGUEL JESuS@GMAIL.COM', 'MROJAS', 'ROJAS', 1),
	(156, 1, 4, 6, 'ALDO ALEXIS', 'AGUIRRE', 'ZARATE', '75259859', '', '126', '', 'ALDOALEXIS@GMAIL.COM', 'AAGUIRRE', 'AGUIRRE', 1),
	(157, 1, 1, 1, 'JOSe BERNARDO', 'MAGNIFICO', 'GUERINONI', '61720111', 'Av. Saenz PeNa 298 - Banco de la Nacion, Callao', '5640420', '910578646', 'JOSe BERNARDO@GMAIL.COM', 'JMAGNIFICO', 'MAGNIFICO', 1),
	(158, 1, 1, 1, 'ALVARO MAURICIO', 'BACA', 'VASQUEZ', '95430754', 'Jr. Condes de Suquerunda 239 - Int. 215 - 2? Piso - (Esq. Con Camana - Por Plaza de Armas), Lima', '5515809', '974076350', 'ALVARO MAURICIO@GMAIL.COM', 'ABACA', 'BACA', 1),
	(159, 1, 1, 1, 'JAVIER MANUEL', 'LASSUS', 'LABARTHE', '73319731', 'Av. Eduardo de Habich 376 - Ingenieria, SMP', '5983147', '985117896', 'JAVIER MANUEL@GMAIL.COM', 'JLASSUS', 'LASSUS', 1),
	(160, 1, 1, 1, 'GINO MIRKO', 'GJIVANOVIC', 'MONCLOA', '38710146', 'Cl. Oslo 173 - Urb. Resid. Callao - 3? Piso - (Entrada por Cl. Las Leyendas o Cl. Estocolmo), San Mi', '5464604', '916250312', 'GINO MIRKO@GMAIL.COM', 'GGJIVANOVIC', 'GJIVANOVIC', 1),
	(161, 1, 1, 1, 'ALVARO ROBERTO', 'BALBI', 'VARGAS', '10564818', 'Jr. Manuel 549 - (Por el Barrio Obrero), SMP', '5690584', '993406142', 'ALVARO ROBERTO@GMAIL.COM', 'ABALBI', 'BALBI', 1),
	(162, 1, 1, 1, 'FERNANDO', 'ELIAS', 'PALOMINO', '97284664', 'Av. Universitaria 5634 - Colegio Monserrat, Los Olivos', '5290791', '966724557', 'FERNANDO@GMAIL.COM', 'FELIAS', 'ELIAS', 1),
	(163, 1, 1, 1, 'BENJAMiN EDUARDO', 'BERNAL', 'TELLO', '98801336', 'Av. Universitaria 1595 - Urb. Retablo - (Por el Boulevard), Comas', '5476137', '955016092', 'BENJAMiN EDUARDO@GMAIL.COM', 'BBERNAL', 'BERNAL', 1),
	(164, 1, 1, 1, 'JOSe PABLO', 'MENDIVIL', 'GARCIA', '52985834', 'Jr. Antonio Razuri 227 - Guaquillay - 2? Etapa - (Por Sedapal), Comas', '5340521', '925964460', 'JOSe PABLO@GMAIL.COM', 'JMENDIVIL', 'MENDIVIL', 1),
	(165, 1, 1, 1, 'CARLOS ALFONSO', 'CACERES', 'SOTERO', '79696309', 'Av. Marco Polo 170 - (Cdra. 3 y 4 Saenz PeNa - Por el Telepodromo El Puerto), Callao', '5121412', '919778997', 'CARLOS ALFONSO@GMAIL.COM', 'CCACERES', 'CACERES', 1),
	(166, 1, 1, 1, 'ALEJANDRO', 'ALARCON', 'YORI', '97337045', 'Jr. Tupac Inca 146 - Tahuantinsuyo - (Por el Mercado Los Incas - Al costado del BCP), Independencia', '5756149', '937334461', 'ALEJANDRO@GMAIL.COM', 'AALARCON', 'ALARCON', 1),
	(167, 1, 1, 1, 'ALFREDO', 'ANAYA', 'VIDAURRE', '60637280', 'Av. 3 de Octubre 1185 - Km. 13 Av. Tupac - (Paralela Cdra. 11 Av. Belaunde Este), Comas', '5414743', '927539759', 'ALFREDO@GMAIL.COM', 'AANAYA', 'ANAYA', 1),
	(168, 1, 1, 1, 'CARLOS ALBERTO', 'BURGOS', 'STROBBE', '48591816', 'Jr. Jose Cossio 260 - (Cdra. 8 J. Prado Oeste con Brasil o Cdra. 8 Av. El Ejercito con Larco Herrera', '5938028', '996269589', 'CARLOS ALBERTO@GMAIL.COM', 'CBURGOS', 'BURGOS', 1),
	(169, 1, 1, 1, 'ALVARO EDUARDO', 'ASPILLAGA', 'VELASCO', '25560330', 'Jr. Los Limoncillos 4018 - 3? Piso - (Alt. De la Telefonica de Palmeras - De la Iglesia Bajar 6 Cdra', '5997344', '995502692', 'ALVARO EDUARDO@GMAIL.COM', 'AASPILLAGA', 'ASPILLAGA', 1),
	(170, 1, 1, 1, 'DANIEL', 'CASTRO', 'RONCAL', '90996143', 'Alfredo Mendiola 1269 - Of. C 301, Los Olivos', '5320724', '964807462', 'DANIEL@GMAIL.COM', 'DCASTRO', 'CASTRO', 1),
	(171, 1, 6, 6, 'ALEJANDRO', 'AITA', 'ZAMBRANO', '67974770', '', '112', '', 'ALEJANDRO@GMAIL.COM', 'AAITA', 'AITA', 1),
	(172, 1, 1, 1, 'MARTiN', 'RAZZETO', 'DE LA GUERRA', '25098673', 'Jr. Canta 545 - (Espalda del consejo de la Municipalidad - Por la Plaza Manco Capac), La Victoria', '5935031', '950484478', 'MARTiN@GMAIL.COM', 'MRAZZETO', 'RAZZETO', 1),
	(173, 1, 1, 1, 'JOSe FRANCISCO', 'MARTINEZ', 'GORDILLO', '78359758', 'Av. Universitaria 5634 - Colegio Monserrat, Los Olivos', '5163429', '915463327', 'JOSe FRANCISCO@GMAIL.COM', 'JMARTINEZ', 'MARTINEZ', 1),
	(174, 1, 1, 1, 'JORGE ANTONIO', 'LI', 'JANZIC', '87868417', 'Av. Marco Polo 170 - (Cdra. 3 y 4 Saenz PeNa - Por el Telepodromo El Puerto), Callao', '5420219', '969256812', 'JORGE ANTONIO@GMAIL.COM', 'JLI', 'LI', 1),
	(175, 1, 1, 1, 'JOSe ALONSO', 'LLAMOSAS', 'HENRICI', '11543203', 'Miguel Garu 906 - Piso 10 - Edif. 3 Pisos - Esq. Con Huamanga - (Psasando Almenara - Pasando Asisten', '5461365', '928544141', 'JOSe ALONSO@GMAIL.COM', 'JLLAMOSAS', 'LLAMOSAS', 1),
	(176, 1, 1, 1, 'IGNACIO', 'HOLLER', 'LLAURY', '17893575', 'Av. Emancipacion 364 - A - Int. 201 , Lima', '5471044', '960029633', 'IGNACIO@GMAIL.COM', 'IHOLLER', 'HOLLER', 1),
	(177, 1, 1, 1, 'MARTiN ALONSO', 'REATEGUI', 'DE BERNARDIS', '48289695', 'Polvos Azules - Sotano - Block 16 - Cl. 3 - Tda. 9 o 12- ESPERAR EN LA COCHERA, Lima', '5590136', '923895981', 'MARTiN ALONSO@GMAIL.COM', 'MREATEGUI', 'REATEGUI', 1),
	(178, 1, 1, 1, 'RAuL ANTONIO', 'SEMINO', 'CABALLERO', '85239159', 'Jr. Manuel 549 - (Por el Barrio Obrero), SMP', '5948386', '961506133', 'RAuL ANTONIO@GMAIL.COM', 'RSEMINO', 'SEMINO', 1),
	(179, 1, 1, 1, 'WILLY ALFREDO', 'ZIEGLER', 'ACUY', '69060254', 'Av. Colombia 439 - Dpto. 301 - (Cdra. 11 Av. Brasil - Al cosatdo del Colegio Elvira Garcia Garcia), ', '5526092', '963989148', 'WILLY ALFREDO@GMAIL.COM', 'WZIEGLER', 'ZIEGLER', 1),
	(180, 1, 1, 1, 'ANDReS VLADIMIR', 'BARREDA', 'VALDERRAMA', '22027977', 'Cl. 3 N? 282 - Urb. 10 de Enero - (Cdra. 32 Av. Colonial - Frente al BCP), Callao', '5801279', '910983495', 'ANDReS VLADIMIR@GMAIL.COM', 'ABARREDA', 'BARREDA', 1),
	(181, 1, 1, 1, 'DANIEL', 'CASTRO', 'SALAS', '18521912', 'Av. Marco Polo 170 - (Cdra. 3 y 4 Saenz PeNa - Por el Telepodromo El Puerto), Callao', '5368210', '981234429', 'DANIEL@GMAIL.COM', 'DCASTRO', 'CASTRO', 1),
	(182, 1, 1, 1, 'ALONSO', 'APARICIO', 'VIACAVA', '89967143', 'Cl. San Hernan 259 - Urb. Sta. Luisa - 2? Etapa , Los Olivos', '5614938', '967211755', 'ALONSO@GMAIL.COM', 'AAPARICIO', 'APARICIO', 1),
	(183, 1, 1, 1, 'FERNANDO', 'EGUILUZ', 'PARRA', '13486606', 'Urb. El Pinar - Cl. 7 - Mz. U - Lt. 43 - Dpto. 304 - Torre A - (Paradero Pesca Brava de Trapiche  - ', '5812798', '957528540', 'FERNANDO@GMAIL.COM', 'FEGUILUZ', 'EGUILUZ', 1),
	(184, 1, 1, 1, 'DIEGO', 'CROUSILLAT', 'RIZO PATRON', '47967753', 'Jr. Condes de Suquerunda 239 - Int. 215 - 2? Piso - (Esq. Con Camana - Por Plaza de Armas), Lima', '5822541', '987071646', 'DIEGO@GMAIL.COM', 'DCROUSILLAT', 'CROUSILLAT', 1),
	(185, 1, 1, 1, 'ALLAN CARLOS', 'ANSELMI', 'VIANA', '48297334', 'Alfredo Mendiola 1269 - Of. C 301, Los Olivos', '5423906', '947022621', 'ALLAN CARLOS@GMAIL.COM', 'AANSELMI', 'ANSELMI', 1),
	(186, 1, 11, 6, 'JENSEN', 'LEYVA', 'RODRIGUEZ', '46789547', '', '126', '', 'JENSEN.LEYVA@INSECORP.PE', 'JLEYVA', '123456', 1),
	(187, 1, 2, 4, 'MARIELA', 'SILVA', 'ROMERO', '45871235', '', '154', '', 'MARIELA.SILVA@INSECORP.PE', 'MSILVA', '123456', 1),
	(188, 1, 5, 6, 'JOEL', 'DENEGRI', 'ROJAS', '32417548', '', '129', '', 'JOEL.DENEGRI@INSECORP.PE', 'JDENEGRI', '123456', 1),
	(189, 1, 11, 5, 'SONJA', 'ROJAS', 'PEREZ', '36124575', '', '130', '', 'SONJA.ROJAS@INSECORP.PE', 'SROJAS', '123456', 1),
	(190, 1, 11, 6, 'MARíA', 'SALDARRIAGA', 'RAMíREZ', '65741523', '', '117', '', 'MARIA.SALDARRIAGA@INSECORP.PE', 'MSALDARRIAGA', '123456', 1);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(10) NOT NULL AUTO_INCREMENT,
  `nom_empresa` varchar(100) NOT NULL,
  `ruc_empresa` varchar(11) NOT NULL,
  `dir_empresa` varchar(100) NOT NULL,
  `dist_empresa` varchar(100) NOT NULL,
  `dep_empresa` varchar(100) NOT NULL,
  `pais_empresa` varchar(100) NOT NULL,
  `logo_empresa` varchar(100) NOT NULL,
  `color_empresa` varchar(100) NOT NULL,
  `desc_empresa` longtext NOT NULL,
  `act_empresa` int(2) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.empresa: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id_empresa`, `nom_empresa`, `ruc_empresa`, `dir_empresa`, `dist_empresa`, `dep_empresa`, `pais_empresa`, `logo_empresa`, `color_empresa`, `desc_empresa`, `act_empresa`) VALUES
	(1, 'INSERCOP SAC', '22222222222', 'LOS OLIVOS', 'LIMA', 'LIMA', 'PERU', 'img/logo/logo.png', '#000000', ' ', 1);
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.impacto
CREATE TABLE IF NOT EXISTS `impacto` (
  `id_impacto` int(10) NOT NULL AUTO_INCREMENT,
  `nom_impacto` varchar(100) NOT NULL,
  `act_impacto` int(2) NOT NULL,
  PRIMARY KEY (`id_impacto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.impacto: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `impacto` DISABLE KEYS */;
INSERT INTO `impacto` (`id_impacto`, `nom_impacto`, `act_impacto`) VALUES
	(1, 'AFECTA AREA', 1),
	(2, 'AFECTA GRUPO', 1),
	(3, 'AFECTA NEGOCIO', 1),
	(4, 'AFECTA USUARIO', 1);
/*!40000 ALTER TABLE `impacto` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.incidencia
CREATE TABLE IF NOT EXISTS `incidencia` (
  `id_incidencia` int(10) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(10) NOT NULL,
  `id_asignado` int(10) NOT NULL,
  `id_tipo_solicitud` int(10) NOT NULL,
  `id_modo` int(10) NOT NULL,
  `id_impacto` int(10) NOT NULL,
  `id_prioridad` int(10) NOT NULL,
  `id_categoria_detalle` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `niv_incidencia` varchar(10) NOT NULL,
  `asu_incidencia` longtext NOT NULL,
  `des_incidencia` longtext NOT NULL,
  `time_ini_incidencia` datetime NOT NULL,
  `time_fin_incidencia` datetime NOT NULL,
  `fec_ven` datetime NOT NULL,
  `act_incidencia` int(2) NOT NULL,
  PRIMARY KEY (`id_incidencia`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.incidencia: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `incidencia` DISABLE KEYS */;
INSERT INTO `incidencia` (`id_incidencia`, `id_cliente`, `id_asignado`, `id_tipo_solicitud`, `id_modo`, `id_impacto`, `id_prioridad`, `id_categoria_detalle`, `id_usuario`, `niv_incidencia`, `asu_incidencia`, `des_incidencia`, `time_ini_incidencia`, `time_fin_incidencia`, `fec_ven`, `act_incidencia`) VALUES
	(32, 3, 7, 1, 1, 1, 1, 28, 1, 'NIVEL 3', 'A', 'A', '2017-05-03 18:01:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
	(33, 3, 5, 4, 1, 1, 1, 30, 1, 'Nivel 2', 'CAMBIENME', 'PORFAVOR', '2017-05-03 18:03:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
	(35, 4, 5, 1, 1, 1, 1, 30, 1, 'Nivel 2', 'O', 'O', '2017-05-04 18:23:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
	(41, 1, 5, 3, 1, 4, 3, 28, 1, 'Nivel 2', 'SOLICITA CAMBIO DE MONITOR', 'SOLICITA CAMBIO DE MONITOR', '2017-05-06 16:27:42', '0000-00-00 00:00:00', '2017-05-09 12:00:00', 5),
	(42, 5, 5, 1, 2, 4, 3, 29, 1, 'Nivel 2', 'REPORTA PROBLEMAS CON LA CONEXION DE RED', 'REPORTA PROBLEMAS CON LA CONEXION DE RED', '2017-05-06 16:55:21', '0000-00-00 00:00:00', '2017-05-10 12:00:00', 4),
	(43, 3, 4, 2, 1, 1, 2, 35, 1, 'Nivel 1', 'SOLICITA CAMBIO DE PRECIO EN PRODUCTO', 'SOLICITA CAMBIO DE PRECIO EN PRODUCTO', '2017-05-06 17:49:39', '0000-00-00 00:00:00', '2017-05-08 12:00:00', 4),
	(44, 15, 4, 6, 2, 4, 3, 35, 1, 'NIVEL 1', 'SOLICITA ACCESO A LAS HOJAS TECNICAS DE SEGURIDAD', 'SOLICITA ACCESO A LAS HOJAS TECNICAS DE SEGURIDAD', '2017-05-06 18:01:04', '2017-05-06 18:12:25', '2017-05-10 12:00:00', 2),
	(45, 190, 4, 1, 2, 4, 3, 29, 1, 'NIVEL 1', 'REPORTA QUE NO PUEDE ACCEDER A LAS PáGINAS DEL BANCO', 'REPORTA QUE NO PUEDE ACCEDER A LAS PáGINAS DEL BANCO', '2017-05-06 18:51:53', '0000-00-00 00:00:00', '2017-05-08 12:00:00', 4),
	(46, 9, 4, 3, 2, 4, 3, 33, 4, 'NIVEL 1', 'SOLICITA CREACIóN DE CUENTA DE CORREO CORPORATIVO', 'SOLICITA CREACIóN DE CUENTA DE CORREO CORPORATIVO', '2017-05-06 20:45:06', '0000-00-00 00:00:00', '2017-05-09 12:00:00', 4);
/*!40000 ALTER TABLE `incidencia` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.incidencia_cambio
CREATE TABLE IF NOT EXISTS `incidencia_cambio` (
  `id_incidencia_cambio` int(10) NOT NULL AUTO_INCREMENT,
  `id_incidencia` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `tip_incidencia_cambio` varchar(100) NOT NULL,
  `det_incidencia_cambio` longtext NOT NULL,
  `desc_incidencia_cambio` longtext NOT NULL,
  `time_ini_incidencia_cambio` time NOT NULL,
  `time_fin_incidencia_cambio` time NOT NULL,
  `fec_incidencia_cambio` date NOT NULL,
  PRIMARY KEY (`id_incidencia_cambio`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.incidencia_cambio: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `incidencia_cambio` DISABLE KEYS */;
INSERT INTO `incidencia_cambio` (`id_incidencia_cambio`, `id_incidencia`, `id_usuario`, `tip_incidencia_cambio`, `det_incidencia_cambio`, `desc_incidencia_cambio`, `time_ini_incidencia_cambio`, `time_fin_incidencia_cambio`, `fec_incidencia_cambio`) VALUES
	(127, 32, 1, 'ASIGNACIÃ“N', '2', 'TU PUEDES', '18:01:02', '18:01:13', '2017-05-03'),
	(128, 32, 2, 'CAMBIO DE ESTADO', '3', '', '18:01:02', '18:01:41', '2017-05-03'),
	(130, 33, 1, 'ASIGNACIÃ“N', '2', 'GGG', '18:03:28', '18:22:42', '2017-05-04'),
	(131, 35, 1, 'CAMBIO DE ESTADO', '3', '', '18:23:00', '18:25:21', '2017-05-04'),
	(132, 35, 1, 'ASIGNACIÃ“N', '3', 'AAA', '18:23:00', '18:25:49', '2017-05-04'),
	(134, 41, 1, 'ASIGNACIÃ“N', '3', '.', '16:27:42', '16:40:15', '2017-05-06'),
	(135, 41, 1, 'CAMBIO DE ESTADO', '5', '', '16:27:42', '16:47:16', '2017-05-06'),
	(136, 41, 1, 'ASIGNACIÃ“N', '3', '.', '16:27:42', '16:47:38', '2017-05-06'),
	(137, 41, 1, 'ASIGNACIÃ“N', '5', '.', '16:27:42', '16:54:20', '2017-05-06'),
	(138, 42, 1, 'ASIGNACIÃ“N', '5', '.', '16:55:21', '16:55:59', '2017-05-06'),
	(139, 42, 1, 'ASIGNACIÃ“N', '5', '.', '16:55:21', '16:59:50', '2017-05-06'),
	(140, 32, 1, 'ASIGNACIÃ“N', '5', '.', '18:01:02', '17:44:16', '2017-05-06'),
	(141, 33, 1, 'ASIGNACIÃ“N', '5', '.', '18:03:28', '17:44:44', '2017-05-06'),
	(143, 35, 1, 'ASIGNACIÃ“N', '5', '.', '18:23:00', '17:47:48', '2017-05-06'),
	(145, 43, 1, 'ASIGNACIÃ“N', '4', '.', '17:49:39', '17:50:06', '2017-05-06'),
	(146, 44, 1, 'ASIGNACIÃ“N', '4', '.', '18:01:04', '18:01:17', '2017-05-06'),
	(147, 44, 1, 'CAMBIO DE ESTADO', '2', '', '18:01:04', '18:12:25', '2017-05-06'),
	(148, 32, 1, 'ASIGNACIÃ“N', '7', '.', '18:01:02', '18:23:53', '2017-05-06'),
	(149, 45, 1, 'ASIGNACIÓN', '4', '.', '18:51:53', '18:52:09', '2017-05-06'),
	(150, 46, 4, 'ASIGNACIÓN', '4', '.', '20:45:06', '20:45:35', '2017-05-06');
/*!40000 ALTER TABLE `incidencia_cambio` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.modo
CREATE TABLE IF NOT EXISTS `modo` (
  `id_modo` int(10) NOT NULL AUTO_INCREMENT,
  `nom_modo` varchar(100) NOT NULL,
  `act_modo` int(2) NOT NULL,
  PRIMARY KEY (`id_modo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.modo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `modo` DISABLE KEYS */;
INSERT INTO `modo` (`id_modo`, `nom_modo`, `act_modo`) VALUES
	(1, 'EMAIL', 1),
	(2, 'LLAMADA TELEFONICA', 1),
	(3, 'FORMULARIO WEB', 1);
/*!40000 ALTER TABLE `modo` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.prioridad
CREATE TABLE IF NOT EXISTS `prioridad` (
  `id_prioridad` int(10) NOT NULL AUTO_INCREMENT,
  `nom_prioridad` varchar(100) NOT NULL,
  `act_prioridad` int(2) NOT NULL,
  PRIMARY KEY (`id_prioridad`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.prioridad: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `prioridad` DISABLE KEYS */;
INSERT INTO `prioridad` (`id_prioridad`, `nom_prioridad`, `act_prioridad`) VALUES
	(1, 'Urgente', 1),
	(2, 'Alto', 1),
	(3, 'Normal', 1),
	(4, 'Bajo', 1);
/*!40000 ALTER TABLE `prioridad` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.tipo_documento
CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `id_tipo_documento` int(10) NOT NULL AUTO_INCREMENT,
  `nom_tipo_documento` varchar(100) NOT NULL,
  `act_tipo_documento` int(2) NOT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.tipo_documento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_documento` DISABLE KEYS */;
INSERT INTO `tipo_documento` (`id_tipo_documento`, `nom_tipo_documento`, `act_tipo_documento`) VALUES
	(1, 'DNI', 1),
	(2, 'RUC', 1);
/*!40000 ALTER TABLE `tipo_documento` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.tipo_solicitud
CREATE TABLE IF NOT EXISTS `tipo_solicitud` (
  `id_tipo_solicitud` int(10) NOT NULL AUTO_INCREMENT,
  `nom_tipo_solicitud` varchar(100) NOT NULL,
  `act_tipo_solicitud` int(2) NOT NULL,
  PRIMARY KEY (`id_tipo_solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.tipo_solicitud: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_solicitud` DISABLE KEYS */;
INSERT INTO `tipo_solicitud` (`id_tipo_solicitud`, `nom_tipo_solicitud`, `act_tipo_solicitud`) VALUES
	(1, 'INCIDENCIA', 1),
	(2, 'MODIFICACION DE LA INFORMACION', 1),
	(3, 'REQUERIMIENTO', 1),
	(4, 'SOLICITUD DE CAMBIO', 1),
	(5, 'SOLICITUD DE CAPACITACION', 1),
	(6, 'SOLICITUD DE INFORMACION', 1);
/*!40000 ALTER TABLE `tipo_solicitud` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario_tipo` int(10) NOT NULL,
  `nom_usuario` varchar(50) NOT NULL,
  `ape_pat_usuario` varchar(50) NOT NULL,
  `ape_mat_usuario` varchar(50) NOT NULL,
  `usu_usuario` varchar(50) NOT NULL,
  `pass_usuario` varchar(50) NOT NULL,
  `act_usuario` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.usuario: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `id_usuario_tipo`, `nom_usuario`, `ape_pat_usuario`, `ape_mat_usuario`, `usu_usuario`, `pass_usuario`, `act_usuario`) VALUES
	(1, 1, 'EDMAR', 'ORELLANA', 'ORELLANA', 'ADMIN', '1', 1),
	(3, 2, 'KEVIN', 'MULLUHUARA', 'CERRON', 'KMULLUHUARA', '123456', 1),
	(4, 1, 'EDMAR', 'ORELLANA', 'GOMERO', 'EORELLANA', '123456', 1),
	(5, 2, 'IVAN', 'CORTEZ', 'ANAMPA', 'ICORTEZ', '123456', 1),
	(6, 2, 'JUAN', 'BERROCAL', 'CANCINO', 'JBERROCAL', '123456', 1),
	(7, 2, 'WELSI', 'TUESTA', 'VIENA', 'WTUESTA', '123456', 1),
	(8, 2, 'ANA', 'VEGA', 'MARTINEZ', 'AVEGA', '123456', 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla insecorp.usuario_tipo
CREATE TABLE IF NOT EXISTS `usuario_tipo` (
  `id_usuario_tipo` int(10) NOT NULL AUTO_INCREMENT,
  `nom_usuario_tipo` varchar(50) NOT NULL,
  `incidencias` int(2) NOT NULL,
  `categorias` int(2) NOT NULL,
  `clientes` int(2) NOT NULL,
  `usuarios` int(2) NOT NULL,
  `informes` int(2) NOT NULL,
  `perfil` int(2) NOT NULL,
  `mantenimiento` int(2) NOT NULL,
  `act_usuario_tipo` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla insecorp.usuario_tipo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario_tipo` DISABLE KEYS */;
INSERT INTO `usuario_tipo` (`id_usuario_tipo`, `nom_usuario_tipo`, `incidencias`, `categorias`, `clientes`, `usuarios`, `informes`, `perfil`, `mantenimiento`, `act_usuario_tipo`) VALUES
	(1, 'ADMINISTRADOR', 1, 1, 1, 1, 1, 1, 1, 1),
	(2, 'ESPECIALISTA', 1, 0, 0, 0, 0, 1, 0, 1);
/*!40000 ALTER TABLE `usuario_tipo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
