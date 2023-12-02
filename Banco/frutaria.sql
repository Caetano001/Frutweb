-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 18:59
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `frutaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_end` int(11) NOT NULL,
  `nome_end` varchar(50) NOT NULL,
  `bairro_end` varchar(40) NOT NULL,
  `num_end` int(11) NOT NULL,
  `cidade_end` varchar(40) NOT NULL,
  `CEP_end` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `endereco`
--

INSERT INTO `endereco` (`id_end`, `nome_end`, `bairro_end`, `num_end`, `cidade_end`, `CEP_end`) VALUES
(1, 'Rua', 'centro', 1000, 'curitiba', '00000-000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `nome_fornecedor` varchar(50) NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  `tel_forne` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `fornecedor`
--

INSERT INTO `fornecedor` (`nome_fornecedor`, `id_fornecedor`, `tel_forne`) VALUES
('Frutaria fresca', 1, '0000-0000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor_produto`
--

CREATE TABLE `fornecedor_produto` (
  `id_prod` int(11) DEFAULT NULL,
  `id_fornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `log_adm`
--

CREATE TABLE `log_adm` (
  `id_adm` int(9) NOT NULL,
  `nome_adm` varchar(50) NOT NULL,
  `senha_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `log_adm`
--

INSERT INTO `log_adm` (`id_adm`, `nome_adm`, `senha_adm`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `id_pag` int(11) NOT NULL,
  `valor_pag` float NOT NULL,
  `data_pag` date NOT NULL,
  `forma_pag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pagamento`
--

INSERT INTO `pagamento` (`id_pag`, `valor_pag`, `data_pag`, `forma_pag`) VALUES
(1, 1000.99, '2023-10-01', 'Cartão');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `data_ped` date DEFAULT NULL,
  `id_ped` int(11) NOT NULL,
  `valor_total_ped` float DEFAULT NULL,
  `id_end_entrega` int(11) NOT NULL,
  `prod_ped` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`data_ped`, `id_ped`, `valor_total_ped`, `id_end_entrega`, `prod_ped`) VALUES
('2023-10-01', 1, 300, 1, 'maça, banana');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_pagamento`
--

CREATE TABLE `pedido_pagamento` (
  `id_ped` int(11) NOT NULL,
  `id_pag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pedido_pagamento`
--

INSERT INTO `pedido_pagamento` (`id_ped`, `id_pag`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `nome_prod` varchar(50) NOT NULL,
  `preco_prod` float NOT NULL,
  `prod_img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `nome_prod`, `preco_prod`, `prod_img_url`) VALUES
(43, 'Goiaba', 2, '../uploads/dbd8ab0733a090dd3cdd263fb3bdf74a.png'),
(44, 'Banana', 1.99, '../uploads/9d6387a6bc09d122fce050465cc0ea86.png'),
(46, 'Uva', 4, '../uploads/e7161c2245a9ccf61a1c246259e7932d.png'),
(48, 'Pera', 1, '../uploads/4aacc1ae106e31067a05c2c11202d75c.png'),
(72, 'Morango', 8, '../uploads/a50adaf1d6a4c77ea4b405ff6545ff51.png'),
(74, 'Mamão', 2, '../uploads/c5c29b6d4f6d5620264fb889a61f0d43.png'),
(75, 'Maçã', 2.99, '../uploads/924a8f8b8f7a847c2caf24059af4dc84.png'),
(76, 'Laranja', 2.5, '../uploads/390636ee4e3316ffda588af6c365cb95.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `tel_usuario` varchar(30) DEFAULT NULL,
  `CPF_usuario` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `tel_usuario`, `CPF_usuario`) VALUES
(7, 'teste1', 'teste1@email.com', 'e959088c6049f1104c84c9bde5560a13', '0000000000', '125.344.389-05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_endereco`
--

CREATE TABLE `usuario_endereco` (
  `id_end` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario_pedido`
--

CREATE TABLE `usuario_pedido` (
  `id_ped` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_end`);

--
-- Índices de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Índices de tabela `fornecedor_produto`
--
ALTER TABLE `fornecedor_produto`
  ADD PRIMARY KEY (`id_fornecedor`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Índices de tabela `log_adm`
--
ALTER TABLE `log_adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Índices de tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`id_pag`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `id_end_entrega` (`id_end_entrega`);

--
-- Índices de tabela `pedido_pagamento`
--
ALTER TABLE `pedido_pagamento`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `id_pag` (`id_pag`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `CPF_usuario` (`CPF_usuario`);

--
-- Índices de tabela `usuario_endereco`
--
ALTER TABLE `usuario_endereco`
  ADD PRIMARY KEY (`id_end`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `usuario_pedido`
--
ALTER TABLE `usuario_pedido`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_end` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `log_adm`
--
ALTER TABLE `log_adm`
  MODIFY `id_adm` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `id_pag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `fornecedor_produto`
--
ALTER TABLE `fornecedor_produto`
  ADD CONSTRAINT `fornecedor_produto_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `produto` (`id_prod`),
  ADD CONSTRAINT `fornecedor_produto_ibfk_2` FOREIGN KEY (`id_fornecedor`) REFERENCES `fornecedor` (`id_fornecedor`);

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_end_entrega`) REFERENCES `endereco` (`id_end`);

--
-- Restrições para tabelas `pedido_pagamento`
--
ALTER TABLE `pedido_pagamento`
  ADD CONSTRAINT `pedido_pagamento_ibfk_1` FOREIGN KEY (`id_ped`) REFERENCES `pedido` (`id_ped`),
  ADD CONSTRAINT `pedido_pagamento_ibfk_2` FOREIGN KEY (`id_pag`) REFERENCES `pagamento` (`id_pag`);

--
-- Restrições para tabelas `usuario_endereco`
--
ALTER TABLE `usuario_endereco`
  ADD CONSTRAINT `usuario_endereco_ibfk_1` FOREIGN KEY (`id_end`) REFERENCES `endereco` (`id_end`),
  ADD CONSTRAINT `usuario_endereco_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para tabelas `usuario_pedido`
--
ALTER TABLE `usuario_pedido`
  ADD CONSTRAINT `usuario_pedido_ibfk_1` FOREIGN KEY (`id_ped`) REFERENCES `pedido` (`id_ped`),
  ADD CONSTRAINT `usuario_pedido_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
