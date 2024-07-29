-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 14 mai 2024 à 14:32
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_intermediaire_gwladys`
--
CREATE DATABASE IF NOT EXISTS `php_intermediaire_gwladys` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `php_intermediaire_gwladys`;

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

CREATE TABLE `advert` (
  `id_advert` int NOT NULL,
  `photo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `type` enum('achat','location') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` float NOT NULL,
  `reservation_message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id_advert`, `photo`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(18, 'logementT4.jpg', 'joli logement T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75010', 'Paris', 'location', 603, NULL),
(19, 'logementT4.jpg', 'joli logement T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75010', 'Paris', 'location', 603, NULL),
(20, 'logement2_T3.jpg', 'joli logement T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75009', 'Paris', 'achat', 30000, NULL),
(22, 'logement_T2.jpg', 'logement T4 lumineux', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75018', 'Paris', 'achat', 400000, ''),
(23, 'logement2_T3.jpg', 'beau T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75009', 'Paris', 'location', 400, NULL),
(24, 'logement_T2.jpg', 'beau T2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75001', 'Paris', 'achat', 40000, NULL),
(25, 'logement_T2.jpg', 'logement T2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75002', 'Paris', 'location', 700, NULL),
(26, 'logementT4.jpg', 'beau T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75006', 'Paris', 'location', 60000, NULL),
(27, 'logementT4.jpg', 'spacious T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75015', 'Paris', 'location', 70000, NULL),
(28, 'logementT4.jpg', 'renovated T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75011', 'Paris', 'location', 80000, NULL),
(29, 'logement2_T3.jpg', 'nice T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75016', 'Paris', 'achat', 35000, NULL),
(30, 'logement_T2.jpg', 'luxury T2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75007', 'Paris', 'achat', 500000, ''),
(31, 'logement2_T3.jpg', 'cozy T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75017', 'Paris', 'location', 500, NULL),
(32, 'logementT4.jpg', 'modern T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75012', 'Paris', 'location', 90000, NULL),
(33, 'logementT4.jpg', 'comfortable T4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75013', 'Paris', 'location', 65000, NULL),
(34, 'logement2_T3.jpg', 'spacious T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75014', 'Paris', 'achat', 40000, NULL),
(35, 'logement_T2.jpg', 'elegant T2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75019', 'Paris', 'achat', 600000, ''),
(36, 'logement2_T3.jpg', 'stylish T3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '75020', 'Paris', 'location', 700, NULL),
(39, 'logementT4.jpg', 'MODERNE T4', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '75018', 'Paris', 'location', 600, NULL),
(40, 'logementT4.jpg', 'spacieux T4', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '75010', 'Paris', 'location', 800, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id_advert`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advert`
--
ALTER TABLE `advert`
  MODIFY `id_advert` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
