-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2016 at 06:20 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dyoss_vietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'ApÃ©ritif'),
(2, 'SpezialitÃ¤ten'),
(3, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`) VALUES
(8, 'LOREM IPSUM DOLOR', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.'),
(9, '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.'),
(10, '', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.'),
(11, '', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.'),
(12, '', 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
