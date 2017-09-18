-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 18 Septembre 2017 à 10:09
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
-- Structure de la table `cpte_user`
--

CREATE TABLE `cpte_user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cpte_user`
--

INSERT INTO `cpte_user` (`id`, `nom`, `login`) VALUES
(1, 'bob', 'blabla1'),
(2, 'boby', 'blabla2'),
(3, 'armand', 'blabla3'),
(4, 'bernadette', 'blabla4'),
(5, 'ginette', 'blabla5'),
(6, 'wilfred', 'blabla6'),
(7, 'romuald', 'blabla7');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cpte_user`
--
ALTER TABLE `cpte_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cpte_user`
--
ALTER TABLE `cpte_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
