-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 11:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quis_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal_ujian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `nilai`, `tanggal_ujian`) VALUES
(26, 1, 3, '2022-03-29 13:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `p_user`
--

CREATE TABLE `p_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_user`
--

INSERT INTO `p_user` (`id`, `email`, `username`, `password`) VALUES
(1, 'siswa1@gmail.com', 'siswa1', '123456'),
(2, 'siswa2@gmail.com', 'siswa2', '123456'),
(3, 'siswa3@gmail.com', 'siswa3', '12345'),
(4, 'siswa4@gmail.com', 'siswa4', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `opsi1` text NOT NULL,
  `opsi2` text NOT NULL,
  `opsi3` text NOT NULL,
  `opsi_benar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `soal`, `opsi1`, `opsi2`, `opsi3`, `opsi_benar`) VALUES
(1, 'The committee has met twice and ....', 'they reached a final decision', 'a final decision was reached', 'its decision was reached', 'it has reached a final decision'),
(2, 'The manager won\'t be able to attend the shareholders\' meeting tomorrow because....', 'he must to give a lecture', 'of he will give lecture', 'he will have giving a lecture', 'he will be giving a lecture'),
(3, 'Brenda\'s score on the test is the highest in class. Tes', 'She should study hard last night.', 'She must have studied hard last night.', 'She had to study hard last night', 'She should have studied hard last night.'),
(4, 'To answer accurately is more important than...', 'to finish quickly', 'you finish it quickly', 'quick finish', 'a quick finish'),
(5, 'Having been served lunch,....', 'the problems were discussed by the participants.', 'it was discussed by the participants.', 'A discussion of the problems were made by the participants.', 'the participants discuss the problems.'),
(6, 'East Kalimantan relies heavily on income from oil and natural gas, and....', 'Aceh province also.', 'Aceh province too.', 'Aceh province is as well.', 'so does Aceh province.'),
(7, 'The participants have had some problems deciding....', 'when are they sgoing to announce the result of the meeting.', 'when should they announce the result of the meeting.', 'the time when the result of the meeting to announce.', 'when they should announce the result of the meeting.'),
(8, 'This year will be more difficult for our organization because....', 'we have less money and volunteers than last year.', 'there is a little money and volunteers than last year', 'it has fewer money and less volunteers than it had last year.', 'it has less money and fewer volunteers than it had last year.'),
(9, 'Professor Baker told his students that...', 'they can turn over their reports on Mondays.', 'the reports can turn over on Monday.', 'the reports they can hand in on Monday.', 'they could hand in their reports on Monday.'),
(10, 'The adder is a venomous snake ... bite may prove fatal to humans.', 'its', 'whom it', 'that', 'whose'),
(11, '.... a bee colony gets, the more the queen\'s egglaying capability diminishers.', 'It is more overcrowded.', 'More overcrowded than.', 'More than overcrowded.', 'The more overcrowded.'),
(12, 'The chairwoman requested that ....', 'the participants studied more careful the problem.', 'the participants studied  the problem with more careful.', 'the problem be studied more carefully.', 'the participants study the problem more carefully.'),
(13, 'Unlike the earth, which rotates once every twenty-four hours ... once every ten hours.', 'the rotation of Jupiter', 'Jupiter rotation', 'Jupiter rotate', 'Jupiter rotates'),
(14, 'Jackson,... capital of Mississippi, is the largest city in the state.', 'it is the', 'is the', 'where the', 'the'),
(15, 'The various types of bacteria are classified according to...shapes.', 'whose', 'have', 'their', 'how they are');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `p_user`
--
ALTER TABLE `p_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
