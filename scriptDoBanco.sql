-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2020 às 04:42
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
(10, 'Ricardo', 'Junior', 'ooamaril@gmail.com', '123.689.745-00', '37408970', 'Rua Petunias', 'centro', 'Juiz de Fora', 'MG', 'BRASIL', '3299954412'),
(11, 'Maria ', 'da Silva Neto', 'mariasilva@gmail.com', '125.789.475-15', '60180-180', 'Vila Lambari', 'Cais do Porto', 'Fortaleza', 'CE', 'BRASIL', '32999877874'),
(13, 'Fernanda', 'Garcia', 'fernanda@garcia.com', '200.189.144-33', '36021670', 'Rua Coronel Vaz de Melo', 'Bom Pastor', 'Juiz de Fora', 'MG', 'BRASIL', '32999877414'),
(15, 'Rafaela', 'Pecci', 'rafa@gmail.com', '124.784.784-57', '36016550', 'Rua Oleg?rio Maciel', 'Dom Bosco', 'Juiz de Fora', 'MG', 'BRASIL', '32991759409'),
(16, 'Rafaelinha', 'Gac', 'rafasgac@hotmail.com', '200.158.784-45', '36016550', 'Rua Olegario Maciel', 'Dom Bosco', 'Juiz de Fora', 'MG', 'BRASIL', '99999855454'),
(19, 'Chico ', 'Barao', 'chiquinho@gmail.com', '124.147.547-64', '36020-660', 'Rua Alexandre Joaquim de Siqueira', 'Vila Ideal', 'Juiz de Fora', 'MG', 'BRASIL', '32999956148'),
(20, 'Edicleiton', 'Rasta', 'cabecadegelo@gmail.com', '301.214.574-57', '40221-015', 'Avenida Xisto Bahia', 'Engenho Velho da Federo', 'Salvador', 'BA', 'BRASIL', '32999999999');

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
