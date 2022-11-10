-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 nov. 2022 à 16:59
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_brief`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `Nom`, `Prenom`, `Email`) VALUES
(1, 'NADA', 'STITOU', 'NADZA@gmail.com'),
(2, 'butaina', 'harrak', 'harrak@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `apprenant_brief`
--

CREATE TABLE `apprenant_brief` (
  `id` int(10) UNSIGNED NOT NULL,
  `apprenant_id` int(10) UNSIGNED NOT NULL,
  `brief_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `briefs`
--

CREATE TABLE `briefs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nom_du_brief` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_heure_de_livraison` timestamp NULL DEFAULT NULL,
  `Date_heure_de_récupération` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `briefs`
--

INSERT INTO `briefs` (`id`, `Nom_du_brief`, `Date_heure_de_livraison`, `Date_heure_de_récupération`) VALUES
(1, 'gestion projet', '2022-11-24 15:50:18', '2022-11-07 15:50:18'),
(2, 'gestion promo', '2022-11-02 15:53:04', '2022-11-10 15:53:04');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_06_165204_create_briefs_table', 1),
(3, '2022_11_06_165353_create_taches_table', 1),
(4, '2022_11_08_144235_apprenant', 1),
(5, '2022_11_08_151242_apprenant_brief', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nom_de_la_tache` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Debut_de_la_tache` timestamp NULL DEFAULT NULL,
  `Fin_de_la_tache` timestamp NULL DEFAULT NULL,
  `brief_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `Nom_de_la_tache`, `Debut_de_la_tache`, `Fin_de_la_tache`, `brief_id`) VALUES
(1, 'tache 1', '2022-11-24 15:53:22', '2022-11-14 15:53:22', 1),
(2, 'tache2', '2022-11-18 15:53:22', '2022-11-09 15:53:22', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apprenant_brief`
--
ALTER TABLE `apprenant_brief`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apprenant_brief_apprenant_id_foreign` (`apprenant_id`),
  ADD KEY `apprenant_brief_brief_id_foreign` (`brief_id`);

--
-- Index pour la table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taches_brief_id_foreign` (`brief_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `apprenant_brief`
--
ALTER TABLE `apprenant_brief`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprenant_brief`
--
ALTER TABLE `apprenant_brief`
  ADD CONSTRAINT `apprenant_brief_apprenant_id_foreign` FOREIGN KEY (`apprenant_id`) REFERENCES `apprenant` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `apprenant_brief_brief_id_foreign` FOREIGN KEY (`brief_id`) REFERENCES `briefs` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `taches`
--
ALTER TABLE `taches`
  ADD CONSTRAINT `taches_brief_id_foreign` FOREIGN KEY (`brief_id`) REFERENCES `briefs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
