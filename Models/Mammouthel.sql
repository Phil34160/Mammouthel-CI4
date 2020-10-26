-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 17 Octobre 2020 à 23:24
-- Version du serveur :  5.7.31-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Mammouthel`
--

-- --------------------------------------------------------

--
-- Structure de la table `Managers`
--

CREATE TABLE `Managers` (
  `manager_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Managers`
--

INSERT INTO `Managers` (`manager_id`, `name`, `phone`) VALUES
(1, 'Phil_Jones', '0605040201'),
(2, 'Indiana_Geo', '0602010304');

-- --------------------------------------------------------

--
-- Structure de la table `Notes`
--

CREATE TABLE `Notes` (
  `note_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Notes`
--

INSERT INTO `Notes` (`note_id`, `site_id`, `title`, `content`, `date`) VALUES
(1, 1, 'New Discovery in Russia', 'content of this new discovery in Saint Petersbourg', '2020-10-01'),
(2, 1, 'Another discovery', 'This site is much bigger than expected', '2020-10-02'),
(3, 2, 'There is more than wine in Bordeaux', 'An exceptional finding in Bordeaux', '2020-10-03'),
(4, 3, 'New site discovered in escuador', 'Lorem ipsum blabblabla', '2020-10-04');

-- --------------------------------------------------------

--
-- Structure de la table `Sites`
--

CREATE TABLE `Sites` (
  `site_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `info_site` text NOT NULL,
  `coordinates` varchar(255) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Sites`
--

INSERT INTO `Sites` (`site_id`, `location`, `info_site`, `coordinates`, `manager_id`, `note_id`) VALUES
(1, 'Saint-Petersbourg', 'Located near the city, around 20km east ', '59°56\'02', 1, 1),
(2, 'Bordeaux', 'ipsum lorem blablabla', '44°50\'16', 1, 2),
(3, 'Quito', 'pepito le curasso !', '0°15\'00', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `skeletons`
--

CREATE TABLE `skeletons` (
  `skeleton_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `site_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `depht` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `skeletons`
--

INSERT INTO `skeletons` (`skeleton_id`, `name`, `site_id`, `position`, `depht`, `photo`) VALUES
(1, 'Diplodocus', 1, 'A8', '125m', ''),
(2, 'Pterodactyle', 1, 'F4', '82m', ''),
(3, 'Stegosaure', 1, 'D2', '35m', ''),
(4, 'Tyrannosaure', 2, 'U7', '102m', ''),
(5, 'Triceratop', 2, 'B7', '66m', ''),
(6, 'Velociraptor', 3, 'H1', '48m', ''),
(7, 'Diplodocus', 3, 'N9', '95m', ''),
(8, 'Stegosaure', 3, 'C3', '18m', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Managers`
--
ALTER TABLE `Managers`
  ADD PRIMARY KEY (`manager_id`);

--
-- Index pour la table `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Index pour la table `Sites`
--
ALTER TABLE `Sites`
  ADD PRIMARY KEY (`site_id`),
  ADD KEY `fk_manager_id` (`manager_id`),
  ADD KEY `fk_note_id` (`note_id`);

--
-- Index pour la table `skeletons`
--
ALTER TABLE `skeletons`
  ADD PRIMARY KEY (`skeleton_id`),
  ADD KEY `fk_site_id` (`site_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Managers`
--
ALTER TABLE `Managers`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `Notes`
--
ALTER TABLE `Notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Sites`
--
ALTER TABLE `Sites`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `skeletons`
--
ALTER TABLE `skeletons`
  MODIFY `skeleton_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Sites`
--
ALTER TABLE `Sites`
  ADD CONSTRAINT `Sites_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `Managers` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_manager_id` FOREIGN KEY (`manager_id`) REFERENCES `Managers` (`manager_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_note_id` FOREIGN KEY (`note_id`) REFERENCES `Notes` (`note_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `skeletons`
--
ALTER TABLE `skeletons`
  ADD CONSTRAINT `fk_site_id` FOREIGN KEY (`site_id`) REFERENCES `Sites` (`site_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
