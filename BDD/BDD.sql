-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 26 fév. 2019 à 16:13
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
-- Structure de la table `USERS`
--

CREATE TABLE `USERS` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `USERS`
--

INSERT INTO `USERS` (`id`, `name`, `password`) VALUES
(1, 'toto', '$2y$10$vecze/V//nVxqjpk2VqMOuk46PoPs/ol.xdB4.0OTtj1Z.ee0W4a.'),
(2, 'adrien', '$2y$10$IaHVurBdcaaf3dYKJyKHyOEbX..wtrXtybIBL0cMVnQFv7VkyTpv.'),
(3, 'test', '$2y$10$TSaPOpk.wTiCqerTBjc4COd5Ovx9v3n6gVYvqPBP7snD1NFQqryv6'),
(4, 'alissa', '$2y$10$8nFfszUdmd71v0JWvG1qS.FLvFdWJo2I3ifWfYTleZBOK2vi4yVHW'),
(5, 'alissa', '$2y$10$52wf5.WH8wdX2fw1Hgt4Qewi85WXJEgFMRpnML6CR/xTUZqS1qHqi');