-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2019 às 14:56
-- Versão do servidor: 10.1.9-MariaDB
-- Versão do PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalhofinal2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_posts`
--

CREATE TABLE `tb_posts` (
  `id_post` int(11) NOT NULL,
  `titulo_post` varchar(60) NOT NULL,
  `texto_post` varchar(140) NOT NULL,
  `data_post` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tb_posts`
--

INSERT INTO `tb_posts` (`id_post`, `titulo_post`, `texto_post`, `data_post`, `id_user`) VALUES
(8, 'Olaarrr', 'oii oi oii', '2015-01-02', 1),
(9, 'teste', 'teste', '2019-12-02', 2),
(11, 'Comer bolinhos', 'comer bolinhos que comprei', '2019-12-02', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `nome_user` varchar(15) NOT NULL,
  `senha_user` varchar(8) NOT NULL,
  `email_user` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nome_user`, `senha_user`, `email_user`) VALUES
(1, 'admin', 'admin', 'admin@ad'),
(2, 'teste', 'teste', 'teste@t'),
(3, 'SrBolinho', '1234', 'bo@linho.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user_fk` (`id_user`);

--
-- Índices de tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_posts`
--
ALTER TABLE `tb_posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_posts`
--
ALTER TABLE `tb_posts`
  ADD CONSTRAINT `id_user_fk` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
