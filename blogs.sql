-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2022 at 10:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_penel`
--

CREATE TABLE `admin_penel` (
  `sno` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_penel`
--

INSERT INTO `admin_penel` (`sno`, `userName`, `admin_password`, `date_time`) VALUES
(4, 'zeeshi', '$2y$10$f2vynUt9ekNlv0NVtPw3Ie9ozeYe5yynU4mnULT4gstSScfIA2fpi', '2022-12-05 12:25:00'),
(5, 'z', '$2y$10$R5dmmKtV8OpuMHWVmoqx7.lP1cAG6PMlKVGM1pi5ajXmu4t0HGYbG', '2022-12-05 12:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `display_blog`
--

CREATE TABLE `display_blog` (
  `sno` int(11) NOT NULL,
  `display_blog_image` varchar(100) NOT NULL,
  `display_blog_title` varchar(200) NOT NULL,
  `display_blog_description` varchar(5000) NOT NULL,
  `display_blog_description_more` varchar(10000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `display_blog`
--

INSERT INTO `display_blog` (`sno`, `display_blog_image`, `display_blog_title`, `display_blog_description`, `display_blog_description_more`, `date_time`, `Date`) VALUES
(13, '../partial/', 'Lorem ipsum dolor', 'que facilis eos sunt aperiam earum eveniet quisquam corporis provident quibusdam non obcaecati asperiores possimus assumenda, dolore voluptate debitis, dolores molestias? Maiores repellat magnam molestias quas molestiae, necessitatibus vero a consequatur eaque?', 'm, sequi recusandae fugiat unde obcaecati repudiandae aut necessitatibus excepturi, minima libero. Quidem voluptatum, recusandae voluptatem culpa eligendi quae? Molestiae deserunt dolores, saepe quod doloribus possimus ratione veritatis minima ea non natus iure id repudiandae soluta placeat cum omnis illum incidunt vero! Voluptatibus, in modi mollitia magnam voluptates eum voluptas ullam quidem fuga eos, aliquam, cum eligendi facere pariatur. Iusto asperiores exercitationem provident deleniti optio quasi? Velit eaque facilis eos sunt aperiam earum eveniet quisquam corporis provident quibusdam non obcaecati asperiores possimus assumenda, dolore voluptate debitis, dolores molestias? Maiores repellat magnam molestias quas molestiae, necessitatibus vero a consequatur eaque?', '2022-12-19 00:02:02', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `sno` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`sno`, `email`, `date_time`) VALUES
(1, 'zeeshi@gmail.com', '2022-12-02 04:01:44'),
(2, 'zeeshi@gamil.com', '2022-12-02 04:05:33'),
(3, 'zeeshi@gamil.com', '2022-12-02 04:06:20'),
(4, 'zeeshi@gmail.com', '2022-12-02 04:07:07'),
(5, 'ege@gmail.com', '2022-12-02 04:11:19'),
(6, 'zeesgab@gmail.com', '2022-12-07 12:43:58'),
(7, 'zeeshan@gmail.com', '2022-12-18 23:54:26'),
(8, 'zeeshan@gmail.com', '2022-12-18 23:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `latest_blog`
--

CREATE TABLE `latest_blog` (
  `sno` int(11) NOT NULL,
  `latest_blog_image` varchar(100) NOT NULL,
  `latest_blog_title` varchar(400) NOT NULL,
  `latest_blog_des` varchar(500) NOT NULL,
  `latest_blog_description_more` varchar(1000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_blog`
--

INSERT INTO `latest_blog` (`sno`, `latest_blog_image`, `latest_blog_title`, `latest_blog_des`, `latest_blog_description_more`, `date_time`, `Date`) VALUES
(8, 'Images/joshua-koblin-eqW1MPinEV4-unsplash.jpg', 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ad soluta, ipsam eveniet dolorum cupiditate repellendus quasi! Accusamus ipsum, nisi beatae officia dolore id vel! Aperiam veritatis mollitia praesentium earum eveniet qui magni porro sunt quo dolore.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ad soluta, ipsam eveniet dolorum cupiditate repellendus quasi! Accusamus ipsum, nisi beatae officia dolore id vel! Aperiam veritatis mollitia praesentium earum eveniet qui magni porro sunt quo dolore reiciendis illo cum in voluptate repudiandae, et nihil aspernatur ex quidem. Molestiae culpa non placeat distinctio consectetur nesciunt quo, est perspiciatis unde fuga blanditiis doloribus eligendi magni quia aliquid quisquam in perferendis libero! Pariatur ex vitae earum magnam! Similique accusantium quam earum asperiores, voluptates nobis illo voluptas ea odio voluptatibus ipsum architecto minus nisi fugiat eos doloremque recusandae numquam labore id? Voluptatibus eligendi nam ea accusantium modi aliquid, explicabo vitae omnis fugiat, repudiandae suscipit praesentium ipsum possimus rem ipsa qui fuga earum ducimus, maiores sunt! Alias quia commodi odio reprehenderit pariatur est sit consectetur dolores maiores non. Excepturi inv', '2022-12-07 12:31:11', '2022-12-07'),
(9, 'Images/', 'sdfsafsfwv', 'The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language.', 'The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.', '2022-12-19 00:21:11', '2022-12-19'),
(11, 'Images/pexels-md-shaifuzzaman-ayon-5758968 (2).jpg', 'fvhdfsvkjdfjkv 3', 'wlkfdhdlfhslfhslkjvhsljkvhdfjlkvflkghfdklhaThe online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis', 'The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.', '2022-12-19 00:26:22', '2022-12-19'),
(12, 'Images/pexels-nicolas-postiglioni-947185.jpg', 'flfvhfshelhf 4', 'hlfkjsfhl hljkdhsldkjfkljsbvkjlcvbsklsldjklcbklbl', 'klddblskvbdkflhglfhgbThe online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.', '2022-12-19 00:28:17', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `popular_activites`
--

CREATE TABLE `popular_activites` (
  `sno` int(11) NOT NULL,
  `popular_actvites_image` varchar(100) NOT NULL,
  `popular_activites_title` varchar(400) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_activites`
--

INSERT INTO `popular_activites` (`sno`, `popular_actvites_image`, `popular_activites_title`, `date_time`, `Date`) VALUES
(7, 'Images/pexels-h-emre-773471.jpg', 'You can now Open', '2022-12-07 12:40:22', '2022-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `struggle_stories_blog`
--

CREATE TABLE `struggle_stories_blog` (
  `sno` int(11) NOT NULL,
  `struggle_stories_blog_image` varchar(100) NOT NULL,
  `struggle_stories_blog_title` varchar(400) NOT NULL,
  `struggle_stories_blog_description` varchar(400) NOT NULL,
  `struggle_stories_blog_des_more` varchar(1000) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struggle_stories_blog`
--

INSERT INTO `struggle_stories_blog` (`sno`, `struggle_stories_blog_image`, `struggle_stories_blog_title`, `struggle_stories_blog_description`, `struggle_stories_blog_des_more`, `date_time`, `Date`) VALUES
(12, '../partial/pexels-michael-steinberg-321452.jpg', 'All that glitters is not gold.', '', '', '2022-12-19 00:11:48', '2022-11-28'),
(13, '../partial/pexels-daniyal-ghanavati-110812.jpg', ' A bird in the hand is worth two in the bush.', '', '', '2022-12-19 00:12:07', '2022-11-28'),
(14, '../partial/pexels-anamul-rezwan-1216589.jpg', ' Better safe than sorry.', '', '', '2022-12-19 00:12:31', '2022-11-28'),
(15, '../partial/pexels-lil-artsy-2902962.jpg', 'Blood is thicker than water.', '', '', '2022-12-19 00:12:47', '2022-11-28'),
(16, 'Images/pexels-michael-steinberg-321452.jpg', 'Alsdfhs sdsdfshf', '', '', '2022-12-19 00:14:10', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `top_listed_blog`
--

CREATE TABLE `top_listed_blog` (
  `sno` int(11) NOT NULL,
  `top_listed_blog_title` varchar(400) NOT NULL,
  `top_listed_blog_description` varchar(1000) NOT NULL,
  `top_listed_blog_more_description` varchar(1000) NOT NULL,
  `top_listed_blog_img` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `top_listed_blog`
--

INSERT INTO `top_listed_blog` (`sno`, `top_listed_blog_title`, `top_listed_blog_description`, `top_listed_blog_more_description`, `top_listed_blog_img`, `date_time`, `Date`) VALUES
(32, 'Japan Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ad soluta, ipsam eveniet dolorum cupiditate repellendus quasi! Accusamus i', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ad soluta, ipsam eveniet dolorum cupiditate repellendus quasi! Accusamus ipsum, nisi beatae officia dolore id vel! Aperiam veritatis mollitia praesentium earum eveniet qui magni porro sunt quo dolore reiciendis illo cum in voluptate repudiandae, et nihil aspernatur ex quidem. Molestiae culpa non placeat distinctio consectetur nesciunt quo, est perspiciatis unde fuga blanditiis doloribus eligendi magni quia aliquid quisquam in perferendis libero! Pariatur ex vitae earum magnam! Similique accusantium quam earum asperiores, voluptates nobis illo voluptas ea odio voluptatibus ipsum architecto minus nisi fugiat eos doloremque recusandae numquam labore id? Voluptatibus eligendi nam ea accusantium modi aliquid, explicabo vitae omnis fugiat, repudiandae suscipit praesentium ipsum possimus rem ipsa qui fuga earum ducimus, maiores sunt! Alias quia commodi odio reprehenderit pariatur est sit consectetur dolores maiores non. Excepturi inv', 'Images/jpan technology.jpg', '2022-12-07 12:27:55', '2022-12-07'),
(33, 'fgdfggfbddg', 'The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.', 'The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.The online encyclopedia project Wikipedia is the most popular wiki-based website, and is one of the most widely viewed sites in the world, having been ranked in the top twenty since 2007.[7] Wikipedia is not a single wiki but rather a collection of hundreds of wikis, with each one pertaining to a specific language. The English-language Wikipedia has the largest collection of articles: as of February 2020, it has over 6 million articles.', 'Images/pexels-rodnae-productions-7563687.jpg', '2022-12-19 00:24:13', '2022-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Number` int(15) NOT NULL,
  `Thing` varchar(100) NOT NULL,
  `date_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `User_name`, `Number`, `Thing`, `date_time`) VALUES
(1, 'zeeshan Hamza', 2147483647, 'Sports Cars', '2022-11-28'),
(2, 'shani', 234234, 'dw', '2022-11-28'),
(3, 'afssf', 523434, 'gfdge', '2022-11-28'),
(4, 'fbsdh', 423432, 'e', '2022-11-28'),
(5, 'wfwrg', 234324, 'fw', '2022-11-28'),
(6, 'wffef', 2435345, 'ewr', '2022-11-28'),
(7, '', 0, '', '2022-12-01'),
(8, 'dfhslaf', 324324, 'wew', '2022-12-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_penel`
--
ALTER TABLE `admin_penel`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `display_blog`
--
ALTER TABLE `display_blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `latest_blog`
--
ALTER TABLE `latest_blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `popular_activites`
--
ALTER TABLE `popular_activites`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `struggle_stories_blog`
--
ALTER TABLE `struggle_stories_blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `top_listed_blog`
--
ALTER TABLE `top_listed_blog`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_penel`
--
ALTER TABLE `admin_penel`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `display_blog`
--
ALTER TABLE `display_blog`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `latest_blog`
--
ALTER TABLE `latest_blog`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `popular_activites`
--
ALTER TABLE `popular_activites`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `struggle_stories_blog`
--
ALTER TABLE `struggle_stories_blog`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `top_listed_blog`
--
ALTER TABLE `top_listed_blog`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
