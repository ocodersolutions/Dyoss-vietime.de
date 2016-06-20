-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 07:17 AM
-- Server version: 5.6.30
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Apéritif'),
(2, 'Spezialitäten'),
(3, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `description`) VALUES
(27, '/upload/files/galerie-ansicht1-vietime.jpg', NULL),
(28, '/upload/files/galerie-ansicht1-vietime.jpg', NULL),
(29, '/upload/files/galerie-ansicht2-vietime.jpg', NULL),
(30, '/upload/files/galerie-ansicht3-vietime.jpg', NULL),
(31, '/upload/files/galerie-ansicht4-vietime.jpg', NULL),
(32, '/upload/files/galerie-ansicht5-vietime.jpg', NULL),
(33, '/upload/files/galerie-ansicht6-vietime.jpg', NULL),
(34, '/upload/files/galerie-ansicht7-vietime.jpg', NULL),
(35, '/upload/files/galerie-ansicht9-vietime.jpg', NULL),
(36, '/upload/files/galerie-ansicht10-vietime.jpg', NULL),
(37, '/upload/files/galerie-ansicht11-vietime.jpg', NULL),
(38, '/upload/files/galerie-ansicht12-vietime.jpg', NULL),
(39, '/upload/files/galerie-ansicht14-vietime.jpg', NULL),
(40, '/upload/files/galerie-fritiert2-vietime.jpg', NULL),
(41, '/upload/files/galerie-fritiert4-vietime.jpg', NULL),
(42, '/upload/files/galerie-grill1-vietime.jpg', NULL),
(43, '/upload/files/galerie-grill2-vietime.jpg', NULL),
(44, '/upload/files/galerie-grill3-vietime.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `name`, `description`) VALUES
(1, 1, 'SÚP CHAY', 'Vegetarische Suppe mit Tofu, Gemüse und Kräuter'),
(2, 1, 'N&#7896;M &#272;U &#272;&#7910;', 'Grüner Papaya-Salat mit Chili, Kräutern, gerösteten Erdnüssen und Chili-Limetten-Dressing (pikant), wahlweise mit Tofu, Hühnerfleisch oder Garnelen'),
(3, 1, 'NEM HÀ N&#7896;I', 'gebackene Frühlingsrollen, Hanoi Art, gefüllt mit Schweinehackfleisch, Glasnudeln, Gemüse, Frühlingszwiebeln; dazu Chili-Limetten-Sauce'),
(4, 2, 'BÚN BÒ LÁ L&#7888;T', 'Gegrilltes Hackfleischgemisch in frische, aromatische Betel-Blätter gerollt; mit Reisnudeln, Salat, Röstzwiebeln, Erdnüssen & Chili-Limetten-Fischsauce'),
(5, 2, 'TÔM XÀO S&#7842; &#7898;T', 'Gebratene Riesengarnelen mit Chili, Zitronengras, Knoblauch, frischem Gemüse & Basilikum'),
(6, 2, 'N&#431;&#7898;NG TH&#7852;P C&#7848;M', 'Grill-Mix Teller mit verschiedenen Fleischsorten (Schweine-, Hühner-, Rindfleisch, Garnelen), serviert mit Duftreis und gemischtem Salat. Dazu Chili-Limetten-Sauce oder BBQ-Sauce'),
(7, 3, 'TH&#416;M CHIÊN', 'Gebackene Ananas, überzogen mit Honig; Kokosraspeln; eine Kugel Vanilleeis'),
(8, 3, 'BÁNH CRÊPE KEM', 'Crêpe, gefüllt mit Vanilleeis; dazu Karamellsauce & Sesam'),
(9, 3, 'CHU&#7888;I CHIÊN', 'Gebackene Banane überzogen mit Honig; Kokosraspeln; eine Kugel Vanilleeis');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`) VALUES
(8, 'Monica  Ruiz Neumann', 'Empfehlenswert !Leckeres Essen und schönes Ambiente'),
(9, 'Kim Do', 'Exerlent service and food, we like crispy duck curry'),
(10, 'Shiromi Naskent', 'Good food and service,love it!!'),
(11, 'Gregory C', 'Tolles neues Hotel in Mitte. Exquisit Ei Brötchen, Perfekt Pho und gute Portionen, gute Auswahl und hat vernünftige Preise. Die (groß) Frühling Roll mit Shrimps das beste, was wir je mit frischen Zutaten hatte man Geschmack. Die gemischte Texturen sind eine wahre Freude. Nirgendwo anders mehr hin: Phogetaboutit!'),
(12, 'Elena L', 'We love to go to vietime, it''s calm, not busy, and the fod is just amazing. Anytime we get the chance we enjoy the steak plate for two, any other meal is also good, great service too');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(19, 'admin', 'ocodersolutions@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
