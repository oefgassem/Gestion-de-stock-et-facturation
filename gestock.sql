-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : lun. 31 oct. 2022 à 21:24
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
  `CATD` varchar(100) NOT NULL,
  `DESCR` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `PARENT` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `CATG`
--

INSERT INTO `CATG` (`id`, `CATD`, `DESCR`, `PARENT`) VALUES
(6, 'Main', 'Catégorie principale', NULL),
(7, 'Vêtements', 'Vêtement et habillement', 6),
(8, 'Accessoires', '', 6),
(9, 'Accessoires', '', 6),
(10, '', '', NULL),
(11, '', '', NULL),
(12, 'sss', '', NULL),
(13, 'sss', '', NULL),
(14, 'Livres', '', 6);

-- --------------------------------------------------------

--
-- Structure de la table `OBJC`
--

CREATE TABLE `OBJC` (
  `id` int NOT NULL,
  `objectname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `OCRD`
--

CREATE TABLE `OCRD` (
  `id` int NOT NULL,
  `partname` varchar(200) NOT NULL,
  `parttype` varchar(1) NOT NULL,
  `cardcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `OCRD`
--

INSERT INTO `OCRD` (`id`, `partname`, `parttype`, `cardcode`) VALUES
(1, 'Client test', 'C', 'C22000001'),
(2, 'Vecopharm', 'C', 'C22000002');

-- --------------------------------------------------------

--
-- Structure de la table `ORDR`
--

CREATE TABLE `ORDR` (
  `id` int NOT NULL,
  `DocNum` varchar(10) NOT NULL,
  `DocDate` date NOT NULL,
  `DocType` int NOT NULL,
  `CANCELED` varchar(1) NOT NULL,
  `DocStatus` varchar(1) NOT NULL,
  `part_id` int NOT NULL,
  `part_name` int NOT NULL,
  `Totalvalue` float NOT NULL,
  `VAT` float NOT NULL,
  `DocTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `OSTK`
--

CREATE TABLE `OSTK` (
  `id` int NOT NULL,
  `DocNum` varchar(10) NOT NULL,
  `DocDate` date NOT NULL,
  `DocType` int NOT NULL,
  `CANCELED` varchar(1) NOT NULL,
  `DocStatus` varchar(1) NOT NULL,
  `part_id` int NOT NULL,
  `part_name` int NOT NULL,
  `Totalvalue` float NOT NULL,
  `VAT` float NOT NULL,
  `DocTotal` float NOT NULL,
  `sourcetype` int NOT NULL,
  `sourceid` int NOT NULL
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
(1, 'ART000001', 'Article 1', 'Description', '', 7, '12000.00'),
(2, 'ART000002', 'Article 2', 'Description', '', 7, '8000.00'),
(3, 'ART000003', 'test', 'sssssss', '', 7, '8000.00'),
(4, 'ART000004', 'Mimi', 'Test\r\nTESt', '', 7, '9000.00'),
(5, 'ART000005', 'zzzzzzzzz', 'zzzzzzzzzzzzzz', '', 7, '1632.00'),
(6, 'ART000006', 'qsdqsd', 'qsdqsd', 'photo1664724027.jpeg', 7, '6000.00'),
(7, 'ART000007', 'qsdqsd', 'qsdqsd', 'photo1664724027.jpeg', 7, '9000.00'),
(8, 'ART000008', 'qsdqsdqsdqd', 'qsdqsdqsd', 'photo1664724027.jpeg', 7, '9000.00'),
(9, 'ART000009', 'sdfdf', 'sdfsdf', 'photo1664724027.jpeg', 7, '9000.00'),
(10, 'ART000010', 'sdfdf', 'qsdqsd', 'photo1664724027.jpeg', 7, '200000.00'),
(12, 'ART000011', 'qqqqqqqqqqq', 'qqqqqqqqqqqqqq', 'photo1664724027.jpeg', 7, '23232.00'),
(13, 'ART000012', 'ssss', 'ssssssss', NULL, 7, '8000.00'),
(17, 'ART000013', 'qqqqqqqqq', 'qqqqqqqqqq', 'ART000013', 7, '8000.00'),
(18, 'ART000014', 'qqqqqqqqqqqqqqqqq', 'qqqqqqqqqqqqqqq', 'ART000014', 7, '8000.00'),
(19, 'ART000015', 'Mimi2', 'ssssss', 'ART000015', 7, '9000.00'),
(20, 'ART000016', 'Mimi23', 'qqqqqqq', 'ART000016', 7, '8000.00'),
(21, 'ART000017', 'qqqqqqqqqq', 'qqqqqqqq', 'ART000017', 1, '8000.00');

-- --------------------------------------------------------

--
-- Structure de la table `RDR1`
--

CREATE TABLE `RDR1` (
  `id` int NOT NULL,
  `linenum` int NOT NULL,
  `prod_id` int NOT NULL,
  `prodname` varchar(200) NOT NULL,
  `qty` float NOT NULL,
  `unitval` float NOT NULL,
  `direction` int NOT NULL,
  `warehouse_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `STK1`
--

CREATE TABLE `STK1` (
  `id` int NOT NULL,
  `linenum` int NOT NULL,
  `prod_id` int NOT NULL,
  `prodname` varchar(200) NOT NULL,
  `qty` float NOT NULL,
  `unitval` float NOT NULL,
  `direction` int NOT NULL,
  `warehouse_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
-- Index pour la table `OCRD`
--
ALTER TABLE `OCRD`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CardCode` (`cardcode`);

--
-- Index pour la table `ORDR`
--
ALTER TABLE `ORDR`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `DocNum` (`DocNum`);

--
-- Index pour la table `OSTK`
--
ALTER TABLE `OSTK`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `DocNum` (`DocNum`);

--
-- Index pour la table `PROD`
--
ALTER TABLE `PROD`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prodcode` (`prodcode`);

--
-- Index pour la table `RDR1`
--
ALTER TABLE `RDR1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `STK1`
--
ALTER TABLE `STK1`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `OCRD`
--
ALTER TABLE `OCRD`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ORDR`
--
ALTER TABLE `ORDR`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `OSTK`
--
ALTER TABLE `OSTK`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `PROD`
--
ALTER TABLE `PROD`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
