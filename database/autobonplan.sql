-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 17 avr. 2022 à 09:42
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autobonplan`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(70) NOT NULL,
  `password` varchar(200) DEFAULT NULL,
  `secret` varchar(200) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `secret`, `is_admin`) VALUES
(6, 'hakim@gmail.com', '$2y$10$RguxWiGbKlqTRegrPsCkiuyAFgPYBICGu0dgSAZ/3VGfkfaMkBf.S', 'SZUXQZYIEP5WWKMA', NULL),
(5, 'julienbelinga29@gmail.com', '$2y$10$4mLyLLX2WHnqVIlA9KOSmOTyjI4TeTJjtD34L96daAng9KSH9Ubhi', NULL, NULL),
(4, 'test@test.fr', '$2y$10$zXXedeGtmInpi4GcRJ2LnOQG7gjGfqwBHvlUGRu1ZEhUHB1E2q3oe', NULL, NULL),
(7, 'sah@sah.fr', '$2y$10$Xhnv5SqUcjz4pHlFcYv7CejDzB6yzc.icwrPv7L6aR5ie3chJDi5i', '5NSYCO6JMZXEUQE3', NULL),
(8, 'new@gmail.com', '$2y$10$D6OKudqWQngNbIJHBwXxtuo8JR80jZCeVwuiYrsqg2jhEJheviora', 'ITKEKL3QYRAS4TZH', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `numeroVO` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(150) NOT NULL,
  `Fournisseur` varchar(150) DEFAULT NULL,
  `immatriculation` varchar(20) DEFAULT NULL,
  `dateMEC` date DEFAULT NULL,
  `annee` int(4) DEFAULT NULL,
  `marque` varchar(50) NOT NULL,
  `VIN` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `version` varchar(200) NOT NULL,
  `Places` int(11) NOT NULL,
  `energie` varchar(50) NOT NULL,
  `puissance_fiscale` int(11) NOT NULL,
  `carrosserie` varchar(50) NOT NULL,
  `segment` varchar(50) DEFAULT NULL,
  `portes` int(11) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `kms` int(11) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `couleur_interieur` varchar(50) DEFAULT NULL,
  `sellerie` varchar(50) DEFAULT NULL,
  `date_achat` date DEFAULT NULL,
  `date_entree` date DEFAULT NULL,
  `date_vente` date DEFAULT NULL,
  `puissanceDIN` int(11) DEFAULT NULL,
  `boite_vitesse` varchar(70) DEFAULT NULL,
  `nb_rapport` int(11) DEFAULT NULL,
  `prix_achat` float DEFAULT NULL,
  `TVA_achat` varchar(70) DEFAULT NULL,
  `prix_particulier_TTC` int(11) DEFAULT NULL,
  `TVA_vente-vehicule` int(11) DEFAULT NULL,
  `prix_professionnel` int(11) DEFAULT NULL,
  `type_garantie` varchar(150) DEFAULT NULL,
  `code_radio` int(11) DEFAULT NULL,
  `frais` varchar(70) DEFAULT NULL,
  `frais_reel_HT` int(11) DEFAULT NULL,
  `equipement_serie` varchar(200) DEFAULT NULL,
  `equipement_option` varchar(200) DEFAULT NULL,
  `cylindree` int(11) NOT NULL,
  `provenance` varchar(100) NOT NULL,
  `conso_CO2` int(11) DEFAULT NULL,
  `nb_lot_achat` int(11) DEFAULT NULL,
  `poids_vide_MIN` int(11) DEFAULT NULL,
  `duree_mois` int(11) DEFAULT NULL,
  `type_CNIT` varchar(50) DEFAULT NULL,
  `date_entree_arrivages` date NOT NULL,
  `parc` varchar(70) NOT NULL,
  `livraison_prevue_BC` date DEFAULT NULL,
  `livraison_prevue_BT` date DEFAULT NULL,
  `dispo_le` date DEFAULT NULL,
  PRIMARY KEY (`numeroVO`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
