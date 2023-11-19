-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 11:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archive`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom_admin` varchar(50) DEFAULT NULL,
  `login_admin` varchar(30) NOT NULL,
  `password_admin` varchar(10) NOT NULL,
  `email_admin` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom_admin`, `login_admin`, `password_admin`, `email_admin`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin@gmail.com'),
(3, NULL, 'sanae@gmail.com', 'abcd123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dossier_medicale_hospitalisation`
--

CREATE TABLE `dossier_medicale_hospitalisation` (
  `numero_dossier` int(11) NOT NULL,
  `numero_ordre` int(11) NOT NULL,
  `service` varchar(500) NOT NULL,
  `billet_sortie` varchar(30) NOT NULL,
  `nom_patient` varchar(100) NOT NULL,
  `papier_externe` varchar(200) NOT NULL,
  `emplacement` varchar(200) NOT NULL,
  `date_entree` date NOT NULL,
  `date_sortie` date NOT NULL,
  `date_archive` date NOT NULL,
  `numero_rayon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dossier_medicale_hospitalisation`
--

INSERT INTO `dossier_medicale_hospitalisation` (`numero_dossier`, `numero_ordre`, `service`, `billet_sortie`, `nom_patient`, `papier_externe`, `emplacement`, `date_entree`, `date_sortie`, `date_archive`, `numero_rayon`) VALUES
(34, 3328, 'medicale   ', 'sans   ', 'Sara koutayb', 'Oui', 'Grand archive   ', '2021-07-21', '2021-07-16', '2021-07-30', 55),
(55, 700, 'Dentaire', 'Sans', 'HAQOK Sanae', 'Oui', 'Mini archive', '2021-07-08', '2021-07-13', '2021-07-02', 999),
(1340, 40, 'Urgences  ', 'Avec  ', 'jhddifof  ', 'Oui', 'Grand archive  ', '2021-06-30', '2021-07-06', '2010-01-12', 579);

-- --------------------------------------------------------

--
-- Table structure for table `etat dossier`
--

CREATE TABLE `etat dossier` (
  `id` int(11) NOT NULL,
  `numero dossier` int(11) NOT NULL,
  `date` date NOT NULL,
  `etat` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `etat dossier`
--

INSERT INTO `etat dossier` (`id`, `numero dossier`, `date`, `etat`) VALUES
(1, 34, '2021-07-14', 'sortant'),
(2, 34, '2021-07-14', 'Entrant'),
(3, 34, '2021-07-14', 'Sortant'),
(5, 1340, '2021-07-15', 'Entrant'),
(6, 1340, '2021-07-15', 'Sortant'),
(7, 34, '2021-07-15', 'Sortant');

-- --------------------------------------------------------

--
-- Table structure for table `etat registre`
--

CREATE TABLE `etat registre` (
  `id` int(11) NOT NULL,
  `numero registre` int(11) NOT NULL,
  `date` date NOT NULL,
  `etat` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `etat registre`
--

INSERT INTO `etat registre` (`id`, `numero registre`, `date`, `etat`) VALUES
(1, 34, '2021-07-14', 'sortant'),
(2, 34, '2021-07-14', 'Sortant'),
(6, 122, '2021-07-15', 'Sortant'),
(7, 143, '2021-07-15', 'Sortant');

-- --------------------------------------------------------

--
-- Table structure for table `registre`
--

CREATE TABLE `registre` (
  `id_registre` int(11) NOT NULL,
  `type_registre` varchar(100) NOT NULL,
  `date_archive` date NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `emplacement` varchar(200) NOT NULL,
  `numero_rayon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registre`
--

INSERT INTO `registre` (`id_registre`, `type_registre`, `date_archive`, `date_debut`, `date_fin`, `emplacement`, `numero_rayon`) VALUES
(13, 'Admission', '2021-06-28', '2021-07-15', '2021-07-15', 'Grande Archive', 666),
(34, 'DÃ©cÃ¨s', '2021-07-15', '2021-07-14', '2021-07-21', 'kkkkk', 5555555),
(122, 'Admission', '2021-07-01', '2021-06-30', '2021-06-30', 'Mini Archive', 67),
(143, 'Décès', '2021-07-10', '2021-06-30', '2021-07-05', 'Mini Archive', 89),
(7890, 'Maternité', '2010-06-09', '2012-10-31', '2021-07-15', 'Mini Archive', 643);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `nom_user` varchar(50) DEFAULT NULL,
  `login_user` varchar(30) NOT NULL,
  `password_user` varchar(10) NOT NULL,
  `email_user` varchar(30) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `prenom_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `nom_user`, `login_user`, `password_user`, `email_user`, `id_admin`, `prenom_user`) VALUES
(1, 'HAQOK', '', 'sana12345', 'haqoksanae@gmail.com', NULL, 'Sanae'),
(3, 'HAQOK', '', 'Ali3434', 'alihqk@gmail.com', NULL, 'Ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admin_uniq` (`login_admin`,`password_admin`,`email_admin`);

--
-- Indexes for table `dossier_medicale_hospitalisation`
--
ALTER TABLE `dossier_medicale_hospitalisation`
  ADD PRIMARY KEY (`numero_dossier`);

--
-- Indexes for table `etat dossier`
--
ALTER TABLE `etat dossier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dossier_etat` (`numero dossier`);

--
-- Indexes for table `etat registre`
--
ALTER TABLE `etat registre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_registre_etat` (`numero registre`);

--
-- Indexes for table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`id_registre`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `user_uniq` (`login_user`,`password_user`,`email_user`),
  ADD KEY `fk_user` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etat dossier`
--
ALTER TABLE `etat dossier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `etat registre`
--
ALTER TABLE `etat registre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `etat dossier`
--
ALTER TABLE `etat dossier`
  ADD CONSTRAINT `fk_dossier_etat` FOREIGN KEY (`numero dossier`) REFERENCES `dossier_medicale_hospitalisation` (`numero_dossier`);

--
-- Constraints for table `etat registre`
--
ALTER TABLE `etat registre`
  ADD CONSTRAINT `fk_registre_etat` FOREIGN KEY (`numero registre`) REFERENCES `registre` (`id_registre`);

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
