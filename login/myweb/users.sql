-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 15, 2019 lúc 04:52 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'tung123', '$2y$10$zt99GIPpPXT8Zs3OLgMJ2O7PHMV1VPf9/veBMyHKdGqfpHN9iMrIy'),
(2, 'tung', '$2y$10$j9dLKOa5ar.xl.sJyozU4emRIaSORq2pZd9U1OeWPGIawItWgousq'),
(3, 'tung0', '$2y$10$FlcXxonNjRNfTjpogBHqG.WXQm32cz992ZQOuJJrkzof8kco0ewHe'),
(4, 'tungdz', '$2y$10$/Jj2KZEoo9uNDuKrHQ6ufuzXlgs/3v8XMJGrgAu.S6E2aLDUazCZ6'),
(5, 'tung02', '$2y$10$nzAR87tPrVq6mULCKljdTuo1XcVnlIpN99ZzsWFSRWs3ud4zH6KSC'),
(6, 'pmskipper', '$2y$10$pO09Vun4GUnFLo6uoHweM.SF88lQB1S1IO9Pb24Ax8N4R5tYfyiNe'),
(7, 'user1', '$2y$10$/8Vh.iBOqJfP3LkUak/4Be5yN7VtI33H2sxdkW6PpfRB4A60qGEuG');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
