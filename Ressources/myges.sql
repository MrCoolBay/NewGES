-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 avr. 2024 à 19:03
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
-- Base de données : `myges`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `pdp` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `surname`, `pdp`, `email`, `password`, `salt`, `school`) VALUES
(1, 'Fabien', 'Lubin', 'https://media.discordapp.net/attachments/918602034301784145/1224731617264664616/IMG_2314.JPG?ex=661e8f33&is=660c1a33&hm=9d8c52f5213423bdef08aa9055405ecaa298c7c83fb1ed73d93d9ca0110f3821&=&format=webp&width=395&height=702', 'flubin1@myges.fr', '$2y$10$IhcJ1ZKKuc3hCIxj0yzx2OUnQa3A1koiKUl7jv8RgaFz9xw.Pibp2', '846279938660c2cc8149e61.97265511', 'ESGI'),
(2, 'Alexis', 'Derveaux', 'https://media.discordapp.net/attachments/1167492339200172139/1222848726951788594/FF466658-70A5-441E-87E4-67550E918643.jpg?ex=6617b59f&is=6605409f&hm=1b2c381876569937224864f57ba8f7bcf409142456763178d8ef44ff273a2d3f&=&format=webp&width=395&height=702', 'alexis@gmail.com', '$2y$10$PMseVDBpHq7jfJ6j95jR/uP/Tg9hZhCflc.cefuuuVhtH2zER9j6.', '936870711660c2da4b9baa6.61185934', 'ESGI'),
(3, 'Gaetan', 'Majkowiez', 'https://media.discordapp.net/attachments/1167492339200172139/1222848476354969642/IMG_1207.jpg?ex=6617b564&is=66054064&hm=f2a3ab15e4f812f1ed888f9b5dd794b3ccc92ff89d467d15b7b75ce29f1d8c6a&=&format=webp&width=526&height=702', 'gaetan@gmail.com', '$2y$10$6NlAP5BoxMpVlKftzb60ZugxzveAjxp25kXSXDKEUF74.9.tpLm/a', '2019578612660c2ffa492ca1.93868479', 'ESGI'),
(4, 'Amaury', 'Marchand', 'https://media.licdn.com/dms/image/D4E35AQEE5JtLcYxhPQ/profile-framedphoto-shrink_800_800/0/1706560499281?e=1712682000&v=beta&t=zaPGIrVJynFrngZsEgLb_o-w3sImHi1qp392-5mai5o', 'amaury@gmail.com', '$2y$10$e01uVfvocnIlQ0/v5eI1Jep9KO/0JVFzgixAfWrZm1pSTOKj3.OT6', '1331194036660c306f4db8e0.60802392', 'ESGI'),
(5, 'Fred', 'Etienne', '', 'fred@gmail.com', '$2y$10$OkySwyCTHLszvzCWtADGGe2Qxxq6HQe13ZbSrfgm5.HXxxpoVumHW', '68739656660c36e25afdd7.00740440', 'EFAB');

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


CREATE TABLE Note(
        id_note   Int  Auto_increment  NOT NULL ,
        matiere   CHAR(50),
        note1     Int NOT NULL,
        note2     Int NOT NULL,
        note3     Int NOT NULL,
        partiel     Int NOT NULL,
        date_note Date NOT NULL,
        information_note CHAR(50)
	,CONSTRAINT Note_PK PRIMARY KEY (id_note)
)ENGINE=InnoDB;
