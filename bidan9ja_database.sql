-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2019 at 12:22 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidan9ja_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_war`
--

CREATE TABLE `club_war` (
  `war_id` int(100) NOT NULL,
  `event_name` varchar(1000) NOT NULL,
  `venue` varchar(2000) DEFAULT NULL,
  `event_start_date` varchar(1000) DEFAULT NULL,
  `event_end_date` varchar(1000) DEFAULT NULL,
  `event_detail` varchar(5000) DEFAULT NULL,
  `event_date` date NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_war`
--

INSERT INTO `club_war` (`war_id`, `event_name`, `venue`, `event_start_date`, `event_end_date`, `event_detail`, `event_date`, `photo`, `company_id`) VALUES
(1, 'Bidang Club War 4 ', 'Bidang MMA & Fitness Gym, RGB Road, Sunderpur, Ghy-05', '2019-02-16', '2019-02-17', 'Club Wars 4 is on its way people!<br>\r\nStart registering now and come participate<br>\r\non the 16th and 17th of February 2019! \r\n												<br>', '2019-03-18', '655588.jpg', 1),
(2, 'Bidang Club War 3 ', 'Bidang MMA & Fitness Gym, RGB Road, Sunderpur, Ghy-05', '2018-12-18', '2018-12-18', 'Join us today for Club War 3 for some intense mma action from 5pm onwards at our Sundarpur branch.<br><br>													Date: 18th December, 2018.<br>													Venue: Bidang MMA &amp; Fitness Gym, RGB Road, Sunderpur, Ghy-05 												<br>', '2018-12-18', '799761.jpg', 1),
(3, 'Bidang Club War 2 ', 'Bidang MMA & Fitness Gym, RGB Road, Sunderpur, Ghy-05', '2018-09-23', '2018-09-24', 'After the huge success of the first Club Wars, where nearly 120 fighters \r\n													took part, we are brining you Club Wars 2. Everybody is welcomed to join \r\n													the event. There will be two categories as usual: Beginners and Advanced. \r\n													This is a very good stage to test your skills as a beginner against other \r\n													beginner fighters.<br><br>\r\n\r\n													Date: 23rd and 24th September 2018.<br>\r\n													Venue: Bidang MMA &amp; Fitness Gym, RGB Road, Sunderpur, Ghy-05<br>\r\n													Registration Last Date: 20th September, 2018<br>\r\n													For more details and queries contact: +91 84719 87539, +91 70860 41370\r\n												<br>', '2018-09-05', '149777.jpg', 1),
(4, 'Bidang Club War 1 ', 'Bidang MMA & Fitness Gym, RGB Road, Sunderpur, Ghy-05', '2018-08-12', '2018-08-12', 'Everyone is welcome to the 1st Inter Club Amateur MMA Championship 2018. \r\n													We welcome all martial artists of both levels, beginners and advanced, \r\n													to this championship to get real life experience of MMA. There will be \r\n													two categories: beginners and advanced. This championship is organised \r\n													exclusive for the benefits of beginners so that they can prepare \r\n													themselves for larger platforms in their lives. So come and join.. <br><br>\r\n\r\n													Date: 12th August, 2018<br>\r\n													Venue: Bidang MMA &amp; Fitness Gym, RGB Road, Sunderpur, Ghy-05<br>\r\n													Registration Last Date: 10th August, 2018<br>\r\n													Phone: +91 84719 87539 / +91 70860 41370\r\n												<br>', '2018-08-06', '154685.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `company_id` int(100) NOT NULL,
  `cmp_name` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `cmp_add` varchar(100) NOT NULL,
  `street_add` varchar(100) NOT NULL,
  `cmp_landmark` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `landline1` varchar(100) NOT NULL,
  `landline2` varchar(100) NOT NULL,
  `landline3` varchar(100) NOT NULL,
  `mobile1` varchar(100) NOT NULL,
  `mobile2` varchar(100) NOT NULL,
  `mobile3` varchar(100) NOT NULL,
  `email1` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `email3` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `propic` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_id`, `cmp_name`, `contact_person`, `cmp_add`, `street_add`, `cmp_landmark`, `pincode`, `city`, `district`, `state`, `country`, `landline1`, `landline2`, `landline3`, `mobile1`, `mobile2`, `mobile3`, `email1`, `email2`, `email3`, `fax`, `propic`) VALUES
(1, 'Probit Technologies', 'Probit Technologies', 'H/N: 16\r\nAkhibad building\r\n', 'Sakhtigarh path', 'near kali mandir', '781001', 'Guwahati', 'Kamrup', 'Assam', 'India', '', '', '', '1234567890', '', '8749853369', 'aaravjyotichetia@gmail.com', 'aankur@live.iin', 'paramiita@gmail.com', '', '455593.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fight_league`
--

CREATE TABLE `fight_league` (
  `fight_id` int(100) NOT NULL,
  `event_name` varchar(1000) NOT NULL,
  `venue` varchar(1000) DEFAULT NULL,
  `event_start_date` varchar(1000) DEFAULT NULL,
  `event_end_date` varchar(1000) DEFAULT NULL,
  `event_detail` varchar(5000) DEFAULT NULL,
  `league_date` date NOT NULL,
  `photo` varchar(200) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fight_league`
--

INSERT INTO `fight_league` (`fight_id`, `event_name`, `venue`, `event_start_date`, `event_end_date`, `event_detail`, `league_date`, `photo`, `company_id`) VALUES
(1, 'Trans V Bidang Fight League 2 ', 'Guwahati', '2019-02-13', '2019-02-13', 'Happy to announce that Trans V Bidang Fight League 2 is going to start soon. \r\n													Many international and national professional mma fighters will participate, \r\n													like last time, but even better!<br>\r\n\r\n													Fight fans of Guwahati, do not miss this opportunity to see some badass \r\n													action inside the octagon again! Stay tuned for more updates \r\n												<br>', '2018-02-13', '360290.jpg', 1),
(2, 'Trans V Bidang Fight League 1 ', 'Bhogeswari Phukanani Indoor Stadium, Dispur, Guwahati', '2017-03-05', '2017-03-05', 'First ever professional MMA league as TransV Bidang Fight League under 													the aegis of Bidang MMA gym and Fitness Center and Trans Virtual Ltd, 													an IT Services Company from Guwahati, Assam<br><br>													Date: 5th March ,2017 4 PM Onwards.<br>													Venue: Bhogeswari Phukanani Indoor Stadium, Dispur, Guwahati 												<br>', '2016-12-04', '63864.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `league_image`
--

CREATE TABLE `league_image` (
  `league_id` int(100) NOT NULL,
  `fight_id` int(100) NOT NULL,
  `photo_title` varchar(1000) NOT NULL,
  `event_photo` varchar(1000) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(100) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `uemail` varchar(200) NOT NULL,
  `upass` varchar(500) NOT NULL,
  `role` int(100) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `uname`, `uemail`, `upass`, `role`, `company_id`) VALUES
(1, 'admin', 'admin@admin.in', '$2y$10$HQAGYqVBaknGDz5PQfOR7O2j.0sWcbzJvUJO96YN9nwqMWoeeIima', 0, 1),
(2, 'ankur', 'aaravjyotichetia@gmail.com', '$2y$10$kb5SWbWeD5jlgsFYd026u.wjmemWlsmvcUn8VsiSWR4NmAeEFX2oi', 1, 1),
(6, 'bidang', 'c.bhabajeet@gmail.com', '$2y$10$.EaCVqKO0Avxn7Zb.Sfywegnl651KHQx7I9Syy7nOfrBHf55H7RzG', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(100) NOT NULL,
  `news_name` varchar(200) NOT NULL,
  `news_details` varchar(5000) DEFAULT NULL,
  `news_date` date NOT NULL,
  `photo` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_details`, `news_date`, `photo`, `company_id`) VALUES
(1, 'BIDANG Club Wars 4 is on its way! Start registering now.. ', 'Club Wars 4 is on its way people!<br>\r\n\r\n													Start registering now and come participate <br>on the 16th and 17th of February 2019!\r\n												<br>', '2019-02-04', '767293.jpg', 1),
(2, 'BIDANG   MMA and   FITNESS GYM has   extended its           branch in   Sharabbhati         ', 'Want to manage your weight, learn self defence, MMA training, be a part \r\n													of fitness brigade with Assam\'s only professional MMA fighter Bhabajeet \r\n													Choudhury . Only at Bidang Fitness gym. So, we have extended our branch \r\n													at Gymkhana Bulding.Dr B K Kakati Rd,Sarab Bhati Chariali, Guwahati 781008<br>\r\n													Join us to lead a healthy and Fit lifestyle.<br>\r\n													For enquiries call: +91 69012 255313 / +91 94019 24863 \r\n												<br>', '2019-02-08', '143420.jpg', 1),
(3, 'Team Bidang with a great performance in the BodyPower MMA Championship in Mumbai!! ', 'Team Bidang with a great performance in the BodyPower MMA Championship \r\n													in Mumbai!!<br>Congratulations to:<br><br>\r\n\r\n														Ritesh Paswan for GOLD<br>\r\n														Johny Darlong for SILVER<br>\r\n														Anupam for SILVER<br>\r\n														Joyraj Pegu for BRONZE<br>', '2019-01-13', '856254.jpg', 1),
(4, 'Opening Today Come and Join Us  for the Grand Openning at Sarab Bhati', 'Bidang has come to Sarabbhati! Come join us on 9th Feb for the Grand Opening!<br>', '2019-02-09', '965999.jpg', 1),
(6, 'Abdul Badakhshi as our new mma coach from Afghanistan.', '<span>Team Bidang would like to welcome Abdul Badakhshi as our new MMA coach. He is a top-level mixed martial artist from Afghanistan, who has competed in various MMA organizations around the world, including the Super Fight League His pro record is 9-2.<br>He\'s fierce and he\'s dangerous!! He has been awarded the best fighter in Super Fight League 2018 and is the top-ranked fighter in South East Asia.<br> <br>Do <span>not miss this golden opportunity to train and learn from one of the best out there.<br> <br>Call us for more details: 8471987539, 7086041370</span></span>', '2019-02-23', '781767.jpg', 1),
(7, 'Women\'s Day Membership Offer for Women', '<div>Women\'s Day Offer</div><div>Grab the offer before it ends!!</div><div><br></div><div>Buy 1 Membership and get 1 membership free..</div><div>( for women\'s only)<br></div>', '2019-03-05', '992841.jpg', 1),
(8, 'Bidang Club War 4', 'Club war 4 successfully done . 26 selected fought on 9th March . Many many congratulations to all fighters<br>', '2019-03-11', '47833.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_photo`
--

CREATE TABLE `news_photo` (
  `photo_id` int(100) NOT NULL,
  `news_id` int(100) NOT NULL,
  `photo_title` varchar(1000) NOT NULL,
  `event_photo` varchar(1000) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `war_image`
--

CREATE TABLE `war_image` (
  `image_id` int(100) NOT NULL,
  `war_id` int(100) NOT NULL,
  `photo_title` varchar(1000) NOT NULL,
  `event_photo` varchar(1000) NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `war_image`
--

INSERT INTO `war_image` (`image_id`, `war_id`, `photo_title`, `event_photo`, `company_id`) VALUES
(1, 1, 'CLUB WAR 4 ', '318408.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club_war`
--
ALTER TABLE `club_war`
  ADD PRIMARY KEY (`war_id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `fight_league`
--
ALTER TABLE `fight_league`
  ADD PRIMARY KEY (`fight_id`);

--
-- Indexes for table `league_image`
--
ALTER TABLE `league_image`
  ADD PRIMARY KEY (`league_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `news_photo`
--
ALTER TABLE `news_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `war_image`
--
ALTER TABLE `war_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `war_id` (`war_id`),
  ADD KEY `company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `club_war`
--
ALTER TABLE `club_war`
  MODIFY `war_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fight_league`
--
ALTER TABLE `fight_league`
  MODIFY `fight_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `league_image`
--
ALTER TABLE `league_image`
  MODIFY `league_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news_photo`
--
ALTER TABLE `news_photo`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `war_image`
--
ALTER TABLE `war_image`
  MODIFY `image_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `war_image`
--
ALTER TABLE `war_image`
  ADD CONSTRAINT `war_image_ibfk_1` FOREIGN KEY (`war_id`) REFERENCES `club_war` (`war_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
