CREATE DATABASE register1;

USE register1;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 11:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register1`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE table signup
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(20),
    age INT,
    gender ENUM('Male', 'Female', 'Other'),
    address VARCHAR(20),
    dob DATE,
    password VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO signup VALUES(1,'Ram','M','Ram2@gmail.com','9987932456',21,'Male','patna','2000-06-11','Ram@123'),
                        (2,'Sita','K','sita23@gmail.com','8989112234',22,'Female','Bihar','1999-01-03','Sita@345'),
                        (3,'Ravi','Y','Ravi33@gmail.com','9998811332',20,'Male','AP','2001-11-02','Ravi@678'),
                        (4,'Robert','S','Robert12@gmail.com','8889990810',23,'Male','Kerala','1998-12-07','Robert@123');

-- --------------------------------------------------------

--
-- Table structure for table `donor_register`
--

CREATE table donor_register
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT,
    dob DATE,
    email VARCHAR(50),
    num VARCHAR(20),
    area VARCHAR(20),
    district VARCHAR(20),
    state VARCHAR(20),
    blood ENUM('A+','A-','B+','B-','AB+','AB-','O+','O-'),
    ques1 ENUM('Yes','No'),
    ques2 ENUM('Yes','No'),
    ques3 ENUM('Yes','No')
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_register`
--

INSERT INTO  donor_register VALUES(1,'Ram','H',18,'2000-03-01','ram@gmail.com','9090901122','benz circle','guntur','AP','A-','Yes','No','No'),
                                  (2,'Ravi','H',20,'1998-03-02','ravi@gmail.com','8888111123','tadikonda','guntur','AP','A+','No','No','No'),
                                  (3,'Robert','H',22,'1996-12-11','robert@gmail.com','9111228976','tenali','guntur','AP','AB-','Yes','No','No'),
                                  (4,'Sita','Y',21,'1997-04-02','sita12@gmail.com','9998881112','benz circle','guntur','AP','A-','No','No','No'),
                                  (5,'Kumari','L',21,'1997-03-01','kumari@gmail.com','9988123456','benz circle','guntur','AP','O-','Yes','No','No'),
                                  (6,'Anu','K',22,'1996-04-03','anu@gmail.com','9523671212','danapur','patna','Bihar','O+','No','No','No'),
                                  (7,'Bagi','S',23,'1995-03-03','bagi@gmail.com','9080706010','avverahalli','hassan','Karnataka','O-','Yes','No','No'),
                                  (8,'Amar','S',24,'1994-01-01','amar@gmail.com','8080809080','benz circle','guntur','AP','AB+','Yes','No','No'),
                                  (9,'Kalyani','P',21,'1997-05-01','kalyani@gmail.com','9090909090','belur','hassan','Karnataka','A-','No','No','No'),
                                  (10,'Shourya','P',20,'1998-12-12','shourya@gmail.com','9010101020','nohsa','patna','Bihar','AB-','Yes','No','No'),
                                  (11,'Diya','N',22,'1996-10-10','diya123@gmail.com','8787878788','benz circle','guntur','AP','B-','No','No','No'),
                                  (12,'Aru','N',20,'1998-03-01','aru@gmail.com','9991111119','athmalgola','patna','Bihar','B+','Yes','No','No'),
                                  (13,'William','kUMAR',18,'2000-09-10','william@gmail.com','8010201020','benz circle','guntur','AP','O+','Yes','No','No'),
                                  (14,'Henry','R',25,'1993-03-01','henry@gmail.com','9333345445','benz circle','guntur','AP','A-','Yes','No','No'),
                                  (15,'Noah','PY',24,'1994-02-01','noah@gmail.com','9034541212','benz circle','guntur','AP','AB-','Yes','No','No'),
                                  (16,'Jack','B',25,'1993-01-01','jack@gmail.com','8989898988','danapur','patna','Bihar','A+','No','No','No'),
                                  (17,'Adam','P',21,'1997-10-01','adam@gmail.com','9123456789','benz circle','guntur','AP','A-','Yes','No','No'),
                                  (18,'Emily','N',20,'1998-11-01','emily@gmail.com','9876543211','avverahalli','hassan','Karnataka','O-','Yes','No','No'),
                                  (19,'Ella','M',20,'1998-12-01','ella@gmail.com','9898765671','belur','hassan','Karnataka','AB-','No','No','No'),
                                  (20,'Anushka','kumari',20,'1998-09-01','anushka@gmail.com','8765432119','tadepalle','guntur','AP','O+','Yes','No','No');

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE patient_register
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT,
    dob DATE,
    email VARCHAR(50),
    num VARCHAR(20),
    area VARCHAR(20),
    district VARCHAR(20),
    state VARCHAR(20),
    blood ENUM('A+','A-','B+','B-','AB+','AB-','O+','O-') 
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `patient_register`
--

INSERT INTO  patient_register VALUES(1,'Alice','H',18,'2000-03-01','alice@gmail.com','9090901122','benz circle','guntur','AP','A-'),
                                  (2,'Allison','H',20,'1998-03-02','allison@gmail.com','8888111123','tadikonda','guntur','AP','A+'),
                                   (3,'Amy','L',21,'1997-03-01','amy@gmail.com','9988123456','benz circle','guntur','AP','O-'),
                                  (4,'Mila','K',22,'1996-04-03','mila@gmail.com','9523671212','danapur','patna','Bihar','O+'),
                                  (5,'Bagi','S',23,'1995-03-03','bagi@gmail.com','9080706010','avverahalli','hassan','Karnataka','O-'),
                                  (6,'Ava','k',22,'1996-12-11','ava@gmail.com','9111228976','tenali','guntur','AP','AB-'),
                                  (7,'Sophia','k',21,'1997-04-02','sophia12@gmail.com','9998881112','benz circle','guntur','AP','A-'),
                                  (8,'James','P',21,'1997-05-01','james@gmail.com','9090909090','belur','hassan','Karnataka','A-'),
                                   (9,'Emma','N',20,'1998-03-01','emma@gmail.com','9991111119','athmalgola','patna','Bihar','B+'),
                                  (10,'Mia','kUMARI',18,'2000-09-10','mia@gmail.com','8010201020','benz circle','guntur','AP','O+'),
                                  (11,'Daisy','P',20,'1998-12-12','daisy@gmail.com','9010101020','nohsa','patna','Bihar','AB-'),
                                  (12,'Devin','N',22,'1996-10-10','devin123@gmail.com','8787878788','benz circle','guntur','AP','B-'),
                                  (13,'Surya','R',25,'1993-03-01','surya@gmail.com','9333345445','benz circle','guntur','AP','A-'),
                                  (14,'Meera','PY',24,'1994-02-01','meera@gmail.com','9034541212','benz circle','guntur','AP','AB-'),
                                  (15,'Uma','S',24,'1994-01-01','uma@gmail.com','8080809080','benz circle','guntur','AP','AB+'),
                                  (16,'Aarya','B',25,'1993-01-01','aarya@gmail.com','8989898988','danapur','patna','Bihar','A+'),
                                  (17,'Lavanya','P',21,'1997-10-01','lavanya@gmail.com','9123456789','benz circle','guntur','AP','A-'),
                                  (18,'Satya','N',20,'1998-11-01','satya@gmail.com','9876543211','avverahalli','hassan','Karnataka','O-'),
                                  (19,'Aria','M',20,'1998-12-01','aria@gmail.com','9898765671','belur','hassan','Karnataka','AB-'),
                                  (20,'Jasmine','k',20,'1998-09-01','jasmine@gmail.com','8765432119','tadepalle','guntur','AP','O+');


-- --------------------------------------------------------

--
-- Table structure for table `request_register`
--
CREATE TABLE request_register (
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(30),
    dateentered DATE,
    hname VARCHAR(20),
    location VARCHAR(20),
    quantity INT,
    reason VARCHAR(20),
    age INT,
    blood ENUM('A+','A-','B+','B-','AB+','AB-','O+','O-')
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Dumping data for table `request_register`
--

INSERT INTO request_register 
VALUES 
    (1,'Aarya','B.B','Aarya12@gmail.com','2010-03-02','Aditya Hospitals','4-1-16 Tilak Road Hyderabad 500 001 India',3,'Accident',
    (SELECT age FROM patient_register WHERE firstname = 'Aarya' AND lastname = 'B.B'),
    (SELECT blood FROM patient_register WHERE firstname = 'Aarya' AND lastname = 'B.B')),
    
    (2,'Jasmine','k','Jasmine@gmail.com','2014-10-02','Amar Leela Hospital','B-1/6 Janakpuri-58 Delhi India',3,'Accident',
    (SELECT age FROM patient_register WHERE firstname = 'Jasmine' AND lastname = 'k'),
    (SELECT blood FROM patient_register WHERE firstname = 'Jasmine' AND lastname = 'k'));




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
