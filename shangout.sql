-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 18:09
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shangout`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `are_friends`
--

CREATE TABLE `are_friends` (
  `id` int(11) NOT NULL,
  `frnd_one_id` int(11) DEFAULT NULL,
  `frnd_two_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `extra` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `are_friends`
--

INSERT INTO `are_friends` (`id`, `frnd_one_id`, `frnd_two_id`, `status`, `extra`) VALUES
(1, 2, 3, 1, 0),
(2, 3, 2, 1, 0),
(3, 1, 2, 1, 0),
(4, 2, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_name` varchar(50) DEFAULT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `comp` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `friends`
--

INSERT INTO `friends` (`id`, `receiver_id`, `receiver_name`, `friend_id`, `friend_name`, `status`, `comp`) VALUES
(1, 2, 'Maria', 3, 'Me Real', 1, 1),
(2, 1, 'Paulo', 2, 'Maria', 1, 1),
(3, 1, 'Paulo', 3, 'Me Real', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message`) VALUES
(1, 2, 3, 'send mail');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_here`
--

CREATE TABLE `status_here` (
  `id` int(11) NOT NULL,
  `status` varchar(300) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `future_use` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status_here`
--

INSERT INTO `status_here` (`id`, `status`, `user_id`, `timestamp`, `future_use`) VALUES
(1, ' estÃ¡ esquinado!', 1, '2018-05-14 10:44:21', NULL),
(2, ' ainda nÃ£o consegui obter o request.', 1, '2018-05-14 10:47:22', NULL),
(3, ' aaaa', 3, '2018-05-14 12:16:34', NULL),
(4, ' bbbb', 3, '2018-05-14 12:17:21', NULL),
(5, ' ccc', 3, '2018-05-14 17:36:54', NULL),
(6, ' uah!!!', 1, '2018-05-14 18:03:55', NULL),
(11, ' Status: Feeling Lime!', 2, '2018-05-14 19:14:07', NULL),
(12, ' Status: Feeling Lime!', 2, '2018-05-14 19:14:42', NULL),
(13, ' Status: Feeling Lime!', 2, '2018-05-14 19:18:38', NULL),
(14, ' Status: Feeling Lime!', 2, '2018-05-14 19:19:31', NULL),
(17, 'Hello!', 3, '2018-05-15 13:04:30', NULL),
(19, 'Hello again!', 3, '2018-05-15 13:08:28', NULL),
(20, ' aaaaaa', 3, '2018-05-15 13:19:49', NULL),
(21, 'hello!', 3, '2018-05-15 13:30:31', NULL),
(22, 'serÃ¡ que seim?', 3, '2018-05-15 13:33:03', NULL),
(23, ' O estado da maria Ã© preocupada!\r\nMando-me o resumo de HistÃ³ria.', 2, '2018-05-15 15:30:34', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `AGE` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `AGE`, `gender`, `password`) VALUES
(1, 'Paulo', 'nowhere@nowhere.com', 18, 'M', '123'),
(2, 'Maria', 'maria@maria.pt', 19, 'F', '123'),
(3, 'Me Real', 'pmpreis@gmail.com', 22, 'M', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `are_friends`
--
ALTER TABLE `are_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_here`
--
ALTER TABLE `status_here`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status_here`
--
ALTER TABLE `status_here`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
