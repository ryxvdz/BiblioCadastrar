-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2025 às 21:37
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `livro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros2`
--

CREATE TABLE `livros2` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `Autor` varchar(100) DEFAULT NULL,
  `Genero` varchar(100) DEFAULT NULL,
  `Ano_Publicacao` varchar(100) DEFAULT NULL,
  `Preco` decimal(10,2) DEFAULT NULL,
  `Sinopse` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros2`
--

INSERT INTO `livros2` (`ID`, `titulo`, `Autor`, `Genero`, `Ano_Publicacao`, `Preco`, `Sinopse`) VALUES
(1, 'O Senhor dos Anéis', 'J.R.R. Tolkien', 'Fantasia', NULL, NULL, NULL),
(4, 'Dom Casmurro', 'Machado de Assis', 'Romance', NULL, NULL, NULL),
(5, 'Harry Potter', 'J.K. Rowling', 'Fantasia', NULL, NULL, NULL),
(17, 'A jornada das Estrelas', 'luan silva', 'ficção Cientifica', '2023', 49.90, 'Em um futuro distante, uma tripulação de exploradores viaja pelo espaço em busca de novas formas de vida e planetas habitáveis. Porém, uma série de mistérios galácticos os coloca em risco, desafiando sua lealdade e sua sobrevivência.'),
(38, '', '', '', '', 0.00, ''),
(39, '', '', '', '', 0.00, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livros2`
--
ALTER TABLE `livros2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livros2`
--
ALTER TABLE `livros2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
