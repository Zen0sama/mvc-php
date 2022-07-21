-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 21, 2022 lúc 11:51 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vps_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 1,
  `banned` int(11) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `money`, `role`, `banned`, `createdAt`, `updatedAt`) VALUES
(5, 'wibusama', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 08:16:48', '2022-07-21 08:16:48'),
(6, 'admin', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 08:40:45', '2022-07-21 08:40:45'),
(7, 'hunghung', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 08:41:32', '2022-07-21 08:41:32'),
(22, 'wibu1', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:05:37', '2022-07-21 09:05:37'),
(23, 'wibu2', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:06:02', '2022-07-21 09:06:02'),
(24, 'wibu3', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:06:53', '2022-07-21 09:06:53'),
(25, 'wibu4', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:07:22', '2022-07-21 09:07:22'),
(26, 'wibu5', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:09:10', '2022-07-21 09:09:10'),
(27, 'wibu6', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:10:52', '2022-07-21 09:10:52'),
(28, 'wibu7', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:12:56', '2022-07-21 09:12:56'),
(29, 'wibu9', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:15:33', '2022-07-21 09:15:33'),
(30, 'wibu8', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:23:06', '2022-07-21 09:23:06'),
(31, 'wibu10', '6005545589ffb607bc7f9f90ce44e31d', 0, 1, 0, '2022-07-21 09:28:00', '2022-07-21 09:28:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
