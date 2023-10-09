-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour sessionsymphony
CREATE DATABASE IF NOT EXISTS `sessionsymphony` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sessionsymphony`;

-- Listage de la structure de table sessionsymphony. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.categorie : ~0 rows (environ)
INSERT INTO `categorie` (`id`, `libelle`) VALUES
	(1, 'Informatique'),
	(2, 'Bureautique'),
	(3, 'Exterieur');

-- Listage de la structure de table sessionsymphony. cours
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_id` int DEFAULT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FDCA8C9CBCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_FDCA8C9CBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.cours : ~3 rows (environ)
INSERT INTO `cours` (`id`, `categorie_id`, `libelle`) VALUES
	(1, 1, 'Php'),
	(2, 2, 'Word'),
	(3, 1, 'Symfony'),
	(4, 3, 'Jardinage');

-- Listage de la structure de table sessionsymphony. doctrine_migration_versions
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Listage des données de la table sessionsymphony.doctrine_migration_versions : ~0 rows (environ)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20230922124444', '2023-09-22 12:45:20', 189),
	('DoctrineMigrations\\Version20230928094817', '2023-09-28 09:48:52', 39);

-- Listage de la structure de table sessionsymphony. messenger_messages
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.messenger_messages : ~0 rows (environ)

-- Listage de la structure de table sessionsymphony. programme
CREATE TABLE IF NOT EXISTS `programme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cours_id` int DEFAULT NULL,
  `session_id` int DEFAULT NULL,
  `duree` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3DDCB9FF7ECF78B0` (`cours_id`),
  KEY `IDX_3DDCB9FF613FECDF` (`session_id`),
  CONSTRAINT `FK_3DDCB9FF613FECDF` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`),
  CONSTRAINT `FK_3DDCB9FF7ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.programme : ~12 rows (environ)
INSERT INTO `programme` (`id`, `cours_id`, `session_id`, `duree`) VALUES
	(1, 1, 1, 2),
	(2, 2, 1, 3),
	(3, 3, 1, 7),
	(4, 2, 2, 5),
	(5, 1, 4, 3),
	(6, 4, 3, 2),
	(7, 1, 1, 3),
	(8, 2, 4, 12),
	(9, 2, 2, 52),
	(10, 1, 6, 3),
	(11, 3, 6, 14),
	(12, 4, 6, 1);

-- Listage de la structure de table sessionsymphony. session
CREATE TABLE IF NOT EXISTS `session` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `nb_de_place` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.session : ~4 rows (environ)
INSERT INTO `session` (`id`, `libelle`, `date_debut`, `date_fin`, `nb_de_place`) VALUES
	(1, 'Apprentissage PHP', '2023-09-20 00:00:00', '2023-09-27 00:00:00', 13),
	(2, 'Pix', '2023-09-25 09:18:10', '2023-10-27 09:18:12', 5),
	(3, 'Jardinerie', '2023-10-10 09:18:43', '2023-10-23 09:19:18', 11),
	(4, 'Html Css', '2023-09-29 00:00:00', '2023-10-08 00:00:00', 7),
	(6, 'hgfdjtd', '2023-09-28 00:00:00', '2023-10-28 00:00:00', 2);

-- Listage de la structure de table sessionsymphony. stagiaire
CREATE TABLE IF NOT EXISTS `stagiaire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` datetime NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.stagiaire : ~6 rows (environ)
INSERT INTO `stagiaire` (`id`, `nom`, `prenom`, `sexe`, `ville`, `email`, `telephone`, `date_de_naissance`, `picture`) VALUES
	(2, 'Loup', 'Tou', 'Femme', 'Rennes', 'loup@gmail.com', '0701010101', '1998-06-06 14:07:16', 'Img/OIP.jpg'),
	(4, 'Syplile', 'Sophie', 'Femme', 'Brest', 'Sbrest@gmail.com', '0645545523', '2000-09-27 14:03:01', 'Img/télécharger.jpg'),
	(5, 'Antoine', 'Lalo', 'Homme', 'Marseille', 'marseille93@gmail.com', '0646587488', '1984-09-28 14:04:52', 'Img/etudiant-noir-768x410.jpg'),
	(6, 'Muller', 'Evie', 'Femme', 'Nancy', 'mEvNan@gmail.com', '0799663345', '2004-09-28 14:07:03', 'Img/181299464.png'),
	(10, 'sqdqsd', 'sdqsdqs', 'qsdqsd', 'qsdqdqsd', 'qsdqsdqsd', '2152131', '2023-10-19 00:00:00', 'C:\\Users\\DjibrilSIEGEL\\AppData\\Local\\Temp\\php19F9.tmp');

-- Listage de la structure de table sessionsymphony. stagiaire_session
CREATE TABLE IF NOT EXISTS `stagiaire_session` (
  `stagiaire_id` int NOT NULL,
  `session_id` int NOT NULL,
  PRIMARY KEY (`stagiaire_id`,`session_id`),
  KEY `IDX_D32D02D4BBA93DD6` (`stagiaire_id`),
  KEY `IDX_D32D02D4613FECDF` (`session_id`),
  CONSTRAINT `FK_D32D02D4613FECDF` FOREIGN KEY (`session_id`) REFERENCES `session` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_D32D02D4BBA93DD6` FOREIGN KEY (`stagiaire_id`) REFERENCES `stagiaire` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table sessionsymphony.stagiaire_session : ~5 rows (environ)
INSERT INTO `stagiaire_session` (`stagiaire_id`, `session_id`) VALUES
	(2, 4),
	(2, 6),
	(5, 2),
	(5, 4),
	(6, 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
