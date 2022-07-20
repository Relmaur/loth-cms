-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2022 at 02:27 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(3) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_excerpt`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(2, 2, 'CMS Post #1', 'Marco Del Riego', '2021-11-23', 'pic-1.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum, a repellendus velit voluptates earum quibusdam officia totam, at nisi, pariatur sunt! Iusto ea doloribus odit accusamus voluptatum maxime quisquam, facilis sapiente soluta, aliquid corporis quo voluptatibus quae ipsa amet culpa qui quam aliquam fugiat.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum,', 'Javascript', 1, 'draft'),
(3, 2, 'CMS Post #2', 'Andrea Rueda', '2021-11-22', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore deleniti est atque nulla laboriosam, natus, in consequuntur eligendi magnam animi ex. Ipsum soluta alias quo adipisci in necessitatibus harum molestias vitae, pariatur eveniet placeat asperiores numquam exercitationem fugiat iusto, nisi minima omnis voluptatibus natus quos enim similique eligendi odit. Deserunt.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum,', 'Tailwindcss', 2, 'draft'),
(4, 1, 'CMS Post #3', 'Marco Del Riego', '2021-11-03', 'pic-2.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore enim est illum magnam, consectetur quos veritatis placeat itaque voluptate quod quidem voluptatem perferendis fugiat totam, cum modi minima animi incidunt dicta eos sit. Eum aliquam alias, consequatur maxime modi magni natus. Assumenda commodi beatae perspiciatis accusantium dicta et magni quidem?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum,', 'Python', 1, 'draft'),
(5, 1, 'CMS Post #4', 'Mr. Barskalot', '2016-11-12', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem atque quod a ipsum ipsam id, eum dignissimos nulla expedita modi dolorum culpa earum dolor fuga architecto beatae iusto dolores tenetur aliquid tempore sint! Beatae totam enim nostrum sint ipsa animi cupiditate consectetur vitae ipsam. Fugiat autem eum necessitatibus vitae sequi?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum,', 'Javascript', 1, 'draft'),
(6, 1, 'CMS Post #4', 'Andrea Rueda', '2016-12-12', 'pic-3.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem atque quod a ipsum ipsam id, eum dignissimos nulla expedita modi dolorum culpa earum dolor fuga architecto beatae iusto dolores tenetur aliquid tempore sint! Beatae totam enim nostrum sint ipsa animi cupiditate consectetur vitae ipsam. Fugiat autem eum necessitatibus vitae sequi?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, veniam expedita. Quod quo natus voluptatum,', 'PHP', 1, 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
