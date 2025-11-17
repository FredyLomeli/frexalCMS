/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100432
 Source Host           : localhost:3306
 Source Schema         : frexalcms

 Target Server Type    : MySQL
 Target Server Version : 100432
 File Encoding         : 65001

 Date: 10/05/2025 20:06:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for asks
-- ----------------------------
DROP TABLE IF EXISTS `asks`;
CREATE TABLE `asks`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of asks
-- ----------------------------

-- ----------------------------
-- Table structure for carousels
-- ----------------------------
DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `video` tinyint(4) NOT NULL DEFAULT 0,
  `texto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousels
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clients
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for information
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 50 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1, 'nombre', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (2, 'nombre_corto', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (3, 'telefono', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (4, 'horario', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (5, 'email', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (6, 'direccion', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (7, 'municipio', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (8, 'estado', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (9, 'no_whatsapp', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (10, 'twitter', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (11, 'linkedin', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (12, 'facebook', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (13, 'instagram', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (14, 'youtube', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (15, 'descripcion_ubicacion', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (16, 'informacion_footer1', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (17, 'informacion_footer2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (18, 'telefono_oficina', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (19, 'img_logo', 'logo_M7e8G9x8.png', '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (20, 'welcome_title', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (21, 'welcome_title2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (22, 'welcome_description', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (23, 'welcome_link', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (24, 'welcome_boton', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (25, 'img_welcome', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (26, 'welcome_message1', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (27, 'welcome_icon1', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (28, 'welcome_description1', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (29, 'welcome_message2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (30, 'welcome_icon2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (31, 'welcome_description2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (32, 'video_title1', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (33, 'video_title2', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (34, 'video_link', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (35, 'video_img', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (36, 'mision', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (37, 'img_mision', NULL, '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (38, 'see_mision', '1', '2025-05-10 18:51:12', '2025-05-10 18:51:12');
INSERT INTO `information` VALUES (39, 'vision', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (40, 'img_vision', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (41, 'see_vision', '1', '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (42, 'valores', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (43, 'img_valores', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (44, 'see_valores', '1', '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (45, 'nosotros', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (46, 'img_nosotros', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (47, 'see_nosotros', '1', '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (48, 'img_asks', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');
INSERT INTO `information` VALUES (49, 'img_logo', NULL, '2025-05-10 18:51:13', '2025-05-10 18:51:13');

-- ----------------------------
-- Table structure for meters
-- ----------------------------
DROP TABLE IF EXISTS `meters`;
CREATE TABLE `meters`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of meters
-- ----------------------------
INSERT INTO `meters` VALUES (1, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 18:51:20', '2025-05-10 18:51:20');
INSERT INTO `meters` VALUES (2, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:09:54', '2025-05-10 19:09:54');
INSERT INTO `meters` VALUES (3, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:29:34', '2025-05-10 19:29:34');
INSERT INTO `meters` VALUES (4, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:32:37', '2025-05-10 19:32:37');
INSERT INTO `meters` VALUES (5, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:56:07', '2025-05-10 19:56:07');
INSERT INTO `meters` VALUES (6, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:56:17', '2025-05-10 19:56:17');
INSERT INTO `meters` VALUES (7, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:56:37', '2025-05-10 19:56:37');
INSERT INTO `meters` VALUES (8, 'inicio', '0', '0', 'http://frexalcms.local', '2025-05-10 19:57:28', '2025-05-10 19:57:28');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2021_04_13_033220_create_carousels_table', 1);
INSERT INTO `migrations` VALUES (5, '2021_04_13_033300_create_categories_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_04_13_033318_create_information_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_04_13_033330_create_meters_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_04_13_033356_create_products_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_04_16_045733_create_asks_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_04_27_030850_create_posts_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_05_16_235312_create_clients_table', 1);
INSERT INTO `migrations` VALUES (12, '2024_10_21_173511_create_references_table', 1);
INSERT INTO `migrations` VALUES (13, '2024_10_21_173555_create_our_teams_table', 1);

-- ----------------------------
-- Table structure for our_teams
-- ----------------------------
DROP TABLE IF EXISTS `our_teams`;
CREATE TABLE `our_teams`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puesto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `celular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `adicional1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `adicional2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `adicional3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `adicional4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of our_teams
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_corta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` int(11) NULL DEFAULT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for references
-- ----------------------------
DROP TABLE IF EXISTS `references`;
CREATE TABLE `references`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of references
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'contacto@issi.com.mx', '2025-05-10 18:51:12', '$2y$10$CeEwaHUPFXd9m7wItGrZO.kCiWYpvgyDYbA6MVnzXwO4wJRKZdbGa', 'zsjLtG1MEIJqNCUShw266MceSG8yfvuXTVTwwG0eq7cnDo2WFnMXz0pW6ULp', '2025-05-10 18:51:12', '2025-05-10 19:56:06');

SET FOREIGN_KEY_CHECKS = 1;
