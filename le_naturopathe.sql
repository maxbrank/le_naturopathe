-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 avr. 2019 à 14:02
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `le_naturopathe`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `content`, `title`, `img`, `created_at`) VALUES
(1, 'Une astuce toute simple pour retrouver le jus tout au long de la journée et de l’année : les jus de légumes. Vous saurez aussi pourquoi il faut éviter les jus de fruits.', 'Des jus de légumes pour plus de jus', 'Detox-Diets-For-Weight-Loss.-500x500.jpg', '2019-04-01 16:30:00'),
(3, 'Dites stop à la fatigue pour toujours! \r\nÊtre énergique et plein de vie c’est facile… Mais par où commencer ? C’est pour cela que je viens de présenter mon nouveau livre « Stop à la fatigue c’est malin » coécrit avec Vanessa Lopez. Ce guide pratique vous permet d’améliorer tous les aspect de la santé : l’alimentation en est le centre, mais il y a aussi se nettoyer de l’intérieur, bouger suffisamment (mais pas trop), apprendre à gérer le stress, à se respecter et à se reposer avant de tomber malade… Ou en dépression. Et surtout vivre chaque journée à 200%.', 'Livre Stop à la fatigue chronique avec la naturopathie', 'Stop-a-la-fatigue-couv-500x500.png', '2019-04-02 08:29:19'),
(4, 'Et si être en bonne santé était juste une question d’équilibre ?\r\nAvec ce guide, véritable bible à utiliser au quotidien, adoptez les bons réflexes pour vous protéger, vous et votre famille, contre la maladie et vous maintenir dans un état de bien-être global.\r\n\r\nQuel secrets ?\r\nLes tempéraments : Grâce au « jeu des 4 familles », déterminez votre « tempérament » naturopathique : lymphatique, sanguin, bilieux, nerveux pour découvrir l’alimentation et l’hygiène de vie qui vous conviennent vraiment… à vous !\r\nDécouvrez les grands principes de l’alimentation santé pour prendre votre santé en main et séparer le faux du vrai dans le domaine.\r\nDes conseils simples et efficaces pour le quotidien et les intégrer facilement dans votre vie (et celle de votre famille).\r\nTestez et adoptez les cures de détoxification pour vous débarrasser des toxines et purifier votre organisme.\r\nVous avez des problèmes digestifs ou une intolérance alimentaire ? Vous êtes stressé ou constamment fatigué ? Ouvrez la Boîte Santé et piochez tous les conseils utiles pour retrouver un niveau d’énergie optimal à tous les âges de votre vie.', 'Secrets de naturopathes… Le livre', 'Secrets-de-naturopathes-500x500.jpg', '2019-04-03 12:15:39');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `created_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_user` (`id_user`),
  KEY `FK_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `id_user`, `id_article`) VALUES
(1, 'Super article!', '2019-04-01 16:30:00', 1, 1),
(2, 'Mouai', '2019-04-02 08:29:19', 2, 1),
(3, 'thfhf', '2019-04-11 16:51:59', 9, 1),
(4, 'thfhf', '2019-04-11 16:52:35', 9, 1),
(5, 'thfhf', '2019-04-11 16:53:08', 9, 1),
(6, 'mojnmodwsfjbn\r\n', '2019-04-11 16:53:56', 9, 1),
(7, 'mojnmodwsfjbn\r\n', '2019-04-11 16:53:58', 9, 1),
(8, 'mojnmodwsfjbn\r\n', '2019-04-11 16:54:00', 9, 1),
(9, 'mojnmodwsfjbn\r\n', '2019-04-11 16:54:01', 9, 1),
(10, 'mojnmodwsfjbn\r\n', '2019-04-12 10:44:28', 9, 1),
(11, 'mojnmodwsfjbn\r\n', '2019-04-12 14:15:49', 9, 1),
(12, 'mojnmodwsfjbn\r\n', '2019-04-12 15:18:17', 9, 1);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionnaire_score` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `mail`, `pwd`) VALUES
(9, 'Maxime', 'MALBRANCQ', 'maxbrank', 'maxbrank@gmail.com', '$2y$10$3FmGcidA52nTOIpSh4xv3OYew9a.7HVlA6yE3/coChYNOUdKK/AZa'),
(8, 'Maxime', 'MALBRANCQ', 'maxbrank', 'maxbrank@gmail.com', '$2y$10$PVbFWH3WYG736hAGO/OrZe05bGgn.zPbdKm2m4IrKPoVu6.ZPzmgu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
