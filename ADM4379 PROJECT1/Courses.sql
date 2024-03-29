-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2024 at 03:27 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `Course Code` varchar(250) NOT NULL,
  `Course Title` varchar(250) NOT NULL,
  `Professor` varchar(250) NOT NULL,
  `Term` varchar(250) NOT NULL,
  `Course Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`Course Code`, `Course Title`, `Professor`, `Term`, `Course Description`) VALUES
('ADM 1100', 'Introduction to Business', 'John Doe', 'F/W', 'Gain the knowledge necessary to effectively understand the functions of business and management.\r\n'),
('ADM 1101', 'Business and Society', 'Anna Belle', 'F/W', 'Understand business within its changing socio-economic, political and technological environments.'),
('ADM 1101', 'Business and Society', 'Anna Belle', 'F/W', 'Understand business within its changing socio-economic, political and technological environments.'),
('ADM 1340', 'Financial Accounting', 'Matthew Secord', 'F/W', 'This course introduces students to the financial statements of an organization and the accounting system that produces them.'),
('ADM 1370', 'Applications of Information Technology for Business', 'Umar Bellick', 'W', 'Introduction to information technology tools to support operational, tactical and strategic level processes and decision making in an organization. '),
('ADM 2302', 'Business Analytics', 'Jonathan Nasseri', 'F', 'Introduction to problem solving techniques with the focus on decision making for efficiency, profitability, and sustainability.'),
('ADM 2303', 'Statistics for Management', 'William Berril', 'F/W', 'Introduction to the use of statistical methods and tools in business, Data exploration.'),
('ADM 2336', 'Organizational Behaviour', 'Laura Anaheim', 'W', 'Concepts and approaches for diagnosing and predicting events in organizations.'),
('ADM 2341', 'Managerial Accounting', 'Brian Ghally', 'W', 'This course introduces students to the role of management accounting, as distinct from financial accounting, in the decision-making process.'),
('ADM 2372', 'Management Information Systems', 'Sagar Smith', 'F', 'Introduction to management information systems, their underlying infrastructure and technology, and their impacts on organizations and individuals. '),
('ADM 2381', 'Business Communication Skills', 'Donna Sullivan', 'F/W', 'Develop effective written and oral business communication skills.'),
('ADM 3301', 'Operations Management ', 'Gilles Conheard', 'W', 'Nature and context of Operations Management for the manufacturing and service sectors.'),
('ADM 3118', 'International Business ', 'Valerie West', 'F', 'Focus on the changing international business environment, from a strategic, competitive and economic perspective.'),
('ADM 3302', 'Supply Chain Management', 'Michael Burrows', 'W', 'Study of supply chain management and of its impact on the competitive success and profitability of modern organizations.'),
('ADM 3316', 'Competitive Intelligence', 'Lincoln Scofield', 'F/W', 'Main elements of competitive intelligence and understanding of fundamental issues.'),
('ADM 3316', 'Competitive Intelligence', 'Lincoln Scofield', 'F/W', 'Main elements of competitive intelligence and understanding of fundamental issues.'),
('ADM 3354', 'Financial Modeling', 'Alex Bagwell', 'W', 'Applications in MS Excel in corporate finance and investments.'),
('ADM 4311 ', 'Strategic Management', 'Theodore Mahone', 'F/W', 'This course integrates knowledge attained from prior courses combined with the latest strategy frameworks and analytical concepts.'),
('ADM 4315', 'Strategic Entrepreneurship', 'Yiu Lang', 'W', 'Strategic entrepreneurship, encompassing entrepreneurship in existing large and small firms and in not-for-profit organisations.'),
('ADM 4316', 'Management of Innovation', 'Fernando Sucre', 'F', 'The Innovation process, from discovery to diffusion; intellectual property, innovation financing, organization design and strategy for innovation. '),
('ADM 4317', 'Leadership, Strategy and Sustainability', 'Tyler Prosti', 'F/W', 'This course integrates social and environmental issues with strategy frameworks to make the business case for sustainable enterprises.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
