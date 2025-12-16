-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2025 at 11:11 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd2025`
--
CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pwd2025`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `cid` int(11) NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(1, 'Annisa', '2522500059@mahasiswa.atmaluhur.ac.id', 'semoga saya teliti belajar pemrograman web dasar ini', '2025-12-16 17:33:43'),
(2, 'annisa', 'nisa@gmail.com', 'mantap betul pit', '2025-12-16 17:33:43'),
(3, 'engresia', 'engresia@gmail.com', 'baik sekali dan membantu', '2025-12-16 17:33:43'),
(4, 'engresia', 'engresia@gmail.com', 'baik sekali dan membantu', '2025-12-16 17:33:43'),
(5, 'redia ', 'redred@gmail.com', 'rajin dan baik sekali', '2025-12-16 17:33:43'),
(6, 'redia ', 'redred@gmail.com', 'rajin dan baik sekali', '2025-12-16 17:33:43'),
(7, 'junaidi jun', 'jun@jun.com', 'maju sekali dunia one piece', '2025-12-16 17:33:43'),
(8, 'Humaira', 'hum@maira.com', 'semoga adik sukses selalu ya', '2025-12-16 17:33:43'),
(9, 'annisa', 'nisa@gmail.com', 'basing ka la', '2025-12-16 17:33:43'),
(10, 'annisa', 'nisa@gmail.com', 'poiuytrwee', '2025-12-16 17:48:28'),
(11, 'nis', 'nisa@gmail.com', 'pohgfddffd', '2025-12-16 17:48:40'),
(12, 'nis', 'nisa@gmail.com', 'pppoppopop', '2025-12-16 17:49:04'),
(13, 'nis', 'nisa@gmail.com', 'errrerrrrr', '2025-12-16 17:49:49'),
(14, 'nis', 'nisa@gmail.com', 'ppppppppppppppppp', '2025-12-16 17:50:26'),
(15, 'nis', 'nisa@gmail.com', 'ttttttttttt', '2025-12-16 17:51:29'),
(16, 'nis', 'nisa@gmail.com', 'ppppppppppppp', '2025-12-16 17:55:26'),
(17, 'nis', 'nisa@gmail.com', 'popopopopp', '2025-12-16 17:56:18'),
(18, 'nis', 'nisa@gmail.com', 'ppppppppppppp', '2025-12-16 17:58:22'),
(19, 'nis', 'nisa@gmail.com', 'pppppppppppppp', '2025-12-16 18:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
