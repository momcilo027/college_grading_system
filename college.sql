-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 09:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `aos`
--

CREATE TABLE `aos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slots` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aos`
--

INSERT INTO `aos` (`id`, `name`, `slots`) VALUES
(1, 'Industrial Engineering', 250),
(2, 'Road Traffic', 220),
(3, 'Communication Technologies', 350),
(4, 'Modern Computer Technologies', 500),
(5, 'Civil Engineering', 220),
(6, 'Environmental Protection', 200);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `prof_id` int(11) NOT NULL,
  `aos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proffesors`
--

CREATE TABLE `proffesors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` text NOT NULL,
  `room_number` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proffesors`
--

INSERT INTO `proffesors` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `phone_number`, `room_number`, `title`, `photo`) VALUES
(1, 'asd', 'asd', 'asd', 'asd', 'asd', '123', 11, 'asd', ''),
(2, 'Leonardo', 'Pitt', 'proba', '$2y$10$13qT.rOLHPvnuK5YkCWvce0Wnks.NzYV2PklItCxVY9UaYD/rfSn6', '', '0', 0, '', ''),
(3, 'qweqwe', 'qweqwe', 'prof', '$2y$10$d2iRr7vLpxZMNkRUM60b7OFAWezpGK/mn62/pjiYus9Pg0RnScVnK', '', '0', 0, '', ''),
(4, 'Leonardo', 'Wahlberg', 'testtest', '$2y$10$5R3sLMOEoUn0mysbB1evvOQEh7kP4xw2cetUCLLmkB9CgnyR7XV6C', 'example@email.com', '065/1234123', 56, 'Data Entry Professional', '3605.jpg'),
(5, 'professor', 'professor', 'professor', '$2y$10$gFwFCGdhp08me1UOQmTiV.SzYRRLH6P5h68gEdWG2c2Fj.A8nnoNy', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `UID` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` text NOT NULL,
  `AOS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `parent_name`, `last_name`, `username`, `password`, `birthday`, `UID`, `status`, `email`, `phone_number`, `AOS`) VALUES
(1, 'Momcilo', 'Borivoje', 'Krstic', 'proba', '$2y$10$6NHqmD4We0HoM.P6ojqAweSzqblwhisgMmbB9RtIeLkjqv4jUFEQ6', '2020-07-28', 'REr 47/17', 'Active', 'getjinxed@gmail.com', '064/0724406', 'Modern Computer Technologies'),
(2, 'Veljko', '', 'Obradovic', 'vexon3', '$2y$10$LI7GK2mcWLVYK/D/mbvESe25WKL2ys4K60F3AqVpbfe0iZEJ2iy6a', '0000-00-00', '', '', '', '0', '0'),
(3, 'Nikola', 'Dusan', 'Nemanjic', 'username', '$2y$10$1FU9UsySG5o7CqAgnw.FYua0SSOV9CkY6vDf0c1r3hSSNP4iwZPr2', '2020-08-18', 'SEr 22/20', 'Active', 'proba@gmail.com', '065/1234123', 'Industrial Engineering'),
(4, 'student', '', 'student', 'student', '$2y$10$6aSYt/OH4CVTN4KAK2fO9uKljJtLCilWIW6y68KSpFveyLXAl0t3y', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `year_of_study` int(11) NOT NULL,
  `aos` varchar(255) NOT NULL,
  `professor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `year_of_study`, `aos`, `professor`) VALUES
(1, 'Mathematics 1', 1, '1', 'Andjela Djordjevic'),
(2, 'Mechanics 1', 1, '1', 'Leonardo Wahlberg'),
(3, 'Engineering Informatics', 1, '1', 'professor professor'),
(4, 'Sociology of Work', 1, '1', ''),
(5, 'Materials Science', 1, '1', ''),
(6, 'Technical English', 1, '1', ''),
(7, 'Computer Graphics', 2, '1', ''),
(8, 'Strengthof Materials', 2, '1', 'Marko Nikolic'),
(9, 'Thermoenergetic', 2, '1', 'Petar Stojanovic'),
(10, 'Electrical Engineering with Electronics', 2, '1', ''),
(11, 'Organization of Manufacturing', 2, '1', ''),
(12, 'Corrosion and Material Protection', 2, '1', ''),
(13, 'Machine Elements', 3, '1', ''),
(14, 'Technical Systems', 3, '1', ''),
(15, 'Basics of Management', 3, '1', ''),
(16, 'Business Communications', 3, '1', ''),
(17, 'Joining Techniques', 3, '1', ''),
(18, 'Reloading Machinery', 3, '1', ''),
(19, 'Manufacturing Tehnologies 2', 4, '1', ''),
(20, 'Modern Methods of Processing', 4, '1', ''),
(21, 'Maintenance of Mechanical Systems', 4, '1', 'Leonardo Wahlberg'),
(22, 'Energy and Environment', 4, '1', ''),
(23, 'Sensoring Systems', 4, '1', ''),
(24, 'Waste Management', 4, '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aos`
--
ALTER TABLE `aos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `prof_id` (`prof_id`),
  ADD KEY `aos_id` (`aos_id`);

--
-- Indexes for table `proffesors`
--
ALTER TABLE `proffesors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aos`
--
ALTER TABLE `aos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proffesors`
--
ALTER TABLE `proffesors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `grades_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `info_ibfk_2` FOREIGN KEY (`prof_id`) REFERENCES `proffesors` (`id`),
  ADD CONSTRAINT `info_ibfk_3` FOREIGN KEY (`aos_id`) REFERENCES `aos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
