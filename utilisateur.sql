 /* Les valeurs (ici principalement 255 sont "random" , je savais pas quoi mettre , alors dans le doute la valeurs max hein */
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Photo_de_profile` int(255)  , /* j'savais pas quoi mettre */
  `Username` varchar(32) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Status_membre` tinyint(1) NOT NULL,
  `status_membre_composante(s)` tinyint(1) NOT NULL,
  `Status_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`Username`,`Email`), 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;