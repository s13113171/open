-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015-12-07: 22:53:42
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `open`
--

-- --------------------------------------------------------

--
-- 資料表結構 `nn`
--

CREATE TABLE IF NOT EXISTS `nn` (
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `video` varchar(500) COLLATE utf8_bin NOT NULL,
  `km` varchar(50) COLLATE utf8_bin NOT NULL,
  `nors` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `nn`
--

INSERT INTO `nn` (`name`, `video`, `km`, `nors`) VALUES
('高雄 - 瑞隆路', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=130&1449497282459', '368.51', '北'),
('高雄 - 瑞隆路', '0', '368.51', '南'),
('鼎金系統 - 高雄', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=128&1449497431725', '364.50', '北'),
('鼎金系統 - 高雄', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=129&1449497470902', '365.71', '南'),
('楠梓 - 鼎金系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=133&1449497587991', '361.65', '北'),
('楠梓 - 鼎金系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=126&1449497530675', '360.69', '南'),
('岡山 - 楠梓', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=102&1449497629710', '353.83', '北'),
('岡山 - 楠梓', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=115&1449497654314', '350.00', '南'),
('高科 - 岡山', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=387&1449497688633', '347.40', '北'),
('高科 - 岡山', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=100&1449497727513', '346.79', '南'),
('路竹 - 高科', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=112&1449497752596', '340.29', '北'),
('路竹 - 高科', '0', '340.29', '南'),
('仁德系統 - 路竹', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=69&1449497835647', '335.20', '北'),
('仁德系統 - 路竹', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=70&1449497869829', '336.53', '南'),
('大灣 - 仁德系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=66&1449497927536', '330.0', '南'),
('大灣 - 仁德系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=72&1449497961937', '328.78', '北'),
('永康 - 大灣', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=90&1449498005188', '321.70', '北'),
('永康 - 大灣', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=386&1449498048884', '320.84', '南'),
('台南系統 - 永康', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=384&1449498073329', '316.18', '北'),
('台南系統 - 永康', '0', '316.18', '南'),
('安定 - 台南系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=383&1449498122716', '312.01', '北'),
('安定 - 台南系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=49&1449498150579', '313.50', '南'),
('麻豆 - 安定', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=48&1449498178821', '310.75', '北'),
('麻豆 - 安定', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=47&1449498211848', '304.71', '南'),
('下營系統 - 麻豆', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=46&1449498249407', '303.48', '北'),
('下營系統 - 麻豆', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=381&1449498264486', '301.90', '南'),
('新營 - 下營系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=379&1449498286008', '295.17', '北'),
('新營 - 下營系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=33&1449498303663', '293.49', '南'),
('新營服務區 - 新營', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=32&1449498338654', '288.30', '北'),
('新營服務區 - 新營', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=42&1449498369449', '288.00', '南'),
('嘉義系統 - 新營服務區', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=38&1449498395246', '278.10', '北'),
('嘉義系統 - 新營服務區', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=377&1449498419514', '274.78', '南'),
('水上 - 嘉義系統', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=07&1449498438261', '271.20', '北'),
('水上 - 嘉義系統', '0', '271.20', '南'),
('嘉義 - 水上', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=376&1449498487771', '266.40', '北'),
('嘉義 - 水上', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=04&1449498499108', '265.41', '南'),
('民雄 - 嘉義', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=03&1449498531347', '263.91', '北'),
('民雄 - 嘉義', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=375&1449498552773', '262.00', '南'),
('大林 - 民雄', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=374&1449498577743', '252.95', '北'),
('大林 - 民雄', 'http://wwwvbs.sfreeway.gov.tw/live-view/mjpg/video.cgi?camera=01&1449498600800', '255.80', '南'),
('雲林系統 - 大林', '0', '246.78', '北'),
('雲林系統 - 大林', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=242&1449498630343', '246.78', '南'),
('斗南 - 雲林系統', '', '243.50', '北'),
('斗南 - 雲林系統', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=240&1449498736282', '243.50', '南'),
('虎尾 - 斗南', '', '237.00', '北'),
('虎尾 - 斗南', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=3&1449498772332', '237.00', '南'),
('西螺 - 虎尾', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=381&1449498818557', '234.50', '北'),
('西螺 - 虎尾', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=238&1449498840055', '231.00', '南'),
('北斗- 西螺', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=4&1449498887787', '225.90', '北'),
('北斗- 西螺', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=2&1449498914159', '228.50', '南'),
('員林 - 北斗', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=235&1449498941061', '220.05', '北'),
('員林 - 北斗', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=234&1449498956909', '218.27', '南'),
('埔鹽系統 - 員林', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=231&1449498991192', '209.11', '北'),
('埔鹽系統 - 員林', '0', '209.11', '南'),
('彰化(北) - 埔鹽系統', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=228&1449499026957', '202.03', '北'),
('彰化(北) - 埔鹽系統', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=227&1449499066844', '200.31', '南'),
('彰化系統 - 彰化(北)', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=223&1449499103648', '194.72', '北'),
('彰化系統 - 彰化(北)', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=224&1449499124174', '196.72', '南'),
('王田 - 彰化系統', '0', '190.69', '北'),
('王田 - 彰化系統', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=222&1449499147864', '190.69', '南'),
('南屯 - 王田', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=218&1449499176913', '185.01', '北'),
('南屯 - 王田', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=220&1449499195344', '188.70', '南'),
('台中 - 南屯', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=214&1449499228673', '179.85', '北'),
('台中 - 南屯', '0', '179.85', '南'),
('大雅 - 台中', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=210&1449499263882', '174.40', '北'),
('大雅 - 台中', '0', '174.40', '南'),
('豐原 - 大雅', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=209&1449499307869', '174.00', '北'),
('豐原 - 大雅', '0', '174.00', '南'),
('台中系統 - 豐原', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=204&1449499361941', '167.00', '北'),
('台中系統 - 豐原', '0', '167.00', '南'),
('后里 - 台中系統', '0', '164.5', '北'),
('后里 - 台中系統', '0', '164.5', '南'),
('三義 - 后里', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=200&1449499481980', '158.06', '北'),
('三義 - 后里', '0', '158.06', '南'),
('銅鑼 - 三義', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=192&1449499520763', '142.81', '北'),
('銅鑼 - 三義', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=191&1449499539648', '140.9', '南'),
('苗栗 - 銅鑼', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=190&1449499572380', '139.20', '北'),
('苗栗 - 銅鑼', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=189&1449499581411', '137.37', '南'),
('頭屋 - 苗栗', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=184&1449499619254', '129.30', '北'),
('頭屋 - 苗栗', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=186&1449499643237', '132.75', '南'),
('頭份 - 頭屋', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=5&1449499673171', '119.90', '北'),
('頭份 - 頭屋', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=355&1449499694308', '121.36', '南'),
('新竹系統 - 頭份', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=351&1449511944865', '105.20', '北'),
('新竹系統 - 頭份', 'http://210.241.63.120/abs2mjpg/bmjpg?camera=7&1449499745225', '105.60', '南');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
