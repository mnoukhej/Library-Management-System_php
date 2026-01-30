-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 11:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `id` int(5) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(50) NOT NULL,
  `books_price` varchar(50) NOT NULL,
  `books_qty` varchar(50) NOT NULL,
  `available_qty` varchar(50) NOT NULL,
  `librarian_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(5, 'C ++ programming', 'books_image/7d37b6ccb8c8ec516d90d25858cfc065download (1).jpg', 'BJARNE STROUSTRUP', 'TMH', '03-03-2018', '670', '50', '46', 'bappa_kne@gmail.com'),
(6, 'C Fundamental', 'books_image/3206734c299632a45162d318a075fc79c.jpg', 'Satinder Bal Gupta', 'Shree Mahabir', '05-03-2018', '330', '20', '18', 'bappa_kne@gmail.com'),
(7, 'Operating System', 'books_image/3c09e27e43e8cb2d2e26af5e252cb552os.jpg', 'Vikas Bharadwaj', 'Parth', '10-02-2018', '299', '40', '39', 'bappa_kne@gmail.com'),
(8, 'Business Communication', 'books_image/e7f08a13e57488f7c9bf985ab65d5557bcom.jpg', 'Dr. Mrs. Anjali P. Kalkar', 'Sucess ', '17-03-2018', '410', '40', '38', 'bappa_kne@gmail.com'),
(9, 'Advanced Java', 'books_image/c08d72a7e828fe2a128d36d664f21bcbjava.jpg', 'Mr. SATYAWAN M. KUNJUR', 'TMH', '17-03-2018', '599', '20', '18', 'mickey_slg@gmail.com'),
(10, 'Management Accounting', 'books_image/269b34bdde87375653ab95f8421a9b70download (3).jpg', 'S.N. Mittal', 'Shree Mahabir', '12-01-2018', '499', '30', '29', 'bappa_kne@gmail.com'),
(11, 'Data Structure', 'books_image/e53f5afb4653d9a053e25dd1bf6cdb02data-structures-using-c-original-imaeqkhjxw8pdsk3.jpeg', 'Aaron M. Tenebaum', 'Pearson', '12-01-2018', '599', '20', '19', 'bappa_kne@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(25) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `cphone` varchar(15) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `cname`, `city`, `cphone`, `cemail`, `message`) VALUES
(4, 'pro', 'KISHANGANJ', '9631052100', 'prosenjeet1989@gmail.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(20) NOT NULL,
  `student_enrollment` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_sem` varchar(50) NOT NULL,
  `student_contact` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `books_name` varchar(50) NOT NULL,
  `books_issue_date` varchar(50) NOT NULL,
  `books_return_date` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_enrollment`, `student_name`, `student_sem`, `student_contact`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`) VALUES
(1, 'BBA/0002', 'prosenjeet ghosh', '2', '9766', 'prosenjet1989@gmail.com', 'C ++ programming', '19-Mar-18', '22-Mar-18', 'pro1990'),
(2, 'BCA/0004', 'Mohan Kumar', '2', '9003567890', 'mohan123@gmail.com', 'Advanced Java', '19-Mar-18', '06-Apr-18', 'mohan123'),
(3, 'BCA/0004', 'Mohan Kumar', '2', '9003567890', 'mohan123@gmail.com', 'Operating System', '19-Mar-18', '', 'mohan123'),
(4, 'BCA/0002', 'abhijeet ghosh', '1', '9851382635', 'abhijeet@asiatech.in', 'C ++ programming', '19-Mar-18', '', 'abhijeet@asiatech.in'),
(5, 'BCA/0002', 'abhijeet ghosh', '1', '9851382635', 'abhijeet@asiatech.in', 'Advanced Java', '19-Mar-18', '22-Mar-18', 'abhijeet@asiatech.in'),
(6, 'BCA/0002', 'abhijeet ghosh', '1', '9851382635', 'abhijeet@asiatech.in', 'Business Communication', '19-Mar-18', '', 'abhijeet@asiatech.in'),
(7, 'BCA/0004', 'Mohan Kumar', '2', '9003567890', 'mohan123@gmail.com', 'Advanced Java', '21-Mar-18', '22-Mar-18', 'mohan123@gmail.com'),
(8, 'BTECH/0002', 'Arnab Dutta', '6', '900362100', 'arnab_kne@gmail.com', 'C Fundamental', '22-Mar-18', '', 'arnab_kne@gmail.com'),
(9, 'BTECH/0002', 'Arnab Dutta', '6', '900362100', 'arnab_kne@gmail.com', 'C ++ programming', '22-Mar-18', '', 'arnab_kne@gmail.com'),
(10, 'BTECH/0002', 'Arnab Dutta', '6', '900362100', 'arnab_kne@gmail.com', 'Advanced Java', '22-Mar-18', '', 'arnab_kne@gmail.com'),
(11, 'BTECH/0003', 'Lakshya Patel', '4', '8585982055', 'lakshya65@yahoo.co.in', 'C ++ programming', '22-Mar-18', '22-Mar-18', 'lakshya65@yahoo.co.in'),
(12, 'BTECH/0003', 'Lakshya Patel', '4', '8585982055', 'lakshya65@yahoo.co.in', 'C Fundamental', '22-Mar-18', '', 'lakshya65@yahoo.co.in'),
(13, 'BTECH/0003', 'Lakshya Patel', '4', '8585982055', 'lakshya65@yahoo.co.in', 'Business Communication', '22-Mar-18', '', 'lakshya65@yahoo.co.in'),
(14, 'BBA/0002', 'Rajeev Singh', '5', '87908790213', 'rajeev_distu@yahoo.com', 'Management Accounting', '22-Mar-18', '', 'rajeev_distu@yahoo.com'),
(15, 'BTECH/0002', 'Arnab Dutta', '6', '900362100', 'arnab_kne@gmail.com', 'Engineering Physics - I', '22-Mar-18', '06-Apr-18', 'arnab_kne@gmail.com'),
(16, 'BBA/0002', 'Rajeev Singh', '5', '87908790213', 'rajeev_distu@yahoo.com', 'C ++ programming', '31-Mar-18', '31-Mar-18', 'rajeev_distu@yahoo.com'),
(17, 'BBA/0002', 'Rajeev Singh', '5', '87908790213', 'rajeev_distu@yahoo.com', 'Data Structure', '04-Apr-18', '', 'rajeev_distu@yahoo.com'),
(18, 'BCA/0004', 'Mohan Kumar', '2', '9003567890', 'mohan123@gmail.com', 'Advanced Java', '04-Apr-18', '', 'mohan123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

CREATE TABLE `librarian_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'titas', 'chowdhary', 'titas_chow', 'titas', 'titasroy_chowdhary@gmail.com', '9800329800'),
(2, 'Bappa', 'Chakaroborty', 'bappa', 'bappa', 'bappa_kne@gmail.com', '9800980032'),
(3, 'Mickey', 'Virus', 'mickey123', 'mic', 'mickey_slg@gmail.com', '9631052100'),
(4, 'Soham', 'Banerjee', 'soham', 'soham', 'soham@rediff.com', '9800980032'),
(5, 'PRASANJEET', 'GHOSH', 'prasanjeet1989', 'sunita@123', 'prosenjeet1989@gmail.com', '9471459250');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `susername` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `read1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `username`, `title`, `msg`, `read1`) VALUES
(29, 'mickey_slg@gmail.com', 'rishav123', 'hhh', 'fffff', 'n'),
(30, 'bappa_kne@gmail.com', 'rishav123', 'Hello', 'Return the book immediately.', 'n'),
(31, 'bappa_kne@gmail.com', 'rishav123', 'Hello', 'Return the book immediately.', 'n'),
(32, 'titasroy_chowdhary@gmail.com', 'arnabdutta', 'hiiiiiiiiiiii', 'submit book right now.', 'n'),
(33, 'soham@rediff.com', 'aniket1989', 'hiiiiii', 'submit your book', 'n'),
(34, 'soham@rediff.com', 'mohan123', 'hiiiiiiiiiiii', 'hhhhhhhhhhhhhhh', 'n'),
(35, 'soham@rediff.com', 'mohan123', 'hhhhhhhhhhhhhhhhh', 'hihihihihihhhhhhhhhhhhhhhhhiiiiiiiiiiiiiii', 'n'),
(36, 'soham@rediff.com', 'mohan123', 'qwertyuu', 'lllgtedggggggggggggggggggggggg', 'n'),
(37, 'soham@rediff.com', 'test', 'hoiii', 'ggggg', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `noticedate` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `noticedate`, `description`) VALUES
(1, '07-03-2018', 'BCA Practical Exam Starts From 12th April. 2018'),
(2, '12-03-2018', 'Admission Open for M.Sc.(C.S.), P.G.D.C.A. &amp; D.C.A. June to Dec Session'),
(3, '15-03-2018', 'Last Date of Project Submission of PGDCA student'),
(4, '21-03-2018', 'PGDCA II semseter &  DCA II semester Classes Starts From 21st May 2018.'),
(5, '27-03-2018', 'BCA II sem, BCA IV sem, MSc. II sem., MSc. IV sem Classes Starts From 26 April.'),
(6, '10-04-2018', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_title` text NOT NULL,
  `description` text NOT NULL,
  `met_tags` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `page_title`, `description`, `met_tags`, `meta_description`) VALUES
(1, 'HOME', 'Home', '<article class=\"col1\">\r\n<div class=\"pad_left1\">\r\n<h2>Welcome to Smart Library</h2>\r\n\r\n<p class=\"font2\">This is repository of Knowleadge.It provide alternative approch for the study <span>And provide quality education to the student</span></p>\r\n\r\n<p><strong>The library collection includes documents in Computer Science, History of Science, light reading materials, Fictions, Stories, General books, Encyclopaedias and Dictionaries, Magazines etc. Research books &amp; Monographs are also included in the collection for labs &amp; research purpose.</strong></p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h2>Individual Approach to Education!</h2>\r\n</div>\r\n\r\n<div class=\"wrapper\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"162\" src=\"http://localhost/librarymanagement/images/Library.jpg\" width=\"206\" /></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>This library give better study material in the exam point of view</strong></p>\r\n\r\n<p>All the hand made notes and pdf study material is made according exam point of view. This includes textbooks as prescribed in the university syllabus and Notes in Hindi/Englis compiled by the computer professional according to the each course .</p>\r\n</div>\r\n</article>\r\n', 'Smart Academy,Library System,Online Library', 'Library include both hindi and english notes'),
(2, 'Courses', 'Courses', '<article class=\"col1\">\r\n<div class=\"pad_left1\">\r\n<h3 class=\"pad_bot1\">BCA</h3>\r\n</div>\r\n\r\n<div class=\"wrapper pad_bot1\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"168\" src=\"http://localhost/librarymanagement/images/bca.jpg\" width=\"206\" /></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>This is a three-year full time Degree Course in Computer Applications for students who have passed 10+2.</strong></p>\r\n\r\n<p>The BCA Course was launched for the first time by the university in the year 1996 at the University Teaching Deptt. the year 1996 at the University teaching deptt.The University has hundreds BCA Associate Institutes all over the country. This course is very popular with the student community because of its unique and most advanced curriculum which has been designed exhaustively and experts, conducted by the University. The BCA Course of this University has considered unique among all the BCA Courses being conducted at other Universities in the country.</p>\r\n\r\n<p><b style=\"background:#FF6600;color:#CCFFFF;\">Eligibility:-12<sup>th</sup> in any discipline</b></p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h3 class=\"pad_bot1\">DCA</h3>\r\n</div>\r\n\r\n<div class=\"wrapper pad_bot1\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"168\" src=\"http://localhost/librarymanagement/images/dca.jpg\" width=\"206\" /></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>This is a one year (two semester) diploma programmed in computer application for 10+2 candidates.</strong></p>\r\n\r\n<p>this course is suitable for any 10+2 student who wishes to get himself introduction in the field of Computer Application to support the normal discipline or to start his career as Computer Operator, Instructor Programming Assistant.</p>\r\n\r\n<p><b style=\"background:#FF6600;color:#CCFFFF;\">Eligibility:-12<sup>th</sup> in any discipline</b></p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h3 class=\"pad_bot1\">M . Sc (CS)</h3>\r\n</div>\r\n\r\n<div class=\"wrapper pad_bot1\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"166\" src=\"http://localhost/librarymanagement/images/msc.jpg\" width=\"206\" /></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>This is a two year full degree course designed keeping in mind the changing requirements of the students who want to shift from other disciplines to computers.</strong></p>\r\n\r\n<p>While offering appropriate specialization, this course also build the desirable characteristics of a general computing professional, skilled in various aspects of computers. students will be given a complete quality eduction.</p>\r\n\r\n<p><b style=\"background:#FF6600;color:#CCFFFF;\">Eligibility:-</b></p>\r\n<b>*</b> 2 years Master&#39; Degree successfully completing after any discipline of Graduate.<br />\r\n<b>*</b> Lateral Entry into second year After PGDCA</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h3 class=\"pad_bot1\">PGDCA</h3>\r\n</div>\r\n\r\n<div class=\"wrapper pad_bot1\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"168\" src=\"http://localhost/librarymanagement/images/pg.png\" width=\"206\"/></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>This is a one year (two semester) Diploma programmed in computer Application and is available to any general graduate.</strong></p>\r\n\r\n<p>This course has been one of the most popular ones in the field of Computer Applications since its inception. Its course structure covers the essential elements of computer programming and application and is of use to any graduate whop wishes to enhance the use of computer in his discipline. This course has also been preferred by graduates willing to start their careers in the field of computer at the &#39;Programmer Level&#39;.</p>\r\n\r\n<p><b style=\"background:#FF6600;color:#CCFFFF;\">Eligibility:-Graduate in any discipline.</b></p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">&nbsp;</div>\r\n</article>\r\n', 'Courses Information,DCA,PGDCA Kishanganj', 'dummy description'),
(3, 'Rules and Regulation', 'Rules and Regulation', '<article class=\"col1\">\r\n<div class=\"pad_left1\">\r\n<h2 class=\"pad_bot1\">SCOPE</h2>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>It is an academic library and primarily meant for faculty members, students and staff members of the Institute.</strong></p>\r\nThe library collection includes documents in Computer Science, History of Science, light reading materials, Fictions, Stories, General books, Encyclopaedias and Dictionaries, Magazines etc. Research books &amp; Monographs are also included in the collection for labs &amp; research purpose.</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h2 class=\"pad_bot1\">OPENING HOURS</h2>\r\n\r\n<p class=\"pad_bot1 pad_top2\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>1. Monday to Friday: 9.00 AM &ndash; 4.00 PM</strong></li>\r\n	<li><strong>2. Saturday: Close</strong></li>\r\n	<li><strong>3. Circulation Timings: 9.15 AM &ndash; 1.00 PM and 1.30 PM - 5.15 PM</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h2 class=\"pad_bot1\">LIBRARY MEMBERSHIP AND PRIVILEGES OF THE MEMBERS</h2>\r\n\r\n<p class=\"pad_bot1 pad_top2\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>1. Borrowed books must be returned within/on due date.</strong></li>\r\n	<li><strong>2. The Student ID Card will be used as an issuing Card, maintained for each library member and it will be kept in the library until the student/member return the particulars.</strong></li>\r\n	<li><strong>3. The member must have to present while issuing particulars for other person.</strong></li>\r\n	<li><strong>4. The membership of students/scholars remains valid till the end of their course/fellowship. </strong></li>\r\n	<li><strong>5. Books in bad condition cannot be issued out of the library till they are bound and brought to usable condition.</strong></li>\r\n	<li><strong>6. Reference books,notes and project reports can not be issued</strong></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<div class=\"pad_left1\">\r\n<h2 class=\"pad_bot1\">Overdue/Fine Collection</h2>\r\n\r\n<p class=\"pad_bot1 pad_top2\">&nbsp;</p>\r\n\r\n<ol type=\"1\">\r\n	<li><strong>1. Overright Issued Books- @ Rs.5/- per day.</strong></li>\r\n	<li><strong>2. In case the lost book is out-of-print and widely used, the library committee may recommend extra penalty. </strong></li>\r\n	<li><strong>3. If you do not give fine then fine will be recovered from your caution money</strong></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</article>\r\n', 'Rules ,Fine calculation', 'Dummy description'),
(4, 'About us', 'About us', '<article class=\"col1\">\r\n<div class=\"pad_left1\">\r\n<h3 class=\"pad_bot1\">Smart Academy</h3>\r\n</div>\r\n\r\n<div class=\"wrapper pad_bot1\">\r\n<figure class=\"left marg_right1\"><img alt=\"\" height=\"166\" src=\"http://localhost/librarymanagement/images/smart.png\" width=\"206\" /></figure>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>Smart Academy is the prestigious and pioneer academy of Kishanganj was established in the year 2000 with the objective of providing Quality training and services in the feild of Career Oreinted Courses.</strong></p>\r\n\r\n<p>The Academy develops competent professionals in every field through its training and development courses. Over the years <strong>Surya Academy</strong> has developed as a centre of excellence in the field of computer eduction and offering various govt. recognized courses and other allied services related to computers. Smart Academy as a non profit making organization run by Smart Education and Social Welfare Society and is dedicated to the service of the society.</p>\r\n\r\n<p class=\"pad_bot1 pad_top2\"><strong>Smart Academy has an association with Makanlal Chaturvedi Rashtriya Patrakarita Vishvavidyala, Kishaganj</strong> for its Master Degree courses,Bachelor Degree,Post Graduate Diploma and Diploma courses also offers 2 years M.Sc (Computer Science), 3 years Bachelor in Computer Application, 1 year Post Graduate Diploma in Computer Application (PGDCA) and 1 year Diploma in Computer Application.</p>\r\n\r\n<p>For a number of years. Smart Academy students are the best in the <strong>Makhanlal University examinations.</strong>. Student&#39;s result itself narrates the story of the Smart Academy&#39;s Glorious Success.</p>\r\n</div>\r\n</article>\r\n', 'About us,contact us ', 'dummy description'),
(5, 'Contact us', 'Contact Us', ' <article class=\"col1\">\r\n            <div class=\"pad_left1\">\r\n              <h2>Contact US</h2>\r\n              <div style=\"text-align:left; width: 550px;\">\r\n                <table width=\"535\" style=\"border-style: solid; border-width: thin; border-spacing: 0px;\">\r\n\r\n                    <tr style=\"vertical-align: middle;\">\r\n                      <td colspan=\"2\" align=\"center\" bgcolor=\"#006AB4\" height=\"30\" style=\"color:#000000\"><strong>Surya Academy</strong></td>\r\n                    </tr>\r\n                    <tr style=\"vertical-align: middle;\">\r\n                      <td width=\"100\" align=\"left\" bgcolor=\"#40A9E2\" height=\"30\" style=\"color:#000000\">Address :</td>\r\n                      <td width=\"381\"> 124, Zone-II, Maharana Pratap Nagar, Near SBI Bhopal.</td>\r\n                    </tr>\r\n                    <tr style=\"vertical-align: middle;\">\r\n                      <td class=\"style6\" bgcolor=\"#40A9E2\" height=\"30\" style=\"color:#000000\"> Contect No :</td>\r\n                      <td> 0755-2557611, 2575678</td>\r\n                    </tr>\r\n                    <tr style=\"vertical-align: middle;\">\r\n                      <td  bgcolor=\"#40A9E2\">&nbsp;</td>\r\n                      <td height=\"30\"><a href=\"https://maps.google.co.in/maps?q=23.229713,77.436284&amp;num=1&amp;z=17&amp;vpsrc=6&amp;vps=2&amp;hl=en\" >How to reach</a></td>\r\n                    </tr>\r\n                </table>\r\n              </div>\r\n              <p>&nbsp;</p>\r\n            </div>\r\n          </article>', 'contact us,get in touch', 'dummy description');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(15) NOT NULL,
  `webtitle` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnum` varchar(15) NOT NULL,
  `whyus1` varchar(255) NOT NULL,
  `whyus2` varchar(255) NOT NULL,
  `whyus3` varchar(255) NOT NULL,
  `whyus4` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `webtitle`, `logo`, `country`, `city`, `address`, `email`, `contactnum`, `whyus1`, `whyus2`, `whyus3`, `whyus4`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'SMART ACADEMY LIBRARY', 'smartlogo.png', 'India', 'Kishanganj', 'Subhaspally Kishanganj', 'smartacademy.ac.in', '9471459250', 'Healty environment ', 'Easy language notes ', 'Electronic study material ', 'Electronic study material ', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', 'www.googleplus.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `enrollmentno` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `sem`, `enrollmentno`, `status`) VALUES
(1, 'Prasanjeet', 'Ghosh', 'pro1990', 'pro', 'prosenjeet1989@gmail.com', '9631052100', '2', 'BCA/0001', 'yes'),
(4, 'ANIKET ', 'GHOSH', 'aniket1989', 'anix', 'abhijeet@asiatech.in', '9631052100', '5', 'BBA/0001', 'yes'),
(5, 'abhijeet', 'ghosh', 'abhi1990', 'abhi', 'abhijeet@asiatech.in', '9851382635', '1', 'BCA/0002', 'yes'),
(8, 'prosenjeet', 'ghosh', 'pro1990', 'pro', 'prosenjet1989@gmail.com', '9766669700', '2', 'BBA/0002', 'no'),
(12, 'rishav', 'sinha', 'rishav123', '12345', 'rishav1990@yahoo.com', '9631052111', '6', 'BCA/0003', 'yes'),
(13, 'test', 'test', 'test', 'test', 'test@gmail.com', '9931255419', '6', 'BTECH/0001', 'yes'),
(14, 'Mohan', 'Kumar', 'mohan123', 'mohan', 'mohan123@gmail.com', '9003567890', '2', 'BCA/0004', 'yes'),
(15, 'Arnab', 'Dutta', 'arnabdutta', 'arnab', 'arnab_kne@gmail.com', '900362100', '6', 'BTECH/0002', 'yes'),
(16, 'Lakshya', 'Patel', 'lakshya123', 'lakshya', 'lakshya65@yahoo.co.in', '8585982055', '4', 'BTECH/0003', 'yes'),
(17, 'Rajeev', 'Singh', 'rajeev00', 'rajeev', 'rajeev_distu@yahoo.com', '87908790213', '5', 'BBA/0002', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
