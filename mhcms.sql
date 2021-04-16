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

 Date: 16/04/2021 00:52:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for asks
-- ----------------------------
DROP TABLE IF EXISTS `asks`;
CREATE TABLE `asks`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of asks
-- ----------------------------
INSERT INTO `asks` VALUES (1, 'Esta es la primera pregunta', 'Esta es la respuesta de la primera pregunta y de muchas mas', NULL, '2021-04-16 05:31:20', '2021-04-16 05:31:20');
INSERT INTO `asks` VALUES (2, 'Pregunta frecuente numero 2', 'Esta es la respues de la pregunta frecuente numero 2', NULL, '2021-04-16 05:36:09', '2021-04-16 05:36:09');
INSERT INTO `asks` VALUES (3, 'Pregunta 3', 'Esta es la respues de la pregunta frecuente numero tres', NULL, '2021-04-16 05:36:35', '2021-04-16 05:36:35');

-- ----------------------------
-- Table structure for carousels
-- ----------------------------
DROP TABLE IF EXISTS `carousels`;
CREATE TABLE `carousels`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
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
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'categoria 1', 'Esta es la categoria 1', '/1_kFMWiaBF.jpg', '2021-04-16 04:38:20', '2021-04-16 04:38:20');
INSERT INTO `categories` VALUES (2, 'categoria 2', 'Esta es la descripci[on de la categoria 2', '/2_u1rd5sbz.jpg', '2021-04-16 04:40:32', '2021-04-16 04:40:32');
INSERT INTO `categories` VALUES (3, 'categoria 3', 'Descripci[on Categoria 3', '/3_Odftlh0v.png', '2021-04-16 04:41:24', '2021-04-16 04:41:24');
INSERT INTO `categories` VALUES (4, 'categoria 4', 'Descripcion de la Categoria 4', '/4_uUp2cZvS.png', '2021-04-16 04:54:20', '2021-04-16 04:54:20');
INSERT INTO `categories` VALUES (5, 'categoria 5', 'Descripcion de la categoria 5 ya son muchas', '/5_1rQs2M1j.jpg', '2021-04-16 04:54:47', '2021-04-16 04:54:47');

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
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1, 'nombre', 'Nombre', NULL, NULL);
INSERT INTO `information` VALUES (2, 'telefono', 'Telefono', NULL, NULL);
INSERT INTO `information` VALUES (3, 'horario', 'Horario', NULL, NULL);
INSERT INTO `information` VALUES (4, 'email', 'Email', NULL, NULL);
INSERT INTO `information` VALUES (5, 'direccion', 'Direccion', NULL, NULL);
INSERT INTO `information` VALUES (6, 'municipio', 'Municipio', NULL, NULL);
INSERT INTO `information` VALUES (7, 'estado', 'Estado', NULL, NULL);
INSERT INTO `information` VALUES (8, 'no_whatsapp', 'no_whatsapp', NULL, NULL);
INSERT INTO `information` VALUES (9, 'facebook', 'Facebook', NULL, NULL);
INSERT INTO `information` VALUES (10, 'instagram', 'Instagram', NULL, NULL);
INSERT INTO `information` VALUES (11, 'descripcion_empresa', 'Descripcion de la Empresa', NULL, NULL);
INSERT INTO `information` VALUES (12, 'informacion_footer', 'Informacion del Footer', NULL, NULL);
INSERT INTO `information` VALUES (13, 'mision', 'Mision', NULL, NULL);
INSERT INTO `information` VALUES (14, 'vision', 'Vision', NULL, NULL);
INSERT INTO `information` VALUES (15, 'valores', 'Valores', NULL, NULL);
INSERT INTO `information` VALUES (16, 'img_mision', 'Img Mision', NULL, NULL);
INSERT INTO `information` VALUES (17, 'img_vision', 'Img Vision', NULL, NULL);
INSERT INTO `information` VALUES (18, 'img_valores', 'Img Valores', NULL, NULL);
INSERT INTO `information` VALUES (19, 'telefono_oficina', 'Telefono de Oficina', NULL, NULL);
INSERT INTO `information` VALUES (20, 'welcome_title', 'Este es el titulo de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (21, 'welcome_description', 'estas es la descripci[on de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (22, 'img_welcome', '/welcome_LAe0lw6V.jpg', NULL, '2021-04-16 03:05:21');
INSERT INTO `information` VALUES (23, 'welcome_link', 'http://localhost/phpmyadmin/', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (24, 'welcome_boton', 'Conoce mas aqui', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (25, 'nosotros', 'Aqui mismo nos vamos a poner a escribir algo sobre nosotrs para poder hacer que nos conozcan un poco mas de lo que ya sabes de nosotros gracias', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (26, 'img_nosotros', '/nosotros_rmw6EbSW.jpg', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (27, 'img_asks', 'Esta imagen para las preguntas', NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of meters
-- ----------------------------
INSERT INTO `meters` VALUES (1, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 02:35:21', '2021-04-14 02:35:21');
INSERT INTO `meters` VALUES (2, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 03:12:43', '2021-04-14 03:12:43');
INSERT INTO `meters` VALUES (3, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 03:20:15', '2021-04-14 03:20:15');
INSERT INTO `meters` VALUES (4, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 03:21:07', '2021-04-14 03:21:07');
INSERT INTO `meters` VALUES (5, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:33:48', '2021-04-14 04:33:48');
INSERT INTO `meters` VALUES (6, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:36:06', '2021-04-14 04:36:06');
INSERT INTO `meters` VALUES (7, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:37:19', '2021-04-14 04:37:19');
INSERT INTO `meters` VALUES (8, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:43:27', '2021-04-14 04:43:27');
INSERT INTO `meters` VALUES (9, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:44:03', '2021-04-14 04:44:03');
INSERT INTO `meters` VALUES (10, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:44:12', '2021-04-14 04:44:12');
INSERT INTO `meters` VALUES (11, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:44:30', '2021-04-14 04:44:30');
INSERT INTO `meters` VALUES (12, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:48:24', '2021-04-14 04:48:24');
INSERT INTO `meters` VALUES (13, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:49:15', '2021-04-14 04:49:15');
INSERT INTO `meters` VALUES (14, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:52:52', '2021-04-14 04:52:52');
INSERT INTO `meters` VALUES (15, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 04:53:15', '2021-04-14 04:53:15');
INSERT INTO `meters` VALUES (16, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 05:09:28', '2021-04-14 05:09:28');
INSERT INTO `meters` VALUES (17, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 05:09:54', '2021-04-14 05:09:54');
INSERT INTO `meters` VALUES (18, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 05:10:00', '2021-04-14 05:10:00');
INSERT INTO `meters` VALUES (19, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 05:10:05', '2021-04-14 05:10:05');
INSERT INTO `meters` VALUES (20, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-14 05:10:30', '2021-04-14 05:10:30');
INSERT INTO `meters` VALUES (21, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:10:36', '2021-04-14 05:10:36');
INSERT INTO `meters` VALUES (22, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:10:55', '2021-04-14 05:10:55');
INSERT INTO `meters` VALUES (23, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:11:03', '2021-04-14 05:11:03');
INSERT INTO `meters` VALUES (24, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:11:07', '2021-04-14 05:11:07');
INSERT INTO `meters` VALUES (25, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:12:27', '2021-04-14 05:12:27');
INSERT INTO `meters` VALUES (26, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:12:52', '2021-04-14 05:12:52');
INSERT INTO `meters` VALUES (27, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-14 05:27:31', '2021-04-14 05:27:31');
INSERT INTO `meters` VALUES (28, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 02:06:10', '2021-04-16 02:06:10');
INSERT INTO `meters` VALUES (29, 'inicio', '0', '0', 'http://localhost:8000', '2021-04-16 02:12:34', '2021-04-16 02:12:34');
INSERT INTO `meters` VALUES (30, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:21:48', '2021-04-16 03:21:48');
INSERT INTO `meters` VALUES (31, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:36:07', '2021-04-16 03:36:07');
INSERT INTO `meters` VALUES (32, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:37:40', '2021-04-16 03:37:40');
INSERT INTO `meters` VALUES (33, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:41:39', '2021-04-16 03:41:39');
INSERT INTO `meters` VALUES (34, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:42:18', '2021-04-16 03:42:18');
INSERT INTO `meters` VALUES (35, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 03:44:01', '2021-04-16 03:44:01');
INSERT INTO `meters` VALUES (36, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:47:39', '2021-04-16 04:47:39');
INSERT INTO `meters` VALUES (37, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:48:24', '2021-04-16 04:48:24');
INSERT INTO `meters` VALUES (38, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:49:34', '2021-04-16 04:49:34');
INSERT INTO `meters` VALUES (39, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:50:04', '2021-04-16 04:50:04');
INSERT INTO `meters` VALUES (40, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:51:43', '2021-04-16 04:51:43');
INSERT INTO `meters` VALUES (41, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:52:26', '2021-04-16 04:52:26');
INSERT INTO `meters` VALUES (42, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:53:41', '2021-04-16 04:53:41');
INSERT INTO `meters` VALUES (43, 'inicio', '0', '0', 'http://127.0.0.1:8000', '2021-04-16 04:54:50', '2021-04-16 04:54:50');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `users` VALUES (1, 'Fredy', 'ing.lomeli@gmail.com', NULL, '$2y$10$8TeJpDwcfUDGEnHFKZ.BYuoFP.IZRUVpgqeMOHkosrR3N8JtnSIje', NULL, '2021-04-14 05:09:28', '2021-04-14 05:09:28');

SET FOREIGN_KEY_CHECKS = 1;
