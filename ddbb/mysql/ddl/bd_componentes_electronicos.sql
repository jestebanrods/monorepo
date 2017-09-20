-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-11-2016 a las 19:53:31
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
  `usuario` varchar(15) NOT NULL,
  `contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`usuario`, `contraseña`) VALUES
('jossiejers', '123456789'),
('jers.28', 'jossiejers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electronics_components`
--

CREATE TABLE IF NOT EXISTS `electronics_components` (
  `ID` int(2) DEFAULT NULL,
  `Componentes` varchar(29) DEFAULT NULL,
  `Cantidad` int(2) DEFAULT NULL,
  `Encapsulado` varchar(8) DEFAULT NULL,
  `Tipo` varchar(10) DEFAULT NULL,
  `Descripción` varchar(68) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `electronics_components`
--

INSERT INTO `electronics_components` (`ID`, `Componentes`, `Cantidad`, `Encapsulado`, `Tipo`, `Descripción`) VALUES
(1, 'OPA4131PA', 5, 'DIP-14', 'Analógico', 'General-Purpose JFET Input Quad Operational Amplifier'),
(2, 'TL084CN', 1, 'DIP-14', 'Analógico', 'General-Purpose JFET Input Quad Operational Amplifier'),
(3, 'CD4007CN', 2, 'DIP-14', 'Analógico', 'Dual Complementary Pair Plus Inverter MOSFET'),
(4, 'HCF4007UBE', 3, 'DIP-14', 'Analógico', 'Dual Complementary Pair Plus Inverter MOSFET'),
(5, 'INA125P', 4, 'DIP-16', 'Analógico', 'Instrumentation Amplifier With Precision Voltage Reference'),
(6, 'DB105', 1, 'DIP-4', 'Analógico', 'Singel Phase 1A Bridge Rectifiers'),
(7, 'MOC3041', 1, 'DIP-6', 'Analógico', 'Zero-Cross Optoisolator Triac Driver Output'),
(8, 'LM311N', 4, 'DIP-8', 'Analógico', 'Single Comparator'),
(9, 'LF353P', 3, 'DIP-8', 'Analógico', 'Wide-Bandwidth JFET-Input Dual Operational Amplifier'),
(10, 'UA741CN', 6, 'DIP-8', 'Analógico', 'General-purpose single operational amplifier'),
(11, 'TL082CP', 10, 'DIP-8', 'Analógico', 'Wide Bandwidth Dual JFET Input Dual Operational Amplifier'),
(12, 'OPA27GP', 1, 'DIP-8', 'Analógico', 'Ultra-Low Noise, Precision Operational Amplifier'),
(13, 'INA128P', 1, 'DIP-8', 'Analógico', 'Precision Low Power Instrumentation Amplifier'),
(14, 'INA129P', 1, 'DIP-8', 'Analógico', 'Precision Low Power Instrumentation Amplifier'),
(15, 'Crystal Oscillator 16MHz', 2, 'HC-49/U', 'Analógico', 'Crystal Oscillator'),
(16, 'Crystal Oscillator 16,9344MHz', 1, 'HC-49/US', 'Analógico', 'Crystal Oscillator'),
(17, 'Crystal Oscillator 20MHz', 2, 'HC-49/US', 'Analógico', 'Crystal Oscillator'),
(18, 'INA115AU', 2, 'SOL-16', 'Analógico', 'Precision Instrumentation Amplifier'),
(19, 'INA115BU', 1, 'SOL-16', 'Analógico', 'Precision Instrumentation Amplifier'),
(20, 'TIP42C', 2, 'TO-220', 'Analógico', 'PNP Epitaxial Silicon Transistor'),
(21, 'TIP41C', 5, 'TO-220', 'Analógico', 'NPN Complementary Power Transistors'),
(22, 'TIP31C', 1, 'TO-220', 'Analógico', 'NPN Epitaxial Silicon Transistor'),
(23, 'IRF740', 1, 'TO-220', 'Analógico', 'Power N-Channel MOSFET'),
(24, 'BT137', 1, 'TO-220', 'Analógico', 'Triac'),
(25, 'OPA452T', 1, 'TO-220', 'Analógico', 'Power Operational Amplifier 80V-50mA'),
(26, 'OPA547T', 1, 'TO-220', 'Analógico', 'Power Operational Amplifier 60V-500mA'),
(27, '24M05', 1, 'TO-220', 'Analógico', 'Voltage Regulator 5V-1A'),
(28, 'LM7805', 2, 'TO-220', 'Analógico', 'Voltage Regulator 5V-1A'),
(29, 'LM317T', 1, 'TO-220', 'Analógico', 'Adjustable Regulator'),
(30, 'LM7812', 1, 'TO-220', 'Analógico', 'Voltage Regulator 12V-1A'),
(31, '2N3906', 18, 'TO-92', 'Analógico', 'PNP General Purpose Transistor'),
(32, '2N2222A', 3, 'TO-92', 'Analógico', 'Small Signal Switching NPN Transistor'),
(33, '2N3904', 4, 'TO-92', 'Analógico', 'NPN General Purpose Transistor'),
(34, 'BC548', 1, 'TO-92', 'Analógico', 'NPN General Purpose Transistor'),
(35, 'K30A', 1, 'TO-92', 'Analógico', 'N-Channel JFET General Purpose'),
(36, 'DM74121N', 1, 'DIP-14', 'Digital', 'Monostable Multivibrators With Schmitt Trigger Input'),
(37, 'SN74LS86AN', 1, 'DIP-14', 'Digital', 'Quadruple 2-Input Exclusive OR Gates'),
(38, 'SN74LS47N', 2, 'DIP-16', 'Digital', 'BCD To 7 Segment Decoder'),
(39, 'SN74LS153N', 1, 'DIP-16', 'Digital', 'Dual 4 To 1 Line Selectors Multiplexers'),
(40, 'SN74LS74AP', 1, 'DIP-16', 'Digital', 'Dual D Types Positive Edge Triggered Flip Flop With Preset And Clear'),
(41, 'SN74LS165N', 1, 'DIP-16', 'Digital', 'Parallel-Serial 8-Bit Shift Registers'),
(42, 'SN74LS90N', 3, 'DIP-16', 'Digital', 'Decade, Divide By Twelve And Binary Counters'),
(43, 'SN74LS147N', 1, 'DIP-16', 'Digital', '10 To 4 Line & 8 To 3 Line Priority Encoders'),
(44, 'HD74LS00P', 1, 'DIP-16', 'Digital', 'Quadruple 2-Input Positive NAND Gates'),
(45, 'HD74LS48P', 1, 'DIP-16', 'Digital', 'BCD To 7 Segment Decoder'),
(46, 'HD74LS04P', 1, 'DIP-16', 'Digital', 'Hex Inverters Gates'),
(47, 'HD74LS32P', 1, 'DIP-16', 'Digital', 'Quadruple 2-Input Positive OR Gates'),
(48, 'HD74LS08P', 2, 'DIP-16', 'Digital', 'Quadruple 2-Input Positive AND Gates'),
(49, 'HD74HC138P', 1, 'DIP-16', 'Digital', '3 To 8 Line Decoder Multiplexer'),
(50, 'SN74LS47P', 2, 'DIP-16', 'Digital', 'BCD To 7 Segment Decoder'),
(51, 'TLC0820ACN', 1, 'DIP-20', 'Digital', 'High Speed 8-Bit ADC'),
(52, 'NE555', 1, 'DIP-8', 'Digital', 'Precision Timers'),
(53, 'NE555P', 1, 'DIP-8', 'Digital', 'Precision Timers'),
(54, 'NE555N', 1, 'DIP-8', 'Digital', 'Precision Timers'),
(55, 'PIC18F2550', 2, 'Digital', 'DIP-28', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
