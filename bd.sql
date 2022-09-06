-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2022 at 10:50 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `G21taller_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int NOT NULL,
  `cod_dewey` int NOT NULL,
  `nombre_categoria` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `cod_dewey`, `nombre_categoria`) VALUES
(153, 0, 'Generalidades'),
(154, 10, 'Bibliografía'),
(155, 20, 'Bibliotecología y ciencias de la información'),
(156, 30, 'Enciclopedias generales'),
(157, 40, ''),
(158, 50, 'Publicaciones en serie'),
(159, 60, 'Organizaciones y museografía'),
(160, 70, 'Periodismo, editoriales, diarios'),
(161, 80, 'Colecciones generales'),
(162, 90, 'Manuscritos y libros raros'),
(163, 100, 'Filosofía y psicología'),
(164, 110, 'Metafísica'),
(165, 120, 'Conocimiento, causa, fin, hombre'),
(166, 130, 'Parapsicología, ocultismo, fenómenos paranormales'),
(167, 140, 'Escuelas filosóficas específicas'),
(168, 150, 'Psicología'),
(169, 160, 'Lógica'),
(170, 170, 'Ética (filosofía moral)'),
(171, 180, 'Filosofía antigua, medieval, oriental'),
(172, 190, 'Filosofía moderna occidental'),
(173, 200, 'Religión'),
(174, 210, 'Filosofía y teoría de la religión'),
(175, 220, 'Biblia'),
(176, 230, 'Teología cristiana'),
(177, 240, 'Moral y prácticas cristianas'),
(178, 250, 'Iglesia local y órdenes religiosas'),
(179, 260, 'Teología social y eclesiástica'),
(180, 270, 'Historia y geografía de la iglesia cristiana'),
(181, 280, 'Credos y sectas de la iglesia cristiana'),
(182, 290, 'Otras religiones'),
(183, 300, 'Ciencias sociales'),
(184, 310, 'Estadística'),
(185, 320, 'Ciencia política'),
(186, 330, 'Economía'),
(187, 340, 'Derecho'),
(188, 350, 'Administración pública y ciencia militar'),
(189, 360, 'Problemas y servicios sociales'),
(190, 370, 'Educación'),
(191, 380, 'Comercio, comunicaciones y transporte'),
(192, 390, 'Costumbres y folklore'),
(193, 400, 'Lenguas'),
(194, 410, 'Lingüística'),
(195, 420, 'Inglés e inglés antiguo'),
(196, 430, 'Lenguas germánicas; alemán'),
(197, 440, 'Lenguas romances; francés'),
(198, 450, 'Italiano, rumano, rético'),
(199, 460, 'Español y portugués'),
(200, 470, 'Lenguas itálicas; latín'),
(201, 480, 'Lenguas helénicas; griego clásico'),
(202, 490, 'Otras lenguas'),
(203, 500, 'Matemáticas y ciencias naturales'),
(204, 510, 'Matemáticas'),
(205, 520, 'Astronomía y ciencias afines'),
(206, 530, 'Física'),
(207, 540, 'Química y ciencias afines'),
(208, 550, 'Geociencias'),
(209, 560, 'Paleontología. paleozoología'),
(210, 570, 'Ciencias biológicas'),
(211, 580, 'Ciencias botánicas'),
(212, 590, 'Ciencias zoológicas'),
(213, 600, 'Tecnología y ciencias aplicadas'),
(214, 610, 'Ciencias médicas'),
(215, 620, 'Ingeniería y operaciones afines'),
(216, 630, 'Agricultura y tecnologías afines'),
(217, 640, 'Economía doméstica'),
(218, 650, 'Servicios administrativos empresariales'),
(219, 660, 'Química industrial'),
(220, 670, 'Manufacturas'),
(221, 680, 'Manufacturas varias'),
(222, 690, 'Construcciones'),
(223, 700, 'Artes'),
(224, 710, 'Urbanismo y arquitectura del paisaje'),
(225, 720, 'Arquitectura'),
(226, 730, 'Artes plásticas; escultura'),
(227, 740, 'Dibujo, artes decorativas'),
(228, 750, 'Pintura y pinturas'),
(229, 760, 'Artes gráficas; grabados'),
(230, 770, 'Fotografía y fotografías'),
(231, 780, 'Música'),
(232, 790, 'Entretenimiento'),
(233, 800, 'Literatura'),
(234, 810, 'Literatura americana en inglés'),
(235, 820, 'Literatura inglesa e inglesa antigua'),
(236, 830, 'Literaturas germánicas'),
(237, 840, 'Literaturas de las lenguas romances'),
(238, 850, 'Literaturas italiana, rumana'),
(239, 860, 'Literaturas española y portuguesa'),
(240, 870, 'Literaturas de las lenguas itálicas'),
(241, 880, 'Literaturas de las lenguas helénicas'),
(242, 890, 'Literaturas de otras lenguas'),
(243, 900, 'Historia y geografía'),
(244, 910, 'Geografía; viajes'),
(245, 920, 'Biografía y genealogía'),
(246, 930, 'Historia del mundo antiguo'),
(247, 940, 'Historia de Europa'),
(248, 950, 'Historia de Asia'),
(249, 960, 'Historia de África'),
(250, 970, 'Historia de América del Norte'),
(251, 980, 'Historia de América del Sur'),
(252, 990, 'Historia de otras regione');

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `id_libro` int NOT NULL,
  `titulo_libro` varchar(100) DEFAULT NULL,
  `autor_libro` varchar(45) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `dewey` varchar(45) DEFAULT NULL,
  `foto_portada` varchar(45) DEFAULT NULL,
  `stock` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libro`
--

INSERT INTO `libro` (`id_libro`, `titulo_libro`, `autor_libro`, `estado`, `isbn`, `dewey`, `foto_portada`, `stock`) VALUES
(1, 'English Student Diccionario Anaya', 'Larousse Editorial', NULL, NULL, '428.2461 E58 2007 c1', NULL, 5),
(2, 'English Student Diccionario Anaya', 'Larousse Editorial', NULL, NULL, '428.2461 E58 2007 c2', NULL, 9),
(3, 'El Rubius El Libro Troll', 'El Rubius', NULL, NULL, '741.50946 R896 2015 c1', NULL, 1),
(4, 'El Rey Solito', 'Estrada Rafael', NULL, NULL, '863 E82 1994 c1', NULL, 6),
(5, 'Seguiremos siendo Amigos', 'Danziger, Paula', NULL, NULL, '813 D199 2014 c1', NULL, 9),
(6, 'El Coleccionista de Noticias', 'Zindel, Paula', NULL, NULL, '813 Z77a.E 2008 c1', NULL, 9),
(7, 'María La Dura. No quiero ser Ninja', 'Cabezas, Esteban', NULL, NULL, 'Ch863 C114 n 2009 c1', NULL, 7),
(8, 'Pupi y el Monstruo de la Vergüenza', 'Menendez-Ponte, María', NULL, NULL, '863 M538 2009 c1', NULL, 8),
(9, 'El Cumpleaños de Pupi', 'Menendez-Ponte, María', NULL, NULL, '863 M538 cu 2009 c1', NULL, 3),
(10, 'Si Tienes un Papá Mago', 'Kesselman, Gabriela', NULL, NULL, 'A863 K42 2011 c1', NULL, 5),
(11, 'A Pasarlo Bien !', 'Milicic, Neva', NULL, NULL, 'Ch863 M644 2011 c1', NULL, 8),
(12, 'No lo permitiré', 'Silva, María Pía', NULL, NULL, 'Ch863 S 586 2013 c1', NULL, 8),
(13, 'Los Casi, Casi Primos', 'Flores, Enriqueta', NULL, NULL, 'Ch 863 F634 2013 c1', NULL, 6),
(14, 'Comilón, Comilón', 'Machado, Ana María', NULL, NULL, 'B869.3 M149 2012 c1', NULL, 3),
(15, 'Amalia, Amelia y Emilia', 'Gómez Cerda, Alfredo', NULL, NULL, '863 G 6331am 2011 c1', NULL, 7),
(16, 'Judy Moody se vuelve Famosa!', 'Mc Donald, Megan', NULL, NULL, '813 M478 2012 c1', NULL, 7),
(17, 'La Sangre del Hijo', 'Quinnell, A.J.', NULL, NULL, '823 Q7 1994 c1', NULL, 6),
(18, 'El ültimo Grumete de la Baquedano', 'Coloane, Francisco', NULL, NULL, 'Ch863 C718 2004 c1', NULL, 7),
(19, 'La Abuelita Aventurera', 'Machado, Ana María', NULL, NULL, 'B869.3 M149av.E 2010 c1', NULL, 7),
(20, 'Igual a mí, distinto a ti', 'Solar, Francisca', NULL, NULL, 'Ch 863 S684 2010 c1', NULL, 5),
(21, 'Cuentos de la Selva', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8 1991 c1', NULL, 4),
(22, 'La Travesía del \"Explorador del Amanecer\"', 'Lewis, C.S.', NULL, NULL, '821 L673 2010 c1', NULL, 4),
(23, 'Ivanhoe', 'Scott, Sir Walter', NULL, NULL, 'E 823 S431 1996 c1', NULL, 7),
(24, 'El Príncipe y el Mendigo', 'Twain, Mark', NULL, NULL, '813 T969 1996 c1', NULL, 6),
(25, 'El Ruiseñor y la Rosa', 'Wilde, Oscar', NULL, NULL, '823 W672 2003 c1', NULL, 7),
(26, 'Historia de una Gaviota y del Gato que…', 'Sepúlveda, Luis', NULL, NULL, 'Ch 863 S479 2016 c1', NULL, 6),
(27, 'Juguemos a Leer', 'Condemarín, Mabel', NULL, NULL, '793.73 C745 2009 c1', NULL, 3),
(28, 'La Ciudad de los Césares', 'Rojas, Manuel', NULL, NULL, 'Ch 863 R741 2007 c1', NULL, 4),
(29, 'Subsole', 'Lillo, Baldomero', NULL, NULL, 'Ch 863 L729 2009 c1', NULL, 1),
(30, 'Manual para Empresas', 'Honey Man, Ryan', NULL, NULL, '658.4012 H772 2015 c.1', NULL, 9),
(31, 'El Niño que se fue en un Arbol', 'Balcelis, Jaqueline', NULL, NULL, 'Ch 863 B174 2004 c1', NULL, 7),
(32, 'Viaje al centro de la Tierra', 'Verne, Julio', NULL, NULL, '843 V531 v 2004 c1', NULL, 6),
(33, 'Robótica', 'Zabala, Gonzalo', NULL, NULL, '629.892 Z12 2007 c1', NULL, 8),
(34, 'Un Capitán de Quince Años', 'Verne, Julio', NULL, NULL, '843 V531c 2006 c1', NULL, 5),
(35, 'El Señor de los Anillos \"Las Dos Torres\"', 'Tolkien, JRR', NULL, NULL, '823 T649 2004 c1', NULL, 2),
(36, 'El Hobbit', 'Tolkien, JRR', NULL, NULL, '823 T649 h 2001 c1', NULL, 3),
(37, 'El Señor de los Anillos \"La Comunidad Del..\"', 'Tolkien, JRR', NULL, NULL, '823 T649 c 1996 c1', NULL, 7),
(38, 'Pregúntale a Alicia', 'Bibliografía Internacional', NULL, NULL, '813 P923 1972 c1', NULL, 9),
(39, 'Las Venas abierta de Amércia Latina', 'Galeano, Eduardo', NULL, NULL, '330.98 G151 2003 c1', NULL, 4),
(40, 'Fundación', 'Asimov, Isaac', NULL, NULL, '813 A832 2003 c1', NULL, 3),
(41, 'Batman Flash v1', '-', NULL, NULL, '741.5973 U58 2017 N°4 c.1', NULL, 3),
(42, 'Batman Flash v2', '-', NULL, NULL, '741.5973 U58 2017 N°3 c1', NULL, 4),
(43, 'Batman Flash v3', '-', NULL, NULL, '741.5973 U58 2017 N°2 c1', NULL, 1),
(44, 'Batman Flash v4', '-', NULL, NULL, '741.5973 U58 2017 N°1 c1', NULL, 2),
(45, 'El Albergue de las Mujeres Tristes', 'Serrano, Marcela', NULL, NULL, 'Ch 863 S487 2009 c1', NULL, 7),
(46, 'Cuentos de la Selva', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8 cu 2006 c1', NULL, 2),
(47, 'Verónica, la niña Biónica', 'Paredes, Mauricio', NULL, NULL, 'Ch 863 P227 2005 c1', NULL, 5),
(48, 'Heidi', 'Spiry, Juana', NULL, NULL, 'S833 S772 1995 c1', NULL, 9),
(49, 'El Gransaber: Matemáticas (Algebra)', 'García Pelayo y Gros, Ramón', NULL, NULL, '510.71 G216a 1986 c1', NULL, 2),
(50, 'Demian', 'Hesse, Hermann', NULL, NULL, '833 H587 2006 c1', NULL, 9),
(51, 'Quique Hache Detective', 'Gómez, Sergio', NULL, NULL, 'Ch 863 G633 2014 c1', NULL, 4),
(52, 'Tengan un nuevo hijo para el Viernes', 'Leman, Kevin', NULL, NULL, '159.922 L547 2010 c1', NULL, 3),
(53, 'Los Jefes, Los Cachorros', 'Vargas Llosa, Mario', NULL, NULL, 'Pe863 V297 2009 c1', NULL, 2),
(54, 'Papelucho en Vacaciones', 'Marcela Paz', NULL, NULL, 'Ch863 P348 1987 c1', NULL, 1),
(55, 'El Extraño caso del Dr. Jekyll y Mr. Hyde', 'Stevenson, Robert L.', NULL, NULL, '823 S847 2016 c1', NULL, 6),
(56, 'Un secreto en mi Colegio', 'Dossetti, Angélica', NULL, NULL, 'Ch 863 D724 2013 c1', NULL, 1),
(57, 'Romeo y Julieta', 'Shakespeare, Williams', NULL, NULL, '822.33 S527 2017 c1', NULL, 3),
(58, 'El Sabueso de los Baskerville', 'Conan Doyle, Arthur', NULL, NULL, '823 D754 2011 c1', NULL, 2),
(59, 'Hombrecitos', 'Alcott, Louisa M.', NULL, NULL, '813 A355 1999 c1', NULL, 1),
(60, 'El Asesinato del Profesor de Matemáticas', 'Sierra i Fabra, Jordi', NULL, NULL, '863 S572 ma 2001 c1', NULL, 1),
(61, 'Sabrina:1 ElMundo:0', 'Rus, Rebeca', NULL, NULL, '821.134 R949 2010 c1', NULL, 7),
(62, 'Ghostgirl', 'Hurley, Tonya', NULL, NULL, '813 H965g 2010 c1', NULL, 5),
(63, 'El Libro de las Tierras Vírgenes', 'Kipling, Rudyard', NULL, NULL, '823 K57 1996 c1', NULL, 3),
(64, 'Sor Angélica Detective', 'Catalán, Henry', NULL, NULL, '843 C357 1997 c1', NULL, 9),
(65, 'La Cama Mágica de Bartolo', 'Paredes, Mauricio', NULL, NULL, 'Ch863 P227 2005 c1', NULL, 9),
(66, 'Historias de un Primer Fin de Semana', 'Schujer, Silvia', NULL, NULL, 'Ar863 S385c 1998 c1', NULL, 9),
(67, 'No pasó nada', 'Skármeta, Antonio', NULL, NULL, 'Ch 863 S626 2005 c1', NULL, 8),
(68, 'Diccionario de Sinónimos y Antónimos', '-', NULL, NULL, '463.1 D545 1996 c1', NULL, 4),
(69, 'Cuentos de Ada', 'Pelayo, Pepe', NULL, NULL, 'Cu863 P381 2006 c1', NULL, 3),
(70, 'La Imitación de Cristo para Niños', 'Ficocelli, Elizabeth', NULL, NULL, '268 F448 2007 c1', NULL, 4),
(71, 'El Maravilloso viaje de Nils Holgersson', 'Lagerlof, Selma', NULL, NULL, '839.73 L174 2001 c1', NULL, 2),
(72, 'Anatomía y Fisiología', 'Parker Anthony, Catherine', NULL, NULL, '611 A628 1970 c1', NULL, 5),
(73, 'Gramática 1', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v7c1', NULL, 2),
(74, 'Gramática 2', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v8c1', NULL, 2),
(75, 'Quimica', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v4c1', NULL, 5),
(76, 'Física', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v3c1', NULL, 2),
(77, 'Matemáticas 1', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v1c1', NULL, 1),
(78, 'Matemáticas 2', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v2c1', NULL, 6),
(79, 'Biología 1', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v5c1', NULL, 2),
(80, 'Biología 2', 'Biblioteca Didáctica', NULL, NULL, '061 .B53 1995 v6c1', NULL, 9),
(81, 'Yatiri y el Hada de las Brumas', 'Ball, Danielle', NULL, NULL, '843 B187 2017 c1', NULL, 4),
(82, 'El Tarrito de Durazno y su Amigo Palmito', 'Quiñones, Verónica', NULL, NULL, '862 Q721 c1', NULL, 2),
(83, 'Amigos en el Bosque', 'Illanes, Ana María', NULL, NULL, 'Ch863 I29 2011 c1', NULL, 3),
(84, 'Historia de Chile', 'Millar, Walterio', NULL, NULL, '372.8983 M645 1988 c1', NULL, 3),
(85, 'Enciclopedía Temática', 'García Pelayo y Gros, Ramón', NULL, NULL, '036.1 G216 1978 c1', NULL, 2),
(86, 'Ana esta Furiosa', 'Nostlinger, Christine', NULL, NULL, 'A833 N898 2013 c1', NULL, 2),
(87, 'La Cabaña en el árbol', 'Cross, Guillian', NULL, NULL, '823 C951 2005 c1', NULL, 5),
(88, 'De Carta en Carta', 'Mechado, Ana Maria', NULL, NULL, 'B 869.3 M149 2004 c1', NULL, 1),
(89, 'El Jardín Secreto', 'Hodgson Burnett, Frances', NULL, NULL, '823 B964 2004 C1', NULL, 5),
(90, 'Las Aventuras de Sherlock Holmes', 'Conan Doyle, Arthur', NULL, NULL, '823 D754 2004', NULL, 3),
(91, 'Las Tres Hijas del Rey y otros cuentos', '-', NULL, NULL, '863 L337 2010 c1', NULL, 2),
(92, 'Un Capitán de 15 Años', 'Verne, Julio', NULL, NULL, '843 V531c.E c1', NULL, 7),
(93, 'Fábulas', 'La Fontaine', NULL, NULL, '398 F134 c1', NULL, 3),
(94, 'La Princesa de los Elfos', 'Dunsany, Lord', NULL, NULL, '823 D926e. la c1', NULL, 3),
(95, 'La Princesa de los Elfos', 'Dunsany, Lord', NULL, NULL, '823 D926e. la c2', NULL, 5),
(96, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c1', NULL, 6),
(97, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c2', NULL, 4),
(98, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c3', NULL, 2),
(99, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c4', NULL, 6),
(100, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c5', NULL, 7),
(101, 'Fábulas', 'De Samaniego, Felix M.', NULL, NULL, '398.2450946 S187 c6', NULL, 7),
(102, 'Fábulas', 'De Iriarte', NULL, NULL, '398.2450946 I68 c1', NULL, 5),
(103, 'Fábulas', 'De Iriarte', NULL, NULL, '398.2450946 I68 c2', NULL, 5),
(104, 'Fábulas', 'De Iriarte', NULL, NULL, '398.2450946 I68 c3', NULL, 7),
(105, 'Fábulas', 'De Iriarte', NULL, NULL, '398.2450946 I68 c4', NULL, 3),
(106, 'La Peste Escarlata', 'London, Jack', NULL, NULL, '813 L847 c1', NULL, 9),
(107, 'La Peste Escarlata', 'London, Jack', NULL, NULL, '813 L847 c2', NULL, 3),
(108, 'Enanos y Gigantes', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 2005 c1', NULL, 3),
(109, 'El Extraño caso del Dr. Jekyll y Mr. Hyde', 'Stevenson, Robert L.', NULL, NULL, '823 S847 2016 c1', NULL, 7),
(110, 'El Lazarillo de Tormes', 'Anónimo', NULL, NULL, '863 L431 2018 c1', NULL, 9),
(111, 'Canción de Navidad', 'Dickens, Charles', NULL, NULL, '823 D548 2014 c1', NULL, 2),
(112, 'Cuentos de la Selva', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8 2006 c2', NULL, 2),
(113, 'Rebelión en la Granja (La Granja de los Animales)', 'Orwell, George', NULL, NULL, '823 O79 2013 c1', NULL, 4),
(114, 'Edipo Rey - Antígona - Electra', 'Sófocles', NULL, NULL, '882 S681 2015 c1', NULL, 5),
(115, 'Romeo y Julieta', 'Shakespeare, Williams', NULL, NULL, '822.33 S527 2016 c1', NULL, 4),
(116, 'Pípeto, el monito rosado', 'Collodí, Carlo', NULL, NULL, '853 C714 c1', NULL, 3),
(117, 'El Jardín Secreto', 'Hodgson Burnett, Frances', NULL, NULL, '823 B964 C1', NULL, 3),
(118, 'Manuscrito hallado en una Botella', 'Allan Poe, Edgard', NULL, NULL, '813 P743m.E c1', NULL, 6),
(119, 'El hundimiento de la casa Usher y otros relatos de Edgar Alan Poe', 'Poe, Edgar Alan', NULL, NULL, '813 P743 h c1', NULL, 1),
(120, 'El hundimiento de la casa Usher y otros relatos de Edgar Alan Poe', 'Poe, Edgar Alan', NULL, NULL, '813 P743 h c2', NULL, 6),
(121, 'El hundimiento de la casa Usher y otros relatos de Edgar Alan Poe', 'Poe, Edgar Alan', NULL, NULL, '813 P743 h c3', NULL, 9),
(122, 'El hundimiento de la casa Usher y otros relatos de Edgar Alan Poe', 'Poe, Edgar Alan', NULL, NULL, '813 P743 h c4', NULL, 9),
(123, 'El hundimiento de la casa Usher y otros relatos de Edgar Alan Poe', 'Poe, Edgar Alan', NULL, NULL, '813 P743 h c5', NULL, 7),
(124, 'El imprevisto caso del chico en la pecera', 'Thompson, Lisa', NULL, NULL, 'A 823 T468 2017 c1', NULL, 9),
(125, 'Fábulas Samaniego', 'Samaniego, Félix', NULL, NULL, '398.2450946 S18721 c1', NULL, 6),
(126, 'Bodas de Sangre', 'García Lorca, Federico', NULL, NULL, '862 G216 2015 c1', NULL, 9),
(127, 'La familia de Pascual Duarte', 'Cela, Camilo José', NULL, NULL, '863 C392 c1', NULL, 8),
(128, 'Fábulas de Esopo, La Fontaine, Samaniego e Iriarte', 'Varios artistas', NULL, NULL, '398.2450946 F134 1992 c1', NULL, 5),
(129, 'Dichos de Campo', 'Huneeus, Pablo', NULL, NULL, '398.961 H934 2017 c1', NULL, 7),
(130, 'Los días de la sombra', 'Bodoc, Liliana', NULL, NULL, 'A863 B668 2008 c1', NULL, 4),
(131, 'El cardenal', 'Carvajal, Kóte; Inzunza, Lucho', NULL, NULL, '282.83092 C331 2017 c1', NULL, 8),
(132, 'Fantástica', 'Varios artitas', NULL, NULL, 'Ch863 F216 2018 c1', NULL, 8),
(133, 'El retrado de Dorian Gray', 'Wilde, Oscar', NULL, NULL, '823 W672 2015 c1', NULL, 5),
(134, 'Crónica de una muerte anunciada', 'García Márquez, Gabriel', NULL, NULL, 'C863 G216 2018 c1', NULL, 2),
(135, 'Viento sur', 'Varios artitas', NULL, NULL, 'Ch863 V422 2016 c1', NULL, 5),
(136, 'Memorias de mis putas tristes', 'García Márquez, Gabriel', NULL, NULL, 'C863 G216 me 2004 c1', NULL, 1),
(137, 'Las aventuras de las cinco semillas de naranja y otros cuentos', 'Conan Doyle, Arthur', NULL, NULL, '823 D754 2008 c1', NULL, 6),
(138, 'El peregrino', 'Uris, León', NULL, NULL, '813 U76 1986 c1', NULL, 1),
(139, 'Cisnes Salvajes', 'Chang, Jung', NULL, NULL, '951.05092 C456c 2005 c1', NULL, 6),
(140, 'La bella durmiente y otros cuentos', 'Grimm, hermanos', NULL, NULL, '843 G861 c1', NULL, 5),
(141, 'El ingenioso hidalgo Don Quijote de la mancha', 'De Cervantes, Miguel', NULL, NULL, '863 C419 2015 c1', NULL, 8),
(142, 'Los días de carbón', 'Cerna Guardia, Rosa', NULL, NULL, 'Pe861 C415 d 2004 c1', NULL, 6),
(143, 'El viejo que leía novelas de amor', 'Sepúlveda, Luis', NULL, NULL, 'Ch863 Se63v 2010 c1', NULL, 6),
(144, 'Peter Pan', 'Barrie, J.M.', NULL, NULL, '813 B275 c1', NULL, 2),
(145, 'Peter Pan', 'Barrie, J.M.', NULL, NULL, '813 B275 c2', NULL, 9),
(146, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '813 B275 ja c2', NULL, 2),
(147, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '814 B275 ja c1', NULL, 9),
(148, 'Marcelino, Pan y Vino', 'Sánchez Silva, José María', NULL, NULL, '863 S211 c1', NULL, 4),
(149, 'Las Aventuras de Tom Sawyer', 'Twain, Mark', NULL, NULL, '813 T969 c1', NULL, 3),
(150, 'Platero y yo', 'Jimenéz, Juan Ramón', NULL, NULL, '861 J61 c1', NULL, 1),
(151, 'Historias de Mareas y Piratas', '-', NULL, NULL, '813 H673 c1', NULL, 4),
(152, 'La Rosa Pretenciosa y otros Cuentos', 'Langer , Ernesto', NULL, NULL, 'Ch863 L276 c1', NULL, 6),
(153, 'Nosotras que nos queremos Tanto', 'Serrano, Marcela', NULL, NULL, 'Ch863 S487n 2003 c1', NULL, 2),
(154, 'Para que no me Olvides', 'Serrano, Marcela', NULL, NULL, 'Ch863 S487 2003 c1', NULL, 1),
(155, 'El Cielo es el Límite', 'Dyer, Dr. Wayne', NULL, NULL, '158.1 D996 1981 c1', NULL, 5),
(156, 'Coronación', 'Donoso, José', NULL, NULL, 'Ch863 D687c 1962 c1', NULL, 5),
(157, 'Desolación', 'Mistral, Gabriela', NULL, NULL, 'Ch861 M678 c1', NULL, 1),
(158, 'Cuentos de la Selva', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8 2010 c1', NULL, 6),
(159, 'Pijama Party', 'Hopkins, Cathy', NULL, NULL, '823 H793 E 2002 c1', NULL, 8),
(160, 'Una Chica Diferente', 'Hopkins, Cathy', NULL, NULL, '823 H793 di 2007 c1', NULL, 5),
(161, 'La Nieta del Señor Linh', 'Claudel, Philippe', NULL, NULL, '843 C615 2013 c1', NULL, 8),
(162, 'Filosofía Clásica', 'Huneeus, Pablo', NULL, NULL, '102 H934 2008 c1', NULL, 6),
(163, 'Midnight', 'Wilson, Jacqueline', NULL, NULL, '823 W746 2004 c1', NULL, 7),
(164, 'Los Casi, Casi Primos', 'Flores, Enriqueta', NULL, NULL, 'Ch 863 F634 2007 c1', NULL, 8),
(165, 'Cuentos Araucanos. La Gente de la Tierra.', 'Morel, Alicia', NULL, NULL, 'Ch863 M839 2006 c1', NULL, 2),
(166, 'Historia de la Humanidad 1. La Prehistoria I. El Hombre Prehistórico', '-', NULL, NULL, '900 H673 1980 T1c1', NULL, 1),
(167, 'Historia de la Humanidad 2. La Prehistoria II. Las Primeras Civilizaciones', '-', NULL, NULL, '900 H673 1980 T2c1', NULL, 1),
(168, 'Historia de la Humanidad 4. Egipto II. El Imperio', '-', NULL, NULL, '900 H673 1980 T3c1', NULL, 8),
(169, 'Almanaque Mundial 2012', '-', NULL, NULL, '056.1 A445 2012 c1', NULL, 3),
(170, 'La Biblia Latinoamericana', '-', NULL, NULL, '220 B582b 2002 c1', NULL, 6),
(171, 'La Gitanilla', 'De Cervantes, Miguel', NULL, NULL, '863 C419 c1', NULL, 2),
(172, 'La Gitanilla', 'De Cervantes, Miguel', NULL, NULL, '863 C419 c2', NULL, 1),
(173, 'Veinte mil leguas de Lenguaje Submarino', 'Verne, Julio', NULL, NULL, '843 V531 ve c1', NULL, 9),
(174, 'Viaje alrededor de la Luna', 'Verne, Julio', NULL, NULL, '844 V531 vi c1', NULL, 5),
(175, 'La Carta Robada y otros cuentos', 'Allan Poe, Edgard', NULL, NULL, '813 P743 c1', NULL, 5),
(176, 'La Guerra de los Mundos', 'Wells, H.G.', NULL, NULL, '823 W454 c1', NULL, 1),
(177, 'Miguel Strogoff', 'Verne, Julio', NULL, NULL, '844 V531 m c1', NULL, 9),
(178, 'La Leyenda del Jinete sin Cabeza', 'Irving, Washington', NULL, NULL, '817.2408 I72 c1', NULL, 3),
(179, 'La Leyenda del Jinete sin Cabeza', 'Irving, Washington', NULL, NULL, '817.2408 I72 c2', NULL, 5),
(180, 'La Calavera que Gritaba y otros cuentos', 'Crawford, Marion', NULL, NULL, '813 C899 c1', NULL, 9),
(181, 'La Calavera que Gritaba y otros cuentos', 'Crawford, Marion', NULL, NULL, '813 C899 c2', NULL, 1),
(182, 'La Calavera que Gritaba y otros cuentos', 'Crawford, Marion', NULL, NULL, '813 C899 c3', NULL, 4),
(183, 'La Calavera que Gritaba y otros cuentos', 'Crawford, Marion', NULL, NULL, '813 C899 c4', NULL, 8),
(184, 'Diccionario Escolar de la Lengua Española', 'Ediciones Occidente S.A.', NULL, NULL, '463 D545 c1', NULL, 2),
(185, 'Viaje alrededor de la Luna', 'Verne, Julio', NULL, NULL, '843 V531 vi c2', NULL, 4),
(186, 'La Reina de los caribes', 'Salgari, Emilio', NULL, NULL, '853 S164 re c1', NULL, 5),
(187, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '814 B275 jar c1', NULL, 4),
(188, 'Los Buscadores de Tesoros', 'Irving, Washington', NULL, NULL, '817.2408 I72 bu c1', NULL, 2),
(189, 'Los Buscadores de Tesoros', 'Irving, Washington', NULL, NULL, '817.2408 I72 bu c2', NULL, 8),
(190, 'Los Buscadores de Tesoros', 'Irving, Washington', NULL, NULL, '817.2408 I72 bu c3', NULL, 8),
(191, 'Los Buscadores de Tesoros', 'Irving, Washington', NULL, NULL, '817.2408 I72 bu c4', NULL, 5),
(192, '¡Espérame, Isabel!', 'Zabala de la Fuente, José', NULL, NULL, 'Ch863 Z12 1997 c1', NULL, 2),
(193, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '814 B275 jar c2', NULL, 3),
(194, 'Sin Familia', 'Malot, Héctor', NULL, NULL, '843 M255 c1', NULL, 7),
(195, 'Tom Sawyer Detective', 'Twain, Mark', NULL, NULL, '813 T969 de c1', NULL, 6),
(196, 'La Hija del Espantapájaros', 'Gripe, María', NULL, NULL, '839.73G868 2007 c1', NULL, 3),
(197, 'La Iliada', 'Homero', NULL, NULL, '883.01 H766 la c1', NULL, 4),
(198, 'La Iliada', 'Homero', NULL, NULL, '883.01 H766 la c2', NULL, 1),
(199, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '814 B275 jar c3', NULL, 1),
(200, 'Los Tigres de la Malasia', 'Salgari, Emilio', NULL, NULL, '853 S164 ti c1', NULL, 2),
(201, 'FUENTE OVEJUNA Y Selección de Poesias', 'de Vega, Lope', NULL, NULL, '862 V422 1984 c1', NULL, 6),
(202, 'El pequeño vampiro en peligro', 'Bodenburrg-Sommer, Angela', NULL, NULL, '833 S697 2005 c1', NULL, 5),
(203, 'La cantante calva Jacobo o la sumision El porvenir está en los huevos', 'Ionesco, Eugene', NULL, NULL, '842 I64 2008', NULL, 6),
(204, 'Rimas y Leyendas', 'Becquer, Gustavo Adolfo', NULL, NULL, '861 B398 2018 c1', NULL, 8),
(205, 'Rimas y Leyendas', 'Becquer, Gustavo Adolfo', NULL, NULL, '861 B398 2015 c1', NULL, 4),
(206, 'Edipo Rey - Antígona - Electra', 'SOFOCLES', NULL, NULL, '882 S681 2011 c1', NULL, 3),
(207, 'Fuenteovejuna', 'de Vega, Lope', NULL, NULL, '862 V422 1995 c1', NULL, 5),
(208, 'Fuenteovejuna', 'de Vega, Lope', NULL, NULL, '862 V422 1995 c2', NULL, 3),
(209, 'Fuenteovejuna', 'de Vega, Lope', NULL, NULL, '862 V422 1995 c3', NULL, 9),
(210, 'Fuenteovejuna', 'de Vega, Lope', NULL, NULL, '862 V422 1995 c4', NULL, 2),
(211, 'Fábulas', 'Iriarte de, Tomas', NULL, NULL, '398.2450946 I68 c5', NULL, 8),
(212, 'Fábulas', 'Iriarte de, Tomas', NULL, NULL, '398.2450946 I68 c6', NULL, 5),
(213, 'Fábulas', 'Iriarte de, Tomas', NULL, NULL, '398.2450946 I68 c7', NULL, 8),
(214, 'Pulgarcita y otros cuentos', 'Andersen, Hans Christian', NULL, NULL, '839.813 A544 c1', NULL, 1),
(215, 'Peter Pan en los Jardines del Reino', 'Barrie, J.M.', NULL, NULL, '814 B275 ja c4', NULL, 8),
(216, 'El sexto hombre', 'Baldacci, David', NULL, NULL, '813 B175l.E 2013 c1', NULL, 8),
(217, 'El perfume', 'Suskind, Patrick', NULL, NULL, '833 S964p.E 2006 c1', NULL, 9),
(218, 'Brother', 'Manriquez P., Javier', NULL, NULL, 'Ch 863M285 2018 c1', NULL, 8),
(219, 'La Niñera', 'Nathan Melissa', NULL, NULL, '821.111 N274 2009 c1', NULL, 4),
(220, 'Aquel verano', 'Dominguez Luis, Cecilia', NULL, NULL, '821.111 D671 2010 c1', NULL, 7),
(221, 'Educar para sentir', 'Sordo, Pilar', NULL, NULL, '155.4S713 2012 c1', NULL, 2),
(222, 'Nuevo testamento', 'Schökel, Luis Alonso', NULL, NULL, '225 B582 2005 c1', NULL, 9),
(223, 'The suitcase kid', 'Wilson, Jacqueline', NULL, NULL, '823 W749s 2006 c1', NULL, 1),
(224, 'Quo vadis?', 'Sienkiewicz, Enrique', NULL, NULL, '891.853 S572 c1', NULL, 3),
(225, 'El mago de oz', 'Baun, Franck', NULL, NULL, '813 B347 2004 c1', NULL, 6),
(226, 'El club de las cigarras', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 2003 c1', NULL, 9),
(227, 'Descubre los números', 'Milne, A / Shepard, E.', NULL, NULL, '372.47 M 659 2011 c1', NULL, 8),
(228, 'Descubre los colores', 'Milne, A / Shepard, E.', NULL, NULL, '741.02 M 659 2011 c1', NULL, 5),
(229, 'Descubre los contrarios', 'Milne, A / Shepard, E.', NULL, NULL, '391 M 659 2011 c1', NULL, 1),
(230, 'Un tesoro dorado', 'Milne, A / Shepard, E.', NULL, NULL, '839.813 M 659 2011 c1', NULL, 6),
(231, 'La noche de la Osa Mayor', 'Milne, A / Shepard, E.', NULL, NULL, '823 M 659 2011 c1', NULL, 7),
(232, 'Escuela de Gamers', 'El Rubius', NULL, NULL, '741.50946 R896 esc 2017 c1', NULL, 1),
(233, 'Cumbres Borrascosas', 'Bronte, Emily', NULL, NULL, '823 B869 2017 c1', NULL, 9),
(234, 'Inferno', 'Brown, Dan', NULL, NULL, '812 B877 2008 c1', NULL, 6),
(235, 'Quiromancia', 'Perfil Creativo Comunicaciones', NULL, NULL, '133.6 Q8 2008 c1', NULL, 3),
(236, 'Grafología', 'Perfil Creativo Comunicaciones', NULL, NULL, '155.282 G736 2008 c1', NULL, 4),
(237, 'Numerología', 'Perfil Creativo Comunicaciones', NULL, NULL, '133.335 N971 2008 c1', NULL, 3),
(238, 'Tarot', 'Perfil Creativo Comunicaciones', NULL, NULL, '133.32424 T191 2008 c1', NULL, 4),
(239, 'Astrología', 'Perfil Creativo Comunicaciones', NULL, NULL, '133.593951 A859 2008 c1', NULL, 7),
(240, 'Interpretando los sueños', 'Perfil Creativo Comunicaciones', NULL, NULL, '154.6303 I61 2008 c1', NULL, 6),
(241, 'Reiki', 'Perfil Creativo Comunicaciones', NULL, NULL, '615.852 R361 2008 c1', NULL, 9),
(242, 'El enigma de las sociedades secretas', 'Grandes Enigmas de la Humanidad', NULL, NULL, '280 E58 2010 c1', NULL, 1),
(243, 'Un secreto en mi Colegio', 'Dossetti, Angélica', NULL, NULL, 'Ch863 D724 2009 c1', NULL, 2),
(244, 'Estudio en Escarlata', 'Conan Doyle, Arthur', NULL, NULL, '823 D754 2010 c1', NULL, 7),
(245, 'Cuentos Chilenos de Ciencia Ficción', 'Rojas, Solar, Villalobos, et al.', NULL, NULL, 'Ch863 C965 2011 c1', NULL, 2),
(246, 'Grandes pechos, amplias caderas', 'Yan, Mo', NULL, NULL, '895.13 M687f.E 2013 c1', NULL, 8),
(247, 'El viejo y el mar', 'Hermingway, Ernest', NULL, NULL, '813 H488 2010 c1', NULL, 4),
(248, 'Los árboles no están solos', 'Villanes, Carlos', NULL, NULL, 'Pe863 V716 2004 c1', NULL, 8),
(249, 'Querido Fantasma', 'Balcells, Jacqueline / Güiraldes, Ana María', NULL, NULL, 'Ch863 B174 2004 c1', NULL, 6),
(250, 'Ternura', 'Mistral, Gabriela', NULL, NULL, 'Ch861 M678 1989 c1', NULL, 6),
(251, 'El caballero de la armadura oxidada', 'Fisher, Robert', NULL, NULL, '813 F535 2001 c1', NULL, 1),
(252, 'Seducción', 'Quick, Amanda', NULL, NULL, '813 Q6 2001 c1', NULL, 6),
(253, 'Un Viaje Inesperado', 'Dossetti, Angélica', NULL, NULL, 'Ch863 D724 2016 c1', NULL, 9),
(254, 'Charlie y el gran ascensor de cristal', 'Dahl, Roald', NULL, NULL, '823 D131 2013 c1', NULL, 1),
(255, 'Mujercitas', 'Alcott, Louisa M.', NULL, NULL, '813 A355 2012 c1', NULL, 3),
(256, 'La última lección', 'Paush, Randy / Zascow, Jeffrey', NULL, NULL, '004.092 P334l.E 2015 c1', NULL, 1),
(257, 'Nuestras Sombras', 'Budge, María Teresa', NULL, NULL, 'Ch863 B927 1997 c1', NULL, 4),
(258, 'La princesa que creía en los cuentos de hadas', 'Grad, Marcia', NULL, NULL, '813 G732 2003 c1', NULL, 8),
(259, 'La contadora de películas', 'Rivera Letelier, Hernán', NULL, NULL, 'Ch863 R621co 2012 c1', NULL, 3),
(260, 'Frankenstein', 'Sheley, Mary W.', NULL, NULL, '823 S545 2018 c1', NULL, 7),
(261, 'El Asesinato del Profesor de Matemáticas', 'Sierra i Fabra, Jordi', NULL, NULL, '863 S572a 2001 c1', NULL, 9),
(262, 'Bajo la misma estrella', 'Green, John', NULL, NULL, '813 G795 2018 c1', NULL, 5),
(263, 'Hush, Hush', 'Fritzpatrick, Becca', NULL, NULL, '813 F559 2010 c1', NULL, 4),
(264, 'Yerma', 'Herederos de Federico García Lorca', NULL, NULL, '862 G216 1994 c1', NULL, 8),
(265, 'Las drogas, de los orígenes a la prohibición', 'Escohotado, Antonio', NULL, NULL, '362.29 E74d 1994 c1', NULL, 9),
(266, 'El mito nacionalista', 'Savater, Fernando', NULL, NULL, '324.28303 S266 1996 c1', NULL, 9),
(267, 'El chupacabras de Pirque', 'Pelayo, Pepe', NULL, NULL, 'Cu863 P381 1996 c1', NULL, 1),
(268, 'The Happy Prince', 'Wilde, Oscar', NULL, NULL, '823 W672 2008 c1', NULL, 3),
(269, 'Proceso a la muerte', 'Lazarus, Richard', NULL, NULL, '612.67 L431 c1', NULL, 5),
(270, 'Mulan', 'Hardy - Gould, Janet', NULL, NULL, '813 M954u 2013 c1', NULL, 4),
(271, 'La dictadura', 'Baradit, Jorge', NULL, NULL, '983.065 B223 2018 c1', NULL, 5),
(272, 'El asma', 'Ayres, Jon', NULL, NULL, '616.238 A985 1999 c1', NULL, 6),
(273, 'Crónica de una muerte anunciada', 'García Márquez, Gabriel', NULL, NULL, 'C863 G216 1992 c1', NULL, 4),
(274, 'La enfermedad como camino', 'Dethlefsen, Thorwald', NULL, NULL, '616 D479 2015 c1', NULL, 9),
(275, 'Leyendas y tradiciones penquistas', 'Campos Harriet, Fernando', NULL, NULL, '398.23283343 C198 2003 c1', NULL, 5),
(276, 'La tumba de Lenin', 'Remnick, David', NULL, NULL, '947.0854 R388 c1', NULL, 1),
(277, 'Sub - Sole', 'Lillo, Baldomero', NULL, NULL, 'Ch863L729 1997 c1', NULL, 4),
(278, 'Pimpinela Escarlata', 'De Orczy, Baronesa', NULL, NULL, '823.8O64 2006 c1', NULL, 9),
(279, 'Rebelión en la Granja (La Granja de los Animales)', 'Orwell, George', NULL, NULL, '823O79 2006 c1', NULL, 7),
(280, 'Las Aventuras de Sherlock Holmes', 'Conan Doyle, Arthur', NULL, NULL, '823D754 2008 c1', NULL, 5),
(281, 'La salud por el placer', 'Pearsall, Paul', NULL, NULL, '616.89 P361 c1', NULL, 3),
(282, 'Remedios para el desamor', 'Rojas, Enrique', NULL, NULL, '155.64 R741 2000 c1', NULL, 9),
(283, 'El pequeño Nicolás', 'Sempé, Goscinny', NULL, NULL, '843G676 2003 c1', NULL, 1),
(284, 'Goldilocks', 'The book company publishing Pty Ltd', NULL, NULL, '813 R826g E2012 c1', NULL, 3),
(285, 'Little red ridding hood', 'The book company publishing Pty Ltd', NULL, NULL, '813 L778 E 2012 c1', NULL, 2),
(286, 'Intensamente', 'Parragon Books Ltd', NULL, NULL, '823 I61 2015 c1', NULL, 3),
(287, 'Finding Nemo', 'Marsoli, Lisa Ann', NULL, NULL, '813 M373 E 2011 c1', NULL, 6),
(288, 'Manualidades divertidas', 'Mundicrom', NULL, NULL, '736.9 M294 2015 c1', NULL, 4),
(289, 'Flip \'n\' fun, Crazy animals', 'The book company publishing Pty Ltd', NULL, NULL, '813 F626 2013 c1', NULL, 2),
(290, 'Mis primeras aventuras, Tomo 7. En navidad', 'Gaudrat, Marie-Agnes', NULL, NULL, '843 G267 m E 2006 T7 c1', NULL, 8),
(291, 'Let´s read! Level 1. Tiny learns to fish!', 'The Five Mile Press Pty Ltd', NULL, NULL, '425 L649 2013 c1', NULL, 4),
(292, 'The kooky 3D Kids\' baking book', 'Hardie Grant Books', NULL, NULL, '641.5123 K82 2011', NULL, 3),
(293, 'La bella durmiente y otros', 'Bibliográfica internacional', NULL, NULL, '843 B435 2002 c1', NULL, 4),
(294, 'Tarzán rey de la selva', 'Rice Burroughs, Edgar', NULL, NULL, '741.527 R495 2018 c1', NULL, 3),
(295, 'Alguien me sigue', 'Santillana del Pacífico S.A. de Ediciones', NULL, NULL, '863 V161 2008 c1', NULL, 9),
(296, 'Sleeping Beauty', 'Parragon', NULL, NULL, '428 S674 2010 c1', NULL, 2),
(297, 'Toy Story 3', 'Peymani, Christine', NULL, NULL, '813 P515t 2011 c1', NULL, 9),
(298, '101 Dalmatians', 'Parragon', NULL, '9781234567897', '813 D148 2010 c1', NULL, 9),
(299, 'Toy Story', 'Parragon', NULL, NULL, '813 P515 2010 c1', NULL, 1),
(300, 'Monsters, Inc.', 'Hapka, Cathy', NULL, NULL, '813 H252 2006 c1', NULL, 5),
(301, 'PeterPan', 'Parragon', NULL, NULL, '813 P478 2010 c1', NULL, 1),
(302, 'Bambi', 'Parragon', NULL, NULL, '813 B199 2010 c1', NULL, 2),
(303, 'Beauty and the beast', 'Parragon', NULL, NULL, '813 B384 2010 c1', NULL, 4),
(304, 'The lion king', 'Parragon', NULL, NULL, '813 L763 2010 c1', NULL, 6),
(305, 'Mi biblia', 'Centro iberoamericano de editores paulinos', NULL, NULL, '220 B582 m 2007 c1', NULL, 8),
(306, 'Bambi. Mini clásicos.', 'Ediciones Saldaña S.A.', NULL, NULL, '813 B199 b c1', NULL, 1),
(307, 'El libro de la selva. Mini clásicos.', 'Ediciones Saldaña S.A.', NULL, NULL, '813 K57 m c1', NULL, 2),
(308, 'Los tres cerditos. Mini clásicos.', 'Ediciones Saldaña S.A.', NULL, NULL, '863 T796 c1', NULL, 6),
(309, 'El patito feo. Mini clásicos.', 'Ediciones Saldaña S.A.', NULL, NULL, '839.813 A544 c1', NULL, 4),
(310, 'Colección Princesas. Un tesoro de cuentos.', 'Silver Dolphin en español', NULL, NULL, '863 C965 2010 c1', NULL, 9),
(311, 'Los duendes y el zapatero', 'Editorial Libsa', NULL, NULL, '833 G864 2011 c1', NULL, 7),
(312, 'Harry and the dinosaurs. First sleepover', 'Whybrow, Ian; Reynolds, Adrian', NULL, NULL, '813 W629 f 2010 c1', NULL, 9),
(313, 'Harry and the dinosaurs. United', 'Whybrow, Ian; Reynolds, Adrian', NULL, NULL, '813 W629 u 2009 c1', NULL, 5),
(314, 'Los cuentos de Hans Christian Andersen', 'Parragon Books Ltd', NULL, NULL, '839.813 A544 2015 c1', NULL, 5),
(315, 'Guía para padres. Los límites enseñan. Los límites y las rabietas', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 ra 2012 c1', NULL, 9),
(316, 'Guía para padres. Los límites enseñan. Los límites en casa', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 ca 2012 c1', NULL, 3),
(317, 'Guía para padres. Los límites enseñan. Los límites y el estrés familiar', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 es 2012 c1', NULL, 6),
(318, 'Guía para padres. Los límites enseñan. Los límites y las peleas', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 pe 2012 c1', NULL, 9),
(319, 'Guía para padres. Los límites enseñan. Los límites en tiempos difíciles', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 t 2012 c1', NULL, 2),
(320, 'Guía para padres. Los límites enseñan. Los límites y la tecnología', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 te 2012 c1', NULL, 1),
(321, 'Guía para padres. Los límites enseñan. Los límites en la escuela', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 esc 2012 c1', NULL, 8),
(322, 'Guía para padres. Los límites enseñan. Los límites de vacaciones', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 va2012 c1', NULL, 9),
(323, 'Guía para padres. Los límites enseñan. Los límites y las penitencias', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 pen 2012 c1', NULL, 3),
(324, 'Guía para padres. Los límites enseñan. Los límites y las obligaciones', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 o 2012 c1', NULL, 5),
(325, 'Guía para padres. Los límites enseñan. Los límites y la sexualidad', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 s 2012 c1', NULL, 5),
(326, 'Guía para padres. Los límites enseñan. Los límites y las mentiras', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 m 2012 c1', NULL, 4),
(327, 'Guía para padres. Los límites enseñan. Los límites y el consumo', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 co 2012 c1', NULL, 1),
(328, 'Guía para padres. Los límites enseñan. Los límites y los acuerdos', 'Trenchi, Natalia', NULL, NULL, '649.1 T793 a 2012 c1', NULL, 3),
(329, 'Historia Personal del \"Boom\"', 'Donoso, José', NULL, NULL, 'H860.9004 D687 1987 c1', NULL, 4),
(330, 'Lina y su sombra', 'Castro, Oscar', NULL, NULL, 'Ch863 C355 1992 c1', NULL, 1),
(331, 'La Muerte viene hacia el Arzobispo', 'Cather, Willa', NULL, NULL, '813 C363 1989 c1', NULL, 1),
(332, 'Madame Bovary', 'Flaubert, Gustave', NULL, NULL, '843 F587 1993 c1', NULL, 3),
(333, 'Hijos', 'Buck, Pearl S.', NULL, NULL, '813 B922 1989 c1', NULL, 1),
(334, 'El Fin de la Aventura', 'Greene, Graham', NULL, NULL, '823G799 1992 c1', NULL, 6),
(335, 'Los Silencios del Coronel Bramble', 'Maurois, Andre', NULL, NULL, '844 M457 1993 c1', NULL, 6),
(336, 'El Caso de las Trompetas Celestiales', 'Burt, Michael', NULL, NULL, '823 B973 1992 c1', NULL, 4),
(337, 'Los Pasos Perdidos', 'Carpentier, Alejo', NULL, NULL, 'Cu863 C297 1992 c1', NULL, 1),
(338, 'Los Pasos Perdidos', 'Carpentier, Alejo', NULL, NULL, 'Cu863 C297 1992 c2', NULL, 3),
(339, 'El Museo de Cera', 'Edwards, Jorge', NULL, NULL, 'Ch863 E26 1992 c1', NULL, 2),
(340, 'La Condición Humana', 'Malraux, Andre', NULL, NULL, '843 M259 1990 c1', NULL, 1),
(341, 'Dulces Chilenos', 'Blanco, Guillermo', NULL, NULL, 'Ch863 B641 1993 c1', NULL, 9),
(342, 'El Ramo de Mirto (Wombwell)', 'Jensen, Johannes V.', NULL, NULL, '839.813 J54 1990 c1', NULL, 3),
(343, 'El Reino de Este Mundo', 'Carpentier, Alejo', NULL, NULL, 'Cu863 C297 1993 c1', NULL, 8),
(344, 'El Avaro. Las Preciosas Ridículas', 'Moliére', NULL, NULL, '842 M721 1991 c1', NULL, 2),
(345, 'El Revés de la Trama', 'Greene, Graham', NULL, NULL, '823 G799 1991 c1', NULL, 3),
(346, 'El Poder y la Gloria', 'Greene, Graham', NULL, NULL, '823 G799 1992 c1', NULL, 9),
(347, 'El Pan de los Años Mozos', 'Boll, Heinrich', NULL, NULL, '833 B691 1992 c1', NULL, 7),
(348, 'La Muerte de Artemio Cruz', 'Fuentes, Carlos', NULL, NULL, 'M863 F954 1993 c1', NULL, 6),
(349, 'Un Crimen entre Psicólogos', 'Pérez de Arce, Camilo', NULL, NULL, 'Ch863 P438 1990 c1', NULL, 3),
(350, 'Gente de Dublin (Dubliners)', 'Joyce, James', NULL, NULL, 'I823 J89 1988 c1', NULL, 4),
(351, 'La Historia de San Michele', 'Munthe, Axel', NULL, NULL, '926.109485 M971 1987 c1', NULL, 2),
(352, 'Papá Goriot', 'Balzac, Honoré de', NULL, NULL, '843 B198 1989 c1', NULL, 6),
(353, 'Los Papeles de Aspern', 'James, Henry', NULL, NULL, '813 J27 1989 c1', NULL, 5),
(354, 'Los Árboles Azules', 'Emmerich, Fernando', NULL, NULL, 'Ch863 E54 1988 c1', NULL, 9),
(355, 'La Rebelión de las Masas', 'Ortega y Gasset, José', NULL, NULL, '901 O77 1989 c1', NULL, 1),
(356, 'La Luz que se Extingue', 'Kipling, Rudyard', NULL, NULL, '823 K57 1994 c1', NULL, 5),
(357, 'El Tercer Hombre', 'Greene, Graham', NULL, NULL, '823 G799 1993 c1', NULL, 2),
(358, 'La Gran Gilly Hopkins', 'Paterson, Katherine', NULL, NULL, '813 P296 2002 c1', NULL, 4),
(359, 'Vamos más lento, por favor!', 'Milicic, Neva', NULL, NULL, 'Ch863 M644v 2009 c1', NULL, 5),
(360, 'Cuentos de los Derechos del Niño', 'Schkolnik, Saúl', NULL, NULL, 'Ch863 S337 2010 c1', NULL, 5),
(361, 'Cuando el Viento Desapareció y Mac, el Microbio Desconocido', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 2012 c1', NULL, 8),
(362, 'El Ruiseñor y la Rosa y Otros Cuentos', 'Wilde, Oscar', NULL, NULL, '823 W672 2010 c1', NULL, 6),
(363, 'Las Aventuras de Totora', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 1992 c1', NULL, 6),
(364, 'Terror Bajo Tierra', 'Balcells, Jacqueline', NULL, NULL, 'Ch863 B174 2009 c1', NULL, 4),
(365, 'Chile Contado y Cantado', 'Pérez, Floridor', NULL, NULL, 'Ch868 C537 1981 c1', NULL, 8),
(366, 'Mac, el Microbio Desconocido', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 2012 c1', NULL, 3),
(367, 'The Prince Who Walked with Lions', 'Laird, Elizabeth', NULL, NULL, 'NZ823 L188p 2012 c1', NULL, 9),
(368, 'La Poesía ha caído en Desgracia', 'Mestre, Juan Carlos', NULL, NULL, 'Ch861 M586 1992 c1', NULL, 9),
(369, 'Assassin´s Creed. Revelaciones.', 'Bowden, Oliver', NULL, NULL, '821.111 B784 2011 c1', NULL, 9),
(370, 'El Lobo Estepario', 'Hesse, Hermann', NULL, NULL, '833 H587 c1', NULL, 9),
(371, 'El Enfermo Imaginario', 'Moliere', NULL, NULL, '842 M721 2012 c1', NULL, 6),
(372, 'El Enfermo Imaginario', 'Moliere', NULL, NULL, '842 M721 2012 c2', NULL, 4),
(373, 'Los Dedales de Oro y Otros Cuentos', 'Diéguez, Violeta', NULL, NULL, 'Ch863 D559 1998 c1', NULL, 3),
(374, 'Un Viaje Inesperado', 'Dossetti, Angélica', NULL, NULL, 'Ch863 D724 2015 c1', NULL, 2),
(375, 'La Fiebre', 'Caucao, Jaime', NULL, NULL, 'Ch863 C371 2010 c1', NULL, 1),
(376, 'Cuentos Mágicos del Sur del Mundo', 'Hidalgo, Héctor', NULL, NULL, 'Ch863 H632 2009 c1', NULL, 5),
(377, 'Subterra Carlitos', 'Lillo, Baldomero', NULL, NULL, 'Ch863 L729 2016 c1', NULL, 3),
(378, 'La Odisea', 'Homero', NULL, NULL, '883.01 H766 2016 c1', NULL, 1),
(379, 'Ami, El Niño de las Estrellas', 'Barrios, Enrique', NULL, NULL, 'Ch863 B276 2005 c1', NULL, 5),
(380, 'El Año de la Ballena', 'De la Parra, Marco Antonio', NULL, NULL, 'Ch863 P259 2012 c1', NULL, 1),
(381, 'Nuevo Libro del Embarazo y Nacimiento', 'Stoppard, Dra. Miriam', NULL, NULL, '618.2 S883 1985 c1', NULL, 9),
(382, 'Me lees un Cuento ?', 'Anónimo', NULL, NULL, '087.5 P976 2006 c1', NULL, 5),
(383, 'La Cultura Huachaca o El Aporte de la Televisión', 'Huneeus, Pablo', NULL, NULL, '302.23450983 H934 1981 c1', NULL, 6),
(384, 'Innovación Pública', 'Sánchez, Carmina', NULL, NULL, '352.37 S194 2013 c1', NULL, 8),
(385, 'Skellig', 'Almond, David', NULL, NULL, '823.92 A452 2013 c1', NULL, 1),
(386, 'El Diario de Ana Frank', 'Ana Frank', NULL, NULL, '920.72 F828 1984 c1', NULL, 7),
(387, 'Seguiremos siendo Amigos', 'Danziger, Paula', NULL, NULL, '813 D199 1999 c1', NULL, 7),
(388, 'Azabache', 'Sewell, Anna', NULL, NULL, '823 S516 2011 c1', NULL, 1),
(389, 'The Pregnancy Project', 'Rodriguez, Gaby', NULL, NULL, '301.185 R696 2012 c1', NULL, 4),
(390, 'Matilda', 'Dahl, Roald', NULL, NULL, '823 D131 1988 c1', NULL, 9),
(391, 'Pulsaciones', 'Ruescas, Javier', NULL, NULL, '863 R921 2012 c1', NULL, 2),
(392, 'Huckleberry Finn', 'Twain, Mark', NULL, NULL, '813 T969 2007 c1', NULL, 2),
(393, 'Colombina y el Pez Azul', 'Truffello, Patricia', NULL, NULL, 'Ch 863 TB 2008 c1', NULL, 4),
(394, 'La Gran Esperanza', 'De White, Elena G.', NULL, NULL, '234.25 W583 2011 c1', NULL, 2),
(395, 'Billy Elliot', 'Hall, Lee', NULL, NULL, '823 L478 2001 c1', NULL, 1),
(396, 'Don Quijote de la Mancha', 'De Cervantes, Miguel', NULL, NULL, '863 C419 1996 c1', NULL, 6),
(397, 'Cuentos Extraños para Niños Peculiares', 'Riggs, Ransom', NULL, NULL, '813 R569 2016 c1', NULL, 8),
(398, 'Yo, Simio', 'Gómez, Sergio', NULL, NULL, 'Ch863 G633 2008 c1', NULL, 4),
(399, 'Hickory Dickory Dock', 'Anónimo', NULL, NULL, '823 S613h 2011 c1', NULL, 6),
(400, 'Diccionario de Sinónimos y Antónimos', 'Ghio', NULL, NULL, '463.1 D545 c1', NULL, 7),
(401, 'Pasos hacia la Vida', 'De White, Elena G.', NULL, NULL, '232.904 W583 c1', NULL, 6),
(402, 'Hombrecitos', 'Alcott, Louisa M.', NULL, NULL, '813 A355 c1', NULL, 2),
(403, 'Intercambio con un Inglés', 'Nostlinger, Christine', NULL, NULL, 'A833 N898 2016 c1', NULL, 7),
(404, 'Cómo son y cómo funcionan casi todas las cosas', '-', NULL, NULL, '062 R286 c1', NULL, 2),
(405, 'Libro de la Vida. Volumen 1.', '-', NULL, NULL, '220.95 L697 v1 c1', NULL, 9),
(406, 'Libro de la Vida. Volumen 2.', '-', NULL, NULL, '220.95 L697 v2 c1', NULL, 1),
(407, 'Libro de la Vida. Volumen 3.', '-', NULL, NULL, '220.95 L697 v3 c1', NULL, 4),
(408, 'Libro de la Vida. Volumen 4.', '-', NULL, NULL, '220.95 L697 v4 c1', NULL, 6),
(409, 'Libro de la Vida. Volumen 5.', '-', NULL, NULL, '220.95 L697 v5 c1', NULL, 2),
(410, 'Libro de la Vida. Volumen 6.', '-', NULL, NULL, '220.95 L697 v6 c1', NULL, 1),
(411, 'Geografía de Europa', 'Kaplan C., Oscar', NULL, NULL, '914 K172 1981 c1', NULL, 7),
(412, 'Manual de Educación Parvularia. Tomo 1. Segundo Nivel - Transición.', 'Plasencio P., Carlos E.', NULL, NULL, '372.21 P697 1992 t1 c1', NULL, 4),
(413, 'Manual de Educación Parvularia. Tomo 2. Segundo Nivel - Transición.', 'Plasencio P., Carlos E.', NULL, NULL, '372.21 P697 1992 t2 c1', NULL, 1),
(414, 'Niebla', 'de Unamuno, Miguel', NULL, NULL, '863 U54 1979 c1', NULL, 7),
(415, 'Oliver Twist', 'Dickens Charles', NULL, NULL, '823 D548 c1', NULL, 6),
(416, 'Niebla', 'de Unamuno, Miguel', NULL, NULL, '863 U54 1998 c1', NULL, 8),
(417, 'Un dia en la vida de Quidora, joven mapuche', 'Balcells jacqueline y Guiraldes Ana Maria', NULL, NULL, 'Ch863B174 1993 c1', NULL, 3),
(418, 'Un dia en la vida de Quidora, joven mapuche', 'Balcells jacqueline y Guiraldes Ana Maria', NULL, NULL, 'Ch863B174 1993 c2', NULL, 9),
(419, 'Un dia en la vida de Quidora, joven mapuche', 'Balcells jacqueline y Guiraldes Ana Maria', NULL, NULL, 'Ch863B174 1993 c3', NULL, 8),
(420, 'Robinson Crusoe', 'Defoe, Daniel', NULL, NULL, '823 D314 1995 c1', NULL, 4),
(421, 'Robinson Crusoe', 'Defoe, Daniel', NULL, NULL, '823 D314 1995 c2', NULL, 6),
(422, 'Robinson Crusoe', 'Defoe, Daniel', NULL, NULL, '823 D314 1995 c3', NULL, 8),
(423, 'Robinson Crusoe', 'Defoe, Daniel', NULL, NULL, '823D314 1994 c1', NULL, 5),
(424, 'La Hoja Roja', 'Delibes, Miguel', NULL, NULL, '863 D353h 1971 c1', NULL, 7),
(425, 'La Hoja Roja', 'Delibes, Miguel', NULL, NULL, '863 D353h 1971 c2', NULL, 1),
(426, 'Hombrecitos', 'Alcott, M. Louisa', NULL, NULL, '813 A355 c1', NULL, 9),
(427, 'LA VORAGINE', 'Rivera, Jose Eustasio', NULL, NULL, 'Co863.3 R621v 1981 c1', NULL, 9),
(428, 'Los hijos del capitan Grant', 'Verne, Julio', NULL, NULL, '843 V531e.E 1993 c1', NULL, 9),
(429, 'Platero y yo', 'Jimenez, Juan Ramon', NULL, NULL, '861 J61 1979 c1', NULL, 5),
(430, 'Los jefes Los cachorros', 'Vargas LLosa, Mario', NULL, NULL, 'Pe 863 V297 c1', NULL, 9),
(431, 'Nuevas Cronicas', 'Bello, Joaquin Eduardo', NULL, NULL, 'Ch868 E26 1966 c1', NULL, 3),
(432, 'Guaso de Cepa y Halda a de Rimas', 'Puentes GILL, Enrique', NULL, NULL, 'Ch861 P977 1964 c1', NULL, 7),
(433, 'En las Montañas Alucinantes', 'Lovecraft, Howard P.', NULL, NULL, '813 L911 2003 c1', NULL, 5),
(434, 'Sucedio una Noche', 'Ambler, Eric', NULL, NULL, '823 A493 1959', NULL, 2),
(435, 'LA METAMORFOSIS', 'Kafka, Franz', NULL, NULL, 'A 833 K11 1981', NULL, 6),
(436, 'Niño de Lluvia y otros relatos', 'Subercaseaux, Benjamin', NULL, NULL, 'Ch863 S9 c1', NULL, 4),
(437, 'Jerry de las islas', 'London, Jack', NULL, NULL, '813L84721', NULL, 2),
(438, 'Historias De Risas y Lagrimas', 'Varas Jose Miguel', NULL, NULL, 'Ch 863.008 H673 c1', NULL, 7),
(439, 'La Iliada', 'Homero', NULL, NULL, '883.01 H766 c1', NULL, 3),
(440, 'Juventud, egolatria', 'Baroja, Pio', NULL, NULL, '868.08 B264 1977 c1', NULL, 9),
(441, 'Hombrecitos', 'Alcott, Louse M.', NULL, NULL, '813 A355 1993 c1', NULL, 9),
(442, '¡Hatusime!', 'Danke, Jacobo', NULL, NULL, 'Ch863 D187 1993 c1', NULL, 1),
(443, 'Romeo y Julieta', 'Shakespeare, William', NULL, NULL, '822.33 S527 r', NULL, 2),
(444, 'La Ruta Literaria', 'Escuela Jorge Rojas Miranda', NULL, NULL, 'Ch863T14721', NULL, 8),
(445, 'Historias de ARISTOFANES', '-', NULL, NULL, '882 A716h.E 1982 c1', NULL, 7),
(446, 'Las Aventuras de Tom Sawyer', 'Twain, Mark', NULL, NULL, '813 T969 2003 c1', NULL, 3),
(447, 'El caballero de la armadura oxidada', 'Fisher, Robert', NULL, NULL, '813 F535 2011 c1', NULL, 1),
(448, 'El caballero de la armadura oxidada', 'Fisher, Robert', NULL, NULL, '813 F535 2003 c1', NULL, 4),
(449, 'Subsole', 'Lillo, Baldomero', NULL, NULL, 'Ch 863 L729 2000 c1', NULL, 7),
(450, 'Papelucho y el Marciano', 'Marcela Paz', NULL, NULL, 'Ch863 P348 1990 c1', NULL, 3),
(451, 'Un Capitán de Quince Años', 'Verne, Julio', NULL, NULL, '843 V531c 1997 c1', NULL, 5),
(452, 'Mujercitas', 'Alcott, Louisa M.', NULL, NULL, '813 A355 1997 c1', NULL, 7),
(453, 'Mac, el Microbio Desconocido', 'Del Solar, Hernán', NULL, NULL, 'Ch863 S684 2002 c1', NULL, 1),
(454, 'Judy Moody esta de mal humor, de muy mal', 'Mc Donald, Megan', NULL, NULL, '813 M478 2005 c1', NULL, 8),
(455, 'Un Capitán de Quince Años', 'Verne, Julio', NULL, NULL, '843 V531c 1993 c1', NULL, 3),
(456, 'Asesinato en el Canadian Express', 'Wilson, Eric', NULL, NULL, 'C813 W747 2014 c1', NULL, 6),
(457, 'Quique Hache Detective', 'Gómez, Sergio', NULL, NULL, 'Ch 863 G633 2006 c1', NULL, 3),
(458, 'Bibiana y su Mundo', 'Olaizola, José Luis', NULL, NULL, '863 O46 2005 c1', NULL, 8),
(459, 'Pregúntale a Alicia', 'Anónimo', NULL, NULL, '813 P923 2002 c1', NULL, 1),
(460, 'Pregúntale a Alicia', 'Anónimo', NULL, NULL, '813 P923 c1', NULL, 9),
(461, 'El Niño que se fue en un Arbol', 'Balcells, Jaqueline', NULL, NULL, 'Ch 863 B174 1992 c1', NULL, 6),
(462, 'Las Aventuras de Tom Sawyer', 'Twain, Mark', NULL, NULL, '813 T969 1998 c1', NULL, 4),
(463, 'Camilón, Comilón', 'Machado, Ana María', NULL, NULL, 'B869.3 M149 c1', NULL, 7),
(464, 'Niebla', 'de Unamuno, Miguel', NULL, NULL, '863 U54 1984 c1', NULL, 6),
(465, 'Si Tienes un Papá Mago', 'Kesselman, Gabriela', NULL, NULL, 'A863 K42 2003 c1', NULL, 9),
(466, 'Un Viaje Inesperado', 'Dossetti, Angélica', NULL, NULL, 'Ch863 D724 2018 c1', NULL, 9),
(467, 'Historia de Dos Ciudades', 'Dickens Charles', NULL, NULL, '823 D548 1998 c1', NULL, 9),
(468, 'El Ruiseñor y la Rosa y Otros Cuentos', 'Wilde, Oscar', NULL, NULL, '823 W672 1994 c1', NULL, 8),
(469, 'Cuentos de la Selva', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8 1994 c1', NULL, 3),
(470, 'Mujercitas', 'Alcott, Louisa M.', NULL, NULL, '813 A355 2000 c1', NULL, 9),
(471, 'El Diario de Ana Frank', 'Ana Frank', NULL, NULL, '920.72 F828 2002 c1', NULL, 1),
(472, 'Veinte mil leguas de viaje Submarino', 'Verne, Julio', NULL, NULL, '843 V531 ve 2005 c1', NULL, 5),
(473, 'La Hija del Espantapájaros', 'Gripe, María', NULL, NULL, '839.73G868 2005 c1', NULL, 2),
(474, 'El Enfermo Imaginario', 'Moliere', NULL, NULL, '842 M721 1996 c1', NULL, 3),
(475, 'Los hijos del capitan Grant', 'Verne, Julio', NULL, NULL, '843 V531e.E 1996 c1', NULL, 2),
(476, 'El Ladrón de Mentiras', 'Santiago, Roberto', NULL, NULL, '863 S335 2003 c1', NULL, 7),
(477, 'El Lazarillo de Tormes', 'Anónimo', NULL, NULL, '863 L431 1987 c1', NULL, 4),
(478, 'Una Niña llamada Ernestina', 'Flores, Enriqueta', NULL, NULL, 'Ch 863 F634 2004 c1', NULL, 7),
(479, 'Charlie y el gran ascensor de cristal', 'Dahl, Roald', NULL, NULL, '823 D131 2007 c1', NULL, 4),
(480, 'Ami, El Niño de las Estrellas', 'Barrios, Enrique', NULL, NULL, 'Ch863 B276 1989 c1', NULL, 9),
(481, 'Bajo la misma estrella', 'Green, John', NULL, NULL, '813 G795 2013 c1', NULL, 6),
(482, 'Bajo la misma estrella', 'Green, John', NULL, NULL, '813 G795 2013 c2', NULL, 8),
(483, 'Historia de una Gaviota y del Gato que…', 'Sepúlveda, Luis', NULL, NULL, 'Ch 863 S479 2003 c1', NULL, 7),
(484, 'Judy Moody adivina el futuro', 'Mc Donald, Megan', NULL, NULL, '813 M478a 2006 c1', NULL, 1),
(485, 'El Ruiseñor y la Rosa y Otros Cuentos', 'Wilde, Oscar', NULL, NULL, '823 W672 2004 c1', NULL, 8),
(486, 'Papelucho Historiador', 'Marcela Paz', NULL, NULL, 'Ch863 P348h 2003 c1', NULL, 4),
(487, 'Papelucho, mi hermana Ji', 'Marcela Paz', NULL, NULL, 'Ch863 P348ji 2001 c1', NULL, 2),
(488, 'Papelucho', 'Marcela Paz', NULL, NULL, 'Ch863 P348 1987 c1', NULL, 8),
(489, 'Papelucho', 'Marcela Paz', NULL, NULL, 'Ch863 P348 1990 c1', NULL, 5),
(490, 'Papelucho', 'Marcela Paz', NULL, NULL, 'Ch863 P348 1999 c1', NULL, 9),
(491, 'Mujercitas', 'Alcott, Louisa M.', NULL, NULL, '813 A355 1990 c1', NULL, 4),
(492, 'El viejo y el mar', 'Hermingway, Ernest', NULL, NULL, '813 H488 c1', NULL, 9),
(493, 'Pregúntale a Alicia', 'Anónimo', NULL, NULL, '813 P923 2010 c1', NULL, 8),
(494, 'Papelucho, mi hermana Ji', 'Marcela Paz', NULL, NULL, 'Ch863 P348ji 2002 c1', NULL, 3),
(495, 'Papelucho, mi hermana Ji', 'Marcela Paz', NULL, NULL, 'Ch863 P348ji 2011 c1', NULL, 7),
(496, 'El Diario de Ana Frank', 'Ana Frank', NULL, NULL, '920.72 F828 2003 c1', NULL, 7),
(497, 'Emilia y la Dama Negra', 'Balcells, Jaqueline', NULL, NULL, 'Ch863 B174 c1', NULL, 6),
(498, 'Don Quijote de la Mancha', 'De Cervantes, Miguel', NULL, NULL, '863 C419 2009 c1', NULL, 7),
(499, 'Judy Moody se vuelve Famosa!', 'Mc Donald, Megan', NULL, NULL, '813 M478f 2008 c1', NULL, 1),
(500, 'Un Viaje Inesperado', 'Dossetti, Angélica', NULL, NULL, 'Ch863 D724 2014 c1', NULL, 9),
(501, 'Seguiremos siendo Amigos', 'Danziger, Paula', NULL, NULL, '813 D199 2015 c1', NULL, 8),
(502, 'El chupacabras de Pirque', 'Pelayo, Pepe', NULL, NULL, 'Cu863 P381 2012 c1', NULL, 1),
(503, 'Ami, El Niño de las Estrellas', 'Barrios, Enrique', NULL, NULL, 'Ch863 B276 2005 c2', NULL, 8),
(504, 'Mamire, el Ultimo Niño', 'Carvajal, Victor', NULL, NULL, 'Ch863 C331 2012 c1', NULL, 8),
(505, 'La Cabaña en el árbol', 'Cross, Guillian', NULL, NULL, '823 C951 2005 c2', NULL, 6),
(506, 'Matilda', 'Dahl, Roald', NULL, NULL, '823 D131 2005 c1', NULL, 8),
(507, 'La Gran Gilly Hopkins', 'Paterson, Katherine', NULL, NULL, '813 P296 2006 c1', NULL, 5),
(508, 'Charlie y el gran ascensor de cristal', 'Dahl, Roald', NULL, NULL, '823 D131 2004 c1', NULL, 6),
(509, 'Una Niña llamada Ernestina', 'Flores, Enriqueta', NULL, NULL, 'Ch 863 F634 2004 c1', NULL, 7),
(510, 'El Extraño caso del Dr. Jekyll y Mr. Hyde', 'Stevenson, Robert L.', NULL, NULL, '823 S847 c1', NULL, 9),
(511, 'El Reino del Dragón de Oro', 'Allende, Isabel', NULL, NULL, 'Ch863 A432r 2013 c1', NULL, 6),
(512, 'La Suma de los Días', 'Allende, Isabel', NULL, NULL, 'Ch863 A432s 2007 c1', NULL, 2),
(513, 'De Amor y De Sombras', 'Allende, Isabel', NULL, NULL, 'Ch863 A432a 1992 c1', NULL, 8),
(514, 'Retrato en Sepia', 'Allende, Isabel', NULL, NULL, 'Ch863 A432re 2000 c1', NULL, 7),
(515, 'Inés del Alma Mía', 'Allende, Isabel', NULL, NULL, 'Ch863 A432al 2006 c1', NULL, 3),
(516, 'El Plan Infinito', 'Allende, Isabel', NULL, NULL, 'Ch863 A432p 1996 c1', NULL, 1),
(517, 'Hija de la Fortuna', 'Allende, Isabel', NULL, NULL, 'Ch863 A432h 1999 c1', NULL, 4),
(518, 'Charlie y la Fabrica de Chocolate', 'Dahl, Roald', NULL, NULL, '823 D131.91 2006 c1', NULL, 9),
(519, 'Juanita, Joven Patriota', 'Balcells, Jaqueline', NULL, NULL, 'Ch863 B174j 2004 c1', NULL, 5),
(520, 'Perico Trepa por Chile', 'Marcela Paz', NULL, NULL, 'Ch863 P348pe 2004 c1', NULL, 4),
(521, 'Las Brujas', 'Dahl, Roald', NULL, NULL, '823 D131b 2004 c1', NULL, 8),
(522, 'La Isla del Tesoro', 'Stevenson, Robert L.', NULL, NULL, '823 S847 Stei 1996 c1', NULL, 6),
(523, 'Papaito Piernas Largas', 'Webster, Jean', NULL, NULL, 'U813.054 W377 1992 c1', NULL, 8),
(524, 'Corazón', 'De Amicis, Edmundo', NULL, NULL, '853 Am516 2010 c1', NULL, 1),
(525, 'Lautaro, Joven Libertador de Arauco', 'Alegría, Fernando', NULL, NULL, 'Ch863 ALE 2007 c1', NULL, 1),
(526, 'Quidora, Joven Mpuche', 'Balcells, Jaqueline', NULL, NULL, 'Ch863 B174q 2007 c1', NULL, 2);
INSERT INTO `libro` (`id_libro`, `titulo_libro`, `autor_libro`, `estado`, `isbn`, `dewey`, `foto_portada`, `stock`) VALUES
(527, 'Cuentos de Amor de Locura y de Muerte', 'Quiroga, Horacio', NULL, NULL, 'U 863 Q8a 2009 c1', NULL, 7),
(528, 'Cuentos de Grimm', 'Grimm, Jakob y Wilhelm', NULL, NULL, '843 G861 M564 2001 c1', NULL, 9),
(529, 'Subterra', 'Lillo, Baldomero', NULL, NULL, 'Ch863 L728 2005 c1', NULL, 6),
(530, 'Trece Casos Misteriosos', 'Balcells, Jaqueline', NULL, NULL, 'Ch863 B174 T 2001 c1', NULL, 1),
(531, 'Los Pecosos', 'Marcela Paz', NULL, NULL, 'Ch863 P349 1994 c1', NULL, 7),
(532, 'Los Pecosos', 'Marcela Paz', NULL, NULL, 'Ch863 P349 1994 c2', NULL, 3),
(533, 'Pesadilla en Vancúver', 'Wilson, Eric', NULL, NULL, 'C813 W748 1992 c1', NULL, 1),
(534, 'Pesadilla en Vancúver', 'Wilson, Eric', NULL, NULL, 'C813 W748 2002 c1', NULL, 7),
(535, 'Quique Hache Detective', 'Gómez, Sergio', NULL, NULL, 'Ch 863 G633 2013 c1', NULL, 2),
(536, 'Frin', 'Pescetti, Luis María', NULL, NULL, 'A863 P473 2008 c1', NULL, 8),
(537, 'Amalia, Amelia y Emilia', 'Gómez Cerda, Alfredo', NULL, NULL, '863 G 6331am 2011 c1', NULL, 6),
(538, 'El Rey Solito', 'Estrada Rafael', NULL, NULL, '863 E82 2013 c1', NULL, 5),
(539, 'La Cama Mágica de Bartolo', 'Paredes, Mauricio', NULL, NULL, 'Ch863 P227 2007 c1', NULL, 9),
(540, 'La Cabaña en el árbol', 'Cross, Guillian', NULL, NULL, '823 C951 2018 c1', NULL, 1),
(541, 'La Ciudad de los Césares', 'Rojas, Manuel', NULL, NULL, 'Ch 863 R741 1998 c1', NULL, 4),
(542, 'Platero y yo', 'Jimenez, Juan Ramon', NULL, NULL, '861 J61 1997 c1', NULL, 9),
(543, 'Perico Trepa por Chile', 'Marcela Paz', NULL, NULL, 'Ch863 P348pe 1998 c1', NULL, 6),
(544, 'Papelucho Detective', 'Marcela Paz', NULL, NULL, 'Ch863 P348d 2002 c1', NULL, 3),
(545, 'Papelucho Detective', 'Marcela Paz', NULL, NULL, 'Ch863 P348h 2002 c1', NULL, 4),
(546, 'La Cabaña del Tío Tom', 'Beecher, Harriet', NULL, NULL, '813 STOc 2014 c1', NULL, 1),
(547, 'Doónde estás Constanza ?', 'Rosasco, José Luis', NULL, NULL, 'Ch863 ROSd 2007 c1', NULL, 3),
(548, 'Pirueleta', 'Nostlinger, Christine', NULL, NULL, 'A833 NOSp 2008 c1', NULL, 4),
(549, 'El lugar mas bonito del Mundo', 'Cameron, Ann', NULL, NULL, '813 CAM 1998 c1', NULL, 8),
(550, 'Osito', 'Holmelund, Else', NULL, NULL, '839 MINo 2011 c1', NULL, 8),
(551, 'El Delincuente, El Vaso de lehe y Otros Cuentos', 'Rojas, Manuel', NULL, NULL, 'Ch863 ROJde 2012 c1', NULL, 9),
(552, 'El Principito', 'Saint-Exupéry, Antoine de', NULL, NULL, '843 SAIp 2007 c1', NULL, 2),
(553, 'Gabriela Mistral Poesia', 'Mistral, Gabriela', NULL, NULL, 'Ch861 MISp 2020 c1', NULL, 8),
(554, '20.000 leguas de Viaje Submarino', 'Verne, Julio', NULL, NULL, '843 VER 2001 c1', NULL, 8),
(555, 'Viaje al centro de la Tierra', 'Verne, Julio', NULL, NULL, '843 VERv 1998 c1', NULL, 4),
(556, 'Yo, Simio', 'Gómez, Sergio', NULL, NULL, 'Ch863 G633 2014 c1', NULL, 6),
(557, 'Museo Casa Cano', 'Silva Vásquez, Hansel', NULL, NULL, '929 Sil 2018 c1', NULL, 1),
(558, 'El Santuario de San Sebastián de Yumbel', 'Silva Vásquez, Hansel', NULL, NULL, '929 Sil 2020 c1', NULL, 5),
(559, 'Guía Patrimonial Cementerio General de Concepción', 'Loyola Orias, Verona', NULL, NULL, '929 Loy 2018 c1', NULL, 4),
(560, 'Ecos de la Prensa Penquista. Diario \"El Sur\"', 'Garbarino Machuca, Josefina', NULL, NULL, '929 Gar 2021 c1', NULL, 5),
(561, 'Yumbel en el Siglo XIX. Construcción de un Paisaje Histórico', 'Herlitz, Hellmuth', NULL, NULL, '929 Her 2019 c1', NULL, 4),
(562, 'Estudios sobre la \"Capital del Sur\"', 'León, Marco Antonio', NULL, NULL, '929 Leo 2018 c1', NULL, 4),
(563, 'El Fuerte: La Planchada de Penco', 'Burgos, Luciano', NULL, NULL, '929 Bur 2016 c1', NULL, 8),
(564, 'Cerámica en Penco: Industria y Sociedad', 'Marquez Ochoa, Boris', NULL, NULL, '929 Mar 2018 c1', NULL, 1),
(565, 'El Mercado Regional de Concepción', 'Inostroza, Luis Iván', NULL, NULL, '929 Inos 2018 c1', NULL, 6),
(566, 'Historia Económica Regionl de Concepción', 'Mazzei de Grazia, Leonardo', NULL, NULL, '929 Maz 2015 c1', NULL, 2),
(567, 'La Cuestión Social en Concepión', 'Benedetti Reiman, Laura', NULL, NULL, '929 Ben 2019 c1', NULL, 6),
(568, 'El Cementerio de Disidentes de Concepción', 'León Heredia, Carlos', NULL, NULL, '929 Leo 2019 c1', NULL, 8),
(569, 'Las Piezas del Olvido. Cerámica Decoratica Penco.', 'Marquez Ochoa, Boris', NULL, NULL, '929 X 2015 c1', NULL, 2),
(570, 'Los Primeros 5 Años.', 'Marquez Ochoa, Boris', NULL, NULL, '929 Y 2018 c1', NULL, 5),
(571, 'Cementeria General de Concepción', 'Cartes Montory, Armando', NULL, NULL, '929 Z 2021 c1', NULL, 9),
(572, 'Cementeria General de Concepción', 'Cartes Montory, Armando', NULL, NULL, '929 Z 2021 c2', NULL, 2),
(573, 'Sandokan', 'Salgari, Emilio', NULL, NULL, '853 SALsan 1990 c1', NULL, 2),
(574, 'Sandokan', 'Salgari, Emilio', NULL, NULL, '853 SALsan 1993 c1', NULL, 1),
(575, 'La Cabaña del Tío Tom', 'Beecher, Enriqueta', NULL, NULL, '813 STOc 1993 c1', NULL, 7),
(576, 'El Gigante Egoista y otros Cuentos', 'Wilde, Oscar', NULL, NULL, '823 WIL 1989 c1', NULL, 7),
(577, 'Los Cretinos', 'Dahl, Roald', NULL, NULL, '823 DAH 2011 c1', NULL, 5),
(578, 'La familia Guácatela', 'Paredes, Mauricio', NULL, NULL, 'Ch863 PARgua 2014 c1', NULL, 1),
(579, 'La Ultima Nieblae Historia de María Griselda', 'Bombal, María Luisa', NULL, NULL, 'Ch863 BOM 1998 c2', NULL, 2),
(580, 'El Fantasma de Canterville', 'Wilde, Oscar', NULL, NULL, '823 WILfan 1994 c1', NULL, 3),
(581, 'Colmillo Blanco', 'London, Jack', NULL, NULL, '813 LONcol 2016 c1', NULL, 2),
(582, 'Colmillo Blanco', 'London, Jack', NULL, NULL, '813 LONcol 2003 c1', NULL, 9),
(583, 'Los Viajes de Gulliver', 'Swift, Jonathan', NULL, NULL, '823 SWIgu 2004 c1', NULL, 3),
(584, 'El maestro y el robot', 'Del Cañizo, José A.', NULL, NULL, '863 CAÑmae 1995 c1', NULL, 4),
(585, 'Amores que matan', 'Laragione, Lucia', NULL, NULL, 'Ar863 LARamo 2008', NULL, 2),
(586, 'El Principe Feliz y Otros Cuentos', 'Wilde, Oscar', NULL, NULL, '823 WILprin 1992 c1', NULL, 6),
(587, 'Fausto', 'Goethe, Johann W.', NULL, NULL, '833 GOEfau 2000 c1', NULL, 5),
(588, 'Perico Trepa por Chile', 'Marcela Paz', NULL, NULL, 'Ch863 P348pe 1978 c1', NULL, 6),
(589, 'Bibiana y su Mundo', 'Olaizola, José Luis', NULL, NULL, '863 O46 2005 c1', NULL, 5),
(590, 'Francisca, Yo te Amo', 'Rosasco, José Luis', NULL, NULL, 'Ch863 ROSfran 2007 c1', NULL, 6),
(591, 'El Vencedor está solo', 'Coelho, Paulo', NULL, NULL, 'Br860 COEven 2011 c1', NULL, 6),
(592, 'Maktub', 'Coelho, Paulo', NULL, NULL, 'Br860 COEmak 2011 c1', NULL, 2),
(593, 'Manual del Guerrero de la Luz', 'Coelho, Paulo', NULL, NULL, 'Br860 COEgue 2011 c1', NULL, 3),
(594, 'El Alquimista', 'Coelho, Paulo', NULL, NULL, 'Br860 COEalq 2011 c1', NULL, 5),
(595, 'La Quinta Montaña', 'Coelho, Paulo', NULL, NULL, 'Br860 COEqui 2011 c1', NULL, 8),
(596, 'El Zahir', 'Coelho, Paulo', NULL, NULL, 'Br860 COEzah 2011 c1', NULL, 7),
(597, 'El Demonio y la Señorita Prym', 'Coelho, Paulo', NULL, NULL, 'Br860 COEdem 2011 c1', NULL, 2),
(598, 'El Peregrino', 'Coelho, Paulo', NULL, NULL, 'Br860 COEper 2011 c1', NULL, 8),
(599, 'La Bruja de Portobello', 'Coelho, Paulo', NULL, NULL, 'Br860 COEbru 2011 c1', NULL, 4),
(600, 'El Sueño del Celta', 'Vargas Llosa, Mario', NULL, NULL, 'Pe863 V297celta 2010 c1', NULL, 4),
(601, 'Historia Universal', NULL, NULL, NULL, '909 Sal V.1 2005 c1', NULL, 1),
(602, 'Diccionario de Sinónimos y Antónimos', '-', NULL, NULL, '463.1 D545 1984 c1', NULL, 9),
(603, 'Palomita Blanca', 'Lafourcade, Enrique', NULL, NULL, 'Ch863L168 1972 c2', NULL, 6),
(604, 'Querido Fantasma', 'Balcells, Jacqueline / Güiraldes, Ana María', NULL, NULL, 'Ch863 B174 1992 c1', NULL, 3),
(605, 'El Alquimista', 'Coelho, Paulo', NULL, NULL, 'Br860 COEalq 2006 c1', NULL, 6),
(606, 'Otelo, El Moro de Venecia y la Tragedia de Romeo y Julieta', 'Shakespeare, Williams', NULL, NULL, '822.33 Ote/Rom c1', NULL, 1),
(607, 'Hamlet', 'Shakespeare, Williams', NULL, NULL, '823 SHAha 1970 c1', NULL, 6),
(608, 'Canciones Selección', 'García Lorca, Federico', NULL, NULL, '861 G216 1989 c2', NULL, 6),
(609, 'Lautaro, Joven Libertador de Arauco', 'Alegría, Fernando', NULL, NULL, 'Ch863 ALE 1984 c1', NULL, 5),
(610, 'Ivanhoe', 'Scott, Sir Walter', NULL, NULL, 'E 823 S431 1968 c1', NULL, 4),
(611, 'El Reino de Este Mundo', 'Carpentier, Alejo', NULL, NULL, 'Cu863 C297 1981 c1', NULL, 6),
(612, 'Edipo Rey', 'Sofocles', NULL, NULL, '882 S681 2003 c1', NULL, 9),
(613, 'Veinte Poemas de Amor y una Canción Desesperada', 'Neruda, Pablo', NULL, NULL, 'Ch861 NERvei 2000 c1', NULL, 8),
(614, 'La Tregua', 'Benedetti, Mario', NULL, NULL, 'U863 BENtre 2002 c1', NULL, 3),
(615, 'El Aleph', 'Borges, Jorge Luis', NULL, NULL, 'Ar860 BORale 2005 c1', NULL, 8),
(616, 'El Albergue de las Mujeres Tristes', 'Serrano, Marcela', NULL, NULL, 'Ch863 S487 1998 c1', NULL, 3),
(617, 'La Guerra del Fin del Mundo', 'Vargas Llosa, Mario', NULL, NULL, 'Pe863 V297guer c1', NULL, 2),
(618, 'Final del Juego', 'Cortázar, Julio', NULL, NULL, 'Ar863 CORfin 2008 c1', NULL, 8),
(619, 'Diccionario de Sinónimos y Antónimos', '-', NULL, NULL, '463.1 D545 c1', NULL, 7),
(620, '1984', 'George Orwell', 'disponible', NULL, NULL, NULL, 1),
(621, 'El extranjero', 'Albert Camus', 'disponible', NULL, NULL, NULL, 4),
(622, 'Rebelión en la granja', 'George Orwell', 'disponible', NULL, NULL, NULL, 5),
(623, 'El vigilante', 'Stephen King', NULL, '0-7645-2641-3', '2323232323232', '1662341038-5MR.jpeg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `membresia`
--

CREATE TABLE `membresia` (
  `id_membresia` int NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membresia`
--

INSERT INTO `membresia` (`id_membresia`, `descripcion`) VALUES
(1, 'semestral'),
(2, 'anual');

-- --------------------------------------------------------

--
-- Table structure for table `paga`
--

CREATE TABLE `paga` (
  `id_usuario` int NOT NULL,
  `id_membresia` int NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `fecha_activacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paga`
--

INSERT INTO `paga` (`id_usuario`, `id_membresia`, `fecha_pago`, `fecha_vencimiento`, `fecha_activacion`) VALUES
(1, 2, '2022-05-09', '2017-11-04', '2016-11-04'),
(2, 1, '2022-09-05', '2023-09-05', '2022-09-05'),
(3, 2, '2022-05-09', '2023-08-08', '2022-08-08'),
(4, 1, '2022-05-10', '2023-03-03', '2022-09-03'),
(5, 1, '2022-05-12', '2017-05-04', '2016-11-04'),
(6, 1, '2022-05-12', '2023-09-03', '2022-09-03'),
(7, 1, '2022-05-12', '2023-03-03', '2022-09-03'),
(9, 2, '2022-05-12', '2023-05-12', '2022-05-12'),
(10, 1, '2022-05-13', '2023-02-08', '2022-08-08'),
(11, 2, '2022-05-13', '2023-05-13', '2022-05-13'),
(12, 2, '2022-05-13', '2017-11-04', '2016-11-04'),
(13, 1, '2022-05-13', '2022-11-13', '2022-05-13'),
(19, 1, '2022-06-07', '2022-12-07', '2022-06-07'),
(20, 1, '2022-06-07', '2022-12-07', '2022-06-07'),
(21, 1, '2016-11-04', '2023-02-08', '2022-08-08'),
(22, 2, '2016-11-04', '2023-08-08', '2022-08-08'),
(23, 2, '2016-11-04', '2023-08-08', '2022-08-08'),
(24, 2, '2022-08-08', '2023-09-01', '2022-09-01'),
(25, 2, '2022-08-08', '2023-08-08', '2022-08-08'),
(26, 1, '2021-08-12', '2023-09-03', '2022-09-03'),
(28, 2, '2022-08-31', '2023-09-03', '2022-09-03'),
(29, 2, '2022-09-01', '2023-09-02', '2022-09-02'),
(30, 2, '2022-09-01', '2023-09-02', '2022-09-02'),
(31, 1, '2022-09-01', '2023-03-01', '2022-09-01'),
(32, 1, '2022-09-01', '2023-03-01', '2022-09-01'),
(33, 2, '2022-09-02', '2023-09-03', '2022-09-03'),
(34, 2, '2022-09-02', '2023-09-02', '2022-09-02'),
(35, 1, '2022-09-02', NULL, NULL),
(36, 1, '2022-09-02', '2023-03-04', '2022-09-04'),
(37, 1, '2022-09-03', '2023-03-03', '2022-09-03'),
(38, 2, '2022-09-04', '2023-09-05', '2022-09-05'),
(39, 1, '2022-09-05', NULL, NULL),
(40, 1, '2022-09-05', '2023-03-05', '2022-09-05'),
(41, 1, '2022-09-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pide`
--

CREATE TABLE `pide` (
  `id_libro` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id_rol` int NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id_rol`, `descripcion`) VALUES
(1, 'vecino'),
(2, 'administrador'),
(3, 'voluntario');

-- --------------------------------------------------------

--
-- Table structure for table `tiene`
--

CREATE TABLE `tiene` (
  `cod_dewey` int NOT NULL,
  `id_libro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiene`
--

INSERT INTO `tiene` (`cod_dewey`, `id_libro`) VALUES
(0, 298),
(220, 623);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `rut` varchar(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `clave` varchar(150) DEFAULT NULL,
  `comprobante` varchar(200) DEFAULT NULL,
  `foto_perfil` varchar(45) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `id_rol` int NOT NULL,
  `prueba` set('Pendiente','Habilitado') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `rut`, `correo`, `clave`, `comprobante`, `foto_perfil`, `estado`, `direccion`, `telefono`, `id_rol`, `prueba`) VALUES
(1, 'Camilo', 'Ortiz', 'Muñoz', '19417616-3', 'camiloa.ortizm@gmail.com', '$2y$10$IZmqCsF0RggDHnuTuR1Ff.QLoRUoP8AhfWLEALX7LSC2J2FmsZdmG', NULL, NULL, 'habilitado', 'la herradura 448', '123123123', 1, 'Habilitado'),
(2, 'Héctor', 'Ortiz', 'Garrido', '9514161-7', 'hector@gmail.com', '$2y$10$8w1ARTkcVIbAdPJCB8Ap1evXtpQhh7AInUXTjNmqzRW5OFVmoFtGS', NULL, NULL, 'habilitado', 'la herradura 448', '32342423', 1, 'Pendiente'),
(3, 'Nicolas', 'Diaz', 'Muñoz', '9514161-7', 'nico@gmail.com', '$2y$10$FnE/f27sEVATa77zsWEwiumZfYXr9NHMYAQOZNOLFrIYmZa15fsOG', NULL, NULL, 'habilitado', 'collao 823', '23321442', 1, 'Pendiente'),
(4, 'Andres', 'Ortiz', 'Muñoz', '19417616-3', 'andres@gmail.com', '$2y$10$KRJBT/HeYCrAp/rAjwbwpu9/ObWx6ioMYvIbKh8xGYcAD./9CuFUy', NULL, NULL, 'habilitado', 'las heras 12', '21332123', 1, 'Pendiente'),
(5, 'Sofia', 'Muñoz', 'Muñoz', '19417616-3', 'sofia@gmail.com', '$2y$10$KHWFKzOYP7sTJt37Ke0Y9eQloedgcLOmr716bSY.2euWJ9t8Wrf9O', NULL, NULL, 'vencido', 'los lirios 232', '232232223', 1, 'Pendiente'),
(6, 'Nicolas', 'Aravena', 'Muñoz', '19417616-3', 'nicolais@gmail.com', '$2y$10$GJLN2yaa6hTjBYoGiEE5Eeo0UIKxvr4TU2tqNwOBOa.5zgqNqS/yG', NULL, NULL, 'habilitado', 'chacabuco 123', '12121212', 1, 'Pendiente'),
(7, 'Nicolas', 'Aravena', 'Muñoz', '19417616-3', 'nicolais@gmail.com', '$2y$10$CziI2WhVpktGL046f72b6.Xe35kP9u37cCxJMFP5PIQO1guDC3pVu', NULL, NULL, 'habilitado', 'chacabuco 123', '12121212', 1, 'Pendiente'),
(8, 'Alejandro', 'Farias', 'Farias', '19417616-3', 'farias@gmail.com', '$2y$10$P2Dn6lRChJKH04tDWGE3SuheJ/o44i3luRwuhCkP7lTZ2ARvSNLuS', NULL, NULL, 'pendiente', 'francisco fierro 1212', '2133231', 1, 'Pendiente'),
(9, 'Héctor', 'Ortiz', 'Garrido', '19417616-3', 'hector@gmail.com', '$2y$10$sGdBAcoq.a5O3ffiL1filOuK82WNddwZmXUs918vmzFtjqIYZJdcm', NULL, NULL, 'habilitado', 'la herradura 448', '99040412', 1, 'Pendiente'),
(10, 'Camilo', 'Ortiz', 'Muñoz', '19417616-3', 'camilo@gmail.com', '$2y$10$FjbiZ1FITgiVA1IB2PtkqeHez80D6MOqV/Fj681ZDpx4cvpcPqJnG', NULL, NULL, 'habilitado', 'collao 2123', '32323', 1, 'Pendiente'),
(11, 'Julian', 'Escobar ', 'Escobar', '19417616-3', 'julian@gmail.com', '$2y$10$dz03/g34/iZxre4iLJ3Ge.aYHEgtSg4fc0gxv1rr.TcmSDaljL.TG', NULL, NULL, 'habilitado', 'los carrera 323', '23233423', 1, 'Pendiente'),
(12, 'Sofia', 'Rojas', 'Rojas', '11185002-K', 'sofi@gmail.com', '$2y$10$FjU6E/4XSKdbMIH.OeqPNOYsuGexuP7bt/kZoVIWoFtfXIk1ZNO0i', NULL, NULL, 'vencido', 'collao 1232', '98232312', 1, 'Pendiente'),
(13, 'Matias', 'Pacheco', 'Diaz', '9514161-7', 'matigol@gmail.com', '$2y$10$fT2vt/45xaVTavdvU4a5f.SW5cMZN2KHqBVW6SeawtymqBVKr7s/C', NULL, NULL, 'habilitado', 'los carreras 332', '23412234', 1, 'Pendiente'),
(16, 'B', 'B', 'B', '4688159-1', 'NINGUNO@UDS.CL', '$2y$10$GRbYvfU65YsYbBdZ0sLlZ.7Wa0UxNStDPVysip8JgyBnStaYkocbW', NULL, NULL, 'pendiente', 'dd', '123', 1, 'Pendiente'),
(19, 'Prueba', 'Alejandro', 'Alej', '20833673-8', 'alejandro@farias.cl', '$2y$10$v3SGmWl1MQtQdczKVLadU.HIEzw3tgVr/ZHGW1avfccMgTSDz0EBK', NULL, NULL, 'habilitado', 'mi casa', '007', 1, 'Pendiente'),
(20, 'Prueba', 'Alejandro', 'Alej', '20833673-8', 'alejandro@farias.cl', '$2y$10$qSjIOmkBItYIZnqh/4/edOd3a259MQI7jRNgUZwZXoNk9RuSnbXea', NULL, NULL, 'habilitado', 'mi casa', '007', 1, 'Pendiente'),
(21, 'Juan marco', 'Marin', 'Farias', '20959645-8', 'juanmarco@gmail.com', '$2y$10$EhyHLWg3tobRlADRzHAaeOAKQ7dI/4da.2UwxJ0poprKt5iJ6Rk3C', '20959645-8Curriculum Camilo Ortiz Muñoz.pdf', NULL, 'habilitado', 'los alerces 174', '1212121', 1, 'Pendiente'),
(22, 'Miguel                                       ', 'Ortiz   ', 'Diaz                                         ', '10856572-1', 'juan@gmail.com', '$2y$10$jIkSxB5vgK98tnndOI64oeF4hStjqP3dkcqElS9cekELhs8kblabe', '10856572-120959645-8Curriculum Camilo Ortiz Muñoz.pdf', NULL, 'habilitado', 'juan@gmail.com   ', '999040412', 1, 'Pendiente'),
(23, 'Farias                                       ', 'Farias ', 'Farias                                       ', '19286932-3', 'farias@gmail.com', '$2y$10$UhEAlQatp/tJ9TCkk8QiS.6CNoxhwtAwZ03aY2OIIK0Zzevyfh7PW', '19286932-3Curriculum Camilo Ortiz Muñoz.pdf', NULL, 'habilitado', 'farias 223 ', '989582931 ', 1, 'Pendiente'),
(24, 'Nicole', 'Farias', 'Farias', '19651240-3', 'farias@gmail.com', '$2y$10$l0aF9YS2bxIBZL0NXf67zuVFTsf7yIfp4vgYWxts8OB79pQJ2LQbO', '19651240-3Gestión Personas.pdf', NULL, 'habilitado', 'farias 21', '2123213', 1, 'Pendiente'),
(25, 'Marias', 'Ortiz', 'Muñoz', '19560966-7', 'mari@gmail.com', '$2y$10$qy965mUop3r5O/tOYfhWZu5fp9XUxkM4KyTw3xH28BvBfS5n6MxOy', NULL, NULL, 'habilitado', 'los alerces 121', '12121212', 1, 'Pendiente'),
(26, 'Alejandra                                    ', 'Segura ', 'Navarrete                                    ', '14273436-2', 'asegura@ubiobio.cl', '$2y$10$0/Tp8rF9Gk95yDxoBez2IOAGbxCHv30aAIbJr5FVxb9PglvULFVoe', '14273436-21.png', NULL, 'habilitado', 'calle badajoz 224, valle noble ', '989582931', 1, 'Habilitado'),
(27, 'Gonzalo', 'Segura', 'Navarrete', '10676436-0', 'gonzalo@gmail.com', '$2y$10$yIJWluAs6jQOXCwsX7PhI.FnvKD74D1jD76/iJ4mgWicp3WqMCRAS', '10676436-03Credenciales_entregas (1).zip', NULL, 'pendiente', 'valla', '45454', 1, 'Pendiente'),
(28, 'Alejandro', 'Farias', 'Farias', '14676685-4', 'farias@gmail.com', '$2y$10$JBYH6NcPJgg.ReagsQ/kUuuVeutAc2D8ADo5itqb1Rqj/wLUK4lvu', '14676685-4caso de uso taller.jpg', NULL, 'habilitado', 'los alreces 663', '950324492', 1, 'Pendiente'),
(29, 'Martina', 'Muñoz', 'Muñoz', '19076988-7', 'martiz@gmail.com', '$2y$10$o0OaDhdWmBPfXvvQEeIWXO3mOP3VQj887dkRzUlzvZwIr5Cgw.JN.', '19076988-7Menú principal biblioteca.jpg', NULL, 'habilitado', 'los alerces 212', '989582931', 1, 'Pendiente'),
(30, 'Diefo', 'Mario', 'Mario', '25040926-5', 'mario@gmail.com', '$2y$10$w465anwHwpy5X8AaIcSPu.SfI43RHdB2ZEaC5FTFBgiBBdsVhoeze', '25040926-55MR.jpeg', NULL, 'habilitado', 'los abedules 212', '989582931', 1, 'Pendiente'),
(31, 'Dfdf                                         ', 'Dfd ', 'Dfdfd                                        ', '11111111-1', 'paso@gma.com', '$2y$10$oVTEG7qj9Gfur01LZse83OG.d9F1F9TyejWCji.K97VGVoOY3ouTW', '11111111-11.2.2.5 Lab - What was Taken.pdf', NULL, 'habilitado', 'paso 22', '989565555', 1, 'Pendiente'),
(32, 'Dsadasda', 'Paso', 'Pasodito', '22222222-2', 'paso@gmai.com', '$2y$10$9JVOaoT2ijSbVegex0ZUU.2hPXnSzVLDnsWWZHcvzXBMvS.57qkt6', NULL, NULL, 'habilitado', '&lt;h1&gt;paso&lt;/h1&gt;', '989565555', 1, 'Pendiente'),
(33, 'Ariel', 'Diaz', 'Diaz', '23412564-8', 'ariel@gmail.com', '$2y$10$8Ea/yXwFWBOTtmGsJ0YvOOR0I9ih5UBWv8UhQ3KCwvTDyhMXo8Ko2', '23412564-8Menú principal biblioteca.jpg', NULL, 'habilitado', 'los alerces 12', '989582931', 1, 'Pendiente'),
(34, 'Marcelo', 'Zamorano', 'Zamorano', '24490350-9', 'marce@gmail.com', '$2y$10$aTcpq2AlYMKn4ei96PTDY.tbZsqK5zugaxm2P0axMh4HQe7HHfIA.', NULL, NULL, 'habilitado', 'los alerces 123', '989582931', 1, 'Pendiente'),
(35, 'Nicolas', 'Diaz', 'Diaz', '23024706-4', 'nic@gmail.com', '$2y$10$6.PGF.7qjlrjOtHrHxImg.4vyEZYrlqVVsNjP2R17oYdtPRTWOEl.', '23024706-4diaz', NULL, 'pendiente', 'los alerces 122', '989582932', 1, 'Pendiente'),
(36, 'Karina', 'Mena', 'Mena', '14484615-K', 'kari@gmail.com', '$2y$10$mQ5r6Zxf3xlHZ92D52eWV./MWJ5Gc5rgkhpz5DAbEw4e8E91geSom', '09-02-2022-03:27:31Menú-principal-biblioteca.jpg', NULL, 'habilitado', 'los alerces 23', '989582931', 1, 'Pendiente'),
(37, 'Brayan', 'Melo', 'Marciano', '19638185-6', 'marcianeke@gmail.com', '$2y$10$3m4oj/eCNPSwr/7uJcKvme2//GlKSlU9ti71cHLem6YgPzFXZ/myu', NULL, NULL, 'habilitado', 'los arces 123', '989582931', 1, 'Pendiente'),
(38, 'Nicolas', 'Sin', 'Tilde', '3781105-K', 'nico@hotmail.com', '$2y$10$HxOTm6aIoN1FA7Cbx93douDJITKv04R0Y7UnKhQRzI3iMHZEDevQm', '09-04-2022-04:47:08caso-de-uso-1-(2).jpg', NULL, 'habilitado', 'la herradura 448', '989582931', 1, 'Pendiente'),
(39, 'Carlos', 'Pinto', 'Paredes', '21153669-1', 'pinto@gmail.com', '$2y$10$6HuD0CYlPj8b7iKzczgafOlumKMBgSJnuRegJ3Qpc66lUSkzRjXya', '09-05-2022-01:27:565MR.jpeg', NULL, 'pendiente', 'Los alamos 12', '989582931', 1, 'Pendiente'),
(40, 'Almendra', 'Ortiz', 'Garrido', '8929389-8', 'alem@gmail.com', '$2y$10$ZpPosjjuhv1OL7JJrFGbVOGQ.i5X8B/Ja.iiR.5elJlv1WTy56ypK', '09-05-2022-01:30:06caso-de-uso-taller.jpg', NULL, 'habilitado', 'asasaas 566', '989582931', 1, 'Pendiente'),
(41, 'Matias', 'Vera', 'Vera', '5996668-5', 'mati@gmail.com', '$2y$10$AAt1QG.cC.S6pl2sY6mzw.RG4BJUSxCNzg2tv3gpuGN6lyYLjIYKW', '09-05-2022-02:17:30Menú-principal-biblioteca.jpg', NULL, 'pendiente', 'los alerces 121', '989582931', 1, 'Pendiente');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_dewey`),
  ADD KEY `id_categoria` (`id_categoria`) USING BTREE;

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indexes for table `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`id_membresia`);

--
-- Indexes for table `paga`
--
ALTER TABLE `paga`
  ADD PRIMARY KEY (`id_usuario`,`id_membresia`),
  ADD KEY `id_membresia` (`id_membresia`);

--
-- Indexes for table `pide`
--
ALTER TABLE `pide`
  ADD PRIMARY KEY (`id_libro`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `tiene`
--
ALTER TABLE `tiene`
  ADD PRIMARY KEY (`cod_dewey`,`id_libro`),
  ADD KEY `id_libro` (`id_libro`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=624;

--
-- AUTO_INCREMENT for table `membresia`
--
ALTER TABLE `membresia`
  MODIFY `id_membresia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paga`
--
ALTER TABLE `paga`
  ADD CONSTRAINT `paga_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `paga_ibfk_2` FOREIGN KEY (`id_membresia`) REFERENCES `membresia` (`id_membresia`);

--
-- Constraints for table `pide`
--
ALTER TABLE `pide`
  ADD CONSTRAINT `pide_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`),
  ADD CONSTRAINT `pide_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `tiene`
--
ALTER TABLE `tiene`
  ADD CONSTRAINT `tiene_ibfk_1` FOREIGN KEY (`cod_dewey`) REFERENCES `categoria` (`cod_dewey`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `tiene_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
