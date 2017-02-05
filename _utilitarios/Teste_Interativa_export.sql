-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2017 at 09:53 PM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Teste_Interativa`
--
CREATE DATABASE IF NOT EXISTS `Teste_Interativa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Teste_Interativa`;

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `DATA_FECHA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`ID_CATEGORIA`, `NOME`, `DATA_FECHA`) VALUES
(1, 'Tecnologia', NULL),
(2, 'Internet', NULL),
(3, 'Jogos', NULL),
(4, 'Música', NULL),
(5, 'Bem-estar', NULL),
(6, 'Esportes', NULL),
(7, 'Beleza', NULL),
(8, 'Moda', NULL),
(9, 'Trabalho', NULL),
(10, 'Desenvolvimento pessoal', NULL),
(11, 'Finanças', NULL),
(12, 'Lazer', NULL),
(13, 'Viagem', NULL),
(14, 'Família', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `ID_COMENTARIO` int(11) NOT NULL,
  `ID_POST` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `MENSAGEM` varchar(1000) NOT NULL,
  `IP` varchar(15) NOT NULL,
  `TIMESTAMP` varchar(20) NOT NULL,
  `DATA_FECHA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `ID_POST` int(11) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `SUBTITULO` varchar(100) NOT NULL,
  `TEXTO` text NOT NULL,
  `TIMESTAMP` varchar(20) NOT NULL,
  `FOTO` varchar(255) DEFAULT NULL,
  `DATA_FECHA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID_POST`, `ID_CATEGORIA`, `TITULO`, `SUBTITULO`, `TEXTO`, `TIMESTAMP`, `FOTO`, `DATA_FECHA`) VALUES
(1, 3, 'The Elder Scrolls Online', 'Tamriel Unlimited Chega ao PS4 em Duas Semanas!', 'Estamos empolgados em receber os jogadores de PS4 ao ESOTU em apenas duas semanas. Quando começamos a desenvolver a versão para console do game, sabíamos que tínhamos de desenvolver para PS4, e não qualquer outra porta. Com voice chat integrado, uma IU completamente redesenhada, conectividade total ao PS4 e suporte ao controlador, os jogadores PS4 devem se sentir em casa em Tamriel.\nHoje, gostaríamos de contar alguns detalhes (e outras coisas engraçadas também!) para ajudar vocês a se preparem para o lançamento. Obrigado por nos apoiar nesta jornada – esperamos ver vocês em Tamriel a partir de 9 de junho!\nIsto é ESOTU\nNas últimas semanas, lançamos os dois primeiros vídeos “The Elder Scrolls Online: Tamriel Unlimited”. Neles, aprofundamos sobre a liberdade e as escolhas que moldam suas experiências em Tamriel, e todas as atividades que você pode realizar em ESOTU com os amigos. Hoje, temos o prazer de apresentar o vídeo final da série, que é explorar Tamriel. Você pode ver os três vídeos, incluindo o último, abaixo. Esperamos que goste!', '05-02-2017 18:49:22', '/var/www/Teste_Interativa/resources/posts/1/ESOTU.jpg', NULL),
(2, 10, '7 Chaves para seu Desenvolvimento Pessoal', 'Degraus para o sucesso', '<p>Existem muitas pessoas querendo alcan&ccedil;ar seus objetivos e sonhos, e a maioria se esquece que a chave para este caminho est&aacute; no desenvolvimento pessoal.</p>\r\n\r\n<p>No mundo de hoje &eacute; essencial o desenvolvimento de novas compet&ecirc;ncias e habilidades, pois o auto desenvolvimento nos capacita a enfrentarmos desafios que naturalmente surgem em nossa jornada.</p>\r\n\r\n<p>&Eacute; fato que para crescer na vida precisamos conhecer a n&oacute;s mesmos e principalmente, saber lidar com barreiras emocionais que podem nos impedir de seguir adiante.</p>\r\n\r\n<p>Muita gente n&atilde;o fixa objetivos espec&iacute;ficos ou n&atilde;o sabe lidar com frustra&ccedil;&otilde;es. Outras &nbsp;n&atilde;o investem em si mesmas ou n&atilde;o buscam a companhia de pessoas com os mesmos ideais.</p>\r\n\r\n<p>Pense comigo&hellip; As pessoas de resultados tem um padr&atilde;o de pensamento e comportamento em comum, diferente da maioria que&nbsp;<a href="http://focuslife.com.br/como-focar-mudar-vida-definitivamente" target="_blank">procrastina e consequentemente perde o foco</a>&nbsp;de suas a&ccedil;&otilde;es.</p>\r\n\r\n<p>Se seguirmos o mesmo padr&atilde;o das pessoas de resultados, criaremos a possibilidade de alcan&ccedil;ar praticamente os mesmos resultados que os delas.</p>\r\n\r\n<p>Portanto, compartilharei com voc&ecirc; neste artigo sete chaves ess&ecirc;ncias para seu desenvolvimento pessoal. Aplicando essas chaves, voc&ecirc; criar&aacute; chances de&nbsp;possibilidades de um constante progresso em sua vida, tanto pessoal quanto profissional.</p>\r\n', '05-02-2017 21:38:59', '/var/www/Teste_Interativa/resources/posts/2/desenvolvimento-Pessoal.png', NULL),
(3, 10, '7 Chaves para seu Desenvolvimento Pessoal', 'Abordagem direta', '<p>Existem muitas pessoas querendo alcan&ccedil;ar seus objetivos e sonhos, e a maioria se esquece que a chave para este caminho est&aacute; no desenvolvimento pessoal.</p>\r\n\r\n<p>No mundo de hoje &eacute; essencial o desenvolvimento de novas compet&ecirc;ncias e habilidades, pois o auto desenvolvimento nos capacita a enfrentarmos desafios que naturalmente surgem em nossa jornada.</p>\r\n\r\n<p>&Eacute; fato que para crescer na vida precisamos conhecer a n&oacute;s mesmos e principalmente, saber lidar com barreiras emocionais que podem nos impedir de seguir adiante.</p>\r\n\r\n<p>Muita gente n&atilde;o fixa objetivos espec&iacute;ficos ou n&atilde;o sabe lidar com frustra&ccedil;&otilde;es. Outras &nbsp;n&atilde;o investem em si mesmas ou n&atilde;o buscam a companhia de pessoas com os mesmos ideais.</p>\r\n\r\n<p>Pense comigo&hellip; As pessoas de resultados tem um padr&atilde;o de pensamento e comportamento em comum, diferente da maioria que&nbsp;<a href="http://focuslife.com.br/como-focar-mudar-vida-definitivamente" target="_blank">procrastina e consequentemente perde o foco</a>&nbsp;de suas a&ccedil;&otilde;es.</p>\r\n\r\n<p>Se seguirmos o mesmo padr&atilde;o das pessoas de resultados, criaremos a possibilidade de alcan&ccedil;ar praticamente os mesmos resultados que os delas.</p>\r\n\r\n<p>Portanto, compartilharei com voc&ecirc; neste artigo sete chaves ess&ecirc;ncias para seu desenvolvimento pessoal. Aplicando essas chaves, voc&ecirc; criar&aacute; chances de&nbsp;possibilidades de um constante progresso em sua vida, tanto pessoal quanto profissional.</p>\r\n', '05-02-2017 21:40:29', '/var/www/Teste_Interativa/resources/posts/3/chaves-desenvolvimento-pessoal1.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_COMENTARIO`),
  ADD KEY `ID_POST)FK_idx` (`ID_POST`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID_POST`),
  ADD KEY `ID_CATEGORIA_FK_idx` (`ID_CATEGORIA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID_POST` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `ID_POST)FK` FOREIGN KEY (`ID_POST`) REFERENCES `posts` (`ID_POST`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `ID_CATEGORIA_FK` FOREIGN KEY (`ID_CATEGORIA`) REFERENCES `categorias` (`ID_CATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
