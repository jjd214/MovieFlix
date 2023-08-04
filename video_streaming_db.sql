-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 02:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_streaming_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `author_tbl`
--

CREATE TABLE `author_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `movie_name` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `date_publish` date DEFAULT NULL,
  `actors` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `image_url` text NOT NULL,
  `video_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `author_tbl`
--

INSERT INTO `author_tbl` (`id`, `firstname`, `lastname`, `gender`, `movie_name`, `genre`, `date_publish`, `actors`, `description`, `image_url`, `video_url`) VALUES
(17, 'Gene', 'Stupnitsky', 'Male', 'No Hard Feelings', 'action', '2023-06-23', 'Jennifer Lawrence, Andrew Barth Feldman, Laura Benanti, Natalie Morales\r\n                                        ', 'The R-rated studio comedy hardly makes any theatrical appearances these days, especially in the age of streaming. The only adult comedies usually come from Universal Pictures, which relish in genre-bending Cocaine Bear Renfield mixing up concepts for kids but with a mature twist the upcoming \"Strays, or banking on a comedian closely associated with Judd Apatow Bros. But a solo comedic vehicle for an A-lister to show off their comedic chops and not from Universal sounds like a pipe dream. But Sony and Oscar-winner Jennifer Lawrence have made that pipe dream into a raunchy reality with the confident 80s-styled R-rated comedy No Hard Feelings.\r\n                                        ', 'IMG-649ad3080d0b30.18899614.jpg', 'video-649ad3080d3ba5.96129667.mp4'),
(18, 'Sam', 'Hamgrave', 'Male', 'You Hurt My Feelings', 'Comedy', '2023-05-26', ' Julia Louis-Dreyfus, Tobias Menzies, Michaela Watkins, Arian Moayed\r\n                    ', 'From acclaimed filmmaker Nicole Holofcener comes a sharply observed comedy about a novelist whose long standing marriage is suddenly upended when she overhears her husband give his honest reaction to her latest book. A film about trust, lies, and the things we say to the people we love most.\r\n                    ', 'IMG-649ad6437523f0.59009914.jpg', 'video-649ad6437bdbf4.07120509.mp4'),
(19, 'Celine', 'Songs', 'Female', 'Past Lives', 'Romance', '2023-06-27', 'Greta Lee, Teo Yoo, John Magaro, Seung-ah Moon\r\n                    ', 'A remarkable debut for writer-director Celine Song, Past Lives uses the bonds between its sensitively sketched central characters to support trenchant observations on the human condition.\r\n                    ', 'IMG-649ad80f5208b1.38788704.jpeg', 'video-649ad80f523b30.57809184.mp4'),
(20, ' Jaume ', 'Collet-Serra', 'Male', 'Black Adam', 'Action', '2023-06-02', 'Dwayne Johnson,Aldis Hodge,Pierce Brosnan,Noah Centineo\r\n                                        ', 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods--and imprisoned just as quickly--Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.\r\n                                        ', 'IMG-649adac245bd41.82372746.jpg', 'video-649adac245ee47.53084404.mp4'),
(21, 'Debra', 'Granik', 'Female', 'Leave No Trace', 'Horror', '2018-10-02', 'Ben Foster, Thomasin McKenzie, Jeff Kober, Dale Dickey\r\n                    ', 'A father and daughter live a perfect but mysterious existence in Forest Park, a beautiful nature reserve near Portland, Ore., rarely making contact with the world. But when a small mistake tips them off to authorities, they are sent on an increasingly erratic journey in search of a place to call their own.\r\n                    ', 'IMG-649adc08b8f9c1.63187171.jpg', 'video-649adc08b92d93.10891718.mp4'),
(22, 'Radha', 'Blank', 'Male', 'Fourty-Four Years Old', 'Action', '2023-10-03', 'Welker White, Reed Birney, Radha Blank, Peter Kim\r\n                                        ', 'Radha Blank, playing herself, is struggling to live up to the 30-Under 30 award she won ten years back when she wrote a play that got some attention. Now approaching the Big Four-Oh, shes figuring out how THE FORTY-YEAR-OLD VERSION of herself can remain vital and relevant. To make ends meet, she teaches theater to high school students in Harlem as she struggles to get her work produced with the help of her best friend and agent Archie (Peter Kim). When the only producer interested is a pretentious white guy (Reed Birney) who values commerce over art, she turns to rapping to find her authentic self, then drops it without much of a try until a young musician named D (Oswin Benjamin) persuades her otherwise.\r\n                                        ', 'IMG-649ade004fb089.48914205.jpg', 'video-649ade004fde03.90399927.mp4'),
(23, 'Lachlan ', 'Mcleod', 'Male', 'Clean', 'Horror', '2023-06-14', 'David Elliot-Jones, Charlotte Wheaton, Nick Batzias\r\n                    ', 'lorem ipsum\r\n                    ', 'IMG-649ae47c23d7a4.03485940.jpg', 'video-649ae47c241553.36728215.mp4'),
(24, ' Louis', 'Leterrier', 'Male', 'Fast X', 'Action', '2023-06-09', 'Neal H. Moritz, Vin Diesel, Justin Lin, Jeff Kirschenbaum, Samantha Vincent\r\n                                        ', 'Over many missions and against impossible odds, Dom Toretto (Vin Diesel) and his family have outsmarted, out-nerved and outdriven every foe in their path. Now, they confront the most lethal opponent theyve ever faced: A terrifying threat emerging from the shadows of the past whos fueled by blood revenge, and who is determined to shatter this family and destroy everything--and everyone--that Dom loves, forever.\r\n                                        ', 'IMG-649ae5691744b7.51934547.jpg', 'video-649ae569177703.49802831.mp4'),
(26, 'Domingo', 'Gonzales', 'Male', 'My Fault', 'Romance', '2023-06-08', 'Gabriel Guevara, Marta Hazas, Marta Hazas\r\n                    ', 'Noah has to leave her town, boyfriend and friends behind and move into the mansion of William Leister, her motherâ€™s new rich husband. Seventeen years old, proud and independent, Noah resists living in a mansion surrounded by luxury. There, she meets Nick, her new stepbrother, and the clash of their strong personalities becomes evident from the very beginning. Noah soon discovers that behind the image of a model son, Nick hides a life of fighting, gambling and illegal car racingâ€“exactly what she has always run away from. Despite the abyss between them, both begin to feel an irresistible attraction that will soon turn into pure fire and unbridled passion. Neither the ongoing rivalry, nor the opposition of those around them can prevent them from falling secretly and madly in love. But Nicks turbulent present and Noahs stormy past will put to a test both their lives and their forbidden love.\r\n                    ', 'IMG-649ae7ee7f29f6.63033932.jpg', 'video-649ae7ee7f6415.27809499.mp4'),
(27, ' James ', 'Cameron', 'Male', 'Titanic', 'Romance', '1997-12-19', 'Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates\r\n                    ', 'lorem\r\n                    ', 'IMG-649ae9a006aa81.48417139.jpg', 'video-649ae9a006e718.38813457.mp4'),
(28, 'Aaron ', 'Horvath', 'Male', 'The Super Mario Bros.', 'Action', '2023-06-15', 'Christopher Meledandri, Shigeru Miyamoto\r\n                                        ', 'With help from Princess Peach, Mario gets ready to square off against the all-powerful Bowser to stop his plans from conquering the world.\r\n                                        ', 'IMG-649aea7ed30cd6.25974419.jpg', 'video-649aea7ed34104.57594171.mp4'),
(29, ' Nick ', ' Nick Bruno', 'Male', 'Nimona', 'Adventure', '2023-06-30', 'Roy Lee, Karen Ryan, Julie Zackary\r\n                    ', 'lorem\r\n                    ', 'IMG-649aed5f204a88.76946610.jpg', 'video-649aed5f20a186.11543763.mp4'),
(30, 'James', 'James Cameron', 'Male', 'AVATAR', 'Action', '2022-12-16', 'James Cameron, Rick Jaffa, Amanda Silver\r\n                                        ', 'Set more than a decade after the events of the first film, Avatar: The Way of Water begins to tell the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.\r\n                                        ', 'IMG-649aee221e2396.98928212.jpg', 'video-649aee221e5678.93568981.mp4'),
(31, 'Guy', ' Ritchie', 'Male', 'The Convenant', 'Action', '2023-05-09', 'Guy Ritchie, Ivan Atkinson, John Friedberg, Josh Berger\r\n                                        ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                        ', 'IMG-649da80fc357d3.30777405.jpg', 'video-649da80fc38282.54435237.mp4'),
(32, 'Chad ', 'Stahelski', 'Male', 'John Wick 4', 'Action', '2023-05-23', 'Keanu Reeves, Basil Iwanyk, Erica Lee, Chad Stahelski\r\n                                        ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                        ', 'IMG-649da8e466afc3.70382623.jpg', 'video-649da8e466e284.13103878.mp4'),
(33, 'Michael ', ' Jordan', 'Male', 'Creed 3', 'Action', '2023-05-03', 'Irwin Winkler, Charles Winkler, William Chartoff, David Winkler, Ryan Coogler, Michael B. Jordan, Elizabeth Raposo, Jonathan Glickman, Sylvester Stallone\r\n                                        ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                        ', 'IMG-649da9d50dc4b3.63140806.jpg', 'video-649da9d50df4d5.89990398.mp4'),
(34, 'Christopher ', ' Nolan', 'Male', 'InterStellar', 'Adventure', '2023-06-23', 'Emma Thomas, Christopher Nolan, Lynda Obst\r\n                    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                    ', 'IMG-649dab4453e159.24896257.jpg', 'video-649dab44541026.41726541.mp4'),
(35, 'Rubin ', 'Stein', 'Male', 'Tin and Tina', 'Horror', '2023-05-26', 'Olmo Figueredo, GonzÃ¡lez-Quevedo\r\n                    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                    ', 'IMG-649eb91dedf0e8.67414308.jpg', 'video-649eb91e2756f4.01979171.mp4'),
(36, 'Sam ', 'Hargrave', 'Male', 'Extraction', 'Action', '2023-04-25', 'Eric Gitter, Chris Hemsworth, Mike Larocca, Joe Russo, Anthony Russo\r\n                    ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                    ', 'IMG-649ec4d6440ee1.46593963.jpg', 'video-649ec4d6a110b3.39076953.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(8, 'IMG-5f8954bd209a92.78214246.jpg'),
(9, 'IMG-5f8954caa02539.76436861.jpg'),
(10, 'IMG-6474ac06ba0c93.73828726.png'),
(11, 'IMG-6474b00e300910.87830122.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `access` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `firstname`, `lastname`, `gender`, `age`, `dob`, `username`, `password`, `access`) VALUES
(7, 'Clifford Laureles', 'Lorenzo', 'Male', '21', '2023-06-28', 'cliff123', '81f7bd7b83ba4611c64f4f04e499467f', 'admin'),
(8, 'John Jacob', 'Dimaya', 'Male', '19', '2003-09-18', 'jjd214', '2d0e88a0c91399493596004c796ca5b4', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author_tbl`
--
ALTER TABLE `author_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author_tbl`
--
ALTER TABLE `author_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
