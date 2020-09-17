-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2019 at 03:35 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(50) NOT NULL,
  `complaint` varchar(1000) NOT NULL,
  `com_date` varchar(50) NOT NULL,
  `com_solution` varchar(1000) NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `customer_id`, `complaint`, `com_date`, `com_solution`) VALUES
(1, 1, 'Thsi is the solution', '2018-09-04', 'Solution for hte id 5'),
(2, 5, 'Second Complaint about speed of the internet', '2018-09-04', 'Solution for the id 5'),
(3, 1, 'Complaint for the id number 8', '2018-09-06', 'Unsolverd'),
(4, 7, 'This is comlaint', '2018-09-06', 'Unsolverd'),
(5, 1, 'complaint id 2', '2018-09-06', 'solution');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Carine ', 'Schmitt', 'carine.schmitt@verizon.net'),
(2, 'Jean', 'King', 'jean.king@me.com'),
(3, 'Peter', 'Ferguson', 'peter.ferguson@google.com'),
(4, 'Janine ', 'Labrune', 'janine.labrune@aol.com'),
(5, 'Jonas ', 'Bergulfsen', 'jonas.bergulfsen@mac.com'),
(6, 'Janine ', 'Labrune', 'janine.labrune@aol.com'),
(7, 'Susan', 'Nelson', 'susan.nelson@comcast.net'),
(8, 'Zbyszek ', 'Piestrzeniewicz', 'zbyszek.piestrzeniewicz@att.net'),
(9, 'Roland', 'Keitel', 'roland.keitel@yahoo.com'),
(10, 'Julie', 'Murphy', 'julie.murphy@yahoo.com'),
(11, 'Kwai', 'Lee', 'kwai.lee@google.com'),
(12, 'Jean', 'King', 'jean.king@me.com'),
(13, 'Susan', 'Nelson', 'susan.nelson@comcast.net'),
(14, 'Roland', 'Keitel', 'roland.keitel@yahoo.com'),
(15, 'Ajay', 'yadav', 'ajay@gmail.com'),
(16, 'New Name', 'Goes here', 'ajay@gmail.com'),
(19, 'New ', 'gos', 'ajay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `c_contact` varchar(20) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_age` varchar(30) NOT NULL,
  `c_gender` varchar(10) NOT NULL,
  `c_business` varchar(10) NOT NULL,
  `c_type` varchar(15) NOT NULL,
  `c_region` varchar(50) DEFAULT NULL,
  `c_plan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_contact`, `c_email`, `c_age`, `c_gender`, `c_business`, `c_type`, `c_region`, `c_plan`) VALUES
(1, 'Radhey', '8776679078', 'ramu@gmail.com', '1990-10-17', 'Male', 'No', 'no', 'Delhi', 'ultra 600'),
(2, 'Deepu', '7876374346', 'deepu@gmail.com', '1994-05-12', 'Male', 'Yes', 'Large', 'UP', 'ultra 600'),
(6, 'Ashish', '8967546509', 'ashish@gmail.com', '1977-01-01', 'Male', 'Yes', 'Large', 'UP', 'Turbo 1mbp SME'),
(5, 'Yogesh', '8776679078', 'yogesh@gmail.com', '2018-12-31', 'Male', 'No', 'no', 'Delhi', 'Fast Speed internet'),
(7, 'Ramayan', '7658384848', 'ramayana@gmail.com', '2018-09-13', 'Male', 'No', 'no', 'Delhi', 'ultra 600'),
(8, 'Richa', '3838373848', 'richa@gmail.com', '2018-09-19', 'Male', 'No', 'no', 'UP', 'Turbo 1mbp SME'),
(11, 'Rina', '87732134787483', 'rina@gmail.com', '2018-09-06', 'Female', 'No', 'no', 'Mumbai', 'Fast Speed internet'),
(12, 'CustomerName', '3337', 'a@gmail.com', '2017-11-30', 'female', 'yes', 'no', 'up', 'new goes her');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(50) NOT NULL,
  `e_contact` varchar(50) NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `e_region` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `e_name`, `e_contact`, `e_mail`, `e_region`) VALUES
(2, 'Shyam', '7939485922', 'shyam@gmail.com', 'UP'),
(3, 'Ram', '9887367373', 'ram@gmail.com', 'Delhi'),
(4, 'Ashu', '8900076352', 'ashu@gmail.com', 'Mumbai'),
(5, 'Ajay', '7837329437', 'ajayyadavexpo@gmail.com', 'MP'),
(6, 'Deepak', '8377466399', 'deepak@gmail.com', 'Punjab'),
(8, 'Ashish', '89797879879', 'ashish@gmail.com', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(60) NOT NULL,
  `p_speed` varchar(50) NOT NULL,
  `p_cost` varchar(50) NOT NULL,
  `p_duration` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`p_id`, `p_name`, `p_speed`, `p_cost`, `p_duration`) VALUES
(1, 'Fast Speed Internet', '70 kb/s', '120', '30'),
(2, 'New People plan(NPP)', '2mb/sec', '200', '30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
