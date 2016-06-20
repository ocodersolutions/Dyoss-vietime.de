-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 05:59 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'ApÃ©ritif'),
(2, 'SpezialitÃ¤ten'),
(3, 'Desserts'),
(5, 'kljkllkl');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `name`, `description`) VALUES
(1, 1, 'SÃšP CHAY', 'Vegetarische Suppe mit Tofu, GemÃ¼se und KrÃ¤uter'),
(2, 1, 'Ná»˜M ÄU Äá»¦', 'GrÃ¼ner Papaya-Salat mit Chili, KrÃ¤utern, gerÃ¶steten ErdnÃ¼ssen und Chili-Limetten-Dressing (pikant), wahlweise mit Tofu, HÃ¼hnerfleisch oder Garnelen'),
(3, 1, 'NEM HÃ€ Ná»˜I', 'gebackene FrÃ¼hlingsrollen, Hanoi Art, gefÃ¼llt mit Schweinehackfleisch, Glasnudeln, GemÃ¼se, FrÃ¼hlingszwiebeln; dazu Chili-Limetten-Sauce'),
(4, 2, 'BÃšN BÃ’ LÃ Lá»T', 'Gegrilltes Hackfleischgemisch in frische, aromatische Betel-BlÃ¤tter gerollt; mit Reisnudeln, Salat, RÃ¶stzwiebeln, ErdnÃ¼ssen & Chili-Limetten-Fischsauce'),
(5, 2, 'TÃ”M XÃ€O Sáº¢ á»šT', 'Gebratene Riesengarnelen mit Chili, Zitronengras, Knoblauch, frischem GemÃ¼se & Basilikum'),
(6, 2, 'NÆ¯á»šNG THáº¬P Cáº¨M', 'Grill-Mix Teller mit verschiedenen Fleischsorten (Schweine-, HÃ¼hner-, Rindfleisch, Garnelen), serviert mit Duftreis und gemischtem Salat. Dazu Chili-Limetten-Sauce oder BBQ-Sauce'),
(7, 3, 'CHUá»I CHIÃŠN', 'Gebackene Banane Ã¼berzogen mit Honig; Kokosraspeln; eine Kugel Vanilleeis'),
(8, 3, 'BÃNH CRÃŠPE KEM', 'CrÃªpe, gefÃ¼llt mit Vanilleeis; dazu Karamellsauce & Sesam'),
(9, 3, 'THÆ M CHIÃŠN', 'Gebackene Ananas, Ã¼berzogen mit Honig; Kokosraspeln; eine Kugel Vanilleeis');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`) VALUES
(6, 'ghghg', 'ghghg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'admin', 'trinhphucnhan@gmail.com', 'admin'),
(21, 'hoangtrungweb01', 'trinhphucnhan@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
