-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2022 at 02:33 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vgr_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `gamelists`
--

CREATE TABLE `gamelists` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `release-date` date NOT NULL,
  `directors` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamelists`
--

INSERT INTO `gamelists` (`id`, `description`, `title`, `year`, `genres`, `release-date`, `directors`) VALUES
(1, 'Geralt is in the southern province of Toussaint where a monstrous serial killer is targeting knights with a dark past. Geralt and his old vampire friend investigate the killer\'s motives.', 'The Witcher 3: Wild Hunt - Blood and Wine', '2016', 'Action, Adventure, Drama, Fantasy, Horror, Mystery', '2016-05-31', 'Konrad Tomaszkiewicz'),
(2, 'Amidst the decline of the Wild West at the turn of the 20th century, outlaw Arthur Morgan and his gang struggle to cope with the loss of their way of life.', 'Red Dead Redemption II', '2018', 'Action, Adventure, Crime, Drama, Western', '2018-10-26', 'Rockstar'),
(3, 'A monster hunter for hire embarks on an epic journey to find his former apprentice before The Wild Hunt can capture her and bring about the destruction of the world.', 'The Witcher 3: Wild Hunt', '2015', 'Action, Adventure, Drama, Fantasy, Mystery, Romance', '2015-05-19', 'Konrad Tomaszkiewicz'),
(4, 'After wiping out the gods of Mount Olympus, Kratos moves on to the frigid lands of Scandinavia, where he and his son must embark on an odyssey across a dangerous world of gods and monsters.', 'God of War', '2018', 'Action, Adventure, Drama, Fantasy', '2018-04-20', 'Cory Barlog'),
(5, 'A young Kokiri boy discovers that his destiny is to free the Seven Sages and save the land of Hyrule from the treacherous sorcerer Ganondorf.', 'The Legend of Zelda: Ocarina of Time', '1998', 'Action, Adventure, Fantasy', '1998-11-21', 'Tôru Ôsawa, Eiji Aonuma, Yoichi Yamada, Shigeru Miyamoto, Yoshiaki Koizumi'),
(6, 'A crack government anti-terrorist squad takes over an obscure Alaskan nuclear disposal facility. Solid Snake is up for the task to infiltrate the facility, rescue the two hostages and thwart the terrorists\' plans.', 'Metal Gear Solid', '1998', 'Action, Adventure, Drama, Mystery, Sci-Fi, Thriller', '1998-09-03', 'Hideo Kojima'),
(7, '', 'Grand Theft Auto V', '2013', 'Action, Crime, Drama', '2013-09-17', 'Rockstar'),
(8, '', 'Uncharted 4: A Thief\'s End', '2016', 'Action, Adventure, Drama, Thriller', '2016-05-10', 'Bruce Straley, Neil Druckmann'),
(9, '', 'Mass Effect 2', '2010', 'Action, Adventure, Drama, Sci-Fi', '2010-01-26', 'Casey Hudson'),
(10, '', 'Star Wars: Knights of the Old Republic', '2003', 'Action, Adventure, Fantasy, Mystery, Romance, Sci-Fi', '2003-07-15', 'Casey Hudson'),
(11, '', 'Half-Life 2', '2004', 'Action, Adventure, Sci-Fi, Thriller', '2004-11-16', 'David Speyrer'),
(12, '', 'The Elder Scrolls V: Skyrim', '2011', 'Action, Adventure, Fantasy', '2011-11-11', 'Nick James Pearce, Todd Howard'),
(13, '', 'Portal 2', '2011', 'Adventure, Comedy, Sci-Fi, Thriller', '2011-04-19', ''),
(14, '', 'Batman: Arkham City', '2011', 'Action, Adventure, Crime, Fantasy, Mystery, Sci-Fi, Thriller', '2011-10-18', 'Sefton Hill'),
(15, '', 'Metal Gear Solid 4: Guns of the Patriots', '2008', 'Action, Adventure, Drama, Mystery, Sci-Fi, Thriller, War', '2008-06-12', 'Hideo Kojima'),
(16, '', 'Uncharted: The Nathan Drake Collection', '2015', 'Action, Adventure, Fantasy, Horror, Mystery, Thriller', '2015-10-07', 'Amy Hennig'),
(17, '', 'Uncharted 2: Among Thieves', '2009', 'Action, Adventure, Fantasy, Horror, Mystery, Thriller', '2009-10-13', 'Amy Hennig, Bruce Straley'),
(18, '', 'Red Dead Redemption', '2010', 'Action, Adventure, Crime, Drama, Western', '2010-05-18', 'Rockstar'),
(19, '', 'Spider-Man', '2018', 'Action, Adventure, Fantasy, Sci-Fi', '2018-09-07', 'Ryan Smith'),
(20, '', 'Grand Theft Auto: San Andreas', '2004', 'Action, Crime', '2004-10-26', 'Rockstar'),
(21, '', 'Horizon Zero Dawn', '2017', 'Action, Adventure, Mystery, Sci-Fi', '2017-02-28', 'Mathijs de Jonge'),
(22, '', 'Detroit: Become Human', '2018', 'Action, Adventure, Drama, Mystery, Sci-Fi, Thriller', '2018-05-25', 'David Cage'),
(23, '', 'Super Mario World', '1990', 'Action, Adventure, Family, Fantasy', '1990-11-21', 'Takashi Tezuka'),
(24, '', 'Super Mario Bros. 3', '1988', 'Action, Adventure, Family, Fantasy', '1988-10-23', 'Takashi Tezuka, Shigeru Miyamoto'),
(25, '', 'God of War II', '2007', 'Action, Adventure, Fantasy, History', '2007-03-13', 'Cory Barlog'),
(26, '', 'God of War III', '2010', 'Action, Adventure, Fantasy, History', '2010-03-16', 'Stig Asmussen'),
(27, '', 'Grand Theft Auto: Vice City', '2002', 'Action, Crime, Drama', '2002-10-29', 'Rockstar'),
(28, '', 'The Last of Us: Left Behind', '2014', 'Action, Adventure, Drama, Horror, Sci-Fi, Thriller', '2014-02-14', 'Bruce Straley'),
(29, '', 'God of War', '2005', 'Action, Adventure, Fantasy, History', '2005-03-22', 'David Jaffe, Greg Tiernan'),
(30, '', 'The Walking Dead: The Game - Season 1', '2012', 'Drama, Horror, Sci-Fi, Thriller', '2012-04-24', 'Jake Rodkin, Nick Herman, Dennis Lenart, Eric Parsons, Sean Ainsworth, Sean Vanaman'),
(31, '', 'StarCraft', '1998', 'Action, Adventure, Sci-Fi, War', '1998-03-31', 'Glenn Stafford, Matt Samia, Duane Stinnett, Chris Metzen, Mark Schwarz'),
(32, '', 'Fallout 3', '2008', 'Action, Adventure, Sci-Fi', '2008-10-28', 'Todd Howard'),
(33, '', 'Batman: Arkham Knight', '2015', 'Action, Adventure, Crime, Fantasy, Horror, Mystery, Sci-Fi, Thriller', '2015-06-23', 'Sefton Hill'),
(34, '', 'Dark Souls III', '2016', 'Action, Adventure, Fantasy, Horror', '2016-03-24', 'Hidetaka Miyazaki, Yui Tanimura, Isamu Okano'),
(35, '', 'Assassin\'s Creed: Origins', '2017', 'Action, Adventure, Fantasy, History, Sci-Fi', '2017-10-27', 'Ashraf Ismail, Laurent Bernier, Jean Guesdon'),
(36, '', 'The Elder Scrolls IV: Oblivion', '2006', 'Action, Adventure, Fantasy', '2006-03-20', 'Todd Howard'),
(37, '', 'Assassin\'s Creed II', '2009', 'Action, Adventure, Sci-Fi', '2009-11-17', 'Sylvain Bernard, Shea Wageman'),
(38, '', 'Final Fantasy VI', '1994', 'Action, Adventure, Fantasy, Sci-Fi', '1994-04-02', 'Hiroyuki Itô, Yoshinori Kitase'),
(39, '', 'Super Mario Bros.', '1985', 'Action, Adventure, Fantasy', '1985-09-13', 'Shigeru Miyamoto'),
(40, '', 'Call of Duty 4: Modern Warfare', '2007', 'Action, Thriller', '2007-11-05', 'Jason West'),
(41, '', 'Grand Theft Auto IV', '2008', 'Action, Crime, Drama', '2008-04-29', 'Rockstar'),
(42, '', 'Fallout 4', '2015', 'Action, Adventure, Sci-Fi', '2015-11-06', 'Todd Howard'),
(43, '', 'Far Cry 3', '2012', 'Action, Adventure', '2012-12-04', 'Laurent Bernier, Robert Darryl Purdy'),
(44, '', 'Tomb Raider', '2013', 'Action, Adventure, Fantasy, Thriller', '2013-03-05', 'Noah Hughes'),
(45, '', 'Super Mario 3D World', '2013', 'Action, Adventure, Family, Fantasy', '2013-11-21', 'Koichi Hayashida'),
(46, '', 'Diablo II', '2000', 'Action, Adventure, Fantasy, Horror', '2000-06-29', 'Blizzard North'),
(47, '', 'Uncharted: The Lost Legacy', '2017', 'Action, Adventure, Mystery, Thriller', '2017-08-22', 'Shaun Escayg, Kurt Margenau'),
(48, '', 'Halo: Combat Evolved', '2001', 'Action, Adventure, Mystery, Sci-Fi', '2001-11-06', 'Jason Jones'),
(49, '', 'Half-Life 2: Episode One', '2006', 'Action, Adventure, Sci-Fi, Thriller', '2006-05-31', 'Robin Walker'),
(50, '', 'Grand Theft Auto III', '2001', 'Action, Crime, Drama', '2001-10-22', 'Rockstar');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_game` int(11) NOT NULL,
  `rating` decimal(4,2) NOT NULL,
  `email_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_game`, `rating`, `email_user`) VALUES
(1, '9.80', 'Admin@gmail.com'),
(2, '9.70', 'Admin@gmail.com'),
(3, '9.70', 'Admin@gmail.com'),
(4, '9.60', 'Admin@gmail.com'),
(5, '9.60', 'Admin@gmail.com'),
(6, '9.60', 'Admin@gmail.com'),
(7, '9.50', 'Admin@gmail.com'),
(8, '9.50', 'Admin@gmail.com'),
(9, '9.50', 'Admin@gmail.com'),
(10, '9.50', 'Admin@gmail.com'),
(11, '9.40', 'Admin@gmail.com'),
(12, '9.40', 'Admin@gmail.com'),
(13, '9.40', 'Admin@gmail.com'),
(14, '9.40', 'Admin@gmail.com'),
(15, '9.40', 'Admin@gmail.com'),
(16, '9.40', 'Admin@gmail.com'),
(17, '9.40', 'Admin@gmail.com'),
(18, '9.50', 'Admin@gmail.com'),
(19, '9.20', 'Admin@gmail.com'),
(20, '9.40', 'Admin@gmail.com'),
(21, '9.00', 'Admin@gmail.com'),
(22, '9.20', 'Admin@gmail.com'),
(23, '9.20', 'Admin@gmail.com'),
(24, '9.20', 'Admin@gmail.com'),
(25, '9.20', 'Admin@gmail.com'),
(26, '9.10', 'Admin@gmail.com'),
(27, '9.20', 'Admin@gmail.com'),
(28, '8.90', 'Admin@gmail.com'),
(29, '9.10', 'Admin@gmail.com'),
(30, '9.20', 'Admin@gmail.com'),
(31, '9.20', 'Admin@gmail.com'),
(32, '9.10', 'Admin@gmail.com'),
(33, '9.00', 'Admin@gmail.com'),
(34, '9.10', 'Admin@gmail.com'),
(35, '8.50', 'Admin@gmail.com'),
(36, '9.00', 'Admin@gmail.com'),
(37, '9.10', 'Admin@gmail.com'),
(38, '9.00', 'Admin@gmail.com'),
(39, '8.90', 'Admin@gmail.com'),
(40, '9.00', 'Admin@gmail.com'),
(41, '8.90', 'Admin@gmail.com'),
(42, '8.60', 'Admin@gmail.com'),
(43, '8.90', 'Admin@gmail.com'),
(44, '8.80', 'Admin@gmail.com'),
(45, '8.50', 'Admin@gmail.com'),
(46, '9.00', 'Admin@gmail.com'),
(47, '8.50', 'Admin@gmail.com'),
(48, '8.80', 'Admin@gmail.com'),
(49, '8.80', 'Admin@gmail.com'),
(50, '8.70', 'Admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `email`, `Password`) VALUES
('Admin', 'Admin@gmail.com', 'Admin'),
('eka', 'eka@gmail.com', '123'),
('ex', 'vaisyagovinandas@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamelists`
--
ALTER TABLE `gamelists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `id_game` (`id_game`,`email_user`),
  ADD KEY `email_user` (`email_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamelists`
--
ALTER TABLE `gamelists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_game`) REFERENCES `gamelists` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`email_user`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
