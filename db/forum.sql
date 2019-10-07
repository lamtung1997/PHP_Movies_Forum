-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 05, 2018 lúc 12:20 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `forum`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `answer` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`aid`, `id`, `name`, `answer`) VALUES
(1, 1, 'lamtung', 'Báº¡n xem phim America Beauty chÆ°a, hay láº¯m');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentation`
--

CREATE TABLE `commentation` (
  `CID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `commentator` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `commentation` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `commentation`
--

INSERT INTO `commentation` (`CID`, `id`, `commentator`, `commentation`) VALUES
(1, 1, 'lamtung', 'Phim hay quÃ¡'),
(2, 1, 'haiquan', 'Ai cÃ³ báº£n full 3 tiáº¿ng khÃ´ng nhá»‰'),
(3, 2, 'lamtung', 'Xem phim nÃ y buá»“n cÆ°á»i quÃ¡ :))');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `link` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `synopsis` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `name`, `image`, `year`, `link`, `synopsis`) VALUES
(1, 'Avengers: Infinity War', 'avengers4.jpg', 2018, 'https://www.imdb.com/title/tt4154756/?ref_=nv_sr_1', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.'),
(2, 'Blockers', 'blockers.jpg', 2018, 'https://www.imdb.com/title/tt2531344/?ref_=nv_sr_1', 'Three parents try to stop their daughters from losing their virginity on prom night.'),
(3, 'Truth Or Dare', 'truth_or_dare.jpg', 2018, 'https://www.imdb.com/title/tt6772950/?ref_=nv_sr_1', 'A harmless game of Truth or Dare among friends turns deadly when someone -- or something -- begins to punish those who tell a lie or refuse the dare.'),
(4, 'Brain On Fire', 'brain_on_fire.jpg', 2016, 'https://www.imdb.com/title/tt3704700/?ref_=nv_sr_1', 'A young, capable professional cannot explain her newly erratic behavior.'),
(5, 'The Kissing Booth', 'kissing_booth.jpg', 2018, 'https://www.imdb.com/title/tt3799232/?ref_=nv_sr_1', 'A high school student is forced to confront her secret crush at a kissing booth.'),
(6, 'The Little Mermaid', 'the_little_mermaid.jpg', 2018, 'https://www.imdb.com/title/tt5493944/mediaviewer/rm1267813632', 'A young reporter and his niece discover a beautiful and enchanting creature they believe to be the real little mermaid.'),
(7, 'Jurassic World', 'jurassic.jpg', 2018, 'https://www.imdb.com/title/tt4881806/?ref_=nv_sr_1', 'When the island\'s dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.'),
(8, 'Ocean\'s Eight', 'oceans_eight.jpg', 2018, 'https://www.imdb.com/title/tt5164214/?ref_=nv_sr_2', 'Debbie Ocean gathers an all-female crew to attempt an impossible heist at New York City\'s yearly Met Gala.'),
(9, 'Dead Pool 2', 'dead_pool_2.jpg', 2018, 'https://www.imdb.com/title/tt5463162/?ref_=nv_sr_3', 'Foul-mouthed mutant mercenary Wade Wilson (AKA. Deadpool), brings together a team of fellow mutant rogues to protect a young boy with supernatural abilities from the brutal, time-traveling cyborg, Cable.'),
(10, 'Rampage', 'rampage.jpg', 2018, 'https://www.imdb.com/title/tt2231461/?ref_=nv_sr_1', 'When three different animals become infected with a dangerous pathogen, a primatologist and a geneticist team up to stop them from destroying Chicago.'),
(11, 'Tomb Raider', 'tomb_raider.jpg', 2018, 'https://www.imdb.com/title/tt1365519/?ref_=nv_sr_1', 'Lara Croft, the fiercely independent daughter of a missing adventurer, must push herself beyond her limits when she discovers the island where her father disappeared.'),
(12, 'Ready Player One', 'ready_player_one.jpg', 2018, 'https://www.imdb.com/title/tt1677720/?ref_=nv_sr_1', 'When the creator of a virtual reality world called the OASIS dies, he releases a video in which he challenges all OASIS users to find his Easter Egg, which will give the finder his fortune.'),
(13, 'A Quiet Place', 'a_quiet_place.jpg', 2018, 'https://www.imdb.com/title/tt6644200/?ref_=nv_sr_3', 'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.'),
(14, 'Love, Simon', 'love_simon.jpg', 2018, 'https://www.imdb.com/title/tt5164432/?ref_=nv_sr_1', 'Simon Spier keeps a huge secret from his family, his friends, and all of his classmates: he\'s gay. When that secret is threatened, Simon must face everyone and come to terms with his identity.'),
(15, 'Black Panther', 'black_panther.jpg', 2018, 'https://www.imdb.com/title/tt1825683/?ref_=nv_sr_1', 'T\'Challa, heir to the hidden but advanced kingdom of Wakanda, must step forward to lead his people into a new future and must confront a challenger from his country\'s past.'),
(16, 'Paddington 2', 'paddington_2.jpg', 2017, 'https://www.imdb.com/title/tt4468740/?ref_=nv_sr_1', 'Paddington, now happily settled with the Brown family and a popular member of the local community, picks up a series of odd jobs to buy the perfect present for his Aunt Lucy\'s 100th birthday, only for the gift to be stolen.'),
(17, 'Pitch Perfect 3', 'pitch_perfect_3.jpg', 2017, 'https://www.imdb.com/title/tt4765284/?ref_=nv_sr_1', 'Following their win at the world championship, the now separated Bellas reunite for one last singing competition at an overseas USO tour, but face a group who uses both instruments and voices.'),
(18, 'Jumanji', 'jumanji.jpg', 2017, 'https://www.imdb.com/title/tt2283362/?ref_=nv_sr_1', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.'),
(19, 'Justice League', 'justice_league.jpg', 2017, 'https://www.imdb.com/title/tt0974015/?ref_=nv_sr_1', 'Fueled by his restored faith in humanity and inspired by Superman\'s selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy.'),
(20, 'The Golden Circle', 'the_golden_circle.jpg', 2017, 'https://www.imdb.com/title/tt4649466/?ref_=nv_sr_1', 'When their headquarters are destroyed and the world is held hostage, the Kingsman\'s journey leads them to the discovery of an allied spy organization in the United States. These two elite secret organizations must band together to defeat a common enemy.'),
(21, 'IT', 'it.jpg', 2017, 'https://www.imdb.com/title/tt1396484/?ref_=nv_sr_3', 'In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `question`) VALUES
(1, 'Cho em há»i cÃ³ phim nÃ o hay hay khÃ´ng áº¡');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('lamtung', '123', 'nguyenlamtung@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Chỉ mục cho bảng `commentation`
--
ALTER TABLE `commentation`
  ADD PRIMARY KEY (`CID`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`,`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `commentation`
--
ALTER TABLE `commentation`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
