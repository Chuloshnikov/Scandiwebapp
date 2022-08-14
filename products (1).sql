-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лип 24 2022 р., 16:30
-- Версія сервера: 5.6.51
-- Версія PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `products`
--

-- --------------------------------------------------------

--
-- Структура таблиці `book`
--

CREATE TABLE `book` (
  `sku` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `weight` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `dvd`
--

CREATE TABLE `dvd` (
  `sku` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `size` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `furniture`
--

CREATE TABLE `furniture` (
  `sku` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `height` mediumint(9) NOT NULL,
  `width` mediumint(9) NOT NULL,
  `length` mediumint(9) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Індекси таблиці `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Індекси таблиці `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблиці `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `furniture`
--
ALTER TABLE `furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
