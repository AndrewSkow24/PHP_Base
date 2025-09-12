CREATE TABLE `test` (
  `id` int NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `age` smallint NOT NULL,
  `salary` int NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_general_ci;
INSERT INTO `test` (`id`, `name`, `age`, `salary`)
VALUES (1, 'user1', 23, 400),
  (2, 'user2', 24, 500),
  (3, 'user3', 25, 600);