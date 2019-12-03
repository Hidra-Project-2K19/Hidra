-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2019 às 20:46
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `catacao`
--

CREATE TABLE `catacao` (
  `precop` mediumtext NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catacao`
--

INSERT INTO `catacao` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('100', 'erjbgrhggerg', 'qqq', 'ACblack.jpg', 22),
('100', 'qqq', 'ca', 'god1.jpg', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catbatle`
--

CREATE TABLE `catbatle` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catbatle`
--

INSERT INTO `catbatle` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('qqq', 'erjbgrhggerg', 'qqq', 'god1.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catesporte`
--

CREATE TABLE `catesporte` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catesporte`
--

INSERT INTO `catesporte` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('100', 'erjbgrhggerg', 'qqq', 'alpha1.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catestrate`
--

CREATE TABLE `catestrate` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catestrate`
--

INSERT INTO `catestrate` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('100', 'qqq', 'qqq', 'god2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catgratis`
--

CREATE TABLE `catgratis` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catgratis`
--

INSERT INTO `catgratis` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('GrÃ¡tis', 'qqq', 'ca', 'god2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catindie`
--

CREATE TABLE `catindie` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catindie`
--

INSERT INTO `catindie` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('100', 'effwrgehrthjur8-grw78uguyrg8fefgd9evfuwhdghjfev eufiwbfebrfhifevf8whrfghwyhf0wevwufhwerbfw', 'fgfgw', 'god1.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `catrpg`
--

CREATE TABLE `catrpg` (
  `precop` text NOT NULL,
  `descricaop` text NOT NULL,
  `nomep` varchar(150) NOT NULL,
  `caminho_img` varchar(100) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `catrpg`
--

INSERT INTO `catrpg` (`precop`, `descricaop`, `nomep`, `caminho_img`, `id`) VALUES
('300', 'qqq', 'qqq', 'god2.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `nome_imagem` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'igor', 'igorluis0107@gmail.com', 'igor', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catacao`
--
ALTER TABLE `catacao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catbatle`
--
ALTER TABLE `catbatle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catesporte`
--
ALTER TABLE `catesporte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catestrate`
--
ALTER TABLE `catestrate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catgratis`
--
ALTER TABLE `catgratis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catindie`
--
ALTER TABLE `catindie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catrpg`
--
ALTER TABLE `catrpg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catacao`
--
ALTER TABLE `catacao`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `catbatle`
--
ALTER TABLE `catbatle`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catesporte`
--
ALTER TABLE `catesporte`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catestrate`
--
ALTER TABLE `catestrate`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catgratis`
--
ALTER TABLE `catgratis`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catindie`
--
ALTER TABLE `catindie`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catrpg`
--
ALTER TABLE `catrpg`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
