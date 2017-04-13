-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 apr 2017 om 08:48
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a-2016-grafiek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bpv_companies`
--

CREATE TABLE IF NOT EXISTS `bpv_companies` (
  `student_number` varchar(8) NOT NULL,
  `nameCompany` varchar(200) NOT NULL,
  `phoneNumberCompany` varchar(14) NOT NULL,
  `nameContact` varchar(200) NOT NULL,
  `mobilePhoneNumber` varchar(14) NOT NULL,
  `address` varchar(200) NOT NULL,
  `addressNumber` varchar(5) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postalCode` varchar(6) NOT NULL,
  `urlCompany` varchar(300) NOT NULL,
  `emailContact` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`student_number`,`urlCompany`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bpv_companies`
--

INSERT INTO `bpv_companies` (`student_number`, `nameCompany`, `phoneNumberCompany`, `nameContact`, `mobilePhoneNumber`, `address`, `addressNumber`, `city`, `postalCode`, `urlCompany`, `emailContact`, `description`, `status`) VALUES
('1', 'Bissmark', '030-5257021', 'Peter Beense', ' 31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info123@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('1', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info5@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('1', 'Bissmark', '030-5257021', 'Peter Beense', ' 31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('311524', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', '123bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('311524', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('311524', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'ghbissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 4),
('311524', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0),
('311532', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 4),
('4', 'Bissmark', '030-5257021', 'Peter Beense', '31 6 25403121', 'Vreeswijksestraatweg', '42', 'Oudegein', '1903 C', 'info@bissmark.nl', 'pbeens@bissmark.nl', 'Ik moet programmeren in C.', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(8) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `infix` varchar(50) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `numberOfContacts` int(10) NOT NULL DEFAULT '0',
  `stageplek` enum('Ja','Nee') NOT NULL DEFAULT 'Nee',
  `password` varchar(40) NOT NULL,
  `activate` enum('true','false') NOT NULL DEFAULT 'false',
  `userrole` enum('student','docent','root','admin','bpvco') NOT NULL DEFAULT 'student',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstName`, `infix`, `lastName`, `numberOfContacts`, `stageplek`, `password`, `activate`, `userrole`) VALUES
('311524', 'Cees', 'de', 'Hond', 100, 'Nee', '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'bpvco'),
('311532', 'Bryan', 'de', 'Jong', 100, 'Nee', '906072001efddf3e11e6d2b5782f4777fe038739', 'true', 'student'),
('311549', 'Dennis', '', 'Versluis', 300, 'Nee', '', 'false', 'student'),
('31178', 'Richi', '', 'Polman', 245, 'Nee', '', 'false', 'student'),
('312325', 'Myron', 'de', 'Bruijn', 233, 'Nee', '', 'false', 'student'),
('312326', 'Brian', '', 'Bekhof', 320, 'Nee', '', 'false', 'student'),
('312838', 'Erik', 'de', 'Graaff', 123, 'Nee', '', 'false', 'student'),
('312949', 'Benjamin', '', 'Wijnsma', 23, 'Nee', '', 'false', 'student'),
('313136', 'Dion', 'de', 'Vries', 55, 'Nee', '', 'false', 'student'),
('313236', 'Jochum', '', 'Kole', 89, 'Nee', '', 'false', 'student'),
('313510', 'Arne', '', 'Goethals', 45, 'Nee', '', 'false', 'student'),
('313550', 'Yarnick', 'de', 'Heer', 0, 'Nee', '', 'false', 'student'),
('313552', 'Jop', '', 'Laane', 340, 'Nee', '', 'false', 'student'),
('313553', 'Melissa', '', 'Tukker', 324, 'Nee', '', 'false', 'student'),
('313580', 'Wessel', '', 'Kompier', 125, 'Nee', '', 'false', 'student'),
('313632', 'Marcel', '', 'Masaad', 76, 'Nee', '', 'false', 'student'),
('313704', 'Jesse', '', 'Lendvai', 69, 'Nee', '', 'false', 'student'),
('313855', 'Sjoerd', '', 'Klooster', 340, 'Nee', '', 'false', 'student'),
('313969', 'David', '', 'Ale', 346, 'Nee', '', 'false', 'student'),
('314354', 'Patrick', 'van den', 'Hoek', 23, 'Nee', '', 'false', 'student'),
('314377', 'Rick', 'de', 'Korte', 123, 'Nee', '', 'false', 'student'),
('314434', 'Indy', '', 'Vierboom', 321, 'Nee', '', 'false', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
