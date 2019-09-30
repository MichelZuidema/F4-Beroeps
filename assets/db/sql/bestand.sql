CREATE TABLE `bestand` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `student_id` int(11) NOT NULL,
  `bestandsnaam` varchar(255),
  `uploaded_at` datetime NOT NULL
);