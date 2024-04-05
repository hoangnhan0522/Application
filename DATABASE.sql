-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 02, 2024 lúc 02:16 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `DATABASE`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`) VALUES
(4, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'international-bussines'),
(2, 'software-technology'),
(3, 'optical-relationstch'),
(4, 'graphic-design');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_at` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `name`, `mobile`, `address`, `date_at`, `total`, `status`) VALUES
(4, 2, 'Đỗ Hoàng Nhân', 393342178, 'Hồ Chí MInh', '2024-01-01 00:00:00', 6, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `orderid_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `orderid_id`, `quantity`) VALUES
(6, 12, 4, 2),
(7, 11, 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `introduce` varchar(400) DEFAULT NULL,
  `body` varchar(1000) DEFAULT NULL,
  `end` varchar(400) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `description`, `image`) VALUES
(1, 2, 'Software Engineering: Principles and Practices', 2, 'Software Engineering: Principles and Practices is a designed as a textbook for students of undergraduate and postgraduate degree courses in computer engineering, computer science, information technology, and computer applications.', 'IT1-6608fabd45f0a.jpg'),
(2, 2, 'Software Engineering', 2, 'This edition covers the different stages of software development Life cycle I.E. Requirements engineering, design, coding, testing and maintenance in detail. Additionally topics like configuration management, project management, agile methods, risk analys', 'IT2-660903ba05f9b.jpg'),
(3, 2, 'Software Engineering: A Practitioner\'s Approach', 2, 'For almost four decades this textbook has been the world’s leading book in software engineering. The ninth edition represents a major restructuring and update of previous editions, solidifying the book’s position as the most comprehensive guide to this im', 'IT3-660903e519afe.jpg'),
(4, 2, 'ISE SOFTWARE ENGINEERING', 2, 'For almost four decades, Software Engineering: A Practitioner\'s Approach (SEPA) has been the world\'s leading textbook in software engineering. The ninth edition represents a major restructuring and update of previous editions, solidifying the book\'s posit', 'IT4-66090433e4f5f.jpg'),
(5, 2, 'Hands-On Software Engineering with Golang', 2, 'Over the last few years, Go has become one of the favorite languages for building scalable and distributed systems. Its opinionated design and built-in concurrency features make it easy for engineers to author code that efficiently utilizes all available', 'IT5-66090460788e3.jpg'),
(6, 2, 'Engineering for Msc It by Nirmaljit kaur and Rakesh Kumar Edition 2022', 2, 'Engineering for Msc It by Nirmaljit kaur and Rakesh Kumar Edition 2022', 'IT6-66090841d9cee.jpg'),
(7, 1, 'International Business', 2, 'This textbook connects tried-and-tested theory, analytical frameworks, data and case examples to deliver a comprehensive guide to the subject from authors who keep pace with the ongoing developments in both theory and practice.', 'ib1-660908b36e275.jpg'),
(8, 1, 'International Business: Competing in the Global Marketplace', 2, 'Market-defining since it was introduced, International Business: Competing in the Global Marketplace by Charles W.L. Hill (University of Washington) sets the standard and is the proven choice for International Business at the undergraduate and graduate le', 'ib2-660909b01d43e.png'),
(9, 1, 'International Business 3rd Edition', 2, 'INTERNATIONAL BUSINESS continues to be the only international business text written specifically for the high school market. Students learn the basic foundations of business within the context of the global economy. This edition includes enhanced coverage', 'ib3-660909e8ac831.jpg'),
(10, 1, 'International Business: Environments & Operations, 17th Global Edition', 2, 'Learn to understand international business markets with this premier text. International Business: Environments and Operations, 17th Edition, Global Edition, remains one of the most authoritative international business texts available.', 'ib4-66090ab152015.webp'),
(11, 3, 'Colour and Optical Properties of Materials', 2, 'Colour is an important and integral part of everyday life, and an understanding and knowledge of the scientific principles behind colour, with its many applications and uses, is becoming increasingly important to a wide range of academic disciplines, from', 'OR1-66090c2cd633f.jpg'),
(12, 3, 'Optical Networking & Wdm', 2, 'This work attempts to demystify the operation of all optical networking technologies in general and DWDM in particular. It discusses when, why and how to uses optical networks and gives step-by-step guidelines for implementation. IT also covers optical n', 'OR2-66090c5b00ea0.jpg'),
(13, 3, 'Fundamentals of Quantum Optics', 2, 'This graduate-level text employs a formal, classical viewpoint to survey the fundamentals of quantum optics. Its coverage includes the quantum theory of partial coherence and the nature of the relations between classical and quantum theories of coherence.', 'Or3-66090c9870479.jpg'),
(14, 4, 'The History of Graphic Design. 40th Ed.', 2, 'In this volume, Jens Müller traces 130 years of graphic design, designers, and developments from the late 19th century through the economic boom after World War II until today. Year-by-year spreads are combined with in-depth features on dozens of landmark', 'GD-66090d401c575.webp'),
(15, NULL, 'Book of Ideas - a journal of creative direction and graphic design', 2, 'It’s about how the world around us impacts our creativity, too—how it inspires us, what it teaches us, and how looking outwards ultimately makes us create better work.', 'GD2-66090d9c7b521.jpg'),
(16, 4, 'The Elements of Graphic Design', 2, 'The Elements of Graphic Design: Space, Unity, Page Architecture, and Type is in its 3rd Edition, published in 2022. The 1st and 2nd Editions have sold 85,000 copies and the book has become a standard text in graphic design programs across the US and in a', 'GD3-66090dd7841b5.webp'),
(17, 4, 'Graphic Design School: The Principles and Practice of Graphic Design', 2, 'This book is whole course on graphic design, which is why I’m recommending it for beginners. It gives you the whole overview of what graphic design is and how to become a professional graphic designer. It covers not only the fundamentals of design, but al', 'GD4-66090e2689c3f.jpg'),
(18, 4, 'Graphic Design Rules: 365 Essential Design Dos and Don’ts', 2, 'This book is a superb shortcut to learning tried and tested rules of graphic design. This actionable, easy to understand guide compiles more than 300 tips, rules, and guides on how to successfully avoid mistakes as a designer and, more importantly, follow', 'GD5-66090e645df0a.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `position_id` int(11) DEFAULT NULL,
  `email` varchar(180) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `position_id`, `email`, `roles`, `password`) VALUES
(1, NULL, 'admin@gmail.com', '[\"ROLE_ADMIN1\"]', '$2y$13$ivbFhWQhO3ljssai0rxTZO5qkV.hlu8M/TDz2r8R2x2BNr612OT9m'),
(2, NULL, 'nhan@gmail.com', '[\"ROLE_USER\",\"ROLE_ADMIN1\",\"ROLE_ADMIN\"]', '$2y$13$JKEB27shwYY1MH9bGkFGa.0IBrLsfe4jVA1SFI8FyMUIWr/mlAvbm'),
(3, NULL, 'thanh@gmail.com', '[]', '$2y$13$V0JS5Pcc2f1QO1KqBZ7Mje95SxY1Y3CyrIObQGn7rTRGfvkJjploO'),
(4, NULL, 'quyet@gmail.com', '[]', '$2y$13$LNF1cwp62Ndi8jO8acukFe.Up8NplVCaaYcvfQYHhEapry/YUmJHC'),
(5, NULL, 'tu@gmail.com', '[]', '$2y$13$fDiZAXYEbX0ujnxU3UBwMOBoDlXBIlxGlaSBTs99FrUkhnt3vCE1C');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_BA388B74584665A` (`product_id`),
  ADD KEY `IDX_BA388B7A76ED395` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F5299398A76ED395` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_ED896F464584665A` (`product_id`),
  ADD KEY `IDX_ED896F466F90D45B` (`orderid_id`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D34A04AD12469DE2` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D649DD842E46` (`position_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_BA388B74584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_BA388B7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_ED896F464584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_ED896F466F90D45B` FOREIGN KEY (`orderid_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649DD842E46` FOREIGN KEY (`position_id`) REFERENCES `position` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
