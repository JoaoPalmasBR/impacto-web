-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jun-2017 às 17:58
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impactotransportes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avulsas`
--

CREATE TABLE `avulsas` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(200) DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `nome_recebedor` varchar(200) DEFAULT NULL,
  `nota_fiscal` varchar(200) DEFAULT NULL,
  `conhecimento_aereo` varchar(200) DEFAULT NULL,
  `conhecimento_rodoviario` varchar(200) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `qtd_volume` int(11) DEFAULT NULL,
  `valor_a_receber` double DEFAULT NULL,
  `valor_pago` double DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `entregador` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avulsas`
--
ALTER TABLE `avulsas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avulsas`
--
ALTER TABLE `avulsas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `avulsas` (`id`, `nome_cliente`, `data_entrega`, `nome_recebedor`, `nota_fiscal`, `conhecimento_aereo`, `conhecimento_rodoviario`, `peso`, `qtd_volume`, `valor_a_receber`, `valor_pago`, `cidade`, `estado`, `entregador`) VALUES (NULL, 'Um', '2017-06-13', 'Um', 'Um', 'Um', 'Um', '50.5', '2', '600', '450', 'Palmas', 'TO', 'Joao');
ALTER TABLE `avulsas` ADD `campanha` VARCHAR(200) NULL AFTER `nome_recebedor`;