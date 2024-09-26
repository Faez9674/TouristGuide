-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `touristguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_address` longtext NOT NULL,
  `hotel_phone` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `star` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `hotel_address`, `hotel_phone`, `price`, `star`, `description`, `image`) VALUES
(1, 'Premier Inn Burnley hotel', 'Queen Victoria Rd, Burnley BB10 3EF, United Kingdom', '+44 333 777 3968', 47, '4.1', 'Surrounded by parkland at the crossing of the Leeds and Liverpool Canal and the River Brun, this modern no-frills hotel is a 5-minute drive from Burnley rail station.', 'hotel1.png'),
(4, 'Holiday Inn Express Burnley M65, JCT.10, an IHG Hotel', '55 Pendle Way, Burnley BB12 0TJ, United Kingdom', '+44 1282 855955', 66, '4.3', 'Set off the M65 motorway, this relaxed hotel is an 8-minute walk from Burnley Barracks train station, 1.7 miles from Turf Moor stadium and 1.8 miles from Towneley Park.', 'hotel2.png'),
(5, 'Travelodge Burnley', 'Barracks Rd, Burnley BB11 4SB, United Kingdom', '+44 871 984 6125', 48, '4', 'Great location overall for sightseeing, recreation, dining and getting around', 'hotel3.png'),
(6, 'Crow Wood Hotel and Spa Resort', 'Holme Rd, Burnley BB12 0RT, United Kingdom', '+44 1282 227722', 112, '4.8', 'Set on 40 acres of parkland with a lake, this upscale spa hotel is a mile from the M65 motorway, and 3 miles from the art gallery at Towneley Hall, Park and Gardens.', 'hotel4.png'),
(7, 'Spinning Block Hotel at Holmes Mill', 'Holmes Mill, Greenacre St, Clitheroe BB7 1EB, United Kingdom', '+44 1200 407111', 89, '4.5', 'Set in a former textiles mill, this stylish hotel is an 8-minute walk from Clitheroe Castle. The nearest bus stop is a 2-minute walk away.', 'hotel5.png'),
(8, 'The Oaks Hotel', 'Colne Rd, Burnley BB10 2LF, United Kingdom', '+44 1282 414141', 59, '3.8', 'Good location overall for sightseeing, recreation, dining and getting around', 'hotel6.png'),
(9, 'Rosehill House Hotel', 'Rosehill Ave, Burnley BB11 2PW, United Kingdom', '+44 1282 453931', 75, '4.4', 'Adjacent to Scott Park, this 19th-century manor house hotel with a coach house annexe is 0.6 miles from the town centre of Burnley.', 'hotel7.png'),
(10, 'Mercure Blackburn Dunkenhalgh Hotel and Spa', 'Blackburn Rd, Clayton-le-Moors, Blackburn, Lancashire BB5 5JP, United Kingdom', '+44 1254 303400', 76, '4.1', 'This upscale spa hotel in a 14th-century country manor house is 5 miles from Whalley Abbey and 12 miles from Witton Country Park.', 'hotel8.png'),
(11, 'The Lawrence', '26-28 Church St, Padiham, Burnley BB12 8HG, United Kingdom', '+44 1282 771804', 75, '4.7', 'Good location overall for sightseeing, recreation, dining and getting around', 'hotel9.png'),
(12, 'The Queens Hotel', 'Rise Ln, Todmorden OL14 7AA, United Kingdom', '+44 1706 815326', 95, '4', 'A minute walk from the Todmorden train station, which offers access to Manchester, this restored stone-walled hotel dates to 1840, and is a half-mile from Centre Vale Park.', 'hotel10.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_review`
--

CREATE TABLE `hotel_review` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_review`
--

INSERT INTO `hotel_review` (`id`, `hotel_id`, `hotel_name`, `rate`, `review`, `status`) VALUES
(1, 8, 'The Oaks Hotel', 5, 'Very good hotel.... Good supporting staff...', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `location_map_hotel`
--

CREATE TABLE `location_map_hotel` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_map_hotel`
--

INSERT INTO `location_map_hotel` (`id`, `hotel_id`, `image`) VALUES
(1, 1, 'hotel_1.png'),
(2, 4, 'hotel_2.png'),
(3, 5, 'hotel_3.png'),
(4, 6, 'hotel_4.png'),
(5, 7, 'hotel_5.png'),
(6, 8, 'hotel_6.png'),
(7, 9, 'hotel_7.png'),
(8, 10, 'hotel_8.png'),
(9, 11, 'hotel_9.png'),
(10, 12, 'hotel_10.png');

-- --------------------------------------------------------

--
-- Table structure for table `location_map_restaurant`
--

CREATE TABLE `location_map_restaurant` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_map_restaurant`
--

INSERT INTO `location_map_restaurant` (`id`, `restaurant_id`, `image`) VALUES
(1, 1, 'res_1.png'),
(2, 2, 'res_2.png'),
(3, 3, 'res_3.png'),
(4, 4, 'res_4.png'),
(5, 5, 'res_5.png'),
(6, 6, 'res_6.png'),
(7, 7, 'res_7.png'),
(8, 8, 'res_8.png'),
(9, 9, 'res_9.png'),
(10, 10, 'res_10.png');

-- --------------------------------------------------------

--
-- Table structure for table `location_map_tour`
--

CREATE TABLE `location_map_tour` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location_map_tour`
--

INSERT INTO `location_map_tour` (`id`, `tour_id`, `image`) VALUES
(1, 1, 'tour_1.png'),
(2, 2, 'tour_2.png'),
(3, 3, 'tour_3.png'),
(4, 4, 'tour_4.png'),
(5, 5, 'tour_5.png'),
(6, 6, 'tour_6.png'),
(7, 7, 'tour_7.png'),
(8, 8, 'tour_8.png'),
(9, 9, 'tour_9.png'),
(10, 10, 'tour_10.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_address` varchar(255) NOT NULL,
  `restaurant_phone` varchar(255) NOT NULL,
  `star` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `restaurant_name`, `restaurant_address`, `restaurant_phone`, `star`, `description`, `image`) VALUES
(1, 'The Palazzo at Burnley', '10 Grimshaw St, Burnley BB11 2AS, United Kingdom', '+44 1282 902123', '4.4', 'The Palazzo Restaurant and Bar is set in the heart of Burnley’s banking district, in the beautiful old bank, featuring marble clad walls and ornate ceilings. Possibly the most beautiful building in Lancashire.', 'res1.png'),
(2, 'The Loom', '49 Bank Parade, Burnley BB11 1UG, United Kingdom', '+44 1282 931173', '4.7', 'Fantastic service, great food, lovely staff and brilliant music.', 'res2.png'),
(3, 'Ballaro Restaurant', '1 Barracks Rd, Burnley BB11 4SB, United Kingdom', '+44 1282 930025', '4.4', 'Really enjoyed Steak on a stone night Service was really good Would recommend.', 'res3.png'),
(4, 'Bellissimo Italian Burnley', '3 Parker Ln, Burnley BB11 2BY, United Kingdom', '+44 1282 788689', '4.7', 'Award winning italian coffee shop and bistro. We are fully licenced and sell good sicilian wines and beers from Italy, Sicily and Sardinia. We pride ourselves on authentic cuisine .', 'res4.png'),
(5, 'Dugdales Restaurant', 'Rosehill Ave, Burnley BB11 2PW, United Kingdom', '+44 1282 453931', '4.6', 'Very nice dining experience in a beautiful setting Would return again.', 'res5.png'),
(6, 'New Waggoners', 'Manchester Road, Burnley BB11 5NS, United Kingdom', '+44 1282 421705', '4.6', 'English Restaurant serving a wide range of traditional dishes. Dietary Requirements catered for including but not limited to dedicated gluten free and vegan menus. Full stocked bar including real ales.', 'res6.png'),
(7, 'Aroma Asian Restaurant', '56 Church St, Burnley BB11 2DL, United Kingdom', '+44 1282 434403', '4.4', 'Food was very tasty, service was good and the beer is very reasonably priced.', 'res7.png'),
(8, 'Wilfreds Restaurant', 'Holme Rd, Burnley BB12 0RT, United Kingdom', '+44 1282 227733', '4.6', 'Wilfreds is definitely a place to visit,wide choice to choose from on the menu.', 'res8.png'),
(9, 'Bertrams Restaurant', 'Crow Wood,Royle Lodge,Royle Lane M65 Off, Holme Rd, Burnley BB12 0RT, United Kingdom', '+44 1282 471930', '4.5', 'Quality Food,Quality service, friendly staff, Good atmosphere', 'res9.png'),
(10, 'Bistro 197', 'Towneley Golf House, Todmorden Rd, Burnley BB11 3ED, United Kingdom', '+44 1282 451636', '4.7', 'A very welcoming atmosphere, fantastic food n drinks and great value for money.', 'res10.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_review`
--

CREATE TABLE `restaurant_review` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant_review`
--

INSERT INTO `restaurant_review` (`id`, `restaurant_id`, `restaurant_name`, `rate`, `review`, `status`) VALUES
(2, 2, 'The Loom', 5, 'Top class restaurant... Good quality food, and tp class services...', 'accepted'),
(3, 4, 'Bellissimo Italian Burnley', 5, 'Good Restaurant with good food...', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `touristplaces`
--

CREATE TABLE `touristplaces` (
  `id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `tour_address` varchar(255) NOT NULL,
  `star` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `touristplaces`
--

INSERT INTO `touristplaces` (`id`, `tour_name`, `tour_address`, `star`, `description`, `image`) VALUES
(1, 'Towneley Hall', 'Towneley Holmes, Burnley BB11 3RQ, United Kingdom', '4.1', 'Towneley Park is owned and managed by Burnley Borough Council and is the largest and most popular park in Burnley, Lancashire, England.', 'tour1.png'),
(2, 'Thompson Park', '111 Ormerod Rd, Burnley BB11 3QW, United Kingdom', '5', 'Thompson Park is a formal Edwardian park in Burnley, Lancashire. It was opened to the public in 1930. Located near the town centre, features include a boating lake, paddling pool, Italian gardens and a playground.', 'tour2.png'),
(3, 'Turf Moor', 'Turf Moor, 52-56 Harry Potts Way, Burnley BB10 4BX, United Kingdom', '4.4', 'Turf Moor is an association football stadium in Burnley, Lancashire, England, which has been the home of Burnley F.C. since 1883.', 'tour3.png'),
(4, 'National Trust - Gawthorpe Hall', 'Burnley Rd, Padiham, Burnley BB12 8UA, United Kingdom', '4.4', 'Gawthorpe Hall is an Elizabethan country house on the banks of the River Calder, in Ightenhill, a civil parish in the Borough of Burnley, Lancashire, England.', 'tour4.png'),
(5, 'Singing Ringing Tree', 'Crown Point Rd, Burnley BB11 3QZ, United Kingdom', '4.4', 'The Singing Ringing Tree is a wind powered sound sculpture resembling a tree set in the landscape of the Pennine hill range overlooking Burnley, in Lancashire, England.', 'tour5.png'),
(6, 'Prairie Sports Village', 'Windermere Ave, Burnley BB10 2FU, United Kingdom', '4.6', 'Lovely home cooked food would go back cheese onion pie delicious', 'tour6.png'),
(7, 'Ingleton Waterfalls Trail', 'Broadwood Entrance, Ingleton, Carnforth LA6 3ET, United Kingdom', '4.7', 'Ingleton Waterfalls Trail is a well-known circular trail beginning and ending in the village of Ingleton in the English county of North Yorkshire, now maintained by the Ingleton Scenery Company.', 'tour7.png'),
(8, 'Weavers Triangle Visitors Centre', '85 Manchester Rd, Burnley BB11 1JZ, United Kingdom', '4.5', 'The Weavers\' Triangle is an area of Burnley in Lancashire, England consisting mostly of 19th-century industrial buildings at the western side of town centre clustered around the Leeds and Liverpool Canal.', 'tour8.png'),
(9, 'Queen Street Mill Textile Museum', 'Queen Street Mill, Harle Syke, Briercliffe, Burnley BB10', '4.8', 'Queen Street Mill is a former weaving mill in Harle Syke, a suburb to the north-east of Burnley, Lancashire, that is a Grade I listed building.', 'tour9.png'),
(10, 'Heaton Park', 'Middleton Rd, Manchester M25 2SW, United Kingdom', '4.6', 'Heaton Park is a public park in Manchester, England, covering an area of over 600 acres. ', 'tour10.png');

-- --------------------------------------------------------

--
-- Table structure for table `tour_review`
--

CREATE TABLE `tour_review` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `rate` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_review`
--

INSERT INTO `tour_review` (`id`, `tour_id`, `tour_name`, `rate`, `review`, `status`) VALUES
(1, 2, 'Thompson Park', 4, 'Good location.... Peaceful place...', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'Jimmy William', 'jimmy@gmail.com', '12345678'),
(2, 'Jack William', 'jack@gmail.com', '12345678'),
(3, 'Admin', 'admin@gmail.com', '12345678'),
(4, 'yash', 'yash@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_review`
--
ALTER TABLE `hotel_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_map_hotel`
--
ALTER TABLE `location_map_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_map_restaurant`
--
ALTER TABLE `location_map_restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_map_tour`
--
ALTER TABLE `location_map_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_review`
--
ALTER TABLE `restaurant_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `touristplaces`
--
ALTER TABLE `touristplaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_review`
--
ALTER TABLE `tour_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel_review`
--
ALTER TABLE `hotel_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_map_hotel`
--
ALTER TABLE `location_map_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location_map_restaurant`
--
ALTER TABLE `location_map_restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location_map_tour`
--
ALTER TABLE `location_map_tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant_review`
--
ALTER TABLE `restaurant_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `touristplaces`
--
ALTER TABLE `touristplaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tour_review`
--
ALTER TABLE `tour_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
