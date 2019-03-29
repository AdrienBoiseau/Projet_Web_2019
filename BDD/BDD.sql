-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 29 mars 2019 à 09:59
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projet_web_2019`
--
CREATE DATABASE IF NOT EXISTS `projet_web_2019` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet_web_2019`;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `name`, `password`) VALUES
(1, 'toto', '$2y$10$vecze/V//nVxqjpk2VqMOuk46PoPs/ol.xdB4.0OTtj1Z.ee0W4a.');

-- --------------------------------------------------------

--
-- Structure de la table `weirdobject`
--

CREATE TABLE `weirdobject` (
  `id_weirdobject` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(5) NOT NULL,
  `imgURL` varchar(100) NOT NULL,
  `id_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `weirdobject`
--

INSERT INTO `weirdobject` (`id_weirdobject`, `name`, `description`, `price`, `imgURL`, `id_users`) VALUES
(1, 'Le dentier USB', 'Une clé qui a du mordant, toujours à portée de dents', 10, 'img/usb_dentier.jpg', 0),
(2, 'Toilettes Star Wars', 'Que la force soit avec vous', 20, 'img/toilettes_sw.jpg', 0),
(4, 'Le lama chiffounette', 'Le lama qui nettoie tout', 3, 'https://www.mr-etrange.fr/wp-content/uploads/2018/05/plumeau-lama-insolite-350x350.jpg', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `weirdobject`
--
ALTER TABLE `weirdobject`
  ADD PRIMARY KEY (`id_weirdobject`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `weirdobject`
--
ALTER TABLE `weirdobject`
  MODIFY `id_weirdobject` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;