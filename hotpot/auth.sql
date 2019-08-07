-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 04:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_mail`, `admin_pass`) VALUES
(2, 'Aron', 'aron@gmail.com', '9619dcbd9d0883081dab8ca6cd7d9220');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(11,2) DEFAULT NULL,
  `measurement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `recipe_id`, `ingredient`, `amount`, `measurement`) VALUES
(14, 2, 'Carrot', '400.00', 1),
(15, 2, 'skinless boneless chicken thighs, halved', '8.00', 3),
(16, 2, 'onion', '1.00', 3),
(17, 2, 'skinless boneless chicken thighs, halved', '8.00', 3),
(18, 2, 'onion', '1.00', 3),
(20, 2, 'Saffron', '5.50', 1),
(21, 2, 'tumeric', '1.00', 5),
(22, 21, 'white bread flour-starter', '100.00', 1),
(23, 21, 'organic dark rye flour-starter', '100.00', 1),
(24, 21, 'dried yeast', '4.00', 1),
(25, 21, 'strong white bread flour', '400.00', 1),
(26, 21, 'chia seeds', '5.00', 1),
(27, 3, 'pack oven-roasted vegetables', '400.00', 1),
(28, 3, 'kidney beans in chilli sauce', '1.00', 6),
(29, 3, 'chopped tomatoes', '1.00', 6),
(30, 3, 'ready-to-eat mixed grain pouch', '1.00', 10),
(51, 4, 'dried wholewheat noodle', '140.00', 1),
(52, 4, 'grated ginger', '2.00', 4),
(53, 4, 'medium red chilli, deseeded and finely c', '1.00', 3),
(54, 4, 'skinless, boneless chicken thighs, chopp', '4.00', 3),
(55, 4, 'hot vegetable stock', '700.00', 1),
(56, 4, 'chestnut mushrooms, sliced', '4.00', 3),
(57, 5, 'folded rice noodles (sen lek)', '100.00', 1),
(58, 5, 'red curry paste', '2.00', 4),
(59, 5, 'cooked shelled prawns', '150.00', 1),
(60, 5, 'quinoa', '60.00', 1),
(62, 5, 'wheat-free tamari', '1.00', 4),
(64, 5, 'rapeseed oil', '1.00', 4),
(65, 6, 'basmati rice', '250.00', 1),
(66, 6, 'special mixed frozen vegetables', '400.00', 1),
(67, 6, 'vegetable stock cube', '1.00', 3),
(68, 6, 'korma curry paste', '2.00', 4),
(69, 6, 'cashew nuts', '10.00', 1),
(70, 7, 'cold butter , diced', '230.00', 1),
(71, 7, 'plain flour', '350.00', 1),
(72, 7, 'golden caster sugar', '100.00', 1),
(73, 7, 'mincemeat', '280.00', 1),
(74, 7, 'egg', '2.00', 3),
(75, 8, 'pancetta', '150.00', 1),
(76, 8, 'balls mozzarella, torn into chunks', '2.00', 3),
(77, 8, 'tomatoes, chopped into large pieces', '6.00', 3),
(78, 8, 'artichoke in oil, drained', '285.00', 1),
(79, 8, 'basil', '10.00', 1),
(80, 8, 'Olive oil', '30.00', 8),
(121, 9, 'spaghetti', '400.00', 1),
(122, 9, 'garlic cloves, very thinly sliced', '3.00', 3),
(123, 9, 'nduja', '75.00', 1),
(124, 9, 'tomatoes, chopped ', '200.00', 1),
(125, 9, 'black olives', '75.00', 1),
(126, 9, 'pecorino cheese', '40.00', 1),
(127, 10, 'plain flour', '100.00', 1),
(128, 10, 'eggs', '2.00', 3),
(129, 10, 'skimmed milk', '500.00', 8),
(130, 10, 'sunflower oil ', '50.00', 8),
(131, 10, 'caster sugar', '50.00', 1),
(132, 11, 'onions', '2.00', 3),
(133, 11, 'carrots', '300.00', 1),
(134, 11, 'potatoes', '1.00', 2),
(135, 11, 'lean minced beef', '450.00', 1),
(136, 11, 'beef stock cubes', '3.00', 3),
(137, 11, 'baked beans', '400.00', 1),
(138, 12, 'garlic cloves', '6.00', 3),
(139, 12, 'bread crumbs', '85.00', 1),
(140, 12, 'skinless, boneless chicken breasts', '4.00', 3),
(141, 12, 'parsley', '30.00', 1),
(142, 12, 'soft cheese', '50.00', 1),
(143, 13, 'large ciabatta', '1.00', 3),
(144, 13, 'chorizo', '150.00', 1),
(145, 13, 'Pesto', '75.00', 1),
(146, 13, 'roasted red peppers', '250.00', 1),
(147, 14, 'sweet potatoes', '1.00', 2),
(148, 14, 'red onions', '2.00', 3),
(149, 14, 'red chilli ', '2.00', 3),
(150, 14, 'cumin', '10.00', 1),
(152, 14, 'sweetcorn-drained', '400.00', 1),
(153, 14, 'polenta', '150.00', 1),
(154, 15, 'red peppers', '4.00', 3),
(155, 15, 'cooked tomato rice', '500.00', 1),
(156, 15, 'black olives', '50.00', 1),
(157, 15, 'goat cheese', '200.00', 1),
(158, 16, 'butter', '200.00', 1),
(159, 16, 'light soft brown sugar', '350.00', 1),
(160, 16, 'eggs', '2.00', 3),
(161, 16, 'self raising flour', '350.00', 1),
(162, 16, 'cocoa powder', '100.00', 1),
(163, 16, 'chocolate chips', '200.00', 1),
(170, 17, 'dark chocolate  , broken into chunks', '300.00', 1),
(171, 17, 'self-raising flour', '200.00', 1),
(172, 17, ' light muscovado sugar', '200.00', 1),
(173, 17, ' cocoa', '100.00', 1),
(174, 17, 'pot soured cream', '300.00', 1),
(175, 17, 'eggs', '2.00', 3),
(176, 17, 'vanilla extract', '10.00', 8),
(177, 18, 'dark chocolate', '375.00', 1),
(178, 18, 'butter', '375.00', 1),
(179, 18, 'caster sugar', '500.00', 1),
(181, 18, 'plain flour', '250.00', 1),
(182, 18, 'egg', '6.00', 3),
(183, 19, 'fresh lasagne sheets', '300.00', 1),
(184, 19, 'lean beef mince', '700.00', 1),
(185, 19, 'Tomato sauce', '200.00', 1),
(186, 19, 'pecorino cheese', '50.00', 1),
(187, 19, 'olive oil', '3.00', 4),
(188, 20, 'ready made falafel mixture', '175.00', 1),
(189, 20, 'toasted pitta bread', '4.00', 3),
(190, 20, 'Garlic cloves', '4.00', 3),
(191, 20, 'tomato salsa', '200.00', 1),
(192, 20, 'coriander', '10.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE `measurement` (
  `id` int(11) NOT NULL,
  `measurements` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`id`, `measurements`) VALUES
(1, 'grams'),
(2, 'kilograms'),
(3, 'piece/s'),
(4, 'tbsp'),
(5, 'teaspoon'),
(6, 'cup'),
(7, 'dl'),
(8, 'ml'),
(9, 'l'),
(10, 'can');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `day_Order` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `recipe_id`, `user_name`, `user_address`, `user_phone`, `day_Order`) VALUES
(40, 4, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-26'),
(41, 10, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-31'),
(42, 10, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-26'),
(43, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-03'),
(44, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-24'),
(46, 15, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-25'),
(47, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-17'),
(49, 19, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-23'),
(50, 11, 'Aron Wega', 'Tekija 48, 71000 Sarajevo', '062-222-333', '2019-07-24'),
(52, 18, 'Aron Wega', 'Tekija 48, 71000 Sarajevo', '062-222-333', '2019-07-19'),
(53, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-25'),
(54, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-03'),
(56, 3, 'Aron Wega', 'Tekija 48, 71000 Sarajevo', '062-222-333', '2019-07-15'),
(57, 15, 'Aron Wega', 'Tekija 48, 71000 Sarajevo', '062-222-333', '2019-07-17'),
(58, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-17'),
(59, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-07-25'),
(61, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-07'),
(62, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-20'),
(63, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-27'),
(64, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-22'),
(68, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-08'),
(70, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-02'),
(75, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-08'),
(77, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-02'),
(102, 3, 'App44', 'Sarajevo, Oteska 14', '033-333-333', '2019-08-01'),
(117, 3, 'John Lock', '71000 Sarajevo, Nikole Tesle 21', '066-333-333', '2019-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serving_size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `title`, `subtitle`, `img_src`, `serving_size`, `price`, `status`, `date_time`) VALUES
(2, 'Easy chicken tagine recipe', 'with  saffron', './slike/chicken-tagine.jpg', '4 persons', '8 BAM', 1, '0000-00-00 00:00:00'),
(3, 'Vegeterian chilli', 'with kidney beans', './slike/vegeterian-chilli.jpg', '4 persons', '6 BAM', 1, '0000-00-00 00:00:00'),
(4, 'Sweet & sour chicken', 'with pineapples', './slike/sweet-sour-chicken.jpg', '2 persons', '7 BAM', 1, '0000-00-00 00:00:00'),
(5, 'Asian Prawn and quinoa salad', 'with sour dressing ', './slike/asian-prawn-quinoa-salad.jpg', '2 persons', '5 BAM', 1, '0000-00-00 00:00:00'),
(6, 'Veggie biryani', 'with curry paste', './slike/veggie-biryani.jpg', '2 persons', '8 BAM', 1, '0000-00-00 00:00:00'),
(7, 'Stunning mince pies', 'with butter', './slike/mince-pies.jpg', '4 persons', '11 BAM', 1, '0000-00-00 00:00:00'),
(8, 'Italian salad', 'with beans', './slike/italian-salad.jpg', '2 persons', '7 BAM', 1, '0000-00-00 00:00:00'),
(9, 'One-pan spaghetti', 'with nduja,fennel and olives', './slike/spaghetti-fennel.jpg', '2 persons', '6 BAM', 1, '0000-00-00 00:00:00'),
(10, 'Classic Pancakes', 'with lemon', './slike/pancakes.jpg', '2 persons', '2 BAM', 1, '0000-00-00 00:00:00'),
(11, 'Beef hotopot', 'with Worcestershire sauce', './slike/beef-pot.jpg', '4 persons', '4 BAM', 1, '0000-00-00 00:00:00'),
(12, 'Chicken Kiev', 'with garlic', './slike/kiev.jpg', '2 persons', '9 BAM', 1, '0000-00-00 00:00:00'),
(13, 'Ultimate ciabatta', 'with chorizo', './slike/chorizo.jpg', '2 persons', '2 BAM', 1, '0000-00-00 00:00:00'),
(14, 'Vegan burgers', 'with sweet potato', './slike/vegan-burger.jpg', '2 persons', '8 BAM', 1, '0000-00-00 00:00:00'),
(15, 'Stuffed peppers', 'with cooked rice', './slike/stuffed-peppers.jpg', '4 persons', '9 BAM', 1, '0000-00-00 00:00:00'),
(16, 'Chocolate biscuits', 'with chocolate chunks', './slike/choc-biscuits.jpg', '24 pieces', '10 BAM', 1, '0000-00-00 00:00:00'),
(17, 'Cupcakes', 'with chocolate', './slike/cupcakes.jpg', '10 pieces', '12 BAM', 1, '0000-00-00 00:00:00'),
(18, 'Brownie cake', 'with golden syrup', './slike/brownie.jpg', '20 pieces', '8 BAM', 1, '0000-00-00 00:00:00'),
(19, 'Lasagne', 'with pesto Genove', './slike/pesto.jpg', '4 persons', '10 BAM', 1, '0000-00-00 00:00:00'),
(20, 'Falafels', 'with parsley', './slike/easy-falafels.jpg', '14 pieces', '8 BAM', 1, '0000-00-00 00:00:00'),
(21, 'Sourdough Bread', 'with chia seeds', './slike/cheats-sourdough.jpg', '1 piece', '2 BAM', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_address`, `user_phone`) VALUES
(2, 'App44', 'hamza.crnovrsanin@gmail.com', '$2y$10$40MB3btPKDVfZiYB8KTG5O96tzMxI/k/TrIBNeAN6DuVlSHdH33U.', 'Sarajevo, Oteska 14', '033-333-333'),
(3, 'Aron Wega', 'aronwega@gmail.com', '$2y$10$QS07GNFy9yKBmRSjXq0WAuA3uKfosyLb3oEXjg0hQ6rLbCI8rbs0C', 'Tekija 48, 71000 Sarajevo', '062-222-333'),
(4, 'John Lock', 'johnlock@gmail.com', '$2y$10$9AEFKXMQvwqyMAC1exrtOOofGI.D5KXTOp9SDhM5oq8N.hIjJGB06', '71000 Sarajevo, Nikole Tesle 21', '066-333-333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `measurement` (`measurement`);

--
-- Indexes for table `measurement`
--
ALTER TABLE `measurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `measurement`
--
ALTER TABLE `measurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`),
  ADD CONSTRAINT `ingredients_ibfk_2` FOREIGN KEY (`measurement`) REFERENCES `measurement` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipe` (`recipe_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
