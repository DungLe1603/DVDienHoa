-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 06:16 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dienhoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidat` text COLLATE utf8_unicode_ci NOT NULL,
  `sdtnguoidat` text COLLATE utf8_unicode_ci NOT NULL,
  `nguoinhan` text COLLATE utf8_unicode_ci NOT NULL,
  `sdtnguoinhan` text COLLATE utf8_unicode_ci NOT NULL,
  `diachinhan` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` datetime NOT NULL,
  `dongia` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `masp`, `nguoidat`, `sdtnguoidat`, `nguoinhan`, `sdtnguoinhan`, `diachinhan`, `thoigian`, `dongia`) VALUES
('dh01', 'SP01', 'Đinh Tấn Nam', '0987543234', 'Ngô Thùy Trinh', '0978675645', '58 Hoàng Diệu, Đà Nẵng', '2018-05-18 14:00:00', '200000'),
('dh02', 'SP03', 'Ngô Đình Quốc', '0987543236', 'Thùy Linh', '0977775645', '60 Ngô Sỹ Liên, Đà Nẵng', '2018-05-10 14:00:00', '400000'),
('dh03', 'SP04', 'Hoàng Hải', '097867655', 'Hứa Thị Phượng', '0978677760', 'Thanh Khê, Đà Nẵng', '2018-05-24 18:30:00', '250000'),
('dh05', 'SP03', 'Nguyễn Tấn Bắc', '01645276654', 'Mai Phương', '0977775342', '67 Đồng Kè, Đà Nẵng', '2018-05-21 10:00:00', '400000'),
('dh08', 'SP02', 'Nguyễn Đình Thi', '0987993234', 'Đặng Mỹ Hương', '0978675888', '89 Nguyễn Lương Bằng, Đà Nẵng', '2018-05-19 08:00:00', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `sampham`
--

CREATE TABLE IF NOT EXISTS `sampham` (
  `masp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tensp` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `gia` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sampham`
--

INSERT INTO `sampham` (`masp`, `tensp`, `loai`, `mota`, `gia`) VALUES
('SP01', 'Special Love', 'Bó hoa tươi', 'Một bó hoa tình yêu được thiết kế từ những bông hồng lạ mà ít người có được sẽ tạo cảm giác tình yêu bạn dành cho người ấy thật đặc biệt. ', '200000'),
('SP02', 'Bùng cháy', 'Hộp hoa tươi', 'Mượn màu đỏ của Hoa Hồng làm màu chủ đạo, “Bùng cháy” chất chứa trong mình thông điệp về việc thể hiện cảm xúc của mỗi người. “Bùng cháy” có thể là sự nổ tung, chìm đắm trong tình yêu, cũng có thể là sự tuôn trào nhiệt huyết của tuổi trẻ hay cảm giác tự hào khi vượt qua biết bao gian lao, thử thách … Dù những cảm xúc ấy có gửi đến ai đi chăng nữa thì đó cũng là tình cảm mãnh liệt và chân thành nhất. Chọn “Bùng cháy” để gửi tặng đến một người cũng có nghĩa ta quý trọng và tin yêu họ biết bao nhiêu!', '300000'),
('SP03', 'Gõ cửa trái tim', 'Bó hoa tươi', 'Trao cho nhau món quà thể hiện tình cảm là một cách bày tỏ tâm ý và đến gần với nhau hơn nữa. “Gõ cửa trái tim” là bó hoa đặc biệt như vậy, được thiết kế như một món quà giành cho những cặp đôi đang phải lòng nhau. Knock Knock Knock! Gõ từng nhịp vào trái tim từng để lắng nghe những lời chân tình, những lời yêu thương ngọt ngào nhất!', '400000'),
('SP04', 'Phi yến tinh khôi', 'Bó hoa tươi', 'Sắc trắng của loài hoa phi yến thật tinh khôi và thuần khiết. Với kiểu bó đơn giản và mộc mạc vẫn tôn lên vẻ đẹp của loài hoa của tháng 12 - tháng của yêu thương.', '350000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('dung', '123'),
('nhan', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`), ADD KEY `masp` (`masp`);

--
-- Indexes for table `sampham`
--
ALTER TABLE `sampham`
  ADD PRIMARY KEY (`masp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sampham` (`masp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
