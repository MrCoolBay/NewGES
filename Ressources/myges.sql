-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 18 avr. 2024 à 15:51
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myges`
--

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_note` int(11) NOT NULL,
  `matiere` char(100) DEFAULT NULL,
  `intervenant` varchar(50) NOT NULL,
  `note1` varchar(50) DEFAULT NULL,
  `info_note1` varchar(100) DEFAULT NULL,
  `note2` varchar(50) DEFAULT NULL,
  `info_note2` varchar(100) DEFAULT NULL,
  `partiel` varchar(50) DEFAULT NULL,
  `date_note` timestamp NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `moyenne` decimal(5,2) DEFAULT NULL,
  `moyenne_total` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_note`, `matiere`, `intervenant`, `note1`, `info_note1`, `note2`, `info_note2`, `partiel`, `date_note`, `id_user`, `moyenne`, `moyenne_total`) VALUES
(15, 'Anglais', 'Mme Manach Sekour', '1', 'Informations pour la note 1', '19', 'Informations pour la note 2', '18', '2024-04-18 08:20:11', 11, 12.67, 12.67),
(16, 'Anglais', 'Mme Manach Sekour', '15', 'Informations pour la note 1', '19', 'Informations pour la note 2', '19', '2024-04-18 08:24:57', 1, 17.67, 14.83),
(17, 'Anglais', 'Mme Manouch Sekour', '7', 'Informations pour la note 1', '10', 'Informations pour la note 2', '19', '2024-04-11 22:00:00', 1, 12.00, 14.83),
(18, 'Anglais', 'Thomas Pierson', '15', 'OINqzodj', NULL, NULL, NULL, '2024-04-18 11:09:05', 10, NULL, NULL),
(19, 'Anglais', 'Thomas Pierson', '15', 'Bravo Amaury', NULL, NULL, NULL, '2024-04-18 11:14:29', 4, NULL, NULL),
(20, 'Anglais', 'Thomas Pierson', '15', 'salut', NULL, NULL, NULL, '2024-04-18 11:21:31', 2, NULL, NULL),
(21, 'Anglais', 'Thomas Pierson', '15', 'salut', NULL, NULL, NULL, '2024-04-18 11:22:17', 2, NULL, NULL),
(22, 'Anglais', 'Thomas Pierson', '15', 'weeeeee', NULL, NULL, NULL, '2024-04-18 11:23:21', 2, NULL, NULL),
(23, 'Anglais', 'Thomas Pierson', '2', 'Salut', NULL, NULL, NULL, '2024-04-18 11:42:08', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `pdp` varchar(10000) NOT NULL DEFAULT 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `pdp`, `email`, `password`, `salt`, `school`) VALUES
(1, 'Fabien', 'Lubin', 'https://media.discordapp.net/attachments/918602034301784145/1224731617264664616/IMG_2314.JPG?ex=661e8f33&is=660c1a33&hm=9d8c52f5213423bdef08aa9055405ecaa298c7c83fb1ed73d93d9ca0110f3821&=&format=webp&width=395&height=702', 'flubin1@myges.fr', '$2y$10$IhcJ1ZKKuc3hCIxj0yzx2OUnQa3A1koiKUl7jv8RgaFz9xw.Pibp2', '846279938660c2cc8149e61.97265511', 'admin'),
(2, 'Alexis', 'Derveaux', 'https://media.discordapp.net/attachments/1167492339200172139/1222848726951788594/FF466658-70A5-441E-87E4-67550E918643.jpg?ex=6617b59f&is=6605409f&hm=1b2c381876569937224864f57ba8f7bcf409142456763178d8ef44ff273a2d3f&=&format=webp&width=395&height=702', 'alexis@gmail.com', '$2y$10$PMseVDBpHq7jfJ6j95jR/uP/Tg9hZhCflc.cefuuuVhtH2zER9j6.', '936870711660c2da4b9baa6.61185934', 'admin'),
(4, 'Amaury', 'Marchand', 'https://media.licdn.com/dms/image/D4E35AQEE5JtLcYxhPQ/profile-framedphoto-shrink_800_800/0/1706560499281?e=1712682000&v=beta&t=zaPGIrVJynFrngZsEgLb_o-w3sImHi1qp392-5mai5o', 'amaury@gmail.com', '$2y$10$e01uVfvocnIlQ0/v5eI1Jep9KO/0JVFzgixAfWrZm1pSTOKj3.OT6', '1331194036660c306f4db8e0.60802392', 'admin'),
(10, 'Gaetan', 'Majkowiez', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'gmajkowiez@myges.fr', '$2y$10$FLMACAUK/dXsypRWf0OJneQnj.ebALxmf1MB4vmNLdnhz4L3zquKe', '579335945661fb81cda5a38.59436732', 'admin'),
(11, 'Phèdre', 'Homehr', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'sweetylove2005@gmail.Com', '$2y$10$chlyKd26/ScQYkCnpNjjTeIS4U90DgGqK/92YeVgcFh6ydHn8iPYW', '142246554661ff764575c79.01143103', 'EFAB'),
(12, 'Thomas', 'Pierson', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'tpierson@myges.fr', '$2y$10$nySNz5aOyQqeVCo2eRcZTO0RfedmBLtI4NJ0WfpUJeqGeiTCRrsTO', '8412783046620e8032a4d84.86953128', 'Intervenant'),
(13, 'Pierre', 'Postal', 'https://media.discordapp.net/attachments/1164881520234868787/1230501114009354240/7F4D3871-986E-4CF2-815A-FD025A3EC93F_1_105_c.jpeg?ex=66338c77&is=66211777&hm=b726cb122717780f0e2e26a7ea93d8b388e537c9e8055efd5c7c3772adb19e8d&=&format=webp&width=550&height=976', 'ppostal@myges.fr', '$2y$10$ZA4a96TlBtaP1lWGvs87HOiPFxM1brkEXnZyKMuXctsxq7dlma66i', '75058694666210cdc259267.15247958', 'ESGI'),
(14, 'Sarah', 'Muszalski', 'https://media.licdn.com/dms/image/D4E35AQF25QjGu88ebg/profile-framedphoto-shrink_100_100/0/1709044408213?e=1714050000&v=beta&t=dUi2WDvJIC0zOqijAhX07cx73s8Jv3rzmLIvxiKsMpY', 'smuszalski@myges.fr', '$2y$10$IAXe91GXV.kPrJBZpvLeU.MgPb5Yddp0CVc2KmvEP9NW948AKqgsy', '1127611833662116b748ff50.88570720', 'EFAB'),
(15, 'Apolline', 'Goin', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'agoin@myges.fr', '$2y$10$lXHfroN92Zw0azs.com50elBiKIMskX/QGma3fZvD375rEtRHNOzq', '1181633869662119612e1969.78712026', 'PPA'),
(16, 'Aline', 'Chaffangeon', 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=612x612&w=0&k=20&c=iLDNfo8MGvF_Srti46vL4iyYbHB4bUK5iv6V7c4Pj80=', 'achaffangeon@myges.fr', '$2y$10$8rskMpwzEaWEs65RZMcewu5BWaZFzq2rQxK34J5wVr2yGZK9SkgAC', '79801979066211a05f10491.59587154', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `fk_user_note` (`id_user`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_user_note` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
