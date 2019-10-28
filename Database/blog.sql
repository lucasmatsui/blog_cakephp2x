-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 28-Out-2019 às 17:57
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
(21, 'Post', 'Testando o primeiro post', '2019-10-28 11:23:21', '2019-10-28 11:23:21', 12),
(22, 'teste', 'teste', '2019-10-28 11:32:37', '2019-10-28 11:32:37', 13),
(23, 'Almoço', 'Meu almoço hoje será muito bom', '2019-10-28 13:52:08', '2019-10-28 13:52:08', 12),
(27, 'Postando astolfo', 'EU SOU O ASTOLFO E EU GOSTO MUITO DE PROGRAMAR\r\n', '2019-10-28 17:30:43', '2019-10-28 17:30:43', 16);

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
(12, 'kenzo', '$2a$10$5DwfNvdHipVl2o5AN/SsRed0HyHFWDv0/E0t3hgdguAKJUTCkW1ji', 'admin', '2019-10-28 11:21:29', '2019-10-28 11:21:29'),
(13, 'lucas', '$2a$10$Ps9cAnalu5Tanh.Y0Ww/MOOFSS5OW0JFzuZnMC32ovd.E/JYhO.8u', 'author', '2019-10-28 11:23:40', '2019-10-28 11:23:40'),
(14, 'fernando', '$2a$10$3GVH2s8mib/o4hWnqVVsH.HaFiEb8zw/zFUfd/siBIP67qLlS/GmK', 'author', '2019-10-28 13:59:06', '2019-10-28 13:59:06'),
(15, 'rodrigo', '$2a$10$e0.e6zI3l0t2/Yp5x1KWOuX7dv5ZwX8x.Kl0elpEZFgB/07B.r1jm', 'author', '2019-10-28 17:22:28', '2019-10-28 17:22:28'),
(16, 'astolfo', '$2a$10$ay0ad7CVjx/fs/Jp5zI/5e32S14586K1XJWJrsOXD2THUaZZOH6wO', 'author', '2019-10-28 17:30:16', '2019-10-28 17:30:16');

--
-- Índices para tabelas despejadas
--

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
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
