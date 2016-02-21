-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-08-2014 a las 14:26:04
-- Versión del servidor: 5.5.37-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tesis`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `anexo`
--

INSERT INTO `anexo` (`id_an`, `dolor`, `empastamiento`, `tamano`, `tumoraciones`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, NULL, NULL, ''),
(44, 0, 0, 0, 0, 0, ''),
(45, 1, 0, 0, 0, 1, ''),
(46, 0, 0, 0, 0, 0, ''),
(47, 0, 0, 0, 0, 0, ''),
(48, 0, 0, 0, 0, 0, ''),
(49, 0, 0, 0, 0, 0, ''),
(50, 0, 0, 0, 0, 0, ''),
(51, 0, 0, 0, 0, 0, ''),
(52, 0, 0, 0, 0, 0, ''),
(53, 0, 0, 0, 0, 0, ''),
(54, 0, 0, 0, 0, 0, ''),
(55, 0, 0, 0, 0, 0, ''),
(56, 0, 0, 0, 0, 0, ''),
(57, 0, 0, 0, 0, 0, ''),
(58, 0, 0, 0, 0, 0, ''),
(59, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `antecedentes`
--

INSERT INTO `antecedentes` (`id_ant`, `id_ant_per`, `id_ant_fam`, `id_hab`) VALUES
(3, 0, 0, 0),
(5, 30, 31, 30),
(6, 31, 32, 31),
(7, 32, 33, 32),
(8, 33, 34, 33),
(9, 35, 35, 37),
(10, 36, 36, 38),
(11, 37, 37, 39),
(12, 38, 38, 40),
(13, 39, 39, 41),
(14, 40, 40, 42),
(15, 41, 41, 43),
(16, 42, 42, 44),
(17, 43, 43, 45),
(18, 44, 44, 46),
(19, 45, 45, 47),
(20, 46, 46, 48),
(21, 47, 47, 49),
(22, 48, 48, 50),
(23, 49, 49, 51),
(24, 50, 50, 52),
(25, 51, 51, 53),
(26, 52, 52, 54),
(27, 53, 53, 55);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `ant_familiares`
--

INSERT INTO `ant_familiares` (`id_ant_fam`, `alergia`, `artritis`, `asma`, `cancer`, `cardiovasculares`, `diabetes`, `enfermedades_digestivas`, `enfermedades_renales`, `intoxicacion`, `neuromentales`, `sifilis`, `tbc`, `tifoidea`, `tosferina`, `traumatismo`, `vacunaciones`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, ''),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 1, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, ''),
(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, ''),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 1, 0, 0, ''),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, ''),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, ''),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `ant_obstetricos`
--

INSERT INTO `ant_obstetricos` (`id_ant_obs`, `anyo`, `tipo_parto`, `tiempo_trabajo`, `hemorragia`, `lesion_perinial`, `toxemia`, `puerperio`, `peso_nino`, `vivo`, `sexo`, `id_ant`) VALUES
(2, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 11),
(3, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M', 11),
(4, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F', 11),
(5, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'M', 11),
(6, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'M', 11),
(7, NULL, 'Natural', NULL, NULL, NULL, NULL, NULL, NULL, '0', 'M', 11),
(8, NULL, 'Natural', '', 'Si', 'Si', 'Si', 'Si', NULL, 'Si', 'M', 11),
(10, 1991, 'Natural', '', 'Si', 'Si', 'Si', 'Si', NULL, 'Si', 'M', 11),
(11, 1991, '', '', '', '', '', '', NULL, 'Si', 'M', 11),
(12, 1996, '', '', '', '', '', '', NULL, 'Si', 'F', 11),
(13, 1982, '', '', '', '', '', '', NULL, 'Si', 'F', 11),
(14, 1990, '', '', '', '', '', '', NULL, 'Si', 'F', 11),
(15, 1990, '', '', '', '', '', '', NULL, 'Si', 'F', 11),
(16, 1951, '', '', '', '', '', '', NULL, 'Si', 'M', 9),
(17, 1951, '', '', '', '', '', '', NULL, 'Si', 'M', 9),
(19, 1991, '', '', '', '', '', '', NULL, 'No', 'M', 7),
(20, 1991, 'Natural', '', '', '', '', '', NULL, 'No', 'F', 9),
(21, 1991, '', '', '', '', '', '', NULL, 'Si', 'M', 9),
(22, 1991, 'Natural', '', '', '', '', '', NULL, 'Si', 'F', 9),
(23, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 9),
(24, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 9),
(25, 1991, '', '', '', '', '', '', NULL, 'Si', 'M', 10),
(26, 1991, 'Natural', '', '', '', '', '', NULL, 'Si', 'F', 11),
(27, 1991, '', '', 'Si', 'No', 'No', 'Si', NULL, 'Si', 'M', 12),
(28, 1915, '', '', '', '', '', '', NULL, 'Si', 'F', 12),
(29, 1991, 'Natural', '', '', '', '', '', NULL, 'Si', 'F', 12),
(31, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 13),
(32, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 14),
(33, 1991, '', '', '', '', '', '', NULL, 'Si', 'F', 15);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `ant_personales`
--

INSERT INTO `ant_personales` (`id_ant_per`, `abenitis`, `alergia`, `amigdalitis`, `artritis`, `asma`, `blenorragia`, `buba`, `catarros`, `chagas`, `chancros`, `difteria`, `diarreas`, `hansen`, `influenza`, `lechina`, `necatoriasis`, `neumonia`, `otitis`, `paludismo`, `parasitos`, `parotitis`, `pleuresia`, `quirurgicos`, `rinofaringitis`, `rubeola`, `sarampion`, `sifilis`, `tbc`, `tifoidea`, `tosferina`, `traumatismo`, `vacunaciones`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(34, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, ''),
(38, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(39, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'gnhn'),
(40, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'fergg'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id_arch`, `nombre`, `descripcion`, `fecha`, `id_h`) VALUES
(1, 'eafs', 'dfbc', '0000-00-00', 2),
(2, NULL, 'ikl;,.', '0000-00-00', 2),
(3, NULL, 'ikl;,.', '0000-00-00', 2),
(4, NULL, 'jfkl;fk;l', '0000-00-00', 2),
(5, 'bd_siceca.jpg', 'ijklm', '2001-05-07', 2),
(6, 'rif12042010.pdf', 'uuo;fl', '0000-00-00', 2),
(7, 'logohmg.gif', 'njldkcm;xl,.', '2014-07-18', 10),
(10, 'personales.png', 'ljkm', '2014-07-25', 22);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bit`, `id_his`, `id_u`, `descripcion_bit`, `fecha_bit`) VALUES
(1, 21, 3, 'se agrego una historia', '0000-00-00'),
(2, 22, 3, 'se agrego una historia', '2014-07-25'),
(3, 22, 3, 'se actualizo datos personales', '2014-07-25'),
(4, 22, 3, 'se actualizo antecedentes personales', '2014-07-25'),
(5, 22, 3, 'se actualizo datos personales', '2014-07-25'),
(6, 22, 3, 'se actualizo habitos psicobiologicos', '2014-07-25'),
(7, 22, 3, 'se creo antecedente obstetrico ', '2014-07-25'),
(8, 22, 3, 'se creo antecedente obstetrico ', '2014-07-25'),
(9, 22, 3, 'se elimino antecedente obstetrico ', '2014-07-25'),
(10, 22, 3, 'se creo examen fisico ', '2014-07-25'),
(11, 22, 3, 'se actualizo examen fisico ', '2014-07-25'),
(12, 22, 3, 'se elimino examen fisico ', '2014-07-25'),
(13, 22, 3, 'se creo esquema menstrual ', '2014-07-25'),
(14, 22, 3, 'se actualizo esquema menstrual ', '2014-07-25'),
(15, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(16, 22, 3, 'se creo esquema menstrual ', '2014-07-25'),
(17, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(18, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(19, 22, 3, 'se actualizo esquema menstrual ', '2014-07-25'),
(20, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(21, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(22, 22, 3, 'se creo esquema menstrual ', '2014-07-25'),
(23, 22, 3, 'se actualizo esquema menstrual ', '2014-07-25'),
(24, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(25, 22, 3, 'se creo esquema menstrual ', '2014-07-25'),
(26, 22, 3, 'se elimino esquema menstrual ', '2014-07-25'),
(27, 22, 3, 'se creo embarazo ', '2014-07-25'),
(28, 22, 3, 'se actualizo embarazo ', '2014-07-25'),
(29, 22, 3, 'se desactivo embarazo ', '2014-07-25'),
(30, 22, 3, 'se actualizo embarazo ', '2014-07-25'),
(31, 22, 3, 'se creo embarazo ', '2014-07-25'),
(32, 22, 3, 'se creo control prenatal ', '2014-07-25'),
(33, 22, 3, 'se actualizo control prenatal ', '2014-07-25'),
(34, 22, 3, 'se elimino control prenatal ', '2014-07-25'),
(35, 22, 3, 'se elimino control prenatal ', '2014-07-25'),
(36, 22, 3, 'se creo control prenatal ', '2014-07-25'),
(37, 22, 3, 'se elimino control prenatal ', '2014-07-25'),
(38, 22, 3, 'se creo control postnatal ', '2014-07-25'),
(39, 22, 3, 'se actualizo control postnatal ', '2014-07-25'),
(40, 22, 3, 'se elimino control postnatal ', '2014-07-25'),
(41, 22, 3, 'se creo control postnatal ', '2014-07-25'),
(42, 22, 3, 'se creo control postnatal ', '2014-07-25'),
(43, 22, 3, 'se actualizo control postnatal ', '2014-07-25'),
(44, 22, 3, 'se creo recipe ', '2014-07-25'),
(45, 22, 3, 'se actualizo recipe ', '2014-07-25'),
(46, 22, 3, 'se elimino recipe ', '2014-07-25'),
(47, 22, 3, 'se creo recipe ', '2014-07-25'),
(48, 22, 3, 'se actualizo recipe ', '2014-07-25'),
(49, 22, 3, 'se elimino recipe ', '2014-07-25'),
(50, 22, 3, 'se creo recipe ', '2014-07-25'),
(51, 22, 3, 'se elimino recipe ', '2014-07-25'),
(52, 22, 3, 'se creo recipe ', '2014-07-25'),
(53, 22, 3, 'se elimino recipe ', '2014-07-25'),
(54, 22, 3, 'se creo recipe ', '2014-07-25'),
(55, 22, 3, 'se elimino recipe ', '2014-07-25'),
(56, 22, 3, 'se creo recipe ', '2014-07-25'),
(57, 22, 3, 'se creo archivo ', '2014-07-25'),
(58, 22, 3, 'se actualizo archivo ', '2014-07-25'),
(59, 22, 3, 'se actualizo recipe ', '2014-07-25'),
(60, 22, 3, 'se creo archivo ', '2014-07-25'),
(61, 22, 3, 'se actualizo archivo ', '2014-07-25'),
(62, 22, 3, 'se actualizo archivo ', '2014-07-25'),
(63, 22, 3, 'se creo archivo ', '2014-07-25'),
(64, 22, 3, 'se elimino archivo ', '2014-07-25'),
(65, 22, 3, 'se ha creado usuario ', '2014-07-25'),
(66, 22, 3, 'se ha actualizado usuario ', '2014-07-25'),
(67, 22, 3, 'se ha eliminado usuario ', '2014-07-25'),
(68, 10, 3, 'se creo recipe ', '2014-07-28'),
(69, 10, 3, 'se creo recipe ', '2014-07-28'),
(70, 23, 3, 'se agrego una historia', '2014-07-30'),
(71, 23, 3, 'se actualizo antecedentes personales', '2014-07-30'),
(72, 23, 3, 'se actualizo datos personales', '2014-07-30'),
(73, 23, 3, 'se creo esquema menstrual ', '2014-07-30'),
(74, 23, 3, 'se actualizo esquema menstrual ', '2014-07-30'),
(75, 10, 3, 'se ha actualizado usuario ', '2014-07-30'),
(76, 10, 3, 'se actualizo antecedentes personales', '2014-07-30'),
(77, 10, 3, 'se actualizo antecedentes personales', '2014-08-01'),
(78, 10, 3, 'se actualizo antecedentes personales', '2014-08-01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_con`, `fecha_con`, `id_mot`, `id_his`, `id_u`) VALUES
(1, '2014-07-11', NULL, 10, 3),
(2, '2014-07-11', NULL, 10, 3),
(3, '2014-07-11', NULL, 10, 3),
(4, '2014-07-11', NULL, 5, 3),
(5, '2014-07-11', NULL, 8, 3),
(6, '2014-08-11', NULL, 2, 4),
(7, '2014-07-12', NULL, 10, 3),
(8, '2014-07-12', NULL, 9, 3),
(9, '2014-07-13', NULL, 10, 3),
(10, '2014-07-14', NULL, 10, 3),
(11, '2014-07-14', NULL, 8, 3),
(12, '2014-07-14', NULL, 6, 3),
(13, '2014-07-15', NULL, 10, 3),
(14, '2014-07-15', NULL, 9, 3),
(15, '2014-07-15', NULL, 8, 3),
(16, '2014-07-15', NULL, 7, 3),
(17, '2014-07-15', NULL, 5, 3),
(18, '2014-07-16', NULL, 10, 3),
(19, '2014-07-16', NULL, 7, 3),
(20, '2014-07-16', NULL, 9, 3),
(21, '2014-07-17', NULL, 10, 3),
(22, '2014-07-18', NULL, 10, 3),
(23, '2014-07-19', NULL, 10, 3),
(24, '2014-07-20', NULL, 10, 3),
(25, '2014-07-21', NULL, 10, 3),
(26, '2014-07-21', NULL, 11, 3),
(27, '2014-07-21', NULL, 9, 3),
(28, '2014-07-21', NULL, 5, 3),
(29, '2014-07-21', NULL, 6, 3),
(30, '2014-07-21', NULL, 12, 3),
(31, '2014-07-21', NULL, 13, 3),
(32, '2014-07-22', NULL, 13, 3),
(33, '2014-07-22', NULL, 10, 3),
(34, '2014-07-22', NULL, 12, 3),
(35, '2014-07-23', NULL, 10, 3),
(36, '2014-07-23', NULL, 9, 3),
(37, '2014-07-23', NULL, 14, 3),
(38, '2014-07-23', NULL, 15, 3),
(39, '2014-07-23', NULL, 12, 3),
(40, '2014-07-24', NULL, 10, 3),
(41, '2014-07-25', NULL, 10, 3),
(42, '2014-07-25', NULL, 16, 3),
(43, '2014-07-25', NULL, 18, 3),
(44, '2014-07-25', NULL, 19, 3),
(45, '2014-07-25', NULL, 21, 3),
(46, '2014-07-25', NULL, 9, 3),
(47, '2014-07-25', NULL, 22, 3),
(48, '2014-07-27', NULL, 10, 4),
(49, '2014-07-28', NULL, 10, 3),
(50, '2014-07-28', NULL, 11, 3),
(51, '2014-07-30', NULL, 23, 3),
(52, '2014-07-30', NULL, 10, 3),
(53, '2014-08-01', NULL, 10, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `control_postnatal`
--

INSERT INTO `control_postnatal` (`id_cont_post`, `id_emb`, `peso`, `tension`, `involucion`, `herida_qui`, `epiciotomia`, `sangrado_gen`, `edema_mien_inf`, `anticoceptivo`, `observaciones_con`, `fecha_con_pos`) VALUES
(2, 2, '', '', 'normal', 'Si', 'anormal', 'No', 'Si', '', '', '2014-07-16'),
(5, 2, '', '', '', '', '', '', '', '', '', '2014-07-16'),
(6, 1, '', '', '', '', '', '', '', '', '', '2014-07-16'),
(7, 24, '', '', '', '', '', '', '', '', '', '2014-07-21'),
(9, 28, '', '', '', '', '', '', '', '', '', '2014-07-25'),
(10, 28, '', '', '', '', '', '', '', '', '', '2014-07-25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `control_prenatal`
--

INSERT INTO `control_prenatal` (`id_con_pre`, `fur`, `eco`, `ta`, `p`, `au`, `foco`, `presentacion`, `ecograma`, `observaciones`, `semana`, `fecha`, `embarazo_id_emb`) VALUES
(1, '1969-12-31', '', '', '', '', '', '', '', '', '', NULL, 2),
(2, '1969-12-31', '', '', '', '', '', '', '', '', 'jnl', NULL, 3),
(3, '1969-12-31', '', '', '', '', '', '', '', '', 'wads', NULL, 1),
(4, '1969-12-31', '', '', '', '', '', '', '', '', '', NULL, 21),
(5, '0000-00-00', '', '', '', '', '', '', '', '', '', NULL, 21),
(6, '0000-00-00', '', '', '', '', '', '', '', '', '', NULL, 21),
(7, '0000-00-00', '', '', '', '', '', '', '', '', '50', NULL, 21),
(8, '0000-00-00', '', '', '', '', '', '', '', '', '', NULL, 21),
(9, '0000-00-00', '', '', '', '', '', '', '', '', '', NULL, 21),
(10, '0000-00-00', '', '', '', '', '', '', '', '', '', '2014-07-15', 21),
(11, '1969-12-31', '', '', '', '', '', '', '', '', 'hkdjnd', '2014-07-16', 2),
(12, '0000-00-00', '', '', '', '', '', '', 'add-articulo.png', '', 'jkl,sdanmlk', '2014-07-17', 2),
(13, '0000-00-00', '', '', '', '', '', '', 'add-articulo.png', '', 'jkl,sdanmlk', '2014-07-17', 2),
(14, '0000-00-00', '', '', '', '', '', '', 'encabezado_completo.png', '', '', '2014-07-17', 2),
(15, '0000-00-00', '', '', '', '', '', '', 'encabezado_der.jpg', '', '', '2014-07-17', 2),
(16, '0000-00-00', '', '', '', '', '', '', 'celulasGliales_g.jpg', '', '', '2014-07-17', 2),
(17, '0000-00-00', '', '', '', '', '', '', 'CIASEM.jpg', '', '', '2014-07-17', 2),
(18, '1969-12-31', '', '', '', '', '', '', 'Extract_Transform_Load.pdf', '', '', '2014-07-17', 2),
(19, '0000-00-00', '', '', '', '', '', '', 'CIASEM.jpg', '', '', '2014-07-17', 2),
(20, '0000-00-00', '', '', '', '', '', '', 'Extract_Transform_Load.pdf', '', '', '2014-07-18', 2),
(21, '0000-00-00', '', '', '', '', '', '', 'Extract_Transform_Load.pdf', '', '', '2014-07-18', 2),
(22, '1969-12-31', '', '', '', '', '', '', 'reporte(1).pdf', '', 'jklknm', '2014-07-18', 2),
(23, '0000-00-00', '', '', '', '', '', '', '', '', '', '2014-07-20', 2),
(24, '0000-00-00', '', '', '', '', '', '', '', '', '', '2014-07-21', 24);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `cuello_uterino`
--

INSERT INTO `cuello_uterino` (`id_cuello_uterino`, `orificio`, `flujos`, `cervical`, `sangre`, `cervicitis`, `leuroplasia`, `polipos`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(45, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(46, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(47, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(48, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(49, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(50, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(51, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(52, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(53, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(54, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(55, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(56, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(57, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(58, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(59, 0, 0, 0, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `embarazo`
--

INSERT INTO `embarazo` (`id_emb`, `peso_anterior`, `talla`, `fum`, `exam_cli_hom`, `examen_mama`, `examen_odo`, `pelvis`, `papanicolau`, `colposcopia`, `examen_clini_cervix`, `vdrl`, `fecha_vdrl`, `hb`, `fecha_hb`, `observaciones`, `tipo_parto`, `hora`, `fecha_final`, `muerte_fetal`, `sexo`, `peso`, `vdrl_em`, `talla_final`, `fecha_inicial`, `historia_id_his`, `estado`, `fpp`) VALUES
(1, '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '2014-07-08', 7, 1, '0000-00-00'),
(2, 'sa', '', '1969-12-31', 0, 0, 0, 0, 1, 2, 0, 1, '1969-12-31', 0, '1969-12-31', '', '', '', '', '0', 'F', '', '1', '', '2014-07-02', 10, 1, '0000-00-00'),
(3, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 1, '1969-12-31', 0, '1969-12-31', '', '0', '', '', '0', '', '', '0', '', '', 10, 1, '0000-00-00'),
(4, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 1, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(5, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 1, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(6, '', '', '0000-00-00', 1, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', NULL, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(7, '', '', '0000-00-00', 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, '0000-00-00', NULL, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(8, '', '', '0000-00-00', 0, 0, NULL, NULL, NULL, NULL, 0, 0, '0000-00-00', NULL, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(9, '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(10, '', '', '1969-12-31', 1, 0, 0, 0, 0, 0, 0, NULL, '1969-12-31', 0, '1969-12-31', '', '0', '', '', '0', '', '', '0', '', '', 10, 1, '0000-00-00'),
(11, '', '', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', NULL, '0000-00-00', '', '0', '', '', '0', '0', '', '0', '', '', 10, 1, '0000-00-00'),
(12, '', '', '1969-12-31', 1, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '0', '', '', '2', 'M', '', '1', '', '', 10, 1, '0000-00-00'),
(13, '', '', '0000-00-00', 2, 0, 0, 0, 0, 0, 0, NULL, '0000-00-00', 0, '0000-00-00', '', '', '', '', '0', '', '', '0', '', '', 10, 1, '0000-00-00'),
(14, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, NULL, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '', 10, 1, '0000-00-00'),
(15, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, NULL, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '2', '', '', 10, 1, '0000-00-00'),
(16, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 1, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '', 10, 1, '0000-00-00'),
(17, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', 'eutoxico', '', '', '', 'M', '', '0', '', '', 10, 1, '0000-00-00'),
(18, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', 'M', '20', '0', '', '', 10, 1, '0000-00-00'),
(19, '', '', '1969-12-31', 0, 0, 0, 1, 1, 1, 0, 1, '1969-12-31', 2, '1969-12-31', '\r\n', '', '', '', '', 'M', '', '1', '', '', 10, 1, '0000-00-00'),
(20, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-7-8', 8, 1, '0000-00-00'),
(21, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '2014-06-19', 0, '1969-12-31', '', '', '', '2014-7-9', '', '', '', '0', '', '2014-07-10', 9, 1, '0000-00-00'),
(22, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-7-9', 5, 1, '0000-00-00'),
(23, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-7-9', 11, 1, '0000-00-00'),
(24, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-07-09', 12, 0, '0000-00-00'),
(25, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-07-10', 13, 1, '0000-00-00'),
(26, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-7-10', 15, 1, '0000-00-00'),
(27, '', '', '1969-12-31', 0, 0, 0, 0, 0, 0, 0, 0, '1969-12-31', 0, '1969-12-31', '', '', '', '', '', '', '', '0', '', '2014-07-09', 22, 0, '0000-00-00'),
(28, '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, '0000-00-00', '', '', '', '', '', '', '', '0', '', '2014-7-16', 22, 1, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Volcado de datos para la tabla `esquema_men`
--

INSERT INTO `esquema_men` (`id_esq`, `id_reg`, `div1`, `div2`, `div3`, `div4`, `div5`, `div6`, `fecha_esq`, `obs_esq`, `mes_esq`, `id_his`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(2, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(3, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(4, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(5, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(6, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(7, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(8, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(9, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(10, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(11, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(12, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(13, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(14, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(15, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(16, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(17, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(18, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(19, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(20, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(21, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(53, 7, 'normal', '', '', '', '', '', '0000-00-00', '', 'sasdd', 0),
(54, 7, 'normal', '', '', '', '', '', '0000-00-00', '', '', 0),
(55, 7, '', '', 'normal', '', '', '', '0000-00-00', '', '', 0),
(56, 7, '', '', 'normal', '', '', '', '0000-00-00', '', '', 0),
(57, 8, '11', NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(58, 8, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(59, 8, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(60, 8, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00', '', '', 0),
(61, 13, '', '', '', '', '', '', '2014-07-09', '', '', 0),
(62, 13, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(63, 13, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(64, 13, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(65, 14, '', '', '', '', '', '', '1969-12-31', '', '', 0),
(66, 14, '', '', '', '', '', '', '1969-12-31', '', '', 0),
(67, 14, '', '', '', '', '', '', '1969-12-31', '', '', 0),
(68, 14, '', '', '', '', '', '', '1969-12-31', '', '', 0),
(69, 15, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(70, 15, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(71, 15, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(72, 15, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(73, 16, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(74, 16, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(75, 16, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(76, 16, '', '', '', '', '', '', '0000-00-00', '', '', 0),
(77, 17, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(78, 17, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(79, 17, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(80, 17, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(81, 18, '', '', '', '', '', '', '0000-00-00', '', '', 6),
(82, 18, '', '', '', '', '', '', '0000-00-00', '', '', 6),
(83, 18, '', '', '', '', '', '', '0000-00-00', '', '', 6),
(84, 18, '', '', '', '', '', '', '0000-00-00', '', '', 6),
(85, 19, 'hiper', '', '', '', '', '', '1969-12-31', '', '', 6),
(86, 19, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(87, 19, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(88, 19, '', '', '', '', '', '', '1969-12-31', '', '', 6),
(89, 20, 'normal', 'normal', 'hiper', 'hipo', 'hiper', '', '1969-12-31', '', '', 10),
(90, 20, '', '', '', '', '', '', '1969-12-31', '', '', 10),
(91, 20, '', '', '', '', '', '', '1969-12-31', '', '', 10),
(92, 20, '', '', '', '', '', '', '1969-12-31', '', '', 10),
(93, 25, 'hiper', 'normal', 'normal', 'normal', '', '', '1969-12-31', '', '', 23),
(94, 25, '', '', '', '', '', '', '1969-12-31', '', '', 23),
(95, 25, '', '', '', '', '', '', '1969-12-31', '', '', 23),
(96, 25, '', '', '', '', '', '', '1969-12-31', '', '', 23);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `examen_fisico`
--

INSERT INTO `examen_fisico` (`id_exa`, `fecha`, `id_genitales_externos`, `id_cuello_uterino`, `id_mat`, `id_an`, `id_par`, `id_his`) VALUES
(1, '2010-08-12', 44, 44, 44, 44, 44, 4),
(2, NULL, 45, 45, 45, 45, 45, 4),
(3, NULL, 46, 46, 46, 46, 46, 4),
(4, '2014-07-09', 47, 47, 47, 47, 47, 4),
(6, '2014-07-09', 49, 49, 49, 49, 49, 8),
(7, '2014-07-09', 50, 50, 50, 50, 50, 8),
(8, '2014-07-09', 51, 51, 51, 51, 51, 5),
(9, '2014-07-09', 52, 52, 52, 52, 52, 5),
(10, '2014-07-09', 53, 53, 53, 53, 53, 6),
(11, '2014-07-10', 54, 54, 54, 54, 54, 8),
(12, '2014-07-11', 55, 55, 55, 55, 55, 8),
(13, '2014-07-11', 56, 56, 56, 56, 56, 10),
(14, '2014-07-23', 58, 58, 58, 58, 58, 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `genitales_externos`
--

INSERT INTO `genitales_externos` (`id_genitales_externos`, `labios`, `g_bartholine`, `g_skane`, `meato_uretral`, `himen`, `perine`, `vagina`, `inspeccion_esfuerzo`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(44, 0, 1, 1, 0, 0, 1, 1, 0, 0, ''),
(45, 1, 1, 0, 0, 1, 1, 0, 0, 1, ''),
(46, 1, 1, 0, 0, 1, 0, 0, 0, 0, ''),
(47, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(48, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(49, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(50, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(51, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(52, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(55, 0, 1, 1, 1, 0, 1, 1, 1, 0, ''),
(56, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(57, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(58, 1, 0, 0, 0, 1, 0, 0, 0, 1, ''),
(59, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Volcado de datos para la tabla `hab_psicobio`
--

INSERT INTO `hab_psicobio` (`id_hab`, `alcohol`, `chimo`, `deportes`, `drogas`, `ocupacion`, `problemas_familiares`, `rasgos_personales`, `siesta`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 1, 1, 1, 1, 1, 1, 1, 1, 1, ''),
(34, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 1, 1, 0, 1, 1, 0, 1, 0, 0, ''),
(36, 0, 1, 1, 1, 1, 1, 0, 0, 1, ''),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 0, 0, 1, 0, 1, 1, 1, 1, 0, ''),
(40, 1, 1, 0, 0, 0, 0, 1, 0, 0, ''),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 1, 1, 0, 0, 0, 0, 0, 0, 0, ''),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 0, 0, 1, 1, 0, 0, 0, 1, 1, ''),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id_his`, `id_p`, `id_ant`) VALUES
(1, 0, 0),
(2, 35, 6),
(3, 36, 7),
(4, 37, 8),
(5, 38, 9),
(6, 39, 10),
(7, 40, 11),
(8, 41, 12),
(9, 42, 13),
(10, 43, 14),
(11, 44, 15),
(12, 45, 16),
(13, 46, 17),
(14, 47, 18),
(15, 48, 19),
(16, 49, 20),
(17, 50, 21),
(18, 51, 22),
(19, 52, 23),
(20, 53, 24),
(21, 54, 25),
(22, 55, 26),
(23, 56, 27);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `matriz`
--

INSERT INTO `matriz` (`id_mat`, `caracteres`, `posicion`, `tamano`, `tumoraciones`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, NULL, NULL, ''),
(44, 0, 0, 0, 0, 0, ''),
(45, 1, 0, 0, 0, 1, ''),
(46, 0, 0, 0, 0, 0, ''),
(47, 0, 0, 0, 0, 0, ''),
(48, 0, 0, 0, 0, 0, ''),
(49, 0, 0, 0, 0, 0, ''),
(50, 0, 0, 0, 0, 0, ''),
(51, 0, 0, 0, 0, 0, ''),
(52, 0, 0, 0, 0, 0, ''),
(53, 0, 0, 0, 0, 0, ''),
(54, 0, 0, 0, 0, 0, ''),
(55, 0, 0, 0, 0, 0, ''),
(56, 0, 0, 0, 0, 0, ''),
(57, 0, 0, 0, 0, 0, ''),
(58, 0, 0, 0, 0, 0, ''),
(59, 0, 0, 0, 0, 0, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `parametrios`
--

INSERT INTO `parametrios` (`id_par`, `induracion`, `tumores`, `otros`, `observaciones`) VALUES
(1, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, ''),
(44, 1, 1, 0, ''),
(45, 0, 0, 0, ''),
(46, 0, 0, 0, ''),
(47, 0, 0, 0, ''),
(48, 0, 0, 0, ''),
(49, 0, 0, 0, ''),
(50, 0, 0, 0, ''),
(51, 0, 0, 0, ''),
(52, 0, 0, 0, ''),
(53, 0, 0, 0, ''),
(54, 0, 0, 0, ''),
(55, 0, 0, 1, ''),
(56, 0, 0, 0, ''),
(57, 0, 0, 0, ''),
(58, 0, 0, 0, ''),
(59, 0, 0, 0, '');

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
  `telefono` int(25) NOT NULL,
  `tlf_eme` int(25) NOT NULL,
  `correo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_p`),
  KEY `fk_persona_estadocivil1_idx` (`id_es`),
  KEY `fk_persona_gruposangineo1_idx` (`id_gru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_p`, `nombre`, `apellido`, `domicilio`, `fecha_nac`, `id_es`, `id_gru`, `cedula`, `telefono`, `tlf_eme`, `correo`) VALUES
(3, 'maria', 'fuenmayor', ';ml,.', '1956-04-10', 2, 1, '465341652', 0, 0, ''),
(4, '', '', '', '0000-00-00', 1, 1, '202055412', 0, 0, ''),
(5, 'kjl;;', 'jkjljkklm', 'jikl;', '0000-00-00', 1, 1, '20205412', 1512, 6523, '6523'),
(6, 'ov,l', 'sdfd', 'sdsdgf', '0000-00-00', 1, 1, '20205412', 3116116, 96166, ''),
(8, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(9, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(10, 'kjkljkml', 'jkljkljm', 'kljmm,', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(11, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(12, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(13, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(14, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(15, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(16, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(17, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(18, 'jklkkl', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(19, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(20, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(21, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(22, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(23, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(24, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(25, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(26, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(27, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(28, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(29, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(30, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(31, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(32, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(33, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(34, '', '', '', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(35, 'kljklj', 'KJKLJK', 'KLJK', '0000-00-00', 1, 1, '20205412', 0, 0, ''),
(36, 'maria d', '', '', '1969-12-31', 1, 1, '20205412', 0, 0, ''),
(37, 'jkjklm', '', '', '1956-04-10', 1, 1, '20205412', 0, 0, ''),
(38, '', '', '', '2002-07-19', 1, 1, '20205412', 0, 0, ''),
(39, ';lk;c,cl;c.xc', '', '', '1949-07-23', 1, 2, '20205412', 0, 0, ''),
(40, 'kl;v,xc./;v.b/', '', '', '1938-04-08', 1, 1, '2020412', 0, 0, ''),
(41, 'jbhml,.', 'ibnjlkm;', '', '1969-12-31', 1, 1, '20205412', 0, 0, ''),
(42, 'txcfyvghbjknj,', '', '', '1969-12-31', 1, 1, '20205412', 0, 0, ''),
(43, 'Maria', 'fuenmayor', 'cnm.x,', '1996-12-20', 1, 1, '2202020', 0, 0, ''),
(44, '', '', '', '2014-07-10', 1, 1, '20205412', 0, 0, ''),
(45, 'dfdgf', 'sds', '', '2014-07-10', 1, 1, '20205412', 0, 0, ''),
(46, '', '', '', '2014-07-10', 1, 1, '20205412', 0, 0, ''),
(47, 'wedf', 'fdg', 'dfgc', '2014-07-16', 1, 1, '20205412', 1512, 1202, 'dsf'),
(48, 'ibjnkldv;,', '', '', '2014-07-17', 1, 1, '20205412', 0, 0, ''),
(49, 'wdsfd', '', '', '2014-07-17', 1, 1, '20205412', 0, 0, ''),
(50, 'sda', '', '', '2014-07-09', 1, 1, '20205412', 0, 0, ''),
(51, '', '', '', '2014-07-09', 1, 1, '20205412', 0, 0, ''),
(52, '', '', '', '2014-07-10', 1, 1, '20205412', 0, 0, ''),
(53, '', '', '', '2014-07-10', 1, 1, '20205412', 0, 0, ''),
(54, 'sff', '', '', '2014-07-08', 1, 1, '20205412', 0, 0, ''),
(55, 'gjhkjnlkm;', '', '', '2014-07-09', 1, 1, '20205412', 0, 0, ''),
(56, 'hola', 'fuenmayor', 'efdklm,cmvk,', '2014-07-15', 2, 5, '22020202', 0, 0, '');

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
  PRIMARY KEY (`id_rec`),
  KEY `fk_recipe_historia1_idx` (`id_his`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `recipe`
--

INSERT INTO `recipe` (`id_rec`, `id_his`, `tratamiento`, `indicaciones`, `fecha_rec`) VALUES
(2, 8, 'gyhujoiadkl'';v \\n jnadklsf;,f\\n ', 'mld,''f;.c?   \\n fnklm;d\\n ', '2014-07-10'),
(5, 8, 'kl;,kl;,\\n fkml;,vc\\njlkd,;', 'edsp,'';cxlknmjkl\\n snjlkd,fd\\n', '2014-07-10'),
(6, 8, 'adhbckjsndklnm\r\n\r\nkdfml;dfl\r\n', 'fdksnjml;,l''.;\r\n\r\nkf;,l''k;l''', '2014-07-10'),
(7, 8, '', '', '2014-07-10'),
(8, 8, '', '', '2014-07-10'),
(9, 8, '', '', '2014-07-10'),
(10, 8, '', '', '2014-07-10'),
(11, 8, '', '', '2014-07-10'),
(12, 8, '', '', '2014-07-10'),
(13, 8, '', '', '2014-07-10'),
(14, 8, '', '', '2014-07-10'),
(15, 8, '', '', '2014-07-10'),
(16, 8, '', '', '2014-07-10'),
(17, 8, '', '', '2014-07-10'),
(18, 8, '', '', '2014-07-10'),
(19, 8, '', '', '2014-07-10'),
(20, 8, 'jklmkl', 'kml;,.dfkl;,.', '2014-07-10'),
(21, 8, '', '', '2014-07-10'),
(22, 8, 'jflk;df;', 'djkfl;c,fklvc', '2014-07-10'),
(23, 8, 'gadhnjlsk;', 'dckm''l;,x.?', '2014-07-10'),
(24, 8, 'jdjdjdjfjfjfjmckcm', 'mskcldjfmxc,m\r\n\r\nmkldc', '2014-07-11'),
(25, 8, 'iuhijkl;', 'kl;,'';/kml;,./', '2014-07-11'),
(26, 8, 'jksljk', 'idjkl,c.', '2014-07-11'),
(27, 10, 'hjiojikjkkljk,\r\n\r\n\r\nmlmlmd\r\n\r\n\r\n\r\ndlsk;fdgm\r\n\r\n\r\ndd'';\r\n\r\n\r\nvhjbnkml''', 'kml;k,l;,.ml,.jkm,.\r\n\r\n\r\nmdmdlsmfmlmdlbdjnlkfm;dv,l\r\n\r\n\r\nldldl''''\r\n', '2014-07-11'),
(28, 10, 'tyghjl', 'vbjnk', '2014-07-11'),
(29, 10, '', '', '2014-07-11'),
(30, 10, 'fjdnlkdml/m,', 'kdf,l'';./g'';\r\n\r\n\r\ngjdijkdo', '2014-07-11'),
(31, 10, 'jkljfl;skdjmsl;djm', 'l;d,vl;c', '2014-07-12'),
(32, 10, '', '', '2014-07-12'),
(33, 9, 'gtgyhyh\r\n\r\nhhj', '', '2014-07-12'),
(34, 10, '', '', '2014-07-16'),
(35, 10, '', '', '2014-07-16'),
(36, 10, '', '', '2014-07-20'),
(37, 13, 'kfjbdncklvmf;ckl', 'kap;dmlsfml;fgmf;l.dffl;', '2014-07-21'),
(38, 10, 'fngjlm;,cf.', 'sfml;,c./', '2014-07-22'),
(39, 15, '', '', '2014-07-23'),
(40, 10, '', '', '2014-07-24'),
(41, 10, '', '', '2014-07-25'),
(47, 22, '', '', '2014-07-25'),
(48, 10, 'jlrjfkdm', 'snkld,.fl;', '2014-07-28'),
(49, 10, 'iihufjdkjkcj', 'djkljvmfcm', '2014-07-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_m`
--

CREATE TABLE IF NOT EXISTS `registro_m` (
  `id_reg` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_reg` date NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `registro_m`
--

INSERT INTO `registro_m` (`id_reg`, `fecha_reg`) VALUES
(7, '2014-07-12'),
(8, '2014-07-12'),
(9, '2014-07-14'),
(10, '2014-07-14'),
(11, '2014-07-14'),
(12, '2014-07-14'),
(13, '2014-07-14'),
(14, '2014-07-14'),
(15, '2014-07-14'),
(16, '2014-07-14'),
(17, '2014-07-14'),
(18, '2014-07-14'),
(19, '2014-07-14'),
(20, '2014-07-15'),
(21, '2014-07-25'),
(22, '2014-07-25'),
(23, '2014-07-25'),
(24, '2014-07-25'),
(25, '2014-07-30');

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
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `fk_antecedentes_ant_familiares1` FOREIGN KEY (`id_ant_fam`) REFERENCES `ant_familiares` (`id_ant_fam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_antecedentes_ant_personales1` FOREIGN KEY (`id_ant_per`) REFERENCES `ant_personales` (`id_ant_per`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_antecedentes_hab_psicobio1` FOREIGN KEY (`id_hab`) REFERENCES `hab_psicobio` (`id_hab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ant_obstetricos`
--
ALTER TABLE `ant_obstetricos`
  ADD CONSTRAINT `fk_ant_obstetricos_antecedentes1` FOREIGN KEY (`id_ant`) REFERENCES `antecedentes` (`id_ant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD CONSTRAINT `idHis` FOREIGN KEY (`id_h`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `idHisto` FOREIGN KEY (`id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idU` FOREIGN KEY (`id_u`) REFERENCES `usuario` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_historia1` FOREIGN KEY (`id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_consulta_usuario1` FOREIGN KEY (`id_u`) REFERENCES `usuario` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `control_postnatal`
--
ALTER TABLE `control_postnatal`
  ADD CONSTRAINT `idEmb` FOREIGN KEY (`id_emb`) REFERENCES `embarazo` (`id_emb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `control_prenatal`
--
ALTER TABLE `control_prenatal`
  ADD CONSTRAINT `fk_control_prenatal_embarazo1` FOREIGN KEY (`embarazo_id_emb`) REFERENCES `embarazo` (`id_emb`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `embarazo`
--
ALTER TABLE `embarazo`
  ADD CONSTRAINT `fk_embarazo_historia1` FOREIGN KEY (`historia_id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `esquema_men`
--
ALTER TABLE `esquema_men`
  ADD CONSTRAINT `esquema_men_ibfk_1` FOREIGN KEY (`id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idReg` FOREIGN KEY (`id_reg`) REFERENCES `registro_m` (`id_reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `examen_fisico`
--
ALTER TABLE `examen_fisico`
  ADD CONSTRAINT `fk_examen_fisico_anexo1` FOREIGN KEY (`id_an`) REFERENCES `anexo` (`id_an`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_examen_fisico_cuello_uterino1` FOREIGN KEY (`id_cuello_uterino`) REFERENCES `cuello_uterino` (`id_cuello_uterino`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_examen_fisico_genitales_externos1` FOREIGN KEY (`id_genitales_externos`) REFERENCES `genitales_externos` (`id_genitales_externos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_examen_fisico_historia1` FOREIGN KEY (`id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_examen_fisico_matriz1` FOREIGN KEY (`id_mat`) REFERENCES `matriz` (`id_mat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_examen_fisico_parametrios1` FOREIGN KEY (`id_par`) REFERENCES `parametrios` (`id_par`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historia`
--
ALTER TABLE `historia`
  ADD CONSTRAINT `fk_historia_antecedentes1` FOREIGN KEY (`id_ant`) REFERENCES `antecedentes` (`id_ant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_historia_persona1` FOREIGN KEY (`id_p`) REFERENCES `persona` (`id_p`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_estadocivil1` FOREIGN KEY (`id_es`) REFERENCES `estadocivil` (`id_es`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_gruposangineo1` FOREIGN KEY (`id_gru`) REFERENCES `gruposangineo` (`id_gru`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `fk_recipe_historia1` FOREIGN KEY (`id_his`) REFERENCES `historia` (`id_his`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
