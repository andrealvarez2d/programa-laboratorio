-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 04:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `citaID` int(11) NOT NULL,
  `pacienteID` int(11) DEFAULT NULL,
  `tipoExamen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaCita` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

CREATE TABLE `paciente` (
  `pacienteID` int(11) NOT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombreCompleto` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `sexo` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`pacienteID`, `cedula`, `nombreCompleto`, `edad`, `sexo`, `telefono`, `correo`) VALUES
(1, '27847021', 'Andrea Alvarez', 22, 'F', '04246728290', 'abaj2099@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resultado_examen`
--

CREATE TABLE `resultado_examen` (
  `examenID` int(11) NOT NULL,
  `citaID` int(11) DEFAULT NULL,
  `resultados` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuarioID` int(11) NOT NULL,
  `cedula` varchar(8) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombreCompleto` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `cedula`, `nombreCompleto`, `telefono`, `correo`, `password`) VALUES
(3, '27847021', 'Andrea Alvarez', '04246728290', 'alvarez.andreabeatriz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`citaID`),
  ADD KEY `pacienteID` (`pacienteID`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`pacienteID`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indexes for table `resultado_examen`
--
ALTER TABLE `resultado_examen`
  ADD PRIMARY KEY (`examenID`),
  ADD KEY `citaID` (`citaID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `citaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `pacienteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resultado_examen`
--
ALTER TABLE `resultado_examen`
  MODIFY `examenID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`pacienteID`) REFERENCES `paciente` (`pacienteID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resultado_examen`
--
ALTER TABLE `resultado_examen`
  ADD CONSTRAINT `resultado_examen_ibfk_1` FOREIGN KEY (`citaID`) REFERENCES `cita` (`citaID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
