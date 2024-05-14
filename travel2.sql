-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 09:46 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tourandtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `Advid` int(50) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Companyname` varchar(100) NOT NULL,
  `Pic` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`Advid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Advid`, `Title`, `Companyname`, `Pic`, `Detail`) VALUES
(1, 'Tour and Travel', 'code-projects.org', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by Kaler Enterprises. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(2, 'Tour and Travel', ' code-projects.org ', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(3, 'Tour and Travel', 'New View Travel Agency', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(5, 'Tour and Travel', 'Sysny', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(8, 'Tour and Travel', 'Merrific', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.\r\n'),
(9, 'Tour and Travel', 'Easymost', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(10, 'Tour and Travel', 'Guideaid', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(11, 'Tour and Travel', 'Vyand', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(12, 'Tour and Travel', 'Celouro', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(14, 'Tourism', 'Destinations Travel', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(15, 'Tourism', 'Adventure Makers', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.'),
(16, 'Tourism', 'Goin My Way', 'CODEPROJECTS.jpg', 'Find information on the travel and trade provided by My Tour. Users can get detailed information about the travel agents, inbound tour operators, tourist transport operators, adventure tour operators, domestic tour operators, etc. in India. Guidelines for respective agencies and operators are provided. List of approved travel trade operators can be accessed.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(2000) NOT NULL,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Adventure Tours'),
(2, 'Rural Tours'),
(3, 'Mountain Tours'),
(4, 'Leisure Tours'),
(5, 'Business Tours'),
(6, 'Family Tours'),
(7, 'Friends Tours');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `contactid` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `Name`, `Phno`, `Email`, `Message`) VALUES
(1, 'Mehar', '9501065206', 'mehar@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(2, 'Japleen', '9915079133', 'japu@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(3, 'Veena', '9815724956', 'veena12@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(4, 'Sahil', '9814532456', 'Sahil@yahoo.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.'),
(5, 'Varinder', '9812345234', 'vinnysharma@gmail.com', 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `Enquiryid` int(50) NOT NULL AUTO_INCREMENT,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL,
  PRIMARY KEY (`Enquiryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiryid`, `Packageid`, `Name`, `Gender`, `Mobileno`, `Email`, `NoofDays`, `Child`, `Adults`, `Message`, `Statusfield`) VALUES
(3, 1, 'Manpreet', 'Female', '9779730479', 'manpreetkaler13@yahoo.com', 2, 1, 4, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(5, 2, 'Nandni', 'Female', '7696303090', 'nandni@gmail.com', 2, 2, 3, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(6, 5, 'Rakesh', 'Male', '9876123456', 'rakesh@yahoo.com', 4, 2, 2, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(7, 4, 'Navneet', 'Female', '9463958058', 'neerubawa@yahoo.com', 8, 2, 6, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(8, 3, 'Rohan', 'Male', '9501065206', 'rohan@gmail.com', 3, 1, 5, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(9, 6, 'Jassi', 'Female', '9876123456', 'jass@gmail.com', 2, 1, 5, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(10, 11, 'Shavir', 'Male', '9915510777', 'shavirpaul@gmail.com', 6, 1, 2, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(11, 13, 'Nikhil', 'Male', '9871234561', 'nikhil@gmail.com', 2, 2, 2, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending'),
(12, 15, 'Rehan', 'Male', '9876123456', 'rehan@yahoo.com', 3, 3, 2, 'We have read about the interest your advertisement in the times of India about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight, economy class and first class and etc. . The above information is required for our managing director who will like to enjoy the holiday trip along with his family.', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `Packid` int(200) NOT NULL AUTO_INCREMENT,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Subcategory` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  PRIMARY KEY (`Packid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Subcategory`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'manali', 1, 1, 22799, 'm1.jpg','m2.jpg','m1.jpg', 'Experience the enchanting beauty of Manali, nestled in the heart of the majestic Himalayas. A picturesque hill station located in the state of Himachal Pradesh, Manali offers a perfect blend of natural splendor, adventure, and tranquility.Immerse yourself in the breathtaking landscapes adorned with lush green valleys, snow-capped peaks, and meandering rivers. The serene ambiance and crisp mountain air create an ideal setting for relaxation and rejuvenation'),
(2, 'Ladakh with Srinagar',1, 2, 69999, '43.jpg', '44.jpg', '45.jpg', 'Welcome to Ladakh, the Land of High Passes, where the majestic Himalayas meet the barren beauty of the Tibetan Plateau. Nestled in the northernmost region of India, Ladakh is a captivating destination that promises an unparalleled adventure for every traveler. Encompassing rugged terrain, breathtaking landscapes, and a rich cultural tapestry, Ladakh invites you to embark on a journey of discovery and awe. Heres what you can expect to experience in this unique corner of the world'),
(3, 'Gulmarg', 1, 3, 49999, '63.jpg', '62.jpg', '61.jpg', 'Nestled amidst the pristine Himalayan ranges of Kashmir, Gulmarg stands as a breathtaking gem of natural beauty and adventure. Known as the "Meadow of Flowers," this picturesque destination offers an unparalleled experience for travelers seeking tranquility, adventure, and cultural richness.'),
(4, 'Hodka-Kutch', 2, 4, 12000, '72.jpg', '73.jpg', '70.jpg', 'Experience the enchanting village of Hodka, nestled amidst the vast expanse of the Kutch region in Gujarat, India. Immerse yourself in the rich cultural tapestry of this traditional village, renowned for its vibrant handicrafts, intricate embroidery, and warm hospitality. Explore the picturesque landscape dotted with mud-brick houses adorned with colorful artwork, and witness the timeless craftsmanship of local artisans. Indulge in authentic Kutchi cuisine, savoring the flavors of this culturally rich region. Let Hodka captivate your senses with its charm, making your journey an unforgettable cultural odyssey.'),
(5, 'Orissa', 2, 5, 33000, '107.jpg', '106.jpg', '108.jpg', 'Discover the mystical allure of Odisha, a land steeped in history, culture, and natural beauty. Nestled on the eastern coast of India, Odisha captivates visitors with its rich heritage, ancient temples, and vibrant festivals.Unveil the architectural marvels of Odisha with visits to the iconic Sun Temple at Konark, the spiritual hub of Puri with its famous Jagannath Temple, and the ancient caves of Udayagiri and Khandagiri. Immerse yourself in the tranquility of the Chilika Lake, Asias largest brackish water lagoon, home to a diverse range of bird species and picturesque landscapes.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `Subcatid` int(200) NOT NULL AUTO_INCREMENT,
  `Subcatname` varchar(1000) NOT NULL,
  `Catid` int(200) NOT NULL,
  `Pic` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  PRIMARY KEY (`Subcatid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`Subcatid`, `Subcatname`, `Catid`, `Pic`, `Detail`) VALUES
(1, 'Manali', 1, 'm1.jpg', 'Experience the enchanting beauty of Manali, nestled in the heart of the majestic Himalayas. A picturesque hill station located in the state of Himachal Pradesh, Manali offers a perfect blend of natural splendor, adventure, and tranquility.Immerse yourself in the breathtaking landscapes adorned with lush green valleys, snow-capped peaks, and meandering rivers. The serene ambiance and crisp mountain air create an ideal setting for relaxation and rejuvenation'),
(2, 'Ladakh with Srinagar',1, '43.jpg', 'Welcome to Ladakh, the Land of High Passes, where the majestic Himalayas meet the barren beauty of the Tibetan Plateau. Nestled in the northernmost region of India, Ladakh is a captivating destination that promises an unparalleled adventure for every traveler. Encompassing rugged terrain, breathtaking landscapes, and a rich cultural tapestry, Ladakh invites you to embark on a journey of discovery and awe. Heres what you can expect to experience in this unique corner of the world'),
(3, 'Gulmarg', 1, '63.jpg', 'Nestled amidst the pristine Himalayan ranges of Kashmir, Gulmarg stands as a breathtaking gem of natural beauty and adventure. Known as the "Meadow of Flowers," this picturesque destination offers an unparalleled experience for travelers seeking tranquility, adventure, and cultural richness.'),
(4, 'Hodka-Kutch', 1, '70.jpg', 'Experience the enchanting village of Hodka, nestled amidst the vast expanse of the Kutch region in Gujarat, India. Immerse yourself in the rich cultural tapestry of this traditional village, renowned for its vibrant handicrafts, intricate embroidery, and warm hospitality. Explore the picturesque landscape dotted with mud-brick houses adorned with colorful artwork, and witness the timeless craftsmanship of local artisans. Indulge in authentic Kutchi cuisine, savoring the flavors of this culturally rich region. Let Hodka captivate your senses with its charm, making your journey an unforgettable cultural odyssey.'),
(5, 'Orissa', 1,'108.jpg', 'Discover the mystical allure of Odisha, a land steeped in history, culture, and natural beauty. Nestled on the eastern coast of India, Odisha captivates visitors with its rich heritage, ancient temples, and vibrant festivals.Unveil the architectural marvels of Odisha with visits to the iconic Sun Temple at Konark, the spiritual hub of Puri with its famous Jagannath Temple, and the ancient caves of Udayagiri and Khandagiri. Immerse yourself in the tranquility of the Chilika Lake, Asias largest brackish water lagoon, home to a diverse range of bird species and picturesque landscapes.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('taher', 'taher123', 'Admin'),
('vishu', 'vishu123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `newusers`
--

CREATE TABLE IF NOT EXISTS `newusers` (
  `Username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `newusers` (`Username`, `email`, `pwd`) VALUES
('taher', 'travadi@gmail.com', 't123'), 
('vishvaraj', 'rathod@gmail.com', 'v123');

--
-- Table structure for table `news_letter`
--

CREATE TABLE IF NOT EXISTS `news_letter` (
  `no` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `samaiiy` DATETIME NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`no`, `email`, `samaiiy`) VALUES
('?', 'travadi@gmail.com', '?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
