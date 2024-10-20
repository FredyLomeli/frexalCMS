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

 Date: 10/10/2024 08:44:53
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
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1, 'nombre', 'ISSI Ingeniería en Sistemas de Seguridad Inteligente', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (2, 'nombre_corto', 'ISSI', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (3, 'telefono', '33 85 84 66 98', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (4, 'horario', '9am a 2pm y 4pm a 7pm', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (5, 'email', '00091819@red.unid.mx', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (6, 'direccion', 'Colon # 132,', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (7, 'municipio', 'Tepatilán', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (8, 'estado', NULL, '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (9, 'no_whatsapp', '3781272691', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (10, 'twitter', 'https://www.twitter.com/fredyLomeli', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (11, 'linkedin', 'https://www.inkedin.com/fredyLomeli', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (12, 'facebook', 'https://www.facebook.com/fredyLomeli', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (13, 'instagram', 'https://www.instagram.com/fredyLomeli', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (14, 'youtube', 'https://www.youtube.com/fredyLomeli', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (15, 'descripcion_ubicacion', 'https://maps.app.goo.gl/1gZHEcwhVom7ij4H8', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (16, 'informacion_footer1', 'Nos unimos a nuestro personal experto y ayudamos a que su mundo sea más seguro.', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (17, 'informacion_footer2', 'Nuestra historia comenzó hace un cuarto de siglo; Hoy en día, somos el líder mundial de la industria, con cientos de miles de guardias de seguridad en todos los continentes.', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (18, 'telefono_oficina', '378 148 33 92', '2024-10-09 18:56:38', '2024-10-09 20:13:18');
INSERT INTO `information` VALUES (19, 'img_logo', '/logo_a8VufXgU.png', '2024-10-09 18:56:38', '2024-10-09 19:24:27');

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
) ENGINE = InnoDB AUTO_INCREMENT = 45 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of meters
-- ----------------------------
INSERT INTO `meters` VALUES (1, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 18:56:43', '2024-10-09 18:56:43');
INSERT INTO `meters` VALUES (2, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:05:54', '2024-10-09 19:05:54');
INSERT INTO `meters` VALUES (3, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:06:48', '2024-10-09 19:06:48');
INSERT INTO `meters` VALUES (4, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:17:18', '2024-10-09 19:17:18');
INSERT INTO `meters` VALUES (5, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:17:19', '2024-10-09 19:17:19');
INSERT INTO `meters` VALUES (6, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:18:20', '2024-10-09 19:18:20');
INSERT INTO `meters` VALUES (7, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:24:39', '2024-10-09 19:24:39');
INSERT INTO `meters` VALUES (8, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:25:34', '2024-10-09 19:25:34');
INSERT INTO `meters` VALUES (9, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:26:33', '2024-10-09 19:26:33');
INSERT INTO `meters` VALUES (10, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:27:40', '2024-10-09 19:27:40');
INSERT INTO `meters` VALUES (11, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:30:39', '2024-10-09 19:30:39');
INSERT INTO `meters` VALUES (12, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:30:50', '2024-10-09 19:30:50');
INSERT INTO `meters` VALUES (13, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:33:37', '2024-10-09 19:33:37');
INSERT INTO `meters` VALUES (14, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:35:02', '2024-10-09 19:35:02');
INSERT INTO `meters` VALUES (15, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:35:40', '2024-10-09 19:35:40');
INSERT INTO `meters` VALUES (16, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:36:00', '2024-10-09 19:36:00');
INSERT INTO `meters` VALUES (17, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:38:04', '2024-10-09 19:38:04');
INSERT INTO `meters` VALUES (18, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:38:41', '2024-10-09 19:38:41');
INSERT INTO `meters` VALUES (19, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:38:46', '2024-10-09 19:38:46');
INSERT INTO `meters` VALUES (20, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:38:53', '2024-10-09 19:38:53');
INSERT INTO `meters` VALUES (21, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:39:46', '2024-10-09 19:39:46');
INSERT INTO `meters` VALUES (22, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:40:13', '2024-10-09 19:40:13');
INSERT INTO `meters` VALUES (23, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:40:19', '2024-10-09 19:40:19');
INSERT INTO `meters` VALUES (24, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:43:08', '2024-10-09 19:43:08');
INSERT INTO `meters` VALUES (25, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:54:30', '2024-10-09 19:54:30');
INSERT INTO `meters` VALUES (26, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:54:46', '2024-10-09 19:54:46');
INSERT INTO `meters` VALUES (27, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 19:59:48', '2024-10-09 19:59:48');
INSERT INTO `meters` VALUES (28, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:00:01', '2024-10-09 20:00:01');
INSERT INTO `meters` VALUES (29, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:00:35', '2024-10-09 20:00:35');
INSERT INTO `meters` VALUES (30, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:00:58', '2024-10-09 20:00:58');
INSERT INTO `meters` VALUES (31, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:01:10', '2024-10-09 20:01:10');
INSERT INTO `meters` VALUES (32, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:02:52', '2024-10-09 20:02:52');
INSERT INTO `meters` VALUES (33, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:03:18', '2024-10-09 20:03:18');
INSERT INTO `meters` VALUES (34, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:04:34', '2024-10-09 20:04:34');
INSERT INTO `meters` VALUES (35, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:06:53', '2024-10-09 20:06:53');
INSERT INTO `meters` VALUES (36, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:07:27', '2024-10-09 20:07:27');
INSERT INTO `meters` VALUES (37, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:08:01', '2024-10-09 20:08:01');
INSERT INTO `meters` VALUES (38, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:08:13', '2024-10-09 20:08:13');
INSERT INTO `meters` VALUES (39, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:08:51', '2024-10-09 20:08:51');
INSERT INTO `meters` VALUES (40, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:12:37', '2024-10-09 20:12:37');
INSERT INTO `meters` VALUES (41, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:12:50', '2024-10-09 20:12:50');
INSERT INTO `meters` VALUES (42, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:13:25', '2024-10-09 20:13:25');
INSERT INTO `meters` VALUES (43, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:15:29', '2024-10-09 20:15:29');
INSERT INTO `meters` VALUES (44, 'inicio', '0', '0', 'http://frexalcms.local', '2024-10-09 20:28:16', '2024-10-09 20:28:16');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
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
INSERT INTO `users` VALUES (1, 'Admin', 'ing.lomeli@gmail.com', '2024-10-09 18:56:38', '$2y$10$Lf.WEWLXrXxjeqUOTHBJS.Ss.6qpcIUce3CyWtDopjxMY9aOPZV1m', 'taAfRo9o1v', '2024-10-09 18:56:38', '2024-10-09 18:56:38');

SET FOREIGN_KEY_CHECKS = 1;
