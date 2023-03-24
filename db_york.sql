-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2023 às 20:44
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
(1, 'Igor', 'igor@agenciaduetto.com.br', 'ad108b78d9733dbdf783007c88a08282c9bca427', 1),
(3, 'Vitor Maia', 'vitor@agenciaduetto.com.br', 'f9cdb8fcf9f339f2f5aa714d3dfbeeb9c0cb81d3', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_segmentacoes`
--

CREATE TABLE `app_segmentacoes` (
  `id` int(11) NOT NULL,
  `nome_segmentacao` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `desc_segmentacao` longtext COLLATE utf8_bin DEFAULT NULL,
  `yoast_description` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `yoast_keywords` varchar(120) COLLATE utf8_bin DEFAULT NULL,
  `foto_destaque` varchar(120) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `app_segmentacoes`
--

INSERT INTO `app_segmentacoes` (`id`, `nome_segmentacao`, `desc_segmentacao`, `yoast_description`, `yoast_keywords`, `foto_destaque`) VALUES
(1, 'Automotivo', '<p>Seguindo as exig&ecirc;ncias do mercado automobil&iacute;stico <strong>a York desenvolveu produtos de alta performance, capacidade de absor&ccedil;&atilde;o, transpira&ccedil;&atilde;o e anti chamas, demonstrando durabilidade, versatilidade, seguran&ccedil;a e qualidade.</strong> Com grande variedade de cores e grava&ccedil;&otilde;es e produzidos dentro dos padr&otilde;es de responsabilidade ambiental.</p>', 'Seguindo as exigências do mercado automobilístico a York desenvolveu produtos de alta performance, capacidade de absorçã', 'Automotivo, Anti-Chamas, Automobilistico', 'f8f5b1843e679b06e50b12eda2f7e7f4.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_banners`
--
ALTER TABLE `app_banners`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `app_login`
--
ALTER TABLE `app_login`
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
-- AUTO_INCREMENT de tabela `app_login`
--
ALTER TABLE `app_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `app_segmentacoes`
--
ALTER TABLE `app_segmentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
