-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 07:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webho`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `attribute`, `name`, `role`, `color`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'roles', 'CEO', 'Super Admin', '#00ffe5', 1, 0, '2021-05-12 00:45:00', '2021-05-12 00:56:40', NULL),
(2, 'roles', 'COO', 'Admin', '#0084ff', 1, 0, '2021-05-12 00:45:13', '2021-05-12 00:45:33', NULL),
(3, 'roles', 'Manager', 'Manager', '#b3ff00', 1, 0, '2021-05-12 00:46:30', '2021-05-12 00:46:30', NULL),
(4, 'roles', 'Employee', 'Employee', '#ff5c33', 1, 0, '2021-05-12 00:46:51', '2021-05-12 00:46:51', NULL),
(5, 'departments', 'Custom Development', '', '#007a6e', 1, 0, '2021-05-12 00:47:25', '2021-05-12 00:47:25', NULL),
(6, 'departments', 'WordPress Development', '', '#3fc624', 1, 0, '2021-05-12 00:47:48', '2021-05-12 00:47:48', NULL),
(7, 'departments', 'Logo Design', '', '#7d248f', 1, 0, '2021-05-12 00:48:14', '2021-05-12 00:48:14', NULL),
(8, 'departments', 'Mock Design', '', '#1e00ff', 1, 0, '2021-05-12 00:48:34', '2021-05-12 00:48:34', NULL),
(9, 'designations', 'Executive', '', '#a7f4ec', 1, 0, '2021-05-12 00:49:08', '2021-05-12 00:49:08', NULL),
(10, 'designations', 'Junior Executive', '', '#a7f4ec', 1, 0, '2021-05-12 00:49:23', '2021-05-12 00:49:23', NULL),
(11, 'designations', 'Senior Executive', '', '#327770', 1, 0, '2021-05-12 00:49:43', '2021-05-12 00:49:43', NULL),
(12, 'designations', 'Manager Executive', '', '#007bff', 1, 0, '2021-05-12 00:50:30', '2021-05-12 00:50:30', NULL),
(13, 'designations', 'Chief Operating Officer', '', '#ae00ff', 1, 0, '2021-05-12 00:50:50', '2021-05-12 00:50:50', NULL),
(14, 'designations', 'Chief Executive Officer', '', '#ff007b', 1, 0, '2021-05-12 00:51:23', '2021-05-12 00:51:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `user_id`, `slug`, `name`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'award-winning-digital-marketing-company-in-the-usa', 'Award-winning digital marketing company in the USA', 'Admin', '<h1>Top Digital Marketing Company<br />\r\nUp to 50% Off on All Packages</h1>\r\n\r\n<p>The Webho offers reliable digital marketing and branding solutions by experienced professionals to uncover your business&#39;s true potential.</p>', NULL, NULL, 'uploads/banner/_444820133.hero-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-14 18:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `name`, `slug`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'assa', 'assa', 'sadmk', '<p>test</p>', NULL, NULL, 'uploads/blogs/_1141050528.abbblue.png', 1, '0', 1, 0, '2021-12-08', '2021-12-07 18:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `budget_range`
--

CREATE TABLE `budget_range` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `budget_range`
--

INSERT INTO `budget_range` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'less than $1000', '2021-12-14 17:26:17', '2021-12-14 17:26:17'),
(2, 'from $1000 to $5000', '2021-12-14 17:26:24', '2021-12-14 17:26:24'),
(3, 'from $5000 to $15000', '2021-12-14 17:26:31', '2021-12-14 17:26:31'),
(4, 'from $15000 to $50000', '2021-12-14 17:26:42', '2021-12-14 17:26:42'),
(5, 'from $50000 to $100000', '2021-12-14 17:26:48', '2021-12-14 17:26:48'),
(6, 'more than $100000', '2021-12-14 17:26:55', '2021-12-14 17:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `user_id`, `slug`, `name`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Satisfied Client - 1', NULL, NULL, NULL, NULL, 'uploads/client/_1982559910.satisfied-client-icon1.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:29:27'),
(2, 1, NULL, 'Satisfied Client - 2', NULL, NULL, NULL, NULL, 'uploads/client/_1312442649.satisfied-client-icon2.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:29:39'),
(3, 1, NULL, 'Satisfied Client - 3', NULL, NULL, NULL, NULL, 'uploads/client/_526218047.satisfied-client-icon3.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:29:51'),
(4, 1, NULL, 'Satisfied Client - 4', NULL, NULL, NULL, NULL, 'uploads/client/_1603993808.satisfied-client-icon4.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:30:04'),
(5, 1, NULL, 'Satisfied Client - 5', NULL, NULL, NULL, NULL, 'uploads/client/_1857961962.satisfied-client-icon5.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:30:19'),
(6, 1, NULL, 'Satisfied Client - 6', NULL, NULL, NULL, NULL, 'uploads/client/_1374952180.satisfied-client-icon6.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:30:34'),
(7, 1, NULL, 'Satisfied Client - 7', NULL, NULL, NULL, NULL, 'uploads/client/_489755204.satisfied-client-icon7.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:30:48'),
(8, 1, NULL, 'Satisfied Client - 8', NULL, NULL, NULL, NULL, 'uploads/client/_112104538.satisfied-client-icon8.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:31:02'),
(9, 1, NULL, 'Satisfied Client - 9', NULL, NULL, NULL, NULL, 'uploads/client/_1112914777.satisfied-client-icon9.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:31:18'),
(10, 1, NULL, 'Satisfied Client - 10', NULL, NULL, NULL, NULL, 'uploads/client/_1714849012.satisfied-client-icon10.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:31:41'),
(11, 1, NULL, 'Satisfied Client - 11', NULL, NULL, NULL, NULL, 'uploads/client/_25693047.satisfied-client-icon11.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `user_id`, `name`, `page`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Using Comprehensive Range of Technologies', 'Home', 'Admin', '<h2 class=\"title cn clr_blk\">Using Comprehensive Range of Technologies</h2>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-21 19:00:47'),
(2, 1, 'USA\'s Top Digital Marketing & Web Design Agency', 'Home', 'Admin', '<h4 class=\"title_sm clr_blk_p\">We Help Brands Achieve Their Business Goals</h4>\r\n						<p class=\"para clr_blk_p\">\r\n						Being a leading digital marketing and branding agency, we analyse businesses thoroughly and develop bespoke strategies that help them achieve their business goals. We offer a comprehensive range of contemporary branding and online marketing services, including the following:\r\n						</p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 00:51:40'),
(3, 1, 'Logo Design', 'Home', 'Admin', '<p>At The Webho, we understand the significance of logo design in building a unique brand identity. Thus, we create logo designs that are distinctive, versatile, and attention-grabbing. We have an in-house team of experienced logo designers who design unique logos as per your specifications.</p>', NULL, NULL, 'uploads/cms/_911601226.h-ser-icon2.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 19:53:14'),
(4, 1, 'Web Design', 'Home', 'Admin', '<p>A website should grab the visitors&#39; attention and retain their attention, communicate the brand message, and convey information about the product/service. Keeping all this in mind, the web experts at The Webho create responsive and engaging websites for businesses</p>', NULL, NULL, 'uploads/cms/_1947180720.h-ser-icon3.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 19:53:36'),
(5, 1, 'Video Animation', 'Home', 'Admin', '<p>An animated video can help your business achieve what words can&#39;t. To help your brand reach new heights of success, DMD offers top-notch video animation services that allow brands to directly communicate with audiences. It will enable the brand to convey its message effectively in a concise way</p>', NULL, NULL, 'uploads/cms/_2002524110.h-ser-icon4.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 19:53:52'),
(6, 1, 'SEO', 'Home', 'Admin', '<p>SEO effectively brings new audiences to your site organically by optimizing your site for Search Engines. At DMD, we have SEO experts in our team who are skilled at improving the rankings of business sites on the SERPs using modern on-page and off-page SEO techniques. </p>', NULL, NULL, 'uploads/cms/_758430831.h-ser-icon4.png', 1, '0', 1, 0, '2021-12-15', '2021-12-16 00:45:41'),
(7, 1, 'SMM', 'Home', 'Admin', '<p>Social Media is a powerful marketing tool with billions of daily users. It is ideal for businesses looking to interact with their audiences. The Webho has a team of SMM experts who identify your target audience, create your brand\'s social presence, and engage with the audiences.</p>', NULL, NULL, 'uploads/cms/_2035098823.h-ser-icon5.png', 1, '0', 1, 0, '2021-12-15', '2021-12-16 00:45:42'),
(8, 1, 'ORM', 'Home', 'Admin', '<p>Online Reputation Management helps boost the online visibility of your brand and drive more visitors to your site by improving your brand\'s reputation within the search engines. At DMD, our ORM team controls how the audience perceives your business by establishing a positive online reputation.</p>', NULL, NULL, 'uploads/cms/_1695836447.h-ser-icon6.png', 1, '0', 1, 0, '2021-12-15', '2021-12-16 00:45:47'),
(9, 1, 'Some Of Our Recent Work', 'Home', 'Admin', '<p class=\"title_para cn clr_blk_p\">The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business\'s success. We specialize in providing top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our latest works:</p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 01:04:58'),
(10, 1, 'Hundreds of Satisfied Clients Across the Globe', 'Home', 'Admin', '<p class=\"title_para clr_wht cn\">\r\n            Digit Media Design is very proud of its broad client base that stretches across the globe. We have worked on hundreds of projects in various industries, and they have been a success across the board. We have learned and\r\n            experimented with many of these projects, and it has worked out well. We thoroughly enjoy collaborating with different people in different industries. It is an excellent exchange of ideas and develops a great network.\r\n        </p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 01:05:01'),
(11, 1, 'Are You Ready?', 'Home', 'Admin', '<p class=\"clr_wht\">Use your Coupon and Get a 50% Discount Now!</p>', NULL, NULL, 'uploads/cms/_1726607525.cta-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-16 01:05:04'),
(12, 1, 'How Our Web Design Process Works', 'Home', 'Admin', '<p class=\"para cn clr_blk_p\">The Webho has a team of experienced web designers committed to providing bespoke web designs that elevate the company&#39;s branding. Our team goes the extra mile to ensure that the customers are satisfied.</p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 02:18:35'),
(13, 1, 'Order Placement', 'Home', 'Admin', '<div class=\"process_no\">\r\n<h3>01</h3>\r\n</div>\r\n\r\n<div class=\"process_box_text\">\r\n<h4>Order Placement</h4>\r\n\r\n<p>Let us know about your specifications and choose the type of website you want for your brand.</p>\r\n</div>', NULL, NULL, 'uploads/cms/_483986425.process-icon1.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:31:56'),
(14, 1, 'Research & Analysis', 'Home', 'Admin', '<div class=\"process_no\">\r\n<h3>02</h3>\r\n</div>\r\n\r\n<div class=\"process_box_text\">\r\n<h4>Research &amp; Analysis</h4>\r\n\r\n<p>Our web design experts carry out thorough research on your business &amp; analyse competitors.</p>\r\n</div>', NULL, NULL, 'uploads/cms/_778771450.process-icon2.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:32:14'),
(15, 1, 'Website Design', 'Home', 'Admin', '<div class=\"process_no\">\r\n<h3>03</h3>\r\n</div>\r\n\r\n<div class=\"process_box_text\">\r\n<h4>Website Design</h4>\r\n\r\n<p>After understanding your brand and products/services, our designers create a unique web design.</p>\r\n</div>', NULL, NULL, 'uploads/cms/_94895551.process-icon3.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:32:32'),
(16, 1, 'Delivery', 'Home', 'Admin', '<div class=\"process_no\">\r\n<h3>04</h3>\r\n</div>\r\n\r\n<div class=\"process_box_text\">\r\n<h4>Delivery</h4>\r\n\r\n<p>After designing &amp; doing all the revisions, we deliver the final work before the deadline</p>\r\n</div>', NULL, NULL, 'uploads/cms/_88770736.process-icon4.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:32:54'),
(17, 1, 'Our Valuable Client Feedback', 'Home', 'Admin', '<p class=\"para cn clr_blk_p\">\r\n            No business can survive without solid customer partnerships and their feedback. We value our client input and<br />\r\n            believe that every piece of advice benefits our growth and sustainability\r\n        </p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 01:29:43'),
(18, 1, 'Contact Us', 'Home', 'Admin', '<p class=\"text-center\">Reach out to our team to discuss your project.</p>', NULL, NULL, 'uploads/cms/_1568487747.form-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-16 02:21:01'),
(19, 1, 'About', 'Footer', 'Admin', '<p>The Webho (DMD) is a well-known design agency that offers creative and bespoke solutions to businesses that help them rule the digital market. We create unique branding strategies that help brands stand out from the crowd. Our company provides top-notch digital design services at affordable rates.</p>', NULL, NULL, '', 1, '0', 1, 0, '2021-12-15', '2021-12-16 02:19:43'),
(20, 1, 'Get In Touch With Our Experts For A Free Consultation', 'web-design', 'admin', '<p>A unique and creative branding can help your business stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_402975925.webdesign-consultation-services-img.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 12:53:57'),
(21, 1, 'Responsive & Interactive Website Designs', 'web-design', 'admin', '<p>The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a greater chance of converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.</p>', NULL, NULL, 'uploads/cms/_538578271.iconoic-bg.jpg', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:10:04'),
(22, 1, 'WordPress Websites', 'web-design', 'admin', '<p>What makes WordPress stand out from other platforms is its highly customizable Content Management System that offers various themes and plugins. The websites that are created on WordPress are search engine friendly and captivating at the same time.</p>', NULL, NULL, 'uploads/cms/_1142264535.web-1.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:14:46'),
(23, 1, 'Shopify Websites', 'web-design', 'admin', '<p>If you are looking to get an e-commerce website made, Shopify is the best choice for it. At DMD, we have Shopify experts that create unique eCommerce stores that are easy to manage by the admin and easy to navigate by the visitors.</p>', NULL, NULL, 'uploads/cms/_616108043.web-2.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:18:49'),
(24, 1, 'Drupal', 'web-design', 'admin', '<p>Drupal is a popular web development platform that can be used for creating &amp; modifying complex website structures. At The Webho, we have Drupal experts skilled at creating websites that load fast and with enhanced performance.</p>', NULL, NULL, 'uploads/cms/_1179054624.web-3.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:21:24'),
(25, 1, 'Joomla', 'web-design', 'admin', '<p>Joomla is an excellent Content Management System that comes with excellent features. At DMD, we have a team of Joomla developers to create websites that are highly functional, secure, and significantly increase sales &amp; ROI.</p>', NULL, NULL, 'uploads/cms/_847918053.web-4.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:22:02'),
(26, 1, 'Responsive Websites', 'web-design', 'admin', '<p>The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a greater chance of converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.</p>', NULL, NULL, 'uploads/cms/_948158358.web-5.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 13:22:37'),
(27, 1, 'Our Custom Packages For Our Clients', 'web-design', 'admin', '<p>Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.</p>', NULL, NULL, 'uploads/cms/_1889537075.no-img-avalible.png', 1, '0', 1, 0, '2021-12-17', '2021-12-17 15:19:42'),
(28, 1, 'We Build Website with Quality & Improve business and growth', 'web-app-dev', 'admin', '<p>Get your hands on the best offers that we provide along with guaranteed results. Not only do we offer website development solutions but also provide website redesign with complete business solutions.</p>', NULL, NULL, 'uploads/cms/_1332911964.webdesign-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:36:21'),
(29, 1, 'Word Press Websites', 'web-app-dev', 'admin', '<p>What makes WordPress stand out from other platforms is its highly customizable Content Management System that offers various themes and plugins. The websites that are created on WordPress are search engine friendly and captivating at the same time.</p>', NULL, NULL, 'uploads/cms/_280770932.web-1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:42:33'),
(30, 1, 'Shopify Websites', 'web-app-dev', 'admin', '<p>If you are looking to get an e-commerce website made, Shopify is the best choice for it. At DMD, we have Shopify experts that create unique eCommerce stores that are easy to manage by the admin and easy to navigate by the visitors.</p>', NULL, NULL, 'uploads/cms/_1775577789.web-2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:43:16'),
(31, 1, 'Drupal', 'web-app-dev', 'admin', '<p>Drupal is a popular web development platform that can be used for creating &amp; modifying complex website structures. At The Webho, we have Drupal experts skilled at creating websites that load fast and with enhanced performance.</p>', NULL, NULL, 'uploads/cms/_257640262.web-3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:45:05'),
(32, 1, 'Joomla', 'web-app-dev', 'admin', '<p>Joomla is an excellent Content Management System that comes with excellent features. At DMD, we have a team of Joomla developers to create websites that are highly functional, secure, and significantly increase sales &amp; ROI.</p>', NULL, NULL, 'uploads/cms/_803069580.web-4.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:47:02'),
(33, 1, 'Responsive Websites', 'web-app-dev', 'admin', '<p>The Webho specializes in creating websites that are user-friendly and responsive. We believe that websites are the online representation of your brand. A website that impresses the audience has a&nbsp;greater chance of converting the visitor into a customer. We design and develop websites that help the business achieve their short-term and long-term goals.</p>', NULL, NULL, 'uploads/cms/_1378319517.web-5.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:48:22'),
(34, 1, 'Our Custom Packages For Our Clients', 'web-app-dev', 'admin', 'Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.', NULL, NULL, 'uploads/cms/_226801735.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 15:56:30'),
(35, 1, 'Get in Touch with Our Experts for A Free Consultation', 'video-animation', 'admin', '<p>&nbsp;A unique and creative branding can help your brand stand out from the competition and get&nbsp;your brand noticed. The Webho has a team of experienced professionals proficient at creating&nbsp; innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_1634617626.video-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:02:34'),
(36, 1, 'Video Animation And The Benefits', 'video-animation', 'admin', 'It has been observed that viewers do not have time to read a long piece of text, they engage better with video and animated content. It has a higher viewer ratio than written content. Video animations have many types and all have shown promising results over the many industries they have been used to explain the content of the firm. It ensures that your message is conveyed more clearly and convincingly.', NULL, NULL, 'uploads/cms/_1962877148.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:37:31'),
(37, 1, 'Cartoon Animation', 'video-animation', 'admin', '<p>Cartoon animation is the most fun, attractive yet creative video type. It engages the visitors to have a look even if they are in a rush and that minute attention from the visitor is all what you need&nbsp;for your business.</p>', NULL, NULL, 'uploads/cms/_1064198349.vid-1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:16:09'),
(38, 1, 'WHITEBOARD Animation', 'video-animation', 'admin', '<p>White-board animation videos are more economical to produce than most other&nbsp;types of videos. Our expert animators convey complex ideas in a compelling way without &#39;talking heads&#39; or expensive videoproduction.</p>', NULL, NULL, 'uploads/cms/_1423622703.vid-2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:19:29'),
(39, 1, '3D ANIMATION', 'video-animation', 'admin', '<p>2D/3D Animation is the traditional, easy approach to bring life to your designs.Our animators work to give a brand-specific look and feel to your design.</p>', NULL, NULL, 'uploads/cms/_1927280592.vid-3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:22:14'),
(40, 1, 'SCREEN-CAST Animation', 'video-animation', 'admin', 'A screencast is a video recording of your computer screen, and usually includes audio. Screen-casting is also referred to as video screen capture, and is a great way to teach or share ideas. A major benefit of screen-casting is that the viewer can watch the screencast at a time when it&rsquo;s best for them, because learning doesn&rsquo;t always take place in an academic setting.', NULL, NULL, 'uploads/cms/_296328656.vid-4.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:36:47'),
(41, 1, 'TYPOGRAPHY Animation', 'video-animation', 'admin', 'The typography animation or Kinetic typography is presented over time in a manner to convey a particular concept or a business idea. Our animators use typography animation in combination with various other styles of animations.', NULL, NULL, 'uploads/cms/_1393773198.vid-5.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:36:15'),
(42, 1, 'MOTION GRAPHICS Animation', 'video-animation', 'admin', 'Animated motion graphics is a video style that combines informational and educational content with colorful graphics. Animated motion graphics are perfect to explain complicated and comprehensive ideas in an attractive and engaging way and this style of animation is versatile and has the ability to blend with any other video style.', NULL, NULL, 'uploads/cms/_1547903054.vid-6.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:35:56'),
(43, 1, 'CORPORATE VIDEOS', 'video-animation', 'admin', '<p>60% of visitors prefer to watch a video about a company vs. reading the information. Get your corporate video made from us to reap in from those untapped customers. Make a sustainable impression, TODAY!</p>', NULL, NULL, 'uploads/cms/_1233415555.vid-7.png', 1, '0', 1, 0, '2021-12-18', '2021-12-22 12:51:53'),
(44, 1, 'Our Custom Packages For Our Clients', 'video-animation', 'admin', 'Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.', NULL, NULL, 'uploads/cms/_923433105.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:38:38'),
(45, 1, 'Get In Touch With Our Experts For A Free Consultation', 'log-animation', 'admin', '<p>A unique and creative branding can help your brand stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_1614010841.logo-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:43:22'),
(46, 1, 'Logo Animation And The Influence On Engagement', 'log-animation', 'admin', '<p>Logo Animation is a relatively newer way of design and engagement. It has been a success in the market and has shown that different mediums can boost viewership and consequently sales for the brand. We aim to please our clients with the best logo animation services available in the market.</p>', NULL, NULL, 'uploads/cms/_1927089337.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:46:21'),
(47, 1, 'Our Custom Packages For Our Clients', 'log-animation', 'admin', '<p>Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has permitted way more customers to reach out to us.</p>', NULL, NULL, 'uploads/cms/_1757913923.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 16:48:56'),
(48, 1, 'Get in Touch with Our Experts for A Free Consultation', 'seo-services', 'admin', '<p>A unique and creative branding can help your brand stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_1027631610.seo-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:02:01'),
(49, 1, 'Team Of The Best SEO Services In The Market', 'seo-services', 'admin', '<p>Digit Media Design is a digital company that aims to provide all the highly demanded services in the market. We serve our customers with their requirements of digital services, such as SEO. Search Engine Optimization has shown such promising results via Google algorithms that every brand now wants to utilize the advantage of the SEO services.<br />\r\n<br />\r\nOur team of professionals works to get the highest results for our clientele in any industry. SEO services enable better rankings and increase traffic to the website and it is fairly difficult to identify if it has been optimized unless a professional go through the content of the site. It is a very natural and comfortable addition to the content on the website.</p>', NULL, NULL, 'uploads/cms/_1030998692.professional-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:03:55'),
(50, 1, 'Top-Notch SEO Crew With Tangible Results', 'seo-services', 'admin', '<p>Search Engine Optimization requires the right tools to be used to deliver the best results for the company.</p>', NULL, NULL, 'uploads/cms/_355937182.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:06:04'),
(51, 1, 'Gathering Information', 'seo-services', 'admin', '<p>To provide a customized SEO service, we study your business and its function to deliver the best results.</p>', NULL, NULL, 'uploads/cms/_1653180249.seo-strategy-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:10:27'),
(52, 1, 'Keyword Research', 'seo-services', 'admin', '<p>To attract the right audience to your page, we use customized Keywords for your business.</p>', NULL, NULL, 'uploads/cms/_983086640.seo-strategy-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:12:04'),
(53, 1, 'Onboarding', 'seo-services', 'admin', '<p>We implement the specific strategy designed for your brand to check the results.</p>', NULL, NULL, 'uploads/cms/_228261812.seo-strategy-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:13:35'),
(54, 1, 'On-Page SEO', 'seo-services', 'admin', '<p>We implement on-page SEO to make sure the website is attracting traffic.</p>', NULL, NULL, 'uploads/cms/_1500923486.seo-analysis-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:17:26'),
(55, 1, 'Off-Page SEO', 'seo-services', 'admin', '<p>Off-page SEO plays a major role in bringing significant traffic to the website.</p>', NULL, NULL, 'uploads/cms/_1115188468.seo-analysis-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:19:22'),
(56, 1, 'Maintenance', 'seo-services', 'admin', '<p>To maintain the ranking, we update and check the progress regularly to ensure continuous success.</p>', NULL, NULL, 'uploads/cms/_1354010553.seo-strategy-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:21:26'),
(57, 1, 'Data-driven Decision', 'seo-services', 'admin', '<p>We use quantitative tools to make decisions for your business, eliminating any emotional decisions.</p>', NULL, NULL, 'uploads/cms/_509459783.seo-analysis-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:23:42'),
(58, 1, 'Expert Analysis', 'seo-services', 'admin', '<p>Our core team makes sure that your decisions are based on analytics and data.</p>', NULL, NULL, 'uploads/cms/_1741974303.seo-analysis-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:25:51'),
(59, 1, 'Core Focus', 'seo-services', 'admin', '<p>We aim to grow your calls and contact as well, not just traffic to your website.</p>', NULL, NULL, 'uploads/cms/_1359192386.seo-analysis-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:27:33'),
(60, 1, 'SEO Strategies', 'seo-services', 'admin', 'The Webho is a digital branding agency that uses the technical expertise of<br />\r\nSEO practices to deliver the best SEO results.', NULL, NULL, 'uploads/cms/_2007543442.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:31:57'),
(61, 1, 'Audience Relevancy', 'seo-services', 'admin', 'We aim to reach out to the target audience of your product/service and the brand.', NULL, NULL, 'uploads/cms/_2052668249.type-of-seo-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:33:28'),
(62, 1, 'Keyword Research', 'seo-services', 'admin', '<p>We conduct in-depth research about your services and then infuse the right keywords.</p>', NULL, NULL, 'uploads/cms/_2124450839.type-of-seo-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:35:04'),
(63, 1, 'Keyword Density', 'seo-services', 'admin', '<p>We select appropriate keywords and the development of the content for better ranking.</p>', NULL, NULL, 'uploads/cms/_2043783642.type-of-seo-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:39:19'),
(64, 1, 'Audience Relevancy', 'seo-services', 'admin', '<p>Using digital media platforms allows the audience to find their desired products and services from the many options available now. We use SEO practices to target the right audience to ensure that the reach is optimized and relevant to the brand audience. This targeted reach allows the brand to make higher viewer-to-conversion ratios. And consequently, more sales as well.</p>', NULL, NULL, 'uploads/cms/_1774378819.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:41:36'),
(65, 1, 'Keyword Research', 'seo-services', 'admin', 'Using SEO tools means to include data and words that will help the Google algorithm detect your content and rank it higher than other websites because of the SEO techniques infused into the content. We conduct a detailed analysis of the most traffic-generating keywords and add them to the content and deliver tangible results.', NULL, NULL, 'uploads/cms/_1576857965.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:43:46'),
(66, 1, 'Keyword Density', 'seo-services', 'admin', '<p>Keyword stuffing is a common practice now, but it is not beneficial for the brand. Google can detect unhealthy practices and does not react to them positively. Keyword stuffing results in penalties from the Google team and is an embarrassment for the SEO team. We are thorough and ensure to practice healthy and ethical practices for our clients.</p>', NULL, NULL, 'uploads/cms/_1077971707.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:46:26'),
(67, 1, 'Here’s What You Get with SEO Services', 'seo-services', 'admin', 'Search Engine Optimization increases the traffic to your site and improves ranking in a way that your site shows on the Search Engine Results Page (SERP)', NULL, NULL, 'uploads/cms/_962741969.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:48:59'),
(68, 1, 'More Traffic', 'seo-services', 'admin', 'Optimized content attracts more viewers to the website and engages the right audience.', NULL, NULL, 'uploads/cms/_1358202867.seo-ser-slid-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:51:45'),
(69, 1, 'More Revenue', 'seo-services', 'admin', 'With a higher viewer to customers ratio, it will increase the sales and then revenue.', NULL, NULL, 'uploads/cms/_725744473.seo-ser-slid-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:53:24'),
(70, 1, 'More Brand Awareness', 'seo-services', 'admin', 'Optimization infuses a recognizability factor that increases the brand\'s awareness and reaches among the audience.', NULL, NULL, 'uploads/cms/_95106550.seo-ser-slid-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:55:30'),
(71, 1, 'More Growth', 'seo-services', 'admin', 'Reaching the right audience, and attaining the sales and revenue targets guarantee more growth for the company.', NULL, NULL, 'uploads/cms/_1455142109.seo-ser-slid-icon4.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:57:57'),
(72, 1, 'More Leads', 'seo-services', 'admin', 'e generate more leads for your brand with our specialized Search Engine Optimization practices.', NULL, NULL, 'uploads/cms/_882323080.seo-ser-slid-icon5.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 17:59:19'),
(73, 1, 'More Trust and Authority', 'seo-services', 'admin', '<p>The higher the visibility of your website, the more trust and authority for customers to use your brand.</p>', NULL, NULL, 'uploads/cms/_46615670.seo-ser-slid-icon6.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:02:27'),
(74, 1, 'Our Custom Packages For Our Clients', 'seo-services', 'admin', 'Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.', NULL, NULL, 'uploads/cms/_1708427378.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:05:31'),
(75, 1, 'Get In Touch With Our Experts For A Free Consultation', 'packages', 'admin', '<p>A unique and creative branding can help your business stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_1303708683.packages-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:33:43'),
(76, 1, 'Our Custom Packages For Our Clients', 'packages', 'admin', '<p style=\"text-align: center;\">Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the rates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.</p>', NULL, NULL, 'uploads/cms/_1684492987.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:25:12'),
(77, 1, 'Get In Touch With Our Experts For A Free Consultation', 'portfolio', 'admin', 'A unique and creative branding can help your brand stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.', NULL, NULL, 'uploads/cms/_1473684360.portfolio-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:35:28'),
(78, 1, 'Some Of Our Recent Work', 'portfolio', 'admin', '<p style=\"text-align: center;\">The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business&rsquo;s success. We specialize in providing top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our latest works</p>', NULL, NULL, 'uploads/cms/_1281617593.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:36:54'),
(79, 1, 'Basic Website Package', 'basic-website', 'admin', '<p>Building a startup is perhaps the hardest yet innovative thing that you can do. Our Starter Website Design Package is the perfect and perhaps the most budget friendly package that you could possibly find in the industry. The package includes a staggering 4-page website together with one custom designed homepage, three custom-designed inner pages, one custom banner, and a contact-us form. It further comes with on-page SEO configuration, W3C certified HTML and complete deployment of the website that would be compatible with all browsers, including Chrome, Safari, Firefox, and more. With a money back guarantee and an amazing customer satisfaction rate, this deal is easily the best to take.</p>', NULL, NULL, 'uploads/cms/_1809388527.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:40:01'),
(80, 1, 'Startup Website Package', 'startup-website', 'admin', '<p>The world wide web is currently the hub to some of the best businesses in the world. With the competition this tough, even the best businesses around the world pull on their battle armors. If you are you looking for exceptional web solutions, our Business Website Design Package is just what you need. In addition to all that is offered in our Starter and Professional Website Packages, this package comes with 10 custom designed inner pages, 3 concept designs for the homepage, 2 business email addresses, landing page design, and a newsletter subscription. You will also get a responsive website that lets you connect with users on tablets, mobile phones, desktop computers, and more.</p>\r\n\r\n<p><br />\r\nThis package is suitable for super-startups and brand revamps for already established companies.</p>', NULL, NULL, 'uploads/cms/_286767917.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:45:48'),
(81, 1, 'Professional Website Package', 'professional-website', 'admin', '<p>At The Webho, we offer a Business Website Design Package that provides your company with a new website with a turnaround time of up to 72 hours. This connects you with a dedicated account manager and provides you with a competitive, results-driven website with 5 custom inner pages, 5 premium stock photos, interactive and animated slider banner, contact us form, Google-friendly sitemap, security plugins, a faster load time, and much more. All of this comes with full money back guarantee and unlimited revisions for maximum value of your money. This package is suitable for Mid-Sized and Mega Sized corporations aiming for web-based success.</p>', NULL, NULL, 'uploads/cms/_280622068.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:50:03'),
(82, 1, 'Elite Website Package', 'elite-website-package-detail', 'admin', '<p>Elite Website Package is highly suitable for small and mid-sized business organizations. This package gives you an exciting website package that fulfills higher requirements that a business needs to have for an excellent online reputation and to provide top-quality customer care service.<br />\r\n<br />\r\nThe package consists of a complete 15-pages website with every feature of the website being customized for your business. For a top-quality website, you will get up to 10 custom banner designs. Please select any of them with your choice and add beauty to your digital presence. Along with free domain services for five years, your website will be entirely social media integrated to build and grow the audience on the popular social media platforms.</p>', NULL, NULL, 'uploads/cms/_941059486.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:52:24'),
(83, 1, 'Corporate Combo', 'corporate-combo-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_683158379.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:57:03'),
(84, 1, 'Business Website Package', 'business-website-package-detail', 'admin', '<p>There&rsquo;s no better way to design a website than to choose our Enterprise Plus Website Design Package. Multiple designers will send you tons of ideas for your web page, and you&rsquo;ll choose your favorite. If you&rsquo;re looking for complete web solutions that are hassle-free for your company, this is just the package that you need. The package comes with Google Analytic Installation, a Google-friendly sitemap, cross compatibility for all browsers and devices, Google Webmaster Tool, and so many other features, on top of 180 days of free maintenance and a free training manual. This package is suitable for Super-Sized corporations aiming for web-based success and looking for complete web package.</p>', NULL, NULL, 'uploads/cms/_612889058.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 18:59:20'),
(85, 1, 'Elite SEO Packages', 'elite-ecommerce-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_1167212322.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:31:56'),
(86, 1, 'Corporate Website Package', 'corporate-website-package-detail', 'admin', '<p>If you&rsquo;re looking for complete web solutions that are hassle-free for your company, our Enterprise Website Design Package is just the package that you need. The package consists of a complete multilingual 20-pages website with each and every feature of the website being custom for your business. For an iconic website, this is perhaps the best you can get. It also comes with 3rd Party API Integrations, downloadable, eBooks, PDFs, podcast, and videos, social media integration, and countless other features.This package is suitable for Super-Sized corporations aiming for web-based success and looking for complete web package.</p>', NULL, NULL, 'uploads/cms/_1407633172.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:35:09'),
(87, 1, 'Get In Touch With Our Experts For A Free Consultation', 'smm-services', 'admin', '<p>A unique and creative branding can help your business stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand uncover its true potential.</p>', NULL, NULL, 'uploads/cms/_453120953.seo-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:39:24'),
(88, 1, 'Improve Brand Awareness Through Our Professional Social Media Marketing Services', 'smm-services', 'admin', '<p>At The Webho, we help businesses build brand awareness by forming meaningful connections with online audiences through our Social Media Marketing (SMM) services. There are numerous companies that claim to provide businesses with the best SMM services; however, none deliver reliable solutions. At DMD, we have a team of social media executives that assess businesses thoroughly and then develop bespoke strategies. We start by analysing the business goals and the target audience. We create strategic solutions based on the analysis based on the audience&#39;s gender, location, age, interests, and other factors.<br />\r\n<br />\r\nIrrespective of the social platform you like or what kind of social media services you are searching for, we&rsquo;ve got your back!</p>', NULL, NULL, 'uploads/cms/_1485684143.professional-smm-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:41:49'),
(89, 1, 'Types Of Social Media Marketing', 'smm-services', 'admin', '<p style=\"text-align: center;\">Social Media Marketing is crucial for the online success of any business. The main goals of SMM are to<br />\r\nboost brand awareness and increase ROI.</p>', NULL, NULL, 'uploads/cms/_595860629.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:45:30'),
(90, 1, 'Facebook', 'smm-services', 'admin', '<p>Facebook is the largest social media platform with the highest number of active users. About 74% of users state that they check their Facebook accounts every day.</p>', NULL, NULL, 'uploads/cms/_1388641178.type-of-seo-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:47:44'),
(91, 1, 'Instagram', 'smm-services', 'admin', '<p>About 140 plus million users use Instagram every month. When it comes to influencer marketing, Instagram is the best social media platform for it.</p>', NULL, NULL, 'uploads/cms/_20028484.type-of-seo-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:49:44'),
(92, 1, 'YouTube', 'smm-services', 'admin', '<p>YouTube is the second most visited website in the digital world. If you are looking to increase your revenues, video marketing can help you achieve this goal.</p>', NULL, NULL, 'uploads/cms/_1623611549.type-of-seo-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:51:08'),
(93, 1, 'Why Your Facebook Account Needs Management', 'smm-services', 'admin', 'It\'s an undeniable fact that billions of users are on Facebook. Thus, a significant number of your target customers are present on Facebook. You can reach out to these people through Facebook Ad Campaigns easily. Facebook Advertising allows\r\nmarketers to choose the target audience based on their location, gender, age, interests, and so on. You can build a lasting relationship with your customers through social media by interacting with them.', NULL, NULL, 'uploads/cms/_1314927186.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:54:23'),
(94, 1, 'Instagram Is a Powerful Social Media Platform to Improve Your Brand Recognition', 'smm-services', 'admin', '<p>Instagram is one of the most popular and appealing social media platforms that 81% of people use to search for new products/services. A picture has the power to captivate the audience and depict the product/service well. It is the best<br />\r\nplatform to look up to if you are looking to expand your audience.</p>', NULL, NULL, 'uploads/cms/_1842335353.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 19:58:28'),
(95, 1, 'Skyrocket Sales with Effective Organic Marketing Strategies', 'smm-services', 'admin', '<p>Organic marketing is a cost-effective way to grow your brand. Although it requires a brand with a strong social media and content support. The social media marketing team at DMD can help your brand build a strong voice to communicate via<br />\r\nSEO. We create marketing strategies that help in captivating the audience and supporting the business in increasing revenues.<br />\r\n&nbsp;</p>', NULL, NULL, 'uploads/cms/_1732345807.type-of-seo-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:01:43'),
(96, 1, 'Reasons Why Your Brand Needs Social Media Marketing (SMM) Services', 'smm-services', 'admin', 'The Webho has helped countless brands connect with their audiences and improve their sales with SMM services. Here&#39;s why you need to avail of our SMM services:', NULL, NULL, 'uploads/cms/_894084978.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:11:54'),
(97, 1, 'Higher Conversions', 'smm-services', 'admin', '<p>With the increase in visibility, the brand gains more conversions, leading to increased ROI.</p>', NULL, NULL, 'uploads/cms/_85399440.seo-ser-slid-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:08:30'),
(98, 1, 'Higher Conversions -2', 'smm-services', 'admin', '<p>With the increase in visibility, the brand gains more conversions, leading to increased ROI.</p>', NULL, NULL, 'uploads/cms/_1299679212.seo-ser-slid-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:14:17'),
(99, 1, 'Higher Conversions -3', 'smm-services', 'admin', '<p>With the increase in visibility, the brand gains more conversions, leading to increased ROI.</p>', NULL, NULL, 'uploads/cms/_1459802787.seo-ser-slid-icon5.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:15:41'),
(100, 1, 'Some Of Our Recent Work', 'smm-services', 'admin', '<p>The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business&rsquo;s success. We specialize in<br />\r\nproviding top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our<br />\r\nlatest works<br />\r\n&nbsp;</p>', NULL, NULL, 'uploads/cms/_2140607793.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:17:39'),
(101, 1, 'Our Custom Packages for our Clients', 'smm-services', 'admin', '<p>Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\none who feels the rates would make it difficult to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />\r\nreach out to us.</p>', NULL, NULL, 'uploads/cms/_1895174431.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:20:29'),
(102, 1, 'Get in Touch with Our Experts for A Free Consultation', 'orm-services', 'admin', '<p>A unique and creative branding can help your brand stand out from the competition and get your brand noticed. The Webho has a team of experienced professionals proficient at creating innovative branding strategies that can help your brand<br />\r\nuncover its true potential.</p>', NULL, NULL, 'uploads/cms/_1650945852.orm-consultation-services-img.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:25:15'),
(103, 1, 'The Best Online Reputation Management Solutions', 'orm-services', 'admin', '<p>Our team follows a proven process to manage online reputation perfectly</p>', NULL, NULL, 'uploads/cms/_1664217120.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:27:30'),
(104, 1, 'Reputation Research', 'orm-services', 'admin', '<p>We conduct internal and competitor research for your standing in the market to implement the right strategies.</p>', NULL, NULL, 'uploads/cms/_587819231.orm-icon1.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:30:05'),
(105, 1, 'Monitor Your Reputation', 'orm-services', 'admin', '<p>We manage your reputation with reviews, guest blogs, forum posts, and other means of engagement.</p>', NULL, NULL, 'uploads/cms/_818203873.orm-icon2.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:32:00'),
(106, 1, 'Content Creations', 'orm-services', 'admin', '<p>We create different pieces of content; articles, blogs, and business descriptions that will be put up on the website.</p>', NULL, NULL, 'uploads/cms/_916120884.orm-icon3.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:33:41'),
(107, 1, 'Building Positive Reputation', 'orm-services', 'admin', '<p>We generate positive reviews, video messages, and testimonials for your brand that propels a positive image of the company.</p>', NULL, NULL, 'uploads/cms/_1347680153.orm-icon4.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:35:44'),
(108, 1, '24 / 7 Tracking', 'orm-services', 'admin', '<p>We stay on top of the progress of the brand with each of our strategies and alterations, we improvise if something is not responding well.</p>', NULL, NULL, 'uploads/cms/_15744492.orm-icon5.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:37:17'),
(109, 1, 'Technical & Activities Reporting', 'orm-services', 'admin', '<p>We engage the technical and analytical team to keep us informed, while we manage to update the activities of the brand.</p>', NULL, NULL, 'uploads/cms/_662351795.orm-icon6.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:38:46');
INSERT INTO `cms` (`id`, `user_id`, `name`, `page`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(110, 1, 'Our Custom Packages for our Clients', 'orm-services', 'admin', '<p style=\"text-align: center;\">Our core values are honesty, integrity, and innovation. We have excelled based on providing the work with complete transparency to all our clients. We offer various packages to cater to as many customers and turn away no one who feels the<br />\r\nrates would make it difficult for them to avail the services. Our packages are very accommodating and considerate to allow more people to avail of all of our services. This has allowed way more customers to reach out to us.<br />\r\n&nbsp;</p>', NULL, NULL, 'uploads/cms/_622968753.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:41:08'),
(111, 1, '3d Design', '3d-design', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_440049757.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:52:31'),
(112, 1, 'Advanced E-Commerce Packages', 'advanced-ecommerce-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_160267549.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:56:21'),
(113, 1, 'Basic Combo', 'basic-combo', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1506427257.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 20:58:41'),
(114, 1, 'Classic Video Package', 'classic-video-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of video designing and all the creations that comes with it. Our experienced teams of video designers are proficiently skilled and artistic video designers. DMD is custom video design agency New York, that believe in the authority of distinctive brand identity and how a video design can revolutionize the approach your customers move toward a brand. Talk to our Corporate video design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_380771554.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 21:01:38'),
(115, 1, 'Collateral Classic Packages', 'collateral-classic-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_111927326.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 21:03:40'),
(116, 1, 'Complete Branding Solution', 'complete-branding-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_982765680.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 21:05:42'),
(117, 1, 'Custom CRM/ERP Portal Website Package', 'custom-crm-erp-portal-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You dont have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings<br />\r\nyou the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional<br />\r\nmaterials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_472730758.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 21:08:18'),
(118, 1, 'Custom E Commerce Marketplace Package', 'custom-ecommerce-marketplace-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings<br />\r\nyou the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional<br />\r\nmaterials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1473188698.no-img-avalible.png', 1, '0', 1, 0, '2021-12-18', '2021-12-17 21:11:48'),
(119, 1, 'CUSTOMIZED WEB PORTAL', 'customized-web-portal-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings<br />\r\nyou the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional<br />\r\nmaterials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_326064779.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:33:18'),
(120, 1, 'Deluxe Video Package', 'delux-video-details', 'admin', '<p>The classic choice when it comes to motion graphics videos, this package brings you everything you need for creating a stellar motion graphics video and allows you to do some experimentation along the way. It&rsquo;s filled to the brim with fantastic animation and brings you the very best when it comes to visual aesthetic along with a unique way to convey the information you want in your video.</p>\r\n\r\n<p>Connect with us today to subscribe to our Motion Graphics Classic Package. &nbsp;</p>', NULL, NULL, 'uploads/cms/_1428973907.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:38:02'),
(121, 1, 'Automated/Interactive E-Commerce Package', 'e-commerce-package', 'admin', '<p>Ready to make people love your commodities? The Webho the leaders of the industry extending a stellar offer of 6 Unique Page Website along with 5 Stock images, 5 Banner Designs, 1 jQuery Slider Banner &amp; free Google Friendly Sitemap. We work<br />\r\non Facebook Page Design, Twitter Page Design, YouTube Page Design. We run Complete Deployment of fantastic e-commerce websites with 100% Satisfaction Guarantee &amp; 100% Unique Design Guarantee. The team consisting of developers, marketing<br />\r\ngurus and tech-savvy members unite together for deliver perfection in the form of e-commerce websites. Weaving functionality, responsiveness, in-demand &amp; trendy features &ndash; all in one package. Call us today to book the slot!<br />\r\n&nbsp;</p>', NULL, NULL, 'uploads/cms/_1369094372.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:41:30'),
(122, 1, 'Elite Combo', 'elite-combo', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1586303034.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:46:33'),
(123, 1, 'Elite SEO Packages', 'elite-seo-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_766692803.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:50:00'),
(124, 1, 'Custom CRM/ERP Portal Website Package', 'erp-portal-website-package', 'admin', '<p>The Webho are the pioneers of website design &amp; development uniting the concept of quality with credibility. The basic website package consists of a comprehensive range of facilitations. Offering unlimited Page Website with Unique Pages and UI Design, Complete Custom Development. Our web developers, designers and managers collaborate together to run performance analytics &amp; customization of Personal Details. Further merged with Territory Management, Account Management, Event Integration, Advanced Data Security and Opportunity Management; we ensure Sales Forecasting along with Call/Video Logging. Catering each client according &amp; considering the market trends, our experts generate comprehensive reports on sales &amp; services, filtering reports by date-range &amp; category to view the positive outcomes.</p>', NULL, NULL, 'uploads/cms/_1029678095.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:53:01'),
(125, 1, 'Identity SEO Package', 'identity-seo-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_786618767.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:57:18'),
(126, 1, 'Illustration', 'illustration', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1922897058.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 12:59:38'),
(127, 1, 'Basic', 'logo-animation-basic', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_511614971.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:02:45'),
(128, 1, 'Professional', 'logo-animation-professional', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1493092211.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:05:01'),
(129, 1, 'Startup', 'logo-animation-startup', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1106464310.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:07:35'),
(130, 1, 'Starter Logo Package', 'logo-basic', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_547851090.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:10:30'),
(131, 1, 'Business Logo Package', 'logo-Infinity', 'admin', '<p>At American Web Coders, we emphasize delivering corporate logo designs of exceptional quality to businesses at a very competitive price. With our business logo design package, you get to choose from unlimited appealing logo concepts for your corporate identity plus unlimited revisions, stationery design, and social media pages design. We ensure the logo is created according to your design requirements and specifications. Since your logo is created in all essential file formats, you can increase your business presence by placing the logo on all your promotional products.</p>', NULL, NULL, 'uploads/cms/_259723221.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:13:21'),
(132, 1, 'Professional Logo Package', 'logo-plus', 'admin', '<p>We have designed this package keeping professional and more established businesses in mind. This package offers 5 custom logo designs with unlimited revisions to strengthen your brand image and meet both your online and offline requirements. Our premium package includes exclusive artwork of your logo design in various file formats, including PSD, PDF, AI, JPEG, and PNG. This package comes with a 100% money back guarantee to ensure highest levels of client satisfaction.</p>', NULL, NULL, 'uploads/cms/_1359901131.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:17:39'),
(133, 1, 'Mascot', 'mascot', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1330807784.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:19:45'),
(134, 1, 'ORM Basic', 'orm-basic', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1803255369.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:22:27'),
(135, 1, 'ORM Business', 'orm-business', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1594667406.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:27:00'),
(136, 1, 'ORM Premium', 'orm-premium', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_504547451.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:30:58'),
(137, 1, 'ORM Standard', 'orm-standard', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_202576794.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:33:30'),
(138, 1, 'ORM Value', 'orm-value', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1601055894.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:37:00'),
(139, 1, 'Automated/Interactive Conferencing Portal Package', 'portal-package', 'admin', '<p>Are you wondering what can keep user hooked on a web portal? The Webho have web portal experts assembling features involving Up to 40 Stock images, 10Unique Banner Designs, Unlimited Page Website, Custom Content Management System (CMS), Unique Pages and UI Design in one place. We do Complete Custom Development with Process Automation Tools, Newsfeed Integration, Social Media Plugins Integration, JQuery Slider, Search Engine Submission, Free Google Friendly Sitemap. We offer Social Media Page Designs (Facebook, Twitter, Instagram) Along with Complete Deployment of web portals. No matter the industry &amp; market &ndash; consult web portal professionals, we are just a click away!</p>', NULL, NULL, 'uploads/cms/_77761133.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:41:44'),
(140, 1, 'Premium Collateral Packages', 'premium-collateral-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_1562266017.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:44:36'),
(141, 1, 'Premium Video Package', 'premium-video-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of video designing and all the creations that comes with it. Our experienced teams of video designers are proficiently skilled and artistic video designers. DMD is custom video design agency New York, that believe in the authority of distinctive brand identity and how a video design can revolutionize the approach your customers move toward a brand. Talk to our Corporate video design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_2105830390.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:47:17'),
(142, 1, 'Professional Combo', 'professional-combo', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1814580285.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:50:26'),
(143, 1, 'Professional E-Commerce Package', 'professional-ecommerce-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_225183130.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:53:36'),
(144, 1, 'Venture Plan', 'professional-seo-details', 'admin', '<p>Our exclusive Venture Package is made some of the most experienced SEO executives that we have. Our team of SEO professionals make sure that you&rsquo;re not only at top of the SERPs, but your online brand reputation is also regularly monitored and managed. With in-depth business analysis, comprehensive webpage and off-page optimization, progress tracking and analysis, and extensive monthly reporting, this package is ideal for large-sized organizations looking for top-of-the-line search engine optimization services for their corporate and professional needs.</p>', NULL, NULL, 'uploads/cms/_1805839223.no-img-avalible.png', 1, '0', 1, 0, '2021-12-20', '2021-12-20 13:57:14'),
(145, 1, 'SEO Startup', 'seo-startup-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. DMD is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_1707351715.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:17:54'),
(146, 1, 'SMM Basic 3 Months Plan', 'smm-basic-3-months-plan', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1675047397.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:20:39'),
(147, 1, 'SMM Plus 6 Months Plan', 'smm-plus-6-months-plan-1', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1146503668.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:24:07'),
(148, 1, 'SMM Plus 6 Months Plan', 'smm-plus-6-months-plan-2', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_619067815.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:37:27'),
(149, 1, 'SMM Startup One Time', 'smm-startup-one-time', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_1987452751.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:39:51'),
(150, 1, 'Startup Collateral Packages', 'startup-collateral-details', 'admin', '<p>At The Webho , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. The Webho is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_348683330.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:42:52'),
(151, 1, 'Startup Combo', 'startup-combo', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You don&rsquo;t have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_822391420.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:45:40'),
(152, 1, 'Startup E-Commerce Package', 'startup-ecommerce-details', 'admin', '<p>If you are looking for an affordable logo, then our standard logo design package is the right solution. You dont have to search for a quality custom logo design for your organization or brand anymore since our starter logo package brings you the enviable with a perfect combination of high quality and affordability. Our starter logo design is created in all the essential file formats, you can easily place the logo on your website, stationery products, and promotional materials. We focus on making a strong bond with all our clients by providing them the utmost for their budget.</p>', NULL, NULL, 'uploads/cms/_433626390.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:49:02'),
(153, 1, 'Startup Video Package', 'startup-video-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of video designing and all the creations that comes with it. Our experienced teams of video designers are proficiently skilled and artistic video designers. DMD is custom video design agency New York, that believe in the authority of distinctive brand identity and how a video design can revolutionize the approach your customers move toward a brand. Talk to our Corporate video design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_1406480697.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:51:29'),
(154, 1, 'Teaser/Intro Video Package', 'teaser-intro-video-details', 'admin', '<p>At DMD , our innovative thinkers are expert in the world of video designing and all the creations that comes with it. Our experienced teams of video designers are proficiently skilled and artistic video designers.DMD is custom video design agency New York, that believe in the authority of distinctive brand identity and how a video design can revolutionize the approach your customers move toward a brand. Talk to our Corporate video design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_1891354586.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:55:14'),
(155, 1, 'Unlimited Collateral Packages', 'unlimited-collateral-details', 'admin', '<p>At American Website Studios , our innovative thinkers are expert in the world of website designing and all the creations that comes with it. Our experienced teams of website designers are proficiently skilled and artistic website designers. American Website Studios is custom website design agency New York, that believe in the authority of distinctive brand identity and how a website design can revolutionize the approach your customers move toward a brand. Talk to our professional website design team today and transform the appearance of your creative brand. Our inspired artists are here to guide you long way out!</p>', NULL, NULL, 'uploads/cms/_2058279194.no-img-avalible.png', 1, '0', 1, 0, '2021-12-21', '2021-12-20 15:58:02'),
(156, 1, 'Some of Our Recent Work', 'web-app-dev', 'admin', '<p style=\"text-align: center;\">Get the perfect WEB design - or any design in over 90 categories! Whatever your business need or budget, we&rsquo;ll help get it done.</p>', NULL, NULL, 'uploads/cms/_1827204987.30.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 15:44:23'),
(157, 1, 'Some Of Our Recent Work', 'video-animation', 'admin', '<p>The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business&rsquo;s success. We specialize in providing top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our latest works</p>', NULL, NULL, 'uploads/cms/_2003963025.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 15:45:14'),
(158, 1, 'Iconic Logo Design', 'log-animation', 'admin', 'Our iconic logo design will surely blow your audiences mind, with its compelling imagery that are highly indicative and presents your particular product or brand. We use a different yet unique type of abstract representation for your organization.', NULL, NULL, 'uploads/cms/_1036710312.logo-inner-img.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:36:17'),
(159, 1, '2D Animated Logo', 'log-animation', 'admin', 'Our 2D animated logos will instantaneously be recognizable and memorable to your audience. With its classic, simple, and trendy features your 2d logo designs will skyrocket your business in just a matter of time. So, what are you waiting for?', NULL, NULL, 'uploads/cms/_182199450.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:37:23'),
(160, 1, '3D Animated Logo', 'log-animation', 'admin', 'Our 3D logo design service will instantly hypnotize your new customers in such a way that they will keep on getting back to you for your product or services. A 3d logo design is a strong symbolic representation of your business.', NULL, NULL, 'uploads/cms/_1429419669.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:39:08'),
(161, 1, 'Illustrative Logo', 'log-animation', 'admin', 'Illustrative logos are quite unique and they have been in trend for a well amount of time. They are simply just pictures, but they deliver and strong and steady meaning. Illustrative logos are a perfect choice if your selling products or services.', NULL, NULL, 'uploads/cms/_1273461095.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:41:09'),
(162, 1, 'Symbolic Logo', 'log-animation', 'admin', 'A symbolic logo design is a perfect choice for you if you&rsquo;re looking for an abstract representation of your well established or a startup business. Symbolic logo can be eye-catching, and highly captivating, that makes your brand stand out.', NULL, NULL, 'uploads/cms/_769811442.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:43:03'),
(163, 1, 'Typographic Logo', 'log-animation', 'admin', 'Typographic logo designs completely rely on text, they are powerful enough to print themselves in to the mind of your customers. Typographic logo designs help you share your brands exciting, admirable and successful story in-depth.', NULL, NULL, 'uploads/cms/_1938303077.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 16:44:56'),
(164, 1, 'Some Of Our Recent Work', 'log-animation', 'admin', '<p style=\"text-align: center;\">The Webho offers a comprehensive range of brand development and digital marketing services. We have a team of industry experts to provide your business with dependable solutions that can skyrocket your business&rsquo;s success. We specialize in providing top-notch web design, logo design, video animation, and digital marketing services. All our services are delivered by professionals who curate unique strategies as per your unique brand requirements. Take a peek at some of our latest works</p>', NULL, NULL, 'uploads/cms/_800681054.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-21 17:15:46');
INSERT INTO `cms` (`id`, `user_id`, `name`, `page`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(165, 1, 'Terms Condition', 'terms-condition', 'admin', '<h1>Term &amp; Condition</h1>\r\n\r\n<p>By using The Webho, and signing up as a Client, you agree to be legally bound by these Terms and Conditions of Use, including those terms and conditions incorporated by reference. Please read these Terms and Conditions carefully. If you do not accept these Terms and Conditions, you may not use the The Webho, service. By placing any order with The Webho, you agree to all our terms and it is your responsibility to read our terms. The Webho, may revise these Terms and Conditions at any time by updating this posting. You should visit this web page periodically to review the Terms and Conditions, because they are binding on you. In these Terms and Conditions, all services provided by and related to The Webho, and all text, images, photographs, user interface, &quot;look&quot; and &quot;feel&quot;, data and other content included at http://digitmediadesigns.com from time to time (including, without limitation, the selection, coordination and arrangement of such content) are sometimes referred to as the &quot;Web Site&quot; and/or &quot;Service&quot;.<br />\r\n<br />\r\nYou acknowledge and agree that The Webho, shall have the right (but not the obligation) in its sole discretion, to pre-screen, refuse or remove any project and/or user provided content that violates these Terms and Conditions or is otherwise objectionable, including, without limitation, projects or content that is illegal, obscene, indecent, defamatory, incites religious, racial or ethnic hatred, or violates the rights of others. Activity that is brought to our attention which appears in our sole judgment to violate the law will be brought to the attention of the proper authorities. You acknowledge, consent and agree that The Webho,. may access, preserve, and disclose your account information and content if required to do so by law or in a good faith belief that such access preservation or disclosure is reasonably necessary to: (a) comply with legal process; (b) enforce these Terms and Conditions; (c) respond to claims that any content violates the rights of third-parties; (d) respond to your requests for customer service; or (e) protect the rights, property, or personal safety of The Webho, its users and the public.</p>\r\n\r\n<h2>The Webho,. Service Generally</h2>\r\n\r\n<p><strong>(a)</strong>&nbsp;Description. The Webho, Service is an online service where individuals or entities that have signed up with The Webho, as clients (each, a &quot;Client&quot;) can post specific assignments and project descriptions, including illustrative samples or other media (each, a &quot;Creative Brief&quot;), revise those Creative Briefs (each, a &quot;Revision Brief&quot;) and obtain responses (each, a &quot;Response&quot;) to those Creative or Revision Briefs from design experts retained by The Webho, (&quot;Members&quot;). The Webho, will provide you, as the Client, the Service according to the Package you have chosen as detailed in section 1(e) below. Your Responses will be created iteratively through a drafting cycle of Creative Briefs, Revision Briefs and Responses, ultimately resulting in a final Response conforming to your various Creative and Revision Briefs.<br />\r\n<br />\r\n<strong>(b)&nbsp;</strong>Creative Brief and Responses. You are solely responsible for preparing and posting detailed descriptions of each of your Creative Briefs to the Web Site, including providing samples illustrating your Creative Brief and any relevant deadlines. For each Response to a Creative Brief that you want to receive, a term sheet (a &quot;Term Sheet&quot;) will be generated that will contain, and be subject to, the terms and conditions you have established for the Creative or Revision Brief. The Webho, is under no obligation to review a Creative or Revision Brief or Term Sheet for any purpose, including accuracy, completeness of information, quality or clarity. The Webho, may decide, in its sole discretion, to deny a Creative or Revision Brief or a Term Sheet.<br />\r\n<br />\r\n<strong>(c)</strong>&nbsp;Reviewing Responses. When The Webho, provides you with a Response, you are responsible for reviewing the Response. If you fail to promptly inform The Webho, that the Response is not reasonably responsive to the related Term Sheet or Creative Brief, you will be deemed to have accepted the Response. If you notify The Webho, that you think a Response is not reasonably responsive to the related Creative Brief, you shall then submit to the Web Site a Revision Brief containing information regarding amendments or modification to be made to the initial Response. After you provide The Webho, with a Revision Brief, The Webho, will provide you with a subsequent Response that conforms to the additional criteria you requested. The Webho, is not responsible for the content of Responses developed to the extent that such Responses are prepared to conform to your Creative or Revision Briefs.<br />\r\n<br />\r\n<strong>(d)</strong>&nbsp;Revision Cycles. Revision cycles generally consist of unlimited additional compositions that incorporate changes you request in a Revision Brief. The purpose of the revision process is to create Responses that move your project forward in the specific direction you have determined. You may request significant changes in the first and second cycles, and the Responses generated might be quite different in nature from the original composition you selected. By the third revision request, your requests shall be modifications of the current composition only. Revision requests that depart from the then-current composition will be honored and completed in a timely manner, however; The Webho, reserves the right to charge $50 for each such Revision. No revision work, which requires payment, will be started without your authorization.<br />\r\n<br />\r\n<strong>(e)</strong>&nbsp;Packages. You may select from the following Service Packages: logo design packages Logo Startup Design Package | Logo Classic Design Package | Logo Premium Design Package | Logo Unlimited Design Package<br />\r\n<br />\r\n<strong>(f)</strong>&nbsp;Client Accounts. When you register for the Service, you must pay for the Service via credit card, or other payment method authorized by The Webho,. You will be charged for the Package you have selected along with and additional products and/or services you select as add-ons. If you pay by credit card, you will be required to provide a valid credit card number and credit card billing address when registering as a Client. The Webho, will email you a receipt for the transactions in which you are involved. Our fee policy for Clients may change and we may decide to impose additional fees on Clients at any time; however, such additional fees will not apply to projects submitted before The Webho, implements any such change in fees.</p>\r\n\r\n<h2>Registration, Password, User Identity</h2>\r\n\r\n<p><strong>(a)</strong>&nbsp;Your User Identity. When you register as a Client, you will create a user identity (your &quot;User Identity&quot;), which will be your identity for purposes of interacting with other users through the Web Site. Your User Identity will include certain personal information, such as, the industry in which you operate. However, your user name need not be your real name. During the registration process, the fields requesting information that will be made available to others as part of your User Identity are identified. You are responsible for ensuring that you are comfortable making such information available to other Web Site users.<br />\r\n<br />\r\n<strong>(b)</strong>&nbsp;Access Numbers, Passwords, and Password Access. You shall keep confidential, shall not disseminate, and shall use solely in accordance with these Terms and Conditions, your User Identity, registration identification and password for the Web Site. You shall immediately notify The Webho, if you learn of or suspect: (i) any loss or theft of your User Identity, registration identification or password, or (ii) any unauthorized use of your registration identification or password or of the Web Site. In the event of such loss, theft, or unauthorized use, The Webho, may impose on you, at The Webho, &#39; sole discretion, additional security obligations.<br />\r\n<br />\r\n<strong>(c)</strong>&nbsp;Security Breaches and Revision. If any unauthorized person obtains access to the Web Site as a result of any act or omission by you, you shall use your best efforts to ascertain the source and manner of acquisition and shall fully and promptly inform The Webho, You shall otherwise cooperate and assist in any investigation relating to any such unauthorized access.</p>\r\n\r\n<h2>Ownership; Rights To Use</h2>\r\n\r\n<p><strong>(a)</strong>&nbsp;Web Site and Service Generally. Except as expressly contemplated under these Terms and Conditions, as between The Webho, and you, The Webho, will own all right, title and interest in and to all copyright, trademark, service mark, patent, trade secret or other intellectual property and proprietary rights in and to the Web Site and Service, in all media now known or later devised, to the fullest extent provided under Canadian and international law. You shall not remove, conceal or alter any copyright notice, by line information, disclaimer, restriction or other notice on the Web Site or any portion thereof. You shall not use or permit any third party to use the name, trademarks, trade names, or trade dress of The Webho, ., including &quot;The Webho, .&quot;, without the prior written consent of The Webho, , as determined in its sole discretion, for each such use.<br />\r\n<br />\r\n<strong>(b)</strong>&nbsp;Creative and Response Briefs. Upon submission of a Creative or Response Brief or any other information or media provided by you in connection with your use of the Service (collectively, the &quot;Client Information&quot;), The Webho, and its agents shall have all rights and licenses necessary to use such Client Information for the purpose of obtaining Responses and for archival purposes. Each Member to whom your project is made available has the right to review and display the relevant Term Sheet for purposes of preparing a Response.<br />\r\n<br />\r\n<strong>(c)</strong>&nbsp;Rights of The Webho,. Upon your submission of Client Information to the Service, you grant The Webho, a royalty-free, perpetual, irrevocable, sub-licensable , exclusive, worldwide right (including any moral rights) and license to use, reproduce, modify, adapt, publish, translate, create derivative works from, distribute, communicate to the public, perform and display (in whole or in part), and/or incorporate in other works, in any form, media, or technology now known or later developed, such Client Information, for the full term of any intellectual property rights that may exist in such Client Information to the extent necessary to provide you with the Service and Responses.<br />\r\n<br />\r\n<strong>(d)</strong>&nbsp;Rights of Clients. Subject to your compliance with these Terms and Conditions, you shall own the final the Response composition provided to you by The Webho,. (the &quot;Final Product&quot;). You shall not, however, own any materials, media or other content generated during any revision cycles leading up to the Final Product, and The Webho, expressly reserves all right, title and interest in and to the same. You acknowledge and hereby grant to The Webho, a royalty-free, irrevocable exclusive worldwide right to use Creative and Revision Briefs, individual Responses provided to you, and Final Product for internal and archival purposes, and in order to display and promote the The Webho, Service. The Webho, retains the rights to all artwork concepts and other content not selected by you. You acknowledge that your ownership rights under these Terms and Conditions are limited to the Final Product, and that no trademarks or service marks in or to any Final Product are being conveyed under these Terms and Conditions. You hereby acknowledge that The Webho, shall have no obligation or duty to perform trademark, service mark or copyright searches or inquiries, or the like, in order to validate the propriety or legality of the Final Product. Accordingly, you are encouraged to perform your own independent searches with regard to the Final Product. Furthermore, you acknowledge that The Webho, shall have no responsibility or obligation of any kind to assist you in seeking state or federal intellectual property protection (i.e., without limitation, trademark or copyright registration) for the Final Product, nor shall The Webho, be responsible for otherwise assisting you in any way in your attempt to perfect your rights in or to the Final Product.</p>\r\n\r\n<h2>Nondisclosure And Privacy</h2>\r\n\r\n<p>The Webho,. intends to use commercially reasonable efforts to follow its privacy policy; as such privacy policy may be changed from time to time at The Webho, &#39; sole discretion. Notwithstanding the foregoing, The Webho, cannot and does not assume any responsibility or liability for any information submitted to the Web Site or for the use or misuse of any information submitted by you or any other person, including, without limitation, any information accessed by a hacker or by any other malici</p>\r\n\r\n<h2>Eligibility, Access, Use And Service</h2>\r\n\r\n<p><strong>(a)</strong>&nbsp;Eligibility Requirements. To register as a Client, you must be at least 18 years of age, agree to these Terms and Conditions and The Webho, privacy policy, and complete the registration procedure. By registering as a Client, you represent and warrant that you meet these eligibility requirements, that the information you include as part of the registration process is complete and accurate and, if you are registering on behalf of an entity, that you are authorized to bind that entity to these Terms and Conditions. The Webho, may accept or reject your registration in its sole discretion.</p>\r\n\r\n<p><strong>(b)</strong>&nbsp;Authorization to Use; Permitted Uses. You may access and use the Service solely in accordance with these Terms and Conditions and any posted policies and procedures that appear on the Web Site. You may provide Creative Briefs and obtain Responses only if you register as a Client. Any use of the Web Site is at your sole risk and responsibility. Subject to these Terms and Conditions, you may<br />\r\n<strong>(i)</strong>&nbsp;display the Web Site on an Internet access device, and<br />\r\n<strong>(ii)</strong>&nbsp;on an occasional, infrequent and ad hoc basis, and only in circumstances that constitute &quot;fair use&quot; under United States copyright law, print copies of insubstantial portions of the Web Site.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>(c)</strong>&nbsp;Prohibited Uses. Except as expressly permitted in these Terms and Conditions, you may not display or print the Web Site and in no event may you broadcast, circulate, distribute, download, perform, publish, rent, reproduce, sell, store, transmit or create decorative works from the Web Site. Additionally, you agree to comply with all applicable laws (including, without limitation, any applicable export controls) in connection with your use of the Service, and with such further limitations or rules as may be set forth on the Web Site. Without limiting the foregoing, you agree not to transmit, distribute, post, communicate or store information or other material on, to or through the Web Site that<br />\r\n<strong>(i)</strong>&nbsp;is copyrighted, unless you are the copyright owner;<br />\r\n<strong>(ii)</strong>&nbsp;reveals trade secrets, unless you own them;<br />\r\n<strong>(iii)</strong>&nbsp;infringes on any other proprietary or intellectual property rights of others, on the privacy or publicity rights of others, or any statutory right;<br />\r\n<strong>(iv)</strong>&nbsp;is obscene, defamatory, threatening, harassing, abusive, hateful, or embarrassing to any other person or entity;<br />\r\n<strong>(v)</strong>&nbsp;is sexually- explicit;<br />\r\n<strong>(vi)</strong>&nbsp;constitutes advertisements or solicitations of business, chain letters or pyramid schemes; or<br />\r\n<strong>(vii)</strong>&nbsp;contains viruses, Trojan horses, worms, time bombs, or other computer programming routines or engines that are intended to damage, detrimentally interfere with, surreptitiously intercept or expropriate any system, data or information. You further agree not to<br />\r\n<strong>(a)</strong>&nbsp;use any incomplete, false or inaccurate biographical information or other information for purposes of registering as a Client;<br />\r\n<strong>(b)</strong>&nbsp;delete or revise any material or other information of any other user of The Webho, ;<br />\r\n<strong>(c)</strong>&nbsp;take any action that imposes an unreasonable or disproportionately large load on the Web Site&#39;s infrastructure;<br />\r\n<strong>(d)</strong>&nbsp;use any device, software or routine to interfere or attempt to interfere with the proper working of the Service or any activity being conducted on the Web Site;<br />\r\n<strong>(e)</strong>&nbsp;use or attempt to use any engine, software, tool, agent or other device or mechanism (including, without limitation, browsers, spiders, robots, avatars or intelligent agents) to navigate or search the Web Site, other than the search engine and search agents available from The Webho, on the Web Site and other than generally available third-party web browsers (e.g., Microsoft Internet Explorer and Netscape Navigator); or<br />\r\n<br />\r\n<strong>(f)</strong>&nbsp;attempt to decipher, decompile, disassemble or reverse-engineer any of the software comprising or in any way making up a part of the Web Site.&nbsp;<strong>(g)</strong>&nbsp;Web Site Security. You are prohibited from violating or attempting to violate the security of the Web Site, including, without limitation,&nbsp;<strong>(i)</strong>&nbsp;accessing data not intended for you or logging into a server or account that you are not authorized to access;&nbsp;<strong>(ii)</strong>&nbsp;attempting to probe, scan or test the vulnerability of a system or network or to breach security or authentication measures without proper authorization;&nbsp;<strong>(iii)</strong>&nbsp;attempting to interfere with service to any user, host or network, including, without limitation, by way of submitting a virus to, or overloading, &quot;flooding&quot;, &quot;spamming&quot;, &quot;mail bombing&quot; or &quot;crashing&quot;, the Web Site;<br />\r\n<br />\r\n<strong>(iv)</strong>&nbsp;sending unsolicited email to any user of the Web Site, including promotions and/or advertising of products or services; or&nbsp;<strong>(v)</strong>&nbsp;forging any TCP/IP packet header or any part of the header information in any email or posting generated in connection with the Service. Violations of system or network security may result in civil or criminal liability. The Webho, will investigate occurrences that may involve such violations and may involve, and cooperate with, law enforcement authorities in prosecuting users who are involved in such violations. The Webho, reserves the right to review postings on the Web Site, to remove any postings, and to terminate your ability to communicate with, or post to, the Web Site at any time without notice, in its sole discretion. The Webho, will use commercially reasonable efforts not to disclose any information you communicate with, or post to, the Web Site, but reserves the right to disclose such information to the extent necessary to satisfy any applicable law, regulation, legal process or governmental request, and the right to edit, refuse to post or to remove any information or materials, in whole or in part.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p><strong>(e)</strong>&nbsp;Operation of Web Site. The Webho, shall not be responsible for any delays or interruptions of, or errors or omissions contained in, the Web Site. The Webho, reserves the right, but shall not be required, to correct any such delays, interruptions, errors or omissions. Although The Webho, intends to use commercially reasonable efforts to make the Web Site and Service accessible, The Webho, makes no representation, warranty or covenant that the Web Site or Service will be available at all times or at any time. Various circumstances may prevent or delay availability, including telecommunications and/or server problems. The Webho, may at any time discontinue the Web Site in whole or in part, may change or eliminate any transmission method, and may change transmission speeds or other signal characteristics. The Webho, shall not be responsible for any loss, cost, damage or liability that may result from any of the circumstances, actions or inactions described in this paragraph.</p>\r\n\r\n<h2>Communications</h2>\r\n\r\n<p>By using the The Webho, Service, you agree to receive, via email or otherwise, status notifications, a monthly newsletter, and carefully selected special offers and promotions for certain products and services that we believe could be of value to our Clients. This is essential to maintaining the low-cost of our services. You are free to unsubscribe from any newsletters we send to you at any time. The Webho, may or may not use a third party to send email or otherwise contact you, however, your personal identifying information will never be disclosed or shared with another party in a manner inconsistent with The Webho, &#39; privacy policy.</p>\r\n\r\n<h2>Disclaimers; Indemnification; Limitations Of Liability</h2>\r\n\r\n<p><strong>(a)</strong>&nbsp;Responsibility for Content. The Webho, shall not be responsible for any use that is or is not made of the Web Site or the Service. Without limiting the foregoing, The Webho, makes no representations, warranties or covenants regarding, and does not guarantee, the truthfulness, accuracy, or reliability of any information or other material (including, without limitation, any Creative Brief, Term Sheets, Responses or User Identity) that are communicated through, or posted to, the Service, whether by Members, Clients, The Webho, or otherwise, nor does The Webho, endorse any opinions expressed by any user of the Web Site, including any Member or Client. Without limiting the foregoing, The Webho, makes no representations, warranties or covenants regarding the validity of the rights to Responses granted pursuant to these Terms and Conditions. You acknowledge that any reliance on information or other material, including, without limitation, any information related to a particular Package or your project, Term Sheet, Response or User Identity, communicated through the Service, or posted to the Web Site, will be at your own risk. Without limiting the foregoing, you agree and acknowledge that you use each Response at your own risk and that you are responsible for taking any actions you deem reasonable to determine whether your use of a Response will infringe any statutory or third-party intellectual property, privacy or publicity rights. Photos / Images: The Webho, shall not be responsible for any use of photos that are not royalty free. It is the clients&#39; responsibility to purchase and pay for all rights to use any photos, images, graphics, icons, logos, and/or designs for any designs created by The Webho, for the client. This includes websites, website templates, brochures, business cards, postcards, stationery, signage, animations, commercials, slogans, flyers, banners, stickers, promotional items, and/or desktop wallpapers.</p>\r\n\r\n<p>&quot;If a project is on hold for more than 2 weeks from the client&#39;s end the project will be archived and there will be a reactivation fee to re-initiate the project.&quot;</p>\r\n\r\n<h2>Third Party Terms Of Use</h2>\r\n\r\n<p>Certain features of our services may utilize the services of third-party vendors and business partners, which services may include software, information or other services. Certain of these vendors and business partners require Users who utilize such features to agree to our terms and conditions. This clause identifies third-party terms and conditions that are required by such third-party vendors and business partners as they apply to the features set forth below. Your uses of such features constitute your agreement to be bound by these terms and conditions. These third party terms are subject to change at such third party&rsquo;s discretion.</p>', NULL, NULL, 'uploads/cms/_1510822169.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-22 13:16:36'),
(166, 1, 'Privacy Policy', 'privacy-policy', 'admin', '<h2>What Information Do We Gather?</h2>\r\n\r\n<p>This privacy plan is set to explain our policies regarding customer`s personal data that is collected for our use. When you place a query online, you will only need to give some basic information to us by filling out a simple query form so that we could contact you to discuss the need. You will only need to enter your name, e-mail address, phone number or country.</p>\r\n\r\n<h2>Do We Disclose Any Information To Outside Parties?</h2>\r\n\r\n<p>We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include our subsidiaries and trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>\r\n\r\n<h2>How Do We Protect Your Information?</h2>\r\n\r\n<p>The Webho.com uses a secure server for the purpose of securing your private information. All your private/credit information sends out via Secure Socket Layer (SSL) technology that is used to keep the information confidential when you place your order online.</p>\r\n\r\n<h2>What Do We Use Your Information For?</h2>\r\n\r\n<p>We use the personal data for handling orders. The Webho and its members use your personal data and other personally non-identifiable information that will help us in handling your orders properly and to better respond to your complexity. Furthermore, your information may be used for the following ways:<br />\r\nTo improve our website features (by the feedbacks we receive from you)<br />\r\nTo keep you updated with our latest offers and happening<br />\r\nTo improve our customer services</p>\r\n\r\n<h2>The General Data Protection Regulation Imply</h2>\r\n\r\n<p>We do not transfer data to other parties that gives out your personally identifiable information. An individual&#39;s data that you will give will be kept confidential and you will have complete know of it. This does not include our subsidiaries and trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By consenting to this privacy notice you are giving us permission to process your personal data specifically for the purpose identified. Consent is required for The Webho to process both types of personal data, but it must be explicity given. Where we are asking for your sensitive personal data we will always tell you why and how the information will be used. You may withdraw consent at any time by Call or Via Email as per the standard Withdrawal of Consent Procedure [ GDPR DOC 2.7A]</p>\r\n\r\n<p>&quot;If a project is on hold for more than 2 weeks from the client&#39;s end the project will be archived and there will be a reactivation fee to re-initiate the project.&quot;</p>', NULL, NULL, 'uploads/cms/_710273481.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-22 13:20:41'),
(167, 1, 'Return Policy', 'return-policy', 'admin', '<p>The Webho, Inc. insures smooth transitions with all clients and it is mandatory that all transactions are documented and archived. To assure customers of legitimate and quality work on their projects, The Webho offers Money Back guarantee and other return policies. However, all return policy at The Webho are subject to the following clauses and can be changed with prior confirmation with clients.<br />\r\n<br />\r\n<strong>(a)&nbsp;</strong>MoneyBack Guarantee is valid till 30days of order placement, provided that other terms are applied.<br />\r\n<br />\r\n<strong>(b)</strong>&nbsp;In result of unsatisfactory designs, you can claim your return via three modes i)Toll Free # 844-827-9472 ii)Live Chat iii)Email us on any official ID<br />\r\n<br />\r\n<strong>(c)</strong>&nbsp;If you are not satisfied with the initial Responses provided by The Webho, Inc, there is no return if your project moves to round two of logo alterations. You may request a return by completing the Return Request form, which will be provided to you upon request. Upon timely receipt of the request, The Webho, Inc will return the total payment made by you, less a service and processing fee of 10% on package amount.<br />\r\n<br />\r\n<strong>(d)</strong>&nbsp;There are no returns for any rush service charges. 24 hour design fees and 24 hour rush changes are non-returnable.<br />\r\n<br />\r\n<strong>(e)</strong>&nbsp;In case of return approval, client will get his amount credited back within next 6-7 Business Days.<br />\r\n<br />\r\n<strong>(f)</strong>&nbsp;We won&#39;t entertain or return any orders if the client stays non-responsive for 45 Days but client can send us an email to hold the project if there is some personal issue. Also if the client is non-responsive for more than 60 Days then the client has to pay an extra caution fee i.e. $150 for re-initiating the project.<br />\r\n<br />\r\n<strong>(g)</strong>&nbsp;Incase if client wants to forfeit the website portion of the package after 30days, return won&#39;t be applicable; though we can hold the project in such case and the client can come later and get the project started again<br />\r\n<br />\r\n<strong>(h)</strong>&nbsp;Furthermore, customer shall forfeit the right to the return outlined above if customer request additional revisions (1 or more design changes regardless of the complexity) or modifications to any of the initial concepts. You shall also forfeit the right to a return if you do not respond in a timely manner to a status notification from The Webho, Inc.<br />\r\n<br />\r\n<strong>(i)</strong>&nbsp;Should you receive a return, you agree that your acceptance of the return shall constitute your sole and exclusive remedy with respect to related Responses. Additionally, you acknowledge that you will have no right (express or implied) to use any Response or other work product, content, or media, nor will you have any ownership interest in or to the same.<br />\r\n<br />\r\n<strong>(j)</strong>&nbsp;In case of finalizing one part of the order the customer won&#39;t be eligible for a return for the rest of the remaining package.</p>', NULL, NULL, 'uploads/cms/_1760983042.no-img-avalible.png', 1, '0', 1, 0, '2021-12-22', '2021-12-22 13:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inner_banner`
--

CREATE TABLE `inner_banner` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inner_banner`
--

INSERT INTO `inner_banner` (`id`, `user_id`, `name`, `page`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Award-Winning Web Design Agency in the US', 'Web Design', 'Admin', '<h1 class=\"clr_wht\">\r\nGet <b>Your</b><br>\r\n<b>WEB</b> FOR\r\n</h1>\r\n<div class=\"price_batch\">\r\n<p>as Low As <span>$149</span></p>\r\n</div>\r\n<h5 class=\"clr_wht\">Top Web Development Company in USA</h5>\r\n<p class=\"clr_wht\">Get your website designed by USA\'s best web development company. Garner new visitors and keep them engaged with a unique web design.</p>', NULL, NULL, 'uploads/inner_banner/_337883660.banner-website-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 18:39:36'),
(2, 1, 'Award-Winning Web Development Team Agency in the US', 'Web Application Development', 'Admin', '<h1 class=\"clr_wht\">Get Custom Web App Development Services</h1>\r\n                    <!-- <div class=\"price_batch \"><p class=\"clr_wht\">as Low As <span>$149</span></p></div> -->\r\n                    <h5 class=\"clr_wht\">CUSTOM APP DESIGN DEVELOPMENT</h5>\r\n                    <p class=\"clr_wht\">Our application development teams are an amazing business and will bring you the\r\n                        best application planning environment you can have.</p>', NULL, NULL, 'uploads/inner_banner/_1004918869.banner-webapp-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 11:39:04'),
(3, 1, 'Award-winning Video Animation Company in the US', 'Video Animation', 'Admin', '<h1 class=\"clr_wht\">\r\nBest <b>Video</b><br>\r\n<b>Animation</b> for\r\n</h1>\r\n<div class=\"price_batch\">\r\n<p>as Low As <span>$499</span></p>\r\n</div>\r\n<h5 class=\"clr_wht\">We Ensure A Marvelous Viewing Experience</h5>\r\n<p class=\"clr_wht\">Our team of professionals is waiting to serve you with the highest quality of videos for your brand.</p>', NULL, NULL, 'uploads/inner_banner/_1223672054.banner-video-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:43:18'),
(4, 1, 'Award-winning Logo Animation Services in the US', 'Logo Animation', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Get <b>Your</b><br>\r\n                        <b>Logo</b> for\r\n                    </h1>\r\n                    <div class=\"price_batch\">\r\n                        <p>as Low As <span>$69</span></p>\r\n                    </div>\r\n                    <h5 class=\"clr_wht\">For the Best Logo Animation Services</h5>\r\n                    <p class=\"clr_wht\">We aim to provide the most relevant and enriching consumer experience with our\r\n                        logo animation</p>', NULL, NULL, 'uploads/inner_banner/_589948384.banner-logoanimation-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 11:44:36'),
(5, 1, 'Award-Winning Company among the Digital Companies in the US', 'Seo Services', 'Admin', '<h1 class=\"clr_blk\">\r\n                        Avail <b>SEO </b><br>\r\n                        <b>Services </b> for\r\n                    </h1>\r\n                    <div class=\"price_batch\">\r\n                        <p class=\"clr_blk\">as Low As <span>$449</span></p>\r\n                    </div>\r\n                    <h5 class=\"clr_blk\">Top Organic Marketing Firm.</h5>\r\n                    <p class=\"clr_blk\">Our team of professionals utilizes proven SEO strategies to rank your website on Google.</p>', NULL, NULL, 'uploads/inner_banner/_226067830.banner-seo-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 11:46:29'),
(6, 1, 'Top social media marketing company in the USA', 'SMM Services', 'Admin', '<h1 class=\"clr_blk\">\r\n                        Avail <b>SMM</b><br>\r\n                        <b>Services</b> for\r\n                    </h1>\r\n                    <div class=\"price_batch\">\r\n                        <p class=\"clr_blk\">as Low As <span>$280</span></p>\r\n                    </div>\r\n                    <h5 >By The Best Social Media Marketing Agency.</h5>\r\n                    <p class=\"clr_blk\">Social Media Marketing strategies that help brands connect and engage with the audience.</p>', NULL, NULL, 'uploads/inner_banner/_116922694.banner-smm-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:33:54'),
(7, 1, 'Award-Winning Digital Company in the US', 'ORM Services', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Get <b>ORM</b><br>\r\n                        <b>Services</b> for\r\n                    </h1>\r\n                    <div class=\"price_batch\">\r\n                        <p>as Low As <span>$180</span></p>\r\n                    </div>\r\n                    <h5>We serve you the most reliable customer experience.</h5>\r\n                    <p class=\"clr_wht\">Negativity spread by the fake users about the online brands jeopardizes the online reputation. We take care of online brands to build a higher credibility.</p>', NULL, NULL, 'uploads/inner_banner/_970853868.banner-orm-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 18:42:32'),
(8, 1, 'Ranked in the top 5 out of 863 US companies', 'Packages', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Reasonable <b></b><br>\r\n                        <b>Packages</b>\r\n                    </h1>\r\n                    <!-- <div class=\"price_batch\"><p>as Low As <span>$59</span></p></div> -->\r\n                    <h5 >Best Digital Solutions At Affordable Rates</h5>\r\n                    <p class=\"clr_wht\">We have kept our rates minimal to make it easy for everybody to benefit from our branding &amp; digital marketing services</p>', NULL, NULL, 'uploads/inner_banner/_1836820849.banner-packages-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:09:44'),
(9, 1, 'Award-Winning Digital Company in the US', 'Portfolio', 'Admin', '<h1 class=\"clr_wht\">\r\n                        View our Diverse <br>\r\n                        <b>Portfolio</b> to Know More\r\n                    </h1>\r\n                    <!-- <div class=\"price_batch\"><p>as Low As <span>$59</span></p></div> -->\r\n                    <h5>Our Portfolio offers a great range of exciting ideas.</h5>\r\n                    <p class=\"clr_wht\">We at The Webho are known for The Best Digital Fix</p>', NULL, NULL, 'uploads/inner_banner/_1076013406.banner-portfolio-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:09:55'),
(10, 1, 'Award-Winning Web Design Agency in the US', 'Ecommerce Development', 'Admin', '<h1 class=\"clr_wht\">Get <b>Your</b><br><b>Web</b> for</h1>\r\n					<div class=\"price_batch \"><p class=\"clr_wht\">as Low As <span>$149</span></p></div>\r\n					<h5 class=\"clr_wht\">Top Ecommerce Development Company in USA</h5>\r\n					<p class=\"clr_wht\">Get your website designed by USA\'s best web development company. Garner new visitors and keep them engaged with a unique web design.</p>', NULL, NULL, 'uploads/inner_banner/_1192353145.banner-website-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 12:27:09'),
(11, 1, 'Award-Winning Digital Company in the US', 'Combo Package', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Contact Us Experts <br>\r\n                        for Advice Now\r\n                    </h1>\r\n                    <!-- <div class=\"price_batch \"><p class=\"clr_wht\">as Low As <span>$59</span></p></div> -->\r\n                    <h5 class=\"clr_wht\">We promise you a smooth and fulfilling experience</h5>\r\n                    <p class=\"clr_wht\">Our designers, developers, programmers, and writers are waiting to serve you the best work in the market.</p>', NULL, NULL, 'uploads/inner_banner/_1054367874.banner-contact-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 12:30:19'),
(12, 1, 'Top web development company in the USA.', 'Review', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Digital <br>\r\n                        <b>Solution</b> for\r\n                    </h1>\r\n                    <div class=\"price_batch\">\r\n                        <p>as Low As <span>$59</span></p>\r\n                    </div>\r\n                    <h5>100% Customer Satisfaction Guaranteed</h5>\r\n                    <p class=\"clr_wht\">All the branding and marketing solutions are provided by industry experts, ensuring 100% customer satisfaction</p>', NULL, NULL, 'uploads/inner_banner/_1112459238.banner-review-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 20:10:40'),
(13, 1, 'Award-Winning Digital Company in the US', 'Contact Us', 'Admin', '<h1 class=\"clr_wht\">\r\n                        Contact Us Experts <br>\r\n                        for Advice Now\r\n                    </h1>\r\n                    <!-- <div class=\"price_batch \"><p class=\"clr_wht\">as Low As <span>$59</span></p></div> -->\r\n                    <h5 class=\"clr_wht\">We promise you a smooth and fulfilling experience</h5>\r\n                    <p class=\"clr_wht\">Our designers, developers, programmers, and writers are waiting to serve you the best work in the market.</p>', NULL, NULL, 'uploads/inner_banner/_726314662.banner-contact-img.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 12:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `phonenumber`, `message`, `url`, `updated_at`, `created_at`) VALUES
(5, 'lasdh', 'asdnloi@as.com', '0125574587', 'ksaldjsa uhasihd', '', '2021-12-06 21:45:46', '2021-12-06 21:45:46'),
(6, 'asascx', 'sadsad@npc.com', '0114254', 'lsadh', '', '2021-12-06 21:49:55', '2021-12-06 21:49:55'),
(7, 'jasvd', 'sadd@daw.com', '01125547', 'sadsa 223sad2 ewq', '', '2021-12-06 21:53:10', '2021-12-06 21:53:10'),
(8, 'asho', 'kas@sm.com', '0112486944', 'sakhdb sauyd', '', '2021-12-06 22:19:11', '2021-12-06 22:19:11'),
(9, 'qwh', 'xzc@ska.com', '114545783', 'alasias', '', '2021-12-07 20:39:57', '2021-12-07 20:39:57'),
(10, 'asdji', 'sadk@iua.com', '11238893', ';sald;kf788589:;l\'', '', '2021-12-07 20:40:28', '2021-12-07 20:40:28'),
(11, 'nbvcb asd', 'zxsadc@mkc.com', '9986635965327', 'as;poas()uisudks asdas', '-', '2021-12-13 18:38:36', '2021-12-07 20:41:20'),
(15, 'saad', 'zxsadc@mkc.com', '4184654231948', ';dsjflkdsf', 'http://127.0.0.1:8000/dashboard', '2021-12-13 20:48:16', '2021-12-13 20:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_project`
--

CREATE TABLE `inquiry_project` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry_project`
--

INSERT INTO `inquiry_project` (`id`, `name`, `email`, `phonenumber`, `message`, `service`, `url`, `created_at`, `updated_at`) VALUES
(1, 'asdqd trea', 'asd@asd.com', '01215848', 'qwewqsda vs', 'Web Design', 'http://127.0.0.1:8000/web-design', '2021-12-10 15:25:25', '2021-12-13 16:41:00'),
(2, 'nnghj', 'asd@asd.com', '26598632', 'aisgwer jl;jkwer', 'SEO', 'http://127.0.0.1:8000/video-animation', '2021-12-10 17:10:51', '2021-12-10 17:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `user_id`, `name`, `slug`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 0, 'logo', NULL, NULL, NULL, NULL, NULL, 'uploads/logo/d29bd55c406a53a380679c1ede84b402/FwKN2DrAC2CXdDY9Z6AFXbsEeJs4h4JOypMXfPVO.jpg', 1, '0', 1, 0, '2021-12-15', '2021-12-14 20:27:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_departments_table', 1),
(2, '2014_10_12_000000_create_designations_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_05_08_010845_attributes', 1),
(7, '2021_05_12_051804_role_assign', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_placed`
--

CREATE TABLE `order_placed` (
  `id` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_number` varchar(225) NOT NULL,
  `budget_id` int(50) NOT NULL,
  `package_id` int(50) NOT NULL,
  `message` text NOT NULL,
  `url` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_placed`
--

INSERT INTO `order_placed` (`id`, `name`, `email`, `phone_number`, `budget_id`, `package_id`, `message`, `url`, `updated_at`, `created_at`) VALUES
(1, 'sadas sad', 'asjdiw@sam.com', '0258749688709', 2, 1, 'sadsad bvnz', 'http://127.0.0.1:8000/web-design', '2021-12-14 18:08:24', '2021-12-14 16:42:03'),
(3, 'john', 'asjdiw@sam.com', '023698547', 2, 18, 'need give inquery', 'http://127.0.0.1:8000/seo-services', '2021-12-14 19:51:48', '2021-12-14 19:51:48'),
(4, 'Dave', 'asjdiw@sam.com', '6698742541', 2, 17, 'need further detail', 'http://127.0.0.1:8000/seo-services', '2021-12-14 19:53:25', '2021-12-14 19:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `discount_price` varchar(50) NOT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `user_id`, `name`, `slug`, `price`, `discount_price`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Starter', NULL, '299', '399', 'admin', '<ul>\r\n	<li>Custom designed Homepage (1x concept)</li>\r\n	<li>3 Custom designed inner pages</li>\r\n	<li>3 Premium Stock Photos</li>\r\n	<li>1 Custom Banner Design</li>\r\n	<li>Contact Us Form</li>\r\n	<li>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>\r\n	<li>On-page SEO configuration</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Content Management System (CMS)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1241504338.price-icon-1.png', 1, '0', 1, 0, '2021-12-08', '2021-12-07 21:30:58'),
(2, 1, 'Professional', 'professional', '599', '499', 'admin', '<ul>\r\n	<li>Custom designed Homepage (2x concepts)</li>\r\n	<li>5 Custom designed inner pages</li>\r\n	<li>5 Premium Stock Photos</li>\r\n	<li>3 Custom Banner Design</li>\r\n	<li>Interactive &amp; Animated Slider Banner</li>\r\n	<li>Contact Us Form</li>\r\n	<li>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>\r\n	<li>On-page SEO configuration</li>\r\n	<li>Fast Load Time</li>\r\n	<li>Security plugins</li>\r\n	<li>Google Friendly Sitemap</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantees</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Content Management System (CMS)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_876981366.price-icon-2.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:26:39'),
(3, 1, 'Buisness', 'buisness', '999', '899', 'admin', '<ul>\r\n	<li>Custom designed Homepage (3x concepts)</li>\r\n	<li>10 Custom designed inner pages</li>\r\n	<li>Content Management System (CMS) Integration</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Interactive &amp; Animated Slider Banner</li>\r\n	<li>8 Premium Stock Photos</li>\r\n	<li>Contact/Query Form</li>\r\n	<li>1 Landing Page Design</li>\r\n	<li>Newsletter Subscription (Optional)</li>\r\n	<li>2 Business Email Address</li>\r\n	<li>Social Media Integration (Facebook, Twitter, LinkedIn)</li>\r\n	<li>Google Friendly Sitemap</li>\r\n	<li>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>\r\n	<li>On-page SEO configuration</li>\r\n	<li>Parallax Scrolling</li>\r\n	<li>Fast Load Time</li>\r\n	<li>Security plugins</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>Cross Browser Compatible</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>How-to-use Training Manual for CMS</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Online Reservation/ Appointment/ Scheduling Tool</li>\r\n	<li>Online Payment Integration</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1401953370.price-icon-3.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:33:58'),
(4, 1, 'Corporate', 'corporate', '1,9945', '1,7945', 'admin', '<ul>\r\n	<li>Custom designed Homepage (5x concepts)</li>\r\n	<li>15 Custom designed Inner pages</li>\r\n	<li>Interactive and Dynamic Website Design</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Content Management System (CMS) Integration</li>\r\n	<li>Online Reservation/Appointment/Scheduling Tool</li>\r\n	<li>Striking Hover Effects</li>\r\n	<li>Interactive jQuery Slider Banner</li>\r\n	<li>12 Premium Stock Photos</li>\r\n	<li>8 Custom Banner Designs</li>\r\n	<li>1 Landing Page Design</li>\r\n	<li>Multi Lingual (Optional)</li>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Custom Dynamic Forms</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Social Media Integration (Facebook, Twitter, LinkedIn)</li>\r\n	<li>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>\r\n	<li>5 Business Email Address</li>\r\n	<li>Search Engine Indexing (Google, Yahoo, and Bing)</li>\r\n	<li>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc)</li>\r\n	<li>Google Friendly Sitemap</li>\r\n	<li>Parallax Scrolling</li>\r\n	<li>Fast Load Time</li>\r\n	<li>Security plugins</li>\r\n	<li>Google Analytic Installation</li>\r\n	<li>Google Webmaster Tool</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>Cross Browser Compatible</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>60 Days Free Maintenance (Post-launch support)</li>\r\n	<li>How-to-use Training Manual for CMS</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>30 Seconds Explainer Video</li>\r\n	<li>Live Chat/Bot Chat Integration</li>\r\n</ul>', NULL, NULL, 'uploads/package/_988377651.price-icon-4.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:37:26'),
(5, 1, 'Enterprise', 'enterprise', '3,144', '2844', 'admin', '<ul>\r\n	<li>Custom designed Homepage (6x concepts)</li>\r\n	<li>20 Custom designed Inner pages</li>\r\n	<li>Custom Made, Interactive, Dynamic &amp; User Friendly Design</li>\r\n	<li>Custom Wordpress/PHP Development</li>\r\n	<li>Customized CMS Integration</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Striking Hover Effects</li>\r\n	<li>Interactive jQuery Slider Banner</li>\r\n	<li>15 Premium Stock Photos</li>\r\n	<li>10 Custom Banner Designs</li>\r\n	<li>2 Landing Page Designs</li>\r\n	<li>Custom Dynamic Forms</li>\r\n	<li>Online Reservation/Appointment/Scheduling Tool</li>\r\n	<li>Online Payment Integration</li>\r\n	<li>Live Chat/Bot Chat Integration (Optional)</li>\r\n	<li>Multi Lingual</li>\r\n	<li>3rd Party API Integrations</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Downloadable items (eBooks, PDFs, Podcast, Videos)</li>\r\n	<li>Social Media Integration (Facebook, Twitter, LinkedIn)</li>\r\n	<li>Social Media Live Feeds Widget (Facebook, Instragram, Pinterest)</li>\r\n	<li>SEO friendly coding (Meta-tags, Meta Titles, Meta Description, Keywords, etc)</li>\r\n	<li>On-page SEO configuration</li>\r\n	<li>Search Engine Indexing (Google, Yahoo, and Bing)</li>\r\n	<li>Mailing List Plugin (Optional)</li>\r\n	<li>2 Years Domain Registration (Optional)</li>\r\n	<li>10 Business Email Address</li>\r\n	<li>Fast Load Time</li>\r\n	<li>Security plugins</li>\r\n	<li>Google Analytic Installation</li>\r\n	<li>Google Webmaster Tool</li>\r\n	<li>Google Friendly Sitemap</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>&nbsp;</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>90 Days Free Maintenance (Post-launch support)</li>\r\n	<li>How-to-use Training Manual for CMS</li>\r\n	<li>Industry Specified Team of Expert Designers and Developers</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Complete Brand Identity &amp;</li>\r\n	<li>30 Seconds Explainer Video</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1166249612.price-icon-5.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:40:42'),
(6, 1, 'Standard 2D Animation', NULL, '699', '0', 'admin', '<ul>\r\n	<li>30 Seconds Video</li>\r\n	<li>Professional Script Writing</li>\r\n	<li>Voice Over &amp; Sound Effects</li>\r\n	<li>Custom Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>5 Weeks Delivery</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money-Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_855855444.price-icon-1.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:45:53'),
(7, 1, 'Advance 2D Animation', 'advance-2d-animation', '1,299', '0', 'admin', '<ul>\r\n	<li>60 Seconds Video</li>\r\n	<li>Professional Script Writing</li>\r\n	<li>Voice Over &amp; Sound Effects</li>\r\n	<li>Custom Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>6 Weeks Delivery</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money-Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_907486963.price-icon-2.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:53:23'),
(8, 1, 'Advance Pro 2D Animation', 'advance-pro-2d-animation', '1,949', '0', 'admin', '<ul>\r\n	<li>120 Seconds Video</li>\r\n	<li>Professional Script Writing</li>\r\n	<li>Voice Over &amp; Sound Effects</li>\r\n	<li>Custom Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>7 Weeks Delivery</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money-Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_2070371813.price-icon-3.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 12:55:23'),
(9, 1, 'Premium 2D Animation', 'basic-logo', '2,949', '0', 'admin', '<ul>\r\n	<li>180 Seconds Video</li>\r\n	<li>Professional Script Writing</li>\r\n	<li>Voice Over &amp; Sound Effects</li>\r\n	<li>Custom Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>7 Weeks Delivery</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money-Back Guarantee *</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money-Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1000916820.price-icon-4.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:00:52'),
(10, 1, 'BASIC LOGO', 'basic-logo', '29', '0', 'admin', '<ul>\r\n	<li>Logo Design (1 concept)</li>\r\n	<li>2 Revision</li>\r\n	<li>Color Version</li>\r\n	<li>Black, White &amp; Gray Version</li>\r\n	<li>FINAL FILES FORMATS (PSD, PDF, JPEG, PNG)</li>\r\n	<li>Award Winning Design Team</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee*</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Complete source files delivery</li>\r\n	<li>Free NDA (optional)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1141374004.price-icon-1.png', 1, '0', 1, 0, '2021-12-08', '2021-12-10 19:29:41'),
(11, 1, 'IDEAL LOGO', 'ideal-logo', '69', '0', 'admin', '<ul>\r\n	<li>Logo Design (2x concepts)</li>\r\n	<li>5 Revision</li>\r\n	<li>Color Version</li>\r\n	<li>Black, White &amp; Gray Version</li>\r\n	<li>FINAL FILES FORMATS (PSD, PDF, JPEG, PNG)</li>\r\n	<li>Award Winning Design Team</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee*</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Complete source files delivery</li>\r\n	<li>Free NDA (optional)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_856392916.price-icon-2.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:09:54'),
(12, 1, 'STRIKING LOGO', 'ideal-logo', '124', '0', 'admin', '<ul>\r\n	<li>Logo Design (3x concepts)</li>\r\n	<li>10 Revision</li>\r\n	<li>Color Version</li>\r\n	<li>Black, White &amp; Gray Version</li>\r\n	<li>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>\r\n	<li>Award Winning Design Team</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee*</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Complete source files delivery</li>\r\n	<li>Free NDA (optional)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1538187515.price-icon-3.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:43:54'),
(13, 1, 'ILLUSTRATIVE LOGO', 'illustrative-logo', '179', '0', 'admin', '<ul>\r\n	<li>Logo Design (5x concepts)</li>\r\n	<li>Unlimited Revision</li>\r\n	<li>Color Version</li>\r\n	<li>Black, White &amp; Gray Version</li>\r\n	<li>Stationery Design (Business Cards, Letterhead, Envelope, etc.)</li>\r\n	<li>Social Media Pages Design (Facebook, Instagram, Twitter, etc.)</li>\r\n	<li>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>\r\n	<li>Award Winning Design Team</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee*</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Complete source files delivery</li>\r\n	<li>Free NDA (optional)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_971103596.price-icon-4.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:45:30'),
(14, 1, '3D LOGO', '3d-logo', '249', '0', 'admin', '<ul>\r\n	<li>3D Logo Design (2x concepts)</li>\r\n	<li>Unlimited Revision</li>\r\n	<li>Color Version</li>\r\n	<li>Black, White &amp; Gray Version</li>\r\n	<li>Stationery Design (Business Cards, Letterhead, Envelope, etc.)</li>\r\n	<li>Social Media Pages Design (Facebook, Instagram, Twitter, etc.)</li>\r\n	<li>FINAL FILES FORMATS (PSD, PDF, AI, JPEG, PNG)</li>\r\n	<li>Award Winning Design Team</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee*</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Complete source files delivery</li>\r\n	<li>Free NDA (optional)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1210852901.price-icon-5.png', 1, '0', 1, 0, '2021-12-08', '2021-12-09 15:02:10'),
(15, 1, 'SEO Startup', 'seo-startup', '899', '449', 'admin', '<ul>\r\n	<li>5 Keywords</li>\r\n	<li>Guaranteed Ranking on Google</li>\r\n	<li>Off-site Optimization</li>\r\n	<li>Link Building</li>\r\n	<li>Social Bookmarking</li>\r\n	<li>Basic Analytical Report</li>\r\n	<li>In-depth Site Analysis</li>\r\n	<li>Content Duplicity Check</li>\r\n	<li>Initial Backlinks analysis</li>\r\n	<li>Google Penalty Check</li>\r\n	<li>Mobile Usability Check</li>\r\n	<li>Competition Analysis</li>\r\n	<li>Keyword Research</li>\r\n	<li>Informational Content Writing &amp; Sharing (2 - Per Month)</li>\r\n	<li>Blog Writing (1 - Per Month)</li>\r\n	<li>Press Release Social Bookmarking (5 - Per Month)</li>\r\n	<li>NAP Syndication</li>\r\n	<li>Google My Business / Bing Local Listing</li>\r\n	<li>Citation Building</li>\r\n	<li>Classified Submissions</li>\r\n	<li>Google Analytics Analysis Report</li>\r\n	<li>SEO Reports</li>\r\n	<li>Search Engine Rank Report</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>Monthly Action Plan</li>\r\n	<li>Activity Report</li>\r\n</ul>', NULL, NULL, 'uploads/package/_616023716.price-icon-1.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:50:32'),
(16, 1, 'Identity SEO Package', 'identity-seo-package', '1699', '849', 'admin', '<ul>\r\n	<li>10 Keywords</li>\r\n	<li>Guaranteed Ranking on Google</li>\r\n	<li>Off-site Optimization</li>\r\n	<li>On-site Optimization</li>\r\n	<li>Link Building</li>\r\n	<li>Social Bookmarking</li>\r\n	<li>In-depth Site Analysis</li>\r\n	<li>Content Duplicacy Check</li>\r\n	<li>Initial Backlinks analysis</li>\r\n	<li>Google Penalty Check</li>\r\n	<li>Mobile Usability Check</li>\r\n	<li>Competition Analysis</li>\r\n	<li>Keyword Research</li>\r\n	<li>Title &amp; Meta Tags Optimization</li>\r\n	<li>Content Optimization</li>\r\n	<li>Page Speed Analysis &amp; Optimization</li>\r\n	<li>HTML Code Cleanup &amp; Optimization</li>\r\n	<li>Internal Link Structuring &amp; Optimization</li>\r\n	<li>Pages H tags Optimization</li>\r\n	<li>Canonicalization/301 Redirect</li>\r\n	<li>Website Page Load Optimization</li>\r\n	<li>Schema Markup Implementation</li>\r\n	<li>Image &amp; Hyperlink Optimization</li>\r\n	<li>Robots.txt Creation/Analysis</li>\r\n	<li>Blog Writing (2 - Per Month)</li>\r\n	<li>Informational Content Writing &amp; Sharing (1 Per Month)</li>\r\n	<li>Press Release Writing &amp; Distribution</li>\r\n	<li>Press Release Social Bookmarking</li>\r\n	<li>Google Webmaster Tools Setup</li>\r\n	<li>Google Analytics Setup &amp; Integration</li>\r\n</ul>', NULL, NULL, 'uploads/package/_291922275.price-icon-2.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:55:23'),
(17, 1, 'Elite SEO Packages', 'elite-seo-packages', '3099', '1,549', 'admin', '<ul>\r\n	<li>20 Keywords</li>\r\n	<li>Guaranteed Ranking on Google</li>\r\n	<li>Off-site Optimization</li>\r\n	<li>On-site Optimization</li>\r\n	<li>Link Building</li>\r\n	<li>Social Bookmarking</li>\r\n	<li>In-depth Site Analysis</li>\r\n	<li>Content Duplicacy Check</li>\r\n	<li>Initial Backlinks analysis</li>\r\n	<li>Google Penalty Check</li>\r\n	<li>Mobile Usability Check</li>\r\n	<li>Competition Analysis</li>\r\n	<li>Keyword Research</li>\r\n	<li>Page Speed Analysis &amp; Optimization</li>\r\n	<li>Title &amp; Meta Tags Optimization</li>\r\n	<li>Content Optimization</li>\r\n	<li>HTML Code Cleanup &amp; Optimization</li>\r\n	<li>Internal Link Structuring &amp; Optimization</li>\r\n	<li>Pages H tags Optimization</li>\r\n	<li>Canonicalization/301 Redirect</li>\r\n	<li>Website Page Load Optimization</li>\r\n	<li>Robots.txt Creation/Analysis</li>\r\n	<li>Press Release Writing &amp; Distribution</li>\r\n	<li>Press Release Social Bookmarking</li>\r\n	<li>Schema Markup Implementation</li>\r\n	<li>Image &amp; Hyperlink Optimization</li>\r\n	<li>Google Webmaster Tools Setup</li>\r\n	<li>Google Analytics Setup &amp; Integration</li>\r\n	<li>Blog Writing (2 - Per Month)</li>\r\n	<li>Informational Content Writing &amp; Sharing (1 Per Month)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1599957585.price-icon-3.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:58:08'),
(18, 1, 'Professional SEO Packages', 'professional-seo-packages', '4298', '2,149', 'admin', '<ul>\r\n	<li>30 Keywords</li>\r\n	<li>Guaranteed Ranking on Google</li>\r\n	<li>Off-site Optimization</li>\r\n	<li>On-site Optimization</li>\r\n	<li>Link Building</li>\r\n	<li>Social Bookmarking</li>\r\n	<li>In-depth Site Analysis</li>\r\n	<li>Content Duplicacy Check</li>\r\n	<li>Initial Backlinks analysis</li>\r\n	<li>Google Penalty Check</li>\r\n	<li>Mobile Usability Check</li>\r\n	<li>Competition Analysis</li>\r\n	<li>Keyword Research</li>\r\n	<li>Page Speed Analysis &amp; Optimization</li>\r\n	<li>Title &amp; Meta Tags Optimization</li>\r\n	<li>Content Optimization</li>\r\n	<li>HTML Code Cleanup &amp; Optimization</li>\r\n	<li>Internal Link Structuring &amp; Optimization</li>\r\n	<li>Pages H tags Optimization</li>\r\n	<li>Canonicalization/301 Redirect</li>\r\n	<li>Website Page Load Optimization</li>\r\n	<li>Robots.txt Creation/Analysis</li>\r\n	<li>Press Release Writing &amp; Distribution</li>\r\n	<li>Press Release Social Bookmarking</li>\r\n	<li>Schema Markup Implementation</li>\r\n	<li>Image &amp; Hyperlink Optimization</li>\r\n	<li>Google Webmaster Tools Setup</li>\r\n	<li>Google Analytics Setup &amp; Integration</li>\r\n	<li>Blog Writing (2 - Per Month)</li>\r\n	<li>Informational Content Writing &amp; Sharing (1 Per Month)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_218422392.price-icon-4.png', 1, '0', 1, 0, '2021-12-08', '2021-12-08 13:59:58'),
(19, 1, 'SMM Startup One Time', 'smm-startup-one-time', '850', '280', 'admin', '<ul>\r\n	<li>3 Social Media Channels (Facebook / Twitter / Instagram)</li>\r\n	<li>Social media account setup</li>\r\n	<li>1 Post Design</li>\r\n	<li>1 Cover Banner</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1361575795.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:05:03'),
(20, 1, 'SMM Basic 3 Months Plan', 'smm-basic-3-months-plan', '2100', '650', 'admin', '<ul>\r\n	<li>2 Social Media Channels (Facebook / Instagram)</li>\r\n	<li>Social media account setup</li>\r\n	<li>Complete Account Management</li>\r\n	<li>3 Posts per week (per network)</li>\r\n	<li>Custom Editorial calendar (Review before publishing)</li>\r\n	<li>Dedicated account manager</li>\r\n	<li>Dedicated Budget For Paid Advertising</li>\r\n	<li><strong>$ 2 Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_192930917.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:11:06'),
(21, 1, 'SMM Basic 6 Months Plan', 'smm-plus-6-months-plan', '4100', '1300', 'admin', '<ul>\r\n	<li>4 Social Media Channels (Facebook / Twitter / Pinterest / Instagram)</li>\r\n	<li>Social media account setup</li>\r\n	<li>Complete Account Management 3 Posts per week (per network)</li>\r\n	<li>Custom Editorial calendar (Review before publishing)</li>\r\n	<li>Call to Action Integration</li>\r\n	<li>End of Term Report</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>Dedicated Budget For Paid Advertising</li>\r\n	<li><strong>$ 2 Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_999968040.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:16:59'),
(22, 1, 'SMM Plus 6 Months Plan', 'smm-plus-6-months-plan', '6699', '2100', 'admin', '<ul>\r\n	<li>6 Social Media Channels (Facebook / Twitter / Pinterest/ Instagram / Youtube / LinkedIn)</li>\r\n	<li>Social media account setup</li>\r\n	<li>Complete Account Management</li>\r\n	<li>4 Posts per week (per network)</li>\r\n	<li>1 GIF post per Month</li>\r\n	<li>Custom Editorial calendar (Review before publishing)(Facebook)</li>\r\n	<li>Call to Action Integration</li>\r\n	<li>1 Stock Video Cover Banner</li>\r\n	<li>Monthly Analytic Report</li>\r\n	<li>Direct Access To Social Media Team</li>\r\n	<li>Dedicated Budget For Paid Advertising</li>\r\n	<li><strong>$ 2 Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_105646494.price-icon-4.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:17:55'),
(23, 1, 'ORM Basic', 'orm-basic', '550', '180', 'admin', '<ul>\r\n	<li><strong>*&nbsp;1 Month</strong></li>\r\n	<li>Brand Audit Report &amp; suggestions</li>\r\n	<li>3 Accounts Setup (Trustpilot, Bark, Sitejabber)</li>\r\n	<li><strong>$ Per Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_138293190.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:22:06'),
(24, 1, 'ORM Value', 'orm-value', '1180', '369', 'admin', '<ul>\r\n	<li><strong>*3 Months Plan</strong></li>\r\n	<li>Brand Audit Report &amp; suggestions</li>\r\n	<li>3 Accounts Setup</li>\r\n	<li>Keywords / Phrases</li>\r\n	<li>Top 10 Search Term Monitoring</li>\r\n	<li>Review Management</li>\r\n	<li>1 Article Submissions</li>\r\n	<li>20 Bookmarking</li>\r\n	<li>1 Blog setup</li>\r\n	<li>2 Blog Posts /Month</li>\r\n	<li>Business Listings</li>\r\n	<li>15 Reviews Organic</li>\r\n	<li>5 Reviews Paid</li>\r\n	<li>Image Promotion</li>\r\n	<li>Monthly Report</li>\r\n	<li><strong>$ Per Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_1871967674.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:25:29'),
(25, 1, 'ORM Standard', 'orm-standard', '2099', '699', 'admin', '<ul>\r\n	<li><strong>*3 Months Plan</strong></li>\r\n	<li>Brand Audit Report &amp; suggestions</li>\r\n	<li>5 Accounts Setup</li>\r\n	<li>2 Keywords / Phrases</li>\r\n	<li>Top 10 Search Term Monitoring</li>\r\n	<li>Review Management</li>\r\n	<li>3 Article Submissions</li>\r\n	<li>PR Submission</li>\r\n	<li>30 Bookmarking</li>\r\n	<li>1 Blog setup</li>\r\n	<li>4 Blog Posts /Month</li>\r\n	<li>Business Listings</li>\r\n	<li>25 Reviews Organic</li>\r\n	<li>10 Reviews Paid</li>\r\n	<li>Image Promotion</li>\r\n	<li>Monthly Report</li>\r\n	<li><strong>$ Per Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_1430001836.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:27:18'),
(26, 1, 'ORM Premium', 'orm-premium', '2099', '999', 'admin', '<ul>\r\n	<li><strong>*3 Months Plan</strong></li>\r\n	<li>Brand Audit Report &amp; suggestions</li>\r\n	<li>5 Accounts Setup</li>\r\n	<li>3 Keywords / Phrases</li>\r\n	<li>Top 20 Search Term Monitoring</li>\r\n	<li>Review Management</li>\r\n	<li>4 Article Submissions</li>\r\n	<li>PR Submission</li>\r\n	<li>50 Bookmarking</li>\r\n	<li>2 Blog setup</li>\r\n	<li>6 Blog Posts /Month</li>\r\n	<li>Business Listings</li>\r\n	<li>35 Reviews Organic</li>\r\n	<li>15 Reviews Paid</li>\r\n	<li>Image Promotion</li>\r\n	<li>Video making &amp; sharing</li>\r\n	<li>PPT creation &amp; Sharing</li>\r\n	<li>PDF creation &amp; sharing</li>\r\n	<li>Infographics Submission</li>\r\n	<li>Monthly Report</li>\r\n	<li>Website Widget</li>\r\n	<li>Dedicated Support</li>\r\n	<li><strong>$ Per Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_410090618.price-icon-4.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:31:16'),
(27, 1, 'ORM Business', 'orm-business', '3996', '1299', 'admin', '<ul>\r\n	<li><strong>*3 Months Plan</strong></li>\r\n	<li>Brand Audit Report &amp; suggestions</li>\r\n	<li>5 Accounts Setup</li>\r\n	<li>3 Keywords / Phrases</li>\r\n	<li>Top 20 Search Term Monitoring</li>\r\n	<li>Review Management</li>\r\n	<li>4 Article Submissions</li>\r\n	<li>PR Submission</li>\r\n	<li>50 Bookmarking</li>\r\n	<li>2 Blog setup</li>\r\n	<li>6 Blog Posts /Month</li>\r\n	<li>Business Listings</li>\r\n	<li>35 Reviews Organic</li>\r\n	<li>15 Reviews Paid</li>\r\n	<li>Image Promotion</li>\r\n	<li>Video making &amp; sharing</li>\r\n	<li>PPT creation &amp; Sharing</li>\r\n	<li>PDF creation &amp; sharing</li>\r\n	<li>Infographics Submission</li>\r\n	<li>Monthly Report</li>\r\n	<li>Website Widget</li>\r\n	<li>Dedicated Support</li>\r\n	<li><strong>$ Per Month</strong></li>\r\n</ul>', NULL, NULL, 'uploads/package/_753247545.price-icon-5.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 14:33:09'),
(28, 1, 'Basic Website Package', 'basic-website-package', '1165', '199', 'admin', '<ul>\r\n	<li>2 Stock Photos</li>\r\n	<li>3 Page Website</li>\r\n	<li>3 Banner Design</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>FREE Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Mobile Responsive will be Additional $99*</li>\r\n	<li>CMS will be Additional $149*</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1852193558.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:18:12'),
(29, 1, 'Startup Website Package', 'startup-website-package', '1496', '399', 'admin', '<ul>\r\n	<li>6 Unique Pages Website</li>\r\n	<li>5 Stock images</li>\r\n	<li>5 Banner Designs</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>FREE Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Mobile Responsive will be Additional $99*</li>\r\n	<li>CMS will be Additional $149*</li>\r\n</ul>', NULL, NULL, 'uploads/package/_737839505.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:22:17'),
(30, 1, 'Professional Website Package', 'professional-website-package', '2163', '699', 'admin', '<ul>\r\n	<li>Upto 10 Unique Pages Website</li>\r\n	<li>Conceptual and Dynamic Website</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Online Reservation/Appointment Tool (Optional)</li>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Custom Forms</li>\r\n	<li>Lead Capturing Forms (Optional)</li>\r\n	<li>Striking Hover Effects</li>\r\n	<li>Newsletter Subscription (Optional)</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Integration</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>6 Stock Photos</li>\r\n	<li>3 Unique Banner Design</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1575382954.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:24:11'),
(31, 1, 'Elite Website Package', 'elite-website-package', '3,160', '999', 'admin', '<ul>\r\n	<li>15 Pages Website</li>\r\n	<li>Custom Made, Interactive, Dynamic &amp; High End Design</li>\r\n	<li>Custom WP (or) Custom PHP Development</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>Up to 10 Custom Made Banner Designs</li>\r\n	<li>8 Stock Images</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Special Hoover Effects</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Multi Lingual (Optional)</li>\r\n	<li>Custom Dynamic Forms (Optional)</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Search Bar</li>\r\n	<li>Live Feeds of Social Networks integration (Optional)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>FREE 5 Years Domain Name</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Industry Specified Team of Expert Designers and Developers</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1099706023.price-icon-4.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:37:26'),
(32, 1, 'Corporate Website Package', 'corporate-website-package', '4,830', '2,499', 'admin', '<ul>\r\n	<li>15 to 20 Pages Website</li>\r\n	<li>Custom Made, Interactive, Dynamic &amp; High End Design</li>\r\n	<li>Custom WP (or) Custom PHP Development</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>Up to 10 Custom Made Banner Designs</li>\r\n	<li>10 Stock Images</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Special Hoover Effects</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Multi Lingual (Optional)</li>\r\n	<li>Custom Dynamic Forms (Optional)</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Search Bar</li>\r\n	<li>Live Feeds of Social Networks integration (Optional)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>15 Seconds 2D Explainer Video</li>\r\n	<li>Voice - Over &amp; Sound Effects</li>\r\n	<li>Professional Script Writing</li>\r\n	<li>Storyboard</li>\r\n	<li>SEO Meta Tags</li>\r\n	<li>FREE 5 Years Domain Name</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Industry Specified Team of Expert Designers and Developers</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_462044494.price-icon-5.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:40:29'),
(33, 1, 'Business Website Package', 'business-website-package', '6,830', '4,999', 'admin', '<ul>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Custom Content Management System (CMS)</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Process Automation Tools</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Plugins Integration</li>\r\n	<li>Upto 40 Stock images</li>\r\n	<li>10 Unique Banner Designs</li>\r\n	<li>JQuery Slider</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>FREE 5 Years Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>Money Back Guarantee</li>\r\n	<li><strong>Key features</strong></li>\r\n	<li>Automated Course Creation</li>\r\n	<li>Video Conferencing</li>\r\n	<li>Skills/Certification Tracking</li>\r\n	<li>Mobile Learning</li>\r\n	<li>Asynchronous Learning</li>\r\n	<li>CRM Features</li>\r\n	<li>Gamification</li>\r\n	<li>Social Learning/Message Boards</li>\r\n	<li>Motivational Triggers</li>\r\n	<li>Forums And Webinars</li>\r\n	<li>E-commerce And Subscriptions</li>\r\n	<li>Online Course Booking</li>\r\n	<li>Excellent Reporting</li>\r\n	<li>Invoicing Integration</li>\r\n	<li>Financial Integrations</li>\r\n	<li>Student Information management</li>\r\n	<li>Automated communications</li>\r\n	<li>Learning Management System</li>\r\n	<li>Quick And Easy Course Scheduling</li>\r\n	<li>Reporting And Data Analysis</li>\r\n	<li>Assessment Management &amp; Live Feedback</li>\r\n	<li>Gradebooks</li>\r\n	<li>Quick User Integration</li>\r\n	<li>Easy Payment Methods</li>\r\n	<li>Online Communities &amp; Social Engagement</li>\r\n	<li>Curation of Resources And Adding Own Resources</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1956501448.price-icon-6.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:41:53'),
(34, 1, 'Basic E-Commerce Package', 'basic-e-commerce-package', '999', '599', 'admin', '<ul>\r\n	<li>Upto 15 Unique Pages Website</li>\r\n	<li>Conceptual and Dynamic Website</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Easy Product Search</li>\r\n	<li>Product Reviews</li>\r\n	<li>Up To 50 Products</li>\r\n	<li>Up To 7 Categories</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Module Integration</li>\r\n	<li>Sales &amp; Inventory Management</li>\r\n	<li>Jquery Slider</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>FREE 1 Years Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_432586286.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:43:47'),
(35, 1, 'Startup E-Commerce Package', 'startup-e-commerce-package', '1999', '999', 'admin', '<ul>\r\n	<li>Upto 15 Unique Pages Website</li>\r\n	<li>Conceptual and Dynamic Website</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Easy Product Search</li>\r\n	<li>Product Reviews</li>\r\n	<li>Up To 100 Products</li>\r\n	<li>Up To 7 Categories</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Module Integration</li>\r\n	<li>Sales &amp; Inventory Management</li>\r\n	<li>Jquery Slider</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>FREE 1 Years Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_446103772.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:45:35'),
(36, 1, 'Professional E-Commerce Package', 'professional-e-commerce-package', '3599', '1,799', 'admin', '<ul>\r\n	<li>Unlimited Unique Pages Website</li>\r\n	<li>Conceptual and Dynamic Website</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Easy Product Search</li>\r\n	<li>Product Reviews</li>\r\n	<li>Unlimited Products</li>\r\n	<li>Unlimited Categories</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Module Integration</li>\r\n	<li>Sales &amp; Inventory Management</li>\r\n	<li>Jquery Slider</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>FREE 3 Years Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Instagram Page Design</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Accounts Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_461846021.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:46:39'),
(37, 1, 'Elite E-Commerce Package', 'elite-e-commerce-package', '7388', '3,694', 'admin', '<ul>\r\n	<li>UNLIMITED Logo Design Concepts</li>\r\n	<li>By 6 Award Winning Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>UNLIMITED Revisions</li>\r\n	<li>Print Media</li>\r\n	<li>Stationary Design (BusinessCard,Letterhead &amp; Envelope)</li>\r\n	<li>Invoice Design, Email Signature</li>\r\n	<li>Bi-Fold Brochure (OR) 2 Sided Flyer Design</li>\r\n	<li>Product Catalog Design</li>\r\n	<li>Sign age Design (OR) Label Design</li>\r\n	<li>T-Shirt Design (OR) Car Wrap Design</li>\r\n	<li>Website</li>\r\n	<li>E-Commerce Store Design</li>\r\n	<li>Product Detail Page Design</li>\r\n	<li>Unique Banner Slider</li>\r\n	<li>Featured Products Showcase</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Unlimited Products</li>\r\n	<li>Unlimited Categories</li>\r\n	<li>Product Rating &amp; Reviews</li>\r\n	<li>Easy Product Search</li>\r\n	<li>Payment Gateway Integration</li>\r\n	<li>Multi-currency Support</li>\r\n	<li>Content Management System</li>\r\n	<li>Cutomer Log-in Area</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Social Media Plugins Integration</li>\r\n	<li>Tell a Friend Feature</li>\r\n	<li>Social Media Pages</li>\r\n	<li>Facebook , Twitter, YouTube, Google+ &amp; Pinterest Page Designs</li>\r\n	<li>Value Added Services</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>All Final File Formats</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1969471848.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:47:34'),
(38, 1, 'Custom E Commerce Marketplace Package', 'custom-e-commerce-marketplace-package', '13999', '6,999', 'admin', '<ul>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Plugins Integration</li>\r\n	<li>Advanced Ecommerce Marketplace Features</li>\r\n	<li>Inventory Management</li>\r\n	<li>CRM (Customer Relation Management System)</li>\r\n	<li>Advanced Admin Features 2.0</li>\r\n	<li>Advanced User Features</li>\r\n	<li>Dashboard and Analytics</li>\r\n	<li>Seller/Shipping Distribution</li>\r\n	<li>Seller Profile Management</li>\r\n	<li>User Profile Management</li>\r\n	<li>General Configuration Features</li>\r\n	<li>Revenue Models</li>\r\n	<li>Featured products</li>\r\n	<li>Google advertisements</li>\r\n	<li>Flash sales Module</li>\r\n	<li>Loyalty Rewards Module</li>\r\n	<li>Upto 40 Stock images</li>\r\n	<li>10 Unique Banner Designs</li>\r\n	<li>JQuery Slider</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1918258685.price-icon-4.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:48:40'),
(39, 1, 'Advanced E-Commerce Packages', 'advanced-e-commerce-packages', '19999', '9,999', 'admin', '<ul>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Custom Content Management System (CMS)</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Process Automation Tools</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Plugins Integration</li>\r\n	<li>Upto 40 Stock images</li>\r\n	<li>10 Unique Banner Designs</li>\r\n	<li>JQuery Slider</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>FREE 5 Years Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>Money Back Guarantee</li>\r\n	<li><strong>Automated Inventory/Shipping/Supplier Module:</strong></li>\r\n	<li>Manage thousands to millions of inventory with ease and check stock levels in real-time. Receive low inventory notifications and generate purchase orders to replenish your stock.</li>\r\n	<li>Suppliers Integration (API NEEDED)</li>\r\n	<li>Shipper Integration (API NEEDED)</li>\r\n	<li>Order management</li>\r\n	<li>LOT numbers and expire date tracking</li>\r\n	<li>Transfer stock between warehouses (If Warehouse - API NEEDED)</li>\r\n	<li>Receive stock into a specific warehouse (If Warehouse - API NEEDED)</li>\r\n	<li>Fulfill orders from a particular warehouse (If Warehouse - API NEEDED)</li>\r\n	<li>Stock Management</li>\r\n	<li>Actionable Insights</li>\r\n	<li>Real- Time Visibility</li>\r\n	<li>Inventory Opportunities</li>\r\n	<li><strong>Advanced Features: (API Needed For Suppliers/Warehouse)</strong></li>\r\n	<li>Speak to suppliers during trivial conversations.</li>\r\n	<li>Set and send actions to suppliers regarding governance and compliance materials. Place purchasing requests.</li>\r\n	<li>Research and answer internal questions regarding procurement functionalities or a supplier/supplier set.</li>\r\n	<li>Receiving/filing/documentation of invoices and payments/order requests</li>\r\n	<li>Machine Learning (ML) for Supply Chain Planning (SCP)</li>\r\n	<li>Machine Learning for Warehouse Management</li>\r\n	<li>Natural Language Processing (NLP) for Data Cleansing and Building Data Robustness</li>\r\n	<li><strong>Automated Invoices &amp; Estimates</strong></li>\r\n	<li>Create beautiful, professional invoices &amp; estimates in just a few seconds and then instantly email them as PDF&#39;s directly to your customers or prospects.</li>\r\n	<li>Automated Split invoicing</li>\r\n	<li>Automated Combine invoices</li>\r\n	<li>Invoice templates</li>\r\n	<li><strong>Automated Barcode Scanning</strong></li>\r\n	<li>Scan inventory into your orders, generate barcodes for your documents, and search for inventory or documents by scanning barcodes.</li>\r\n	<li><strong>Locations and Zones</strong></li>\r\n	<li>Have multiple warehouses, offices, or retail stores? No problem. Easily track where all your inventory is by organizing everything into locations and zones. Organize inventory items using custom attributes such as size, color, and location. View how many you have globally or at each location.</li>\r\n	<li><strong>Customer Accounts</strong></li>\r\n	<li>Performance and analytics</li>\r\n	<li>Customization of Personal Details</li>\r\n	<li>Process management</li>\r\n	<li>Sales Automation</li>\r\n	<li>Team Collaboration</li>\r\n	<li>Marketing Automation</li>\r\n	<li>Security</li>\r\n	<li>Integrations</li>\r\n	<li>Mobile Notifications</li>\r\n	<li>Sales Reports</li>\r\n	<li>Trend Analytics</li>\r\n	<li>Forecasting</li>\r\n	<li>Territory Management</li>\r\n	<li>Account Management</li>\r\n	<li>Event Integration</li>\r\n	<li>Advanced Data Security</li>\r\n	<li><strong>Purchase Orders</strong></li>\r\n	<li>With integrated purchase orders, you can easily replenish your inventory levels by ordering more stock and even track when those new items will arrive.</li>\r\n	<li>Partial orders fulfill</li>\r\n	<li>Backordering</li>\r\n	<li><strong>Financial Reports</strong></li>\r\n	<li>Generate extremely detailed reports for your inventory, sales and services. Filter your reports by date-range and category to see what&#39;s making you the most money.</li>\r\n</ul>', NULL, NULL, 'uploads/package/_120587728.price-icon-5.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:49:49'),
(40, 1, 'Custom CRM/ERP Portal Website Package', 'custom-crm-erp-portal-website-package', '29999', '14,999', 'admin', '<ul>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>CRM (Customer Relation Management System)</li>\r\n	<li>Performance and analytics</li>\r\n	<li>Customization of Personal Details</li>\r\n	<li>Process management</li>\r\n	<li>Sales Automation</li>\r\n	<li>Team Collaboration</li>\r\n	<li>Marketing Automation</li>\r\n	<li>Security</li>\r\n	<li>Integrations</li>\r\n	<li>Mobile Notifications</li>\r\n	<li>Sales Reports</li>\r\n	<li>Trend Analytics</li>\r\n	<li>Forecasting</li>\r\n	<li>Territory Management</li>\r\n	<li>Account Management</li>\r\n	<li>Event Integration</li>\r\n	<li>Advanced Data Security</li>\r\n	<li>Opportunity Management</li>\r\n	<li>Sales Forecasting</li>\r\n	<li>Call/Video Logging</li>\r\n	<li>Quotes</li>\r\n	<li>Contracts</li>\r\n	<li>Document Library</li>\r\n	<li>Case Management</li>\r\n	<li>Analytics and Dashboards</li>\r\n	<li>Lead Management</li>\r\n	<li>Resource Management</li>\r\n	<li>Analytics</li>\r\n	<li>Web Intelligence</li>\r\n	<li>Automated Emails, Invoices &amp; Estimates</li>\r\n	<li>Automated Split invoicing</li>\r\n	<li>Automated Combine invoices</li>\r\n	<li>Invoice templates</li>\r\n	<li>Financial Reports</li>\r\n	<li>Generate extremely detailed reports for your sales and services. Filter your reports by date-range and category to see what&#39;s making you the most money.</li>\r\n	<li>Generate automated sales reports</li>\r\n	<li>Core Modules</li>\r\n	<li>Human Resources</li>\r\n	<li>Integration</li>\r\n	<li>Business Intelligence</li>\r\n	<li>Sales/Marketing</li>\r\n	<li>Finance</li>\r\n	<li>Core Features</li>\r\n	<li>Reporting</li>\r\n	<li>Accounting</li>\r\n	<li>Tracking and Visibility</li>\r\n	<li>Centralized Modules</li>\r\n	<li>ERP Database</li>\r\n	<li>Human Resources Management</li>\r\n	<li>Business Process Management</li>\r\n	<li>Enterprise Analytics</li>\r\n	<li>Business Intelligence</li>\r\n	<li>Centralized Modules</li>\r\n	<li>ERP Database</li>\r\n	<li>Integrations</li>\r\n	<li>If (Manufacturing) (Optional)</li>\r\n	<li>Accounting</li>\r\n	<li>Distribution</li>\r\n	<li>Business Intelligence</li>\r\n	<li>Insights</li>\r\n	<li>Standardization</li>\r\n	<li>Procurement</li>\r\n	<li>Reporting and Analytics</li>\r\n	<li>Forecasting</li>\r\n	<li>Projection</li>\r\n	<li>Enterprise-wide integration</li>\r\n	<li>Real-Time Operations</li>\r\n	<li>Problem definition</li>\r\n	<li>Description of the program&rsquo;s objectives and scope</li>\r\n	<li>Assumptions</li>\r\n	<li>Implementation costs</li>\r\n	<li>Implementation schedule</li>\r\n	<li>Development and operational risks</li>\r\n	<li>Projected benefits</li>\r\n	<li>Team Members</li>\r\n	<li>Contracts</li>\r\n	<li>Infrastructure Upgrades</li>\r\n	<li>Create work plans and timelines</li>\r\n	<li>Analyze gaps</li>\r\n	<li>Configure parameters</li>\r\n	<li>Migrate data</li>\r\n	<li>Test system</li>\r\n	<li>Document system</li>\r\n	<li>Advanced Admin Features 2.0</li>\r\n	<li>User Signup/Login Functionalities</li>\r\n	<li>Advanced User Features</li>\r\n	<li>User Profile Management</li>\r\n	<li>General Configuration Features</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_517510850.price-icon-6.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:51:01');
INSERT INTO `package` (`id`, `user_id`, `name`, `slug`, `price`, `discount_price`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(41, 1, 'CUSTOMIZED WEB PORTAL', 'customized-web-portal', '13999', '6,999', 'admin', '<ul>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>CRM (Customer Relation Management System)</li>\r\n	<li>Performance and analytics</li>\r\n	<li>Customization of Personal Details</li>\r\n	<li>Process management</li>\r\n	<li>Sales Automation</li>\r\n	<li>Team Collaboration</li>\r\n	<li>Marketing Automation</li>\r\n	<li>Security</li>\r\n	<li>Integrations</li>\r\n	<li>Sales Reports</li>\r\n	<li>Trend Analytics</li>\r\n	<li>Forecasting</li>\r\n	<li>Territory Management</li>\r\n	<li>Account Management</li>\r\n	<li>Event Integration</li>\r\n	<li>Advanced Data Security</li>\r\n	<li>Account Management</li>\r\n	<li>Opportunity Management</li>\r\n	<li>Sales Forecasting</li>\r\n	<li>Quotes</li>\r\n	<li>Contracts</li>\r\n	<li>Document Library</li>\r\n	<li>Case Management</li>\r\n	<li>Analytics and Dashboards</li>\r\n	<li>Lead Management</li>\r\n	<li>Resource Management</li>\r\n	<li>Analytics</li>\r\n	<li>Web Intelligence</li>\r\n	<li>Automated Emails, Invoices &amp; Estimates</li>\r\n	<li>Automated Split invoicing</li>\r\n	<li>Automated Combine invoices</li>\r\n	<li>Invoice templates</li>\r\n	<li>Financial Reports</li>\r\n	<li>Generate automated sales reports</li>\r\n	<li>Core Features</li>\r\n	<li>Reporting</li>\r\n	<li>Accounting</li>\r\n	<li>Tracking and Visibility</li>\r\n	<li>Centralized Modules</li>\r\n	<li>Human Resources Management</li>\r\n	<li>Business Process Management</li>\r\n	<li>Enterprise Analytics</li>\r\n	<li>Business Intelligence</li>\r\n	<li>Centralized Modules</li>\r\n	<li>Accounting</li>\r\n	<li>Distribution</li>\r\n	<li>Business Intelligence</li>\r\n	<li>Insights</li>\r\n	<li>Standardization</li>\r\n	<li>Procurement</li>\r\n	<li>Reporting and Analytics</li>\r\n	<li>Projection</li>\r\n	<li>Enterprise-wide integration</li>\r\n	<li>Real-Time Operations</li>\r\n	<li>Problem definition</li>\r\n	<li>Description of the program&rsquo;s objectives and scope</li>\r\n	<li>Assumptions</li>\r\n	<li>Implementation costs</li>\r\n	<li>Implementation schedule</li>\r\n	<li>Development and operational risks</li>\r\n	<li>Projected benefits</li>\r\n	<li>Team Members</li>\r\n	<li>Contracts</li>\r\n	<li>Infrastructure Upgrades</li>\r\n	<li>Create work plans and timelines</li>\r\n	<li>Analyze gaps</li>\r\n	<li>Configure parameters</li>\r\n	<li>Migrate data</li>\r\n	<li>Test system</li>\r\n	<li>Document system</li>\r\n	<li>Online Payment Solutions (optional)</li>\r\n	<li>Advanced Admin Features 2.0</li>\r\n	<li>User Signup/Login Functionalities</li>\r\n	<li>Advanced User Features</li>\r\n	<li>User Profile Management</li>\r\n	<li>General Configuration Features</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_332764069.price-icon-6.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 16:52:15'),
(42, 1, 'Startup Collateral Packages', 'startup-collateral-packages-', '99', '49', 'admin', '<ul>\r\n	<li>2 Stationery Design Set</li>\r\n	<li>FREE Fax Template</li>\r\n	<li>Print Ready Formats</li>\r\n	<li>UNLIMITED Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_125526083.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 22:06:24'),
(43, 1, 'Collateral Classic Packages', 'collateral-classic-packages', '259', '129', 'admin', '<ul>\r\n	<li>2 Stationery Design Set</li>\r\n	<li>UNLIMITED Revisions</li>\r\n	<li>Flyer Design</li>\r\n	<li>Brochure Design (Bi-fold/Tri-fold)</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1250464.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:02:16'),
(44, 1, 'Premium Collateral Packages', 'premium-collateral-packages', '199', '399', 'admin', '<ul>\r\n	<li>2 Stationery Design Set</li>\r\n	<li>Packaging Design</li>\r\n	<li>UNLIMITED Revisions</li>\r\n	<li>T-Shirt Design</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_605539970.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:03:14'),
(45, 1, 'Unlimited Collateral Packages', 'unlimited-collateral-packages', '499', '199', 'admin', '<ul>\r\n	<li>2 Stationery Design Set</li>\r\n	<li>Menu Card Design</li>\r\n	<li>T-Shirt Design</li>\r\n	<li>1 Banner Design</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_799634539.price-icon-4.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:04:15'),
(46, 1, 'Complete Branding Solution', 'complete-branding-solution', '1399', '994', 'admin', '<ul>\r\n	<li>Unlimited Custom Logo Design Concepts</li>\r\n	<li>6 Dedicated Designers</li>\r\n	<li>UNLIMITED Pages Website</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Icon Design</li>\r\n	<li>Business Card, Letterhead, Envelope</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>5 Stock Photos + 3 Banner Designs</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1842769576.price-icon-5.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:05:35'),
(47, 1, 'Basic', 'basic', '38', '19', 'admin', '<ul>\r\n	<li>2 Original Logo Concepts</li>\r\n	<li>1 Dedicated Logo Designer</li>\r\n	<li>4 Revisions</li>\r\n	<li>With Grey Scale Format</li>\r\n	<li>Free Icon Design</li>\r\n	<li>Formats: JPEG Only</li>\r\n	<li>24 - 48 Hours Turn Around Time</li>\r\n	<li>100% Satisfaction</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Money Back Guarantee</li>\r\n	<li>Dedicated Account Manager</li>\r\n</ul>', NULL, NULL, 'uploads/package/_2058979416.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:10:22'),
(48, 1, 'Startup', 'startup', '158', '79', 'admin', '<ul>\r\n	<li>4 Original Logo Concepts</li>\r\n	<li>2 Dedicated Logo Designers</li>\r\n	<li>8 Revisions</li>\r\n	<li>With Grey Scale Format</li>\r\n	<li>Free Icon Design</li>\r\n	<li>Formats: JPEG, PSD, EPS, AI, PNG</li>\r\n	<li>24 - 48 Hours Turn Around Time</li>\r\n	<li>100% Satisfaction</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Money Back Guarantee</li>\r\n	<li>Dedicated Account Manager</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1802722828.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:11:10'),
(49, 1, 'Professional', 'professional', '258', '129', 'admin', '<ul>\r\n	<li>8 Original Logo Concepts</li>\r\n	<li>4 Dedicated Logo Designer (Industry Specific)</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Stationery Design</li>\r\n	<li>(Business Card, Letterhead, Envelope)</li>\r\n	<li>Email Signature Design</li>\r\n	<li>With Grey Scale Format</li>\r\n	<li>Free Icon Design</li>\r\n	<li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF, SVG</li>\r\n	<li>24 - 48 Hours Turn Around Time</li>\r\n	<li>100% Satisfaction</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Money Back Guarantee</li>\r\n	<li>Dedicated Account Manager</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1560016139.price-icon-3.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:11:51'),
(50, 1, 'Basic Combo', 'basic-combo', '1400', '699', 'admin', '<ul>\r\n	<li>5 Custom Logo Design Concepts</li>\r\n	<li>By 2 Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>Business Card, Letterhead, Envelope, Fax Template</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>5 Page Website</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Team of Expert Designers &amp; Developers</li>\r\n	<li>8 Stock images</li>\r\n	<li>5 Banner Designs</li>\r\n	<li>jQuery Sliders</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1586548829.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:54:06'),
(51, 1, 'Classic Video Package', 'classic-video-package', '799', '399', 'admin', '<ul>\r\n	<li>90 Second Video - HD 1080</li>\r\n	<li>Professional Script</li>\r\n	<li>Sample Theme</li>\r\n	<li>Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>Voice - Over &amp; Sound Effects</li>\r\n	<li>6 Weeks Delivery</li>\r\n	<li>Unlimited Revisions</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1428727373.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 17:58:23'),
(52, 1, 'Corporate Combo', 'corporate-combo', '4,099', '1,999', 'admin', '<ul>\r\n	<li>Unlimited Logo Concepts</li>\r\n	<li>8 Dedicated Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>2 Free Custom Stationary Designs</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>Invoice Design</li>\r\n	<li>Product Catalog Design</li>\r\n	<li>Unlimited Pages Website</li>\r\n	<li>Conceptual and Dynamic Website</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>Easy Product Search</li>\r\n	<li>Product Reviews</li>\r\n	<li>Unlimited Products</li>\r\n	<li>Unlimited Categories</li>\r\n	<li>Promotional Product Showcase</li>\r\n	<li>New Product Showcase</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Module Integration</li>\r\n	<li>Sales &amp; Inventory Management</li>\r\n	<li>Custom Forms</li>\r\n	<li>Lead Capturing Forms (Optional)</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Integration</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Team of Dedicated Designers, Developers and Brand Experts</li>\r\n	<li>20 Stock images</li>\r\n	<li>6 Unique Banner Designs</li>\r\n	<li>jQuery Slider</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Google+ Page Design</li>\r\n	<li>Pinterest Page Design</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1317807915.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:02:28'),
(53, 1, 'Deluxe Video Package', 'corporate-website-package', '1799', '899', 'admin', '<ul>\r\n	<li>120 Second Video - HD 1080</li>\r\n	<li>Professional Script</li>\r\n	<li>Sample Theme</li>\r\n	<li>Storyboard</li>\r\n	<li>Animation</li>\r\n	<li>Voice - Over &amp; Sound Effects</li>\r\n	<li>Unlimited Revisions</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1841367290.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:10:56'),
(54, 1, 'Automated / Interactive E-Commerce Package', 'automated-interactive-e-commerce-package', '1,7500', '9,999', 'admin', '<ul>\r\n	<li>6 Unique Pages Website</li>\r\n	<li>5 Stock images</li>\r\n	<li>5 Banner Designs</li>\r\n	<li>1 jQuery Slider Banner</li>\r\n	<li>FREE Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Mobile Responsive will be Additional $99*</li>\r\n	<li>CMS will be Additional $149*</li>\r\n</ul>', NULL, NULL, 'uploads/package/_967606134.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:14:03'),
(55, 1, 'Elite Combo', 'elite-combo', '8,099', '3,999', 'admin', '<ul>\r\n	<li>Unlimited Logo Concepts</li>\r\n	<li>8 Dedicated Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>2 Free Custom Stationary Designs</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>Invoice Design</li>\r\n	<li>Product Catalog Design</li>\r\n	<li>Complete Custom Design &amp; Development</li>\r\n	<li>Any One: Dating Portal, Job Portal, Professional Network, Social Network, Medical Portal, Restaurant Portal, Medical Portal, News Portal, Enterprise Portal</li>\r\n	<li>Unique, User Friendly, Interactive, Dynamic, High End UI Design</li>\r\n	<li>Unlimited Banner Designs</li>\r\n	<li>JQuery Slider</li>\r\n	<li>Special Hoover Effects</li>\r\n	<li>20 Stock Images/li&gt;</li>\r\n	<li>Client/User Dashboard Area</li>\r\n	<li>Custom Coding</li>\r\n	<li>Custom PHP Development</li>\r\n	<li>Content Management System (Custom)</li>\r\n	<li>Online Appointment/Scheduling/Online Ordering Integration (Optional)</li>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Multi Lingual (Optional)</li>\r\n	<li>Custom Dynamic Forms (Optional)</li>\r\n	<li>User Signup Area</li>\r\n	<li>User Login Area</li>\r\n	<li>User Dashboard Area</li>\r\n	<li>Complete Database Creation</li>\r\n	<li>Signup Automated Email Authentication</li>\r\n	<li>Web Traffic Analytics Integration</li>\r\n	<li>3rd Party API Integrations</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Search Bar for Easy Search</li>\r\n	<li>Live Feeds of Social Networks integration (Optional)</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Module-wise Architecture</li>\r\n	<li>Extensive Admin Panel</li>\r\n	<li>Award Winning Team of Expert Designers and Developers</li>\r\n	<li>Complete Deployment</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1159084360.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:17:07'),
(56, 1, 'Logo Basic', 'logo-basic', '209', '69', 'admin', '<ul class=\"price-list\">\r\n                            <li>6 Unique Logo Concepts</li>\r\n                            <li>FREE Icon</li>\r\n                            <li>Unlimited Revisions</li>\r\n                            <li>100% Ownership Rights</li>\r\n                            <li>JPEG Formats</li>\r\n                            <li>Free Rush Delivery</li>\r\n                            <li>Get Initial Concepts within 24 hours</li>\r\n                        </ul>', NULL, NULL, 'uploads/package/_1647528422.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:30:37'),
(57, 1, 'Logo Infinity', 'logo-infinity', '1,099', '309', 'admin', '<ul>\r\n	<li>Infinite Logo Concepts</li>\r\n	<li>FREE Icon</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>AI, PSD, EPS, GIF, BMP, JPEG PNG Formats</li>\r\n	<li>Stationery Design</li>\r\n	<li>(Business Card Letterhead,Envelope)</li>\r\n	<li>Printing</li>\r\n	<li>FREE 500 Business Cards Prints</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1696648709.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:33:21'),
(58, 1, 'Logo Plus', 'logo-plus', '449', '149', 'admin', '<ul>\r\n	<li>12 Unique Logo Concepts</li>\r\n	<li>FREE Icon</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>AI, PSD, EPS, GIF, BMP, JPEG PNG Formats</li>\r\n	<li>Stationery Design</li>\r\n	<li>(Business Card Letterhead,Envelope)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1076754731.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:34:34'),
(59, 1, 'Mascot', 'mascot', '1,689', '509', 'admin', '<ul>\r\n	<li>Infinite Logo Concepts</li>\r\n	<li>FREE Icon</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>AI, PSD, EPS, GIF, BMP, JPEG PNG Formats</li>\r\n	<li>Stationery Design</li>\r\n	<li>(Business Card Letterhead,Envelope)</li>\r\n	<li>Printing</li>\r\n	<li>FREE 500 Business Cards Prints</li>\r\n</ul>', NULL, NULL, 'uploads/package/_631765401.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:36:11'),
(60, 1, 'Automated / Interactive Conferencing Portal Package', 'automated-interactive-conferencing-portal-package', '13,000', '6,999', 'admin', '<ul>\r\n	<li><strong>Upto 40 </strong> Stock images</li>\r\n	<li><strong>10</strong>Unique Banner Designs</li>\r\n	<li>Unlimited Page Website</li>\r\n	<li>Custom Content Management System (CMS)</li>\r\n	<li>Unique Pages and UI Design</li>\r\n	<li>Complete Custom Development</li>\r\n	<li>Process Automation Tools</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Plugins Integration</li>\r\n	<li>JQuery Slider</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li><strong>5 Years</strong> FREE Hosting</li>\r\n	<li>Custom Email Addresses</li>\r\n	<li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li><strong>100%</strong> Satisfaction Guarantee</li>\r\n	<li><strong>100%</strong> Unique Design Guarantee</li>\r\n	<li><strong>100%</strong> Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_207704557.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-10 19:55:41'),
(61, 1, 'Premium Video Package', 'premium-video-package', '1,399', '699', 'admin', '<ul>\r\n	<li>2 Character Illustration / 2D Cartoon Animation / Screen Cast</li>\r\n	<li>Custom Artwork; No Stolen Images</li>\r\n	<li>Unlimited Storyboard Revisions</li>\r\n	<li>Initial Script Writing</li>\r\n	<li>Professional Voice &ndash; Over</li>\r\n	<li>Background Music / Sound Effects</li>\r\n	<li>Exotic Animations</li>\r\n	<li>HD Video Production</li>\r\n	<li>30 seconds Video Duration*(Yes, you can ask for more!)</li>\r\n	<li>4-5 Weeks Delivery Time</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>Moneyback Guarantee</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1760649265.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:47:32'),
(62, 1, 'Professional Combo', 'professional-combo', '2,899', '1,399', 'admin', '<ul>\r\n	<li>Unlimited Logo Concepts</li>\r\n	<li>8 Dedicated Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>2 Free Custom Stationary Designs</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>Trifold Brochure Design</li>\r\n	<li>Presentation Folder Design</li>\r\n	<li>Conceptual and Dynamic Liquid Website</li>\r\n	<li>Team of Expert Designers &amp; Developers</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>Online Reservation/Appointment Tool (Optional)</li>\r\n	<li>Custom Forms</li>\r\n	<li>Lead Capturing Forms (Optional)</li>\r\n	<li>Newsfeed Integration</li>\r\n	<li>Social Media Integration</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>15 Stock images</li>\r\n	<li>8 Unique Banner Designs</li>\r\n	<li>jQuery Sliders</li>\r\n	<li>Free Google Friendly Sitemap</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>Twitter Page Design</li>\r\n	<li>YouTube Page Design</li>\r\n	<li>Google+ Page Design</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_984894017.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 18:49:40'),
(63, 1, 'Startup Combo', 'startup-combo', '2,199', '999', 'admin', '<ul>\r\n	<li>Unlimited Logo Design Concepts</li>\r\n	<li>+ Social Media Design</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>3 Dedicated Designers</li>\r\n	<li>Icon Design</li>\r\n	<li>Business Card, Letterhead, Envelope</li>\r\n	<li>MS Word Letterhead</li>\r\n	<li>UNLIMITED Pages Website</li>\r\n	<li>Content Management System (CMS)</li>\r\n	<li>5 Stock Photos + 3 Banner Designs</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Facebook Page Design</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n</ul>', NULL, NULL, 'uploads/package/_792798769.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 19:02:53'),
(64, 1, 'Startup Video Package', 'startup-video-package', '399', '199', 'admin', '<ul>\r\n	<li>30s Duration - HD 1080</li>\r\n	<li>Professional Script</li>\r\n	<li>Storyboard</li>\r\n	<li>Sample Themes</li>\r\n	<li>Custom Setting, Characters &amp; Graphics</li>\r\n	<li>Animation Effects &amp; Visualization</li>\r\n	<li>Voice - Over &amp; Sound Effects (All accents) (M/F)</li>\r\n	<li>Unlimited Revisions</li>\r\n</ul>', NULL, NULL, 'uploads/package/_1318871883.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 19:07:19'),
(65, 1, 'Teaser/Intro Video Package', 'teaser-intro-video-package', '299', '149', 'admin', '<ul>\r\n	<li>15s Duration - HD 1080</li>\r\n	<li>Professional Script</li>\r\n	<li>Storyboard</li>\r\n	<li>Sample Themes</li>\r\n	<li>Custom Setting, Characters &amp; Graphics</li>\r\n	<li>Animation Effects &amp; Visualization</li>\r\n	<li>Voice - Over &amp; Sound Effects (All accents) (M/F)</li>\r\n	<li>Unlimited Revisions</li>\r\n</ul>', NULL, NULL, 'uploads/package/_2070950493.price-icon-2.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 19:09:26'),
(66, 1, 'CUSTOM LOGO & WEBSITE DESIGN SOLUTIONS', 'custom-logo-website-design-solutions', '4430', '1399', 'admin', '<ul>\r\n	<li><strong>LOGO DESIGN</strong></li>\r\n	<li>Unlimited Logo Design Concepts</li>\r\n	<li>4 Dedicated Logo Designers</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li><strong>FREEBIES</strong></li>\r\n	<li>2 Stationery Set (Letterhead, Envelope, Business Card)</li>\r\n	<li>Icon Design</li>\r\n	<li>Logo Animation</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>WEBSITE</strong></li>\r\n	<li>10 Unique Page Custom Website</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Content Management System</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Responsive Design</li>\r\n	<li>01 Year Web Hosting</li>\r\n	<li>10 Stock Photos</li>\r\n	<li>Email Addresses</li>\r\n	<li>Google Friendly Sitemap</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>LANDING PAGE</strong></li>\r\n	<li>1 Customized Landing Page</li>\r\n	<li>Design</li>\r\n	<li><strong>SOCIAL MEDIA</strong></li>\r\n	<li>Facebook, Youtube &amp; Twitter</li>\r\n	<li>Pages Design</li>\r\n</ul>', NULL, NULL, 'uploads/package/_2013211749.favicon.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 19:50:09'),
(67, 1, 'CUSTOM LOGO DESIGNING SOLUTIONS', 'custom-logo-designing-solutions', '1998', '999', 'admin', '<ul>\r\n	<li>8 Original Logo Concepts</li>\r\n	<li>4 Dedicated Logo Designer (Industry Specific)</li>\r\n	<li>Stationery Design (Business Card, Letterhead, Envelope)</li>\r\n	<li>Email Signature Design With Grey Scale Format</li>\r\n	<li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF</li>\r\n	<li>E-Commerce Website Design</li>\r\n	<li>CMS (Wordpress/Woocommerce)</li>\r\n	<li>Product Detail Page Design</li>\r\n	<li>Unlimited Products &amp; Categories</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Gateway Integration</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Product Rating &amp; Reviews</li>\r\n	<li>Unlimited Logo Design Concepts</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Social Media Banner Design</li>\r\n	<li>Free Favicon Design</li>\r\n	<li><strong>Value Added Services</strong></li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>Fastest Turnaround Time</li>\r\n	<li>100% Ownership</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>3 Page Business Website</li>\r\n	<li>5 Revisions</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Designer</li>\r\n	<li>Dedicated Professional Developer</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>3 Stock Images</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Google Optimised Sitemap</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>FREE Domain &amp; Hosting</li>\r\n	<li>Features:</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guaranteed</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Add-Ons:</li>\r\n	<li>Mobile responsive will be charged additionally</li>\r\n	<li>CMS will be charged additionally</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 'uploads/package/_452889543.favicon.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 19:51:46'),
(68, 1, 'CUSTOM LOGO DESIGNING SOLUTIONS', 'custom-logo-designing-solutions', '1998', '999', 'admin', '<ul>\r\n	<li>8 Original Logo Concepts</li>\r\n	<li>4 Dedicated Logo Designer (Industry Specific)</li>\r\n	<li>Stationery Design (Business Card, Letterhead, Envelope)</li>\r\n	<li>Email Signature Design With Grey Scale Format</li>\r\n	<li>Formats: JPEG, PSD, EPS, AI, PNG, TIFF</li>\r\n	<li>E-Commerce Website Design</li>\r\n	<li>CMS (Wordpress/Woocommerce)</li>\r\n	<li>Product Detail Page Design</li>\r\n	<li>Unlimited Products &amp; Categories</li>\r\n	<li>Full Shopping Cart Integration</li>\r\n	<li>Payment Gateway Integration</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Product Rating &amp; Reviews</li>\r\n	<li>Unlimited Logo Design Concepts</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Social Media Banner Design</li>\r\n	<li>Free Favicon Design</li>\r\n	<li><strong>Value Added Services</strong></li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>Fastest Turnaround Time</li>\r\n	<li>100% Ownership</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>3 Page Business Website</li>\r\n	<li>5 Revisions</li>\r\n	<li>Complete Deployment</li>\r\n	<li>Dedicated Designer</li>\r\n	<li>Dedicated Professional Developer</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>3 Stock Images</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Google Optimised Sitemap</li>\r\n	<li>48 to 72 hours TAT</li>\r\n	<li>FREE Domain &amp; Hosting</li>\r\n	<li>Features:</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guaranteed</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n	<li>All Final File Formats</li>\r\n	<li>Add-Ons:</li>\r\n	<li>Mobile responsive will be charged additionally</li>\r\n	<li>CMS will be charged additionally</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, 'uploads/package/no-img-avalible.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 20:03:54'),
(69, 1, 'Starter', 'starter', '399', '299', 'admin', '<ul>\r\n	<li>Custom designed Homepage (1x concept)</li>\r\n	<li>3 Custom designed inner pages</li>\r\n	<li>3 Premium Stock Photos</li>\r\n	<li>1 Custom Banner Design</li>\r\n	<li>Contact Us Form</li>\r\n	<li>Cross browser (Chrome, Firefox, Safari, etc) compatibility</li>\r\n	<li>On-page SEO configuration</li>\r\n	<li>W3C Certified HTML</li>\r\n	<li>48-72 Hours Turnaround Time</li>\r\n	<li>Dedicated Account Manager</li>\r\n	<li>24/7 Customer Support</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Unique Design Guarantee</li>\r\n	<li>100% Money Back Guarantee *</li>\r\n	<li>Cross platform (Dekstop, iPhone, Android, etc) responsive compatibility</li>\r\n	<li>Content Management System (CMS)</li>\r\n</ul>', NULL, NULL, 'uploads/package/_19622082.price-icon-1.png', 1, '0', 1, 0, '2021-12-09', '2021-12-08 20:16:01'),
(70, 1, 'Advance Combo', 'advance-combo', '4,999', '1,099', 'admin', '<ul>\r\n	<li><strong>&ndash; Logo Design</strong></li>\r\n	<li>Unlimited Logo Design Idea(s)</li>\r\n	<li>By 6 Award Winning Designer(s)</li>\r\n	<li>Free Icon Design</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>2 to 3 Business Days TAT</li>\r\n	<li>Letterhead Design</li>\r\n	<li>Business Card Design</li>\r\n	<li>Envelope Design</li>\r\n	<li>Email Signature Design</li>\r\n	<li>Electronic Letterhead</li>\r\n	<li>Invoice Design</li>\r\n	<li>2 Sided Flyer Design OR Bi-Fold Brochure Design</li>\r\n	<li>Company Profile Design</li>\r\n	<li>T-Shirt Design</li>\r\n	<li>Signage Design</li>\r\n	<li>Unlimited Pages Website Design</li>\r\n	<li>Custom Made, Interactive, Dynamic &amp; High End Design</li>\r\n	<li>Customized WordPress &amp; PHP Development</li>\r\n	<li>Interactive Sliding Banners</li>\r\n	<li>Up to 15 Custom Made Banner Designs</li>\r\n	<li>15 Stock Images</li>\r\n	<li>Unlimited Revisions</li>\r\n	<li>Special Hover Effects</li>\r\n	<li>Content Management System</li>\r\n	<li>Online Appointment/Booking/Scheduling/Online Ordering Integration (Optional)</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Online Payment Integration (Optional)</li>\r\n	<li>Multi Lingual (Optional)</li>\r\n	<li>Custom Dynamic Forms (Optional)</li>\r\n	<li>Signup Area (For Newsletters, Offers etc.)</li>\r\n	<li>Search Bar</li>\r\n	<li>Live Feeds of Social Networks integration (Optional)</li>\r\n	<li>Mobile Responsive</li>\r\n	<li>FREE 24 Months Domain Name</li>\r\n	<li>FREE 24 Month Hosting</li>\r\n	<li>Up to 15 Professional Email ID&rsquo;s</li>\r\n	<li>Google Friendly Sitemap</li>\r\n	<li>Search Engine Submission</li>\r\n	<li>Complete W3C Certified HTML</li>\r\n	<li>Industry specified Team of Award Winning Designers and Developers</li>\r\n	<li>Complete Deployment</li>\r\n	<li><strong>&ndash; Social Media Page Design</strong></li>\r\n	<li>Facebook Icon Image &amp; Banner Design</li>\r\n	<li>Twitter Icon Image &amp; Banner Design</li>\r\n	<li>Google+ Icon Image &amp; Banner Design</li>\r\n	<li>YouTube Icon Image &amp; Banner Design</li>\r\n	<li>LinkedIn Icon Image &amp; Banner Design</li>\r\n	<li><strong>&ndash; Video Animation</strong></li>\r\n	<li>60 Seconds 2D Video Animation</li>\r\n	<li>Script Writing</li>\r\n	<li>Story Board</li>\r\n	<li>Voice Over</li>\r\n	<li>Animation with Sound Effect</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>&ndash; Search Engine Optimization (Complimentary) (3 Month&rsquo;s Plan)</strong></li>\r\n	<li>10 Keywords</li>\r\n	<li>Guaranteed Ranking on Google</li>\r\n	<li>Off-site Optimization</li>\r\n	<li>Link Building</li>\r\n	<li>Social Bookmarking</li>\r\n	<li>Basic Analytical Report</li>\r\n	<li>In-depth Site Analysis</li>\r\n	<li>Content Duplicity Check</li>\r\n	<li>Initial Backlinks analysis</li>\r\n	<li>Google Penalty Check</li>\r\n	<li>Mobile Usability Check</li>\r\n	<li>Competition Analysis</li>\r\n	<li>Keyword Research</li>\r\n	<li><strong>&ndash; Value Added Services</strong></li>\r\n	<li>Logo Design Final Files (.AI, .PSD, .EPS, .PNG, .JPG, .PDF, .TIFF)</li>\r\n	<li>Website Design Complete Source Files</li>\r\n	<li>Dedicated Project Manager</li>\r\n	<li>100% Ownership Rights</li>\r\n	<li>100% Satisfaction Guarantee</li>\r\n	<li>100% Money Back Guarantee</li>\r\n	<li>*NO MONTHLY OR ANY HIDDEN FEE*</li>\r\n	<li><strong>&ndash; Add on</strong></li>\r\n	<li>Professional Content/Copywriting</li>\r\n	<li>Shopping Cart Integration</li>\r\n	<li>Additional Professional Email ID</li>\r\n</ul>', NULL, NULL, ' ', 1, '0', 1, 0, '2021-12-15', '2021-12-14 14:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_assign`
--

CREATE TABLE `role_assign` (
  `id` int(10) UNSIGNED NOT NULL,
  `assignee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_assign`
--

INSERT INTO `role_assign` (`id`, `assignee`, `role_id`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a:4:{i:0;s:7:\"roles_1\";i:1;s:13:\"departments_2\";i:2;s:13:\"departments_4\";i:3;s:14:\"designations_3\";}', 2, 1, 0, '2021-05-11 20:05:21', '2021-05-11 20:05:21', NULL),
(2, 'a:12:{i:0;s:7:\"roles_1\";i:1;s:7:\"roles_2\";i:2;s:7:\"roles_3\";i:3;s:7:\"roles_4\";i:4;s:13:\"departments_1\";i:5;s:13:\"departments_2\";i:6;s:13:\"departments_3\";i:7;s:13:\"departments_4\";i:8;s:14:\"designations_1\";i:9;s:14:\"designations_2\";i:10;s:14:\"designations_3\";i:11;s:14:\"designations_4\";}', 1, 1, 0, '2021-05-11 20:06:25', '2021-05-11 20:06:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `company` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `trustpilot` varchar(255) DEFAULT NULL,
  `reviews` varchar(255) DEFAULT NULL,
  `bark` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `copyright` varchar(100) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `user_id`, `company`, `facebook`, `twitter`, `instagram`, `linkedin`, `trustpilot`, `reviews`, `bark`, `phone`, `email`, `copyright`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 0, 'Webho', 'https://www.facebook.com/digitmediadesigns/', 'https://twitter.com/digit_media', 'https://www.instagram.com/digitmediadesigns/', 'https://www.linkedin.com/company/digit-media-design', 'https://www.trustpilot.com/review/digitmediadesigns.com', 'https://www.reviews.io/company-reviews/store/digitmediadesigns-com', 'https://www.bark.com/en/us/company/digit-media-designs/av9VZ/', '844-827-9472', 'test@gmail.com', 'Copyright © 2021 - All Rights Reserved.', 1, 0, '2021-12-15', '2021-12-15 18:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `show_clients_packages`
--

CREATE TABLE `show_clients_packages` (
  `id` int(20) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `sub_title` varchar(225) DEFAULT NULL,
  `sub_title_slug` varchar(225) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `link` varchar(225) DEFAULT NULL,
  `post_by` varchar(225) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_clients_packages`
--

INSERT INTO `show_clients_packages` (`id`, `page`, `title`, `slug`, `sub_title`, `sub_title_slug`, `img`, `link`, `post_by`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_224073956.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-20 20:35:52'),
(2, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_1810882867.2.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:03:43'),
(3, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_1498970371.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:04:12'),
(4, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_1467412734.4.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:04:38'),
(5, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_410059440.5.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:05:04'),
(6, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_598288607.6.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:05:39'),
(7, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_1135102227.7.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:06:12'),
(8, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_2002215048.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:06:32'),
(9, 'Home', 'Logo', 'logo', '', '', 'uploads/package/_1185043359.9.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:06:54'),
(10, 'Home', 'Website', 'website', '', '', 'uploads/package/_250880856.1-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:30:28'),
(11, 'Home', 'Website', 'website', '', '', 'uploads/package/_1060379108.2-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:30:39'),
(12, 'Home', 'Website', 'website', '', '', 'uploads/package/_431583804.3-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:30:50'),
(13, 'Home', 'Website', 'website', '', '', 'uploads/package/_1638759529.4-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:31:07'),
(14, 'Home', 'Website', 'website', '', '', 'uploads/package/_321794658.5-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:34:43'),
(15, 'Home', 'Website', 'website', '', '', 'uploads/package/_1640775544.6-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:35:17'),
(16, 'Home', 'Website', 'website', '', '', 'uploads/package/_1082828381.7-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:35:49'),
(17, 'Home', 'Website', 'website', '', '', 'uploads/package/_123432086.8-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:36:03'),
(18, 'Home', 'Website', 'website', '', '', 'uploads/package/_1652759142.9-1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 12:36:16'),
(19, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1624946122.1.jpg', 'https://www.youtube.com/watch?v=cSn1sV_by9g', 'admin', '2021-12-21', '2021-12-21 12:51:09'),
(20, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1747618410.2.jpg', 'https://www.youtube.com/watch?v=21n1G9dwleE', 'admin', '2021-12-21', '2021-12-21 12:55:33'),
(21, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1154353547.3.jpg', 'https://www.youtube.com/watch?v=HrYYTIdBAyk', 'admin', '2021-12-21', '2021-12-21 12:55:55'),
(22, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_2041755572.4.jpg', 'https://www.youtube.com/watch?v=bJCdqlgsrUg', 'admin', '2021-12-21', '2021-12-21 12:56:42'),
(23, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1278425553.5.jpg', 'https://www.youtube.com/watch?v=_4gDLpK8zt0', 'admin', '2021-12-21', '2021-12-21 12:57:26'),
(24, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_354560124.6.jpg', 'https://www.youtube.com/watch?v=9F2rYfsr4g4', 'admin', '2021-12-21', '2021-12-21 12:58:26'),
(25, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1113054675.7.jpg', 'https://www.youtube.com/watch?v=UZIVfP9F4vk', 'admin', '2021-12-21', '2021-12-21 12:59:18'),
(26, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_1729577944.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:00:47'),
(27, 'Home', 'Video', 'video', '2D Animation', '2d-animation', 'uploads/package/_360193288.9.jpg', 'https://www.youtube.com/watch?v=n21EcZfLPmA', 'admin', '2021-12-21', '2021-12-21 13:01:40'),
(28, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_163880221.1.jpg', 'https://www.youtube.com/watch?v=u-H8r4s7MBc', 'admin', '2021-12-21', '2021-12-21 13:11:27'),
(29, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1845117657.2.jpg', 'https://www.youtube.com/watch?v=lAymiUFVxHo', 'admin', '2021-12-21', '2021-12-21 13:12:07'),
(30, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_311672447.3.jpg', 'https://www.youtube.com/watch?v=JXG0AkXgGYg', 'admin', '2021-12-21', '2021-12-21 13:31:04'),
(31, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1449536290.4.jpg', 'https://www.youtube.com/watch?v=JOtL7PRr9Qo', 'admin', '2021-12-21', '2021-12-21 13:31:44'),
(32, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1342963251.5.jpg', 'https://www.youtube.com/watch?v=Mdj-9qUm8Bw', 'admin', '2021-12-21', '2021-12-21 13:32:21'),
(33, 'Home', 'Video', 'video', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1517387412.6.jpg', 'https://www.youtube.com/watch?v=fpGIFq8_BM4', 'admin', '2021-12-21', '2021-12-21 13:32:46'),
(34, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_423450360.1.jpg', 'https://www.youtube.com/watch?v=Uz0-vGkOP5I', 'admin', '2021-12-21', '2021-12-21 13:37:11'),
(35, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_158312342.2.jpg', 'https://www.youtube.com/watch?v=NoZWw9QKfAU', 'admin', '2021-12-21', '2021-12-21 13:37:36'),
(36, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_498616245.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:38:10'),
(37, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_2007510010.4.jpg', 'https://www.youtube.com/watch?v=fEMLeEcWp9s', 'admin', '2021-12-21', '2021-12-21 13:38:40'),
(38, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_24722319.5.jpg', 'https://www.youtube.com/watch?v=abviy0QiJxo', 'admin', '2021-12-21', '2021-12-21 13:39:27'),
(39, 'Home', 'Video', 'video', 'Motion Graphics', 'motion-graphics', 'uploads/package/_1815120633.6.jpg', 'https://www.youtube.com/watch?v=jLKWIxdUn7o', 'admin', '2021-12-21', '2021-12-21 13:39:57'),
(40, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_422850208.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:45:05'),
(41, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_420606771.2.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:46:30'),
(42, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_838802860.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:47:14'),
(43, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_1041844432.4.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:47:34'),
(44, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_281581445.5.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:47:47'),
(45, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_64268763.6.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:48:13'),
(46, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_2118083624.7.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:48:22'),
(47, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_2030398057.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:48:39'),
(48, 'Home', 'Stationery', 'stationery', NULL, NULL, 'uploads/package/_387666966.9.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:48:50'),
(49, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_584451561.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:54:12'),
(50, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_106089968.2.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:54:22'),
(51, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_1316306998.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:54:42'),
(52, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_1024691011.4.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:55:07'),
(53, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_2085440533.5.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:55:24'),
(54, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_1510807415.6.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:55:47'),
(55, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_994778323.7.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:56:11'),
(56, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_170683926.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:57:51'),
(57, 'Home', 'Social Media', 'social-media', NULL, NULL, 'uploads/package/_18583324.9.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 13:58:03'),
(58, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1715057431.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:17:45'),
(59, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1329922094.2.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:18:41'),
(60, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1517587314.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:19:03'),
(61, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1836647787.4.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:19:38'),
(62, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1630017838.5.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:19:48'),
(63, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1451377093.6.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:20:04'),
(64, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1525483754.7.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:20:15'),
(65, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_1070765238.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:20:46'),
(66, 'web-design', 'Custom Packages', 'custom-packages', NULL, NULL, 'uploads/package/_576123153.9.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 15:21:13'),
(67, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1567012973.1.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:25:51'),
(68, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1502708256.2.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:26:07'),
(69, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1110547399.3.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:26:18'),
(70, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_660890910.4.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:26:46'),
(71, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1444092946.5.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:27:17'),
(72, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1842588050.6.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:27:29'),
(73, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_2037943631.7.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:27:50'),
(74, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1496216754.8.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:28:05'),
(75, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1132548711.9.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:28:42'),
(76, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1456807196.10.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:28:59'),
(77, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_843250725.11.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:29:29'),
(78, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_946482232.12.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:29:45'),
(79, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_204408759.13.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:30:34'),
(80, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_888488233.14.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:30:46'),
(81, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_460100471.15.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:30:59'),
(82, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1246980181.16.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:31:25'),
(83, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1221836559.17.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:31:47'),
(84, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1614023188.18.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:32:17'),
(85, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1087420122.19.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:32:47'),
(86, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_981719055.20.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:33:04'),
(87, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1941360405.21.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:33:14'),
(88, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1538248252.22.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:33:29'),
(89, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1399647690.23.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:33:39'),
(90, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_302460544.24.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:33:49'),
(91, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_344458267.25.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:34:06'),
(92, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_350204664.26.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:34:24'),
(93, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_323584328.27.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:34:48'),
(94, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_745575190.28.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:35:21'),
(95, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1553575942.29.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:35:34'),
(96, 'web-app-dev', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_1283949880.30.png', NULL, 'admin', '2021-12-21', '2021-12-21 15:35:50'),
(97, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_1417750087.1.jpg', 'https://www.youtube.com/watch?v=cSn1sV_by9g', 'admin', '2021-12-21', '2021-12-21 15:49:42'),
(98, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_717212000.2.jpg', 'https://www.youtube.com/watch?v=21n1G9dwleE', 'admin', '2021-12-21', '2021-12-21 15:50:20'),
(99, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_693987985.3.jpg', 'https://www.youtube.com/watch?v=HrYYTIdBAyk', 'admin', '2021-12-21', '2021-12-21 15:51:08'),
(100, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_1741206604.4.jpg', 'https://www.youtube.com/watch?v=bJCdqlgsrUg', 'admin', '2021-12-21', '2021-12-21 15:52:32'),
(101, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_59936105.5.jpg', 'https://www.youtube.com/watch?v=_4gDLpK8zt0', 'admin', '2021-12-21', '2021-12-21 15:53:28'),
(102, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_1244012557.6.jpg', 'https://www.youtube.com/watch?v=9F2rYfsr4g4', 'admin', '2021-12-21', '2021-12-21 15:53:53'),
(103, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_273021388.7.jpg', 'https://www.youtube.com/watch?v=UZIVfP9F4vk', 'admin', '2021-12-21', '2021-12-21 15:54:38'),
(104, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_1946344559.8.jpg', 'https://www.youtube.com/watch?v=0m-5U6gBmtM', 'admin', '2021-12-21', '2021-12-21 15:55:24'),
(105, 'video-animation', 'Recent Work', 'recent-work', '2D Animation', '2d-animation', 'uploads/package/_398844842.9.jpg', 'https://www.youtube.com/watch?v=n21EcZfLPmA', 'admin', '2021-12-21', '2021-12-21 15:55:54'),
(106, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1832105465.1.jpg', 'https://www.youtube.com/watch?v=u-H8r4s7MBc', 'admin', '2021-12-21', '2021-12-21 16:00:03'),
(107, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1458601704.2.jpg', 'https://www.youtube.com/watch?v=lAymiUFVxHo', 'admin', '2021-12-21', '2021-12-21 16:00:39'),
(108, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_320416515.3.jpg', 'https://www.youtube.com/watch?v=JXG0AkXgGYg', 'admin', '2021-12-21', '2021-12-21 16:01:24'),
(109, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_253303083.4.jpg', 'https://www.youtube.com/watch?v=JOtL7PRr9Qo', 'admin', '2021-12-21', '2021-12-21 16:02:02'),
(110, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1382456553.5.jpg', 'https://www.youtube.com/watch?v=Mdj-9qUm8Bw', 'admin', '2021-12-21', '2021-12-21 16:02:34'),
(111, 'video-animation', 'Recent Work', 'recent-work', 'Whiteboard Animation', 'whiteboard-animation', 'uploads/package/_1801090686.6.jpg', 'https://www.youtube.com/watch?v=fpGIFq8_BM4', 'admin', '2021-12-21', '2021-12-21 16:03:00'),
(112, 'video-animation', 'Recent Work', 'recent-work', 'Motion Graphics', 'motion-graphics', 'uploads/package/_65459476.1.jpg', 'https://www.youtube.com/watch?v=Uz0-vGkOP5I', 'admin', '2021-12-21', '2021-12-21 16:05:29'),
(113, 'video-animation', 'Recent Work', 'recent-work', NULL, NULL, 'uploads/package/_27271086.2.jpg', 'https://www.youtube.com/watch?v=NoZWw9QKfAU', 'admin', '2021-12-21', '2021-12-21 16:05:58'),
(114, 'video-animation', 'Recent Work', 'recent-work', 'Motion Graphics', 'motion-graphics', 'uploads/package/_526259372.3.jpg', 'https://www.youtube.com/watch?v=NMD9-4Srtv4', 'admin', '2021-12-21', '2021-12-21 16:06:22'),
(115, 'video-animation', 'Recent Work', 'recent-work', 'Motion Graphics', 'motion-graphics', 'uploads/package/_456641170.4.jpg', 'https://www.youtube.com/watch?v=fEMLeEcWp9s', 'admin', '2021-12-21', '2021-12-21 16:07:18'),
(116, 'video-animation', 'Recent Work', 'recent-work', 'Motion Graphics', 'motion-graphics', 'uploads/package/_182030573.5.jpg', 'https://www.youtube.com/watch?v=abviy0QiJxo', 'admin', '2021-12-21', '2021-12-21 16:07:51'),
(117, 'video-animation', 'Recent Work', 'recent-work', 'Motion Graphics', 'motion-graphics', 'uploads/package/_2028888459.6.jpg', 'https://www.youtube.com/watch?v=jLKWIxdUn7o', 'admin', '2021-12-21', '2021-12-21 16:08:17'),
(118, 'log-animation', 'Iconic Logo Design', 'iconic-logo-design', '-', NULL, 'uploads/package/_586675331.logo-inner-img.png', NULL, 'admin', '2021-12-21', '2021-12-21 16:57:57'),
(119, 'log-animation', 'Iconic Logo Design', 'iconic-logo-design', NULL, NULL, 'uploads/package/_200551353.logo-inner-img2.png', NULL, 'admin', '2021-12-21', '2021-12-21 16:58:22'),
(120, 'log-animation', 'Iconic Logo Design', 'iconic-logo-design', NULL, NULL, 'uploads/package/_423858134.logo-inner-img3.png', NULL, 'admin', '2021-12-21', '2021-12-21 16:58:46'),
(121, 'log-animation', 'Iconic Logo Design', 'iconic-logo-design', NULL, NULL, 'uploads/package/_1757096691.logo-inner-img4.png', NULL, 'admin', '2021-12-21', '2021-12-21 16:59:20'),
(122, 'log-animation', '2D Animated Logo', '2d-animated-logo', NULL, NULL, 'uploads/package/_1279326393.logo-inner-img.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:01:11'),
(123, 'log-animation', '2D Animated Logo', '2d-animated-logo', NULL, NULL, 'uploads/package/_986816035.logo-inner-img2.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:01:41'),
(124, 'log-animation', '2D Animated Logo', '2d-animated-logo', NULL, NULL, 'uploads/package/_415617043.logo-inner-img3.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:02:04'),
(125, 'log-animation', '2D Animated Logo', '2d-animated-logo', NULL, NULL, 'uploads/package/_1273598267.logo-inner-img4.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:02:15'),
(126, 'log-animation', '3D Animated Logo', '3d-animated-logo', NULL, NULL, 'uploads/package/_1022331778.logo-inner-img.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:04:52'),
(127, 'log-animation', '3D Animated Logo', '3d-animated-logo', NULL, NULL, 'uploads/package/_1650203246.logo-inner-img2.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:05:03'),
(128, 'log-animation', '3D Animated Logo', '3d-animated-logo', NULL, NULL, 'uploads/package/_2017742886.logo-inner-img3.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:05:15'),
(129, 'log-animation', '3D Animated Logo', '3d-animated-logo', NULL, NULL, 'uploads/package/_1993976956.logo-inner-img4.gif', NULL, 'admin', '2021-12-21', '2021-12-21 17:05:27'),
(130, 'log-animation', 'Illustrative Logo', 'illustrative-logo', NULL, NULL, 'uploads/package/_1081208853.logo-inner-img.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:06:49'),
(131, 'log-animation', 'Illustrative Logo', 'illustrative-logo', NULL, NULL, 'uploads/package/_432998242.logo-inner-img2.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:07:01'),
(132, 'log-animation', 'Illustrative Logo', 'illustrative-logo', NULL, NULL, 'uploads/package/_780665082.logo-inner-img3.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:07:15'),
(133, 'log-animation', 'Illustrative Logo', 'illustrative-logo', NULL, NULL, 'uploads/package/_1957403834.logo-inner-img4.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:07:35'),
(134, 'log-animation', 'Symbolic Logo', 'symbolic-logo', NULL, NULL, 'uploads/package/_1172814804.logo-inner-img.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:09:49'),
(135, 'log-animation', 'Symbolic Logo', 'symbolic-logo', NULL, NULL, 'uploads/package/_1145779736.logo-inner-img2.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:10:01'),
(136, 'log-animation', 'Symbolic Logo', 'symbolic-logo', NULL, NULL, 'uploads/package/_1308618908.logo-inner-img3.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:10:20'),
(137, 'log-animation', 'Symbolic Logo', 'symbolic-logo', NULL, NULL, 'uploads/package/_437259998.logo-inner-img4.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:10:36'),
(138, 'log-animation', 'Typographic Logo', 'typographic-logo', NULL, NULL, 'uploads/package/_988658903.logo-inner-img.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:12:55'),
(139, 'log-animation', 'Typographic Logo', 'typographic-logo', NULL, NULL, 'uploads/package/_153512003.logo-inner-img2.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:13:06'),
(140, 'log-animation', 'Typographic Logo', 'typographic-logo', NULL, NULL, 'uploads/package/_1409808608.logo-inner-img3.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:13:18'),
(141, 'log-animation', 'Typographic Logo', 'typographic-logo', NULL, NULL, 'uploads/package/_548919262.logo-inner-img4.png', NULL, 'admin', '2021-12-21', '2021-12-21 17:13:36'),
(142, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_250852428.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:17:48'),
(143, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_1415832457.2.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:18:11'),
(144, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_947467128.3.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:18:25'),
(145, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_1797611317.4.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:18:35'),
(146, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_1190412021.5.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:18:50'),
(147, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_203938788.6.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:19:03'),
(148, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_864422597.7.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:19:25'),
(149, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_711393036.8.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:19:37'),
(150, 'log-animation', 'Our Recent Work', 'our-recent-work', NULL, NULL, 'uploads/package/_342357530.9.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:19:55'),
(151, 'portfolio', 'Our Recent Work', 'our-recent-work', 'Website', 'website', 'uploads/package/_632997640.1.jpg', NULL, 'admin', '2021-12-21', '2021-12-21 17:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `user_id`, `slug`, `name`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Technology - 1', NULL, NULL, NULL, NULL, 'uploads/technology/_1098100175.1.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 16:57:50'),
(2, 1, NULL, 'Technology - 2', NULL, NULL, NULL, NULL, 'uploads/technology/_131430376.2.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:09:45'),
(3, 1, NULL, 'Technology - 3', NULL, NULL, NULL, NULL, 'uploads/technology/_414394234.3.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:09:48'),
(4, 1, NULL, 'Technology - 4', NULL, NULL, NULL, NULL, 'uploads/technology/_565411520.4.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:09:52'),
(5, 1, NULL, 'Technology - 5', NULL, NULL, NULL, NULL, 'uploads/technology/_1317492584.5.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:09:55'),
(6, 1, NULL, 'Technology - 6', NULL, NULL, NULL, NULL, 'uploads/technology/_232434278.6.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:09:58'),
(7, 1, NULL, 'Technology - 7', NULL, NULL, NULL, NULL, 'uploads/technology/_1463544666.7.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:02'),
(8, 1, NULL, 'Technology - 8', NULL, NULL, NULL, NULL, 'uploads/technology/_518558441.8.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:07'),
(9, 1, NULL, 'Technology - 9', NULL, NULL, NULL, NULL, 'uploads/technology/_398476945.9.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:15'),
(10, 1, NULL, 'Technology - 10', NULL, NULL, NULL, NULL, 'uploads/technology/_308964166.10.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:19'),
(11, 1, NULL, 'Technology - 11', NULL, NULL, NULL, NULL, 'uploads/technology/_811192353.11.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:22'),
(12, 1, NULL, 'Technology - 12', NULL, NULL, NULL, NULL, 'uploads/technology/_398345538.12.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:33'),
(13, 1, NULL, 'Technology - 13', NULL, NULL, NULL, NULL, 'uploads/technology/_789314897.13.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:40'),
(14, 1, NULL, 'Technology - 14', NULL, NULL, NULL, NULL, 'uploads/technology/_736945837.14.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:45'),
(15, 1, NULL, 'Technology - 15', NULL, NULL, NULL, NULL, 'uploads/technology/_1333741222.15.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 22:10:50'),
(16, 1, NULL, 'Technology - 16', NULL, NULL, NULL, NULL, 'uploads/technology/_1421645187.16.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:11:35'),
(17, 1, NULL, 'Technology - 17', NULL, NULL, NULL, NULL, 'uploads/technology/_1157487807.17.png', 1, '0', 1, 0, '2021-12-15', '2021-12-15 17:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `name` varchar(255) DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `post_by` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `is_read` char(1) NOT NULL DEFAULT '0',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `is_deleted` int(11) DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `user_id`, `name`, `page`, `post_by`, `details`, `short_details`, `file`, `img`, `type`, `is_read`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Iam Jackson', NULL, 'Admin', '<p>I got a web design for my brand designed by The Webho, and they did a fantastic job. The web design was unique and helped my brand build an amazing image.</p>', NULL, NULL, 'uploads/testimonials/_1156548912.testi-img3.jpg', 1, '0', 1, 0, '2021-12-15', '2021-12-14 19:31:11'),
(2, 1, 'Louis Moore', NULL, 'Admin', '<h4>I availed of their custom web design services and got an illustrative web design made for my start-up. The design was amazing, and their team is very responsive.</h4>', NULL, NULL, 'uploads/testimonials/_764790255.testi-img2.jpg', 1, '0', 1, 0, '2021-12-15', '2021-12-14 19:17:10'),
(3, 1, 'Janet Wilson', NULL, 'Admin', '<h4>I had a wonderful working experience with them. They made web design for my fitness brand, and the final version of the web design after the revision was amazing!</h4>', NULL, NULL, 'uploads/testimonials/_1774643797.testi-img1.png', 1, '0', 1, 0, '2021-12-15', '2021-12-14 19:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date NOT NULL,
  `reporting_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_model_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_number_plate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `profile_pic`, `resume_doc`, `cnic_doc`, `education_doc`, `personal_email`, `phonenumber`, `emergency_number`, `cnic`, `residential_address`, `blood_group`, `dob`, `gender`, `marital_status`, `emp_id`, `designation`, `department`, `join_date`, `reporting_line`, `v_model_name`, `v_model_year`, `v_number_plate`, `bank_account_number`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Administrator', 'admin', 'admin@project.com', NULL, '$2y$10$tmPeoAmP.ER/7cVW6JvGMOhEtCztu7LiyGde99kwQWO2ot.Ad7tGa', 'uploads/avatar/e3673c8ac28c53931c41674f57223d8a/NO2yBdmaaJ5gvw1wxc8mEBDAOuyGnACazHmf9fZC.png', 'uploads/resume/2339f4445ad239e370e032dbee4d5819/4e9psgcsxImYuXFTRJMdpu9RS7RgL6twLhX6QfCT.png', 'uploads/cnic/b591d9b80583399ce26d62ab98bf47ec/it4PcMBwokHHu43ruRYeNi1benQEdfCCEolbOcLr.png', NULL, 'admin@thesoftcube.com', '0300-00000000', '0300-00000000', '00000-0000000-0', 'None', 'B-VE', '1992-06-14', 'male', 'single', 1027, 'Chief Executive Officer', 'Custom Development', '2021-05-01', 'me@mydomain.com', 'Vitz', '2021', '12345', 'None', 1, 0, '2021-05-11 19:44:21', '2021-12-14 19:34:13', NULL, NULL),
(2, 'Junaid pervez', 'junaidpervez', 'junaid.pervez@thesoftcube.com', NULL, '$2y$10$fhwPHT7rJ4/vsdLU8jQ9e.pW/QTJYBNuIL.o8Gq2W9Djvm.8CmkEq', 'uploads/avatar/e793c089fd61fd5f9ac89162136c47c7/Yb0EsbzahpuzAaB5ozqzafBAZx0oRPmwi3VWDH3I.png', 'uploads/resume/6c08c99dc3f53d5b2ea945fe0767a0a2/Eb01WKZGxPZ6zPskGdj7JaT0pohDFl5yw93e4wcV.png', 'uploads/cnic/cf6cbede9c63b5f99c0988ed76818e60/Pz4UodEGGAWvmMvWT7C3ASnQ1hmkObyva5BGMxrZ.png', NULL, 'junaidpervez@gmail.com', '0300-00000000', '0300-00000000', '00000-0000000-0', 'None', 'O+VE', '1995-01-01', 'male', 'single', 1001, 'Chief Operating Officer', 'WordPress Development', '2021-04-01', 'me@mydomain.com', '', '', '', 'None', 1, 0, '2021-05-11 20:21:21', '2021-05-11 20:21:21', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `budget_range`
--
ALTER TABLE `budget_range`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inner_banner`
--
ALTER TABLE `inner_banner`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_project`
--
ALTER TABLE `inquiry_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_placed`
--
ALTER TABLE `order_placed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role_assign`
--
ALTER TABLE `role_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `show_clients_packages`
--
ALTER TABLE `show_clients_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `budget_range`
--
ALTER TABLE `budget_range`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inner_banner`
--
ALTER TABLE `inner_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inquiry_project`
--
ALTER TABLE `inquiry_project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_placed`
--
ALTER TABLE `order_placed`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `role_assign`
--
ALTER TABLE `role_assign`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `show_clients_packages`
--
ALTER TABLE `show_clients_packages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
