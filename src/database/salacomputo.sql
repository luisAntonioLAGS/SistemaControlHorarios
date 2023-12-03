-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 13:36:36
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mexico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `perfil` text NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `usuario`, `password`, `perfil`, `estado`, `fecha`) VALUES
(1, '  Luis Enrique', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrador', 1, '2021-10-02 20:39:44'),
(3, 'M.I Jacinto Toledo Flores', 'mariana', 'e60408e9a55027070e3caf0550d2b4df', 'Docente', 1, '2022-07-22 05:39:23'),
(6, ' ', 'lesd', 'c44966ad4e0386ff360deebddb15159d', 'Docente', 1, '2022-07-22 05:54:28'),
(15, 'M.I.E . Sayonara Orozco Álvarez', 'sayonara', 'ec2be8f907607f5ba0778e1dff20a679', 'Docente', 1, '2022-07-22 05:44:21'),
(16, 'M.I Humberto Santiago Salinas', 'humberto', '8767bbc52e71900d1f3a50b53196d0e2', 'Docente', 1, '2022-07-22 05:46:08'),
(17, 'M.C Gaston Dehesa Valencia', 'gaston', '6fda27264f8154abdb6ed31bd701a8e5', 'Docente', 1, '2022-07-22 05:47:22'),
(18, 'M.T Alberto Ramírez Regalado', 'alberto', '177dacb14b34103960ec27ba29bd686b', 'Docente', 1, '2022-07-22 05:48:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `carrera` varchar(60) NOT NULL,
  `cedula` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `titulo`, `nombre`, `carrera`, `cedula`) VALUES
(1, 'ING.', 'Aragón Reyes Vera Alexandro', 'Licenciatura como Ingeniero en Sistemas Computacionales', '2063827'),
(2, 'ING.', 'Blas Sanchez Mariano', 'Licenciatura como Ingeniero Electronico en Instrumentación', '3094685'),
(3, 'ING.', 'Castillejos Gonzalez Jose Manuel', 'Licenciatura en Informatica', '4380034'),
(4, 'M.I', 'Castillejos Toledo Maribel', 'Maestria en Informática', '11013822'),
(5, 'LIC.', 'Cernas Cruz Amelia Soledad', 'Licenciatura en Informatica', '3295510'),
(6, 'M.E', 'Cruz Reyna Maria Janeth', 'Maestria en Educación', '9787641'),
(8, 'ING.', 'Cuevas Vadivieso Manuel', 'Licenciatura en Ingenieria en Sistemas Computacionales', '6496127');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `serie_teclado` varchar(60) NOT NULL,
  `modelo_teclado` varchar(60) NOT NULL,
  `serie_mouse` varchar(60) NOT NULL,
  `modelo_mouse` varchar(60) NOT NULL,
  `serie_pantalla` varchar(60) NOT NULL,
  `modelo_pantalla` varchar(60) NOT NULL,
  `serie_cpu` varchar(60) NOT NULL,
  `modelo_cpu` varchar(60) NOT NULL,
  `adaptador_red` varchar(60) NOT NULL,
  `ram` varchar(60) NOT NULL,
  `procesador` varchar(255) NOT NULL,
  `disco_duro` varchar(60) NOT NULL,
  `cd_rom` varchar(60) NOT NULL,
  `observacion` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `id_sala`, `equipo`, `serie_teclado`, `modelo_teclado`, `serie_mouse`, `modelo_mouse`, `serie_pantalla`, `modelo_pantalla`, `serie_cpu`, `modelo_cpu`, `adaptador_red`, `ram`, `procesador`, `disco_duro`, `cd_rom`, `observacion`, `status`) VALUES
(1, 1, 'SI-M01', 'BEXJL0B5YA11KL', 'KU-1469', 'FCMHH0CVAA06GW', 'SM-2022', 'CNC7370JZN', 'HSTND-9371-A', 'MXL802225G', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1000', 'hp HLDS DVDRW GUD1N', '', ''),
(2, 1, 'SI-M02', 'BEXJL0BVB990WD', 'KU-1469', 'FCMHH0AHDA1MDG', 'MOFYOU', 'CNC73714TD', 'HSTND-9371-A', 'MXL80222YP', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1001', 'hp HLDS DVDRW GUD1N', '', ''),
(3, 1, 'SI-M03', 'BEXJL0BVB99055', 'KU-1469', 'FCMHH0CVAA06F5', 'SM-2022', 'CNC7370JZO', 'HSTND-9371-A', 'MXL8022256', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1002', 'hp HLDS DVDRW GUD1N', '', ''),
(4, 1, 'SI-M04', 'BEXJL0B5YA12YO', 'KU-1469', 'FCMHH0CVAA06GS', 'SM-2022', 'CNC7370K0H', 'HSTND-9371-A', 'MXL80222TF', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1003', 'hp HLDS DVDRW GUD1N', '', ''),
(5, 1, 'SI-M05', 'BEXJL0BVB992KC', 'KU-1469', 'FCMHH0CVAA04UB', 'SM-2022', 'CNC7370KO6', 'HSTND-9371-A', 'MXL80222OK', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1004', 'hp HLDS DVDRW GUD1N', '', ''),
(6, 1, 'SI-M06', 'BEXJL0B5YA130Y', 'KU-1469', 'FCMHH0AHDA1MDW', 'MOFYOU', 'CNC7461N0L', 'HSTND-9371-A', 'MXL80222QY', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1005', 'hp HLDS DVDRW GUD1N', '', ''),
(7, 1, 'SI-M07', 'BEXJL0B5YA11P5', 'KU-1469', 'FCMHH0CVAA06EI', 'SM-2022', 'CNC7370J7N', 'HSTND-9371-A', 'MXL80222Q8', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1006', 'hp HLDS DVDRW GUD1N', '', ''),
(8, 1, 'SI-M08', 'BEXJL0B5YA11PI', 'KU-1469', 'FCMHH0AHDA1MF4', 'MOFYOU', 'CNC7461NQK', 'HSTND-9371-A', 'MXL80222R5', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1007', 'hp HLDS DVDRW GUD1N', '', ''),
(9, 1, 'SI-M09', 'BEXJL0B5YA1313', 'KU-1469', 'FCMHH0CVAA06GB', 'SM-2022', 'CNC7461NQ5', 'HSTND-9371-A', 'MXL80222QG', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1008', 'hp HLDS DVDRW GUD1N', '', ''),
(10, 1, 'SI-M010', 'BEXJL0B5YA132U', 'KU-1469', 'FCMHH0CVAA06EP', 'SM-2022', 'CNC7461NP1', 'HSTND-9371-A', 'MXL8022254', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1009', 'hp HLDS DVDRW GUD1N', '', ''),
(11, 1, 'SI-M011', 'BEXJL0B5YA12Y1', 'KU-1469', 'FCMHH0CVAA06G9', 'SM-2022', 'CNC7461NQD', 'HSTND-9371-A', 'MXL80222VC', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1010', 'hp HLDS DVDRW GUD1N', '', ''),
(12, 1, 'SI-M012', 'BEXJL0BVB99058', 'KU-1469', 'FCMHH0AHDA1MCW', 'SM-2022', 'CNC7370JZ3', 'HSTND-9371-A', 'MXL80222T9', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1011', 'hp HLDS DVDRW GUD1N', '', ''),
(13, 1, 'SI-M013', 'BEXJL0B5YA12X5', 'KU-1469', 'FCMHH0CVAA06H6', 'SM-2022', 'CNC7370JMN', 'HSTND-9371-A', 'MXL80222T5', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1012', 'hp HLDS DVDRW GUD1N', '', ''),
(14, 1, 'SI-M014', 'BEXJL0B5YA10N3', 'KU-1469', 'FCMHH0CVAA04OL', 'SM-2022', 'CNC7461NPH', 'HSTND-9371-A', 'MXL80222XJ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1013', 'hp HLDS DVDRW GUD1N', '', ''),
(15, 1, 'SI-M015', 'BEXJL0BVB99059', 'KU-1469', 'FCMHH0CVAA06G0', 'SM-2022', 'CNC7370JTB', 'HSTND-9371-A', 'MXL80222WG', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1014', 'hp HLDS DVDRW GUD1N', '', ''),
(16, 1, 'SI-M016', 'BEXJL0B5YA11MC', 'KU-1469', 'FCMHH0AHDA1ME1', 'MOFYOU', 'CNC7461NQC', 'HSTND-9371-A', 'MXL80222V3', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1015', 'hp HLDS DVDRW GUD1N', '', ''),
(17, 1, 'SI-M017', 'BEXJL0B5YA11NA', 'KU-1469', 'FCMHH0CVAA04MP', 'SM-2022', 'CNC7370JY8', 'HSTND-9371-A', 'MXL80222S0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1016', 'hp HLDS DVDRW GUD1N', '', ''),
(18, 1, 'SI-M018', 'BEXJL0B5YA11Q1', 'KU-1469', 'FCMHH0CVAA06DP', 'SM-2022', 'CNC737145M', 'HSTND-9371-A', 'MXL80222WT', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1017', 'hp HLDS DVDRW GUD1N', '', ''),
(19, 1, 'SI-M019', 'BEXJL0B5YA11RA', 'KU-1469', 'FCMHH0CVAA06H2', 'SM-2022', 'CNC7370JM7', 'HSTND-9371-A', 'MXL80222YF', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1018', 'hp HLDS DVDRW GUD1N', '', ''),
(20, 1, 'SI-M020', 'BEXJL0B5YA12YH', 'KU-1469', 'FCMHH0AHDA1MDL', 'MOFYOU', 'CNC7461NQ1', 'HSTND-9371-A', 'MXL80222XJ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1019', 'hp HLDS DVDRW GUD1N', '', ''),
(21, 1, 'SI-M021', 'BEXJL0B5YA11LX', 'KU-1469', 'FCMHH0AHDA1ME3', 'MOFYOU', 'CNC7370KOM', 'HSTND-9371-A', 'MXL80222V1', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1020', 'hp HLDS DVDRW GUD1N', '', ''),
(22, 1, 'SI-M022', 'BEXJL0BVB99195', 'KU-1469', 'FCMHH0CVAA04N7', 'SM-2022', 'CNC728MKC', 'HSTND-9371-A', 'MXL80222W8', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1021', 'hp HLDS DVDRW GUD1N', '', ''),
(23, 1, 'SI-M023', 'BEXJL0B5YA1227', 'KU-1469', 'FCMHH0CVAA04OT', 'SM-2022', 'CNC7370JZR', 'HSTND-9371-A', 'MXL80222QZ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1022', 'hp HLDS DVDRW GUD1N', '', ''),
(24, 1, 'SI-M024', 'BEXJL0B5YA12YD', 'KU-1469', 'FCMHH0CVAA06GD', 'SM-2022', 'CNC7370JDX', 'HSTND-9371-A', 'MXL80222QQ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1023', 'hp HLDS DVDRW GUD1N', '', ''),
(25, 2, 'SC2-T01', 'BEXJL0B5YA12XH', 'KU-1469', 'FCMHH0CVAA06GR', 'SM-2022', 'CNC7461NR5', 'HSTND-9371-A', 'MXL80222T7', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1000', 'hp HLDS DVDRW GUD1N', '', ''),
(26, 2, 'SC2-T02', 'BEXJL0B5YA12YC', 'KU-1469', 'FCMHH0CVAA06ER', 'SM-2022', 'CNC7461NR4', 'HSTND-9371-A', 'MXL80222XC', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1001', 'hp HLDS DVDRW GUD1N', '', ''),
(27, 2, 'SC2-T03', 'BEXJL0B5YA11M0', 'KU-1469', 'FCMHH0AHDA1MDF', 'SM-2022', 'CNC7370JZQ', 'HSTND-9371-A', 'MXL80222TR', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1002', 'hp HLDS DVDRW GUD1N', '', ''),
(28, 2, 'SC2-T04', 'BEXJL0B5YA12YE', 'KU-1469', 'FCMHH0CVAA06Q1', 'SM-2022', 'CNC7370JZT', 'HSTND-9371-A', 'MXL80222YN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1003', 'hp HLDS DVDRW GUD1N', '', ''),
(29, 2, 'SC2-T05', 'BEXJL0B5YA1316', 'KU-1469', 'FCMHH0CVAA06ET', 'SM-2022', 'CNC7370JZM', 'HSTND-9371-A', 'MXL80222T8', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1004', 'hp HLDS DVDRW GUD1N', '', ''),
(30, 2, 'SC2-T06', 'BEXJL0B5YA130Z', 'KU-1469', 'FCMHH0CVAA06F4', 'SM-2022', 'CNC7370JZW', 'HSTND-9371-A', 'MXL80222R0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1005', 'hp HLDS DVDRW GUD1N', '', ''),
(31, 2, 'SC2-T07', 'BEXJL0B5YA11OC', 'KU-1469', 'FCMHH0AKZA26BC', 'SM-2022', 'CNC7461NR0', 'HSTND-9371-A', 'MXL80221GG', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1006', 'hp HLDS DVDRW GUD1N', '', ''),
(32, 2, 'SC2-T08', 'BEXJL0B5YA11PE', 'KU-1469', 'FCMHH0CVAA04OA', 'SM-2022', 'CNC7461NPK', 'HSTND-9371-A', 'MXL80222RN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1007', 'hp HLDS DVDRW GUD1N', '', ''),
(33, 2, 'SC2-T09', 'BEXJL0B5YA12Y9', 'KU-1469', 'FCMHH0CVAA05H3', 'SM-2022', 'CNC737145P', 'HSTND-9371-A', 'MXL80222Y1', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1008', 'hp HLDS DVDRW GUD1N', '', ''),
(34, 2, 'SC2-T010', 'BEXJL0B5YA11PQ', 'KU-1469', 'FCMHH0AHDA1MEW', 'MOFYOU', 'CNC7370K05', 'HSTND-9371-A', 'MXL80222QN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1009', 'hp HLDS DVDRW GUD1N', '', ''),
(35, 2, 'SC2-T011', 'BEXJL0B5YA11PK', 'KU-1469', 'FCMHH0CVAA04NZ', 'SM-2022', 'CNC7461PJ', 'HSTND-9371-A', 'MXL80222VW', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1010', 'hp HLDS DVDRW GUD1N', '', ''),
(36, 2, 'SC2-T012', 'BEXJL0B6YA11PP', 'KU-1469', 'FCMHH0CAHDAMF3', 'MOFYOU', 'CNC7370JZB', 'HSTND-9371-A', 'MXL80222XL', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1011', 'hp HLDS DVDRW GUD1N', '', ''),
(37, 2, 'SC2-T013', 'BEXJL0B5YA11PS', 'KU-1469', 'FCMHH0AHDA1MDR', 'MOFYOU', 'CNC7370JY6', 'HSTND-9371-A', 'MXL80222XK', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1012', 'hp HLDS DVDRW GUD1N', '', ''),
(38, 2, 'SC2-T014', 'BEXJL0B5YA11M1', 'KU-1469', 'FCMHH0AHDA1MDE', 'MOFYOU', 'CNC7461NQY', 'HSTND-9371-A', 'MXL80222RD', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1013', 'hp HLDS DVDRW GUD1N', '', ''),
(39, 2, 'SC2-T015', 'BEXJL0A9PA027P', 'PHOU', 'FCMHH0AHDA1L05', 'MOFYOU', 'CNC7461NQ4', 'HSTND-9371-A', 'MXL80222GT', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1014', 'hp HLDS DVDRW GUD1N', '', ''),
(40, 2, 'SC2-T016', 'BEXJL0B5YA11PN', 'KU-1469', 'FCMHH0AHDA1MEM', 'MOFYOU', 'CNC7370JZY', 'HSTND-9371-A', 'MXL80222XH', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1015', 'hp HLDS DVDRW GUD1N', '', ''),
(41, 2, 'SC2-T017', 'BEXJL0B5YA11NJ', 'KU-1469', 'FCMHH0CVAA07UD', 'SM-2022', 'CNC7370JLN', 'HSTND-9371-A', 'MXL80222YQ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1016', 'hp HLDS DVDRW GUD1N', '', ''),
(42, 2, 'SC2-T018', 'BEXJL0B5YA11PJ', 'KU-1469', 'FCMHH0AHDA1MD2', 'SM-2022', 'CNC7461NPZ', 'HSTND-9371-A', 'MXL80222VY', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1017', 'hp HLDS DVDRW GUD1N', '', ''),
(43, 2, 'SC2-T019', 'BEXJL0B5YA11MS', 'KU-1469', 'FCMHH0CVAA05FL', 'SM-2022', 'CNC7461NPS', 'HSTND-9371-A', 'MXL80222XR', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1018', 'hp HLDS DVDRW GUD1N', '', ''),
(44, 2, 'SC2-T020', 'BEXJL0BVB99K9', 'KU-1469', 'FCMHH0CVAA04P6', 'SM-2022', 'CNC7370JZC', 'HSTND-9371-A', 'MXL80222QL', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1019', 'hp HLDS DVDRW GUD1N', '', ''),
(45, 2, 'SC2-T021', 'BEXJL0BVB990Z9', 'KU-1469', 'FCMHH0AHDA1MCO', 'MOFYOU', 'CNC73714T3', 'HSTND-9371-A', 'MXL80222TP', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1020', 'hp HLDS DVDRW GUD1N', '', ''),
(46, 2, 'SC2-T022', 'BEXJL0B5YA11R6', 'KU-1469', 'FCMHH0AHDA1ME8', 'MOFYOU', 'CNC7370JML', 'HSTND-9371-A', 'MXL80222WH', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1021', 'hp HLDS DVDRW GUD1N', '', ''),
(47, 2, 'SC2-T023', 'BEXJL0B5YA1293', 'KU-1469', 'FCMHH0CVAA06G2', 'SM-2022', 'CNC7461N09', 'HSTND-9371-A', 'MXL80222VB', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1022', 'hp HLDS DVDRW GUD1N', '', ''),
(48, 2, 'SC2-T024', 'BEXJL0BVB990X5', 'KU-1469', 'FCMHH0CVAA04U3', 'SM-2022', 'CNC7370JLJ', 'HSTND-9371-A', 'MXL8022255', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1023', 'hp HLDS DVDRW GUD1N', '', ''),
(49, 2, 'SC2-T025', 'BEXJL0B5YA11NQ', 'KU-1469', 'FCMHH0CVAA06G7', 'SM-2022', 'CNC7370JCM', 'HSTND-9371-A', 'MXL8022201', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1024', 'hp HLDS DVDRW GUD1N', '', ''),
(50, 2, 'SC2-T026', 'BEXJL0B5YA11QE', 'KU-1469', 'FCMHH0CVAA06EV', 'SM-2022', 'CNC7461NNG', 'HSTND-9371-A', 'MXL80222WP', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1025', 'hp HLDS DVDRW GUD1N', '', ''),
(51, 2, 'SC2-T027', 'BEXJL0B5YA11QD', 'KU-1469', 'FCMHH0AHDA1MD8', 'SM-2022', 'CNC7370JMR', 'HSTND-9371-A', 'MXL80222RY', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1026', 'hp HLDS DVDRW GUD1N', '', ''),
(52, 2, 'SC2-T028', 'BEXJL0B5YA11RJ', 'KU-1469', 'FCMHH0CVAA06FZ', 'SM-2022', 'CNC7370JMP', 'HSTND-9371-A', 'MXL80222R9', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1027', 'hp HLDS DVDRW GUD1N', '', ''),
(53, 2, 'SC2-T029', 'BEXJL0B5YA11R9', 'KU-1469', 'FCMHH0CVAA05GT', 'SM-2022', 'CNC7461NDY', 'HSTND-9371-A', 'MXL80222Y0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1028', 'hp HLDS DVDRW GUD1N', '', ''),
(54, 2, 'SC2-T030', 'BEXJL0B5YA11MX', 'KU-1469', 'FCMHH0CVAA06EV', 'SM-2022', 'CNC7461NQE', 'HSTND-9371-A', 'MXL80222QD', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1029', 'hp HLDS DVDRW GUD1N', '', ''),
(55, 2, 'SC2-T031', 'BEXJL0B5YA11MH', 'KU-1469', 'FCMHH0AHDA1MDJ', 'SM-2022', 'CNC7370JMV', 'HSTND-9371-A', 'MXL80222WM', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1030', 'hp HLDS DVDRW GUD1N', '', ''),
(56, 2, 'SC2-T032', 'BEXJL0B5YA11QV', 'KU-1469', 'FCMHH0CVAA05GK', 'SM-2022', 'CNC7461N8T', 'HSTND-9371-A', 'MXL8021YT8', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1031', 'hp HLDS DVDRW GUD1N', '', ''),
(57, 2, 'SC2-T033', 'BEXJL0B5YA11NF', 'KU-1469', 'FCMHH0CVAA06H4', 'SM-2022', 'CNC7370JMW', 'HSTND-9371-A', 'MXL80222W3', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1032', 'hp HLDS DVDRW GUD1N', '', ''),
(58, 2, 'SC2-T034', 'BEXJL0B5YA11LP', 'KU-1469', 'FCMHH0CVAA06FI', 'SM-2022', 'CNC7370JMS', 'HSTND-9371-A', 'MXL80222T0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1033', 'hp HLDS DVDRW GUD1N', '', ''),
(59, 2, 'SC2-T035', 'BEXJL0B5YA11RC', 'KU-1469', 'FCMHH0CVAA04ND', 'SM-2022', 'CNC7370JMK', 'HSTND-9371-A', 'MXL80222VL', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1034', 'hp HLDS DVDRW GUD1N', '', ''),
(60, 3, 'SC3-T01', 'BEXL0B5YA11M2', 'KU-1469', 'FCMHH0AHDA1MDS', 'MOFYUO', 'CNC7370JZ5', 'HSTND-9371-A', 'MXL80222RU', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1000', 'hp HLDS DVDRW GUD1N', '', ''),
(61, 3, 'SC3-T02', 'BEXJL0B5YA12YG', 'KU-1469', 'FCMHH0CVAA06G8', 'SM-2022', 'CNC7970JZ4', 'HSTND-9371-A', 'MXL80222XO', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1001', 'hp HLDS DVDRW GUD1N', '', ''),
(62, 3, 'SC3-T03', 'BEXJL0B5YA12YF', 'KU-1469', 'FCMHH0AHDA1MDD', 'MOFYUO', 'CNC7461NB3', 'HSTND-9371-A', 'MXL80222XB', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1002', 'hp HLDS DVDRW GUD1N', '', ''),
(63, 3, 'SC3-T04', 'BEXJL0BVB990SC', 'KU-1469', 'FCMHH0CVAA06GA', 'SM-2022', 'CNC7461NQH', 'HSTND-9371-A', 'MXL80222VP', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1003', 'hp HLDS DVDRW GUD1N', '', ''),
(64, 3, 'SC3-T05', 'BEXJL0B5YA11L1', 'KU-1469', 'FCMHH0CVAA06FB', 'SM-2022', 'CNC7461NQO', 'HSTND-9371-A', 'MXL80222RQ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1004', 'hp HLDS DVDRW GUD1N', '', ''),
(65, 3, 'SC3-T06', 'BEXJL0B5YA1314', 'KU-1469', 'FCMHH0AHDA1MNK', 'SM-2022', 'CNC7461NQG', 'HSTND-9371-A', 'MXL80222VN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1005', 'hp HLDS DVDRW GUD1N', '', ''),
(66, 3, 'SC3-T07', 'BEXJL0A9PA027Q', 'PH0U', 'FCMHH0AHDA1MCT', 'MOFYUO', 'CNC7370JZH', 'HSTND-9371-A', 'MXL80222SF', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1006', 'hp HLDS DVDRW GUD1N', '', ''),
(67, 3, 'SC3-T08', 'BEXJL0BVB990S2', 'KU-1469', 'FCMHH0CVAA06GP', 'SM-2022', 'CNC7370JZJ', 'HSTND-9371-A', 'MXL80222VT', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1007', 'hp HLDS DVDRW GUD1N', '', ''),
(68, 3, 'SC3-T09', 'BEXJL0B5YA12YA', 'KU-1469', 'FCMHH0CVAA06GI', 'SM-2022', 'CNC7370JZG', 'HSTND-9371-A', 'MXL80222WZ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1008', 'hp HLDS DVDRW GUD1N', '', ''),
(69, 3, 'SC3-T010', 'BEXJL0B5YA11QA', 'KU-1469', 'FCMHH0CVAA06GL', 'SM-2022', 'CNC7461NPR', 'HSTND-9371-A', 'MXL80222VF', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1009', 'hp HLDS DVDRW GUD1N', '', ''),
(70, 3, 'SC3-T011', 'BEXJL0B5YA1310', 'KU-1469', 'FCMHH0CVAA06EQ', 'SM-2022', 'CNC7461NRZ', 'HSTND-9371-A', 'MXL80222QT', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1010', 'hp HLDS DVDRW GUD1N', '', ''),
(71, 3, 'SC3-T012', 'BEXJL0B5YA11MF', 'KU-1469', 'FCMHH0AHDA1MDV', 'MOFYUO', 'CNC7370JZP', 'HSTND-9371-A', 'MXL80222V0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1011', 'hp HLDS DVDRW GUD1N', '', ''),
(72, 3, 'SC3-T013', 'BEXJL0B5YA11K2', 'KU-1469', 'FCMHH0CVAA06FV', 'SM-2022', 'CNC7370JZS', 'HSTND-9371-A', 'MXL80222XW', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1012', 'hp HLDS DVDRW GUD1N', '', ''),
(73, 3, 'SC3-T014', 'BEXJL0B5YA11N3', 'KU-1469', 'FCMHH0CVAA06FP', 'SM-2022', 'CNC7370JHZ', 'HSTND-9371-A', 'MXL80222QB', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1013', 'hp HLDS DVDRW GUD1N', '', ''),
(74, 3, 'SC3-T015', 'BEXJL0B5YA11LT', 'KU-1469', 'FCMHH0AHDA1L0C', 'MOFYUO', 'CNC7461NQJ', 'HSTND-9371-A', 'MXL80221GN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1014', 'hp HLDS DVDRW GUD1N', '', ''),
(75, 3, 'SC3-T016', 'BEXJL0B5YA11KB', 'KU-1469', 'FCMHH0CVAA06FW', 'SM-2022', 'CNC7370KOV', 'HSTND-9371-A', 'MXL80222ST', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1015', 'hp HLDS DVDRW GUD1N', '', ''),
(76, 3, 'SC3-T017', 'BEXJL0B5YA1311', 'KU-1469', 'FCMHH0AHDA1MCU', 'MOFYUO', 'CNC7461NQM', 'HSTND-9371-A', 'MXL80222TQ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1016', 'hp HLDS DVDRW GUD1N', '', ''),
(77, 3, 'SC3-T018', 'BEXJL0B5YA10N4', 'KU-1469', 'FCMHH0AHDA1MMH', 'MOFYUO', 'CNC7461NQ8', 'HSTND-9371-A', 'MXL80222VX', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1017', 'hp HLDS DVDRW GUD1N', '', ''),
(78, 3, 'SC3-T019', 'BEXJL0B5YA132W', 'KU-1469', 'FCMHH0CVAA06GV', 'SM-2022', 'CNC7370JKY', 'HSTND-9371-A', 'MXL80222WC', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1018', 'hp HLDS DVDRW GUD1N', '', ''),
(79, 3, 'SC3-T020', 'BEXJL0B5YA11MN', 'KU-1469', 'FCMHH0CVAA06F6', 'SM-2022', 'CNC7370JMO', 'HSTND-9371-A', 'MXL80222TB', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1019', 'hp HLDS DVDRW GUD1N', '', ''),
(80, 3, 'SC3-T021', 'BEXJL0B5YA11K4', 'KU-1469', 'FCMHH0AHDA1MD9', 'MOFYUO', 'CNC7370JMB', 'HSTND-9371-A', 'MXL80222Y7', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1020', 'hp HLDS DVDRW GUD1N', '', ''),
(81, 3, 'SC3-T022', 'BEXJL0B5YA11PW', 'KU-1469', 'FCMHH0CVAA06FA', 'SM-2022', 'CNC7370JMH', 'HSTND-9371-A', 'MXL80222S6', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1021', 'hp HLDS DVDRW GUD1N', '', ''),
(82, 3, 'SC3-T023', 'BEXJL0B5YA11KC', 'KU-1469', 'FCMHH0AHDA1MEI', 'MOFYUO', 'CNC7370JG3', 'HSTND-9371-A', 'MXL80222WV', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1022', 'hp HLDS DVDRW GUD1N', '', ''),
(83, 3, 'SC3-T024', 'BEXJL0B5YA12YB', 'KU-1469', 'FCMHH0CVAA06EX', 'SM-2022', 'CNC7370JM8', 'HSTND-9371-A', 'MXL80222SD', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1023', 'hp HLDS DVDRW GUD1N', '', ''),
(84, 3, 'SC3-T025', 'BEXJL0B5YA11ME', 'KU-1469', 'FCMHH0CVAA06F9', 'SM-2022', 'CNC7370JMG', 'HSTND-9371-A', 'MXL80222W0', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1024', 'hp HLDS DVDRW GUD1N', '', ''),
(85, 3, 'SC3-T026', 'BEXJL0B5YA11MG', 'KU-1469', 'FCMHH0CVAA04LO', 'SM-2022', 'CNC7370JMF', 'HSTND-9371-A', 'MXL80222VZ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1025', 'hp HLDS DVDRW GUD1N', '', ''),
(86, 3, 'SC3-T027', 'BEXJL0B5YA11P9', 'KU-1469', 'FCMHH0CVAA06FC', 'SM-2022', 'CNC7370JLP', 'HSTND-9371-A', 'MXL80222XQ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1026', 'hp HLDS DVDRW GUD1N', '', ''),
(87, 3, 'SC3-T028', 'BEXJL0B5YA12YN', 'KU-1469', 'FCMHH0CVAA06F3', 'SM-2022', 'CNC7370JM4', 'HSTND-9371-A', 'MXL80222XZ', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1027', 'hp HLDS DVDRW GUD1N', '', ''),
(88, 3, 'SC3-T029', 'BEXJL0B5YA11RE', 'KU-1469', 'FCMHH0CVAA06GO', 'SM-2022', 'CNC7370JLR', 'HSTND-9371-A', 'MXL80222QS', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1028', 'hp HLDS DVDRW GUD1N', '', ''),
(89, 3, 'SC3-T030', 'BEXJL0B5YA11LL', 'KU-1469', 'FCMHH0AHDA1MDT', 'MOFYUO', 'CNC7370JMY', 'HSTND-9371-A', 'MXL80222WN', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1029', 'hp HLDS DVDRW GUD1N', '', ''),
(90, 3, 'SC3-T031', 'BEXJL0BVB990WR', 'KU-1469', 'FCMHH0CVAA2LU', 'SM-2022', 'CNC7461NPP', 'HSTND-9371-A', 'MXL80222WY', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1030', 'hp HLDS DVDRW GUD1N', '', ''),
(91, 3, 'SC3-T032', 'BEXJL0BVB99I9B', 'KU-1469', 'FCMHH0CVAA04OM', 'SM-2022', 'CNC7370KOY', 'HSTND-9371-A', 'MXL80222RS', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1031', 'hp HLDS DVDRW GUD1N', '', ''),
(92, 3, 'SC3-T033', 'BEXJL0B5YA11N9', 'KU-1469', 'FCMHH0CVAA06H8', 'SM-2022', 'CNC7370JLY', 'HSTND-9371-A', 'MXL80222TT', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1032', 'hp HLDS DVDRW GUD1N', '', ''),
(93, 3, 'SC3-T034', 'BEXJL0B5YA11MB', 'KU-1469', 'FCMHH0CVAA04NM', 'SM-2022', 'CNC7370JKX', 'HSTND-9371-A', 'MXL80222YG', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1033', 'hp HLDS DVDRW GUD1N', '', ''),
(94, 3, 'SC3-T035', 'BEXJL0B5YA11RF', 'KU-1469', 'FCMHH0CVAA04UC', 'SM-2022', 'CNC7370JZK', 'HSTND-9371-A', 'MXL80222R2', 'W4Q25AV#164', 'TP-Link Wireless PCI Express Adapter', '8GB', 'AMD PRO A10-9700 R7, 10 COMPUTE CORE 4C+6G  3.50 GHz', 'TOSHIBA DT01ACA1034', 'hp HLDS DVDRW GUD1N', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `dia` varchar(60) NOT NULL,
  `hora_inicio` varchar(20) NOT NULL,
  `hora_fin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `id_materia`, `id_sala`, `id_profesor`, `dia`, `hora_inicio`, `hora_fin`) VALUES
(1, 1, 1, 16, 'Miercoles', '08:00', '08:30'),
(2, 2, 1, 16, 'Miercoles', '10:00', '10:30'),
(3, 4, 1, 15, 'Miercoles', '11:00', '11:30'),
(4, 6, 1, 15, 'Miercoles', '12:00', '12:30'),
(5, 7, 1, 16, 'Miercoles', '13:00', '13:30'),
(6, 8, 1, 15, 'Miercoles', '16:00', '16:30'),
(7, 9, 1, 15, 'Miercoles', '17:00', '17:30'),
(8, 5, 1, 15, 'Jueves', '11:00', '11:30'),
(9, 3, 1, 6, 'Jueves', '12:00', '12:30'),
(10, 3, 1, 6, 'Jueves', '16:00', '16:30'),
(11, 3, 1, 6, 'Jueves', '17:00', '17:30'),
(12, 3, 1, 6, 'Lunes', '11:00', '11:30'),
(13, 3, 1, 6, 'Martes', '11:00', '11:30'),
(14, 3, 1, 6, 'Lunes', '12:00', '12:30'),
(15, 3, 1, 6, 'Martes', '12:00', '12:30'),
(16, 3, 1, 6, 'Lunes', '16:00', '16:30'),
(17, 3, 1, 6, 'Martes', '16:00', '16:30'),
(18, 3, 1, 6, 'Lunes', '17:00', '17:30'),
(19, 3, 1, 6, 'Martes', '17:00', '17:30'),
(20, 3, 2, 6, 'Lunes', '11:00', '11:30'),
(21, 3, 2, 6, 'Martes', '11:00', '11:30'),
(22, 3, 2, 6, 'Miercoles', '11:00', '11:30'),
(23, 3, 2, 6, 'Jueves', '11:00', '11:30'),
(24, 10, 2, 6, 'Lunes', '15:00', '15:30'),
(25, 10, 2, 6, 'Martes', '15:00', '15:30'),
(26, 10, 2, 6, 'Lunes', '16:00', '16:30'),
(27, 10, 2, 6, 'Martes', '16:00', '16:30'),
(28, 11, 2, 16, 'Miercoles', '08:00', '08:30'),
(29, 12, 2, 16, 'Miercoles', '09:00', '09:30'),
(30, 13, 2, 16, 'Miercoles', '12:00', '12:30'),
(31, 14, 2, 16, 'Miercoles', '13:00', '13:30'),
(32, 11, 2, 16, 'Jueves', '08:00', '08:30'),
(33, 12, 2, 16, 'Jueves', '09:00', '09:30'),
(34, 3, 3, 6, 'Lunes', '09:00', '09:30'),
(35, 3, 3, 6, 'Lunes', '10:00', '10:30'),
(36, 3, 3, 6, 'Lunes', '11:00', '11:30'),
(37, 15, 3, 6, 'Lunes', '12:00', '12:30'),
(38, 16, 3, 6, 'Lunes', '14:00', '14:30'),
(39, 16, 3, 6, 'Lunes', '15:00', '15:30'),
(40, 16, 3, 6, 'Lunes', '16:00', '16:30'),
(41, 3, 3, 6, 'Martes', '09:00', '09:30'),
(42, 3, 3, 6, 'Martes', '10:00', '10:30'),
(43, 3, 3, 6, 'Martes', '11:00', '11:30'),
(44, 15, 3, 6, 'Martes', '12:00', '12:30'),
(45, 18, 3, 18, 'Miercoles', '08:00', '08:30'),
(46, 19, 3, 18, 'Miercoles', '09:00', '09:30'),
(47, 19, 3, 18, 'Miercoles', '10:00', '10:30'),
(48, 20, 3, 18, 'Miercoles', '11:00', '11:30'),
(49, 15, 3, 6, 'Miercoles', '13:00', '13:30'),
(50, 18, 3, 18, 'Jueves', '08:00', '08:30'),
(51, 19, 3, 18, 'Jueves', '09:00', '09:30'),
(52, 21, 3, 18, 'Jueves', '10:00', '10:30'),
(53, 20, 3, 18, 'Jueves', '11:00', '11:30'),
(54, 15, 3, 6, 'Jueves', '13:00', '13:30'),
(55, 19, 3, 18, 'Lunes', '08:00', '08:30'),
(56, 19, 3, 17, 'Martes', '08:00', '08:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`) VALUES
(1, 'Sistemas Operativos 3O'),
(2, 'Sistemas Operativos 4S'),
(3, 'Sistemas'),
(4, 'POO 2X seg1'),
(5, 'POO 2X seg2'),
(6, 'POO 2O'),
(7, 'Sistemas Operativos 4X'),
(8, 'TOP.AVZ.PROG 4O'),
(9, 'TOP.AVZ.PROG 4X'),
(10, 'Industrial'),
(11, 'POO 2S'),
(12, 'TOP.AVZ.PROG MOVIL 8S'),
(13, 'TOP.AVZ.PROG MOVIL 8O'),
(14, 'TOP.AVZ.PROG MOVIL 8X'),
(15, 'Gestión'),
(16, 'Simulación'),
(17, 'Programación Básica '),
(18, 'Machine Learning 7O'),
(19, 'Inteligencia Web 8O'),
(20, 'Inteligencia Web 8S'),
(21, 'Inteligencia Artificial 8O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_fallas`
--

CREATE TABLE `reportes_fallas` (
  `id` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reporte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_sala` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` varchar(60) NOT NULL,
  `hora_fin` varchar(60) NOT NULL,
  `observacion` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id` int(11) NOT NULL,
  `sala` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `horario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id`, `sala`, `status`, `horario`) VALUES
(1, 'Sala 1', 'Disponible', 0),
(2, 'Sala 2', 'Disponible', 0),
(3, 'Sala 3', 'Disponible', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reportes_fallas`
--
ALTER TABLE `reportes_fallas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `reportes_fallas`
--
ALTER TABLE `reportes_fallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
