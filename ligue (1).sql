-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 09 Octobre 2013 à 12:08
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ligue`
--
CREATE DATABASE IF NOT EXISTS `ligue` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ligue`;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCateg` int(11) NOT NULL AUTO_INCREMENT,
  `nomCateg` varchar(50) NOT NULL,
  PRIMARY KEY (`idCateg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCateg`, `nomCateg`) VALUES
(1, 'Junior'),
(2, 'Senior');

-- --------------------------------------------------------

--
-- Structure de la table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `idClub` int(5) NOT NULL AUTO_INCREMENT,
  `nomClub` varchar(25) NOT NULL,
  `adresseClub` varchar(50) NOT NULL,
  `cpClub` varchar(5) NOT NULL,
  `villeClub` varchar(50) NOT NULL,
  `telClub` int(10) NOT NULL,
  `mailClub` varchar(50) NOT NULL,
  `nbJouClub` int(2) NOT NULL,
  PRIMARY KEY (`idClub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clubs`
--

INSERT INTO `clubs` (`idClub`, `nomClub`, `adresseClub`, `cpClub`, `villeClub`, `telClub`, `mailClub`, `nbJouClub`) VALUES
(1, 'club 1', 'truc rue machin', '56487', 'zefhkbzefbh', 1111111111, 'qejkc@d86fb4rf.zfr', 2316854),
(2, 'dlsfom ', 'fygvbuhn iuh vyjn RUE fjseriomgzsùtbijn', '45687', 'dhimdjbnsdr', 1112223334, 'gyndtyn@57h5r4.isdugh', 5345137);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `idClub` int(11) NOT NULL,
  `idJou` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idClub`,`idJou`,`date`),
  KEY `idJou` (`idJou`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `idJou` int(11) NOT NULL AUTO_INCREMENT,
  `nomJou` varchar(25) NOT NULL,
  `prenomJou` varchar(25) NOT NULL,
  `adresseJou` varchar(50) NOT NULL,
  `telJou` int(11) NOT NULL,
  `idClub` int(11) NOT NULL,
  `idCateg` int(11) NOT NULL,
  PRIMARY KEY (`idJou`),
  KEY `idCateg` (`idCateg`),
  KEY `idCateg_2` (`idCateg`),
  KEY `idClub` (`idClub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`idJou`, `nomJou`, `prenomJou`, `adresseJou`, `telJou`, `idClub`, `idCateg`) VALUES
(1, 'Dupond', 'Lala', '4 plca 55000 Bar', 303030303, 1, 1),
(2, 'Pipo', 'Jean', 'rue de la de la rue 75000 Paris', 606060606, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `idMem` int(11) NOT NULL AUTO_INCREMENT,
  `loginMem` varchar(50) NOT NULL,
  `mdpMem` varchar(50) NOT NULL,
  PRIMARY KEY (`idMem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`idMem`, `loginMem`, `mdpMem`) VALUES
(1, 'tutu', 'tutu'),
(2, 'toot', 'toot');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`idClub`) REFERENCES `clubs` (`idClub`),
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`idJou`) REFERENCES `joueur` (`idJou`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`idCateg`) REFERENCES `categorie` (`idCateg`),
  ADD CONSTRAINT `joueur_ibfk_2` FOREIGN KEY (`idClub`) REFERENCES `clubs` (`idClub`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
