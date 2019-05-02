-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 02 mai 2019 à 21:57
-- Version du serveur :  5.7.25
-- Version de PHP :  7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplon`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mail`, `telephone`) VALUES
(2, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(3, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(4, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(5, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(6, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(7, 'lamorski', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(8, 'ererezrerez', 'ezdazeefe', 'parshimipopeli@sfr.fr', 77282828),
(9, 'ererezrerez', 'ezdazeefe', 'parshimipopeli@sfr.fr', 77282828),
(10, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(11, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(12, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(13, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(14, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(15, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(16, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(17, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(18, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(19, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(20, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(21, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(22, 'Greg', 'laura', 'colinjp@test.com', 77282828),
(23, 'lamorski', 'laura', 'ALEXDOUCHET@GMAIL.FR', 77282828),
(24, 'lamorski', 'laura', 'ALEXDOUCHET@GMAIL.FR', 77282828),
(25, 'lamorski', 'laura', 'ALEXDOUCHET@GMAIL.FR', 77282828),
(26, 'latour', 'laura', 'parshimipopeli@sfr.fr', 77282828),
(27, 'robert', 'romain', 'azert@jsjskjsefklefk.fr', 77282828),
(28, 'robert', 'romain', 'azert@jsjskjsefklefk.fr', 77282828),
(29, 'lamorski', 'romain', 'azert@jsjskjsefklefk.fr', 77282828),
(30, 'lamorski', 'romain', 'azert@jsjskjsefklefk.fr', 77282828),
(31, 'lamorski', 'romain', 'azert@jsjskjsefklefk.fr', 77282828),
(32, 'pascal', 'philippe', 'parshimipopeli@sfr.fr', 77282828),
(33, 'lamorskiazezazeza', 'philippe', 'parshimipopeli@sfr.fr', 77282828);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
