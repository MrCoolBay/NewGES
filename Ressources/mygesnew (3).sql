-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 avr. 2024 à 22:16
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mygesnew`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `surname_admin` varchar(255) NOT NULL,
  `pdp_admin` varchar(255) DEFAULT 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `grade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `name_admin`, `surname_admin`, `pdp_admin`, `email`, `password`, `salt`, `grade`) VALUES
(1, 'Fabien', 'Lubin', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'flubin1@myges.fr', '$2y$10$IhcJ1ZKKuc3hCIxj0yzx2OUnQa3A1koiKUl7jv8RgaFz9xw.Pibp2', '846279938660c2cc8149e61.97265511', 'superadmin');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id_ecole` int(11) NOT NULL,
  `nom_ecole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id_ecole`, `nom_ecole`) VALUES
(1, 'ESGI'),
(2, 'ISA'),
(3, 'EFET STUDIO CREA'),
(4, 'EFET PHOTO'),
(5, 'EFAB'),
(6, 'ESUPCOM'),
(7, 'MAESTRIS'),
(8, 'MODART'),
(9, 'EIML'),
(10, 'PPASPORT'),
(11, 'PPA'),
(12, 'ISFJ');

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE `intervenant` (
  `id_intervenant` int(11) NOT NULL,
  `name_intervenant` varchar(100) NOT NULL,
  `surname_intervenant` varchar(100) NOT NULL,
  `pdp_intervenant` varchar(10000) NOT NULL DEFAULT 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`id_intervenant`, `name_intervenant`, `surname_intervenant`, `pdp_intervenant`, `email`, `password`, `salt`) VALUES
(6, 'Thomas', 'Pierson', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'tpierson@myges.fr', '$2y$10$ZG0gt0bvrU36In0aAa8TweuoE7dR4EvSMIirdHsTWtU/SYn/XvptS', '3511941546626efdd334bb6.46536052'),
(8, 'Mathilde', 'Richard', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'mrichard@myges.fr', '$2y$10$KK3nzbh9ewVinXTUXmaAx.wHUb8frZzvf1ICwwSyTXxnFYUXNgbpq', '7616920576626f80bb02fb5.63224272');

-- --------------------------------------------------------

--
-- Structure de la table `intervenant_ecole`
--

CREATE TABLE `intervenant_ecole` (
  `id_intervenant` int(11) NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `intervenant_ecole`
--

INSERT INTO `intervenant_ecole` (`id_intervenant`, `id_ecole`) VALUES
(6, 1),
(6, 6),
(8, 1),
(8, 5);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant_matiere`
--

CREATE TABLE `intervenant_matiere` (
  `id_intervenant` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `intervenant_matiere`
--

INSERT INTO `intervenant_matiere` (`id_intervenant`, `id_matiere`) VALUES
(6, 5),
(6, 6),
(8, 1),
(8, 7);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id_matiere` int(11) NOT NULL,
  `nom_matiere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id_matiere`, `nom_matiere`) VALUES
(1, 'Anglais'),
(2, 'Français'),
(3, 'Mathématiques'),
(4, 'Virtualisation de Parc Informatique'),
(5, 'Système Réseau'),
(6, 'Cloud Computing'),
(7, 'Projet Annuel'),
(8, 'Immobilier'),
(9, 'Communication'),
(10, 'Dessin');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL,
  `info_note` varchar(100) DEFAULT NULL,
  `date_note` timestamp NULL DEFAULT current_timestamp(),
  `id_student` int(11) NOT NULL,
  `id_matiere` int(11) DEFAULT NULL,
  `id_intervenant` int(11) DEFAULT NULL,
  `moyenne` decimal(5,2) DEFAULT NULL,
  `note1` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `note`, `info_note`, `date_note`, `id_student`, `id_matiere`, `id_intervenant`, `moyenne`, `note1`) VALUES
(2, 20, 'GG', '2024-04-23 00:12:45', 8, 1, 8, NULL, NULL),
(3, 20, 'GG', '2024-04-23 00:13:47', 8, 7, 8, NULL, NULL),
(5, 15, 'test', '2024-04-23 00:33:13', 8, 6, 6, NULL, NULL),
(26, 11, 'fqdfqzd', '2024-04-23 00:55:59', 8, 5, 6, NULL, NULL);

--
-- Déclencheurs `note`
--
DELIMITER $$
CREATE TRIGGER `update_average_after_insert` AFTER INSERT ON `note` FOR EACH ROW BEGIN
    DECLARE student_avg DECIMAL(5, 2);
    SELECT AVG(moyenne) INTO student_avg FROM note WHERE id_student = NEW.id_student;
    UPDATE student SET moyenne_total = student_avg WHERE id_student = NEW.id_student;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_moyenne_total_after_insert` AFTER INSERT ON `note` FOR EACH ROW BEGIN
    DECLARE student_avg DECIMAL(5, 2);
    SELECT AVG(note1) INTO student_avg FROM note WHERE id_student = NEW.id_student;
    UPDATE student SET moyenne_total = student_avg WHERE id_student = NEW.id_student;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `nom_promo` varchar(10) NOT NULL,
  `id_ecole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id_promo`, `nom_promo`, `id_ecole`) VALUES
(1, 'B1', 1),
(72, 'B1ESGI', 1),
(73, 'B2ESGI', 1),
(74, 'B3ESGI', 1),
(75, 'M1ESGI', 1),
(76, 'M2ESGI', 1),
(77, 'B1ESPUCOM', 6),
(78, 'B2ESPUCOM', 6),
(79, 'B3ESPUCOM', 6),
(80, 'M1ESPUCOM', 6),
(81, 'M2ESPUCOM', 6),
(82, 'B1EFET STU', 3),
(83, 'B2EFET STU', 3),
(84, 'B3EFET STU', 3),
(85, 'M1EFET STU', 3),
(86, 'M2EFET STU', 3),
(87, 'B1EFET PHO', 4),
(88, 'B2EFET PHO', 4),
(89, 'B3EFET PHO', 4),
(90, 'M1EFET PHO', 4),
(91, 'M2EFET PHO', 4),
(92, 'B1EFAB', 5),
(93, 'B2EFAB', 5),
(94, 'B3EFAB', 5),
(95, 'M1EFAB', 5),
(96, 'M2EFAB', 5),
(97, 'B1ESUPCOM', 6),
(98, 'B2ESUPCOM', 6),
(99, 'B3ESUPCOM', 6),
(100, 'M1ESUPCOM', 6),
(101, 'M2ESUPCOM', 6),
(102, 'B1MAESTRIS', 7),
(103, 'B2MAESTRIS', 7),
(104, 'B3MAESTRIS', 7),
(105, 'M1MAESTRIS', 7),
(106, 'M2MAESTRIS', 7),
(107, 'B1MODART', 8),
(108, 'B2MODART', 8),
(109, 'B3MODART', 8),
(110, 'M1MODART', 8),
(111, 'M2MODART', 8),
(112, 'B1EIML', 9),
(113, 'B2EIML', 9),
(114, 'B3EIML', 9),
(115, 'M1EIML', 9),
(116, 'M2EIML', 9),
(117, 'B1PPASPORT', 10),
(118, 'B2PPASPORT', 10),
(119, 'B3PPASPORT', 10),
(120, 'M1PPASPORT', 10),
(121, 'M2PPASPORT', 10),
(122, 'B1PPA', 11),
(123, 'B2PPA', 11),
(124, 'B3PPA', 11),
(125, 'M1PPA', 11),
(126, 'M2PPA', 11),
(127, 'B1ISFJ', 12),
(128, 'B2ISFJ', 12),
(129, 'B3ISFJ', 12),
(130, 'M1ISFJ', 12),
(131, 'M2ISFJ', 12),
(132, 'B1ISA', 2),
(133, 'B2ISA', 2),
(134, 'B3ISA', 2),
(135, 'M1ISA', 2),
(136, 'M2ISA', 2);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `name_student` varchar(100) NOT NULL,
  `surname_student` varchar(100) NOT NULL,
  `pdp_student` varchar(10000) NOT NULL DEFAULT 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `id_ecole` int(11) NOT NULL,
  `id_promo` int(11) NOT NULL,
  `moyenne_total` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id_student`, `name_student`, `surname_student`, `pdp_student`, `email`, `password`, `salt`, `id_ecole`, `id_promo`, `moyenne_total`) VALUES
(8, 'Gaetan', 'Majkowiez', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'gaetan@gmail.com', '$2y$10$N2EsnHrbEB9K8S8vZLflcOC6EHA2SW6XvI2ppSrDvRVMREKm2zzD2', '1728665597662585df74f5d4.99179432', 1, 73, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id_ecole`);

--
-- Index pour la table `intervenant`
--
ALTER TABLE `intervenant`
  ADD PRIMARY KEY (`id_intervenant`);

--
-- Index pour la table `intervenant_ecole`
--
ALTER TABLE `intervenant_ecole`
  ADD PRIMARY KEY (`id_intervenant`,`id_ecole`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `intervenant_matiere`
--
ALTER TABLE `intervenant_matiere`
  ADD PRIMARY KEY (`id_intervenant`,`id_matiere`),
  ADD KEY `id_matiere` (`id_matiere`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id_matiere`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `fk_note_matiere` (`id_matiere`),
  ADD KEY `fk_note_intervenant` (`id_intervenant`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_ecole` (`id_ecole`);

--
-- Index pour la table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_ecole` (`id_ecole`),
  ADD KEY `id_promo` (`id_promo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id_ecole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `intervenant`
--
ALTER TABLE `intervenant`
  MODIFY `id_intervenant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT pour la table `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `intervenant_ecole`
--
ALTER TABLE `intervenant_ecole`
  ADD CONSTRAINT `intervenant_ecole_ibfk_1` FOREIGN KEY (`id_intervenant`) REFERENCES `intervenant` (`id_intervenant`),
  ADD CONSTRAINT `intervenant_ecole_ibfk_2` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id_ecole`);

--
-- Contraintes pour la table `intervenant_matiere`
--
ALTER TABLE `intervenant_matiere`
  ADD CONSTRAINT `intervenant_matiere_ibfk_1` FOREIGN KEY (`id_intervenant`) REFERENCES `intervenant` (`id_intervenant`),
  ADD CONSTRAINT `intervenant_matiere_ibfk_2` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_note_intervenant` FOREIGN KEY (`id_intervenant`) REFERENCES `intervenant` (`id_intervenant`),
  ADD CONSTRAINT `fk_note_matiere` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`),
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id_ecole`);

--
-- Contraintes pour la table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_ecole`) REFERENCES `ecole` (`id_ecole`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
