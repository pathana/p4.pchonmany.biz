-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 05:48 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pchonman_p4_pchonmany_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`) VALUES
(1, 1387687094, 1387687094, 1, 'hello world!'),
(2, 1387734180, 1387734180, 5, 'Tickets are now on sale for our show on 1/10/14 at The Joint in Las Vegas . Click here to purchase: http://bit.ly/1gCYc7p'),
(3, 1387734223, 1387734223, 5, 'Win a chance to join us on stage in LA for CONCERT FOR THE PHILIPPINES. Support @MusicForRelief and enter here: http://bit.ly/19ncnZ5 '),
(4, 1387740830, 1387740830, 6, 'Thank you everyone for all the heartwarming wishes for Saffron''s arrival.  Erin, Coco and I are beyond humbled and filled with love. -Tony'),
(5, 1387740951, 1387740951, 6, 'Just spent an amazing week in Korea #beautifulpeople thank u Korea = inspired gx'),
(6, 1387741188, 1387741188, 7, 'Almost at 100 million on YouTube w/ C Stars-  thank you everyone for adding fuel to the fire, this is crazy'),
(7, 1387741379, 1387741379, 7, 'Last night was amazing Denver!!  Thank you for all the love and the support, lots of $ was raised for much needed Colorado flood relief!'),
(8, 1387741675, 1387741675, 8, 'One of my best friend''s in the universe turns 24 in a few minutes. So blessed to have known T for so long. Thankful. #HappyBDayTaylorYork'),
(9, 1387741850, 1387741850, 8, 'Alright! We''re bout to walk to stage at @NBCTheVoice!  This is our last performance of the year! Tune in & celebrate with us! #thxfor2013 ❤'),
(10, 1387741978, 1387741978, 5, 'Our new album RECHARGED is available everywhere now. Get it on @iTunesMusic http://smarturl.it/recharged  or at http://www.linkinpark.com  #RECHARGED'),
(11, 1387742025, 1387742025, 9, 'The full band\r\n\r\nDeutsche Freunde : noch 5 Tage! http://wearephoenix.com/tour/ \r\n\r\nhttp://instagram.com/p/gs70DcAcEn/ \r\n(Picture by Josh Bender)'),
(12, 1387742041, 1387742041, 9, 'Nous sommes tellement désolés...Nous y avons cru jusqu''au bout mais la voix de Thomas n''est pas revenue malgré les efforts des medecins...'),
(13, 1387742195, 1387742195, 10, 'Kudos to musical director Rob Mathes, to the whole band of players including singer Jimmy Nail and regular band vocalist Jo Lawry, guitarist Dominic Miller, bass player Ira Coleman, violinists (and siblings) Kathryn and Peter Tickell, and to the enormously gifted Wilson family of extraordinary singers - five brothers - imported just for the Public shows from the north of England. I hope they come back soon.'),
(14, 1387742277, 1387742277, 11, 'Considering re-release of The Joker re-mastered using the latest greatest audio engineering. Thoughts? #smbjoker'),
(15, 1387742346, 1387742346, 11, 'Journey Steve Miller Band and Tower Of Power are hitting the road starting 5/15/14 as a triple play all Summer! #rock'),
(16, 1387742397, 1387742397, 12, 'Sacrilege took two awards at the UK Video Music Awards!  Best International Rock/Indie Video and Best Editing.  YEAH'),
(17, 1387742469, 1387742469, 12, 'Fresh off stage\r\nlast show of the year\r\nthis says it all\r\nRIO  xo yyys ❤\r\nphoto by malomadness http://instagram.com/p/gjunNexOsc/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) CHARACTER SET latin1 NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `username`, `email`) VALUES
(1, 1387671738, 1387732018, '17e2e3b4100b7dc178c612d3ab037eddd7528b48', 'c5b59896a9e368d19e20cf024a28004dfa80b46e', 0, '', 'Pathana', 'Chonmany', 'pathanac', 'pathanaxforever@gmail.com'),
(5, 1387692255, 1387692255, '6bed603977497af362340f344f5a5bc91eb20540', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'Linkin', 'Park', 'linkinpark', 'linkinpark@email.com'),
(6, 1387706227, 1387706227, '99eaf7df995caaa236dbd164fe1f21586e858062', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'No', 'Doubt', 'nodoubt', 'nodoubt@email.com'),
(7, 1387707386, 1387738288, '8575972860801ad986eaa77b9d4c2377d232de95', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'OneRepublic', '', 'onerepublic', 'onerepublic@email.com'),
(8, 1387728484, 1387728484, '7897ded3459faab7d5ee5f11e0586c08e1465b28', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'Paramore', '', 'paramore', 'paramore@email.com'),
(9, 1387728521, 1387728521, '3fc6ecf743e794894808953c8ace5b7fb88d5a24', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'Phoenix', '', 'phoenix', 'phoenix@email.com'),
(10, 1387728551, 1387728551, '1a829b71832eeb30c28a4483e7a37e943603edc9', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'The', 'Police', 'thepolice', 'thepolice@email.com'),
(11, 1387730367, 1387730367, '2a4de1d573cb16e9f6828e6ddc422160b1342d1a', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'Steve Miller', 'Band', 'stevemillerband', 'stevemillerband@email.com'),
(12, 1387731628, 1387731628, 'af1f896c303e72b46f91632c292a03da4f74003f', '6935cd0561338b4eb67cd0f1c1fb0b5c202f1739', 0, '', 'Yeah Yeah', 'Yeahs', 'yeahyeahyeahs', 'yeahyeahyeahs@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_users`
--

CREATE TABLE IF NOT EXISTS `users_users` (
  `user_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK. Follower.',
  `user_id_followed` int(11) NOT NULL COMMENT 'Followed.',
  PRIMARY KEY (`user_user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_users`
--

INSERT INTO `users_users` (`user_user_id`, `created`, `user_id`, `user_id_followed`) VALUES
(2, 1387735613, 1, 6),
(3, 1387742503, 1, 7),
(4, 1387742505, 1, 8),
(5, 1387742506, 1, 9),
(6, 1387742507, 1, 10),
(7, 1387742508, 1, 11),
(8, 1387742509, 1, 12),
(9, 1387748948, 1, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_users`
--
ALTER TABLE `users_users`
  ADD CONSTRAINT `users_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
