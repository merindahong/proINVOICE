-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invtb`
--

CREATE TABLE `invtb` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '序號',
  `year` year(4) NOT NULL COMMENT '年份',
  `term` char(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期別',
  `track` char(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT ' 字軌',
  `number` char(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '號碼',
  `amount` int(6) NOT NULL COMMENT '金額'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invtb`
--

INSERT INTO `invtb` (`id`, `year`, `term`, `track`, `number`, `amount`) VALUES
(1, 2019, '01-02', 'TW', '12121212', 100),
(2, 2019, '01-02', 'NY', '13131313', 200),
(3, 2019, '01-02', 'LN', '14141414', 100),
(4, 2019, '01-02', 'NY', '15151515', 200),
(5, 2019, '01-02', 'YY', '16161616', 100),
(6, 2019, '01-02', 'TN', '20190110', 200),
(7, 2019, '01-02', 'BG', '20190543', 100),
(8, 2019, '01-02', 'NY', '20190515', 200),
(9, 2019, '03-04', 'PM', '12345678', 200),
(10, 2019, '03-04', 'BG', '21212121', 200),
(11, 2019, '03-04', 'PQ', '23232323', 400),
(12, 2019, '03-04', 'BG', '24242424', 400),
(13, 2019, '03-04', 'PM', '25252525', 400),
(14, 2019, '03-04', 'NY', '26262626', 400),
(15, 2019, '03-04', 'PM', '25252001', 400),
(16, 2019, '03-04', 'TW', '26262600', 400),
(17, 2019, '03-04', 'LQ', '28282828', 600),
(18, 2019, '03-04', 'TW', '53535002', 400),
(19, 2019, '03-04', 'HT', '12356849', 800),
(20, 2019, '05-06', 'HJ', '25458790', 3000),
(21, 2019, '05-06', 'SQ', '61626364', 3200),
(22, 2019, '05-06', 'QR', '23252629', 4500),
(23, 2019, '05-06', 'WJ', '25698457', 2400),
(24, 2019, '05-06', 'QR', '25468487', 3500),
(25, 2019, '05-06', 'QR', '25468487', 3500);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invtb`
--
ALTER TABLE `invtb`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invtb`
--
ALTER TABLE `invtb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
