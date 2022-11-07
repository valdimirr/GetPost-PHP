-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Nov-2022 às 19:17
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `clientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` text DEFAULT NULL,
  `senha` text DEFAULT NULL,
  `created` text DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `created`, `active`) VALUES
(1, '05013719070', 'senha123', '2022-10-04 21:23:33', NULL),
(2, '55555555555', '123', '2022-10-13 10:24:44', NULL),
(3, '22222222222', '123', '2022-10-13 10:28:34', NULL),
(5, '23451695145', '321654', '2022-10-13 11:49:30', NULL),
(6, '99999999999', '123', '2022-10-14 16:00:53', NULL),
(7, '84858117049', '123', '2022-10-14 16:02:43', NULL),
(8, '02561533026', 'homer', '2022-10-18 15:19:25', NULL),
(9, '13131231231', '1234567890', '2022-10-18 15:33:13', NULL),
(10, '123', '123', '24', NULL),
(11, 'rafa', '$2y$10$SBrR0mBRjoIB0xc8iBseNuJVjPU.elSxI5VlHQai5qAxTyRDiusQG', NULL, 0),
(12, 'jao', '$2y$10$h7bukyzqSJyykjtc/CyoVeJveDZoq.SStcsvnjpnX507mTJUeWUqO', NULL, NULL),
(13, 'brunopanca', '$2y$10$K6Nd8k5/bS1Gtrm7MBJxme1y0QMgDM93mqduJvp3pt451.jyIlJ5a', NULL, NULL),
(14, 'deku', '$2y$10$9GlhEdv2F5xCi2V3wIUqleU/uTteJS9BtGrjanVinZyHS7D5Zb0tS', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `money` double DEFAULT NULL,
  `cpf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `saldo`
--

INSERT INTO `saldo` (`id`, `money`, `cpf`) VALUES
(1, 25.5, '2147483647'),
(2, -964.4, '55555555555'),
(3, 13, '22222222222'),
(5, -9999999997, '23451695145'),
(6, 0, '99999999999'),
(7, 0, '84858117049'),
(8, 0, '02561533026'),
(9, 0, '13131231231');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` text DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `cidade` text DEFAULT NULL,
  `estado` text DEFAULT NULL,
  `rua` text DEFAULT NULL,
  `cpf` text DEFAULT NULL,
  `senha` text DEFAULT NULL,
  `created` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `idade`, `cidade`, `estado`, `rua`, `cpf`, `senha`, `created`) VALUES
(1, 'Valdimir Ferraz FogaÃ§a', 22, 'Canoas', 'RS', 'barreto', '2147483647', 'banana23', '2022-10-06 20:57:39'),
(2, 'teste', 13, 'cidade teste', 'rs', 'teste rua', '55555555555', '123', '2022-10-13 10:24:44'),
(3, 'rafael', 13, 'cidade rafael', 'PA', 'Rua marangua', '22222222222', '123', '2022-10-13 10:28:34'),
(5, 'deku', 16, 'poa', 'sp', '15 de janeiro', '23451695145', '321654', '2022-10-13 11:49:30'),
(6, 'barata', 666, 'Eldorado', 'ES', 'Escovadente', '99999999999', '123', '2022-10-14 16:00:53'),
(7, 'Andrew', 22, 'Canoas', 'RS', 'Guaruja', '84858117049', '123', '2022-10-14 16:02:43'),
(8, 'dede', 30, 'Nova santa rita', 'RS', 'Girassol', '02561533026', 'homer', '2022-10-18 15:19:25'),
(9, 'VAVAVAVA**A0$%', 300, 'oaoaomejh', 'RS', 'aihfahk', '13131231231', '1234567890', '2022-10-18 15:33:13'),
(10, 'joao', 23, 'asdasd', 'sadas', 'asdasd', '123', '123', '27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`) USING HASH;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
