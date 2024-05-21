-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 mai 2024 à 23:21
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
-- Base de données : `money_donation`
--

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

CREATE TABLE `donation` (
  `id_donation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_projects` int(11) NOT NULL,
  `donation_type` enum('Penctuel Donnation','Mensuel Donnation') NOT NULL,
  `amount` int(255) NOT NULL,
  `card_type` enum('Dahabiya Card','Societe Generale Card','Cpa Card','BNA Card') NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `expiration_date` varchar(100) NOT NULL,
  `ccv` varchar(100) NOT NULL,
  `date_donation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `donation`
--

INSERT INTO `donation` (`id_donation`, `id_user`, `id_projects`, `donation_type`, `amount`, `card_type`, `card_number`, `expiration_date`, `ccv`, `date_donation`) VALUES
(11, 10, 18, 'Mensuel Donnation', 3000, 'Dahabiya Card', '121212121212', '12/12', '123', '2024-05-20 05:18:33'),
(12, 11, 19, 'Penctuel Donnation', 30000, 'Cpa Card', '208020802080', '12/12', '123', '2024-05-20 18:00:13');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id_projects` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `project_photo` varchar(255) NOT NULL,
  `Objectif` int(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id_projects`, `id_user`, `project_name`, `Description`, `project_photo`, `Objectif`, `date`) VALUES
(18, 10, 'test', 'dsdcvdv', '664ac0b37de7e5.66517755_photo-1615897570286-da936a5dfb81 (1).jpeg', 2000, '2024-05-20 05:17:07'),
(19, 10, 'Project 2', 'Test', '664b6f3d135178.39128848_liste-de-courses.png', 30000, '2024-05-20 17:41:49');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('donnator','beneficiary') NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `phone`, `password`, `role`, `date`) VALUES
(10, 'Islem', 'Dj', 'islemas23@gmail.com', '0555782854', '27112003', 'beneficiary', '2024-05-20 05:14:59'),
(11, 'Islem', 'Dj', 'islemas23@gmail.co', '0555782854', '12312312', 'donnator', '2024-05-20 17:59:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id_donation`),
  ADD KEY `fk_user_donation` (`id_user`),
  ADD KEY `fk_projects_donation` (`id_projects`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_projects`),
  ADD KEY `fk_users_projects` (`id_user`);

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
-- AUTO_INCREMENT pour la table `donation`
--
ALTER TABLE `donation`
  MODIFY `id_donation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_projects` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk_projects_donation` FOREIGN KEY (`id_projects`) REFERENCES `projects` (`id_projects`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_donation` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_users_projects` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
