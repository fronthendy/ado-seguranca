-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2017 às 03:32
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news-samurai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `descricao`, `autor`, `data`) VALUES
(1, 'Noticia 1', 'Lorem ipsum', 'Hendy', '2017-05-03 00:46:09'),
(2, 'DE ONDE SURGIU A PALAVRA ?MEME??', '? cria??o do bi?logo brit?nico Richard Dawkins, no livro O Gene Ego?sta. A inten??o era batizar uma unidade de informa??o cultural ? assim como gene ? uma unidade de informa??o gen?tica.\r\n\r\nExemplos: uma melodia assobiada que se espalha pelo escrit?rio, um jeito de usar bon? que vira moda na escola ou aquele v?deo que voc? e mais meio milh?o curtiram e compartilharam no Facebook.\r\n\r\nNa busca por uma palavra que lembrasse gene, o autor reduziu o termo grego mimesis (imita??o).\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.', 'Hendy', '2017-05-03 01:11:23'),
(3, 'DE ONDE SURGIU A PALAVRA ?MEME??', '? cria??o do bi?logo brit?nico Richard Dawkins, no livro O Gene Ego?sta. A inten??o era batizar uma unidade de informa??o cultural ? assim como gene ? uma unidade de informa??o gen?tica.\r\n\r\nExemplos: uma melodia assobiada que se espalha pelo escrit?rio, um jeito de usar bon? que vira moda na escola ou aquele v?deo que voc? e mais meio milh?o curtiram e compartilharam no Facebook.\r\n\r\nNa busca por uma palavra que lembrasse gene, o autor reduziu o termo grego mimesis (imita??o).', 'Hendy Almeida', '2017-05-03 01:14:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
