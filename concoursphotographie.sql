-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Avril 2019 à 08:00
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `concoursphotographie`
--

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE `competition` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DossierStockage` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `competition`
--

INSERT INTO `competition` (`ID`, `Nom`, `DossierStockage`, `Date`) VALUES
(1, 'Couleur', 'couleur', '2015-11-25'),
(2, 'Monochrome', 'monochrome', '2015-11-26'),
(3, 'Nature', 'nature', '2015-11-27');

-- --------------------------------------------------------

--
-- Structure de la table `concurrent`
--

CREATE TABLE `concurrent` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) DEFAULT NULL,
  `Pays` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `concurrent`
--

INSERT INTO `concurrent` (`ID`, `Nom`, `Prenom`, `Pays`) VALUES
(1, 'Buhagiar', 'Stephen', 'Malte'),
(2, 'Batrak', 'Myk', 'Ukraine'),
(3, 'Ucar', 'Mehmet', 'Turquie'),
(4, 'Geus', 'Serge', 'France'),
(5, 'Saryil', 'Yavuz', 'Turquie'),
(6, 'Sant', 'David', 'Malte'),
(7, 'Ledda', 'Ilario', 'Italie'),
(8, 'Kerekes', 'Istvan', 'Hongrie'),
(9, 'Crashley', 'John', 'Royaume Uni'),
(10, 'Moulin', 'Jean', 'Nouvelle-Zélande'),
(11, 'Thanh', 'Thai', 'Vietnam'),
(12, 'Haut-A', 'Eero', 'Finlande'),
(13, 'Van Coillie', 'Jean Pierre', 'Belgique'),
(14, 'HO Yau', 'Charles', 'Hong Kong'),
(15, 'Chen', 'Feng', 'Taiwan'),
(16, 'Bacle', 'Jean Claude', 'France'),
(17, 'Füller', 'Ursula', 'Royaume Uni');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `ID` int(11) NOT NULL,
  `competitionID` int(11) NOT NULL,
  `concurrentID` int(11) NOT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `NomFichier` varchar(255) NOT NULL,
  `OrdreProjection` int(10) DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `Classement` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`ID`, `competitionID`, `concurrentID`, `Titre`, `NomFichier`, `OrdreProjection`, `Total`, `Classement`) VALUES
(1, 1, 1, 'Ninu The Shepherd', '_0000695681.jpg', 1, 26.1, 3),
(2, 1, 2, 'The birth', '_0004261610.jpg', 2, 27, 1),
(3, 1, 3, 'Baloon', '_0017118583.jpg', 3, 26.2, 2),
(4, 1, 4, 'Le bonnet bleu', '_0017541783.jpg', 4, 20, 5),
(5, 1, 5, 'Craftsman of ceramic', '_0034006287.jpg', 5, 21, 4),
(6, 2, 6, 'Chatting', '_0060547236.jpg', 1, 20, 4),
(7, 2, 7, 'Valenzia6', '_0066415056.jpg', 2, 26.5, 1),
(8, 2, 8, 'Rajan', '_0191162335.jpg', 3, 10, 6),
(9, 2, 9, 'Sachmo was my hero', '_0324328779.jpg', 4, 15, 5),
(10, 2, 10, 'Three in a row', '_0349045285.jpg', 5, 25, 3),
(11, 2, 11, 'Remember mother', '_1816916656.jpg', 6, 26.4, 2),
(12, 3, 12, 'Inséparable', '_0056228535.jpg', 1, 27, 1),
(13, 3, 13, 'Reiger met prooi', '_0101925617.jpg', 2, 18, 5),
(14, 3, 14, 'Challenge', '_0390881823.jpg', 3, 19, 4),
(15, 3, 15, 'Air supply', '_1179994471.jpg', 4, 20, 3),
(16, 3, 16, 'Luscinia parade', '_2571390777.jpg', 5, 17, 6),
(17, 3, 17, 'Infant orangutan', '_3511616995.jpg', 6, 23, 2),
(18, 3, 4, 'Les chiots', '_1486504397.jpg', 7, 16, 7);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `concurrent`
--
ALTER TABLE `concurrent`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dépose` (`concurrentID`),
  ADD KEY `classement` (`competitionID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `competition`
--
ALTER TABLE `competition`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `concurrent`
--
ALTER TABLE `concurrent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `classement` FOREIGN KEY (`competitionID`) REFERENCES `competition` (`ID`),
  ADD CONSTRAINT `dépose` FOREIGN KEY (`concurrentID`) REFERENCES `concurrent` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
