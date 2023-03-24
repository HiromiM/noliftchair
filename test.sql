-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-03-24 06:31:01
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', 'test1', 1, 0),
(2, 'テスト2一般', 'test2', 'test2', 0, 0),
(3, 'テスト３', 'test3', 'test3', 0, 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `age`, `location`, `date`) VALUES
(1, '市川　房江', 'ティルト', '岡村', 2, 'あり', '2023-03-15 12:12:45'),
(2, '荻野　吟子', 'リクライニング', '岡村', 2, 'なし', '2023-03-15 12:13:07'),
(3, '金子　みすゞ', 'ティルト', '岡村', 1, 'あり', '2023-03-15 13:28:57'),
(4, '樋口　一葉', 'ティルト', '岡村', 1, 'なし', '2023-03-15 13:29:04'),
(5, '津田　梅子', '普通', '岡村', 1, 'なし', '2023-03-16 04:42:52'),
(6, '天璋院', 'ソファ・リクライニング', 'いうら', 1, 'なし', '2023-03-16 04:43:12'),
(7, '額田王', '普通', '川村', 3, 'なし', '2023-03-16 04:43:26'),
(8, '小野小町', 'リクライニング', '川村', 1, 'なし', '2023-03-16 04:43:37'),
(9, '和泉式部', 'ティルト', '岡村', 2, 'なし', '2023-03-16 04:43:46'),
(10, '清少納言', '普通', '岡村', 3, 'あり', '2023-03-16 04:43:56'),
(11, '紫式部', '普通', '岡村', 3, 'なし', '2023-03-16 04:44:05'),
(12, 'ガラシャ', '普通', '岡村', 1, 'あり', '2023-03-16 04:44:14'),
(13, '三浦　綾子', 'リクライニング', '岡村', 2, 'なし', '2023-03-16 04:44:24'),
(14, '田辺　聖子', 'ソファ・リクライニング', 'いうら', 1, 'なし', '2023-03-16 04:44:34'),
(15, '徳川　家康', 'リクライニング', '岡村', 3, 'なし', '2023-03-20 11:40:08'),
(16, '豊臣　秀吉', 'リクライニング', '岡村', 2, 'なし', '2023-03-20 11:40:30'),
(17, '織田　信長', 'リクライニング', '岡村', 3, 'なし', '2023-03-20 11:40:45'),
(18, '与謝野　晶子', 'リクライニング', '岡村', 2, 'なし', '2023-03-20 11:40:56'),
(19, '平塚　らいてう', 'ソファ・リクライニング', 'いうら', 1, 'なし', '2023-03-20 11:41:11'),
(20, '岡本　かの子', '普通', '岡村', 1, 'あり', '2023-03-20 11:41:24');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
