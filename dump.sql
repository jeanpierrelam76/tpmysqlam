-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 21 jan. 2024 à 01:40
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `module6`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cv` text NOT NULL,
  `dt_naissance` date NOT NULL,
  `is_Admin` tinyint(1) NOT NULL DEFAULT '0',
  `dt_mis_a_jour` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `prenom`, `nom`, `email`, `cv`, `dt_naissance`, `is_Admin`, `dt_mis_a_jour`) VALUES
(1, 'gerard', 'depardeux', 'gege@gmail.com', 'gros mangeur', '1953-02-03', 0, '2023-06-12 00:00:00'),
(2, 'Alain', 'Deloin', 'aleunumero1@yahoo.fr', 'moi,moi meme et je', '1948-12-24', 0, '2021-06-11 00:00:00'),
(3, 'Celine', 'Fion', 'jetaime@outlook.fr', 'chanteuse canadienne', '1968-06-23', 0, '2020-03-02 00:00:00'),
(4, 'pierre', 'richard', 'lachevre@msn.com', 'poissard', '1950-04-17', 0, '2018-03-01 00:00:00'),
(5, 'Bud', 'Spencer', 'legros@hotmail.fr', 'donneur de baffes', '1956-07-23', 0, '2020-09-15 00:00:00'),
(6, 'Jackie', 'Chan', 'lahyene@yahoo.com', 'cascadeur', '1951-05-26', 0, '2012-03-03 00:00:00'),
(7, 'Paul', 'Belmondo', 'lasdesas@hotmail.fr', 'toctoctagada', '1946-10-03', 0, '2010-02-12 00:00:00'),
(8, 'Brigitte', 'Bardot', 'lablonde@gmail.com', 'blonde', '1965-12-03', 0, '2012-12-12 00:00:00'),
(9, 'Deneuve', 'Catherine', 'deneuve@caramail.com', 'actrice', '1955-08-23', 0, '2018-12-10 00:00:00'),
(10, 'Jean', 'Dujardin', 'jdujardin@yahoo.com', 'nous c\'est nous', '1970-11-05', 0, '2021-12-23 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
