-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 07:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour-addict`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `total` varchar(12) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `nama`, `alamat`, `total`, `deskripsi`, `foto`, `id_user`) VALUES
(1, 'Wisata Keren', 'jl calalalala cililili', '10000000', 'syalalala syiliiililili wakakakakak awu awuuu', '22042018144620bomb.jpg', 0),
(2, 'wisata tambah keren', 'jl calalalala cililili', '500000', 'asdmkasdaslkdskldnad aksdnaskjdnskajdsank', '2204201814480151893013250-ilustrasi-kriminal.jpg', 0),
(3, 'asd', 'asdasdsda', '10000000', 'asdsdsasdsda', '22042018145315134e7adaa2ebdbb06422b276586904d8.jpg', 0),
(4, 'sdfsdffsdf', 'sfsddfdsfds', '1000000', 'asdnakdnsaikdnas', '220420181454467c84fede9820bf2483c7f6131ce4441d.gif', 0),
(5, 'qweqweqw', 'qweqwwq1', '10000000', 'qwewqeqwewqeewqewqe', '22042018155810160b7c826254bf57ca6c5090df153909.gif', 1),
(6, 'asdsdsadsa', 'asdasdsdsadsa', '10000000', ' kjnfkwjenfkjwef wekf ewkjfwe', '2204201818085296447185a3a47da044e9e5d87940c673fddd3331_hq.jpg', 1),
(7, 'adsdakld', 'ksdfklsdfkdfn', '2000000', 'adfmlksmkfnv vkj ejkvr ej', '23042018071605134e7adaa2ebdbb06422b276586904d8.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
