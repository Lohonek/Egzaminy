-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Mar 2015, 12:57
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oke201601`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE IF NOT EXISTS `autorzy` (
  `IDAutor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Imie` text,
  `Nazwisko` text,
  PRIMARY KEY (`IDAutor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`IDAutor`, `Imie`, `Nazwisko`) VALUES
(1, 'Henryk', 'Sienkiewicz'),
(2, 'Adam', 'Mickiewicz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `egzemplarze`
--

CREATE TABLE IF NOT EXISTS `egzemplarze` (
  `IDEgzemplarz` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `KsiazkaID` int(10) unsigned NOT NULL,
  `DoWypozyczenia` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`IDEgzemplarz`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Zrzut danych tabeli `egzemplarze`
--

INSERT INTO `egzemplarze` (`IDEgzemplarz`, `KsiazkaID`, `DoWypozyczenia`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 0),
(4, 2, 1),
(5, 2, 1),
(6, 3, 1),
(7, 4, 0),
(8, 4, 1),
(9, 4, 1),
(10, 5, 1),
(11, 5, 0),
(12, 2, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE IF NOT EXISTS `ksiazki` (
  `IDKsiazki` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `AutorID` int(10) unsigned NOT NULL,
  `Tytul` text,
  `Wydawnictwo` text,
  `RokWydania` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`IDKsiazki`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`IDKsiazki`, `AutorID`, `Tytul`, `Wydawnictwo`, `RokWydania`) VALUES
(1, 1, 'W pustyni i w puszczy', 'Znak', 2014),
(2, 1, 'Quo vadis', 'Greg', 2014),
(3, 2, 'Pan Tadeusz', 'Ossolineum', 2005),
(4, 2, 'Ballady i romanse', 'Zielona Sowa', 2010),
(5, 2, 'Dziady', 'Ossolineum', 2009);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
