CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `student_id` int(11) NOT NULL,
  `content` varchar(255),
  `time` DATETIME NOT NULL
);