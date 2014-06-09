/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.1.56-community : Database - nhlam1pn_dbsmart
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `MaAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `QuyenHan` int(1) DEFAULT NULL,
  `NgayTao` datetime NOT NULL,
  `NgayLoginGanNhat` datetime DEFAULT NULL,
  `NgaySuaGanNhat` datetime DEFAULT NULL,
  `Avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`MaAdmin`,`TenDangNhap`,`MatKhau`,`HoTen`,`Email`,`DienThoai`,`QuyenHan`,`NgayTao`,`NgayLoginGanNhat`,`NgaySuaGanNhat`,`Avatar`) values (2,'adminadmin','20eabe5d64b0e216796e834f52d61fd0b70332fc','Phạm Văn Hoàn','lienhe@lambienquangcaogiare.com.vn','0975926940',1,'2013-12-18 08:22:44','2014-05-20 14:51:39',NULL,'../../images/945160_1384005395165846_861854634_n_3_3.jpg'),(3,'phamkien','20eabe5d64b0e216796e834f52d61fd0b70332fc','Phạm Văn Kiên','kien.pv@lambienquangcaogiare.com.vn','0936383932',0,'2014-05-05 22:14:17','2014-05-06 20:44:44',NULL,'images/532971_334227873314079_1454461941_n.jpg');

/*Table structure for table `tbl_banner` */

DROP TABLE IF EXISTS `tbl_banner`;

CREATE TABLE `tbl_banner` (
  `MaBanner` int(11) NOT NULL AUTO_INCREMENT,
  `ChuThich` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Chú thích cho banner',
  `DuongDan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ViTri` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  PRIMARY KEY (`MaBanner`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_banner` */

insert  into `tbl_banner`(`MaBanner`,`ChuThich`,`DuongDan`,`ViTri`,`TrangThai`) values (3,'Banner 1','images_ads/bienchunoiopalu1.jpg',2,1),(4,'bien aluminium','images_ads/1368158656_bien-aluminum.jpg',2,1),(5,'bien chuc danh','images_ads/bien-quang-cao-11111017428.jpg',2,0),(6,'banner02','images_ads/1331779550_329429139_2-thiet-ke-thi-cong-bien-quang-cao-alumex-den-led-Hai-Duong.jpg',2,0),(7,'Logo','images_ads/546964_605990326121162_1496111181_n_3.jpg',1,1),(8,'CNC banner paper','images_ads/Laser cut paper.jpg',2,1),(9,'CNC banner paper02','images_ads/Laser cut paper_01.jpg',2,1);

/*Table structure for table `tbl_chitietdh` */

DROP TABLE IF EXISTS `tbl_chitietdh`;

CREATE TABLE `tbl_chitietdh` (
  `MaDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  PRIMARY KEY (`MaDH`,`MaSP`),
  KEY `FK_chitietdh_sanpham_MaSP` (`MaSP`),
  CONSTRAINT `FK_chitietdh_donhang_MaDH` FOREIGN KEY (`MaDH`) REFERENCES `tbl_donhang` (`MaDH`),
  CONSTRAINT `FK_chitietdh_sanpham_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `tbl_sanpham` (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_chitietdh` */

/*Table structure for table `tbl_donhang` */

DROP TABLE IF EXISTS `tbl_donhang`;

CREATE TABLE `tbl_donhang` (
  `MaDH` int(11) NOT NULL AUTO_INCREMENT,
  `MaTV` int(11) DEFAULT '0' COMMENT '0:Không phải là tv',
  `TenNguoiDat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDat` datetime NOT NULL,
  `EmailNguoiDat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `DiaChiNguoiDat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TenNguoiNhan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `EmailNguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChiNguoiNhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoaiNN` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `GhiChu` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ThanhToan` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Chưa; 1: Rồi',
  `DaXoa` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: Chưa; 1: Xóa',
  PRIMARY KEY (`MaDH`),
  KEY `FK_donhang_thanhvien_MaTV` (`MaTV`),
  CONSTRAINT `FK_donhang_thanhvien_MaTV` FOREIGN KEY (`MaTV`) REFERENCES `tbl_thanhvien` (`MaTV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_donhang` */

/*Table structure for table `tbl_gopy` */

DROP TABLE IF EXISTS `tbl_gopy`;

CREATE TABLE `tbl_gopy` (
  `MaGopY` int(11) NOT NULL AUTO_INCREMENT,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(15) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `NgayGopY` datetime NOT NULL,
  PRIMARY KEY (`MaGopY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_gopy` */

/*Table structure for table `tbl_hinhanh` */

DROP TABLE IF EXISTS `tbl_hinhanh`;

CREATE TABLE `tbl_hinhanh` (
  `MaSP` int(11) NOT NULL,
  `DuongDan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaSP`,`DuongDan`),
  CONSTRAINT `FK_hinhanh_sanpham_MaSP` FOREIGN KEY (`MaSP`) REFERENCES `tbl_sanpham` (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_hinhanh` */

insert  into `tbl_hinhanh`(`MaSP`,`DuongDan`) values (1,'images_products/pano3.jpg'),(2,'images_products/300_300_1336651134_hop den.jpg'),(3,'images_products/alumitrongnhaalcorest.jpg'),(4,'images_products/pano3_2.jpg'),(5,'images_products/300_300_1297400121_logo le tan.jpg'),(6,'images_products/7.jpg'),(7,'images_products/pano3_4.jpg');

/*Table structure for table `tbl_info` */

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `MaCT` int(11) NOT NULL AUTO_INCREMENT,
  `TenCT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoaiDD` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HotLine` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ThongTin` text COLLATE utf8_unicode_ci,
  `ViTri` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaCT`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_info` */

insert  into `tbl_info`(`MaCT`,`TenCT`,`DiaChi`,`DienThoaiDD`,`HotLine`,`Website`,`ThongTin`,`ViTri`) values (1,'Trung tâm thiết kế quảng cáo Smart','182 : Tôn Đức Thắng - Đống Đa - Hà Nội','04.2200.1555','0936 38 39 32','http://lambienquangcaogiare.com.vn - http://quangcaohn.divivu.com','<span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px; background-color: rgb(249, 249, 249);\">Trung tâm thiết kế quảng cáo Smart</span><br style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px; background-color: rgb(249, 249, 249);\">Địa chỉ : 182 : Tôn Đức Thắng - Đống Đa - Hà Nội</span><br style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px;\"><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 20px; background-color: rgb(249, 249, 249);\">Điện thoại : 04.2200.1555 - 0936 38 39 32</span>',3),(2,'Trung tâm thiết kế quảng cáo Smart','182 : Tôn Đức Thắng - Đống Đa - Hà Nội','04.2200.1555','0936 38 39 32','http://lambienquangcaogiare.com.vn - http://quangcaohn.divivu.com','Trung tâm thiết kế quảng cáo Smart<br>Địa chỉ : 182 : Tôn Đức Thắng - Đống Đa - Hà Nội<br>Điện thoại : 04.2200.1555 - 0936 38 39 32<br>',1);

/*Table structure for table `tbl_loaisp` */

DROP TABLE IF EXISTS `tbl_loaisp`;

CREATE TABLE `tbl_loaisp` (
  `MaLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MaCha` int(11) NOT NULL,
  PRIMARY KEY (`MaLoai`),
  UNIQUE KEY `MaLoai` (`MaLoai`),
  UNIQUE KEY `TenLoai` (`TenLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_loaisp` */

insert  into `tbl_loaisp`(`MaLoai`,`TenLoai`,`MaCha`) values (38,'Quảng cáo ngoài trời',0),(39,'Biển bạt Hiflex',0),(40,'Biển hộp đèn',0),(41,'Biển đơn không đèn',0),(42,'Mặt dựng Aluminium',0),(43,'Bảng màu Alu',0),(44,'Chữ nổi trên mọi chất liệu',0),(45,'Logo quầy lễ tân',0),(46,'Chữ nổi kết hợp ánh sáng',0),(47,'Biển công ty',0),(48,'Biển chức danh',0),(49,'Biển phòng ban',0),(50,'Biển hút nổi',0),(51,'Biển vẫy đèn led',0),(52,'Biển vẫy quảng cáo',0),(53,'Biển quảng cáo điện tử',0),(54,'Chữ nổi đèn LED',0),(55,'Chữ gắn LED đúc',0),(56,'Moc khóa Mica',0),(57,'Một số mẫu biển LED đẹp',0),(58,'Bảng huỳnh quang (Smart Board)',0);

/*Table structure for table `tbl_nhasx` */

DROP TABLE IF EXISTS `tbl_nhasx`;

CREATE TABLE `tbl_nhasx` (
  `MaNhaSX` int(11) NOT NULL AUTO_INCREMENT,
  `TenNhaSX` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaNhaSX`),
  UNIQUE KEY `TenNhaSX` (`TenNhaSX`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_nhasx` */

insert  into `tbl_nhasx`(`MaNhaSX`,`TenNhaSX`) values (14,'Decal lưới'),(13,'Decal sữa'),(15,'Decal trong'),(11,'Đề can'),(17,'Đồng'),(4,'Formex'),(18,'Giấy'),(1,'Gỗ dán chịu nước'),(7,'Gỗ dán phủ veneer, teak'),(9,'Gỗ dán thường'),(2,'Gỗ thịt ghép'),(16,'Inox'),(12,'Ke nhôm'),(10,'Mica'),(3,'Tấm ốp hợp kim Alcorest'),(6,'Tấm ốp hợp kim khác'),(5,'Tấm ốp hợp kim Vertu'),(8,'Tấm ốp hợp kim Victory'),(20,'Vật liệu khác'),(19,'Vật liệu tổng hợp');

/*Table structure for table `tbl_quangcao` */

DROP TABLE IF EXISTS `tbl_quangcao`;

CREATE TABLE `tbl_quangcao` (
  `MaQC` int(11) NOT NULL AUTO_INCREMENT,
  `TenQC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DuongDanAnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Đường dẫn tới trang web',
  `ViTri` tinyint(1) NOT NULL COMMENT 'trái-0, phải-1',
  `TrangThai` int(11) NOT NULL,
  PRIMARY KEY (`MaQC`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_quangcao` */

insert  into `tbl_quangcao`(`MaQC`,`TenQC`,`DuongDanAnh`,`Link`,`ViTri`,`TrangThai`) values (1,'Quảng cáo bên trái','images_ads/lef.png','http://quangcaohn.divivu.com/',5,1),(2,'Quảng cáo bên phải','images_ads/left_2.png','http://quangcaohn.divivu.com/',6,1),(3,'quang cao ben trai 02','images_ads/1336651134_hop den.jpg','http://lambienquangcaogiare.com.vn/',5,0),(4,'quang cao ben phai 02','images_ads/right-anh-2(1).gif','http://lambienquangcaogiare.com.vn/',6,0),(5,'Vi tri 1','images_ads/right-anh-2(1)_2.gif','http://lambienquangcaogiare.com.vn/',1,1);

/*Table structure for table `tbl_sanpham` */

DROP TABLE IF EXISTS `tbl_sanpham`;

CREATE TABLE `tbl_sanpham` (
  `MaSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `Gia` decimal(10,0) NOT NULL COMMENT 'Nếu đang KM thì đây là giá mới',
  `GiaCu` decimal(10,0) NOT NULL DEFAULT '0',
  `BaoHanh` int(2) NOT NULL,
  `SPMoi` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0: cũ, 1: mới',
  `KhuyenMai` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: không, 1: Đang KM',
  `MaLoai` int(11) NOT NULL,
  `MaNhaSX` int(11) DEFAULT NULL,
  `NgayThem` datetime NOT NULL,
  `NgaySua` datetime DEFAULT NULL,
  `LinkDowload` text COLLATE utf8_unicode_ci,
  `TrangThai` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaSP`),
  UNIQUE KEY `TenSP` (`TenSP`),
  KEY `FK_sanpham_nhasx_MaNhaSX` (`MaNhaSX`),
  KEY `FK_sanpham_loaisp_MaLoai` (`MaLoai`),
  CONSTRAINT `FK_sanpham_loaisp_MaLoai` FOREIGN KEY (`MaLoai`) REFERENCES `tbl_loaisp` (`MaLoai`),
  CONSTRAINT `FK_sanpham_nhasx_MaNhaSX` FOREIGN KEY (`MaNhaSX`) REFERENCES `tbl_nhasx` (`MaNhaSX`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_sanpham` */

insert  into `tbl_sanpham`(`MaSP`,`TenSP`,`MoTa`,`Gia`,`GiaCu`,`BaoHanh`,`SPMoi`,`KhuyenMai`,`MaLoai`,`MaNhaSX`,`NgayThem`,`NgaySua`,`LinkDowload`,`TrangThai`) values (1,'Biển Pano ,Biển Đơn','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: Arial, vernada, sans-serif; font-size: 13.333333969116211px; text-align: justify; background-color: rgb(255, 255, 255); width: 547.7777709960938px;\"><tbody><tr><td align=\"center\" width=\"29%\" style=\"font-size: 10pt;\"><img class=\"border_images\" src=\"http://quangcaomtk.com/images/product/1290263390_pano%201.jpg\" alt=\"\" style=\"border: 0px;\"></td><td valign=\"top\" width=\"71%\" height=\"35\" style=\"font-size: 10pt; padding-left: 10px;\"><strong>Biển pano, biển đơn.</strong><br><br><p><span style=\"font-size: small;\"><span style=\"line-height: 19.5px;\">Biển bạt hiflex (mặt&nbsp;<a title=\"bien quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">biển quảng cáo</a>&nbsp;bằng bạt hiflex), còn gọi là biển pano, pa nô, billboard.<br></span></span></p></td></tr><tr><td colspan=\"2\" style=\"font-size: 10pt; padding-top: 10px;\"><p>(<a title=\"cong ty quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">Trung tâm quảng cáo</a>&nbsp; Smart )</p><p><span style=\"font-size: small;\"><strong><span style=\"text-decoration: underline;\">Ưu điểm&nbsp;<a title=\"bien quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">biển quảng cáo</a>&nbsp;bằng bạt hiflex:</span></strong></span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Nhanh chóng. ( 2-3 ngày với biển &lt; 20m2 )</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Giá thành rẻ, thay thế sửa chữa dễ dàng.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Thể hiện được hình ảnh.</p><p><span style=\"font-size: small;\"><strong><span style=\"text-decoration: underline;\">Cấu tạo&nbsp;<a title=\"bien quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">biển quảng cáo</a>:</span></strong></span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Khung sắt hôp 20x20 (hoăc 25x25; 30x30), mặt bạt hiflex, gia cố bằng V3, ke góc...</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp; Thường sử dụng hệ thống đèn chiếu đi kèm.</p><p><em><span style=\"text-decoration: underline;\"><strong><span style=\"font-size: small;\"><span style=\"line-height: 19.5px;\">Một số ảnh&nbsp;<a title=\"bien quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">biển quảng cáo</a>&nbsp;pano (chất liệu bạt hiflex)</span></span></strong></span></em></p><p>&nbsp;&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano6.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"264\" height=\"220\" style=\"border: 0px;\">&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano5.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"264\" height=\"220\" style=\"border: 0px;\"></p><p>&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano4.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"198\" height=\"260\" style=\"border: 0px;\">&nbsp;&nbsp;&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano3.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"312\" height=\"260\" style=\"border: 0px;\"></p><p>&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano2.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"312\" height=\"260\" style=\"border: 0px;\">&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/pano1.jpg\" alt=\"Cong ty quang cao,bien quang cao,lam bien quang cao bat hiflex\" width=\"214\" height=\"260\" style=\"border: 0px;\"></p><p>&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/1.jpg\" alt=\"bien pano. bien quang cao, biển quảng cáo\" width=\"530\" height=\"201\" style=\"border: 0px;\"></p><p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/2.jpg\" alt=\"bien pano, bien bat hiflex, bien quang cao\" width=\"530\" height=\"196\" style=\"border: 0px;\"></p><p><span style=\"color: rgb(0, 0, 255);\"><em><strong>Trung tâm quảng cáo Smart</strong></em></span></p></td></tr></tbody></table>','130000','150000',6,0,1,39,20,'0000-00-00 00:00:00',NULL,'http://quangcaohn.divivu.com/San-pham/Bien-Bat-Hiflex-2542989.html',1),(2,'Biển hộp đèn, biển tam giác.','<div class=\"viewdetailpron\" style=\"padding-left: 25px; font-weight: bold; font-size: 9pt; background-image: url(http://quangcaohn.divivu.com/stores/skins/customize/themes/red/images/line_title_left.gif); float: left; background-position: 0% 50%; background-repeat: no-repeat no-repeat;\">CHI TIẾT SẢN PHẨM</div><div style=\"float: left; overflow: hidden; margin: 5px; text-align: justify;\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: Arial, vernada, sans-serif; font-size: 13.333333969116211px; background-color: rgb(255, 255, 255); width: 751.1111450195313px;\"><tbody><tr><td align=\"center\" width=\"29%\" style=\"font-size: 10pt;\">&nbsp;</td><td valign=\"top\" width=\"71%\" height=\"35\" style=\"font-size: 10pt;\"><strong>Biển hộp đèn, biển tam giác.</strong><br><br><p>Biển hộp đèn, biển tam giác là biển sử dụng hệ thống đèn neon (hoặc led) nằm trong biển để chiếu sáng cho biển.</p><p>Mặt biển thông thường dùng bạt hiflex, mica hoặc bạt phủ decal PP.</p></td></tr><tr><td colspan=\"2\" style=\"font-size: 10pt;\"><p>Nhìn trực diện, bảng biển hộp đèn giống như biển phẳng, thường được dùng tại các cửa hiệu, các đại lý bán hàng, nhất là các cửa hiệu mở cửa cả buổi tối.</p><p><span style=\"text-decoration: underline;\"><strong>Cấu tạo:&nbsp;&nbsp;</strong></span></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Khung biển bằng sắt hộp, hàn kết cấu thành hộp rỗng có bề dày trung bình 13cm. (có thể mỏng hoặc dầy hơn tùy yêu cầu)<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Đáy biển lót tôn (hoặc bọc bạt, mica như mặt trước với biển 2 mặt), xung quang bọc tôn hoặc nhôm, inox tùy yêu cầu.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + Hệ thống đèn neon được lắp đặt giữa khung sắt.</p><p>&nbsp;&nbsp;&nbsp;</p><p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Biển vẫy hộp đèn bạt hiflex</em></p><p>&nbsp;&nbsp;&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><em>&nbsp;Biển tam giác&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Biển hộp đèn bọc nhôm</em></strong></p><p>&nbsp;</p><p><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Biển hộp đèn mica, chữ nổi</em></p><p><strong><span style=\"text-decoration: underline;\">Các loại biển hộp đèn thông dụng:</span></strong></p><p><strong>1. Biển hộp đèn mặt in bạt viền tôn</strong>: Chi phí thấp.</p><p><strong>2. Biển hộp đèn mặt in bạt viền nhôm</strong>: Là hình thức thông dụng hiện nay, viền bằng nhôm định hình hoặc nhôm Alumi các mầu. Độ thẩm mỹ và độ bền cao.</p><p><strong>3. Biển hộp đèn mặt bạt trắng dán decal PP viền nhôm</strong>: Biển có độ bóng đẹp rất cao, thích hợp làm trong các nhà hàng, siêu thị, trung tâm thương mại.</p><p><em><strong>* Sản phẩm đặc biệt:&nbsp;</strong></em><a href=\"http://quangcaomtk.com/chi-tiet-san-pham/bie%CC%89n-ho%CC%A3p-de%CC%80n-sieu-mo%CC%89ng/611/730.html\" style=\"font-size: 10pt; text-decoration: none; color: black;\"><em><strong>BIỂN&nbsp;HỘP&nbsp;ĐÈN&nbsp;SIÊU&nbsp;MỎNG<br></strong></em></a></p><p><strong><span lang=\"vi\">Đặc điểm nổi trội:</span></strong></p><div style=\"float: left;\"><span lang=\"vi\">- Siêu mỏng 8-25mm.</span><span lang=\"vi\">&nbsp;Dễ dàng lắp đặt và thay hình ảnh.</span></div><div style=\"float: left;\"><span lang=\"vi\">- Nguồn sáng LED Siêu bền, Siêu tiết kiệm điện.</span></div><div style=\"float: left;\"><span lang=\"vi\">-&nbsp;</span><span lang=\"vi\">Sử dụng rộng dãi tại: Nhà hàng, Khách sạn, Ngân hàng, Siêu thị, Sân bay…</span></div><div style=\"float: left;\"><span lang=\"vi\">- Kích thước phù hợp có sẵn hoặc&nbsp;theo yêu cầu của khách hàng.</span></div><div style=\"float: left;\"><strong><span lang=\"vi\">Biển hộp đèn siêu mỏng của công ty quảng cáo Mai Tùng Khánh có 2 loại: Khung nhôm và Khung kính.</span></strong></div><p>&nbsp;&nbsp;</p><p>&nbsp;&nbsp;</p><p>&nbsp;&nbsp;</p><p>&nbsp;</p><table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" style=\"width: 500px;\"><colgroup><col width=\"35\"><col width=\"123\"><col width=\"149\"><col width=\"76\"><col width=\"65\"></colgroup><tbody><tr><td class=\"xl66\" colspan=\"5\" width=\"448\" height=\"28\" style=\"font-size: 10pt;\"><strong>Một số kích thước thông dụng biển hộp đèn siêu mỏng khung nhôm</strong></td></tr><tr><td class=\"xl65\" width=\"35\" height=\"42\" style=\"font-size: 10pt;\">STT</td><td class=\"xl65\" width=\"123\" style=\"font-size: 10pt;\">Kích thước biển dài*cao*dầy(mm)</td><td class=\"xl65\" width=\"149\" style=\"font-size: 10pt;\">Kích thước hiển thị dài*cao(mm)</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">Trọng lượng (Kg)</td><td class=\"xl65\" width=\"65\" style=\"font-size: 10pt;\">Tuổi thọ đèn (h)</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">1</td><td class=\"xl67\" style=\"font-size: 10pt;\">658*485*28</td><td class=\"xl67\" style=\"font-size: 10pt;\">588*415</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">5</td><td class=\"xl68\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">2</td><td class=\"xl67\" style=\"font-size: 10pt;\">685*517*28</td><td class=\"xl67\" style=\"font-size: 10pt;\">573*405</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">8</td><td class=\"xl68\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">3</td><td class=\"xl67\" style=\"font-size: 10pt;\">905*659*28</td><td class=\"xl67\" style=\"font-size: 10pt;\">835*589</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">9</td><td class=\"xl68\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">4</td><td class=\"xl67\" style=\"font-size: 10pt;\">1284*942*28</td><td class=\"xl67\" style=\"font-size: 10pt;\">1168*826</td><td class=\"xl67\" style=\"font-size: 10pt;\">22.5</td><td class=\"xl68\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">5</td><td class=\"xl67\" style=\"font-size: 10pt;\">1547*1127*42</td><td class=\"xl67\" style=\"font-size: 10pt;\">1435*1015</td><td class=\"xl67\" style=\"font-size: 10pt;\">32</td><td class=\"xl68\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr></tbody></table><p>&nbsp;</p><table border=\"1\" cellspacing=\"0\" cellpadding=\"0\" style=\"width: 500px;\"><colgroup><col width=\"35\"><col width=\"123\"><col width=\"149\"><col width=\"76\"><col width=\"65\"></colgroup><tbody><tr><td class=\"xl66\" colspan=\"5\" width=\"448\" height=\"21\" style=\"font-size: 10pt;\"><strong>Một số kích thước thông dụng biển hộp đèn siêu mỏng khung kính</strong></td></tr><tr><td class=\"xl65\" width=\"35\" height=\"42\" style=\"font-size: 10pt;\">STT</td><td class=\"xl65\" width=\"123\" style=\"font-size: 10pt;\">Kích thước biển dài*cao (mm)</td><td class=\"xl65\" width=\"149\" style=\"font-size: 10pt;\">Kích thước hiển thị dài*cao(mm)</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">Trọng lượng (Kg)</td><td class=\"xl65\" width=\"65\" style=\"font-size: 10pt;\">Tuổi thọ đèn (h)</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">1</td><td class=\"xl68\" style=\"font-size: 10pt;\">290×378</td><td class=\"xl68\" style=\"font-size: 10pt;\"><p>200×289</p></td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">2.5</td><td class=\"xl67\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">2</td><td class=\"xl68\" style=\"font-size: 10pt;\">405×528</td><td class=\"xl68\" style=\"font-size: 10pt;\">287×410</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">3</td><td class=\"xl67\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">3</td><td class=\"xl68\" style=\"font-size: 10pt;\">532×706</td><td class=\"xl68\" style=\"font-size: 10pt;\">406×580</td><td class=\"xl65\" width=\"76\" style=\"font-size: 10pt;\">3.8</td><td class=\"xl67\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr><tr><td class=\"xl65\" width=\"35\" height=\"21\" style=\"font-size: 10pt;\">4</td><td class=\"xl68\" style=\"font-size: 10pt;\">712×959</td><td class=\"xl68\" style=\"font-size: 10pt;\">578×825</td><td class=\"xl68\" style=\"font-size: 10pt;\">5.8</td><td class=\"xl67\" width=\"65\" style=\"font-size: 10pt;\">&nbsp;&nbsp; 10,000</td></tr></tbody></table><p><em><strong><br></strong></em></p></td></tr></tbody></table></div>','130000','150000',6,0,1,40,20,'0000-00-00 00:00:00',NULL,'http://quangcaohn.divivu.com/San-pham/2543051/258075/Bien-hop-den-bien-tam-giac.html',1),(3,'Bảng màu Aluminium','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"font-family: Arial, vernada, sans-serif; font-size: 13.333333969116211px; text-align: justify; background-color: rgb(255, 255, 255); width: 710px;\"><tbody><tr><td align=\"center\" width=\"29%\" style=\"font-size: 10pt;\"><img class=\"border_images\" src=\"http://quangcaomtk.com/images/product/1290273422_bang%20mau%20alumi.jpg\" alt=\"\" width=\"150px\" style=\"border: 0px;\"></td><td valign=\"top\" width=\"71%\" height=\"35\" style=\"font-size: 10pt; padding-left: 10px;\"><strong>Bảng màu aluminium</strong><br><br><p><span style=\"font-size: small;\">Quý khách hàng có nhu cầu&nbsp;<a title=\"lam bien quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">làm biển quảng cáo</a>&nbsp;ốp alumi chữ nổi, có thể căn cứ bảng màu alumi dưới đây để lựa chọn</span><span style=\"font-size: small;\">, hoặc liên hệ trực tiếp về&nbsp;<a title=\"cong ty quang cao\" href=\"http://quangcaomtk.com/\" style=\"font-size: 10pt; text-decoration: none; color: black;\">công ty quảng cáo</a>&nbsp;Mai Tùng Khánh. Chúng tôi sẽ có nhân viên trực tiếp mang mẫu mã, tư vấn về giá cả và chất liệu phù hợp cho quý khách hàng.&nbsp;</span></p></td></tr><tr><td colspan=\"2\" style=\"font-size: 10pt; padding-top: 10px;\"><p><span style=\"text-decoration: underline;\"><strong>MẪU&nbsp;MÀU&nbsp;ALUMI THÔNG&nbsp;DỤNG&nbsp;<br></strong></span></p><p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/alumitrongnhaalcorest.jpg\" alt=\"Cong ty quang cao,lam bien quang cao, bien quang cao\" width=\"703\" height=\"584\" style=\"border: 0px;\"></p><p>&nbsp;</p><p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/alumitrongnhatrieuchen.jpg\" alt=\"Cong ty quang cao,lam bien quang cao, bien quang cao\" width=\"704\" height=\"585\" style=\"border: 0px;\"></p><p>&nbsp;</p><p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/alumingoaitroi.jpg\" alt=\"Cong ty quang cao,lam bien quang cao,bien quang cao, bang mau alumi\" width=\"707\" height=\"588\" style=\"border: 0px;\"></p><p>&nbsp;</p><p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/alumidacbiet.jpg\" alt=\"Cong ty quang cao,lam bien quang cao, bien quang cao, bang mau alumi\" width=\"711\" height=\"746\" style=\"border: 0px;\"></p></td></tr></tbody></table>','130000','150000',6,0,1,43,20,'0000-00-00 00:00:00',NULL,'http://quangcaohn.divivu.com/San-pham/2566964/258084/Bang-mau-Aluminium.html',1),(4,'Chữ nổi trên mọi chất liệu','<div style=\"overflow:hidden; margin: 5px; text-align: justify;\"> <p><strong>Biển quảng cáo chữ nổi , chữ 3D (Mica, đồng, inox, tôn...). </strong><br><br></p>\r\n<p><span style=\"line-height: 150%;\"><span style=\"font-size: small;\">Chữ \r\nnổi hay còn gọi là chữ 3D, chất liệu mica, đồng, inox...được cắt bằng \r\ncông nghệ CNC và laser, thường gắn liền với hình thức biển bảng quảng \r\ncáo ốp alumi. <br> </span></span></p>\r\n<p>Đây là hình thức biển quảng cáo thông dụng, thường được kết hợp với biển ốp alumi hoặc làm logo, slogan….<br> <br>\r\n Chất liệu chủ yếu là mica, inox, đồng, foocmech, gỗ…, có thể kết hợp \r\nvới công nghệ đèn led, neonsign tạo sự nổi bật khi trời tối.<br> <br> Hiện nay Mai Tùng Khánh sử dụng công nghệ laser, cnc trong việc gia công chữ, tạo độ chính xác cao, sắc nét.&nbsp;</p>\r\n<p>&nbsp;<strong><span style=\"line-height: 150%;\">+ Chữ nổi chất liệu mica:</span></strong></p>\r\n<p><span style=\"font-size: small;\"><span style=\"line-height: 150%;\">Đây \r\nlà vật liệu phổ biến nhất trong chữ nổi, do có nhiều màu sắc, dễ gia \r\ncông, giá thành thấp. Thường được dùng trên các biển alumi ngoài trời \r\n(theo thống kê các khác hàng của Smart&nbsp; Adv , 60% khách hàng sử dụng \r\nhình thức này khi làm chữ, logo nổi, với chữ trên biển hiệu alumi ngoài \r\ntrời số khách hàng lựa chọn vật liệu này là 80%).</span></span></p>\r\n<p><span style=\"line-height: 150%;\"><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/chunoimica.jpg\" alt=\"\"><br> </span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"line-height: 150%;\">+ Chữ nổi chất liệu tôn, alumi.</span></strong></p>\r\n<p>&nbsp;<strong><span style=\"font-size: small;\"><span style=\"line-height: 150%;\">Đặc điểm:</span></span></strong><span style=\"font-size: small;\"><span style=\"line-height: 150%;\">\r\n độ cứng cao, ít ảnh hưởng bởi thay nhiệt độ môi trường nên tôn và alumi\r\n thường được sử dụng cho các bộ chữ nổi có kích thước lớn (cao trên \r\n100cm) đặt trên các đỉnh tòa nhà cao tầng.<br> <br> Do thường lắp đặt vị trí cao nên chữ thường được kết hợp với đèn neonsign tạo hiệu quả chiếu sáng khi trời tối.</span></span></p>\r\n<p><span style=\"line-height: 150%;\"><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/chunoiton.jpg\" alt=\"\"><br> </span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"line-height: 150%;\">+Chữ nổi chất liệu inox, đồng: <br> </span></strong></p>\r\n<p>&nbsp;<span style=\"font-size: small;\"><span style=\"line-height: 150%;\">Đây là hình thức phổ biển khi làm chữ nổi trong nhà (lễ tân, văn phòng..).</span></span></p>\r\n<p><strong><span style=\"font-size: small;\"><span style=\"line-height: 150%;\">Đặc điểm</span></span></strong><span style=\"font-size: small;\"><span style=\"line-height: 150%;\">:\r\n bề mặt sang trong, bóng đẹp, đẳng cấp. Giá thành cao hơn hẳn các loại \r\nchất liệu khác, do độ cứng cao, hay làm trong nhà nên thường kết hợp với\r\n hệ thống đèn chiếu sáng.</span></span></p>\r\n<h3><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/chunoiinox.jpg\" alt=\"\"></h3>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/21-11/chunoidong.jpg\" alt=\"\"></p></div>\r\n    \r\n\r\n','130000','150000',12,0,0,45,20,'0000-00-00 00:00:00','2014-05-19 09:47:46','quangcaohn.divivu.com/San-pham/2566965/258088/Chu-noi-tren-moi-chat-lieu.html?',1),(5,'Logo quầy lễ tân','<table style=\"width: 100%;\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr><td align=\"center\" width=\"29%\"><img class=\"border_images\" src=\"http://quangcaomtk.com/images/product/1297400121_logo%20le%20tan.jpg\" alt=\"\" width=\"150px\"></td>\r\n<td style=\"padding-left: 10px;\" height=\"35\" valign=\"top\" width=\"71%\"><strong>Logo quầy lễ tân</strong><br><br>\r\n<p>Đây là hình thức biển được hầu hết các công ty sử dụng, nội dug \r\nthường thể hiện logo, tên công ty, câu slogan, khẩu hiệu và được lắp đặt\r\n tại vị trí tiếp khách (lễ tân, phòng khách) hoặc phòng làm việc chung.</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"padding-top: 10px;\" colspan=\"2\">\r\n<p>Biển logo của công ty quảng cáo Mai Tùng Khánh được làm bằng công nghệ CNC, Laser, ép nhiệt để đảm bảo độ sắc nét cao, bóng đẹp.</p>\r\n<p>&nbsp;- Chất liệu :</p>\r\n<p>&nbsp;* Nền: Logo thường được gắn trực tiếp vào tường, ngoài ra có thể làm\r\n nền bằng Allumi hoặc bằng kính, mica để có hiệu ứng mầu sắc, ánh sáng \r\nđặc biệt.</p>\r\n<p>&nbsp;* Nội dung: Thường bằng inox, đồng hoặ mica, là những vật liệu có độ\r\n bóng đẹp cao, sang&nbsp; trong.Với một số trường hợp có thể sử dụng Alumi \r\nhoặ decal, phun sơn để thể hiện một số màu sắc đặc biệt, không có sẵn.</p>\r\n<p>&nbsp;* Chiếu sáng.Thường sử dụng đèn chiếu sáng bên ngoài, hoặc đèn neonsign, đèn led bên trong.</p>\r\n<p><em><strong>- Một số mẫu biển logo trong nhà</strong></em></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo00.jpg\" alt=\"\" height=\"199\" width=\"260\"> &nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo01.jpg\" alt=\"\" height=\"195\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu đồng&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica nền alumi</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo02.jpg\" alt=\"\" height=\"195\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo03.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica phun sơn nền alumi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica phun sơn nền alumi&nbsp;</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo04.jpg\" alt=\"\" width=\"260\">&nbsp;&nbsp;&nbsp;<img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo05.jpg\" alt=\"\" width=\"260\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica phun sơn nền alumi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica (hoặc alumi)</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo06.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo07.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Logo chất liệu mica(alumi, gỗ)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica phun sơn nền alumi</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo08.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo09.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica(alumi, gỗ)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu inox (alumi giả inox)</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo10.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo11.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu kính dán decal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica(alumi, gỗ) phun sơn</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo12.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo13.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo14.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo15.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu đồng, inox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo16.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo17.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica(aumi, gỗ)</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo18.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo19.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu kính dán chữ inox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica (đồng, inox)</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo20.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo21.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu inox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo22.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo23.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo24.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo25.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu đồng, inox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu inox</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo26.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo27.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu inox</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo28.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo29.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu kính dán decal</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo30.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo31.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu inox&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica, inox</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo33.jpg\" alt=\"\" width=\"260\">&nbsp; <img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo34.jpg\" alt=\"\" width=\"260\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu kính dán decaal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu mica</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/logo%20trong%20nha/logo32.jpg\" alt=\"\" height=\"401\" width=\"300\"></p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Logo chất liệu kính dán decal</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n    \r\n\r\n','130000','150000',12,0,1,45,19,'0000-00-00 00:00:00',NULL,'http://quangcaohn.divivu.com/San-pham/2566966/258091/Logo-quay-le-tan.html',1),(6,'Hình thức chiếu sáng kết hợp với chữ Nổi','<span style=\"text-decoration: underline;\"><strong></strong></span>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/2.jpg\" alt=\"\" height=\"517\" width=\"600\"></p>\r\n<p>- Ưu điểm của hình thức này là tạo một khu vực sáng rộng với độ chiếu sáng cao, rõ, tuy nhiên độ thu hút, nổi bật kém.</p>\r\n<p>- Thường được sử dụng cho các biển có diện tích lớn và thường kết hợp\r\n cùng các phương thức chiếu sáng chữ nổi khác nhằm tăng hiệu quả thu hút\r\n quảng cáo.</p>\r\n<p><span style=\"text-decoration: underline;\"><strong>2. Chiếu sáng biển chữ nổi bằng phương án cắm đèn LED trực tiếp trên bề mặt.</strong></span></p>\r\n<p>- Đây là phương án chiếu sáng cho biển quảng cáo chữ nổi phổ biến nhất hiện nay, đặc biệt là biển quảng cáo chữ nổi ngoài trời.</p>\r\n<p>- Ưu điểm của hình thức này là độ nổi bật rất cao, thể hiện nhiều màu sắc, hiệu ứng theo ý khách hàng.</p>\r\n<p>(Tìm hiểu ký hơn về công nghệ chiếu sáng bằng đèn LED trong mục: <a href=\"http://quangcaomtk.com/chi-tiet-san-pham/chu-noi-den-led/620/770.html\"><span style=\"color: #0000ff;\"><strong><em><span style=\"text-decoration: underline;\">Chữ nổi đèn LED</span></em></strong></span></a>)</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/4.jpg\" alt=\"bien quang cao, biển quảng cáo, chữ nổi đèn LED\" width=\"600\"></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/5.jpg\" alt=\"bien quang cao, biển quảng cáo, chữ noỏi đèn led\" width=\"600\"></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/6.jpg\" alt=\"\" width=\"600\"></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/61.jpg\" alt=\"\" width=\"600\"></p>\r\n<p><span style=\"text-decoration: underline;\"><strong>3. Chữ khoét chìm, ánh sáng từ trong biển</strong></span></p>\r\n<p>- Đây là hình thức biển quảng cáo chữ nổi được ngân hàng Maritime \r\nBank và nhiều công ty lựa chọn làm hình thức biển quảng cáo cho hệ thống\r\n chi nhánh, thương hiệu của mình.</p>\r\n<p>- Phần nền biển được khoét bằng công nghệ CNC&nbsp;theo hình logo, chữ \r\nnổi, phía trong dán mica và dùng đèn neon. Phía ngoài có thể dán mica, \r\ndecal hoặc để trống.</p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/3.jpg\" alt=\"\" width=\"600\"></p>\r\n<p><span style=\"text-decoration: underline;\"><strong>4. Biển quảng cáo chữ nổi ánh sáng hắt chân</strong></span></p>\r\n<p>- Đèn chiếu sáng được lắp phía trong chữ, với các biển quảng cáo chữ \r\nnổi ngoài trời, chữ thương được gắn cách nền biển một khoảng để ánh sáng\r\n phát ra. Còn các biển chữ nổi trong nhà, chữ thường được gắn sát biển \r\nkết hợp chân bằng mica trong hoặc trắng 10mm để tạo ánh sáng dịu và sang\r\n trọng.</p>\r\n<p><span style=\"text-decoration: underline;\"><em>Biển chữ nổi hắt chân ngoài trời</em></span></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/7.jpg\" alt=\"\" height=\"277\" width=\"600\"></p>\r\n<p><span style=\"text-decoration: underline;\"><em>Biển chữ nổi hắt chân trong nhà</em></span></p>\r\n<p><img src=\"http://i1235.photobucket.com/albums/ff437/maikhanh220306/chieu%20sang%20chu%20noi/8.jpg\" alt=\"\" width=\"600\"></p>\r\n<p>&nbsp;</p>\r\n<p><strong><span style=\"text-decoration: underline;\">5. Biển quảng cáo chữ nổi ánh sáng chìm bề mặt</span></strong></p>\r\n<p>- Đèn chiếu được bố trí ẩn trong chữ, ánh sáng phát ra bề mặt. Có thể\r\n chặn sáng quanh viền chữ hoặc không tùy yêu cầu khách hàng.</p>\r\n\r\n\r\n\r\n\r\n    \r\n\r\n','130000','150000',12,0,0,46,19,'0000-00-00 00:00:00','2014-05-19 09:47:12','http://quangcaohn.divivu.com/San-pham/2566968/258093/Hinh-thuc-chieu-sang-ket-hop-voi-chu-Noi.html',1),(7,'Laser cut paper','<br>','11111','150000',121,0,0,39,15,'0000-00-00 00:00:00','2014-05-20 15:07:51','',1);

/*Table structure for table `tbl_thanhvien` */

DROP TABLE IF EXISTS `tbl_thanhvien`;

CREATE TABLE `tbl_thanhvien` (
  `MaTV` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) DEFAULT '0' COMMENT '0:nu - 1 :nam',
  `NgaySinh` date DEFAULT '1990-01-01',
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `NgayDangKi` datetime NOT NULL,
  `NgayLoginGanNhat` datetime DEFAULT NULL,
  `NgaySuaGanNhat` datetime DEFAULT NULL,
  PRIMARY KEY (`MaTV`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_thanhvien` */

insert  into `tbl_thanhvien`(`MaTV`,`UserName`,`HoTen`,`MatKhau`,`GioiTinh`,`NgaySinh`,`DiaChi`,`Email`,`SoDienThoai`,`NgayDangKi`,`NgayLoginGanNhat`,`NgaySuaGanNhat`) values (1,'phamhoan37vn','Phạm Văn Hoàn','da39a3ee5e6b4b0d3255bfef95601890afd80709',1,'1991-11-01','Thanh Liêm - Hà Nam','wangshi.aptech@gmail.com','01667728370','2013-12-26 14:42:43',NULL,NULL);

/*Table structure for table `tbl_thanhvien_temp` */

DROP TABLE IF EXISTS `tbl_thanhvien_temp`;

CREATE TABLE `tbl_thanhvien_temp` (
  `confirm_code` varchar(65) COLLATE utf8_unicode_ci NOT NULL,
  `UserName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) DEFAULT '0' COMMENT '0:nu - 1 :nam',
  `NgaySinh` date DEFAULT '1990-01-01',
  `DiaChi` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'Chưa cập nhật',
  `NgayDangKi` datetime NOT NULL,
  PRIMARY KEY (`confirm_code`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_thanhvien_temp` */

insert  into `tbl_thanhvien_temp`(`confirm_code`,`UserName`,`HoTen`,`MatKhau`,`GioiTinh`,`NgaySinh`,`DiaChi`,`Email`,`SoDienThoai`,`NgayDangKi`) values ('cd8e036112d29c920d3ce2bb3f310149','phongthan91hn','Nguyễn Mạnh Tạo','b72b3048628d3117fad0efa755c6cd71e1faa4f0',1,'1991-11-01','Thanh Liêm - Hà Nam','phongthan91hn@gmail.com','01667728370','2013-12-26 18:30:21');

/*Table structure for table `tbl_useronline` */

DROP TABLE IF EXISTS `tbl_useronline`;

CREATE TABLE `tbl_useronline` (
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_useronline` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
