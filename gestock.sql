-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : sam. 15 oct. 2022 à 16:55
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
-- Structure de la table `CATG`
--

CREATE TABLE `CATG` (
  `id` int NOT NULL,
  `CATD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `PROD`
--

CREATE TABLE `PROD` (
  `id` int NOT NULL,
  `prodcode` varchar(50) NOT NULL,
  `prodname` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `proddesc` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `prodimg` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `prodcat` int NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `PROD`
--

INSERT INTO `PROD` (`id`, `prodcode`, `prodname`, `proddesc`, `prodimg`, `prodcat`, `price`) VALUES
(1, 'ART000001', 'Article 1', 'Description', '', 1, '12000.00'),
(2, 'ART000002', 'Article 2', 'Description', '', 1, '8000.00'),
(3, 'ART000003', 'test', 'sssssss', '', 1, '8000.00'),
(4, 'ART000004', 'Mimi', 'Test\r\nTESt', '', 1, '9000.00'),
(5, 'ART000005', 'zzzzzzzzz', 'zzzzzzzzzzzzzz', '', 1, '1632.00'),
(6, 'ART000006', 'qsdqsd', 'qsdqsd', 'photo1664724027.jpeg', 1, '6000.00'),
(7, 'ART000007', 'qsdqsd', 'qsdqsd', 'photo1664724027.jpeg', 1, '9000.00'),
(8, 'ART000008', 'qsdqsdqsdqd', 'qsdqsdqsd', 'photo1664724027.jpeg', 1, '9000.00'),
(9, 'ART000009', 'sdfdf', 'sdfsdf', 'photo1664724027.jpeg', 1, '9000.00'),
(10, 'ART000010', 'sdfdf', 'qsdqsd', 'photo1664724027.jpeg', 1, '200000.00'),
(12, 'ART000011', 'qqqqqqqqqqq', 'qqqqqqqqqqqqqq', 'photo1664724027.jpeg', 1, '23232.00'),
(13, 'ART000012', 'ssss', 'ssssssss', NULL, 1, '8000.00'),
(17, 'ART000013', 'qqqqqqqqq', 'qqqqqqqqqq', 'ART000013', 1, '8000.00'),
(18, 'ART000014', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqq', 'ART000014', 1, '8000.00'),
(19, 'ART000015', 'Mimi2', 'ssssss', 'ART000015', 1, '9000.00'),
(20, 'ART000016', 'Mimi23', 'qqqqqqq', 'ART000016', 1, '8000.00');

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
-- Index pour la table `CATG`
--
ALTER TABLE `CATG`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `CATG`
--
ALTER TABLE `CATG`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `PROD`
--
ALTER TABLE `PROD`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
