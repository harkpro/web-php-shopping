-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2020 lúc 03:57 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_category`
--

CREATE TABLE `latnt_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parentid` int(11) UNSIGNED NOT NULL,
  `orders` int(11) UNSIGNED NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_category`
--

INSERT INTO `latnt_category` (`id`, `name`, `slug`, `parentid`, `orders`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'WOMEN’S CLOTHING ', 'women-s-clothing', 0, 1, 'ddddddddddd', '       dddddddđ', '2019-04-18 17:00:00', 1, '2019-12-13 01:24:11', 28, 1),
(2, 'MEN’S CLOTHING', 'men-s-clothing', 0, 2, 'dddddddddddđ', ' dddddddd', '2019-04-18 17:00:00', 1, '2019-11-27 02:07:42', 28, 1),
(3, 'ACCESSORIES', 'accessories', 0, 3, 'ddddddddddd', ' ddddddddddnvh_usernvh_userd', '2019-04-18 17:00:00', 1, '2019-08-11 18:36:04', 0, 1),
(4, 'SHOES', 'SHOE', 0, 4, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-08-11 18:35:57', 0, 1),
(5, 'HANDBAG', 'HAND-BAG', 0, 5, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-04-18 17:00:00', 1, 1),
(6, 'WATCH', 'wach', 0, 6, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-04-18 17:00:00', 1, 1),
(7, 'GLASSES', 'glasses', 0, 7, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-07-26 19:42:46', 28, 1),
(17, 'BELT', 'belt', 0, 15, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-10-14 23:00:54', 0, 1),
(18, 'WALLET', 'WALLET', 0, 16, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-04-18 17:00:00', 1, 1),
(19, 'WOMEN\'S SHOES', 'WOMENS-SHOES', 1, 17, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-07-17 02:04:36', 28, 1),
(20, 'MEN\'S SHOES', 'MENS-SHOES', 2, 17, 'ddddddddddd', 'ddddddddddd', '2019-04-18 17:00:00', 1, '2019-04-18 17:00:00', 1, 1),
(22, 'Túi Xách', 'tui-xacha', 6, 15, 'a', 'a', '2019-07-26 19:52:24', 28, '2019-07-26 19:53:11', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_comment`
--

CREATE TABLE `latnt_comment` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` longtext CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `createda_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `catid` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `latnt_comment`
--

INSERT INTO `latnt_comment` (`id`, `name`, `comment`, `email`, `createda_at`, `catid`, `status`) VALUES
(230, 'aaaaaaaaa', 'aaa', NULL, '2020-01-08 01:54:00', 0, 1),
(231, 'sssssss', 'ssss', NULL, '2020-01-08 01:54:00', 0, 1),
(232, 'ss', 'ss', NULL, '2020-01-08 01:54:00', 4, 1),
(233, 'aa', 'aa', NULL, '2020-01-08 01:54:00', 4, 1),
(234, 'bb', 'bb', NULL, '2020-01-08 01:54:00', 4, 1),
(235, 'aaaaaaaaaaaaaaaaa', 'aaaaaa', NULL, '2020-01-08 01:54:00', 4, 1),
(236, 'aaaaaa', 'aaaaaa', NULL, '2020-01-08 01:54:00', 4, 1),
(237, 'sa', 'sa', NULL, '2020-01-08 01:54:00', 4, 1),
(238, 'sa', 'sa', NULL, '2020-01-08 01:54:00', 4, 1),
(239, 'aaaaaaaaaaa', 'aaaaaaaaa', NULL, '2020-01-08 01:54:00', 0, 1),
(240, '2', '2', NULL, '2020-01-08 01:54:00', 0, 1),
(241, 'aaaaaaaaaaaaaaaaa', 'aaaaa', NULL, '2020-01-08 01:54:00', 0, 1),
(242, 'Túi Xácha', '⭐Xin chào mọi người ạ, e năm nay 2k4 và săp tới sẽ bước vào ngưỡng cửa cấp 3, e rất thích software engineer nhưng tiếc thay cho em là em biết ra quá trể đến tận năm nay mới biết ạ, e đang theo tiến trình học của bản thân là học cấp 3 rồi đến đại học e hiện tại đang đăng ký theo toán lý hóa e định lên 11 sẽ chuyển sang toán lý thuyết anh văn , nhưng e nghe 1 số người nói là có học thêm những lập trình ở bên ngoài và e rất thắc mắc ', NULL, '2020-01-08 01:54:00', 0, 1),
(243, 'a', 'a', NULL, '2020-01-08 01:54:00', 0, 1),
(244, 'a', 'a', NULL, '2020-01-08 01:54:00', 0, 1),
(245, '123', '123', NULL, '2020-01-08 01:54:00', 0, 1),
(246, 'l', 'n', NULL, '2020-01-08 01:54:00', 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_config`
--

CREATE TABLE `latnt_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `themeid` int(11) NOT NULL,
  `metaauth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metakey` text COLLATE utf8_unicode_ci NOT NULL,
  `metadesc` text COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_counter`
--

CREATE TABLE `latnt_counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `visit` mediumint(8) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_feedback`
--

CREATE TABLE `latnt_feedback` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_feedback`
--

INSERT INTO `latnt_feedback` (`id`, `fullname`, `email`, `phone`, `title`, `detail`, `created_at`, `updated_at`, `updated_by`, `status`) VALUES
(13, '', '', '', '', 'adfasdf', '2020-01-08 01:54:00', '2020-01-01 00:45:27', 1, 1),
(14, '', '', '', '', 'adfasdf', '2020-01-08 01:54:00', '2020-01-01 00:52:49', 1, 1),
(15, 'tu tung long nghia tuan anh', 'daicakylin@gmail.com', '0964290200', 'FeedBack', 'asdfasdfasdfasdf', '2020-01-08 01:54:00', '2020-01-01 23:08:00', 1, 1),
(16, 'asdfasdf', 'asdf@gasd', '0964290200', 'nghia', 'asdfasdf', '2020-01-08 01:54:00', '2020-01-01 23:11:06', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_menu`
--

CREATE TABLE `latnt_menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tableid` int(11) DEFAULT NULL,
  `parentid` int(11) NOT NULL DEFAULT 0,
  `orders` int(11) NOT NULL DEFAULT 0,
  `position` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_menu`
--

INSERT INTO `latnt_menu` (`id`, `name`, `type`, `link`, `tableid`, `parentid`, `orders`, `position`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'HOME', 'menu', 'index.php', NULL, 0, 0, 'mainmenu', '2020-01-08 01:54:00', 28, '2019-08-30 01:44:59', 28, 1),
(2, 'INTRODUCE', 'menu', 'index.php?option=post&id=lich-su-phat-trien-trang-e-shop', NULL, 0, 0, '', '2020-01-08 01:54:00', 0, '2019-08-29 01:35:30', 28, 1),
(3, 'FEEDBACK', 'menu', 'index.php?option=feedback', NULL, 0, 0, 'mainmenu', '2020-01-08 01:54:00', 28, '2019-08-30 01:50:14', 28, 1),
(4, 'PRODUCT', 'menu', '#', NULL, 0, 0, '', '2020-01-08 01:54:00', 0, '2019-08-29 01:35:29', 28, 1),
(5, 'Chat', 'menu', 'https://www.facebook.com/boutiqueshopmanagement/', NULL, 0, 0, 'mainmenu', '2020-01-08 01:54:00', 28, '2020-01-07 04:04:10', 28, 1),
(6, 'POST', 'menu', '#', NULL, 0, 0, '', '2020-01-08 01:54:00', 0, '2019-08-29 01:35:32', 28, 1),
(7, 'ALL PRODUCT', 'menu', 'product', NULL, 4, 0, '', '2020-01-08 01:54:00', 0, '2019-08-29 01:35:29', 28, 1),
(8, 'All Post', 'menu', 'post', NULL, 6, 10, 'mainmenu', '2020-01-08 01:54:00', 28, '2019-08-30 01:45:49', 28, 1),
(9, 'New Post', 'menu', 'post&cat=tin-tuc', NULL, 6, 10, 'mainmenu', '2020-01-08 01:54:00', 28, '2019-08-30 01:45:09', 28, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_orders`
--

CREATE TABLE `latnt_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `created_date` date NOT NULL,
  `exportdate` date NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `deliveryname` varchar(100) NOT NULL,
  `deliveryphone` varchar(255) NOT NULL,
  `deliveryemail` varchar(255) NOT NULL,
  `ShipingMethods` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `Payments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_orders`
--

INSERT INTO `latnt_orders` (`id`, `code`, `userid`, `created_date`, `exportdate`, `deliveryaddress`, `deliveryname`, `deliveryphone`, `deliveryemail`, `ShipingMethods`, `updated_at`, `updated_by`, `status`, `Payments`) VALUES
(1, 35, 38, '2020-01-08', '2020-01-07', 'hanoi', 'Bui Hoang Long', '0964290200', 'longngu@gmail.com', 1, NULL, 38, 2, '1000'),
(60, 1335488423, 0, '2020-01-08', '0000-00-00', 'adas adasd sada sd', 'asdasd', '0975271384', 'vanhung123@gmail.com', 0, NULL, 0, 2, 'Ship_COD'),
(61, 1335488423, 0, '2020-01-08', '0000-00-00', 'adas adasd sada sd', 'asdasd', '0975271384', 'vanhung123@gmail.com', 0, NULL, 0, 2, 'Ship_COD'),
(62, 1092951420, 0, '2020-02-19', '0000-00-00', 'cát minh - phù cát - bình định', 'Túi Xáchaaaaaaaaa', '0975271384', 'vanhung3339@gmail.com', 0, NULL, 0, 2, 'Ship_COD'),
(63, 1092951420, 0, '2020-02-19', '0000-00-00', 'cát minh - phù cát - bình định', 'Túi Xáchaaaaaaaaa', '0975271384', 'vanhung3339@gmail.com', 0, NULL, 0, 2, 'Ship_COD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_ordersdetail`
--

CREATE TABLE `latnt_ordersdetail` (
  `id` int(11) UNSIGNED NOT NULL,
  `orderid` int(11) UNSIGNED NOT NULL,
  `productid` int(11) UNSIGNED NOT NULL,
  `price` float(12,0) NOT NULL,
  `quantity` int(11) UNSIGNED NOT NULL,
  `amount` float(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_ordersdetail`
--

INSERT INTO `latnt_ordersdetail` (`id`, `orderid`, `productid`, `price`, `quantity`, `amount`) VALUES
(1, 1, 24, 1000, 1, 1000),
(87, 61, 20, 3000, 1, 3000),
(88, 63, 22, 5000, 1, 5000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_post`
--

CREATE TABLE `latnt_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `topid` int(11) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT 'post',
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_post`
--

INSERT INTO `latnt_post` (`id`, `topid`, `title`, `slug`, `detail`, `img`, `type`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(0, 1, 'LỊCH SỬ PHÁT TRIỂN TRANG E-SHOP', 'lich-su-phat-truyen-trang-e-shop', '<p>Lối đi ri&ecirc;ng của E-shop<br />\r\nLối đi ri&ecirc;ng của E-shop<br />\r\nSau 4 năm ph&aacute;t triển, E-shop đ&atilde; đ&aacute;nh dấu sự hiện diện của m&igrave;nh bằng mức tăng trưởng thần k&igrave;. Nhưng liệu c&aacute;c &ldquo;&ocirc;ng lớn&rdquo; thương mại điện tử c&oacute; l&agrave; lực cản của E-shop?<br />\r\nSẢN PHẨM MỚI T&aacute;c giả Tr&iacute; Huỳnh 14.07.2014<br />\r\nDoanhNhanOnline &ndash; Sau 4 năm ph&aacute;t triển, E-shop đ&atilde; đ&aacute;nh dấu sự hiện diện của m&igrave;nh bằng mức tăng trưởng thần k&igrave;. Nhưng liệu c&aacute;c &ldquo;&ocirc;ng lớn&rdquo; thương mại điện tử c&oacute; l&agrave; lực cản của E-shop?</p>\r\n\r\n<p>421</p>\r\n\r\n<p>Về h&igrave;nh thức, Trần Ngọc Th&aacute;i Sơn (sinh năm 1981), Tổng Gi&aacute;m đốc website Thương mại điện tử E-shop giống như một ch&agrave;ng thư sinh. Nhưng đứng trước rất nhiều th&aacute;ch thức v&agrave; sức n&oacute;ng cạnh tranh của thị trường hiện nay, anh vẫn đang l&agrave; &ldquo;linh hồn&rdquo; của một website thương mại điện tử c&oacute; bề d&agrave;y th&agrave;nh t&iacute;ch đ&aacute;ng nể. Chỉ sau 4 năm từ khi ra đời, E-shop đ&atilde; c&oacute; mức tăng trưởng ch&oacute;ng mặt với mức tăng doanh thu l&ecirc;n tới 300%/năm.</p>\r\n\r\n<p>Cuộc đua khốc liệt</p>\r\n\r\n<p>Th&agrave;nh lập E-shop v&agrave;o th&aacute;ng 3/2010, Sơn cặm cụi một m&igrave;nh l&agrave;m tất cả c&aacute;c c&ocirc;ng đoạn của một c&ocirc;ng ty. Tiếng Anh l&agrave; niềm đam m&ecirc; từ nhỏ n&ecirc;n khi kinh doanh, Sơn kh&ocirc;ng gặp vất vả về ng&ocirc;n ngữ. Sự cần c&ugrave; đ&atilde; gi&uacute;p Sơn th&agrave;nh c&ocirc;ng trong việc n&acirc;ng đơn h&agrave;ng từ con số 20 mỗi th&aacute;ng l&ecirc;n mức 15.000 sau hai năm. Ri&ecirc;ng th&aacute;ng 3/2014, con số n&agrave;y l&agrave; 70.000. Từ ng&agrave;nh h&agrave;ng s&aacute;ch tiếng Anh, nay E-shop đ&atilde; mở rộng đến 9 ng&agrave;nh h&agrave;ng ti&ecirc;u d&ugrave;ng v&agrave; chưa dừng lại ở đ&oacute;. Tuy nhi&ecirc;n, việc tăng trưởng ngoạn mục của E-shop đ&atilde; g&acirc;y ra sự ch&uacute; &yacute; v&agrave; l&agrave; lời &ldquo;tuy&ecirc;n chiến&rdquo; đối với c&aacute;c đối thủ cạnh tranh tr&ecirc;n thị trường hấp dẫn n&agrave;y.</p>\r\n\r\n<p>Theo PWC, thị trường b&aacute;n lẻ Việt Nam hiện c&oacute; qui m&ocirc; khoảng 100 tỷ USD trong năm 2013 vừa qua, ri&ecirc;ng thương mại điện tử đạt 2,2 tỷ USD. Trong khoảng 6-7 năm trở lại đ&acirc;y, thị trường thương mại điện tử c&oacute; mức tăng trưởng kh&aacute; ấn tượng, đạt 300% mỗi năm (theo số liệu của E-shop). Đ&oacute; l&agrave; con số hấp dẫn, thu h&uacute;t nhiều thương hiệu thương mại điện tử lớn của thế giới v&agrave;o Việt Nam cũng như th&uacute;c đẩy sự gia tăng đầu tư của c&aacute;c doanh nghiệp trong nước.</p>\r\n\r\n<p>Tr&ecirc;n thị trường thương mại điện tử Việt Nam, Chodientu.vn &ndash; một sản phẩm thương mại điện tử của người Việt &ndash; hiện chiếm thị phần lớn nhất với 29% thị phần (theo Internet ComScore). Đ&acirc;y l&agrave; một trong những s&agrave;n giao dịch thương mại điện tử theo m&ocirc; h&igrave;nh của eBay xuất hiện đầu ti&ecirc;n tại Việt Nam. Đơn vị n&agrave;y kh&ocirc;ng ngừng gia tăng sức mạnh bằng chiến lược t&iacute;ch hợp t&iacute;nh năng thanh to&aacute;n trực tuyến như: ph&aacute;t triển c&ocirc;ng cụ thanh to&aacute;n trực tuyến NganLuong.vn (Ng&acirc;n lượng), dịch vụ giao nhận h&agrave;ng h&oacute;a trực tuyến Shipchung.vn&hellip; Với vị thế dẫn đầu, Chodientu.vn c&oacute; thể c&ograve;n ph&aacute;t triển mạnh mẽ hơn nữa nhờ sự gi&uacute;p sức của Ebay (Mỹ), thương hiệu đ&atilde; mua 20% cổ phần của c&ocirc;ng ty sở hữu website n&agrave;y l&agrave; Peacesoft v&agrave;o năm 2011. Cuộc đua ở thị trường n&agrave;y c&agrave;ng được h&acirc;m n&oacute;ng khi Lazada, đơn vị thuộc C&ocirc;ng ty Rocket Internet &ndash; đế chế thương mại điện tử h&ugrave;ng mạnh tr&ecirc;n to&agrave;n cầu c&oacute; nguồn gốc từ nước Đức &ndash; gần đ&acirc;y đ&atilde; c&ocirc;ng bố nhiều chiến lược tiến c&ocirc;ng mạnh mẽ. Năm 2013, Lazada cũng l&agrave; website b&aacute;n lẻ trực tuyến c&oacute; lượng truy cập cao thứ hai Việt Nam, theo b&aacute;o c&aacute;o của h&atilde;ng nghi&ecirc;n cứu Internet ComScore (Mỹ). Marketplace l&agrave; dự &aacute;n mới nhất của &ldquo;&ocirc;ng lớn&rdquo; n&agrave;y khi đưa ra những phương thức hỗ trợ c&aacute;c nh&agrave; cung cấp như kh&ocirc;ng thu ph&iacute; h&agrave;ng th&aacute;ng m&agrave; t&iacute;nh ph&iacute; trực tiếp tr&ecirc;n từng sản phẩm. D&ugrave; mới tham gia v&agrave;o thị trường Việt Nam từ đầu năm 2012, nhưng theo thống k&ecirc; của Internet ComScore, Lazada đ&atilde; chiếm vị tr&iacute; số hai thị trường b&aacute;n lẻ trực tuyến với 22% thị phần. Cuối năm 2013, Lazada đ&atilde; huy động được th&ecirc;m 250 triệu USD vốn đầu tư.</p>\r\n\r\n<p>Một đơn vị kh&aacute; k&iacute;n tiếng tr&ecirc;n thị trường l&agrave; Vingroup, mới đ&acirc;y cũng c&ocirc;ng bố th&agrave;nh lập C&ocirc;ng ty VinE-com với vốn điều lệ 1.000 tỷ đồng, ch&iacute;nh thức tham gia cuộc đua tr&ecirc;n thị trường thương mại điện tử. Sự xuất hiện của VinE-com cho thấy, cuộc đua tr&ecirc;n thị trường thương mại điện tử tại Việt Nam đang đến hồi gay cấn.</p>\r\n\r\n<p>Con đường ri&ecirc;ng của E-shop</p>\r\n\r\n<p>Trước sự v&agrave;o cuộc quyết liệt của c&aacute;c đối thủ, &ocirc;ng chủ của E-shop c&oacute; vẻ rất tự tin khi khẳng định: &ldquo;Kh&ocirc;ng chiếc thuyền n&agrave;o c&oacute; thể đ&aacute;nh bắt hết c&aacute; của đại dương&rdquo;. Sơn tự tin cũng c&oacute; l&iacute; do khi cuối năm ngo&aacute;i, E-shop đ&atilde; th&agrave;nh c&ocirc;ng trong việc gọi vốn từ Quỹ đầu tư Sumitomo (Nhật). Đ&acirc;y l&agrave; lần gọi vốn thứ hai của E-shop, sau lần r&oacute;t vốn của quỹ đầu tư mạo hiểm kh&aacute;c cũng của Nhật l&agrave; CyberAgent Ventures. Gi&aacute; trị thương vụ mới nhất được dự đo&aacute;n khoảng 2-3 triệu USD. Đ&acirc;y l&agrave; con số kh&ocirc;ng hề nhỏ với một doanh nghiệp mới ph&aacute;t triển được 4 năm. Mới đ&acirc;y, E-shop đ&atilde; ho&agrave;n th&agrave;nh đầu tư kho h&agrave;ng c&oacute; diện t&iacute;ch 3.100 m2 tại T&acirc;n B&igrave;nh, TP.HCM, rộng gấp 6 lần kho cũ. Sơn n&oacute;i, đ&acirc;y l&agrave; kết quả của chuyến đến viếng thăm một c&ocirc;ng ty thương mại điện tử c&oacute; lịch sử ph&aacute;t triển hơn 10 năm tại Nhật. &ldquo;Nếu kh&ocirc;ng c&oacute; chuyến đi n&agrave;y, c&oacute; thể t&ocirc;i đ&atilde; mắc sai lầm khi kh&ocirc;ng d&aacute;m đầu tư kho h&agrave;ng c&oacute; diện t&iacute;ch lớn như vậy&rdquo;, Sơn kể.</p>\r\n\r\n<p>Ngo&agrave;i những thuận lợi n&agrave;y, Sơn cũng cho biết, E-shop c&oacute; lối đi kh&aacute;c đối thủ. E-shop l&agrave; biểu tượng của 3 yếu tố: T&igrave;m kiếm, Tiết kiệm v&agrave; Tin cậy. Sau giai đoạn tập trung cho hai yếu tố đầu, từ năm 2014 E-shop bắt đầu dồn to&agrave;n lực để gia tăng yếu tố thứ ba. &ldquo;Thị trường đang rất thiếu niềm tin v&agrave;o h&igrave;nh thức giao dịch online, l&agrave;m c&aacute;ch n&agrave;o cho kh&aacute;ch h&agrave;ng tin tưởng th&igrave; mới chiến thắng&rdquo;, Sơn chia sẻ v&agrave; đưa ra quan điểm rằng, nh&agrave; đầu tư địa phương lu&ocirc;n c&oacute; lợi thế l&agrave; nắm bắt ch&iacute;nh x&aacute;c thị trường, &ldquo;cảm&rdquo; được nhu cầu kh&aacute;ch h&agrave;ng v&agrave; đưa ra chiến lược thực tế hơn. Ch&iacute;nh v&igrave; vậy m&agrave; E-shop chưa vội đầu tư v&agrave;o m&ocirc; h&igrave;nh C2C (Kh&aacute;ch h&agrave;ng &ndash; Kh&aacute;ch h&agrave;ng) như một số đối thủ. Hiện tại, E-shop vẫn gắn b&oacute; với m&ocirc; h&igrave;nh B2C (Doanh nghiệp &ndash; Kh&aacute;ch h&agrave;ng). C&aacute;i kh&oacute; của m&ocirc; h&igrave;nh n&agrave;y l&agrave; doanh nghiệp phải bỏ c&ocirc;ng kiểm tra nguồn gốc h&agrave;ng h&oacute;a, chọn lựa từng m&oacute;n h&agrave;ng để giới thiệu với kh&aacute;ch. Nhưng ngược lại, chất lượng sản phẩm sẽ được kiểm so&aacute;t tuyệt đối. &ldquo;B&ecirc;n cạnh đ&oacute;, h&igrave;nh thức trả tiền sau khi nhận h&agrave;ng m&agrave; c&ocirc;ng ty vẫn duy tr&igrave; sẽ gi&uacute;p kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m hơn&rdquo;, Sơn cho biết.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, E-shop kh&ocirc;ng phải kh&ocirc;ng c&ograve;n c&aacute;i kh&oacute;. Với số ng&agrave;nh h&agrave;ng tăng gấp 9 lần sau 4 năm hoạt động, năng lực của c&ocirc;ng ty kh&ocirc;ng theo kịp trong vấn đề quản l&yacute; chất lượng v&agrave; quản l&yacute; rủi ro. Ngo&agrave;i ra, mạng lưới b&aacute;n h&agrave;ng mở rộng khắp cả nước đ&ograve;i hỏi sự phối hợp nhịp nh&agrave;ng ở hệ thống giao h&agrave;ng cũng l&agrave; điều E-shop đ&aacute;ng lưu t&acirc;m.</p>\r\n\r\n<p>E-shop đang trong qu&aacute; tr&igrave;nh ph&aacute;t triển n&ecirc;n kh&oacute; tr&aacute;nh khỏi việc đối mặt với những kh&oacute; khăn trong quản l&yacute;. Tuy nhi&ecirc;n, E-shop c&oacute; nền tảng về giao dịch thương mại điện tử v&agrave; sự hỗ trợ của đối t&aacute;c Nhật nhiều kinh nghiệm, &ldquo;chắc chắn E-shop sẽ sớm th&iacute;ch ứng v&agrave; vươn l&ecirc;n mạnh mẽ&rdquo;, vị Tổng Gi&aacute;m đốc trẻ tuổi của E-shop tự tin n&oacute;i. DoanhNhanOnlinea</p>\r\n', 'lich-su-phat-truyen-trang-e-shop.png', 'post', '', '', '2019-07-16 19:52:56', 28, '2019-08-13 02:12:10', 28, 1),
(4, 2, 'Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng', 'chiec-dong-ho-cu-mem-den-nut-ca-kinh-van-co-gia-24-ty-dong', '\r\n<p>Được thiết kế bởi Richard Mille, chiếc đồng hồ đeo tay tourbillon (những chiếc đồng hồ c&oacute; tourbillon l&agrave; c&ocirc;ng cụ gi&uacute;p chuyển động của quả lắc lu&ocirc;n ở phương thẳng đứng nhờ chuyển động xoay tr&ograve;n li&ecirc;n tục). Chiếc đồng hồ n&agrave;y bằng kim cương v&agrave; được tourbillon kim cương được b&aacute;n với gi&aacute; 566 ng&agrave;n đ&ocirc; la ( khoảng 13 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 9:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 2\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265063-771-5c267ce22ab31e48f5128a3a-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Một chiếc đồng hồ đeo tay chronograph (đồng hồ nhiều kim) của&nbsp;Patek Philippe c&oacute; thiết kế tinh tế v&agrave;&nbsp;độc ​​đ&aacute;o. N&oacute; được&nbsp;l&agrave;m từ v&agrave;ng trắng 18k v&agrave; mặt số kim cương m&agrave;u đen, mang về cho nh&agrave; đấu gi&aacute; khoảng 614 ng&agrave;n&nbsp;đ&ocirc; la (khoảng 14 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 8:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 3\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265063-605-5c268c27bd773062960e0846-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Chiếc đồng hồ bấm giờ lịch vạn ni&ecirc;n bằng v&agrave;ng Patek Philippe 18K n&agrave;y với c&aacute;c giai đoạn mặt trăng v&agrave; thang đo tốc độ tachymeter được b&aacute;n với gi&aacute; 669 ng&agrave;n đ&ocirc; la ( khoảng 15 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 7:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 4\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265063-704-5c2684090df17644c86e7e38-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Được sản xuất v&agrave;o năm 1930, chiếc đồng hồ đeo tay Patek Philippe v&agrave;ng 18K n&agrave;y được b&aacute;n với gi&aacute; 708 ng&agrave;n&nbsp;đ&ocirc; la ( khoảng 16 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 6:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 6\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265063-318-5c26849dbd773063503f0eb4-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Một thiết kế thực sự vượt thời gian, chiếc đồng hồ đeo tay Rolex bằng th&eacute;p kh&ocirc;ng gỉ năm 1969 n&agrave;y với nh&atilde;n hiệu Paul Newman được chốt với gi&aacute; cuối c&ugrave;ng 732 ng&agrave;n&nbsp;đ&ocirc; la (khoảng hơn 16 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 5:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 7\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265063-533-5c2685700df17645190f4782-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Được xếp chồng l&ecirc;n nhau với c&aacute;c t&iacute;nh năng ấn tượng như lịch lặp đi lặp lại tức thời ph&uacute;t, chỉ b&aacute;o năm nhuận, chế độ hiển thị ng&agrave;y v&agrave; đ&ecirc;m v&agrave; c&aacute;c giai đoạn mặt trăng, kh&ocirc;ng c&oacute; g&igrave; lạ khi chiếc Patek Philippe bạch kim n&agrave;y được b&aacute;n đấu gi&aacute; với gi&aacute; 753.277 đ&ocirc; la ( khoảng 17 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 4:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 8\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265064-438-5c2687072ab31e4a25700bc4-1920-1440--1--1563263723-width1920height1440.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Một chiếc đồng hồ đeo tay đồng hồ bấm giờ vĩnh cửu Patek Philippe bằng v&agrave;ng 18K từ năm 1944 được b&aacute;n đấu gi&aacute; với gi&aacute; 912.500 đ&ocirc; la (khoảng 20 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 3:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 9\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265064-16-5c2688ecbd77305b1e1122d8-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Chiếc đồng hồ đeo tay Rolex bằng th&eacute;p kh&ocirc;ng gỉ đầu ti&ecirc;n n&agrave;y thực sự hiếm c&oacute;. N&oacute; sở hữu mặt số mạ v&agrave;ng, thời gian tự động v&agrave; gi&acirc;y trung t&acirc;m, được b&aacute;n với gi&aacute; 1,068 triệu đ&ocirc; la. Chiếc đồng hồ được đem đấu gi&aacute; đ&atilde; cũ, c&oacute; phần mặt rạn nứt, tuy nhi&ecirc;n gi&aacute; trị thời điểm của n&oacute; lại được xem l&agrave; v&ocirc; gi&aacute; (khoảng 24 tỷ đồng).&nbsp;</p>\r\n\r\n<p><strong>Vị tr&iacute; số 2:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 10\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265064-411-5c268ba60df17645d9198cfe-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Một đồng hồ bấm giờ được chứng nhận ch&iacute;nh thức, Rolex v&agrave;ng 18K với lịch ba, mặt số sao v&agrave; c&aacute;c giai đoạn mặt trăng, chiếc đồng hồ n&agrave;y đ&atilde; chứng tỏ l&agrave; một c&uacute; đầu tư chuẩn x&aacute;c của người mua n&oacute; đầu ti&ecirc;n khi mang về 1,572 triệu đ&ocirc; la (khoảng hơn 36 tỷ đồng).</p>\r\n\r\n<p><strong>Vị tr&iacute; số 1:</strong></p>\r\n\r\n<p><img alt=\"Chiếc đồng hồ cũ mèm đến nứt cả kính vẫn có giá 24 tỷ đồng - 11\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563265064-235-5c2683612ab31e499b34a9ec-960-720-1563263723-width960height720.jpg\" style=\"width:660px\" /></p>\r\n\r\n<p>Chiếc đồng hồ được đấu gi&aacute; đắt nhất t&iacute;nh tới thời điểm đấu gi&aacute; hiện tại, chiếc đồng hồ bấm giờ Patek Philippe bằng v&agrave;ng 18K, c&oacute; chữ k&yacute; của Philippe v&agrave; c&oacute; lịch vạn ni&ecirc;n v&agrave; mặt trăng, đ&atilde; c&oacute; gi&aacute; l&ecirc;n tới 3,2 triệu đ&ocirc; la (khoảng 73 tỷ đồng).</p>\r\n', 'chiec-dong-ho-cu-mem-den-nut-ca-kinh-van-co-gia-24-ty-dong.jpg', 'post', '', '', '2019-07-16 19:54:32', 28, '2019-07-16 19:54:32', 28, 1),
(5, 2, '4 loại quần áo dễ xấu nơi công sở', '4-loai-quan-ao-de-xau-noi-cong-so', '<p>Muốn mặc đẹp, lại sang, lại đ&uacute;ng quy tắc nơi c&ocirc;ng sở chưa bao giờ l&agrave; chuyện dễ d&agrave;ng. Cao tay đến đ&acirc;u trong khoản thời trang, bạn cũng kh&oacute; tr&aacute;nh khỏi những l&uacute;c mặc lỗi, v&ocirc; t&igrave;nh tạo sự k&eacute;m duy&ecirc;n nơi l&agrave;m việc.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; những trang phục h&agrave;ng đầu cần tr&aacute;nh nơi c&ocirc;ng sở. Ch&uacute;ng c&oacute; thể đẹp, nhưng rất dễ &ldquo;phản chủ&rdquo;, đẩy bạn v&agrave;o t&igrave;nh huống k&eacute;m thanh lịch kh&ocirc;ng mong muốn:</p>\r\n\r\n<p><strong>1. Trang phục m&agrave;u trắng</strong></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 2\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240576-533-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-1-1563158464-width500height643.jpg\" /></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 3\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-836-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-2-1563158464-width500height602.jpg\" /></p>\r\n\r\n<p>Hiếm c&oacute; m&agrave;u sắc n&agrave;o dễ d&agrave;ng mang lại sự trẻ trung, nền n&atilde; v&agrave; t&ocirc;n da hiệu quả như m&agrave;u trắng. Đ&acirc;y cũng l&agrave; lựa chọn h&agrave;ng đầu của nhiều chị em khi n&oacute;i về thời trang c&ocirc;ng sở. Song thực tế th&igrave; trang phục m&agrave;u trắng kh&ocirc;ng hề dễ mặc ch&uacute;t n&agrave;o. Ch&uacute;ng dễ khiến ph&aacute;i đẹp lộ &ldquo;phụ t&ugrave;ng&rdquo;, khiến người mặc tr&ocirc;ng tr&ograve;n trịa hơn đồng thời dễ lộ những vết nhăn, bụi bẩn trong qu&aacute; tr&igrave;nh giặt l&agrave; v&agrave; bảo quản.</p>\r\n\r\n<p><strong>2. Chất liệu cotton</strong></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 4\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-606-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-3-1563158464-width500height577.jpg\" /></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 5\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-598-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-4-1563158464-width500height615.jpg\" /></p>\r\n\r\n<p>Trang phục từ cotton dễ chiếm cảm t&igrave;nh của người mặc v&igrave; sự thoải m&aacute;i, co gi&atilde;n, thấm h&uacute;t mồ h&ocirc;i. Tuy nhi&ecirc;n, với d&ograve;ng thời trang c&ocirc;ng sở, cotton kh&ocirc;ng phải l&agrave; lựa chọn đ&uacute;ng đắn. Nguy&ecirc;n do l&agrave; bởi ch&uacute;ng dễ tạo cảm gi&aacute;c như trang phục mặc nh&agrave;, chưa kể dễ phai m&agrave;u, bai d&atilde;o sau một v&agrave;i lần sử dụng. Nữ c&ocirc;ng sở n&ecirc;n c&acirc;n nhắc những chất liệu kh&aacute;c như voan, lụa, satin, linen&hellip;, mềm mại v&agrave; sang hơn hẳn.</p>\r\n\r\n<p><strong>3. Trang phục &ocirc;m s&aacute;t</strong></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 6\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-103-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-5-1563158464-width500height630.jpg\" /></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 7\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-165-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-6-1563158464-width500height602.jpg\" /></p>\r\n\r\n<p>Nhiều chị em c&oacute; sở th&iacute;ch diện trang phục &ocirc;m s&aacute;t như đầm b&oacute;, ch&acirc;n v&aacute;y b&uacute;t ch&igrave; đi l&agrave;m với mong muốn tăng th&ecirc;m sự nữ t&iacute;nh, khoe kh&eacute;o v&oacute;c d&aacute;ng c&acirc;n đối. Song d&ugrave; đẹp đến đ&acirc;u, những bộ v&aacute;y &aacute;o khoe đường cong vẫn n&ecirc;n hạn chế nơi c&ocirc;ng sở. Ch&uacute;ng c&oacute; thể gợi cảm, nhưng kh&ocirc;ng ph&ugrave; hợp, lại dễ khiến ph&aacute;i đẹp lộ những nhược điểm m&agrave; đ&ocirc;i khi ch&iacute;nh họ cũng kh&ocirc;ng để &yacute;. B&ecirc;n cạnh đ&oacute;, đồ &ocirc;m s&aacute;t cũng đ&ograve;i hỏi sự tinh tế trong khoản lựa chọn nội y cũng như c&aacute;ch đi đứng, di chuyển để tr&ocirc;ng kh&ocirc;ng nhức mắt. Bạn c&oacute; d&aacute;m chắc m&igrave;nh đảm bảo được tất cả yếu tố đ&oacute;?</p>\r\n\r\n<p><strong>4. &Aacute;o cổ vu&ocirc;ng, cổ tim</strong></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 8\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-475-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-7-1563158464-width500height668.jpg\" /></p>\r\n\r\n<p><img alt=\"4 loại quần áo dễ xấu nơi công sở - 9\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-16/1563240577-424-4-trang-phuc-de-phan-chu-hang-dau-noi-cong-so-8-1563158464-width500height745.jpg\" /></p>\r\n\r\n<p>Được coi như một trong những kiểu mốt phải c&oacute; của m&ugrave;a h&egrave; năm nay, &aacute;o cổ vu&ocirc;ng chẳng những được c&aacute;c t&iacute;n đồ đường phố săn đ&oacute;n, m&agrave; c&ograve;n được ưu &aacute;i nơi c&ocirc;ng sở. Phải thừa nhận rằng kiểu &aacute;o n&agrave;y rất dễ thương, nữ t&iacute;nh, nhưng chỉ khi ph&aacute;i đẹp c&ocirc;ng sở biết c&aacute;ch tiết chế, kh&ocirc;ng để khoảng hở vu&ocirc;ng vắn đi xa qu&aacute;, rộng qu&aacute;. Với &aacute;o cổ tim cũng vậy, chỉ cần một ch&uacute;t sơ sẩy, bạn sẽ trở n&ecirc;n k&eacute;m sang, ph&ocirc; phang thay v&igrave; duy&ecirc;n d&aacute;ng, y&ecirc;u kiều.</p>\r\n', '4-loai-quan-ao-de-xau-noi-cong-so.jpg', 'post', '', '', '2019-07-16 20:00:01', 28, '2019-07-26 21:01:38', 28, 1),
(6, 2, 'Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thíchaaaaaa', 'jacques-lemans-thuong-hieu-dong-ho-duoc-ngoi-sao-hollywood-kevin-costner-yeu-thichaaaaaa', '<p>Ra đời năm 1975 tại Thụy Sĩ, Jacques Lemans l&agrave; một trong những nh&agrave; sản xuất đồng hồ uy t&iacute;n h&agrave;ng đầu tr&ecirc;n to&agrave;n thế giới v&agrave; đứng vững trong nhiều thập kỷ nhờ c&aacute;c ti&ecirc;u chuẩn chất lượng cao nhất với gi&aacute; hợp l&yacute;.Đồng hồ Jacques Lemans l&agrave; một biểu tượng của Joie De Vivre v&agrave; phong c&aacute;ch.&nbsp;Họ thuyết phục qu&yacute; kh&aacute;ch h&agrave;ng bằng những d&ograve;ng đồng hồ đặc biệt chất lượng v&agrave; ho&agrave;n hảo đến từng chi tiết.&nbsp;Những chiếc đồng hồ của thương hiệu Jacques Lemans n&agrave;y l&agrave; thể hiện vẻ đẹp của thời đại.</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 1\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-11-1562732316-777-width660height660.jpg\" /></p>\r\n\r\n<p>Trải qua bao nhi&ecirc;u thăng trầm trong lịch sử ph&aacute;t triển của m&igrave;nh, đồng hồ Jacques Lemans lu&ocirc;n nhận được nhiều đ&aacute;nh gi&aacute; cao của giới chuy&ecirc;n m&ocirc;n tr&ecirc;n thế giới bởi chất liệu tốt, sử dụng c&ocirc;ng nghệ Thụy Sỹ đảm bảo độ ch&iacute;nh x&aacute;c cao, thiết kế đa dạng v&agrave; t&iacute;nh thẩm mỹ cao.</p>\r\n\r\n<p>Đồng hồ Jacques Lemans l&agrave; một biểu tượng của Joie De Vivre v&agrave; phong c&aacute;ch.&nbsp;Họ thuyết phục qu&yacute; kh&aacute;ch h&agrave;ng bằng những d&ograve;ng đồng hồ đặc biệt chất lượng v&agrave; ho&agrave;n hảo đến từng chi tiết.&nbsp;Những chiếc đồng hồ của thương hiệu Jacques Lemans n&agrave;y l&agrave; thể hiện vẻ đẹp của thời đại.</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 2\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-13-1562732316-18-width660height516.jpg\" /></p>\r\n\r\n<p>Đồng hồ Jacques Lemans được ph&acirc;n phối rộng khắp hơn 135 nước tr&ecirc;n thế giới. Chủ yếu tập trung tại ch&acirc;u &Acirc;u, ch&acirc;u &Aacute;, ch&acirc;u Phi&hellip; Đồng hồ mang đến những thiết kế v&ocirc; c&ugrave;ng độc đ&aacute;o, đa dạng, nhiều phong c&aacute;ch từ thanh lịch, c&aacute; t&iacute;nh đến thể thao, qu&yacute; ph&aacute;i để cho kh&aacute;ch h&agrave;ng lựa chọn.</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 3\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-15-1562732316-885-width660height445.jpg\" /></p>\r\n\r\n<p>Sau th&agrave;nh c&ocirc;ng với bộ sưu tập &quot;UEFA Champions League&quot; - một chiến thắng l&agrave;m kinh ngạc cả thế giới đồng hồ, Jacques Lemans đ&atilde; khẳng định vị tr&iacute; dẫn đầu trong thiết kế v&agrave; tiếp thị đồng hồ thể thao chất lượng cao. Hiện nay, Jacques Lemans&nbsp;l&agrave; h&atilde;ng đồng hồ duy nhất tr&ecirc;n thế giới được mang logo Formula 1&nbsp;TM&nbsp;(giải đua &ocirc;t&ocirc; c&ocirc;ng thức 1) tr&ecirc;n d&ograve;ng đồng hồ thể thao của m&igrave;nh.</p>\r\n\r\n<p>Diễn vi&ecirc;n đoạt giải Oscar Kevin Costner - đại sứ cho Jacques Lemans. &Ocirc;ng l&agrave; một diễn vi&ecirc;n, đạo diễn, nh&agrave; sản xuất, nhạc sỹ v&agrave; ca sĩ người Mỹ. Trong sự nghiệp của m&igrave;nh &ocirc;ng gi&agrave;nh được 2 giải Oscar, 3 giải quả cầu v&agrave;ng, 1 giải Ammy v&agrave; rất nhiều giải thướng quốc tế kh&aacute;c. Như vậy l&agrave; qu&aacute; đủ để cả thế giới ngả mũ trước t&agrave;i năng của &ocirc;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 4\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-16-1562732316-841-width660height660.jpg\" /></p>\r\n\r\n<p>Kể từ năm 2013, Kevin Costner đ&atilde; l&agrave; đại sứ thương hiệu cho Jacques Lemans. Năm 2014 Jacques Lemans tự h&agrave;o giới thiệu quan hệ đối t&aacute;c ch&iacute;nh thức trong bộ phim &ldquo;Black and White&ldquo; do Kevin Costner thủ vai ch&iacute;nh. Kevin Costner sẽ đeo đồng hồ Jacques Lemans trong to&agrave;n bộ phim v&agrave; kh&ocirc;ng c&oacute; g&igrave; tuyệt vời hơn sự hợp t&aacute;c th&agrave;nh c&ocirc;ng đ&oacute;.</p>\r\n\r\n<p>Một điểm nhấn trong mối quan hệ tốt đẹp n&agrave;y đ&oacute; l&agrave; sự ra đời của bộ sưu tập Jacques Lemans &ndash; Kevin Costner. Đ&acirc;y l&agrave; bộ sưu tập mang dấu ấn l&agrave; chữ k&iacute; v&agrave; t&ecirc;n của &ocirc;ng được t&ocirc;n vinh tr&ecirc;n mặt số đồng hồ. Với phong c&aacute;ch thiết kế lịch l&atilde;m v&agrave; thời thượng, bộ sưu tập n&agrave;y đ&atilde; thu h&uacute;t sự quan t&acirc;m của đ&ocirc;ng đảo kh&aacute;ch h&agrave;ng tr&ecirc;n to&agrave;n thế giới.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 5\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-17-1562732316-674-width660height660.jpg\" /></p>\r\n\r\n<p>Tại triển l&atilde;m đồng hồ lớn nhất thế giới BaselWorld 2015 diễn ra ở Thụy Sỹ, Đăng Quang Watch đ&atilde; c&oacute; cuộc gặp gỡ với đại diện quốc tế của Jacques Lemans. Với uy t&iacute;n của m&igrave;nh Đăng Quang Watch đ&atilde; trở th&agrave;nh nh&agrave; ph&acirc;n phối ch&iacute;nh thức cho Jacques Lemans tr&ecirc;n thị trường Việt Nam.</p>\r\n\r\n<p><img alt=\"Jacques Lemans - Thương hiệu đồng hồ được ngôi sao Hollywood Kevin Costner yêu thích - 6\" src=\"https://cdn.24h.com.vn/upload/3-2019/images/2019-07-10/JACQUES-LEMANS--Thuong-hieu-dong-ho-duoc-ngoi-sao-Hollywood-Kevin-Costner-yeu-thich-18-1562732316-515-width660height473.jpg\" /></p>\r\n\r\n<p>Sự c&oacute; mặt của Jacques Lemans đem đến lựa chọn th&uacute; vị cho đ&ocirc;ng đảo người ti&ecirc;u d&ugrave;ng Việt Nam. Với gi&aacute; th&agrave;nh kh&aacute; rẻ dao động từ tr&ecirc;n 100 USD đến hơn 600 USD, một chiếc đồng hồ c&oacute; thương hiệu Thụy Sỹ bền bỉ th&igrave; ch&uacute;ng ta kh&oacute; c&oacute; thể t&igrave;m thương hiệu n&agrave;o kh&aacute;c thay thế được Jacques Lemans.</p>\r\n\r\n<p>Jacques Lemans l&agrave; lựa chọn xứng tầm với những kh&aacute;ch h&agrave;ng s&agrave;nh điệu, n&oacute; khiến bạn nhận ra những khoảnh khắc độc đ&aacute;o, khơi dậy cảm x&uacute;c v&agrave; gợi l&ecirc;n nụ cười với mọi &aacute;nh nh&igrave;n tr&ecirc;n cổ tay.</p>\r\n', 'jacques-lemans-thuong-hieu-dong-ho-duoc-ngoi-sao-hollywood-kevin-costner-yeu-thich.jpg', 'post', '', '', '2019-07-16 20:16:32', 28, '2019-07-26 21:04:24', 28, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_product`
--

CREATE TABLE `latnt_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `catid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `detail` longtext NOT NULL,
  `number` int(11) UNSIGNED NOT NULL,
  `numberReceipt` int(11) NOT NULL,
  `price` float(12,0) NOT NULL,
  `pricesale` float(12,0) NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_product`
--

INSERT INTO `latnt_product` (`id`, `catid`, `name`, `slug`, `img`, `detail`, `number`, `numberReceipt`, `price`, `pricesale`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(11, 6, 'OYSTER PERPETUAL 118348 DAY-DATE 36', 'oyster-perpetual-118348-day-date-36', 'oyster-perpetual-118348-day-date-36.png', '     DIAMOND PAVED DIAL\r\nGem-setters, like sculptors, finely carve the precious metal to hand-shape the seat in which each gemstone will be perfectly lodged. With the art and craft of a jeweller, the stone is placed and meticulously aligned with the others, then firmly secured in its gold or platinum setting. Besides the intrinsic quality of the stones, several other criteria contribute to the beauty of Rolex gem-setting: the precise alignment of the height of the gems, their orientation and position, the regularity, strength and proportions of the setting as well as the intricate finishing of the metalwork. \r\nA sparkling symphony to enhance the watch and enchant the wearer.\r\n \r\nTHE PRESIDENT BRACELET\r\nThe design, development and production of Rolex bracelets and clasps, as well as the stringent tests they face, involve advanced high technology. And, as with all the components of the watch, aesthetic controls by the human eye guarantee impeccable beauty. The President bracelet, with its semi-circular three piece links, was created in 1956 for the launch of the Oyster Perpetual Day-Date. It represents the ultimate in refinement and comfort and is always made of carefully selected precious metals.\r\n \r\n3155 MOVEMENT\r\nThe Day-Date 36 is equipped with calibre 3155, a self-winding mechanical movement entirely developed and manufactured by Rolex. It features a day and date calendar disc mechanism. Like all Rolex Perpetual movements, the 3155 is a certified Swiss chronometer, a designation reserved for high-precision watches that have successfully passed the Swiss Official Chronometer Testing Institute (COSC) tests. Its architecture, in common with all Oyster watch movements, makes it singularly reliable.\r\n \r\nMONDAY, LUNDI\r\nInitially presented in 1956, the Day-Date was a world first. The first watch to indicate the day of the week spelt out in full. Worn by many world leaders, the Day-Date is available with a bespoke day display in a wide choice of languages.', 30, 30, 1000, 1000, 'OYSTER PERPETUAL', '     OYSTER PERPETUAL', '2019-07-06 03:34:15', 28, '2019-07-06 03:51:02', 28, 1),
(12, 6, 'OYSTER PERPETUAL 118348 DAY-DATE 38', 'oyster-perpetual-118348-day-date-38', 'oyster-perpetual-118348-day-date-38.jpg', '     DIAMOND PAVED DIAL\r\nGem-setters, like sculptors, finely carve the precious metal to hand-shape the seat in which each gemstone will be perfectly lodged. With the art and craft of a jeweller, the stone is placed and meticulously aligned with the others, then firmly secured in its gold or platinum setting. Besides the intrinsic quality of the stones, several other criteria contribute to the beauty of Rolex gem-setting: the precise alignment of the height of the gems, their orientation and position, the regularity, strength and proportions of the setting as well as the intricate finishing of the metalwork. \r\nA sparkling symphony to enhance the watch and enchant the wearer.\r\n \r\n', 2, 30, 100000, 100000, 'a', 'a', '2019-07-06 03:54:37', 28, '2019-07-06 03:54:37', 28, 1),
(13, 6, 'OYSTER PERPETUAL 118348 DAY-DATE 47', 'oyster-perpetual-118348-day-date-47', 'oyster-perpetual-118348-day-date-47.jpg', '     DIAMOND PAVED DIAL\r\nGem-setters, like sculptors, finely carve the precious metal to hand-shape the seat in which each gemstone will be perfectly lodged. With the art and craft of a jeweller, the stone is placed and meticulously aligned with the others, then firmly secured in its gold or platinum setting. Besides the intrinsic quality of the stones, several other criteria contribute to the beauty of Rolex gem-setting: the precise alignment of the height of the gems, their orientation and position, the regularity, strength and proportions of the setting as well as the intricate finishing of the metalwork. \r\nA sparkling symphony to enhance the watch and enchant the wearer.\r\n \r\n', 15, 30, 100000, 100000, 'a', 'a', '2019-07-06 04:02:11', 28, '2019-07-06 04:02:11', 28, 1),
(14, 6, 'TAG HEUER CARRERA CAR201M.FT6156 CALIBRE HEUER 01 43', 'tag-heuer-carrera-car201m-ft6156-calibre-heuer-01-43', 'tag-heuer-carrera-car201m-ft6156-calibre-heuer-01-43.jpg', 'A sport watch matching the Red Devil’s spirit: powerful, technical and always at the avant-garde\r\n\r\nSIZE\r\n43 mm\r\nWATER RESISTANCE\r\n100 M\r\nBODY CASE\r\nFine-brushed and polished steel\r\nBEZEL\r\nFixed\r\nFine-brushed and polished steel\r\nTachymeter scale\r\nTAG Heuer Carrera Case\r\nCRYSTAL\r\nSapphire with antireflective treatment on both sides\r\nCASE BACK\r\nSapphire\r\nManchester United special decoration\r\nFINISHING\r\nBlack gold skeleton\r\nRhodium plated luminescent indexes\r\nTAG Heuer Carrera Dial \r\nMOVEMENT\r\nCalibre Heuer 01\r\nManufacture\r\nSwiss Made\r\nPOWER RESERVE\r\nAbout 40 hours\r\nWINDING SYSTEM\r\nAutomatic\r\nFUNCTIONS\r\nHours, minutes, seconds at 9\r\nChronograph : 1/4 second, 30 minutes counter, 12 hours counter', 10, 30, 132000, 130000, 'a', 'a', '2019-07-06 04:04:20', 28, '2019-07-06 04:04:20', 28, 1),
(15, 6, 'DIVER 300M 210.20.42.20.03.001 CO‑AXIAL MASTER 42', 'diver-300m-210-20-42-20-03-001-co-axial-master-42', 'diver-300m-210-20-42-20-03-001-co-axial-master-42.jpg', ' Since 1993, the Seamaster Professional Diver 300M has enjoyed a legendary following. Today’s modern collection has embraced that famous ocean heritage and updated it with OMEGA’s best innovation and design.\r\n \r\nThis 42 mm model is crafted from stainless steel and 18K yellow gold, and includes a blue ceramic bezel with a Ceragold™ diving scale. The dial is also polished blue ceramic and features laser-engraved waves and a date window at 6 o’clock.\r\n \r\nThe skeleton hands and raised indexes are 18K yellow gold and are filled with white Super-LumiNova, while the helium escape valve has been given a conical design.\r\n \r\nThe watch is presented on a stainless steel and 18K yellow gold bracelet and is driven by the OMEGA Master Chronometer Calibre 8800, which can be seen through the sapphire-crystal on the wave-edged caseback.\r\n \r\n5-YEAR WARRANTY\r\nAll OMEGA watches are delivered with a 5-year warranty that covers the repair of any material or manufacturing defects. Please refer to the operating instructions for specific information about the warranty conditions and restrictions', 15, 30, 1000, 1000, 'a', ' a', '2019-07-06 04:06:14', 28, '2019-07-06 04:06:25', 28, 1),
(16, 6, 'OMEGA DE VILLE TRÉSOR 428.58.36.60.11.001 QUARTZ 36', 'omega-de-ville-tresor-428-58-36-60-11-001-quartz-36', 'omega-de-ville-tresor-428-58-36-60-11-001-quartz-36.jpg', 'DESCRIPTION\r\nOMEGA has a long tradition of creating beautiful watches for women. In this contemporary collection, each watch has been crafted with a pure design and a truly modern edge.\r\n \r\nThe slim 36 mm case is made from 18K Moonshine™ gold and features diamond paving that curves along each side, as well as a crown that is polished with red liquid ceramic and set with a single diamond. The lacquered gradient red garnet dial includes applied Roman numerals and elegant 18K Moonshine™ gold hands.\r\n \r\nThe watch is driven by the OMEGA calibre 4061, which sits behind a special mirrored caseback with a metalized “Her Time” pattern. Finally, the watch is presented on a shiny red garnet leather strap with a Trésor buckle.', 13, 30, 1000, 11000, 'a', 'a', '2019-07-06 04:09:00', 28, '2019-07-06 04:09:00', 28, 1),
(17, 6, 'HUGO Dare Watch 1530019 Exclusiveaaa', 'hugo-dare-watch-1530019-exclusiveaaa', 'hugo-dare-watch-1530019-exclusive.jpg', ' HUGO Dare 1530019 is a functional and very impressive Gents watch from DARE collection. Material of the case is Gold Ion-plated Steel while the dial colour is Grey. In regards to the water resistance, the watch has got a resistancy up to 30 metres. It means it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. We ship it with an original box and a guarantee from the manufacturer.', 17, 30, 1000, 1000, 'a', ' a', '2019-07-06 04:11:02', 28, '2019-07-06 04:11:39', 28, 1),
(19, 5, 'MICHAEL Michael Kors 001', 'michael-michael-kors-001', 'michael-michael-kors-001.jpg', '<h2><span style=\"font-size:12px\">Một mẫu thiết kế Ultraboost cực độc từ Adidas sẽ được tung ra trong m&ugrave;a h&egrave; n&agrave;y d&agrave;nh ri&ecirc;ng cho những người h&acirc;m mộ của Manchester United.</span></h2>\r\n\r\n<ul>\r\n	<li><a href=\"https://thethao247.vn/318-bat-ngo-truoc-ve-dep-tinh-te-cua-giay-da-bong-new-balance-furon-v5-d183789.html\" title=\"Bất ngờ trước vẻ đẹp tinh tế của giày đá bóng New Balance Furon v5\">Bất ngờ trước vẻ đẹp tinh tế của gi&agrave;y đ&aacute; b&oacute;ng New Balance Furon v5</a></li>\r\n	<li><a href=\"https://thethao247.vn/318-mizuno-ra-mat-bst-giay-da-bong-moi-100-duoc-lam-tai-nhat-d183784.html\" title=\"Mizuno ra mắt BST giày đá bóng mới: 100% được làm tại Nhật\">Mizuno ra mắt BST gi&agrave;y đ&aacute; b&oacute;ng mới: 100% được l&agrave;m tại Nhật</a></li>\r\n	<li><a href=\"https://thethao247.vn/318-5-loai-qua-giam-can-tot-nhat-ban-nen-an-vao-buoi-toi-d183752.html\" title=\"5 loại quả giảm cân tốt nhất bạn nên ăn vào buổi tối\">5 loại quả giảm c&acirc;n tốt nhất bạn n&ecirc;n ăn v&agrave;o buổi tối</a></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adidas Inky Ultraboost kỷ niệm 110 năm Manchester United v&ocirc; địch FA Cup</p>\r\n\r\n<p><strong>Manchester United</strong>&nbsp;v&ocirc; địch FA Cup lần đầu ti&ecirc;n v&agrave;o năm 1909.</p>\r\n\r\n<p>Nhằm kỷ niệm sự kiện đặc biệt n&agrave;y, Adidas với tư c&aacute;ch l&agrave; nh&agrave; t&agrave;i trợ ch&iacute;nh của MU hiện tại đ&atilde; tung ra một đ&ocirc;i Ultraboost với m&agrave;u đen to&agrave;n bộ cực độc mang t&ecirc;n&nbsp;<strong>&quot;Inky Ultraboost&quot;</strong>.</p>\r\n\r\n<p>Phi&ecirc;n bản c&oacute; một kh&ocirc;ng hai n&agrave;y của Ultraboost được ph&aacute;t triển dựa tr&ecirc;n mẫu&nbsp;<strong>Ultraboost 4.0</strong>.</p>\r\n\r\n<p>To&agrave;n bộ th&acirc;n gi&agrave;y được dệt nguy&ecirc;n khối với vải lưới m&agrave;u đen bằng&nbsp;<a href=\"https://thethao247.vn/318-cong-nghe-primeknit-tren-giay-adidas-ultraboost-co-gi-hay-d178381.html\" target=\"_blank\">c&ocirc;ng nghệ Primeknit</a>. Ngay cả lớp&nbsp;<a href=\"https://thethao247.vn/318-cuoc-chien-dem-giay-khoc-liet-giua-puma-va-adidas-d177293.html\" target=\"_blank\">đệm giảm chấn boost</a>&nbsp;của gi&agrave;y cũng được thể hiện với m&agrave;u đen to&agrave;n bộ.</p>\r\n', 11, 30, 1000, 1000, 'a', '    a', '2019-07-06 04:17:14', 28, '2019-07-17 03:05:53', 28, 1),
(20, 5, 'MICHAEL Michael Kors 003 black', 'michael-michael-kors-003-black', 'aa.jpg', 'Already a legend in American sportswear, Michael Kors launched diffusion label MICHAEL Michael Kors in 2004. A collection of stylish yet affordable ready-to-wear, swimwear, and accessories, MICHAEL Michael Kors reinforces the brand’s core philosophy: “powerful, confident urban dressing for modern times.”\r\n', 23, 30, 3000, 3000, 'aa', ' aaa', '2019-07-06 04:17:32', 28, '2019-07-12 03:23:51', 28, 1),
(21, 17, 'MICHAEL Michael Kors 005 Style Black', 'michael-michael-kors-005-style-black', 'aaaaaaa.jpg', ' Already a legend in American sportswear, Michael Kors launched diffusion label MICHAEL Michael Kors in 2004. A collection of stylish yet affordable ready-to-wear, swimwear, and accessories, MICHAEL Michael Kors reinforces the brand’s core philosophy: “powerful, confident urban dressing for modern times.”\r\n', 25, 30, 1000, 1000, 'aaaaaaa', '  aaaaa', '2019-07-06 04:17:53', 28, '2019-07-12 03:23:29', 28, 1),
(22, 17, 'Gold M Buckle Reversible Belt  ', 'gold-m-buckle-reversible-belt', 'q.jpg', 'MCM\r\nGold M Buckle Reversible Belt  \r\n$295.00\r\nColor: Black\r\n\r\nSizes \r\nOne Size\r\n Size & Fit Information\r\nPlease Select A Size\r\nAdd To Cart\r\nAdd To Wish List\r\nFREE shipping and FREE returns\r\nDETAILS\r\nLeather: Cowhide\r\nPebbled leather\r\n24k gold buckle\r\nAdjustable\r\nImported, Korea\r\nStyle #MCMMM30738\r\nMeasurements\r\nWidth: 1.5in / 4cm\r\nThis MCM reversible belt is constructed for versatility. A 24k-gold buckle is a luxurious finishing touch.', 17, 30, 5000, 4000, 'q', '  q', '2019-07-06 04:18:42', 28, '2019-07-06 04:29:40', 28, 1),
(23, 18, 'NEEL MAGNETIC CARD CASE', 'neel-magnetic-card-case', 'v.jpg', ' v', 29, 30, 1000, 1000, 'v', ' v', '2019-07-06 04:19:54', 28, '2019-10-14 23:01:11', 0, 1),
(24, 4, 'Covern blue 0099', 'covern-blue-0099', 'u.jpg', '<p>Silhouette: Coin Pocket Bifold Exterior Material: Leather Interior Details: 1 Bill Compartment and 6 Credit Card Slots Measurements: 3.5&quot;L x 0.75&quot;W x 3.75&quot;H Warranty: 1 Year Limited</p>\r\n', 30, 30, 1000, 1000, 'w', '  qw', '2019-07-06 04:25:01', 28, '2019-10-14 23:01:12', 0, 1),
(25, 17, 'MICHAEL Michael Kors  03123', 'michael-michael-kors-03123', 'ddd.jpg', '   Already a legend in American sportswear, Michael Kors launched diffusion label MICHAEL Michael Kors in 2004. A collection of stylish yet affordable ready-to-wear, swimwear, and accessories, MICHAEL Michael Kors reinforces the brand’s core philosophy: “powerful, confident urban dressing for modern times.”', 1, 30, 1000, 1000, 'dD', '       D', '2019-07-06 04:33:19', 28, '2019-12-18 03:06:04', 28, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_slider`
--

CREATE TABLE `latnt_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` varchar(100) NOT NULL,
  `sale` varchar(100) NOT NULL,
  `saletitel` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `orders` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_slider`
--

INSERT INTO `latnt_slider` (`id`, `name`, `url`, `position`, `sale`, `saletitel`, `img`, `orders`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(2, 'slider2aaaaaaaaaaa', 'slider2aaaaaaaaaaa', 'slideshow', 'HOT DEAL', '       Up to 50% OFF', 'banner01.jpg', 0, '2019-07-06 22:09:30', 37, '2019-10-14 19:58:36', 28, 1),
(3, 'slider3', 'slider1', 'slideshow', 'New Product', 'Collection', 'banner03.jpg', 0, '0000-00-00 00:00:00', 1, '2019-07-06 22:16:12', 28, 1),
(8, 'slider2', 'slider2', 'slideshow', 'HOT DEAL', '      Up to 50% OFF', 'banner02.jpg', 0, '0000-00-00 00:00:00', 1, '2019-07-06 22:16:12', 28, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_theme`
--

CREATE TABLE `latnt_theme` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_topic`
--

CREATE TABLE `latnt_topic` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parentid` int(11) UNSIGNED NOT NULL,
  `orders` int(11) UNSIGNED NOT NULL,
  `metakey` varchar(150) NOT NULL,
  `metadesc` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_topic`
--

INSERT INTO `latnt_topic` (`id`, `name`, `slug`, `parentid`, `orders`, `metakey`, `metadesc`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Giới Thiệu', 'gioi-thieu', 0, 1, '', '', '2019-07-16 18:29:41', 28, '2019-07-26 20:49:42', 28, 1),
(2, 'Tin Tức', 'tin-tuc', 0, 1, '', '', '2019-07-16 18:29:48', 28, '2020-01-02 05:33:23', 28, 1),
(3, 'Thời Sự', 'thoi-sua', 0, 1, '', '', '2019-07-16 18:29:00', 28, '2019-07-26 20:51:38', 28, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `latnt_user`
--

CREATE TABLE `latnt_user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `access` int(11) NOT NULL,
  `ad_access` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) UNSIGNED NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `latnt_user`
--

INSERT INTO `latnt_user` (`user_id`, `fullname`, `username`, `password`, `email`, `gender`, `phone`, `img`, `access`, `ad_access`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(28, 'Huỳnh Đại Nghĩa', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'latnt@gmail.com', 0, '0964290200', 'admin.jpg', 1, 1, '2019-01-04 23:53:00', 0, '2019-01-06 20:54:43', 0, 1),
(37, 'Phạm Nhật Tùng', 'adminbt', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'latnt@gmail.com', 0, '0964290200', '', 1, 0, '2019-12-06 23:57:27', 0, '2019-12-16 20:51:43', 0, 1),
(38, 'Long Chó', 'longngu', '06f6c9c88907760070e6de4653e683ff2776e96a', 'longngu@gmail.com', 1, '0945333156', '', 0, 1, '2019-12-20 00:33:00', 1, '2019-12-20 20:38:34', 0, 1),
(39, 'Hoàng Đức Tú', 'tudeptrai', '93e7238e32287bb819fe9784fff9a575b7e66fce', 'tudeptrai@gmail.com', 0, '19001990', NULL, 1, 0, '2019-12-20 00:33:00', 1, '2019-12-20 20:38:34', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `latnt_category`
--
ALTER TABLE `latnt_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_comment`
--
ALTER TABLE `latnt_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_config`
--
ALTER TABLE `latnt_config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_counter`
--
ALTER TABLE `latnt_counter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time` (`id`);

--
-- Chỉ mục cho bảng `latnt_feedback`
--
ALTER TABLE `latnt_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_menu`
--
ALTER TABLE `latnt_menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_orders`
--
ALTER TABLE `latnt_orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_ordersdetail`
--
ALTER TABLE `latnt_ordersdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_post`
--
ALTER TABLE `latnt_post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_product`
--
ALTER TABLE `latnt_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_theme`
--
ALTER TABLE `latnt_theme`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_topic`
--
ALTER TABLE `latnt_topic`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `latnt_user`
--
ALTER TABLE `latnt_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `latnt_category`
--
ALTER TABLE `latnt_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `latnt_comment`
--
ALTER TABLE `latnt_comment`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT cho bảng `latnt_config`
--
ALTER TABLE `latnt_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `latnt_counter`
--
ALTER TABLE `latnt_counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `latnt_feedback`
--
ALTER TABLE `latnt_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `latnt_menu`
--
ALTER TABLE `latnt_menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `latnt_orders`
--
ALTER TABLE `latnt_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `latnt_ordersdetail`
--
ALTER TABLE `latnt_ordersdetail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `latnt_post`
--
ALTER TABLE `latnt_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `latnt_product`
--
ALTER TABLE `latnt_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `latnt_theme`
--
ALTER TABLE `latnt_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `latnt_topic`
--
ALTER TABLE `latnt_topic`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `latnt_user`
--
ALTER TABLE `latnt_user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
