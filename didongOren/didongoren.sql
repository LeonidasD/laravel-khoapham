-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2018 at 08:48 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `didongoren`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_customer` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `status` tinyint(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `order_date`, `note`, `total`, `status`) VALUES
(4, 43, '2018-04-13', NULL, 119960000, 2),
(5, 44, '2018-04-13', 'dsgfsdfgdfh', 89970000, 1),
(6, 45, '2018-04-13', NULL, 29990000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

DROP TABLE IF EXISTS `bill_detail`;
CREATE TABLE IF NOT EXISTS `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`) VALUES
(1, 4, 2, 1),
(1, 4, 1, 1),
(1, 4, 3, 1),
(1, 4, 5, 1),
(2, 5, 6, 1),
(2, 5, 5, 1),
(2, 5, 3, 1),
(3, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `id_user`, `name`, `address`, `phone`, `email`) VALUES
(25, NULL, 'asdasdas', 'dasdasd', 'asdasda', 'dfbgncvn'),
(26, NULL, 'asdasdas', 'dasdasd', 'asdasda', 'dfbgncvn'),
(27, NULL, 'asdasd', 'ad', 'sdasd', 'asdasd@gmail.com'),
(28, NULL, 'asdasd', 'ad', 'sdasd', 'asdasd@gmail.com'),
(29, NULL, 'asdasd', 'ad', 'sdasd', 'asdasd@gmail.com'),
(30, NULL, 'asdasd', 'ad', 'sdasd', 'asdasd@gmail.com'),
(31, NULL, 'asdasdas', 'asdasdas', 'asd', 'superdragonchaos@gmail.com'),
(32, NULL, 'asdasdas', 'asdasdas', 'asd', 'superdragonchaos@gmail.com'),
(33, NULL, 'asdasdas', 'asdasdas', 'asd', 'superdragonchaos@gmail.com'),
(34, NULL, 'asdasdas', 'asdasdas', 'asd', 'superdragonchaos@gmail.com'),
(35, NULL, 'asd', 'dasdasd', 'asd', 'duc.huu128@gmail.com'),
(36, NULL, 'asd', 'dasdasd', 'asd', 'superdragonchaos@gmail.com'),
(37, NULL, 'đức', '123 abc q.5 p.15', '123456789', 'asdfgh@gmail.com'),
(38, NULL, 'đức', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(39, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(40, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(41, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(42, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(43, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(44, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'superdragonchaos@gmail.com'),
(45, NULL, 'sanpham', '123 abc q.5 p.15', '123456789', 'duc.huu128@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `page_url`
--

DROP TABLE IF EXISTS `page_url`;
CREATE TABLE IF NOT EXISTS `page_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `page_url`
--

INSERT INTO `page_url` (`id`, `url`) VALUES
(1, 'sanpham'),
(2, 'sanpham'),
(3, 'sanpham'),
(4, 'sanpham'),
(5, 'sanpham'),
(6, 'sanpham'),
(7, 'sanpham'),
(8, 'sanpham'),
(9, 'sanpham'),
(10, 'sanpham'),
(11, 'sanpham'),
(12, 'sanpham'),
(13, 'sanpham'),
(14, 'sanpham'),
(15, 'sanpham'),
(16, 'sanpham'),
(17, 'sanpham'),
(18, 'sanpham'),
(19, 'sanpham'),
(20, 'sanpham'),
(21, 'sanpham'),
(22, 'sanpham'),
(23, 'sanpham'),
(24, 'sanpham'),
(25, 'sanpham'),
(26, 'sanpham'),
(27, 'sanpham'),
(28, 'lcd-philips-25-257e7qdsw-(trang)'),
(29, 'lcd-philips-25-257e7qdsw-(trang)');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_brand` int(11) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `id_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `specification` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_promotion` tinyint(1) DEFAULT NULL,
  `promotion_price` int(11) DEFAULT NULL,
  `promotion_description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `buying_count` int(11) NOT NULL DEFAULT '0',
  `on_sale` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_type` (`id_type`),
  KEY `id_brand` (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_brand`, `id_type`, `id_url`, `name`, `summary`, `specification`, `quantity`, `price`, `image`, `is_promotion`, `promotion_price`, `promotion_description`, `buying_count`, `on_sale`, `is_deleted`) VALUES
(1, 2, 1, NULL, 'iPhone X', 'iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'iphonex.png', 0, NULL, NULL, 0, 1, 0),
(2, 1, 1, NULL, 'Sony Xperia XZ Premium', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'sony-xperia-xz-premium.png', 1, 1900000, 'giảm 1 triệu vnđ', 0, 1, 0),
(3, 3, 1, NULL, 'Samsung Galaxy Note 8', 'Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên S8 Plus, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'samsung-galaxy-note8.png', 0, NULL, NULL, 0, 1, 0),
(5, 1, 1, NULL, 'Sony Xperia XXA1 Ultra    \r\n\r\n', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'sony-xa1-ultra.png', 0, NULL, NULL, 0, 1, 0),
(6, 3, 1, NULL, 'Samsung Galaxy Note 8', 'Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên S8 Plus, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'samsung-galaxy-note8.png', 0, NULL, NULL, 0, 1, 0),
(7, 4, 4, NULL, 'Canon EOS 1300D', 'Dòng máy ảnh EOS 1300D cho phép bạn trải nghiệm tất cả thú vui trong nhiếp ảnh, đó là lý do tại sao chúng tôi giới thiệu dòng máy này đến người dùng, những ai đang tìm kiếm máy ảnh EOS DSLR đầu tiên của họ.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'eos1300d.png', 0, NULL, NULL, 0, 1, 0),
(8, 5, 5, NULL, 'LCD Philips 25\" 257E7QDSB (Đen)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'lcd-phillips25-257e7qdsb.png', 0, NULL, NULL, 0, 1, 0),
(9, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(10, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(11, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(12, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(13, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(14, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(15, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(16, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(17, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(18, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(19, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(20, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(21, 5, 5, NULL, 'LCD Philips 25\" 257E7QDSB (Đen)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'lcd-phillips25-257e7qdsb.png', 0, NULL, NULL, 0, 1, 0),
(22, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(23, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(24, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(25, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(26, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(27, 5, 5, '1', 'LCD Philips 25\" 257E7QDSW (Trắng)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p>\r\n\r\n<p>This is Specification</p>\r\n\r\n<p>Testing</p>', 100, 29990000, '2018-04-11 12-53-23-sticker (34).png', 0, NULL, NULL, 0, 1, 0),
(28, 5, 5, NULL, 'LCD Philips 25\" 257E7QDSB (Đen)', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', '<p>Hello</p> <p>This is Specification</p> <p>Testing</p>', 100, 29990000, 'lcd-phillips25-257e7qdsb.png', 0, NULL, NULL, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

DROP TABLE IF EXISTS `product_brand`;
CREATE TABLE IF NOT EXISTS `product_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`id`, `name`, `description`, `image`) VALUES
(1, 'Sony', 'Công ty công nghiệp Sony (ソニー株式会社/Sony Corporation), gọi tắt là Sony, là một tập đoàn đa quốc gia của Nhật Bản, với trụ sở chính nằm tại Minato, Tokyo, Nhật Bản, và là tập đoàn điện tử đứng thứ 5 thế giới với 81,64 tỉ USD (2011). Sony là một trong những công ty hàng đầu thế giới về điện tử, sản xuất tivi, máy ảnh, máy tính xách tay và đồ dân dụng khác.', 'sony.jpg'),
(2, 'Apple Inc', 'Apple Inc. là một tập đoàn công nghệ máy tính của Mỹ có trụ sở chính đặt tại Silicon Valley (Thung Lũng Si-li-côn) ở San Francisco, tiểu bang California. Apple được thành lập ngày 1 tháng 4 năm 1976 dưới tên Apple Computer, Inc., và đổi tên thành Apple Inc. vào đầu năm 2007.', 'apple.jpg'),
(3, 'Samsung', 'Tập đoàn Samsung (tiếng Hàn: 삼성 (Romaja: \"Samseong\", phiên âm chuẩn: \"Xam-xâng\"); Hanja: 三星; âm Hán Việt: \"Tam Tinh\" -nghĩa là \"3 ngôi sao\"), là một tập đoàn đa quốc gia của Hàn Quốc có tổng hành dinh đặt tại Samsung Town, Seoul. Tập đoàn có nhiều công ty con, hầu hết hoạt động dưới thương hiệu Samsung, là tập đoàn thương mại (chaebol) lớn nhất Hàn Quốc.', 'samsung.jpg'),
(4, 'Canon', 'Canon Inc. (キヤノン株式会社 Kyanon Kabushiki Gaisha?, TYO: 7751, NYSE: CAJ) là một tập đoàn đa quốc gia của Nhật Bản, một công ty trong lĩnh vực sản xuất các sản phẩm về hình ảnh và quang học, bao gồm máy Camera, máy photocopy và máy in. Trụ sở chính của tập đoàn đặt ở Ōta, Tokyo. Trụ sở ở Bắc Mỹ nằm ở Lake Success, New York, Hoa Kỳ.', 'canon.jpg'),
(5, 'Philips', 'Philips là tên gọi phổ biến nhất của Koninklijke Philips Electronics N.V. (Royal Philips Electronics), là một công ty điện tử đa quốc gia Hà Lan.\r\n\r\nPhilips là một trong những công ty điện tử lớn nhất thế giới. Trong năm 2010, doanh thu của công ty này đạt 25,42 tỉ euro. Công ty có 119.000 nhân viên tại hơn 60 quốc gia.[1]\r\n\r\nPhilips hoạt động ở một số lĩnh vực: điện tử tiêu dùng, chiếu sáng, thiết bị y tế,...', 'philips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand_type`
--

DROP TABLE IF EXISTS `product_brand_type`;
CREATE TABLE IF NOT EXISTS `product_brand_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_brand` (`id_brand`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_brand_type`
--

INSERT INTO `product_brand_type` (`id`, `id_type`, `id_brand`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 1, 4),
(7, 2, 4),
(8, 3, 4),
(9, 4, 4),
(10, 5, 4),
(11, 1, 5),
(12, 2, 5),
(13, 3, 5),
(14, 4, 5),
(15, 5, 5),
(16, 1, 3),
(17, 2, 3),
(18, 3, 3),
(19, 4, 3),
(20, 5, 3),
(21, 1, 1),
(22, 2, 1),
(23, 3, 1),
(24, 4, 1),
(25, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `description`, `image`) VALUES
(1, 'Điện thoại', 'Điện thoại thông minh hay điện thoại tinh khôn(tiếng Anh: smartphone) là khái niệm để chỉ loại điện thoại tích hợp một nền tảng hệ điều hành di động với nhiều tính năng hỗ trợ tiên tiến về điện toán và kết nối dựa trên nền tảng cơ bản của điện thoại di động thông thường.', 'smartphone.jpg'),
(2, 'Máy tính bảng', 'Máy tính bảng còn được gọi ngắn gọn là Tablet, là một loại thiết bị máy tính tất cả trong một với màn hình cảm ứng 7\' trở lên, sử dụng bút cảm ứng hay ngón tay để nhập dữ liệu thông tin thay cho bàn phím và chuột máy tính.', 'tablet.jpg'),
(3, 'TV', 'Truyền hình, hay còn được gọi là TV (Tivi) hay vô tuyến truyền hình (truyền hình không dây), máy thu hình, máy phát hình, là hệ thống điện tử viễn thông có khả năng thu nhận tín hiệu sóng và tín hiệu qua đường cáp để chuyển thành hình ảnh và âm thanh (truyền thanh truyền hình) và là một loại máy phát hình truyền tải nội dung chủ yếu bằng hình ảnh sống động và âm thanh kèm theo. Máy truyền hình là máy nhận những tín hiệu đó (qua ăng-ten) và phát bằng hình ảnh.', 'tv.jpg'),
(4, 'Máy ảnh', 'Máy ảnh hay máy chụp hình là một dụng cụ dùng để thu ảnh thành một ảnh tĩnh hay thành một loạt các ảnh chuyển động (gọi là phim hay video). Tên camera có gốc từ tiếng La tinh camera obscura nghĩa là \"phòng tối\", từ lý do máy ảnh đầu tiên là một cái phòng tối với vài người làm việc trong đó. Chức năng của máy ảnh giống với mắt người. Máy ảnh có thể làm việc ở phổánh sáng nhìn thấy hoặc ở các vùng khác trong phổ bức xạ điện từ.', 'camera.jpg'),
(5, 'Màn hình', 'Một thiết bị hiển thị là một thiết bị thể hiện hình ảnh. Hầu hết màn hình tác động tới mắt để tạo hình ảnh; nhưng cũng có màn hình dành riêng cho người mù sử dụng chuyển động cơ học thay đổi độ lồi lõm của một bề mặt để người mù cảm nhận được hình ảnh qua ngón tay.', 'screen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `remember_token`) VALUES
(33, 'thuhong', '$2y$10$d3DIfnUu7gS4nEQT8XhbwO3NVio61M/ic4EB28YNecTVZH9OkwHry', 'thu@yahoo.com', 'admin', NULL),
(32, 'hoahong', '$2y$10$R6ZXeWJRsVkaM/cfCR28Weao/FqyCcQVFdkfIk1cXBrFL1UE81YSK', 'hoa@gmail.com', 'staff', NULL),
(34, 'hoang', '$2y$10$R6ZXeWJRsVkaM/cfCR28Weao/FqyCcQVFdkfIk1cXBrFL1UE81YSK', 'hoang@gmail.com', 'editor', NULL),
(42, 'huonghuong', '$2y$10$R6ZXeWJRsVkaM/cfCR28Weao/FqyCcQVFdkfIk1cXBrFL1UE81YSK', 'huongnguyenak96@gmail.com', 'admin', NULL),
(49, 'duchuu', '$2y$10$BrifYhmIUN3TtKuqTNbFgO3J7svlUXc6TtteLm2ueowK6vRkTdzx.', 'superdragonchaos@gmail.com', NULL, '0FEg17n8HUPEV90ttrRP4iphxL9buIYTHFxwUvUj9PkO86IZuI1l0jjF6DpT');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `product_type` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `product_brand` (`id`);

--
-- Constraints for table `product_brand_type`
--
ALTER TABLE `product_brand_type`
  ADD CONSTRAINT `product_brand_type_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `product_brand` (`id`),
  ADD CONSTRAINT `product_brand_type_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
