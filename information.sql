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

 Date: 26/04/2021 22:12:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES (1, 'nombre', 'Nombre', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (2, 'telefono', 'Telefono', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (3, 'horario', 'Horario', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (4, 'email', 'Email', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (5, 'direccion', 'Direccion', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (6, 'municipio', 'Municipio', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (7, 'estado', 'Estado', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (8, 'no_whatsapp', 'no_whatsapp', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (9, 'facebook', 'Facebook', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (10, 'instagram', 'Instagram', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (11, 'descripcion_ubicacion', 'descripcion_ubicacion', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (12, 'informacion_footer', 'Informacion del Footer', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (13, 'mision', 'Esta es la misi[on de la empresa en la que laboramos', NULL, '2021-04-16 19:38:53');
INSERT INTO `information` VALUES (14, 'vision', 'Esta es la visi[on de la empresa', NULL, '2021-04-16 19:39:22');
INSERT INTO `information` VALUES (15, 'valores', '°Valores\r\n°valores 2\r\n°Valores 3\r\n°Valores 4', NULL, '2021-04-16 19:42:39');
INSERT INTO `information` VALUES (16, 'img_mision', '/mision_3JFzqe7c.jpg', NULL, '2021-04-16 19:38:53');
INSERT INTO `information` VALUES (17, 'img_vision', '/vision_OadpB6Ag.jpg', NULL, '2021-04-16 19:39:22');
INSERT INTO `information` VALUES (18, 'img_valores', '/valores_L0C82olT.png', NULL, '2021-04-16 19:42:39');
INSERT INTO `information` VALUES (19, 'telefono_oficina', 'Telefono de Oficina', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (20, 'welcome_title', 'Este es el titulo de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (21, 'welcome_description', 'estas es la descripci[on de bienvenida', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (22, 'img_welcome', '/welcome_LAe0lw6V.jpg', NULL, '2021-04-16 03:05:21');
INSERT INTO `information` VALUES (23, 'welcome_link', 'http://localhost/phpmyadmin/', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (24, 'welcome_boton', 'Conoce mas aqui', NULL, '2021-04-16 03:21:42');
INSERT INTO `information` VALUES (25, 'nosotros', 'Aqui mismo nos vamos a poner a escribir algo sobre nosotrs para poder hacer que nos conozcan un poco mas de lo que ya sabes de nosotros gracias', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (26, 'img_nosotros', '/nosotros_rmw6EbSW.jpg', NULL, '2021-04-16 03:42:07');
INSERT INTO `information` VALUES (27, 'img_asks', '/asks0xghP5Te.png', NULL, '2021-04-16 06:12:41');
INSERT INTO `information` VALUES (28, 'twitter', 'pagina de twiter', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (29, 'youtube', 'pagina de youtube', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (30, 'linkedin', 'pagina de linkedin', NULL, '2021-04-16 18:25:18');
INSERT INTO `information` VALUES (31, 'img_logo', '/logo_Bn7Hzoo1.png', NULL, '2021-04-16 18:25:18');

SET FOREIGN_KEY_CHECKS = 1;
