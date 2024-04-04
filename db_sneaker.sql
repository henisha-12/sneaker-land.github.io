-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 06:53 PM
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
-- Database: `db_sneaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_age`
--

CREATE TABLE `tbl_age` (
  `age_id` int(11) NOT NULL,
  `to_age` int(11) NOT NULL,
  `from_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_age`
--

INSERT INTO `tbl_age` (`age_id`, `to_age`, `from_age`) VALUES
(1, 5, 10),
(2, 10, 18),
(3, 18, 50),
(4, 5, 18),
(5, 5, 50),
(6, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookevent`
--

CREATE TABLE `tbl_bookevent` (
  `eb_id` int(11) NOT NULL,
  `a_qty` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookevent`
--

INSERT INTO `tbl_bookevent` (`eb_id`, `a_qty`, `event_id`, `email`, `name`) VALUES
(1, 2, 6, 'henisha@gmail.com', 'henisha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookpackage`
--

CREATE TABLE `tbl_bookpackage` (
  `b_id` int(11) NOT NULL,
  `a_qty` int(11) NOT NULL,
  `t_qty` int(11) NOT NULL,
  `k_qty` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookpackage`
--

INSERT INTO `tbl_bookpackage` (`b_id`, `a_qty`, `t_qty`, `k_qty`, `p_id`, `email_id`, `name`) VALUES
(1, 2, 1, 2, 2, 'henisha@gmail.com', 'heet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookroom`
--

CREATE TABLE `tbl_bookroom` (
  `r_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `email` mediumtext NOT NULL,
  `name` text NOT NULL,
  `book_dt` date NOT NULL,
  `no_dt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookroom`
--

INSERT INTO `tbl_bookroom` (`r_id`, `rm_id`, `no`, `email`, `name`, `book_dt`, `no_dt`) VALUES
(1, 3, 3, 'henisha@gmail.com', 'heet', '2024-03-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `e_id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `info` mediumtext NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`e_id`, `event_name`, `start_date`, `end_date`, `info`, `image`, `price`) VALUES
(6, 'Holi Special', '2024-03-24', '2024-03-25', 'Experience the vibrant colors of Holi at our resort! Join us for a day filled with fun, laughter, and joy as we celebrate this ancient Indian festival of colors. Indulge in traditional Holi delicacies, dance to lively music, and partake in the excitement of throwing vibrant powders in the air.', 'holi.jpg', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `p_id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `a_price` int(11) NOT NULL,
  `t_price` int(11) NOT NULL,
  `k_price` int(11) NOT NULL,
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`p_id`, `p_name`, `a_price`, `t_price`, `k_price`, `info`) VALUES
(2, 'Silver Package', 1000, 1000, 500, 'Timing : 9:30 AM to 6:30\r\nIncludes : Breakfast, Lunch + Hi Tea/Coffee\r\nIncludes All Activities & Games\r\nPaid Activities As It Is'),
(3, 'Golden Package', 1500, 1000, 500, 'Timing : 9:30 Am to 8:30 AM\r\nIncludes : Breakfast, Lunch + Hi Tea/Coffee ,Dinner\r\nIncludes All Activities & Games\r\nPaid Activities as It Is '),
(4, 'Platinum Package', 2000, 1500, 500, 'Timing : 9:30 Am to 8:30 AM\r\nIncludes : Breakfast, Lunch + Hi Tea/Coffee ,Dinner\r\nIncludes All Activities & Games\r\nPaid Activities are free such as jugnoo & Water Laser Show.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `p_id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`p_id`, `image`) VALUES
(2, 'bumpercar.mp4'),
(4, 'pendulum.mp4'),
(5, 'swinger.mp4'),
(6, 'teacup.mp4'),
(7, 'wheell.mp4'),
(8, 'buccket.mp4'),
(9, 'fall.mp4'),
(10, 'tunnelride.mp4'),
(11, 'umbrella.mp4'),
(12, 'waterslide.mp4'),
(13, 'wavy.mp4'),
(15, '253x253-2.jpg'),
(16, '350x200-0.jpg'),
(17, '350x200-1(1).jpg'),
(18, '357x357.jpg'),
(19, '357x357-0.jpg'),
(20, '357x357-1.jpg'),
(21, '357x357-2.jpg'),
(22, '357x357-3.jpg'),
(23, '540x450.jpg'),
(24, '740x400.jpg'),
(25, '740x400-0.jpg'),
(26, '740x400-1.jpg'),
(27, '1920x800.jpg'),
(28, '1920x800-0.jpg'),
(29, 'waterpark1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resort`
--

CREATE TABLE `tbl_resort` (
  `r_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `info` mediumtext NOT NULL,
  `prc` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_resort`
--

INSERT INTO `tbl_resort` (`r_id`, `type`, `info`, `prc`, `no`, `img`) VALUES
(3, 'Single Room', 'A single room is intended to sleep one person and most likely has one king or queen bed in the room. ', 2000, 50, 'single.jpg'),
(4, 'Double Room', ' A double room is  a double bed that can accommodate two people ,usually a couple, to stay in. ', 3500, 150, 'doubleroom.jpg'),
(5, 'Triple Room', ' This is a room that comes with three beds and can be occupied by three guest.', 5000, 215, 'tripalroom.jpg'),
(6, 'Connecting Rooms', 'Connecting rooms with individual entrance doors from the outside and a connecting door in between. Guests can move between rooms without going through the hallway. ', 10000, 50, 'connectroom.jpg'),
(8, 'Quad Room', 'A quad room has multiple separate single beds and can accommodate many persons together in the same room.', 3000, 15, 'quadroom.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `r_id` int(11) NOT NULL,
  `review` mediumtext NOT NULL,
  `email_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`r_id`, `review`, `email_id`) VALUES
(3, 'vsadfasdfawefdawe', 2),
(4, 'vsadfasdfawefdawe', 2),
(5, 'Hello !!! Your Adventure park is really very fantastic. I love to enjoy that experience that is full of thril....', 2),
(6, 'assdioouoif', 8),
(7, 'This adventure park is fun park. awesome experience!!!\r\n ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ride`
--

CREATE TABLE `tbl_ride` (
  `ride_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `capacity` text NOT NULL,
  `location` text NOT NULL,
  `information` mediumtext NOT NULL,
  `type` text NOT NULL,
  `age_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ride`
--

INSERT INTO `tbl_ride` (`ride_id`, `image`, `name`, `capacity`, `location`, `information`, `type`, `age_id`) VALUES
(1, 'roler_coaster.jpg', 'Roller Coaster', '1200 Person', 'Zone 1', 'Roller coasters are the best way to experience this in the safest of the environment! In a controlled manner, you set out on a ride that is full of unexpected twists and turns with a change in speed that will have more than just butterflies in your stomach!', 'High Thriller', 3),
(2, 'Turbo_force.png', 'Turbo Force', '50 Person', 'Zone 2', 'Not for the faint-hearted. Riders are taken for a 70 mph spin at the ends of a whirling arm that takes them 140 ft. in the air and sends them hurtling towards earth in an arc generating forces 3 times the pull of gravity. Features upside-down, free-flipping action.', 'High Thriller', 3),
(3, 'Flipping_Arm_Action.png', 'Flipping Arm Action', '20 Person', 'Zone 1', 'Sit belted on seats that are attached in the clutches of the large Flipping Arm. There are high chances of you feeling dizzy, but highly enthused when the Arm rotates at mind-boggling speed.', 'High Thriller', 3),
(4, 'Giant_Frisbee.png', 'Giant Frisbee', '100 Person', 'Zone 2', 'As the name suggests, this Frisbee is huge!. Sit atop the Giant Frisbee with your family and friends and feel the incredible and extraordinary experience of rotating and turning in massive circular motions. This Snickers Land ride generates a sensational 180 degree pendulum swing along with a 360 degree rotation experience.', 'High Thriller', 3),
(5, 'Top_Spin_Suspended.jpg', 'Top Spin Suspended', '40 Person', 'Zone 1', 'This Sneaker Land amusement park ride, is a humbling fun experience. Get ready to be suspended over a fountain high up from the ground. Now spin mid-air, while suspended. However, one of the brighter sides to this ride, is that at least you are seated together and side by side with your family and friends.\r\n', 'High Thriller', 3),
(6, 'watersplash.jpg', 'Water Splash Mountain', '8 Person', 'Zone 1', 'This ride will boat based splash landings like roller coasters on zig-zag rails, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE! ', 'Thriller', 6),
(7, 'boomerang.jpg', 'Bheem The Boomerang', '10 Person', 'Zone 2', 'This ride will including swinging run up and down on a zig-zag rail, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'Thriller', 5),
(8, 'rotating.jpg', 'Alibaba Rotating', '8 Person', 'Zone 2', 'This ride will run spinning up and down, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'Kiddi', 1),
(9, 'tubbyjump.jpg', 'Tubby Jump', '1 Person', 'Zone 2', 'This International ride has been exclusively brought for the very first time to India at sneaker land. You slide down with high speed seated in a tube from a tall ramp inclined at the end to launch you in the air for the biggest leap of faith in your life. This ride takes your breath away while giving you an experience of floating in the air just before you safely land on a huge air pillow. Never miss this ride during your visit to our Theme Park...', 'High Thriller', 3),
(10, 'trampoline.webp', 'Trampoline Park  & Soft Play', '15 Person', 'Zone 1', 'At Sky Jumper Trampoline Park, feel like a Superman by jumping off the walls, flying through the air and having fun with family and friends in a playground & We have a visually appealing, colourful and eccentric themed playground design ... To play, Soft Play has created a customized playground around your theme..', 'Thriller', 5),
(11, 'lazyriver.jpg', 'Kids Lazy River', '5 Person', 'Zone 1', 'If all you want is to wallow in the waters and relax, get yourself a float and drift along the meandering lazy river. It will gently waft you along taking you through a lions mouth, under a fallen tree, past an alligator with its mouth agape, and past a gargoyle skull that keeps spewing water through its mouth.', 'Kiddi', 1),
(12, 'dinosaursride.jpg', 'Lost Valley Of Dinosaurs', '100 Person', 'Zone 2', 'Dinosaurs are now alive again at sneaker land. In this family attraction, you will explore the Lost Valley of Dinosaurs through a Boat ride. You will discover many extinct Dinosaurs in an adventurous journey. Scientists created a Hi-Tech methodology to bring these larger than life creatures back to earth. Will humans complete this fun voyage alive? Beware the mighty T-Rex, while your wild journey through this unusual world of dinosaurs drops to an end with a steep splash!', 'Thriller', 6),
(13, 'bang.jpeg', 'Bang Bang', '12 Person', 'Zone 1', 'Go crazy driving and you jostle for space for your car. It is great fun for the whole family – children, grandpas and grand moms included.', 'Kiddi', 4),
(14, 'waterpark.webp', 'Water Park & Rain dance', '1000 Person', 'Zone 1', 'To enjoy water park proper swimming (Nylon or Polyester) costume are required. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE.....!', 'Thriller', 5),
(15, 'skypaddle.jpg', 'Sky Paddle', '1 Person', 'Zone 1', 'This is an adventure ride that gives you the experience of a stunt cycling on a wire rope, may cause someone feel scared/motion sickness.  If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE! ', 'Thriller', 3),
(16, 'fender.jpg', 'Fender Bender', '30 Person', 'Zone 2', 'The ride will be powered by electric power with front-to-back movement. may cause someone to feel motion sickness If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE! ', 'Thriller', 3),
(17, 'bobsplash.jpg', 'BOB & Splash', '20 Person', 'Zone 2', 'BoB And Splash  Lifts, Drops and spin you around at speed, so strap in, hold on and take in the views as you whizz round.', 'Thriller', 3),
(18, 'junglefun.jpg', 'Jungle Fun', '50 Person', 'Zone 1', 'This ride will run spinning up and down, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'Kiddi', 4),
(19, 'flight.jpg', 'Feeling Flight', '1 Person', 'Zone 2', 'The ride is done by hanging across a rope starting from a position higher than its end. A person can travel by hanging under a rope, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE! ', 'High Thriller', 3),
(20, 'raceredge.jpg', 'Racer Edge', '10 Person', 'Zone 2', 'The Racers edge Track stays true to its name and is the perfect ride for the whole family . The curvy track is the essence of classic go-karting featuring single and double go-karts racing on a traditional track with overpass.', 'Thriller', 5),
(21, 'reverse.jpg', 'Reverse Bungee', '1 Person', 'Zone 1', 'This is an adventure ride in which you will go up and down the harness wear, may cause someone to feel motion sickness and back problem.If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'High Thriller', 3),
(22, 'paddleboat.webp', 'Kids Paddle Boats', '50 Person', 'Zone 2', 'his ride will run a water-based ride with side-to-side movement.', 'Kiddi', 4),
(23, 'twisttower.webp', 'Twist Tower', '100 Person', 'Zone 2', 'This ride will run spinning up and down at speed, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'High Thriller', 3),
(24, 'swapsuper.jpg', 'Swap Super Swing', '3 Person', 'Zone 2', 'This is an adventure ride in which you feel like you are swinging, may cause someone to feel motion sickness. If you suspect your health may be at risk for any reason, or exacerbate any kind of pre-existing condition, PLEASE DO NOT DO THIS RIDE!', 'High Thriller', 6),
(25, 'softplay.jpg', 'Soft Play', '20 Person', 'Zone 1', 'We have a visually appealing, colourful and eccentric themed playground design ... To play, Soft Play has created a customized playground around your theme...', 'Kiddi', 1),
(26, 'flyinghorse.png', 'Flying Horses', '10 Person', 'Zone 1', 'This ride is spinning, rotating and swinging and the horses feel like flying, may cause someone to feel motion sickness..', 'Kiddi', 4),
(27, 'giantwheel.jpg', 'Giant Wheel', '50 Person', 'Zone 1', 'Ferris wheels , are large, round, revolving structures with gondolas where people sit. ', 'High Thriller', 5),
(28, 'zipline.webp', 'Zip Line', '1 Person', 'Zone 2', 'Zip lining is an action-filled recreational activity that involves riding a steel cable on a protective seat or a belt between two points and generally on a valley that exhibits spectacular sceneries.', 'High Thriller', 3),
(29, 'bungeejumping.webp', 'Bungee Jumping', '1 Person', 'Zone 1', 'Bungee jumping is an action-filled recreational activity that involves head-first jumping from a tall structure with an elastic cord attached into participants feet.', 'High Thriller', 3),
(30, 'jetboat.jpg', 'Jet Boat', '15 Persons', 'Zone 2', ' Jetboat draws the water from under the boat through an intake and into a pump-jet inside the boat, before expelling it through a nozzle at the stern.', 'Thriller', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usr`
--

CREATE TABLE `tbl_usr` (
  `id` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `unm` text NOT NULL,
  `password` text NOT NULL,
  `dob` date NOT NULL,
  `city` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usr`
--

INSERT INTO `tbl_usr` (`id`, `email_id`, `unm`, `password`, `dob`, `city`, `type`) VALUES
(1, 'admin@gmail.com', 'Admin', 'Admin123', '2024-03-29', 'Vadodara', 'Admin'),
(2, 'henisha@gmail.com', 'hhhhh', '1234', '2014-03-04', 'surat', 'user'),
(8, 'aeshagodhani@gmail.com', 'aesha', 'aesha123', '2004-10-12', 'surat', 'user'),
(9, 'hitdesai96@gmail.com', 'henisha', 'henisha_123', '2024-03-28', 'Surat', 'user'),
(10, 'archikakadiya86@gmail.com', 'Archi', 'Archi_123', '2024-03-05', 'Surat', 'user'),
(11, 'archi@gmail.com', 'Archi', 'Archi_789', '0000-00-00', 'Vadodara', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `v_id` int(11) NOT NULL,
  `video` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_age`
--
ALTER TABLE `tbl_age`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `tbl_bookevent`
--
ALTER TABLE `tbl_bookevent`
  ADD PRIMARY KEY (`eb_id`);

--
-- Indexes for table `tbl_bookpackage`
--
ALTER TABLE `tbl_bookpackage`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_bookroom`
--
ALTER TABLE `tbl_bookroom`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_resort`
--
ALTER TABLE `tbl_resort`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `FOREIGN1` (`email_id`);

--
-- Indexes for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `Test` (`age_id`);

--
-- Indexes for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_age`
--
ALTER TABLE `tbl_age`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bookevent`
--
ALTER TABLE `tbl_bookevent`
  MODIFY `eb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bookpackage`
--
ALTER TABLE `tbl_bookpackage`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bookroom`
--
ALTER TABLE `tbl_bookroom`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_resort`
--
ALTER TABLE `tbl_resort`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  MODIFY `ride_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_usr`
--
ALTER TABLE `tbl_usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD CONSTRAINT `tbl_review_ibfk_1` FOREIGN KEY (`email_id`) REFERENCES `tbl_usr` (`id`);

--
-- Constraints for table `tbl_ride`
--
ALTER TABLE `tbl_ride`
  ADD CONSTRAINT `Test` FOREIGN KEY (`age_id`) REFERENCES `tbl_age` (`age_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
