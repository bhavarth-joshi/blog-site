-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 10:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daishik`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_vid`
--

CREATE TABLE `img_vid` (
  `Id` int(255) NOT NULL,
  `Title1` text NOT NULL,
  `Vide1` varchar(255) NOT NULL,
  `Img1` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Text15` longtext NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_vid`
--

INSERT INTO `img_vid` (`Id`, `Title1`, `Vide1`, `Img1`, `location`, `Text15`, `username`) VALUES
(2, 'Nice', '', 'Kivy_App_Life_Cycle.png', 'videos/Kivy_App_Life_Cycle.png', '<p>Hello World&nbsp;</p>', 'Daishik123'),
(3, 'Hello', 'VID-20171122-WA0000[1].mp4', '', 'videos/VID-20171122-WA0000[1].mp4', '<b>Hello <i>World</i></b>', 'Bhavarth123'),
(4, 'Welcome', '', 'IMG-20180927-WA0000.jpg', 'videos/IMG-20180927-WA0000.jpg', '<p>Nice Nice!!!</p>', 'Daishik123'),
(7, 'Software Developer', '', 'download.png', 'videos/download.png', '<b>Software development</b><p>is the process of conceiving, specifying, designing,<a href=\"https://en.wikipedia.org/wiki/Computer_programmer\" class=\"mw-redirect\" title=\"Computer programmer\">programming</a>,<a href=\"https://en.wikipedia.org/wiki/Software_documentation\" title=\"Software documentation\">documenting</a>,<a href=\"https://en.wikipedia.org/wiki/Software_testing\" title=\"Software testing\">testing</a>, and<a href=\"https://en.wikipedia.org/wiki/Software_bugs\" class=\"mw-redirect\" title=\"Software bugs\">bug fixing</a>involved in creating and maintaining<a href=\"https://en.wikipedia.org/wiki/Application_software\" title=\"Application software\">applications</a>,<a href=\"https://en.wikipedia.org/wiki/Software_framework\" title=\"Software framework\">frameworks</a>, or other software components. Software development is a process of writing and<a href=\"https://en.wikipedia.org/wiki/Software_maintenance\" title=\"Software maintenance\">maintaining</a>the<a href=\"https://en.wikipedia.org/wiki/Source_code\" title=\"Source code\">source code</a>, but in a broader sense, it includes all that is involved between the conception of the desired software through to the final manifestation of the software, sometimes in a planned and<a href=\"https://en.wikipedia.org/wiki/Software_development_process\" title=\"Software development process\">structured</a>process.Therefore, software development may include research, new development, prototyping, modification, reuse, re-engineering, maintenance, or any other activities that result in software products</p>', 'Pratueshk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_vid`
--
ALTER TABLE `img_vid`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_vid`
--
ALTER TABLE `img_vid`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
