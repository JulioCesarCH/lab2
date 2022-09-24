/*
MySQL Backup
Database: dbsistema
Backup Time: 2022-09-23 08:04:32
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `dbsistema`.`clientes`;
DROP TABLE IF EXISTS `dbsistema`.`failed_jobs`;
DROP TABLE IF EXISTS `dbsistema`.`migrations`;
DROP TABLE IF EXISTS `dbsistema`.`numeros`;
DROP TABLE IF EXISTS `dbsistema`.`password_resets`;
DROP TABLE IF EXISTS `dbsistema`.`personal_access_tokens`;
DROP TABLE IF EXISTS `dbsistema`.`publicacions`;
DROP TABLE IF EXISTS `dbsistema`.`users`;
CREATE TABLE `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `numeros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `publicacions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_id` bigint(20) unsigned NOT NULL,
  `numero_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `publicacions_cliente_id_foreign` (`cliente_id`),
  KEY `publicacions_numero_id_foreign` (`numero_id`),
  CONSTRAINT `publicacions_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `publicacions_numero_id_foreign` FOREIGN KEY (`numero_id`) REFERENCES `numeros` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
BEGIN;
LOCK TABLES `dbsistema`.`clientes` WRITE;
DELETE FROM `dbsistema`.`clientes`;
INSERT INTO `dbsistema`.`clientes` (`id`,`dni`,`nombre`,`password`) VALUES (1, '12345678', 'julio', '$2y$10$GtUb/AZzNjt7aYmzr36IE.XVGDPpqNlgObt5ufizEbMta4F7Ds/8u'),(2, '87654321', 'edgardo', '$2y$10$2ZWJuiU4vx6KQbC4xeXV5.EYBnUno21O28VkHMrIfH2zG50nGkKpq');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`failed_jobs` WRITE;
DELETE FROM `dbsistema`.`failed_jobs`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`migrations` WRITE;
DELETE FROM `dbsistema`.`migrations`;
INSERT INTO `dbsistema`.`migrations` (`id`,`migration`,`batch`) VALUES (15, '2014_10_12_000000_create_users_table', 1),(16, '2014_10_12_100000_create_password_resets_table', 1),(17, '2019_08_19_000000_create_failed_jobs_table', 1),(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),(19, '2022_09_19_144606_create_clientes_table', 1),(20, '2022_09_19_144628_create_numeros_table', 1),(21, '2022_09_19_144701_create_publicacions_table', 1);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`numeros` WRITE;
DELETE FROM `dbsistema`.`numeros`;
INSERT INTO `dbsistema`.`numeros` (`id`,`tema`,`fecha`) VALUES (1, 'PHP NIVEL I - PROGRAMACIÓN WEB', '2022-09-13'),(2, 'ANDROID STUDIO', '2022-09-22'),(3, 'JAVA - DESARROLLO DE APLICACIONES WEB', '2022-09-21');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`password_resets` WRITE;
DELETE FROM `dbsistema`.`password_resets`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`personal_access_tokens` WRITE;
DELETE FROM `dbsistema`.`personal_access_tokens`;
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`publicacions` WRITE;
DELETE FROM `dbsistema`.`publicacions`;
INSERT INTO `dbsistema`.`publicacions` (`id`,`nombre`,`tema`,`cliente_id`,`numero_id`) VALUES (1, 'julio', 'ANDROID STUDIO', 1, 2),(5, 'julio', 'PHP NIVEL I - PROGRAMACIÓN WEB', 1, 1),(6, 'edgardo', 'ANDROID STUDIO', 2, 2);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `dbsistema`.`users` WRITE;
DELETE FROM `dbsistema`.`users`;
UNLOCK TABLES;
COMMIT;
