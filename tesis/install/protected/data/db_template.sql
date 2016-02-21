-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2014 a las 11:45:58
-- Versión del servidor: 5.5.37-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexo`
--

CREATE TABLE IF NOT EXISTS `anexo` (
  `id_an` int(11) NOT NULL AUTO_INCREMENT,
  `dolor` tinyint(1) DEFAULT NULL,
  `empastamiento` tinyint(1) DEFAULT NULL,
  `tamano` tinyint(1) DEFAULT NULL,
  `tumoraciones` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_an`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `anexo`
--

INSERT INTO `anexo` (`id_an`, `dolor`, `empastamiento`, `tamano`, `tumoraciones`, `otros`, `observaciones`) VALUES
(1, 0, 0, 0, 0, 0, ''),
(2, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--

CREATE TABLE IF NOT EXISTS `antecedentes` (
  `id_ant` int(11) NOT NULL AUTO_INCREMENT,
  `id_ant_per` int(11) NOT NULL,
  `id_ant_fam` int(11) NOT NULL,
  `id_hab` int(11) NOT NULL,
  PRIMARY KEY (`id_ant`),
  KEY `fk_antecedentes_ant_personales1_idx` (`id_ant_per`),
  KEY `fk_antecedentes_ant_familiares1_idx` (`id_ant_fam`),
  KEY `fk_antecedentes_hab_psicobio1_idx` (`id_hab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`id_ant`, `id_ant_per`, `id_ant_fam`, `id_hab`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ant_familiares`
--

CREATE TABLE IF NOT EXISTS `ant_familiares` (
  `id_ant_fam` int(11) NOT NULL AUTO_INCREMENT,
  `alergia` tinyint(1) DEFAULT NULL,
  `artritis` tinyint(1) DEFAULT NULL,
  `asma` tinyint(1) DEFAULT NULL,
  `cancer` tinyint(1) DEFAULT NULL,
  `cardiovasculares` tinyint(1) DEFAULT NULL,
  `diabetes` tinyint(1) DEFAULT NULL,
  `enfermedades_digestivas` tinyint(1) DEFAULT NULL,
  `enfermedades_renales` tinyint(1) DEFAULT NULL,
  `intoxicacion` tinyint(1) DEFAULT NULL,
  `neuromentales` tinyint(1) DEFAULT NULL,
  `sifilis` tinyint(1) DEFAULT NULL,
  `tbc` tinyint(1) DEFAULT NULL,
  `tifoidea` tinyint(1) DEFAULT NULL,
  `tosferina` tinyint(1) DEFAULT NULL,
  `traumatismo` tinyint(1) DEFAULT NULL,
  `vacunaciones` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ant_fam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ant_familiares`
--

INSERT INTO `ant_familiares` (`id_ant_fam`, `alergia`, `artritis`, `asma`, `cancer`, `cardiovasculares`, `diabetes`, `enfermedades_digestivas`, `enfermedades_renales`, `intoxicacion`, `neuromentales`, `sifilis`, `tbc`, `tifoidea`, `tosferina`, `traumatismo`, `vacunaciones`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ant_obstetricos`
--

CREATE TABLE IF NOT EXISTS `ant_obstetricos` (
  `id_ant_obs` int(11) NOT NULL AUTO_INCREMENT,
  `anyo` int(11) DEFAULT NULL,
  `tipo_parto` varchar(45) DEFAULT NULL,
  `tiempo_trabajo` varchar(11) DEFAULT NULL,
  `hemorragia` varchar(2) DEFAULT NULL,
  `lesion_perinial` varchar(2) DEFAULT NULL,
  `toxemia` varchar(2) DEFAULT NULL,
  `puerperio` varchar(2) DEFAULT NULL,
  `peso_nino` float DEFAULT NULL,
  `vivo` varchar(2) DEFAULT NULL,
  `sexo` varchar(11) DEFAULT NULL,
  `id_ant` int(11) NOT NULL,
  PRIMARY KEY (`id_ant_obs`),
  KEY `fk_ant_obstetricos_antecedentes1_idx` (`id_ant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ant_obstetricos`
--

INSERT INTO `ant_obstetricos` (`id_ant_obs`, `anyo`, `tipo_parto`, `tiempo_trabajo`, `hemorragia`, `lesion_perinial`, `toxemia`, `puerperio`, `peso_nino`, `vivo`, `sexo`, `id_ant`) VALUES
(1, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 1),
(2, 1991, 'Natural', '', '', '', '', '', NULL, 'Si', 'F', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ant_personales`
--

CREATE TABLE IF NOT EXISTS `ant_personales` (
  `id_ant_per` int(11) NOT NULL AUTO_INCREMENT,
  `abenitis` tinyint(1) DEFAULT NULL,
  `alergia` tinyint(1) DEFAULT NULL,
  `amigdalitis` tinyint(1) DEFAULT NULL,
  `artritis` tinyint(1) DEFAULT NULL,
  `asma` tinyint(1) DEFAULT NULL,
  `blenorragia` tinyint(1) DEFAULT NULL,
  `buba` tinyint(1) DEFAULT NULL,
  `catarros` tinyint(1) DEFAULT NULL,
  `chagas` tinyint(1) DEFAULT NULL,
  `chancros` tinyint(1) DEFAULT NULL,
  `difteria` tinyint(1) DEFAULT NULL,
  `diarreas` tinyint(1) DEFAULT NULL,
  `hansen` tinyint(1) DEFAULT NULL,
  `influenza` tinyint(1) DEFAULT NULL,
  `lechina` tinyint(1) DEFAULT NULL,
  `necatoriasis` tinyint(1) DEFAULT NULL,
  `neumonia` tinyint(1) DEFAULT NULL,
  `otitis` tinyint(1) DEFAULT NULL,
  `paludismo` tinyint(1) DEFAULT NULL,
  `parasitos` tinyint(1) DEFAULT NULL,
  `parotitis` tinyint(1) DEFAULT NULL,
  `pleuresia` tinyint(1) DEFAULT NULL,
  `quirurgicos` tinyint(1) DEFAULT NULL,
  `rinofaringitis` tinyint(1) DEFAULT NULL,
  `rubeola` tinyint(1) DEFAULT NULL,
  `sarampion` tinyint(1) DEFAULT NULL,
  `sifilis` tinyint(1) DEFAULT NULL,
  `tbc` tinyint(1) DEFAULT NULL,
  `tifoidea` tinyint(1) DEFAULT NULL,
  `tosferina` tinyint(1) DEFAULT NULL,
  `traumatismo` tinyint(1) DEFAULT NULL,
  `vacunaciones` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ant_per`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ant_personales`
--

INSERT INTO `ant_personales` (`id_ant_per`, `abenitis`, `alergia`, `amigdalitis`, `artritis`, `asma`, `blenorragia`, `buba`, `catarros`, `chagas`, `chancros`, `difteria`, `diarreas`, `hansen`, `influenza`, `lechina`, `necatoriasis`, `neumonia`, `otitis`, `paludismo`, `parasitos`, `parotitis`, `pleuresia`, `quirurgicos`, `rinofaringitis`, `rubeola`, `sarampion`, `sifilis`, `tbc`, `tifoidea`, `tosferina`, `traumatismo`, `vacunaciones`, `otros`, `observaciones`) VALUES
(1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE IF NOT EXISTS `archivo` (
  `id_arch` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_h` int(11) NOT NULL,
  PRIMARY KEY (`id_arch`),
  KEY `id_h` (`id_h`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id_arch`, `nombre`, `descripcion`, `fecha`, `id_h`) VALUES
(1, 'personales.png', 'jkjkl', '2014-08-07', 2),
(2, 'document.pdf', 'JKDM,SCML,VMC,VKVMC,CKM,M', '2014-08-15', 1),
(3, 'personales.jpg', '<a href="www.google.com"> </a>', '2014-08-15', 2),
(4, 'personales.jpg', 'dsvcbccb', '2014-08-15', 2),
(5, 'personales.jpg', '<a href="www.google.com"> </a>', '2014-08-15', 2),
(6, 'personales.jpg', '<a href="www.google.com"> </a>', '2014-08-15', 2),
(7, 'personales.jpg', '<a href="www.google.com"> </a>', '2014-08-15', 2),
(8, 'personales.jpg', 'kjlklkl <a href="www.google.com"> </a>', '2014-08-15', 2),
(9, 'personales.jpg', '<a href="www.google.com"> </a>', '2014-08-15', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bit` int(11) NOT NULL AUTO_INCREMENT,
  `id_his` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `descripcion_bit` varchar(50) NOT NULL,
  `fecha_bit` date NOT NULL,
  PRIMARY KEY (`id_bit`),
  KEY `id_his` (`id_his`),
  KEY `id_u` (`id_u`),
  KEY `id_his_2` (`id_his`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bit`, `id_his`, `id_u`, `descripcion_bit`, `fecha_bit`) VALUES
(1, 1, 3, 'se agrego una historia', '2014-08-05'),
(2, 1, 3, 'se actualizo antecedentes personales', '2014-08-05'),
(3, 1, 3, 'se creo antecedente obstetrico ', '2014-08-05'),
(4, 1, 3, 'se creo recipe ', '2014-08-05'),
(5, 1, 3, 'se creo examen fisico ', '2014-08-05'),
(6, 1, 3, 'se creo embarazo ', '2014-08-05'),
(7, 1, 3, 'se creo control prenatal ', '2014-08-05'),
(8, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(9, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(10, 1, 3, 'se elimino control prenatal ', '2014-08-05'),
(11, 1, 3, 'se creo embarazo ', '2014-08-05'),
(12, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(13, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(14, 1, 3, 'se creo embarazo ', '2014-08-05'),
(15, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(16, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(17, 1, 3, 'se creo embarazo ', '2014-08-05'),
(18, 1, 3, 'se creo embarazo ', '2014-08-05'),
(19, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(20, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(21, 1, 3, 'se creo embarazo ', '2014-08-05'),
(22, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(23, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(24, 1, 3, 'se creo embarazo ', '2014-08-05'),
(25, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(26, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(27, 1, 3, 'se creo embarazo ', '2014-08-05'),
(28, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(29, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(30, 1, 3, 'se creo embarazo ', '2014-08-05'),
(31, 1, 3, 'se desactivo embarazo ', '2014-08-05'),
(32, 1, 3, 'se actualizo embarazo ', '2014-08-05'),
(33, 1, 3, 'se creo embarazo ', '2014-08-05'),
(34, 2, 3, 'se agrego una historia', '2014-08-05'),
(35, 2, 3, 'se creo embarazo ', '2014-08-05'),
(36, 2, 3, 'se desactivo embarazo ', '2014-08-05'),
(37, 2, 3, 'se actualizo embarazo ', '2014-08-05'),
(38, 2, 3, 'se creo embarazo ', '2014-08-05'),
(39, 1, 3, 'se creo recipe ', '2014-08-05'),
(40, 1, 3, 'se actualizo recipe ', '2014-08-05'),
(41, 1, 3, 'se actualizo recipe ', '2014-08-05'),
(42, 1, 3, 'se creo recipe ', '2014-08-05'),
(43, 1, 3, 'se creo recipe ', '2014-08-05'),
(44, 2, 3, 'se creo esquema menstrual ', '2014-08-07'),
(45, 2, 3, 'se actualizo esquema menstrual ', '2014-08-07'),
(46, 2, 3, 'se creo control prenatal ', '2014-08-07'),
(47, 2, 3, 'se creo antecedente obstetrico ', '2014-08-07'),
(48, 2, 3, 'se actualizo antecedente obstetrico ', '2014-08-07'),
(49, 2, 3, 'se creo control postnatal ', '2014-08-07'),
(50, 2, 3, 'se actualizo control prenatal ', '2014-08-07'),
(51, 2, 3, 'se creo recipe ', '2014-08-07'),
(52, 2, 3, 'se creo archivo ', '2014-08-07'),
(53, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(54, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(55, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(56, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(57, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(58, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(59, 1, 3, 'se ha actualizado usuario ', '2014-08-10'),
(60, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(61, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(62, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(63, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(64, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(65, 1, 4, 'se ha actualizado usuario ', '2014-08-10'),
(66, 2, 3, 'se creo examen fisico ', '2014-08-13'),
(67, 2, 3, 'se actualizo datos personales', '2014-08-13'),
(68, 1, 3, 'se creo recipe ', '2014-08-14'),
(69, 2, 3, 'se creo recipe ', '2014-08-14'),
(70, 2, 3, 'se creo recipe ', '2014-08-14'),
(71, 1, 3, 'se creo archivo ', '2014-08-15'),
(72, 1, 3, 'se creo control prenatal ', '2014-08-15'),
(73, 2, 3, 'se creo recipe ', '2014-08-15'),
(74, 2, 3, 'se creo archivo ', '2014-08-15'),
(75, 2, 3, 'se creo archivo ', '2014-08-15'),
(76, 2, 3, 'se creo archivo ', '2014-08-15'),
(77, 2, 3, 'se creo archivo ', '2014-08-15'),
(78, 2, 3, 'se creo archivo ', '2014-08-15'),
(79, 2, 3, 'se creo archivo ', '2014-08-15'),
(80, 2, 3, 'se creo archivo ', '2014-08-15'),
(81, 2, 3, 'se creo control prenatal ', '2014-08-15'),
(82, 2, 3, 'se creo recipe ', '2014-08-15'),
(83, 2, 3, 'se creo examen fisico ', '2014-08-19'),
(84, 1, 3, 'se desactivo embarazo ', '2014-08-19'),
(85, 1, 3, 'se actualizo embarazo ', '2014-08-19'),
(86, 1, 3, 'se creo embarazo ', '2014-08-19'),
(87, 1, 3, 'se desactivo embarazo ', '2014-08-19'),
(88, 1, 3, 'se actualizo embarazo ', '2014-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id_con` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_con` date NOT NULL,
  `id_mot` int(11) DEFAULT NULL,
  `id_his` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_con`),
  KEY `fk_consulta_historia1_idx` (`id_his`),
  KEY `fk_consulta_usuario1_idx` (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_con`, `fecha_con`, `id_mot`, `id_his`, `id_u`) VALUES
(1, '2014-08-05', NULL, 1, 3),
(2, '2014-08-05', NULL, 2, 3),
(3, '2014-08-07', NULL, 2, 4),
(4, '2014-08-07', NULL, 2, 3),
(5, '2014-08-10', NULL, 1, 3),
(6, '2014-08-10', NULL, 2, 4),
(7, '2014-08-11', NULL, 2, 3),
(8, '2014-08-13', NULL, 2, 3),
(9, '2014-08-14', NULL, 2, 3),
(10, '2014-08-14', NULL, 1, 3),
(11, '2014-08-15', NULL, 2, 3),
(12, '2014-08-15', NULL, 1, 3),
(13, '2014-08-16', NULL, 2, 3),
(14, '2014-08-19', NULL, 2, 3),
(15, '2014-08-19', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_postnatal`
--

CREATE TABLE IF NOT EXISTS `control_postnatal` (
  `id_cont_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_emb` int(11) NOT NULL,
  `peso` varchar(25) DEFAULT NULL,
  `tension` varchar(25) DEFAULT NULL,
  `involucion` varchar(25) DEFAULT NULL,
  `herida_qui` varchar(25) DEFAULT NULL,
  `epiciotomia` varchar(25) DEFAULT NULL,
  `sangrado_gen` varchar(25) DEFAULT NULL,
  `edema_mien_inf` varchar(25) DEFAULT NULL,
  `anticoceptivo` varchar(25) DEFAULT NULL,
  `observaciones_con` varchar(500) DEFAULT NULL,
  `fecha_con_pos` date DEFAULT NULL,
  PRIMARY KEY (`id_cont_post`),
  KEY `id_emb` (`id_emb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `control_postnatal`
--

INSERT INTO `control_postnatal` (`id_cont_post`, `id_emb`, `peso`, `tension`, `involucion`, `herida_qui`, `epiciotomia`, `sangrado_gen`, `edema_mien_inf`, `anticoceptivo`, `observaciones_con`, `fecha_con_pos`) VALUES
(1, 12, '', '', 'normal', '', '', '', '', '', '', '2014-08-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_prenatal`
--

CREATE TABLE IF NOT EXISTS `control_prenatal` (
  `id_con_pre` int(11) NOT NULL AUTO_INCREMENT,
  `fur` date DEFAULT NULL,
  `eco` varchar(45) DEFAULT NULL,
  `ta` varchar(45) DEFAULT NULL,
  `p` varchar(45) DEFAULT NULL,
  `au` varchar(45) DEFAULT NULL,
  `foco` varchar(45) DEFAULT NULL,
  `presentacion` varchar(45) DEFAULT NULL,
  `ecograma` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `semana` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `embarazo_id_emb` int(11) NOT NULL,
  PRIMARY KEY (`id_con_pre`),
  KEY `fk_control_prenatal_embarazo1_idx` (`embarazo_id_emb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `control_prenatal`
--

INSERT INTO `control_prenatal` (`id_con_pre`, `fur`, `eco`, `ta`, `p`, `au`, `foco`, `presentacion`, `ecograma`, `observaciones`, `semana`, `fecha`, `embarazo_id_emb`) VALUES
(1, '1969-12-31', '', '', '', '', '', '', '', '', '', '2014-08-07', 12),
(2, '0000-00-00', '', '', '', '', '', '', '', '', '', '2014-08-15', 10),
(3, '0000-00-00', '', '', '', '', '', '', '', '<a href="www.google.com"> </a>', '', '2014-08-15', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuello_uterino`
--

CREATE TABLE IF NOT EXISTS `cuello_uterino` (
  `id_cuello_uterino` int(11) NOT NULL AUTO_INCREMENT,
  `orificio` tinyint(1) DEFAULT NULL,
  `flujos` tinyint(1) DEFAULT NULL,
  `cervical` tinyint(1) DEFAULT NULL,
  `sangre` tinyint(1) DEFAULT NULL,
  `cervicitis` tinyint(1) DEFAULT NULL,
  `leuroplasia` tinyint(1) DEFAULT NULL,
  `polipos` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_cuello_uterino`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cuello_uterino`
--

INSERT INTO `cuello_uterino` (`id_cuello_uterino`, `orificio`, `flujos`, `cervical`, `sangre`, `cervicitis`, `leuroplasia`, `polipos`, `otros`, `observaciones`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 1, 0, 0, 1, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarazo`
--

CREATE TABLE IF NOT EXISTS `embarazo` (
  `id_emb` int(11) NOT NULL AUTO_INCREMENT,
  `peso_anterior` varchar(45) DEFAULT NULL,
  `talla` varchar(45) DEFAULT NULL,
  `fum` date DEFAULT NULL,
  `exam_cli_hom` tinyint(1) DEFAULT NULL,
  `examen_mama` tinyint(1) DEFAULT NULL,
  `examen_odo` tinyint(1) DEFAULT NULL,
  `pelvis` tinyint(1) DEFAULT NULL,
  `papanicolau` tinyint(1) DEFAULT NULL,
  `colposcopia` tinyint(1) DEFAULT NULL,
  `examen_clini_cervix` tinyint(1) DEFAULT NULL,
  `vdrl` tinyint(1) DEFAULT NULL,
  `fecha_vdrl` date DEFAULT NULL,
  `hb` tinyint(1) DEFAULT NULL,
  `fecha_hb` date DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `tipo_parto` varchar(45) DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `fecha_final` varchar(45) DEFAULT NULL,
  `muerte_fetal` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `vdrl_em` varchar(45) DEFAULT NULL,
  `talla_final` varchar(45) DEFAULT NULL,
  `fecha_inicial` varchar(45) DEFAULT NULL,
  `historia_id_his` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fpp` date NOT NULL,
  PRIMARY KEY (`id_emb`),
  KEY `fk_embarazo_historia1_idx` (`historia_id_his`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `embarazo`
--

INSERT INTO `embarazo` (`id_emb`, `peso_anterior`, `talla`, `fum`, `exam_cli_hom`, `examen_mama`, `examen_odo`, `pelvis`, `papanicolau`, `colposcopia`, `examen_clini_cervix`, `vdrl`, `fecha_vdrl`, `hb`, `fecha_hb`, `observaciones`, `tipo_parto`, `hora`, `fecha_final`, `muerte_fetal`, `sexo`, `peso`, `vdrl_em`, `talla_final`, `fecha_inicial`, `historia_id_his`, `estado`, `fpp`) VALUES
(1, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(2, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-02', 1, 0, '0000-00-00'),
(3, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(4, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(5, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(6, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(7, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(8, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(9, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(10, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 1, 0, '0000-00-00'),
(11, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-04', 2, 0, '0000-00-00'),
(12, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-8-4', 2, 1, '0000-00-00'),
(13, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-08-12', 1, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esquema_men`
--

CREATE TABLE IF NOT EXISTS `esquema_men` (
  `id_esq` int(11) NOT NULL AUTO_INCREMENT,
  `id_reg` int(11) NOT NULL,
  `div1` varchar(25) DEFAULT NULL,
  `div2` varchar(25) DEFAULT NULL,
  `div3` varchar(25) DEFAULT NULL,
  `div4` varchar(25) DEFAULT NULL,
  `div5` varchar(25) DEFAULT NULL,
  `div6` varchar(25) DEFAULT NULL,
  `fecha_esq` date DEFAULT NULL,
  `obs_esq` text,
  `mes_esq` varchar(20) DEFAULT NULL,
  `id_his` int(11) NOT NULL,
  PRIMARY KEY (`id_esq`),
  KEY `id_reg` (`id_reg`),
  KEY `id_his` (`id_his`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `esquema_men`
--

INSERT INTO `esquema_men` (`id_esq`, `id_reg`, `div1`, `div2`, `div3`, `div4`, `div5`, `div6`, `fecha_esq`, `obs_esq`, `mes_esq`, `id_his`) VALUES
(1, 1, 'hiper', '', '', '', '', '', '1969-12-31', '', '', 2),
(2, 1, '', '', '', '', '', '', '1969-12-31', '', '', 2),
(3, 1, '', '', '', '', '', '', '1969-12-31', '', '', 2),
(4, 1, '', '', '', '', '', '', '1969-12-31', '', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivil`
--

CREATE TABLE IF NOT EXISTS `estadocivil` (
  `id_es` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_es` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_es`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `estadocivil`
--

INSERT INTO `estadocivil` (`id_es`, `descripcion_es`) VALUES
(1, 'soltera'),
(2, 'casada'),
(3, 'divorciada'),
(4, 'viuda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_fisico`
--

CREATE TABLE IF NOT EXISTS `examen_fisico` (
  `id_exa` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `id_genitales_externos` int(11) NOT NULL,
  `id_cuello_uterino` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL,
  `id_an` int(11) NOT NULL,
  `id_par` int(11) NOT NULL,
  `id_his` int(11) NOT NULL,
  PRIMARY KEY (`id_exa`),
  KEY `fk_examen_fisico_genitales_externos1_idx` (`id_genitales_externos`),
  KEY `fk_examen_fisico_cuello_uterino1_idx` (`id_cuello_uterino`),
  KEY `fk_examen_fisico_matriz1_idx` (`id_mat`),
  KEY `fk_examen_fisico_anexo1_idx` (`id_an`),
  KEY `fk_examen_fisico_parametrios1_idx` (`id_par`),
  KEY `fk_examen_fisico_historia1_idx` (`id_his`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `examen_fisico`
--

INSERT INTO `examen_fisico` (`id_exa`, `fecha`, `id_genitales_externos`, `id_cuello_uterino`, `id_mat`, `id_an`, `id_par`, `id_his`) VALUES
(1, '2014-08-05', 1, 1, 1, 1, 1, 1),
(2, '2014-08-13', 2, 2, 2, 2, 2, 2),
(3, '2014-08-19', 3, 3, 3, 3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genitales_externos`
--

CREATE TABLE IF NOT EXISTS `genitales_externos` (
  `id_genitales_externos` int(11) NOT NULL AUTO_INCREMENT,
  `labios` tinyint(1) DEFAULT NULL,
  `g_bartholine` tinyint(1) DEFAULT NULL,
  `g_skane` tinyint(1) DEFAULT NULL,
  `meato_uretral` tinyint(1) DEFAULT NULL,
  `himen` tinyint(1) DEFAULT NULL,
  `perine` tinyint(1) DEFAULT NULL,
  `vagina` tinyint(1) DEFAULT NULL,
  `inspeccion_esfuerzo` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_genitales_externos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `genitales_externos`
--

INSERT INTO `genitales_externos` (`id_genitales_externos`, `labios`, `g_bartholine`, `g_skane`, `meato_uretral`, `himen`, `perine`, `vagina`, `inspeccion_esfuerzo`, `otros`, `observaciones`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruposangineo`
--

CREATE TABLE IF NOT EXISTS `gruposangineo` (
  `id_gru` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_gru` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_gru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `gruposangineo`
--

INSERT INTO `gruposangineo` (`id_gru`, `descripcion_gru`) VALUES
(1, 'A Rh +'),
(2, 'A Rh -'),
(3, 'B Rh +'),
(4, 'B Rh -'),
(5, 'AB Rh +'),
(6, 'AB Rh -'),
(7, 'O Rh +'),
(8, 'O Rh -');
(9, 'Nulo');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hab_psicobio`
--

CREATE TABLE IF NOT EXISTS `hab_psicobio` (
  `id_hab` int(11) NOT NULL AUTO_INCREMENT,
  `alcohol` tinyint(1) DEFAULT NULL,
  `chimo` tinyint(1) DEFAULT NULL,
  `deportes` tinyint(1) DEFAULT NULL,
  `drogas` tinyint(1) DEFAULT NULL,
  `ocupacion` tinyint(1) DEFAULT NULL,
  `problemas_familiares` tinyint(1) DEFAULT NULL,
  `rasgos_personales` tinyint(1) DEFAULT NULL,
  `siesta` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_hab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `hab_psicobio`
--

INSERT INTO `hab_psicobio` (`id_hab`, `alcohol`, `chimo`, `deportes`, `drogas`, `ocupacion`, `problemas_familiares`, `rasgos_personales`, `siesta`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE IF NOT EXISTS `historia` (
  `id_his` int(11) NOT NULL AUTO_INCREMENT,
  `id_p` int(11) NOT NULL,
  `id_ant` int(11) NOT NULL,
  PRIMARY KEY (`id_his`),
  KEY `fk_historia_persona1_idx` (`id_p`),
  KEY `fk_historia_antecedentes1_idx` (`id_ant`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id_his`, `id_p`, `id_ant`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz`
--

CREATE TABLE IF NOT EXISTS `matriz` (
  `id_mat` int(11) NOT NULL AUTO_INCREMENT,
  `caracteres` tinyint(1) DEFAULT NULL,
  `posicion` tinyint(1) DEFAULT NULL,
  `tamano` tinyint(1) DEFAULT NULL,
  `tumoraciones` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_mat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `matriz`
--

INSERT INTO `matriz` (`id_mat`, `caracteres`, `posicion`, `tamano`, `tumoraciones`, `otros`, `observaciones`) VALUES
(1, 0, 0, 0, 0, 0, ''),
(2, 0, 0, 0, 0, 0, ''),
(3, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametrios`
--

CREATE TABLE IF NOT EXISTS `parametrios` (
  `id_par` int(11) NOT NULL AUTO_INCREMENT,
  `induracion` tinyint(1) DEFAULT NULL,
  `tumores` tinyint(1) DEFAULT NULL,
  `otros` tinyint(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_par`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `parametrios`
--

INSERT INTO `parametrios` (`id_par`, `induracion`, `tumores`, `otros`, `observaciones`) VALUES
(1, 0, 0, 0, ''),
(2, 0, 0, 0, ''),
(3, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `id_es` int(11) NOT NULL,
  `id_gru` int(11) NOT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL,
  `tlf_eme` varchar(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `fk_persona_estadocivil1_idx` (`id_es`),
  KEY `fk_persona_gruposangineo1_idx` (`id_gru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_p`, `nombre`, `apellido`, `domicilio`, `fecha_nac`, `id_es`, `id_gru`, `cedula`, `telefono`, `tlf_eme`, `correo`) VALUES
(1, 'nfjlkm,', '', '', '2014-08-04', 1, 1, '20205412', 0, 0, ''),
(2, 'maria', 'jnkfdlkdm', '', '2014-08-04', 1, 1, '20205412', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `id_his` int(11) NOT NULL,
  `tratamiento` text,
  `indicaciones` text,
  `fecha_rec` date NOT NULL,
  `id_u` int(11) NOT NULL,
  PRIMARY KEY (`id_rec`),
  KEY `fk_recipe_historia1_idx` (`id_his`),
  KEY `id_u` (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `recipe`
--

INSERT INTO `recipe` (`id_rec`, `id_his`, `tratamiento`, `indicaciones`, `fecha_rec`, `id_u`) VALUES
(2, 1, 'bnlkml;', 'hbkjnklm', '2014-08-05', 3),
(3, 1, '', '', '2014-08-05', 3),
(4, 1, '', '', '2014-08-05', 3),
(5, 2, '', '', '2014-08-07', 3),
(6, 1, '', '', '2014-08-14', 3),
(7, 2, '', '', '2014-08-14', 3),
(8, 2, 'jl;k''', 'ujnlkm;l,''', '2014-08-14', 3),
(9, 2, 'href="www.google.com"&gt;  ', '', '2014-08-15', 3),
(10, 2, '<a href="www.google.com"> </a>', '', '2014-08-15', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_m`
--

CREATE TABLE IF NOT EXISTS `registro_m` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_reg` date NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `registro_m`
--

INSERT INTO `registro_m` (`id_reg`, `fecha_reg`) VALUES
(1, '2014-08-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `ci` varchar(45) DEFAULT NULL,
  `registro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_u`, `name`, `password`, `rol`, `nombre`, `apellido`, `ci`, `registro`) VALUES
(3, 'super', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1, 'Maria', 'fojlkjm', '20205412', '41896531277'),
(4, 'jose', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1, 'kl;m', 'l;', 'm;ml', ',kol;'),
(8, 'ljk;', '38d14572358a93f8f265f67d9a9b8b5c', NULL, '', '', '', ''),
(9, 'jlm,', '8f7d65cfcb9827d55d576c5432940c4b', NULL, '', '', '', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `idU` FOREIGN KEY (`id_u`) REFERENCES `usuario` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
