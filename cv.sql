-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 03 mai 2021 à 21:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `centreinteret`
--

DROP TABLE IF EXISTS `centreinteret`;
CREATE TABLE IF NOT EXISTS `centreinteret` (
  `centre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `competence` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`competence`) VALUES
('hgii'),
('Je suis informaticienne'),
('Je suis informaticienne'),
('Je suis informaticienne'),
('Je suis informaticienne'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('domhpp'),
('Je suis informaticienne'),
('oiuythgdgfghj'),
('php'),
('php'),
('php');

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `postal` text,
  `ville` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `details`
--

INSERT INTO `details` (`id`, `photo`, `prenom`, `nom`, `poste`, `email`, `numero`, `adresse`, `postal`, `ville`) VALUES
(18, 1, 'Ariane', 'd\'ALMEIDA', 'DÃ©veloppeur backend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Cotonou'),
(36, 2, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(37, 2, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane.dal2001@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(38, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(39, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(40, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(41, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(42, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'laura@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(43, 4, 'Arian', 'Dali', 'DÃ©veloppeur frontend', 'laura@gmail.com', '63334874', 'Agbondjedo', '03BP835', 'Bohicon'),
(44, 10, 'Marc', 'ABRAHAM', 'DÃ©veloppeur frontend', 'laura@gmail.com', '61407478', 'Agbondjedo', '03BP835', 'Bohicon'),
(45, 2, 'Ariane', 'Ã¹pojihohgioh', 'DÃ©veloppeur frontend', 'marcabraham@gmail.com', '90047376', 'mÃ¹poh', '03BP835', 'Cotonou'),
(46, 2, 'Ariane', 'Ã¹pojihohgioh', 'DÃ©veloppeur frontend', 'marcabraham@gmail.com', '90047376', 'mÃ¹poh', '03BP835', 'Cotonou'),
(47, 5, 'Laura', 'd\'ALMEIDA', 'DÃ©veloppeur frontend', 'ariane@gmail.com', '90047376', 'mÃ¹poh', '03BP835', 'Bohicon'),
(48, 4, 'Ariane', 'Ã¹pojihohgioh', 'DÃ©veloppeur backend', 'laura@gmail.com', '63334874', 'mÃ¹poh', '03BP835', 'Cotonou'),
(49, 4, 'Ariane', 'Ã¹pojihohgioh', 'DÃ©veloppeur backend', 'laura@gmail.com', '63334874', 'mÃ¹poh', '03BP835', 'Cotonou');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `poste` varchar(255) NOT NULL,
  `employeur` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `datedebut` year(4) NOT NULL,
  `datefin` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `diplome` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `vill` varchar(255) NOT NULL,
  `datedebut` date NOT NULL,
  `datedefin` date NOT NULL,
  `descriptionformation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`diplome`, `etablissement`, `vill`, `datedebut`, `datedefin`, `descriptionformation`) VALUES
('BAC', 'CSB', 'Cotonou', '2021-05-03', '2021-05-03', 'muccigpg'),
('BAC', 'CSB', 'Cotonou', '2021-05-03', '2021-05-14', '*pÃ´ie^h^^zh'),
('BAC', 'CSB', 'Cotonou', '2021-05-03', '2021-05-14', '*pÃ´ie^h^^zh'),
('BAC', 'CSB', 'Porto', '2021-05-12', '2021-05-16', 'iughojp'),
('BEPC', 'CSB', 'Cotonou', '2021-05-19', '2021-05-19', 'Ã¹mljkhtxrycuio'),
('BAC', 'CSB', 'Cotonou', '2021-05-19', '2021-06-01', 'Ã¹*^pohigh'),
('BAC', 'CSB', 'Cotonou', '2021-05-19', '2021-06-01', 'Ã¹*^pohigh');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `langue` varchar(100) NOT NULL,
  `niveau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `profile`
--

INSERT INTO `profile` (`description`) VALUES
('jbjbjsobovbohd'),
('Informaticienne'),
('Informaticienne'),
('Informaticienne'),
('Informaticienne'),
('Informaticienne'),
('Informaticienne'),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
(''),
('giopged'),
('Developpeur'),
('mkphifydgfdjhijk^l*Ã¹mk'),
('Je suis'),
('kihuyftxrfcvjlk'),
('kihuyftxrfcvjlk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
