-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 02 mars 2019 à 18:20
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_web_2019`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'toto', '$2y$10$vecze/V//nVxqjpk2VqMOuk46PoPs/ol.xdB4.0OTtj1Z.ee0W4a.'),
(2, 'adrien', '$2y$10$IaHVurBdcaaf3dYKJyKHyOEbX..wtrXtybIBL0cMVnQFv7VkyTpv.'),
(3, 'test', '$2y$10$TSaPOpk.wTiCqerTBjc4COd5Ovx9v3n6gVYvqPBP7snD1NFQqryv6'),
(4, 'alissa', '$2y$10$8nFfszUdmd71v0JWvG1qS.FLvFdWJo2I3ifWfYTleZBOK2vi4yVHW'),
(5, 'alissa', '$2y$10$52wf5.WH8wdX2fw1Hgt4Qewi85WXJEgFMRpnML6CR/xTUZqS1qHqi'),
(6, 'Ashe', '$2y$10$eYrfv7D8XLzUmwcSZylPfOKvLBIqDD/RfJojSVa8Opf8n41dvC7RG');

-- --------------------------------------------------------

--
-- Structure de la table `weirdobject`
--

CREATE TABLE `weirdobject` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(5) NOT NULL,
  `imgURL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `weirdobject`
--

INSERT INTO `weirdobject` (`id`, `name`, `description`, `price`, `imgURL`) VALUES
(1, 'Le dentier USB', 'Une clé qui a du mordant, toujours à portée de dents', 10, 'img/usb_dentier.jpg'),
(2, 'Toilettes Star Wars', 'Que la force soit avec vous', 20, 'img/toilettes_sw.jpg'),
(4, 'Le lama chiffounette', 'Le lama qui nettoie tout', 3, 'https://www.mr-etrange.fr/wp-content/uploads/2018/05/plumeau-lama-insolite-350x350.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `weirdobject`
--
ALTER TABLE `weirdobject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `weirdobject`
--
ALTER TABLE `weirdobject`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
