-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jun-2015 às 19:32
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetoaca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `treino`
--

CREATE TABLE IF NOT EXISTS `treino` (
`idtreino` int(5) NOT NULL,
  `nomexe1` varchar(200) DEFAULT NULL,
  `series1` int(2) DEFAULT NULL,
  `rep1` int(2) DEFAULT NULL,
  `nomexe2` varchar(200) DEFAULT NULL,
  `series2` int(2) DEFAULT NULL,
  `rep2` int(2) DEFAULT NULL,
  `nomexe3` varchar(200) DEFAULT NULL,
  `series3` int(2) DEFAULT NULL,
  `rep3` int(2) DEFAULT NULL,
  `nomexe4` varchar(200) DEFAULT NULL,
  `series4` int(2) DEFAULT NULL,
  `rep4` int(2) DEFAULT NULL,
  `nomexe5` varchar(200) DEFAULT NULL,
  `series5` int(2) DEFAULT NULL,
  `rep5` int(2) DEFAULT NULL,
  `nomexe6` varchar(200) DEFAULT NULL,
  `series6` int(2) DEFAULT NULL,
  `rep6` int(2) DEFAULT NULL,
  `nomexe7` varchar(200) DEFAULT NULL,
  `series7` int(2) DEFAULT NULL,
  `rep7` int(2) DEFAULT NULL,
  `nomexe8` varchar(200) DEFAULT NULL,
  `series8` int(2) DEFAULT NULL,
  `rep8` int(2) DEFAULT NULL,
  `nomexe9` varchar(200) DEFAULT NULL,
  `series9` int(2) DEFAULT NULL,
  `rep9` int(2) DEFAULT NULL,
  `nomexe10` varchar(200) DEFAULT NULL,
  `series10` int(2) DEFAULT NULL,
  `rep10` int(2) DEFAULT NULL,
  `nomexe11` varchar(200) DEFAULT NULL,
  `series11` int(2) DEFAULT NULL,
  `rep11` int(2) DEFAULT NULL,
  `nomexe12` varchar(200) DEFAULT NULL,
  `series12` int(2) DEFAULT NULL,
  `rep12` int(2) DEFAULT NULL,
  `nomexe13` varchar(200) DEFAULT NULL,
  `series13` int(2) DEFAULT NULL,
  `rep13` int(2) DEFAULT NULL,
  `nomexe14` varchar(200) DEFAULT NULL,
  `series14` int(2) DEFAULT NULL,
  `rep14` int(2) DEFAULT NULL,
  `nomexe15` varchar(200) DEFAULT NULL,
  `series15` int(2) DEFAULT NULL,
  `rep15` int(2) DEFAULT NULL,
  `nomexe16` varchar(200) DEFAULT NULL,
  `series16` int(2) DEFAULT NULL,
  `rep16` int(2) DEFAULT NULL,
  `nomexe17` varchar(200) DEFAULT NULL,
  `series17` int(2) DEFAULT NULL,
  `rep17` int(2) DEFAULT NULL,
  `nomexe18` varchar(200) DEFAULT NULL,
  `series18` int(2) DEFAULT NULL,
  `rep18` int(2) DEFAULT NULL,
  `nomexe19` varchar(200) DEFAULT NULL,
  `series19` int(2) DEFAULT NULL,
  `rep19` int(2) DEFAULT NULL,
  `nomexe20` varchar(200) DEFAULT NULL,
  `series20` int(2) DEFAULT NULL,
  `rep20` int(2) DEFAULT NULL,
  `nomexe21` varchar(200) DEFAULT NULL,
  `series21` int(2) DEFAULT NULL,
  `rep21` int(2) DEFAULT NULL,
  `nomexe22` varchar(200) DEFAULT NULL,
  `series22` int(2) DEFAULT NULL,
  `rep22` int(2) DEFAULT NULL,
  `nomexe23` varchar(200) DEFAULT NULL,
  `series23` int(2) DEFAULT NULL,
  `rep23` int(2) DEFAULT NULL,
  `nomexe24` varchar(200) DEFAULT NULL,
  `series24` int(2) DEFAULT NULL,
  `rep24` int(2) DEFAULT NULL,
  `nomexe25` varchar(200) DEFAULT NULL,
  `series25` int(2) DEFAULT NULL,
  `rep25` int(2) DEFAULT NULL,
  `nomexe26` varchar(200) DEFAULT NULL,
  `series26` int(2) DEFAULT NULL,
  `rep26` int(2) DEFAULT NULL,
  `nomexe27` varchar(200) DEFAULT NULL,
  `series27` int(2) DEFAULT NULL,
  `rep27` int(2) DEFAULT NULL,
  `nomexe28` varchar(200) DEFAULT NULL,
  `series28` int(2) DEFAULT NULL,
  `rep28` int(2) DEFAULT NULL,
  `nomexe29` varchar(200) DEFAULT NULL,
  `series29` int(2) DEFAULT NULL,
  `rep29` int(2) DEFAULT NULL,
  `nomexe30` varchar(200) DEFAULT NULL,
  `series30` int(2) DEFAULT NULL,
  `rep30` int(2) DEFAULT NULL,
  `nomexe31` varchar(200) DEFAULT NULL,
  `series31` int(2) DEFAULT NULL,
  `rep31` int(2) DEFAULT NULL,
  `nomexe32` varchar(200) DEFAULT NULL,
  `series32` int(2) DEFAULT NULL,
  `rep32` int(2) DEFAULT NULL,
  `nomexe33` varchar(200) DEFAULT NULL,
  `series33` int(2) DEFAULT NULL,
  `rep33` int(2) DEFAULT NULL,
  `nomexe34` varchar(200) DEFAULT NULL,
  `series34` int(2) DEFAULT NULL,
  `rep34` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `treino`
--
ALTER TABLE `treino`
 ADD PRIMARY KEY (`idtreino`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `treino`
--
ALTER TABLE `treino`
MODIFY `idtreino` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
