-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 10:15:04
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcar` int(11) NOT NULL,
  `idpro1` int(11) DEFAULT NULL,
  `idusu1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciu` int(11) NOT NULL,
  `iddpto1` char(3) NOT NULL,
  `nomciu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciu`, `iddpto1`, `nomciu`) VALUES
(1, '11', 'BOGOTA, D.C.'),
(1, '13', 'CARTAGENA'),
(1, '15', 'TUNJA'),
(1, '17', 'MANIZALES'),
(1, '18', 'FLORENCIA'),
(1, '19', 'POPAYAN'),
(1, '20', 'VALLEDUPAR'),
(1, '23', 'MONTERIA'),
(1, '25', 'AGUA DE DIOS'),
(1, '27', 'QUIBDO'),
(1, '41', 'NEIVA'),
(1, '44', 'RIOHACHA'),
(1, '47', 'SANTA MARTA'),
(1, '5', 'MEDELLIN'),
(1, '50', 'VILLAVICENCIO'),
(1, '52', 'PASTO'),
(1, '54', 'CUCUTA'),
(1, '63', 'ARMENIA'),
(1, '66', 'PEREIRA'),
(1, '68', 'BUCARAMANGA'),
(1, '70', 'SINCELEJO'),
(1, '73', 'IBAGUE'),
(1, '76', 'CALI'),
(1, '8', 'BARRANQUILLA'),
(1, '81', 'ARAUCA'),
(1, '85', 'YOPAL'),
(1, '86', 'MOCOA'),
(1, '88', 'SAN ANDRES'),
(1, '91', 'LETICIA'),
(1, '94', 'INIRIDA'),
(1, '95', 'SAN JOSE DEL GUAVIARE'),
(1, '97', 'MITU'),
(1, '99', 'PUERTO CARREÑO'),
(2, '5', 'ABEJORRAL'),
(3, '54', 'ABREGO'),
(4, '5', 'ABRIAQUI'),
(6, '13', 'ACHI'),
(6, '27', 'ACANDI'),
(6, '41', 'ACEVEDO'),
(6, '50', 'ACACIAS'),
(10, '85', 'AGUAZUL'),
(11, '20', 'AGUACHICA'),
(13, '17', 'AGUADAS'),
(13, '20', 'AGUSTIN CODAZZI'),
(13, '41', 'AGRADO'),
(13, '68', 'AGUADA'),
(15, '85', 'CHAMEZA'),
(15, '95', 'CALAMAR'),
(16, '41', 'AIPE'),
(19, '25', 'ALBAN'),
(19, '52', 'ALBAN'),
(20, '41', 'ALGECIRAS'),
(20, '68', 'ALBANIA'),
(20, '76', 'ALCALA'),
(21, '5', 'ALEJANDRIA'),
(22, '15', 'ALMEIDA'),
(22, '19', 'ALMAGUER'),
(22, '52', 'ALDANA'),
(24, '73', 'ALPUJARRA'),
(25, '27', 'ALTO BAUDO'),
(25, '95', 'EL RETORNO'),
(26, '41', 'ALTAMIRA'),
(26, '73', 'ALVARADO'),
(29, '18', 'ALBANIA'),
(30, '13', 'ALTOS DEL ROSARIO'),
(30, '47', 'ALGARROBO'),
(30, '5', 'AMAGA'),
(30, '73', 'AMBALEMA'),
(31, '5', 'AMALFI'),
(32, '20', 'ASTREA'),
(34, '5', 'ANDES'),
(35, '25', 'ANAPOIMA'),
(35, '44', 'ALBANIA'),
(36, '5', 'ANGELOPOLIS'),
(36, '52', 'ANCUYA'),
(36, '76', 'ANDALUCIA'),
(38, '5', 'ANGOSTURA'),
(40, '25', 'ANOLAIMA'),
(40, '5', 'ANORI'),
(41, '76', 'ANSERMANUEVO'),
(42, '13', 'ARENAL'),
(42, '17', 'ANSERMA'),
(42, '5', 'SANTAFE DE ANTIOQUIA'),
(43, '73', 'ANZOATEGUI'),
(44, '5', 'ANZA'),
(45, '20', 'BECERRIL'),
(45, '5', 'APARTADO'),
(45, '66', 'APIA'),
(47, '15', 'AQUITANIA'),
(50, '17', 'ARANZAZU'),
(50, '19', 'ARGELIA'),
(50, '27', 'ATRATO'),
(51, '15', 'ARCABUCO'),
(51, '5', 'ARBOLETES'),
(51, '52', 'ARBOLEDA'),
(51, '54', 'ARBOLEDAS'),
(51, '68', 'ARATOCA'),
(52, '13', 'ARJONA'),
(53, '25', 'ARBELAEZ'),
(53, '47', 'ARACATACA'),
(54, '76', 'ARGELIA'),
(55, '5', 'ARGELIA'),
(55, '73', 'ARMERO'),
(58, '47', 'ARIGUANI'),
(59, '5', 'ARMENIA'),
(60, '20', 'BOSCONIA'),
(62, '13', 'ARROYOHONDO'),
(65, '81', 'ARAUQUITA'),
(67, '73', 'ATACO'),
(68, '23', 'AYAPEL'),
(73, '27', 'BAGADO'),
(74, '13', 'BARRANCO DE LOBA'),
(75, '19', 'BALBOA'),
(75, '27', 'BAHIA SOLANO'),
(75, '66', 'BALBOA'),
(77, '27', 'BAJO BAUDO'),
(77, '68', 'BARBOSA'),
(78, '41', 'BARAYA'),
(78, '44', 'BARRANCAS'),
(78, '8', 'BARANOA'),
(79, '23', 'BUENAVISTA'),
(79, '5', 'BARBOSA'),
(79, '52', 'BARBACOAS'),
(79, '68', 'BARICHARA'),
(81, '68', 'BARRANCABERMEJA'),
(83, '52', 'BELEN'),
(86, '25', 'BELTRAN'),
(86, '5', 'BELMIRA'),
(87, '15', 'BELEN'),
(88, '17', 'BELALCAZAR'),
(88, '5', 'BELLO'),
(88, '66', 'BELEN DE UMBRIA'),
(90, '15', 'BERBEO'),
(90, '23', 'CANALETE'),
(90, '44', 'DIBULLA'),
(91, '5', 'BETANIA'),
(92, '15', 'BETEITIVA'),
(92, '68', 'BETULIA'),
(93, '5', 'BETULIA'),
(94, '18', 'BELEN DE LOS ANDAQUIES'),
(95, '25', 'BITUIMA'),
(97, '15', 'BOAVITA'),
(98, '44', 'DISTRACCION'),
(99, '25', 'BOJACA'),
(99, '27', 'BOJAYA'),
(99, '54', 'BOCHALEMA'),
(100, '19', 'BOLIVAR'),
(100, '76', 'BOLIVAR'),
(101, '5', 'CIUDAD BOLIVAR'),
(101, '68', 'BOLIVAR'),
(104, '15', 'BOYACA'),
(106, '15', 'BRICEÑO'),
(107, '5', 'BRICEÑO'),
(109, '15', 'BUENAVISTA'),
(109, '54', 'BUCARASICA'),
(109, '76', 'BUENAVENTURA'),
(110, '19', 'BUENOS AIRES'),
(110, '44', 'EL MOLINO'),
(110, '50', 'BARRANCA DE UPIA'),
(110, '52', 'BUESACO'),
(110, '70', 'BUENAVISTA'),
(111, '63', 'BUENAVISTA'),
(111, '76', 'GUADALAJARA DE BUGA'),
(113, '5', 'BURITICA'),
(113, '76', 'BUGALAGRANDE'),
(114, '15', 'BUSBANZA'),
(120, '25', 'CABRERA'),
(120, '5', 'CACERES'),
(121, '68', 'CABRERA'),
(122, '76', 'CAICEDONIA'),
(123, '25', 'CACHIPAY'),
(124, '50', 'CABUYARO'),
(124, '70', 'CAIMITO'),
(124, '73', 'CAJAMARCA'),
(125, '5', 'CAICEDO'),
(125, '54', 'CACOTA'),
(125, '85', 'HATO COROZAL'),
(126, '25', 'CAJICA'),
(126, '76', 'CALIMA'),
(128, '54', 'CACHIRA'),
(129, '5', 'CALDAS'),
(130, '19', 'CAJIBIO'),
(130, '63', 'CALARCA'),
(130, '76', 'CANDELARIA'),
(131, '15', 'CALDAS'),
(132, '41', 'CAMPOALEGRE'),
(132, '68', 'CALIFORNIA'),
(134, '5', 'CAMPAMENTO'),
(135, '15', 'CAMPOHERMOSO'),
(135, '27', 'EL CANTON DEL SAN PABLO'),
(136, '85', 'LA SALINA'),
(137, '19', 'CALDONO'),
(137, '8', 'CAMPO DE LA CRUZ'),
(138, '5', 'CAÑASGORDAS'),
(139, '85', 'MANI'),
(140, '13', 'CALAMAR'),
(141, '8', 'CANDELARIA'),
(142, '19', 'CALOTO'),
(142, '5', 'CARACOLI'),
(145, '5', 'CARAMANTA'),
(147, '5', 'CAREPA'),
(147, '68', 'CAPITANEJO'),
(147, '76', 'CARTAGO'),
(148, '25', 'CAPARRAPI'),
(148, '5', 'EL CARMEN DE VIBORAL'),
(148, '73', 'CARMEN DE APICALA'),
(150, '18', 'CARTAGENA DEL CHAIRA'),
(150, '27', 'CARMEN DEL DARIEN'),
(150, '5', 'CAROLINA'),
(150, '50', 'CASTILLA LA NUEVA'),
(151, '25', 'CAQUEZA'),
(152, '68', 'CARCASI'),
(152, '73', 'CASABIANCA'),
(154, '25', 'CARMEN DE CARUPA'),
(154, '5', 'CAUCASIA'),
(160, '13', 'CANTAGALLO'),
(160, '27', 'CERTEGUI'),
(160, '68', 'CEPITA'),
(161, '47', 'CERRO SAN ANTONIO'),
(161, '97', 'CARURU'),
(162, '15', 'CERINZA'),
(162, '23', 'CERETE'),
(162, '68', 'CERRITO'),
(162, '85', 'MONTERREY'),
(167, '68', 'CHARALA'),
(168, '23', 'CHIMA'),
(168, '25', 'CHAGUANI'),
(168, '73', 'CHAPARRAL'),
(169, '68', 'CHARTA'),
(170, '47', 'CHIBOLO'),
(170, '66', 'DOSQUEBRADAS'),
(172, '15', 'CHINAVITA'),
(172, '5', 'CHIGORODO'),
(172, '54', 'CHINACOTA'),
(174, '17', 'CHINCHINA'),
(174, '54', 'CHITAGA'),
(175, '20', 'CHIMICHAGUA'),
(175, '25', 'CHIA'),
(176, '15', 'CHIQUINQUIRA'),
(176, '68', 'CHIMA'),
(178, '20', 'CHIRIGUANA'),
(178, '25', 'CHIPAQUE'),
(179, '68', 'CHIPATA'),
(180, '15', 'CHISCAS'),
(181, '25', 'CHOACHI'),
(182, '23', 'CHINU'),
(183, '15', 'CHITA'),
(183, '25', 'CHOCONTA'),
(185, '15', 'CHITARAQUE'),
(187, '15', 'CHIVATA'),
(188, '13', 'CICUCO'),
(189, '15', 'CIENEGA'),
(189, '23', 'CIENAGA DE ORO'),
(189, '47', 'CIENAGA'),
(190, '5', 'CISNEROS'),
(190, '63', 'CIRCASIA'),
(190, '68', 'CIMITARRA'),
(197, '5', 'COCORNA'),
(200, '25', 'COGUA'),
(200, '73', 'COELLO'),
(200, '95', 'MIRAFLORES'),
(203, '52', 'COLON'),
(204, '15', 'COMBITA'),
(204, '70', 'COLOSO'),
(205, '18', 'CURILLO'),
(205, '27', 'CONDOTO'),
(205, '47', 'CONCORDIA'),
(206, '41', 'COLOMBIA'),
(206, '5', 'CONCEPCION'),
(206, '54', 'CONVENCION'),
(207, '52', 'CONSACA'),
(207, '68', 'CONCEPCION'),
(209, '5', 'CONCORDIA'),
(209, '68', 'CONFINES'),
(210, '52', 'CONTADERO'),
(211, '68', 'CONTRATACION'),
(212, '13', 'CORDOBA'),
(212, '15', 'COPER'),
(212, '19', 'CORINTO'),
(212, '5', 'COPACABANA'),
(212, '63', 'CORDOBA'),
(214, '25', 'COTA'),
(215, '15', 'CORRALES'),
(215, '52', 'CORDOBA'),
(215, '70', 'COROZAL'),
(217, '68', 'COROMORO'),
(217, '73', 'COYAIMA'),
(218, '15', 'COVARACHIA'),
(219, '86', 'COLON'),
(220, '81', 'CRAVO NORTE'),
(221, '70', 'COVEÑAS'),
(222, '13', 'CLEMENCIA'),
(223, '15', 'CUBARA'),
(223, '50', 'CUBARRAL'),
(223, '54', 'CUCUTILLA'),
(224, '15', 'CUCAITA'),
(224, '25', 'CUCUNUBA'),
(224, '52', 'CUASPUD'),
(225, '85', 'NUNCHIA'),
(226, '15', 'CUITIVA'),
(226, '50', 'CUMARAL'),
(226, '73', 'CUNDAY'),
(227, '52', 'CUMBAL'),
(228, '20', 'CURUMANI'),
(229, '68', 'CURITI'),
(230, '70', 'CHALAN'),
(230, '85', 'OROCUE'),
(232, '15', 'CHIQUIZA'),
(233, '52', 'CUMBITARA'),
(233, '70', 'EL ROBLE'),
(233, '76', 'DAGUA'),
(234, '5', 'DABEIBA'),
(235, '68', 'EL CARMEN DE CHUCURI'),
(235, '70', 'GALERAS'),
(236, '15', 'CHIVOR'),
(236, '73', 'DOLORES'),
(237, '5', 'DON MATIAS'),
(238, '15', 'DUITAMA'),
(238, '20', 'EL COPEY'),
(239, '54', 'DURANIA'),
(240, '5', 'EBEJICO'),
(240, '52', 'CHACHAGsI'),
(243, '76', 'EL AGUILA'),
(244, '13', 'EL CARMEN DE BOLIVAR'),
(244, '15', 'EL COCUY'),
(244, '41', 'ELIAS'),
(245, '25', 'EL COLEGIO'),
(245, '27', 'EL CARMEN DE ATRATO'),
(245, '47', 'EL BANCO'),
(245, '50', 'EL CALVARIO'),
(245, '54', 'EL CARMEN'),
(245, '68', 'EL GUACAMAYO'),
(246, '76', 'EL CAIRO'),
(247, '18', 'EL DONCELLO'),
(248, '13', 'EL GUAMO'),
(248, '15', 'EL ESPINO'),
(248, '76', 'EL CERRITO'),
(250, '20', 'EL PASO'),
(250, '27', 'EL LITORAL DEL SAN JUAN'),
(250, '5', 'EL BAGRE'),
(250, '52', 'EL CHARCO'),
(250, '54', 'EL TARRA'),
(250, '68', 'EL PEÑON'),
(250, '76', 'EL DOVIO'),
(250, '85', 'PAZ DE ARIPORO'),
(251, '50', 'EL CASTILLO'),
(254, '52', 'EL PEÑOL'),
(255, '68', 'EL PLAYON'),
(256, '18', 'EL PAUJIL'),
(256, '19', 'EL TAMBO'),
(256, '52', 'EL ROSARIO'),
(258, '25', 'EL PEÑON'),
(258, '47', 'EL PIÑON'),
(258, '52', 'EL TABLON DE GOMEZ'),
(260, '25', 'EL ROSAL'),
(260, '52', 'EL TAMBO'),
(261, '54', 'EL ZULIA'),
(263, '85', 'PORE'),
(263, '91', 'EL ENCANTO'),
(264, '5', 'ENTRERRIOS'),
(264, '68', 'ENCINO'),
(265, '70', 'GUARANDA'),
(266, '5', 'ENVIGADO'),
(266, '68', 'ENCISO'),
(268, '13', 'EL PEÑON'),
(268, '47', 'EL RETEN'),
(268, '73', 'ESPINAL'),
(269, '25', 'FACATATIVA'),
(270, '50', 'EL DORADO'),
(270, '73', 'FALAN'),
(271, '68', 'FLORIAN'),
(272, '15', 'FIRAVITOBA'),
(272, '17', 'FILADELFIA'),
(272, '63', 'FILANDIA'),
(275, '73', 'FLANDES'),
(275, '76', 'FLORIDA'),
(276, '15', 'FLORESTA'),
(276, '68', 'FLORIDABLANCA'),
(279, '25', 'FOMEQUE'),
(279, '44', 'FONSECA'),
(279, '85', 'RECETOR'),
(281, '25', 'FOSCA'),
(282, '5', 'FREDONIA'),
(283, '73', 'FRESNO'),
(284, '5', 'FRONTINO'),
(286, '25', 'FUNZA'),
(287, '50', 'FUENTE DE ORO'),
(287, '52', 'FUNES'),
(288, '25', 'FUQUENE'),
(288, '47', 'FUNDACION'),
(290, '19', 'FLORENCIA'),
(290, '25', 'FUSAGASUGA'),
(293, '15', 'GACHANTIVA'),
(293, '25', 'GACHALA'),
(295, '20', 'GAMARRA'),
(295, '25', 'GACHANCIPA'),
(296, '15', 'GAMEZA'),
(296, '68', 'GALAN'),
(296, '8', 'GALAPA'),
(297, '25', 'GACHETA'),
(298, '41', 'GARZON'),
(298, '68', 'GAMBITA'),
(299, '15', 'GARAGOA'),
(299, '25', 'GAMA'),
(300, '13', 'HATILLO DE LOBA'),
(300, '19', 'GUACHENE'),
(300, '23', 'COTORRA'),
(300, '81', 'FORTUL'),
(300, '85', 'SABANALARGA'),
(302, '63', 'GENOVA'),
(306, '41', 'GIGANTE'),
(306, '5', 'GIRALDO'),
(306, '76', 'GINEBRA'),
(307, '25', 'GIRARDOT'),
(307, '68', 'GIRON'),
(308, '5', 'GIRARDOTA'),
(310, '20', 'GONZALEZ'),
(310, '5', 'GOMEZ PLATA'),
(312, '25', 'GRANADA'),
(313, '5', 'GRANADA'),
(313, '50', 'GRANADA'),
(313, '54', 'GRAMALOTE'),
(315, '5', 'GUADALUPE'),
(315, '85', 'SACAMA'),
(317, '15', 'GUACAMAYAS'),
(317, '25', 'GUACHETA'),
(317, '52', 'GUACHUCAL'),
(318, '19', 'GUAPI'),
(318, '47', 'GUAMAL'),
(318, '5', 'GUARNE'),
(318, '50', 'GUAMAL'),
(318, '66', 'GUATICA'),
(318, '68', 'GUACA'),
(318, '76', 'GUACARI'),
(319, '41', 'GUADALUPE'),
(319, '73', 'GUAMO'),
(320, '25', 'GUADUAS'),
(320, '52', 'GUAITARILLA'),
(320, '68', 'GUADALUPE'),
(320, '86', 'ORITO'),
(321, '5', 'GUATAPE'),
(322, '15', 'GUATEQUE'),
(322, '25', 'GUASCA'),
(322, '68', 'GUAPOTA'),
(323, '52', 'GUALMATAN'),
(324, '25', 'GUATAQUI'),
(324, '68', 'GUAVATA'),
(325, '15', 'GUAYATA'),
(325, '50', 'MAPIRIPAN'),
(325, '85', 'SAN LUIS DE PALENQUE'),
(326, '25', 'GUATAVITA'),
(327, '68', 'GsEPSA'),
(328, '25', 'GUAYABAL DE SIQUIMA'),
(330, '50', 'MESETAS'),
(332, '15', 'GsICAN'),
(335, '25', 'GUAYABETAL'),
(339, '25', 'GUTIERREZ'),
(343, '94', 'BARRANCO MINAS'),
(344, '54', 'HACARI'),
(344, '68', 'HATO'),
(347, '5', 'HELICONIA'),
(347, '54', 'HERRAN'),
(347, '73', 'HERVEO'),
(349, '41', 'HOBO'),
(349, '73', 'HONDA'),
(350, '23', 'LA APARTADA'),
(350, '50', 'LA MACARENA'),
(352, '52', 'ILES'),
(352, '73', 'ICONONZO'),
(353, '5', 'HISPANIA'),
(354, '52', 'IMUES'),
(355, '19', 'INZA'),
(356, '52', 'IPIALES'),
(357, '41', 'IQUIRA'),
(359, '41', 'ISNOS'),
(360, '5', 'ITAGUI'),
(361, '27', 'ISTMINA'),
(361, '5', 'ITUANGO'),
(362, '15', 'IZA'),
(364, '19', 'JAMBALO'),
(364, '5', 'JARDIN'),
(364, '76', 'JAMUNDI'),
(367, '15', 'JENESANO'),
(368, '15', 'JERICO'),
(368, '25', 'JERUSALEN'),
(368, '5', 'JERICO'),
(368, '68', 'JESUS MARIA'),
(370, '50', 'URIBE'),
(370, '68', 'JORDAN'),
(372, '25', 'JUNIN'),
(372, '27', 'JURADO'),
(372, '8', 'JUAN DE ACOSTA'),
(376, '5', 'LA CEJA'),
(377, '15', 'LABRANZAGRANDE'),
(377, '25', 'LA CALERA'),
(377, '54', 'LABATECA'),
(377, '68', 'LA BELLEZA'),
(377, '76', 'LA CUMBRE'),
(378, '41', 'LA ARGENTINA'),
(378, '44', 'HATONUEVO'),
(378, '52', 'LA CRUZ'),
(380, '15', 'LA CAPILLA'),
(380, '17', 'LA DORADA'),
(380, '5', 'LA ESTRELLA'),
(381, '52', 'LA FLORIDA'),
(383, '20', 'LA GLORIA'),
(383, '66', 'LA CELIA'),
(385, '52', 'LA LLANADA'),
(385, '54', 'LA ESPERANZA'),
(385, '68', 'LANDAZURI'),
(386, '25', 'LA MESA'),
(388, '17', 'LA MERCED'),
(390, '5', 'LA PINTADA'),
(390, '52', 'LA TOLA'),
(392, '19', 'LA SIERRA'),
(394, '25', 'LA PALMA'),
(396, '41', 'LA PLATA'),
(397, '19', 'LA VEGA'),
(397, '68', 'LA PAZ'),
(398, '25', 'LA PEÑA'),
(398, '54', 'LA PLAYA'),
(399, '52', 'LA UNION'),
(400, '20', 'LA JAGUA DE IBIRICO'),
(400, '5', 'LA UNION'),
(400, '50', 'LEJANIAS'),
(400, '66', 'LA VIRGINIA'),
(400, '70', 'LA UNION'),
(400, '76', 'LA UNION'),
(400, '85', 'TAMARA'),
(401, '15', 'LA VICTORIA'),
(401, '63', 'LA TEBAIDA'),
(402, '25', 'LA VEGA'),
(403, '15', 'LA UVITA'),
(403, '76', 'LA VICTORIA'),
(405, '52', 'LEIVA'),
(405, '54', 'LOS PATIOS'),
(405, '91', 'LA CHORRERA'),
(406, '68', 'LEBRIJA'),
(407, '15', 'VILLA DE LEYVA'),
(407, '25', 'LENGUAZAQUE'),
(407, '91', 'LA PEDRERA'),
(408, '73', 'LERIDA'),
(410, '18', 'LA MONTAÑITA'),
(410, '85', 'TAURAMENA'),
(411, '5', 'LIBORINA'),
(411, '52', 'LINARES'),
(411, '73', 'LIBANO'),
(413, '27', 'LLORO'),
(417, '23', 'LORICA'),
(418, '19', 'LOPEZ'),
(418, '52', 'LOS ANDES'),
(418, '54', 'LOURDES'),
(418, '68', 'LOS SANTOS'),
(418, '70', 'LOS PALMITOS'),
(419, '23', 'LOS CORDOBAS'),
(420, '44', 'LA JAGUA DEL PILAR'),
(421, '8', 'LURUACO'),
(425, '15', 'MACANAL'),
(425, '27', 'MEDIO ATRATO'),
(425, '5', 'MACEO'),
(425, '68', 'MACARAVITA'),
(426, '25', 'MACHETA'),
(427, '52', 'MAGsI'),
(429, '70', 'MAJAGUAL'),
(430, '13', 'MAGANGUE'),
(430, '25', 'MADRID'),
(430, '27', 'MEDIO BAUDO'),
(430, '44', 'MAICAO'),
(430, '85', 'TRINIDAD'),
(430, '91', 'LA VICTORIA'),
(432, '68', 'MALAGA'),
(433, '13', 'MAHATES'),
(433, '17', 'MANZANARES'),
(433, '8', 'MALAMBO'),
(435, '52', 'MALLAMA'),
(436, '25', 'MANTA'),
(436, '8', 'MANATI'),
(438, '25', 'MEDINA'),
(440, '13', 'MARGARITA'),
(440, '5', 'MARINILLA'),
(440, '66', 'MARSELLA'),
(440, '85', 'VILLANUEVA'),
(442, '13', 'MARIA LA BAJA'),
(442, '15', 'MARIPI'),
(442, '17', 'MARMATO'),
(443, '20', 'MANAURE'),
(443, '73', 'MARIQUITA'),
(444, '17', 'MARQUETALIA'),
(444, '68', 'MATANZA'),
(446, '17', 'MARULANDA'),
(449, '73', 'MELGAR'),
(450, '19', 'MERCADERES'),
(450, '27', 'MEDIO SAN JUAN'),
(450, '50', 'PUERTO CONCORDIA'),
(455, '15', 'MIRAFLORES'),
(455, '19', 'MIRANDA'),
(456, '66', 'MISTRATO'),
(458, '13', 'MONTECRISTO'),
(460, '18', 'MILAN'),
(460, '47', 'NUEVA GRANADA'),
(460, '91', 'MIRITI - PARANA'),
(461, '73', 'MURILLO'),
(464, '15', 'MONGUA'),
(464, '23', 'MOMIL'),
(464, '68', 'MOGOTES'),
(466, '15', 'MONGUI'),
(466, '23', 'MONTELIBANO'),
(467, '5', 'MONTEBELLO'),
(468, '13', 'MOMPOS'),
(468, '68', 'MOLAGAVITA'),
(469, '15', 'MONIQUIRA'),
(470, '63', 'MONTENEGRO'),
(473, '13', 'MORALES'),
(473, '19', 'MORALES'),
(473, '25', 'MOSQUERA'),
(473, '52', 'MOSQUERA'),
(473, '70', 'MORROA'),
(475, '5', 'MURINDO'),
(476, '15', 'MOTAVITA'),
(479, '18', 'MORELIA'),
(480, '15', 'MUZO'),
(480, '5', 'MUTATA'),
(480, '52', 'NARIÑO'),
(480, '54', 'MUTISCUA'),
(483, '25', 'NARIÑO'),
(483, '41', 'NATAGA'),
(483, '5', 'NARIÑO'),
(483, '73', 'NATAGAIMA'),
(486, '17', 'NEIRA'),
(486, '25', 'NEMOCON'),
(488, '25', 'NILO'),
(489, '25', 'NIMAIMA'),
(490, '13', 'NOROSI'),
(490, '5', 'NECOCLI'),
(490, '52', 'OLAYA HERRERA'),
(491, '15', 'NOBSA'),
(491, '25', 'NOCAIMA'),
(491, '27', 'NOVITA'),
(494, '15', 'NUEVO COLON'),
(495, '17', 'NORCASIA'),
(495, '27', 'NUQUI'),
(495, '5', 'NECHI'),
(497, '76', 'OBANDO'),
(498, '54', 'OCAÑA'),
(498, '68', 'OCAMONTE'),
(500, '15', 'OICATA'),
(500, '23', 'MOÑITOS'),
(500, '68', 'OIBA'),
(501, '5', 'OLAYA'),
(502, '68', 'ONZAGA'),
(503, '41', 'OPORAPA'),
(504, '73', 'ORTEGA'),
(506, '25', 'VENECIA'),
(506, '52', 'OSPINA'),
(507, '15', 'OTANCHE'),
(508, '70', 'OVEJAS'),
(511, '15', 'PACHAVITA'),
(511, '97', 'PACOA'),
(513, '17', 'PACORA'),
(513, '19', 'PADILLA'),
(513, '25', 'PACHO'),
(514, '15', 'PAEZ'),
(516, '15', 'PAIPA'),
(517, '19', 'PAEZ'),
(517, '20', 'PAILITAS'),
(518, '15', 'PAJARITO'),
(518, '25', 'PAIME'),
(518, '41', 'PAICOL'),
(518, '54', 'PAMPLONA'),
(520, '52', 'FRANCISCO PIZARRO'),
(520, '54', 'PAMPLONITA'),
(520, '73', 'PALOCABILDO'),
(520, '76', 'PALMIRA'),
(520, '8', 'PALMAR DE VARELA'),
(522, '15', 'PANQUEBA'),
(522, '68', 'PALMAR'),
(523, '70', 'PALMITO'),
(524, '17', 'PALESTINA'),
(524, '25', 'PANDI'),
(524, '41', 'PALERMO'),
(524, '68', 'PALMAS DEL SOCORRO'),
(524, '99', 'LA PRIMAVERA'),
(530, '25', 'PARATEBUENO'),
(530, '41', 'PALESTINA'),
(530, '91', 'PUERTO ALEGRIA'),
(531, '15', 'PAUNA'),
(532, '19', 'PATIA'),
(533, '15', 'PAYA'),
(533, '19', 'PIAMONTE'),
(533, '68', 'PARAMO'),
(535, '25', 'PASCA'),
(536, '91', 'PUERTO ARICA'),
(537, '15', 'PAZ DE RIO'),
(540, '52', 'POLICARPA'),
(540, '91', 'PUERTO NARIÑO'),
(541, '17', 'PENSILVANIA'),
(541, '47', 'PEDRAZA'),
(541, '5', 'PEÐOL'),
(542, '15', 'PESCA'),
(543, '5', 'PEQUE'),
(545, '47', 'PIJIÑO DEL CARMEN'),
(547, '68', 'PIEDECUESTA'),
(547, '73', 'PIEDRAS'),
(548, '19', 'PIENDAMO'),
(548, '41', 'PITAL'),
(548, '63', 'PIJAO'),
(549, '13', 'PINILLOS'),
(549, '68', 'PINCHOTE'),
(549, '8', 'PIOJO'),
(550, '15', 'PISBA'),
(550, '20', 'PELAYA'),
(551, '41', 'PITALITO'),
(551, '47', 'PIVIJAY'),
(553, '54', 'PUERTO SANTANDER'),
(555, '23', 'PLANETA RICA'),
(555, '47', 'PLATO'),
(555, '73', 'PLANADAS'),
(558, '8', 'POLONUEVO'),
(560, '44', 'MANAURE'),
(560, '52', 'POTOSI'),
(560, '8', 'PONEDERA'),
(563, '73', 'PRADO'),
(563, '76', 'PRADERA'),
(564, '88', 'PROVIDENCIA'),
(565, '52', 'PROVIDENCIA'),
(568, '50', 'PUERTO GAITAN'),
(568, '86', 'PUERTO ASIS'),
(569, '86', 'PUERTO CAICEDO'),
(570, '20', 'PUEBLO BELLO'),
(570, '23', 'PUEBLO NUEVO'),
(570, '47', 'PUEBLOVIEJO'),
(571, '86', 'PUERTO GUZMAN'),
(572, '15', 'PUERTO BOYACA'),
(572, '25', 'PUERTO SALGAR'),
(572, '66', 'PUEBLO RICO'),
(572, '68', 'PUENTE NACIONAL'),
(573, '19', 'PUERTO TEJADA'),
(573, '50', 'PUERTO LOPEZ'),
(573, '52', 'PUERRES'),
(573, '68', 'PUERTO PARRA'),
(573, '8', 'PUERTO COLOMBIA'),
(573, '86', 'LEGUIZAMO'),
(574, '23', 'PUERTO ESCONDIDO'),
(575, '68', 'PUERTO WILCHES'),
(576, '5', 'PUEBLORRICO'),
(577, '50', 'PUERTO LLERAS'),
(579, '5', 'PUERTO BERRIO'),
(580, '13', 'REGIDOR'),
(580, '15', 'QUIPAMA'),
(580, '23', 'PUERTO LIBERTADOR'),
(580, '25', 'PULI'),
(580, '27', 'RIO IRO'),
(585, '19', 'PURACE'),
(585, '5', 'PUERTO NARE'),
(585, '52', 'PUPIALES'),
(585, '73', 'PURIFICACION'),
(586, '23', 'PURISIMA'),
(590, '50', 'PUERTO RICO'),
(591, '5', 'PUERTO TRIUNFO'),
(591, '81', 'PUERTO RONDON'),
(592, '18', 'PUERTO RICO'),
(592, '25', 'QUEBRADANEGRA'),
(594, '25', 'QUETAME'),
(594, '63', 'QUIMBAYA'),
(594, '66', 'QUINCHIA'),
(596, '25', 'QUIPILE'),
(599, '15', 'RAMIRIQUI'),
(599, '25', 'APULO'),
(599, '54', 'RAGONVALIA'),
(600, '13', 'RIO VIEJO'),
(600, '15', 'RAQUIRA'),
(600, '27', 'RIO QUITO'),
(604, '5', 'REMEDIOS'),
(605, '47', 'REMOLINO'),
(606, '50', 'RESTREPO'),
(606, '76', 'RESTREPO'),
(606, '8', 'REPELON'),
(607, '5', 'RETIRO'),
(610, '18', 'SAN JOSE DEL FRAGUA'),
(612, '25', 'RICAURTE'),
(612, '52', 'RICAURTE'),
(614, '17', 'RIOSUCIO'),
(614, '20', 'RIO DE ORO'),
(615, '27', 'RIOSUCIO'),
(615, '41', 'RIVERA'),
(615, '5', 'RIONEGRO'),
(615, '68', 'RIONEGRO'),
(616, '17', 'RISARALDA'),
(616, '73', 'RIOBLANCO'),
(616, '76', 'RIOFRIO'),
(620, '13', 'SAN CRISTOBAL'),
(621, '15', 'RONDON'),
(621, '20', 'LA PAZ'),
(621, '52', 'ROBERTO PAYAN'),
(622, '19', 'ROSAS'),
(622, '73', 'RONCESVALLES'),
(622, '76', 'ROLDANILLO'),
(624, '73', 'ROVIRA'),
(624, '99', 'SANTA ROSALIA'),
(628, '5', 'SABANALARGA'),
(631, '5', 'SABANETA'),
(632, '15', 'SABOYA'),
(634, '8', 'SABANAGRANDE'),
(638, '15', 'SACHICA'),
(638, '8', 'SABANALARGA'),
(642, '5', 'SALGAR'),
(645, '25', 'SAN ANTONIO DEL TEQUENDAMA'),
(646, '15', 'SAMACA'),
(647, '13', 'SAN ESTANISLAO'),
(647, '5', 'SAN ANDRES DE CUERQUIA'),
(649, '25', 'SAN BERNARDO'),
(649, '5', 'SAN CARLOS'),
(650, '13', 'SAN FERNANDO'),
(650, '44', 'SAN JUAN DEL CESAR'),
(652, '5', 'SAN FRANCISCO'),
(653, '17', 'SALAMINA'),
(653, '25', 'SAN CAYETANO'),
(654, '13', 'SAN JACINTO'),
(655, '13', 'SAN JACINTO DEL CAUCA'),
(655, '68', 'SABANA DE TORRES'),
(656, '5', 'SAN JERONIMO'),
(657, '13', 'SAN JUAN NEPOMUCENO'),
(658, '25', 'SAN FRANCISCO'),
(658, '5', 'SAN JOSE DE LA MONTAÑA'),
(659, '5', 'SAN JUAN DE URABA'),
(660, '15', 'SAN EDUARDO'),
(660, '23', 'SAHAGUN'),
(660, '27', 'SAN JOSE DEL PALMAR'),
(660, '41', 'SALADOBLANCO'),
(660, '47', 'SABANAS DE SAN ANGEL'),
(660, '5', 'SAN LUIS'),
(660, '54', 'SALAZAR'),
(662, '17', 'SAMANA'),
(662, '25', 'SAN JUAN DE RIO SECO'),
(663, '94', 'MAPIRIPANA'),
(664, '15', 'SAN JOSE DE PARE'),
(664, '5', 'SAN PEDRO'),
(665, '17', 'SAN JOSE'),
(665, '5', 'SAN PEDRO DE URABA'),
(666, '97', 'TARAIRA'),
(667, '13', 'SAN MARTIN DE LOBA'),
(667, '15', 'SAN LUIS DE GACENO'),
(667, '5', 'SAN RAFAEL'),
(668, '41', 'SAN AGUSTIN'),
(669, '68', 'SAN ANDRES'),
(669, '91', 'PUERTO SANTANDER'),
(670, '13', 'SAN PABLO'),
(670, '23', 'SAN ANDRES SOTAVENTO'),
(670, '5', 'SAN ROQUE'),
(670, '54', 'SAN CALIXTO'),
(670, '70', 'SAMPUES'),
(670, '76', 'SAN PEDRO'),
(671, '73', 'SALDAÑA'),
(672, '23', 'SAN ANTERO'),
(673, '13', 'SANTA CATALINA'),
(673, '15', 'SAN MATEO'),
(673, '54', 'SAN CAYETANO'),
(673, '68', 'SAN BENITO'),
(674, '5', 'SAN VICENTE'),
(675, '23', 'SAN BERNARDO DEL VIENTO'),
(675, '47', 'SALAMINA'),
(675, '73', 'SAN ANTONIO'),
(675, '8', 'SANTA LUCIA'),
(676, '15', 'SAN MIGUEL DE SEMA'),
(676, '41', 'SANTA MARIA'),
(678, '23', 'SAN CARLOS'),
(678, '52', 'SAMANIEGO'),
(678, '70', 'SAN BENITO ABAD'),
(678, '73', 'SAN LUIS'),
(679, '5', 'SANTA BARBARA'),
(679, '68', 'SAN GIL'),
(680, '50', 'SAN CARLOS DE GUAROA'),
(680, '54', 'SANTIAGO'),
(681, '15', 'SAN PABLO DE BORBUR'),
(682, '66', 'SANTA ROSA DE CABAL'),
(682, '68', 'SAN JOAQUIN'),
(683, '13', 'SANTA ROSA'),
(683, '50', 'SAN JUAN DE ARAMA'),
(683, '52', 'SANDONA'),
(684, '68', 'SAN JOSE DE MIRANDA'),
(685, '52', 'SAN BERNARDO'),
(685, '8', 'SANTO TOMAS'),
(686, '15', 'SANTANA'),
(686, '23', 'SAN PELAYO'),
(686, '5', 'SANTA ROSA DE OSOS'),
(686, '50', 'SAN JUANITO'),
(686, '68', 'SAN MIGUEL'),
(686, '73', 'SANTA ISABEL'),
(687, '52', 'SAN LORENZO'),
(687, '66', 'SANTUARIO'),
(688, '13', 'SANTA ROSA DEL SUR'),
(689, '50', 'SAN MARTIN'),
(689, '68', 'SAN VICENTE DE CHUCURI'),
(690, '15', 'SANTA MARIA'),
(690, '5', 'SANTO DOMINGO'),
(690, '63', 'SALENTO'),
(692, '47', 'SAN SEBASTIAN DE BUENAVISTA'),
(693, '15', 'SANTA ROSA DE VITERBO'),
(693, '19', 'SAN SEBASTIAN'),
(693, '52', 'SAN PABLO'),
(694, '52', 'SAN PEDRO DE CARTAGO'),
(696, '15', 'SANTA SOFIA'),
(696, '52', 'SANTA BARBARA'),
(697, '5', 'EL SANTUARIO'),
(698, '19', 'SANTANDER DE QUILICHAO'),
(699, '52', 'SANTACRUZ'),
(701, '19', 'SANTA ROSA'),
(702, '70', 'SAN JUAN DE BETULIA'),
(703, '47', 'SAN ZENON'),
(705, '68', 'SANTA BARBARA'),
(707, '47', 'SANTA ANA'),
(708, '70', 'SAN MARCOS'),
(710, '20', 'SAN ALBERTO'),
(711, '50', 'VISTAHERMOSA'),
(713, '70', 'SAN ONOFRE'),
(717, '70', 'SAN PEDRO'),
(718, '25', 'SASAIMA'),
(720, '15', 'SATIVANORTE'),
(720, '47', 'SANTA BARBARA DE PINTO'),
(720, '52', 'SAPUYES'),
(720, '54', 'SARDINATA'),
(720, '68', 'SANTA HELENA DEL OPON'),
(723, '15', 'SATIVASUR'),
(736, '25', 'SESQUILE'),
(736, '5', 'SEGOVIA'),
(736, '76', 'SEVILLA'),
(736, '81', 'SARAVENA'),
(740, '15', 'SIACHOQUE'),
(740, '25', 'SIBATE'),
(742, '70', 'SAN LUIS DE SINCE'),
(743, '19', 'SILVIA'),
(743, '25', 'SILVANIA'),
(743, '54', 'SILOS'),
(744, '13', 'SIMITI'),
(745, '25', 'SIMIJACA'),
(745, '27', 'SIPI'),
(745, '47', 'SITIONUEVO'),
(745, '68', 'SIMACOTA'),
(749, '86', 'SIBUNDOY'),
(750, '20', 'SAN DIEGO'),
(753, '15', 'SOATA'),
(753, '18', 'SAN VICENTE DEL CAGUAN'),
(754, '25', 'SOACHA'),
(755, '15', 'SOCOTA'),
(755, '68', 'SOCORRO'),
(755, '86', 'SAN FRANCISCO'),
(756, '18', 'SOLANO'),
(756, '5', 'SONSON'),
(757, '15', 'SOCHA'),
(757, '86', 'SAN MIGUEL'),
(758, '25', 'SOPO'),
(758, '8', 'SOLEDAD'),
(759, '15', 'SOGAMOSO'),
(760, '13', 'SOPLAVIENTO'),
(760, '19', 'SOTARA'),
(760, '86', 'SANTIAGO'),
(761, '15', 'SOMONDOCO'),
(761, '5', 'SOPETRAN'),
(762, '15', 'SORA'),
(763, '15', 'SOTAQUIRA'),
(764, '15', 'SORACA'),
(769, '25', 'SUBACHOQUE'),
(770, '20', 'SAN MARTIN'),
(770, '41', 'SUAZA'),
(770, '68', 'SUAITA'),
(770, '73', 'SUAREZ'),
(770, '8', 'SUAN'),
(771, '70', 'SUCRE'),
(772, '25', 'SUESCA'),
(773, '68', 'SUCRE'),
(773, '99', 'CUMARIBO'),
(774, '15', 'SUSACON'),
(776, '15', 'SUTAMARCHAN'),
(777, '17', 'SUPIA'),
(777, '25', 'SUPATA'),
(777, '97', 'PAPUNAUA'),
(778, '15', 'SUTATENZA'),
(779, '25', 'SUSA'),
(780, '13', 'TALAIGUA NUEVO'),
(780, '19', 'SUAREZ'),
(780, '68', 'SURATA'),
(781, '25', 'SUTATAUSA'),
(785, '18', 'SOLITA'),
(785, '19', 'SUCRE'),
(785, '25', 'TABIO'),
(786, '52', 'TAMINANGO'),
(787, '20', 'TAMALAMEQUE'),
(787, '27', 'TADO'),
(788, '52', 'TANGUA'),
(789, '5', 'TAMESIS'),
(790, '15', 'TASCO'),
(790, '5', 'TARAZA'),
(791, '41', 'TARQUI'),
(792, '5', 'TARSO'),
(793, '25', 'TAUSA'),
(794, '81', 'TAME'),
(797, '25', 'TENA'),
(797, '41', 'TESALIA'),
(798, '15', 'TENZA'),
(798, '47', 'TENERIFE'),
(798, '91', 'TARAPACA'),
(799, '25', 'TENJO'),
(799, '41', 'TELLO'),
(800, '27', 'UNGUIA'),
(800, '54', 'TEORAMA'),
(801, '41', 'TERUEL'),
(804, '15', 'TIBANA'),
(805, '25', 'TIBACUY'),
(806, '15', 'TIBASOSA'),
(807, '19', 'TIMBIO'),
(807, '23', 'TIERRALTA'),
(807, '25', 'TIBIRITA'),
(807, '41', 'TIMANA'),
(808, '15', 'TINJACA'),
(809, '19', 'TIMBIQUI'),
(809, '5', 'TITIRIBI'),
(810, '13', 'TIQUISIO'),
(810, '15', 'TIPACOQUE'),
(810, '27', 'UNION PANAMERICANA'),
(810, '54', 'TIBU'),
(814, '15', 'TOCA'),
(815, '25', 'TOCAIMA'),
(816, '15', 'TOGsI'),
(817, '25', 'TOCANCIPA'),
(819, '5', 'TOLEDO'),
(820, '15', 'TOPAGA'),
(820, '54', 'TOLEDO'),
(820, '68', 'TONA'),
(820, '70', 'SANTIAGO DE TOLU'),
(821, '19', 'TORIBIO'),
(822, '15', 'TOTA'),
(823, '25', 'TOPAIPI'),
(823, '70', 'TOLU VIEJO'),
(823, '76', 'TORO'),
(824, '19', 'TOTORO'),
(828, '76', 'TRUJILLO'),
(832, '15', 'TUNUNGUA'),
(832, '8', 'TUBARA'),
(834, '76', 'TULUA'),
(835, '15', 'TURMEQUE'),
(835, '52', 'SAN ANDRES DE TUMACO'),
(836, '13', 'TURBACO'),
(837, '15', 'TUTA'),
(837, '5', 'TURBO'),
(838, '13', 'TURBANA'),
(838, '52', 'TUQUERRES'),
(839, '15', 'TUTAZA'),
(839, '25', 'UBALA'),
(841, '25', 'UBAQUE'),
(842, '15', 'UMBITA'),
(842, '5', 'URAMITA'),
(843, '25', 'VILLA DE SAN DIEGO DE UBATE'),
(845, '19', 'VILLA RICA'),
(845, '25', 'UNE'),
(845, '76', 'ULLOA'),
(847, '44', 'URIBIA'),
(847, '5', 'URRAO'),
(849, '8', 'USIACURI'),
(851, '25', 'UTICA'),
(854, '5', 'VALDIVIA'),
(854, '73', 'VALLE DE SAN JUAN'),
(855, '23', 'VALENCIA'),
(855, '44', 'URUMITA'),
(855, '68', 'VALLE DE SAN JOSE'),
(856, '5', 'VALPARAISO'),
(858, '5', 'VEGACHI'),
(860, '18', 'VALPARAISO'),
(861, '15', 'VENTAQUEMADA'),
(861, '5', 'VENECIA'),
(861, '68', 'VELEZ'),
(861, '73', 'VENADILLO'),
(862, '25', 'VERGARA'),
(863, '76', 'VERSALLES'),
(865, '86', 'VALLE DEL GUAMUEZ'),
(867, '17', 'VICTORIA'),
(867, '25', 'VIANI'),
(867, '68', 'VETAS'),
(869, '76', 'VIJES'),
(870, '73', 'VILLAHERMOSA'),
(871, '25', 'VILLAGOMEZ'),
(871, '54', 'VILLA CARO'),
(872, '41', 'VILLAVIEJA'),
(872, '68', 'VILLANUEVA'),
(873, '13', 'VILLANUEVA'),
(873, '17', 'VILLAMARIA'),
(873, '25', 'VILLAPINZON'),
(873, '5', 'VIGIA DEL FUERTE'),
(873, '73', 'VILLARRICA'),
(874, '44', 'VILLANUEVA'),
(874, '54', 'VILLA DEL ROSARIO'),
(875, '25', 'VILLETA'),
(877, '17', 'VITERBO'),
(878, '25', 'VIOTA'),
(879, '15', 'VIRACACHA'),
(883, '94', 'SAN FELIPE'),
(884, '94', 'PUERTO COLOMBIA'),
(885, '25', 'YACOPI'),
(885, '41', 'YAGUARA'),
(885, '5', 'YALI'),
(885, '52', 'YACUANQUER'),
(885, '86', 'VILLAGARZON'),
(885, '94', 'LA GUADALUPE'),
(886, '94', 'CACAHUAL'),
(887, '5', 'YARUMAL'),
(887, '94', 'PANA PANA'),
(888, '94', 'MORICHAL'),
(889, '97', 'YAVARATE'),
(890, '5', 'YOLOMBO'),
(890, '76', 'YOTOCO'),
(892, '76', 'YUMBO'),
(893, '5', 'YONDO'),
(894, '13', 'ZAMBRANO'),
(895, '5', 'ZARAGOZA'),
(895, '68', 'ZAPATOCA'),
(895, '76', 'ZARZAL'),
(897, '15', 'ZETAQUIRA'),
(898, '25', 'ZIPACON'),
(899, '25', 'ZIPAQUIRA'),
(960, '47', 'ZAPAYAN'),
(980, '47', 'ZONA BANANERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaproducto`
--

CREATE TABLE `lineaproducto` (
  `idlpro` int(11) NOT NULL,
  `deslpr` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineaproducto`
--

INSERT INTO `lineaproducto` (`idlpro`, `deslpr`) VALUES
(1, 'Televisores'),
(2, 'Moviles'),
(3, 'Computadores'),
(4, 'Consolas'),
(5, 'Equipos de sonido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idpro` int(11) NOT NULL,
  `nombrePro` varchar(100) DEFAULT NULL,
  `idslpro1` int(11) DEFAULT NULL,
  `despro` varchar(70) DEFAULT NULL,
  `imagenes` varchar(400) DEFAULT NULL,
  `vlrpro` double(12,2) DEFAULT NULL,
  `cancompro1` int(11) DEFAULT NULL,
  `canpro` double(12,2) DEFAULT NULL,
  `idprov1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idpro`, `nombrePro`, `idslpro1`, `despro`, `imagenes`, `vlrpro`, `cancompro1`, `canpro`, `idprov1`) VALUES
(1, 'Televisor OLEDdd', 1, 'TV panasonic pro cine 80 pulgadas', 'http://localhost/proyecto/img2/oled.png', 124124.00, 0, 100.00, 5),
(2, 'TV panasonic 32ES600', 1, 'Tv Led Panasonic 32ï¿½ Smart Tv Internet Hd Usb Hdmi Tdt', 'http://localhost/proyecto/img2/panasonic.jpg', 1214.00, 0, 100.00, 5),
(3, 'TV Samsung Clean View', 1, 'TELEVISOR SAMSUNG LED 43 FULL HD', 'http://localhost/proyecto/img2/samsung tv.jpg', 124.00, 0, 100.00, 1),
(4, 'Samsung plasma vplus', 1, 'tv plasma en 2019', 'http://localhost/proyecto/img2/plasma.jpg', 5112.00, 0, 100.00, 1),
(5, 'TV Sony XY', 1, 'televisor equis', 'http://localhost/proyecto/img2/sony tv.png', 362.00, 0, 100.00, 3),
(6, 'Sony Xperia 6', 6, 'telefono sony con windows phone juasjuas', 'http://localhost/proyecto/img2/xperia.png', 23523.00, 0, 100.00, 3),
(7, 'IPhone 11 pro', 7, 'Aun ni sale. No se haga estafar', 'http://localhost/proyecto/img2/iphone.jpg', 131.00, 0, 100.00, 12),
(8, 'CeluPane', 8, 'celular usado por Chris Pane', 'http://localhost/proyecto/img2/chrispane.png', 1413.00, 0, 100.00, 12),
(9, 'Telefono non-pane x20', 7, 'celular usado por alguien que no es Chris Pane', 'http://localhost/proyecto/img2/no pane.png', 0.00, 0, 100.00, 12),
(10, 'DumbPhone', 9, 'smartphone con deficit de ', 'http://localhost/proyecto/img2/dumb phone.jpg', 5685.00, 0, 100.00, 1),
(11, 'Lenovo PC x900', 11, 'pc gamer lenovo con 99999 de ram pero un core dual del 2007', 'http://localhost/proyecto/img2/lenovo gamer.jpg', 4646.00, 0, 100.00, 11),
(12, 'Lenovo PT 123', 12, 'Computador Portatil Lenovo 8gb Intel Ci7 500gb 14 Pulgadas', 'http://localhost/proyecto/img2/lenovo.jpg', 999.00, 0, 100.00, 11),
(13, 'T-rex PC', 12, 'PC dinosaurio. Sirve como espejo cuando no esta prendido', 'http://localhost/proyecto/img2/trex.jpg', 231231.00, 0, 100.00, 12),
(14, 'MACBOOK x9', 12, 'Apple Macbook Pro 2018 15 16gb I7 2,2-6ghz 555x Ssd 256gb', 'http://localhost/proyecto/img2/macbook.jpg', 235.00, 0, 100.00, 12),
(15, 'PC anon lenovo', 11, 'Computador Lenovo casi nuevo con dos teclas malas pero sirven si le ha', 'http://localhost/proyecto/img2/anon.jpg', 99.00, 0, 100.00, 11),
(16, 'Nintendo Switch', 16, 'Nintendo Switch Neï¿½n Blue And Red + Estuche. Nueva Y Sellada', 'http://localhost/proyecto/img2/switch.jpg', 99999.00, 0, 100.00, 4),
(17, 'Wii U', 17, 'Wii u en 2019 juasjuas', 'http://localhost/proyecto/img2/wiiu.jpg', 0.00, 0, 100.00, 4),
(18, 'XBOX ONE', 16, 'Consola Xbox One S De 1t + 2 Controles.', 'http://localhost/proyecto/img2/xbox.jpg', 12412.00, 0, 100.00, 13),
(19, 'Playstation 4', 18, 'ps4 slim 2 Tb memoria', 'http://localhost/proyecto/img2/ps4.jpg', 124.00, 0, 100.00, 3),
(20, 'Gameboy color', 19, 'Game Boy Retro Color 168 Juegos, Conecta Al Tv', 'http://localhost/proyecto/img2/gameboy.jpg', 1532.00, 0, 100.00, 4),
(21, 'Microcomponente Hoklan', 21, 'Equipo De Sonido Microcomponente Hoklan Modelo 1', 'http://localhost/proyecto/img2/micro.jpg', 999.00, 0, 100.00, 5),
(22, 'Equipo BEP', 23, 'boom boom pow', 'http://localhost/proyecto/img2/boom.jpg', 666.00, 0, 100.00, 3),
(23, 'Coldplay sound maker', 23, 'Este equipo solo reproduce canciones de coldplay', 'http://localhost/proyecto/img2/cold.jpg', 99999.00, 0, 100.00, 5),
(24, 'Mini samsung sound p3', 22, 'minicomponente, pero no tan mini como el interes de ella por ti', 'http://localhost/proyecto/img2/sad.png', 12.00, 0, 100.00, 1),
(25, 'Sony master sound', 21, 'Teatro en casa sony modelo j12x', 'http://localhost/proyecto/img2/teatro.jpg', 6657.00, 0, 100.00, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idprov` int(11) NOT NULL,
  `nomprov` varchar(70) DEFAULT NULL,
  `idciu1` int(11) DEFAULT NULL,
  `dirprov` varchar(40) DEFAULT NULL,
  `telprov` char(15) DEFAULT NULL,
  `emaprov` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idprov`, `nomprov`, `idciu1`, `dirprov`, `telprov`, `emaprov`) VALUES
(1, 'SAMSUNG', 1, 'calle 6', '6627771', 'samsung@gmail.com'),
(2, 'ACER', 2, 'calle 11', '3141235352', 'acer@hotmail.com'),
(3, 'SONY', 4, '8va', '1231234343', 'nocrossplay@gmail.net'),
(4, 'NINTENDO', 21, 'calle 123', '12312312312', 'sansensmash@hotmail.net'),
(5, 'PANASONIC', 2, 'cra 1241', '5456532342', 'quieteconoce@hotmail.com'),
(11, 'LENOVO', 1, 'calle cara', '121412312', 'len@gmail.voc'),
(12, 'APPLE', 1, 'calle robaroba', '666', 'mac@mac.mac'),
(13, 'MICROSOFT', 1, 'casddasd', '124141', 'xboxxxxx@xxxxx.xxxx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idrep` int(11) NOT NULL,
  `idusu2` int(11) DEFAULT NULL,
  `fecrep` varchar(30) DEFAULT NULL,
  `motrep` varchar(80) DEFAULT NULL,
  `desrep` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sublineadeproducto`
--

CREATE TABLE `sublineadeproducto` (
  `idslpro` int(11) NOT NULL,
  `idlpro1` int(11) DEFAULT NULL,
  `desslpro` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sublineadeproducto`
--

INSERT INTO `sublineadeproducto` (`idslpro`, `idlpro1`, `desslpro`) VALUES
(1, 1, 'smart tv'),
(2, 1, 'tv 4k'),
(3, 1, 'tv led'),
(4, 1, 'tv 3D'),
(5, 1, 'tv LCD'),
(6, 2, 'smartphone'),
(7, 2, 'telefono clasico'),
(8, 2, 'telefono low cost'),
(9, 2, 'telefono gama alta'),
(10, 2, 'telefono gama media'),
(11, 3, 'pc gamer'),
(12, 3, 'pc portatil'),
(13, 3, 'pc trabajo'),
(14, 3, 'pc uso educativo'),
(15, 3, 'pc mini portatil'),
(16, 4, 'consola realidad virtual'),
(17, 4, 'consola arcade'),
(18, 4, 'consola portatil'),
(19, 4, 'consola escritorio'),
(20, 4, 'consola interactiva'),
(21, 5, 'teatro en casa'),
(22, 5, 'minicomponente'),
(23, 5, 'equipo ulta'),
(24, 5, 'equipo de sonido de escritorio'),
(25, 5, 'altavoces');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoidentificacion`
--

CREATE TABLE `tipoidentificacion` (
  `idtide` int(11) NOT NULL,
  `destide` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoidentificacion`
--

INSERT INTO `tipoidentificacion` (`idtide`, `destide`) VALUES
(1, 'Cedula de ciudadania'),
(2, 'Cedula de extranjeria'),
(3, 'Pasaporte'),
(4, 'Registro civil'),
(5, 'Tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusu` int(11) NOT NULL,
  `nomusu` varchar(30) DEFAULT NULL,
  `apeusu` varchar(30) DEFAULT NULL,
  `sexusu` varchar(10) DEFAULT NULL,
  `idtide1` int(11) DEFAULT NULL,
  `docusu` varchar(30) DEFAULT NULL,
  `ciunacusu` int(11) DEFAULT NULL,
  `fecnacusu` varchar(30) DEFAULT NULL,
  `telusu` char(10) DEFAULT NULL,
  `ciuresusu` int(11) DEFAULT NULL,
  `dirusu` varchar(200) DEFAULT NULL,
  `emausu` char(200) DEFAULT NULL,
  `conusu` char(30) DEFAULT NULL,
  `rolusu` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusu`, `nomusu`, `apeusu`, `sexusu`, `idtide1`, `docusu`, `ciunacusu`, `fecnacusu`, `telusu`, `ciuresusu`, `dirusu`, `emausu`, `conusu`, `rolusu`) VALUES
(1, 'Dan', 'Drumsy', 'Otro', 1, '1238237162', 1, '2000-08-18', '3217892321', 1, 'P sherman calle wallaby 4-2 sidney', 'daniel@hotmail.com', '123456', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcar`),
  ADD KEY `idpro1` (`idpro1`),
  ADD KEY `idusu1` (`idusu1`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciu`,`iddpto1`);

--
-- Indices de la tabla `lineaproducto`
--
ALTER TABLE `lineaproducto`
  ADD PRIMARY KEY (`idlpro`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idpro`),
  ADD KEY `idslpro1` (`idslpro1`),
  ADD KEY `idprov1` (`idprov1`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idprov`),
  ADD KEY `idciu1` (`idciu1`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idrep`),
  ADD KEY `idusu2` (`idusu2`);

--
-- Indices de la tabla `sublineadeproducto`
--
ALTER TABLE `sublineadeproducto`
  ADD PRIMARY KEY (`idslpro`),
  ADD KEY `idlpro1` (`idlpro1`);

--
-- Indices de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  ADD PRIMARY KEY (`idtide`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusu`),
  ADD KEY `idtide1` (`idtide1`),
  ADD KEY `ciunacusu` (`ciunacusu`),
  ADD KEY `ciuresusu` (`ciuresusu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idcar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `lineaproducto`
--
ALTER TABLE `lineaproducto`
  MODIFY `idlpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idprov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idrep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sublineadeproducto`
--
ALTER TABLE `sublineadeproducto`
  MODIFY `idslpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tipoidentificacion`
--
ALTER TABLE `tipoidentificacion`
  MODIFY `idtide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idpro1`) REFERENCES `producto` (`idpro`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`idusu1`) REFERENCES `usuario` (`idusu`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idslpro1`) REFERENCES `sublineadeproducto` (`idslpro`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idprov1`) REFERENCES `proveedor` (`idprov`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idciu1`) REFERENCES `ciudad` (`idciu`);

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`idusu2`) REFERENCES `usuario` (`idusu`);

--
-- Filtros para la tabla `sublineadeproducto`
--
ALTER TABLE `sublineadeproducto`
  ADD CONSTRAINT `sublineadeproducto_ibfk_1` FOREIGN KEY (`idlpro1`) REFERENCES `lineaproducto` (`idlpro`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idtide1`) REFERENCES `tipoidentificacion` (`idtide`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`ciunacusu`) REFERENCES `ciudad` (`idciu`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`ciuresusu`) REFERENCES `ciudad` (`idciu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
