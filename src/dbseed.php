<?php
require 'bootstrap.php';

$statement = <<<EOS

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `createdDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `description`, `price`, `stock`, `createdDate`, `updatedDate`) VALUES
(2, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:47:23', '2022-02-27 19:47:23'),
(3, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:47:27', '2022-02-27 19:47:27'),
(4, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:47:27', '2022-02-27 19:47:27'),
(5, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:47:27', '2022-02-27 19:47:27'),
(6, 'testUpdate', 'testUpdate', 'dewde', 222, 3, '2022-02-27 19:47:36', '2022-02-27 19:47:36'),
(7, 'testUpdate', 'testUpdate', 'dewde', 222, 3, '2022-02-27 19:47:37', '2022-02-27 19:47:37'),
(8, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:51:07', '2022-02-27 19:51:07'),
(9, 'Ipad for edit', 'Apple', 'description for the product', 500, 10, '2022-02-27 19:51:07', '2022-02-27 19:51:07'),
(10, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:51:07', '2022-02-27 19:51:07'),
(11, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:51:23', '2022-02-27 19:51:23'),
(12, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:51:23', '2022-02-27 19:51:23'),
(13, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:51:23', '2022-02-27 19:51:23'),
(14, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:51:53', '2022-02-27 19:51:53'),
(15, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:51:53', '2022-02-27 19:51:53'),
(16, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:51:53', '2022-02-27 19:51:53'),
(17, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:28', '2022-02-27 19:52:28'),
(18, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:28', '2022-02-27 19:52:28'),
(19, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:52:28', '2022-02-27 19:52:28'),
(20, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:41', '2022-02-27 19:52:41'),
(21, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:41', '2022-02-27 19:52:41'),
(22, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:52:41', '2022-02-27 19:52:41'),
(23, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:53', '2022-02-27 19:52:53'),
(24, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:52:53', '2022-02-27 19:52:53'),
(25, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:52:53', '2022-02-27 19:52:53'),
(26, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:53:13', '2022-02-27 19:53:13'),
(27, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:53:13', '2022-02-27 19:53:13'),
(28, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:53:13', '2022-02-27 19:53:13'),
(29, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:55:06', '2022-02-27 19:55:06'),
(30, 'Ipad', 'Apple', 'description fr the product', 500, 10, '2022-02-27 19:55:06', '2022-02-27 19:55:06'),
(31, 'Iphone', 'Apple', 'description fr the product', 1000, 5, '2022-02-27 19:55:06', '2022-02-27 19:55:06');

EOS;

try {
  $createTable = $dbConnection->exec($statement);
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}
