CREATE TABLE `groep` (
  `id` int(11) NOT NULL AUTO_INCREMENT primary key,
  `begeleider_id` int(11) NOT NULL,
  `opdracht_id` int(11) NOT NULL,
  `begindatum` date NOT NULL,
  `einddatum` date NOT NULL,
  `beoordeling` float(4, 0)
);