-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Dez-2016 às 14:31
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_equipbarras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_equip`
--

CREATE TABLE `tab_equip` (
  `id_equip` int(11) NOT NULL,
  `nome_equip` varchar(200) NOT NULL,
  `descricao_equip` text NOT NULL,
  `cod_barras_equip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_equip`
--

INSERT INTO `tab_equip` (`id_equip`, `nome_equip`, `descricao_equip`, `cod_barras_equip`) VALUES
(1, 'teste', 'teste 1', '7438626435247802'),
(2, 'borracha', 'apaga muito bem', '7668542366445922');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_equip`
--
ALTER TABLE `tab_equip`
  ADD PRIMARY KEY (`id_equip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_equip`
--
ALTER TABLE `tab_equip`
  MODIFY `id_equip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
