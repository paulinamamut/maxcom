-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 13, 2015 at 02:42 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maxcom_adq`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
`ID` int(10) NOT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `rfc` varchar(12) DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `puesto` enum('Encargado de TI','Gerente','Director') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel_fijo` int(10) DEFAULT NULL,
  `celular` int(20) NOT NULL,
  `estado` enum('Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Coahuila','Colima','Distrito Federal','Durango','Estado de México','Guanajuato','Guerrero','Hidalgo','Jalisco','Michoacán','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro','Quintana Roo','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz','Yucatán','Zacatecas') DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `version` varchar(10) DEFAULT NULL,
  `campaign` varchar(10) DEFAULT NULL,
  `client_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;