-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Sty 2016, 14:39
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_service`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notification`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Zrzut danych tabeli `notification`
--

INSERT INTO `notification` (`id_notification`, `name`, `lastname`, `description`, `price`, `created`, `modified`) VALUES
(1, 'Lukasz', 'Ogan', 'Opis', '233 zl', '2016-01-20 00:00:00', '2016-01-19 21:22:55'),
(12, 'Lukasz', 'Ogan', 'Opis', '22', '2016-01-27 00:00:00', '2016-01-19 23:00:00'),
(13, 'lukasz', 'ogan', 'Opis', '23', '2016-01-19 23:01:02', '2016-01-19 22:01:02'),
(14, 'lukasz', 'ogan', 'Opis', '23', '2016-01-19 23:02:03', '2016-01-19 22:02:03'),
(15, 'lukasz', 'ogan', 'Opis', '23', '2016-01-20 09:45:10', '2016-01-20 08:45:10'),
(16, 'lukasz', 'ogan', 'Opis', '23', '2016-01-20 09:45:44', '2016-01-20 08:45:44'),
(17, 'lukasz', 'ogan', 'Opis', '23', '2016-01-20 09:46:01', '2016-01-20 08:46:01'),
(18, 'lukasz00', 'ogan', 'Opis ', '23', '2016-01-20 09:46:14', '2016-01-20 08:46:14'),
(19, 'lukasz', 'ogan', 'Opis', '23', '2016-01-20 09:46:22', '2016-01-20 08:46:22'),
(20, 'lukasz33', 'ogan', 'Opis ', '23', '2016-01-20 09:56:09', '2016-01-20 08:56:09'),
(24, 'Lukasz', 'Ogan', 'To jest opis ', '233', '2016-01-20 14:38:19', '2016-01-20 13:38:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
