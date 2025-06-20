-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 juin 2025 à 17:00
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
-- Base de données : `acasen`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prixmensuel` int(11) NOT NULL,
  `prixannuel` int(11) NOT NULL,
  `nombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `nom`, `prixmensuel`, `prixannuel`, `nombre`) VALUES
(8, 'standard', 5000, 50000, 5);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `idprof` varchar(255) NOT NULL,
  `idmatiere` varchar(255) NOT NULL,
  `mensualite` varchar(255) NOT NULL,
  `inscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `idprof`, `idmatiere`, `mensualite`, `inscription`) VALUES
(9, '8', '4', '8000', '5000');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `id` int(11) NOT NULL,
  `ideleve` int(11) NOT NULL,
  `idcours` int(11) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `tuteur` varchar(255) NOT NULL,
  `teltuteur` varchar(255) NOT NULL,
  `emailtuteur` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id`, `ideleve`, `idcours`, `classe`, `tuteur`, `teltuteur`, `emailtuteur`, `statut`, `date`) VALUES
(1, 13, 5, '', 'ibou diallo', '781089424', 'diallo@gmail.com', '1', '2025-06-17'),
(2, 13, 5, '', 'ibou diallo', '781089424', 'diallo@gmail.com', '1', '2025-06-17'),
(3, 13, 5, '', 'ibou diallo', '784567890', 'diallo@gmail.com', '1', '2025-06-17'),
(4, 13, 5, '', 'ibou diallo', '781234567', 'diallo@gmail.com', '1', '2025-06-17'),
(5, 13, 5, '4ieme', 'ibou diallo', '781234567', 'diallo@gmail.com', '1', '2025-06-17'),
(6, 13, 5, '4ieme', 'ibou diallo', '761234567', 'diallo@gmail.com', '1', '2025-06-17'),
(7, 13, 5, '3ieme', 'jak', '1234567', 'diallo@gmail.com', '2', '2025-06-18'),
(8, 13, 9, '4ieme', 'ibou diallo', '1234567', 'diallo@gmail.com', '1', '2025-06-19'),
(9, 13, 9, '5', 'soumare', '1234567', 'diallo@gmail.com', '1', '2025-06-20'),
(10, 13, 9, '2', 'hi', '98765', 'diallo@gmail.com', '2', '2025-06-20');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idabonnement` int(11) NOT NULL,
  `date` date NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `iduser`, `idabonnement`, `date`, `statut`) VALUES
(1, 6, 8, '2025-05-02', 1),
(2, 7, 8, '2025-05-13', 1),
(3, 8, 8, '2025-05-13', 1),
(4, 9, 8, '2025-05-13', 1),
(5, 10, 8, '2025-05-14', 1),
(6, 11, 8, '2025-05-14', 1),
(7, 12, 8, '2025-05-14', 1),
(8, 13, 8, '2025-05-15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id` int(11) NOT NULL,
  `nomdelamatiere` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id`, `nomdelamatiere`, `image`) VALUES
(4, 'français', '684ff721ba52f.jpg'),
(5, 'histoire geographie', '684ff34a1bc63.jpg'),
(6, 'SVT', '684ff416a0629.jpg'),
(7, 'pc', '6852ec41ec54a.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `userlocalite`
--

CREATE TABLE `userlocalite` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idzonedactivite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `matiere` text NOT NULL,
  `diplome` text NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `adresse`, `tel`, `email`, `mdp`, `matiere`, `diplome`, `role`) VALUES
(3, 'bouba', 'diallo', 'ouakam', '776000000', 'admin@gmail.com', '$2y$12$s9A3yDI4Do5ss3HVznsGdOYpAu2OzUxTUQMK1T71MxYHavoKm0gNi', 'HG', 'licence', 'admin'),
(4, 'papa', 'diallo', 'ouakam', '777777777', 'papa@gmail.com', '$2y$12$MaFpXMBN.AtmkLe9VoNR6el1zE1E3jrj..okymR/Kah4MW5mh4ZCe', 'HG', 'licence', 'client'),
(5, 'fatou', 'diop', 'ouakam', '776000000', 'fadiop@gmail.com', '$2y$12$KLBqbSn3xyCMYRxuSze7ROYDdiBB6IjlSFEEX2uPWGrj32uu86H86', 'HG', 'licence', 'client'),
(6, 'fatou', 'diop', 'ouakam', '776000000', 'fadiop@gmail.com', '$2y$12$LCK01pK0V7781owlhBEwEOWYsE04cJVI5/qCaEnI3NRKx3fDvnUe6', 'HG', 'licence', 'client'),
(7, 'ami', 'diop', 'ouakam', '776000000', 'ami@gmail.com', '$2y$12$WMkCMWONHq33ukBBKIOrQO/AISdhkUpm/rwU2gOGpmBAOvB7XHXNq', 'HG', 'licence', 'client'),
(8, 'bella', 'ba', 'mbao', '776000000', 'bellaba@gmail.com', '$2y$12$GCgzBHhlaqiQY.0AHGIW6.doORpdiK22lbiADLPUYIgH9pgy4r8pa', 'HG', 'licence', 'professeur'),
(9, 'moussa', 'diallo', 'ouakam', '776000000', 'moussa@gmail.com', '$2y$12$067uPYGKZ4v/tFkQTedE2.FQ6cHQVJjYAl9yaDIQI46x8PtR1OqHa', 'HG', 'BFEM', 'professeur'),
(10, 'bouba', 'diallo', 'ouakam', '776000000', 'bouba@gmail.com', '$2y$12$n1QxR./OUKXnzWGuQQcaUOMx/m.XOjXPFUmOvExiyuClBa5qM/tte', 'HG', 'licence', 'professeur'),
(11, 'mounir', 'ba', 'ouakam', '776000000', 'mounir@gmail.com', '$2y$12$uXIYmlTeD03IX6wOcteJR.7zZFhQmoTeOyK3Lslde2cmG4LO8DmRu', 'HG', 'BFEM', 'professeur'),
(12, 'jul', 'jul', 'ouakam', '776000000', 'juljul@gmail.com', '$2y$12$s/bS7zho4CModsD9Byp4We9hLVrof3IjFVDb9l.y497AgIs6YhIgW', 'HG', 'licence', 'professeur'),
(13, 'Alioune ', 'Fall', 'Sangalkam', '779007890', 'fallcodeur@gmail.com', '$2y$12$bnNkrMCfcV.DpXaoxxDtfep2WF4qFSGX7fkblZryS6jNTTBCxaAMO', 'Dev Web', 'Master', 'eleve');

-- --------------------------------------------------------

--
-- Structure de la table `zonedactivite`
--

CREATE TABLE `zonedactivite` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `commune` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `userlocalite`
--
ALTER TABLE `userlocalite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zonedactivite`
--
ALTER TABLE `zonedactivite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `userlocalite`
--
ALTER TABLE `userlocalite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `zonedactivite`
--
ALTER TABLE `zonedactivite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
