-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 05-Ago-2021 às 12:56
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `lojaroupas`
--
CREATE DATABASE IF NOT EXISTS `lojaroupas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lojaroupas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sexo`, `telefone`, `endereco`) VALUES
(2, 'Brenda Caroline Santos', 'Feminino', '38945632178', 'Rua b'),
(3, 'Marcos Farias', 'Masculino', '38994256314', 'Rua f'),
(5, 'Felipe Vieira', 'Masculino', '38991427863', 'Rua e'),
(6, 'Savio Alves', 'Masculino', '38751234569', 'Rua y'),
(7, 'Gabriela Aguiar', 'Feminino', '3548761232', 'Rua b'),
(8, ' Jovana dos Santos', 'Feminino', '14785236910', 'Rua h'),
(9, ' Carla EloÃ­sa', 'Feminino', '32459614001', 'Rua g'),
(13, 'Bianca', 'Feminino', '3548761232', 'Rua f'),
(14, 'Luiz', 'Masculino', '38751234569', 'Rua e'),
(15, 'Vanessa', 'Feminino', '38991427863', 'Rua e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefone` varchar(11) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `sexo`, `telefone`, `endereco`) VALUES
(1, ' Brenda Caroline', 'Feminino', '38751234569', 'Rua f'),
(3, 'Daiane', 'Feminino', '32459614001', 'Rua j'),
(4, 'Gabriela', 'Feminino', '3548761230', 'Rua j');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `marca` varchar(15) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `categoria` varchar(15) DEFAULT NULL,
  `quantidade` int(3) NOT NULL,
  `tamanho` varchar(2) DEFAULT NULL,
  `cor` varchar(10) NOT NULL,
  `preco` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `modelo`, `categoria`, `quantidade`, `tamanho`, `cor`, `preco`) VALUES
(5, ' Sandalia', ' Moleca', ' Plataforma', ' Calcados', 15, ' 3', ' Nude', 69.99),
(6, ' Calca', ' Hering', ' Pantalona', ' Roupas', 20, ' 3', 'Jeans', 89.99),
(7, ' Camiseta', ' Malwee', ' Gola Redonda', ' Roupas', 10, ' P', ' Branca', 27.5),
(8, 'Tenis Plataforma', 'Moleca Kids', 'Fechado', 'CalÃ§ados', 10, '38', 'Preto', 79.99),
(9, ' Sapatilha', ' Moleca', ' Bico fino', ' Calcados', 10, ' 3', ' Nude', 49.99),
(10, ' Cropped', ' Thianna', ' Ombro a ombro', ' Roupa', 14, ' M', ' Marsala', 29.99),
(11, ' Jaqueta', ' Colcci', ' Max', ' Roupa', 22, 'G', ' Jeans', 69.99),
(12, 'Vestido', 'Hering', 'Longo', 'Roupas', 25, 'M', 'Floral', 39.99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
