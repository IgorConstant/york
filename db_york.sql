-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Abr-2023 às 13:58
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_york`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_banners`
--

CREATE TABLE `app_banners` (
  `id` int(11) NOT NULL,
  `titulo_banner` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `link_banner` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `imagem` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_galeria`
--

CREATE TABLE `app_galeria` (
  `id` int(11) NOT NULL,
  `id_app_segmentos` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `fotos` varchar(150) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_galeria`
--

INSERT INTO `app_galeria` (`id`, `id_app_segmentos`, `fotos`) VALUES
(9, '1', '57cf261f7b8793cf586706a83e5f2cf2.jpg'),
(10, '1', 'b14cb31f585e5cfa5e5da38a82ac7715.jpg'),
(11, '1', '37b7f7e7d4d08c07348eebdb817da8af.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_linhas`
--

CREATE TABLE `app_linhas` (
  `id` int(11) NOT NULL,
  `nome_linha` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `desc_linha` longtext COLLATE utf8_bin DEFAULT NULL,
  `arquivo_download` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `tags` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_login`
--

CREATE TABLE `app_login` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_login`
--

INSERT INTO `app_login` (`id`, `nome_usuario`, `email`, `senha`, `ativo`) VALUES
(1, 'Igor', 'igor@agenciaduetto.com.br', 'ad108b78d9733dbdf783007c88a08282c9bca427', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_newsletter`
--

CREATE TABLE `app_newsletter` (
  `id` int(11) NOT NULL,
  `email_cadastro` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_newsletter`
--

INSERT INTO `app_newsletter` (`id`, `email_cadastro`) VALUES
(1, 'igor@agenciaduetto.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_politica`
--

CREATE TABLE `app_politica` (
  `id` int(11) NOT NULL,
  `titulo_politica` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `conteudo_politica` longtext COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_politica`
--

INSERT INTO `app_politica` (`id`, `titulo_politica`, `conteudo_politica`) VALUES
(1, 'Politica de Privacidade York', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum....');

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_segmentacoes`
--

CREATE TABLE `app_segmentacoes` (
  `id` int(11) NOT NULL,
  `nome_segmentacao` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `desc_segmentacao` longtext COLLATE utf8_bin DEFAULT NULL,
  `aplicacao_segmento` longtext COLLATE utf8_bin DEFAULT NULL,
  `yoast_description` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `yoast_keywords` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `foto_destaque` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_segmentacoes`
--

INSERT INTO `app_segmentacoes` (`id`, `nome_segmentacao`, `desc_segmentacao`, `aplicacao_segmento`, `yoast_description`, `yoast_keywords`, `foto_destaque`) VALUES
(1, 'Automotivo', '<p>Seguindo as exig&ecirc;ncias do mercado automobil&iacute;stico <strong>a York desenvolveu produtos de alta performance, capacidade de absor&ccedil;&atilde;o, transpira&ccedil;&atilde;o e anti chamas, demonstrando durabilidade, versatilidade, seguran&ccedil;a e qualidade.</strong> Com grande variedade de cores e grava&ccedil;&otilde;es e produzidos dentro dos padr&otilde;es de responsabilidade ambiental.</p>', 'Teste', 'Seguindo as exigências do mercado automobilístico a York desenvolveu produtos de alta performance, capacidade de absorçã', 'Automotivo, Anti-Chamas, Automobilistico', 'f8f5b1843e679b06e50b12eda2f7e7f4.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_banners`
--
ALTER TABLE `app_banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_galeria`
--
ALTER TABLE `app_galeria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_linhas`
--
ALTER TABLE `app_linhas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_login`
--
ALTER TABLE `app_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_newsletter`
--
ALTER TABLE `app_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_politica`
--
ALTER TABLE `app_politica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_segmentacoes`
--
ALTER TABLE `app_segmentacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `app_banners`
--
ALTER TABLE `app_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `app_galeria`
--
ALTER TABLE `app_galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `app_linhas`
--
ALTER TABLE `app_linhas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `app_login`
--
ALTER TABLE `app_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `app_newsletter`
--
ALTER TABLE `app_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `app_politica`
--
ALTER TABLE `app_politica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `app_segmentacoes`
--
ALTER TABLE `app_segmentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
