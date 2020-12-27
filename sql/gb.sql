/*
 Navicat Premium Data Transfer

 Source Server         : Demo
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : 127.0.0.1:3306
 Source Schema         : gb

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 27/12/2020 21:54:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_quyen` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Email`) USING BTREE,
  INDEX `keyquyen`(`ID_quyen`) USING BTREE,
  INDEX `Email`(`Email`) USING BTREE,
  CONSTRAINT `keyquyen` FOREIGN KEY (`ID_quyen`) REFERENCES `quyen` (`ID_quyen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES ('admin', '26a91342190d515231d7238b0c5438e1', '1');
INSERT INTO `account` VALUES ('anhnt@gmail.com', 'a98f6f64e6cdfac22ab2ffd15a7241e3', '3');
INSERT INTO `account` VALUES ('binhdt@gmail.com', '', '3');
INSERT INTO `account` VALUES ('caonam123@gmail.com', 'f0c67f94e0713224da7fa4436b1b766a', '2');
INSERT INTO `account` VALUES ('chinnt@gmail.com', '', '3');
INSERT INTO `account` VALUES ('daipq@gmail.com', '', '3');
INSERT INTO `account` VALUES ('datcv@gmail.com', '', '3');
INSERT INTO `account` VALUES ('demo@demo', '', '3');
INSERT INTO `account` VALUES ('demo@gmail', '224cf2b695a5e8ecaecfb9015161fa4b', '2');
INSERT INTO `account` VALUES ('dohung@gmail.com', '', '3');
INSERT INTO `account` VALUES ('duccao@gmail.com', '', '3');
INSERT INTO `account` VALUES ('duclanguoi@gmail.com', '', '3');
INSERT INTO `account` VALUES ('haigiong@gmail.com', '', '3');
INSERT INTO `account` VALUES ('haosiro@gmail.com', '', '3');
INSERT INTO `account` VALUES ('huyk9@gmail.com', '', '3');
INSERT INTO `account` VALUES ('kienloli@gmail.com', '', '3');
INSERT INTO `account` VALUES ('kiensoi@gmail.com', '', '3');
INSERT INTO `account` VALUES ('leega@gmail.com', '', '3');
INSERT INTO `account` VALUES ('longcua2k@gmail.com', '08f90c1a417155361a5c4b8d297e0d78', '2');
INSERT INTO `account` VALUES ('longvip@gmail', '58a32317336d9787f887592fd66c91d3', '1');
INSERT INTO `account` VALUES ('maihuongtt@gmail.com', '', '3');
INSERT INTO `account` VALUES ('minh36@gmail.com', '', '3');
INSERT INTO `account` VALUES ('minhbavi@gmail.com', '', '3');
INSERT INTO `account` VALUES ('thangchohau@gmail.com', '', '3');
INSERT INTO `account` VALUES ('tiendatlh@gmail.com', '', '3');
INSERT INTO `account` VALUES ('toro@gmail.com', '', '3');
INSERT INTO `account` VALUES ('truongnt@gmail.com', 'a11434e3127e39d236685bebaea9d721', '2');
INSERT INTO `account` VALUES ('yoneyas@gmail.com', '', '3');
INSERT INTO `account` VALUES ('zinzin@gmail.com', '', '3');

-- ----------------------------
-- Table structure for chi tiet hoa don
-- ----------------------------
DROP TABLE IF EXISTS `chi tiet hoa don`;
CREATE TABLE `chi tiet hoa don`  (
  `ID_cthd` int(11) NOT NULL AUTO_INCREMENT,
  `MAHD` int(11) NOT NULL,
  `ID_sp` int(11) NOT NULL,
  `Don gia` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_cthd`) USING BTREE,
  INDEX `cthd_hd`(`MAHD`) USING BTREE,
  INDEX `cthd_sp`(`ID_sp`) USING BTREE,
  CONSTRAINT `cthd_hd` FOREIGN KEY (`MAHD`) REFERENCES `hoa don` (`MAHD`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `sthd` FOREIGN KEY (`ID_sp`) REFERENCES `san pham` (`ID_sp`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 90 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chi tiet hoa don
-- ----------------------------
INSERT INTO `chi tiet hoa don` VALUES (45, 36, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (46, 37, 42, '59.99');
INSERT INTO `chi tiet hoa don` VALUES (47, 38, 35, '24.99');
INSERT INTO `chi tiet hoa don` VALUES (48, 39, 38, '15.99');
INSERT INTO `chi tiet hoa don` VALUES (49, 40, 57, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (50, 41, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (51, 42, 41, '7.49');
INSERT INTO `chi tiet hoa don` VALUES (52, 43, 37, '39.99');
INSERT INTO `chi tiet hoa don` VALUES (53, 44, 41, '7.49');
INSERT INTO `chi tiet hoa don` VALUES (54, 45, 56, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (55, 46, 36, '25');
INSERT INTO `chi tiet hoa don` VALUES (56, 47, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (57, 48, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (58, 49, 45, '59.99');
INSERT INTO `chi tiet hoa don` VALUES (59, 50, 36, '25');
INSERT INTO `chi tiet hoa don` VALUES (60, 51, 46, '45.99');
INSERT INTO `chi tiet hoa don` VALUES (61, 52, 35, '24.99');
INSERT INTO `chi tiet hoa don` VALUES (62, 53, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (63, 54, 38, '15.99');
INSERT INTO `chi tiet hoa don` VALUES (64, 55, 40, '31.99');
INSERT INTO `chi tiet hoa don` VALUES (65, 56, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (66, 57, 57, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (67, 58, 56, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (68, 59, 55, '7.69');
INSERT INTO `chi tiet hoa don` VALUES (69, 60, 52, '12');
INSERT INTO `chi tiet hoa don` VALUES (70, 61, 53, '13.99');
INSERT INTO `chi tiet hoa don` VALUES (71, 62, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (72, 63, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (73, 64, 49, '24.99');
INSERT INTO `chi tiet hoa don` VALUES (74, 65, 37, '39.99');
INSERT INTO `chi tiet hoa don` VALUES (75, 66, 35, '24.99');
INSERT INTO `chi tiet hoa don` VALUES (76, 67, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (77, 68, 46, '45.99');
INSERT INTO `chi tiet hoa don` VALUES (78, 69, 55, '7.69');
INSERT INTO `chi tiet hoa don` VALUES (79, 70, 43, '34.77');
INSERT INTO `chi tiet hoa don` VALUES (80, 71, 47, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (81, 72, 56, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (82, 73, 52, '12');
INSERT INTO `chi tiet hoa don` VALUES (83, 74, 47, '29.99');
INSERT INTO `chi tiet hoa don` VALUES (84, 75, 44, '49.99');
INSERT INTO `chi tiet hoa don` VALUES (85, 76, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (86, 77, 39, '44.99');
INSERT INTO `chi tiet hoa don` VALUES (87, 78, 55, '7.69');
INSERT INTO `chi tiet hoa don` VALUES (88, 80, 33, '48.93');
INSERT INTO `chi tiet hoa don` VALUES (89, 81, 35, '24.99');

-- ----------------------------
-- Table structure for hoa don
-- ----------------------------
DROP TABLE IF EXISTS `hoa don`;
CREATE TABLE `hoa don`  (
  `MAHD` int(11) NOT NULL AUTO_INCREMENT,
  `MAKH` int(11) NOT NULL,
  `Ngay Mua` date NOT NULL,
  `Tong Tien` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ID_tinhtrang` int(11) NULL DEFAULT 1,
  PRIMARY KEY (`MAHD`) USING BTREE,
  INDEX `hd_kh`(`MAKH`) USING BTREE,
  INDEX `hd_ttt`(`ID_tinhtrang`) USING BTREE,
  CONSTRAINT `hd_kh` FOREIGN KEY (`MAKH`) REFERENCES `khach hang` (`MAKH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `hd_ttt` FOREIGN KEY (`ID_tinhtrang`) REFERENCES `tinh trang don hang` (`ID_tinhtrang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hoa don
-- ----------------------------
INSERT INTO `hoa don` VALUES (36, 30, '2020-12-23', '48.93', 2);
INSERT INTO `hoa don` VALUES (37, 30, '2020-12-23', '59.99', 2);
INSERT INTO `hoa don` VALUES (38, 31, '2020-12-21', '24.99', 2);
INSERT INTO `hoa don` VALUES (39, 36, '2020-12-15', '15.99', 3);
INSERT INTO `hoa don` VALUES (40, 32, '2020-12-16', '29.99', 2);
INSERT INTO `hoa don` VALUES (41, 54, '2020-11-23', '44.99', 2);
INSERT INTO `hoa don` VALUES (42, 35, '2020-11-15', '7.49', 2);
INSERT INTO `hoa don` VALUES (43, 30, '2020-11-20', '39.99', 2);
INSERT INTO `hoa don` VALUES (44, 38, '2020-11-19', '7.49', 2);
INSERT INTO `hoa don` VALUES (45, 54, '2020-11-21', '29.99', 2);
INSERT INTO `hoa don` VALUES (46, 36, '2020-12-17', '25', 2);
INSERT INTO `hoa don` VALUES (47, 36, '2020-12-21', '48.93', 3);
INSERT INTO `hoa don` VALUES (48, 37, '2020-12-19', '48.93', 2);
INSERT INTO `hoa don` VALUES (49, 30, '2020-11-23', '59.99', 3);
INSERT INTO `hoa don` VALUES (50, 30, '2020-10-23', '25', 3);
INSERT INTO `hoa don` VALUES (51, 30, '2020-10-22', '45.99', 2);
INSERT INTO `hoa don` VALUES (52, 31, '2020-10-14', '24.99', 2);
INSERT INTO `hoa don` VALUES (53, 32, '2020-10-17', '44.99', 2);
INSERT INTO `hoa don` VALUES (54, 33, '2020-10-01', '15.99', 2);
INSERT INTO `hoa don` VALUES (55, 34, '2020-10-05', '31.99', 2);
INSERT INTO `hoa don` VALUES (56, 35, '2020-10-09', '44.99', 3);
INSERT INTO `hoa don` VALUES (57, 54, '2021-01-10', '29.99', 2);
INSERT INTO `hoa don` VALUES (58, 53, '2021-01-20', '29.99', 2);
INSERT INTO `hoa don` VALUES (59, 52, '2021-01-15', '7.69', 2);
INSERT INTO `hoa don` VALUES (60, 53, '2021-01-14', '12', 2);
INSERT INTO `hoa don` VALUES (61, 30, '2021-01-01', '13.99', 3);
INSERT INTO `hoa don` VALUES (62, 52, '2021-01-23', '48.93', 2);
INSERT INTO `hoa don` VALUES (63, 50, '2021-01-20', '44.99', 2);
INSERT INTO `hoa don` VALUES (64, 51, '2021-01-04', '24.99', 2);
INSERT INTO `hoa don` VALUES (65, 39, '2020-12-15', '39.99', 2);
INSERT INTO `hoa don` VALUES (66, 40, '2021-02-28', '24.99', 2);
INSERT INTO `hoa don` VALUES (67, 43, '2021-02-17', '44.99', 2);
INSERT INTO `hoa don` VALUES (68, 45, '2021-02-16', '45.99', 2);
INSERT INTO `hoa don` VALUES (69, 46, '2021-02-16', '7.69', 2);
INSERT INTO `hoa don` VALUES (70, 47, '2021-02-17', '34.77', 2);
INSERT INTO `hoa don` VALUES (71, 49, '2021-02-05', '29.99', 2);
INSERT INTO `hoa don` VALUES (72, 37, '2021-02-01', '29.99', 2);
INSERT INTO `hoa don` VALUES (73, 30, '2021-02-09', '12', 2);
INSERT INTO `hoa don` VALUES (74, 31, '2021-02-10', '29.99', 2);
INSERT INTO `hoa don` VALUES (75, 50, '2021-02-10', '49.99', 2);
INSERT INTO `hoa don` VALUES (76, 30, '2021-02-10', '48.93', 3);
INSERT INTO `hoa don` VALUES (77, 34, '2021-02-10', '44.99', 3);
INSERT INTO `hoa don` VALUES (78, 30, '2021-02-10', '7.69', 2);
INSERT INTO `hoa don` VALUES (80, 30, '2020-12-26', '48.93', 3);
INSERT INTO `hoa don` VALUES (81, 32, '2020-12-27', '24.99', 2);

-- ----------------------------
-- Table structure for khach hang
-- ----------------------------
DROP TABLE IF EXISTS `khach hang`;
CREATE TABLE `khach hang`  (
  `MAKH` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Họ Tên` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`MAKH`) USING BTREE,
  INDEX `kh_acc`(`Email`) USING BTREE,
  CONSTRAINT `kh_acc` FOREIGN KEY (`Email`) REFERENCES `account` (`Email`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 56 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of khach hang
-- ----------------------------
INSERT INTO `khach hang` VALUES (30, 'yoneyas@gmail.com', 'Nguyễn Văn Cường');
INSERT INTO `khach hang` VALUES (31, 'anhnt@gmail.com', 'Trần Ngọc Ánh');
INSERT INTO `khach hang` VALUES (32, 'toro@gmail.com', 'Phạm Quang Ánh');
INSERT INTO `khach hang` VALUES (33, 'binhdt@gmail.com', 'Đỗ Triệu Bình');
INSERT INTO `khach hang` VALUES (34, 'chinnt@gmail.com', 'Nguyễn Thị Chinh');
INSERT INTO `khach hang` VALUES (35, 'daipq@gmail.com', 'Phạm Quảng Đại');
INSERT INTO `khach hang` VALUES (36, 'datcv@gmail.com', 'Chu Văn Đạt');
INSERT INTO `khach hang` VALUES (37, 'tiendatlh@gmail.com', 'Lê Hữu Tiến Đạt');
INSERT INTO `khach hang` VALUES (38, 'zinzin@gmail.com', 'Vi Trường Đông');
INSERT INTO `khach hang` VALUES (39, 'duccao@gmail.com', 'Cao Anh Đức');
INSERT INTO `khach hang` VALUES (40, 'duclanguoi@gmail.com', 'Nguyễn Tiến Đức');
INSERT INTO `khach hang` VALUES (42, 'haigiong@gmail.com', 'Đặng Văn Hải');
INSERT INTO `khach hang` VALUES (43, 'haosiro@gmail.com', 'Trần Văn Hào');
INSERT INTO `khach hang` VALUES (45, 'thangchohau@gmail.com', 'Phạm Đức Hậu');
INSERT INTO `khach hang` VALUES (46, 'leega@gmail.com', 'Nguyễn Huy Hiếu');
INSERT INTO `khach hang` VALUES (47, 'dohung@gmail.com', 'Đỗ Hùng');
INSERT INTO `khach hang` VALUES (49, 'maihuongtt@gmail.com', 'Trần Thị Mai Hương');
INSERT INTO `khach hang` VALUES (50, 'huyk9@gmail.com', 'Lê Huy Knight');
INSERT INTO `khach hang` VALUES (51, 'kienloli@gmail.com', 'Hoàng Trung Kiên');
INSERT INTO `khach hang` VALUES (52, 'kiensoi@gmail.com', 'Nguyễn Lưu Kiên');
INSERT INTO `khach hang` VALUES (53, 'minh36@gmail.com', 'Nguyễn Hoàng Minh');
INSERT INTO `khach hang` VALUES (54, 'minhbavi@gmail.com', 'Phùng Trần Đức Minh');

-- ----------------------------
-- Table structure for nhan vien
-- ----------------------------
DROP TABLE IF EXISTS `nhan vien`;
CREATE TABLE `nhan vien`  (
  `MANV` int(11) NOT NULL AUTO_INCREMENT,
  `Họ Tên` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`MANV`) USING BTREE,
  INDEX `nv_acc`(`Email`) USING BTREE,
  CONSTRAINT `nv_acc` FOREIGN KEY (`Email`) REFERENCES `account` (`Email`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nhan vien
-- ----------------------------
INSERT INTO `nhan vien` VALUES (22, 'Cao Hoài Nam', 'caonam123@gmail.com');
INSERT INTO `nhan vien` VALUES (23, 'Nguyễn Thế Trường Đần', 'truongnt@gmail.com');
INSERT INTO `nhan vien` VALUES (24, 'Nguyễn Đức Long', 'longcua2k@gmail.com');
INSERT INTO `nhan vien` VALUES (35, 'Đức Long', 'longvip@gmail');
INSERT INTO `nhan vien` VALUES (36, 'Nghị', 'demo@gmail');

-- ----------------------------
-- Table structure for quyen
-- ----------------------------
DROP TABLE IF EXISTS `quyen`;
CREATE TABLE `quyen`  (
  `ID_quyen` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Ten quyen` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_quyen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quyen
-- ----------------------------
INSERT INTO `quyen` VALUES ('1', 'Admin');
INSERT INTO `quyen` VALUES ('2', 'Nhân Viên');
INSERT INTO `quyen` VALUES ('3', 'Khách Hàng');

-- ----------------------------
-- Table structure for san pham
-- ----------------------------
DROP TABLE IF EXISTS `san pham`;
CREATE TABLE `san pham`  (
  `ID_sp` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `version` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float(10, 2) NOT NULL,
  `date release` date NOT NULL,
  `img_path` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID_sp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of san pham
-- ----------------------------
INSERT INTO `san pham` VALUES (33, 'Cyberpunk 2077', 'AAA', '1.05', 48.93, '2020-12-10', 'SP02.jpg');
INSERT INTO `san pham` VALUES (35, 'Haven', 'AAA', '1.55', 24.99, '2020-12-03', 'SP02.jpg');
INSERT INTO `san pham` VALUES (36, 'Immortals Fenyx Rising', 'AAA', '1.0.4', 25.00, '2020-12-03', 'SP02.jpg');
INSERT INTO `san pham` VALUES (37, 'Empire of Sin', 'AAA', '1.01', 39.99, '2020-12-02', 'SP02.jpg');
INSERT INTO `san pham` VALUES (38, 'Twin Mirror', 'AAA', '1.01', 15.99, '2020-12-01', 'SP02.jpg');
INSERT INTO `san pham` VALUES (39, 'Football Manager 2021', 'AAA', '21.2', 44.99, '2020-11-24', 'SP02.jpg');
INSERT INTO `san pham` VALUES (40, 'Handball 21', 'AAA', '1.6', 31.99, '2020-11-13', 'SP02.jpg');
INSERT INTO `san pham` VALUES (41, 'Godfall', 'AAA', '1.007', 7.49, '2020-11-13', 'SP02.jpg');
INSERT INTO `san pham` VALUES (42, 'Yakuza: like a dragon', 'AAA', '1.07', 59.99, '2020-11-11', 'SP02.jpg');
INSERT INTO `san pham` VALUES (43, 'XIII - Remake', 'AAA', '1.03', 34.77, '2020-11-10', 'SP02.jpg');
INSERT INTO `san pham` VALUES (44, 'Assassin Creed: Valhalla', 'AAA', '1.05', 49.99, '2020-11-10', 'SP02.jpg');
INSERT INTO `san pham` VALUES (45, 'DiRT 5', 'AAA', '2.00', 59.99, '2020-11-06', 'SP02.jpg');
INSERT INTO `san pham` VALUES (46, 'Watch Dogs: Legion', 'AAA', '2.30', 45.99, '2020-10-29', 'SP02.jpg');
INSERT INTO `san pham` VALUES (47, 'VALHALL', 'AAA', '1.1.0', 29.99, '2020-10-22', 'SP02.jpg');
INSERT INTO `san pham` VALUES (49, 'Amnesia: Rebirth', 'AAA', '0.4', 24.99, '2020-10-15', 'SP02.jpg');
INSERT INTO `san pham` VALUES (51, 'Airborne Kingdom', 'Indie', '1.09', 9.59, '2020-12-17', 'SP02.jpg');
INSERT INTO `san pham` VALUES (52, 'BOMJMAN', 'Indie', '1.75', 12.00, '2020-12-15', 'SP02.jpg');
INSERT INTO `san pham` VALUES (53, 'G.I. Joe: Operation Blackout', 'Indie', '1.1', 13.99, '2020-12-15', 'SP02.jpg');
INSERT INTO `san pham` VALUES (54, 'Sumerians', 'Indie', '1.27', 14.99, '2020-12-03', 'SP02.jpg');
INSERT INTO `san pham` VALUES (55, 'Startup Panic', 'Indie', '2.25', 7.69, '2020-12-03', 'SP02.jpg');
INSERT INTO `san pham` VALUES (56, 'Per Aspera', 'Indie', '1.0.5', 29.99, '2020-12-03', 'SP02.jpg');
INSERT INTO `san pham` VALUES (57, 'Chronos: Before the Ashes', 'Indie', '1.2.1', 29.99, '2020-12-01', 'SP02.jpg');
INSERT INTO `san pham` VALUES (58, 'Demo', 'AAA', '1.0', 20.00, '2020-12-29', 'SP02.jpg');

-- ----------------------------
-- Table structure for tinh trang don hang
-- ----------------------------
DROP TABLE IF EXISTS `tinh trang don hang`;
CREATE TABLE `tinh trang don hang`  (
  `ID_tinhtrang` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinhTrang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID_tinhtrang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tinh trang don hang
-- ----------------------------
INSERT INTO `tinh trang don hang` VALUES (1, 'Chưa xử lý');
INSERT INTO `tinh trang don hang` VALUES (2, 'Đã xử lý');
INSERT INTO `tinh trang don hang` VALUES (3, 'Hủy');

-- ----------------------------
-- View structure for chitiethd
-- ----------------------------
DROP VIEW IF EXISTS `chitiethd`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `chitiethd` AS SELECT `chi tiet hoa don`.MAHD, `hoa don`.MAKH, `chi tiet hoa don`.ID_sp, `san pham`.title
from `hoa don`, `san pham`, `chi tiet hoa don`
WHERE `hoa don`.MAHD = `chi tiet hoa don`.MAHD and `san pham`.ID_sp = `chi tiet hoa don`.ID_sp
GROUP BY `chi tiet hoa don`.MAHD, `chi tiet hoa don`.ID_sp, `hoa don`.MAKH ;

-- ----------------------------
-- View structure for spaaa
-- ----------------------------
DROP VIEW IF EXISTS `spaaa`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `spaaa` AS SELECT ID_sp,title,category,version,price ,DATE_FORMAT(`san pham`.`date release`,'%d/%m/%Y') as date,img_path from `san pham` WHERE category='AAA' ;

-- ----------------------------
-- View structure for spall
-- ----------------------------
DROP VIEW IF EXISTS `spall`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `spall` AS SELECT ID_sp,title,category,version,price ,DATE_FORMAT(`san pham`.`date release`,'%d/%m/%Y') as date,img_path from `san pham` ;

-- ----------------------------
-- View structure for spindie
-- ----------------------------
DROP VIEW IF EXISTS `spindie`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `spindie` AS SELECT ID_sp,title,category,version,price ,DATE_FORMAT(`san pham`.`date release`,'%d/%m/%Y') as date,img_path from `san pham`WHERE category='Indie' ;

-- ----------------------------
-- View structure for staffql
-- ----------------------------
DROP VIEW IF EXISTS `staffql`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `staffql` AS SELECT `nhan vien`.MANV , `nhan vien`.Email,`nhan vien`.`Họ Tên`,account.`Password`,account.ID_quyen  from `nhan vien`, account
WHERE `nhan vien`.Email = account.Email
-- GROUP BY `nhan vien`.Email ;

-- ----------------------------
-- View structure for userkhach
-- ----------------------------
DROP VIEW IF EXISTS `userkhach`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `userkhach` AS SELECT account.Email , `khach hang`.`Họ Tên`, quyen.`Ten quyen`
From account, `khach hang` , quyen
WHERE account.Email = `khach hang`.Email and account.ID_quyen = quyen.ID_quyen
GROUP BY account.Email ;

-- ----------------------------
-- View structure for usernv
-- ----------------------------
DROP VIEW IF EXISTS `usernv`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `usernv` AS SELECT account.Email , `nhan vien`.`Họ Tên`, quyen.`Ten quyen`
From account, `nhan vien` , quyen
WHERE account.Email = `nhan vien`.Email and account.ID_quyen = quyen.ID_quyen
GROUP BY account.Email ;

-- ----------------------------
-- View structure for vhoadon
-- ----------------------------
DROP VIEW IF EXISTS `vhoadon`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vhoadon` AS SELECT
`hoa don`.MAHD,
`khach hang`.`Họ Tên`,
DATE_FORMAT(`hoa don`.`Ngay Mua`, '%d/%m/%Y') AS Date,
`hoa don`.`Tong Tien`,
`tinh trang don hang`.TenTinhTrang
FROM
	`hoa don`,
	`khach hang` ,
	`tinh trang don hang`
WHERE
	`hoa don`.MAKH = `khach hang`.MAKH and
	`tinh trang don hang`.ID_tinhtrang = `hoa don`.ID_tinhtrang
GROUP BY
	`hoa don`.MAHD ;

-- ----------------------------
-- Procedure structure for chitiethd
-- ----------------------------
DROP PROCEDURE IF EXISTS `chitiethd`;
delimiter ;;
CREATE PROCEDURE `chitiethd`(IN `mahd` VARCHAR(15))
  NO SQL 
SELECT
		`chi tiet hoa don`.ID_sp AS 'ID Sản Phẩm', `san pham`.title AS 'Tên Sản Phẩm',`san pham`.price AS 'Đơn Giá',`tinh trang don hang`.TenTinhTrang AS 'Trạng Thái' 
	FROM
		`chi tiet hoa don`,
		`hoa don`,
		`san pham`,
		`tinh trang don hang` 
	WHERE
		`chi tiet hoa don`.MAHD = `hoa don`.MAHD 
		AND `chi tiet hoa don`.ID_sp = `san pham`.ID_sp 
		AND `tinh trang don hang`.ID_tinhtrang 
		AND `chi tiet hoa don`.ID_tinhtrang 
		AND `chi tiet hoa don`.MAHD = mahd
	GROUP BY
		`chi tiet hoa don`.ID_sp
;;
delimiter ;

-- ----------------------------
-- Procedure structure for cthdon2
-- ----------------------------
DROP PROCEDURE IF EXISTS `cthdon2`;
delimiter ;;
CREATE PROCEDURE `cthdon2`(IN `mahd` VARCHAR ( 15 ))
SELECT
		`chi tiet hoa don`.ID_sp AS 'ID Sản Phẩm', `san pham`.title AS 'Tên Sản Phẩm',`san pham`.price AS 'Đơn Giá',`tinh trang don hang`.TenTinhTrang AS 'Trạng Thái' 
	FROM
		`chi tiet hoa don`,
		`hoa don`,
		`san pham`,
		`tinh trang don hang` 
	WHERE
		`chi tiet hoa don`.MAHD = `hoa don`.MAHD 
		AND `chi tiet hoa don`.ID_sp = `san pham`.ID_sp 
		AND `tinh trang don hang`.ID_tinhtrang 
		AND `chi tiet hoa don`.ID_tinhtrang 
		AND `chi tiet hoa don`.MAHD = mahd
	GROUP BY
		`chi tiet hoa don`.ID_sp
;;
delimiter ;

-- ----------------------------
-- Procedure structure for xoanv
-- ----------------------------
DROP PROCEDURE IF EXISTS `xoanv`;
delimiter ;;
CREATE PROCEDURE `xoanv`(In `A` varchar(100))
BEGIN
DELETE from `nhan vien` WHERE `nhan vien`.Email = A ;
DELETE from account WHERE account.Email = A;
end
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
