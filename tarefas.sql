-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 11-Ago-2026 às 12:14
-- Versão do servidor: 8.4.7
-- versão do PHP: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dados: `taskmaster`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `horas_estimada` int NOT NULL,
  `data_limite` date NOT NULL,
  `feito` tinyint(1) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `titulo`, `descricao`, `horas_estimada`, `data_limite`, `feito`, `criado_em`) VALUES
(3, 'Refinar o Task Master - PW II', 'Voltar refinando todo o Task Master(Site com PHP de organização de tarefas).\r\nMateira: PW II', 5, '2026-09-15', 0, '2026-08-11 11:41:22'),
(4, 'Pegar ouro no Brawlhalla', 'Jogar ranqueadas e pegar ouro no jogo Brawlhalla', 1000, '2026-08-30', 0, '2026-08-11 11:42:14'),
(5, 'Desenhar', 'Fazer alguns desenho no sketch book', 2, '2026-08-13', 1, '2026-08-11 11:42:51'),
(6, 'Agora essa tarefa esta certa', 'Essa tarefa esta certa, ebaa!', 0, '2026-08-12', 0, '2026-08-11 11:43:40'),
(7, 'Limpar o tenis', 'Lembrar de limpar o tenis', 0, '2026-08-20', 1, '2026-08-11 11:44:26'),
(14, 'aaaaa', 'aaaaa', 11, '0001-11-11', 0, '2026-08-11 12:08:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
