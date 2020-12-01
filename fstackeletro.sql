-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01-Dez-2020 às 23:14
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fstackeletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_cli` varchar(100) NOT NULL,
  `end_cli` varchar(100) NOT NULL,
  `tel_cli` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `senha` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cli`, `end_cli`, `tel_cli`, `email`, `foto`, `senha`) VALUES
(1, 'Antonio José Pina Júnior', 'Rua Mantova', 55555555, 'juniorgabrielsantana@hotmail.com', 'https://images.app.goo.gl/TQJvV9iuvQVSmgGY7', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` varchar(100) NOT NULL,
  `end_cli` varchar(100) NOT NULL,
  `tel_cli` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `nome_prod` varchar(100) DEFAULT NULL,
  `val_unit` decimal(8,2) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `val_total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_cli`, `nome_cli`, `end_cli`, `tel_cli`, `id_produto`, `nome_prod`, `val_unit`, `quantidade`, `val_total`) VALUES
(1, 'Antonio José', 'Rua dos Doces, 20', 1144872590, 2, 'Lava Louças Brastemp 20 Litros', '5019.00', 2, '10038.00'),
(2, 'Paulo Ricardo', 'Rua Falsa, 171', 1195455636, 5, 'Lavadora de Roupas LG 12 Litros', '1300.00', 4, '5200.00'),
(3, 'Roberta Vasconcelos Ferreira', 'Rua das Mangas, 112', 1198744556, 3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 4, '5200.00'),
(4, 'Guilhermina Guinle Ferreira', 'Rua das Mangas, 171', 1195278887, 2, 'Microondas Consul 30 Litros', '430.00', 2, '860.00'),
(5, 'Michael Briito', 'Rua das Hortências, 131', 1195278887, 1, 'Fogão Brastemp 6 Bocas Branco', '2019.00', 3, '6057.00'),
(6, 'Valquíria Flores', 'Rua das Maravilhas, 120', 119874562, 4, 'Lava Louças Brastemp 20 Litros', '5019.00', 2, '10038.00'),
(7, 'Rubio Cardoso', 'Rua das Oliveiras', 1355558799, 3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 4, '5200.00'),
(8, 'Sérgio Rodriguez', 'Alameda México, 220', 1145229450, 1, 'Fogão Brastemp 6 Bocas Branco', '2019.00', 5, '10095.00'),
(9, 'Roberta Miranda', 'Rua dos Caipiras, 113', 1120209950, 2, 'Microondas Consul 30 Litros', '430.00', 1, '430.00'),
(10, 'Antonio José Pina Júnior', 'Rua Hungria', 555555555, 3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 1, '1300.00'),
(11, 'Antonio José Pina Júnior', 'Rua Hungria', 555555555, 3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 2, '2600.00'),
(12, 'Antonio José Pina Júnior', 'Rua Falsa', 555555555, 3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 3, '3900.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `nome_imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `descricao`, `preco`, `nome_imagem`) VALUES
(1, 'Fogão Brastemp 6 Bocas Branco', '2019.00', 'fogao_300px.jpg'),
(2, 'Microondas Consul 30 Litros', '430.00', 'microondas_300px.jpg'),
(3, 'Lavadora de Roupas LG 12 Litros', '1300.00', 'lavadora-de-roupas_300px.jpg'),
(4, 'Lava Louças Brastemp 20 Litros', '5019.00', 'lava-loucas_300px.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_cli`),
  ADD KEY `id_prod_ind` (`id_produto`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
