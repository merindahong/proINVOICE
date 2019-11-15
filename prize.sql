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
-- 資料表結構 `prize`
--

CREATE TABLE `prize` (
  `id` int(4) UNSIGNED NOT NULL COMMENT '序號 ',
  `year` year(4) NOT NULL COMMENT '年份',
  `term` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '期別',
  `special` char(8) NOT NULL COMMENT '特別獎',
  `grand1` char(8) NOT NULL COMMENT '頭獎1',
  `crown` char(8) NOT NULL COMMENT '特獎',
  `grand2` char(8) NOT NULL COMMENT '頭獎2',
  `grand3` char(8) NOT NULL COMMENT '頭獎3',
  `extra1` char(3) NOT NULL COMMENT '加獎1',
  `extra2` char(3) NOT NULL COMMENT '加獎2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `prize`
--

INSERT INTO `prize` (`id`, `year`, `term`, `special`, `grand1`, `crown`, `grand2`, `grand3`, `extra1`, `extra2`) VALUES
(1, 2019, '0102', '12345678', '20202123', '20192019', '30303456', '40404789', '505', '606'),
(8, 2019, '0304', '57575757', '30303030', '87878787', '50505050', '60606060', '543', '110'),
(17, 2019, '0506', '20304050', '21314151', '22324252', '23242526', '24252627', '789', '111'),
(18, 2019, '0708', '80009000', '70006000', '50004000', '30002000', '40001000', '200', '300');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '序號 ', AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
