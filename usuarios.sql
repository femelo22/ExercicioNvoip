-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jun-2020 às 21:49
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuarios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(60) COLLATE latin7_bin NOT NULL,
  `sobrenome` varchar(45) COLLATE latin7_bin NOT NULL,
  `email` varchar(50) COLLATE latin7_bin NOT NULL,
  `cpf` varchar(45) COLLATE latin7_bin NOT NULL,
  `cep` varchar(9) COLLATE latin7_bin NOT NULL,
  `endereco` varchar(45) COLLATE latin7_bin NOT NULL,
  `bairro` varchar(45) COLLATE latin7_bin NOT NULL,
  `cidade` varchar(45) COLLATE latin7_bin NOT NULL,
  `estado` varchar(3) COLLATE latin7_bin NOT NULL,
  `pais` varchar(45) COLLATE latin7_bin NOT NULL,
  `telefone` varchar(20) COLLATE latin7_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_bin;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `sobrenome`, `email`, `cpf`, `cep`, `endereco`, `bairro`, `cidade`, `estado`, `pais`, `telefone`) VALUES
(9, 'Marcio', 'pereira', 'marcinho@gmail.com', '123.45.789.00', '36021589', 'Rua Carlos Chagas', 'Cascatinha', 'Juiz de Fora', 'MG', 'BRASIL', '(32) 99885-8455'),
(10, 'Amarildo', 'Sao Tomé', 'ooamaril@gmail.com', '123.698.745-00', '37408970', 'Rua Marcionilio Ribeiro Costa 150-A', 'Centro', 'S?o Thomé das Letras', 'MG', 'BRASIL', '(32) 98147-5557'),
(11, 'Maria ', 'da Silva Neto', 'mariasilva@gmail.com', '125.789.475-15', '60180-180', 'Vila Lambari', 'Cais do Porto', 'Fortaleza', 'CE', 'BRASIL', '(32) 99987-7874'),
(13, 'Fernanda', 'Garcia', 'fernanda@garcia.com', '200.189.144-33', '36021670', 'Rua Coronel Vaz de Melo', 'Bom Pastor', 'Juiz de Fora', 'MG', 'BRASIL', '(32) 99987-7414');

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_hora` date NOT NULL,
  `acao` varchar(45) COLLATE latin7_bin NOT NULL,
  `dados` varchar(45) COLLATE latin7_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_log` (`id_cliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_log` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
