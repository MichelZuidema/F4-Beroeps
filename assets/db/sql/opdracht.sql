CREATE TABLE `opdracht` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `niveau` char(2) NOT NULL,
  `soort` char(10) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `content` varchar(255) NOT NULL
);