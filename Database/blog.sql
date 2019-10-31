-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 31-Out-2019 às 18:23
-- Versão do servidor: 5.7.28
-- versão do PHP: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_action` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `action_user` varchar(200) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `logs`
--

INSERT INTO `logs` (`id`, `id_user`, `date_action`, `action_user`, `ip`) VALUES
(141, 129, '2019-10-31 16:13:52', '[Novo] Usuario kenzo foi criado com sucesso!', '172.21.0.1'),
(142, 129, '2019-10-31 16:14:12', '[Postou] id_post:26, Titulo do post: The title 2', '172.21.0.1'),
(143, 129, '2019-10-31 16:14:17', '[Editou] id_post:26, Titulo do post: The title', '172.21.0.1'),
(144, 129, '2019-10-31 16:14:25', '[Postou] id_post:27, Titulo do post: Almoço', '172.21.0.1'),
(145, 129, '2019-10-31 16:14:30', '[Deletado] id_post:26, Titulo do post: The title', '172.21.0.1'),
(146, 130, '2019-10-31 16:15:36', '[Novo] Usuario lucas foi criado com sucesso!', '172.21.0.1'),
(147, 130, '2019-10-31 16:15:47', '[Postou] id_post:28, Titulo do post: teste', '172.21.0.1'),
(148, 130, '2019-10-31 16:16:13', '[Deletado] id_post:28, Titulo do post: teste', '172.21.0.1'),
(149, 129, '2019-10-31 16:19:20', '[Editou] id_post:27, Titulo do post: Almoçoasda', '172.21.0.1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`, `user_id`) VALUES
(27, 'Almoçoasda', 'asdasdasdasd', '2019-10-31 16:14:25', '2019-10-31 16:19:20', 129);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(129, 'kenzo', '$2a$10$YuocN73Usg4bvbE954R/UuhHMGyE5dieFNlcN6jJs/QeXDyn5XOre', 'admin', '2019-10-31 16:13:52', '2019-10-31 16:13:52'),
(130, 'lucas', '$2a$10$iZdZm.9CKJKmh6qZrebxNOWE5S36sG4PeIb1PBMQu7tch3YYYqBEe', 'author', '2019-10-31 16:15:36', '2019-10-31 16:15:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
