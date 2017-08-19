-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2017 at 10:17 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `green-fig`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  `option1` varchar(20) DEFAULT NULL,
  `option2` varchar(20) DEFAULT NULL,
  `dsc` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `price2` decimal(10,2) NOT NULL,
  `price3` decimal(10,2) NOT NULL,
  `price4` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `label`, `option1`, `option2`, `dsc`, `price`, `price2`, `price3`, `price4`) VALUES
(8, 'The Ridge', 'Sandwiches', '', '', 'Mozzarella and prosciutto', '8.75', '0.00', '0.00', '0.00'),
(9, 'Bella Storia', 'Sandwiches', NULL, NULL, 'Mozzarella, prosciuto, sundried peppers', '10.35', '0.00', '0.00', '0.00'),
(10, 'Amore', 'Sandwiches', NULL, NULL, 'Grilled chicken, mozzarella, red onion, avocado', '11.15', '0.00', '0.00', '0.00'),
(11, 'Affumicato', 'Sandwiches', NULL, NULL, 'Warm turkey, white American, avocado, arguala, mayo', '11.15', '0.00', '0.00', '0.00'),
(12, 'Michelangelo', 'Sandwiches', NULL, NULL, 'Hot capicollo, mozzarella, arugula', '9.80', '0.00', '0.00', '0.00'),
(13, 'Divinci', 'Sandwiches', NULL, NULL, 'Hot capicollo, provolone cheese, grilled eggplant', '10.35', '0.00', '0.00', '0.00'),
(14, 'Challa', 'Sandwiches', NULL, NULL, 'Hot soppressata, french cheese', '9.30', '0.00', '0.00', '0.00'),
(15, 'Strada', 'Sandwiches', NULL, NULL, 'Hot soppressata, chef\'s cheese, olives', '9.80', '0.00', '0.00', '0.00'),
(16, 'Calabria', 'Sandwiches', NULL, NULL, 'Italian ham, mozzarella, Roso baslamic glaze', '8.75', '0.00', '0.00', '0.00'),
(17, 'Como', 'Sandwiches', NULL, NULL, 'Italian ham, provolone cheese, tomato', '9.30', '0.00', '0.00', '0.00'),
(18, 'Mondo Blue', 'Sandwiches', NULL, NULL, 'Italian ham, American cheese, arugula tomato and mayo', '9.80', '0.00', '0.00', '0.00'),
(19, 'Roma', 'Sandwiches', NULL, NULL, 'Italian ham, fontina cheese, sundried tomato', '9.80', '0.00', '0.00', '0.00'),
(20, 'Bus Stop', 'Sandwiches', NULL, NULL, 'Roast beef, avocado, onion, mayo', '9.80', '0.00', '0.00', '0.00'),
(21, 'MTA', 'Sandwiches', NULL, NULL, 'Roast beef, mozzarella, roso balsamic glaze', '8.75', '0.00', '0.00', '0.00'),
(22, 'The B&3', 'Sandwiches', NULL, NULL, 'Roast beef, mozzarella, sundried peppers', '9.80', '0.00', '0.00', '0.00'),
(23, 'Tempo', 'Sandwiches', NULL, NULL, 'Roast beef, American cheese, arugula tomato with mayo', '9.80', '0.00', '0.00', '0.00'),
(24, 'The Gobble', 'Sandwiches', NULL, NULL, 'Turkey mozzarella with Roso balsamic glaze', '8.75', '0.00', '0.00', '0.00'),
(25, 'Yellow B', 'Sandwiches', NULL, NULL, 'Turkey American cheese, arugula tomato with mayo', '9.80', '0.00', '0.00', '0.00'),
(26, 'The R Train', 'Sandwiches', NULL, NULL, 'Turkey,mozzarella, sundried peppers, Roso balsamic glaze', '10.35', '0.00', '0.00', '0.00'),
(27, 'Capri', 'Sandwiches', NULL, NULL, 'Grilled Chicken, mozzarella, sundried peppers, Roso balsamic glaze', '10.85', '0.00', '0.00', '0.00'),
(28, 'Fantastico', 'Sandwiches', NULL, NULL, 'Grilled Chicken, french cheese and grilled eggplant', '10.85', '0.00', '0.00', '0.00'),
(29, 'Azzurro', 'Sandwiches', NULL, NULL, 'Tuna, bel paese cheese, sundried peppers', '9.80', '0.00', '0.00', '0.00'),
(30, 'Greenwood', 'Sandwiches', NULL, NULL, 'Tuna, mozzarella, grilled eggplant, Roso balsamic glaze', '10.35', '0.00', '0.00', '0.00'),
(31, 'Gluseppe', 'Sandwiches', NULL, NULL, 'Tuna, tomatoes, hot pepper, arugula, mayo', '9.80', '0.00', '0.00', '0.00'),
(32, 'Red Harvest', 'Vegetarian Sandwiches', NULL, NULL, 'Mozzarella and tomatoes', '7.70', '0.00', '0.00', '0.00'),
(33, 'Green Leaf', 'Vegetarian Sandwiches', '', '', 'Mixed cheeses, arugula, raisins, walnuts, evoo', '9.80', '0.00', '0.00', '0.00'),
(34, 'Artisan', 'Vegetarian Sandwiches', NULL, NULL, 'Grilled veggies with mozzarella, Roso balsamic glaze', '8.75', '0.00', '0.00', '0.00'),
(35, 'Giardino', 'Vegetarian Sandwiches', NULL, NULL, 'Arugula, mozzarella, tomatoes', '8.75', '0.00', '0.00', '0.00'),
(36, 'Formaggio', 'Vegetarian Sandwiches', NULL, NULL, 'Chef\'s cheese, olives, walnuts, artichoke, cranberries', '9.80', '0.00', '0.00', '0.00'),
(37, 'Tree Nut', 'Vegetarian Sandwiches', NULL, NULL, 'Avocado, mixed cheeses, waluts, dry cranberries, pesto', '10.85', '0.00', '0.00', '0.00'),
(38, 'Teepo Rosso', 'Vegan Sandwiches', NULL, NULL, 'Tomato, evoo, red onions and seasoning', '7.70', '0.00', '0.00', '0.00'),
(39, 'Grano Duro', 'Vegan Sandwiches', NULL, NULL, 'Vegan mozzarella, grilled artichoke and tomato', '9.80', '0.00', '0.00', '0.00'),
(40, 'Street Lamp', 'Vegan Sandwiches', NULL, NULL, 'Grilled eggplant and tomatoes', '9.30', '0.00', '0.00', '0.00'),
(41, 'Jackgreen', 'Vegan Sandwiches', NULL, NULL, 'Mixed grilled veggies with Roso balsamic glaze', '8.75', '0.00', '0.00', '0.00'),
(42, 'Grasshopper', 'Vegan Sandwiches', NULL, NULL, 'Vegan mozzarella with tomato and arugula', '9.80', '0.00', '0.00', '0.00'),
(43, 'The Ladybug', 'Vegan Sandwiches', NULL, NULL, 'Mixed Greens, avocado with Roso Balsamic glaze', '8.20', '0.00', '0.00', '0.00'),
(44, 'Bestseller', 'Vegan Sandwiches', NULL, NULL, 'Broccoli rabe with sautéed garlic', '9.80', '0.00', '0.00', '0.00'),
(45, 'Black Bird', 'Vegan Sandwiches', NULL, NULL, 'Grilled eggplant with Roso balsamic glaze', '10.35', '0.00', '0.00', '0.00'),
(46, 'Margarita', 'Personal Pizza', NULL, NULL, '', '5.90', '0.00', '0.00', '0.00'),
(55, 'House', 'Salad', NULL, NULL, 'Mesclun lettuce, mozzarella with Roso balsamic glaze', '6.15', '0.00', '0.00', '0.00'),
(56, 'Junk Draw', 'Salad', NULL, NULL, 'Mesclun lettuce, eggplant, roasted peppers, sun-dried tomatoes, mozzarella, walnuts, cranberries and Roso balsamic glaze', '8.40', '0.00', '0.00', '0.00'),
(57, 'Bruschetta', 'Salad', NULL, NULL, 'Four slices of bread, toasted to a crisp, topped with diced tomato, mozzarella, red onion and fresh basil', '6.65', '0.00', '0.00', '0.00'),
(58, 'Grilled Chicken Salad', 'Salad', NULL, NULL, 'Marinated grilled chicken with mesclun lettuce and Roso balsamic glaze', '9.80', '0.00', '0.00', '0.00'),
(59, 'Triple S Salad', 'Salad', NULL, NULL, 'Mesclun lettuce and smoked salmon with Roso balsamic glaze', '9.50', '0.00', '0.00', '0.00'),
(60, 'Avocado Salad', 'Salad', NULL, NULL, 'Sliced avocado with red onions, olive oil, salt, pepper, lemon juice and tarallis', '5.30', '0.00', '0.00', '0.00'),
(80, 'Brooklyn Roast', 'The Bar', NULL, NULL, 'Our very own dark roast blend of Panama Lerida Estate, Mexican Custepec and Hawaiian Kona roasted to a Viennese style', '1.95', '2.50', '2.50', '3.75'),
(81, 'Americano', 'The Bar', NULL, NULL, 'A fresh shot of expresso with filtered water', '2.50', '3.50', '3.50', '4.50'),
(82, 'Cafe Macchiatto', 'The Bar', NULL, NULL, 'A shot of expresso smoothened by a small amount of foamed milk', '2.22', '3.75', '2.22', '4.25'),
(83, 'Red Eye', 'The Bar', NULL, NULL, 'A highly caffeinated beverage made of our very own dark roast drip coffee and espresso', '3.75', '4.25', '4.25', '5.25'),
(84, 'Classic Café Latte ', 'The Bar', NULL, NULL, 'Espresso & milk topped with a thin layer of creamy micro-foam ', '2.50', '3.75', '3.75', '4.75'),
(85, 'Espresso', 'The Bar', NULL, NULL, 'A strong European-style Café served in a small demitasse cup', '1.95', '3.50', '2.25', '3.75'),
(86, 'Cappuccino', 'The Bar', NULL, NULL, 'Espresso & milk with frothy foam and cinnamon', '2.50', '3.75', '3.75', '4.75'),
(87, 'Chai Latte', 'The Bar', NULL, NULL, 'A spiced chai tea with milk', '2.50', '3.75', '3.75', '4.75'),
(88, 'Dirty Chai Latte', 'The Bar', NULL, NULL, 'A spiced chai tea with milk and espresso', '3.75', '4.75', '4.75', '5.75'),
(89, 'Mocha Latte', 'The Bar', NULL, NULL, 'Espresso with rich cocoa joe and milk ', '3.75', '4.75', '4.75', '5.75'),
(90, 'Gourmet Hot Chocolate ', 'The Bar', NULL, NULL, 'Rich Cocoa Joe with milk', '2.50', '3.25', '3.25', '4.25'),
(91, 'Pick Your Blend ', 'The Bar', NULL, NULL, 'Whole milk, Half&Half, Skim milk, (almond milk or Soy milk...add $0.50)', '0.00', '0.00', '0.00', '0.00'),
(92, 'Organic Green Tea ', 'The Herbal Garden', NULL, NULL, 'A Japanese-style tea possessing a sweet light flavor', '2.00', '2.50', '2.50', '3.75'),
(93, 'Organic Earl Grey Tea', 'The Herbal Garden', NULL, NULL, 'Full black tea leaves, with their legendary flavor from natural bergamot oil and a citrus grown in Bergamo, Italy', '2.00', '2.50', '2.50', '3.75'),
(94, 'Organic Chamomile Tea', 'The Herbal Garden', NULL, NULL, 'A rich apple scent with soft honey notes and lemon edge', '2.00', '2.50', '2.50', '3.75'),
(95, 'Lipton Tea ', 'The Herbal Garden', NULL, NULL, 'Orange Pekoe black tea', '1.75', '2.25', '2.25', '3.25'),
(96, 'English Breakfast Tea', 'The Herbal Garden', NULL, NULL, 'A classical British-style blend of fine black teas, full-bodied and smooth', '2.00', '2.50', '2.50', '3.75'),
(97, 'Red Zinger Tea', 'The Herbal Garden', NULL, NULL, 'Tangy and fruity hibiscus leaves with refreshing peppermint, sweet orange, lively lemongrass and earthy wild cherry bark', '2.00', '2.50', '2.50', '3.75'),
(98, 'Lemon Zinger Tea', 'The Herbal Garden', NULL, NULL, 'A blend of real lemons and Guatemalan lemongrass with hibiscus', '2.00', '2.50', '2.50', '3.75'),
(99, 'Joepaccino', 'Hall of Fame', NULL, NULL, 'Our Signature frappe, ask about it!', '5.00', '0.00', '0.00', '0.00'),
(100, 'Mixed Fruit', 'Hall of Fame', NULL, NULL, 'Our Very own assortment of fresh berries blended with orange juice', '5.25', '0.00', '0.00', '0.00'),
(101, 'Cocoa Nocciola', 'Hall of Fame', NULL, NULL, 'A milk smoothie mixed with our gourmet chocolate and hazelnut syrup', '5.00', '0.00', '0.00', '0.00'),
(102, 'Mango Tea', 'Hall of Fame', NULL, NULL, 'Iced black tea and mango syrup', '4.75', '0.00', '0.00', '0.00'),
(103, 'Matt Black', 'Hall of Fame', NULL, NULL, 'A triple shot of iced espresso, sweetened and separated by a frothy cream  ', '4.00', '0.00', '0.00', '0.00'),
(104, 'Coca Cola', 'Beverages', NULL, NULL, '', '1.95', '0.00', '0.00', '0.00'),
(105, 'Diet Coke', 'Beverages', NULL, NULL, '', '1.95', '0.00', '0.00', '0.00'),
(106, 'Bottled Water', 'Beverages', NULL, NULL, '', '1.40', '0.00', '0.00', '0.00'),
(107, 'Mineral Water', 'Beverages', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(109, 'San Benedetto Iced Tea (Lemon, Peach, or Green)', 'Beverages', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(110, 'Lemonata (Lemon)', 'Beverages | San Pellegrino Imported Soda', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(111, 'Aranciata Rossa (Blood orange)', 'Beverages | San Pellegrino Imported Soda', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(112, 'Aranciata (Orange)', 'Beverages | San Pellegrino Imported Soda', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(113, 'Clementina (Clementine)', 'Beverages | San Pellegrino Imported Soda', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(114, 'Melograno E Arancia (Pomegranate & Orange) ', 'Beverages | San Pellegrino Imported Soda', NULL, NULL, '', '2.50', '0.00', '0.00', '0.00'),
(116, 'Plain ', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.10', '0.00', '0.00', '0.00'),
(117, 'Multigrain', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.70', '0.00', '0.00', '0.00'),
(118, 'Whole Wheat', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.40', '0.00', '0.00', '0.00'),
(119, 'Everything ', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.50', '0.00', '0.00', '0.00'),
(120, 'Sesame/Poppy', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.30', '0.00', '0.00', '0.00'),
(121, 'Cinnamon Raisin ', 'The Early Birds | Step 1: Pick Bagel', NULL, NULL, '', '1.95', '0.00', '0.00', '0.00'),
(122, 'The Classic ', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Smooth cream chesse', '1.40', '0.00', '0.00', '0.00'),
(123, 'The Original ', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Salted butter', '0.55', '0.00', '0.00', '0.00'),
(124, 'The Jelly Belly', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Smooth cream cheese, two eggs, yellow American cheese', '2.50', '0.00', '0.00', '0.00'),
(125, 'The King', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Sizzled panchetta, two eggs, yellow American cheese ', '5.00', '0.00', '0.00', '0.00'),
(126, 'The Queen', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Sizzled Italian ham, two eggs, yellow American cheese', '5.00', '0.00', '0.00', '0.00'),
(127, 'Off The Boat', 'The Early Birds | Step 2: Pick Style', NULL, NULL, 'Smoked salmon, cream cheese, beefsteak tomato', '6.25', '0.00', '0.00', '0.00'),
(128, 'House Salad ', 'Non Pane', NULL, NULL, 'Baby Arugula, diced fresh mozzarella and our signature glaze', '8.50', '0.00', '0.00', '0.00'),
(129, 'Junk Draw ', 'Non Pane', NULL, NULL, 'Baby Arugala, tossed with traditionally marinated grilled eggplant, sweet sun-dried peppers, sun-dried tomato, diced fresh mozzarella, walnuts, raisins and our signature balsamic glaze ', '15.50', '0.00', '0.00', '0.00'),
(130, 'Smoked Salmon', 'Non Pane', NULL, NULL, 'Baby Arugula, smoked salmon and our signature and balsamic glaze ', '9.50', '0.00', '0.00', '0.00'),
(131, 'Grilled Chicken ', 'Non Pane', NULL, NULL, 'Baby Arugula, marinated grilled chicken, diced fresh mozzarella and our signature balsamic glaze          ', '11.50', '0.00', '0.00', '0.00'),
(132, 'Italian Tuna', 'Non Pane', NULL, NULL, 'Baby Arugula, Pastene Italian Tuna, sliced P\'tit Basque French cheese and our signature balsamic   ', '11.50', '0.00', '0.00', '0.00'),
(133, 'Avocado ', 'Non Pane', NULL, NULL, 'Sliced whole avocado, red onion, fresh lemon juice, olive oil, balsamic, salt & pepper on a bed of seasoned greens', '5.50', '0.00', '0.00', '0.00'),
(134, 'The Ridge ', 'The Chef\'s House | Prosciutto di Parma', NULL, NULL, '', '0.00', '0.00', '0.00', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;