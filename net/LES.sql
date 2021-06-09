-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.24-MariaDB
-- PHP 版本： 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `love_earth_system`
--

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `GID` int(25) NOT NULL COMMENT '物品編號',
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '物品名稱',
  `keyword` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '關鍵字'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `UID` int(25) NOT NULL COMMENT '管理者編號',
  `account` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '帳號',
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '名稱',
  `phone` int(15) DEFAULT NULL COMMENT '電話號碼',
  `E-mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '信箱',
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT '地址'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `manager`
--

INSERT INTO `manager` (`UID`, `account`, `password`, `name`, `phone`, `E-mail`, `address`) VALUES
(0, 'admin304', 'lab304', '測試帳號', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `mylove`
--

CREATE TABLE `mylove` (
  `UID` int(25) NOT NULL COMMENT '使用者編號',
  `PID` int(25) NOT NULL COMMENT '貼文編號'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `post`
--

CREATE TABLE `post` (
  `PID` int(25) NOT NULL COMMENT '貼文編號',
  `picture` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '圖片',
  `quantity` int(100) NOT NULL COMMENT '數量',
  `item_address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '物品地址',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT '物品描述',
  `poster` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '發佈者',
  `verify` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '審核'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `RID` int(25) NOT NULL COMMENT '交易編號',
  `UID_1` int(25) NOT NULL COMMENT '使用者一',
  `UID_2` int(25) NOT NULL COMMENT '使用者二',
  `PID` int(25) NOT NULL COMMENT '貼文編號',
  `GID_1` int(25) NOT NULL COMMENT '物品一',
  `GID_2` int(25) NOT NULL COMMENT '物品二',
  `record_time` datetime NOT NULL COMMENT '交易時間',
  `success` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No' COMMENT '是否成功'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `UID` int(25) NOT NULL COMMENT '使用者編號',
  `account` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '帳號',
  `password` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '名稱',
  `phone` int(15) DEFAULT NULL COMMENT '電話號碼',
  `E-mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '信箱',
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT '地址',
  `token` varchar(50) NOT NULL COMMENT '帳號啟用碼',
  `token_exptime` varchar(10) NOT NULL COMMENT '啟用碼時效',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '未啟用 0 啟用 1',
  `regtime` int(10) NOT NULL COMMENT '帳號註冊時間'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`UID`, `account`, `password`, `name`, `phone`, `E-mail`, `address`, `token`, `token_exptime`, `status`, `regtime`) VALUES
(1, 'abc', '123', 'YD', 0, 'YD@gmail.com', '虎尾家樂福', 'A', 'A', 0, 6091004),
(2, 'def', '456', 'OD', 1, 'OD@gmail.com', '民主六路56號', 'B', 'B', 0, 6091009);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`GID`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`UID`);

--
-- 資料表索引 `mylove`
--
ALTER TABLE `mylove`
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- 資料表索引 `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PID`);

--
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `UID_1` (`UID_1`),
  ADD KEY `UID_2` (`UID_2`),
  ADD KEY `GID_1` (`GID_1`),
  ADD KEY `GID_2` (`GID_2`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `mylove`
--
ALTER TABLE `mylove`
  ADD CONSTRAINT `mylove_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `mylove_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `post` (`PID`);

--
-- 資料表的 Constraints `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`GID_1`) REFERENCES `item` (`GID`),
  ADD CONSTRAINT `record_ibfk_2` FOREIGN KEY (`GID_2`) REFERENCES `item` (`GID`),
  ADD CONSTRAINT `record_ibfk_3` FOREIGN KEY (`UID_1`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `record_ibfk_4` FOREIGN KEY (`UID_2`) REFERENCES `user` (`UID`),
  ADD CONSTRAINT `record_ibfk_5` FOREIGN KEY (`PID`) REFERENCES `post` (`PID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
