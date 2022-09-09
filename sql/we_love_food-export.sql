-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 août 2022 à 08:45
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
-- Base de données : `we_love_food`
--

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `recipe` text NOT NULL,
  `author` varchar(512) NOT NULL,
  `is_enabled` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `title`, `recipe`, `author`, `is_enabled`) VALUES
(1, 'Cassoulet', 'Le cassoulet est une spécialité régionale du Languedoc, à base de haricots secs, généralement blancs, et de viande. À son origine, il était à base de fèves. Le cassoulet tient son nom de la cassole en terre cuite émaillée dite caçòla1 en occitan et fabriquée à Issel.\n', 'mickael.andrieu@exemple.com', 1),
(2, 'Couscous', 'Le couscous est d\'une part une semoule de blé dur préparée à l\'huile d\'olive (un des aliments de base traditionnel de la cuisine des pays du Maghreb) et d\'autre part, une spécialité culinaire issue de la cuisine berbère, à base de couscous, de légumes, d\'épices, d\'huile d\'olive et de viande (rouge ou de volaille) ou de poisson.', 'mickael.andrieu@exemple.com', 0),
(4, 'Salade Romaine', 'La salade César est une recette de cuisine de salade composée de la cuisine américaine, traditionnellement préparée en salle à côté de la table, à base de laitue romaine, œuf dur, croûtons, parmesan et de « sauce César » à base de parmesan râpé, huile d\'olive, pâte d\'anchois, ail, vinaigre de vin, moutarde, jaune d\'œuf et sauce Worcestershire.', 'laurene.castor@exemple.com', 0),
(3, 'Escalope milanaise', 'L\'escalope à la milanaise, ou escalope milanaise est une escalope panée, de viande de veau, traditionnellement prise dans le faux-filet. Historiquement, on la cuit avec du beurre. Elle est généralement servie avec salade ou frites, accompagnée de sauce mayonnaise. On peut y ajouter un filet de jus de citron.\n\nEn Italie, ce mets ne se sert pas avec des pâtes.', 'mathieu.nebra@exemple.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(64) NOT NULL,
  `email` varchar(512) NOT NULL,
  `password` varchar(512) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `password`, `age`) VALUES
(1, 'Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34),
(2, 'Mathieu Nebra', 'mathieu.nebra@exemple.com', 'MiamMiam', 34),
(3, 'Laurène Castor', 'laurene.castor@exemple.com', 'laCasto28', 28);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
