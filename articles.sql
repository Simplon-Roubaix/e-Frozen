-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 18 Septembre 2017 à 10:08
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frozen`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `mini_contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `prix`, `contenu`, `mini_contenu`) VALUES
(1, 'Barbies Anna & Elsa', 35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.'),
(2, 'Déguisement Elsa', 55, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n'),
(3, 'Brosse à cheveux', 15, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut imperdiet risus. In dignissim leo at ligula pretium tincidunt.');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
