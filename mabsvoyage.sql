
CREATE DATABASE IF NOT EXISTS `mabsvoyage` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mabsvoyage`;

DROP TABLE IF EXISTS `circuitt`;
CREATE TABLE IF NOT EXISTS `circuitt` (
  `idCircuit` int(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Theme` varchar(100) NOT NULL,
  `Description` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `Duree` int(100) NOT NULL,
  `MoyenT` varchar(100) NOT NULL,
  PRIMARY KEY (`idCircuit`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `CIN` int(8) NOT NULL,
  `Nom` varchar(200) DEFAULT NULL,
  `Prenom` varchar(200) DEFAULT NULL,
  `Sexe` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Telephone` int(14) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Adresse` varchar(200) DEFAULT NULL,
  `Ville` varchar(200) DEFAULT NULL,
  `CodePostal` int(4) DEFAULT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `cinPerson` int(8) NOT NULL,
  `idRes` int(100) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Age` int(200) NOT NULL,
  PRIMARY KEY (`idPersonne`),
  KEY `CIN` (`cinPerson`),
  KEY `idRes` (`idRes`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idRes` int(11) NOT NULL AUTO_INCREMENT,
  `cinPerson` int(11) NOT NULL,
  `Circuit` varchar(200) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `Heure` varchar(5) NOT NULL,
  PRIMARY KEY (`idRes`),
  KEY `CIN` (`cinPerson`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4; COMMIT;