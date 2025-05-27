-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 04:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `activity_title` varchar(255) NOT NULL,
  `activity_description` text NOT NULL,
  `event_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_registrations`
--

CREATE TABLE `activity_registrations` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `bio` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `admin_name`, `bio`, `email`, `profile`) VALUES
(2, 'AH_Sazzad', 'I am a PHP developer .I am creating a project for ICT CLUB', 'mdasaduzzamanasad100@gmail.com', '../uploads/475050108_983227673700517_6972777545080342629_n.jpg'),
(3, 'AH_Sazzad', 'I am a PHP developer .I am creating a project for ICT CLUB', 'mdasaduzzamanasad100@gmail.com', '../uploads/FB_IMG_1748099439517 (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'AH Sazzad', 'demo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `admission_info`
--

CREATE TABLE `admission_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `roll_number` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `academic_year` varchar(20) DEFAULT NULL,
  `hobby` text DEFAULT NULL,
  `dream` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_info`
--

INSERT INTO `admission_info` (`id`, `first_name`, `last_name`, `phone`, `email`, `roll_number`, `section`, `subject`, `academic_year`, `hobby`, `dream`, `created_at`) VALUES
(2, 'ah', 'SAZZAD', '01776575220', 'mdasaduzzamanasad100@gmail.com', '1264065', 'd-5', 'science', '25', 'demo', 'demo', '2025-05-26 20:32:26'),
(3, 'ah', 'mondol', '01776575220', 'ffh11300@gmail.com', '1264065', 'd-5', 'science', '25', 'demo', 'demo', '2025-05-26 20:35:00'),
(4, 'ah', 'hasan', '01776575220', 'demo@gmail.com', '355', 'd-5', 'science', '25', 'adfsd', 'adsfsd', '2025-05-27 13:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `admission_login`
--

CREATE TABLE `admission_login` (
  `id` int(11) NOT NULL,
  `admission_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_login`
--

INSERT INTO `admission_login` (`id`, `admission_id`, `username`, `password`) VALUES
(1, NULL, 'demo', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `admission_payment`
--

CREATE TABLE `admission_payment` (
  `id` int(11) NOT NULL,
  `admission_id` int(11) DEFAULT NULL,
  `payment_number` varchar(50) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_payment`
--

INSERT INTO `admission_payment` (`id`, `admission_id`, `payment_number`, `trx_id`, `payment_date`) VALUES
(1, NULL, '01776575220', 'demo', '2025-05-27 13:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES
(1, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo'),
(2, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo'),
(3, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo'),
(4, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo'),
(5, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo'),
(6, 'AH_Sazzad', 'mdasaduzzamanasad100@gmail.com', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `user_subject` text DEFAULT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `description` longtext NOT NULL,
  `tag` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `cat` varchar(100) DEFAULT NULL,
  `post_status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `img`, `title`, `short_description`, `description`, `tag`, `author`, `date`, `cat`, `post_status`) VALUES
(6, '../uploads/FB_IMG_1748099439517.jpg', '🏖️ A Memorable Cox\'s Bazar Tour – Organized by NDCM ICT Club Date:', '🌊 Introduction\r\n\r\nTo refresh minds and strengthen team bonding, the ICT Club of NDCM (Nawabgonj Degree College) organized a delightful tour to Cox’s Bazar, the world’s longest sea beach. The trip, held in early May 2025, brought together students, tech enthusiasts, and teachers for a perfect mix of fun, learning, and natural beauty.', '<h2 data-start=\"153\" data-end=\"217\">🏖️ A Memorable Cox\'s Bazar Tour &ndash; Organized by NDCM ICT Club</h2>\r\n<p data-start=\"219\" data-end=\"265\"><strong data-start=\"219\" data-end=\"228\">Date:</strong> May 2025<br data-start=\"237\" data-end=\"240\"><strong data-start=\"240\" data-end=\"251\">Author:</strong> NDCM ICT Club</p>\r\n<hr data-start=\"267\" data-end=\"270\">\r\n<h3 data-start=\"272\" data-end=\"291\">🌊 Introduction</h3>\r\n<p data-start=\"293\" data-end=\"617\">To refresh minds and strengthen team bonding, the <strong data-start=\"343\" data-end=\"390\">ICT Club of NDCM (Nawabgonj Degree College)</strong> organized a delightful tour to <strong data-start=\"422\" data-end=\"437\">Cox&rsquo;s Bazar</strong>, the world&rsquo;s longest sea beach. The trip, held in early May 2025, brought together students, tech enthusiasts, and teachers for a perfect mix of fun, learning, and natural beauty.</p>\r\n<hr data-start=\"619\" data-end=\"622\">\r\n<h3 data-start=\"624\" data-end=\"649\">🚍 The Journey Begins</h3>\r\n<p data-start=\"651\" data-end=\"971\">Our journey started from the NDCM campus with excitement and anticipation. A luxury bus was arranged to ensure comfort during the long road trip. With snacks, music, and group games, the 12-hour journey flew by. The beautiful sunrise as we approached Cox&rsquo;s Bazar gave us a breathtaking first glimpse of what was to come.</p>\r\n<hr data-start=\"973\" data-end=\"976\">\r\n<h3 data-start=\"978\" data-end=\"1009\">🏖️ Exploring the Sea Beach</h3>\r\n<p data-start=\"1011\" data-end=\"1307\">Upon arrival, the club members freshened up and headed straight to the beach. The sound of the crashing waves, the golden sands, and the wide blue sky created a peaceful escape from academic stress. Everyone enjoyed taking photos, playing beach football, and simply walking barefoot on the shore.</p>\r\n<hr data-start=\"1309\" data-end=\"1312\">\r\n<h3 data-start=\"1314\" data-end=\"1349\">🌅 Laboni Point &amp; Evening Vibes</h3>\r\n<p data-start=\"1351\" data-end=\"1680\">As the sun started to set, we visited <strong data-start=\"1389\" data-end=\"1405\">Laboni Point</strong>, one of the most popular spots at Cox&rsquo;s Bazar. The orange hues of the sunset painted the sea and sky in a magical glow. Some of us flew kites, while others just sat and enjoyed the view. Later in the evening, we had a delicious seafood dinner together at a local restaurant.</p>\r\n<hr data-start=\"1682\" data-end=\"1685\">\r\n<h3 data-start=\"1687\" data-end=\"1723\">🐚 Sightseeing: Inani &amp; Himchari</h3>\r\n<p data-start=\"1725\" data-end=\"1810\">The next day, we set out to explore more of Cox&rsquo;s Bazar&rsquo;s natural beauty. We visited:</p>\r\n<ul data-start=\"1812\" data-end=\"1965\">\r\n<li data-start=\"1812\" data-end=\"1885\">\r\n<p data-start=\"1814\" data-end=\"1885\"><strong data-start=\"1814\" data-end=\"1837\">Himchari Waterfall:</strong> A scenic spot with green hills and clear water.</p>\r\n</li>\r\n<li data-start=\"1886\" data-end=\"1965\">\r\n<p data-start=\"1888\" data-end=\"1965\"><strong data-start=\"1888\" data-end=\"1904\">Inani Beach:</strong> Known for its coral stones and cleaner, quieter environment.</p>\r\n</li>\r\n</ul>\r\n<p data-start=\"1967\" data-end=\"2086\">Everyone took part in a photo contest hosted by the ICT Club, where students captured moments of nature and friendship.</p>\r\n<hr data-start=\"2088\" data-end=\"2091\">\r\n<h3 data-start=\"2093\" data-end=\"2118\">🎉 Bonding Activities</h3>\r\n<p data-start=\"2120\" data-end=\"2374\">During the evenings, we held small talent shows, storytelling sessions, and shared experiences. It helped bring seniors and juniors closer and boosted team spirit. The ICT Club also held a small meeting to discuss future projects and technical workshops.</p>\r\n<hr data-start=\"2376\" data-end=\"2379\">\r\n<h3 data-start=\"2381\" data-end=\"2406\">📸 Memories That Last</h3>\r\n<p data-start=\"2408\" data-end=\"2601\">Before heading back to campus, we spent a final few hours enjoying the beach sunrise and shopping for souvenirs. Everyone came back with smiles, stories, and memories that will last a lifetime.</p>\r\n<hr data-start=\"2603\" data-end=\"2606\">\r\n<h3 data-start=\"2608\" data-end=\"2629\">💬 Final Thoughts</h3>\r\n<p data-start=\"2631\" data-end=\"2833\">This Cox&rsquo;s Bazar tour was more than just a vacation. It was an opportunity to bond, explore, and recharge. The NDCM ICT Club plans to organize more such educational and recreational trips in the future.</p>\r\n<p data-start=\"2835\" data-end=\"2889\"><strong data-start=\"2835\" data-end=\"2869\">Stay connected, stay inspired!</strong></p>', 'Test', '', '2025-05-27 17:05:03', 'Notice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `description`) VALUES
(12, 'Notice', ' '),
(13, 'Movie', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `tag_name`) VALUES
(5, 'Notice'),
(6, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `rule_title` varchar(255) NOT NULL,
  `rule_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `role` enum('admin','author','subscriber') NOT NULL DEFAULT 'subscriber',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_registrations`
--
ALTER TABLE `activity_registrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_info`
--
ALTER TABLE `admission_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_login`
--
ALTER TABLE `admission_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `admission_id` (`admission_id`);

--
-- Indexes for table `admission_payment`
--
ALTER TABLE `admission_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admission_id` (`admission_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_registrations`
--
ALTER TABLE `activity_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_info`
--
ALTER TABLE `admission_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission_login`
--
ALTER TABLE `admission_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_payment`
--
ALTER TABLE `admission_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity_registrations`
--
ALTER TABLE `activity_registrations`
  ADD CONSTRAINT `activity_registrations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `activity_registrations_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admission_login`
--
ALTER TABLE `admission_login`
  ADD CONSTRAINT `admission_login_ibfk_1` FOREIGN KEY (`admission_id`) REFERENCES `admission_info` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admission_payment`
--
ALTER TABLE `admission_payment`
  ADD CONSTRAINT `admission_payment_ibfk_1` FOREIGN KEY (`admission_id`) REFERENCES `admission_info` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
