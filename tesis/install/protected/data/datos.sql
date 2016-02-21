-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_test`
--

DROP TABLE IF EXISTS `usuario_test`;
CREATE TABLE `usuario_test` (
  `id_u` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` varchar(25) NOT NULL,
  PRIMARY KEY (`id_u`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
