-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 03:32 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `card#` varchar(12) NOT NULL,
  `cvc` varchar(3) NOT NULL,
  `exp` text NOT NULL,
  `Balance` double NOT NULL,
  `Account_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`card#`, `cvc`, `exp`, `Balance`, `Account_Number`) VALUES
('729628277', '866', '08/22', 230, 43);

-- --------------------------------------------------------

--
-- Table structure for table `customer_data`
--

CREATE TABLE `customer_data` (
  `Username` text NOT NULL,
  `Password` varchar(64) NOT NULL,
  `First_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` varchar(2) NOT NULL,
  `Zip_Code` varchar(5) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `DoB` date NOT NULL,
  `Email` text NOT NULL,
  `Last_Login` text NOT NULL,
  `Account_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_data`
--

INSERT INTO `customer_data` (`Username`, `Password`, `First_Name`, `Last_Name`, `Address`, `City`, `State`, `Zip_Code`, `Phone`, `DoB`, `Email`, `Last_Login`, `Account_Number`) VALUES
('user', '123123', 'Melinda', 'Mitchell', 'Corner of Mars', 'New York', 'NY', '10018', '5554443333', '9999-09-16', 'user@bigmoney.corp', '2017-08-02 23:30:55', 43);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`First Name`, `Last Name`, `Username`, `Password`) VALUES
('Admin', 'OWN', 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `social security`
--

CREATE TABLE `social security` (
  `SS` text NOT NULL,
  `Account_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social security`
--

INSERT INTO `social security` (`SS`, `Account_Number`) VALUES
('232-21-212', 43);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Time` text NOT NULL,
  `Transaction` text NOT NULL,
  `Confirmation` text NOT NULL,
  `Account_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Time`, `Transaction`, `Confirmation`, `Account_Number`) VALUES
('2017-08-03 03:30 AM', 'Initial Deposit', '230.0', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD KEY `Account_Number` (`Account_Number`);

--
-- Indexes for table `customer_data`
--
ALTER TABLE `customer_data`
  ADD PRIMARY KEY (`Account_Number`);

--
-- Indexes for table `social security`
--
ALTER TABLE `social security`
  ADD KEY `Account_Number` (`Account_Number`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `Account_Number` (`Account_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_data`
--
ALTER TABLE `customer_data`
  MODIFY `Account_Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `card_info`
--
ALTER TABLE `card_info`
  ADD CONSTRAINT `card_info_ibfk_1` FOREIGN KEY (`Account_Number`) REFERENCES `customer_data` (`Account_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social security`
--
ALTER TABLE `social security`
  ADD CONSTRAINT `social security_ibfk_1` FOREIGN KEY (`Account_Number`) REFERENCES `customer_data` (`Account_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`Account_Number`) REFERENCES `customer_data` (`Account_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
