-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2021 at 10:24 AM
-- Server version: 5.5.47-0+deb8u1
-- PHP Version: 7.2.22-1+0~20190902.26+debian8~1.gbpd64eb7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debusscherem`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_chocolat`
--

CREATE TABLE `p_chocolat` (
  `id` int(11) NOT NULL,
  `type` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `nom` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `prixkilo` double NOT NULL,
  `masse` double NOT NULL,
  `image` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `description` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_chocolat`
--

INSERT INTO `p_chocolat` (`id`, `type`, `nom`, `prixkilo`, `masse`, `image`, `description`) VALUES
(1, 'Wonka Bar', 'Chocolat Noir', 50, 100, 'wonka-bar-noir.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                \r\n                \r\n                \r\n                '),
(2, 'Wonka Bar', 'Chocolat au Lait', 50, 100, 'wonka-bar-lait.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Wonka Bar', 'Chocolat Blanc', 50, 100, 'wonka-bar-blanc.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                '),
(4, 'Wonka Bar', 'Pistache', 100, 100, 'wonka-bar-pistache.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Wonka Bar', 'Lavande', 100, 100, 'wonka-bar-lavande.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Wonka Bar', 'Schtroumpf', 200, 100, 'wonka-bar-schtroumpf.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `p_commande`
--

CREATE TABLE `p_commande` (
  `id` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_commande`
--

INSERT INTO `p_commande` (`id`, `idUtilisateur`) VALUES
(4, 1),
(5, 1),
(7, 2),
(6, 5),
(1, 6),
(2, 6),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `p_contenu`
--

CREATE TABLE `p_contenu` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_contenu`
--

INSERT INTO `p_contenu` (`idCommande`, `idProduit`, `quantite`) VALUES
(1, 1, 1),
(1, 3, 1),
(1, 5, 1),
(1, 6, 1),
(2, 2, 1),
(3, 4, 1),
(4, 6, 4),
(5, 2, 1),
(5, 5, 1),
(6, 2, 1),
(7, 2, 0),
(7, 4, 5),
(7, 5, 5),
(7, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `p_utilisateur`
--

CREATE TABLE `p_utilisateur` (
  `id` int(11) NOT NULL,
  `prenom` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `nom` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `gender` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `nonce` varchar(32) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_utilisateur`
--

INSERT INTO `p_utilisateur` (`id`, `prenom`, `nom`, `gender`, `email`, `password`, `admin`, `nonce`) VALUES
(1, 'Dylan', 'Pereira', 'Homme', 'dylan.pereira30@orange.fr', 'd12a03dedb55295932b9ac120db0d893f3dd40d18d1f072471e040a7816cb687', 0, NULL),
(2, 'Mathias', 'DE BUSSCHERE', 'Homme', 'mathias.debusschere@gmail.com', 'e4e5a90243684492474b7eecfcc8d834197bb05c0afce21f95f53a65572a083f', 0, NULL),
(3, 'Tom', 'Rey', 'joueur de lol', 'xoreh50010@cctyoo.com', '8b1fa04b5a1b19cd544868eac102bb324856c9d53c817c2856fe512601aaa503', 0, NULL),
(4, 'fabien', 'laguillaumie', 'Homme', 'fabien@yopmail.com', '821b42fb8461d1c0fc4290b692af8cedf191a6472ddfabee58da7ec0993fa1f5', 0, NULL),
(5, 'visiteur', 'visiteur', 'Homme', 'visiteur@yopmail.com', '69f495c4a7f57e413173d35d8c34638d073dfd7874b80d4099230e39c04bfd4a', 1, NULL),
(6, 'Visiteur', 'Régulier', 'Non spécifié', 'visiteurregulier@yopmail.com', '69f495c4a7f57e413173d35d8c34638d073dfd7874b80d4099230e39c04bfd4a', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `p_chocolat`
--
ALTER TABLE `p_chocolat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_commande`
--
ALTER TABLE `p_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idUser` (`idUtilisateur`);

--
-- Indexes for table `p_contenu`
--
ALTER TABLE `p_contenu`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `fk_idProduit` (`idProduit`);

--
-- Indexes for table `p_utilisateur`
--
ALTER TABLE `p_utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `p_chocolat`
--
ALTER TABLE `p_chocolat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `p_commande`
--
ALTER TABLE `p_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p_utilisateur`
--
ALTER TABLE `p_utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `p_commande`
--
ALTER TABLE `p_commande`
  ADD CONSTRAINT `fk_idUser` FOREIGN KEY (`idUtilisateur`) REFERENCES `p_utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `p_contenu`
--
ALTER TABLE `p_contenu`
  ADD CONSTRAINT `fk_idCommande` FOREIGN KEY (`idCommande`) REFERENCES `p_commande` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idProduit` FOREIGN KEY (`idProduit`) REFERENCES `p_chocolat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
