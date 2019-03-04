 /* Les valeurs (ici principalement 255 sont "random" , je savais pas quoi mettre , alors dans le doute la valeurs max hein */

DROP TABLE IF EXISTS `est_membre_de`;
DROP TABLE IF EXISTS `utilisateur`;
DROP TABLE IF EXISTS `composante`;

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_personne` int(11) NOT NULL AUTO_INCREMENT, 
  `Photo_de_profile` int(255)  , /* j'savais pas quoi mettre */
  `Username` varchar(32) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status_membre` tinyint(1) NOT NULL,
  `Status_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Id_personne`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 /* Les valeurs (ici principalement 255 sont "random" , je savais pas quoi mettre , alors dans le doute la valeurs max hein */
CREATE TABLE IF NOT EXISTS `composante` (
  `Id_composante` int(11) NOT NULL AUTO_INCREMENT, 
  `Nom_composante` varchar(128) NOT NULL, /* j'savais pas quoi mettre */
  PRIMARY KEY (`Id_composante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 /* Les valeurs (ici principalement 255 sont "random" , je savais pas quoi mettre , alors dans le doute la valeurs max hein */
CREATE TABLE IF NOT EXISTS `est_membre_de` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_personne` int(11) NOT NULL,
  `Id_composante` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `personne_membre` (`Id_personne`),
  KEY `membre_composante` (`Id_composante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `est_membre_de`
  ADD CONSTRAINT `personne_membre` FOREIGN KEY (`Id_personne`) REFERENCES `utilisateur` (`Id_personne`),
  ADD CONSTRAINT `membre_composante` FOREIGN KEY (`Id_composante`) REFERENCES `composante` (`Id_composante`);