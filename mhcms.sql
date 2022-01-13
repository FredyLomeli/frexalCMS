/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP local
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : mhcms

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 27/04/2021 16:47:42
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
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `video` tinyint(4) NOT NULL DEFAULT 0,
  `texto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of carousels
-- ----------------------------
INSERT INTO `carousels` VALUES (1, 'Titulos', 'Descripciones', 'https://www.youtube.com/watch?v=H4tBuQWucPc', 1, NULL, NULL, '2021-04-27 21:04:07', '2021-04-27 21:05:46');
INSERT INTO `carousels` VALUES (2, 'Titulo 2', 'Descripcion 2', '/2_eoYrSR7p.jpg', 0, 'Boton', 'Link', '2021-04-27 21:35:37', '2021-04-27 21:35:37');

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
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1, 'nombre', 'Mireya Hernandez', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (2, 'telefono', 'Telefono', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (3, 'horario', 'Horario', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (4, 'email', 'ventas@mhglobalbsupport.com', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (5, 'direccion', 'Direccion', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (6, 'municipio', 'Municipio', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (7, 'estado', 'Estado', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (8, 'no_whatsapp', 'no_whatsapp', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (9, 'facebook', 'https://es-la.facebook.com/', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (10, 'instagram', 'Instagram', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (11, 'descripcion_ubicacion', 'descripcion_ubicacion', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (12, 'informacion_footer', 'Informacion del Footer', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (13, 'mision', 'Esta es la misi[on de la empresa en la que laboramos', NULL, '2021-04-16 19:38:53');
INSERT INTO `information` VALUES (14, 'vision', 'Esta es la visi[on de la empresa', NULL, '2021-04-16 19:39:22');
INSERT INTO `information` VALUES (15, 'valores', '°Valores\r\n°valores 2\r\n°Valores 3\r\n°Valores 4', NULL, '2021-04-16 19:42:39');
INSERT INTO `information` VALUES (16, 'img_mision', '/mision_3JFzqe7c.jpg', NULL, '2021-04-16 19:38:53');
INSERT INTO `information` VALUES (17, 'img_vision', '/vision_OadpB6Ag.jpg', NULL, '2021-04-16 19:39:22');
INSERT INTO `information` VALUES (18, 'img_valores', '/valores_L0C82olT.png', NULL, '2021-04-16 19:42:39');
INSERT INTO `information` VALUES (19, 'telefono_oficina', 'Telefono de Oficina', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (20, 'welcome_title', 'Este es el titulo de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (21, 'welcome_description', 'estas es la descripci[on de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (22, 'img_welcome', '/welcome_LAe0lw6V.jpg', NULL, '2021-04-16 03:05:21');
INSERT INTO `information` VALUES (23, 'welcome_link', 'http://localhost/phpmyadmin/', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (24, 'welcome_boton', 'Conoce mas aqui', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (25, 'nosotros', 'Aqui mismo nos vamos a poner a escribir algo sobre nosotrs para poder hacer que nos conozcan un poco mas de lo que ya sabes de nosotros gracias', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (26, 'img_nosotros', '/nosotros_rmw6EbSW.jpg', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (27, 'img_asks', '/asks0xghP5Te.png', NULL, '2021-04-16 06:12:41');
INSERT INTO `information` VALUES (28, 'twitter', 'pagina de twiter', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (29, 'youtube', 'pagina de youtube', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (30, 'linkedin', 'pagina de linkedin', NULL, '2021-04-27 21:45:54');
INSERT INTO `information` VALUES (31, 'img_logo', '/logo_Bn7Hzoo1.png', NULL, '2021-04-16 18:25:18');

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
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of meters
-- ----------------------------
INSERT INTO `meters` VALUES (1, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 20:56:39', '2021-04-27 20:56:39');
INSERT INTO `meters` VALUES (2, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:03:38', '2021-04-27 21:03:38');
INSERT INTO `meters` VALUES (3, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:31:44', '2021-04-27 21:31:44');
INSERT INTO `meters` VALUES (4, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:32:11', '2021-04-27 21:32:11');
INSERT INTO `meters` VALUES (5, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:32:37', '2021-04-27 21:32:37');
INSERT INTO `meters` VALUES (6, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:33:01', '2021-04-27 21:33:01');
INSERT INTO `meters` VALUES (7, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:33:15', '2021-04-27 21:33:15');
INSERT INTO `meters` VALUES (8, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:34:29', '2021-04-27 21:34:29');
INSERT INTO `meters` VALUES (9, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:35:13', '2021-04-27 21:35:13');
INSERT INTO `meters` VALUES (10, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:35:40', '2021-04-27 21:35:40');
INSERT INTO `meters` VALUES (11, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:36:10', '2021-04-27 21:36:10');
INSERT INTO `meters` VALUES (12, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:36:16', '2021-04-27 21:36:16');
INSERT INTO `meters` VALUES (13, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:37:10', '2021-04-27 21:37:10');
INSERT INTO `meters` VALUES (14, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:37:12', '2021-04-27 21:37:12');
INSERT INTO `meters` VALUES (15, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:39:59', '2021-04-27 21:39:59');
INSERT INTO `meters` VALUES (16, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:46:24', '2021-04-27 21:46:24');
INSERT INTO `meters` VALUES (17, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-27 21:46:40', '2021-04-27 21:46:40');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `brief` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_post` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Fredy', 'ing.lomeli@gmail.com', NULL, '$2y$10$8TeJpDwcfUDGEnHFKZ.BYuoFP.IZRUVpgqeMOHkosrR3N8JtnSIje', NULL, '2021-04-14 05:09:28', '2021-04-14 05:09:28');
INSERT INTO `users` VALUES (2, 'Lucero', 'ventas@mhglobalbsupport.com', NULL, '$2y$10$kTqroC6IbY7Dl3ZN7ixRZ.ykhkXVaujKxuxpRlX35j8ZqyyRWFu6u', NULL, '2021-04-27 21:46:20', '2021-04-27 21:46:20');

SET FOREIGN_KEY_CHECKS = 1;
