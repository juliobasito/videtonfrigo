-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Janvier 2016 à 11:13
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vtf`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `CategorieId` int(11) NOT NULL AUTO_INCREMENT,
  `NomCategorie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CategorieId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cate_ingre`
--

CREATE TABLE IF NOT EXISTS `cate_ingre` (
  `CategorieId` int(11) NOT NULL AUTO_INCREMENT,
  `IngredientId` int(11) NOT NULL,
  PRIMARY KEY (`CategorieId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `frigo`
--

CREATE TABLE IF NOT EXISTS `frigo` (
  `FrigoId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `IngredientId` int(11) NOT NULL,
  PRIMARY KEY (`FrigoId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE IF NOT EXISTS `ingredient` (
  `IngredientId` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prix` decimal(10,0) NOT NULL,
  `unite` varchar(255) NOT NULL,
  PRIMARY KEY (`IngredientId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE IF NOT EXISTS `recette` (
  `RecetteId` int(11) NOT NULL AUTO_INCREMENT,
  `NomRecette` varchar(255) NOT NULL,
  `Complexite` float NOT NULL,
  `Note` float NOT NULL,
  `Temps` float NOT NULL,
  `nbPersonne` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `URLimg` varchar(255) NOT NULL,
  PRIMARY KEY (`RecetteId`),
  UNIQUE KEY `NomRecette` (`NomRecette`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `recette_ingr`
--

CREATE TABLE IF NOT EXISTS `recette_ingr` (
  `IngredientId` int(11) NOT NULL AUTO_INCREMENT,
  `RecetteId` int(11) NOT NULL,
  PRIMARY KEY (`IngredientId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `BirthDate` date NOT NULL,
  `City` varchar(255) NOT NULL,
  `Budget` int(11) NOT NULL,
  PRIMARY KEY (`UserId`),
  UNIQUE KEY `Pseudo` (`Pseudo`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
