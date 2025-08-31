-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2025 at 03:49 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

-- Table structure for table `hotels`

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `city` varchar(100) NOT NULL,
  `rate` decimal(10,2) DEFAULT NULL,
  `mrp` decimal(10,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `lat` decimal(9,6) DEFAULT NULL,
  `log` decimal(9,6) DEFAULT NULL,
  `services` text,
  `food` text,
  `poster` varchar(255) DEFAULT NULL,
  `room_andHotelImages` text,
  `rooms` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO hotels (
    id, name, description, city, rate, mrp, discount, location, lat, log, services, food, poster, room_andHotelImages, rooms
) VALUES 
(1, 'Hotel Shanker', 'A heritage hotel in the heart of Kathmandu with luxurious rooms.', 'Kathmandu', 4.6, 6000, 15, 'Lazimpat, Kathmandu', 27.7172, 85.3240, 'WiFi,Restaurant,Bar,AC', 'Yes', 'shanker.jpg', 'shanker1.jpg,shanker2.jpg', 'Deluxe, Suite'),
(2, 'Temple Tree Resort & Spa', 'Upscale resort near Phewa Lake with spa and pool.', 'Pokhara', 4.7, 7500, 18, 'Gaurighat, Lakeside, Pokhara', 28.2096, 83.9856, 'WiFi,Spa,Pool,Restaurant', 'Yes', 'templetree.jpg', 'templetree1.jpg,templetree2.jpg', 'Suite, Cottage'),
(3, 'Barahi Jungle Lodge', 'Luxury jungle lodge near Chitwan National Park.', 'Chitwan', 4.8, 12000, 20, 'Barahi Path, Meghauli', 27.5715, 84.4169, 'WiFi,Safari,Pool,Dining', 'Yes', 'barahi.jpg', 'barahi1.jpg,barahi2.jpg', 'Cottage, Suite'),
(4, 'Hotel Mystic Mountain', 'Hilltop hotel with breathtaking sunrise views.', 'Nagarkot', 4.5, 8500, 10, 'Nagarkot Road', 27.7152, 85.5206, 'WiFi,Yoga,Spa,Gym', 'Yes', 'mystic.jpg', 'mystic1.jpg,mystic2.jpg', 'Deluxe, Suite'),
(5, 'Tiger Tops Tharu Lodge', 'Eco-lodge near the jungle with wildlife experiences.', 'Chitwan', 4.7, 11000, 15, 'Tharu Village, Chitwan', 27.5784, 84.4755, 'Safari,WiFi,Campfire', 'Yes', 'tigertops.jpg', 'tt1.jpg,tt2.jpg', 'Tent, Lodge'),
(6, 'Bodhi Red Sun Hotel', 'Modern hotel close to the sacred Maya Devi Temple.', 'Lumbini', 4.2, 4500, 12, 'Lumbini Bazaar', 27.4702, 83.2755, 'WiFi,Restaurant,Parking', 'No', 'bodhi.jpg', 'bodhi1.jpg,bodhi2.jpg', 'Standard, Deluxe'),
(7, 'Himalayan Front Hotel', 'Panoramic mountain views from every room.', 'Pokhara', 4.4, 7000, 10, 'Sarangkot Road', 28.2406, 83.9567, 'WiFi,Mountain View,Dining', 'Yes', 'himalayan.jpg', 'hf1.jpg,hf2.jpg', 'Deluxe, Suite'),
(8, 'Hotel Siddhartha Cottage', 'Cozy place ideal for pilgrims and families.', 'Lumbini', 4.0, 3800, 8, 'Mahilwar, Lumbini', 27.4828, 83.2780, 'WiFi,AC,Breakfast', 'No', 'siddhartha.jpg', 'sc1.jpg,sc2.jpg', 'Standard'),
(9, 'The Old Inn', 'Restored heritage hotel with old-world charm.', 'Bandipur', 4.3, 5000, 10, 'Main Bazaar, Bandipur', 27.9380, 84.4190, 'WiFi,Traditional Meals,Lounge', 'Yes', 'oldinn.jpg', 'oi1.jpg,oi2.jpg', 'Heritage, Standard'),
(10, 'Peacock Guest House', 'Traditional Newari house converted to a guest stay.', 'Bhaktapur', 4.6, 4200, 10, 'Dattatreya Square', 27.6710, 85.4298, 'WiFi,Cultural Decor,Dining', 'Yes', 'peacock.jpg', 'pg1.jpg,pg2.jpg', 'Standard, Premium'),
(11, 'Hotel Annapurna View', 'Beautiful views of Annapurna range and lake.', 'Pokhara', 4.5, 6900, 14, 'Pokhara-18, Sarangkot', 28.2345, 83.9523, 'WiFi,Lake View,Breakfast', 'Yes', 'annapurna.jpg', 'ha1.jpg,ha2.jpg', 'Deluxe'),
(12, 'Hotel Yak and Yeti', '5-star hotel with history and style.', 'Kathmandu', 4.6, 9500, 15, 'Durbar Marg, Kathmandu', 27.7122, 85.3203, 'WiFi,Pool,Spa,Gym', 'Yes', 'yakandyeti.jpg', 'yy1.jpg,yy2.jpg', 'Suite, Deluxe'),
(13, 'Maya Manor Boutique Hotel', 'Luxury boutique hotel with vintage interiors.', 'Kathmandu', 4.4, 8800, 10, 'Hattisar, Kathmandu', 27.7119, 85.3200, 'WiFi,AC,Restaurant', 'Yes', 'maya.jpg', 'mm1.jpg,mm2.jpg', 'Premium, Royal Suite');

