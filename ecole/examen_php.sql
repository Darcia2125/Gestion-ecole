-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 28 fév. 2021 à 14:56
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `examen_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_cours`
--

DROP TABLE IF EXISTS `categorie_cours`;
CREATE TABLE IF NOT EXISTS `categorie_cours` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `informatique` varchar(100) NOT NULL,
  `gestion` varchar(100) NOT NULL,
  `communication` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(100) NOT NULL,
  `nom_cours` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cours`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `categories`, `nom_cours`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, 'choix1', ' info_253'),
(11, 'gestion', 'ges-45'),
(12, 'gestion', 'ges/54'),
(13, 'communicqtion', 'com_12'),
(14, 'informqtiaue', ''),
(15, 'gestion', 'com'),
(16, 'informqtiaue', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp_Etudiant` varchar(100) NOT NULL,
  PRIMARY KEY (`id_etudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `nom`, `prenom`, `adresse`, `facebook`, `email`, `mdp_Etudiant`) VALUES
(12, 'com_12', 'se', 'tana', '', 'merveilleuse.mbohoazy.tsimagneky@esti.mg', '1234'),
(7, 'com', 'se', 'tana', 'angelaravo', 'merveilleuse.mbohoazy.tsimagneky@esti.mg', '123'),
(8, 'trest', 'se', 'tana', 'angelaravo', 'merveilleuse.mbohoazy.tsimagneky@esti.mg', '145'),
(11, 'com_12', 'se', 'tana', '', '', ''),
(10, 'trest', 'jgb', 'tana', 'angelaravo', 'jean.offman.bienvenu@esti.mg', '5213'),
(13, 'com_12', 'se', 'tana', '', 'merveilleuse.mbohoazy.tsimagneky@esti.mg', '123'),
(14, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `objet` varchar(100) NOT NULL,
  `dates` datetime NOT NULL,
  `id_etudiant_destinataire` int(11) NOT NULL,
  `id_prof_expediteur` int(11) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `id_etudiant_expediteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`objet`, `dates`, `id_etudiant_destinataire`, `id_prof_expediteur`, `contenu`, `id_etudiant_expediteur`) VALUES
('objet test', '2020-12-12 12:20:12', 1, 1, 'Contene test', 10000),
('objet test', '2020-12-12 12:20:12', 1, 1, 'Contene test', 10000),
('Message test', '2021-02-27 06:27:27', 7, 1, 'Ceci est un contenu du message', 10000),
('Message test', '2021-02-27 06:27:27', 8, 1, 'Ceci est un contenu du message', 10000),
('Message test', '2021-02-27 06:28:27', 7, 1, 'Ceci est un contenu du message', 10000),
('Message test', '2021-02-27 06:28:27', 8, 1, 'Ceci est un contenu du message', 10000),
('mon message', '2021-02-27 06:42:48', 7, 1, 'bonjour, merci', 10000),
('mon message', '2021-02-27 06:42:48', 8, 1, 'bonjour, merci', 10000),
('Message test', '2021-02-27 08:28:14', 12, 1, 'df', 10000),
('Message test', '2021-02-27 08:28:15', 7, 1, 'df', 10000),
('Message test', '2021-02-27 08:28:15', 8, 1, 'df', 10000),
('Message test', '2021-02-27 08:29:43', 12, 1, 'df', 10000),
('Message test', '2021-02-27 08:29:43', 7, 1, 'df', 10000),
('Message test', '2021-02-27 08:29:43', 8, 1, 'df', 10000),
('Message test', '2021-02-27 08:30:30', 7, 1, 'nv', 10000),
('Objet du message', '2021-02-27 09:20:52', 12, 1, 'kkl', 10000);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(100) NOT NULL,
  `adresse_prof` varchar(100) NOT NULL,
  `tel_prof` varchar(100) NOT NULL,
  `email_prof` varchar(100) CHARACTER SET utf8 COLLATE utf8_hungarian_ci DEFAULT NULL,
  `photo_prof` varchar(100) NOT NULL,
  `mdp_prof` varchar(10) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`, `adresse_prof`, `tel_prof`, `email_prof`, `photo_prof`, `mdp_prof`) VALUES
(1, 'RANDRIANJOHANY TSITOHAINA HARILANTO', 'III  G 50C AMBATOLAMPY', '0341781120', 'harilanto.randrianjohany@esti.mg', '3', ''),
(2, 'Dina', 'Antanimena', '0000000', 'dina@gmail.com', 'photo.png', ''),
(3, 'Angela RAVOLOLONIRINA', '261348154191', '0348154191', 'angela.ravololonirina@esti.mg', 'm', ''),
(4, 'Angela RAVOLOLONIRINA', '261348154191', '0348154191', 'angela.ravololonirina@esti.mg', '2', ''),
(5, 'k', 'jk', '52', 'h@g.mg', '', ''),
(6, 'rabe', 'tana', '123', 'rabe@gmail.com', '', '123'),
(7, 'lita', 'tana', '52', 'ter@gmail.mg', '', '123'),
(8, '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
