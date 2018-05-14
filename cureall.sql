-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 11:13 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cureall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('gg', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `appo`
--

CREATE TABLE `appo` (
  `id` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appo`
--

INSERT INTO `appo` (`id`, `time`) VALUES
('123', '1'),
('james123', '6'),
('qw', '3'),
('xc', '12'),
('11', '2');

-- --------------------------------------------------------

--
-- Table structure for table `are`
--

CREATE TABLE `are` (
  `position` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `are`
--

INSERT INTO `are` (`position`, `user`) VALUES
('1', 'avan'),
('2', 'rishi'),
('3', 'rd'),
('4', 'meet');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `id` varchar(20) NOT NULL,
  `bed_no` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `bed_no`) VALUES
('asC', 2),
('123', 5),
('james123', 12),
('11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cur`
--

CREATE TABLE `cur` (
  `nam` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `mai` varchar(50) NOT NULL,
  `pho` bigint(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `cit` varchar(20) NOT NULL,
  `mh` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cur`
--

INSERT INTO `cur` (`nam`, `age`, `gen`, `bgroup`, `mai`, `pho`, `user`, `pass`, `addr`, `cit`, `mh`) VALUES
('2', 0, 'Male', 'O-', 'pspohekar@gmail.com', 7600060060, '123', '123', '1', '1', 'Medicalaa History if any...'),
('er', 15, 'Male', 'A+', 'khatri.ronak97@gmail.com', 456, '56', '56', 'sxfvx', 'sdcszdx', 'sdczxcs'),
('Ronak', 19, 'Male', 'B+', 'rishi@gmail.com', 6, '456', '456', 'rajkot', 'rajkot', 'non'),
('333', 2, 'Male', 'O+', 'f', 2323, '333', '333', 'asd', 'asd', 'Medical Histoasdry if any...'),
('ww', 22, 'Male', 'O+', 'ww', 222, 'ww', 'ww', 'ww', 'ww', 'ww'),
('jAMES', 34, 'Male', 'O+', 'ASDFG@outlook.com', 1234567890, 'sdfgh', 'qwerty', '12345', '2345', 'Medical History if any...');

-- --------------------------------------------------------

--
-- Table structure for table `cus_login`
--

CREATE TABLE `cus_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_login`
--

INSERT INTO `cus_login` (`user`, `pass`) VALUES
('sdfgh', 'qwerty'),
('as', 'as'),
('56', '56'),
('456', '456'),
('333', '333'),
('ww', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `doc_login`
--

CREATE TABLE `doc_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_login`
--

INSERT INTO `doc_login` (`user`, `pass`) VALUES
('866', '866'),
('Ronak', '2304'),
('444444', '4444'),
('avi', 'avi'),
('dd', 'dd'),
('as', 'as'),
('23', '23'),
('a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `dor`
--

CREATE TABLE `dor` (
  `id` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_1` bigint(30) NOT NULL,
  `phone_2` bigint(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `field` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dor`
--

INSERT INTO `dor` (`id`, `pass`, `name`, `email`, `phone_1`, `phone_2`, `address`, `gender`, `qualification`, `field`) VALUES
('avi', 'avi', 'avi', 'theastrofreek@gmail.com', 9632175341, 12345678, 'asdfghnm,;.fgbfmn', 'Male', 'MS', 'cancer'),
('Ronak', '2304', 'RD', 'k@gmail.com', 754, 457, '555', 'Male', 'DCM', 'sc');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `nameu` varchar(30) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  `mob` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `aid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`nameu`, `mailid`, `mob`, `user`, `pass`, `Qualification`, `aid`) VALUES
('Ronak', 'khatri.ronak97@gmail.com', '123456', 'rd', 'rd', 'MPhil', '1111111');

-- --------------------------------------------------------

--
-- Table structure for table `lab_login`
--

CREATE TABLE `lab_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `med`
--

CREATE TABLE `med` (
  `id` varchar(20) NOT NULL,
  `med1` varchar(20) NOT NULL,
  `med2` varchar(30) NOT NULL,
  `med3` varchar(30) NOT NULL,
  `med4` varchar(30) NOT NULL,
  `med5` varchar(30) NOT NULL,
  `med6` varchar(30) NOT NULL,
  `med7` varchar(30) NOT NULL,
  `med8` varchar(30) NOT NULL,
  `med9` varchar(30) NOT NULL,
  `med10` varchar(30) NOT NULL,
  `quan1` int(10) NOT NULL,
  `quan2` int(10) NOT NULL,
  `quan3` int(20) NOT NULL,
  `quan4` int(20) NOT NULL,
  `quan5` int(20) NOT NULL,
  `quan6` int(20) NOT NULL,
  `quan7` int(20) NOT NULL,
  `quan8` int(20) NOT NULL,
  `quan9` int(20) NOT NULL,
  `quan10` int(20) NOT NULL,
  `gtotal` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med`
--

INSERT INTO `med` (`id`, `med1`, `med2`, `med3`, `med4`, `med5`, `med6`, `med7`, `med8`, `med9`, `med10`, `quan1`, `quan2`, `quan3`, `quan4`, `quan5`, `quan6`, `quan7`, `quan8`, `quan9`, `quan10`, `gtotal`) VALUES
('456', 'Acetaminophen', 'Adderall', 'Alprazolam', 'Amitriptyline', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 27),
('2356', 'Acetaminophen', 'Adderall', 'Alprazolam', 'Amitriptyline', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('12345', 'Acetaminophen', 'Vancomycin', 'Vancomycin', 'Xanax', 'Ramipril', '', '', '', '', '', 15, 5, 5, 5, 5, 0, 0, 0, 0, 0, 0),
('56', '231', 'bv', 'kh', 'kh', 'kh', '', '', '', '', '', 5, 23, 23, 2, 2, 0, 0, 0, 0, 0, 0),
('1111', 'Adderall', 'Adderall', 'Amitriptyline', '', '', '', '', '', '', '', 4, 3, 3, 1, 1, 0, 0, 0, 0, 0, 0),
('ff', 'Alprazolam', 'Xalatan', 'Vascepa', 'Xanax', '', '', '', '', '', '', 10, 8, 6, 9, 1, 0, 0, 0, 0, 0, 0),
('vv', 'Alprazolam', 'Adderall', 'Adderall', '', '', '', '', '', '', '', 15, 15, -8, 1, 1, 0, 0, 0, 0, 0, 0),
('vvv', 'Adderall', 'Acetaminophen', '', '', '', '', '', '', '', '', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
('333', 'Adderall', 'Ranexa', 'Xanax', '', '', '', '', '', '', '', 3, 3, 3, 1, 1, 0, 0, 0, 0, 0, 0),
('888', 'Alprazolam', 'Xanax', 'Vascepa', '', '', '', '', '', '', '', 5, 5, 1, 1, 1, 0, 0, 0, 0, 0, 0),
('ww', 'Adderall', 'Ramipril', 'Xalatan', '', '', '', '', '', '', '', 2, 3, 4, 1, 1, 0, 0, 0, 0, 0, 0),
('qwerr', 'Acetaminophen', '', '', '', '', '', '', '', '', '', 5, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0),
('DEAN ', 'Acetaminophen', 'Xalkori', '', 'Xanax', '', '', '', '', '', '', 1, 1, 5, 1, 1, 0, 0, 0, 0, 0, 0),
('james122', 'Alprazolam', 'Amitriptyline', '', '', '', '', '', '', '', '', 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `name` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`name`, `quantity`) VALUES
('asadx', 5),
('6', 6),
('1', 1),
('HEllo', 45),
('sdzv', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phyre`
--

CREATE TABLE `phyre` (
  `nameu` varchar(30) NOT NULL,
  `mailid` varchar(30) NOT NULL,
  `mob` varchar(30) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `Qualification` varchar(30) NOT NULL,
  `aid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phy_login`
--

CREATE TABLE `phy_login` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phy_login`
--

INSERT INTO `phy_login` (`user`, `pass`) VALUES
('rd', 'rd'),
('sad', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cur`
--
ALTER TABLE `cur`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `cus_login`
--
ALTER TABLE `cus_login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `doc_login`
--
ALTER TABLE `doc_login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `dor`
--
ALTER TABLE `dor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `lab_login`
--
ALTER TABLE `lab_login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `med`
--
ALTER TABLE `med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phyre`
--
ALTER TABLE `phyre`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `phy_login`
--
ALTER TABLE `phy_login`
  ADD PRIMARY KEY (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
