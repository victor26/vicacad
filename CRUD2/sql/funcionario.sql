-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `projetoaca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idfuncionario` int(5) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `sexo` varchar(200) NOT NULL,
  `DNdia` int(2) NOT NULL,
  `DNmes` varchar(200) NOT NULL,
  `DNano` int(4) NOT NULL,
  `cpf` varchar(200) NOT NULL,
  `cep` varchar(200) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `perfil_idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idfuncionario`),
  KEY `fk_funcionario_perfil` (`perfil_idperfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `nome`, `sobrenome`, `sexo`, `DNdia`, `DNmes`, `DNano`, `cpf`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `login`, `senha`, `cargo`, `perfil_idperfil`) VALUES
(0, 'Victor', 'Douglas', 'masculino', 2, 'Jan', 2015, '053.684.841-60', '72215-035', 'Quadra QNM 03 Conjunto E', '25', 'CeilÃ¢ndia Sul', 'CeilÃ¢ndia', 'DF', 'Victor@hotmail.com', 'cobrar', '1231321', 'Administrador(a)', 1);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `fk_funcionario_perfil` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
