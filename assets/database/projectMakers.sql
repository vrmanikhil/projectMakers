-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2017 at 06:12 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectMakers`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutContent`
--

CREATE TABLE `aboutContent` (
  `type` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutContent`
--

INSERT INTO `aboutContent` (`type`, `content`) VALUES
('paragraph1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>'),
('paragraph2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `timestamp`) VALUES
(1, 'admin', '92eb5ffee6ae2fec3ad71c777531578f', '2017-01-28 21:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `contactUs`
--

CREATE TABLE `contactUs` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `message` text NOT NULL,
  `acknowledge` tinyint(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactUs`
--

INSERT INTO `contactUs` (`id`, `name`, `email`, `mobile`, `message`, `acknowledge`, `timestamp`) VALUES
(1, 'Nikhil Verma', 'vrmanikhil@gmail.com', 7503705892, 'Good MOrning makers', 1, '2017-01-28 21:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `footerContent`
--

CREATE TABLE `footerContent` (
  `id` int(3) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `about` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerContent`
--

INSERT INTO `footerContent` (`id`, `facebook`, `twitter`, `instagram`, `about`) VALUES
(1, 'http://www.facebook.com/vrmanikhil', 'Twitter URL it is', 'Instagram URL it is', '<p>We are a social initiative based out of Delhi NCR offering Bakery &amp; Confectionary items made by people with special needs. The team is highly trained to create magic to add that extra spark to your day, and a big smile to your face.</p><p>We make classic cookies, fresh breads, best cakes in Delhi, and also take orders for gifting and events.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `headerContent`
--

CREATE TABLE `headerContent` (
  `id` int(3) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headerContent`
--

INSERT INTO `headerContent` (`id`, `headline`, `email`, `mobile`) VALUES
(1, 'Header Content is this', 'vrmanikhil1@gmail.com', 7503705894);

-- --------------------------------------------------------

--
-- Table structure for table `homeContent`
--

CREATE TABLE `homeContent` (
  `id` int(5) NOT NULL,
  `title1` text NOT NULL,
  `content1` text NOT NULL,
  `title2` text NOT NULL,
  `content2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeContent`
--

INSERT INTO `homeContent` (`id`, `title1`, `content1`, `title2`, `content2`) VALUES
(1, 'Title 11', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. a</p>', 'Title 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. a</p>');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(3) NOT NULL,
  `type` varchar(255) NOT NULL,
  `imageURL` text NOT NULL,
  `minHeight` int(5) NOT NULL,
  `maxHeight` int(5) NOT NULL,
  `minWidth` int(5) NOT NULL,
  `maxWidth` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `type`, `imageURL`, `minHeight`, `maxHeight`, `minWidth`, `maxWidth`) VALUES
(1, 'Home Background 1', 'assets/images/web/banner-1.png', 550, 700, 1200, 1400),
(2, 'Home Background 2', 'assets/images/web/banner-2.png', 550, 700, 1200, 1400),
(3, 'Who we are?', 'assets/images/web/featured-link-img.png', 180, 210, 280, 320),
(4, 'Our Menu', 'assets/images/web/featured-link-img-2.png', 180, 210, 280, 320),
(5, 'The Blog', 'assets/images/web/featured-link-img-3.png', 180, 210, 280, 320),
(6, 'About Page', 'assets/images/web/banner-3.png', 280, 320, 1900, 1950),
(7, 'Menu Page', 'assets/images/web/a.JPG', 500, 800, 500, 800),
(8, 'Team Page', 'assets/images/web/banner-3.png', 280, 320, 1900, 1950),
(9, 'Contact Page', 'assets/images/web/contact-banner.png', 680, 720, 1300, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `menuCategories`
--

CREATE TABLE `menuCategories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuCategories`
--

INSERT INTO `menuCategories` (`id`, `name`, `description`) VALUES
(2, 'Cakewa', '<p>This is cakewa</p>'),
(3, 'New Category it is', '<p>New Category it is</p>');

-- --------------------------------------------------------

--
-- Table structure for table `menuContact`
--

CREATE TABLE `menuContact` (
  `id` int(1) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuContact`
--

INSERT INTO `menuContact` (`id`, `contact`) VALUES
(1, 9953017514);

-- --------------------------------------------------------

--
-- Table structure for table `menuItems`
--

CREATE TABLE `menuItems` (
  `itemID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `categoryID` int(3) NOT NULL,
  `startsFrom` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuItems`
--

INSERT INTO `menuItems` (`itemID`, `name`, `description`, `categoryID`, `startsFrom`) VALUES
(4, 'Parle G', '<p>Parle G</p>', 1, 150),
(5, '50-50', '<p>50-50</p>', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `timestamp`) VALUES
(1, 'vrmanikhil@gmail.com', '2017-01-28 18:21:59'),
(2, 'prashantp099@gmail.com', '2017-01-28 18:22:11');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imageURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `role`, `description`, `imageURL`) VALUES
(4, 'Swati', 'Creator-in-Chief', '<p>She is a Shri Ram School Alumnus, completing her Teacher&rsquo;s Assistant Training program from there. While she had always enjoyed eating desserts, she realized her love for baking when she chose it as a subject for her exams. This only enhanced the love she has for the show Masterchef Australia. Always on the lookout for innovative creations, she works her way around including coffee and chocolate in her creations, which are her favorite flavours among all.</p>', 'assets/images/team/team-member.png'),
(5, 'Ron', 'Head-Cheerleader', '<p>Mr. Woof is our head cheerleader! He is an all-too-willing taster, who gives a big paw-up to all our creations. Breads are his favourite creations &ndash; garlic bread has him drooling the moment we start slicing into a loaf. He brings the cheers and love to our kitchen table, the love we hope to share through our food.</p>', 'assets/images/team/team-member1.png'),
(6, 'Shwetha', 'Troubleshooter-in-Chief', '<p>She is the one who sits behind the laptop to get work done, and is reachable into the wee hours of the night. A graduate in Business Economics, and a startup enthusiast with 3 years of experience across startups, she brings the design element to Swati&rsquo;s table. You&rsquo;ll always find her with a mug of freshly bru-ed coffee while she is working on designs.</p>', 'assets/images/team/team-member2.png');

-- --------------------------------------------------------

--
-- Table structure for table `teamContent`
--

CREATE TABLE `teamContent` (
  `id` int(3) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamContent`
--

INSERT INTO `teamContent` (`id`, `content`) VALUES
(1, '<p>This is the Team&#39;s Content</p>');

-- --------------------------------------------------------

--
-- Table structure for table `teamDescription`
--

CREATE TABLE `teamDescription` (
  `id` int(2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamDescription`
--

INSERT INTO `teamDescription` (`id`, `description`) VALUES
(1, 'This is the description text, to be shown on the team page');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `testimonial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `testimonial`) VALUES
(4, 'Ankita', 'The food here is simply awesome'),
(5, 'Nikhil Verma', 'I love the cake here'),
(6, 'Prashant', 'The cookies are yum here. Asked my friends to visit this.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contactUs`
--
ALTER TABLE `contactUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuCategories`
--
ALTER TABLE `menuCategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuItems`
--
ALTER TABLE `menuItems`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactUs`
--
ALTER TABLE `contactUs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `menuCategories`
--
ALTER TABLE `menuCategories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menuItems`
--
ALTER TABLE `menuItems`
  MODIFY `itemID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
