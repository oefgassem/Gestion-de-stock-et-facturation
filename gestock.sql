-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : sam. 15 oct. 2022 à 13:07
-- Version du serveur : 8.0.30
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestock`
--

-- --------------------------------------------------------

--
-- Structure de la table `PROD`
--

CREATE TABLE `PROD` (
  `id` int NOT NULL,
  `prodcode` varchar(50) NOT NULL,
  `prodname` varchar(200) NOT NULL,
  `proddesc` varchar(1000) NOT NULL,
  `prodimg` varchar(1000) NOT NULL,
  `prodcat` int NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `PROD`
--

INSERT INTO `PROD` (`id`, `prodcode`, `prodname`, `proddesc`, `prodimg`, `prodcat`, `price`) VALUES
(1, 'ART000001', 'Article 1', 'Description', '', 1, 12000),
(2, 'ART000002', 'Article 2', 'Description', '', 1, 8000);

-- --------------------------------------------------------

--
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `USER`
--

INSERT INTO `USER` (`id`, `email`, `password`) VALUES
(1, 'oefgassem@gmail.com', 'ab4f63f9ac65152575886860dde480a1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `PROD`
--
ALTER TABLE `PROD`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodcode` (`prodcode`);

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `PROD`
--
ALTER TABLE `PROD`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
