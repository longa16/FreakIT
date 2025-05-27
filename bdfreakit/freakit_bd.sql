-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 06 fév. 2024 à 11:39
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `freakit_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(12, 'halloween'),
(13, 'Movie'),
(10, 'Cosplay'),
(4, 'Horror');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `GENDER` varchar(1) NOT NULL,
  `PSEUDO` varchar(10) NOT NULL,
  `MAIL` varchar(33) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `BANNER` varchar(140) NOT NULL,
  `ROLE` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'member',
  `ACTIVATED` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`ID`, `GENDER`, `PSEUDO`, `MAIL`, `BIRTHDATE`, `PASSWORD`, `BANNER`, `ROLE`, `ACTIVATED`) VALUES
(23, 'm', 'yann23', 'yannnagassa35@gmail.com', '2000-05-16', '$2y$10$6M0JYhb2t1Y9U.gS1Tpp9eY2TdPfkq0nVKtvPgWdJou/h9RXBzLS6', 'aqsdfghjkloiuytreza', 'admin', 1),
(24, 'f', 'Audrey1', 'audrey@gmail.com', '2000-02-16', '$2y$10$U.w60391qA8cbM3g/jf6Ze6RnHzAjq1f2w5ywvglQXoCvbEbBk09S', 'Hello world', 'member', 1);

-- --------------------------------------------------------

--
-- Structure de la table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PSEUDO` varchar(33) NOT NULL,
  `IDTOPIC` int NOT NULL,
  `REPLY` varchar(255) NOT NULL,
  `REPLYDATE` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `PSEUDO` varchar(10) NOT NULL,
  `TITLE` varchar(33) NOT NULL,
  `CATEGORY` varchar(12) NOT NULL,
  `TOPIC` varchar(255) NOT NULL,
  `TOPICDATE` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `IMAGE` varchar(1000) NOT NULL,
  `LINK` varchar(1000) NOT NULL,
  `STATE` varchar(7) NOT NULL DEFAULT 'open',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`ID`, `PSEUDO`, `TITLE`, `CATEGORY`, `TOPIC`, `TOPICDATE`, `IMAGE`, `LINK`, `STATE`) VALUES
(43, 'audrey1', 'Le 31 octobre', 'Movie', 'Hello world ❤️', '04/02/24 13:07', 'https://www.youtube.com', 'https://www.youtube.com', 'closed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
