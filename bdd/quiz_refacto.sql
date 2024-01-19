-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 19 jan. 2024 à 13:53
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz_refacto`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `intitulé` varchar(255) NOT NULL,
  `isCorrect` tinyint(1) NOT NULL,
  `idQuestion` bigint NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `intitulé`, `isCorrect`, `idQuestion`) VALUES
(1, 'soleil', 0, 1),
(2, 'jupiter', 0, 1),
(3, 'neptune', 0, 1),
(4, 'la lune', 1, 1),
(5, 'titan machin truc', 0, 2),
(6, 'saturne', 0, 2),
(7, 'mars', 0, 2),
(8, 'neptune', 1, 2),
(9, 'bassiste de MJ', 0, 3),
(10, 'livreur', 0, 3),
(11, 'compositeur', 1, 3),
(12, 'interimaire', 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `intitulé` varchar(255) NOT NULL,
  `explication` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `intitulé`, `explication`) VALUES
(1, 'Quel est le satellite naturel de la Terre ?', 'C\'est la lune !'),
(2, 'Quel est la huitième planète du système solaire ?', 'Il s\'agit de Neptune'),
(3, 'Quel était la profession principale de Mozart ?', 'Mozart était compositeur, mais aussi pianiste, organiste ...');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `theme` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`id`, `theme`) VALUES
(1, 'classique'),
(2, 'espace');

-- --------------------------------------------------------

--
-- Structure de la table `quiz_question`
--

DROP TABLE IF EXISTS `quiz_question`;
CREATE TABLE IF NOT EXISTS `quiz_question` (
  `idQuiz` bigint NOT NULL,
  `idQuestion` bigint NOT NULL,
  `id` bigint NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quiz_question`
--

INSERT INTO `quiz_question` (`idQuiz`, `idQuestion`, `id`) VALUES
(2, 1, 1),
(2, 2, 2),
(1, 1, 3),
(1, 2, 4),
(1, 3, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
