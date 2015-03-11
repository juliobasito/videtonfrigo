-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Novembre 2014 à 10:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cdbase`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `infoAlbum`(IN p_IDAlbum int)
BEGIN
	SELECT		Al.*, Ar.nom
	FROM		album Al, artiste Ar 
	WHERE 		Ar.ID = Al.IDArtiste
	AND			Al.ID = p_IDAlbum;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listeAlbums`()
    READS SQL DATA
SELECT		*
FROM		album
ORDER BY	titre$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `listePistesAlbum`(IN `p_IDAlbum` INT)
    READS SQL DATA
SELECT 	*
FROM	piste
WHERE	IDAlbum = p_IDAlbum$$

--
-- Fonctions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `nbPistes`() RETURNS int(11)
    NO SQL
return 17$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `dateParution` datetime DEFAULT NULL,
  `IDArtiste` int(11) DEFAULT NULL,
  `jaquette` varchar(255) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`ID`, `dateParution`, `IDArtiste`, `jaquette`, `titre`) VALUES
(1, '1987-03-09 00:00:00', 1, 'The_Joshua_Tree.png', 'The Joshua Tree'),
(2, '1983-02-28 00:00:00', 1, 'War.jpg', 'War');

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`ID`, `nom`) VALUES
(1, 'U2'),
(2, 'Tino Rossi'),
(3, 'Metallica');

-- --------------------------------------------------------

--
-- Structure de la table `piste`
--

CREATE TABLE IF NOT EXISTS `piste` (
  `IDAlbum` int(11) NOT NULL,
  `IDPiste` int(11) NOT NULL,
  `duree` varchar(45) DEFAULT NULL,
  `titre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`IDAlbum`,`IDPiste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `piste`
--

INSERT INTO `piste` (`IDAlbum`, `IDPiste`, `duree`, `titre`) VALUES
(1, 1, '5:36', 'Where the Streets Have No Name'),
(1, 2, '4:37', 'I Still Haven''t Found What I''m Looking For'),
(1, 3, '4:55', 'With or Without You'),
(1, 4, '4:32', 'Bullet the Blue Sky'),
(1, 5, '4:17', 'Running to Stand Still'),
(1, 6, '4:54', 'Red Hill Mining Town'),
(1, 7, '2:52', 'In God''s Country'),
(1, 8, '3:32', 'Trip Through Your Wires'),
(1, 9, '4:43', 'One Tree Hill'),
(1, 10, '4:53', 'Exit'),
(1, 11, '5:12', 'Mothers of the Disappeared'),
(2, 1, '3:00', 'New Year ''s Day');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
