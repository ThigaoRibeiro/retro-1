-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/07/2020 às 21:09
-- Versão do servidor: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- Versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `retro_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(100) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente_endereco`
--

CREATE TABLE `cliente_endereco` (
  `clie_endereco_id` int(11) NOT NULL,
  `endereco_rua` varchar(100) DEFAULT NULL,
  `endereco_bairro` int(11) DEFAULT NULL,
  `endereco_cidade` varchar(100) DEFAULT NULL,
  `endereco_complemento` varchar(100) NOT NULL,
  `endereco_cep` varchar(100) NOT NULL,
  `endereco_ponto_refencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente_telefone`
--

CREATE TABLE `cliente_telefone` (
  `clie_tel_id` int(11) NOT NULL,
  `tel_01` varchar(15) DEFAULT NULL,
  `tel_02` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario_endereco`
--

CREATE TABLE `funcionario_endereco` (
  `func_endereco_id` int(11) NOT NULL,
  `endereco_rua` varchar(100) DEFAULT NULL,
  `endereco_bairro` varchar(100) DEFAULT NULL,
  `endereco_cidade` varchar(100) DEFAULT NULL,
  `endereco_complemento` varchar(100) NOT NULL,
  `endereco_cep` varchar(100) NOT NULL,
  `endereco_ponto_refencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario_telefone`
--

CREATE TABLE `funcionario_telefone` (
  `func_tel_id` int(11) NOT NULL,
  `tel_-01` varchar(15) DEFAULT NULL,
  `tel_02` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `pedido_id` int(11) NOT NULL,
  `pedido_data` varchar(45) DEFAULT NULL,
  `pedido_total` varchar(45) DEFAULT NULL,
  `pedido_desc` varchar(45) DEFAULT NULL,
  `pedido_quant` varchar(45) DEFAULT NULL,
  `clie_id` int(11) DEFAULT NULL,
  `func_id` int(11) DEFAULT NULL,
  `produto_id` varchar(45) DEFAULT NULL,
  `produto_produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(100) NOT NULL,
  `produto_valor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `produto_nome`, `produto_valor`) VALUES
(1, 'Picanha avec farofa', '60,00'),
(2, 'Jarret rôti avec tutú aux haricots', '55,00'),
(3, 'Poulet strogonoff', '20,00'),
(4, 'Rouget en tranches avec bouillie de poisson ', '40,00'),
(5, 'Poulet rôti', '18,00'),
(6, 'Riz et haricots ', '7,00'),
(7, 'Pain chaud', '5,00'),
(8, 'Toast Petrópolis au parmesan', '6,50'),
(9, 'Pain avec saucisse', '10,00'),
(10, 'Pain aux oeufs', '7,00'),
(11, 'Gâteau à la semoule de maïs à la noix de coco', '5,00'),
(12, 'Poulet à la farine de manioc', '20,00'),
(13, 'Presunto de parma caneloni e mussarela búfala', '69,00'),
(14, 'Lasagnes normales du dimanche', '25,00'),
(15, ' Crêpe fou', '13,00'),
(16, 'Burger Cury', '18,00'),
(17, 'Gros Pourri', '15,00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `cliente_endereco`
--
ALTER TABLE `cliente_endereco`
  ADD PRIMARY KEY (`clie_endereco_id`);

--
-- Índices de tabela `cliente_telefone`
--
ALTER TABLE `cliente_telefone`
  ADD PRIMARY KEY (`clie_tel_id`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `funcionario_endereco`
--
ALTER TABLE `funcionario_endereco`
  ADD PRIMARY KEY (`func_endereco_id`);

--
-- Índices de tabela `funcionario_telefone`
--
ALTER TABLE `funcionario_telefone`
  ADD PRIMARY KEY (`func_tel_id`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `fk_pedido_produto_idx` (`produto_produto_id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`),
  ADD KEY `produto_id` (`produto_id`,`produto_nome`,`produto_valor`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente_endereco`
--
ALTER TABLE `cliente_endereco`
  MODIFY `clie_endereco_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente_telefone`
--
ALTER TABLE `cliente_telefone`
  MODIFY `clie_tel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario_endereco`
--
ALTER TABLE `funcionario_endereco`
  MODIFY `func_endereco_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario_telefone`
--
ALTER TABLE `funcionario_telefone`
  MODIFY `func_tel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_produto` FOREIGN KEY (`produto_produto_id`) REFERENCES `retro_db2`.`produto` (`produto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
