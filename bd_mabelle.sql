-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2020 às 02:49
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
-- Banco de dados: `bd_mabelle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE `administracao` (
  `id_administracao` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administracao`
--

INSERT INTO `administracao` (`id_administracao`, `nome`, `email`, `login`, `senha`) VALUES
(2, 'Wanderson Timoteo', 'wanderson@mabelle.com', 'wandersontimoteo', 'admin'),
(3, 'Teste pra excluir', 'teste@teste', 'teste', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `titulo_banner` varchar(200) NOT NULL,
  `alt` varchar(200) NOT NULL,
  `url_banner` varchar(200) NOT NULL,
  `ativo_banner` varchar(1) NOT NULL,
  `imagem_banner` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id_banner`, `titulo_banner`, `alt`, `url_banner`, `ativo_banner`, `imagem_banner`) VALUES
(20, 'Cartão Ma Belle', 'Cartão Ma Belle', 'Cartao-Ma-Belle-Lingerie', 'S', 'bn-2e63e8ada2e307ec1934a0afe5968d7b.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `qtde` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(150) NOT NULL,
  `slug_categoria` varchar(220) NOT NULL,
  `ordem_categoria` int(11) NOT NULL,
  `ativo_categoria` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`, `slug_categoria`, `ordem_categoria`, `ativo_categoria`) VALUES
(23, 'Calcinha', 'calcinha', 1, 'S'),
(24, 'Sutiã', 'sutia', 2, 'S'),
(25, 'Body', 'body', 3, 'S'),
(26, 'Espartilho', 'espartilho', 4, 'S'),
(27, 'Baby Doll', 'baby-doll', 5, 'S'),
(28, 'Conjunto', 'conjunto', 6, 'S'),
(29, 'Camisola', 'camisola', 7, 'S'),
(30, 'Corselet', 'corselet', 8, 'S'),
(31, 'Camisete', 'camisete', 9, 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `uf` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `ativo_cliente` varchar(1) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `ddd` int(11) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cliente`, `endereco`, `cidade`, `bairro`, `uf`, `cep`, `email`, `senha`, `ativo_cliente`, `fone`, `sexo`, `numero`, `ddd`, `complemento`) VALUES
(10, 'Jeane Timoteo', 'Rua 10', 'Cuiabá', 'Centro Norte', 'Mato Grosso', '78000000', 'jeane@gmail.com', '12345', 'S', '33210101', 'F', '1000', 65, 'Edificio Portinari, Apt 100 '),
(11, '', 'Rua 10', 'Cuiaba', 'Centro Norte', 'MT', '78088-000', 'ryan@gmail.com', '12345', '', '33220101', '', '', 0, ''),
(12, 'Maria Almeida', 'Rua 10', 'Cuiaba', 'Centro norte', 'MT', '78088-000', 'maria@gmail.com', '12345', '', '33220101', '', '', 0, ''),
(13, 'João da Silva', 'Rua da paz', 'Cuiabá', 'Boa Esperança', 'MT', '78088-000', 'joao@hotmail.com', '12345', '', '36620101', 'M', '', 0, ''),
(14, 'José de Souza', 'Rua 20', 'Cuiaba', 'Jardim das Americas', 'MT', '78000000', 'jose@uol.com.br', '12345', '', '36756610', 'M', '', 0, ''),
(15, 'Ribamar Sousa', 'Rua Dom Pedro I', 'Bonito', 'Cidade Alta', 'MG', '78088-000', 'ribamar@gmail.com', '12345', 'S', '21334678', 'M', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_venda`
--

CREATE TABLE `itens_venda` (
  `id_item` int(11) NOT NULL,
  `id_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `valor_item` decimal(10,0) NOT NULL,
  `qtde` int(11) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo_produto` varchar(200) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `descricao` text NOT NULL,
  `conteudo` text NOT NULL,
  `slug_produto` varchar(220) NOT NULL,
  `ativo_produto` varchar(1) NOT NULL,
  `imagem_produto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `titulo_produto`, `preco`, `fabricante`, `modelo`, `descricao`, `conteudo`, `slug_produto`, `ativo_produto`, `imagem_produto`) VALUES
(80014, 23, 'Calcinha vermelha', '39,90', 'Liz', 'Renda', 'Calcinha vermelha de renda\r\n ', 'Calcinha vermelha de renda', 'calcinha-vermelha', 'S', '12.png'),
(80015, 26, 'Espartilho azul', '89,90', 'Recco', 'Renda', 'Espartilho azul\r\n  ', 'Espartilho azul ', 'espartilho-azul', 'S', '40.png'),
(80016, 27, 'Baby doll preto', '49,90', 'Darling', 'Liso', 'Baby doll preto\r\n ', 'Baby doll preto liso', 'baby-doll-preto', 'S', '1.png'),
(80017, 27, 'Baby doll vermelho', '59,90', 'Plié', 'Liso', 'Baby doll vermelho ', 'Baby doll vermelho liso\r\n ', 'baby-doll-vermelho', 'S', '2.png'),
(80018, 25, 'Body preto', '69,90', 'Valizer', 'Renda', 'Body preto\r\n ', 'Body preto de renda\r\n ', 'body-preto', 'S', '7.png'),
(80019, 25, 'Body vermelho', '79,90', 'Liz', 'Renda', 'Body vermelho', 'Body vermelho de renda\r\n ', 'body-vermelho', 'S', '9.png'),
(80020, 23, 'Calcinha preta', '39,90', 'Recco', 'Renda', 'Calcinha preta', 'Calcinha preta de renda\r\n ', 'cal', 'S', '14.png'),
(80021, 31, 'Camisete bordo', '29,90', 'Plié', 'Renda', 'Camisete bordo\r\n ', 'Camisete bordo de renda ', 'camisete-bordo', 'S', '4.png'),
(80022, 31, 'Camisete rosa', '39,90', 'Darling', 'Lisa', 'Camisete rosa\r\n ', 'Camisete rosa lisa\r\n ', 'camisete-rosa', 'S', '5.png'),
(80023, 29, 'Camisola vermelha', '109,90', 'Valizer', 'Renda', 'Camisola vermelho\r\n ', 'Camisola vermelha de renda\r\n ', 'camisola-vermelha', 'S', '19.png'),
(80024, 29, 'Camisola Azul', '99,90', 'Darling', 'Lisa', 'Camisola azul\r\n ', 'Camisola azul lisa\r\n ', 'camisola-azul', 'S', '20.png'),
(80025, 28, 'Conjunto vermelho', '129,90', 'Recco', 'Renda', 'Conjunto vermelho', 'Conjunto calcinha e suti&atilde; de renda Recco\r\n ', 'conjunto-vermelho', 'S', '25.png'),
(80026, 28, 'Conjunto preto', '119,90', 'Liz', 'Renda', 'Conjunto preto', 'Conjunto de calcinha e suti&atilde; preto Liz\r\n ', 'conjunto-preto', 'S', '27.png'),
(80027, 30, 'Corselet preto e rosa', '149,90', 'Plié', 'Renda', 'Corselet preto e rosa', 'Corselet preto e rosa de renda', 'corselet-preto-e-rosa', 'S', '32.png'),
(80028, 30, 'Corselet lilás', '139,90', 'Valizer', 'Renda', 'Corselet lil&aacute;s\r\n ', 'Corselet lil&aacute;s com preto \r\n ', 'corselet-lilas', 'S', '31.png'),
(80029, 26, 'Espartilho vermelho', '79,90', 'Recco', 'Renda', 'Espartilho vermelho ', 'Espartilho vermelho de renda ', 'espartilho-vermelho', 'S', '38.png'),
(80030, 24, 'Sutiã verde', '39,90', 'Darling', 'Lisa', 'Suti&atilde; verde', 'Suti&atilde; verde lisa', 'sutia-verde', 'S', '43.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `codigo_rastreamento` varchar(20) NOT NULL,
  `pago` varchar(1) NOT NULL,
  `status_venda` varchar(100) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`id_administracao`);

--
-- Índices para tabela `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`id_item`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administracao`
--
ALTER TABLE `administracao`
  MODIFY `id_administracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80032;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
